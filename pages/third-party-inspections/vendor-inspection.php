<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Vendor Inspection & Expediting Services | Third Party Supplier Quality Assurance | Alpha Sonix NDT Solutions";
$meta_description = "Professional vendor inspection and expediting services including source inspection, supplier quality assurance, equipment expediting, and third party verification for purchased equipment and materials.";
$meta_keywords = "vendor inspection, source inspection, supplier quality assurance, expediting services, third party inspection, purchase order expediting, equipment inspection, vendor surveillance";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/vendor-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/vendor-inspection-og.jpg">
    
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
        "serviceType": "Vendor Inspection & Expediting Services",
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
        "description": "Professional vendor inspection and expediting services ensuring supplier quality, on-time delivery, and code compliance for purchased equipment and materials."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/vendor/vendor-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Vendor Inspection & Expediting</span>
                </div>
                <h1 class="page-title">Vendor Inspection & Expediting Services</h1>
                <p class="page-subtitle">Independent third-party source inspection, supplier quality assurance, and purchase order expediting ensuring equipment quality and on-time delivery</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-check-double"></i> Source Inspection</span>
                    <span class="badge"><i class="fas fa-clock"></i> Expediting Services</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Supplier Quality Assurance</span>
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
                    <h3>Source Inspection</h3>
                    <p>Independent third-party inspection at vendor facilities verifying equipment quality, code compliance, and purchase order requirements before shipment.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Expediting Services</h3>
                    <p>Proactive monitoring of vendor production schedules, milestone tracking, and intervention to ensure on-time delivery of critical equipment.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Supplier Quality Assurance</h3>
                    <p>Comprehensive vendor assessment, quality surveillance, and performance monitoring ensuring supplier capability and consistent quality.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Documentation & Release</h3>
                    <p>Complete inspection reports, test certificates, and release recommendations for equipment shipment and final acceptance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS VENDOR INSPECTION & EXPEDITING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">SUPPLIER QUALITY SERVICES</span>
                    <h2>What are Vendor Inspection & Expediting Services?</h2>
                    <p class="lead">Vendor inspection and expediting services provide independent third-party oversight of supplier quality, production schedules, and code compliance throughout the equipment manufacturing process.</p>
                    
                    <p>Purchasing critical equipment from vendors involves significant investment and risk. Quality issues discovered after shipment cause costly delays, rework, and project schedule impacts. Late deliveries disrupt construction schedules and increase project costs.</p>

                    <p>Our vendor inspection and expediting services provide independent verification of equipment quality, code compliance, and production progress. We act as your eyes and ears at supplier facilities, ensuring purchased equipment meets specifications and delivery dates are achieved.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Source Inspection</strong>
                                <p>Independent inspection at vendor facilities including raw material verification, in-process inspection, final testing, and release for shipment.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Production Expediting</strong>
                                <p>Active monitoring of purchase orders, milestone tracking, and proactive intervention to identify and resolve schedule delays before they impact delivery.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Supplier Quality Surveillance</strong>
                                <p>Ongoing monitoring of supplier quality performance, manufacturing processes, and quality management system effectiveness.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Documentation & Compliance</strong>
                                <p>Review of quality records, test certificates, and compliance documentation ensuring complete traceability and regulatory acceptance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Protect Your Investment:</strong>
                            <p>Poor vendor quality causes average project delays of 4-8 weeks with rework costs of $100K-2M per major equipment item. Independent source inspection reduces quality-related delays by 80-90% and prevents costly rework after delivery.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Services</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/vendor/source-inspection.jpg" alt="Source Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Independent source inspection at vendor manufacturing facility</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Vendor Inspections</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Purchase Orders</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">On-Time Delivery</span>
                        </div>
                    </div>
                    
                    <div class="vendor-benefits">
                        <h4><i class="fas fa-star"></i> Service Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Quality assurance</li>
                            <li><i class="fas fa-check"></i> On-time delivery</li>
                            <li><i class="fas fa-check"></i> Cost avoidance</li>
                            <li><i class="fas fa-check"></i> Code compliance</li>
                            <li><i class="fas fa-check"></i> Risk reduction</li>
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
                <span class="section-label">WHY THIRD PARTY VENDOR INSPECTION</span>
                <h2>Key Advantages of Vendor Inspection & Expediting</h2>
                <p>Protect your project investment and ensure supplier performance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>Independent verification ensures purchased equipment meets specifications, codes, and quality requirements before shipment—preventing costly rework and delays.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Schedule Protection</h3>
                    <p>Proactive expediting identifies production delays early, enabling corrective action before late delivery impacts project schedules and construction milestones.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Avoidance</h3>
                    <p>Prevent expensive field rework, replacement equipment costs, and schedule delay penalties through thorough source inspection and quality verification.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Documentation Assurance</h3>
                    <p>Complete review of quality records, material certifications, and test reports ensures regulatory compliance and audit-ready documentation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Supplier Performance Data</h3>
                    <p>Comprehensive vendor evaluation and performance tracking supports supplier selection, qualification, and development programs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Independent Oversight</h3>
                    <p>Third-party inspection provides unbiased assessment of vendor quality and schedule performance, protecting your interests without internal resource demands.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">EQUIPMENT TYPES</span>
                <h2>Equipment & Materials We Inspect</h2>
                <p>Comprehensive vendor inspection services for all purchased equipment and materials</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pressure-equipment">Pressure Equipment</button>
                    <button class="tab-btn" data-tab="piping-valves">Piping & Valves</button>
                    <button class="tab-btn" data-tab="rotating-equipment">Rotating Equipment</button>
                    <button class="tab-btn" data-tab="structural-materials">Structural & Materials</button>
                </div>

                <div class="tabs-content">
                    <!-- Pressure Equipment Tab -->
                    <div class="tab-panel active" id="pressure-equipment">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/vendor/pressure-vessel-inspection.jpg" alt="Pressure Vessel Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessel & Boiler Inspection</h3>
                                <p>Comprehensive source inspection of pressure vessels, boilers, heat exchangers, and columns at vendor manufacturing facilities.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Raw material verification and NDE</li>
                                    <li><i class="fas fa-check"></i> Welding procedure and welder qualification review</li>
                                    <li><i class="fas fa-check"></i> Dimensional inspection and fit-up verification</li>
                                    <li><i class="fas fa-check"></i> NDT witness and review (RT, UT, MT, PT)</li>
                                    <li><i class="fas fa-check"></i> Hydrostatic test witnessing</li>
                                    <li><i class="fas fa-check"></i> Heat treatment verification</li>
                                    <li><i class="fas fa-check"></i> Final inspection and release for shipment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">ASME Section I</span>
                                    <span class="standard-tag">TEMA</span>
                                    <span class="standard-tag">API 510/660</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Piping & Valves Tab -->
                    <div class="tab-panel" id="piping-valves">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/vendor/pipe-valve-inspection.jpg" alt="Pipe and Valve Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pipe, Fittings & Valve Inspection</h3>
                                <p>Source inspection of piping components, valves, fittings, and flanges at manufacturer or distributor facilities.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Material certification verification</li>
                                    <li><i class="fas fa-check"></i> Dimensional inspection per ASME B16.5/B16.34</li>
                                    <li><i class="fas fa-check"></i> Valve pressure testing witness</li>
                                    <li><i class="fas fa-check"></i> NDE review and verification</li>
                                    <li><i class="fas fa-check"></i> Thread and connection inspection</li>
                                    <li><i class="fas fa-check"></i> Coating and marking verification</li>
                                    <li><i class="fas fa-check"></i> Positive material identification (PMI)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B16.5/34</span>
                                    <span class="standard-tag">API 598/6D</span>
                                    <span class="standard-tag">MSS SP</span>
                                    <span class="standard-tag">ISO 9001</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rotating Equipment Tab -->
                    <div class="tab-panel" id="rotating-equipment">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/vendor/rotating-equipment.jpg" alt="Rotating Equipment Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pumps, Compressors & Rotating Equipment</h3>
                                <p>Source inspection of pumps, compressors, turbines, blowers, and other rotating machinery.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Casting and forging inspection</li>
                                    <li><i class="fas fa-check"></i> Dimensional and fit-up verification</li>
                                    <li><i class="fas fa-check"></i> Performance test witnessing</li>
                                    <li><i class="fas fa-check"></i> Mechanical run test witnessing</li>
                                    <li><i class="fas fa-check"></i> NDT review (MT, PT, UT)</li>
                                    <li><i class="fas fa-check"></i> Balance verification</li>
                                    <li><i class="fas fa-check"></i> Final assembly and release inspection</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 610/617/618</span>
                                    <span class="standard-tag">ANSI/HI</span>
                                    <span class="standard-tag">ASME B73</span>
                                    <span class="standard-tag">ISO 13709</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Structural & Materials Tab -->
                    <div class="tab-panel" id="structural-materials">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/vendor/structural-inspection.jpg" alt="Structural Material Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Structural Steel & Bulk Materials</h3>
                                <p>Source inspection of structural steel, reinforcing bars, plates, and bulk construction materials.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Material certification and traceability</li>
                                    <li><i class="fas fa-check"></i> Dimensional and straightness verification</li>
                                    <li><i class="fas fa-check"></i> Weld inspection at fabrication shops</li>
                                    <li><i class="fas fa-check"></i> Coating and surface finish inspection</li>
                                    <li><i class="fas fa-check"></i> Marking and identification verification</li>
                                    <li><i class="fas fa-check"></i> Packaging and shipping inspection</li>
                                    <li><i class="fas fa-check"></i> Positive material identification (PMI)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A6/A36</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">ISO 9001</span>
                                    <span class="standard-tag">Client Specifications</span>
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
                <h2>Our Vendor Inspection & Expediting Capabilities</h2>
                <p>Complete source inspection and supply chain quality services for purchased equipment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Source Inspection</h3>
                    <p>Independent third-party inspection at vendor facilities throughout the manufacturing process from raw material receipt to final release.</p>
                    <ul>
                        <li>Raw material verification and NDE</li>
                        <li>In-process and final dimensional inspection</li>
                        <li>NDT witnessing and review</li>
                        <li>Pressure and performance test witnessing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Production Expediting</h3>
                    <p>Proactive monitoring of vendor production schedules to identify and resolve delays before they impact delivery dates.</p>
                    <ul>
                        <li>Purchase order milestone tracking</li>
                        <li>Production schedule review</li>
                        <li>Material procurement verification</li>
                        <li>Weekly progress reporting</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Supplier Quality Surveillance</h3>
                    <p>Ongoing assessment and monitoring of vendor quality management systems and manufacturing capabilities.</p>
                    <ul>
                        <li>Vendor qualification audits</li>
                        <li>Quality system assessment</li>
                        <li>Process capability evaluation</li>
                        <li>Performance trending</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Documentation & Compliance</h3>
                    <p>Complete review and verification of quality records, test certificates, and compliance documentation.</p>
                    <ul>
                        <li>Material test certificate review</li>
                        <li>NDT procedure and report review</li>
                        <li>Weld procedure and welder qualification review</li>
                        <li>Final documentation package assembly</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Witness & Hold Point Management</h3>
                    <p>Professional witnessing of critical manufacturing and testing hold points as defined in inspection test plans.</p>
                    <ul>
                        <li>ITP hold point witness</li>
                        <li>Critical process observation</li>
                        <li>Test witnessing and verification</li>
                        <li>Real-time reporting</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Release & Shipment Inspection</h3>
                    <p>Final inspection prior to shipment ensuring equipment meets all requirements and is properly prepared for transport.</p>
                    <ul>
                        <li>Final dimensional verification</li>
                        <li>Preservation and coating inspection</li>
                        <li>Packaging and crating verification</li>
                        <li>Shipping document review</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== SERVICE WORKFLOW ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">SERVICE PROCESS</span>
                    <h2>Our Vendor Inspection & Expediting Workflow</h2>
                    <p>Systematic approach ensuring supplier quality, schedule adherence, and complete documentation for purchased equipment.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>PO Review & Planning</h4>
                                <p>Review of purchase order requirements, specifications, codes, and inspection test plan development.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Vendor Assessment & Kickoff</h4>
                                <p>Initial vendor meeting, quality system review, and production schedule alignment.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>In-Process & Final Inspection</h4>
                                <p>Hold point witnessing, NDT verification, testing observation, and final release inspection.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation & Release</h4>
                                <p>Complete inspection reports, certificate compilation, and release recommendation for shipment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Inspection Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/api-510-cert.png" alt="API 510">
                            <img src="/www/assets/images/certs/api-570-cert.png" alt="API 570">
                            <img src="/www/assets/images/certs/asnt-cert.png" alt="ASNT">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/vendor/service-workflow.jpg" alt="Service Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Service Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>API/ASME Certified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Nationwide Coverage</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Real-Time Reporting</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Complete Documentation</span>
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
                <h2>Your Trusted Vendor Inspection Partner</h2>
                <p>Certified inspectors, nationwide presence, and proven supplier quality expertise</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified Inspectors</h3>
                    <p>API 510/570, ASNT Level II/III, and AWS CWI certified inspectors with extensive vendor inspection experience.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Pan-India Coverage</h3>
                    <p>Inspection teams located across major industrial centers providing rapid response to vendor facilities nationwide.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>500+ vendor inspections and 1,000+ purchase orders managed across refining, power, and infrastructure projects.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Rapid Mobilization</h3>
                    <p>Quick response to inspection requests with typical mobilization within 24-48 hours of purchase order receipt.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Independent & Impartial</h3>
                    <p>Third-party status ensures unbiased assessment of vendor quality and schedule performance, protecting client interests.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive inspection reports, digital photo records, and certificate compilation for regulatory and client acceptance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Vendor Inspection & Expediting Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between source inspection and expediting?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Source inspection focuses on quality verification—ensuring equipment meets specifications and codes. Expediting focuses on schedule monitoring—tracking production progress and resolving delays. Both services are often provided together for comprehensive vendor oversight.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When should source inspection be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Source inspection should be performed at critical hold points defined in the Inspection Test Plan (ITP) including raw material receipt, in-process inspection, NDT witness, pressure testing, and final release. We help develop ITPs based on equipment criticality and code requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What equipment do you inspect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We inspect pressure vessels, heat exchangers, boilers, piping components, valves, pumps, compressors, structural steel, and virtually all purchased equipment and materials for industrial projects.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide expediting for critical path equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide proactive expediting for critical path equipment including weekly schedule reviews, milestone tracking, and intervention to resolve delays before they impact project schedules.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive inspection reports including findings, photographs, NDT review, test data, and release recommendation. We also assist with final documentation package compilation for client acceptance and regulatory compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you inspect equipment at multiple vendor locations?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our nationwide network of inspectors enables efficient coverage of multiple vendor locations simultaneously, providing coordinated inspection services for complex projects.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What codes and standards do you inspect to?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We inspect to ASME, API, ASTM, AWS, ISO, and client-specific specifications. Our inspectors are certified to applicable codes for each equipment type.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How quickly can you mobilize for an inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We typically mobilize within 24-48 hours of purchase order receipt. Emergency inspections can be arranged within 24 hours when required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Protect Your Project Investment</h2>
                <p>Contact our vendor inspection specialists for source inspection and expediting services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:vendor@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Vendor Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> API/ASME Certified</span>
                    <span><i class="fas fa-check"></i> Nationwide Coverage</span>
                    <span><i class="fas fa-check"></i> Rapid Mobilization</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Quality & Inspection Services</h2>
                <p>Comprehensive quality assurance and inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/third-party-inspection/asset-integrity-rbi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Asset Integrity & RBI</h3>
                    <p>Risk-based inspection planning and integrity management</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/pipeline-process-equipment-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pipeline & Process Equipment</h3>
                    <p>Mechanical integrity and corrosion monitoring</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/welding-fabrication-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Welding & Fabrication</h3>
                    <p>Certified weld inspection and quality assurance</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/mechanical-structural-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Mechanical & Structural</h3>
                    <p>Structural and mechanical equipment assessment</p>
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