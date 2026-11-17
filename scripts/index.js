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
        slides.forEach((slide, index) => {
          slide.addEventListener("click", () => {
            if (slide.classList.contains("is-preview")) {
              navigate(index);
            }
          });
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

  // Review Carousel Code
  const reviews = [
    {
      name: `Safiya`,
      date: `a year ago`,
      rating: 5,
      image: `/images/safiya.png`,
      text: `I had an excellent experience with Astramedic. Overall, a very professional and pleasant experience - highly recommended!`,
    },
    {
      name: `Sheen Z`,
      date: `a year ago`,
      rating: 5,
      image: ``,
      text: `Good products....Easy to use and work really well....I like them a lot!`,
    },
    {
      name: `Dr Abdur Rahim`,
      date: `3 years ago`,
      rating: 4,
      image: ``,
      text: `Good management and talented instructor with great teaching experience`,
    },
    {
      name: `Ali1996`,
      date: `1 year ago`,
      rating: 5,
      image: `/images/ali1996.png`,
      text: `Really satisfied with the service. Highly recommended!`,
    },
    {
      name: `Asif Farooq`,
      date: `a year ago`,
      rating: 5,
      image: ``,
      text: `I'm very satisfied with my experience. The product was genuine, exactly as shown. Delivery was extremely fast, and customer service was very cooperative and responsive throughout the process. I 100% recommend Astramedic Solutions to others. Great service!`,
    },
    {
      name: `Arbab Gujjar`,
      date: `7 months ago`,
      rating: 5,
      image: `images/arbab-gujjar.png`,
      text: `I bought heating pad at a very responsible price in Pakistan and honestly it works amazing. It provide quick relief from back pain.Highly recommend for daily use`,
    },
    {
      name: `Maria Abbasi`,
      date: `a year ago`,
      rating: 5,
      image: `images/maria.png`,
      text: `Very convenient service! We booked a home blood test for my mother and the technician arrived on time with all the equipment. Results were delivered digitally within 12 hours. Will definitely use them again instead of waiting in hospital queues.`,
    },
  ];

  /* EDIT HERE: Change this to your actual Google reviews / write-a-review URL. */
  const googleReviewsUrl = "https://maps.app.goo.gl/b4fpKPvWsed8AHJZ8";
  document.getElementById("writeReviewLink").href = googleReviewsUrl;
  document.getElementById("reviewCountLink").href = googleReviewsUrl;

  const STAR_PATH =
    "M12 2.2 15.03 8.35 21.82 9.34 16.91 14.12 18.07 20.88 12 17.69 5.93 20.88 7.09 14.12 2.18 9.34 8.97 8.35Z";
  const GOOGLE_G = `<svg class="google-reviews__google-g" viewBox="0 0 48 48" role="img" aria-label="Google"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.22 5.48-4.66 7.18l7.73 6C44.51 38.04 46.98 31.89 46.98 24.55z"/><path fill="#FBBC05" d="M10.53 28.59A14.4 14.4 0 0 1 9.75 24c0-1.6.28-3.13.78-4.59l-7.98-6.2A23.9 23.9 0 0 0 0 24c0 3.87.93 7.52 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.92-2.13 15.89-5.8l-7.73-6C30.02 37.64 27.27 38.5 24 38.5c-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>`;
  const initials = (name) =>
    name
      .split(/\s+/)
      .slice(0, 2)
      .map((w) => w[0] || "")
      .join("")
      .toUpperCase();
  function escapeHTML(value) {
    return String(value).replace(
      /[&<>"']/g,
      (char) =>
        ({
          "&": "&amp;",
          "<": "&lt;",
          ">": "&gt;",
          '"': "&quot;",
          "'": "&#39;",
        })[char],
    );
  }
  function starHTML(score) {
    return `<span class="google-reviews__stars" role="img" aria-label="${score} out of 5 stars">${Array.from({ length: 5 }, (_, i) => `<svg viewBox="0 0 24 24" style="color:${i < score ? "#f9a000" : "#9ca3af"}" aria-hidden="true"><path d="${STAR_PATH}"/></svg>`).join("")}</span>`;
  }
  document.getElementById("overallStars").innerHTML = starHTML(5);
  const track = document.getElementById("reviewsTrack");
  reviews.forEach((review) => {
    const card = document.createElement("article");
    card.className = "google-reviews__card";
    const avatar = review.image
      ? `<img class="google-reviews__avatar" src="${escapeHTML(review.image)}" alt="${escapeHTML(review.name)}" loading="lazy" />`
      : `<span class="google-reviews__avatar" aria-hidden="true" style="display:grid;place-items:center;background:#e7f0fb;color:#2b5c90;font-size:13px;font-weight:bold">${escapeHTML(initials(review.name))}</span>`;
    card.innerHTML = `
        <div class="google-reviews__person">${avatar}<div><p class="google-reviews__person-name">${escapeHTML(review.name)}</p><p class="google-reviews__date">${escapeHTML(review.date)}</p></div></div>
        <p class="google-reviews__body is-clamped">${escapeHTML(review.text)}</p>
        <button class="google-reviews__read-more" type="button" hidden>Read more</button>
        <div class="google-reviews__footer">${starHTML(Math.max(0, Math.min(5, review.rating)))}${GOOGLE_G}</div>`;
    track.appendChild(card);
  });

  // Only show "Read more" for text that actually overflows six lines.
  function refreshReadMore() {
    track.querySelectorAll(".google-reviews__card").forEach((card) => {
      const body = card.querySelector(".google-reviews__body");
      const button = card.querySelector(".google-reviews__read-more");
      if (body.classList.contains("is-clamped")) {
        button.hidden = body.scrollHeight <= body.clientHeight + 2;
      }
    });
  }
  track.addEventListener("click", (event) => {
    const button = event.target.closest(".google-reviews__read-more");
    if (!button) return;
    const body = button.previousElementSibling;
    const expanded = !body.classList.toggle("is-clamped");
    button.textContent = expanded ? "Read less" : "Read more";
    button.hidden = false;
  });

  const viewport = document.getElementById("reviewsViewport");
  const prev = document.getElementById("reviewsPrev");
  const next = document.getElementById("reviewsNext");
  let index = 0;
  function perView() {
    return innerWidth <= 600 ? 1 : innerWidth <= 850 ? 2 : 3;
  }
  function moveCarousel() {
    index = Math.max(0, Math.min(index, reviews.length - perView()));
    const first = track.querySelector(".google-reviews__card");
    const gap = parseFloat(getComputedStyle(track).gap) || 0;
    track.style.transform = `translateX(-${index * (first.getBoundingClientRect().width + gap)}px)`;
    prev.disabled = index === 0;
    next.disabled = index >= reviews.length - perView();
  }
  prev.addEventListener("click", () => {
    index--;
    moveCarousel();
  });
  next.addEventListener("click", () => {
    index++;
    moveCarousel();
  });
  window.addEventListener("resize", () => {
    moveCarousel();
    refreshReadMore();
  });
  let touchX = null;
  viewport.addEventListener(
    "touchstart",
    (e) => {
      touchX = e.touches[0].clientX;
    },
    { passive: true },
  );
  viewport.addEventListener(
    "touchend",
    (e) => {
      if (touchX === null) return;
      const distance = e.changedTouches[0].clientX - touchX;
      if (Math.abs(distance) > 45) {
        index += distance < 0 ? 1 : -1;
        moveCarousel();
      }
      touchX = null;
    },
    { passive: true },
  );
  requestAnimationFrame(() => {
    moveCarousel();
    refreshReadMore();
  });
});
