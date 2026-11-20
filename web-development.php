<?php
// Your shared contact form needs a session before the header outputs any HTML.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$page_title = "Web Development Services in Pakistan | AstraMedic Solutions";
$meta_description = "Professional web development services in Pakistan for clinics, businesses and online stores. Responsive WordPress websites built with SEO and GEO in mind.";
$page_css = "/css/web-development.css";

include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php';
?>

<main class="page-web-development" id="main-content">

    <!-- HERO -->
    <section class="page-header wd-hero" aria-labelledby="wd-page-title">
        <div class="container wd-hero-grid">
            <div class="wd-hero-copy">
                <span class="wd-eyebrow"><span class="wd-eyebrow-dot" aria-hidden="true"></span> Websites built around
                    your business</span>
                <h1 id="wd-page-title">Web Development Services <span>in Pakistan</span></h1>
                <p class="wd-hero-lead">A professional website makes it easier for people to discover your services,
                    trust your business, and get in touch. AstraMedic Solutions builds responsive websites for
                    healthcare providers, businesses, and online stores, with clear design and SEO-friendly foundations.
                </p>
                <div class="wd-hero-actions">
                    <a class="btn-primary wd-btn" href="#packages">Explore Packages <i class="fa-solid fa-arrow-right"
                            aria-hidden="true"></i></a>
                    <a class="wd-btn-outline" href="#projects">View Our Projects <i
                            class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </div>
                <ul class="wd-hero-points" aria-label="Website features">
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Mobile-responsive</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> SEO-ready structure</li>
                    <li><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Clear navigation</li>
                </ul>
            </div>
            <div class="wd-hero-media">
                <div class="wd-hero-image-wrap">
                    <img src="/images/web-development.svg" width="920" height="720"
                        alt="Illustrative preview of a responsive website on desktop and mobile" fetchpriority="high">
                </div>
                <div class="wd-hero-floating-card" aria-hidden="true">
                    <span class="wd-floating-icon"><i class="fa-solid fa-code"></i></span>
                    <span><strong>Designed to work</strong><small>On every screen size</small></span>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICE TYPES -->
    <section class="wd-section wd-services-section" id="services" aria-labelledby="wd-services-title">
        <div class="container">
            <div class="wd-section-heading wd-heading-center">
                <h2 id="wd-services-title">Website Development Services We Offer</h2>
                <p>Different businesses need different websites. We plan each project around your audience, content, and
                    how customers will use the site.</p>
            </div>
            <div class="wd-services-grid">
                <article class="wd-service-card">
                    <div class="wd-service-icon"><i class="fa-solid fa-id-card" aria-hidden="true"></i></div>
                    <h3>Personal &amp; Portfolio Websites</h3>
                    <p>Present your skills, experience, services, and professional work on an easy-to-navigate website.
                        Suitable for doctors, consultants, freelancers, and other professionals.</p>
                    <a href="#packages" class="wd-text-link">See website packages <i class="fa-solid fa-arrow-right"
                            aria-hidden="true"></i></a>
                </article>
                <article class="wd-service-card">
                    <div class="wd-service-icon"><i class="fa-solid fa-building" aria-hidden="true"></i></div>
                    <h3>Business Website Development</h3>
                    <p>Give visitors a clear view of your business, services, and contact options with professional
                        pages, responsive layouts, and straightforward navigation.</p>
                    <a href="#packages" class="wd-text-link">See website packages <i class="fa-solid fa-arrow-right"
                            aria-hidden="true"></i></a>
                </article>
                <article class="wd-service-card">
                    <div class="wd-service-icon"><i class="fa-solid fa-cart-shopping" aria-hidden="true"></i></div>
                    <h3>Ecommerce Website Development</h3>
                    <p>Sell products online with organized categories, product pages, a shopping cart, and checkout
                        functionality suited to your business requirements.</p>
                    <a href="#packages" class="wd-text-link">See website packages <i class="fa-solid fa-arrow-right"
                            aria-hidden="true"></i></a>
                </article>
                <article class="wd-service-card">
                    <div class="wd-service-icon"><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i></div>
                    <h3>Healthcare Website Development</h3>
                    <p>Help patients find your doctors, departments, treatments, clinic information, and appointment
                        options through a website designed for healthcare services.</p>
                    <a href="#industries" class="wd-text-link">Explore industries <i class="fa-solid fa-arrow-right"
                            aria-hidden="true"></i></a>
                </article>
            </div>
        </div>
    </section>

    <!-- SEO & GEO -->
    <section class="wd-section wd-seo-section" id="seo-geo" aria-labelledby="wd-seo-title">
        <div class="container wd-seo-grid">
            <div class="wd-seo-content">
                <h2 id="wd-seo-title">SEO &amp; GEO-Optimized Website Development</h2>
                <p class="wd-section-lead">A good-looking site is only the beginning. We also consider how people and
                    search engines find, navigate, and understand your content.</p>
                <p><strong>Search Engine Optimization (SEO)</strong> provides the foundation for crawlable,
                    well-structured pages. <strong>Generative Engine Optimization (GEO)</strong> focuses on presenting
                    accurate, useful information clearly for AI-powered search experiences. Neither approach guarantees
                    rankings or inclusion in AI answers.</p>
                <div class="wd-seo-benefits">
                    <div class="wd-seo-benefit">
                        <i class="fa-solid fa-sitemap" aria-hidden="true"></i>
                        <div>
                            <h3>Search-friendly structure</h3>
                            <p>Descriptive URLs, logical headings, internal links, and relevant page metadata.</p>
                        </div>
                    </div>
                    <div class="wd-seo-benefit">
                        <i class="fa-solid fa-gauge-high" aria-hidden="true"></i>
                        <div>
                            <h3>Technical foundations</h3>
                            <p>Attention to mobile usability, page speed, crawlability, and sensible indexing settings.
                            </p>
                        </div>
                    </div>
                    <div class="wd-seo-benefit">
                        <i class="fa-solid fa-robot" aria-hidden="true"></i>
                        <div>
                            <h3>Clear, useful content</h3>
                            <p>Well-organized service details, relevant FAQs, and structured data where appropriate.</p>
                        </div>
                    </div>
                </div>
                <a class="wd-text-link wd-link-on-light" href="#contact">Discuss your SEO &amp; GEO requirements <i
                        class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="wd-seo-visual">
                <div class="wd-seo-visual-wrapper">
                    <img src="/images/seo-geo.svg"
                        alt="Illustration of an AI search answer citing a structured, SEO-optimized website" width="540"
                        height="580" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- CORE FEATURES -->
    <section class="wd-section wd-features-section" id="features" aria-labelledby="wd-features-title">
        <div class="container">
            <div class="wd-section-heading wd-heading-center">
                <h2 id="wd-features-title">Features That Make Your Website Work Better</h2>
                <p>We focus on useful details that make your website easier to browse, manage, and use.</p>
            </div>
            <div class="wd-features-grid">
                <article class="wd-feature-card">
                    <div class="wd-feature-icon"><i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i>
                    </div>
                    <h3>Mobile-Friendly Design</h3>
                    <p>Responsive layouts that adapt to phones, tablets, and desktop screens.</p>
                </article>
                <article class="wd-feature-card">
                    <div class="wd-feature-icon"><i class="fa-solid fa-compass" aria-hidden="true"></i></div>
                    <h3>Clear User Experience</h3>
                    <p>Simple menus, helpful page sections, and easy-to-find information.</p>
                </article>
                <article class="wd-feature-card">
                    <div class="wd-feature-icon"><i class="fa-solid fa-comments" aria-hidden="true"></i></div>
                    <h3>Contact &amp; WhatsApp Options</h3>
                    <p>Make it straightforward for visitors to ask questions or request a quote.</p>
                </article>
                <article class="wd-feature-card">
                    <div class="wd-feature-icon"><i class="fa-solid fa-palette" aria-hidden="true"></i></div>
                    <h3>Professional Visual Design</h3>
                    <p>Readable typography, consistent styling, and layouts that fit your brand.</p>
                </article>
                <article class="wd-feature-card">
                    <div class="wd-feature-icon"><i class="fa-brands fa-wordpress" aria-hidden="true"></i></div>
                    <h3>Easy Content Management</h3>
                    <p>Manage supported pages, text, and images through WordPress when included.</p>
                </article>
                <article class="wd-feature-card">
                    <div class="wd-feature-icon"><i class="fa-solid fa-bolt" aria-hidden="true"></i></div>
                    <h3>Speed Optimization</h3>
                    <p>Efficient layouts, optimized images, and attention to loading performance.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- PRICING: preserves your packages and feature lists -->
    <section class="wd-section wd-pricing-section" id="packages" aria-labelledby="wd-pricing-title">
        <div class="container">
            <div class="wd-section-heading wd-heading-center">
                <h2 id="wd-pricing-title">Web Development Packages</h2>
                <p>Explore website development packages for professionals, businesses, and online stores.</p>
            </div>
            <div class="wd-pricing-grid">
                <article class="pricing-card shadow bg-white">
                    <div class="wd-price-top"><span class="wd-package-type">For individuals</span>
                        <h3 class="pricing-title">Personal / Portfolio Website</h3>
                        <p>Present your work and services with a professional online presence.</p>
                    </div>
                    <div class="pricing-amount">
                        <span class="price-original">Rs 19,999</span>
                        <div class="price-current"><span class="currency">Rs</span><span class="price">14,999</span>
                        </div>
                        <span class="wd-price-caption">Website development package</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-file-lines" aria-hidden="true"></i> 3–5 Pages</li>
                        <li><i class="fa-solid fa-palette" aria-hidden="true"></i> Custom Design</li>
                        <li><i class="fa-solid fa-code" aria-hidden="true"></i> W3C Validation</li>
                        <li><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp Connectivity</li>
                        <li><i class="fa-solid fa-mobile-screen" aria-hidden="true"></i> Mobile Responsive</li>
                        <li><i class="fa-brands fa-wordpress" aria-hidden="true"></i> WordPress Platform</li>
                        <li><i class="fa-solid fa-bolt" aria-hidden="true"></i> Speed Optimization</li>
                        <li><i class="fa-solid fa-headset" aria-hidden="true"></i> Support</li>
                    </ul>
                    <!-- IMPORTANT: 'clinic' is the current value in your contact-form-config.php for the portfolio package. -->
                    <a href="#contact" class="btn-primary w-100 wd-package-button" data-wd-package="clinic"
                        data-wd-package-label="Personal / Portfolio Website">Choose Portfolio Package <i
                            class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                </article>

                <article class="pricing-card featured-package shadow">
                    <div class="wd-price-top"><span class="wd-package-type">For growing businesses</span>
                        <h3 class="pricing-title">Business Website</h3>
                        <p>Explain your services and make it easier for customers to contact you.</p>
                    </div>
                    <div class="pricing-amount">
                        <span class="price-original text-white-muted">Rs 44,999</span>
                        <div class="price-current"><span class="currency">Rs</span><span class="price">32,999</span>
                        </div>
                        <span class="wd-price-caption">Website development package</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-file-lines" aria-hidden="true"></i> 8–12 Pages</li>
                        <li><i class="fa-solid fa-user-tie" aria-hidden="true"></i> Expert Consultation</li>
                        <li><i class="fa-solid fa-envelope" aria-hidden="true"></i> Contact Forms</li>
                        <li><i class="fa-brands fa-wordpress" aria-hidden="true"></i> WordPress Platform</li>
                        <li><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp Connectivity</li>
                        <li><i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i> SEO Optimized</li>
                        <li><i class="fa-solid fa-mobile-screen" aria-hidden="true"></i> Mobile Responsive</li>
                        <li><i class="fa-solid fa-bolt" aria-hidden="true"></i> Speed Optimization</li>
                        <li><i class="fa-solid fa-code" aria-hidden="true"></i> W3C Validation</li>
                        <li><i class="fa-solid fa-headset" aria-hidden="true"></i> Support</li>
                    </ul>
                    <!-- 'hospital' is the current contact-form-config.php value for Business Website. -->
                    <a href="#contact" class="btn-primary btn-light w-100 wd-package-button" data-wd-package="hospital"
                        data-wd-package-label="Business Website">Choose Business Package <i
                            class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                </article>

                <article class="pricing-card shadow bg-white">
                    <div class="wd-price-top"><span class="wd-package-type">For online stores</span>
                        <h3 class="pricing-title">Ecommerce Website</h3>
                        <p>Organize products and give customers a way to place orders online.</p>
                    </div>
                    <div class="pricing-amount">
                        <span class="price-original">Rs 74,999</span>
                        <div class="price-current"><span class="currency">Rs</span><span class="price">53,999</span>
                        </div>
                        <span class="wd-price-caption">Website development package</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-layer-group" aria-hidden="true"></i> Multiple Pages &amp; Dynamic
                            Layout</li>
                        <li><i class="fa-solid fa-sliders" aria-hidden="true"></i> Admin Control Operations</li>
                        <li><i class="fa-solid fa-star" aria-hidden="true"></i> Reviews Management</li>
                        <li><i class="fa-solid fa-pen-ruler" aria-hidden="true"></i> Banner Design</li>
                        <li><i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i> SEO Optimized</li>
                        <li><i class="fa-solid fa-mobile-screen" aria-hidden="true"></i> Mobile Responsive</li>
                        <li><i class="fa-solid fa-bolt" aria-hidden="true"></i> Speed Optimization</li>
                        <li><i class="fa-solid fa-chalkboard-user" aria-hidden="true"></i> Training &amp; Support</li>
                    </ul>
                    <!-- 'network' is the current contact-form-config.php value for Ecommerce Website. -->
                    <a href="#contact" class="btn-primary w-100 wd-package-button" data-wd-package="network"
                        data-wd-package-label="Ecommerce Website">Choose Ecommerce Package <i
                            class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                </article>
            </div>
            <p class="wd-pricing-note"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Please confirm domain,
                hosting, renewal fees, and any additional features in your quotation. Ongoing SEO/GEO campaigns are
                discussed separately from website development.</p>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="wd-section wd-process-section" id="process" aria-labelledby="wd-process-title">
        <div class="container">
            <div class="wd-section-heading wd-heading-center">
                <h2 id="wd-process-title">Our Website Development Process</h2>
                <p>A clear process keeps your website project organized, from the first discussion through launch.</p>
            </div>
            <ol class="wd-process-grid">
                <li class="wd-process-step"><span class="wd-step-number">01</span>
                    <div class="wd-step-icon"><i class="fa-regular fa-comments" aria-hidden="true"></i></div>
                    <h3>Discuss Requirements</h3>
                    <p>We learn about your business, pages, goals, and required features.</p>
                </li>
                <li class="wd-process-step"><span class="wd-step-number">02</span>
                    <div class="wd-step-icon"><i class="fa-solid fa-object-group" aria-hidden="true"></i></div>
                    <h3>Plan &amp; Design</h3>
                    <p>We organize the navigation, page layouts, and visual direction.</p>
                </li>
                <li class="wd-process-step"><span class="wd-step-number">03</span>
                    <div class="wd-step-icon"><i class="fa-solid fa-laptop-code" aria-hidden="true"></i></div>
                    <h3>Develop</h3>
                    <p>We build responsive pages and agreed website functionality.</p>
                </li>
                <li class="wd-process-step"><span class="wd-step-number">04</span>
                    <div class="wd-step-icon"><i class="fa-solid fa-list-check" aria-hidden="true"></i></div>
                    <h3>Test &amp; Refine</h3>
                    <p>We check layout, navigation, forms, and essential performance.</p>
                </li>
                <li class="wd-process-step"><span class="wd-step-number">05</span>
                    <div class="wd-step-icon"><i class="fa-solid fa-rocket" aria-hidden="true"></i></div>
                    <h3>Launch &amp; Handover</h3>
                    <p>After approval, we help launch and explain the included tools.</p>
                </li>
            </ol>
        </div>
    </section>

    <!-- INDUSTRIES -->
    <section class="wd-section wd-industries-section" id="industries" aria-labelledby="wd-industries-title">
        <div class="container">
            <div class="wd-section-heading wd-heading-center">
                <h2 id="wd-industries-title">Websites for Healthcare &amp; Other Industries</h2>
                <p>We adapt the structure and features of each website to the information its visitors need.</p>
            </div>
            <div class="wd-industries-grid">
                <article class="wd-industry-card"><span class="wd-industry-icon"><i class="fa-solid fa-hospital"
                            aria-hidden="true"></i></span>
                    <div>
                        <h3>Hospitals &amp; Clinics</h3>
                        <p>Doctor profiles, departments, medical services, contact details, and appointment information.
                        </p>
                    </div>
                </article>
                <article class="wd-industry-card"><span class="wd-industry-icon"><i class="fa-solid fa-flask-vial"
                            aria-hidden="true"></i></span>
                    <div>
                        <h3>Diagnostic &amp; Therapy Centers</h3>
                        <p>Clear information about tests, physiotherapy programs, locations, and services.</p>
                    </div>
                </article>
                <article class="wd-industry-card"><span class="wd-industry-icon"><i class="fa-solid fa-kit-medical"
                            aria-hidden="true"></i></span>
                    <div>
                        <h3>Medical Equipment Suppliers</h3>
                        <p>Product categories, equipment details, and ways to request quotations or place orders.</p>
                    </div>
                </article>
                <article class="wd-industry-card"><span class="wd-industry-icon"><i class="fa-solid fa-store"
                            aria-hidden="true"></i></span>
                    <div>
                        <h3>Retail &amp; Service Businesses</h3>
                        <p>Business websites and ecommerce storefronts designed around customers' needs.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section class="wd-section wd-projects-section" id="projects" aria-labelledby="wd-projects-title">
        <div class="container">
            <div class="wd-section-heading wd-heading-center">
                <h2 id="wd-projects-title">Our Successful Web Projects</h2>
                <p>A selection of businesses and healthcare organizations featured in our web development portfolio.</p>
            </div>
            <div class="wd-projects-grid">
                <article class="wd-project-card">
                    <div class="wd-project-image"><img src="/images/web-project-prime-frozen-foods.jpg" width="720"
                            height="480" loading="lazy"
                            alt="Placeholder image for the Prime Frozen Foods website project"><span
                            class="wd-project-category">Food &amp; retail</span></div>
                    <div class="wd-project-info">
                        <div class="wd-project-symbol"><i class="fa-solid fa-snowflake" aria-hidden="true"></i></div>
                        <h3>Prime Frozen Foods</h3>
                        <p>Business website project</p>
                    </div>
                </article>
                <article class="wd-project-card">
                    <div class="wd-project-image"><img src="/images/web-project-health-bridge-diagnostic-center.jpg"
                            width="720" height="480" loading="lazy"
                            alt="Placeholder image for the Health Bridge Diagnostic Center website project"><span
                            class="wd-project-category">Healthcare</span></div>
                    <div class="wd-project-info">
                        <div class="wd-project-symbol"><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i></div>
                        <h3>Health Bridge Diagnostic Center</h3>
                        <p>Healthcare website project</p>
                    </div>
                </article>
                <article class="wd-project-card">
                    <div class="wd-project-image"><img src="/images/web-project-mb-surgicals.jpg" width="720"
                            height="480" loading="lazy"
                            alt="Placeholder image for the MB Surgicals website project"><span
                            class="wd-project-category">Medical supplies</span></div>
                    <div class="wd-project-info">
                        <div class="wd-project-symbol"><i class="fa-solid fa-kit-medical" aria-hidden="true"></i></div>
                        <h3>MB Surgicals</h3>
                        <p>Medical supplies website project</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ: native details/summary are keyboard-accessible and work without JavaScript. -->
    <section class="wd-section wd-faq-section" id="faq" aria-labelledby="wd-faq-title">
        <div class="container wd-faq-layout">
            <div class="wd-faq-intro">
                <h2 id="wd-faq-title">Frequently Asked Questions</h2>
                <p>Answers to common questions about website development pricing, SEO, GEO, and how we work.</p>
                <a class="wd-text-link" href="#contact">Have another question? Contact us <i
                        class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="wd-faq-list">
                <details class="wd-faq-item">
                    <summary>How much does website development cost in Pakistan?</summary>
                    <div class="wd-faq-answer">
                        <p>Our listed packages start at Rs 14,999 for a Personal / Portfolio Website, Rs 32,999 for a
                            Business Website, and Rs 53,999 for an Ecommerce Website. Final pricing depends on your
                            requirements and any additional features.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>Are your websites SEO and GEO optimized?</summary>
                    <div class="wd-faq-answer">
                        <p>We use SEO-friendly development practices and can discuss additional GEO-focused
                            improvements. The exact work included depends on your selected package and agreed scope.
                            Rankings and inclusion in AI-generated answers cannot be guaranteed.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>What is the difference between SEO and GEO?</summary>
                    <div class="wd-faq-answer">
                        <p>SEO helps search engines discover and understand your pages through technical accessibility,
                            relevant content, and clear structure. GEO focuses on presenting information clearly for
                            AI-powered search experiences. Both depend on accurate and useful website content.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>Do you develop websites for hospitals and medical clinics?</summary>
                    <div class="wd-faq-answer">
                        <p>Yes. We develop websites for hospitals, clinics, diagnostic centers, physiotherapy practices,
                            and other healthcare organizations. Features can include doctor profiles, department
                            information, contact forms, and appointment options, depending on the project.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>Will my website work on mobile phones?</summary>
                    <div class="wd-faq-answer">
                        <p>Yes. Mobile-responsive design is included in the packages shown on this page. We design
                            layouts to adapt to different screen sizes and make navigation easier on phones, tablets,
                            and computers.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>Can I update my website myself?</summary>
                    <div class="wd-faq-answer">
                        <p>Our WordPress-based packages let you update supported content through a website dashboard.
                            The editing options vary with the design and functionality of the finished site.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>How long does it take to build a website?</summary>
                    <div class="wd-faq-answer">
                        <p>Timelines depend on the number of pages, content availability, design revisions, and required
                            features. We can provide a project estimate after discussing your requirements.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>Are domain registration and hosting included?</summary>
                    <div class="wd-faq-answer">
                        <p>Please confirm domain registration, hosting, renewals, and third-party charges in your
                            quotation. Their inclusion can depend on the package and services agreed upon.</p>
                    </div>
                </details>
                <details class="wd-faq-item">
                    <summary>Do you offer ongoing SEO or website maintenance?</summary>
                    <div class="wd-faq-answer">
                        <p>Ongoing SEO, GEO, and maintenance can be discussed separately from the initial website build.
                            We can review your requirements and explain the available scope and pricing.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- SHARED CONTACT FORM -->
    <section class="wd-contact-section" id="contact" aria-labelledby="wd-contact-title">
        <div class="container">
            <div class="wd-section-heading wd-heading-center">
                <h2 id="wd-contact-title">Ready to Start Your Website?</h2>
                <p>Tell us what you need, select a package if one suits you, and we'll discuss the next steps.</p>
            </div>
            <p class="wd-package-selected-message" id="wd-selected-package" role="status" aria-live="polite" hidden></p>
            <link rel="stylesheet" href="/css/contact-form.css">
            <?php
            // IMPORTANT: Keep your existing shared form and form configuration.
            $contactFormKey = 'web-development';
            include $_SERVER['DOCUMENT_ROOT'] . '/php/contact-form.php';
            ?>
        </div>
    </section>

</main>

<script src="/scripts/web-development.js" defer></script>
<script src="/scripts/contact-validation.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>