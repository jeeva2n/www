<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "SRUT Services | Short-Range Guided Wave Ultrasonic Testing | Alpha Sonix NDT Solutions";
$meta_description = "Short-Range Guided Wave Ultrasonic Testing (SRUT) for focused inspection of welds and heat-affected zones (HAZ) in piping and components. Ideal for confirming LRUT indications and screening critical joints within a 0–3 m zone with recorded, reviewable data.";
$meta_keywords = "SRUT, short range ultrasonic testing, short-range guided wave testing, guided wave UT, near field guided wave, weld inspection, HAZ inspection, follow-up after LRUT, pipeline weld assessment, hot tap weld inspection, integrity management NDT";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/short-range-ut.php";
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
    <meta property="og:image" content="/www/assets/images/services/srut-og.jpg">
    
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
        "serviceType": "Short Range Ultrasonic Testing (SRUT)",
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
        "description": "Short Range Ultrasonic Testing (SRUT) using higher-frequency guided waves for focused weld and heat-affected zone inspection, typically within 0–3 meters from the test location, supporting integrity assessments and LRUT follow-up."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/srut-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>SRUT</span>
                </div>
                <h1 class="page-title">Short Range Ultrasonic Testing (SRUT)</h1>
                <p class="page-subtitle">Short-range guided wave inspection for targeted weld and HAZ screening—ideal for confirming LRUT indications and prioritizing follow-up NDT</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-microscope"></i> High-Sensitivity Guided Wave Screening</span>
                    <span class="badge"><i class="fas fa-ruler-horizontal"></i> Focused 0–3 m Inspection Zone</span>
                    <span class="badge"><i class="fas fa-file-alt"></i> Recorded, Reviewable Results</span>
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
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Focused Sensitivity</h3>
                    <p>Higher-frequency guided waves enhance sensitivity to localized indications near welds and in heat-affected zones (capability depends on geometry, material, and access).</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Weld & HAZ Priority</h3>
                    <p>Designed for areas where cracks and fabrication/service-related damage often initiate—weld toes, fusion lines, and adjacent HAZ regions.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-area"></i>
                    </div>
                    <h3>360° Circumferential Coverage</h3>
                    <p>Guided waves provide full circumferential inspection around the pipe section within range, including lower quadrants that are difficult to access.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Efficient Field Workflow</h3>
                    <p>Practical for shutdown windows and campaign work—rapid setup, scanning, and on-site screening results with structured reporting.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SRUT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">FOCUSED GUIDED WAVE TECHNOLOGY</span>
                    <h2>What is Short Range Ultrasonic Testing (SRUT)?</h2>
                    <p class="lead">Short Range Ultrasonic Testing (SRUT) is a short-range guided wave technique used to screen localized sections of piping—particularly welds and heat-affected zones—using higher-frequency guided waves than traditional long-range guided wave testing.</p>
                    
                    <p>SRUT is typically selected when you need more detail than long-range screening can provide, without immediately deploying full conventional UT/PAUT over large areas. It is especially useful as a <strong>follow-up tool</strong> after LRUT flags an area of interest, or when specific “high priority” joints (repairs, hot taps, tie-ins) require enhanced screening.</p>

                    <p>In practical integrity programs, SRUT helps narrow down “where to look” by improving near-field sensitivity and delivering recorded signals that can be reviewed and compared over time. Where code acceptance requires precise characterization or through-wall sizing, SRUT findings are commonly verified using <strong>PAUT/TOFD</strong> or conventional UT.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Higher-Frequency Guided Waves</strong>
                                <p>Operates at higher guided-wave frequencies than LRUT to improve resolution in the near field (frequency selection depends on diameter, thickness, and attenuation).</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Near-Field Optimization</strong>
                                <p>Designed for focused inspection close to the collar location—typically within 0–3 m—where critical weld and HAZ indications are targeted.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Weld-Adjacent Screening</strong>
                                <p>Screens weld metal, fusion boundaries, HAZ, and adjacent base material for relevant changes and reflectors that may require follow-up.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Built for LRUT Follow-Up</strong>
                                <p>Supports a tiered strategy: LRUT for long-range screening → SRUT for focused confirmation → PAUT/TOFD for characterization and sizing where needed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Where SRUT Fits Best:</strong>
                            <p>SRUT is most effective when you need <strong>guided-wave coverage with better near-field sensitivity</strong>—to confirm anomalies, prioritize excavation/insulation removal, and direct advanced UT to the right location.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request SRUT Inspection</a>
                        <a href="#comparison" class="btn btn-secondary">SRUT vs LRUT</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/srut-collar.jpg" alt="SRUT Collar Installation">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>SRUT collar positioned near a weld to focus guided-wave screening on the weld/HAZ region</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">0–3 m</span>
                            <span class="stat-label">Typical Focused Range</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">360°</span>
                            <span class="stat-label">Circumferential Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Welds Screened</span>
                        </div>
                    </div>
                    
                    <div class="frequency-comparison">
                        <h4><i class="fas fa-wave-square"></i> Frequency Comparison</h4>
                        <div class="freq-bars">
                            <div class="freq-bar">
                                <div class="freq-label">LRUT</div>
                                <div class="freq-range lrut">~15–80 kHz</div>
                                <div class="freq-desc">Long Range, Screening Resolution</div>
                            </div>
                            <div class="freq-bar">
                                <div class="freq-label">SRUT</div>
                                <div class="freq-range srut">~80–300 kHz</div>
                                <div class="freq-desc">Short Range, Higher Resolution</div>
                            </div>
                            <div class="freq-bar">
                                <div class="freq-label">Conventional UT</div>
                                <div class="freq-range conventional">~2–10 MHz</div>
                                <div class="freq-desc">Local Examination & Sizing</div>
                            </div>
                        </div>
                        <small style="display:block; margin-top:10px; opacity:0.85;">Note: Actual operating frequency depends on pipe geometry, material attenuation, and inspection objective.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ADVANTAGES ===================== -->
    <section class="advantages-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY CHOOSE SRUT</span>
                <h2>Key Advantages of Short Range Ultrasonic Testing</h2>
                <p>Designed for high-priority weld screening where near-field sensitivity and practical field execution matter</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Higher Near-Field Sensitivity vs LRUT</h3>
                    <p>Short-range operation allows higher guided-wave frequencies, improving sensitivity to localized reflectors near welds and fittings (performance depends on pipe features and acoustic conditions).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Practical Location Guidance</h3>
                    <p>Helps identify the axial position and circumferential sector of relevant indications, directing follow-up PAUT/UT to the right zone and reducing unnecessary exploratory scanning.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-fire-alt"></i>
                    </div>
                    <h3>Weld & HAZ Focus</h3>
                    <p>Supports inspection programs targeting weld-adjacent damage mechanisms (e.g., HAZ cracking in susceptible service), where early detection and monitoring are valuable.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>360° Coverage from One Setup</h3>
                    <p>Guided waves examine the full circumference within range—helpful for bottom-of-line regions and areas with restricted access where conventional scanning is difficult.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Bidirectional Screening</h3>
                    <p>From a single collar position, SRUT can screen in both directions within the short-range zone—supporting efficient coverage across spools and near-weld regions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Efficient Campaign Execution</h3>
                    <p>Well-suited for multi-location inspection programs where speed, repeatability, and recorded results are required—without radiation controls or film delays.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== SRUT vs LRUT COMPARISON ===================== -->
    <section class="comparison-section" id="comparison">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL COMPARISON</span>
                <h2>SRUT vs LRUT: Complementary Technologies</h2>
                <p>LRUT finds “where” to investigate; SRUT helps decide “what next” at the weld/feature level</p>
            </div>

            <div class="comparison-grid">
                <div class="comparison-visual">
                    <div class="visual-diagram">
                        <img src="/www/assets/images/services/srut-lrut-comparison.jpg" alt="SRUT vs LRUT Range">
                        <div class="diagram-caption">
                            <strong>Inspection Strategy:</strong> LRUT screens long lengths; SRUT provides focused near-field screening of selected welds and LRUT-flagged locations
                        </div>
                    </div>
                </div>

                <div class="comparison-table-wrapper">
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>Parameter</th>
                                <th><i class="fas fa-compress-arrows-alt"></i> SRUT</th>
                                <th><i class="fas fa-arrows-alt-h"></i> LRUT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Frequency Range</strong></td>
                                <td class="excellent">Higher (near-field optimized)</td>
                                <td>Lower (long-range optimized)</td>
                            </tr>
                            <tr>
                                <td><strong>Inspection Range</strong></td>
                                <td>Typically within 0–3 m</td>
                                <td class="excellent">Typically tens of meters (application dependent)</td>
                            </tr>
                            <tr>
                                <td><strong>Resolution / Sensitivity</strong></td>
                                <td class="excellent">Higher in the near field</td>
                                <td>Screening-level for long range</td>
                            </tr>
                            <tr>
                                <td><strong>Weld / HAZ Focus</strong></td>
                                <td class="excellent">Primary use case</td>
                                <td>Secondary (depends on geometry and distance)</td>
                            </tr>
                            <tr>
                                <td><strong>Defect Localization</strong></td>
                                <td class="excellent">Better short-range guidance</td>
                                <td>Zone identification (broader)</td>
                            </tr>
                            <tr>
                                <td><strong>Primary Application</strong></td>
                                <td>Confirmation & prioritization near welds/features</td>
                                <td class="excellent">Long-length screening of pipe runs</td>
                            </tr>
                            <tr>
                                <td><strong>Reporting Output</strong></td>
                                <td>Recorded signals, locations, severity ranking</td>
                                <td class="excellent">Recorded screening results and anomaly zones</td>
                            </tr>
                            <tr>
                                <td><strong>Typical Next Step</strong></td>
                                <td>PAUT/UT/TOFD for characterization and sizing</td>
                                <td class="excellent">SRUT or local UT at flagged zones</td>
                            </tr>
                            <tr>
                                <td><strong>Commercial Model</strong></td>
                                <td>Project dependent (per location / per weld)</td>
                                <td class="excellent">Project dependent (per test point / per length)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="comparison-strategy">
                <h3><i class="fas fa-project-diagram"></i> Integrated Inspection Strategy</h3>
                <div class="strategy-steps">
                    <div class="strategy-step">
                        <div class="step-num">1</div>
                        <div class="step-content">
                            <h4>LRUT Screening</h4>
                            <p>Screen long lengths from accessible locations to identify anomaly zones and prioritize areas for closer evaluation.</p>
                        </div>
                    </div>
                    <div class="strategy-arrow"><i class="fas fa-arrow-down"></i></div>
                    <div class="strategy-step">
                        <div class="step-num">2</div>
                        <div class="step-content">
                            <h4>SRUT Focused Screening</h4>
                            <p>Deploy SRUT at selected welds/features or LRUT-flagged areas for higher-sensitivity near-field assessment and improved location guidance.</p>
                        </div>
                    </div>
                    <div class="strategy-arrow"><i class="fas fa-arrow-down"></i></div>
                    <div class="strategy-step">
                        <div class="step-num">3</div>
                        <div class="step-content">
                            <h4>PAUT / TOFD / UT Verification</h4>
                            <p>Where SRUT indicates relevant reflections, use advanced UT techniques for characterization, sizing, and code/spec acceptance decisions.</p>
                        </div>
                    </div>
                </div>

                <div class="strategy-note">
                    <i class="fas fa-info-circle"></i>
                    <p><strong>Program Benefit:</strong> A tiered approach reduces unnecessary excavation/insulation removal and focuses higher-cost detailed UT only where SRUT/LRUT indicate meaningful risk.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">SRUT APPLICATIONS</span>
                <h2>Critical Weld Screening Applications</h2>
                <p>Targeted guided-wave screening for welds, repairs, and susceptibility-driven inspection programs</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="girth">Girth Welds</button>
                    <button class="tab-btn" data-tab="repair">Repair Welds</button>
                    <button class="tab-btn" data-tab="haz">HAZ Cracking</button>
                    <button class="tab-btn" data-tab="storage">Storage Tanks</button>
                </div>

                <div class="tabs-content">
                    <!-- Girth Welds Tab -->
                    <div class="tab-panel active" id="girth">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/srut-girth-weld.jpg" alt="SRUT Girth Weld Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline & Vessel Girth Weld Screening</h3>
                                <p>SRUT supports efficient screening of selected girth welds and near-weld regions—particularly where access limitations, insulation, or coating make full conventional UT time-consuming. It is also well-suited for confirming LRUT anomaly zones before committing to excavation or major insulation removal.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Follow-up screening of LRUT-flagged indications near welds</li>
                                    <li><i class="fas fa-check"></i> Critical tie-in welds (valves, tees, reducers, sleeves)</li>
                                    <li><i class="fas fa-check"></i> Welds in high consequence areas (HCA) and high-risk circuits</li>
                                    <li><i class="fas fa-check"></i> Baseline screening for crack monitoring programs (where applicable)</li>
                                    <li><i class="fas fa-check"></i> Screening after operational upsets and repairs (as specified)</li>
                                    <li><i class="fas fa-check"></i> Welds with known history of damage mechanisms in similar service</li>
                                    <li><i class="fas fa-check"></i> Planning support for targeted PAUT/TOFD deployment</li>
                                    <li><i class="fas fa-check"></i> Documentation for integrity and audit records</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-clipboard-check"></i> Typical Outcome</h4>
                                    <p><strong>What SRUT helps achieve:</strong> confirm which welds/features need detailed UT, identify which reflections are geometric, and prioritize the locations most likely to benefit from excavation or local access improvement.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable References:</strong>
                                    <span class="standard-tag">ISO 18211 (Guided Wave)</span>
                                    <span class="standard-tag">API 1104 (Project Spec)</span>
                                    <span class="standard-tag">ASME B31.4/B31.8</span>
                                    <span class="standard-tag">DNV-RP-F118 (As Applicable)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repair Welds Tab -->
                    <div class="tab-panel" id="repair">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/srut-repair-weld.jpg" alt="Repair Weld SRUT">
                            </div>
                            <div class="tab-text">
                                <h3>Repair & Modification Weld Verification (Screening)</h3>
                                <p>SRUT helps screen repairs and modifications where early damage may initiate in the HAZ. It can be applied as a practical integrity check to guide whether additional PAUT/TOFD is required—especially in constrained shutdown windows.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Hot tap / branch connection weld screening (as specified)</li>
                                    <li><i class="fas fa-check"></i> Post-repair screening after excavation and reweld</li>
                                    <li><i class="fas fa-check"></i> Sleeve and encirclement repair weld areas</li>
                                    <li><i class="fas fa-check"></i> Local areas around repairs in insulated/coated lines</li>
                                    <li><i class="fas fa-check"></i> Post-weld monitoring plans in susceptible service (where applicable)</li>
                                    <li><i class="fas fa-check"></i> Target definition for PAUT/UT confirmation scans</li>
                                    <li><i class="fas fa-check"></i> Documentation for maintenance closeout records</li>
                                    <li><i class="fas fa-check"></i> Support for integrity re-assessment workflows</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-tools"></i>
                                    <div>
                                        <strong>Repair Quality & Risk Control:</strong>
                                        <p>When repairs are performed under high restraint or challenging metallurgy/service, SRUT screening can help identify whether the weld/HAZ region requires immediate advanced UT verification.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable References:</strong>
                                    <span class="standard-tag">ASME PCC-2</span>
                                    <span class="standard-tag">API 579-1/FFS-1</span>
                                    <span class="standard-tag">NACE / AMPP Practices (As Applicable)</span>
                                    <span class="standard-tag">ISO 18211</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HAZ Cracking Tab -->
                    <div class="tab-panel" id="haz">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/srut-haz-cracking.jpg" alt="HAZ Cracking Detection">
                            </div>
                            <div class="tab-text">
                                <h3>HAZ Cracking Screening Programs</h3>
                                <p>Where materials and service conditions indicate susceptibility, SRUT can support targeted screening of weld-adjacent regions as part of a monitoring plan. It is particularly valuable for directing where detailed UT should be applied.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Screening for crack-like indications near weld toes and fusion lines</li>
                                    <li><i class="fas fa-check"></i> Support for SCC/HIC susceptibility-based inspection planning (application dependent)</li>
                                    <li><i class="fas fa-check"></i> Target definition for follow-up PAUT/TOFD sizing</li>
                                    <li><i class="fas fa-check"></i> Monitoring trend comparisons using recorded data</li>
                                    <li><i class="fas fa-check"></i> Screening of prioritized joints (repairs, tie-ins, known hot spots)</li>
                                    <li><i class="fas fa-check"></i> Weld HAZ regions adjacent to fittings and supports</li>
                                    <li><i class="fas fa-check"></i> Support for RBI decision making and risk ranking</li>
                                    <li><i class="fas fa-check"></i> Documentation for integrity case files</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <div>
                                        <strong>Important Note:</strong>
                                        <p>SRUT is a screening/targeting tool. Where acceptance decisions depend on precise defect sizing, advanced UT methods (PAUT/TOFD) should be used for confirmation and engineering evaluation.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable References:</strong>
                                    <span class="standard-tag">API 571</span>
                                    <span class="standard-tag">API 580/581</span>
                                    <span class="standard-tag">ASME B31.8S</span>
                                    <span class="standard-tag">DNV Practices (As Applicable)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Tanks Tab -->
                    <div class="tab-panel" id="storage">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/srut-tank-weld.jpg" alt="Storage Tank SRUT">
                            </div>
                            <div class="tab-text">
                                <h3>Tank Shell / Roof Weld Screening (Selected Areas)</h3>
                                <p>For accessible tank welds and shell features, SRUT can support targeted screening of selected weld lines and attachments—helping identify zones that need closer UT/PAUT examination, particularly in integrity-driven maintenance programs.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Selected shell seam weld areas (where access permits)</li>
                                    <li><i class="fas fa-check"></i> Roof-to-shell junction and attachments (selected zones)</li>
                                    <li><i class="fas fa-check"></i> Nozzle and reinforcement pad adjacent regions (screening)</li>
                                    <li><i class="fas fa-check"></i> Repair weld monitoring (targeted follow-up)</li>
                                    <li><i class="fas fa-check"></i> Areas affected by settlement-related stress (as identified)</li>
                                    <li><i class="fas fa-check"></i> Support for inspection prioritization and planning</li>
                                    <li><i class="fas fa-check"></i> Integration with other tank inspection methods (MFL/UT floors)</li>
                                    <li><i class="fas fa-check"></i> Recorded data for trending and review</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-oil-can"></i>
                                    <div>
                                        <strong>Integrity Planning Support:</strong>
                                        <p>Used alongside API 653 inspection planning and other NDT methods, SRUT can help focus detailed UT resources on the most relevant weld zones.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable References:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">EEMUA 159</span>
                                    <span class="standard-tag">ISO 18211 (As Applicable)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION CAPABILITIES ===================== -->
    <section class="capabilities-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL SPECIFICATIONS</span>
                <h2>SRUT Capabilities & Parameters</h2>
                <p>Typical operating ranges (final capability depends on geometry, coating/insulation, features, and procedure qualification)</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler"></i>
                        <h3>Pipe Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Diameter:</span> Typical coverage from small-bore to large diameter (collar dependent)</li>
                        <li><span class="cap-label">Wall Thickness:</span> Common piping thickness ranges (application dependent)</li>
                        <li><span class="cap-label">Materials:</span> Carbon steel and many alloys (attenuation dependent)</li>
                        <li><span class="cap-label">Surface Condition:</span> Coated/painted surfaces often acceptable with local preparation at collar location</li>
                        <li><span class="cap-label">Temperature:</span> Subject to couplant/collar limits and safe access</li>
                        <li><span class="cap-label">Operation:</span> Can be applied in-service where safe access is available</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-wave-square"></i>
                        <h3>Frequency & Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Frequency:</span> Higher than LRUT (selected to match diameter/thickness)</li>
                        <li><span class="cap-label">Typical Range:</span> Up to ~3 m each direction (feature dependent)</li>
                        <li><span class="cap-label">Small Bore:</span> Shorter range with higher frequency</li>
                        <li><span class="cap-label">Medium / Large Bore:</span> Up to full short-range zone where features allow</li>
                        <li><span class="cap-label">Wave Mode:</span> Guided wave modes selected per procedure (often torsional modes)</li>
                        <li><span class="cap-label">Scan Output:</span> A-scan style guided-wave responses with location/severity ranking</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detection Guidance</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Sensitivity:</span> Improved over LRUT in near-field, especially for localized reflectors</li>
                        <li><span class="cap-label">Best For:</span> Crack-like and localized corrosion-type reflectors near weld zones (application dependent)</li>
                        <li><span class="cap-label">Limit:</span> SRUT is not a substitute for precise through-wall sizing</li>
                        <li><span class="cap-label">Follow-Up:</span> PAUT/TOFD/UT recommended for sizing and characterization</li>
                        <li><span class="cap-label">Location Output:</span> Axial distance + circumferential sector guidance (procedure dependent)</li>
                        <li><span class="cap-label">Repeatability:</span> Strong for trend comparisons when setup is consistent</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clipboard-check"></i>
                        <h3>Inspection Coverage</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Circumference:</span> 360° coverage within short-range zone</li>
                        <li><span class="cap-label">Zones:</span> Weld-adjacent base metal and HAZ within practical distance</li>
                        <li><span class="cap-label">Near-Field Zone:</span> Collar proximity zones managed per procedure</li>
                        <li><span class="cap-label">Multiple Features:</span> Inspection performance influenced by nearby supports/fittings</li>
                        <li><span class="cap-label">Outputs:</span> Plots/screenshots and location diagrams as part of reporting</li>
                        <li><span class="cap-label">Archiving:</span> Recorded files retained for review and comparison</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ban"></i>
                        <h3>Practical Limitations</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Fittings:</span> Tees/reducers/valves can dominate reflections and reduce usable range</li>
                        <li><span class="cap-label">Bends:</span> Tight elbows reduce transmission; technique must be planned around geometry</li>
                        <li><span class="cap-label">Supports/Clamps:</span> Close supports may affect signal paths and interpretation</li>
                        <li><span class="cap-label">Coatings:</span> Very thick/soft coatings may reduce range and require assessment</li>
                        <li><span class="cap-label">Sizing:</span> Provides screening and location guidance—not acceptance-level sizing</li>
                        <li><span class="cap-label">Interpretation:</span> Requires experienced analysts to separate geometry vs relevant indications</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clock"></i>
                        <h3>Typical Field Workflow</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Local Prep:</span> Clean contact area at collar location</li>
                        <li><span class="cap-label">Collar Install:</span> Quick clamp/array installation</li>
                        <li><span class="cap-label">System Check:</span> Setup verification and baseline capture</li>
                        <li><span class="cap-label">Acquisition:</span> Multiple scans/frequencies as required</li>
                        <li><span class="cap-label">Screening Result:</span> On-site identification of relevant zones for follow-up</li>
                        <li><span class="cap-label">Reporting:</span> Structured deliverables with location guidance and recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHY CHOOSE US ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">WHY ALPHA SONIX</span>
                <h2>Your SRUT Inspection Partner</h2>
                <p>Experienced guided-wave capability with disciplined reporting and practical integrity recommendations</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Modern SRUT Capability</h3>
                    <p>Advanced guided-wave systems with multi-frequency operation and collar options to match a broad range of pipe diameters and inspection objectives.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Qualified Analysts</h3>
                    <p>Certified inspection personnel with guided-wave experience—focused on correct setup, reliable interpretation, and clear recommendations for follow-up NDT.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>LRUT-to-SRUT Workflow</h3>
                    <p>Efficient transition from long-range screening to short-range confirmation—helping clients reduce unnecessary excavation and focus resources on the highest-risk locations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Clear, Defensible Reporting</h3>
                    <p>Deliverables include recorded data references, location guidance, indication ranking, and recommended next steps (PAUT/TOFD/UT) aligned with integrity decision making.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Engineering Support</h3>
                    <p>Support for inspection planning, RBI integration, and follow-up strategy selection—ensuring SRUT results translate into practical maintenance actions.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Field-Proven Delivery</h3>
                    <p>Proven performance in screening weld-adjacent zones across pipelines and process piping—delivered with consistent documentation and client-ready communication.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>SRUT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When should I use SRUT instead of LRUT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Use SRUT when the inspection objective is focused near welds or features—typically within a short distance—especially to confirm LRUT indications, screen critical joints (repairs, tie-ins, hot taps), or improve location guidance before detailed UT/PAUT is deployed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can SRUT replace conventional UT for weld inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>SRUT is best treated as a screening and targeting method. For acceptance to welding codes/specifications and for precise characterization and through-wall sizing, PAUT/TOFD or conventional UT is typically required. A common approach is SRUT screening → advanced UT confirmation only where needed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is SRUT for defect location?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>SRUT can provide practical axial location guidance and circumferential sector/clock-position type information within the short-range zone. Accuracy depends on setup, feature density, and signal conditions. The goal is to reliably guide follow-up UT to the correct area—not to replace sizing methods.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum defect size SRUT can detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Detection depends on defect type, orientation, location, geometry, and noise from features such as weld profiles and fittings. SRUT generally offers better near-field sensitivity than LRUT, but it is not intended to provide “millimeter-accurate” sizing. Where small crack-like indications are suspected, SRUT can help identify suspect zones that warrant PAUT/TOFD confirmation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does pipe coating affect SRUT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Coating condition can influence signal transmission and attenuation, but SRUT is often feasible without full coating removal. Typically, only local preparation at the collar contact location is required. Very thick/soft coatings or complex insulation systems may reduce usable range and should be assessed during planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can SRUT inspect through pipe bends?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Guided waves can pass through bends, but tighter bends and nearby features can reduce transmission and complicate interpretation. For best reliability, SRUT setups are planned to minimize feature interference and to keep the weld/zone of interest within an effective short-range path.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does SRUT inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cost depends on pipe size, access, number of locations, mobilization, and reporting requirements. For campaigns, unit cost typically reduces with volume. Share your scope (line class, diameter, weld count, access constraints), and we’ll provide a clear quotation with defined deliverables.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide SRUT operator training?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide guided-wave training support covering SRUT fundamentals, setup practice, data interpretation principles, and integration with LRUT and advanced UT follow-up. Training scope can be tailored to client procedures and equipment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Focused Weld Screening with Guided Waves?</h2>
                <p>Use SRUT to confirm anomaly zones, prioritize welds, and direct PAUT/TOFD to the right location</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request SRUT Service</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Technical Consultation</span>
                    <span><i class="fas fa-check"></i> LRUT Follow-Up Support</span>
                    <span><i class="fas fa-check"></i> Rapid Mobilization</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Weld Inspection Services</h2>
                <p>Complete integrity coverage—from long-range screening to acceptance-level sizing</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/lrut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-arrows-alt-h"></i>
                    </div>
                    <h3>LRUT</h3>
                    <p>Long-range guided wave screening for rapid pipe run assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced ultrasonic imaging for characterization and code-based evaluation</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Accurate through-wall sizing for engineering assessment applications</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Conventional UT</h3>
                    <p>Localized UT verification and thickness measurement where required</p>
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
