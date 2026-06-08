<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Ultrasonic Testing (UT) Services | Flaw Detection & Thickness Measurement | Alpha Sonix NDT Solutions";
$meta_description = "Professional Ultrasonic Testing (UT) services for welds, forgings, castings, and components. Certified technicians, accurate flaw detection, thickness gauging, and code-compliant reporting per ASME, API, AWS & ISO standards.";
$meta_keywords = "ultrasonic testing, UT inspection, flaw detection, ultrasonic flaw detector, thickness measurement, conventional UT, weld inspection, forging inspection, casting inspection, NDT ultrasonic, ASME Sec V";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/ultrasonic-testing-flaw-detection-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/ut-og.jpg">

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
            "serviceType": "Ultrasonic Testing (UT) & Flaw Detection",
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
            "description": "Professional Ultrasonic Testing (UT) services for flaw detection, thickness measurement, and material integrity verification across welds, forgings, castings, and components."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/ut-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Ultrasonic Testing</span>
                </div>
                <h1 class="page-title">Ultrasonic Testing (UT) & Flaw Detection</h1>
                <p class="page-subtitle">Reliable volumetric inspection for welds, forgings, castings, and components—accurate flaw detection, thickness measurement, and code-compliant documentation</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME / API / AWS Compliant</span>
                    <span class="badge"><i class="fas fa-user-check"></i> Certified Level II & III Technicians</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Traceable Calibration & Reporting</span>
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
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Volumetric Inspection</h3>
                    <p>Detect internal discontinuities such as cracks, lack of fusion, porosity, inclusions, and voids that surface methods cannot identify.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>Precise Thickness Measurement</h3>
                    <p>Accurate wall thickness readings for corrosion monitoring, manufacturing QC, and fitness-for-service evaluations.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3>Code-Compliant Methods</h3>
                    <p>Inspection procedures aligned with ASME Section V, API standards, AWS codes, and project-specific acceptance criteria.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Safe & Efficient</h3>
                    <p>No radiation hazards, immediate results, and suitability for high-volume fabrication and field inspection programs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS UT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">PROVEN NDT METHOD</span>
                    <h2>What is Ultrasonic Testing (UT)?</h2>
                    <p class="lead">Ultrasonic Testing (UT) is a non-destructive inspection method that uses high-frequency sound waves to detect internal flaws, measure thickness, and evaluate material integrity without causing damage to the component.</p>

                    <p>UT works by transmitting ultrasonic pulses into the material using a probe (transducer). These sound waves travel through the material and reflect back when they encounter a boundary—such as the back wall, a discontinuity, or a material interface. By analyzing the time, amplitude, and character of the returned echoes, trained technicians can detect, locate, and characterize internal defects.</p>

                    <p>Conventional UT is one of the most widely used NDT methods globally, valued for its versatility, portability, depth of penetration, and immediate feedback. It is applicable to metals, composites, and many engineering materials—making it suitable for welds, forgings, castings, plate, bar stock, and in-service components.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Internal Flaw Detection</strong>
                                <p>Identify cracks, lack of fusion, lack of penetration, porosity, slag, inclusions, laminations, and other volumetric discontinuities.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Accurate Thickness Measurement</strong>
                                <p>Measure remaining wall thickness for corrosion assessment, erosion monitoring, and code-required documentation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Depth & Location Information</strong>
                                <p>Determine flaw depth, through-wall location, and distance from the scan surface—critical for sizing and fitness-for-service decisions.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Portable & Field-Ready</strong>
                                <p>Battery-operated instruments and compact probes enable inspections in workshops, construction sites, offshore platforms, and operating plants.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>When to Use UT:</strong>
                            <p>UT is ideal when you need volumetric inspection without radiation hazards, when immediate results are required, or when code acceptance is based on ultrasonic examination. It is especially effective for thicker sections and detecting planar defects such as cracks and lack of fusion.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request UT Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/ut-equipment.jpg" alt="Ultrasonic Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Modern ultrasonic flaw detectors with calibrated probes for accurate, repeatable inspections</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Inspections Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Industries Served</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">20+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> UT Principle</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Ultrasonic pulse transmitted into material via probe</li>
                            <li><strong>2.</strong> Sound wave travels through material at known velocity</li>
                            <li><strong>3.</strong> Wave reflects from defects or back wall</li>
                            <li><strong>4.</strong> Reflected echo received and displayed on screen</li>
                            <li><strong>5.</strong> Time & amplitude analyzed to detect and locate flaws</li>
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
                <span class="section-label">WHY CHOOSE UT</span>
                <h2>Key Advantages of Ultrasonic Testing</h2>
                <p>Proven performance, versatility, and safety for fabrication, construction, and in-service inspection</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Volumetric Coverage</h3>
                    <p>Inspects the entire thickness of the material—detecting internal flaws that visual and surface methods cannot reach.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>High Sensitivity</h3>
                    <p>Capable of detecting small discontinuities, tight cracks, and planar defects with good depth resolution and sizing capability.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3>No Radiation Hazards</h3>
                    <p>Safe for personnel and the public—no restricted areas, no film processing, and no environmental concerns associated with radiography.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-gauge-high"></i>
                    </div>
                    <h3>Immediate Results</h3>
                    <p>Real-time indication display enables on-the-spot acceptance decisions, faster production releases, and reduced inspection delays.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <h3>Portable & Versatile</h3>
                    <p>Compact instruments and probes suitable for workshop, field, confined space, and elevated work locations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Code Acceptance</h3>
                    <p>Widely recognized and accepted by ASME, API, AWS, ISO, and client specifications as a primary or alternative inspection method.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">UT APPLICATIONS</span>
                <h2>Industries & Components We Inspect</h2>
                <p>Comprehensive ultrasonic inspection solutions across fabrication, construction, and in-service integrity programs</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="welds">Weld Inspection</button>
                    <button class="tab-btn" data-tab="forgings">Forgings & Castings</button>
                    <button class="tab-btn" data-tab="thickness">Thickness Measurement</button>
                    <button class="tab-btn" data-tab="plate">Plate & Stock Inspection</button>
                </div>

                <div class="tabs-content">
                    <!-- Weld Inspection Tab -->
                    <div class="tab-panel active" id="welds">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ut-weld.jpg" alt="Weld Ultrasonic Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Weld Quality Inspection</h3>
                                <p>Ultrasonic examination of welds to detect lack of fusion, lack of penetration, cracks, porosity, slag inclusions, and other weld discontinuities that may affect structural integrity or pressure containment.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Butt welds (single & double-sided access)</li>
                                    <li><i class="fas fa-check"></i> Fillet welds and T-joints</li>
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell and attachment welds</li>
                                    <li><i class="fas fa-check"></i> Pipe girth and seam welds</li>
                                    <li><i class="fas fa-check"></i> Structural steel connections</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel & boiler welds</li>
                                    <li><i class="fas fa-check"></i> Pre-service and in-service weld examination</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec V, Art 5</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ISO 17640</span>
                                    <span class="standard-tag">ASME Sec VIII</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Forgings & Castings Tab -->
                    <div class="tab-panel" id="forgings">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ut-forging.jpg" alt="Forging Ultrasonic Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Forgings & Castings Inspection</h3>
                                <p>Volumetric ultrasonic inspection of forgings, castings, and wrought products to detect internal defects, shrinkage, porosity, cracks, and other manufacturing discontinuities.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Forged components (shafts, flanges, hubs, rings)</li>
                                    <li><i class="fas fa-check"></i> Steel and alloy castings</li>
                                    <li><i class="fas fa-check"></i> Pump and valve bodies</li>
                                    <li><i class="fas fa-check"></i> Turbine and compressor components</li>
                                    <li><i class="fas fa-check"></i> Pressure-retaining parts</li>
                                    <li><i class="fas fa-check"></i> Critical load-bearing structures</li>
                                    <li><i class="fas fa-check"></i> Incoming material verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A388</span>
                                    <span class="standard-tag">ASTM A609</span>
                                    <span class="standard-tag">ASME Sec V, Art 5</span>
                                    <span class="standard-tag">ISO 10375</span>
                                    <span class="standard-tag">EN 12680</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thickness Measurement Tab -->
                    <div class="tab-panel" id="thickness">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ut-thickness.jpg" alt="Ultrasonic Thickness Measurement">
                            </div>
                            <div class="tab-text">
                                <h3>Thickness Gauging & Corrosion Monitoring</h3>
                                <p>Accurate ultrasonic thickness measurement for corrosion monitoring, remaining life assessment, fitness-for-service evaluations, and code-required documentation.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pipe and vessel wall thickness verification</li>
                                    <li><i class="fas fa-check"></i> Corrosion under insulation (CUI) screening</li>
                                    <li><i class="fas fa-check"></i> Tank floor and shell thickness surveys</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger tube thickness checks</li>
                                    <li><i class="fas fa-check"></i> Erosion and flow-accelerated corrosion (FAC) monitoring</li>
                                    <li><i class="fas fa-check"></i> Manufacturing thickness QC</li>
                                    <li><i class="fas fa-check"></i> Coating and cladding thickness (dual-element probes)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E797</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">ISO 16809</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Plate & Stock Tab -->
                    <div class="tab-panel" id="plate">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ut-plate.jpg" alt="Plate Ultrasonic Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Plate, Bar & Stock Material Inspection</h3>
                                <p>Ultrasonic inspection of rolled plate, bar stock, billets, and semi-finished products to detect laminations, inclusions, and internal defects before fabrication or service.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Carbon and alloy steel plate</li>
                                    <li><i class="fas fa-check"></i> Stainless steel and special alloys</li>
                                    <li><i class="fas fa-check"></i> Aluminum and non-ferrous materials</li>
                                    <li><i class="fas fa-check"></i> Bar stock and billets</li>
                                    <li><i class="fas fa-check"></i> Lamination detection and characterization</li>
                                    <li><i class="fas fa-check"></i> Incoming material acceptance</li>
                                    <li><i class="fas fa-check"></i> Pre-fabrication material verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A435</span>
                                    <span class="standard-tag">ASTM A578</span>
                                    <span class="standard-tag">ASME SA-435</span>
                                    <span class="standard-tag">ISO 10893</span>
                                    <span class="standard-tag">EN 10160</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== UT TECHNIQUES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">UT TECHNIQUES & SERVICES</span>
                <h2>Our Ultrasonic Testing Capabilities</h2>
                <p>Comprehensive UT solutions matched to your component geometry, material, and acceptance criteria</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Straight Beam (Compression Wave)</h3>
                    <p>Normal beam inspection for thickness measurement, lamination detection, and perpendicular flaw detection in plate, forgings, and castings.</p>
                    <ul>
                        <li>0° longitudinal wave probes</li>
                        <li>Thickness gauging and verification</li>
                        <li>Lamination and planar defect detection</li>
                        <li>Material characterization support</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Angle Beam (Shear Wave)</h3>
                    <p>Angle beam inspection for weld examination, crack detection, and inspection of components where normal beam access is limited.</p>
                    <ul>
                        <li>45°, 60°, 70° and custom angle wedges</li>
                        <li>Weld volumetric coverage</li>
                        <li>Crack and lack-of-fusion detection</li>
                        <li>Multi-angle scanning for complete coverage</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Dual-Element (Twin Crystal)</h3>
                    <p>Dual-element probes for near-surface inspection, corrosion measurement, and improved detection in coarse-grain materials.</p>
                    <ul>
                        <li>Near-surface dead zone reduction</li>
                        <li>Coating and cladding thickness</li>
                        <li>Pitting and localized corrosion</li>
                        <li>Small-diameter pipe and tube inspection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Immersion & Contact Scanning</h3>
                    <p>Automated immersion and contact scanning for high-volume inspection, repeatability, and detailed coverage mapping.</p>
                    <ul>
                        <li>Immersion tank systems (where available)</li>
                        <li>Water column and squirter coupling</li>
                        <li>Encoded scanning for C-scan imaging</li>
                        <li>High-throughput production inspection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Specialized UT Applications</h3>
                    <p>Customized ultrasonic solutions for unique geometries, materials, and inspection challenges.</p>
                    <ul>
                        <li>Bolt and stud inspection</li>
                        <li>Tube and pipe from OD/ID</li>
                        <li>Composite and laminate materials (application dependent)</li>
                        <li>High-temperature UT (application dependent)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Field & Lab Services</h3>
                    <p>Flexible service delivery options to match your project needs, location, and schedule.</p>
                    <ul>
                        <li>On-site field inspection services</li>
                        <li>Laboratory UT examination</li>
                        <li>Emergency breakdown support</li>
                        <li>Shutdown and turnaround inspection</li>
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
                    <span class="section-label">CALIBRATED EQUIPMENT</span>
                    <h2>Professional UT Instruments & Probes</h2>
                    <p>We use calibrated ultrasonic flaw detectors, industry-standard probes, and reference blocks to ensure accurate, repeatable, and code-compliant inspections.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Modern Ultrasonic Flaw Detectors</h4>
                                <p>Portable, battery-operated UT instruments with digital displays, data logging, and calibration verification features for reliable field and lab inspections.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-broadcast-tower"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Comprehensive Probe Inventory</h4>
                                <p>Wide range of frequencies (0.5 MHz to 15 MHz), element sizes, and beam angles—including straight beam, angle beam, dual-element, and specialty probes.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-cube"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Calibration Blocks & Standards</h4>
                                <p>ASME-compliant reference blocks (IIW, V1, V2, distance-amplitude blocks) and customer-specific calibration standards for procedure-based setups.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Thickness Gauges</h4>
                                <p>Dedicated ultrasonic thickness gauges with single and dual-element capability for precise corrosion monitoring and QC measurements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/10/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/11/100/50" alt="ASNT Certified">
                            <img src="https://picsum.photos/id/12/100/50" alt="NABL Accredited">
                            <img src="https://picsum.photos/id/13/100/50" alt="Client Approvals">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/ut-inspection-work.jpg" alt="UT Inspection in Progress">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch UT Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibrated Instruments</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Traceable Standards</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Code-Compliant Procedures</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Reporting Options</span>
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
                <h2>Your Trusted UT Inspection Partner</h2>
                <p>Experienced technicians, proven methods, and reliable reporting that supports your quality and integrity objectives</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Certified Technicians</h3>
                    <p>ASNT Level II and Level III certified personnel with extensive practical experience across diverse industries and applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Code-Compliant Procedures</h3>
                    <p>Written procedures aligned with ASME, API, AWS, ASTM, ISO, and project specifications—validated and ready for third-party review.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>Clear Documentation</h3>
                    <p>Professional inspection reports with calibration records, indication summaries, acceptance status, and recommendations—delivered on schedule.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <h3>Fast Mobilization</h3>
                    <p>Rapid response for urgent inspection requirements, breakdown support, and tight turnaround schedules with minimal notice.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-indian-rupee-sign"></i>
                    </div>
                    <h3>Competitive Pricing</h3>
                    <p>Transparent quotations with no hidden costs—scope-based pricing that matches your inspection objectives and budget.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Technical Support</h3>
                    <p>Engineering consultation, method selection guidance, and post-inspection support to help you interpret findings and plan next steps.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>UT Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of defects can ultrasonic testing detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>UT can detect a wide range of internal discontinuities including cracks, lack of fusion, lack of penetration, porosity, inclusions, laminations, voids, shrinkage, and delaminations. It is particularly effective for planar defects such as cracks and lack of fusion that are oriented perpendicular to the sound beam.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is ultrasonic thickness measurement?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ultrasonic thickness measurement is highly accurate when performed with calibrated instruments and proper technique. Typical accuracy is ±0.1 mm or better, depending on material, surface condition, temperature, and probe selection. For critical applications, we use reference standards and multiple measurement protocols to ensure reliability.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can UT be used on all materials?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>UT is effective on most metals (steel, stainless steel, aluminum, titanium, copper alloys), many plastics, composites, and ceramics. However, very coarse-grained materials, highly attenuative materials, and certain cast irons may present challenges. We assess material suitability and optimize probe selection, frequency, and technique for each application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between UT and radiography (RT)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Both are volumetric inspection methods. UT uses sound waves and provides immediate results with no radiation hazards, excellent sensitivity to planar defects, and depth information. RT uses X-rays or gamma rays, provides a permanent film/digital image, and is better for detecting volumetric defects like porosity. UT is often preferred for safety, speed, and cost-effectiveness.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does UT inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cost depends on component type, thickness, access, number of locations, acceptance criteria, reporting requirements, and mobilization. We provide detailed quotations based on scope. Contact us with your component details, drawings, and specifications for an accurate estimate.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide UT inspection during shutdowns?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—we regularly support planned shutdowns, turnarounds, and outage inspection programs. We can mobilize quickly, work to tight schedules, and provide expedited reporting to minimize downtime and keep critical paths on track.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What standards do you follow for UT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We conduct UT inspections per ASME Section V Article 5, API 510/570/653, AWS D1.1, ASTM standards (A388, A435, A578, A609, E797), ISO 17640, EN 583 series, and client-specific procedures. All inspections are documented with calibration records and traceable reporting.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you perform UT on high-temperature equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—high-temperature ultrasonic inspection is possible using specialized probes, couplants, and delay lines. However, practical limitations exist based on temperature, access, and probe durability. We assess feasibility and recommend the best approach based on your component condition and inspection objective.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Reliable Ultrasonic Testing Services?</h2>
                <p>Contact us for technical consultation, scope review, and a detailed inspection quotation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free Technical Consultation</span>
                    <span><i class="fas fa-check"></i> Fast Quotation Turnaround</span>
                    <span><i class="fas fa-check"></i> Code-Compliant Reporting</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT Services</h2>
                <p>Comprehensive inspection solutions to meet all your quality and integrity requirements</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced phased array ultrasonic testing for complex welds and detailed imaging</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Time of Flight Diffraction for accurate crack detection and through-wall sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/rt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Radiography Testing</h3>
                    <p>X-ray and gamma-ray inspection for welds, castings, and assemblies</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing</h3>
                    <p>Surface examination and general condition assessment</p>
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