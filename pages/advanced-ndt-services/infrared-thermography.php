<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Infrared Thermography (IRT) Services | Thermal Imaging NDT & Condition Monitoring | Alpha Sonix";
$meta_description = "Infrared thermography (IRT) for electrical, mechanical and building inspections. Non-contact thermal imaging to identify overheating, energy loss and abnormal temperature patterns for predictive maintenance. Certified thermographers and code-aligned reporting.";
$meta_keywords = "infrared thermography, thermal imaging, IRT inspection, electrical thermography, mechanical thermography, building thermography, predictive maintenance, condition monitoring, energy audit, infrared camera survey";
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
            "serviceType": "Infrared Thermography (IRT)",
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
            "description": "Infrared thermography (IRT) services for electrical and mechanical condition monitoring and building diagnostics using radiometric thermal imaging for predictive maintenance and energy performance assessment."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/IT/it1.png');"></div>
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
                <p class="page-subtitle">Non-contact thermal imaging for predictive maintenance—identify overheating, abnormal temperature patterns, and energy loss before they become failures, outages, or safety incidents</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-eye"></i> Non‑Contact Inspection</span>
                    <span class="badge"><i class="fas fa-thermometer-half"></i> High Thermal Sensitivity</span>
                    <span class="badge"><i class="fas fa-clock"></i> Real‑Time Imaging</span>
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
                    <p>Radiometric IR cameras reveal temperature distribution and anomalies that are not visible to the naked eye or single-point contact measurements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Electrical System Risk Reduction</h3>
                    <p>Detect overheating at connections, terminations, breakers, busbars and transformers—often without de-energising equipment (subject to access and safety rules).</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Mechanical Condition Monitoring</h3>
                    <p>Identify abnormal heat patterns from bearings, couplings, belts, friction points, steam traps, and rotating equipment—supporting planned maintenance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Building & Energy Diagnostics</h3>
                    <p>Energy audits, moisture tracing, HVAC performance checks, and envelope diagnostics to reduce losses and improve occupant comfort.</p>
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
                    <p class="lead">Infrared Thermography (IRT) is a non-contact inspection method that visualizes surface temperature patterns by detecting infrared radiation emitted from objects. Thermal images (thermograms) help identify abnormal temperature conditions associated with electrical resistance, friction, insulation failure, fluid flow issues, and heat-loss pathways.</p>

                    <p>In industrial maintenance, the value of IRT is speed and coverage: a single image provides thousands of temperature measurements across an entire component or system. Inspections are typically performed under normal operating conditions so that developing faults (e.g., poor electrical connections or bearing wear) produce measurable thermal signatures.</p>

                    <p>For quantitative work, radiometric cameras store temperature data per pixel. Correct interpretation requires proper settings and field practice—emissivity, reflected temperature, distance, load condition (for electrical), and environmental effects (wind/solar loading) must be considered to avoid false calls.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Non‑Contact Measurement</strong>
                                <p>Inspect energized electrical equipment, hot assets, and rotating machinery without physical contact (with appropriate safety controls).</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Immediate Visualization</strong>
                                <p>Thermal patterns and anomalies can be seen in real time—supporting fast decisions in the field.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Predictive Maintenance Support</strong>
                                <p>Find developing problems early and schedule corrective work during planned maintenance instead of responding to emergency failure.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High Coverage Efficiency</strong>
                                <p>Scan large electrical rooms, production lines, and building areas quickly—reducing inspection time while improving coverage.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-radiation"></i>
                        <div>
                            <strong>What thermal cameras really measure:</strong>
                            <p>Thermal cameras measure infrared radiation, not “heat” directly. Accurate temperature readings depend on emissivity and reflections. Our reports document key assumptions (emissivity, load condition, ambient) so results are defensible and repeatable.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Thermal Survey</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/thermography-camera.jpg" alt="Thermal imaging camera">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional radiometric thermal camera for inspection and documentation.</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">&lt;0.05°C</span>
                            <span class="stat-label">Typical NETD (Sensitivity)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">-40°C to +1500°C</span>
                            <span class="stat-label">Common Measurement Range</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">640×480</span>
                            <span class="stat-label">Typical Resolution</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-eye"></i> Thermography Principles</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Object emits infrared radiation</li>
                            <li><strong>2.</strong> IR camera detects radiation</li>
                            <li><strong>3.</strong> Detector converts IR to signal</li>
                            <li><strong>4.</strong> Signal processing builds thermogram</li>
                            <li><strong>5.</strong> Palette shows temperature distribution</li>
                            <li><strong>6.</strong> Analyst evaluates anomalies</li>
                            <li><strong>7.</strong> Maintenance actions planned</li>
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
                <p>Fast, safe screening that strengthens reliability and maintenance planning</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Improved Safety Through Non‑Contact Inspection</h3>
                    <p>Thermography reduces exposure to hazards by allowing measurement at a distance. For electrical work, inspections are performed under site safety rules and applicable standards (e.g., NFPA 70E), including arc‑flash assessment and required PPE.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Speed & Coverage</h3>
                    <p>Large areas and multiple assets can be scanned quickly, making IRT ideal for routine condition monitoring programs and shutdown/turnaround checks where time is limited.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-crystal-ball"></i>
                    </div>
                    <h3>Early Warning for Maintenance Planning</h3>
                    <p>Overheating patterns often appear before failures. Early detection supports planned corrective action (tightening, balancing loads, replacing components) instead of reactive maintenance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Finds Issues Not Seen Visually</h3>
                    <p>Loose connections, overloaded circuits, insulation defects, steam trap failures, and refractory hot spots frequently present as thermal anomalies even when visual condition appears normal.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Quantitative Documentation & Trending</h3>
                    <p>Radiometric images provide temperature values that can be compared across inspections. Trending supports risk ranking, prioritization, and verification of corrective actions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Avoidance & Reliability</h3>
                    <p>Thermography supports reliability programs by reducing unplanned outages, avoiding damage escalation, and improving maintenance timing. The value is greatest for high‑consequence assets (switchgear, transformers, critical rotating equipment).</p>
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
                <p>Different assets require different inspection approach and acceptance criteria</p>
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
                            <p><strong>Purpose:</strong> Identify overheating due to resistance, imbalance, overload, and component deterioration.</p>
                            <p><strong>Methodology:</strong> Inspect energized systems under stable load conditions (often ≥40% load) where anomalies are most visible.</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Loose / high‑resistance connections</li>
                                    <li><i class="fas fa-check"></i> Overloaded breakers, cables, busbars</li>
                                    <li><i class="fas fa-check"></i> Phase imbalance and abnormal heating</li>
                                    <li><i class="fas fa-check"></i> Defective fuses, disconnects, contactors</li>
                                    <li><i class="fas fa-check"></i> Transformer cooling and connection issues</li>
                                    <li><i class="fas fa-check"></i> UPS / battery connection heating</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Switchgear, MCC, panels, substations, generators, data centers
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
                            <p><strong>Purpose:</strong> Support rotating equipment reliability by identifying abnormal heat patterns due to friction, misalignment, and lubrication problems.</p>
                            <p><strong>Methodology:</strong> Compare temperature and patterns with baselines, similar assets, and operating conditions.</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Bearing overheating</li>
                                    <li><i class="fas fa-check"></i> Coupling misalignment indications</li>
                                    <li><i class="fas fa-check"></i> Belt / pulley slippage or tension issues</li>
                                    <li><i class="fas fa-check"></i> Pump cavitation symptoms (supporting evidence)</li>
                                    <li><i class="fas fa-check"></i> Steam trap failure patterns</li>
                                    <li><i class="fas fa-check"></i> Refractory or insulation hot spots</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Pumps, compressors, fans, gearboxes, conveyors, steam systems
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
                            <p><strong>Purpose:</strong> Identify heat loss, moisture intrusion, and envelope/HVAC deficiencies.</p>
                            <p><strong>Methodology:</strong> Surveys are best when indoor/outdoor temperature differential is ≥10°C and wind is low.</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Missing/damaged insulation</li>
                                    <li><i class="fas fa-check"></i> Air leakage and thermal bridging</li>
                                    <li><i class="fas fa-check"></i> Moisture intrusion (supporting evidence)</li>
                                    <li><i class="fas fa-check"></i> HVAC distribution issues</li>
                                    <li><i class="fas fa-check"></i> Window/door seal failures</li>
                                    <li><i class="fas fa-check"></i> Radiant heating distribution issues</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Commercial buildings, hospitals, schools, data centers
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
                            <p><strong>Purpose:</strong> Identify abnormal thermal patterns in process equipment that indicate performance loss or integrity concerns.</p>
                            <p><strong>Methodology:</strong> Temperature mapping during steady state for deviation vs baseline/design.</p>

                            <div class="mode-advantages">
                                <h4>Detectable Problems:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Insulation deterioration and heat loss</li>
                                    <li><i class="fas fa-check"></i> Refractory hot spots (furnaces/kilns)</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger fouling patterns (screening)</li>
                                    <li><i class="fas fa-check"></i> Steam/hot fluid leaks (supporting evidence)</li>
                                    <li><i class="fas fa-check"></i> Tank heating coil performance</li>
                                    <li><i class="fas fa-check"></i> Abnormal temperature distribution in vessels</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Refineries, chemical plants, steel/cement, utilities
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
                                <td>Stable load, dry conditions, low wind</td>
                                <td>ΔT, temperature rise, phase comparison, load correlation</td>
                                <td>Hot spots at terminations, imbalance heating</td>
                            </tr>
                            <tr>
                                <td><strong>Rotating Equipment</strong></td>
                                <td>Normal operating load</td>
                                <td>Temperature rise vs baseline/ambient</td>
                                <td>Bearing/coupling hot patterns</td>
                            </tr>
                            <tr>
                                <td><strong>Building Envelope</strong></td>
                                <td>≥10°C indoor/outdoor differential, low wind</td>
                                <td>Thermal gradients, pattern anomalies</td>
                                <td>Insulation voids, air leakage paths</td>
                            </tr>
                            <tr>
                                <td><strong>Process Equipment</strong></td>
                                <td>Steady state, known baseline</td>
                                <td>Deviation from expected patterns</td>
                                <td>Insulation loss, refractory hot spots</td>
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
                <p>Thermal inspection services for reliability, safety, and energy performance</p>
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
                                <img src="/www/assets/images/services/electrical-thermography.jpg" alt="Electrical thermography inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Electrical System Thermography</h3>
                                <p>Electrical thermography focuses on abnormal heating associated with resistance, poor connections, overload, imbalance, and component deterioration. Results are typically prioritised as Critical / Major / Minor / Monitor based on ΔT, risk, and operating conditions.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Switchgear, MCCs, panels, bus ducts</li>
                                    <li><i class="fas fa-check"></i> Transformers (connections, cooling patterns)</li>
                                    <li><i class="fas fa-check"></i> Circuit breakers, fuses, disconnects</li>
                                    <li><i class="fas fa-check"></i> Cables/terminations and joints</li>
                                    <li><i class="fas fa-check"></i> UPS, battery banks, DC systems</li>
                                    <li><i class="fas fa-check"></i> Substations (where access is permitted)</li>
                                    <li><i class="fas fa-check"></i> Motors and drives (supporting evidence)</li>
                                    <li><i class="fas fa-check"></i> Compliance-focused documentation</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">NFPA 70B</span>
                                    <span class="standard-tag">NFPA 70E</span>
                                    <span class="standard-tag">NETA MTS</span>
                                    <span class="standard-tag">IEEE Guidance</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industrial Process Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/industrial-thermography.jpg" alt="Industrial thermography survey">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial Process & Mechanical Systems</h3>
                                <p>Industrial thermography supports reliability by identifying abnormal heat patterns in rotating equipment, steam systems, insulation, and high-temperature assets. It is most powerful when combined with vibration, ultrasound, and process data.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pumps, compressors, gearboxes, fans</li>
                                    <li><i class="fas fa-check"></i> Bearings, couplings, belts, drives</li>
                                    <li><i class="fas fa-check"></i> Steam traps and insulation checks</li>
                                    <li><i class="fas fa-check"></i> Furnaces/heaters refractory hot spots</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger performance screening</li>
                                    <li><i class="fas fa-check"></i> Tank heating coils and heaters</li>
                                    <li><i class="fas fa-check"></i> Process piping heat loss patterns</li>
                                    <li><i class="fas fa-check"></i> Maintenance prioritization reports</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">ISO 18434-1</span>
                                    <span class="standard-tag">ASTM E1933</span>
                                    <span class="standard-tag">API 570 (program)</span>
                                    <span class="standard-tag">ASME PCC (program)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Building Performance Tab -->
                    <div class="tab-panel" id="building">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/building-thermography.jpg" alt="Building thermography energy audit">
                            </div>
                            <div class="tab-text">
                                <h3>Building Performance & Energy Efficiency</h3>
                                <p>Building thermography identifies insulation defects, air leakage pathways, and moisture-related anomalies to support energy audits and corrective work planning.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Roof and wall insulation defects</li>
                                    <li><i class="fas fa-check"></i> Air leakage and thermal bridging patterns</li>
                                    <li><i class="fas fa-check"></i> Moisture intrusion indicators (confirm with moisture meters)</li>
                                    <li><i class="fas fa-check"></i> HVAC distribution checks and duct leakage patterns</li>
                                    <li><i class="fas fa-check"></i> Window/door seal performance</li>
                                    <li><i class="fas fa-check"></i> Commissioning support for new works</li>
                                    <li><i class="fas fa-check"></i> Report aligned to audit requirements</li>
                                    <li><i class="fas fa-check"></i> Corrective action prioritization</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">ASTM C1060</span>
                                    <span class="standard-tag">ASTM E1186</span>
                                    <span class="standard-tag">ISO 6781</span>
                                    <span class="standard-tag">ASHRAE (program)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/specialty-thermography.jpg" alt="Specialty thermography applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty & Advanced Applications</h3>
                                <p>Special applications include aerial surveys, solar PV inspections, and industrial leak/heat-loss mapping. Scope and deliverables are tailored to the asset, risk and operating environment.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Solar PV module hot spot screening</li>
                                    <li><i class="fas fa-check"></i> Aerial surveys for utilities (subject to project setup)</li>
                                    <li><i class="fas fa-check"></i> Steam and hot fluid leak screening (supporting evidence)</li>
                                    <li><i class="fas fa-check"></i> CUI screening (supports prioritization; confirm by inspection)</li>
                                    <li><i class="fas fa-check"></i> Fire investigation support (case dependent)</li>
                                    <li><i class="fas fa-check"></i> R&amp;D thermal mapping (as required)</li>
                                    <li><i class="fas fa-check"></i> QC checks for thermal uniformity</li>
                                    <li><i class="fas fa-check"></i> Custom reporting and GIS tagging</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">IEC 62446</span>
                                    <span class="standard-tag">ASTM E2582</span>
                                    <span class="standard-tag">NFPA 921 (case)</span>
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
                <p>Accurate measurement depends on correct setup, operating conditions, and line-of-sight</p>
            </div>

            <div class="capabilities-grid">
                <!-- Camera Specifications -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-camera"></i>
                        <h3>Typical Camera Specifications</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Resolution:</span> 320×240 to 1024×768 pixels</li>
                        <li><span class="cap-label">Thermal Sensitivity (NETD):</span> &lt;0.05°C (model dependent)</li>
                        <li><span class="cap-label">Accuracy:</span> Typically ±1–2°C or ±2% (with correct settings)</li>
                        <li><span class="cap-label">Temperature Range:</span> -40°C to +1500°C (application dependent)</li>
                        <li><span class="cap-label">Spectral Range:</span> 7.5–14 μm (LWIR)</li>
                        <li><span class="cap-label">Frame Rate:</span> 9–60 Hz</li>
                        <li><span class="cap-label">Measurement:</span> Radiometric (quantitative)</li>
                        <li><span class="cap-label">Outputs:</span> IR + visual images for correlation</li>
                    </ul>
                </div>

                <!-- Environmental Factors -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cloud-sun"></i>
                        <h3>Environmental Considerations</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wind:</span> Lower wind preferred (convective cooling)</li>
                        <li><span class="cap-label">Precipitation:</span> Avoid rain/snow for accurate results</li>
                        <li><span class="cap-label">Solar Loading:</span> Manage reflections and sun heating effects</li>
                        <li><span class="cap-label">Humidity:</span> High humidity can affect long distance work</li>
                        <li><span class="cap-label">Emissivity:</span> Must be set to material/surface condition</li>
                        <li><span class="cap-label">Reflections:</span> Reflective metals require care</li>
                        <li><span class="cap-label">Distance:</span> Affects spot size and accuracy</li>
                        <li><span class="cap-label">Access:</span> Line-of-sight required</li>
                    </ul>
                </div>

                <!-- Detection Capabilities -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detection Capability (Typical)</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Electrical:</span> Connection heating and imbalance patterns</li>
                        <li><span class="cap-label">Mechanical:</span> Bearing/coupling heat anomalies</li>
                        <li><span class="cap-label">Building:</span> Thermal bridges, insulation voids, leakage paths</li>
                        <li><span class="cap-label">Process:</span> Insulation loss, refractory hot spots</li>
                        <li><span class="cap-label">Measurement Tools:</span> Spot, line, area, isotherms</li>
                        <li><span class="cap-label">Analysis:</span> ΔT, trending, ranking</li>
                        <li><span class="cap-label">Deliverables:</span> Radiometric archive + report</li>
                        <li><span class="cap-label">Follow‑up:</span> Confirm with electrical/UT/vibration when required</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="capabilities-dual">
                <!-- Thermography Strengths -->
                <div class="capability-block detects">
                    <div class="capability-block-header">
                        <i class="fas fa-thumbs-up"></i>
                        <h3>Thermography Strengths—Use When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="detect-category">
                            <h4><i class="fas fa-shield-alt"></i> Safety & Non‑Contact Benefits</h4>
                            <ul>
                                <li>Energized electrical systems (with NFPA 70E controls)</li>
                                <li>Hot or inaccessible components</li>
                                <li>Rotating machinery checks without shutdown</li>
                                <li>High-volume screening requirements</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-tachometer-alt"></i> Fast Screening</h4>
                            <ul>
                                <li>Large electrical installations and substations</li>
                                <li>Buildings, roofs and envelope surveys</li>
                                <li>Process unit walkdowns</li>
                                <li>Baseline surveys for trending programs</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-chart-line"></i> Predictive Maintenance Programs</h4>
                            <ul>
                                <li>Repeat inspections to track temperature trends</li>
                                <li>Ranking of findings for maintenance planning</li>
                                <li>Verification after corrective work</li>
                                <li>CMMS integration (on request)</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-dollar-sign"></i> High Consequence Assets</h4>
                            <ul>
                                <li>Critical switchgear and power distribution</li>
                                <li>Transformers and large motors</li>
                                <li>Key rotating equipment</li>
                                <li>High energy-loss systems (steam/insulation/buildings)</li>
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
                            <h4><i class="fas fa-eye-slash"></i> No Line‑of‑Sight</h4>
                            <ul>
                                <li>Hidden/internal defects without a surface temperature effect</li>
                                <li>Covered or obstructed components</li>
                                <li>Subsurface flaws requiring UT/RT/ET instead</li>
                                <li>Underground assets (unless thermal signature reaches surface)</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-cloud-rain"></i> Weather / Environment Constraints</h4>
                            <ul>
                                <li>Rain, heavy fog, wet surfaces distort readings</li>
                                <li>High wind can cool surfaces and mask problems</li>
                                <li>Direct sun can create false hot spots</li>
                                <li>Rapidly changing operating conditions confuse interpretation</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-microscope"></i> Emissivity & Reflections</h4>
                            <ul>
                                <li>Shiny metals require emissivity management (tape/paint targets)</li>
                                <li>Glass and some plastics can mislead due to transmission/reflection</li>
                                <li>Small targets may be below camera spatial resolution</li>
                                <li>Incorrect emissivity leads to incorrect temperature readings</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-clock"></i> Timing Dependencies</h4>
                            <ul>
                                <li>Electrical: requires adequate load to reveal faults</li>
                                <li>Buildings: need indoor/outdoor differential</li>
                                <li>Process: best at steady state, not during transients</li>
                                <li>Seasonal effects can influence building results</li>
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
                    <p class="lead">We use professional radiometric thermal cameras and analysis software suited to electrical, mechanical and building work. Equipment is maintained and calibrated under our quality system to support repeatable measurements and clear reporting.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>High‑Resolution Radiometric Cameras</h4>
                                <p>For quantitative inspections requiring high spatial detail (switchgear, busbars, transformers, refractory hot spots). Multiple lenses available to match working distance and target size.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Electrical Inspection Configurations</h4>
                                <p>Inspection workflows aligned to NFPA 70E practices (site dependent): load recording, phase comparison, ΔT measurement, and evidence-based ranking with clear corrective recommendations.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Building & Energy Audit Tools</h4>
                                <p>Wide-angle thermal imaging for roof/wall envelope surveys, HVAC distribution checks, and moisture anomaly screening (with confirmation methods as required).</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-helicopter"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Specialized Systems (Project Based)</h4>
                                <p>Drone/aerial thermal imaging, high-temperature furnace inspections, and custom setups for specific industry requirements. Scope and deliverables defined case-by-case.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Calibration & Certification</h4>
                        <p><strong>Calibration:</strong> Camera performance verification is maintained under our QA system. <strong>Personnel:</strong> Thermographers qualified per company program (ASNT SNT‑TC‑1A) and application training (electrical safety, building diagnostics, mechanical PdM). <strong>Reporting:</strong> Results aligned to applicable client criteria and commonly used standards (ISO/ASTM/NFPA/NETA as applicable).</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/thermography-equipment.jpg" alt="Thermography equipment">
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
                            <span>Radiometric imaging</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>High sensitivity (NETD)</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Quantitative ΔT analysis</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Repeatable trending</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Application-specific reporting</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>QA documentation</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Certifications & Standards Compliance</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                            <img src="/www/assets/images/certifications/itc.png" alt="ITC">
                            <img src="/www/assets/images/certifications/nist.png" alt="NIST / Calibration">
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
                <p>A structured field-to-report workflow focused on actionable results</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Planning & Scope Definition</h3>
                        <p>Confirm assets, access, safety requirements, and operating conditions. For electrical surveys, confirm expected load levels and inspection window. For buildings, plan for temperature differential and weather conditions.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection plan + route list
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Site Setup & Parameter Control</h3>
                        <p>Set emissivity/reflected temperature assumptions, capture ambient conditions, and record relevant operating parameters (load current, process temperature, equipment speed). Establish baseline reference where available.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Setup record + environmental log
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Systematic Thermal Survey</h3>
                        <p>Capture radiometric thermal images and corresponding visual images. Maintain asset traceability (panel ID, feeder, tag number) and record load/operating conditions at the time of capture.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Raw radiometric images + field log
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Analysis & Measurement</h3>
                        <p>Quantitative analysis including ΔT, phase comparison (electrical), pattern evaluation (mechanical/process), and ranking based on severity and consequence. Identify items requiring immediate action and those for monitoring.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Analysed images with measurement points
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Classification & Recommendations</h3>
                        <p>Classify findings using agreed criteria and provide corrective recommendations (tighten/clean/balance/replace/verify). Recommend confirmatory tests where thermography is screening-only (e.g., resistance testing, vibration, UT).</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Priority list & action plan
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Final Report & Data Archive</h3>
                        <p>Deliver a structured report with images, measurements, asset IDs, operating conditions, classification and recommended actions. Provide digital archive for trending and audit trail.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Final report + radiometric dataset
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
                <p>Qualified thermographers, disciplined reporting, and safety-first execution</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Qualified Thermographers</h3>
                    <p>Thermography performed by trained personnel under our certification program (SNT‑TC‑1A aligned) with application-based competencies for electrical, mechanical and building work.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Professional Radiometric Equipment</h3>
                    <p>Radiometric thermal cameras and analysis tools suitable for quantitative temperature measurement, documentation, and repeat inspections for trending.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety‑First Execution</h3>
                    <p>Electrical inspections follow site safety requirements and recognised practices (NFPA 70E based), including arc-flash controls and safe work boundaries.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Actionable Reporting</h3>
                    <p>Clear severity ranking, evidence images, and practical recommendations that help maintenance teams plan work and verify closure.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Multi‑Discipline Support</h3>
                    <p>When thermography indicates an issue, we can support follow-up NDT/condition monitoring (UT, visual, RVI, electrical testing, etc.) to confirm and close findings.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Trusted Industrial Partner</h3>
                    <p>Experience across power, manufacturing, oil &amp; gas, petrochemical, utilities and commercial facilities—with consistent documentation and project coordination.</p>
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
                        <p>Professional radiometric cameras typically provide accuracy of ±1–2°C or ±2% of reading when used with correct emissivity/reflection settings and appropriate field practice. Sensitivity (NETD) may be much finer (&lt;0.05°C), but accuracy depends on the measurement setup and surface properties.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can thermal imaging detect problems inside electrical panels?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Thermography can detect overheating where heat is visible at the surface (components, terminations, busbars). For fully enclosed components, results may be limited. Where permitted and safe, opening covers (under NFPA 70E controls) improves detection confidence.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What conditions are best for outdoor thermal inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Dry conditions, stable load (electrical), low wind, and managed solar loading. Rain/wet surfaces and strong wind can mask anomalies. Building surveys perform best with indoor/outdoor temperature differential (typically ≥10°C).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should thermography surveys be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Frequency depends on asset criticality, environment and history. Many facilities do annual electrical thermography as part of NFPA 70B programs, with more frequent checks for critical loads (data centers, hospitals) and high-risk equipment.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is emissivity and why is it important?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Emissivity describes how efficiently a surface emits IR energy. Shiny metals may have low emissivity and high reflections, causing incorrect temperatures if not handled properly. We document emissivity assumptions and use best practice methods (targets/tape/angle control) where needed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can thermography replace other NDT methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Thermography is an excellent screening and condition monitoring tool, but it does not replace methods intended for thickness measurement or internal defect detection. It is most effective when paired with confirmatory tests (electrical testing, vibration, UT, RVI) for root cause and sizing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What safety precautions are required for electrical thermal inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Electrical thermography must follow site safety rules and recognised practices (NFPA 70E), including arc-flash assessment, PPE, approach boundaries, and qualified personnel requirements. We coordinate with your electrical safety team before inspection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What affects thermography pricing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Pricing depends on asset count, access conditions, voltage level/safety requirements, reporting depth, and whether you need trending comparison with historical data. Share your equipment list and location, and we will propose a clear scope-based quotation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>See Abnormal Heating Before It Becomes a Failure</h2>
                <p>Schedule a thermography survey for your electrical, mechanical, or building systems and receive a prioritised, actionable report.</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Thermal Survey Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Radiometric Data & Reports</span>
                    <span><i class="fas fa-check"></i> Qualified Thermographers</span>
                    <span><i class="fas fa-check"></i> Priority‑Based Recommendations</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Condition Monitoring Services</h2>
                <p>Combine methods to confirm findings and close maintenance actions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Inspection</h3>
                    <p>Visual verification and documentation for accessible components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/ultrasonic-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-sound"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Thickness measurement and defect evaluation where required</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/electrical-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Electrical Testing</h3>
                    <p>Contact resistance and insulation testing to confirm root cause</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/vibration-analysis.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Vibration Analysis</h3>
                    <p>Rotating equipment diagnostics and condition trending</p>
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