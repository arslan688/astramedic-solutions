<?php
$page_title = "Get In Touch";
$meta_description = "Contact AstraMedic Solutions. Get in touch for healthcare licensing, digital marketing, web development, and medical equipment inquiries.";
$page_css = "/css/contact.css";
include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php';
?>

<main class="page-contact bg-light">
    <section class="page-header">
        <div class="container text-center">
            <h1 class="h1">Get In Touch</h1>
            <p>We are here to assist you with your healthcare, digital, and consultancy needs.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">

                <div class="contact-info-col">
                    <div class="contact-details-card bg-white shadow">
                        <h2 class="h3">Contact Information</h2>
                        <ul class="contact-list">
                            <li>
                                <h3 class="h6 text-primary">Phone</h3>
                                <a href="tel:+923441347681">+92 344 1347681</a><br>
                                <a href="tel:+923167743868">+92 316 7743868</a><br>
                                <a href="tel:+923075149503">+92 307 5149503</a>
                            </li>
                            <li>
                                <h3 class="h6 text-primary">Email</h3>
                                <a href="mailto:info@astramedicsolutions.com">info@astramedicsolutions.com</a>
                            </li>
                            <li>
                                <h3 class="h6 text-primary">Location</h3>
                                <p>Office#13-F, First Floor, Noor Mobile Mall, 6th Road, Satellite Town, Rawalpindi,
                                    46300</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-form-col">
                    <div class="contact-form-wrapper bg-white shadow">
                        <h2 class="h3 mb-4">Send Us a Message</h2>
                        <link rel="stylesheet" href="/css/contact-form.css">
                        <?php include $_SERVER['DOCUMENT_ROOT'] . '/php/contact-form.php'; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="map-wrapper container shadow">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.332304856037!2d73.0733853!3d33.6421588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df952e00000000%3A0x0!2sNoor%20Mobile%20Mall!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
</main>

<script src="/scripts/contact-validation.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>