<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access Dye Penetrant Testing (PT) Services | IRATA Certified High-Altitude NDT | Alpha Sonix NDT Solutions";
$meta_description = "IRATA/SPRAT certified rope access dye penetrant testing (PT) for welds, structural steel, pipework and critical components at height. Safe, cost-effective surface crack detection without scaffolding. ASME Section V compliant procedures and experienced Level 3 rope access technicians.";
$meta_keywords = "rope access PT, rope access dye penetrant testing, rope access NDT, IRATA PT inspection, high altitude PT testing, penetrant testing at height, rope access welding inspection, scaffolding-free NDT, industrial rope access, offshore rope access PT";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-pt.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-pt-og.jpg">

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
            "serviceType": "Rope Access Dye Penetrant Testing (PT)",
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
            "description": "IRATA/SPRAT certified rope access dye penetrant testing for surface crack detection on structures, welds, pipework and components at height. Eliminates scaffolding costs while maintaining ASME Section V compliance and safety standards.",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Rope Access PT Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Offshore Platform PT Inspection"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Wind Turbine Weld PT Testing"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Industrial Stack & Tower PT"
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
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/rope-access/rope-access-pt-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Rope Access PT</span>
            </div>
            <h1 class="page-title">Rope Access Dye Penetrant Testing (PT)</h1>
            <p class="page-subtitle">IRATA/SPRAT certified rope access technicians delivering ASME Section V compliant surface crack detection at height—safe, efficient inspection without scaffolding costs or production delays</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA/SPRAT Level 3 Certified</span>
                <span class="badge"><i class="fas fa-hard-hat"></i> Zero Scaffold Required</span>
                <span class="badge"><i class="fas fa-check-circle"></i> ASME Sec V Compliant</span>
                <span class="badge"><i class="fas fa-clock"></i> 60% Faster Mobilization</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-user-shield"></i></div>
                <h3>Dual-Certified Professionals</h3>
                <p>IRATA/SPRAT Level 3 rope access technicians with ASNT Level II PT certification—combining working-at-height competence with NDT technical expertise for safe, code-compliant inspections.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-coins"></i></div>
                <h3>Eliminate Scaffolding Costs</h3>
                <p>Access difficult structures, offshore platforms, towers and industrial equipment without scaffolding, cranes or production shutdowns—reducing project costs by up to 70% versus traditional access methods.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-search-plus"></i></div>
                <h3>Precision Surface Crack Detection</h3>
                <p>Identify tight surface-breaking discontinuities (cracks, porosity, lack of fusion, laps) in welds, parent material, fillet joints and critical structural connections using visible or fluorescent penetrants.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Rapid Deployment & Results</h3>
                <p>Mobilize in 24-48 hours with minimal site preparation. Real-time defect marking, digital photo documentation and preliminary findings delivered on-site for immediate decision-making during outages or shutdowns.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS PT ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">WORK AT HEIGHT NDT SOLUTION</span>
                <h2>What is Rope Access Dye Penetrant Testing?</h2>

                <p class="lead">Rope Access Dye Penetrant Testing combines IRATA/SPRAT industrial rope access techniques with ASME Section V liquid penetrant inspection methods to deliver safe, cost-effective surface crack detection on structures, welds, pipework and components located at height or in difficult-to-access locations.</p>

                <p>Traditional PT inspection of elevated structures requires costly scaffolding, aerial work platforms, or production shutdowns. Rope access eliminates these constraints by positioning certified technicians directly at the inspection location using rope systems, harnesses and proven work-at-height safety protocols.</p>

                <p>Our rope access PT technicians are <strong>dual-certified</strong>: holding both rope access competency (IRATA Level 3 or SPRAT Level III) and NDT certification (ASNT Level II Penetrant Testing). This ensures every inspection meets international safety standards <em>and</em> delivers technically valid, code-compliant NDT results.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Access Without Scaffolding</strong>
                            <p>Reach offshore platforms, wind turbines, industrial stacks, storage tanks, bridges and building facades safely using rope access—no scaffolding erection or crane rental required.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Full ASME Section V Compliance</strong>
                            <p>Written procedures aligned to ASME Section V Article 6 (and/or ISO 3452, EN ISO 23277). Qualified penetrant materials, controlled processing times, and Level III oversight ensure code acceptance.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Visible or Fluorescent Techniques</strong>
                            <p>Select visible dye (Type I) for general field applications or fluorescent (Type II) for enhanced sensitivity in critical welds, fatigue-prone zones and aerospace/defence components.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Real-Time Documentation</strong>
                            <p>Defect photography, GPS location tagging, and digital reporting delivered same-day to support shutdown decision-making, weld repair planning and compliance audits.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access PT Matters:</strong>
                        <p>Offshore jackets, flare stacks, petrochemical columns, wind turbine towers and high-rise construction all require periodic weld integrity verification. Rope access PT delivers the same technical quality as ground-level inspection—but at a fraction of the cost, time and production impact of traditional access methods.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request Rope Access PT Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/rope-access/rope-access-pt-inspection.jpg" alt="IRATA technician performing rope access PT inspection on offshore platform">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 technician conducting PT inspection on offshore platform structural weld at 40m height</span>
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
                        <span class="stat-label">IRATA Safety Record</span>
                    </div>
                </div>

                <div class="system-types">
                    <h4><i class="fas fa-certificate"></i> Required Certifications</h4>
                    <div class="system-type-grid">
                        <div class="system-type-item">
                            <i class="fas fa-user-tie"></i>
                            <span>IRATA Level 3 / SPRAT Level III</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-microscope"></i>
                            <span>ASNT Level II PT (SNT-TC-1A)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-heartbeat"></i>
                            <span>Occupational Health Medical</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-life-ring"></i>
                            <span>Rescue & Emergency Response</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-hard-hat"></i>
                            <span>Working at Height (WAH)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-fire-extinguisher"></i>
                            <span>Confined Space & Fire Safety</span>
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
            <span class="section-label">WHY CHOOSE ROPE ACCESS PT</span>
            <h2>Key Advantages Over Traditional Access Methods</h2>
            <p>Safety, speed, cost-efficiency and minimal operational disruption</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-dollar-sign"></i></div>
                <h3>Dramatic Cost Savings</h3>
                <p>Eliminate scaffolding erection/dismantling (often 40-60% of total project cost), crane hire, and extended site occupation. Typical savings: 50-70% versus conventional access for structures above 15m height.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-clock"></i></div>
                <h3>Faster Project Execution</h3>
                <p>Mobilize in 1-2 days vs 1-2 weeks for scaffolding. Inspect, document and demobilize within tight shutdown windows—reducing production downtime and critical path duration for turnarounds.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-shield-alt"></i></div>
                <h3>Superior Safety Performance</h3>
                <p>IRATA global accident rate: 0.00 per 100,000 hours worked (vs. scaffolding industry average ~6-8). Dual-redundant rope systems, certified anchor points, and continuous risk assessment ensure personnel safety.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-leaf"></i></div>
                <h3>Minimal Environmental Impact</h3>
                <p>No heavy equipment, reduced site footprint, lower emissions (no scaffold transport/fabrication), and minimal waste generation. Ideal for environmentally sensitive sites and urban locations with access constraints.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-cogs"></i></div>
                <h3>No Production Shutdown Required</h3>
                <p>Inspect live plants, operating towers, and "hot" pipework (temperature permitting) without process interruption. Particularly valuable for continuous operations where downtime costs exceed $50K-100K per hour.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>Access the Inaccessible</h3>
                <p>Reach locations impossible or impractical for scaffolding: overhangs, confined spaces, offshore subsea zones (splash zone), bridge undersides, and structures with obstructions or active process equipment.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== PT TECHNIQUE COMPARISON ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">PENETRANT TESTING OPTIONS</span>
            <h2>Visible Dye vs Fluorescent Penetrant Selection</h2>
            <p>Choose the method based on sensitivity requirements, environment and acceptance criteria</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th><i class="fas fa-eye"></i> Visible Dye PT (Type I)</th>
                        <th><i class="fas fa-lightbulb"></i> Fluorescent PT (Type II)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Detection Principle</strong></td>
                        <td>Red dye against white developer background</td>
                        <td>UV fluorescence (365nm blacklight)</td>
                    </tr>
                    <tr>
                        <td><strong>Sensitivity</strong></td>
                        <td class="good">Good for most field applications</td>
                        <td class="excellent"><i class="fas fa-star"></i> Superior (detects finer indications)</td>
                    </tr>
                    <tr>
                        <td><strong>Inspection Environment</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Daylight / outdoor / rope access ideal</td>
                        <td class="average">Requires darkened area or UV booth</td>
                    </tr>
                    <tr>
                        <td><strong>Equipment Required</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Minimal (spray cans, rags, lighting)</td>
                        <td>UV lamp (battery or mains), darkening aids</td>
                    </tr>
                    <tr>
                        <td><strong>Best for Rope Access</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> General structural welds, field inspection</td>
                        <td>Critical aerospace, nuclear, fatigue-prone joints</td>
                    </tr>
                    <tr>
                        <td><strong>Photography</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Easy with standard camera</td>
                        <td>Requires UV lighting setup & camera settings</td>
                    </tr>
                    <tr>
                        <td><strong>Cost</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Lower (consumables & equipment)</td>
                        <td>Higher (UV lamps, darkening materials)</td>
                    </tr>
                    <tr>
                        <td><strong>Typical Applications</strong></td>
                        <td>Structural steel, pipework, offshore platforms</td>
                        <td>Aerospace, turbine blades, nuclear components</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Rope Access Recommendation:</strong> Visible dye PT (Type I) is preferred for 90% of rope access applications due to field practicality, lighting conditions and cost-effectiveness. Fluorescent PT (Type II) is deployed for critical welds, aerospace components or when client specifications mandate enhanced sensitivity.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ROPE ACCESS PT APPLICATIONS</span>
            <h2>Industries & Asset Types We Serve</h2>
            <p>From offshore oil & gas to renewable energy and heavy industry</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="offshore">Offshore & Marine</button>
                <button class="tab-btn" data-tab="wind">Wind Energy</button>
                <button class="tab-btn" data-tab="industrial">Industrial & Petrochemical</button>
                <button class="tab-btn" data-tab="infrastructure">Infrastructure & Construction</button>
            </div>

            <div class="tabs-content">
                <!-- Offshore & Marine Tab -->
                <div class="tab-panel active" id="offshore">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/offshore-platform-pt.jpg" alt="Rope access PT inspection on offshore oil platform">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Platform & Marine Structure PT Inspection</h3>
                            <p>Fixed platforms, FPSOs, jackets, flare booms, and offshore wind substations require regular weld integrity verification. Rope access PT eliminates the need for marine scaffolding or vessel-based access—drastically reducing costs and weather delays.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Jacket Structures:</strong> Node welds, brace-to-chord connections, splash zone repairs, fatigue-critical joints</li>
                                <li><i class="fas fa-check"></i> <strong>Topsides:</strong> Pipe supports, module connections, flare stack welds, structural bracing</li>
                                <li><i class="fas fa-check"></i> <strong>Flare Booms:</strong> Full-length weld inspection from rope access positioning at 30-60m height</li>
                                <li><i class="fas fa-check"></i> <strong>FPSO Hulls:</strong> Deck penetrations, mooring attachments, process pipework welds</li>
                                <li><i class="fas fa-check"></i> <strong>Marine Loading Arms:</strong> Swivel connections, counterweight supports, critical load paths</li>
                                <li><i class="fas fa-check"></i> <strong>Subsea Structure Topsides:</strong> Riser connections, subsea tree supports, umbilical hangers</li>
                                <li><i class="fas fa-check"></i> <strong>Post-Modification Verification:</strong> New platform tie-ins, brownfield additions, repair validation</li>
                                <li><i class="fas fa-check"></i> <strong>ABS/DNV Certification Support:</strong> Documentation and photography for third-party verification</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-ship"></i> Case Study: North Sea Jacket Inspection</h4>
                                <p><strong>Challenge:</strong> Client required PT inspection of 240 structural welds on aging jacket platform. Traditional marine scaffolding quote: $850K USD with 6-week duration.</p>
                                <p><strong>Solution:</strong> 4-person IRATA Level 3 rope access team completed inspection in 9 days with total cost $180K—saving $670K (79%) and delivering results 3 weeks ahead of scaffolding schedule.</p>
                                <p><strong>Outcome:</strong> 14 crack indications identified and repaired during same campaign. Zero safety incidents. Client now specifies rope access for all offshore PT/UT programs.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec V Art 6</span>
                                <span class="standard-tag">ISO 3452</span>
                                <span class="standard-tag">API 2A-WSD</span>
                                <span class="standard-tag">NORSOK M-501</span>
                                <span class="standard-tag">DNV-OS-C401</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wind Energy Tab -->
                <div class="tab-panel" id="wind">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/wind-turbine-pt.jpg" alt="Rope access PT on wind turbine tower weld">
                        </div>
                        <div class="tab-text">
                            <h3>Wind Turbine Tower & Foundation Weld Inspection</h3>
                            <p>Onshore and offshore wind turbines experience cyclic loading and fatigue. Rope access PT enables cost-effective inspection of tower welds, transition piece connections and foundation attachments without crane rental or turbine downtime.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Tower Circumferential Welds:</strong> Full-penetration butt welds at 20-30m intervals (hub height 80-120m)</li>
                                <li><i class="fas fa-check"></i> <strong>Door Frame & Hatch Welds:</strong> Stress concentration zones prone to fatigue cracking</li>
                                <li><i class="fas fa-check"></i> <strong>Transition Piece (Offshore):</strong> Tower-to-foundation interface welds in splash zone environment</li>
                                <li><i class="fas fa-check"></i> <strong>Monopile Welds:</strong> Circumferential and longitudinal seam welds (offshore wind)</li>
                                <li><i class="fas fa-check"></i> <strong>Internal Platform Supports:</strong> Ladder attachments, cable tray brackets, platform welds</li>
                                <li><i class="fas fa-check"></i> <strong>Bolt Hole Inspections:</strong> PT of bolt holes for crack initiation (L-flange connections)</li>
                                <li><i class="fas fa-check"></i> <strong>Lightning Protection:</strong> Down-conductor attachment welds and bonding connections</li>
                                <li><i class="fas fa-check"></i> <strong>Pre-Commissioning & Warranty:</strong> New turbine acceptance testing and defect rectification verification</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-wind"></i>
                                <div>
                                    <strong>Wind Farm Fleet Inspection Programs:</strong>
                                    <p>For wind farm operators managing 50+ turbines, we deploy multi-team campaigns with standardized PT procedures, real-time defect databases and statistical analysis to identify design/fabrication trends across the fleet—supporting targeted remediation and OEM warranty claims.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">IEC 61400-22</span>
                                <span class="standard-tag">DNV-ST-0437</span>
                                <span class="standard-tag">ISO 3452</span>
                                <span class="standard-tag">AWS D1.1</span>
                                <span class="standard-tag">EN 1090</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industrial & Petrochemical Tab -->
                <div class="tab-panel" id="industrial">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/refinery-column-pt.jpg" alt="Rope access PT inspection on refinery column">
                        </div>
                        <div class="tab-text">
                            <h3>Refinery, Chemical Plant & Power Station PT Inspection</h3>
                            <p>Petrochemical columns, pressure vessels, stacks, piperack structures and power plant equipment operate under high temperatures, pressures and cyclic conditions. Rope access PT delivers targeted weld inspection without plant shutdown or extensive scaffolding.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Distillation Columns & Towers:</strong> Nozzle welds, shell seams, tray support attachments (30-80m height)</li>
                                <li><i class="fas fa-check"></i> <strong>Piperack & Cable Tray:</strong> High-level pipe supports, hanger welds, expansion joint connections</li>
                                <li><i class="fas fa-check"></i> <strong>Flare Stacks:</strong> Full PT inspection from grade to tip (50-150m) including guy wire attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Pressure Vessels:</strong> External nozzles, manway welds, lifting lug attachments (elevated horizontal vessels)</li>
                                <li><i class="fas fa-check"></i> <strong>Chimneys & Exhaust Stacks:</strong> Steel liner welds, refractory anchor attachments, lightning conductor welds</li>
                                <li><i class="fas fa-check"></i> <strong>Reactor Vessels:</strong> External catalyst loading/unloading port welds, temperature probe nozzles</li>
                                <li><i class="fas fa-check"></i> <strong>Boiler & HRSG Casing:</strong> Access doors, expansion joint welds, ductwork connections (power plants)</li>
                                <li><i class="fas fa-check"></i> <strong>Storage Tank Roof & Shell:</strong> Roof support column welds, shell-to-roof junction, floating roof components</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-industry"></i> Case Study: FCC Unit Turnaround PT Inspection</h4>
                                <p><strong>Asset:</strong> Fluid Catalytic Cracking (FCC) reactor vessel, 45m height, with 18 elevated nozzle connections requiring PT post-modification.</p>
                                <p><strong>Traditional Approach:</strong> Full scaffold encirclement estimated at $420K with 4-week erection + 2-week dismantling (6 weeks total on critical path).</p>
                                <p><strong>Rope Access Solution:</strong> IRATA team completed PT of all nozzle welds in 4 days at $65K total cost—removing 6 weeks from turnaround critical path and saving $355K. Plant restarted 5 days ahead of schedule ($2.1M revenue protection).</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME B31.3</span>
                                <span class="standard-tag">API 510</span>
                                <span class="standard-tag">API 653</span>
                                <span class="standard-tag">ASME Sec V Art 6</span>
                                <span class="standard-tag">ISO 3452</span>
                                <span class="standard-tag">API RP 571</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Infrastructure & Construction Tab -->
                <div class="tab-panel" id="infrastructure">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/bridge-inspection-pt.jpg" alt="Rope access PT on bridge structural weld">
                        </div>
                        <div class="tab-text">
                            <h3>Bridge, Building & Civil Infrastructure Weld Testing</h3>
                            <p>Bridges, high-rise buildings, transmission towers, stadiums and monuments require periodic structural integrity verification. Rope access PT enables non-disruptive inspection of critical connections, seismic retrofit welds and fatigue-prone details.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Bridge Structures:</strong> Gusset plate welds, orthotropic deck details, pier cap connections, cable saddle attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Suspension & Cable-Stayed Bridges:</strong> Cable anchorage welds, tower leg connections, deck hanger points</li>
                                <li><i class="fas fa-check"></i> <strong>Building Facades & Curtain Walls:</strong> Structural steel frame connections, spandrel beam welds, seismic bracing</li>
                                <li><i class="fas fa-check"></i> <strong>Transmission Towers:</strong> Lattice tower leg welds, crossarm connections, insulator mounting brackets</li>
                                <li><i class="fas fa-check"></i> <strong>Stadium Roof Structures:</strong> Truss node welds, cable net connections, cantilever beam supports</li>
                                <li><i class="fas fa-check"></i> <strong>Monuments & Heritage Structures:</strong> Non-invasive PT inspection of historic steel frameworks, bell tower supports</li>
                                <li><i class="fas fa-check"></i> <strong>Seismic Retrofit Verification:</strong> PT of new weld connections added during earthquake strengthening programs</li>
                                <li><i class="fas fa-check"></i> <strong>Post-Incident Assessment:</strong> Rapid PT inspection following earthquakes, vehicle impacts or extreme weather events</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-bridge"></i>
                                <div>
                                    <strong>Bridge Owner Benefits:</strong>
                                    <p>Rope access PT eliminates lane closures, traffic management costs and public disruption. Inspections can be conducted at night or off-peak hours with minimal impact to commuters—particularly valuable for urban bridges where traffic delays cost $10K-50K per hour in economic impact.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">AASHTO Bridge Specs</span>
                                <span class="standard-tag">AWS D1.5 (Bridge Welding)</span>
                                <span class="standard-tag">EN 1090 (Steel Structures)</span>
                                <span class="standard-tag">ISO 3452</span>
                                <span class="standard-tag">ASTM E1417</span>
                                <span class="standard-tag">IRATA ICOP</span>
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
            <h2>Our Rope Access PT Capabilities</h2>
            <p>Equipment, materials, procedures and personnel qualified to international standards</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-shield"></i>
                    <h3>Rope Access Certifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">IRATA Certification:</span> Level 3 supervisors, Level 2 technicians (3-year cycle)</li>
                    <li><span class="cap-label">SPRAT Certification:</span> Level III/II equivalency (North American projects)</li>
                    <li><span class="cap-label">Medical Fitness:</span> Annual occupational health assessment (work at height)</li>
                    <li><span class="cap-label">Rescue Competence:</span> Level 3 rescue leader on every project</li>
                    <li><span class="cap-label">Additional Training:</span> Confined space, BOSIET (offshore), HUET (helicopter)</li>
                    <li><span class="cap-label">NDT Certification:</span> ASNT Level II PT (SNT-TC-1A / CP-189)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-microscope"></i>
                    <h3>PT Technical Capability</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Procedures:</span> ASME Sec V Art 6, ISO 3452, EN ISO 23277, ASTM E1417</li>
                    <li><span class="cap-label">Penetrant Types:</span> Visible dye (Type I), Fluorescent (Type II)</li>
                    <li><span class="cap-label">Sensitivity Levels:</span> Level 2 (standard), Level 3/4 (high sensitivity)</li>
                    <li><span class="cap-label">Developer Forms:</span> Dry powder, water-soluble, non-aqueous (field selection)</li>
                    <li><span class="cap-label">Material Range:</span> Carbon steel, stainless, aluminum, titanium, nickel alloys</li>
                    <li><span class="cap-label">Temperature Range:</span> 10°C to 50°C surface temperature (penetrant dependent)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-hard-hat"></i>
                    <h3>Safety & Rigging Equipment</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Systems:</span> 11mm static kernmantle (dual-rope redundancy)</li>
                    <li><span class="cap-label">Harnesses:</span> Full-body work positioning harnesses (EN 361/358)</li>
                    <li><span class="cap-label">Anchor Points:</span> Engineered anchors, beam clamps, tripods (certified)</li>
                    <li><span class="cap-label">Descent/Ascent:</span> ID/I'D descenders, handled ascenders, progress capture devices</li>
                    <li><span class="cap-label">Fall Protection:</span> Shock-absorbing lanyards, inertia reels (backup systems)</li>
                    <li><span class="cap-label">Inspection Cycle:</span> Pre-use checks, monthly detailed, annual 3rd-party certification</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-flask"></i>
                    <h3>PT Materials & Consumables</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Penetrant Brands:</span> Magnaflux, Sherwin, Met-L-Chek (qualified per ASME)</li>
                    <li><span class="cap-label">Cleaner Types:</span> Solvent removable, water washable (method selection)</li>
                    <li><span class="cap-label">Developer:</strong> Dry powder (offshore), non-aqueous (field preferred)</li>
                    <li><span class="cap-label">UV Lamps:</span> Battery-powered 365nm blacklight (min 1000 µW/cm²)</li>
                    <li><span class="cap-label">Storage:</strong> Temperature-controlled, batch tracking, shelf-life management</li>
                    <li><span class="cap-label">Qualification:</span> Material certs, batch testing per ASTM E1417</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-camera"></i>
                    <h3>Documentation & Reporting</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Photography:</span> High-resolution defect images with scale reference</li>
                    <li><span class="cap-label">GPS Tagging:</span> Location coordinates for defect mapping (GIS integration)</li>
                    <li><span class="cap-label">Real-Time Reporting:</span> Cloud-based defect logging with mobile tablet interface</li>
                    <li><span class="cap-label">Deliverables:</span> PT report, defect register, weld map, photo appendix</li>
                    <li><span class="cap-label">Turnaround:</span> Preliminary findings same-day; final report within 48-72 hours</li>
                    <li><span class="cap-label">Archive:</span> Digital records retained per client/regulatory requirements</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-globe"></i>
                    <h3>Mobilization & Logistics</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Geographic Coverage:</span> Pan-India + offshore (Middle East, SE Asia mobilization)</li>
                    <li><span class="cap-label">Mobilization Time:</span> 24-48 hours (metro areas); 3-5 days (remote/offshore)</li>
                    <li><span class="cap-label">Team Size:</span> 2-8 technicians (scaled to project scope and access complexity)</li>
                    <li><span class="cap-label">Shift Patterns:</span> Day shift, night shift, or 24-hour rotation (turnaround support)</li>
                    <li><span class="cap-label">Equipment Transport:</span> Air-freighted rope kits + local PT consumable supply chain</li>
                    <li><span class="cap-label">Emergency Response:</strong> 12-hour callout for breakdown/failure investigation</li>
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
            <h2>Rope Access PT Inspection Procedure</h2>
            <p>Integrated safety and technical workflow from planning through final reporting</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Pre-Mobilization Planning & Risk Assessment</h3>
                    <p>Site survey (photos/drawings review), anchor point identification, access route planning, rescue plan development, permit requirements (PTW, WAH, confined space), weather window assessment, and PT procedure selection aligned to material/acceptance criteria.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Method Statement, Risk Assessment (RAMS), Rope Access Plan, PT Procedure, Rescue Plan
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Mobilization & Site Induction</h3>
                    <p>Equipment deployment, site-specific safety induction, permit-to-work acquisition, anchor point installation/certification, rope system rigging, and rescue equipment staging. Client toolbox talk and communication protocol confirmation.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Equipment Checklist, Anchor Certification, Permit Folder, Toolbox Talk Record
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>Rope Access Positioning & Surface Preparation</h3>
                    <p>IRATA Level 3 supervisor establishes work zone. Technicians descend/ascend to inspection location using dual-rope systems. Surface preparation: remove paint/coating (if required), degrease, and clean weld area per ASME Sec V requirements using wire brush, grinder or chemical cleaner.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Daily Work Log, Surface Preparation Record
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>Penetrant Application & Dwell Time</h3>
                    <p>Apply penetrant (spray or brush) ensuring complete weld coverage. Maintain minimum dwell time per procedure (typically 10-30 minutes for visible dye; 20-60 minutes for fluorescent). Monitor surface temperature and environmental conditions (wind, humidity, precipitation).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Process Control Log (times/temperatures recorded)
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>Excess Penetrant Removal & Developer Application</h3>
                    <p>Remove excess penetrant using lint-free cloth and remover (solvent or water-washable method). Apply developer (dry powder or non-aqueous spray) in thin, even coat. Allow developer dwell time (7-10 minutes minimum) for indications to bleed out and develop visible contrast.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Process timing recorded in inspection log
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>Interpretation, Documentation & Defect Marking</h3>
                    <p>ASNT Level II technician examines surface under adequate lighting (natural daylight >1000 lux or LED worklight). Identify, classify and measure linear indications, rounded indications, and clustered porosity. Photograph defects with scale reference and GPS tag location. Mark accept/reject per acceptance criteria (AWS D1.1, ASME, client spec).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Defect Photos, Field Inspection Sheet, GPS-Tagged Defect Map
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">7</div>
                <div class="timeline-content">
                    <h3>Post-Cleaning & Rope De-Rigging</h3>
                    <p>Clean inspected surfaces (remove developer/penetrant residues). Technicians ascend/descend to complete remaining inspection zones or de-rig from work area. Rope systems dismantled, anchors removed (or left in place if permanent), and equipment inventoried. Site restoration and permit closure.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Work Completion Certificate, Permit Close-Out
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">8</div>
                <div class="timeline-content">
                    <h3>Final Reporting & Engineering Recommendations</h3>
                    <p>Comprehensive PT report includes: scope, procedure reference, personnel certifications, weld identification drawings, defect register (location/type/size/accept-reject), photo appendix, and recommendations for repair, re-inspection or acceptance. Digital delivery via client portal or email within 48-72 hours.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Final PT Inspection Report, Defect Register (Excel), Weld Map (PDF/DWG), Photo Archive
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
                    <span>ASNT Level II/III PT Personnel</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                    <span>ISO 9001:2015 Quality</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-45001.png" alt="ISO 45001">
                    <span>ISO 45001:2018 Safety</span>
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
            <h2>Your Trusted Rope Access NDT Partner</h2>
            <p>Dual expertise in industrial access and non-destructive testing—delivered safely, on time, within budget</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-medal"></i></div>
                <h3>Dual-Certified Excellence</h3>
                <p>Every rope access PT technician holds both IRATA/SPRAT rope access certification AND ASNT Level II PT qualification—ensuring you get safe access AND technically valid NDT results from the same team.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Proven Safety Record</h3>
                <p>Zero lost-time incidents across 50,000+ rope access hours (2019-2024). IRATA-aligned safety management system, daily pre-start briefings, continuous hazard monitoring, and rescue-ready Level 3 supervision on every project.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-project-diagram"></i></div>
                <h3>Multi-Discipline Capability</h3>
                <p>Beyond PT, we deliver rope access UT thickness, visual inspection, coating assessment, bolting integrity and minor repairs—reducing mobilization costs by bundling multiple scopes with a single access team.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-oil-can"></i></div>
                <h3>Oil & Gas Pedigree</h3>
                <p>Extensive offshore platform, FPSO and refinery experience. Understand SIMOPS, permit-to-work, hydrocarbon area classifications, and simultaneous operations constraints—minimizing production impact and safety conflicts.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-stopwatch"></i></div>
                <h3>Rapid Response Capability</h3>
                <p>24-48 hour mobilization for urgent shutdown support or failure investigations. Pre-positioned equipment in major industrial hubs (Mumbai, Chennai, Visakhapatnam, Hazira) and 12-hour emergency callout service for breakdown scenarios.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-file-contract"></i></div>
                <h3>Transparent Fixed Pricing</h3>
                <p>Detailed scope-of-work breakdown with fixed day-rates (no hidden scaffold/crane costs). Clear deliverables, defined reporting timelines, and change-order process—so you can budget accurately and avoid cost overruns.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>Rope Access PT Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is rope access PT inspection as reliable as traditional ground-level PT?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes. The PT inspection process, materials, and acceptance criteria are identical to ground-level work—rope access only changes HOW we position the technician at the work location. Our procedures are ASME Section V compliant, technicians are ASNT Level II certified, and all PT materials are qualified per ASTM E1417. Third-party audits (insurance, classification societies) regularly validate equivalency.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What are the safety risks of rope access vs scaffolding?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>IRATA statistics (2010-2023) show rope access has a lower accident rate than scaffolding: 0.00 fatalities per 100,000 hours vs scaffolding industry average of 6-8 incidents per 100,000 hours. Rope access uses dual-redundant systems (two independent ropes), continuous harness attachment, and rescue-qualified supervisors—whereas scaffolding presents fall risks during erection/dismantling and ongoing use.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much does rope access PT cost compared to scaffolding-based inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Typical savings: 50-70% for structures above 15m height. Example: Offshore platform PT inspection quoted at $850K using marine scaffolding was completed via rope access for $180K (79% saving). Savings increase with height, access complexity and project duration. Contact us with your drawings for a detailed cost comparison.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What weather conditions limit rope access PT inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Work stops in: sustained winds >10 m/s (offshore) or >12 m/s (onshore), active rain (PT materials require dry surfaces), lightning within 10km, and temperature below 5°C or above 50°C (penetrant performance limits). Offshore projects include significant wave height (Hs) limits per project risk assessment. We monitor weather forecasts and adjust schedules proactively.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you perform PT on painted or coated surfaces?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>PT requires clean, bare metal for defect detection. If welds are painted/coated, we remove coating locally (wire brush, grinding, chemical stripper) before PT application. Post-PT, we can apply touch-up coating if specified. For large coating removal scopes, we coordinate with coating contractors or deploy combined rope access coating removal + PT teams.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure PT quality when working at height in challenging positions?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Technicians use work positioning lanyards and rope access seats to achieve stable, hands-free working positions—allowing proper surface preparation, controlled penetrant application, and adequate lighting for interpretation. IRATA Level 3 supervisors conduct periodic spot-checks, and all defects are photographed with scale references for independent verification. Level III PT oversight reviews results before report issuance.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What documentation do you provide for third-party certification (ABS, DNV, Lloyds)?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Our reports include: ASME Sec V procedure reference, technician certifications (ASNT + IRATA), material qualification certificates, calibration records (penetrant batch testing), weld identification drawings, defect register with accept/reject per code, and photo appendix. We routinely support ABS, DNV, Bureau Veritas, Lloyds Register and insurance surveyor witness inspections—documentation is pre-formatted for classification society acceptance.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you provide rope access PT training or certification?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>We do not provide IRATA/SPRAT rope access training (only IRATA-accredited training providers can issue certifications). However, we offer rope access awareness programs for client inspection personnel and can facilitate IRATA training through our partner training centers. For PT training, we provide ASNT-aligned Level I/II programs through our NDT training academy.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can rope access PT be performed on live/operating equipment?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, with restrictions. PT can be performed on operating equipment if: (1) Surface temperature is within penetrant operating range (typically 10-50°C), (2) No flammable atmosphere (PT uses solvent-based materials), (3) Safe access can be established without process isolation, (4) Permit-to-work and SIMOPS controls are in place. Many refineries and chemical plants successfully use rope access PT during planned shutdowns of specific units while adjacent units remain online.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What happens if defects are found during rope access PT inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Defects are classified per acceptance criteria (AWS D1.1, ASME, API, or client specification). Rejectable indications are photographed, measured, GPS-tagged and reported immediately to client. We provide preliminary findings same-day (or within shift) to support shutdown repair planning. If requested, we can coordinate rope access grinding/re-weld preparation and post-repair PT verification—eliminating de-mobilization/re-mobilization costs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Eliminate Scaffolding Costs—Get Code-Compliant PT Results Faster</h2>
            <p>IRATA Level 3 rope access + ASNT Level II PT expertise in one team. Request a free cost comparison vs traditional access methods.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Rope Access PT Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Free Site Survey & Access Plan</span>
                <span><i class="fas fa-check"></i> 50-70% Cost Savings vs Scaffolding</span>
                <span><i class="fas fa-check"></i> 24-48 Hour Mobilization</span>
                <span><i class="fas fa-check"></i> Same-Day Preliminary Results</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Related Rope Access NDT Services</h2>
            <p>Comprehensive inspection solutions delivered at height—same access, multiple techniques</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access UT Thickness</h3>
                <p>Ultrasonic thickness measurement for corrosion mapping, CML monitoring and remaining life assessment</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-vt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access Visual Inspection</h3>
                <p>Close visual examination (VT) with HD photography, drone correlation and detailed condition reporting</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/conventional-ndt/mt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-magnet"></i></div>
                <h3>Rope Access MT (Magnetic Particle)</h3>
                <p>Surface and near-surface crack detection in ferromagnetic materials (alternative to PT for carbon steel)</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-paut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access PAUT</h3>
                <p>Phased array ultrasonic weld inspection for critical structural connections and pressure boundary welds</p>
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