(() => {
  const videoFrame = document.querySelector(".about-video__frame");
  const video = videoFrame?.querySelector(".about-video__player");
  const playBtn = videoFrame?.querySelector(".about-video__play");

  if (videoFrame && video && playBtn) {
    const setPlaying = (playing) => {
      videoFrame.classList.toggle("is-playing", playing);
    };

    playBtn.addEventListener("click", () => {
      video.play().catch(() => {});
    });

    video.addEventListener("play", () => setPlaying(true));
    video.addEventListener("playing", () => setPlaying(true));
    video.addEventListener("pause", () => {
      if (!video.ended) setPlaying(false);
    });
    video.addEventListener("ended", () => {
      setPlaying(false);
      video.currentTime = 0;
    });
  }

  const section = document.querySelector(".achievements-section");
  if (!section) return;

  const defaultYear = "2026";
  const yearButtons = section.querySelectorAll(".ach-year-btn");
  const cards = [...section.querySelectorAll(".achievement-card")];
  const rows = [...section.querySelectorAll(".achievements-row")];
  const carousel = section.querySelector(".achievements-carousel");
  const carouselWrap = section.querySelector(".achievements-carousel-wrap");
  const carouselPrevBtn = section.querySelector(".ach-carousel-prev");
  const carouselNextBtn = section.querySelector(".ach-carousel-next");
  const verticalCards = [...section.querySelectorAll(".achievement-card-vertical")];
  const emptyMessage = section.querySelector(".achievements-empty");

  const lightbox = document.getElementById("achievementLightbox");
  if (!lightbox || !carousel || !carouselWrap || !carouselPrevBtn || !carouselNextBtn || !emptyMessage) return;

  const lightboxContent = lightbox.querySelector(".achievement-lightbox-content");
  const lightboxCaption = lightbox.querySelector(".achievement-lightbox-caption");
  const closeBtn = lightbox.querySelector(".achievement-lightbox-close");
  const prevBtn = lightbox.querySelector(".achievement-lightbox-prev");
  const nextBtn = lightbox.querySelector(".achievement-lightbox-next");

  let visibleMedia = [];
  let currentIndex = 0;

  const updateCarouselControls = () => {
    if (carouselWrap.classList.contains("is-hidden")) return;
    const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
    const currentScrollLeft = carousel.scrollLeft;
    carouselPrevBtn.disabled = currentScrollLeft <= 2;
    carouselNextBtn.disabled = currentScrollLeft >= maxScrollLeft - 2;
  };

  const updateRowsState = () => {
    rows.forEach((row) => {
      const visibleCardsInRow = [...row.querySelectorAll(".achievement-card")]
        .filter((card) => !card.classList.contains("is-hidden"));
      row.classList.toggle("is-hidden", visibleCardsInRow.length === 0);
      row.classList.toggle("is-single-visible", visibleCardsInRow.length === 1);
    });

    const visibleVerticalCards = verticalCards.filter((card) => !card.classList.contains("is-hidden"));
    carouselWrap.classList.toggle("is-hidden", visibleVerticalCards.length === 0);
    updateCarouselControls();
  };

  const scrollCarousel = (direction) => {
    const visibleCard = carousel.querySelector(".achievement-card:not(.is-hidden)");
    const cardWidth = visibleCard ? visibleCard.getBoundingClientRect().width : carousel.clientWidth * 0.75;
    carousel.scrollBy({
      left: direction * (cardWidth + 22),
      behavior: "smooth",
    });
  };

  const updateVisibleMedia = () => {
    visibleMedia = cards
      .filter((card) => !card.classList.contains("is-hidden"))
      .map((card) => card.querySelector(".achievement-media"))
      .filter(Boolean);
  };

  const filterByYear = (year) => {
    let visibleCount = 0;
    cards.forEach((card) => {
      const isVisible = card.dataset.year === year;
      card.classList.toggle("is-hidden", !isVisible);
      if (isVisible) visibleCount += 1;
    });

    updateRowsState();
    updateVisibleMedia();
    carousel.scrollLeft = 0;
    requestAnimationFrame(updateCarouselControls);
    emptyMessage.hidden = visibleCount !== 0;
  };

  yearButtons.forEach((button) => {
    button.addEventListener("click", () => {
      yearButtons.forEach((btn) => btn.classList.remove("is-active"));
      button.classList.add("is-active");
      filterByYear(button.dataset.year);
    });
  });

  const getCardCaption = (media) => {
    const card = media.closest(".achievement-card");
    const title = card?.dataset.title || "";
    const description = card?.dataset.description || "";
    return [title, description].filter(Boolean).join(" · ");
  };

  const renderLightbox = () => {
    const media = visibleMedia[currentIndex];
    if (!media) return;

    const img = media.querySelector("img");
    const placeholder = media.querySelector(".achievement-placeholder");
    lightboxContent.innerHTML = "";

    if (img) {
      const bigImage = document.createElement("img");
      bigImage.src = img.dataset.full || img.src;
      bigImage.alt = img.alt || "Фото достижения";
      lightboxContent.appendChild(bigImage);
    } else if (placeholder) {
      lightboxContent.appendChild(placeholder.cloneNode(true));
    }

    lightboxCaption.textContent = getCardCaption(media);
  };

  const openLightbox = (media) => {
    updateVisibleMedia();
    currentIndex = Math.max(0, visibleMedia.indexOf(media));
    renderLightbox();
    lightbox.classList.add("is-open");
    lightbox.setAttribute("aria-hidden", "false");
    document.body.classList.add("achievement-lightbox-lock");
  };

  const closeLightbox = () => {
    lightbox.classList.remove("is-open");
    lightbox.setAttribute("aria-hidden", "true");
    document.body.classList.remove("achievement-lightbox-lock");
    lightboxContent.innerHTML = "";
    lightboxCaption.textContent = "";
  };

  const showNext = () => {
    if (!visibleMedia.length) return;
    currentIndex = (currentIndex + 1) % visibleMedia.length;
    renderLightbox();
  };

  const showPrev = () => {
    if (!visibleMedia.length) return;
    currentIndex = (currentIndex - 1 + visibleMedia.length) % visibleMedia.length;
    renderLightbox();
  };

  cards.forEach((card) => {
    const media = card.querySelector(".achievement-media");
    if (!media) return;
    media.addEventListener("click", () => openLightbox(media));
  });

  carouselPrevBtn.addEventListener("click", () => scrollCarousel(-1));
  carouselNextBtn.addEventListener("click", () => scrollCarousel(1));
  carousel.addEventListener("scroll", updateCarouselControls, { passive: true });
  window.addEventListener("resize", updateCarouselControls);

  closeBtn.addEventListener("click", closeLightbox);
  nextBtn.addEventListener("click", showNext);
  prevBtn.addEventListener("click", showPrev);

  lightbox.addEventListener("click", (event) => {
    if (event.target === lightbox) closeLightbox();
  });

  document.addEventListener("keydown", (event) => {
    if (!lightbox.classList.contains("is-open")) return;
    if (event.key === "Escape") closeLightbox();
    if (event.key === "ArrowRight") showNext();
    if (event.key === "ArrowLeft") showPrev();
  });

  filterByYear(defaultYear);
})();
