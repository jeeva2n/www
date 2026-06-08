<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Ultrasonic Thickness Gauging Services | Corrosion Monitoring & Wall Thickness Testing | Alpha Sonix NDT Solutions";
$meta_description = "Professional Ultrasonic Thickness Gauging (UTG) services for pipes, vessels, tanks, and structures. Accurate corrosion monitoring, remaining wall thickness measurement, CUI assessment, and fitness-for-service data collection per API, ASME & ISO standards.";
$meta_keywords = "ultrasonic thickness gauging, thickness testing, UTG, corrosion monitoring, wall thickness measurement, CUI inspection, tank thickness survey, remaining life assessment, ultrasonic gauge, thickness meter, API 510, API 653";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/ultrasonic-thickness-gauging.php";
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
    <meta property="og:image" content="/www/assets/images/services/thickness-gauging-og.jpg">

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
            "serviceType": "Ultrasonic Thickness Gauging & Corrosion Monitoring",
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
            "description": "Professional Ultrasonic Thickness Gauging services for corrosion monitoring, wall thickness measurement, and remaining life assessment across pipes, vessels, tanks, and industrial structures."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/thickness-gauging-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Ultrasonic Thickness Gauging</span>
                </div>
                <h1 class="page-title">Ultrasonic Thickness Gauging (UTG)</h1>
                <p class="page-subtitle">Precise wall thickness measurement for corrosion monitoring, integrity management, and remaining life assessment—supporting safe operation and code compliance</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-bullseye"></i> ±0.01 mm Accuracy (Instrument Dependent)</span>
                    <span class="badge"><i class="fas fa-certificate"></i> API 510 / 570 / 653 Compliant</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Trending & Data Management</span>
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
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>Accurate Measurement</h3>
                    <p>High-precision thickness readings for corrosion assessment, manufacturing QC, and regulatory compliance documentation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Non-Invasive Testing</h3>
                    <p>Measure wall thickness from one side without drilling, cutting, or damaging the component—ideal for in-service equipment.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Data Collection</h3>
                    <p>Fast measurement cycles enable high-volume surveys, shutdown support, and efficient coverage of large inspection areas.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Digital Record Keeping</h3>
                    <p>Data logging, trending analysis, and comparison with baseline/previous readings to track corrosion rates and predict remaining life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS UTG ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">CORROSION MONITORING TECHNOLOGY</span>
                    <h2>What is Ultrasonic Thickness Gauging?</h2>
                    <p class="lead">Ultrasonic Thickness Gauging (UTG) is a non-destructive testing method that uses ultrasonic sound waves to accurately measure the wall thickness of pipes, vessels, tanks, structures, and components from one accessible surface.</p>

                    <p>The technique works by transmitting ultrasonic pulses through the material and measuring the time taken for the echo to return from the opposite wall. Since sound travels at a known velocity in a given material, the instrument calculates thickness with high precision. Modern digital thickness gauges can measure through paint, coatings, and scale (in many cases), making them ideal for field inspections without extensive surface preparation.</p>

                    <p>UTG is a cornerstone of asset integrity programs, providing quantitative data to assess corrosion, erosion, and material loss—helping operators make informed decisions about continued operation, repair, replacement, or retirement of pressure equipment and structural components.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Corrosion & Erosion Monitoring</strong>
                                <p>Track wall loss over time to identify corrosion mechanisms, establish corrosion rates, and predict future thickness at next inspection.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Remaining Life Assessment</strong>
                                <p>Provide thickness data to support fitness-for-service (FFS) evaluations, risk-based inspection (RBI) programs, and remaining life calculations.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Regulatory Compliance</strong>
                                <p>Satisfy inspection and documentation requirements per API 510, API 570, API 653, ASME, PHMSA, and jurisdictional regulations.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Manufacturing & QC Verification</strong>
                                <p>Verify material thickness during fabrication, incoming inspection, and production quality control to meet design specifications.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>When UTG is Essential:</strong>
                            <p>UTG is critical for any asset subject to corrosion, erosion, or mechanical wear—especially in aging infrastructure, high-temperature service, corrosive environments, and regulatory-driven inspection programs. It provides the quantitative foundation for integrity management and safe operation decisions.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Thickness Survey</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/thickness-gauge-equipment.jpg" alt="Ultrasonic Thickness Gauge">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Precision ultrasonic thickness gauges with data logging capability</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">5000+</span>
                            <span class="stat-label">Thickness Surveys</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">±0.01mm</span>
                            <span class="stat-label">Typical Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Non-Destructive</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> UTG Measurement Principle</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Ultrasonic pulse transmitted through material</li>
                            <li><strong>2.</strong> Pulse reflects from back wall (opposite surface)</li>
                            <li><strong>3.</strong> Return time measured with high precision</li>
                            <li><strong>4.</strong> Thickness calculated: T = (V × t) / 2</li>
                            <li><strong>5.</strong> Reading displayed, logged, and compared to limits</li>
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
                <span class="section-label">WHY CHOOSE UTG</span>
                <h2>Key Advantages of Ultrasonic Thickness Gauging</h2>
                <p>Fast, accurate, and safe—essential for proactive integrity management and compliance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>High Accuracy & Repeatability</h3>
                    <p>Modern digital gauges provide precise readings with excellent repeatability—critical for trending, corrosion rate calculations, and integrity assessments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <h3>Single-Side Access</h3>
                    <p>Measure thickness from one side only—ideal for insulated equipment, inaccessible surfaces, and in-service components without shutdown or disassembly.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Fast & Efficient</h3>
                    <p>Rapid measurement cycles enable large-area surveys, high-volume data collection, and minimal disruption to operations during turnarounds and shutdowns.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Through-Coating Capability</h3>
                    <p>Many instruments can measure through paint, protective coatings, and light scale without removal—reducing surface preparation time and costs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h3>Safe & Non-Invasive</h3>
                    <p>No drilling, cutting, or material removal required—preserves component integrity and eliminates radiation or hazardous process concerns.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-area"></i>
                    </div>
                    <h3>Data Trending & Analysis</h3>
                    <p>Digital data logging supports long-term trending, corrosion rate modeling, and predictive maintenance strategies for optimized inspection intervals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">UTG APPLICATIONS</span>
                <h2>Industries & Components We Measure</h2>
                <p>Comprehensive thickness measurement services across asset classes and operational environments</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="piping">Piping Systems</button>
                    <button class="tab-btn" data-tab="vessels">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="tanks">Storage Tanks</button>
                    <button class="tab-btn" data-tab="special">Specialized Applications</button>
                </div>

                <div class="tabs-content">
                    <!-- Piping Systems Tab -->
                    <div class="tab-panel active" id="piping">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/thickness-piping.jpg" alt="Piping Thickness Measurement">
                            </div>
                            <div class="tab-text">
                                <h3>Piping & Pipeline Thickness Surveys</h3>
                                <p>Wall thickness measurement of process piping, transmission pipelines, and distribution systems to monitor internal and external corrosion, erosion, and mechanical damage.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Carbon steel and alloy piping (all schedules)</li>
                                    <li><i class="fas fa-check"></i> Stainless steel and special alloy systems</li>
                                    <li><i class="fas fa-check"></i> Corrosion monitoring locations (CMLs)</li>
                                    <li><i class="fas fa-check"></i> Erosion-prone areas (elbows, tees, downstream of control valves)</li>
                                    <li><i class="fas fa-check"></i> Corrosion under insulation (CUI) inspection points</li>
                                    <li><i class="fas fa-check"></i> Pipeline integrity direct assessment (IDA) support</li>
                                    <li><i class="fas fa-check"></i> Hot taps, branches, and high-stress locations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 1160</span>
                                    <span class="standard-tag">ASTM E797</span>
                                    <span class="standard-tag">ISO 16809</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel" id="vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/thickness-vessel.jpg" alt="Pressure Vessel Thickness Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessel Thickness Testing</h3>
                                <p>Shell, head, and nozzle thickness measurements for fixed and unfired pressure vessels, heat exchangers, reactors, and critical pressure-containing equipment.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Shell courses and heads (ellipsoidal, hemispherical, torispherical)</li>
                                    <li><i class="fas fa-check"></i> Nozzle necks, reinforcement pads, and attachment areas</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger shells, channels, and tube sheets</li>
                                    <li><i class="fas fa-check"></i> Internal corrosion screening and mapping</li>
                                    <li><i class="fas fa-check"></i> External corrosion assessment (under supports, CUI areas)</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service (FFS) data collection per API 579</li>
                                    <li><i class="fas fa-check"></i> Regulatory inspection support and documentation</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">ASME Sec VIII</span>
                                    <span class="standard-tag">API 579 (FFS)</span>
                                    <span class="standard-tag">ASTM E797</span>
                                    <span class="standard-tag">NBR 15333</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Tanks Tab -->
                    <div class="tab-panel" id="tanks">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/thickness-tank.jpg" alt="Tank Thickness Survey">
                            </div>
                            <div class="tab-text">
                                <h3>Storage Tank Thickness Surveys</h3>
                                <p>Floor, shell, and roof thickness measurements for aboveground storage tanks (AST), including corrosion mapping, settlement monitoring support, and API 653 compliance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Tank floor bottom plates (top-side and underside access)</li>
                                    <li><i class="fas fa-check"></i> Shell courses (internal and external corrosion)</li>
                                    <li><i class="fas fa-check"></i> Roof plates and structural supports</li>
                                    <li><i class="fas fa-check"></i> Critical zone inspection (bottom 3 feet of shell)</li>
                                    <li><i class="fas fa-check"></i> MFL survey verification and targeted thickness checks</li>
                                    <li><i class="fas fa-check"></i> Settlement and deformation-affected areas</li>
                                    <li><i class="fas fa-check"></i> Repair assessment and remaining life studies</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">EEMUA 159</span>
                                    <span class="standard-tag">ASTM E797</span>
                                    <span class="standard-tag">ISO 16809</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialized Applications Tab -->
                    <div class="tab-panel" id="special">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/thickness-special.jpg" alt="Specialized Thickness Applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialized Thickness Measurements</h3>
                                <p>Custom thickness gauging solutions for unique components, challenging environments, and specialized materials—including high-temperature, coated, and composite structures.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> High-temperature piping and equipment (using HT probes & couplants)</li>
                                    <li><i class="fas fa-check"></i> Clad and overlay thickness verification</li>
                                    <li><i class="fas fa-check"></i> Composite materials and laminate structures (application dependent)</li>
                                    <li><i class="fas fa-check"></i> Small-diameter tubing and thin-wall components</li>
                                    <li><i class="fas fa-check"></i> Structural steel (bridges, platforms, supports)</li>
                                    <li><i class="fas fa-check"></i> Marine and offshore structures (hulls, risers, subsea equipment)</li>
                                    <li><i class="fas fa-check"></i> Fireproofing and refractory backing thickness (application dependent)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E797</span>
                                    <span class="standard-tag">ISO 16809</span>
                                    <span class="standard-tag">ASME Sec V</span>
                                    <span class="standard-tag">Client Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== MEASUREMENT SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE SOLUTIONS</span>
                <h2>Our Thickness Gauging Services</h2>
                <p>From spot checks to complete surveys—tailored measurement programs with actionable reporting</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Corrosion Monitoring Programs</h3>
                    <p>Establish and maintain thickness monitoring locations (CMLs/TMLs) with baseline readings, periodic measurements, and corrosion rate trending.</p>
                    <ul>
                        <li>CML/TML location identification and marking</li>
                        <li>Baseline thickness documentation</li>
                        <li>Periodic re-measurement per RBI or time-based intervals</li>
                        <li>Corrosion rate calculation and next inspection forecasting</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>CUI (Corrosion Under Insulation) Screening</h3>
                    <p>Targeted thickness surveys beneath insulation at susceptible locations to detect hidden corrosion before failure.</p>
                    <ul>
                        <li>Risk-based CUI location screening</li>
                        <li>Insulation removal coordination (where required)</li>
                        <li>Thickness profiling and mapping</li>
                        <li>Remaining life and re-inspection recommendations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Tank Floor & Shell Surveys</h3>
                    <p>Complete thickness surveys for API 653 compliance, including floor scanning, shell course mapping, and critical zone assessment.</p>
                    <ul>
                        <li>Floor plate thickness mapping (multiple grids)</li>
                        <li>Shell course vertical and horizontal scanning</li>
                        <li>Bottom 3-foot critical zone detailed inspection</li>
                        <li>Fitness-for-service calculations and repair prioritization</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Shutdown & Turnaround Support</h3>
                    <p>Fast-response thickness surveys during planned outages with immediate data delivery to support repair/replace decisions and critical path management.</p>
                    <ul>
                        <li>Pre-planning and location coordination</li>
                        <li>Multi-technician deployment for rapid coverage</li>
                        <li>Real-time preliminary data feedback</li>
                        <li>Expedited reporting to minimize downtime</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Fitness-for-Service (FFS) Data Collection</h3>
                    <p>Detailed thickness measurements and profiling to support API 579 / ASME FFS-1 evaluations for localized thin areas, general corrosion, and pitting.</p>
                    <ul>
                        <li>Grid-based thickness mapping</li>
                        <li>Statistical data analysis (minimum, average, standard deviation)</li>
                        <li>Critical location profiling for engineering assessment</li>
                        <li>Coordination with FFS engineer for assessment input</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Quality Control & Manufacturing Verification</h3>
                    <p>Thickness verification during fabrication, incoming material inspection, and production QC to ensure compliance with design specifications.</p>
                    <ul>
                        <li>Plate, pipe, and component thickness verification</li>
                        <li>Manufacturing tolerance confirmation</li>
                        <li>Incoming material acceptance inspection</li>
                        <li>Pre-shipment and final inspection documentation</li>
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
                    <span class="section-label">PRECISION INSTRUMENTS</span>
                    <h2>Advanced Thickness Gauging Equipment</h2>
                    <p>We use calibrated, high-resolution ultrasonic thickness gauges and application-specific probes to ensure accurate, repeatable measurements across diverse materials and conditions.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tablet-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Digital Ultrasonic Thickness Gauges</h4>
                                <p>Modern instruments with high-resolution displays, data logging, USB/Bluetooth connectivity, and statistical analysis functions for efficient field surveys.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-circle-notch"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Through-Coating Probes</h4>
                                <p>Dual-element and echo-echo mode probes that measure base metal thickness without removing paint, coatings, or scale—reducing surface prep time and costs.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>High-Temperature Probes</h4>
                                <p>Specialized delay-line probes and couplants for measurements on hot surfaces up to 500°C (application and instrument dependent)—enabling online inspection without cooldown.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Calibration Standards & Traceability</h4>
                                <p>Calibration performed using certified thickness blocks traceable to national/international standards, with documented verification before and after each survey.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Quality & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/20/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/21/100/50" alt="ASTM Compliant">
                            <img src="https://picsum.photos/id/22/100/50" alt="API Approved">
                            <img src="https://picsum.photos/id/23/100/50" alt="Calibration Certificate">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/thickness-measurement-field.jpg" alt="Thickness Measurement in Progress">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Thickness Survey Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>±0.01 mm Resolution</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Data Logging & Trending</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Through-Coating Capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Certified Calibration</span>
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
                <h2>Your Partner for Reliable Thickness Data</h2>
                <p>Experienced personnel, calibrated equipment, and data you can trust for critical integrity decisions</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Qualified Technicians</h3>
                    <p>Trained and certified thickness measurement technicians with field experience in corrosion monitoring, FFS data collection, and API inspection support.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Calibrated Instruments</h3>
                    <p>All gauges calibrated and verified using traceable standards before each survey—documented in every report for audit confidence.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-excel"></i>
                    </div>
                    <h3>Digital Data Packages</h3>
                    <p>Structured Excel/CSV data files with location references, statistical summaries, color-coded thickness maps, and trending charts—ready for import into your CMMS or integrity software.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Rapid Turnaround</h3>
                    <p>Fast mobilization and efficient survey execution to support tight shutdown windows, emergency assessments, and critical-path decisions.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Trending & Analysis Support</h3>
                    <p>Compare current readings with historical data, calculate corrosion rates, and provide next inspection interval recommendations based on API methodologies.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrity Program Integration</h3>
                    <p>We work with your inspection engineers, RBI coordinators, and asset integrity teams to ensure thickness data aligns with your program objectives and decision criteria.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Thickness Gauging Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is ultrasonic thickness measurement?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Modern ultrasonic thickness gauges typically provide accuracy of ±0.01 mm to ±0.05 mm (instrument and application dependent). Accuracy depends on calibration quality, material properties, surface condition, probe selection, and operator technique. We use calibrated instruments with traceable standards and follow documented procedures to ensure reliable, repeatable measurements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you measure thickness through paint or coatings?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—many modern thickness gauges can measure base metal thickness through paint, coatings, and light scale using dual-element probes or echo-echo mode. This capability significantly reduces surface preparation costs and time. However, thick coatings, loose scale, or certain composite coatings may require removal for accurate measurement. We assess coating conditions and recommend the appropriate technique.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum thickness you can measure?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Minimum measurable thickness depends on material, probe frequency, and instrument capability. Typical range is 0.5 mm to 500+ mm. For very thin materials (< 1 mm), we use high-frequency probes and specialized instruments. For applications requiring measurement below standard limits, we recommend feasibility testing to confirm capability before survey commitment.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide thickness data in digital format?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—we provide thickness data in Excel, CSV, or database-compatible formats with location IDs, coordinates, readings, min/max/avg statistics, and color-coded maps. Data can be structured to import directly into your CMMS, RBI software, or integrity management system. Custom formats and templates are available upon request.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you measure hot piping or equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—we offer high-temperature thickness measurement using specialized delay-line probes and HT couplants for surfaces up to approximately 500°C (application and equipment dependent). This enables online inspection without cooldown, supporting operational continuity and reducing shutdown scope. Temperature limits and measurement accuracy are confirmed during planning based on specific conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you calculate corrosion rates?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Corrosion rate is calculated by comparing current thickness readings with baseline or previous inspection data, divided by the time interval: CR = (T₁ - T₂) / Δt. We use API 510, API 570, and API 653 methodologies to calculate short-term and long-term corrosion rates, project remaining life, and recommend next inspection intervals. Statistical analysis and trending charts are included in comprehensive reports.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are CMLs / TMLs and how are they established?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>CMLs (Corrosion Monitoring Locations) or TMLs (Thickness Monitoring Locations) are specific, permanently identified locations where thickness is periodically measured to track corrosion over time. Locations are selected based on corrosion susceptibility, process conditions, circuit analysis, and risk assessment. We help establish CML programs with location marking, baseline documentation, and periodic re-measurement schedules per API and RBI guidelines.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does a thickness survey cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cost depends on number of measurement locations, accessibility, surface preparation requirements, data deliverables, site location, and urgency. We provide detailed quotations based on scope definition. Contact us with your inspection requirements, layout/drawings, and timeline for a clear, competitive proposal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Accurate Thickness Data for Your Asset Integrity Program?</h2>
                <p>Contact us for consultation, scope planning, and a detailed thickness survey quotation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Calibrated Equipment</span>
                    <span><i class="fas fa-check"></i> Digital Data Packages</span>
                    <span><i class="fas fa-check"></i> API-Compliant Reporting</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT & Inspection Services</h2>
                <p>Complete integrity solutions for corrosion detection, assessment, and monitoring</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing (UT)</h3>
                    <p>Volumetric flaw detection for welds, forgings, and components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced corrosion mapping and imaging with phased array technology</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>Surface and general condition assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>RVI / Videoscope</h3>
                    <p>Internal visual inspection and documentation</p>
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