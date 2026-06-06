<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Alternating Current Field Measurement (ACFM) Inspection Services | Alpha Sonix NDT Solutions";
$meta_description = "ACFM crack detection and sizing for welds and steel structures—inspect through paint/coatings with minimal surface preparation. Reliable electromagnetic testing for offshore, marine, pipelines and industrial assets with traceable reporting.";
$meta_keywords = "ACFM inspection, alternating current field measurement, crack detection, weld toe crack inspection, inspection through coatings, offshore NDT, marine NDT, pipeline weld inspection, electromagnetic crack sizing, Bx Bz ACFM";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/alternating-current-field-measurement.php";
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
    <meta property="og:image" content="/www/assets/images/services/acfm-inspection-og.jpg">

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
            "serviceType": "Alternating Current Field Measurement (ACFM) Inspection",
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
            "description": "ACFM inspection for crack detection and sizing in welded steel structures, pipelines and offshore assets. Capable of inspection through coatings with minimal surface preparation and produces recorded, traceable results."
        }
    </script>
</head>

<body>
<?php include $base . '/includes/top-bar.php'; ?>
<?php include $base . '/includes/header.php'; ?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/ACFM/acfm1.png');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Advanced NDT Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>ACFM</span>
            </div>
            <h1 class="page-title">Alternating Current Field Measurement (ACFM)</h1>
            <p class="page-subtitle">Electromagnetic crack detection and sizing for welds and steel structures—effective through many coatings and in challenging offshore/marine environments with recorded, reviewable results</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-shield-alt"></i> Minimal Surface Prep</span>
                <span class="badge"><i class="fas fa-layer-group"></i> Through‑Coating Capability*</span>
                <span class="badge"><i class="fas fa-ruler-combined"></i> Crack Length & Depth Sizing*</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-paint-roller"></i></div>
                <h3>Inspect Through Coatings*</h3>
                <p>Detect relevant crack-like indications through many paint/coating systems—reducing coating removal and restoration work.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>Surface‑Breaking Crack Focus</h3>
                <p>Strong capability for weld toe and surface‑breaking fatigue cracks on steel structures, pipelines, risers and deck components.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-ruler-horizontal"></i></div>
                <h3>Measured Sizing Outputs*</h3>
                <p>Provides estimated crack length and depth based on field disturbance signals (Bx/Bz), suitable for prioritisation and ECA inputs where applicable.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-anchor"></i></div>
                <h3>Offshore / Marine Ready</h3>
                <p>Well suited for rope access, splash zone, and underwater work (diver/ROV configurations) where traditional PT/MPI becomes difficult and expensive.</p>
            </div>
        </div>
        <p style="margin-top:12px; font-size:0.95em; opacity:0.9;">
            *Capability depends on coating thickness/type, surface condition, material, and procedure qualification.
        </p>
    </div>
</section>

