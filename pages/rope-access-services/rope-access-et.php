<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access Eddy Current Testing (ET) Services | IRATA Certified High-Altitude Electromagnetic NDT | Alpha Sonix NDT Solutions";
$meta_description = "IRATA/SPRAT certified rope access eddy current testing (ET) for heat exchangers, tube bundles, aircraft structures, storage tanks and conductive materials at height. Multi-frequency electromagnetic inspection detects surface and subsurface cracks, corrosion and material loss without scaffolding. ASME Section V Article 8 compliant.";
$meta_keywords = "rope access eddy current testing, rope access ET, IRATA eddy current inspection, high altitude ET testing, heat exchanger tube inspection at height, rope access tube testing, electromagnetic testing at height, scaffolding-free ET, offshore eddy current testing, aircraft inspection rope access";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-et.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-et-og.jpg">

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
            "serviceType": "Rope Access Eddy Current Testing (ET)",
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
            "description": "IRATA/SPRAT certified rope access eddy current testing for electromagnetic inspection of heat exchanger tubes, aircraft structures, storage tanks and conductive materials at height. Multi-frequency ET capabilities detect surface and subsurface defects without scaffolding costs. ASME Section V Article 8 compliant procedures.",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Rope Access ET Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Offshore Heat Exchanger Tube Testing"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Aircraft Structure Crack Detection"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Industrial Condenser Tube Inspection"
                        }
                    }
                ]
            }
        }
    </script>
</head>

<body>

