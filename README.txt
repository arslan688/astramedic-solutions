AstraMedic Solutions — Healthcare Management Software page
========================================================

FILES IN THIS PACKAGE
- healthcare-softwares.php
- css/healthcare-softwares.css
- scripts/healthcare-softwares.js
- images/healthcare-software/hero-dashboard.svg
- images/healthcare-software/hims-modules.svg
- images/healthcare-software/custom-workflow.svg
- images/healthcare-software/patient-portal.svg

INSTALLATION
1. Back up your existing healthcare software PHP page and CSS.
2. Upload healthcare-softwares.php to the same location as your existing page.
3. Upload css/healthcare-softwares.css to /css/healthcare-softwares.css.
4. Upload scripts/healthcare-softwares.js to /scripts/healthcare-softwares.js.
5. Upload the four SVG files to /images/healthcare-software/.
6. Keep using your current /css/universal.css, shared PHP header/footer,
   /css/contact-form.css, /php/contact-form.php and
   /scripts/contact-validation.js. These existing files are NOT replaced.
7. Verify that header.php loads your universal.css before the page-specific CSS.
8. The PHP page starts a session before calling header.php to support the
   existing CSRF-protected shared contact form.

CONTACT FORM INTEGRATION
- Uses exactly: $contactFormKey = 'healthcare-software';
- This matches the 'healthcare-software' key in the configuration you provided.
- No new process-contact.php or SMTP settings are included: continue using
  the existing contact form system, and configure email sending separately.
- The healthcare-softwares.js script selects an existing software_type option
  when someone clicks a solution-specific CTA. It ONLY selects values that
  already exist in the dropdown; it never injects new unvalidated choices.
- Your current config supports: hospital, clinic, portal, custom.
- For better matching, consider adding the following to the 'software_type'
  field's 'options' in /php/contact-form-config.php:

    'laboratory' => 'Laboratory Management Software (LIMS / LIS)',
    'patient' => 'Patient Management System',
    'inventory' => 'Pharmacy / Medical Inventory Software',

  The JS will then automatically preselect these too.
  The form must still validate accepted values server-side, as previously planned.

IMAGE REPLACEMENT
All four supplied SVGs are fictional interface illustrations, NOT examples
of deployed software or real patient data. Replace with your own approved
screenshots when ready, while preserving the same paths or updating img src.
Remove or anonymize all patient/personally identifiable data from screenshots.
Use the displayed width/height proportions for suitable replacements:
- Hero: 1040 × 770
- HIMS modules: 900 × 720
- Custom workflow: 900 × 720
- Patient portal: 900 × 560

PAGE STRUCTURE
1. Hero
2. Healthcare software solutions (6 cards)
3. Software features (8 items)
4. Benefits (4 cards)
5. HIMS / hospital modules
6. Custom development
7. Five-step process
8. Healthcare industries (6 cards)
9. Software projects / implementations (9 items)
10. Twelve FAQ answers using native HTML details/summary
11. Shared contact form

CONTENT NOTES
- Avoid promising specific compliance certification, security guarantees,
  integrations or AI/clinical outcomes that have not been verified.
- Review all software offerings and example implementations against the
  actual capabilities, projects and approved client references.
- The page uses the keyword strategy discussed earlier but makes no claims
  about current rankings or measured search volume.

SMOKE TEST
- php -l healthcare-softwares.php
- Check desktop/tablet/mobile layout.
- Test solution CTAs: hospital, clinic, portal should preselect; new options
  will preselect after you add them to the config.
- Open/close FAQs using keyboard and mouse.
- Submit the existing form with test values and verify your backend/SMTP.
