(() => {
  const page = document.querySelector(".celevoe-page");
  const lightbox = document.getElementById("celevoeLightbox");
  if (!page || !lightbox) return;

  const triggers = [...page.querySelectorAll("[data-celevoe-src]")];
  if (!triggers.length) return;

  const content = lightbox.querySelector(".achievement-lightbox-content");
  const caption = lightbox.querySelector(".achievement-lightbox-caption");
  const closeBtn = lightbox.querySelector(".achievement-lightbox-close");
  const prevBtn = lightbox.querySelector(".achievement-lightbox-prev");
  const nextBtn = lightbox.querySelector(".achievement-lightbox-next");
  if (!content || !caption || !closeBtn || !prevBtn || !nextBtn) return;

  const items = triggers.map((el) => ({
    src: el.dataset.celevoeSrc || "",
    caption: el.dataset.celevoeCaption || "",
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
    caption.textContent = item.caption;
  };

  const open = (startIndex) => {
    index = startIndex;
    render();
    lightbox.classList.add("is-open");
    lightbox.setAttribute("aria-hidden", "false");
    document.body.classList.add("achievement-lightbox-lock");
  };

  const close = () => {
    lightbox.classList.remove("is-open");
    lightbox.setAttribute("aria-hidden", "true");
    document.body.classList.remove("achievement-lightbox-lock");
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

  triggers.forEach((el, i) => {
    el.addEventListener("click", () => open(i));
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
