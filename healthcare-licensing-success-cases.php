<?php
$page_title = 'Success Cases - AstraMedic Licensing';
$meta_description = 'Explore the active registrations and successful licensing journeys of healthcare professionals we have empowered worldwide.';
$page_css = '/css/healthcare-licensing-success-cases.css';
include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php';
?>

<main class="page-success-cases">

    <section class="cases-hero bg-light text-center">
        <div class="container">
            <h1 class="h1 text-primary">Our Global Success Stories</h1>
            <p class="intro-text mt-3">Explore the active registrations and successful licensing journeys of healthcare
                professionals we have empowered worldwide.</p>
        </div>
    </section>

    <!-- Section 1: DataFlow & Gulf Exam -->
    <section class="service-case-section bg-white text-center">
        <div class="container" id="dataflow">
            <h2 class="h3 mb-3">DataFlow Verification & Gulf Exam Preparation</h2>
            <!-- <p class="section-desc mb-5">We provide complete support for healthcare professionals applying to Gulf licensing authorities, including DHA, DOH/HAAD, MOH (UAE), QCHP (Qatar), and SCFHS (Saudi Arabia). Our services include DataFlow verification guidance, document review, and step-by-step application support to ensure compliance with authority requirements. In addition, we offer focused exam preparation support, helping candidates prepare for Prometric and licensing exams with the right strategy, materials, and guidance. With our expertise, you can confidently clear both verification and examination stages required for Gulf registration.</p> -->

            <div class="gallery-grid">
                <img src="/images/success-gulf-1.jpg" data-fullsrc="/images/success-gulf-1.jpg"
                    alt="Gulf Registration Success 1" class="gallery-img shadow">
                <img src="/images/success-gulf-2.jpg" data-fullsrc="/images/success-gulf-2.jpg"
                    alt="Gulf Registration Success 2" class="gallery-img shadow">
                <img src="/images/success-gulf-3.jpg" data-fullsrc="/images/success-gulf-3.jpg"
                    alt="Gulf Registration Success 3" class="gallery-img shadow">
            </div>
        </div>
    </section>

    <!-- Section 2: HCPC & CORU -->
    <section class="service-case-section bg-light text-center">
        <div class="container" id="hcpc-coru">
            <h2 class="h3 mb-3">HCPC (UK) & CORU (Ireland) Licensing Support</h2>
            <!-- <p class="section-desc mb-5">AstraMedic Consultants specializes in professional registration for the UK and Ireland through HCPC (UK) and CORU (Ireland). We guide you through qualification assessment, document preparation, and complete application submission in line with updated regulatory standards. Our team ensures your application is accurate, well-structured, and aligned with council expectations, minimizing delays and increasing approval chances. Whether you are applying as a physiotherapist or other allied health professional, we simplify the entire process for you.</p> -->

            <div class="gallery-grid">
                <img src="/images/success-uk-1.jpg" data-fullsrc="/images/success-uk-1.jpg"
                    alt="UK Registration Success 1" class="gallery-img shadow">
                <img src="/images/success-uk-2.jpg" data-fullsrc="/images/success-uk-2.jpg"
                    alt="UK Registration Success 2" class="gallery-img shadow">
                <img src="/images/success-uk-3.jpg" data-fullsrc="/images/success-uk-3.jpg"
                    alt="UK Registration Success 3" class="gallery-img shadow">
            </div>
        </div>
    </section>

    <!-- Section 3: New Zealand & Australia -->
    <section class="service-case-section bg-white text-center">
        <div class="container" id="pbnz">
            <h2 class="h3 mb-3">New Zealand & Australia Express Pathways</h2>
            <!-- <p class="section-desc mb-5">We offer fast-track guidance for healthcare professionals applying to Physiotherapy Board of New Zealand (PBNZ) and relevant Australian registration pathways (AHPRA). Our team helps identify express or alternative routes based on your qualifications and international recognition, reducing unnecessary delays. From eligibility assessment to documentation and submission, we ensure a streamlined pathway toward registration in New Zealand and Australia. This service is ideal for professionals seeking efficient and strategic licensing options.</p> -->

            <div class="gallery-grid">
                <img src="/images/success-nz-1.jpg" data-fullsrc="/images/success-nz-1.jpg"
                    alt="NZ Registration Success 1" class="gallery-img shadow">
                <img src="/images/success-nz-2.jpg" data-fullsrc="/images/success-nz-2.jpg"
                    alt="NZ Registration Success 2" class="gallery-img shadow">
                <img src="/images/success-nz-3.jpg" data-fullsrc="/images/success-nz-3.jpg"
                    alt="NZ Registration Success 3" class="gallery-img shadow">
            </div>
        </div>
    </section>

    <!-- Section 4: AHPC Pakistan -->
    <section class="service-case-section bg-light text-center">
        <div class="container" id="ahpc">
            <h2 class="h3 mb-3">AHPC Registration Support (Pakistan)</h2>
            <!-- <p class="section-desc mb-5">We offer dedicated assistance for registration with the Allied Health Professions Council (AHPC) Pakistan. Our services include application guidance, document preparation, and verification support to help you meet national regulatory requirements. Whether you are applying for initial registration or updating your credentials, we ensure your process is handled accurately and efficiently. This service is especially beneficial for professionals requiring local registration for career progression or international applications.</p> -->

            <div class="gallery-grid">
                <img src="/images/success-pk-1.jpg" data-fullsrc="/images/success-pk-1.jpg"
                    alt="PK Registration Success 1" class="gallery-img shadow">
                <img src="/images/success-pk-2.jpg" data-fullsrc="/images/success-pk-2.jpg"
                    alt="PK Registration Success 2" class="gallery-img shadow">
                <img src="/images/success-pk-3.jpg" data-fullsrc="/images/success-pk-3.jpg"
                    alt="PK Registration Success 3" class="gallery-img shadow">
            </div>
        </div>
    </section>

    <!-- Lead Capture Form -->
    <!-- <section class="form-integration-section bg-white">
        <div class="container text-center pt-5 pb-5">
            <h2 class="h2 mb-4">Ready to Start Your Licensing Journey?</h2>
            <link rel="stylesheet" href="/css/contact-form.css">
        <===?===php include $_SERVER['DOCUMENT_ROOT'] . '/php/contact-form.php'; ?>
        </div>
    </section> -->

    <!-- Lightbox Modal HTML -->
    <div class="lightbox-modal" id="lightboxModal" aria-hidden="true">
        <span class="lightbox-close" aria-label="Close Lightbox">&times;</span>
        <div class="lightbox-content">
            <img src="" id="lightboxImg" alt="Expanded Success Certificate">
        </div>
    </div>

</main>

<!-- <script src="/scripts/contact-validation.js" defer></script> -->
<script src="/scripts/success-cases.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>