<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Mechanical & Structural Inspection Services | Asset Integrity Assessment | Alpha Sonix NDT Solutions";
$meta_description = "Professional mechanical and structural inspection services including structural steel inspection, mechanical equipment assessment, weld inspection, and integrity evaluation for industrial facilities, bridges, and infrastructure.";
$meta_keywords = "structural inspection, mechanical inspection, structural steel inspection, weld inspection, mechanical equipment assessment, bridge inspection, crane inspection, structural integrity";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/mechanical-structural.php";
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
    <meta property="og:image" content="/www/assets/images/services/mechanical-structural-og.jpg">
    
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
        "serviceType": "Mechanical & Structural Inspection Services",
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
        "description": "Professional mechanical and structural inspection services ensuring safety, reliability, and code compliance for industrial structures and mechanical equipment."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/mechanical/mechanical-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Mechanical & Structural Inspection</span>
                </div>
                <h1 class="page-title">Mechanical & Structural Inspection</h1>
                <p class="page-subtitle">Comprehensive structural steel, mechanical equipment, and weld integrity assessment for industrial facilities and critical infrastructure</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-building"></i> AWS D1.1 Certified</span>
                    <span class="badge"><i class="fas fa-tachometer-alt"></i> Structural Integrity Assessment</span>
                    <span class="badge"><i class="fas fa-wrench"></i> Mechanical Equipment Evaluation</span>
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
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Structural Steel Inspection</h3>
                    <p>Comprehensive structural steel inspection including columns, beams, trusses, and connections for building and industrial structures.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-crane"></i>
                    </div>
                    <h3>Mechanical Equipment Assessment</h3>
                    <p>Inspection of cranes, hoists, lifting equipment, conveyors, and rotating machinery for operational safety and reliability.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Weld Inspection & Testing</h3>
                    <p>Certified weld inspection using VT, MT, PT, UT, and RT methods ensuring code compliance and structural integrity.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Bridge & Infrastructure</h3>
                    <p>Bridge girder, bearing, and support inspection for highway, railway, and pedestrian bridges and infrastructure assets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS MECHANICAL & STRUCTURAL INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ASSET INTEGRITY SERVICES</span>
                    <h2>What is Mechanical & Structural Inspection?</h2>
                    <p class="lead">Mechanical and structural inspection is a comprehensive assessment service ensuring the safety, reliability, and code compliance of industrial structures, mechanical equipment, and critical infrastructure assets.</p>
                    
                    <p>Industrial structures and mechanical equipment operate under demanding conditions including heavy loads, cyclic stress, vibration, corrosion, and environmental exposure. Undetected degradation can lead to structural failures, equipment breakdowns, safety incidents, and costly unplanned downtime.</p>

                    <p>Our mechanical and structural inspection services combine AWS certified weld inspectors, API-trained mechanical engineers, and advanced NDT technologies to detect degradation, verify code compliance, assess structural integrity, and provide actionable recommendations for repair and life extension.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Structural Integrity Assessment</strong>
                                <p>Comprehensive evaluation of steel structures, connections, foundations, and load-bearing components per applicable codes.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Certified Weld Inspection</strong>
                                <p>AWS CWI and CSWIP certified inspectors performing visual, magnetic particle, and advanced weld testing.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Mechanical Equipment Reliability</strong>
                                <p>Crane, hoist, conveyor, and rotating equipment inspection ensuring operational safety and reliability.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Corrosion & Degradation Assessment</strong>
                                <p>Detection and quantification of corrosion, fatigue cracks, deformation, and material degradation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-hard-hat"></i>
                        <div>
                            <strong>Critical for Structural Safety:</strong>
                            <p>Structural failures cost an average of $10-50M in direct costs plus extended production losses and regulatory penalties. Systematic inspection programs reduce failure risk by 80-95% while optimizing maintenance spend and ensuring worker safety.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/mechanical/structural-inspection.jpg" alt="Structural Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Structural steel inspection using advanced NDT methods</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Structures Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Weld Inspections</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">AWS CWI</span>
                            <span class="stat-label">Certified</span>
                        </div>
                    </div>
                    
                    <div class="mechanical-benefits">
                        <h4><i class="fas fa-star"></i> Inspection Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Prevent structural failures</li>
                            <li><i class="fas fa-check"></i> Ensure worker safety</li>
                            <li><i class="fas fa-check"></i> Extend asset life</li>
                            <li><i class="fas fa-check"></i> Code compliance</li>
                            <li><i class="fas fa-check"></i> Reduce downtime</li>
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
                <span class="section-label">WHY PROFESSIONAL INSPECTION MATTERS</span>
                <h2>Key Advantages of Mechanical & Structural Inspection</h2>
                <p>Ensure safety, compliance, and long-term reliability of your structures and equipment</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Structural Safety Assurance</h3>
                    <p>Proactive detection of degradation prevents catastrophic structural failures, protecting personnel, equipment, and facility assets.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Meet OSHA, building codes, and industry standards with documented inspection programs and certified inspectors.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Optimization</h3>
                    <p>Target repairs based on actual condition data, avoiding unnecessary replacement while preventing costly emergency repairs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Life Extension</h3>
                    <p>Data-driven remaining life assessment enables continued safe operation beyond original design life with appropriate monitoring.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Minimized Downtime</h3>
                    <p>Plan repairs during scheduled outages rather than emergency responses, reducing production impact and costs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Risk Reduction</h3>
                    <p>Systematic inspection programs reduce structural failure risk by 80-95% compared to reactive maintenance approaches.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION APPLICATIONS</span>
                <h2>Structures & Equipment We Inspect</h2>
                <p>Comprehensive inspection services for all types of industrial structures and mechanical equipment</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="structural-steel">Structural Steel</button>
                    <button class="tab-btn" data-tab="mechanical-equipment">Mechanical Equipment</button>
                    <button class="tab-btn" data-tab="welds">Weld & Connection</button>
                    <button class="tab-btn" data-tab="infrastructure">Infrastructure & Bridges</button>
                </div>

                <div class="tabs-content">
                    <!-- Structural Steel Tab -->
                    <div class="tab-panel active" id="structural-steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/mechanical/structural-steel.jpg" alt="Structural Steel Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Structural Steel & Framework Inspection</h3>
                                <p>Comprehensive inspection of industrial structural steel including building frames, equipment supports, pipe racks, and platform structures.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Column, beam, and truss condition assessment</li>
                                    <li><i class="fas fa-check"></i> Bolted and welded connection inspection</li>
                                    <li><i class="fas fa-check"></i> Corrosion and coating condition evaluation</li>
                                    <li><i class="fas fa-check"></i> Structural support and foundation assessment</li>
                                    <li><i class="fas fa-check"></i> Mezzanine and platform structural integrity</li>
                                    <li><i class="fas fa-check"></i> Pipe rack and equipment support evaluation</li>
                                    <li><i class="fas fa-check"></i> Fatigue crack and stress riser detection</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AISC 360</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">OSHA 1910</span>
                                    <span class="standard-tag">IBC/ASCE 7</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mechanical Equipment Tab -->
                    <div class="tab-panel" id="mechanical-equipment">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/mechanical/crane-inspection.jpg" alt="Crane Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Mechanical Equipment & Lifting Gear Inspection</h3>
                                <p>Comprehensive inspection of cranes, hoists, conveyors, and industrial mechanical equipment for operational safety and reliability.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Overhead crane and gantry crane inspection</li>
                                    <li><i class="fas fa-check"></i> Hoist and lifting beam condition assessment</li>
                                    <li><i class="fas fa-check"></i> Sling, shackle, and rigging gear inspection</li>
                                    <li><i class="fas fa-check"></i> Conveyor system structural and component evaluation</li>
                                    <li><i class="fas fa-check"></i> Rotating equipment baseplate and mounting inspection</li>
                                    <li><i class="fas fa-check"></i> Mechanical fastener and bolted joint verification</li>
                                    <li><i class="fas fa-check"></i> Load testing and operational verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30</span>
                                    <span class="standard-tag">OSHA 1910.179</span>
                                    <span class="standard-tag">CMAA 70/74</span>
                                    <span class="standard-tag">API 7C</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Weld & Connection Tab -->
                    <div class="tab-panel" id="welds">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/mechanical/weld-inspection.jpg" alt="Weld Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Weld & Connection Inspection</h3>
                                <p>Certified weld inspection using visual, magnetic particle, penetrant, ultrasonic, and radiographic methods ensuring code compliance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Visual weld inspection (VT) per AWS D1.1</li>
                                    <li><i class="fas fa-check"></i> Magnetic particle testing (MT) for surface cracks</li>
                                    <li><i class="fas fa-check"></i> Liquid penetrant testing (PT) for surface defects</li>
                                    <li><i class="fas fa-check"></i> Ultrasonic testing (UT) for volumetric inspection</li>
                                    <li><i class="fas fa-check"></i> Radiographic testing (RT) for critical welds</li>
                                    <li><i class="fas fa-check"></i> Bolted connection torque verification</li>
                                    <li><i class="fas fa-check"></i> Weld procedure and welder qualification verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ASME Section IX</span>
                                    <span class="standard-tag">ISO 5817</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure & Bridges Tab -->
                    <div class="tab-panel" id="infrastructure">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/mechanical/bridge-inspection.jpg" alt="Bridge Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Bridge & Infrastructure Inspection</h3>
                                <p>Comprehensive inspection of highway bridges, railway bridges, pedestrian bridges, and industrial infrastructure assets.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bridge girder and truss condition assessment</li>
                                    <li><i class="fas fa-check"></i> Bearing and expansion joint inspection</li>
                                    <li><i class="fas fa-check"></i> Pier, abutment, and foundation evaluation</li>
                                    <li><i class="fas fa-check"></i> Steel bridge fatigue crack detection</li>
                                    <li><i class="fas fa-check"></i> Bridge deck and wearing surface assessment</li>
                                    <li><i class="fas fa-check"></i> Culvert and drainage structure inspection</li>
                                    <li><i class="fas fa-check"></i> Load rating and capacity assessment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AASHTO</span>
                                    <span class="standard-tag">NBIS</span>
                                    <span class="standard-tag">IRC Standards</span>
                                    <span class="standard-tag">ASCE 7</span>
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
                <h2>Our Mechanical & Structural Inspection Capabilities</h2>
                <p>Advanced NDT technologies and certified inspectors for complete structural and equipment assessment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Structural Steel Integrity Assessment</h3>
                    <p>Comprehensive evaluation of steel structures including corrosion mapping, section loss measurement, and connection verification.</p>
                    <ul>
                        <li>Ultrasonic thickness measurement of steel sections</li>
                        <li>Corrosion and pitting assessment</li>
                        <li>Bolted and welded connection verification</li>
                        <li>Structural deformation and alignment check</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Certified Weld Inspection</h3>
                    <p>AWS CWI and CSWIP certified weld inspection using multiple NDT methods for code compliance and quality assurance.</p>
                    <ul>
                        <li>Visual weld inspection (VT)</li>
                        <li>Magnetic particle testing (MT)</li>
                        <li>Liquid penetrant testing (PT)</li>
                        <li>Ultrasonic and radiographic testing (UT/RT)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Crane & Lifting Equipment Inspection</h3>
                    <p>Comprehensive inspection of overhead cranes, gantry cranes, hoists, and lifting accessories per ASME B30 standards.</p>
                    <ul>
                        <li>Structural component and weld inspection</li>
                        <li>Mechanical and electrical system assessment</li>
                        <li>Load testing and operational verification</li>
                        <li>Lifting gear and rigging inspection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Bridge & Infrastructure Assessment</h3>
                    <p>Professional bridge inspection and load rating services for highway, railway, and industrial bridges.</p>
                    <ul>
                        <li>NBIS/AASHTO compliant bridge inspection</li>
                        <li>Fatigue crack detection and assessment</li>
                        <li>Bearing and expansion joint evaluation</li>
                        <li>Load rating and capacity analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Equipment Foundation & Support Inspection</h3>
                    <p>Assessment of machinery foundations, baseplates, anchor bolts, and support structures for rotating and reciprocating equipment.</p>
                    <ul>
                        <li>Concrete foundation condition assessment</li>
                        <li>Anchor bolt torque and condition verification</li>
                        <li>Grout and baseplate integrity evaluation</li>
                        <li>Vibration and alignment effect assessment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Corrosion Protection & Coating Assessment</h3>
                    <p>Evaluation of protective coatings, galvanizing, and corrosion protection systems for structural steel and equipment.</p>
                    <ul>
                        <li>Coating condition and adhesion testing</li>
                        <li>Corrosion under insulation (CUI) detection</li>
                        <li>Galvanizing thickness measurement</li>
                        <li>Cathodic protection system verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION WORKFLOW ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">INSPECTION PROCESS</span>
                    <h2>Our Mechanical & Structural Inspection Workflow</h2>
                    <p>Systematic approach ensuring comprehensive assessment, accurate detection, and actionable recommendations for structural integrity.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Planning & Scope Definition</h4>
                                <p>Review of structural drawings, equipment records, and applicable codes to develop comprehensive inspection scope.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Field Inspection Execution</h4>
                                <p>Visual, dimensional, and NDT inspection of structures and equipment by certified inspectors.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Analysis & Assessment</h4>
                                <p>Evaluation of inspection findings, structural analysis, and remaining life assessment.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Reporting & Recommendations</h4>
                                <p>Comprehensive reports with findings, analysis, and prioritized recommendations for repair and maintenance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Inspection Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/aws-cwi-cert.png" alt="AWS CWI">
                            <img src="/www/assets/images/certs/asnt-cert.png" alt="ASNT">
                            <img src="/www/assets/images/certs/api-cert.png" alt="API">
                            <img src="/www/assets/images/certs/nace-cert.png" alt="NACE">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/mechanical/inspection-workflow.jpg" alt="Inspection Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>AWS CWI Certified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>NDT Level II/III Technicians</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>API/ASME Compliant</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Fitness-for-Service Capable</span>
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
                <h2>Your Trusted Mechanical & Structural Inspection Partner</h2>
                <p>AWS certified inspectors, advanced NDT technologies, and proven structural assessment methodology</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>AWS CWI Certified Inspectors</h3>
                    <p>AWS Certified Weld Inspectors and CSWIP certified professionals with extensive structural and mechanical inspection experience.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Advanced NDT Technology</h3>
                    <p>State-of-the-art inspection equipment including phased array UT, digital radiography, and automated corrosion mapping.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>500+ structures inspected and 1,000+ weld inspections completed across industrial, infrastructure, and commercial sectors.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety Focused</h3>
                    <p>Comprehensive safety training and rigorous safe work practices for all inspection activities at height and in industrial environments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Pan-India Coverage</h3>
                    <p>Mobile inspection teams serving industrial facilities, bridges, and infrastructure projects across India.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive inspection reports, photographic documentation, and compliance records for regulatory and insurance requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Mechanical & Structural Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should structural steel be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection intervals depend on the structure's criticality, corrosion environment, and regulatory requirements. Typical intervals range from 1-5 years for industrial structures to 2-5 years for bridges per NBIS requirements. We can help establish appropriate intervals for your assets.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between AWS D1.1 and API 1104?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>AWS D1.1 covers structural steel welding for buildings and bridges. API 1104 covers pipeline welding. Our inspectors are certified to both standards as well as ASME Section IX for pressure equipment welding.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide crane inspection for OSHA compliance?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide comprehensive crane and hoist inspection per ASME B30 and OSHA 1910.179 requirements including structural inspection, load testing, and documentation for regulatory compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What NDT methods do you use for weld inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We use visual (VT), magnetic particle (MT), liquid penetrant (PT), ultrasonic (UT), phased array (PAUT), and radiographic (RT) methods depending on the application, material, and code requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you inspect structures at height or difficult access areas?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide rope access inspection services for structures at height, elevated equipment, bridges, and other difficult access locations without costly scaffolding.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is a bridge load rating?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>A bridge load rating is an engineering analysis that determines the safe load capacity of a bridge based on its current condition. Load ratings are required for legal load permits and infrastructure management programs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide corrosion under insulation (CUI) detection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we use pulsed eddy current (PEC) and profile radiography to detect corrosion beneath insulation on structural steel and equipment without insulation removal.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide for structural inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive reports including findings, photographs, NDT results, condition assessment, prioritized recommendations, and compliance documentation for regulatory and insurance requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Structural & Mechanical Integrity</h2>
                <p>Contact our inspection specialists for comprehensive mechanical and structural assessment services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:structural@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Inspection Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> AWS CWI Certified</span>
                    <span><i class="fas fa-check"></i> Structural Integrity Assessment</span>
                    <span><i class="fas fa-check"></i> Code Compliance</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Integrity & Inspection Services</h2>
                <p>Comprehensive asset integrity and inspection solutions</p>
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
                    <h3>Welding Inspection</h3>
                    <p>Certified weld inspection and quality assurance</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Rope Access UT</h3>
                    <p>Ultrasonic thickness at height for structures</p>
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