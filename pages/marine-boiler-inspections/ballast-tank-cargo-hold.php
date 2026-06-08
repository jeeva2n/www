<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Ballast Tank & Cargo Hold Inspection Services | Marine Vessel Inspections | Alpha Sonix NDT Solutions";
$meta_description = "Professional ballast tank and cargo hold inspection services for marine vessels. Structural integrity assessment, corrosion evaluation, and safety compliance for all vessel types including tankers, bulk carriers, and container ships.";
$meta_keywords = "ballast tank inspection, cargo hold inspection, marine vessel inspection, ship inspection, ballast tank survey, cargo hold survey, marine NDT, vessel structural inspection, maritime safety inspection";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/ballast-tank-cargo-hold.php";
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
    <meta property="og:image" content="/www/assets/images/services/ballast-tank-og.jpg">
    
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
        "serviceType": "Ballast Tank & Cargo Hold Inspection Services",
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
        "description": "Professional ballast tank and cargo hold inspection services for marine vessels ensuring structural integrity, safety compliance, and regulatory requirements."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/marine/ballast-tank1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Ballast Tank & Cargo Hold</span>
                </div>
                <h1 class="page-title">Ballast Tank & Cargo Hold Inspection</h1>
                <p class="page-subtitle">Comprehensive structural integrity and safety inspections for marine vessel ballast tanks and cargo holds</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-ship"></i> All Vessel Types</span>
                    <span class="badge"><i class="fas fa-certificate"></i> Class Society Approved</span>
                    <span class="badge"><i class="fas fa-search"></i> Advanced NDT Methods</span>
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
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Structural Integrity</h3>
                    <p>Comprehensive assessment of ballast tank and cargo hold structure using advanced NDT techniques to ensure vessel safety and seaworthiness.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-rust"></i>
                    </div>
                    <h3>Corrosion Assessment</h3>
                    <p>Detailed evaluation of corrosion patterns, coating condition, and material degradation to support maintenance planning and vessel lifecycle management.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Full compliance with SOLAS, MARPOL, class society requirements, and flag state regulations for safe vessel operation and certification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Survey Documentation</h3>
                    <p>Comprehensive inspection reports and certification documentation for class surveys, port state control, and regulatory compliance requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS BALLAST TANK & CARGO HOLD INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MARINE VESSEL INSPECTIONS</span>
                    <h2>What is Ballast Tank & Cargo Hold Inspection?</h2>
                    <p class="lead">Ballast tank and cargo hold inspection is a specialized marine survey service that evaluates the structural condition, safety, and regulatory compliance of vessel cargo and ballast spaces.</p>
                    
                    <p>These critical inspections assess the structural integrity of vessel hulls, frames, bulkheads, and associated systems within ballast tanks and cargo holds. Our certified marine surveyors use advanced NDT techniques to detect corrosion, cracking, deformation, and other structural issues that could compromise vessel safety or operational capability.</p>

                    <p>Regular inspection programs are essential for maintaining class certification, ensuring regulatory compliance, preventing structural failures, and optimizing maintenance planning. These inspections support both scheduled dry dock surveys and in-service condition monitoring programs.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Hull Structure Assessment</strong>
                                <p>Comprehensive evaluation of hull plating, frames, bulkheads, and structural connections for integrity and safety.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Coating & Corrosion Analysis</strong>
                                <p>Detailed assessment of protective coating systems and corrosion patterns to support maintenance optimization.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Class Society Compliance</strong>
                                <p>Inspections aligned with major class society requirements including DNV, ABS, Lloyd's Register, and others.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Safety System Verification</strong>
                                <p>Evaluation of ballast and cargo handling systems, ventilation, and safety equipment within tank spaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-anchor"></i>
                        <div>
                            <strong>Maritime Expertise:</strong>
                            <p>Our marine inspection team combines extensive sea-going experience with advanced NDT capabilities to deliver comprehensive assessments that support safe vessel operations and regulatory compliance.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Survey</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/marine/ballast-tank-inspection.jpg" alt="Ballast Tank Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional ballast tank inspection ensuring vessel structural integrity</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Tank Surveys</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Class Acceptance</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                    </div>
                    
                    <div class="marine-tank-benefits">
                        <h4><i class="fas fa-star"></i> Survey Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Class survey compliance</li>
                            <li><i class="fas fa-check"></i> Structural integrity assurance</li>
                            <li><i class="fas fa-check"></i> Maintenance cost optimization</li>
                            <li><i class="fas fa-check"></i> Regulatory compliance support</li>
                            <li><i class="fas fa-check"></i> Vessel lifecycle management</li>
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
                <span class="section-label">WHY TANK & HOLD INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Marine Tank Inspection</h2>
                <p>Ensure vessel safety, regulatory compliance, and operational efficiency</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Structural Safety</h3>
                    <p>Prevent catastrophic structural failures through early detection of corrosion, fatigue, and other deterioration mechanisms in critical vessel areas.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Class Certification</h3>
                    <p>Maintain valid class certificates and comply with classification society requirements for continued vessel operation and maritime insurance coverage.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Management</h3>
                    <p>Optimize maintenance costs through condition-based planning, early problem detection, and strategic repair scheduling during dry dock periods.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environmental Protection</h3>
                    <p>Prevent cargo contamination, oil spills, and environmental incidents through proper assessment of tank and hold integrity.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Operational Efficiency</h3>
                    <p>Maximize cargo capacity, reduce loading restrictions, and maintain operational flexibility through verified structural condition.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Compliance</h3>
                    <p>Meet international maritime regulations and port state control requirements for unrestricted global vessel operations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">VESSEL TYPES & APPLICATIONS</span>
                <h2>Vessel Types We Inspect</h2>
                <p>Comprehensive tank and hold inspection services for all types of commercial vessels</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="tankers">Oil & Chemical Tankers</button>
                    <button class="tab-btn" data-tab="bulk">Bulk Carriers</button>
                    <button class="tab-btn" data-tab="container">Container Ships</button>
                    <button class="tab-btn" data-tab="general">General Cargo</button>
                </div>

                <div class="tabs-content">
                    <!-- Oil & Chemical Tankers Tab -->
                    <div class="tab-panel active" id="tankers">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/oil-tanker-tanks.jpg" alt="Oil Tanker Tank Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Oil & Chemical Tankers</h3>
                                <p>Specialized inspection services for crude oil tankers, product tankers, and chemical carriers with focus on cargo tank integrity and safety systems.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude oil and product cargo tanks</li>
                                    <li><i class="fas fa-check"></i> Chemical and specialized cargo tanks</li>
                                    <li><i class="fas fa-check"></i> Ballast tanks and segregated ballast systems</li>
                                    <li><i class="fas fa-check"></i> Cargo and ballast pump rooms</li>
                                    <li><i class="fas fa-check"></i> Tank coatings and corrosion assessment</li>
                                    <li><i class="fas fa-check"></i> Pipeline and valve systems</li>
                                    <li><i class="fas fa-check"></i> Inert gas and tank cleaning systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">MARPOL</span>
                                    <span class="standard-tag">IBC Code</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bulk Carriers Tab -->
                    <div class="tab-panel" id="bulk">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/bulk-carrier-holds.jpg" alt="Bulk Carrier Hold Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Bulk Carriers</h3>
                                <p>Comprehensive cargo hold and ballast tank inspections for bulk carriers transporting dry bulk commodities with emphasis on structural integrity.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cargo holds and hatch covers</li>
                                    <li><i class="fas fa-check"></i> Double hull ballast tanks</li>
                                    <li><i class="fas fa-check"></i> Topside ballast tanks</li>
                                    <li><i class="fas fa-check"></i> Hold frames and bulkhead structures</li>
                                    <li><i class="fas fa-check"></i> Cargo hold drainage systems</li>
                                    <li><i class="fas fa-check"></i> Loading and unloading equipment spaces</li>
                                    <li><i class="fas fa-check"></i> Conveyor and grab damage assessment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">ESP Code</span>
                                    <span class="standard-tag">BLU Code</span>
                                    <span class="standard-tag">IMSBC Code</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Container Ships Tab -->
                    <div class="tab-panel" id="container">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/container-ship-holds.jpg" alt="Container Ship Hold Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Container Ships</h3>
                                <p>Detailed inspection of container holds, ballast tanks, and cargo securing systems for safe container transport and vessel structural integrity.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Container cargo holds and cell guides</li>
                                    <li><i class="fas fa-check"></i> Wing and center ballast tanks</li>
                                    <li><i class="fas fa-check"></i> Container securing systems and fittings</li>
                                    <li><i class="fas fa-check"></i> Hatch covers and weathertight seals</li>
                                    <li><i class="fas fa-check"></i> Hold drainage and ventilation systems</li>
                                    <li><i class="fas fa-check"></i> Reefer container power systems</li>
                                    <li><i class="fas fa-check"></i> Lashing bridge and equipment access</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">CSS Code</span>
                                    <span class="standard-tag">IMDG Code</span>
                                    <span class="standard-tag">MSC Guidelines</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- General Cargo Tab -->
                    <div class="tab-panel" id="general">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/general-cargo-holds.jpg" alt="General Cargo Hold Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>General Cargo & Multi-Purpose Vessels</h3>
                                <p>Flexible inspection services for general cargo ships, multi-purpose vessels, and specialized carriers with diverse cargo handling requirements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Multi-purpose cargo holds</li>
                                    <li><i class="fas fa-check"></i> RoRo cargo decks and ramps</li>
                                    <li><i class="fas fa-check"></i> Heavy lift and project cargo areas</li>
                                    <li><i class="fas fa-check"></i> Ballast tanks and void spaces</li>
                                    <li><i class="fas fa-check"></i> Cargo handling equipment foundations</li>
                                    <li><i class="fas fa-check"></i> Vehicle and machinery securing points</li>
                                    <li><i class="fas fa-check"></i> Specialized cargo ventilation systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">Load Line Convention</span>
                                    <span class="standard-tag">TDC Code</span>
                                    <span class="standard-tag">Flag State Requirements</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION METHODOLOGY ===================== -->
    <section class="services-offering" id="services">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE INSPECTION SERVICES</span>
                <h2>Our Tank & Hold Inspection Methodology</h2>
                <p>Systematic approach ensuring thorough assessment and accurate documentation</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Pre-Survey Planning</h3>
                    <p>Comprehensive review of vessel drawings, previous survey reports, and operational history to develop targeted inspection strategy.</p>
                    <ul>
                        <li>Drawing and documentation review</li>
                        <li>Previous survey analysis</li>
                        <li>Critical area identification</li>
                        <li>Access and safety planning</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Visual & Close-Up Inspection</h3>
                    <p>Detailed visual examination of all accessible surfaces including structural members, plating, and critical connection points.</p>
                    <ul>
                        <li>Overall structural assessment</li>
                        <li>Close-up inspection of critical areas</li>
                        <li>Coating condition evaluation</li>
                        <li>Corrosion pattern documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Thickness Measurement</h3>
                    <p>Systematic ultrasonic thickness gauging of hull plating, frames, and structural members to assess remaining strength.</p>
                    <ul>
                        <li>Hull plating thickness survey</li>
                        <li>Frame and stiffener assessment</li>
                        <li>Critical area measurements</li>
                        <li>Trend analysis and comparison</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Advanced NDT Testing</h3>
                    <p>Application of specialized NDT techniques for detailed assessment of structural integrity and defect detection.</p>
                    <ul>
                        <li>Magnetic particle testing</li>
                        <li>Penetrant testing for crack detection</li>
                        <li>Radiographic examination (when required)</li>
                        <li>Phased array ultrasonic testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>System Functionality Testing</h3>
                    <p>Verification of ballast and cargo system operation including pumps, valves, and safety equipment within tank spaces.</p>
                    <ul>
                        <li>Ballast system operation</li>
                        <li>Cargo handling equipment</li>
                        <li>Ventilation system testing</li>
                        <li>Safety equipment verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Documentation & Reporting</h3>
                    <p>Comprehensive survey reports with findings, recommendations, and all required documentation for class and regulatory compliance.</p>
                    <ul>
                        <li>Detailed survey reports</li>
                        <li>Photographic documentation</li>
                        <li>Thickness measurement records</li>
                        <li>Compliance certificates</li>
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
                    <h2>Marine Inspection Equipment & Capabilities</h2>
                    <p>State-of-the-art NDT equipment and marine-specific inspection tools for comprehensive tank and hold assessments.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Ultrasonic Thickness Gauging</h4>
                                <p>Precision thickness measurement systems for accurate assessment of plate wastage and remaining structural capacity.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-magnet"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Magnetic Particle Testing</h4>
                                <p>Portable magnetic particle equipment for crack detection in welds, structural connections, and high-stress areas.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Penetrant Testing Systems</h4>
                                <p>Liquid penetrant testing for surface crack detection in non-magnetic materials and complex geometries.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Remote Visual Inspection</h4>
                                <p>Borescopes and remote inspection equipment for examination of inaccessible tank areas and confined spaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Marine Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/dnv-cert.png" alt="DNV Approved">
                            <img src="/www/assets/images/certs/abs-cert.png" alt="ABS Approved">
                            <img src="/www/assets/images/certs/lr-cert.png" alt="Lloyd's Register">
                            <img src="/www/assets/images/certs/class-nk-cert.png" alt="ClassNK Approved">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/marine/tank-inspection-equipment.jpg" alt="Tank Inspection Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Tank Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Class Society Approved</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>SOLAS Compliant Methods</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Confined Space Certified</span>
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
                <h2>Your Trusted Marine Survey Partner</h2>
                <p>Experienced marine surveyors and advanced inspection capabilities for comprehensive vessel assessments</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Qualified Marine Surveyors</h3>
                    <p>Certified marine surveyors with extensive experience in commercial vessel operations and class society requirements across all vessel types.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Class Society Recognition</h3>
                    <p>Approved by major classification societies including DNV, ABS, Lloyd's Register, and others for official survey and certification work.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Safety Excellence</h3>
                    <p>Comprehensive safety protocols for confined space entry, gas testing, and hazardous area work with certified safety personnel.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Port Coverage</h3>
                    <p>Worldwide survey coverage with local knowledge and capabilities in major shipping ports and dry dock facilities.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Scheduling</h3>
                    <p>Accommodation of vessel schedules including dry dock surveys, in-water inspections, and emergency response for urgent requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Comprehensive Documentation</h3>
                    <p>Detailed survey reports with photographic evidence, thickness records, and all required documentation for regulatory compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Ballast Tank & Cargo Hold Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When are ballast tank and cargo hold inspections required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspections are required during intermediate and special surveys as mandated by class societies, typically every 2.5 and 5 years respectively. Additional inspections may be required for Enhanced Survey Programme (ESP) vessels, damage assessments, or special operational requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can inspections be performed while the vessel is loaded?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Limited inspections can be performed on loaded vessels, but comprehensive surveys typically require empty tanks and holds for full access. We coordinate with vessel operations to optimize inspection scheduling and minimize operational impact.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What safety measures are required for tank entry?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tank entry requires comprehensive safety protocols including gas testing, ventilation verification, permit systems, emergency response procedures, and certified safety personnel. We maintain strict compliance with ISGOTT and industry safety standards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long do tank and hold inspections typically take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Duration depends on vessel size, number of tanks/holds, inspection scope, and access conditions. Typical surveys range from 2-10 days depending on complexity. We provide detailed time estimates during planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive survey reports with findings, recommendations, photographic documentation, thickness measurement records, and all certificates required for class society and regulatory compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you coordinate with class societies and yards?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we coordinate closely with class surveyors and shipyard personnel to ensure efficient survey execution and proper documentation. We can attend joint surveys and provide technical support as required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you perform emergency damage assessments?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide emergency response for damage assessment, collision evaluation, and urgent structural integrity verification. Our teams can mobilize quickly to support incident response and repair planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What vessel types do you inspect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We inspect all commercial vessel types including tankers, bulk carriers, container ships, general cargo vessels, offshore units, and specialized carriers. Our team has experience across diverse vessel designs and cargo systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Vessel's Structural Integrity</h2>
                <p>Contact our marine survey team for comprehensive ballast tank and cargo hold inspection services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:marine@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Marine Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Class Society Approved</span>
                    <span><i class="fas fa-check"></i> Global Port Coverage</span>
                    <span><i class="fas fa-check"></i> Emergency Response</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Marine Services</h2>
                <p>Comprehensive marine inspection and safety solutions</p>
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

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Thickness Measurement</h3>
                    <p>Ultrasonic thickness gauging for hull plating and structural assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Remote Visual Inspection</h3>
                    <p>RVI services for tank internal inspection and confined space access</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/mt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Crack detection in welds and structural connections</p>
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