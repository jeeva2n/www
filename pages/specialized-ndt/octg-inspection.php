<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "OCTG Inspection Services | Oil Country Tubular Goods Testing | API 5CT/5DP Certified | Alpha Sonix NDT Solutions";
$meta_description = "Professional OCTG (Oil Country Tubular Goods) inspection services for drill pipe, casing, tubing, and completion equipment. Comprehensive testing including dimensional verification, electromagnetic inspection, UT testing, thread inspection, and visual examination per API 5CT, API 5DP, API 5L, ISO 11960 standards. Certified inspectors ensuring drilling safety, operational reliability, and asset protection.";
$meta_keywords = "OCTG inspection, oil country tubular goods, drill pipe inspection, casing inspection, tubing inspection, API 5CT, API 5DP, electromagnetic testing, thread inspection, dimensional inspection, drilling equipment testing, tubular goods NDT";
$canonical_url = "https://alphasonix.com/pages/specialized-inspection/octg-inspection.php";
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
    <meta property="og:image" content="https://alphasonix.com/www/assets/images/services/octg-inspection-og.jpg">
    
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
        "description": "Comprehensive OCTG inspection services for oil country tubular goods including drill pipe, casing, tubing testing per API 5CT, API 5DP, ISO 11960 standards ensuring drilling safety and equipment reliability."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('https://picsum.photos/id/1044/1920/1080');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Specialized Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>OCTG Inspection</span>
                </div>
                <h1 class="page-title">OCTG Inspection Services</h1>
                <p class="page-subtitle">Critical quality assurance for Oil Country Tubular Goods—ensuring drilling safety, operational reliability, and asset protection through comprehensive testing and certification</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> API 5CT/5DP Certified</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> ISO 11960 Compliant</span>
                    <span class="badge"><i class="fas fa-tools"></i> Multi-Technique Testing</span>
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
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Critical Safety Assurance</h3>
                    <p>OCTG failures can cause catastrophic blowouts, lost holes, and safety incidents. Our comprehensive inspection ensures tubular goods meet all safety and performance requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Multi-Technique Testing</h3>
                    <p>Complete inspection coverage using electromagnetic testing, ultrasonic examination, visual inspection, dimensional verification, thread inspection, and hardness testing.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>API/ISO Certified Testing</h3>
                    <p>All testing performed per API 5CT, API 5DP, API 5L, ISO 11960, and proprietary specifications by certified inspectors with traceable calibration and documentation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Asset Protection & Cost Avoidance</h3>
                    <p>Prevent costly drilling failures, stuck pipe incidents, and equipment losses through proactive quality verification—protecting multi-million dollar drilling operations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS OCTG INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">CRITICAL DRILLING EQUIPMENT QA</span>
                    <h2>What is OCTG Inspection?</h2>

                    <p class="lead">OCTG (Oil Country Tubular Goods) Inspection is specialized quality assurance testing for critical drilling and completion equipment including drill pipe, drill collars, casing, tubing, line pipe, and related tubular products used in oil and gas operations. This inspection ensures equipment integrity, safety compliance, and operational reliability in demanding downhole environments.</p>
                    
                    <p>OCTG represents some of the most expensive and safety-critical equipment in oil and gas operations. A single drill string can cost $1-10+ million, while casing programs may cost $10-50+ million per well. Failure of OCTG can result in catastrophic consequences: blowouts, lost holes, stuck pipe incidents, environmental releases, and safety hazards. Additionally, the high-stress downhole environment (extreme pressure, temperature, corrosive fluids, mechanical loading) demands that every piece of OCTG meets stringent quality and performance standards.</p>

                    <p>Professional OCTG inspection combines multiple NDT techniques, dimensional verification, metallurgical assessment, and performance testing to detect manufacturing defects, service-induced damage, and quality deviations before equipment enters service. Testing is performed per API 5CT (Casing & Tubing), API 5DP (Drill Pipe), API 5L (Line Pipe), ISO 11960, and customer-specific requirements, with full traceability and certification supporting operational safety and asset protection.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>New Goods Inspection & Verification</strong>
                                <p>Comprehensive testing of new OCTG including dimensional verification, electromagnetic testing, ultrasonic examination, visual inspection, thread verification, and metallurgical confirmation ensuring compliance with purchase specifications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Used Equipment Inspection & Grading</strong>
                                <p>Detailed assessment of used OCTG including wear measurement, fatigue evaluation, corrosion assessment, thread condition, and remaining life evaluation supporting re-use decisions and inventory management.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Thread Inspection & Verification</strong>
                                <p>Critical thread geometry verification, surface condition assessment, thread compound compatibility, makeup/breakout analysis, and connection integrity evaluation ensuring reliable seal performance and structural adequacy.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Specialized Testing & Metallurgical Services</strong>
                                <p>Advanced testing including hardness surveys, chemical analysis, mechanical testing, corrosion resistance evaluation, and specialized assessments for sour service, high-temperature, or challenging applications.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Cost of OCTG Failure:</strong>
                            <p>OCTG failures can cost $100,000-$50,000,000+ per incident including stuck pipe recovery ($50k-$5M), lost hole costs ($1M-$20M), blowout consequences ($10M-$100M+), environmental cleanup, legal liability, and operational delays. Professional inspection costing $50-500 per joint can prevent failures costing 1,000-100,000x more.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request OCTG Testing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="https://picsum.photos/id/162/600/400" alt="OCTG Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Comprehensive OCTG inspection using electromagnetic testing and dimensional verification</span>
                        </div>
                    </div>

                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">10,000+</span>
                            <span class="stat-label">Joints Tested</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">API Compliant</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Service Available</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-list-check"></i> OCTG Inspection Elements</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Visual examination (defects, markings, condition)</li>
                            <li><strong>2.</strong> Dimensional verification (OD, ID, wall, length)</li>
                            <li><strong>3.</strong> Electromagnetic testing (longitudinal flaws)</li>
                            <li><strong>4.</strong> Ultrasonic testing (wall thickness, transverse flaws)</li>
                            <li><strong>5.</strong> Thread inspection (geometry, condition, compound)</li>
                            <li><strong>6.</strong> Hardness testing (mechanical properties)</li>
                            <li><strong>7.</strong> Magnetic particle testing (surface/near-surface flaws)</li>
                            <li><strong>8.</strong> Documentation & certification</li>
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
                <span class="section-label">VALUE OF PROFESSIONAL OCTG TESTING</span>
                <h2>Key Benefits of OCTG Inspection Services</h2>
                <p>Risk mitigation, cost avoidance, and operational reliability through comprehensive quality assurance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <h3>Catastrophic Failure Prevention</h3>
                    <p>Comprehensive testing detects critical defects before equipment enters service, preventing blowouts, stuck pipe, lost holes, and safety incidents that can cost millions and threaten personnel safety.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Cost Avoidance & Asset Protection</h3>
                    <p>Early detection of defects prevents costly drilling failures ($100k-$50M+ per incident), protects expensive OCTG investments, and avoids operational delays, insurance claims, and legal liability.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Regulatory & Specification Compliance</h3>
                    <p>Testing per API 5CT, API 5DP, API 5L, ISO 11960, and customer specifications ensures compliance with industry standards, regulatory requirements, and contractual obligations—supporting audit readiness.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3>Optimal Asset Utilization</h3>
                    <p>Professional grading of used OCTG maximizes re-use potential, extends equipment life, optimizes inventory management, and supports sustainable drilling economics through informed re-deployment decisions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Operational Efficiency</h3>
                    <p>Fast, accurate inspection turnaround minimizes equipment staging time, supports drilling schedules, enables just-in-time delivery, and reduces inventory carrying costs while maintaining quality assurance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Traceable Quality Documentation</h3>
                    <p>Complete certification packages with test results, calibration records, and compliance documentation support equipment traceability, warranty claims, insurance requirements, and technical reviews.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OCTG TESTING COMPARISON ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TESTING METHODOLOGY</span>
                <h2>New vs. Used OCTG Inspection Requirements</h2>
                <p>Customized testing protocols based on equipment condition, application, and risk assessment</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-list-ul"></i> Inspection Element</th>
                            <th><i class="fas fa-plus"></i> New OCTG</th>
                            <th><i class="fas fa-history"></i> Used OCTG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Visual Examination</strong></td>
                            <td>Manufacturing defects, surface condition, markings verification</td>
                            <td>Wear assessment, fatigue cracking, corrosion, handling damage</td>
                        </tr>
                        <tr>
                            <td><strong>Dimensional Verification</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Full dimensional compliance per specification</td>
                            <td>Wear measurement, ovality, wall loss, length verification</td>
                        </tr>
                        <tr>
                            <td><strong>Electromagnetic Testing (ET)</strong></td>
                            <td>Longitudinal flaw detection, inclusion detection</td>
                            <td class="excellent"><i class="fas fa-star"></i> Enhanced sensitivity for service-induced cracking</td>
                        </tr>
                        <tr>
                            <td><strong>Ultrasonic Testing (UT)</strong></td>
                            <td>Wall thickness verification, transverse flaw detection</td>
                            <td>Wear measurement, remaining wall, internal damage assessment</td>
                        </tr>
                        <tr>
                            <td><strong>Thread Inspection</strong></td>
                            <td>Geometry verification, surface finish, compound compatibility</td>
                            <td class="excellent"><i class="fas fa-star"></i> Wear assessment, galling, seal surface integrity</td>
                        </tr>
                        <tr>
                            <td><strong>Hardness Testing</strong></td>
                            <td>Mechanical property verification, heat treatment confirmation</td>
                            <td>Degradation assessment, work hardening evaluation</td>
                        </tr>
                        <tr>
                            <td><strong>Additional Testing</strong></td>
                            <td>Chemical analysis, mechanical testing (if required)</td>
                            <td>Fatigue assessment, remaining life evaluation, fitness-for-service</td>
                        </tr>
                        <tr>
                            <td><strong>Documentation Level</strong></td>
                            <td>Mill certification, material traceability, compliance verification</td>
                            <td>Service history, grading classification, re-use recommendations</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-lightbulb"></i>
                <div>
                    <p><strong>Selection Guidance:</strong> New OCTG inspection focuses on <strong>manufacturing quality compliance</strong> and specification verification. Used OCTG inspection emphasizes <strong>service-induced damage assessment</strong>, remaining life evaluation, and fitness for continued service. Both require API/ISO compliance but with different acceptance criteria reflecting equipment history and intended application.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">OCTG APPLICATIONS</span>
                <h2>Equipment Types & Operations We Serve</h2>
                <p>Comprehensive OCTG testing across drilling, completion, workover, and production operations</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="drilling">Drilling Equipment</button>
                    <button class="tab-btn" data-tab="completion">Completion & Production</button>
                    <button class="tab-btn" data-tab="specialized">Specialized Applications</button>
                    <button class="tab-btn" data-tab="services">Service & Workover</button>
                </div>

                <div class="tabs-content">
                    <!-- Drilling Equipment Tab -->
                    <div class="tab-panel active" id="drilling">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/1009/600/400" alt="Drill Pipe Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Drilling Equipment Testing</h3>
                                <p>Critical inspection of drill string components ensuring safe, reliable drilling operations in diverse environments from shallow conventional wells to deep HPHT and harsh-environment applications.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Drill pipe (all sizes, grades, connections) - API 5DP testing</li>
                                    <li><i class="fas fa-check"></i> Drill collars & heavy-weight drill pipe (HWDP)</li>
                                    <li><i class="fas fa-check"></i> Premium connection drill pipe (double shoulder, flush joint)</li>
                                    <li><i class="fas fa-check"></i> Kelly bars, subs, and specialized drilling tools</li>
                                    <li><i class="fas fa-check"></i> High-strength alloy drill pipe (S-135, V-150)</li>
                                    <li><i class="fas fa-check"></i> Aluminum drill pipe & specialty lightweight strings</li>
                                    <li><i class="fas fa-check"></i> Coiled tubing drilling strings & BHA components</li>
                                    <li><i class="fas fa-check"></i> Thread protectors, handling tools, and accessories</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 5DP</span>
                                    <span class="standard-tag">API 7G</span>
                                    <span class="standard-tag">ISO 11961</span>
                                    <span class="standard-tag">IADC Standards</span>
                                    <span class="standard-tag">OEM Specifications</span>
                                </div>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-oil-well"></i> Deep Water Drill String Inspection</h4>
                                    <p><strong>Project:</strong> 600-joint S-135 drill pipe string for 25,000ft deepwater well, 20k psi working pressure, H2S service</p>
                                    <p><strong>Testing Scope:</strong> 100% electromagnetic testing, dimensional verification, thread inspection, hardness surveys, chemistry verification</p>
                                    <p><strong>Critical Findings:</strong> 12 joints rejected for electromagnetic indications, 8 joints for dimensional non-conformance, 3 for thread issues</p>
                                    <p><strong>Value Delivered:</strong> Prevented potential $15M+ stuck pipe incident, ensured drilling program success, delivered traceable quality documentation</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Completion & Production Tab -->
                    <div class="tab-panel" id="completion">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/1040/600/400" alt="Casing and Tubing Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Casing, Tubing & Completion Equipment</h3>
                                <p>Comprehensive testing of well completion and production equipment ensuring long-term integrity, pressure containment, and operational reliability in demanding production environments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Production casing (surface, intermediate, production strings) - API 5CT</li>
                                    <li><i class="fas fa-check"></i> Production tubing (conventional and premium connections)</li>
                                    <li><i class="fas fa-check"></i> Premium connection casing (VAM, Tenaris, Baker Hughes)</li>
                                    <li><i class="fas fa-check"></i> Corrosion-resistant alloy (CRA) tubing and casing</li>
                                    <li><i class="fas fa-check"></i> Liner pipe, tie-back strings, and expandable tubulars</li>
                                    <li><i class="fas fa-check"></i> Screen pipe, slotted liners, and sand control equipment</li>
                                    <li><i class="fas fa-check"></i> Duplex/super duplex tubing for corrosive service</li>
                                    <li><i class="fas fa-check"></i> Thermal well tubing and high-temperature applications</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 5CT</span>
                                    <span class="standard-tag">ISO 11960</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                    <span class="standard-tag">API 5CRA</span>
                                    <span class="standard-tag">ISO 13679</span>
                                </div>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-industry"></i> Sour Gas Casing Program</h4>
                                    <p><strong>Application:</strong> High-pressure sour gas well, 15,000 psi, 15% H2S, 25% CO2, critical sealing requirements</p>
                                    <p><strong>Material:</strong> Premium L80-13Cr casing with gas-tight connections, NACE MR0175 compliance required</p>
                                    <p><strong>Testing:</strong> Enhanced electromagnetic testing, hardness surveys, chemistry verification, thread inspection, seal surface evaluation</p>
                                    <p><strong>Outcome:</strong> Zero casing failures over 10-year production life, successful sour service operation, regulatory compliance maintained</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialized Applications Tab -->
                    <div class="tab-panel" id="specialized">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/1012/600/400" alt="Specialized OCTG Applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialized & High-Performance OCTG</h3>
                                <p>Advanced testing for specialized applications including HPHT service, corrosive environments, thermal applications, and premium performance requirements demanding enhanced quality assurance.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> HPHT drilling & completion equipment (20k+ psi, 400°F+)</li>
                                    <li><i class="fas fa-check"></i> Geothermal drilling tubing and casing systems</li>
                                    <li><i class="fas fa-check"></i> Coiled tubing for drilling, completion, and intervention</li>
                                    <li><i class="fas fa-check"></i> Carbon fiber composite drill pipe and specialty strings</li>
                                    <li><i class="fas fa-check"></i> Expandable casing and tubular expansion systems</li>
                                    <li><i class="fas fa-check"></i> Pipeline riser and conductor pipe applications</li>
                                    <li><i class="fas fa-check"></i> Wireline and slickline equipment support tubing</li>
                                    <li><i class="fas fa-check"></i> Custom engineered tubulars for special applications</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 5CT (Modified)</span>
                                    <span class="standard-tag">Customer Specifications</span>
                                    <span class="standard-tag">ISO 13679 (CAL IV/V)</span>
                                    <span class="standard-tag">NACE MR0175/ISO 15156</span>
                                </div>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-fire"></i> Geothermal OCTG Program</h4>
                                    <p><strong>Challenge:</strong> 450°F geothermal production, highly corrosive brine, thermal cycling, conventional steels inadequate</p>
                                    <p><strong>Solution:</strong> Super 13Cr tubing with premium connections, enhanced material testing, thermal property verification</p>
                                    <p><strong>Testing Protocol:</strong> Chemistry analysis, mechanical properties, corrosion testing, thermal expansion verification, connection qualification</p>
                                    <p><strong>Results:</strong> 20+ year service life achieved, minimal corrosion rates, successful thermal cycling performance, production targets met</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service & Workover Tab -->
                    <div class="tab-panel" id="services">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/1060/600/400" alt="Workover Equipment">
                            </div>
                            <div class="tab-text">
                                <h3>Service, Workover & Intervention Equipment</h3>
                                <p>Quality assurance for service rig and workover equipment where equipment utilization rates are high and failure consequences include rig downtime, lost production, and safety hazards.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Workover tubing and completion strings</li>
                                    <li><i class="fas fa-check"></i> Service rig drill pipe and workover pipe</li>
                                    <li><i class="fas fa-check"></i> Coiled tubing for well intervention and cleanout</li>
                                    <li><i class="fas fa-check"></i> Sucker rod strings and artificial lift equipment</li>
                                    <li><i class="fas fa-check"></i> Snubbing unit tubing and high-pressure strings</li>
                                    <li><i class="fas fa-check"></i> Fishing tools, jarring assemblies, and downhole tools</li>
                                    <li><i class="fas fa-check"></i> Velocity strings, gas lift mandrels, and production optimization</li>
                                    <li><i class="fas fa-check"></i> Re-usable equipment grading and life extension assessment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 5CT</span>
                                    <span class="standard-tag">API 5DP</span>
                                    <span class="standard-tag">API 11B</span>
                                    <span class="standard-tag">ANSI/API Standards</span>
                                </div>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-wrench"></i> Service Company Fleet Management</h4>
                                    <p><strong>Client:</strong> Multi-national service company with 500+ workover strings, high utilization, mixed equipment age and condition</p>
                                    <p><strong>Program:</strong> Risk-based inspection program, equipment grading system, lifecycle management, predictive maintenance</p>
                                    <p><strong>Implementation:</strong> Standardized inspection protocols, mobile inspection units, real-time data systems, inventory optimization</p>
                                    <p><strong>Results:</strong> 40% reduction in equipment failures, 25% improvement in utilization, $2M+ annual savings, enhanced safety performance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OUR OCTG TESTING SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE OCTG QA SOLUTIONS</span>
                <h2>Our OCTG Inspection Services</h2>
                <p>Complete testing coverage from incoming inspection through end-of-life assessment—protecting assets and operations</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>New OCTG Incoming Inspection</h3>
                    <p>Comprehensive testing of new tubular goods ensuring compliance with purchase specifications, API/ISO standards, and quality requirements before equipment enters service.</p>
                    <ul>
                        <li>Visual examination per API 5CT/5DP standards</li>
                        <li>Dimensional verification (OD, ID, wall thickness, length, weight)</li>
                        <li>Electromagnetic testing (longitudinal flaw detection)</li>
                        <li>Ultrasonic testing (wall thickness, transverse flaws)</li>
                        <li>Thread inspection (geometry, surface finish, compound)</li>
                        <li>Hardness testing and mechanical property verification</li>
                        <li>Material certification and chemistry verification</li>
                        <li>Marking verification and traceability documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Used OCTG Inspection & Grading</h3>
                    <p>Detailed assessment of used tubular goods determining fitness for continued service, remaining life, grade classification, and re-use recommendations for inventory management.</p>
                    <ul>
                        <li>Service-induced damage assessment (wear, fatigue, corrosion)</li>
                        <li>Electromagnetic testing with enhanced sensitivity settings</li>
                        <li>Wear measurement and remaining wall calculation</li>
                        <li>Thread condition assessment and re-usability determination</li>
                        <li>Fatigue evaluation and crack detection</li>
                        <li>Classification per industry grading systems (Premium, Class 2, Scrap)</li>
                        <li>Remaining life assessment and service recommendations</li>
                        <li>Economic analysis supporting re-use vs. replacement decisions</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Thread Inspection & Connection Testing</h3>
                    <p>Specialized thread inspection ensuring connection integrity, seal performance, and structural adequacy—critical for pressure containment and operational safety.</p>
                    <ul>
                        <li>Thread geometry verification (pitch, taper, lead, flank angles)</li>
                        <li>Thread surface finish measurement and quality assessment</li>
                        <li>Seal surface inspection (smoothness, roundness, concentricity)</li>
                        <li>Thread compound compatibility and application verification</li>
                        <li>Makeup/breakout torque analysis and joint evaluation</li>
                        <li>Gas-tight connection testing (where required)</li>
                        <li>Premium connection inspection per OEM specifications</li>
                        <li>Connection performance documentation and certification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Advanced NDT & Specialized Testing</h3>
                    <p>Enhanced testing techniques for critical applications, challenging environments, or special requirements demanding advanced assessment methods and capabilities.</p>
                    <ul>
                        <li>Phased array ultrasonic testing (PAUT) for complex geometries</li>
                        <li>Full-body ultrasonic inspection (rotary/helical scanning)</li>
                        <li>Eddy current testing for near-surface flaw detection</li>
                        <li>Magnetic particle testing for surface crack detection</li>
                        <li>Dye penetrant testing for surface-breaking discontinuities</li>
                        <li>Digital radiography for internal flaw characterization</li>
                        <li>Corrosion assessment and remaining thickness evaluation</li>
                        <li>Metallurgical analysis and failure investigation support</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Fleet Management & Inventory Optimization</h3>
                    <p>Comprehensive OCTG asset management programs combining inspection data, utilization tracking, and lifecycle optimization for drilling contractors and service companies.</p>
                    <ul>
                        <li>Equipment database development and maintenance</li>
                        <li>Risk-based inspection planning and scheduling</li>
                        <li>Real-time condition monitoring and tracking</li>
                        <li>Utilization optimization and inventory management</li>
                        <li>Predictive maintenance and replacement planning</li>
                        <li>Cost analysis and economic optimization</li>
                        <li>Performance metrics and KPI dashboards</li>
                        <li>Regulatory compliance and audit support</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Mobile & On-Site Testing Services</h3>
                    <p>Flexible service delivery including mobile inspection units, rig site testing, and remote location support minimizing logistics costs and equipment handling.</p>
                    <ul>
                        <li>Mobile inspection units with full testing capabilities</li>
                        <li>Rig site inspection and testing services</li>
                        <li>Remote location deployment and support</li>
                        <li>Equipment staging area and laydown yard testing</li>
                        <li>Emergency inspection and failure investigation</li>
                        <li>Real-time reporting and data transmission</li>
                        <li>24/7 service availability for critical operations</li>
                        <li>Integrated logistics and supply chain support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTING EQUIPMENT & TECHNOLOGY ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">ADVANCED TESTING TECHNOLOGY</span>
                    <h2>OCTG Inspection Equipment & Capabilities</h2>
                    <p>We deploy state-of-the-art inspection equipment specifically designed for OCTG testing, with calibration traceability, automated data collection, and rapid throughput capability supporting high-volume operations and critical deadlines.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-magnet"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Electromagnetic Testing Systems</h4>
                                <p><strong>Rotary ET Systems:</strong> Full-body electromagnetic inspection with 8+ channel detection, automated handling, high-speed throughput (up to 200 joints/hour). <strong>Capabilities:</strong> Longitudinal flaw detection, inclusion detection, calibrated sensitivity per API 5CT/5DP. <strong>Calibration:</strong> Reference standards, EDM notches, calibration verification per API requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-sound"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Ultrasonic Testing Equipment</h4>
                                <p><strong>Multi-Zone UT Systems:</strong> Simultaneous wall thickness measurement and transverse flaw detection with automated scanning and data logging. <strong>PAUT Systems:</strong> Phased array capability for complex geometries and enhanced flaw characterization. <strong>Applications:</strong> Wall thickness verification, internal/external flaw detection, weld inspection, specialty geometry assessment.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Dimensional Measurement Systems</h4>
                                <p><strong>Automated Measurement:</strong> Laser/optical systems for OD/ID measurement, wall thickness, length, weight verification. <strong>Thread Inspection:</strong> Coordinate measuring machines (CMM), optical thread measurement, gauge verification systems. <strong>Precision:</strong> ±0.001" accuracy, statistical process control, automated pass/fail determination, full traceability.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hammer"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Hardness & Metallurgical Testing</h4>
                                <p><strong>Hardness Testing:</strong> Rockwell, Brinell, and Vickers hardness testers with statistical sampling and mapping capability. <strong>Metallurgical Support:</strong> Portable XRF for chemistry verification, metallographic equipment, mechanical testing capability. <strong>Specialized Testing:</strong> Hydrogen embrittlement assessment, corrosion testing, impact testing for low-temperature service.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Visual & Surface Inspection</h4>
                                <p><strong>Visual Systems:</strong> Automated visual inspection with high-resolution cameras, programmable lighting, defect detection algorithms. <strong>Surface Testing:</strong> Magnetic particle testing equipment, dye penetrant inspection, surface roughness measurement. <strong>Documentation:</strong> Digital photography, defect mapping, automated reporting systems.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Management & Reporting Systems</h4>
                                <p><strong>Inspection Database:</strong> Real-time data collection, equipment tracking, test result storage, trend analysis. <strong>Reporting:</strong> Automated report generation, API/ISO compliance documentation, certificate production. <strong>Integration:</strong> ERP system interfaces, mobile access, cloud-based storage, client portal access for real-time status monitoring.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Calibration & Quality Assurance</h4>
                        <p>All critical inspection equipment undergoes calibration per manufacturer recommendations and NIST traceability. Reference standards, calibration blocks, and verification artifacts are maintained and verified regularly. Quality system compliance per ISO 9001:2015 ensures consistent, reliable inspection results with full documentation and traceability.</p>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="https://picsum.photos/id/110/600/400" alt="OCTG Testing Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>OCTG Inspection Process Overview</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Automated ET/UT Testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>High-Speed Throughput</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Real-Time Data Collection</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Automated Reporting</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h3>Standards & Certifications</h3>
                        <div class="cert-grid">
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/25/100/50" alt="API 5CT">
                                <span>API 5CT</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/26/100/50" alt="API 5DP">
                                <span>API 5DP</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/27/100/50" alt="ISO 11960">
                                <span>ISO 11960</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/28/100/50" alt="ASNT">
                                <span>ASNT Level III</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/29/100/50" alt="ISO 9001">
                                <span>ISO 9001:2015</span>
                            </div>
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
                <h2>Your Trusted OCTG Testing Partner</h2>
                <p>Proven expertise, advanced technology, and unwavering commitment to quality and safety</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Deep OCTG Expertise</h3>
                    <p>Decades of experience in OCTG inspection across all equipment types, applications, and operating environments. Our team includes certified NDT professionals, metallurgical engineers, and drilling industry specialists with comprehensive knowledge of failure modes and testing requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>High-Volume Capability</h3>
                    <p>Advanced automated inspection systems capable of processing 200+ joints per hour with full documentation. Multiple inspection lines, 24/7 operation capability, and rapid turnaround supporting critical drilling schedules and operational deadlines.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <h3>Uncompromising Quality</h3>
                    <p>ISO 9001:2015 certified quality management system governing all inspection processes. NIST-traceable calibration, statistical process control, independent verification, and comprehensive documentation ensuring consistent, reliable results.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Flexible Service Delivery</h3>
                    <p>Complete range of service options including facility-based testing, mobile inspection units, rig site services, and remote location deployment. Customized logistics solutions minimizing equipment handling and transportation costs while maintaining quality standards.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Technology Integration</h3>
                    <p>State-of-the-art inspection equipment combined with advanced data management systems, real-time reporting, and predictive analytics. Digital transformation supporting modern drilling operations with enhanced efficiency and transparency.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Partnership Approach</h3>
                    <p>Long-term partnerships with drilling contractors, service companies, and operators focused on continuous improvement, cost optimization, and risk mitigation. Technical consultancy, training support, and collaborative problem-solving extending beyond basic inspection services.</p>
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
                        <h3>Why is OCTG inspection critical for drilling operations?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>OCTG represents the most expensive and safety-critical equipment in drilling operations. <strong>Drill pipe failures</strong> can cause stuck pipe incidents costing $100k-$5M+, lost holes costing $1M-$20M+, and potential blowouts with catastrophic consequences. <strong>Casing failures</strong> can result in well control incidents, environmental releases, and complete loss of well investment ($10M-$100M+). Professional inspection detects manufacturing defects, service-induced damage, and quality deviations before equipment enters service, preventing failures that cost 1,000-100,000x more than inspection. Additionally, regulatory and insurance requirements often mandate comprehensive testing for high-risk drilling operations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What testing is required for new vs. used OCTG?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>New OCTG</strong> requires verification of manufacturing quality and specification compliance: dimensional verification, electromagnetic testing for manufacturing flaws, ultrasonic testing, visual examination, thread inspection, hardness testing, and material certification verification per API 5CT/5DP/5L standards. <strong>Used OCTG</strong> requires assessment of service-induced damage: enhanced electromagnetic testing for fatigue cracking, wear measurement, thread condition assessment, corrosion evaluation, remaining life analysis, and fitness-for-service determination. <strong>Key difference:</strong> New goods focus on manufacturing compliance; used goods focus on service degradation and remaining useful life. Both require API/ISO compliance but with different acceptance criteria.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does OCTG inspection take and what are the costs?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Timeline depends on scope and throughput requirements.</strong> Automated systems can process 100-200+ joints per hour for standard testing. Typical programs: <strong>Drill string (300 joints):</strong> 2-3 days including documentation. <strong>Casing program (1,000+ joints):</strong> 1-2 weeks depending on complexity. <strong>Emergency/rush testing:</strong> 24-hour turnaround available. <strong>Costs vary by:</strong> Testing scope ($50-500+ per joint), equipment type, volume, location, urgency, documentation requirements. <strong>Cost perspective:</strong> Comprehensive testing typically costs 0.1-1% of equipment value but prevents failures costing 10-1000x more. Example: $200/joint testing on $50,000 drill pipe joint (0.4% cost) can prevent $1M+ stuck pipe incident—ROI of 5,000:1 or better.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the most common OCTG defects and failure modes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>New OCTG defects:</strong> (1) Manufacturing flaws (seams, laps, inclusions), (2) Dimensional non-conformance (wall thickness, diameter, straightness), (3) Thread defects (geometry errors, surface finish, machining issues), (4) Material property deviations (chemistry, hardness, heat treatment), (5) Handling damage (dents, scratches, thread damage). <strong>Used OCTG degradation:</strong> (1) Fatigue cracking (especially near threads and stress concentrations), (2) Wear and wall loss (ID/OD), (3) Thread damage (galling, wear, seal surface degradation), (4) Corrosion (general, pitting, stress corrosion cracking), (5) Mechanical damage (dents, cuts, upset failure). <strong>Critical areas:</strong> Thread connections (highest stress), tool joint areas, areas of previous repair, and locations with stress concentrations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does electromagnetic testing work for OCTG?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Electromagnetic (ET) testing</strong> uses induced magnetic fields to detect discontinuities in ferromagnetic tubular goods. The tube is rotated through electromagnetic coils that induce eddy currents in the material. <strong>Flaws such as:</strong> longitudinal cracks, seams, laps, inclusions, and corrosion cause changes in the electromagnetic field that are detected by receiver coils and converted to electrical signals. <strong>Advantages:</strong> High-speed testing (200+ joints/hour), excellent sensitivity to longitudinal flaws, automated operation, full-body coverage, real-time results. <strong>Calibration:</strong> EDM notches, artificial defects, and reference standards per API requirements. <strong>Limitations:</strong> Limited to ferromagnetic materials, primarily detects longitudinal flaws, may require secondary testing for transverse defects. Typically combined with ultrasonic testing for comprehensive coverage.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided with OCTG inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Comprehensive certification package includes:</strong> (1) <strong>Individual joint certificates</strong> with unique serial numbers, test results, acceptance status, and inspector identification, (2) <strong>Summary reports</strong> with statistical analysis, acceptance rates, rejection summaries, and trend analysis, (3) <strong>Calibration records</strong> for all inspection equipment with NIST traceability, (4) <strong>Procedure documentation</strong> describing test methods, acceptance criteria, and standards compliance, (5) <strong>Quality records</strong> including personnel certifications, equipment maintenance, and quality control checks, (6) <strong>Material certifications</strong> (mill test certificates, chemistry, mechanical properties), (7) <strong>Digital records</strong> with searchable databases, trend analysis, and electronic delivery. Documentation supports equipment traceability, warranty claims, regulatory compliance, insurance requirements, and technical reviews throughout equipment lifecycle.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you provide mobile/on-site OCTG inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Yes—we provide complete mobile inspection capabilities</strong> including: (1) <strong>Mobile inspection units</strong> equipped with electromagnetic testing, ultrasonic testing, dimensional measurement, and documentation systems, (2) <strong>Rig site deployment</strong> for critical operations requiring immediate turnaround, (3) <strong>Remote location services</strong> including offshore platforms, international locations, and challenging access sites, (4) <strong>Laydown yard testing</strong> at equipment staging areas minimizing handling and logistics costs, (5) <strong>Emergency response</strong> for failure investigations and urgent inspection requirements. <strong>Advantages:</strong> Reduced transportation costs, faster turnaround, minimized equipment handling, on-site technical support, real-time results. Mobile units maintain the same quality standards, calibration requirements, and documentation as facility-based testing while providing maximum flexibility and responsiveness.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you ensure quality and reliability of OCTG inspection results?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Quality assurance through systematic controls:</strong> (1) <strong>Personnel certification:</strong> ASNT Level II & Level III certified technicians with OCTG-specific training and competency demonstration, (2) <strong>Equipment calibration:</strong> NIST-traceable calibration per API requirements with daily verification checks and reference standard validation, (3) <strong>Procedure compliance:</strong> Written procedures per API 5CT/5DP/5L with documented training and qualification, (4) <strong>Independent verification:</strong> Statistical sampling, blind testing, inter-laboratory comparisons, and third-party audits, (5) <strong>Quality management:</strong> ISO 9001:2015 certified QMS with continuous improvement and corrective action processes, (6) <strong>Documentation control:</strong> Complete records, chain of custody, traceability, and data integrity verification, (7) <strong>Performance monitoring:</strong> Statistical process control, trend analysis, and feedback from field performance. Regular participation in industry working groups and standards development ensures alignment with best practices.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if defects are found during OCTG inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Structured defect management process:</strong> (1) <strong>Immediate notification:</strong> Critical defects reported immediately to client with preliminary assessment and recommendations, (2) <strong>Detailed evaluation:</strong> Engineering assessment of defect significance, safety implications, and repair feasibility using API 579 fitness-for-service methods where applicable, (3) <strong>Disposition options:</strong> Accept (minor defects within tolerance), Repair (if technically feasible and economical), Reject (safety-critical or unrepairable defects), or Use-as-is with operational restrictions, (4) <strong>Repair services:</strong> Coordination with qualified repair facilities for welding, machining, re-threading, or other corrective actions, (5) <strong>Re-inspection:</strong> Comprehensive testing after repair to verify acceptability, (6) <strong>Documentation:</strong> Complete records of findings, dispositions, repairs, and final acceptance status. <strong>Goal:</strong> Maximize equipment utilization while ensuring safety and reliability through informed technical decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Protect Your Drilling Operations with Professional OCTG Testing</h2>
                <p>API 5CT/5DP certified inspection services ensuring equipment quality, operational safety, and asset protection</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request OCTG Testing Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> 24/7 Emergency Service</span>
                    <span><i class="fas fa-check"></i> Mobile Inspection Units</span>
                    <span><i class="fas fa-check"></i> API/ISO Compliance</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Inspection & Testing Services</h2>
                <p>Comprehensive solutions for drilling, completion, and production operations</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/electromagnetic-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Electromagnetic Testing</h3>
                    <p>High-speed automated ET inspection for ferromagnetic tubular goods and components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-sound"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Comprehensive UT inspection for wall thickness, flaw detection, and material characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/specialized-inspection/thread-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Thread Inspection Services</h3>
                    <p>Specialized thread geometry verification and connection integrity testing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Inspection</h3>
                    <p>Comprehensive visual examination and dimensional verification services</p>
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