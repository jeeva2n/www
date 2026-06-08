<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Pressure Vessel & Boiler Inspection Services | ASME & API Compliance | Alpha Sonix NDT Solutions";
$meta_description = "Professional pressure vessel and boiler inspection services including ASME compliance testing, API certifications, safety inspections, and regulatory compliance for industrial facilities and power plants.";
$meta_keywords = "pressure vessel inspection, boiler inspection, ASME pressure vessel, API inspection, steam boiler testing, pressure vessel certification, boiler safety inspection, industrial boiler service, pressure vessel NDT";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/pressure-vessel-boiler.php";
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
    <meta property="og:image" content="/www/assets/images/services/pressure-vessel-og.jpg">
    
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
        "serviceType": "Pressure Vessel & Boiler Inspection Services",
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
        "description": "Professional pressure vessel and boiler inspection services ensuring safety compliance with ASME, API, and regulatory standards for industrial facilities."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/pressure-vessel/pv-boiler1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Pressure Vessel & Boiler</span>
                </div>
                <h1 class="page-title">Pressure Vessel & Boiler Inspection</h1>
                <p class="page-subtitle">Comprehensive safety inspections and compliance testing for industrial boilers, pressure vessels, and steam systems</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME & API Certified</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Safety Compliance</span>
                    <span class="badge"><i class="fas fa-tools"></i> Complete NDT Testing</span>
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
                    <h3>Comprehensive Inspection</h3>
                    <p>Thorough examination of pressure vessels and boilers using advanced NDT techniques to ensure structural integrity and safe operation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Full compliance with ASME, API, NBIC, and local jurisdiction requirements for pressure vessel and boiler safety certification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Professional Certification</h3>
                    <p>Authorized inspectors providing official certificates and documentation required for legal operation and insurance coverage.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Scheduled & Emergency</h3>
                    <p>Planned inspection programs and emergency response services to maintain continuous operation and address critical safety issues.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS PRESSURE VESSEL & BOILER INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">INDUSTRIAL SAFETY SERVICES</span>
                    <h2>What is Pressure Vessel & Boiler Inspection?</h2>
                    <p class="lead">Pressure vessel and boiler inspection is a comprehensive safety evaluation process that ensures industrial pressure-containing equipment operates safely and complies with applicable codes and regulations.</p>
                    
                    <p>These inspections involve detailed examination of pressure vessels, steam boilers, fired heaters, and associated systems using non-destructive testing methods, visual inspection, and performance testing. Our certified inspectors evaluate structural integrity, safety systems, and operational parameters to verify compliance with ASME, API, NBIC, and local regulatory requirements.</p>

                    <p>Regular inspection programs are essential for preventing catastrophic failures, ensuring worker safety, maintaining insurance coverage, and meeting legal operating requirements. These services support both new construction certification and in-service inspection programs.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code Compliance Verification</strong>
                                <p>Ensure full compliance with ASME Section VIII, Section I, API standards, and local jurisdiction requirements.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Safety System Testing</strong>
                                <p>Comprehensive testing of safety valves, pressure relief devices, and emergency shutdown systems.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Structural Integrity Assessment</strong>
                                <p>Advanced NDT testing to detect corrosion, cracking, fatigue, and other structural deterioration.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Performance Optimization</strong>
                                <p>Efficiency testing and recommendations to optimize performance while maintaining safety standards.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Expert Knowledge:</strong>
                            <p>Our certified inspectors combine extensive code knowledge with practical field experience to provide thorough inspections that ensure safety compliance and operational excellence.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Schedule Inspection</a>
                        <a href="#services" class="btn btn-secondary">View Services</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/pressure-vessel/inspection-process.jpg" alt="Pressure Vessel Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional pressure vessel inspection ensuring safety and compliance</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">2000+</span>
                            <span class="stat-label">Vessels Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Safety Record</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">20+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                    </div>
                    
                    <div class="pressure-vessel-benefits">
                        <h4><i class="fas fa-star"></i> Key Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> ASME code compliance assurance</li>
                            <li><i class="fas fa-check"></i> Insurance requirement fulfillment</li>
                            <li><i class="fas fa-check"></i> Legal operation certification</li>
                            <li><i class="fas fa-check"></i> Risk mitigation and safety</li>
                            <li><i class="fas fa-check"></i> Operational efficiency optimization</li>
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
                <span class="section-label">WHY INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Pressure Vessel & Boiler Inspection</h2>
                <p>Protect your facility, personnel, and operations with comprehensive safety inspections</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety Assurance</h3>
                    <p>Prevent catastrophic failures and ensure personnel safety through systematic inspection and testing of pressure-containing equipment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Legal Compliance</h3>
                    <p>Meet all regulatory requirements and maintain valid operating permits through certified inspection programs and proper documentation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Prevention</h3>
                    <p>Avoid expensive emergency repairs, production downtime, and legal penalties through proactive inspection and maintenance planning.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Operational Efficiency</h3>
                    <p>Optimize equipment performance, energy efficiency, and reliability through comprehensive assessment and improvement recommendations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-umbrella"></i>
                    </div>
                    <h3>Insurance Coverage</h3>
                    <p>Maintain insurance eligibility and potentially reduce premiums through documented compliance and proactive safety management.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Extended Service Life</h3>
                    <p>Maximize equipment lifespan through early detection of problems and implementation of appropriate maintenance strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">EQUIPMENT TYPES & APPLICATIONS</span>
                <h2>Pressure Vessels & Boilers We Inspect</h2>
                <p>Comprehensive inspection services for all types of pressure-containing equipment across industries</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="boilers">Industrial Boilers</button>
                    <button class="tab-btn" data-tab="vessels">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="heaters">Fired Heaters</button>
                    <button class="tab-btn" data-tab="tanks">Storage Tanks</button>
                </div>

                <div class="tabs-content">
                    <!-- Industrial Boilers Tab -->
                    <div class="tab-panel active" id="boilers">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pressure-vessel/industrial-boiler.jpg" alt="Industrial Boiler Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial Steam Boilers</h3>
                                <p>Comprehensive inspection services for all types of industrial steam boilers ensuring safe operation and regulatory compliance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Fire-tube boilers (Scotch marine, locomotive type)</li>
                                    <li><i class="fas fa-check"></i> Water-tube boilers (straight tube, bent tube)</li>
                                    <li><i class="fas fa-check"></i> Package boilers and modular systems</li>
                                    <li><i class="fas fa-check"></i> Waste heat recovery boilers (WHRB)</li>
                                    <li><i class="fas fa-check"></i> Electric boilers and electrode systems</li>
                                    <li><i class="fas fa-check"></i> Thermal fluid heaters and hot oil systems</li>
                                    <li><i class="fas fa-check"></i> Steam generators and once-through systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section I</span>
                                    <span class="standard-tag">NBIC</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">Local Regulations</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel" id="vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pressure-vessel/pressure-vessel.jpg" alt="Pressure Vessel Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessels & Process Equipment</h3>
                                <p>Expert inspection of pressure vessels and process equipment for petrochemical, chemical, and manufacturing industries.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Process reactors and separators</li>
                                    <li><i class="fas fa-check"></i> Heat exchangers (shell & tube, plate)</li>
                                    <li><i class="fas fa-check"></i> Distillation columns and towers</li>
                                    <li><i class="fas fa-check"></i> Air receivers and compressed air systems</li>
                                    <li><i class="fas fa-check"></i> Autoclaves and sterilizers</li>
                                    <li><i class="fas fa-check"></i> Jacketed vessels and reaction equipment</li>
                                    <li><i class="fas fa-check"></i> Cryogenic and low-temperature vessels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">TEMA Standards</span>
                                    <span class="standard-tag">PED Directive</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fired Heaters Tab -->
                    <div class="tab-panel" id="heaters">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pressure-vessel/fired-heater.jpg" alt="Fired Heater Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Fired Heaters & Process Furnaces</h3>
                                <p>Specialized inspection services for fired heaters, process furnaces, and high-temperature heating equipment in refining and chemical processing.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude oil heaters and process furnaces</li>
                                    <li><i class="fas fa-check"></i> Reformer and cracking furnaces</li>
                                    <li><i class="fas fa-check"></i> Thermal oxidizers and incinerators</li>
                                    <li><i class="fas fa-check"></i> Radiant tube heaters</li>
                                    <li><i class="fas fa-check"></i> Steam superheaters and reheaters</li>
                                    <li><i class="fas fa-check"></i> Coil and tube inspection programs</li>
                                    <li><i class="fas fa-check"></i> Refractory and insulation assessment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 560</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ASME Section I</span>
                                    <span class="standard-tag">NFPA 85</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Tanks Tab -->
                    <div class="tab-panel" id="tanks">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pressure-vessel/storage-tank.jpg" alt="Storage Tank Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pressurized Storage Tanks</h3>
                                <p>Comprehensive inspection programs for pressurized storage tanks and spheres in chemical, petroleum, and gas storage applications.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Spherical storage tanks (LPG, ammonia)</li>
                                    <li><i class="fas fa-check"></i> Horizontal and vertical pressure tanks</li>
                                    <li><i class="fas fa-check"></i> Bullet tanks and pressure bullets</li>
                                    <li><i class="fas fa-check"></i> Mounded and underground vessels</li>
                                    <li><i class="fas fa-check"></i> Cryogenic storage systems</li>
                                    <li><i class="fas fa-check"></i> Compressed gas storage vessels</li>
                                    <li><i class="fas fa-check"></i> Process and utility pressure tanks</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 620</span>
                                    <span class="standard-tag">NFPA 58</span>
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
                <h2>Our Pressure Vessel & Boiler Services</h2>
                <p>Complete inspection, testing, and certification services from authorized inspectors</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Initial & Annual Inspections</h3>
                    <p>Comprehensive annual and periodic inspections required by ASME codes and local regulations for safe operation certification.</p>
                    <ul>
                        <li>External visual examination</li>
                        <li>Internal inspection when accessible</li>
                        <li>Safety system testing</li>
                        <li>Performance verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Non-Destructive Testing (NDT)</h3>
                    <p>Advanced NDT techniques to detect structural defects, corrosion, and material degradation without equipment disassembly.</p>
                    <ul>
                        <li>Ultrasonic thickness measurement</li>
                        <li>Radiographic inspection</li>
                        <li>Magnetic particle testing</li>
                        <li>Penetrant testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Hydrostatic & Pneumatic Testing</h3>
                    <p>Pressure testing services to verify structural integrity and safety of pressure-containing equipment.</p>
                    <ul>
                        <li>Hydrostatic pressure testing</li>
                        <li>Pneumatic testing when required</li>
                        <li>Leak detection and assessment</li>
                        <li>Test documentation and certification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Safety Device Testing</h3>
                    <p>Testing and calibration of safety valves, pressure relief devices, and emergency systems to ensure proper operation.</p>
                    <ul>
                        <li>Safety valve set pressure testing</li>
                        <li>Pressure relief valve certification</li>
                        <li>Emergency shutdown system testing</li>
                        <li>Interlock and alarm verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Repair & Alteration Oversight</h3>
                    <p>Professional oversight of repairs, alterations, and modifications to ensure code compliance and quality workmanship.</p>
                    <ul>
                        <li>Repair procedure review</li>
                        <li>Welding qualification verification</li>
                        <li>Work progress inspection</li>
                        <li>Final acceptance testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Fitness-for-Service Assessment</h3>
                    <p>Engineering evaluation of equipment condition to determine continued safe operation or required corrective actions.</p>
                    <ul>
                        <li>API 579 fitness-for-service analysis</li>
                        <li>Remaining life assessment</li>
                        <li>Risk-based inspection planning</li>
                        <li>Operating condition recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">INSPECTION PROCESS</span>
                    <h2>Our Comprehensive Inspection Methodology</h2>
                    <p>Systematic approach ensuring thorough examination and accurate assessment of pressure vessel and boiler safety and compliance.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Pre-Inspection Planning</h4>
                                <p>Review of equipment history, previous inspection reports, operating conditions, and applicable codes to develop comprehensive inspection plan.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Visual & Physical Examination</h4>
                                <p>Thorough external and internal visual inspection, dimensional verification, and physical condition assessment of all accessible components.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Advanced NDT Testing</h4>
                                <p>Application of appropriate non-destructive testing methods to detect internal defects, corrosion, and material degradation.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation & Certification</h4>
                                <p>Comprehensive inspection reports with findings, recommendations, and official certificates for regulatory compliance and insurance requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Authorizations</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME Certified">
                            <img src="/www/assets/images/certs/api-cert.png" alt="API Authorized">
                            <img src="/www/assets/images/certs/nbic-cert.png" alt="NBIC Member">
                            <img src="/www/assets/images/certs/aws-cert.png" alt="AWS Certified">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/pressure-vessel/inspection-equipment.jpg" alt="Inspection Equipment">
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
                            <span>ASME Authorized Inspectors</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>API Certified Personnel</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Advanced NDT Equipment</span>
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
                <h2>Your Trusted Pressure Vessel & Boiler Inspection Partner</h2>
                <p>Experienced inspectors, comprehensive services, and unwavering commitment to safety</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Certified Inspectors</h3>
                    <p>ASME Authorized Inspectors and API certified personnel with extensive experience in pressure vessel and boiler inspection across industries.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Code Expertise</h3>
                    <p>Deep knowledge of ASME, API, NBIC, and local regulatory requirements ensuring accurate interpretation and compliance verification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Advanced Equipment</h3>
                    <p>State-of-the-art NDT equipment and testing capabilities providing accurate assessment of equipment condition and safety.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Scheduling</h3>
                    <p>Accommodation of plant shutdown schedules and emergency inspection needs with minimal disruption to operations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Comprehensive Reports</h3>
                    <p>Detailed inspection reports with clear findings, professional recommendations, and all required documentation for regulatory compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Long-term Partnership</h3>
                    <p>Ongoing support for inspection planning, maintenance optimization, and regulatory compliance throughout equipment lifecycle.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Pressure Vessel & Boiler Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often do pressure vessels and boilers need inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection frequency varies by jurisdiction and equipment type. Generally, boilers require annual external and periodic internal inspections. Pressure vessels typically need inspection every 2-3 years for external examination and 6-10 years for internal inspection, depending on service conditions and local regulations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if equipment fails inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>If equipment fails inspection, it must be removed from service until necessary repairs or modifications are completed. We provide detailed recommendations for corrective actions and can oversee repair work to ensure code compliance before returning equipment to service.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can inspections be performed during operation?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Some external inspections can be performed during operation, but internal inspections typically require equipment shutdown. We work with your operations team to minimize downtime and can coordinate multiple inspections during planned outages.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive inspection reports including findings, recommendations, NDT results, photographs, and official inspection certificates required for regulatory compliance, insurance purposes, and equipment records.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide emergency inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide emergency inspection services for equipment failures, damage assessment, and urgent compliance needs. Our certified inspectors can respond quickly to minimize downtime and ensure safe operation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are your inspectors authorized by regulatory bodies?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our inspectors hold ASME Authorized Inspector commissions and API certifications. They are recognized by regulatory authorities and insurance companies for official inspection and certification purposes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you help with fitness-for-service evaluations?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide API 579 fitness-for-service assessments to evaluate whether equipment with known defects can continue safe operation. This includes remaining life calculations and operating condition recommendations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What industries do you serve?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We serve petrochemical, chemical processing, power generation, manufacturing, food processing, pharmaceutical, and other industries requiring pressure vessel and boiler inspection services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Equipment Safety & Compliance</h2>
                <p>Contact our certified inspectors for comprehensive pressure vessel and boiler inspection services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:pressure@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Inspection Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> ASME Authorized Inspectors</span>
                    <span><i class="fas fa-check"></i> Emergency Services Available</span>
                    <span><i class="fas fa-check"></i> Complete Documentation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Fire & Safety Services</h2>
                <p>Comprehensive safety solutions for industrial and commercial applications</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/fire-safety-equipment/marine-boiler-inspections.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Marine Boiler Inspections</h3>
                    <p>Specialized marine vessel boiler and safety equipment inspections</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/safety-valve-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-valve"></i>
                    </div>
                    <h3>Safety Valve Testing</h3>
                    <p>Pressure safety valve testing, calibration, and certification services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT Inspection</h3>
                    <p>Advanced ultrasonic testing for pressure vessel and weld inspection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Conventional UT for thickness measurement and flaw detection</p>
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