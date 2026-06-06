<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access Magnetic Particle Testing (MT) Services | IRATA Certified Ferromagnetic Weld & Structure Inspection | Alpha Sonix NDT Solutions";
$meta_description = "IRATA/SPRAT certified rope access magnetic particle testing (MT) for ferromagnetic welds, structural steel, offshore platforms and industrial equipment at height. Surface and near-surface crack detection in carbon steel, cast iron and low alloy materials without scaffolding. ASME Section V Article 7 compliant with fluorescent and visible particle techniques.";
$meta_keywords = "rope access magnetic particle testing, rope access MT, IRATA magnetic particle inspection, ferromagnetic weld testing at height, offshore platform MT inspection, structural steel crack detection, scaffolding-free MT testing, magnetic particle NDT rope access, carbon steel inspection at height";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-mt.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-mt-og.jpg">

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
            "serviceType": "Rope Access Magnetic Particle Testing (MT)",
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
            "description": "IRATA/SPRAT certified rope access magnetic particle testing for surface and near-surface crack detection in ferromagnetic materials at height. ASME Section V Article 7 compliant inspection of welds, structural steel, offshore platforms and industrial equipment without scaffolding costs.",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Rope Access MT Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Offshore Platform Structural Weld MT"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Power Plant Turbine Component Inspection"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Industrial Steel Structure Crack Detection"
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
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/rope-access/rope-access-mt-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Rope Access MT</span>
            </div>
            <h1 class="page-title">Rope Access Magnetic Particle Testing (MT)</h1>
            <p class="page-subtitle">IRATA/SPRAT certified magnetic particle inspection for surface and near-surface crack detection in ferromagnetic welds, structural steel, offshore platforms and industrial equipment at height—comprehensive MT testing without scaffolding delays or access limitations</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA Level 3 + ASNT Level II MT</span>
                <span class="badge"><i class="fas fa-magnet"></i> Ferromagnetic Materials Specialist</span>
                <span class="badge"><i class="fas fa-eye"></i> Surface + Near-Surface Detection</span>
                <span class="badge"><i class="fas fa-coins"></i> 65% Cost Reduction vs Scaffolding</span>
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
                <h3>Ferromagnetic Material Expertise</h3>
                <p>Specialized magnetic particle testing for carbon steel, low alloy steel, cast iron, ferritic stainless steel and martensitic materials—detect surface cracks, fatigue damage, stress corrosion cracking and weld defects invisible to visual inspection with 0.1mm minimum detection capability.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-water"></i></div>
                <h3>Wet & Dry Particle Techniques</h3>
                <p>Complete MT capability: wet fluorescent particles (maximum sensitivity under UV light), dry visible particles (field applications), AC/DC magnetization selection, longitudinal and circular magnetic field orientation—optimized for defect type, geometry and inspection conditions.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-oil-can"></i></div>
                <h3>Offshore & Heavy Industry Proven</h3>
                <p>Extensive offshore platform, refinery, power plant and marine structure experience. SIMOPS-qualified rope access MT teams understand hydrocarbon environments, simultaneous operations protocols and critical infrastructure inspection requirements—delivering code-compliant results without production interruption.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Dual-Certified Safety & Quality</h3>
                <p>IRATA Level 3 rope access supervisors with ASNT Level II/III Magnetic Particle certification ensure both safe working-at-height execution AND technically valid ASME Section V Article 7 compliant MT inspection—single team, dual expertise, zero compromise on safety or quality.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS MT ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">MAGNETIC FIELD NDT AT HEIGHT</span>
                <h2>What is Rope Access Magnetic Particle Testing?</h2>

                <p class="lead">Rope Access Magnetic Particle Testing combines IRATA/SPRAT industrial rope access techniques with ASME Section V Article 7 magnetic particle inspection methods to deliver comprehensive surface and near-surface crack detection in ferromagnetic materials located at height—eliminating scaffolding costs while maintaining full MT technical capability and code compliance.</p>

                <p>Magnetic particle testing (MT) uses magnetic fields to detect surface-breaking and slightly subsurface discontinuities in ferromagnetic materials. The test component is magnetized, fine iron particles are applied to the surface, and magnetic flux leakage at defect locations causes particles to accumulate and form visible indications. MT is particularly effective for detecting fatigue cracks, stress corrosion cracking, grinding cracks, and weld defects in carbon steel structures, offshore platforms, pressure vessels and heavy industrial equipment.</p>

                <p><strong>Traditional MT of elevated structures requires expensive scaffolding or aerial work platforms—often costing 3-5x more than the actual inspection.</strong> Rope access eliminates these access constraints by positioning dual-certified technicians (IRATA Level 3 + ASNT Level II MT) directly at inspection locations using rope systems, specialized work positioning equipment and battery-powered MT equipment designed for field applications.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Complete MT Technique Portfolio</strong>
                            <p>Wet fluorescent particle testing (maximum sensitivity), dry visible particle testing (field practicality), AC magnetization (surface defects), DC magnetization (subsurface defects), yoke magnetization (localized testing), and central conductor techniques (pipe/tube applications).</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Surface & Subsurface Detection Capability</strong>
                            <p>Detect tight surface cracks (0.1mm opening), slightly subsurface defects (up to 6mm depth with DC techniques), heat-affected zone (HAZ) cracking, and fatigue damage—superior to visual inspection and complementary to liquid penetrant testing.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Field-Optimized Equipment</strong>
                            <p>Battery-powered AC/DC yokes, portable UV lamps (fluorescent particle inspection), magnetic field indicators (field strength verification), and complete consumable kits—no external power required, enabling inspection of remote offshore platforms and industrial structures.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Real-Time Defect Detection & Documentation</strong>
                            <p>Immediate defect visibility during magnetization, on-site accept/reject decisions per ASME/AWS criteria, HD photography with scale references, GPS location tagging, and digital reporting—enabling same-day engineering decisions for critical repairs.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access MT Matters:</strong>
                        <p>Offshore platforms, refinery towers, power plant structures and industrial steel frameworks contain thousands of critical carbon steel welds and connections at elevations of 20-150+ meters. A single undetected fatigue crack can lead to catastrophic structural failure ($5-50M consequences). Rope access MT delivers the same crack detection sensitivity as ground-level testing—but at 60-70% lower cost, 4-6x faster mobilization, and zero production disruption. Essential for aging infrastructure where scaffold costs exceed $500K-2M but crack detection is critical for safety and regulatory compliance.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request Rope Access MT Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/rope-access/rope-access-mt-inspection.jpg" alt="IRATA technician performing rope access magnetic particle testing on offshore platform structural weld">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 technician conducting fluorescent magnetic particle testing on offshore platform structural weld at 40m elevation</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">0.1mm</span>
                        <span class="stat-label">Minimum Crack Detection</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">6mm</span>
                        <span class="stat-label">Subsurface Penetration (DC)</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">65%</span>
                        <span class="stat-label">Cost Reduction vs Scaffold</span>
                    </div>
                </div>

                <div class="system-types">
                    <h4><i class="fas fa-cogs"></i> MT Techniques Available</h4>
                    <div class="system-type-grid">
                        <div class="system-type-item">
                            <i class="fas fa-lightbulb"></i>
                            <span>Fluorescent Wet Particle (UV)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-eye"></i>
                            <span>Visible Dry Particle (White Light)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-wave-square"></i>
                            <span>AC Magnetization (Surface)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-battery-full"></i>
                            <span>DC Magnetization (Subsurface)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-magnet"></i>
                            <span>Yoke Magnetization (Portable)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-circle"></i>
                            <span>Central Conductor (Pipes/Tubes)</span>
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
            <span class="section-label">WHY CHOOSE ROPE ACCESS MT</span>
            <h2>Key Advantages Over Traditional Access Methods</h2>
            <p>Superior crack detection for ferromagnetic materials with dramatic cost and time savings</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-dollar-sign"></i></div>
                <h3>Massive Scaffolding Cost Elimination</h3>
                <p>Offshore platform structural inspection: $1.2M marine scaffolding vs $280K rope access MT (77% savings). Refinery tower weld testing: $650K scaffold vs $185K rope access (72% savings). Power plant cooling tower: $890K vs $245K (72% savings). ROI improves with height, complexity and site access constraints.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-search-plus"></i></div>
                <h3>Superior Crack Detection for Ferromagnetics</h3>
                <p>MT detects surface cracks down to 0.1mm opening and subsurface defects to 6mm depth in carbon steel—significantly more sensitive than visual inspection (1-2mm minimum) and complementary to PT (non-ferromagnetic only). Essential for fatigue-critical welds, stress concentration zones and aging infrastructure.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Rapid Deployment & Execution Speed</h3>
                <p>Mobilize MT teams in 24-48 hours vs 4-8 weeks for scaffold erection. Complete 200-300 welds per shift using optimized MT procedures and work positioning techniques—3-5x faster than scaffold-based inspection enables. Remove 6-10 weeks from critical path duration.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-industry"></i></div>
                <h3>Inspect Operating Equipment (No Shutdown)</h3>
                <p>Many rope access MT inspections performed without process shutdown: external structural welds, platform connections, non-process piping, cable tray supports—provided safe access protocols and SIMOPS procedures are followed. Reduces production deferment costs by 50-80% vs total plant shutdown.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-tools"></i></div>
                <h3>Complete MT Technique Integration</h3>
                <p>Single rope access campaign delivers: fluorescent wet particle (maximum sensitivity), dry visible particle (field practicality), AC/DC magnetization selection, yoke and central conductor techniques. Eliminate multiple mobilizations and subcontractor coordination—comprehensive MT scope from one team.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>Access Previously Uninspectable Locations</h3>
                <p>Offshore platform undersides, bridge truss connections, tower internal bracing, process equipment with restricted ground access—rope access enables MT inspection of critical ferromagnetic structures where scaffolding is impossible, prohibited or economically unfeasible (cost >$1-2M).</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== MT TECHNIQUE COMPARISON ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">MAGNETIC PARTICLE TECHNIQUES</span>
            <h2>MT Method Selection for Rope Access Applications</h2>
            <p>Choose the optimal magnetization and particle system based on defect type, material condition and field constraints</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th><i class="fas fa-lightbulb"></i> Fluorescent Wet Particle</th>
                        <th><i class="fas fa-eye"></i> Visible Dry Particle</th>
                        <th><i class="fas fa-wave-square"></i> AC Magnetization</th>
                        <th><i class="fas fa-battery-full"></i> DC Magnetization</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Primary Application</strong></td>
                        <td>Maximum sensitivity crack detection</td>
                        <td>Field inspection, general screening</td>
                        <td>Surface defect detection</td>
                        <td>Subsurface + surface defects</td>
                    </tr>
                    <tr>
                        <td><strong>Detection Sensitivity</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (0.1mm cracks)</td>
                        <td class="good">Good (0.3-0.5mm cracks)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Surface optimized</td>
                        <td class="excellent"><i class="fas fa-star"></i> Surface + subsurface (6mm depth)</td>
                    </tr>
                    <tr>
                        <td><strong>Field Practicality (Rope Access)</strong></td>
                        <td class="average">Moderate (UV lamp + darkening required)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (daylight inspection)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Standard equipment</td>
                        <td class="good">Good (battery yokes available)</td>
                    </tr>
                    <tr>
                        <td><strong>Environmental Requirements</strong></td>
                        <td class="poor">Darkened area or UV booth required</td>
                        <td class="excellent"><i class="fas fa-star"></i> Daylight / outdoor inspection</td>
                        <td class="good">Standard lighting adequate</td>
                        <td class="good">Standard lighting adequate</td>
                    </tr>
                    <tr>
                        <td><strong>Equipment Complexity</strong></td>
                        <td class="average">Higher (particle bath, UV lamp, darkening)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Simple (yoke + dry powder)</td>
                        <td class="good">Standard (AC yoke)</td>
                        <td class="good">Standard (DC yoke, battery packs)</td>
                    </tr>
                    <tr>
                        <td><strong>Defect Orientation Sensitivity</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (all orientations)</td>
                        <td class="good">Good (depends on magnetization)</td>
                        <td class="good">Perpendicular to field lines</td>
                        <td class="excellent"><i class="fas fa-star"></i> All orientations (dual magnetization)</td>
                    </tr>
                    <tr>
                        <td><strong>Cost per Test</strong></td>
                        <td>$$$ (Higher consumables + equipment)</td>
                        <td class="excellent"><i class="fas fa-star"></i> $ (Lowest cost)</td>
                        <td>$$ (Standard)</td>
                        <td>$$ (Standard + battery cost)</td>
                    </tr>
                    <tr>
                        <td><strong>Best Rope Access Fit</strong></td>
                        <td>Critical welds, fatigue-prone zones, aerospace</td>
                        <td class="excellent"><i class="fas fa-star"></i> Structural steel, offshore platforms, general screening</td>
                        <td>Surface crack screening, grinding checks</td>
                        <td>Thick sections, subsurface defect concerns</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Rope Access MT Strategy:</strong> For structural steel and offshore platform inspection, visible dry particle MT with AC magnetization delivers optimal balance of sensitivity, field practicality and cost-effectiveness (80% of applications). Deploy fluorescent wet particle MT for critical fatigue-prone welds, pressure boundary connections and high-consequence failure zones (15% of applications). Use DC magnetization for thick sections (>25mm), cast components or where subsurface defects are suspected (5% of applications). This tiered approach maximizes coverage while controlling costs and complexity.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ROPE ACCESS MT APPLICATIONS</span>
            <h2>Industries & Asset Types We Serve</h2>
            <p>Ferromagnetic material inspection across offshore, power generation, industrial and marine sectors</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="offshore-steel">Offshore Platform Structures</button>
                <button class="tab-btn" data-tab="power-generation">Power Generation Equipment</button>
                <button class="tab-btn" data-tab="industrial-steel">Industrial Steel Structures</button>
                <button class="tab-btn" data-tab="marine-vessels">Marine Vessels & Port Infrastructure</button>
            </div>

            <div class="tabs-content">
                <!-- Offshore Platform Structures Tab -->
                <div class="tab-panel active" id="offshore-steel">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/offshore-platform-mt.jpg" alt="Rope access magnetic particle testing on offshore platform jacket structure">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Platform Carbon Steel Structure Inspection</h3>
                            <p>Offshore platforms operate in extreme marine environments with cyclic loading, fatigue stress and saltwater corrosion. Carbon steel jacket structures, topside frameworks and process equipment require periodic MT inspection for crack detection—particularly critical given remote location, high consequence of failure and limited repair windows. Rope access MT eliminates marine scaffolding costs while delivering comprehensive crack detection.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Jacket Structure Welds:</strong> Node-to-brace connections, circumferential and longitudinal seam welds in jacket legs, X-bracing connections, mudline zone welds (splash zone corrosion + fatigue), conductor guide welds, boat landing attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Topside Structural Steel:</strong> Module support beams, deck plate-to-beam welds, column base plates, equipment foundations, pipe rack connections, helideck support structure, flare boom supports and guy wire attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Process Equipment Supports:</strong> Pressure vessel saddle welds, heat exchanger support steel, compressor foundations, pump skid attachments, cable tray supports, instrument platform connections, crane pedestals and lifting lugs</li>
                                <li><i class="fas fa-check"></i> <strong>Marine Systems:</strong> Boat landing structures, fender attachments, mooring hardware, crane boom connections, winch foundations, davit attachments for lifeboats, accommodation module structural connections</li>
                                <li><i class="fas fa-check"></i> <strong>Fatigue-Critical Details:</strong> Stress concentration zones (geometry transitions), high-cycle fatigue locations (vibrating equipment attachments), welded plate intersections, cope holes and flame-cut edges, previously repaired weld zones</li>
                                <li><i class="fas fa-check"></i> <strong>Lifting & Material Handling:</strong> Crane rail connections, trolley beam welds, hoist attachment points, load block assemblies, spreader beam welds, rigging hardware (shackles, eye bolts), personnel transfer basket attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Safety & Escape Systems:</strong> Emergency escape route structural supports, muster station frameworks, liferaft davit welds, escape chute attachments, firewater deluge system supports, gas detector mounting brackets</li>
                                <li><i class="fas fa-check"></i> <strong>Post-Storm Damage Assessment:</strong> Rapid MT inspection following hurricane/typhoon events—identify fatigue crack initiation or propagation in structural connections, verify integrity before return to normal operations</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-ship"></i> Case Study: North Sea Platform Structural Integrity Campaign</h4>
                                <p><strong>Asset:</strong> 25-year-old steel jacket platform (8-leg jacket, 40m x 60m topside, 45m water depth). Regulatory inspection requirement: 5-year structural integrity verification with focus on fatigue-critical welds.</p>
                                <p><strong>Challenge:</strong> Traditional marine scaffolding quote: $1.85M cost, 12-week duration (6-week erection, 4-week inspection, 2-week dismantle), weather delays extending to 16+ weeks, production deferment $200K/day during scaffold work.</p>
                                <p><strong>Scope:</strong> MT inspection of 340 critical structural welds: jacket node connections (48 nodes × 4 welds each), major beam-to-column connections (84 welds), equipment foundation welds (95 locations), crane pedestal connections (16 welds), plus follow-up PT verification of suspect indications.</p>
                                <p><strong>Rope Access Execution:</strong> 6-person IRATA Level 3 team with ASNT Level II MT certification. Equipment: portable AC/DC yokes, fluorescent and visible particle systems, battery-powered UV lamps, weather protection (wind shields, temporary shelters). Work schedule: 12-hour shifts to maximize daylight hours and minimize weather delays. Duration: 18 days including mobilization, calibration, inspection and demobilization.</p>
                                <p><strong>Results:</strong> Cost savings: $1.57M (85%). Schedule savings: 14 weeks removed from critical path. Production deferment avoided: $16.8M (84 days × $200K/day). Technical findings: MT detected 23 crack indications in jacket nodes (fatigue cracking from 25 years cyclic loading), 6 cracks in equipment foundations (vibration-induced fatigue), 4 cracks in crane pedestal (operational loading). All cracks confirmed with PT, measured, and repaired during same campaign via rope access grinding + welding. Client now mandates rope access MT every 5 years with interim 2.5-year focused inspection of flagged areas—total program cost 75% lower than single traditional scaffold campaign.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec V Art 7</span>
                                <span class="standard-tag">ASTM E1444 (MT)</span>
                                <span class="standard-tag">API 2A-WSD</span>
                                <span class="standard-tag">ISO 19901-3</span>
                                <span class="standard-tag">NORSOK M-501</span>
                                <span class="standard-tag">DNV-GL (Classification)</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Power Generation Equipment Tab -->
                <div class="tab-panel" id="power-generation">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/power-plant-mt.jpg" alt="Rope access magnetic particle testing on steam turbine casing">
                        </div>
                        <div class="tab-text">
                            <h3>Power Plant Turbine, Boiler & Structural Steel MT Inspection</h3>
                            <p>Coal, gas, nuclear and renewable power plants contain extensive ferromagnetic components subject to thermal cycling, pressure stress, vibration and fatigue. Critical carbon steel components require periodic MT inspection for crack detection to prevent catastrophic failures that can cause extended outages ($500K-2M per day lost generation). Rope access MT enables comprehensive inspection without extended scaffold-related downtime.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Steam Turbine Components:</strong> Turbine casing welds (high-pressure, intermediate, low-pressure sections), steam inlet nozzle connections, extraction line attachments, bearing pedestal welds, rotor support structures, casing flange bolting (where accessible)</li>
                                <li><i class="fas fa-check"></i> <strong>Boiler Pressure Parts:</strong> Steam drum nozzle welds, superheater header connections, reheater attachments, economizer inlet/outlet connections, attemperator weld zones, soot blower attachment welds (where carbon steel construction)</li>
                                <li><i class="fas fa-check"></i> <strong>Structural Steel Framework:</strong> Turbine building steel beams, boiler support structure, pipe rack connections, cable tray supports, platform-to-column connections, equipment foundation anchor bolts, crane rail attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Cooling Systems:</strong> Cooling tower structural steel (where carbon steel construction), condenser support beams, circulating water piping supports, cooling water pump foundations, intake structure steel components</li>
                                <li><i class="fas fa-check"></i> <strong>Coal Handling Systems:</strong> Conveyor support structures, transfer tower steel, crusher foundations, bunker structural steel, reclaim equipment pedestals, stacker/reclaimer rail connections (coal-fired plants)</li>
                                <li><i class="fas fa-check"></i> <strong>Ash Handling Systems:</strong> Bottom ash hopper welds, fly ash silo structures, ash conveyor supports, precipitator steel framework, baghouse support steel, ash handling equipment foundations</li>
                                <li><i class="fas fa-check"></i> <strong>Gas Turbine Supports:</strong> Gas turbine foundation beams (combined cycle plants), compressor inlet housing supports, exhaust ductwork connections, HRSG structural ties, auxiliary equipment skid welds</li>
                                <li><i class="fas fa-check"></i> <strong>Nuclear Auxiliary Systems:</strong> Non-nuclear structural steel (turbine building, service building), cooling system supports, emergency diesel generator foundations, switchgear room structural steel (nuclear plants—non-safety related only)</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-bolt"></i>
                                <div>
                                    <strong>Power Generation Reliability Impact:</strong>
                                    <p>Unplanned turbine or boiler outage costs $500K-2M per day in lost generation for typical 500-1000MW plants. A single undetected crack leading to component failure can cause 4-12 week forced outage ($14-84M lost revenue) plus $2-15M emergency repair costs. Proactive rope access MT inspection ($75-250K per campaign, 2-3 year intervals) detects cracks BEFORE failure—enabling planned repairs during scheduled outages when replacement power is contracted. Typical ROI: 15-25:1 through forced outage avoidance, plus scaffold cost elimination (additional $300-800K savings).</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec V Art 7</span>
                                <span class="standard-tag">ASME Sec XI (Nuclear)</span>
                                <span class="standard-tag">EPRI Guidelines</span>
                                <span class="standard-tag">NERC Reliability Standards</span>
                                <span class="standard-tag">IEEE Power Plant Standards</span>
                                <span class="standard-tag">ASTM E1444</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industrial Steel Structures Tab -->
                <div class="tab-panel" id="industrial-steel">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/refinery-steel-mt.jpg" alt="Rope access MT inspection on refinery structural steel">
                        </div>
                        <div class="tab-text">
                            <h3>Refinery, Chemical Plant & Heavy Industry Steel Structure MT</h3>
                            <p>Refineries, chemical plants, steel mills, cement plants and heavy manufacturing facilities contain extensive carbon steel structures supporting process equipment, piping and storage systems. These structures experience vibration, thermal cycling, corrosive atmospheres and mechanical loading—requiring periodic MT inspection for crack detection to ensure continued safe operation and regulatory compliance.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Process Tower Support Steel:</strong> Distillation column support skirts, tower base ring welds, wind girder connections, nozzle reinforcement welds, platform attachment welds, ladder connections, structural steel ties between towers</li>
                                <li><i class="fas fa-check"></i> <strong>Reactor & Pressure Vessel Supports:</strong> Reactor support skirts (where carbon steel), vessel saddle welds, lug attachments, lifting trunnion welds, thermal expansion shoe connections, structural steel frameworks</li>
                                <li><i class="fas fa-check"></i> <strong>Pipe Rack & Cable Tray Systems:</strong> Pipe rack beam-to-column connections, heavy piping support welds, cable tray bracket attachments, equipment access platform structures, maintenance walkway connections, handrail attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Storage Tank Structures:</strong> Tank shell-to-bottom welds (API 653 inspection), floating roof structural components, fixed roof beam connections, shell-to-roof junction, walkway and stair attachments, wind girder welds</li>
                                <li><i class="fas fa-check"></i> <strong>Heavy Machinery Foundations:</strong> Compressor foundations, pump base plates, motor mounts, gearbox pedestals, crane rail connections, kiln support structures (cement plants), mill foundations (steel plants)</li>
                                <li><i class="fas fa-check"></i> <strong>Material Handling Systems:</strong> Conveyor support structures, transfer chutes, bunker walls, hopper welds, bucket elevator towers, ship loader/unloader structures, railcar loading platforms</li>
                                <li><i class="fas fa-check"></i> <strong>Utility & Auxiliary Systems:</strong> Cooling tower structures, water treatment tank supports, electrical switchyard structures, substation frameworks, emergency generator building steel, warehouse and maintenance building structures</li>
                                <li><i class="fas fa-check"></i> <strong>Safety & Environmental Systems:</strong> Firewater system supports, foam chamber structures, flare stack guys and anchors, scrubber tower supports, air pollution control equipment structures, emergency response equipment mounts</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-industry"></i> Case Study: Petrochemical Complex Structural Steel Integrity Assessment</h4>
                                <p><strong>Asset:</strong> Large petrochemical complex with 12 process units, 200+ elevated structures, 35-year operational age. Insurance carrier required comprehensive structural integrity verification following minor earthquake (5.2 magnitude)—focus on fatigue-critical welds and connections.</p>
                                <p><strong>Traditional Approach:</strong> Engineering firm quoted full scaffold access to inspect 850 critical weld locations across complex: $3.2M total cost, 28-week duration, significant production impact during scaffold erection around operating units.</p>
                                <p><strong>Rope Access Strategy:</strong> Risk-based prioritization: identify 150 highest-risk weld locations (seismic design critical, high-stress, fatigue-prone, previously repaired). Deploy rope access MT for prioritized locations, visual inspection for remaining population. 8-person IRATA team with MT capability, 4 teams working simultaneously across complex.</p>
                                <p><strong>Execution & Results:</strong> Duration: 12 days for rope access MT (150 critical locations) + 8 days for visual screening (700 locations) = 20 days total vs 28 weeks traditional. Cost: $485K rope access + $125K visual = $610K total (81% savings vs $3.2M scaffold approach). Production impact: Minimal—teams worked around operating units using SIMOPS protocols, no unit shutdowns required. Technical findings: MT detected 8 crack indications (earthquake-induced propagation in pre-existing defects), all locations repaired via rope access grinding/rewelding during same campaign. Insurance requirements satisfied, complex returned to full operation 3 weeks ahead of traditional schedule—avoiding $12M production deferment.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 510/570/653</span>
                                <span class="standard-tag">ASME B31.3</span>
                                <span class="standard-tag">OSHA 1910.119 (PSM)</span>
                                <span class="standard-tag">ASME Sec V Art 7</span>
                                <span class="standard-tag">AWS D1.1 (Structural Steel)</span>
                                <span class="standard-tag">AISC Steel Construction</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marine Vessels & Port Infrastructure Tab -->
                <div class="tab-panel" id="marine-vessels">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/ship-hull-mt.jpg" alt="Rope access magnetic particle testing on ship hull structure">
                        </div>
                        <div class="tab-text">
                            <h3>Ship Hull, FPSO & Port Infrastructure Steel Inspection</h3>
                            <p>Marine vessels, floating production units and port infrastructure contain extensive carbon steel structures subject to saltwater corrosion, wave loading, cargo stress and fatigue. Critical structural welds require periodic MT inspection per classification society rules (ABS, DNV, Lloyd's) and port state inspections. Rope access MT enables comprehensive inspection without drydocking costs or extended port occupation.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Ship Hull Structures:</strong> Transverse frame-to-shell welds, longitudinal stiffener connections, bulkhead-to-shell intersections, hatch coaming welds, cargo hold structural steel, ballast tank framework, double hull construction welds</li>
                                <li><i class="fas fa-check"></i> <strong>Deck Structures & Superstructure:</strong> Deck beam-to-shell connections, superstructure foundations, mast and funnel supports, bridge structure welds, accommodation block attachments, lifeboat davit structures, cargo handling equipment pedestals</li>
                                <li><i class="fas fa-check"></i> <strong>FPSO & MODUs (Mobile Drilling Units):</strong> Process module support structures, turret bearing assemblies, mooring system attachments, drilling equipment foundations, mud pump skids, derrick structural connections, helideck support frameworks</li>
                                <li><i class="fas fa-check"></i> <strong>Cargo Systems:</strong> Container ship cell guide welds, bulk carrier hatch covers, tanker cargo pump structures, RoRo vessel ramp mechanisms, crane pedestal connections, cargo handling system rails and supports</li>
                                <li><i class="fas fa-check"></i> <strong>Propulsion & Machinery:</strong> Engine room structural steel, propeller shaft supports, rudder stock connections, thruster tunnel structures, auxiliary machinery foundations, funnel uptake structures, exhaust system supports</li>
                                <li><i class="fas fa-check"></i> <strong>Port Infrastructure:</strong> Wharf and pier structures (steel sheet pile, beam connections), container crane rails, ship-to-shore crane pedestals, mooring bollard welds, fender system attachments, cargo conveyor supports</li>
                                <li><i class="fas fa-check"></i> <strong>Offshore Support Vessels:</strong> Platform supply vessels (PSV), anchor handling tugs, crew boats, dive support vessels—structural steel inspection for cranes, deck machinery, accommodation modules, work boat handling systems</li>
                                <li><i class="fas fa-check"></i> <strong>Classification Society Inspections:</strong> Special survey requirements (5-year intervals), intermediate surveys, condition assessment program (CAP) inspections, damage surveys following grounding/collision, pre-purchase surveys for vessel acquisition</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-anchor"></i>
                                <div>
                                    <strong>Marine Industry Benefits:</strong>
                                    <p>Traditional marine surveying requires drydocking ($500K-3M depending on vessel size) or extensive staging/scaffolding in shipyards ($200-800K for large vessels). Rope access MT enables: (1) In-water inspection while vessel remains operational (cargo operations, charter revenue continues), (2) Rapid port-call inspection (complete structural survey in 3-7 days vs 2-4 weeks drydock), (3) Emergency damage assessment following storms, groundings or collisions—avoiding classification society detention and enabling rapid return to service. Typical savings: 60-80% vs drydocking, plus operational revenue protection ($50-500K per day depending on vessel type and charter rates).</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">SOLAS (Safety of Life at Sea)</span>
                                <span class="standard-tag">MARPOL (Pollution Prevention)</span>
                                <span class="standard-tag">ABS Rules</span>
                                <span class="standard-tag">DNV-GL Rules</span>
                                <span class="standard-tag">Lloyd's Register Rules</span>
                                <span class="standard-tag">IMO Guidelines</span>
                                <span class="standard-tag">ASTM E1444 (MT)</span>
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
            <h2>Our Rope Access Magnetic Particle Testing Capabilities</h2>
            <p>Complete MT equipment portfolio, dual-certified personnel and proven field execution</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-shield"></i>
                    <h3>Personnel Certifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Access:</span> IRATA Level 3 supervisors, Level 2 technicians (current medical, 3-year recert cycle)</li>
                    <li><span class="cap-label">NDT Certification:</span> ASNT Level II/III Magnetic Particle Testing (SNT-TC-1A, CP-189, ISO 9712)</li>
                    <li><span class="cap-label">Cross-Training:</span> Many technicians hold PT + MT dual certification (optimize technique selection)</li>
                    <li><span class="cap-label">Marine Qualified:</span> STCW Basic Safety, BOSIET, marine survival training (offshore/marine projects)</li>
                    <li><span class="cap-label">Safety Training:</span> Confined space, hot work, LOTO, H2S awareness, first aid/CPR</li>
                    <li><span class="cap-label">Rescue Competence:</span> IRATA Level 3 rescue leader on every project (vertical rescue qualified)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-magnet"></i>
                    <h3>MT Equipment & Magnetization</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">AC/DC Yokes:</span> Battery-powered yokes (Parker Research, Magnaflux), lifting capacity 45-90 lbs</li>
                    <li><span class="cap-label">Magnetization Types:</span> AC (surface defects), DC (subsurface), half-wave rectified DC, full-wave rectified</li>
                    <li><span class="cap-label">Field Orientation:</span> Longitudinal (yoke), circular (central conductor), multidirectional (sequential)</li>
                    <li><span class="cap-label">Field Strength Verification:</span> Hall effect gaussmeters, magnetic field indicators, lift-off verification</li>
                    <li><span class="cap-label">Demagnetization:</span> AC degaussing equipment (reversing AC field), residual field verification</li>
                    <li><span class="cap-label">Power Systems:</span> Battery packs (12V/24V), portable generators, inverter systems (where required)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-flask"></i>
                    <h3>Magnetic Particles & Consumables</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Fluorescent Particles:</span> Wet suspension (14A, 14AM, multidirectional), high-sensitivity UV-responsive</li>
                    <li><span class="cap-label">Visible Particles:</span> Dry powder (red, black, gray), aerosol spray cans, magnetic ink concentrations</li>
                    <li><span class="cap-label">Carrier Liquids:</span> Water-based (conditioner, wetting agent), petroleum-based (kerosene, Odorless Mineral Spirits)</li>
                    <li><span class="cap-label">Contrast Enhancers:</span> White contrast paint (dry particle), black light-absorbing backgrounds</li>
                    <li><span class="cap-label">UV Equipment:</span> Battery-powered blacklight lamps (365nm, min 1000 µW/cm²), light meters</li>
                    <li><span class="cap-label">Quality Control:</span> Reference standards (artificial defects), concentration verification, contamination checks</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-wrench"></i>
                    <h3>Material Coverage & Applications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Carbon Steel:</span> Structural steel, pressure vessels, piping, cast steel components</li>
                    <li><span class="cap-label">Low Alloy Steel:</span> Cr-Mo steels, HSLA (high-strength low-alloy), weathering steel</li>
                    <li><span class="cap-label">Cast Iron:</span> Gray iron, ductile iron, malleable iron castings and components</li>
                    <li><span class="cap-label">Ferritic Stainless:</span> 400-series stainless steels (409, 410, 430 series)</li>
                    <li><span class="cap-label">Martensitic Steel:</span> Hardened steels, tool steels, high-carbon steels</li>
                    <li><span class="cap-label">Not Suitable:</span> Austenitic stainless (300 series), aluminum, copper, titanium (use PT/ET instead)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-hard-hat"></i>
                    <h3>Rope Access Safety Systems</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Systems:</span> 11mm static kernmantle (EN 1891), dual-rope redundancy, 23kN MBS</li>
                    <li><span class="cap-label">Work Positioning:</span> Work positioning lanyards, rope access seats, tool carrying systems</li>
                    <li><span class="cap-label">Fall Protection:</span> Backup safety lines, ASAP fall arrest devices, energy absorbers</li>
                    <li><span class="cap-label">Anchors:</span> Engineered anchor points, certified beam clamps, tripods (15kN minimum)</li>
                    <li><span class="cap-label">Tool Management:</span> Tool tethering (all MT equipment), drop zone controls, exclusion barriers</li>
                    <li><span class="cap-label">Environmental Protection:</span> Weather shields (wind/rain), UV protection, temperature monitoring</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-clipboard-check"></i>
                    <h3>Inspection Deliverables & QA</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Documentation:</span> Weld-by-weld MT results, defect photos with scale, accept/reject per code</li>
                    <li><span class="cap-label">Reporting:</span> Comprehensive MT report, defect register (location, type, size), recommendations</li>
                    <li><span class="cap-label">Quality Control:</span> Reference standard verification, daily calibration checks, supervisor spot-checks</li>
                    <li><span class="cap-label">Photography:</span> High-resolution defect images, before/after magnetization, UV lighting setup</li>
                    <li><span class="cap-label">Data Management:</span> Digital storage, GPS coordinates, trending vs previous inspections</li>
                    <li><span class="cap-label">Turnaround:</span> Preliminary findings same-day, final report within 48-72 hours</li>
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
            <h2>Rope Access Magnetic Particle Testing Procedure</h2>
            <p>Integrated safety, access and MT inspection workflow from planning through final deliverables</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Pre-Mobilization Planning & Material Verification</h3>
                    <p>Review structural drawings, welding procedures, material certificates and previous inspection records. Confirm material is ferromagnetic (carbon steel, low alloy, cast iron)—verify with magnet test where specifications unclear. Develop MT procedure per ASME Sec V Art 7, select particle system (fluorescent vs visible), magnetization technique (AC vs DC), and acceptance criteria per AWS D1.1, ASME or client specifications. Design rope access strategy, anchor points, exclusion zones and rescue plan.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> MT Procedure (ASME Sec V), Rope Access Method Statement, RAMS, Material Verification Report
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Mobilization & Site Safety Establishment</h3>
                    <p>Deploy rope access teams, MT equipment and safety systems. Complete site-specific safety induction, obtain permits (hot work, work at height, LOTO where applicable). Install anchor points with load testing/certification. Stage MT equipment (yokes, particles, UV lamps, contrast enhancers), establish exclusion zones for dropped objects, confirm emergency procedures and rescue equipment staging.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Equipment Inventory, Anchor Load Certificates, Safety Permits, Emergency Contact List
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>MT Equipment Calibration & System Verification</h3>
                    <p>Calibrate MT system using traceable reference standards: artificial defects (EDM notches, drilled holes), lift-off verification (ensure adequate magnetic field strength), particle concentration verification (for wet systems), UV lamp intensity measurement (min 1000 µW/cm² for fluorescent particles), contrast verification. Document all settings, particle batch numbers and technician certifications for QA traceability.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Calibration Records, Reference Standard Images, Particle Concentration Test Results, UV Intensity Measurements
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>Surface Preparation & Pre-Inspection Setup</h3>
                    <p>IRATA technicians establish work positioning at inspection locations using dual-rope systems and work seats. Execute surface preparation per ASME Sec V requirements: remove loose scale, dirt, oil, paint (where specified—light coatings may be acceptable), achieve surface roughness <6.3 µm (250 µin) Ra. Verify surface cleanliness using white cloth test. For fluorescent MT: establish darkened environment using portable screens or work at dusk/night with UV illumination.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Surface Preparation Photos, Cleanliness Verification, Work Position Setup Documentation
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>Magnetization & Particle Application</h3>
                    <p>Apply magnetic field using AC or DC yoke magnetization (longitudinal field) or central conductor technique (circular field). Verify field strength using gaussmeter or magnetic particle field indicator. Apply magnetic particles: wet fluorescent suspension (spray or brush application) or dry visible powder (dusting or aerosol). Maintain magnetization during particle application and initial observation period. Ensure adequate particle mobility and distribution across magnetized area.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Magnetization Settings Log, Field Strength Measurements, Particle Application Photos
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>Indication Evaluation & Defect Characterization</h3>
                    <p>Examine magnetized surface under appropriate lighting: UV blacklight (min 1000 µW/cm²) for fluorescent particles in darkened conditions, or white light (min 1000 lux) for visible particles in daylight. Identify relevant indications (linear, rounded, clustered) vs non-relevant indications (magnetic writing, edge effects, material variations). Classify defects per acceptance criteria: crack-like, porosity, inclusion, lamination. Measure indication length, width and evaluate severity per AWS D1.1, ASME or project specifications.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Defect Evaluation Forms, Indication Photos (with scale), Accept/Reject Classifications
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">7</div>
                <div class="timeline-content">
                    <h3>Demagnetization & Post-Inspection Cleanup</h3>
                    <p>Remove magnetic particles using compressed air, brush cleaning or solvent wipe (wet particles). Demagnetize test area using AC demagnetization procedure (if specified by client or follow-on operations require low residual magnetism). Verify demagnetization using residual field measurement—typically <3 gauss residual field. Clean work area, remove particle residues, restore surface condition where required (touch-up painting, protective coatings).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Demagnetization Verification, Surface Restoration Photos, Waste Disposal Documentation
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">8</div>
                <div class="timeline-content">
                    <h3>Final Reporting & Engineering Assessment</h3>
                    <p>Compile comprehensive MT report: executive summary, inspection scope, personnel certifications, equipment calibration records, surface preparation procedures, magnetization techniques employed, particle systems used, weld-by-weld results with accept/reject decisions, defect register with locations/types/severity, high-resolution defect photographs, recommendations for repair/re-inspection/acceptance. For critical defects: coordinate with client engineering for repair procedures, follow-up confirmation MT, and disposition decisions.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Final MT Inspection Report, Defect Register (Excel), Photo Archive, Repair Recommendations
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
                    <span>ASNT Level II/III MT Personnel</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/aws.png" alt="AWS">
                    <span>AWS Welding Inspector Support</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                    <span>ISO 9001:2015 Quality</span>
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
            <h2>Your Rope Access Magnetic Particle Testing Specialists</h2>
            <p>Ferromagnetic material expertise, proven offshore execution and unmatched cost-effectiveness</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Dual-Certified MT + Rope Access Teams</h3>
                <p>Our rope access MT technicians hold both IRATA Level 3 rope access certification AND ASNT Level II/III magnetic particle qualification—ensuring safe access and technically valid MT inspection from the same expertly trained team, eliminating coordination delays and quality gaps.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-magnet"></i></div>
                <h3>Complete MT Equipment Portfolio</h3>
                <p>Battery-powered AC/DC yokes, fluorescent and visible particle systems, portable UV lamps, demagnetization equipment—complete field-deployable MT capability. No external power required, enabling inspection of remote offshore platforms, industrial sites and marine vessels without infrastructure constraints.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-ship"></i></div>
                <h3>Offshore & Marine Industry Experience</h3>
                <p>Extensive North Sea, Middle East and SE Asia offshore platform experience. BOSIET, STCW Basic Safety, marine survival training. Understand SIMOPS, offshore permit-to-work, marine weather constraints and classification society inspection requirements—seamless integration with offshore operations.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-bolt"></i></div>
                <h3>Power Generation Expertise</h3>
                <p>Coal, gas, nuclear and renewable power plant MT experience supporting turbine outages, boiler inspections and structural integrity programs. Understand NERC reliability standards, outage critical path constraints and forced outage economics—deliver inspection results that support maintenance decisions.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Zero-Incident Safety Record</h3>
                <p>Zero lost-time incidents across 80,000+ rope access hours (2018-2024). IRATA-aligned safety management system, daily hazard assessment, continuous safety monitoring, rescue-ready Level 3 supervision and tool tethering protocols—protecting personnel and client assets below work zones.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-clock"></i></div>
                <h3>Rapid Emergency Response</h3>
                <p>12-24 hour mobilization for structural failure investigations, post-incident damage assessment and urgent crack detection requirements. Pre-positioned MT equipment in major industrial hubs—same-day deployment for critical assets within 500km radius of Mumbai, Chennai, Visakhapatnam.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>Rope Access Magnetic Particle Testing Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What materials can be inspected with rope access magnetic particle testing?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>MT works only on ferromagnetic materials: carbon steel, low alloy steel (Cr-Mo grades), cast iron, ferritic stainless steel (400-series), and martensitic stainless steel. NOT suitable for: austenitic stainless steel (300-series), aluminum, copper alloys, titanium, or non-metallic materials. Quick field test: if a magnet sticks strongly to the material, MT will work. For non-ferromagnetic materials, use PT (dye penetrant) or ET (eddy current) instead. We often deploy combined rope access MT + PT teams to cover all material types in a single campaign.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How does rope access MT compare to liquid penetrant testing (PT) for crack detection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>MT vs PT selection depends on material type: (1) Ferromagnetic materials (carbon steel, cast iron): MT is preferred—slightly better sensitivity (0.1mm vs 0.3mm), detects subsurface defects (PT only surface), no surface preparation required (PT needs clean bare metal). (2) Non-ferromagnetic materials (stainless, aluminum, titanium): PT only option (MT doesn't work). (3) Detection capability: Both detect surface-breaking cracks, but MT also finds slightly subsurface defects (up to 6mm depth with DC magnetization). (4) Field practicality: MT requires magnetization equipment, PT requires surface cleaning. For mixed materials (carbon steel + stainless), we deploy both techniques in same rope access campaign—MT for ferrous components, PT for non-ferrous.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you perform MT on painted or coated steel structures?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, with limitations. Coating thickness affects MT sensitivity: (1) Thin coatings (<0.1mm / 4 mils): Usually acceptable, may slightly reduce sensitivity, use higher magnetization current. (2) Medium coatings (0.1-0.5mm / 4-20 mils): Reduced sensitivity, may miss tight cracks, consider coating removal at critical areas. (3) Thick coatings (>0.5mm / >20 mils): Poor sensitivity, coating removal typically required. Paint type matters: non-magnetic coatings (most paints) are better than magnetic coatings (some primers contain iron oxide). Best practice: Remove coatings at critical weld zones (stress concentration areas, previous repair zones), inspect through coatings elsewhere for cost control. Post-MT: Touch-up coating as required. Coating removal adds 30-50% to inspection duration but significantly improves crack detection reliability.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is the difference between fluorescent and visible magnetic particle testing?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Fluorescent MT: Uses UV-responsive particles viewed under blacklight (365nm) in darkened conditions. Advantages: Maximum sensitivity (detects smallest cracks), excellent contrast (bright green/yellow particles on dark background), better for critical applications. Disadvantages: Requires darkening (portable screens/night work), UV lamp equipment, particle bath setup. Visible MT: Uses colored particles (red, black) viewed under white light in normal lighting. Advantages: Simpler equipment, daylight operation, faster inspection, lower cost. Disadvantages: Lower sensitivity (misses tighter cracks), contrast dependent on background. Rope access applications: 70% use visible MT (structural steel, general screening), 30% use fluorescent MT (critical welds, fatigue-prone zones, aerospace/nuclear components). We select based on consequence of missed crack vs inspection complexity/cost.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much does rope access MT cost compared to scaffolding-based inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Typical savings: 60-75% for structures >30m height. Examples: (1) Offshore platform structural MT: $1.4M marine scaffolding vs $320K rope access (77% savings). (2) Refinery tower MT: $580K scaffold vs $165K rope access (72% savings). (3) Power plant cooling tower: $750K vs $195K (74% savings). Savings factors: Scaffold elimination ($300-800 per m³), crane rental avoided ($2-5K per day), reduced site occupation (3-7 days vs 8-16 weeks), no production impact (scaffold around operating equipment). Cost increases with: Height (exponential scaffold costs), structural complexity (irregular geometry), site access constraints, offshore/marine environment. Most clients achieve full payback within first inspection—subsequent campaigns provide 70-80% cost avoidance vs traditional methods.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can MT detect both surface and subsurface defects?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—magnetic particle testing detects surface-breaking cracks AND slightly subsurface defects, unlike PT (surface only). Detection depth depends on magnetization type: (1) AC magnetization: Surface defects primarily (skin effect concentrates field at surface), maximum sensitivity to surface cracks, some sensitivity to defects ~1mm subsurface. (2) DC magnetization: Penetrates deeper into material (up to 6mm), detects subsurface inclusions, laminations, voids, and cracks that haven't yet reached the surface—early warning of developing problems. (3) Defect orientation: Defects perpendicular to magnetic field lines are detected best—use multiple magnetization directions (longitudinal + circular) to detect cracks in any orientation. This subsurface capability makes MT valuable for predictive maintenance—identify defects before they become surface-breaking (and potentially critical).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What safety measures do you use for MT equipment during rope access work?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>All MT equipment is 100% tethered to prevent dropped objects: (1) Primary tethering: Yokes, UV lamps, spray bottles attached to technician harness via retractable lanyards or static tethers. (2) Secondary tethering: Tool bags with secondary attachment points, backup tethers for critical items. (3) Exclusion zones: Ground-level barriers prevent personnel access below work areas during MT operations. (4) Equipment design: Battery-powered systems eliminate electrical cords (trip/snag hazard), lightweight composite yokes reduce drop risk vs heavy steel yokes. (5) Work positioning: Rope access work seats provide stable platform for MT work, both hands free for equipment operation. (6) Environmental protection: Weather shields protect MT materials and UV lamps from wind/moisture. (7) Emergency procedures: Equipment retrieval plans if items are damaged/dropped, backup equipment staged on ground. IRATA statistics: Zero dropped object incidents in our MT programs (2018-2024, 80,000+ rope access hours).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you handle demagnetization requirements during rope access MT?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Demagnetization may be required to prevent interference with: welding operations, machining/fabrication, compass/navigation equipment, magnetic lifting devices, or follow-on NDT methods. Rope access demagnetization methods: (1) AC degaussing: Portable battery-powered degaussers applied to test area, gradually reduce field strength to zero. (2) Reversing AC field: Use MT yoke with decreasing AC current, lift yoke away while energized. (3) Heat treatment: For critical components requiring complete demagnetization (not practical for rope access). (4) Verification: Use gaussmeter to measure residual field—typically <3 gauss required. (5) Documentation: Record initial magnetization levels, demagnetization procedure used, final residual field measurements. Note: Most structural steel applications don't require demagnetization (residual magnetism not harmful). Demagnetization adds 15-30% to inspection time but ensures compatibility with follow-on operations and client requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What acceptance criteria do you use for rope access MT inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Acceptance criteria depend on application and client specifications: (1) ASME Section V Article 7: Technical requirements for MT procedures, equipment, personnel—but refers to construction codes for acceptance criteria. (2) AWS D1.1 (Structural Steel): Prohibits crack-like indications >2mm length, linear indications separated by <2mm treated as single indication, rounded indications (porosity) evaluated by size/distribution. (3) ASME Section VIII/I (Pressure Vessels/Boilers): Generally more stringent than structural—often "no relevant indications" or very small allowable sizes. (4) API 579 (Fitness-for-Service): Crack-like indications evaluated based on stress levels, material properties, remaining life requirements. (5) Client specifications: May be more restrictive than codes—"no indications" or specific length/depth limits. (6) Classification society rules: Marine/offshore structures often follow ABS, DNV, Lloyd's criteria. We apply specified acceptance criteria and provide engineering recommendations for disposition of rejectable indications (repair, monitor, accept with restrictions).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you provide immediate MT results during rope access inspection for urgent repair decisions?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—MT provides real-time defect visibility, enabling immediate accept/reject decisions critical for turnaround and outage schedules: (1) Immediate indication: Cracks visible during magnetization (fluorescent particles glow under UV, visible particles accumulate at defect), no waiting for film development (like radiography) or lab analysis. (2) On-site evaluation: ASNT Level II/III technicians classify indications immediately—relevant vs non-relevant, crack vs non-crack, accept vs reject per applicable criteria. (3) Priority communication: Critical defects (safety-related, pressure boundary, structural) reported to client within 1-2 hours of detection via phone/radio—enables same-shift repair mobilization. (4) Preliminary reports: Daily inspection summaries with weld-by-weld accept/reject status, priority repair lists, photos of critical indications—support shutdown decision-making. (5) Final reports: Comprehensive documentation within 48-72 hours—but preliminary results available same-day for time-critical decisions. Essential for outage management where repair crews, welding equipment and inspection resources must be coordinated within tight windows.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Detect Critical Cracks in Ferromagnetic Structures—Without Scaffolding Delays</h2>
            <p>IRATA Level 3 rope access + ASNT Level II/III magnetic particle expertise in one team. Get comprehensive crack detection at 65% lower cost than scaffolding.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Rope Access MT Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Free Material Verification & Method Selection</span>
                <span><i class="fas fa-check"></i> Fluorescent + Visible MT Capability</span>
                <span><i class="fas fa-check"></i> Same-Day Critical Defect Reporting</span>
                <span><i class="fas fa-check"></i> 12-24 Hour Emergency Response</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Related Rope Access NDT Services</h2>
            <p>Complete crack detection solutions for all material types—ferromagnetic and non-ferromagnetic</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-pt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-tint"></i></div>
                <h3>Rope Access PT (Dye Penetrant)</h3>
                <p>Surface crack detection for non-ferromagnetic materials (stainless steel, aluminum, titanium)—complements MT testing</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access UT Thickness</h3>
                <p>Thickness measurement and corrosion mapping for steel structures, vessels and piping systems</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-vt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access Visual Inspection</h3>
                <p>General visual examination (GVE) and close visual inspection (CVI) for overall structural condition assessment</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-paut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-project-diagram"></i></div>
                <h3>Rope Access PAUT</h3>
                <p>Phased array ultrasonic weld inspection for critical pressure boundary and structural connections</p>
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