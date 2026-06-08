<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Load Line Inspection Services | Maritime Freeboard & Plimsoll Line Survey | Alpha Sonix NDT Solutions";
$meta_description = "Professional load line inspection services for marine vessels. Plimsoll line verification, freeboard calculations, structural assessment, and International Load Line Convention compliance certification.";
$meta_keywords = "load line inspection, Plimsoll line survey, freeboard inspection, load line certificate, maritime load line, vessel stability inspection, ILLC compliance, tonnage measurement, ship safety inspection";
$canonical_url = "https://alphasonix.com/pages/marine-boiler-inspections/load-line-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/load-line-og.jpg">
    
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
        "serviceType": "Load Line Inspection Services",
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
        "description": "Professional load line inspection services ensuring vessel stability, freeboard compliance, and International Load Line Convention certification for maritime safety."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/marine/load-line1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/marine-boiler-inspections.php">Marine Boiler Inspections</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Load Line Inspection</span>
                </div>
                <h1 class="page-title">Load Line Inspection Services</h1>
                <p class="page-subtitle">Professional Plimsoll line verification, freeboard assessment, and International Load Line Convention compliance certification</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-ruler-horizontal"></i> Freeboard Verification</span>
                    <span class="badge"><i class="fas fa-globe"></i> ILLC Compliance</span>
                    <span class="badge"><i class="fas fa-certificate"></i> International Certification</span>
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
                        <i class="fas fa-ruler-horizontal"></i>
                    </div>
                    <h3>Plimsoll Line Verification</h3>
                    <p>Accurate verification and marking of Plimsoll lines, load line zones, and freeboard markings according to international standards.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Stability Assessment</h3>
                    <p>Comprehensive vessel stability evaluation including freeboard calculations, tonnage verification, and load distribution analysis.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Structural Inspection</h3>
                    <p>Detailed hull integrity assessment to ensure structural capability supports assigned freeboard and load line requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>ILLC Certification</h3>
                    <p>Complete certification services for International Load Line Convention compliance and regulatory acceptance worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS LOAD LINE INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MARITIME SAFETY COMPLIANCE</span>
                    <h2>What is Load Line Inspection?</h2>
                    <p class="lead">Load line inspection is a critical maritime safety service that verifies vessel freeboard markings, structural integrity, and compliance with the International Load Line Convention (ILLC) to ensure safe loading and stability.</p>
                    
                    <p>Our certified marine surveyors conduct comprehensive assessments of Plimsoll line markings, freeboard calculations, hull structure, and vessel stability characteristics. These inspections ensure that vessels can safely carry assigned loads under various weather and operational conditions while maintaining adequate safety margins.</p>

                    <p>Load line inspection is mandatory for commercial vessels over 24 meters in length engaged in international voyages. Regular inspections ensure continued compliance with safety standards, prevent overloading, and maintain valid certificates for international trade operations.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Freeboard Calculation & Verification</strong>
                                <p>Precise measurement and calculation of freeboard requirements based on vessel type, construction, and operational parameters.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Plimsoll Line Accuracy</strong>
                                <p>Verification of load line markings position, dimensions, and visibility according to ILLC requirements and international standards.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Structural Adequacy Assessment</strong>
                                <p>Comprehensive evaluation of hull structure to ensure capability to support assigned load line and operating conditions.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>International Compliance</strong>
                                <p>Full compliance with IMO regulations, flag state requirements, and port state control expectations for global operations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-anchor"></i>
                        <div>
                            <strong>Maritime Expertise:</strong>
                            <p>Our marine surveyors combine extensive knowledge of naval architecture, stability principles, and international regulations to ensure accurate load line assessment and certification.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Survey</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/marine/plimsoll-line-inspection.jpg" alt="Plimsoll Line Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional Plimsoll line verification ensuring vessel safety and compliance</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">2000+</span>
                            <span class="stat-label">Vessels Surveyed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Compliance Rate</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">25+</span>
                            <span class="stat-label">Countries Served</span>
                        </div>
                    </div>
                    
                    <div class="load-line-benefits">
                        <h4><i class="fas fa-star"></i> Compliance Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> International trade acceptance</li>
                            <li><i class="fas fa-check"></i> Port state control compliance</li>
                            <li><i class="fas fa-check"></i> Cargo loading optimization</li>
                            <li><i class="fas fa-check"></i> Insurance requirement satisfaction</li>
                            <li><i class="fas fa-check"></i> Operational safety assurance</li>
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
                <span class="section-label">WHY LOAD LINE INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Load Line Survey</h2>
                <p>Ensure vessel safety, regulatory compliance, and operational efficiency</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Vessel Safety</h3>
                    <p>Prevent vessel instability, capsizing, and structural failure through proper freeboard verification and load line compliance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>International Trade</h3>
                    <p>Enable unrestricted international operations with valid load line certificates accepted by port authorities worldwide.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Meet IMO requirements, flag state regulations, and port state control expectations for commercial vessel operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Cargo Optimization</h3>
                    <p>Maximize cargo capacity while maintaining safety margins through accurate freeboard calculations and load distribution.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-umbrella"></i>
                    </div>
                    <h3>Insurance Coverage</h3>
                    <p>Maintain marine insurance eligibility and coverage through documented compliance with international load line standards.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-anchor"></i>
                    </div>
                    <h3>Operational Confidence</h3>
                    <p>Operate with confidence knowing vessel loading capabilities are verified and certified according to international standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">VESSEL TYPES & APPLICATIONS</span>
                <h2>Vessels Requiring Load Line Inspection</h2>
                <p>Comprehensive load line survey services for all commercial vessels engaged in international trade</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="cargo">Cargo Vessels</button>
                    <button class="tab-btn" data-tab="passenger">Passenger Ships</button>
                    <button class="tab-btn" data-tab="tankers">Tankers</button>
                    <button class="tab-btn" data-tab="offshore">Offshore Vessels</button>
                </div>

                <div class="tabs-content">
                    <!-- Cargo Vessels Tab -->
                    <div class="tab-panel active" id="cargo">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/cargo-vessel-loadline.jpg" alt="Cargo Vessel Load Line">
                            </div>
                            <div class="tab-text">
                                <h3>Cargo Vessels & Bulk Carriers</h3>
                                <p>Comprehensive load line inspection services for dry cargo vessels, bulk carriers, and container ships requiring precise freeboard verification for safe cargo operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Dry bulk carriers and grain ships</li>
                                    <li><i class="fas fa-check"></i> Container vessels and cellular ships</li>
                                    <li><i class="fas fa-check"></i> General cargo and multi-purpose vessels</li>
                                    <li><i class="fas fa-check"></i> RoRo vessels and car carriers</li>
                                    <li><i class="fas fa-check"></i> Heavy lift and project cargo ships</li>
                                    <li><i class="fas fa-check"></i> Refrigerated cargo vessels (reefers)</li>
                                    <li><i class="fas fa-check"></i> Timber carriers and specialized bulk ships</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ILLC 1966</span>
                                    <span class="standard-tag">SOLAS</span>
                                    <span class="standard-tag">MARPOL</span>
                                    <span class="standard-tag">Class Society Rules</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Passenger Ships Tab -->
                    <div class="tab-panel" id="passenger">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/passenger-ship-loadline.jpg" alt="Passenger Ship Load Line">
                            </div>
                            <div class="tab-text">
                                <h3>Passenger Vessels & Cruise Ships</h3>
                                <p>Specialized load line inspection for passenger vessels with focus on stability, subdivision, and safety requirements for commercial passenger operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cruise ships and passenger ferries</li>
                                    <li><i class="fas fa-check"></i> High-speed passenger craft</li>
                                    <li><i class="fas fa-check"></i> River and coastal passenger vessels</li>
                                    <li><i class="fas fa-check"></i> Passenger RoRo ferries</li>
                                    <li><i class="fas fa-check"></i> Expedition and adventure cruise vessels</li>
                                    <li><i class="fas fa-check"></i> Day trip and excursion boats</li>
                                    <li><i class="fas fa-check"></i> Mixed cargo-passenger vessels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SOLAS Chapter II-1</span>
                                    <span class="standard-tag">ILLC 1966</span>
                                    <span class="standard-tag">HSC Code</span>
                                    <span class="standard-tag">Flag State Requirements</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tankers Tab -->
                    <div class="tab-panel" id="tankers">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/tanker-loadline.jpg" alt="Tanker Load Line">
                            </div>
                            <div class="tab-text">
                                <h3>Tankers & Liquid Cargo Vessels</h3>
                                <p>Expert load line survey services for oil tankers, chemical carriers, and gas carriers with specialized requirements for liquid cargo operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude oil tankers and product carriers</li>
                                    <li><i class="fas fa-check"></i> Chemical and specialized cargo tankers</li>
                                    <li><i class="fas fa-check"></i> LNG and LPG carriers</li>
                                    <li><i class="fas fa-check"></i> Asphalt and bitumen carriers</li>
                                    <li><i class="fas fa-check"></i> Vegetable oil and edible oil tankers</li>
                                    <li><i class="fas fa-check"></i> Wine and liquid food carriers</li>
                                    <li><i class="fas fa-check"></i> Integrated tug-barge units</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">MARPOL Annexes</span>
                                    <span class="standard-tag">IBC Code</span>
                                    <span class="standard-tag">IGC Code</span>
                                    <span class="standard-tag">ILLC 1966</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offshore Vessels Tab -->
                    <div class="tab-panel" id="offshore">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/marine/offshore-vessel-loadline.jpg" alt="Offshore Vessel Load Line">
                            </div>
                            <div class="tab-text">
                                <h3>Offshore & Specialized Vessels</h3>
                                <p>Specialized load line inspection for offshore support vessels, research ships, and unique vessel types with specific operational requirements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Platform supply vessels (PSV)</li>
                                    <li><i class="fas fa-check"></i> Anchor handling tug supply (AHTS)</li>
                                    <li><i class="fas fa-check"></i> Cable laying and pipe laying vessels</li>
                                    <li><i class="fas fa-check"></i> Research and survey vessels</li>
                                    <li><i class="fas fa-check"></i> Wind turbine installation vessels</li>
                                    <li><i class="fas fa-check"></i> Floating production and storage units</li>
                                    <li><i class="fas fa-check"></i> Fishing vessels and factory ships</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">IMO Guidelines</span>
                                    <span class="standard-tag">ILLC 1966</span>
                                    <span class="standard-tag">Torremolinos Protocol</span>
                                    <span class="standard-tag">Specialized Code Requirements</span>
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
                <span class="section-label">COMPREHENSIVE SURVEY SERVICES</span>
                <h2>Our Load Line Inspection Services</h2>
                <p>Complete freeboard assessment, structural verification, and certification services</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Initial Load Line Survey</h3>
                    <p>Comprehensive initial assessment for new vessels or major modifications including freeboard calculation and Plimsoll line assignment.</p>
                    <ul>
                        <li>Vessel plans review and verification</li>
                        <li>Freeboard calculation and assignment</li>
                        <li>Structural adequacy assessment</li>
                        <li>Load line marking verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Annual Load Line Inspection</h3>
                    <p>Mandatory annual inspection to verify continued compliance with load line requirements and maintenance of structural integrity.</p>
                    <ul>
                        <li>Load line marking condition check</li>
                        <li>Hull opening security verification</li>
                        <li>Deck equipment inspection</li>
                        <li>Documentation and certificate review</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Renewal Load Line Survey</h3>
                    <p>Comprehensive five-year renewal survey including detailed structural examination and freeboard reassessment for certificate renewal.</p>
                    <ul>
                        <li>Complete structural survey</li>
                        <li>Freeboard verification and calculation</li>
                        <li>Load line marking renewal</li>
                        <li>Certificate renewal documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Modification & Alteration Survey</h3>
                    <p>Assessment of vessel modifications that may affect freeboard, stability, or load line assignment with appropriate certification.</p>
                    <ul>
                        <li>Modification impact assessment</li>
                        <li>Revised freeboard calculation</li>
                        <li>Structural integrity verification</li>
                        <li>Updated certificate issuance</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Tonnage Measurement</h3>
                    <p>Accurate tonnage measurement and calculation services for vessel registration and load line determination purposes.</p>
                    <ul>
                        <li>Gross and net tonnage calculation</li>
                        <li>Compartment volume measurement</li>
                        <li>Tonnage certificate preparation</li>
                        <li>International tonnage compliance</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Stability Assessment</h3>
                    <p>Comprehensive stability evaluation including inclining tests, stability booklet preparation, and loading condition verification.</p>
                    <ul>
                        <li>Inclining test supervision</li>
                        <li>Stability calculation verification</li>
                        <li>Loading condition assessment</li>
                        <li>Stability booklet approval</li>
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
                    <span class="section-label">SURVEY METHODOLOGY</span>
                    <h2>Load Line Inspection Process</h2>
                    <p>Systematic approach ensuring accurate assessment and compliance with International Load Line Convention requirements.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation Review</h4>
                                <p>Comprehensive review of vessel plans, stability data, previous certificates, and modification records to establish baseline requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Dimensional Verification</h4>
                                <p>Precise measurement of vessel dimensions, compartment volumes, and structural elements for accurate freeboard calculation.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Structural Assessment</h4>
                                <p>Detailed examination of hull structure, deck openings, and watertight integrity to ensure compliance with strength requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Certification & Documentation</h4>
                                <p>Preparation of load line certificates, survey reports, and all required documentation for regulatory acceptance and vessel operations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Authorizations & Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/imo-cert.png" alt="IMO Authorized">
                            <img src="/www/assets/images/certs/illc-cert.png" alt="ILLC Surveyor">
                            <img src="/www/assets/images/certs/tonnage-cert.png" alt="Tonnage Surveyor">
                            <img src="/www/assets/images/certs/stability-cert.png" alt="Stability Expert">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/marine/load-line-survey-process.jpg" alt="Load Line Survey Process">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Load Line Survey Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>ILLC Authorized Surveyors</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>IMO Compliance Verified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>International Recognition</span>
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
                <h2>Your Trusted Load Line Survey Partner</h2>
                <p>Expert marine surveyors and comprehensive knowledge of international load line requirements</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Authorized Surveyors</h3>
                    <p>Certified load line surveyors authorized by flag states and recognized by international maritime authorities for official load line certification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Technical Expertise</h3>
                    <p>Deep knowledge of naval architecture, stability principles, and freeboard calculation methods ensuring accurate assessment and compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>International Recognition</h3>
                    <p>Certificates and documentation recognized by port authorities, flag states, and classification societies worldwide for unrestricted operations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Efficient Service</h3>
                    <p>Streamlined survey process with rapid certificate issuance to minimize vessel delays and support tight operational schedules.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Comprehensive Documentation</h3>
                    <p>Complete survey reports, calculation records, and certification documentation providing full traceability and regulatory compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Regulatory Liaison</h3>
                    <p>Direct coordination with maritime authorities, class societies, and port state control to ensure smooth certification and acceptance processes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Load Line Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What vessels require load line certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>All commercial vessels 24 meters and over in length engaged in international voyages require load line certification under the International Load Line Convention. This includes cargo ships, passenger vessels, tankers, and offshore units.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often must load line inspections be conducted?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Load line inspections are required annually, with comprehensive renewal surveys every five years. Additional inspections may be required following major modifications or damage affecting vessel structure or stability.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is checked during a load line survey?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Load line surveys examine Plimsoll line markings, hull openings and closures, deck equipment, structural integrity, stability characteristics, and compliance with freeboard requirements and safety standards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does a load line survey take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Annual inspections typically take 1-2 days, while renewal surveys may require 3-5 days depending on vessel size and complexity. Initial surveys for new vessels may take longer due to comprehensive assessment requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can surveys be conducted while the vessel is loaded?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Many load line inspections can be conducted with cargo onboard, though certain examinations may require specific loading conditions. We coordinate with vessel operations to optimize survey scheduling.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if deficiencies are found?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Deficiencies must be corrected before certificate issuance or renewal. We provide detailed corrective action requirements and can conduct re-inspection once repairs are completed to ensure compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide emergency survey services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide emergency load line surveys for damage assessment, urgent certification needs, and compliance verification to support vessel operations and minimize delays.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are your certificates recognized internationally?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our load line certificates are issued under proper authority and are recognized by flag states, port authorities, and classification societies worldwide for international vessel operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Vessel's Load Line Compliance</h2>
                <p>Contact our authorized surveyors for comprehensive load line inspection and certification services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:loadline@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Load Line Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> ILLC Authorized Surveyors</span>
                    <span><i class="fas fa-check"></i> International Recognition</span>
                    <span><i class="fas fa-check"></i> Rapid Certification</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Marine Services</h2>
                <p>Comprehensive maritime compliance and safety solutions</p>
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

                <a href="/www/pages/fire-safety-equipment/marine-boiler-inspections.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Marine Boiler Inspections</h3>
                    <p>Steam boiler and fire safety equipment inspections for marine vessels</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing</h3>
                    <p>Comprehensive visual inspection of vessel structure and equipment</p>
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
            </div>
        </div>
    </section>

    <?php include $base . '/includes/footer.php'; ?>
    
    <script src="/www/assets/js/script.js"></script>
    <script src="/www/assets/js/service-page.js"></script>

</body>
</html>