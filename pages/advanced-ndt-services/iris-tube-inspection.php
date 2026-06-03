<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Internal Rotary Inspection System (IRIS) | Ultrasonic Tube Inspection | Alpha Sonix";
$meta_description = "Professional IRIS ultrasonic tube inspection for heat exchangers, boilers, and condensers. Absolute wall thickness measurement with ±0.05mm accuracy. C-scan imaging for ID/OD profiling through deposits and scale.";
$meta_keywords = "IRIS testing, internal rotary inspection, ultrasonic tube inspection, heat exchanger tube testing, absolute wall thickness, C-scan imaging, tube profiling, boiler tube inspection, condenser testing, IRIS NDT";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/iris.php";
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
        "description": "Professional IRIS ultrasonic tube inspection providing absolute wall thickness measurement and volumetric C-scan imaging for comprehensive tube integrity assessment."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/iris-hero.jpg');"></div>
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
                <p class="page-subtitle">Precision ultrasonic tube inspection with absolute wall thickness measurement—±0.05mm accuracy through deposits, scale, and all materials</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-ruler-horizontal"></i> ±0.05mm Accuracy</span>
                    <span class="badge"><i class="fas fa-image"></i> Full C-Scan Imaging</span>
                    <span class="badge"><i class="fas fa-atom"></i> Material Independent</span>
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
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Rotary Ultrasonic Scanning</h3>
                    <p>360° rotating transducer captures complete circumferential wall thickness profile with ultrasonic pulse-echo</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>Absolute Thickness Measurement</h3>
                    <p>Direct wall thickness measurement (not relative like ECT)—measures actual remaining wall to ±0.05mm accuracy</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Volumetric C-Scan Imaging</h3>
                    <p>Generates color-coded thickness maps showing exact location, shape, and severity of defects—visual tube profile</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Through Deposits & Scale</h3>
                    <p>Inspects through magnetite, scale, sludge, and fouling—requires only liquid coupling path inside tube</p>
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
                    <h2>What is Internal Rotary Inspection System?</h2>
                    <p class="lead">Internal Rotary Inspection System (IRIS) is an advanced ultrasonic NDT technique that provides absolute wall thickness measurement and volumetric profiling of heat exchanger, boiler, and condenser tubes. Using a rotating ultrasonic transducer inside the tube, IRIS generates comprehensive C-scan images showing exact wall thickness at every point around the circumference and along the tube length.</p>
                    
                    <p>IRIS operates on pulse-echo ultrasonic principles but with a unique rotating mirror configuration. A small ultrasonic transducer fires perpendicular to the tube axis, and a 45° rotating mirror directs the ultrasonic beam radially outward to the tube wall. As the mirror rotates at high speed (1800-3600 RPM), it scans the complete tube circumference. Simultaneously, the probe is pulled through the tube at controlled speed, creating a helical scan pattern that covers 100% of the tube surface.</p>

                    <p>The ultrasonic pulse travels through the coupling fluid (water), penetrates the tube wall, reflects from the outer surface, and returns to the transducer. Time-of-flight measurement calculates precise wall thickness: Thickness = (Time × Velocity) / 2. Unlike eddy current testing which measures conductivity changes (relative indication), IRIS provides absolute dimensional measurement—the actual remaining wall thickness in millimeters. This fundamental difference makes IRIS the gold standard for tube integrity assessment when precise sizing is required for fitness-for-service analysis, remaining life calculations, and code compliance.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Absolute Wall Thickness</strong>
                                <p>Measures actual remaining wall (mm) not relative signal—enables direct comparison with minimum required thickness</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material Independent</strong>
                                <p>Works on all tube materials: ferrous, non-ferrous, clad, lined—no permeability or conductivity limitations</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>ID & OD Profiling</strong>
                                <p>Separate echoes from ID and OD surfaces enable defect location determination and profile reconstruction</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Documentation</strong>
                                <p>C-scan images provide permanent visual record for historical trending and regulatory compliance</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-microscope"></i>
                        <div>
                            <strong>IRIS Technology Breakthrough:</strong>
                            <p>IRIS revolutionized tube inspection in the 1980s by solving the fundamental limitation of conventional UT—difficulty accessing tube interiors. The rotating mirror concept enables radial beam projection from a small probe that fits inside tubes as small as 12mm ID. Combined with helical scanning, IRIS achieves 100% volumetric coverage with quantitative thickness data. Today's digital IRIS systems with automated analysis and 3D visualization represent 40+ years of continuous technological evolution.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request IRIS Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/iris-probe.jpg" alt="IRIS Probe">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>IRIS probe with rotating mirror and ultrasonic transducer for 360° tube wall inspection</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">±0.05mm</span>
                            <span class="stat-label">Thickness Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">360°</span>
                            <span class="stat-label">Circumferential Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Surface Mapping</span>
                        </div>
                    </div>
                    
                    <div class="principle-diagram">
                        <h4><i class="fas fa-cog"></i> IRIS Operating Principles</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Probe inserted into water-filled tube</li>
                            <li><strong>2.</strong> Mirror rotates at 1800-3600 RPM</li>
                            <li><strong>3.</strong> Ultrasonic beam scans 360° circumference</li>
                            <li><strong>4.</strong> Probe pulled through tube axially</li>
                            <li><strong>5.</strong> ID and OD echoes measured continuously</li>
                            <li><strong>6.</strong> Wall thickness calculated from time-of-flight</li>
                            <li><strong>7.</strong> C-scan image generated in real-time</li>
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
                <h2>Key Advantages of IRIS Testing</h2>
                <p>Precision, reliability, and comprehensive tube integrity assessment</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Unmatched Sizing Accuracy</h3>
                    <p>IRIS provides ±0.05mm (±0.002") wall thickness accuracy—far superior to eddy current's ±15-20% relative estimation. This precision is critical for fitness-for-service (FFS) assessments per API 579-1/ASME FFS-1 which require accurate remaining wall thickness for allowable stress calculations. Absolute measurement eliminates calibration uncertainties inherent in ECT amplitude-based sizing. Essential for tubes approaching minimum wall limits where 0.1mm difference determines plug vs operate decision. Enables precise corrosion rate trending across multiple outages for remaining life predictions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-image"></i>
                    </div>
                    <h3>Visual C-Scan Documentation</h3>
                    <p>Real-time color-coded C-scan images provide intuitive visualization of tube condition—operators immediately see defect location, shape, and severity without signal interpretation expertise. C-scans show: exact pitting location and cluster patterns, corrosion morphology (general thinning vs localized attack), defect circumferential extent (6 o'clock vs full 360°), and axial length. Images archived as permanent inspection records for regulatory compliance (ASME, API, insurance). Trend analysis compares C-scans from successive inspections to quantify corrosion progression. Far superior to conventional UT strip charts or ECT amplitude plots.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-atom"></i>
                    </div>
                    <h3>Universal Material Compatibility</h3>
                    <p>IRIS works on ALL tube materials—ultrasonic propagation independent of electrical conductivity or magnetic permeability. Inspects: ferrous alloys (carbon steel, Cr-Mo, stainless steel), non-ferrous alloys (copper, brass, Cu-Ni, aluminum, titanium), exotic materials (Inconel, Hastelloy, Monel, tantalum), clad tubes (stainless clad carbon steel), lined tubes (glass, PTFE, rubber), and dissimilar metal welds. Single technique for entire heat exchanger fleet regardless of metallurgy. Eliminates technique selection complexity and reduces equipment inventory versus ECT (ferrous vs non-ferrous) or RFECT (ferrous only).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Inspects Through Deposits</h3>
                    <p>IRIS penetrates through ID deposits, scale, and fouling that blind conventional ECT—only requirement is liquid coupling path (water-filled tube). Effective through: magnetite layers (Fe₃O₄ up to 5mm), calcium/silica scale, copper deposits, sludge and sediment, biological fouling, and corrosion products. Ultrasonic beam passes through non-metallic deposits with minimal attenuation, reflects from metal tube wall, and returns clear ID/OD echoes. Tube cleaning required only to establish water flow—not pristine surface like ECT. Typical scenario: high-pressure water jet to remove loose debris, drain, fill with clean water, inspect. Saves 60-80% of conventional cleaning time/cost.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Defect Location Precision</h3>
                    <p>Separate ID and OD ultrasonic echoes enable precise defect location determination—critical for root cause analysis and mitigation strategy. ID surface profiling detects: waterside/process-side corrosion, erosion-corrosion, cavitation damage, flow-accelerated corrosion (FAC). OD surface profiling detects: atmospheric corrosion, corrosion under insulation (CUI), fireside/flue gas attack, cooling water-side corrosion (in annular designs). Clock position resolution identifies preferential attack locations (6 o'clock pooling, 12 o'clock vapor phase). Enables targeted corrective actions: ID attack requires chemistry/cleaning changes; OD attack requires external protection or environmental control.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3>Code Compliance & Acceptance</h3>
                    <p>IRIS is explicitly recognized by major inspection codes and standards as acceptable/preferred method for tube thickness verification: ASME Section V Article 5 (Ultrasonic Examination), ASME Section VIII Division 1 (Pressure Vessels—tube bundle inspection), API 510 (Pressure Vessel Inspection Code), API 570 (Piping Inspection Code), NBIC Part 3 (Repairs and Alterations), TEMA Standards (Tubular Exchanger Manufacturers Association). Insurance companies and authorized inspectors accept IRIS data for remaining life assessments and continued operation approvals. Eliminates regulatory disputes over ECT interpretation uncertainties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== COMPARISON: IRIS VS ECT VS RFECT ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNOLOGY COMPARISON</span>
                <h2>IRIS vs Eddy Current Testing (ECT/RFECT)</h2>
                <p>Understanding when to use each technique for optimal tube inspection strategy</p>
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
                            <td class="excellent"><i class="fas fa-star"></i> Absolute (mm)</td>
                            <td class="average">Relative (% voltage)</td>
                            <td class="average">Relative (% CSA loss)</td>
                        </tr>
                        <tr>
                            <td><strong>Sizing Accuracy</strong></td>
                            <td class="excellent">±0.05mm (±2%)</td>
                            <td class="good">±10-15% depth</td>
                            <td class="average">±15-20% wall loss</td>
                        </tr>
                        <tr>
                            <td><strong>ID/OD Discrimination</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Separate echoes (precise)</td>
                            <td class="average">Amplitude-based (limited)</td>
                            <td class="excellent">Phase analysis (good)</td>
                        </tr>
                        <tr>
                            <td><strong>Material Compatibility</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> All materials</td>
                            <td class="good">Non-ferrous optimized</td>
                            <td class="poor">Ferrous only</td>
                        </tr>
                        <tr>
                            <td><strong>Through Deposits</strong></td>
                            <td class="excellent">Yes (water-coupled)</td>
                            <td class="poor">No (requires cleaning)</td>
                            <td class="excellent">Yes (non-conductive)</td>
                        </tr>
                        <tr>
                            <td><strong>Through Support Plates</strong></td>
                            <td class="poor">No (blind zones)</td>
                            <td class="poor">No (blind zones)</td>
                            <td class="excellent"><i class="fas fa-star"></i> Yes (continuous)</td>
                        </tr>
                        <tr>
                            <td><strong>Visual Documentation</strong></td>
                            <td class="excellent">C-scan images (intuitive)</td>
                            <td class="average">Strip charts (complex)</td>
                            <td class="average">Distance-amplitude plots</td>
                        </tr>
                        <tr>
                            <td><strong>Inspection Speed</strong></td>
                            <td class="poor">2-6 tubes/hour (slow)</td>
                            <td class="excellent">50-150 tubes/hour (fast)</td>
                            <td class="average">10-30 tubes/hour</td>
                        </tr>
                        <tr>
                            <td><strong>Minimum Detectable</strong></td>
                            <td class="excellent">10% wall loss (3D pitting)</td>
                            <td class="excellent">5-10% depth (high res)</td>
                            <td class="average">15-20% wall loss</td>
                        </tr>
                        <tr>
                            <td><strong>Tube Preparation</strong></td>
                            <td class="average">Water-fill required</td>
                            <td class="good">Drain only</td>
                            <td class="good">Drain only (as-is)</td>
                        </tr>
                        <tr>
                            <td><strong>Operator Skill Level</strong></td>
                            <td class="average">Moderate (setup critical)</td>
                            <td class="poor">High (signal interpretation)</td>
                            <td class="poor">High (phase analysis)</td>
                        </tr>
                        <tr>
                            <td><strong>Cost per Tube</strong></td>
                            <td class="poor">High ($50-150)</td>
                            <td class="excellent">Low ($5-20)</td>
                            <td class="average">Medium ($20-50)</td>
                        </tr>
                        <tr>
                            <td><strong>Typical Application</strong></td>
                            <td>Confirmatory, FFS, critical tubes</td>
                            <td>Initial screening, high-volume</td>
                            <td>Ferrous, TSP zones, deposits</td>
                        </tr>
                        <tr>
                            <td><strong>Best Use Case</strong></td>
                            <td class="excellent">Precise sizing for code compliance</td>
                            <td class="excellent">Rapid fleet screening</td>
                            <td class="excellent">Carbon steel with deposits/TSP</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-lightbulb"></i>
                <div>
                    <p><strong>Optimal Inspection Strategy—Multi-Technique Approach:</strong> Best practice combines techniques based on tube criticality and risk: <strong>Step 1:</strong> Rapid ECT screening of all tubes (100% population)—identifies suspect areas; <strong>Step 2:</strong> RFECT on ferrous tubes with deposits or TSP zones—provides through-deposit assessment; <strong>Step 3:</strong> Focused IRIS on ECT/RFECT indications requiring precise sizing—confirmatory for plug/repair decisions. This tiered approach maximizes efficiency (ECT speed) while ensuring accuracy (IRIS precision) where it matters most. Result: Complete assessment in 30-50% less time than single-technique approach with superior data quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">IRIS APPLICATIONS</span>
                <h2>Industries & Equipment We Inspect</h2>
                <p>Precision tube integrity assessment across critical assets</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="power">Power Generation</button>
                    <button class="tab-btn" data-tab="refining">Refining & Petrochemical</button>
                    <button class="tab-btn" data-tab="marine">Marine & Offshore</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Applications</button>
                </div>

                <div class="tabs-content">
                    <!-- Power Generation Tab -->
                    <div class="tab-panel active" id="power">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-power-plant.jpg" alt="Power Plant IRIS Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Power Plant Boilers & Steam Cycle</h3>
                                <p>IRIS is the preferred confirmatory technique for power plant tube integrity when ECT screening identifies suspect tubes requiring precise sizing for fitness-for-service analysis. Material-independent capability makes IRIS ideal for diverse tube metallurgies in modern high-efficiency plants with advanced alloys and mixed-material heat recovery systems.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Boiler Waterwall Tubes:</strong> Carbon steel, T11, T22, T91 Cr-Mo alloys—FAC, corrosion fatigue, erosion</li>
                                    <li><i class="fas fa-check"></i> <strong>Superheater/Reheater:</strong> Austenitic SS (TP304H, TP347H), high Cr alloys—creep damage, oxide scale</li>
                                    <li><i class="fas fa-check"></i> <strong>Economizer Tubes:</strong> Carbon steel, ferritic SS—external corrosion, fly ash erosion, acid dew point attack</li>
                                    <li><i class="fas fa-check"></i> <strong>HRSG Tubes:</strong> Combined cycle evaporator, superheater tubes—FAC in LP sections, fireside corrosion</li>
                                    <li><i class="fas fa-check"></i> <strong>Condenser Tubes:</strong> Titanium, Cu-Ni 90/10, admiralty brass, SS 316L—confirmatory sizing of ECT indications</li>
                                    <li><i class="fas fa-check"></i> <strong>Feedwater Heaters:</strong> Carbon steel, Cr-Mo, stainless—tube-to-tubesheet weld inspection, erosion damage</li>
                                    <li><i class="fas fa-check"></i> <strong>Steam Generator (Nuclear):</strong> Alloy 600, 690, 800—SCC, IGA, fretting wear at support plates</li>
                                    <li><i class="fas fa-check"></i> <strong>Air Preheater:</strong> Low-temp carbon steel, enamel-coated—acid corrosion, coating degradation</li>
                                </ul>

                                <div class="app-stats">
                                    <div class="stat">
                                        <span class="stat-num">±0.05mm</span>
                                        <span class="stat-label">Creep Swelling Detection</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">$5-20M</span>
                                        <span class="stat-label">Tube Failure Cost Avoided</span>
                                    </div>
                                    <div class="stat">
                                        <span class="stat-num">99.5%</span>
                                        <span class="stat-label">Sizing Accuracy (FFS)</span>
                                    </div>
                                </div>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-chart-line"></i> Case Study: Nuclear Steam Generator Assessment</h4>
                                    <p><strong>Challenge:</strong> Alloy 690 SG tubes with suspected ODSCC near tube support plates, ECT signals ambiguous</p>
                                    <p><strong>IRIS Solution:</strong> Focused inspection of 87 suspect tubes, precise depth measurement of crack-like indications</p>
                                    <p><strong>Results:</strong> Confirmed 23 tubes with >40% wall loss (plugged), cleared 64 tubes for continued service (avoiding unnecessary plugging worth $1.2M). Accuracy enabled regulatory approval for continued operation versus forced outage.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section XI</span>
                                    <span class="standard-tag">EPRI PWR SG Guidelines</span>
                                    <span class="standard-tag">NRC Reg Guide 1.121</span>
                                    <span class="standard-tag">ASME PTC 12.2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Refining & Petrochemical Tab -->
                    <div class="tab-panel" id="refining">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-refinery.jpg" alt="Refinery Heat Exchanger IRIS">
                            </div>
                            <div class="tab-text">
                                <h3>Refinery & Petrochemical Heat Exchangers</h3>
                                <p>Process industry heat exchangers operate under severe service conditions with simultaneous ID and OD attack mechanisms, high temperatures, corrosive fluids, and fouling. IRIS provides definitive wall thickness measurement for risk-based inspection (RBI) programs per API 580/581, enabling data-driven run-repair-replace decisions that optimize asset reliability and capital deployment.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Crude Preheat Exchangers:</strong> CS, Cr-Mo—naphthenic acid corrosion, sulfidation, velocity effects</li>
                                    <li><i class="fas fa-check"></i> <strong>Hydrotreater Effluent Coolers:</strong> SS 316L, 321, Alloy 625—high-temp H₂ attack, ammonium bisulfide</li>
                                    <li><i class="fas fa-check"></i> <strong>FCC Main Fractionator:</strong> CS/Cr-Mo overhead systems—severe fouling, multiphase flow erosion</li>
                                    <li><i class="fas fa-check"></i> <strong>Catalytic Reformer:</strong> High-temp alloys (TP310, 800H)—carburization, metal dusting, creep</li>
                                    <li><i class="fas fa-check"></i> <strong>Amine Reboilers:</strong> CS, SS 304/316—amine corrosion, stress corrosion cracking (caustic)</li>
                                    <li><i class="fas fa-check"></i> <strong>Sour Water Strippers:</strong> Duplex SS, Alloy 825—H₂S/NH₃/HCN environment, chloride SCC</li>
                                    <li><i class="fas fa-check"></i> <strong>Ethylene Furnace:</strong> HP9-4N, Manaurite, Alloy 800HT—extreme temperature, coking, carburization</li>
                                    <li><i class="fas fa-check"></i> <strong>Clad/Lined Exchangers:</strong> SS clad CS, titanium clad—disbonding detection, base metal assessment</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <div>
                                        <strong>Typical Damage Mechanisms Quantified by IRIS:</strong>
                                        <p><strong>ID Surface:</strong> Sulfidation rates, naphthenic acid velocity-accelerated corrosion, high-temp hydrogen attack (HTHA) blistering, ammonium salt deposition/underdeposit corrosion | <strong>OD Surface:</strong> Cooling water corrosion, CUI beneath insulation, atmospheric acid dew point, fireside ash corrosion | <strong>Through-Wall:</strong> Creep void accumulation (±0.05mm swelling measurement), hydrogen-induced cracking (HIC/SOHIC), chloride SCC</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">API 579-1/ASME FFS-1</span>
                                    <span class="standard-tag">API 580/581 (RBI)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marine & Offshore Tab -->
                    <div class="tab-panel" id="marine">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-marine.jpg" alt="Marine IRIS Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Marine Vessels & Offshore Platforms</h3>
                                <p>Marine and offshore environments impose extreme corrosion challenges: seawater, high chlorides, biofouling, confined spaces, and limited access during brief port calls or platform shutdowns. IRIS provides rapid, material-independent assessment of critical cooling systems essential for propulsion, power generation, and process safety—enabling condition-based maintenance that maximizes operational availability.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Main Engine Cooling:</strong> Cu-Ni 90/10, aluminum brass—seawater-side pitting, dealloying, erosion-corrosion</li>
                                    <li><i class="fas fa-check"></i> <strong>Auxiliary Condensers:</strong> Titanium, SS 316L—biofouling, MIC (microbiologically influenced corrosion)</li>
                                    <li><i class="fas fa-check"></i> <strong>Oil Coolers:</strong> Admiralty brass, arsenical copper—impingement attack, ammonia SCC (from refrigerants)</li>
                                    <li><i class="fas fa-check"></i> <strong>HVAC Chillers:</strong> Copper, Cu-Ni—air-conditioning critical for electronics, habitability</li>
                                    <li><i class="fas fa-check"></i> <strong>Offshore Platform:</strong> Process coolers, seawater lift, firewater systems—inspection during brief shutdowns</li>
                                    <li><i class="fas fa-check"></i> <strong>LNG Carriers:</strong> Cryogenic vaporizers, cargo heaters—specialized alloys, critical safety systems</li>
                                    <li><i class="fas fa-check"></i> <strong>Naval Vessels:</strong> Steam condensers, nuclear reactor cooling (classified)—regulatory inspection requirements</li>
                                    <li><i class="fas fa-check"></i> <strong>FPSO/FSO:</strong> Crude/product coolers, desalination units—remote locations, long inspection intervals</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-ship"></i>
                                    <div>
                                        <strong>Maritime Inspection Logistics:</strong>
                                        <p>Marine vessels and offshore platforms require rapid mobilization and execution. Alpha Sonix maintains portable IRIS systems in flight cases for worldwide deployment. Typical inspection timeline: Mobilize equipment to vessel/platform (1 day), setup and calibration (4 hours), inspect critical HX tubes (1-3 days depending on quantity), preliminary report for immediate decisions (same day), final report with C-scans (7 days). Enables inspection completion during port call, planned maintenance window, or platform shutdown without schedule extension.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ABS Rules</span>
                                    <span class="standard-tag">DNV-GL Class</span>
                                    <span class="standard-tag">Lloyd's Register</span>
                                    <span class="standard-tag">MIL-STD-271</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Applications Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/iris-specialty.jpg" alt="Specialty IRIS Applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty & Emerging Applications</h3>
                                <p>IRIS technology continues to expand into new applications requiring absolute dimensional measurement of tubular components. Custom probe designs, advanced signal processing, and specialized procedures enable inspection of challenging geometries, extreme environments, and novel materials—supporting innovation across aerospace, medical, renewable energy, and research sectors.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Aerospace Heat Exchangers:</strong> Compact aircraft/spacecraft coolers—titanium, Inconel, tight bends</li>
                                    <li><i class="fas fa-check"></i> <strong>Medical Sterilizers:</strong> Pharmaceutical autoclaves, hospital sterilization equipment—regulatory validation</li>
                                    <li><i class="fas fa-check"></i> <strong>Geothermal Plants:</strong> Brine/steam heat exchangers—high scaling, aggressive chemistry, mixed metallurgy</li>
                                    <li><i class="fas fa-check"></i> <strong>Desalination (MSF/MED):</strong> Evaporator tubes, brine heaters—copper alloys, titanium, high fouling</li>
                                    <li><i class="fas fa-check"></i> <strong>Semiconductor Fabs:</strong> Ultra-pure water cooling, process gas heat exchangers—contamination-free inspection required</li>
                                    <li><i class="fas fa-check"></i> <strong>Food & Beverage:</strong> Pasteurizers, sterilizers, brewery heat exchangers—sanitary design, strict cleaning protocols</li>
                                    <li><i class="fas fa-check"></i> <strong>Research Reactors:</strong> Experimental facilities, isotope production—radiation environment, specialized alloys</li>
                                    <li><i class="fas fa-check"></i> <strong>Data Centers:</strong> High-density cooling, liquid-cooled servers—critical uptime, rapid inspection required</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-flask"></i>
                                    <div>
                                        <strong>Advanced IRIS Capabilities—R&D Applications:</strong>
                                        <p><strong>High-Temperature IRIS:</strong> Probes operational to 300°C for hot inspection of fired heaters and reactor tubes without cooldown. <strong>Miniature Probes:</strong> 8-12mm diameter probes for small-bore instrumentation tubing and compact heat exchangers. <strong>Array IRIS:</strong> Multi-element probes with parallel data acquisition—3-5× faster inspection. <strong>Phased Array IRIS:</strong> Electronic beam steering for improved coverage in complex geometries. <strong>AI-Enhanced Analysis:</strong> Machine learning algorithms for automated defect classification—95%+ accuracy, reduces analyst workload by 70%.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME BPVC Section VIII</span>
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
                <h2>IRIS Inspection Capabilities & Limitations</h2>
                <p>Understanding detection limits, tube compatibility, and optimal applications</p>
            </div>

            <div class="capabilities-grid">
                <!-- Detectable Defects -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detectable Defects</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wall Thinning:</span> ≥10% loss (general/localized)</li>
                        <li><span class="cap-label">Pitting:</span> ≥0.5mm diameter, ≥20% depth</li>
                        <li><span class="cap-label">Erosion:</span> Flow-accelerated, impingement</li>
                        <li><span class="cap-label">Corrosion:</span> ID/OD general, galvanic, MIC</li>
                        <li><span class="cap-label">Cracking:</span> ID/OD cracks ≥0.2mm opening</li>
                        <li><span class="cap-label">Fretting:</span> Support plate, baffle wear</li>
                        <li><span class="cap-label">Gouges/Dents:</span> Mechanical damage, installation</li>
                        <li><span class="cap-label">Disbonding:</span> Clad/lined tube separation</li>
                    </ul>
                </div>

                <!-- Tube Specifications -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-combined"></i>
                        <h3>Tube Specifications</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Inside Diameter:</span> 12-150mm (typical 15-50mm)</li>
                        <li><span class="cap-label">Wall Thickness:</span> 0.5-15mm (optimal 1-6mm)</li>
                        <li><span class="cap-label">Tube Length:</span> Up to 30m (single pass)</li>
                        <li><span class="cap-label">Materials:</span> ALL (Fe, non-Fe, exotic alloys)</li>
                        <li><span class="cap-label">Configuration:</span> Straight, U-bend (≥1.5D radius)</li>
                        <li><span class="cap-label">Temperature:</span> Ambient to 200°C (special probes)</li>
                        <li><span class="cap-label">Coupling:</span> Water-filled tube required</li>
                        <li><span class="cap-label">Surface Condition:</span> Through scale/deposits OK</li>
                    </ul>
                </div>

                <!-- Performance Metrics -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-chart-line"></i>
                        <h3>Performance Metrics</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Thickness Accuracy:</span> ±0.05mm (±0.002")</li>
                        <li><span class="cap-label">Repeatability:</span> ±0.02mm (same operator/system)</li>
                        <li><span class="cap-label">POD (90/95):</span> 10% wall loss (MIL-HDBK-1823)</li>
                        <li><span class="cap-label">Axial Resolution:</span> 1-3mm (defect length)</li>
                        <li><span class="cap-label">Circumferential:</span> 1-5mm (360° coverage)</li>
                        <li><span class="cap-label">Inspection Speed:</span> 25-100 mm/s (tube length)</li>
                        <li><span class="cap-label">Throughput:</span> 2-6 tubes/hour (length-dependent)</li>
                        <li><span class="cap-label">Data Density:</span> 10,000-50,000 points/tube</li>
                    </ul>
                </div>
            </div>

            <div class="capabilities-dual">
                <!-- IRIS Strengths -->
                <div class="capability-block detects">
                    <div class="capability-block-header">
                        <i class="fas fa-thumbs-up"></i>
                        <h3>IRIS Strengths—Use When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="detect-category">
                            <h4><i class="fas fa-ruler"></i> Precision Required</h4>
                            <ul>
                                <li>Fitness-for-service (FFS) calculations per API 579-1—requires ±0.05mm accuracy</li>
                                <li>Tubes near minimum wall thickness—plug vs operate decisions critical</li>
                                <li>Code compliance inspections—absolute measurement required (ASME, API)</li>
                                <li>Corrosion rate trending—quantitative data for remaining life predictions</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-check-circle"></i> Confirmatory Inspection</h4>
                            <ul>
                                <li>ECT screening identifies suspect tubes—IRIS confirms and sizes indications</li>
                                <li>Previous inspection ambiguous results—IRIS provides definitive assessment</li>
                                <li>High-value tubes (exotic alloys, difficult access)—justify precise evaluation</li>
                                <li>Regulatory/insurance requirements—inspectors demand absolute measurements</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-palette"></i> Material Challenges</h4>
                            <ul>
                                <li>Mixed metallurgy heat exchangers—single technique for all materials</li>
                                <li>Clad or lined tubes—verify base metal thickness beneath cladding</li>
                                <li>Ferromagnetic tubes with deposits—ECT blind, RFECT insufficient precision</li>
                                <li>Exotic alloys (Inconel, Hastelloy, titanium)—no ECT calibration issues</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-camera"></i> Documentation Needs</h4>
                            <ul>
                                <li>Visual C-scan images for management/regulatory presentation</li>
                                <li>Permanent archival records for historical trending (30+ year asset life)</li>
                                <li>Legal/insurance disputes—objective dimensional evidence</li>
                                <li>Failure analysis—precise defect morphology and location data</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- IRIS Limitations -->
                <div class="capability-block limitations">
                    <div class="capability-block-header">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>IRIS Limitations—Avoid When</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="limit-category">
                            <h4><i class="fas fa-tachometer-alt"></i> Speed Priority</h4>
                            <ul>
                                <li><strong>High-volume screening:</strong> 1000+ tubes require days with IRIS vs hours with ECT—not economical</li>
                                <li>Initial fleet assessment—use ECT to triage, then IRIS on high-risk subset (10-20%)</li>
                                <li>Short turnaround windows—IRIS slower setup and execution than ECT</li>
                                <li>Low-criticality systems—screening-level data adequate, precision not justified</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-water"></i> Operational Constraints</h4>
                            <ul>
                                <li><strong>Water-fill not feasible:</strong> IRIS requires liquid coupling—no water = no inspection</li>
                                <li>Tubes cannot be drained/dried (product contamination concerns)</li>
                                <li>Extremely fouled tubes—deposits prevent water flow for coupling</li>
                                <li>Hazardous/toxic contents—safety prohibits opening for water fill</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-ban"></i> Geometric Restrictions</h4>
                            <ul>
                                <li>Support plate zones—IRIS blind in TSP intersection (use RFECT instead)</li>
                                <li>Sharp U-bends (<1.5D radius)—probe cannot navigate, risk of damage</li>
                                <li>Very small bore (<12mm ID)—probe size limitations</li>
                                <li>Finned/enhanced tubes—external features interfere with OD echo</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-dollar-sign"></i> Cost Considerations</h4>
                            <ul>
                                <li>Budget constraints—IRIS costs $50-150/tube vs $5-20/tube for ECT</li>
                                <li>Non-critical applications—precision not required for simple plug criteria</li>
                                <li>Frequent inspections—annual ECT monitoring more economical than IRIS</li>
                                <li>Large populations—full IRIS coverage prohibitively expensive</li>
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
                    <h2>State-of-the-Art IRIS Equipment Fleet</h2>
                    <p class="lead">Alpha Sonix operates the most comprehensive IRIS technology portfolio in the region—latest digital systems, extensive probe inventory, and specialized configurations for challenging applications ensure optimal performance across all tube sizes, materials, and inspection scenarios.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Zetec IRIS Plus Digital System</h4>
                                <p>Latest-generation digital IRIS with real-time C-scan visualization, automated defect detection, and cloud data management. Features: 16-bit A/D conversion for superior resolution, multi-gate thickness measurement (ID + OD echoes), automatic velocity compensation for temperature/material variations, wireless probe control, integrated reporting with 3D visualization. Laptop-based for field portability. Compliant with ASME Section V and ASTM E2096.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Olympus IRIS II System</h4>
                                <p>Robust industrial IRIS platform with dual-frequency capability (5 MHz / 10 MHz) for optimal penetration vs resolution balance. Rack-mounted configuration for permanent installations at power plants. Features: Dual-channel acquisition (simultaneous tube + reference), encoder-based position tracking (±0.1mm), automated probe pusher/puller interface, network storage for centralized data management. Ideal for high-volume campaigns and multi-year trending programs.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-th-large"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Comprehensive Probe Inventory</h4>
                                <p>100+ IRIS probes covering 12-150mm ID tubes: <strong>Standard probes:</strong> 15-50mm (most common HX tubes); <strong>Miniature probes:</strong> 12-20mm (instrumentation, small-bore); <strong>Large-bore probes:</strong> 50-150mm (power plant, industrial); <strong>High-temp probes:</strong> Up to 200°C service; <strong>Long-reach probes:</strong> 30m+ inspection capability; <strong>Flexible probes:</strong> U-bend navigation (≥1.5D radius). All probes with NIST-traceable calibration certificates, replaced per manufacturer PM schedules.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Automated Handling Systems</h4>
                                <p>Precision probe deployment equipment for consistent, repeatable inspections: Pneumatic/electric probe pushers with programmable speed control (10-100 mm/s), encoder wheels for position accuracy (±0.1mm), probe rotation monitors (verify mirror speed 1800-3600 RPM), multi-axis tube sheet crawlers for automated multi-tube sequences, remote operation capability for contaminated/high-radiation areas. Integrated with data acquisition for synchronized encoding—critical for C-scan image quality.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Calibration & Quality Assurance</h4>
                        <p><strong>System Calibration:</strong> All IRIS systems calibrated annually per ASTM E2096 using precision-machined calibration tubes with NIST-traceable dimensions. Verification includes: thickness accuracy (±0.05mm), axial/circumferential resolution (1-3mm), minimum detectable defect (10% wall loss), repeatability (±0.02mm). <strong>Field Verification:</strong> Daily performance checks using client-specific calibration tubes matching actual diameter, wall thickness, and material. <strong>Probe Maintenance:</strong> Mirror balance checked weekly, transducer impedance verified monthly, complete refurbishment per manufacturer schedule (1000-2000 inspection hours).</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/iris-equipment.jpg" alt="IRIS Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch IRIS Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Digital C-Scan Imaging</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Real-Time Thickness Display</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Automated Defect Detection</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>3D Tube Visualization</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Cloud Data Archival</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>ASME/ASTM Compliant</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Equipment Certifications & Validations</h4>
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
                <p>Systematic approach ensuring accurate, repeatable results</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning</h3>
                        <p>Review heat exchanger drawings, tube data sheets, historical inspection reports, and failure history. Verify tube specifications: material (for velocity calibration), ID, wall thickness, length. Identify critical tubes (based on ECT/RFECT screening or service history). Plan access strategy and develop calibration tube specification matching actual geometry. Confirm water availability and quality for coupling medium. Prepare procedure per ASTM E2096 and client requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Procedure & Calibration Tube Specification
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Heat Exchanger Preparation</h3>
                        <p>Drain heat exchanger and flush tubes to remove loose debris (high-pressure water jetting if heavily fouled). Remove tube sheet covers/waterbox heads for probe access. Fill tubes with clean water—de-ionized or potable quality (clarity critical for ultrasonic transmission). Verify water level sufficient for complete tube coverage. Tag critical tubes for inspection priority. Set up IRIS equipment at tube sheet face with probe pusher/encoder system. Brief operations on safety protocols (confined space, water handling).</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Equipment Setup Photos & Safety Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>System Calibration</h3>
                        <p>Insert calibration tube matching actual tube material, diameter, and nominal wall thickness. Adjust system settings: ultrasonic velocity (material-specific: steel ~5900 m/s, copper ~4700 m/s, titanium ~6100 m/s), gate positions for ID and OD echoes, gain/filtering for optimal signal-to-noise ratio. Verify thickness measurement against known calibration tube values (±0.05mm tolerance). Establish baseline C-scan appearance on defect-free sections. Document all calibration parameters and acquire baseline images. Perform functional checks: mirror rotation speed, encoder accuracy, data acquisition triggering.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Calibration Report with Baseline C-Scans
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Tube Scanning & Data Acquisition</h3>
                        <p>Insert IRIS probe into target tube and position at inlet. Verify water coupling (strong ID/OD echoes visible). Activate probe rotation (mirror spinning) and initiate data acquisition. Pull probe through tube at constant speed (typically 25-75 mm/s based on tube diameter and required resolution). System records ultrasonic echoes continuously while encoder tracks axial position. C-scan image builds in real-time showing color-coded wall thickness map. Operator monitors for data quality, adjusts gain if needed, flags suspect areas. Typical inspection time: 5-20 minutes per tube depending on length and complexity.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Raw IRIS Data Files (Waveforms + C-Scans)
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Data Analysis & Interpretation</h3>
                        <p>Certified Level II/III analysts review all C-scan images and thickness profiles. Identify and characterize indications: wall thinning (general vs localized), pitting (ID vs OD, isolated vs clustered), crack-like indications (length, depth, orientation), mechanical damage (dents, gouges, fretting). Measure minimum remaining wall thickness at defect locations. Determine defect circumferential position (clock orientation). Compare with acceptance criteria (client specification, code minimum, FFS limits). Flag tubes requiring immediate action (plug/repair) vs monitor vs acceptable. Perform statistical analysis: defect distribution, severity histograms, corrosion rate calculations if prior data available.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Annotated C-Scans with Defect Measurements
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting & Recommendations</h3>
                        <p>Generate comprehensive IRIS report per ASTM E2096 including: Executive summary with key findings and recommendations, inspection scope and procedures, equipment calibration records, tube-by-tube results tables (minimum wall, defect locations, severity classification), color C-scan images (overview + detailed defect zones), statistical analysis and trending (if historical data available), comparison with acceptance criteria, FFS assessment (if requested), tube plugging/repair recommendations prioritized by risk. Provide digital data package for client archival and future trending. Support client discussions with engineering, regulatory, insurance as needed.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Final IRIS Inspection Report (ASTM E2096 Compliant)
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
                <h2>Your IRIS Inspection Partner</h2>
                <p>Expertise, technology, and commitment to excellence</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Industry-Leading Expertise</h3>
                    <p>ASNT Level II/III certified technicians with specialized IRIS training per ASTM E2096 and ASME Section V. Average 12+ years ultrasonic testing experience. Dedicated Level III analysts for complex signal interpretation and fitness-for-service assessments. Manufacturer-certified on all major IRIS systems (Zetec, Olympus). Continuous professional development on latest techniques, probe technology, and analysis software.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Comprehensive Equipment Fleet</h3>
                    <p>Largest IRIS equipment inventory in region: 4 complete digital systems (redundancy ensures no schedule delays), 100+ probes covering 12-150mm ID tubes, specialized configurations (high-temp, miniature, long-reach), automated probe handling systems, portable systems for field deployment. Maintained per manufacturer specifications with annual calibration verification. Ready-kits for rapid mobilization to client sites nationwide.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Multi-Technique Integration</h3>
                    <p>Complete tube inspection services under single roof: Conventional multi-frequency ECT for rapid screening, Remote Field ECT (RFECT) for ferrous tubes/TSP zones, IRIS for confirmatory and precise sizing, Video borescope for visual documentation, Metallurgical analysis and failure investigation. Integrated approach optimizes cost vs accuracy trade-offs—use each technique where it excels. No subcontractors—direct technical accountability.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Advanced Data Analytics</h3>
                    <p>Proprietary software for enhanced analysis and long-term trending: Automated defect detection algorithms (AI/machine learning), 3D tube visualization and virtual fly-through, Corrosion rate calculations and remaining life predictions, Historical database for multi-year trend analysis, Integration with client CMMS/EAM systems via API, Statistical analysis and fleet-wide condition assessment. Transforms raw data into actionable intelligence for asset management.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Regulatory Compliance Support</h3>
                    <p>Inspection procedures and reporting qualified to all major codes: ASME Section V Article 5 (Ultrasonic), ASME Section VIII (Pressure Vessels), API 510/570 (Vessel/Piping Inspection), NBIC Part 3 (Repairs & Alterations), International codes (EN, AS, JIS). Expert witness services for regulatory and insurance disputes. Third-party review and verification. Support for authorized inspector (AI) approvals and continued operation assessments. Documentation package ready for ASME/NB stamp holders.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Complete Project Support</h3>
                    <p>Turnkey solutions from planning through remediation: Pre-outage planning and tube selection strategy, Mobilization within 48-72 hours (emergency response), On-site engineering support during inspection, Real-time results for immediate plug/repair decisions, Fitness-for-service (FFS) assessments per API 579-1, Post-inspection consulting (root cause, mitigation strategies), Operator training on tube integrity management, Multi-year service agreements for long-term partnerships. Your success is our mission.</p>
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
                        <p>IRIS provides ±0.05mm (±0.002") absolute wall thickness accuracy—vastly superior to eddy current techniques which measure relative conductivity changes with ±10-20% sizing uncertainty. This precision is achieved through direct ultrasonic time-of-flight measurement: thickness = (echo time × material velocity) / 2. Accuracy validated using NIST-traceable calibration tubes with known dimensions. For fitness-for-service (FFS) analysis per API 579-1, ±0.05mm accuracy enables confident decisions on tubes near minimum wall limits where 0.1mm difference determines plug vs operate. Repeatability is ±0.02mm (same operator/system/tube), making IRIS ideal for corrosion rate trending across multiple outages. No other tube inspection technique approaches IRIS dimensional accuracy.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do tubes need to be cleaned before IRIS inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Partial cleaning only—far less than conventional ECT. IRIS requires water-filled tubes for ultrasonic coupling, so loose debris must be removed to allow water flow, but hard scale and deposits can remain. Typical preparation: high-pressure water jetting (1000-3000 psi) to flush loose sludge/sediment, drain tubes, fill with clean water, inspect. Magnetite layers, calcium/silica scale, copper deposits, and biological films do not prevent IRIS inspection—ultrasonic beam penetrates through to metal tube wall. Requirements: (1) Continuous water column inside tube (no air pockets); (2) Reasonably clear water for beam transmission (turbidity <50 NTU acceptable). Compare to conventional ECT requiring pristine surface ($50K-200K chemical cleaning for typical power plant condenser). IRIS cleaning costs 60-80% less while still providing superior thickness data through remaining deposits.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can IRIS inspect all tube materials?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—IRIS is material-independent (unlike ECT which requires separate techniques/calibrations for ferrous vs non-ferrous). Ultrasonic propagation depends only on acoustic impedance, not electrical conductivity or magnetic permeability. Successfully inspects: <strong>Ferrous:</strong> Carbon steel, Cr-Mo alloys (T11, T22, T91), ferritic stainless (409, 430), martensitic stainless (410, 420); <strong>Non-ferrous:</strong> Copper, admiralty brass, aluminum brass, Cu-Ni 70/30 and 90/10, aluminum, titanium; <strong>Austenitic stainless:</strong> TP304, 316, 321, 347; <strong>Nickel alloys:</strong> Inconel 600/625/690, Hastelloy C-276, Monel 400; <strong>Specialty:</strong> Tantalum, zirconium, duplex/super duplex stainless. Only requirement: known ultrasonic velocity for material (calibration adjustment). Single IRIS system inspects entire heat exchanger fleet regardless of metallurgy—major advantage over ECT technique proliferation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does IRIS determine if defects are on ID or OD surface?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>IRIS receives separate ultrasonic echoes from ID (inside diameter) and OD (outside diameter) surfaces. Ultrasonic pulse sequence: (1) Transducer fires pulse; (2) Beam travels through water and reflects from tube ID surface (first echo—ID profile); (3) Beam continues through tube wall and reflects from OD surface (second echo—OD profile); (4) System measures time-of-flight for both echoes; (5) Wall thickness calculated from time difference between ID and OD echoes. Defect location determined by which echo is affected: <strong>ID defect:</strong> ID echo irregular/distorted, OD echo normal → process-side/waterside corrosion; <strong>OD defect:</strong> ID echo normal, OD echo irregular → external corrosion, CUI, atmospheric attack; <strong>Through-wall defect:</strong> Both echoes affected → pitting, cracking propagating from one surface toward other. C-scan images show separate ID and OD profiles enabling precise defect location for root cause analysis and targeted mitigation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum defect size IRIS can detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Detection limits depend on defect type and orientation: <strong>General wall thinning:</strong> ≥10% wall loss over ≥5mm axial extent; <strong>Pitting:</strong> ≥0.5mm diameter, ≥20% depth (isolated pits); clustered pitting with combined area >2mm² detected even if individual pits shallower; <strong>Cracking:</strong> ≥0.2mm opening, ≥3mm length (depends on orientation—perpendicular to beam easier than parallel); <strong>Axial resolution:</strong> 1-3mm (ability to distinguish closely spaced defects); <strong>Circumferential resolution:</strong> 1-5mm (depends on mirror rotation speed and pull speed). <strong>Probability of Detection (POD):</strong> 90% POD (95% confidence) at 10% wall loss per MIL-HDBK-1823. Sensitivity far exceeds regulatory requirements—e.g., ASME Section VIII allows continued service down to 50% wall loss in many cases; IRIS confidently detects defects at 10-20% loss enabling proactive intervention decades before failure risk.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does IRIS inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection speed varies with tube length, diameter, and required resolution. <strong>Typical rates:</strong> 5-20 minutes per tube depending on length (5 min for 3m tube, 20 min for 15m tube), 2-6 tubes per hour sustained throughput (including probe handling, setup, verification). <strong>Example project timelines:</strong> Small heat exchanger (100 tubes, 5m length): 2-3 days (50 tubes/day); Medium condenser (500 tubes, 10m length): 1-2 weeks (40-60 tubes/day); Large power plant condenser (14,000 tubes): IRIS used selectively on ECT-flagged suspect tubes only (200-500 tubes = 1-2 weeks). <strong>Comparison to ECT:</strong> IRIS is 10-20× slower than conventional ECT, but provides absolute thickness measurement versus relative amplitude—not competing techniques but complementary. Best practice: ECT screens 100% population rapidly (1-3 days), IRIS confirms critical indications requiring precise sizing (5-15% of population).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can IRIS inspect U-bend heat exchanger tubes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, with limitations based on bend radius and probe design. <strong>Minimum bend radius:</strong> Typically 1.5D (bend radius = 1.5 × tube diameter)—e.g., 25mm OD tube requires ≥37.5mm bend radius. Tighter bends risk probe jamming or mirror damage. <strong>Flexible IRIS probes:</strong> Specialized probes with articulated sections and flexible drive cables navigate U-bends. Inspection approach: Insert probe in one straight leg, navigate through U-bend, pull through opposite straight leg—inspects full tube length including bend region. <strong>Bend zone challenges:</strong> Centrifugal forces on rotating mirror can cause speed variations affecting data quality; geometric effects may complicate signal interpretation; inspection speed reduced in bend (slower pull speed). <strong>Alternatives if U-bend inaccessible:</strong> Inspect straight legs from both ends (covers 70-85% of tube length, leaves bend zone uninspected); combine IRIS (straight sections) with video borescope (visual bend inspection). Consult with Alpha Sonix engineers for probe selection and feasibility assessment for specific U-bend geometry.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What codes and standards govern IRIS inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>IRIS is recognized and governed by multiple industry codes: <strong>ASME Section V, Article 5:</strong> Ultrasonic Examination—defines general UT requirements applicable to IRIS (equipment, personnel, procedures, calibration); <strong>ASTM E2096:</strong> "Standard Test Method for Evaluation of Tubing Using Internal Rotary Inspection System (IRIS)"—primary standard specifically for IRIS defining detailed procedures, calibration requirements, acceptance criteria, and reporting; <strong>ASME Section VIII:</strong> Pressure Vessels (Division 1 & 2)—references UT techniques including IRIS for tube bundle inspection and remaining life assessment; <strong>API 510:</strong> Pressure Vessel Inspection Code—accepts IRIS for tube thickness verification; <strong>API 570:</strong> Piping Inspection Code—accepts IRIS for heat exchanger piping assessment; <strong>NBIC Part 3:</strong> National Board Inspection Code for Repairs and Alterations—recognizes IRIS data for continued service evaluations. Alpha Sonix IRIS procedures written and qualified per ASTM E2096 and ASME Section V, ensuring code compliance and regulatory acceptance worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Get Absolute Wall Thickness Measurement—Not Guesswork</h2>
                <p>IRIS provides ±0.05mm precision for confident fitness-for-service decisions and code compliance</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Technical Consultation</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free Feasibility Assessment</span>
                    <span><i class="fas fa-check"></i> 48-Hour Mobilization</span>
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
                <p>Complete integrity solutions from rapid screening to precise characterization</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/conventional-ect.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Conventional ECT</h3>
                    <p>High-speed multi-frequency screening for all tube materials</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/remote-field-eddy-current.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>RFECT</h3>
                    <p>Remote field testing for ferrous tubes and support plate zones</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>UT Thickness Gauging</h3>
                    <p>Spot thickness measurement for tube sheets and shells</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Video Borescope</h3>
                    <p>Direct visual documentation of tube interiors and U-bends</p>
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