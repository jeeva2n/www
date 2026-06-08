<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Hull Structural Inspection Services | Marine Vessel Hull Survey | Alpha Sonix NDT Solutions";
$meta_description = "Professional hull structural inspection services for marine vessels. Comprehensive hull plating assessment, structural integrity evaluation, corrosion mapping, and class society compliance for all vessel types.";
$meta_keywords = "hull structural inspection, marine hull survey, vessel hull inspection, hull plating assessment, ship structural survey, marine NDT, hull integrity inspection, class society compliance, hull corrosion assessment";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/hull-structural-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/hull-structural-og.jpg">
    
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
        "serviceType": "Hull Structural Inspection Services",
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
        "description": "Professional hull structural inspection services ensuring vessel safety, structural integrity, and maritime compliance for all types of commercial and naval vessels."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/marine/hull-inspection1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Hull Structural Inspection</span>
                </div>
                <h1 class="page-title">Hull Structural Inspection</h1>
                <p class="page-subtitle">Comprehensive marine vessel hull surveys ensuring structural integrity, safety compliance, and seaworthiness for all vessel types</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-ship"></i> All Vessel Types</span>
                    <span class="badge"><i class="fas fa-water"></i> Dry Dock & Underwater</span>
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
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Structural Assessment</h3>
                    <p>Comprehensive evaluation of hull plating, frames, bulkheads, and structural connections for integrity, fatigue, and damage assessment.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-rust"></i>
                    </div>
                    <h3>Corrosion Mapping</h3>
                    <p>Detailed corrosion assessment and thickness measurement using advanced ultrasonic techniques to evaluate hull condition and remaining life.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Advanced NDT</h3>
                    <p>Comprehensive non-destructive testing including ultrasonic, magnetic particle, penetrant testing, and radiography for defect detection.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Class Compliance</h3>
                    <p>Complete certification services ensuring compliance with classification society requirements and international maritime safety standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS HULL STRUCTURAL INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MARINE STRUCTURAL INTEGRITY</span>
                    <h2>What is Hull Structural Inspection?</h2>
                    <p class="lead">Hull structural inspection is a comprehensive marine engineering service that evaluates the structural integrity, condition, and safety of vessel hulls through detailed examination and advanced non-destructive testing techniques.</p>
                    
                    <p>Our certified marine surveyors and NDT specialists conduct thorough assessments of hull plating, structural frames, bulkheads, welded connections, and critical structural elements. These inspections identify corrosion, fatigue cracking, structural deformation, and other damage mechanisms that could compromise vessel safety or operational capability.</p>

                    <p>Hull structural inspections are essential for maintaining class certification, ensuring regulatory compliance, preventing structural failures, and optimizing maintenance planning. These services support both scheduled dry dock surveys and emergency damage assessments for all types of commercial and naval vessels.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Hull Plating Assessment</strong>
                                <p>Comprehensive evaluation of shell plating, deck plating, and bulkheads for corrosion, wastage, and structural adequacy.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Structural Framework Analysis</strong>
                                <p>Detailed inspection of frames, girders, beams, and structural connections for fatigue, cracking, and deformation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Weld Joint Integrity</strong>
                                <p>Thorough examination of welded joints and connections using advanced NDT techniques for defect detection and sizing.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Damage Assessment</strong>
                                <p>Expert evaluation of collision damage, grounding damage, and service-related deterioration with repair recommendations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-anchor"></i>
                        <div>
                            <strong>Marine Engineering Expertise:</strong>
                            <p>Our marine structural engineers combine extensive naval architecture knowledge with advanced NDT capabilities to deliver comprehensive hull assessments that ensure vessel safety and regulatory compliance.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Survey</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/marine/hull-structural-survey.jpg" alt="Hull Structural Survey">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional hull structural survey ensuring vessel integrity and safety</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Hull Surveys</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Class Acceptance</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30+</span>
                            <span class="stat-label">Vessel Types</span>
                        </div>
                    </div>
                    
                    <div class="hull-inspection-benefits">
                        <h4><i class="fas fa-star"></i> Survey Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Structural integrity assurance</li>
                            <li><i class="fas fa-check"></i> Class certification compliance</li>
                            <li><i class="fas fa-check"></i> Safety risk mitigation</li>
                            <li><i class="fas fa-check"></i> Maintenance cost optimization</li>
                            <li><i class="fas fa-check"></i> Operational life extension</li>
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
                <span class="section-label">WHY HULL INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Hull Structural Inspection</h2>
                <p>Ensure vessel safety, regulatory compliance, and operational reliability</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Structural Safety</h3>
                    <p>Prevent catastrophic hull failures through early detection of fatigue cracking, corrosion, and structural deterioration that could compromise vessel integrity.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Class Compliance</h3>
                    <p>Maintain valid class certificates and comply with classification society requirements for continued vessel operation and maritime insurance coverage.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Lifecycle Management</h3>
                    <p>Optimize vessel lifecycle through condition-based maintenance planning, steel renewal strategies, and structural modification assessments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Optimization</h3>
                    <p>Reduce maintenance costs through targeted steel renewals, early problem detection, and strategic repair planning during dry dock periods.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environmental Protection</h3>
                    <p>Prevent environmental incidents through proper assessment of hull integrity, cargo containment, and ballast system structural condition.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-anchor"></i>
                    </div>
                    <h3>Seaworthiness Assurance</h3>
                    <p>Ensure vessel seaworthiness and cargo protection through comprehensive structural assessment and damage evaluation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">VESSEL TYPES & APPLICATIONS</span>
                <h2>Hull Structural Inspection Services</h2>
                <p>Comprehensive hull survey services for all types of commercial and naval vessels</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="cargo">Cargo Vessels</button>
                    <button class="tab-btn" data-tab="tankers">Tankers</button>
                    <button class="tab-btn" data-tab="passenger">Passenger Ships</button>
                    <button class="tab-btn" data-tab="offshore">Offshore Vessels</button>
                </div>

                <div class="tabs-content">
                    <!-- Cargo Vessels Tab -->
                    <div class="tab-panel active" id="cargo">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/cargo-vessel-hull.jpg" alt="Cargo Vessel Hull Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Cargo Vessels & Bulk Carriers</h3>
                                <p>Comprehensive hull structural inspection for dry cargo vessels, bulk carriers, and container ships focusing on cargo hold structures and hull integrity.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bulk carrier hull structures and hold frames</li>
                                    <li><i class="fas fa-check"></i> Container ship hull and cell guide structures</li>
                                    <li><i class="fas fa-check"></i> General cargo vessel hull and deck structures</li>
                                    <li><i class="fas fa-check"></i> RoRo vessel structural decks and ramps</li>
                                    <li><i class="fas fa-check"></i> Heavy lift vessel reinforced structures</li>
                                    <li><i class="fas fa-check"></i> Hatch coaming and cover structures</li>
                                    <li><i class="fas fa-check"></i> Cargo loading stress analysis</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">Load Line Convention</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                    <span class="standard-tag">ESP Programme</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tankers Tab -->
                    <div class="tab-panel" id="tankers">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/tanker-hull.jpg" alt="Tanker Hull Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Oil & Chemical Tankers</h3>
                                <p>Specialized hull inspection for crude oil tankers, product carriers, and chemical tankers with emphasis on cargo containment and double hull structures.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Double hull tanker structures and ballast tanks</li>
                                    <li><i class="fas fa-check"></i> Cargo tank boundaries and coaming structures</li>
                                    <li><i class="fas fa-check"></i> Chemical tanker specialized hull coatings</li>
                                    <li><i class="fas fa-check"></i> Product tanker segregation structures</li>
                                    <li><i class="fas fa-check"></i> LNG/LPG carrier hull insulation systems</li>
                                    <li><i class="fas fa-check"></i> Pump room and cofferdam structures</li>
                                    <li><i class="fas fa-check"></i> Cargo piping support structures</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">MARPOL</span>
                                    <span class="standard-tag">IBC Code</span>
                                    <span class="standard-tag">IGC Code</span>
                                    <span class="standard-tag">ESP / CAS</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Passenger Ships Tab -->
                    <div class="tab-panel" id="passenger">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/passenger-ship-hull.jpg" alt="Passenger Ship Hull Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Passenger Vessels & Cruise Ships</h3>
                                <p>Detailed hull structural inspection for passenger ferries, cruise ships, and high-speed craft with focus on passenger safety and structural integrity.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cruise ship hull and superstructure</li>
                                    <li><i class="fas fa-check"></i> Passenger ferry hull and vehicle decks</li>
                                    <li><i class="fas fa-check"></i> High-speed craft lightweight structures</li>
                                    <li><i class="fas fa-check"></i> Catamaran and trimaran hull connections</li>
                                    <li><i class="fas fa-check"></i> Hydrofoil and air-cushion vessel structures</li>
                                    <li><i class="fas fa-check"></i> Subdivision bulkhead integrity</li>
                                    <li><i class="fas fa-check"></i> Emergency equipment mounting structures</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS Chapter II-1</span>
                                    <span class="standard-tag">HSC Code</span>
                                    <span class="standard-tag">SPS Code</span>
                                    <span class="standard-tag">Passenger Ship Safety</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offshore Vessels Tab -->
                    <div class="tab-panel" id="offshore">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/offshore-vessel-hull.jpg" alt="Offshore Vessel Hull Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Offshore & Specialized Vessels</h3>
                                <p>Specialized hull inspection for offshore support vessels, drilling units, and naval vessels operating in demanding marine environments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Platform supply vessel reinforced hulls</li>
                                    <li><i class="fas fa-check"></i> Anchor handling vessel strengthened structures</li>
                                    <li><i class="fas fa-check"></i> Drilling unit and MODU hull structures</li>
                                    <li><i class="fas fa-check"></i> Cable laying vessel specialized arrangements</li>
                                    <li><i class="fas fa-check"></i> Naval vessel hull and armor structures</li>
                                    <li><i class="fas fa-check"></i> Research vessel laboratory foundations</li>
                                    <li><i class="fas fa-check"></i> Fishing vessel hull and fish hold structures</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">MODU Code</span>
                                    <span class="standard-tag">Naval Standards</span>
                                    <span class="standard-tag">DNV Offshore Standards</span>
                                    <span class="standard-tag">Specialized Codes</span>
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
                <h2>Our Hull Structural Inspection Services</h2>
                <p>Complete hull assessment from detailed surveys to damage evaluation and certification</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Overall Hull Survey</h3>
                    <p>Comprehensive assessment of entire hull structure including plating, frames, bulkheads, and structural connections for class and regulatory compliance.</p>
                    <ul>
                        <li>External hull plating examination</li>
                        <li>Internal structural framework inspection</li>
                        <li>Bulkhead and deck structure assessment</li>
                        <li>Class society survey documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Thickness Measurement</h3>
                    <p>Systematic ultrasonic thickness gauging of hull plating and structural members to assess corrosion wastage and remaining strength capacity.</p>
                    <ul>
                        <li>Hull plating thickness survey</li>
                        <li>Frame and stiffener measurement</li>
                        <li>Critical area assessment</li>
                        <li>Corrosion rate analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Weld Inspection & NDT</h3>
                    <p>Advanced non-destructive testing of critical welded joints and connections using magnetic particle, penetrant, and ultrasonic testing methods.</p>
                    <ul>
                        <li>Critical weld joint inspection</li>
                        <li>Magnetic particle testing (MT)</li>
                        <li>Penetrant testing (PT)</li>
                        <li>Ultrasonic flaw detection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Fatigue & Crack Assessment</h3>
                    <p>Detailed examination of high-stress areas and known fatigue-prone locations for crack detection and structural integrity evaluation.</p>
                    <ul>
                        <li>Hot spot stress analysis</li>
                        <li>Fatigue crack detection</li>
                        <li>Crack growth monitoring</li>
                        <li>Structural modification assessment</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Damage Assessment</h3>
                    <p>Expert evaluation of collision damage, grounding damage, and service-related deterioration with comprehensive repair recommendations.</p>
                    <ul>
                        <li>Collision damage evaluation</li>
                        <li>Grounding damage assessment</li>
                        <li>Structural deformation analysis</li>
                        <li>Repair methodology recommendations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Underwater Hull Inspection</h3>
                    <p>Professional underwater survey capabilities for in-water hull assessment without dry-docking requirements where feasible.</p>
                    <ul>
                        <li>Underwater hull condition survey</li>
                        <li>Coating and fouling assessment</li>
                        <li>Damage documentation</li>
                        <li>Emergency damage evaluation</li>
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
                    <h2>Hull Structural Inspection Equipment</h2>
                    <p>State-of-the-art NDT equipment and marine survey tools for comprehensive hull structural assessment and evaluation.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Ultrasonic Thickness Gauging</h4>
                                <p>Advanced ultrasonic thickness measurement systems for accurate assessment of hull plating wastage and structural member condition.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-magnet"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Magnetic Particle Testing</h4>
                                <p>Portable magnetic particle equipment for surface crack detection in welded joints and high-stress structural areas.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-eye-dropper"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Penetrant Testing Systems</h4>
                                <p>Liquid penetrant testing equipment for surface crack detection in non-magnetic materials and complex geometries.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-water"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Underwater Survey Equipment</h4>
                                <p>Professional underwater inspection tools including ROV systems and diving equipment for submerged hull assessment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Marine Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/class-society-cert.png" alt="Class Society Approved">
                            <img src="/www/assets/images/certs/marine-surveyor-cert.png" alt="Marine Surveyor">
                            <img src="/www/assets/images/certs/underwater-cert.png" alt="Underwater Survey">
                            <img src="/www/assets/images/certs/ndt-level3-cert.png" alt="NDT Level III">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/marine/hull-inspection-equipment.jpg" alt="Hull Inspection Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Hull Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Class Society Approved</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Advanced NDT Methods</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Underwater Survey Capable</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Documentation</span>
                        </div>
                    </tech-highlights>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your Trusted Hull Structural Survey Partner</h2>
                <p>Expert marine surveyors and comprehensive hull inspection capabilities for all vessel types</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Marine Structural Engineers</h3>
                    <p>Certified marine surveyors and structural engineers with extensive experience in hull design, construction, and deterioration mechanisms across all vessel types.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Class Society Recognition</h3>
                    <p>Approved by major classification societies including DNV, ABS, Lloyd's Register, and others for official hull surveys and structural assessments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Advanced NDT Capabilities</h3>
                    <p>Comprehensive non-destructive testing equipment and expertise for accurate defect detection and structural condition assessment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Underwater Survey Services</h3>
                    <p>Professional underwater inspection capabilities for in-water hull assessment, emergency damage evaluation, and continuous monitoring.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Service Coverage</h3>
                    <p>Worldwide hull survey services with local expertise and support in major ports, shipyards, and maritime facilities.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Comprehensive Reporting</h3>
                    <p>Detailed survey reports with photographic documentation, thickness records, and engineering recommendations for maintenance and repairs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Hull Structural Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should hull structural inspections be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Hull inspection frequency depends on vessel age, type, and class society requirements. Generally, annual inspections are required with intermediate surveys every 2.5 years and special surveys every 5 years. Enhanced Survey Programme (ESP) vessels may have different requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can hull inspections be performed while the vessel is afloat?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, many hull inspections can be performed afloat using underwater survey techniques. However, comprehensive structural surveys typically require dry dock access for complete examination of all areas and detailed NDT testing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What areas of the hull are considered most critical?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Critical areas include cargo hold corners, ballast tank structures, areas of high stress concentration, previous repair areas, and locations prone to fatigue such as hatch corners and structural discontinuities.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after hull inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive survey reports including structural condition assessment, thickness measurement records, NDT results, photographic documentation, and recommendations for maintenance, repairs, or steel renewals.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you assess hull corrosion and wastage?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Hull corrosion is assessed through systematic ultrasonic thickness measurement, visual examination, and comparison with original construction drawings. We evaluate wastage patterns, corrosion rates, and remaining structural capacity.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide emergency damage assessment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide 24/7 emergency hull damage assessment services for collision, grounding, or weather damage. Our teams can quickly assess structural integrity and provide recommendations for temporary or permanent repairs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you help with steel renewal planning?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our hull condition assessments support steel renewal planning by identifying areas requiring replacement, prioritizing work based on condition, and providing detailed specifications for dry dock planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are your inspections recognized by classification societies?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our hull structural inspections are performed by surveyors approved by major classification societies and our reports are accepted for class survey purposes and certification requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Vessel's Structural Integrity & Safety</h2>
                <p>Contact our marine structural engineers for comprehensive hull inspection and assessment services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:hull@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Hull Survey Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Class Society Approved</span>
                    <span><i class="fas fa-check"></i> Underwater Survey Capable</span>
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
                <p>Comprehensive marine inspection and structural integrity solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/fire-safety-equipment/ballast-tank-cargo-hold.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Ballast Tank & Cargo Hold</h3>
                    <p>Internal structural inspection of vessel tanks and cargo spaces</p>
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

                <a href="/www/pages/conventional-ndt/mt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Surface crack detection in hull welds and structural connections</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT Inspection</h3>
                    <p>Advanced ultrasonic testing for detailed structural assessment</p>
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
