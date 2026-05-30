<?php
// For files in /www/pages/company/
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="/www/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .page-banner {
            background: linear-gradient(135deg, #1a1a3e 0%, #1e1a3a 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .page-banner h1 { font-size: 2.5rem; margin-bottom: 15px; }
        .page-content { max-width: 1200px; margin: 60px auto; padding: 0 20px; min-height: 400px; }
        .content-section { margin-bottom: 40px; }
        .content-section h2 { color: #1a1a3e; margin-bottom: 20px; }
        .content-section p { line-height: 1.8; color: #555; }
    </style>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <section class="page-banner">
        <h1>About Us</h1>
        <p>Leading NDT inspection services provider in India</p>
    </section>

    <div class="page-content">
        <div class="content-section">
            <h2>Who We Are</h2>
            <p>Alpha Sonix NDT Solutions Pvt. Ltd. is a leading provider of advanced Non-Destructive Testing and inspection services. Established in 2021, we have quickly grown to become a trusted partner for industries across India.</p>
        </div>
        
        <div class="content-section">
            <h2>Our Expertise</h2>
            <p>We specialize in providing comprehensive NDT solutions including Advanced NDT, Conventional NDT, Heat Treatment Services, Lifting Inspections, and Third-Party Inspections.</p>
        </div>
        
        <div class="content-section">
            <h2>Why Choose Us</h2>
            <p>With our team of certified professionals and state-of-the-art equipment, we deliver accurate, reliable, and timely inspection services that ensure safety, compliance, and operational excellence.</p>
        </div>
    </div>

    <?php include $base . '/includes/footer.php'; ?>
</body>
</html>

/* ===================== ROOT VARIABLES ===================== */
:root {
    --primary-red: #c0392b;
    --dark-blue: #1a237e;
    --dark-navy: #1a1a3e;
    --text-gray: #555;
    --white: #ffffff;
    --border-color: #e0e0e0;
}

/* ===================== RESET ===================== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    overflow-x: hidden;
}

/* ===================== TOP BAR ===================== */
.top-bar {
    background: #fff;
    padding: 9px 0;
    font-size: 13.5px;
    color: #333;
    border: none;
    box-shadow: none;
    position: relative;
    z-index: 10;
}

.top-bar::after {
    display: none;
}

.top-bar-inner {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.top-bar-center {
    text-align: center;
    color: #444;
}

.top-bar-center strong {
    color: #111;
    font-weight: 700;
}

/* ===================== MAIN HEADER ===================== */
.main-header {
    background: #fff;
    position: sticky;
    top: 0;
    z-index: 9999;
    border: none;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    transition: box-shadow 0.3s ease;
}

.main-header::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: calc(100% - 140px);
    max-width: 1450px;
    height: 1px;
    background: #ececec;
}

.header-inner {
    max-width: 1720px;
    margin: 0 auto;
    padding: 0 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    min-height: 88px;
    gap: 40px;
}

/* ---- Logo ---- */
.logo {
    display: flex;
    align-items: center;
    min-width: 260px;
    flex-shrink: 0;
    text-decoration: none;
}

.logo img {
    height: 62px;
    width: auto;
    display: block;
}

.logo-text {
    display: flex;
    flex-direction: column;
    line-height: 1.3;
}

.logo-title {
    font-size: 17px;
    font-weight: 800;
    color: var(--primary-red);
    letter-spacing: 1px;
}

.logo-subtitle {
    font-size: 9.5px;
    font-weight: 600;
    color: var(--dark-blue);
    letter-spacing: 0.4px;
}

.logo-tagline {
    font-size: 8.5px;
    color: #999;
    letter-spacing: 0.3px;
}

/* ---- Main Nav ---- */
.main-nav {
    flex: 1;
    display: flex;
    justify-content: center;
}

.nav-menu {
    display: flex;
    align-items: center;
    list-style: none;
    gap: 52px;
}

.nav-menu>li {
    position: relative;
}

.nav-menu>li>a {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    height: 88px;
    padding: 0;
    text-decoration: none;
    color: #1f2f56;
    font-size: 15px;
    font-weight: 500;
    white-space: nowrap;
    position: relative;
    transition: color 0.25s ease;
}

.nav-menu>li>a::after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 3px;
    background: #ef5a43;
    transform: scaleX(0);
    transform-origin: center;
    transition: transform 0.25s ease;
}

.nav-menu>li>a:hover::after {
    transform: scaleX(1);
}

.nav-menu>li>a.active::after {
    transform: scaleX(1);
}

.nav-menu>li>a.active {
    color: #ef5a43;
}

.nav-menu>li>a:hover {
    color: var(--primary-red);
}

.nav-menu>li>a i {
    font-size: 10px;
    transition: transform 0.3s;
}

.nav-menu>li.has-dropdown:hover>a i {
    transform: rotate(180deg);
}

/* ---- Dropdown Base ---- */
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    box-shadow: 0 8px 35px rgba(0, 0, 0, 0.13);
    border-top: 3px solid var(--primary-red);
    min-width: 260px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(8px);
    transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s;
    z-index: 9999;
}

.has-dropdown:hover>.dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* ---- Mega Menu ---- */
.mega-drop {
    left: 50%;
    transform: translateX(-50%) translateY(8px);
    width: 96vw;
    max-width: 1200px;
}

.has-dropdown:hover>.mega-drop {
    transform: translateX(-50%) translateY(0);
}

/* ---- Drop Inner ---- */
.drop-inner {
    display: flex;
    padding: 22px 20px;
    gap: 5px;
}

.drop-col {
    flex: 1;
    padding: 0 14px;
    border-right: 1px solid #f0f0f0;
    min-width: 0;
}

.drop-col:first-child {
    padding-left: 5px;
}

.drop-col:last-child {
    border-right: none;
    padding-right: 5px;
}

.drop-col h4 {
    font-size: 11px;
    font-weight: 700;
    color: var(--dark-blue);
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 10px;
    padding-bottom: 7px;
    border-bottom: 2px solid var(--primary-red);
}

.drop-col ul {
    list-style: none;
}

.drop-col ul li a {
    display: block;
    padding: 4px 0;
    font-size: 12.5px;
    color: #444;
    text-decoration: none;
    line-height: 1.4;
    transition: color 0.2s, padding-left 0.2s;
}

.drop-col ul li a:hover {
    color: var(--primary-red);
    padding-left: 5px;
}

.company-drop {
    min-width: 480px;
}

.heat-drop {
    min-width: 520px;
}

.business-drop {
    min-width: 340px;
}

/* ---- Header Right ---- */
.header-right {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 26px;
    min-width: 300px;
    flex-shrink: 0;
}

.header-contact {
    display: flex;
    align-items: center;
    gap: 14px;
    padding-left: 18px;
    border-left: 1px solid #e5e5e5;
}

.contact-icon i {
    font-size: 28px;
    color: #8d8da5;
}

.contact-text small {
    display: block;
    font-size: 12px;
    color: #6f7b98;
    margin-bottom: 2px;
}

.contact-text strong {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #233766;
}

.search-icon {
    font-size: 20px;
    color: #1d2d5a;
    cursor: pointer;
    transition: 0.3s;
}

.search-icon:hover {
    color: var(--primary-red);
}

/* ===================== HAMBURGER MENU BUTTON ===================== */
.mobile-menu-btn {
    display: none;
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #333;
    padding: 8px;
    z-index: 10001;
    position: relative;
}

.mobile-menu-btn:hover {
    color: var(--primary-red);
}

/* ===================== MOBILE OVERLAY ===================== */
.mobile-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 9997;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.mobile-overlay.active {
    display: block;
    opacity: 1;
}

/* ===================== HERO SLIDER ===================== */
.hero {
    position: relative;
    height: 82vh;
    min-height: 500px;
    overflow: hidden;
    background: #000;
}

.custom-prev-btn,
.custom-next-btn {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
}

.hero:hover .custom-prev-btn,
.hero:hover .custom-next-btn {
    opacity: 1;
    visibility: visible;
}

.custom-prev-btn {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 82px;
    height: 82px;
    border: none;
    background: rgba(255, 255, 255, 0.96);
    border-radius: 0 50px 50px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 50;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
}

.custom-next-btn {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 82px;
    height: 82px;
    border: none;
    background: rgba(255, 255, 255, 0.96);
    border-radius: 50px 0 0 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 50;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
}

.custom-prev-btn i,
.custom-next-btn i {
    font-size: 24px;
    color: #6b7280;
    transition: 0.3s ease;
}

.custom-prev-btn:hover,
.custom-next-btn:hover {
    background: #ffffff;
}

.custom-prev-btn:hover i,
.custom-next-btn:hover i {
    color: #1f2f56;
}

.slide-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg,
            rgba(0, 110, 130, 0.65) 0%,
            rgba(0, 70, 110, 0.55) 50%,
            rgba(10, 30, 90, 0.45) 100%);
    z-index: 1;
}

