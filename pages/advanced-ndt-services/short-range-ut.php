<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Short Range Ultrasonic Testing (SRUT) Services | Alpha Sonix NDT Solutions";
$meta_description = "Professional SRUT guided wave inspection for detailed weld examination up to 3 meters. High-resolution near-field testing for HAZ, root, and cap defects. ISO certified short-range UT services.";
$meta_keywords = "SRUT testing, short range ultrasonic testing, near-field guided wave, weld inspection, HAZ testing, high resolution UT, focused inspection, guided wave testing, pipeline weld assessment, heat affected zone inspection";
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
        "description": "Professional Short Range Ultrasonic Testing services using high-frequency guided waves for detailed weld and heat-affected zone inspection up to 3 meters from test location."
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
                <p class="page-subtitle">High-resolution guided wave inspection for detailed weld assessment and heat-affected zone examination up to 3 meters</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-microscope"></i> High Resolution Detection</span>
                    <span class="badge"><i class="fas fa-ruler-horizontal"></i> 0-3m Focused Range</span>
                    <span class="badge"><i class="fas fa-crosshairs"></i> ±2mm Defect Sizing</span>
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
                    <h3>Superior Resolution</h3>
                    <p>Detect defects down to 1mm using high-frequency guided waves (100-500 kHz)</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>HAZ Inspection</h3>
                    <p>Comprehensive heat-affected zone examination for cracking and microstructural damage</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-area"></i>
                    </div>
                    <h3>Circumferential Coverage</h3>
                    <p>360° weld inspection including root, fill, cap, and parent material zones</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Rapid Assessment</h3>
                    <p>Complete weld inspection in 15-30 minutes including setup and data analysis</p>
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
                    <p class="lead">Short Range Ultrasonic Testing (SRUT) is a specialized guided wave technique using high-frequency ultrasonic waves (100-500 kHz) to perform detailed inspection of welds and heat-affected zones (HAZ) within 0-3 meters from the test collar, providing superior resolution for critical defect detection compared to long-range methods.</p>
                    
                    <p>SRUT bridges the gap between Long Range UT (LRUT) screening and conventional spot ultrasonic testing. While LRUT uses low frequencies (20-100 kHz) to screen 100+ meters with moderate sensitivity, SRUT employs higher frequencies for exceptional resolution over shorter distances—ideal for focused inspection of specific welds identified by LRUT or for critical joint assessment where detailed characterization is essential.</p>

                    <p>The technique uses the same guided wave physics as LRUT but operates in a different frequency regime. Higher frequencies provide better spatial resolution and sensitivity to small defects, enabling detection of tight cracks, shallow pitting, and subtle HAZ degradation that lower-frequency LRUT may miss. SRUT is particularly valuable for inspecting girth welds, repair welds, and critical connections on pipelines, pressure vessels, and storage tanks.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High-Frequency Guided Waves</strong>
                                <p>100-500 kHz operation provides millimeter-scale defect detection capability</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Near-Field Focus</strong>
                                <p>Optimized for 0-3m range with enhanced sensitivity to weld and HAZ defects</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Multi-Zone Inspection</strong>
                                <p>Simultaneously assesses weld metal, fusion line, HAZ, and base material</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Complementary to LRUT</strong>
                                <p>Provides detailed follow-up for LRUT-identified anomalies requiring characterization</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Key Advantage:</strong>
                            <p>SRUT detects defects 2-3x smaller than LRUT while maintaining 360° circumferential coverage—combining the comprehensive inspection of guided waves with the resolution approaching conventional UT. This makes SRUT ideal for integrity management programs requiring both coverage and sensitivity.</p>
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
                            <span>SRUT high-frequency transducer array positioned adjacent to weld for detailed HAZ inspection</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1mm</span>
                            <span class="stat-label">Min Defect Size</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">0-3m</span>
                            <span class="stat-label">Inspection Range</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Welds Inspected</span>
                        </div>
                    </div>
                    
                    <div class="frequency-comparison">
                        <h4><i class="fas fa-wave-square"></i> Frequency Comparison</h4>
                        <div class="freq-bars">
                            <div class="freq-bar">
                                <div class="freq-label">LRUT</div>
                                <div class="freq-range lrut">20-100 kHz</div>
                                <div class="freq-desc">Long Range, Lower Resolution</div>
                            </div>
                            <div class="freq-bar">
                                <div class="freq-label">SRUT</div>
                                <div class="freq-range srut">100-500 kHz</div>
                                <div class="freq-desc">Short Range, High Resolution</div>
                            </div>
                            <div class="freq-bar">
                                <div class="freq-label">Conventional UT</div>
                                <div class="freq-range conventional">2-10 MHz</div>
                                <div class="freq-desc">Localized, Highest Resolution</div>
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
                <span class="section-label">WHY CHOOSE SRUT</span>
                <h2>Key Advantages of Short Range Ultrasonic Testing</h2>
                <p>Optimal balance of coverage, resolution, and inspection efficiency</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Exceptional Defect Sensitivity</h3>
                    <p>Detects defects down to 1-2mm depth and length—significantly smaller than LRUT's 5-10% CSA threshold. Identifies tight cracks (<0.5mm opening), shallow pitting, lack of fusion, and incipient HAZ cracking missed by lower-frequency techniques. Probability of Detection (POD) >95% for defects >2mm per validation studies. Ideal for critical welds requiring high-confidence inspection.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Precise Defect Localization</h3>
                    <p>Pinpoints defect axial position within ±2-5mm accuracy and identifies circumferential location to nearest clock position (e.g., 6 o'clock bottom-of-line). Provides reliable distance from weld centerline for directing focused conventional UT/PAUT to exact defect zone. Eliminates exploratory scanning across entire weld length. Enables targeted repair planning with minimal metal removal.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-fire-alt"></i>
                    </div>
                    <h3>Comprehensive HAZ Coverage</h3>
                    <p>Inspects entire heat-affected zone (typically 5-25mm from fusion line) where stress corrosion cracking (SCC), hydrogen cracking, and reheat cracking preferentially initiate. Detects HAZ defects before they propagate into weld or base metal. Critical for high-strength steels, sour service environments, and post-weld heat treatment (PWHT) verification. Addresses blind spot of many conventional UT procedures.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>360° Circumferential Inspection</h3>
                    <p>Single collar installation provides complete pipe circumference coverage—no rotation or repositioning required. Detects defects at any clock position including inaccessible bottom-of-line (6 o'clock) where internal corrosion and settlement-induced stresses concentrate. Eliminates blind zones inherent to conventional UT's sectoral coverage. Ensures no unexamined regions remain in critical welds.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Bidirectional Examination</h3>
                    <p>Inspects up to 3 meters in both directions from single test location—total 6m coverage per setup. Assesses multiple welds from strategically positioned collar (e.g., scan two adjacent girth welds from mid-spool location). Reduces number of test points required versus spot UT while maintaining high resolution. Optimizes inspection economics on multi-weld systems.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Rapid Inspection Speed</h3>
                    <p>Complete weld inspection in 15-30 minutes including collar installation, data acquisition, and preliminary analysis. Faster than multi-angle conventional UT requiring 60-90 minutes per weld with multiple probe positions. Ideal for turnaround projects with limited inspection windows. Maintains production schedule while delivering comprehensive integrity data. Enables high-volume screening campaigns.</p>
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
                <p>Understanding when to use each guided wave technique</p>
            </div>

            <div class="comparison-grid">
                <div class="comparison-visual">
                    <div class="visual-diagram">
                        <img src="/www/assets/images/services/srut-lrut-comparison.jpg" alt="SRUT vs LRUT Range">
                        <div class="diagram-caption">
                            <strong>Inspection Strategy:</strong> LRUT screens long sections to identify anomaly zones; SRUT provides detailed assessment of specific welds or LRUT-flagged areas
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
                                <td class="excellent">100-500 kHz</td>
                                <td>20-100 kHz</td>
                            </tr>
                            <tr>
                                <td><strong>Inspection Range</strong></td>
                                <td>0-3m (focused near-field)</td>
                                <td class="excellent">50-100m (extended long-range)</td>
                            </tr>
                            <tr>
                                <td><strong>Minimum Defect Size</strong></td>
                                <td class="excellent">1-2mm depth/length</td>
                                <td>5-10% CSA loss (~10-20mm extent)</td>
                            </tr>
                            <tr>
                                <td><strong>Resolution</strong></td>
                                <td class="excellent">High (millimeter-scale)</td>
                                <td>Moderate (centimeter-scale)</td>
                            </tr>
                            <tr>
                                <td><strong>HAZ Sensitivity</strong></td>
                                <td class="excellent">Excellent (primary application)</td>
                                <td>Good (larger HAZ defects)</td>
                            </tr>
                            <tr>
                                <td><strong>Defect Localization</strong></td>
                                <td class="excellent">±2-5mm accuracy</td>
                                <td>±0.5-2m accuracy</td>
                            </tr>
                            <tr>
                                <td><strong>Inspection Time</strong></td>
                                <td>15-30 min per weld</td>
                                <td class="excellent">2-4 hours per 100-200m</td>
                            </tr>
                            <tr>
                                <td><strong>Primary Application</strong></td>
                                <td>Focused weld/HAZ inspection</td>
                                <td class="excellent">Rapid pipeline screening</td>
                            </tr>
                            <tr>
                                <td><strong>Cost per Test</strong></td>
                                <td>$2,000-5,000</td>
                                <td>$5,000-15,000 (covers 100-200m)</td>
                            </tr>
                            <tr>
                                <td><strong>Typical Use Case</strong></td>
                                <td>Post-LRUT confirmation, critical welds</td>
                                <td>Initial screening, buried pipelines</td>
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
                            <p>Rapidly screen entire pipeline section (100-200m) from accessible test points to identify zones with anomalous reflections indicating potential defects.</p>
                        </div>
                    </div>
                    <div class="strategy-arrow"><i class="fas fa-arrow-down"></i></div>
                    <div class="strategy-step">
                        <div class="step-num">2</div>
                        <div class="step-content">
                            <h4>SRUT Focused Inspection</h4>
                            <p>Deploy SRUT at LRUT-flagged weld locations or critical joints to perform detailed high-resolution inspection and defect characterization.</p>
                        </div>
                    </div>
                    <div class="strategy-arrow"><i class="fas fa-arrow-down"></i></div>
                    <div class="strategy-step">
                        <div class="step-num">3</div>
                        <div class="step-content">
                            <h4>Conventional UT/PAUT Verification</h4>
                            <p>If SRUT confirms significant defect, use spot PAUT/TOFD for precise through-wall sizing and fitness-for-service assessment.</p>
                        </div>
                    </div>
                </div>

                <div class="strategy-note">
                    <i class="fas fa-info-circle"></i>
                    <p><strong>Cost-Optimized Approach:</strong> This three-tier strategy maximizes efficiency—LRUT rapidly eliminates 90-95% of pipeline from consideration; SRUT focuses on 5-10% requiring detailed assessment; conventional UT applied only to confirmed defects needing precise sizing (typically <1% of total length). Reduces overall inspection costs by 70-80% versus comprehensive conventional UT of entire system.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">SRUT APPLICATIONS</span>
                <h2>Critical Weld Inspection Applications</h2>
                <p>Focused guided wave testing for high-integrity joints</p>
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
                                <h3>Pipeline & Vessel Girth Weld Assessment</h3>
                                <p>SRUT provides comprehensive girth weld inspection for buried pipelines, insulated process piping, and pressure vessel circumferential seams where accessibility challenges limit conventional UT deployment. Particularly valuable for follow-up inspection of LRUT-identified anomalies requiring detailed characterization before excavation decisions.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Post-LRUT confirmation of flagged anomalies at specific welds</li>
                                    <li><i class="fas fa-check"></i> Critical tie-in welds (mainline valves, tees, reducers)</li>
                                    <li><i class="fas fa-check"></i> Repair/modification welds on in-service systems</li>
                                    <li><i class="fas fa-check"></i> Welds in high-consequence areas (HCA) requiring enhanced inspection</li>
                                    <li><i class="fas fa-check"></i> Integrity verification post-hydrostatic testing or operational upset</li>
                                    <li><i class="fas fa-check"></i> Welds with historical leak/failure records in similar service</li>
                                    <li><i class="fas fa-check"></i> Quality assurance of automated/orbital welding procedures</li>
                                    <li><i class="fas fa-check"></i> Baseline inspection for crack growth monitoring programs</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-clipboard-check"></i> Case Study: Post-LRUT Focused Assessment</h4>
                                    <p><strong>Scenario:</strong> LRUT survey of 5 km buried gas pipeline identified 8 anomalies near weld locations</p>
                                    <p><strong>SRUT Deployment:</strong> High-resolution inspection of 8 flagged welds in 2 days</p>
                                    <p><strong>Outcome:</strong> SRUT confirmed 3 welds with significant HAZ cracking requiring excavation; 5 welds cleared (LRUT reflections from geometric features). Saved $150,000 in unnecessary excavations while ensuring real defects addressed.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ASME B31.4/B31.8</span>
                                    <span class="standard-tag">ISO 13847</span>
                                    <span class="standard-tag">DNV-RP-F118</span>
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
                                <h3>Repair & Modification Weld Verification</h3>
                                <p>SRUT enables post-repair weld inspection without extensive surface preparation, insulation removal, or system shutdown. Validates repair quality, verifies HAZ integrity after hot tap welding, and monitors repair weld performance over time to detect degradation before re-failure occurs.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Hot tap and branch connection welds (line-boring operations)</li>
                                    <li><i class="fas fa-check"></i> Defect excavation and weld repair verification</li>
                                    <li><i class="fas fa-check"></i> Sleeve and encirclement repair weld inspection</li>
                                    <li><i class="fas fa-check"></i> Composite wrap installation quality (overwrap bonding assessment)</li>
                                    <li><i class="fas fa-check"></i> Post-weld heat treatment (PWHT) effectiveness verification</li>
                                    <li><i class="fas fa-check"></i> Temporary/permanent repair monitoring (crack arrest verification)</li>
                                    <li><i class="fas fa-check"></i> Weld overlay and cladding integrity for corrosion protection</li>
                                    <li><i class="fas fa-check"></i> Fitness-for-service re-assessment per API 579-1</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-tools"></i>
                                    <div>
                                        <strong>Hot Tap Integrity:</strong>
                                        <p>Hot tap welding introduces high residual stresses and rapid cooling that can cause HAZ cracking in high-strength or sour-service steels. SRUT performed 24-48 hours post-weld detects hydrogen-induced cracking before it propagates, enabling timely PWHT or repair before leak occurs. Operators use SRUT as mandatory hot tap QC per company specifications.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 1104 App B</span>
                                    <span class="standard-tag">ASME PCC-2</span>
                                    <span class="standard-tag">API 579-1</span>
                                    <span class="standard-tag">NACE SP0472</span>
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
                                <h3>Heat-Affected Zone Cracking Detection</h3>
                                <p>SRUT's high sensitivity to HAZ defects makes it the method of choice for detecting stress corrosion cracking (SCC), hydrogen-induced cracking (HIC), and reheat cracking in susceptible materials. Particularly critical for high-strength steels (X65-X80), sour service environments (H₂S), and systems with historical cracking incidents.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stress corrosion cracking (SCC) in near-neutral pH and high-pH environments</li>
                                    <li><i class="fas fa-check"></i> Hydrogen-induced cracking (HIC) in sour service (H₂S >50 ppm)</li>
                                    <li><i class="fas fa-check"></i> Sulfide stress cracking (SSC) in high-strength materials</li>
                                    <li><i class="fas fa-check"></i> Reheat cracking in CrMo steels post-PWHT</li>
                                    <li><i class="fas fa-check"></i> Cold cracking (delayed hydrogen cracking) in restrained welds</li>
                                    <li><i class="fas fa-check"></i> Corrosion fatigue at cyclic stress concentration points</li>
                                    <li><i class="fas fa-check"></i> Liquation cracking in heat-resistant alloys</li>
                                    <li><i class="fas fa-check"></i> Toe cracks and undercut defects</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <div>
                                        <strong>SCC Monitoring:</strong>
                                        <p>Pipelines in SCC-susceptible regions (coating disbondment, carbonate soils, cathodic protection anomalies) benefit from periodic SRUT surveys of prioritized welds. Early detection of incipient HAZ cracks enables proactive repair before colony growth and catastrophic failure. SRUT baseline + periodic re-inspection tracks crack initiation and growth rates for remaining life calculations.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NACE SP0204</span>
                                    <span class="standard-tag">API 571</span>
                                    <span class="standard-tag">ASME B31.8S</span>
                                    <span class="standard-tag">DNV-RP-F112</span>
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
                                <h3>Storage Tank Shell & Roof Weld Inspection</h3>
                                <p>SRUT enables efficient inspection of atmospheric storage tank vertical and horizontal shell welds, roof-to-shell junctions, and annular ring connections without tank emptying or extensive scaffolding. Detects weld defects and shell plate cracking from settlement-induced stresses, corrosion, and operational cycling.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Vertical shell seam welds (lap and butt joints)</li>
                                    <li><i class="fas fa-check"></i> Horizontal shell course welds (circumferential)</li>
                                    <li><i class="fas fa-check"></i> Roof-to-shell attachment welds (fixed and floating roof)</li>
                                    <li><i class="fas fa-check"></i> Annular ring bottom plate welds (critical corrosion zone)</li>
                                    <li><i class="fas fa-check"></i> Shell penetration nozzle welds</li>
                                    <li><i class="fas fa-check"></i> Settlement-induced cracking at weld/plate interface</li>
                                    <li><i class="fas fa-check"></i> Corrosion-assisted cracking in bottom shell courses</li>
                                    <li><i class="fas fa-check"></i> Historical repair weld monitoring</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-oil-can"></i>
                                    <div>
                                        <strong>API 653 Compliance:</strong>
                                        <p>SRUT supports API 653 external inspection requirements by screening shell welds for defects without tank out-of-service time. When combined with floor scanning (MFL/UT), SRUT of critical welds provides comprehensive tank integrity assessment. Enables condition-based inspection interval extension by demonstrating weld integrity between mandatory internal inspections.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">EEMUA 159</span>
                                    <span class="standard-tag">ISO 16708</span>
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
                <p>Performance characteristics and operational limits</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler"></i>
                        <h3>Pipe Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Diameter:</span> 2" (50mm) to 60" (1500mm)</li>
                        <li><span class="cap-label">Wall Thickness:</span> 3mm to 50mm</li>
                        <li><span class="cap-label">Optimal Range:</span> 6"-36" diameter, 6-25mm wall</li>
                        <li><span class="cap-label">Material:</span> Carbon steel, stainless, low alloy</li>
                        <li><span class="cap-label">Temperature:</span> -40°C to +150°C</li>
                        <li><span class="cap-label">Pressure:</span> In-service (any pressure)</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-wave-square"></i>
                        <h3>Frequency & Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Frequency:</span> 100-500 kHz (diameter dependent)</li>
                        <li><span class="cap-label">Typical Range:</span> 0-3m each direction (6m total)</li>
                        <li><span class="cap-label">Small Pipe (2"-6"):</span> 0-1.5m range, 200-500 kHz</li>
                        <li><span class="cap-label">Medium (8"-24"):</span> 0-3m range, 100-300 kHz</li>
                        <li><span class="cap-label">Large (30"-60"):</span> 0-3m range, 100-200 kHz</li>
                        <li><span class="cap-label">Wave Mode:</span> Primarily torsional T(0,1)</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-search"></i>
                        <h3>Detection Limits</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Minimum Defect:</span> 1-2mm depth × 5-10mm length</li>
                        <li><span class="cap-label">Crack Opening:</span> >0.1mm detectable</li>
                        <li><span class="cap-label">Pitting:</span> Clustered pits >2mm depth</li>
                        <li><span class="cap-label">Wall Loss:</span> >10% localized thinning</li>
                        <li><span class="cap-label">POD:</span> >95% for defects >2mm</li>
                        <li><span class="cap-label">Location Accuracy:</span> ±2-5mm axial</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clipboard-check"></i>
                        <h3>Inspection Coverage</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Circumference:</span> 360° (full coverage)</li>
                        <li><span class="cap-label">Weld Zones:</span> Root, fill, cap, HAZ, base metal</li>
                        <li><span class="cap-label">HAZ Width:</span> Typically ±10-25mm from fusion line</li>
                        <li><span class="cap-label">Dead Zone:</span> ±100-200mm from collar center</li>
                        <li><span class="cap-label">Multiple Welds:</span> Up to 2 welds per setup</li>
                        <li><span class="cap-label">Data Retention:</span> Complete A-scan archive</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ban"></i>
                        <h3>Limitations</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Bends:</span> Sharp elbows (<3D) within range reduce coverage</li>
                        <li><span class="cap-label">Fittings:</span> Tees, reducers cause signal attenuation</li>
                        <li><span class="cap-label">Coating:</span> Heavy bitumen (>10mm) reduces range 30-50%</li>
                        <li><span class="cap-label">Supports:</span> Clamps, shoes within 0.5m interfere</li>
                        <li><span class="cap-label">Defect Sizing:</span> Provides indication, not precise depth</li>
                        <li><span class="cap-label">Orientation:</span> Less sensitive to radial cracks</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clock"></i>
                        <h3>Inspection Time</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Surface Prep:</span> 10-20 minutes (local cleaning)</li>
                        <li><span class="cap-label">Collar Install:</span> 5-10 minutes (mechanical clamp)</li>
                        <li><span class="cap-label">Calibration:</span> 5 minutes (system check)</li>
                        <li><span class="cap-label">Data Acquisition:</span> 5-10 minutes (multi-scan avg)</li>
                        <li><span class="cap-label">Analysis:</span> 10-15 minutes (signal interpretation)</li>
                        <li><span class="cap-label">Total per Weld:</span> 15-30 minutes average</li>
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
                <p>Expertise and equipment for critical weld assessment</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Advanced SRUT Systems</h3>
                    <p>Latest Guided Ultrasonics and Eddyfi SRUT equipment with multi-frequency capability (100-500 kHz). Collar inventory for 2"-60" pipes. Optimized for HAZ and near-weld defect detection with superior resolution.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Certified Technicians</h3>
                    <p>ASNT Level II/III certified with specialized SRUT training. Manufacturer certification on all systems. Experience interpreting complex near-field signals and distinguishing geometric features from defects. Average 6+ years SRUT experience.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Post-LRUT Services</h3>
                    <p>Seamless LRUT-to-SRUT workflow for efficient anomaly confirmation. Integrated data management linking LRUT screening to SRUT focused inspection. Excavation prioritization based on combined LRUT/SRUT severity assessment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Comprehensive Reporting</h3>
                    <p>Detailed reports with distance-amplitude plots, waveform analysis, defect location diagrams, and severity classification per acceptance criteria. Complete A-scan data archive for future reference and trending analysis.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Engineering Support</h3>
                    <p>Expert interpretation of challenging signals (near-field complexity). Fitness-for-service consultation per API 579-1. Follow-up inspection strategy recommendations (conventional UT/PAUT if needed). Integration with integrity management programs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Proven Performance</h3>
                    <p>500+ critical welds inspected with SRUT. 98% correlation with follow-up conventional UT validation. Approved for major pipeline operators and petrochemical facilities. Successful HAZ cracking detection preventing failures.</p>
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
                        <p>Use SRUT when you need detailed inspection of specific welds or LRUT-flagged anomalies requiring confirmation before excavation. SRUT is ideal for: (1) Post-LRUT focused assessment of indications, (2) Critical welds requiring high-resolution inspection (hot taps, repairs, HCA locations), (3) HAZ cracking detection in susceptible materials, (4) When access permits close proximity to weld (within 3m). Use LRUT for rapid screening of long buried pipeline sections where specific weld locations are unknown or inaccessible.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can SRUT replace conventional UT for weld inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>SRUT complements but does not fully replace conventional UT. SRUT advantages: 360° coverage, faster inspection, no rotation/repositioning, excellent HAZ sensitivity. Conventional UT advantages: Precise through-wall depth sizing, detailed defect characterization, acceptance per code criteria (ASME Sec V, API 1104). Typical workflow: SRUT for rapid screening → Conventional UT/PAUT/TOFD for detailed sizing of SRUT-detected indications. Many operators use SRUT as primary method with conventional UT only for confirmed defects requiring precise sizing for fitness-for-service.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is SRUT for defect location?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>SRUT provides axial location accuracy of ±2-5mm within 0-3m range. This precision enables directing conventional UT probe to exact defect zone without scanning entire weld. Circumferential location identified to nearest 30-45° sector (clock position). For example, SRUT report states "indication at 0.45m from weld centerline, 5-6 o'clock position"—technician then applies PAUT only to that specific region. Accuracy depends on frequency (higher = better), calibration, and signal-to-noise ratio.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum defect size SRUT can detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>SRUT typically detects defects down to 1-2mm depth and 5-10mm length—significantly smaller than LRUT's 5-10% CSA loss threshold. Tight cracks with <0.5mm opening are detectable due to diffraction at crack tips. Performance depends on: defect type (cracks easier than smooth corrosion), orientation (circumferential easier than radial), location (mid-wall easier than surface), and signal-to-noise conditions. Validation studies demonstrate >95% POD for HAZ cracks >2mm depth, which is critical since small HAZ cracks can rapidly propagate to failure in susceptible environments.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does pipe coating affect SRUT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Impact is less than LRUT due to higher frequencies and shorter propagation distance. Thin hard coatings (FBE, 3-layer polyethylene, tape) have minimal effect. Thick soft coatings (bitumen >10mm, mastic) can reduce range by 30-50% but SRUT's short range (0-3m) usually remains effective. Unlike conventional UT, coating does NOT need removal—only insulation jacket if present. Coating impedance is characterized during calibration and compensated in signal analysis. Disbonded coating may generate reflections but experienced analysts differentiate from metal defects.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can SRUT inspect through pipe bends?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>SRUT can propagate through bends but with signal attenuation depending on bend radius: Long-radius bends (5D+): 10-20% signal loss—acceptable coverage beyond bend; Medium bends (3D): 30-40% loss—marginal coverage; Short-radius elbows (1.5D): 60-80% loss—severely limits inspection beyond elbow. If weld of interest is beyond sharp bend, position SRUT collar on opposite side of bend to avoid attenuation. For elbow welds themselves, SRUT can inspect from straight pipe section if weld is within 3m range before bend.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does SRUT inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical SRUT inspection ranges $2,000-5,000 per weld depending on pipe size, accessibility, mobilization, and reporting requirements. Cost includes collar installation, data acquisition, analysis, and reporting. Compare to conventional multi-angle UT ($1,500-3,000) or PAUT ($2,500-4,500) per weld. SRUT advantage: 360° coverage versus sectoral UT requiring rotation/repositioning, and faster inspection (15-30 min vs 60-90 min). On multi-weld campaigns (>10 welds), volume pricing reduces unit cost. ROI justified by comprehensive coverage and time savings.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide SRUT operator training?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive SRUT training programs: (1) SRUT Fundamentals (2 days): High-frequency guided wave theory, differences from LRUT, equipment operation, collar installation; (2) Signal Interpretation (1 day): Near-field signal complexity, defect vs feature discrimination, HAZ crack characteristics; (3) Practical Field Training (1 day): Hands-on inspection of live welds, data analysis, reporting. Training includes comparison with LRUT and integration into tiered inspection strategies. ASNT Level II UT certification recommended prerequisite. Custom programs for client-specific procedures and equipment available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Detect HAZ Cracks Before They Become Failures</h2>
                <p>High-resolution weld inspection with 360° coverage in 15-30 minutes</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request SRUT Service</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free Technical Consultation</span>
                    <span><i class="fas fa-check"></i> Post-LRUT Follow-Up</span>
                    <span><i class="fas fa-check"></i> Same-Day Mobilization</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Weld Inspection Services</h2>
                <p>Complete integrity solutions from screening to detailed sizing</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/lrut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-arrows-alt-h"></i>
                    </div>
                    <h3>LRUT</h3>
                    <p>Long Range UT for rapid pipeline screening up to 100m</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Phased Array for multi-angle imaging and defect characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Time of Flight Diffraction for precise through-wall sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Conventional UT</h3>
                    <p>Spot ultrasonic testing for detailed defect verification</p>
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