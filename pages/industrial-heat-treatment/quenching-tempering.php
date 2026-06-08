<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Quenching & Tempering Services | Heat Treatment for Steel | Alpha Sonix NDT Solutions";
$meta_description = "Professional quenching and tempering services for steel components including austenitizing, quenching, and tempering heat treatment cycles to achieve desired hardness, strength, and toughness properties.";
$meta_keywords = "quenching and tempering, steel heat treatment, austenitizing, oil quenching, water quenching, polymer quenching, tempering services, hardness control, mechanical properties";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/quenching-tempering.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/quenching-tempering-og.jpg">
    
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
        "serviceType": "Quenching & Tempering Services",
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
        "description": "Professional quenching and tempering services for steel components to achieve precise hardness, strength, and toughness properties per material specifications."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/quenching-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Quenching & Tempering</span>
                </div>
                <h1 class="page-title">Quenching & Tempering Services</h1>
                <p class="page-subtitle">Professional heat treatment services for steel components including austenitizing, quenching, and tempering to achieve precise mechanical properties</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-tint"></i> Oil & Water Quenching</span>
                    <span class="badge"><i class="fas fa-thermometer-half"></i> Precise Tempering</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Hardness Control</span>
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
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Austenitizing</h3>
                    <p>Controlled heating to transformation temperature to dissolve carbides and form homogeneous austenite prior to quenching.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching</h3>
                    <p>Rapid cooling in oil, water, or polymer to transform austenite into martensite for maximum hardness and strength.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tempering</h3>
                    <p>Controlled reheating to reduce brittleness, relieve stresses, and achieve specified hardness/toughness balance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Hardness Testing</h3>
                    <p>Comprehensive hardness verification (Rockwell, Brinell, Vickers) to confirm heat treatment results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS QUENCHING & TEMPERING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">STEEL HEAT TREATMENT</span>
                    <h2>What is Quenching & Tempering?</h2>
                    <p class="lead">Quenching and tempering is a two-stage heat treatment process that increases the strength and hardness of steel while maintaining adequate toughness through controlled heating, rapid cooling, and tempering.</p>
                    
                    <p>Quenching and tempering is essential for manufacturing components requiring high strength, wear resistance, and impact toughness. The process transforms the steel microstructure from soft ferrite-pearlite to hard martensite (quenching), then tempers the martensite to achieve the desired balance of hardness and toughness.</p>

                    <p>Our quenching and tempering services combine precision furnace control, multiple quenching media options, and comprehensive hardness testing to deliver components meeting exact material specifications for critical applications.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Achieve High Strength & Hardness</strong>
                                <p>Quenching produces martensitic microstructure with hardness up to 60-65 HRC depending on carbon content and alloy composition.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Optimize Toughness</strong>
                                <p>Tempering at controlled temperatures relieves brittleness and develops the required toughness for service conditions.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Precision Property Control</strong>
                                <p>Selective tempering temperatures achieve specific hardness targets from 25-60 HRC based on application requirements.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Stress Relief</strong>
                                <p>Tempering relieves internal stresses induced by rapid quenching, preventing distortion and service-related cracking.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for High-Performance Components:</strong>
                            <p>Quenched and tempered steel provides 3-5x higher strength than normalized or annealed condition. This heat treatment is essential for gears, shafts, fasteners, tools, and structural components requiring high strength with adequate toughness.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Q&T Services</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/quenching-process.jpg" alt="Quenching Process">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Controlled quenching process with temperature monitoring system</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">65 HRC</span>
                            <span class="stat-label">Max Hardness</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1200°C</span>
                            <span class="stat-label">Austenitizing Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">0.5°C</span>
                            <span class="stat-label">Temp Control</span>
                        </div>
                    </div>
                    
                    <div class="qt-benefits">
                        <h4><i class="fas fa-star"></i> Q&T Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> High strength & hardness</li>
                            <li><i class="fas fa-check"></i> Excellent wear resistance</li>
                            <li><i class="fas fa-check"></i> Good toughness</li>
                            <li><i class="fas fa-check"></i> Dimensional stability</li>
                            <li><i class="fas fa-check"></i> Fatigue resistance</li>
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
                <span class="section-label">WHY QUENCHING & TEMPERING MATTERS</span>
                <h2>Key Advantages of Professional Q&T Services</h2>
                <p>Achieve optimal mechanical properties for critical steel components</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>High Strength Achievement</h3>
                    <p>Q&T produces tensile strengths from 800-2000+ MPa depending on steel grade and tempering temperature—3-5x stronger than annealed condition.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Wear Resistance Improvement</h3>
                    <p>Hardened martensitic microstructure provides excellent abrasion and wear resistance for tools, dies, and wear components.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Precision Hardness Control</h3>
                    <p>Target specific hardness ranges (25-60+ HRC) through controlled tempering temperatures to meet application requirements.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Improved Fatigue Life</h3>
                    <p>Q&T microstructure provides superior fatigue resistance compared to normalized or annealed conditions for cyclic loading applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Impact Toughness Balance</h3>
                    <p>Tempering at higher temperatures (500-650°C) improves toughness while maintaining adequate strength for structural applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Material Specification Compliance</h3>
                    <p>Meet ASTM, SAE, API, and customer mechanical property requirements with documented heat treatment and testing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">Q&T APPLICATIONS</span>
                <h2>Components Requiring Quenching & Tempering</h2>
                <p>Professional heat treatment for critical steel components across all industries</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="shafts-gears">Shafts & Gears</button>
                    <button class="tab-btn" data-tab="tools-dies">Tools & Dies</button>
                    <button class="tab-btn" data-tab="structural">Structural Components</button>
                    <button class="tab-btn" data-tab="fasteners">Fasteners & Hardware</button>
                </div>

                <div class="tabs-content">
                    <!-- Shafts & Gears Tab -->
                    <div class="tab-panel active" id="shafts-gears">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/shaft-gear-qt.jpg" alt="Shaft and Gear Q&T">
                            </div>
                            <div class="tab-text">
                                <h3>Shafts, Gears & Power Transmission</h3>
                                <p>Quenching and tempering for shafts, gears, axles, spindles, and power transmission components requiring high strength and fatigue resistance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Transmission shafts and drive shafts</li>
                                    <li><i class="fas fa-check"></i> Gear blanks and finished gears</li>
                                    <li><i class="fas fa-check"></i> Axles and spindles for heavy equipment</li>
                                    <li><i class="fas fa-check"></i> Crankshafts and camshafts</li>
                                    <li><i class="fas fa-check"></i> Pump shafts and compressor shafts</li>
                                    <li><i class="fas fa-check"></i> Couplings and universal joints</li>
                                    <li><i class="fas fa-check"></i> Propeller shafts and marine components</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">4140/4142</span>
                                    <span class="standard-tag">4340</span>
                                    <span class="standard-tag">8620/8640</span>
                                    <span class="standard-tag">1045/1050</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools & Dies Tab -->
                    <div class="tab-panel" id="tools-dies">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/tool-die-qt.jpg" alt="Tool and Die Q&T">
                            </div>
                            <div class="tab-text">
                                <h3>Tools, Dies & Wear Components</h3>
                                <p>Heat treatment for tools, dies, molds, and wear components requiring high hardness and wear resistance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stamping and forming dies</li>
                                    <li><i class="fas fa-check"></i> Cutting tools and drill bits</li>
                                    <li><i class="fas fa-check"></i> Molds and injection molding components</li>
                                    <li><i class="fas fa-check"></i> Wear plates and liners</li>
                                    <li><i class="fas fa-check"></i> Punches and piercing tools</li>
                                    <li><i class="fas fa-check"></i> Mining and earthmoving wear parts</li>
                                    <li><i class="fas fa-check"></i> Crusher components and hammers</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">D2/D3</span>
                                    <span class="standard-tag">A2/A6</span>
                                    <span class="standard-tag">S7</span>
                                    <span class="standard-tag">H13/H11</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Structural Components Tab -->
                    <div class="tab-panel" id="structural">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/structural-qt.jpg" alt="Structural Q&T">
                            </div>
                            <div class="tab-text">
                                <h3>Structural & Heavy Equipment Components</h3>
                                <p>Quenching and tempering for structural components requiring high strength with adequate toughness for demanding service conditions.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crane booms and lifting components</li>
                                    <li><i class="fas fa-check"></i> Excavator and construction equipment parts</li>
                                    <li><i class="fas fa-check"></i> Offshore and marine structural components</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel and piping components</li>
                                    <li><i class="fas fa-check"></i> Mining equipment structural parts</li>
                                    <li><i class="fas fa-check"></i> Bridge and infrastructure components</li>
                                    <li><i class="fas fa-check"></i> Heavy machinery frames and supports</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">AISI 4140</span>
                                    <span class="standard-tag">AISI 4340</span>
                                    <span class="standard-tag">ASTM A514</span>
                                    <span class="standard-tag">EN 10025-6</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fasteners & Hardware Tab -->
                    <div class="tab-panel" id="fasteners">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/fastener-qt.jpg" alt="Fastener Q&T">
                            </div>
                            <div class="tab-text">
                                <h3>Fasteners, Bolts & Hardware</h3>
                                <p>Quenching and tempering for high-strength fasteners, bolts, studs, and hardware meeting grade specifications.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Grade 8.8, 10.9, 12.9 bolts and studs</li>
                                    <li><i class="fas fa-check"></i> High-strength nuts and washers</li>
                                    <li><i class="fas fa-check"></i> Socket head cap screws</li>
                                    <li><i class="fas fa-check"></i> Threaded rod and bar stock</li>
                                    <li><i class="fas fa-check"></i> Anchor bolts and foundation bolts</li>
                                    <li><i class="fas fa-check"></i> Turnbuckles and tensioning components</li>
                                    <li><i class="fas fa-check"></i> Specialty fasteners for critical service</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A325/A490</span>
                                    <span class="standard-tag">ISO 898-1</span>
                                    <span class="standard-tag">SAE J429</span>
                                    <span class="standard-tag">API 20E</span>
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
                <span class="section-label">COMPREHENSIVE Q&T SERVICES</span>
                <h2>Our Quenching & Tempering Capabilities</h2>
                <p>Precision heat treatment equipment and experienced metallurgical technicians</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Austenitizing (Solution Treatment)</h3>
                    <p>Precision controlled heating to transformation temperature with soak time optimization for complete austenite formation.</p>
                    <ul>
                        <li>Furnace temperatures up to 1200°C</li>
                        <li>Controlled atmosphere to prevent scaling</li>
                        <li>Precise soak time based on section thickness</li>
                        <li>Uniform temperature distribution (±5°C)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Oil Quenching</h3>
                    <p>Controlled oil quenching for alloy steels, providing slower cooling rate to minimize distortion and cracking risk.</p>
                    <ul>
                        <li>Agitated quench tanks for uniform cooling</li>
                        <li>Temperature-controlled quenching oil</li>
                        <li>Suitable for most alloy steels</li>
                        <li>Minimal distortion and cracking risk</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Water & Polymer Quenching</h3>
                    <p>Rapid water or polymer quenching for carbon steels and components requiring maximum hardness.</p>
                    <ul>
                        <li>Forced circulation quench systems</li>
                        <li>Polymer concentration control for variable cooling rates</li>
                        <li>Water quenching for maximum hardness</li>
                        <li>Suitable for simple geometric shapes</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Tempering (Drawing)</h3>
                    <p>Controlled reheating to precise temperatures to achieve target hardness and toughness properties.</p>
                    <ul>
                        <li>Tempering range: 150-700°C</li>
                        <li>Multi-stage tempering options</li>
                        <li>Achieve hardness from 25-60+ HRC</li>
                        <li>Stress relief and toughness development</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Hardness & Mechanical Testing</h3>
                    <p>Comprehensive testing to verify heat treatment results and material property compliance.</p>
                    <ul>
                        <li>Rockwell (HRC, HRB, HRC) hardness testing</li>
                        <li>Brinell and Vickers hardness options</li>
                        <li>Tensile testing (where required)</li>
                        <li>Impact testing (Charpy V-notch)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Distortion Control & Straightening</h3>
                    <p>Minimization of quench distortion and post-heat straightening services for dimensionally sensitive components.</p>
                    <ul>
                        <li>Press quenching for flat components</li>
                        <li>Fixture quenching for complex shapes</li>
                        <li>Post-heat straightening services</li>
                        <li>Stress relief after straightening</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== Q&T PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">HEAT TREATMENT PROCESS</span>
                    <h2>Our Quenching & Tempering Workflow</h2>
                    <p>Systematic heat treatment process ensuring consistent metallurgical results and mechanical properties.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material Verification & Planning</h4>
                                <p>Confirmation of material grade, section thickness, and required mechanical properties for heat treatment cycle development.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Austenitizing (Soaking)</h4>
                                <p>Controlled heating to transformation temperature with soak time based on material and section thickness.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Quenching (Rapid Cooling)</h4>
                                <p>Immediate transfer to quench medium (oil, water, polymer) with controlled agitation for uniform cooling.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Tempering & Verification Testing</h4>
                                <p>Controlled tempering to achieve target hardness followed by verification testing and certification.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Equipment & Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                            <img src="/www/assets/images/certs/as9100-cert.png" alt="AS9100">
                            <img src="/www/assets/images/certs/nadcap-cert.png" alt="NADCAP">
                            <img src="/www/assets/images/certs/iatf-cert.png" alt="IATF 16949">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/qt-workflow.jpg" alt="Q&T Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Q&T Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Austentizing 800-1200°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Oil/Water/Polymer Quenching</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Tempering 150-700°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Hardness Verification</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TEMPERING TEMPERATURE GUIDE ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TEMPERING GUIDE</span>
                <h2>Tempering Temperature vs Hardness (4140 Steel Example)</h2>
                <p>Typical hardness response for quenched and tempered alloy steel</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>150-200°C (300-400°F)</h3>
                    <p>Hardness: 54-58 HRC. Maximum hardness, minimal tempering. Used for wear-resistant tools and components.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>300-400°C (575-750°F)</h3>
                    <p>Hardness: 48-52 HRC. Moderate tempering, good wear resistance with improved toughness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>500-550°C (930-1020°F)</h3>
                    <p>Hardness: 38-45 HRC. High-temperature tempering, excellent toughness for structural applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>600-650°C (1110-1200°F)</h3>
                    <p>Hardness: 28-35 HRC. Maximum toughness, used for shafts and components requiring impact resistance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>670-700°C (1240-1290°F)</h3>
                    <p>Hardness: 22-28 HRC. Near-annealed condition, maximum ductility for cold working operations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Multi-Stage Tempering</h3>
                    <p>Double or triple tempering for stability, retained austenite reduction, and consistent properties in critical components.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Quenching & Tempering Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the purpose of quenching and tempering?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Quenching transforms the steel microstructure to hard martensite. Tempering then reduces brittleness and internal stresses while achieving the desired balance of hardness, strength, and toughness for the specific application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between oil and water quenching?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Oil quenching provides slower, more uniform cooling with lower distortion and cracking risk—suitable for alloy steels. Water quenching provides faster cooling for maximum hardness but higher distortion risk—typically used for carbon steels and simple shapes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What hardness can be achieved with Q&T?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Hardness depends on carbon content and alloy composition. Typical ranges: Low carbon steels: 25-35 HRC; Medium carbon (1045): 45-55 HRC; Alloy steels (4140): 50-58 HRC; Tool steels: 55-65+ HRC.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is polymer quenching?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Polymer quenching uses water-soluble polymers to provide cooling rates between water and oil. Polymer concentration can be adjusted to achieve specific cooling rates, reducing distortion while maintaining hardenability.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is tempering temperature determined?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tempering temperature is selected based on target hardness and mechanical properties. Lower temperatures (150-300°C) produce higher hardness, higher temperatures (500-650°C) produce lower hardness with improved toughness and ductility.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is retained austenite and why is it a concern?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Retained austenite is untransformed austenite remaining after quenching that can cause dimensional instability and reduced hardness. Multiple tempering cycles (double/triple tempering) or sub-zero treatments convert retained austenite to martensite.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can Q&T be performed on welded assemblies?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, but welded assemblies have increased distortion risk and potential for quench cracking at stress concentrations. Pre-qualified procedures and careful fixturing are essential for successful Q&T of welded components.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What testing verifies Q&T results?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary verification includes hardness testing (Rockwell, Brinell, or Vickers). Additional testing may include tensile testing, impact testing (Charpy), microstructure evaluation, and case depth measurement for induction-hardened components.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Achieve Precision Mechanical Properties</h2>
                <p>Contact our heat treatment specialists for professional quenching and tempering services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Oil/Water/Polymer Quenching</span>
                    <span><i class="fas fa-check"></i> Precision Tempering</span>
                    <span><i class="fas fa-check"></i> Hardness Verification</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Heat Treatment & Testing Services</h2>
                <p>Comprehensive thermal processing and quality assurance solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/industrial-heat-treatment/post-weld-heat-treatment.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Post Weld Heat Treatment</h3>
                    <p>Stress relieving and PWHT services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/preheating-services.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Preheating Services</h3>
                    <p>Weld preheat and interpass control</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/solution-annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Solution Annealing</h3>
                    <p>Full solution anneal for stainless steel</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/mechanical-structural-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Mechanical & Structural</h3>
                    <p>Component inspection and testing</p>
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