.slides-wrapper {
    width: 100%;
    height: 100%;
    position: relative;
}

.slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    opacity: 0;
    transition: opacity 1s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    z-index: 1;
}

.slide.active {
    opacity: 1;
    z-index: 2;
}

.hero-content {
    position: relative;
    z-index: 3;
    color: var(--white);
    padding: 40px 90px 40px 30px;
    max-width: 580px;
    text-align: left;
}

.hero-sub {
    font-size: 1.15rem;
    font-weight: 400;
    margin-bottom: 8px;
    opacity: 0.92;
    letter-spacing: 0.3px;
}

.hero-content h1 {
    font-size: 3.8rem;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 12px;
    letter-spacing: -1px;
}

.hero-line {
    width: 55px;
    height: 3px;
    background: var(--white);
    margin: 18px 0 22px;
}

.cta-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--white);
    text-decoration: none;
    font-size: 12.5px;
    font-weight: 600;
    letter-spacing: 1.5px;
    transition: gap 0.3s;
}

.cta-link:hover {
    gap: 18px;
}

.slide-dots {
    position: absolute;
    bottom: 18px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 8px;
    z-index: 10;
}

.dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.45);
    cursor: pointer;
    transition: background 0.3s;
    border: 2px solid rgba(255, 255, 255, 0.7);
}

.dot.active {
    background: var(--white);
}

/* ===================== COMPANY SECTION ===================== */
.company-section {
    background: #1e1a3a;
    padding: 0;
    overflow: visible;
    position: relative;
}

.company-top {
    display: flex;
    gap: 60px;
    align-items: flex-start;
    padding: 60px 120px 50px 120px;
    max-width: 1400px;
    margin: 0 auto;
}

.company-left {
    flex: 1.2;
}

.section-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #00bcd4;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 18px;
}

.company-left h2 {
    font-size: 1.55rem;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.5;
}

.company-right {
    flex: 1.3;
    padding-top: 30px;
}

.company-right p {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.60);
    line-height: 1.9;
}

