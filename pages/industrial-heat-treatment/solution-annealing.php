<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Solution Annealing Services | Austenitic Stainless Steel Heat Treatment | Alpha Sonix NDT Solutions";
$meta_description = "Professional solution annealing services for austenitic stainless steels, nickel alloys, and other non-ferrous alloys. Restore corrosion resistance, dissolve carbides, and optimize mechanical properties.";
$meta_keywords = "solution annealing, austenitic stainless steel heat treatment, carbide dissolution, corrosion resistance restoration, sensitization reversal, nickel alloy annealing, stainless steel solution treatment";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/solution-annealing.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/solution-annealing-og.jpg">
    
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
        "serviceType": "Solution Annealing Services",
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
        "description": "Professional solution annealing services for austenitic stainless steels and nickel alloys to restore corrosion resistance and optimize mechanical properties."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/solution-annealing-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Solution Annealing</span>
                </div>
                <h1 class="page-title">Solution Annealing Services</h1>
                <p class="page-subtitle">Professional high-temperature heat treatment for austenitic stainless steels, nickel alloys, and non-ferrous alloys to restore corrosion resistance, dissolve carbides, and optimize mechanical properties</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-temperature-high"></i> 1010-1120°C Process</span>
                    <span class="badge"><i class="fas fa-tint"></i> Rapid Quench</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Corrosion Resistance</span>
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
                    <h3>High-Temperature Solution Treatment</h3>
                    <p>Heating to 1010-1120°C (1850-2050°F) to dissolve chromium carbides and other precipitates into solid solution.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Rapid Quenching</h3>
                    <p>Fast cooling (water or polymer quench) to prevent carbide re-precipitation and restore corrosion resistance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Corrosion Resistance Restoration</h3>
                    <p>Eliminates sensitization and restores intergranular corrosion resistance in austenitic stainless steels.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Mechanical Property Optimization</h3>
                    <p>Achieves optimal combination of strength, ductility, and toughness for demanding applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SOLUTION ANNEALING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">STAINLESS STEEL HEAT TREATMENT</span>
                    <h2>What is Solution Annealing?</h2>
                    <p class="lead">Solution annealing is a high-temperature heat treatment process that heats austenitic stainless steels and nickel alloys to a temperature where carbides and precipitates dissolve into solid solution, followed by rapid quenching to prevent re-precipitation and restore corrosion resistance.</p>
                    
                    <p>When austenitic stainless steels are heated in the sensitization range (480-900°C) during welding or slow cooling, chromium carbides form at grain boundaries, depleting adjacent areas of chromium and causing susceptibility to intergranular corrosion. Solution annealing reverses this sensitization and restores corrosion resistance.</p>

                    <p>Our solution annealing services combine precision high-temperature furnaces, controlled atmosphere protection, and rapid quenching systems to achieve complete carbide dissolution and restore material properties for stainless steels, nickel alloys, and other non-ferrous alloys.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Carbide Dissolution</strong>
                                <p>High-temperature heating dissolves chromium carbides and sigma phase, eliminating sensitization and restoring corrosion resistance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Sensitization Reversal</strong>
                                <p>Reverses the effects of welding or slow cooling through the sensitization range (480-900°C).</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Intergranular Corrosion Prevention</strong>
                                <p>Restores chromium to grain boundaries, preventing intergranular corrosion attack in service environments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Softening & Property Optimization</strong>
                                <p>Produces uniform, fully austenitic microstructure with optimal strength, ductility, and toughness.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <strong>Critical for Stainless Steel Performance:</strong>
                            <p>Sensitized stainless steel loses its corrosion resistance and can fail rapidly in aggressive environments. Solution annealing restores full corrosion resistance and is essential for equipment in chemical, pharmaceutical, food, and marine applications where intergranular corrosion could cause catastrophic failure.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Solution Annealing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/solution-annealing-furnace.jpg" alt="Solution Annealing Furnace">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>High-temperature solution annealing furnace with rapid quench system</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1120°C</span>
                            <span class="stat-label">Max Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Rapid</span>
                            <span class="stat-label">Water Quench</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Corrosion Restoration</span>
                        </div>
                    </div>
                    
                    <div class="solution-benefits">
                        <h4><i class="fas fa-star"></i> Solution Annealing Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Restore corrosion resistance</li>
                            <li><i class="fas fa-check"></i> Eliminate sensitization</li>
                            <li><i class="fas fa-check"></i> Dissolve carbides</li>
                            <li><i class="fas fa-check"></i> Optimize mechanical properties</li>
                            <li><i class="fas fa-check"></i> Soften work-hardened material</li>
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
                <span class="section-label">WHY SOLUTION ANNEALING MATTERS</span>
                <h2>Key Advantages of Professional Solution Annealing</h2>
                <p>Restore and optimize stainless steel properties for critical service</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Corrosion Resistance Restoration</h3>
                    <p>Completely restores intergranular corrosion resistance in sensitized stainless steel, preventing rapid failure in corrosive environments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbide Dissolution</h3>
                    <p>Dissolves chromium carbides and sigma phase, eliminating grain boundary depletion and restoring chromium to solution.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Sensitization Reversal</h3>
                    <p>Reverses the damaging effects of welding and slow cooling through the sensitization temperature range (480-900°C).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Softening & Workability</h3>
                    <p>Softens cold-worked or precipitation-hardened material, restoring ductility for further forming operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Uniform Microstructure</h3>
                    <p>Produces uniform, fully austenitic microstructure with consistent mechanical properties throughout the component.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Specification Compliance</h3>
                    <p>Meet ASTM, ASME, AMS, and customer solution annealing requirements with documented time-temperature cycles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">SOLUTION ANNEALING APPLICATIONS</span>
                <h2>Materials We Solution Anneal</h2>
                <p>Professional high-temperature treatment for stainless steels and specialty alloys</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="austenitic">Austenitic Stainless Steels</button>
                    <button class="tab-btn" data-tab="duplex">Duplex & Super Duplex</button>
                    <button class="tab-btn" data-tab="nickel">Nickel Alloys</button>
                    <button class="tab-btn" data-tab="precipitation">Precipitation Hardening</button>
                </div>

                <div class="tabs-content">
                    <!-- Austenitic Stainless Steels Tab -->
                    <div class="tab-panel active" id="austenitic">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/austenitic-solution.jpg" alt="Austenitic Solution Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Austenitic Stainless Steel Solution Annealing</h3>
                                <p>Complete solution annealing for 300-series stainless steels to restore corrosion resistance after welding or hot working.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 304/304L stainless steel (1010-1120°C)</li>
                                    <li><i class="fas fa-check"></i> 316/316L stainless steel (1010-1120°C)</li>
                                    <li><i class="fas fa-check"></i> 309/310 high-temperature grades</li>
                                    <li><i class="fas fa-check"></i> 321 titanium-stabilized (stabilization anneal)</li>
                                    <li><i class="fas fa-check"></i> 347 columbium-stabilized (stabilization anneal)</li>
                                    <li><i class="fas fa-check"></i> Welded stainless steel fabrications</li>
                                    <li><i class="fas fa-check"></i> Sensitized components requiring restoration</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">304/304L/304H</span>
                                    <span class="standard-tag">316/316L/316H</span>
                                    <span class="standard-tag">309/310/321/347</span>
                                    <span class="standard-tag">ASTM A240/A312</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplex & Super Duplex Tab -->
                    <div class="tab-panel" id="duplex">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/duplex-solution.jpg" alt="Duplex Solution Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Duplex & Super Duplex Solution Annealing</h3>
                                <p>Precision solution annealing to achieve optimal austenite-ferrite balance for duplex stainless steels.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 2205 duplex stainless (1040-1100°C)</li>
                                    <li><i class="fas fa-check"></i> 2507 super duplex (1070-1120°C)</li>
                                    <li><i class="fas fa-check"></i> Lean duplex (2101, 2304)</li>
                                    <li><i class="fas fa-check"></i> 255 and Zeron 100 super duplex</li>
                                    <li><i class="fas fa-check"></i> Rapid quench to prevent sigma phase</li>
                                    <li><i class="fas fa-check"></i> Weldment restoration</li>
                                    <li><i class="fas fa-check"></i> Ferrite content verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">2205/2507</span>
                                    <span class="standard-tag">2101/2304</span>
                                    <span class="standard-tag">255/Zeron 100</span>
                                    <span class="standard-tag">ASTM A790/A928</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nickel Alloys Tab -->
                    <div class="tab-panel" id="nickel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/nickel-solution.jpg" alt="Nickel Alloy Solution Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Nickel Alloy & Specialty Solution Annealing</h3>
                                <p>High-temperature solution treatment for nickel-based superalloys and corrosion-resistant alloys.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Inconel 600/601/625 (1010-1150°C)</li>
                                    <li><i class="fas fa-check"></i> Incoloy 800/825 solution annealing</li>
                                    <li><i class="fas fa-check"></i> Monel 400/405 (870-980°C)</li>
                                    <li><i class="fas fa-check"></i> Hastelloy C-276/B-2 (1120-1180°C)</li>
                                    <li><i class="fas fa-check"></i> Alloy 20 (Nb-stabilized)</li>
                                    <li><i class="fas fa-check"></i> Titanium and titanium alloys</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere for oxidation prevention</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">Inconel/Incoloy</span>
                                    <span class="standard-tag">Monel/Hastelloy</span>
                                    <span class="standard-tag">Alloy 20/Titanium</span>
                                    <span class="standard-tag">AMS/ASTM Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Precipitation Hardening Tab -->
                    <div class="tab-panel" id="precipitation">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/ph-solution.jpg" alt="PH Stainless Solution Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Precipitation Hardening Stainless Steel</h3>
                                <p>Solution treatment (annealing) for PH stainless steels prior to aging for maximum properties.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 17-4 PH solution anneal (1040-1065°C)</li>
                                    <li><i class="fas fa-check"></i> 15-5 PH solution treatment (1040°C)</li>
                                    <li><i class="fas fa-check"></i> 17-7 PH austenite conditioning</li>
                                    <li><i class="fas fa-check"></i> A-286 solution treatment (980°C)</li>
                                    <li><i class="fas fa-check"></i> Custom 450/455/465</li>
                                    <li><i class="fas fa-check"></i> Rapid quench to retain austenite</li>
                                    <li><i class="fas fa-check"></i> Preparation for aging treatment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">17-4 PH/15-5 PH</span>
                                    <span class="standard-tag">17-7 PH/A-286</span>
                                    <span class="standard-tag">Custom 450/455/465</span>
                                    <span class="standard-tag">AMS 2759/5604</span>
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
                <span class="section-label">COMPREHENSIVE SOLUTIONS</span>
                <h2>Our Solution Annealing Capabilities</h2>
                <p>Precision high-temperature furnaces with rapid quench for complete solution treatment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Austenitic Stainless Solution Annealing</h3>
                    <p>Complete solution treatment for 304, 316, 321, 347, and other 300-series stainless steels.</p>
                    <ul>
                        <li>Temperature: 1010-1120°C (1850-2050°F)</li>
                        <li>Soak time: 1-30 minutes per mm thickness</li>
                        <li>Water quench (rapid cooling)</li>
                        <li>Controlled atmosphere for bright finish</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Duplex Stainless Solution Annealing</h3>
                    <p>Precision solution treatment to achieve optimum austenite-ferrite balance (40-60% each).</p>
                    <ul>
                        <li>Temperature: 1040-1120°C (1900-2050°F)</li>
                        <li>Rapid quench to prevent sigma phase</li>
                        <li>Ferrite content verification</li>
                        <li>Corrosion testing available</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Nickel Alloy Solution Annealing</h3>
                    <p>High-temperature solution treatment for Inconel, Incoloy, Monel, Hastelloy, and other nickel alloys.</p>
                    <ul>
                        <li>Temperature: 980-1180°C (1800-2150°F)</li>
                        <li>Material-specific time-temperature cycles</li>
                        <li>Controlled atmosphere or vacuum options</li>
                        <li>Water or polymer quench</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Stabilization Annealing</h3>
                    <p>Specialized heat treatment for titanium or columbium-stabilized grades (321, 347, Alloy 20).</p>
                    <ul>
                        <li>Temperature: 870-900°C (1600-1650°F)</li>
                        <li>Extended soak for carbide stabilization</li>
                        <li>Prevents sensitization in service</li>
                        <li>Slower cooling allowed</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Bright Solution Annealing</h3>
                    <p>Controlled atmosphere (hydrogen, dissociated ammonia, or vacuum) for scale-free bright finish.</p>
                    <ul>
                        <li>Hydrogen atmosphere option</li>
                        <li>Vacuum furnace solution annealing</li>
                        <li>No post-treatment pickling required</li>
                        <li>Ideal for finished components</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Verification & Testing</h3>
                    <p>Comprehensive testing to verify solution annealing effectiveness and material properties.</p>
                    <ul>
                        <li>Hardness testing before/after</li>
                        <li>Ferrite content measurement (duplex)</li>
                        <li>Corrosion testing (ASTM A262)</li>
                        <li>Microstructure evaluation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== SOLUTION ANNEALING PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">HEAT TREATMENT PROCESS</span>
                    <h2>Our Solution Annealing Workflow</h2>
                    <p>Systematic high-temperature process ensuring complete carbide dissolution and corrosion resistance restoration.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material & Code Assessment</h4>
                                <p>Review of material grade, prior processing, and specification requirements for solution annealing cycle selection.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>High-Temperature Heating & Soaking</h4>
                                <p>Controlled heating to 1010-1180°C (1850-2150°F) with soak time for complete carbide dissolution.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Rapid Quenching</h4>
                                <p>Immediate water or polymer quench to prevent carbide re-precipitation during cooling.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Verification & Certification</h4>
                                <p>Hardness testing, corrosion testing, microstructure evaluation, and complete documentation.</p>
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
                        <img src="/www/assets/images/heat-treatment/solution-workflow.jpg" alt="Solution Annealing Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Solution Annealing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Temp 1010-1180°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Rapid Water Quench</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Carbide Dissolution</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Corrosion Restoration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== SOLUTION ANNEALING GUIDE ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TEMPERATURE GUIDE</span>
                <h2>Solution Annealing Temperatures by Material</h2>
                <p>Typical temperature ranges for common stainless steel and nickel alloys</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>304/304L/316/316L</h3>
                    <p>1010-1120°C (1850-2050°F). Rapid water quench. Soak 1-30 min based on thickness. Heated above 1065°C for best results.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>321/347 (Stabilized)</h3>
                    <p>1040-1095°C (1900-2000°F) for solution. Optional stabilization: 870-900°C (1600-1650°F) after solution annealing.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>2205 Duplex</h3>
                    <p>1040-1100°C (1900-2010°F). Rapid water quench. Critical to avoid sigma phase precipitation during cooling.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>2507 Super Duplex</h3>
                    <p>1070-1120°C (1960-2050°F). Rapid water quench minimum 100°C/sec cooling rate.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Inconel 625</h3>
                    <p>1095-1205°C (2000-2200°F). Rapid quench (water or polymer). Longer soak times for complete solution.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>17-4 PH (Solution)</h3>
                    <p>1040-1065°C (1900-1950°F). Water or oil quench. Followed by aging 480-620°C for final properties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== SENSITIZATION & SOLUTION ANNEALING ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CORROSION MECHANISM</span>
                <h2>Sensitization vs Solution Annealed</h2>
                <p>Understanding why solution annealing is critical for stainless steel</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sensitized Condition</h3>
                    <p>Carbides at grain boundaries. Chromium-depleted zones (0-5% Cr). Severe intergranular corrosion risk. Failure rapid in aggressive environments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Solution Annealed</h3>
                    <p>Carbides dissolved. Chromium in solution (18%+ Cr). Full corrosion resistance. No intergranular attack. Essential for chemical, marine, food service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stabilized Grades (321/347)</h3>
                    <p>Titanium or columbium carbides form preferentially. No chromium depletion. Stabilization anneal further improves intergranular corrosion resistance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Low Carbon Grades (L)</h3>
                    <p>Lower carbon content (0.03% max) reduces carbide precipitation. Still requires solution annealing for best corrosion resistance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Duplex Stainless</h3>
                    <p>Sigma phase formation from 600-1000°C. Solution annealing dissolves sigma and restores ductility/corrosion resistance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Verification Testing</h3>
                    <p>ASTM A262 (copper sulfate/sulfuric acid) confirms intergranular corrosion resistance. Required for many specifications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Solution Annealing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between solution annealing and regular annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Solution annealing uses higher temperatures (1010-1180°C) followed by rapid quenching to dissolve carbides and prevent re-precipitation. Regular annealing for carbon steel uses lower temperatures (800-900°C) with slow furnace cooling for softening.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why is rapid quenching required after solution annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Rapid quenching (water or polymer) prevents chromium carbides from re-precipitating during cooling through the sensitization range (480-900°C). Slow cooling would re-sensitize the material and negate the benefits of solution annealing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can solution annealing be performed on welded assemblies?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, solution annealing is often required for welded austenitic stainless steel fabrications to restore corrosion resistance in the heat-affected zone (HAZ) where sensitization occurred during welding. Full assembly treatment requires furnace capacity for the entire component.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does solution annealing cause distortion?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>High temperatures (up to 1120°C) and rapid water quenching can cause some distortion. Thin sections and complex shapes are most susceptible. Proper fixturing and slow, uniform heating minimize distortion. Stabilization annealing (870-900°C) causes less distortion.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is sensitization in stainless steel?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Sensitization occurs when stainless steel is heated in the 480-900°C range, causing chromium carbides to form at grain boundaries. The adjacent areas become chromium-depleted (below 12% Cr) and lose corrosion resistance, leading to intergranular corrosion attack in service.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is solution annealing effectiveness verified?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Effectiveness is verified through hardness testing, microstructure evaluation (no carbide precipitation), and intergranular corrosion testing per ASTM A262 (Practice A, B, C, or E). Ferrite content measurement for duplex grades.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do stabilized grades (321, 347) require solution annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, stabilized grades require solution annealing to fully dissolve carbides and put titanium or columbium into solution. An additional stabilization anneal (870-900°C) is sometimes performed after solution annealing to improve resistance to intergranular corrosion in severe service.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the typical cooling rate after solution annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Rapid cooling is required, typically water quenching (fastest). For thin sections, forced air or polymer quench may be sufficient. Cooling must be fast enough to pass through the 480-900°C sensitization range without allowing carbide precipitation—typically achieved in seconds for water quench.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Restore Corrosion Resistance to Your Stainless Steel</h2>
                <p>Contact our heat treatment specialists for professional solution annealing services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> 1010-1180°C Processing</span>
                    <span><i class="fas fa-check"></i> Rapid Water Quench</span>
                    <span><i class="fas fa-check"></i> Corrosion Testing Available</span>
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
                <a href="/www/pages/industrial-heat-treatment/annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Annealing</h3>
                    <p>Full and process annealing services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/hardening-case-hardening.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Hardening & Case Hardening</h3>
                    <p>Through and surface hardening</p>
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