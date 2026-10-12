document.addEventListener('DOMContentLoaded', () => {
    
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', () => {
            mobileToggle.classList.toggle('is-active');
            mainNav.classList.toggle('is-open');
            
            // Manage accessibility states
            const isExpanded = mobileToggle.classList.contains('is-active');
            mobileToggle.setAttribute('aria-expanded', isExpanded);
        });
    }

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            // Apply click-to-expand logic exclusively on mobile/tablet widths
            if (window.innerWidth <= 991) {
                e.preventDefault(); 
                
                const dropdownMenu = toggle.nextElementSibling;
                if (dropdownMenu) {
                    dropdownMenu.classList.toggle('is-open');
                    
                    // Toggle accessibility state and chevron visual
                    const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
                    toggle.setAttribute('aria-expanded', !isExpanded);
                    
                    // Rotate the indicator chevron manually for mobile UI
                    if(dropdownMenu.classList.contains('is-open')){
                       toggle.style.color = 'var(--color-primary)';
                    } else {
                       toggle.style.color = '';
                    }
                }
            }
        });
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 991) {
            if (mainNav.classList.contains('is-open')) {
                mainNav.classList.remove('is-open');
                mobileToggle.classList.remove('is-active');
                mobileToggle.setAttribute('aria-expanded', 'false');
            }
            // Reset dropdowns explicitly left open via mobile taps
            document.querySelectorAll('.dropdown-menu.is-open').forEach(menu => {
                menu.classList.remove('is-open');
            });
            dropdownToggles.forEach(toggle => {
                 toggle.setAttribute('aria-expanded', 'false');
                 toggle.style.color = '';
            });
        }
    });

});