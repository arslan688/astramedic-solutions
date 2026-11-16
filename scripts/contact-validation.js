document.addEventListener("DOMContentLoaded", () => {
  // Support all contact forms on the page
  const contactForms = document.querySelectorAll("form.contact-form");

  if (!contactForms.length) return;

  contactForms.forEach((contactForm) => {
    // Use custom error messages instead of browser popups
    // Native validation remains available if JS is disabled
    contactForm.noValidate = true;

    // Get all visible, enabled form fields
    function getFields() {
      return [
        ...contactForm.querySelectorAll(
          'input:not([type="hidden"]), select, textarea',
        ),
      ].filter((field) => {
        return (
          !field.disabled && field.type !== "submit" && field.type !== "button"
        );
      });
    }

    // Get the label associated with a field
    function getFieldLabel(field) {
      const formGroup = field.closest(".form-group");
      const label = formGroup?.querySelector(".form-label");

      return label ? label.textContent.replace("*", "").trim() : field.name;
    }

    // Validate one field
    function validateField(field) {
      const value = field.value.trim();
      const label = getFieldLabel(field);

      // Required fields
      if (field.required && value === "") {
        return `${label} is required.`;
      }

      // Catch invalid number input, even if it appears empty
      if (field.validity.badInput) {
        return `Please enter a valid ${label.toLowerCase()}.`;
      }

      // Optional empty fields are valid
      if (value === "") {
        return "";
      }

      // Email validation
      if (field.type === "email") {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(value)) {
          return "Please enter a valid email address.";
        }
      }

      // Phone validation
      if (field.type === "tel") {
        const phoneRegex = /^[0-9+(). -]{7,25}$/;

        if (!phoneRegex.test(value)) {
          return "Please enter a valid phone number.";
        }
      }

      // Website URL validation
      if (field.type === "url") {
        try {
          const url = new URL(value);

          if (url.protocol !== "http:" && url.protocol !== "https:") {
            return "Please enter a valid website URL.";
          }
        } catch {
          return "Please enter a valid website URL.";
        }
      }

      // Other HTML validation rules:
      // min, max, pattern, maxlength, type, etc.
      if (!field.checkValidity()) {
        return (
          field.validationMessage ||
          `Please enter a valid ${label.toLowerCase()}.`
        );
      }

      return "";
    }

    // Show validation error
    function showError(field, message) {
      const formGroup = field.closest(".form-group");

      if (!formGroup) return;

      const errorSpan = formGroup.querySelector(".error-text");

      formGroup.classList.add("has-error");

      field.setAttribute("aria-invalid", "true");

      if (errorSpan) {
        errorSpan.textContent = message;
      }
    }

    // Remove error from one field
    function clearFieldError(field) {
      const formGroup = field.closest(".form-group");

      if (!formGroup) return;

      formGroup.classList.remove("has-error");

      field.removeAttribute("aria-invalid");

      const errorSpan = formGroup.querySelector(".error-text");

      if (errorSpan) {
        errorSpan.textContent = "";
      }
    }

    // Clear all errors
    function resetErrors() {
      getFields().forEach(clearFieldError);
    }

    // Validate form when submitted
    contactForm.addEventListener("submit", function (e) {
      let isValid = true;
      let firstInvalidField = null;

      resetErrors();

      getFields().forEach((field) => {
        const error = validateField(field);

        if (error) {
          showError(field, error);

          isValid = false;

          if (!firstInvalidField) {
            firstInvalidField = field;
          }
        }
      });

      if (!isValid) {
        e.preventDefault();

        // Focus first invalid field
        firstInvalidField?.focus();
      }

      // If valid, browser submits normally
      // to /php/process-contact.php
    });

    // Revalidate fields while user corrects mistakes
    function handleFieldUpdate(e) {
      const field = e.target;

      if (!field.matches("input, select, textarea")) {
        return;
      }

      const formGroup = field.closest(".form-group");

      if (!formGroup?.classList.contains("has-error")) {
        return;
      }

      const error = validateField(field);

      if (error) {
        showError(field, error);
      } else {
        clearFieldError(field);
      }
    }

    contactForm.addEventListener("input", handleFieldUpdate);
    contactForm.addEventListener("change", handleFieldUpdate);
  });
});
