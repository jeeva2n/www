<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Long Range Ultrasonic Testing (LRUT) Services | Alpha Sonix NDT Solutions";
$meta_description = "Professional LRUT guided wave inspection for pipelines up to 100m from single location. Rapid screening for corrosion, cracks, and defects without excavation. ISO certified long-range UT services.";
$meta_keywords = "LRUT testing, long range ultrasonic testing, guided wave testing, pipeline screening, corrosion detection, GWT, ultrasonic guided waves, pipeline inspection, no excavation inspection, buried pipe testing";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/long-range-ut.php";
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
    <meta property="og:image" content="/www/assets/images/services/lrut-og.jpg">
    
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
        "serviceType": "Long Range Ultrasonic Testing (LRUT)",
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
        "description": "Professional Long Range Ultrasonic Testing services using guided wave technology to inspect pipelines up to 100 meters from single test location without excavation."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/lrut-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>LRUT</span>
                </div>
                <h1 class="page-title">Long Range Ultrasonic Testing (LRUT)</h1>
                <p class="page-subtitle">Screen 100+ meters of pipeline from single location using guided wave technology—no excavation required</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-long-arrow-alt-right"></i> 100m+ Inspection Range</span>
                    <span class="badge"><i class="fas fa-hard-hat"></i> No Excavation Needed</span>
                    <span class="badge"><i class="fas fa-dollar-sign"></i> 90% Cost Reduction</span>
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
                        <i class="fas fa-arrows-alt-h"></i>
                    </div>
                    <h3>Extended Coverage</h3>
                    <p>Inspect up to 100 meters in each direction from single collar location—total 200m coverage</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shovel"></i>
                    </div>
                    <h3>No Excavation</h3>
                    <p>Test buried, coated, and insulated pipes without digging, cutting insulation, or surface access</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <h3>Defect Localization</h3>
                    <p>Pinpoint corrosion, cracks, and anomalies within ±0.5m accuracy for targeted excavation</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>CSA Quantification</h3>
                    <p>Measure Cross-Sectional Area (CSA) loss from corrosion to prioritize repair decisions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS LRUT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">GUIDED WAVE TECHNOLOGY</span>
                    <h2>What is Long Range Ultrasonic Testing (LRUT)?</h2>
                    <p class="lead">Long Range Ultrasonic Testing (LRUT), also known as Guided Wave Testing (GWT), is an advanced NDT technique that uses low-frequency ultrasonic waves to propagate along the entire length of pipelines, detecting corrosion, cracks, and mechanical damage up to 100 meters from a single test location.</p>
                    
                    <p>Unlike conventional ultrasonic testing that uses high-frequency waves for localized inspection, LRUT employs low-frequency (20-100 kHz) guided waves that travel along the pipe wall for extended distances. A ring of transducers installed around the pipe circumference generates torsional or longitudinal wave modes that propagate axially, reflecting energy back when encountering features such as welds, flanges, supports, and defects.</p>

                    <p>The technique is revolutionary for pipeline integrity management because it enables rapid screening of long pipeline sections from accessible test points—typically above-ground valve stations, road crossings, or exposed pipe sections—eliminating the need for excavating buried pipelines or removing insulation from process piping.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Guided Wave Propagation</strong>
                                <p>Low-frequency waves confined to pipe wall travel axially for 100m+ with minimal attenuation</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Circumferential Sensitivity</strong>
                                <p>Detects defects at any clock position around pipe circumference—360° coverage</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Feature Mapping</strong>
                                <p>Identifies welds, bends, tees, supports, and geometric features along entire test range</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Screening + Focused Inspection</strong>
                                <p>Rapidly screens long sections, then directs targeted inspection to anomaly locations only</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Industry Adoption:</strong>
                            <p>LRUT is recognized by ASME B31.8S, API 570, NACE SP0502, and DNV-RP-F116 as a validated integrity assessment method. Over 10,000 km of pipelines worldwide are screened annually using LRUT, with major oil & gas operators adopting it as standard practice for buried pipe integrity programs.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Schedule LRUT Survey</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/lrut-setup.jpg" alt="LRUT Setup">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>LRUT transducer collar installation on pipeline for guided wave inspection</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">200m</span>
                            <span class="stat-label">Total Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">±0.5m</span>
                            <span class="stat-label">Location Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2000+</span>
                            <span class="stat-label">KM Inspected</span>
                        </div>
                    </div>
                    
                    <div class="principle-diagram">
                        <h4><i class="fas fa-wave-square"></i> Guided Wave Principles</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Transducer ring generates guided waves</li>
                            <li><strong>2.</strong> Waves propagate along pipe wall</li>
                            <li><strong>3.</strong> Reflections from features/defects return</li>
                            <li><strong>4.</strong> Signal analysis identifies anomalies</li>
                            <li><strong>5.</strong> Distance calculated from time-of-flight</li>
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
                <span class="section-label">WHY CHOOSE LRUT</span>
                <h2>Key Advantages of Long Range Ultrasonic Testing</h2>
                <p>Revolutionary efficiency and cost savings for pipeline integrity management</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Massive Cost Reduction</h3>
                    <p>Eliminate 90% of excavation costs compared to traditional inspection. No digging, traffic control, site restoration, or environmental remediation required. Typical ROI achieved after inspecting just 500-1000 meters. Single LRUT test ($5,000-15,000) screens 100-200m versus $50,000-200,000 for equivalent excavation and spot UT.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Screening Speed</h3>
                    <p>Survey 500-1000 meters of pipeline per day from accessible above-ground locations. Complete test setup, data acquisition, and preliminary analysis in 2-4 hours per test point. Screen entire pipeline networks in weeks instead of years required for systematic excavation. Ideal for periodic integrity assessments and baseline surveys.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environmental Protection</h3>
                    <p>Zero excavation means no soil disturbance, habitat disruption, or contamination risk. Inspect pipelines under rivers, roads, railways, protected wetlands, and urban areas without environmental permits or ecological studies. Reduces carbon footprint by eliminating heavy equipment mobilization and site restoration activities.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>Targeted Excavation</h3>
                    <p>Pinpoints defect locations within ±0.5m, eliminating exploratory digging. Excavate only confirmed anomaly sites—typically reducing dig quantity by 80-95%. Optimize remediation budgets by prioritizing highest-risk locations based on CSA loss severity. Enables risk-based inspection (RBI) and integrity management programs per API 580/581.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Operational Continuity</h3>
                    <p>Inspect in-service pipelines without shutdown, depressurization, or product removal. No hot work permits or service interruption. Test insulated pipes without removing lagging—saves weeks of preparation and reinstallation costs. Maintains critical infrastructure availability during integrity assessments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Comprehensive Coverage</h3>
                    <p>360° circumferential sensitivity detects defects at any clock position including bottom-of-line (6 o'clock) corrosion inaccessible to topside techniques. Covers entire pipe volume between test points with no blind spots. Detects internal and external corrosion, cracks, gouges, dents, and manufacturing defects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TECHNOLOGY DEEP DIVE ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL FOUNDATION</span>
                <h2>LRUT Technology & Wave Modes</h2>
                <p>Understanding guided wave physics and inspection capabilities</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Torsional Mode -->
                    <div class="wave-mode-card">
                        <div class="mode-header torsional">
                            <i class="fas fa-sync-alt"></i>
                            <h3>Torsional Wave Mode (T-Mode)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Particle Motion:</strong> Circumferential shear displacement perpendicular to propagation direction</p>
                            <p><strong>Frequency Range:</strong> Typically 20-40 kHz for optimal balance of range and sensitivity</p>
                            
                            <div class="mode-advantages">
                                <h4>Advantages:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Non-dispersive—single wave packet maintains shape over long distances</li>
                                    <li><i class="fas fa-check"></i> Unaffected by liquid/gas contents (pressure/flow independent)</li>
                                    <li><i class="fas fa-check"></i> Simple signal interpretation with clear defect reflections</li>
                                    <li><i class="fas fa-check"></i> Works on coated pipes—coating doesn't load wave significantly</li>
                                </ul>
                            </div>

                            <div class="mode-limitations">
                                <h4>Limitations:</h4>
                                <ul>
                                    <li><i class="fas fa-minus-circle"></i> Less sensitive to axial cracks parallel to pipe axis</li>
                                    <li><i class="fas fa-minus-circle"></i> Reflection from bends depends on bend radius and angle</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Best For:</strong> General corrosion, pitting, mechanical damage, circumferential cracking
                            </div>
                        </div>
                    </div>

                    <!-- Longitudinal Mode -->
                    <div class="wave-mode-card">
                        <div class="mode-header longitudinal">
                            <i class="fas fa-arrows-alt-h"></i>
                            <h3>Longitudinal Wave Mode (L-Mode)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Particle Motion:</strong> Axial compression/extension along propagation direction</p>
                            <p><strong>Frequency Range:</strong> Typically 60-100 kHz for higher resolution but shorter range</p>
                            
                            <div class="mode-advantages">
                                <h4>Advantages:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Higher sensitivity to axial cracks and stress corrosion cracking (SCC)</li>
                                    <li><i class="fas fa-check"></i> Better resolution of closely spaced features</li>
                                    <li><i class="fas fa-check"></i> Stronger reflections from welds for feature mapping</li>
                                    <li><i class="fas fa-check"></i> Complementary to T-mode for comprehensive assessment</li>
                                </ul>
                            </div>

                            <div class="mode-limitations">
                                <h4>Limitations:</h4>
                                <ul>
                                    <li><i class="fas fa-minus-circle"></i> Dispersive—multiple wave packets complicate signals</li>
                                    <li><i class="fas fa-minus-circle"></i> Affected by fluid loading (density and acoustic impedance)</li>
                                    <li><i class="fas fa-minus-circle"></i> Shorter inspection range (typically 50-70m vs 100m for T-mode)</li>
                                    <li><i class="fas fa-minus-circle"></i> Coating thickness affects wave velocity and amplitude</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Best For:</strong> Axial cracking (SCC, fatigue), detailed feature resolution, weld inspection
                            </div>
                        </div>
                    </div>

                    <!-- Flexural Mode -->
                    <div class="wave-mode-card">
                        <div class="mode-header flexural">
                            <i class="fas fa-wave-square"></i>
                            <h3>Flexural Wave Mode (F-Mode)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Particle Motion:</strong> Bending oscillation perpendicular to pipe wall</p>
                            <p><strong>Frequency Range:</strong> Very low (5-20 kHz) for specialized applications</p>
                            
                            <div class="mode-advantages">
                                <h4>Advantages:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Travels around bends and elbows more effectively than T/L modes</li>
                                    <li><i class="fas fa-check"></i> Can propagate through valves and complex geometries</li>
                                    <li><i class="fas fa-check"></i> Sensitive to asymmetric defects (external vs internal corrosion)</li>
                                </ul>
                            </div>

                            <div class="mode-limitations">
                                <h4>Limitations:</h4>
                                <ul>
                                    <li><i class="fas fa-minus-circle"></i> Highly dispersive—complex signal analysis required</li>
                                    <li><i class="fas fa-minus-circle"></i> Shorter range than torsional mode</li>
                                    <li><i class="fas fa-minus-circle"></i> Strongly affected by supports, clamps, and external features</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Best For:</strong> Complex piping (elbows, bends), risers, valve approach zones
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Wave Mode Selection Guide</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Application</th>
                                <th>Primary Mode</th>
                                <th>Secondary Mode</th>
                                <th>Rationale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Straight buried pipelines</td>
                                <td><span class="mode-badge torsional">T(0,1)</span></td>
                                <td><span class="mode-badge longitudinal">L(0,2)</span></td>
                                <td>Maximum range, simple signals, insensitive to contents</td>
                            </tr>
                            <tr>
                                <td>SCC-susceptible lines</td>
                                <td><span class="mode-badge longitudinal">L(0,2)</span></td>
                                <td><span class="mode-badge torsional">T(0,1)</span></td>
                                <td>Superior axial crack sensitivity</td>
                            </tr>
                            <tr>
                                <td>Insulated process piping</td>
                                <td><span class="mode-badge torsional">T(0,1)</span></td>
                                <td>—</td>
                                <td>Coating-independent, CUI detection</td>
                            </tr>
                            <tr>
                                <td>Subsea risers/flowlines</td>
                                <td><span class="mode-badge torsional">T(0,1)</span></td>
                                <td><span class="mode-badge flexural">F(1,3)</span></td>
                                <td>Unaffected by seawater, bend capability</td>
                            </tr>
                            <tr>
                                <td>Complex piping with elbows</td>
                                <td><span class="mode-badge flexural">F(1,3)</span></td>
                                <td><span class="mode-badge torsional">T(0,1)</span></td>
                                <td>Propagates through bends</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION RANGE & CAPABILITIES ===================== -->
    <section class="capabilities-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL SPECIFICATIONS</span>
                <h2>LRUT Capabilities & Limitations</h2>
                <p>Understanding what LRUT can and cannot detect</p>
            </div>

            <div class="capabilities-dual">
                <!-- What LRUT Detects -->
                <div class="capability-block detects">
                    <div class="capability-block-header">
                        <i class="fas fa-check-circle"></i>
                        <h3>What LRUT Detects</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="detect-category">
                            <h4><i class="fas fa-droplet"></i> Corrosion Defects</h4>
                            <ul>
                                <li>External corrosion (CUI, atmospheric, soil-side)</li>
                                <li>Internal corrosion (sweet/sour corrosion, erosion-corrosion)</li>
                                <li>Pitting corrosion (typically >3mm depth, clustered)</li>
                                <li>Microbiologically influenced corrosion (MIC)</li>
                                <li>Galvanic corrosion at dissimilar metal joints</li>
                                <li>General wall thinning (CSA loss >5-10%)</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-cut"></i> Cracking</h4>
                            <ul>
                                <li>Stress corrosion cracking (SCC)—especially with L-mode</li>
                                <li>Hydrogen-induced cracking (HIC)</li>
                                <li>Fatigue cracks from cyclic loading</li>
                                <li>Weld toe cracks and HAZ cracking</li>
                                <li>Manufacturing defects (laminations, seam weld defects)</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-hammer"></i> Mechanical Damage</h4>
                            <ul>
                                <li>Dents (>2% diameter reduction)</li>
                                <li>Gouges and scrapes from excavation equipment</li>
                                <li>Impact damage from third-party interference</li>
                                <li>Ovality and pipe deformation</li>
                                <li>Buckles and wrinkles</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-ruler-combined"></i> Geometric Features</h4>
                            <ul>
                                <li>Welds (girth welds, long seam welds)</li>
                                <li>Flanges and bolted connections</li>
                                <li>Tees, branches, and fittings</li>
                                <li>Valves and flow control devices</li>
                                <li>Supports, clamps, and pipe shoes</li>
                                <li>Coating disbondment (large areas)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- LRUT Limitations -->
                <div class="capability-block limitations">
                    <div class="capability-block-header">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>LRUT Limitations</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="limit-category">
                            <h4><i class="fas fa-ruler"></i> Sizing Limitations</h4>
                            <ul>
                                <li><strong>No precise through-wall sizing</strong>—LRUT measures CSA loss, not depth</li>
                                <li>Cannot distinguish between shallow widespread corrosion vs deep localized pitting</li>
                                <li>Uncertainty in defect length (axial extent less accurate than distance)</li>
                                <li>Small isolated defects (<3% CSA loss) may not generate detectable signal</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-eye-slash"></i> Detection Limits</h4>
                            <ul>
                                <li>Minimum detectable CSA loss: typically 5-10% (system/geometry dependent)</li>
                                <li>Small isolated pits (<5mm diameter, <50% wall) may be missed</li>
                                <li>Tight axial cracks (<1mm opening) challenging with T-mode</li>
                                <li>Defects in dead zones near test ring (0-2m) and far end (attenuation dependent)</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-ban"></i> Geometric Restrictions</h4>
                            <ul>
                                <li>Complex geometries (multiple elbows, reducers, valves) limit range</li>
                                <li>Sharp bends (<3D radius) strongly attenuate torsional waves</li>
                                <li>Thick coatings (>10mm viscoelastic) may dampen L-mode signals</li>
                                <li>Heavy bitumen wraps can absorb guided wave energy</li>
                                <li>Diameter changes >30% create strong reflections masking defects</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-search"></i> Follow-Up Required</h4>
                            <ul>
                                <li>LRUT is screening tool—not replacement for detailed UT/PAUT/TOFD</li>
                                <li>Anomalies require confirmation by excavation + focused inspection</li>
                                <li>Cannot determine defect orientation or characterize morphology</li>
                                <li>Fitness-for-service requires follow-up with precise sizing methods</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="capabilities-table-wrapper">
                <h3 class="table-title"><i class="fas fa-table"></i> Inspection Range Factors</h3>
                <table class="capabilities-table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Impact on Range</th>
                            <th>Typical Values</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Pipe Diameter</strong></td>
                            <td>Larger = longer range (more energy containment)</td>
                            <td>50-150m (6"), 80-120m (24"), 60-100m (48")</td>
                        </tr>
                        <tr>
                            <td><strong>Wall Thickness</strong></td>
                            <td>Thicker = better range (less energy loss)</td>
                            <td>Optimal 6-25mm; <4mm challenging</td>
                        </tr>
                        <tr>
                            <td><strong>Coating Type</strong></td>
                            <td>Hard (fusion-bonded epoxy) = minimal; soft (bitumen) = reduces range</td>
                            <td>FBE/3LPE: negligible; Bitumen: 30-50% reduction</td>
                        </tr>
                        <tr>
                            <td><strong>Frequency</strong></td>
                            <td>Lower = longer range but less sensitivity</td>
                            <td>20-40 kHz for T-mode, 60-100 kHz for L-mode</td>
                        </tr>
                        <tr>
                            <td><strong>Pipe Contents</strong></td>
                            <td>Gas/liquid affects L-mode; minimal effect on T-mode</td>
                            <td>T-mode: content-independent</td>
                        </tr>
                        <tr>
                            <td><strong>Bends/Elbows</strong></td>
                            <td>Sharp bends attenuate signal significantly</td>
                            <td>5D bend: 10-20% loss; 1.5D bend: 50-80% loss</td>
                        </tr>
                        <tr>
                            <td><strong>Temperature</strong></td>
                            <td>Higher temp = lower velocity and attenuation increase</td>
                            <td>Operable -40°C to +150°C (material dependent)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">LRUT APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>Rapid pipeline screening across critical infrastructure</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pipeline">Buried Pipelines</button>
                    <button class="tab-btn" data-tab="insulated">Insulated Piping</button>
                    <button class="tab-btn" data-tab="subsea">Subsea & Offshore</button>
                    <button class="tab-btn" data-tab="utilities">Utilities & Water</button>
                </div>

                <div class="tabs-content">
                    <!-- Buried Pipelines Tab -->
                    <div class="tab-panel active" id="pipeline">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/lrut-buried-pipeline.jpg" alt="Buried Pipeline LRUT">
                            </div>
                            <div class="tab-text">
                                <h3>Buried Pipeline Integrity Assessment</h3>
                                <p>LRUT revolutionizes integrity management for buried transmission and distribution pipelines by enabling rapid screening from above-ground access points. Ideal for pipelines under roads, rivers, railways, urban areas, and environmentally sensitive zones where excavation is prohibitively expensive or impractical.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cross-country crude oil and natural gas transmission lines</li>
                                    <li><i class="fas fa-check"></i> Distribution mains and gathering systems</li>
                                    <li><i class="fas fa-check"></i> River crossings and horizontal directional drilling (HDD) sections</li>
                                    <li><i class="fas fa-check"></i> Road/railway crossings without traffic disruption</li>
                                    <li><i class="fas fa-check"></i> External corrosion assessment (coating degradation zones)</li>
                                    <li><i class="fas fa-check"></i> Internal corrosion screening (bottom-of-line, 6 o'clock position)</li>
                                    <li><i class="fas fa-check"></i> Third-party damage and encroachment monitoring</li>
                                    <li><i class="fas fa-check"></i> Baseline surveys for new integrity management programs</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-chart-line"></i> Case Study: Cross-Country Pipeline Survey</h4>
                                    <p><strong>Challenge:</strong> 50 km buried gas pipeline with unknown condition, 30+ road crossings</p>
                                    <p><strong>Solution:</strong> LRUT screening from 25 test locations over 3 weeks</p>
                                    <p><strong>Results:</strong> 14 anomalies identified, excavated only 8 confirmed defects—saved $2.5M vs systematic excavation</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.8S</span>
                                    <span class="standard-tag">NACE SP0502</span>
                                    <span class="standard-tag">API 1163</span>
                                    <span class="standard-tag">DNV-RP-F116</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Insulated Piping Tab -->
                    <div class="tab-panel" id="insulated">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/lrut-insulated-piping.jpg" alt="Insulated Piping LRUT">
                            </div>
                            <div class="tab-text">
                                <h3>Corrosion Under Insulation (CUI) Detection</h3>
                                <p>LRUT enables rapid CUI screening of insulated process piping, steam lines, and cryogenic systems without removing insulation—eliminating weeks of preparation, inspection, and reinstallation. Detects external corrosion while system remains in operation at temperature and pressure.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Refinery and petrochemical plant piping (coker units, crackers, reformers)</li>
                                    <li><i class="fas fa-check"></i> Steam lines and condensate return systems</li>
                                    <li><i class="fas fa-check"></i> Hot oil and thermal fluid circuits</li>
                                    <li><i class="fas fa-check"></i> Cryogenic LNG/NGL piping (-160°C service)</li>
                                    <li><i class="fas fa-check"></i> Offshore platform process piping and risers</li>
                                    <li><i class="fas fa-check"></i> Power plant feedwater, steam, and cooling systems</li>
                                    <li><i class="fas fa-check"></i> Jacketed and heat-traced pipelines</li>
                                    <li><i class="fas fa-check"></i> Fire water and deluge system headers</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-coins"></i>
                                    <div>
                                        <strong>ROI Example:</strong>
                                        <p>Insulation removal + reinstallation costs $150-300/meter. LRUT screens 100m of insulated pipe ($10,000) versus $15,000-30,000 for traditional CUI inspection requiring complete insulation removal. Payback achieved on first test section.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">API 579-1</span>
                                    <span class="standard-tag">NACE SP0198</span>
                                    <span class="standard-tag">ASME PCC-2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subsea & Offshore Tab -->
                    <div class="tab-panel" id="subsea">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/lrut-subsea.jpg" alt="Subsea LRUT">
                            </div>
                            <div class="tab-text">
                                <h3>Subsea Pipelines & Offshore Risers</h3>
                                <p>LRUT provides cost-effective baseline surveys and periodic monitoring of subsea pipelines and production risers from topside test points, eliminating ROV intervention, diving, or platform-to-seabed inspection spreads. Particularly valuable for pipelines in splash zones, mudline crossings, and areas with marine growth.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Production and injection flowlines (oil, gas, water)</li>
                                    <li><i class="fas fa-check"></i> Export pipelines and trunklines</li>
                                    <li><i class="fas fa-check"></i> Platform risers (free-span and J-tube sections)</li>
                                    <li><i class="fas fa-check"></i> Pipeline end terminations (PLETs) and tie-in spools</li>
                                    <li><i class="fas fa-check"></i> Splash zone corrosion monitoring</li>
                                    <li><i class="fas fa-check"></i> Seabed spanning and free-span fatigue assessment</li>
                                    <li><i class="fas fa-check"></i> Internal corrosion (CO₂/H₂S environments)</li>
                                    <li><i class="fas fa-check"></i> Pre-commissioning and post-installation verification</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-ship"></i>
                                    <div>
                                        <strong>Offshore Cost Savings:</strong>
                                        <p>LRUT from topside ($15,000-25,000) eliminates ROV inspection ($100,000-300,000) or diver intervention ($200,000-500,000). Single LRUT test surveys hundreds of meters of riser and subsea pipeline inaccessible without marine spread mobilization.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">DNV-OS-F101</span>
                                    <span class="standard-tag">API RP 1111</span>
                                    <span class="standard-tag">ISO 13623</span>
                                    <span class="standard-tag">NORSOK M-506</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Utilities & Water Tab -->
                    <div class="tab-panel" id="utilities">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/lrut-water-utility.jpg" alt="Water Utility LRUT">
                            </div>
                            <div class="tab-text">
                                <h3>Water & Wastewater Infrastructure</h3>
                                <p>Municipal water utilities adopt LRUT to assess aging cast iron, ductile iron, and steel water mains without service disruption. Enables proactive replacement planning and leak prevention by identifying corroded sections before catastrophic failure, reducing non-revenue water loss.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Potable water transmission and distribution mains</li>
                                    <li><i class="fas fa-check"></i> Raw water intake pipelines (rivers, lakes, reservoirs)</li>
                                    <li><i class="fas fa-check"></i> Wastewater force mains and gravity sewers (steel/iron)</li>
                                    <li><i class="fas fa-check"></i> Fire hydrant distribution loops</li>
                                    <li><i class="fas fa-check"></i> Industrial cooling water and process water systems</li>
                                    <li><i class="fas fa-check"></i> Desalination plant seawater intake/outfall</li>
                                    <li><i class="fas fa-check"></i> Irrigation and agricultural distribution networks</li>
                                    <li><i class="fas fa-check"></i> Historical cast iron mains (graphitization assessment)</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-tint"></i>
                                    <div>
                                        <strong>Utility Benefits:</strong>
                                        <p>Water utilities using LRUT reduce emergency repairs by 60% through proactive replacement of high-risk sections. Asset management programs use LRUT data for condition-based capital planning, optimizing limited infrastructure budgets and minimizing service interruptions.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWWA C200</span>
                                    <span class="standard-tag">AWWA M28</span>
                                    <span class="standard-tag">ISO 24512</span>
                                    <span class="standard-tag">EN 805</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION PROCESS ===================== -->
    <section class="procedure-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION WORKFLOW</span>
                <h2>LRUT Inspection Procedure</h2>
                <p>Systematic approach from planning to reporting</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Desktop Study & Planning</h3>
                        <p>Review isometrics, P&IDs, and as-built drawings to identify test locations. Analyze pipe specifications (diameter, wall thickness, material, coating). Select wave mode and frequency. Plan access requirements and safety permits. Define inspection scope and acceptance criteria.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Test Plan & Procedures per ASTM E2775
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Site Preparation</h3>
                        <p>Expose small pipe section (typically 1-2m) if buried. Remove insulation jacket locally (leave pipe coating intact). Clean surface rust, paint, or contamination. Measure actual pipe dimensions and wall thickness. Verify material and temperature compatibility.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Site Survey Report with Photos
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Transducer Collar Installation</h3>
                        <p>Install segmented transducer ring (typically 8-24 elements) around pipe circumference using mechanical clamps or magnetic holders. Apply coupling gel/grease for acoustic transmission. Connect to LRUT instrument and verify element functionality. Perform system check and sensitivity calibration.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Collar Setup Log & Element Check
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Data Acquisition</h3>
                        <p>Transmit guided wave pulse and record reflections from both directions. Typical test duration 5-15 minutes for complete dataset. Monitor signal quality, focusing, and attenuation. Adjust gain and filtering for optimal signal-to-noise ratio. Acquire baseline and multiple averaging cycles.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Raw Waveform Data Files
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Signal Analysis & Interpretation</h3>
                        <p>Identify reflections from known features (welds, flanges, bends) to verify distance calibration. Detect anomalous reflections not correlated to features. Estimate CSA loss using reflection amplitude and shadow techniques. Classify severity per acceptance criteria. Recommend focused inspection locations.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Annotated Distance-Amplitude Plot
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting & Follow-Up</h3>
                        <p>Generate comprehensive report with distance-amplitude plots, feature/anomaly tables, severity classification, and excavation recommendations. Provide GPS coordinates for high-priority dig sites. Archive complete dataset. Support engineering assessments and remediation planning.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Final LRUT Report per ASTM E2775
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
                <h2>Your LRUT Technology Partner</h2>
                <p>Experience, equipment, and expertise for pipeline integrity programs</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Latest LRUT Systems</h3>
                    <p>Guided Ultrasonics Wavemaker G4, Olympus WavePro, and Eddyfi Teletest equipment fleet. Multi-frequency capability (10-100 kHz). All wave modes: T(0,1), L(0,2), F(1,3). Collar inventory for 2"-60" pipes.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Certified LRUT Technicians</h3>
                    <p>ASNT Level II/III certified with specialized LRUT training per ASNT SNT-TC-1A. Manufacturer-certified on all systems. Average 8+ years LRUT experience. Dedicated Level III for signal analysis and reporting oversight.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Turnkey Project Management</h3>
                    <p>Complete integrity surveys from desktop study through excavation support. Multi-site campaigns for large networks. GIS integration and database management. RBI/IMP program support per API 580/581/1160.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Advanced Data Analytics</h3>
                    <p>Proprietary signal processing algorithms for improved sensitivity. Machine learning for automated feature recognition. Trend analysis across multiple surveys. Integration with client CMMS/EAM systems via API.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Engineering Support</h3>
                    <p>Fitness-for-service assessments per API 579-1/ASME FFS-1. Remaining life calculations and corrosion rate trending. Excavation prioritization and repair strategy consultation. Expert witness and third-party verification services.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Proven Track Record</h3>
                    <p>2000+ km of pipelines screened across oil & gas, petrochemical, and utilities. 95%+ defect confirmation rate on recommended excavations. Approved vendor for ONGC, GAIL, IOCL, and international operators. Zero safety incidents.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>LRUT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How far can LRUT inspect from a single test location?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical inspection range is 50-100 meters in each direction (total 100-200m coverage) depending on pipe diameter, wall thickness, coating, and wave mode. Larger diameter pipes (24"-48") generally achieve longer ranges due to better energy confinement. Torsional mode typically reaches 80-100m, while longitudinal mode is limited to 50-70m due to dispersion. Range is reduced by heavy coatings, sharp bends, complex geometries, and high attenuation materials.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum defect size LRUT can detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>LRUT typically detects defects causing 5-10% cross-sectional area (CSA) loss or greater. This corresponds to approximately: 10-20% wall thickness loss over 100-200mm axial length, or clustered pitting with combined area >3% of circumference. Isolated small pits (<5mm diameter, <50% wall) may not generate detectable reflections. Sensitivity depends on defect size, shape, location, and signal-to-noise ratio. LRUT is a screening tool—focused inspection techniques (PAUT, TOFD, UT) provide precise sizing of detected anomalies.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can LRUT be performed on in-service pipelines?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, LRUT is specifically designed for in-service inspection without shutdown, depressurization, or product removal. The technique works on pipelines containing liquids or gas at operating pressure and temperature (typical range -40°C to +150°C). Torsional mode is unaffected by pipe contents. Longitudinal mode may be influenced by fluid density/pressure but is compensated during analysis. No hot work permits required. This eliminates production losses and enables continuous integrity monitoring.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does pipe coating affect LRUT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Impact depends on coating type and thickness. Thin hard coatings (fusion-bonded epoxy, 3-layer polyethylene, tape wrap) have negligible effect on torsional mode. Thick soft coatings (bitumen, mastic >10mm) can dampen guided wave energy and reduce range by 30-50%. Coating does NOT need to be removed—only local insulation jacket removal required for transducer installation. Disbonded coating may generate reflections but is distinguishable from metal loss. Coating impedance is factored into test planning and sensitivity calibration.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is LRUT for defect location?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Distance accuracy is typically ±0.5m (±2%) for features/defects within 50m of test location, degrading to ±1-2m at maximum range. Accuracy depends on: wave velocity calibration using known features, temperature compensation, and signal processing algorithms. This precision is sufficient to direct excavation to specific pipeline section (e.g., "excavate at 47.5m from valve station"). Excavation then employs focused NDT (UT/PAUT/TOFD) for exact characterization. GPS coordinates provided for field crews.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the cost of LRUT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical LRUT test ranges $5,000-15,000 per location depending on: pipe diameter, accessibility, mobilization distance, and reporting requirements. This screens 100-200m of pipeline. Cost per meter is $25-150 versus $500-2000/m for systematic excavation + UT. On large projects (>10 locations), volume pricing reduces unit cost. ROI calculation: Single LRUT test ($10,000) replaces 10 exploratory excavations ($50,000-200,000), yielding 80-95% cost savings. Request detailed quotation for your specific application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can LRUT inspect through pipe bends and elbows?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Limited capability depending on bend radius and wave mode. Torsional mode: 5D bends (bend radius = 5x pipe diameter) cause 10-20% signal loss—acceptable; 3D bends: 30-50% loss—marginal; 1.5D bends (short-radius elbows): 60-80% loss—severely limits range beyond bend. Flexural mode propagates through bends better but with complex dispersion. Multiple bends in series compound attenuation. Strategy: Position test location to avoid critical bends, or test from both sides of bend to cover full length. Desktop study identifies optimal test locations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide LRUT operator training?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, comprehensive LRUT training programs available: (1) LRUT Fundamentals (3 days): Guided wave theory, equipment operation, collar installation, data acquisition; (2) Signal Analysis (2 days): Advanced interpretation, CSA loss estimation, reporting per ASTM E2775; (3) Field Practicum (2 days): Hands-on training with live tests on operating pipelines; (4) Custom Programs: Tailored to client equipment/procedures. Courses include theory, practical exercises, and certification exam. ASNT Level II UT prerequisite recommended. On-site training available for client personnel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Screen 200+ Meters of Pipeline in Hours, Not Weeks</h2>
                <p>Eliminate excavation costs and accelerate your integrity management program with LRUT</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Feasibility Study</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Free Desktop Feasibility</span>
                    <span><i class="fas fa-check"></i> ROI Analysis</span>
                    <span><i class="fas fa-check"></i> No-Obligation Pilot Test</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Pipeline Inspection Services</h2>
                <p>Complete integrity solutions from screening to detailed assessment</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/srut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-compress-arrows-alt"></i>
                    </div>
                    <h3>SRUT</h3>
                    <p>Short Range UT for detailed near-weld inspection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Time of Flight Diffraction for precise flaw sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>UT Thickness</h3>
                    <p>Ultrasonic thickness gauging for wall loss measurement</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/mfl-tank-floor.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>MFL</h3>
                    <p>Magnetic Flux Leakage for rapid pipeline screening</p>
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