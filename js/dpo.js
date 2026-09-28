(() => {
  const jumpTo = (id) => {
    const target = id ? document.getElementById(id) : null;
    if (!target) return false;
    target.scrollIntoView({ behavior: "smooth", block: "start" });
    try {
      const url = new URL(window.location.href);
      url.hash = id;
      history.replaceState(null, "", url.pathname + url.search + url.hash);
    } catch (e) {}
    return true;
  };

  document.querySelectorAll("[data-dpo-jump]").forEach((link) => {
    link.addEventListener("click", (event) => {
      const id = link.getAttribute("data-dpo-jump");
      if (!jumpTo(id)) return;
      event.preventDefault();
    });
  });

  if (window.location.hash) {
    const id = window.location.hash.replace(/^#/, "");
    if (document.getElementById(id)) {
      window.requestAnimationFrame(() => jumpTo(id));
    }
  }

  const openButtons = document.querySelectorAll("[data-dpo-open]");
  if (!openButtons.length) return;

  let activeModal = null;
  let lastFocus = null;

  const getFocusable = (root) =>
    root.querySelectorAll(
      'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])'
    );

  const openModal = (modal, trigger) => {
    if (!modal || activeModal) return;
    lastFocus = trigger || document.activeElement;
    activeModal = modal;
    modal.hidden = false;
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("dpo-modal-lock");
    const dialog = modal.querySelector(".dpo-modal__dialog");
    const closeBtn = modal.querySelector(".dpo-modal__close");
    (closeBtn || dialog)?.focus();
  };

  const closeModal = () => {
    if (!activeModal) return;
    activeModal.hidden = true;
    activeModal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("dpo-modal-lock");
    const restore = lastFocus;
    activeModal = null;
    lastFocus = null;
    if (restore && typeof restore.focus === "function") restore.focus();
  };

  openButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const id = btn.getAttribute("data-dpo-open");
      if (!id) return;
      openModal(document.getElementById(id), btn);
    });
  });

  document.addEventListener("click", (event) => {
    const closer = event.target instanceof Element ? event.target.closest("[data-dpo-close]") : null;
    if (closer) closeModal();
  });

  document.addEventListener("keydown", (event) => {
    if (!activeModal) return;
    if (event.key === "Escape") {
      event.preventDefault();
      closeModal();
      return;
    }
    if (event.key !== "Tab") return;
    const focusable = [...getFocusable(activeModal)].filter((el) => {
      if (el.hasAttribute("disabled") || el.getAttribute("aria-hidden") === "true") return false;
      const style = window.getComputedStyle(el);
      return style.visibility !== "hidden" && style.display !== "none";
    });
    if (!focusable.length) return;
    const first = focusable[0];
    const last = focusable[focusable.length - 1];
    if (event.shiftKey && document.activeElement === first) {
      event.preventDefault();
      last.focus();
    } else if (!event.shiftKey && document.activeElement === last) {
      event.preventDefault();
      first.focus();
    }
  });
})();
