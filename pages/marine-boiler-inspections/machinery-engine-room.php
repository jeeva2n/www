<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Machinery & Engine Room Inspection Services | Marine Engineering Surveys | Alpha Sonix NDT Solutions";
$meta_description = "Professional machinery and engine room inspection services for marine vessels. Comprehensive main engine surveys, auxiliary machinery testing, fire safety systems, and mechanical equipment certification.";
$meta_keywords = "marine engine inspection, machinery survey, engine room inspection, marine engineering survey, main engine testing, auxiliary machinery inspection, marine equipment certification, engine room safety";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/machinery-engine-room.php";
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
    <meta property="og:image" content="/www/assets/images/services/machinery-engine-room-og.jpg">
    
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
        "serviceType": "Machinery & Engine Room Inspection Services",
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
        "description": "Professional machinery and engine room inspection services ensuring marine propulsion reliability, safety compliance, and operational efficiency for all vessel types."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/marine/engine-room1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Machinery & Engine Room</span>
                </div>
                <h1 class="page-title">Machinery & Engine Room Inspection</h1>
                <p class="page-subtitle">Comprehensive marine engineering surveys ensuring propulsion reliability, machinery performance, and engine room safety compliance</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-cogs"></i> All Engine Types</span>
                    <span class="badge"><i class="fas fa-fire-extinguisher"></i> Fire Safety Systems</span>
                    <span class="badge"><i class="fas fa-certificate"></i> Class Society Compliance</span>
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
                        <i class="fas fa-engine"></i>
                    </div>
                    <h3>Main Engine Inspection</h3>
                    <p>Comprehensive assessment of main propulsion engines including diesel, gas turbine, and alternative fuel systems for performance and reliability.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Auxiliary Machinery</h3>
                    <p>Detailed inspection of generators, pumps, compressors, and auxiliary systems essential for vessel operations and safety.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Fire Safety Systems</h3>
                    <p>Comprehensive testing of engine room fire detection, suppression, and emergency systems to ensure crew safety and regulatory compliance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Certification & Compliance</h3>
                    <p>Complete certification services ensuring compliance with SOLAS, MLC, and class society requirements for safe engine room operations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS MACHINERY & ENGINE ROOM INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MARINE ENGINEERING SERVICES</span>
                    <h2>What is Machinery & Engine Room Inspection?</h2>
                    <p class="lead">Machinery and engine room inspection is a comprehensive marine engineering service that evaluates propulsion systems, auxiliary machinery, and safety equipment to ensure reliable vessel operations and regulatory compliance.</p>
                    
                    <p>Our certified marine engineers conduct detailed assessments of main engines, auxiliary machinery, fuel systems, lubrication systems, cooling systems, electrical equipment, and safety systems within the engine room environment. These inspections ensure optimal performance, prevent mechanical failures, and verify compliance with international safety standards.</p>

                    <p>Regular engine room inspections are essential for maintaining vessel reliability, preventing costly breakdowns, ensuring crew safety, and meeting classification society and regulatory requirements. These services support both routine maintenance programs and mandatory survey requirements.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Main Engine Performance</strong>
                                <p>Comprehensive assessment of main propulsion engines including power output, fuel efficiency, and mechanical condition.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>System Integration Analysis</strong>
                                <p>Evaluation of fuel, lubrication, cooling, and electrical systems for optimal integration and performance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Safety System Verification</strong>
                                <p>Testing of fire detection, suppression, ventilation, and emergency shutdown systems for crew protection.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Predictive Maintenance</strong>
                                <p>Condition monitoring and analysis to predict maintenance requirements and prevent unexpected failures.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-anchor"></i>
                        <div>
                            <strong>Marine Engineering Expertise:</strong>
                            <p>Our marine engineers combine extensive propulsion system knowledge with advanced inspection techniques to ensure your vessel's machinery operates reliably and safely under all conditions.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#services" class="btn btn-secondary">View Services</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/marine/engine-room-inspection.jpg" alt="Engine Room Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional engine room inspection ensuring machinery reliability and safety</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1500+</span>
                            <span class="stat-label">Engine Room Surveys</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Uptime Achieved</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Emergency Support</span>
                        </div>
                    </div>
                    
                    <div class="machinery-benefits">
                        <h4><i class="fas fa-star"></i> Inspection Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Optimal engine performance</li>
                            <li><i class="fas fa-check"></i> Reduced maintenance costs</li>
                            <li><i class="fas fa-check"></i> Enhanced safety compliance</li>
                            <li><i class="fas fa-check"></i> Extended equipment life</li>
                            <li><i class="fas fa-check"></i> Operational reliability</li>
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
                <span class="section-label">WHY ENGINE ROOM INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Machinery Inspection</h2>
                <p>Ensure propulsion reliability, safety compliance, and operational efficiency</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Performance Optimization</h3>
                    <p>Maximize engine efficiency, fuel economy, and power output through systematic inspection and performance analysis of propulsion and auxiliary systems.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Failure Prevention</h3>
                    <p>Prevent catastrophic engine failures, system breakdowns, and emergency repairs through early detection of wear, damage, and performance degradation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Safety Assurance</h3>
                    <p>Ensure crew safety through proper functioning of fire detection, suppression, ventilation, and emergency systems in the engine room environment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Management</h3>
                    <p>Reduce maintenance costs, minimize unplanned downtime, and optimize spare parts inventory through predictive maintenance strategies.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environmental Compliance</h3>
                    <p>Meet MARPOL requirements and environmental regulations through proper engine tuning, emission control, and fuel system optimization.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Maintain valid class certificates and comply with SOLAS, MLC, and flag state requirements for safe vessel operations and port acceptance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">MACHINERY TYPES & APPLICATIONS</span>
                <h2>Engine Room Systems We Inspect</h2>
                <p>Comprehensive inspection services for all types of marine propulsion and auxiliary machinery</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="diesel">Diesel Engines</button>
                    <button class="tab-btn" data-tab="gas">Gas Turbines</button>
                    <button class="tab-btn" data-tab="auxiliary">Auxiliary Systems</button>
                    <button class="tab-btn" data-tab="alternative">Alternative Fuels</button>
                </div>

                <div class="tabs-content">
                    <!-- Diesel Engines Tab -->
                    <div class="tab-panel active" id="diesel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/diesel-engine.jpg" alt="Marine Diesel Engine">
                            </div>
                            <div class="tab-text">
                                <h3>Marine Diesel Engines</h3>
                                <p>Comprehensive inspection services for main and auxiliary diesel engines covering all major manufacturers and engine configurations used in commercial vessels.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Low-speed two-stroke main engines</li>
                                    <li><i class="fas fa-check"></i> Medium-speed four-stroke engines</li>
                                    <li><i class="fas fa-check"></i> High-speed auxiliary diesel engines</li>
                                    <li><i class="fas fa-check"></i> Dual-fuel diesel engines</li>
                                    <li><i class="fas fa-check"></i> Emergency generator engines</li>
                                    <li><i class="fas fa-check"></i> Engine control and monitoring systems</li>
                                    <li><i class="fas fa-check"></i> Turbocharger and aftercooler systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">MARPOL Annex VI</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                    <span class="standard-tag">ISO Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gas Turbines Tab -->
                    <div class="tab-panel" id="gas">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/gas-turbine.jpg" alt="Marine Gas Turbine">
                            </div>
                            <div class="tab-text">
                                <h3>Gas Turbine Propulsion</h3>
                                <p>Specialized inspection services for marine gas turbines used in naval vessels, high-speed ferries, and offshore applications requiring high power-to-weight ratios.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Industrial gas turbines (aero-derivative)</li>
                                    <li><i class="fas fa-check"></i> Heavy-duty gas turbines</li>
                                    <li><i class="fas fa-check"></i> Combined diesel and gas (CODAG) systems</li>
                                    <li><i class="fas fa-check"></i> Combined gas and steam (COGAS) systems</li>
                                    <li><i class="fas fa-check"></i> Gas turbine control systems</li>
                                    <li><i class="fas fa-check"></i> Fuel and combustion systems</li>
                                    <li><i class="fas fa-check"></i> Exhaust and heat recovery systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">Naval Standards</span>
                                    <span class="standard-tag">API Standards</span>
                                    <span class="standard-tag">ASME Standards</span>
                                    <span class="standard-tag">HSC Code</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Auxiliary Systems Tab -->
                    <div class="tab-panel" id="auxiliary">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/auxiliary-machinery.jpg" alt="Auxiliary Machinery">
                            </div>
                            <div class="tab-text">
                                <h3>Auxiliary Machinery & Systems</h3>
                                <p>Complete inspection of auxiliary machinery and support systems essential for vessel operations, crew comfort, and safety compliance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Diesel generators and electrical systems</li>
                                    <li><i class="fas fa-check"></i> Pumps (ballast, cargo, fuel, cooling)</li>
                                    <li><i class="fas fa-check"></i> Air compressors and pneumatic systems</li>
                                    <li><i class="fas fa-check"></i> HVAC and refrigeration systems</li>
                                    <li><i class="fas fa-check"></i> Hydraulic systems and power units</li>
                                    <li><i class="fas fa-check"></i> Water makers and treatment systems</li>
                                    <li><i class="fas fa-check"></i> Waste management and oily water separators</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">MARPOL</span>
                                    <span class="standard-tag">MLC 2006</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alternative Fuels Tab -->
                    <div class="tab-panel" id="alternative">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/alternative-fuel-system.jpg" alt="Alternative Fuel Systems">
                            </div>
                            <div class="tab-text">
                                <h3>Alternative Fuel Systems</h3>
                                <p>Advanced inspection services for alternative fuel systems including LNG, methanol, ammonia, and hybrid propulsion systems supporting environmental compliance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> LNG fuel systems and engines</li>
                                    <li><i class="fas fa-check"></i> Methanol fuel systems</li>
                                    <li><i class="fas fa-check"></i> Ammonia fuel preparation systems</li>
                                    <li><i class="fas fa-check"></i> Hybrid diesel-electric systems</li>
                                    <li><i class="fas fa-check"></i> Battery systems and energy storage</li>
                                    <li><i class="fas fa-check"></i> Fuel cell systems</li>
                                    <li><i class="fas fa-check"></i> Gas detection and safety systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">IGF Code</span>
                                    <span class="standard-tag">MSC Guidelines</span>
                                    <span class="standard-tag">Class Notations</span>
                                    <span class="standard-tag">Environmental Regulations</span>
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
                <h2>Our Machinery & Engine Room Services</h2>
                <p>Complete inspection, testing, and certification services for marine propulsion and auxiliary systems</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Main Engine Survey</h3>
                    <p>Comprehensive assessment of main propulsion engines including performance testing, structural inspection, and system verification.</p>
                    <ul>
                        <li>Engine performance analysis</li>
                        <li>Cylinder and piston inspection</li>
                        <li>Fuel injection system testing</li>
                        <li>Turbocharger assessment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Auxiliary Machinery Inspection</h3>
                    <p>Detailed examination of generators, pumps, compressors, and auxiliary systems essential for vessel operations and safety.</p>
                    <ul>
                        <li>Generator testing and certification</li>
                        <li>Pump performance evaluation</li>
                        <li>Compressor system inspection</li>
                        <li>HVAC and refrigeration assessment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Fire Safety System Testing</h3>
                    <p>Comprehensive testing of engine room fire detection, suppression, and emergency systems to ensure crew safety and regulatory compliance.</p>
                    <ul>
                        <li>Fire detection system verification</li>
                        <li>CO2 and foam suppression testing</li>
                        <li>Emergency shutdown system testing</li>
                        <li>Ventilation and smoke extraction</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Fuel & Lubrication Systems</h3>
                    <p>Detailed inspection of fuel handling, treatment, and lubrication systems including storage, filtration, and distribution components.</p>
                    <ul>
                        <li>Fuel tank and piping inspection</li>
                        <li>Fuel treatment system testing</li>
                        <li>Lubrication oil analysis</li>
                        <li>Separators and purifiers testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Electrical System Inspection</h3>
                    <p>Comprehensive evaluation of engine room electrical systems including power generation, distribution, and control systems.</p>
                    <ul>
                        <li>Generator and switchboard inspection</li>
                        <li>Motor and starter testing</li>
                        <li>Control system verification</li>
                        <li>Emergency power system testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Condition Monitoring & Analysis</h3>
                    <p>Advanced condition monitoring techniques and predictive maintenance analysis to optimize performance and prevent failures.</p>
                    <ul>
                        <li>Vibration analysis</li>
                        <li>Oil condition monitoring</li>
                        <li>Thermal imaging inspection</li>
                        <li>Performance trending</li>
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
                    <h2>Marine Engineering Inspection Equipment</h2>
                    <p>State-of-the-art testing and monitoring equipment for comprehensive assessment of marine machinery and engine room systems.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Performance Testing Equipment</h4>
                                <p>Advanced instrumentation for engine performance analysis including power measurement, fuel consumption monitoring, and exhaust gas analysis.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-wave-square"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Vibration Analysis Systems</h4>
                                <p>Precision vibration monitoring equipment for bearing assessment, shaft alignment verification, and predictive maintenance analysis.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Thermal Imaging & Temperature Monitoring</h4>
                                <p>Infrared thermal imaging systems for electrical inspection, bearing monitoring, and thermal performance analysis of machinery.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Oil & Fuel Analysis Equipment</h4>
                                <p>Portable oil analysis systems and fuel testing equipment for condition monitoring and contamination detection.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Engineering Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/marine-engineer-cert.png" alt="Marine Engineer">
                            <img src="/www/assets/images/certs/class-society-cert.png" alt="Class Society">
                            <img src="/www/assets/images/certs/solas-cert.png" alt="SOLAS Compliance">
                            <img src="/www/assets/images/certs/marpol-cert.png" alt="MARPOL Compliance">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/marine/engine-room-testing.jpg" alt="Engine Room Testing">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Engine Room Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Performance Testing Certified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Vibration Analysis Capable</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Thermal Imaging Equipped</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Oil Analysis Laboratory</span>
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
                <h2>Your Trusted Marine Engineering Partner</h2>
                <p>Expert marine engineers and comprehensive machinery inspection capabilities for reliable vessel operations</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>Marine Engineering Expertise</h3>
                    <p>Certified marine engineers with extensive experience in propulsion systems, auxiliary machinery, and engine room operations across all vessel types.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Advanced Testing Capabilities</h3>
                    <p>State-of-the-art testing equipment for performance analysis, condition monitoring, and predictive maintenance of marine machinery systems.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Safety System Specialists</h3>
                    <p>Expert knowledge of engine room fire safety systems, emergency procedures, and crew protection requirements for hazardous marine environments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Service Options</h4>
                    <p>Sea trial inspections, in-port surveys, and emergency assessments with accommodation of vessel schedules and operational requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Performance Optimization</h3>
                    <p>Comprehensive analysis and recommendations for improving fuel efficiency, reducing emissions, and optimizing machinery performance and reliability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>OEM Relationships</h3>
                    <p>Established relationships with major engine and equipment manufacturers providing access to technical support and genuine spare parts recommendations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Machinery & Engine Room Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should engine room machinery be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection frequency depends on equipment type and class society requirements. Main engines typically require annual surveys with intermediate inspections every 2.5 years and special surveys every 5 years. Auxiliary machinery may have different intervals based on operational criticality.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can inspections be performed while the vessel is operational?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Many engine room inspections can be performed during operations, though some tests require machinery shutdown or specific operating conditions. We coordinate with engineering staff to optimize inspection scheduling and minimize operational impact.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What safety precautions are required for engine room work?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Engine room work requires comprehensive safety protocols including hot work permits, machinery isolation, personal protective equipment, gas detection, and emergency response procedures. Our teams are fully certified for hazardous marine environments.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive inspection reports including machinery condition assessment, performance test results, safety system verification, photographic documentation, and maintenance recommendations with all required certificates.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide emergency machinery assessment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide 24/7 emergency response for machinery breakdowns, damage assessment, and urgent certification needs. Our marine engineers can assess damage and provide repair guidance to minimize vessel downtime.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you help with fuel efficiency optimization?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our services include fuel system optimization, engine tuning verification, and efficiency analysis to reduce fuel consumption, lower emissions, and improve overall propulsion system performance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you inspect alternative fuel systems?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide specialized inspection services for LNG, methanol, ammonia, and other alternative fuel systems including gas detection systems, fuel handling equipment, and safety systems required for these technologies.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of vessels do you service?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We service all commercial vessel types including cargo ships, tankers, passenger vessels, offshore units, naval vessels, and specialized ships with various propulsion configurations and machinery arrangements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Machinery Reliability & Performance</h2>
                <p>Contact our marine engineers for comprehensive engine room and machinery inspection services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:machinery@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Engineering Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Marine Engineering Certified</span>
                    <span><i class="fas fa-check"></i> Performance Testing Capable</span>
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
                <p>Comprehensive marine engineering and safety solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/fire-safety-equipment/propeller-shaft.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fan"></i>
                    </div>
                    <h3>Propeller & Shaft Inspection</h3>
                    <p>Comprehensive propulsion system inspection and performance optimization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/marine-boiler-inspections.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Marine Boiler Inspections</h3>
                    <p>Steam boiler and fire safety equipment inspections for marine vessels</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/infrared-thermography.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Thermal Inspection</h3>
                    <p>Infrared thermography for machinery condition monitoring and analysis</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing</h3>
                    <p>Comprehensive visual inspection of machinery and engine room equipment</p>
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