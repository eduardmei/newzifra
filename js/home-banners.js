(() => {
  const grid = document.querySelector(".home-banners__grid");
  const pos = document.getElementById("js-show-iframe-wrapper");
  const cards = [...document.querySelectorAll(".home-banners__card")];
  const lightbox = document.getElementById("homeBannersLightbox");
  if (!grid || !cards.length) return;

  const TARGET_H = 260;
  const GAP = 14;

  const clearCardSizes = () => {
    cards.forEach((card) => {
      card.style.height = "";
      card.style.width = "";
    });
  };

  const imageReady = (img) =>
    new Promise((resolve) => {
      if (img.complete && img.naturalWidth) {
        resolve();
        return;
      }
      const done = () => resolve();
      img.addEventListener("load", done, { once: true });
      img.addEventListener("error", done, { once: true });
      window.setTimeout(done, 2500);
    });

  const syncLayout = async () => {
    if (window.matchMedia("(max-width: 1100px)").matches) {
      clearCardSizes();
      return;
    }

    await Promise.all(
      cards.map((card) => {
        const img = card.querySelector("img");
        return img ? imageReady(img) : Promise.resolve();
      })
    );

    const ratios = cards.map((card) => {
      const img = card.querySelector("img");
      if (!img || !img.naturalWidth || !img.naturalHeight) return 1;
      return img.naturalWidth / img.naturalHeight;
    });
    const ratioSum = ratios.reduce((a, b) => a + b, 0) || cards.length;
    const posW = pos ? Math.max(pos.offsetWidth, 280) : 0;
    const gaps = GAP * (cards.length + (pos ? 1 : 0) - 1);
    const budget = Math.max(80, grid.clientWidth - gaps - posW);

    let h = TARGET_H;
    if (h * ratioSum > budget) {
      h = Math.max(180, Math.floor(budget / ratioSum));
    }

    cards.forEach((card, i) => {
      card.style.height = `${h}px`;
      card.style.width = `${Math.round(h * ratios[i])}px`;
    });
  };

  let resizeTimer = 0;
  window.addEventListener(
    "resize",
    () => {
      window.clearTimeout(resizeTimer);
      resizeTimer = window.setTimeout(syncLayout, 100);
    },
    { passive: true }
  );
  window.addEventListener("load", syncLayout);
  window.setTimeout(syncLayout, 60);

  if (!lightbox) return;

  const content = lightbox.querySelector(".home-banners-lightbox__content");
  const caption = lightbox.querySelector(".home-banners-lightbox__caption");
  const closeBtn = lightbox.querySelector(".home-banners-lightbox__close");
  const prevBtn = lightbox.querySelector(".home-banners-lightbox__prev");
  const nextBtn = lightbox.querySelector(".home-banners-lightbox__next");
  if (!content || !caption || !closeBtn || !prevBtn || !nextBtn) return;

  const items = cards.map((card) => ({
    src: card.dataset.homeBannerSrc || "",
    caption: card.dataset.homeBannerCaption || "",
    link: card.dataset.homeBannerLink || "",
    linkLabel: card.dataset.homeBannerLinkLabel || "Открыть",
  }));

  let index = 0;

  const render = () => {
    const item = items[index];
    if (!item) return;
    content.innerHTML = "";
    const img = document.createElement("img");
    img.src = item.src;
    img.alt = item.caption;
    img.decoding = "async";
    content.appendChild(img);

    caption.textContent = "";
    const text = document.createElement("span");
    text.textContent = item.caption;
    caption.appendChild(text);
    if (item.link) {
      caption.appendChild(document.createTextNode(" · "));
      const a = document.createElement("a");
      a.href = item.link;
      a.target = item.link.startsWith("http") ? "_blank" : "_self";
      if (item.link.startsWith("http")) a.rel = "noopener noreferrer";
      a.textContent = item.linkLabel;
      caption.appendChild(a);
    }
  };

  const open = (startIndex) => {
    index = startIndex;
    render();
    lightbox.classList.add("is-open");
    lightbox.setAttribute("aria-hidden", "false");
    document.body.classList.add("home-banners-lightbox-lock");
  };

  const close = () => {
    lightbox.classList.remove("is-open");
    lightbox.setAttribute("aria-hidden", "true");
    document.body.classList.remove("home-banners-lightbox-lock");
    content.innerHTML = "";
    caption.textContent = "";
  };

  const showNext = () => {
    index = (index + 1) % items.length;
    render();
  };

  const showPrev = () => {
    index = (index - 1 + items.length) % items.length;
    render();
  };

  cards.forEach((card, i) => {
    card.addEventListener("click", () => open(i));
  });

  closeBtn.addEventListener("click", close);
  nextBtn.addEventListener("click", showNext);
  prevBtn.addEventListener("click", showPrev);

  lightbox.addEventListener("click", (event) => {
    if (event.target === lightbox) close();
  });

  document.addEventListener("keydown", (event) => {
    if (!lightbox.classList.contains("is-open")) return;
    if (event.key === "Escape") close();
    if (event.key === "ArrowRight") showNext();
    if (event.key === "ArrowLeft") showPrev();
  });
})();
