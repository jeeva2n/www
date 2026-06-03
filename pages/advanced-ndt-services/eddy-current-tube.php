<?php $base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php'; $page_title = "Eddy Current Tube Testing (ECT) Services | Alpha Sonix NDT Solutions"; $meta_description = "Professional eddy current testing for heat exchanger tubes, condensers, boilers, and air-cooled heat exchangers. ASME Sec V certified ECT inspection detects pitting, cracking, wall loss, and fouling. Fast, accurate, no tube removal required."; $meta_keywords = "eddy current testing, ECT inspection, heat exchanger tube testing, condenser tube inspection, boiler tube testing, tube inspection, ACHE inspection, steam generator tubes, TEMA standards, bobbin probe, rotating probe, tube NDT"; $canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/eddy-current-tube-testing.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title> <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="author" content="Alpha Sonix NDT Solutions">
    <link rel="canonical" href="<?php echo $canonical_url; ?>"> <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:image" content="/www/assets/images/services/ect-tube-testing-og.jpg"> <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $canonical_url; ?>">
    <meta property="twitter:title" content="<?php echo $page_title; ?>">
    <meta property="twitter:description" content="<?php echo $meta_description; ?>"> <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> <!-- Stylesheets -->
    <link rel="stylesheet" href="/www/assets/css/style.css">
    <link rel="stylesheet" href="/www/assets/css/service-page.css"> <!-- Schema.org Markup -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Eddy Current Tube Testing (ECT)",
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
            "description": "Professional Eddy Current Testing services for heat exchanger, condenser, boiler, and air-cooled heat exchanger tubes. Detects corrosion, cracking, erosion, and fouling without tube removal.",
            "serviceOutput": "Comprehensive tube integrity assessment report per ASME Section V and TEMA standards"
        }
    </script>
</head>

