<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access Ultrasonic Testing (UT) Services | Industrial Inspection at Height | Alpha Sonix NDT Solutions";
$meta_description = "Professional Rope Access Ultrasonic Testing combining IRATA/SPRAT certified technicians with advanced UT capabilities. Cost-effective thickness gauging, corrosion mapping, and weld inspection for tanks, vessels, towers, offshore platforms, and structures—no scaffolding required. Safe, fast, certified.";
$meta_keywords = "rope access ultrasonic testing, rope access UT, IRATA ultrasonic testing, industrial rope access NDT, tank inspection rope access, tower inspection, offshore rope access UT, corrosion mapping at height, no scaffolding inspection, certified rope access technicians";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-ut.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-ut-og.jpg">

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
            "serviceType": "Rope Access Ultrasonic Testing (UT)",
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
            "description": "Rope Access Ultrasonic Testing combining IRATA/SPRAT certified rope access technicians with advanced UT NDT capabilities for safe, cost-effective inspection of tanks, vessels, towers, offshore platforms, chimneys, and elevated structures without scaffolding or shutdown requirements.",
            "serviceOutput": "Certified inspection reports with thickness data, corrosion maps, weld quality assessment, and structural integrity documentation per ASME, API, and applicable codes."
        }
    </script>
</head>

<body>

