<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "OCTG Inspection Services | Oil Country Tubular Goods Testing | API 5CT/5B | Alpha Sonix NDT Solutions";
$meta_description = "Professional OCTG (Oil Country Tubular Goods) inspection services for drill pipes, casing, tubing, and accessories. API 5CT/5B compliant testing including electromagnetic inspection, UT, and thread inspection for oil & gas operations.";
$meta_keywords = "OCTG inspection, drill pipe inspection, casing inspection, tubing testing, OCTG NDT, electromagnetic inspection, thread inspection, API 5CT, pipe inspection, downhole tubular inspection";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/octg-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/octg-og.jpg">
    
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
        "serviceType": "OCTG (Oil Country Tubular Goods) Inspection Services",
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
        "description": "Professional OCTG inspection services including drill pipes, casing, tubing, and accessories with API 5CT/5B compliance for oil and gas drilling operations."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/octg/octg-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>OCTG Inspection</span>
                </div>
                <h1 class="page-title">OCTG (Oil Country Tubular Goods) Inspection</h1>
                <p class="page-subtitle">Comprehensive inspection services for drill pipes, casing, tubing, and accessories ensuring reliability in demanding oil & gas drilling operations</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> API 5CT/5B Compliant</span>
                    <span class="badge"><i class="fas fa-magnet"></i> Electromagnetic Inspection</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Full-Length Coverage</span>
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
                        <i class="fas fa-oil-can"></i>
                    </div>
                    <h3>Drill Pipe Inspection</h3>
                    <p>Comprehensive drill pipe inspection including tube body, tool joints, and connections to detect fatigue cracks, corrosion, wear, and mechanical damage.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-arrows-alt"></i>
                    </div>
                    <h3>Casing & Tubing Testing</h3>
                    <p>Full-length casing and tubing inspection for wall thickness, ovality, straightness, and defect detection using electromagnetic and ultrasonic methods.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Thread & Connection Inspection</h3>
                    <p>Precision thread inspection for API and proprietary connections including dimensional verification, surface finish, and galling detection.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Material Verification</h3>
                    <p>Positive material identification (PMI), hardness testing, and mechanical property verification for grade confirmation and quality assurance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS OCTG INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">OIL COUNTRY TUBULAR GOODS</span>
                    <h2>What is OCTG Inspection?</h2>
                    <p class="lead">OCTG (Oil Country Tubular Goods) inspection is a specialized testing service ensuring the integrity, reliability, and API compliance of tubular products used in oil and gas drilling, completion, and production operations.</p>
                    
                    <p>OCTG products include drill pipes, casing, tubing, and associated accessories that operate under extreme conditions including high pressure, high temperature, corrosive environments, and cyclic loading. Failure of these components can result in catastrophic well control events, equipment loss, environmental damage, and significant non-productive time (NPT).</p>

                    <p>Our OCTG inspection services combine advanced NDT technologies including electromagnetic inspection (EMI), ultrasonic testing (UT), magnetic particle inspection (MT), and precision dimensional measurement to detect defects, verify material properties, and ensure API 5CT/5B compliance before tubulars are deployed downhole.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Electromagnetic Inspection (EMI)</strong>
                                <p>Full-length pipe body inspection detecting transverse and longitudinal defects, corrosion, pitting, and wall thickness variations.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Ultrasonic Thickness & Lamination Testing</strong>
                                <p>Precision wall thickness measurement and lamination detection using advanced ultrasonic techniques for full pipe coverage.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Thread & Connection Inspection</strong>
                                <p>Dimensional verification, thread profile analysis, surface finish assessment, and galling/cross-threading detection per API specifications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material Verification & Grade Confirmation</strong>
                                <p>PMI, hardness testing, and mechanical property verification ensuring material meets specified API grade requirements (J55, K55, N80, L80, P110, etc.).</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-hard-hat"></i>
                        <div>
                            <strong>Critical for Drilling Operations:</strong>
                            <p>OCTG failure is a leading cause of drilling non-productive time, with costs ranging from $50K for minor fishing jobs to $10M+ for stuck pipe or well control events. Proper inspection prevents costly failures and ensures operational safety.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request OCTG Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/octg/octg-inspection.jpg" alt="OCTG Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Full-length electromagnetic and ultrasonic inspection of OCTG products</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">50K+</span>
                            <span class="stat-label">Tubulars Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Full-Length Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">API 5CT</span>
                            <span class="stat-label">Certified</span>
                        </div>
                    </div>
                    
                    <div class="octg-benefits">
                        <h4><i class="fas fa-star"></i> OCTG Inspection Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Prevent downhole failures</li>
                            <li><i class="fas fa-check"></i> Reduce non-productive time</li>
                            <li><i class="fas fa-check"></i> API 5CT/5B compliance</li>
                            <li><i class="fas fa-check"></i> Extend tubular life</li>
                            <li><i class="fas fa-check"></i> Well integrity assurance</li>
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
                <span class="section-label">WHY OCTG INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional OCTG Testing</h2>
                <p>Protect your drilling investment and ensure operational reliability</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Reduce Non-Productive Time (NPT)</h3>
                    <p>OCTG failures cause significant drilling delays with costs ranging from $50K to $10M+ per incident. Proper inspection prevents failures before they occur.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Well Integrity Assurance</h3>
                    <p>Ensure casing and tubing integrity for well barrier compliance, preventing leaks, blowouts, and environmental incidents through comprehensive testing.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Maximize Tubular Life</h3>
                    <p>Identify and remove damaged tubulars before deployment while extending service life of reusable components through condition assessment and grading.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>API 5CT/5B Compliance</h3>
                    <p>Meet regulatory and operator requirements for documented inspection of OCTG products with complete traceability and certification packages.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Throughput</h3>
                    <p>High-speed automated inspection lines capable of processing hundreds of joints per day to support drilling schedules and warehouse operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Comprehensive Defect Detection</h3>
                    <p>Detect transverse/longitudinal cracks, corrosion, pitting, wall thickness reduction, ovality, straightness issues, and connection defects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">OCTG PRODUCT TYPES</span>
                <h2>Tubular Products We Inspect</h2>
                <p>Comprehensive inspection services for all OCTG categories and API grades</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="drill-pipe">Drill Pipe</button>
                    <button class="tab-btn" data-tab="casing">Casing</button>
                    <button class="tab-btn" data-tab="tubing">Tubing</button>
                    <button class="tab-btn" data-tab="accessories">Accessories & Connections</button>
                </div>

                <div class="tabs-content">
                    <!-- Drill Pipe Tab -->
                    <div class="tab-panel active" id="drill-pipe">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/octg/drill-pipe-inspection.jpg" alt="Drill Pipe Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Drill Pipe Inspection & Classification</h3>
                                <p>Comprehensive drill pipe inspection per DS-1 or API RP 7G standards including tube body inspection, tool joint evaluation, and connection verification for both new and used drill pipe.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Full-length electromagnetic inspection for transverse/longitudinal defects</li>
                                    <li><i class="fas fa-check"></i> Ultrasonic wall thickness measurement and lamination detection</li>
                                    <li><i class="fas fa-check"></i> Tool joint hardness testing and wear measurement</li>
                                    <li><i class="fas fa-check"></i> Thread inspection for connections (NC, REG, FH, etc.)</li>
                                    <li><i class="fas fa-check"></i> Straightness and ovality verification</li>
                                    <li><i class="fas fa-check"></i> API and DS-1 classification (Class 1-5 for used drill pipe)</li>
                                    <li><i class="fas fa-check"></i> Premium class certification for critical drilling operations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API RP 7G</span>
                                    <span class="standard-tag">DS-1 Standard</span>
                                    <span class="standard-tag">NS-2 Standard</span>
                                    <span class="standard-tag">API 5DP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Casing Tab -->
                    <div class="tab-panel" id="casing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/octg/casing-inspection.jpg" alt="Casing Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Casing Inspection & Acceptance Testing</h3>
                                <p>New and used casing inspection per API 5CT requirements including dimensional verification, defect detection, and thread inspection for surface and downhole casing strings.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Full-length electromagnetic inspection (transverse/longitudinal)</li>
                                    <li><i class="fas fa-check"></i> Ultrasonic wall thickness mapping and lamination detection</li>
                                    <li><i class="fas fa-check"></i> Diameter, ovality, and straightness measurement</li>
                                    <li><i class="fas fa-check"></i> Thread inspection for API buttress, LTC, STC, and premium connections</li>
                                    <li><i class="fas fa-check"></i> Grade verification via PMI and hardness testing</li>
                                    <li><i class="fas fa-check"></i> Hydrostatic pressure testing (where required)</li>
                                    <li><i class="fas fa-check"></i> Drift testing for internal diameter verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 5CT</span>
                                    <span class="standard-tag">API 5B</span>
                                    <span class="standard-tag">ISO 11960</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tubing Tab -->
                    <div class="tab-panel" id="tubing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/octg/tubing-inspection.jpg" alt="Tubing Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Tubing Inspection & Production String Testing</h3>
                                <p>Comprehensive production tubing inspection for new and used tubulars including defect detection, thread verification, and grade confirmation for well completion operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Full-length electromagnetic and ultrasonic inspection</li>
                                    <li><i class="fas fa-check"></i> Thread inspection for EUE, NUE, and premium connections</li>
                                    <li><i class="fas fa-check"></i> Wall thickness verification for corrosion monitoring</li>
                                    <li><i class="fas fa-check"></i> Visual inspection for mechanical damage and galling</li>
                                    <li><i class="fas fa-check"></i> Grade verification (J55, N80, L80, P110, C95, etc.)</li>
                                    <li><i class="fas fa-check"></i> Sour service verification per NACE MR0175</li>
                                    <li><i class="fas fa-check"></i> Premium connection inspection and gauge testing</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 5CT</span>
                                    <span class="standard-tag">API 5B</span>
                                    <span class="standard-tag">ISO 11960</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accessories & Connections Tab -->
                    <div class="tab-panel" id="accessories">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/octg/thread-inspection.jpg" alt="Thread Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Accessories, Connections & Thread Inspection</h3>
                                <p>Specialized inspection for OCTG accessories including crossovers, subs, stabilizers, and connection components with precision thread gauging and dimensional verification.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Thread dimensional inspection per API 5B using certified gauges</li>
                                    <li><i class="fas fa-check"></i> Thread profile analysis and surface finish assessment</li>
                                    <li><i class="fas fa-check"></i> Connection make-up verification and torque monitoring</li>
                                    <li><i class="fas fa-check"></i> Crossover and sub inspection (box/pin configurations)</li>
                                    <li><i class="fas fa-check"></i> Stabilizer and bottom hole assembly (BHA) component inspection</li>
                                    <li><i class="fas fa-check"></i> Premium connection inspection (VAM, Tenaris, Hunting, etc.)</li>
                                    <li><i class="fas fa-check"></i> Galling, cross-threading, and thread damage detection</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 5B</span>
                                    <span class="standard-tag">API 7-2</span>
                                    <span class="standard-tag">ISO 10424</span>
                                    <span class="standard-tag">Manufacturer Specifications</span>
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
                <span class="section-label">COMPREHENSIVE OCTG SERVICES</span>
                <h2>Our OCTG Inspection Capabilities</h2>
                <p>Advanced NDT technologies and API-certified inspectors for complete tubular assessment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Electromagnetic Inspection (EMI)</h3>
                    <p>Full-length electromagnetic testing for transverse and longitudinal defects using rotating magnetic flux leakage (MFL) or induced current methods.</p>
                    <ul>
                        <li>Transverse defect detection (fatigue cracks, transverse cuts)</li>
                        <li>Longitudinal defect detection (seams, longitudinal cracks)</li>
                        <li>Corrosion and pitting detection</li>
                        <li>Full 360° pipe body coverage</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Ultrasonic Thickness & Lamination Testing</h3>
                    <p>Precision ultrasonic wall thickness measurement and lamination detection using automated UT systems for full pipe body coverage.</p>
                    <ul>
                        <li>Full-length wall thickness mapping</li>
                        <li>Minimum remaining wall verification</li>
                        <li>Lamination and inclusion detection</li>
                        <li>Bond integrity for clad pipe</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Thread & Connection Inspection</h3>
                    <p>Precision thread inspection using certified API gauges, optical comparators, and specialized thread inspection tools.</p>
                    <ul>
                        <li>API 5B thread dimensional verification</li>
                        <li>Thread profile analysis</li>
                        <li>Surface finish assessment</li>
                        <li>Galling and damage detection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Material Verification & Testing</h3>
                    <p>Positive material identification and mechanical property verification confirming API grade and material specifications.</p>
                    <ul>
                        <li>Positive Material Identification (PMI)</li>
                        <li>Hardness testing (HRC, HB, HV)</li>
                        <li>Grade verification per API 5CT</li>
                        <li>Sour service verification (NACE MR0175)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Dimensional & Visual Inspection</h3>
                    <p>Precision dimensional measurement and visual inspection per API specifications for all OCTG products.</p>
                    <ul>
                        <li>Outside diameter measurement</li>
                        <li>Ovality and straightness verification</li>
                        <li>Length measurement and documentation</li>
                        <li>Visual inspection for mechanical damage</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Pressure & Drift Testing</h3>
                    <p>Hydrostatic pressure testing and internal diameter drift verification for casing and tubing products.</p>
                    <ul>
                        <li>Hydrostatic pressure testing</li>
                        <li>Internal drift diameter verification</li>
                        <li>Leak detection and seal verification</li>
                        <li>Test documentation and certification</li>
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
                    <h2>Our OCTG Inspection Workflow</h2>
                    <p>Systematic inspection process ensuring complete coverage, accurate detection, and reliable classification of all tubular products.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Receiving & Identification</h4>
                                <p>Tube tally, identification verification, and initial visual inspection for gross damage before entering inspection line.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-magnet"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Full-Length NDT Scanning</h4>
                                <p>Automated EMI and UT scanning of entire pipe body with defect marking and classification per API standards.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Thread & Connection Inspection</h4>
                                <p>Precision thread gauging, visual inspection, and connection verification using API-certified tools.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Classification & Documentation</h4>
                                <p>Grade classification, defect documentation, and certification package preparation for client records.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our OCTG Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/api-5ct-cert.png" alt="API 5CT">
                            <img src="/www/assets/images/certs/api-5b-cert.png" alt="API 5B">
                            <img src="/www/assets/images/certs/ds1-cert.png" alt="DS-1">
                            <img src="/www/assets/images/certs/asnt-cert.png" alt="ASNT">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/octg/inspection-workflow.jpg" alt="OCTG Inspection Workflow">
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
                            <span>Full-Length Coverage</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Automated Scanning Systems</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>API Certified Inspectors</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Complete Documentation</span>
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
                <h2>Your Trusted OCTG Inspection Partner</h2>
                <p>API-certified inspectors and advanced inspection technologies for reliable tubular assessment</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>API Certified Inspectors</h3>
                    <p>API 5CT, API 5B, and DS-1 certified inspectors with extensive OCTG inspection experience across drilling operations worldwide.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Advanced Inspection Technology</h3>
                    <p>State-of-the-art EMI and UT inspection systems providing full-length, 360° coverage with high-speed processing capabilities.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Turnaround</h3>
                    <p>High-capacity inspection lines capable of processing 200-500 joints per day to support urgent drilling and warehouse operations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>Over 50,000 tubulars inspected across onshore and offshore drilling operations with documented quality and reliability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Pan-India Coverage</h3>
                    <p>Mobile inspection units and fixed facilities serving drilling locations and supply bases across India.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive inspection reports, certification packages, and electronic records with full traceability for each inspected tubular.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>OCTG Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What API standards apply to OCTG inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary standards include API 5CT (casing and tubing specification), API 5B (thread gauging and inspection), API RP 7G (drill pipe inspection), and DS-1 (drill pipe classification). Our inspectors are certified to these standards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What defects can OCTG inspection detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>OCTG inspection detects transverse and longitudinal cracks, fatigue damage, corrosion, pitting, wall thickness reduction, ovality, straightness issues, thread damage, galling, cross-threading, lamination, inclusions, and mechanical damage.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between new and used OCTG inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>New OCTG inspection verifies manufacturing quality and API compliance. Used OCTG inspection includes additional evaluation for service-induced damage, fatigue, wear, and corrosion, plus classification grading (Class 1-5 per DS-1 for drill pipe).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How many joints can you inspect per day?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our automated inspection lines can process 200-500 joints per day depending on pipe size, required inspection scope, and documentation requirements. Contact us for specific throughput estimates.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you inspect premium connections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we inspect premium connections including VAM, Tenaris Hydril, Hunting, and other proprietary connections using manufacturer-specific gauges and inspection criteria when provided.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What OCTG grades can you inspect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We inspect all API grades including J55, K55, N80, L80, C95, P110, Q125, plus proprietary grades from major manufacturers. PMI and hardness testing confirm grade compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide mobile OCTG inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide mobile OCTG inspection units that can be deployed to drilling rigs, supply bases, or warehouse locations throughout India for on-site inspection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive inspection reports including joint-by-joint inspection results, defect documentation, classification grading, thread inspection reports, and complete certification packages per API and client requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your OCTG Reliability</h2>
                <p>Contact our OCTG inspection specialists for API-compliant tubular testing and certification</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:octg@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email OCTG Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> API 5CT Certified</span>
                    <span><i class="fas fa-check"></i> Full-Length Coverage</span>
                    <span><i class="fas fa-check"></i> Rapid Turnaround</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Oil & Gas Services</h2>
                <p>Comprehensive inspection solutions for drilling and production operations</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/third-party-inspection/asset-integrity-rbi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Asset Integrity & RBI</h3>
                    <p>Risk-based inspection planning for oil and gas facilities</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/shutdown-turnaround-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Turnaround Inspection</h3>
                    <p>Shutdown and turnaround support services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT Inspection</h3>
                    <p>Advanced ultrasonic testing for critical components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Rope Access UT</h3>
                    <p>Ultrasonic thickness at height for facilities</p>
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