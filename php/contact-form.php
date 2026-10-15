<div class="contact-form-container">
    <form id="contactForm" class="contact-form" action="/php/process-contact.php" method="POST" novalidate>
        
        <div class="form-group">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" id="fullName" name="full_name" class="form-control" placeholder="Enter your full name">
            <span class="error-text"></span>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="emailAddress" class="form-label">Email Address</label>
                <input type="email" id="emailAddress" name="email" class="form-control" placeholder="example@domain.com">
                <span class="error-text"></span>
            </div>

            <div class="form-group">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phone" class="form-control" placeholder="03001234567">
                <span class="error-text"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="serviceType" class="form-label">Interested Service</label>
            <select id="serviceType" name="service" class="form-control">
                <option value="">-- Select a Service --</option>
                <option value="Consultancy">Healthcare Licensing & Immigration</option>
                <option value="Digital Marketing">Digital Marketing & SEO</option>
                <option value="Web Development">Web Development</option>
                <option value="Healthcare Software">Healthcare Softwares & Portals</option>
                <option value="Medical Equipment">Medical Equipment</option>
                <option value="Other">Other</option>
            </select>
            <span class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="messageBody" class="form-label">Your Message</label>
            <textarea id="messageBody" name="message" class="form-control" rows="5" placeholder="How can we help you?"></textarea>
            <span class="error-text"></span>
        </div>

        <div class="form-submit">
            <button type="submit" class="btn-primary w-100">Send Message</button>
        </div>

    </form>
</div>