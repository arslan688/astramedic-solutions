document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("teamTrack");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");

  if (!track || !prevBtn || !nextBtn) return;

  const slides = Array.from(track.children);
  let currentIndex = 0;

  // Determine how many slides are visible based on screen width
  const getVisibleSlidesCount = () => {
    if (window.innerWidth <= 767) {
      return 1;
    } else if (window.innerWidth <= 991) {
      return 2;
    } else {
      return 3;
    }
  };

  const updateCarousel = () => {
    const slideWidth = slides[0].getBoundingClientRect().width;
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  };

  nextBtn.addEventListener("click", () => {
    const visibleSlides = getVisibleSlidesCount();
    const maxIndex = slides.length - visibleSlides;

    if (currentIndex >= maxIndex) {
      currentIndex = 0; // Loop back to start
    } else {
      currentIndex++;
    }
    updateCarousel();
  });

  prevBtn.addEventListener("click", () => {
    const visibleSlides = getVisibleSlidesCount();
    const maxIndex = slides.length - visibleSlides;

    if (currentIndex <= 0) {
      currentIndex = maxIndex; // Loop to end
    } else {
      currentIndex--;
    }
    updateCarousel();
  });

  // Handle window resize to recalculate widths and prevent empty gaps
  window.addEventListener("resize", () => {
    const visibleSlides = getVisibleSlidesCount();
    const maxIndex = slides.length - visibleSlides;

    // Ensure index doesn't go out of bounds upon resize
    if (currentIndex > maxIndex) {
      currentIndex = Math.max(0, maxIndex);
    }
    updateCarousel();
  });
});
