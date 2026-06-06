<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "MFL Tank Floor Inspection Services | Magnetic Flux Leakage Scanning (API 653) | Alpha Sonix NDT Solutions";
$meta_description = "Magnetic Flux Leakage (MFL) tank floor inspection for atmospheric storage tanks. Fast, full-floor scanning to identify corrosion, pitting and metal loss zones, with targeted UT verification and API 653 Annex G aligned reporting for repair planning and integrity decisions.";
$meta_keywords = "MFL tank floor inspection, magnetic flux leakage, API 653 Annex G, tank bottom inspection, bottom plate scanning, storage tank inspection, corrosion mapping, pitting detection, tank floor scanner, NDT tank inspection";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/mfl-tank-floor.php";
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
    <meta property="og:image" content="/www/assets/images/services/mfl-tank-floor-og.jpg">

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
            "serviceType": "Magnetic Flux Leakage (MFL) Tank Floor Inspection",
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
            "description": "Magnetic Flux Leakage (MFL) scanning for atmospheric storage tank floors to identify corrosion, pitting and metal loss zones with full-floor coverage and targeted UT verification, aligned with API 653 Annex G reporting practices.",
            "serviceOutput": "Tank floor screening map, findings register and API 653 aligned inspection report package"
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/MFLTFI/mfltfi1.png');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>MFL Tank Floor</span>
                </div>
                <h1 class="page-title">Magnetic Flux Leakage (MFL) Tank Floor Inspection</h1>
                <p class="page-subtitle">Fast, full-floor scanning to identify corrosion and pitting zones—supporting API 653 integrity decisions with clear maps, prioritization, and targeted UT verification</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> API 653 Annex G Aligned</span>
                    <span class="badge"><i class="fas fa-magnet"></i> Full-Floor Coverage (Accessible Areas)</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Reduced Confined Space Exposure (Robotic Scanning)</span>
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
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3>Topside + Underside Sensitivity</h3>
                    <p>MFL responds to metal loss anywhere through the plate thickness, supporting detection of both product-side and soil-side corrosion mechanisms.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-expand"></i>
                    </div>
                    <h3>Large-Area Coverage</h3>
                    <p>Efficient scanning across annular ring, center plates, and selected critical zones—reducing dependence on sparse UT grid sampling.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-map"></i>
                    </div>
                    <h3>Mapped Results</h3>
                    <p>Clear color-coded floor maps and a findings register help prioritize repairs and guide UT verification at relevant locations.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Faster than Manual Grids</h3>
                    <p>Robotic scanning improves productivity and consistency compared with manual grid thickness checks, especially on large floors and tight schedules.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS MFL TANK FLOOR ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ELECTROMAGNETIC NDT TECHNOLOGY</span>
                    <h2>What is Magnetic Flux Leakage Tank Floor Inspection?</h2>

                    <p class="lead">Magnetic Flux Leakage (MFL) is an electromagnetic inspection method used to screen atmospheric storage tank floors for corrosion, pitting, and metal loss. It works by magnetizing the steel floor plate and measuring leakage fields created where thickness is reduced.</p>

                    <p>MFL floor scanners use strong magnets to drive the plate close to magnetic saturation. When corrosion or thinning is present, the magnetic field is disturbed and “leaks” from the surface. Sensor arrays detect these leakage patterns as the scanner moves, producing a structured dataset that can be mapped for rapid decision-making.</p>

                    <p>MFL is best understood as a <strong>high-coverage screening tool</strong>. It identifies and ranks suspect zones for confirmation. For final remaining-thickness values and acceptance decisions, <strong>targeted UT verification</strong> is performed at selected locations—this combined approach is consistent with API 653 Annex G practices.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Electromagnetic Metal-Loss Screening</strong>
                                <p>Detects flux leakage associated with pitting, general corrosion, and localized wall loss in ferromagnetic floor plates.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High Productivity Floor Scanning</strong>
                                <p>Robotic scanning supports rapid coverage and consistent data acquisition across large floor areas.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Mapped Deliverables</strong>
                                <p>Color-coded maps and findings tables help maintenance teams prioritize repair, replacement, or monitoring actions.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>UT Verification Built In</strong>
                                <p>Targeted UT checks validate screening results and provide exact thickness where required for FFS and repair decisions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Key Advantage:</strong>
                            <p>MFL helps you move from “limited sampling” to “floor-wide awareness” by quickly highlighting where metal loss is concentrated—reducing uncertainty and improving repair prioritization during API 653 programs and turnarounds.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Schedule Tank Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Tank Types</a>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/mfl-scanner-operation.jpg" alt="MFL Tank Floor Scanner">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>MFL floor scanner traversing a tank floor to generate mapped screening results</span>
                        </div>
                    </div>

                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Scan Coverage (Accessible Floor)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Fast</span>
                            <span class="stat-label">Large-Area Screening</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">UT</span>
                            <span class="stat-label">Verification at Flagged Zones</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-project-diagram"></i> MFL Detection Principle</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Magnets magnetize the floor plate</li>
                            <li><strong>2.</strong> Uniform flux in sound areas</li>
                            <li><strong>3.</strong> Metal loss disturbs the field</li>
                            <li><strong>4.</strong> Sensors detect leakage response</li>
                            <li><strong>5.</strong> Software maps and ranks indications</li>
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
                <span class="section-label">WHY CHOOSE MFL</span>
                <h2>Key Advantages of MFL Tank Floor Inspection</h2>
                <p>Efficient screening, mapped deliverables, and practical repair prioritization for tank integrity programs</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Improved Safety Planning</h3>
                    <p>Robotic scanning and structured workflows can reduce time spent inside the tank and support safer execution. Final requirements depend on site rules and tank condition.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Better Inspection Economics</h3>
                    <p>MFL reduces reliance on extensive manual UT grids by scanning large areas quickly and focusing UT verification where it matters—helping control shutdown time and labor scope.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h3>Full-Floor Awareness</h3>
                    <p>Identifies metal loss distribution across the floor, including critical zones such as annular ring regions and water-bottom areas—supporting better repair and monitoring decisions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-arrows-alt-v"></i>
                    </div>
                    <h3>Through-Thickness Response</h3>
                    <p>Responds to metal loss located on either surface of the plate. Where surface origin matters, we recommend complementary verification methods.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Data Acquisition</h3>
                    <p>Robotic platforms can cover large floor areas efficiently, producing mapped results that support same-shift decision making on repair prioritization.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Mapped Reporting & Traceability</h3>
                    <p>Color-coded maps, findings registers, and UT validation points produce documentation that is easier to review, defend, and trend over time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== MFL vs OTHER METHODS ===================== -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPARATIVE ANALYSIS</span>
                <h2>MFL vs. Other Tank Floor Inspection Methods</h2>
                <p>Select the method based on your objective: screening coverage vs. point thickness accuracy vs. leak detection</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th><i class="fas fa-magnet"></i> MFL</th>
                            <th><i class="fas fa-signal"></i> UT Grid Scanning</th>
                            <th><i class="fas fa-eye"></i> Visual + Spot UT</th>
                            <th><i class="fas fa-flask"></i> Vacuum Box</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Coverage</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> High / Full Floor (accessible)</td>
                            <td class="good">Grid-based (density dependent)</td>
                            <td class="poor">Limited</td>
                            <td class="average">Weld seams only</td>
                        </tr>
                        <tr>
                            <td><strong>Primary Output</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Screening map + ranked zones</td>
                            <td class="good">Point thickness values</td>
                            <td class="average">Condition observations + spot values</td>
                            <td class="average">Leak indication at welds</td>
                        </tr>
                        <tr>
                            <td><strong>Preparation Need</strong></td>
                            <td class="good">Floor must be accessible and suitable for scanner travel</td>
                            <td class="poor">Floor access required; time increases with grid density</td>
                            <td class="poor">Floor access required</td>
                            <td class="poor">Clean weld areas required</td>
                        </tr>
                        <tr>
                            <td><strong>Speed on Large Floors</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> High</td>
                            <td class="average">Moderate to slow</td>
                            <td class="good">Moderate</td>
                            <td class="average">Localized</td>
                        </tr>
                        <tr>
                            <td><strong>Remaining Thickness Value</strong></td>
                            <td class="good">Screening-level; validated by UT</td>
                            <td class="excellent"><i class="fas fa-star"></i> Direct measurement</td>
                            <td class="excellent">Direct measurement (spot)</td>
                            <td class="poor">N/A</td>
                        </tr>
                        <tr>
                            <td><strong>API 653 Acceptance</strong></td>
                            <td class="excellent"><i class="fas fa-star"></i> Yes (Annex G)</td>
                            <td class="excellent">Yes</td>
                            <td class="excellent">Yes</td>
                            <td class="good">Yes (welds)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="comparison-note">
                <i class="fas fa-info-circle"></i>
                <p><strong>Best Practice Strategy:</strong> Use MFL to screen and map the entire floor, then perform localized UT thickness verification at flagged zones (and selected “sound” zones) for validation and acceptance calculations. This approach improves coverage and controls inspection time.</p>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">MFL APPLICATIONS</span>
                <h2>Tank Types & Industries We Serve</h2>
                <p>MFL floor screening for crude, products, chemicals, and utility storage under API 653 integrity programs</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="crude">Crude Oil Tanks</button>
                    <button class="tab-btn" data-tab="product">Refined Products</button>
                    <button class="tab-btn" data-tab="chemical">Chemical Storage</button>
                    <button class="tab-btn" data-tab="water">Water Tanks</button>
                </div>

                <div class="tabs-content">
                    <!-- Crude Oil Tanks Tab -->
                    <div class="tab-panel active" id="crude">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-crude-oil-tank.jpg" alt="Crude Oil Tank MFL Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Crude Oil Storage Tank Inspection</h3>
                                <p>MFL is highly effective for locating water-bottom and annular-ring corrosion zones common in crude storage service, helping prioritize repair scope and UT verification.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Upstream storage and terminals</li>
                                    <li><i class="fas fa-check"></i> Pipeline and refinery crude tanks</li>
                                    <li><i class="fas fa-check"></i> Floating roof and fixed roof tanks</li>
                                    <li><i class="fas fa-check"></i> Annular ring critical zone screening</li>
                                    <li><i class="fas fa-check"></i> MIC and water-bottom driven corrosion programs</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">EEMUA 159</span>
                                    <span class="standard-tag">NFPA 30</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Refined Products Tab -->
                    <div class="tab-panel" id="product">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-product-tank.jpg" alt="Refined Product Tank MFL">
                            </div>
                            <div class="tab-text">
                                <h3>Refined Petroleum Product Tanks</h3>
                                <p>Product tanks require strong bottom integrity management to control environmental risk. MFL maps help target repairs and demonstrate inspection coverage with traceable documentation.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Gasoline, diesel, kerosene, jet fuel tanks</li>
                                    <li><i class="fas fa-check"></i> Terminal distribution storage</li>
                                    <li><i class="fas fa-check"></i> Blending and additive tanks (as applicable)</li>
                                    <li><i class="fas fa-check"></i> High-consequence environmental locations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">NFPA 30</span>
                                    <span class="standard-tag">Site Compliance Programs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chemical Storage Tab -->
                    <div class="tab-panel" id="chemical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-chemical-tank.jpg" alt="Chemical Tank MFL Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Petrochemical & Chemical Process Tanks</h3>
                                <p>Where corrosion mechanisms are aggressive or variable, floor-wide screening helps identify localized hot spots and improves repair prioritization before leakage risk increases.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Petrochemical feedstock and intermediate tanks</li>
                                    <li><i class="fas fa-check"></i> Contaminant-driven corrosion scenarios</li>
                                    <li><i class="fas fa-check"></i> Tanks with historical bottom repairs</li>
                                    <li><i class="fas fa-check"></i> RBI-driven programs and interval optimization support</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 580/581</span>
                                    <span class="standard-tag">API 652 (as applicable)</span>
                                    <span class="standard-tag">Site Specs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Water Tanks Tab -->
                    <div class="tab-panel" id="water">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/mfl-water-tank.jpg" alt="Water Tank MFL Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial & Firewater Storage Tanks</h3>
                                <p>Utility and firewater tanks require dependable integrity for operational continuity and emergency readiness. MFL screening supports planning for repair and replacement without relying only on limited spot checks.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Firewater reserve tanks (industrial facilities)</li>
                                    <li><i class="fas fa-check"></i> Process/utility water tanks</li>
                                    <li><i class="fas fa-check"></i> MIC-prone water service conditions</li>
                                    <li><i class="fas fa-check"></i> Tanks with settlement or foundation concerns (screening support)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NFPA 25</span>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">Owner Specs</span>
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
                <h2>Our MFL Tank Floor Inspection Capabilities</h2>
                <p>Robotic scanning, mapped outputs, and UT validation aligned to project and API 653 requirements</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-horizontal"></i>
                        <h3>Tank Size Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Tank Types:</span> Atmospheric fixed roof / floating roof (application dependent)</li>
                        <li><span class="cap-label">Diameter Range:</span> Project dependent (small to large tanks)</li>
                        <li><span class="cap-label">Floor Area:</span> Suitable for large-area scanning programs</li>
                        <li><span class="cap-label">Foundation Types:</span> Ring wall / slab / compacted earth (as applicable)</li>
                        <li><span class="cap-label">Access Constraints:</span> Columns, sumps, and appurtenances evaluated in planning</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-layer-group"></i>
                        <h3>Plate & Surface Considerations</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Material:</span> Ferromagnetic steels (carbon steel)</li>
                        <li><span class="cap-label">Thickness:</span> Common tank bottom plate ranges (application dependent)</li>
                        <li><span class="cap-label">Coatings:</span> Thin coatings may be workable; thick coatings can affect response</li>
                        <li><span class="cap-label">Surface Condition:</span> Floor must be accessible and suitable for scanner travel</li>
                        <li><span class="cap-label">Limitations:</span> Non-magnetic materials not suitable for MFL</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-bullseye"></i>
                        <h3>Detection & Output</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Detects:</span> Localized pitting, generalized thinning, corrosion clusters</li>
                        <li><span class="cap-label">Output:</span> Mapped screening results + ranked suspect zones</li>
                        <li><span class="cap-label">Validation:</span> UT verification at flagged zones and selected baseline points</li>
                        <li><span class="cap-label">Deliverables:</span> Floor maps, findings register, UT correlation table</li>
                        <li><span class="cap-label">Acceptance:</span> Final decisions based on applicable criteria + verified thickness</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-robot"></i>
                        <h3>Scanner Equipment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Platforms:</span> Robotic/encoded MFL scanners (system dependent)</li>
                        <li><span class="cap-label">Sensors:</span> Multi-channel sensor arrays</li>
                        <li><span class="cap-label">Navigation:</span> Encoder/laser guidance options (system dependent)</li>
                        <li><span class="cap-label">Quality Control:</span> Calibration/verification checks per procedure</li>
                        <li><span class="cap-label">Support:</span> UT verification tools and qualified technicians</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-chart-area"></i>
                        <h3>Data Analysis</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Maps:</span> Color-coded corrosion severity distribution</li>
                        <li><span class="cap-label">Tables:</span> Indication location references and severity notes</li>
                        <li><span class="cap-label">Trend Support:</span> Comparison vs previous scans (when available)</li>
                        <li><span class="cap-label">Integration:</span> Outputs can be aligned to drawings and repair planning</li>
                        <li><span class="cap-label">Review:</span> Suitable for client/third-party review</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-calendar-check"></i>
                        <h3>Service Delivery</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Mobilization:</span> As per project schedule and site readiness</li>
                        <li><span class="cap-label">Inspection Duration:</span> Tank-size and access dependent</li>
                        <li><span class="cap-label">Preliminary Findings:</span> Can be issued quickly for repair planning</li>
                        <li><span class="cap-label">Final Report:</span> Delivered as per agreed turnaround</li>
                        <li><span class="cap-label">Data Retention:</span> Per client/project requirements</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION PROCEDURE ===================== -->
    <section class="procedure-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION WORKFLOW</span>
                <h2>MFL Tank Floor Inspection Procedure</h2>
                <p>Structured workflow aligned to API 653 Annex G practices and project requirements</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Planning & Feasibility</h3>
                        <p>Review drawings, history, prior repairs, and known corrosion mechanisms. Define scan coverage, access constraints, and UT verification plan. Confirm safety and permit requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan & Safety/Permit Requirements
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Tank Preparation (As Required)</h3>
                        <p>Prepare the tank floor for scanner travel (cleaning level depends on sludge/debris and coating condition). Gas freeing, isolation, and access controls are managed per site and regulatory requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Site Readiness Checklist
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Scanner Setup & Calibration</h3>
                        <p>Deploy the scanner, verify sensor function, and perform calibration/verification using reference standards per procedure. Confirm navigation/encoding and data quality settings.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Calibration & Verification Records
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Floor Scanning</h3>
                        <p>Execute the scan plan (raster/spiral patterns as applicable) across accessible floor areas including critical zones (annular ring, water-bottom zones, around appurtenances). Monitor data quality during acquisition.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Recorded Scan Dataset
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Analysis, Mapping & Ranking</h3>
                        <p>Process signals, generate floor maps, and create a ranked findings register. Identify locations requiring UT verification and potential repair planning focus.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Preliminary Floor Map + Findings Register
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>UT Verification</h3>
                        <p>Perform UT thickness checks at selected MFL-flagged zones and validation points, aligned to API 653 Annex G and project requirements. Use UT results for final acceptance and repair sizing decisions.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> UT Validation & Correlation Summary
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">7</div>
                    <div class="timeline-content">
                        <h3>Final Reporting & Recommendations</h3>
                        <p>Issue the final report package including scan coverage, maps, findings, UT verification results, and recommended next actions (repair, monitor, re-scan interval, and complementary NDT where needed).</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Final API 653 Aligned MFL Report Package
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Certifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/api-653.png" alt="API 653">
                        <span>API 653 Support</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                        <span>ISO 9001:2015</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                        <span>ASNT Level III Support</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/nace.png" alt="NACE">
                        <span>Corrosion Expertise</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/irisndt.png" alt="IRISNDT">
                        <span>Scanner Operator Qualification</span>
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
                <h2>Your MFL Tank Floor Inspection Partner</h2>
                <p>Practical tank integrity experience, robust scanning workflows, and reports designed for repair planning and audit readiness</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Robotic Scanning Capability</h3>
                    <p>Mechanized/robotic scanning options help improve coverage consistency and reduce manual effort—especially valuable on large floors and tight schedules.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Team</h3>
                    <p>Inspection personnel with tank-floor inspection experience and technical oversight to support planning, interpretation, UT verification, and reporting.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-oil-can"></i>
                    </div>
                    <h3>Tank Integrity Focus</h3>
                    <p>We focus on actionable outputs: where corrosion is concentrated, what to verify with UT, and how to prioritize repairs to reduce leak risk.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety-Led Execution</h3>
                    <p>Structured planning, permit discipline, and minimized exposure approach. Where tank entry is required, it is managed under site and regulatory controls.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Responsive Delivery</h3>
                    <p>Efficient scanning and reporting to support turnaround decision points, repair planning, and closeout documentation.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Turnkey Support</h3>
                    <p>Optional follow-up support including UT thickness verification, PAUT for weld zones, and integrity program planning aligned with RBI and API 653 requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>MFL Tank Floor Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does the tank need to be emptied for MFL inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>In most cases, MFL floor scanning requires the floor to be accessible for scanner travel, which typically means the tank is taken out of service and prepared per site safety requirements. Preparation level depends on sludge, debris, and coating condition. We confirm feasibility and preparation needs during planning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is MFL compared to UT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>MFL is a screening and mapping method that identifies and ranks metal-loss zones across the floor. UT provides direct thickness measurement at specific points. Best practice is to use MFL for full-floor screening and perform targeted UT verification at flagged zones (and validation points) for final thickness values and acceptance decisions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can MFL detect underside (soil-side) corrosion?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. Because MFL responds to metal loss through the plate thickness, it can detect corrosion originating from either surface. Where it is important to confirm which surface is affected, we recommend complementary verification methods and visual/UT confirmation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What conditions can interfere with MFL scanning?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Heavy sludge/debris, thick internal coatings, severe floor distortion, and inaccessible areas around structures can reduce scanner travel or affect interpretation. We evaluate constraints during feasibility review and define how coverage and UT verification will be handled.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is MFL accepted by API 653?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. API 653 Annex G provides requirements and guidance for MFL examination of tank bottoms. Reporting and validation (including UT verification) are structured to align with Annex G and project specifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if MFL identifies significant corrosion?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Flagged locations are verified with UT to obtain exact remaining thickness for engineering decisions. Repair options may include localized plate replacement, insert plates/patches, overlays, or wider repair programs depending on extent and acceptance criteria.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should tank floors be scanned?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Intervals depend on corrosion rate, service, foundation condition, CP effectiveness, and history. Many operators use baseline scans and periodic re-scans to trend corrosion and optimize API 653 intervals under RBI programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Get Floor-Wide Corrosion Visibility—Then Verify What Matters</h2>
                <p>Request an API 653 aligned MFL tank floor inspection plan with mapped results and targeted UT verification</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request MFL Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Feasibility & Coverage Review</span>
                    <span><i class="fas fa-check"></i> Mapped Deliverables</span>
                    <span><i class="fas fa-check"></i> UT Verification Included</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Tank Inspection Services</h2>
                <p>Complete storage tank integrity support—from screening to confirmation and repair planning</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Thickness</h3>
                    <p>Targeted UT verification and shell/roof thickness surveys</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Phased array inspection for shell welds and nozzle attachments</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Inspection</h3>
                    <p>Internal/external visual examination support and documentation</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Remote Visual (RVI)</h3>
                    <p>Videoscope inspection support for restricted or complex areas</p>
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