document.addEventListener('DOMContentLoaded', () => {
    
    const counters = document.querySelectorAll('.stat-num');
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
        rootMargin: '0px',
        threshold: 0.5 
    };

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-target'), 10);
                animateValue(entry.target, 0, target, animationDuration);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });

    const casesCarousel = document.getElementById('casesCarousel');
    
    if (casesCarousel) {
        const track = casesCarousel.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const nextBtn = casesCarousel.querySelector('.next-btn');
        const prevBtn = casesCarousel.querySelector('.prev-btn');
        let currentIndex = 0;

        const updateCarousel = () => {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;
        };

        nextBtn.addEventListener('click', () => {
            if (currentIndex === slides.length - 1) {
                currentIndex = 0;
            } else {
                currentIndex++;
            }
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex === 0) {
                currentIndex = slides.length - 1;
            } else {
                currentIndex--;
            }
            updateCarousel();
        });
    }

});