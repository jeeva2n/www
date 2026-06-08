<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Stress Relieving Heat Treatment Services | Residual Stress Removal | Alpha Sonix NDT Solutions";
$meta_description = "Professional stress relieving heat treatment services for welded assemblies, machined components, castings, and forgings. Reduce residual stresses, prevent distortion, and improve dimensional stability.";
$meta_keywords = "stress relieving, stress relief heat treatment, residual stress removal, thermal stress relief, vibration stress relief, weld stress relief, machining stress relief, dimensional stability";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/stress-relieving.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/stress-relieving-og.jpg">
    
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
        "serviceType": "Stress Relieving Heat Treatment Services",
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
        "description": "Professional stress relieving heat treatment services for welded assemblies, machined components, castings, and forgings to reduce residual stresses and prevent distortion."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/stress-relieving-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Stress Relieving</span>
                </div>
                <h1 class="page-title">Stress Relieving Heat Treatment</h1>
                <p class="page-subtitle">Professional thermal stress relief services for welded assemblies, machined components, castings, and forgings to eliminate residual stresses and prevent distortion</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-chart-line"></i> Residual Stress Removal</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> Dimensional Stability</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Distortion Prevention</span>
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
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Thermal Stress Relief</h3>
                    <p>Controlled heating and slow cooling to reduce residual stresses from welding, machining, casting, and forging operations.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Dimensional Stability</h3>
                    <p>Prevents distortion during subsequent machining and service, ensuring critical tolerances are maintained.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Weld Stress Relief</h3>
                    <p>Reduces residual stresses in weldments preventing stress corrosion cracking and improving fatigue life.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Machining Stress Relief</h3>
                    <p>Eliminates residual stresses induced by heavy machining operations to maintain part stability and accuracy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS STRESS RELIEVING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">THERMAL STRESS RELIEF</span>
                    <h2>What is Stress Relieving Heat Treatment?</h2>
                    <p class="lead">Stress relieving is a heat treatment process that reduces or eliminates internal residual stresses in metal components by heating to a specific temperature below the critical range, holding for sufficient time, and then cooling slowly.</p>
                    
                    <p>Residual stresses develop during welding, machining, casting, forging, and cold working. These stresses can cause distortion during subsequent machining, stress corrosion cracking in service, and reduced fatigue life. Stress relieving relaxes these stresses without significantly affecting hardness or strength.</p>

                    <p>Our stress relieving services combine precision furnace control, uniform heating, and controlled cooling cycles to achieve residual stress reduction for carbon steels, alloy steels, stainless steels, and non-ferrous alloys.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Residual Stress Reduction</strong>
                                <p>Stress relieving reduces residual stresses by 60-90% depending on material, temperature, and time at temperature.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Distortion Prevention</strong>
                                <p>Eliminates internal stresses that cause distortion during machining, welding, and service operations.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Stress Corrosion Cracking Prevention</strong>
                                <p>Reduces tensile residual stresses that drive stress corrosion cracking in susceptible materials and environments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Improved Fatigue Life</strong>
                                <p>Compressive residual stresses or reduced tensile stresses improve fatigue resistance and component life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for Component Stability:</strong>
                            <p>Untreated residual stresses can cause distortion of 0.001-0.010" per inch of material during machining. Stress relieving prevents this distortion, maintains critical tolerances, and prevents stress corrosion cracking in aggressive service environments.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Stress Relieving</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/stress-relief-furnace.jpg" alt="Stress Relieving Furnace">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Controlled stress relieving furnace with temperature monitoring system</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">700°C</span>
                            <span class="stat-label">Max Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">60-90%</span>
                            <span class="stat-label">Stress Reduction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Slow Cool</span>
                            <span class="stat-label">Controlled Cooling</span>
                        </div>
                    </div>
                    
                    <div class="stress-benefits">
                        <h4><i class="fas fa-star"></i> Stress Relieving Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Eliminate residual stresses</li>
                            <li><i class="fas fa-check"></i> Prevent distortion</li>
                            <li><i class="fas fa-check"></i> Improve dimensional stability</li>
                            <li><i class="fas fa-check"></i> Prevent stress corrosion cracking</li>
                            <li><i class="fas fa-check"></i> Extend fatigue life</li>
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
                <span class="section-label">WHY STRESS RELIEVING MATTERS</span>
                <h2>Key Advantages of Professional Stress Relieving</h2>
                <p>Ensure dimensional stability and prevent service failures</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Dimensional Stability</h3>
                    <p>Prevents distortion during machining and service, maintaining critical tolerances on precision components.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Stress Corrosion Prevention</h3>
                    <p>Reduces tensile residual stresses that combine with corrosive environments to cause stress corrosion cracking.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Improved Fatigue Life</h3>
                    <p>Stress relief can improve fatigue life by 2-5x by reducing tensile residual stresses at stress concentration points.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Machining Accuracy</h3>
                    <p>Eliminates stress-induced movement during machining, ensuring parts stay within tolerance after final operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Weldment Integrity</h3>
                    <p>Reduces residual welding stresses that can cause hydrogen cracking and brittle fracture in service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Meet ASME, API, ASTM, and customer stress relief requirements with documented time-temperature cycles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">STRESS RELIEVING APPLICATIONS</span>
                <h2>Components Requiring Stress Relief</h2>
                <p>Professional stress relieving services for all industrial applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="welded">Welded Assemblies</button>
                    <button class="tab-btn" data-tab="machined">Machined Components</button>
                    <button class="tab-btn" data-tab="cast-forged">Castings & Forgings</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Alloys</button>
                </div>

                <div class="tabs-content">
                    <!-- Welded Assemblies Tab -->
                    <div class="tab-panel active" id="welded">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/weld-stress-relief.jpg" alt="Weld Stress Relief">
                            </div>
                            <div class="tab-text">
                                <h3>Welded Assembly Stress Relief</h3>
                                <p>Thermal stress relief for welded fabrications, pressure vessels, piping systems, and structural weldments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel weld stress relief per ASME</li>
                                    <li><i class="fas fa-check"></i> Piping system weld stress relief per B31.3</li>
                                    <li><i class="fas fa-check"></i> Structural steel weldment stabilization</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment weld stress relief</li>
                                    <li><i class="fas fa-check"></i> Fabricated machine base stress relief</li>
                                    <li><i class="fas fa-check"></i> Repair weld stress relief</li>
                                    <li><i class="fas fa-check"></i> Multi-pass weld layer stress relief</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">API 582</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Machined Components Tab -->
                    <div class="tab-panel" id="machined">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/machining-stress-relief.jpg" alt="Machining Stress Relief">
                            </div>
                            <div class="tab-text">
                                <h3>Machined Component Stress Relief</h3>
                                <p>Stress relief for precision machined components to eliminate residual stresses from heavy metal removal.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Heavy machining stock removal stress relief</li>
                                    <li><i class="fas fa-check"></i> Precision component dimensional stabilization</li>
                                    <li><i class="fas fa-check"></i> Shaft and spindle stress relief</li>
                                    <li><i class="fas fa-check"></i> Gear and bearing housing stabilization</li>
                                    <li><i class="fas fa-check"></i> Mold and die stress relief</li>
                                    <li><i class="fas fa-check"></i> Aerospace component stress relief</li>
                                    <li><i class="fas fa-check"></i> Intermediate machining stress relief</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AMS 2759</span>
                                    <span class="standard-tag">ASTM A108</span>
                                    <span class="standard-tag">Customer Specifications</span>
                                    <span class="standard-tag">ISO 17663</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Castings & Forgings Tab -->
                    <div class="tab-panel" id="cast-forged">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/casting-stress-relief.jpg" alt="Casting Stress Relief">
                            </div>
                            <div class="tab-text">
                                <h3>Castings & Forgings Stress Relief</h3>
                                <p>Stress relief for steel and iron castings and forgings to eliminate residual stresses from solidification and hot working.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel casting stress relief per ASTM</li>
                                    <li><i class="fas fa-check"></i> Ductile and gray iron casting stress relief</li>
                                    <li><i class="fas fa-check"></i> Forged component stress relief</li>
                                    <li><i class="fas fa-check"></i> Large casting stabilization</li>
                                    <li><i class="fas fa-check"></i> Investment casting stress relief</li>
                                    <li><i class="fas fa-check"></i> Forged valve body stress relief</li>
                                    <li><i class="fas fa-check"></i> Pump and compressor casting stabilization</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A216/A352</span>
                                    <span class="standard-tag">ASTM A487/A788</span>
                                    <span class="standard-tag">SAE J477</span>
                                    <span class="standard-tag">API 6A</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Alloys Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/specialty-stress-relief.jpg" alt="Specialty Alloy Stress Relief">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty Alloy Stress Relief</h3>
                                <p>Stress relief for stainless steels, nickel alloys, titanium, and other specialty materials.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Austenitic stainless stress relief</li>
                                    <li><i class="fas fa-check"></i> Martensitic stainless tempering/stress relief</li>
                                    <li><i class="fas fa-check"></i> Duplex stainless stress relief</li>
                                    <li><i class="fas fa-check"></i> Nickel alloy (Inconel, Monel) stress relief</li>
                                    <li><i class="fas fa-check"></i> Titanium alloy stress relief</li>
                                    <li><i class="fas fa-check"></i> Tool steel stress relief</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere for bright finish</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">304/316/410</span>
                                    <span class="standard-tag">Inconel/Monel</span>
                                    <span class="standard-tag">Ti 6Al-4V</span>
                                    <span class="standard-tag">D2/A2/O1/H13</span>
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
                <span class="section-label">COMPREHENSIVE STRESS RELIEVING SERVICES</span>
                <h2>Our Stress Relieving Capabilities</h2>
                <p>Precision thermal stress relief for all component sizes and materials</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Furnace Stress Relieving</h3>
                    <p>Controlled furnace stress relieving for welded assemblies, machined components, castings, and forgings.</p>
                    <ul>
                        <li>Temperatures: 500-700°C (930-1290°F)</li>
                        <li>Soak time: 1 hour per inch thickness minimum</li>
                        <li>Controlled heating and cooling rates</li>
                        <li>Atmosphere protection available</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Local Stress Relieving</h3>
                    <p>Targeted local stress relief for weld repairs, large components, and field applications using ceramic pad heaters.</p>
                    <ul>
                        <li>Ceramic pad resistance heating</li>
                        <li>Multi-zone temperature control</li>
                        <li>Thermocouple monitoring</li>
                        <li>Insulation for thermal efficiency</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Induction Stress Relieving</h3>
                    <p>Rapid, localized induction stress relief for specific areas on large components and weld zones.</p>
                    <ul>
                        <li>Fast heating rates</li>
                        <li>Precise temperature control</li>
                        <li>Minimal heat affected zone</li>
                        <li>Ideal for localized areas</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Vibration Stress Relieving (VSR)</h3>
                    <p>Mechanical vibration stress relief for large fabrications where thermal treatment is impractical.</p>
                    <ul>
                        <li>Sub-resonant vibration technology</li>
                        <li>No size limitations</li>
                        <li>No scaling or oxidation</li>
                        <li>Portable field system</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Intermediate Stress Relieving</h3>
                    <p>Stress relief between machining operations to maintain dimensional stability throughout manufacturing.</p>
                    <ul>
                        <li>Rough machining → stress relief</li>
                        <li>Semi-finish machining → stress relief</li>
                        <li>Final machining to tolerance</li>
                        <li>Critical precision components</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Verification & Documentation</h3>
                    <p>Comprehensive verification and documentation for code compliance and quality records.</p>
                    <ul>
                        <li>Time-temperature charts</li>
                        <li>Hardness testing before/after</li>
                        <li>Process certification</li>
                        <li>Complete documentation package</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== STRESS RELIEVING PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">STRESS RELIEVING PROCESS</span>
                    <h2>Our Stress Relieving Workflow</h2>
                    <p>Systematic thermal stress relief process ensuring consistent residual stress reduction.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Component Assessment & Planning</h4>
                                <p>Review of material, prior processing, and stress relief requirements per code or customer specification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Heating & Soaking</h4>
                                <p>Slow controlled heating to stress relief temperature with appropriate soak time based on section thickness.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Cooling</h4>
                                <p>Slow controlled cooling to ambient temperature preventing reintroduction of thermal stresses.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Verification & Certification</h4>
                                <p>Temperature chart review, hardness verification, and complete certification documentation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Compliance</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME">
                            <img src="/www/assets/images/certs/api-cert.png" alt="API">
                            <img src="/www/assets/images/certs/aws-cert.png" alt="AWS">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/stress-relief-workflow.jpg" alt="Stress Relieving Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Stress Relieving Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Temps 500-700°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Controlled Heating/Cooling</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Furnace & Local Options</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Complete Documentation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== STRESS RELIEF TEMPERATURE GUIDE ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TEMPERATURE GUIDE</span>
                <h2>Stress Relieving Temperatures by Material</h2>
                <p>Typical stress relief temperature ranges for common engineering materials</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Steel (A36, 1018, 1045)</h3>
                    <p>540-650°C (1000-1200°F). Soak 1 hour per inch thickness. Slow furnace cool to 315°C (600°F).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Alloy Steel (4140, 4340, 8620)</h3>
                    <p>540-680°C (1000-1250°F). Higher temperatures for greater stress relief, lower for strength retention.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Chrome-Moly (P-No. 3,4,5)</h3>
                    <p>620-705°C (1150-1300°F). Critical for hydrogen cracking prevention and service stress relief.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Austenitic Stainless (304, 316)</h3>
                    <p>400-480°C (750-900°F) for low-temp stress relief. Avoid 480-900°C sensitization range.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Martensitic Stainless (410, 420)</h3>
                    <p>540-650°C (1000-1200°F). Also serves as tempering after hardening.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Nickel Alloys (Inconel, Monel)</h3>
                    <p>480-620°C (900-1150°F). Material specific; consult alloy data sheet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CAUSES OF RESIDUAL STRESS ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">RESIDUAL STRESS SOURCES</span>
                <h2>Common Causes of Residual Stresses</h2>
                <p>Understanding residual stress sources helps identify components requiring stress relief</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Welding</h3>
                    <p>Localized heating and cooling during welding creates significant residual stresses near weld zones and heat-affected zones.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Heavy Machining</h3>
                    <p>Aggressive stock removal creates stress imbalances that cause distortion when material is removed.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Casting</h3>
                    <p>Uneven cooling rates during solidification create residual stresses throughout cast components.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3>Forging & Hot Working</h3>
                    <p>Non-uniform deformation and cooling during hot working creates residual stress patterns.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Cold Working</h3>
                    <p>Cold rolling, drawing, and forming create significant residual stresses from plastic deformation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Heat Treatment</h3>
                    <p>Quenching creates high residual stresses requiring tempering or stress relief treatment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Stress Relieving Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between stress relieving and annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Stress relieving heats below the critical temperature (500-700°C) to reduce residual stresses without changing microstructure. Annealing heats above the critical temperature (800-900°C) to soften and recrystallize the material. Stress relieving maintains strength while reducing stresses.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does stress relieving reduce residual stresses?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Proper stress relieving typically reduces residual stresses by 60-90%. The exact reduction depends on material, temperature, soak time, and cooling rate. Higher temperatures and longer soak times provide greater stress reduction.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When should stress relieving be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Stress relieving should be performed after welding, after rough machining (before finish machining), after casting/forging, and before final grinding. For precision components, intermediate stress relief between machining operations is recommended.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does stress relieving affect hardness or strength?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Stress relieving below the tempering temperature of the material has minimal effect on hardness and strength (typically 5-10% reduction). Higher temperature stress relief may reduce hardness but provides greater stress reduction.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is vibration stress relieving (VSR)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Vibration stress relieving uses controlled mechanical vibration to relieve residual stresses without heating. It is ideal for large fabrications that cannot be furnace treated, with no scaling or oxidation and minimal energy consumption.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is stress relieving required by ASME codes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME codes require post weld heat treatment (which includes stress relief) for specific materials and thicknesses. ASME B31.3 requires stress relief for certain piping applications. Many customer specifications mandate stress relief for critical components.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can stress relieving cause distortion?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Properly supported components with controlled heating/cooling rates do not distort during stress relieving. However, improperly supported parts or uneven heating/cooling can cause distortion. Our processes include proper fixturing and support.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you verify stress relief effectiveness?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Verification methods include time-temperature chart review, hardness testing (stress relieved material has uniform hardness), dimensional stability checks, and for critical applications, X-ray diffraction residual stress measurement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Dimensional Stability & Prevent Distortion</h2>
                <p>Contact our heat treatment specialists for professional stress relieving services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Thermal & Vibration Stress Relief</span>
                    <span><i class="fas fa-check"></i> ASME/API Compliant</span>
                    <span><i class="fas fa-check"></i> Complete Documentation</span>
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

                <a href="/www/pages/industrial-heat-treatment/annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Annealing</h3>
                    <p>Full annealing and process annealing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/normalizing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Normalizing</h3>
                    <p>Grain refinement and uniform properties</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/quenching-tempering.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching & Tempering</h3>
                    <p>High strength heat treatment</p>
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