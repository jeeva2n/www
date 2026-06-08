<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Propeller & Shaft Inspection Services | Marine Propulsion System Inspections | Alpha Sonix NDT Solutions";
$meta_description = "Professional propeller and shaft inspection services for marine vessels. Comprehensive NDT testing, alignment checks, bearing assessment, and class society compliance for all types of marine propulsion systems.";
$meta_keywords = "propeller inspection, shaft inspection, marine propulsion inspection, propeller NDT, shaft alignment, stern tube inspection, marine bearing inspection, propulsion system survey, vessel shaft inspection";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/propeller-shaft-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/propeller-shaft-og.jpg">
    
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
        "serviceType": "Propeller & Shaft Inspection Services",
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
        "description": "Professional propeller and shaft inspection services for marine vessels ensuring propulsion system integrity, performance, and safety compliance."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/marine/propeller-shaft1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Propeller & Shaft</span>
                </div>
                <h1 class="page-title">Propeller & Shaft Inspection</h1>
                <p class="page-subtitle">Comprehensive marine propulsion system inspections ensuring optimal performance, safety, and regulatory compliance</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-cog"></i> Propulsion Systems</span>
                    <span class="badge"><i class="fas fa-water"></i> Underwater Inspections</span>
                    <span class="badge"><i class="fas fa-balance-scale"></i> Alignment Services</span>
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
                        <i class="fas fa-fan"></i>
                    </div>
                    <h3>Propeller Inspection</h3>
                    <p>Comprehensive assessment of propeller blades, hub, keyways, and mounting systems for damage, wear, and performance optimization.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <h3>Shaft System Analysis</h3>
                    <p>Detailed examination of propeller shafts, intermediate shafts, and coupling systems using advanced NDT techniques and alignment verification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Bearing & Seal Inspection</h3>
                    <p>Thorough evaluation of shaft bearings, stern tube seals, and lubrication systems to ensure reliable operation and prevent failures.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Class Compliance</h3>
                    <p>Full compliance with classification society requirements and maritime regulations for propulsion system safety and certification.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS PROPELLER & SHAFT INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MARINE PROPULSION SERVICES</span>
                    <h2>What is Propeller & Shaft Inspection?</h2>
                    <p class="lead">Propeller and shaft inspection is a specialized marine engineering service that evaluates the condition, performance, and safety of vessel propulsion systems through comprehensive examination and testing.</p>
                    
                    <p>Our certified marine engineers and NDT specialists conduct detailed assessments of propellers, shafting systems, bearings, seals, and associated components to ensure optimal propulsion efficiency and prevent catastrophic failures. These inspections utilize advanced NDT techniques, precision measurement tools, and underwater inspection capabilities.</p>

                    <p>Regular propulsion system inspections are essential for maintaining vessel performance, preventing costly breakdowns, ensuring regulatory compliance, and optimizing fuel efficiency. These services support both scheduled maintenance programs and emergency repair assessments.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Propeller Performance Analysis</strong>
                                <p>Comprehensive evaluation of blade condition, pitch accuracy, and hydrodynamic efficiency for optimal vessel performance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Shaft System Integrity</strong>
                                <p>Advanced NDT testing to detect fatigue cracking, wear patterns, and structural defects in critical shaft components.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Alignment & Vibration Analysis</strong>
                                <p>Precision measurement and analysis of shaft alignment, bearing clearances, and vibration characteristics.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Underwater Inspection Capability</strong>
                                <p>Professional underwater inspection services for in-water assessment without dry-docking requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-anchor"></i>
                        <div>
                            <strong>Marine Engineering Expertise:</strong>
                            <p>Our marine engineers combine deep propulsion system knowledge with advanced inspection techniques to deliver comprehensive assessments that ensure reliable vessel operation and performance optimization.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#services" class="btn btn-secondary">View Services</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/marine/propeller-inspection.jpg" alt="Propeller Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional propeller inspection ensuring optimal propulsion performance</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">800+</span>
                            <span class="stat-label">Propulsion Systems</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99%</span>
                            <span class="stat-label">Uptime Achieved</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Emergency Support</span>
                        </div>
                    </div>
                    
                    <div class="propulsion-benefits">
                        <h4><i class="fas fa-star"></i> Inspection Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Optimal fuel efficiency</li>
                            <li><i class="fas fa-check"></i> Reduced vibration and noise</li>
                            <li><i class="fas fa-check"></i> Extended component life</li>
                            <li><i class="fas fa-check"></i> Prevented catastrophic failures</li>
                            <li><i class="fas fa-check"></i> Class certification compliance</li>
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
                <span class="section-label">WHY PROPULSION INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Propeller & Shaft Inspection</h2>
                <p>Ensure propulsion reliability, performance, and safety through expert inspection services</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Performance Optimization</h3>
                    <p>Maximize propulsion efficiency, reduce fuel consumption, and improve vessel speed through proper propeller and shaft condition management.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Failure Prevention</h3>
                    <p>Prevent catastrophic shaft failures, propeller loss, and emergency repairs through early detection of fatigue, corrosion, and wear issues.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Savings</h3>
                    <p>Reduce maintenance costs, extend component life, and minimize unplanned downtime through proactive inspection and maintenance planning.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Vibration Reduction</h3>
                    <p>Minimize propulsion-related vibration and noise through proper shaft alignment, balancing, and propeller condition optimization.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environmental Compliance</h3>
                    <p>Support environmental regulations through optimized propulsion efficiency and reduced emissions from improved fuel consumption.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety Assurance</h3>
                    <p>Ensure crew and vessel safety through reliable propulsion system operation and prevention of mechanical failures at sea.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PROPULSION SYSTEMS & APPLICATIONS</span>
                <h2>Propulsion Systems We Inspect</h2>
                <p>Comprehensive inspection services for all types of marine propulsion configurations</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="conventional">Conventional Propulsion</button>
                    <button class="tab-btn" data-tab="azimuth">Azimuth Thrusters</button>
                    <button class="tab-btn" data-tab="podded">Podded Propulsion</button>
                    <button class="tab-btn" data-tab="waterjet">Waterjet Systems</button>
                </div>

                <div class="tabs-content">
                    <!-- Conventional Propulsion Tab -->
                    <div class="tab-panel active" id="conventional">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/conventional-propulsion.jpg" alt="Conventional Propulsion System">
                            </div>
                            <div class="tab-text">
                                <h3>Conventional Shaft & Propeller Systems</h3>
                                <p>Comprehensive inspection of traditional shaft-line propulsion systems including fixed pitch and controllable pitch propellers with conventional bearing arrangements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Fixed pitch propellers (FPP)</li>
                                    <li><i class="fas fa-check"></i> Controllable pitch propellers (CPP)</li>
                                    <li><i class="fas fa-check"></i> Propeller shafts and intermediate shafts</li>
                                    <li><i class="fas fa-check"></i> Stern tube bearings and seals</li>
                                    <li><i class="fas fa-check"></i> Thrust bearings and journal bearings</li>
                                    <li><i class="fas fa-check"></i> Shaft couplings and flanges</li>
                                    <li><i class="fas fa-check"></i> Gearbox output connections</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                    <span class="standard-tag">IMO Guidelines</span>
                                    <span class="standard-tag">ISO Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Azimuth Thrusters Tab -->
                    <div class="tab-panel" id="azimuth">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/azimuth-thruster.jpg" alt="Azimuth Thruster System">
                            </div>
                            <div class="tab-text">
                                <h3>Azimuth Thrusters & Z-Drives</h3>
                                <p>Specialized inspection services for azimuth thrusters, Z-drives, and steerable propulsion units used in offshore vessels, ferries, and specialized ships.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Azimuth thruster propellers and hubs</li>
                                    <li><i class="fas fa-check"></i> Steering mechanism and bearings</li>
                                    <li><i class="fas fa-check"></i> Vertical and horizontal shaft systems</li>
                                    <li><i class="fas fa-check"></i> Gear boxes and reduction units</li>
                                    <li><i class="fas fa-check"></i> Hydraulic and electric actuators</li>
                                    <li><i class="fas fa-check"></i> Thruster housing and structural connections</li>
                                    <li><i class="fas fa-check"></i> Underwater unit sealing systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">DNV Standards</span>
                                    <span class="standard-tag">ABS Rules</span>
                                    <span class="standard-tag">IEC Standards</span>
                                    <span class="standard-tag">Manufacturer Specs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Podded Propulsion Tab -->
                    <div class="tab-panel" id="podded">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/podded-propulsion.jpg" alt="Podded Propulsion System">
                            </div>
                            <div class="tab-text">
                                <h3>Podded Propulsion Systems</h3>
                                <p>Advanced inspection services for electric podded propulsion systems including Azipods and similar steerable propulsion units with integrated electric motors.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Podded unit propellers and blade systems</li>
                                    <li><i class="fas fa-check"></i> Electric motor housing and cooling</li>
                                    <li><i class="fas fa-check"></i> Steering mechanism and slew bearings</li>
                                    <li><i class="fas fa-check"></i> Power transmission systems</li>
                                    <li><i class="fas fa-check"></i> Pod housing and structural integrity</li>
                                    <li><i class="fas fa-check"></i> Electrical connections and sealing</li>
                                    <li><i class="fas fa-check"></i> Control and monitoring systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">IEC 60092</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                    <span class="standard-tag">IMO Standards</span>
                                    <span class="standard-tag">OEM Requirements</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Waterjet Systems Tab -->
                    <div class="tab-panel" id="waterjet">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/waterjet-system.jpg" alt="Waterjet Propulsion System">
                            </div>
                            <div class="tab-text">
                                <h3>Waterjet Propulsion Systems</h3>
                                <p>Comprehensive inspection of waterjet propulsion systems including impellers, casings, steering systems, and associated drive components.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Waterjet impellers and wear rings</li>
                                    <li><i class="fas fa-check"></i> Intake and nozzle assemblies</li>
                                    <li><i class="fas fa-check"></i> Steering and reversing mechanisms</li>
                                    <li><i class="fas fa-check"></i> Drive shafts and coupling systems</li>
                                    <li><i class="fas fa-check"></i> Pump housing and volute casings</li>
                                    <li><i class="fas fa-check"></i> Bearing systems and lubrication</li>
                                    <li><i class="fas fa-check"></i> Control systems and actuators</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">High Speed Craft Code</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                    <span class="standard-tag">ISO Standards</span>
                                    <span class="standard-tag">RINA Guidelines</span>
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
                <h2>Our Propeller & Shaft Services</h2>
                <p>Complete inspection, analysis, and certification services for marine propulsion systems</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Propeller Condition Assessment</h3>
                    <p>Comprehensive evaluation of propeller blades, hub, keyways, and mounting systems for damage, wear, and performance optimization.</p>
                    <ul>
                        <li>Blade surface and edge inspection</li>
                        <li>Hub keyway and bore examination</li>
                        <li>Pitch and diameter verification</li>
                        <li>Balance and vibration analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Shaft System Inspection</h3>
                    <p>Advanced NDT examination of propeller shafts, intermediate shafts, and coupling systems to detect fatigue, wear, and structural defects.</p>
                    <ul>
                        <li>Magnetic particle testing</li>
                        <li>Ultrasonic flaw detection</li>
                        <li>Dimensional verification</li>
                        <li>Surface condition assessment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Alignment & Measurement Services</h3>
                    <p>Precision shaft alignment verification and measurement services to ensure optimal propulsion system performance and minimize vibration.</p>
                    <ul>
                        <li>Laser alignment measurement</li>
                        <li>Bearing clearance verification</li>
                        <li>Coupling alignment checks</li>
                        <li>Vibration analysis and monitoring</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Bearing & Seal Inspection</h3>
                    <p>Detailed assessment of shaft bearings, stern tube seals, and lubrication systems to ensure reliable operation and prevent failures.</p>
                    <ul>
                        <li>Stern tube bearing inspection</li>
                        <li>Thrust bearing assessment</li>
                        <li>Seal condition evaluation</li>
                        <li>Lubrication system testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Underwater Inspection Services</h3>
                    <p>Professional underwater inspection capabilities for in-water assessment of propellers and underwater propulsion components.</p>
                    <ul>
                        <li>Underwater propeller inspection</li>
                        <li>Hull and stern tube examination</li>
                        <li>Thruster unit assessment</li>
                        <li>Damage documentation and reporting</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Performance Analysis & Optimization</h3>
                    <p>Comprehensive performance evaluation and optimization recommendations to improve efficiency, reduce fuel consumption, and enhance vessel operation.</p>
                    <ul>
                        <li>Efficiency testing and analysis</li>
                        <li>Fuel consumption optimization</li>
                        <li>Vibration reduction strategies</li>
                        <li>Maintenance planning support</li>
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
                    <span class="section-label">ADVANCED INSPECTION TECHNOLOGY</span>
                    <h2>Marine Propulsion Inspection Equipment</h2>
                    <p>State-of-the-art NDT equipment and precision measurement tools for comprehensive propulsion system assessment and analysis.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-magnet"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Magnetic Particle Testing</h4>
                                <p>Portable magnetic particle equipment for crack detection in propeller blades, shafts, and critical connection points with high sensitivity.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-wave-square"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Ultrasonic Testing Systems</h4>
                                <p>Advanced ultrasonic flaw detectors and thickness measurement equipment for shaft integrity assessment and material evaluation.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-crosshairs"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Laser Alignment Equipment</h4>
                                <p>Precision laser alignment systems for accurate shaft alignment measurement and verification with millimeter accuracy.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-water"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Underwater Inspection Tools</h4>
                                <p>Professional underwater inspection equipment including cameras, measurement tools, and NDT capabilities for submerged assessments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Marine Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/class-society-cert.png" alt="Class Society Approved">
                            <img src="/www/assets/images/certs/marine-engineer-cert.png" alt="Marine Engineer">
                            <img src="/www/assets/images/certs/underwater-cert.png" alt="Underwater Inspection">
                            <img src="/www/assets/images/certs/ndt-cert.png" alt="NDT Certified">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/marine/propulsion-inspection-equipment.jpg" alt="Propulsion Inspection Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Propulsion Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Class Society Approved</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Underwater Certified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Precision Alignment Tools</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Advanced NDT Methods</span>
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
                <h2>Your Trusted Marine Propulsion Partner</h2>
                <p>Expert marine engineers and advanced inspection capabilities for reliable propulsion system assessments</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>Marine Engineering Expertise</h3>
                    <p>Certified marine engineers with extensive experience in propulsion systems, shaft-line design, and performance optimization across all vessel types.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Underwater Capabilities</h3>
                    <p>Professional underwater inspection services with certified divers and specialized equipment for comprehensive in-water assessments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Advanced NDT Methods</h3>
                    <p>State-of-the-art NDT equipment and techniques for accurate detection of fatigue, corrosion, and structural defects in propulsion components.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Service Options</h3>
                    <p>Dry dock inspections, in-water assessments, and emergency response capabilities to meet diverse operational requirements and schedules.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Performance Optimization</h3>
                    <p>Comprehensive analysis and recommendations for improving propulsion efficiency, reducing vibration, and optimizing fuel consumption.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Industry Partnerships</h3>
                    <p>Established relationships with shipyards, class societies, and propulsion system manufacturers for comprehensive support and rapid response.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Propeller & Shaft Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should propellers and shafts be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection frequency depends on vessel type, operating conditions, and class society requirements. Typically, annual inspections are required with more comprehensive surveys every 2.5-5 years during dry dock. High-speed vessels or those in harsh conditions may require more frequent inspections.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can propeller inspections be performed underwater?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide professional underwater inspection services for propellers and accessible shaft components. This allows for condition assessment without dry-docking, though detailed NDT testing typically requires dry dock access.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What causes propulsion system vibration?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Vibration can result from shaft misalignment, propeller damage or imbalance, bearing wear, or hull fouling. Our inspection services include vibration analysis and alignment verification to identify and resolve these issues.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you detect shaft fatigue cracking?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We use magnetic particle testing and ultrasonic examination to detect fatigue cracks in shafts. These NDT methods can identify surface and subsurface cracks before they become critical failures.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive inspection reports including condition assessment, NDT results, dimensional measurements, photographs, and recommendations for maintenance or repairs. All documentation meets class society and regulatory requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide emergency inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer 24/7 emergency response for propulsion system failures, damage assessment, and urgent certification needs. Our teams can mobilize quickly to minimize vessel downtime.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you help optimize propulsion efficiency?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our services include performance analysis, efficiency testing, and optimization recommendations to improve fuel consumption, reduce emissions, and enhance overall propulsion system performance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of propulsion systems do you inspect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We inspect all types of marine propulsion systems including conventional shaft lines, azimuth thrusters, podded propulsion units, waterjet systems, and specialized propulsion configurations for various vessel types.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Optimize Your Propulsion Performance & Reliability</h2>
                <p>Contact our marine propulsion experts for comprehensive inspection and optimization services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:propulsion@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Propulsion Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Marine Engineering Experts</span>
                    <span><i class="fas fa-check"></i> Underwater Inspection Capable</span>
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
                <p>Comprehensive marine inspection and engineering solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/fire-safety-equipment/ballast-tank-cargo-hold.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Ballast Tank & Cargo Hold</h3>
                    <p>Structural integrity inspection of vessel tanks and cargo spaces</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/mt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Crack detection in propellers, shafts, and structural components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Flaw detection and material assessment for marine components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/infrared-thermography.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Thermal Inspection</h3>
                    <p>Condition monitoring of propulsion system components and bearings</p>
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