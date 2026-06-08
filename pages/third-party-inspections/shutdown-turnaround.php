<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Shutdown & Turnaround Inspection Services | Plant Turnaround Support | Alpha Sonix NDT Solutions";
$meta_description = "Professional shutdown and turnaround inspection services. Comprehensive multi-discipline inspection teams, critical path management, QA/QC oversight, and turnaround execution support for refinery and process plant shutdowns.";
$meta_keywords = "shutdown inspection, turnaround inspection, plant shutdown, refinery turnaround, TA inspection, shutdown planning, turnaround management, NDT inspection, multi-discipline inspection, critical path inspection";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/shutdown-turnaround.php";
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
    <meta property="og:image" content="/www/assets/images/services/shutdown-turnaround-og.jpg">
    
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
        "serviceType": "Shutdown & Turnaround Inspection Services",
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
        "description": "Professional shutdown and turnaround inspection services ensuring safe, efficient, and on-schedule completion of plant maintenance outages."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/shutdown/turnaround1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Shutdown & Turnaround Inspection</span>
                </div>
                <h1 class="page-title">Shutdown & Turnaround Inspection Services</h1>
                <p class="page-subtitle">Comprehensive inspection support for safe, efficient, and on-schedule completion of plant shutdowns and turnarounds</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-users"></i> Multi-Discipline Teams</span>
                    <span class="badge"><i class="fas fa-clock"></i> 24/7 Support</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Critical Path Focus</span>
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
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Pre-Shutdown Planning</h3>
                    <p>Comprehensive pre-shutdown planning and preparation to ensure efficient execution, proper resources, and minimized turnaround duration.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Multi-Discipline Teams</h3>
                    <p>Experienced inspection teams covering all disciplines including mechanical, welding, NDT, piping, vessels, and rotating equipment.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Critical Path Management</h3>
                    <p>Focus on critical path activities with rapid inspection turnaround and immediate reporting to keep turnaround on schedule.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive inspection documentation, reports, and closeout packages delivered on time for regulatory compliance and startup approval.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SHUTDOWN & TURNAROUND INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">TURNAROUND INSPECTION SERVICES</span>
                    <h2>What is Shutdown & Turnaround Inspection?</h2>
                    <p class="lead">Shutdown and turnaround inspection is a comprehensive, multi-discipline inspection service providing expert oversight and quality assurance during planned plant maintenance outages to ensure safe, efficient, and on-schedule execution.</p>
                    
                    <p>Plant shutdowns and turnarounds are critical events requiring extensive inspection activities to verify equipment integrity, validate maintenance work, and ensure safe return to service. Our experienced inspection teams provide complete support from pre-shutdown planning through startup, covering all inspection disciplines and critical path activities.</p>

                    <p>Turnaround inspection services are essential for maintaining schedule adherence, preventing costly delays, ensuring quality workmanship, and providing the documentation required for regulatory compliance and safe startup. Our teams work seamlessly with plant personnel, contractors, and engineering to support successful turnaround execution.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Pre-Shutdown Preparation</strong>
                                <p>Detailed planning, inspection procedure development, and resource mobilization to ensure readiness for turnaround execution.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>24/7 Inspection Support</strong>
                                <p>Round-the-clock inspection coverage with multiple shifts to support continuous turnaround activities and critical path work.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Quality Assurance Oversight</strong>
                                <p>Independent verification of contractor work quality, code compliance, and adherence to specifications and standards.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Rapid Response & Reporting</strong>
                                <p>Immediate inspection results communication and rapid report turnaround to support real-time decision making and schedule maintenance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Turnaround Expertise:</strong>
                            <p>Our shutdown inspection specialists combine technical expertise with practical turnaround experience to deliver efficient inspection services that support on-time, on-budget turnaround completion.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Support</a>
                        <a href="#services" class="btn btn-secondary">View Services</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/shutdown/turnaround-inspection.jpg" alt="Turnaround Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional turnaround inspection ensuring schedule adherence and quality</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">Turnarounds Supported</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">On-Time Completion</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support Available</span>
                        </div>
                    </div>
                    
                    <div class="turnaround-benefits">
                        <h4><i class="fas fa-star"></i> Service Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Schedule adherence</li>
                            <li><i class="fas fa-check"></i> Quality assurance</li>
                            <li><i class="fas fa-check"></i> Cost control</li>
                            <li><i class="fas fa-check"></i> Safety compliance</li>
                            <li><i class="fas fa-check"></i> Complete documentation</li>
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
                <span class="section-label">WHY PROFESSIONAL TURNAROUND INSPECTION</span>
                <h2>Key Advantages of Expert Shutdown Inspection Services</h2>
                <p>Ensure safe, efficient, and successful turnaround execution</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Schedule Adherence</h3>
                    <p>Maintain turnaround schedule through efficient inspection processes, rapid reporting, and proactive identification of potential delays before they impact critical path.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>Independent verification of maintenance and repair work quality ensuring compliance with codes, standards, and specifications before equipment returns to service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Control</h3>
                    <p>Prevent costly delays and rework through early identification of quality issues, proper work verification, and efficient inspection execution.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Experienced Teams</h3>
                    <p>Benefit from inspection teams with extensive turnaround experience who understand critical path activities and work efficiently in fast-paced shutdown environments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Safety Compliance</h3>
                    <p>Ensure all work meets safety requirements and regulatory standards before equipment pressurization and return to operation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive inspection records and closeout documentation providing full traceability and compliance evidence for regulatory authorities and audits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TURNAROUND TYPES & APPLICATIONS</span>
                <h2>Shutdown & Turnaround Facilities We Support</h2>
                <p>Comprehensive inspection services for all types of process plant shutdowns and turnarounds</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="refinery">Refinery Turnarounds</button>
                    <button class="tab-btn" data-tab="petrochemical">Petrochemical Plants</button>
                    <button class="tab-btn" data-tab="power">Power Plants</button>
                    <button class="tab-btn" data-tab="chemical">Chemical Plants</button>
                </div>

                <div class="tabs-content">
                    <!-- Refinery Turnarounds Tab -->
                    <div class="tab-panel active" id="refinery">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/shutdown/refinery-turnaround.jpg" alt="Refinery Turnaround">
                            </div>
                            <div class="tab-text">
                                <h3>Refinery Turnarounds</h3>
                                <p>Complete turnaround inspection support for refinery units including crude distillation, hydrotreating, catalytic cracking, and downstream processing units.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude and vacuum distillation units</li>
                                    <li><i class="fas fa-check"></i> Catalytic cracking (FCC/FCCU) units</li>
                                    <li><i class="fas fa-check"></i> Hydrotreating and hydrocracking units</li>
                                    <li><i class="fas fa-check"></i> Catalytic reforming units</li>
                                    <li><i class="fas fa-check"></i> Coker and visbreaker units</li>
                                    <li><i class="fas fa-check"></i> Sulfur recovery and tail gas units</li>
                                    <li><i class="fas fa-check"></i> Utilities and offsites turnarounds</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Petrochemical Tab -->
                    <div class="tab-panel" id="petrochemical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/shutdown/petrochemical-turnaround.jpg" alt="Petrochemical Turnaround">
                            </div>
                            <div class="tab-text">
                                <h3>Petrochemical Plant Shutdowns</h3>
                                <p>Comprehensive shutdown inspection for petrochemical complexes including olefins plants, aromatics facilities, and polymer production units.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Ethylene and propylene crackers</li>
                                    <li><i class="fas fa-check"></i> Aromatics and BTX units</li>
                                    <li><i class="fas fa-check"></i> Polyethylene and polypropylene plants</li>
                                    <li><i class="fas fa-check"></i> PVC and styrene production units</li>
                                    <li><i class="fas fa-check"></i> Gas processing and fractionation</li>
                                    <li><i class="fas fa-check"></i> Ammonia and methanol plants</li>
                                    <li><i class="fas fa-check"></i> Cryogenic and low-temp units</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 579</span>
                                    <span class="standard-tag">NACE Standards</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Power Plants Tab -->
                    <div class="tab-panel" id="power">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/shutdown/power-plant-outage.jpg" alt="Power Plant Outage">
                            </div>
                            <div class="tab-text">
                                <h3>Power Plant Outages</h3>
                                <p>Major and minor outage inspection support for thermal power plants, combined cycle facilities, and cogeneration units.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Boiler major and minor outages</li>
                                    <li><i class="fas fa-check"></i> Turbine major inspections</li>
                                    <li><i class="fas fa-check"></i> HRSG and heat recovery systems</li>
                                    <li><i class="fas fa-check"></i> Steam and condensate systems</li>
                                    <li><i class="fas fa-check"></i> Feedwater and auxiliary systems</li>
                                    <li><i class="fas fa-check"></i> Gas turbine hot section inspections</li>
                                    <li><i class="fas fa-check"></i> Balance of plant systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section I</span>
                                    <span class="standard-tag">NBIC</span>
                                    <span class="standard-tag">ASME B31.1</span>
                                    <span class="standard-tag">EPRI Guidelines</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chemical Plants Tab -->
                    <div class="tab-panel" id="chemical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/shutdown/chemical-plant-shutdown.jpg" alt="Chemical Plant Shutdown">
                            </div>
                            <div class="tab-text">
                                <h3>Chemical Plant Shutdowns</h3>
                                <p>Shutdown inspection services for chemical processing facilities, specialty chemical plants, and fine chemical manufacturing operations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Reactor and vessel inspections</li>
                                    <li><i class="fas fa-check"></i> Distillation and separation columns</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger bundle inspections</li>
                                    <li><i class="fas fa-check"></i> Specialty alloy equipment</li>
                                    <li><i class="fas fa-check"></i> Lined and clad vessel systems</li>
                                    <li><i class="fas fa-check"></i> Corrosive service piping</li>
                                    <li><i class="fas fa-check"></i> Storage and containment systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">NACE MR0175</span>
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
                <span class="section-label">COMPREHENSIVE TURNAROUND SERVICES</span>
                <h2>Our Shutdown & Turnaround Inspection Services</h2>
                <p>Complete support from planning through startup for successful turnaround execution</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Pre-Shutdown Planning</h3>
                    <p>Comprehensive pre-turnaround planning and preparation ensuring readiness for efficient execution and optimal resource utilization.</p>
                    <ul>
                        <li>Inspection scope development</li>
                        <li>Procedure and checklist preparation</li>
                        <li>Resource planning and mobilization</li>
                        <li>Critical path activity identification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Mechanical Inspection</h3>
                    <p>Comprehensive mechanical inspection services covering pressure vessels, heat exchangers, tanks, and static equipment.</p>
                    <ul>
                        <li>Pressure vessel internal inspections</li>
                        <li>Heat exchanger bundle inspections</li>
                        <li>Tank bottom and shell inspections</li>
                        <li>Thickness measurement surveys</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Piping System Inspection</h3>
                    <p>Detailed piping inspection including thickness surveys, weld examinations, and fitness-for-service evaluations.</p>
                    <ul>
                        <li>Process piping thickness surveys</li>
                        <li>Critical circuit inspections</li>
                        <li>High-temperature piping assessment</li>
                        <li>Corrosion loop evaluations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>NDT & Advanced Inspection</h3>
                    <p>Complete non-destructive testing services including RT, UT, PAUT, TOFD, MT, PT, and specialized inspection techniques.</p>
                    <ul>
                        <li>Radiographic weld inspection</li>
                        <li>Ultrasonic flaw detection</li>
                        <li>Phased array ultrasonic testing</li>
                        <li>Magnetic particle and penetrant testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Welding Inspection & QC</h3>
                    <p>Certified welding inspection for all repair and modification work ensuring code compliance and quality workmanship.</p>
                    <ul>
                        <li>Weld procedure qualification</li>
                        <li>Welder performance testing</li>
                        <li>Visual weld inspection</li>
                        <li>Repair welding oversight</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Documentation & Closeout</h3>
                    <p>Comprehensive documentation services providing complete inspection records and closeout packages for regulatory compliance.</p>
                    <ul>
                        <li>Inspection report preparation</li>
                        <li>Photographic documentation</li>
                        <li>Closeout package compilation</li>
                        <li>Regulatory compliance verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TURNAROUND WORKFLOW ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">TURNAROUND EXECUTION</span>
                    <h2>Our Shutdown Inspection Workflow</h2>
                    <p>Systematic approach ensuring efficient inspection execution, schedule adherence, and quality deliverables throughout the turnaround.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Pre-Turnaround Preparation</h4>
                                <p>Detailed planning meetings, scope review, procedure development, and resource mobilization to ensure readiness before shutdown begins.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-play-circle"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Shutdown Execution Support</h4>
                                <p>24/7 inspection coverage with multiple shifts, rapid turnaround on critical path items, and continuous coordination with operations and contractors.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Real-Time Communication</h4>
                                <p>Daily coordination meetings, immediate finding communication, and proactive identification of potential issues before they impact schedule.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation & Closeout</h4>
                                <p>Comprehensive inspection documentation, final reports, and complete closeout packages delivered on time for startup approval.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Inspection Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/api-510-cert.png" alt="API 510">
                            <img src="/www/assets/images/certs/api-570-cert.png" alt="API 570">
                            <img src="/www/assets/images/certs/aws-cwi-cert.png" alt="AWS CWI">
                            <img src="/www/assets/images/certs/asnt-cert.png" alt="ASNT">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/shutdown/turnaround-workflow.jpg" alt="Turnaround Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Turnaround Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>24/7 Coverage Available</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Multi-Discipline Teams</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Rapid Report Turnaround</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Complete Documentation</span>
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
                <h2>Your Trusted Turnaround Inspection Partner</h2>
                <p>Experienced teams and proven processes for successful shutdown execution</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Experienced Teams</h3>
                    <p>Multi-discipline inspection teams with extensive turnaround experience across refining, petrochemical, power, and chemical industries.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Response</h3>
                    <p>Fast mobilization, efficient execution, and quick turnaround on inspection results to support critical path activities and schedule adherence.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>24/7 Availability</h3>
                    <p>Round-the-clock inspection coverage with multiple shifts to support continuous turnaround operations and minimize downtime.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified Personnel</h3>
                    <p>API, ASNT, and AWS certified inspectors ensuring code compliance, quality workmanship, and regulatory acceptance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Collaborative Approach</h3>
                    <p>Work seamlessly with plant personnel, contractors, and engineering teams to support efficient turnaround execution and problem resolution.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Track Record</h3>
                    <p>Proven history of supporting successful turnarounds with on-time completion, quality assurance, and complete documentation delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Shutdown & Turnaround Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How far in advance should we engage turnaround inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ideally 3-6 months before turnaround to allow adequate time for planning, procedure development, resource mobilization, and pre-shutdown coordination meetings. However, we can support shorter lead times when required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What disciplines do your turnaround teams cover?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive multi-discipline teams including mechanical inspection, piping inspection, NDT technicians (RT, UT, PAUT, MT, PT), welding inspection (CWI), thickness measurement, and specialty inspection services as required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you provide 24/7 coverage during turnarounds?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide round-the-clock inspection coverage with multiple shifts to support continuous turnaround operations. Our teams are available 24/7 to support critical path activities and maintain schedule.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How quickly can you provide inspection results?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We prioritize rapid turnaround on critical path items, often providing immediate verbal results followed by formal reports within 24 hours. Our processes are designed to minimize delays and keep turnarounds on schedule.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide at turnaround closeout?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Complete closeout packages including inspection reports, NDT reports, thickness surveys, weld maps, photographic documentation, material certificates, and all required certifications for regulatory compliance and startup approval.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you support emergency or unplanned shutdowns?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide emergency response for unplanned shutdowns and urgent inspection needs. Our teams can mobilize quickly to support emergency repairs and facilitate safe return to service.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you have experience with our type of facility?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We have extensive experience across refining, petrochemical, power generation, and chemical processing facilities. Our teams understand the specific requirements and challenges of different industry sectors and unit types.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you ensure quality and code compliance?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our certified inspectors follow established procedures, applicable codes (API, ASME, AWS), and client specifications. We provide independent verification and quality assurance oversight throughout the turnaround.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Turnaround Success</h2>
                <p>Contact our turnaround specialists for comprehensive shutdown inspection planning and execution support</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:turnaround@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Turnaround Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> 24/7 Support Available</span>
                    <span><i class="fas fa-check"></i> Rapid Mobilization</span>
                    <span><i class="fas fa-check"></i> Multi-Discipline Teams</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Inspection Services</h2>
                <p>Comprehensive integrity and inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/third-party-inspection/asset-integrity-rbi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Asset Integrity & RBI</h3>
                    <p>Risk-based inspection planning and integrity management services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/pressure-vessel-boiler.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pressure Vessel Inspection</h3>
                    <p>Comprehensive pressure vessel and boiler inspection services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT Inspection</h3>
                    <p>Advanced ultrasonic testing for critical inspections</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/welding-fabrication-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Welding Inspection</h3>
                    <p>Certified welding inspection and quality control services</p>
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
