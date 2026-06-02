<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Phased Array Ultrasonic Testing (PAUT) Services | Alpha Sonix NDT Solutions";
$meta_description = "Professional PAUT inspection services for welds, pipes, and critical components. Advanced phased array ultrasonic testing with certified Level II & III technicians. Fast, accurate defect detection.";
$meta_keywords = "PAUT testing, phased array ultrasonic testing, weld inspection, NDT services, ultrasonic testing, corrosion mapping, crack detection, pipeline inspection";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/paut.php";
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
    <meta property="og:image" content="https://picsum.photos/id/20/1200/630">
    
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
        "serviceType": "Phased Array Ultrasonic Testing (PAUT)",
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
        "description": "Professional Phased Array Ultrasonic Testing services for industrial applications including weld inspection, corrosion mapping, and defect detection."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
       <div class="page-hero-bg" style="background-image: url('/www/assets/images/Paut/paut1.png');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>PAUT</span>
                </div>
                <h1 class="page-title">Phased Array Ultrasonic Testing (PAUT)</h1>
                <p class="page-subtitle">Advanced ultrasonic inspection technology for precise defect detection and weld analysis</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ISO 9001:2015 Certified</span>
                    <span class="badge"><i class="fas fa-user-check"></i> ASNT Level III Technicians</span>
                    <span class="badge"><i class="fas fa-clock"></i> 24/7 Service Available</span>
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
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>High Accuracy</h3>
                    <p>Detect defects as small as 0.5mm with advanced phased array technology</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Fast Inspection</h3>
                    <p>Reduce inspection time by 60% compared to conventional UT methods</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Detailed Reports</h3>
                    <p>Comprehensive digital reports with A-scan, B-scan, and S-scan imaging</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Code Compliant</h3>
                    <p>ASME, API, AWS, and international standards compliance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS PAUT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ADVANCED NDT TECHNOLOGY</span>
                    <h2>What is Phased Array Ultrasonic Testing (PAUT)?</h2>
                    <p class="lead">Phased Array Ultrasonic Testing (PAUT) is an advanced non-destructive testing method that uses multiple ultrasonic elements and electronic time delays to create detailed, high-resolution images of component interiors.</p>
                    
                    <p>Unlike conventional ultrasonic testing that uses a single element probe, PAUT employs a multi-element probe with typically 16 to 256 individual elements. These elements can be pulsed independently in a programmed sequence, allowing the beam to be steered, scanned, and focused electronically.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Electronic Beam Steering</strong>
                                <p>Adjust beam angle without physically moving the probe</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Multiple Viewing Angles</strong>
                                <p>Inspect complex geometries from various angles simultaneously</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Real-Time Imaging</strong>
                                <p>Instant visualization with A-scan, B-scan, C-scan, and S-scan displays</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Permanent Digital Records</strong>
                                <p>Store complete inspection data for future analysis and comparison</p>
                            </div>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request a Quote</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
            <img src="/www/assets/images/Paut/paut2.png" alt="PAUT Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>State-of-the-art PAUT equipment with advanced imaging capabilities</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99.8%</span>
                            <span class="stat-label">Detection Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ADVANTAGES ===================== -->
    <section class="advantages-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY CHOOSE PAUT</span>
                <h2>Key Advantages of Phased Array Ultrasonic Testing</h2>
                <p>PAUT offers superior capabilities compared to conventional NDT methods</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Faster Inspection Speed</h3>
                    <p>Cover larger areas in less time with electronic scanning. Reduce downtime and increase productivity with inspection speeds up to 60% faster than conventional UT.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>Enhanced Defect Detection</h3>
                    <p>Identify smaller defects with greater precision. Multiple beam angles ensure comprehensive coverage and detection of cracks, porosity, lack of fusion, and inclusions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3>Superior Imaging Quality</h3>
                    <p>Generate detailed cross-sectional images (B-scans) and volumetric views (S-scans) for better flaw characterization and sizing. Visual documentation improves decision-making.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Complete Data Storage</h3>
                    <p>All inspection data is digitally recorded and archived. Enables trend analysis, future reference, regulatory compliance, and remote expert review capabilities.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Complex Geometry Inspection</h3>
                    <p>Ideal for inspecting nozzles, T-joints, Y-joints, and irregular shapes. Electronic steering reaches areas inaccessible to conventional probes without complex fixtures.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Reduced Human Error</h3>
                    <p>Automated scanning and computerized analysis minimize operator variability. Consistent, repeatable results meet stringent quality control requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PAUT APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>Our PAUT services are trusted across critical industries worldwide</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="welds">Weld Inspection</button>
                    <button class="tab-btn" data-tab="corrosion">Corrosion Mapping</button>
                    <button class="tab-btn" data-tab="thickness">Thickness Gauging</button>
                    <button class="tab-btn" data-tab="crack">Crack Detection</button>
                </div>

                <div class="tabs-content">
                    <!-- Weld Inspection Tab -->
                    <div class="tab-panel active" id="welds">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/Paut/paut3.jpg" alt="Weld Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Weld Inspection & Analysis</h3>
                                <p>PAUT excels in weld examination, providing comprehensive volumetric inspection of butt welds, fillet welds, and complex joint configurations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pipeline girth welds (onshore & offshore)</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel circumferential welds</li>
                                    <li><i class="fas fa-check"></i> Structural steel connections</li>
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell welds</li>
                                    <li><i class="fas fa-check"></i> Dissimilar metal welds (DMW)</li>
                                    <li><i class="fas fa-check"></i> Root, fill, and cap pass verification</li>
                                    <li><i class="fas fa-check"></i> Post-weld heat treatment (PWHT) validation</li>
                                </ul>

                                <div class="standards">
                                    <strong>Compliant Standards:</strong>
                                    <span class="standard-tag">ASME Sec V</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">ISO 13588</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Corrosion Mapping Tab -->
                    <div class="tab-panel" id="corrosion">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/Paut/paut4.jpg" alt="Corrosion Mapping">
                            </div>
                            <div class="tab-text">
                                <h3>Corrosion & Erosion Mapping</h3>
                                <p>High-resolution thickness mapping detects internal and external corrosion, erosion, and wall loss in pipes, tanks, and pressure vessels.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pipe and tube wall thickness measurement</li>
                                    <li><i class="fas fa-check"></i> Tank floor and shell surveys</li>
                                    <li><i class="fas fa-check"></i> CUI (Corrosion Under Insulation) detection</li>
                                    <li><i class="fas fa-check"></i> Flow-accelerated corrosion (FAC) assessment</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger tube inspection</li>
                                    <li><i class="fas fa-check"></i> Remaining life calculations</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service (FFS) evaluations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Compliant Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">NACE SP0307</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thickness Gauging Tab -->
                    <div class="tab-panel" id="thickness">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/Paut/paut5.jpg" alt="Thickness Gauging">
                            </div>
                            <div class="tab-text">
                                <h3>Precision Thickness Measurement</h3>
                                <p>Accurate material thickness verification for quality control, manufacturing validation, and asset integrity management.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> High-temperature thickness gauging (up to 500°C)</li>
                                    <li><i class="fas fa-check"></i> Coated surface measurements</li>
                                    <li><i class="fas fa-check"></i> Multi-layer laminate inspection</li>
                                    <li><i class="fas fa-check"></i> Composite material thickness</li>
                                    <li><i class="fas fa-check"></i> Flange face and hub inspection</li>
                                    <li><i class="fas fa-check"></i> Cladding and overlay verification</li>
                                    <li><i class="fas fa-check"></i> Manufacturing quality assurance</li>
                                </ul>

                                <div class="standards">
                                    <strong>Compliant Standards:</strong>
                                    <span class="standard-tag">ASTM E797</span>
                                    <span class="standard-tag">ISO 16809</span>
                                    <span class="standard-tag">ASME Sec V Art 5</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Crack Detection Tab -->
                    <div class="tab-panel" id="crack">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/Paut/paut6.jpg" alt="Crack Detection">
                            </div>
                            <div class="tab-text">
                                <h3>Crack Detection & Sizing</h3>
                                <p>Identify stress corrosion cracking (SCC), fatigue cracks, and other service-induced degradation with pinpoint accuracy.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stress corrosion cracking (SCC) detection</li>
                                    <li><i class="fas fa-check"></i> Fatigue crack monitoring</li>
                                    <li><i class="fas fa-check"></i> Heat-affected zone (HAZ) inspection</li>
                                    <li><i class="fas fa-check"></i> Hydrogen-induced cracking (HIC)</li>
                                    <li><i class="fas fa-check"></i> Lamination and delamination detection</li>
                                    <li><i class="fas fa-check"></i> Crack depth and length sizing</li>
                                    <li><i class="fas fa-check"></i> Periodic in-service inspection (ISI)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Compliant Standards:</strong>
                                    <span class="standard-tag">ASME Sec XI</span>
                                    <span class="standard-tag">API 579</span>
                                    <span class="standard-tag">BS 7706</span>
                                    <span class="standard-tag">EN 583</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OUR PAUT SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE SOLUTIONS</span>
                <h2>Our PAUT Service Offerings</h2>
                <p>End-to-end phased array ultrasonic testing services tailored to your needs</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>On-Site PAUT Inspection</h3>
                    <p>Our certified technicians bring advanced PAUT equipment directly to your facility. Minimize downtime with efficient field inspections.</p>
                    <ul>
                        <li>Portable PAUT systems</li>
                        <li>24/7 emergency services</li>
                        <li>Minimal production disruption</li>
                        <li>Same-day reporting available</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Laboratory Testing</h3>
                    <p>Send components to our ISO 17025 accredited lab for detailed analysis in controlled conditions with advanced equipment.</p>
                    <ul>
                        <li>Climate-controlled environment</li>
                        <li>Precision calibration standards</li>
                        <li>Multi-angle analysis</li>
                        <li>Comprehensive test reports</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Automated PAUT Scanning</h3>
                    <p>Robotic and mechanized scanning systems for large-scale projects requiring consistent, high-speed coverage.</p>
                    <ul>
                        <li>Robotic crawlers for tanks</li>
                        <li>Pipe spool scanners</li>
                        <li>Automated weld scanners</li>
                        <li>100% volumetric coverage</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Engineering & Analysis</h3>
                    <p>Expert interpretation, flaw sizing, fitness-for-service assessments, and engineering critical assessment (ECA).</p>
                    <ul>
                        <li>Advanced flaw characterization</li>
                        <li>Remaining life calculations</li>
                        <li>API 579 / ASME FFS assessments</li>
                        <li>Repair/replace recommendations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Procedure Development</h3>
                    <p>Custom PAUT procedures tailored to your specific application, material, and code requirements.</p>
                    <ul>
                        <li>Written procedures per ASME Sec V</li>
                        <li>Technique validation</li>
                        <li>Calibration block fabrication</li>
                        <li>Operator training included</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Training & Certification</h3>
                    <p>Comprehensive PAUT training programs for Level I, II, and III personnel per ASNT SNT-TC-1A guidelines.</p>
                    <ul>
                        <li>Classroom & hands-on training</li>
                        <li>Equipment operation courses</li>
                        <li>Certification exam preparation</li>
                        <li>Continuing education credits</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & TECHNOLOGY ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">CUTTING-EDGE TECHNOLOGY</span>
                    <h2>State-of-the-Art PAUT Equipment</h2>
                    <p>We invest in the latest phased array ultrasonic testing technology to deliver superior results and maximize your asset integrity.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Advanced PAUT Flaw Detectors</h4>
                                <p>Olympus OmniScan X3, Zetec TOPAZ 64, and Sonatest Veo+ systems with multi-group capability and real-time 3D imaging.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-broadcast-tower"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>High-Performance Probes</h4>
                                <p>Wide range of linear and matrix array probes (1-18 MHz) for diverse applications. Custom probe design available.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Automated Scanning Systems</h4>
                                <p>Magnetic wheel encoders, robotic crawlers, and motorized scanners for repeatable, high-speed inspections.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Analysis Software</h4>
                                <p>TomoView, UltraVision, and proprietary analysis tools for advanced post-processing and reporting.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Accreditations</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/0/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/1/100/50" alt="ASNT">
                            <img src="https://picsum.photos/id/2/100/50" alt="PCI">
                            <img src="https://picsum.photos/id/3/100/50" alt="NADCAP">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="https://picsum.photos/id/48/600/400" alt="PAUT Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch PAUT in Action</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Full Matrix Capture (FMC)</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Total Focusing Method (TFM)</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Real-time 3D Visualization</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Multi-frequency Analysis</span>
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
                <h2>Your Trusted PAUT Partner</h2>
                <p>Industry-leading expertise, technology, and customer service</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Certified Experts</h3>
                    <p>ASNT Level II & III certified technicians with 15+ years average experience in advanced PAUT applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Rapid Turnaround</h3>
                    <p>24/7 emergency response. Same-day preliminary reports. Comprehensive final reports within 48 hours.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Accuracy Guarantee</h3>
                    <p>Rigorous QA/QC protocols. Independent third-party verification available. Zero false-call commitment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Dedicated Support</h3>
                    <p>Assigned project manager. Direct engineer access. Post-inspection consultation and recommendations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Pan-India Presence</h3>
                    <p>Service centers across major industrial hubs. Rapid mobilization to remote and offshore locations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Competitive Pricing</h3>
                    <p>No hidden costs. Transparent pricing. Volume discounts. Long-term partnership programs available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>PAUT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between PAUT and conventional UT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Conventional UT uses a single-element probe that emits one ultrasonic beam at a fixed angle. PAUT uses multiple elements (16-256) that can be electronically pulsed in sequences to steer, focus, and scan the beam without moving the probe. This provides faster coverage, multiple angles simultaneously, better defect characterization, and digital imaging capabilities.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does PAUT inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>PAUT costs vary based on application, component size, accessibility, number of inspection zones, and project location. While equipment costs are higher than conventional UT, PAUT typically reduces overall inspection costs by 30-50% due to faster coverage and fewer technicians required. Contact us for a detailed, no-obligation quote.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is PAUT suitable for all materials?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>PAUT works on most engineering materials including carbon steel, stainless steel, aluminum, titanium, nickel alloys, and some plastics and composites. Material considerations include grain structure, attenuation, and acoustic properties. Our engineers will assess material suitability and optimize parameters for your specific application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What size defects can PAUT detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>PAUT can reliably detect defects as small as 0.5mm (0.020") depending on material, defect type, orientation, and inspection setup. Detection capability follows ASME Sec V requirements. Using Total Focusing Method (TFM), resolution can be enhanced further for critical applications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does a PAUT inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection time depends on component size, complexity, and coverage requirements. A typical pipeline girth weld takes 15-30 minutes with PAUT versus 1-2 hours with radiography. Automated systems can inspect entire tank floors or large vessel shells in hours rather than days.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can PAUT replace radiography (RT)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, PAUT is approved as an alternative to RT per ASME Sec V, API 1104, and other codes. PAUT offers advantages including no radiation safety concerns, instant results, better crack detection, and permanent digital records. Many companies have fully replaced RT with PAUT for weld inspection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide PAUT training?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive PAUT training from basic to advanced levels per ASNT SNT-TC-1A, ISO 9712, or company-specific requirements. Courses include theory, equipment operation, procedure development, data analysis, and hands-on practice. Certification exam preparation is included.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What industries use PAUT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>PAUT is widely used in oil & gas, power generation, petrochemical, aerospace, pipeline, shipbuilding, pressure vessel manufacturing, structural steel fabrication, rail, and nuclear industries. Any application requiring high-confidence weld or material inspection benefits from PAUT.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Superior Inspection Quality?</h2>
                <p>Get a free consultation and detailed quote from our PAUT experts today</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Us</a>
                </center>

                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free Site Survey</span>
                    <span><i class="fas fa-check"></i> Same-Day Response</span>
                    <span><i class="fas fa-check"></i> No Obligation Quote</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT Services</h2>
                <p>Explore our comprehensive range of advanced NDT solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Time of Flight Diffraction for accurate flaw sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/aut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>AUT</h3>
                    <p>Automated Ultrasonic Testing for high-speed coverage</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Conventional UT</h3>
                    <p>Traditional ultrasonic flaw detection services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>RVI / Videoscope</h3>
                    <p>Remote visual inspection for internal surfaces</p>
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