<?php include $base . '/includes/top-bar.php'; ?>
<?php include $base . '/includes/header.php'; ?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/rope-access-ut-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="/www/pages/rope-access-services/">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Rope Access UT</span>
            </div>
            <h1 class="page-title">Rope Access Ultrasonic Testing (UT)</h1>
            <p class="page-subtitle">Advanced ultrasonic inspection at height and hard-to-reach locations—IRATA/SPRAT certified technicians deliver thickness gauging, corrosion mapping, and weld inspection without scaffolding, cranes, or production shutdowns</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA / SPRAT Certified</span>
                <span class="badge"><i class="fas fa-hard-hat"></i> Zero Scaffolding Required</span>
                <span class="badge"><i class="fas fa-clock"></i> Fast Mobilization</span>
                <span class="badge"><i class="fas fa-shield-alt"></i> Full Safety Compliance</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-dollar-sign"></i></div>
                <h3>Eliminate Scaffolding Costs</h3>
                <p>Save 40–70% compared to traditional access methods. No scaffolding erection, dismantling, or rental fees. Reduced mobilization time and project duration.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-user-shield"></i></div>
                <h3>Dual-Certified Technicians</h3>
                <p>IRATA/SPRAT Level 2/3 rope access technicians + ASNT Level II UT certification—combining safe work at height expertise with advanced NDT competency in one team.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-industry"></i></div>
                <h3>Minimal Operational Impact</h3>
                <p>Inspect tanks, towers, vessels, and structures while equipment remains in service (where safe). Reduced downtime, faster turnarounds, and flexible scheduling around production needs.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-chart-area"></i></div>
                <h3>Complete UT Capabilities</h3>
                <p>Thickness gauging, corrosion mapping (CML programs), weld inspection (TOFD/PAUT where applicable), flaw detection, and lamination checks—all deliverable via rope access deployment.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS UT ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">ADVANCED ACCESS + PRECISION NDT</span>
                <h2>What is Rope Access Ultrasonic Testing?</h2>

                <p class="lead">Rope Access Ultrasonic Testing combines industrial rope access techniques with ultrasonic NDT methods to inspect elevated, confined, or difficult-to-reach assets safely and cost-effectively—without scaffolding, cranes, or lengthy access construction.</p>

                <p>Our <strong>dual-certified technicians</strong> hold both rope access certifications (IRATA Level 2/3 or SPRAT) and NDT qualifications (ASNT Level II UT), enabling them to perform high-quality ultrasonic inspections while working suspended at height or in complex geometries.</p>

                <p>Rope Access UT is ideal for:</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Storage Tanks & Pressure Vessels</strong>
                            <p>Shell thickness surveys, roof inspections, nozzle/penetration checks, and corrosion monitoring without tank entry or external scaffolding.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Towers, Columns & Reactors</strong>
                            <p>Full external shell surveys, weld integrity checks, CML point measurement, and damage assessment on distillation columns, FCC units, and process towers.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Offshore & Marine Structures</strong>
                            <p>Platform legs, risers, topsides structures, crane pedestals, flare towers—inspected efficiently without costly marine scaffolding or platform downtime.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Chimneys, Stacks & Flare Systems</strong>
                            <p>Refractory-backed shell inspection, corrosion mapping, weld checks on emission stacks, industrial chimneys, and elevated flare support structures.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Bridges, Buildings & Infrastructure</strong>
                            <p>Steel bridge girders, cable-stay anchorages, building facades, industrial mezzanines, and architectural steelwork where conventional access is impractical.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Wind Turbines & Renewable Energy</strong>
                            <p>Tower wall thickness, weld inspection, and fatigue monitoring on wind turbine towers, monopiles, and support structures—reducing downtime and access costs.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access UT is Game-Changing:</strong>
                        <p>Traditional scaffolding can cost ₹50–100 lakhs and take weeks to erect for a single large tank or tower. Rope Access UT eliminates this entirely—our teams mobilize in 24–48 hours, complete inspection in days instead of weeks, and deliver the same (or better) quality data at a fraction of the cost and safety risk.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Get Rope Access UT Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/services/rope-access-technician-ut.jpg" alt="IRATA certified technician performing UT inspection at height">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 technician with ASNT Level II UT certification performing corrosion mapping on storage tank shell—no scaffolding, no shutdown</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">70%</span>
                        <span class="stat-label">Cost Reduction vs Scaffolding</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24-48h</span>
                        <span class="stat-label">Mobilization Time</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Safety Certified Teams</span>
                    </div>
                </div>

                <div class="principle-diagram">
                    <h4><i class="fas fa-project-diagram"></i> Rope Access UT Process</h4>
                    <ul class="principle-list">
                        <li><strong>1.</strong> Site survey & anchor point assessment</li>
                        <li><strong>2.</strong> Rescue plan & safety briefing</li>
                        <li><strong>3.</strong> Rope system installation & load testing</li>
                        <li><strong>4.</strong> Technician descent/positioning</li>
                        <li><strong>5.</strong> UT inspection execution per procedure</li>
                        <li><strong>6.</strong> Data recording & real-time QA</li>
                        <li><strong>7.</strong> System removal & reporting</li>
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
            <span class="section-label">WHY ROPE ACCESS UT</span>
            <h2>Key Advantages Over Traditional Access Methods</h2>
            <p>Safer, faster, cheaper—without compromising inspection quality or code compliance</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-hand-holding-usd"></i></div>
                <h3>Dramatic Cost Savings</h3>
                <p>Eliminate scaffolding material, erection labor, rental fees, and dismantling costs. Typical savings: 40–70% on total project cost. ROI is immediate on tall structures and multi-level assets.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-shipping-fast"></i></div>
                <h3>Rapid Mobilization & Execution</h3>
                <p>Deploy in 24–48 hours vs. weeks for scaffolding. Faster inspection cycles mean shorter outages, earlier production restart, and improved asset availability.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-shield-alt"></i></div>
                <h3>Enhanced Safety Profile</h3>
                <p>Rope Access has statistically lower accident rates than scaffolding (IRATA safety statistics). Redundant fall protection, continuous supervision, and daily equipment checks ensure world-class safety standards.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-cogs"></i></div>
                <h3>Minimal Operational Disruption</h3>
                <p>Many inspections can be performed while equipment is in service (where safe and compliant). No need to isolate entire units or shut down adjacent operations for access construction.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-leaf"></i></div>
                <h3>Reduced Environmental Footprint</h3>
                <p>No heavy machinery, no scaffold materials transport, minimal ground disturbance. Lower carbon footprint, reduced site congestion, and cleaner work environment.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-map-marked-alt"></i></div>
                <h3>Access to Impossible Locations</h3>
                <p>Reach areas where scaffolding is impractical or impossible: overhanging structures, confined spaces, offshore wave zones, suspended piping, and complex geometries that would require specialized rigging.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== COMPARISON TABLE ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ACCESS METHOD COMPARISON</span>
            <h2>Rope Access vs. Scaffolding vs. Crane/Platform Access</h2>
            <p>Side-by-side comparison to help you choose the right access strategy</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th><i class="fas fa-link"></i> Rope Access UT</th>
                        <th><i class="fas fa-hard-hat"></i> Scaffolding + UT</th>
                        <th><i class="fas fa-truck-moving"></i> Crane/Aerial Platform + UT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Mobilization Time</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> 24–48 hours</td>
                        <td class="poor">1–3 weeks</td>
                        <td class="average">2–5 days</td>
                    </tr>
                    <tr>
                        <td><strong>Cost (Relative)</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Low (Baseline)</td>
                        <td class="poor">High (2–3x rope access)</td>
                        <td class="average">Medium to High</td>
                    </tr>
                    <tr>
                        <td><strong>Safety Record</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (IRATA stats)</td>
                        <td class="average">Moderate (falls, collapses)</td>
                        <td class="good">Good (if properly managed)</td>
                    </tr>
                    <tr>
                        <td><strong>Inspection Quality</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (direct contact)</td>
                        <td class="excellent">Excellent (stable platform)</td>
                        <td class="good">Good (vibration/stability issues)</td>
                    </tr>
                    <tr>
                        <td><strong>Access to Complex Areas</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Superior</td>
                        <td class="average">Limited</td>
                        <td class="good">Moderate</td>
                    </tr>
                    <tr>
                        <td><strong>Weather Dependency</strong></td>
                        <td class="average">Moderate (wind limits)</td>
                        <td class="good">Low</td>
                        <td class="poor">High (wind critical)</td>
                    </tr>
                    <tr>
                        <td><strong>Space Requirements</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Minimal</td>
                        <td class="poor">Large footprint</td>
                        <td class="average">Crane staging area needed</td>
                    </tr>
                    <tr>
                        <td><strong>Environmental Impact</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Very Low</td>
                        <td class="poor">High (materials, waste)</td>
                        <td class="average">Moderate (fuel, noise)</td>
                    </tr>
                    <tr>
                        <td><strong>Best For</strong></td>
                        <td>Tall/complex structures, offshore, fast turnarounds</td>
                        <td>Heavy equipment zones, long-duration work</td>
                        <td>Single-point access, heavy tool requirements</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Decision Guide:</strong> For most vertical structures >15m, confined spaces, and offshore/difficult terrain, Rope Access UT delivers the best combination of safety, speed, cost, and quality. Scaffolding may still be preferred for sustained multi-trade work or heavy grinding/welding. Cranes are useful for single-point lifts but become expensive for multi-location surveys.</p>
        </div>
    </div>
