<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php'; ?>

<link rel="stylesheet" href="/css/index.css">

<main class="page-home">
    
    <section class="hero-carousel-section">
        <div class="carousel-container" id="heroCarousel">
            <div class="carousel-track">
                
                <!-- Slide 1 -->
                <div class="carousel-slide active">
                    <div class="hero-overlay"></div>
                    <img src="/images/hero-bg-1.jpg" alt="AstraMedic Healthcare Excellence" class="hero-bg">
                    <div class="container hero-content">
                        <h1 class="h1">AstraMedic Solutions</h1>
                        <h2 class="h3">Your Trusted Partner in Healthcare Excellence</h2>
                        <p class="hero-text">Healthcare is evolving and AstraMedic Solutions is proud to be part of that transformation. We combine medical expertise, advanced technology, and professional consultancy to build solutions that support both healthcare providers and patients.</p>
                        <a href="/about.php" class="btn-primary">Learn More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <div class="hero-overlay"></div>
                    <img src="/images/hero-bg-2.jpg" alt="AstraMedic Integrated Services" class="hero-bg">
                    <div class="container hero-content">
                        <h1 class="h1">Empowering Healthcare</h1>
                        <h2 class="h3">Medical Supplies, Licensing, Digital Solutions, and Consultations</h2>
                        <p class="hero-text">With a vision to bridge gaps in global healthcare systems, AstraMedic Solutions empowers professionals, strengthens healthcare infrastructure, and delivers compassionate care wherever it is needed.</p>
                        <a href="/consultants.php" class="btn-primary">Explore Services</a>
                    </div>
                </div>

            </div>
            
            <!-- Carousel Controls -->
            <button class="carousel-btn prev-btn" aria-label="Previous Slide">❮</button>
            <button class="carousel-btn next-btn" aria-label="Next Slide">❯</button>
            <div class="carousel-indicators">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
            </div>
        </div>
    </section>

    <section class="home-section split-section">
        <div class="container">
            <div class="split-layout">
                <div class="content-col">
                    <h2 class="h2 section-title">HealthCare Consultants</h2>
                    <h3 class="h5 section-subtitle">Expert Guidance for International Healthcare Licensing and Migration.</h3>
                    <p>At AstraMedic Consultants, we specialize in healthcare licensing solutions for professionals worldwide. Whether you’re a doctor, nurse, or allied health professional, we provide expert guidance in obtaining internationally recognized licenses such as HCPC (UK), CORU (Ireland), Physiotherapy Board of New Zealand (PBNZ), DHA (Dubai), HAAD/DOH (Abu Dhabi), MOH (UAE), QCHP (Qatar), and SCFHS (Saudi Arabia).</p>
                    <p>Our experienced team ensures a smooth, transparent, and hassle-free process, supporting you at every step of your licensing journey and helping you achieve global professional registration with confidence.</p>
                    <a href="/consultants.php" class="btn-primary mt-4">Get Your License</a>
                </div>
                <div class="image-col">
                    <img src="/images/healthcare-licensing-immigration.jpg" alt="Healthcare Licensing and immigration" class="rounded-img shadow">
                </div>
            </div>
        </div>
    </section>

    <section class="home-section split-section bg-light">
        <div class="container">
            <div class="split-layout reverse">
                <div class="image-col">
                    <img src="/images/astramedic-digital-marketing-solutions.jpg" alt="AstraMedic Digital Marketing Solutions" class="rounded-img shadow">
                </div>
                <div class="content-col">
                    <h2 class="h2 section-title">Digital Healthcare Solutions</h2>
                    <h3 class="h5 section-subtitle">Digital Marketing - Web Development</h3>
                    <p>AstraMedic Digital Solutions enhances healthcare organizations’ online presence with specialized digital marketing, web development, and SEO services.</p>
                    <a href="/digital-marketing.php" class="btn-primary mt-4">Get Your Service</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-section shop-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="h2 section-title">AstraMedic Shop</h2>
                <p class="section-subtitle">All hospital and physiotherapy related Equipments.</p>
            </div>
            
            <div class="service-grid">
                
                <div class="grid-card">
                    <div class="card-img-wrapper">
                        <img src="/images/medical-equipment.jpg" alt="Medical Equipment">
                    </div>
                    <div class="card-content">
                        <h3 class="h4">Medical Equipment</h3>
                        <p>We are trading range Medical Devices like X-ray machines, ultrasound machines, and blood pressure monitors, glucometers as well as life-saving devices such as ventilators and defibrillators. We also deal in hospital Furniture i.e. beds, stretchers, chairs, and examination tables etc.</p>
                        <a href="https://shop.astramedicsolutions.com" class="btn-primary" target="_blank" rel="noopener noreferrer">shop now</a>
                    </div>
                </div>

                <div class="grid-card">
                    <div class="card-img-wrapper">
                        <img src="/images/surgical-disposables.jpg" alt="Surgical Disposables">
                    </div>
                    <div class="card-content">
                        <h3 class="h4">Surgical Disposables</h3>
                        <p>High-quality products designed for use in operating rooms and sterile environments. We are trading disposable medical supplies, including surgical masks, gloves, gowns, drapes, syringes, needles, catheters, bandages, and other essential items used in medical procedures.</p>
                        <a href="https://shop.astramedicsolutions.com" class="btn-primary" target="_blank" rel="noopener noreferrer">shop now</a>
                    </div>
                </div>

                <div class="grid-card">
                    <div class="card-img-wrapper">
                        <img src="/images/physiotherapy-equipment.jpg" alt="Physiotherapy Equipment">
                    </div>
                    <div class="card-content">
                        <h3 class="h4">Physiotherapy Equipment</h3>
                        <p>We offer a wide variety of high-quality equipment, including electrotherapy devices, ultrasound machines, rehabilitation tools, massage tables, and more. Many of our products feature adjustable settings to provide personalized treatment and optimal results.</p>
                        <a href="https://shop.astramedicsolutions.com" class="btn-primary" target="_blank" rel="noopener noreferrer">shop now</a>
                    </div>
                </div>

                <div class="grid-card">
                    <div class="card-img-wrapper">
                        <img src="/images/special-education-toys.jpg" alt="Special Education Toys">
                    </div>
                    <div class="card-content">
                        <h3 class="h4">Special Education Toys</h3>
                        <p>Empower every child’s unique learning journey with our Special Education Toys. Carefully selected to boost cognitive skills, sensory development, and motor coordination, these purposeful tools make therapy and playtime both engaging and effective.</p>
                        <a href="https://shop.astramedicsolutions.com" class="btn-primary" target="_blank" rel="noopener noreferrer">shop now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="home-section reviews-section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="h2 section-title">Our Clients Reviews</h2>
            </div>
            
            <div class="carousel-container review-carousel-wrapper" id="reviewCarousel">
                <div class="carousel-track review-track">
                    
                    <div class="carousel-slide review-slide active">
                        <div class="review-card">
                            <div class="stars">★★★★★</div>
                            <p class="review-text">"...I deeply appreciate the exceptional service and seamless support by AstraMedic during my..."</p>
                            <h4 class="h5 reviewer-name">Shahbaz Hassan</h4>
                        </div>
                    </div>

                    <div class="carousel-slide review-slide">
                        <div class="review-card">
                            <div class="stars">★★★★★</div>
                            <p class="review-text">"I recently utilized the services of this medical equipment, I have never seen such kind of service, brilliant work. Highly recommended"</p>
                            <h4 class="h5 reviewer-name">Uzma</h4>
                        </div>
                    </div>

                    <div class="carousel-slide review-slide">
                        <div class="review-card">
                            <div class="stars">★★★★★</div>
                            <p class="review-text">"Very outstanding work, they give a top priority to their client and guide them in choosing the best equipment for their needs, plus their rate is very reasonable"</p>
                            <h4 class="h5 reviewer-name">Faisal Baqar</h4>
                        </div>
                    </div>

                </div>

                <!-- Review Carousel Controls -->
                <button class="carousel-btn prev-btn review-nav" aria-label="Previous Review">❮</button>
                <button class="carousel-btn next-btn review-nav" aria-label="Next Review">❯</button>
                <div class="carousel-indicators review-dots">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                </div>
            </div>
            
        </div>
    </section>

</main>

<script src="/scripts/index.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>