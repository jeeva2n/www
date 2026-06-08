<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Acoustic Emission Testing (AE) Services | Real-Time Structural Monitoring | Alpha Sonix NDT Solutions";
$meta_description = "Professional Acoustic Emission Testing (AE) services for real-time structural health monitoring. Continuous monitoring of pressure vessels, storage tanks, bridges, and critical infrastructure for early defect detection.";
$meta_keywords = "acoustic emission testing, AE testing, structural health monitoring, real-time monitoring, pressure vessel monitoring, tank monitoring, acoustic emission NDT, continuous monitoring, structural integrity";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/acoustic-emission-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/acoustic-emission-og.jpg">
    
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
        "serviceType": "Acoustic Emission Testing (AE) Services",
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
        "description": "Professional Acoustic Emission Testing services providing real-time structural health monitoring and early defect detection for critical infrastructure and industrial equipment."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/ae/acoustic-emission1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Acoustic Emission Testing (AE)</span>
                </div>
                <h1 class="page-title">Acoustic Emission Testing (AE)</h1>
                <p class="page-subtitle">Real-time structural health monitoring and early defect detection using advanced acoustic emission technology</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-clock"></i> Real-Time Monitoring</span>
                    <span class="badge"><i class="fas fa-wave-square"></i> Continuous Assessment</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Early Detection</span>
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
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Real-Time Monitoring</h3>
                    <p>Continuous monitoring of structural integrity through detection and analysis of acoustic emissions from active defects and crack growth.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Early Detection</h3>
                    <p>Detect and locate developing defects before they become critical, enabling proactive maintenance and preventing catastrophic failures.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Global Monitoring</h3>
                    <p>Monitor entire structures simultaneously with multiple sensors, providing comprehensive coverage of large assets and complex geometries.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Operational Testing</h3>
                    <p>Perform testing during normal operations without service interruption, enabling assessment under actual operating conditions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS ACOUSTIC EMISSION TESTING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ADVANCED NDT TECHNOLOGY</span>
                    <h2>What is Acoustic Emission Testing (AE)?</h2>
                    <p class="lead">Acoustic Emission Testing (AE) is a passive non-destructive testing technique that detects and analyzes elastic waves generated by the sudden release of energy from localized sources within materials under stress.</p>
                    
                    <p>When materials undergo stress, crack growth, or other damage mechanisms, they release energy in the form of acoustic emissions—transient elastic waves that travel through the material. Our advanced AE systems capture these signals using sensitive sensors, enabling real-time monitoring of structural integrity and early detection of developing defects.</p>

                    <p>AE testing is uniquely suited for continuous monitoring applications, providing global coverage of large structures while detecting only active damage mechanisms. This makes it ideal for structural health monitoring, pressure testing verification, and long-term asset integrity assessment.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Active Defect Detection</strong>
                                <p>Detect only growing cracks and active damage mechanisms that pose immediate threats to structural integrity.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Source Location</strong>
                                <p>Accurately locate the position of acoustic emission sources within the structure for targeted inspection and repair.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Continuous Monitoring</strong>
                                <p>Monitor structures continuously during operation, providing ongoing assessment of structural health and safety.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Large Area Coverage</strong>
                                <p>Monitor entire structures or large sections simultaneously with strategically placed sensor arrays.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-microchip"></i>
                        <div>
                            <strong>Advanced Technology:</strong>
                            <p>Our state-of-the-art AE systems combine high-sensitivity sensors with advanced signal processing to provide accurate real-time monitoring and early warning capabilities for critical infrastructure.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request AE Testing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/ae/ae-monitoring-system.jpg" alt="Acoustic Emission Monitoring System">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Advanced acoustic emission monitoring system for real-time structural assessment</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Monitoring Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99%</span>
                            <span class="stat-label">Detection Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Continuous Monitoring</span>
                        </div>
                    </div>
                    
                    <div class="ae-benefits">
                        <h4><i class="fas fa-star"></i> AE Testing Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Early defect detection</li>
                            <li><i class="fas fa-check"></i> Real-time monitoring capability</li>
                            <li><i class="fas fa-check"></i> Global structural coverage</li>
                            <li><i class="fas fa-check"></i> Operational testing capability</li>
                            <li><i class="fas fa-check"></i> Predictive maintenance support</li>
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
                <span class="section-label">WHY ACOUSTIC EMISSION TESTING</span>
                <h2>Key Advantages of Acoustic Emission Testing</h2>
                <p>Revolutionary monitoring capabilities for proactive maintenance and safety assurance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Real-Time Detection</h3>
                    <p>Detect and monitor active crack growth and damage mechanisms as they occur, providing immediate awareness of developing structural issues.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Monitoring</h3>
                    <p>Monitor entire structures or large sections simultaneously, providing comprehensive coverage that would be impossible with conventional NDT methods.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-play"></i>
                    </div>
                    <h3>Operational Testing</h3>
                    <p>Perform monitoring during normal operations without shutdowns, enabling assessment under actual service conditions and loading.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>Source Location</h3>
                    <p>Accurately pinpoint the location of acoustic emission sources within the structure, enabling targeted follow-up inspection and repair.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Trending & Analysis</h3>
                    <p>Track damage progression over time through continuous monitoring and data analysis, supporting predictive maintenance strategies.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective Monitoring</h3>
                    <p>Reduce inspection costs and downtime through continuous monitoring capabilities and early detection of problems before they become critical.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">AE TESTING APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>Comprehensive acoustic emission monitoring for critical infrastructure and industrial assets</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pressure-vessels">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="storage-tanks">Storage Tanks</button>
                    <button class="tab-btn" data-tab="infrastructure">Infrastructure</button>
                    <button class="tab-btn" data-tab="industrial">Industrial Equipment</button>
                </div>

                <div class="tabs-content">
                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel active" id="pressure-vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/ae/pressure-vessel-ae.jpg" alt="Pressure Vessel AE Monitoring">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessel & Boiler Monitoring</h3>
                                <p>Continuous monitoring of pressure vessels, boilers, and pressure piping systems to detect crack growth, fatigue damage, and stress corrosion cracking during operation.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steam boilers and pressure vessels</li>
                                    <li><i class="fas fa-check"></i> Heat exchangers and pressure piping</li>
                                    <li><i class="fas fa-check"></i> Autoclaves and reaction vessels</li>
                                    <li><i class="fas fa-check"></i> Compressed air receivers</li>
                                    <li><i class="fas fa-check"></i> Process vessels and separators</li>
                                    <li><i class="fas fa-check"></i> Hydrostatic test monitoring</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service assessment support</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section V</span>
                                    <span class="standard-tag">ASTM E1139</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 579</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Tanks Tab -->
                    <div class="tab-panel" id="storage-tanks">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/ae/storage-tank-ae.jpg" alt="Storage Tank AE Monitoring">
                            </div>
                            <div class="tab-text">
                                <h3>Storage Tank Monitoring</h3>
                                <p>Long-term monitoring of atmospheric storage tanks, spherical tanks, and underground storage tanks for early detection of corrosion and structural degradation.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Atmospheric storage tanks (AST)</li>
                                    <li><i class="fas fa-check"></i> Spherical and spheroidal tanks</li>
                                    <li><i class="fas fa-check"></i> Underground storage tanks (UST)</li>
                                    <li><i class="fas fa-check"></i> Floating roof tank monitoring</li>
                                    <li><i class="fas fa-check"></i> Tank floor corrosion detection</li>
                                    <li><i class="fas fa-check"></i> Shell and roof structural monitoring</li>
                                    <li><i class="fas fa-check"></i> Leak detection and location</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">API 620</span>
                                    <span class="standard-tag">ASTM E1932</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure Tab -->
                    <div class="tab-panel" id="infrastructure">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/ae/bridge-ae-monitoring.jpg" alt="Bridge AE Monitoring">
                            </div>
                            <div class="tab-text">
                                <h3>Infrastructure & Civil Structures</h3>
                                <p>Structural health monitoring of bridges, buildings, and civil infrastructure to ensure public safety and optimize maintenance scheduling.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bridge structural health monitoring</li>
                                    <li><i class="fas fa-check"></i> Building and high-rise monitoring</li>
                                    <li><i class="fas fa-check"></i> Tunnel and underground structure monitoring</li>
                                    <li><i class="fas fa-check"></i> Dam and water retention structure monitoring</li>
                                    <li><i class="fas fa-check"></i> Crane and lifting equipment monitoring</li>
                                    <li><i class="fas fa-check"></i> Steel structure fatigue monitoring</li>
                                    <li><i class="fas fa-check"></i> Composite structure monitoring</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E2191</span>
                                    <span class="standard-tag">ISO 12716</span>
                                    <span class="standard-tag">EN 1330-9</span>
                                    <span class="standard-tag">Local Building Codes</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industrial Equipment Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/ae/industrial-ae-monitoring.jpg" alt="Industrial Equipment AE Monitoring">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial Equipment & Machinery</h3>
                                <p>Continuous monitoring of rotating machinery, pipelines, and industrial equipment to detect bearing failures, crack growth, and mechanical degradation.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Rotating machinery and turbines</li>
                                    <li><i class="fas fa-check"></i> Pipeline and piping system monitoring</li>
                                    <li><i class="fas fa-check"></i> Bearing and gearbox monitoring</li>
                                    <li><i class="fas fa-check"></i> Compressor and pump monitoring</li>
                                    <li><i class="fas fa-check"></i> Wind turbine blade monitoring</li>
                                    <li><i class="fas fa-check"></i> Furnace and kiln refractory monitoring</li>
                                    <li><i class="fas fa-check"></i> Process equipment health monitoring</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME PCC-3</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ISO 22096</span>
                                    <span class="standard-tag">ASTM E650</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OUR SERVICES ===================== -->
    <section class="services-offering" id="services">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE AE SERVICES</span>
                <h2>Our Acoustic Emission Testing Services</h2>
                <p>Complete monitoring solutions from system design to data analysis and reporting</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>AE System Design & Installation</h3>
                    <p>Custom design and installation of acoustic emission monitoring systems tailored to specific structural requirements and monitoring objectives.</p>
                    <ul>
                        <li>Sensor placement optimization</li>
                        <li>System configuration and setup</li>
                        <li>Calibration and verification</li>
                        <li>Background noise assessment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Real-Time Monitoring</h3>
                    <p>Continuous monitoring services with real-time data acquisition, analysis, and alerting for immediate notification of critical events.</p>
                    <ul>
                        <li>24/7 continuous monitoring</li>
                        <li>Real-time alert systems</li>
                        <li>Remote monitoring capabilities</li>
                        <li>Data streaming and storage</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Pressure Test Monitoring</h3>
                    <p>Specialized AE monitoring during hydrostatic and pneumatic testing to detect and locate active defects under test conditions.</p>
                    <ul>
                        <li>Hydrostatic test monitoring</li>
                        <li>Pneumatic test monitoring</li>
                        <li>Source location and mapping</li>
                        <li>Real-time safety assessment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Source Location & Mapping</h3>
                    <p>Advanced source location algorithms to accurately pinpoint the position of acoustic emission sources within monitored structures.</p>
                    <ul>
                        <li>2D and 3D source location</li>
                        <li>Zone location mapping</li>
                        <li>Arrival time analysis</li>
                        <li>Velocity calibration</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Data Analysis & Interpretation</h3>
                    <p>Expert analysis and interpretation of acoustic emission data to assess structural condition and recommend appropriate actions.</p>
                    <ul>
                        <li>Signal pattern recognition</li>
                        <li>Severity assessment</li>
                        <li>Trend analysis</li>
                        <li>Engineering recommendations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Consulting & Training</h3>
                    <p>Technical consulting services and training programs to help clients understand and implement acoustic emission monitoring technology.</p>
                    <ul>
                        <li>Technology assessment</li>
                        <li>Feasibility studies</li>
                        <li>Personnel training</li>
                        <li>Procedure development</li>
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
                    <span class="section-label">ADVANCED AE TECHNOLOGY</span>
                    <h2>State-of-the-Art Acoustic Emission Equipment</h2>
                    <p>Advanced acoustic emission systems with high-sensitivity sensors and sophisticated data acquisition and analysis capabilities.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microphone-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>High-Sensitivity AE Sensors</h4>
                                <p>Wide-band and resonant AE sensors with superior sensitivity and frequency response for detecting the smallest acoustic emissions.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Multi-Channel Data Acquisition</h4>
                                <p>High-speed data acquisition systems capable of simultaneous monitoring from multiple sensor locations with real-time processing.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Advanced Signal Processing</h4>
                                <p>Sophisticated signal processing algorithms for noise filtering, pattern recognition, and automatic event classification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Remote Monitoring Systems</h4>
                                <p>Cloud-based monitoring platforms enabling remote access to real-time data and automated alerting systems.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our AE Certifications & Standards</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/asnt-ae-cert.png" alt="ASNT AE Certified">
                            <img src="/www/assets/images/certs/astm-cert.png" alt="ASTM Standards">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME Compliance">
                            <img src="/www/assets/images/certs/iso-cert.png" alt="ISO Standards">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/ae/ae-testing-setup.jpg" alt="AE Testing Setup">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View AE Monitoring Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Multi-Channel Acquisition</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Real-Time Processing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Source Location Capable</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Remote Monitoring Ready</span>
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
                <h2>Your Trusted Acoustic Emission Partner</h2>
                <p>Advanced technology, expert analysis, and comprehensive monitoring solutions</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>AE Specialists</h3>
                    <p>Certified acoustic emission specialists with extensive experience in system design, data analysis, and structural health monitoring applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Advanced Technology</h3>
                    <p>State-of-the-art AE equipment with high-sensitivity sensors, multi-channel acquisition, and sophisticated signal processing capabilities.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>24/7 Monitoring</h3>
                    <p>Continuous monitoring capabilities with real-time alerting and remote access to ensure immediate notification of critical events.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-area"></i>
                    </div>
                    <h3>Expert Analysis</h3>
                    <p>Comprehensive data analysis and interpretation services providing actionable insights and engineering recommendations for maintenance decisions.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Custom Solutions</h3>
                    <p>Tailored monitoring solutions designed to meet specific application requirements and integrate with existing maintenance and safety programs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Long-Term Support</h3>
                    <p>Comprehensive support services including system maintenance, data analysis, reporting, and technology upgrades throughout the monitoring program.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Acoustic Emission Testing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of defects can acoustic emission detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Acoustic emission can detect active crack growth, stress corrosion cracking, fatigue damage, corrosion processes, leak formation, bearing failures, and other damage mechanisms that generate elastic waves during their development.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is acoustic emission source location?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Source location accuracy depends on sensor spacing, material properties, and signal quality. Typically, location accuracy within 1-5% of sensor spacing is achievable, often providing location precision within centimeters for properly configured systems.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can AE testing be performed during normal operations?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, one of the key advantages of AE testing is the ability to monitor structures during normal operation without shutdowns. This enables assessment under actual service conditions and continuous monitoring for early defect detection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between AE and other NDT methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Unlike conventional NDT methods that detect existing defects, AE detects only active damage mechanisms. It provides global monitoring coverage, real-time results, and can monitor entire structures continuously during operation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long can AE monitoring systems operate?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>AE monitoring systems can operate continuously for years with proper maintenance. Sensors are designed for long-term deployment, and modern systems include remote monitoring capabilities for ongoing operation and data collection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What factors affect AE signal detection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Signal detection is affected by material properties, background noise, sensor coupling, distance from source, and signal attenuation. Proper system design and sensor placement are critical for optimal performance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can AE testing replace other inspection methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>AE testing is complementary to conventional NDT methods. While it excels at detecting active damage and providing global monitoring, conventional NDT is often needed for detailed characterization and sizing of detected defects.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What training is required for AE testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>AE testing requires specialized training in acoustic emission principles, system operation, and data interpretation. We provide comprehensive training programs and certification support for personnel working with AE systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Implement Advanced Structural Health Monitoring</h2>
                <p>Contact our acoustic emission specialists for real-time monitoring solutions and early defect detection</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:ae@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email AE Specialists</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Real-Time Monitoring</span>
                    <span><i class="fas fa-check"></i> Source Location Capable</span>
                    <span><i class="fas fa-check"></i> Expert Analysis</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT Services</h2>
                <p>Comprehensive structural integrity and monitoring solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Phased Array Ultrasonic Testing for detailed defect characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Conventional UT for flaw detection and material assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/infrared-thermography.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Thermal Inspection</h3>
                    <p>Infrared thermography for condition monitoring and analysis</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/pressure-vessel-boiler.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pressure Vessel Inspection</h3>
                    <p>Comprehensive pressure vessel and boiler inspection services</p>
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