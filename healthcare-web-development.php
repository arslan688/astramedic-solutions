<?php
$page_title = "Healthcare Web Development";
$meta_description = "A well-designed website makes it easy for patients to find and contact you. We build responsive, fast, and user-friendly websites optimized for search engines.";
$page_css = "/css/web-development.css";
include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php';
?>

<main class="page-web-development bg-light">

    <section class="page-header bg-white text-center">
        <div class="container">
            <h1 class="h1 text-primary">Web Development Services</h1>
            <p class="intro-text mt-3">A well-designed website makes it easy for patients to find and contact you. We
                build responsive, fast, and user-friendly websites that include service details, appointment booking
                options, and clear navigation. Each site is optimized for search engines from the start. We develop
                websites that are fast, mobile-friendly, and optimized for SEO.</p>
        </div>
    </section>

    <section class="wd-pricing-section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="h2">Web Development Packages</h2>
                <p>Transparent, value-driven pricing tailored for healthcare professionals and organizations.</p>
            </div>

            <div class="wd-pricing-grid">

                <!-- Personal/Portfolio Package -->
                <div class="pricing-card shadow bg-white">
                    <h3 class="h4 pricing-title">Personal / Portfolio Website</h3>
                    <div class="pricing-amount">
                        <span class="price-original">Rs 19,999</span>
                        <div class="price-current">
                            <span class="currency">Rs</span>
                            <span class="price">14,999</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-file-lines"></i> 3-5 Pages</li>
                        <li><i class="fa-solid fa-palette"></i> Custom Design</li>
                        <li><i class="fa-solid fa-code"></i> W3C Validation</li>
                        <li><i class="fa-brands fa-whatsapp"></i> WhatsApp Connectivity</li>
                        <li><i class="fa-solid fa-mobile-screen"></i> Mobile Responsive</li>
                        <li><i class="fa-brands fa-wordpress"></i> WordPress Platform</li>
                        <li><i class="fa-solid fa-bolt"></i> Speed Optimization</li>
                        <li><i class="fa-solid fa-headset"></i> Support</li>
                    </ul>
                    <a href="#contact" class="btn-primary w-100">Get Service</a>
                </div>

                <!-- Business Website Package (Featured) -->
                <div class="pricing-card featured-package shadow">
                    <h3 class="h4 pricing-title text-white">Business Website</h3>
                    <div class="pricing-amount text-white">
                        <span class="price-original text-white-muted">Rs 44,999</span>
                        <div class="price-current">
                            <span class="currency">Rs</span>
                            <span class="price">32,999</span>
                        </div>
                    </div>
                    <ul class="pricing-features text-white">
                        <li><i class="fa-solid fa-file-lines"></i> 8 to 12 Pages</li>
                        <li><i class="fa-solid fa-user-tie"></i> Expert Consultation</li>
                        <li><i class="fa-solid fa-envelope"></i> Contact Forms</li>
                        <li><i class="fa-brands fa-wordpress"></i> WordPress Platform</li>
                        <li><i class="fa-brands fa-whatsapp"></i> WhatsApp Connectivity</li>
                        <li><i class="fa-solid fa-magnifying-glass-chart"></i> SEO Optimized</li>
                        <li><i class="fa-solid fa-mobile-screen"></i> Mobile Responsive</li>
                        <li><i class="fa-solid fa-bolt"></i> Speed Optimization</li>
                        <li><i class="fa-solid fa-code"></i> W3C Validation</li>
                        <li><i class="fa-solid fa-headset"></i> Support</li>
                    </ul>
                    <a href="#contact" class="btn-primary btn-light w-100">Get Service</a>
                </div>

                <!-- Ecommerce Website Package -->
                <div class="pricing-card shadow bg-white">
                    <h3 class="h4 pricing-title">Ecommerce Website</h3>
                    <div class="pricing-amount">
                        <span class="price-original">Rs 74,999</span>
                        <div class="price-current">
                            <span class="currency">Rs</span>
                            <span class="price">53,999</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-layer-group"></i> Multiple Pages & Dynamic Layout</li>
                        <li><i class="fa-solid fa-sliders"></i> Admin Control Operations</li>
                        <li><i class="fa-solid fa-star"></i> Reviews Management</li>
                        <li><i class="fa-solid fa-pen-ruler"></i> Banner Design</li>
                        <li><i class="fa-solid fa-magnifying-glass-chart"></i> SEO Optimized</li>
                        <li><i class="fa-solid fa-mobile-screen"></i> Mobile Responsive</li>
                        <li><i class="fa-solid fa-bolt"></i> Speed Optimization</li>
                        <li><i class="fa-solid fa-chalkboard-user"></i> Training & Support</li>
                    </ul>
                    <a href="#contact" class="btn-primary w-100">Get Service</a>
                </div>

            </div>
        </div>
    </section>

    <section class="wd-projects-section bg-white text-center">
        <div class="container">
            <h2 class="h2 section-header">Our Successful Web Projects</h2>
            <div class="wd-projects-grid">

                <div class="project-card shadow">
                    <div class="project-icon">
                        <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <h3 class="h5">Prime Frozen Foods</h3>
                </div>

                <div class="project-card shadow">
                    <div class="project-icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3 class="h5">Health Bridge Diagnostic Center</h3>
                </div>

                <div class="project-card shadow">
                    <div class="project-icon">
                        <i class="fa-solid fa-kit-medical"></i>
                    </div>
                    <h3 class="h5">MB Surgicals</h3>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="wd-contact-section bg-light">
        <div class="container text-center">
            <h2 class="h2 section-header">Ready to Start Your Project?</h2>
            <link rel="stylesheet" href="/css/contact-form.css">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/php/contact-form.php'; ?>
        </div>
    </section>

</main>

<script src="/scripts/contact-validation.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>