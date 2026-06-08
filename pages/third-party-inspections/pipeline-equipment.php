<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Pipeline & Process Equipment Inspection Services | In-Service & Pre-Commissioning | Alpha Sonix NDT Solutions";
$meta_description = "Professional pipeline and process equipment inspection services including in-service pipeline inspection, pre-commissioning testing, pressure vessel inspection, and piping system integrity assessment for oil & gas and process industries.";
$meta_keywords = "pipeline inspection, process equipment inspection, in-service pipeline inspection, pre-commissioning inspection, pressure vessel inspection, piping inspection, corrosion monitoring, pipeline integrity";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/pipeline-process-equipment.php";
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
    <meta property="og:image" content="/www/assets/images/services/pipeline-inspection-og.jpg">
    
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
        "serviceType": "Pipeline & Process Equipment Inspection Services",
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
        "description": "Professional pipeline and process equipment inspection services ensuring integrity, safety, and regulatory compliance for oil & gas and process industry assets."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/pipeline/pipeline-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Pipeline & Process Equipment Inspection</span>
                </div>
                <h1 class="page-title">Pipeline & Process Equipment Inspection</h1>
                <p class="page-subtitle">Comprehensive integrity assessment for pipelines, pressure vessels, and process equipment ensuring safe, reliable, and compliant operation</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-industry"></i> In-Service & Pre-Commissioning</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Corrosion Monitoring</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> API 570/510 Certified</span>
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
                        <i class="fas fa-charging-station"></i>
                    </div>
                    <h3>In-Service Pipeline Inspection</h3>
                    <p>Comprehensive in-service pipeline inspection including corrosion monitoring, crack detection, and integrity assessment without operational interruption.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Pre-Commissioning Testing</h3>
                    <p>Hydrostatic testing, pneumatic testing, and leak detection services for new pipelines and process equipment before service entry.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pressure Vessel Inspection</h3>
                    <p>Internal and external inspection of pressure vessels, storage tanks, and process columns per API 510 and API 653 standards.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Corrosion Monitoring</h3>
                    <p>Continuous corrosion monitoring, thickness measurement surveys, and remaining life assessment for critical process equipment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS PIPELINE & PROCESS EQUIPMENT INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ASSET INTEGRITY SERVICES</span>
                    <h2>What is Pipeline & Process Equipment Inspection?</h2>
                    <p class="lead">Pipeline and process equipment inspection is a comprehensive integrity assessment service ensuring the safe, reliable, and compliant operation of critical oil & gas and process industry assets throughout their service life.</p>
                    
                    <p>Pipelines and process equipment operate under demanding conditions including high pressure, elevated temperatures, corrosive environments, and cyclic loading. Undetected degradation can lead to leaks, ruptures, production losses, environmental damage, and safety incidents with significant consequences.</p>

                    <p>Our pipeline and process equipment inspection services combine advanced NDT technologies, API-certified inspectors, and systematic integrity assessment methodologies to detect degradation, monitor corrosion rates, verify code compliance, and provide actionable recommendations for maintenance and life extension.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>In-Service Inspection Capability</strong>
                                <p>Inspect operating pipelines and equipment without shutdown using advanced NDT techniques and specialized access methods.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>API 570/510 Certified Inspectors</strong>
                                <p>API-certified piping and pressure vessel inspectors ensuring compliance with industry standards and regulatory requirements.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Degradation Assessment</strong>
                                <p>Detection and quantification of corrosion, erosion, cracking, dents, mechanical damage, and material degradation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Fitness-for-Service Evaluation</strong>
                                <p>Engineering assessment per API 579 for continued safe operation of degraded equipment with remaining life calculations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-tools"></i>
                        <div>
                            <strong>Critical for Asset Integrity:</strong>
                            <p>Pipeline failures cost an average of $10-50M per incident including repair costs, production losses, environmental remediation, and regulatory penalties. Systematic inspection programs reduce failure risk by 80-95% while optimizing maintenance spend.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/pipeline/pipeline-inspection.jpg" alt="Pipeline Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>In-service pipeline inspection using advanced UT and corrosion mapping technology</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Pipeline KM Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Vessels Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">API 570</span>
                            <span class="stat-label">Certified</span>
                        </div>
                    </div>
                    
                    <div class="pipeline-benefits">
                        <h4><i class="fas fa-star"></i> Inspection Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Prevent leak and rupture events</li>
                            <li><i class="fas fa-check"></i> Optimize maintenance spend</li>
                            <li><i class="fas fa-check"></i> Extend asset service life</li>
                            <li><i class="fas fa-check"></i> Regulatory compliance</li>
                            <li><i class="fas fa-check"></i> Reduce unplanned downtime</li>
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
                <span class="section-label">WHY PROFESSIONAL INSPECTION MATTERS</span>
                <h2>Key Advantages of Pipeline & Process Equipment Inspection</h2>
                <p>Protect your assets, ensure compliance, and optimize operational reliability</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Failure Prevention</h3>
                    <p>Proactive detection of degradation before failure prevents catastrophic leaks, ruptures, and safety incidents with 80-95% risk reduction.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Meet API, ASME, OSHA PSM, and EPA RMP requirements with documented inspection programs and certified inspectors.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Optimization</h3>
                    <p>Target maintenance resources where needed based on actual condition rather than time-based schedules, reducing costs 20-40%.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Life Extension</h3>
                    <p>Data-driven remaining life assessment and fitness-for-service evaluation enabling continued safe operation beyond original design life.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Corrosion Trending</h3>
                    <p>Systematic thickness monitoring establishes corrosion rates, predicts remaining life, and optimizes inspection intervals.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Minimized Downtime</h3>
                    <p>In-service inspection techniques enable integrity assessment without shutdown, maintaining production while ensuring safety.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION APPLICATIONS</span>
                <h2>Assets & Equipment We Inspect</h2>
                <p>Comprehensive inspection services for all types of pipelines and process equipment</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pipelines">Pipelines</button>
                    <button class="tab-btn" data-tab="pressure-vessels">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="piping-systems">Piping Systems</button>
                    <button class="tab-btn" data-tab="process-equipment">Process Equipment</button>
                </div>

                <div class="tabs-content">
                    <!-- Pipelines Tab -->
                    <div class="tab-panel active" id="pipelines">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pipeline/pipeline-corrosion-inspection.jpg" alt="Pipeline Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline Integrity Inspection</h3>
                                <p>Comprehensive onshore and offshore pipeline inspection services for transmission, distribution, and flow lines including corrosion monitoring, crack detection, and mechanical damage assessment.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> In-service corrosion monitoring using UT thickness measurement</li>
                                    <li><i class="fas fa-check"></i> CML (Corrosion Monitoring Location) establishment and tracking</li>
                                    <li><i class="fas fa-check"></i> Guided wave ultrasonic testing (GWUT) for long-range screening</li>
                                    <li><i class="fas fa-check"></i> Pipeline coating assessment and CUI detection</li>
                                    <li><i class="fas fa-check"></i> Cased crossing and road crossing inspections</li>
                                    <li><i class="fas fa-check"></i> Pre-commissioning hydrostatic and leak testing</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service assessment for degraded pipe sections</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">API 1160</span>
                                    <span class="standard-tag">ASME B31.4</span>
                                    <span class="standard-tag">ASME B31.8</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel" id="pressure-vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pipeline/pressure-vessel-inspection.jpg" alt="Pressure Vessel Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessel & Tank Inspection</h3>
                                <p>Internal and external inspection of pressure vessels, storage tanks, separators, and process columns per API 510 and API 653 standards.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Internal visual inspection and thickness mapping</li>
                                    <li><i class="fas fa-check"></i> External corrosion assessment and insulation removal</li>
                                    <li><i class="fas fa-check"></i> Weld inspection using RT, UT, PAUT, and MT/PT methods</li>
                                    <li><i class="fas fa-check"></i> Nozzle and attachment inspection</li>
                                    <li><i class="fas fa-check"></i> Tank bottom corrosion mapping and leak detection</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service assessment per API 579</li>
                                    <li><i class="fas fa-check"></i> Remaining life calculation and interval recommendations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 579</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Piping Systems Tab -->
                    <div class="tab-panel" id="piping-systems">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pipeline/piping-inspection.jpg" alt="Piping Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Process Piping System Inspection</h3>
                                <p>Comprehensive inspection of process piping systems including corrosion loops, high-temperature piping, and critical service lines per API 570 requirements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Corrosion loop establishment and monitoring</li>
                                    <li><i class="fas fa-check"></i> Ultrasonic thickness measurement at CMLs</li>
                                    <li><i class="fas fa-check"></i> Weld inspection using advanced UT and radiographic methods</li>
                                    <li><i class="fas fa-check"></i> High-temperature piping creep assessment</li>
                                    <li><i class="fas fa-check"></i> Support and hanger condition assessment</li>
                                    <li><i class="fas fa-check"></i> Vibrating line and fatigue assessment</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service evaluation for degraded piping</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">ASME B31.1</span>
                                    <span class="standard-tag">API 579</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process Equipment Tab -->
                    <div class="tab-panel" id="process-equipment">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/pipeline/heat-exchanger-inspection.jpg" alt="Process Equipment Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Process Equipment & Heat Exchanger Inspection</h3>
                                <p>Specialized inspection for heat exchangers, columns, reactors, and other process equipment including internal assessment and tube testing.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Heat exchanger shell and channel inspection</li>
                                    <li><i class="fas fa-check"></i> Tube inspection using IRIS, ECT, and MFL methods</li>
                                    <li><i class="fas fa-check"></i> Column and tower tray and packing assessment</li>
                                    <li><i class="fas fa-check"></i> Reactor internal inspection and catalyst bed assessment</li>
                                    <li><i class="fas fa-check"></i> Filter and strainer inspection</li>
                                    <li><i class="fas fa-check"></i> Specialty alloy and clad equipment assessment</li>
                                    <li><i class="fas fa-check"></i> Fouling and deposit evaluation</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 660/661</span>
                                    <span class="standard-tag">TEMA Standards</span>
                                    <span class="standard-tag">ASME Section VIII</span>
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
                <h2>Our Pipeline & Process Equipment Inspection Capabilities</h2>
                <p>Advanced NDT technologies and API-certified inspectors for complete asset integrity assessment</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>In-Service UT Corrosion Monitoring</h3>
                    <p>Ultrasonic thickness measurement and corrosion monitoring for operating pipelines and equipment without shutdown.</p>
                    <ul>
                        <li>Thickness measurement at CML locations</li>
                        <li>Corrosion rate calculation and trending</li>
                        <li>Remaining life assessment</li>
                        <li>High-temperature UT capability</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Guided Wave Ultrasonic Testing (GWUT)</h3>
                    <p>Long-range screening of pipeline sections to identify corrosion, erosion, and other anomalies from a single test point.</p>
                    <ul>
                        <li>100-200 meter range from single location</li>
                        <li>Cased crossing and road crossing inspection</li>
                        <li>Buried and insulated pipe screening</li>
                        <li>Anomaly prioritization for follow-up</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Pre-Commissioning & Hydrotesting</h3>
                    <p>Comprehensive pre-commissioning testing services for new pipelines and process equipment before service entry.</p>
                    <ul>
                        <li>Hydrostatic pressure testing</li>
                        <li>Pneumatic testing for gas systems</li>
                        <li>Leak detection and location</li>
                        <li>Test pack documentation and certification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Corrosion Under Insulation (CUI) Detection</h3>
                    <p>Specialized inspection techniques for detecting hidden corrosion beneath pipe and vessel insulation.</p>
                    <ul>
                        <li>Real-time radiography (RTR)</li>
                        <li>Pulsed eddy current (PEC) testing</li>
                        <li>Profile radiography</li>
                        <li>Targeted insulation removal and UT</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>NDT Weld & Flaw Detection</h3>
                    <p>Comprehensive non-destructive testing for weld inspection and flaw detection in pipelines and equipment.</p>
                    <ul>
                        <li>Radiographic testing (RT) - film and digital</li>
                        <li>Ultrasonic testing (UT) - conventional and phased array</li>
                        <li>Magnetic particle (MT) and penetrant (PT) testing</li>
                        <li>Time of flight diffraction (TOFD)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Fitness-for-Service Assessment</h3>
                    <p>Engineering evaluation of degraded equipment for continued safe operation per API 579/ASME FFS-1.</p>
                    <ul>
                        <li>Local thin area assessment</li>
                        <li>Crack-like flaw evaluation</li>
                        <li>Corrosion and erosion assessment</li>
                        <li>Remaining life and interval determination</li>
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
                    <h2>Our Pipeline & Process Equipment Inspection Workflow</h2>
                    <p>Systematic approach ensuring comprehensive assessment, accurate detection, and actionable recommendations for asset integrity.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Planning & Scope Definition</h4>
                                <p>Review of equipment records, damage mechanism assessment, and inspection scope development per API 570/510 requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Field Inspection Execution</h4>
                                <p>NDT and visual inspection of pipelines and equipment using certified inspectors and advanced testing methods.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Analysis & Assessment</h4>
                                <p>Corrosion rate calculation, remaining life assessment, and fitness-for-service evaluation of inspection findings.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Reporting & Recommendations</h4>
                                <p>Comprehensive inspection reports with findings, analysis, and actionable recommendations for maintenance and integrity management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Inspection Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/api-570-cert.png" alt="API 570">
                            <img src="/www/assets/images/certs/api-510-cert.png" alt="API 510">
                            <img src="/www/assets/images/certs/asnt-cert.png" alt="ASNT">
                            <img src="/www/assets/images/certs/aws-cwi-cert.png" alt="AWS CWI">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/pipeline/inspection-workflow.jpg" alt="Inspection Workflow">
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
                            <span>API 570 Certified Inspectors</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>In-Service Capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Advanced NDT Technologies</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Fitness-for-Service</span>
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
                <h2>Your Trusted Pipeline & Process Equipment Inspection Partner</h2>
                <p>API-certified inspectors, advanced NDT technologies, and proven integrity assessment methodology</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>API Certified Inspectors</h3>
                    <p>API 570 (piping), API 510 (pressure vessels), and API 653 (tanks) certified inspectors with extensive process industry experience.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Advanced NDT Technology</h3>
                    <p>State-of-the-art inspection equipment including phased array UT, guided wave UT, digital radiography, and automated corrosion mapping.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>500+ pipeline kilometers inspected and 1,000+ pressure vessels assessed across refining, petrochemical, and process industries.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>In-Service Capability</h3>
                    <p>Specialized techniques for inspecting operating equipment without shutdown, minimizing production impact while ensuring integrity.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Pan-India Coverage</h3>
                    <p>Mobile inspection teams serving refineries, pipelines, and process facilities across India with rapid mobilization capability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Comprehensive inspection reports, corrosion trending data, fitness-for-service assessments, and regulatory compliance documentation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Pipeline & Process Equipment Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between API 570 and API 510?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>API 570 covers inspection of piping systems, while API 510 covers pressure vessels. Both standards provide requirements for inspection intervals, inspector qualifications, and documentation. Our inspectors are certified to both standards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you inspect pipelines while they are operating?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we specialize in in-service pipeline inspection using techniques that work through coatings and insulation without interrupting flow. This includes ultrasonic thickness measurement, guided wave UT, and corrosion monitoring.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is a corrosion monitoring location (CML)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>CMLs are fixed locations on piping and equipment where thickness measurements are taken over time to establish corrosion rates, predict remaining life, and optimize inspection intervals. We can help establish CML programs for your facility.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should process equipment be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection intervals are determined by API 510/570 based on corrosion rate, remaining life, and risk assessment. Typical intervals range from 5-10 years, but can be optimized based on actual condition and damage mechanism activity.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is fitness-for-service assessment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Fitness-for-service is an engineering evaluation per API 579 that determines if degraded equipment can continue safe operation without repair. It provides remaining life estimates, operating limits, and inspection interval recommendations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide pre-commissioning inspection services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide complete pre-commissioning services including hydrostatic testing, leak detection, weld inspection, and documentation for new pipelines and process equipment before service entry.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What damage mechanisms affect pipelines and process equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Common damage mechanisms include internal/external corrosion, erosion, cracking (SCC, fatigue), hydrogen damage, high-temperature creep, and mechanical damage. Our inspectors assess all applicable damage mechanisms per API 571.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you detect corrosion under insulation?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We use specialized techniques including pulsed eddy current (PEC), real-time radiography, profile radiography, and targeted insulation removal with UT thickness measurement to detect and quantify CUI.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Your Pipeline & Process Equipment Integrity</h2>
                <p>Contact our inspection specialists for comprehensive integrity assessment and regulatory compliance</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:pipeline@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Inspection Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> API 570/510 Certified</span>
                    <span><i class="fas fa-check"></i> In-Service Capability</span>
                    <span><i class="fas fa-check"></i> Fitness-for-Service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Integrity Services</h2>
                <p>Comprehensive asset integrity and inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/third-party-inspection/asset-integrity-rbi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Asset Integrity & RBI</h3>
                    <p>Risk-based inspection planning and integrity management</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/shutdown-turnaround-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Turnaround Inspection</h3>
                    <p>Shutdown and outage support services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/octg-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-oil-can"></i>
                    </div>
                    <h3>OCTG Inspection</h3>
                    <p>Drill pipe, casing, and tubing testing</p>
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
            </div>
        </div>
    </section>

    <?php include $base . '/includes/footer.php'; ?>
    
    <script src="/www/assets/js/script.js"></script>
    <script src="/www/assets/js/service-page.js"></script>

</body>
</html>