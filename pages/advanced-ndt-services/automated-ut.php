<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Automated Ultrasonic Testing (AUT) Services | Mechanized Weld & Pipeline Inspection | Alpha Sonix NDT Solutions";
$meta_description = "Automated Ultrasonic Testing (AUT) services using mechanized scanners and encoded data acquisition for consistent, repeatable weld and component inspection. Ideal for pipeline girth welds, fabrication QA/QC, and high-volume programs with complete digital reporting.";
$meta_keywords = "AUT testing, automated ultrasonic testing, mechanized UT, encoded ultrasonic testing, robotic ultrasonic inspection, pipeline girth weld inspection, weld inspection, PAUT AUT, TOFD AUT, NDT automation";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/automated-ut.php";
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
    <meta property="og:image" content="/www/assets/images/services/aut-og.jpg">
    
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
        "serviceType": "Automated Ultrasonic Testing (AUT)",
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
        "description": "Automated Ultrasonic Testing (AUT) using mechanized scanners and encoded inspection to deliver consistent, repeatable ultrasonic data for welds, pipelines, and critical components with complete digital reporting."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/AUT/aut1.png');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>AUT</span>
                </div>
                <h1 class="page-title">Automated Ultrasonic Testing (AUT)</h1>
                <p class="page-subtitle">Mechanized, encoded ultrasonic inspection for consistent results, repeatable coverage, and complete digital traceability—built for high-volume and safety-critical work</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-robot"></i> Mechanized & Robotic Scanning Options</span>
                    <span class="badge"><i class="fas fa-tachometer-alt"></i> Efficient for High-Volume Programs</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Recorded Data & Audit-Ready Reporting</span>
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
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Fast, Controlled Scanning</h3>
                    <p>Mechanized motion maintains stable speed and scan pattern, helping deliver efficient coverage and consistent data acquisition.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-redo-alt"></i>
                    </div>
                    <h3>Repeatable Results</h3>
                    <p>Encoded scanning supports repeatability across shifts, technicians, and re-inspections—ideal for production and integrity programs.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Planned Coverage</h3>
                    <p>Programmed scan plans (zones/angles as required) help demonstrate inspection coverage in line with approved procedures and project specifications.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Advanced Analysis & Reporting</h3>
                    <p>Digital visualization and analysis tools support efficient interpretation, clear reporting, and long-term traceability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS AUT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ADVANCED NDT AUTOMATION</span>
                    <h2>What is Automated Ultrasonic Testing (AUT)?</h2>
                    <p class="lead">Automated Ultrasonic Testing (AUT) combines ultrasonic inspection techniques with mechanized or robotic scanners to deliver consistent, repeatable, and fully recorded inspection data—especially valuable for high-volume weld inspection and safety-critical applications.</p>
                    
                    <p>Unlike manual ultrasonic testing (where probe movement is operator controlled), AUT uses motorized scanners, crawlers, or encoded frames to move probes along controlled paths. Position encoding records where each signal was acquired, creating traceable scan coverage and enabling independent review.</p>

                    <p>AUT programs often integrate multiple UT techniques—commonly <strong>PAUT for characterization and positioning</strong> and <strong>TOFD for sizing support</strong>—to strengthen inspection confidence, documentation, and engineering decision-making.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Mechanized Precision</strong>
                                <p>Controlled movement supports stable coupling, consistent speed, and repeatable scan patterns.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Multi-Technique Capability</strong>
                                <p>PAUT/TOFD/UT can be deployed in a coordinated scan plan, depending on procedure and project requirements.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Position Encoding & Traceability</strong>
                                <p>Encoders record probe position to support coverage verification, repeat inspections, and structured reporting.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Scanner & Robot Options</strong>
                                <p>Pipeline scanners, magnetic crawlers, orbital scanners, and modular frames support different geometries and access constraints.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Why AUT is Widely Specified:</strong>
                            <p>AUT is commonly selected for pipeline girth weld inspection and high-volume fabrication because it improves repeatability, reduces human variation in scanning, and produces complete digital inspection records. Acceptance and technique selection depend on applicable codes, client specifications, and procedure qualification.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request AUT Proposal</a>
                        <a href="#systems" class="btn btn-secondary">View Our Systems</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/aut-system.jpg" alt="AUT System">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Mechanized scanner with encoded inspection and multi-technique probe setup (configuration depends on procedure)</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">Fast</span>
                            <span class="stat-label">Encoded Scanning</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Recorded</span>
                            <span class="stat-label">Digital Data Package</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Repeatable</span>
                            <span class="stat-label">Coverage & Results</span>
                        </div>
                    </div>
                    
                    <div class="system-types">
                        <h4><i class="fas fa-cogs"></i> AUT System Types</h4>
                        <div class="system-type-grid">
                            <div class="system-type-item">
                                <i class="fas fa-grip-lines"></i>
                                <span>Pipeline Scanners</span>
                            </div>
                            <div class="system-type-item">
                                <i class="fas fa-satellite-dish"></i>
                                <span>Magnetic Crawlers</span>
                            </div>
                            <div class="system-type-item">
                                <i class="fas fa-oil-can"></i>
                                <span>Tank Floor Platforms</span>
                            </div>
                            <div class="system-type-item">
                                <i class="fas fa-circle-notch"></i>
                                <span>Orbital Scanners</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ADVANTAGES ===================== -->
    <section class="advantages-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY CHOOSE AUT</span>
                <h2>Key Advantages of Automated Ultrasonic Testing</h2>
                <p>Designed for consistency, productivity, and documentation—especially in high-volume and safety-critical inspections</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Higher Throughput (Project Dependent)</h3>
                    <p>Mechanized scanning can significantly reduce inspection time on repetitive work such as pipeline girth welds, shop welds, and mapped corrosion programs—while maintaining controlled scan parameters.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Improved Repeatability</h3>
                    <p>Encoded movement reduces variability in probe travel, speed, and coverage—supporting consistent results across teams and repeat inspections for trending.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Planned Coverage with Traceability</h3>
                    <p>Scan plans can be structured by zones/angles and verified using encoder data, supporting coverage demonstration in line with approved procedures.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Complete Digital Data Archive</h3>
                    <p>Recorded datasets support audit requirements, third-party review, and post-inspection re-analysis—reducing rework and improving confidence in decision making.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-user-slash"></i>
                    </div>
                    <h3>Reduced Human Scanning Variation</h3>
                    <p>Technicians focus on setup control and interpretation rather than manual probe movement—supporting quality and reducing fatigue effects in long campaigns.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety & Access Benefits</h3>
                    <p>Robotic and remote scanning options can reduce exposure in confined spaces, at height, or in challenging environments, and may reduce reliance on radiography where UT alternatives are accepted.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== AUT SYSTEMS ===================== -->
    <section class="systems-section" id="systems">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">OUR AUT EQUIPMENT</span>
                <h2>Advanced Automated UT Systems</h2>
                <p>AUT scanner solutions selected to match your geometry, access, and procedure requirements</p>
            </div>

            <div class="systems-grid">
                <!-- Pipeline Scanners -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-pipeline-scanner.jpg" alt="Pipeline Scanner">
                        <div class="system-badge">Pipeline</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-grip-lines"></i>
                        </div>
                        <h3>Pipeline Girth Weld Scanners</h3>
                        <p>Band-type and track-mounted scanners for onshore/offshore pipeline construction and tie-ins. Multi-technique configurations (e.g., PAUT + TOFD) can be applied as per code, spec, and qualified procedure.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Pipe Range:</strong> Application dependent</li>
                            <li><i class="fas fa-check"></i> <strong>Wall Thickness:</strong> Application dependent</li>
                            <li><i class="fas fa-check"></i> <strong>Scan:</strong> Encoded, controlled motion</li>
                            <li><i class="fas fa-check"></i> <strong>Configurations:</strong> PAUT / TOFD / UT as required</li>
                            <li><i class="fas fa-check"></i> <strong>Output:</strong> Full digital record & report package</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Cross-Country Pipelines</span>
                            <span class="app-tag">Tie-Ins</span>
                            <span class="app-tag">Station Piping</span>
                        </div>
                    </div>
                </div>

                <!-- Magnetic Crawlers -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-magnetic-crawler.jpg" alt="Magnetic Crawler">
                        <div class="system-badge">Remote Access</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-satellite-dish"></i>
                        </div>
                        <h3>Magnetic Wheel Crawlers</h3>
                        <p>Robotic crawlers for vertical and overhead surfaces where access, scaffold requirements, or exposure risk must be minimized. Suitable for mapping and encoded scanning on large surfaces.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Orientation:</strong> Horizontal / vertical / overhead (surface dependent)</li>
                            <li><i class="fas fa-check"></i> <strong>Remote Operation:</strong> Improves safety and reach</li>
                            <li><i class="fas fa-check"></i> <strong>Encoders:</strong> Structured scan data</li>
                            <li><i class="fas fa-check"></i> <strong>Camera:</strong> Live monitoring (system dependent)</li>
                            <li><i class="fas fa-check"></i> <strong>Use:</strong> Mapping, scanning, and repeatable coverage</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Pressure Vessels</span>
                            <span class="app-tag">Tank Shells</span>
                            <span class="app-tag">Confined Areas</span>
                        </div>
                    </div>
                </div>

                <!-- Tank Floor Scanner -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-tank-scanner.jpg" alt="Tank Floor Scanner">
                        <div class="system-badge">Large Area</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-oil-can"></i>
                        </div>
                        <h3>Tank Floor Scanning Systems</h3>
                        <p>Robotic and mechanized platforms to support rapid floor screening and mapping workflows (technology selection depends on tank condition and inspection objective).</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Coverage:</strong> Large-area scanning support</li>
                            <li><i class="fas fa-check"></i> <strong>Findings:</strong> Wall loss/pitting indications (method dependent)</li>
                            <li><i class="fas fa-check"></i> <strong>Output:</strong> Mapped reporting for prioritization</li>
                            <li><i class="fas fa-check"></i> <strong>Traceability:</strong> Encoded scan paths</li>
                            <li><i class="fas fa-check"></i> <strong>Standards:</strong> Supports API 653 planning workflows</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">API 653 Programs</span>
                            <span class="app-tag">Tank Bottoms</span>
                            <span class="app-tag">Annular Ring Areas</span>
                        </div>
                    </div>
                </div>

                <!-- Orbital Scanners -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-orbital-scanner.jpg" alt="Orbital Scanner">
                        <div class="system-badge">Fabrication</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-circle-notch"></i>
                        </div>
                        <h3>Orbital & Circumferential Scanners</h3>
                        <p>Scanners for circumferential seams, nozzle welds, and repeat production work. Encoded motion supports consistent coverage and clear documentation.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Scan Modes:</strong> Circumferential / raster (system dependent)</li>
                            <li><i class="fas fa-check"></i> <strong>Encoding:</strong> Position traceability</li>
                            <li><i class="fas fa-check"></i> <strong>Channels:</strong> Multi-probe configurations as required</li>
                            <li><i class="fas fa-check"></i> <strong>Use:</strong> High-repeatability fabrication QC</li>
                            <li><i class="fas fa-check"></i> <strong>Setup:</strong> Designed for efficient production work</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Vessel Seams</span>
                            <span class="app-tag">Nozzle Welds</span>
                            <span class="app-tag">Shop QC</span>
                        </div>
                    </div>
                </div>

                <!-- Modular Scanners -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-modular-scanner.jpg" alt="Modular Scanner">
                        <div class="system-badge">Portable</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3>Modular Encoded Scanners</h3>
                        <p>Portable encoded frames for flat and curved surfaces. A practical solution where full robotics is not needed but encoded traceability is required.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Mounting:</strong> Magnetic / vacuum / mechanical (surface dependent)</li>
                            <li><i class="fas fa-check"></i> <strong>Encoding:</strong> Structured scan records</li>
                            <li><i class="fas fa-check"></i> <strong>Use:</strong> Maintenance, repairs, fabrication support</li>
                            <li><i class="fas fa-check"></i> <strong>Transport:</strong> Portable and field-friendly</li>
                            <li><i class="fas fa-check"></i> <strong>Reporting:</strong> Repeatable mapped output</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Repair Verification</span>
                            <span class="app-tag">Structural Welds</span>
                            <span class="app-tag">Mapped Areas</span>
                        </div>
                    </div>
                </div>

                <!-- Specialized Systems -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-custom-scanner.jpg" alt="Custom Scanner">
                        <div class="system-badge">Custom</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h3>Custom & Specialized Scanners</h3>
                        <p>Custom scanner design support for restricted access, unique geometries, or special inspection requirements. We align scanner design to the inspection objective and procedure requirements.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Engineering:</strong> Application review and design support</li>
                            <li><i class="fas fa-check"></i> <strong>Validation:</strong> Site/procedure verification as required</li>
                            <li><i class="fas fa-check"></i> <strong>Training:</strong> Operator briefing and workflow guidance</li>
                            <li><i class="fas fa-check"></i> <strong>Support:</strong> Dedicated technical coordination</li>
                            <li><i class="fas fa-check"></i> <strong>Deliverables:</strong> Documentation aligned to project needs</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Special Geometry</span>
                            <span class="app-tag">Restricted Access</span>
                            <span class="app-tag">Critical Components</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">AUT APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>Automated UT solutions across construction, fabrication, and in-service integrity programs</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pipeline">Pipeline Construction</button>
                    <button class="tab-btn" data-tab="manufacturing">Manufacturing QC</button>
                    <button class="tab-btn" data-tab="tank">Tank Inspection</button>
                    <button class="tab-btn" data-tab="maintenance">Plant Maintenance</button>
                </div>

                <div class="tabs-content">
                    <!-- Pipeline Construction Tab -->
                    <div class="tab-panel active" id="pipeline">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/aut-pipeline-app.jpg" alt="Pipeline AUT">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline Construction & Tie-Ins</h3>
                                <p>AUT is widely used for pipeline girth weld inspection where consistent coverage, fast throughput, and recorded digital data are required. Technique selection and acceptance depend on code, client specification, and qualified procedure.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cross-country transmission pipelines (construction and tie-ins)</li>
                                    <li><i class="fas fa-check"></i> Onshore gathering and distribution expansions</li>
                                    <li><i class="fas fa-check"></i> Offshore and subsea tie-in weld support (project dependent)</li>
                                    <li><i class="fas fa-check"></i> CRA/Clad weld inspection support (application dependent)</li>
                                    <li><i class="fas fa-check"></i> Station piping, manifolds, and hot work verification</li>
                                    <li><i class="fas fa-check"></i> Procedure qualification support (as specified)</li>
                                </ul>

                                <div class="app-stats">
                                    <div class="stat">
                                        <span class="stat-num">Fast</span>
                                        <span class="stat-label">Per Weld Acquisition</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">Encoded</span>
                                        <span class="stat-label">Coverage Evidence</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">Recorded</span>
                                        <span class="stat-label">Digital Deliverables</span>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 1104 App A</span>
                                    <span class="standard-tag">DNV-OS-F101</span>
                                    <span class="standard-tag">ISO 13847</span>
                                    <span class="standard-tag">ASME B31.4/B31.8</span>
                                    <span class="standard-tag">CSA Z662</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Manufacturing QC Tab -->
                    <div class="tab-panel" id="manufacturing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/aut-manufacturing.jpg" alt="Manufacturing AUT">
                            </div>
                            <div class="tab-text">
                                <h3>Manufacturing & Fabrication QC</h3>
                                <p>AUT supports production environments by delivering repeatable inspection coverage and clear traceability—especially where high throughput and consistent documentation are required.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel seam welds (longitudinal/circumferential)</li>
                                    <li><i class="fas fa-check"></i> Pipe spool fabrication and shop weld programs</li>
                                    <li><i class="fas fa-check"></i> Pipe mill and pipeline component QC (application dependent)</li>
                                    <li><i class="fas fa-check"></i> Boilers, headers, and critical fabrication welds</li>
                                    <li><i class="fas fa-check"></i> Structural steel and heavy fabrication (where encoded scanning is specified)</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-chart-line"></i>
                                    <div>
                                        <strong>Traceability Advantage:</strong>
                                        <p>Encoded scan data and structured reporting support quality audits, customer reviews, and repeat inspections—valuable for ISO-driven QA/QC programs.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec VIII</span>
                                    <span class="standard-tag">ASME Sec V</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">EN 12517</span>
                                    <span class="standard-tag">API 6A</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tank Inspection Tab -->
                    <div class="tab-panel" id="tank">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/aut-tank.jpg" alt="Tank Floor AUT">
                            </div>
                            <div class="tab-text">
                                <h3>Storage Tank Floor & Shell Inspection</h3>
                                <p>Mechanized platforms and robotic tools can support efficient tank inspection workflows by improving coverage, repeatability, and mapped reporting for floor and selected shell areas (method selection depends on scope and condition).</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> API 653 inspection programs (planning support and mapped outputs)</li>
                                    <li><i class="fas fa-check"></i> Bottom plate corrosion and pitting screening/mapping</li>
                                    <li><i class="fas fa-check"></i> Annular ring and critical zones targeting</li>
                                    <li><i class="fas fa-check"></i> Shell thickness mapping support (where applicable)</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-clock"></i>
                                    <div>
                                        <strong>Operational Benefit:</strong>
                                        <p>Mechanized scanning can shorten inspection windows and improve documentation, helping maintenance teams plan repairs and prioritize critical findings more efficiently.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">EEMUA 159</span>
                                    <span class="standard-tag">ISO 16708</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Plant Maintenance Tab -->
                    <div class="tab-panel" id="maintenance">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/aut-maintenance.jpg" alt="Plant Maintenance AUT">
                            </div>
                            <div class="tab-text">
                                <h3>In-Service Inspection & Maintenance</h3>
                                <p>AUT supports RBI and integrity programs by providing repeatable, recorded datasets—useful for monitoring damage mechanisms and supporting engineering decisions when combined with appropriate evaluation criteria.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessels and piping inspection support (API 510/570)</li>
                                    <li><i class="fas fa-check"></i> Corrosion mapping and repeat inspections for trending</li>
                                    <li><i class="fas fa-check"></i> SCC/fatigue monitoring programs (application dependent)</li>
                                    <li><i class="fas fa-check"></i> High-access-risk areas using remote scanning options</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-database"></i>
                                    <div>
                                        <strong>Data for Integrity:</strong>
                                        <p>Recorded datasets support comparisons over time and help reduce uncertainty when planning repair, monitor, or run decisions.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 579-1/ASME FFS-1</span>
                                    <span class="standard-tag">API 510/570</span>
                                    <span class="standard-tag">ASME Sec XI</span>
                                    <span class="standard-tag">NACE SP0775</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WORKFLOW & PROCESS ===================== -->
    <section class="workflow-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION PROCESS</span>
                <h2>AUT Inspection Workflow</h2>
                <p>Disciplined planning, controlled scanning, and structured reporting for dependable outcomes</p>
            </div>

            <div class="workflow-grid">
                <div class="workflow-step">
                    <div class="step-number">1</div>
                    <div class="step-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>Pre-Job Engineering</h3>
                    <p>Review drawings/specs and define inspection objectives. Select scanner type and probe configuration. Develop procedure and scan plan aligned to code and client acceptance requirements.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> Project dependent</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">2</div>
                    <div class="step-icon"><i class="fas fa-tools"></i></div>
                    <h3>Setup & Verification</h3>
                    <p>Prepare surface as required. Install scanner and confirm alignment/encoding. Perform calibration and verification checks using reference standards per the approved procedure.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> Typically short</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">3</div>
                    <div class="step-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Encoded Scanning</h3>
                    <p>Run the programmed scan with controlled motion and real-time monitoring of coupling and key reference signals. Acquire data with traceable position encoding.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> Program dependent</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">4</div>
                    <div class="step-icon"><i class="fas fa-search"></i></div>
                    <h3>Data Analysis</h3>
                    <p>Review scan views and recorded signals to detect and evaluate indications. Apply sizing/acceptance criteria per the qualified technique and project requirements.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> Project dependent</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">5</div>
                    <div class="step-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Reporting</h3>
                    <p>Issue clear inspection reports including scan coverage, findings, indication locations, supporting images, and accept/reject status as required. Provide digital deliverables for traceability.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> As agreed</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">6</div>
                    <div class="step-icon"><i class="fas fa-database"></i></div>
                    <h3>Data Management</h3>
                    <p>Retain and manage AUT datasets in line with client requirements and project specifications. Data can be made available for audits, future comparisons, and engineering reviews.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> Per contract</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your AUT Technology Partner</h2>
                <p>From scanner selection and procedure alignment to execution and reporting—delivered with a focus on repeatability, traceability, and practical outcomes</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Scanner Options for Real Field Conditions</h3>
                    <p>Pipeline scanners, modular encoded frames, and crawler-based solutions selected to match access, geometry, and inspection objectives.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Personnel</h3>
                    <p>Certified UT/PAUT/TOFD professionals with AUT execution and interpretation experience, supported by Level III oversight for procedure and technical guidance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Program & Campaign Support</h3>
                    <p>Support for large-volume inspection programs with consistent workflows, traceable deliverables, and coordination aligned to construction schedules or shutdown windows.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3>Digital Deliverables</h3>
                    <p>Structured reporting and digital data packages designed for client review, audit readiness, and repeat inspection comparisons.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Responsive Support</h3>
                    <p>Practical coordination and technical support—from planning and mobilization to reporting and closeout—especially for critical-path projects.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Experience Across Industries</h3>
                    <p>Field exposure across oil & gas, petrochemical, fabrication, power, and infrastructure—focused on delivering dependable data and clear decisions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>AUT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much faster is AUT compared to manual UT or radiography?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>AUT can significantly improve inspection efficiency on repetitive work because scanning is mechanized and data is recorded in a controlled scan plan. Actual time savings depend on weld size, access, technique, and reporting requirements. For many pipeline and production applications, AUT can deliver faster throughput than manual inspection workflows and avoids radiographic waiting time where UT alternatives are accepted.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the cost of AUT inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cost depends on scope (number of welds/areas), scanner type, access conditions, technique (PAUT/TOFD/UT), reporting detail, and mobilization. AUT often improves overall project economics on high-volume work because productivity is higher and results are recorded and reviewable. Share your scope and we will provide a clear quotation with deliverables.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can AUT completely replace radiography?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>In many cases, AUT may be used as an alternative to RT when permitted by the applicable code, client specification, and qualified procedure. Selection depends on defect mechanisms of concern, required acceptance criteria, and project requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What surface preparation is required for AUT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Preparation is driven by scanner travel and coupling quality. Typically this includes removing spatter/slag and sharp protrusions, ensuring a stable running surface for the scanner, and cleaning heavy contamination. Requirements vary by component condition and procedure, and we advise the minimum preparation needed for reliable scanning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is AUT data stored and for how long?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>AUT results are stored digitally, including recorded scan files and report outputs. Retention and handover format are defined by client requirements and project specifications. Recorded data supports audits, third-party review, and future comparison inspections.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can we rent AUT equipment with or without operators?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We can support both turnkey service (equipment + operators + reporting) and project-specific rental/technical support options where feasible. Availability depends on scanner type, project schedule, and required competencies. Contact us with your scope for the best option.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What training do your AUT operators have?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Operators are trained and qualified in UT methods relevant to the AUT configuration (commonly PAUT/TOFD/UT), with additional training in scanner setup, encoded scanning workflows, and data interpretation practices aligned to procedure requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide AUT training courses?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. Training can be arranged for scanner operation, encoded scanning practice, and interpretation workflows. Course scope is tailored to your application (pipeline/fabrication/maintenance) and the technique mix required (PAUT/TOFD/UT).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Improve Inspection Speed and Repeatability?</h2>
                <p>Talk to our AUT team for scanner selection, procedure alignment, and a clear proposal with deliverables</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Proposal</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Feasibility Review</span>
                    <span><i class="fas fa-check"></i> Clear Deliverables & Timeline</span>
                    <span><i class="fas fa-check"></i> Follow-Up NDT Support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Advanced NDT Services</h2>
                <p>Combine methods for stronger coverage, better characterization, and higher confidence</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Multi-angle UT imaging for weld evaluation and characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Through-wall sizing support for critical flaw evaluation</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/lrut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div> 
                    <h3>LRUT</h3>
                    <p>Guided wave screening to prioritize targeted follow-up inspections</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/mfl-tank-floor.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>MFL Tank Floor</h3>
                    <p>Rapid tank bottom screening to support targeted verification</p>
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
