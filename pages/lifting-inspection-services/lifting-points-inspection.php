<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Lifting Points & Pad Eye Inspection Services | Load Testing & Certification | Alpha Sonix NDT Solutions";
$meta_description = "Professional lifting point and pad eye inspection, testing, and certification services. Structural integrity assessment, weld examination, proof load testing, and compliance verification per ASME B30.26, EN 1677, DNV 2.7-1, AWS D1.1, and industry standards. Expert third-party inspection for safe rigging operations.";
$meta_keywords = "lifting point inspection, pad eye testing, padeye certification, lift lug inspection, load testing, proof load test, ASME B30.26, EN 1677, DNV 2.7-1, lifting lug NDT, weld inspection, structural integrity, rigging point certification";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/lifting-points-pad-eye-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/lifting-points-og.jpg">

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
            "serviceType": "Lifting Points & Pad Eye Inspection",
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
            "description": "Comprehensive lifting point and pad eye inspection services including structural integrity assessment, weld examination, dimensional verification, NDT, proof load testing, and certification per ASME B30.26, EN 1677, DNV 2.7-1, AWS D1.1 for safe rigging and lifting operations."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/lifting-points-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/lifting-inspection-services/">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Lifting Points & Pad Eye Inspection</span>
                </div>
                <h1 class="page-title">Lifting Points & Pad Eye Inspection</h1>
                <p class="page-subtitle">Independent third-party inspection, load testing, and certification of permanent and temporary lifting points, pad eyes, lug plates, and structural lifting attachments—ensuring critical rigging connections meet design intent, regulatory requirements, and safe working load specifications</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME B30.26 / EN 1677 Aligned</span>
                    <span class="badge"><i class="fas fa-search-plus"></i> 100% NDT Examination</span>
                    <span class="badge"><i class="fas fa-balance-scale"></i> Witnessed Load Testing</span>
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
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Critical Safety Component</h3>
                    <p>Lifting points and pad eyes are load-path-critical connections where failure can result in catastrophic load drops, equipment damage, injuries, or fatalities—requiring rigorous inspection and certification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Multi-Method Examination</h3>
                    <p>Comprehensive assessment combining visual inspection, dimensional verification, weld examination (MT/PT/UT/RT), base metal integrity checks, and structural engineering evaluation for complete confidence.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <h3>Design Verification & Load Testing</h3>
                    <p>Independent review of design calculations, material certifications, fabrication quality, and witnessed proof load testing to verify rated capacity and structural performance under controlled conditions.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Regulatory Compliance Assurance</h3>
                    <p>Certification aligned to ASME B30.26, EN 1677, DNV 2.7-1, AWS D1.1, LOLER, and client specifications with defensible documentation for audits, insurance, and duty-holder obligations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">RIGGING ATTACHMENT INTEGRITY</span>
                    <h2>What is Lifting Point & Pad Eye Inspection?</h2>
                    <p class="lead">Lifting points (also called lift lugs, pad eyes, padeyes, or lug plates) are structural attachments designed to provide secure connection points for rigging equipment—slings, shackles, hooks, and lifting frames. These engineered components transfer lifting loads from the rigging system into the structure being lifted, making them critical load-path elements that must be designed, fabricated, inspected, tested, and certified to ensure safe lifting operations.</p>

                    <p>Lifting point inspection encompasses the complete lifecycle: <strong>design verification</strong> (review of calculations, drawings, material specifications), <strong>fabrication quality surveillance</strong> (material traceability, weld procedure qualification, fit-up inspection), <strong>pre-service commissioning</strong> (100% NDT examination and proof load testing), <strong>periodic in-service inspections</strong> (based on usage, environment, and regulatory requirements), <strong>post-repair assessment</strong> (after welding, grinding, or modification), and <strong>retirement/scrapping decisions</strong> when condition no longer meets acceptance criteria.</p>

                    <p>Our inspection methodology addresses the critical failure modes: <strong>weld cracking</strong> (fatigue, hydrogen-assisted, lack of fusion), <strong>base metal defects</strong> (laminations, inclusions, undercut parent material), <strong>geometric non-conformance</strong> (hole diameter, pin clearance, edge distance, throat thickness), <strong>material substitution or heat treatment issues</strong> (verification via PMI, hardness testing, material certs), <strong>corrosion and wear</strong> (pitting, general loss, fretting, mechanical damage), and <strong>overload indicators</strong> (permanent deformation, yield evidence, cracking patterns). Acceptance criteria are drawn from applicable codes, original design specifications, and competent person engineering judgment.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>100% Weld Examination Requirement</strong>
                                <p>ASME B30.26 and DNV 2.7-1 require complete NDT examination (typically MT or PT, with UT or RT for full-penetration welds) of all lifting point welds before service and after any repair—our inspections meet this critical requirement.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Load Path Verification & Engineering Review</strong>
                                <p>Independent assessment of design calculations, factor of safety (typically ≥3:1 for static lifts per ASME), load distribution, stress concentration management, and compliance with AWS D1.1 structural welding code.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material & Traceability Verification</strong>
                                <p>Confirm material specifications (grade, heat treatment, impact toughness where required), review material test reports (MTRs), and verify traceability through fabrication process to ensure design assumptions are met.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Proof Load Testing & Certification</strong>
                                <p>Witnessed proof load testing (typically 150% of rated capacity for new pad eyes per DNV 2.7-1, or per design specification) with calibrated equipment, deflection monitoring, and formal test certification suitable for regulatory submission.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Critical Safety Note:</strong>
                            <p>Lifting point failures often occur suddenly without warning and can result in total load loss. Independent inspection provides objective evidence of structural integrity, identifies hidden defects before failure, and supports duty-holder compliance with lifting equipment safety regulations (LOLER, OSHA 1926, ASME B30 series).</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection Quote</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/pad-eye-inspection.jpg" alt="Pad eye weld inspection with magnetic particle testing">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Magnetic particle testing of lifting point weld—100% examination per ASME B30.26</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">150%</span>
                            <span class="stat-label">Typical Proof Load (% WLL)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Weld NDT Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">≥3:1</span>
                            <span class="stat-label">Design Safety Factor</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> Inspection Scope Elements</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Design calculation & drawing review</li>
                            <li><strong>2.</strong> Material certification verification</li>
                            <li><strong>3.</strong> Dimensional & geometric checks</li>
                            <li><strong>4.</strong> 100% weld NDT (MT/PT/UT/RT)</li>
                            <li><strong>5.</strong> Base metal integrity assessment</li>
                            <li><strong>6.</strong> Proof load testing (witnessed)</li>
                            <li><strong>7.</strong> Certification & documentation</li>
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
                <span class="section-label">WHY PROFESSIONAL INSPECTION</span>
                <h2>Key Benefits of Lifting Point & Pad Eye Inspection</h2>
                <p>Protect lives, assets, and operations through independent verification and compliance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Life Safety & Catastrophic Failure Prevention</h3>
                    <p>Lifting point failures often result in total load drops with catastrophic consequences—injuries, fatalities, equipment destruction, and environmental damage. Professional inspection identifies critical defects (cracks, incomplete fusion, undercut, material defects) before they cause failure.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Regulatory & Legal Compliance</h3>
                    <p>Meet duty-holder obligations under LOLER (UK), OSHA 1926 Subpart CC (USA), ASME B30.26, and jurisdictional lifting equipment regulations. Independent third-party certification provides defensible evidence of compliance for audits, enforcement, and liability management.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Independent Expert Verification</h3>
                    <p>Third-party inspectors bring objectivity, specialized NDT and structural engineering expertise, and freedom from commercial or operational pressures—supporting unbiased assessment and certification decisions critical for high-consequence lifts.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Hidden Defect Detection</h3>
                    <p>Visual inspection alone cannot detect subsurface weld defects, lack of fusion, hydrogen cracking, laminations, or internal material flaws. NDT methods (MT/PT/UT/RT) reveal conditions invisible to the eye but critical to structural integrity.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Traceable Documentation & Audit Trail</h3>
                    <p>Comprehensive records including design review, material certifications, NDT reports, load test certificates, dimensional verification, and competent person sign-off—supporting audits, insurance requirements, and knowledge transfer across equipment lifecycle.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Risk Reduction & Liability Protection</h3>
                    <p>Independent certification demonstrates due diligence, reduces organizational liability exposure, supports insurance coverage, and provides defensible evidence that reasonable steps were taken to ensure lifting equipment safety and fitness-for-purpose.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== LIFTING POINT TYPES ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">LIFTING POINT CATEGORIES</span>
                <h2>Types of Lifting Points & Pad Eyes We Inspect</h2>
                <p>Comprehensive inspection services for all lifting attachment configurations and applications</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Welded Pad Eyes -->
                    <div class="wave-mode-card">
                        <div class="mode-header electrical">
                            <i class="fas fa-circle-notch"></i>
                            <h3>Welded Pad Eyes & Lug Plates</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Flat plate or formed steel attachments welded to structures, vessels, modules, or equipment to provide lifting points. Most common type for permanent and semi-permanent lifting applications.</p>
                            <p><strong>Critical Inspection Points:</strong> Weld quality and penetration (100% MT/PT required), base metal integrity, edge distance adequacy, hole diameter and tolerance, backing plate (if used), parent metal heat-affected zone, corrosion and fatigue indicators.</p>

                            <div class="mode-advantages">
                                <h4>Typical Configurations:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Single-plate pad eyes (in-plane or out-of-plane loading)</li>
                                    <li><i class="fas fa-check"></i> Double-plate (cheek plate) pad eyes for higher capacity</li>
                                    <li><i class="fas fa-check"></i> Gusseted pad eyes with reinforcement plates</li>
                                    <li><i class="fas fa-check"></i> Trunnion-style lifting lugs (cylindrical boss with hole)</li>
                                    <li><i class="fas fa-check"></i> Multi-hole lug plates for adjustable rigging angles</li>
                                    <li><i class="fas fa-check"></i> Shear-pin equipped pad eyes (overload protection)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Offshore modules, pressure vessels, structural steel, skid-mounted equipment, tanks
                            </div>
                        </div>
                    </div>

                    <!-- Forged/Cast Lifting Points -->
                    <div class="wave-mode-card">
                        <div class="mode-header mechanical">
                            <i class="fas fa-circle"></i>
                            <h3>Forged & Cast Lifting Points</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> One-piece forged or cast lifting points designed for bolted or threaded attachment to structures. Includes eyebolts, swivel hoist rings, and drop-forged D-rings.</p>
                            <p><strong>Critical Inspection Points:</strong> Thread condition and engagement, visual surface examination for cracks and corrosion, dimensional verification (eye diameter, thread pitch), marking/identification verification, load rating confirmation, proof load testing per manufacturer or EN 1677.</p>

                            <div class="mode-advantages">
                                <h4>Typical Configurations:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Shouldered eyebolts (metric and imperial threads)</li>
                                    <li><i class="fas fa-check"></i> Swivel hoist rings (rotating eye for multi-angle loading)</li>
                                    <li><i class="fas fa-check"></i> Side-pull eyebolts (designed for angular loading)</li>
                                    <li><i class="fas fa-check"></i> Drop-forged D-rings and O-rings</li>
                                    <li><i class="fas fa-check"></i> Cast-in lifting inserts (concrete/precast applications)</li>
                                    <li><i class="fas fa-check"></i> Permanently installed hoist rings (machinery attachment)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Machinery, molds, dies, precast concrete, equipment handling, modular components
                            </div>
                        </div>
                    </div>

                    <!-- Structural Lifting Lugs -->
                    <div class="wave-mode-card">
                        <div class="mode-header building">
                            <i class="fas fa-layer-group"></i>
                            <h3>Structural Lifting Lugs & Beam-Integrated Points</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Lifting attachments integral to structural members—fabricated from plate, angle, or channel sections and welded to beams, columns, or trusses as part of structural design.</p>
                            <p><strong>Critical Inspection Points:</strong> Structural weld quality (fillet welds per AWS D1.1), connection to parent member (adequate strength), hole location and bearing surface condition, structural member integrity at connection zone, load path verification, engineering calculations review.</p>

                            <div class="mode-advantages">
                                <h4>Typical Configurations:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Wide-flange beam lifting lugs (top flange attachment)</li>
                                    <li><i class="fas fa-check"></i> Column lifting lugs (temporary erection points)</li>
                                    <li><i class="fas fa-check"></i> Truss chord lifting points</li>
                                    <li><i class="fas fa-check"></i> Frame corner lifting attachments</li>
                                    <li><i class="fas fa-check"></i> Modular building lifting points (multiple coordinated points)</li>
                                    <li><i class="fas fa-check"></i> Temporary works lifting lugs (removal after erection)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Bridge segments, building modules, structural steel erection, precast panels
                            </div>
                        </div>
                    </div>

                    <!-- Marine & Offshore Pad Eyes -->
                    <div class="wave-mode-card">
                        <div class="mode-header process">
                            <i class="fas fa-ship"></i>
                            <h3>Marine & Offshore Certified Lifting Points</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Heavy-duty lifting points designed, fabricated, and certified to stringent offshore and marine standards (DNV 2.7-1, DNV 2.22, ABS, Lloyd's) for subsea equipment, modules, and cargo handling.</p>
                            <p><strong>Critical Inspection Points:</strong> Compliance with classification society rules, 100% UT of full-penetration welds, material impact toughness verification, corrosion protection system (coating) integrity, dimensional tolerances per DNV, proof load testing (150% SWL typical), third-party surveyor witnessing and certification.</p>

                            <div class="mode-advantages">
                                <h4>Typical Configurations:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> DNV 2.7-1 certified offshore container pad eyes</li>
                                    <li><i class="fas fa-check"></i> Subsea equipment lift points (manifolds, templates, trees)</li>
                                    <li><i class="fas fa-check"></i> Heavy-lift vessel rigging points (multi-hundred-ton capacity)</li>
                                    <li><i class="fas fa-check"></i> Topside module main lift points</li>
                                    <li><i class="fas fa-check"></i> Jacket structure lifting padeyes</li>
                                    <li><i class="fas fa-check"></i> Marine cargo securing and lashing points</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Applications:</strong> Offshore platforms, subsea systems, marine construction, vessel cargo handling
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Lifting Point Inspection Scope Selection Guide</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Lifting Point Type</th>
                                <th>Primary NDT Method</th>
                                <th>Load Testing Requirement</th>
                                <th>Key Standards</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Welded Pad Eyes</strong></td>
                                <td>MT/PT (100% welds) + UT (full-pen welds)</td>
                                <td>Proof load 125-150% WLL (new/post-repair)</td>
                                <td>ASME B30.26, AWS D1.1, DNV 2.7-1</td>
                            </tr>
                            <tr>
                                <td><strong>Forged Eyebolts/Rings</strong></td>
                                <td>Visual + PT (if suspect conditions)</td>
                                <td>Per manufacturer or EN 1677 (typically 2x WLL)</td>
                                <td>EN 1677, ASME B30.26, Manufacturer specs</td>
                            </tr>
                            <tr>
                                <td><strong>Structural Lift Lugs</strong></td>
                                <td>MT/PT (fillet welds per AWS D1.1)</td>
                                <td>Per structural engineering assessment</td>
                                <td>AWS D1.1, AISC, ASME B30.26</td>
                            </tr>
                            <tr>
                                <td><strong>Marine/Offshore Points</strong></td>
                                <td>100% UT (full-pen) + MT/PT (all welds)</td>
                                <td>150% SWL witnessed by surveyor (DNV 2.7-1)</td>
                                <td>DNV 2.7-1, DNV 2.22, ABS, Lloyd's</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INDUSTRY APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>From subsea modules to building construction—supporting safe lifting worldwide</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="offshore">Offshore & Marine</button>
                    <button class="tab-btn" data-tab="industrial">Oil & Gas / Petrochemical</button>
                    <button class="tab-btn" data-tab="construction">Construction & Infrastructure</button>
                    <button class="tab-btn" data-tab="manufacturing">Manufacturing & Heavy Industry</button>
                </div>

                <div class="tabs-content">
                    <!-- Offshore & Marine Tab -->
                    <div class="tab-panel active" id="offshore">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/offshore-pad-eye.jpg" alt="Offshore module pad eye inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Offshore & Marine Applications</h3>
                                <p>Offshore and subsea lifting operations demand the highest levels of inspection rigor and certification. Our services support safe installation and maintenance of offshore platforms, subsea infrastructure, and marine construction projects with full compliance to classification society requirements and witnessed certification.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Topside module main lift points (multi-point lifts, 100+ ton capacity)</li>
                                    <li><i class="fas fa-check"></i> Subsea equipment pad eyes (manifolds, PLETs, trees, templates)</li>
                                    <li><i class="fas fa-check"></i> DNV 2.7-1 offshore container and cargo unit lifting points</li>
                                    <li><i class="fas fa-check"></i> Jacket structure and foundation template padeyes</li>
                                    <li><i class="fas fa-check"></i> Drilling rig and platform equipment lift lugs</li>
                                    <li><i class="fas fa-check"></i> FPSO and vessel deck equipment lifting attachments</li>
                                    <li><i class="fas fa-check"></i> Heavy-lift vessel rigging points and seafastening padeyes</li>
                                    <li><i class="fas fa-check"></i> Classification society witnessed testing and certification (DNV, ABS, Lloyd's, Bureau Veritas)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">DNV 2.7-1</span>
                                    <span class="standard-tag">DNV 2.22</span>
                                    <span class="standard-tag">ASME B30.26</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">ABS / Lloyd's</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Oil & Gas Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/industrial-lifting-lug.jpg" alt="Pressure vessel lifting lug inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Oil & Gas / Petrochemical / Refining</h3>
                                <p>Lifting points on pressure vessels, heat exchangers, reactors, columns, and process equipment are critical for safe installation, maintenance, and turnaround operations. Our inspection services support integrity management programs and regulatory compliance for high-consequence equipment.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel and reactor lifting lugs (ASME Section VIII compliance)</li>
                                    <li><i class="fas fa-check"></i> Heat exchanger and condenser bundle lifting points</li>
                                    <li><i class="fas fa-check"></i> Distillation column and tower lift attachments</li>
                                    <li><i class="fas fa-check"></i> Storage tank roof and shell lifting lugs (API 650 considerations)</li>
                                    <li><i class="fas fa-check"></i> Compressor and turbine casing lift points</li>
                                    <li><i class="fas fa-check"></i> Skid-mounted equipment and package unit pad eyes</li>
                                    <li><i class="fas fa-check"></i> Pipeline equipment handling points (spools, valves, flanges)</li>
                                    <li><i class="fas fa-check"></i> Turnaround and maintenance temporary lifting attachments</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.26</span>
                                    <span class="standard-tag">ASME Sec VIII</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">API 650</span>
                                    <span class="standard-tag">Client Specs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Tab -->
                    <div class="tab-panel" id="construction">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/construction-lifting-point.jpg" alt="Structural steel lifting lug">
                            </div>
                            <div class="tab-text">
                                <h3>Construction & Infrastructure Projects</h3>
                                <p>Bridge erection, building construction, precast concrete installation, and infrastructure projects rely on properly designed and certified lifting points for safe handling of structural components. Our services support project safety plans, temporary works engineering, and regulatory compliance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Structural steel beam and column lifting lugs (erection points)</li>
                                    <li><i class="fas fa-check"></i> Bridge segment and girder lift attachments</li>
                                    <li><i class="fas fa-check"></i> Precast concrete panel and beam lifting inserts/embeds</li>
                                    <li><i class="fas fa-check"></i> Modular building and MEP unit lifting points</li>
                                    <li><i class="fas fa-check"></i> Tunnel boring machine (TBM) segment handling points</li>
                                    <li><i class="fas fa-check"></i> Foundation pile and caisson lifting lugs</li>
                                    <li><i class="fas fa-check"></i> Temporary works structures (formwork, falsework, truss systems)</li>
                                    <li><i class="fas fa-check"></i> Tower crane climbing frame and mast section attachments</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.26</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">AISC</span>
                                    <span class="standard-tag">BS 7121</span>
                                    <span class="standard-tag">OSHA 1926</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Manufacturing Tab -->
                    <div class="tab-panel" id="manufacturing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/manufacturing-hoist-ring.jpg" alt="Manufacturing equipment hoist ring">
                            </div>
                            <div class="tab-text">
                                <h3>Manufacturing & Heavy Industry</h3>
                                <p>Steel mills, foundries, aerospace, automotive, shipyards, and heavy equipment manufacturing use lifting points for material handling, assembly operations, and product movement. Our inspection services support production efficiency, worker safety, and quality assurance programs.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel mill slab, coil, and bloom handling equipment lugs</li>
                                    <li><i class="fas fa-check"></i> Foundry casting and mold handling points</li>
                                    <li><i class="fas fa-check"></i> Shipyard block erection and vessel section lift lugs</li>
                                    <li><i class="fas fa-check"></i> Aerospace component assembly fixtures and tooling</li>
                                    <li><i class="fas fa-check"></i> Automotive press and die handling attachments</li>
                                    <li><i class="fas fa-check"></i> Mining equipment (haul truck bodies, excavator components)</li>
                                    <li><i class="fas fa-check"></i> Paper mill roll and machinery lifting points</li>
                                    <li><i class="fas fa-check"></i> Wind turbine component handling (nacelle, tower sections, blades)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.26</span>
                                    <span class="standard-tag">EN 1677</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">OSHA / HSE</span>
                                    <span class="standard-tag">ISO 9001</span>
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
                <span class="section-label">TECHNICAL CAPABILITIES</span>
                <h2>Our Inspection & Testing Capabilities</h2>
                <p>Comprehensive multi-discipline assessment covering design, NDT, load testing, and certification</p>
            </div>

            <div class="capabilities-grid">
                <!-- Design & Engineering Review -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-calculator"></i>
                        <h3>Design Verification & Engineering Review</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Design Calculations:</span> Review stress analysis, factor of safety (≥3:1 typical)</li>
                        <li><span class="cap-label">Load Cases:</span> Verify design accounts for all anticipated loading conditions</li>
                        <li><span class="cap-label">Material Selection:</span> Confirm adequacy of material grade, strength, toughness</li>
                        <li><span class="cap-label">Weld Design:</span> Joint type, throat thickness, effective length per AWS D1.1</li>
                        <li><span class="cap-label">Geometric Parameters:</span> Hole diameter, edge distance, pin bearing area</li>
                        <li><span class="cap-label">Standards Compliance:</span> ASME B30.26, DNV 2.7-1, EN 1677, AWS D1.1</li>
                        <li><span class="cap-label">Modification Assessment:</span> Engineering evaluation of design changes</li>
                        <li><span class="cap-label">FEA Support:</span> Finite element analysis for complex geometries (available)</li>
                    </ul>
                </div>

                <!-- Visual & Dimensional -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-combined"></i>
                        <h3>Visual & Dimensional Inspection</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Structural Condition:</span> Cracks, deformation, corrosion, wear, damage</li>
                        <li><span class="cap-label">Weld Visual:</span> Profile, undercut, overlap, spatter, incomplete fill</li>
                        <li><span class="cap-label">Hole Diameter:</span> Verify clearance for pin/shackle (per design)</li>
                        <li><span class="cap-label">Edge Distance:</span> Confirm adequate material from hole to plate edge</li>
                        <li><span class="cap-label">Thickness:</span> Measure plate thickness, throat dimension (welds)</li>
                        <li><span class="cap-label">Alignment:</span> Check hole alignment for multi-plate assemblies</li>
                        <li><span class="cap-label">Marking/ID:</span> Rated capacity, serial number, certification tags</li>
                        <li><span class="cap-label">Documentation:</span> Photographic evidence and dimensional reports</li>
                    </ul>
                </div>

                <!-- NDT Methods -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-atom"></i>
                        <h3>Non-Destructive Testing (NDT)</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Magnetic Particle (MT):</span> 100% weld coverage for ferrous materials</li>
                        <li><span class="cap-label">Liquid Penetrant (PT):</span> 100% weld coverage for non-ferrous materials</li>
                        <li><span class="cap-label">Ultrasonic Testing (UT):</span> Volumetric examination of full-penetration welds</li>
                        <li><span class="cap-label">Radiographic (RT):</span> Weld quality assessment (critical applications)</li>
                        <li><span class="cap-label">Visual Testing (VT):</span> Detailed weld profile and workmanship per AWS D1.1</li>
                        <li><span class="cap-label">PMI Testing:</span> Material verification (optional, for traceability)</li>
                        <li><span class="cap-label">Personnel:</span> ASNT Level II/III certified technicians</li>
                        <li><span class="cap-label">Procedures:</span> Written procedures per ASME Section V</li>
                    </ul>
                </div>

                <!-- Material Verification -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-vial"></i>
                        <h3>Material & Traceability Verification</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Material Certs (MTRs):</span> Review test reports for chemical/mechanical properties</li>
                        <li><span class="cap-label">Heat Traceability:</span> Verify heat numbers and material origin</li>
                        <li><span class="cap-label">PMI Analysis:</span> Positive material identification (alloy verification)</li>
                        <li><span class="cap-label">Hardness Testing:</span> Confirm heat treatment and hardness per specification</li>
                        <li><span class="cap-label">Impact Toughness:</span> Verify Charpy V-notch results (low-temp service)</li>
                        <li><span class="cap-label">Material Substitution:</span> Identify non-conforming or substandard materials</li>
                        <li><span class="cap-label">Weld Filler:</span> Verify consumable specifications and certifications</li>
                        <li><span class="cap-label">Coating/Corrosion:</span> Verify protective coating systems (if specified)</li>
                    </ul>
                </div>

                <!-- Load Testing -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-weight-hanging"></i>
                        <h3>Proof Load Testing & Witnessing</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Proof Load:</span> Typically 125-150% of WLL per ASME/DNV (new equipment)</li>
                        <li><span class="cap-label">Test Setup:</span> Calibrated load cells, test weights, or hydraulic systems</li>
                        <li><span class="cap-label">Load Application:</span> Controlled application, hold duration, release</li>
                        <li><span class="cap-label">Deflection Monitoring:</span> Pre/post-test dimensional measurements</li>
                        <li><span class="cap-label">Pass Criteria:</span> No permanent deformation, cracking, or yield evidence</li>
                        <li><span class="cap-label">Witnessing:</span> Independent observer documentation and sign-off</li>
                        <li><span class="cap-label">Certification:</span> Formal test certificate with traceable data</li>
                        <li><span class="cap-label">Third-Party Surveyor:</span> Classification society witness (DNV/ABS/Lloyd's)</li>
                    </ul>
                </div>

                <!-- Certification & Reporting -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-file-certificate"></i>
                        <h3>Certification & Documentation</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Inspection Reports:</span> Comprehensive findings, photos, recommendations</li>
                        <li><span class="cap-label">Test Certificates:</span> Proof load, NDT, material certifications</li>
                        <li><span class="cap-label">Compliance Statements:</span> ASME B30.26, EN 1677, DNV 2.7-1 certification</li>
                        <li><span class="cap-label">Design Documentation:</span> Calculations, drawings, material specs (review)</li>
                        <li><span class="cap-label">Defect Reports:</span> Non-conformance documentation and disposition</li>
                        <li><span class="cap-label">Competent Person Sign-Off:</span> Independent professional certification</li>
                        <li><span class="cap-label">Regulatory Format:</span> Suitable for LOLER, OSHA, classification society submission</li>
                        <li><span class="cap-label">Data Retention:</span> Long-term archiving per client and regulatory requirements</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== STANDARDS & CODES ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">CODES & STANDARDS</span>
                    <h2>Applicable Standards & Best Practices</h2>
                    <p class="lead">Our lifting point inspection programs are structured around internationally recognized codes, classification society rules, structural welding standards, and regulatory requirements. We align our procedures, acceptance criteria, and certification documentation to the applicable standards for your jurisdiction, industry sector, and equipment classification.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.26 – Rigging Hardware</h4>
                                <p>North American standard covering design, inspection, testing, and use of rigging hardware including lifting points, pad eyes, eyebolts, and shackles. Defines inspection categories, proof testing requirements (typically 125% WLL), and competent person qualifications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-anchor"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>DNV 2.7-1 / DNV 2.22 – Offshore Lifting (Classification Rules)</h4>
                                <p>Det Norske Veritas standards for offshore containers, lifting appliances, and subsea equipment. DNV 2.7-1 requires 150% SWL proof testing, 100% UT of full-penetration welds, material impact testing, and third-party surveyor witnessing/certification for offshore lifting operations.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>AWS D1.1 – Structural Welding Code (Steel)</h4>
                                <p>American Welding Society code defining weld design, welding procedures, inspector qualifications, and acceptance criteria for structural steel welding. Critical reference for lifting lug weld design (fillet weld sizing, full-penetration joint requirements) and inspection (visual, MT/PT, UT, RT methods and acceptance standards).</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-globe-europe"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>EN 1677 – Components for Slings (Forged Steel Lifting Components)</h4>
                                <p>European standard specifying requirements for forged steel lifting components including eyebolts, shackles, and hoist rings. Defines material specifications, heat treatment, proof load testing (typically 2x WLL), marking requirements, and manufacturer certification obligations.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>LOLER 1998 – Lifting Operations and Lifting Equipment Regulations (UK)</h4>
                                <p>UK legal requirement mandating thorough examination of lifting equipment and accessories (including lifting points) by competent persons at specified intervals. Defines duty holder responsibilities, inspection frequency, defect reporting, and certification requirements for all lifting attachments.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1926 Subpart CC – Cranes and Derricks in Construction (USA)</h4>
                                <p>US federal regulation covering construction lifting operations including requirements for rigging equipment qualification, inspection, competent/qualified person roles, and documentation. OSHA 1910 (general industry) contains parallel requirements for manufacturing and general industry lifting operations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Reference Standards</h4>
                        <p><strong>NDT Standards:</strong> ASME Section V (NDT methods), ASTM E709 (MT), ASTM E1417 (PT), ASTM E164 (UT). <strong>Materials & Testing:</strong> ASTM A36/A572 (structural steel), ASTM A148 (steel castings), ASTM A668 (forgings). <strong>Design & Analysis:</strong> AISC Steel Construction Manual, Machinery's Handbook, FEM 1.001 (lifting calculations). <strong>Quality & Accreditation:</strong> ISO 9001 (QMS), ISO 17020 (inspection body), ISO/IEC 17025 (testing laboratory).</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/pad-eye-load-test.jpg" alt="Pad eye proof load testing">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Pad Eye Load Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>100% weld NDT coverage</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Design verification review</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Material traceability confirmation</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Witnessed proof load testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Third-party certification</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Code-compliant documentation</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Accreditations & Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/iso-17020.png" alt="ISO 17020">
                            <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                            <img src="/www/assets/images/certifications/aws.png" alt="AWS">
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
                <h2>Lifting Point Inspection Procedure</h2>
                <p>Systematic approach ensuring thorough assessment and defensible certification</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning & Document Review</h3>
                        <p>Review design documentation (calculations, drawings, specifications), material certifications (MTRs), previous inspection reports, and operating/load history. Confirm applicable standards (ASME/DNV/EN/AWS), acceptance criteria, NDT scope, and load testing requirements. Coordinate access, rigging for test load, and third-party witness (if required).</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan + Written Procedure + Safety Plan
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Visual & Dimensional Examination</h3>
                        <p>Conduct detailed visual inspection of lifting point structure, welds (profile, undercut, overlap, cracking), base metal condition (corrosion, pitting, deformation), and hardware (pins, bushings, inserts). Measure critical dimensions: hole diameter and tolerance, edge distance, plate thickness, weld throat dimension. Document findings with photographs and dimensional reports.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Visual Inspection Report + Dimensional Data + Photos
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Non-Destructive Testing (NDT) – 100% Weld Coverage</h3>
                        <p>Perform 100% NDT examination of all lifting point welds per ASME B30.26 requirement. Typical methods: MT or PT for surface/near-surface defects (cracks, incomplete fusion, undercut), UT for full-penetration weld volumetric examination, RT if specified for critical applications. Evaluate all indications against acceptance criteria (AWS D1.1 or project-specific). Document all findings with technique sheets, indication records, and photos.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> NDT Reports (MT/PT/UT/RT) + Indication Evaluation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Material Verification & Traceability</h3>
                        <p>Verify material certifications (MTRs) confirm specified grade, mechanical properties, and impact toughness (if required). Perform PMI testing (optional) to confirm material chemistry and detect substitutions. Review heat treatment records if applicable. Confirm weld filler material certifications. Verify traceability markings (heat numbers, mill test reports) match fabrication records.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Material Verification Report + PMI Data (if performed)
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Engineering Assessment & Acceptability Review</h3>
                        <p>Evaluate all inspection findings against acceptance criteria from applicable codes, design specifications, and client requirements. For defects or non-conformances, assess structural significance using engineering analysis (stress impact, remaining capacity, crack growth potential). Determine disposition: Accept / Accept with Monitoring / Repair Required / Reject. Review design calculations for adequacy and compliance with standards.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Engineering Assessment + Disposition Recommendations
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Proof Load Testing (When Required)</h3>
                        <p>Conduct witnessed proof load test per ASME B30.26 (typically 125% WLL) or DNV 2.7-1 (150% SWL for offshore). Apply load using calibrated test equipment (load cells, weights, hydraulic systems), hold for specified duration (typically 10 minutes), monitor for permanent deformation or failure indications. Measure deflection/dimensions before and after test. Verify equipment returns to acceptable tolerances post-test with no yield evidence.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Certificate + Test Records + Deflection Data
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">7</div>
                    <div class="timeline-content">
                        <h3>Certification, Marking & Final Reporting</h3>
                        <p>Issue formal inspection certificate confirming compliance with applicable standards (or detailing deficiencies and restrictions). Update equipment identification marking/tags with rated capacity, inspection date, next due date, certification number, and inspector identification. Provide comprehensive final report including scope, applicable standards, inspection procedures, NDT results, load test data, dimensional verification, photos, material certifications, engineering assessment, recommendations, and competent person sign-off.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Certificate + Final Report + Equipment Marking/Tags
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Qualifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                        <span>ISO 9001:2015 QMS</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-17020.png" alt="ISO 17020">
                        <span>ISO 17020 Inspection Body</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                        <span>ASNT Level II/III NDT</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/aws.png" alt="AWS">
                        <span>AWS CWI Support</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/dnv.png" alt="DNV">
                        <span>DNV Approved (projects)</span>
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
                <h2>Your Trusted Lifting Point Inspection Partner</h2>
                <p>Independent expertise, rigorous methodology, and commitment to safety excellence</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Competent Persons & NDT Specialists</h3>
                    <p>Our inspectors are trained and qualified as competent persons per LOLER/ASME requirements with expertise in structural engineering, welding inspection (AWS CWI support), ASNT Level II/III NDT certification, and lifting equipment standards. Continuing education maintains technical currency.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Independent Third-Party Verification</h3>
                    <p>As an independent inspection body, we provide objective, unbiased assessment free from commercial pressures, fabrication conflicts, or operational biases—supporting defensible certification and regulatory compliance with ISO 17020 accreditation principles.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Complete Multi-Method Inspection</h3>
                    <p>Full-service capability: design review, visual/dimensional inspection, 100% NDT (MT/PT/UT/RT), material verification (PMI), proof load testing, and engineering assessment—eliminating coordination with multiple vendors and ensuring integrated quality.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Standards Expertise</h3>
                    <p>Experience with ASME B30.26, DNV 2.7-1/2.22, EN 1677, AWS D1.1, LOLER, OSHA, classification society requirements (DNV/ABS/Lloyd's/BV), and client-specific specifications. We align procedures to applicable jurisdiction and provide internationally recognized certification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Fabrication Witness & Load Testing Services</h3>
                    <p>Support from design review through fabrication surveillance, hold point inspections, in-process NDT, final acceptance, witnessed proof load testing, and certification—comprehensive lifecycle quality assurance for critical lifting equipment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Proven Track Record in High-Consequence Industries</h3>
                    <p>Trusted by offshore operators, marine contractors, oil & gas facilities, power utilities, construction companies, and heavy manufacturing across critical infrastructure and complex projects. References and case studies available upon request.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Lifting Point Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why is 100% NDT examination required for lifting point welds?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.26 and DNV 2.7-1 require 100% NDT because lifting point welds are critical load-path components where failure results in catastrophic load drops. Weld defects (incomplete fusion, cracks, lack of penetration) are often hidden from visual inspection but can cause sudden failure under load. MT/PT detects surface/near-surface defects; UT/RT examines full weld volume.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between a pad eye and a lifting lug?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>The terms are often used interchangeably. Generally, a <strong>pad eye</strong> (or padeye) refers to a flat plate or formed attachment with a hole for shackle connection, while a <strong>lifting lug</strong> may refer to any structural lifting attachment including pad eyes, trunnions, or gusseted lugs. Both are load-path-critical and require the same rigorous inspection and certification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What proof load is required for lifting points?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical requirements: ASME B30.26 specifies <strong>125% of rated capacity</strong> for new equipment. DNV 2.7-1 (offshore) requires <strong>150% of Safe Working Load (SWL)</strong> witnessed by surveyor. EN 1677 (forged components) typically <strong>2x WLL</strong>. Proof load confirms structural integrity and verifies no permanent deformation or yield under test load.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can lifting points be repaired if cracks or defects are found?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Repairs are possible if performed by qualified welders following approved WPS/PQR and subject to engineering assessment. After repair, <strong>100% NDT re-examination</strong> of repair area is mandatory, and <strong>proof load testing</strong> is typically required before return to service. Documentation must be updated and equipment re-certified. For critical defects or high-consequence applications, replacement may be safer than repair.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should lifting points be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Frequency depends on regulatory requirements, usage, and risk. <strong>LOLER (UK)</strong> requires thorough examination at least every <strong>12 months</strong> (or 6 months for lifting persons). <strong>ASME B30.26</strong> requires periodic inspection at intervals determined by competent person based on activity, environment, and service severity. <strong>Pre-use visual checks</strong> are required before each lift. High-consequence or heavy-duty applications may require more frequent inspection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is required for lifting point certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required documentation typically includes: <strong>design calculations and drawings</strong>, <strong>material test reports (MTRs)</strong>, <strong>weld procedure specifications (WPS/PQR)</strong>, <strong>fabrication quality records</strong>, <strong>100% NDT reports</strong> (MT/PT/UT/RT), <strong>proof load test certificate</strong>, <strong>dimensional verification</strong>, <strong>inspection reports</strong>, <strong>competent person certification statement</strong>, and <strong>equipment marking/tagging records</strong>. Records must be retained per regulations (often equipment lifetime).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the minimum factor of safety for lifting point design?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.26 requires a minimum design factor of safety of <strong>3:1</strong> (based on ultimate strength) for static lifting applications, or <strong>5:1</strong> based on yield strength. DNV 2.7-1 typically requires similar safety factors. Higher factors may be required for dynamic loading, impact, or where failure consequences are severe. Design must account for all credible load cases including angular loading.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can eyebolts be used for angular (side) loading?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Standard shouldered eyebolts</strong> have significantly reduced capacity under angular loading (often 25-50% reduction at 45°). <strong>Swivel hoist rings</strong> or <strong>side-pull eyebolts</strong> are designed for angular loading. Always consult manufacturer load tables and marking for angular load ratings. Never use eyebolts for side loading unless specifically designed and rated for that application—engineering assessment required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Safe Lifting Operations—Request Professional Inspection</h2>
                <p>Schedule lifting point and pad eye inspection, load testing, and certification from independent, qualified experts</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Inspection Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> 100% Weld NDT Coverage</span>
                    <span><i class="fas fa-check"></i> Witnessed Load Testing</span>
                    <span><i class="fas fa-check"></i> Code-Compliant Certification</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Lifting & Rigging Services</h2>
                <p>Comprehensive solutions for safe lifting equipment management</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/spreader-beam-lifting-frame-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-arrows-alt-h"></i>
                    </div>
                    <h3>Spreader Beam & Lifting Frame</h3>
                    <p>Inspection, load testing, and certification of below-the-hook lifting devices</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/wire-rope-sling-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Wire Rope & Sling Inspection</h3>
                    <p>Visual and NDT examination of wire ropes, synthetic slings, chain slings</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/magnetic-particle.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing (MT)</h3>
                    <p>Surface crack detection for welds and critical structural components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ultrasonic-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Ultrasonic Testing (UT)</h3>
                    <p>Volumetric weld examination and thickness verification</p>
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