<?php
$page_title = "Careers";
$meta_description = "Build Your Future With AstraMedic Solutions. Join a modern healthcare and digital solutions company focused on innovation, growth, and meaningful impact.";
$page_css = "/css/careers.css";
include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php';
?>

<main class="page-careers bg-light">

    <section class="careers-hero">
        <div class="hero-gradient-overlay"></div>
        <div class="container relative-z">
            <div class="hero-grid">
                <div class="hero-content-left text-white">
                    <h1 class="h1 text-white">Careers at AstraMedic Solutions</h1>
                    <h2 class="h3 text-white mt-3">Build Your Future With Us</h2>
                    <p class="mt-3">Join a modern healthcare and digital solutions company focused on innovation,
                        growth, and meaningful impact. Explore career opportunities in healthcare consultancy, digital
                        services, business development, and technology while growing in a professional and collaborative
                        environment.</p>
                    <a href="#openings" class="btn-primary btn-light mt-4">View Openings</a>
                </div>
                <div class="hero-content-right">
                    <div class="glass-card text-white">
                        <h3 class="h4 text-white mb-4">Join AstraMedic Solutions</h3>
                        <ul class="glass-list">
                            <li><i class="fa-solid fa-check"></i> <span><strong>Growth-Focused Environment</strong>
                                    (Continuous learning, mentorship)</span></li>
                            <li><i class="fa-solid fa-check"></i> <span><strong>Collaborative Culture</strong> (Work
                                    with supportive professionals)</span></li>
                            <li><i class="fa-solid fa-check"></i> <span><strong>Flexible Opportunities</strong> (Remote,
                                    hybrid, freelance, full-time)</span></li>
                            <li><i class="fa-solid fa-check"></i> <span><strong>Real Impact</strong> (Your ideas and
                                    contributions are recognized)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="openings" class="jobs-section bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="h2">Available Job Positions</h2>
                <p>We routinely hire talented individuals across multiple departments based on ongoing projects and
                    company expansion.</p>
            </div>

            <div class="jobs-grid">

                <!-- Job Card 1 -->
                <div class="job-card shadow">
                    <div class="job-card-body">
                        <h3 class="h5 mb-3">Business Development Executive (Digital Solutions)</h3>
                        <ul class="job-meta-list">
                            <li><i class="fa-solid fa-wallet"></i> Rs 50,000 to 80,000/month</li>
                            <li><i class="fa-solid fa-briefcase"></i> Full-time</li>
                            <li><i class="fa-solid fa-location-dot"></i> Rawalpindi</li>
                        </ul>
                        <button class="btn-primary w-100 mt-4 open-modal-btn" data-target="modal-1">Full Job
                            Description</button>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="job-card shadow">
                    <div class="job-card-body">
                        <h3 class="h5 mb-3">Healthcare Business Development Executive (Consultants Project)</h3>
                        <ul class="job-meta-list">
                            <li><i class="fa-solid fa-wallet"></i> Rs 70,000 to 120,000/month</li>
                            <li><i class="fa-solid fa-briefcase"></i> Full-time</li>
                            <li><i class="fa-solid fa-location-dot"></i> Rawalpindi</li>
                        </ul>
                        <button class="btn-primary w-100 mt-4 open-modal-btn" data-target="modal-1">Full Job
                            Description</button>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="job-card shadow">
                    <div class="job-card-body">
                        <h3 class="h5 mb-3">E-commerce Manager (AstraMedic Shop)</h3>
                        <ul class="job-meta-list">
                            <li><i class="fa-solid fa-wallet"></i> Rs 60,000 to 100,000/month</li>
                            <li><i class="fa-solid fa-briefcase"></i> Full-time</li>
                            <li><i class="fa-solid fa-location-dot"></i> Rawalpindi</li>
                        </ul>
                        <button class="btn-primary w-100 mt-4 open-modal-btn" data-target="modal-1">Full Job
                            Description</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="application-section bg-light">
        <div class="container container-narrow">
            <div class="section-header text-center mb-5">
                <h2 class="h2">Application Form</h2>
                <p>Submit your details below to apply for an open position.</p>
            </div>

            <div class="career-form-wrapper">
                <form action="/php/process-career.php" method="POST" enctype="multipart/form-data"
                    class="career-form shadow">

                    <!-- Hidden Honeypot Field -->
                    <input type="text" name="website_url_hp" class="hidden-honeypot" tabindex="-1" autocomplete="off">

                    <h3 class="h4 mb-4">Personal Information</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="firstName" class="form-label">First Name *</label>
                            <input type="text" id="firstName" name="first_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="form-label">Last Name *</label>
                            <input type="text" id="lastName" name="last_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone/Mobile *</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group full-width">
                            <label for="address" class="form-label">Residential Address *</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                        <div class="form-group full-width">
                            <label for="portfolio" class="form-label">Portfolio/LinkedIn Link</label>
                            <input type="url" id="portfolio" name="portfolio" class="form-control"
                                placeholder="https://">
                        </div>
                    </div>

                    <h3 class="h4 mb-4 mt-5">Professional Information</h3>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label for="position" class="form-label">Applying For Position *</label>
                            <select id="position" name="position" class="form-control" required>
                                <option value="">-- Select Position --</option>
                                <option value="Business Development Executive (Digital Solutions)">Business Development
                                    Executive (Digital Solutions)</option>
                                <option value="Healthcare Business Development Executive (Consultants Project)">
                                    Healthcare Business Development Executive (Consultants Project)</option>
                                <option value="E-commerce Manager (AstraMedic Shop)">E-commerce Manager (AstraMedic
                                    Shop)</option>
                                <option value="General Application">General Application</option>
                            </select>
                        </div>
                        <div class="form-group full-width">
                            <label for="profession" class="form-label">Current Profession</label>
                            <input type="text" id="profession" name="profession" class="form-control">
                        </div>
                        <div class="form-group full-width">
                            <label for="education" class="form-label">Education *</label>
                            <input type="text" id="education" name="education" class="form-control" required>
                        </div>
                        <div class="form-group full-width">
                            <label for="experience" class="form-label">Experience * (Years and details)</label>
                            <textarea id="experience" name="experience" class="form-control" rows="3"
                                required></textarea>
                        </div>
                        <div class="form-group full-width">
                            <label for="message" class="form-label">Message/Cover Letter</label>
                            <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group full-width">
                            <label for="resume" class="form-label">Upload your CV/Resume *</label>
                            <input type="file" id="resume" name="resume" class="form-control file-input"
                                accept=".pdf,.doc,.docx" required>
                            <span class="file-hint">Strictly .pdf, .doc, .docx - Max 5MB</span>
                        </div>
                    </div>

                    <div class="form-submit mt-5">
                        <button type="submit" class="btn-primary w-100">Submit Application</button>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <!-- Modal Overlay -->
    <div class="job-modal-overlay" id="jobModalOverlay">
        <div class="job-modal-content">
            <button class="modal-close-btn" aria-label="Close Modal">
                &times;
            </button>

            <div class="modal-body">
                <!-- Job description is inserted by JavaScript -->
            </div>
        </div>
    </div>

</main>

<script src="/scripts/careers.js" defer></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php'; ?>