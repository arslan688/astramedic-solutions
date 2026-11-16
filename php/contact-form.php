<?php

// Start the session at the top of the parent page,
// before any HTML is sent.
if (session_status() !== PHP_SESSION_ACTIVE) {
    throw new RuntimeException(
        'Start the PHP session before including the contact form.'
    );
}

$config = require __DIR__ . '/contact-form-config.php';

$contactFormKey = $contactFormKey ?? 'contact';

if (!isset($config['forms'][$contactFormKey])) {
    throw new RuntimeException('Unknown contact form configuration.');
}

$form = $config['forms'][$contactFormKey];

// Merge common fields with page-specific overrides
$fields = array_replace_recursive(
    $config['base_fields'],
    $form['fields'] ?? []
);

// Tokens for CSRF protection and form context verification
if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
}

if (empty($_SESSION['contact_context_secret'])) {
    $_SESSION['contact_context_secret'] = bin2hex(random_bytes(32));
}

$formSignature = hash_hmac(
    'sha256',
    $contactFormKey,
    $_SESSION['contact_context_secret']
);

// Escape text for HTML
$e = static fn($value) => htmlspecialchars(
    (string) $value,
    ENT_QUOTES | ENT_SUBSTITUTE,
    'UTF-8'
);

// Reusable function to render a field
$renderField = static function (string $name, array $field) use ($e): void {

    if (($field['show'] ?? true) === false) {
        return;
    }

    $id = 'cf-' . str_replace('_', '-', $name);
    $type = $field['type'] ?? 'text';
    $label = $field['label'] ?? $name;
    $placeholder = $field['placeholder'] ?? '';
    $required = !empty($field['required']) ? 'required' : '';
    $maxLength = $type === 'textarea' ? 5000 : 500;

    ?>
    <div class="form-group">

        <label for="<?= $e($id) ?>" class="form-label">
            <?= $e($label) ?>
            <?= $required ? '*' : '' ?>
        </label>

        <?php if ($type === 'select'): ?>

            <select id="<?= $e($id) ?>" name="<?= $e($name) ?>" class="form-control" <?= $required ?>>
                <option value="">-- Select --</option>

                <?php foreach (($field['options'] ?? []) as $value => $text): ?>
                    <option value="<?= $e($value) ?>">
                        <?= $e($text) ?>
                    </option>
                <?php endforeach; ?>
            </select>

        <?php elseif ($type === 'textarea'): ?>

            <textarea id="<?= $e($id) ?>" name="<?= $e($name) ?>" class="form-control" rows="5" maxlength="<?= $maxLength ?>"
                placeholder="<?= $e($placeholder) ?>" <?= $required ?>></textarea>

        <?php else: ?>

            <input type="<?= $e($type) ?>" id="<?= $e($id) ?>" name="<?= $e($name) ?>" class="form-control"
                placeholder="<?= $e($placeholder) ?>" maxlength="<?= $maxLength ?>" <?= $required ?>>

        <?php endif; ?>

        <span class="error-text"></span>
    </div>
    <?php
};

?>

<div class="contact-form-container">

    <form id="contactForm" class="contact-form" action="/php/process-contact.php" method="POST">

        <!-- Identify and verify the form configuration -->
        <input type="hidden" name="form_key" value="<?= $e($contactFormKey) ?>">

        <input type="hidden" name="form_sig" value="<?= $e($formSignature) ?>">

        <input type="hidden" name="csrf_token" value="<?= $e($_SESSION['contact_csrf']) ?>">

        <!-- Full Name -->
        <?php $renderField('full_name', $fields['full_name']); ?>

        <!-- Email and Phone -->
        <div class="form-row">
            <?php $renderField('email', $fields['email']); ?>
            <?php $renderField('phone', $fields['phone']); ?>
        </div>

        <!-- Service -->
        <?php if ($form['service_mode'] === 'select'): ?>

            <div class="form-group">
                <label for="serviceType" class="form-label">
                    Interested Service
                </label>

                <select id="serviceType" name="service" class="form-control" required>
                    <option value="">-- Select a Service --</option>

                    <?php foreach ($config['services'] as $value => $label): ?>
                        <option value="<?= $e($value) ?>">
                            <?= $e($label) ?>
                        </option>
                    <?php endforeach; ?>

                </select>

                <span class="error-text"></span>
            </div>

        <?php else: ?>

            <!-- Service already determined by this page -->
            <input type="hidden" name="service" value="<?= $e($form['service']) ?>">

            <?php if (!empty($form['show_service_note'])): ?>
                <p class="selected-service">
                    Interested in:
                    <strong>
                        <?= $e($config['services'][$form['service']]) ?>
                    </strong>
                </p>
            <?php endif; ?>

        <?php endif; ?>

        <!-- Extra page-specific fields -->
        <?php foreach (($form['extra_fields'] ?? []) as $name => $field): ?>
            <?php $renderField($name, $field); ?>
        <?php endforeach; ?>

        <!-- Message -->
        <?php $renderField('message', $fields['message']); ?>

        <div class="form-submit">
            <button type="submit" class="btn-primary w-100">
                Send Message
            </button>
        </div>

    </form>

</div>