<!-- ===================== WHAT IS ACFM ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">ELECTROMAGNETIC CRACK DETECTION</span>
                <h2>What is Alternating Current Field Measurement (ACFM)?</h2>

                <p class="lead">ACFM is an electromagnetic inspection technique used to detect and size surface‑breaking cracks by measuring disturbances in a controlled alternating current field at the surface of a conductive component. It is widely applied to weld inspection—especially for weld toe fatigue cracking—because it can often be performed through coatings with minimal surface preparation and provides recorded, repeatable results.</p>

                <p>In a sound area, the induced field is stable and uniform. When a crack interrupts the current flow, the field changes in a characteristic way. ACFM probes measure the magnetic field components (commonly expressed as <strong>Bx</strong> and <strong>Bz</strong>). Software analysis uses these responses to estimate crack length and depth and to help distinguish crack-like indications from geometry changes.</p>

                <p>ACFM is not intended to replace volumetric ultrasonic examination where through‑thickness characterization is required. Instead, it is commonly used to (1) quickly screen welds and structural connections, (2) size and rank detected cracks for repair prioritisation, and (3) support repeat inspections for crack growth monitoring.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Reduced Surface Preparation</strong>
                            <p>Often avoids extensive coating removal and re-coating work (subject to coating thickness/type and procedure).</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Recorded, Reviewable Data</strong>
                            <p>Digital datasets support independent review, comparison across inspections, and asset integrity documentation.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Crack Sizing Outputs*</strong>
                            <p>Provides estimated crack depth/length for prioritisation and engineering assessment where applicable.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Suitable for Challenging Environments</strong>
                            <p>Commonly used in offshore, marine, and industrial sites where conventional PT/MPI preparation is time-consuming and costly.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Practical benefit for coated assets:</strong>
                        <p>ACFM can significantly reduce the total inspection scope by limiting coating removal to only the locations where repairs are required—helping shorten shutdown windows and reduce re-coating costs, especially on offshore structures and painted steelwork.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Schedule ACFM Inspection</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/services/acfm-probe-operation.jpg" alt="ACFM probe operation for crack detection">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>ACFM probe scanning weld region; characteristic field disturbance indicates crack-like response.</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">Digital</span>
                        <span class="stat-label">Recorded Data</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">Coated*</span>
                        <span class="stat-label">Inspection Options</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">Offshore</span>
                        <span class="stat-label">Use Proven</span>
                    </div>
                </div>

                <div class="principle-diagram">
                    <h4><i class="fas fa-project-diagram"></i> ACFM Concept</h4>
                    <ul class="principle-list">
                        <li><strong>1.</strong> Controlled AC field induced at surface</li>
                        <li><strong>2.</strong> Crack interrupts current flow</li>
                        <li><strong>3.</strong> Bx/Bz field response changes</li>
                        <li><strong>4.</strong> Signal processed for sizing</li>
                        <li><strong>5.</strong> Results logged and reported</li>
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
            <span class="section-label">WHY CHOOSE ACFM</span>
            <h2>Key Advantages of ACFM Inspection</h2>
            <p>Reduced preparation, measurable outputs, and strong suitability for offshore and coated steel assets</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-ban"></i></div>
                <h3>Less Coating Removal</h3>
                <p>ACFM can often be performed through paint/coatings, reducing time spent on blasting/grinding and post‑inspection restoration. This is frequently a major cost and schedule advantage in offshore and marine inspection campaigns.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-ruler-combined"></i></div>
                <h3>Crack Sizing for Prioritisation*</h3>
                <p>Unlike PT/MPI (primarily qualitative), ACFM provides estimated crack depth/length outputs that help prioritise repairs and support engineering assessment workflows (subject to procedure and application limits).</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-layer-group"></i></div>
                <h3>Useful on Weld Toe Fatigue</h3>
                <p>Highly applicable to weld toe fatigue cracking in structural welds, tubular joints, brackets, attachments, and splash‑zone components where repeated loading drives crack initiation.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-tint-slash"></i></div>
                <h3>Dry Method (Low Consumables)</h3>
                <p>No penetrant chemicals or magnetic particles are required, simplifying logistics and waste handling—especially valuable in environmentally sensitive or offshore environments.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-water"></i></div>
                <h3>Underwater Capability (As Applicable)</h3>
                <p>ACFM is commonly used for diver/ROV inspections on subsea components where PT is not possible and MPI preparation is challenging. Method selection depends on access and project specification.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-chart-line"></i></div>
                <h3>Repeat Inspections & Trending</h3>
                <p>Recorded data and sizing outputs support repeatability and crack growth monitoring when the same locations are re-inspected under a defined program and consistent procedures.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ACFM vs OTHER METHODS ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">COMPARATIVE ANALYSIS</span>
            <h2>ACFM vs. Traditional Crack Detection Methods</h2>
            <p>Select the method based on coating condition, required sizing, and access constraints</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                <tr>
                    <th>Parameter</th>
                    <th><i class="fas fa-wave-square"></i> ACFM</th>
                    <th><i class="fas fa-magnet"></i> MPI</th>
                    <th><i class="fas fa-tint"></i> Liquid Penetrant (PT)</th>
                    <th><i class="fas fa-signal"></i> UT (PAUT/TOFD/Conventional)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>Surface Preparation</strong></td>
                    <td class="excellent"><i class="fas fa-star"></i> Low / minimal*</td>
                    <td class="poor">High (bare metal required)</td>
                    <td class="poor">Moderate to high (clean, dry surface)</td>
                    <td class="good">Low to moderate (coupling/surface access)</td>
                </tr>
                <tr>
                    <td><strong>Through‑Coating</strong></td>
                    <td class="excellent"><i class="fas fa-star"></i> Yes*</td>
                    <td class="poor">No</td>
                    <td class="poor">No</td>
                    <td class="average">Limited / depends on technique</td>
                </tr>
                <tr>
                    <td><strong>Crack Sizing</strong></td>
                    <td class="good">Estimated depth & length*</td>
                    <td class="poor">Qualitative</td>
                    <td class="poor">Qualitative</td>
                    <td class="excellent"><i class="fas fa-star"></i> Strong (procedure dependent)</td>
                </tr>
                <tr>
                    <td><strong>Subsurface Capability</strong></td>
                    <td class="average">Near‑surface only*</td>
                    <td class="poor">Surface only</td>
                    <td class="poor">Surface only</td>
                    <td class="excellent"><i class="fas fa-star"></i> Volumetric</td>
                </tr>
                <tr>
                    <td><strong>Material</strong></td>
                    <td class="excellent"><i class="fas fa-star"></i> Best on steel</td>
                    <td class="excellent">Ferromagnetic only</td>
                    <td class="excellent">Broad (many metals)</td>
                    <td class="excellent">Broad (many materials)</td>
                </tr>
                <tr>
                    <td><strong>Underwater Use</strong></td>
                    <td class="excellent"><i class="fas fa-star"></i> Yes (as applicable)</td>
                    <td class="average">Possible (wet MPI) but limited</td>
                    <td class="poor">No</td>
                    <td class="excellent">Yes (with coupling)</td>
                </tr>
                <tr>
                    <td><strong>Best Fit</strong></td>
                    <td>Coated welds, offshore, fatigue monitoring</td>
                    <td>Bare steel QC and high sensitivity</td>
                    <td>Non‑ferrous surface cracks</td>
                    <td>Sizing, volumetric inspection, acceptance</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Selection guidance:</strong> Use ACFM when coating removal is impractical or expensive, and when recorded sizing outputs are useful for prioritisation or monitoring. Use MPI/PT when maximum surface crack sensitivity is required on prepared surfaces. Use UT (PAUT/TOFD) when volumetric coverage and code-based sizing/acceptance are required. Many projects combine ACFM screening with targeted UT or MPI confirmation where necessary.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ACFM APPLICATIONS</span>
            <h2>Industries & Critical Structures We Inspect</h2>
            <p>ACFM is widely applied wherever fatigue cracking and coated steelwork create inspection challenges</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="offshore">Offshore Platforms</button>
                <button class="tab-btn" data-tab="pipeline">Pipelines & Risers</button>
                <button class="tab-btn" data-tab="marine">Marine Vessels</button>
                <button class="tab-btn" data-tab="industrial">Industrial Structures</button>
            </div>

            <div class="tabs-content">
                <!-- Offshore Platforms Tab -->
                <div class="tab-panel active" id="offshore">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/acfm-offshore-platform.jpg" alt="Offshore ACFM inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Structural Integrity</h3>
                            <p>ACFM supports crack detection and monitoring on coated offshore structural nodes and welded attachments where fatigue is a dominant mechanism. The method reduces coating disturbance, improves access efficiency, and provides recorded inspection results.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Jacket tubular joints (brace/chord intersections)</li>
                                <li><i class="fas fa-check"></i> Deck support welds, brackets, stiffeners</li>
                                <li><i class="fas fa-check"></i> Riser clamps, J‑tubes, supports</li>
                                <li><i class="fas fa-check"></i> Helideck support welds and frames</li>
                                <li><i class="fas fa-check"></i> Splash‑zone weld toe crack screening</li>
                                <li><i class="fas fa-check"></i> Subsea structural inspection (diver/ROV as applicable)</li>
                                <li><i class="fas fa-check"></i> Mooring/padeye attachments (scope dependent)</li>
                                <li><i class="fas fa-check"></i> Life‑extension monitoring programs</li>
                            </ul>

                            <div class="standards">
                                <strong>Common References:</strong>
                                <span class="standard-tag">API RP 2A</span>
                                <span class="standard-tag">ISO 19902</span>
                                <span class="standard-tag">DNV (program)</span>
                                <span class="standard-tag">BS 7910 (ECA)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pipelines & Risers Tab -->
                <div class="tab-panel" id="pipeline">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/acfm-pipeline.jpg" alt="Pipeline ACFM inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Pipelines, Risers & Welded Attachments</h3>
                            <p>ACFM is applied to crack screening on accessible weld regions such as riser connections, tie-ins, supports and repair areas—particularly when coatings and access constraints make conventional surface methods expensive.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Riser top connections and clamps</li>
                                <li><i class="fas fa-check"></i> Hot tap and branch connection weld toes (scope dependent)</li>
                                <li><i class="fas fa-check"></i> Repair sleeve/encirclement weld checks</li>
                                <li><i class="fas fa-check"></i> Coated girth weld screening (access dependent)</li>
                                <li><i class="fas fa-check"></i> Fatigue-prone zones near supports and vibration points</li>
                                <li><i class="fas fa-check"></i> Integrity dig support (screen then confirm as needed)</li>
                                <li><i class="fas fa-check"></i> Follow-up monitoring of known cracks</li>
                                <li><i class="fas fa-check"></i> ECA data support (where applicable)</li>
                            </ul>

                            <div class="standards">
                                <strong>Common References:</strong>
                                <span class="standard-tag">API 1104</span>
                                <span class="standard-tag">ASME B31.4/B31.8</span>
                                <span class="standard-tag">DNV (program)</span>
                                <span class="standard-tag">API 579-1 (FFS)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marine Vessels Tab -->
                <div class="tab-panel" id="marine">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/acfm-ship-hull.jpg" alt="Marine vessel ACFM inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Marine Vessel & Ship Hull Inspection</h3>
                            <p>ACFM supports crack inspection of painted hull structures, hatch corners, deck attachments and internal structural welds. In-water inspection may be possible for suitable locations, subject to class rules and access planning.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Hull/deck structural connections (scope dependent)</li>
                                <li><i class="fas fa-check"></i> Hatch corners and stress concentration areas</li>
                                <li><i class="fas fa-check"></i> Bulkhead penetrations and welded attachments</li>
                                <li><i class="fas fa-check"></i> Ballast tank internal weld inspections (access controlled)</li>
                                <li><i class="fas fa-check"></i> Offshore vessel crane pedestals and reinforcements</li>
                                <li><i class="fas fa-check"></i> In-water surveys (diver/ROV as applicable)</li>
                                <li><i class="fas fa-check"></i> Pre-drydock defect mapping support</li>
                                <li><i class="fas fa-check"></i> Trend monitoring between surveys</li>
                            </ul>

                            <div class="standards">
                                <strong>Common References:</strong>
                                <span class="standard-tag">IACS / Class Rules</span>
                                <span class="standard-tag">ABS</span>
                                <span class="standard-tag">DNV</span>
                                <span class="standard-tag">Lloyd’s Register</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industrial Structures Tab -->
                <div class="tab-panel" id="industrial">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/services/acfm-industrial.jpg" alt="Industrial structure ACFM inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Industrial Plants & Infrastructure</h3>
                            <p>ACFM is useful on painted steelwork, structural welds, supports and attachments where fatigue or cracking is suspected and surface preparation is disruptive—such as fireproofed/painted structures in refineries and heavy industry.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Pipe racks, supports, bracing connections</li>
                                <li><i class="fas fa-check"></i> Vessel supports (skirts, saddles) – accessible weld toes</li>
                                <li><i class="fas fa-check"></i> Flare stacks and platform weld attachments</li>
                                <li><i class="fas fa-check"></i> Storage tank attachments (scope dependent)</li>
                                <li><i class="fas fa-check"></i> Crane runway beams and industrial structures</li>
                                <li><i class="fas fa-check"></i> Bridges/painted steelwork (where suitable)</li>
                                <li><i class="fas fa-check"></i> Monitoring and repair prioritisation programs</li>
                                <li><i class="fas fa-check"></i> Follow-up with UT/MPI where required</li>
                            </ul>

                            <div class="standards">
                                <strong>Common References:</strong>
                                <span class="standard-tag">API 579-1</span>
                                <span class="standard-tag">ASME B31.3 (program)</span>
                                <span class="standard-tag">AWS D1.1</span>
                                <span class="standard-tag">BS 7910</span>
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
            <h2>Our ACFM Inspection Capabilities</h2>
            <p>Capabilities depend on coating condition, material, surface profile and procedure qualification</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-layer-group"></i>
                    <h3>Material & Coating</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Best On:</span> Carbon steel and many ferromagnetic steels</li>
                    <li><span class="cap-label">Coatings:</span> Many paint/epoxy systems (case dependent)</li>
                    <li><span class="cap-label">Coating Thickness:</span> Assessed per project; thicker coatings reduce sensitivity</li>
                    <li><span class="cap-label">Surface:</span> As-found weld profile acceptable in many cases</li>
                    <li><span class="cap-label">Environment:</span> Offshore/marine suitable</li>
                    <li><span class="cap-label">Limits:</span> Heavy lift-off / severe roughness may require local preparation</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-search-plus"></i>
                    <h3>Detection & Sizing (Typical)</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Crack Type:</span> Primarily surface-breaking cracks</li>
                    <li><span class="cap-label">Depth/Length:</span> Estimated from Bx/Bz response*</li>
                    <li><span class="cap-label">Accuracy:</span> Application and procedure dependent*</li>
                    <li><span class="cap-label">Orientation:</span> Best for cracks perpendicular to scan direction</li>
                    <li><span class="cap-label">Subsurface:</span> Limited near-surface capability*</li>
                    <li><span class="cap-label">Reporting:</span> Location, size estimate, severity ranking</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-cogs"></i>
                    <h3>Equipment & Probes</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Systems:</span> Industry-recognized ACFM platforms (as available)</li>
                    <li><span class="cap-label">Probe Types:</span> Pencil probes, weld toe probes, array probes</li>
                    <li><span class="cap-label">Scanning:</span> Manual and scanner-assisted options</li>
                    <li><span class="cap-label">Data:</span> Recorded datasets for review</li>
                    <li><span class="cap-label">Underwater:</span> Diver/ROV configurations (project based)</li>
                    <li><span class="cap-label">Documentation:</span> Photo + data traceability</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-chart-area"></i>
                    <h3>Engineering Support</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Outputs:</span> Crack list with size estimates and maps</li>
                    <li><span class="cap-label">ECA Inputs:</span> Provide sizing data for BS 7910 / API 579 (by scope)</li>
                    <li><span class="cap-label">Trending:</span> Repeat inspections for growth monitoring</li>
                    <li><span class="cap-label">Follow-up:</span> Recommend PAUT/TOFD/MPI where needed</li>
                    <li><span class="cap-label">Archive:</span> Digital retention as agreed</li>
                    <li><span class="cap-label">Stakeholders:</span> Support client/third-party review</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-calendar-check"></i>
                    <h3>Service Delivery</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Mobilization:</span> Project dependent (onshore/offshore)</li>
                    <li><span class="cap-label">Productivity:</span> Depends on access, weld count and scanning plan</li>
                    <li><span class="cap-label">Preliminary:</span> Same-day summary for critical findings (as agreed)</li>
                    <li><span class="cap-label">Final Report:</span> Typically 5–7 days (scope dependent)</li>
                    <li><span class="cap-label">Access:</span> Rope access / scaffolding / diver / ROV (as applicable)</li>
                    <li><span class="cap-label">Emergency:</span> Failure investigation support available</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-exclamation-circle"></i>
                    <h3>Key Limitations</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Coating:</span> Very thick or conductive coatings can reduce sensitivity</li>
                    <li><span class="cap-label">Material:</span> Best on ferromagnetic steels; non-ferrous performance is case dependent</li>
                    <li><span class="cap-label">Crack Type:</span> Limited for deep subsurface flaws—UT recommended</li>
                    <li><span class="cap-label">Geometry:</span> Complex geometry may require multiple scan directions</li>
                    <li><span class="cap-label">Surface:</span> Severe roughness may need local cleaning</li>
                    <li><span class="cap-label">Verification:</span> Confirmatory NDT may be required by specification</li>
                </ul>
            </div>
        </div>

        <p style="margin-top:12px; font-size:0.95em; opacity:0.9;">
            *Sizing and detection performance depends on application, crack morphology, coating lift-off, scan direction, and qualified procedure.
        </p>
    </div>
