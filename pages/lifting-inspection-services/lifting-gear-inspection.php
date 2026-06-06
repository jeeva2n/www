<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Lifting Gear Inspection Services | Slings, Chains, Rigging Hardware Certification | Alpha Sonix NDT Solutions";
$meta_description = "Professional lifting gear and rigging hardware inspection, testing, and certification services. Visual examination, proof load testing, and compliance verification for wire rope slings, chain slings, synthetic slings, shackles, hooks, and lifting accessories per ASME B30.9, B30.26, EN 818, EN 1492, LOLER requirements.";
$meta_keywords = "lifting gear inspection, rigging hardware testing, sling inspection, chain sling certification, wire rope inspection, synthetic sling testing, shackle inspection, lifting accessories, ASME B30.9, EN 818, LOLER inspection, rigging equipment certification";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/lifting-gear-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/lifting-gear-og.jpg">

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
            "serviceType": "Lifting Gear & Rigging Hardware Inspection",
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
            "description": "Comprehensive lifting gear and rigging hardware inspection services including visual examination, dimensional verification, proof load testing, and certification for slings, chains, shackles, hooks, and lifting accessories per ASME B30.9, B30.26, EN 818, EN 1492, LOLER for safe rigging operations."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/lifting-gear-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/lifting-inspection-services/">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Lifting Gear Inspection</span>
                </div>
                <h1 class="page-title">Lifting Gear Inspection</h1>
                <p class="page-subtitle">Comprehensive inspection, testing, and certification of lifting accessories and loose rigging equipment—slings, chains, wire ropes, shackles, hooks, and hardware—ensuring compliance with safety standards and extending equipment service life through professional assessment and documentation</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME B30.9 / B30.26 Aligned</span>
                    <span class="badge"><i class="fas fa-search-plus"></i> Detailed Visual Examination</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Thorough Inspection Reports</span>
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
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Critical Load-Bearing Components</h3>
                    <p>Lifting gear and rigging accessories are the vital connection between crane hooks and loads—requiring systematic inspection to detect wear, damage, and degradation before failure occurs.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Lifting Gear Inspection Techniques</h3>
                    <p>Professional examination methods specific to each equipment type—wire rope inspection, chain link assessment, textile sling evaluation, and hardware condition analysis using proven industry techniques.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Proof Load Testing & Verification</h3>
                    <p>Witnessed proof load testing for new equipment, post-repair verification, and periodic testing programs to confirm rated capacity and structural integrity under controlled conditions.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Regulatory Compliance & Documentation</h3>
                    <p>Inspection programs aligned to ASME B30.9, B30.26, EN 818, EN 1492, LOLER, and OSHA requirements with comprehensive documentation for audit, insurance, and regulatory submission.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">RIGGING EQUIPMENT INTEGRITY</span>
                    <h2>What is Lifting Gear & Rigging Hardware Inspection?</h2>
                    <p class="lead">Lifting gear inspection encompasses the systematic examination, testing, and certification of all loose rigging equipment and lifting accessories used in material handling operations. This includes wire rope slings, chain slings, synthetic slings, shackles, hooks, eyebolts, spreaders, turnbuckles, blocks, and other hardware that connects the lifting appliance (crane, hoist) to the load being handled.</p>

                    <p>These components are subject to unique failure modes and degradation patterns: <strong>wire ropes</strong> suffer from broken wires, corrosion, kinking, and core deterioration; <strong>chain slings</strong> experience wear, stretch, crack propagation, and link deformation; <strong>synthetic slings</strong> are susceptible to cuts, abrasion, UV degradation, and chemical attack; <strong>rigging hardware</strong> (shackles, hooks, links) can develop cracks, wear, deformation, and thread damage. Each requires lifting gear inspection techniques, retirement criteria, and documentation appropriate to the component type and service environment.</p>

                    <p>Our inspection programs cover the complete equipment lifecycle: <strong>incoming inspection</strong> (new equipment verification and initial certification), <strong>periodic in-service inspection</strong> (frequent, periodic, and annual examinations per regulatory requirements), <strong>post-incident inspection</strong> (after overload, impact, or suspected damage), <strong>pre-critical-lift inspection</strong> (before high-consequence operations), and <strong>retirement/disposal decisions</strong> when components reach discard criteria or end-of-service life.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Equipment-Specific Inspection Techniques</strong>
                                <p>Tailored examination methods for each component type—wire rope broken wire counts, chain elongation measurement, synthetic sling cut/abrasion assessment, hardware crack detection, and dimensional verification using industry-proven techniques.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Standards-Based Retirement Criteria</strong>
                                <p>Application of established discard criteria from ASME B30.9, B30.26, EN 818, EN 1492, and manufacturer specifications—providing objective, defensible decisions on equipment fitness-for-service versus retirement.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Competent Person Qualifications</strong>
                                <p>Inspections performed by qualified competent persons with lifting gear inspection training in rigging equipment, lifting standards, inspection techniques, and safety requirements per LOLER, OSHA, and ASME competency requirements.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Asset Management & Tracking Support</strong>
                                <p>Comprehensive documentation including equipment registers, inspection histories, retirement tracking, and next-due-date management to support lifting equipment asset management and compliance programs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Critical Safety Factor:</strong>
                            <p>Rigging equipment failures account for a significant percentage of lifting incidents, often resulting from inadequate inspection, incorrect retirement decisions, or use beyond design limits. Professional inspection helps prevent incidents by identifying degraded equipment before failure and ensuring compliance with regulatory inspection requirements.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection Quote</a>
                        <a href="#applications" class="btn btn-secondary">View Equipment Types</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/wire-rope-inspection.jpg" alt="Wire rope sling inspection with measurement">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Detailed wire rope inspection using industry-standard measurement and assessment techniques</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">4:1</span>
                            <span class="stat-label">Typical Design Factor (Slings)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Daily</span>
                            <span class="stat-label">Pre-Use Visual Checks</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Annual</span>
                            <span class="stat-label">Thorough Examination</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> Inspection Categories</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Pre-use visual checks (daily)</li>
                            <li><strong>2.</strong> Frequent inspection (monthly)</li>
                            <li><strong>3.</strong> Periodic inspection (annual)</li>
                            <li><strong>4.</strong> Post-incident examination</li>
                            <li><strong>5.</strong> Pre-critical-lift inspection</li>
                            <li><strong>6.</strong> Proof load testing (as required)</li>
                            <li><strong>7.</strong> Retirement & disposal decisions</li>
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
                <h2>Key Benefits of Lifting Gear Inspection</h2>
                <p>Protect operations, personnel, and compliance through systematic equipment assessment</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Incident Prevention & Personnel Safety</h3>
                    <p>Systematic inspection identifies worn, damaged, or degraded rigging equipment before failure—preventing load drops, equipment damage, injuries, and fatalities. Early detection of wire rope deterioration, chain wear, and hardware defects protects personnel and operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance Assurance</h3>
                    <p>Meet duty-holder obligations under LOLER (UK), OSHA 1926/1910 (USA), and jurisdictional lifting equipment regulations. Competent person inspections with proper documentation provide defensible evidence of compliance for audits and enforcement actions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Equipment Life Extension & Cost Optimization</h3>
                    <p>Professional inspection helps optimize equipment replacement timing—avoiding premature retirement of serviceable equipment while ensuring timely replacement of degraded components. Proper maintenance recommendations extend service life and reduce total cost of ownership.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Expert Assessment & Objective Decisions</h3>
                    <p>Qualified competent persons with lifting gear inspection training provide objective, standards-based assessment free from operational pressures or commercial bias—supporting better decisions on repair-vs-replace and retirement timing.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Comprehensive Documentation & Audit Trail</h3>
                    <p>Detailed inspection records, equipment registers, retirement certificates, and competent person sign-off support audit trails, insurance requirements, knowledge transfer, and regulatory compliance across equipment lifecycle.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Asset Management & Reliability Enhancement</h3>
                    <p>Structured inspection programs with tracking and trending capabilities support reliability-centered maintenance, optimize inspection intervals, and improve overall lifting equipment management through data-driven decision making.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT TYPES ===================== -->
    <section class="technology-section">
        <div name="technology-section">
            <div class="container">
                <div class="section-header center">
                    <span class="section-label">EQUIPMENT CATEGORIES</span>
                    <h2>Types of Lifting Gear & Rigging Equipment We Inspect</h2>
                    <p>Comprehensive inspection services for all categories of loose lifting equipment and rigging accessories</p>
                </div>

                <div class="technology-content">
                    <div class="wave-modes-grid">
                        <!-- Wire Rope Slings -->
                        <div class="wave-mode-card">
                            <div class="mode-header electrical">
                                <i class="fas fa-grip-lines"></i>
                                <h3>Wire Rope Slings & Assemblies</h3>
                            </div>
                            <div class="mode-body">
                                <p><strong>Description:</strong> Wire rope slings in single-leg, multi-leg, and endless configurations including eye-and-eye, bridle, choker, and basket sling arrangements with various end fittings and hardware.</p>
                                <p><strong>Inspection Focus:</strong> Broken wire counting, corrosion assessment, kinking and bird-caging, core deterioration, end fitting condition, abrasion and wear measurement, and compliance with ASME B30.9 retirement criteria.</p>

                                <div class="mode-advantages">
                                    <h4>Common Configurations:</h4>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Single-part wire rope slings (eye-and-eye, endless)</li>
                                        <li><i class="fas fa-check"></i> Multi-leg bridle slings (2-leg, 3-leg, 4-leg)</li>
                                        <li><i class="fas fa-check"></i> Rotation-resistant and standard lay wire rope</li>
                                        <li><i class="fas fa-check"></i> Fiber core and independent wire rope core (IWRC)</li>
                                        <li><i class="fas fa-check"></i> Mechanical sleeves, pressed sleeves, speltered sockets</li>
                                        <li><i class="fas fa-check"></i> Swaged and hand-tucked splices</li>
                                    </ul>
                                </div>

                                <div class="mode-applications">
                                    <strong>Retirement Criteria:</strong> ASME B30.9 broken wire limits, diameter reduction, corrosion, kinking, end fitting wear
                                </div>
                            </div>
                        </div>

                        <!-- Chain Slings -->
                        <div class="wave-mode-card">
                            <div class="mode-header mechanical">
                                <i class="fas fa-link"></i>
                                <h3>Chain Slings & Alloy Chain</h3>
                            </div>
                            <div class="mode-body">
                                <p><strong>Description:</strong> Alloy steel chain slings in single and multi-leg configurations including Grade 80 and Grade 100 chain with master links, coupling links, hooks, and other end fittings.</p>
                                <p><strong>Inspection Focus:</strong> Link wear measurement, crack detection (visual and MT), stretch assessment, side loading damage, master link and hardware condition, and marking/identification verification per ASME B30.9 and EN 818 requirements.</p>

                                <div class="mode-advantages">
                                    <h4>Common Configurations:</h4>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Grade 80 and Grade 100 alloy steel chain slings</li>
                                        <li><i class="fas fa-check"></i> Single-leg, 2-leg, 3-leg, and 4-leg assemblies</li>
                                        <li><i class="fas fa-check"></i> Master links, coupling links, and connecting hardware</li>
                                        <li><i class="fas fa-check"></i> Foundry hooks, grab hooks, and clevis hooks</li>
                                        <li><i class="fas fa-check"></i> Chain shorteners and adjustable slings</li>
                                        <li><i class="fas fa-check"></i> Mechanical and welded master links</li>
                                    </ul>
                                </div>

                                <div class="mode-applications">
                                    <strong>Retirement Criteria:</strong> 15% link wear (EN 818), 3% stretch, cracks, bent/twisted links, illegible markings
                                </div>
                            </div>
                        </div>

                        <!-- Synthetic Slings -->
                        <div class="wave-mode-card">
                            <div class="mode-header building">
                                <i class="fas fa-tape"></i>
                                <h3>Synthetic & Textile Slings</h3>
                            </div>
                            <div class="mode-body">
                                <p><strong>Description:</strong> Webbing slings, round slings, and synthetic fiber slings made from polyester, nylon, polypropylene, and high-performance materials in various configurations and capacities.</p>
                                <p><strong>Inspection Focus:</strong> Cut and abrasion assessment, UV degradation, chemical contamination, stitching integrity, hardware condition, and compliance with EN 1492 and ASME B30.9 textile sling requirements.</p>

                                <div class="mode-advantages">
                                    <h4>Common Types:</h4>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Flat webbing slings (polyester, nylon) with eyes or fittings</li>
                                        <li><i class="fas fa-check"></i> Round slings (endless polyester with protective cover)</li>
                                        <li><i class="fas fa-check"></i> High-performance fiber slings (Dyneema, Spectra, Kevlar)</li>
                                        <li><i class="fas fa-check"></i> Wire mesh slings for high-temperature applications</li>
                                        <li><i class="fas fa-check"></i> Cargo lashing and tie-down assemblies</li>
                                        <li><i class="fas fa-check"></i> Custom-engineered synthetic lifting solutions</li>
                                    </ul>
                                </div>

                                <div class="mode-applications">
                                    <strong>Retirement Criteria:</strong> Cuts, abrasion limits, UV damage, chemical exposure, stitching failure, hardware defects
                                </div>
                            </div>
                        </div>

                        <!-- Rigging Hardware -->
                        <div class="wave-mode-card">
                            <div class="mode-header process">
                                <i class="fas fa-tools"></i>
                                <h3>Rigging Hardware & Accessories</h3>
                            </div>
                            <div class="mode-body">
                                <p><strong>Description:</strong> Shackles, hooks, eyebolts, turnbuckles, blocks, links, and other hardware components used in rigging systems including forged, cast, and fabricated items.</p>
                                <p><strong>Inspection Focus:</strong> Crack detection (visual and MT/PT), wear measurement, deformation assessment, thread condition, pin and bolt integrity, marking verification, and compliance with ASME B30.26 and EN standards.</p>

                                <div class="mode-advantages">
                                    <h4>Common Hardware Types:</h4>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Shackles (bow, dee, anchor, swivel, safety bolt)</li>
                                        <li><i class="fas fa-check"></i> Hooks (eye, clevis, grab, foundry, sorting)</li>
                                        <li><i class="fas fa-check"></i> Eyebolts and hoist rings (shouldered, side-pull, swivel)</li>
                                        <li><i class="fas fa-check"></i> Turnbuckles, load binders, and tensioning hardware</li>
                                        <li><i class="fas fa-check"></i> Blocks, sheaves, and wire rope accessories</li>
                                        <li><i class="fas fa-check"></i> Links, rings, and custom fabricated hardware</li>
                                    </ul>
                                </div>

                                <div class="mode-applications">
                                    <strong>Retirement Criteria:</strong> Cracks, 10% wear (hooks), deformation, thread damage, illegible markings
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mode-selection-guide">
                        <h3><i class="fas fa-compass"></i> Equipment-Specific Inspection Requirements</h3>
                        <table class="selection-table">
                            <thead>
                                <tr>
                                    <th>Equipment Type</th>
                                    <th>Primary Inspection Method</th>
                                    <th>Key Retirement Criteria</th>
                                    <th>Applicable Standards</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Wire Rope Slings</strong></td>
                                    <td>Visual + broken wire counting + diameter measurement</td>
                                    <td>Broken wires per ASME B30.9, diameter reduction, kinking</td>
                                    <td>ASME B30.9, EN 13414, BS 7121</td>
                                </tr>
                                <tr>
                                    <td><strong>Chain Slings</strong></td>
                                    <td>Visual + wear measurement + stretch + MT (as required)</td>
                                    <td>15% link wear, 3% stretch, cracks, deformation</td>
                                    <td>ASME B30.9, EN 818, BS EN 1677</td>
                                </tr>
                                <tr>
                                    <td><strong>Synthetic Slings</strong></td>
                                    <td>Visual + abrasion assessment + stitching inspection</td>
                                    <td>Cuts, abrasion limits, UV damage, stitching failure</td>
                                    <td>ASME B30.9, EN 1492, BS 3481</td>
                                </tr>
                                <tr>
                                    <td><strong>Rigging Hardware</strong></td>
                                    <td>Visual + dimensional checks + MT/PT (suspect areas)</td>
                                    <td>10% wear (hooks), cracks, deformation, thread damage</td>
                                    <td>ASME B30.26, EN 1677, EN 13889</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INDUSTRY APPLICATIONS</span>
                <h2>Industries & Operations We Serve</h2>
                <p>Professional lifting gear inspection across diverse industries and applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="offshore">Offshore & Marine</button>
                    <button class="tab-btn" data-tab="construction">Construction & Infrastructure</button>
                    <button class="tab-btn" data-tab="industrial">Manufacturing & Heavy Industry</button>
                    <button class="tab-btn" data-tab="utilities">Power & Utilities</button>
                </div>

                <div class="tabs-content">
                    <!-- Offshore & Marine Tab -->
                    <div class="tab-panel active" id="offshore">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/offshore-rigging.jpg" alt="Offshore rigging equipment inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Offshore & Marine Operations</h3>
                                <p>Offshore and marine environments demand the highest standards of rigging equipment reliability due to harsh operating conditions, critical lift operations, and remote location constraints. Our inspection services support safe offshore lifting with certification recognized by classification societies and marine authorities.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Offshore platform construction and maintenance rigging</li>
                                    <li><i class="fas fa-check"></i> Subsea equipment handling and installation slings</li>
                                    <li><i class="fas fa-check"></i> Heavy-lift vessel and crane barge rigging equipment</li>
                                    <li><i class="fas fa-check"></i> Marine cargo handling and deck equipment rigging</li>
                                    <li><i class="fas fa-check"></i> Drilling rig and BOP handling equipment</li>
                                    <li><i class="fas fa-check"></i> FPSO and vessel lifting equipment programs</li>
                                    <li><i class="fas fa-check"></i> Classification society compliance inspection (DNV, ABS, Lloyd's)</li>
                                    <li><i class="fas fa-check"></i> Seawater and corrosive environment assessment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.9</span>
                                    <span class="standard-tag">DNV 2.7-1</span>
                                    <span class="standard-tag">EN 818</span>
                                    <span class="standard-tag">MCA / MGN</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Tab -->
                    <div class="tab-panel" id="construction">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/construction-rigging.jpg" alt="Construction rigging inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Construction & Infrastructure Projects</h3>
                                <p>Construction projects require reliable rigging equipment for safe handling of structural components, precast elements, and building materials. Our inspection services support project safety plans, regulatory compliance, and equipment management across diverse construction applications.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Structural steel erection and crane rigging</li>
                                    <li><i class="fas fa-check"></i> Bridge construction and segment handling</li>
                                    <li><i class="fas fa-check"></i> Precast concrete panel and beam rigging</li>
                                    <li><i class="fas fa-check"></i> High-rise building and tower crane operations</li>
                                    <li><i class="fas fa-check"></i> Infrastructure projects (tunnels, utilities, transport)</li>
                                    <li><i class="fas fa-check"></i> Modular construction and off-site assembly</li>
                                    <li><i class="fas fa-check"></i> Heavy civil works and foundation equipment</li>
                                    <li><i class="fas fa-check"></i> Temporary works and formwork rigging systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1926</span>
                                    <span class="standard-tag">ASME B30.9</span>
                                    <span class="standard-tag">BS 7121</span>
                                    <span class="standard-tag">EN 1492</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industrial Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/industrial-lifting-gear.jpg" alt="Industrial lifting gear inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Manufacturing & Heavy Industry</h3>
                                <p>Manufacturing facilities, steel mills, foundries, shipyards, and process industries rely on lifting gear for production operations, maintenance activities, and material handling. Our inspection services support operational efficiency, worker safety, and regulatory compliance in demanding industrial environments.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel mills and foundry material handling equipment</li>
                                    <li><i class="fas fa-check"></i> Shipyard fabrication and assembly rigging</li>
                                    <li><i class="fas fa-check"></i> Automotive and aerospace manufacturing lifting</li>
                                    <li><i class="fas fa-check"></i> Mining equipment and heavy machinery handling</li>
                                    <li><i class="fas fa-check"></i> Oil & gas facility maintenance and turnaround rigging</li>
                                    <li><i class="fas fa-check"></i> Petrochemical and refinery lifting equipment</li>
                                    <li><i class="fas fa-check"></i> Paper mill and process industry applications</li>
                                    <li><i class="fas fa-check"></i> General manufacturing and warehouse operations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1910</span>
                                    <span class="standard-tag">ASME B30.9</span>
                                    <span class="standard-tag">EN 818</span>
                                    <span class="standard-tag">API RP 2D</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Utilities Tab -->
                    <div class="tab-panel" id="utilities">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/utility-rigging.jpg" alt="Power utility rigging equipment">
                            </div>
                            <div class="tab-text">
                                <h3>Power Generation & Utilities</h3>
                                <p>Power plants, substations, transmission systems, and utility infrastructure require specialized lifting equipment for construction, maintenance, and emergency response operations. Our inspection services support critical infrastructure reliability and safety requirements in power industry applications.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Power plant maintenance and outage rigging equipment</li>
                                    <li><i class="fas fa-check"></i> Transformer and electrical equipment handling</li>
                                    <li><i class="fas fa-check"></i> Transmission line construction and maintenance</li>
                                    <li><i class="fas fa-check"></i> Substation equipment installation and replacement</li>
                                    <li><i class="fas fa-check"></i> Wind turbine installation and maintenance rigging</li>
                                    <li><i class="fas fa-check"></i> Nuclear facility lifting equipment (where qualified)</li>
                                    <li><i class="fas fa-check"></i> Emergency response and storm restoration equipment</li>
                                    <li><i class="fas fa-check"></i> Utility vehicle and lifting equipment rigging</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.9</span>
                                    <span class="standard-tag">IEEE / NESC</span>
                                    <span class="standard-tag">OSHA 1910</span>
                                    <span class="standard-tag">ASME NQA-1 (nuclear)</span>
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
                <span class="section-label">TECHNICAL CAPABILITIES</span>
                <h2>Our Lifting Gear Inspection Capabilities</h2>
                <p>Comprehensive assessment techniques specific to each equipment type and application</p>
            </div>

            <div class="capabilities-grid">
                <!-- Wire Rope Inspection -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-grip-lines"></i>
                        <h3>Wire Rope & Cable Inspection</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Broken Wire Counting:</span> Visual and tactile methods per ASME B30.9</li>
                        <li><span class="cap-label">Diameter Measurement:</span> Precision measurement for wear assessment</li>
                        <li><span class="cap-label">Core Condition:</span> Assessment of fiber core or IWRC condition</li>
                        <li><span class="cap-label">End Fittings:</span> Sleeve, socket, and splice examination</li>
                        <li><span class="cap-label">Corrosion Assessment:</span> Internal and external corrosion evaluation</li>
                        <li><span class="cap-label">Kinking & Bird-caging:</span> Geometric deformation assessment</li>
                        <li><span class="cap-label">Retirement Criteria:</span> ASME B30.9 and EN 13414 standards</li>
                        <li><span class="cap-label">Documentation:</span> Detailed findings and photo documentation</li>
                    </ul>
                </div>

                <!-- Chain Inspection -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-link"></i>
                        <h3>Chain & Chain Sling Assessment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Link Wear Measurement:</span> Calibrated measurement per EN 818</li>
                        <li><span class="cap-label">Stretch Assessment:</span> Overall length measurement and analysis</li>
                        <li><span class="cap-label">Crack Detection:</span> Visual examination and MT (as required)</li>
                        <li><span class="cap-label">Deformation Checks:</span> Link shape, side loading, twist evaluation</li>
                        <li><span class="cap-label">Master Link Condition:</span> Hardware and connection assessment</li>
                        <li><span class="cap-label">Marking Verification:</span> Grade, size, capacity, traceability</li>
                        <li><span class="cap-label">Heat Damage:</span> Color change, metallurgical indicators</li>
                        <li><span class="cap-label">Working Load Verification:</span> Capacity confirmation and marking</li>
                    </ul>
                </div>

                <!-- Synthetic Sling Inspection -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-tape"></i>
                        <h3>Synthetic & Textile Sling Evaluation</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Cut & Abrasion Assessment:</span> Systematic examination per EN 1492</li>
                        <li><span class="cap-label">UV Degradation:</span> Fiber condition and color change analysis</li>
                        <li><span class="cap-label">Chemical Damage:</span> Contamination and chemical exposure assessment</li>
                        <li><span class="cap-label">Stitching Integrity:</span> Seam and stitch pattern examination</li>
                        <li><span class="cap-label">Hardware Condition:</span> End fittings and attachment hardware</li>
                        <li><span class="cap-label">Label & Marking:</span> Capacity, material, date verification</li>
                        <li><span class="cap-label">Heat Damage:</span> Melting, scorching, fiber degradation</li>
                        <li><span class="cap-label">Retirement Criteria:</span> ASME B30.9 and EN 1492 limits</li>
                    </ul>
                </div>

                <!-- Hardware Inspection -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-tools"></i>
                        <h3>Rigging Hardware Examination</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Crack Detection:</span> Visual + MT/PT for suspect conditions</li>
                        <li><span class="cap-label">Wear Measurement:</span> Critical dimension and throat opening</li>
                        <li><span class="cap-label">Deformation Assessment:</span> Bending, twisting, opening distortion</li>
                        <li><span class="cap-label">Thread Condition:</span> Pin, bolt, and threaded component evaluation</li>
                        <li><span class="cap-label">Pin & Bolt Integrity:</span> Shackle pins, eyebolt condition</li>
                        <li><span class="cap-label">Working Load Confirmation:</span> Marking verification and capacity</li>
                        <li><span class="cap-label">Safety Features:</span> Safety pins, latch operation, locking mechanisms</li>
                        <li><span class="cap-label">Proof Testing:</span> Load testing capability (as required)</li>
                    </ul>
                </div>

                <!-- Documentation & Reporting -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clipboard-check"></i>
                        <h3>Documentation & Reporting</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Equipment Register:</span> Asset tracking and identification systems</li>
                        <li><span class="cap-label">Inspection Reports:</span> Detailed findings with recommendations</li>
                        <li><span class="cap-label">Photo Documentation:</span> Visual evidence of condition and defects</li>
                        <li><span class="cap-label">Retirement Certificates:</span> Formal disposal documentation</li>
                        <li><span class="cap-label">Compliance Statements:</span> ASME, EN, LOLER certification</li>
                        <li><span class="cap-label">Next Due Tracking:</span> Inspection scheduling and reminders</li>
                        <li><span class="cap-label">Competent Person Sign-off:</span> Qualified inspector certification</li>
                        <li><span class="cap-label">Digital Records:</span> Electronic storage and retrieval systems</li>
                    </ul>
                </div>

                <!-- Testing & Verification -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-balance-scale"></i>
                        <h3>Testing & Verification Services</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Proof Load Testing:</span> New equipment and post-repair verification</li>
                        <li><span class="cap-label">Break Testing:</span> Sample testing for retirement verification</li>
                        <li><span class="cap-label">Dimensional Verification:</span> Critical measurement and tolerance checks</li>
                        <li><span class="cap-label">Material Verification:</span> Grade confirmation and traceability</li>
                        <li><span class="cap-label">Working Load Confirmation:</span> Capacity verification and marking</li>
                        <li><span class="cap-label">Field Testing:</span> On-site testing and verification services</li>
                        <li><span class="cap-label">Test Equipment:</span> Calibrated load cells and test machinery</li>
                        <li><span class="cap-label">Witnessed Testing:</span> Third-party verification and certification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== STANDARDS & REGULATIONS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">STANDARDS & REGULATIONS</span>
                    <h2>Applicable Codes, Standards & Best Practices</h2>
                    <p class="lead">Our lifting gear inspection programs are based on internationally recognized standards, regulatory requirements, and industry best practices. We align our inspection procedures, retirement criteria, and documentation to the applicable codes for your jurisdiction, equipment types, and operational requirements.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.9 – Slings</h4>
                                <p>Comprehensive North American standard covering design, inspection, testing, and use of wire rope slings, chain slings, metal mesh slings, synthetic web slings, and synthetic round slings. Defines inspection categories (frequent, periodic), retirement criteria, and competent person requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.26 – Rigging Hardware</h4>
                                <p>Standard covering shackles, eyebolts, hoist rings, hooks, links, and other rigging hardware. Specifies inspection requirements, proof testing, marking requirements, and retirement criteria for rigging accessories used in lifting operations.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-link"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>EN 818 – Short Link Chain for Lifting Purposes</h4>
                                <p>European standard specifying requirements for Grade 80 and Grade 100 alloy steel lifting chain including material specifications, heat treatment, testing, marking, and inspection. Defines 15% link wear retirement criterion and chain assembly requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tape"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>EN 1492 – Textile Slings</h4>
                                <p>European standard covering flat webbing slings and round slings made from synthetic materials (polyester, nylon, polypropylene, high-performance fibers). Defines material requirements, safety factors, marking, inspection criteria, and retirement limits for textile lifting slings.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>LOLER 1998 – Lifting Operations and Lifting Equipment Regulations (UK)</h4>
                                <p>UK legal requirement mandating thorough examination of lifting equipment (including slings and rigging accessories) by competent persons at specified intervals. Defines duty holder responsibilities, inspection frequency, defect reporting, and certification requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1926.251 / 1910.184 – Rigging Equipment Standards (USA)</h4>
                                <p>US federal regulations covering rigging equipment inspection, use, and retirement in construction (1926.251) and general industry (1910.184). Specifies inspection requirements, retirement criteria, competent person qualifications, and documentation for slings and rigging hardware.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Reference Standards</h4>
                        <p><strong>Wire Rope:</strong> EN 13414 (steel wire rope slings), BS 7121 (lifting operations), API RP 9B (wire rope). <strong>Chain Standards:</strong> EN 1677 (components for slings), NACM (chain specifications). <strong>Testing:</strong> ISO 4309 (wire rope retirement), ASTM standards for materials and testing. <strong>Quality Systems:</strong> ISO 9001 (QMS), ISO 17020 (inspection body accreditation).</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/sling-inspection-process.jpg" alt="Professional sling inspection process">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Sling Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Standards-based inspection</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Competent person qualified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Equipment-specific techniques</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Retirement criteria application</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Comprehensive documentation</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Asset management support</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Certifications & Accreditations</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                            <img src="/www/assets/images/certifications/loler.png" alt="LOLER Competent">
                            <img src="/www/assets/images/certifications/asme.png" alt="ASME">
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
                <h2>Lifting Gear Inspection Procedure</h2>
                <p>Systematic approach ensuring thorough assessment and standards compliance</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Equipment Identification & Documentation Review</h3>
                        <p>Identify equipment types, working load limits, manufacturer specifications, and previous inspection history. Review applicable standards (ASME B30.9/B30.26, EN 818/1492, LOLER requirements), establish inspection scope, and confirm competent person qualifications. Set up equipment registers and tracking systems.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Equipment Register + Inspection Scope + Applicable Standards Matrix
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Initial Segregation & Pre-Inspection Setup</h3>
                        <p>Segregate equipment by type (wire rope, chain, synthetic, hardware) and condition (serviceable, suspect, retired). Establish inspection areas with appropriate lighting, tools, and measurement equipment. Prepare inspection forms, photography equipment, and documentation systems. Clean equipment as necessary for effective examination.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Segregated Equipment Inventory + Inspection Setup + Forms/Tools
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Detailed Visual & Tactile Examination</h3>
                        <p>Conduct systematic examination using equipment-specific techniques: wire rope broken wire counting and diameter measurement, chain link wear assessment and stretch evaluation, synthetic sling cut/abrasion analysis, hardware crack detection and dimensional verification. Document all findings with detailed notes and photographic evidence.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Detailed Inspection Findings + Photo Documentation + Measurements
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Standards-Based Assessment & Disposition</h3>
                        <p>Evaluate all findings against applicable retirement criteria (ASME B30.9 broken wire limits, EN 818 chain wear limits, EN 1492 synthetic sling criteria, ASME B30.26 hardware limits). Determine equipment disposition: Serviceable / Serviceable with Restrictions / Retire from Service. Flag equipment requiring additional examination (NDT, proof testing).</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Equipment Assessment + Disposition Matrix + Restriction/Retirement List
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Additional Testing & Verification (As Required)</h3>
                        <p>Perform additional examination as identified: magnetic particle testing (MT) for chains and hardware, proof load testing for questionable equipment, dimensional verification for critical components, material verification for unmarked equipment. Document all additional testing with certificates and traceable records.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Additional Test Results + Certificates + Updated Assessments
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Equipment Marking, Tagging & Final Documentation</h3>
                        <p>Apply appropriate marking and tagging: serviceable equipment receives inspection tags with date and next due date, restricted equipment receives warning tags with limitations, retired equipment receives removal tags and secure disposal. Issue comprehensive inspection report with equipment registers, findings summary, photos, recommendations, and competent person certification.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Tagged Equipment + Final Report + Updated Registers + Certificates
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
                        <img src="/www/assets/images/certifications/loler.png" alt="LOLER">
                        <span>LOLER Competent Person</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                        <span>ASNT Level II NDT</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                        <span>ASME B30 Knowledge</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/rigging.png" alt="Rigging Training">
                        <span>Rigging Specialist Training</span>
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
                <h2>Your Trusted Lifting Gear Inspection Partner</h2>
                <p>Professional expertise, equipment-specific knowledge, and commitment to safety</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Competent Persons & Specialists</h3>
                    <p>Our inspectors are trained and qualified as competent persons per LOLER, OSHA, and ASME requirements with lifting gear inspection knowledge of wire rope, chain, synthetic slings, and rigging hardware inspection techniques, standards, and retirement criteria.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Equipment-Specific Expertise</h3>
                    <p>
                        <Li></Li> knowledge and techniques for each equipment type: wire rope broken wire counting and core assessment, chain wear measurement and stretch evaluation, synthetic sling abrasion analysis, and hardware crack detection and dimensional verification.
                    </p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Standards Mastery & Compliance</h3>
                    <p>Expert knowledge of ASME B30.9, B30.26, EN 818, EN 1492, LOLER, OSHA requirements, and industry best practices. We apply current standards and retirement criteria to ensure compliant, defensible inspection decisions and documentation.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Comprehensive Asset Management Support</h3>
                    <p>Complete equipment tracking, register maintenance, inspection scheduling, retirement management, and next-due-date tracking. Digital systems support compliance management, audit preparation, and equipment lifecycle optimization.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Testing & Verification Capabilities</h3>
                    <p>On-site and workshop-based proof load testing, break testing for retirement verification, dimensional verification, and material confirmation using calibrated equipment and witnessed procedures for complete equipment verification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Industry Experience & Trust</h3>
                    <p>Proven experience across construction, offshore, manufacturing, utilities, and industrial sectors with references from major contractors, operators, and facility managers. Trusted partner for both routine inspections and lifting inspection projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Lifting Gear Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should lifting gear and slings be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.9 requires <strong>frequent inspection</strong> (daily to monthly based on usage), <strong>periodic inspection</strong> (annually or per competent person determination), and <strong>immediate inspection</strong> after unusual occurrences. LOLER requires thorough examination at least every <strong>12 months</strong> (6 months for lifting persons). Pre-use visual checks are required before each lift.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the retirement criteria for wire rope slings?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.9 specifies retirement when: <strong>10 randomly distributed broken wires in one rope lay</strong>, or <strong>5 broken wires in one strand in one rope lay</strong>, or <strong>one outer wire broken at end connection</strong>, plus diameter reduction exceeding limits, kinking, bird-caging, core protrusion, or severe corrosion. Each defect type has specific criteria.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When should chain slings be retired from service?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Chain slings must be retired when: <strong>15% wear in any link</strong> (EN 818), <strong>3% stretch</strong> (measured length increase), any <strong>crack</strong> in links or hardware, bent/twisted links, side loading damage, illegible markings, or heat damage evidence. Links showing wear approaching limits should be monitored closely.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What causes synthetic slings to be retired?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Synthetic slings must be retired for: <strong>cuts or snags</strong>, excessive <strong>abrasion</strong> (reduction in original thickness), <strong>melting or charring</strong>, <strong>chemical damage</strong>, <strong>UV degradation</strong> (severe color change, fiber brittleness), broken or damaged stitching, damaged end fittings, or illegible identification labels.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Who is qualified to inspect lifting gear?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspections must be performed by <strong>competent persons</strong> as defined by LOLER, OSHA, and ASME standards. This requires knowledge of equipment types, standards, inspection techniques, defect recognition, and retirement criteria. Training, experience, and ongoing competency maintenance are required. Some Lifting Inspection Services may require additional NDT certification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can damaged slings or hardware be repaired?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Wire rope slings:</strong> Limited repair options; generally replacement recommended. <strong>Chain slings:</strong> Links cannot be repaired; assembly hardware may be replaceable. <strong>Synthetic slings:</strong> Cannot be repaired; must be retired. <strong>Hardware:</strong> Some items may be repairable by qualified procedures, but replacement is often safer and more economical.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is required for lifting gear inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required documentation includes: <strong>equipment register</strong> (asset tracking), <strong>inspection reports</strong> (detailed findings), <strong>competent person certification</strong>, <strong>retirement certificates</strong>, <strong>next due dates</strong>, and <strong>photographic evidence</strong>. LOLER requires records retention. Equipment must be clearly marked with inspection dates and status.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What factors affect lifting gear service life?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Key factors include: <strong>loading frequency and severity</strong>, <strong>environmental conditions</strong> (corrosion, UV, chemicals, temperature), <strong>handling and storage practices</strong>, <strong>load contact surfaces</strong> (sharp edges, abrasion), <strong>rigging techniques</strong>, and <strong>maintenance quality</strong>. Proper selection, use, and care significantly extend equipment life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Safe Rigging Operations—Request Professional Inspection</h2>
                <p>Schedule comprehensive lifting gear and rigging equipment inspection with qualified competent persons and detailed documentation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Inspection Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Standards-Based Assessment</span>
                    <span><i class="fas fa-check"></i> Equipment-Specific Expertise</span>
                    <span><i class="fas fa-check"></i> Comprehensive Documentation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Lifting & Rigging Services</h2>
                <p>Complete lifting equipment inspection and certification solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/lifting-points-pad-eye-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-circle-notch"></i>
                    </div>
                    <h3>Lifting Points & Pad Eye</h3>
                    <p>Inspection, NDT, and load testing of permanent lifting attachments</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/spreader-beam-lifting-frame-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-arrows-alt-h"></i>
                    </div>
                    <h3>Spreader Beam & Lifting Frame</h3>
                    <p>Below-the-hook lifting device inspection and certification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/magnetic-particle.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing (MT)</h3>
                    <p>Crack detection for chains, hooks, and rigging hardware</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/crane-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <h3>Crane & Hoist Inspection</h3>
                    <p>Comprehensive crane inspection and load testing services</p>
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