// Enhance pricing buttons on the Web Development page.
// This works with the EXISTING values in contact-form-config.php:
// clinic = Personal/Portfolio, hospital = Business, network = Ecommerce.
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('#contact form.contact-form');
  const packageSelect = form?.querySelector('select[name="website_package"]');
  const status = document.getElementById('wd-selected-package');

  if (!form || !packageSelect) return;

  document.querySelectorAll('[data-wd-package]').forEach((button) => {
    button.addEventListener('click', () => {
      const value = button.dataset.wdPackage;
      const optionExists = [...packageSelect.options].some((option) => option.value === value);
      if (!optionExists) return;

      packageSelect.value = value;
      packageSelect.dispatchEvent(new Event('change', { bubbles: true }));

      if (status) {
        status.textContent = `Selected package: ${button.dataset.wdPackageLabel || 'Website Development'}. You can change it in the form below.`;
        status.hidden = false;
      }
    });
  });
});
