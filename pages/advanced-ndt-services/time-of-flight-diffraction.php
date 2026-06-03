<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Time of Flight Diffraction (TOFD) Testing Services | Alpha Sonix NDT Solutions";
$meta_description = "Expert TOFD inspection services for accurate flaw depth sizing and weld defect detection. ISO certified Time of Flight Diffraction testing with ASNT Level III technicians. Fast, precise, and code-compliant.";
$meta_keywords = "TOFD testing, time of flight diffraction, weld inspection, flaw sizing, crack depth measurement, ultrasonic testing, NDT services, defect detection, pipeline inspection, pressure vessel testing";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/time-of-flight-diffraction.php";
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
    <meta property="og:image" content="/www/assets/images/services/tofd-og.jpg">
    
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
        "serviceType": "Time of Flight Diffraction (TOFD) Testing",
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
        "description": "Professional Time of Flight Diffraction testing services for precise flaw sizing, weld inspection, and crack depth measurement across industrial applications."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/tofd-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>TOFD</span>
                </div>
                <h1 class="page-title">Time of Flight Diffraction (TOFD)</h1>
                <p class="page-subtitle">Precision ultrasonic technique for accurate flaw depth sizing and through-wall defect measurement</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-award"></i> ASME Sec V Certified</span>
                    <span class="badge"><i class="fas fa-ruler-combined"></i> ±0.5mm Sizing Accuracy</span>
                    <span class="badge"><i class="fas fa-globe"></i> API 1104 Approved</span>
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
                    <h3>Superior Sizing</h3>
                    <p>Measure defect through-wall height with ±0.5mm accuracy for critical flaw assessments</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h3>Full Volumetric Coverage</h3>
                    <p>100% weld volume inspection from a single side with complete root-to-cap examination</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>Permanent Records</h3>
                    <p>Digital A-scan and D-scan data storage for compliance, trending, and future reference</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3>Code Accepted</h3>
                    <p>Globally recognized per ASME Sec V, API 1104, BS 7706, ISO 10863, and EN 583</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS TOFD ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ADVANCED ULTRASONIC TECHNIQUE</span>
                    <h2>What is Time of Flight Diffraction (TOFD)?</h2>
                    <p class="lead">Time of Flight Diffraction (TOFD) is a highly accurate ultrasonic non-destructive testing method that measures the time taken for ultrasonic waves to travel from a transmitter probe, diffract from the tips of a defect, and arrive at a receiver probe.</p>
                    
                    <p>Unlike conventional pulse-echo ultrasonics that relies on reflection, TOFD utilizes the diffraction phenomenon. When an ultrasonic wave encounters a discontinuity (crack, lack of fusion, porosity), the defect tips act as point sources and diffract the sound wave in all directions. By precisely measuring the arrival time difference between the lateral wave (traveling along the surface) and the diffracted signals from the top and bottom of a flaw, TOFD calculates the exact through-wall position and height of defects.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Diffraction-Based Detection</strong>
                                <p>Detects flaw tips rather than reflecting surfaces for superior crack detection</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Through-Wall Height Measurement</strong>
                                <p>Accurately sizes vertical extent of defects critical for fitness-for-service</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High Probability of Detection (POD)</strong>
                                <p>Detects both volumetric and planar defects with 95%+ reliability</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>D-Scan Imaging</strong>
                                <p>Real-time cross-sectional view showing defect location and size graphically</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Key Advantage:</strong>
                            <p>TOFD provides the most accurate through-wall sizing of any ultrasonic technique, making it essential for Engineering Critical Assessments (ECA) and remaining life calculations.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Get Expert Consultation</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/tofd-principle.jpg" alt="TOFD Principle">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>TOFD probe configuration showing transmitter-receiver setup and diffraction pattern</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">±0.5mm</span>
                            <span class="stat-label">Sizing Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Volume Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Welds Inspected</span>
                        </div>
                    </div>
                    <div class="principle-diagram">
                        <h4><i class="fas fa-project-diagram"></i> TOFD Principle</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Transmitter emits compression wave</li>
                            <li><strong>2.</strong> Lateral wave travels surface to receiver</li>
                            <li><strong>3.</strong> Defect tips diffract ultrasound</li>
                            <li><strong>4.</strong> Backwall echo confirms through-wall</li>
                            <li><strong>5.</strong> Time difference calculates depth</li>
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
                <span class="section-label">WHY CHOOSE TOFD</span>
                <h2>Key Advantages of Time of Flight Diffraction</h2>
                <p>TOFD offers unmatched accuracy and reliability for critical flaw evaluation</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>Exceptional Sizing Accuracy</h3>
                    <p>Industry-leading ±0.5mm through-wall sizing precision enables accurate Engineering Critical Assessment (ECA), API 579 / ASME FFS-1 fitness-for-service evaluations, and reliable fracture mechanics calculations for defect acceptance criteria.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>High Probability of Detection</h3>
                    <p>Superior sensitivity to tight cracks, lack of fusion, and planar defects oriented perpendicular to the beam. TOFD detects defects as small as 1-2mm in height, significantly outperforming conventional UT and radiography for crack-like indications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Full Volumetric Inspection</h3>
                    <p>Single-sided access covers entire weld volume from root to cap in one scan pass. No rotation or multiple angles required. Inspects heat-affected zones (HAZ) and parent material adjacent to welds simultaneously for comprehensive integrity assessment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Rapid Inspection Speed</h3>
                    <p>Mechanized or manual scanning achieves 100% volumetric coverage faster than radiography. Typical pipeline girth weld inspected in 10-20 minutes. Automated systems scan at speeds up to 100mm/sec for large-scale projects with no film processing delays.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-radiation-alt"></i>
                    </div>
                    <h3>No Radiation Hazards</h3>
                    <p>Eliminates radiation safety concerns, exclusion zones, and licensing requirements associated with radiographic testing. Safe for continuous operation in populated or high-traffic areas without production shutdown or area evacuation protocols.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Permanent Digital Records</h3>
                    <p>Complete A-scan and D-scan data stored digitally for regulatory compliance, third-party review, trend analysis, and comparative re-inspection. Facilitates remote expert analysis and long-term structural health monitoring programs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TOFD vs OTHER METHODS ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPARATIVE ANALYSIS</span>
                <h2>TOFD vs. Other NDT Methods</h2>
                <p>Understanding when TOFD is the optimal inspection choice</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th><i class="fas fa-wave-square"></i> TOFD</th>
                            <th><i class="fas fa-signal"></i> Conventional UT</th>
                            <th><i class="fas fa-radiation"></i> Radiography (RT)</th>
                            <th><i class="fas fa-grip-horizontal"></i> PAUT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Sizing Accuracy</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> ±0.5mm (Excellent)</td>
                            <td class="good">±2-3mm (Good)</td>
                            <td class="poor">±5-10mm (Poor)</td>
                            <td class="excellent">±1mm (Excellent)</td>
                        </tr>
                        <tr>
                            <td><strong>Crack Detection</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                            <td class="good">Good</td>
                            <td class="poor">Poor</td>
                            <td class="excellent">Excellent</td>
                        </tr>
                        <tr>
                            <td><strong>Inspection Speed</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Fast</td>
                            <td class="average">Moderate</td>
                            <td class="poor">Slow</td>
                            <td class="excellent">Fast</td>
                        </tr>
                        <tr>
                            <td><strong>Volumetric Coverage</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> 100%</td>
                            <td class="average">60-80%</td>
                            <td class="excellent">100%</td>
                            <td class="excellent">100%</td>
                        </tr>
                        <tr>
                            <td><strong>Safety</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> No radiation</td>
                            <td class="excellent">No radiation</td>
                            <td class="poor">Radiation hazard</td>
                            <td class="excellent">No radiation</td>
                        </tr>
                        <tr>
                            <td><strong>Permanent Record</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Digital A/D-scan</td>
                            <td class="average">Limited</td>
                            <td class="good">Film/Digital</td>
                            <td class="excellent">Digital multi-scan</td>
                        </tr>
                        <tr>
                            <td><strong>Access Required</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Single side</td>
                            <td class="excellent">Single side</td>
                            <td class="poor">Two sides</td>
                            <td class="excellent">Single side</td>
                        </tr>
                        <tr>
                            <td><strong>Cost Effectiveness</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> High</td>
                            <td class="excellent">High</td>
                            <td class="poor">Low</td>
                            <td class="good">Medium</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-info-circle"></i>
                <p><strong>Recommendation:</strong> TOFD is often combined with PAUT for optimal results—TOFD provides superior through-wall sizing while PAUT offers excellent lateral positioning and characterization. This dual-technique approach is the industry standard for critical weld inspection.</p>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TOFD APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>Trusted TOFD inspection across critical infrastructure and manufacturing</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pipeline">Pipeline Welds</button>
                    <button class="tab-btn" data-tab="pressure">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="structural">Structural Welds</button>
                    <button class="tab-btn" data-tab="isi">In-Service Inspection</button>
                </div>

                <div class="tabs-content">
                    <!-- Pipeline Welds Tab -->
                    <div class="tab-panel active" id="pipeline">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/tofd-pipeline.jpg" alt="Pipeline TOFD Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline Girth Weld Inspection</h3>
                                <p>TOFD is the preferred method for onshore and offshore pipeline construction quality control. Approved by API 1104 Appendix A as an alternative to radiography, TOFD delivers faster, safer, and more reliable weld acceptance testing.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cross-country transmission pipeline welds</li>
                                    <li><i class="fas fa-check"></i> Offshore subsea pipeline tie-ins</li>
                                    <li><i class="fas fa-check"></i> Gathering and distribution line welds</li>
                                    <li><i class="fas fa-check"></i> Hot tap and repair welding verification</li>
                                    <li><i class="fas fa-check"></i> Clad and corrosion-resistant alloy (CRA) pipes</li>
                                    <li><i class="fas fa-check"></i> High-pressure gas and liquid pipelines</li>
                                    <li><i class="fas fa-check"></i> Automatic welding procedure qualification</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-trophy"></i>
                                    <div>
                                        <strong>Industry Standard:</strong>
                                        <p>Major pipeline operators including ONGC, GAIL, and IOC have adopted TOFD as primary weld inspection method, reducing project timelines by 40% compared to RT.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ASME B31.4</span>
                                    <span class="standard-tag">ASME B31.8</span>
                                    <span class="standard-tag">DNV-OS-F101</span>
                                    <span class="standard-tag">ISO 10863</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel" id="pressure">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/tofd-vessel.jpg" alt="Pressure Vessel TOFD">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessel & Boiler Inspection</h3>
                                <p>TOFD ensures weld integrity in pressure-containing equipment during fabrication and in-service inspection. Critical for high-temperature, high-pressure applications where catastrophic failure is unacceptable.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Longitudinal and circumferential seam welds</li>
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell welded connections</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger shell welds</li>
                                    <li><i class="fas fa-check"></i> Reactor vessel construction QC</li>
                                    <li><i class="fas fa-check"></i> Boiler drum and header welds</li>
                                    <li><i class="fas fa-check"></i> Storage tank shell and roof welds</li>
                                    <li><i class="fas fa-check"></i> Clad and overlay weld interface inspection</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-shield-alt"></i>
                                    <div>
                                        <strong>Safety Critical:</strong>
                                        <p>TOFD detects hydrogen-induced cracking (HIC), stress corrosion cracking (SCC), and fatigue cracks before they reach critical size, preventing unplanned shutdowns.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec VIII</span>
                                    <span class="standard-tag">ASME Sec V Art 6</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">EN 13588</span>
                                    <span class="standard-tag">ISO 16828</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Structural Welds Tab -->
                    <div class="tab-panel" id="structural">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/tofd-structural.jpg" alt="Structural TOFD">
                            </div>
                            <div class="tab-text">
                                <h3>Structural Steel Weld Inspection</h3>
                                <p>TOFD provides high-confidence weld quality assurance for bridges, buildings, offshore platforms, and heavy fabrications where structural integrity is paramount for public safety and asset protection.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bridge girder and truss connection welds</li>
                                    <li><i class="fas fa-check"></i> High-rise building column-beam joints</li>
                                    <li><i class="fas fa-check"></i> Offshore platform jacket and deck welds</li>
                                    <li><i class="fas fa-check"></i> Wind turbine tower section welds</li>
                                    <li><i class="fas fa-check"></i> Crane runway beam welded connections</li>
                                    <li><i class="fas fa-check"></i> Shipbuilding hull and bulkhead welds</li>
                                    <li><i class="fas fa-check"></i> Heavy machinery frame fabrication welds</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-hard-hat"></i>
                                    <div>
                                        <strong>Lifecycle Monitoring:</strong>
                                        <p>Baseline TOFD data enables comparison during periodic re-inspection to track crack growth and remaining fatigue life in cyclically loaded structures.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">AWS D1.5</span>
                                    <span class="standard-tag">BS 7706</span>
                                    <span class="standard-tag">EN 1714</span>
                                    <span class="standard-tag">ISO 23279</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- In-Service Inspection Tab -->
                    <div class="tab-panel" id="isi">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/tofd-isi.jpg" alt="In-Service TOFD">
                            </div>
                            <div class="tab-text">
                                <h3>In-Service & Risk-Based Inspection</h3>
                                <p>TOFD plays a critical role in asset integrity management programs, detecting and sizing service-induced degradation mechanisms to support fitness-for-service decisions and optimize inspection intervals.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stress corrosion cracking (SCC) detection</li>
                                    <li><i class="fas fa-check"></i> Hydrogen-induced cracking (HIC) monitoring</li>
                                    <li><i class="fas fa-check"></i> Fatigue crack growth tracking</li>
                                    <li><i class="fas fa-check"></i> Corrosion under insulation (CUI) assessment</li>
                                    <li><i class="fas fa-check"></i> Weld heat-affected zone (HAZ) cracking</li>
                                    <li><i class="fas fa-check"></i> Thermal/mechanical cycling damage evaluation</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service (FFS) data for ECA</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-chart-line"></i>
                                    <div>
                                        <strong>RBI Integration:</strong>
                                        <p>TOFD data feeds directly into Risk-Based Inspection (RBI) programs per API 580/581, enabling data-driven maintenance strategies and optimized inspection frequencies.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 579-1/ASME FFS-1</span>
                                    <span class="standard-tag">API 580</span>
                                    <span class="standard-tag">ASME Sec XI</span>
                                    <span class="standard-tag">BS 7910</span>
                                    <span class="standard-tag">NACE SP0308</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TECHNICAL CAPABILITIES ===================== -->
    <section class="capabilities-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL SPECIFICATIONS</span>
                <h2>Our TOFD Testing Capabilities</h2>
                <p>Advanced equipment and expertise for diverse applications</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cog"></i>
                        <h3>Material Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Carbon Steel:</span> API 5L, ASTM A516, SA105</li>
                        <li><span class="cap-label">Stainless Steel:</span> 304, 316, 321, Duplex</li>
                        <li><span class="cap-label">Low Alloy:</span> P11, P22, P91, 9Cr-1Mo</li>
                        <li><span class="cap-label">Nickel Alloys:</span> Inconel, Monel, Hastelloy</li>
                        <li><span class="cap-label">Aluminum:</span> 5000, 6000, 7000 series</li>
                        <li><span class="cap-label">Titanium:</span> Grade 2, Grade 5 (Ti-6Al-4V)</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler"></i>
                        <h3>Thickness Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Minimum:</span> 6mm (0.236")</li>
                        <li><span class="cap-label">Maximum:</span> 300mm (11.8")</li>
                        <li><span class="cap-label">Optimal Range:</span> 10-100mm</li>
                        <li><span class="cap-label">Clad Materials:</span> Base + 3mm overlay</li>
                        <li><span class="cap-label">Pipe Diameter:</span> 2" to 60" OD</li>
                        <li><span class="cap-label">Multi-layer:</span> Up to 150 weld passes</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search-plus"></i>
                        <h3>Detection & Sizing</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Minimum Defect Height:</span> 1mm</li>
                        <li><span class="cap-label">Sizing Accuracy:</span> ±0.5mm or ±10% (whichever greater)</li>
                        <li><span class="cap-label">Depth Accuracy:</span> ±1mm through-wall position</li>
                        <li><span class="cap-label">POD (Probability of Detection):</span> >95% per DNV-RP-G103</li>
                        <li><span class="cap-label">Lateral Resolution:</span> 2-3mm along weld</li>
                        <li><span class="cap-label">Dead Zones:</span> <2mm near surface and backwall</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-tools"></i>
                        <h3>Equipment & Technology</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">TOFD Instruments:</span> Olympus OmniScan, Sonatest Sitescan</li>
                        <li><span class="cap-label">Probe Frequencies:</span> 2.25, 5, 7.5, 10, 15 MHz</li>
                        <li><span class="cap-label">Probe Separation (PCS):</span> 50mm to 300mm</li>
                        <li><span class="cap-label">Scanning:</span> Manual, semi-automated, fully automated</li>
                        <li><span class="cap-label">Encoders:</span> Magnetic wheel, linear, rotary</li>
                        <li><span class="cap-label">Software:</span> TomoView, UltraVision, WeldSight</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-book"></i>
                        <h3>Standards & Codes</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">ASME:</span> Sec V Art 6, Sec VIII, Sec XI</li>
                        <li><span class="cap-label">API:</span> 1104 App A, 579-1/FFS-1, 580, 581</li>
                        <li><span class="cap-label">ISO:</span> 10863, 16828, 16823, 23279</li>
                        <li><span class="cap-label">EN/BS:</span> EN 583-6, BS 7706, EN 1714</li>
                        <li><span class="cap-label">AWS:</span> D1.1, D1.5, D1.6</li>
                        <li><span class="cap-label">DNV:</span> OS-F101, RP-G103</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clock"></i>
                        <h3>Service Options</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Field Services:</span> Onsite inspection nationwide</li>
                        <li><span class="cap-label">Lab Testing:</span> Controlled environment analysis</li>
                        <li><span class="cap-label">Emergency:</span> 24/7 rapid response available</li>
                        <li><span class="cap-label">Reporting:</span> Preliminary within 4 hours</li>
                        <li><span class="cap-label">Final Reports:</span> Comprehensive within 48 hours</li>
                        <li><span class="cap-label">Data Storage:</span> 10 years minimum retention</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TOFD PROCEDURE ===================== -->
    <section class="procedure-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION WORKFLOW</span>
                <h2>TOFD Inspection Procedure</h2>
                <p>Systematic approach ensuring accurate, repeatable results</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning</h3>
                        <p>Review drawings, specifications, and acceptance criteria. Develop written procedure per ASME Sec V Article 6 or applicable code. Select probe frequency, PCS, and scan increment based on material thickness and defect size requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Approved TOFD Procedure & Calibration Plan
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Surface Preparation & Setup</h3>
                        <p>Clean weld and adjacent surface to remove weld spatter, scale, and contaminants. Grind if necessary for smooth probe travel. Mark scan start/end positions and apply couplant. Position probes at calculated PCS distance using wedge holders or magnetic fixtures.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Surface Prep Documentation & Setup Photos
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>System Calibration</h3>
                        <p>Calibrate velocity using reference block with known thickness. Verify lateral wave, backwall echo, and sensitivity using calibration block with side-drilled holes or notches. Confirm amplitude, time-base, and gain settings meet procedure requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Calibration Report with A-scan Images
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Data Acquisition Scanning</h3>
                        <p>Perform manual, semi-automated, or automated scanning along weld length. Maintain consistent coupling and scan speed. Encoder tracks position for D-scan image creation. Monitor lateral wave and backwall continuity. Re-scan areas showing indications with reduced scan increment.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Complete A-scan & D-scan Data Files
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Data Analysis & Sizing</h3>
                        <p>Level II/III analyst reviews D-scan for indications. Measure time-of-flight differences between defect tip signals and lateral wave/backwall. Calculate through-wall height, depth from surface, and lateral extent. Classify defects per acceptance criteria (e.g., API 1104 Table A.1).</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Defect Sizing Worksheet & Classification
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting & Documentation</h3>
                        <p>Generate comprehensive report including procedure reference, calibration data, D-scan images with indication annotations, defect sizing summary, and accept/reject decision per code. Include recommendations for repair or further evaluation if needed.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> ASME/API Compliant Final Inspection Report
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
                <h2>Your TOFD Inspection Partner of Choice</h2>
                <p>Uncompromising quality, technical excellence, and customer focus</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Expert Personnel</h3>
                    <p>ASNT Level II & III certified TOFD specialists with 10+ years field experience. API 1104 Appendix A qualified inspectors. Dedicated Level III for procedure development and data analysis.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Latest Technology</h3>
                    <p>Olympus OmniScan X3 64, Sonatest Sitescan 250S, and advanced analysis software. Annual equipment calibration traceable to national standards. Probe inventory covering all applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>ISO 17025 Accredited Lab</h3>
                    <p>NABL accredited testing laboratory for TOFD per ISO 10863 and ASME Sec V. Third-party audited quality management system ensures consistent, traceable results meeting international standards.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Fast Turnaround</h3>
                    <p>Preliminary reports within 4 hours for critical projects. Final comprehensive reports within 48 hours. Emergency/breakdown support with 24/7 mobilization capability across India.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Consultative Approach</h3>
                    <p>Free pre-job consultation and procedure review. Engineering support for acceptance criteria, fitness-for-service, and repair strategies. Post-inspection technical discussions with clients.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h3>Transparent Pricing</h3>
                    <p>Detailed quotations with no hidden costs. Volume pricing for long-term contracts. Flexible payment terms. Cost savings demonstrated compared to radiography for equivalent or superior data quality.</p>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Certifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-17025.png" alt="ISO 17025">
                        <span>ISO 17025 Accredited</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                        <span>ISO 9001:2015</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                        <span>ASNT Level III</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/nabl.png" alt="NABL">
                        <span>NABL Accredited</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/pci.png" alt="PCI">
                        <span>PCI Certified</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>TOFD Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between TOFD and PAUT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD uses two single-element probes (transmitter and receiver) positioned on opposite sides of the weld and measures diffracted waves from defect tips to calculate through-wall height with ±0.5mm accuracy. PAUT uses a multi-element phased array probe that electronically steers and focuses the beam for imaging and lateral positioning. TOFD excels at precise depth sizing; PAUT excels at lateral positioning and defect characterization. They are often used together for comprehensive weld inspection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can TOFD replace radiography (RT)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, TOFD is an approved alternative to radiography per API 1104 Appendix A, ASME Sec VIII Division 1 Mandatory Appendix 12, and other codes. TOFD offers superior crack detection, faster inspection, no radiation safety concerns, and better through-wall sizing compared to RT. Many companies worldwide have fully transitioned from RT to TOFD for weld acceptance testing with improved reliability and reduced costs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum material thickness for TOFD?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD is typically effective from 6mm (0.236") thickness upward. Below 6mm, the lateral wave and backwall echo overlap making interpretation difficult. For thin materials (3-6mm), high-frequency probes (10-15 MHz) with small probe center separation (PCS) can be used, but conventional UT or PAUT may be more suitable. TOFD is optimal for 10-100mm thickness range.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is TOFD for defect sizing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD provides through-wall height sizing accuracy of ±0.5mm or ±10% of defect height (whichever is greater) according to ISO 16828 and validation studies. This makes TOFD the most accurate ultrasonic technique for measuring vertical extent of defects—critical for Engineering Critical Assessment (ECA) and fracture mechanics calculations per API 579-1/ASME FFS-1.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of defects can TOFD detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD detects both volumetric defects (porosity, inclusions) and planar defects (cracks, lack of fusion, incomplete penetration). It is particularly sensitive to tight cracks perpendicular to the beam—the most critical flaw orientation. TOFD excels at detecting: fabrication defects (lack of fusion, incomplete penetration, slag inclusions); service-induced defects (fatigue cracks, SCC, HIC); and HAZ cracking. It is less effective for laminar defects parallel to the beam path.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does TOFD inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>A typical pipeline girth weld (e.g., 24" diameter, 12mm wall) takes 10-20 minutes for TOFD data acquisition compared to 1-2 hours setup and 4-6 hours film processing for radiography. Automated TOFD systems can scan at 50-100mm/sec. Analysis and reporting add 30-60 minutes per weld depending on complexity. Overall project time is reduced 40-60% compared to RT.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is TOFD suitable for austenitic stainless steel welds?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD can be used on austenitic stainless steel but with limitations due to coarse grain structure causing beam scattering and attenuation. Success depends on grain size, weld heat input, and material specification. For challenging austenitic welds, PAUT with lower frequencies (2.25-5 MHz) or TOFD combined with PAUT may provide better results. Solution-annealed fine-grain austenitic materials yield acceptable TOFD results.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide TOFD training and certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive TOFD training per ASNT SNT-TC-1A, ISO 9712, or customer-specific requirements for Level I and Level II personnel. Training includes: TOFD theory and physics, equipment operation, procedure development, calibration, data acquisition, A-scan and D-scan interpretation, defect sizing calculations, code requirements, and hands-on practical exercises. Level III consultation for procedure qualification and personnel certification exams is available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Precise Defect Sizing for Critical Assets?</h2>
                <p>Get expert TOFD inspection services backed by ISO 17025 accreditation and 15+ years experience</p>
                <center >
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free Technical Consultation</span>
                    <span><i class="fas fa-check"></i> Same-Day Quotation</span>
                    <span><i class="fas fa-check"></i> 24/7 Emergency Service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary NDT Services</h2>
                <p>Comprehensive inspection solutions for complete asset integrity</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Phased Array for multi-angle imaging and lateral defect positioning</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/aut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AUT</h3>
                    <p>Automated Ultrasonic Testing for high-speed weld scanning</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Conventional UT</h3>
                    <p>Ultrasonic flaw detection and thickness measurement services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/rt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Radiography</h3>
                    <p>Digital and film radiographic weld and casting inspection</p>
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
