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

  document.querySelectorAll("[data-trud-jump]").forEach((link) => {
    link.addEventListener("click", (event) => {
      const id = link.getAttribute("data-trud-jump");
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
})();