.company-cards {
    display: flex;
    gap: 20px;
    padding: 0 120px;
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.company-card {
    flex: 1;
    display: flex;
    flex-direction: column;
    background: #fff;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.company-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
}

.card-image {
    width: 100%;
    height: 220px;
    overflow: hidden;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
}

.company-card:hover .card-image img {
    transform: scale(1.05);
}

.card-body {
    background: #ffffff;
    padding: 22px 25px 28px;
    text-align: center;
}

.card-label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: #0277bd;
    margin-bottom: 8px;
    letter-spacing: 0.3px;
}

.card-body h3 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1a1a2e;
    line-height: 1.3;
}

.company-section::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 160px;
    background: #e8e8e8;
    z-index: 0;
}

.company-bottom {
    position: relative;
    z-index: 2;
    background: #e8e8e8;
    text-align: center;
    padding: 35px 20px 30px;
}

.company-bottom p {
    font-size: 14px;
    color: #555;
}

.company-bottom p a {
    color: #222;
    font-weight: 700;
    text-decoration: underline;
    text-underline-offset: 3px;
    transition: color 0.2s;
}

.company-bottom p a:hover {
    color: #0277bd;
}

/* ===================== SERVICES SECTION ===================== */
.services-section {
    background: #f0f2f5;
    padding: 0 0 0 0;
    position: relative;
}

.services-heading {
    text-align: center;
    padding: 65px 20px 50px;
    max-width: 900px;
    margin: 0 auto;
}

.services-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #888;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.services-heading h2 {
    font-size: 2rem;
    font-weight: 800;
    color: #1a1a3e;
    line-height: 1.3;
    letter-spacing: -0.3px;
}

.services-cards {
    display: flex;
    gap: 20px;
    padding: 0 120px;
    max-width: 1400px;
    margin: 0 auto 0;
}

.service-card {
    flex: 1;
    background: #ffffff;
    border: 1px solid #e8eaed;
    border-radius: 3px;
    overflow: hidden;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    cursor: pointer;
}

.service-card:hover {
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.10);
    transform: translateY(-4px);
}

.service-card-inner {
    padding: 40px 35px 35px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    height: 100%;
}

.service-card-inner h3 {
    font-size: 1.05rem;
    font-weight: 700;
    color: #1a1a3e;
    margin-bottom: 18px;
    line-height: 1.3;
}

.service-card:nth-child(2) .service-card-inner h3 {
    color: #0277bd;
}

.service-card-inner p {
    font-size: 13.5px;
    color: #777;
    line-height: 1.85;
    margin-bottom: 30px;
    flex: 1;
}

.service-icon {
    position: relative;
    width: 90px;
    height: 80px;
    margin: 10px auto 30px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.service-icon::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 8px;
    background: rgba(0, 0, 0, 0.10);
    border-radius: 50%;
    filter: blur(4px);
}

.service-icon>.fa-folder-open,
.service-icon>.fa-server,
.service-icon>.fa-folder {
    font-size: 52px;
    color: #3a4a6b;
    position: relative;
    z-index: 2;
}

.service-icon-sub {
    position: absolute !important;
    top: 0px;
    right: 0px;
    font-size: 22px !important;
    color: #5a6a8a !important;
    z-index: 3;
}

.service-icon-lock {
    font-size: 52px;
    color: #1a237e;
    position: relative;
    z-index: 2;
}

.service-icon-sub2 {
    position: absolute !important;
    bottom: 8px;
    right: 2px;
    font-size: 22px !important;
    color: #5a6a8a !important;
    z-index: 3;
}

.service-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #00acc1;
    text-decoration: none;
    font-size: 13.5px;
    font-weight: 600;
    letter-spacing: 0.3px;
    margin-top: auto;
    transition: gap 0.3s ease, color 0.2s;
}

.service-link:hover {
    gap: 13px;
    color: #0277bd;
}

.service-link i {
    font-size: 12px;
    transition: transform 0.3s;
}

.service-link:hover i {
    transform: translateX(4px);
}

.services-bottom {
    text-align: center;
    padding: 45px 20px 50px;
    background: #f0f2f5;
}

.services-bottom p {
    font-size: 14px;
    color: #666;
}

.services-bottom p a {
    color: #111;
    font-weight: 700;
    text-decoration: underline;
    text-underline-offset: 3px;
    transition: color 0.2s;
}

.services-bottom p a:hover {
    color: #0277bd;
}

/* ===================== INDUSTRIES SECTION ===================== */
.industries-section {
    background: #12102a;
    padding: 65px 120px 70px;
}

.industries-top {
    display: flex;
    gap: 60px;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto 50px;
}

.industries-left {
    flex: 1.2;
}

.industries-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #00bcd4;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.industries-left h2 {
    font-size: 1.75rem;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.35;
}

.industries-right {
    flex: 1.3;
    padding-top: 28px;
}

.industries-right p {
    font-size: 13.5px;
    color: rgba(255, 255, 255, 0.55);
    line-height: 1.9;
}

.industry-cards {
    display: flex;
    gap: 15px;
    max-width: 1200px;
    margin: 0 auto;
}

.industry-card {
    flex: 1;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 4px;
    padding: 30px 22px 30px;
    text-align: center;
    transition: border-color 0.3s ease, background 0.3s ease, transform 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.industry-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, #00bcd4, #0277bd);
    transform: scaleX(0);
    transition: transform 0.3s ease;
    transform-origin: left;
}

.industry-card:hover {
    border-color: rgba(0, 188, 212, 0.35);
    background: rgba(255, 255, 255, 0.04);
    transform: translateY(-5px);
}

.industry-card:hover::after {
    transform: scaleX(1);
}

.industry-icon {
    width: 65px;
    height: 65px;
    border: 1.5px solid rgba(0, 188, 212, 0.5);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    transition: border-color 0.3s, background 0.3s;
}

