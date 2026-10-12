<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-XXXXXXX');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $site_name = "AstraMedic Solutions";
    $title = isset($page_title) ? $page_title . " | " . $site_name : $site_name;
    $desc = isset($meta_description) ? $meta_description : "AstraMedic Solutions combine medical expertise, advanced technology, and professional consultancy to build solutions that support both healthcare providers and patients.";
    $og_img = isset($og_image) ? $og_image : "/images/astramedic-default-og.jpg";
    $og_u = isset($og_url) ? $og_url : "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($desc); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_img); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($og_u); ?>">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png" href="/images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Core and Component Styles -->
    <link rel="stylesheet" href="/css/universal.css">
    <link rel="stylesheet" href="/css/header.css">

    <?php if (isset($page_css)): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($page_css); ?>">
    <?php endif; ?>

    <!-- Interactive Logic -->
    <script src="/scripts/header.js" defer></script>
</head>

<body>

    <header class="site-header">
        <div class="container">
            <div class="nav-wrapper">

                <!-- Logo Section -->
                <a href="/" class="logo-link">
                    <img src="/images/AstraMedic-Solutions-logo.png" alt="AstraMedic Solutions Logo" class="logo-img">
                    <span class="logo-text"></span>
                </a>

                <button class="mobile-menu-toggle" aria-label="Toggle Navigation Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <nav class="main-nav">
                    <ul class="nav-menu">
                        <li><a href="/" class="nav-link">Home</a></li>
                        <li><a href="/consultants.php" class="nav-link">Consultants</a></li>
                        <li><a href="https://shop.astramedicsolutions.com" class="nav-link" target="_blank"
                                rel="noopener noreferrer">Shop</a></li>

                        <!-- Dropdown Parent -->
                        <li class="nav-item-dropdown">
                            <a href="#" class="nav-link dropdown-toggle" aria-haspopup="true"
                                aria-expanded="false">Digital Solutions</a>
                            <ul class="dropdown-menu">
                                <li><a href="/digital-marketing.php" class="dropdown-link">Digital Marketing</a></li>
                                <li><a href="/web-development.php" class="dropdown-link">Web Development</a></li>
                                <li><a href="/healthcare-softwares.php" class="dropdown-link">Healthcare Softwares</a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="/astracrew.php" class="nav-link">AstraCrew</a></li>
                        <li><a href="/about.php" class="nav-link">About</a></li>
                        <li><a href="/contact.php" class="nav-link">Contact</a></li>
                        <li><a href="/careers.php" class="nav-link">Careers</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>