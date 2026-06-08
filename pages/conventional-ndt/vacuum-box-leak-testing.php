<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Vacuum Box Leak Testing Services | Weld Leak Detection & Pressure Boundary Integrity | Alpha Sonix NDT Solutions";
$meta_description = "Professional Vacuum Box Leak Testing services for tank welds, pipeline joints, and pressure boundaries. Immediate leak detection using soap bubble testing with code-compliant procedures per API 650, ASME & AWWA standards.";
$meta_keywords = "vacuum box testing, leak testing, bubble testing, vacuum box leak detection, tank weld testing, pressure boundary testing, soap bubble test, API 650, leak detection services, weld integrity testing";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/vacuum-box-leak-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/vacuum-box-og.jpg">

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
            "serviceType": "Vacuum Box Leak Testing & Inspection",
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
            "description": "Professional Vacuum Box Leak Testing services for detecting through-wall leaks in welds, tank floors, pressure boundaries, and critical containment systems."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/vacuum-box-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Vacuum Box Leak Testing</span>
                </div>
                <h1 class="page-title">Vacuum Box Leak Testing</h1>
                <p class="page-subtitle">Direct leak detection for welds and pressure boundaries—immediate visual results using soap bubble indication, critical for tank floors, pipeline joints, and containment integrity verification</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-search"></i> Direct Leak Detection</span>
                    <span class="badge"><i class="fas fa-eye"></i> Immediate Visual Results</span>
                    <span class="badge"><i class="fas fa-certificate"></i> API 650 / AWWA Compliant</span>
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
                        <i class="fas fa-leak"></i>
                    </div>
                    <h3>Actual Leak Detection</h3>
                    <p>Detects real through-wall leakage rather than just defects—proving pressure boundary integrity and containment capability under service conditions.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Immediate Results</h3>
                    <p>Soap bubble formation provides instant visual indication of leak location and severity—enabling immediate repair decisions and quality control.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Simple & Cost-Effective</h3>
                    <p>Basic equipment requirements and straightforward procedure make vacuum box testing economical for large-area inspection and routine quality verification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-expand"></i>
                    </div>
                    <h3>Large Area Coverage</h3>
                    <p>Efficient inspection of extensive weld lengths, tank floors, and continuous pressure boundaries with portable equipment and flexible setup configurations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS VACUUM BOX TESTING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">LEAK DETECTION METHOD</span>
                    <h2>What is Vacuum Box Leak Testing?</h2>
                    <p class="lead">Vacuum Box Leak Testing is a simple, effective method for detecting through-wall leaks in welds and pressure boundaries by creating a vacuum chamber over the test area and observing soap bubble formation at leak locations.</p>

                    <p>The vacuum box test involves placing a transparent chamber (vacuum box) over the weld or surface to be tested, creating a partial vacuum inside the chamber, applying soap solution to the outside surface, and observing for bubble formation. Any through-wall leak will draw air through the defect, creating bubbles in the soap solution that clearly indicate leak location and approximate size.</p>

                    <p>This method is particularly valuable for applications where leak-tightness is critical—such as storage tank floors, process piping, containment systems, and corrosion-resistant linings. Unlike other NDT methods that detect defects, vacuum box testing verifies actual pressure boundary integrity under differential pressure conditions similar to service.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Through-Wall Leak Detection</strong>
                                <p>Detects actual leakage paths including pin holes, porosity, incomplete penetration, and weld defects that compromise containment integrity.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Visual Leak Location</strong>
                                <p>Soap bubbles clearly indicate exact leak location, enabling precise repair and minimizing unnecessary weld removal or rework.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material Independent</strong>
                                <p>Works on all materials and thicknesses—steel, stainless steel, aluminum, composites, and plastics—as long as access to both sides is available.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code & Standard Compliance</strong>
                                <p>Recognized and specified by API 650, AWWA, ASME, and other industry standards for pressure boundary verification and quality acceptance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>When Vacuum Box Testing is Critical:</strong>
                            <p>Essential for applications where containment integrity is paramount—storage tanks, pressure vessels, pipelines, membrane systems, and any application where through-wall leakage could result in environmental contamination, safety hazards, or product loss.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Leak Testing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/vacuum-box-equipment.jpg" alt="Vacuum Box Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional vacuum box equipment with transparent chamber and vacuum pump system</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1,000+</span>
                            <span class="stat-label">Tank Welds Tested</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Through-Wall Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Instant</span>
                            <span class="stat-label">Visual Results</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> Vacuum Box Test Process</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Clean test area and ensure access to both sides</li>
                            <li><strong>2.</strong> Position vacuum box over weld or test area</li>
                            <li><strong>3.</strong> Create partial vacuum inside chamber</li>
                            <li><strong>4.</strong> Apply soap solution to opposite side surface</li>
                            <li><strong>5.</strong> Observe for bubble formation indicating leaks</li>
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
                <span class="section-label">WHY CHOOSE VACUUM BOX TESTING</span>
                <h2>Key Advantages of Leak Detection</h2>
                <p>Direct verification of pressure boundary integrity with immediate visual results and cost-effective implementation</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Actual Leak Detection</h3>
                    <p>Tests real pressure boundary integrity rather than just detecting defects—proving containment capability under differential pressure conditions similar to service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <h3>Precise Leak Location</h3>
                    <p>Soap bubbles clearly identify exact leak location and relative severity—enabling targeted repair without excessive weld removal or exploration.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Immediate Visual Indication</h3>
                    <p>Results are visible in real-time during testing—no processing time, no interpretation delay, and immediate pass/fail determination for quality control.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Simple Equipment & Method</h3>
                    <p>Basic vacuum box, pump, and soap solution requirements make the method portable, economical, and suitable for field applications without complex setup.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <h3>Large Area Efficiency</h3>
                    <p>Covers extensive weld lengths and surface areas efficiently with good productivity—ideal for tank floors, long pipeline runs, and membrane systems.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-materials"></i>
                    </div>
                    <h3>Material Versatility</h3>
                    <p>Applicable to all non-porous materials regardless of thickness, composition, or magnetic properties—providing universal leak detection capability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">VACUUM BOX APPLICATIONS</span>
                <h2>Industries & Systems We Test</h2>
                <p>Critical leak detection across storage tanks, process systems, containment barriers, and pressure boundaries</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="tanks">Storage Tanks</button>
                    <button class="tab-btn" data-tab="process">Process Systems</button>
                    <button class="tab-btn" data-tab="containment">Containment Systems</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Applications</button>
                </div>

                <div class="tabs-content">
                    <!-- Storage Tanks Tab -->
                    <div class="tab-panel active" id="tanks">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/vacuum-box-tank.jpg" alt="Tank Floor Vacuum Box Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Storage Tank Floor & Shell Welds</h3>
                                <p>Critical leak detection for petroleum, chemical, and water storage tanks—ensuring bottom plate welds, shell-to-bottom joints, and annular welds maintain containment integrity per API 650 and AWWA standards.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Tank bottom plate lap welds and butt joints</li>
                                    <li><i class="fas fa-check"></i> Shell-to-bottom annular welds</li>
                                    <li><i class="fas fa-check"></i> Sump and drain connection welds</li>
                                    <li><i class="fas fa-check"></i> Floating roof seal and pontoon welds</li>
                                    <li><i class="fas fa-check"></i> API 650 Appendix B compliance testing</li>
                                    <li><i class="fas fa-check"></i> Underground storage tank (UST) integrity</li>
                                    <li><i class="fas fa-check"></i> Double-bottom and leak detection systems</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Petroleum Storage Tank:</strong> API 650 vacuum box testing of new tank bottom welds during commissioning—detecting through-wall defects before product introduction to prevent environmental contamination and ensure regulatory compliance for groundwater protection.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">AWWA D100</span>
                                    <span class="standard-tag">UL 142</span>
                                    <span class="standard-tag">STI SP001</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process Systems Tab -->
                    <div class="tab-panel" id="process">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/vacuum-box-process.jpg" alt="Process System Leak Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Process Piping & Pressure Vessels</h3>
                                <p>Leak detection for chemical processing, food & beverage, pharmaceutical, and critical service applications where product purity, safety, and containment are paramount.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stainless steel sanitary piping and vessels</li>
                                    <li><i class="fas fa-check"></i> Chemical and corrosion-resistant process lines</li>
                                    <li><i class="fas fa-check"></i> Food and pharmaceutical clean systems</li>
                                    <li><i class="fas fa-check"></i> High-purity and semiconductor applications</li>
                                    <li><i class="fas fa-check"></i> Cryogenic and low-temperature service welds</li>
                                    <li><i class="fas fa-check"></i> Clad and overlay weld integrity</li>
                                    <li><i class="fas fa-check"></i> Small-bore and instrumentation connections</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Pharmaceutical Process Line:</strong> Vacuum box testing of sanitary stainless steel welds in sterile processing equipment—ensuring leak-tight integrity to prevent contamination and maintain product quality in FDA-regulated manufacturing environments.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME BPE</span>
                                    <span class="standard-tag">3-A Sanitary</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">FDA Guidelines</span>
                                    <span class="standard-tag">USP Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Containment Systems Tab -->
                    <div class="tab-panel" id="containment">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/vacuum-box-containment.jpg" alt="Containment System Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Environmental Containment & Linings</h3>
                                <p>Critical leak detection for secondary containment, environmental barriers, membrane systems, and protective linings where failure could result in soil or groundwater contamination.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Secondary containment and dike linings</li>
                                    <li><i class="fas fa-check"></i> Geomembrane and HDPE liner welds</li>
                                    <li><i class="fas fa-check"></i> Concrete coating and lining systems</li>
                                    <li><i class="fas fa-check"></i> Waste containment and landfill liners</li>
                                    <li><i class="fas fa-check"></i> Water treatment and storage pond linings</li>
                                    <li><i class="fas fa-check"></i> Chemical-resistant floor and wall coatings</li>
                                    <li><i class="fas fa-check"></i> Underground vault and sump integrity</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Secondary Containment System:</strong> Comprehensive leak testing of chemical storage area containment liner welds—ensuring environmental protection compliance and preventing hazardous material release to soil and groundwater systems.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">EPA Guidelines</span>
                                    <span class="standard-tag">ASTM D5641</span>
                                    <span class="standard-tag">NSF Standards</span>
                                    <span class="standard-tag">State Regulations</span>
                                    <span class="standard-tag">Environmental Compliance</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/vacuum-box-specialty.jpg" alt="Specialty Vacuum Box Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Specialized & Marine Applications</h3>
                                <p>Custom leak detection solutions for marine vessels, offshore structures, specialty fabrications, and unique applications requiring proven containment integrity.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Marine vessel hulls and ballast tanks</li>
                                    <li><i class="fas fa-check"></i> Offshore platform and subsea structures</li>
                                    <li><i class="fas fa-check"></i> Swimming pool and water feature linings</li>
                                    <li><i class="fas fa-check"></i> HVAC ductwork and air handling systems</li>
                                    <li><i class="fas fa-check"></i> Automotive and transportation fuel systems</li>
                                    <li><i class="fas fa-check"></i> Pressure and vacuum chamber integrity</li>
                                    <li><i class="fas fa-check"></i> Custom fabrications and prototype testing</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Marine Fuel Tank:</strong> Vacuum box testing of vessel fuel tank welds during construction—ensuring leak-tight integrity for safe operation, environmental protection, and compliance with maritime safety and pollution prevention regulations.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ABS Rules</span>
                                    <span class="standard-tag">DNV Standards</span>
                                    <span class="standard-tag">MARPOL Convention</span>
                                    <span class="standard-tag">USCG Regulations</span>
                                    <span class="standard-tag">Client Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTING METHODS & SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">VACUUM BOX SERVICES</span>
                <h2>Our Leak Testing Capabilities</h2>
                <p>Complete vacuum box testing solutions with equipment, procedures, and expertise for diverse applications</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Standard Vacuum Box Testing</h3>
                    <p>Conventional rectangular vacuum box testing for straight welds, flat surfaces, and standard configurations using established procedures and equipment.</p>
                    <ul>
                        <li>Transparent acrylic chambers with gasket seals</li>
                        <li>Portable vacuum pumps with gauge monitoring</li>
                        <li>Standard soap solution application</li>
                        <li>Systematic coverage and documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Large Area Coverage</h3>
                    <p>Efficient testing of extensive surface areas using multiple chambers, rolling techniques, and optimized procedures for tank floors and continuous welds.</p>
                    <ul>
                        <li>Multiple vacuum box deployment</li>
                        <li>Rolling chamber techniques for long welds</li>
                        <li>Grid pattern coverage for large surfaces</li>
                        <li>Coordinated multi-technician operations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Custom Chamber Configuration</h3>
                    <p>Specialized vacuum chambers and adapters for curved surfaces, corners, penetrations, and complex geometries requiring custom solutions.</p>
                    <ul>
                        <li>Curved and angled chamber designs</li>
                        <li>Flexible skirts for irregular surfaces</li>
                        <li>Penetration and nozzle adapters</li>
                        <li>Application-specific tooling</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>High-Sensitivity Testing</h3>
                    <p>Enhanced leak detection using optimized vacuum levels, improved soap solutions, and refined techniques for critical applications requiring maximum sensitivity.</p>
                    <ul>
                        <li>Controlled vacuum level optimization</li>
                        <li>Enhanced soap solution formulations</li>
                        <li>Extended dwell times for tight leaks</li>
                        <li>Documentation and photographic evidence</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Field & Facility Services</h3>
                    <p>Flexible service delivery including on-site testing, facility-based examination, and emergency leak detection support to meet project schedules and requirements.</p>
                    <ul>
                        <li>On-site tank and vessel testing</li>
                        <li>Workshop and fabrication facility support</li>
                        <li>Emergency leak detection response</li>
                        <li>Shutdown and turnaround integration</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Procedure Development & Training</h3>
                    <p>Custom procedure development, technique optimization, and personnel training to establish in-house vacuum box testing capabilities.</p>
                    <ul>
                        <li>Application-specific procedure writing</li>
                        <li>Equipment selection and procurement support</li>
                        <li>Personnel training and certification</li>
                        <li>Quality system integration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & PROCEDURES ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">PROFESSIONAL EQUIPMENT</span>
                    <h2>Vacuum Box Testing Equipment & Setup</h2>
                    <p>We use professional-grade vacuum boxes, calibrated vacuum pumps, and proven procedures to ensure reliable, repeatable leak detection with clear documentation and code compliance.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-square"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Vacuum Chambers & Boxes</h4>
                                <p>Transparent acrylic chambers in multiple sizes with flexible gasket seals, viewing ports, and vacuum connections—designed for reliable sealing on various surface conditions.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-fan"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Vacuum Pumps & Gauges</h4>
                                <p>Portable vacuum pumps with calibrated vacuum gauges, pressure regulation, and sustained suction capability for consistent vacuum levels throughout testing.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-spray-can"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Soap Solutions & Application</h4>
                                <p>Specialized leak detection solutions with optimized bubble formation characteristics, spray bottles, brushes, and application tools for uniform coverage.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Support Equipment</h4>
                                <p>Surface preparation tools, cleaning supplies, documentation cameras, timing devices, and safety equipment for complete testing support and quality records.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Standards & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/70/100/50" alt="API 650 Compliant">
                            <img src="https://picsum.photos/id/71/100/50" alt="AWWA Standards">
                            <img src="https://picsum.photos/id/72/100/50" alt="ASME Compliant">
                            <img src="https://picsum.photos/id/73/100/50" alt="ISO 9001:2015">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/vacuum-box-operation.jpg" alt="Vacuum Box Testing Operation">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Vacuum Box Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Professional Equipment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibrated Vacuum Systems</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Code-Compliant Procedures</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Clear Documentation</span>
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
                <h2>Your Leak Testing Specialists</h2>
                <p>Experienced technicians, proven procedures, and reliable results for critical containment integrity verification</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Experienced Technicians</h3>
                    <p>Trained personnel with extensive experience in vacuum box testing across tank construction, process systems, and environmental containment applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Professional Equipment</h3>
                    <p>Complete inventory of vacuum boxes, pumps, and accessories suitable for diverse applications from small repairs to large-scale tank construction projects.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Procedures aligned with API 650, AWWA, ASME, and industry standards ensuring accepted methodology and documentation for regulatory and client requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Detailed test reports with photographic evidence, leak location maps, test parameters, and clear pass/fail determination supporting quality records and acceptance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Rapid Response</h3>
                    <p>Fast mobilization for emergency leak detection, construction support, and critical containment verification with minimal schedule impact.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Application Expertise</h3>
                    <p>Deep understanding of leak detection requirements across storage tanks, process systems, environmental containment, and specialty applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Vacuum Box Testing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of leaks can vacuum box testing detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Vacuum box testing detects through-wall leaks including pin holes, porosity that extends completely through the material, incomplete weld penetration, cracks that breach containment, and any defect that creates a continuous path from one side to the other. It cannot detect internal defects or discontinuities that do not create through-wall leakage paths.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How sensitive is vacuum box testing compared to other leak detection methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Vacuum box testing sensitivity depends on vacuum level, soap solution quality, and leak path characteristics. It can detect very small through-wall leaks but is limited to defects that allow air flow. For comparison: vacuum box detects actual leakage while NDT methods like RT or UT detect defects (which may or may not leak). Helium leak testing offers higher sensitivity but requires more complex equipment.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What vacuum level is required for effective testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical vacuum levels range from 2-15 psi (approximately 50-380 mmHg) depending on application and specification requirements. API 650 specifies minimum 3 psi vacuum for tank testing. Higher vacuum levels increase sensitivity but may cause thin materials to deform. The vacuum level should be maintained throughout the test period per applicable standard.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can vacuum box testing be used on all materials?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Vacuum box testing works on all non-porous materials including steel, stainless steel, aluminum, plastics, composites, and coated surfaces—as long as access to both sides is available. Material thickness is generally not limiting, though very thin materials may require reduced vacuum to prevent deformation. The key requirement is that the material can support the differential pressure without damage.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How large an area can be tested at one time?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Single vacuum box coverage depends on chamber size and pump capacity—typically ranging from 1-4 square feet per setup. For large areas, we use multiple chambers simultaneously or progressive coverage techniques. Tank floors and long welds are tested systematically using overlapping coverage to ensure complete inspection. The method is very efficient for large area coverage compared to many other NDT methods.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What surface preparation is required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Surfaces should be clean and free of debris, oil, grease, and loose materials that could interfere with gasket sealing or bubble formation. The test surface (where soap is applied) should allow clear observation of bubbles. Heavy mill scale, paint, or coatings may need removal. Surface roughness should not prevent adequate vacuum box sealing. Cleaning requirements vary with application and acceptance criteria.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does vacuum box testing take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Test duration depends on area coverage, setup complexity, and specification requirements. Individual test locations typically require 5-15 minutes including setup, evacuation, soap application, observation, and documentation. Large areas like tank floors may require several hours or days depending on size and crew deployment. Results are immediate—no processing or wait time required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide detailed test reports including test procedure reference, equipment used, vacuum levels achieved, test coverage areas, leak locations (if found), photographic evidence, and pass/fail determination per applicable acceptance criteria. Documentation includes test parameter records, technician certifications, and equipment calibration data as required for quality and audit purposes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Reliable Leak Detection Services?</h2>
                <p>Contact us for vacuum box testing consultation, procedure development, and professional leak detection services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Immediate Results</span>
                    <span><i class="fas fa-check"></i> Direct Leak Detection</span>
                    <span><i class="fas fa-check"></i> Code-Compliant Testing</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT & Integrity Services</h2>
                <p>Comprehensive inspection solutions for weld quality, pressure boundary verification, and system integrity</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>Surface examination and weld quality assessment supporting leak testing programs</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/liquid-penetrant-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3>Liquid Penetrant Testing</h3>
                    <p>Surface crack detection complementing leak testing for comprehensive quality control</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/radiography-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Radiography Testing</h3>
                    <p>Volumetric weld inspection for internal quality verification before leak testing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Internal defect detection supporting weld integrity before pressure testing</p>
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