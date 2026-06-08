<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Tempering Services | Heat Treatment for Hardened Steel | Alpha Sonix NDT Solutions";
$meta_description = "Professional tempering services for hardened steel components including stress relief, toughness improvement, and precise hardness adjustment. Post-quench tempering for carbon, alloy, and tool steels.";
$meta_keywords = "tempering, tempering heat treatment, steel tempering, post-quench tempering, hardness adjustment, toughness improvement, stress relief, tempering temperature, drawn steel";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/tempering.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/tempering-og.jpg">
    
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
        "serviceType": "Tempering Services",
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
        "description": "Professional tempering services for hardened steel components including stress relief, toughness improvement, and precise hardness adjustment."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/tempering-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Tempering</span>
                </div>
                <h1 class="page-title">Tempering Services</h1>
                <p class="page-subtitle">Professional post-quench tempering heat treatment for hardened steel components to improve toughness, relieve stresses, and achieve precise hardness targets</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-chart-line"></i> Hardness Adjustment</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Toughness Improvement</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> Stress Relief</span>
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
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Hardness Adjustment</h3>
                    <p>Precise hardness targeting from 25-60+ HRC by selecting appropriate tempering temperature for specific material grades.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Toughness Improvement</h3>
                    <p>Reduces brittleness of as-quenched martensite while improving impact resistance and fracture toughness.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Stress Relief</h3>
                    <p>Relieves internal stresses from rapid quenching, preventing distortion and service-related cracking.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Multiple Tempering</h3>
                    <p>Double and triple tempering for retained austenite reduction, dimensional stability, and consistent properties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS TEMPERING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">POST-QUENCH HEAT TREATMENT</span>
                    <h2>What is Tempering?</h2>
                    <p class="lead">Tempering is a heat treatment process applied to hardened steel that reheats the material to a specific temperature below the critical range, holds for sufficient time, and then cools to reduce brittleness, relieve internal stresses, and achieve the desired balance of hardness and toughness.</p>
                    
                    <p>As-quenched martensite is extremely hard but also very brittle and highly stressed. Tempering transforms the martensite into tempered martensite, significantly improving ductility and toughness while reducing hardness to the desired level for the specific application.</p>

                    <p>Our tempering services combine precision furnace control, uniform heating, and accurate temperature selection to achieve specified hardness and mechanical properties for carbon steels, alloy steels, tool steels, and stainless steels.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Brittleness Reduction</strong>
                                <p>Tempering reduces the brittleness of as-quenched martensite, preventing catastrophic brittle fracture in service.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Precision Hardness Control</strong>
                                <p>Selective tempering temperatures achieve specific hardness from 25-60+ HRC based on application requirements.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Internal Stress Relief</strong>
                                <p>Relieves quenching stresses that cause distortion during machining and service-related cracking.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Retained Austenite Reduction</strong>
                                <p>Multiple tempering cycles transform retained austenite for dimensional stability and consistent hardness.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Essential After Hardening:</strong>
                            <p>As-quenched steel without tempering has very low impact strength (5-15 ft-lbs) and can fail catastrophically. Proper tempering improves impact resistance by 5-10x (50-150+ ft-lbs) while maintaining 80-95% of as-quenched hardness.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Tempering</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/tempering-furnace.jpg" alt="Tempering Furnace">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Precision tempering furnace with temperature uniformity control</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">650°C</span>
                            <span class="stat-label">Max Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5-10x</span>
                            <span class="stat-label">Toughness Gain</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">±5°C</span>
                            <span class="stat-label">Temp Control</span>
                        </div>
                    </div>
                    
                    <div class="tempering-benefits">
                        <h4><i class="fas fa-star"></i> Tempering Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Reduced brittleness</li>
                            <li><i class="fas fa-check"></i> Precise hardness control</li>
                            <li><i class="fas fa-check"></i> Stress relief</li>
                            <li><i class="fas fa-check"></i> Improved toughness</li>
                            <li><i class="fas fa-check"></i> Dimensional stability</li>
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
                <span class="section-label">WHY TEMPERING MATTERS</span>
                <h2>Key Advantages of Professional Tempering</h2>
                <p>Achieve optimal hardness-toughness balance for hardened components</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Precision Hardness Targeting</h3>
                    <p>Achieve specific hardness requirements from 25-60+ HRC by selecting precise tempering temperature based on material grade.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Impact Toughness Improvement</h3>
                    <p>Tempering increases Charpy impact values from 5-15 ft-lbs (as-quenched) to 50-150+ ft-lbs for most alloy steels.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Quench Stress Relief</h3>
                    <p>Relieves 60-90% of internal stresses from rapid quenching, preventing distortion during machining and service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Retained Austenite Transformation</h3>
                    <p>Multiple tempering converts unstable retained austenite, ensuring dimensional stability and consistent hardness.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Microstructure Optimization</h3>
                    <p>Produces stable tempered martensite structure with optimal combination of strength, hardness, and ductility.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Specification Compliance</h3>
                    <p>Meet AMS, ASTM, SAE, API, and customer tempering requirements with documented time-temperature cycles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TEMPERING APPLICATIONS</span>
                <h2>Components Requiring Tempering</h2>
                <p>Professional tempering services for all hardened steel components</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="alloy-steels">Alloy Steels</button>
                    <button class="tab-btn" data-tab="carbon-steels">Carbon Steels</button>
                    <button class="tab-btn" data-tab="tool-steels">Tool Steels</button>
                    <button class="tab-btn" data-tab="stainless">Stainless Steels</button>
                </div>

                <div class="tabs-content">
                    <!-- Alloy Steels Tab -->
                    <div class="tab-panel active" id="alloy-steels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/alloy-tempering.jpg" alt="Alloy Steel Tempering">
                            </div>
                            <div class="tab-text">
                                <h3>Alloy Steel Tempering</h3>
                                <p>Precision tempering for chromium-molybdenum, nickel-chromium, and other alloy steels to achieve specified hardness and toughness.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 4140/4142 quenched & tempered condition</li>
                                    <li><i class="fas fa-check"></i> 4340 high-strength steel tempering</li>
                                    <li><i class="fas fa-check"></i> 8620 case carburized component tempering</li>
                                    <li><i class="fas fa-check"></i> 4130 alloy steel for aerospace applications</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly pressure vessel components</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment alloy steel parts</li>
                                    <li><i class="fas fa-check"></i> Shafts, gears, and structural components</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">4140/4340</span>
                                    <span class="standard-tag">8620/4130</span>
                                    <span class="standard-tag">6150/52100</span>
                                    <span class="standard-tag">AMS 2759/AMS 6415</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carbon Steels Tab -->
                    <div class="tab-panel" id="carbon-steels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/carbon-tempering.jpg" alt="Carbon Steel Tempering">
                            </div>
                            <div class="tab-text">
                                <h3>Carbon Steel Tempering</h3>
                                <p>Tempering for low, medium, and high carbon steels to achieve desired hardness and mechanical properties.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 1045 medium carbon steel tempering</li>
                                    <li><i class="fas fa-check"></i> 1060/1080 high carbon steel tempering</li>
                                    <li><i class="fas fa-check"></i> 1018 carburized case tempering</li>
                                    <li><i class="fas fa-check"></i> Forged carbon steel components</li>
                                    <li><i class="fas fa-check"></i> Induction hardened shaft tempering</li>
                                    <li><i class="fas fa-check"></i> Structural steel components</li>
                                    <li><i class="fas fa-check"></i> Wear plate and abrasion resistant steel</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">1045/1050</span>
                                    <span class="standard-tag">1060/1075/1080</span>
                                    <span class="standard-tag">1018/1020</span>
                                    <span class="standard-tag">1095</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tool Steels Tab -->
                    <div class="tab-panel" id="tool-steels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/tool-tempering.jpg" alt="Tool Steel Tempering">
                            </div>
                            <div class="tab-text">
                                <h3>Tool Steel Tempering</h3>
                                <p>Precision tempering for cold work, hot work, and high-speed tool steels to achieve optimal hardness and wear resistance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> D2 high carbon cold work steel tempering</li>
                                    <li><i class="fas fa-check"></i> A2/A6 air hardening steel tempering</li>
                                    <li><i class="fas fa-check"></i> O1 oil hardening steel tempering</li>
                                    <li><i class="fas fa-check"></i> S7 shock resisting steel tempering</li>
                                    <li><i class="fas fa-check"></i> H11/H13 hot work steel tempering</li>
                                    <li><i class="fas fa-check"></i> M2/M42 high-speed steel tempering</li>
                                    <li><i class="fas fa-check"></i> Double and triple tempering for stability</li>
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

                    <!-- Stainless Steels Tab -->
                    <div class="tab-panel" id="stainless">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/stainless-tempering.jpg" alt="Stainless Steel Tempering">
                            </div>
                            <div class="tab-text">
                                <h3>Stainless Steel Tempering</h3>
                                <p>Tempering for martensitic and precipitation hardening stainless steels to achieve specified hardness and corrosion resistance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 410/420 martensitic stainless tempering</li>
                                    <li><i class="fas fa-check"></i> 440C high hardness stainless tempering</li>
                                    <li><i class="fas fa-check"></i> 17-4 PH precipitation hardening treatment</li>
                                    <li><i class="fas fa-check"></i> 15-5 PH aging and tempering</li>
                                    <li><i class="fas fa-check"></i> Precipitation hardening (PH) stainless</li>
                                    <li><i class="fas fa-check"></i> Surgical and cutlery stainless</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere for surface finish</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">410/420/440C</span>
                                    <span class="standard-tag">17-4 PH/15-5 PH</span>
                                    <span class="standard-tag">A286</span>
                                    <span class="standard-tag">AMS 2759</span>
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
                <span class="section-label">COMPREHENSIVE TEMPERING SERVICES</span>
                <h2>Our Tempering Capabilities</h2>
                <p>Precision temperature control for optimal hardness and toughness balance</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Low Temperature Tempering</h3>
                    <p>Low-temperature tempering (150-300°C / 300-570°F) for maximum hardness with moderate toughness improvement.</p>
                    <ul>
                        <li>Hardness: 55-60+ HRC (alloy steels)</li>
                        <li>Minimal strength reduction</li>
                        <li>Good wear resistance retention</li>
                        <li>Suitable for cutting tools and dies</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Medium Temperature Tempering</h3>
                    <p>Medium-temperature tempering (350-500°C / 660-930°F) for balanced hardness and toughness.</p>
                    <ul>
                        <li>Hardness: 45-55 HRC (alloy steels)</li>
                        <li>Good strength-toughness balance</li>
                        <li>Reduced residual stresses</li>
                        <li>Suitable for shafts and structural parts</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>High Temperature Tempering</h3>
                    <p>High-temperature tempering (500-650°C / 930-1200°F) for maximum toughness and stress relief.</p>
                    <ul>
                        <li>Hardness: 25-45 HRC (alloy steels)</li>
                        <li>Maximum impact toughness</li>
                        <li>Excellent ductility</li>
                        <li>Suitable for high-impact components</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Double & Triple Tempering</h3>
                    <p>Multiple tempering cycles for retained austenite reduction and dimensional stability.</p>
                    <ul>
                        <li>Retained austenite transformation</li>
                        <li>Enhanced dimensional stability</li>
                        <li>Consistent hardness across sections</li>
                        <li>Required for tool steels and high-speed steel</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Sub-Zero (Cryogenic) Treatment</h3>
                    <p>Deep freezing after tempering for retained austenite transformation and wear resistance improvement.</p>
                    <ul>
                        <li>Temperature: -80°C to -190°C</li>
                        <li>Maximum retained austenite transformation</li>
                        <li>Improved dimensional stability</li>
                        <li>Enhanced wear resistance</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Verification & Testing</h3>
                    <p>Comprehensive testing to verify tempering results and material properties.</p>
                    <ul>
                        <li>Rockwell hardness testing (HRC/HRB)</li>
                        <li>Impact testing (Charpy) where required</li>
                        <li>Microstructure evaluation</li>
                        <li>Complete documentation and certification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TEMPERING PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">TEMPERING PROCESS</span>
                    <h2>Our Tempering Workflow</h2>
                    <p>Systematic tempering process ensuring consistent hardness and mechanical properties.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material & Hardness Assessment</h4>
                                <p>Review of material grade, as-quenched hardness, and required final hardness/toughness specifications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Precision Heating & Soaking</h4>
                                <p>Controlled heating to selected tempering temperature with uniform soak throughout component.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Cooling</h4>
                                <p>Air cooling to ambient temperature (may be accelerated for some materials).</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Verification & Certification</h4>
                                <p>Hardness verification, impact testing as required, and complete documentation.</p>
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
                        <img src="/www/assets/images/heat-treatment/tempering-workflow.jpg" alt="Tempering Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Tempering Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Temp Range 150-650°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Single/Double/Triple Tempering</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Sub-Zero Treatment Option</span>
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
                <span class="section-label">TEMPERATURE GUIDE</span>
                <h2>Tempering Temperature vs Hardness (4140 Steel)</h2>
                <p>Typical hardness response for quenched and tempered 4140 alloy steel</p>
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
                    <h3>200-300°C (400-570°F)</h3>
                    <p>Hardness: 50-55 HRC. Low-temperature tempering, good wear resistance with moderate toughness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>400-500°C (750-930°F)</h3>
                    <p>Hardness: 40-50 HRC. Medium-temperature tempering, balanced strength and toughness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>540-600°C (1000-1110°F)</h3>
                    <p>Hardness: 30-40 HRC. High-temperature tempering, excellent toughness for structural applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>600-650°C (1110-1200°F)</h3>
                    <p>Hardness: 25-30 HRC. Maximum toughness, used for shafts and high-impact components.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Double/Triple Tempering</h3>
                    <p>Multiple cycles for retained austenite reduction, dimensional stability, and consistent properties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TEMPERING VS OTHER PROCESSES ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PROCESS COMPARISON</span>
                <h2>Tempering vs Other Heat Treatment Processes</h2>
                <p>Understanding the role of tempering in the heat treatment sequence</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>As-Quenched (No Tempering)</h3>
                    <p>Maximum hardness (60-65+ HRC) but extremely brittle (5-15 ft-lbs). High residual stresses. Unstable microstructure.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Tempered</h3>
                    <p>Reduced hardness (25-60 HRC), dramatically improved toughness (50-150+ ft-lbs). Stress relieved. Stable properties.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Annealed</h3>
                    <p>Softest condition (150-220 HB). Maximum ductility. No residual stresses. Not hardened.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Normalized</h3>
                    <p>Moderate hardness (180-250 HB). Good machinability. Not as tough as tempered.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Aging (PH Stainless)</h3>
                    <p>Precipitation hardening produces high strength with good corrosion resistance. Specialized process for PH grades.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stress Relieving</h3>
                    <p>Lower temperature than tempering. Stress reduction only. No hardness change.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Tempering Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the purpose of tempering after hardening?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tempering reduces the brittleness of as-quenched martensite, relieves internal stresses from rapid quenching, and allows precise adjustment of hardness and toughness to meet application requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does tempering temperature affect hardness?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Higher tempering temperatures produce lower hardness but higher toughness. Lower temperatures maintain higher hardness with some toughness improvement. Each material has a specific tempering curve relating temperature to final hardness.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is temper embrittlement?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Temper embrittlement is a loss of toughness that can occur when tempering certain alloy steels in the range of 375-575°C (700-1070°F), particularly with slow cooling. Our processes avoid problematic temperature ranges or include rapid cooling to prevent embrittlement.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why is double or triple tempering required for tool steels?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Multiple tempering cycles transform retained austenite (unstable phase remaining after quenching) into tempered martensite. This ensures dimensional stability during service and achieves maximum hardness and wear resistance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between tempering and stress relieving?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tempering is performed on hardened steel (as-quenched) to reduce brittleness and adjust hardness (150-650°C). Stress relieving is performed on non-hardened or welded materials (500-650°C) to reduce residual stresses without significant hardness change.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can tempering be performed more than once?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, multiple tempering cycles are often required for tool steels and high-speed steels. Each tempering cycle further transforms retained austenite and stabilizes the microstructure. Two or three tempering cycles are standard for many tool steel grades.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What hardness can be achieved with tempering?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tempering can achieve hardness from 25-60+ HRC depending on material and tempering temperature. Low temperature (150-200°C): 55-60 HRC. Medium temperature (400-500°C): 40-50 HRC. High temperature (550-650°C): 25-35 HRC.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you verify proper tempering?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary verification is hardness testing (Rockwell HRC). Additional verification includes impact testing (Charpy) for toughness-critical components, microstructure evaluation, and time-temperature chart review.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Achieve Optimal Hardness & Toughness Balance</h2>
                <p>Contact our heat treatment specialists for professional tempering services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Low/Medium/High Temp Tempering</span>
                    <span><i class="fas fa-check"></i> Double & Triple Tempering</span>
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
                <a href="/www/pages/industrial-heat-treatment/hardening-case-hardening.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Hardening & Case Hardening</h3>
                    <p>Through hardening and surface hardening</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/quenching-tempering.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching & Tempering</h3>
                    <p>Complete Q&T heat treatment services</p>
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

                <a href="/www/pages/industrial-heat-treatment/annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Annealing</h3>
                    <p>Full annealing and process annealing</p>
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