<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Eddy Current Testing (ECT) Services | Tube Inspection & Surface Crack Detection | Alpha Sonix NDT Solutions";
$meta_description = "Professional Eddy Current Testing (ECT) services for heat exchanger tubes, condenser tubes, surface crack detection, conductivity measurement, and coating thickness verification. Fast, sensitive, and code-compliant inspection per ASME, ASTM & API standards.";
$meta_keywords = "eddy current testing, ECT, eddy current inspection, tube testing, heat exchanger inspection, condenser tube testing, surface crack detection, conductivity testing, coating thickness, IRIS alternative, ASTM E309";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/eddy-current-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/ect-og.jpg">

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
            "serviceType": "Eddy Current Testing (ECT) & Inspection",
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
            "description": "Professional Eddy Current Testing services for heat exchanger tubes, surface crack detection, conductivity verification, and material sorting across power generation, petrochemical, and aerospace industries."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/ect-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Eddy Current Testing</span>
                </div>
                <h1 class="page-title">Eddy Current Testing (ECT)</h1>
                <p class="page-subtitle">Fast, sensitive electromagnetic inspection for tubes, surface cracks, material conductivity, and coating verification—no couplant, no contact stress, immediate results</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-bolt"></i> Electromagnetic Inspection</span>
                    <span class="badge"><i class="fas fa-tachometer-alt"></i> High-Speed Tube Testing</span>
                    <span class="badge"><i class="fas fa-certificate"></i> ASME / ASTM / API Compliant</span>
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
                        <i class="fas fa-magnifying-glass"></i>
                    </div>
                    <h3>Surface & Near-Surface Detection</h3>
                    <p>Highly sensitive to surface-breaking cracks, pitting, erosion, corrosion, and near-surface discontinuities in conductive materials.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-gauge-high"></i>
                    </div>
                    <h3>High-Speed Inspection</h3>
                    <p>Automated tube inspection at high traverse speeds—enabling complete heat exchanger surveys in minimal time during shutdowns.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-droplet-slash"></i>
                    </div>
                    <h3>No Couplant Required</h3>
                    <p>Dry inspection method—no liquid couplant, no surface preparation (in many cases), and suitable for online screening applications.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Multi-Parameter Capability</h3>
                    <p>Detect defects, measure conductivity, verify coating thickness, sort materials, and assess heat treatment—all from electromagnetic response.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS ECT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ELECTROMAGNETIC NDT METHOD</span>
                    <h2>What is Eddy Current Testing (ECT)?</h2>
                    <p class="lead">Eddy Current Testing (ECT) is a non-destructive electromagnetic inspection method used to detect surface and near-surface discontinuities, measure conductivity, verify coating thickness, and sort materials in conductive components—without physical contact or couplant.</p>

                    <p>ECT works by inducing circular electrical currents (eddy currents) in the test material using an alternating magnetic field generated by a probe coil. These eddy currents create their own magnetic field that opposes the original field. Any change in material conductivity, permeability, geometry, or the presence of defects disrupts the eddy current flow—causing a measurable change in the probe's impedance, which is displayed and analyzed to identify discontinuities or material variations.</p>

                    <p>ECT is widely used for heat exchanger and condenser tube inspection, aircraft component screening, wire and bar testing, surface crack detection, and quality control across power generation, petrochemical, aerospace, automotive, and manufacturing industries.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Tube Inspection Excellence</strong>
                                <p>Industry-standard method for detecting pitting, erosion, corrosion, cracking, and wall loss in heat exchanger, condenser, and boiler tubes.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Surface Crack Detection</strong>
                                <p>Highly sensitive to tight surface cracks, stress corrosion cracking (SCC), fatigue cracks, and grinding/machining damage on conductive surfaces.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Conductivity & Material Verification</strong>
                                <p>Measure electrical conductivity to verify alloy composition, detect heat treatment variations, and sort mixed materials in production and QC environments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Coating Thickness Measurement</strong>
                                <p>Non-destructive measurement of non-conductive coatings (paint, anodizing, plastic) on conductive substrates for QC and corrosion protection verification.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Best Applications for ECT:</strong>
                            <p>ECT excels where fast, surface-sensitive inspection is required on conductive materials—especially tubes, thin-wall components, and complex geometries where surface condition and material properties are critical to performance and safety.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request ECT Service</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/ect-equipment.jpg" alt="Eddy Current Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Modern eddy current instruments with multi-frequency and array probe capability</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">10,000+</span>
                            <span class="stat-label">Tubes Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Coverage Achieved</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Fast</span>
                            <span class="stat-label">Inspection Speed</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> ECT Operating Principle</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> AC current applied to probe coil generates magnetic field</li>
                            <li><strong>2.</strong> Magnetic field induces eddy currents in conductive material</li>
                            <li><strong>3.</strong> Eddy currents create opposing magnetic field</li>
                            <li><strong>4.</strong> Defects/variations disrupt eddy current flow</li>
                            <li><strong>5.</strong> Changes detected as impedance variations and analyzed</li>
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
                <span class="section-label">WHY CHOOSE ECT</span>
                <h2>Key Advantages of Eddy Current Testing</h2>
                <p>Speed, sensitivity, and versatility for surface inspection and material characterization</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>High Inspection Speed</h3>
                    <p>Automated tube inspection at high traverse rates and continuous surface scanning enable rapid coverage—critical for shutdown time optimization and large-volume production testing.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Excellent Surface Sensitivity</h3>
                    <p>Superior detection of tight surface cracks, shallow pitting, and near-surface discontinuities that other methods may miss—especially important for fatigue-critical components.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <h3>No Contact / No Couplant</h3>
                    <p>Electromagnetic coupling requires no physical contact or liquid couplant—reducing consumables, enabling inspection through thin coatings, and suitable for high-speed automated scanning.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-list-check"></i>
                    </div>
                    <h3>Multi-Function Capability</h3>
                    <p>Single method can detect defects, measure conductivity, verify coating thickness, and sort materials—providing comprehensive component characterization from one inspection.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-circle-nodes"></i>
                    </div>
                    <h3>Complex Geometry Access</h3>
                    <p>Small, flexible probes can inspect tubes, holes, fastener holes, complex contours, and hard-to-reach areas where other methods face access limitations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-gauge-simple-high"></i>
                    </div>
                    <h3>Immediate Results</h3>
                    <p>Real-time signal display and analysis enable instant accept/reject decisions, production line integration, and fast feedback to support rapid turnaround requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">ECT APPLICATIONS</span>
                <h2>Industries & Components We Inspect</h2>
                <p>Proven eddy current solutions across power generation, petrochemical, aerospace, and manufacturing sectors</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="tubes">Tube Inspection</button>
                    <button class="tab-btn" data-tab="surface">Surface Crack Detection</button>
                    <button class="tab-btn" data-tab="conductivity">Conductivity & Sorting</button>
                    <button class="tab-btn" data-tab="coating">Coating Thickness</button>
                </div>

                <div class="tabs-content">
                    <!-- Tube Inspection Tab -->
                    <div class="tab-panel active" id="tubes">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ect-tube-inspection.jpg" alt="Heat Exchanger Tube ECT">
                            </div>
                            <div class="tab-text">
                                <h3>Heat Exchanger & Condenser Tube Testing</h3>
                                <p>Industry-standard method for detecting pitting, erosion, corrosion, cracking, baffle wear, and wall loss in ferrous and non-ferrous tubing—supporting integrity assessment, plugging decisions, and remaining life evaluation.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Condenser tubes (power plant, refinery, marine)</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger tubes (shell & tube, feedwater heaters)</li>
                                    <li><i class="fas fa-check"></i> Boiler tubes and economizer tubes (ferritic materials)</li>
                                    <li><i class="fas fa-check"></i> Air cooler and fin-fan tubes</li>
                                    <li><i class="fas fa-check"></i> Pitting, erosion, corrosion, and wall thinning detection</li>
                                    <li><i class="fas fa-check"></i> Baffle cuts, support wear, and fretting damage</li>
                                    <li><i class="fas fa-check"></i> Plugging and re-tubing prioritization support</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Power Plant Condenser:</strong> Complete ECT survey of 5,000+ tubes during scheduled outage—identifying degraded tubes for plugging, verifying remaining bundle integrity, and providing data for next inspection interval optimization. Fast automated inspection minimized critical path impact.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E309</span>
                                    <span class="standard-tag">ASME Sec V, Art 8</span>
                                    <span class="standard-tag">EPRI Guidelines</span>
                                    <span class="standard-tag">TEMA Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surface Crack Detection Tab -->
                    <div class="tab-panel" id="surface">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ect-surface-inspection.jpg" alt="Surface Crack Detection ECT">
                            </div>
                            <div class="tab-text">
                                <h3>Surface Crack Detection & Component Screening</h3>
                                <p>High-sensitivity detection of surface-breaking cracks, stress corrosion cracking (SCC), fatigue cracks, heat treat cracks, and grinding damage on aerospace, automotive, and industrial components.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aircraft structural components and fastener holes</li>
                                    <li><i class="fas fa-check"></i> Turbine blade roots and attachment areas</li>
                                    <li><i class="fas fa-check"></i> Landing gear and critical flight hardware</li>
                                    <li><i class="fas fa-check"></i> Automotive crankshafts, connecting rods, axles</li>
                                    <li><i class="fas fa-check"></i> Welds and heat-affected zones (HAZ) in conductive materials</li>
                                    <li><i class="fas fa-check"></i> Machined surfaces for grinding and handling damage</li>
                                    <li><i class="fas fa-check"></i> In-service component screening and fleet monitoring</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Aerospace Component Screening:</strong> ECT inspection of turbine blade dovetail slots for fatigue cracks—high-frequency surface probes provide superior crack detection sensitivity compared to visual or penetrant testing, supporting safety-critical acceptance decisions.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E1444</span>
                                    <span class="standard-tag">ASTM E566</span>
                                    <span class="standard-tag">AMS 2641</span>
                                    <span class="standard-tag">MIL-STD-1949</span>
                                    <span class="standard-tag">ASME Sec V, Art 8</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conductivity & Sorting Tab -->
                    <div class="tab-panel" id="conductivity">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ect-conductivity.jpg" alt="Conductivity Measurement ECT">
                            </div>
                            <div class="tab-text">
                                <h3>Conductivity Measurement & Material Sorting</h3>
                                <p>Non-destructive electrical conductivity measurement to verify alloy composition, detect heat treatment variations, identify mixed materials, and support quality control and material verification programs.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Alloy verification and material identification</li>
                                    <li><i class="fas fa-check"></i> Heat treatment validation (hardness correlation)</li>
                                    <li><i class="fas fa-check"></i> Mixed material sorting (aluminum alloys, copper alloys)</li>
                                    <li><i class="fas fa-check"></i> Incoming material acceptance inspection</li>
                                    <li><i class="fas fa-check"></i> Production QC and process monitoring</li>
                                    <li><i class="fas fa-check"></i> Detection of over-aging, under-aging, or improper heat treatment</li>
                                    <li><i class="fas fa-check"></i> Scrap sorting and recycling support</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Aluminum Alloy Verification:</strong> Conductivity testing to distinguish between 6061-T6 and 7075-T6 aluminum components in production—preventing mix-ups and ensuring correct material placement in safety-critical aerospace and automotive assemblies.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E1004</span>
                                    <span class="standard-tag">ASTM B193</span>
                                    <span class="standard-tag">ISO 3231</span>
                                    <span class="standard-tag">AMS-STD-2154</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Coating Thickness Tab -->
                    <div class="tab-panel" id="coating">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ect-coating.jpg" alt="Coating Thickness Measurement">
                            </div>
                            <div class="tab-text">
                                <h3>Non-Conductive Coating Thickness Measurement</h3>
                                <p>Accurate, non-destructive measurement of paint, anodizing, plastic coatings, and other non-conductive layers on conductive substrates for quality control, specification compliance, and corrosion protection verification.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Paint and powder coating thickness on steel/aluminum</li>
                                    <li><i class="fas fa-check"></i> Anodized coatings on aluminum components</li>
                                    <li><i class="fas fa-check"></i> Plastic and polymer coatings on metal substrates</li>
                                    <li><i class="fas fa-check"></i> Galvanizing and zinc coating verification</li>
                                    <li><i class="fas fa-check"></i> Production QC and in-process monitoring</li>
                                    <li><i class="fas fa-check"></i> Specification compliance documentation</li>
                                    <li><i class="fas fa-check"></i> Non-destructive alternative to destructive gauge methods</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Automotive Paint QC:</strong> High-speed eddy current coating thickness measurement on production line—verifying paint thickness compliance with specifications, detecting under/over-application, and supporting corrosion warranty requirements without production delays.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM B244</span>
                                    <span class="standard-tag">ASTM D7091</span>
                                    <span class="standard-tag">ISO 2360</span>
                                    <span class="standard-tag">ISO 21968</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ECT TECHNIQUES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">ECT CAPABILITIES & SERVICES</span>
                <h2>Our Eddy Current Testing Solutions</h2>
                <p>Comprehensive ECT services with advanced instrumentation and application-specific probe technology</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Tube Inspection Services</h3>
                    <p>Complete heat exchanger and condenser tube inspection with automated data acquisition, digital recording, and clear tube-by-tube reporting.</p>
                    <ul>
                        <li>Multi-frequency instruments for ferrous/non-ferrous tubes</li>
                        <li>Bobbin coil, absolute, and differential probes</li>
                        <li>High-speed automated scanning systems</li>
                        <li>C-scan strip charts and digital data packages</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Surface & Array Probe Inspection</h3>
                    <p>High-resolution surface crack detection using pencil probes, sliding probes, and array technology for complex geometries and large-area coverage.</p>
                    <ul>
                        <li>Pencil probes for spot checks and manual scanning</li>
                        <li>Sliding/surface probes for automated scanning</li>
                        <li>Array probes for wide-area coverage</li>
                        <li>Specialized probes for fastener holes and complex contours</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Conductivity Measurement</h3>
                    <p>Precision electrical conductivity testing for alloy verification, heat treatment validation, and material sorting with calibrated instruments and traceable standards.</p>
                    <ul>
                        <li>Digital conductivity meters (%IACS measurement)</li>
                        <li>Calibrated to NIST-traceable standards</li>
                        <li>Spot measurements and production screening</li>
                        <li>Material certificates and test reports</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Coating Thickness Verification</h3>
                    <p>Non-destructive coating thickness measurement for production QC, specification compliance, and acceptance testing.</p>
                    <ul>
                        <li>Paint and powder coating thickness gauges</li>
                        <li>Anodizing and conversion coating verification</li>
                        <li>Production line integration options</li>
                        <li>Statistical reporting and trend analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Field & Laboratory Services</h3>
                    <p>Flexible service delivery to match your project requirements—on-site inspection, laboratory examination, or equipment rental with training support.</p>
                    <ul>
                        <li>On-site heat exchanger and component inspection</li>
                        <li>Laboratory ECT examination and analysis</li>
                        <li>Shutdown and turnaround support</li>
                        <li>Equipment rental with operator training</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Procedure Development & Training</h3>
                    <p>Custom ECT procedures, technique validation, and personnel training programs tailored to your components, acceptance criteria, and quality requirements.</p>
                    <ul>
                        <li>Application-specific procedure development</li>
                        <li>Reference standard design and fabrication support</li>
                        <li>Operator training (Level I / Level II)</li>
                        <li>Equipment selection consultation</li>
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
                    <span class="section-label">ADVANCED INSTRUMENTATION</span>
                    <h2>State-of-the-Art ECT Equipment</h2>
                    <p>We use modern multi-frequency eddy current instruments, application-specific probes, and automated scanning systems to deliver accurate, repeatable, and efficient inspections.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Multi-Frequency Eddy Current Instruments</h4>
                                <p>Digital flaw detectors with selectable frequencies, multi-channel capability, impedance plane display, data logging, and advanced signal processing for tube and surface inspection.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-circle-notch"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Tube Inspection Probes</h4>
                                <p>Comprehensive inventory of bobbin coils, absolute/differential probes, rotating pancake coils (RPC), and array probes for ferrous and non-ferrous tubes (OD range dependent on application).</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-pen"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Surface & Array Probes</h4>
                                <p>High-frequency pencil probes, sliding probes, spot probes, and eddy current array (ECA) technology for surface crack detection and large-area coverage on flat and contoured surfaces.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Automated Scanning Systems</h4>
                                <p>Motorized tube insertion systems with encoder-driven data acquisition for consistent, high-speed inspection and reliable digital records—optimized for heat exchanger surveys.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Quality Assurance & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/30/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/31/100/50" alt="ASNT Certified">
                            <img src="https://picsum.photos/id/32/100/50" alt="ASTM Compliant">
                            <img src="https://picsum.photos/id/33/100/50" alt="Client Approvals">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/ect-inspection-work.jpg" alt="ECT Tube Inspection">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch ECT Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Multi-Frequency Capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Data Recording</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Impedance Plane Analysis</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Automated Scanning</span>
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
                <h2>Your ECT Inspection Partner</h2>
                <p>Experienced technicians, proven methodology, and reliable results for critical component assessments</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Certified ECT Technicians</h3>
                    <p>ASNT Level II and Level III certified personnel with specialized training in tube inspection, surface crack detection, and advanced ECT applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Comprehensive Equipment Fleet</h3>
                    <p>Modern multi-frequency instruments, extensive probe inventory, and automated scanning systems to handle diverse ECT applications and material types.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Clear Reporting</h3>
                    <p>Detailed inspection reports with tube maps, C-scan strip charts, indication summaries, plugging recommendations, and digital data packages for asset records.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Shutdown Efficiency</h3>
                    <p>Fast mobilization, high-speed automated inspection, and rapid reporting to minimize critical path impact during planned outages and turnarounds.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Code & Standard Compliance</h3>
                    <p>Procedures and practices aligned with ASTM E309, ASME Sec V Art 8, EPRI guidelines, and client-specific acceptance criteria with full documentation.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Technical Support</h3>
                    <p>Engineering consultation, data interpretation assistance, and follow-up recommendations to help translate ECT findings into actionable maintenance decisions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>ECT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What materials can be tested with eddy current?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Eddy current testing works on electrically conductive materials including all metals and some graphite/carbon composites. Common applications include aluminum, copper, titanium, stainless steel, carbon steel, nickel alloys, and their alloys. ECT cannot be used on non-conductive materials such as plastics, ceramics, or glass (though it can measure non-conductive coatings on conductive substrates).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between ECT and ultrasonic tube testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ECT uses electromagnetic induction and is excellent for fast detection of surface/near-surface defects, pitting, and erosion—particularly in non-ferrous tubes. Ultrasonic testing (IRIS, RFEC) uses sound waves and provides better through-wall sizing and detection of internal/external defects in thicker-wall tubes. ECT is typically faster; UT provides more dimensional information. We often recommend ECT for screening and UT for detailed sizing where needed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How deep can eddy current penetrate?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Eddy current penetration (depth of sensitivity) depends on test frequency, material conductivity, and magnetic permeability. Depth of penetration is typically defined as one "standard depth" where signal strength drops to ~37% of surface value. Lower frequencies penetrate deeper but with lower resolution; higher frequencies provide better surface sensitivity but less penetration. Typical industrial ECT focuses on surface to ~3-5 mm depth depending on application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can ECT detect internal defects in tubes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—when the probe is inside the tube, ECT can detect defects on the inner surface and near-surface/mid-wall region. Detection capability depends on tube wall thickness, defect depth, defect orientation, and inspection frequency. For through-wall sizing and detection of small defects on the opposite wall (OD when inspecting from ID), complementary methods such as IRIS or RFEC may provide better characterization.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does a heat exchanger ECT inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection time depends on tube count, tube length, access conditions, and data review requirements. Automated ECT scanning is very fast—typically 1-3 meters per second. A 1,000-tube bundle with 6-meter tubes might be scanned in 1-2 shifts. Mobilization, setup, calibration, and reporting add time. We provide schedule estimates during planning once exchanger details and access are confirmed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide tube plugging recommendations?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—our inspection reports include tube-by-tube condition summaries with recommended actions: acceptable, monitor, plug, or further investigate. Recommendations are based on indication amplitude/phase, location (tube ends, baffles, mid-span), defect type, and applicable acceptance criteria (client specs, TEMA standards, or EPRI guidelines). Final plugging decisions remain with the client/engineer based on operational risk tolerance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can ECT measure coating thickness on aluminum?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—eddy current instruments can measure non-conductive coatings (anodizing, paint, powder coating, plastic) on aluminum and other non-ferrous metals. The method measures lift-off (probe-to-metal distance) which correlates to coating thickness. For ferrous substrates with non-magnetic coatings, magnetic coating thickness gauges are typically used instead. We select the appropriate method based on substrate material.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What standards govern eddy current testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary standards include ASTM E309 (practice for ECT), ASME Section V Article 8 (code requirements), ASTM E1444 (magnetic particle and ECT), ASTM E566 (electromagnetic sorting), and various aerospace specifications (AMS, MIL-STD). Industry-specific guidelines such as EPRI (power generation) and TEMA (heat exchangers) also apply. We align procedures with applicable codes and client specifications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Fast, Reliable Eddy Current Testing?</h2>
                <p>Contact us for tube inspection, surface crack detection, or custom ECT solutions</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Rapid Mobilization</span>
                    <span><i class="fas fa-check"></i> High-Speed Inspection</span>
                    <span><i class="fas fa-check"></i> Clear Reporting</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT & Inspection Services</h2>
                <p>Comprehensive solutions for heat exchangers, tubes, and surface inspection</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing (UT)</h3>
                    <p>Volumetric inspection and tube testing (IRIS, RFEC) for thickness and defect sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>Surface examination and general condition assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/pt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3>Liquid Penetrant Testing</h3>
                    <p>Surface crack detection on non-magnetic materials</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>RVI / Videoscope</h3>
                    <p>Internal visual inspection for heat exchanger tubes and vessels</p>
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