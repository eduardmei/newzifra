(() => {
  const root = document.documentElement;
  const sceneHexes = document.getElementById("hexes");
  const burger = document.querySelector(".burger");
  const header = document.querySelector(".header");
  const nav = document.getElementById("site-nav");

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const finePointer = window.matchMedia("(hover: hover) and (pointer: fine)").matches;
  const isMobile = window.matchMedia("(max-width: 860px)").matches;

  const motionTasks = [];
  let motionFrame = 0;

  const tickMotion = () => {
    if (document.hidden) {
      motionFrame = 0;
      return;
    }

    let active = false;
    for (const task of motionTasks) {
      if (task()) active = true;
    }

    if (active) {
      motionFrame = requestAnimationFrame(tickMotion);
    } else {
      motionFrame = 0;
    }
  };

  const wakeMotion = () => {
    if (document.hidden || motionFrame) return;
    motionFrame = requestAnimationFrame(tickMotion);
  };

  let idleTimer = 0;
  root.classList.add("is-idle");

  const resetIdle = () => {
    root.classList.remove("is-idle");
    clearTimeout(idleTimer);
    idleTimer = window.setTimeout(() => {
      root.classList.add("is-idle");
    }, 2500);
  };

  const syncPaused = () => {
    root.classList.toggle("is-paused", document.hidden);
  };

  const stopMotion = () => {
    if (!motionFrame) return;
    cancelAnimationFrame(motionFrame);
    motionFrame = 0;
  };

  document.addEventListener("visibilitychange", () => {
    syncPaused();
    if (document.hidden) stopMotion();
    else wakeMotion();
  });

  window.addEventListener("scroll", resetIdle, { passive: true });
  syncPaused();

  const bindHorizontalSwipe = (el, handlers) => {
    let armed = false;
    let axis = null;
    let startX = 0;
    let startY = 0;
    const slop = 14;

    const reset = () => {
      armed = false;
      axis = null;
    };

    el.addEventListener("pointerdown", (event) => {
      if (handlers.ignore?.(event)) return;
      if (event.pointerType === "mouse" && event.button !== 0) return;
      armed = true;
      // Не лочим ось сразу: иначе preventDefault на pointermove глотает click по ссылкам
      axis = null;
      startX = event.clientX;
      startY = event.clientY;
      handlers.onDown?.(event);
    });

    el.addEventListener("pointermove", (event) => {
      if (!armed) return;
      const dx = event.clientX - startX;
      const dy = event.clientY - startY;
      if (!axis) {
        if (Math.hypot(dx, dy) < slop) return;
        const horizontal = Math.abs(dx) >= Math.abs(dy) * 1.35 && Math.abs(dx) >= slop;
        if (!horizontal) {
          reset();
          handlers.onCancel?.();
          return;
        }
        axis = "x";
        try { el.setPointerCapture(event.pointerId); } catch (_) {}
        handlers.onLock?.();
      }
      if (axis !== "x") return;
      event.preventDefault();
      handlers.onMove(dx, event);
    }, { passive: false });

    const finish = (commit) => {
      if (!armed) return;
      const locked = axis === "x";
      reset();
      if (locked) handlers.onEnd(commit);
      else handlers.onCancel?.();
    };

    el.addEventListener("pointerup", () => finish(true));
    el.addEventListener("pointercancel", () => finish(false));
  };

  const themeBtn = document.querySelector("[data-theme-toggle]");
  const applyTheme = (theme) => {
    const next = theme === "light" ? "light" : "dark";
    root.setAttribute("data-theme", next);
    try {
      localStorage.setItem("zifra-theme", next);
    } catch (e) {}
    if (!themeBtn) return;
    const light = next === "light";
    themeBtn.setAttribute("aria-pressed", String(light));
    themeBtn.setAttribute("aria-label", light ? "Включить тёмную тему" : "Включить светлую тему");
    themeBtn.title = light ? "Тёмная тема" : "Светлая тема";
  };
  applyTheme(root.getAttribute("data-theme") || "dark");
  if (themeBtn) {
    themeBtn.addEventListener("click", () => {
      applyTheme(root.getAttribute("data-theme") === "light" ? "dark" : "light");
    });
  }

  const hexPalette = [
    "rgba(255, 61, 154, 0.55)",
    "rgba(62, 199, 255, 0.5)",
    "rgba(122, 77, 255, 0.5)",
    "rgba(255, 107, 50, 0.5)",
    "rgba(255, 59, 78, 0.45)",
  ];

  const hexLayout = [
    { x: "8%", y: "18%", size: 220, spreadX: "70px", spreadY: "-40px", rot: "18deg" },
    { x: "78%", y: "12%", size: 160, spreadX: "-90px", spreadY: "50px", rot: "-12deg" },
    { x: "62%", y: "58%", size: 280, spreadX: "110px", spreadY: "80px", rot: "8deg" },
    { x: "14%", y: "62%", size: 140, spreadX: "-60px", spreadY: "70px", rot: "24deg" },
    { x: "42%", y: "8%", size: 110, spreadX: "40px", spreadY: "-80px", rot: "-20deg" },
    { x: "88%", y: "42%", size: 190, spreadX: "-70px", spreadY: "-30px", rot: "14deg" },
    { x: "28%", y: "38%", size: 90, spreadX: "50px", spreadY: "40px", rot: "6deg" },
  ];

  if (sceneHexes && !isMobile) {
    hexLayout.forEach((item, i) => {
      const el = document.createElement("span");
      el.className = "hex";
      el.style.setProperty("--x", item.x);
      el.style.setProperty("--y", item.y);
      el.style.setProperty("--size", `${item.size}px`);
      el.style.setProperty("--spread-x", item.spreadX);
      el.style.setProperty("--spread-y", item.spreadY);
      el.style.setProperty("--rot", item.rot);
      el.style.setProperty("--color", hexPalette[i % hexPalette.length]);
      el.style.setProperty("--dur", `${16 + (i % 5) * 3}s`);
      el.style.setProperty("--delay", `${-i * 1.4}s`);
      sceneHexes.appendChild(el);
    });
  }

  let targetX = 0;
  let targetY = 0;
  let currentX = 0;
  let currentY = 0;

  const enableParallax = !reduceMotion && finePointer;
  const canUseCursor = !reduceMotion && finePointer;
  let cursorEnabled = false;
  if (canUseCursor) {
    try {
      cursorEnabled = localStorage.getItem("zifra-cursor") === "on";
    } catch (e) {
      cursorEnabled = false;
    }
  }

  let cursor = null;
  let cursorX = 0;
  let cursorY = 0;
  let cursorOn = false;
  const interactive = "a, button, [role='button'], [role='tab'], .team__bar, .news__bar, .team__viewport, .news__viewport, .specs__grid, .social, .eios-btn, .theme-fab, .burger, .header-home, .dpo-card__more, .dpo-modal__close, .dpo-course__btn, .dpo-future__cta-btn, .dpo-jump__btn, .home-banners__card";
  const typing = "input, textarea, select";
  const cursorBtn = document.querySelector("[data-cursor-toggle]");

  const syncCursorButton = () => {
    if (!cursorBtn) return;
    const off = !cursorEnabled;
    cursorBtn.setAttribute("aria-pressed", String(off));
    cursorBtn.setAttribute(
      "aria-label",
      off ? "Включить кастомный курсор" : "Отключить кастомный курсор"
    );
    cursorBtn.title = off ? "Кастомный курсор" : "Системный курсор";
  };

  const applyCursorMode = (enabled) => {
    if (!canUseCursor) return;
    cursorEnabled = Boolean(enabled);
    try {
      localStorage.setItem("zifra-cursor", cursorEnabled ? "on" : "off");
    } catch (e) {}
    document.body.classList.toggle("has-cursor", cursorEnabled);
    if (cursor && !cursorEnabled) {
      cursorOn = false;
      cursor.classList.remove("is-on", "is-hover", "is-hidden");
    }
    syncCursorButton();
  };

  if (canUseCursor) {
    cursor = document.createElement("div");
    cursor.className = "cursor";
    cursor.setAttribute("aria-hidden", "true");
    cursor.innerHTML = `
      <span class="cursor__dot"></span>
      <span class="cursor__hex">
        <svg viewBox="0 0 24 24">
          <polygon points="12 2.2 21.2 7.4 21.2 16.6 12 21.8 2.8 16.6 2.8 7.4"/>
        </svg>
      </span>
    `;
    document.body.appendChild(cursor);
    if (cursorBtn) cursorBtn.hidden = false;
    applyCursorMode(cursorEnabled);

    const syncFullscreenCursor = () => {
      const active = Boolean(
        document.fullscreenElement ||
        document.webkitFullscreenElement
      );
      document.body.classList.toggle("is-fullscreen", active);
      if (active) cursor.classList.remove("is-on");
    };

    document.addEventListener("fullscreenchange", syncFullscreenCursor);
    document.addEventListener("webkitfullscreenchange", syncFullscreenCursor);

    document.documentElement.addEventListener("mouseleave", () => {
      cursorOn = false;
      cursor.classList.remove("is-on");
    });

    document.addEventListener("visibilitychange", () => {
      if (document.hidden) {
        cursorOn = false;
        cursor.classList.remove("is-on");
      }
    });

    if (cursorBtn) {
      cursorBtn.addEventListener("click", () => {
        applyCursorMode(!cursorEnabled);
      });
    }
  }

  if (enableParallax || canUseCursor) {
    window.addEventListener("pointermove", (event) => {
      if (event.pointerType && event.pointerType !== "mouse") return;

      if (enableParallax) {
        const nx = event.clientX / window.innerWidth;
        const ny = event.clientY / window.innerHeight;
        targetX = (nx - 0.5) * 2;
        targetY = (ny - 0.5) * 2;
      }

      if (cursorEnabled && cursor) {
        cursorX = event.clientX;
        cursorY = event.clientY;
        cursor.style.setProperty("--x", `${cursorX}px`);
        cursor.style.setProperty("--y", `${cursorY}px`);
        if (!cursorOn) {
          cursorOn = true;
          cursor.classList.add("is-on");
        }
        const node = event.target instanceof Element ? event.target : null;
        cursor.classList.toggle("is-hover", Boolean(node && node.closest(interactive)));
        cursor.classList.toggle("is-hidden", Boolean(node && node.closest(typing)));
      }

      resetIdle();
      wakeMotion();
    }, { passive: true });
  }

  if (enableParallax) {
    motionTasks.push(() => {
      currentX += (targetX - currentX) * 0.055;
      currentY += (targetY - currentY) * 0.055;
      const activity = Math.min(1.35, Math.hypot(currentX, currentY));
      root.style.setProperty("--mx", currentX.toFixed(4));
      root.style.setProperty("--my", currentY.toFixed(4));
      root.style.setProperty("--activity", activity.toFixed(4));
      return Math.abs(targetX - currentX) > 0.0008 || Math.abs(targetY - currentY) > 0.0008;
    });
  }

  if (burger && nav) {
    const setMenuOpen = (open) => {
      document.body.classList.toggle("menu-open", open);
      burger.classList.toggle("is-open", open);
      burger.setAttribute("aria-expanded", String(open));
      burger.setAttribute("aria-label", open ? "Закрыть меню" : "Открыть меню");
    };

    burger.addEventListener("click", () => {
      setMenuOpen(!document.body.classList.contains("menu-open"));
    });

    const normalizePath = (path) => {
      let value = String(path || "/").toLowerCase();
      try {
        value = decodeURIComponent(value);
      } catch (e) {}
      value = value.replace(/\/index\.php$/i, "/").replace(/\/+$/, "") || "/";
      return value;
    };

    const currentPath = normalizePath(window.location.pathname);
    const candidates = [...nav.querySelectorAll("a[href]")].filter((link) => {
      if (link.target === "_blank") return false;
      const href = link.getAttribute("href");
      if (!href || href.startsWith("#") || href.startsWith("mailto:") || href.startsWith("tel:")) return false;
      try {
        const url = new URL(link.href, window.location.href);
        if (url.origin !== window.location.origin) return false;
        return true;
      } catch (e) {
        return false;
      }
    });

    let best = null;
    let bestLen = -1;
    candidates.forEach((link) => {
      const path = normalizePath(new URL(link.href, window.location.href).pathname);
      const exact = currentPath === path;
      const nested = path !== "/" && currentPath.startsWith(`${path}/`);
      if (!exact && !nested) return;
      if (path.length > bestLen) {
        best = link;
        bestLen = path.length;
      }
    });

    if (best) {
      best.setAttribute("aria-current", "page");
      const parentSub = best.closest(".has-sub");
      if (parentSub) {
        const parentLink = parentSub.querySelector(":scope > a");
        if (parentLink && parentLink !== best) {
          parentLink.classList.add("is-active");
        }
      }
    }

    nav.querySelectorAll(".has-sub > a, .has-sub > button").forEach((trigger) => {
      trigger.addEventListener("click", (event) => {
        const mobile = window.matchMedia("(max-width: 1520px)").matches;
        if (mobile) {
          event.preventDefault();
          event.stopPropagation();
        }
        const item = trigger.parentElement;
        const nested = item.classList.toggle("is-open");
        trigger.setAttribute("aria-expanded", String(nested));
      });
    });

    nav.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        if (!document.body.classList.contains("menu-open")) return;
        if (link.parentElement && link.parentElement.classList.contains("has-sub")) return;
        setMenuOpen(false);
      });
    });

    document.addEventListener("click", (event) => {
      if (!document.body.classList.contains("menu-open")) return;
      const target = event.target;
      if (!(target instanceof Node)) return;
      if (nav.contains(target) || burger.contains(target)) return;
      setMenuOpen(false);
    });

    document.addEventListener("keydown", (event) => {
      if (event.key !== "Escape") return;
      if (document.body.classList.contains("menu-open")) setMenuOpen(false);
    });
  }

  let glassTicking = false;
  const applyGlass = () => {
    if (!header) return;
    const y = window.scrollY;
    const glass = Math.min(1, y / 160);
    header.classList.toggle("is-stuck", y > 8);
    header.style.setProperty("--glass", glass.toFixed(3));
    glassTicking = false;
  };

  const onScroll = () => {
    if (!header || glassTicking) return;
    glassTicking = true;
    requestAnimationFrame(applyGlass);
  };

  window.addEventListener("scroll", onScroll, { passive: true });
  applyGlass();

  const facts = document.querySelector(".facts");
  if (facts) {
    const counters = [...facts.querySelectorAll("[data-count]")];
    const revealFacts = () => {
      facts.classList.add("is-in");
      if (reduceMotion) return;
      counters.forEach((el) => {
        const target = Number(el.dataset.count);
        if (!Number.isFinite(target)) return;
        const duration = target > 100 ? 1400 : 900;
        const start = performance.now();
        const tick = (now) => {
          const t = Math.min(1, (now - start) / duration);
          const eased = 1 - Math.pow(1 - t, 3);
          el.textContent = String(Math.round(target * eased));
          if (t < 1) requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
      });
    };

    if (reduceMotion) {
      facts.classList.add("is-static");
    } else if ("IntersectionObserver" in window) {
      const io = new IntersectionObserver((entries) => {
        if (!entries.some((entry) => entry.isIntersecting)) return;
        revealFacts();
        io.disconnect();
      }, { threshold: 0.35, rootMargin: "0px 0px -8% 0px" });
      io.observe(facts);
    } else {
      revealFacts();
    }
  }

  const specs = document.querySelector(".specs");
  if (specs) {
    const cards = [...specs.querySelectorAll(".spec")];
    const origins = [
      { x: "-120px", y: "36px", r: "-12deg" },
      { x: "0px", y: "110px", r: "4deg" },
      { x: "120px", y: "36px", r: "12deg" },
      { x: "-100px", y: "72px", r: "-8deg" },
      { x: "-24px", y: "118px", r: "5deg" },
      { x: "100px", y: "72px", r: "9deg" },
      { x: "0px", y: "128px", r: "-3deg" },
    ];

    cards.forEach((card, i) => {
      const origin = origins[i % origins.length];
      card.style.setProperty("--sx", origin.x);
      card.style.setProperty("--sy", origin.y);
      card.style.setProperty("--sr", origin.r);
      card.style.setProperty("--sd", `${(i % 3) * 80}ms`);
      if (finePointer) {
        card.addEventListener("pointermove", (event) => {
          const box = card.getBoundingClientRect();
          card.style.setProperty("--lx", `${event.clientX - box.left}px`);
          card.style.setProperty("--ly", `${event.clientY - box.top}px`);
        });
      }
    });

    const syncSpecs = () => {
      const enter = window.innerHeight * 0.8;
      const leave = window.innerHeight * 0.88;
      cards.forEach((card) => {
        const top = card.getBoundingClientRect().top;
        const assembled = card.classList.contains("is-in");
        if (!assembled && top < enter) card.classList.add("is-in");
        if (assembled && top > leave) card.classList.remove("is-in");
      });
    };

    const skipMotion =
      reduceMotion ||
      window.matchMedia("(max-width: 860px)").matches ||
      window.matchMedia("(pointer: coarse)").matches;

    if (skipMotion) {
      cards.forEach((card) => card.classList.add("is-in"));
    } else {
      specs.classList.add("is-constructing");
      let ticking = false;
      const onSpecsScroll = () => {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
          syncSpecs();
          ticking = false;
        });
      };
      window.addEventListener("scroll", onSpecsScroll, { passive: true });
      window.addEventListener("resize", onSpecsScroll, { passive: true });
      syncSpecs();
    }

    const viewport = specs.querySelector(".specs__viewport");
    const grid = specs.querySelector(".specs__grid");
    if (grid && viewport) {
      const isCarousel = () => window.matchMedia("(max-width: 860px)").matches;
      let index = 0;
      let dragX = 0;

      const gap = () => parseFloat(getComputedStyle(grid).columnGap || getComputedStyle(grid).gap) || 12;
      const step = () => {
        const card = cards[0];
        if (!card) return 1;
        return card.getBoundingClientRect().width + gap();
      };
      const lastIndex = () => Math.max(0, cards.length - 1);
      const clampIndex = (i) => Math.min(lastIndex(), Math.max(0, i));

      const render = (offset = 0) => {
        if (!isCarousel()) {
          grid.style.transform = "";
          return;
        }
        grid.style.transform = `translate3d(${-index * step() + offset}px, 0, 0)`;
      };

      const go = (dir) => {
        index = clampIndex(index + dir);
        render();
      };

      bindHorizontalSwipe(viewport, {
        ignore: () => !isCarousel(),
        onDown: () => { dragX = 0; },
        onLock: () => grid.classList.add("is-dragging"),
        onMove: (dx) => {
          dragX = dx;
          let offset = dx;
          if ((index <= 0 && offset > 0) || (index >= lastIndex() && offset < 0)) {
            offset *= 0.32;
          }
          render(offset);
        },
        onEnd: (commit) => {
          grid.classList.remove("is-dragging");
          if (commit && Math.abs(dragX) > 48) go(dragX < 0 ? 1 : -1);
          else render();
          dragX = 0;
        },
        onCancel: () => {
          grid.classList.remove("is-dragging");
          dragX = 0;
          render();
        },
      });

      viewport.addEventListener("keydown", (event) => {
        if (!isCarousel()) return;
        if (event.key === "ArrowRight") {
          event.preventDefault();
          go(1);
        }
        if (event.key === "ArrowLeft") {
          event.preventDefault();
          go(-1);
        }
      });

      window.addEventListener("resize", () => {
        index = clampIndex(index);
        render();
      }, { passive: true });
      render();
    }
  }

  const team = document.querySelector(".team");
  if (team) {
    const viewport = team.querySelector(".team__viewport");
    const track = team.querySelector(".team__track");
    const slides = [...team.querySelectorAll(".team-slide")];
    const prevBtn = team.querySelector(".team__btn--prev");
    const nextBtn = team.querySelector(".team__btn--next");
    const bar = team.querySelector(".team__bar");
    const fill = team.querySelector(".team__bar-fill");
    const thumb = team.querySelector(".team__bar-thumb");
    const namesWrap = team.querySelector(".team__names");
    const orbit = team.querySelector(".team__orbit");
    const count = slides.length;

    if (viewport && track && prevBtn && nextBtn && bar && fill && thumb && namesWrap && count) {
    let index = 0;
    let dragX = 0;
    let barDragging = false;

    const clamp = (i) => Math.min(count - 1, Math.max(0, i));
    const progress = () => (count <= 1 ? 0 : index / (count - 1));

    bar.setAttribute("aria-valuemax", String(count));

    slides.forEach((slide, i) => {
      const h3 = slide.querySelector("h3");
      const parts = h3.textContent.trim().split(/\s+/);
      const surname = parts[0];
      const firstName = parts[1] || "";
      const given = parts.slice(1).join(" ");
      h3.innerHTML = `<span class="team-slide__surname">${surname}</span><span class="team-slide__given">${given}</span>`;
      const btn = document.createElement("button");
      btn.type = "button";
      btn.className = "team__name";
      btn.textContent = `${surname} ${firstName}`.trim();
      btn.setAttribute("role", "tab");
      btn.setAttribute("aria-label", `${surname} ${given}`.trim());
      btn.addEventListener("click", () => goTo(i));
      namesWrap.appendChild(btn);
    });

    const nameBtns = [...namesWrap.querySelectorAll(".team__name")];

    const setBar = (t) => {
      const pct = `${t * 100}%`;
      fill.style.width = pct;
      thumb.style.left = pct;
    };

    const scrollActiveName = () => {
      const btn = nameBtns[index];
      if (!btn) return;
      const wrapBox = namesWrap.getBoundingClientRect();
      const btnBox = btn.getBoundingClientRect();
      const delta = btnBox.left + btnBox.width / 2 - (wrapBox.left + wrapBox.width / 2);
      namesWrap.scrollTo({ left: namesWrap.scrollLeft + delta, behavior: "smooth" });
    };

    const setOrbit = () => {
      if (!orbit) return;
      const wave = (freq, amp, phase = 0) =>
        `${Math.sin(index * freq + phase) * amp}px`;
      const layout = {
        "--o1x": wave(1.17, 92),
        "--o1y": wave(0.73, 64, 1.4),
        "--o2x": wave(1.61, -86, 0.5),
        "--o2y": wave(0.94, 72, 2.1),
        "--o3x": wave(0.81, 70, 1.8),
        "--o3y": wave(1.42, -58, 0.3),
        "--o4x": wave(1.33, -78, 2.6),
        "--o4y": wave(0.66, 60, 0.9),
        "--o5x": wave(0.97, 56, 1.1),
        "--o5y": wave(1.55, -68, 0.7),
        "--o6x": wave(1.74, -64, 2.2),
        "--o6y": wave(0.88, 52, 1.6),
      };
      Object.entries(layout).forEach(([name, value]) => {
        orbit.style.setProperty(name, value);
      });
    };

    const render = (offset = 0, { syncNames = true } = {}) => {
      const width = viewport.clientWidth;
      track.style.transform = `translateX(${-index * width + offset}px)`;
      bar.setAttribute("aria-valuenow", String(index + 1));
      setBar(progress());
      setOrbit();
      nameBtns.forEach((btn, i) => {
        const active = i === index;
        btn.classList.toggle("is-active", active);
        btn.setAttribute("aria-selected", String(active));
        btn.tabIndex = active ? 0 : -1;
      });
      prevBtn.disabled = index <= 0;
      nextBtn.disabled = index >= count - 1;
      if (syncNames) scrollActiveName();
    };

    const goTo = (i) => {
      index = clamp(i);
      render();
    };

    const go = (dir) => goTo(index + dir);

    const indexFromClientX = (x) => {
      const rect = bar.getBoundingClientRect();
      const t = Math.min(1, Math.max(0, (x - rect.left) / rect.width));
      return Math.round(t * (count - 1));
    };

    prevBtn.addEventListener("click", () => go(-1));
    nextBtn.addEventListener("click", () => go(1));

    viewport.addEventListener("keydown", (event) => {
      if (event.key === "ArrowLeft") go(-1);
      if (event.key === "ArrowRight") go(1);
    });

    bar.addEventListener("keydown", (event) => {
      if (event.key === "ArrowLeft") go(-1);
      if (event.key === "ArrowRight") go(1);
      if (event.key === "Home") goTo(0);
      if (event.key === "End") goTo(count - 1);
    });

    bar.addEventListener("pointerdown", (event) => {
      barDragging = true;
      bar.classList.add("is-dragging");
      bar.setPointerCapture(event.pointerId);
      index = clamp(indexFromClientX(event.clientX));
      render(0, { syncNames: false });
    });

    bar.addEventListener("pointermove", (event) => {
      if (!barDragging) return;
      index = clamp(indexFromClientX(event.clientX));
      render(0, { syncNames: false });
    });

    const endBarDrag = () => {
      if (!barDragging) return;
      barDragging = false;
      bar.classList.remove("is-dragging");
      scrollActiveName();
    };

    bar.addEventListener("pointerup", endBarDrag);
    bar.addEventListener("pointercancel", endBarDrag);

    bindHorizontalSwipe(viewport, {
      ignore: (event) => Boolean(event.target.closest("button")),
      onDown: () => { dragX = 0; },
      onLock: () => track.classList.add("is-dragging"),
      onMove: (dx) => {
        dragX = dx;
        let offset = dx;
        if ((index <= 0 && offset > 0) || (index >= count - 1 && offset < 0)) {
          offset *= 0.32;
        }
        render(offset, { syncNames: false });
      },
      onEnd: (commit) => {
        track.classList.remove("is-dragging");
        if (commit && Math.abs(dragX) > 56) go(dragX < 0 ? 1 : -1);
        else render();
        dragX = 0;
      },
      onCancel: () => {
        track.classList.remove("is-dragging");
        dragX = 0;
        render();
      },
    });

    window.addEventListener("resize", () => render(), { passive: true });
    render();
    }
  }

  const news = document.querySelector(".news");
  if (news) {
    const viewport = news.querySelector(".news__viewport");
    const track = news.querySelector(".news__track");
    const slides = [...news.querySelectorAll(".news-slide")];
    const prevBtn = news.querySelector(".news__btn--prev");
    const nextBtn = news.querySelector(".news__btn--next");
    const bar = news.querySelector(".news__bar");
    const fill = news.querySelector(".news__bar-fill");
    const thumb = news.querySelector(".news__bar-thumb");
    const count = slides.length;

    if (viewport && track && count && bar && fill && thumb && prevBtn && nextBtn) {
      let index = 0;
      let dragX = 0;
      let barDragging = false;

      const perView = () => {
        if (window.matchMedia("(max-width: 980px)").matches) return 1;
        if (window.matchMedia("(max-width: 1200px)").matches) return 2;
        return 3;
      };
      const pageCount = () => Math.max(1, Math.ceil(count / perView()));
      const gap = () => parseFloat(getComputedStyle(track).columnGap || getComputedStyle(track).gap) || 0;
      const pageWidth = () => viewport.clientWidth + gap();
      const lastPage = () => pageCount() - 1;
      const clamp = (i) => Math.min(lastPage(), Math.max(0, i));
      const progress = () => (pageCount() <= 1 ? 0 : index / lastPage());

      const setBar = (t) => {
        const pct = `${t * 100}%`;
        fill.style.width = pct;
        thumb.style.left = pct;
      };

      const render = (offset = 0) => {
        index = clamp(index);
        const pages = pageCount();
        track.style.transform = `translateX(${-index * pageWidth() + offset}px)`;
        bar.setAttribute("aria-valuemax", String(pages));
        bar.setAttribute("aria-valuenow", String(index + 1));
        setBar(progress());
        prevBtn.disabled = index <= 0;
        nextBtn.disabled = index >= lastPage();
      };

      const goTo = (i) => {
        index = clamp(i);
        render();
      };

      const go = (dir) => goTo(index + dir);

      const indexFromClientX = (x) => {
        const rect = bar.getBoundingClientRect();
        const t = Math.min(1, Math.max(0, (x - rect.left) / rect.width));
        return Math.round(t * lastPage());
      };

      prevBtn.addEventListener("click", () => go(-1));
      nextBtn.addEventListener("click", () => go(1));

      viewport.addEventListener("keydown", (event) => {
        if (event.key === "ArrowLeft") go(-1);
        if (event.key === "ArrowRight") go(1);
      });

      bar.addEventListener("keydown", (event) => {
        if (event.key === "ArrowLeft") go(-1);
        if (event.key === "ArrowRight") go(1);
        if (event.key === "Home") goTo(0);
        if (event.key === "End") goTo(lastPage());
      });

      bar.addEventListener("pointerdown", (event) => {
        barDragging = true;
        bar.classList.add("is-dragging");
        bar.setPointerCapture(event.pointerId);
        goTo(indexFromClientX(event.clientX));
      });

      bar.addEventListener("pointermove", (event) => {
        if (!barDragging) return;
        goTo(indexFromClientX(event.clientX));
      });

      const endBarDrag = () => {
        barDragging = false;
        bar.classList.remove("is-dragging");
      };

      bar.addEventListener("pointerup", endBarDrag);
      bar.addEventListener("pointercancel", endBarDrag);

      bindHorizontalSwipe(viewport, {
        ignore: (event) => Boolean(event.target.closest("button")),
        onDown: () => { dragX = 0; },
        onLock: () => track.classList.add("is-dragging"),
        onMove: (dx) => {
          dragX = dx;
          let offset = dx;
          if ((index <= 0 && offset > 0) || (index >= lastPage() && offset < 0)) {
            offset *= 0.32;
          }
          render(offset);
        },
        onEnd: (commit) => {
          track.classList.remove("is-dragging");
          if (commit && Math.abs(dragX) > 56) {
            viewport.addEventListener("click", (event) => event.preventDefault(), { capture: true, once: true });
            go(dragX < 0 ? 1 : -1);
          } else {
            render();
          }
          dragX = 0;
        },
        onCancel: () => {
          track.classList.remove("is-dragging");
          dragX = 0;
          render();
        },
      });

      window.addEventListener("resize", () => render(), { passive: true });
      render();
    }
  }

  const topBtn = document.querySelector(".to-top");
  if (topBtn) {
    const toggleTop = () => {
      const show = window.scrollY > 480;
      topBtn.classList.toggle("is-visible", show);
      topBtn.setAttribute("aria-hidden", show ? "false" : "true");
      topBtn.tabIndex = show ? 0 : -1;
    };
    topBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: reduceMotion ? "auto" : "smooth" });
    });
    window.addEventListener("scroll", toggleTop, { passive: true });
    toggleTop();
  }
})();
