<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Induction Heat Treatment Services | Selective Hardening & Heat Treating | Alpha Sonix NDT Solutions";
$meta_description = "Professional induction heat treatment services including induction hardening, tempering, annealing, and selective surface hardening for shafts, gears, and components. Precise localized heating with minimal distortion.";
$meta_keywords = "induction heat treatment, induction hardening, induction tempering, selective hardening, surface hardening, localized heat treatment, induction heating, shaft hardening, gear hardening";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/induction-heat-treatment.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/induction-og.jpg">
    
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
        "serviceType": "Induction Heat Treatment Services",
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
        "description": "Professional induction heat treatment services including induction hardening, tempering, and selective surface hardening for precision components."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/induction-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Induction Heat Treatment</span>
                </div>
                <h1 class="page-title">Induction Heat Treatment</h1>
                <p class="page-subtitle">Professional induction hardening, tempering, and selective surface heat treatment for precision components requiring localized wear resistance and dimensional stability</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-bolt"></i> Induction Hardening</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Selective Surface Hardening</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> Minimal Distortion</span>
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
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Induction Hardening</h3>
                    <p>Selective surface hardening using electromagnetic induction for localized wear resistance without affecting the entire component.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Induction Tempering</h3>
                    <p>Localized post-hardening tempering to adjust hardness and relieve stresses in specific areas of hardened components.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Induction Annealing</h3>
                    <p>Localized annealing or stress relieving of specific component areas without full furnace treatment.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Induction Brazing & Soldering</h3>
                    <p>Precision localized heating for brazing and soldering applications with minimal thermal impact on surrounding areas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS INDUCTION HEAT TREATMENT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ELECTROMAGNETIC HEATING</span>
                    <h2>What is Induction Heat Treatment?</h2>
                    <p class="lead">Induction heat treatment is a non-contact heating process that uses electromagnetic induction to generate heat directly within the component surface, enabling precise, localized hardening, tempering, or annealing with minimal distortion and high energy efficiency.</p>
                    
                    <p>Induction heating works by passing high-frequency alternating current through a copper coil, creating an electromagnetic field that induces eddy currents in the conductive component. These eddy currents generate heat precisely where it's needed—on the component surface for hardening or throughout the component for other processes.</p>

                    <p>Our induction heat treatment services use state-of-the-art solid-state power supplies, custom-designed induction coils, and precision control systems to achieve consistent, repeatable results for shafts, gears, bearing surfaces, and other components requiring localized wear resistance.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Selective Surface Hardening</strong>
                                <p>Heat only the areas requiring wear resistance (journals, gear teeth, cam lobes) while the rest remains unchanged.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Minimal Distortion</strong>
                                <p>Localized heating reduces thermal stresses and distortion compared to furnace heat treatment of entire components.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Rapid Processing</strong>
                                <p>Typical cycle times of seconds to minutes—significantly faster than conventional furnace treatment.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Energy Efficient</strong>
                                <p>Heat is generated only where needed, with no furnace warm-up or heating of entire components.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-bolt"></i>
                        <div>
                            <strong>Precision Localized Treatment:</strong>
                            <p>Induction hardening produces case depths of 0.5-5mm (0.020-0.200") with hardness up to 60-65 HRC on medium carbon and alloy steels. The process is 10-100x faster than furnace treatment with virtually no scale or decarburization, eliminating post-treatment grinding.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Induction Treatment</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/induction-system.jpg" alt="Induction Heat Treatment System">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Induction heat treatment system with precision coil for shaft hardening</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">5mm</span>
                            <span class="stat-label">Case Depth</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">65 HRC</span>
                            <span class="stat-label">Max Hardness</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">10x</span>
                            <span class="stat-label">Faster vs Furnace</span>
                        </div>
                    </div>
                    
                    <div class="induction-benefits">
                        <h4><i class="fas fa-star"></i> Induction Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Selective hardening</li>
                            <li><i class="fas fa-check"></i> Minimal distortion</li>
                            <li><i class="fas fa-check"></i> Fast cycle times</li>
                            <li><i class="fas fa-check"></i> Energy efficient</li>
                            <li><i class="fas fa-check"></i> Clean process (no scale)</li>
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
                <span class="section-label">WHY INDUCTION HEAT TREATMENT</span>
                <h2>Key Advantages of Induction Heat Treatment</h2>
                <p>Precision localized treatment for critical wear surfaces</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Selective Surface Hardening</h3>
                    <p>Harden only specific areas (gear teeth, bearing journals, cam lobes) without affecting core properties or adjacent machined surfaces.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Minimal Distortion</h3>
                    <p>Localized heating reduces thermal stresses, eliminating straightening operations and post-heat grinding common with furnace treatment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Rapid Processing</h3>
                    <p>Typical cycle times of 1-60 seconds per component vs 2-8 hours for furnace treatment—dramatically reducing production time.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>No Scale or Decarburization</h3>
                    <p>Rapid heating and quenching prevents surface oxidation, eliminating post-treatment cleaning and reducing grinding stock requirements.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Energy Efficient</h3>
                    <p>Heating is localized and instantaneous—no furnace warm-up, no heating of entire components, reducing energy costs by 50-80%.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Process Repeatability</h3>
                    <p>Computer-controlled power supplies and scanning systems ensure consistent case depth and hardness across production runs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INDUCTION APPLICATIONS</span>
                <h2>Components We Treat with Induction</h2>
                <p>Precision induction heat treatment for critical wear components</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="shafts">Shafts & Axles</button>
                    <button class="tab-btn" data-tab="gears">Gears & Sprockets</button>
                    <button class="tab-btn" data-tab="bearing-surfaces">Bearing Surfaces</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Components</button>
                </div>

                <div class="tabs-content">
                    <!-- Shafts & Axles Tab -->
                    <div class="tab-panel active" id="shafts">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/induction-shaft.jpg" alt="Induction Shaft Hardening">
                            </div>
                            <div class="tab-text">
                                <h3>Shafts, Axles & Cylindrical Components</h3>
                                <p>Induction hardening of bearing journals, splines, keyways, and wear surfaces on rotating shafts and axles.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crankshaft and camshaft journal hardening</li>
                                    <li><i class="fas fa-check"></i> Transmission shaft spline hardening</li>
                                    <li><i class="fas fa-check"></i> Axle and spindle bearing surface treatment</li>
                                    <li><i class="fas fa-check"></i> Hydraulic cylinder rod hardening</li>
                                    <li><i class="fas fa-check"></i> Pump shaft journal and seal surface treatment</li>
                                    <li><i class="fas fa-check"></i> Scanner (continuous) hardening of long shafts</li>
                                    <li><i class="fas fa-check"></i> Keyway and slot selective hardening</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">1045/1050/1060</span>
                                    <span class="standard-tag">4140/4340/5140</span>
                                    <span class="standard-tag">8620/8640</span>
                                    <span class="standard-tag">EN series/SAE grades</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gears & Sprockets Tab -->
                    <div class="tab-panel" id="gears">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/induction-gear.jpg" alt="Induction Gear Hardening">
                            </div>
                            <div class="tab-text">
                                <h3>Gears, Sprockets & Tooth Profiles</h3>
                                <p>Tooth-by-tooth or whole-gear induction hardening for gear wear resistance and fatigue strength.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Spur and helical gear tooth hardening</li>
                                    <li><i class="fas fa-check"></i> Bevel and hypoid gear hardening</li>
                                    <li><i class="fas fa-check"></i> Sprocket and timing pulley tooth treatment</li>
                                    <li><i class="fas fa-check"></i> Ring gear and internal gear hardening</li>
                                    <li><i class="fas fa-check"></i> Tooth-by-tooth contour hardening</li>
                                    <li><i class="fas fa-check"></i> Whole-gear spin hardening</li>
                                    <li><i class="fas fa-check"></i> Gear root and fillet hardening</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">4140/4340/5140</span>
                                    <span class="standard-tag">8620/8640</span>
                                    <span class="standard-tag">1045/1050</span>
                                    <span class="standard-tag">EN 36/EN 24</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bearing Surfaces Tab -->
                    <div class="tab-panel" id="bearing-surfaces">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/induction-bearing.jpg" alt="Induction Bearing Hardening">
                            </div>
                            <div class="tab-text">
                                <h3>Bearing Surfaces & Raceways</h3>
                                <p>Induction hardening of bearing races, rolling surfaces, and wear pads for extended service life.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bearing journal and raceway hardening</li>
                                    <li><i class="fas fa-check"></i> Roller and ball bearing surface treatment</li>
                                    <li><i class="fas fa-check"></i> Cam follower and roller surface hardening</li>
                                    <li><i class="fas fa-check"></i> Slide rail and wear plate induction treatment</li>
                                    <li><i class="fas fa-check"></i> Ball screw and lead screw race hardening</li>
                                    <li><i class="fas fa-check"></i> Rocker arm and pivot surface treatment</li>
                                    <li><i class="fas fa-check"></i> Motor shaft bearing journal hardening</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">1045/1050/1060</span>
                                    <span class="standard-tag">4140/4340</span>
                                    <span class="standard-tag">52100 bearing steel</span>
                                    <span class="standard-tag">Induction hardened only</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Components Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/induction-specialty.jpg" alt="Induction Specialty Components">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty & Complex Geometry Components</h3>
                                <p>Custom induction heat treatment for complex shapes, local areas, and unique component requirements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cam lobes and eccentric surfaces</li>
                                    <li><i class="fas fa-check"></i> Piston rod and cylinder rod hardening</li>
                                    <li><i class="fas fa-check"></i> Punch and die surface treatment</li>
                                    <li><i class="fas fa-check"></i> Coupling and universal joint hardening</li>
                                    <li><i class="fas fa-check"></i> Spindle and taper surface treatment</li>
                                    <li><i class="fas fa-check"></i> Form tools and cutoff tool hardening</li>
                                    <li><i class="fas fa-check"></i> Custom coil design for complex geometry</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Materials:</strong>
                                    <span class="standard-tag">All hardenable steels</span>
                                    <span class="standard-tag">Tool steels (limited)</span>
                                    <span class="standard-tag">Cast irons (ductile, gray)</span>
                                    <span class="standard-tag">Customer specifications</span>
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
                <span class="section-label">COMPREHENSIVE SERVICES</span>
                <h2>Our Induction Heat Treatment Capabilities</h2>
                <p>State-of-the-art induction systems for precision localized heat treatment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Induction Hardening</h3>
                    <p>Selective surface hardening for wear resistance using high-frequency induction with immediate quench.</p>
                    <ul>
                        <li>Case depth: 0.5-5mm (0.020-0.200")</li>
                        <li>Surface hardness: 50-65 HRC</li>
                        <li>Scanning or single-shot methods</li>
                        <li>Water, polymer, or oil quench</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Induction Tempering</h3>
                    <p>Localized post-hardening tempering to achieve specific hardness and relieve quenching stresses.</p>
                    <ul>
                        <li>Temperature: 150-650°C (300-1200°F)</li>
                        <li>Precision hardness targeting</li>
                        <li>Localized or full component tempering</li>
                        <li>Stress relief without furnace treatment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Induction Annealing & Stress Relief</h3>
                    <p>Localized annealing or stress relief for specific component areas without affecting overall properties.</p>
                    <ul>
                        <li>Localized softening of hard areas</li>
                        <li>Stress relief after welding or machining</li>
                        <li>Selective property modification</li>
                        <li>Precision area control</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Induction Brazing & Soldering</h3>
                    <p>Precision localized heating for brazing and soldering with minimal thermal impact on adjacent areas.</p>
                    <ul>
                        <li>Precise heat application</li>
                        <li>No flame or torch required</li>
                        <li>Repeatable process control</li>
                        <li>Clean, oxidation-free results</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Custom Induction Coil Design</h3>
                    <p>Application-specific coil design for complex geometries and specialized heat treatment requirements.</p>
                    <ul>
                        <li>Multi-turn and hairpin coils</li>
                        <li>Split and quick-change designs</li>
                        <li>Internal bore heating coils</li>
                        <li>Complex contour following coils</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Process Verification & Documentation</h3>
                    <p>Comprehensive testing and documentation for induction heat treatment quality assurance.</p>
                    <ul>
                        <li>Hardness testing (HRC, HV, HB)</li>
                        <li>Case depth measurement</li>
                        <li>Microstructure evaluation</li>
                        <li>Process parameter documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INDUCTION PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">INDUCTION PROCESS</span>
                    <h2>Our Induction Heat Treatment Workflow</h2>
                    <p>Systematic induction processing for consistent, repeatable localized heat treatment.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Component & Specification Review</h4>
                                <p>Review of material grade, required hardness, case depth, and component geometry for induction process development.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Coil Design & Process Development</h4>
                                <p>Custom induction coil design and process parameter development for specific component requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Induction Heating & Quenching</h4>
                                <p>Precision induction heating followed by immediate quench (water, polymer, or oil) for hardening.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Verification & Certification</h4>
                                <p>Hardness testing, case depth measurement, and complete documentation for quality records.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Equipment</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                            <img src="/www/assets/images/certs/iatf-cert.png" alt="IATF 16949">
                            <img src="/www/assets/images/certs/iso-cert.png" alt="ISO">
                            <img src="/www/assets/images/certs/asnt-cert.png" alt="ASNT">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/induction-workflow.jpg" alt="Induction Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Induction Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Custom Induction Coils</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Scanning & Single-Shot</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Precision Quenching</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Case Depth 0.5-5mm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INDUCTION CASE DEPTH GUIDE ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CASE DEPTH GUIDE</span>
                <h2>Induction Hardening Case Depth by Frequency</h2>
                <p>Selecting the right frequency for your application</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>High Frequency (100-400 kHz)</h3>
                    <p>Case depth: 0.5-1.5mm (0.020-0.060"). Best for small parts, thin sections, and shallow case requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Medium Frequency (10-50 kHz)</h3>
                    <p>Case depth: 1.5-3mm (0.060-0.120"). Most common range for general purpose shaft and gear hardening.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Low Frequency (1-10 kHz)</h3>
                    <p>Case depth: 3-5mm (0.120-0.200"). Best for large diameter shafts, heavy sections, and deep case requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Spur Gear Tooth Hardening</h3>
                    <p>Tooth-by-tooth: 50-200 kHz, case depth 0.5-1mm. Whole gear: 3-30 kHz, case depth 1-2mm.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Shaft Scanner Hardening</h3>
                    <p>10-50 kHz typical. Case depth 1.5-3mm. Uniform hardness along shaft length.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Internal Bore Hardening</h3>
                    <p>100-400 kHz for small bores. Lower frequency for large diameter bores.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INDUCTION VS FURNACE ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PROCESS COMPARISON</span>
                <h2>Induction vs Conventional Furnace Heat Treatment</h2>
                <p>Understanding the advantages of induction processing</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Selectivity</h3>
                    <p>Induction: Selective/localized treatment. Furnace: Entire component heated.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Distortion</h3>
                    <p>Induction: Minimal (0.001-0.003" typical). Furnace: Moderate to high (0.005-0.015" typical).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Cycle Time</h3>
                    <p>Induction: Seconds to minutes. Furnace: Hours (2-8 hours typical).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Scale/Decarb</h3>
                    <p>Induction: None (clean finish). Furnace: Moderate to heavy (requires grinding/pickling).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Energy Efficiency</h3>
                    <p>Induction: 50-80% less energy than furnace treatment for comparable results.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Cost (Volume)</h3>
                    <p>Induction: Lower cost for medium-large production runs. Furnace: Lower cost for small batches/single parts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Induction Heat Treatment Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What materials can be induction hardened?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Induction hardening is effective on medium carbon steels (0.30-0.50% carbon), low alloy steels (4140, 4340, 8620), and some cast irons (ductile iron, gray iron). Carbon content should be at least 0.35% for through hardening, though case hardening of lower carbon steels is possible.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What case depths can be achieved?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Induction hardening can achieve case depths from 0.5mm to 5mm (0.020-0.200") depending on frequency selection. Higher frequencies (100-400 kHz) produce shallower cases (0.5-1.5mm). Lower frequencies (1-10 kHz) produce deeper cases (3-5mm).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does induction hardening cause distortion?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Induction hardening produces minimal distortion (typically 0.001-0.003" on small-medium shafts) because only the surface is heated. This is significantly less than furnace hardening where entire components are heated. Straightening is rarely required after induction hardening.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What hardness can be achieved with induction hardening?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical induction hardened hardness: 1045/1050 steel: 55-60 HRC. 4140/4340 alloy steel: 55-62 HRC. Ductile iron: 45-55 HRC. Gray iron: 40-50 HRC. Hardness depends on material carbon content, alloy composition, and prior microstructure.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between scanning and single-shot induction hardening?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Scanning induction moves the component through the coil or moves the coil along the component—ideal for long shafts and multiple zones. Single-shot induction heats the entire target area simultaneously with a shaped coil—ideal for gears, sprockets, and short components with complex contours.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can induction be used for tempering?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, induction tempering (also called induction drawing) is commonly used to temper induction-hardened components, especially localized areas that require specific hardness. Induction tempering is faster than furnace tempering and can be integrated into automated production lines.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is post-induction grinding always required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Not always. Induction hardening produces minimal scale and decarburization. For many applications (gear teeth, splines, keyways), no post-treatment grinding is needed. Precision bearing journals may require light grinding to achieve final tolerances (typically 0.005-0.010" stock removal).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the typical lead time for custom induction coils?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Custom induction coil design and fabrication typically requires 2-4 weeks for complex geometries, 1-2 weeks for standard designs. Prototype quantities can be processed using temporary coils or bench-top systems within days.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Precision Selective Hardening for Your Components</h2>
                <p>Contact our induction heat treatment specialists for localized surface hardening solutions</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Selective Surface Hardening</span>
                    <span><i class="fas fa-check"></i> Custom Induction Coils</span>
                    <span><i class="fas fa-check"></i> Minimal Distortion</span>
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

                <a href="/www/pages/industrial-heat-treatment/tempering.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tempering</h3>
                    <p>Post-hardening tempering services</p>
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