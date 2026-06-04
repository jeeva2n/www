<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Eddy Current Tube Testing (ECT) Services | Heat Exchanger & Condenser Tube Inspection | Alpha Sonix NDT Solutions";
$meta_description = "Professional Eddy Current Tube Testing (ECT) for heat exchangers, condensers, boilers, and air-cooled heat exchangers. Multi-frequency bobbin, rotating probe (RPC) and array techniques to detect pitting, cracking, erosion, fretting and wall loss—without tube removal. ASME Section V Article 8 aligned procedures and digital reporting.";
$meta_keywords = "eddy current testing, ECT, eddy current tube testing, heat exchanger tube inspection, condenser tube testing, boiler tube inspection, ACHE tube testing, bobbin probe, rotating pancake coil, RPC, array eddy current, ASME Section V Article 8";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/eddy-current-tube.php";
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
    <meta property="og:image" content="/www/assets/images/services/ect-tube-testing-og.jpg">

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
            "serviceType": "Eddy Current Tube Testing (ECT)",
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
            "description": "Eddy Current Tube Testing (ECT) for tube bundles in heat exchangers, condensers, boilers and air-cooled heat exchangers. Multi-frequency techniques detect corrosion, cracking, erosion, fretting and wall loss without tube removal, with digital records and reporting aligned to applicable standards.",
            "serviceOutput": "Tube-by-tube inspection results, findings register, plugging/repair recommendations, and digital data package"
        }
    </script>
</head>

<body>

