document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".stat-num");
  const animationDuration = 2000;

  const animateValue = (obj, start, end, duration) => {
    let startTimestamp = null;

    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      const easeOutProgress = 1 - Math.pow(1 - progress, 3);

      obj.innerHTML = Math.floor(easeOutProgress * (end - start) + start);

      if (progress < 1) {
        window.requestAnimationFrame(step);
      } else {
        obj.innerHTML = end;
      }
    };

    window.requestAnimationFrame(step);
  };

  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5,
  };

  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const target = parseInt(entry.target.getAttribute("data-target"), 10);
        animateValue(entry.target, 0, target, animationDuration);
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  counters.forEach((counter) => {
    counterObserver.observe(counter);
  });

  const carousel = document.getElementById("casesCarousel");

  if (!carousel || carousel.dataset.initialized === "true") {
    return;
  }

  carousel.dataset.initialized = "true";

  const track = carousel.querySelector(".carousel-track");
  const slides = Array.from(carousel.querySelectorAll(".carousel-slide"));
  const prevButton = carousel.querySelector(".prev-btn");
  const nextButton = carousel.querySelector(".next-btn");

  if (!track || slides.length === 0) {
    return;
  }

  let currentIndex = 0;
  let autoRun;

  const interval = 5000;
  const reducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;

  function showSlide(index) {
    currentIndex = (index + slides.length) % slides.length;

    track.style.transform = "translateX(-" + currentIndex * 100 + "%)";

    slides.forEach(function (slide, i) {
      slide.setAttribute("aria-hidden", i === currentIndex ? "false" : "true");
    });
  }

  function nextSlide() {
    showSlide(currentIndex + 1);
  }

  function prevSlide() {
    showSlide(currentIndex - 1);
  }

  function stopAutoRun() {
    if (autoRun) {
      clearInterval(autoRun);
      autoRun = null;
    }
  }

  function startAutoRun() {
    stopAutoRun();

    if (reducedMotion || slides.length < 2) {
      return;
    }

    autoRun = setInterval(nextSlide, interval);
  }

  nextButton.addEventListener("click", function () {
    nextSlide();
    startAutoRun();
  });

  prevButton.addEventListener("click", function () {
    prevSlide();
    startAutoRun();
  });

  carousel.addEventListener("mouseenter", stopAutoRun);
  carousel.addEventListener("mouseleave", startAutoRun);

  carousel.addEventListener("focusin", stopAutoRun);
  carousel.addEventListener("focusout", function (event) {
    if (!carousel.contains(event.relatedTarget)) {
      startAutoRun();
    }
  });

  showSlide(0);
  startAutoRun();
});