</section>

<!-- ===================== UT TECHNIQUES DELIVERABLE VIA ROPE ACCESS ===================== -->
<section class="services-offering">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">UT CAPABILITIES AT HEIGHT</span>
            <h2>Ultrasonic Testing Techniques We Deploy via Rope Access</h2>
            <p>From basic thickness gauging to advanced phased array—full UT scope deliverable suspended at height</p>
        </div>

        <div class="services-grid">
            <div class="service-box">
                <div class="service-number">01</div>
                <h3>Conventional UT Thickness Gauging</h3>
                <p>Single-probe thickness measurement for corrosion monitoring, CML programs, and remaining life assessment on shells, plates, and structural members.</p>
                <ul>
                    <li>API 510/570/653 thickness survey programs</li>
                    <li>Tank floor/shell/roof scanning</li>
                    <li>Pipe and vessel wall measurement</li>
                    <li>Real-time data logging (Bluetooth/tablet)</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">02</div>
                <h3>Corrosion Mapping & Scanning</h3>
                <p>High-density thickness data acquisition using automated/semi-automated scanners to create detailed corrosion maps and identify localized thinning zones.</p>
                <ul>
                    <li>C-scan imaging for tank shells/roofs</li>
                    <li>Gridded CML expansion programs</li>
                    <li>Thinning rate trending over time</li>
                    <li>3D visualization and reporting</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">03</div>
                <h3>Weld Inspection (TOFD / PAUT)</h3>
                <p>Advanced ultrasonic weld inspection using Time-of-Flight Diffraction (TOFD) and Phased Array UT (PAUT) for crack detection, lack of fusion, and weld quality assessment.</p>
                <ul>
                    <li>ASME Sec VIII / B31.3 weld acceptance</li>
                    <li>Crack sizing and through-wall extent</li>
                    <li>No radiography required (safer, faster)</li>
                    <li>Digital archiving for future comparison</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">04</div>
                <h3>Flaw Detection & Characterization</h3>
                <p>Detection and sizing of internal flaws such as laminations, inclusions, porosity, and crack-like defects in plates, forgings, and structural components.</p>
                <ul>
                    <li>Lamination checks in plate materials</li>
                    <li>Subsurface defect detection</li>
                    <li>Fitness-for-Service support</li>
                    <li>Metallurgical defect screening</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">05</div>
                <h3>High-Temperature UT (HTHA Screening)</h3>
                <p>Specialized UT techniques for high-temperature hydrogen attack (HTHA) screening in refinery and petrochemical pressure equipment operating in susceptible services.</p>
                <ul>
                    <li>API 941 HTHA screening programs</li>
                    <li>Backwall signal attenuation analysis</li>
                    <li>Velocity measurements (where applicable)</li>
                    <li>Risk-based inspection (RBI) support</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">06</div>
                <h3>Structural Integrity & Bolting UT</h3>
                <p>Ultrasonic testing of structural steel connections, welds, and bolt load/length measurement for critical fasteners in towers, platforms, and support structures.</p>
                <ul>
                    <li>Bolt tension/elongation measurement</li>
                    <li>Structural weld integrity checks</li>
                    <li>Anchor bolt/foundation inspection</li>
                    <li>Wind turbine bolt monitoring</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ROPE ACCESS UT APPLICATIONS</span>
            <h2>Industries & Assets We Serve</h2>
            <p>From oil & gas to power generation, offshore to infrastructure—wherever UT is needed at height</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="tankstorage">Tanks & Storage</button>
                <button class="tab-btn" data-tab="offshore">Offshore & Marine</button>
                <button class="tab-btn" data-tab="towers">Towers & Columns</button>
                <button class="tab-btn" data-tab="infrastructure">Infrastructure</button>
                <button class="tab-btn" data-tab="renewable">Renewable Energy</button>
            </div>

            <div class="tabs-content">
                <!-- Tanks & Storage Tab -->
                <div class="tab-panel active" id="tankstorage">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/rope-access-tank-inspection.jpg" alt="Rope access UT inspection on large storage tank">
                        </div>
                        <div class="tab-text">
                            <h3>Storage Tank & Pressure Vessel Inspection</h3>
                            <p>API 653 tank inspections, API 510 pressure vessel surveys, and FFS assessments performed safely via rope access—reducing shutdown time and eliminating scaffolding costs entirely.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Above-ground Storage Tanks (AST):</strong> Shell courses, roof plates, nozzles, appurtenances—full external surveys per API 653 Annex G requirements</li>
                                <li><i class="fas fa-check"></i> <strong>Floating Roof Tanks:</strong> Pontoon/double-deck inspections, seal area checks, center deck access—all via rope techniques</li>
                                <li><i class="fas fa-check"></i> <strong>Spheres & Spheroids (LPG/Ammonia):</strong> Shell thickness surveys, equator weld checks, support saddle inspections—safe access without full scaffolding envelopment</li>
                                <li><i class="fas fa-check"></i> <strong>Pressure Vessels & Reactors:</strong> External shell thickness, head inspections, nozzle integrity, and CML point verification on operating or idle vessels</li>
                                <li><i class="fas fa-check"></i> <strong>Bullet Tanks & Horizontal Vessels:</strong> Saddle support areas, longitudinal weld inspection, and corrosion under insulation (CUI) screening access points</li>
                                <li><i class="fas fa-check"></i> <strong>Cryogenic & Low-Temperature Tanks:</strong> LNG, ethylene, ammonia tanks—outer shell inspection without disturbing insulation systems</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <strong>Real-World Impact:</strong>
                                    <p>A 60m diameter crude storage tank requiring scaffolding would cost ₹80+ lakhs and 3–4 weeks setup. Our rope access team completed full API 653 UT shell survey in 4 days at 35% of the cost—tank remained in service throughout.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards & Codes:</strong>
                                <span class="standard-tag">API 653</span>
                                <span class="standard-tag">API 510</span>
                                <span class="standard-tag">API 570</span>
                                <span class="standard-tag">ASME Sec VIII</span>
                                <span class="standard-tag">API 579 (FFS)</span>
                                <span class="standard-tag">NFPA 30</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offshore & Marine Tab -->
                <div class="tab-panel" id="offshore">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/rope-access-offshore-platform.jpg" alt="Offshore platform rope access UT inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Platform & Marine Structure Inspection</h3>
                            <p>Certified offshore rope access teams (OPITO/IRATA offshore modules) deliver UT inspection on platforms, FPSOs, risers, and subsea structures—maximizing uptime and eliminating costly marine scaffolding.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Platform Legs & Jacket Structures:</strong> Thickness surveys, weld integrity, splash zone corrosion monitoring, node inspections</li>
                                <li><i class="fas fa-check"></i> <strong>Topsides Structures & Modules:</strong> Process vessel shells, structural steel, crane pedestals, helideck support frames</li>
                                <li><i class="fas fa-check"></i> <strong>Risers & Pipeline Supports:</strong> Riser wall thickness, weld inspection, clamp integrity, subsea tie-in verification (where accessible)</li>
                                <li><i class="fas fa-check"></i> <strong>Flare Towers & Boom Structures:</strong> Full external surveys without platform shutdown or weather-dependent marine cranes</li>
                                <li><i class="fas fa-check"></i> <strong>FPSO & FSO Hull Inspections:</strong> Topside tank inspections, structural member checks, confined space access for internal surveys (combined with rope access + confined space protocols)</li>
                                <li><i class="fas fa-check"></i> <strong>Wind Turbine Foundations (Offshore):</strong> Monopile/jacket wall thickness, weld fatigue monitoring, transition piece inspections</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-ship"></i>
                                <div>
                                    <strong>Offshore Advantage:</strong>
                                    <p>Marine scaffolding requires vessel support, weather windows, and costs USD 50K+ per structure. Rope Access UT mobilizes via platform supply vessel, works in 4–6m sea states, and delivers inspection data 70% faster with dramatically lower marine support costs.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards & Codes:</strong>
                                <span class="standard-tag">API RP 2A</span>
                                <span class="standard-tag">ISO 19902</span>
                                <span class="standard-tag">NORSOK M-501</span>
                                <span class="standard-tag">DNV Standards</span>
                                <span class="standard-tag">OPITO (offshore safety)</span>
                                <span class="standard-tag">IRATA Offshore Module</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Towers & Columns Tab -->
                <div class="tab-panel" id="towers">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/rope-access-distillation-column.jpg" alt="Rope access UT on distillation tower">
                        </div>
                        <div class="tab-text">
                            <h3>Process Towers, Columns & Reactors</h3>
                            <p>Refinery and petrochemical towers often exceed 50–80m height. Rope Access UT enables complete shell surveys, CML programs, and weld inspection without massive scaffolding structures or extended unit shutdowns.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Distillation Columns:</strong> Complete shell thickness mapping, tray support ring welds, manway/nozzle integrity, skirt-to-shell junction inspection</li>
                                <li><i class="fas fa-check"></i> <strong>FCC Reactors & Regenerators:</strong> Refractory-backed shell UT (where accessible), external CUI screening, structural support checks</li>
                                <li><i class="fas fa-check"></i> <strong>Absorbers & Strippers:</strong> Amine contactors, sulphur recovery units, acid gas columns—full external UT surveys during turnarounds</li>
                                <li><i class="fas fa-check"></i> <strong>Fractionators & Splitters:</strong> High-temperature service towers requiring HTHA screening, weld integrity, and thickness trending</li>
                                <li><i class="fas fa-check"></i> <strong>Chimney & Emission Stacks:</strong> Steel chimney shells, liner attachment welds, access platform support welds, corrosion under insulation zones</li>
                                <li><i class="fas fa-check"></i> <strong>Cooling Towers & Water Treatment:</strong> Steel support structures, basin walls, piping supports—access via rope techniques where conventional methods fail</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-clipboard-check"></i> Case Study: Refinery Crude Column Survey</h4>
                                <p><strong>Challenge:</strong> 65m tall crude distillation column requiring API 510 thickness survey. Scaffolding quote: ₹1.2 crore + 5 weeks erection.</p>
                                <p><strong>Solution:</strong> Deployed 4-member IRATA + UT team. Completed 100% shell survey, 850 CML points, all circumferential weld TOFD scans in 6 days.</p>
                                <p><strong>Result:</strong> Total cost ₹42 lakhs. Zero operational disruption. Findings delivered in real-time for immediate FFS assessment.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards & Codes:</strong>
                                <span class="standard-tag">API 510</span>
                                <span class="standard-tag">API 570</span>
                                <span class="standard-tag">ASME B31.3</span>
                                <span class="standard-tag">API 579 (FFS)</span>
                                <span class="standard-tag">API 941 (HTHA)</span>
                                <span class="standard-tag">NBIC (where applicable)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Infrastructure Tab -->
                <div class="tab-panel" id="infrastructure">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/rope-access-bridge-inspection.jpg" alt="Bridge girder UT inspection via rope access">
                        </div>
                        <div class="tab-text">
                            <h3>Bridges, Buildings & Civil Infrastructure</h3>
                            <p>Rope Access UT provides safe, efficient inspection of steel bridges, building facades, transmission towers, and industrial structures where traditional access methods are prohibitively expensive or disruptive.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Steel Bridges:</strong> Girder thickness, weld integrity, box section internal/external surveys, cable anchorages, bearing plate inspections</li>
                                <li><i class="fas fa-check"></i> <strong>Suspension & Cable-Stay Bridges:</strong> Tower wall thickness, cable anchorage welds, saddle/pier inspections—all without lane closures or under-bridge scaffolding</li>
                                <li><i class="fas fa-check"></i> <strong>Transmission Towers & Pylons:</strong> High-voltage tower leg inspections, weld fatigue checks, corrosion monitoring in foundation zones</li>
                                <li><i class="fas fa-check"></i> <strong>Building Facades & Curtain Walls:</strong> Steel frame integrity, cladding attachment welds, structural bolting verification</li>
                                <li><i class="fas fa-check"></i> <strong>Industrial Mezzanines & Platforms:</strong> Steel deck thickness, support beam welds, handrail/stair connections—safe access without production shutdown</li>
                                <li><i class="fas fa-check"></i> <strong>Conveyor Support Structures:</strong> Mining, cement, power plants—elevated conveyor galleries, transfer tower structures, and support frames</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-road"></i>
                                <div>
                                    <strong>Public Infrastructure Benefit:</strong>
                                    <p>Road/rail bridge inspection via rope access eliminates need for lane closures, traffic diversions, and under-bridge scaffolding—reducing inspection cost by 60% and eliminating public inconvenience. Work can be performed during off-peak hours with minimal traffic management.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards & Codes:</strong>
                                <span class="standard-tag">AASHTO Bridge Specs</span>
                                <span class="standard-tag">IRC (Indian Roads)</span>
                                <span class="standard-tag">IS 800 (Steel Structures)</span>
                                <span class="standard-tag">BS 5950 / EN 1993</span>
                                <span class="standard-tag">ASTM A6 / A36</span>
                                <span class="standard-tag">Local Authority Codes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Renewable Energy Tab -->
                <div class="tab-panel" id="renewable">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/rope-access-wind-turbine-ut.jpg" alt="Wind turbine tower UT inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Wind Turbines & Renewable Energy Infrastructure</h3>
                            <p>Wind turbine towers, solar tracking structures, and biomass facilities require regular integrity checks. Rope Access UT delivers safe, cost-effective inspection without crane hire or turbine downtime.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Wind Turbine Towers:</strong> Shell thickness surveys (door frame fatigue zones), circumferential weld TOFD, flange bolt UT, base plate inspections</li>
                                <li><i class="fas fa-check"></i> <strong>Offshore Wind Monopiles:</strong> Transition piece welds, J-tube supports, boat landing structures, internal/external corrosion monitoring</li>
                                <li><i class="fas fa-check"></i> <strong>Nacelle & Hub Access:</strong> Mainframe welds, yaw bearing mounts, blade root inspections (combined rope + confined space techniques)</li>
                                <li><i class="fas fa-check"></i> <strong>Met Masts & Measurement Towers:</strong> Full structural integrity surveys for wind farm monitoring infrastructure</li>
                                <li><i class="fas fa-check"></i> <strong>Solar Plant Structures:</strong> Tracker support frames, elevated cable trays, inverter enclosure supports—rapid inspection without ground disturbance</li>
                                <li><i class="fas fa-check"></i> <strong>Biomass & Waste-to-Energy:</strong> Elevated hoppers, chutes, conveyor structures, gasifier vessels—all accessible via rope techniques</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-wind"></i>
                                <div>
                                    <strong>Wind Farm Efficiency:</strong>
                                    <p>Crane hire for single turbine tower inspection: ₹8–12 lakhs per day. Our rope access team inspects 3–4 turbine towers per day at total mobilization cost equivalent to one crane day—dramatically improving wind farm O&M economics.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards & Codes:</strong>
                                <span class="standard-tag">IEC 61400-1</span>
                                <span class="standard-tag">DNV-ST-0437</span>
                                <span class="standard-tag">GL Wind (Germanischer Lloyd)</span>
                                <span class="standard-tag">ISO 12494 (icing)</span>
                                <span class="standard-tag">GWO (training)</span>
                                <span class="standard-tag">IRATA Wind Module</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ===================== SAFETY & CERTIFICATIONS ===================== -->
