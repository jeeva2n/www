<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Remote Field Eddy Current Testing (RFECT) Services | Ferromagnetic Tube Inspection | Alpha Sonix NDT Solutions";
$meta_description = "Remote Field Eddy Current Testing (RFECT) for ferromagnetic heat exchanger, boiler, and condenser tubes. Effective inspection under support plates and through many deposit conditions, with phase-based ID/OD indication discrimination and detailed digital reporting (ASTM E2096 aligned).";
$meta_keywords = "RFECT, remote field eddy current testing, remote field testing, eddy current tube inspection, ferromagnetic tube inspection, carbon steel tube inspection, boiler tube inspection, condenser tube inspection, support plate inspection, ASTM E2096";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/remote-field-eddy-current.php";
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
    <meta property="og:image" content="/www/assets/images/services/rfect-og.jpg">
    
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
        "serviceType": "Remote Field Eddy Current Testing (RFECT)",
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
        "description": "Remote Field Eddy Current Testing (RFECT) services for ferromagnetic tubes in heat exchangers, boilers, and condensers, providing effective inspection under support plates and robust detection of wall-loss mechanisms with phase-based ID/OD discrimination and digital reporting."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/rfect-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Remote Field Eddy Current</span>
                </div>
                <h1 class="page-title">Remote Field Eddy Current Testing (RFECT)</h1>
                <p class="page-subtitle">Specialized tube inspection for ferromagnetic materials—effective under support plates and tolerant of many deposit conditions, with phase-based ID/OD indication discrimination</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-th-large"></i> Under Support Plates</span>
                    <span class="badge"><i class="fas fa-layer-group"></i> Deposit-Tolerant (Application Dependent)</span>
                    <span class="badge"><i class="fas fa-crosshairs"></i> ID vs OD Discrimination</span>
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
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Remote Field Effect</h3>
                    <p>Low-frequency electromagnetic fields interact through the full tube wall, enabling evaluation of ferromagnetic tubing beyond conventional surface-limited ECT behavior.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <h3>Support Plate Zones</h3>
                    <p>Improved inspection capability in tube support plate (TSP) regions where conventional ECT response can mask relevant degradation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <h3>ID / OD Discrimination</h3>
                    <p>Phase analysis supports determination of whether indications originate from the inner (ID) or outer (OD) tube surface—useful for root cause and mitigation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Works Through Many Deposits</h3>
                    <p>Often effective through magnetite/scale and non-conductive deposits, reducing cleaning scope and helping shorten outage work (deposit type dependent).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS RFECT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ELECTROMAGNETIC INSPECTION</span>
                    <h2>What is Remote Field Eddy Current Testing?</h2>

                    <p class="lead">Remote Field Eddy Current Testing (RFECT) is a specialized electromagnetic technique used to inspect <strong>ferromagnetic</strong> heat exchanger, boiler, and condenser tubes. RFECT is valued for its ability to evaluate wall-loss mechanisms with strong sensitivity on both tube surfaces, including regions influenced by tube support plates.</p>
                    
                    <p>Conventional eddy current testing (ECT) operates at higher frequencies and is extremely effective for non-ferrous materials (copper alloys, titanium, many stainless steels). However, in ferromagnetic tubes (carbon steels and many low-alloy steels), conventional ECT performance can be limited by permeability effects and reduced through-wall response. RFECT uses very low frequencies to achieve effective through-wall interaction and stable interpretation when applied within qualified limits.</p>

                    <p>RFECT is commonly selected where you need: (1) reliable screening and mapping of wall loss in ferromagnetic tubes, (2) inspection information through/under support plates, (3) better tolerance to deposits compared with conventional approaches (deposit dependent), and (4) ID vs OD indication discrimination to support maintenance strategy.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Through-Wall Interaction</strong>
                                <p>Low-frequency fields interact with the full wall thickness, supporting detection of wall loss on either surface (application dependent).</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Balanced ID/OD Response</strong>
                                <p>Good sensitivity to both internal and external metal loss compared with surface-biased techniques, improving confidence in screening outcomes.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Phase-Based Discrimination</strong>
                                <p>Phase analysis supports ID vs OD determination, helping identify the likely damage mechanism and corrective action focus.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Ferromagnetic Tube Focus</strong>
                                <p>Applied to carbon steel and low-alloy steels (e.g., common boiler and condenser materials) where conventional ECT may be less reliable.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Practical Interpretation Note:</strong>
                            <p>RFECT is excellent for screening and condition ranking. Where exact remaining thickness is required for engineering calculations, we recommend follow-up with IRIS or UT at priority tubes/locations, based on project acceptance criteria.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Tube Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/rfect-probe.jpg" alt="RFECT Probe">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>RFECT probe with exciter and receiver coils for ferromagnetic tube inspection</span>
                        </div>
                    </div>

                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">50–400 Hz</span>
                            <span class="stat-label">Typical Frequency</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2–3D</span>
                            <span class="stat-label">Coil Spacing (Typical)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">ID/OD</span>
                            <span class="stat-label">Phase Discrimination</span>
                        </div>
                    </div>
                    
                    <div class="principle-diagram">
                        <h4><i class="fas fa-project-diagram"></i> Remote Field Principles</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Exciter coil generates low-frequency field</li>
                            <li><strong>2.</strong> Field couples through tube wall</li>
                            <li><strong>3.</strong> Field travels outside the tube</li>
                            <li><strong>4.</strong> Field re-enters at the receiver</li>
                            <li><strong>5.</strong> Receiver measures amplitude & phase changes</li>
                            <li><strong>6.</strong> Metal loss modifies the signal response</li>
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
                <span class="section-label">WHY CHOOSE RFECT</span>
                <h2>Key Advantages of Remote Field Testing</h2>
                <p>Strong fit for ferromagnetic tube inspection and support-plate influenced regions</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <h3>Support Plate Zone Capability</h3>
                    <p>RFECT provides improved assessment under tube support plates compared with conventional ECT, helping reduce blind areas in regions where crevice corrosion and under-deposit attack are common.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-equals"></i>
                    </div>
                    <h3>Balanced ID & OD Sensitivity</h3>
                    <p>More balanced response to internal and external wall loss compared with surface-skewed methods—useful when corrosion origin is uncertain.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Deposit Tolerance (Many Cases)</h3>
                    <p>Often effective through magnetite and non-conductive deposits, helping reduce cleaning scope and supporting faster outage execution (deposit type/condition dependent).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Designed for Ferromagnetic Tubes</h3>
                    <p>Particularly suited for carbon steel and low-alloy steels where conventional high-frequency ECT can be limited by permeability effects and reduced through-wall response.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-location-arrow"></i>
                    </div>
                    <h3>ID vs OD Identification</h3>
                    <p>Phase-based interpretation supports classification of indications as ID or OD, improving maintenance decisions and root-cause focus (chemistry/flow vs external environment/support zones).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Efficient Tube Screening</h3>
                    <p>Provides high-value screening data across tube length with digital records. For high-resolution profiling or exact remaining thickness, we recommend targeted follow-up (IRIS/UT/rotating probes) based on findings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RFECT VS CONVENTIONAL ECT COMPARISON ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNOLOGY COMPARISON</span>
                <h2>RFECT vs Conventional Eddy Current Testing</h2>
                <p>Choose the technique based on tube material, support plate influence, deposits, and required resolution</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-list-ul"></i> Parameter</th>
                            <th><i class="fas fa-broadcast-tower"></i> RFECT</th>
                            <th><i class="fas fa-wave-square"></i> Conventional ECT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Tube Material Fit</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Ferromagnetic tubes (CS / low-alloy)</td>
                            <td class="excellent"><i class="fas fa-star"></i> Non-ferrous tubes (Cu alloys, Ti, many SS)</td>
                        </tr>
                        <tr>
                            <td><strong>Frequency Range</strong></td>
                            <td>Low Hz range</td>
                            <td>kHz range</td>
                        </tr>
                        <tr>
                            <td><strong>Support Plate Influence</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Better performance in/under TSP regions</td>
                            <td class="poor">Can be limited by support plate response</td>
                        </tr>
                        <tr>
                            <td><strong>Deposit Sensitivity</strong></td>
                            <td class="good">Often tolerant (deposit dependent)</td>
                            <td class="poor">Often requires cleaning for reliable results</td>
                        </tr>
                        <tr>
                            <td><strong>ID vs OD Discrimination</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Phase-based</td>
                            <td class="average">More limited (technique dependent)</td>
                        </tr>
                        <tr>
                            <td><strong>Resolution / Small Defects</strong></td>
                            <td class="average">Good screening; follow-up may be needed</td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent for small/surface defects (when suitable)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-lightbulb"></i>
                <div>
                    <p><strong>Recommended Approach:</strong> Use the method that matches the tube material first. For mixed materials or complex damage mechanisms, a combined program (RFECT + conventional ECT + targeted IRIS/UT) often delivers the best balance of coverage, confidence, and outage efficiency.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">RFECT APPLICATIONS</span>
                <h2>Industries & Equipment We Inspect</h2>
                <p>Tube integrity screening for power, process, and critical utilities where ferromagnetic tubes are used</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="power">Power Generation</button>
                    <button class="tab-btn" data-tab="refining">Refining & Petrochemical</button>
                    <button class="tab-btn" data-tab="industrial">Industrial Process</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Applications</button>
                </div>

                <div class="tabs-content">
                    <!-- Power Generation Tab -->
                    <div class="tab-panel active" id="power">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rfect-power-plant.jpg" alt="Power Plant Condenser Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Power Plant Condensers & Steam Cycle</h3>
                                <p>RFECT is commonly selected for carbon steel and low-alloy tube bundles where support plate regions and deposit conditions make conventional methods less reliable. Results help prioritize plugging, replacement, or targeted follow-up inspection.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Surface condenser tube bundles (ferromagnetic materials)</li>
                                    <li><i class="fas fa-check"></i> Feedwater heaters and coolers</li>
                                    <li><i class="fas fa-check"></i> HRSG/boiler tube inspection programs (where suitable)</li>
                                    <li><i class="fas fa-check"></i> Support plate/crevice corrosion screening</li>
                                    <li><i class="fas fa-check"></i> Deposit-influenced inspection scenarios (magnetite/scale)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E2096</span>
                                    <span class="standard-tag">ASME Sec V (Eddy Current)</span>
                                    <span class="standard-tag">TEMA</span>
                                    <span class="standard-tag">HEI (as applicable)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Refining & Petrochemical Tab -->
                    <div class="tab-panel" id="refining">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rfect-refinery.jpg" alt="Refinery Heat Exchanger Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Refinery & Petrochemical Heat Exchangers</h3>
                                <p>RFECT supports inspection of ferromagnetic tube exchangers where deposits and operating mechanisms can create both ID and OD attack. Findings can be integrated into RBI and turnaround planning.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Process coolers and feed/effluent exchangers (CS/low-alloy)</li>
                                    <li><i class="fas fa-check"></i> Fouling and deposit-prone services</li>
                                    <li><i class="fas fa-check"></i> Support-plate influenced damage zones</li>
                                    <li><i class="fas fa-check"></i> ID vs OD corrosion mechanism studies</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 571</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">ASTM E2096</span>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <!-- Industrial Process Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rfect-industrial.jpg" alt="Industrial Process Heat Exchanger">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial Process Heat Exchangers</h3>
                                <p>RFECT is suited to ferromagnetic tube bundles where coverage and deposit tolerance reduce preparation time and help maintain uptime. For critical sizing, targeted IRIS/UT can be applied to selected tubes.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Utility coolers and process heat exchangers (ferromagnetic tubes)</li>
                                    <li><i class="fas fa-check"></i> Chilled/cooling water systems with scaling</li>
                                    <li><i class="fas fa-check"></i> Fouling-driven corrosion and erosion-corrosion screening</li>
                                    <li><i class="fas fa-check"></i> Condition monitoring programs</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">TEMA</span>
                                    <span class="standard-tag">ASTM E2096</span>
                                    <span class="standard-tag">ASME Sec V</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rfect-specialty.jpg" alt="Specialty RFECT Applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty Applications</h3>
                                <p>Where geometry, deposits, or support structures create inspection constraints, RFECT can be evaluated as part of a multi-technique tube program. Suitability is confirmed during feasibility review.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Marine/offshore coolers with deposit buildup</li>
                                    <li><i class="fas fa-check"></i> Critical utility exchangers in continuous plants</li>
                                    <li><i class="fas fa-check"></i> High-density support structures / complex support plate layouts</li>
                                    <li><i class="fas fa-check"></i> Targeted engineering investigations (ID vs OD origin)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E2096</span>
                                    <span class="standard-tag">ASME Sec V</span>
                                    <span class="standard-tag">Client Specifications</span>
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
                <h2>RFECT Inspection Capabilities</h2>
                <p>Capability depends on tube size, wall thickness, deposits, geometry, and calibration—contact us for feasibility review</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detectable Conditions (Typical)</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wall Loss:</span> General thinning and localized metal loss</li>
                        <li><span class="cap-label">Pitting:</span> Detectability depends on pit size/shape and deposit conditions</li>
                        <li><span class="cap-label">Erosion / FAC:</span> Screening and ranking capability</li>
                        <li><span class="cap-label">Support Plate Zones:</span> Crevice/under-deposit corrosion screening</li>
                        <li><span class="cap-label">Cracking:</span> Application dependent; high-resolution probes may be needed</li>
                        <li><span class="cap-label">Fretting/Wear:</span> Detectability depends on location and morphology</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-combined"></i>
                        <h3>Tube Specifications (Typical)</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Materials:</span> Carbon steel and low-alloy steels (ferromagnetic)</li>
                        <li><span class="cap-label">Tube OD:</span> Application dependent (common ranges supported)</li>
                        <li><span class="cap-label">Wall Thickness:</span> Application dependent</li>
                        <li><span class="cap-label">Tube Length:</span> Long lengths supported with proper push/pull control</li>
                        <li><span class="cap-label">Geometry:</span> Straight tubes typical; U-bends feasibility dependent</li>
                        <li><span class="cap-label">Support Plates:</span> Multiple supports manageable; verified in planning</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-chart-line"></i>
                        <h3>Reporting Outputs</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Tube Listing:</span> Tube-by-tube findings and classification</li>
                        <li><span class="cap-label">Location:</span> Distance/position references using encoded acquisition</li>
                        <li><span class="cap-label">ID/OD:</span> Phase-based classification where applicable</li>
                        <li><span class="cap-label">Severity:</span> Screening-level wall-loss ranking</li>
                        <li><span class="cap-label">Recommendations:</span> Plug/monitor/verify with IRIS/UT as required</li>
                        <li><span class="cap-label">Data:</span> Digital archive for trending and comparisons</li>
                    </ul>
                </div>
            </div>

            <div class="comparison-strategy">
                <h3><i class="fas fa-lightbulb"></i> When to Use RFECT</h3>
                <div class="strategy-note">
                    <i class="fas fa-info-circle"></i>
                    <div>
                        <p><strong>RFECT is most effective when:</strong> tubes are ferromagnetic, deposits are present, support plates influence conventional ECT, and ID vs OD discrimination supports maintenance decisions. For non-ferrous tubes, conventional multi-frequency ECT is typically the preferred method.</p>
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
                    <h2>RFECT Equipment & Data Acquisition</h2>
                    <p class="lead">We deploy modern RFECT-capable eddy current platforms, calibrated reference standards, and controlled push/pull systems to ensure stable acquisition and reliable interpretation.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Multi-Technique Eddy Current Platforms</h4>
                                <p>Systems capable of RFECT (low-frequency) and conventional multi-frequency ECT (kHz range) selection based on tube material and inspection objective. Configurations are defined in the written procedure and validated on reference standards.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-broadcast-tower"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>RFECT Probe Inventory</h4>
                                <p>Probe sizes and types selected for tube OD, wall thickness, and geometry. Special configurations can be used for challenging regions (support plates, transitions, and selected bends where feasible).</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Push/Pull & Encoding</h4>
                                <p>Probe handling systems help maintain consistent pull-through speed and provide position encoding, supporting repeatability and clear location reporting.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Reference Standards & Verification</h4>
                                <p>Calibration and verification performed using reference standards aligned to ASTM E2096 and project requirements. Field checks are performed before and during inspection as required by procedure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Calibration & Compliance</h4>
                        <p>Procedures and reporting are aligned to applicable standards and client specifications (commonly ASTM E2096 and ASME Section V for eddy current examination), with documented calibration/verification records included in the report package.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/rfect-equipment.jpg" alt="RFECT Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>RFECT Inspection Workflow</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Encoded Acquisition</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Phase-Based Interpretation</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Procedure-Based Calibration</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Digital Reporting Package</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Standards & References</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/asme-sec-v.png" alt="ASME Section V">
                            <img src="/www/assets/images/certifications/astm.png" alt="ASTM E2096">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/epri.png" alt="EPRI (as applicable)">
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
                <h2>RFECT Inspection Procedure</h2>
                <p>Disciplined planning, controlled acquisition, and report-ready outputs for maintenance decisions</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning</h3>
                        <p>Review exchanger/boiler data, tube material, dimensions, support layout, and previous inspection history. Confirm ferromagnetic suitability, select technique (RFECT / ECT / mixed), and define acceptance criteria and deliverables.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan & Written Procedure (ASTM E2096 / Project Spec)
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Setup & Calibration/Verification</h3>
                        <p>Configure equipment and probe handling, verify instrument response using reference standards, and document calibration settings. Confirm encoding and repeatability checks as required.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Calibration & Verification Records
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Tube Scanning & Data Acquisition</h3>
                        <p>Inspect tubes with controlled pull-through speed and encoded position. Acquire amplitude/phase data and mark key features (tube sheet, supports, transitions) for accurate location reporting.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Recorded Tube Data Files (Encoded)
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Analysis & Classification</h3>
                        <p>Evaluate indications, distinguish geometric responses, classify ID vs OD where applicable, and rank severity. Identify tubes requiring follow-up with higher-resolution techniques.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Tube Findings Register & Indication List
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Recommendations & Follow-Up Plan</h3>
                        <p>Provide practical recommendations such as plug/monitor/verify, and define follow-up scope (IRIS/UT/rotating probe) for tubes requiring exact remaining thickness or detailed characterization.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Action Matrix & Follow-Up Scope
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting & Data Handover</h3>
                        <p>Issue a report package including methodology, calibration records, tube listing, key plots/images, findings summary, and recommendations. Data retention and handover format aligned to client requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Final RFECT Report Package
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
                <h2>Your RFECT Inspection Partner</h2>
                <p>Practical tube inspection experience, disciplined calibration, and reporting designed for outage decisions</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified ET Personnel</h3>
                    <p>Certified inspectors with eddy current (ET) competence and RFECT-specific training, supported by Level III oversight for procedure, interpretation, and technical review.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Multi-Technique Tube Programs</h3>
                    <p>RFECT combined with conventional ECT, IRIS/UT, and RVI borescope support when required—so you can move from screening to confirmation efficiently.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Data Management & Trending</h3>
                    <p>Structured deliverables and digital archives to support comparisons across outages and better planning for plugging, retubing, or maintenance strategy.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Outage-Friendly Execution</h3>
                    <p>Efficient mobilization and execution aligned to shutdown windows, with clear daily outputs and prioritized tube lists for fast decisions.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Engineering Support</h3>
                    <p>Support for plugging criteria, remaining life discussions, and follow-up inspection selection based on service mechanism and acceptance requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Procedure-Based Quality</h3>
                    <p>Written procedures, calibration documentation, and structured reporting designed for client review and audit readiness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>RFECT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why use RFECT instead of conventional eddy current testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RFECT is typically chosen for <strong>ferromagnetic tubes</strong> and for situations where support plates and deposits limit conventional ECT reliability. Conventional ECT remains the preferred method for non-ferrous tubes and where very high resolution is required on clean tubing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can RFECT inspect copper, titanium, or austenitic stainless tubes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No. RFECT is designed for ferromagnetic tubing. For copper alloys, titanium, and austenitic stainless steels, conventional multi-frequency eddy current testing is typically the correct choice.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is RFECT for sizing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RFECT provides screening-level sizing and severity ranking based on calibrated response. Where exact remaining thickness is required for engineering decisions, targeted IRIS or UT verification is recommended for selected tubes/locations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do tubes need to be cleaned before RFECT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Often RFECT can be performed through many non-conductive deposits (e.g., magnetite/scale). However, deposit type and severity matter. We assess fouling and advise any minimum cleaning required to achieve reliable data.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does RFECT differentiate ID from OD indications?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RFECT interpretation uses amplitude and phase response. Phase shifts can be correlated to whether the metal loss is predominantly on the ID or OD surface. Final classification depends on calibration, geometry, and analyst evaluation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What standards govern RFECT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RFECT is commonly performed in alignment with <strong>ASTM E2096</strong> and applicable eddy current requirements in <strong>ASME Section V</strong>, along with client specifications and acceptance criteria.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Reliable Ferromagnetic Tube Screening Under Support Plates?</h2>
                <p>Request an RFECT plan aligned to ASTM E2096, with clear tube listings, ID/OD discrimination and follow-up recommendations where sizing is required</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Technical Consultation</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Feasibility Review</span>
                    <span><i class="fas fa-check"></i> Outage Execution Support</span>
                    <span><i class="fas fa-check"></i> Follow-Up IRIS/UT Options</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Tube Inspection Services</h2>
                <p>Complete heat exchanger integrity support—from screening to confirmation and sizing</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/conventional-ect.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Conventional ECT</h3>
                    <p>Multi-frequency eddy current for non-ferrous tubes and high-resolution inspection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/iris.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>IRIS Testing</h3>
                    <p>Internal rotary inspection for precise wall thickness mapping and sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/nfet.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-th"></i>
                    </div>
                    <h3>Near Field Array (ECT)</h3>
                    <p>Array eddy current options for rapid screening (application dependent)</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Video Borescope</h3>
                    <p>Direct visual confirmation of tube interiors, deposits, and selected features</p>
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
