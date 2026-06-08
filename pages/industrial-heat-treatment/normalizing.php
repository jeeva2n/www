<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Normalizing Services | Steel Normalizing Heat Treatment | Alpha Sonix NDT Solutions";
$meta_description = "Professional normalizing services for steel including grain refinement, uniform microstructure, and improved machinability. Normalizing heat treatment for carbon, alloy, and tool steels.";
$meta_keywords = "normalizing, steel normalizing, normalizing heat treatment, grain refinement, microstructure homogenization, stress relief, normalized steel, uniform properties";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/normalizing.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/normalizing-og.jpg">
    
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
        "serviceType": "Normalizing Services",
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
        "description": "Professional normalizing services for steel including grain refinement, uniform microstructure, and improved machinability for carbon, alloy, and tool steels."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/normalizing-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Normalizing</span>
                </div>
                <h1 class="page-title">Normalizing Services</h1>
                <p class="page-subtitle">Professional normalizing heat treatment for steel including grain refinement, uniform microstructure, and improved machinability for carbon, alloy, and tool steels</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-chart-line"></i> Grain Refinement</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> Uniform Microstructure</span>
                    <span class="badge"><i class="fas fa-cut"></i> Improved Machinability</span>
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
                    <h3>Grain Refinement</h3>
                    <p>Normalizing refines coarse grain structures from casting, forging, or hot working, producing uniform fine grain for improved mechanical properties.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Microstructure Homogenization</h3>
                    <p>Eliminates segregation and produces uniform pearlitic microstructure throughout the component cross-section.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Improved Machinability</h3>
                    <p>Normalized steel provides optimal machinability for most carbon and alloy steels, reducing tool wear and improving surface finish.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stress Relief</h3>
                    <p>Normalizing relieves internal stresses from prior processing while maintaining higher strength than annealing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS NORMALIZING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">STEEL HEAT TREATMENT</span>
                    <h2>What is Normalizing?</h2>
                    <p class="lead">Normalizing is a heat treatment process that heats steel above its critical temperature, holds until uniform, then air cools to produce a refined grain structure and uniform mechanical properties throughout the component.</p>
                    
                    <p>Normalizing is used to refine grain size after forging, casting, or hot working; to homogenize microstructure; and to improve machinability. The process produces a fine pearlitic microstructure with higher strength and hardness than annealing while maintaining good ductility.</p>

                    <p>Our normalizing services combine precision furnace control, uniform heating, and controlled air cooling to achieve consistent results for carbon steels, alloy steels, tool steels, and stainless steel grades.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Grain Refinement</strong>
                                <p>Normalizing refines coarse as-cast or as-forged grain structures, producing uniform fine grain size (ASTM 5-8) for improved properties.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Microstructure Homogenization</strong>
                                <p>Eliminates dendritic segregation and produces uniform pearlitic microstructure for consistent mechanical properties.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Improved Machinability</strong>
                                <p>Normalized steel provides 15-30% better machinability compared to annealed or as-rolled condition for many steel grades.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Stress Relief</strong>
                                <p>Relieves internal stresses from prior processing while maintaining higher strength than annealing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for Steel Components:</strong>
                            <p>Normalizing is essential for castings, forgings, and hot-worked components to refine grain structure, improve machinability, and ensure uniform mechanical properties. Many specifications require normalizing prior to final machining and heat treatment.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Normalizing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/normalizing-furnace.jpg" alt="Normalizing Furnace">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Normalizing furnace with controlled heating and air cooling</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">950°C</span>
                            <span class="stat-label">Max Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">ASTM 5-8</span>
                            <span class="stat-label">Grain Size</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Air Cool</span>
                            <span class="stat-label">Cooling Method</span>
                        </div>
                    </div>
                    
                    <div class="normalizing-benefits">
                        <h4><i class="fas fa-star"></i> Normalizing Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Grain refinement</li>
                            <li><i class="fas fa-check"></i> Uniform properties</li>
                            <li><i class="fas fa-check"></i> Improved machinability</li>
                            <li><i class="fas fa-check"></i> Stress relief</li>
                            <li><i class="fas fa-check"></i> Higher strength than annealed</li>
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
                <span class="section-label">WHY NORMALIZING MATTERS</span>
                <h2>Key Advantages of Normalizing Heat Treatment</h2>
                <p>Optimize grain structure and mechanical properties for steel components</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Grain Refinement</h3>
                    <p>Normalizing refines coarse as-cast grain sizes (ASTM 0-2) to fine uniform grain (ASTM 5-8), improving strength and toughness.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Uniform Mechanical Properties</h3>
                    <p>Eliminates property variations across component sections, ensuring consistent hardness, strength, and ductility throughout.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Machinability Optimization</h3>
                    <p>Normalized condition provides 15-30% longer tool life and 20-40% faster machining speeds compared to as-rolled steel.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Higher Strength Than Annealed</h3>
                    <p>Normalized steel has 20-40% higher strength than annealed steel while maintaining good ductility for most applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Stress Relief</h3>
                    <p>Relieves internal stresses from casting, forging, welding, and cold working without significant strength reduction.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Specification Compliance</h3>
                    <p>Meet ASTM, ASME, SAE, and customer normalizing requirements with documented time-temperature cycles and verification.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">NORMALIZING APPLICATIONS</span>
                <h2>Materials & Products We Normalize</h2>
                <p>Comprehensive normalizing services for all steel grades and component types</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="carbon-steel">Carbon Steels</button>
                    <button class="tab-btn" data-tab="alloy-steel">Alloy Steels</button>
                    <button class="tab-btn" data-tab="castings">Castings & Forgings</button>
                    <button class="tab-btn" data-tab="stainless">Stainless Steels</button>
                </div>

                <div class="tabs-content">
                    <!-- Carbon Steels Tab -->
                    <div class="tab-panel active" id="carbon-steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/carbon-normalizing.jpg" alt="Carbon Steel Normalizing">
                            </div>
                            <div class="tab-text">
                                <h3>Carbon Steel Normalizing</h3>
                                <p>Normalizing for low, medium, and high carbon steels to refine grain structure and improve machinability.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Low carbon (1018-1026) grain refinement for forming</li>
                                    <li><i class="fas fa-check"></i> Medium carbon (1045-1050) machinability improvement</li>
                                    <li><i class="fas fa-check"></i> High carbon (1060-1095) spheroidize preparation</li>
                                    <li><i class="fas fa-check"></i> Hot rolled bar and plate normalizing</li>
                                    <li><i class="fas fa-check"></i> Forged carbon steel components</li>
                                    <li><i class="fas fa-check"></i> Structural steel (A36, A572) normalizing</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel plate (A516) normalizing</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">AISI 1018/1020</span>
                                    <span class="standard-tag">AISI 1045/1050</span>
                                    <span class="standard-tag">ASTM A36/A516</span>
                                    <span class="standard-tag">SAE 1045</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alloy Steels Tab -->
                    <div class="tab-panel" id="alloy-steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/alloy-normalizing.jpg" alt="Alloy Steel Normalizing">
                            </div>
                            <div class="tab-text">
                                <h3>Alloy Steel Normalizing</h3>
                                <p>Normalizing for chrome-moly, nickel-chrome, and other alloy steels for grain refinement and property uniformity.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 4140/4142 normalizing prior to quench & temper</li>
                                    <li><i class="fas fa-check"></i> 4340 normalizing for grain refinement</li>
                                    <li><i class="fas fa-check"></i> 8620 normalizing for case hardening preparation</li>
                                    <li><i class="fas fa-check"></i> 4130 normalizing for aircraft components</li>
                                    <li><i class="fas fa-check"></i> Forged alloy steel shafts and gears</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly pressure vessel components</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment alloy steel parts</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">AISI 4140/4340</span>
                                    <span class="standard-tag">AISI 8620/4130</span>
                                    <span class="standard-tag">ASTM A193/A194</span>
                                    <span class="standard-tag">AMS 6409/6415</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Castings & Forgings Tab -->
                    <div class="tab-panel" id="castings">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/casting-normalizing.jpg" alt="Casting Normalizing">
                            </div>
                            <div class="tab-text">
                                <h3>Castings & Forgings Normalizing</h3>
                                <p>Normalizing for steel castings and forgings to refine as-cast or as-forged grain structure and relieve internal stresses.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Carbon steel castings normalizing</li>
                                    <li><i class="fas fa-check"></i> Alloy steel castings (per ASTM A487)</li>
                                    <li><i class="fas fa-check"></i> Forged valve bodies and flanges</li>
                                    <li><i class="fas fa-check"></i> Forged shafts and gear blanks</li>
                                    <li><i class="fas fa-check"></i> Forged fittings and flanges</li>
                                    <li><i class="fas fa-check"></i> Pump and compressor castings</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment cast components</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A216/A352</span>
                                    <span class="standard-tag">ASTM A487</span>
                                    <span class="standard-tag">ASTM A788</span>
                                    <span class="standard-tag">SAE J477</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stainless Steels Tab -->
                    <div class="tab-panel" id="stainless">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/stainless-normalizing.jpg" alt="Stainless Steel Normalizing">
                            </div>
                            <div class="tab-text">
                                <h3>Stainless & Tool Steel Normalizing</h3>
                                <p>Normalizing for martensitic stainless steels and tool steels to refine grain structure prior to final heat treatment.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Martensitic stainless (410, 420, 440C) normalizing</li>
                                    <li><i class="fas fa-check"></i> Tool steel (D2, A2, O1) normalizing</li>
                                    <li><i class="fas fa-check"></i> High-speed steel (M2) normalizing</li>
                                    <li><i class="fas fa-check"></i> Hot work steel (H13) normalizing</li>
                                    <li><i class="fas fa-check"></i> Ferritic stainless normalizing</li>
                                    <li><i class="fas fa-check"></i> Precipitation hardening stainless</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere for decarb prevention</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">410/420/440C</span>
                                    <span class="standard-tag">D2/A2/O1</span>
                                    <span class="standard-tag">M2/H13</span>
                                    <span class="standard-tag">17-4 PH/15-5 PH</span>
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
                <span class="section-label">COMPREHENSIVE NORMALIZING SERVICES</span>
                <h2>Our Normalizing Capabilities</h2>
                <p>Precision furnace control and uniform air cooling for consistent normalizing results</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Standard Normalizing</h3>
                    <p>Conventional normalizing with austenitizing and still air cooling for carbon and low alloy steels.</p>
                    <ul>
                        <li>Temperature: 800-950°C (1470-1740°F)</li>
                        <li>Soak time based on section thickness</li>
                        <li>Still or forced air cooling options</li>
                        <li>Atmosphere protection available</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Double Normalizing</h3>
                    <p>Two-stage normalizing for enhanced grain refinement in alloy steels and critical components.</p>
                    <ul>
                        <li>First normalize at higher temperature</li>
                        <li>Second normalize at lower temperature</li>
                        <li>Produces finer uniform grain structure</li>
                        <li>For critical aerospace/defense components</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Controlled Atmosphere Normalizing</h3>
                    <p>Normalizing in protective atmosphere to prevent surface oxidation and decarburization.</p>
                    <ul>
                        <li>Endothermic or exothermic atmosphere</li>
                        <li>Decarburization prevention</li>
                        <li>Scale-free bright finish</li>
                        <li>Ideal for machined components</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Normalizing & Tempering</h3>
                    <p>Normalizing followed by tempering to achieve specific mechanical property requirements.</p>
                    <ul>
                        <li>Normalizing for grain refinement</li>
                        <li>Tempering for property adjustment</li>
                        <li>Achieve specified hardness/toughness</li>
                        <li>Per ASTM/ASME/AMS requirements</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Solution Annealing (Austenitic Stainless)</h3>
                    <p>High-temperature solution treatment for austenitic stainless steels to dissolve carbides.</p>
                    <ul>
                        <li>Temperature: 1010-1120°C (1850-2050°F)</li>
                        <li>Rapid cooling (water or air)</li>
                        <li>Restores corrosion resistance</li>
                        <li>Prevents sensitization</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Quality Verification</h3>
                    <p>Comprehensive testing to verify normalizing results and material properties.</p>
                    <ul>
                        <li>Hardness testing (HB, HRB, HRC)</li>
                        <li>Microstructure grain size evaluation</li>
                        <li>Tensile testing (where required)</li>
                        <li>Impact testing (Charpy)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== NORMALIZING PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">NORMALIZING PROCESS</span>
                    <h2>Our Normalizing Workflow</h2>
                    <p>Systematic heat treatment process ensuring consistent grain refinement and uniform properties.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material Assessment & Planning</h4>
                                <p>Review of material grade, prior processing, and specification requirements for normalizing cycle selection.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Austenitizing & Soaking</h4>
                                <p>Controlled heating to critical temperature with appropriate soak time for complete transformation.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-wind"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Air Cooling</h4>
                                <p>Uniform air cooling (still or forced) to room temperature for transformation to fine pearlitic structure.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Verification & Certification</h4>
                                <p>Hardness testing, microstructure evaluation, and complete documentation for quality records.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Equipment & Certifications</h4>
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
                        <img src="/www/assets/images/heat-treatment/normalizing-workflow.jpg" alt="Normalizing Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Normalizing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Temps up to 950°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Uniform Air Cooling</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Grain Refinement</span>
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

    <!-- ===================== NORMALIZING VS ANNEALING ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPARISON GUIDE</span>
                <h2>Normalizing vs Annealing vs Quenching</h2>
                <p>Understanding the differences between common heat treatment processes</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Normalizing</h3>
                    <p>Heat above critical → Air cool. Result: Fine pearlite. Hardness: 180-250 HB. Best for grain refinement and machinability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Full Annealing</h3>
                    <p>Heat above critical → Furnace cool. Result: Coarse pearlite. Hardness: 150-200 HB. Best for maximum softness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Process Annealing</h3>
                    <p>Heat below critical → Air cool. Result: Recrystallized. Hardness: 120-160 HB. Best for cold-worked materials.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching</h3>
                    <p>Heat above critical → Rapid cool. Result: Martensite. Hardness: 400-650 HB. Best for maximum hardness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Tempering</h3>
                    <p>Reheat quenched steel → Controlled cool. Result: Tempered martensite. Hardness: 250-550 HB. Best for toughness balance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Spheroidize Annealing</h3>
                    <p>Prolonged subcritical heating → Slow cool. Result: Spheroidized carbides. Hardness: 140-180 HB. Best for cold heading.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Normalizing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between normalizing and annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Both involve heating above the critical temperature, but normalizing uses air cooling while annealing uses slow furnace cooling. Normalizing produces finer grain size, higher strength (20-40% higher), and better machinability than annealing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When should normalizing be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Normalizing is performed after casting, forging, or hot working to refine grain structure; before machining to improve machinability; and prior to final heat treatment (quenching & tempering) for uniform properties and reduced distortion.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What hardness does normalized steel achieve?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical normalized hardness: Low carbon steel: 130-180 HB. Medium carbon (1045): 180-220 HB. Alloy steel (4140): 240-280 HB. Tool steel: 250-300 HB. Hardness depends on carbon content and alloy composition.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does normalizing relieve stress?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, normalizing relieves 60-80% of residual stresses from casting, forging, welding, and cold working. It is more effective than stress relief annealing for stress reduction but results in higher strength and hardness.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What grain size does normalizing produce?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Proper normalizing typically produces ASTM grain size 5-8 (fine grain). Coarse as-cast grains (ASTM 0-2) are refined to uniform fine grain structure throughout the component cross-section.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can stainless steel be normalized?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Martensitic stainless steels (410, 420, 440C) can be normalized. Austenitic stainless steels require solution annealing (rapid cooling) rather than air cooling. Ferritic stainless can be normalized for grain refinement.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is normalizing required by ASME codes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME Section VIII requires normalizing for certain pressure vessel steels (e.g., SA-516 Grade 70 above 2" thickness). Many material specifications require normalizing for forged and cast components.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you verify normalizing results?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Verification includes hardness testing (Brinell or Rockwell) to confirm specification compliance. Microstructure examination (grain size, pearlite structure) confirms proper normalizing. Tensile testing where required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Refine Grain Structure & Improve Machinability</h2>
                <p>Contact our heat treatment specialists for professional normalizing services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Grain Refinement</span>
                    <span><i class="fas fa-check"></i> Uniform Properties</span>
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
                <a href="/www/pages/industrial-heat-treatment/annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Annealing</h3>
                    <p>Full annealing and stress relief</p>
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

                <a href="/www/pages/industrial-heat-treatment/post-weld-heat-treatment.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Post Weld Heat Treatment</h3>
                    <p>Stress relieving and PWHT</p>
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
            </div>
        </div>
    </section>

    <?php include $base . '/includes/footer.php'; ?>
    
    <script src="/www/assets/js/script.js"></script>
    <script src="/www/assets/js/service-page.js"></script>

</body>
</html>