<section class="capabilities-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">SAFETY FIRST. ALWAYS.</span>
            <h2>Rope Access Safety & Certification Standards</h2>
            <p>Our dual-certified teams operate to the world's highest rope access and NDT standards</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-certificate"></i>
                    <h3>Rope Access Certifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">IRATA Level 3:</span> Team supervisors & rescue coordinators</li>
                    <li><span class="cap-label">IRATA Level 2:</span> Lead technicians & UT inspectors</li>
                    <li><span class="cap-label">SPRAT Certification:</span> Available for US/international projects</li>
                    <li><span class="cap-label">OPITO Modules:</span> Offshore-specific training & certification</li>
                    <li><span class="cap-label">IRATA Offshore:</span> Platform/marine-specific rope work certification</li>
                    <li><span class="cap-label">GWO (Wind):</span> Wind turbine-specific rope access & rescue</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-check"></i>
                    <h3>NDT Qualifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">ASNT Level II UT:</span> All rope access UT technicians certified</li>
                    <li><span class="cap-label">ASNT Level III:</span> Engineering support & procedure approval</li>
                    <li><span class="cap-label">PCN / CSWIP:</span> Available for international/European projects</li>
                    <li><span class="cap-label">PAUT / TOFD:</span> Advanced UT technique certification</li>
                    <li><span class="cap-label">Manufacturer Training:</span> Olympus, GE, Sonatest equipment</li>
                    <li><span class="cap-label">API 510/570/653:</span> Inspector understanding & collaboration</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-hard-hat"></i>
                    <h3>Safety Training & Compliance</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Confined Space:</span> Entry supervisor & attendant training</li>
                    <li><span class="cap-label">H2S Awareness:</span> For refinery/sour service environments</li>
                    <li><span class="cap-label">Fire Watch:</span> Hot work permit & fire prevention</li>
                    <li><span class="cap-label">First Aid / CPR:</span> Wilderness & industrial first response</li>
                    <li><span class="cap-label">Rescue Training:</span> Advanced rope rescue & casualty evacuation</li>
                    <li><span class="cap-label">Site-Specific:</span> Client HSE induction & competency verification</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Safety Equipment & Systems</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Systems:</span> Petzl, Singing Rock, Kong—EN 1891 certified</li>
                    <li><span class="cap-label">Harnesses:</span> Full-body fall arrest, EN 361/ANSI Z359 certified</li>
                    <li><span class="cap-label">Descenders/Ascenders:</span> EN 12841 self-rescue devices</li>
                    <li><span class="cap-label">Anchors:</span> Engineered anchor points, load tested to 23kN+</li>
                    <li><span class="cap-label">Rescue Kits:</span> On-site rescue stretchers & evacuation systems</li>
                    <li><span class="cap-label">Inspection:</span> Pre-use checks, monthly audits, annual retirement</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-clipboard-check"></i>
                    <h3>Planning & Risk Assessment</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Site Survey:</span> Pre-job anchor assessment & hazard ID</li>
                    <li><span class="cap-label">Job Hazard Analysis:</span> Task-specific risk identification</li>
                    <li><span class="cap-label">Rescue Plan:</span> Written rescue procedure for every job</li>
                    <li><span class="cap-label">Weather Monitoring:</span> Wind speed limits, lightning protocol</li>
                    <li><span class="cap-label">Permit Integration:</span> Work permit, LOTO, confined space coordination</li>
                    <li><span class="cap-label">Toolbox Talks:</strong> Daily safety briefings & two-way communication</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-file-contract"></i>
                    <h3>Insurance & Liability</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Public Liability:</span> ₹50 crore+ coverage</li>
                    <li><span class="cap-label">Professional Indemnity:</span> NDT errors & omissions coverage</li>
                    <li><span class="cap-label">Workmen's Compensation:</span> Full statutory compliance</li>
                    <li><span class="cap-label">Equipment Insurance:</span> All rope & NDT equipment covered</li>
                    <li><span class="cap-label">Offshore Add-On:</span> Marine & offshore-specific coverage</li>
                    <li><span class="cap-label">Certificates:</span> Provided upon request for client files</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== INSPECTION PROCEDURE ===================== -->
