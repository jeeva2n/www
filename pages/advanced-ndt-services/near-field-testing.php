<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Near Field Testing (NFT) Tube Inspection Services | Alpha Sonix NDT Solutions";
$meta_description = "Near Field Testing (NFT) for ferromagnetic boiler, economizer and HRSG tubes. Low‑frequency electromagnetic inspection for corrosion/erosion wall‑loss screening with practical sizing and fast turnaround. ASME Sec V aligned reporting.";
$meta_keywords = "Near Field Testing, NFT tube inspection, ferromagnetic tube testing, boiler tube inspection, economizer tube testing, HRSG tube inspection, carbon steel tube NDT, low frequency electromagnetic testing, wall loss screening";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/near-field-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/nft-tube-testing-og.jpg">

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
            "serviceType": "Near Field Testing (NFT) Tube Inspection",
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
            "description": "Near Field Testing (NFT) for ferromagnetic tubes such as carbon steel and low alloy boiler/economizer/HRSG tubes. Low-frequency electromagnetic inspection for wall-loss screening and condition assessment with code-aligned reporting.",
            "serviceOutput": "Tube screening report with condition classification and follow-up recommendations (IRIS/UT/RVI as required)."
        }
    </script>
</head>

<body>
    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/nft-tube-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>NFT</span>
                </div>
                <h1 class="page-title">Near Field Testing (NFT) Tube Inspection</h1>
                <p class="page-subtitle">Low‑frequency electromagnetic tube inspection for ferromagnetic materials—practical wall‑loss screening for boilers, economizers, HRSGs and carbon steel heat exchangers</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME Sec V Aligned</span>
                    <span class="badge"><i class="fas fa-magnet"></i> Ferromagnetic Tubes</span>
                    <span class="badge"><i class="fas fa-layer-group"></i> Full‑Wall Screening</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== QUICK OVERVIEW ===================== -->
    <section class="quick-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-industry"></i></div>
                    <h3>Optimised for Carbon Steel</h3>
                    <p>Designed for ferromagnetic boiler and economizer tubes where conventional high‑frequency ECT may be limited by permeability effects.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-arrows-alt-v"></i></div>
                    <h3>Balanced Wall‑Loss Response</h3>
                    <p>Low‑frequency field penetrates the wall, supporting screening sensitivity to metal loss from either surface (ID/OD), depending on geometry and calibration.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-temperature-high"></i></div>
                    <h3>Field Practical</h3>
                    <p>Works in “as‑found” conditions (dry/wet, light deposits). High‑temperature capability may be possible with suitable probes and safe access planning.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-chart-pie"></i></div>
                    <h3>Actionable Screening Output</h3>
                    <p>Condition classification and tube lists that help maintenance teams prioritise plugging, replacement, or confirmatory sizing (IRIS/UT).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS NFT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ELECTROMAGNETIC NDT FOR FERROMAGNETICS</span>
                    <h2>What is Near Field Testing (NFT) Tube Inspection?</h2>

                    <p class="lead">Near Field Testing (NFT) is a low‑frequency electromagnetic tube inspection technique used to screen ferromagnetic tubing (carbon steel and low‑alloy steels) for wall‑loss damage such as corrosion and erosion, particularly in boilers, economizers, and HRSG components.</p>

                    <p>NFT uses lower test frequencies than conventional eddy current tube testing. This improves penetration through ferromagnetic tube walls and helps reduce sensitivity to permeability variations that can complicate higher‑frequency methods. NFT is commonly selected where the inspection objective is <strong>fast, reliable wall‑loss screening</strong> and prioritisation of tubes requiring repair or confirmatory sizing.</p>

                    <p>Like other electromagnetic methods, NFT output is typically <strong>screening and classification</strong> rather than absolute thickness in millimetres. Where precise remaining wall is required for Fitness‑for‑Service decisions, we recommend confirmatory inspection (IRIS/UT) on flagged tubes.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Low‑Frequency Penetration</strong>
                                <p>Improved penetration in carbon steel and low‑alloy tubes compared with standard high‑frequency ECT methods.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>As‑Found Screening</strong>
                                <p>Practical in typical outage conditions. Works in dry/wet tubes and tolerates light deposits (subject to procedure limits).</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Reduced Permeability Noise</strong>
                                <p>Lower frequency operation helps stabilise signals in ferromagnetic materials compared with conventional ECT.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Fast Tube‑by‑Tube Output</strong>
                                <p>Provides location, severity classification, and tube lists for maintenance planning and follow‑up inspections.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Where NFT adds value:</strong>
                            <p>NFT is a practical choice for carbon steel boiler and economizer tubes when you need fast wall‑loss screening and clear prioritisation—without the cleaning requirements of some techniques and without relying on limited tube sampling.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Schedule NFT Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/nft-probe-operation.jpg" alt="NFT probe operation in ferromagnetic tube">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>NFT probe configuration depends on tube size, material, and inspection objective (screening vs confirmation).</span>
                        </div>
                    </div>

                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">Fast</span>
                            <span class="stat-label">Screening Output</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Ferrous</span>
                            <span class="stat-label">Tube Focus</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Tube Count Coverage</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-project-diagram"></i> NFT Detection Concept</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Low‑frequency excitation applied</li>
                            <li><strong>2.</strong> Field penetrates the tube wall</li>
                            <li><strong>3.</strong> Wall loss changes signal response</li>
                            <li><strong>4.</strong> Response mapped vs. tube length</li>
                            <li><strong>5.</strong> Results classified for action</li>
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
                <span class="section-label">WHY CHOOSE NFT</span>
                <h2>Key Advantages of Near Field Testing</h2>
                <p>Reliable wall‑loss screening for ferromagnetic tubes in power and industrial service</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue"><i class="fas fa-magnet"></i></div>
                    <h3>Built for Ferromagnetic Tubes</h3>
                    <p>NFT is selected specifically for carbon steel and low‑alloy tubes where permeability effects can reduce confidence in conventional ECT. It supports stable screening in typical boiler and economizer metallurgy.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green"><i class="fas fa-balance-scale"></i></div>
                    <h3>Practical Full‑Wall Screening</h3>
                    <p>Low‑frequency penetration supports screening for wall‑loss damage originating from either surface. This is useful in systems with mixed damage mechanisms (waterside FAC + fireside corrosion/erosion).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple"><i class="fas fa-fire-alt"></i></div>
                    <h3>Suited to Outage Constraints</h3>
                    <p>Works in as‑found conditions with minimal preparation. For specific projects, high‑temperature inspection may be possible using suitable probes and safe access controls (case dependent).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange"><i class="fas fa-layer-group"></i></div>
                    <h3>Useful Through‑Thickness Response</h3>
                    <p>Compared with surface‑limited methods, NFT supports improved screening of deeper wall‑loss conditions in ferromagnetic tubes, especially in thicker sections.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red"><i class="fas fa-volume-mute"></i></div>
                    <h3>Reduced “Background” Signals</h3>
                    <p>Lower frequency operation can reduce signal instability from permeability variation and certain attachments, improving screening confidence in real boiler environments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal"><i class="fas fa-chart-line"></i></div>
                    <h3>Condition Classification & Trending</h3>
                    <p>Repeat NFT inspections help compare deterioration over time, identify accelerating zones, and plan targeted repairs. Critical tubes can be confirmed with IRIS/UT where absolute thickness is required.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== NFT vs OTHER METHODS ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPARATIVE ANALYSIS</span>
                <h2>NFT vs. Other Ferromagnetic Tube Inspection Methods</h2>
                <p>Choose the method based on tube material, access, deposits, and the decision you need to make</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th><i class="fas fa-wave-square"></i> NFT</th>
                            <th><i class="fas fa-broadcast-tower"></i> Remote Field (RFT/RFECT)</th>
                            <th><i class="fas fa-magnet"></i> Saturated ECT</th>
                            <th><i class="fas fa-water"></i> IRIS (UT)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Typical Use</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Wall‑loss screening (ferrous)</td>
                            <td>Ferrous tubes incl. support plate zones</td>
                            <td>Ferrous with saturation / mixed cases</td>
                            <td>Absolute thickness confirmation</td>
                        </tr>
                        <tr>
                            <td><strong>Ferromagnetic Performance</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Strong</td>
                            <td class="excellent">Strong</td>
                            <td class="good">Good (setup dependent)</td>
                            <td class="excellent">Strong</td>
                        </tr>
                        <tr>
                            <td><strong>ID/OD Differentiation</strong></td>
                            <td class="average">Limited</td>
                            <td class="average">Limited</td>
                            <td class="good">Better (phase analysis)</td>
                            <td class="excellent"><i class="fas fa-star"></i> Direct (echo separation)</td>
                        </tr>
                        <tr>
                            <td><strong>Sizing Accuracy</strong></td>
                            <td class="good">Screening / calibrated estimate</td>
                            <td class="good">Screening / calibrated estimate</td>
                            <td class="average">Can be affected by permeability</td>
                            <td class="excellent"><i class="fas fa-star"></i> Absolute (mm)</td>
                        </tr>
                        <tr>
                            <td><strong>Inspection Speed</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Fast</td>
                            <td class="average">Moderate</td>
                            <td class="good">Good</td>
                            <td class="poor">Slow</td>
                        </tr>
                        <tr>
                            <td><strong>Through Deposits</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Generally good*</td>
                            <td class="excellent">Good</td>
                            <td class="good">Good (case dependent)</td>
                            <td class="poor">Needs water coupling</td>
                        </tr>
                        <tr>
                            <td><strong>Best For</strong></td>
                            <td>Boiler/economizer tube screening</td>
                            <td>Support plate / ferrous bundles</td>
                            <td>Special cases / mixed signals</td>
                            <td>FFS / confirmatory sizing</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-info-circle"></i>
                <p><strong>Recommended approach:</strong> Use NFT for rapid screening of the tube population, then apply IRIS (or UT thickness) to confirm and size tubes that exceed your action threshold. *Deposit effect depends on deposit type and severity; feasibility is evaluated during setup.</p>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">NFT APPLICATIONS</span>
                <h2>Equipment Types & Power Industry Applications</h2>
                <p>Where ferromagnetic tubing and wall‑loss mechanisms drive reliability risk</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="boiler">Boiler Tubes</button>
                    <button class="tab-btn" data-tab="economizer">Economizers</button>
                    <button class="tab-btn" data-tab="hrsg">HRSG Systems</button>
                    <button class="tab-btn" data-tab="industrial">Industrial Heaters</button>
                </div>

                <div class="tabs-content">
                    <!-- Boiler Tubes Tab -->
                    <div class="tab-panel active" id="boiler">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/nft-boiler-tubes.jpg" alt="Boiler tube NFT inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Power Plant Boiler Tube Inspection</h3>
                                <p>NFT supports screening for wall‑loss and degradation in boiler tubing, helping prevent forced outages and enabling targeted replacement planning during shutdowns.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Waterwall tubes (carbon steel)</li>
                                    <li><i class="fas fa-check"></i> Economiser / evaporator circuits (CS/low alloy)</li>
                                    <li><i class="fas fa-check"></i> High‑risk areas near supports, attachments and bends</li>
                                    <li><i class="fas fa-check"></i> Zones affected by fireside erosion and corrosion</li>
                                    <li><i class="fas fa-check"></i> Waterside FAC and under‑deposit corrosion screening</li>
                                    <li><i class="fas fa-check"></i> Tube condition ranking for repair planning</li>
                                    <li><i class="fas fa-check"></i> Follow‑up selection for IRIS/UT confirmation</li>
                                    <li><i class="fas fa-check"></i> Repeat inspection for trending where required</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-clipboard-check"></i> Typical Outcome</h4>
                                    <p>NFT identifies and prioritises tubes with significant wall‑loss so maintenance can act during the outage window. Confirmatory IRIS/UT is then applied to the highest‑risk tubes for precise sizing and FFS decisions.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec I</span>
                                    <span class="standard-tag">ASME Sec V</span>
                                    <span class="standard-tag">EPRI (program)</span>
                                    <span class="standard-tag">NBIC (program)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Economizers Tab -->
                    <div class="tab-panel" id="economizer">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/nft-economizer.jpg" alt="Economizer tube NFT inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Economizer Tube Bundle Testing</h3>
                                <p>Economizers are commonly affected by FAC, oxygen pitting, and low‑temperature fireside corrosion. NFT supports rapid screening and prioritisation of high‑wastage zones.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> FAC‑susceptible elbows and inlet regions</li>
                                    <li><i class="fas fa-check"></i> Acid dew point corrosion zones</li>
                                    <li><i class="fas fa-check"></i> Finned tube bundles (case dependent)</li>
                                    <li><i class="fas fa-check"></i> High‑velocity thinning patterns</li>
                                    <li><i class="fas fa-check"></i> Tube‑to‑support contact areas</li>
                                    <li><i class="fas fa-check"></i> Tube ranking for targeted replacement</li>
                                    <li><i class="fas fa-check"></i> Follow‑up IRIS/UT for critical tubes</li>
                                    <li><i class="fas fa-check"></i> Trending across outages (where required)</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <div>
                                        <strong>FAC risk management:</strong>
                                        <p>NFT results, combined with operating/chemistry data, help identify high‑wastage circuits and support mitigation planning (chemistry control, flow changes, and material upgrades where appropriate).</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec I</span>
                                    <span class="standard-tag">ASME PCC‑2 (program)</span>
                                    <span class="standard-tag">EPRI FAC (program)</span>
                                    <span class="standard-tag">NACE (program)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HRSG Systems Tab -->
                    <div class="tab-panel" id="hrsg">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/nft-hrsg.jpg" alt="HRSG tube NFT inspection">
                            </div>
                            <div class="tab-text">
                                <h3>HRSG Tube Integrity Screening</h3>
                                <p>HRSG units face FAC, thermal fatigue, and corrosion‑fatigue—especially in cycling service. NFT provides practical screening to prioritise circuits for repair and confirmatory sizing.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> LP/IP evaporator tubing (CS/low alloy)</li>
                                    <li><i class="fas fa-check"></i> Economiser sections and transitions</li>
                                    <li><i class="fas fa-check"></i> High‑risk regions near headers and constraints</li>
                                    <li><i class="fas fa-check"></i> Cycling service monitoring support</li>
                                    <li><i class="fas fa-check"></i> Finned tube banks (access dependent)</li>
                                    <li><i class="fas fa-check"></i> Prioritised tube lists for outage planning</li>
                                    <li><i class="fas fa-check"></i> Follow‑up IRIS/UT as required</li>
                                    <li><i class="fas fa-check"></i> Data archiving for trending</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-sync-alt"></i>
                                    <div>
                                        <strong>Cyclic operation focus:</strong>
                                        <p>For plants with frequent starts/stops, repeat screening helps identify accelerating wastage zones and supports targeted maintenance planning without expanding outage duration.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec I</span>
                                    <span class="standard-tag">HRSG User Group (program)</span>
                                    <span class="standard-tag">EPRI HRSG (program)</span>
                                    <span class="standard-tag">ISO 12952 (program)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industrial Heaters Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/nft-process-heater.jpg" alt="Industrial fired heater NFT inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial Boilers & Process Heater Tubes</h3>
                                <p>Industrial boilers, waste heat units and certain fired heater convection sections use ferromagnetic tubing where wall‑loss monitoring is essential for safe operation and reliable throughput.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Package boilers and waste heat boilers</li>
                                    <li><i class="fas fa-check"></i> Convection section tubes (where accessible)</li>
                                    <li><i class="fas fa-check"></i> Corrosion/erosion screening in utility circuits</li>
                                    <li><i class="fas fa-check"></i> Targeted checks after operating upsets</li>
                                    <li><i class="fas fa-check"></i> Repair verification and monitoring programs</li>
                                    <li><i class="fas fa-check"></i> Planned shutdown support</li>
                                    <li><i class="fas fa-check"></i> Follow‑up IRIS/UT for sizing where required</li>
                                    <li><i class="fas fa-check"></i> Documentation for integrity files</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-oil-can"></i>
                                    <div>
                                        <strong>Maintenance optimisation:</strong>
                                        <p>NFT helps reduce “replace‑everything” decisions by identifying the specific circuits and tubes that require action, then confirming the critical few with precise sizing methods.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 530 (program)</span>
                                    <span class="standard-tag">API 571</span>
                                    <span class="standard-tag">ASME Sec I</span>
                                    <span class="standard-tag">ISO 13705 (program)</span>
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
                <h2>Our Near Field Testing Capabilities</h2>
                <p>Scope and capability depend on tube size, material, access and deposit condition</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-horizontal"></i>
                        <h3>Tube Specifications</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">OD Range:</span> Typical 25mm to 100mm</li>
                        <li><span class="cap-label">Wall Thickness:</span> Typical 3mm to 15mm</li>
                        <li><span class="cap-label">Tube Length:</span> Up to ~30m per scan (access dependent)</li>
                        <li><span class="cap-label">Configuration:</span> Straight and many bent sections (case dependent)</li>
                        <li><span class="cap-label">Orientation:</span> Horizontal / vertical / inclined</li>
                        <li><span class="cap-label">Access:</span> Requires tube end access for probe travel</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-flask"></i>
                        <h3>Material Compatibility</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Carbon Steel:</span> SA‑210, SA‑178, SA‑192 (and equivalents)</li>
                        <li><span class="cap-label">Low Alloy:</span> SA‑213 T11/T22/T91 (and equivalents)</li>
                        <li><span class="cap-label">Ferritic SS:</span> 409/410/430 (ferromagnetic grades)</li>
                        <li><span class="cap-label">Tube Condition:</span> As‑found (practical screening)</li>
                        <li><span class="cap-label">Not Intended For:</span> Copper alloys, titanium, austenitic SS (use ECT/IRIS)</li>
                        <li><span class="cap-label">Verification:</span> Material check recommended before deployment</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detection Capability (Screening)</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wall Loss:</span> Screening/classification with calibrated response</li>
                        <li><span class="cap-label">Localized Thinning:</span> Detects zones above threshold (procedure dependent)</li>
                        <li><span class="cap-label">Pitting:</span> Detectability depends on pit size/cluster and setup</li>
                        <li><span class="cap-label">Erosion/FAC:</span> Effective for mapping wastage zones</li>
                        <li><span class="cap-label">Denting/Deformation:</span> Detectable when it affects signal response</li>
                        <li><span class="cap-label">Cracking:</span> Limited; use PAUT/ET/RVI where required</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cogs"></i>
                        <h3>Equipment & Probes</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Instruments:</span> NFT-capable electromagnetic platforms (model per availability)</li>
                        <li><span class="cap-label">Frequency Range:</span> Low frequency selection per procedure</li>
                        <li><span class="cap-label">Probe Types:</span> Selected to match ID/OD and access</li>
                        <li><span class="cap-label">Temperature:</span> Ambient to elevated (case dependent)</li>
                        <li><span class="cap-label">Drive Systems:</span> Manual / pneumatic / motorised</li>
                        <li><span class="cap-label">QA:</span> Calibration standards and daily verification</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-chart-area"></i>
                        <h3>Data & Reporting</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Outputs:</span> Strip charts / mapping (as applicable)</li>
                        <li><span class="cap-label">Tube Maps:</span> Colour-coded condition classification</li>
                        <li><span class="cap-label">Follow-up:</span> Recommended IRIS/UT on flagged tubes</li>
                        <li><span class="cap-label">Trending:</span> Comparison with prior inspections</li>
                        <li><span class="cap-label">Archive:</span> Digital data retained for review</li>
                        <li><span class="cap-label">Deliverables:</span> Tube-by-tube summary and action list</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-calendar-check"></i>
                        <h3>Service Delivery</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Mobilization:</span> 24–48 hours (project dependent)</li>
                        <li><span class="cap-label">Inspection Rate:</span> Depends on access and tube length</li>
                        <li><span class="cap-label">Crew Size:</span> Scaled to outage scope</li>
                        <li><span class="cap-label">Preliminary:</span> Priority tube list as agreed</li>
                        <li><span class="cap-label">Final Report:</span> Typically within 7–10 days</li>
                        <li><span class="cap-label">Emergency:</span> Support for tube failure investigations</li>
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
                <h2>NFT Inspection Procedure</h2>
                <p>Disciplined workflow to support reliable screening outcomes and actionable decisions</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Planning & Scope Definition</h3>
                        <p>Review drawings, tube metallurgy, failure history and degradation mechanisms (FAC, erosion, fireside corrosion). Define inspection zones, tube selection logic, acceptance thresholds and reporting format aligned to outage needs.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Inspection plan & tube map</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Access & Safety Controls</h3>
                        <p>Coordinate LOTO, access preparation, scaffolding, and confined space controls as required. Confirm tube access points and tube identification/numbering for traceability.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Access readiness checklist</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Calibration & Verification</h3>
                        <p>Calibrate using reference standards representative of tube size/material and known wall-loss conditions. Establish thresholds for classification and confirm repeatability before scanning production tubes.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Calibration sheet & verification scan</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Tube Scanning</h3>
                        <p>Scan tubes at controlled speed. Capture signal response and position reference. Mark and log tubes showing significant indications for priority review and follow-up sizing selection.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Raw data + tube index list</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Analysis & Condition Classification</h3>
                        <p>Analyst reviews results and classifies tubes (e.g., Accept / Monitor / Action Required) based on agreed thresholds. Identify patterns consistent with known mechanisms (FAC zones, erosion near bends/supports, low-temp corrosion areas).</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Condition table + marked tube maps</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Recommendations & Follow-Up Plan</h3>
                        <p>Provide an action list and recommend confirmatory sizing on critical tubes (IRIS/UT). Where applicable, recommend mitigation actions and inspection interval planning based on observed patterns.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Action list + follow-up scope</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">7</div>
                    <div class="timeline-content">
                        <h3>Final Report</h3>
                        <p>Final report includes scope, procedure references, calibration summary, tube-by-tube results, maps, key findings, and recommendations aligned to plant maintenance documentation needs.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Final report package</div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Certifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item"><img src="/www/assets/images/certifications/asnt.png" alt="ASNT"><span>NDT Personnel (Level II/III)</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/epri.png" alt="EPRI"><span>Power Industry Programs (as applicable)</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/nbbi.png" alt="NBBI"><span>Boiler/Pressure Systems (program)</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001"><span>ISO 9001:2015</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/osha.png" alt="OSHA"><span>Safety Training (program)</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your Power Plant Tube Inspection Partner</h2>
                <p>Focused capability for boilers, HRSGs and ferromagnetic tube bundles—delivered to outage timelines</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-fire"></i></div>
                    <h3>Power & Industrial Experience</h3>
                    <p>Experience supporting boiler, HRSG and utility equipment inspections with a focus on practical outcomes: clear tube lists, maps, and decisions that can be executed within outage windows.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-temperature-high"></i></div>
                    <h3>Capability for Challenging Conditions</h3>
                    <p>Procedures and equipment selected for ferromagnetic tubes, variable deposits, and restricted access. Elevated temperature inspection options can be evaluated where safe and applicable.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-users-cog"></i></div>
                    <h3>Qualified Personnel</h3>
                    <p>ASNT Level II personnel supported by Level III oversight. Teams trained to recognise common damage mechanisms and to maintain disciplined calibration and traceability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Trending & Integrity Support</h3>
                    <p>Data archiving and repeat inspection comparisons support wastage rate estimation, prioritised circuit selection, and improved inspection planning for future outages.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-clock"></i></div>
                    <h3>Outage‑Ready Delivery</h3>
                    <p>Multi‑shift execution if required, with phased deliverables so maintenance can act quickly. Preliminary tube lists provided as agreed in the scope.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>Engineering Follow‑Up</h3>
                    <p>Support for confirmatory inspection (IRIS/UT), repair prioritisation, and documentation aligned to your integrity and maintenance program needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Near Field Testing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between NFT and conventional eddy current testing (ECT)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>NFT uses lower frequencies to improve penetration and stability in ferromagnetic tubes (carbon steel/low alloy). Conventional ECT is typically preferred for non‑ferrous tubes (copper alloys, titanium, austenitic stainless). NFT is commonly used for wall‑loss screening in boilers and economizers, while ECT is commonly used for heat exchanger tubes made of non‑ferrous materials.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can NFT differentiate between ID and OD defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>NFT is primarily a wall‑loss screening method and typically has limited ID/OD discrimination. Where surface origin is important for root‑cause or FFS decisions, we recommend follow‑up with IRIS (echo separation) or other suitable techniques based on the tube and service conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does the boiler need to be cool for NFT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection temperature limits depend on probe type, access conditions, and safety requirements. Many inspections are performed during outages at safe access temperatures. For certain applications, elevated temperature inspection may be feasible with suitable probes and controls—this is assessed case‑by‑case during planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is NFT for remaining wall thickness?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>NFT provides calibrated screening and classification. Accuracy depends on calibration, geometry, and defect morphology. Where precise remaining thickness is required for engineering decisions, we recommend confirmatory IRIS/UT on the flagged tubes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What defects can NFT detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>NFT is well suited for detecting and mapping wall‑loss mechanisms such as corrosion and erosion, including FAC‑type thinning zones. Sensitivity to cracking depends on crack orientation and setup; for crack‑driven programs, complementary methods (PAUT/ET/RVI) may be required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is NFT inspection scoped and priced?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Pricing depends on tube count, access complexity (scaffolding/confined space), tube length, deposit condition, and reporting requirements. Share drawings/tube lists and outage schedule—we will propose a practical NFT scope with deliverables and optional confirmatory IRIS/UT plan.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should boiler/economizer tubes be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Interval depends on damage mechanism severity and past results. High‑risk FAC or cycling units may need more frequent screening; lower‑risk units can follow major outage cycles. Trending data is the best basis for setting the interval.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can NFT inspect finned tubes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>NFT is performed from the tube ID, so external fins do not directly block the probe. Feasibility depends on tube ID access, cleanliness for probe travel, and whether the fin attachment influences the response. We confirm suitability during planning and calibration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Reduce Forced Outage Risk with Proactive Tube Screening</h2>
                <p>NFT helps you identify high‑wastage tubes early—so you can repair strategically and restart with confidence</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request NFT Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Ferromagnetic Tube Focus</span>
                    <span><i class="fas fa-check"></i> Outage‑Ready Delivery</span>
                    <span><i class="fas fa-check"></i> Follow‑Up Sizing Support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Tube Inspection Services</h2>
                <p>Complete solutions from screening to precise thickness confirmation</p>
            </div>
            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/eddy-current-tube-testing.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-magnet"></i></div>
                    <h3>Eddy Current (ECT)</h3>
                    <p>ECT for non‑ferromagnetic heat exchanger tubes and detailed electromagnetic assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/iris-tube-testing.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-water"></i></div>
                    <h3>IRIS Testing</h3>
                    <p>Absolute wall thickness measurement for confirmatory sizing on flagged tubes</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-ruler-combined"></i></div>
                    <h3>UT Thickness</h3>
                    <p>Thickness gauging for headers, drums, piping and accessible components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-video"></i></div>
                    <h3>Remote Visual (RVI)</h3>
                    <p>Borescope inspection for tube ID confirmation, deposits and damage verification</p>
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
