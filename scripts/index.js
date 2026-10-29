document.addEventListener("DOMContentLoaded", function () {
  // ==========================================
  // 1. HERO BANNER CAROUSEL
  // ==========================================
  const heroCarousel = document.getElementById("heroCarousel");
  if (heroCarousel) {
    const slides = Array.from(
      heroCarousel.querySelectorAll(".hero-carousel-slide"),
    );
    const dots = Array.from(heroCarousel.querySelectorAll(".hero-dot"));
    const previous = heroCarousel.querySelector(".hero-prev");
    const next = heroCarousel.querySelector(".hero-next");
    const progress = heroCarousel.querySelector(".hero-progress-bar");

    if (slides.length && previous && next) {
      const delay = 6000;
      const reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
      );

      let current = 0;
      let timer = null;
      let hovered = false;
      let focused = false;

      const previewClasses = ["is-preview-1", "is-preview-2", "is-preview-3"];

      function renderSlide(index) {
        current = (index + slides.length) % slides.length;

        slides.forEach((slide, i) => {
          slide.classList.remove("is-active", "is-preview", ...previewClasses);
          slide.setAttribute("aria-hidden", "true");

          if (i === current) {
            slide.classList.add("is-active");
            slide.setAttribute("aria-hidden", "false");
          } else {
            const distance = (i - current + slides.length) % slides.length;
            if (distance >= 1 && distance <= 3) {
              slide.classList.add("is-preview", previewClasses[distance - 1]);
            }
          }
        });

        dots.forEach((dot, i) => {
          const active = i === current;
          dot.classList.toggle("is-active", active);
          if (active) {
            dot.setAttribute("aria-current", "true");
          } else {
            dot.removeAttribute("aria-current");
          }
        });

        restartProgress();
      }

      function restartProgress() {
        if (!progress) return;
        progress.classList.remove("is-running");
        progress.style.animation = "none";
        void progress.offsetWidth;
        progress.style.removeProperty("animation");

        if (!reduceMotion.matches && !document.hidden && !hovered && !focused) {
          progress.classList.add("is-running");
        }
      }

      function stopAutoplay() {
        if (timer !== null) {
          clearInterval(timer);
          timer = null;
        }
        if (progress) progress.classList.remove("is-running");
      }

      function startAutoplay() {
        stopAutoplay();
        if (reduceMotion.matches || document.hidden || hovered || focused)
          return;
        timer = setInterval(() => {
          renderSlide(current + 1);
        }, delay);
        restartProgress();
      }

      function navigate(index) {
        renderSlide(index);
        startAutoplay();
      }

      previous.addEventListener("click", () => navigate(current - 1));
      next.addEventListener("click", () => navigate(current + 1));
      dots.forEach((dot, i) =>
        dot.addEventListener("click", () => navigate(i)),
      );

      heroCarousel.addEventListener("mouseenter", () => {
        hovered = true;
        stopAutoplay();
      });
      heroCarousel.addEventListener("mouseleave", () => {
        hovered = false;
        startAutoplay();
      });
      heroCarousel.addEventListener("focusin", () => {
        focused = true;
        stopAutoplay();
      });
      heroCarousel.addEventListener("focusout", (event) => {
        if (!heroCarousel.contains(event.relatedTarget)) {
          focused = false;
          startAutoplay();
        }
      });

      document.addEventListener("visibilitychange", () => {
        if (document.hidden) stopAutoplay();
        else startAutoplay();
      });

      reduceMotion.addEventListener?.("change", () => {
        startAutoplay();
        renderSlide(current);
      });

      renderSlide(0);
      startAutoplay();
    }
  }

});
