<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Lifting Gear & Davit Inspection Services | Marine Crane & Safety Equipment Testing | Alpha Sonix NDT Solutions";
$meta_description = "Professional lifting gear and davit inspection services for marine vessels. Load testing, certification, and safety compliance for cranes, winches, davits, and life-saving appliance deployment systems.";
$meta_keywords = "lifting gear inspection, davit inspection, marine crane inspection, lifeboat davit testing, winch inspection, lifting equipment certification, load testing, SOLAS compliance, marine safety equipment";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/lifting-gear-davit.php";
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
    <meta property="og:image" content="/www/assets/images/services/lifting-gear-og.jpg">
    
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
        "serviceType": "Lifting Gear & Davit Inspection Services",
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
        "description": "Professional lifting gear and davit inspection services ensuring safety compliance and operational reliability for marine lifting equipment and life-saving appliances."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/marine/lifting-gear1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Lifting Gear & Davit</span>
                </div>
                <h1 class="page-title">Lifting Gear & Davit Inspection</h1>
                <p class="page-subtitle">Comprehensive inspection, load testing, and certification services for marine lifting equipment and life-saving appliance deployment systems</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-weight-hanging"></i> Load Testing Certified</span>
                    <span class="badge"><i class="fas fa-life-ring"></i> SOLAS Compliant</span>
                    <span class="badge"><i class="fas fa-certificate"></i> Class Society Approved</span>
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
                        <i class="fas fa-crane"></i>
                    </div>
                    <h3>Crane & Winch Inspection</h3>
                    <p>Comprehensive examination of marine cranes, winches, and cargo handling equipment for structural integrity and operational safety.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3>Davit System Testing</h3>
                    <p>Specialized inspection and load testing of lifeboat davits, rescue boat davits, and life-saving appliance deployment systems.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <h3>Load Testing Services</h3>
                    <p>Certified load testing and proof load verification to ensure lifting equipment meets safety standards and operational requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Safety Certification</h3>
                    <p>Complete documentation and certification services for regulatory compliance and maritime safety equipment requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS LIFTING GEAR & DAVIT INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MARINE LIFTING EQUIPMENT SERVICES</span>
                    <h2>What is Lifting Gear & Davit Inspection?</h2>
                    <p class="lead">Lifting gear and davit inspection is a critical safety service that evaluates marine lifting equipment, cranes, winches, and life-saving appliance deployment systems to ensure safe operation and regulatory compliance.</p>
                    
                    <p>Our certified marine engineers and lifting equipment specialists conduct comprehensive examinations of all types of marine lifting gear including cargo cranes, davit systems, winches, and associated equipment. These inspections involve structural assessment, operational testing, load verification, and safety system evaluation.</p>

                    <p>Regular inspection programs are essential for preventing equipment failures, ensuring crew safety during emergency operations, maintaining regulatory compliance, and optimizing equipment performance. These services support both routine maintenance schedules and mandatory certification requirements.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Structural Integrity Assessment</strong>
                                <p>Comprehensive evaluation of lifting equipment structure, support frames, and mounting systems for safe load capacity.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Operational Testing</strong>
                                <p>Functional testing of lifting mechanisms, control systems, and safety devices to ensure reliable emergency deployment.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Load Verification</strong>
                                <p>Certified proof load testing to verify equipment capacity and compliance with design specifications and safety standards.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Safety System Compliance</strong>
                                <p>Verification of safety devices, emergency controls, and protective systems according to SOLAS and maritime regulations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-anchor"></i>
                        <div>
                            <strong>Marine Safety Expertise:</strong>
                            <p>Our team combines marine engineering knowledge with lifting equipment expertise to ensure your vessel's lifting gear meets the highest safety standards for both routine operations and emergency situations.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/marine/davit-inspection.jpg" alt="Davit System Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional davit system inspection ensuring life-saving equipment reliability</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1200+</span>
                            <span class="stat-label">Equipment Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Safety Record</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Emergency Response</span>
                        </div>
                    </div>
                    
                    <div class="lifting-gear-benefits">
                        <h4><i class="fas fa-star"></i> Safety Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Crew safety assurance</li>
                            <li><i class="fas fa-check"></i> Emergency equipment reliability</li>
                            <li><i class="fas fa-check"></i> Regulatory compliance</li>
                            <li><i class="fas fa-check"></i> Equipment longevity</li>
                            <li><i class="fas fa-check"></i> Operational confidence</li>
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
                <span class="section-label">WHY LIFTING GEAR INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Lifting Equipment Inspection</h2>
                <p>Ensure crew safety, regulatory compliance, and operational reliability</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Crew Safety</h3>
                    <p>Ensure the safety of crew members during emergency situations and routine operations through reliable lifting equipment and davit systems.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3>Emergency Readiness</h3>
                    <p>Guarantee reliable operation of life-saving appliance deployment systems when they are needed most during emergency evacuations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Meet SOLAS, MLC, and flag state requirements for lifting equipment inspection, certification, and operational readiness.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Prevention</h3>
                    <p>Avoid expensive emergency repairs, equipment replacement, and potential liability through proactive inspection and maintenance programs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Operational Efficiency</h3>
                    <p>Optimize lifting equipment performance, reduce downtime, and maintain operational capability through systematic inspection programs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-umbrella"></i>
                    </div>
                    <h3>Insurance Coverage</h3>
                    <p>Maintain insurance eligibility and demonstrate due diligence through documented inspection programs and safety compliance records.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">LIFTING EQUIPMENT TYPES & APPLICATIONS</span>
                <h2>Lifting Gear & Equipment We Inspect</h2>
                <p>Comprehensive inspection services for all types of marine lifting and life-saving equipment</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="davits">Davit Systems</button>
                    <button class="tab-btn" data-tab="cranes">Marine Cranes</button>
                    <button class="tab-btn" data-tab="winches">Winches & Capstans</button>
                    <button class="tab-btn" data-tab="cargo">Cargo Equipment</button>
                </div>

                <div class="tabs-content">
                    <!-- Davit Systems Tab -->
                    <div class="tab-panel active" id="davits">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/lifeboat-davits.jpg" alt="Lifeboat Davit Systems">
                            </div>
                            <div class="tab-text">
                                <h3>Davit Systems & Life-Saving Equipment</h3>
                                <p>Comprehensive inspection and testing of all types of davit systems used for deploying and recovering life-saving appliances and rescue equipment.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Lifeboat davits (gravity, free-fall, conventional)</li>
                                    <li><i class="fas fa-check"></i> Rescue boat davits and launching systems</li>
                                    <li><i class="fas fa-check"></i> Life raft davits and deployment systems</li>
                                    <li><i class="fas fa-check"></i> Pilot ladder and accommodation ladder winches</li>
                                    <li><i class="fas fa-check"></i> Emergency equipment hoists and cranes</li>
                                    <li><i class="fas fa-check"></i> Gangway and boarding equipment davits</li>
                                    <li><i class="fas fa-check"></i> MOB (Man Overboard) recovery systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS Chapter III</span>
                                    <span class="standard-tag">LSA Code</span>
                                    <span class="standard-tag">MLC 2006</span>
                                    <span class="standard-tag">IMO Guidelines</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marine Cranes Tab -->
                    <div class="tab-panel" id="cranes">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/marine-cranes.jpg" alt="Marine Crane Systems">
                            </div>
                            <div class="tab-text">
                                <h3>Marine Cranes & Lifting Systems</h3>
                                <p>Expert inspection of ship cranes, offshore cranes, and specialized lifting equipment for cargo handling and marine operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Ship cargo cranes and deck cranes</li>
                                    <li><i class="fas fa-check"></i> Offshore pedestal and knuckle-boom cranes</li>
                                    <li><i class="fas fa-check"></i> Gantry cranes and portal cranes</li>
                                    <li><i class="fas fa-check"></i> Provision cranes and stores handling equipment</li>
                                    <li><i class="fas fa-check"></i> Heavy lift cranes and specialized equipment</li>
                                    <li><i class="fas fa-check"></i> Container handling cranes and spreaders</li>
                                    <li><i class="fas fa-check"></i> A-frame systems and lifting structures</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">EN 13852</span>
                                    <span class="standard-tag">API 2C</span>
                                    <span class="standard-tag">DNV Standards</span>
                                    <span class="standard-tag">FEM Rules</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Winches & Capstans Tab -->
                    <div class="tab-panel" id="winches">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/marine-winches.jpg" alt="Marine Winch Systems">
                            </div>
                            <div class="tab-text">
                                <h3>Winches & Capstan Systems</h3>
                                <p>Comprehensive inspection of winch systems, capstans, and cable handling equipment for safe and reliable marine operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Anchor windlasses and mooring winches</li>
                                    <li><i class="fas fa-check"></i> Cargo winches and deck machinery</li>
                                    <li><i class="fas fa-check"></i> Towing winches and fairlead systems</li>
                                    <li><i class="fas fa-check"></i> Fishing gear winches and net drums</li>
                                    <li><i class="fas fa-check"></i> Research equipment winches (CTD, trawl)</li>
                                    <li><i class="fas fa-check"></i> Tender and boat handling winches</li>
                                    <li><i class="fas fa-check"></i> Capstans and warping drums</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ISO 3730</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                    <span class="standard-tag">OCIMF Guidelines</span>
                                    <span class="standard-tag">Flag State Requirements</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cargo Equipment Tab -->
                    <div class="tab-panel" id="cargo">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/cargo-equipment.jpg" alt="Cargo Handling Equipment">
                            </div>
                            <div class="tab-text">
                                <h3>Cargo Handling & Specialized Equipment</h3>
                                <p>Specialized inspection services for cargo handling equipment, lifting accessories, and marine-specific lifting applications.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Container spreaders and twist locks</li>
                                    <li><i class="fas fa-check"></i> Cargo slings, shackles, and rigging hardware</li>
                                    <li><i class="fas fa-check"></i> Hatch cover lifting and operating systems</li>
                                    <li><i class="fas fa-check"></i> Ramp and door operating mechanisms</li>
                                    <li><i class="fas fa-check"></i> ROV and diving equipment handling systems</li>
                                    <li><i class="fas fa-check"></i> Scientific equipment deployment systems</li>
                                    <li><i class="fas fa-check"></i> Lifting beams, spreader bars, and accessories</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">CSS Code</span>
                                    <span class="standard-tag">IMDG Code</span>
                                    <span class="standard-tag">EN 13155</span>
                                    <span class="standard-tag">ASME B30 Series</span>
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
                <h2>Our Lifting Gear & Davit Services</h2>
                <p>Complete inspection, testing, and certification services for marine lifting equipment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Structural Inspection</h3>
                    <p>Comprehensive examination of lifting equipment structure, support frames, and mounting systems using advanced NDT techniques.</p>
                    <ul>
                        <li>Visual and dimensional inspection</li>
                        <li>NDT testing (MT, PT, UT)</li>
                        <li>Structural integrity assessment</li>
                        <li>Fatigue and wear analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Load Testing & Verification</h3>
                    <p>Certified proof load testing and static load verification to ensure equipment meets design capacity and safety requirements.</p>
                    <ul>
                        <li>Proof load testing to 125% SWL</li>
                        <li>Dynamic load testing</li>
                        <li>Load monitoring and documentation</li>
                        <li>Capacity verification certification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Operational Testing</h3>
                    <p>Functional testing of lifting mechanisms, control systems, and safety devices to ensure reliable operation and emergency deployment.</p>
                    <ul>
                        <li>Mechanical system operation</li>
                        <li>Control system functionality</li>
                        <li>Safety device testing</li>
                        <li>Emergency operation procedures</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Wire Rope & Rigging Inspection</h3>
                    <p>Detailed examination of wire ropes, chains, slings, and rigging hardware for wear, damage, and compliance with safety standards.</p>
                    <ul>
                        <li>Wire rope condition assessment</li>
                        <li>Chain and shackle inspection</li>
                        <li>Rigging hardware evaluation</li>
                        <li>Replacement recommendations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Safety System Verification</h3>
                    <p>Comprehensive testing of safety devices, emergency controls, and protective systems according to maritime safety regulations.</p>
                    <ul>
                        <li>Overload protection systems</li>
                        <li>Emergency stop mechanisms</li>
                        <li>Limit switches and sensors</li>
                        <li>Alarm and warning systems</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Certification & Documentation</h3>
                    <p>Complete certification services and documentation for regulatory compliance, class society requirements, and safety management systems.</p>
                    <ul>
                        <li>Inspection certificates</li>
                        <li>Load test certificates</li>
                        <li>Compliance documentation</li>
                        <li>Maintenance recommendations</li>
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
                    <span class="section-label">ADVANCED TESTING TECHNOLOGY</span>
                    <h2>Lifting Equipment Testing Capabilities</h2>
                    <p>State-of-the-art load testing equipment and NDT capabilities for comprehensive assessment of marine lifting gear and davit systems.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-weight-hanging"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Load Testing Equipment</h4>
                                <p>Certified load testing equipment including water bags, load cells, and calibrated test weights for accurate capacity verification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>NDT Testing Systems</h4>
                                <p>Complete range of NDT equipment for structural assessment including magnetic particle, penetrant, and ultrasonic testing.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Measurement & Inspection Tools</h4>
                                <p>Precision measurement tools, wire rope inspection equipment, and dimensional verification instruments for detailed assessment.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation Systems</h4>
                                <p>Digital documentation systems for comprehensive record keeping, certificate generation, and regulatory compliance reporting.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Accreditations</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/solas-cert.png" alt="SOLAS Certified">
                            <img src="/www/assets/images/certs/class-society-cert.png" alt="Class Society">
                            <img src="/www/assets/images/certs/lifting-cert.png" alt="Lifting Equipment">
                            <img src="/www/assets/images/certs/load-test-cert.png" alt="Load Testing">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/marine/load-testing-equipment.jpg" alt="Load Testing Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Load Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>SOLAS Compliance Testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Certified Load Testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Class Society Approved</span>
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
                <h2>Your Trusted Marine Lifting Equipment Partner</h2>
                <p>Expert marine engineers and certified testing capabilities for comprehensive lifting equipment inspection</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>Lifting Equipment Specialists</h3>
                    <p>Certified lifting equipment engineers and marine specialists with extensive experience in davit systems, cranes, and safety equipment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified Testing Capability</h3>
                    <p>Fully certified load testing capabilities with calibrated equipment and documented procedures for accurate capacity verification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3>Safety System Expertise</h3>
                    <p>Deep understanding of maritime safety regulations and life-saving appliance requirements for critical emergency equipment inspection.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Service Coverage</h3>
                    <p>Worldwide inspection services with mobile testing equipment and capability to support vessels in any major port or shipyard.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Scheduling</h3>
                    <p>Accommodation of vessel schedules including dry dock periods, in-service inspections, and emergency certification requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Complete understanding of SOLAS, MLC, and class society requirements ensuring full compliance and acceptance by authorities worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Lifting Gear & Davit Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should lifting equipment be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection frequency depends on equipment type and usage. Davit systems typically require annual inspections with 5-year thorough examinations. Cargo cranes may need inspection every 12-24 months. Emergency life-saving equipment should be tested before each voyage and inspected annually.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is involved in davit load testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Davit load testing involves proof testing to 125% of the safe working load using certified test weights or equivalent loading. This includes testing the complete deployment sequence, winch operation, and all safety systems under load conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can inspections be performed while the vessel is operational?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Many routine inspections can be performed during operations, but load testing typically requires specific conditions and may need to be scheduled during port stays. We coordinate with vessel operations to minimize disruption while ensuring thorough testing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if equipment fails inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Failed equipment must be removed from service until repairs are completed and re-testing performed. We provide detailed recommendations for corrective actions and can coordinate with authorized repair facilities to minimize vessel downtime.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide emergency inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide 24/7 emergency inspection and certification services for urgent compliance needs, equipment damage assessment, and emergency repair verification to get vessels back in service quickly.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive inspection reports including structural assessment, load test certificates, operational test results, photographic documentation, and official certificates required for regulatory compliance and class society acceptance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are your inspectors authorized by maritime authorities?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our inspectors hold appropriate certifications and authorizations from maritime authorities and class societies for lifting equipment inspection, load testing, and safety equipment certification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you help with equipment maintenance planning?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide maintenance planning support including condition-based maintenance recommendations, spare parts identification, and inspection scheduling to optimize equipment reliability and compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Lifting Equipment Safety & Compliance</h2>
                <p>Contact our lifting equipment specialists for comprehensive inspection and certification services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:lifting@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Lifting Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Certified Load Testing</span>
                    <span><i class="fas fa-check"></i> SOLAS Compliance</span>
                    <span><i class="fas fa-check"></i> Emergency Response Available</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Marine Services</h2>
                <p>Comprehensive marine safety and inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/fire-safety-equipment/marine-boiler-inspections.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Marine Boiler Inspections</h3>
                    <p>Steam boiler and fire safety equipment inspections for marine vessels</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/mt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Crack detection in lifting equipment and structural components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/pt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye-dropper"></i>
                    </div>
                    <h3>Penetrant Testing</h3>
                    <p>Surface crack detection in non-magnetic lifting components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing</h3>
                    <p>Comprehensive visual inspection of lifting equipment and rigging</p>
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