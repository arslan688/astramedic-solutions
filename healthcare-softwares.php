<?php
$page_title = "Healthcare Softwares & Portals";
$meta_description = "Empowering Healthcare with Custom Digital Management Solutions. High-performance healthcare software to transform operational and clinical efficiency.";
$page_css = "/css/healthcare-softwares.css";
include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php';
?>

<main class="page-healthcare-softwares bg-light">
    
    <section class="page-header bg-white text-center">
        <div class="container">
            <h1 class="h1 text-primary">Healthcare Softwares & Portals</h1>
            <h2 class="h4">Empowering Healthcare with Custom Digital Management Solutions</h2>
            <p class="intro-text">AstraMedic Solutions develops high-performance healthcare software and custom digital portals designed to transform the operational and clinical efficiency of clinics, diagnostic centers, aesthetic clinics, and medical facilities. Experience the power of a comprehensive Hospital Information Management System (HIMS) Portal.</p>
        </div>
    </section>

    <section class="hs-benefits-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="h2">Key Benefits</h2>
            </div>
            
            <div class="hs-benefits-grid">
                
                <div class="benefit-card bg-white">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <div class="benefit-content">
                        <h3 class="h4">Increase Operational Efficiency</h3>
                        <p>Automate manual workflows, streamline patient intake, and reduce administrative workload.</p>
                    </div>
                </div>

                <div class="benefit-card bg-white">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-laptop-medical"></i>
                    </div>
                    <div class="benefit-content">
                        <h3 class="h4">Enhance Clinical Decision Making</h3>
                        <p>Centralized digital portals provide immediate, secure access to real-time patient records.</p>
                    </div>
                </div>

                <div class="benefit-card bg-white">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="benefit-content">
                        <h3 class="h4">Data Security & Compliance</h3>
                        <p>Keep your facility aligned with international standards and protected against unauthorized access.</p>
                    </div>
                </div>

                <div class="benefit-card bg-white">
                    <div class="benefit-icon">
                        <i class="fa-solid fa-face-smile"></i>
                    </div>
                    <div class="benefit-content">
                        <h3 class="h4">Improve Patient Experience</h3>
                        <p>Faster processing, online portal access, and seamless communication for your patients.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="hs-implementations-section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="h2">Successful Software Implementations</h2>
                <p>Robust systems engineered to handle complex workflows across multiple specialized domains.</p>
            </div>

            <div class="hs-implementations-grid">
                
                <div class="implementation-card">
                    <i class="fa-solid fa-hospital implementation-icon"></i>
                    <h3 class="h5">HIMS (Hospital Information Management System)</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-calendar-check implementation-icon"></i>
                    <h3 class="h5">Appointment System For Clinic</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-pills implementation-icon"></i>
                    <h3 class="h5">Drug Control System</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-microscope implementation-icon"></i>
                    <h3 class="h5">Laboratory Management System</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-boxes-stacked implementation-icon"></i>
                    <h3 class="h5">Inventory Management System</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-chart-pie implementation-icon"></i>
                    <h3 class="h5">Finance And Budget System</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-bullseye implementation-icon"></i>
                    <h3 class="h5">Leads Execution System</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-building implementation-icon"></i>
                    <h3 class="h5">Real Estate Investment Platform</h3>
                </div>

                <div class="implementation-card">
                    <i class="fa-solid fa-users implementation-icon"></i>
                    <h3 class="h5">Human Resource Management System</h3>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="hs-contact-section bg-light">
        <div class="container text-center">
            <h2 class="h2 section-header">Ready to take your healthcare organization to the next level?</h2>
            <p class="intro-text">Contact AstraMedic Digital Solutions for a consultation.</p>
            <link rel="stylesheet" href="/css/contact-form.css">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/php/contact-form.php'; ?>
        </div>
    </section>

</main>

<script src="/scripts/contact-validation.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>