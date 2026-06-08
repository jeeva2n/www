<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Annealing Services | Full Annealing & Process Annealing | Alpha Sonix NDT Solutions";
$meta_description = "Professional annealing services including full annealing, process annealing, stress relief annealing, and spheroidize annealing for steel and non-ferrous alloys. Improve machinability and relieve internal stresses.";
$meta_keywords = "annealing services, full annealing, process annealing, stress relief annealing, spheroidize annealing, steel annealing, heat treatment, softening, machinability improvement";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/annealing.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/annealing-og.jpg">
    
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
        "serviceType": "Annealing Services",
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
        "description": "Professional annealing services including full annealing, process annealing, stress relief, and spheroidize annealing to improve machinability and relieve internal stresses."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/annealing-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Annealing</span>
                </div>
                <h1 class="page-title">Annealing Services</h1>
                <p class="page-subtitle">Professional full annealing, process annealing, stress relief, and spheroidize annealing for steel and non-ferrous alloys</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-temperature-low"></i> Full Annealing</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Process Annealing</span>
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
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Full Annealing</h3>
                    <p>Complete heat treatment cycle for softening steel, improving machinability, and refining grain structure after forging or casting.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Process Annealing</h3>
                    <p>Intermediate annealing for cold-worked materials to restore ductility and enable further forming or drawing operations.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Stress Relief Annealing</h3>
                    <p>Low-temperature annealing to reduce residual stresses from welding, machining, or cold working without significant hardness reduction.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-circle"></i>
                    </div>
                    <h3>Spheroidize Annealing</h3>
                    <p>Specialized annealing for high-carbon steels to produce spheroidized carbide structure for improved machinability and cold forming.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS ANNEALING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">STEEL SOFTENING HEAT TREATMENT</span>
                    <h2>What is Annealing?</h2>
                    <p class="lead">Annealing is a heat treatment process that heats steel to a specific temperature, holds at that temperature, and then cools slowly to produce a soft, ductile microstructure with improved machinability and reduced internal stresses.</p>
                    
                    <p>Annealing is essential for materials that have been hardened by previous processing (casting, forging, rolling, welding, or cold working). The process restores ductility, reduces hardness, and improves machinability for subsequent manufacturing operations.</p>

                    <p>Our annealing services combine precision furnace control, controlled atmosphere protection, and slow cooling cycles to achieve the desired microstructure and mechanical properties for carbon steels, alloy steels, tool steels, and non-ferrous alloys.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Improved Machinability</strong>
                                <p>Annealing reduces hardness and produces uniform microstructure for better cutting tool life and surface finish during machining operations.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Stress Relief</strong>
                                <p>Removal of residual stresses from casting, forging, welding, and cold working prevents distortion during subsequent machining or service.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Grain Refinement</strong>
                                <p>Annealing produces uniform, equiaxed grain structure that improves mechanical properties and subsequent heat treatment response.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Restored Ductility</strong>
                                <p>Cold-worked materials regain ductility for additional forming, drawing, or bending operations without cracking.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for Manufacturing:</strong>
                            <p>Annealed steel has 50-70% lower hardness compared to as-rolled or normalized condition, improving machinability by 2-4x and extending tool life. Proper annealing prevents cracking during cold forming and reduces machining costs significantly.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Annealing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/annealing-furnace.jpg" alt="Annealing Furnace">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Controlled atmosphere annealing furnace with temperature monitoring</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">900°C</span>
                            <span class="stat-label">Max Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50%</span>
                            <span class="stat-label">Hardness Reduction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Controlled</span>
                            <span class="stat-label">Atmosphere</span>
                        </div>
                    </div>
                    
                    <div class="annealing-benefits">
                        <h4><i class="fas fa-star"></i> Annealing Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Improved machinability</li>
                            <li><i class="fas fa-check"></i> Stress relief</li>
                            <li><i class="fas fa-check"></i> Restored ductility</li>
                            <li><i class="fas fa-check"></i> Grain refinement</li>
                            <li><i class="fas fa-check"></i> Uniform properties</li>
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
                <span class="section-label">WHY PROFESSIONAL ANNEALING MATTERS</span>
                <h2>Key Advantages of Controlled Annealing Services</h2>
                <p>Optimize material properties for manufacturing and service performance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Machinability Improvement</h3>
                    <p>Annealed steel machines 2-4x faster than as-rolled material with 50-75% longer tool life, reducing production costs significantly.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Distortion Prevention</h3>
                    <p>Stress relief annealing prevents distortion during machining and heat treatment, maintaining dimensional accuracy.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Formability Enhancement</h3>
                    <p>Restored ductility enables deep drawing, bending, and forming operations without cracking or splitting.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Microstructure Homogenization</h3>
                    <p>Eliminates segregation and produces uniform microstructure for consistent mechanical properties.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Improved Weldability</h3>
                    <p>Annealed materials provide better weldability with reduced risk of hydrogen cracking in hardenable steels.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Specification Compliance</h3>
                    <p>Meet ASTM, SAE, AMS, and customer annealing requirements with documented time-temperature cycles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">ANNEALING APPLICATIONS</span>
                <h2>Materials & Products We Anneal</h2>
                <p>Comprehensive annealing services for all steel grades and non-ferrous alloys</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="carbon-steel">Carbon Steels</button>
                    <button class="tab-btn" data-tab="alloy-steel">Alloy Steels</button>
                    <button class="tab-btn" data-tab="tool-steel">Tool Steels</button>
                    <button class="tab-btn" data-tab="non-ferrous">Non-Ferrous Alloys</button>
                </div>

                <div class="tabs-content">
                    <!-- Carbon Steels Tab -->
                    <div class="tab-panel active" id="carbon-steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/carbon-steel-annealing.jpg" alt="Carbon Steel Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Carbon Steel Annealing</h3>
                                <p>Full and process annealing for low, medium, and high carbon steels to improve machinability and formability.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Low carbon (1008-1020) process annealing for cold forming</li>
                                    <li><i class="fas fa-check"></i> Medium carbon (1045-1050) full annealing for machining</li>
                                    <li><i class="fas fa-check"></i> High carbon (1060-1095) spheroidize annealing for cold heading</li>
                                    <li><i class="fas fa-check"></i> Forged carbon steel components</li>
                                    <li><i class="fas fa-check"></i> Cast carbon steel stress relief</li>
                                    <li><i class="fas fa-check"></i> Cold drawn bar and wire annealing</li>
                                    <li><i class="fas fa-check"></i> Sheet metal and strip annealing</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">AISI 1018/1020</span>
                                    <span class="standard-tag">AISI 1045/1050</span>
                                    <span class="standard-tag">AISI 1060/1095</span>
                                    <span class="standard-tag">ASTM A36/A516</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alloy Steels Tab -->
                    <div class="tab-panel" id="alloy-steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/alloy-steel-annealing.jpg" alt="Alloy Steel Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Alloy Steel Annealing</h3>
                                <p>Full annealing and stress relief for chrome-moly, nickel-chrome, and other alloy steel grades.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> 4140/4142 full annealing for machinability</li>
                                    <li><i class="fas fa-check"></i> 4340 annealing prior to reheat treatment</li>
                                    <li><i class="fas fa-check"></i> 8620 case hardening steel annealing</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly (P-No. 3,4,5) stress relief</li>
                                    <li><i class="fas fa-check"></i> Forged alloy steel components</li>
                                    <li><i class="fas fa-check"></i> Investment cast alloy steel parts</li>
                                    <li><i class="fas fa-check"></i> Welded alloy steel assemblies</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">AISI 4140/4340</span>
                                    <span class="standard-tag">AISI 8620/8640</span>
                                    <span class="standard-tag">AISI 4130</span>
                                    <span class="standard-tag">ASTM A193/A194</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tool Steels Tab -->
                    <div class="tab-panel" id="tool-steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/tool-steel-annealing.jpg" alt="Tool Steel Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Tool Steel & High-Speed Steel Annealing</h3>
                                <p>Specialized spheroidize annealing for tool steels to improve machinability and prepare for hardening.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> D2/D3 high carbon cold work steel annealing</li>
                                    <li><i class="fas fa-check"></i> A2/A6 air hardening steel annealing</li>
                                    <li><i class="fas fa-check"></i> O1/O6 oil hardening steel annealing</li>
                                    <li><i class="fas fa-check"></i> S7 shock resisting steel annealing</li>
                                    <li><i class="fas fa-check"></i> H11/H13 hot work steel annealing</li>
                                    <li><i class="fas fa-check"></i> M2/M42 high-speed steel annealing</li>
                                    <li><i class="fas fa-check"></i> Spheroidize annealing for cold forming</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">D2/D3/A2</span>
                                    <span class="standard-tag">O1/S7/H13</span>
                                    <span class="standard-tag">M2/M42</span>
                                    <span class="standard-tag">ASP/CPM Series</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Non-Ferrous Alloys Tab -->
                    <div class="tab-panel" id="non-ferrous">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/non-ferrous-annealing.jpg" alt="Non-Ferrous Annealing">
                            </div>
                            <div class="tab-text">
                                <h3>Non-Ferrous Alloy Annealing</h3>
                                <p>Annealing for aluminum, copper, brass, bronze, titanium, and nickel alloys for softening and stress relief.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aluminum alloy annealing (O-temper)</li>
                                    <li><i class="fas fa-check"></i> Copper and copper alloy annealing</li>
                                    <li><i class="fas fa-check"></i> Brass and bronze annealing</li>
                                    <li><i class="fas fa-check"></i> Titanium alloy annealing (alpha/beta)</li>
                                    <li><i class="fas fa-check"></i> Nickel alloy (Inconel, Monel) annealing</li>
                                    <li><i class="fas fa-check"></i> Cold worked non-ferrous stress relief</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere for bright finish</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">Al 6061/7075</span>
                                    <span class="standard-tag">C110/C360/C954</span>
                                    <span class="standard-tag">Ti 6Al-4V</span>
                                    <span class="standard-tag">Inconel/Monel</span>
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
                <span class="section-label">COMPREHENSIVE ANNEALING SERVICES</span>
                <h2>Our Annealing Capabilities</h2>
                <p>Precision furnace control and controlled atmosphere for consistent annealing results</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Full Annealing</h3>
                    <p>Complete austenitizing and slow furnace cooling for maximum softening and grain refinement of carbon and alloy steels.</p>
                    <ul>
                        <li>Temperature: 800-900°C (1470-1650°F)</li>
                        <li>Controlled atmosphere (endothermic/exothermic)</li>
                        <li>Furnace cooling to 500°C max</li>
                        <li>10-30°C per hour cooling rates</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Process Annealing (Subcritical)</h3>
                    <p>Low-temperature annealing for cold-worked materials to restore ductility without complete recrystallization.</p>
                    <ul>
                        <li>Temperature: 550-700°C (1020-1290°F)</li>
                        <li>Short soak times (1-2 hours typical)</li>
                        <li>Air or furnace cooling options</li>
                        <li>Ideal for cold rolled/ drawn material</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Stress Relief Annealing</h3>
                    <p>Low-temperature annealing to reduce residual stresses without significant hardness or strength reduction.</p>
                    <ul>
                        <li>Temperature: 500-650°C (930-1200°F)</li>
                        <li>Slow heating to prevent distortion</li>
                        <li>Sufficient soak time for stress relaxation</li>
                        <li>Slow cooling to ambient</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Spheroidize Annealing</h3>
                    <p>Specialized annealing for high-carbon and tool steels to produce spheroidized carbide structure.</p>
                    <ul>
                        <li>Prolonged soak at subcritical temperatures</li>
                        <li>Multiple heating/cooling cycles possible</li>
                        <li>Maximum softness for cold heading</li>
                        <li>Ideal for high carbon wire and strip</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Bright Annealing</h3>
                    <p>Controlled atmosphere annealing producing scale-free bright finish for stainless steel and non-ferrous alloys.</p>
                    <ul>
                        <li>Hydrogen or dissociated ammonia atmosphere</li>
                        <li>Scale-free bright surface finish</li>
                        <li>Eliminates post-anneal pickling</li>
                        <li>Ideal for stainless and copper alloys</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Quality Verification</h3>
                    <p>Comprehensive testing to verify annealing results and material properties.</p>
                    <ul>
                        <li>Hardness testing (HB, HRB, HRC)</li>
                        <li>Microstructure evaluation</li>
                        <li>Grain size determination</li>
                        <li>Decarburization depth measurement</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ANNEALING PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">ANNEALING PROCESS</span>
                    <h2>Our Annealing Workflow</h2>
                    <p>Systematic heat treatment process ensuring consistent softening and stress relief results.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material Assessment & Planning</h4>
                                <p>Review of material grade, prior processing, and required mechanical properties for annealing cycle selection.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Heating & Soaking</h4>
                                <p>Controlled heating to target temperature with appropriate soak time based on section thickness.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Cooling</h4>
                                <p>Precise cooling at specified rates (furnace cool, air cool, or accelerated cool) per material requirements.</p>
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
                        <img src="/www/assets/images/heat-treatment/annealing-workflow.jpg" alt="Annealing Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Annealing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Temps up to 900°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Controlled Atmosphere</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Slow Furnace Cooling</span>
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

    <!-- ===================== ANNEALING TEMPERATURE GUIDE ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TEMPERATURE GUIDE</span>
                <h2>Annealing Temperatures by Material</h2>
                <p>Typical annealing temperature ranges for common engineering materials</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Low Carbon Steel (1018-1020)</h3>
                    <p>Process Anneal: 550-650°C (1020-1200°F). Full Anneal: 870-900°C (1600-1650°F).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Medium Carbon Steel (1045)</h3>
                    <p>Full Anneal: 790-845°C (1450-1550°F). Stress Relief: 550-650°C (1020-1200°F).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Alloy Steel (4140)</h3>
                    <p>Full Anneal: 800-845°C (1475-1550°F). Stress Relief: 550-680°C (1020-1250°F).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tool Steel (D2)</h3>
                    <p>Spheroidize: 850-900°C (1560-1650°F). Slow cool to 750°C, then air.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stainless Steel (304)</h3>
                    <p>Solution Anneal: 1010-1120°C (1850-2050°F). Rapid cool (water or air).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Aluminum (6061)</h3>
                    <p>O-Temper Anneal: 340-415°C (645-775°F). Soak 2-3 hours, slow cool.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Annealing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between full annealing and process annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Full annealing involves heating above the critical temperature (austenitizing) followed by slow furnace cooling for maximum softening. Process annealing heats below the critical temperature (subcritical) to relieve stress and restore ductility in cold-worked materials.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does annealing reduce hardness?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Full annealing typically reduces hardness by 40-60% compared to as-rolled or normalized condition. Example: 4140 steel from 280-320 HB to 180-220 HB. Process annealing provides 20-40% hardness reduction while maintaining some strength.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why is cooling rate important in annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Controlled slow cooling (furnace cooling) allows transformation to soft ferrite-pearlite microstructure. Rapid cooling would produce harder microstructures (martensite or bainite) defeating the purpose of annealing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is spheroidize annealing used for?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Spheroidize annealing produces spherical carbides in high-carbon and tool steels, providing maximum softness and improved machinability. It is essential for cold heading wire, cold forming operations, and preparing tool steels for hardening.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can annealing be performed in a controlled atmosphere?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, controlled atmosphere annealing (endothermic, exothermic, hydrogen, or vacuum) prevents surface oxidation and decarburization, eliminating post-anneal cleaning and maintaining surface quality.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is annealing different from normalizing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Both involve austenitizing, but annealing uses slow furnace cooling for maximum softening, while normalizing uses air cooling for higher strength and finer grain size. Annealed material is softer than normalized material.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does annealing remove all residual stresses?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Full annealing removes 90-95% of residual stresses. Stress relief annealing at lower temperatures removes 60-80% of residual stresses while maintaining higher strength and hardness.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you verify proper annealing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary verification includes hardness testing (Brinell or Rockwell) against specification requirements. Microstructure examination confirms proper grain structure and absence of residual hardening.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Improve Machinability & Reduce Stresses</h2>
                <p>Contact our heat treatment specialists for professional annealing services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Full & Process Annealing</span>
                    <span><i class="fas fa-check"></i> Controlled Atmosphere</span>
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

                <a href="/www/pages/industrial-heat-treatment/quenching-tempering.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching & Tempering</h3>
                    <p>High strength heat treatment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/normalizing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Normalizing</h3>
                    <p>Grain refinement and uniformity</p>
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