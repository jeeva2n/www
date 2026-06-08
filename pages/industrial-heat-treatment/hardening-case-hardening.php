<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Hardening & Case Hardening Services | Surface Hardening Heat Treatment | Alpha Sonix NDT Solutions";
$meta_description = "Professional hardening and case hardening services including through hardening, carburizing, carbonitriding, nitriding, and induction hardening for steel components. Improve wear resistance and surface hardness.";
$meta_keywords = "hardening, case hardening, surface hardening, carburizing, carbonitriding, nitriding, induction hardening, flame hardening, through hardening, wear resistance";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/hardening-case-hardening.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/hardening-og.jpg">
    
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
        "serviceType": "Hardening & Case Hardening Services",
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
        "description": "Professional hardening and case hardening services including through hardening, carburizing, nitriding, and induction hardening to improve wear resistance and surface hardness."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/hardening-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Hardening & Case Hardening</span>
                </div>
                <h1 class="page-title">Hardening & Case Hardening Services</h1>
                <p class="page-subtitle">Professional through hardening, carburizing, carbonitriding, nitriding, and induction hardening services to improve wear resistance and surface hardness</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-chart-line"></i> Through Hardening</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> Case Hardening</span>
                    <span class="badge"><i class="fas fa-fire"></i> Induction Hardening</span>
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
                    <h3>Through Hardening</h3>
                    <p>Complete hardening of component cross-section for high strength applications requiring uniform hardness throughout.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Carburizing</h3>
                    <p>Carbon diffusion into low carbon steel surfaces followed by hardening to produce wear-resistant case with tough core.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Nitriding</h3>
                    <p>Nitrogen diffusion hardening at lower temperatures producing very hard, distortion-free case with excellent wear resistance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Induction Hardening</h3>
                    <p>Selective surface hardening of specific areas using electromagnetic induction for localized wear resistance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS HARDENING & CASE HARDENING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">SURFACE & THROUGH HARDENING</span>
                    <h2>What is Hardening & Case Hardening?</h2>
                    <p class="lead">Hardening and case hardening are heat treatment processes that increase the hardness and wear resistance of steel components through controlled heating, rapid cooling (quenching), and in the case of case hardening, diffusion of carbon or nitrogen into the surface layer.</p>
                    
                    <p>Through hardening produces uniform hardness throughout the component cross-section for maximum strength. Case hardening creates a hard, wear-resistant surface layer while maintaining a tough, ductile core—ideal for gears, shafts, bearings, and components subject to both wear and impact loading.</p>

                    <p>Our hardening services combine precision furnace control, atmosphere protection, and quenching systems to achieve specified hardness and case depth requirements for carbon steels, alloy steels, and tool steels.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Wear Resistance Improvement</strong>
                                <p>Hardened surfaces provide 3-10x better wear resistance compared to annealed or normalized steel.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High Strength Achievement</strong>
                                <p>Through hardening produces tensile strengths up to 2000+ MPa for high-performance components.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Tough Core Retention</strong>
                                <p>Case hardening maintains ductile core (25-35 HRC) with hard surface (55-62 HRC) for impact resistance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Fatigue Life Extension</strong>
                                <p>Compressive residual stresses from case hardening improve fatigue life by 2-4x.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for Wear Components:</strong>
                            <p>Hardened components last 3-10x longer than unhardened parts in wear applications. Case hardening provides the ideal combination of wear-resistant surface (55-62 HRC) and tough, impact-resistant core (25-35 HRC) for gears, shafts, bearings, and camshafts.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Hardening</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/hardening-furnace.jpg" alt="Hardening Furnace">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Controlled atmosphere hardening furnace with quenching system</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">62 HRC</span>
                            <span class="stat-label">Max Hardness</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2-4x</span>
                            <span class="stat-label">Fatigue Life</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3-10x</span>
                            <span class="stat-label">Wear Life</span>
                        </div>
                    </div>
                    
                    <div class="hardening-benefits">
                        <h4><i class="fas fa-star"></i> Hardening Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Increased wear resistance</li>
                            <li><i class="fas fa-check"></i> High strength & hardness</li>
                            <li><i class="fas fa-check"></i> Improved fatigue life</li>
                            <li><i class="fas fa-check"></i> Tough core retention</li>
                            <li><i class="fas fa-check"></i> Design flexibility</li>
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
                <span class="section-label">WHY HARDENING MATTERS</span>
                <h2>Key Advantages of Professional Hardening Services</h2>
                <p>Extend component life and improve performance through precision hardening</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Wear Resistance Improvement</h3>
                    <p>Hardened surfaces resist abrasion, erosion, and adhesive wear, extending component life 3-10x in demanding applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>High Load Capacity</h3>
                    <p>Hardened surfaces can withstand higher contact stresses without deformation or galling, ideal for bearings and gears.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Fatigue Life Extension</h3>
                    <p>Compressive residual stresses from case hardening improve fatigue resistance by 2-4x, preventing surface-initiated cracks.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Design Flexibility</h3>
                    <p>Case harden low carbon steels for wear resistance + tough core vs through harden medium carbon steels for uniform strength.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Selective Hardening</h3>
                    <p>Induction and flame hardening allow localized hardening of specific areas (gear teeth, bearing journals) without affecting the entire component.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Specification Compliance</h3>
                    <p>Meet AMS, ASTM, SAE, and customer hardening requirements with documented processes and verification testing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">HARDENING APPLICATIONS</span>
                <h2>Components Requiring Hardening</h2>
                <p>Professional hardening services for all industrial applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="gears-shafts">Gears & Shafts</button>
                    <button class="tab-btn" data-tab="bearings">Bearings & Bushings</button>
                    <button class="tab-btn" data-tab="tools-dies">Tools & Dies</button>
                    <button class="tab-btn" data-tab="fasteners">Fasteners & Hardware</button>
                </div>

                <div class="tabs-content">
                    <!-- Gears & Shafts Tab -->
                    <div class="tab-panel active" id="gears-shafts">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/gear-hardening.jpg" alt="Gear Hardening">
                            </div>
                            <div class="tab-text">
                                <h3>Gears, Shafts & Power Transmission</h3>
                                <p>Case hardening and through hardening for gears, shafts, spindles, and power transmission components subject to wear and cyclic loading.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Spur, helical, bevel, and worm gears (carburizing/nitriding)</li>
                                    <li><i class="fas fa-check"></i> Transmission shafts and drive shafts (through hardening)</li>
                                    <li><i class="fas fa-check"></i> Camshafts and crankshafts (induction hardening)</li>
                                    <li><i class="fas fa-check"></i> Axles and spindles (through or induction hardening)</li>
                                    <li><i class="fas fa-check"></i> Splined shafts and coupling components</li>
                                    <li><i class="fas fa-check"></i> Gearbox and differential components</li>
                                    <li><i class="fas fa-check"></i> Pump and compressor shafts</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">8620/9310</span>
                                    <span class="standard-tag">4140/4340</span>
                                    <span class="standard-tag">Nitriding Steels</span>
                                    <span class="standard-tag">1045/1144</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bearings & Bushings Tab -->
                    <div class="tab-panel" id="bearings">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/bearing-hardening.jpg" alt="Bearing Hardening">
                            </div>
                            <div class="tab-text">
                                <h3>Bearings, Bushings & Wear Components</h3>
                                <p>Through hardening and case hardening for bearing components requiring high hardness and wear resistance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bearing races and rolling elements (through hardening)</li>
                                    <li><i class="fas fa-check"></i> Bushings and sleeve bearings (case hardening)</li>
                                    <li><i class="fas fa-check"></i> Wear plates and guide rails (induction/flame hardening)</li>
                                    <li><i class="fas fa-check"></i> Pins and rollers (case or through hardening)</li>
                                    <li><i class="fas fa-check"></i> Ball and roller bearing components</li>
                                    <li><i class="fas fa-check"></i> Needle bearings and thrust washers</li>
                                    <li><i class="fas fa-check"></i> Agricultural and mining wear parts</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">52100</span>
                                    <span class="standard-tag">8620/4118</span>
                                    <span class="standard-tag">4140/4340</span>
                                    <span class="standard-tag">1018/1020</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools & Dies Tab -->
                    <div class="tab-panel" id="tools-dies">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/tool-hardening.jpg" alt="Tool Hardening">
                            </div>
                            <div class="tab-text">
                                <h3>Tools, Dies & Molds</h3>
                                <p>Through hardening and surface hardening for tooling requiring high hardness and wear resistance at elevated temperatures.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stamping and forming dies (through hardening)</li>
                                    <li><i class="fas fa-check"></i> Cutting tools and drill bits (through hardening)</li>
                                    <li><i class="fas fa-check"></i> Injection molds (case or through hardening)</li>
                                    <li><i class="fas fa-check"></i> Punches and piercing tools</li>
                                    <li><i class="fas fa-check"></i> Extrusion dies and mandrels</li>
                                    <li><i class="fas fa-check"></i> Forging dies (hot work tool steel)</li>
                                    <li><i class="fas fa-check"></i> Shear blades and slitter knives</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">D2/A2/O1</span>
                                    <span class="standard-tag">H13/S7</span>
                                    <span class="standard-tag">M2/M42</span>
                                    <span class="standard-tag">S7/CPM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fasteners & Hardware Tab -->
                    <div class="tab-panel" id="fasteners">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/fastener-hardening.jpg" alt="Fastener Hardening">
                            </div>
                            <div class="tab-text">
                                <h3>Fasteners, Bolts & Hardware</h3>
                                <p>Through hardening for high-strength fasteners, bolts, studs, and hardware meeting grade specifications.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Grade 8.8, 10.9, 12.9 bolts (through hardening)</li>
                                    <li><i class="fas fa-check"></i> Socket head cap screws and set screws</li>
                                    <li><i class="fas fa-check"></i> Nuts and washers (case or through hardening)</li>
                                    <li><i class="fas fa-check"></i> Threaded studs and rod</li>
                                    <li><i class="fas fa-check"></i> Anchor bolts and foundation bolts</li>
                                    <li><i class="fas fa-check"></i> Pins and retaining rings</li>
                                    <li><i class="fas fa-check"></i> Aerospace fasteners (AMS specifications)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ISO 898-1</span>
                                    <span class="standard-tag">ASTM A325/A490</span>
                                    <span class="standard-tag">SAE J429</span>
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
                <span class="section-label">COMPREHENSIVE HARDENING SERVICES</span>
                <h2>Our Hardening & Case Hardening Capabilities</h2>
                <p>Precision heat treatment for maximum wear resistance and strength</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Through Hardening</h3>
                    <p>Complete hardening of component cross-section for uniform hardness and maximum strength in carbon and alloy steels.</p>
                    <ul>
                        <li>Temperature: 800-900°C (1470-1650°F)</li>
                        <li>Oil or polymer quench</li>
                        <li>Tempering to target hardness (25-60+ HRC)</li>
                        <li>Suitable for 1045, 4140, 4340, tool steels</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Gas Carburizing</h3>
                    <p>Carbon diffusion hardening for low carbon steels producing wear-resistant case with tough core.</p>
                    <ul>
                        <li>Case depth: 0.5-2.0mm (0.020-0.080")</li>
                        <li>Surface hardness: 58-62 HRC</li>
                        <li>Controlled atmosphere furnace</li>
                        <li>Suitable for 8620, 9310, 4820</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Carbonitriding</h3>
                    <p>Carbon and nitrogen diffusion for shallower case with excellent wear resistance and improved fatigue properties.</p>
                    <ul>
                        <li>Case depth: 0.1-0.5mm (0.004-0.020")</li>
                        <li>Surface hardness: 58-64 HRC</li>
                        <li>Lower temperature than carburizing</li>
                        <li>Reduced distortion</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Gas Nitriding</h3>
                    <p>Nitrogen diffusion hardening at lower temperatures producing very hard case with minimal distortion.</p>
                    <ul>
                        <li>Case depth: 0.1-0.5mm (0.004-0.020")</li>
                        <li>Surface hardness: 60-70 HRC equivalent</li>
                        <li>No quench = minimal distortion</li>
                        <li>Suitable for Nitralloy, 4140, H13</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Induction Hardening</h3>
                    <p>Selective surface hardening using electromagnetic induction for localized wear resistance.</p>
                    <ul>
                        <li>Selective area hardening</li>
                        <li>Case depth: 1-5mm (0.040-0.200")</li>
                        <li>Fast processing</li>
                        <li>Minimal distortion</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Verification & Testing</h3>
                    <p>Comprehensive testing to verify hardening results and material properties.</p>
                    <ul>
                        <li>Hardness testing (HRC, HV, HB)</li>
                        <li>Case depth measurement</li>
                        <li>Microstructure evaluation</li>
                        <li>Core hardness verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== HARDENING PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">HARDENING PROCESS</span>
                    <h2>Our Hardening Workflow</h2>
                    <p>Systematic heat treatment process ensuring consistent hardness and case depth.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material Assessment & Planning</h4>
                                <p>Review of material grade, required hardness, case depth, and specification requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Austenitizing & Diffusion</h4>
                                <p>Controlled heating to austenitizing temperature with diffusion cycle for case hardening.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Quenching & Tempering</h4>
                                <p>Rapid cooling to form martensite followed by tempering for property optimization.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Verification & Certification</h4>
                                <p>Hardness testing, case depth measurement, and complete documentation.</p>
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
                        <img src="/www/assets/images/heat-treatment/hardening-workflow.jpg" alt="Hardening Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Hardening Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Through & Case Hardening</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Carburizing/Nitriding</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Induction Hardening</span>
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

    <!-- ===================== HARDENING METHODS COMPARISON ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">METHODS COMPARISON</span>
                <h2>Hardening Methods Comparison</h2>
                <p>Selecting the right hardening process for your application</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Through Hardening</h3>
                    <p>Hardness: 25-60+ HRC. Case: N/A (through). Best for uniform strength & hardness across entire component.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Carburizing</h3>
                    <p>Case: 0.5-2.0mm. Hardness: 58-62 HRC case, 25-35 HRC core. Best for gears, cams, bearings.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbonitriding</h3>
                    <p>Case: 0.1-0.5mm. Hardness: 58-64 HRC. Best for shallow case, improved fatigue, lower distortion.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Nitriding</h3>
                    <p>Case: 0.1-0.5mm. Hardness: 60-70 HRC equiv. Best for distortion-free, very high surface hardness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Induction Hardening</h3>
                    <p>Case: 1-5mm. Hardness: 50-60 HRC. Best for selective area hardening, large parts.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Flame Hardening</h3>
                    <p>Case: 1-5mm. Hardness: 50-58 HRC. Best for large parts, selective hardening, lower precision.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Hardening & Case Hardening Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between through hardening and case hardening?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Through hardening produces uniform hardness throughout the entire component cross-section. Case hardening produces a hard, wear-resistant surface layer (case) while maintaining a tough, ductile core. Case hardening is ideal for components subject to both wear and impact loading.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What materials can be case hardened?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Low carbon steels (0.10-0.25% carbon) such as 1018, 8620, 9310 are ideal for carburizing. Alloy steels including 4140, 4340, and Nitralloy are suitable for nitriding. Carbonitriding works well on low carbon and some medium carbon steels.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What hardness can be achieved?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Through hardened carbon steel: 45-55 HRC. Through hardened alloy steel: 50-60 HRC. Carburized case: 58-62 HRC. Nitrided case: 60-70 HRC equivalent. Tool steel: 55-65+ HRC.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is typical case depth?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Carburizing: 0.5-2.0mm (0.020-0.080") depending on time and temperature. Carbonitriding: 0.1-0.5mm (0.004-0.020"). Nitriding: 0.1-0.5mm (0.004-0.020"). Induction/flame: 1-5mm (0.040-0.200").</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does case hardening cause distortion?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Carburizing and carbonitriding involve quenching which can cause some distortion (typically 0.001-0.005" per inch). Nitriding has minimal distortion since no quench is required. Induction hardening causes localized distortion limited to the hardened area.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between carburizing and nitriding?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Carburizing diffuses carbon into the surface (850-950°C) followed by quench hardening. Nitriding diffuses nitrogen (500-550°C) with no quench required. Nitriding produces higher surface hardness (60-70 HRC) with less distortion but longer cycle times and requires special nitriding steels.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you harden only specific areas?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, induction hardening and flame hardening allow selective hardening of specific areas (gear teeth, bearing journals, cam lobes). Selective carburizing can be achieved using stop-off coatings or copper plating to prevent carbon diffusion.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you verify hardening results?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Verification includes surface hardness testing (Rockwell HRC), core hardness testing, case depth measurement (microhardness traverse or visual after etch), and microstructure evaluation to confirm proper case and core structure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Improve Wear Resistance & Component Life</h2>
                <p>Contact our heat treatment specialists for professional hardening and case hardening services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Through & Case Hardening</span>
                    <span><i class="fas fa-check"></i> Carburizing/Nitriding</span>
                    <span><i class="fas fa-check"></i> Induction Hardening</span>
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
                <a href="/www/pages/industrial-heat-treatment/quenching-tempering.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Quenching & Tempering</h3>
                    <p>Through hardening and tempering services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/stress-relieving.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stress Relieving</h3>
                    <p>Residual stress removal and stabilization</p>
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

                <a href="/www/pages/industrial-heat-treatment/annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Annealing</h3>
                    <p>Full annealing and stress relief</p>
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