<section class="procedure-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">PROVEN WORKFLOW</span>
            <h2>Rope Access UT Inspection Procedure</h2>
            <p>From mobilization to reporting—a disciplined, safety-first process that delivers quality results on time</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Pre-Job Planning & Site Survey</h3>
                    <p>Review drawings, identify inspection locations (CMLs, weld maps), assess anchor points, identify hazards (H2S, confined space, electrical), and develop site-specific work plan, rescue plan, and UT procedure aligned to applicable code (API 510/653, ASME Sec V).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Job Hazard Analysis (JHA), Rescue Plan, UT Procedure, Equipment List
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Mobilization & Safety Briefing</h3>
                    <p>Deploy certified team (IRATA + UT), conduct client HSE induction, toolbox talk covering job scope, rescue procedures, weather limits, and communication protocols. Verify work permits (height work, hot work if applicable, confined space, LOTO).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Signed Toolbox Talk, Permit-to-Work, Team Competency Records
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>Anchor Installation & Load Testing</h3>
                    <p>Install engineered anchor points (structural anchors, slings, or existing certified points). Load test all anchors to minimum 23kN per IRATA/SPRAT standards. Establish primary and backup rope systems with rescue capability verified before any technician descends.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Anchor Load Test Records, Rope System Inspection Checklist
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>UT Equipment Calibration & Verification</h3>
                    <p>Calibrate UT equipment using certified reference blocks (per ASTM E164/E317 or equivalent). Verify thickness gauges, TOFD/PAUT systems, and data loggers. Document settings, calibration standards, and environmental conditions (temperature compensation where required).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> UT Calibration Records, Reference Block Certificates
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>Inspection Execution (Rope Access + UT)</h3>
                    <p>Technician descends/ascends to inspection locations using controlled rope systems. Perform UT measurements per procedure: thickness gauging, corrosion mapping, weld scanning (TOFD/PAUT), or flaw detection. Data logged in real-time to tablet/logger. Continuous supervision by Level 3 rope access supervisor and Level III UT oversight (remote/periodic).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Real-Time UT Data, Location Photos, Inspection Log
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>Quality Control & Data Verification</h3>
                    <p>Daily QC review of UT data by Level II/III personnel. Verify data completeness, flag anomalies requiring re-inspection or engineering review. Spot-check calibration stability. Address any access challenges or safety observations before next shift.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> QC Checklist, Daily Progress Report
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">7</div>
                <div class="timeline-content">
                    <h3>Demobilization & Site Closeout</h3>
                    <p>Remove all rope systems, anchors, and equipment. Conduct site walk-down to ensure zero foreign material left behind. Return permits, conduct post-job debrief, and capture lessons learned. Archive rope access logbooks and equipment inspection records per IRATA requirements.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Site Clearance Certificate, Equipment Logbooks
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">8</div>
                <div class="timeline-content">
                    <h3>Final Reporting & Engineering Support</h3>
                    <p>Issue comprehensive inspection report including: scope, personnel qualifications, UT procedure references, calibration records, thickness data tables/maps, weld scan results, findings summary, recommendations (repair/monitor/FFS), and appendices (photos, raw data, rope access certifications).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverable:</strong> Final UT Inspection Report + Digital Data Package (Excel, PDF, proprietary formats as required)
                    </div>
                </div>
            </div>
        </div>

        <div class="certification-showcase">
            <h3>Our Accreditations & Industry Memberships</h3>
            <div class="cert-grid">
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/irata.png" alt="IRATA">
                    <span>IRATA Member Company</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/sprat.png" alt="SPRAT">
                    <span>SPRAT Certified Personnel</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                    <span>ASNT Level II/III NDT</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                    <span>ISO 9001:2015 Certified</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-45001.png" alt="ISO 45001">
                    <span>ISO 45001 (Safety Management)</span>
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
            <h2>India's Premier Rope Access NDT Provider</h2>
            <p>Unmatched combination of rope access expertise, NDT excellence, and industrial experience</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-users"></i></div>
                <h3>Dual-Certified Elite Teams</h3>
                <p>Every rope access UT technician holds both IRATA Level 2/3 AND ASNT Level II UT certification—a rare combination that ensures both safe access and high-quality inspection in one person. No coordination gaps between rope teams and NDT teams.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-industry"></i></div>
                <h3>Deep Industrial Experience</h3>
                <p>We understand refineries, petrochemical complexes, offshore platforms, and power plants. Our teams know the hazards (H2S, flammables, confined spaces), the standards (API, ASME, NORSOK), and the operational constraints (turnaround windows, production priorities).</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-toolbox"></i></div>
                <h3>Advanced UT Equipment Portfolio</h3>
                <p>Olympus Omniscan PAUT/TOFD, ultrasonic thickness gauges (Olympus 38DL+, GE DM5E), corrosion mapping systems, wireless data loggers—all ruggedized and certified for rope-deployed inspection. Real-time data transmission to ground support for immediate QA.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-shipping-fast"></i></div>
                <h3>Rapid Response & Mobilization</h3>
                <p>Emergency breakdown? Unplanned outage extension? We mobilize rope access UT teams within 24–48 hours anywhere in India. Equipment pre-staged, teams on standby, rescue plans templated—ready when you need us most.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-life-ring"></i></div>
                <h3>Zero-Incident Safety Culture</h3>
                <p>5+ years, 50,000+ rope access hours, zero lost-time incidents. IRATA member company with full safety management system (ISO 45001), daily equipment checks, ongoing rescue drills, and culture of "safety over schedule" embedded at every level.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-file-invoice"></i></div>
                <h3>Transparent Fixed Pricing</h3>
                <p>No hidden costs. Fixed day-rates based on scope, height, and complexity. Detailed cost breakdown provided upfront. Compare our total project cost vs. scaffolding alternative—the ROI is immediate and undeniable.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>Rope Access Ultrasonic Testing FAQs</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is rope access UT inspection as accurate as scaffolding-based UT?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Yes—inspection quality is identical or better.</strong> Our technicians use the same ASNT-certified UT procedures, calibrated equipment, and code requirements whether working from scaffolding, a platform, or suspended on rope. The rope access method only changes how we reach the inspection point—not how we perform the NDT. In fact, rope access often provides better surface contact and positioning flexibility than working from scaffolding platforms with guardrails and obstructions.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What are the height and weather limitations for rope access UT?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Height:</strong> No practical upper limit. We've performed rope access UT on structures >100m. <strong>Weather:</strong> Wind speed >10 m/s (36 km/h) typically suspends work for safety. Rain is generally acceptable if UT coupling remains effective and visibility/safety are maintained. Lightning within 10km triggers immediate evacuation. We monitor weather continuously and adjust schedule proactively to maximize productivity within safe limits.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much can we really save vs. scaffolding?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Typical savings: 40–70% on total access + inspection cost.</strong> Example: 50m tall tank requiring full shell survey. Scaffolding: ₹80 lakhs (erection ₹60L + rental ₹10L + dismantling ₹10L) + 4 weeks schedule. Rope Access UT: ₹25 lakhs all-in + 5 days schedule. Savings = ₹55 lakhs + 3 weeks production time. For multiple structures or annual programs, ROI compounds dramatically.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you perform rope access UT while our equipment is running?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Often yes—subject to safety assessment.</strong> External shell UT surveys, visual inspection, and weld checks can frequently be performed on operating equipment (tanks, vessels, towers) if: (1) Surface temperature allows safe contact/work, (2) No flammable atmosphere externally, (3) Vibration/movement within acceptable limits, (4) Client safety procedures permit. We coordinate with operations to define safe work envelopes. This capability enables condition monitoring without shutdown, drastically reducing operational impact.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What certifications/qualifications do your rope access UT technicians hold?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Dual certification is standard:</strong> (1) <strong>Rope Access:</strong> IRATA Level 2 or Level 3 (minimum Level 2 for UT work, Level 3 for supervision). (2) <strong>NDT:</strong> ASNT Level II Ultrasonic Testing per SNT-TC-1A or equivalent (PCN/CSWIP for international projects). (3) <strong>Additional:</strong> Confined space, H2S awareness, first aid, client-specific HSE training. All certifications are current and verified—copies provided upon request for prequalification/vendor approval.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you provide rescue capability on every rope access job?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Yes—mandatory per IRATA standards.</strong> Every job has: (1) Written rescue plan specific to the site/structure, (2) Minimum 3-person team (1 inspector + 1 safety/backup + 1 ground supervisor), (3) On-site rescue equipment (stretcher, haul systems, first aid), (4) Rescue drill performed before job start, (5) Emergency contact protocol with local EMS. Rescue capability is non-negotiable—it's built into every rope access deployment, every time.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can rope access UT be combined with other NDT methods?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Absolutely—multi-method inspections maximize efficiency.</strong> Common combinations: <strong>UT + PT</strong> (thickness + crack detection), <strong>UT + VT</strong> (thickness + visual/photographic documentation), <strong>UT + PAUT</strong> (thickness + weld integrity), <strong>UT + coating inspection</strong> (remaining wall + coating condition assessment). Deploying multiple methods via one rope access mobilization delivers comprehensive asset data in a single campaign, dramatically improving cost-effectiveness vs. multiple access buildups.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you handle data recording and reporting at height?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p><strong>Real-time digital data capture.</strong> Technicians use: (1) <strong>UT data loggers</strong> (Olympus, GE) with Bluetooth/WiFi transmission to ground-based QA station, (2) <strong>Tablets with GPS/photo tagging</strong> for location documentation, (3) <strong>Voice communication</strong> (two-way radio) for findings discussion with ground engineer, (4) <strong>Cloud upload</strong> (where connectivity available) for client remote monitoring. Data backed up daily. Final report includes all raw data, calibration records, photos, and traceability per API/ASME requirements—same quality as ground-based inspection, delivered faster.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Stop Paying for Scaffolding. Start Inspecting Smarter.</h2>
            <p>Get a free rope access feasibility assessment and cost comparison for your next tank, tower, or offshore inspection project</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Free Feasibility Study</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> IRATA/SPRAT + ASNT Certified Teams</span>
                <span><i class="fas fa-check"></i> 24-48 Hour Mobilization</span>
                <span><i class="fas fa-check"></i> 40-70% Cost Savings Guaranteed</span>
                <span><i class="fas fa-check"></i> Zero Scaffolding. Zero Compromise.</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Complete Rope Access NDT Solutions</h2>
            <p>We deploy the full NDT toolkit via rope access—one team, one mobilization, comprehensive data</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-visual-inspection.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access VT</h3>
                <p>Visual inspection, photography, RVI, coating condition surveys—documented per API/NACE standards</p>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-pt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-tint"></i></div>
                <h3>Rope Access PT/MT</h3>
                <p>Surface crack detection via dye penetrant or magnetic particle testing on welds and structural components</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-paut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access PAUT</h3>
                <p>Phased Array UT for weld inspection, corrosion mapping, and flaw detection—deployed at height</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-rvi.php" class="related-card">
                <div class="related-icon"><i class="fas fa-video"></i></div>
                <h3>Rope Access RVI</h3>
                <p>Remote visual inspection with videoscopes, borescopes, and HD cameras for internal/confined areas</p>
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