</section>

<!-- ===================== INSPECTION PROCEDURE ===================== -->
<section class="procedure-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">INSPECTION WORKFLOW</span>
            <h2>ACFM Inspection Procedure</h2>
            <p>A practical, traceable workflow from planning to reporting</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Scope & Risk Review</h3>
                    <p>Review drawings, weld maps, operating history and likely damage mechanisms (fatigue, vibration, SCC concerns). Identify priority welds and define acceptance/repair criteria and reporting needs.</p>
                    <div class="timeline-deliverable"><strong>Deliverable:</strong> Inspection plan & weld list</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Access & Surface Assessment</h3>
                    <p>Confirm access method (rope access, scaffold, diver/ROV) and evaluate coating/surface condition. Measure coating thickness where needed and confirm feasibility for through-coating inspection.</p>
                    <div class="timeline-deliverable"><strong>Deliverable:</strong> Access readiness + surface notes</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>Calibration & System Checks</h3>
                    <p>Perform instrument verification, lift‑off checks and reference scans per procedure. Confirm stable baseline response and verify probe functionality before production scanning.</p>
                    <div class="timeline-deliverable"><strong>Deliverable:</strong> Calibration/verification record</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>Scanning & Data Capture</h3>
                    <p>Scan weld toes/target zones with controlled probe movement and appropriate scan direction. Capture and store Bx/Bz responses and mark locations of relevant indications.</p>
                    <div class="timeline-deliverable"><strong>Deliverable:</strong> Recorded datasets + indication log</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>Analysis & Sizing</h3>
                    <p>Analyst reviews data to confirm crack-like responses and generate sizing outputs (length/depth estimates) and ranking. Where required by specification, recommend verification using UT/MPI on selected indications.</p>
                    <div class="timeline-deliverable"><strong>Deliverable:</strong> Crack list with size estimates</div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>Reporting & Recommendations</h3>
                    <p>Provide a clear, traceable report: location maps/photos, sizing outputs, severity ranking, and recommended actions (repair/monitor/confirm). Engineering support for ECA can be included by scope.</p>
                    <div class="timeline-deliverable"><strong>Deliverable:</strong> Final ACFM report package</div>
                </div>
            </div>
        </div>

        <div class="certification-showcase">
            <h3>Our Certifications & Accreditations</h3>
            <div class="cert-grid">
                <div class="cert-item"><img src="/www/assets/images/certifications/asnt.png" alt="ASNT"><span>NDT Level II/III</span></div>
                <div class="cert-item"><img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001"><span>ISO 9001:2015</span></div>
                <div class="cert-item"><img src="/www/assets/images/certifications/irata.png" alt="IRATA"><span>Rope Access (as applicable)</span></div>
                <div class="cert-item"><img src="/www/assets/images/certifications/imca.png" alt="IMCA"><span>ROV / Offshore Support (as applicable)</span></div>
                <div class="cert-item"><img src="/www/assets/images/certifications/pcn-acfm.png" alt="PCN ACFM"><span>ACFM Qualification (as applicable)</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHY CHOOSE US ===================== -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">WHY ALPHA SONIX</span>
            <h2>Your ACFM Inspection Partner</h2>
            <p>Competent execution, reliable documentation, and practical recommendations for coated steel assets</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-award"></i></div>
                <h3>Qualified ACFM Capability</h3>
                <p>Personnel qualified for electromagnetic crack inspection under recognised certification schemes (as applicable) with disciplined procedures and traceable reporting.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-anchor"></i></div>
                <h3>Offshore / Marine Experience</h3>
                <p>Support for offshore and marine projects with access planning (rope access, vessel coordination) and documentation suited to integrity management and life-extension programs.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-water"></i></div>
                <h3>Underwater Options (Project Based)</h3>
                <p>Diver/ROV support can be arranged for subsea inspection scopes where ACFM is specified and practical. Configuration depends on depth, access and project requirements.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-layer-group"></i></div>
                <h3>Coating‑Aware Execution</h3>
                <p>We assess coating type/thickness and adjust scanning approach to maintain reliable results. Where coatings exceed feasible lift-off, we recommend targeted prep only where needed.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Engineering Support (By Scope)</h3>
                <p>Support for integrity decision-making using ACFM results, including follow-up recommendations and ECA inputs to BS 7910 / API 579 where required.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-handshake"></i></div>
                <h3>Turnkey NDT Integration</h3>
                <p>When ACFM indicates relevant cracking, we can deploy complementary methods (PAUT/TOFD/UT/MPI/RVI) to confirm and characterize findings per client specification.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>ACFM Inspection Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How does ACFM detect cracks through paint and coatings?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>ACFM induces an electromagnetic field in the conductive substrate (typically steel). Many coatings are non‑conductive and can be “transparent” to the field, allowing detection without full coating removal. Performance depends on coating thickness/type and probe lift‑off; we confirm feasibility during planning and calibration.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can ACFM work on stainless steel or aluminum?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>ACFM is most effective on ferromagnetic steels. Non‑ferromagnetic materials can be challenging depending on conductivity and the damage type. For many stainless/aluminum crack inspections, ECT or PT may be more suitable. We recommend the best method based on your material and coating condition.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How accurate is ACFM for crack depth sizing?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>ACFM provides estimated sizing outputs that are procedure and application dependent. Accuracy is influenced by crack morphology, scan direction, coating lift‑off, and surface condition. Where precise sizing is required for acceptance, we recommend confirmation using TOFD/PAUT or other qualified UT techniques.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Does the surface need to be smooth for ACFM?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>No. ACFM is commonly used on as‑found weld profiles and coated steelwork. Very heavy spatter or severe corrosion may require localized cleaning so the probe can track consistently and maintain stable lift‑off.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can ACFM detect cracks in all orientations?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Sensitivity depends on scan direction relative to crack orientation. For unknown crack orientation, scanning in two directions improves detection reliability. We select scan plans based on expected crack mechanisms (e.g., weld toe fatigue) and geometry.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is ACFM accepted by clients and classification bodies?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>ACFM is widely used in offshore and marine industries and is referenced in international practice documents (project/specification dependent). Acceptance depends on client specifications, procedure qualification, and required verification sampling.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can ACFM be used for crack growth monitoring?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes. ACFM is often used for baseline inspection and repeat monitoring because it produces recorded data and sizing estimates that can be compared across inspections, provided a consistent procedure and location reference is maintained.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How is an ACFM inspection scoped and quoted?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Cost depends on weld count/length, access method (rope access/scaffold/diver/ROV), coating thickness, documentation needs, and whether engineering assessment is required. Share your drawings/weld map and access constraints—we will propose a scope and deliverables.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Detect Cracks Without Unnecessary Coating Removal</h2>
            <p>Use ACFM to screen coated welds quickly, record results digitally, and focus repairs where they are truly needed.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request ACFM Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Through‑coating screening (case dependent)</span>
                <span><i class="fas fa-check"></i> Offshore / marine support</span>
                <span><i class="fas fa-check"></i> Actionable reporting & follow‑up</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Complementary Crack Detection Services</h2>
            <p>Combine techniques for screening, confirmation, sizing and acceptance</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/conventional-ndt/mpi.php" class="related-card">
                <div class="related-icon"><i class="fas fa-magnet"></i></div>
                <h3>Magnetic Particle (MPI)</h3>
                <p>High sensitivity surface crack detection on prepared ferromagnetic surfaces</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-grip-horizontal"></i></div>
                <h3>PAUT</h3>
                <p>Phased array UT for weld characterization and volumetric evaluation</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>TOFD</h3>
                <p>TOFD for accurate through‑wall sizing support (procedure dependent)</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                <div class="related-icon"><i class="fas fa-signal"></i></div>
                <h3>Ultrasonic Testing</h3>
                <p>Conventional UT for subsurface defect detection and verification</p>
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
