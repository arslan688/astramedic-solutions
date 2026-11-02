document.addEventListener('DOMContentLoaded', () => {
    
    const galleryImages = document.querySelectorAll('.gallery-img');
    const lightboxModal = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.querySelector('.lightbox-close');

    if (!lightboxModal || !lightboxImg || galleryImages.length === 0) return;

    // Open Lightbox
    galleryImages.forEach(img => {
        img.addEventListener('click', () => {
            // Prefer data-fullsrc, fallback to standard src
            const fullSrc = img.getAttribute('data-fullsrc') || img.getAttribute('src');
            if (fullSrc) {
                lightboxImg.setAttribute('src', fullSrc);
                lightboxModal.classList.add('is-active');
                lightboxModal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden'; // Lock background scrolling
            }
        });
    });

    // Close Lightbox function
    const closeLightbox = () => {
        lightboxModal.classList.remove('is-active');
        lightboxModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = ''; // Unlock background scrolling
        // Clear src after transition to prevent flicker on next load
        setTimeout(() => {
            lightboxImg.setAttribute('src', '');
        }, 300);
    };

    // Close on 'X' button click
    if (closeBtn) {
        closeBtn.addEventListener('click', closeLightbox);
    }

    // Close on background overlay click
    lightboxModal.addEventListener('click', (e) => {
        if (e.target === lightboxModal) {
            closeLightbox();
        }
    });

    // Close on Escape key press
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightboxModal.classList.contains('is-active')) {
            closeLightbox();
        }
    });

});