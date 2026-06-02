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