.industry-icon i {
    font-size: 24px;
    color: #00bcd4;
    transition: color 0.3s;
}

.industry-card:hover .industry-icon {
    background: rgba(0, 188, 212, 0.12);
    border-color: #00bcd4;
}

.industry-card h3 {
    font-size: 0.92rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 14px;
    line-height: 1.35;
}

.industry-card p {
    font-size: 12.5px;
    color: rgba(255, 255, 255, 0.50);
    line-height: 1.8;
}

/* ===================== CASE STUDIES SECTION ===================== */
.case-studies-section {
    background: #12102a;
    padding: 60px 120px 0;
}

.case-studies-heading {
    text-align: center;
    max-width: 650px;
    margin: 0 auto 45px;
}

.case-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #00bcd4;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.case-studies-heading h2 {
    font-size: 1.75rem;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.35;
}

.case-cards {
    display: flex;
    gap: 15px;
    max-width: 1200px;
    margin: 0 auto;
}

.case-card {
    flex: 1;
    position: relative;
    height: 220px;
    border-radius: 4px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.case-card:hover {
    transform: translateY(-5px);
}

.case-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.case-card:hover img {
    transform: scale(1.06);
}

.case-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    opacity: 0.75;
}

.case-teal .case-overlay {
    background: linear-gradient(135deg, rgba(0, 150, 136, 0.85), rgba(0, 188, 212, 0.75));
}

.case-blue .case-overlay {
    background: linear-gradient(135deg, rgba(2, 119, 189, 0.85), rgba(3, 155, 229, 0.75));
}

.case-purple .case-overlay {
    background: linear-gradient(135deg, rgba(106, 27, 154, 0.85), rgba(156, 39, 176, 0.75));
}

.case-content {
    position: absolute;
    inset: 0;
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 25px 22px;
    text-align: center;
}

.case-content h3 {
    font-size: 1rem;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.4;
    margin-bottom: 18px;
}

.case-logo {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255, 255, 255, 0.90);
    font-size: 13px;
    font-weight: 600;
}

.case-logo i {
    font-size: 18px;
}

/* ===================== VIDEO SECTION ===================== */
.video-section {
    position: relative;
    width: 100%;
    height: 480px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.video-bg-video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    z-index: 0;
    opacity: 0;
    transition: opacity 1s ease;
    pointer-events: none;
}

.video-bg-video.playing {
    opacity: 1;
}

.video-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url('assets/images/video-bg.jpg');
    background-size: cover;
    background-position: center;
    z-index: 0;
    transition: opacity 1s ease;
}

.video-section.video-ready::before {
    opacity: 0;
}

.video-overlay {
    position: absolute;
    inset: 0;
    background: rgba(15, 25, 70, 0.72);
    z-index: 1;
    pointer-events: none;
}

.video-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0;
    padding: 0 20px;
}

.video-sub {
    font-size: 1.3rem;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.88);
    letter-spacing: 2px;
    margin-bottom: 8px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease 0.2s, transform 0.8s ease 0.2s;
}

.video-title {
    font-size: 5.5rem;
    font-weight: 900;
    color: #ffffff;
    letter-spacing: 3px;
    line-height: 1;
    margin-bottom: 18px;
    text-transform: uppercase;
    opacity: 0;
    transform: translateY(25px);
    transition: opacity 0.8s ease 0.4s, transform 0.8s ease 0.4s;
}

.video-desc {
    font-size: 1rem;
    font-weight: 400;
    color: rgba(255, 255, 255, 0.80);
    letter-spacing: 0.5px;
    margin-bottom: 35px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s ease 0.6s, transform 0.8s ease 0.6s;
}

.video-section.in-view .video-sub,
.video-section.in-view .video-title,
.video-section.in-view .video-desc {
    opacity: 1;
    transform: translateY(0);
}

.video-play-btn {
    width: 68px;
    height: 68px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.95);
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    opacity: 0;
    transform: scale(0.8);
    transition: opacity 0.8s ease 0.8s, transform 0.8s ease 0.8s;
}

.video-section.in-view .video-play-btn {
    opacity: 1;
    transform: scale(1);
}

.video-play-btn i {
    font-size: 22px;
    color: #e53935;
    margin-left: 4px;
}

.video-play-btn::before {
    content: '';
    position: absolute;
    inset: -8px;
    border-radius: 50%;
    border: 2px solid rgba(255, 255, 255, 0.40);
    animation: pulsering 2s ease-out infinite;
}

.video-play-btn::after {
    content: '';
    position: absolute;
    inset: -20px;
    border-radius: 50%;
    border: 2px solid rgba(255, 255, 255, 0.18);
    animation: pulsering 2s ease-out infinite 0.6s;
}

@keyframes pulsering {
    0% {
        transform: scale(0.92);
        opacity: 1;
    }
    70% {
        transform: scale(1.25);
        opacity: 0.3;
    }
    100% {
        transform: scale(1.35);
        opacity: 0;
    }
}

.video-play-btn:hover {
    background: #ffffff;
    box-shadow: 0 8px 35px rgba(0, 0, 0, 0.45);
}

.video-play-btn:hover i {
    color: #c0392b;
}

.video-modal {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.35s ease, visibility 0.35s ease;
}

.video-modal.open {
    opacity: 1;
    visibility: visible;
}

.video-modal-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.90);
    cursor: pointer;
}

.video-modal-box {
    position: relative;
    z-index: 2;
    width: 90%;
    max-width: 950px;
    background: #000;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.75);
    transform: scale(0.88);
    transition: transform 0.35s ease;
}

.video-modal.open .video-modal-box {
    transform: scale(1);
}

