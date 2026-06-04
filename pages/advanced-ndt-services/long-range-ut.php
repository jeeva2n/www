<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "LRUT / Guided Wave Testing (GWT) Services | Long Range Ultrasonic Testing | Alpha Sonix NDT Solutions";
$meta_description = "Long Range Ultrasonic Testing (LRUT) / Guided Wave Testing (GWT) for rapid screening of pipelines and insulated/covered piping. Inspect long lengths from a single test location to identify corrosion and wall-loss zones and prioritize targeted follow-up inspection—without widespread excavation or insulation removal.";
$meta_keywords = "LRUT, long range ultrasonic testing, guided wave testing, GWT, pipeline screening, corrosion screening, CUI screening, buried pipeline inspection, insulated pipe inspection, guided waves NDT";
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
            "serviceType": "Long Range Ultrasonic Testing (LRUT) / Guided Wave Testing (GWT)",
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
            "description": "Long Range Ultrasonic Testing (LRUT) / Guided Wave Testing (GWT) for rapid screening of pipelines and piping circuits to identify corrosion/wall-loss zones and prioritize targeted follow-up inspection with minimal excavation or insulation removal."
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
                <p class="page-subtitle">Guided wave screening to assess long pipeline lengths from a single test position and prioritize targeted follow-up inspection</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-long-arrow-alt-right"></i> Long-Range Screening (Range Depends on Conditions)</span>
                    <span class="badge"><i class="fas fa-hard-hat"></i> Minimal Excavation / Minimal Insulation Removal</span>
                    <span class="badge"><i class="fas fa-bullseye"></i> Targeted Follow-Up Planning</span>
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
                    <p>Inspection range varies with diameter, thickness, coating/insulation, supports, bends, and wave mode. Typical coverage can extend tens of meters in both directions from a single test location.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shovel"></i>
                    </div>
                    <h3>Reduced Access Work</h3>
                    <p>Screen buried, coated, and insulated lines with limited exposure at selected test points—reducing widespread excavation and insulation removal.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <h3>Practical Localization</h3>
                    <p>Identifies and locates suspect areas with practical accuracy to support targeted follow-up inspection and excavation planning.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>CSA Loss Estimation</h3>
                    <p>Provides screening-level estimates of cross-sectional area (CSA) change to help prioritize locations; confirmed sizing requires follow-up UT methods.</p>
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
                    <p class="lead">Long Range Ultrasonic Testing (LRUT), also known as Guided Wave Testing (GWT), is an advanced NDT method used to rapidly screen pipelines and piping circuits from a single test location. It is widely used to identify and locate corrosion/wall-loss zones, erosion, and other structural anomalies over long distances—especially where access is limited (buried lines, insulated piping, crossings, or congested plant areas).</p>

                    <p>Unlike conventional UT, which provides localized thickness and flaw sizing at a specific point, LRUT uses low-frequency guided waves that propagate along the pipe wall. A transducer ring placed around the circumference generates wave modes (commonly torsional or longitudinal) that travel in both directions and reflect from features such as welds, flanges, supports, and areas of metal loss.</p>

                    <p>LRUT is best used as a <strong>screening and prioritization tool</strong>. It quickly identifies where detailed inspection should be focused, helping reduce unnecessary excavation and insulation removal—while still ensuring that confirmed defect sizing and acceptance decisions are made using suitable follow-up methods (UT/PAUT/TOFD).</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Guided Wave Propagation</strong>
                                <p>Low-frequency waves travel along the pipe wall, enabling long-range screening from limited access points.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>360° Circumferential Sensitivity</strong>
                                <p>Detects indications at any clock position around the pipe circumference within the effective inspection range.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Feature Identification</strong>
                                <p>Maps welds and geometric features to support distance calibration and interpretation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Screening → Targeted Follow-Up</strong>
                                <p>Directs excavation and detailed UT only to prioritized locations, improving inspection efficiency and reducing disruption.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Where LRUT Fits Best:</strong>
                            <p>LRUT is commonly used in integrity programs for buried pipelines, road/rail crossings, insulated piping (CUI screening), and long pipe runs where point-by-point inspection is costly and time-consuming.</p>
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
                            <span>Transducer collar installed on pipe for guided wave screening</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">Up to 200m</span>
                            <span class="stat-label">Total Coverage (Conditions Permitting)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">±0.5–2m</span>
                            <span class="stat-label">Typical Location Guidance</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Recorded</span>
                            <span class="stat-label">Traceable Data & Plots</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-wave-square"></i> Guided Wave Principles</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Transducer ring generates guided waves</li>
                            <li><strong>2.</strong> Waves propagate along pipe wall</li>
                            <li><strong>3.</strong> Reflections return from features/indications</li>
                            <li><strong>4.</strong> Signal analysis identifies suspect areas</li>
                            <li><strong>5.</strong> Time-of-flight supports distance estimation</li>
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
                <p>Faster screening, reduced access work, and better prioritization for integrity programs</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Reduced Excavation & Access Cost</h3>
                    <p>LRUT can significantly reduce unnecessary excavation and insulation removal by screening long runs and focusing follow-up only where indications are present.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Screening</h3>
                    <p>Efficient for large networks and long circuits—helping teams assess more length in less time compared with point-by-point inspection approaches.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Lower Site Disturbance</h3>
                    <p>Minimizes digging and restoration needs—useful for crossings, sensitive areas, and congested facilities where excavation is disruptive.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h3>Targeted Follow-Up Planning</h3>
                    <p>Provides practical location information and screening-level severity guidance to help prioritize detailed UT/PAUT/TOFD inspection and remediation.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Supports In-Service Inspection</h3>
                    <p>Often performed without shutdown and with minimal disruption (site conditions permitting), supporting integrity assessments while maintaining operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Full Circumference Sensitivity</h3>
                    <p>Detects indications around the circumference within the effective range, including bottom-of-line areas that are difficult to access for conventional methods. Confirmed sizing requires follow-up inspection.</p>
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
                <p>Wave mode selection is based on geometry, coating/contents, and the inspection objective</p>
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
                            <p><strong>Typical Use:</strong> General screening for corrosion/wall loss with stable signal behavior.</p>
                            <p><strong>Frequency Range:</strong> Commonly in the lower kHz range (project dependent).</p>

                            <div class="mode-advantages">
                                <h4>Advantages:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Often provides long screening range with clear reflections</li>
                                    <li><i class="fas fa-check"></i> Generally less affected by pipe contents than some other modes</li>
                                    <li><i class="fas fa-check"></i> Practical for many coated/insulated applications (setup dependent)</li>
                                </ul>
                            </div>

                            <div class="mode-limitations">
                                <h4>Considerations:</h4>
                                <ul>
                                    <li><i class="fas fa-minus-circle"></i> Sensitivity depends on defect orientation and size</li>
                                    <li><i class="fas fa-minus-circle"></i> Bends, fittings, and supports can reduce coverage and complicate interpretation</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Targets:</strong> Metal loss, general corrosion, localized corrosion clusters, mechanical damage indications
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
                            <p><strong>Typical Use:</strong> Improved resolution in some scenarios; may support enhanced sensitivity to certain axial-oriented features (application dependent).</p>
                            <p><strong>Frequency Range:</strong> Higher than typical torsional setups (project dependent).</p>

                            <div class="mode-advantages">
                                <h4>Advantages:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Can improve resolution of closely spaced features in some conditions</li>
                                    <li><i class="fas fa-check"></i> Often used as a complementary dataset alongside T-mode</li>
                                </ul>
                            </div>

                            <div class="mode-limitations">
                                <h4>Considerations:</h4>
                                <ul>
                                    <li><i class="fas fa-minus-circle"></i> Can be more sensitive to attenuation and loading effects (coating/contents)</li>
                                    <li><i class="fas fa-minus-circle"></i> Range can be shorter depending on dispersion/attenuation</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Targets:</strong> Enhanced feature resolution; selected crack-like sensitivity cases (requires confirmation)
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
                            <p><strong>Typical Use:</strong> Specialized applications where bend negotiation is needed (project dependent).</p>
                            <p><strong>Frequency Range:</strong> Specialized lower-frequency setups (project dependent).</p>

                            <div class="mode-advantages">
                                <h4>Advantages:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> May provide better propagation through certain bends compared with other modes</li>
                                    <li><i class="fas fa-check"></i> Useful for select complex geometries where standard screening is limited</li>
                                </ul>
                            </div>

                            <div class="mode-limitations">
                                <h4>Considerations:</h4>
                                <ul>
                                    <li><i class="fas fa-minus-circle"></i> More complex signals; requires experienced interpretation</li>
                                    <li><i class="fas fa-minus-circle"></i> Strong influence from supports/clamps and geometry</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Targets:</strong> Selected elbow/bend areas and complex piping sections (feasibility dependent)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Wave Mode Selection Guide (Typical)</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Application</th>
                                <th>Primary Mode</th>
                                <th>Secondary Mode</th>
                                <th>Why</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Straight buried pipelines</td>
                                <td><span class="mode-badge torsional">T-Mode</span></td>
                                <td><span class="mode-badge longitudinal">L-Mode</span></td>
                                <td>Long screening range + complementary information</td>
                            </tr>
                            <tr>
                                <td>Insulated piping (CUI screening)</td>
                                <td><span class="mode-badge torsional">T-Mode</span></td>
                                <td>—</td>
                                <td>Efficient screening along long pipe runs (setup dependent)</td>
                            </tr>
                            <tr>
                                <td>Crack-susceptible scenarios (project dependent)</td>
                                <td><span class="mode-badge longitudinal">L-Mode</span></td>
                                <td><span class="mode-badge torsional">T-Mode</span></td>
                                <td>Complementary sensitivity; confirmation required by UT</td>
                            </tr>
                            <tr>
                                <td>Complex piping with elbows</td>
                                <td><span class="mode-badge flexural">F-Mode</span></td>
                                <td><span class="mode-badge torsional">T-Mode</span></td>
                                <td>Feasibility dependent; supports bend negotiation in select cases</td>
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
                <p>LRUT is a screening method—use it to find where to inspect next, then confirm with sizing techniques</p>
            </div>

            <div class="capabilities-dual">
                <!-- What LRUT Detects -->
                <div class="capability-block detects">
                    <div class="capability-block-header">
                        <i class="fas fa-check-circle"></i>
                        <h3>LRUT is Strong For</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="detect-category">
                            <h4><i class="fas fa-droplet"></i> Metal Loss / Corrosion Screening</h4>
                            <ul>
                                <li>External corrosion (including CUI screening zones)</li>
                                <li>Internal corrosion and erosion-corrosion (screening)</li>
                                <li>General wall thinning and localized corrosion clusters (CSA change)</li>
                                <li>Corrosion at supports, clamps, and road/rail crossings (where accessible)</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-hammer"></i> Mechanical / Structural Anomalies (Screening)</h4>
                            <ul>
                                <li>Deformation-related indications and damage zones (screening level)</li>
                                <li>Major geometric changes and discontinuities</li>
                                <li>Areas requiring verification by focused inspection</li>
                            </ul>
                        </div>

                        <div class="detect-category">
                            <h4><i class="fas fa-ruler-combined"></i> Feature Mapping</h4>
                            <ul>
                                <li>Welds, flanges, branches, reducers, valves (as reflected features)</li>
                                <li>Supports and clamps (often strong reflectors)</li>
                                <li>Distance calibration using known features</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- LRUT Limitations -->
                <div class="capability-block limitations">
                    <div class="capability-block-header">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h3>Important Limitations</h3>
                    </div>
                    <div class="capability-block-body">
                        <div class="limit-category">
                            <h4><i class="fas fa-ruler"></i> Sizing</h4>
                            <ul>
                                <li><strong>Not a precise thickness tool</strong>—LRUT provides screening-level CSA change information, not exact depth</li>
                                <li>Depth/shape characterization requires UT thickness mapping, PAUT, or TOFD</li>
                                <li>Small isolated defects may not produce a strong response</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-eye-slash"></i> Sensitivity</h4>
                            <ul>
                                <li>Detection threshold depends on diameter/thickness, range, coating, and noise</li>
                                <li>Near-field and far-end “dead zones” can exist due to ring position and attenuation</li>
                                <li>Crack-like detection capability is application dependent and typically requires complementary methods</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-ban"></i> Geometry Effects</h4>
                            <ul>
                                <li>Bends, tees, valves, and diameter changes can reduce range and mask indications</li>
                                <li>Viscoelastic coatings and complex support conditions can attenuate signals</li>
                            </ul>
                        </div>

                        <div class="limit-category">
                            <h4><i class="fas fa-search"></i> Follow-Up is Part of the Method</h4>
                            <ul>
                                <li>LRUT findings typically require confirmation by focused NDT (UT/PAUT/TOFD)</li>
                                <li>Fitness-for-service decisions require verified sizing data</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="capabilities-table-wrapper">
                <h3 class="table-title"><i class="fas fa-table"></i> Key Factors That Affect Range</h3>
                <table class="capabilities-table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Typical Impact</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Pipe Diameter</strong></td>
                            <td>Larger diameter often supports longer screening range</td>
                            <td>Actual range is project dependent</td>
                        </tr>
                        <tr>
                            <td><strong>Wall Thickness</strong></td>
                            <td>Very thin walls can reduce range and sensitivity</td>
                            <td>Feasibility review recommended</td>
                        </tr>
                        <tr>
                            <td><strong>Coating / Insulation</strong></td>
                            <td>Some coatings are low-impact; soft/thick coatings may attenuate signals</td>
                            <td>Coating type/condition matters</td>
                        </tr>
                        <tr>
                            <td><strong>Frequency / Mode</strong></td>
                            <td>Lower frequency tends to improve range; higher frequency tends to improve resolution</td>
                            <td>Mode selection drives performance</td>
                        </tr>
                        <tr>
                            <td><strong>Contents / Loading</strong></td>
                            <td>May influence some modes more than others</td>
                            <td>Assessed during planning</td>
                        </tr>
                        <tr>
                            <td><strong>Bends / Fittings</strong></td>
                            <td>Can create reflections and attenuation</td>
                            <td>Complex geometries reduce coverage</td>
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
                <p>Rapid screening for pipelines and piping circuits across critical infrastructure</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pipeline">Buried Pipelines</button>
                    <button class="tab-btn" data-tab="insulated">Insulated Piping (CUI)</button>
                    <button class="tab-btn" data-tab="subsea">Offshore / Marine</button>
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
                                <h3>Buried Pipeline Screening</h3>
                                <p>LRUT is widely used to screen buried lines from accessible locations (valve stations, above-ground risers, crossings). It helps identify suspect zones and prioritize excavation and focused inspection where it matters most.</p>
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Transmission and distribution pipelines</li>
                                    <li><i class="fas fa-check"></i> Road/rail crossings and congested corridors</li>
                                    <li><i class="fas fa-check"></i> Coating degradation / corrosion-prone zones</li>
                                    <li><i class="fas fa-check"></i> Bottom-of-line internal corrosion screening (where applicable)</li>
                                    <li><i class="fas fa-check"></i> Baseline surveys for integrity programs</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">ASME B31.8S</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ISO 13847</span>
                                    <span class="standard-tag">Client Specifications</span>
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
                                <h3>Corrosion Under Insulation (CUI) Screening</h3>
                                <p>LRUT supports efficient screening of long insulated piping runs with limited insulation removal at test points. It helps identify suspect zones that need targeted insulation removal and confirmatory thickness mapping.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Refinery and petrochemical process piping</li>
                                    <li><i class="fas fa-check"></i> Steam lines and condensate systems</li>
                                    <li><i class="fas fa-check"></i> Hot and cold insulated circuits</li>
                                    <li><i class="fas fa-check"></i> Firewater headers and utilities</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">API 579-1/ASME FFS-1</span>
                                    <span class="standard-tag">NACE Guidance</span>
                                    <span class="standard-tag">Site Specifications</span>
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
                                <h3>Offshore / Marine Applications (Feasibility Dependent)</h3>
                                <p>LRUT may be applied for selected offshore screening tasks where access is available from topside or exposed locations. Suitability depends on geometry, coating systems, supports, and accessibility, and should be reviewed during planning.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Riser and splash-zone screening (where accessible)</li>
                                    <li><i class="fas fa-check"></i> Tie-in spools and approach sections</li>
                                    <li><i class="fas fa-check"></i> Screening support for targeted campaigns</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">DNV-OS-F101</span>
                                    <span class="standard-tag">ISO 13623</span>
                                    <span class="standard-tag">Project Specifications</span>
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
                                <h3>Water & Utility Infrastructure</h3>
                                <p>LRUT can support condition screening of long utility pipelines where access is limited and disruptive excavation needs to be minimized—helping prioritize detailed inspection and renewal planning.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Water transmission mains and industrial utilities</li>
                                    <li><i class="fas fa-check"></i> Cooling water and process water lines</li>
                                    <li><i class="fas fa-check"></i> Buried/covered utility corridors</li>
                                </ul>

                                <div class="standards">
                                    <strong>Common References:</strong>
                                    <span class="standard-tag">Asset Management Programs</span>
                                    <span class="standard-tag">Owner Specifications</span>
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
                <p>From feasibility and test planning to reporting and follow-up recommendations</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Feasibility Review & Planning</h3>
                        <p>Review drawings and line lists to identify suitable test positions and estimate achievable range. Confirm pipe size, thickness, coating/insulation, supports, and geometric restrictions. Select wave mode and frequency based on the inspection objective and circuit layout.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Test Plan & Procedure (Project Specific)
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Local Access & Preparation</h3>
                        <p>Prepare a small pipe section for collar installation. This may include local exposure for buried lines or local insulation jacket opening for insulated piping. Clean and verify surface condition for consistent coupling.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Site Notes / Photos (as required)
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Collar Installation & System Checks</h3>
                        <p>Install the transducer ring, verify element performance, and perform calibration/verification checks using known features where available (e.g., welds). Confirm signal-to-noise performance and test parameters.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Setup Log & Verification Screens
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Data Acquisition</h3>
                        <p>Acquire guided wave data in both directions, adjusting gain/filtering to match site conditions. Capture repeat scans as needed for confidence and repeatability.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Recorded Data Files
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Analysis & Interpretation</h3>
                        <p>Identify and label known features, then evaluate suspect reflections. Provide screening-level severity ranking and practical location guidance to support focused follow-up inspection.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Annotated Plots & Findings Table
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Reporting & Follow-Up Recommendations</h3>
                        <p>Issue a structured report with test parameters, inspection range, mapped features, suspect zones, and recommendations for confirmatory inspection (UT thickness mapping / PAUT / TOFD) and excavation planning where applicable.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Final LRUT Report Package
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
                <p>Alpha Sonix NDT Solutions delivers LRUT services with disciplined planning, reliable field execution, and reporting designed for practical integrity decisions—helping you move from screening to targeted verification efficiently.</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Modern LRUT Platforms</h3>
                    <p>Guided wave systems with multi-frequency and multi-mode capability, supported by suitable collar sizes for common pipeline and plant piping ranges.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Personnel</h3>
                    <p>Experienced technicians with guided wave interpretation capability and Level II/III oversight for planning, analysis, and reporting support.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Campaign Execution Support</h3>
                    <p>Support for multi-location surveys, circuit-based programs, and phased execution—aligned with shutdown windows or in-service constraints.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Clear, Decision-Ready Reporting</h3>
                    <p>Structured findings tables, annotated plots, and follow-up recommendations so your teams can plan excavation and confirmatory UT efficiently.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Engineering & Follow-Up NDT</h3>
                    <p>When indications require verification, we support follow-up inspections using UT thickness mapping, PAUT, and TOFD—so you get actionable sizing data.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety & Minimal Disruption</h3>
                    <p>Methods and planning focused on reducing intrusive access work and minimizing disruption—without compromising the need for confirmation and sizing where required.</p>
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
                        <p>Range depends on pipe diameter, thickness, coating/insulation, temperature, supports, bends, and wave mode. In many practical applications, LRUT can screen tens of meters in each direction; some conditions may allow longer. A feasibility review using drawings and site information helps set realistic expectations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum defect size LRUT can detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>LRUT is most effective for detecting and locating metal loss that produces a measurable change in cross-sectional area (CSA). Detectability depends on defect size, shape, position, and distance from the collar, as well as background noise and geometry. Small isolated pits may not be detected reliably. Confirmatory UT is recommended for sizing and acceptance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can LRUT be performed on in-service pipelines?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Often yes. LRUT is commonly used for in-service screening, subject to access, surface condition, temperature limits, and safety requirements. We confirm feasibility during planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does pipe coating affect LRUT inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—coating type, thickness, and condition can influence attenuation and range. Many common coatings are workable; soft or thick viscoelastic coatings can reduce performance. Coating removal is typically not required for screening, but local preparation is needed for collar installation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is LRUT for defect location?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>LRUT provides practical location guidance suitable for planning targeted excavation or focused inspection. Accuracy varies with range, geometry, and calibration. Known features (such as welds) help improve confidence in distance calibration.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can LRUT inspect through pipe bends and elbows?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Bends and fittings can create strong reflections and attenuation, reducing effective range. Coverage through bends is feasibility dependent and often requires careful collar placement or testing from multiple positions. We evaluate this during planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide LRUT operator training?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. We provide guided wave training support covering fundamentals, field setup, data acquisition, interpretation basics, and how to integrate LRUT into tiered inspection programs with SRUT and advanced UT methods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Screen More Pipeline—Dig Less</h2>
                <p>Use LRUT to prioritize the right locations for excavation and detailed UT verification</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Feasibility Review</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Feasibility & Test Planning</span>
                    <span><i class="fas fa-check"></i> Survey + Clear Findings Table</span>
                    <span><i class="fas fa-check"></i> Follow-Up NDT Support (UT/PAUT/TOFD)</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Pipeline Inspection Services</h2>
                <p>Complete integrity solutions—from screening to confirmation and sizing</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/advanced-ndt-services/short-range-ut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-compress-arrows-alt"></i>
                    </div>
                    <h3>SRUT</h3>
                    <p>Short-range guided wave screening for near-weld / HAZ focus and refined localization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/time-of-flight-diffraction.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>TOFD</h3>
                    <p>Accurate through-wall sizing support for engineering and integrity decisions</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>UT Thickness</h3>
                    <p>Thickness gauging and mapping for confirmed wall-loss sizing</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/mfl-tank-floor.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>MFL (Tank Floor)</h3>
                    <p>Magnetic Flux Leakage scanning for rapid storage tank floor screening</p>
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