<?php include $base . '/includes/top-bar.php'; ?>
<?php include $base . '/includes/header.php'; ?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/rope-access/rope-access-et-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Rope Access ET</span>
            </div>
            <h1 class="page-title">Rope Access Eddy Current Testing (ET)</h1>
            <p class="page-subtitle">IRATA/SPRAT certified rope access electromagnetic inspection for heat exchanger tubes, aircraft structures, storage tanks and conductive materials at height—multi-frequency crack detection without scaffolding delays or production shutdowns</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA Level 3 + ASNT Level II ET</span>
                <span class="badge"><i class="fas fa-broadcast-tower"></i> Multi-Frequency Capability</span>
                <span class="badge"><i class="fas fa-layer-group"></i> Surface + Subsurface Detection</span>
                <span class="badge"><i class="fas fa-coins"></i> 65% Cost Savings vs Scaffolding</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-magnet"></i></div>
                <h3>Electromagnetic Precision at Height</h3>
                <p>Detect surface cracks, subsurface corrosion, material loss and conductivity changes in aluminum, copper, titanium, stainless steel and ferromagnetic materials using advanced multi-frequency eddy current arrays and pencil probes.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-water"></i></div>
                <h3>Heat Exchanger Tube Testing Without Shutdown</h3>
                <p>Inspect elevated heat exchanger tube bundles, condensers and air-cooled heat exchangers (ACHE) at height without process shutdown, scaffolding erection or crane rental—reducing outage duration by 50-70%.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-plane"></i></div>
                <h3>Aircraft & Aerospace Structures</h3>
                <p>FAA/EASA-compliant eddy current inspection of aircraft fuselage, wing structures, landing gear and engine components accessed via rope systems—supporting MRO facilities, airlines and aerospace manufacturers.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Dual-Certified Safety & Quality</h3>
                <p>IRATA Level 3 rope access supervisors with ASNT Level II/III Eddy Current certification ensure code-compliant electromagnetic testing delivered with zero-incident safety performance and real-time digital reporting.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS ET ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">ELECTROMAGNETIC NDT AT HEIGHT</span>
                <h2>What is Rope Access Eddy Current Testing?</h2>

                <p class="lead">Rope Access Eddy Current Testing integrates IRATA/SPRAT industrial rope access techniques with ASME Section V Article 8 electromagnetic inspection methods to deliver rapid, cost-effective detection of surface and near-surface discontinuities in conductive materials located at height or in difficult-to-access locations.</p>

                <p>Eddy current testing uses electromagnetic induction to detect cracks, corrosion, material thinning, heat damage and conductivity variations in non-ferromagnetic metals (aluminum, copper alloys, titanium, austenitic stainless steel) and—with specialized techniques—ferromagnetic materials (carbon steel, martensitic stainless).</p>

                <p>Traditional ET inspection of elevated structures requires expensive scaffolding, aerial work platforms or production shutdowns. <strong>Rope access eliminates these constraints</strong> by positioning dual-certified technicians (IRATA + ASNT ET Level II) directly at inspection locations using rope systems—delivering the same electromagnetic testing quality at a fraction of traditional access costs.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Multi-Frequency Inspection Capability</strong>
                            <p>Single-frequency pencil probes for crack detection, multi-frequency arrays for tube inspection, and pulsed eddy current (PEC) for through-insulation corrosion mapping—technique selection optimized for material, geometry and defect type.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Surface & Subsurface Detection</strong>
                            <p>Conventional ET detects surface-breaking cracks to ~6mm depth. Pulsed EC and low-frequency techniques penetrate deeper for hidden corrosion under coatings, CUI (corrosion under insulation) and multilayer material inspection.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>No Surface Preparation Required</strong>
                            <p>Unlike PT/MT, eddy current testing works through thin coatings, anodizing and light corrosion products—reducing prep time and enabling in-service inspection of painted structures (technique dependent).</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Real-Time Digital Data & C-Scan Imaging</strong>
                            <p>Advanced ET instruments provide immediate defect indication with C-scan mapping, depth sizing and digital storage—enabling same-day engineering decisions and trending across inspection intervals.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access ET Matters:</strong>
                        <p>Offshore platforms, petrochemical plants, aircraft hangers and power stations contain thousands of heat exchanger tubes, aluminum structures and non-ferromagnetic piping at elevations of 20-100+ meters. Rope access ET delivers electromagnetic inspection quality equivalent to ground-level testing—but at 50-70% lower cost, 3-5x faster mobilization, and zero production interruption.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request Rope Access ET Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/rope-access/rope-access-et-inspection.jpg" alt="IRATA technician performing rope access eddy current tube testing on offshore heat exchanger">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 technician conducting multi-frequency eddy current tube testing on offshore platform heat exchanger at 35m elevation</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">0.1mm</span>
                        <span class="stat-label">Minimum Crack Detection</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">6mm</span>
                        <span class="stat-label">Subsurface Penetration</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">65%</span>
                        <span class="stat-label">Cost Reduction vs Scaffold</span>
                    </div>
                </div>

                <div class="system-types">
                    <h4><i class="fas fa-cogs"></i> ET Probe Technologies Available</h4>
                    <div class="system-type-grid">
                        <div class="system-type-item">
                            <i class="fas fa-pencil-alt"></i>
                            <span>Pencil Probes (Surface Cracks)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-grip-horizontal"></i>
                            <span>Array Probes (Coverage + Speed)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-circle"></i>
                            <span>Bobbin Probes (Tube ID Inspection)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-sync-alt"></i>
                            <span>Rotating Probes (Crack Orientation)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-wave-square"></i>
                            <span>Pulsed EC (Through Insulation)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-magnet"></i>
                            <span>RFEC (Ferromagnetic Materials)</span>
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
            <span class="section-label">WHY CHOOSE ROPE ACCESS ET</span>
            <h2>Key Advantages Over Traditional Access Methods</h2>
            <p>Speed, sensitivity, cost-efficiency and minimal operational disruption</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-dollar-sign"></i></div>
                <h3>Eliminate Scaffolding & Crane Costs</h3>
                <p>Typical offshore heat exchanger ET inspection: $950K using marine scaffolding vs $280K via rope access (70% saving). Onshore savings: 50-65% for structures above 20m height. ROI improves dramatically with project complexity and elevation.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Rapid Deployment & Inspection Speed</h3>
                <p>Mobilize rope access ET teams in 24-48 hours vs 2-4 weeks for scaffolding erection. Inspect 200-400 heat exchanger tubes per shift using multi-frequency arrays—3-5x faster than conventional access methods enable.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-industry"></i></div>
                <h3>Inspect Operating Equipment (No Shutdown)</h3>
                <p>Perform ET on live heat exchangers, operating storage tanks and in-service piping without process interruption—provided temperature limits (typically <150°C for conventional probes) and safety clearances are maintained.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-search-plus"></i></div>
                <h3>Superior Crack Detection Sensitivity</h3>
                <p>Multi-frequency ET detects tight fatigue cracks (0.1mm opening), stress corrosion cracking (SCC), intergranular corrosion and microstructural changes invisible to visual inspection—preventing catastrophic failures in critical aerospace and petrochemical assets.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-layer-group"></i></div>
                <h3>Through-Coating & Subsurface Inspection</h3>
                <p>Pulsed eddy current (PEC) detects corrosion under insulation (CUI), hidden corrosion beneath coatings up to 100mm thick, and multilayer aircraft structure inspection—without removing protective systems or insulation blankets.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-database"></i></div>
                <h3>Digital Data Storage & Trending</h3>
                <p>All ET scans recorded digitally with GPS location tagging, C-scan imaging and historical comparison capability. Track corrosion progression, fatigue crack growth and material degradation across inspection intervals—supporting predictive maintenance and RBI programs.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ET TECHNIQUE COMPARISON ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">EDDY CURRENT TECHNIQUES</span>
            <h2>ET Method Selection Guide for Rope Access Applications</h2>
            <p>Choose the optimal technique based on material, defect type, accessibility and inspection objective</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th><i class="fas fa-pencil-alt"></i> Conventional ET (Pencil/Array)</th>
                        <th><i class="fas fa-circle"></i> Tube ET (Bobbin/Rotating)</th>
                        <th><i class="fas fa-wave-square"></i> Pulsed Eddy Current (PEC)</th>
                        <th><i class="fas fa-magnet"></i> Remote Field ET (RFET)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Primary Application</strong></td>
                        <td>Surface crack detection on structures</td>
                        <td>Heat exchanger tube inspection</td>
                        <td>Corrosion under insulation (CUI)</td>
                        <td>Ferromagnetic tube testing</td>
                    </tr>
                    <tr>
                        <td><strong>Material Compatibility</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Non-ferrous metals (Al, Cu, Ti, SS)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Non-ferrous tubes (condensers, HX)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Carbon steel, low alloy (CUI focus)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Ferromagnetic tubes (boilers, CS HX)</td>
                    </tr>
                    <tr>
                        <td><strong>Detection Depth</strong></td>
                        <td>Surface to 6mm subsurface</td>
                        <td>Through-wall (tube inspection)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Through 100mm+ insulation</td>
                        <td>Full wall thickness (tubes)</td>
                    </tr>
                    <tr>
                        <td><strong>Crack Orientation Sensitivity</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent with array rotation</td>
                        <td class="average">Limited (bobbin) / Good (rotating probe)</td>
                        <td class="poor">Not for crack detection</td>
                        <td class="average">Limited ID/OD discrimination</td>
                    </tr>
                    <tr>
                        <td><strong>Coating/Insulation Penetration</strong></td>
                        <td class="good">Thin coatings (<0.5mm) only</td>
                        <td class="poor">Requires clean tube ID</td>
                        <td class="excellent"><i class="fas fa-star"></i> Through thick insulation/coatings</td>
                        <td class="good">Moderate coating tolerance</td>
                    </tr>
                    <tr>
                        <td><strong>Inspection Speed (Rope Access)</strong></td>
                        <td class="good">Moderate (manual scanning)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Fast (automated pull-through)</td>
                        <td class="average">Slower (grid scanning required)</td>
                        <td class="good">Moderate (tube-by-tube)</td>
                    </tr>
                    <tr>
                        <td><strong>Best Rope Access Fit</strong></td>
                        <td>Aircraft structures, aluminum tanks, SS piping</td>
                        <td class="excellent"><i class="fas fa-star"></i> Elevated heat exchangers, condensers</td>
                        <td>Insulated piping, storage tanks, pressure vessels</td>
                        <td>Carbon steel economizer tubes, boiler tubes</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Rope Access ET Strategy:</strong> For heat exchanger tube bundles, deploy bobbin probe ET for rapid screening (200-400 tubes/shift) followed by rotating probe confirmation on flagged tubes. For aircraft structures, use array probes with multi-directional scanning to detect cracks regardless of orientation. For CUI screening on insulated piping, pulsed EC eliminates need for insulation removal—reducing inspection duration by 80% vs conventional UT thickness gauging.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ROPE ACCESS ET APPLICATIONS</span>
            <h2>Industries & Asset Types We Serve</h2>
            <p>From offshore oil & gas to aerospace MRO and power generation</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="offshore-hx">Offshore Heat Exchangers</button>
                <button class="tab-btn" data-tab="aircraft">Aircraft & Aerospace</button>
                <button class="tab-btn" data-tab="industrial">Industrial Process Equipment</button>
                <button class="tab-btn" data-tab="storage-tanks">Storage Tanks & Pressure Vessels</button>
            </div>

            <div class="tabs-content">
                <!-- Offshore Heat Exchangers Tab -->
                <div class="tab-panel active" id="offshore-hx">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/offshore-hx-et.jpg" alt="Rope access eddy current tube testing on offshore platform heat exchanger">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Platform Heat Exchanger & Condenser Tube Testing</h3>
                            <p>Offshore platforms operate heat exchangers and condensers in harsh marine environments with limited shutdown windows. Rope access ET enables rapid tube bundle inspection without scaffolding costs, marine logistics or extended downtime—critical for FPSO, fixed platform and floating production operations.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Shell & Tube Heat Exchangers:</strong> Multi-frequency bobbin probe inspection of titanium, copper-nickel, stainless steel and aluminum brass tube bundles (500-5000 tubes per unit)</li>
                                <li><i class="fas fa-check"></i> <strong>Seawater Condensers:</strong> Erosion-corrosion detection, pitting assessment, tube-to-tubesheet joint integrity verification (power generation and desalination)</li>
                                <li><i class="fas fa-check"></i> <strong>Air-Cooled Heat Exchangers (ACHE):</strong> Finned tube ET inspection accessed via rope systems—detect fatigue cracking at tube-to-header welds and vibration-induced damage</li>
                                <li><i class="fas fa-check"></i> <strong>Plate Heat Exchangers:</strong> Eddy current inspection of elevated plate-type exchangers for corrosion, erosion and through-wall defects</li>
                                <li><i class="fas fa-check"></i> <strong>Process Coolers:</strong> Elevated trim coolers, lube oil coolers and glycol coolers inspected at 20-40m platform deck levels without crane access</li>
                                <li><i class="fas fa-check"></i> <strong>Tube-to-Tubesheet Joints:</strong> Specialized ET probes detect roll expansion defects, crevice corrosion and weld integrity issues at tube ends</li>
                                <li><i class="fas fa-check"></i> <strong>Trending & Tube Plugging Programs:</strong> Compare current ET data vs previous outage results to identify accelerating degradation and prioritize tube plugging/replacement</li>
                                <li><i class="fas fa-check"></i> <strong>Emergency Leak Investigation:</strong> Rapid-response rope access ET deployment (12-24 hour mobilization) for tube leak root cause analysis during unplanned shutdowns</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-oil-can"></i> Case Study: FPSO Seawater Cooling System Inspection</h4>
                                <p><strong>Asset:</strong> Floating Production Storage Offloading (FPSO) vessel with 4x seawater-cooled heat exchangers (2400 titanium tubes each) located 25m above main deck.</p>
                                <p><strong>Challenge:</strong> Traditional approach required marine scaffolding around HX shells ($1.2M cost, 8-week duration) with production deferment cost of $150K/day during inspection.</p>
                                <p><strong>Rope Access Solution:</strong> 6-person IRATA team deployed multi-frequency bobbin probes via rope access positioning. Completed inspection of all 9,600 tubes in 14 days at total cost $340K.</p>
                                <p><strong>Results:</strong> Cost saving: $860K (72%). Time saving: 6 weeks removed from critical path. Production deferment avoided: $6.3M. ET data identified 127 tubes requiring plugging (1.3% of population)—preventing in-service tube failures and unplanned shutdowns. Client now mandates rope access ET for all FPSO turnarounds.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec V Art 8</span>
                                <span class="standard-tag">ASTM E309 (ET Tubes)</span>
                                <span class="standard-tag">API 510</span>
                                <span class="standard-tag">TEMA Standards</span>
                                <span class="standard-tag">ISO 3452</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Aircraft & Aerospace Tab -->
                <div class="tab-panel" id="aircraft">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/aircraft-et-inspection.jpg" alt="Rope access eddy current testing on aircraft fuselage">
                        </div>
                        <div class="tab-text">
                            <h3>Aircraft Structure & Aerospace Component ET Inspection</h3>
                            <p>MRO facilities, airlines and aerospace manufacturers require FAA/EASA-compliant eddy current testing of aircraft structures, engine components and landing gear. Rope access enables ergonomic technician positioning for detailed ET scanning without hangar infrastructure or aircraft disassembly—reducing C-check and D-check duration by 30-50%.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Fuselage Skin Inspection:</strong> Array eddy current scanning of aluminum fuselage for fatigue cracks, corrosion and rivet hole cracking (multi-site damage detection)</li>
                                <li><i class="fas fa-check"></i> <strong>Wing Structures:</strong> Spar cap, wing root, and attachment lug ET inspection for fatigue crack initiation and propagation (critical to airworthiness)</li>
                                <li><i class="fas fa-check"></i> <strong>Landing Gear Components:</strong> ET of aluminum, titanium and high-strength steel landing gear forgings, actuators and attach fittings per OEM specifications</li>
                                <li><i class="fas fa-check"></i> <strong>Engine Mounts & Pylons:</strong> Crack detection in titanium and aluminum alloy engine attachment structures, pylon fittings and thrust reverser components</li>
                                <li><i class="fas fa-check"></i> <strong>Door Frames & Window Cutouts:</strong> High-stress concentration zones inspected with sliding probes and C-scan imaging for crack mapping</li>
                                <li><i class="fas fa-check"></i> <strong>Composite-to-Metal Interfaces:</strong> ET of metal fasteners, doublers and edge members in composite aircraft structures (787, A350, A380 programs)</li>
                                <li><i class="fas fa-check"></i> <strong>Rotor & Compressor Blades:</strong> Helicopter rotor blade spar ET and turbine engine compressor blade inspection using specialized blade probes</li>
                                <li><i class="fas fa-check"></i> <strong>Airworthiness Directive (AD) Compliance:</strong> Execute mandated ET inspections per FAA/EASA ADs with full traceability, calibration records and certificated Level III oversight</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-plane"></i>
                                <div>
                                    <strong>Aerospace MRO Benefits:</strong>
                                    <p>Traditional aircraft ET requires expensive scaffold towers, scissor lifts and fuselage work platforms—adding 2-4 weeks to heavy maintenance checks. Rope access ET technicians position directly at inspection zones using aircraft tie-down points and engineered anchors—reducing hangar occupancy time by 30-50% ($50K-200K per day in slot cost savings) while maintaining FAA Part 145 and EASA Part-M compliance.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">FAA AC 43.13-1B</span>
                                <span class="standard-tag">EASA Part-M / Part-145</span>
                                <span class="standard-tag">ASTM E1444 (ET Aerospace)</span>
                                <span class="standard-tag">AMS 2647 (ET Aircraft)</span>
                                <span class="standard-tag">Boeing D6-54446</span>
                                <span class="standard-tag">Airbus AIMS 04-14-001</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industrial Process Equipment Tab -->
                <div class="tab-panel" id="industrial">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/refinery-et-inspection.jpg" alt="Rope access eddy current testing on refinery equipment">
                        </div>
                        <div class="tab-text">
                            <h3>Refinery, Chemical Plant & Power Station ET Inspection</h3>
                            <p>Petrochemical refineries, chemical plants and power generation facilities operate elevated heat exchangers, aluminum piping, stainless steel reactors and non-ferromagnetic process equipment requiring periodic ET inspection. Rope access delivers electromagnetic testing without scaffolding costs or production shutdowns.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Process Heat Exchangers:</strong> Elevated shell & tube exchangers (20-60m height) inspected for tube corrosion, erosion and cracking without unit isolation</li>
                                <li><i class="fas fa-check"></i> <strong>Aluminum Piping Systems:</strong> Eddy current inspection of aluminum process piping for stress corrosion cracking (SCC), corrosion pitting and weld zone defects</li>
                                <li><i class="fas fa-check"></i> <strong>Stainless Steel Reactors:</strong> Austenitic stainless vessel ET for chloride SCC, sensitization zones and weld heat-affected zone (HAZ) cracking</li>
                                <li><i class="fas fa-check"></i> <strong>Copper Alloy Tubing:</strong> Ammonia refrigeration systems, seawater systems and process coolers with copper-nickel or admiralty brass tubes</li>
                                <li><i class="fas fa-check"></i> <strong>Titanium Equipment:</strong> Chlor-alkali cells, seawater-cooled condensers and corrosive service heat exchangers with titanium Grade 2 tubes</li>
                                <li><i class="fas fa-check"></i> <strong>Air-Cooled Heat Exchangers:</strong> ACHE tube bundles at 30-50m elevation inspected via rope access for fin-to-tube bond integrity and tube wall thinning</li>
                                <li><i class="fas fa-check"></i> <strong>Desalination Plants:</strong> Multi-stage flash (MSF) and multi-effect distillation (MED) tube bundle ET—critical for preventing seawater leaks into distillate</li>
                                <li><i class="fas fa-check"></i> <strong>Power Plant Condensers:</strong> Steam turbine condenser tube inspection (10,000-30,000 tubes) using automated bobbin probe ET with rope access positioning</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-industry"></i> Case Study: Refinery Crude Preheat Train Inspection</h4>
                                <p><strong>Asset:</strong> Crude oil preheat exchanger train with 6 elevated shell & tube units (32m height, 12,800 total stainless steel tubes).</p>
                                <p><strong>Traditional Quote:</strong> Full scaffold access with crane-assisted probe deployment: $680K cost, 5-week critical path duration, 21-day production loss ($3.2M revenue impact).</p>
                                <p><strong>Rope Access Execution:</strong> IRATA Level 3 team deployed multi-frequency bobbin probes via rope systems. Inspection completed in 9 days at $215K total cost while refinery remained operational (no production loss).</p>
                                <p><strong>Outcome:</strong> Cost savings: $465K (68%). Time savings: 26 days. Production impact avoided: $3.2M. ET results identified 89 tubes with >40% wall loss requiring plugging—preventing tube rupture and unplanned shutdown. Client implemented rope access ET as standard practice for all turnarounds.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 570 / 510</span>
                                <span class="standard-tag">ASME B31.3</span>
                                <span class="standard-tag">ASME Sec V Art 8</span>
                                <span class="standard-tag">NBIC (Boilers)</span>
                                <span class="standard-tag">TEMA Standards</span>
                                <span class="standard-tag">ISO 3452</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Storage Tanks & Pressure Vessels Tab -->
                <div class="tab-panel" id="storage-tanks">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/tank-pec-inspection.jpg" alt="Rope access pulsed eddy current inspection on storage tank">
                        </div>
                        <div class="tab-text">
                            <h3>Storage Tank, Pressure Vessel & CUI Screening (Pulsed EC)</h3>
                            <p>Corrosion under insulation (CUI) is a leading cause of hydrocarbon leaks and integrity failures in refineries, chemical plants and terminals. Rope access pulsed eddy current (PEC) testing detects hidden corrosion through insulation jackets up to 100mm thick—without removing insulation or interrupting operations.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Atmospheric Storage Tanks:</strong> Shell course PEC scanning for external corrosion under weather jacketing and vapor barrier coatings (API 653 integrity programs)</li>
                                <li><i class="fas fa-check"></i> <strong>Pressure Vessels:</strong> Insulated reactor vessels, fractionation columns and surge drums inspected for CUI without insulation removal (ASME Section VIII compliance)</li>
                                <li><i class="fas fa-check"></i> <strong>Insulated Piping:</strong> High-temperature steam, hydrocarbon and chemical process piping screened for hidden corrosion at supports, dead-legs and low-point drains</li>
                                <li><i class="fas fa-check"></i> <strong>LNG/LPG Spheres:</strong> Cryogenic storage sphere ET inspection of aluminum alloy shells, nozzle attachments and support skirt connections</li>
                                <li><i class="fas fa-check"></i> <strong>Ammonia Refrigeration Vessels:</strong> Carbon steel and low-alloy pressure vessels in ammonia service inspected for stress corrosion cracking and general corrosion</li>
                                <li><i class="fas fa-check"></i> <strong>Aluminum Floating Roof Tanks:</strong> Eddy current inspection of aluminum pontoons, deck plates and seal systems for corrosion and cracking</li>
                                <li><i class="fas fa-check"></i> <strong>Heat Trace Systems:</strong> PEC detection of corrosion beneath heat tracing, jacketing and insulation on process equipment and catalyst regenerator systems</li>
                                <li><i class="fas fa-check"></i> <strong>RBI Targeting:</strong> Risk-based inspection (RBI) programs use PEC data to prioritize high-consequence CUI locations for confirmatory UT and mitigation</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-fire-alt"></i>
                                <div>
                                    <strong>CUI Economics via Rope Access PEC:</strong>
                                    <p>Traditional CUI assessment requires full insulation removal ($50-150 per m² plus disposal/re-insulation), scaffolding ($200-500 per m³) and extended production downtime. Rope access pulsed eddy current screens 100% of target areas through intact insulation—then removes insulation only at confirmed corrosion zones for UT verification. Typical project savings: 70-85% vs blanket insulation removal, with 90% reduction in insulation waste and 80% faster execution.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 653 (Tanks)</span>
                                <span class="standard-tag">API 510 (Pressure Vessels)</span>
                                <span class="standard-tag">ASME Sec VIII</span>
                                <span class="standard-tag">NACE SP0198 (CUI)</span>
                                <span class="standard-tag">ISO 16809 (PEC)</span>
                                <span class="standard-tag">ASTM E2884 (PEC)</span>
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
            <h2>Our Rope Access Eddy Current Testing Capabilities</h2>
            <p>Advanced electromagnetic inspection equipment, dual-certified personnel and code-compliant procedures</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-shield"></i>
                    <h3>Personnel Certifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Access:</span> IRATA Level 3 supervisors, Level 2 technicians (current certification, 3-year cycle)</li>
                    <li><span class="cap-label">NDT Certification:</span> ASNT Level II/III Eddy Current (SNT-TC-1A, CP-189, EN ISO 9712)</li>
                    <li><span class="cap-label">Aerospace Qualified:</span> FAA Part 145 / EASA Part-M qualified ET personnel (where applicable)</li>
                    <li><span class="cap-label">Medical Fitness:</span> Annual occupational health assessment for work at height and confined spaces</li>
                    <li><span class="cap-label">Rescue Competence:</span> IRATA Level 3 rescue leader on every project (vertical rescue qualified)</li>
                    <li><span class="cap-label">Safety Training:</span> BOSIET, HUET, confined space, LOTO, PTW, H2S (oil & gas sites)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-broadcast-tower"></i>
                    <h3>ET Equipment & Probes</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">ET Instruments:</span> Olympus Nortec 600, Eddyfi Ectane 2, GE Mentor EM (multi-frequency capability)</li>
                    <li><span class="cap-label">Pencil Probes:</span> Surface crack detection (0.1-3mm depth) in aluminum, titanium, stainless steel</li>
                    <li><span class="cap-label">Array Probes:</span> High-speed C-scan imaging (32-128 channels) for aircraft structures and large-area screening</li>
                    <li><span class="cap-label">Tube Probes:</span> Bobbin coils (8-50mm ID), rotating probes (plus-point/pancake), motorized pull systems</li>
                    <li><span class="cap-label">Pulsed EC (PEC):</span> Emat Innerspec PowerBox H, Eddyfi Lyft (CUI detection through 100mm insulation)</li>
                    <li><span class="cap-label">RFET Capability:</span> Remote field ET for ferromagnetic tube inspection (carbon steel heat exchanger tubes)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-flask"></i>
                    <h3>Material Coverage</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Aluminum Alloys:</span> 2xxx, 6xxx, 7xxx series (aircraft, structures, tanks)</li>
                    <li><span class="cap-label">Copper Alloys:</span> Admiralty brass, copper-nickel 90/10 & 70/30, aluminum bronze</li>
                    <li><span class="cap-label">Titanium:</span> Grade 2 (commercial pure), Grade 5 (Ti-6Al-4V aerospace)</li>
                    <li><span class="cap-label">Stainless Steel:</span> Austenitic (304, 316, 321), duplex, super duplex</li>
                    <li><span class="cap-label">Ferromagnetic:</span> Carbon steel, low alloy (with RFET or saturation techniques)</li>
                    <li><span class="cap-label">Exotic Alloys:</span> Inconel, Hastelloy, Monel, Zirconium (case-by-case probe selection)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-search"></i>
                    <h3>Defect Detection Capability</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Fatigue Cracks:</span> 0.1mm minimum detection (conventional ET), 0.5mm (array ET)</li>
                    <li><span class="cap-label">Stress Corrosion Cracking:</span> SCC, IGSCC, transgranular cracking in susceptible alloys</li>
                    <li><span class="cap-label">Corrosion:</span> Pitting, general corrosion, erosion-corrosion, galvanic corrosion</li>
                    <li><span class="cap-label">Material Loss:</span> Wall thinning quantification (tube ET, PEC through insulation)</li>
                    <li><span class="cap-label">Manufacturing Defects:</span> Seam welds, lap joints, inclusions, porosity</li>
                    <li><span class="cap-label">Conductivity Changes:</span> Heat damage, improper heat treatment, alloy mixing</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-hard-hat"></i>
                    <h3>Rope Access Safety Equipment</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Systems:</span> 11mm static kernmantle (EN 1891), dual-rope redundancy, 23kN minimum strength</li>
                    <li><span class="cap-label">Harnesses:</span> Full-body work positioning harnesses (EN 361/EN 358), tool carrying capability</li>
                    <li><span class="cap-label">Descent Devices:</span> Petzl I'D, Petzl RIG (controlled descent, hands-free work positioning)</li>
                    <li><span class="cap-label">Anchor Points:</span> Engineered anchors, beam clamps, tripods (certified 15kN minimum)</li>
                    <li><span class="cap-label">PPE:</span> Hard hats, safety glasses, gloves, steel-toe boots (oil & gas flame-resistant where required)</li>
                    <li><span class="cap-label">Inspection Cycle:</span> Pre-use daily checks, monthly detailed inspection, annual 3rd-party certification</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-database"></i>
                    <h3>Data Management & Reporting</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Digital Recording:</span> All ET scans recorded with time/date stamp, GPS location, technician ID</li>
                    <li><span class="cap-label">C-Scan Imaging:</span> Color-coded defect maps with depth/severity indication (array ET)</li>
                    <li><span class="cap-label">Tube Data Files:</span> Individual tube records with accept/reject per TEMA/ASME criteria</li>
                    <li><span class="cap-label">Cloud Storage:</span> Secure data backup with client portal access, 10-year retention standard</li>
                    <li><span class="cap-label">Trending Analysis:</span> Historical comparison vs previous inspections (corrosion rate, crack growth)</li>
                    <li><span class="cap-label">Report Turnaround:</span> Preliminary findings same-day/next-day; final report within 48-72 hours</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== PROCEDURE WORKFLOW ===================== -->
