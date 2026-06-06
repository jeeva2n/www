<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Magnetic Flux Leakage (MFL) Tube Testing – Ferromagnetic Tube Screening | Alpha Sonix NDT Solutions";
$meta_description = "MFL tube inspection for carbon steel and Cr‑Mo heat exchanger tubes. Rapid screening (up to 200 tubes/hour) detects pitting, corrosion, wall‑loss through deposits. ASTM E570 / API 510 compliant.";
$meta_keywords = "MFL testing, magnetic flux leakage, tube inspection, ferromagnetic tube testing, carbon steel tube inspection, Hall effect, corrosion screening, heat exchanger tube, boiler tube, rapid tube screening";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/magnetic-flux-leakage-tube.php";
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
    <meta property="og:image" content="/www/assets/images/services/mfl-og.jpg">

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
            "serviceType": "Magnetic Flux Leakage (MFL) Tube Testing",
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
            "description": "Magnetic Flux Leakage tube inspection for rapid screening of ferromagnetic tubes (carbon steel, Cr‑Mo), detecting corrosion, pitting and wall loss at high speed – ASTM E570 and API 510 compliant."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/MFLT/mflt1.png');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>MFL Tube</span>
                </div>
                <h1 class="page-title">Magnetic Flux Leakage (MFL) Tube Testing</h1>
                <p class="page-subtitle">Rapid electromagnetic screening for carbon steel and Cr‑Mo tubes – detect corrosion, pitting, and wall loss at up to 200 tubes per hour, through light deposits, with no cleaning required.</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-tachometer-alt"></i> Up to 200 tubes/hour</span>
                    <span class="badge"><i class="fas fa-magnet"></i> Ferromagnetic specialist</span>
                    <span class="badge"><i class="fas fa-layer-group"></i> Works through non‑ferromagnetic deposits</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== QUICK OVERVIEW ===================== -->
    <section class="quick-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Rapid Screening Speed</h3>
                    <p>Screen 100–200 tubes per hour – up to 50× faster than IRIS – ideal for large tube populations during short outage windows.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-magnet"></i></div>
                    <h3>Magnetic Saturation Principle</h3>
                    <p>Powerful permanent magnets saturate the tube wall; defects cause magnetic flux to leak, detected by high‑sensitivity Hall sensors.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-chart-bar"></i></div>
                    <h3>Volumetric Assessment</h3>
                    <p>Detects ID, OD, and mid‑wall metal loss – not limited to surface – providing a true picture of tube condition.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-dollar-sign"></i></div>
                    <h3>Cost‑Effective Screening</h3>
                    <p>Lowest cost per tube of any tube‑inspection method ($5–15/tube) – makes 100% population screening economically viable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS MFL ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ELECTROMAGNETIC SCREENING</span>
                    <h2>What is Magnetic Flux Leakage Tube Testing?</h2>
                    <p class="lead">
                        MFL is a fast electromagnetic technique for screening ferromagnetic tubes (carbon steel, Cr‑Mo, ferritic stainless). It uses permanent magnets to magnetically saturate the tube wall; any metal loss or crack creates a local magnetic flux leakage that is detected by Hall effect sensors. The method gives a relative indication of wall‑loss severity and location along the tube.
                    </p>

                    <p>
                        Unlike eddy current (which works only on non‑ferrous or requires saturation) or IRIS (which is slow but absolute), MFL fills the speed gap for large carbon steel tube bundles. It is routinely used as the first pass in a tiered inspection strategy: MFL screens 100% of tubes rapidly, then flagged tubes (typically 10–20%) are confirmed with IRIS or RFECT for precise sizing.
                    </p>

                    <p>
                        MFL does not require water coupling or surface cleaning – tubes are inspected in the drained condition, even with light non‑ferromagnetic scale or deposits. Inspection speeds of 1–3 m/s allow complete heat exchangers (500–2,000 tubes) to be screened in one or two shifts. The output is a colour‑coded C‑scan showing estimated wall‑loss percentage and a prioritised list for follow‑up.
                    </p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Magnetic Saturation</strong>
                                <p>Tube wall is magnetically saturated by permanent magnets; disrupted flux at defects is captured by Hall sensors.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Full‑wall Volumetric</strong>
                                <p>Sensitivity to ID, OD, and mid‑wall metal loss – not limited to skin depth like conventional ECT.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>No Cleaning Required</strong>
                                <p>Works through non‑ferromagnetic deposits (scale, sludge, paint). Only heavy ferromagnetic debris (magnetite) may need removal.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Rapid Throughput</strong>
                                <p>Typical pull speed 1–3 m/s – up to 200 tubes per hour with automated probe handling.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-atom"></i>
                        <div>
                            <strong>Hall Effect Sensor Technology:</strong>
                            <p>Modern MFL probes use arrays of 8–32 Hall sensors arranged around the tube circumference. These semiconductor devices produce a voltage proportional to magnetic field strength. Changes as small as 0.1 Gauss from a 10% wall‑loss defect are reliably detected. Multi‑sensor arrays provide 360° circumferential coverage with typical axial resolution of 5–15 mm.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request MFL Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/mfl-probe.jpg" alt="MFL tube testing probe">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>MFL probe with permanent magnets and Hall sensor array (shown outside tube for illustration)</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">100–200</span>
                            <span class="stat-label">Tubes per hour</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">360°</span>
                            <span class="stat-label">Circumferential coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">≥10%</span>
                            <span class="stat-label">Min. detectable wall loss</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-magnet"></i> MFL Detection Principles</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Permanent magnets saturate tube wall</li>
                            <li><strong>2.</strong> Magnetic flux flows through sound metal</li>
                            <li><strong>3.</strong> Defect disrupts the magnetic circuit</li>
                            <li><strong>4.</strong> Flux leaks from tube surface at defect</li>
                            <li><strong>5.</strong> Hall sensors measure leakage field</li>
                            <li><strong>6.</strong> Signals processed to indicate wall‑loss</li>
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
                <span class="section-label">WHY CHOOSE MFL</span>
                <h2>Key Advantages of MFL Tube Testing</h2>
                <p>Speed, simplicity, and cost‑effectiveness for large ferromagnetic tube bundles</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue"><i class="fas fa-rocket"></i></div>
                    <h3>Unmatched Inspection Speed</h3>
                    <p>100–200 tubes per hour – 10–50× faster than IRIS or RFECT. A 1,000‑tube carbon steel condenser can be screened in a single shift, making MFL the ideal technique for tight outage windows and large tube counts.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green"><i class="fas fa-layer-group"></i></div>
                    <h3>Volumetric Wall‑Loss Detection</h3>
                    <p>Magnetic fields penetrate the entire tube wall (up to ~12 mm), so defects on the ID, OD, and mid‑wall are all detected. This is a key advantage over conventional eddy current, which is surface‑limited.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple"><i class="fas fa-magnet"></i></div>
                    <h3>Optimised for Ferromagnetic Tubes</h3>
                    <p>Designed specifically for carbon steel and low‑alloy steels – materials where conventional high‑frequency ECT suffers from permeability noise and drift. MFL provides consistent, repeatable results on these alloys.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange"><i class="fas fa-ban"></i></div>
                    <h3>Minimal Tube Preparation</h3>
                    <p>Tubes are inspected in the drained state – no water filling (IRIS) or chemical cleaning (ECT) needed. Light non‑ferromagnetic deposits are transparent to the magnetic field, saving days of preparation and significant costs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red"><i class="fas fa-hand-holding-usd"></i></div>
                    <h3>Lowest Cost per Tube</h3>
                    <p>At $5–15 per tube, MFL is the most economical method for large populations. This makes it feasible to screen 100% of tubes at every outage, rather than relying on limited sampling that may miss degraded tubes.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal"><i class="fas fa-chart-line"></i></div>
                    <h3>Ideal for Tiered Inspection Strategies</h3>
                    <p>MFL rapidly identifies suspect tubes (typically 10–20% of the bundle) which are then confirmed by IRIS or RFECT for precise sizing. This combination optimises both speed and accuracy, reducing overall inspection cost by 40–60% versus using a single precision technique on all tubes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== COMPARISON SECTION ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNOLOGY COMPARISON</span>
                <h2>MFL vs Other Tube Inspection Methods</h2>
                <p>Understanding when MFL provides the best value</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-list-ul"></i> Parameter</th>
                            <th><i class="fas fa-magnet"></i> MFL</th>
                            <th><i class="fas fa-wave-square"></i> Conventional ECT</th>
                            <th><i class="fas fa-broadcast-tower"></i> RFECT</th>
                            <th><i class="fas fa-ruler"></i> IRIS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Inspection Speed</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> 100–200 tubes/hr</td>
                            <td class="excellent">50–150 tubes/hr</td>
                            <td class="average">10–30 tubes/hr</td>
                            <td class="poor">2–6 tubes/hr</td>
                        </tr>
                        <tr>
                            <td><strong>Material Compatibility</strong></td>
                            <td class="average">Ferrous only</td>
                            <td class="excellent">All metals</td>
                            <td class="poor">Ferrous only</td>
                            <td class="excellent">All metals</td>
                        </tr>
                        <tr>
                            <td><strong>Full Wall Detection</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Yes</td>
                            <td class="average">Skin depth only</td>
                            <td class="excellent">Yes</td>
                            <td class="excellent">Yes</td>
                        </tr>
                        <tr>
                            <td><strong>Through Deposits</strong></td>
                            <td class="excellent">Yes (non‑ferromagnetic)</td>
                            <td class="poor">No (cleaning needed)</td>
                            <td class="excellent">Yes</td>
                            <td class="good">Yes (water‑coupled)</td>
                        </tr>
                        <tr>
                            <td><strong>Sizing Accuracy</strong></td>
                            <td class="average">±20–30% (relative)</td>
                            <td class="good">±10–15%</td>
                            <td class="average">±15–20%</td>
                            <td class="excellent">±0.05 mm (±2%)</td>
                        </tr>
                        <tr>
                            <td><strong>ID/OD Discrimination</strong></td>
                            <td class="poor">Limited</td>
                            <td class="average">Phase analysis</td>
                            <td class="excellent">Good</td>
                            <td class="excellent">Separate echoes</td>
                        </tr>
                        <tr>
                            <td><strong>Support Plate Zones</strong></td>
                            <td class="poor">Blind (partial)</td>
                            <td class="poor">Blind</td>
                            <td class="excellent"><i class="fas fa-star"></i> Continuous</td>
                            <td class="poor">Blind</td>
                        </tr>
                        <tr>
                            <td><strong>Tube Preparation</strong></td>
                            <td class="excellent">Drain only</td>
                            <td class="poor">Chemical cleaning</td>
                            <td class="excellent">Drain only</td>
                            <td class="average">Water‑fill</td>
                        </tr>
                        <tr>
                            <td><strong>Cost per Tube</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> $5–15</td>
                            <td class="good">$10–30 (+ cleaning)</td>
                            <td class="average">$20–50</td>
                            <td class="poor">$50–150</td>
                        </tr>
                        <tr>
                            <td><strong>Best Use</strong></td>
                            <td>Rapid CS/Cr‑Mo screening</td>
                            <td>Non‑ferrous, high res.</td>
                            <td>Ferrous + deposits/TSP</td>
                            <td>Confirmatory, FFS</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-lightbulb"></i>
                <div>
                    <p><strong>Optimal Multi‑Technique Strategy:</strong> For carbon steel heat exchangers, use MFL to screen 100% of tubes (1–2 days), then apply IRIS on the 10–20% showing indications (2–3 days) for precise wall‑thickness measurement. If support‑plate crevice corrosion is a concern, add RFECT on selected zones. This approach delivers complete integrity data at 40–60% lower cost than IRIS‑only, and in half the time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">MFL APPLICATIONS</span>
                <h2>Industries & Equipment We Inspect</h2>
                <p>MFL is most valuable where large numbers of ferromagnetic tubes must be assessed quickly</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="power">Power Generation</button>
                    <button class="tab-btn" data-tab="refining">Refining & Heavy Industry</button>
                    <button class="tab-btn" data-tab="hvac">HVAC & Utilities</button>
                    <button class="tab-btn" data-tab="specialty">Specialty</button>
                </div>

                <div class="tabs-content">
                    <!-- Power Generation Tab -->
                    <div class="tab-panel active" id="power">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-power-plant.jpg" alt="Power plant MFL tube inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Power Plant Boilers & Steam Cycle</h3>
                                <p>MFL is the tool of choice for rapid condition assessment of thousands of carbon steel and Cr‑Mo tubes in surface condensers, feedwater heaters, economisers, and air preheaters. During planned outages, MFL screens the entire tube population, identifying tubes that need immediate plugging and those that can be monitored.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Surface condensers (CS) – waterside corrosion, pitting, MIC</li>
                                    <li><i class="fas fa-check"></i> Feedwater heaters (CS, Cr‑Mo) – FAC, erosion at inlet/outlet</li>
                                    <li><i class="fas fa-check"></i> Boiler waterwall tubes (T2, T11, T22) – fireside corrosion, fatigue</li>
                                    <li><i class="fas fa-check"></i> HRSG economisers (T11, T22) – external corrosion, support wear</li>
                                    <li><i class="fas fa-check"></i> Closed cooling water heat exchangers – bacterial/chemical attack</li>
                                </ul>

                                <div class="app-stats">
                                    <div class="stat">
                                        <span class="stat-num">10,000+</span>
                                        <span class="stat-label">Tubes/week capacity</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">70%</span>
                                        <span class="stat-label">Faster than ECT + cleaning</span>
                                    </div>
                                </div>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-chart-line"></i> Case Study: 500 MW Coal Plant Condenser</h4>
                                    <p><strong>Challenge:</strong> 14,000 CS tubes, unknown condition, 7‑day outage window.</p>
                                    <p><strong>MFL Solution:</strong> Three MFL systems in parallel inspected 100% of tubes in 5 days. Identified 287 tubes with >30% wall loss (plugged), 512 with 15–30% (monitor).</p>
                                    <p><strong>Outcome:</strong> Completed within outage. Follow‑up IRIS on worst 50 tubes showed 92% correlation. Avoided estimated $1.2 M in potential forced‑outage costs.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E570</span>
                                    <span class="standard-tag">ASME Section V</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">EPRI Guidelines</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Refining & Heavy Industry Tab -->
                    <div class="tab-panel" id="refining">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-refinery.jpg" alt="Refinery heat exchanger MFL inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Refinery & Petrochemical Plants</h3>
                                <p>Carbon steel and Cr‑Mo heat exchangers in refining and petrochemical service experience sulfidation, naphthenic acid corrosion, high‑temperature hydrogen attack, and cooling‑water corrosion. MFL screening across the entire bundle fleet provides the data needed for Risk‑Based Inspection (RBI) per API 580 and helps prioritise detailed follow‑up.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude preheat trains – sulfidation, erosion</li>
                                    <li><i class="fas fa-check"></i> FCC fractionator overhead – severe fouling</li>
                                    <li><i class="fas fa-check"></i> Hydrotreater feed/effluent exchangers (Cr‑Mo)</li>
                                    <li><i class="fas fa-check"></i> Sour water strippers – H₂S / NH₃ attack</li>
                                    <li><i class="fas fa-check"></i> Process cooling water exchangers – MIC, scaling</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-industry"></i>
                                    <div>
                                        <strong>RBI Integration:</strong>
                                        <p>Annual MFL screening of 150+ carbon steel exchangers provides the condition inputs for API 580 probability‑of‑failure calculations. The result is a data‑driven inspection plan that allocates detailed NDT (IRIS, RFECT) to the highest‑risk units, reducing overall inspection spending by 40% while improving reliability.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">API 580/581</span>
                                    <span class="standard-tag">ASTM E570</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HVAC & Utilities Tab -->
                    <div class="tab-panel" id="hvac">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-hvac.jpg" alt="HVAC chiller MFL tube inspection">
                            </div>
                            <div class="tab-text">
                                <h3>HVAC Chillers & District Systems</h3>
                                <p>Large HVAC systems – central chillers, district cooling, industrial refrigeration – often contain carbon steel tubes in evaporators, condensers, and closed‑loop coolers. MFL enables rapid condition surveys during brief seasonal shutdowns.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Centrifugal chiller evaporators & condensers – water‑side corrosion, pitting</li>
                                    <li><i class="fas fa-check"></i> District heating/cooling heat exchangers – scaling, MIC</li>
                                    <li><i class="fas fa-check"></i> Data centre precision cooling – high uptime requirements</li>
                                    <li><i class="fas fa-check"></i> Industrial refrigeration (NH₃, CO₂) – carbon steel pressure vessels</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-building"></i>
                                    <div>
                                        <strong>Critical Infrastructure:</strong>
                                        <p>Hospital central chillers (4 × 1,500 ton, 9,600 tubes total) screened in 2 days during a summer weekend shutdown. MFL identified 47 tubes with >40% wall loss; they were plugged before the next cooling season, avoiding a mid‑summer failure that would have compromised patient care and cost $500K+ in emergency repairs.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASHRAE</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 510</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-specialty.jpg" alt="Specialty MFL applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty & Emerging Applications</h3>
                                <p>MFL technology is increasingly applied in nuclear support systems, waste‑to‑energy, geothermal, and pulp & paper where large ferromagnetic tube bundles must be screened for wall‑loss.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Nuclear plant component cooling water heat exchangers</li>
                                    <li><i class="fas fa-check"></i> Waste‑to‑energy boiler tubes – fireside erosion, corrosion</li>
                                    <li><i class="fas fa-check"></i> Geothermal binary cycle evaporators – scaling, corrosion</li>
                                    <li><i class="fas fa-check"></i> Pulp & paper black liquor recovery boilers – caustic attack</li>
                                    <li><i class="fas fa-check"></i> Marine auxiliary condensers (ferrous) – seawater corrosion</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-flask"></i>
                                    <div>
                                        <strong>Advanced Developments:</strong>
                                        <p>High‑resolution MFL systems now employ up to 128 Hall sensors with 5 mm axial resolution, approaching the detail of conventional ECT while retaining MFL speed. AI‑based pattern recognition trained on 50,000+ tube scans reduces analysis time by 80% and improves detection of subtle wall‑loss patterns.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section III</span>
                                    <span class="standard-tag">MIL‑STD‑271</span>
                                    <span class="standard-tag">TAPPI</span>
                                    <span class="standard-tag">DNV‑GL</span>
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
                <h2>MFL Capabilities & Limitations</h2>
                <p>Know when MFL is the right tool – and when it’s not</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header"><i class="fas fa-search"></i>
                        <h3>Detectable Defects</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">General Wall Loss:</span> ≥10–15% (screening)</li>
                        <li><span class="cap-label">Pitting:</span> ≥20% depth, ≥2 mm diameter</li>
                        <li><span class="cap-label">Erosion‑Corrosion:</span> Localised thinning</li>
                        <li><span class="cap-label">Fretting/Wear:</span> At support plates</li>
                        <li><span class="cap-label">Cracking:</span> ID/OD cracks ≥5 mm (orientation dependent)</li>
                        <li><span class="cap-label">Mechanical Damage:</span> Dents, gouges</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header"><i class="fas fa-ruler-combined"></i>
                        <h3>Tube Specifications</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">OD:</span> 12–100 mm (typical 16–50 mm)</li>
                        <li><span class="cap-label">Wall Thickness:</span> 1–12 mm</li>
                        <li><span class="cap-label">Length:</span> Unlimited (continuous pull)</li>
                        <li><span class="cap-label">Materials:</span> Ferrous only – CS, Cr‑Mo, ferritic SS</li>
                        <li><span class="cap-label">Configuration:</span> Straight tubes (U‑bends very challenging)</li>
                        <li><span class="cap-label">Condition:</span> Drained, light non‑ferromagnetic deposits OK</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header"><i class="fas fa-chart-line"></i>
                        <h3>Performance Metrics</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Sizing Accuracy:</span> ±20–30% (relative)</li>
                        <li><span class="cap-label">POD (90/95):</span> 15% wall loss per MIL‑HDBK‑1823</li>
                        <li><span class="cap-label">Pull Speed:</span> 1–3 m/s</li>
                        <li><span class="cap-label">Throughput:</span> 100–200 tubes/hr</li>
                        <li><span class="cap-label">Axial Resolution:</span> 5–15 mm</li>
                        <li><span class="cap-label">Circumferential:</span> 360° (sensor array)</li>
                        <li><span class="cap-label">False Call Rate:</span>
                            <5% (experienced analyst)</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="capabilities-dual">
                <div class="capability-block detects">
                    <div class="capability-block-header"><i class="fas fa-thumbs-up"></i>
                        <h3>Use MFL When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="detect-category">
                            <h4><i class="fas fa-users"></i> Large Ferrous Tube Populations</h4>
                            <ul>
                                <li>Condensers, feedwater heaters with 1,000–20,000 CS tubes</li>
                                <li>100% screening needed in days, not weeks</li>
                                <li>Budget constraints limit expensive precision techniques</li>
                            </ul>
                        </div>
                        <div class="detect-category">
                            <h4><i class="fas fa-clock"></i> Time‑Critical Inspections</h4>
                            <ul>
                                <li>Short outage windows (weekends, brief turnarounds)</li>
                                <li>Emergency screening after a tube failure</li>
                                <li>Same‑day preliminary results required</li>
                            </ul>
                        </div>
                        <div class="detect-category">
                            <h4><i class="fas fa-filter"></i> First Pass in Tiered Strategy</h4>
                            <ul>
                                <li>MFL → IRIS confirmation on flagged tubes</li>
                                <li>RBI data collection – rapid fleet‑wide condition survey</li>
                                <li>Trend monitoring – annual screening to track degradation</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="capability-block limitations">
                    <div class="capability-block-header"><i class="fas fa-exclamation-triangle"></i>
                        <h3>Avoid MFL When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="limit-category">
                            <h4><i class="fas fa-ban"></i> Material Restrictions</h4>
                            <ul>
                                <li><strong>Non‑ferrous tubes</strong> (copper, brass, SS, Ti, Ni‑alloys) – MFL cannot be used</li>
                                <li>Mixed metallurgy bundles – only ferrous portion can be screened</li>
                            </ul>
                        </div>
                        <div class="limit-category">
                            <h4><i class="fas fa-ruler"></i> Precision Requirements</h4>
                            <ul>
                                <li>Absolute thickness needed for FFS (API 579) – use IRIS</li>
                                <li>Tubes near minimum wall – ±20–30% uncertainty too large</li>
                            </ul>
                        </div>
                        <div class="limit-category">
                            <h4><i class="fas fa-magnet"></i> Magnetic Interference</h4>
                            <ul>
                                <li>Heavy ferromagnetic deposits (magnetite, weld spatter) – must be removed</li>
                                <li>External ferrous structures close to tube – can distort flux</li>
                            </ul>
                        </div>
                        <div class="limit-category">
                            <h4><i class="fas fa-th-large"></i> Geometric Issues</h4>
                            <ul>
                                <li>Support plate zones – limited coverage; use RFECT</li>
                                <li>U‑bend tubes – standard probes cannot negotiate bends</li>
                                <li>Very thin walls (<1 mm) – poor signal/noise</li>
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
                    <h2>Our MFL Equipment Fleet</h2>
                    <p class="lead">Alpha Sonix operates multiple modern MFL systems with Hall sensor arrays, powerful magnets, and automated handling – ensuring fast, reliable screening at scale.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-microchip"></i></div>
                            <div class="equipment-details">
                                <h4>Zetec MIZ‑21 MFL System</h4>
                                <p>32‑channel Hall sensor array, 1.2 T neodymium magnets, real‑time C‑scan display, encoder position tracking (±1 mm), wireless control, cloud data management. Compliant with ASTM E570 and API 510. Laptop‑based, field‑portable.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-broadcast-tower"></i></div>
                            <div class="equipment-details">
                                <h4>Russell NDE MFL‑16</h4>
                                <p>16‑channel high‑speed system, adjustable pull speed up to 3 m/s, dual‑polarity measurement (axial + radial), automated tube sequencing, network storage. Ideal for large campaigns.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-th-large"></i></div>
                            <div class="equipment-details">
                                <h4>Comprehensive Probe Inventory</h4>
                                <p>75+ probes covering 12–100 mm OD: standard (16‑50 mm), miniature (12‑20 mm), large‑bore (50‑100 mm), high‑resolution (32‑sensor), express (8‑sensor for max speed). All with spring‑loaded centralisers and replaceable sensor modules.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-robot"></i></div>
                            <div class="equipment-details">
                                <h4>Automated Handling Systems</h4>
                                <p>Pneumatic/electric pullers with programmable speed (0.5–3 m/s), encoder feedback (±0.5 mm), multi‑probe parallel operation (2–4 systems simultaneously), remote control. Doubles/triples throughput for urgent campaigns.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Calibration & Quality Assurance</h4>
                        <p>All systems calibrated per ASTM E570 using reference tubes with EDM notches at 10%, 20%, 30%, 40%, 50% wall loss. Field daily verification against client‑specific calibration standards. Magnets checked monthly (>1.0 T minimum). NIST‑traceable annual calibration.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/mfl-equipment.jpg" alt="MFL equipment setup">
                        <div class="play-overlay">
                            <button class="play-btn"><i class="fas fa-play"></i></button>
                            <span>Watch MFL Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item"><i class="fas fa-check"></i> Up to 32 Hall sensor channels</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> Real‑time C‑scan imaging</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> Automated defect detection</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> 3 m/s pull speed</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> Cloud data management</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> ASTM / API compliant</div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Equipment Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/astm.png" alt="ASTM E570">
                            <img src="/www/assets/images/certifications/api.png" alt="API 510">
                            <img src="/www/assets/images/certifications/asme.png" alt="ASME Section V">
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
                <h2>MFL Inspection Procedure</h2>
                <p>Systematic, industry‑standard process from planning to report</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre‑Inspection Engineering</h3>
                        <p>Review exchanger drawings, tube material, dimensions, and operating history. Confirm ferromagnetic properties (magnet test). Select probe size and pull speed. Develop procedure per ASTM E570. Plan tube numbering and data logging.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Inspection plan & calibration procedure</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Heat Exchanger Preparation</h3>
                        <p>Drain and isolate exchanger. Remove channel heads / waterbox covers. Demagnetise if needed (AC coil). Flush loose debris if heavy fouling. Verify tube sheet labelling. Set up MFL equipment and probe puller.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Equipment setup confirmation</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>System Calibration</h3>
                        <p>Use a calibration tube with EDM notches at specified wall‑loss depths (10%, 20%, … 50%). Adjust gain, pull speed, filtering. Verify signal‑amplitude vs wall‑loss correlation (±10% repeatability). Document calibration signals.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Calibration report</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>High‑Speed Scanning</h3>
                        <p>Insert probe, start automated pull (1–3 m/s). System records Hall sensor data and encoder position in real time. Operator monitors C‑scan for data quality and obvious severe defects. Typical 30–90 seconds per tube.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Raw MFL data files</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Data Analysis & Classification</h3>
                        <p>Level II analyst reviews C‑scans, flags indications above threshold (typically >15% estimated wall loss). Classify: Critical (>40%), Severe (30–40%), Moderate (15–30%), Minor (<15%). Generate tube‑by‑tube summary with defect location and severity.</p>
                                <div class="timeline-deliverable"><strong>Deliverable:</strong> Annotated C‑scans & severity list</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting & Recommendations</h3>
                        <p>Final report: executive summary, scope, calibration, tube‑by‑tube results, colour C‑scans, statistical distribution, prioritised plugging list, IRIS/RT follow‑up recommendations. Digital archive for trending.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Final MFL report per ASTM E570</div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Certifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item"><img src="/www/assets/images/certifications/asnt.png" alt="ASNT"><span>ASNT Level II / III</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001"><span>ISO 9001:2015</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/astm.png" alt="ASTM"><span>ASTM E570 Qualified</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/api.png" alt="API"><span>API 510 / 570 Recognised</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your MFL Inspection Partner</h2>
                <p>Speed, expertise, and a complete tube‑integrity service</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-tools"></i></div>
                    <h3>Multiple Systems, Maximum Throughput</h3>
                    <p>5 complete MFL systems (Zetec, Russell NDE). 75+ probes for 12–100 mm OD. Parallel operation (2–4 systems) for mega‑projects. Redundancy ensures no schedule delays.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-user-graduate"></i></div>
                    <h3>Certified, Experienced Technicians</h3>
                    <p>ASNT Level II with MFL specialty training, 8+ years average experience. Level III oversight for complex signals. Manufacturer‑certified on all systems.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-project-diagram"></i></div>
                    <h3>Integrated Tube‑Inspection Services</h3>
                    <p>Single source: MFL (rapid screening), ECT (non‑ferrous), RFECT (TSP zones), IRIS (precision sizing). We match the right technique to your tube material and condition – no subcontractors.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-brain"></i></div>
                    <h3>AI‑Enhanced Data Analysis</h3>
                    <p>Machine‑learning defect recognition trained on 100,000+ tube scans. 97% detection accuracy, 2% false‑call rate. Reduces analyst time by 80% and enables same‑day preliminary reports.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-chart-bar"></i></div>
                    <h3>RBI & Long‑Term Support</h3>
                    <p>MFL data feeds directly into Risk‑Based Inspection programs (API 580). Trending across outages quantifies corrosion rates. We help you build an evidence‑based inspection interval strategy.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-award"></i></div>
                    <h3>Proven Track Record</h3>
                    <p>2+ million tubes inspected. Zero safety incidents in 200,000+ hours. 96% defect confirmation on IRIS follow‑up. Approved by NTPC, IOCL, Reliance, Tata Power, and other leading operators.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>MFL Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why is MFL much faster than other tube inspection methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>MFL achieves 100–200 tubes per hour because of three key factors: (1) pull speeds of 1–3 m/s – Hall sensors respond in microseconds; (2) no need for water filling or chemical cleaning – tubes are inspected as‑is after draining; (3) real‑time defect display – minimal post‑processing. For a 1,000‑tube condenser, MFL takes 1–2 days versus 1–2 weeks for ECT (including cleaning) or 4–8 weeks for IRIS.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can MFL inspect non‑ferrous tubes like copper or stainless steel?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No. MFL only works on ferromagnetic materials (carbon steel, Cr‑Mo, ferritic stainless). Non‑ferrous materials (copper, brass, Cu‑Ni, titanium, austenitic stainless, nickel alloys) cannot be magnetised and therefore produce no flux leakage signal. For those, use conventional eddy current (ECT).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is MFL defect sizing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>MFL provides ±20–30% estimated wall‑loss – adequate for triage (flagging tubes for follow‑up) but not for final acceptance decisions. For precise sizing (±0.05 mm), use IRIS on the flagged tubes. This combination gives you both speed and accuracy where it matters.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do tubes need to be cleaned before MFL inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No. Non‑ferromagnetic deposits (scale, sludge, paint) are transparent to the magnetic field. Only heavy ferromagnetic debris (magnetite flakes, steel wool, weld spatter) may need to be removed. This saves days of chemical cleaning and associated costs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can MFL distinguish between ID and OD defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Limited. Signal polarity can sometimes indicate ID vs OD, but not reliably enough for root‑cause analysis. If ID/OD discrimination is critical, follow up with RFECT (for ferrous tubes) or IRIS (all materials) – both provide clear ID/OD separation via phase analysis or separate echoes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can MFL inspect tube support plate zones like RFECT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Only partially. Ferromagnetic support plates create strong flux leakage signals that can mask tube defects at the TSP intersection. For reliable TSP zone assessment, RFECT is recommended – it is specifically designed to see through support plates.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does MFL inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical cost is $5–15 per tube – the lowest of any tube‑inspection method. For a 1,000‑tube heat exchanger, that’s $5,000–15,000 for the MFL screening. This makes 100% population screening affordable, compared to selective sampling that risks missing failed tubes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What standards govern MFL tube inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>MFL for tubing is covered by <strong>ASTM E570</strong> (Standard Practice for Flux Leakage Examination of Ferromagnetic Steel Tubular Products), incorporated by reference in ASME Section V, Article 7. API 510 and API 570 also accept MFL for tube screening. Our procedures are written to these standards, ensuring regulatory and insurance acceptance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Screen 1,000+ Ferromagnetic Tubes in Days</h2>
                <p>MFL delivers speed without sacrificing detection – schedule a rapid screening today</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request MFL Inspection Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Up to 200 tubes/hour</span>
                    <span><i class="fas fa-check"></i> No cleaning required</span>
                    <span><i class="fas fa-check"></i> Same‑day preliminary results</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Tube Inspection Services</h2>
                <p>From rapid screening to precision characterisation – complete tube integrity solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/iris.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-ruler"></i></div>
                    <h3>IRIS Testing</h3>
                    <p>Precision ultrasonic sizing for MFL‑flagged tubes – ±0.05 mm</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/remote-field-eddy-current.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-magnet"></i></div>
                    <h3>RFECT</h3>
                    <p>Remote field for support plate zones and heavily deposited tubes</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/conventional-ect.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                    <h3>Conventional ECT</h3>
                    <p>High‑resolution eddy current for non‑ferrous tubes</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-ruler-vertical"></i></div>
                    <h3>UT Thickness</h3>
                    <p>Spot thickness gauging for shells, tube sheets, and nozzles</p>
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