.video-modal-close {
    position: absolute;
    top: 12px;
    right: 12px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.15);
    border: none;
    cursor: pointer;
    color: #ffffff;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    transition: background 0.2s, transform 0.3s;
}

.video-modal-close:hover {
    background: #e53935;
    transform: rotate(90deg);
}

.video-modal-inner {
    width: 100%;
    aspect-ratio: 16 / 9;
    background: #000;
}

.video-modal-inner video {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: contain;
}

/* ===================== TESTIMONIALS SECTION ===================== */
.testimonials-section {
    background: #f7f9fc;
    padding: 70px 0 55px;
    overflow: hidden;
}

.testimonials-heading {
    text-align: center;
    margin-bottom: 50px;
    padding: 0 20px;
}

.testi-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #999;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.testimonials-heading h2 {
    font-size: 2rem;
    font-weight: 800;
    color: #1a1a3e;
    line-height: 1.3;
}

.testi-slider-wrapper {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.testi-track {
    display: flex;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
}

.testi-slide {
    display: flex;
    gap: 25px;
    min-width: 100%;
    padding: 15px 80px 25px;
    box-sizing: border-box;
}

.testi-card {
    flex: 1;
    background: #ffffff;
    border-radius: 4px;
    padding: 30px 28px 28px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    border-top: 4px solid transparent;
    display: flex;
    flex-direction: column;
    gap: 18px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.testi-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.11);
}

.border-blue {
    border-top-color: #1a237e;
}

.border-cyan {
    border-top-color: #00bcd4;
}

.border-red {
    border-top-color: #e53935;
}

.testi-logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.testi-logo-icon {
    font-size: 28px;
}

.testi-logo-icon.red {
    color: #e53935;
}

.testi-logo-icon.cyan {
    color: #00bcd4;
}

.testi-logo-icon.blue {
    color: #1a237e;
}

.testi-company-name {
    font-size: 1.2rem;
    font-weight: 800;
    color: #1a1a3e;
    letter-spacing: 0.5px;
}

.testi-quote {
    font-size: 13.5px;
    color: #555;
    line-height: 1.85;
    flex: 1;
    font-style: normal;
}

.testi-author {
    border-top: 1px solid #f0f0f0;
    padding-top: 16px;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.testi-author strong {
    font-size: 14px;
    font-weight: 700;
    color: #1a1a3e;
}

.testi-author span {
    font-size: 12.5px;
    color: #888;
}

.testi-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 20px;
}

.testi-dot {
    width: 35px;
    height: 5px;
    border-radius: 3px;
    background: #ddd;
    cursor: pointer;
    transition: background 0.3s ease, width 0.3s ease;
}

.testi-dot.active {
    background: #e53935;
    width: 45px;
}

/* ===================== FOOTER ===================== */
.main-footer {
    background: #ffffff;
    border-top: 1px solid #e8eaed;
}

.footer-top {
    padding: 55px 0 45px;
    background: #ffffff;
}

.footer-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
    display: flex;
    gap: 40px;
    align-items: flex-start;
}

.footer-brand {
    flex: 1.6;
    min-width: 0;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 22px;
    text-decoration: none;
}

.footer-logo img {
    height: 65px;
    width: auto;
}

.footer-logo-text {
    display: flex;
    flex-direction: column;
    line-height: 1.3;
}

.footer-logo-title {
    font-size: 18px;
    font-weight: 800;
    color: #c0392b;
    letter-spacing: 1px;
}

.footer-logo-subtitle {
    font-size: 10px;
    font-weight: 700;
    color: #1a237e;
    letter-spacing: 0.5px;
}

.footer-logo-tagline {
    font-size: 8.5px;
    color: #999;
    letter-spacing: 0.3px;
    margin-top: 2px;
}

.footer-address {
    font-size: 13.5px;
    color: #666;
    line-height: 1.7;
    margin-bottom: 22px;
    max-width: 300px;
}

.footer-social {
    display: flex;
    gap: 16px;
    align-items: center;
}

.footer-social a {
    color: #aab0bb;
    font-size: 20px;
    text-decoration: none;
    transition: color 0.25s ease, transform 0.25s ease;
}

.footer-social a:hover {
    color: #1a237e;
    transform: translateY(-2px);
}

.footer-col {
    flex: 1;
    min-width: 0;
}

.footer-col h4 {
    font-size: 14px;
    font-weight: 700;
    color: #1a237e;
    margin-bottom: 18px;
    letter-spacing: 0.2px;
}

.footer-col ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col ul li a {
    font-size: 13.5px;
    color: #666;
    text-decoration: none;
    transition: color 0.2s ease, padding-left 0.2s ease;
    display: inline-block;
}

.footer-col ul li a:hover {
    color: #1a237e;
    padding-left: 4px;
}

.footer-bottom {
    border-top: 1px solid #e8eaed;
    background: #ffffff;
    padding: 25px 20px;
}

.footer-bottom-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 16px;
}

.footer-bottom-social {
    display: flex;
    gap: 4px;
}

.footer-bottom-social a {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
    transition: opacity 0.2s ease, transform 0.2s ease;
    border-radius: 2px;
}

.footer-bottom-social a:hover {
    opacity: 0.85;
    transform: translateY(-2px);
}

.fsoc-fb {
    background: #1877f2;
}

.fsoc-tw {
    background: #1da1f2;
}

.fsoc-li {
    background: #0a66c2;
}

.footer-copy {
    font-size: 13.5px;
    color: #777;
    text-align: center;
}

.footer-copy strong {
    color: #333;
    font-weight: 700;
}