<section class="procedure-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">INSPECTION WORKFLOW</span>
            <h2>Rope Access ET Inspection Procedure</h2>
            <p>Integrated safety, access and electromagnetic testing workflow from planning to final deliverables</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Pre-Mobilization Engineering & Risk Assessment</h3>
                    <p>Review asset drawings, tube data sheets, material specifications and historical ET records. Identify anchor points, access routes and exclusion zones. Develop Method Statement, Risk Assessment (RAMS), Rescue Plan and ET procedure aligned to ASME Sec V / ASTM standards. Confirm acceptance criteria (% wall loss, crack length, signal amplitude) with client engineering.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> RAMS Document, Rope Access Plan, ET Procedure, Rescue Plan, Equipment Inventory
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Mobilization & Site Safety Induction</h3>
                    <p>Deploy rope access equipment and ET instrumentation. Complete site-specific safety induction, obtain permit-to-work (PTW), verify LOTO status and establish communication protocols. Install anchor points with load testing/certification. Stage rescue equipment and brief site emergency response team.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> PTW Documentation, Anchor Load Test Records, Daily Toolbox Talk Sign-In
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>ET System Calibration & Verification</h3>
                    <p>Calibrate ET instruments using reference standards representative of asset material, thickness and defect types. For tube ET: through-wall holes, OD/ID notches, support plate simulations. For surface ET: EDM notches at 0.5mm, 1.0mm, 2.0mm depths. Verify probe lift-off compensation, frequency selection and signal-to-noise ratio. Document all settings for traceability.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Calibration Records, Reference Standard Scans, Instrument Setup Sheets
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>Rope Access Positioning & Surface Preparation</h3>
                    <p>IRATA Level 3 supervisor establishes work zone with safety barriers and drop-zone controls. Technicians descend/traverse to inspection locations using dual-rope systems and work positioning lanyards. For surface ET: light cleaning (no paint removal required unless specified). For tube ET: verify tube cleanliness and ID accessibility.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Daily Work Log, Access Route Photos, Pre-Inspection Checklist
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>ET Scanning & Real-Time Data Acquisition</h3>
                    <p>Execute ET inspection per approved procedure. Tube ET: automated bobbin probe pull-through at 0.3-1.0 m/s with continuous recording. Surface ET: manual scanning with array probes or pencil probes using grid pattern and 15-30% overlap. PEC: grid measurements with 100-300mm spacing. All data GPS-tagged and digitally recorded with technician annotations for suspect indications.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Raw ET Data Files, C-Scan Images, Technician Field Notes
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>Data Analysis, Defect Characterization & Reporting</h3>
                    <p>ASNT Level II/III analyst reviews ET data offline using advanced software (Eddyfi Magnifi, Olympus OmniPC). Classify indications: crack-like, volumetric, geometry/support, noise. Size defects using amplitude/phase analysis. Compare vs acceptance criteria and generate accept/reject decisions. Flag critical defects for immediate client notification and confirmatory inspection (UT, PT, RVI).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Defect Register (Excel), Tube Plugging List, C-Scan Defect Maps, Preliminary Findings Report
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">7</div>
                <div class="timeline-content">
                    <h3>Site De-Rig & Final Reporting</h3>
                    <p>Complete inspection scope, de-rig rope systems, remove anchors (or leave permanent anchors if specified), inventory equipment and close permits. Deliver final report package: executive summary, scope/procedure, personnel certs, calibration records, tube-by-tube results, defect photos, recommendations for plugging/repair/re-inspection, trending analysis vs previous outage data (if available).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Final ET Inspection Report (PDF), Digital Data Archive (USB/cloud), Calibration Package, Cert Pack
                    </div>
                </div>
            </div>
        </div>

        <div class="certification-showcase">
            <h3>Our Certifications & Accreditations</h3>
            <div class="cert-grid">
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/irata.png" alt="IRATA">
                    <span>IRATA Member Company</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/sprat.png" alt="SPRAT">
                    <span>SPRAT Member (North America)</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                    <span>ASNT Level II/III ET Personnel</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                    <span>ISO 9001:2015 Quality Management</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-45001.png" alt="ISO 45001">
                    <span>ISO 45001:2018 Safety Management</span>
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
            <h2>Your Rope Access Eddy Current Testing Specialists</h2>
            <p>Dual expertise in electromagnetic NDT and industrial rope access—proven offshore, aerospace and petrochemical track record</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Dual-Certified Expertise</h3>
                <p>Our rope access ET technicians hold both IRATA Level 3 rope access certification AND ASNT Level II/III eddy current qualification—ensuring safe access and technically valid electromagnetic inspection from the same highly trained team.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-cogs"></i></div>
                <h3>Advanced ET Equipment Fleet</h3>
                <p>Olympus Nortec, Eddyfi Ectane 2, GE Mentor EM multi-frequency platforms. Complete probe library: pencil, array, bobbin, rotating, pulsed EC. Battery-powered field operation with C-scan imaging and GPS tagging—no scaffolding power required.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-oil-can"></i></div>
                <h3>Offshore & Heavy Industry Proven</h3>
                <p>Extensive FPSO, fixed platform, refinery and chemical plant experience. Understand SIMOPS, permit-to-work, hydrocarbon area classifications, and simultaneous operations—minimizing production impact and ensuring seamless integration with turnaround schedules.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-plane-departure"></i></div>
                <h3>Aerospace MRO Qualified</h3>
                <p>FAA Part 145 and EASA Part-M experience supporting commercial aircraft C-checks, D-checks and component overhauls. ASTM E1444 / AMS 2647 compliant ET procedures with full traceability for airworthiness certification.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Zero-Incident Safety Record</h3>
                <p>Zero lost-time incidents across 75,000+ rope access hours (2018-2024). IRATA-aligned safety management system, continuous hazard monitoring, rescue-ready Level 3 supervision, and ISO 45001:2018 certified safety culture.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Rapid Emergency Response</h3>
                <p>12-24 hour emergency mobilization for tube leak investigations, failure analysis and unplanned shutdown support. Pre-positioned ET equipment in Mumbai, Chennai, Visakhapatnam and Hazira—enabling same-day deployment for critical assets within 500km radius.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>Rope Access Eddy Current Testing Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is rope access eddy current testing as accurate as traditional scaffolding-based ET?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes. The ET inspection process, probe technology, calibration standards and acceptance criteria are identical—rope access only changes HOW the technician is positioned at the work location. Our procedures are ASME Section V Article 8 compliant, technicians are ASNT Level II/III certified, and all equipment is calibrated per ASTM standards. Third-party audits (classification societies, insurance surveyors, regulatory bodies) routinely validate technical equivalency between rope access ET and conventional access methods.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What types of defects can eddy current testing detect via rope access?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Conventional ET (pencil/array probes): Surface cracks down to 0.1mm, stress corrosion cracking, fatigue cracks, corrosion pitting, erosion. Tube ET (bobbin/rotating probes): Through-wall defects, ID/OD corrosion, tube-to-tubesheet defects, support plate wear. Pulsed Eddy Current (PEC): Corrosion under insulation up to 100mm thick, hidden wall loss, multilayer material inspection. All techniques work on conductive materials (aluminum, copper, titanium, stainless steel, carbon steel with specialized probes).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much does rope access ET cost compared to scaffolding-based inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Typical savings: 50-70% for elevated heat exchangers (>20m height), offshore platforms and industrial structures. Example: Offshore FPSO heat exchanger ET inspection quoted at $1.2M using marine scaffolding was completed via rope access for $340K (72% savings). Cost advantage increases with height, structural complexity, marine/offshore environment, and project duration. Contact us with your asset details for a detailed cost comparison vs traditional access methods.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you perform ET on operating equipment without shutdown?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, with limitations. Conventional ET and tube ET can be performed on operating equipment if: (1) Surface temperature <150°C for standard probes (<250°C with high-temp probes), (2) Safe access can be established without process isolation, (3) No flammable atmosphere at inspection location, (4) Permit-to-work and SIMOPS procedures are followed. Many refineries and offshore platforms successfully execute rope access ET during partial shutdowns—inspecting specific heat exchangers while adjacent process units remain operational. This dramatically reduces production deferment costs vs total plant shutdown.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What weather conditions limit rope access ET inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Work stops in: Sustained winds >10 m/s (offshore) or >12 m/s (onshore), active precipitation (water contamination affects ET calibration), lightning within 10km radius, temperature extremes (<0°C or >50°C ambient). Offshore projects include significant wave height (Hs) limits and vessel motion criteria per project risk assessment. We provide 5-day weather forecasts during planning and real-time monitoring during execution—proactively adjusting schedules to maximize weather windows and minimize mobilization/demobilization costs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can eddy current testing detect defects through paint or coatings?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Conventional ET: Works through thin non-conductive coatings (<0.5mm typical) such as paint, anodizing, powder coating. Thicker coatings reduce sensitivity and may require removal at critical areas. Pulsed Eddy Current (PEC): Specifically designed to penetrate thick insulation (up to 100mm), weather jacketing, composite wraps and multi-layer coatings—ideal for CUI screening without insulation removal. Probe selection and calibration are adjusted based on coating type/thickness to maintain detection reliability.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure ET quality when technicians are suspended on ropes?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Technicians use work positioning lanyards, rope access work seats, and tool tethers to achieve stable, hands-free positioning—enabling controlled probe scanning, proper lift-off maintenance, and consistent scan speeds. For tube ET, we deploy rope-compatible motorized pull systems ensuring repeatable probe velocity (critical for accurate flaw detection). IRATA Level 3 supervisors conduct real-time quality spot-checks, all ET data is digitally recorded for independent review, and ASNT Level III oversight validates results before report issuance. Our QA/QC system is ISO 9001:2015 certified with documented procedures for rope access NDT.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What certifications do your rope access ET technicians hold?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>All rope access ET personnel hold dual certification: (1) IRATA Level 3 (supervisor) or Level 2 (technician) rope access certification with current medical fitness and annual recertification, (2) ASNT Level II or Level III Eddy Current Testing certification per SNT-TC-1A, CP-189 or EN ISO 9712. Additionally: BOSIET/HUET (offshore), confined space entry, working at height, permit-to-work, LOTO, and client-specific safety training (H2S, fire safety, emergency response). For aerospace projects, technicians hold FAA Part 145 or EASA Part-M training records and facility-specific authorizations.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What deliverables do you provide after rope access ET inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Standard deliverables: (1) Final Inspection Report (executive summary, scope, procedure, acceptance criteria, results summary, conclusions/recommendations), (2) Personnel Certification Package (rope access + NDT certs, medical fitness), (3) Calibration Records (reference standards, instrument settings, verification scans), (4) Detailed Results: Tube-by-tube data files, defect register with location/type/severity, C-scan images, accept/reject decisions per code, (5) Digital Data Archive (raw ET files, GPS coordinates, trending analysis vs previous inspections if available), (6) Photo Documentation (defect images, work progression, anchor points). Preliminary findings provided same-day or next-day for urgent shutdown decisions; final report within 48-72 hours of demobilization.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you combine rope access ET with other NDT methods in a single mobilization?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—this is a key cost advantage of rope access NDT. We routinely bundle multiple inspection techniques in single mobilizations: ET + UT thickness gauging, ET + visual inspection (VT/RVI), ET + PT confirmation, ET + PAUT weld inspection. Example: Offshore heat exchanger campaign might include bobbin probe ET screening (all tubes), rotating probe ET confirmation (flagged tubes), IRIS UT sizing (critical tubes), and RVI verification (suspect zones)—all executed by the same dual-certified rope access team. This eliminates redundant mobilization costs, reduces scaffold/access expenses by 60-80%, and shortens critical path duration by consolidating inspection scopes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Eliminate Scaffolding Costs—Get Electromagnetic Inspection Results 3x Faster</h2>
            <p>IRATA Level 3 rope access + ASNT Level II/III eddy current expertise in one team. Request a free technical feasibility study and cost comparison.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Rope Access ET Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Free Site Survey & Access Engineering</span>
                <span><i class="fas fa-check"></i> 50-70% Cost Savings vs Scaffolding</span>
                <span><i class="fas fa-check"></i> 24-48 Hour Mobilization</span>
                <span><i class="fas fa-check"></i> Multi-Technique Bundling Available</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Related Rope Access NDT Services</h2>
            <p>Comprehensive electromagnetic and ultrasonic inspection at height—same access platform, multiple techniques</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access UT Thickness</h3>
                <p>Ultrasonic thickness measurement for corrosion mapping, CML monitoring and confirmatory sizing of ET-flagged zones</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-paut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-project-diagram"></i></div>
                <h3>Rope Access PAUT</h3>
                <p>Phased array ultrasonic weld inspection for critical structural connections, pressure boundary welds and aerospace components</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-pt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-tint"></i></div>
                <h3>Rope Access PT (Dye Penetrant)</h3>
                <p>Surface crack detection via liquid penetrant testing—complementary to ET for weld verification and confirmation</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-vt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access Visual Inspection</h3>
                <p>Close visual examination (VT) with HD photography, thermal imaging and detailed condition assessment reporting</p>
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