<body> <?php include $base . '/includes/top-bar.php'; ?> <?php include $base . '/includes/header.php'; ?> <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/ect-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb"> <a href="/www/index.php">Home</a> <span><i class="fas fa-chevron-right"></i></span> <a href="#">Advanced NDT Services</a> <span><i class="fas fa-chevron-right"></i></span> <span>ECT</span> </div>
                <h1 class="page-title">Eddy Current Tube Testing (ECT)</h1>
                <p class="page-subtitle">Advanced electromagnetic inspection for 100% tube integrity assessment—detecting corrosion, cracking, erosion, and fouling without equipment shutdown</p>
                <div class="hero-badges"> <span class="badge"><i class="fas fa-certificate"></i> ASME Sec V Certified</span> <span class="badge"><i class="fas fa-percentage"></i> 100% Tube Coverage</span> <span class="badge"><i class="fas fa-bolt"></i> High-Speed Inspection</span> </div>
            </div>
        </div>
    </section> <!-- ===================== QUICK OVERVIEW ===================== -->
    <section class="quick-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-card">
                    <div class="overview-icon"> <i class="fas fa-search-plus"></i> </div>
                    <h3>Multi-Defect Detection</h3>
                    <p>Identifies pitting, cracking, erosion, fretting, denting, fouling, and wall loss in single scan pass</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"> <i class="fas fa-tachometer-alt"></i> </div>
                    <h3>Rapid Inspection Speed</h3>
                    <p>Inspect 100+ tubes per hour with automated data acquisition and real-time analysis</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"> <i class="fas fa-chart-line"></i> </div>
                    <h3>Trending & Monitoring</h3>
                    <p>Compare historical data to track degradation rates and predict remaining tube life</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon"> <i class="fas fa-cogs"></i> </div>
                    <h3>No Tube Removal</h3>
                    <p>Inspect tubes in-situ without extraction, minimizing turnaround time and equipment damage</p>
                </div>
            </div>
        </div>
    </section> <!-- ===================== WHAT IS ECT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content"> <span class="section-label">ELECTROMAGNETIC NDT TECHNOLOGY</span>
                    <h2>What is Eddy Current Tube Testing (ECT)?</h2>
                    <p class="lead">Eddy Current Testing (ECT) is a highly sensitive electromagnetic inspection technique that detects surface and near-surface defects in non-ferromagnetic and ferromagnetic tubing by inducing electrical currents (eddy currents) in the tube wall and measuring impedance changes caused by material discontinuities, wall thickness variations, and geometric anomalies.</p>
                    <p>ECT probes consist of one or more wire coils energized with alternating current at frequencies ranging from 10 kHz to 6 MHz depending on material, tube diameter, and wall thickness. When the probe is inserted into a tube and traversed through its length, the AC coil generates a magnetic field that induces circular eddy currents in the conductive tube wall. Any defect—corrosion pit, crack, erosion, dent, or foreign material deposit—disrupts the eddy current flow pattern, causing measurable changes in coil impedance (resistance and reactance).</p>
                    <p>Advanced multi-frequency ECT instruments simultaneously operate at multiple frequencies (e.g., 100 kHz, 300 kHz, 800 kHz) to optimize detection of different defect types: low frequencies penetrate deeper for inner diameter (ID) defects and wall loss; high frequencies provide superior resolution for outer diameter (OD) surface cracks and shallow pitting. Digital signal processing and impedance plane analysis enable experienced technicians to differentiate defect type, location (ID vs OD vs midwall), depth, and circumferential extent.</p>
                    <div class="feature-list">
                        <div class="feature-item"> <i class="fas fa-check-circle"></i>
                            <div> <strong>Electromagnetic Induction Principle</strong>
                                <p>Non-contact inspection using induced eddy currents—no coupling medium or surface preparation required</p>
                            </div>
                        </div>
                        <div class="feature-item"> <i class="fas fa-check-circle"></i>
                            <div> <strong>Multi-Frequency Capability</strong>
                                <p>Simultaneous testing at 2-8 frequencies optimizes sensitivity to ID, OD, and through-wall defects</p>
                            </div>
                        </div>
                        <div class="feature-item"> <i class="fas fa-check-circle"></i>
                            <div> <strong>100% Tube Length Coverage</strong>
                                <p>Continuous scanning from tube inlet to outlet detects all defects along entire length</p>
                            </div>
                        </div>
                        <div class="feature-item"> <i class="fas fa-check-circle"></i>
                            <div> <strong>Permanent Digital Records</strong>
                                <p>Impedance plane data archived for future comparison, trending, and regulatory compliance</p>
                            </div>
                        </div>
                    </div>
                    <div class="tech-highlight-box"> <i class="fas fa-lightbulb"></i>
                        <div> <strong>Key Advantage:</strong>
                            <p>ECT detects defects in heat exchanger tubes without disassembly or tube removal, enabling condition-based maintenance strategies that optimize cleaning/plugging decisions and extend equipment life—reducing unplanned shutdowns by 60-80%.</p>
                        </div>
                    </div>
                    <div class="cta-buttons"> <a href="#contact" class="btn btn-primary">Schedule ECT Inspection</a> <a href="#applications" class="btn btn-secondary">View Applications</a> </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card"> <img src="/www/assets/images/services/ect-probe-operation.jpg" alt="ECT Probe in Heat Exchanger Tube">
                        <div class="visual-caption"> <i class="fas fa-info-circle"></i> <span>Multi-frequency bobbin probe traversing heat exchanger tube with automated data acquisition</span> </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item"> <span class="stat-number">±5%</span> <span class="stat-label">Wall Loss Accuracy</span> </div>
                        <div class="stat-item"> <span class="stat-number">100%</span> <span class="stat-label">Tube Coverage</span> </div>
                        <div class="stat-item"> <span class="stat-number">5000+</span> <span class="stat-label">Exchangers Tested</span> </div>
                    </div>
                    <div class="principle-diagram">
                        <h4><i class="fas fa-project-diagram"></i> ECT Detection Principle</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> AC coil generates magnetic field</li>
                            <li><strong>2.</strong> Eddy currents induced in tube wall</li>
                            <li><strong>3.</strong> Defect disrupts current flow pattern</li>
                            <li><strong>4.</strong> Impedance change measured by coil</li>
                            <li><strong>5.</strong> Signal analyzed for defect type/depth</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- ===================== ADVANTAGES ===================== -->
    <section class="advantages-section">
        <div class="container">
            <div class="section-header center"> <span class="section-label">WHY CHOOSE ECT</span>
                <h2>Key Advantages of Eddy Current Tube Testing</h2>
                <p>Superior sensitivity, speed, and cost-effectiveness for tube bundle integrity management</p>
            </div>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue"> <i class="fas fa-eye"></i> </div>
                    <h3>Exceptional Defect Sensitivity</h3>
                    <p>Detects corrosion pitting as shallow as 10% wall thickness, tight stress corrosion cracks <0.1mm opening, erosion thinning, fretting wear at tube supports, denting from tube sheet corrosion, and foreign object deposits. Multi-frequency operation (10 kHz - 6 MHz) optimizes detection across full tube wall: low frequencies (50-400 kHz) penetrate to ID and midwall; high frequencies (500 kHz - 2 MHz) resolve OD surface defects. Probability of Detection (POD)>95% for cracks >3mm length per EPRI guidelines.</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon green"> <i class="fas fa-arrows-alt-h"></i> </div>
                    <h3>Defect Depth & Location Accuracy</h3>
                    <p>Phase angle analysis on impedance plane diagrams enables accurate through-wall depth estimation (±5-10% wall thickness) and precise location determination (ID surface, OD surface, or midwall). Critical for fitness-for-service evaluation per ASME PCC-2 and remaining life calculations. Differentiation between ID pitting (process-side corrosion) vs OD pitting (cooling water-side attack) guides root cause analysis and mitigation strategies—optimizing chemical treatment programs and cleaning schedules.</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon purple"> <i class="fas fa-expand-arrows-alt"></i> </div>
                    <h3>Complete Tube Coverage</h3>
                    <p>100% volumetric inspection of full tube length from inlet to outlet tubesheet including straight sections, U-bends, expansion transitions, and support plate intersections. Bobbin probes provide continuous 360° circumferential coverage detecting defects at any clock position. Unlike spot radiography or point UT, ECT misses no defects between discrete measurement locations. Identifies high-risk tube zones requiring targeted rotating probe or internal rotary inspection system (IRIS) follow-up for precise defect characterization.</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon orange"> <i class="fas fa-bolt"></i> </div>
                    <h3>High-Speed Inspection</h3>
                    <p>Automated probe drive systems traverse tubes at 0.3-1.0 m/s (1-3 ft/sec) with real-time data acquisition and signal averaging. Typical heat exchanger with 500 tubes inspected in 8-12 hours versus 3-5 days for hydrostatic testing or weeks for tube-by-tube radiography. Multi-channel instruments simultaneously test 4-8 tubes in parallel, further reducing inspection time. Rapid turnaround minimizes equipment downtime and production losses during scheduled maintenance outages—critical for refineries, power plants, and chemical facilities.</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon red"> <i class="fas fa-cog"></i> </div>
                    <h3>No Tube Removal Required</h3>
                    <p>In-situ inspection with tubes installed in bundle eliminates destructive tube pulling, cutting, and laboratory testing. Preserves tube-to-tubesheet joints avoiding re-rolling or re-welding after inspection. Non-contact electromagnetic coupling requires no surface preparation, couplant, or cleaning beyond routine exchanger opening procedures. Reduces turnaround costs by $50,000-$200,000+ compared to tube sample removal programs while providing 100x more data (100% tubes vs 1-5% samples).</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon teal"> <i class="fas fa-chart-line"></i> </div>
                    <h3>Degradation Trending & RUL Prediction</h3>
                    <p>Baseline ECT data at commissioning enables comparison with periodic re-inspections (annual, bi-annual, or turnaround intervals) to calculate tube degradation rates. Quantitative trend analysis predicts Remaining Useful Life (RUL) supporting Risk-Based Inspection (RBI) per API 580/581 and condition-based maintenance optimization. Historical data comparison identifies accelerated corrosion zones requiring cleaning, chemical treatment adjustment, or tube plugging before catastrophic failure causes unplanned shutdown and potential process contamination.</p>
                </div>
            </div>
        </div>
    </section> <!-- ===================== ECT PROBE TYPES ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center"> <span class="section-label">PROBE TECHNOLOGY</span>
                <h2>ECT Probe Types & Selection Guide</h2>
                <p>Optimizing probe selection for defect type, tube geometry, and inspection objectives</p>
            </div>
            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Probe Type</th>
                            <th><i class="fas fa-circle"></i> Bobbin Coil</th>
                            <th><i class="fas fa-sync-alt"></i> Rotating Pancake</th>
                            <th><i class="fas fa-grip-horizontal"></i> Array Probe</th>
                            <th><i class="fas fa-wave-square"></i> Remote Field (RFT)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Configuration</strong></td>
                            <td>Circumferential coil(s) centered in tube</td>
                            <td>Small coil rotating on eccentric arm</td>
                            <td>Multiple coils in helical pattern</td>
                            <td>Separate exciter & detector coils</td>
                        </tr>
                        <tr>
                            <td><strong>Coverage</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> 360° simultaneous</td>
                            <td>Sequential scanning (slower)</td>
                            <td class="excellent">360° simultaneous</td>
                            <td class="excellent">360° simultaneous</td>
                        </tr>
                        <tr>
                            <td><strong>Inspection Speed</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> 0.5-1.0 m/s (fast)</td>
                            <td class="poor">0.05-0.15 m/s (slow)</td>
                            <td class="good">0.3-0.6 m/s (medium)</td>
                            <td class="good">0.2-0.5 m/s (medium)</td>
                        </tr>
                        <tr>
                            <td><strong>Axial Crack Detection</strong></td>
                            <td class="poor">Poor (parallel to coil)</td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                            <td class="average">Good</td>
                        </tr>
                        <tr>
                            <td><strong>Circumferential Crack</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                            <td class="good">Good</td>
                            <td class="excellent">Excellent</td>
                            <td class="average">Good</td>
                        </tr>
                        <tr>
                            <td><strong>ID vs OD Differentiation</strong></td>
                            <td class="average">Moderate (phase analysis)</td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent (direct)</td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent</td>
                            <td class="poor">Poor (through-wall only)</td>
                        </tr>
                        <tr>
                            <td><strong>Support Plate Signals</strong></td>
                            <td class="poor">Strong interference</td>
                            <td class="excellent"><i class="fas fa-star"></i> Minimal (focused)</td>
                            <td class="good">Moderate</td>
                            <td class="average">Moderate</td>
                        </tr>
                        <tr>
                            <td><strong>Ferromagnetic Tubes</strong></td>
                            <td class="average">Good (with saturation)</td>
                            <td class="good">Better (localized)</td>
                            <td class="good">Good</td>
                            <td class="excellent"><i class="fas fa-star"></i> Excellent (penetrates)</td>
                        </tr>
                        <tr>
                            <td><strong>Typical Applications</strong></td>
                            <td>Rapid screening, general corrosion</td>
                            <td>SCC, axial cracking, detailed analysis</td>
                            <td>Steam generators, high-resolution</td>
                            <td>Ferromagnetic tubes, carbon steel</td>
                        </tr>
                        <tr>
                            <td><strong>Cost per Tube</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> $5-15 (lowest)</td>
                            <td class="poor">$50-150 (highest)</td>
                            <td class="average">$20-40 (medium)</td>
                            <td class="average">$15-30 (medium)</td>
                        </tr>
                        <tr>
                            <td><strong>Best For</strong></td>
                            <td>First-pass screening all tubes</td>
                            <td>Follow-up on bobbin indications</td>
                            <td>Nuclear steam generators</td>
                            <td>Carbon steel exchangers</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="comparison-note"> <i class="fas fa-info-circle"></i>
                <p><strong>Best Practice Strategy:</strong> Use bobbin probe for rapid 100% screening (all tubes, full length) to identify tubes with indications. Follow up flagged tubes with rotating pancake coil (RPC) or array probe for detailed characterization of crack-like signals, precise defect sizing, and ID vs OD confirmation before tube plugging or repair decisions. This two-stage approach balances inspection speed with data quality.</p>
            </div>
        </div>
    </section> <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center"> <span class="section-label">ECT APPLICATIONS</span>
                <h2>Equipment Types & Industries We Serve</h2>
                <p>Comprehensive tube integrity assessment across all heat transfer equipment</p>
            </div>
            <div class="applications-tabs">
                <div class="tabs-nav"> <button class="tab-btn active" data-tab="heatex">Heat Exchangers</button> <button class="tab-btn" data-tab="condenser">Condensers</button> <button class="tab-btn" data-tab="boiler">Boilers</button> <button class="tab-btn" data-tab="ache">Air-Cooled HX</button> </div>
                <div class="tabs-content"> <!-- Heat Exchangers Tab -->
                    <div class="tab-panel active" id="heatex">
                        <div class="tab-grid">
                            <div class="tab-image"> <img src="/www/assets/images/services/ect-heat-exchanger.jpg" alt="Heat Exchanger ECT Inspection"> </div>
                            <div class="tab-text">
                                <h3>Shell & Tube Heat Exchanger Inspection</h3>
                                <p>ECT is the industry-standard method for shell-and-tube heat exchanger tube bundle integrity assessment in refining, petrochemical, and chemical processing. Detects process-side and cooling water-side corrosion, erosion at inlet/outlet zones, fretting at baffle supports, stress corrosion cracking (SCC) in austenitic stainless tubes, and fouling deposits affecting heat transfer efficiency.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude oil preheat train exchangers (desalter, atmospheric tower feed)</li>
                                    <li><i class="fas fa-check"></i> Catalytic cracker (FCC) slurry oil, main fractionator overhead exchangers</li>
                                    <li><i class="fas fa-check"></i> Hydrocracker and hydrotreater reactor effluent air coolers (REACs)</li>
                                    <li><i class="fas fa-check"></i> Amine regenerator lean/rich exchangers (corrosive amine service)</li>
                                    <li><i class="fas fa-check"></i> Ethylene plant quench water, process gas intercoolers</li>
                                    <li><i class="fas fa-check"></i> Polymerization reactor cooling water exchangers</li>
                                    <li><i class="fas fa-check"></i> HVAC and process chilled water systems</li>
                                    <li><i class="fas fa-check"></i> Seawater-cooled offshore platform heat exchangers</li>
                                </ul>
                                <div class="app-case-study">
                                    <h4><i class="fas fa-clipboard-check"></i> Case Study: Refinery Crude Preheat Exchanger</h4>
                                    <p><strong>Challenge:</strong> 15-year-old shell-and-tube exchanger (800 tubes, 6m length, 316SS) experiencing declining heat transfer efficiency. Suspected fouling vs corrosion—visual inspection inconclusive.</p>
                                    <p><strong>ECT Solution:</strong> Multi-frequency bobbin probe scan (100/300/800 kHz) completed in 6 hours. Detected 127 tubes with >40% OD pitting from cooling water chloride attack, 43 tubes with ID fouling >2mm thick, and 18 tubes with through-wall defects requiring immediate plugging.</p>
                                    <p><strong>Outcome:</strong> Plugged 18 critical tubes preventing tube rupture and process contamination. Cleaned 43 fouled tubes restoring 85% heat transfer capacity. Targeted chemical treatment on OD pitting zones extended exchanger life 5+ years versus full re-tube ($450K saved). ECT now performed every 2 years for proactive monitoring.</p>
                                </div>
                                <div class="standards"> <strong>Applicable Standards:</strong> <span class="standard-tag">ASME Sec V Art 8</span> <span class="standard-tag">TEMA Standards</span> <span class="standard-tag">API 510</span> <span class="standard-tag">ASTM E243</span> <span class="standard-tag">ASTM E215</span> </div>
                            </div>
                        </div>
                    </div> <!-- Condensers Tab -->
                    <div class="tab-panel" id="condenser">
                        <div class="tab-grid">
                            <div class="tab-image"> <img src="/www/assets/images/services/ect-condenser.jpg" alt="Condenser ECT Inspection"> </div>
                            <div class="tab-text">
                                <h3>Steam Surface Condenser Inspection</h3>
                                <p>Power plant and industrial steam condensers require rigorous tube integrity assurance to prevent cooling water in-leakage causing boiler feedwater contamination, steam turbine blade erosion, and forced outages. ECT detects thinning from erosion-corrosion, pitting from impingement attack, microbiologically influenced corrosion (MIC), and stress corrosion cracking before catastrophic tube failure.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Power plant main steam turbine condensers (15,000-50,000 tubes typical)</li>
                                    <li><i class="fas fa-check"></i> Combined cycle heat recovery steam generator (HRSG) condensers</li>
                                    <li><i class="fas fa-check"></i> Geothermal steam condensers (H₂S corrosion environments)</li>
                                    <li><i class="fas fa-check"></i> Ammonia refrigeration evaporative condensers</li>
                                    <li><i class="fas fa-check"></i> Distillation column overhead condensers</li>
                                    <li><i class="fas fa-check"></i> Vacuum ejector intercondensers and aftercondensers</li>
                                    <li><i class="fas fa-check"></i> Marine propulsion steam condensers (seawater service)</li>
                                    <li><i class="fas fa-check"></i> Industrial process vacuum condensers</li>
                                </ul>
                                <div class="app-highlight"> <i class="fas fa-bolt"></i>
                                    <div> <strong>Power Plant Reliability:</strong>
                                        <p>Undetected condenser tube leaks cause feedwater contamination requiring emergency boiler shutdown and costly chemical cleaning. Single tube failure can force 500-1000 MW unit offline for 48-72 hours—$2M-5M in lost generation revenue plus spot market power purchase. Proactive ECT during scheduled outages identifies weak tubes for plugging before in-service failure, improving fleet availability by 1-2% (industry benchmark: 85-90% capacity factor).</p>
                                    </div>
                                </div>
                                <div class="standards"> <strong>Applicable Standards:</strong> <span class="standard-tag">ASME PTC 12.2</span> <span class="standard-tag">EPRI Guidelines</span> <span class="standard-tag">HEI Standards</span> <span class="standard-tag">ASTM E309</span> <span class="standard-tag">ISO 21968</span> </div>
                            </div>
                        </div>
                    </div> <!-- Boilers Tab -->
                    <div class="tab-panel" id="boiler">
                        <div class="tab-grid">
                            <div class="tab-image"> <img src="/www/assets/images/services/ect-boiler.jpg" alt="Boiler Tube ECT Inspection"> </div>
                            <div class="tab-text">
                                <h3>Boiler & Steam Generator Tube Testing</h3>
                                <p>Boiler tube failures are the leading cause of unplanned outages in power generation and industrial facilities. ECT detects thinning from fireside erosion, waterside corrosion, flow-accelerated corrosion (FAC), hydrogen damage, caustic gouging, and stress-assisted corrosion before rupture causes catastrophic steam release, personnel injury, and extended forced outage.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Utility boiler waterwall tubes (membrane wall construction)</li>
                                    <li><i class="fas fa-check"></i> Superheater and reheater pendant/horizontal tube sections</li>
                                    <li><i class="fas fa-check"></i> Economizer tube bundles (FAC susceptible zones)</li>
                                    <li><i class="fas fa-check"></i> Heat recovery steam generator (HRSG) evaporator/superheater tubes</li>
                                    <li><i class="fas fa-check"></i> Nuclear steam generator (SG) U-bend tubes (Alloy 600/690)</li>
                                    <li><i class="fas fa-check"></i> Waste-to-energy boiler tubes (corrosive flue gas)</li>
                                    <li><i class="fas fa-check"></i> Package boiler fire tubes and water tubes</li>
                                    <li><i class="fas fa-check"></i> Process steam boiler auxiliary heat transfer surfaces</li>
                                </ul>
                                <div class="app-highlight"> <i class="fas fa-radiation-alt"></i>
                                    <div> <strong>Nuclear Steam Generator Integrity:</strong>
                                        <p>NRC regulations mandate periodic ECT of all pressurized water reactor (PWR) steam generator tubes per 10 CFR 50 Appendix B. Advanced array probes (X-Probe, +Point) and rotating pancake coils detect primary water stress corrosion cracking (PWSCC) in Alloy 600 tubes at tube support plates, U-bends, and roll transitions. Degraded tubes plugged or sleeved per ASME Section XI criteria to maintain SG operational margins and avoid costly mid-cycle forced outages.</p>
                                    </div>
                                </div>
                                <div class="standards"> <strong>Applicable Standards:</strong> <span class="standard-tag">ASME Sec I</span> <span class="standard-tag">ASME Sec XI</span> <span class="standard-tag">EPRI PWR SG</span> <span class="standard-tag">NRC 10 CFR 50</span> <span class="standard-tag">NBBI NB-23</span> </div>
                            </div>
                        </div>
                    </div> <!-- Air-Cooled Heat Exchangers Tab -->
                    <div class="tab-panel" id="ache">
                        <div class="tab-grid">
                            <div class="tab-image"> <img src="/www/assets/images/services/ect-ache.jpg" alt="Air-Cooled Heat Exchanger ECT"> </div>
                            <div class="tab-text">
                                <h3>Air-Cooled Heat Exchanger (ACHE) Testing</h3>
                                <p>Air-cooled heat exchangers in refining, petrochemical, and gas processing experience vibration-induced fatigue cracking, corrosion from atmospheric pollutants, erosion from particulate fouling, and freeze damage. ECT detects tube degradation without removing finned tube bundles from service—avoiding costly crane rental, bundle handling, and production interruption.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Refinery crude unit overhead condensers (corrosive HCl/H₂S)</li>
                                    <li><i class="fas fa-check"></i> FCC main fractionator overhead air coolers</li>
                                    <li><i class="fas fa-check"></i> Hydroprocessing reactor effluent air coolers (REACs)</li>
                                    <li><i class="fas fa-check"></i> Gas plant refrigeration condensers and chillers</li>
                                    <li><i class="fas fa-check"></i> Compressor intercoolers and aftercoolers</li>
                                    <li><i class="fas fa-check"></i> Ethylene plant cracked gas/propylene refrigeration condensers</li>
                                    <li><i class="fas fa-check"></i> LNG liquefaction heat exchangers (aluminum finned tubes)</li>
                                    <li><i class="fas fa-check"></i> Power transformer oil coolers</li>
                                </ul>
                                <div class="app-highlight"> <i class="fas fa-wind"></i>
                                    <div> <strong>Vibration-Induced Fatigue:</strong>
                                        <p>ACHE fan-induced vibration causes high-cycle fatigue cracking at tube-to-header welds, plug welds, and unsupported tube spans. ECT detects circumferential fatigue cracks before complete tube separation and process fluid release. Approximately 30% of ACHE failures originate from vibration fatigue—ECT enables proactive tube support upgrades and vibration dampening modifications based on crack location patterns preventing recurrent failures.</p>
                                    </div>
                                </div>
                                <div class="standards"> <strong>Applicable Standards:</strong> <span class="standard-tag">API 661</span> <span class="standard-tag">ASME Sec VIII</span> <span class="standard-tag">TEMA Standards</span> <span class="standard-tag">ISO 13706</span> <span class="standard-tag">ASTM E426</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- ===================== TECHNICAL CAPABILITIES ===================== -->
    <section class="capabilities-section">
        <div class="container">
            <div class="section-header center"> <span class="section-label">TECHNICAL SPECIFICATIONS</span>
                <h2>Our Eddy Current Testing Capabilities</h2>
                <p>Advanced multi-frequency instrumentation and comprehensive probe inventory</p>
            </div>
            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header"> <i class="fas fa-ruler-horizontal"></i>
                        <h3>Tube Specifications</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">OD Range:</span> 6mm (1/4") to 100mm (4")</li>
                        <li><span class="cap-label">Typical Sizes:</span> 15.9mm (5/8"), 19.1mm (3/4"), 25.4mm (1")</li>
                        <li><span class="cap-label">Wall Thickness:</span> 0.5mm to 12mm (0.020" to 0.472")</li>
                        <li><span class="cap-label">Length:</span> Up to 30m (100 ft) per pass</li>
                        <li><span class="cap-label">Tube Type:</span> Straight, U-bend, helical coil</li>
                        <li><span class="cap-label">Condition:</span> In-service, out-of-service, with product</li>
                    </ul>
                </div>
                <div class="capability-box">
                    <div class="capability-header"> <i class="fas fa-flask"></i>
                        <h3>Material Compatibility</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Non-Ferromagnetic:</span> 304/316/321 SS, Monel, Inconel, Titanium, Copper, Brass, Aluminum</li>
                        <li><span class="cap-label">Ferromagnetic:</span> Carbon steel, low alloy steel (with saturation coil)</li>
                        <li><span class="cap-label">Duplex/Super Duplex:</span> 2205, 2507, Zeron 100</li>
                        <li><span class="cap-label">Nickel Alloys:</span> Alloy 600, 690, 800, 825, C-276, B-2</li>
                        <li><span class="cap-label">Clad/Lined:</span> Tube ID cladding, polymer liners</li>
                        <li><span class="cap-label">Finned Tubes:</span> Integral, welded, extruded fins</li>
                    </ul>
                </div>
                <div class="capability-box">
                    <div class="capability-header"> <i class="fas fa-search"></i>
                        <h3>Detection Capabilities</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Pitting:</span> >10% wall loss, >2mm diameter</li>
                        <li><span class="cap-label">Cracks:</span> >3mm length (SCC, fatigue, thermal)</li>
                        <li><span class="cap-label">Wall Loss:</span> ±5-10% through-wall accuracy</li>
                        <li><span class="cap-label">Erosion:</span> Localized thinning zones</li>
                        <li><span class="cap-label">Fouling:</span> Deposits >0.5mm thick</li>
                        <li><span class="cap-label">Denting:</span> Support plate tube deformation</li>
                    </ul>
                </div>
                <div class="capability-box">
                    <div class="capability-header"> <i class="fas fa-cogs"></i>
                        <h3>Equipment & Probes</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Instruments:</span> Zetec MIZ-80, Eddyfi Lyft, Olympus MultiScan MS 5800</li>
                        <li><span class="cap-label">Frequencies:</span> 10 kHz to 6 MHz, up to 8 simultaneous</li>
                        <li><span class="cap-label">Bobbin Probes:</span> 6mm-100mm OD, absolute & differential</li>
                        <li><span class="cap-label">Rotating Probes:</span> Pancake coil, +Point, X-Probe</li>
                        <li><span class="cap-label">Array Probes:</span> Cecco-3, Cecco-5 (nuclear SG)</li>
                        <li><span class="cap-label">Drive Systems:</span> Pneumatic, hydraulic, manual pull</li>
                    </ul>
                </div>
                <div class="capability-box">
                    <div class="capability-header"> <i class="fas fa-chart-area"></i>
                        <h3>Data Analysis</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Software:</span> Zetec AcquireX, Eddyfi Magnifi, TSP Vision</li>
                        <li><span class="cap-label">Analysis:</span> Impedance plane, C-scan mapping, strip charts</li>
                        <li><span class="cap-label">Defect Sizing:</span> ASME depth charts, phase angle analysis</li>
                        <li><span class="cap-label">Trending:</span> Multi-year comparison, degradation rate calculation</li>
                        <li><span class="cap-label">Reporting:</span> Tube-by-tube summaries, plugging recommendations</li>
                        <li><span class="cap-label">Data Retention:</span> 15 years digital archive per ASME/EPRI</li>
                    </ul>
                </div>
                <div class="capability-box">
                    <div class="capability-header"> <i class="fas fa-calendar-check"></i>
                        <h3>Service Delivery</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Mobilization:</span> India-wide within 24-48 hours</li>
                        <li><span class="cap-label">Inspection Rate:</span> 100-200 tubes/day (bobbin), 20-40 tubes/day (RPC)</li>
                        <li><span class="cap-label">Crew Size:</span> 2-4 technicians (equipment size dependent)</li>
                        <li><span class="cap-label">Preliminary Report:</span> Within 24 hours (tube plugging list)</li>
                        <li><span class="cap-label">Final Report:</span> Comprehensive within 7 days</li>
                        <li><span class="cap-label">Emergency Service:</span> 24/7 availability for critical equipment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- ===================== INSPECTION PROCEDURE ===================== -->
    <section class="procedure-section">
        <div class="container">
            <div class="section-header center"> <span class="section-label">INSPECTION WORKFLOW</span>
                <h2>ECT Inspection Procedure</h2>
                <p>Systematic approach per ASME Section V Article 8 ensuring reliable, repeatable results</p>
            </div>
            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Engineering</h3>
                        <p>Review heat exchanger/boiler drawings to determine tube count, material, OD, wall thickness, and length. Analyze operating history including process fluids, temperatures, and prior inspection reports. Select probe type (bobbin, rotating, array) and test frequencies based on tube material, defect types expected, and inspection objectives. Develop written procedure per ASME Sec V Art 8 T-840 including calibration standards, scan speed, and acceptance criteria.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> ASME-Compliant ECT Procedure & Equipment List </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Equipment Preparation & Calibration</h3>
                        <p>Open heat exchanger channel heads/water boxes and remove tube sheet covers. Clean tube inlets of debris, scale, and foreign objects. Establish reference standards: (1) Air calibration—probe in free air for baseline, (2) Support plate standard—simulated tube with drilled holes at support locations, (3) Defect standard—ASNT/ASTM tubes with calibrated EDM notches, through-wall holes, or wall thinning sections. Verify instrument performance, probe response, and signal-to-noise ratio meet procedure requirements.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> Calibration Report with Reference Signals </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Systematic Tube Scanning</h3>
                        <p>Insert probe into tube inlet and pneumatically or manually drive through full tube length at controlled speed (0.3-1.0 m/s for bobbin, 0.05-0.15 m/s for rotating). Acquire multi-frequency data continuously with encoder position tracking. Technician monitors real-time signal on impedance plane display identifying indications (pitting, cracking, wall loss, denting, support plate signals). Mark flagged tubes on tube sheet map for detailed analysis and potential rotating probe follow-up. Repeat for all tubes in bundle—typical 500-5000 tubes depending on exchanger size.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> Raw ECT Data Files for All Tubes </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Rotating Probe Confirmation (if required)</h3>
                        <p>For tubes with significant bobbin probe indications (crack-like signals, >40% wall loss, or ambiguous signals), perform rotating pancake coil (RPC) or array probe follow-up. Rotating probe provides superior axial crack detection, precise ID vs OD discrimination, and accurate defect sizing for tube plugging vs repair decisions. Critical for steam generator inspections where primary-to-secondary leakage consequences are severe. Typical 5-20% of tubes require RPC confirmation depending on exchanger condition.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> Rotating Probe Data for Flagged Tubes </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Data Analysis & Interpretation</h3>
                        <p>ASNT Level II/III certified analyst reviews impedance plane signals for all tubes. Classify indications per EPRI PWR Steam Generator Examination Guidelines or TEMA Standards: (1) NDD—No Detectable Degradation, (2) Minor—<20% wall loss or small pitting, (3) Significant—20-40% wall loss, (4) Critical—>40% wall loss or crack indications requiring plugging/sleeving. Calculate defect depth using phase angle analysis and calibrated voltage amplitude. Generate tube-by-tube summary with defect location (distance from tubesheet), type, and severity.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> Tube Condition Assessment Report </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Tube Plugging Recommendations</h3>
                        <p>Identify tubes exceeding plugging criteria per TEMA RCB-11.12, ASME Section VIII Division 1 UG-101, or owner specifications (typically >70-80% wall loss or through-wall cracks). Prioritize plugging based on defect severity, location (inlet end more critical), and tube redundancy. Calculate post-plugging heat exchanger capacity and verify thermal performance meets process requirements. Provide tube layout map with color-coded defect severity (green/yellow/orange/red) and recommended tube plugging pattern to maintenance team.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> Tube Plugging List & Capacity Analysis </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-number">7</div>
                    <div class="timeline-content">
                        <h3>Final Reporting & Engineering Recommendations</h3>
                        <p>Comprehensive report includes: executive summary, equipment data, tube material/specifications, inspection scope (tube count, length scanned), procedure references, calibration data, tube-by-tube defect inventory, statistical analysis (% tubes degraded by severity category), comparison with prior inspections (if available) showing degradation trending, plugging recommendations, fitness-for-service assessment per API 579-1 / ASME FFS-1, root cause analysis (corrosion mechanism, operating condition contribution), and mitigation recommendations (chemical treatment, operational changes, metallurgy upgrades). Report signed by ASNT Level III or PE.</p>
                        <div class="timeline-deliverable"> <strong>Deliverable:</strong> Final ASME/TEMA-Compliant Inspection Report </div>
                    </div>
                </div>
            </div>
            <div class="certification-showcase">
                <h3>Our Certifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item"> <img src="/www/assets/images/certifications/asnt.png" alt="ASNT"> <span>ASNT Level III Certified</span> </div>
                    <div class="cert-item"> <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001"> <span>ISO 9001:2015</span> </div>
                    <div class="cert-item"> <img src="/www/assets/images/certifications/epri.png" alt="EPRI"> <span>EPRI Qualified</span> </div>
                    <div class="cert-item"> <img src="/www/assets/images/certifications/zetec.png" alt="Zetec"> <span>Zetec Certified Operator</span> </div>
                    <div class="cert-item"> <img src="/www/assets/images/certifications/tema.png" alt="TEMA"> <span>TEMA Standards Compliant</span> </div>
                </div>
            </div>
        </div>
    </section> <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center"> <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your Eddy Current Testing Partner</h2>
                <p>Unmatched expertise, equipment fleet, and commitment to reliability</p>
            </div>
            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon"> <i class="fas fa-laptop"></i> </div>
                    <h3>State-of-the-Art Equipment</h3>
                    <p>Fleet of Zetec MIZ-80, Eddyfi Lyft, and Olympus MultiScan MS 5800 multi-frequency instruments (8+ channels simultaneous). Complete probe inventory: bobbin (6mm-100mm), rotating pancake, array probes (X-Probe, Cecco-5), and remote field. Annual factory calibration traceable to NIST/NPL standards. Latest analysis software with AI-assisted defect recognition.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"> <i class="fas fa-user-graduate"></i> </div>
                    <h3>Expert Personnel</h3>
                    <p>ASNT Level II & III certified technicians and analysts with 15+ years ECT experience. EPRI PWR Steam Generator Examination certified for nuclear applications. Manufacturer training on Zetec, Eddyfi, and Olympus systems. Continuous education on latest probe technologies, analysis techniques, and code updates. Average analyst experience: 12 years.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"> <i class="fas fa-th"></i> </div>
                    <h3>5000+ Exchangers Inspected</h3>
                    <p>Proven track record across refineries, petrochemical plants, power stations, nuclear facilities, and industrial process plants. Experience with all tube materials (SS, Monel, Titanium, Inconel, copper alloys, duplex), sizes (1/4"-4" OD), and configurations (U-tube, straight, helical). Specialization in challenging applications: ferromagnetic tubes, high-temperature service, and heavily fouled conditions.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"> <i class="fas fa-tachometer-alt"></i> </div>
                    <h3>Rapid Turnaround</h3>
                    <p>Minimize outage duration with high-speed multi-channel inspection (4-8 tubes simultaneous). Typical 500-tube exchanger completed in 2-3 days including setup, calibration, scanning, and analysis. Preliminary tube plugging list within 24 hours for immediate maintenance action. Final report within 7 days. Emergency 24/7 service for critical equipment failures.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"> <i class="fas fa-chart-line"></i> </div>
                    <h3>Comprehensive Data Management</h3>
                    <p>15-year digital data retention enables long-term degradation trending and remaining life prediction. Proprietary database correlates ECT results with operating parameters (temperature, pressure, flow rates, chemical treatments) for root cause analysis. Automated comparison with prior inspections highlights accelerated degradation zones. Integration with client CMMS and RBI software (SAP PM, Meridium APM, Intelex).</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"> <i class="fas fa-hands-helping"></i> </div>
                    <h3>Engineering Consultation</h3>
                    <p>Post-inspection technical support including fitness-for-service evaluation per API 579-1, corrosion mechanism identification, material selection guidance for re-tubes, chemical treatment optimization, and operational parameter adjustments. Collaboration with OEMs, metallurgists, and corrosion engineers for complex failure analysis. Tube sample removal and laboratory testing coordination if destructive analysis required.</p>
                </div>
            </div>
        </div>
    </section> <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center"> <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Eddy Current Testing Questions Answered</h2>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does eddy current testing detect defects in tubes?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ECT uses electromagnetic induction to detect defects without physical contact. An AC-energized coil in the probe generates a magnetic field that induces circular electrical currents (eddy currents) in the conductive tube wall. Defects such as cracks, pits, erosion, or wall loss disrupt these eddy currents, causing changes in coil impedance (electrical resistance and reactance). The ECT instrument measures these impedance changes and displays them on an impedance plane diagram where trained analysts interpret signal patterns to identify defect type, depth, and location (ID vs OD surface). Different frequencies penetrate to different depths: low frequencies (50-400 kHz) detect ID defects and through-wall thinning; high frequencies (500 kHz - 2 MHz) are sensitive to shallow OD surface cracks.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can ECT detect both inner diameter (ID) and outer diameter (OD) defects?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, ECT detects defects on both ID (process-side) and OD (cooling water-side or air-side) surfaces. Bobbin probes detect defects on either surface but differentiation between ID vs OD requires phase angle analysis—ID defects typically show phase shift ~20-40° from OD defects on impedance plane. For critical indications requiring definitive ID/OD determination, rotating pancake coil (RPC) probes are used—the small focused coil scans close to tube wall providing direct ID or OD surface discrimination. This is crucial because ID defects (e.g., from corrosive process fluids) require different mitigation than OD defects (e.g., from cooling water chemistry), affecting root cause analysis and corrective actions.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does the heat exchanger need to be opened or disassembled for ECT?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Minimal disassembly is required—only channel head/water box covers and tube sheet access plates need removal to access tube inlets. The tube bundle remains in the shell; tubes do NOT need to be pulled, cut, or removed. For shell-and-tube exchangers, inspection is typically performed from channel side with probe inserted into tube inlets. For air-cooled heat exchangers (ACHE), header box end caps are removed for tube access. U-tube exchangers can be inspected from single end with probe traversing full tube length including U-bend. This non-destructive in-situ capability dramatically reduces turnaround time and costs versus destructive tube sampling programs.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between bobbin probe and rotating probe?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Bobbin probe consists of circumferential coil(s) centered in tube providing 360° simultaneous coverage—ideal for rapid screening (0.5-1.0 m/s scan speed) detecting general corrosion, pitting, and wall loss. However, bobbin probes are relatively insensitive to axial cracks (parallel to tube axis) and cannot definitively differentiate ID vs OD defects. Rotating pancake coil (RPC) probe has small focused coil on rotating head that scans tube wall in helical pattern—excellent for detecting axial cracks, precise ID/OD discrimination, and detailed defect characterization, but much slower (0.05-0.15 m/s) and more expensive ($50-150 per tube vs $5-15 for bobbin). Best practice: use bobbin for 100% screening, then RPC for detailed analysis of flagged tubes (typically 5-20% requiring follow-up).</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can ECT work on ferromagnetic tubes (carbon steel)?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, but with modifications. Ferromagnetic materials (carbon steel, low alloy steel) have high magnetic permeability causing strong background signals that can mask defect indications. Two approaches: (1) Magnetic saturation—use permanent magnets or DC saturation coil to saturate tube wall reducing permeability effects, enabling conventional ECT probe operation; (2) Remote Field Testing (RFT)—specialized low-frequency technique (<1 kHz) with separate exciter and detector coils spaced ~2-3 tube diameters apart. RFT electromagnetic field penetrates through tube wall twice (exciter to detector path) making it equally sensitive to ID and OD defects and minimizing permeability interference. RFT is preferred for ferromagnetic tubes in boilers, economizers, and carbon steel heat exchangers.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is ECT for measuring remaining wall thickness?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ECT provides ±5-10% wall thickness accuracy for general corrosion and erosion thinning using calibrated voltage amplitude and phase angle analysis. This is sufficient for screening and plugging decisions. However, ECT is fundamentally an impedance measurement, not a direct thickness gauge—accuracy depends on calibration standards, material conductivity variations, and analyst skill. For critical tubes requiring precise remaining thickness for fitness-for-service calculations, ECT is often supplemented with ultrasonic thickness (UT) measurements providing ±0.01mm accuracy. Hybrid approach: ECT screens 100% tubes identifying degraded zones, then spot UT verifies critical areas—optimal balance of coverage and precision.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does eddy current tube testing cost?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ECT costs vary by tube count, diameter, material, and probe type required: Bobbin probe screening: $5-15 per tube; Rotating probe detailed inspection: $50-150 per tube; Typical shell-and-tube exchanger (500 tubes): $2,500-7,500 for bobbin, plus $5,000-15,000 if 10-20% require RPC follow-up. Large power plant condenser (10,000+ tubes): $50,000-150,000 for comprehensive bobbin + selective RPC inspection. Compare to alternative methods: hydrostatic testing ($20,000-50,000 with no defect location data) or tube sample removal ($10,000-30,000 per tube for extraction, metallography, lab testing). ECT ROI: prevents unplanned failures ($500K-2M+ in lost production and emergency repairs) and optimizes tube plugging decisions extending exchanger service life 5-10 years.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should heat exchanger tubes be inspected with ECT?</h3> <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection frequency depends on service severity, degradation history, and Risk-Based Inspection (RBI) analysis per API 580/581: High-risk service (corrosive fluids, erosive flow, cyclic operation): Every 1-3 years; Medium-risk service (moderate corrosion rates, stable operation): Every 3-5 years; Low-risk service (benign fluids, good water treatment): Every 5-10 years or at major turnarounds. Many facilities perform baseline ECT at commissioning, then follow-up inspections to establish degradation rates, then optimize intervals based on trending. Continuous online monitoring systems (permanently installed ECT sensors) are emerging for critical high-risk exchangers enabling real-time condition assessment and predictive maintenance. ECT's non-invasive nature and moderate cost enable more frequent inspections versus traditional destructive methods—shifting from reactive (run-to-failure) to proactive (condition-based) maintenance strategies improving reliability by 30-50%.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Prevent Tube Failures Before They Cause Unplanned Shutdowns</h2>
                <p>Expert eddy current inspection delivers 100% tube coverage with tube-by-tube defect assessment—minimize downtime, optimize maintenance</p>
                <center> <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a> <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request ECT Quote</a> </center>
                <div class="cta-features"> <span><i class="fas fa-check"></i> Free Technical Consultation</span> <span><i class="fas fa-check"></i> 24-48 Hour Mobilization</span> <span><i class="fas fa-check"></i> Same-Day Preliminary Results</span> </div>
            </div>
        </div>
    </section> <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Tube & Heat Exchanger Services</h2>
                <p>Complete heat transfer equipment integrity solutions</p>
            </div>
            <div class="related-grid"> <a href="/www/pages/advanced-ndt-services/iris-tube-testing.php" class="related-card">
                    <div class="related-icon"> <i class="fas fa-water"></i> </div>
                    <h3>IRIS Testing</h3>
                    <p>Internal rotary inspection for precise wall thickness measurement</p> <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a> <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon"> <i class="fas fa-ruler-combined"></i> </div>
                    <h3>UT Thickness</h3>
                    <p>Ultrasonic thickness gauging for shell, tube sheet, and nozzles</p> <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a> <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                    <div class="related-icon"> <i class="fas fa-video"></i> </div>
                    <h3>Remote Visual (RVI)</h3>
                    <p>Borescope inspection for tube ID and shell-side visualization</p> <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a> <a href="/www/pages/conventional-ndt/pt.php" class="related-card">
                    <div class="related-icon"> <i class="fas fa-tint"></i> </div>
                    <h3>Liquid Penetrant (PT)</h3>
                    <p>Tube-to-tubesheet weld and expansion joint inspection</p> <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a> </div>
        </div>
    </section> <?php include $base . '/includes/footer.php'; ?> <script src="/www/assets/js/script.js"></script>
    <script src="/www/assets/js/service-page.js"></script>
</body>

</html>