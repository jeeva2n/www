<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Welding & Fabrication Inspection Services | Weld Quality Control | Alpha Sonix NDT Solutions";
$meta_description = "Professional welding and fabrication inspection services. Certified welding inspectors (CWI), welder qualification testing, procedure qualification, and comprehensive weld quality control for all welding processes.";
$meta_keywords = "welding inspection, fabrication inspection, CWI inspector, welder qualification, welding procedure qualification, WPS, PQR, weld quality control, AWS certified, ASME welding inspection";
$canonical_url = "https://alphasonix.com/pages/third-party-inspections/welding-fabrication-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/welding-fabrication-og.jpg">
    
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
        "serviceType": "Welding & Fabrication Inspection Services",
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
        "description": "Professional welding and fabrication inspection services ensuring weld quality, code compliance, and structural integrity for industrial and construction applications."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/welding/welding-inspection1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/third-party-inspections.php">Third-Party Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Welding & Fabrication Inspection</span>
                </div>
                <h1 class="page-title">Welding & Fabrication Inspection</h1>
                <p class="page-subtitle">Comprehensive weld quality control and fabrication inspection services ensuring code compliance and structural integrity</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> AWS Certified Inspectors</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Code Compliance</span>
                    <span class="badge"><i class="fas fa-tools"></i> All Welding Processes</span>
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
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Weld Inspection</h3>
                    <p>Comprehensive visual and NDT examination of welds to ensure quality, code compliance, and structural integrity for critical applications.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Procedure Qualification</h3>
                    <p>Development and qualification of welding procedure specifications (WPS) and procedure qualification records (PQR) per applicable codes.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Welder Qualification</h3>
                    <p>Testing and qualification of welders and welding operators to ensure competency and compliance with code requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Fabrication QC</h3>
                    <p>Complete quality control services for fabrication shops ensuring compliance with specifications, drawings, and industry standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS WELDING & FABRICATION INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">WELD QUALITY ASSURANCE</span>
                    <h2>What is Welding & Fabrication Inspection?</h2>
                    <p class="lead">Welding and fabrication inspection is a comprehensive quality control service that ensures welded joints and fabricated assemblies meet specified requirements, code standards, and engineering specifications.</p>
                    
                    <p>Our certified welding inspectors (CWI) and fabrication specialists provide expert oversight throughout the welding and fabrication process—from procedure development and welder qualification through final inspection and documentation. We ensure compliance with AWS, ASME, API, ISO, and other applicable codes while maintaining quality and safety standards.</p>

                    <p>Professional welding inspection is essential for preventing weld defects, ensuring structural integrity, maintaining code compliance, and providing documented quality assurance for critical applications in pressure vessels, piping systems, structural steel, and industrial fabrication.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Visual Weld Inspection</strong>
                                <p>Expert visual examination of welds for surface discontinuities, dimensional accuracy, and compliance with acceptance criteria.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>NDT Coordination</strong>
                                <p>Comprehensive non-destructive testing oversight including RT, UT, MT, and PT to detect internal and surface defects.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>WPS/PQR Development</strong>
                                <p>Preparation and qualification of welding procedures ensuring optimal weld quality and code compliance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Quality Documentation</strong>
                                <p>Complete documentation including inspection reports, weld maps, material certificates, and compliance records.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-certificate"></i>
                        <div>
                            <strong>Certified Expertise:</strong>
                            <p>Our AWS Certified Welding Inspectors (CWI) and ASME welding specialists combine code knowledge with practical experience to ensure your welds meet the highest quality standards.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#services" class="btn btn-secondary">View Services</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/welding/weld-inspection-process.jpg" alt="Weld Inspection Process">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional weld inspection ensuring quality and code compliance</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">5000+</span>
                            <span class="stat-label">Welds Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Code Compliance</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                    </div>
                    
                    <div class="welding-benefits">
                        <h4><i class="fas fa-star"></i> Inspection Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Quality assurance confidence</li>
                            <li><i class="fas fa-check"></i> Code compliance verification</li>
                            <li><i class="fas fa-check"></i> Reduced rework costs</li>
                            <li><i class="fas fa-check"></i> Structural integrity assurance</li>
                            <li><i class="fas fa-check"></i> Complete documentation</li>
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
                <span class="section-label">WHY WELDING INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Welding Inspection</h2>
                <p>Ensure weld quality, code compliance, and structural integrity</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>Prevent weld defects and ensure structural integrity through systematic inspection and quality control throughout the welding process.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Ensure full compliance with AWS, ASME, API, and other applicable welding codes and standards for acceptance and certification.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Reduction</h3>
                    <p>Minimize rework, repairs, and rejections through early detection of problems and proper welding procedure control.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Documentation</h3>
                    <p>Provide complete traceability and documentation for regulatory compliance, quality audits, and project acceptance requirements.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Expert Guidance</h3>
                    <p>Benefit from experienced welding inspectors who can provide technical guidance and problem-solving support throughout fabrication.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Schedule Confidence</h3>
                    <p>Maintain project schedules through efficient inspection processes and prompt resolution of quality issues before they cause delays.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WELDING PROCESSES & APPLICATIONS</span>
                <h2>Welding Methods We Inspect</h2>
                <p>Comprehensive inspection services for all welding processes and industrial applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="smaw">SMAW / Stick</button>
                    <button class="tab-btn" data-tab="gmaw">GMAW / MIG</button>
                    <button class="tab-btn" data-tab="gtaw">GTAW / TIG</button>
                    <button class="tab-btn" data-tab="advanced">Advanced Processes</button>
                </div>

                <div class="tabs-content">
                    <!-- SMAW Tab -->
                    <div class="tab-panel active" id="smaw">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/welding/smaw-welding.jpg" alt="SMAW Welding Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Shielded Metal Arc Welding (SMAW/Stick)</h3>
                                <p>Comprehensive inspection services for SMAW processes used in structural steel, pipeline, and heavy fabrication applications.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Structural steel welding inspection</li>
                                    <li><i class="fas fa-check"></i> Pipeline girth weld inspection</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel and boiler welds</li>
                                    <li><i class="fas fa-check"></i> Field welding quality control</li>
                                    <li><i class="fas fa-check"></i> Multi-pass weld examination</li>
                                    <li><i class="fas fa-check"></i> Root pass and hot pass inspection</li>
                                    <li><i class="fas fa-check"></i> Final cap and cosmetic inspection</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">ASME Section IX</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ISO 9606</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- GMAW Tab -->
                    <div class="tab-panel" id="gmaw">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/welding/gmaw-welding.jpg" alt="GMAW Welding Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Gas Metal Arc Welding (GMAW/MIG)</h3>
                                <p>Expert inspection of GMAW processes for automotive, manufacturing, and industrial fabrication with focus on productivity and quality.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Automotive and manufacturing welds</li>
                                    <li><i class="fas fa-check"></i> Thin sheet metal fabrication</li>
                                    <li><i class="fas fa-check"></i> Aluminum and stainless steel welds</li>
                                    <li><i class="fas fa-check"></i> Robotic welding quality control</li>
                                    <li><i class="fas fa-check"></i> High-production welding inspection</li>
                                    <li><i class="fas fa-check"></i> Transfer mode verification (spray, pulse, short-circuit)</li>
                                    <li><i class="fas fa-check"></i> Gas shielding and wire feed inspection</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.2</span>
                                    <span class="standard-tag">ISO 15614</span>
                                    <span class="standard-tag">ASME Section IX</span>
                                    <span class="standard-tag">EN 1090</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- GTAW Tab -->
                    <div class="tab-panel" id="gtaw">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/welding/gtaw-welding.jpg" alt="GTAW Welding Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Gas Tungsten Arc Welding (GTAW/TIG)</h3>
                                <p>Precision inspection of GTAW processes for critical applications requiring high quality and excellent weld integrity.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Tube and pipe root pass inspection</li>
                                    <li><i class="fas fa-check"></i> Stainless steel and exotic alloys</li>
                                    <li><i class="fas fa-check"></i> Aerospace and nuclear quality welds</li>
                                    <li><i class="fas fa-check"></i> Thin wall pressure vessel welds</li>
                                    <li><i class="fas fa-check"></i> Orbital welding system inspection</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger tube-to-tubesheet welds</li>
                                    <li><i class="fas fa-check"></i> Critical root pass and backing gas verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">ASME Section IX</span>
                                    <span class="standard-tag">AWS D17.1</span>
                                    <span class="standard-tag">ASME BPE</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advanced Processes Tab -->
                    <div class="tab-panel" id="advanced">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/welding/advanced-welding.jpg" alt="Advanced Welding Processes">
                            </div>
                            <div class="tab-text">
                                <h3>Advanced Welding Processes</h3>
                                <p>Specialized inspection for advanced welding technologies including SAW, FCAW, and automated welding systems.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Submerged Arc Welding (SAW) inspection</li>
                                    <li><i class="fas fa-check"></i> Flux-Cored Arc Welding (FCAW)</li>
                                    <li><i class="fas fa-check"></i> Automated and robotic welding systems</li>
                                    <li><i class="fas fa-check"></i> Laser and electron beam welding</li>
                                    <li><i class="fas fa-check"></i> Friction stir welding (FSW)</li>
                                    <li><i class="fas fa-check"></i> Resistance welding and spot welding</li>
                                    <li><i class="fas fa-check"></i> Narrow gap and tandem welding</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS A5 Series</span>
                                    <span class="standard-tag">ISO 14555</span>
                                    <span class="standard-tag">ASME Section IX</span>
                                    <span class="standard-tag">Specific Process Standards</span>
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
                <span class="section-label">COMPREHENSIVE INSPECTION SERVICES</span>
                <h2>Our Welding & Fabrication Services</h2>
                <p>Complete quality control from procedure development to final inspection and certification</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Visual Weld Inspection</h3>
                    <p>Comprehensive visual examination of welds per AWS D1.1, ASME, and API standards for surface quality and dimensional compliance.</p>
                    <ul>
                        <li>Surface discontinuity detection</li>
                        <li>Dimensional verification</li>
                        <li>Weld profile and reinforcement check</li>
                        <li>Acceptance criteria application</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>WPS/PQR Development</h3>
                    <p>Preparation and qualification of welding procedures ensuring optimal quality and compliance with applicable codes.</p>
                    <ul>
                        <li>Welding Procedure Specification (WPS)</li>
                        <li>Procedure Qualification Record (PQR)</li>
                        <li>Essential variable management</li>
                        <li>Code compliance verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Welder Qualification Testing</h3>
                    <p>Complete welder and welding operator qualification per AWS, ASME, and API requirements with documented results.</p>
                    <ul>
                        <li>Welder performance testing</li>
                        <li>Visual and NDT examination</li>
                        <li>Qualification documentation</li>
                        <li>Certification issuance</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>NDT Coordination</h3>
                    <p>Comprehensive oversight of non-destructive testing including radiography, ultrasonic, magnetic particle, and penetrant testing.</p>
                    <ul>
                        <li>RT, UT, MT, PT coordination</li>
                        <li>NDT procedure review</li>
                        <li>Results interpretation</li>
                        <li>Acceptance/rejection determination</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Fabrication Shop Inspection</h3>
                    <p>On-site quality control at fabrication facilities ensuring compliance with drawings, specifications, and standards.</p>
                    <ul>
                        <li>Material verification</li>
                        <li>Fit-up inspection</li>
                        <li>In-process inspection</li>
                        <li>Final acceptance inspection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Quality Documentation</h3>
                    <p>Complete documentation services including inspection reports, weld maps, material certificates, and compliance records.</p>
                    <ul>
                        <li>Inspection report preparation</li>
                        <li>Weld map development</li>
                        <li>Material traceability</li>
                        <li>Compliance certification</li>
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
                    <span class="section-label">INSPECTION TOOLS & EXPERTISE</span>
                    <h2>Welding Inspection Equipment & Capabilities</h2>
                    <p>Professional welding inspection tools and certified inspectors for comprehensive weld quality assessment and verification.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Visual Inspection Tools</h4>
                                <p>Professional visual inspection equipment including weld gauges, magnifiers, borescopes, and digital documentation systems.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Dimensional Measurement</h4>
                                <p>Precision measurement tools including weld gauges, calipers, micrometers, and profile gauges for dimensional verification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>NDT Equipment</h4>
                                <p>Complete range of non-destructive testing equipment for weld examination including RT, UT, MT, PT, and VT capabilities.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Process Monitoring</h4>
                                <p>Temperature measurement equipment, heat input monitoring, and preheat/interpass temperature verification tools.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Welding Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/aws-cwi-cert.png" alt="AWS CWI">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME Authorized">
                            <img src="/www/assets/images/certs/api-cert.png" alt="API Certified">
                            <img src="/www/assets/images/certs/iso-cert.png" alt="ISO Standards">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/welding/weld-inspection-equipment.jpg" alt="Weld Inspection Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Welding Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>AWS CWI Certified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>ASME Authorized</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Complete NDT Capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Documentation</span>
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
                <h2>Your Trusted Welding Inspection Partner</h2>
                <p>Certified welding inspectors and comprehensive quality control expertise</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>AWS Certified Inspectors</h3>
                    <p>Certified Welding Inspectors (CWI) with extensive experience in code interpretation, weld inspection, and quality control across all industries.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Code Expertise</h3>
                    <p>Deep knowledge of AWS, ASME, API, ISO, and EN welding codes ensuring accurate interpretation and compliance verification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>All Welding Processes</h3>
                    <p>Comprehensive experience with all welding processes including SMAW, GMAW, GTAW, SAW, FCAW, and advanced technologies.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industry Experience</h3>
                    <p>Proven track record across oil & gas, power generation, petrochemical, construction, and manufacturing industries.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive documentation and reporting services providing full traceability and compliance records for audits and acceptance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Technical Support</h3>
                    <p>Ongoing technical support and consultation for welding problems, procedure development, and quality improvement initiatives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Welding & Fabrication Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is a Certified Welding Inspector (CWI)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>A CWI is an individual certified by the American Welding Society (AWS) who has demonstrated knowledge of welding processes, inspection techniques, and code requirements through examination and experience. CWIs are qualified to inspect welds and ensure compliance with applicable standards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between WPS and PQR?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>A Welding Procedure Specification (WPS) is a written document providing direction to the welder for making production welds. A Procedure Qualification Record (PQR) is the documented test results that qualify the WPS, proving that the procedure produces acceptable welds.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often do welders need to be requalified?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Welder qualification requirements vary by code. Generally, welders must be requalified if they haven't used a process for 6 months, when there is reason to question their ability, or when essential variables change beyond code limits.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are common weld defects to look for?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Common weld defects include cracks, porosity, incomplete fusion, lack of penetration, undercut, overlap, slag inclusions, and excessive or insufficient weld reinforcement. Visual and NDT inspection detect these issues.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you help develop welding procedures?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide complete WPS/PQR development services including procedure writing, qualification testing, and documentation. We ensure procedures are optimized for quality, productivity, and code compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What codes and standards do you work with?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We work with all major welding codes including AWS D1.1, D1.2, D1.6, ASME Section IX, ASME B31.3, API 1104, API 650, ISO 9606, EN 1090, and project-specific specifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide on-site inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our certified welding inspectors provide on-site inspection services at fabrication shops, construction sites, and field locations to ensure quality control throughout the welding process.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive documentation including inspection reports, weld maps, material certificates, NDT reports, welder qualifications, WPS/PQR records, and compliance certifications as required for project acceptance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Welding Quality & Code Compliance</h2>
                <p>Contact our certified welding inspectors for comprehensive weld quality control and inspection services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:welding@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Welding Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> AWS CWI Certified</span>
                    <span><i class="fas fa-check"></i> All Welding Processes</span>
                    <span><i class="fas fa-check"></i> Complete Documentation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT Services</h2>
                <p>Comprehensive weld inspection and quality control solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/rt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Radiographic Testing</h3>
                    <p>Volumetric weld inspection for internal defect detection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced ultrasonic weld inspection and sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/mt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Surface crack detection in ferromagnetic welds</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/pt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye-dropper"></i>
                    </div>
                    <h3>Penetrant Testing</h3>
                    <p>Surface defect detection in all weld types</p>
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