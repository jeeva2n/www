<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Magnetic Particle Testing (MT) Services | Surface Crack Detection & Weld Inspection | Alpha Sonix NDT Solutions";
$meta_description = "Professional Magnetic Particle Testing (MT) services for surface and near-surface crack detection in ferromagnetic materials. Wet/dry methods, fluorescent inspection, and code-compliant procedures per ASME, ASTM, AWS & API standards.";
$meta_keywords = "magnetic particle testing, MT inspection, magnetic particle inspection, MPI, surface crack detection, weld inspection, wet fluorescent MT, dry powder MT, yoke inspection, ASTM E709, ferromagnetic testing";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/magnetic-particle-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/mt-og.jpg">

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
            "serviceType": "Magnetic Particle Testing (MT) & Inspection",
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
            "description": "Professional Magnetic Particle Testing services for surface and near-surface crack detection in ferromagnetic materials including welds, forgings, castings, and machined components."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/mt-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Magnetic Particle Testing</span>
                </div>
                <h1 class="page-title">Magnetic Particle Testing (MT)</h1>
                <p class="page-subtitle">Highly sensitive surface and near-surface crack detection in ferromagnetic materials—immediate visual results, cost-effective, and proven reliable for critical weld and component inspection</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-magnet"></i> Ferromagnetic Materials Only</span>
                    <span class="badge"><i class="fas fa-eye"></i> Immediate Visual Results</span>
                    <span class="badge"><i class="fas fa-certificate"></i> ASME / AWS / ASTM Compliant</span>
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
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>High Crack Sensitivity</h3>
                    <p>Excellent detection of tight surface cracks, stress corrosion cracking, fatigue cracks, and grinding damage that are difficult to see with visual inspection alone.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Immediate Results</h3>
                    <p>Real-time crack indication display enables instant accept/reject decisions, supporting production flow and rapid fabrication quality control.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective Method</h3>
                    <p>Simple equipment, fast application, and reliable results make MT an economical choice for high-volume weld inspection and component screening.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <h3>Versatile Field/Lab Use</h3>
                    <p>Portable equipment suitable for workshop, field, construction site, and in-service inspection applications with minimal setup requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS MT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">PROVEN NDT METHOD</span>
                    <h2>What is Magnetic Particle Testing (MT)?</h2>
                    <p class="lead">Magnetic Particle Testing (MT) is a non-destructive inspection method used to detect surface and near-surface discontinuities in ferromagnetic materials by applying a magnetic field and observing the accumulation of magnetic particles at crack locations.</p>

                    <p>The MT process involves magnetizing the component using AC, DC, or half-wave DC current, then applying fine magnetic particles (dry powder or wet suspension) to the surface. Cracks and discontinuities disrupt the smooth flow of magnetic flux, creating leakage fields at the surface. Magnetic particles are attracted to these leakage fields, clustering to form visible indications that reveal crack location, orientation, and relative size.</p>

                    <p>MT is widely recognized as the most sensitive and reliable method for detecting tight surface cracks in ferromagnetic materials such as carbon steel, alloy steel, cast iron, and most welded structures. It is a code-required method for many critical applications and remains the preferred crack detection technique where applicable materials and surface access permit.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Surface & Near-Surface Detection</strong>
                                <p>Detects surface-breaking cracks and discontinuities up to ~6mm below the surface (depth dependent on magnetization method and crack orientation).</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High Sensitivity to Tight Cracks</strong>
                                <p>Reveals hairline cracks, stress risers, and fine discontinuities that may not be visible to the naked eye—critical for fatigue-sensitive applications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Directional Crack Detection</strong>
                                <p>Different magnetization directions (longitudinal, circular) detect cracks of various orientations—ensuring comprehensive coverage when applied correctly.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Visual Verification</strong>
                                <p>Clear, observable indications that can be photographed, measured, and documented—supporting audit requirements and quality records.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>When MT is the Best Choice:</strong>
                            <p>MT is ideal for ferromagnetic materials where surface crack detection is critical—especially in welding, fabrication, and in-service inspection where immediate results and high sensitivity to tight cracks are required for safety and code compliance.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request MT Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/mt-equipment.jpg" alt="Magnetic Particle Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Portable MT equipment with AC/DC yokes and fluorescent particle systems</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">15,000+</span>
                            <span class="stat-label">Components Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99%+</span>
                            <span class="stat-label">Crack Detection Rate</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Instant</span>
                            <span class="stat-label">Result Display</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> MT Detection Principle</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Magnetic field applied to ferromagnetic component</li>
                            <li><strong>2.</strong> Magnetic flux flows through material</li>
                            <li><strong>3.</strong> Surface cracks disrupt flux flow, create leakage fields</li>
                            <li><strong>4.</strong> Magnetic particles attracted to leakage field areas</li>
                            <li><strong>5.</strong> Particle accumulation forms visible crack indication</li>
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
                <span class="section-label">WHY CHOOSE MT</span>
                <h2>Key Advantages of Magnetic Particle Testing</h2>
                <p>Proven crack detection performance with immediate results and cost-effective implementation</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-eye-low-vision"></i>
                    </div>
                    <h3>Superior Crack Sensitivity</h3>
                    <p>Detects tight surface cracks that may be invisible to visual inspection—providing confidence in critical weld and component acceptance decisions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Fast & Simple Application</h3>
                    <p>Quick setup, rapid inspection cycles, and immediate results enable high-throughput production testing and efficient field inspection programs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Clear Visual Indications</h3>
                    <p>Crack indications are easily observable, measurable, and photographable—supporting documentation requirements and audit trails for quality assurance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Cost-Effective Method</h3>
                    <p>Simple equipment, consumable materials, and fast inspection cycles make MT economical for both one-off inspections and large-volume production screening.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <h3>Highly Portable</h3>
                    <p>Lightweight yokes, battery-operated equipment, and minimal consumables enable field inspection at construction sites, refineries, and remote locations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Code & Standard Acceptance</h3>
                    <p>Widely specified and accepted by ASME, AWS, API, ASTM, ISO, and most construction/fabrication codes as a primary surface inspection method.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">MT APPLICATIONS</span>
                <h2>Industries & Components We Inspect</h2>
                <p>Comprehensive magnetic particle inspection across fabrication, construction, and in-service integrity programs</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="welding">Weld Inspection</button>
                    <button class="tab-btn" data-tab="forgings">Forgings & Castings</button>
                    <button class="tab-btn" data-tab="machining">Machined Components</button>
                    <button class="tab-btn" data-tab="service">In-Service Inspection</button>
                </div>

                <div class="tabs-content">
                    <!-- Weld Inspection Tab -->
                    <div class="tab-panel active" id="welding">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mt-weld.jpg" alt="Weld Magnetic Particle Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Weld Quality & Surface Crack Detection</h3>
                                <p>MT is the standard method for detecting surface-breaking weld defects including cracks, lack of fusion, incomplete penetration, undercut, and heat-affected zone (HAZ) cracking in ferromagnetic welds.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Structural steel welds (building, bridge, offshore structures)</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel and piping welds</li>
                                    <li><i class="fas fa-check"></i> Pipeline girth and seam welds</li>
                                    <li><i class="fas fa-check"></i> Repair welds and weld overlays</li>
                                    <li><i class="fas fa-check"></i> Multi-pass weld inter-pass inspection</li>
                                    <li><i class="fas fa-check"></i> Heat-affected zone (HAZ) cracking assessment</li>
                                    <li><i class="fas fa-check"></i> Pre-service and final weld inspection</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Structural Steel Fabrication:</strong> MT inspection of critical moment connections in high-rise construction—detecting tight weld toe cracks and incomplete fusion that could lead to fatigue failure. Immediate results enable real-time weld repair decisions and production flow continuity.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">ASME Sec V, Art 7</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ASTM E709</span>
                                    <span class="standard-tag">ISO 17638</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Forgings & Castings Tab -->
                    <div class="tab-panel" id="forgings">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mt-forging.jpg" alt="Forging Magnetic Particle Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Forgings, Castings & Raw Material Inspection</h3>
                                <p>Surface crack detection in steel forgings, cast iron components, and machined parts to identify manufacturing defects, heat treatment cracks, and handling damage before assembly or service.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel forgings (shafts, flanges, hubs, rings)</li>
                                    <li><i class="fas fa-check"></i> Cast iron and ductile iron castings</li>
                                    <li><i class="fas fa-check"></i> Valve bodies, pump casings, machinery components</li>
                                    <li><i class="fas fa-check"></i> Heat treatment crack detection</li>
                                    <li><i class="fas fa-check"></i> Forging lap, fold, and burst defects</li>
                                    <li><i class="fas fa-check"></i> Surface preparation and finishing verification</li>
                                    <li><i class="fas fa-check"></i> Incoming material and QC inspection</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Automotive Crankshaft QC:</strong> High-volume MT inspection of forged crankshafts after heat treatment—detecting quench cracks, grinding damage, and surface defects to prevent field failures. Automated particle application and UV inspection optimize throughput while maintaining quality standards.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A388</span>
                                    <span class="standard-tag">ASTM A275</span>
                                    <span class="standard-tag">ASME Sec V, Art 7</span>
                                    <span class="standard-tag">SAE AMS-STD-1949</span>
                                    <span class="standard-tag">ISO 9934</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Machined Components Tab -->
                    <div class="tab-panel" id="machining">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mt-machined.jpg" alt="Machined Component MT Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Machined Parts & Precision Component Testing</h3>
                                <p>Detection of grinding cracks, machining damage, stress concentrations, and surface defects in finished components before assembly, coating, or shipment to prevent in-service failures.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Precision machined shafts, gears, and bearings</li>
                                    <li><i class="fas fa-check"></i> Aerospace and automotive critical components</li>
                                    <li><i class="fas fa-check"></i> Turbine and generator components</li>
                                    <li><i class="fas fa-check"></i> Grinding burn and thermal damage detection</li>
                                    <li><i class="fas fa-check"></i> Thread roots, keyways, and stress concentration areas</li>
                                    <li><i class="fas fa-check"></i> Pre-coating and pre-assembly inspection</li>
                                    <li><i class="fas fa-check"></i> Final QC and customer acceptance testing</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Aerospace Landing Gear:</strong> MT inspection of critical landing gear components for grinding cracks and machining defects—ensuring surface integrity before chromium plating and assembly. Fluorescent MT under UV provides maximum sensitivity for safety-critical applications.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AMS 2641</span>
                                    <span class="standard-tag">ASTM E1444</span>
                                    <span class="standard-tag">MIL-STD-1949</span>
                                    <span class="standard-tag">ASME Sec V, Art 7</span>
                                    <span class="standard-tag">ISO 9934</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- In-Service Inspection Tab -->
                    <div class="tab-panel" id="service">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mt-inservice.jpg" alt="In-Service MT Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>In-Service & Maintenance Inspection</h3>
                                <p>Periodic crack detection in operating equipment, repair assessment, and condition monitoring to identify fatigue cracks, stress corrosion, and service-induced damage before failure occurs.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel nozzles and attachments</li>
                                    <li><i class="fas fa-check"></i> Rotating machinery (shafts, couplings, impellers)</li>
                                    <li><i class="fas fa-check"></i> Structural connections and support members</li>
                                    <li><i class="fas fa-check"></i> Fatigue-critical locations and stress risers</li>
                                    <li><i class="fas fa-check"></i> Weld toe cracking and HAZ assessment</li>
                                    <li><i class="fas fa-check"></i> Repair area inspection before and after welding</li>
                                    <li><i class="fas fa-check"></i> Regulatory and insurance inspection support</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Petrochemical Reactor Inspection:</strong> In-service MT inspection of reactor nozzle welds during turnaround—identifying stress corrosion cracks and weld toe fatigue damage for repair prioritization. Portable MT equipment enables inspection in confined spaces with minimal setup time.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">ASME Sec XI</span>
                                    <span class="standard-tag">ASTM E709</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">Client Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== MT TECHNIQUES & SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">MT METHODS & SERVICES</span>
                <h2>Our Magnetic Particle Testing Capabilities</h2>
                <p>Complete MT solutions using wet/dry methods, visible/fluorescent particles, and AC/DC magnetization</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Wet Fluorescent Magnetic Particle Testing</h3>
                    <p>High-sensitivity inspection using fluorescent particles in liquid carrier, observed under UV light for maximum crack detection capability.</p>
                    <ul>
                        <li>Fluorescent particles suspended in petroleum or water-based carrier</li>
                        <li>UV-A black light inspection (365 nm wavelength)</li>
                        <li>Superior sensitivity for tight cracks and fine indications</li>
                        <li>Bench units with spray/flow-on application</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Dry Powder Magnetic Particle Testing</h3>
                    <p>Versatile field inspection method using colored dry magnetic powder—ideal for outdoor, high-temperature, and large component inspection.</p>
                    <ul>
                        <li>Red, black, or colored contrast powders</li>
                        <li>Manual dusting or aerosol spray application</li>
                        <li>Excellent for field, outdoor, and rough surface inspection</li>
                        <li>No wet bath or liquid carrier requirements</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>AC & DC Yoke Inspection</h3>
                    <p>Portable electromagnetic yoke inspection for localized crack detection in welds, components, and hard-to-reach areas.</p>
                    <ul>
                        <li>AC yokes for surface crack detection</li>
                        <li>DC yokes for deeper penetration capability</li>
                        <li>Lightweight portable equipment</li>
                        <li>Adjustable pole spacing and magnetization strength</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Prod & Coil Magnetization</h3>
                    <p>Flexible magnetization techniques using prods, coils, and central conductors for complex geometries and specific crack orientations.</p>
                    <ul>
                        <li>Contact prods for localized circular field inspection</li>
                        <li>Coil/solenoid wrapping for longitudinal field generation</li>
                        <li>Central conductor method for tubular components</li>
                        <li>Multi-directional magnetization for comprehensive coverage</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Bench & Automated MT Systems</h3>
                    <p>High-volume production inspection using fixed MT units with automated magnetization, particle application, and handling systems.</p>
                    <ul>
                        <li>Horizontal and vertical wet bench units</li>
                        <li>Automated part handling and positioning</li>
                        <li>Programmable magnetization sequences</li>
                        <li>Production line integration capability</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Demagnetization & Post-Inspection</h3>
                    <p>Complete MT service including proper demagnetization, particle removal, and surface preparation for subsequent operations.</p>
                    <ul>
                        <li>AC demagnetization to reduce residual fields</li>
                        <li>Particle removal and surface cleaning</li>
                        <li>Magnetic field strength verification</li>
                        <li>Documentation and photographic recording</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & TECHNOLOGY ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">PROFESSIONAL MT EQUIPMENT</span>
                    <h2>Complete Magnetic Particle Testing Systems</h2>
                    <p>We maintain a comprehensive fleet of portable and stationary MT equipment, including AC/DC yokes, wet benches, UV lights, and specialized magnetization accessories for diverse inspection requirements.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-magnet"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>AC & DC Electromagnetic Yokes</h4>
                                <p>Portable yokes with adjustable pole spacing, variable power output, and continuous duty capability—suitable for field inspection and workshop applications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Wet Fluorescent MT Systems</h4>
                                <p>Complete wet bath units with circulating pump, particle concentration control, contamination monitoring, and UV lighting for high-sensitivity crack detection.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>UV-A Black Lights & Meters</h4>
                                <p>Calibrated UV-A lamps (365 nm) with intensity meters for fluorescent particle inspection—ensuring proper lighting conditions and standardized sensitivity.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Magnetization Accessories</h4>
                                <p>Prods, coils, central conductors, and specialty fixtures for complex geometries, large components, and specific magnetization requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Quality Standards & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/40/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/41/100/50" alt="ASNT Certified">
                            <img src="https://picsum.photos/id/42/100/50" alt="ASTM Compliant">
                            <img src="https://picsum.photos/id/43/100/50" alt="AWS Qualified">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/mt-inspection-work.jpg" alt="MT Inspection Process">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch MT Inspection Workflow</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>AC / DC Magnetization</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Wet / Dry Methods</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>UV Fluorescent Capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibrated Equipment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your Trusted MT Inspection Partner</h2>
                <p>Experienced technicians, comprehensive equipment, and proven results for critical crack detection applications</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Certified MT Specialists</h3>
                    <p>ASNT Level II and Level III certified technicians with extensive experience in wet/dry MT, fluorescent inspection, and complex magnetization techniques.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Complete Equipment Range</h3>
                    <p>Comprehensive MT equipment inventory including portable yokes, wet benches, UV systems, and specialty magnetization tools for diverse applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-image"></i>
                    </div>
                    <h3>Documented Results</h3>
                    <p>Professional inspection reports with crack location maps, photographic evidence, magnetization records, and clear acceptance/rejection recommendations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Rapid Response</h3>
                    <p>Fast mobilization for urgent crack detection requirements, production support, and fabrication quality control with minimal schedule impact.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Procedures aligned with ASTM E709, ASME Section V, AWS D1.1, API standards, and project specifications with complete documentation packages.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Application Expertise</h3>
                    <p>Deep understanding of crack mechanisms, magnetization requirements, and acceptance criteria across welding, forging, casting, and machining applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>MT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What materials can be tested with magnetic particle inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Magnetic particle testing works only on ferromagnetic materials—primarily carbon steel, alloy steel, cast iron, ductile iron, and some ferritic stainless steels. It cannot be used on non-magnetic materials such as aluminum, copper, brass, austenitic stainless steel (304, 316), titanium, or non-metals. For non-ferromagnetic materials, liquid penetrant testing (PT) is typically used instead.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between AC and DC magnetization?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>AC magnetization</strong> provides high sensitivity to tight surface cracks but limited subsurface penetration due to skin effect. <strong>DC magnetization</strong> penetrates deeper and can detect near-surface defects but with lower surface sensitivity. <strong>Half-wave DC (HWDC)</strong> combines advantages of both. Selection depends on expected defect depth and crack orientation—we choose the appropriate method based on application requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why use fluorescent particles instead of visible particles?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Fluorescent particles provide higher contrast and better sensitivity for detecting tight cracks, especially on dark or irregular surfaces. Under UV light, fluorescent indications appear bright against a dark background—making small defects more visible than colored powder on ambient lighting. However, fluorescent MT requires controlled lighting conditions and is typically more expensive than dry powder methods.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How deep can magnetic particle testing detect defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>MT primarily detects surface-breaking defects with excellent sensitivity. Subsurface detection depth depends on magnetization method, defect size/orientation, and material properties—typically up to 3-6 mm below the surface for significant defects. AC magnetization is most sensitive to surface cracks; DC provides better subsurface detection. For deeper internal defects, ultrasonic testing is more appropriate.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is demagnetization required after MT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Demagnetization is often required to reduce residual magnetism that could interfere with subsequent operations—especially for components with close-tolerance fits, electronic proximity, or machining operations. Some specifications and codes require demagnetization verification using a gauss meter. AC demagnetization or controlled DC field reduction methods are commonly used. Requirements depend on component application and specification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can MT detect all types of weld defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>MT is excellent for surface-breaking defects such as cracks, lack of fusion, incomplete penetration (when it reaches the surface), undercut, and surface porosity. However, it cannot detect internal defects such as buried porosity, inclusions, or lack of penetration that doesn't reach the surface. For complete weld evaluation, MT is often combined with radiography or ultrasonic testing for volumetric coverage.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does MT inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>MT inspection is typically very fast—individual components or weld sections can be inspected in minutes. Time depends on component size, surface preparation requirements, magnetization method, and evaluation complexity. High-volume production inspection can achieve rapid throughput; field inspection may require more time for setup and access. We provide time estimates based on specific scope and requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What surface preparation is required for MT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Surfaces should be clean and free of loose scale, oil, grease, paint, and heavy rust that could mask indications or prevent proper particle mobility. Light scale, smooth paint, and thin coatings may be acceptable depending on specification requirements. Grinding or machining marks should be minimized in critical areas. We assess surface conditions and recommend appropriate preparation based on acceptance criteria and defect sensitivity requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Reliable Surface Crack Detection?</h2>
                <p>Contact us for magnetic particle testing consultation, technique selection, and professional inspection services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Immediate Results</span>
                    <span><i class="fas fa-check"></i> High Crack Sensitivity</span>
                    <span><i class="fas fa-check"></i> Code-Compliant Procedures</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT & Surface Inspection Services</h2>
                <p>Comprehensive surface and volumetric inspection solutions for quality assurance and integrity management</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/pt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3>Liquid Penetrant Testing</h3>
                    <p>Surface crack detection for non-ferromagnetic materials and complex geometries</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>General surface examination and weld quality assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Volumetric inspection for internal defect detection and sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced ultrasonic imaging for complex welds and components</p>
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