<?php include $base . '/includes/top-bar.php'; ?>
<?php include $base . '/includes/header.php'; ?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/ect-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Advanced NDT Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>ECT</span>
            </div>
            <h1 class="page-title">Eddy Current Tube Testing (ECT)</h1>
            <p class="page-subtitle">High-productivity tube-by-tube inspection for heat transfer equipment—detect corrosion, cracking, erosion, fretting and wall loss with complete digital records (no tube pulling required)</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> ASME Section V (Article 8) Aligned</span>
                <span class="badge"><i class="fas fa-percentage"></i> Tube-by-Tube Coverage</span>
                <span class="badge"><i class="fas fa-file-alt"></i> Digital Data & Reporting</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-search-plus"></i></div>
                <h3>Multi-Mechanism Detection</h3>
                <p>Detect pitting, wall loss, cracking indications, fretting at supports, denting, and erosion-corrosion patterns using appropriate probe and frequency selection.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-tachometer-alt"></i></div>
                <h3>High Inspection Productivity</h3>
                <p>Bobbin probe ECT supports fast screening; rotating probes and arrays are applied where higher resolution or confirmation is required.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Trend-Ready Records</h3>
                <p>Recorded data enables comparison across outages to track degradation rate, prioritize plugging, and plan retube scope with better confidence.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-cogs"></i></div>
                <h3>No Tube Removal</h3>
                <p>Inspect tubes in-situ from tubesheet access—avoid tube pulling programs except where destructive confirmation is specifically required.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ECT ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">ELECTROMAGNETIC NDT TECHNOLOGY</span>
                <h2>What is Eddy Current Tube Testing (ECT)?</h2>

                <p class="lead">Eddy Current Tube Testing (ECT) is an electromagnetic inspection method used to evaluate tubing by inducing eddy currents in the tube wall and measuring impedance changes caused by defects, wall loss, deposits, and geometric features.</p>

                <p>ECT probes contain one or more coils energized with alternating current. As the probe travels through the tube, variations in conductivity, wall thickness, cracking, pitting, and support interactions modify the eddy current flow and change the coil’s impedance response. These responses are displayed as strip charts and impedance plane signals for interpretation by qualified analysts.</p>

                <p>Modern systems commonly use <strong>multi-frequency acquisition</strong> to optimize detection across different depths and defect types. Bobbin probes are typically used for fast screening, and rotating pancake coil (RPC) or array probes are used for detailed crack characterization and confirmation where required.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Non-Contact Electromagnetic Method</strong>
                            <p>No couplant is required. Inspection is performed from within the tube, supporting consistent, repeatable data acquisition.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Multi-Frequency Capability</strong>
                            <p>Multiple frequencies can be used to balance sensitivity to ID/OD conditions and improve discrimination between deposits, geometry and wall loss.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Tube-by-Tube Digital Records</strong>
                            <p>All inspected tubes are recorded with traceable data, supporting audits, re-analysis, and trending across outages.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Right Technique for the Material</strong>
                            <p>ECT is excellent for non-ferrous and many stainless tubes. Ferromagnetic tubes may require saturation techniques or RFECT/RFT depending on the application.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Key Advantage:</strong>
                        <p>ECT supports condition-based decisions (plug / monitor / clean / retube) by identifying degraded tubes and ranking severity—often reducing unplanned tube leaks and helping optimize turnaround scope.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Schedule ECT Inspection</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/services/ect-probe-operation.jpg" alt="ECT Probe in Heat Exchanger Tube">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>Multi-frequency bobbin probe traversing heat exchanger tube with encoded data acquisition</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">Multi</span>
                        <span class="stat-label">Frequency Channels</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Tube-by-Tube Coverage</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">Digital</span>
                        <span class="stat-label">Recorded Data</span>
                    </div>
                </div>

                <div class="principle-diagram">
                    <h4><i class="fas fa-project-diagram"></i> ECT Detection Principle</h4>
                    <ul class="principle-list">
                        <li><strong>1.</strong> AC coil generates magnetic field</li>
                        <li><strong>2.</strong> Eddy currents induced in tube wall</li>
                        <li><strong>3.</strong> Defect/deposit alters current flow</li>
                        <li><strong>4.</strong> Impedance change measured by coil</li>
                        <li><strong>5.</strong> Signals interpreted for type/severity</li>
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
            <span class="section-label">WHY CHOOSE ECT</span>
            <h2>Key Advantages of Eddy Current Tube Testing</h2>
            <p>High sensitivity, strong productivity, and documented results for tube integrity management</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-eye"></i></div>
                <h3>Sensitive to Relevant Tube Degradation</h3>
                <p>Effective for detecting pitting, thinning, fretting wear, denting, and crack-like indications (probe dependent). Technique selection is matched to the damage mechanisms expected.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-crosshairs"></i></div>
                <h3>ID/OD Discrimination (Technique Dependent)</h3>
                <p>Phase analysis and higher-resolution probes (RPC/array) improve confidence in whether conditions are ID or OD driven—supporting better root cause and mitigation planning.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>Full Tube Length Screening</h3>
                <p>Continuous scanning provides coverage along the tube length, supporting identification of inlet attack, baffle/support wear zones, and end-region degradation patterns.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-bolt"></i></div>
                <h3>Fast Screening + Targeted Detail</h3>
                <p>Bobbin screening quickly identifies suspect tubes. Follow-up with RPC/array/IRIS can then be focused only where needed—reducing total inspection time while improving decision quality.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-cog"></i></div>
                <h3>Non-Destructive, In-Situ Inspection</h3>
                <p>ECT does not require tube extraction and avoids destructive sampling unless specifically requested for confirmation or metallurgical evaluation.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-chart-line"></i></div>
                <h3>Trending & Remaining Life Planning</h3>
                <p>Recorded data enables comparisons across outages to estimate degradation rate, refine plugging plans, and support RBI programs where tube integrity is a key risk driver.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ECT PROBE TYPES ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">PROBE TECHNOLOGY</span>
            <h2>ECT Probe Types & Selection Guide</h2>
            <p>Select the probe based on damage mechanism, resolution needs, tube geometry, and material</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Probe Type</th>
                        <th><i class="fas fa-circle"></i> Bobbin Coil</th>
                        <th><i class="fas fa-sync-alt"></i> Rotating Pancake (RPC)</th>
                        <th><i class="fas fa-grip-horizontal"></i> Array Probe</th>
                        <th><i class="fas fa-broadcast-tower"></i> RFECT / RFT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Primary Role</strong></td>
                        <td>High-speed screening</td>
                        <td>Detailed characterization (cracks)</td>
                        <td>High-resolution coverage</td>
                        <td>Ferromagnetic tube screening</td>
                    </tr>
                    <tr>
                        <td><strong>Speed</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> High</td>
                        <td class="poor">Lower</td>
                        <td class="good">Medium</td>
                        <td class="good">Medium</td>
                    </tr>
                    <tr>
                        <td><strong>Axial Crack Sensitivity</strong></td>
                        <td class="poor">Limited</td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                        <td class="average">Application dependent</td>
                    </tr>
                    <tr>
                        <td><strong>ID/OD Discrimination</strong></td>
                        <td class="average">Technique dependent</td>
                        <td class="excellent"><i class="fas fa-star"></i> Strong</td>
                        <td class="excellent"><i class="fas fa-star"></i> Strong</td>
                        <td class="excellent">Phase-based (RFECT)</td>
                    </tr>
                    <tr>
                        <td><strong>Best Fit</strong></td>
                        <td>General corrosion / screening</td>
                        <td>Crack confirmation and sizing support</td>
                        <td>Higher detail with good coverage</td>
                        <td>Carbon steel / low-alloy tubes</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Best Practice:</strong> Bobbin probes for fast 100% screening, followed by RPC/array for flagged tubes or crack-susceptible regions. For ferromagnetic tubes, evaluate saturation ECT or RFECT based on tube material, deposits and support structures.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ECT APPLICATIONS</span>
            <h2>Equipment Types & Industries We Serve</h2>
            <p>Tube inspection for refining, petrochemical, power, utilities, and industrial process plants</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="heatex">Heat Exchangers</button>
                <button class="tab-btn" data-tab="condenser">Condensers</button>
                <button class="tab-btn" data-tab="boiler">Boilers / HRSG</button>
                <button class="tab-btn" data-tab="ache">Air-Cooled HX</button>
            </div>

            <div class="tabs-content">
                <!-- Heat Exchangers Tab -->
                <div class="tab-panel active" id="heatex">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/ect-heat-exchanger.jpg" alt="Heat Exchanger ECT Inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Shell & Tube Heat Exchanger Tube Testing</h3>
                            <p>ECT is widely used for tube bundle integrity programs to identify wall loss, deposits and damage patterns—supporting plugging decisions and retube planning.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Process coolers and trim coolers</li>
                                <li><i class="fas fa-check"></i> Preheat trains and product exchangers</li>
                                <li><i class="fas fa-check"></i> Fouling and under-deposit corrosion scenarios</li>
                                <li><i class="fas fa-check"></i> Baffle/support wear and fretting zones</li>
                                <li><i class="fas fa-check"></i> Stainless, copper alloy, titanium and selected ferromagnetic tubes (technique dependent)</li>
                            </ul>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec V Art 8</span>
                                <span class="standard-tag">TEMA</span>
                                <span class="standard-tag">API 510</span>
                                <span class="standard-tag">Client Specs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Condensers Tab -->
                <div class="tab-panel" id="condenser">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/ect-condenser.jpg" alt="Condenser ECT Inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Steam Surface Condenser Tube Inspection</h3>
                            <p>ECT supports condenser reliability by identifying degraded tubes before leaks cause cooling water ingress and forced outages.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Power plant condensers and industrial condensers</li>
                                <li><i class="fas fa-check"></i> Seawater/brackish water service tube bundles</li>
                                <li><i class="fas fa-check"></i> Erosion-corrosion, pitting and MIC screening</li>
                                <li><i class="fas fa-check"></i> Support-related fretting and wear zones</li>
                            </ul>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">HEI</span>
                                <span class="standard-tag">ASME PTC (as applicable)</span>
                                <span class="standard-tag">ASME Sec V</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boilers Tab -->
                <div class="tab-panel" id="boiler">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/ect-boiler.jpg" alt="Boiler Tube ECT Inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Boiler / HRSG Tube Programs (Technique Dependent)</h3>
                            <p>For selected tubing and access conditions, eddy current methods (including RFECT) can support screening of wall loss and damage mechanisms in tube bundles.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Economizer and selected boiler tube bundles (access dependent)</li>
                                <li><i class="fas fa-check"></i> HRSG tube screening programs (application dependent)</li>
                                <li><i class="fas fa-check"></i> Ferromagnetic tubes: RFECT/RFT options when appropriate</li>
                                <li><i class="fas fa-check"></i> Focused follow-up with UT/IRIS where required</li>
                            </ul>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec V</span>
                                <span class="standard-tag">ASTM (as applicable)</span>
                                <span class="standard-tag">Client Specs</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Air-Cooled Heat Exchangers Tab -->
                <div class="tab-panel" id="ache">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/ect-ache.jpg" alt="Air-Cooled Heat Exchanger ECT">
                        </div>
                        <div class="tab-text">
                            <h3>Air-Cooled Heat Exchanger (ACHE) Testing</h3>
                            <p>ECT supports detection of corrosion, erosion and fatigue-related issues in ACHE tube circuits where internal access is available and inspection objectives require tube-level assessment.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Tube-to-header regions (access dependent)</li>
                                <li><i class="fas fa-check"></i> Fatigue and vibration-susceptible areas (probe dependent)</li>
                                <li><i class="fas fa-check"></i> Corrosion and wall loss screening</li>
                                <li><i class="fas fa-check"></i> Targeted follow-up recommendations where required</li>
                            </ul>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 661</span>
                                <span class="standard-tag">ASME Sec V</span>
                                <span class="standard-tag">TEMA</span>
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
            <h2>Our Eddy Current Testing Capabilities</h2>
            <p>Probe selection, calibration and reporting aligned to your material, geometry and acceptance criteria</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-ruler-horizontal"></i>
                    <h3>Tube Range (Typical)</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">OD Range:</span> Wide range supported (probe dependent)</li>
                    <li><span class="cap-label">Wall Thickness:</span> Application dependent</li>
                    <li><span class="cap-label">Tube Length:</span> Long lengths supported with controlled pull systems</li>
                    <li><span class="cap-label">Tube Type:</span> Straight and selected U-tubes (feasibility dependent)</li>
                    <li><span class="cap-label">Access:</span> From tubesheet/channel head/header boxes</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-flask"></i>
                    <h3>Material Compatibility</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Best Fit:</span> Non-ferrous and austenitic stainless tubes</li>
                    <li><span class="cap-label">Ferromagnetic:</span> Saturation ECT or RFECT/RFT options (application dependent)</li>
                    <li><span class="cap-label">PMI Support:</span> Material confirmation (optional)</li>
                    <li><span class="cap-label">Limitations:</span> Technique selection is based on conductivity/permeability and required detection</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-search"></i>
                    <h3>Detectable Conditions</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Pitting / Wall Loss:</span> Detectability depends on morphology and calibration</li>
                    <li><span class="cap-label">Crack-Like Indications:</span> Best with RPC/array probes</li>
                    <li><span class="cap-label">Fretting / Wear:</span> Support plate/baffle zones</li>
                    <li><span class="cap-label">Deposits:</span> May be detectable/characterizable (technique dependent)</li>
                    <li><span class="cap-label">Sizing:</span> Screening-level; confirm with IRIS/UT where required</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-cogs"></i>
                    <h3>Equipment & Probes</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Instruments:</span> Multi-frequency ECT platforms (model dependent)</li>
                    <li><span class="cap-label">Probes:</span> Bobbin, RPC, +Point, array probes (as applicable)</li>
                    <li><span class="cap-label">Encoding:</span> Position tracking for location reporting</li>
                    <li><span class="cap-label">Drive Systems:</span> Manual/pneumatic/electric pull systems</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-chart-area"></i>
                    <h3>Data Analysis & Reporting</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Analysis:</span> Impedance plane + strip charts + mapping where applicable</li>
                    <li><span class="cap-label">Deliverables:</span> Tube list, defect types, locations, severity ranking</li>
                    <li><span class="cap-label">Recommendations:</span> Plug/monitor/verify (procedure and criteria dependent)</li>
                    <li><span class="cap-label">Trending:</span> Comparison vs previous outage data (if provided)</li>
                    <li><span class="cap-label">Retention:</span> Digital storage per project requirements</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-calendar-check"></i>
                    <h3>Service Delivery</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Mobilization:</span> As per schedule and outage planning</li>
                    <li><span class="cap-label">Preliminary Output:</span> Priority tube list for plugging/repairs (as agreed)</li>
                    <li><span class="cap-label">Final Report:</span> Comprehensive report package per contract timeline</li>
                    <li><span class="cap-label">Emergency Support:</span> Breakdown response (availability dependent)</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== INSPECTION PROCEDURE ===================== -->
