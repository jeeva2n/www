<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "External Furnace Heat Treatment Services | Off-Site Thermal Processing | Alpha Sonix NDT Solutions";
$meta_description = "Professional external furnace heat treatment services including annealing, normalizing, stress relieving, solution annealing, and quenching & tempering for large components, castings, forgings, and fabricated assemblies at our state-of-the-art thermal processing facility.";
$meta_keywords = "external furnace heat treatment, off-site heat treatment, commercial heat treatment, furnace annealing, furnace normalizing, furnace stress relieving, solution annealing, quenching and tempering";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/external-furnace-heat-treatment.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/furnace-og.jpg">
    
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
        "serviceType": "External Furnace Heat Treatment Services",
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
        "description": "Professional external furnace heat treatment services including annealing, normalizing, stress relieving, solution annealing, and quenching & tempering for large components."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/external-furnace-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>External Furnace Heat Treatment</span>
                </div>
                <h1 class="page-title">External Furnace Heat Treatment</h1>
                <p class="page-subtitle">Professional off-site furnace thermal processing including annealing, normalizing, stress relieving, solution annealing, and quenching & tempering for large components, castings, forgings, and fabricated assemblies</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-temperature-high"></i> Up to 1200°C</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Multiple Process Capabilities</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> Large Capacity Furnaces</span>
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
                    <p>Complete austenitizing and controlled furnace cooling for maximum softening and grain refinement of carbon and alloy steels.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Normalizing</h3>
                    <p>Air cooling after austenitizing for refined grain structure and improved machinability of steel components.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Stress Relieving</h3>
                    <p>Thermal stress relief for welded assemblies, castings, forgings, and machined components to prevent distortion.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching & Tempering</h3>
                    <p>Complete quench and temper heat treatment for high strength and toughness in alloy steels.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS EXTERNAL FURNACE HEAT TREATMENT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">OFF-SITE THERMAL PROCESSING</span>
                    <h2>What is External Furnace Heat Treatment?</h2>
                    <p class="lead">External furnace heat treatment is a comprehensive thermal processing service performed at our state-of-the-art facility, providing controlled atmosphere and conventional furnace treatment for components that cannot be heat treated in-house or require specialized equipment.</p>
                    
                    <p>Many manufacturers lack the furnace capacity, atmosphere control, or specialized capabilities required for proper heat treatment of large or critical components. External furnace services provide access to professional heat treatment equipment and experienced metallurgical technicians without capital investment.</p>

                    <p>Our external furnace heat treatment facility features multiple furnace sizes, controlled atmosphere capabilities, quench tanks, and comprehensive testing equipment to deliver precise, code-compliant thermal processing for carbon steels, alloy steels, tool steels, stainless steels, and non-ferrous alloys.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Large Capacity Furnaces</strong>
                                <p>Furnaces capable of processing components up to 6m x 6m x 20m (20ft x 20ft x 65ft) and loads up to 30 tons.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Controlled Atmosphere Capability</strong>
                                <p>Endothermic, exothermic, and hydrogen atmospheres for scale-free bright finishes and decarburization prevention.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Multiple Quench Options</strong>
                                <p>Water, polymer, and oil quenching systems for optimal cooling rates based on material and section thickness.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Verification</strong>
                                <p>In-house hardness testing, microstructure evaluation, and mechanical testing to verify heat treatment results.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Cost-Effective Solution:</strong>
                            <p>External furnace heat treatment eliminates capital investment in furnaces, quench systems, and atmosphere generation equipment. Pay only for processing when needed—ideal for job shops, small manufacturers, and companies with periodic heat treatment requirements.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Quote</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/external-furnace.jpg" alt="External Furnace Facility">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>State-of-the-art furnace facility with controlled atmosphere and quench capabilities</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1200°C</span>
                            <span class="stat-label">Max Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30 Ton</span>
                            <span class="stat-label">Max Load</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Processing</span>
                        </div>
                    </div>
                    
                    <div class="furnace-benefits">
                        <h4><i class="fas fa-star"></i> External Furnace Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> No capital investment</li>
                            <li><i class="fas fa-check"></i> Large capacity available</li>
                            <li><i class="fas fa-check"></i> Atmosphere control</li>
                            <li><i class="fas fa-check"></i> Code compliance</li>
                            <li><i class="fas fa-check"></i> Fast turnaround</li>
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
                <span class="section-label">WHY EXTERNAL FURNACE TREATMENT</span>
                <h2>Key Advantages of Professional External Furnace Processing</h2>
                <p>Access to specialized equipment without capital investment</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>No Capital Investment</h3>
                    <p>Eliminate furnace equipment, quench system, and atmosphere generator costs—pay only for processing when needed.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Large Component Capability</h3>
                    <p>Furnaces capable of processing components up to 30 tons and 20m in length—ideal for heavy fabrications and large castings/forgings.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Specialized Atmospheres</h3>
                    <p>Controlled atmosphere and vacuum capabilities prevent scale, decarburization, and oxidation for bright finishes.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>ASME, ASTM, AMS, API, and customer specification compliance with documented time-temperature cycles and testing.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>In-House Verification</h3>
                    <p>Comprehensive hardness testing, microstructure evaluation, and mechanical testing to verify heat treatment results.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Fast Turnaround</h3>
                    <p>Dedicated processing schedules and multiple furnace capacity ensure quick turnaround for time-sensitive projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FURNACE APPLICATIONS</span>
                <h2>Components We Process in External Furnaces</h2>
                <p>Comprehensive furnace heat treatment for all industry sectors</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="fabrications">Fabrications & Weldments</button>
                    <button class="tab-btn" data-tab="castings">Castings & Forgings</button>
                    <button class="tab-btn" data-tab="tooling">Tooling & Dies</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Alloys</button>
                </div>

                <div class="tabs-content">
                    <!-- Fabrications & Weldments Tab -->
                    <div class="tab-panel active" id="fabrications">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/fabrication-furnace.jpg" alt="Fabrication Furnace Treatment">
                            </div>
                            <div class="tab-text">
                                <h3>Fabrications, Weldments & Pressure Vessels</h3>
                                <p>Complete furnace heat treatment for fabricated assemblies, pressure vessels, and structural weldments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel shell and head assemblies</li>
                                    <li><i class="fas fa-check"></i> Heavy steel fabrications and weldments</li>
                                    <li><i class="fas fa-check"></i> Structural steel assemblies</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger shell and channel assemblies</li>
                                    <li><i class="fas fa-check"></i> Process column and tower fabrications</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment and machinery frames</li>
                                    <li><i class="fas fa-check"></i> Post-weld heat treatment of large fabrications</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">ISO 9001</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Castings & Forgings Tab -->
                    <div class="tab-panel" id="castings">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/casting-furnace.jpg" alt="Casting Furnace Treatment">
                            </div>
                            <div class="tab-text">
                                <h3>Castings, Forgings & Raw Stock</h3>
                                <p>Furnace treatment for steel castings, forgings, and raw material prior to machining or further processing.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Carbon and alloy steel castings (per ASTM A216, A352, A487)</li>
                                    <li><i class="fas fa-check"></i> Forged shafts, flanges, and fittings</li>
                                    <li><i class="fas fa-check"></i> Investment and sand castings</li>
                                    <li><i class="fas fa-check"></i> Ductile and gray iron castings</li>
                                    <li><i class="fas fa-check"></i> Forged valve bodies and components</li>
                                    <li><i class="fas fa-check"></i> Bar, plate, and forging stock normalization</li>
                                    <li><i class="fas fa-check"></i> Annealing of cold-worked material</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A216/A352/A487</span>
                                    <span class="standard-tag">ASTM A788</span>
                                    <span class="standard-tag">SAE J477</span>
                                    <span class="standard-tag">API 6A</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tooling & Dies Tab -->
                    <div class="tab-panel" id="tooling">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/tool-furnace.jpg" alt="Tool Steel Furnace Treatment">
                            </div>
                            <div class="tab-text">
                                <h3>Tooling, Dies & Molds</h3>
                                <p>Precision furnace heat treatment for tool steels, dies, molds, and high-performance tooling components.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cold work tool steel (D2, A2, O1) hardening & tempering</li>
                                    <li><i class="fas fa-check"></i> Hot work tool steel (H13, H11) heat treatment</li>
                                    <li><i class="fas fa-check"></i> High-speed steel (M2, M42) hardening</li>
                                    <li><i class="fas fa-check"></i> Injection mold and die casting die treatment</li>
                                    <li><i class="fas fa-check"></i> Stamping and forming die heat treatment</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere for decarb prevention</li>
                                    <li><i class="fas fa-check"></i> Multiple tempering cycles for stability</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">D2/A2/O1</span>
                                    <span class="standard-tag">H13/H11</span>
                                    <span class="standard-tag">M2/M42</span>
                                    <span class="standard-tag">CPM/ASP Series</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Alloys Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/specialty-furnace.jpg" alt="Specialty Alloy Furnace">
                            </div>
                            <div class="tab-text">
                                <h3>Stainless Steel & Specialty Alloys</h3>
                                <p>Specialized furnace treatment for stainless steels, nickel alloys, and other specialty materials.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Austenitic stainless solution annealing (304, 316, etc.)</li>
                                    <li><i class="fas fa-check"></i> Duplex and super duplex solution treatment</li>
                                    <li><i class="fas fa-check"></i> Martensitic stainless hardening & tempering (410, 420, 440C)</li>
                                    <li><i class="fas fa-check"></i> Precipitation hardening stainless (17-4 PH, 15-5 PH)</li>
                                    <li><i class="fas fa-check"></i> Nickel alloy (Inconel, Monel, Hastelloy) solution treatment</li>
                                    <li><i class="fas fa-check"></i> Titanium and titanium alloy heat treatment</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere for bright finish</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">304/316/410/420/440C</span>
                                    <span class="standard-tag">17-4 PH/15-5 PH</span>
                                    <span class="standard-tag">Inconel/Monel/Hastelloy</span>
                                    <span class="standard-tag">Ti 6Al-4V</span>
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
                <span class="section-label">COMPREHENSIVE FURNACE SERVICES</span>
                <h2>Our External Furnace Heat Treatment Capabilities</h2>
                <p>Multiple furnace sizes and process capabilities for all thermal processing needs</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Full Annealing</h3>
                    <p>Complete austenitizing with controlled furnace cooling for maximum softening and grain refinement.</p>
                    <ul>
                        <li>Temperature: 800-900°C (1470-1650°F)</li>
                        <li>Furnace cooling to 500°C max</li>
                        <li>Atmosphere protection available</li>
                        <li>Ideal for machinability improvement</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Normalizing</h3>
                    <p>Austenitizing with air cooling for refined grain structure and improved mechanical properties.</p>
                    <ul>
                        <li>Temperature: 800-950°C (1470-1740°F)</li>
                        <li>Still or forced air cooling</li>
                        <li>Grain refinement to ASTM 5-8</li>
                        <li>Improved machinability</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Stress Relieving</h3>
                    <p>Low-temperature furnace stress relief for residual stress removal without significant hardness reduction.</p>
                    <ul>
                        <li>Temperature: 500-650°C (930-1200°F)</li>
                        <li>Controlled heating and cooling</li>
                        <li>60-90% stress reduction</li>
                        <li>Dimensional stability</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Solution Annealing</h3>
                    <p>High-temperature solution treatment for stainless steels and nickel alloys.</p>
                    <ul>
                        <li>Temperature: 1010-1180°C (1850-2150°F)</li>
                        <li>Water or polymer quench</li>
                        <li>Corrosion resistance restoration</li>
                        <li>Controlled atmosphere for bright finish</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Quenching & Tempering</h3>
                    <p>Complete quench and temper heat treatment for high strength and toughness.</p>
                    <ul>
                        <li>Austenitize: 800-900°C</li>
                        <li>Oil, water, or polymer quench</li>
                        <li>Temper: 150-650°C</li>
                        <li>Target hardness 25-60 HRC</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Verification & Documentation</h3>
                    <p>Comprehensive testing and documentation for code compliance.</p>
                    <ul>
                        <li>Hardness testing (HRC, HB, HV)</li>
                        <li>Microstructure evaluation</li>
                        <li>Tensile/impact testing available</li>
                        <li>Complete certification package</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FURNACE FACILITY ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">FACILITY CAPABILITIES</span>
                    <h2>Our External Furnace Facility</h2>
                    <p>State-of-the-art thermal processing center with multiple furnace sizes and capabilities.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Large Capacity Car-Bottom Furnace</h4>
                                <p>Dimensions: 6m W x 6m H x 20m L (20ft x 20ft x 65ft). Max temp: 1200°C. Load capacity: 30 tons.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Atmosphere Furnaces</h4>
                                <p>Multiple smaller furnaces with endothermic, exothermic, and hydrogen atmosphere capabilities for bright finishes.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Quench Systems</h4>
                                <p>Water, polymer, and oil quench tanks with agitation and temperature control for optimal cooling rates.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>In-House Testing Laboratory</h4>
                                <p>Hardness testing, microstructure evaluation, tensile/impact testing, and PMI capabilities on-site.</p>
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
                        <img src="/www/assets/images/heat-treatment/furnace-facility.jpg" alt="Furnace Facility">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Furnace Facility</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>1200°C Max Temp</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>30 Ton Capacity</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Controlled Atmosphere</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>In-House Testing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== MATERIAL PROCESS GUIDE ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PROCESS GUIDE</span>
                <h2>Heat Treatment Processes by Material</h2>
                <p>Recommended thermal processing for common engineering materials</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Low Carbon Steel (1018, 1020)</h3>
                    <p>Normalizing: 900-925°C (1650-1700°F). Annealing: 870-900°C (1600-1650°F) furnace cool.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Medium Carbon Steel (1045)</h3>
                    <p>Normalize: 870-900°C (1600-1650°F). Q&T: 845°C (1550°F) quench + temper 400-600°C.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Alloy Steel (4140, 4340)</h3>
                    <p>Normalize: 870-900°C (1600-1650°F). Q&T: 845°C (1550°F) oil quench + temper to target hardness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Austenitic Stainless (304, 316)</h3>
                    <p>Solution anneal: 1010-1120°C (1850-2050°F). Water quench. No normalizing or conventional annealing.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Martensitic Stainless (410, 420)</h3>
                    <p>Harden: 980-1040°C (1800-1900°F). Temper: 540-650°C (1000-1200°F) for 25-40 HRC.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tool Steel (D2)</h3>
                    <p>Harden: 1010-1040°C (1850-1900°F). Temper: 200-540°C (400-1000°F) double/triple temper.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== IN-HOUSE VS EXTERNAL ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">DECISION GUIDE</span>
                <h2>In-House vs External Furnace Heat Treatment</h2>
                <p>Making the right choice for your business</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Capital Investment</h3>
                    <p>External: $0. In-house: $200K-2M+ for furnaces, quench systems, atmosphere generation, testing equipment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Operating Costs</h3>
                    <p>External: Pay per batch. In-house: Utilities, maintenance, consumables, certified operators, quality system.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Capacity & Flexibility</h3>
                    <p>External: Access to large furnaces, multiple processes. In-house: Limited by owned equipment size/capabilities.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Expertise & Certification</h3>
                    <p>External: Experienced metallurgical staff, Nadcap/AS9100 certified. In-house: Requires trained personnel and certification.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Turnaround Time</h3>
                    <p>External: 3-10 days typical including logistics. In-house: Hours to days based on furnace availability.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Best For</h3>
                    <p>External: Job shops, periodic needs, large components. In-house: High-volume production, daily processing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>External Furnace Heat Treatment Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the maximum component size you can process?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our largest car-bottom furnace accommodates components up to 6m wide x 6m high x 20m long (20ft x 20ft x 65ft) with load capacity up to 30 tons. Contact us for specific size requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the typical turnaround time for external furnace processing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Standard turnaround is 5-10 business days including transportation. Rush processing (2-4 days) is available for an additional fee. Lead time depends on current workload and component size.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide transportation for components?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we can arrange transportation for components to and from our facility. We work with specialized heavy-haul carriers for large components and standard LTL carriers for smaller parts. Customer pickup/delivery is also available.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What certifications do your facilities hold?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our facility is ISO 9001:2015 certified with Nadcap and AS9100 accreditation for aerospace processing. We maintain compliance with ASME, ASTM, AMS, API, and customer specifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you provide controlled atmosphere (bright) processing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we have multiple controlled atmosphere furnaces with endothermic, exothermic, and hydrogen atmospheres for scale-free bright finishes on stainless steels and specialty alloys.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide testing and certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide comprehensive testing including hardness (Rockwell, Brinell, Vickers), microstructure evaluation, tensile testing, impact testing (Charpy), and PMI. Complete certification packages are provided with each order.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What materials do you process?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We process carbon steels, alloy steels (4140, 4340, 8620, etc.), tool steels (D2, A2, O1, H13, M2), stainless steels (austenitic, martensitic, duplex, PH), nickel alloys (Inconel, Monel), titanium, and select non-ferrous alloys.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do I get a quote for external furnace processing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Contact our sales team with material specifications, component dimensions, required heat treatment process, and quantity. We provide detailed quotes including processing, testing, and transportation costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Professional External Furnace Heat Treatment</h2>
                <p>Contact our thermal processing specialists for off-site furnace treatment of your components</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Large Capacity Furnaces</span>
                    <span><i class="fas fa-check"></i> Controlled Atmosphere</span>
                    <span><i class="fas fa-check"></i> Comprehensive Testing</span>
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
                <a href="/www/pages/industrial-heat-treatment/annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Annealing</h3>
                    <p>Full and process annealing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/normalizing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Normalizing</h3>
                    <p>Grain refinement services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/solution-annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Solution Annealing</h3>
                    <p>Stainless steel heat treatment</p>
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