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
});