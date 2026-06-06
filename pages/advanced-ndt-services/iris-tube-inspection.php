<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Internal Rotary Inspection System (IRIS) – Precision Ultrasonic Tube Inspection | Alpha Sonix NDT Solutions";
$meta_description = "IRIS ultrasonic tube inspection for absolute wall thickness measurement (±0.05 mm) in heat exchangers, boilers, condensers. C‑scan imaging, ID/OD profiling, no material limitations. ASME / API code‑compliant reports.";
$meta_keywords = "IRIS, internal rotary inspection, ultrasonic tube testing, IRIS inspection, absolute thickness measurement, tube profiling, heat exchanger tube inspection, boiler tube testing, condenser tube inspection, C‑scan, tube wall thickness, NDT tube inspection";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/iris-tube-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/iris-og.jpg">
    
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
        "serviceType": "Internal Rotary Inspection System (IRIS)",
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
        "description": "IRIS ultrasonic tube inspection providing absolute wall thickness measurement with ±0.05 mm accuracy, C‑scan imaging, and full ID/OD profiling for heat exchanger, boiler, and condenser tubes. Material‑independent, code‑compliant."
    }
    </script>
</head>
<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/IRIS/iris1.png');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>IRIS</span>
                </div>
                <h1 class="page-title">Internal Rotary Inspection System (IRIS)</h1>
                <p class="page-subtitle">Direct, absolute wall thickness measurement for heat exchanger, boiler &amp; condenser tubes – C‑scan imaging through deposits, any material.</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-ruler-horizontal"></i> ±0.05 mm Accuracy</span>
                    <span class="badge"><i class="fas fa-image"></i> Full C‑Scan Mapping</span>
                    <span class="badge"><i class="fas fa-atom"></i> Material‑Independent</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== QUICK OVERVIEW ===================== -->
    <section class="quick-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Rotary Ultrasonic Principle</h3>
                    <p>360° rotating mirror inside the tube captures circumferential thickness profile via pulse‑echo ultrasound.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-crosshairs"></i></div>
                    <h3>Absolute Thickness</h3>
                    <p>Direct time‑of‑flight measurement – not relative signal. Actual remaining wall in millimetres, traceable to NIST standards.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-camera"></i></div>
                    <h3>Visual C‑Scan Imaging</h3>
                    <p>Colour‑coded wall‑loss maps show exact defect location, shape and severity – easy to interpret and archive.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"><i class="fas fa-layer-group"></i></div>
                    <h3>Inspects Through Deposits</h3>
                    <p>Ultrasound penetrates magnetite, scale, sludge – only requires clean water for coupling, not pristine surfaces.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS IRIS ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ULTRASONIC TUBE INSPECTION</span>
                    <h2>What is Internal Rotary Inspection System (IRIS)?</h2>
                    <p class="lead">IRIS is an advanced ultrasonic technique that provides direct, absolute wall‑thickness measurement of tubes by means of a rotating mirror and high‑frequency pulse‑echo probe. It delivers volumetric C‑scan images, enabling precise sizing and location of corrosion, erosion, cracking, and other wall‑loss mechanisms.</p>
                    
                    <p>A small ultrasonic transducer fires pulses perpendicular to the tube axis. A 45° mirror rotating at 1800–3600 RPM directs the beam radially against the tube wall. As the probe is pulled through the tube, the helical scan covers the entire circumference and length. The time‑of‑flight between the inner‑diameter (ID) and outer‑diameter (OD) echoes yields the exact wall thickness at every point. Unlike eddy current methods that measure relative changes in conductivity, IRIS gives you the actual remaining metal thickness in millimetres.</p>

                    <p>Because IRIS relies on sound velocity rather than electrical or magnetic properties, it works on any tube material – carbon steel, stainless steel, copper, titanium, Inconel, Hastelloy, clad tubes, and more. The only requirement is a water‑filled tube for acoustic coupling. Scale, magnetite, and light deposits do not block the signal; they become visible in the C‑scan as well.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Absolute, Not Relative</strong>
                                <p>Wall thickness measured directly (mm), enabling direct comparison with minimum required thickness for code compliance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material‑Independent</strong>
                                <p>No calibration changes for ferrous vs non‑ferrous. One system inspects all tube alloys in your plant.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>ID &amp; OD Profiling</strong>
                                <p>Separate echoes from ID and OD surfaces distinguish waterside vs fireside attack, pinpoint damage location.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Permanent Digital Record</strong>
                                <p>C‑scan images, A‑scans and thickness data archived for trending, regulatory audits, and fitness‑for‑service evaluations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-microscope"></i>
                        <div>
                            <strong>Why IRIS matters:</strong>
                            <p>When a tube is flagged by eddy current or other screening, you need certainty. IRIS delivers the exact remaining wall – the number your engineer needs for API 579‑1 / ASME FFS‑1 assessments. No guesswork, no unnecessary plugging.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request IRIS Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/iris-probe.jpg" alt="IRIS probe showing rotating mirror assembly">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>IRIS probe: ultrasonic transducer fires at a rotating mirror which scans the tube wall 360°.</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">±0.05 mm</span>
                            <span class="stat-label">Thickness Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">360°</span>
                            <span class="stat-label">Circumferential Scan</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Length Coverage</span>
                        </div>
                    </div>
                    
                    <div class="principle-diagram">
                        <h4><i class="fas fa-cog"></i> How IRIS Works</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Probe inserted into water‑filled tube</li>
                            <li><strong>2.</strong> Mirror rotates at high speed</li>
                            <li><strong>3.</strong> Ultrasound beam scans entire circumference</li>
                            <li><strong>4.</strong> ID and OD echoes recorded continuously</li>
                            <li><strong>5.</strong> Thickness calculated from time‑of‑flight</li>
                            <li><strong>6.</strong> C‑scan image generated in real‑time</li>
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
                <span class="section-label">WHY CHOOSE IRIS</span>
                <h2>Key Advantages of IRIS Tube Testing</h2>
                <p>Precision, reliability, and material versatility – the gold standard for confirmatory tube inspection</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue"><i class="fas fa-ruler-combined"></i></div>
                    <h3>Unmatched Sizing Accuracy</h3>
                    <p>±0.05 mm (±0.002") absolute wall measurement – far superior to eddy current's ±15‑20% relative estimation. Essential for Fitness‑for‑Service (API 579‑1) where 0.1 mm can determine plug vs operate. Repeatability ±0.02 mm enables reliable corrosion‑rate trending across outages.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green"><i class="fas fa-image"></i></div>
                    <h3>Visual C‑Scan Documentation</h3>
                    <p>Colour‑coded thickness maps show defect shape, size and location intuitively. Archives for regulatory compliance (ASME, API, insurance). Trend analysis compares C‑scans over time to quantify progression. No other tube NDT method provides such direct visual evidence.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple"><i class="fas fa-atom"></i></div>
                    <h3>Universal Material Compatibility</h3>
                    <p>Works on all conductive metallic tubes – carbon steel, stainless, copper alloys, titanium, Inconel, Hastelloy, clad, lined. Single technique for entire fleet eliminates probe‑change overhead. No permeability or conductivity limitations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange"><i class="fas fa-layer-group"></i></div>
                    <h3>Inspects Through Deposits</h3>
                    <p>Ultrasound passes through magnetite, scale, sludge – only needs water coupling. Tube cleaning cost reduced 60‑80% vs ECT requirements. Perfect for boilers, HRSGs, and exchangers where heavy fouling is present.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red"><i class="fas fa-bullseye"></i></div>
                    <h3>Defect Location Precision</h3>
                    <p>Separate ID and OD echoes pinpoint the surface where damage originates. ID attack (process side) vs OD attack (cooling water / fireside) distinguished reliably. Clock‑position accuracy for preferential attack patterns (e.g., 6 o'clock pooling). Enables targeted corrective actions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal"><i class="fas fa-check-double"></i></div>
                    <h3>Code &amp; Regulatory Acceptance</h3>
                    <p>Recognised by ASME Section V Art. 5, ASTM E2096, API 510/570, NBIC Part 3, TEMA. Authorised inspectors and insurance companies accept IRIS data for remaining‑life assessments and continued‑operation approvals. Eliminates doubts from relative methods.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== COMPARISON: IRIS vs ECT vs RFECT ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNOLOGY COMPARISON</span>
                <h2>IRIS vs Eddy Current (ECT) vs Remote Field (RFECT)</h2>
                <p>Each technique has its place – use IRIS when you need absolute thickness, not a relative indication</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-list-ul"></i> Parameter</th>
                            <th><i class="fas fa-wave-square"></i> IRIS (Ultrasonic)</th>
                            <th><i class="fas fa-broadcast-tower"></i> Conventional ECT</th>
                            <th><i class="fas fa-magnet"></i> Remote Field ECT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Measurement Type</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Absolute thickness (mm)</td>
                            <td class="average">Relative (% amplitude)</td>
                            <td class="average">Relative (% CSA loss)</td>
                        </tr>
                        <tr>
                            <td><strong>Accuracy</strong></td>
                            <td class="excellent">±0.05 mm (±2%)</td>
                            <td class="good">±10–15% depth</td>
                            <td class="average">±15–20% wall loss</td>
                        </tr>
                        <tr>
                            <td><strong>ID vs OD Discrimination</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Separate echoes (precise)</td>
                            <td class="average">Amplitude/phase (limited)</td>
                            <td class="excellent">Phase analysis (good)</td>
                        </tr>
                        <tr>
                            <td><strong>Material Compatibility</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> All conductive metals</td>
                            <td class="good">Non‑ferrous (optimised)</td>
                            <td class="poor">Ferrous only</td>
                        </tr>
                        <tr>
                            <td><strong>Through Deposits</strong></td>
                            <td class="excellent">Yes (water‑coupled)</td>
                            <td class="poor">No (requires cleaning)</td>
                            <td class="excellent">Yes (non‑conductive deposits)</td>
                        </tr>
                        <tr>
                            <td><strong>Support Plate Zones</strong></td>
                            <td class="poor">Blind zone (no)</td>
                            <td class="poor">Blind zone (no)</td>
                            <td class="excellent"><i class="fas fa-star"></i> Yes (continuous)</td>
                        </tr>
                        <tr>
                            <td><strong>Visual Documentation</strong></td>
                            <td class="excellent">C‑scan images (intuitive)</td>
                            <td class="average">Strip charts (complex)</td>
                            <td class="average">Distance‑amplitude plots</td>
                        </tr>
                        <tr>
                            <td><strong>Inspection Speed</strong></td>
                            <td class="poor">2–6 tubes/hour (slow)</td>
                            <td class="excellent">50–150 tubes/hour (fast)</td>
                            <td class="average">10–30 tubes/hour</td>
                        </tr>
                        <tr>
                            <td><strong>Minimum Detectable</strong></td>
                            <td class="excellent">10% wall loss (3D pitting)</td>
                            <td class="excellent">5–10% depth (high res)</td>
                            <td class="average">15–20% wall loss</td>
                        </tr>
                        <tr>
                            <td><strong>Typical Use</strong></td>
                            <td>Confirmatory, FFS, critical tubes</td>
                            <td>Rapid fleet screening</td>
                            <td>Ferrous tubes with deposits/TSP</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-lightbulb"></i>
                <div>
                    <p><strong>Best Practice Multi‑Technique Strategy:</strong> Use ECT to screen 100% of tubes rapidly and locate suspect areas. Apply RFECT for ferrous tubes with heavy deposits or support plate zones. Then deploy IRIS on the flagged tubes (typically 10‑20%) to get absolute thickness data for plug/repair decisions and code compliance. This tiered approach reduces overall inspection time while delivering the accuracy you need where it matters most.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">IRIS APPLICATIONS</span>
                <h2>Industries &amp; Equipment We Inspect</h2>
                <p>Proven across power, refining, petrochemical, marine, and specialty assets – wherever tube integrity is critical</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="power">Power Generation</button>
                    <button class="tab-btn" data-tab="refining">Refining &amp; Petrochemical</button>
                    <button class="tab-btn" data-tab="marine">Marine &amp; Offshore</button>
                    <button class="tab-btn" data-tab="specialty">Specialty</button>
                </div>

                <div class="tabs-content">
                    <!-- Power Generation Tab -->
                    <div class="tab-panel active" id="power">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-power-plant.jpg" alt="Power plant tube inspection with IRIS">
                            </div>
                            <div class="tab-text">
                                <h3>Power Plant Boilers &amp; Steam Cycle</h3>
                                <p>IRIS is the preferred confirmatory technique when ECT screening identifies suspect tubes needing precise sizing. Works on all boiler alloys: carbon steel, T11/T22/T91, austenitic SS, high‑Cr materials. Detects flow‑accelerated corrosion, fireside erosion, hydrogen damage, creep swelling, and tube‑support fretting.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Boiler waterwall, superheater, reheater, economiser</li>
                                    <li><i class="fas fa-check"></i> Heat recovery steam generator (HRSG) evaporators &amp; superheaters</li>
                                    <li><i class="fas fa-check"></i> Main steam surface condensers (titanium, Cu‑Ni, SS)</li>
                                    <li><i class="fas fa-check"></i> Feedwater heater tubing</li>
                                    <li><i class="fas fa-check"></i> Nuclear steam generator tubes (Alloy 600/690) – SCC, IGA</li>
                                    <li><i class="fas fa-check"></i> Air preheater elements</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-chart-line"></i> Case Study: Fossil Boiler Economiser Assessment</h4>
                                    <p><strong>Challenge:</strong> 20‑year‑old economiser with heavy magnetite scale – ECT signals unreliable. Need to confirm wall thickness for RBI.</p>
                                    <p><strong>IRIS Solution:</strong> Inspected 120 critical tubes without removing scale. Average wall loss 12% (CT scan confirmed). Only 3 tubes had isolated >40% pits requiring plugging.</p>
                                    <p><strong>Outcome:</strong> Avoided unnecessary re‑tube ($850K) and extended next inspection interval from 2 to 4 years. Accurate data satisfied insurance surveyor.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section V Art. 5</span>
                                    <span class="standard-tag">ASME Section XI</span>
                                    <span class="standard-tag">EPRI PWR SG Guidelines</span>
                                    <span class="standard-tag">NRC Reg Guide 1.121</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Refining & Petrochemical Tab -->
                    <div class="tab-panel" id="refining">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-refinery.jpg" alt="Refinery heat exchanger tube inspection with IRIS">
                            </div>
                            <div class="tab-text">
                                <h3>Refinery &amp; Petrochemical Heat Exchangers</h3>
                                <p>Refinery exchangers operate under severe service: naphthenic acid, sulfidation, ammonium bisulfide, high‑temperature H₂ attack. IRIS delivers the precise remaining wall needed for API 579‑1 FFS assessments. Works on clad and lined tubes as well as solid alloys.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude preheat, hydrotreater effluent, FCC fractionator</li>
                                    <li><i class="fas fa-check"></i> Catalytic reformer charge/effluent exchangers</li>
                                    <li><i class="fas fa-check"></i> Amine reboilers &amp; sour water strippers</li>
                                    <li><i class="fas fa-check"></i> Ethylene furnace tubes (HP9‑4N, Manaurite)</li>
                                    <li><i class="fas fa-check"></i> Stainless‑clad carbon steel tubes (disbond detection)</li>
                                    <li><i class="fas fa-check"></i> High‑temperature hydrogen attack (HTHA) screening</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <div>
                                        <strong>Damage Mechanisms Quantified by IRIS:</strong>
                                        <p><strong>ID:</strong> Sulfidation rates, naphthenic acid corrosion, ammonium salt deposition, HTHA blistering | <strong>OD:</strong> Cooling water pitting, CUI, atmospheric acid dew point | <strong>Through‑wall:</strong> Creep void accumulation (±0.05 mm swelling), hydrogen‑induced cracking (HIC/SOHIC).</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">API 579‑1 / ASME FFS‑1</span>
                                    <span class="standard-tag">API 580 (RBI)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marine & Offshore Tab -->
                    <div class="tab-panel" id="marine">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-marine.jpg" alt="Marine heat exchanger IRIS inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Marine Vessels &amp; Offshore Platforms</h3>
                                <p>Seawater‑cooled heat exchangers on ships and platforms face chloride pitting, biofouling, and erosion‑corrosion. IRIS provides rapid, material‑independent inspection during port calls or maintenance windows. Portable systems deploy in flight cases worldwide.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Main engine coolers (Cu‑Ni, aluminium brass)</li>
                                    <li><i class="fas fa-check"></i> Steam condensers &amp; auxiliary condensers</li>
                                    <li><i class="fas fa-check"></i> HVAC chillers (copper, Cu‑Ni)</li>
                                    <li><i class="fas fa-check"></i> Offshore platform process coolers &amp; seawater lift</li>
                                    <li><i class="fas fa-check"></i> LNG carrier vaporisers &amp; cargo heaters</li>
                                    <li><i class="fas fa-check"></i> FPSO crude coolers, desalination units</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-ship"></i>
                                    <div>
                                        <strong>Maritime Logistics:</strong>
                                        <p>Alpha Sonix mobilises IRIS equipment within 48 hours to any Indian port. Typical timeline: setup 4 h, inspect 30–50 tubes/day, preliminary report same day. Inspections completed during scheduled dockings without extending lay‑up.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ABS Rules</span>
                                    <span class="standard-tag">DNV‑GL Class</span>
                                    <span class="standard-tag">Lloyd's Register</span>
                                    <span class="standard-tag">MIL‑STD‑271</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-specialty.jpg" alt="Specialty IRIS applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty &amp; Emerging Applications</h3>
                                <p>IRIS technology adapts to challenging geometries, extreme environments, and novel materials. Miniature probes (12 mm ID), high‑temperature probes (200°C), and array‑based IRIS for faster scanning. Used in aerospace, medical, desalination, semiconductor, and research sectors.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aerospace compact coolers (titanium, Inconel)</li>
                                    <li><i class="fas fa-check"></i> Pharmaceutical steriliser tubing (sanitary design)</li>
                                    <li><i class="fas fa-check"></i> Geothermal brine heaters (high scaling)</li>
                                    <li><i class="fas fa-check"></i> MSF/MED desalination evaporator tubes</li>
                                    <li><i class="fas fa-check"></i> Semiconductor ultra‑pure water cooling</li>
                                    <li><i class="fas fa-check"></i> Research reactor experimental loops</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-flask"></i>
                                    <div>
                                        <strong>Advanced IRIS Developments:</strong>
                                        <p><strong>High‑Temperature:</strong> Probes rated to 200°C for hot inspection of furnace tubes without cooldown. <strong>Miniature:</strong> 8 mm ID probes for small‑bore instrumentation. <strong>Array IRIS:</strong> Multi‑element probes provide 3–5× faster coverage. <strong>AI‑Enhanced Analysis:</strong> Machine learning automates defect classification with 95% accuracy, reducing analyst workload by 70%.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME BPVC Sec VIII</span>
                                    <span class="standard-tag">PED 2014/68/EU</span>
                                    <span class="standard-tag">FDA 21 CFR Part 11</span>
                                    <span class="standard-tag">SEMI Standards</span>
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
                <h2>IRIS Inspection Capabilities &amp; Limitations</h2>
                <p>Know what IRIS can and cannot do – we help you choose the right technique for each job</p>
            </div>

            <div class="capabilities-grid">
                <!-- Detectable Defects -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detectable Defects</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wall Loss:</span> ≥10% general/localised</li>
                        <li><span class="cap-label">Pitting:</span> ≥0.5 mm dia., ≥20% depth</li>
                        <li><span class="cap-label">Erosion:</span> Flow‑accelerated / impingement</li>
                        <li><span class="cap-label">Cracks:</span> ID/OD ≥0.2 mm opening</li>
                        <li><span class="cap-label">Fretting:</span> Support plate / baffle wear</li>
                        <li><span class="cap-label">Dents / Gouges:</span> Mechanical damage</li>
                        <li><span class="cap-label">Disbond:</span> Clad/lined tube separation</li>
                    </ul>
                </div>

                <!-- Tube Specifications -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-combined"></i>
                        <h3>Tube Specifications</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">ID Range:</span> 12–150 mm (standard)</li>
                        <li><span class="cap-label">Wall Thickness:</span> 0.5–15 mm (optimal 1–6 mm)</li>
                        <li><span class="cap-label">Length:</span> Up to 30 m per pass</li>
                        <li><span class="cap-label">Materials:</span> All conductive metals</li>
                        <li><span class="cap-label">Bend Radius:</span> ≥1.5D (U‑tubes)</li>
                        <li><span class="cap-label">Temperature:</span> Ambient to 200°C (special probes)</li>
                        <li><span class="cap-label">Coupling:</span> Water‑filled tube required</li>
                    </ul>
                </div>

                <!-- Performance Metrics -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-chart-line"></i>
                        <h3>Performance Metrics</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Thickness Accuracy:</span> ±0.05 mm (±0.002")</li>
                        <li><span class="cap-label">Repeatability:</span> ±0.02 mm (same system)</li>
                        <li><span class="cap-label">POD (90/95):</span> 10% wall loss (MIL‑HDBK‑1823)</li>
                        <li><span class="cap-label">Axial Resolution:</span> 1–3 mm</li>
                        <li><span class="cap-label">Circumferential:</span> 1–5 mm</li>
                        <li><span class="cap-label">Speed:</span> 25–100 mm/s (pull rate)</li>
                        <li><span class="cap-label">Data Density:</span> 10,000–50,000 points/tube</li>
                    </ul>
                </div>
            </div>
<br>
            <div class="capabilities-dual">
                <!-- IRIS Strengths -->
                <div class="capability-block detects">
                    <div class="capability-block-header">
                        <i class="fas fa-thumbs-up"></i>
                        <h3>Use IRIS When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="detect-category">
                            <h4><i class="fas fa-ruler"></i> Precision Required</h4>
                            <ul>
                                <li>FFS calculations per API 579‑1 – need ±0.05 mm</li>
                                <li>Tubes near minimum wall – plug vs operate decisions</li>
                                <li>Code compliance – absolute measurement mandatory</li>
                                <li>Corrosion rate trending – quantitative RUL predictions</li>
                            </ul>
                        </div>
                        <div class="detect-category">
                            <h4><i class="fas fa-check-circle"></i> Confirmatory Inspection</h4>
                            <ul>
                                <li>ECT/RFECT identifies suspect tubes – IRIS confirms and sizes</li>
                                <li>Previous inspection ambiguous – need definitive answer</li>
                                <li>High‑value exotic alloys – justify precise evaluation</li>
                                <li>Regulatory / insurance dispute – objective evidence</li>
                            </ul>
                        </div>
                        <div class="detect-category">
                            <h4><i class="fas fa-palette"></i> Material Challenges</h4>
                            <ul>
                                <li>Mixed metallurgy bundles – single technique for all</li>
                                <li>Clad / lined tubes – verify base metal beneath cladding</li>
                                <li>Ferromagnetic tubes with deposits – ECT blind</li>
                                <li>Exotic alloys (Inconel, Hastelloy, Ti) – no calibration issues</li>
                            </ul>
                        </div>
                        <div class="detect-category">
                            <h4><i class="fas fa-camera"></i> Documentation Needs</h4>
                            <ul>
                                <li>Visual C‑scan for management / regulatory presentation</li>
                                <li>Permanent archival for 30‑year asset life trending</li>
                                <li>Legal / insurance – objective dimensional evidence</li>
                                <li>Failure analysis – precise morphology and location</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- IRIS Limitations -->
                <div class="capability-block limitations">
                    <div class="capability-block-header">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>Avoid IRIS When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="limit-category">
                            <h4><i class="fas fa-tachometer-alt"></i> Speed Priority</h4>
                            <ul>
                                <li><strong>High‑volume screening:</strong> 1000+ tubes – days vs hours with ECT</li>
                                <li>Initial fleet survey – use ECT to triage, then IRIS on high‑risk subset</li>
                                <li>Short outage windows – IRIS slower setup and execution</li>
                                <li>Low‑criticality systems – precision not justified</li>
                            </ul>
                        </div>
                        <div class="limit-category">
                            <h4><i class="fas fa-water"></i> Operational Constraints</h4>
                            <ul>
                                <li><strong>Water‑fill not feasible</strong> – IRIS requires water coupling</li>
                                <li>Tubes cannot be drained/dried (product contamination)</li>
                                <li>Extremely fouled – deposits prevent water flow</li>
                                <li>Hazardous contents – safety prohibits opening</li>
                            </ul>
                        </div>
                        <div class="limit-category">
                            <h4><i class="fas fa-ban"></i> Geometric Restrictions</h4>
                            <ul>
                                <li>Support plate zones – IRIS blind (use RFECT instead)</li>
                                <li>Sharp U‑bends <1.5D – probe cannot navigate</li>
                                <li>Very small bore <12 mm ID – probe size limitation</li>
                                <li>Finned/enhanced tubes – external features interfere</li>
                            </ul>
                        </div>
                        <div class="limit-category">
                            <h4><i class="fas fa-dollar-sign"></i> Cost Considerations</h4>
                            <ul>
                                <li>Budget constraint – IRIS $50-150/tube vs ECT $5-20/tube</li>
                                <li>Non‑critical applications – precision not required</li>
                                <li>Frequent annual monitoring – ECT more economical</li>
                                <li>Large populations – full IRIS coverage expensive</li>
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
                    <h2>Our IRIS Equipment Fleet</h2>
                    <p class="lead">Alpha Sonix operates multiple digital IRIS systems with an extensive probe inventory to match every tube size and service condition. All equipment maintained per manufacturer specifications and annually calibrated to NIST‑traceable standards.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-microchip"></i></div>
                            <div class="equipment-details">
                                <h4>Zetec IRIS Plus Digital System</h4>
                                <p>Real‑time C‑scan, multi‑gate thickness measurement (ID + OD echoes), automatic velocity compensation, wireless probe control, cloud data management. 16‑bit A/D for superior resolution. Laptop‑based, field portable. Compliant with ASME Sec V and ASTM E2096.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-cog"></i></div>
                            <div class="equipment-details">
                                <h4>Olympus IRIS II System</h4>
                                <p>Dual‑frequency (5 MHz / 10 MHz) for penetration vs resolution balance. Encoder position tracking (±0.1 mm), automated probe pusher/puller. Rack‑mounted for permanent plant installation. Ideal for high‑volume campaigns and multi‑year trending programs.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-th-large"></i></div>
                            <div class="equipment-details">
                                <h4>Comprehensive Probe Inventory</h4>
                                <p>100+ probes covering 12–150 mm ID: standard (15‑50 mm), miniature (12‑20 mm), large‑bore (50‑150 mm), high‑temp (200°C), long‑reach (30 m), flexible (U‑bend ≥1.5D). All with NIST‑traceable calibration certificates, replaced per manufacturer PM schedule.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon"><i class="fas fa-robot"></i></div>
                            <div class="equipment-details">
                                <h4>Automated Handling Systems</h4>
                                <p>Pneumatic/electric probe pushers with programmable speed (10‑100 mm/s), encoder wheels (±0.1 mm), mirror rotation monitors (1800‑3600 RPM). Multi‑axis tube‑sheet crawlers for automated multi‑tube sequences. Remote operation for contaminated/high‑radiation areas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Calibration &amp; Quality Assurance</h4>
                        <p><strong>Annual System Calibration:</strong> Per ASTM E2096 using precision‑machined calibration tubes with NIST‑traceable dimensions. <strong>Field Verification:</strong> Daily checks using client‑specific calibration tubes. <strong>Probe Maintenance:</strong> Mirror balance, transducer impedance, refurbishment per schedule. All records maintained for audit trail.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/iris-equipment.jpg" alt="IRIS equipment setup">
                        <div class="play-overlay">
                            <button class="play-btn"><i class="fas fa-play"></i></button>
                            <span>Watch IRIS Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item"><i class="fas fa-check"></i> Digital C‑Scan Imaging</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> Real‑Time Thickness Display</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> Automated Defect Detection</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> 3D Tube Visualisation</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> Cloud Data Archival</div>
                        <div class="highlight-item"><i class="fas fa-check"></i> ASME/ASTM Compliant</div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Equipment Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/asme-sec-v.png" alt="ASME Section V">
                            <img src="/www/assets/images/certifications/astm.png" alt="ASTM E2096">
                            <img src="/www/assets/images/certifications/nist.png" alt="NIST Traceable">
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
                <h2>IRIS Inspection Procedure</h2>
                <p>Systematic, code‑compliant workflow – from planning to final report</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre‑Inspection Engineering</h3>
                        <p>Review exchanger drawings, tube data, historical reports. Identify tube material (set ultrasonic velocity), ID, wall, length. Select probe size and pull speed. Document procedure per ASTM E2096 / client specification. Confirm water supply for coupling.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Inspection procedure &amp; calibration tube spec</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Heat Exchanger Preparation</h3>
                        <p>Drain exchanger, flush tubes with high‑pressure water (if heavily fouled). Remove channel heads / waterbox covers. Fill tubes with clean water. Verify water clarity for ultrasonic transmission. Set up equipment, safety briefing.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Preparation log &amp; safety checklist</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>System Calibration</h3>
                        <p>Use calibration tube matching actual material/diameter/wall. Set ultrasonic velocity, gate positions for ID/OD echoes, gain/filtering. Verify thickness against known values (±0.05 mm). Document baseline C‑scan. Check mirror rotation, encoder accuracy.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Calibration report with baseline scans</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Tube Scanning &amp; Data Acquisition</h3>
                        <p>Insert probe, activate mirror rotation, start pull. Monitor real‑time C‑scan. Operator flags suspect areas. Typical 5–20 min per tube depending on length. All raw data saved for analysis.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Raw IRIS data files (waveforms + C‑scans)</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Data Analysis &amp; Interpretation</h3>
                        <p>Level II/III analyst reviews C‑scans and thickness profiles. Characterise: wall loss (general/localised), pitting, cracks, fretting, dents. Measure minimum remaining wall. Determine defect clock position. Compare with acceptance criteria. Flag tubes for plug/repair/monitor.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Annotated C‑scans with defect measurements</div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting &amp; Recommendations</h3>
                        <p>Comprehensive report: executive summary, calibration records, tube‑by‑tube tables, colour C‑scan images, statistical analysis, comparison with acceptance criteria, FFS assessment (if requested), prioritised plugging/repair list. Digital data package for archival.</p>
                        <div class="timeline-deliverable"><strong>Deliverable:</strong> Final IRIS inspection report (ASTM E2096 compliant)</div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Certifications &amp; Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item"><img src="/www/assets/images/certifications/asnt.png" alt="ASNT"><span>ASNT Level II/III</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001"><span>ISO 9001:2015</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/epri.png" alt="EPRI"><span>EPRI Qualified (SG)</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/zetec.png" alt="Zetec"><span>OEM Certified</span></div>
                    <div class="cert-item"><img src="/www/assets/images/certifications/tema.png" alt="TEMA"><span>TEMA Recognised</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your IRIS Inspection Partner</h2>
                <p>Expertise, technology, and a commitment to delivering the accurate data you need for confident maintenance decisions</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-award"></i></div>
                    <h3>Industry‑Leading Expertise</h3>
                    <p>ASNT Level II/III certified technicians with 12+ years average UT experience. Dedicated Level III analysts for complex signals and FFS. Manufacturer‑certified on all major systems. Continuous training on latest probe and software developments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-tools"></i></div>
                    <h3>Comprehensive Equipment Fleet</h3>
                    <p>Four complete digital IRIS systems (redundancy ensures no schedule delays). 100+ probes covering 12‑150 mm ID, including high‑temp, miniature, long‑reach, and flexible. Portable systems for worldwide deployment. Annual NIST‑traceable calibration.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-microscope"></i></div>
                    <h3>Multi‑Technique Integration</h3>
                    <p>Single‑source provider: ECT for rapid screening, RFECT for ferrous/deposited tubes, IRIS for confirmatory sizing, video borescope for visual confirmation. We recommend the optimal technique for each tube population – no subcontractors.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Advanced Data Analytics</h3>
                    <p>AI‑assisted defect detection, 3D tube visualisation, corrosion rate calculations, multi‑year trending. Reports integrate with your CMMS/EAM systems. Transform raw data into actionable integrity intelligence.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Regulatory Compliance Support</h3>
                    <p>Procedures and reports qualified to ASME Sec V Art. 5, ASTM E2096, API 510/570, NBIC, TEMA. Expert witness for regulatory and insurance disputes. Documentation package ready for ASME/NB stamp holders.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon"><i class="fas fa-headset"></i></div>
                    <h3>Complete Project Support</h3>
                    <p>From planning to remediation: pre‑outage selection, rapid mobilisation (48‑72 h emergency), on‑site engineering, real‑time results, FFS per API 579‑1, and post‑inspection consulting for root cause and mitigation. Long‑term service agreements available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>IRIS Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is IRIS compared to other tube inspection techniques?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>IRIS provides ±0.05 mm (±0.002") absolute wall thickness accuracy – far superior to eddy current's ±10‑20% relative uncertainty. This precision comes from direct ultrasonic time‑of‑flight measurement. Repeatability is ±0.02 mm, making IRIS ideal for corrosion‑rate trending. For FFS per API 579‑1, IRIS data is the gold standard.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do tubes need to be cleaned before IRIS inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Only loose debris must be flushed to allow water filling. Hard scale, magnetite, and light deposits do not prevent inspection – ultrasound penetrates through them. Typical preparation: high‑pressure water jetting (1000‑3000 psi) to remove sludge, then fill with clean water. Cleaning costs 60‑80% less than the pristine surfaces needed for ECT.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can IRIS inspect all tube materials?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes – IRIS is material‑independent. It works on carbon steel, Cr‑Mo alloys, stainless steels, copper alloys, titanium, Inconel, Hastelloy, Monel, duplex stainless, clad, and lined tubes. Only requirement: known ultrasonic velocity for the material. A single IRIS system inspects your entire heat exchanger fleet regardless of metallurgy.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does IRIS distinguish ID from OD defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>IRIS records separate ultrasonic echoes from the ID surface and OD surface. If the ID echo is disturbed while OD echo is normal, the defect is on the internal surface (process side). If OD echo is disturbed, it is external (cooling water, fireside). Through‑wall defects affect both echoes. C‑scan images show separate ID and OD profiles for precise location.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum defect size IRIS can detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Detection limits: general wall loss ≥10%, pitting ≥0.5 mm diameter and ≥20% depth, cracks ≥0.2 mm opening and ≥3 mm length (orientation dependent). Axial resolution 1–3 mm, circumferential 1–5 mm. POD (90/95) per MIL‑HDBK‑1823 at 10% wall loss. IRIS comfortably exceeds typical code acceptance criteria (e.g., ASME Sec VIII allows 50% wall loss).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can IRIS inspect U‑bend tubes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, provided the bend radius is at least 1.5 times the tube diameter. Flexible IRIS probes can navigate U‑bends, inspecting the full length including the bend region. For tighter bends, we may recommend inspecting straight sections from both ends (covering 70‑85% of tube length) and complementing with video borescope for the bend.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does IRIS inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cost ranges from $50‑150 per tube, depending on tube length, diameter, number of tubes, access, and whether you need full FFS analysis. For a typical 500‑tube exchanger with 20% requiring IRIS (100 tubes), expect $5,000‑15,000. This is significantly less than the cost of a single tube failure ($500K‑2M in lost production and repairs). We provide firm quotes based on your tube list and scope.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What codes govern IRIS inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>IRIS is governed by ASTM E2096 (primary standard), ASME Section V Article 5 (ultrasonic requirements), ASME Section VIII (pressure vessel tube bundles), API 510/570 (vessel/piping inspection codes), NBIC Part 3, and TEMA. Our procedures are written and qualified to these codes, ensuring acceptance by authorised inspectors and insurance companies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Stop Guessing – Get Absolute Tube Thickness Data</h2>
                <p>IRIS provides the precise wall thickness measurement you need for confident plug/repair decisions and code compliance</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Technical Consultation</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free Feasibility Assessment</span>
                    <span><i class="fas fa-check"></i> 48‑Hour Mobilisation</span>
                    <span><i class="fas fa-check"></i> ASME/API Compliant Reports</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Tube Inspection Services</h2>
                <p>From rapid screening to precise characterisation – complete tube integrity solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/conventional-ect.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                    <h3>Conventional ECT</h3>
                    <p>High‑speed multi‑frequency screening for all tube materials</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/remote-field-eddy-current.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-magnet"></i></div>
                    <h3>RFECT</h3>
                    <p>Remote field testing for ferrous tubes and support plate zones</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-ruler-vertical"></i></div>
                    <h3>UT Thickness Gauging</h3>
                    <p>Spot thickness measurement for tube sheets, shells, and nozzles</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon"><i class="fas fa-video"></i></div>
                    <h3>Video Borescope</h3>
                    <p>Direct visual documentation of tube interiors, U‑bends, and deposits</p>
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
