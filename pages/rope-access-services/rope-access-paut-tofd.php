<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access PAUT & ToFD Inspection Services | IRATA Certified Advanced Ultrasonic Weld Testing | Alpha Sonix NDT Solutions";
$meta_description = "IRATA/SPRAT certified rope access Phased Array Ultrasonic (PAUT) and Time of Flight Diffraction (ToFD) inspection for critical welds, pressure vessels, structural steel and offshore platforms at height. Advanced volumetric NDT without scaffolding costs. ASME Section V Article 4, AWS D1.1 compliant with real-time imaging, crack detection and precise defect sizing.";
$meta_keywords = "rope access PAUT, rope access ToFD, phased array ultrasonic testing at height, rope access weld inspection, IRATA advanced ultrasonics, offshore platform weld testing, scaffolding-free PAUT, pressure vessel weld inspection, structural steel PAUT, advanced ultrasonic rope access";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-paut-tofd.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-paut-tofd-og.jpg">

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
            "serviceType": "Rope Access PAUT & ToFD Inspection",
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
            "description": "IRATA/SPRAT certified rope access advanced ultrasonic testing services combining Phased Array (PAUT) and Time of Flight Diffraction (ToFD) for comprehensive volumetric weld inspection at height. ASME Section V Article 4 compliant inspection without scaffolding costs.",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Rope Access Advanced Ultrasonic Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Offshore Platform Critical Weld Inspection"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Pressure Vessel Weld Assessment"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Pipeline Girth Weld Inspection"
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
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/rope-access/rope-access-paut-tofd-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Rope Access PAUT & ToFD</span>
            </div>
            <h1 class="page-title">Rope Access PAUT & ToFD Inspection</h1>
            <p class="page-subtitle">IRATA/SPRAT certified advanced ultrasonic testing combining Phased Array (PAUT) and Time of Flight Diffraction (ToFD) for comprehensive volumetric weld inspection at height—detect, characterize and size weld defects in critical pressure vessels, offshore platforms and structural steel without scaffolding costs or radiation safety concerns</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA Level 3 + ASNT Level II UT/PAUT</span>
                <span class="badge"><i class="fas fa-cube"></i> Full Volumetric Weld Coverage</span>
                <span class="badge"><i class="fas fa-eye"></i> Real-Time Defect Imaging</span>
                <span class="badge"><i class="fas fa-coins"></i> 70% Cost Reduction vs Scaffolding + RT</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-project-diagram"></i></div>
                <h3>Advanced Phased Array (PAUT) Capability</h3>
                <p>Electronic beam steering, sectorial/linear scanning, real-time B-scan/C-scan imaging for comprehensive weld volume inspection. Detect lack of fusion, incomplete penetration, cracking, porosity and inclusions with precise depth/through-wall location and automated defect sizing per ASME Section V Article 4.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Time of Flight Diffraction (ToFD) Integration</h3>
                <p>Through-transmission diffraction technique providing full weld volume coverage and superior crack detection sensitivity. Complements PAUT with independent crack height sizing, root/cap surface profiling and comprehensive defect characterization—eliminating radiation safety concerns of radiographic testing.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-radiation-alt"></i></div>
                <h3>Radiography Alternative Without Radiation</h3>
                <p>PAUT + ToFD combination delivers equivalent or superior defect detection compared to radiographic testing (RT)—without radiation safety requirements, exclusion zones, film processing delays or environmental restrictions. Immediate results enable same-day engineering decisions during outages.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-user-shield"></i></div>
                <h3>Dual-Certified Rope Access UT Specialists</h3>
                <p>IRATA Level 3 rope access supervisors with ASNT Level II/III Ultrasonic Testing and PAUT certification ensure both safe working-at-height execution AND advanced ultrasonic technical competence—single team delivering comprehensive volumetric weld assessment without access limitations.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS PAUT & TOFD ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">ADVANCED ULTRASONIC NDT AT HEIGHT</span>
                <h2>What is Rope Access PAUT & ToFD Inspection?</h2>

                <p class="lead">Rope Access PAUT & ToFD Inspection combines IRATA/SPRAT industrial rope access techniques with advanced ultrasonic testing methods—Phased Array Ultrasonic Testing (PAUT) and Time of Flight Diffraction (ToFD)—to deliver comprehensive volumetric weld inspection of critical pressure vessels, offshore platforms, structural steel and piping systems located at height, eliminating scaffolding costs while providing superior defect detection and characterization compared to conventional ultrasonic or radiographic methods.</p>

                <p><strong>Phased Array Ultrasonic Testing (PAUT)</strong> uses electronically controlled multi-element transducers to steer, focus and sweep ultrasonic beams through weld volumes without mechanical probe movement. This enables real-time sectorial scanning (S-scan), linear scanning (L-scan), and advanced imaging (B-scan, C-scan) with precise defect location, sizing and characterization—all displayed immediately on high-resolution screens.</p>

                <p><strong>Time of Flight Diffraction (ToFD)</strong> is a through-transmission technique using diffracted signals from defect tips to achieve superior crack detection sensitivity and precise height sizing. ToFD provides full weld volume coverage and excellent crack detection/sizing capability, making it ideal for pressure vessel, pipeline and critical structural weld assessment per ASME Section VIII, API 1104 and AWS D1.1 requirements.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Complete Volumetric Weld Coverage</strong>
                            <p>PAUT sectorial scanning examines entire weld volume from multiple angles while ToFD provides through-transmission coverage—together delivering 100% volumetric inspection equivalent to multi-shot radiography but with real-time results and no radiation safety concerns.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Real-Time Defect Detection & Sizing</strong>
                            <p>Immediate B-scan/C-scan imaging shows defect location, orientation and approximate sizing during inspection. Advanced software provides automated defect detection, classification (crack vs volumetric) and sizing per ASME Section V requirements—no film processing delays.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Superior Crack Detection & Characterization</strong>
                            <p>ToFD excels at crack detection regardless of orientation while PAUT provides detailed defect imaging and precise location. Combined technique detects tight cracks, lack of fusion, incomplete penetration, porosity, inclusions and geometric anomalies with high confidence.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Digital Data Storage & Advanced Analysis</strong>
                            <p>All PAUT/ToFD data recorded digitally with GPS coordinates and weld identification. Post-processing software enables detailed analysis, trending across inspection intervals, automated reporting and integration with asset integrity management systems.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access PAUT + ToFD Matters:</strong>
                        <p>Critical pressure vessel and structural welds in offshore platforms, refineries and power plants are often located 30-150m above ground. Traditional radiographic testing requires scaffolding ($500K-2M), radiation safety procedures (exclusion zones, film processing delays) and weather restrictions. Rope access PAUT + ToFD delivers equivalent or superior defect detection at 60-75% lower cost, immediate results (no film processing), and zero radiation safety concerns—enabling inspection of previously inaccessible welds and reducing outage duration by 3-6 weeks through scaffold elimination.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request PAUT + ToFD Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/rope-access/rope-access-paut-inspection.jpg" alt="IRATA technician performing rope access PAUT inspection on offshore platform pressure vessel weld">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 technician conducting PAUT sectorial scan on offshore platform pressure vessel circumferential weld at 50m elevation</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Volumetric Coverage</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">±2mm</span>
                        <span class="stat-label">Defect Sizing Accuracy</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">70%</span>
                        <span class="stat-label">Cost Reduction vs RT+Scaffold</span>
                    </div>
                </div>

                <div class="system-types">
                    <h4><i class="fas fa-cogs"></i> Advanced UT Techniques Available</h4>
                    <div class="system-type-grid">
                        <div class="system-type-item">
                            <i class="fas fa-project-diagram"></i>
                            <span>PAUT Sectorial Scanning (S-Scan)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-arrows-alt-h"></i>
                            <span>PAUT Linear Scanning (L-Scan)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-wave-square"></i>
                            <span>ToFD Through-Transmission</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-eye"></i>
                            <span>Real-Time B-Scan Imaging</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-th"></i>
                            <span>C-Scan Plan View Mapping</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-robot"></i>
                            <span>Automated Defect Detection (ADD)</span>
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
            <span class="section-label">WHY CHOOSE ROPE ACCESS PAUT & TOFD</span>
            <h2>Key Advantages Over Traditional RT + Scaffolding</h2>
            <p>Superior defect detection, immediate results and massive cost/time savings</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-dollar-sign"></i></div>
                <h3>Eliminate Scaffolding + Radiation Safety Costs</h3>
                <p>Offshore pressure vessel RT inspection: $1.8M (scaffolding + RT crew + exclusion zones) vs $450K rope access PAUT/ToFD (75% savings). Refinery column weld inspection: $920K scaffolding + RT vs $215K rope access (77% savings). Power plant vessel: $1.2M vs $285K (76% savings).</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Real-Time Results vs Film Processing Delays</h3>
                <p>PAUT + ToFD provides immediate defect detection and sizing during inspection—no film processing, chemical development or interpretation delays. Same-day engineering decisions enable rapid weld repair/acceptance during outage windows. RT film processing: 4-24 hour delays plus potential re-shoots for quality issues.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-radiation-alt"></i></div>
                <h3>Zero Radiation Safety Concerns</h3>
                <p>No radiation source, exclusion zones, radiation safety officer, film badges, restricted access or environmental permitting required. Inspect operating plants without production shutdown, personnel evacuation or restricted area establishment. Critical for urban refineries, hospitals, airports with radiation restrictions.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-search-plus"></i></div>
                <h3>Superior Crack Detection & Sizing Accuracy</h3>
                <p>ToFD crack detection sensitivity superior to RT for tight cracks, stress corrosion cracking and fatigue damage. PAUT provides precise defect location (±1-2mm accuracy) and through-wall sizing. Combined technique detects defects RT might miss—particularly planar defects parallel to radiation beam.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-cube"></i></div>
                <h3>Complete 3D Volumetric Assessment</h3>
                <p>PAUT sectorial scanning examines weld from multiple angles (0-70°) while ToFD provides through-transmission coverage. Together deliver comprehensive volumetric inspection equivalent to 3-5 RT exposures but in single setup. Detect complex defect geometries invisible to 2D radiography.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-database"></i></div>
                <h3>Digital Data Storage & Trending Capability</h3>
                <p>All PAUT/ToFD data stored digitally with complete scan records—enable trending across inspection intervals, automated defect growth monitoring, and integration with PCMS/SAP asset management systems. RT film storage, retrieval and digitization eliminated.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== PAUT vs TOFD vs RT COMPARISON ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">TECHNIQUE COMPARISON</span>
            <h2>PAUT vs ToFD vs Radiographic Testing (RT) Selection Guide</h2>
            <p>Choose optimal volumetric inspection method based on defect type, geometry, access and project constraints</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th><i class="fas fa-project-diagram"></i> PAUT (Phased Array)</th>
                        <th><i class="fas fa-wave-square"></i> ToFD (Time of Flight)</th>
                        <th><i class="fas fa-radiation"></i> Radiographic Testing (RT)</th>
                        <th><i class="fas fa-plus"></i> PAUT + ToFD Combined</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Primary Strength</strong></td>
                        <td>Real-time imaging, precise location</td>
                        <td>Superior crack detection, height sizing</td>
                        <td>Permanent record, volumetric coverage</td>
                        <td class="excellent"><i class="fas fa-star"></i> Best of all techniques</td>
                    </tr>
                    <tr>
                        <td><strong>Crack Detection</strong></td>
                        <td class="good">Good (angle dependent)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (orientation independent)</td>
                        <td class="average">Limited (planar defects challenging)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Superior combined capability</td>
                    </tr>
                    <tr>
                        <td><strong>Defect Sizing Accuracy</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> ±1-2mm location accuracy</td>
                        <td class="excellent"><i class="fas fa-star"></i> ±0.5mm height sizing</td>
                        <td class="average">Limited sizing capability</td>
                        <td class="excellent"><i class="fas fa-star"></i> Precise length + height + location</td>
                    </tr>
                    <tr>
                        <td><strong>Inspection Speed (Rope Access)</strong></td>
                        <td class="good">Moderate (sectorial scanning)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Fast (linear scanning)</td>
                        <td class="poor">Slow (setup, exposure, processing)</td>
                        <td class="good">Moderate (comprehensive coverage)</td>
                    </tr>
                    <tr>
                        <td><strong>Real-Time Results</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Immediate B/C-scan imaging</td>
                        <td class="excellent"><i class="fas fa-star"></i> Real-time A-scan display</td>
                        <td class="poor">Film processing delays (4-24 hours)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Immediate defect detection</td>
                    </tr>
                    <tr>
                        <td><strong>Safety Requirements</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Standard industrial safety only</td>
                        <td class="excellent"><i class="fas fa-star"></i> Standard industrial safety only</td>
                        <td class="poor">Radiation safety, exclusion zones, RSO</td>
                        <td class="excellent"><i class="fas fa-star"></i> No radiation safety concerns</td>
                    </tr>
                    <tr>
                        <td><strong>Weather/Environment Sensitivity</strong></td>
                        <td class="good">Moderate (couplant sensitive)</td>
                        <td class="good">Moderate (couplant sensitive)</td>
                        <td class="poor">High (film fogging, processing constraints)</td>
                        <td class="good">Moderate (both couplant based)</td>
                    </tr>
                    <tr>
                        <td><strong>Cost (Rope Access Application)</strong></td>
                        <td>$$$ (PAUT equipment + personnel)</td>
                        <td>$$ (ToFD equipment + personnel)</td>
                        <td>$$$$ (RT crew + scaffold + safety + processing)</td>
                        <td class="excellent"><i class="fas fa-star"></i> 60-75% savings vs RT+scaffold</td>
                    </tr>
                    <tr>
                        <td><strong>Best Rope Access Application</strong></td>
                        <td>Complex geometry welds, precise sizing required</td>
                        <td>Crack detection, pipeline girth welds</td>
                        <td>Permanent records, regulatory requirements</td>
                        <td class="excellent"><i class="fas fa-star"></i> Critical pressure boundary welds</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Rope Access Strategy:</strong> PAUT + ToFD combination provides comprehensive volumetric weld assessment superior to either technique alone or conventional radiography—particularly for rope access applications where re-inspection access is costly. PAUT delivers precise defect imaging and location while ToFD provides superior crack detection and height sizing. Together they meet or exceed ASME Section V Article 4 requirements while eliminating radiation safety constraints and film processing delays critical for outage schedule management.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ROPE ACCESS PAUT & TOFD APPLICATIONS</span>
            <h2>Critical Weld Inspection Across Industries</h2>
            <p>Comprehensive volumetric assessment for pressure vessels, offshore platforms, pipelines and structural steel</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="pressure-vessels">Pressure Vessels & Heat Exchangers</button>
                <button class="tab-btn" data-tab="offshore-platforms">Offshore Platform Welds</button>
                <button class="tab-btn" data-tab="pipeline-piping">Pipeline & Process Piping</button>
                <button class="tab-btn" data-tab="structural-steel">Heavy Structural Steel</button>
            </div>

            <div class="tabs-content">
                <!-- Pressure Vessels & Heat Exchangers Tab -->
                <div class="tab-panel active" id="pressure-vessels">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/pressure-vessel-paut.jpg" alt="Rope access PAUT inspection on elevated pressure vessel circumferential weld">
                        </div>
                        <div class="tab-text">
                            <h3>Elevated Pressure Vessel & Heat Exchanger Weld Inspection</h3>
                            <p>Refineries, chemical plants and power stations operate elevated pressure vessels requiring periodic volumetric weld inspection per ASME Section VIII, API 510 and insurance requirements. Traditional scaffolding + RT approach often costs $800K-2M and requires 8-16 weeks. Rope access PAUT + ToFD delivers equivalent inspection quality in 3-7 days at 60-75% cost savings.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Pressure Vessel Circumferential Welds:</strong> Shell-to-head welds, course-to-course seams, nozzle-to-shell connections using PAUT sectorial scanning (multiple angle examination) plus ToFD through-transmission for complete volumetric coverage and crack detection</li>
                                <li><i class="fas fa-check"></i> <strong>Heat Exchanger Shell Welds:</strong> TEMA-type shell & tube exchangers, longitudinal seam welds, tubesheet-to-shell connections, channel head welds, nozzle attachments—critical for containing process fluids and preventing tube sheet bypass</li>
                                <li><i class="fas fa-check"></i> <strong>Reactor Vessel Weld Zones:</strong> FCC reactors, hydrocracker reactors, catalytic reformer vessels—thick-wall pressure boundary welds requiring full volumetric examination per ASME VIII Div 1/2 with precise defect detection and sizing</li>
                                <li><i class="fas fa-check"></i> <strong>Column & Tower Welds:</strong> Distillation columns, absorption towers, stripping columns—elevated vessels with circumferential welds at multiple elevations (30-80m typical height), tray support ring welds, wind girder attachments</li>
                                <li><i class="fas fa-check"></i> <strong>Drum & Separator Welds:</strong> Steam drums, knockout drums, three-phase separators—horizontal and vertical pressure vessels with complex nozzle arrangements, manway connections and internal attachment welds</li>
                                <li><i class="fas fa-check"></i> <strong>Thick-Wall Vessel Applications:</strong> High-pressure reactors (50-300 bar operating pressure), thick-wall vessels (25-150mm wall thickness) where conventional UT struggles with penetration—PAUT/ToFD optimized for thick section inspection</li>
                                <li><i class="fas fa-check"></i> <strong>Repair Weld Verification:</strong> Post-repair PAUT + ToFD inspection of pressure vessel weld repairs, sleeve installations, nozzle reinforcements—verify repair integrity before return to service</li>
                                <li><i class="fas fa-check"></i> <strong>Fitness-for-Service Assessment:</strong> API 579 Level 2/3 assessments requiring precise defect sizing, crack growth rate analysis, remaining life calculations—PAUT/ToFD provides accurate input data for engineering assessments</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-oil-can"></i> Case Study: Refinery FCC Reactor Inspection</h4>
                                <p><strong>Asset:</strong> Fluid Catalytic Cracking (FCC) reactor vessel (3.5m diameter, 35m height, 65mm wall thickness, 28 circumferential welds). Age: 22 years. Required: 10-year volumetric inspection per ASME Section VIII.</p>
                                <p><strong>Traditional Challenge:</strong> Full scaffold encirclement quote: $1.65M cost, 12-week duration (6-week erection, 4-week RT inspection, 2-week dismantle). RT required 84 exposures (3 shots per weld × 28 welds), film processing delays, radiation exclusion zones affecting adjacent units.</p>
                                <p><strong>Rope Access PAUT + ToFD Solution:</strong> 6-person IRATA Level 3 team with advanced UT certification. Equipment: Olympus OmniScan X3 PAUT, M2M Weld Scanner ToFD, battery power systems, weather protection. Inspection strategy: PAUT sectorial scanning (45°-70° beam angles) for defect detection and imaging, ToFD through-transmission for crack detection and height sizing, real-time data analysis.</p>
                                <p><strong>Execution Results:</strong> Duration: 8 days total (1 day setup, 6 days inspection, 1 day reporting). Cost: $385K (77% savings vs $1.65M scaffold/RT). Technical findings: PAUT detected 3 geometric indications (weld profile variations, acceptable per ASME VIII), ToFD confirmed no crack-like defects, all welds accepted per code. Real-time results eliminated film processing delays—reactor returned to service 11 weeks ahead of traditional schedule. Production deferment avoided: $24M (77 days × $315K/day FCC unit margin).</p>
                                <p><strong>Long-Term Value:</strong> Digital data archive enables trending analysis for next inspection interval planning. Client implemented rope access PAUT/ToFD as standard for all elevated pressure vessels—5-year program saving $8.2M in scaffold costs across 15 vessels.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec VIII (Pressure Vessels)</span>
                                <span class="standard-tag">ASME Sec V Art 4 (UT)</span>
                                <span class="standard-tag">API 510 (Pressure Vessels)</span>
                                <span class="standard-tag">API 579 (Fitness-for-Service)</span>
                                <span class="standard-tag">TEMA Standards</span>
                                <span class="standard-tag">NBIC (Jurisdictional)</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offshore Platform Welds Tab -->
                <div class="tab-panel" id="offshore-platforms">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/offshore-platform-paut.jpg" alt="Rope access ToFD inspection on offshore platform jacket structural weld">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Platform Critical Structural & Pressure Boundary Welds</h3>
                            <p>Fixed platforms, FPSOs, jack-up rigs and semi-submersibles contain hundreds of critical welds subject to fatigue loading, saltwater corrosion and extreme environmental conditions. Classification society rules (ABS, DNV, Lloyd's) require periodic volumetric inspection. Rope access PAUT + ToFD eliminates marine scaffolding costs ($1-5M) while providing comprehensive weld assessment.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Jacket Structure Fatigue-Critical Welds:</strong> Node-to-brace connections, X-brace intersections, conductor guide attachments—areas subject to 25+ years of wave loading requiring ToFD crack detection sensitivity and PAUT defect characterization</li>
                                <li><i class="fas fa-check"></i> <strong>Topside Process Equipment Welds:</strong> Pressure vessel supports, heat exchanger connections, separator weld zones, compressor piping—elevated process equipment requiring volumetric inspection without platform shutdown</li>
                                <li><i class="fas fa-check"></i> <strong>Drilling Equipment Structural Welds:</strong> Derrick leg connections, drawworks foundations, rotary table supports, BOP stack connections (jack-up rigs)—high-load structural welds critical for drilling operations safety</li>
                                <li><i class="fas fa-check"></i> <strong>Flare Boom & Stack Welds:</strong> Elevated flare systems, boom-to-platform connections, guy wire attachments, stack shell welds—critical safety systems requiring comprehensive weld integrity verification</li>
                                <li><i class="fas fa-check"></i> <strong>FPSO Hull & Mooring Welds:</strong> Hull structural welds, turret bearing connections, mooring chain attachments, riser support welds—marine vessel classification society requirements with rope access enabling inspection without drydocking</li>
                                <li><i class="fas fa-check"></i> <strong>Helideck & Crane Support Welds:</strong> Helideck structural frame, crane pedestal welds, jib connections, slew bearing attachments—critical for personnel safety and lifting operations</li>
                                <li><i class="fas fa-check"></i> <strong>Living Quarters & Utilities:</strong> Accommodation module connections, utilities building structural welds, lifeboat davit supports—personnel safety critical structural connections</li>
                                <li><i class="fas fa-check"></i> <strong>Subsea Connection Points:</strong> Riser support welds, J-tube connections, umbilical hang-off points, subsea equipment attachment welds—underwater production system interface points accessible during platform maintenance</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-ship"></i>
                                <div>
                                    <strong>Offshore Platform Economics:</strong>
                                    <p>Marine scaffolding for offshore platform weld inspection costs $2-8M depending on platform size and water depth (supply vessels, weather delays, marine crew costs). Platform production deferment: $300K-2M per day depending on oil/gas production rates. Rope access PAUT + ToFD eliminates scaffolding costs, reduces inspection duration from 8-16 weeks to 1-3 weeks, and enables inspection without production shutdown—total project savings typically $5-25M per campaign. Critical for aging platforms where inspection costs approach platform replacement value.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API RP 2A-WSD (Fixed Platforms)</span>
                                <span class="standard-tag">ISO 19901 (Offshore Structures)</span>
                                <span class="standard-tag">ABS Rules (Classification)</span>
                                <span class="standard-tag">DNV-GL Standards</span>
                                <span class="standard-tag">Lloyd's Register Rules</span>
                                <span class="standard-tag">NORSOK Standards</span>
                                <span class="standard-tag">SOLAS (Marine Safety)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pipeline & Process Piping Tab -->
                <div class="tab-panel" id="pipeline-piping">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/pipeline-tofd-inspection.jpg" alt="Rope access ToFD girth weld inspection on elevated process piping">
                        </div>
                        <div class="tab-text">
                            <h3>Elevated Pipeline Girth Welds & Process Piping Inspection</h3>
                            <p>Offshore risers, elevated process piping, pipeline crossings and interconnecting piping systems require volumetric girth weld inspection per API 1104, ASME B31.3/B31.4/B31.8 and project specifications. ToFD is particularly effective for pipeline applications with superior crack detection and rapid linear scanning capability. Rope access enables inspection without excavation, pipe supports or production shutdown.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Offshore Pipeline Risers:</strong> Platform-to-seafloor pipeline connections, riser girth welds, J-tube connections, flexible-to-rigid transitions—critical energy transmission links requiring 100% volumetric inspection per API 1104</li>
                                <li><i class="fas fa-check"></i> <strong>Elevated Process Piping:</strong> Inter-unit transfer lines, elevated pipe rack systems, process-to-process connections—large diameter piping (12"-48") with thick walls requiring advanced UT techniques for full penetration</li>
                                <li><i class="fas fa-check"></i> <strong>Pipeline Bridge Crossings:</strong> Pipeline spans across rivers, roads, railways—exposed pipeline sections requiring periodic girth weld inspection for fatigue cracking, environmental damage and mechanical stress</li>
                                <li><i class="fas fa-check"></i> <strong>Compressor Station Piping:</strong> High-pressure gas piping, compressor suction/discharge lines, cooler piping, blow-down systems—critical transmission infrastructure with thick-wall, high-pressure girth welds</li>
                                <li><i class="fas fa-check"></i> <strong>LNG/LPG Transfer Systems:</strong> Loading arm connections, ship-to-shore piping, cryogenic transfer lines, vapor return systems—specialized piping systems requiring precise weld integrity for safety and environmental protection</li>
                                <li><i class="fas fa-check"></i> <strong>Refinery Interconnecting Piping:</strong> Unit-to-unit transfer lines, product lines, utility systems—elevated large-bore piping requiring volumetric inspection without unit shutdown or piping support removal</li>
                                <li><i class="fas fa-check"></i> <strong>Steam & Hydrocarbon Headers:</strong> Main steam lines, fuel gas headers, flare headers, process headers—high-temperature, high-pressure piping systems with girth welds requiring advanced UT for accurate inspection</li>
                                <li><i class="fas fa-check"></i> <strong>Tie-In & Hot-Tap Connections:</strong> New pipeline connections, branch connections, repair sleeve welds—construction and maintenance girth welds requiring immediate inspection and acceptance for system return to service</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-industry"></i> Case Study: Offshore Gas Pipeline Riser Inspection</h4>
                                <p><strong>Asset:</strong> 24-inch offshore gas pipeline riser system (platform to 15km subsea pipeline). 12 critical girth welds at platform connection, riser joints and flexible-to-rigid transitions. Water depth: 85m. Age: 18 years.</p>
                                <p><strong>Traditional Challenge:</strong> Marine inspection requiring diving support, subsea UT equipment, weather-sensitive operations. Estimated cost: $2.8M including dive support vessel, saturation diving spread, subsea UT equipment, 21-day offshore campaign, production deferment during inspection.</p>
                                <p><strong>Rope Access Alternative:</strong> Platform-accessible riser welds (above splash zone) inspected via rope access PAUT + ToFD. Subsea welds deferred to next scheduled dive campaign (cost optimization). Scope: 8 critical girth welds accessible from platform using rope access positioning.</p>
                                <p><strong>Execution & Results:</strong> Duration: 5 days (mobilization + 3 days inspection + reporting). Cost: $185K (93% savings vs full marine diving campaign). Technical findings: ToFD detected 2 crack-like indications in girth welds (fatigue cracking from 18 years service). PAUT provided precise crack length and through-wall sizing. Engineering assessment: cracks within acceptable limits for continued service with 3-year re-inspection interval. Production continued uninterrupted—no deferment costs. Client modified inspection strategy: rope access for platform-accessible welds, diving only for subsea welds requiring repair—50% reduction in annual inspection costs.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 1104 (Pipeline Welding)</span>
                                <span class="standard-tag">ASME B31.3 (Process Piping)</span>
                                <span class="standard-tag">ASME B31.4/.8 (Pipeline Transportation)</span>
                                <span class="standard-tag">ISO 13623 (Pipeline Systems)</span>
                                <span class="standard-tag">DNV-OS-F101 (Submarine Pipelines)</span>
                                <span class="standard-tag">API 579 (Fitness-for-Service)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Heavy Structural Steel Tab -->
                <div class="tab-panel" id="structural-steel">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/structural-steel-paut.jpg" alt="Rope access PAUT inspection on heavy structural steel connection weld">
                        </div>
                        <div class="tab-text">
                            <h3>Heavy Structural Steel & Critical Connection Weld Inspection</h3>
                            <p>Bridges, high-rise construction, industrial structures, cranes and heavy machinery contain critical full-penetration welds requiring volumetric inspection per AWS D1.1, AISC specifications and building codes. Traditional RT of elevated structures requires extensive scaffolding and radiation safety management. PAUT + ToFD provides equivalent inspection quality with superior crack detection for fatigue-prone connections.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Bridge Critical Fracture-Critical Welds:</strong> Tension member full-penetration welds, gusset plate connections, orthotropic deck details—fatigue-prone details requiring superior crack detection capability of ToFD with PAUT defect characterization</li>
                                <li><i class="fas fa-check"></i> <strong>High-Rise Building Structural Connections:</strong> Moment frame beam-to-column welds, braced frame connections, seismic force-resisting system welds—life-safety critical connections requiring volumetric inspection per building codes</li>
                                <li><i class="fas fa-check"></i> <strong>Industrial Crane & Heavy Equipment:</strong> Crane girder welds, runway beam connections, heavy machinery foundations, material handling equipment—high-cycle loading applications where crack detection is critical for personnel safety</li>
                                <li><i class="fas fa-check"></i> <strong>Stadium & Arena Roof Structures:</strong> Truss node connections, cable-stayed systems, cantilever beam welds, tension member connections—large-span structures with critical tension welds requiring comprehensive volumetric assessment</li>
                                <li><i class="fas fa-check"></i> <strong>Industrial Structural Frameworks:</strong> Power plant structures, refinery pipe racks, conveyor supports, tank farm structures—heavy industrial structural steel with full-penetration welds in critical load paths</li>
                                <li><i class="fas fa-check"></i> <strong>Mining & Material Handling:</strong> Crusher structures, conveyor transfer towers, reclaim equipment, stacker structures—heavy-duty mining equipment with thick-section structural welds subject to impact and cyclic loading</li>
                                <li><i class="fas fa-check"></i> <strong>Marine & Port Infrastructure:</strong> Container crane structures, ship-to-shore crane rails, wharf structural steel, dry dock frameworks—marine structural steel with thick sections and critical connection welds</li>
                                <li><i class="fas fa-check"></i> <strong>Wind Turbine Support Structures:</strong> Tower base connections, nacelle mounting welds, foundation anchor bolt attachments—renewable energy infrastructure with fatigue-critical welds requiring advanced crack detection</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-bridge"></i>
                                <div>
                                    <strong>Structural Steel Inspection Benefits:</strong>
                                    <p>Highway bridge closure for RT inspection costs $50K-500K per day in traffic delays plus $200K-2M scaffolding/traffic management. High-rise construction RT delays add $100K-1M per week to project schedule. Rope access PAUT + ToFD enables: (1) Inspection without lane closures or traffic interruption, (2) Night/weekend inspection minimizing public impact, (3) No radiation exclusion zones in populated areas, (4) Immediate results for construction schedule decisions. Typical project savings: 60-80% vs traditional RT + access methods, plus schedule protection worth $2-10M in avoided delays.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">AWS D1.1 (Structural Welding)</span>
                                <span class="standard-tag">AWS D1.5 (Bridge Welding)</span>
                                <span class="standard-tag">AISC Steel Construction Manual</span>
                                <span class="standard-tag">AASHTO Bridge Specifications</span>
                                <span class="standard-tag">IBC (International Building Code)</span>
                                <span class="standard-tag">ASTM A6/A6M (Steel Structures)</span>
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
            <h2>Our Rope Access PAUT & ToFD Capabilities</h2>
            <p>Advanced ultrasonic equipment, certified personnel and proven high-altitude execution</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-shield"></i>
                    <h3>Personnel Certifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Access:</span> IRATA Level 3 supervisors, Level 2 technicians (current medical, 3-year cycle)</li>
                    <li><span class="cap-label">Advanced UT:</span> ASNT Level II/III Ultrasonic Testing + PAUT qualification (SNT-TC-1A, CP-189)</li>
                    <li><span class="cap-label">ToFD Certification:</span> Specialized ToFD training (BINDT, PCN, manufacturer-specific)</li>
                    <li><span class="cap-label">Code Qualifications:</span> ASME Section V Article 4, API 1104, AWS D1.1 procedure qualification</li>
                    <li><span class="cap-label">Safety Training:</span> Confined space, LOTO, hot work, offshore survival (BOSIET, HUET)</li>
                    <li><span class="cap-label">Rescue Competence:</span> IRATA Level 3 rescue leader on every project</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-wave-square"></i>
                    <h3>PAUT Equipment & Software</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">PAUT Instruments:</span> Olympus OmniScan X3, Zetec TOPAZ, GE Mentor VisualWeld (32-128 channels)</li>
                    <li><span class="cap-label">Transducer Arrays:</span> Linear arrays (2-10 MHz), matrix arrays, dual matrix arrays (DMA)</li>
                    <li><span class="cap-label">Scanning Techniques:</span> Sectorial scanning (S-scan), linear scanning (L-scan), compound scanning</li>
                    <li><span class="cap-label">Imaging Modes:</span> Real-time B-scan, C-scan mapping, volumetric 3D reconstruction</li>
                    <li><span class="cap-label">Analysis Software:</span> OmniPC, TomoView, WeldSight (automated defect detection)</li>
                    <li><span class="cap-label">Power Systems:</span> Battery packs (8-12 hour operation), solar charging, portable generators</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-project-diagram"></i>
                    <h3>ToFD Equipment & Setup</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">ToFD Systems:</span> M2M Weld Scanner, Zetec Dynaray, GE Mentor ToFD (dedicated systems)</li>
                    <li><span class="cap-label">Transducers:</span> Broadband longitudinal wave probes (2-15 MHz), matched pairs</li>
                    <li><span class="cap-label">Scanning Systems:</span> Motorized scanners, manual raster scanning, encoded positioning</li>
                    <li><span class="cap-label">Coverage Range:</span> Wall thickness 5-150mm, weld lengths up to 12m per setup</li>
                    <li><span class="cap-label">Data Processing:</span> Real-time A-scan display, B-scan imaging, automated analysis</li>
                    <li><span class="cap-label">Calibration:</span> Reference blocks (IIW, ASME, customer-specific), sensitivity verification</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-tools"></i>
                    <h3>Scanning & Positioning Systems</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Automated Scanners:</span> Magnetic wheel scanners, pipe crawlers, flexible track systems</li>
                    <li><span class="cap-label">Manual Scanning:</span> Handheld probe systems with encoding, rope-accessible configurations</li>
                    <li><span class="cap-label">Position Encoding:</span> Rotary encoders, linear encoders, GPS integration where applicable</li>
                    <li><span class="cap-label">Mounting Systems:</span> Magnetic bases, mechanical clamps, custom fixtures for rope access</li>
                    <li><span class="cap-label">Couplant Systems:</span> Water-based couplants, gel couplants, bubbler systems for complex geometry</li>
                    <li><span class="cap-label">Weather Protection:</span> Equipment housings, wind shields, temperature-controlled storage</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-hard-hat"></i>
                    <h3>Rope Access Safety & Equipment</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Systems:</span> 11mm static kernmantle (EN 1891), dual-rope redundancy, 23kN MBS</li>
                    <li><span class="cap-label">Work Positioning:</span> Work positioning lanyards, rope access work seats, equipment platforms</li>
                    <li><span class="cap-label">Tool Management:</span> 100% equipment tethering, tool bags, hoisting systems for heavy equipment</li>
                    <li><span class="cap-label">Power Distribution:</span> Battery systems, portable power, cable management (tethered/protected)</li>
                    <li><span class="cap-label">Communication:</span> Two-way radio systems, emergency communication, data transmission</li>
                    <li><span class="cap-label">Environmental:</span> Weather monitoring, temperature limits, couplant freeze protection</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-database"></i>
                    <h3>Data Management & Reporting</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Digital Storage:</span> Complete scan data archives, waveform storage, image libraries</li>
                    <li><span class="cap-label">Analysis Software:</span> Automated defect detection (ADD), sizing algorithms, acceptance criteria</li>
                    <li><span class="cap-label">Reporting:</span> Automated report generation, customizable templates, code compliance verification</li>
                    <li><span class="cap-label">Integration:</span> CAD overlay, GIS integration, PCMS/SAP connectivity where required</li>
                    <li><span class="cap-label">Trending:</span> Historical data comparison, defect growth monitoring, life assessment support</li>
                    <li><span class="cap-label">Deliverables:</span> Executive summary, detailed technical report, raw data files, 3D visualization</li>
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
            <h2>Rope Access PAUT & ToFD Inspection Procedure</h2>
            <p>Systematic approach from pre-inspection planning through final engineering assessment</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Pre-Mobilization Engineering & Procedure Development</h3>
                    <p>Review welding procedures, material specifications, acceptance criteria and access constraints. Develop PAUT/ToFD procedures per ASME Section V Article 4, select beam angles/frequencies, establish scanning protocols and acceptance criteria per applicable codes (ASME VIII, API 1104, AWS D1.1). Design rope access strategy, anchor points and equipment positioning plans.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> PAUT/ToFD Procedures (ASME Sec V), Rope Access Method Statement, Equipment List, Acceptance Criteria
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Mobilization & Site Preparation</h3>
                    <p>Deploy rope access teams, PAUT/ToFD equipment and support systems. Complete site safety induction, obtain permits (WAH, LOTO, hot work where applicable), install anchor points with load testing. Stage advanced UT equipment with weather protection, establish power systems and data communication networks.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Equipment Inventory, Anchor Certificates, Site Safety Documentation, Communication Plan
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>System Calibration & Verification</h3>
                    <p>Calibrate PAUT/ToFD systems using traceable reference standards: IIW reference blocks, ASME calibration blocks, or customer-specific standards representing actual weld geometry and material. Verify beam angle accuracy, sensitivity levels, DAC/TCG curves, and ToFD system timing. Document all settings and verification scans.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Calibration Records, Reference Standard Scans, System Verification Reports, Sensitivity Settings
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>Rope Access Positioning & Surface Preparation</h3>
                    <p>IRATA technicians establish secure work positioning at weld locations using dual-rope systems and work platforms. Prepare weld surfaces: remove paint/coating where required (typically ±50mm from weld centerline), clean to achieve adequate couplant contact, verify surface roughness suitable for PAUT/ToFD probe contact and scanning movement.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Surface Preparation Photos, Work Position Setup, Access Route Verification
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>PAUT Sectorial Scanning</h3>
                    <p>Execute PAUT inspection using sectorial scanning (S-scan) from both sides of weld where accessible. Scan through range of beam angles (typically 45-70°) to examine entire weld volume. Real-time B-scan imaging displays defect indications immediately. Document all indications with screen captures, location measurements and preliminary classification (crack-like vs volumetric).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> PAUT B-Scan Images, Defect Location Map, Preliminary Indication List, Real-Time Assessment
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>ToFD Through-Transmission Scanning</h3>
                    <p>Deploy ToFD transducers in through-transmission configuration across weld. Execute linear scanning along full weld length with precise probe positioning and spacing control. ToFD provides independent verification of PAUT findings plus superior crack detection and height sizing capability. Real-time A-scan and B-scan displays enable immediate crack detection.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> ToFD A-Scan/B-Scan Data, Crack Detection Results, Height Sizing Measurements, Weld Profile Data
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">7</div>
                <div class="timeline-content">
                    <h3>Data Analysis & Defect Characterization</h3>
                    <p>Advanced analysis using PAUT/ToFD software: automated defect detection (ADD), defect classification (planar vs volumetric), precise sizing measurements, acceptance/rejection per applicable codes. Cross-correlate PAUT and ToFD results for comprehensive defect assessment. Generate detailed defect reports with location coordinates, sizing data and engineering recommendations.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Detailed Defect Analysis, Sizing Reports, Accept/Reject Classifications, Cross-Correlation Results
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">8</div>
                <div class="timeline-content">
                    <h3>Final Reporting & Engineering Assessment</h3>
                    <p>Comprehensive inspection report including: executive summary, inspection procedures, personnel certifications, equipment calibration records, weld-by-weld results with accept/reject decisions, detailed defect characterization, engineering recommendations for repair/monitoring/acceptance, and digital data archive. Coordinate with client engineering for disposition decisions on rejectable indications.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Final Inspection Report, Executive Summary, Digital Data Package, Engineering Recommendations, Repair Procedures (if required)
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
                    <span>ASNT Level II/III UT & PAUT</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/paut-certification.png" alt="PAUT">
                    <span>Advanced PAUT/ToFD Training</span>
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
            <h2>Your Advanced Ultrasonic Testing Specialists</h2>
            <p>Cutting-edge PAUT + ToFD capability, proven rope access execution and comprehensive weld assessment expertise</p>
        </div>

        <div class="why-choose-grid">
           <div class="why-choose-grid">
    <div class="why-card">
        <div class="why-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Advanced UT Technology Leadership</h3>
        <p>Latest PAUT/ToFD equipment (Olympus OmniScan X3, M2M Weld Scanner) with advanced software capabilities including automated defect detection, 3D visualization and comprehensive data analysis. Continuous technology investment ensures cutting-edge inspection capability.</p>
    </div>

    <div class="why-card">
        <div class="why-icon"><i class="fas fa-user-tie"></i></div>
        <h3>Dual-Certified Technical Excellence</h3>
        <p>IRATA Level 3 rope access supervisors with ASNT Level II/III advanced ultrasonic certification—ensuring both safe working-at-height execution AND sophisticated PAUT/ToFD technical competence from the same highly qualified team, eliminating coordination and quality gaps.</p>
    </div>

    <div class="why-card">
        <div class="why-icon"><i class="fas fa-oil-can"></i></div>
        <h3>Offshore & Heavy Industry Proven</h3>
        <p>Extensive offshore platform, refinery, power plant and heavy industrial experience. Understand SIMOPS, permit-to-work, marine operations and critical infrastructure inspection requirements—delivering sophisticated UT inspection in challenging environments with zero safety incidents.</p>
    </div>

    <div class="why-card">
        <div class="why-icon"><i class="fas fa-check-double"></i></div> 
        <h3>Code Compliance & Engineering Support</h3>
        <p>ASME Section V Article 4, API 1104, AWS D1.1 qualified procedures with in-house engineering support for acceptance criteria interpretation, defect assessment, repair recommendations and fitness-for-service evaluations—comprehensive technical support beyond data collection.</p>
    </div>

    <div class="why-card">
        <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
        <h3>Zero-Incident Safety Performance</h3>
        <p>Zero lost-time incidents across 90,000+ rope access hours (2018-2024). IRATA-aligned safety management system, comprehensive equipment tethering protocols, rescue-ready Level 3 supervision and proven track record with advanced UT equipment at height.</p>
    </div>

    <div class="why-card">
        <div class="why-icon"><i class="fas fa-clock"></i></div>
        <h3>Rapid Emergency Response</h3>
        <p>12-24 hour emergency mobilization for critical weld failure investigation, post-incident damage assessment and urgent volumetric inspection requirements. Advanced UT equipment pre-positioned in major industrial hubs for same-day deployment.</p>
    </div>
</div>  
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>Rope Access PAUT & ToFD Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How does PAUT + ToFD compare to radiographic testing (RT) for weld inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>PAUT + ToFD provides equivalent or superior defect detection compared to RT with several advantages: (1) Real-time results—immediate defect detection vs 4-24 hour film processing delays, (2) Superior crack detection—ToFD detects tight cracks RT might miss, particularly planar defects parallel to radiation beam, (3) Precise sizing—PAUT/ToFD provides accurate defect location and dimensions vs limited RT sizing capability, (4) No radiation safety—eliminates exclusion zones, radiation safety officer, film badges, environmental restrictions, (5) 3D volumetric data—complete weld volume assessment vs 2D shadow images, (6) Digital storage—complete data archiving vs film storage/retrieval issues. Cost comparison: typically 60-75% savings vs RT + scaffolding when combined with rope access.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What types of weld defects can PAUT and ToFD detect?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>PAUT + ToFD combination detects all volumetric weld defects: (1) Crack-like defects: fatigue cracks, stress corrosion cracking, hot cracks, cold cracks, hydrogen-induced cracking—ToFD excels at crack detection regardless of orientation, (2) Lack of fusion: sidewall lack of fusion, inter-run lack of fusion—PAUT sectorial scanning from multiple angles ensures detection, (3) Incomplete penetration: lack of root penetration, excessive root concavity—both techniques detect root defects effectively, (4) Porosity: gas porosity, wormholes, clustered porosity—PAUT B-scan imaging clearly shows pore characteristics, (5) Inclusions: slag inclusions, tungsten inclusions, oxide inclusions—both techniques detect and size volumetric inclusions, (6) Geometric defects: undercut, overlap, excessive reinforcement—surface profiling capability of both techniques. Detection sensitivity: typically 0.5-1mm minimum defect size depending on material thickness and frequency selection.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you perform PAUT + ToFD on thick-wall pressure vessel welds?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—PAUT and ToFD are particularly effective for thick-section welds (25-150mm+ wall thickness) where conventional UT struggles with penetration and RT requires multiple exposures. Advantages for thick walls: (1) PAUT beam steering—electronically focus beam at specific depths, optimize penetration for thick sections, (2) ToFD through-transmission—full wall thickness coverage in single scan, excellent for thick-wall crack detection, (3) Multiple frequency selection—low frequencies (2-5 MHz) for penetration, higher frequencies for resolution, (4) Advanced gain control—Time-Corrected Gain (TCG) and Distance-Amplitude Correction (DAC) optimize signals throughout thick sections, (5) Sectorial scanning—multiple beam angles ensure complete weld volume examination. Typical wall thickness range: 10-150mm for standard PAUT/ToFD, up to 300mm+ for specialized low-frequency systems. Much more cost-effective than multiple RT exposures required for thick sections.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure PAUT/ToFD quality when technicians are working on ropes?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Quality assurance for rope access PAUT/ToFD: (1) Stable work positioning—rope access work seats and lanyards provide hands-free, stable platform for precise probe manipulation and couplant application, (2) Equipment tethering—100% tethering prevents dropped equipment while maintaining full operational capability, (3) Systematic scanning—encoded positioning systems and systematic scan protocols ensure complete coverage regardless of work position, (4) Real-time verification—immediate B-scan/A-scan display enables real-time quality control and re-scanning if needed, (5) Supervisor oversight—IRATA Level 3 supervisor with advanced UT certification provides continuous technical oversight and spot-checking, (6) Calibration verification—daily calibration checks and reference standard verification ensure system performance, (7) Digital records—complete scan data storage enables post-inspection review and verification. Our rope access PAUT/ToFD results consistently meet ASME Section V requirements with <1% re-inspection rate due to quality issues.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What environmental conditions limit rope access PAUT + ToFD inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Environmental limitations: (1) Wind: >10 m/s offshore, >12 m/s onshore (affects probe contact and couplant application), (2) Temperature: -10°C to +50°C (couplant freezing/evaporation limits, equipment operating range), (3) Precipitation: Active rain/snow stops inspection (couplant washout, equipment water damage), light drizzle acceptable with protective measures, (4) Surface conditions: Heavy rust, loose scale, paint >3mm thickness may require removal for adequate probe contact, (5) Geometry: Minimum weld access for probe placement and scanning movement, (6) Vibration: Excessive structure vibration affects probe contact and data quality. Mitigation measures: weather protection shelters, heated couplants for low temperatures, surface preparation equipment, equipment heaters/coolers, alternative couplant systems (gels, bubbler systems). We monitor weather conditions and adjust work schedules proactively—typical weather delays 5-10% of scheduled inspection time.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How accurate is PAUT + ToFD defect sizing compared to actual defect dimensions?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Sizing accuracy depends on defect type and technique: (1) PAUT defect location: ±1-2mm accuracy for defect position (depth, distance from weld centerline), excellent for repair excavation planning, (2) ToFD crack height sizing: ±0.5mm accuracy for through-wall crack dimension—superior to RT or conventional UT, (3) PAUT defect length: ±2-3mm for defect length along weld direction using C-scan mapping, (4) Combined assessment: PAUT + ToFD together provide length, height, depth and orientation—comprehensive 3D defect characterization. Validation studies show 85-95% correlation with destructive testing results. Factors affecting accuracy: defect orientation (perpendicular to beam = best accuracy), material properties (grain structure, attenuation), calibration quality, technician skill level. For critical applications requiring precise sizing (fitness-for-service assessments), we recommend multiple technique verification or destructive confirmation on sample defects.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you provide immediate accept/reject decisions for welds during outages?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—PAUT + ToFD provides real-time defect detection enabling immediate engineering decisions critical for outage management: (1) Immediate detection—defects visible on B-scan/A-scan displays during scanning, no waiting for film processing or lab analysis, (2) Real-time sizing—automated sizing algorithms provide immediate defect dimensions for comparison with acceptance criteria, (3) On-site assessment—ASNT Level II/III technicians provide immediate accept/reject decisions per ASME, API or AWS criteria, (4) Priority reporting—critical defects (pressure boundary, safety-related) reported within 1-2 hours to client engineering/management, (5) Repair coordination—immediate defect location and sizing data enables same-shift weld repair mobilization, excavation planning and repair procedure selection, (6) Digital documentation—instant data storage and photo documentation for quality records and repair verification. Essential for turnaround critical path management where welding crews, inspection resources and engineering decisions must be coordinated within tight shutdown windows. Typical delivery: preliminary weld-by-weld accept/reject list within 4-8 hours of inspection completion.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much does rope access PAUT + ToFD cost compared to traditional RT + scaffolding?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Typical savings: 60-75% for elevated structure weld inspection. Cost breakdown examples: (1) Offshore pressure vessel: $1.8M traditional (scaffolding + RT crew + radiation safety + weather delays) vs $450K rope access PAUT/ToFD (75% savings), (2) Refinery column: $920K scaffold + RT vs $215K rope access (77% savings), (3) Bridge structural welds: $680K vs $155K (77% savings). Cost drivers for traditional approach: scaffold erection/dismantling ($200-800 per m³), RT crew with radiation safety officer ($3-5K per day), film processing delays, weather sensitivity, radiation exclusion zones (production impact). Rope access advantages: rapid mobilization (2-3 days vs 4-8 weeks), immediate results (no film processing), weather flexibility, no radiation safety costs, minimal production impact. ROI factors: Most clients achieve payback within first inspection campaign, subsequent inspections provide 70-80% ongoing cost avoidance, plus schedule protection worth $1-10M in avoided delays for critical path projects.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What deliverables do you provide after PAUT + ToFD inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Comprehensive inspection package: (1) Executive Summary—project overview, inspection scope, key findings, recommendations (5-10 pages for management review), (2) Technical Report—detailed methodology, personnel certifications, equipment calibration, weld-by-weld results, accept/reject per codes (50-200 pages), (3) Digital Data Package—complete PAUT/ToFD scan files, B-scan images, A-scan data, C-scan maps (USB drive or cloud access), (4) Defect Register—Excel spreadsheet with weld ID, location coordinates, defect type/size, accept/reject, repair recommendations, (5) Visual Documentation—high-resolution photos of defects, scanning setup, calibration blocks, equipment configuration, (6) Engineering Assessment—API 579 fitness-for-service evaluation where applicable, remaining life calculations, inspection interval recommendations, (7) Quality Records—personnel certifications, equipment calibration certificates, procedure documentation, reference standard verification. Delivery timeline: preliminary findings within 24-48 hours (critical defects immediately), final report package within 5-7 days of demobilization. Data format: client-specified formats (PDF, Excel, CAD overlay, GIS integration, PCMS upload where required).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can PAUT + ToFD inspection be performed on operating equipment?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—with appropriate safety measures and temperature limitations: (1) Temperature limits: Surface temperature <60°C for standard probes (couplant evaporation, probe damage), up to 150°C with high-temperature probes and specialized couplants, (2) Vibration tolerance: PAUT/ToFD less sensitive to vibration than conventional UT—can inspect operating pumps, compressors with controlled probe contact, (3) Safety protocols: SIMOPS procedures, hot work permits where applicable, non-intrusive inspection (no penetration of pressure boundary), (4) Access considerations: Safe access without process isolation, adequate working space for probe scanning, personnel protection from hot surfaces/hazardous materials. Typical operating equipment inspections: external vessel welds (pressure vessels in service), structural support welds (operating towers/columns), non-process piping welds, equipment foundations and supports. Benefits: Avoids production shutdown costs ($50K-500K per day), enables condition-based maintenance decisions, identifies problems before scheduled outages. Limitations: Internal weld inspection requires shutdown, very high temperatures (>150°C) may require cooling or shutdown, hazardous area classifications may require specialized equipment certification.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Advanced Volumetric Weld Inspection Without Radiation Safety Concerns</h2>
            <p>IRATA Level 3 rope access + advanced PAUT/ToFD capability delivers comprehensive weld assessment at 70% lower cost than RT + scaffolding. Real-time results, superior crack detection.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request PAUT + ToFD Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Free Feasibility Assessment & Code Review</span>
                <span><i class="fas fa-check"></i> Real-Time Results (No Film Processing)</span>
                <span><i class="fas fa-check"></i> Superior Crack Detection vs RT</span>
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
            <p>Comprehensive weld and structural inspection solutions—from surface detection to volumetric assessment</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access UT Thickness</h3>
                <p>Conventional ultrasonic thickness measurement for corrosion mapping and wall loss assessment</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-pt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-tint"></i></div>
                <h3>Rope Access PT (Dye Penetrant)</h3>
                <p>Surface crack detection for welds and structural connections—complements volumetric PAUT/ToFD inspection</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-mt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-magnet"></i></div>
                <h3>Rope Access MT (Magnetic Particle)</h3>
                <p>Surface and near-surface crack detection in ferromagnetic welds and structural steel components</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-vt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access Visual Inspection</h3>
                <p>General visual examination (GVE) and close visual inspection (CVI) for overall structural condition assessment</p>
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