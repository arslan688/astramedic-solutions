<?php
$page_title = 'Page Not Found - AstraMedic Solutions';
$meta_description = 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.';
$page_css = '/css/404.css';

include $_SERVER['DOCUMENT_ROOT'] . '/php/header.php';
?>

<main class="error-container">
    <h1>404</h1>
    <h2>Oops! Page Not Found</h2>
    <p>The link you followed may be broken, or the page may have been removed.</p>
    <a href="/" class="btn-primary">Return to Homepage</a>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/php/footer.php';
?>