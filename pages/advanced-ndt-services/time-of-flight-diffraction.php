<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "TOFD Testing Services | Time of Flight Diffraction Weld Inspection | Alpha Sonix NDT Solutions";
$meta_description = "Professional Time of Flight Diffraction (TOFD) testing for weld inspection and accurate through-wall flaw sizing. Code-compliant inspections by certified Level II & Level III personnel with clear D-scan reporting for engineering and integrity decisions.";
$meta_keywords = "TOFD testing, time of flight diffraction, TOFD weld inspection, through-wall sizing, flaw depth sizing, crack sizing, ultrasonic testing, NDT services, API 1104 TOFD, ASME Section V TOFD";
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
        "description": "Time of Flight Diffraction (TOFD) testing for weld inspection and accurate through-wall flaw sizing with D-scan imaging, supporting fabrication QA/QC and in-service integrity assessments."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/TOFD/tofd1.png');"></div>
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
                <p class="page-subtitle">High-accuracy ultrasonic weld inspection for dependable through-wall sizing and engineering-grade decision making</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-award"></i> ASME Section V / ISO Technique Aligned</span>
                    <span class="badge"><i class="fas fa-ruler-combined"></i> Accurate Through-Wall Flaw Sizing</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> No Radiation, Faster Workflow vs RT</span>
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
                    <h3>Reliable Through-Wall Sizing</h3>
                    <p>Measures defect tip diffraction to estimate flaw height and through-wall position—valuable for ECA/FFS and integrity decisions.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h3>Volumetric Weld Coverage</h3>
                    <p>Provides comprehensive weld volume examination (root to cap) in a systematic scan, with consistent coverage across the inspection zone.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>Recorded Digital Data</h3>
                    <p>Stored A-scan and D-scan data supports traceability, third-party review, trending, and future comparison during re-inspection.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3>Code & Standard Acceptance</h3>
                    <p>Applied in line with recognized practices such as ASME Sec V, API 1104 App A, ISO 10863/16828, and BS 7706.</p>
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
                    <p class="lead">Time of Flight Diffraction (TOFD) is an advanced ultrasonic NDT method that detects and sizes flaws by measuring the time taken for ultrasonic waves to diffract from defect tips and reach a receiving probe.</p>
                    
                    <p>Unlike conventional pulse-echo UT, which relies primarily on reflected signals, TOFD uses a transmitter and receiver probe placed on opposite sides of the weld. When sound encounters a discontinuity (such as a crack or lack of fusion), the defect tips behave like point sources and generate diffracted signals. By analyzing the time-of-flight difference between the lateral wave, diffracted signals, and backwall echo, TOFD can estimate the flaw’s through-wall location and height with high repeatability when executed using qualified procedures.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Tip-Diffraction Sensitivity</strong>
                                <p>Detects flaw tips—especially valuable for crack-like indications and lack of fusion.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Through-Wall Height Estimation</strong>
                                <p>Supports sizing of the vertical extent of defects used in acceptance criteria and engineering assessments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High POD with Qualified Technique</strong>
                                <p>High probability of detection for relevant planar and volumetric indications when applied within validated limits.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>D-Scan Imaging</strong>
                                <p>Cross-sectional imaging (D-scan) helps visualize defect position and size for clear reporting.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Where TOFD Adds the Most Value:</strong>
                            <p>TOFD is widely selected when accurate through-wall sizing is required for Engineering Critical Assessment (ECA) and fitness-for-service evaluations—often combined with PAUT for complete characterization and positioning.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Get Expert Consultation</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/TOFD/tofd2.png" alt="TOFD Principle">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>TOFD transmitter/receiver setup illustrating diffraction from defect tips</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">±0.5mm</span>
                            <span class="stat-label">Typical Height Sizing (Application Dependent)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Weld Volume Coverage (Qualified Setup)</span>
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
                            <li><strong>2.</strong> Lateral wave travels along the surface</li>
                            <li><strong>3.</strong> Defect tips diffract ultrasound</li>
                            <li><strong>4.</strong> Backwall echo confirms wall thickness reference</li>
                            <li><strong>5.</strong> Time differences support depth/height estimation</li>
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
                <p>Engineered for sizing, repeatability, and reliable documentation for critical weld evaluation</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>High-Confidence Flaw Sizing</h3>
                    <p>Accurate through-wall sizing supports Engineering Critical Assessment (ECA), API 579 / ASME FFS-1 evaluations, and acceptance decisions based on defect height.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Strong Crack-Like Indication Detection</h3>
                    <p>Excellent sensitivity to planar defects such as cracks and lack of fusion—especially where radiography may be less effective.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Volumetric Inspection in a Single Pass</h3>
                    <p>With proper probe selection and PCS, TOFD can cover the complete weld volume and adjacent HAZ in a systematic scan.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Efficient Inspection & No Film Delays</h3>
                    <p>Immediate results without film processing or radiation controls—helping keep fabrication and shutdown schedules on track.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-radiation-alt"></i>
                    </div>
                    <h3>No Radiation Hazards</h3>
                    <p>Eliminates exclusion zones, radiation permits, and shutdown constraints typically associated with RT—improving site safety and productivity.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Recorded & Auditable Data</h3>
                    <p>Digital A-scan and D-scan records support compliance, review, and long-term integrity monitoring programs.</p>
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
                <p>Choosing the right method depends on what you need to detect, size, and document</p>
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
                            <td><strong>Through-Wall Sizing</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                            <td class="good">Good</td>
                            <td class="poor">Limited</td>
                            <td class="good">Good (Technique Dependent)</td>
                        </tr>
                        <tr>
                            <td><strong>Crack / LOF Detection</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                            <td class="good">Good</td>
                            <td class="poor">Often Limited</td>
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
                            <td class="excellent"><i class="fas fa-star"></i> 100% (Qualified Setup)</td>
                            <td class="average">Technique Dependent</td>
                            <td class="excellent">High (Project Dependent)</td>
                            <td class="excellent">High</td>
                        </tr>
                        <tr>
                            <td><strong>Safety</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> No radiation</td>
                            <td class="excellent">No radiation</td>
                            <td class="poor">Radiation controls</td>
                            <td class="excellent">No radiation</td>
                        </tr>
                        <tr>
                            <td><strong>Permanent Record</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Digital A/D-scan</td>
                            <td class="average">Limited (Unless Recorded)</td>
                            <td class="good">Film/Digital</td>
                            <td class="excellent">Digital Multi-Scan</td>
                        </tr>
                        <tr>
                            <td><strong>Access Required</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Single side</td>
                            <td class="excellent">Single side</td>
                            <td class="poor">Often two sides / clearance</td>
                            <td class="excellent">Single side</td>
                        </tr>
                        <tr>
                            <td><strong>Cost Effectiveness</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> High</td>
                            <td class="excellent">High</td>
                            <td class="poor">Lower (Logistics/Safety)</td>
                            <td class="good">Medium–High</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-info-circle"></i>
                <p><strong>Best Practice:</strong> For critical welds, TOFD is often paired with PAUT—TOFD provides dependable through-wall sizing while PAUT improves characterization and lateral positioning. This combination is widely used in advanced ultrasonic weld inspection programs.</p>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TOFD APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>TOFD inspection for fabrication QA/QC, commissioning, and in-service integrity programs</p>
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
                                <p>TOFD is widely used for pipeline construction quality control and can be applied as per project specification and code allowances (e.g., API 1104 Appendix A). It provides rapid results, strong crack detection capability, and clear digital documentation.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cross-country transmission pipeline welds</li>
                                    <li><i class="fas fa-check"></i> Offshore / subsea pipeline tie-ins (access permitting)</li>
                                    <li><i class="fas fa-check"></i> Gathering and distribution line welds</li>
                                    <li><i class="fas fa-check"></i> Hot tap and repair welding verification</li>
                                    <li><i class="fas fa-check"></i> Clad and CRA pipe weld inspections (application dependent)</li>
                                    <li><i class="fas fa-check"></i> High-pressure gas and liquid pipeline welding</li>
                                    <li><i class="fas fa-check"></i> Welding procedure qualification support (as specified)</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-trophy"></i>
                                    <div>
                                        <strong>Project Advantage:</strong>
                                        <p>Compared with radiography, TOFD can reduce logistics and waiting time by eliminating radiation controls and film processing, while providing recorded, reviewable ultrasonic data.</p>
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
                                <p>TOFD supports weld integrity verification in pressure-containing equipment during fabrication and in-service inspections—where accurate sizing and reliable records are essential for safe operation.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Longitudinal and circumferential seam welds</li>
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell welded connections</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger shell welds</li>
                                    <li><i class="fas fa-check"></i> Reactor vessel fabrication QC</li>
                                    <li><i class="fas fa-check"></i> Boiler drum and header welds</li>
                                    <li><i class="fas fa-check"></i> Storage tank shell and roof welds</li>
                                    <li><i class="fas fa-check"></i> Clad and overlay interface evaluations (as applicable)</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-shield-alt"></i>
                                    <div>
                                        <strong>Integrity Focused:</strong>
                                        <p>TOFD data can support defect acceptance, repair planning, and remaining life evaluations when combined with appropriate engineering assessment.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec VIII</span>
                                    <span class="standard-tag">ASME Sec V Art 6</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">ISO 16828</span>
                                    <span class="standard-tag">BS 7706</span>
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
                                <p>For critical structural fabrications, TOFD contributes high-confidence weld QA by detecting and sizing relevant imperfections with recorded, reviewable data.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bridge girder and truss connection welds</li>
                                    <li><i class="fas fa-check"></i> Building column-beam joint welds</li>
                                    <li><i class="fas fa-check"></i> Offshore platform jacket and deck welds</li>
                                    <li><i class="fas fa-check"></i> Wind turbine tower section welds</li>
                                    <li><i class="fas fa-check"></i> Crane runway beam welded connections</li>
                                    <li><i class="fas fa-check"></i> Shipbuilding hull and bulkhead welds</li>
                                    <li><i class="fas fa-check"></i> Heavy machinery frame fabrication welds</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-hard-hat"></i>
                                    <div>
                                        <strong>Baseline for Re-Inspection:</strong>
                                        <p>Recorded TOFD data provides a strong baseline for periodic inspection—helpful for monitoring crack growth in cyclic service.</p>
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
                                <p>TOFD supports asset integrity programs by detecting and sizing service-induced degradation—supplying inputs for fitness-for-service, repair strategy, and inspection interval optimization.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stress corrosion cracking (SCC) assessment (application dependent)</li>
                                    <li><i class="fas fa-check"></i> Hydrogen-related cracking evaluations (application dependent)</li>
                                    <li><i class="fas fa-check"></i> Fatigue crack growth monitoring</li>
                                    <li><i class="fas fa-check"></i> Weld HAZ cracking screening</li>
                                    <li><i class="fas fa-check"></i> Thermal/mechanical cycling damage evaluation</li>
                                    <li><i class="fas fa-check"></i> Inputs for ECA / FFS decision making</li>
                                    <li><i class="fas fa-check"></i> Documentation for integrity and audit records</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-chart-line"></i>
                                    <div>
                                        <strong>RBI Integration:</strong>
                                        <p>Inspection findings can be integrated into RBI frameworks (e.g., API 580/581) to support data-driven maintenance planning.</p>
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
                <p>Qualified equipment, trained personnel, and documented workflows for consistent results</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cog"></i>
                        <h3>Material Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Carbon Steel:</span> API 5L, ASTM A516, SA105</li>
                        <li><span class="cap-label">Stainless Steel:</span> 304, 316, 321, Duplex (application dependent)</li>
                        <li><span class="cap-label">Low Alloy:</span> P11, P22, P91, 9Cr-1Mo</li>
                        <li><span class="cap-label">Nickel Alloys:</span> Inconel, Monel, Hastelloy (application dependent)</li>
                        <li><span class="cap-label">Aluminum:</span> 5000, 6000, 7000 series</li>
                        <li><span class="cap-label">Titanium:</span> Grade 2, Grade 5 (Ti-6Al-4V) (application dependent)</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler"></i>
                        <h3>Thickness Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Typical Minimum:</span> 6mm (0.236")</li>
                        <li><span class="cap-label">Maximum:</span> 300mm (11.8")</li>
                        <li><span class="cap-label">Optimal Range:</span> 10–100mm</li>
                        <li><span class="cap-label">Clad Materials:</span> Base + overlay (as qualified)</li>
                        <li><span class="cap-label">Pipe Diameter:</span> 2" to 60" OD</li>
                        <li><span class="cap-label">Multi-pass Welds:</span> Suitable with validated procedure and scan plan</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search-plus"></i>
                        <h3>Detection & Sizing</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Minimum Defect Height:</span> ~1mm (application dependent)</li>
                        <li><span class="cap-label">Sizing Accuracy:</span> ±0.5mm or ±10% (whichever greater, as qualified)</li>
                        <li><span class="cap-label">Depth Accuracy:</span> ±1mm (typical, application dependent)</li>
                        <li><span class="cap-label">POD (Probability of Detection):</span> >95% (technique dependent; project-specific)</li>
                        <li><span class="cap-label">Lateral Resolution:</span> Typically 2–3mm along weld (setup dependent)</li>
                        <li><span class="cap-label">Dead Zones:</span> Near-surface/backwall zones managed by setup & complementary methods</li>
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
                        <li><span class="cap-label">Scanning:</span> Manual, semi-automated, automated</li>
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
                        <li><span class="cap-label">ISO:</span> 10863, 16828, 23279</li>
                        <li><span class="cap-label">EN/BS:</span> EN 583-6, BS 7706, EN 1714</li>
                        <li><span class="cap-label">AWS:</span> D1.1, D1.5, D1.6</li>
                        <li><span class="cap-label">DNV:</span> OS-F101, RP-G103 (as applicable)</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clock"></i>
                        <h3>Service Options</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Field Services:</span> Onsite inspection nationwide</li>
                        <li><span class="cap-label">Lab Testing:</span> Controlled environment analysis (where applicable)</li>
                        <li><span class="cap-label">Emergency:</span> 24/7 rapid response available</li>
                        <li><span class="cap-label">Reporting:</span> Preliminary as agreed by project need</li>
                        <li><span class="cap-label">Final Reports:</span> Comprehensive delivery per contract timeline</li>
                        <li><span class="cap-label">Data Storage:</span> Secure retention for traceability (project dependent)</li>
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
                <p>A disciplined workflow to ensure accuracy, repeatability, and clear documentation</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning</h3>
                        <p>Review drawings, specifications, and acceptance criteria. Prepare the written technique/procedure per ASME Sec V Article 6 or applicable code. Select probe frequency, PCS, and scan increment based on thickness, weld profile, and required detection/sizing performance.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> TOFD Procedure / Technique Sheet & Calibration Plan
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Surface Preparation & Setup</h3>
                        <p>Clean the weld and adjacent surfaces for stable probe travel and consistent coupling. Mark scan limits, set the probe separation, and confirm alignment to the weld centerline using suitable holders/fixtures.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Setup Verification Notes (as required)
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>System Calibration</h3>
                        <p>Calibrate velocity and time-base using reference blocks. Verify lateral wave and backwall references, and confirm sensitivity and resolution using known reflectors (e.g., SDH/notches) as required by the procedure.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Calibration Records with Screenshots
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Data Acquisition Scanning</h3>
                        <p>Perform manual or encoded scanning along the weld. Maintain stable coupling and consistent scan speed. Re-scan any areas requiring confirmation or enhanced resolution as per procedure.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Recorded A-scan & D-scan Data Files
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Analysis & Sizing</h3>
                        <p>Review D-scan images for indications and measure time-of-flight differences for defect tip signals. Estimate defect height, through-wall location, and length as required. Classify results per project acceptance criteria and applicable code.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Sizing Summary & Acceptance Evaluation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting & Documentation</h3>
                        <p>Issue a clear inspection report referencing procedure, equipment, calibration, scan coverage, D-scan images (annotated), indication evaluation, and accept/reject status. Provide recommendations for repair, monitoring, or complementary techniques where needed.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Code/Spec Compliant Final Inspection Report
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
                <p>Practical field expertise, disciplined QA, and reports engineered for clarity and auditability</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Qualified Personnel</h3>
                    <p>Certified Level II & Level III personnel supporting procedure selection, execution, analysis, and client technical discussions—focused on accuracy, repeatability, and code compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Modern Equipment & Tools</h3>
                    <p>Reliable TOFD instruments, calibrated probes, and professional analysis software to deliver consistent D-scan imaging and documented results.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Quality-Driven Execution</h3>
                    <p>Inspection workflows aligned to standards and client specifications, with calibration control, traceable records, and structured reporting.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Fast Mobilization & Reporting</h3>
                    <p>Responsive scheduling and practical site execution. Reporting turnaround aligned to your project needs and inspection volume.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Consultative Support</h3>
                    <p>Upfront technical consultation on method selection (TOFD/PAUT/UT), acceptance criteria alignment, and inspection planning to reduce rework and delays.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h3>Transparent Quotations</h3>
                    <p>Clear scope-based pricing with defined deliverables—optimized to deliver inspection confidence without unnecessary cost.</p>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Certifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-17025.png" alt="ISO 17025">
                        <span>ISO 17025 (Where Applicable)</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                        <span>ISO 9001:2015</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                        <span>Level III Support</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/nabl.png" alt="NABL">
                        <span>NABL (Where Applicable)</span>
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
                        <p>TOFD uses a transmitter and receiver to capture diffracted signals from defect tips—making it highly effective for through-wall sizing. PAUT uses a multi-element probe to steer and focus the beam for multi-angle imaging, characterization, and accurate lateral positioning. For critical welds, they are often used together: TOFD for sizing and PAUT for characterization/positioning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can TOFD replace radiography (RT)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>In many applications, TOFD can be accepted as an alternative to RT—subject to the governing code, client specification, and procedure qualification. TOFD eliminates radiation hazards and provides recorded digital data with strong sensitivity to crack-like defects.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum material thickness for TOFD?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD is commonly applied from about 6mm thickness and above. Below this, near-surface and backwall signal separation becomes challenging. For thin sections, high-frequency setups may work, but PAUT or conventional UT may be more practical depending on the application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is TOFD for defect sizing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>When performed with a qualified procedure, TOFD can provide excellent defect height sizing repeatability (often cited around ±0.5mm or ±10% depending on the standard and application). Actual accuracy depends on thickness, material, geometry, setup, and defect type.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of defects can TOFD detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD is effective for detecting and sizing many weld imperfections, including cracks, lack of fusion, incomplete penetration, and inclusions. It is especially valuable for crack-like planar indications. Some orientations and near-surface zones may require complementary techniques (often PAUT) for best overall coverage.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does TOFD inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Timing depends on weld size, access, scan length, and whether encoded scanning is specified. Many welds can be scanned quickly with results available immediately after acquisition, and reporting provided as per agreed turnaround.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is TOFD suitable for austenitic stainless steel welds?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>TOFD can be applied to austenitic stainless steels, but performance may be affected by grain structure and attenuation. Feasibility is application-dependent. In challenging cases, PAUT at lower frequencies or a combined TOFD+PAUT approach may provide better reliability.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide TOFD training and certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide training support covering TOFD fundamentals, equipment operation, calibration, scanning, and interpretation practices. Training scope can be tailored to your internal qualification program and applicable guidelines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Accurate Through-Wall Sizing for Critical Welds?</h2>
                <p>Request a TOFD quote with clear deliverables, code alignment, and recorded D-scan reporting</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Technical Consultation</span>
                    <span><i class="fas fa-check"></i> Quick Quotation</span>
                    <span><i class="fas fa-check"></i> Nationwide Mobilization</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary NDT Services</h2>
                <p>Combine the right methods for stronger coverage, better characterization, and higher confidence</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Phased Array for multi-angle imaging, positioning, and characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/aut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AUT</h3>
                    <p>Automated UT for high-speed, repeatable inspection coverage</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Conventional UT</h3>
                    <p>Routine ultrasonic flaw detection and thickness measurement</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/rt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Radiography</h3>
                    <p>Film and digital radiographic inspection where specified</p>
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
