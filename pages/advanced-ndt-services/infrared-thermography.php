<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Infrared Thermography Testing Services | Thermal Imaging NDT | Alpha Sonix";
$meta_description = "Professional infrared thermography services for electrical, mechanical, and building systems. Thermal imaging inspection for predictive maintenance, energy audits, and condition monitoring. ASNT certified thermographers.";
$meta_keywords = "infrared thermography, thermal imaging, IRT testing, electrical thermography, mechanical thermography, building thermography, predictive maintenance, energy audit, thermal inspection, IR camera";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/infrared-thermography.php";
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
    <meta property="og:image" content="/www/assets/images/services/thermography-og.jpg">

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
            "serviceType": "Infrared Thermography Testing",
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
            "description": "Professional infrared thermography services using advanced thermal imaging cameras for predictive maintenance, electrical inspection, and condition monitoring across all industries."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/thermography-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Infrared Thermography</span>
                </div>
                <h1 class="page-title">Infrared Thermography (IRT)</h1>
                <p class="page-subtitle">Advanced thermal imaging for predictive maintenance—detect electrical faults, mechanical issues, and energy losses before catastrophic failure with ±0.1°C accuracy</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-eye"></i> Non-Contact Detection</span>
                    <span class="badge"><i class="fas fa-thermometer-half"></i> ±0.1°C Accuracy</span>
                    <span class="badge"><i class="fas fa-clock"></i> Real-Time Analysis</span>
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
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Thermal Imaging Technology</h3>
                    <p>Advanced IR cameras detect temperature differences revealing hidden problems invisible to naked eye or contact methods</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Electrical System Safety</h3>
                    <p>Detect overheated connections, failing components, and arc fault risks before fires or outages—energized system inspection</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Mechanical Condition Monitoring</h3>
                    <p>Identify bearing failures, coupling misalignment, and lubrication problems in rotating equipment through heat signatures</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Building Performance Analysis</h3>
                    <p>Energy audits, moisture detection, HVAC optimization, and building envelope assessment for efficiency and comfort</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS THERMOGRAPHY ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">THERMAL IMAGING TECHNOLOGY</span>
                    <h2>What is Infrared Thermography?</h2>
                    <p class="lead">Infrared Thermography (IRT) is a non-contact, non-destructive testing technique that uses thermal imaging cameras to detect and measure infrared radiation emitted by objects. Every object above absolute zero temperature (-273°C) emits infrared energy proportional to its temperature. IRT cameras convert this invisible thermal radiation into visible images (thermograms) showing temperature distribution across surfaces—revealing equipment condition, energy losses, and potential failures before they become catastrophic.</p>

                    <p>The technology operates on Stefan-Boltzmann law: radiated power increases with the fourth power of temperature. Modern thermal cameras use uncooled microbolometer detectors (7.5-14 μm wavelength) that detect minute temperature differences (≤0.01°C thermal sensitivity) and display results as color-coded images where hot areas appear as bright colors (red, yellow) and cool areas as dark colors (blue, purple). Advanced cameras provide radiometric measurement capability—each pixel contains precise temperature data enabling quantitative analysis, not just qualitative hot spot identification.</p>

                    <p>IRT excels at detecting problems that manifest as temperature anomalies: electrical resistance generates heat (loose connections, overloaded circuits), mechanical friction creates heat (bearing wear, misalignment), fluid leaks show as temperature differences (steam leaks, refrigerant loss), and energy losses appear as thermal gradients (insulation defects, air infiltration). Unlike contact methods (thermocouples, RTDs) that measure single points, IRT provides full-field temperature mapping of entire systems in seconds—ideal for scanning large electrical panels, process equipment, and building facades efficiently.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Non-Contact Measurement</strong>
                                <p>Safe inspection of energized electrical systems, hot process equipment, and inaccessible components</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Real-Time Visualization</strong>
                                <p>Instantaneous temperature mapping showing heat patterns and anomalies across entire surfaces</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Predictive Capability</strong>
                                <p>Detects developing problems weeks or months before failure—enables planned maintenance vs emergency repairs</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Coverage</strong>
                                <p>Rapid scanning of large areas—inspect entire electrical room or process unit in hours versus days for contact methods</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-radiation"></i>
                        <div>
                            <strong>Microbolometer Technology:</strong>
                            <p>Modern thermal cameras use uncooled microbolometer focal plane arrays—silicon-based sensors that change resistance when heated by infrared radiation. Arrays contain 160×120 to 1024×768 individual detectors (pixels), each measuring 12-25 μm square. Advanced cameras achieve <0.01°C thermal sensitivity (NETD) enabling detection of 0.1°C temperature differences across image. Radiometric calibration provides ±1-2°C accuracy (or ±2% of reading) for quantitative temperature measurement. Unlike cooled detectors requiring liquid nitrogen, microbolometers operate at ambient temperature—enabling portable, battery-powered cameras for field inspection.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Thermal Survey</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/thermography-camera.jpg" alt="Thermal Camera">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional thermal imaging camera with radiometric measurement capability</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">±0.1°C</span>
                            <span class="stat-label">Thermal Sensitivity</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">-40°C to +1500°C</span>
                            <span class="stat-label">Temperature Range</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">640×480</span>
                            <span class="stat-label">Resolution (pixels)</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-eye"></i> Thermography Principles</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Object emits infrared radiation (heat)</li>
                            <li><strong>2.</strong> IR camera detects thermal energy</li>
                            <li><strong>3.</strong> Microbolometer converts IR to electrical signal</li>
                            <li><strong>4.</strong> Signal processing creates thermal image</li>
                            <li><strong>5.</strong> Color palette shows temperature distribution</li>
                            <li><strong>6.</strong> Analysis identifies anomalies and trends</li>
                            <li><strong>7.</strong> Maintenance decisions based on findings</li>
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
                <span class="section-label">WHY CHOOSE THERMOGRAPHY</span>
                <h2>Key Advantages of Infrared Testing</h2>
                <p>Revolutionary efficiency and safety for maintenance programs</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Ultimate Safety—No Contact Required</h3>
                    <p>Inspect energized electrical systems (up to 500kV), hot process equipment (1500°C), rotating machinery, and hazardous areas without physical contact or shutdown. Eliminates arc flash, electrocution, burn, and mechanical injury risks associated with contact measurements. OSHA-compliant inspection of electrical panels, switchgear, and motor control centers while energized. Maintain safe working distances: 600V systems (3 feet), 15kV systems (10 feet), transmission lines (35+ feet). Critical for oil & gas, chemical, and nuclear facilities where contact inspection poses unacceptable safety and business interruption risks.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Unmatched Speed & Coverage</h3>
                    <p>Scan entire electrical room (100+ components) in 30-60 minutes versus 4-8 hours for contact methods. Inspect 10-mile transmission line from helicopter in 2 hours versus weeks for conventional methods. Single thermal image captures temperature of thousands of points simultaneously—typical electrical panel image contains 300,000+ individual temperature measurements. Rapid deployment: camera ready in 30 seconds, no warm-up time, battery powered for 4-8 hours continuous operation. Ideal for time-critical inspections during brief outage windows or peak load conditions when problems most likely manifest.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-crystal-ball"></i>
                    </div>
                    <h3>Predictive Maintenance Game-Changer</h3>
                    <p>Detects developing problems 3-6 months before failure—transitions from reactive "run-to-failure" to proactive condition-based maintenance (CBM). Electrical connections typically show 10-50°C temperature rise before complete failure. Bearing problems manifest as 5-15°C temperature increase months before vibration analysis detects issues.Steam leaks show immediate temperature signatures enabling rapid response before energy losses escalate. ROI studies document 10:1 return—$10 saved in avoided failures for every $1 invested in thermography programs. Enables just-in-time maintenance scheduling maximizing equipment availability while minimizing maintenance costs.</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Reveals Hidden Problems</h3>
                    <p>Identifies issues invisible to visual inspection: internal electrical connection deterioration, bearing wear inside housings, insulation defects behind walls, moisture intrusion in building envelopes, heat exchanger tube blockages, refractory degradation in furnaces. Thermal signatures reveal root causes: hot spots indicate increased resistance (electrical) or friction (mechanical); cold spots suggest reduced flow, blockages, or insulation bypass; thermal gradients show heat transfer anomalies and energy losses. Early detection prevents catastrophic failures: electrical fires, bearing seizure, process upsets, and structural damage.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Quantitative Analysis & Trending</h3>
                    <p>Radiometric thermal cameras provide precise temperature measurement (±1-2°C accuracy) enabling quantitative condition assessment versus qualitative "hot spot" identification. Establish temperature baselines during commissioning, track degradation trends over time, set alarm thresholds for automated monitoring. Statistical analysis: temperature rise ratios, delta-T calculations, load-corrected comparisons. Integration with CMMS systems for automated work order generation when temperatures exceed setpoints. Regulatory compliance: IEEE 40-2013, NETA MTS, NFPA 70B require quantitative temperature data for acceptance criteria—not just thermal images.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Exceptional ROI & Cost Reduction</h3>
                    <p>Thermography programs typically achieve 300-1000% ROI through avoided failures and optimized maintenance. Single prevented electrical fire ($500K-5M damage) or major bearing failure ($100K-1M losses) justifies entire annual program cost. Energy savings: building envelope surveys identify 15-30% HVAC efficiency improvements, process equipment optimization reduces energy consumption 5-15%. Insurance premium reductions: many insurers offer 10-20% discounts for active thermal monitoring programs. Maintenance optimization: extends equipment life 20-50%, reduces emergency repairs 60-80%, enables condition-based lubrication and component replacement scheduling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== THERMOGRAPHY TYPES ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">SPECIALIZED APPLICATIONS</span>
                <h2>Types of Infrared Thermography</h2>
                <p>Tailored approaches for different systems and environments</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Electrical Thermography -->
                    <div class="wave-mode-card">
                        <div class="mode-header electrical">
                            <i class="fas fa-bolt"></i>
                            <h3>Electrical Thermography</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Detect electrical system problems before they cause fires, outages, or equipment damage</p>
                            <p><strong>Methodology:</strong> Inspect energized systems under load conditions when problems most apparent—typically 40-100% rated load</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Loose connections (bolted, compression, welded joints)</li>
                                    <li><i class="fas fa-check"></i> Overloaded circuits and components (transformers, cables, breakers)</li>
                                    <li><i class="fas fa-check"></i> Unbalanced loads (phase imbalances causing single-phase overheating)</li>
                                    <li><i class="fas fa-check"></i> Failing components (contactors, fuses, disconnect switches)</li>
                                    <li><i class="fas fa-check"></i> Insulation breakdown (corona discharge, tracking, carbonization)</li>
                                    <li><i class="fas fa-check"></i> Motor problems (rotor bars, winding hot spots, ventilation blockage)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Critical Applications:</strong> Power generation, transmission/distribution, industrial plants, data centers, hospitals
                            </div>
                        </div>
                    </div>

                    <!-- Mechanical Thermography -->
                    <div class="wave-mode-card">
                        <div class="mode-header mechanical">
                            <i class="fas fa-cogs"></i>
                            <h3>Mechanical Thermography</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Monitor rotating equipment condition through heat signature analysis—friction and wear generate characteristic thermal patterns</p>
                            <p><strong>Methodology:</strong> Compare equipment temperatures against baselines, similar equipment, and manufacturer specifications</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Bearing failures (insufficient lubrication, overheating, wear progression)</li>
                                    <li><i class="fas fa-check"></i> Coupling misalignment (angular, parallel, combination misalignment)</li>
                                    <li><i class="fas fa-check"></i> Belt/pulley problems (slipping, misalignment, excessive tension)</li>
                                    <li><i class="fas fa-check"></i> Pump cavitation and impeller problems</li>
                                    <li><i class="fas fa-check"></i> Compressor valve leakage and efficiency loss</li>
                                    <li><i class="fas fa-check"></i> Steam trap failures (passing, blocked, cold)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Critical Applications:</strong> Chemical plants, refineries, power plants, manufacturing facilities, HVAC systems
                            </div>
                        </div>
                    </div>

                    <!-- Building Thermography -->
                    <div class="wave-mode-card">
                        <div class="mode-header building">
                            <i class="fas fa-building"></i>
                            <h3>Building Thermography</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Evaluate building envelope performance, HVAC systems, and identify energy losses for efficiency optimization</p>
                            <p><strong>Methodology:</strong> Interior/exterior surveys during temperature differentials (≥10°C inside/outside temperature difference optimal)</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Insulation defects (missing, compressed, moisture-damaged insulation)</li>
                                    <li><i class="fas fa-check"></i> Air infiltration/exfiltration (gaps, cracks, weatherization failures)</li>
                                    <li><i class="fas fa-check"></i> Moisture intrusion (roof leaks, wall penetration, vapor barriers)</li>
                                    <li><i class="fas fa-check"></i> HVAC problems (duct leakage, damper malfunctions, poor air distribution)</li>
                                    <li><i class="fas fa-check"></i> Window/door performance (thermal bridging, seal failures)</li>
                                    <li><i class="fas fa-check"></i> Radiant heating systems (blockages, leaks, uneven heating)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Critical Applications:</strong> Commercial buildings, hospitals, schools, data centers, manufacturing facilities
                            </div>
                        </div>
                    </div>

                    <!-- Process Thermography -->
                    <div class="wave-mode-card">
                        <div class="mode-header process">
                            <i class="fas fa-industry"></i>
                            <h3>Process & Industrial Thermography</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Monitor process equipment, piping systems, and furnaces for operational efficiency and asset integrity</p>
                            <p><strong>Methodology:</strong> Temperature mapping during steady-state operations to identify deviations from normal thermal patterns</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Heat exchanger problems (fouling, tube failures, flow maldistribution)</li>
                                    <li><i class="fas fa-check"></i> Pipe and vessel insulation deterioration</li>
                                    <li><i class="fas fa-check"></i> Refractory damage (furnaces, reactors, kilns)</li>
                                    <li><i class="fas fa-check"></i> Tank heating systems (immersion heaters, steam coils)</li>
                                    <li><i class="fas fa-check"></i> Process fluid leaks (steam, hot oil, refrigerants)</li>
                                    <li><i class="fas fa-check"></i> Catalyst bed temperature distribution (reactors, regenerators)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Critical Applications:</strong> Refineries, chemical plants, power plants, steel mills, cement plants
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Thermography Selection Guide</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Application Type</th>
                                <th>Optimal Conditions</th>
                                <th>Key Parameters</th>
                                <th>Typical Findings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Electrical Systems</strong></td>
                                <td>40-100% load, dry conditions, minimal wind</td>
                                <td>Temperature rise, delta-T ratios, load correlation</td>
                                <td>10-50°C hot spots at connections, unbalanced phases</td>
                            </tr>
                            <tr>
                                <td><strong>Rotating Equipment</strong></td>
                                <td>Normal operating load, stable conditions</td>
                                <td>Absolute temperature, temperature rise vs ambient</td>
                                <td>5-15°C bearing temperature increase</td>
                            </tr>
                            <tr>
                                <td><strong>Building Envelope</strong></td>
                                <td>≥10°C indoor/outdoor differential, low wind</td>
                                <td>Surface temperature, thermal gradients</td>
                                <td>2-8°C temperature differences at defects</td>
                            </tr>
                            <tr>
                                <td><strong>Process Equipment</strong></td>
                                <td>Steady-state operation, known baseline</td>
                                <td>Process temperature vs design, uniformity</td>
                                <td>±5-20°C from design temperatures</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">THERMOGRAPHY APPLICATIONS</span>
                <h2>Industries & Systems We Serve</h2>
                <p>Comprehensive thermal inspection across all sectors</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="electrical">Electrical Systems</button>
                    <button class="tab-btn" data-tab="industrial">Industrial Process</button>
                    <button class="tab-btn" data-tab="building">Building Performance</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Applications</button>
                </div>

                <div class="tabs-content">
                    <!-- Electrical Systems Tab -->
                    <div class="tab-panel active" id="electrical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/electrical-thermography.jpg" alt="Electrical Thermography">
                            </div>
                            <div class="tab-text">
                                <h3>Electrical System Thermography</h3>
                                <p>Electrical thermography is the most critical application—preventing fires, outages, and equipment damage through early detection of electrical problems. Required by NFPA 70B, IEEE standards, and insurance companies for comprehensive electrical maintenance programs. Identifies 85% of electrical problems before they cause failures, with average ROI exceeding 500% through avoided emergency repairs and business interruption.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Switchgear & Panels:</strong> Main distribution, motor control centers, load centers—connection integrity assessment</li>
                                    <li><i class="fas fa-check"></i> <strong>Transformers:</strong> Power, distribution, control transformers—winding hot spots, cooling system, load assessment</li>
                                    <li><i class="fas fa-check"></i> <strong>Motors & Drives:</strong> AC/DC motors, VFDs, soft starters—bearing condition, winding integrity, ventilation</li>
                                    <li><i class="fas fa-check"></i> <strong>Power Distribution:</strong> Cables, bus ducts, cable trays—overloading, connection problems, phase balance</li>
                                    <li><i class="fas fa-check"></i> <strong>Protective Devices:</strong> Circuit breakers, fuses, relays—contact resistance, arc chute condition</li>
                                    <li><i class="fas fa-check"></i> <strong>Transmission Lines:</strong> Overhead lines, insulators, arresters—corona, tracking, wildlife damage</li>
                                    <li><i class="fas fa-check"></i> <strong>Substations:</strong> Switches, disconnects, capacitor banks—contact resistance, insulation integrity</li>
                                    <li><i class="fas fa-check"></i> <strong>Emergency Systems:</strong> UPS, generators, battery systems—connection integrity, load distribution</li>
                                </ul>

                                <div class="app-stats">
                                    <div class="stat">
                                        <span class="stat-num">85%</span>
                                        <span class="stat-label">Problems Detected Early</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">500%</span>
                                        <span class="stat-label">Average ROI</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">0</span>
                                        <span class="stat-label">System Downtime</span>
                                    </div>
                                </div>
                                <div class="app-case-study">
                                    <h4><i class="fas fa-chart-line"></i> Case Study: Manufacturing Plant Electrical Survey</h4>
                                    <p><strong>Challenge:</strong> 500-amp main switchgear, 20 motor control centers, history of unexpected electrical failures</p>
                                    <p><strong>Thermography Solution:</strong> Quarterly thermal inspections of entire electrical system under normal load</p>
                                    <p><strong>Results:</strong> Detected 47 connection problems over 2 years, prevented 3 potential electrical fires (estimated $2M damage), reduced unplanned electrical outages by 90%. Program cost: $15K annually. Avoided losses: $500K+. ROI: 3,300%.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NFPA 70B</span>
                                    <span class="standard-tag">IEEE 40-2013</span>
                                    <span class="standard-tag">NETA MTS</span>
                                    <span class="standard-tag">OSHA 29 CFR</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industrial Process Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/industrial-thermography.jpg" alt="Industrial Thermography">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial Process & Mechanical Systems</h3>
                                <p>Industrial thermography optimizes equipment reliability and process efficiency through comprehensive thermal monitoring. Essential for predictive maintenance programs in capital-intensive industries where equipment failures cause production losses of $50K-500K per day. Integrates with vibration analysis, oil analysis, and ultrasonic testing for complete condition-based maintenance strategies.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Rotating Equipment:</strong> Pumps, compressors, fans, blowers—bearing condition, coupling alignment, lubrication</li>
                                    <li><i class="fas fa-check"></i> <strong>Heat Exchangers:</strong> Shell & tube, plate, air coolers—fouling, tube leaks, flow distribution</li>
                                    <li><i class="fas fa-check"></i> <strong>Furnaces & Heaters:</strong> Process heaters, boilers, kilns—refractory condition, tube integrity, burner performance</li>
                                    <li><i class="fas fa-check"></i> <strong>Piping Systems:</strong> Process piping, steam lines, cooling water—insulation integrity, steam traps, flow blockages</li>
                                    <li><i class="fas fa-check"></i> <strong>Storage Tanks:</strong> Heated tanks, immersion heaters, heating coils—temperature uniformity, heating element condition</li>
                                    <li><i class="fas fa-check"></i> <strong>Reactors & Vessels:</strong> Chemical reactors, distillation columns—catalyst bed temperature, internal condition</li>
                                    <li><i class="fas fa-check"></i> <strong>HVAC Systems:</strong> Chillers, cooling towers, air handlers—mechanical component condition, system efficiency</li>
                                    <li><i class="fas fa-check"></i> <strong>Conveyor Systems:</strong> Belt conveyors, bucket elevators—bearing condition, drive components, belt tracking</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-industry"></i>
                                    <div>
                                        <strong>Predictive Maintenance Integration:</strong>
                                        <p>Thermography provides early warning indicators that complement other PdM technologies: <strong>Bearings:</strong> Temperature rise 3-6 months before vibration analysis detects problems; <strong>Steam Systems:</strong> Thermal imaging identifies trap failures immediately vs annual manual surveys; <strong>Heat Exchangers:</strong> Fouling detection months before pressure drop indicates cleaning needed. Integration with CMMS triggers automated work orders when temperatures exceed alarm setpoints.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ISO 18434-1</span>
                                    <span class="standard-tag">ASTM E1933</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ASME PCC-3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Building Performance Tab -->
                    <div class="tab-panel" id="building">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/building-thermography.jpg" alt="Building Thermography">
                            </div>
                            <div class="tab-text">
                                <h3>Building Performance & Energy Efficiency</h3>
                                <p>Building thermography identifies energy losses, moisture problems, and HVAC inefficiencies that cost facilities 15-30% in unnecessary energy consumption. Essential for LEED certification, energy audits, and building commissioning. Provides ROI through reduced utility costs, improved occupant comfort, and extended building component life through early problem detection and moisture prevention.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Building Envelope:</strong> Walls, roofs, windows—insulation defects, air leakage, thermal bridging assessment</li>
                                    <li><i class="fas fa-check"></i> <strong>HVAC Systems:</strong> Air distribution, ductwork, equipment—temperature uniformity, duct leakage, system balance</li>
                                    <li><i class="fas fa-check"></i> <strong>Moisture Detection:</strong> Roof leaks, wall penetration, plumbing leaks—early detection prevents mold and structural damage</li>
                                    <li><i class="fas fa-check"></i> <strong>Radiant Heating:</strong> In-floor heating, radiant panels—system functionality, leak detection, performance verification</li>
                                    <li><i class="fas fa-check"></i> <strong>Window Performance:</strong> Glazing systems, curtain walls—thermal performance, seal integrity, frame condition</li>
                                    <li><i class="fas fa-check"></i> <strong>Electrical Distribution:</strong> Panel rooms, distribution equipment—safety and efficiency in commercial buildings</li>
                                    <li><i class="fas fa-check"></i> <strong>Energy Audits:</strong> Comprehensive building assessment—identify energy conservation opportunities</li>
                                    <li><i class="fas fa-check"></i> <strong>Building Commissioning:</strong> New construction verification—ensure systems perform as designed</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-leaf"></i>
                                    <div>
                                        <strong>Energy Efficiency Benefits:</strong>
                                        <p>Building thermography surveys identify energy conservation measures (ECMs) with 1-3 year payback periods. Typical findings: 20-40% HVAC energy reduction through air sealing, 10-25% heating cost reduction through insulation improvements, 15-30% cooling cost reduction through envelope upgrades. ASHRAE Level II energy audits using thermography required for utility rebates and tax incentives. Average building survey cost: $2,000-8,000. Annual energy savings: $10,000-50,000+ for large commercial buildings.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM C1060</span>
                                    <span class="standard-tag">ASTM E1186</span>
                                    <span class="standard-tag">ASHRAE Standards</span>
                                    <span class="standard-tag">RESNET Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/specialty-thermography.jpg" alt="Specialty Thermography">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty & Advanced Applications</h3>
                                <p>Advanced thermography applications leverage specialized techniques and equipment for unique inspection challenges. Includes aerial surveys, lock-in thermography, and specialized medical/research applications. Custom solutions for challenging environments: high-temperature processes, outdoor transmission lines, underground utilities, and corrosion under insulation (CUI) detection.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Aerial Thermography:</strong> Transmission lines, solar farms, pipeline surveys—helicopter/drone-mounted thermal cameras</li>
                                    <li><i class="fas fa-check"></i> <strong>Veterinary Thermography:</strong> Large animal health assessment—lameness detection, inflammation monitoring</li>
                                    <li><i class="fas fa-check"></i> <strong>Solar Panel Inspection:</strong> PV array performance—cell cracking, connection failures, hot spots, bypass diode problems</li>
                                    <li><i class="fas fa-check"></i> <strong>Corrosion Under Insulation:</strong> CUI detection—moisture intrusion, insulation deterioration without removal</li>
                                    <li><i class="fas fa-check"></i> <strong>Underground Utilities:</strong> District heating, steam distribution—leak detection, thermal mapping</li>
                                    <li><i class="fas fa-check"></i> <strong>Fire Investigation:</strong> Post-fire analysis—origin and cause determination, electrical fault identification</li>
                                    <li><i class="fas fa-check"></i> <strong>Research & Development:</strong> Heat transfer studies, thermal modeling validation, prototype testing</li>
                                    <li><i class="fas fa-check"></i> <strong>Quality Control:</strong> Manufacturing QC—adhesive bonding, composite curing, thermal cycling verification</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-helicopter"></i>
                                    <div>
                                        <strong>Aerial Thermography—Transmission Line Inspection:</strong>
                                        <p>Helicopter-mounted thermal cameras inspect 100+ miles of transmission lines per day versus weeks for ground-based methods. Detects: conductor splice heating, insulator contamination, wildlife damage, corona discharge. Typical survey: 500kV line, 50-mile segment, 2-hour flight time, $15,000 cost versus $50,000+ for traditional climbing/bucket truck inspection. Critical for utility reliability—identifies 90% of potential failure points before outages occur. Integration with GPS provides precise defect location for ground crews.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E2582</span>
                                    <span class="standard-tag">IEC 62446</span>
                                    <span class="standard-tag">NFPA 921</span>
                                    <span class="standard-tag">ISO 6781</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TECHNICAL CAPABILITIES ===================== -->
    <section class="capabilities-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL SPECIFICATIONS</span>
                <h2>Thermography Capabilities & Limitations</h2>
                <p>Understanding measurement accuracy, environmental factors, and optimal conditions</p>
            </div>

            <div class="capabilities-grid">
                <!-- Camera Specifications -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-camera"></i>
                        <h3>Camera Specifications</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Resolution:</span> 320×240 to 1024×768 pixels</li>
                        <li><span class="cap-label">Thermal Sensitivity:</span>
                            <0.01°C to 0.05°C (NETD)</li>
                        <li><span class="cap-label">Accuracy:</span> ±1-2°C or ±2% of reading</li>
                        <li><span class="cap-label">Temperature Range:</span> -40°C to +1500°C</li>
                        <li><span class="cap-label">Spectral Range:</span> 7.5-14 μm (longwave infrared)</li>
                        <li><span class="cap-label">Frame Rate:</span> 9-60 Hz (real-time imaging)</li>
                        <li><span class="cap-label">Focus:</span> Manual/auto focus (0.15m to infinity)</li>
                        <li><span class="cap-label">Measurement:</span> Radiometric (quantitative data)</li>
                    </ul>
                </div>

                <!-- Environmental Factors -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cloud-sun"></i>
                        <h3>Environmental Considerations</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wind Effects:</span>
                            <15 mph for outdoor electrical</li>
                        <li><span class="cap-label">Precipitation:</span> No rain/snow during inspection</li>
                        <li><span class="cap-label">Solar Loading:</span> Early morning/late afternoon optimal</li>
                        <li><span class="cap-label">Ambient Temperature:</span> -10°C to +50°C operating range</li>
                        <li><span class="cap-label">Humidity:</span> 10-95% RH non-condensing</li>
                        <li><span class="cap-label">Emissivity:</span> 0.1-1.0 (material-dependent)</li>
                        <li><span class="cap-label">Reflections:</span> Account for reflected temperature</li>
                        <li><span class="cap-label">Distance:</span> 1:1 to 100:1 distance-to-spot ratio</li>
                    </ul>
                </div>

                <!-- Detection Capabilities -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detection Capabilities</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Electrical:</span> 1-2°C rise above ambient</li>
                        <li><span class="cap-label">Mechanical:</span> 5-10°C bearing temperature rise</li>
                        <li><span class="cap-label">Building:</span> 1-3°C envelope defects</li>
                        <li><span class="cap-label">Process:</span> ±2-5°C from design temps</li>
                        <li><span class="cap-label">Spatial Resolution:</span> 0.1-10 mrad (camera-dependent)</li>
                        <li><span class="cap-label">Measurement Mode:</span> Spot, line, area measurements</li>
                        <li><span class="cap-label">Analysis:</span> Isotherms, profiles, statistics</li>
                        <li><span class="cap-label">Data Storage:</span> Radiometric images, reports, trending</li>
                    </ul>
                </div>
            </div>
            <div class="capabilities-dual">
                <!-- Thermography Strengths -->
                <div class="capability-block detects">
                    <div class="capability-block-header">
                        <i class="fas fa-thumbs-up"></i>
                        <h3>Thermography Strengths—Use When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="detect-category">
                            <h4><i class="fas fa-shield-alt"></i> Safety-Critical Applications</h4>
                            <ul>
                                <li>Energized electrical systems requiring live inspection (arc flash hazard areas)</li>
                                <li>Hot process equipment >100°C where contact measurement dangerous</li>
                                <li>Rotating machinery inspection without shutdown</li>
                                <li>Hazardous area inspection (explosive atmospheres, confined spaces)</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-tachometer-alt"></i> High-Speed Screening</h4>
                            <ul>
                                <li>Large electrical installations requiring rapid assessment (substations, data centers)</li>
                                <li>Building envelope surveys covering thousands of square feet</li>
                                <li>Process equipment surveys during brief outage windows</li>
                                <li>Aerial surveys of transmission lines, solar farms, pipeline corridors</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-chart-line"></i> Predictive Maintenance</h4>
                            <ul>
                                <li>Condition monitoring programs requiring trend analysis over time</li>
                                <li>Early detection of developing problems months before failure</li>
                                <li>Quantitative temperature measurement for condition-based decisions</li>
                                <li>Integration with CMMS for automated work order generation</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-dollar-sign"></i> Cost-Benefit Optimization</h4>
                            <ul>
                                <li>High-value equipment where failures cost $100K+ in losses</li>
                                <li>Energy audits with 1-3 year payback on identified improvements</li>
                                <li>Insurance-required electrical inspections (premium discounts available)</li>
                                <li>Regulatory compliance (NFPA 70B, OSHA) for electrical safety</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Thermography Limitations -->
                <div class="capability-block limitations">
                    <div class="capability-block-header">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>Thermography Limitations—Avoid When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="limit-category">
                            <h4><i class="fas fa-eye-slash"></i> Line-of-Sight Required</h4>
                            <ul>
                                <li><strong>Hidden defects:</strong> Internal component failures, buried cables, enclosed equipment—no thermal signature visible</li>
                                <li>Obstructed views—equipment behind panels, guards, or other structures</li>
                                <li>Subsurface problems—internal bearing races, winding faults, internal corrosion</li>
                                <li>Underground utilities—thermal imaging cannot penetrate soil, concrete, or other opaque materials</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-cloud-rain"></i> Environmental Constraints</h4>
                            <ul>
                                <li><strong>Adverse weather:</strong> Rain, snow, heavy fog prevent infrared transmission</li>
                                <li>High wind speeds (>15 mph) cause convective cooling masking temperature differences</li>
                                <li>Solar loading during peak sun hours creates false temperature readings</li>
                                <li>Extreme ambient temperatures (-20°C, +45°C) affect camera performance and interpretation</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-microscope"></i> Material Properties</h4>
                            <ul>
                                <li>Low emissivity surfaces (<0.6): polished metals, shiny surfaces require surface treatment</li>
                                <li>Transparent materials (glass, plastics): thermal imaging sees through to background</li>
                                <li>Reflective surfaces: mirrors, polished stainless steel reflect background temperature</li>
                                <li>Very small targets: resolution limitations prevent accurate measurement of tiny components</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-clock"></i> Timing Dependencies</h4>
                            <ul>
                                <li><strong>Electrical systems:</strong> Must inspect under load—no-load or light-load conditions mask problems</li>
                                <li>Building surveys: require temperature differential (≥10°C indoor/outdoor difference)</li>
                                <li>Process equipment: steady-state operation required—startup/shutdown transients confuse analysis</li>
                                <li>Seasonal variations: some problems only apparent during specific operating conditions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & SYSTEMS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ADVANCED INSTRUMENTATION</span>
                    <h2>Professional Thermal Imaging Equipment</h2>
                    <p class="lead">Alpha Sonix maintains a comprehensive fleet of professional-grade thermal imaging cameras and analysis software—from high-resolution radiometric systems for critical electrical applications to specialized cameras for building diagnostics and aerial surveys. All equipment calibrated to NIST standards ensuring accurate, defensible measurements for engineering analysis and regulatory compliance.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>FLIR T1030sc High-Performance Camera</h4>
                                <p>Top-tier thermal imaging system with 1024×768 resolution and <0.02°C thermal sensitivity. Features: ±1°C measurement accuracy, -40°C to +1500°C range, 28° lens with 100:1 distance-to-spot ratio, full radiometric recording, wireless connectivity, GPS integration. Ideal for critical electrical inspections, research applications, and quantitative analysis requiring maximum precision. Includes interchangeable lenses (7°, 14°, 28°, 45°) for optimal field-of-view in any application.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>FLIR E95 Electrical Specialist Camera</h4>
                                <p>Purpose-built for electrical inspections with enhanced safety features. 464×348 resolution, <0.03°C sensitivity, -20°C to +1500°C range. Arc fault detection circuit, laser-assisted autofocus, LED light, built-in digital camera (5MP visible light). Electrical analysis software with load calculations, delta-T analysis, and automated reporting. Meets IEC 61010 safety standards for electrical work. Essential for power generation, distribution, and industrial electrical maintenance programs.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>FLIR B660 Building Specialist Camera</h4>
                                <p>Optimized for building diagnostics and energy audits. 640×480 resolution with wide-angle 25° lens for large area coverage. Features moisture detection algorithms, insulation analysis tools, HVAC-specific measurement functions. Includes: wireless connectivity, GPS for large building surveys, MSX image enhancement overlaying visual details on thermal image, built-in voice annotation. Integrated with building analysis software for energy audit reporting, ASHRAE compliance, and LEED documentation.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-helicopter"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Aerial & Specialized Systems</h4>
                                <p>Drone-mounted thermal cameras for large-area surveys and hazardous environments: FLIR Vue Pro R with radiometric measurement, 640×512 resolution, GPS integration for precise defect location. Helicopter-mounted systems for transmission line inspection: stabilized gimbals, long-range lenses, real-time transmission to ground station. High-temperature cameras for furnace/kiln inspection: up to 3000°C measurement range, sapphire windows, cooling systems. Microscopy systems for R&D applications: <10 μm spatial resolution, lock-in thermography capability.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Calibration & Certification</h4>
                        <p><strong>NIST Traceability:</strong> All thermal cameras calibrated annually using NIST-traceable blackbody sources. Verification includes: temperature accuracy across full range, uniformity across detector array, thermal sensitivity (NETD), spatial resolution. <strong>Software Validation:</strong> Analysis software validated against known temperature sources and comparative measurements with contact instruments (thermocouples, RTDs). <strong>Personnel Certification:</strong> All thermographers certified to ASNT SNT-TC-1A Level II minimum, with specialized training per application: ITC Level I/II Thermography, electrical safety training (NFPA 70E), building science fundamentals. <strong>Quality System:</strong> ISO 9001 certified procedures for equipment maintenance, calibration tracking, and measurement uncertainty analysis.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/thermography-equipment.jpg" alt="Thermography Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Thermography Survey Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>1024×768 Max Resolution</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>±1°C Measurement Accuracy</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Real-Time Radiometric Data</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>GPS Integration</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Automated Analysis Software</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>NIST Calibrated</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Certifications & Standards Compliance</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/asnt.png" alt="ASNT Certified">
                            <img src="/www/assets/images/certifications/itc.png" alt="ITC Certified">
                            <img src="/www/assets/images/certifications/nist.png" alt="NIST Traceable">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION PROCEDURE ===================== -->
    <section class="procedure-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION WORKFLOW</span>
                <h2>Thermography Inspection Procedure</h2>
                <p>Systematic approach ensuring accurate, actionable results</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Survey Planning & Preparation</h3>
                        <p>Review system drawings, operating procedures, and historical data. Identify inspection scope, critical equipment, and safety requirements. Plan optimal inspection timing: electrical systems at >40% load, buildings during temperature differentials, process equipment at steady-state. Check weather forecast for outdoor surveys. Prepare equipment: camera calibration verification, battery charging, data storage setup. Coordinate with operations for access, safety permits, and load conditions. Brief site personnel on survey objectives and safety protocols.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan with Equipment List & Safety Analysis
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Site Setup & Environmental Assessment</h3>
                        <p>Arrive on-site and verify environmental conditions suitable for thermal inspection: wind <15 mph for electrical, no precipitation, appropriate ambient temperatures. Set up thermal imaging camera: select appropriate lens, configure measurement parameters (emissivity, reflected temperature, distance). Establish reference measurements using contact instruments (clamp-on ammeter for electrical loads, contact thermometers for mechanical baselines). Document environmental conditions: ambient temperature, humidity, wind speed, solar conditions. Verify equipment operation through self-test and calibration check.</p>
                                <div class="timeline-deliverable">
                                    <strong>Deliverable:</strong> Environmental Conditions Log & Equipment Setup Record
                                </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Systematic Thermal Survey</h3>
                        <p>Execute comprehensive thermal imaging following systematic route: electrical panels (energized inspection at safe distance), rotating equipment (bearings, couplings, drives), process equipment (heat exchangers, piping, tanks), building envelope (exterior/interior as applicable). Capture radiometric thermal images with proper composition, distance, and angle. Record associated visible light images for correlation. Document load conditions, operating parameters, and anomalies observed. Maintain detailed survey log with image locations, equipment identification, and preliminary findings.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Raw Thermal Images & Field Survey Log
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Image Analysis & Temperature Measurement</h3>
                        <p>Download thermal images to analysis software and perform quantitative analysis. Set measurement parameters: emissivity correction, atmospheric transmission, background reflection compensation. Identify anomalies: hot spots, cold spots, temperature gradients, patterns indicating problems. Measure temperatures at specific points, lines, and areas. Calculate temperature differences (delta-T), temperature rise above ambient, and load-corrected comparisons. Compare against acceptance criteria: industry standards, manufacturer specifications, historical baselines. Flag critical issues requiring immediate attention versus routine monitoring items.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> Analyzed Thermal Images with Quantitative Data </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Problem Classification & Prioritization</h3>
                        <p>Classify findings by severity and urgency using industry-standard criteria: <strong>Critical (Immediate Action):</strong> >30°C rise electrical, >40°C rise mechanical—safety hazard, imminent failure risk; <strong>Major (30-90 days):</strong> 15-30°C rise electrical, 20-40°C mechanical—plan corrective action; <strong>Minor (Next outage):</strong> 5-15°C electrical, 10-20°C mechanical—monitor, address during planned maintenance; <strong>Monitor:</strong>
                            <5°C rise—continue observation, establish trending. Cross-reference with load data, operating conditions, and equipment history. Prioritize by consequence of failure: safety impact, production loss, repair cost, regulatory implications.</p>
                                <div class="timeline-deliverable">
                                    <strong>Deliverable:</strong> Problem Classification Matrix with Priority Rankings
                                </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Comprehensive Reporting & Recommendations</h3>
                        <p>Generate detailed thermography report including: Executive summary with key findings and immediate actions required, methodology and standards used, environmental conditions during survey, equipment inventory and ratings, thermal images with temperature data and analysis, problem summary table with priorities and recommended actions, trending analysis compared to previous surveys (if available), corrective action recommendations with timeline and estimated costs. Provide digital image archive with full radiometric data. Brief facility personnel on critical findings requiring immediate attention. Schedule follow-up surveys for monitoring items.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Complete Thermography Report per ASTM E1934 Standards
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
                <h2>Your Thermal Imaging Partner</h2>
                <p>Expertise, equipment, and commitment to safety and accuracy</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified Thermographers</h3>
                    <p>ASNT Level II certified thermographers with specialized training: ITC Level I/II Thermography Certification, NFPA 70E electrical safety certification, building science fundamentals, OSHA 30-hour safety training. Average 10+ years thermal imaging experience across electrical, mechanical, and building applications. Continuous professional development: annual recertification, advanced application training, new technology seminars. Dedicated specialists for each application area ensuring expert knowledge and interpretation.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Professional Equipment Fleet</h3>
                    <p>Comprehensive thermal imaging equipment inventory: High-resolution cameras (up to 1024×768), specialized electrical/building/industrial cameras, aerial survey systems (drone/helicopter mounted), high-temperature cameras (up to 3000°C), microscopy systems for R&D. All equipment NIST-calibrated annually with documented traceability. Redundant systems ensure no survey delays. Latest technology: radiometric measurement, wireless connectivity, GPS integration, real-time analysis capability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety-First Approach</h3>
                    <p>Paramount safety focus in all thermography operations: NFPA 70E compliance for electrical work, arc flash analysis and PPE selection, confined space entry certification, helicopter safety training for aerial surveys. Zero incident record in 100,000+ inspection hours. Insurance coverage: $10M general liability, $5M professional liability, aviation coverage for aerial work. Safety equipment: gas monitors, fall protection, communication systems, emergency response plans.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Advanced Analysis & Reporting</h3>
                    <p>State-of-the-art analysis software and reporting capabilities: Quantitative temperature analysis with uncertainty calculations, trending analysis comparing multiple surveys over time, automated anomaly detection algorithms, statistical analysis and reliability modeling. Integration with client CMMS systems for work order generation. Custom reporting: regulatory compliance formats (IEEE, NETA, NFPA), insurance company requirements, energy audit standards (ASHRAE). Digital archive with full radiometric data preservation.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Comprehensive Service Portfolio</h3>
                    <p>Complete thermal imaging solutions under single roof: Electrical system surveys (energized inspection), mechanical equipment monitoring, building envelope assessment, energy audits and commissioning, aerial surveys (transmission lines, solar farms), specialty applications (R&D, forensics, veterinary). Training services: client personnel certification, equipment operation, analysis techniques. Consultation: program development, standard creation, technology selection.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>1000+ facilities surveyed across all industries including: Fortune 500 manufacturers, major utilities, government facilities, healthcare systems, educational institutions. Documented success: $50M+ in avoided failures through early detection, 500+ electrical fires prevented, 90% reduction in emergency repairs for active program participants. Client testimonials available. Long-term partnerships: multi-year contracts with major clients, preferred vendor status with utilities and industrial companies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Thermography Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate are thermal cameras for temperature measurement?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Professional-grade thermal cameras achieve ±1-2°C accuracy or ±2% of reading when properly calibrated and used with correct measurement parameters. Accuracy depends on several factors: (1) <strong>Camera specification:</strong> High-end cameras (FLIR T1030sc) achieve ±1°C, mid-range cameras ±2°C; (2) <strong>Measurement setup:</strong> Accurate emissivity setting (material-specific: 0.95 for painted steel, 0.3 for polished aluminum), reflected temperature compensation, atmospheric transmission correction; (3) <strong>Environmental conditions:</strong> Stable conditions improve accuracy, wind/solar loading introduce errors; (4) <strong>Distance:</strong> Closer distance improves accuracy due to better spatial resolution. For electrical inspections, ±2°C accuracy is adequate since problems typically show 10-50°C temperature rises. For precision applications, contact instruments (thermocouples) provide ±0.1°C accuracy for validation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can thermal imaging detect problems inside electrical panels?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, but with important limitations. Thermal imaging detects heat signatures that conduct through panel enclosures to external surfaces: <strong>Detectable problems:</strong> Main bus connections, large breaker connections, transformer windings—generate sufficient heat to create external hot spots; overloaded breakers/fuses show heat buildup on handles and cases; loose main feeder connections heat up enclosure areas. <strong>Non-detectable problems:</strong> Small branch circuit connections, internal switch contacts, control circuit problems—insufficient heat generation or thermal isolation prevents external signature. <strong>Best practice:</strong> Remove panel covers when safe to do so (following NFPA 70E arc flash procedures) for direct component inspection. For energized closed-panel surveys, thermal imaging identifies gross problems only—detailed electrical testing (contact resistance, protective device testing) required for comprehensive assessment.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What environmental conditions are required for outdoor thermal surveys?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Environmental conditions critically affect outdoor thermal survey accuracy and reliability: <strong>Wind:</strong>
                            <15 mph for electrical inspections (convective cooling masks temperature differences), <25 mph for building surveys; <strong>Precipitation:</strong> No rain, snow, fog during survey—water droplets on camera lens/equipment surfaces prevent accurate measurement; <strong>Solar loading:</strong> Early morning (sunrise + 1-3 hours) or late afternoon optimal—midday sun creates false hot spots and thermal reflections masking real problems; <strong>Temperature stability:</strong> Avoid rapidly changing conditions—allow 30-60 minutes after weather changes for thermal equilibrium; <strong>Ambient temperature:</strong> -10°C to +45°C optimal for equipment operation and interpretation. <strong>Seasonal considerations:</strong> Building surveys require ≥10°C indoor/outdoor differential—winter heating season and summer cooling season optimal. Electrical surveys best during peak load periods when problems most apparent.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should thermal inspections be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection frequency depends on equipment criticality, operating environment, and regulatory requirements: <strong>Electrical systems:</strong> NFPA 70B recommends annual inspections minimum, quarterly for critical systems (hospitals, data centers), monthly for systems with history of problems. IEEE and NETA standards specify similar frequencies; <strong>Mechanical equipment:</strong> Quarterly for critical rotating equipment, semi-annually for general population, monthly for equipment with bearing/coupling problems; <strong>Building envelope:</strong> Annual energy audits, seasonal checks before heating/cooling seasons, after major weather events; <strong>Process equipment:</strong> Monthly for critical heat exchangers, quarterly for general equipment, annually for storage tanks and piping. <strong>Risk factors increasing frequency:</strong> Equipment age >15 years, harsh environment (marine, chemical), high consequence of failure, regulatory requirements (nuclear, healthcare). Many facilities start with baseline survey, then adjust frequency based on findings and equipment history.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is emissivity and why does it matter?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Emissivity is a material property (0.1-1.0) describing how efficiently a surface emits infrared radiation compared to a perfect blackbody (emissivity = 1.0). Critical for accurate temperature measurement: <strong>High emissivity materials (0.8-0.95):</strong> Painted surfaces, oxidized metals, concrete, wood, skin—emit radiation efficiently, easy to measure accurately; <strong>Medium emissivity (0.4-0.8):</strong> Weathered metals, anodized aluminum—reasonable measurement accuracy with proper settings; <strong>Low emissivity (0.1-0.4):</strong> Polished metals, shiny stainless steel, mirrors—poor emitters, difficult accurate measurement. <strong>Practical solutions:</strong> Use electrical tape (emissivity ~0.95) on metal surfaces for spot measurements; paint reference areas with high-emissivity coating; use reflection method for large polished surfaces. <strong>Typical values:</strong> Electrical equipment (painted) = 0.95; oxidized steel = 0.85; aluminum bus bars = 0.30; copper (oxidized) = 0.75. Incorrect emissivity causes measurement errors: too high setting reads low temperature, too low setting reads high temperature.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can thermal imaging replace other NDT methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Thermography complements but does not replace other NDT methods—each technique provides unique information: <strong>What thermal imaging provides:</strong> Surface temperature distribution, real-time monitoring capability, non-contact measurement, large-area rapid scanning, early problem detection through heat signatures; <strong>What it cannot provide:</strong> Subsurface defect detection (use ultrasonics), material thickness measurement (use UT gauging), crack detection without heat signature (use dye penetrant, magnetic particle), electrical resistance values (use microhmmeter). <strong>Synergistic approaches:</strong> (1) Thermal imaging identifies hot spots → follow with electrical resistance measurement for quantification; (2) Thermography screens for bearing problems → vibration analysis provides detailed diagnosis; (3) Building thermal survey identifies moisture areas → intrusive testing confirms extent; (4) Process equipment thermal mapping → follow with UT thickness surveys at hot spots. <strong>Best practice:</strong> Use thermography as screening tool directing focused application of other techniques where problems detected.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What safety precautions are required for electrical thermal inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Electrical thermal inspections require strict safety protocols per NFPA 70E and OSHA standards: <strong>Arc flash analysis:</strong> Determine incident energy levels and required PPE (arc-rated clothing, face shields, gloves). Typical PPE categories: Category 1 (4 cal/cm²) for 480V panels, Category 2+ (8+ cal/cm²) for higher voltages; <strong>Safe working distances:</strong> 600V systems: 3 feet minimum, 15kV systems: 10 feet, transmission lines: 35+ feet based on voltage level; <strong>Qualified personnel only:</strong> Electrical training, safety certification, understanding of electrical hazards and lockout/tagout procedures; <strong>Inspection timing:</strong> Energized systems only—de-energized equipment shows no thermal signatures; work with operations to ensure stable load conditions; <strong>Emergency procedures:</strong> Arc flash emergency response, first aid for electrical injuries, fire suppression (Class C extinguishers for electrical fires). <strong>Additional precautions:</strong> No conductive materials near energized equipment, maintain three-point contact when using ladders near electrical gear, verify thermal camera electrical safety rating, use insulated barriers when required. Never attempt to remove panel covers without proper arc flash analysis and PPE—thermal imaging provides valuable information even with covers in place for initial screening.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does a thermal inspection cost and what affects pricing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Thermal inspection costs vary significantly based on scope, complexity, and application: <strong>Electrical surveys:</strong> $2,000-8,000 for typical industrial facility (50-200 electrical panels), $500-2,000 for small commercial building; <strong>Building envelope:</strong> $1,500-5,000 for residential/small commercial, $5,000-25,000 for large commercial buildings; <strong>Mechanical surveys:</strong> $3,000-10,000 for process plant rotating equipment survey; <strong>Cost factors:</strong> (1) <strong>Equipment quantity:</strong> Number of electrical panels, mechanical units, building square footage; (2) <strong>Accessibility:</strong> High voltage systems require specialized safety procedures increasing time/cost; (3) <strong>Location:</strong> Multi-story buildings, outdoor transmission lines require specialized access equipment; (4) <strong>Reporting level:</strong> Basic hot spot identification versus comprehensive analysis with prioritization and recommendations; (5) <strong>Travel/mobilization:</strong> Local surveys more economical than remote site deployment; (6) <strong>Urgency:</strong> Emergency/weekend surveys carry premium pricing. <strong>ROI consideration:</strong> Single prevented electrical failure ($100K-1M) or major bearing failure ($50K-500K) typically exceeds annual thermal inspection program cost by 10-100× ratio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Prevent Failures Before They Happen—See the Invisible</h2>
                <p>Professional thermal imaging reveals problems months before catastrophic failure, saving millions in avoided outages and emergency repairs</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Thermal Survey Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> NIST-Calibrated Equipment</span>
                    <span><i class="fas fa-check"></i> Certified Thermographers</span>
                    <span><i class="fas fa-check"></i> Same-Day Emergency Response</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Condition Monitoring Services</h2>
                <p>Complete predictive maintenance solutions beyond thermal imaging</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Inspection</h3>
                    <p>Comprehensive visual assessment and documentation</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/ultrasonic-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-sound"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Bearing condition monitoring and leak detection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/electrical-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Electrical Testing</h3>
                    <p>Contact resistance and insulation testing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/vibration-analysis.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Vibration Analysis</h3>
                    <p>Rotating equipment condition monitoring</p>
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