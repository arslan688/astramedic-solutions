class Carousel {
    constructor(containerElement, options = {}) {
        this.container = containerElement;
        this.track = this.container.querySelector('.carousel-track');
        this.slides = Array.from(this.track.children);
        this.nextBtn = this.container.querySelector('.next-btn');
        this.prevBtn = this.container.querySelector('.prev-btn');
        this.dots = Array.from(this.container.querySelectorAll('.dot'));
        
        this.currentIndex = 0;
        this.autoPlayInterval = null;
        this.autoPlayDelay = options.delay || 5000;
        this.isAutoPlay = options.autoPlay !== false;

        this.init();
    }

    init() {
        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => {
                this.moveToNextSlide();
                this.resetAutoPlay();
            });
        }

        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => {
                this.moveToPrevSlide();
                this.resetAutoPlay();
            });
        }

        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                this.moveToSlide(index);
                this.resetAutoPlay();
            });
        });

        if (this.isAutoPlay) {
            this.startAutoPlay();
            // Pause on hover
            this.container.addEventListener('mouseenter', () => this.stopAutoPlay());
            this.container.addEventListener('mouseleave', () => this.startAutoPlay());
        }

        // Handle window resize for accurate slide widths
        window.addEventListener('resize', () => {
            this.updateCarouselPosition();
        });
    }

    updateCarouselPosition() {
        const slideWidth = this.slides[0].getBoundingClientRect().width;
        this.track.style.transform = `translateX(-${this.currentIndex * slideWidth}px)`;
        
        // Update active classes
        this.slides.forEach(slide => slide.classList.remove('active'));
        this.slides[this.currentIndex].classList.add('active');

        this.dots.forEach(dot => dot.classList.remove('active'));
        if(this.dots[this.currentIndex]) {
            this.dots[this.currentIndex].classList.add('active');
        }
    }

    moveToSlide(index) {
        this.currentIndex = index;
        this.updateCarouselPosition();
    }

    moveToNextSlide() {
        if (this.currentIndex === this.slides.length - 1) {
            this.currentIndex = 0; // Loop back to start
        } else {
            this.currentIndex++;
        }
        this.updateCarouselPosition();
    }

    moveToPrevSlide() {
        if (this.currentIndex === 0) {
            this.currentIndex = this.slides.length - 1; // Loop to end
        } else {
            this.currentIndex--;
        }
        this.updateCarouselPosition();
    }

    startAutoPlay() {
        if (this.isAutoPlay) {
            this.autoPlayInterval = setInterval(() => {
                this.moveToNextSlide();
            }, this.autoPlayDelay);
        }
    }

    stopAutoPlay() {
        clearInterval(this.autoPlayInterval);
    }

    resetAutoPlay() {
        this.stopAutoPlay();
        this.startAutoPlay();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    
    // Initialize Hero Banner Carousel
    const heroCarouselElement = document.getElementById('heroCarousel');
    if (heroCarouselElement) {
        new Carousel(heroCarouselElement, {
            delay: 6000,
            autoPlay: true
        });
    }

    // Initialize Client Reviews Carousel
    const reviewCarouselElement = document.getElementById('reviewCarousel');
    if (reviewCarouselElement) {
        new Carousel(reviewCarouselElement, {
            delay: 5000,
            autoPlay: true
        });
    }

});