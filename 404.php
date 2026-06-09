<?php
$base = dirname(__FILE__);
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "404 - Page Not Found | Alpha Sonix NDT Solutions";
$meta_description = "The page you are looking for could not be found. Explore our NDT services, inspection solutions, and integrity management offerings.";
$meta_keywords = "404 error, page not found, NDT services, inspection services";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="author" content="Alpha Sonix NDT Solutions">
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/www/assets/css/style.css">
    
    <style>
        /* 404 Page Specific Styles */
        .error-404-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 20px;
            position: relative;
            overflow: hidden;
        }

        .error-404-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: linear-gradient(135deg, rgba(26, 35, 126, 0.05), rgba(192, 57, 43, 0.05));
            border-radius: 50%;
            z-index: 0;
        }

        .error-404-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, rgba(192, 57, 43, 0.05), rgba(26, 35, 126, 0.05));
            border-radius: 50%;
            z-index: 0;
        }

        .error-404-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .error-404-number {
            font-size: 180px;
            font-weight: 800;
            background: linear-gradient(135deg, #1a237e, #c0392b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 20px;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .error-404-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a237e;
            margin-bottom: 20px;
        }

        .error-404-description {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .error-404-search {
            max-width: 500px;
            margin: 0 auto 50px;
            position: relative;
        }

        .error-404-search input {
            width: 100%;
            padding: 18px 60px 18px 25px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            font-size: 16px;
            transition: all 0.3s;
            outline: none;
        }

        .error-404-search input:focus {
            border-color: #1a237e;
            box-shadow: 0 0 0 4px rgba(26, 35, 126, 0.1);
        }

        .error-404-search button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #1a237e, #c0392b);
            color: #fff;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-404-search button:hover {
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 5px 20px rgba(26, 35, 126, 0.3);
        }

        .error-404-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .error-404-link-card {
            background: #fff;
            padding: 30px 25px;
            border-radius: 12px;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            border: 2px solid transparent;
        }

        .error-404-link-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            border-color: #1a237e;
        }

        .error-404-link-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(135deg, #1a237e, #c0392b);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .error-404-link-icon i {
            font-size: 28px;
            color: #fff;
        }

        .error-404-link-card h3 {
            font-size: 1.1rem;
            color: #1a237e;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .error-404-link-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        .error-404-home-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #1a237e, #c0392b);
            color: #fff;
            padding: 16px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 5px 20px rgba(26, 35, 126, 0.3);
        }

        .error-404-home-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(26, 35, 126, 0.4);
        }

        .error-404-illustration {
            margin-bottom: 30px;
        }

        .error-404-illustration i {
            font-size: 120px;
            background: linear-gradient(135deg, #1a237e, #c0392b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0.5;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .error-404-number {
                font-size: 120px;
            }

            .error-404-title {
                font-size: 1.8rem;
            }

            .error-404-description {
                font-size: 1rem;
            }

            .error-404-links {
                grid-template-columns: 1fr;
            }

            .error-404-illustration i {
                font-size: 80px;
            }
        }
    </style>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== 404 ERROR SECTION ===================== -->
    <section class="error-404-section">
        <div class="error-404-container">
            
            <div class="error-404-illustration">
                <i class="fas fa-exclamation-triangle"></i>
            </div>

            <div class="error-404-number">404</div>
            
            <h1 class="error-404-title">Oops! Page Not Found</h1>
            
            <p class="error-404-description">
                We're sorry, but the page you're looking for doesn't exist or has been moved. 
                Don't worry—you can use the search below or explore our popular services to find what you need.
            </p>

            <!-- Search Box -->
            <div class="error-404-search">
                <form action="/www/search.php" method="GET">
                    <input 
                        type="text" 
                        name="q" 
                        placeholder="Search for NDT services, inspections, or solutions..." 
                        required
                    >
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <!-- Popular Links -->
            <div class="error-404-links">
                <a href="/www/index.php" class="error-404-link-card">
                    <div class="error-404-link-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Homepage</h3>
                    <p>Return to our homepage and explore all our services</p>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="error-404-link-card">
                    <div class="error-404-link-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT Services</h3>
                    <p>Advanced ultrasonic testing for critical inspections</p>
                </a>

                <a href="/www/pages/third-party-inspection/asset-integrity-rbi.php" class="error-404-link-card">
                    <div class="error-404-link-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Asset Integrity & RBI</h3>
                    <p>Risk-based inspection and integrity management</p>
                </a>

                <a href="/www/pages/fire-safety-equipment/pressure-vessel-boiler.php" class="error-404-link-card">
                    <div class="error-404-link-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pressure Vessel Inspection</h3>
                    <p>Comprehensive vessel and boiler inspection services</p>
                </a>
            </div>

            <!-- Contact Section -->
            <div style="margin-top: 40px; padding: 30px; background: #fff; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                <h3 style="color: #1a237e; margin-bottom: 15px; font-size: 1.3rem;">Need Immediate Assistance?</h3>
                <p style="color: #666; margin-bottom: 20px;">Our team is ready to help you find the right solution</p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:+914445015884" style="display: inline-flex; align-items: center; gap: 8px; background: #27ae60; color: #fff; padding: 12px 25px; border-radius: 50px; text-decoration: none; font-weight: 600;">
                        <i class="fas fa-phone"></i> Call: +91 44 4501 5884
                    </a>
                    <a href="mailto:info@alphasonix.com" style="display: inline-flex; align-items: center; gap: 8px; background: #3498db; color: #fff; padding: 12px 25px; border-radius: 50px; text-decoration: none; font-weight: 600;">
                        <i class="fas fa-envelope"></i> Email Us
                    </a>
                </div>
            </div>

            <!-- Back to Home Button -->
            <div style="margin-top: 40px;">
                <a href="/www/index.php" class="error-404-home-btn">
                    <i class="fas fa-arrow-left"></i>
                    Back to Homepage
                </a>
            </div>

        </div>
    </section>

    <?php include $base . '/includes/footer.php'; ?>
    
    <script src="/www/assets/js/script.js"></script>

</body>
</html>