/* ===================== SCROLL ANIMATIONS ===================== */
.fade-up {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
}

.fade-up.animated {
    opacity: 1;
    transform: translateY(0);
}

.fade-left {
    opacity: 0;
    transform: translateX(-40px);
    transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
}

.fade-left.animated {
    opacity: 1;
    transform: translateX(0);
}

.fade-right {
    opacity: 0;
    transform: translateX(40px);
    transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
}

.fade-right.animated {
    opacity: 1;
    transform: translateX(0);
}

.scale-up {
    opacity: 0;
    transform: scale(0.85);
    transition: opacity 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1);
}

.scale-up.animated {
    opacity: 1;
    transform: scale(1);
}

.delay-1 {
    transition-delay: 0.1s;
}

.delay-2 {
    transition-delay: 0.2s;
}

.delay-3 {
    transition-delay: 0.3s;
}

.delay-4 {
    transition-delay: 0.4s;
}

.delay-5 {
    transition-delay: 0.5s;
}

.section-reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

.section-reveal.animated {
    opacity: 1;
    transform: translateY(0);
}

html {
    scroll-behavior: smooth;
}

/* ===================== RESPONSIVE MEDIA QUERIES ===================== */

/* ===== LARGE DESKTOPS & ULTRA-WIDE (1920px+) ===== */
@media (min-width: 1920px) {
    .header-inner,
    .footer-inner,
    .company-top,
    .company-cards,
    .services-cards,
    .industry-cards,
    .case-cards {
        max-width: 1600px;
    }
    
    .hero-content h1 {
        font-size: 4.2rem;
    }
    
    .video-title {
        font-size: 6rem;
    }
}

/* ===== DESKTOPS (1440px - 1919px) ===== */
@media (min-width: 1440px) and (max-width: 1919px) {
    .header-inner {
        padding: 0 60px;
    }
    
    .hero-content h1 {
        font-size: 4rem;
    }
}

/* ===== LAPTOPS (1024px - 1439px) ===== */
@media (max-width: 1439px) {
    .header-inner {
        padding: 0 30px;
        gap: 30px;
    }
    
    .nav-menu {
        gap: 35px;
    }
    
    .nav-menu>li>a {
        font-size: 14px;
    }
    
    .company-top,
    .company-cards,
    .services-cards {
        padding-left: 60px;
        padding-right: 60px;
    }
    
    .industries-section,
    .case-studies-section {
        padding-left: 60px;
        padding-right: 60px;
    }
}

@media (max-width: 1200px) {
    .nav-menu {
        gap: 25px;
    }
    
    .nav-menu>li>a {
        font-size: 13px;
    }
    
    .hero-content h1 {
        font-size: 3.2rem;
    }
    
    .company-left h2 {
        font-size: 1.4rem;
    }
}

