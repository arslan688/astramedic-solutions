function toggleDigitalMarketingFaq(element) {
    const section = element.closest('.dm-faq-section');
    const parent = element.parentElement;
    const content = element.nextElementSibling;
    const isOpen = parent.classList.contains('active-faq');

    if (!section || !content) {
        return;
    }

    section.querySelectorAll('.faq-item').forEach((item) => {
        item.classList.remove('active-faq');
        item.querySelector('.faq-toggle').setAttribute('aria-expanded', 'false');
        item.querySelector('.faq-content').style.maxHeight = null;
    });

    if (!isOpen) {
        parent.classList.add('active-faq');
        element.setAttribute('aria-expanded', 'true');
        content.style.maxHeight = `${content.scrollHeight}px`;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const box = document.querySelector('.hero-image-box');
    const img = document.querySelector('.hero-side-img');

    if (box && img) {
        box.addEventListener('mousemove', (e) => {
            const rect = box.getBoundingClientRect();
            
            // Calculate mouse position relative to the element (from 0 to width/height)
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            // Turn those coordinates into values relative to the center (-0.5 to 0.5)
            const centerX = x / rect.width - 0.5;
            const centerY = y / rect.height - 0.5;
            
            // Tweak the multiplier (e.g., 20) to make the movement stronger or subtler
            const rotateX = centerY * -20; 
            const rotateY = centerX * 20;
            const translateX = centerX * 15;
            const translateY = centerY * 15;

            // Apply the subtle 3D tilt and shift
            img.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateX(${translateX}px) translateY(${translateY}px)`;
        });

        // Reset the image position when the mouse leaves the box area
        box.addEventListener('mouseleave', () => {
            img.style.transform = 'rotateX(0deg) rotateY(0deg) translateX(0px) translateY(0px)';
        });
    }

    const revealItems = document.querySelectorAll('.dm-reveal');

    if ('IntersectionObserver' in window && revealItems.length) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.12 });

        revealItems.forEach((item) => revealObserver.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    }
});