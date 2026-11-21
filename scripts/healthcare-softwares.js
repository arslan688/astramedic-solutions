/**
 * Healthcare Software page: preselect an existing software_type dropdown option
 * when a visitor follows a solution-specific link to the shared contact form.
 * The form continues to work normally without JavaScript.
 */
document.addEventListener("DOMContentLoaded", () => {
  const contactForm = document.querySelector(
    ".page-healthcare-softwares #contactForm",
  );
  const softwareTypeSelect = contactForm?.querySelector(
    'select[name="software_type"]',
  );
  if (!softwareTypeSelect) return;

  document
    .querySelectorAll(".page-healthcare-softwares a[data-hs-software]")
    .forEach((link) => {
      link.addEventListener("click", () => {
        const softwareType = link.dataset.hsSoftware;
        // Only select a value already available in contact-form-config.php.
        const validOption = Array.from(softwareTypeSelect.options).some(
          (option) => option.value === softwareType && !option.disabled,
        );
        if (!validOption) return;

        softwareTypeSelect.value = softwareType;
        softwareTypeSelect.dispatchEvent(
          new Event("change", { bubbles: true }),
        );
      });
    });
});
