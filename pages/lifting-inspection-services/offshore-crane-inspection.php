<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Offshore Crane & Derrick Inspection Services | API RP 2D & DNV Certification | Alpha Sonix NDT Solutions";
$meta_description = "Professional offshore crane and pedestal crane inspection, testing, and certification per API RP 2D, API Spec 2C, DNV standards. Comprehensive examination for oil & gas platforms, drilling rigs, FPSO, and marine vessels including structural NDT, load testing, and classification society compliance.";
$meta_keywords = "offshore crane inspection, derrick inspection, API RP 2D, API Spec 2C, pedestal crane testing, DNV crane inspection, offshore lifting equipment, marine crane certification, drilling rig crane inspection, offshore pedestal crane, FPSO crane inspection";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/offshore-crane-derrick-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/offshore-crane-og.jpg">

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
            "serviceType": "Offshore Crane & Derrick Inspection",
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
            "description": "Comprehensive offshore crane and derrick inspection services per API RP 2D, API Spec 2C, and DNV standards including structural assessment, NDT examination, load testing, and certification for oil & gas platforms, drilling rigs, FPSO, and marine vessels."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/offshore-crane-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Offshore Crane & Derrick Inspection</span>
                </div>
                <h1 class="page-title">Offshore Crane & Derrick Inspection</h1>
                <p class="page-subtitle">Specialized third-party inspection, testing, and certification of offshore pedestal cranes, platform cranes, and drilling derricks per API RP 2D, API Spec 2C, and DNV standards—ensuring structural integrity and operational safety in harsh marine environments</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> API RP 2D Compliant</span>
                    <span class="badge"><i class="fas fa-anchor"></i> DNV / ABS Recognized</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Offshore Certified</span>
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
                        <i class="fas fa-oil-well"></i>
                    </div>
                    <h3>Safety-Critical Offshore Equipment</h3>
                    <p>Offshore pedestal cranes and derricks are essential for platform operations, supply vessel handling, and drilling activities—operating in the world's most demanding environment where failure consequences are severe.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Harsh Marine Environment Challenges</h3>
                    <p>Saltwater corrosion, dynamic sea-state loading, fatigue from wave-induced motion, and extreme weather exposure accelerate degradation—requiring specialized inspection techniques and corrosion-focused assessment protocols.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>API RP 2D & Classification Compliance</h3>
                    <p>Mandatory compliance with API RP 2D (Operation, Maintenance, and Inspection), API Spec 2C (Design), DNV-ST-0378, and classification society rules requiring annual, quadrennial, and major inspections by qualified inspectors.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Specialized Offshore NDT & Assessment</h3>
                    <p>Advanced inspection including 100% critical weld examination, pedestal base and slew bearing assessment, boom corrosion mapping, wire rope evaluation, and dynamic load testing with offshore-specific acceptance criteria.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">OFFSHORE LIFTING INTEGRITY</span>
                    <h2>What is Offshore Crane & Derrick Inspection?</h2>
                    <p class="lead">Offshore crane and derrick inspection is a specialized examination program for pedestal-mounted cranes and drilling derricks operating on offshore platforms, FPSOs, drilling rigs, and marine vessels. These critical assets operate in corrosive marine environments under dynamic loading conditions, requiring rigorous inspection per API RP 2D (Recommended Practice for Operation, Maintenance, and Inspection of Offshore Cranes) and API Spec 2C (Offshore Pedestal-Mounted Cranes).</p>

                    <p>Offshore cranes differ fundamentally from land-based cranes: they experience <strong>dynamic amplification</strong> from vessel motion and wave action, <strong>accelerated corrosion</strong> from salt spray and humidity, <strong>fatigue loading</strong> from continuous offshore operations, and <strong>limited access</strong> for maintenance. Inspection must address unique failure modes: pedestal base cracking, slew bearing wear, boom corrosion and pitting, kingpost integrity, and structural fatigue at critical welds. Derricks face additional challenges including crown block, traveling block, and mast structure integrity under high cyclic drilling loads.</p>

                    <p>Our inspection methodology follows API RP 2D requirements for <strong>Category I (Pre-use)</strong>, <strong>Category II (Monthly)</strong>, <strong>Category III (Quarterly)</strong>, and <strong>Category IV (Annual)</strong> inspections, plus <strong>Quadrennial (4-year) major inspections</strong> requiring 100% critical weld NDT, pedestal disassembly and slew bearing examination, and comprehensive load testing. We integrate classification society requirements (DNV, ABS, Lloyd's Register) and provide documentation suitable for regulatory authorities, insurance underwriters, and operator safety management systems.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>API RP 2D Compliant Inspection Program</strong>
                                <p>Systematic inspection per API RP 2D 7th Edition including all Category I-IV inspections, annual comprehensive examination, quadrennial major inspection, and special inspections after incidents, modifications, or severe weather events.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Classification Society Recognition & Support</strong>
                                <p>Inspection procedures and documentation aligned to DNV-ST-0378, ABS Rules for Building and Classing Offshore Installations, and Lloyd's Register requirements. Support for class surveys and statutory certification.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Corrosion & Fatigue-Focused Assessment</strong>
                                <p>Specialized techniques for marine environment degradation including ultrasonic thickness mapping, pit depth measurement, corrosion rate assessment, and fatigue crack detection in highly stressed areas and previous repair zones.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Offshore-Specific Load Testing & Performance Verification</strong>
                                <p>Dynamic load testing, boom deflection measurement, slew bearing play assessment, and operational testing under simulated offshore conditions with witness certification suitable for regulatory submission.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Critical Offshore Safety Requirement:</strong>
                            <p>Offshore crane failures can result in dropped objects, personnel injuries, environmental damage, and production shutdowns costing millions per day. API RP 2D requires competent inspectors and documented inspection programs—non-compliance can result in regulatory enforcement, insurance denial, and operational restrictions.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Schedule Offshore Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/pedestal-crane-inspection.jpg" alt="Offshore pedestal crane structural inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Platform pedestal crane inspection including boom structure and slew bearing assessment</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">Annual</span>
                            <span class="stat-label">Category IV Inspection</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4-Year</span>
                            <span class="stat-label">Major (Quadrennial)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Critical Weld NDT</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> API RP 2D Inspection Categories</h4>
                        <ul class="principle-list">
                            <li><strong>I.</strong> Pre-use / Daily checks</li>
                            <li><strong>II.</strong> Monthly inspection</li>
                            <li><strong>III.</strong> Quarterly inspection</li>
                            <li><strong>IV.</strong> Annual comprehensive</li>
                            <li><strong>Quad.</strong> 4-year major inspection</li>
                            <li><strong>Special</strong> Post-incident/modification</li>
                            <li><strong>Load Test</strong> Capacity verification</li>
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
                <span class="section-label">WHY OFFSHORE INSPECTION MATTERS</span>
                <h2>Key Benefits of Professional Offshore Crane Inspection</h2>
                <p>Protect personnel, assets, and operations in the world's most demanding environment</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3>Personnel Safety & Dropped Object Prevention</h3>
                    <p>Offshore crane failures pose immediate life-safety risks to platform personnel and can result in dropped objects into the sea. Professional inspection identifies structural fatigue, corrosion thinning, and mechanical wear before catastrophic failure—protecting lives in remote, high-consequence environments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-anchor"></i>
                    </div>
                    <h3>API RP 2D & Regulatory Compliance</h3>
                    <p>Meet mandatory requirements under API RP 2D, flag state regulations, and classification society rules. Independent inspection provides defensible documentation for BSEE (US), HSE (UK), NOPSEMA (Australia), and other regulatory authorities enforcing offshore safety regulations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Classification Society Acceptance</h3>
                    <p>Inspection reports and certifications recognized by DNV, ABS, Lloyd's Register, and Bureau Veritas support class surveys, statutory certification, and insurance underwriting. Proper documentation prevents operational restrictions and facilitates vessel/facility certification.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Production Continuity & Unplanned Downtime Prevention</h3>
                    <p>Offshore crane downtime can halt critical operations (supply vessel offloading, equipment maintenance) costing $500,000 to $2M+ per day in lost production. Predictive inspection identifies issues during planned maintenance windows, avoiding emergency shutdowns.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Corrosion Management & Life Extension</h3>
                    <p>Marine environment accelerates corrosion 5-10x compared to onshore. Professional inspection includes thickness mapping, coating assessment, and corrosion rate monitoring—enabling data-driven maintenance planning, targeted repairs, and informed decisions on equipment life extension versus replacement.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Insurance & Liability Protection</h3>
                    <p>Offshore operators require documented inspection programs for insurance coverage and liability protection. Independent third-party certification demonstrates due diligence, supports claims processes, and provides defensible evidence of proper maintenance and regulatory compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CRANE TYPES ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">OFFSHORE CRANE TYPES</span>
                <h2>Types of Offshore Cranes & Derricks We Inspect</h2>
                <p>Specialized inspection programs for all offshore lifting equipment configurations</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Pedestal Cranes -->
                    <div class="wave-mode-card">
                        <div class="mode-header electrical">
                            <i class="fas fa-dot-circle"></i>
                            <h3>Pedestal-Mounted Offshore Cranes</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Fixed pedestal cranes mounted on offshore platforms, FPSOs, and production facilities. Primary cranes for supply vessel operations, equipment handling, and platform maintenance. Typically lattice boom or telescopic boom configurations.</p>
                            <p><strong>API Classification:</strong> API Spec 2C compliant, designed for dynamic offshore loading and marine environment service.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Areas:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Pedestal base structure and weld integrity (100% NDT)</li>
                                    <li><i class="fas fa-check"></i> Slew bearing condition, play measurement, lubrication</li>
                                    <li><i class="fas fa-check"></i> Boom structure corrosion mapping and thickness</li>
                                    <li><i class="fas fa-check"></i> Kingpost and mast structure fatigue assessment</li>
                                    <li><i class="fas fa-check"></i> A-frame and boom hoist system integrity</li>
                                    <li><i class="fas fa-check"></i> Machinery house and winch foundations</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Typical Capacity:</strong> 5 to 200+ tons | <strong>Service:</strong> Platform supply, maintenance, construction
                            </div>
                        </div>
                    </div>

                    <!-- Lattice Boom Cranes -->
                    <div class="wave-mode-card">
                        <div class="mode-header mechanical">
                            <i class="fas fa-th"></i>
                            <h3>Lattice Boom Offshore Cranes</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Conventional lattice boom cranes adapted for offshore service with enhanced structural design for marine environment and dynamic loading. Used for heavy lifts on platforms and construction vessels.</p>
                            <p><strong>Key Features:</strong> Modular boom sections, high capacity, suitable for repeated assembly/disassembly, robust design for harsh conditions.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Areas:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Lattice boom chord and lacings (all connections)</li>
                                    <li><i class="fas fa-check"></i> Boom pin connections and wear surfaces</li>
                                    <li><i class="fas fa-check"></i> Pendant lines and boom suspension system</li>
                                    <li><i class="fas fa-check"></i> Boom hoist drums, brakes, and reeving</li>
                                    <li><i class="fas fa-check"></i> Load block and hook assembly condition</li>
                                    <li><i class="fas fa-check"></i> Wire rope condition throughout entire length</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Typical Capacity:</strong> 50 to 1000+ tons | <strong>Service:</strong> Heavy lift, construction, decommissioning
                            </div>
                        </div>
                    </div>

                    <!-- Knuckle Boom Cranes -->
                    <div class="wave-mode-card">
                        <div class="mode-header building">
                            <i class="fas fa-hand-paper"></i>
                            <h3>Knuckle Boom & Articulating Cranes</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Articulating boom cranes with folding capability, commonly used on supply vessels, dive support vessels, and for deck operations. Provides compact storage and precise load control.</p>
                            <p><strong>Key Features:</strong> Hydraulic articulation, compact footprint, excellent for vessel operations, often equipped with active heave compensation for offshore lifts.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Areas:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Hydraulic cylinders (boom, knuckle, telescope)</li>
                                    <li><i class="fas fa-check"></i> Articulation pins and bushings (wear measurement)</li>
                                    <li><i class="fas fa-check"></i> Hydraulic system integrity (hoses, valves, pressures)</li>
                                    <li><i class="fas fa-check"></i> Structural welds at high-stress articulation points</li>
                                    <li><i class="fas fa-check"></i> Slewing system and bearing condition</li>
                                    <li><i class="fas fa-check"></i> Control systems and safety interlocks</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Typical Capacity:</strong> 2 to 50 tons | <strong>Service:</strong> Vessel deck operations, precise positioning
                            </div>
                        </div>
                    </div>

                    <!-- Drilling Derricks -->
                    <div class="wave-mode-card">
                        <div class="mode-header process">
                            <i class="fas fa-industry"></i>
                            <h3>Drilling Derricks & Masts</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Structural towers supporting drilling operations on offshore rigs and platforms. Includes derricks, masts, and associated hoisting equipment including crown blocks, traveling blocks, and drawworks.</p>
                            <p><strong>Key Features:</strong> High cyclic loading, critical safety function, API 4F design standard, essential for drilling operations integrity.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Areas:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Derrick/mast structural members (100% critical welds)</li>
                                    <li><i class="fas fa-check"></i> Crown block and traveling block sheaves and bearings</li>
                                    <li><i class="fas fa-check"></i> Drawworks, brakes, and hoisting system</li>
                                    <li><i class="fas fa-check"></i> Derrick foundation and substructure</li>
                                    <li><i class="fas fa-check"></i> Guy lines and structural bracing (if applicable)</li>
                                    <li><i class="fas fa-check"></i> Fall protection and access systems integrity</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Standards:</strong> API 4F, API RP 4G | <strong>Service:</strong> Drilling operations, well intervention
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Offshore Crane Inspection Requirements (API RP 2D)</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Inspection Category</th>
                                <th>Frequency</th>
                                <th>Scope Requirements</th>
                                <th>Qualified Personnel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Category I (Pre-use)</strong></td>
                                <td>Daily / Each shift</td>
                                <td>Visual checks, operational test, safety devices</td>
                                <td>Crane operator or rigger</td>
                            </tr>
                            <tr>
                                <td><strong>Category II (Monthly)</strong></td>
                                <td>Monthly</td>
                                <td>Category I + detailed visual, wire rope, hooks</td>
                                <td>Competent person (trained)</td>
                            </tr>
                            <tr>
                                <td><strong>Category III (Quarterly)</strong></td>
                                <td>Quarterly</td>
                                <td>Category II + critical components, NDT sampling</td>
                                <td>Qualified inspector</td>
                            </tr>
                            <tr>
                                <td><strong>Category IV (Annual)</strong></td>
                                <td>Annually</td>
                                <td>Complete inspection, functional test, load test</td>
                                <td>Qualified inspector + witness</td>
                            </tr>
                            <tr>
                                <td><strong>Quadrennial (4-Year)</strong></td>
                                <td>Every 4 years</td>
                                <td>100% critical weld NDT, pedestal disassembly, major</td>
                                <td>Qualified inspector + NDT Level II/III</td>
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
                <span class="section-label">OFFSHORE APPLICATIONS</span>
                <h2>Facilities & Operations We Serve</h2>
                <p>Comprehensive offshore crane inspection across the oil & gas and marine sectors</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="platforms">Production Platforms</button>
                    <button class="tab-btn" data-tab="drilling">Drilling Rigs</button>
                    <button class="tab-btn" data-tab="fpso">FPSO & Floating</button>
                    <button class="tab-btn" data-tab="vessels">Support Vessels</button>
                </div>

                <div class="tabs-content">
                    <!-- Production Platforms Tab -->
                    <div class="tab-panel active" id="platforms">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/platform-crane.jpg" alt="Offshore platform pedestal crane">
                            </div>
                            <div class="tab-text">
                                <h3>Fixed Production Platforms & Jackets</h3>
                                <p>Fixed offshore platforms rely on pedestal cranes for all material handling, equipment maintenance, and supply vessel operations. These cranes operate in severe marine environments with limited maintenance access, making regular inspection critical for production continuity and safety.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Fixed platform pedestal cranes (5-100 ton capacity)</li>
                                    <li><i class="fas fa-check"></i> Wellhead platform maintenance cranes</li>
                                    <li><i class="fas fa-check"></i> Living quarters and utility platform cranes</li>
                                    <li><i class="fas fa-check"></i> Compressor and processing platform lifting equipment</li>
                                    <li><i class="fas fa-check"></i> Flare boom and remote structure cranes</li>
                                    <li><i class="fas fa-check"></i> Decommissioning and abandonment crane operations</li>
                                    <li><i class="fas fa-check"></i> Platform modification and upgrade projects</li>
                                    <li><i class="fas fa-check"></i> Emergency response and evacuation equipment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Regulatory Framework:</strong>
                                    <span class="standard-tag">API RP 2D</span>
                                    <span class="standard-tag">BSEE (US)</span>
                                    <span class="standard-tag">HSE (UK)</span>
                                    <span class="standard-tag">NOPSEMA</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Drilling Rigs Tab -->
                    <div class="tab-panel" id="drilling">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/drilling-derrick.jpg" alt="Offshore drilling derrick inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Drilling Rigs & Mobile Offshore Units</h3>
                                <p>Drilling rigs and MODUs operate multiple cranes and derricks under extreme duty cycles with high criticality. Drilling derricks, pipe handling equipment, and platform cranes require specialized inspection programs addressing high-cycle fatigue and dynamic loading.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Jack-up rig pedestal and deck cranes</li>
                                    <li><i class="fas fa-check"></i> Semi-submersible rig cranes and material handling</li>
                                    <li><i class="fas fa-check"></i> Drillship cranes and riser handling equipment</li>
                                    <li><i class="fas fa-check"></i> Drilling derricks and mast structures (API 4F)</li>
                                    <li><i class="fas fa-check"></i> BOP handling cranes and equipment</li>
                                    <li><i class="fas fa-check"></i> Pipe handling systems and iron roughnecks</li>
                                    <li><i class="fas fa-check"></i> Riser and casing handling equipment</li>
                                    <li><i class="fas fa-check"></i> Subsea equipment deployment systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API RP 2D</span>
                                    <span class="standard-tag">API 4F / 4G</span>
                                    <span class="standard-tag">DNV-ST-0378</span>
                                    <span class="standard-tag">MODU Code</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FPSO Tab -->
                    <div class="tab-panel" id="fpso">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/fpso-crane.jpg" alt="FPSO offshore crane">
                            </div>
                            <div class="tab-text">
                                <h3>FPSOs, FSOs & Floating Production</h3>
                                <p>Floating production facilities operate cranes in dynamic conditions with vessel motion, requiring enhanced structural assessment and dynamic load considerations. Cranes must maintain certification under classification society rules for floating installations.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> FPSO topsides pedestal cranes</li>
                                    <li><i class="fas fa-check"></i> Offloading and tandem mooring cranes</li>
                                    <li><i class="fas fa-check"></i> Turret and swivel handling equipment</li>
                                    <li><i class="fas fa-check"></i> Flare tower and remote equipment cranes</li>
                                    <li><i class="fas fa-check"></i> FSO and FSU material handling</li>
                                    <li><i class="fas fa-check"></i> Floating LNG and storage facilities</li>
                                    <li><i class="fas fa-check"></i> Dynamic positioning and mooring system support</li>
                                    <li><i class="fas fa-check"></i> Floating wind and renewable energy platforms</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">DNV-ST-0378</span>
                                    <span class="standard-tag">ABS FPI Rules</span>
                                    <span class="standard-tag">API RP 2D</span>
                                    <span class="standard-tag">Class Requirements</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vessels Tab -->
                    <div class="tab-panel" id="vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/supply-vessel-crane.jpg" alt="Offshore support vessel crane">
                            </div>
                            <div class="tab-text">
                                <h3>Offshore Support & Construction Vessels</h3>
                                <p>Offshore support vessels, construction vessels, and specialized marine craft operate knuckle boom and telescopic cranes for subsea operations, equipment deployment, and offshore construction activities requiring marine-specific inspection protocols.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Platform supply vessels (PSV) deck cranes</li>
                                    <li><i class="fas fa-check"></i> Anchor handling tug supply (AHTS) vessels</li>
                                    <li><i class="fas fa-check"></i> Construction and heavy lift vessels</li>
                                    <li><i class="fas fa-check"></i> Dive support and ROV support vessels</li>
                                    <li><i class="fas fa-check"></i> Pipe-lay and cable-lay vessels</li>
                                    <li><i class="fas fa-check"></i> Wind turbine installation vessels (WTIV)</li>
                                    <li><i class="fas fa-check"></i> Accommodation and walk-to-work vessels</li>
                                    <li><i class="fas fa-check"></i> Offshore wind and marine renewable vessels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">DNV-ST-0377</span>
                                    <span class="standard-tag">EN 13852</span>
                                    <span class="standard-tag">API RP 2D</span>
                                    <span class="standard-tag">Flag State</span>
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
                <h2>Our Offshore Crane Inspection Capabilities</h2>
                <p>Specialized techniques and equipment for harsh marine environment assessment</p>
            </div>

            <div class="capabilities-grid">
                <!-- Structural Assessment -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-building"></i>
                        <h3>Structural & Weld Assessment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Pedestal Base:</span> 100% weld NDT, thickness measurement, corrosion mapping</li>
                        <li><span class="cap-label">Boom Structure:</span> Lattice chords, lacing, boom pins, corrosion assessment</li>
                        <li><span class="cap-label">Kingpost/Mast:</span> Weld integrity, fatigue crack detection, alignment</li>
                        <li><span class="cap-label">Slew Bearing:</span> Play measurement, raceway condition, lubrication</li>
                        <li><span class="cap-label">Critical Welds:</span> MT/PT/UT per API RP 2D quadrennial requirements</li>
                        <li><span class="cap-label">Corrosion Mapping:</span> UT thickness surveys, pit depth measurement</li>
                        <li><span class="cap-label">Fatigue Assessment:</span> High-stress area examination, crack detection</li>
                        <li><span class="cap-label">Coating Evaluation:</span> Coating condition, breakdown assessment</li>
                    </ul>
                </div>

                <!-- Mechanical Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cogs"></i>
                        <h3>Mechanical Systems Examination</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Hoisting System:</span> Winches, drums, gearboxes, brakes</li>
                        <li><span class="cap-label">Boom Hoist:</span> Boom hoist system, pendants, A-frame</li>
                        <li><span class="cap-label">Swing System:</span> Swing motors, gearboxes, brakes, slew drives</li>
                        <li><span class="cap-label">Hydraulic Systems:</span> Pumps, cylinders, valves (knuckle booms)</li>
                        <li><span class="cap-label">Wire Rope:</span> Complete rope inspection per API RP 2D</li>
                        <li><span class="cap-label">Sheaves & Blocks:</span> Sheave condition, bearings, alignment</li>
                        <li><span class="cap-label">Brakes:</span> Holding capacity, adjustment, wear assessment</li>
                        <li><span class="cap-label">Lubrication:</span> Systems, schedules, condition</li>
                    </ul>
                </div>

                <!-- NDT Methods -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-microscope"></i>
                        <h3>Advanced NDT for Offshore</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Magnetic Particle (MT):</span> Surface crack detection, yoke and prod techniques</li>
                        <li><span class="cap-label">Liquid Penetrant (PT):</span> Non-ferrous and stainless components</li>
                        <li><span class="cap-label">Ultrasonic (UT):</span> Thickness measurement, weld volumetric examination</li>
                        <li><span class="cap-label">Eddy Current:</span> Surface crack detection, coating thickness</li>
                        <li><span class="cap-label">Visual (VT):</span> Detailed visual per API RP 2D requirements</li>
                        <li><span class="cap-label">Rope NDT:</span> Magnetic rope testing (MRT) for wire rope assessment</li>
                        <li><span class="cap-label">Corrosion Mapping:</span> Automated UT scanning for thickness surveys</li>
                        <li><span class="cap-label">Personnel:</span> ASNT Level II/III, PCN, CSWIP certified</li>
                    </ul>
                </div>

                <!-- Load Testing -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-balance-scale"></i>
                        <h3>Load Testing & Performance</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Static Load Testing:</span> Proof load per API RP 2D requirements</li>
                        <li><span class="cap-label">Dynamic Testing:</span> Operational testing under load</li>
                        <li><span class="cap-label">Capacity Verification:</span> Load chart validation across radii</li>
                        <li><span class="cap-label">Boom Deflection:</span> Measurement and comparison to design</li>
                        <li><span class="cap-label">Brake Testing:</span> Holding capacity verification</li>
                        <li><span class="cap-label">Safety Systems:</span> LMI, anti-two-block, limit switches</li>
                        <li><span class="cap-label">Sea-State Considerations:</span> Dynamic amplification factors</li>
                        <li><span class="cap-label">Test Equipment:</span> Calibrated load cells, water bags</li>
                    </ul>
                </div>

                <!-- Corrosion Assessment -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-water"></i>
                        <h3>Marine Corrosion Assessment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">General Corrosion:</span> UT thickness surveys, mapping</li>
                        <li><span class="cap-label">Pitting Corrosion:</span> Pit depth measurement and assessment</li>
                        <li><span class="cap-label">Coating Condition:</span> Coating breakdown, blistering, rust</li>
                        <li><span class="cap-label">Cathodic Protection:</span> System effectiveness (if applicable)</li>
                        <li><span class="cap-label">Corrosion Rate:</span> Trending and remaining life assessment</li>
                        <li><span class="cap-label">Critical Areas:</span> Splash zone, boom tips, pedestal base</li>
                        <li><span class="cap-label">Material Degradation:</span> Hydrogen embrittlement, SSC</li>
                        <li><span class="cap-label">Repair Recommendations:</span> Coating repair, steel replacement</li>
                    </ul>
                </div>

                <!-- Documentation -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-file-certificate"></i>
                        <h3>Certification & Documentation</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">API RP 2D Reports:</span> Category I-IV inspection documentation</li>
                        <li><span class="cap-label">NDT Reports:</span> Detailed findings with acceptance criteria</li>
                        <li><span class="cap-label">Load Test Certificates:</span> Witnessed testing documentation</li>
                        <li><span class="cap-label">Classification Support:</span> DNV, ABS, Lloyd's survey support</li>
                        <li><span class="cap-label">Regulatory Submissions:</span> BSEE, HSE, flag state documentation</li>
                        <li><span class="cap-label">Digital Records:</span> Photographic evidence, trending data</li>
                        <li><span class="cap-label">Competent Person:</span> API RP 2D qualified inspector certification</li>
                        <li><span class="cap-label">Data Retention:</span> Long-term records for asset lifecycle</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== STANDARDS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">STANDARDS & CLASSIFICATION</span>
                    <h2>Applicable Standards & Regulatory Framework</h2>
                    <p class="lead">Offshore crane inspection must comply with multiple overlapping standards and regulatory requirements. Our programs integrate API, classification society, and jurisdictional requirements to provide comprehensive compliance and certification.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>API RP 2D – Operation, Maintenance, and Inspection of Offshore Cranes</h4>
                                <p>Primary industry standard defining inspection categories, frequencies, and procedures for offshore cranes. Requires Category I-IV inspections, quadrennial major inspections, competent inspectors, and detailed documentation. 7th Edition current as of 2024.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>API Spec 2C – Offshore Pedestal-Mounted Cranes</h4>
                                <p>Design and manufacturing standard for offshore cranes defining structural requirements, safety factors, design loads (including dynamic amplification), and testing requirements. Essential reference for inspection acceptance criteria and design verification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-anchor"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>DNV-ST-0378 – Standard for Offshore and Platform Lifting Appliances</h4>
                                <p>DNV standard for design, construction, and certification of offshore cranes. Includes requirements for materials, welding, testing, and in-service inspection. Widely recognized by regulatory authorities and insurance underwriters.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ship"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ABS Rules for Building and Classing Offshore Installations</h4>
                                <p>American Bureau of Shipping requirements for offshore cranes including design review, material certification, NDT requirements, load testing, and periodic surveys. Essential for ABS-classed facilities and vessels.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>API 4F / API RP 4G – Drilling Derricks and Masts</h4>
                                <p>Standards for drilling structures including design (API 4F), and inspection/maintenance (API RP 4G). Requires comprehensive structural assessment, critical weld examination, and periodic load testing for drilling derricks and masts.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Regulatory Authorities – BSEE, HSE, NOPSEMA</h4>
                                <p>Jurisdictional requirements: BSEE (US Gulf of Mexico), HSE (UK North Sea), NOPSEMA (Australia), and other national regulators enforce API RP 2D compliance through inspections, audits, and incident investigations. Non-compliance can result in shutdown orders and penalties.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Standards & Guidance</h4>
                        <p><strong>EN 13852:</strong> Offshore cranes (European). <strong>LOLER:</strong> UK Lifting Operations regulations. <strong>ISO 9927:</strong> Crane inspection standards. <strong>IMCA:</strong> International Marine Contractors Association guidance. <strong>IADC:</strong> International Association of Drilling Contractors guidelines.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/offshore-crane-ndt.jpg" alt="Offshore crane NDT inspection">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Offshore NDT Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>API RP 2D qualified inspectors</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Classification society support</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Marine corrosion expertise</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>100% critical weld NDT</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Offshore load testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Regulatory documentation</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Certifications & Recognition</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/api.png" alt="API">
                            <img src="/www/assets/images/certifications/dnv.png" alt="DNV">
                            <img src="/www/assets/images/certifications/abs.png" alt="ABS">
                            <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
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
                <h2>Offshore Crane Inspection Procedure (API RP 2D)</h2>
                <p>Systematic approach ensuring API RP 2D compliance and operational safety</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning & Documentation Review</h3>
                        <p>Review crane specifications, API RP 2D inspection history, previous NDT reports, maintenance records, and operational data. Confirm inspection category (I-IV or quadrennial), applicable standards, classification society requirements, and regulatory obligations. Coordinate offshore logistics, permits to work, and safety inductions.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan + Offshore Safety Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Visual & Operational Pre-Check (Category I-II)</h3>
                        <p>Conduct Category I and II inspections including visual examination of structure, mechanical components, wire rope, and safety devices. Perform operational testing of all crane functions. Document any obvious defects, leaks, or abnormalities. Review operator daily check records and maintenance logs.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Pre-Use and Monthly Inspection Records
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Detailed Structural & Mechanical Examination</h3>
                        <p>Category III-IV inspection including detailed visual examination of boom, pedestal, slew bearing, machinery house, and critical structural components. Measure slew bearing play, check for structural cracks, assess corrosion, and evaluate mechanical system condition. Document with detailed photography.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Detailed Inspection Report + Photo Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>NDT Examination (Quadrennial Requirement)</h3>
                        <p>Perform 100% NDT of critical welds per API RP 2D quadrennial requirements: pedestal base welds, boom connections, slew bearing mounting, and high-stress areas. Methods include MT, PT, and UT as appropriate. Document all indications and evaluate against acceptance criteria. Perform wire rope NDT (MRT) if specified.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> NDT Reports (MT/PT/UT) + Weld Maps + Disposition
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Load Testing & Performance Verification</h3>
                        <p>Conduct load testing per API RP 2D: static load test at 100% rated capacity, operational testing of all functions under load, brake holding tests, and safety system verification. For quadrennial inspections, perform proof load testing as required. Measure boom deflection and compare to design values. Monitor for any permanent deformation.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Certificate + Performance Data
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Final Assessment & Certification</h3>
                        <p>Evaluate all inspection and test results against API RP 2D acceptance criteria. Determine crane status: Fit for Service, Fit with Restrictions, or Not Fit for Service. Issue inspection certificate, update crane register, and provide comprehensive report suitable for regulatory submission, classification society review, and operator safety management system.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> API RP 2D Inspection Certificate + Final Report
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Qualifications & Accreditations</h3>
                <div class="cert-grid">
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/api.png" alt="API">
                        <span>API RP 2D Qualified</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/dnv.png" alt="DNV">
                        <span>DNV Approved Service</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/abs.png" alt="ABS">
                        <span>ABS Recognized</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                        <span>ASNT Level II/III NDT</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/irata.png" alt="IRATA">
                        <span>IRATA Rope Access</span>
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
                <h2>Your Offshore Crane Inspection Specialist</h2>
                <p>API RP 2D expertise, offshore experience, and classification society recognition</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-anchor"></i>
                    </div>
                    <h3>API RP 2D Qualified Inspectors</h3>
                    <p>Our inspectors are qualified per API RP 2D requirements with specialized training in offshore crane inspection, marine corrosion assessment, and dynamic loading considerations. We understand the unique challenges of offshore operations and regulatory expectations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>Extensive Offshore Experience</h3>
                    <p>Proven track record inspecting pedestal cranes and derricks on production platforms, drilling rigs, FPSOs, and support vessels across major offshore basins. We understand offshore logistics, safety requirements, and operational constraints.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Classification Society Support</h3>
                    <p>Inspection procedures and documentation aligned to DNV, ABS, and Lloyd's Register requirements. We provide support for class surveys, statutory certification, and regulatory submissions—streamlining the certification process.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Marine Corrosion Expertise</h3>
                    <p>Specialized knowledge of marine corrosion mechanisms, coating systems, and cathodic protection. Our inspectors can assess corrosion rates, predict remaining life, and recommend effective mitigation strategies for offshore environments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Offshore Safety & Access Capabilities</h3>
                    <p>Personnel hold required offshore certifications (BOSIET, HUET, medicals) and are trained in offshore safety procedures. IRATA rope access qualified technicians provide access to difficult-to-reach areas without scaffolding.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Offshore Support</h3>
                    <p>Mobilization capabilities for offshore projects worldwide with experience in major oil and gas basins. We coordinate with platform operators, drilling contractors, and vessel owners to minimize operational disruption during inspections.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Offshore Crane Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between API RP 2D Category III and Category IV inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Category III (Quarterly)</strong> is a more detailed visual inspection by a qualified inspector focusing on critical components. <strong>Category IV (Annual)</strong> is a comprehensive inspection including detailed examination of all components, operational testing, and load testing. Category IV requires more extensive documentation and is typically performed by third-party inspectors.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is a quadrennial (4-year) inspection for offshore cranes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>The quadrennial inspection is a major inspection required every 4 years per API RP 2D. It includes 100% NDT of all critical welds, pedestal base disassembly and slew bearing examination (where design permits), detailed structural assessment, and comprehensive load testing. This is the most thorough inspection level and often requires crane downtime and partial disassembly.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Who can perform API RP 2D inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>API RP 2D requires inspections be performed by <strong>qualified persons</strong> with knowledge of crane operation, inspection techniques, and the standard's requirements. Category I-II can be performed by trained operators. Category III-IV and quadrennial inspections should be performed by independent third-party inspectors with specific offshore crane expertise and NDT qualifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the most common findings during offshore crane inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Common findings include: <strong>corrosion</strong> (especially at pedestal base, boom sections, and splash zone), <strong>wire rope deterioration</strong>, <strong>hydraulic leaks</strong>, <strong>slew bearing wear</strong>, <strong>cracked welds</strong> (particularly at high-stress areas), <strong>coating breakdown</strong>, and <strong>safety system malfunctions</strong> (LMI, anti-two-block). Marine environment accelerates all degradation mechanisms.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does classification society certification work for offshore cranes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Classification societies (DNV, ABS, Lloyd's) require periodic surveys of offshore cranes as part of facility/vessel classification. This includes annual surveys and 5-year special surveys. Third-party inspection reports per API RP 2D are typically accepted as supporting documentation, but the class surveyor must witness key aspects and issue the class certificate.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What load testing is required for offshore cranes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>API RP 2D requires annual load testing at 100% rated capacity with operational testing. New cranes and those after major repairs require proof load testing (typically 125% of rated load). Testing must include all crane motions and safety systems. For cranes in critical service or after incidents, more extensive testing may be required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you inspect cranes on platforms without disrupting operations?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We coordinate closely with platform operations to schedule inspections during planned maintenance windows, weather downtime, or low-activity periods. Category I-III inspections can often be performed with crane in service. Category IV and quadrennial inspections require crane shutdown but are planned well in advance to minimize production impact.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do regulators require for offshore crane inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Regulators (BSEE, HSE, NOPSEMA) require: <strong>inspection records</strong> for all API RP 2D categories, <strong>NDT reports</strong> for critical welds, <strong>load test certificates</strong>, <strong>maintenance records</strong>, <strong>competent person qualifications</strong>, and <strong>corrective action tracking</strong>. Records must be retained for the life of the equipment and available for regulatory inspection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Offshore Lifting Safety—Schedule API RP 2D Inspection</h2>
                <p>Professional offshore crane and derrick inspection services with API RP 2D qualified inspectors and classification society support</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Offshore Inspection</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> API RP 2D Compliant</span>
                    <span><i class="fas fa-check"></i> Classification Society Support</span>
                    <span><i class="fas fa-check"></i> Offshore Certified Personnel</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Offshore Inspection Services</h2>
                <p>Complete offshore asset integrity and lifting equipment solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/load-testing-services.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Load Testing Services</h3>
                    <p>Professional load testing and capacity verification for offshore equipment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/ultrasonic-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Advanced NDT Services</h3>
                    <p>Marine corrosion mapping, thickness surveys, and weld inspection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/lifting-gear-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Lifting Gear Inspection</h3>
                    <p>Rigging equipment inspection for offshore supply and lifting operations</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/rvi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Remote Visual Inspection</h3>
                    <p>RVI for internal structures and difficult-access areas on offshore cranes</p>
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