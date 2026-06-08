<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Hardness Testing Services | Rockwell, Brinell, Vickers & Shore Hardness Testing | Alpha Sonix NDT Solutions";
$meta_description = "Professional Hardness Testing services using Rockwell, Brinell, Vickers, and Shore methods. Material verification, quality control, heat treatment validation, and field testing with certified equipment and traceable standards.";
$meta_keywords = "hardness testing, Rockwell hardness, Brinell hardness, Vickers hardness, Shore hardness, material hardness, heat treatment verification, portable hardness testing, ASTM E18, ASTM E10";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/hardness-testing.php";
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
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:image" content="/www/assets/images/services/hardness-og.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $canonical_url; ?>">
    <meta property="twitter:title" content="<?php echo $page_title; ?>">
    <meta property="twitter:description" content="<?php echo $meta_description; ?>">

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/www/assets/css/style.css">
    <link rel="stylesheet" href="/www/assets/css/service-page.css">

    <!-- Schema.org Markup -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Hardness Testing & Material Property Verification",
            "provider": {
                "@type": "Organization",
                "name": "Alpha Sonix NDT Solutions Pvt. Ltd.",
                "url": "https://alphasonix.com",
                "logo": "https://alphasonix.com/www/assets/images/logo/alpha.png",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+91-44-4501-5884",
                    "contactType": "Customer Service"
                }
            },
            "areaServed": "IN",
            "description": "Professional Hardness Testing services for material verification, quality control, and heat treatment validation using calibrated equipment and traceable standards."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/hardness-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Hardness Testing</span>
                </div>
                <h1 class="page-title">Hardness Testing</h1>
                <p class="page-subtitle">Comprehensive material hardness evaluation for quality control, heat treatment verification, and material property assessment—ensuring specification compliance and performance reliability</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-hammer"></i> Multiple Test Methods</span>
                    <span class="badge"><i class="fas fa-certificate"></i> Calibrated Equipment</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Traceable Standards</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== QUICK OVERVIEW ===================== -->
    <section class="quick-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3>Material Property Verification</h3>
                    <p>Accurate determination of material hardness to verify heat treatment, quality control, and specification compliance across diverse materials and applications.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Heat Treatment Validation</h3>
                    <p>Confirm proper heat treatment results, tempering effectiveness, and hardness uniformity for critical components and manufacturing processes.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <h3>Portable & Laboratory Testing</h3>
                    <p>Flexible testing options from portable field instruments to precision laboratory equipment—matching testing requirements to application needs.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Multiple Test Standards</h3>
                    <p>Comprehensive testing capabilities including Rockwell, Brinell, Vickers, Knoop, and Shore methods per ASTM, ISO, and industry standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS HARDNESS TESTING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MATERIAL PROPERTY TESTING</span>
                    <h2>What is Hardness Testing?</h2>
                    <p class="lead">Hardness Testing is a mechanical test method used to determine a material's resistance to deformation, indentation, or penetration—providing critical information about material properties, heat treatment effectiveness, and suitability for specific applications.</p>

                    <p>Hardness testing involves applying a controlled force through a standardized indenter (ball, diamond, or pyramid) and measuring the resulting indentation size or depth. Different test methods (Rockwell, Brinell, Vickers, Shore) use varying loads, indenter geometries, and measurement techniques, making them suitable for different materials, thicknesses, and hardness ranges.</p>

                    <p>Hardness testing is essential for quality control, material verification, heat treatment validation, failure analysis, and research and development. It provides rapid, cost-effective assessment of material properties that correlate with strength, wear resistance, machinability, and service performance characteristics.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material Specification Verification</strong>
                                <p>Confirm materials meet hardness requirements per ASTM, ASME, API, aerospace, and project specifications for acceptance and quality control.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Heat Treatment Quality Control</strong>
                                <p>Validate heat treatment processes including hardening, tempering, annealing, and stress relieving to ensure proper microstructure and properties.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Manufacturing Quality Assurance</strong>
                                <p>Monitor production processes, incoming materials, and finished components to maintain consistent quality and prevent defective parts.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Failure Analysis Support</strong>
                                <p>Investigate component failures, material degradation, and service-related changes in material properties for root cause analysis and prevention.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Why Hardness Testing is Critical:</strong>
                            <p>Material hardness directly relates to strength, wear resistance, fatigue life, and service performance. Proper hardness ensures components perform as designed, resist wear and deformation, and provide expected service life in demanding applications.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Hardness Testing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/hardness-equipment.jpg" alt="Hardness Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional hardness testing equipment with calibrated indenters and measurement systems</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">10,000+</span>
                            <span class="stat-label">Tests Performed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">±1%</span>
                            <span class="stat-label">Typical Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5+ Methods</span>
                            <span class="stat-label">Test Standards</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> Hardness Test Process</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Prepare test surface to required finish and cleanliness</li>
                            <li><strong>2.</strong> Select appropriate test method and load conditions</li>
                            <li><strong>3.</strong> Apply controlled force through standardized indenter</li>
                            <li><strong>4.</strong> Measure indentation size or depth after load removal</li>
                            <li><strong>5.</strong> Calculate hardness value using standard formulas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ADVANTAGES ===================== -->
    <section class="advantages-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY CHOOSE HARDNESS TESTING</span>
                <h2>Key Advantages of Material Hardness Evaluation</h2>
                <p>Fast, accurate, and reliable material property verification supporting quality control and specification compliance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Rapid Testing</h3>
                    <p>Quick test execution with immediate results—enabling real-time quality control, production monitoring, and fast material acceptance decisions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Minimally Destructive</h3>
                    <p>Small indentation marks allow testing of finished components and critical parts without compromising structural integrity or performance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Property Correlation</h3>
                    <p>Hardness values correlate with tensile strength, wear resistance, fatigue life, and other mechanical properties—providing comprehensive material assessment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Equipment Versatility</h3>
                    <p>Range from portable field instruments to precision laboratory equipment—matching testing capability to application requirements and environments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective Assessment</h3>
                    <p>Economical testing method providing valuable material property information without expensive specimen preparation or complex testing procedures.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Standardized Methods</h3>
                    <p>Well-established ASTM, ISO, and industry standards ensuring consistent, repeatable, and internationally recognized test results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">HARDNESS TESTING APPLICATIONS</span>
                <h2>Industries & Materials We Test</h2>
                <p>Comprehensive hardness testing across manufacturing, quality control, maintenance, and research applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="manufacturing">Manufacturing & QC</button>
                    <button class="tab-btn" data-tab="heat-treatment">Heat Treatment Verification</button>
                    <button class="tab-btn" data-tab="maintenance">Maintenance & Field Testing</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Applications</button>
                </div>

                <div class="tabs-content">
                    <!-- Manufacturing & QC Tab -->
                    <div class="tab-panel active" id="manufacturing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/hardness-manufacturing.jpg" alt="Manufacturing Hardness Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Manufacturing & Quality Control Testing</h3>
                                <p>Production hardness testing for incoming materials, work-in-process verification, and final inspection to ensure consistent quality and specification compliance across manufacturing operations.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Incoming raw material verification and acceptance</li>
                                    <li><i class="fas fa-check"></i> Production process monitoring and control</li>
                                    <li><i class="fas fa-check"></i> Final component inspection and certification</li>
                                    <li><i class="fas fa-check"></i> Heat-treated component verification</li>
                                    <li><i class="fas fa-check"></i> Hardness uniformity and gradient assessment</li>
                                    <li><i class="fas fa-check"></i> Case depth and surface hardening verification</li>
                                    <li><i class="fas fa-check"></i> Statistical process control (SPC) support</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Automotive Component Manufacturing:</strong> Rockwell hardness testing of heat-treated gear teeth and shafts to verify proper hardening and tempering—ensuring adequate wear resistance and fatigue life for transmission and drivetrain applications.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E18</span>
                                    <span class="standard-tag">ASTM E10</span>
                                    <span class="standard-tag">ISO 6508</span>
                                    <span class="standard-tag">ISO 6506</span>
                                    <span class="standard-tag">SAE J417</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Heat Treatment Verification Tab -->
                    <div class="tab-panel" id="heat-treatment">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/hardness-heat-treatment.jpg" alt="Heat Treatment Hardness Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Heat Treatment Process Verification</h3>
                                <p>Critical hardness testing to validate heat treatment effectiveness, process control, and achievement of specified material properties for safety-critical and high-performance applications.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Quenching and tempering process validation</li>
                                    <li><i class="fas fa-check"></i> Annealing and normalizing verification</li>
                                    <li><i class="fas fa-check"></i> Case hardening and carburizing assessment</li>
                                    <li><i class="fas fa-check"></i> Stress relieving temperature verification</li>
                                    <li><i class="fas fa-check"></i> Age hardening and precipitation hardening control</li>
                                    <li><i class="fas fa-check"></i> Hardness traverse and gradient mapping</li>
                                    <li><i class="fas fa-check"></i> Heat treatment uniformity evaluation</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Aerospace Component Heat Treatment:</strong> Vickers hardness traverse testing across critical turbine blade sections to verify proper solution treatment and aging—ensuring consistent mechanical properties and service temperature performance.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A255</span>
                                    <span class="standard-tag">AMS 2759</span>
                                    <span class="standard-tag">SAE J406</span>
                                    <span class="standard-tag">ISO 4967</span>
                                    <span class="standard-tag">NADCAP AC7102</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Maintenance & Field Testing Tab -->
                    <div class="tab-panel" id="maintenance">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/hardness-field.jpg" alt="Field Hardness Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Maintenance & In-Service Field Testing</h3>
                                <p>Portable hardness testing for equipment condition assessment, wear evaluation, material degradation monitoring, and maintenance decision support in field environments.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Equipment condition monitoring and assessment</li>
                                    <li><i class="fas fa-check"></i> Wear surface hardness evaluation</li>
                                    <li><i class="fas fa-check"></i> Material degradation and softening detection</li>
                                    <li><i class="fas fa-check"></i> Repair weld hardness verification</li>
                                    <li><i class="fas fa-check"></i> Overlay and cladding hardness assessment</li>
                                    <li><i class="fas fa-check"></i> Remaining life and fitness-for-service data</li>
                                    <li><i class="fas fa-check"></i> Emergency failure analysis support</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Power Plant Maintenance:</strong> Portable Rockwell testing of turbine blade leading edges during outage inspection—detecting thermal damage, erosion effects, and material property changes to guide repair and replacement decisions.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A956</span>
                                    <span class="standard-tag">ASME PCC-2</span>
                                    <span class="standard-tag">API 579</span>
                                    <span class="standard-tag">NACE Standards</span>
                                    <span class="standard-tag">OEM Procedures</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/hardness-specialty.jpg" alt="Specialty Hardness Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty Materials & Advanced Applications</h3>
                                <p>Specialized hardness testing for advanced materials, research applications, thin films, small components, and unique testing requirements using micro and nano-indentation techniques.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Micro and nano-indentation testing</li>
                                    <li><i class="fas fa-check"></i> Thin film and coating hardness assessment</li>
                                    <li><i class="fas fa-check"></i> Composite and ceramic material testing</li>
                                    <li><i class="fas fa-check"></i> Polymer and rubber Shore hardness evaluation</li>
                                    <li><i class="fas fa-check"></i> Small component and precision part testing</li>
                                    <li><i class="fas fa-check"></i> Research and development support</li>
                                    <li><i class="fas fa-check"></i> Failure analysis and forensic investigation</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Medical Device Testing:</strong> Vickers micro-hardness testing of surgical instrument cutting edges and implant surfaces—verifying proper heat treatment and surface modification for biocompatibility and performance requirements.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E384</span>
                                    <span class="standard-tag">ASTM D2240</span>
                                    <span class="standard-tag">ISO 14577</span>
                                    <span class="standard-tag">ASTM D785</span>
                                    <span class="standard-tag">FDA Guidelines</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TEST METHODS & SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">HARDNESS TEST METHODS</span>
                <h2>Our Comprehensive Testing Capabilities</h2>
                <p>Complete range of hardness testing methods and equipment for diverse materials and applications</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Rockwell Hardness Testing</h3>
                    <p>Most widely used hardness test method for metals and engineering materials using diamond or ball indenters with pre-load and main load application.</p>
                    <ul>
                        <li>HRC, HRB, HRA scales for different materials</li>
                        <li>Rapid testing with immediate digital readout</li>
                        <li>Excellent for production quality control</li>
                        <li>Portable and benchtop equipment available</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Brinell Hardness Testing</h3>
                    <p>Standardized method using hardened steel or carbide ball indenter—ideal for coarse-grained materials, castings, and forgings with excellent accuracy.</p>
                    <ul>
                        <li>10mm, 5mm, and 2.5mm ball indenters</li>
                        <li>Multiple load options (3000, 1500, 500 kg)</li>
                        <li>Large indentation for representative results</li>
                        <li>Excellent for inhomogeneous materials</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Vickers Hardness Testing</h3>
                    <p>Precise diamond pyramid indenter method providing accurate hardness measurement across all hardness ranges with excellent resolution for small areas.</p>
                    <ul>
                        <li>Diamond pyramid 136° indenter geometry</li>
                        <li>Wide load range from 1g to 120kg</li>
                        <li>Single scale for all materials and hardness ranges</li>
                        <li>Excellent for thin materials and small components</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Knoop Hardness Testing</h3>
                    <p>Elongated diamond pyramid indenter for thin materials, brittle materials, and situations requiring minimal indentation depth.</p>
                    <ul>
                        <li>Asymmetrical diamond pyramid indenter</li>
                        <li>Minimal penetration depth capability</li>
                        <li>Ideal for coatings and thin sections</li>
                        <li>Reduced cracking risk for brittle materials</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Shore Hardness Testing</h3>
                    <p>Specialized testing for polymers, elastomers, and rubber materials using durometer scales A and D for material selection and quality control.</p>
                    <ul>
                        <li>Shore A for softer elastomers and rubbers</li>
                        <li>Shore D for harder plastics and rigid materials</li>
                        <li>Portable durometer instruments</li>
                        <li>Rapid field and laboratory testing capability</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Portable & Field Testing</h3>
                    <p>Mobile hardness testing services using portable instruments for on-site testing, large components, and in-service equipment assessment.</p>
                    <ul>
                        <li>Portable Rockwell and Brinell testers</li>
                        <li>Ultrasonic Contact Impedance (UCI) method</li>
                        <li>Rebound hardness (Leeb method)</li>
                        <li>On-site calibration and verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & STANDARDS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">PRECISION TESTING EQUIPMENT</span>
                    <h2>Calibrated Hardness Testing Systems</h2>
                    <p>We use precision hardness testing equipment with traceable calibration standards, certified reference blocks, and controlled testing environments to ensure accurate, reliable, and repeatable results.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-weight-hanging"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Precision Laboratory Hardness Testers</h4>
                                <p>Benchtop Rockwell, Brinell, Vickers, and Knoop testers with digital force application, automatic measurement, and environmental control for maximum accuracy.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-suitcase"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Portable Hardness Testing Equipment</h4>
                                <p>Field-ready instruments including portable Rockwell testers, ultrasonic contact impedance (UCI) units, and rebound hardness devices for on-site testing.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-cube"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Certified Reference Standards</h4>
                                <p>NIST-traceable hardness reference blocks and standardized test blocks for instrument calibration, verification, and measurement uncertainty assessment.</p>
                            </div>
                        </div>
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Measurement & Imaging Systems</h4>
                                <p>Precision optical measuring systems, digital microscopes, and image analysis software for accurate indentation measurement and documentation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Quality & Traceability</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/100/100/50" alt="NIST Traceable">
                            <img src="https://picsum.photos/id/101/100/50" alt="ASTM Compliant">
                            <img src="https://picsum.photos/id/102/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/103/100/50" alt="Calibration Certificate">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/hardness-testing-lab.jpg" alt="Hardness Testing Laboratory">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Hardness Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>NIST-Traceable Standards</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibrated Equipment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Controlled Environment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Documentation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your Hardness Testing Specialists</h2>
                <p>Precision equipment, certified standards, and expert analysis for reliable material property verification</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Traceable Calibration</h3>
                    <p>All equipment calibrated to NIST-traceable standards with certified reference blocks and documented measurement uncertainty for reliable, defensible results.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Multiple Test Methods</h3>
                    <p>Comprehensive testing capabilities including Rockwell, Brinell, Vickers, Knoop, and Shore methods—selecting the optimal technique for each application.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Expert Technicians</h3>
                    <p>Qualified personnel with materials engineering backgrounds, understanding of metallurgy, heat treatment, and material property relationships.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <h3>Field & Laboratory Services</h3>
                    <p>Flexible testing options from precision laboratory analysis to portable field testing—matching service delivery to project requirements and schedules.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Statistical Analysis</h3>
                    <p>Comprehensive data analysis including statistical evaluation, correlation with other properties, and trending analysis for quality control and process improvement.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Detailed test certificates with calibration records, environmental conditions, measurement uncertainty, and correlation data supporting quality systems and compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Hardness Testing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Which hardness test method should I use for my material?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Method selection depends on material type, thickness, expected hardness range, and application requirements. <strong>Rockwell</strong> is fastest for production testing of metals. <strong>Brinell</strong> is best for coarse-grained materials and castings. <strong>Vickers</strong> provides the most versatility across hardness ranges and material types. <strong>Knoop</strong> is ideal for thin materials and brittle substances. <strong>Shore</strong> is used for polymers and elastomers. We help select the optimal method for your specific needs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is hardness testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Accuracy depends on the test method, equipment quality, calibration, and test conditions. Laboratory hardness testing typically achieves ±1-2% accuracy with proper calibration. Portable instruments may have ±3-5% accuracy depending on method and conditions. Factors affecting accuracy include surface preparation, material homogeneity, indentation spacing, and environmental conditions. We provide measurement uncertainty data with all test results.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What surface preparation is required for hardness testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Test surfaces should be smooth, clean, and flat to ensure proper indenter contact. Remove scale, oxide, paint, or rough machining marks. Surface roughness should typically be better than 0.4 μm Ra for Vickers/Knoop testing and 1.6 μm Ra for Rockwell/Brinell testing. Grinding, filing, or polishing may be required. The specimen should be rigidly supported to prevent movement during testing. Thin specimens may require backing support.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can hardness values be converted between different scales?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Approximate conversions exist between hardness scales (ASTM E140 provides conversion tables), but direct conversion should be used cautiously. Conversions are most reliable for similar materials within specific hardness ranges. Different test methods measure different material responses and may not correlate perfectly, especially for non-homogeneous materials. For critical applications, we recommend testing with the specified method rather than relying on conversions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the relationship between hardness and tensile strength?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>For many steels, approximate tensile strength can be estimated from Brinell hardness: Tensile Strength (psi) ≈ 500 × HB. However, this relationship varies significantly with material type, heat treatment, and microstructure. Hardness-strength correlations are most reliable within specific material families and conditions. While useful for estimation, direct tensile testing is recommended for critical strength requirements. We provide correlation guidance based on material type and application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you ensure hardness test accuracy and repeatability?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We maintain accuracy through NIST-traceable calibration using certified reference blocks, regular verification checks, proper environmental control, standardized procedures per ASTM/ISO requirements, qualified technician training, and documented quality procedures. Equipment is calibrated annually or per manufacturer recommendations. Multiple measurements are taken and averaged when required. Measurement uncertainty is calculated and reported with results.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you perform hardness testing on very large or small components?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—we have portable equipment for large components that cannot be moved to laboratory facilities, and precision micro-hardness capability for small or thin components. Portable testers can handle components up to building size. Micro-hardness testing can measure areas as small as 0.01mm with loads as low as 1 gram. Sample sectioning and mounting may be required for very small components. We assess feasibility and recommend the best approach for challenging geometries.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide with hardness test results?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive test certificates including test method and standard used, equipment identification and calibration data, test conditions (temperature, humidity), individual and average hardness values, location of test points, surface preparation details, measurement uncertainty, pass/fail evaluation against specifications, and technician certification. Digital photographs of test locations and statistical analysis are available when requested.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Reliable Hardness Testing Services?</h2>
                <p>Contact us for material property verification, quality control testing, and expert hardness analysis</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Traceable Calibration</span>
                    <span><i class="fas fa-check"></i> Multiple Test Methods</span>
                    <span><i class="fas fa-check"></i> Expert Analysis</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Material Testing Services</h2>
                <p>Comprehensive material characterization and quality verification solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/pmi-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-atom"></i>
                    </div>
                    <h3>Positive Material Identification</h3>
                    <p>Chemical composition verification supporting hardness testing programs</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing</h3>
                    <p>Surface examination and condition assessment supporting material evaluation</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Internal defect detection complementing hardness and material property verification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/thickness-gauging.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>Thickness Gauging</h3>
                    <p>Dimensional verification supporting comprehensive material characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    <?php include $base . '/includes/footer.php'; ?>

    <script src="/www/assets/js/script.js"></script>
    <script src="/www/assets/js/service-page.js"></script>
</body>

</html>