/* ===== TABLETS (768px - 1023px) ===== */
@media (max-width: 1023px) {
    /* Show mobile menu button */
    .mobile-menu-btn {
        display: block;
    }
    
    /* Hide desktop navigation */
    .main-nav {
        position: fixed;
        top: 0;
        right: -100%;
        width: 320px;
        max-width: 85%;
        height: 100vh;
        background: #ffffff;
        box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
        z-index: 10000;
        overflow-y: auto;
        padding: 80px 0 30px;
        transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: block;
        justify-content: flex-start;
    }
    
    .main-nav.open {
        right: 0;
    }
    
    .nav-menu {
        flex-direction: column;
        width: 100%;
        gap: 0;
        align-items: stretch;
    }
    
    .nav-menu>li {
        width: 100%;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .nav-menu>li>a {
        height: auto;
        padding: 16px 25px;
        justify-content: space-between;
        width: 100%;
    }
    
    .nav-menu>li>a::after {
        display: none;
    }
    
    .nav-menu>li>a.active {
        background: #f8f9fa;
        color: var(--primary-red);
        border-left: 4px solid var(--primary-red);
    }
    
    /* Mobile dropdowns */
    .dropdown-menu,
    .mega-drop {
        position: static !important;
        transform: none !important;
        opacity: 0;
        visibility: hidden;
        max-height: 0;
        overflow: hidden;
        box-shadow: none;
        border-top: none;
        border-left: none;
        margin: 0;
        width: 100%;
        min-width: 0;
        background: #f8f9fa;
        transition: max-height 0.4s ease, opacity 0.3s ease, visibility 0.3s ease;
    }
    
    .has-dropdown.mobile-open>.dropdown-menu,
    .has-dropdown.mobile-open>.mega-drop {
        opacity: 1;
        visibility: visible;
        max-height: 2000px;
    }
    
    .drop-inner {
        flex-direction: column;
        padding: 15px 20px;
        gap: 10px;
    }
    
    .drop-col {
        border-right: none;
        border-bottom: 1px solid #e0e0e0;
        padding: 15px 0;
    }
    
    .drop-col:last-child {
        border-bottom: none;
    }
    
    .drop-col h4 {
        font-size: 12px;
        margin-bottom: 12px;
    }
    
    .drop-col ul li a {
        padding: 8px 0;
        font-size: 13px;
    }
    
    /* Header adjustments */
    .header-inner {
        padding: 0 20px;
        min-height: 70px;
        gap: 15px;
    }
    
    .logo {
        min-width: auto;
    }
    
    .logo img {
        height: 50px;
    }
    
    .header-contact {
        display: none;
    }
    
    .header-right {
        min-width: auto;
        gap: 15px;
    }
    
    .main-header::after {
        width: calc(100% - 40px);
    }
    
    /* Hero section */
    .hero {
        height: 60vh;
        min-height: 400px;
    }
    
    .hero-content {
        padding: 30px 60px 30px 25px;
        max-width: 500px;
    }
    
    .hero-content h1 {
        font-size: 2.5rem;
    }
    
    .hero-sub {
        font-size: 1rem;
    }
    
    .custom-prev-btn,
    .custom-next-btn {
        width: 50px;
        height: 50px;
    }
    
    .custom-prev-btn i,
    .custom-next-btn i {
        font-size: 18px;
    }
    
    /* Sections */
    .company-top {
        flex-direction: column;
        gap: 30px;
        padding: 50px 40px 40px;
    }
    
    .company-right {
        padding-top: 0;
    }
    
    .company-cards {
        padding: 0 40px;
        gap: 20px;
    }
    
    .services-heading {
        padding: 50px 20px 40px;
    }
    
    .services-cards {
        padding: 0 40px;
        gap: 20px;
    }
    
    .industries-section {
        padding: 50px 40px 60px;
    }
    
    .industries-top {
        flex-direction: column;
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .industries-right {
        padding-top: 0;
    }
    
    .industry-cards {
        flex-wrap: wrap;
        gap: 15px;
    }
    
    .industry-card {
        flex: 1 1 calc(50% - 10px);
        min-width: 200px;
    }
    
    .case-studies-section {
        padding: 50px 40px 0;
    }
    
    .video-section {
        height: 400px;
    }
    
    .video-title {
        font-size: 3.5rem;
    }
    
    .video-sub {
        font-size: 1.1rem;
    }
    
    .testi-slide {
        padding: 15px 40px 25px;
        gap: 20px;
    }
    
    .footer-inner {
        flex-wrap: wrap;
        padding: 0 30px;
    }
    
    .footer-brand {
        flex: 1 1 100%;
        margin-bottom: 20px;
    }
    
    .footer-col {
        flex: 1 1 calc(33.333% - 30px);
        min-width: 150px;
    }
}

/* ===== MOBILE PHONES (320px - 767px) ===== */
@media (max-width: 767px) {
    /* Top bar */
    .top-bar {
        padding: 8px 0;
        font-size: 12px;
    }
    
    .top-bar-inner {
        padding: 0 15px;
    }
    
    /* Header */
    .header-inner {
        padding: 0 15px;
        min-height: 65px;
    }
    
    .logo img {
        height: 45px;
    }
    
    .search-icon {
        font-size: 18px;
    }
    
    .mobile-menu-btn {
        font-size: 22px;
    }
    
    .main-nav {
        width: 280px;
        max-width: 80%;
        padding: 70px 0 20px;
    }
    
    .nav-menu>li>a {
        padding: 14px 20px;
        font-size: 14px;
    }
    
    /* Hero */
    .hero {
        height: 50vh;
        min-height: 350px;
    }
    
    .hero-content {
        padding: 20px 50px 20px 20px;
        max-width: 100%;
    }
    
    .hero-content h1 {
        font-size: 2rem;
        line-height: 1.15;
    }
    
    .hero-sub {
        font-size: 0.9rem;
    }
    
    .cta-link {
        font-size: 11px;
    }
    
    .custom-prev-btn,
    .custom-next-btn {
        width: 42px;
        height: 42px;
        opacity: 1;
        visibility: visible;
    }
    
    .custom-prev-btn i,
    .custom-next-btn i {
        font-size: 16px;
    }
    
    .slide-dots {
        bottom: 12px;
        gap: 6px;
    }
    
    .dot {
        width: 7px;
        height: 7px;
    }
    
    /* Company section */
    .company-top {
        padding: 40px 20px 30px;
        gap: 25px;
    }
    
    .section-label {
        font-size: 10px;
        letter-spacing: 2px;
    }
    
    .company-left h2 {
        font-size: 1.25rem;
    }
    
    .company-right p {
        font-size: 13px;
    }
    
    .company-cards {
        flex-direction: column;
        padding: 0 20px;
        gap: 15px;
    }
    
    .card-image {
        height: 200px;
    }
    
    .company-section::after {
        height: 100px;
    }
    
    .company-bottom {
        padding: 25px 15px;
    }
    
    .company-bottom p {
        font-size: 13px;
    }
    
    /* Services section */
    .services-heading {
        padding: 40px 15px 30px;
    }
    
    .services-label {
        font-size: 10px;
        letter-spacing: 2px;
    }
    
    .services-heading h2 {
        font-size: 1.4rem;
    }
    
    .services-cards {
        flex-direction: column;
        padding: 0 20px;
        gap: 15px;
    }
    
    .service-card-inner {
        padding: 30px 25px 28px;
    }
    
    .service-card-inner h3 {
        font-size: 1rem;
    }
    
    .service-card-inner p {
        font-size: 13px;
    }
    
    .services-bottom {
        padding: 30px 15px 40px;
    }
    
    .services-bottom p {
        font-size: 13px;
    }
    
    /* Industries section */
    .industries-section {
        padding: 40px 20px 50px;
    }
    
    .industries-label {
        font-size: 10px;
        letter-spacing: 2px;
    }
    
    .industries-left h2 {
        font-size: 1.3rem;
    }
    
    .industries-right p {
        font-size: 13px;
    }
    
    .industry-cards {
        flex-direction: column;
        gap: 12px;
    }
    
    .industry-card {
        flex: 1 1 100%;
        padding: 25px 20px;
    }
    
    .industry-icon {
        width: 60px;
        height: 60px;
    }
    
    .industry-icon i {
        font-size: 22px;
    }
    
    .industry-card h3 {
        font-size: 0.9rem;
    }
    
    .industry-card p {
        font-size: 12px;
    }
    
    /* Case studies */
    .case-studies-section {
        padding: 40px 20px 0;
    }
    
    .case-label {
        font-size: 10px;
        letter-spacing: 2px;
    }
    
    .case-studies-heading h2 {
        font-size: 1.3rem;
    }
    
    .case-cards {
        flex-direction: column;
        gap: 12px;
    }
    
    .case-card {
        height: 200px;
    }
    
    .case-content h3 {
        font-size: 0.95rem;
    }
    
    .case-logo {
        font-size: 12px;
    }
    
    .case-logo i {
        font-size: 16px;
    }
    
    /* Video section */
    .video-section {
        height: 350px;
    }
    
    .video-content {
        padding: 0 15px;
    }
    
    .video-sub {
        font-size: 0.9rem;
        letter-spacing: 1px;
    }
    
    .video-title {
        font-size: 2.5rem;
        letter-spacing: 2px;
        margin-bottom: 15px;
    }
    
    .video-desc {
        font-size: 0.85rem;
        margin-bottom: 25px;
    }
    
    .video-play-btn {
        width: 58px;
        height: 58px;
    }
    
    .video-play-btn i {
        font-size: 18px;
    }
    
    /* Testimonials */
    .testimonials-section {
        padding: 50px 0 40px;
    }
    
    .testi-label {
        font-size: 10px;
        letter-spacing: 2px;
    }
    
    .testimonials-heading h2 {
        font-size: 1.4rem;
    }
    
    .testi-slide {
        flex-direction: column;
        padding: 10px 20px 20px;
        gap: 15px;
    }
    
    .testi-card {
        padding: 25px 20px 22px;
    }
    
    .testi-logo-icon {
        font-size: 24px;
    }
    
    .testi-company-name {
        font-size: 1.05rem;
    }
    
    .testi-quote {
        font-size: 13px;
    }
    
    .testi-author strong {
        font-size: 13px;
    }
    
    .testi-author span {
        font-size: 12px;
    }
    
    .testi-dot {
        width: 25px;
        height: 4px;
    }
    
    .testi-dot.active {
        width: 35px;
    }
    
    /* Footer */
    .footer-top {
        padding: 40px 0 35px;
    }
    
    .footer-inner {
        padding: 0 20px;
        flex-direction: column;
        gap: 30px;
    }
    
    .footer-brand {
        flex: 1 1 100%;
        margin-bottom: 0;
    }
    
    .footer-logo img {
        height: 55px;
    }
    
    .footer-logo-title {
        font-size: 16px;
    }
    
    .footer-col {
        flex: 1 1 100%;
    }
    
    .footer-col h4 {
        font-size: 13px;
        margin-bottom: 14px;
    }
    
    .footer-col ul li a {
        font-size: 13px;
    }
    
    .footer-bottom {
        padding: 20px 15px;
    }
    
    .footer-copy {
        font-size: 12px;
    }
}

/* ===== SMALL MOBILE (480px and below) ===== */
@media (max-width: 480px) {
    .hero {
        height: 45vh;
        min-height: 300px;
    }
    
    .hero-content h1 {
        font-size: 1.6rem;
    }
    
    .hero-sub {
        font-size: 0.8rem;
    }
    
    .hero-content {
        padding: 15px 40px 15px 15px;
    }
    
    .company-left h2,
    .industries-left h2,
    .case-studies-heading h2,
    .services-heading h2,
    .testimonials-heading h2 {
        font-size: 1.15rem;
    }
    
    .video-title {
        font-size: 2rem;
    }
    
    .video-section {
        height: 300px;
    }
    
    .service-card-inner h3 {
        font-size: 0.95rem;
    }
}

/* ===== SMART WATCHES & VERY SMALL DEVICES (< 320px) ===== */
@media (max-width: 320px) {
    .logo img {
        height: 40px;
    }
    
    .hero-content h1 {
        font-size: 1.4rem;
    }
    
    .company-left h2,
    .services-heading h2 {
        font-size: 1rem;
    }
    
    .video-title {
        font-size: 1.6rem;
    }
    
    .company-cards,
    .services-cards,
    .testi-slide {
        padding: 10px 15px 15px;
    }
    
    .main-nav {
        width: 260px;
    }
}

/* ===== TOUCH DEVICE IMPROVEMENTS ===== */
@media (hover: none) and (pointer: coarse) {
    /* Make all interactive elements touch-friendly */
    .nav-menu>li>a,
    .drop-col ul li a,
    .mobile-menu-btn,
    .search-icon,
    .dot,
    .testi-dot,
    .company-card,
    .service-card,
    .industry-card,
    .case-card {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0.1);
        touch-action: manipulation;
    }
    
    /* Increase touch target sizes */
    .dot,
    .testi-dot {
        padding: 5px;
    }
    
    /* Remove hover effects on touch devices */
    .custom-prev-btn,
    .custom-next-btn {
        opacity: 1;
        visibility: visible;
    }
}

/* ===== LANDSCAPE ORIENTATION ADJUSTMENTS ===== */
@media (max-width: 767px) and (orientation: landscape) {
    .hero {
        height: 70vh;
    }
    
    .video-section {
        height: 80vh;
    }
    
    .hero-content h1 {
        font-size: 1.8rem;
    }
}

/* ===== PRINT STYLES ===== */
@media print {
    .main-header,
    .mobile-menu-btn,
    .custom-prev-btn,
    .custom-next-btn,
    .slide-dots,
    .footer-bottom-social,
    .video-play-btn {
        display: none !important;
    }
    
    .hero,
    .video-section {
        height: auto;
        min-height: 0;
    }
}