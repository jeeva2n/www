<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Electrical & Instrumentation Services | E&I Inspection and Testing | Alpha Sonix NDT Solutions";
$meta_description = "Professional electrical and instrumentation (E&I) inspection services including thermography, loop testing, control system validation, switchgear inspection, and instrumentation calibration for industrial facilities.";
$meta_keywords = "electrical inspection, instrumentation testing, thermography inspection, switchgear inspection, control system validation, loop testing, E&I services, electrical safety, instrument calibration";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/electrical-instrumentation.php";
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
    <meta property="og:image" content="/www/assets/images/services/electrical-instrumentation-og.jpg">
    
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
        "serviceType": "Electrical & Instrumentation Services",
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
        "description": "Professional electrical and instrumentation inspection services ensuring safety, reliability, and compliance for industrial electrical systems and process instrumentation."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/electrical/electrical-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Electrical & Instrumentation Services</span>
                </div>
                <h1 class="page-title">Electrical & Instrumentation (E&I) Services</h1>
                <p class="page-subtitle">Comprehensive electrical inspection, thermography, and instrumentation testing ensuring safety, reliability, and process control accuracy</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-bolt"></i> NFPA 70B Compliant</span>
                    <span class="badge"><i class="fas fa-thermometer-half"></i> Infrared Thermography</span>
                    <span class="badge"><i class="fas fa-microchip"></i> Control System Validation</span>
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
                    <h3>Electrical Inspection</h3>
                    <p>Comprehensive electrical system inspection including switchgear, MCCs, transformers, and distribution systems per NFPA 70B standards.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Infrared Thermography</h3>
                    <p>Advanced thermal imaging for electrical hotspot detection, loose connection identification, and predictive maintenance surveys.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Instrumentation Testing</h3>
                    <p>Loop testing, instrument calibration, and control system validation ensuring accurate process measurement and control.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Electrical Safety</h3>
                    <p>Arc flash assessment, grounding verification, insulation resistance testing, and electrical safety compliance audits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS E&I SERVICES ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ELECTRICAL & INSTRUMENTATION SERVICES</span>
                    <h2>What are Electrical & Instrumentation (E&I) Services?</h2>
                    <p class="lead">Electrical and Instrumentation (E&I) services encompass comprehensive inspection, testing, and validation of industrial electrical systems and process instrumentation to ensure safety, reliability, and regulatory compliance.</p>
                    
                    <p>Industrial facilities rely on complex electrical distribution systems and process instrumentation for safe and efficient operation. Undetected electrical faults can cause fires, equipment damage, and production outages, while inaccurate instrumentation can compromise product quality and process safety.</p>

                    <p>Our E&I services combine certified electrical inspectors, Level II thermographers, and instrumentation specialists using advanced testing equipment to detect problems before failure, verify system integrity, and ensure regulatory compliance per NFPA 70B, IEEE, and ISA standards.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Infrared Thermography Surveys</strong>
                                <p>Non-contact thermal imaging detects loose connections, unbalanced loads, and component failures before catastrophic events occur.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Control System Validation</strong>
                                <p>Comprehensive testing of PLCs, DCS, and safety instrumented systems (SIS) ensuring proper operation and regulatory compliance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Instrument Calibration & Loop Testing</strong>
                                <p>Precision calibration of process instruments and verification of control loops for accurate measurement and control.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Electrical Safety Compliance</strong>
                                <p>Arc flash studies, equipment labeling, grounding verification, and insulation testing per NFPA 70E requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Critical for Facility Safety:</strong>
                            <p>Electrical failures cause 30-40% of industrial fires with average losses of $8-20M per incident. Regular thermography and electrical inspection reduce fire risk by 80-90% while preventing costly unplanned outages.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request E&I Services</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/electrical/thermography-inspection.jpg" alt="Electrical Thermography">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Infrared thermography detecting electrical hotspot in switchgear</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Thermography Surveys</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Instruments Calibrated</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">NFPA 70B</span>
                            <span class="stat-label">Compliant</span>
                        </div>
                    </div>
                    
                    <div class="electrical-benefits">
                        <h4><i class="fas fa-star"></i> E&I Service Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Prevent electrical fires</li>
                            <li><i class="fas fa-check"></i> Reduce unplanned outages</li>
                            <li><i class="fas fa-check"></i> Ensure process accuracy</li>
                            <li><i class="fas fa-check"></i> Regulatory compliance</li>
                            <li><i class="fas fa-check"></i> Extend equipment life</li>
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
                <span class="section-label">WHY PROFESSIONAL E&I SERVICES MATTER</span>
                <h2>Key Advantages of Electrical & Instrumentation Services</h2>
                <p>Ensure safety, reliability, and accuracy of your facility's electrical and control systems</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Electrical Fire Prevention</h3>
                    <p>Thermography detects loose connections and overloaded circuits before they ignite, reducing electrical fire risk by 80-90% with annual surveys.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Predictive Maintenance</h3>
                    <p>Identify developing electrical faults weeks to months before failure, enabling planned repairs during scheduled outages rather than emergency responses.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Process Control Accuracy</h3>
                    <p>Calibrated instruments and validated control loops ensure accurate process measurement, consistent product quality, and optimized operation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Electrical Safety Compliance</h3>
                    <p>Meet NFPA 70E, OSHA, and insurance requirements with documented electrical inspections, arc flash labeling, and safety program verification.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Reduced Downtime</h3>
                    <p>Prevent unplanned electrical outages that cost $100K-5M per day in production losses through proactive inspection and maintenance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Audit Ready Documentation</h3>
                    <p>Comprehensive inspection records, thermal image archives, calibration certificates, and compliance documentation for regulatory audits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">E&I SERVICE APPLICATIONS</span>
                <h2>Electrical & Instrumentation Systems We Serve</h2>
                <p>Comprehensive E&I services for all industrial electrical and control systems</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="electrical-distribution">Electrical Distribution</button>
                    <button class="tab-btn" data-tab="motors-drives">Motors & Drives</button>
                    <button class="tab-btn" data-tab="instrumentation">Instrumentation & Control</button>
                    <button class="tab-btn" data-tab="safety-systems">Safety & Protection</button>
                </div>

                <div class="tabs-content">
                    <!-- Electrical Distribution Tab -->
                    <div class="tab-panel active" id="electrical-distribution">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/electrical/switchgear-inspection.jpg" alt="Switchgear Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Electrical Distribution System Inspection</h3>
                                <p>Comprehensive inspection of electrical distribution equipment including switchgear, MCCs, transformers, and panel boards per NFPA 70B and IEEE standards.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Infrared thermography of all electrical connections and components</li>
                                    <li><i class="fas fa-check"></i> Switchgear and circuit breaker inspection and testing</li>
                                    <li><i class="fas fa-check"></i> Transformer oil analysis and thermal imaging</li>
                                    <li><i class="fas fa-check"></i> Motor Control Center (MCC) component inspection</li>
                                    <li><i class="fas fa-check"></i> Bus bar and cable termination thermal assessment</li>
                                    <li><i class="fas fa-check"></i> Insulation resistance and power factor testing</li>
                                    <li><i class="fas fa-check"></i> Grounding system integrity verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NFPA 70B</span>
                                    <span class="standard-tag">IEEE 902</span>
                                    <span class="standard-tag">NETA ATS/MTS</span>
                                    <span class="standard-tag">IEC 62271</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Motors & Drives Tab -->
                    <div class="tab-panel" id="motors-drives">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/electrical/motor-inspection.jpg" alt="Motor Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Motor & Drive System Inspection</h3>
                                <p>Comprehensive inspection and testing of electric motors, VFDs, and motor control systems for reliability and efficiency.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Motor winding insulation resistance testing (Megger)</li>
                                    <li><i class="fas fa-check"></i> Motor current signature analysis (MCSA)</li>
                                    <li><i class="fas fa-check"></i> VFD input/output harmonic analysis</li>
                                    <li><i class="fas fa-check"></i> Bearing and coupling thermal imaging</li>
                                    <li><i class="fas fa-check"></i> Motor vibration analysis (where applicable)</li>
                                    <li><i class="fas fa-check"></i> Surge comparison testing for winding faults</li>
                                    <li><i class="fas fa-check"></i> Efficiency and performance assessment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">IEEE 43</span>
                                    <span class="standard-tag">IEEE 112</span>
                                    <span class="standard-tag">NEMA MG-1</span>
                                    <span class="standard-tag">API 541/546/547</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Instrumentation & Control Tab -->
                    <div class="tab-panel" id="instrumentation">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/electrical/instrument-calibration.jpg" alt="Instrument Calibration">
                            </div>
                            <div class="tab-text">
                                <h3>Instrumentation & Control System Testing</h3>
                                <p>Precision calibration, loop testing, and control system validation for process instrumentation and automation systems.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Instrument calibration (pressure, temperature, flow, level)</li>
                                    <li><i class="fas fa-check"></i> Control loop verification (4-20mA, HART, Foundation Fieldbus)</li>
                                    <li><i class="fas fa-check"></i> PLC and DCS I/O verification and logic testing</li>
                                    <li><i class="fas fa-check"></i> Transmitter and sensor accuracy validation</li>
                                    <li><i class="fas fa-check"></i> Control valve stroke and positioner calibration</li>
                                    <li><i class="fas fa-check"></i> SCADA and HMI point-to-point verification</li>
                                    <li><i class="fas fa-check"></i> Historian and alarm management validation</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ISA 5.1</span>
                                    <span class="standard-tag">ISA 18.2</span>
                                    <span class="standard-tag">API 551</span>
                                    <span class="standard-tag">ANSI/ISA 84.00.01</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Safety & Protection Tab -->
                    <div class="tab-panel" id="safety-systems">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/electrical/arc-flash-assessment.jpg" alt="Arc Flash Assessment">
                            </div>
                            <div class="tab-text">
                                <h3>Electrical Safety & Protection Systems</h3>
                                <p>Comprehensive electrical safety assessment including arc flash studies, protective device coordination, and safety compliance verification.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Arc flash hazard analysis per IEEE 1584 and NFPA 70E</li>
                                    <li><i class="fas fa-check"></i> Protective device coordination studies</li>
                                    <li><i class="fas fa-check"></i> Short circuit and load flow analysis</li>
                                    <li><i class="fas fa-check"></i> Grounding and bonding verification</li>
                                    <li><i class="fas fa-check"></i> Electrical equipment labeling (arc flash, voltage, PPE)</li>
                                    <li><i class="fas fa-check"></i> Safety instrumented system (SIS) validation</li>
                                    <li><i class="fas fa-check"></i> Emergency shutdown (ESD) system testing</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NFPA 70E</span>
                                    <span class="standard-tag">IEEE 1584</span>
                                    <span class="standard-tag">ANSI/ISA 84.00.01</span>
                                    <span class="standard-tag">IEC 61511</span>
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
                <span class="section-label">COMPREHENSIVE E&I SERVICES</span>
                <h2>Our Electrical & Instrumentation Capabilities</h2>
                <p>Advanced testing equipment and certified specialists for complete E&I assessment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Infrared Thermography Surveys</h3>
                    <p>Comprehensive thermal imaging of electrical systems to detect loose connections, unbalanced loads, and component failures.</p>
                    <ul>
                        <li>Switchgear and MCC thermal scanning</li>
                        <li>Transformer and bus duct imaging</li>
                        <li>Motor and drive thermal assessment</li>
                        <li>Automated report with temperature analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Electrical Power System Testing</h3>
                    <p>Complete electrical testing services for power distribution equipment and protection systems.</p>
                    <ul>
                        <li>Insulation resistance and power factor testing</li>
                        <li>Circuit breaker timing and contact resistance</li>
                        <li>Transformer turns ratio and winding resistance</li>
                        <li>Protective relay calibration and testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Instrument Calibration & Loop Testing</h3>
                    <p>Precision calibration of process instruments and control loop verification for accurate process control.</p>
                    <ul>
                        <li>Pressure, temperature, flow, level calibration</li>
                        <li>Transmitter and sensor accuracy validation</li>
                        <li>4-20mA and digital loop verification</li>
                        <li>Calibration certificates and traceability</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Control System Validation</h3>
                    <p>Comprehensive testing and validation of PLC, DCS, and safety instrumented systems.</p>
                    <ul>
                        <li>PLC and DCS I/O verification</li>
                        <li>Logic and sequence testing</li>
                        <li>HMI and SCADA point-to-point validation</li>
                        <li>Alarm and trip point verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Arc Flash & Electrical Safety</h3>
                    <p>Professional arc flash studies and electrical safety compliance assessments per NFPA 70E.</p>
                    <ul>
                        <li>Arc flash hazard analysis</li>
                        <li>Protective device coordination</li>
                        <li>Equipment labeling and PPE determination</li>
                        <li>Safety program review and recommendations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Grounding & Bonding Verification</h3>
                    <p>Comprehensive grounding system testing ensuring electrical safety and equipment protection.</p>
                    <ul>
                        <li>Ground resistance testing (fall-of-potential)</li>
                        <li>Soil resistivity measurements</li>
                        <li>Ground grid integrity verification</li>
                        <li>Static grounding system inspection</li>
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
                    <span class="section-label">SERVICE WORKFLOW</span>
                    <h2>Our E&I Service Delivery Process</h2>
                    <p>Systematic approach ensuring thorough assessment, accurate testing, and actionable recommendations for electrical and instrumentation systems.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Planning & Scope Definition</h4>
                                <p>Review of electrical single lines, instrument lists, and equipment history to develop comprehensive inspection scope.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Field Testing & Inspection</h4>
                                <p>On-site thermography, electrical testing, instrument calibration, and control system validation by certified specialists.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Analysis & Engineering</h4>
                                <p>Thermal image analysis, test result evaluation, and engineering assessment of findings and recommendations.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Reporting & Recommendations</h4>
                                <p>Comprehensive reports with findings, thermal images, test results, and prioritized recommendations for corrective action.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our E&I Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/nfpa-70b-cert.png" alt="NFPA 70B">
                            <img src="/www/assets/images/certs/asnt-ir-cert.png" alt="ASNT Level II IR">
                            <img src="/www/assets/images/certs/iec-cert.png" alt="IEC">
                            <img src="/www/assets/images/certs/isa-cert.png" alt="ISA">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/electrical/service-workflow.jpg" alt="E&I Service Workflow">
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
                            <span>NFPA 70B Compliant</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Level II Thermographers</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Certified Instrumentation Techs</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>NIST Traceable Calibration</span>
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
                <h2>Your Trusted Electrical & Instrumentation Partner</h2>
                <p>Certified specialists, advanced testing equipment, and proven E&I expertise</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified E&I Specialists</h3>
                    <p>ASNT Level II thermographers, NFPA 70E certified electrical safety specialists, and ISA-certified instrumentation technicians.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Advanced Testing Equipment</h3>
                    <p>High-resolution thermal cameras, multifunction electrical testers, precision calibrators, and control system validation tools.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>500+ thermography surveys and 1,000+ instrument calibrations completed across refining, power, and manufacturing facilities.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety Focused</h3>
                    <p>Comprehensive safety training, NFPA 70E compliance, and rigorous safe work practices for all electrical inspection activities.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Pan-India Coverage</h3>
                    <p>Mobile E&I teams serving industrial facilities across India with rapid mobilization and flexible scheduling.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive reports, thermal image archives, calibration certificates, and regulatory compliance documentation for audit readiness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Electrical & Instrumentation Services Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should electrical thermography be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>NFPA 70B recommends infrared thermography annually for critical electrical systems. High-load or critical systems may require semi-annual surveys. Our thermographers can help establish appropriate intervals based on your facility's risk profile and operating conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between a loop test and instrument calibration?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Calibration verifies individual instrument accuracy against a known standard. Loop testing verifies the entire measurement loop including sensor, transmitter, controller, and final control element. Both are essential for reliable process control.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you perform electrical inspections while equipment is operating?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, infrared thermography and many electrical tests can be performed on energized equipment following strict NFPA 70E safety procedures. Some tests require de-energization, which we can coordinate with your operations team.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is an arc flash study and do I need one?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>An arc flash study calculates potential incident energy levels at electrical equipment, determining required PPE and safe approach distances. NFPA 70E requires arc flash labeling for all electrical equipment. Most facilities need updated studies every 5 years or after significant changes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you ensure calibration traceability?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>All our calibration equipment is NIST traceable with documented calibration records. We provide calibration certificates with each instrument showing as-found/as-left readings and measurement uncertainty.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What instrumentation can you calibrate?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We calibrate pressure gauges, temperature transmitters, flow meters, level instruments, control valves, positioners, analytical instruments, and virtually all process measurement and control devices.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide control system programming and modifications?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide control system validation and testing services. For programming modifications, we work with your control system integrator or can recommend qualified partners for specific needs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide for electrical inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive reports including thermal images with temperature analysis, test results, findings summary, prioritized recommendations, and compliance documentation for regulatory audits and insurance requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Electrical & Instrumentation Reliability</h2>
                <p>Contact our E&I specialists for comprehensive electrical inspection and instrumentation services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:eandi@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email E&I Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> NFPA 70B Compliant</span>
                    <span><i class="fas fa-check"></i> Level II Thermographers</span>
                    <span><i class="fas fa-check"></i> NIST Traceable Calibration</span>
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

                <a href="/www/pages/third-party-inspection/shutdown-turnaround-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Turnaround Inspection</h3>
                    <p>Shutdown and outage support services</p>
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

                <a href="/www/pages/rope-access-services/rope-access-thermal-imaging.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Rope Access Thermal Imaging</h3>
                    <p>Elevated electrical and CUI inspection</p>
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