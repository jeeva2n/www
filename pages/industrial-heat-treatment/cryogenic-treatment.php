<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Cryogenic Treatment Services | Deep Freeze Heat Treatment | Alpha Sonix NDT Solutions";
$meta_description = "Professional cryogenic treatment services including deep freezing (-190°C) for retained austenite transformation, wear resistance improvement, and dimensional stabilization of steels, tool steels, and carbides.";
$meta_keywords = "cryogenic treatment, deep cryogenic treatment, sub-zero treatment, cryo treatment, retained austenite transformation, wear resistance improvement, dimensional stabilization, cold treatment, cryogenic processing";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/cryogenic-treatment.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/cryogenic-og.jpg">
    
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
        "serviceType": "Cryogenic Treatment Services",
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
        "description": "Professional cryogenic treatment services including deep freezing (-190°C) for retained austenite transformation, wear resistance improvement, and dimensional stabilization."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/cryogenic-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Cryogenic Treatment</span>
                </div>
                <h1 class="page-title">Cryogenic Treatment Services</h1>
                <p class="page-subtitle">Professional deep cryogenic treatment (-190°C) for retained austenite transformation, wear resistance improvement, and dimensional stabilization of steels, tool steels, and carbides</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-thermometer-empty"></i> Deep Cryogenic -190°C</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Wear Resistance</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> Dimensional Stability</span>
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
                        <i class="fas fa-thermometer-empty"></i>
                    </div>
                    <h3>Deep Cryogenic Treatment</h3>
                    <p>Controlled cooling to -190°C (-310°F) using liquid nitrogen for complete retained austenite transformation and property enhancement.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Wear Resistance Improvement</h3>
                    <p>Increases wear resistance by 50-300% through formation of fine eta carbides and complete martensite transformation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Dimensional Stability</h3>
                    <p>Eliminates retained austenite that causes dimensional changes during service for precision components.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stress Relief</h3>
                    <p>Reduces internal stresses and improves microstructural uniformity for enhanced mechanical properties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS CRYOGENIC TREATMENT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">DEEP FREEZE PROCESSING</span>
                    <h2>What is Cryogenic Treatment?</h2>
                    <p class="lead">Cryogenic treatment is a deep freezing process that subjects materials to extremely low temperatures (-190°C / -310°F) to transform retained austenite to martensite, precipitate fine carbides, and improve wear resistance, dimensional stability, and mechanical properties.</p>
                    
                    <p>After conventional heat treatment (quenching and tempering), significant amounts of retained austenite (5-30%) remain in many steels, especially tool steels and high-carbon alloys. This unstable phase causes dimensional changes during service and reduces wear resistance and hardness.</p>

                    <p>Our cryogenic treatment services use computer-controlled liquid nitrogen systems to slowly cool components to -190°C, hold for extended periods, and gradually return to ambient temperature. This process completely transforms retained austenite and precipitates fine eta carbides for superior wear resistance and dimensional stability.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Complete Retained Austenite Transformation</strong>
                                <p>Deep cryogenic treatment eliminates 95-100% of retained austenite, preventing dimensional changes during service.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Fine Carbide Precipitation</strong>
                                <p>Formation of uniform, fine eta carbides (η-carbides) significantly improves wear resistance and edge retention.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Improved Hardness & Strength</strong>
                                <p>Additional martensite formation increases hardness by 1-3 HRC while improving toughness and fatigue resistance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Stress Relief</strong>
                                <p>Deep cryogenic treatment reduces internal stresses and improves microstructural uniformity throughout the component.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-snowflake"></i>
                        <div>
                            <strong>Advanced Property Enhancement:</strong>
                            <p>Cryogenic treatment increases tool life by 200-400% for cutting tools and dies, improves wear resistance by 50-300%, and completely eliminates dimensional instability from retained austenite transformation—essential for precision components, bearings, and high-performance tools.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Cryogenic Treatment</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/cryogenic-chamber.jpg" alt="Cryogenic Chamber">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Computer-controlled cryogenic treatment chamber with liquid nitrogen system</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">-190°C</span>
                            <span class="stat-label">Deep Cryo Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">200-400%</span>
                            <span class="stat-label">Tool Life Increase</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">95-100%</span>
                            <span class="stat-label">RA Elimination</span>
                        </div>
                    </div>
                    
                    <div class="cryo-benefits">
                        <h4><i class="fas fa-star"></i> Cryogenic Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Wear resistance improvement</li>
                            <li><i class="fas fa-check"></i> Dimensional stability</li>
                            <li><i class="fas fa-check"></i> Extended tool life</li>
                            <li><i class="fas fa-check"></i> Retained austenite elimination</li>
                            <li><i class="fas fa-check"></i> Improved fatigue strength</li>
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
                <span class="section-label">WHY CRYOGENIC TREATMENT MATTERS</span>
                <h2>Key Advantages of Professional Cryogenic Processing</h2>
                <p>Achieve superior wear resistance and dimensional stability</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Wear Resistance Improvement</h3>
                    <p>Increases wear resistance by 50-300% through fine carbide precipitation and complete martensite transformation for longer component life.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Dimensional Stability</h3>
                    <p>Eliminates retained austenite that causes expansion and distortion during service—critical for precision gauges, bearings, and aerospace components.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Extended Tool Life</h3>
                    <p>Cryogenically treated cutting tools, dies, and molds last 200-400% longer between resharpening or replacement.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Improved Toughness</h3>
                    <p>Despite higher hardness, cryogenic treatment improves impact toughness and reduces chipping and cracking in service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Fatigue Life Enhancement</h3>
                    <p>Compressive residual stresses and refined microstructure improve fatigue resistance by 50-150% for cyclic loading applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Stress Relief & Uniformity</h3>
                    <p>Reduces micro-stresses and produces uniform, stable microstructure throughout the component cross-section.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CRYOGENIC APPLICATIONS</span>
                <h2>Materials & Components We Treat</h2>
                <p>Professional cryogenic treatment for all hardened steel applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="tool-steels">Tool Steels</button>
                    <button class="tab-btn" data-tab="cutting-tools">Cutting Tools</button>
                    <button class="tab-btn" data-tab="precision">Precision Components</button>
                    <button class="tab-btn" data-tab="carbides">Carbides & Specialty</button>
                </div>

                <div class="tabs-content">
                    <!-- Tool Steels Tab -->
                    <div class="tab-panel active" id="tool-steels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/tool-steel-cryo.jpg" alt="Tool Steel Cryogenic Treatment">
                            </div>
                            <div class="tab-text">
                                <h3>Tool Steel Cryogenic Treatment</h3>
                                <p>Deep cryogenic treatment for cold work, hot work, and high-speed tool steels to improve wear resistance and tool life.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> D2/D3 high carbon cold work steel</li>
                                    <li><i class="fas fa-check"></i> A2/A6 air hardening steel</li>
                                    <li><i class="fas fa-check"></i> O1 oil hardening steel</li>
                                    <li><i class="fas fa-check"></i> S7 shock resisting steel</li>
                                    <li><i class="fas fa-check"></i> H11/H13 hot work steel</li>
                                    <li><i class="fas fa-check"></i> M2/M42 high-speed steel</li>
                                    <li><i class="fas fa-check"></i> CPM powdered metal tool steels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">D2/A2/O1</span>
                                    <span class="standard-tag">S7/H13</span>
                                    <span class="standard-tag">M2/M42</span>
                                    <span class="standard-tag">CPM/ASP Series</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cutting Tools Tab -->
                    <div class="tab-panel" id="cutting-tools">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/cutting-tool-cryo.jpg" alt="Cutting Tool Cryogenic">
                            </div>
                            <div class="tab-text">
                                <h3>Cutting Tools & Wear Components</h3>
                                <p>Cryogenic treatment for drills, end mills, taps, dies, punches, and other cutting tools for extended tool life.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Twist drills and drill bits (200-400% life increase)</li>
                                    <li><i class="fas fa-check"></i> End mills and milling cutters</li>
                                    <li><i class="fas fa-check"></i> Taps and threading tools</li>
                                    <li><i class="fas fa-check"></i> Stamping and forming dies</li>
                                    <li><i class="fas fa-check"></i> Punches and piercing tools</li>
                                    <li><i class="fas fa-check"></i> Shear blades and slitter knives</li>
                                    <li><i class="fas fa-check"></i> Saw blades and band saws</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">M2/M42/M35</span>
                                    <span class="standard-tag">T15/Powder Metals</span>
                                    <span class="standard-tag">D2/A2</span>
                                    <span class="standard-tag">Carbide Grades</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Precision Components Tab -->
                    <div class="tab-panel" id="precision">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/precision-cryo.jpg" alt="Precision Components Cryogenic">
                            </div>
                            <div class="tab-text">
                                <h3>Precision Components & Bearings</h3>
                                <p>Cryogenic treatment for dimensional stability and wear resistance in precision components and bearings.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bearing races and rolling elements</li>
                                    <li><i class="fas fa-check"></i> Precision gauges and master parts</li>
                                    <li><i class="fas fa-check"></i> Aerospace components (landing gear, actuators)</li>
                                    <li><i class="fas fa-check"></i> Gearbox and transmission components</li>
                                    <li><i class="fas fa-check"></i> Hydraulic and fuel system parts</li>
                                    <li><i class="fas fa-check"></i> Injection molding components</li>
                                    <li><i class="fas fa-check"></i> Measuring instruments and calibration standards</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AMS 2759</span>
                                    <span class="standard-tag">ASTM Standards</span>
                                    <span class="standard-tag">Customer Specifications</span>
                                    <span class="standard-tag">ISO 9001</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carbides & Specialty Tab -->
                    <div class="tab-panel" id="carbides">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/carbide-cryo.jpg" alt="Carbide Cryogenic">
                            </div>
                            <div class="tab-text">
                                <h3>Carbides, Stainless & Specialty Alloys</h3>
                                <p>Cryogenic treatment for cemented carbides, stainless steels, and specialty alloys for enhanced properties.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cemented carbide (WC-Co) tooling</li>
                                    <li><i class="fas fa-check"></i> Martensitic stainless steel (410, 420, 440C)</li>
                                    <li><i class="fas fa-check"></i> Precipitation hardening stainless (17-4 PH, 15-5 PH)</li>
                                    <li><i class="fas fa-check"></i> High-speed steel (M2, M42, M35, T15)</li>
                                    <li><i class="fas fa-check"></i> Nickel-based alloys (limited applications)</li>
                                    <li><i class="fas fa-check"></i> Spring steels (for improved fatigue)</li>
                                    <li><i class="fas fa-check"></i> Ball and roller bearing steels (52100)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">WC-Co Carbides</span>
                                    <span class="standard-tag">410/420/440C</span>
                                    <span class="standard-tag">17-4 PH</span>
                                    <span class="standard-tag">52100</span>
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
                <span class="section-label">COMPREHENSIVE CRYOGENIC SERVICES</span>
                <h2>Our Cryogenic Treatment Capabilities</h2>
                <p>Computer-controlled deep cryogenic processing for superior material properties</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Deep Cryogenic Treatment</h3>
                    <p>Computer-controlled cooling to -190°C (-310°F) using liquid nitrogen for complete retained austenite transformation.</p>
                    <ul>
                        <li>Temperature: -190°C (-310°F)</li>
                        <li>Controlled cooling rates (1-5°C/min)</li>
                        <li>Extended soak times (8-36 hours)</li>
                        <li>Controlled warm-up to ambient</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Cold Treatment (-80°C)</h3>
                    <p>Sub-zero treatment at -80°C for less critical applications and materials with lower retained austenite.</p>
                    <ul>
                        <li>Temperature: -80°C (-112°F)</li>
                        <li>Mechanical refrigeration (no liquid nitrogen)</li>
                        <li>Shorter cycle times</li>
                        <td>For lower alloy and carburized steels</td>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Post-Cryogenic Tempering</h3>
                    <p>Controlled tempering after cryogenic treatment for hardness adjustment and stress relief.</p>
                    <ul>
                        <li>Temper immediately after cryogenic cycle</li>
                        <li>Prevents cracking in high-carbon steels</li>
                        <li>Achieve target final hardness</li>
                        <li>Complete property optimization</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Size & Capacity Options</h3>
                    <p>Multiple cryogenic chamber sizes to accommodate small tools to large components.</p>
                    <ul>
                        <li>Small chamber: 600x600x900mm</li>
                        <li>Medium chamber: 1200x1200x1800mm</li>
                        <li>Custom fixturing for complex shapes</li>
                        <li>Batch processing for production quantities</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Cryogenic Procedure Development</h3>
                    <p>Custom cryogenic cycle development for specific materials and applications.</p>
                    <ul>
                        <li>Material-specific temperature ramps</li>
                        <li>Optimized soak duration</li>
                        <li>Integration with heat treatment cycle</li>
                        <li>Verification and testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Verification & Testing</h3>
                    <p>Comprehensive testing to verify cryogenic treatment effectiveness and property improvement.</p>
                    <ul>
                        <li>Hardness testing (HRC/HV) before/after</li>
                        <li>Retained austenite measurement (XRD)</li>
                        <li>Microstructure evaluation</li>
                        <li>Wear testing (where required)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CRYOGENIC PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">CRYOGENIC PROCESS</span>
                    <h2>Our Cryogenic Treatment Workflow</h2>
                    <p>Systematic deep freezing process for complete retained austenite transformation and property enhancement.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material Assessment & Planning</h4>
                                <p>Review of material grade, prior heat treatment, and required property improvements for cryogenic cycle selection.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-thermometer-empty"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Cooling & Soak</h4>
                                <p>Computer-controlled cooling from ambient to -190°C with extended soak at target temperature.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Warm-up & Tempering</h4>
                                <p>Gradual return to ambient temperature followed by tempering for property optimization.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Verification & Certification</h4>
                                <p>Hardness testing, retained austenite measurement, and complete documentation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Compliance</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                            <img src="/www/assets/images/certs/nadcap-cert.png" alt="NADCAP">
                            <img src="/www/assets/images/certs/as9100-cert.png" alt="AS9100">
                            <img src="/www/assets/images/certs/iatf-cert.png" alt="IATF">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/cryogenic-workflow.jpg" alt="Cryogenic Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Cryogenic Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Deep Cryo -190°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Computer Controlled</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>RA Elimination</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Wear Resistance ↑</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CRYOGENIC MATERIAL GUIDE ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">MATERIAL GUIDE</span>
                <h2>Materials Benefiting from Cryogenic Treatment</h2>
                <p>Typical property improvements for common engineering materials</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>High-Speed Steel (M2/M42)</h3>
                    <p>Tool life increase: 200-400%. Retained austenite reduction: 15-30% → <2%. Wear resistance improvement: 100-300%.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Cold Work Tool Steel (D2)</h3>
                    <p>Wear resistance improvement: 50-200%. Dimensional stability: Excellent. Edge retention: Significantly improved.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Bearing Steel (52100)</h3>
                    <p>Wear resistance improvement: 50-100%. Fatigue life: 50-150% improvement. Dimensional stability: Critical for precision.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Martensitic Stainless (440C)</h3>
                    <p>Hardness increase: 1-2 HRC. Wear resistance: 50-100% improvement. Corrosion resistance: Unaffected.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Cemented Carbide (WC-Co)</h3>
                    <p>Wear resistance: 30-50% improvement. Edge retention: Significantly improved. Chipping resistance: Enhanced.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Hot Work Steel (H13)</h3>
                    <p>Thermal fatigue resistance: 50-100% improvement. Wear resistance: Enhanced. Dimensional stability: Improved.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== COLD VS DEEP CRYOGENIC ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PROCESS COMPARISON</span>
                <h2>Cold Treatment vs Deep Cryogenic Treatment</h2>
                <p>Understanding the difference for your application</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-thermometer-empty"></i>
                    </div>
                    <h3>Cold Treatment (-80°C)</h3>
                    <p>Temperature: -80°C (-112°F). Method: Mechanical refrigeration. RA reduction: 50-70%. Best for carburized and lower alloy steels.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h3>Deep Cryogenic (-190°C)</h3>
                    <p>Temperature: -190°C (-310°F). Method: Liquid nitrogen. RA reduction: 95-100%. Best for tool steels, high-carbon, high-alloy steels.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Wear Resistance</h3>
                    <p>Cold treatment: 20-50% improvement. Deep cryogenic: 50-300% improvement. Deep cryo produces fine carbide precipitation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Tool Life Increase</h3>
                    <p>Cold treatment: 50-150% increase. Deep cryogenic: 200-400% increase. Deep cryo recommended for high-performance tools.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Cost & Cycle Time</h3>
                    <p>Cold treatment: Lower cost, shorter cycles. Deep cryogenic: Higher cost, longer cycles (8-36+ hours soak).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>When to Specify</h3>
                    <p>Cold treatment: Carburized parts, lower alloy steels. Deep cryogenic: Tool steels, high-speed steel, precision components.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Cryogenic Treatment Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                                       <div class="faq-question">
                        <h3>What is the difference between cold treatment and deep cryogenic treatment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cold treatment uses mechanical refrigeration to reach -80°C (-112°F) and transforms 50-70% of retained austenite. Deep cryogenic treatment uses liquid nitrogen to reach -190°C (-310°F) and transforms 95-100% of retained austenite while also precipitating fine eta carbides for superior wear resistance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When should cryogenic treatment be performed in the heat treatment cycle?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cryogenic treatment is performed immediately after quenching and before tempering. The component is quenched to room temperature, then immediately transferred to the cryogenic chamber. After cryogenic treatment, the component is tempered normally. This sequence maximizes retained austenite transformation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does cryogenic treatment improve tool life?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cryogenic treatment typically increases tool life by 200-400% for high-speed steel cutting tools. D2 cold work dies show 50-200% improvement. The exact improvement depends on material, prior heat treatment, and application conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does cryogenic treatment cause distortion or cracking?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Properly controlled cryogenic treatment with slow cooling rates (1-5°C/min) does not cause distortion or cracking. In fact, cryogenic treatment reduces the risk of service-related dimensional changes by eliminating retained austenite. However, some high-carbon steels require tempering before cryogenic treatment to prevent cracking.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does cryogenic treatment affect corrosion resistance?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cryogenic treatment does not negatively affect corrosion resistance. For stainless steels, corrosion resistance remains unchanged. For tool steels, the fine carbide precipitation may slightly improve corrosion resistance by reducing carbide segregation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the typical cryogenic soak time?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical soak times range from 8-36 hours at -190°C. Longer soak times (24-36 hours) are used for larger components and high-alloy steels. Shorter soak times (8-12 hours) may be sufficient for smaller tools and lower alloy materials.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can cryogenic treatment be applied to welded components?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cryogenic treatment is generally not recommended for welded components unless the weldment has been properly heat treated (stress relieved or normalized) first. Residual stresses from welding combined with thermal contraction during cryogenic cooling could cause cracking.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you verify cryogenic treatment effectiveness?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Effectiveness is verified through retained austenite measurement using X-ray diffraction (XRD), hardness testing (cryo typically increases hardness 1-3 HRC), and microstructure evaluation (complete martensite transformation, fine carbide precipitation). Wear testing can quantify improvement for specific applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Extend Tool Life & Improve Dimensional Stability</h2>
                <p>Contact our cryogenic treatment specialists for professional deep freezing services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Deep Cryogenic -190°C</span>
                    <span><i class="fas fa-check"></i> Computer Controlled</span>
                    <span><i class="fas fa-check"></i> Retained Austenite Elimination</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Heat Treatment & Processing Services</h2>
                <p>Comprehensive thermal processing and quality assurance solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/industrial-heat-treatment/hardening-case-hardening.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Hardening & Case Hardening</h3>
                    <p>Through hardening and surface hardening</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/tempering.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tempering</h3>
                    <p>Post-quench tempering services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/quenching-tempering.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching & Tempering</h3>
                    <p>Complete Q&T heat treatment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/stress-relieving.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stress Relieving</h3>
                    <p>Residual stress removal services</p>
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
                       