<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Marine Boiler Inspections & Fire Safety Equipment | Alpha Sonix NDT Solutions";
$meta_description = "Comprehensive marine boiler inspections, fire safety equipment testing, and maritime compliance services. Certified inspectors for vessel safety, boiler efficiency, and regulatory compliance across commercial and offshore fleets.";
$meta_keywords = "marine boiler inspection, fire safety equipment testing, maritime safety inspection, vessel boiler service, marine steam boiler, fire detection systems, safety equipment certification, ship boiler inspection, maritime compliance";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/fire-safety-equipment.php";
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
    <meta property="og:image" content="/www/assets/images/services/marine-boiler-og.jpg">
    
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
        "serviceType": "Marine Boiler Inspections & Fire Safety Equipment",
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
        "description": "Professional marine boiler inspections and fire safety equipment testing services for maritime vessels, ensuring compliance with international maritime safety standards."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/marine/marine-boiler1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Fire Safety Equipment</span>
                </div>
                <h1 class="page-title">Marine Boiler Inspections & Fire Safety Equipment</h1>
                <p class="page-subtitle">Comprehensive safety inspections for marine vessels—ensuring boiler efficiency, fire protection systems, and full maritime compliance</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> SOLAS / MLC Compliance</span>
                    <span class="badge"><i class="fas fa-ship"></i> All Vessel Types</span>
                    <span class="badge"><i class="fas fa-clock"></i> 24/7 Emergency Response</span>
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
                    <h3>Boiler Safety Compliance</h3>
                    <p>Thorough inspection of marine boilers, steam systems, and pressure vessels to ensure safe operation and regulatory compliance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Fire Protection Systems</h3>
                    <p>Complete testing of fire detection, suppression, and emergency systems to meet IMO and flag state requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Preventive Maintenance</h3>
                    <p>Scheduled inspections and maintenance programs to prevent failures, extend equipment life, and maintain operational efficiency.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Certification Support</h3>
                    <p>Complete documentation and certification assistance for class surveys, port state control, and regulatory inspections.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS MARINE BOILER INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MARITIME SAFETY SERVICES</span>
                    <h2>What is Marine Boiler Inspection?</h2>
                    <p class="lead">Marine boiler inspection is a comprehensive safety and compliance service that ensures the proper functioning of steam boilers, fire safety equipment, and related systems aboard maritime vessels.</p>
                    
                    <p>Our certified marine engineers and safety specialists conduct thorough examinations of boiler components, pressure vessels, steam lines, fire detection systems, and emergency equipment to verify compliance with international maritime standards including SOLAS, MARPOL, and flag state regulations.</p>

                    <p>These inspections are critical for vessel safety, crew protection, environmental compliance, and maintaining valid certificates of operation. Regular inspections help prevent catastrophic failures, reduce downtime, and ensure continuous maritime operations.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Regulatory Compliance</strong>
                                <p>Ensure full compliance with IMO, SOLAS, class society, and flag state requirements for safe vessel operation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Safety System Verification</strong>
                                <p>Comprehensive testing of fire detection, suppression systems, emergency shutdown procedures, and safety interlocks.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Operational Efficiency</strong>
                                <p>Optimize boiler performance, fuel efficiency, and system reliability through detailed technical assessments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Risk Mitigation</strong>
                                <p>Identify potential hazards, wear patterns, and maintenance requirements before they become critical failures.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-anchor"></i>
                        <div>
                            <strong>Maritime Expertise:</strong>
                            <p>Our marine engineers combine deep technical knowledge with practical sea-going experience to deliver inspection services that support safe, efficient vessel operations and regulatory compliance.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#services" class="btn btn-secondary">View Services</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/marine/boiler-inspection.jpg" alt="Marine Boiler Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional marine boiler inspection ensuring safety and compliance</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Vessels Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Compliance Rate</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Emergency Support</span>
                        </div>
                    </div>
                    
                    <div class="marine-benefits">
                        <h4><i class="fas fa-star"></i> Maritime Advantages</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> SOLAS & IMO compliance assurance</li>
                            <li><i class="fas fa-check"></i> Reduced insurance premiums</li>
                            <li><i class="fas fa-check"></i> Prevented vessel detentions</li>
                            <li><i class="fas fa-check"></i> Extended equipment lifespan</li>
                            <li><i class="fas fa-check"></i> Enhanced crew safety</li>
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
                <span class="section-label">WHY MARINE INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Marine Boiler Inspection</h2>
                <p>Protect your vessel, crew, and operations with comprehensive safety inspections</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Meet all international maritime safety standards, flag state requirements, and classification society rules to maintain valid operating certificates.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Crew Safety</h3>
                    <p>Ensure the safety of maritime personnel through properly functioning safety systems, emergency equipment, and hazard prevention measures.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Cost Prevention</h3>
                    <p>Avoid expensive emergency repairs, vessel detentions, and operational delays through proactive inspection and maintenance programs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environmental Protection</h3>
                    <p>Prevent environmental incidents through proper maintenance of emission control systems, waste management, and spill prevention equipment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Operational Efficiency</h3>
                    <p>Optimize fuel consumption, reduce maintenance costs, and improve overall vessel performance through systematic inspection and tuning.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Insurance Benefits</h3>
                    <p>Demonstrate proactive safety management to insurers and potentially reduce premiums through documented compliance and maintenance records.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">VESSEL TYPES & APPLICATIONS</span>
                <h2>Marine Vessels We Serve</h2>
                <p>Comprehensive inspection services for all types of maritime vessels and offshore installations</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="commercial">Commercial Vessels</button>
                    <button class="tab-btn" data-tab="offshore">Offshore & Oil Rigs</button>
                    <button class="tab-btn" data-tab="naval">Naval & Government</button>
                    <button class="tab-btn" data-tab="fishing">Fishing & Workboats</button>
                </div>

                <div class="tabs-content">
                    <!-- Commercial Vessels Tab -->
                    <div class="tab-panel active" id="commercial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/commercial-vessel.jpg" alt="Commercial Vessel Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Commercial Cargo & Passenger Vessels</h3>
                                <p>Complete safety inspections for merchant marine vessels, ensuring compliance with international shipping regulations and maintaining operational excellence.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Container ships and bulk carriers</li>
                                    <li><i class="fas fa-check"></i> Tankers (oil, chemical, LNG/LPG)</li>
                                    <li><i class="fas fa-check"></i> Passenger ferries and cruise ships</li>
                                    <li><i class="fas fa-check"></i> RoRo vessels and car carriers</li>
                                    <li><i class="fas fa-check"></i> General cargo and multipurpose vessels</li>
                                    <li><i class="fas fa-check"></i> Refrigerated cargo ships (reefers)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">MARPOL</span>
                                    <span class="standard-tag">MLC 2006</span>
                                    <span class="standard-tag">ISM Code</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offshore Tab -->
                    <div class="tab-panel" id="offshore">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/offshore-rig.jpg" alt="Offshore Platform Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Offshore Platforms & Oil Rigs</h3>
                                <p>Specialized safety inspections for offshore installations, drilling rigs, and support vessels operating in challenging marine environments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Fixed and floating oil platforms</li>
                                    <li><i class="fas fa-check"></i> Drilling rigs (jack-up, semi-submersible)</li>
                                    <li><i class="fas fa-check"></i> FPSO and FSU vessels</li>
                                    <li><i class="fas fa-check"></i> Offshore support vessels (OSV)</li>
                                    <li><i class="fas fa-check"></i> Anchor handling and supply boats</li>
                                    <li><i class="fas fa-check"></i> Wind farm installation vessels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">MODU Code</span>
                                    <span class="standard-tag">API Standards</span>
                                    <span class="standard-tag">NORSOK</span>
                                    <span class="standard-tag">DNV Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Naval Tab -->
                    <div class="tab-panel" id="naval">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/naval-vessel.jpg" alt="Naval Vessel Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Naval & Government Vessels</h3>
                                <p>Specialized inspection services for military and government vessels, ensuring readiness and compliance with naval safety standards.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Naval warships and patrol vessels</li>
                                    <li><i class="fas fa-check"></i> Coast guard cutters and boats</li>
                                    <li><i class="fas fa-check"></i> Government research vessels</li>
                                    <li><i class="fas fa-check"></i> Military transport and logistics ships</li>
                                    <li><i class="fas fa-check"></i> Naval auxiliary and support vessels</li>
                                    <li><i class="fas fa-check"></i> Training and academy ships</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">Naval Standards</span>
                                    <span class="standard-tag">Military Specifications</span>
                                    <span class="standard-tag">NATO STANAG</span>
                                    <span class="standard-tag">ASTM Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fishing Tab -->
                    <div class="tab-panel" id="fishing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/fishing-vessel.jpg" alt="Fishing Vessel Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Fishing & Small Commercial Vessels</h3>
                                <p>Safety inspections for fishing fleets and small commercial vessels, ensuring crew safety and regulatory compliance in demanding marine operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Commercial fishing trawlers</li>
                                    <li><i class="fas fa-check"></i> Purse seiners and long-liners</li>
                                    <li><i class="fas fa-check"></i> Crab and lobster boats</li>
                                    <li><i class="fas fa-check"></i> Aquaculture support vessels</li>
                                    <li><i class="fas fa-check"></i> Tugboats and pilot boats</li>
                                    <li><i class="fas fa-check"></i> Workboats and service vessels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">Torremolinos Protocol</span>
                                    <span class="standard-tag">FAO Guidelines</span>
                                    <span class="standard-tag">Local Maritime Authority</span>
                                    <span class="standard-tag">Flag State Requirements</span>
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
                <span class="section-label">COMPREHENSIVE MARINE SERVICES</span>
                <h2>Our Fire & Safety Equipment Services</h2>
                <p>Complete inspection, testing, and certification services for marine safety equipment and systems</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Boiler & Steam System Inspection</h3>
                    <p>Comprehensive examination of marine boilers, steam generators, and associated systems for safety and efficiency compliance.</p>
                    <ul>
                        <li>Pressure vessel integrity testing</li>
                        <li>Steam line and fitting inspection</li>
                        <li>Safety valve testing and calibration</li>
                        <li>Combustion system evaluation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Fire Detection & Suppression Systems</h3>
                    <p>Testing and certification of fire protection equipment including detection systems, extinguishing systems, and emergency response equipment.</p>
                    <ul>
                        <li>Smoke and heat detector testing</li>
                        <li>Fixed fire suppression systems</li>
                        <li>CO2 and foam system inspection</li>
                        <li>Emergency alarm system verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Safety Equipment Certification</h3>
                    <p>Complete testing and certification of life-saving appliances and personal safety equipment according to maritime standards.</p>
                    <ul>
                        <li>Lifeboats and life raft inspection</li>
                        <li>Emergency breathing apparatus</li>
                        <li>Personal flotation devices</li>
                        <li>Emergency lighting systems</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Pressure Vessel & Tank Inspection</h3>
                    <p>Detailed inspection of pressure vessels, fuel tanks, and storage systems for structural integrity and safety compliance.</p>
                    <ul>
                        <li>NDT testing of vessel walls</li>
                        <li>Tank integrity assessments</li>
                        <li>Corrosion evaluation</li>
                        <li>Leak testing and certification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Emergency Response Systems</h3>
                    <p>Testing and verification of emergency shutdown systems, alarm networks, and crisis response equipment.</p>
                    <ul>
                        <li>Emergency shutdown system testing</li>
                        <li>Communication system verification</li>
                        <li>Evacuation route lighting</li>
                        <li>Emergency power system checks</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Regulatory Compliance Support</h3>
                    <p>Complete documentation and certification assistance for class surveys, flag state inspections, and port state control.</p>
                    <ul>
                        <li>Class society survey preparation</li>
                        <li>Certificate renewal assistance</li>
                        <li>Compliance documentation</li>
                        <li>Regulatory liaison services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & CAPABILITIES ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">INSPECTION CAPABILITIES</span>
                    <h2>Advanced Marine Inspection Equipment</h2>
                    <p>State-of-the-art inspection equipment and certified testing capabilities for comprehensive marine safety assessments.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>NDT Testing Equipment</h4>
                                <p>Complete range of non-destructive testing equipment for pressure vessel, boiler, and structural inspections including UT, MT, PT, and radiography.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Thermal & Gas Detection</h4>
                                <p>Advanced thermal imaging and gas detection equipment for fire safety system testing and combustion analysis.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Pressure Testing Systems</h4>
                                <p>Precision pressure testing equipment for boilers, pressure vessels, and safety systems including hydrostatic and pneumatic testing capabilities.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Remote Visual Inspection</h4>
                                <p>Borescopes and remote inspection equipment for internal examination of boilers, tanks, and confined spaces without dismantling.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Marine Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/solas-cert.png" alt="SOLAS Compliance">
                            <img src="/www/assets/images/certs/marpol-cert.png" alt="MARPOL Compliance">
                            <img src="/www/assets/images/certs/class-cert.png" alt="Class Society">
                            <img src="/www/assets/images/certs/maritime-cert.png" alt="Maritime Authority">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/marine/inspection-equipment.jpg" alt="Marine Inspection Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>See Marine Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>SOLAS Certified Equipment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Class Society Approved</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Emergency Response Ready</span>
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
                <h2>Your Trusted Marine Safety Partner</h2>
                <p>Experienced marine engineers and safety specialists committed to vessel safety and regulatory compliance</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Certified Marine Engineers</h3>
                    <p>Qualified marine engineers and safety specialists with extensive sea-going experience and deep knowledge of maritime regulations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>International Standards</h3>
                    <p>Full compliance with IMO, SOLAS, MARPOL, and flag state requirements ensuring global acceptance of our inspection certificates.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>24/7 Emergency Response</h3>
                    <p>Round-the-clock emergency inspection services to support vessels in distress and urgent regulatory compliance needs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>All Vessel Types</h3>
                    <p>Comprehensive experience across commercial, offshore, naval, and fishing vessels with specialized knowledge for each sector.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety Excellence</h3>
                    <p>Proven track record of zero safety incidents and 100% compliance rate across thousands of vessel inspections.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Trusted Partnerships</h3>
                    <p>Established relationships with major shipping companies, class societies, and maritime authorities worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Marine Boiler Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should marine boilers be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Marine boiler inspection frequency depends on vessel type, flag state requirements, and class society rules. Typically, annual inspections are required with more comprehensive surveys every 2.5-5 years. Emergency or damage-related inspections may be required at any time.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documents are required for marine safety inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required documents include vessel certificates, previous inspection reports, maintenance records, equipment manuals, safety management system documentation, and crew training records. We help prepare all necessary documentation for regulatory compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can inspections be performed while the vessel is in operation?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Many routine inspections can be performed while underway, but certain tests require the vessel to be in port or at anchor for safety reasons. We coordinate with vessel operations to minimize disruption while ensuring thorough inspection coverage.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if equipment fails inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>If equipment fails inspection, we provide detailed recommendations for repairs or replacements. Critical safety failures may result in detention until resolved. We work closely with vessel operators to expedite repairs and minimize operational impact.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide emergency inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide 24/7 emergency inspection services for vessels experiencing equipment failures, damage, or urgent regulatory compliance needs. Our emergency response team can mobilize to any major port worldwide.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are your inspections recognized internationally?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our inspections and certifications are recognized by major flag states, class societies, and port authorities worldwide. We maintain authorizations and approvals from leading maritime regulatory bodies.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does a typical marine safety inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection duration varies by vessel size and scope of work. Routine annual inspections typically take 1-3 days, while comprehensive surveys may require 5-10 days. We provide detailed time estimates during planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you help with class society surveys?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide comprehensive support for class society surveys including preparation, attendance, and follow-up actions. Our team is familiar with requirements from all major classification societies worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Vessel's Safety & Compliance</h2>
                <p>Contact our marine safety experts for comprehensive inspection services and regulatory compliance support</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:marine@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Marine Division</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Emergency Response Available</span>
                    <span><i class="fas fa-check"></i> Global Port Coverage</span>
                    <span><i class="fas fa-check"></i> Certified Marine Engineers</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Fire & Safety Services</h2>
                <p>Comprehensive safety solutions for marine and industrial applications</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/fire-safety-equipment/fire-extinguisher-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Fire Extinguisher Testing</h3>
                    <p>Testing and certification of portable and fixed fire extinguishing systems</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/safety-valve-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-valve"></i>
                    </div>
                    <h3>Safety Valve Testing</h3>
                    <p>Pressure safety valve testing and calibration services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/emergency-equipment.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3>Emergency Equipment</h3>
                    <p>Life-saving appliances and emergency equipment inspection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/infrared-thermography.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Thermal Inspection</h3>
                    <p>Infrared thermography for equipment condition monitoring</p>
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