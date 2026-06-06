<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Forklift & Material Handling Equipment Inspection Services | OSHA 1910.178 & ANSI B56.1 Certification | Alpha Sonix";
$meta_description = "Professional forklift and material handling equipment inspection, testing, and certification services. Comprehensive examination per OSHA 1910.178, ANSI B56.1, LOLER, PUWER including pre-shift, periodic, and annual inspections for counterbalance forklifts, reach trucks, pallet jacks, stackers, and powered industrial trucks.";
$meta_keywords = "forklift inspection, material handling equipment inspection, OSHA 1910.178, ANSI B56.1, forklift certification, powered industrial truck inspection, LOLER inspection, forklift safety inspection, pallet truck inspection, reach truck inspection, stacker inspection";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/forklift-material-handling-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/forklift-inspection-og.jpg">

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
            "serviceType": "Forklift & Material Handling Equipment Inspection",
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
            "description": "Comprehensive forklift and material handling equipment inspection services including pre-shift, periodic, and annual examinations per OSHA 1910.178, ANSI B56.1, LOLER, and PUWER for counterbalance forklifts, reach trucks, pallet jacks, stackers, and powered industrial trucks."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/forklift-inspection-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Forklift & Material Handling Equipment Inspection</span>
                </div>
                <h1 class="page-title">Forklift & Material Handling Equipment Inspection</h1>
                <p class="page-subtitle">Professional inspection, testing, and certification of powered industrial trucks, forklifts, pallet trucks, and material handling equipment—ensuring workplace safety, OSHA 1910.178 compliance, and operational reliability through comprehensive examination of structural, mechanical, and safety systems</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> OSHA 1910.178 / ANSI B56.1</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Pre-Shift & Annual Inspection</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Competent Person Certified</span>
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
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Workplace Safety Critical</h3>
                    <p>Forklifts are involved in approximately 85 fatalities and 35,000 serious injuries annually in the US alone—proper inspection is essential for preventing tip-overs, mechanical failures, and struck-by incidents.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3>OSHA Mandated Inspections</h3>
                    <p>OSHA 1910.178 requires daily pre-shift inspections, periodic examinations, and annual comprehensive inspections by competent persons with documented records maintained for compliance verification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Multi-System Assessment</h3>
                    <p>Comprehensive examination covering masts, forks, hydraulics, brakes, steering, tires, overhead guards, and safety devices—addressing all critical systems affecting safe operation and load handling.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Preventive Maintenance Support</h3>
                    <p>Professional inspection identifies wear trends, developing defects, and maintenance needs—supporting planned maintenance programs, reducing unplanned downtime, and extending equipment service life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">POWERED INDUSTRIAL TRUCK SAFETY</span>
                    <h2>What is Forklift & Material Handling Equipment Inspection?</h2>
                    <p class="lead">Forklift and material handling equipment inspection is the systematic examination, testing, and certification of powered industrial trucks including counterbalance forklifts, reach trucks, pallet jacks, order pickers, side loaders, and rough terrain forklifts to ensure safe operation, regulatory compliance, and mechanical reliability in workplace environments.</p>

                    <p>OSHA 1910.178 defines powered industrial trucks as mobile, power-propelled trucks used to carry, push, pull, lift, stack, or tier materials. These vehicles are classified into seven categories: Class I (electric motor rider), Class II (electric narrow aisle), Class III (electric hand trucks), Class IV (IC engine cushion tires), Class V (IC engine pneumatic), Class VI (electric/IC tow tractors), and Class VII (rough terrain). Each classification has specific inspection requirements, but all require <strong>daily pre-shift inspections</strong> by operators and <strong>periodic comprehensive inspections</strong> by competent persons.</p>

                    <p>Our inspection methodology follows OSHA 1910.178 and ANSI B56.1 requirements including <strong>pre-shift inspections</strong> (daily visual and operational checks), <strong>periodic inspections</strong> (monthly to annual detailed examinations based on usage and environment), and <strong>annual comprehensive inspections</strong> with complete evaluation of all safety-critical systems. Inspection covers structural components (mast, carriage, overhead guard), load handling attachments (forks, clamps), hydraulic systems, braking systems, steering, tires/wheels, and safety devices.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>OSHA 1910.178 Compliance</strong>
                                <p>Inspections structured around OSHA requirements for powered industrial trucks including daily checks, periodic examinations, and maintenance records. Our documentation supports OSHA inspections, insurance audits, and workplace safety compliance programs.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Fork & Mast Critical Assessment</strong>
                                <p>Specialized examination of forks for cracks, wear, deformation, and heel thickness using ASME B56.1 acceptance criteria. Mast inspection includes channel wear, roller condition, chain wear, and hydraulic cylinder integrity—critical load-bearing components.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Brake & Steering Safety Systems</strong>
                                <p>Comprehensive testing of service brakes, parking brakes, and steering systems including hydraulic integrity, mechanical linkages, and operational performance under load conditions—essential for safe operation and tip-over prevention.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Competent Person Certification</strong>
                                <p>Inspections performed by qualified competent persons with training in forklift mechanics, OSHA requirements, and inspection techniques. Formal certification documentation supports employer compliance obligations and liability protection.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Critical OSHA Requirement:</strong>
                            <p>OSHA 1910.178(q)(7) mandates that industrial trucks be examined before being placed in service, and shall not be placed in service if examination shows any condition adversely affecting safety. Daily pre-shift inspections are mandatory, and deficiencies must be corrected before operation.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Schedule Forklift Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Equipment Types</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/forklift-fork-inspection.jpg" alt="Forklift fork thickness measurement">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Fork heel thickness measurement using calibrated gauges per ANSI B56.1</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">Daily</span>
                            <span class="stat-label">Pre-Shift Required</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">10%</span>
                            <span class="stat-label">Fork Wear Limit</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Annual</span>
                            <span class="stat-label">Comprehensive</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> OSHA 1910.178 Inspection Types</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Daily pre-shift (operator)</li>
                            <li><strong>2.</strong> After repairs/modifications</li>
                            <li><strong>3.</strong> Periodic (monthly/quarterly)</li>
                            <li><strong>4.</strong> Annual comprehensive</li>
                            <li><strong>5.</strong> Fork & chain examination</li>
                            <li><strong>6.</strong> Brake & steering test</li>
                            <li><strong>7.</strong> Documentation & tagging</li>
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
                <h2>Key Benefits of Forklift & Material Handling Inspection</h2>
                <p>Protect workers, ensure compliance, and maintain operational efficiency</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Workplace Safety & Injury Prevention</h3>
                    <p>Forklift incidents cause approximately 7% of workplace fatalities. Professional inspection identifies mechanical defects, brake failures, steering issues, and structural problems before they result in tip-overs, struck-by incidents, or crushing injuries.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>OSHA Compliance & Citation Prevention</h3>
                    <p>Meet OSHA 1910.178 requirements for powered industrial truck inspection, maintenance, and safe operation. Proper documentation prevents costly citations (average $13,000+ per violation) and demonstrates good faith compliance during OSHA inspections.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Avoidance & Downtime Reduction</h3>
                    <p>Unplanned forklift failures halt production, delay shipments, and require emergency rentals. Predictive inspection identifies developing issues during planned maintenance windows, avoiding costly emergency repairs and operational disruption.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Hidden Defect Detection</h3>
                    <p>Internal brake components, hydraulic cylinders, and mast chains wear internally and cannot be assessed through visual inspection alone. Professional examination identifies hidden defects in critical safety systems before failure.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Equipment Life Extension</h3>
                    <p>Proper inspection, lubrication, and timely component replacement significantly extends forklift service life. Professional assessment identifies repairable conditions versus replacement needs, optimizing total cost of ownership for material handling fleets.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Liability Protection & Documentation</h3>
                    <p>Comprehensive inspection records, competent person certification, and maintenance documentation provide audit trail, support insurance coverage, and demonstrate due diligence—protecting organizations from liability in the event of incidents.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT TYPES ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">EQUIPMENT CLASSIFICATIONS</span>
                <h2>Types of Forklifts & Material Handling Equipment We Inspect</h2>
                <p>Comprehensive inspection services for all powered industrial truck classifications</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Class I-IV Electric -->
                    <div class="wave-mode-card">
                        <div class="mode-header torsional">
                            <i class="fas fa-bolt"></i>
                            <h3>Electric Forklifts (Class I, II, III)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Classes:</strong> Class I (Electric Motor Rider), Class II (Electric Narrow Aisle), Class III (Electric Hand Trucks)</p>
                            <p><strong>Inspection Focus:</strong> Battery systems, electrical controls, motor condition, hydraulic systems, and charging equipment safety per OSHA 1910.178 and ANSI B56.1.</p>

                            <div class="mode-advantages">
                                <h4>Equipment Types:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Counterbalance electric forklifts (sit-down and stand-up)</li>
                                    <li><i class="fas fa-check"></i> Reach trucks and narrow aisle trucks</li>
                                    <li><i class="fas fa-check"></i> Order pickers and turret trucks</li>
                                    <li><i class="fas fa-check"></i> Electric pallet jacks and walkie stackers</li>
                                    <li><i class="fas fa-check"></i> Tow tractors and burden carriers</li>
                                    <li><i class="fas fa-check"></i> Automated guided vehicles (AGV)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Key Systems:</strong> Batteries, motors, controllers, hydraulics, charging stations
                            </div>
                        </div>
                    </div>

                    <!-- Class IV-V IC Engine -->
                    <div class="wave-mode-card">
                        <div class="mode-header longitudinal">
                            <i class="fas fa-gas-pump"></i>
                            <h3>IC Engine Forklifts (Class IV, V)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Classes:</strong> Class IV (Internal Combustion Cushion Tire), Class V (Internal Combustion Pneumatic Tire)</p>
                            <p><strong>Inspection Focus:</strong> Engine systems, fuel systems, exhaust, cooling, transmission, and emissions control per OSHA and manufacturer requirements.</p>

                            <div class="mode-advantages">
                                <h4>Equipment Types:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> LPG/propane powered counterbalance forklifts</li>
                                    <li><i class="fas fa-check"></i> Gasoline and diesel engine forklifts</li>
                                    <li><i class="fas fa-check"></i> Cushion tire warehouse forklifts (Class IV)</li>
                                    <li><i class="fas fa-check"></i> Pneumatic tire outdoor forklifts (Class V)</li>
                                    <li><i class="fas fa-check"></i> Dual fuel and alternative fuel units</li>
                                    <li><i class="fas fa-check"></i> High-capacity IC engine trucks</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Key Systems:</strong> Engine, fuel system, exhaust, cooling, transmission, emissions
                            </div>
                        </div>
                    </div>

                    <!-- Class VI-VII -->
                    <div class="wave-mode-card">
                        <div class="mode-header flexural">
                            <i class="fas fa-truck-monster"></i>
                            <h3>Rough Terrain & Specialty (Class VI, VII)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Classes:</strong> Class VI (Electric/IC Tow Tractors), Class VII (Rough Terrain Forklift Trucks)</p>
                            <p><strong>Inspection Focus:</strong> Specialized systems for outdoor operation including all-terrain capabilities, enhanced stability systems, and rough terrain adaptations.</p>

                            <div class="mode-advantages">
                                <h4>Equipment Types:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Rough terrain forklifts (telehandlers, masted RT)</li>
                                    <li><i class="fas fa-check"></i> Telehandlers (telescopic handlers)</li>
                                    <li><i class="fas fa-check"></i> Tow tractors and tuggers</li>
                                    <li><i class="fas fa-check"></i> Side loaders and multi-directional forklifts</li>
                                    <li><i class="fas fa-check"></i> Container handlers and reach stackers</li>
                                    <li><i class="fas fa-check"></i> Specialty material handling equipment</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Key Systems:</strong> All-terrain capabilities, stability systems, specialized attachments
                            </div>
                        </div>
                    </div>

                    <!-- Attachments -->
                    <div class="wave-mode-card">
                        <div class="mode-header torsional">
                            <i class="fas fa-puzzle-piece"></i>
                            <h3>Forklift Attachments & Accessories</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Specialized attachments including fork extensions, clamps, rotators, and custom devices requiring inspection and capacity derating per OSHA 1910.178 requirements.</p>
                            <p><strong>Inspection Focus:</strong> Attachment structure, hydraulic systems (if powered), mounting integrity, capacity plates, and load center modifications.</p>

                            <div class="mode-advantages">
                                <h4>Common Attachments:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Fork extensions and slip-on forks</li>
                                    <li><i class="fas fa-check"></i> Clamps (paper roll, drum, bale, carton)</li>
                                    <li><i class="fas fa-check"></i> Rotators and side shifters</li>
                                    <li><i class="fas fa-check"></i> Push-pulls and slip sheet attachments</li>
                                    <li><i class="fas fa-check"></i> Booms, jibs, and lifting attachments</li>
                                    <li><i class="fas fa-check"></i> Custom engineered attachments</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Requirements:</strong> Manufacturer approval, capacity derating, additional inspections
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> OSHA 1910.178 Inspection Requirements</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Inspection Type</th>
                                <th>Frequency</th>
                                <th>Performed By</th>
                                <th>Key Requirements</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Pre-Shift (Daily)</strong></td>
                                <td>Beginning of each shift</td>
                                <td>Operator</td>
                                <td>Visual check, operational test, safety devices</td>
                            </tr>
                            <tr>
                                <td><strong>Periodic</strong></td>
                                <td>Monthly to annual (based on use)</td>
                                <td>Competent person</td>
                                <td>Detailed examination, measurements, testing</td>
                            </tr>
                            <tr>
                                <td><strong>Annual Comprehensive</strong></td>
                                <td>At least annually</td>
                                <td>Qualified person</td>
                                <td>Complete inspection per ANSI B56.1</td>
                            </tr>
                            <tr>
                                <td><strong>Post-Repair</strong></td>
                                <td>After major repairs/modifications</td>
                                <td>Qualified person</td>
                                <td>Verification of repairs, functional testing</td>
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
                <h2>Industries & Facilities We Serve</h2>
                <p>Professional forklift inspection across warehousing, manufacturing, and distribution operations</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="warehouse">Warehousing & Distribution</button>
                    <button class="tab-btn" data-tab="manufacturing">Manufacturing</button>
                    <button class="tab-btn" data-tab="retail">Retail & Wholesale</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Operations</button>
                </div>

                <div class="tabs-content">
                    <!-- Warehousing Tab -->
                    <div class="tab-panel active" id="warehouse">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/warehouse-forklift.jpg" alt="Warehouse forklift inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Warehousing & Distribution Centers</h3>
                                <p>Distribution centers and warehouses operate large forklift fleets in high-intensity operations with multiple shifts. Our inspection programs support OSHA compliance, reduce downtime, and maintain productivity in fast-paced logistics environments.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> High-density storage and narrow aisle operations</li>
                                    <li><i class="fas fa-check"></i> Multi-shift operations and fleet management</li>
                                    <li><i class="fas fa-check"></i> Cold storage and temperature-controlled facilities</li>
                                    <li><i class="fas fa-check"></i> E-commerce fulfillment centers</li>
                                    <li><i class="fas fa-check"></i> Third-party logistics (3PL) providers</li>
                                    <li><i class="fas fa-check"></i> Cross-dock and transload facilities</li>
                                    <li><i class="fas fa-check"></i> Automated and semi-automated warehouses</li>
                                    <li><i class="fas fa-check"></i> Hazardous materials storage areas</li>
                                </ul>

                                <div class="standards">
                                    <strong>Focus Areas:</strong>
                                    <span class="standard-tag">High Utilization</span>
                                    <span class="standard-tag">Multi-Shift</span>
                                    <span class="standard-tag">Fleet Management</span>
                                    <span class="standard-tag">OSHA Compliance</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Manufacturing Tab -->
                    <div class="tab-panel" id="manufacturing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/manufacturing-forklift.jpg" alt="Manufacturing forklift inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Manufacturing & Production Facilities</h3>
                                <p>Manufacturing plants use forklifts for raw material handling, work-in-process movement, and finished goods transport. Our inspections ensure reliable equipment performance supporting just-in-time production and lean manufacturing operations.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Automotive and parts manufacturing</li>
                                    <li><i class="fas fa-check"></i> Food and beverage production facilities</li>
                                    <li><i class="fas fa-check"></i> Consumer goods and electronics manufacturing</li>
                                    <li><i class="fas fa-check"></i> Chemical and pharmaceutical plants</li>
                                    <li><i class="fas fa-check"></i> Metal fabrication and machine shops</li>
                                    <li><i class="fas fa-check"></i> Paper mills and packaging facilities</li>
                                    <li><i class="fas fa-check"></i> Textile and apparel manufacturing</li>
                                    <li><i class="fas fa-check"></i> Building materials and construction products</li>
                                </ul>

                                <div class="standards">
                                    <strong>Focus Areas:</strong>
                                    <span class="standard-tag">Production Support</span>
                                    <span class="standard-tag">JIT Operations</span>
                                    <span class="standard-tag">Safety Compliance</span>
                                    <span class="standard-tag">Uptime Critical</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Retail Tab -->
                    <div class="tab-panel" id="retail">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/retail-forklift.jpg" alt="Retail distribution forklift">
                            </div>
                            <div class="tab-text">
                                <h3>Retail, Wholesale & Big Box Operations</h3>
                                <p>Retail distribution centers, home improvement stores, and wholesale operations use forklifts for receiving, stocking, and order fulfillment. Our inspection services support high-visibility retail operations with emphasis on safety and customer-facing compliance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Big box retail distribution centers</li>
                                    <li><i class="fas fa-check"></i> Home improvement and hardware stores</li>
                                    <li><i class="fas fa-check"></i> Grocery and food distribution</li>
                                    <li><i class="fas fa-check"></i> Wholesale clubs and cash-and-carry</li>
                                    <li><i class="fas fa-check"></i> Building supply yards and lumber centers</li>
                                    <li><i class="fas fa-check"></i> Automotive parts distribution</li>
                                    <li><i class="fas fa-check"></i> Beverage and alcohol distribution</li>
                                    <li><i class="fas fa-check"></i> Furniture and appliance warehouses</li>
                                </ul>

                                <div class="standards">
                                    <strong>Focus Areas:</strong>
                                    <span class="standard-tag">Customer Safety</span>
                                    <span class="standard-tag">Public Access Areas</span>
                                    <span class="standard-tag">High Visibility</span>
                                    <span class="standard-tag">Regulatory Scrutiny</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/specialty-forklift.jpg" alt="Specialty forklift applications">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty Operations & Environments</h3>
                                <p>Specialized facilities including cold storage, hazardous locations, ports, and heavy industry require customized inspection approaches addressing unique environmental challenges, regulatory requirements, and operational demands.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Cold storage and freezer warehouses (-20°F to -40°F)</li>
                                    <li><i class="fas fa-check"></i> Hazardous locations and explosion-proof equipment</li>
                                    <li><i class="fas fa-check"></i> Ports, terminals, and intermodal facilities</li>
                                    <li><i class="fas fa-check"></i> Lumber yards and outdoor operations</li>
                                    <li><i class="fas fa-check"></i> Foundries and high-temperature environments</li>
                                    <li><i class="fas fa-check"></i> Chemical plants and corrosive atmospheres</li>
                                    <li><i class="fas fa-check"></i> Clean rooms and pharmaceutical facilities</li>
                                    <li><i class="fas fa-check"></i> Airports and aviation facilities</li>
                                </ul>

                                <div class="standards">
                                    <strong>Focus Areas:</strong>
                                    <span class="standard-tag">Harsh Environments</span>
                                    <span class="standard-tag">Specialized Equipment</span>
                                    <span class="standard-tag">Enhanced Corrosion</span>
                                    <span class="standard-tag">Hazardous Locations</span>
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
                <h2>Our Forklift Inspection & Testing Capabilities</h2>
                <p>Comprehensive assessment covering all critical forklift systems and components</p>
            </div>

            <div class="capabilities-grid">
                <!-- Structural -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-building"></i>
                        <h3>Structural & Mast Assessment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Mast Channels:</span> Wear, cracks, straightness, alignment</li>
                        <li><span class="cap-label">Carriage:</span> Condition, rollers, bearings, mounting</li>
                        <li><span class="cap-label">Overhead Guard:</span> Integrity, mounting, FOPS certification</li>
                        <li><span class="cap-label">Forks:</span> Heel thickness, cracks, straightness, tips</li>
                        <li><span class="cap-label">Load Backrest:</span> Condition and mounting integrity</li>
                        <li><span class="cap-label">Frame:</span> Cracks, welds, structural integrity</li>
                        <li><span class="cap-label">Counterweight:</span> Security and condition</li>
                        <li><span class="cap-label">Capacity Plate:</span> Legibility and accuracy</li>
                    </ul>
                </div>

                <!-- Hydraulics -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-tint"></i>
                        <h3>Hydraulic Systems</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Lift Cylinders:</span> Leaks, rod condition, mounting</li>
                        <li><span class="cap-label">Tilt Cylinders:</span> Operation, leaks, play</li>
                        <li><span class="cap-label">Hydraulic Pump:</span> Pressure, flow, condition</li>
                        <li><span class="cap-label">Control Valves:</span> Operation, leaks, adjustment</li>
                        <li><span class="cap-label">Hoses & Fittings:</span> Condition, leaks, routing</li>
                        <li><span class="cap-label">Hydraulic Tank:</span> Fluid level, contamination</li>
                        <li><span class="cap-label">Filters:</span> Condition and replacement schedule</li>
                        <li><span class="cap-label">System Pressure:</span> Relief valve settings</li>
                    </ul>
                </div>

                <!-- Powertrain -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cogs"></i>
                        <h3>Powertrain & Propulsion</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Engine (IC):</span> Condition, leaks, mounts, exhaust</li>
                        <li><span class="cap-label">Electric Motor:</span> Condition, brushes, ventilation</li>
                        <li><span class="cap-label">Transmission:</span> Operation, leaks, shifting</li>
                        <li><span class="cap-label">Differential:</span> Condition, leaks, operation</li>
                        <li><span class="cap-label">Drive Axle:</span> Condition, bearings, seals</li>
                        <li><span class="cap-label">Battery (Electric):</span> Condition, connections, watering</li>
                        <li><span class="cap-label">Fuel System:</span> Tank, lines, filters, LPG system</li>
                        <li><span class="cap-label">Cooling System:</span> Radiator, hoses, coolant level</li>
                    </ul>
                </div>

                <!-- Brakes & Steering -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-hand-paper"></i>
                        <h3>Brakes & Steering Systems</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Service Brakes:</span> Operation, adjustment, lining wear</li>
                        <li><span class="cap-label">Parking Brake:</span> Holding capacity, adjustment</li>
                        <li><span class="cap-label">Steering:</span> Play, linkage, cylinder condition</li>
                        <li><span class="cap-label">Steer Axle:</span> Kingpins, bearings, tires</li>
                        <li><span class="cap-label">Hydraulic Steering:</span> Pump, cylinder, hoses</li>
                        <li><span class="cap-label">Brake Fluid:</span> Level, contamination (hydraulic brakes)</li>
                        <li><span class="cap-label">Performance Testing:</span> Stopping distance verification</li>
                        <li><span class="cap-label">Linkage:</span> Wear, adjustment, lubrication</li>
                    </ul>
                </div>

                <!-- Electrical & Safety -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-bolt"></i>
                        <h3>Electrical & Safety Systems</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Battery/Charging:</span> Condition, connections, charger operation</li>
                        <li><span class="cap-label">Lighting:</span> Headlights, taillights, strobes, beacons</li>
                        <li><span class="cap-label">Horn & Alarms:</span> Audible warning devices</li>
                        <li><span class="cap-label">Instruments:</span> Hour meter, gauges, indicators</li>
                        <li><span class="cap-label">Safety Devices:</span> Seat belt, backup alarm, mirrors</li>
                        <li><span class="cap-label">Operator Controls:</span> Levers, pedals, switches, steering</li>
                        <li><span class="cap-label">Wiring:</span> Condition, connections, protection</li>
                        <li><span class="cap-label">Attachments:</span> Side shift, etc. (if equipped)</li>
                    </ul>
                </div>

                <!-- Tires & Wheels -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-circle"></i>
                        <h3>Tires, Wheels & Stability</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Tire Condition:</span> Cuts, chunking, wear, inflation (pneumatic)</li>
                        <li><span class="cap-label">Tire Pressure:</span> Proper inflation verification</li>
                        <li><span class="cap-label">Wheels & Rims:</span> Damage, cracks, mounting</li>
                        <li><span class="cap-label">Wheel Bearings:</span> Play, lubrication, condition</li>
                        <li><span class="cap-label">Stability:</span> Counterweight security, load center</li>
                        <li><span class="cap-label">Capacity Plate:</span> Legibility, accuracy, attachment rating</li>
                        <li><span class="cap-label">Data Plate:</span> Serial number, model, specifications</li>
                        <li><span class="cap-label">Overall Condition:</span> General appearance, cleanliness</li>
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
                    <span class="section-label">STANDARDS & REGULATIONS</span>
                    <h2>Applicable Standards & Regulatory Requirements</h2>
                    <p class="lead">Our forklift inspection programs are structured around OSHA requirements, ANSI standards, and industry best practices. We ensure compliance with current regulations and provide documentation supporting workplace safety programs and regulatory inspections.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1910.178 – Powered Industrial Trucks</h4>
                                <p>Federal regulation mandating daily inspections, operator training, and maintenance requirements for powered industrial trucks. Requires removal from service of trucks not in safe operating condition, proper maintenance, and documentation of repairs and inspections.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ANSI/ITSDF B56.1 – Safety Standard for Low Lift and High Lift Trucks</h4>
                                <p>Industry consensus standard defining design, inspection, testing, and operation requirements for powered industrial trucks. Specifies daily, frequent, and periodic inspection requirements, maintenance procedures, and operator qualifications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>LOLER 1998 & PUWER 1998 (UK Regulations)</h4>
                                <p>UK Lifting Operations and Lifting Equipment Regulations and Provision and Use of Work Equipment Regulations require thorough examination of lifting equipment including forklifts at specified intervals by competent persons with formal certification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ANSI/ITSDF B56.6 – Rough Terrain Forklift Trucks</h4>
                                <p>Standard specific to rough terrain forklifts addressing unique requirements for off-road operation including stability, operator protection, and inspection criteria for equipment operating in construction and outdoor environments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Standards & Guidance</h4>
                        <p><strong>Maintenance:</strong> Manufacturer service manuals, preventative maintenance schedules. <strong>Training:</strong> OSHA 1910.178(l) operator training requirements. <strong>Industry:</strong> Industrial Truck Association (ITA) guidelines, Material Handling Industry (MHI) best practices. <strong>International:</strong> ISO 3691 (industrial trucks), EN standards (Europe).</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/forklift-brake-testing.jpg" alt="Forklift brake testing procedure">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Forklift Brake Testing</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>OSHA 1910.178 compliant</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>ANSI B56.1 standards</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Competent person inspections</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Complete system assessment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Detailed documentation</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Fleet management support</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Certifications & Training</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/osha.png" alt="OSHA">
                            <img src="/www/assets/images/certifications/ansi.png" alt="ANSI">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/competent-person.png" alt="Competent Person">
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
                <h2>Forklift Inspection Procedure</h2>
                <p>Systematic approach ensuring OSHA 1910.178 compliance and workplace safety</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Review & Documentation</h3>
                        <p>Review forklift specifications, manufacturer manuals, previous inspection reports, and maintenance history. Confirm equipment identification, capacity, and applicable standards. Establish inspection scope and coordinate equipment availability to minimize operational disruption.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Equipment History Review + Inspection Plan
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Visual & Walk-Around Inspection</h3>
                        <p>Conduct detailed visual examination of entire forklift: structural components, mast and carriage, forks, tires, overhead guard, and general condition. Check for obvious damage, leaks, wear, and safety concerns. Document findings with photographs and notes.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Visual Inspection Checklist + Photo Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Operational & Functional Testing</h3>
                        <p>Test all forklift functions: lifting/lowering, tilt, steering, brakes (service and parking), horn, lights, and safety devices. Verify smooth operation, proper speeds, and control responsiveness. Test safety features including seat belt, backup alarm, and emergency controls.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Operational Test Results + Functional Checklist
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Detailed Component Examination & Measurements</h3>
                        <p>Perform detailed examination of critical components: measure fork heel thickness, check chain wear and elongation, inspect mast rollers and wear pads, examine hydraulic cylinders for leaks, test brake holding capacity, and assess tire condition. Use calibrated measurement tools per ANSI B56.1.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Detailed Measurements + Component Condition Assessment
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Load Testing & Performance Verification</h3>
                        <p>Conduct load testing at rated capacity to verify lifting performance, brake holding, and hydraulic system integrity. Test all functions under load conditions. For annual inspections, perform comprehensive operational testing per OSHA and ANSI requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Results + Performance Verification
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Documentation, Tagging & Certification</h3>
                        <p>Complete inspection report documenting all findings, measurements, deficiencies, and recommendations. Apply inspection标签 with date and next due date. Issue certification for equipment meeting requirements or deficiency report for equipment requiring corrective action. Update fleet management records.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Certificate + Detailed Report + Equipment Tagging
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Qualifications & Training</h3>
                <div class="cert-grid">
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/osha.png" alt="OSHA">
                        <span>OSHA 30-Hour Training</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/ansi.png" alt="ANSI">
                        <span>ANSI B56.1 Qualified</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/competent-person.png" alt="Competent Person">
                        <span>Competent Person Certified</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/manufacturer.png" alt="Manufacturer">
                        <span>Manufacturer Trained</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                        <span>ISO 9001:2015</span>
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
                <h2>Your Trusted Forklift Inspection Partner</h2>
                <p>Professional expertise, OSHA compliance focus, and commitment to workplace safety</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Competent Persons</h3>
                    <p>Our inspectors meet OSHA's definition of competent persons with training in forklift mechanics, OSHA 1910.178 requirements, and ANSI B56.1 standards. We understand both the technical and regulatory aspects of forklift safety.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Comprehensive Multi-System Assessment</h3>
                    <p>Complete inspection covering structural, mechanical, hydraulic, electrical, and safety systems—not just a quick visual check. We use calibrated tools, take actual measurements, and provide detailed documentation supporting compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Fleet Management Support</h3>
                    <p>We provide fleet-wide inspection programs with scheduling, tracking, and reporting systems. Our comprehensive documentation supports your OSHA compliance program, maintenance planning, and equipment lifecycle management.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>OSHA Compliance Expertise</h3>
                    <p>Deep knowledge of OSHA 1910.178 requirements, common citations, and inspection triggers. We help you maintain compliance, prepare for OSHA inspections, and implement effective powered industrial truck safety programs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Minimal Operational Disruption</h3>
                    <p>Flexible scheduling including off-hours, weekends, and phased inspections to minimize impact on operations. We work efficiently to complete inspections quickly while maintaining thoroughness and compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Multi-Industry Experience</h3>
                    <p>Trusted by warehouses, manufacturers, distributors, retailers, and logistics companies. We understand diverse operational environments and provide practical recommendations balancing safety, compliance, and operational needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Forklift Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often does OSHA require forklift inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>OSHA 1910.178 requires <strong>daily pre-shift inspections</strong> by operators, plus <strong>periodic inspections</strong> at intervals determined by the severity of use (typically monthly to annually). Annual comprehensive inspections are industry best practice and often required by insurance. Trucks must be removed from service if any condition adversely affects safety is found.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between daily and annual forklift inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Daily (pre-shift)</strong> inspections are visual and operational checks performed by operators checking for obvious defects, fluid leaks, tire condition, and basic operation. <strong>Annual (periodic)</strong> inspections are comprehensive examinations by competent persons including detailed measurements, component examination, and often load testing—much more thorough than daily checks.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When must forklift forks be replaced?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Forks must be removed from service when: heel thickness is reduced by <strong>10%</strong> from original, when cracks are present, when tips are bent more than 3 degrees, when hooks are deformed, or when fork angle exceeds 93 degrees. These are ANSI B56.1 requirements. Forks should be inspected regularly and measured with calibrated gauges.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Who is qualified to perform forklift inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>OSHA requires inspections be performed by a <strong>"competent person"</strong>—someone capable of identifying hazards and authorized to take corrective action. For daily inspections, this is typically the operator. For periodic and annual inspections, this should be someone with specific training in forklift mechanics, OSHA requirements, and inspection techniques—often a qualified technician or third-party inspector.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is required for forklift inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>OSHA requires documentation of: <strong>daily pre-shift inspections</strong> (checklists), <strong>periodic inspections</strong> (detailed reports), <strong>maintenance and repairs</strong>, <strong>operator training records</strong>, and <strong>any modifications</strong>. Records should be retained for the life of the equipment and available for OSHA inspection. Electronic fleet management systems are acceptable.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can forklifts be operated with known defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>No.</strong> OSHA 1910.178(q)(7) explicitly states that industrial trucks shall not be placed in service if the examination shows any condition adversely affecting safety. The truck must be removed from service and repaired. Operating a truck with known safety defects can result in citations, increased liability, and serious safety risks.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the most common forklift inspection failures?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Common deficiencies include: <strong>worn or damaged forks</strong>, <strong>hydraulic leaks</strong>, <strong>brake problems</strong>, <strong>steering issues</strong>, <strong>tire damage</strong>, <strong>inoperative lights/horn</strong>, <strong>missing or damaged safety devices</strong>, <strong>leaking batteries</strong> (electric), <strong>engine problems</strong> (IC), and <strong>missing capacity plates</strong>. Regular inspection catches these before they cause incidents.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do forklift attachments require separate inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Yes.</strong> OSHA requires that attachments be inspected and maintained per manufacturer recommendations. Attachments affect forklift capacity and stability—capacity plates must reflect attachment derating. Attachments should be included in the forklift inspection program with specific attention to mounting, hydraulics (if powered), and structural integrity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure OSHA Compliance—Schedule Professional Forklift Inspection</h2>
                <p>Comprehensive forklift and material handling equipment inspection services with qualified competent persons and detailed documentation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Forklift Inspection Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> OSHA 1910.178 Compliant</span>
                    <span><i class="fas fa-check"></i> ANSI B56.1 Standards</span>
                    <span><i class="fas fa-check"></i> Competent Person Certified</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Material Handling Services</h2>
                <p>Complete lifting and material handling equipment inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/chain-block-hoist-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Chain Block & Hoist</h3>
                    <p>Manual and powered hoist inspection, testing, and certification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/lifting-gear-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Lifting Gear & Rigging</h3>
                    <p>Slings, chains, and rigging hardware inspection services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/overhead-crane-gantry-crane-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Overhead Crane Inspection</h3>
                    <p>Complete overhead and gantry crane inspection and certification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Inspection</h3>
                    <p>Detailed visual examination and condition assessment services</p>
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