<section class="procedure-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">INSPECTION WORKFLOW</span>
            <h2>ECT Inspection Procedure</h2>
            <p>Procedure-driven execution aligned to ASME Section V Article 8 and project specifications</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Scope Review & Procedure Selection</h3>
                    <p>Confirm tube material, size, length, geometry and expected damage mechanisms. Select probe type and frequency mix. Define acceptance criteria, reporting format and follow-up requirements (RPC/IRIS/UT).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Inspection Plan + Written Procedure (ASME Sec V Art 8 aligned)
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Access & Preparation</h3>
                    <p>Open channel heads/header boxes as required. Ensure tube inlets are accessible and free from debris that can obstruct probe travel. Confirm safe work conditions and permits per site requirements.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Site Readiness / Access Checklist
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>Calibration & Verification</h3>
                    <p>Perform calibration/verification using reference standards (EDM notches/holes/thinning zones as applicable). Verify signal response, noise levels, and encoding accuracy. Document calibration settings for traceability.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Calibration Records & Verification Screens
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>Tube Scanning</h3>
                    <p>Scan tubes using controlled pull-through and record data continuously. Mark tubes with significant indications for follow-up with higher-resolution probes where required.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Recorded Tube Data Files
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>Analysis, Classification & Priority List</h3>
                    <p>Analyze tube signals, classify indication type and severity, and generate a priority list for plugging/repair/verification. Provide preliminary results as agreed to support shutdown decisions.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Tube Findings Register + Priority List
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>Final Reporting</h3>
                    <p>Issue final report package including scope, procedure, calibration records, tube listing, findings summary, plots/screens as required, and recommendations for mitigation and next inspection interval planning.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Final Inspection Report + Digital Data Package
                    </div>
                </div>
            </div>
        </div>

        <div class="certification-showcase">
            <h3>Our Certifications & Accreditations</h3>
            <div class="cert-grid">
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                    <span>ASNT Level II/III Support</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                    <span>ISO 9001:2015</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/epri.png" alt="EPRI">
                    <span>EPRI Guidelines (As Applicable)</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/zetec.png" alt="Zetec">
                    <span>Manufacturer Training</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/tema.png" alt="TEMA">
                    <span>TEMA / Client Specs Support</span>
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
            <h2>Your Eddy Current Testing Partner</h2>
            <p>Practical exchanger experience, disciplined calibration, and reporting written for maintenance decisions</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-laptop"></i></div>
                <h3>Modern Multi-Frequency Systems</h3>
                <p>Multi-frequency instrumentation and dedicated tube inspection software to support screening, detailed characterization, and traceable deliverables.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-user-graduate"></i></div>
                <h3>Qualified ET Personnel</h3>
                <p>Certified Level II/III resources supporting procedure selection, calibration control, interpretation, and client technical discussions.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-th"></i></div>
                <h3>Probe Selection by Mechanism</h3>
                <p>Bobbin for productivity, RPC/array for cracks and confirmation, and RFECT/RFT options for ferromagnetic applications when suitable.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Outage-Focused Execution</h3>
                <p>Efficient planning and clear daily outputs to support critical plugging and repair decisions within shutdown windows.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Trending Support</h3>
                <p>Structured reporting and digital archives help compare results across outages and identify acceleration in specific zones.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-hands-helping"></i></div>
                <h3>Engineering & Follow-Up Options</h3>
                <p>When sizing confidence is critical, we support targeted follow-up using IRIS/UT and visual verification where required.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>Eddy Current Testing Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How does eddy current testing detect defects in tubes?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>ECT induces eddy currents in the tube wall using an AC-driven coil. Defects and wall-loss conditions change the electrical response (impedance) of the coil, which is displayed and interpreted using strip charts and impedance plane analysis.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can ECT detect both ID and OD defects?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes. ID/OD discrimination depends on technique and probe selection. Bobbin signals can be interpreted using phase relationships, while rotating probes and arrays improve confidence for crack-like indications and surface origin.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Does the exchanger need to be opened for ECT?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Tube access is required. Typically channel head/water box covers (or header boxes for ACHE) are opened to access tube inlets. Tubes are inspected in place; tube removal is not required.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is the difference between bobbin probe and rotating probe?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Bobbin probes are high-speed screening tools. Rotating probes (RPC) provide higher resolution and better crack detection/characterization but are slower, so they are typically used for follow-up on flagged tubes or high-risk regions.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can ECT work on carbon steel tubes?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Ferromagnetic tubes may require saturation ECT or RFECT/RFT techniques depending on tube material, deposits, and support structures. We confirm the best method during feasibility review.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How accurate is ECT for remaining wall thickness?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>ECT provides calibrated severity estimates and ranking. Where precise remaining thickness is required for engineering calculations, IRIS or UT verification is recommended at selected tubes/locations.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How often should tubes be inspected with ECT?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Intervals depend on corrosion rate, service severity, and RBI strategy. Many operators perform baseline inspection and repeat at shutdown cycles to trend degradation and optimize plugging/retube plans.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Reduce Tube Leak Risk—With Tube-by-Tube Evidence</h2>
            <p>Request an ECT program with the right probe strategy (bobbin + targeted RPC/array), clear deliverables, and actionable recommendations</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request ECT Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Feasibility & Probe Selection</span>
                <span><i class="fas fa-check"></i> Priority Plugging List (as agreed)</span>
                <span><i class="fas fa-check"></i> Digital Data Package</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Complementary Tube & Heat Exchanger Services</h2>
            <p>From screening to sizing and confirmation—choose the right technique for the decision you must make</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/advanced-ndt-services/iris-tube-testing.php" class="related-card">
                <div class="related-icon"><i class="fas fa-water"></i></div>
                <h3>IRIS Testing</h3>
                <p>Internal rotary inspection for accurate wall thickness mapping and sizing</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                <div class="related-icon"><i class="fas fa-ruler-combined"></i></div>
                <h3>UT Thickness</h3>
                <p>Thickness gauging and verification for shells, tubesheets, and selected tube locations</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                <div class="related-icon"><i class="fas fa-video"></i></div>
                <h3>Remote Visual (RVI)</h3>
                <p>Videoscope inspection for tube ID condition, deposits, and visual confirmation</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/conventional-ndt/pt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-tint"></i></div>
                <h3>Liquid Penetrant (PT)</h3>
                <p>Surface crack detection for tube-to-tubesheet joints and weld areas (where applicable)</p>
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