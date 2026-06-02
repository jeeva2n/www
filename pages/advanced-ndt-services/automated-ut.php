<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Automated Ultrasonic Testing (AUT) Services | Alpha Sonix NDT Solutions";
$meta_description = "Professional AUT inspection services with robotic scanners and automated UT systems. High-speed, consistent weld and pipeline inspection. ISO certified with 100% volumetric coverage and digital reporting.";
$meta_keywords = "AUT testing, automated ultrasonic testing, mechanized UT, robotic inspection, pipeline scanning, weld inspection, NDT automation, high-speed inspection, ultrasonic scanner, tank floor inspection";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/aut.php";
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
        "description": "Professional Automated Ultrasonic Testing services using robotic scanners and mechanized systems for high-speed, repeatable weld and pipeline inspection."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/aut-hero.jpg');"></div>
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
                <p class="page-subtitle">High-speed robotic and mechanized UT inspection for consistent, repeatable results with 100% volumetric coverage</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-robot"></i> Robotic Crawlers Available</span>
                    <span class="badge"><i class="fas fa-tachometer-alt"></i> 10x Faster Than Manual</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> 100% Data Retention</span>
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
                    <h3>Ultra-Fast Scanning</h3>
                    <p>Inspect up to 300mm/sec with motorized scanners—10x faster than manual inspection</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-redo-alt"></i>
                    </div>
                    <h3>Perfect Repeatability</h3>
                    <p>Eliminate human variability with encoded, mechanized scanning for consistent results</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Complete Coverage</h3>
                    <p>100% volumetric inspection with programmable scan patterns and multi-zone capability</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Advanced Software</h3>
                    <p>Real-time 3D imaging, automated defect recognition, and comprehensive data analysis</p>
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
                    <p class="lead">Automated Ultrasonic Testing (AUT) combines advanced ultrasonic techniques (PAUT, TOFD, conventional UT) with mechanized or robotic scanning systems to deliver high-speed, consistent, and fully documented volumetric inspection of welds, pipelines, tanks, and critical components.</p>
                    
                    <p>Unlike manual ultrasonic testing where the operator physically moves the probe, AUT uses motorized scanners, magnetic crawlers, or robotic arms equipped with position encoders to move ultrasonic probes along pre-programmed scan paths at controlled speeds. Every scan position is precisely recorded, creating a permanent digital map of the entire inspection volume.</p>

                    <p>AUT systems integrate multiple ultrasonic technologies simultaneously—typically PAUT for defect characterization and lateral positioning combined with TOFD for precise through-wall sizing—providing comprehensive weld integrity assessment in a single automated scan pass.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Mechanized Precision</strong>
                                <p>Motorized scanners maintain constant speed, coupling, and probe angle for repeatable results</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Multi-Technology Integration</strong>
                                <p>Combines PAUT, TOFD, and conventional UT in single scan for comprehensive data</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Position Encoding</strong>
                                <p>Magnetic wheel or linear encoders record exact probe location for 3D imaging</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Robotic Flexibility</strong>
                                <p>Magnetic crawlers, pipe trackers, and tank floor scanners access challenging geometries</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Industry Standard:</strong>
                            <p>AUT is the mandatory inspection method for critical applications per DNV-OS-F101, API 5L, and major pipeline operators' specifications. It has replaced radiography for 90% of pipeline construction worldwide due to superior speed, safety, and data quality.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request AUT Demo</a>
                        <a href="#systems" class="btn btn-secondary">View Our Systems</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/aut-system.jpg" alt="AUT System">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Automated UT scanner with PAUT+TOFD probe configuration for pipeline girth weld inspection</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">300mm/s</span>
                            <span class="stat-label">Max Scan Speed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5000+</span>
                            <span class="stat-label">Welds Scanned</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Data Coverage</span>
                        </div>
                    </div>
                    
                    <div class="system-types">
                        <h4><i class="fas fa-cogs"></i> AUT System Types</h4>
                        <div class="system-type-grid">
                            <div class="system-type-item">
                                <i class="fas fa-grip-lines"></i>
                                <span>Pipe Spool Scanners</span>
                            </div>
                            <div class="system-type-item">
                                <i class="fas fa-satellite-dish"></i>
                                <span>Magnetic Crawlers</span>
                            </div>
                            <div class="system-type-item">
                                <i class="fas fa-oil-can"></i>
                                <span>Tank Floor Robots</span>
                            </div>
                            <div class="system-type-item">
                                <i class="fas fa-circle-notch"></i>
                                <span>Orbital Weld Scanners</span>
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
                <p>Superior productivity, quality, and safety compared to manual inspection methods</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Exceptional Productivity</h3>
                    <p>Scan speeds up to 300mm/sec reduce inspection time by 90% compared to manual UT. Typical 24" pipeline girth weld inspected in 5-8 minutes versus 60-90 minutes for manual UT or 4-6 hours for radiography. Entire tank floors scanned in hours instead of days using robotic crawlers.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Superior Repeatability</h3>
                    <p>Mechanized motion eliminates operator variability in speed, coupling pressure, and probe angle. Encoded positioning ensures identical scan coverage on re-inspection for accurate comparison. Independent studies show AUT achieves 99.5% repeatability versus 75-85% for manual UT in round-robin trials.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>100% Volumetric Coverage</h3>
                    <p>Programmable scan patterns ensure complete weld volume inspection with no gaps. Multi-zone scanning covers root, fill, cap, and heat-affected zones simultaneously. Overlap between scan passes verified through encoder data. Proves 100% coverage to regulators and client representatives.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Complete Data Archive</h3>
                    <p>Every A-scan from entire inspection permanently stored (typically 50-500GB per project). Enables post-inspection expert review without field return. Supports trending analysis across years for structural health monitoring. Satisfies regulatory requirements for permanent records and third-party audits.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-user-slash"></i>
                    </div>
                    <h3>Reduced Human Factor</h3>
                    <p>Automated scanning eliminates fatigue-related errors during long inspection campaigns. Consistent scan parameters regardless of operator. Reduces required technicians from 3-4 to 1-2 per system. Technician focuses on data analysis rather than physical scanning—better ergonomics and quality.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Enhanced Safety</h3>
                    <p>Robotic crawlers access confined spaces, tanks, and high-radiation areas without human entry. Magnetic wall climbers inspect vessels at height eliminating scaffolding and fall hazards. Remote operation from safe distance during high-pressure or high-temperature inspections. Replaces radiography with no ionizing radiation exposure.</p>
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
                <p>Comprehensive fleet of scanners and robots for all applications</p>
            </div>

            <div class="systems-grid">
                <!-- Pipeline Scanners -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-pipeline-scanner.jpg" alt="Pipeline Scanner">
                        <div class="system-badge">Most Popular</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-grip-lines"></i>
                        </div>
                        <h3>Pipeline Girth Weld Scanners</h3>
                        <p>Motorized band-type and track-mounted scanners for onshore and offshore pipeline construction. Dual-technology PAUT+TOFD configuration per API 1104 Appendix A and DNV-OS-F101.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Pipe Range:</strong> 2" to 60" OD</li>
                            <li><i class="fas fa-check"></i> <strong>Wall Thickness:</strong> 3mm to 50mm</li>
                            <li><i class="fas fa-check"></i> <strong>Scan Speed:</strong> Up to 150mm/sec</li>
                            <li><i class="fas fa-check"></i> <strong>Channels:</strong> 64-128 PAUT + TOFD pair</li>
                            <li><i class="fas fa-check"></i> <strong>Inspection Time:</strong> 5-15 minutes per weld</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Cross-Country Pipelines</span>
                            <span class="app-tag">Offshore Subsea</span>
                            <span class="app-tag">Gathering Lines</span>
                        </div>
                    </div>
                </div>

                <!-- Magnetic Crawlers -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-magnetic-crawler.jpg" alt="Magnetic Crawler">
                        <div class="system-badge">Versatile</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-satellite-dish"></i>
                        </div>
                        <h3>Magnetic Wheel Crawlers</h3>
                        <p>All-terrain robotic crawlers with powerful magnetic wheels for vertical, overhead, and complex geometry inspection. Multi-axis probe manipulation and omnidirectional movement.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Orientation:</strong> Any—vertical, overhead, horizontal</li>
                            <li><i class="fas fa-check"></i> <strong>Payload:</strong> Up to 15kg of probes/equipment</li>
                            <li><i class="fas fa-check"></i> <strong>Climb Capability:</strong> 90° walls, ceilings</li>
                            <li><i class="fas fa-check"></i> <strong>Remote Control:</strong> Wireless up to 200m</li>
                            <li><i class="fas fa-check"></i> <strong>Camera:</strong> HD live video feed</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Pressure Vessels</span>
                            <span class="app-tag">Tank Walls</span>
                            <span class="app-tag">Confined Spaces</span>
                        </div>
                    </div>
                </div>

                <!-- Tank Floor Scanner -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-tank-scanner.jpg" alt="Tank Floor Scanner">
                        <div class="system-badge">High Speed</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-oil-can"></i>
                        </div>
                        <h3>Tank Floor Scanning Systems</h3>
                        <p>Long-range MFL (Magnetic Flux Leakage) and UT crawlers for rapid internal floor inspection of atmospheric storage tanks. Spiral scan pattern covers entire floor from center outlet.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Tank Diameter:</strong> Up to 100m (330ft)</li>
                            <li><i class="fas fa-check"></i> <strong>Coverage Rate:</strong> 500-1000 m²/hour</li>
                            <li><i class="fas fa-check"></i> <strong>Detection:</strong> Pitting, thinning, cracks</li>
                            <li><i class="fas fa-check"></i> <strong>Technology:</strong> MFL or UT arrays</li>
                            <li><i class="fas fa-check"></i> <strong>Reporting:</strong> C-scan floor maps with GPS coordinates</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">API 653 Inspections</span>
                            <span class="app-tag">Crude Oil Tanks</span>
                            <span class="app-tag">Petrochemical Storage</span>
                        </div>
                    </div>
                </div>

                <!-- Orbital Scanners -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-orbital-scanner.jpg" alt="Orbital Scanner">
                        <div class="system-badge">Precision</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-circle-notch"></i>
                        </div>
                        <h3>Orbital & Circumferential Scanners</h3>
                    <p>Fixed-radius scanners for pressure vessel circumferential seams, nozzle welds, and pipe shop fabrication. Ideal for high-volume production inspection with rapid setup.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Diameter Range:</strong> 100mm to 6000mm</li>
                            <li><i class="fas fa-check"></i> <strong>Scan Modes:</strong> Circumferential, helical, raster</li>
                            <li><i class="fas fa-check"></i> <strong>Probe Capacity:</strong> Up to 8 channels</li>
                            <li><i class="fas fa-check"></i> <strong>Repeatability:</strong> ±0.1mm position accuracy</li>
                            <li><i class="fas fa-check"></i> <strong>Setup Time:</strong> 5-10 minutes</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Vessel Circumferential Welds</span>
                            <span class="app-tag">Nozzle-to-Shell</span>
                            <span class="app-tag">Pipe Mill QC</span>
                        </div>
                    </div>
                </div>

                <!-- Modular Scanners -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-modular-scanner.jpg" alt="Modular Scanner">
                        <div class="system-badge">Flexible</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3>Modular Manual Scanners</h3>
                        <p>Semi-automated scanning frames with magnetic or vacuum mounting for flat and cylindrical surfaces. Cost-effective solution for fabrication shops and maintenance inspections.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Scan Area:</strong> Up to 600mm x 600mm</li>
                            <li><i class="fas fa-check"></i> <strong>Mounting:</strong> Magnetic, vacuum, mechanical</li>
                            <li><i class="fas fa-check"></i> <strong>Encoder:</strong> Magnetic or optical</li>
                            <li><i class="fas fa-check"></i> <strong>Weight:</strong> 2-5kg (portable)</li>
                            <li><i class="fas fa-check"></i> <strong>Setup:</strong> Quick-mount brackets</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Structural Welds</span>
                            <span class="app-tag">Repair Verification</span>
                            <span class="app-tag">Small Diameter Pipes</span>
                        </div>
                    </div>
                </div>

                <!-- Specialized Systems -->
                <div class="system-card">
                    <div class="system-image">
                        <img src="/www/assets/images/services/aut-custom-scanner.jpg" alt="Custom Scanner">
                        <div class="system-badge">Specialized</div>
                    </div>
                    <div class="system-content">
                        <div class="system-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h3>Custom & Specialized Scanners</h3>
                        <p>Application-specific scanner design and fabrication for unique geometries, restricted access, or special inspection requirements. Engineering consultation included.</p>
                        <ul class="system-specs">
                            <li><i class="fas fa-check"></i> <strong>Engineering:</strong> Custom CAD design</li>
                            <li><i class="fas fa-check"></i> <strong>Prototyping:</strong> Rapid development cycle</li>
                            <li><i class="fas fa-check"></i> <strong>Testing:</strong> On-site validation</li>
                            <li><i class="fas fa-check"></i> <strong>Training:</strong> Operator instruction included</li>
                            <li><i class="fas fa-check"></i> <strong>Support:</strong> Dedicated technical team</li>
                        </ul>
                        <div class="system-applications">
                            <strong>Applications:</strong>
                            <span class="app-tag">Aerospace Components</span>
                            <span class="app-tag">Nuclear Reactors</span>
                            <span class="app-tag">Offshore Platforms</span>
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
                <p>Automated UT solutions across critical infrastructure and manufacturing</p>
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
                                <p>AUT has become the global standard for pipeline girth weld inspection, mandated by major operators and international codes. Delivers superior defect detection, faster throughput, and complete digital documentation compared to radiography.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cross-country transmission pipeline construction (DN300-DN1200)</li>
                                    <li><i class="fas fa-check"></i> Offshore subsea pipeline installation and tie-in welds</li>
                                    <li><i class="fas fa-check"></i> Deepwater S-lay and J-lay barge operations</li>
                                    <li><i class="fas fa-check"></i> Onshore gathering and distribution network expansion</li>
                                    <li><i class="fas fa-check"></i> CRA (Corrosion Resistant Alloy) clad pipe welds</li>
                                    <li><i class="fas fa-check"></i> Hot tap and repair weld verification</li>
                                    <li><i class="fas fa-check"></i> Station piping and manifold welds</li>
                                    <li><i class="fas fa-check"></i> Automatic/orbital weld procedure qualification</li>
                                </ul>

                                <div class="app-stats">
                                    <div class="stat">
                                        <span class="stat-num">5-8 min</span>
                                        <span class="stat-label">Per Weld (24")</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">60-100</span>
                                        <span class="stat-label">Welds/Day</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">90%</span>
                                        <span class="stat-label">Time Savings vs RT</span>
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
                                <p>Integrate AUT into production lines for 100% weld inspection at manufacturing speed. Automated systems match fabrication throughput while delivering consistent, documented quality control for pressure equipment, structural steel, and pipe manufacturing.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel longitudinal and circumferential seam welds</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger shell and tube sheet attachment welds</li>
                                    <li><i class="fas fa-check"></i> ERW (Electric Resistance Welded) pipe mill inline inspection</li>
                                    <li><i class="fas fa-check"></i> LSAW (Longitudinal Submerged Arc Welded) pipe seams</li>
                                    <li><i class="fas fa-check"></i> Boiler drum and header shop fabrication</li>
                                    <li><i class="fas fa-check"></i> Structural steel bridge and building components</li>
                                    <li><i class="fas fa-check"></i> Wind turbine tower section welds</li>
                                    <li><i class="fas fa-check"></i> Offshore platform jacket node joints</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-chart-line"></i>
                                    <div>
                                        <strong>Production Integration:</strong>
                                        <p>AUT systems integrate with manufacturing execution systems (MES) for real-time quality data, statistical process control (SPC), and traceability to support ISO 9001 and ASME certification requirements.</p>
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
                                <p>Robotic AUT systems revolutionize tank inspection by enabling rapid, comprehensive floor and shell examination without complete tank emptying or extensive surface preparation. Reduces inspection costs by 50-70% while improving defect detection.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> API 653 periodic internal floor inspection (10-year intervals)</li>
                                    <li><i class="fas fa-check"></i> Crude oil and petroleum product storage tanks (up to 100m diameter)</li>
                                    <li><i class="fas fa-check"></i> Bottom plate corrosion, pitting, and MIC detection</li>
                                    <li><i class="fas fa-check"></i> Annular ring and shell-to-bottom weld inspection</li>
                                    <li><i class="fas fa-check"></i> Shell course vertical and horizontal weld seams</li>
                                    <li><i class="fas fa-check"></i> Floating roof pontoon and leg attachment welds</li>
                                    <li><i class="fas fa-check"></i> Tank wall thickness mapping (CUI assessment)</li>
                                    <li><i class="fas fa-check"></i> Settlement and deformation monitoring</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-clock"></i>
                                    <div>
                                        <strong>Time & Cost Savings:</strong>
                                        <p>Robotic floor scanners complete 10,000 m² tank floor in 12-20 hours versus 5-7 days for manual UT. Minimal cleaning required (95% crude oil residue acceptable). Tank returned to service 2-3 weeks earlier.</p>
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
                                <p>AUT supports risk-based inspection (RBI) programs by providing comprehensive, repeatable data for damage mechanism monitoring, remaining life assessment, and fitness-for-service evaluations. Baseline scans enable precise crack growth tracking over operational life.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel and piping periodic inspection (ASME Sec XI, API 510)</li>
                                    <li><i class="fas fa-check"></i> High-temperature piping creep damage assessment (CrMo steels)</li>
                                    <li><i class="fas fa-check"></i> Corrosion under insulation (CUI) detection and mapping</li>
                                    <li><i class="fas fa-check"></i> Stress corrosion cracking (SCC) monitoring in austenitic steels</li>
                                    <li><i class="fas fa-check"></i> Fatigue crack detection in cyclically loaded components</li>
                                    <li><i class="fas fa-check"></i> Hydrogen-induced cracking (HIC) in sour service equipment</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger tube-to-tubesheet weld inspection</li>
                                    <li><i class="fas fa-check"></i> Reactor vessel nozzle safe-end welds (nuclear)</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-database"></i>
                                    <div>
                                        <strong>Digital Twin Integration:</strong>
                                        <p>AUT data feeds asset integrity management software for predictive maintenance, RBI optimization per API 580/581, and integration with digital twin models for lifecycle management and turnaround planning.</p>
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
                <p>Systematic approach from planning to final reporting</p>
            </div>

            <div class="workflow-grid">
                <div class="workflow-step">
                    <div class="step-number">1</div>
                    <div class="step-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>Pre-Job Engineering</h3>
                    <p>Review drawings, specifications, and access constraints. Select scanner type and probe configuration. Develop procedure per code requirements. Create scan plan and acceptance criteria.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> 2-5 days</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">2</div>
                    <div class="step-icon"><i class="fas fa-tools"></i></div>
                    <h3>Setup & Calibration</h3>
                    <p>Surface preparation per procedure. Mount scanner and align with weld centerline. Velocity calibration using reference blocks. Sensitivity setting using calibration standards. Encoder verification.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> 15-30 min</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">3</div>
                    <div class="step-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Automated Scanning</h3>
                    <p>Initiate programmed scan sequence. Real-time monitoring of lateral wave, backwall, and coupling. Automatic data acquisition with position encoding. Complete weld coverage at controlled speed.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> 5-15 min per weld</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">4</div>
                    <div class="step-icon"><i class="fas fa-search"></i></div>
                    <h3>Data Analysis</h3>
                    <p>Level II/III analyst reviews A-scans, B-scans, C-scans, and D-scans. Defect detection using amplitude, time-of-flight, and pattern recognition. Sizing per acceptance criteria. Classification and accept/reject decision.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> 20-45 min</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">5</div>
                    <div class="step-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Reporting</h3>
                    <p>Generate comprehensive report with scan images, defect locations, sizing data, and accept/reject per code. Digital archive of complete dataset. Client portal upload for instant access.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> 1-2 hours</div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">6</div>
                    <div class="step-icon"><i class="fas fa-database"></i></div>
                    <h3>Data Management</h3>
                    <p>Permanent archival storage (minimum 10 years). Cloud backup with encryption. Integration with client CMMS/ERP systems. Retrieval for future comparison inspections or regulatory audits.</p>
                    <div class="step-time"><i class="fas fa-clock"></i> Permanent</div>
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
                <p>Experience, equipment, and expertise for demanding projects</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Comprehensive Fleet</h3>
                    <p>15+ AUT systems including pipeline scanners, magnetic crawlers, tank floor robots, and orbital scanners. Latest Olympus, Zetec, and Sonatest instruments with multi-technology capability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Specialized Personnel</h3>
                    <p>ASNT Level II/III certified in PAUT, TOFD, and AUT. Manufacturer-trained on all scanner systems. Average 12 years AUT experience. Dedicated data analysts and reporting specialists.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Turnkey Projects</h3>
                    <p>Complete project management from procedure development through final reporting. Multi-system deployment for large campaigns. On-site supervision and quality control. Client training included.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3>Cloud Data Platform</h3>
                    <p>Secure client portal for real-time inspection status, preliminary results upload, and complete data package download. Mobile app access. Integration with client document management systems via API.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Emergency breakdown response nationwide. Remote technical support via video link. Equipment rental with operator or self-operated. Standby service for critical path projects. On-demand mobilization.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>Completed 5000+ pipeline girth welds, 200+ tank floor inspections, and 50+ turnaround projects. Approved vendor for ONGC, GAIL, IOCL, Reliance, and international EPCs. Zero lost-time incidents.</p>
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
                        <p>AUT reduces inspection time by 80-90% compared to manual UT and radiography. A typical 24" pipeline girth weld takes 5-8 minutes with AUT versus 60-90 minutes for manual UT/PAUT or 4-6 hours for radiography (including setup, exposure, and film processing). On large projects with hundreds of welds, AUT can inspect 60-100 welds per day per system compared to 8-12 for RT. This translates to significant cost savings and faster project completion.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the cost of AUT inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>AUT cost per weld is typically 20-40% lower than radiography on large projects despite higher daily equipment rates, due to dramatically faster throughput. Cost depends on: project size (volume discounts apply), location and mobilization distance, weld diameter and thickness, required report detail, and urgency. Contact us for detailed quotation. We offer competitive pricing with transparent breakdown and can demonstrate ROI for your specific application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can AUT completely replace radiography?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, AUT (combining PAUT and TOFD) is an approved radiography alternative per API 1104 Appendix A, DNV-OS-F101, ASME Sec VIII Mandatory Appendix 12, and other international codes. AUT provides equal or superior defect detection for cracks, lack of fusion, and volumetric defects while offering better through-wall sizing, instant results, no radiation safety concerns, and permanent digital records. Over 90% of global pipeline construction now uses AUT instead of RT. Some applications may still require RT for specific defect types or client specifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What surface preparation is required for AUT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Surface preparation for AUT is typically less extensive than radiography. Requirements: remove loose weld spatter, slag, and sharp protrusions that interfere with scanner travel; grind high points to create smooth path (not full grinding of weld cap); clean surface of oil, grease, and heavy contamination; no paint removal required for magnetic crawlers on painted surfaces. Surface roughness tolerance is typically Ra 12.5μm (500μin). Total prep time is 5-10 minutes versus scaffolding, shielding, and safety setup for RT.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is AUT data stored and for how long?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>All AUT data including complete A-scan files, images, reports, and setup parameters are stored digitally on redundant servers with cloud backup. Minimum retention is 10 years per regulatory requirements (API, ASME), but we maintain data indefinitely unless client requests deletion. Typical project data size is 50-500GB depending on weld count and technologies used. Data is encrypted and access-controlled. Clients receive complete dataset on hard drive or via secure download. This enables future re-analysis, third-party review, trending over time, and regulatory audit compliance without field return.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can we rent AUT equipment with or without operators?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer flexible equipment rental options: (1) Equipment + Operators: Turnkey service where our certified technicians operate scanners, analyze data, and provide reports; (2) Equipment Only: Rent scanners with training for client personnel to operate (requires ASNT Level II certification); (3) Self-Service with Remote Support: Rent equipment with our engineers available via video link for technical guidance. Rental includes calibration blocks, couplant, and all accessories. Training courses available for self-operated rentals. Daily, weekly, and monthly rates with volume discounts.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What training do your AUT operators have?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our AUT personnel hold: ASNT SNT-TC-1A or ISO 9712 Level II/III certification in PAUT, TOFD, and conventional UT; Manufacturer training certificates for all scanner systems (Olympus, Zetec, Sonatest, Phoenix); API 1104 Appendix A qualification for pipeline inspection; ASME Sec V Article 4, 5, and 6 qualification; Minimum 5 years field experience (average 12 years); Annual recertification and proficiency testing; Safety certifications (confined space, working at heights, offshore survival as applicable). We also employ dedicated Level III personnel for procedure development, personnel qualification, and data analysis oversight.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide AUT training courses?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive AUT training programs: (1) AUT Fundamentals (3 days): Theory, equipment operation, calibration, basic scanning; (2) PAUT+TOFD Combined Technique (5 days): Dual-technology setup, data acquisition, analysis per API 1104/DNV; (3) Advanced Data Analysis (2 days): Complex flaw interpretation, sizing, reporting; (4) Scanner Operation Specific (1-2 days): Hands-on training for pipeline, crawler, or tank floor systems; (5) Custom Programs: Tailored to client equipment and applications. Courses include classroom theory, hands-on practice with live welds, and written/practical exams. Certification upon successful completion. On-site training available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Accelerate Your Inspection Program?</h2>
                <p>Experience 10x productivity gains with automated ultrasonic testing technology</p>
                <div class="cta-buttons">
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Demo</a>
                </div>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free On-Site Demo</span>
                    <span><i class="fas fa-check"></i> ROI Analysis</span>
                    <span><i class="fas fa-check"></i> Equipment Trial Available</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Advanced NDT Services</h2>
                <p>Complete ultrasonic inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Phased Array UT for multi-angle inspection and imaging</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Time of Flight Diffraction for accurate flaw sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/lrut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <h3>LRUT</h3>
                    <p>Long Range UT for pipeline screening up to 100m</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/mfl-tank-floor.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>MFL Tank Floor</h3>
                    <p>Magnetic Flux Leakage for rapid tank bottom inspection</p>
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