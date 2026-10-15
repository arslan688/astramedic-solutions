document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');

    if (!contactForm) return;

    contactForm.addEventListener('submit', function(e) {
        let isValid = true;

        // Clear all previous error states
        resetErrors();

        const nameField = document.getElementById('fullName');
        const emailField = document.getElementById('emailAddress');
        const phoneField = document.getElementById('phoneNumber');
        const serviceField = document.getElementById('serviceType');
        const messageField = document.getElementById('messageBody');

        if (nameField.value.trim() === '') {
            showError(nameField, 'Full Name is required.');
            isValid = false;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailField.value.trim() === '') {
            showError(emailField, 'Email Address is required.');
            isValid = false;
        } else if (!emailRegex.test(emailField.value.trim())) {
            showError(emailField, 'Please enter a valid email address.');
            isValid = false;
        }

        // Explicitly ensuring no alphabetic or special characters other than '+' at the start
        const phoneRegex = /^\+?\d+$/;
        const phoneValue = phoneField.value.trim().replace(/\s/g, ''); // Strip spaces for evaluation
        
        if (phoneField.value.trim() === '') {
            showError(phoneField, 'Phone Number is required.');
            isValid = false;
        } else if (!phoneRegex.test(phoneValue)) {
            showError(phoneField, 'Phone Number must contain only numeric characters.');
            isValid = false;
        }

        if (serviceField.value === '') {
            showError(serviceField, 'Please select a service.');
            isValid = false;
        }

        if (messageField.value.trim() === '') {
            showError(messageField, 'Message cannot be empty.');
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    function showError(inputElement, message) {
        const formGroup = inputElement.closest('.form-group');
        const errorSpan = formGroup.querySelector('.error-text');
        
        formGroup.classList.add('has-error');
        if (errorSpan) {
            errorSpan.textContent = message;
        }
    }

    function resetErrors() {
        const errorGroups = contactForm.querySelectorAll('.form-group.has-error');
        errorGroups.forEach(group => {
            group.classList.remove('has-error');
            const errorSpan = group.querySelector('.error-text');
            if (errorSpan) {
                errorSpan.textContent = '';
            }
        });
    }
});