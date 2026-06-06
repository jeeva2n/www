<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Overhead Crane & Gantry Crane Inspection Services | ASME B30.2 Load Testing & Certification | Alpha Sonix NDT Solutions";
$meta_description = "Professional overhead crane and gantry crane inspection, load testing, and certification services. Comprehensive examination per ASME B30.2, OSHA 1910.179 including bridge structures, runway systems, hoist mechanisms, electrical systems, annual inspection, and operational testing for safe industrial crane operations.";
$meta_keywords = "overhead crane inspection, gantry crane testing, bridge crane certification, ASME B30.2, OSHA 1910.179, crane load testing, annual crane inspection, runway inspection, bridge crane examination, jib crane testing, monorail inspection, industrial crane certification";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/overhead-crane-gantry-crane-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/overhead-crane-og.jpg">

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
            "serviceType": "Overhead Crane & Gantry Crane Inspection",
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
            "description": "Comprehensive overhead crane and gantry crane inspection services including bridge structure examination, runway system assessment, hoist mechanism testing, electrical system evaluation, load testing, and certification per ASME B30.2, OSHA 1910.179 for safe industrial crane operations."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/overhead-crane-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Overhead Crane & Gantry Crane Inspection</span>
                </div>
                <h1 class="page-title">Overhead Crane & Gantry Crane Inspection</h1>
                <p class="page-subtitle">Professional third-party inspection, testing, and certification of overhead traveling cranes, gantry cranes, jib cranes, and material handling systems—ensuring structural integrity, mechanical reliability, and electrical safety through comprehensive examination per ASME B30.2, OSHA 1910.179, and industry standards</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME B30.2 / OSHA 1910 Aligned</span>
                    <span class="badge"><i class="fas fa-balance-scale"></i> Load Testing & Capacity Verification</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Runway & Bridge Assessment</span>
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
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industrial Material Handling Systems</h3>
                    <p>Overhead and gantry cranes are essential industrial equipment providing safe, efficient material handling across manufacturing, warehouses, steel mills, and production facilities requiring systematic inspection and certification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Complete System Assessment</h3>
                    <p>Comprehensive examination covering runway systems, bridge structures, trolley mechanisms, hoist assemblies, electrical systems, and control devices per ASME B30.2 requirements for total system integrity.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <h3>Load Testing & Performance Validation</h3>
                    <p>Witnessed capacity testing, operational verification, and safety system validation to confirm rated load capacity, structural performance, and compliance with design specifications and regulatory standards.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Regulatory Compliance & Safety</h3>
                    <p>Inspection programs structured around ASME B30.2, OSHA 1910.179, and jurisdictional requirements with comprehensive documentation supporting workplace safety, insurance, and regulatory obligations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">INDUSTRIAL CRANE INSPECTION</span>
                    <h2>What is Overhead Crane & Gantry Crane Inspection?</h2>
                    <p class="lead">Overhead crane and gantry crane inspection encompasses the systematic examination, testing, and certification of fixed industrial cranes including overhead traveling cranes (bridge cranes), gantry cranes, semi-gantry cranes, jib cranes, monorail systems, and underhung cranes to ensure safe operation, regulatory compliance, and optimal performance in manufacturing and industrial environments.</p>

                    <p>Industrial crane systems require assessment of multiple integrated components: <strong>runway structures</strong> (rails, columns, foundations, connections), <strong>bridge assemblies</strong> (girders, end trucks, walkways, platforms), <strong>trolley mechanisms</strong> (cross-travel systems, motor drives, controls), <strong>hoist assemblies</strong> (wire rope, drums, blocks, brakes), <strong>electrical systems</strong> (power supply, controls, safety devices), <strong>structural connections</strong> (bolted and welded joints, bearing points), and <strong>safety systems</strong> (limit switches, overload protection, emergency controls). Each system requires specialized inspection techniques and acceptance criteria appropriate to the component function and failure consequences.</p>

                    <p>Our inspection methodology aligns with ASME B30.2 requirements for <strong>initial inspection</strong> (before first use or after installation), <strong>frequent inspection</strong> (daily/weekly operational checks), <strong>periodic inspection</strong> (monthly to annual comprehensive examination), <strong>special inspections</strong> (after incidents, modifications, or unusual occurrences), and <strong>complete inspection and test</strong> (annual comprehensive examination with load testing). Documentation standards ensure traceability, regulatory compliance, and effective maintenance planning.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>ASME B30.2 & OSHA 1910.179 Compliance</strong>
                                <p>Inspections structured around ASME B30.2 (Overhead and Gantry Cranes) and OSHA 1910.179 requirements including qualified inspector standards, inspection frequency, testing procedures, and comprehensive documentation for regulatory compliance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Runway & Foundation Assessment</strong>
                                <p>Comprehensive examination of runway systems including rail condition, alignment, foundation integrity, column stability, and support structure adequacy—critical elements often overlooked but essential for safe crane operation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Load Testing & Capacity Verification</strong>
                                <p>Witnessed load testing at 100% and 125% of rated capacity (ASME B30.2 requirements) with deflection monitoring, brake testing, and safety system verification under loaded conditions to confirm design performance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Electrical Safety & Controls Assessment</strong>
                                <p>Comprehensive evaluation of electrical systems, motor controls, limit switches, overload protection, emergency stops, and safety interlocks—ensuring electrical safety and proper operational control integration.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Industrial Safety Priority:</strong>
                            <p>Overhead crane incidents in manufacturing and industrial facilities can result in serious injuries, fatalities, production disruption, and regulatory violations. Professional inspection identifies structural deterioration, mechanical wear, and electrical faults before they compromise safety and operations.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Crane Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Crane Systems</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/bridge-crane-inspection.jpg" alt="Overhead bridge crane structural inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Bridge structure and runway inspection for overhead traveling crane per ASME B30.2</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">125%</span>
                            <span class="stat-label">Load Test (% Rated Capacity)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Annual</span>
                            <span class="stat-label">Complete Inspection Required</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Multi-Component</span>
                            <span class="stat-label">System Coverage</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> Inspection Scope (ASME B30.2)</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Runway structure & foundation</li>
                            <li><strong>2.</strong> Bridge assembly & end trucks</li>
                            <li><strong>3.</strong> Trolley mechanism & travel system</li>
                            <li><strong>4.</strong> Hoist assembly & wire rope</li>
                            <li><strong>5.</strong> Electrical system & controls</li>
                            <li><strong>6.</strong> Safety devices & limit switches</li>
                            <li><strong>7.</strong> Load testing & capacity verification</li>
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
                <span class="section-label">WHY PROFESSIONAL CRANE INSPECTION</span>
                <h2>Key Benefits of Overhead & Gantry Crane Inspection</h2>
                <p>Enhance workplace safety, operational reliability, and regulatory compliance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Workplace Safety & Injury Prevention</h3>
                    <p>Systematic inspection identifies structural fatigue, mechanical wear, electrical deterioration, and safety system failures before they result in crane incidents—preventing load drops, structural collapse, electrical hazards, and worker injuries in industrial facilities.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>OSHA Compliance & Regulatory Protection</h3>
                    <p>Meet employer obligations under OSHA 1910.179, ASME B30.2, and jurisdictional crane safety regulations. Qualified inspector certification provides defensible evidence of compliance for OSHA inspections, audits, and enforcement proceedings.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Production Continuity & Uptime Optimization</h3>
                    <p>Planned inspection and maintenance based on actual equipment condition prevents unexpected failures and emergency shutdowns—maintaining production schedules, reducing downtime costs, and supporting lean manufacturing operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Expert Assessment & Technical Expertise</h3>
                    <p>Qualified inspectors with industrial crane expertise provide objective assessment of complex mechanical, structural, and electrical systems—supporting informed decisions on maintenance, modernization, and equipment replacement.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Predictive Maintenance & Asset Management</h3>
                    <p>Detailed condition assessment identifies wear trends, component degradation, and maintenance needs—enabling condition-based maintenance, spare parts planning, and optimized equipment lifecycle management for critical material handling assets.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Control & Insurance Benefits</h3>
                    <p>Proactive inspection reduces catastrophic failure risks, supports insurance coverage, and demonstrates due diligence—potentially reducing insurance premiums while avoiding costs associated with crane incidents and regulatory violations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CRANE SYSTEMS ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CRANE SYSTEM TYPES</span>
                <h2>Types of Overhead & Gantry Cranes We Inspect</h2>
                <p>Comprehensive inspection programs for all industrial crane configurations and installations</p>
            </div>

            <div class="technology-content">
                <div class="systems-grid">
                    <!-- Overhead Bridge Cranes -->
                    <div class="system-card">
                        <div class="system-image">
                            <img src="/www/assets/images/services/bridge-crane-system.jpg" alt="Overhead bridge crane system">
                            <div class="system-badge">Single & Double Girder</div>
                        </div>
                        <div class="system-content">
                            <div class="system-icon">
                                <i class="fas fa-grip-horizontal"></i>
                            </div>
                            <h3>Overhead Bridge Cranes (Top Running)</h3>
                            <p>Single and double girder bridge cranes with top running configuration, traveling on runway rails supported by building structure or dedicated columns.</p>

                            <ul class="system-specs">
                                <li><i class="fas fa-check"></i> <strong>Configuration:</strong> Single girder, double girder, box girder</li>
                                <li><i class="fas fa-check"></i> <strong>Capacity Range:</strong> 1 ton to 500+ tons</li>
                                <li><i class="fas fa-check"></i> <strong>Span:</strong> Up to 150+ feet (project dependent)</li>
                                <li><i class="fas fa-check"></i> <strong>Hoist Types:</strong> Wire rope, chain, specialty</li>
                                <li><i class="fas fa-check"></i> <strong>Controls:</strong> Pendant, radio, cab operated</li>
                                <li><i class="fas fa-check"></i> <strong>Duty Class:</strong> Class A (infrequent) to Class F (continuous severe)</li>
                            </ul>

                            <div class="system-applications">
                                <strong>Applications:</strong>
                                <div class="app-tag">Manufacturing</div>
                                <div class="app-tag">Steel Mills</div>
                                <div class="app-tag">Warehouses</div>
                                <div class="app-tag">Assembly Plants</div>
                                <div class="app-tag">Machine Shops</div>
                            </div>
                        </div>
                    </div>

                    <!-- Gantry Cranes -->
                    <div class="system-card">
                        <div class="system-image">
                            <img src="/www/assets/images/services/gantry-crane-system.jpg" alt="Gantry crane system">
                            <div class="system-badge">Full & Semi-Gantry</div>
                        </div>
                        <div class="system-content">
                            <div class="system-icon">
                                <i class="fas fa-compress-arrows-alt"></i>
                            </div>
                            <h3>Gantry & Semi-Gantry Cranes</h3>
                            <p>Bridge cranes supported by legs running on ground-level rails (gantry) or combination of building runway and ground rails (semi-gantry).</p>

                            <ul class="system-specs">
                                <li><i class="fas fa-check"></i> <strong>Configuration:</strong> Full gantry, semi-gantry, portable</li>
                                <li><i class="fas fa-check"></i> <strong>Leg Design:</strong> A-frame, box girder, truss construction</li>
                                <li><i class="fas fa-check"></i> <strong>Track System:</strong> Rail on concrete, embedded rail</li>
                                <li><i class="fas fa-check"></i> <strong>Outdoor Rating:</strong> Weather protection and wind resistance</li>
                                <li><i class="fas fa-check"></i> <strong>Mobility:</strong> Fixed installation or portable units</li>
                                <li><i class="fas fa-check"></i> <strong>Cantilever:</strong> Extended reach beyond legs</li>
                            </ul>

                            <div class="system-applications">
                                <strong>Applications:</strong>
                                <div class="app-tag">Shipyards</div>
                                <div class="app-tag">Container Terminals</div>
                                <div class="app-tag">Precast Yards</div>
                                <div class="app-tag">Steel Fabrication</div>
                                <div class="app-tag">Outdoor Storage</div>
                            </div>
                        </div>
                    </div>

                    <!-- Underhung Cranes -->
                    <div class="system-card">
                        <div class="system-image">
                            <img src="/www/assets/images/services/underhung-crane-system.jpg" alt="Underhung crane system">
                            <div class="system-badge">Underhung & Monorail</div>
                        </div>
                        <div class="system-content">
                            <div class="system-icon">
                                <i class="fas fa-minus"></i>
                            </div>
                            <h3>Underhung & Monorail Systems</h3>
                            <p>Bridge cranes suspended from runway beams (underhung) and single-beam monorail systems providing material handling in space-constrained environments.</p>

                            <ul class="system-specs">
                                <li><i class="fas fa-check"></i> <strong>Configuration:</strong> Underhung bridge, monorail, enclosed track</li>
                                <li><i class="fas fa-check"></i> <strong>Suspension:</strong> Bottom flange running, patented track systems</li>
                                <li><i class="fas fa-check"></i> <strong>Capacity:</strong> Typically 0.25 to 25 tons</li>
                                <li><i class="fas fa-check"></i> <strong>Coverage:</strong> Complex path routing, multiple beams</li>
                                <li><i class="fas fa-check"></i> <strong>Integration:</strong> Building structure integration</li>
                                <li><i class="fas fa-check"></i> <strong>Flexibility:</strong> Expandable and reconfigurable systems</li>
                            </ul>

                            <div class="system-applications">
                                <strong>Applications:</strong>
                                <div class="app-tag">Assembly Lines</div>
                                <div class="app-tag">Automotive Plants</div>
                                <div class="app-tag">Aerospace</div>
                                <div class="app-tag">Food Processing</div>
                                <div class="app-tag">Clean Rooms</div>
                            </div>
                        </div>
                    </div>

                    <!-- Jib & Special Cranes -->
                    <div class="system-card">
                        <div class="system-image">
                            <img src="/www/assets/images/services/jib-crane-system.jpg" alt="Jib crane system">
                            <div class="system-badge">Specialty Systems</div>
                        </div>
                        <div class="system-content">
                            <div class="system-icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <h3>Jib Cranes & Specialty Systems</h3>
                            <p>Rotating boom cranes including wall-mounted, mast-type, and tie-rod jib cranes plus specialty systems like workstation cranes and lifting devices.</p>

                            <ul class="system-specs">
                                <li><i class="fas fa-check"></i> <strong>Jib Types:</strong> Wall-mounted, mast-type, tie-rod, articulating</li>
                                <li><i class="fas fa-check"></i> <strong>Rotation:</strong> 180° (wall) to 360° (mast-type)</li>
                                <li><i class="fas fa-check"></i> <strong>Foundation:</strong> Concrete foundation, building attachment</li>
                                <li><i class="fas fa-check"></i> <strong>Workstation Cranes:</strong> Modular aluminum systems</li>
                                <li><i class="fas fa-check"></i> <strong>Special Systems:</strong> Vacuum lifters, magnetic lifters</li>
                                <li><i class="fas fa-check"></i> <strong>Integration:</strong> Cell-based manufacturing support</li>
                            </ul>

                            <div class="system-applications">
                                <strong>Applications:</strong>
                                <div class="app-tag">Machine Cells</div>
                                <div class="app-tag">Loading Docks</div>
                                <div class="app-tag">Maintenance Bays</div>
                                <div class="app-tag">Foundries</div>
                                <div class="app-tag">Fabrication Shops</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Crane System Inspection Requirements</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Crane System Type</th>
                                <th>Primary Inspection Focus</th>
                                <th>Load Testing Requirements</th>
                                <th>Frequency (Annual)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Overhead Bridge Cranes</strong></td>
                                <td>Bridge, runway, trolley, hoist, electrical</td>
                                <td>125% rated load + operational testing</td>
                                <td>Complete inspection & test (ASME B30.2)</td>
                            </tr>
                            <tr>
                                <td><strong>Gantry Cranes</strong></td>
                                <td>Legs, bridge, track system, foundations</td>
                                <td>125% rated load + stability check</td>
                                <td>Complete inspection & test + weather exposure assessment</td>
                            </tr>
                            <tr>
                                <td><strong>Underhung Systems</strong></td>
                                <td>Suspension, track, trolley, runway beam adequacy</td>
                                <td>125% rated load + suspension verification</td>
                                <td>Complete inspection & test + building structure interface</td>
                            </tr>
                            <tr>
                                <td><strong>Jib Cranes</strong></td>
                                <td>Mast, boom, foundation, rotation mechanism</td>
                                <td>125% rated load + foundation/mounting check</td>
                                <td>Complete inspection & test + foundation assessment</td>
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
                <span class="section-label">INDUSTRIAL APPLICATIONS</span>
                <h2>Industries & Facilities We Serve</h2>
                <p>Professional crane inspection across manufacturing, processing, and material handling operations</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="manufacturing">Manufacturing & Assembly</button>
                    <button class="tab-btn" data-tab="steel">Steel & Metals Processing</button>
                    <button class="tab-btn" data-tab="warehousing">Warehousing & Distribution</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Industries</button>
                </div>

                <div class="tabs-content">
                    <!-- Manufacturing Tab -->
                    <div class="tab-panel active" id="manufacturing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/manufacturing-crane.jpg" alt="Manufacturing facility crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Manufacturing & Assembly Operations</h3>
                                <p>Manufacturing facilities rely on overhead and gantry cranes for efficient material handling, production support, and assembly operations. Our inspection services ensure reliable crane performance, workplace safety, and regulatory compliance across diverse manufacturing environments.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Automotive manufacturing and assembly plants</li>
                                    <li><i class="fas fa-check"></i> Aerospace and aircraft manufacturing facilities</li>
                                    <li><i class="fas fa-check"></i> Heavy machinery and equipment manufacturing</li>
                                    <li><i class="fas fa-check"></i> Electronics and appliance manufacturing</li>
                                    <li><i class="fas fa-check"></i> General manufacturing and machine shops</li>
                                    <li><i class="fas fa-check"></i> Food processing and beverage production</li>
                                    <li><i class="fas fa-check"></i> Pharmaceutical and chemical manufacturing</li>
                                    <li><i class="fas fa-check"></i> Textile and consumer goods production</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1910.179</span>
                                    <span class="standard-tag">ASME B30.2</span>
                                    <span class="standard-tag">ANSI B30.11</span>
                                    <span class="standard-tag">NFPA 70E</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Steel & Metals Tab -->
                    <div class="tab-panel" id="steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/steel-mill-crane.jpg" alt="Steel mill crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Steel Mills & Metals Processing</h3>
                                <p>Steel mills, foundries, and metals processing facilities operate high-capacity, heavy-duty cranes in demanding environments. Our inspection services address the unique challenges of high-temperature operations, corrosive environments, and extreme duty cycles.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel mills and integrated steel production</li>
                                    <li><i class="fas fa-check"></i> Foundries and casting operations</li>
                                    <li><i class="fas fa-check"></i> Aluminum smelting and processing facilities</li>
                                    <li><i class="fas fa-check"></i> Copper, brass, and non-ferrous metals processing</li>
                                    <li><i class="fas fa-check"></i> Forging and heat treatment operations</li>
                                    <li><i class="fas fa-check"></i> Scrap processing and recycling facilities</li>
                                    <li><i class="fas fa-check"></i> Powder metallurgy and specialty alloys</li>
                                    <li><i class="fas fa-check"></i> Metal fabrication and structural steel shops</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.2</span>
                                    <span class="standard-tag">AISE Technical Report</span>
                                    <span class="standard-tag">OSHA 1910.179</span>
                                    <span class="standard-tag">High-Duty Classifications</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Warehousing Tab -->
                    <div class="tab-panel" id="warehousing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/warehouse-crane.jpg" alt="Warehouse crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Warehousing & Distribution Centers</h3>
                                <p>Distribution centers, logistics facilities, and warehouse operations use overhead cranes for efficient material handling, inventory management, and cargo processing. Our inspection services support operational reliability and safety in fast-paced logistics environments.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Distribution centers and logistics facilities</li>
                                    <li><i class="fas fa-check"></i> Container handling and intermodal facilities</li>
                                    <li><i class="fas fa-check"></i> Cold storage and refrigerated warehouses</li>
                                    <li><i class="fas fa-check"></i> E-commerce fulfillment centers</li>
                                    <li><i class="fas fa-check"></i> Building materials and lumber yards</li>
                                    <li><i class="fas fa-check"></i> Paper and pulp storage facilities</li>
                                    <li><i class="fas fa-check"></i> Bulk material handling and storage</li>
                                    <li><i class="fas fa-check"></i> Import/export terminals and customs facilities</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1910.179</span>
                                    <span class="standard-tag">ASME B30.2</span>
                                    <span class="standard-tag">FEM Standards</span>
                                    <span class="standard-tag">Building Codes</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/specialty-crane.jpg" alt="Specialty crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty Industries & Applications</h3>
                                <p>Specialized facilities including shipyards, nuclear plants, research facilities, and unique industrial operations require customized crane inspection approaches addressing specific regulatory, environmental, and operational requirements.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Shipyards and marine construction facilities</li>
                                    <li><i class="fas fa-check"></i> Nuclear power plants and fuel handling (where qualified)</li>
                                    <li><i class="fas fa-check"></i> Research facilities and national laboratories</li>
                                    <li><i class="fas fa-check"></i> Mining and mineral processing operations</li>
                                    <li><i class="fas fa-check"></i> Waste management and recycling facilities</li>
                                    <li><i class="fas fa-check"></i> Transportation equipment manufacturing (rail, marine)</li>
                                    <li><i class="fas fa-check"></i> Defense contractors and military facilities</li>
                                    <li><i class="fas fa-check"></i> Clean room and controlled environment operations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.2</span>
                                    <span class="standard-tag">ASME NQA-1 (nuclear)</span>
                                    <span class="standard-tag">DOD Requirements</span>
                                    <span class="standard-tag">Industry Specific</span>
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
                <h2>Our Crane Inspection & Testing Capabilities</h2>
                <p>Comprehensive multi-system assessment covering all critical crane components and infrastructure</p>
            </div>

            <div class="capabilities-grid">
                <!-- Runway & Structural -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-road"></i>
                        <h3>Runway & Structural Systems</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Runway Rails:</span> Condition, alignment, joint integrity, wear patterns</li>
                        <li><span class="cap-label">Support Structure:</span> Columns, beams, foundations, connections</li>
                        <li><span class="cap-label">Rail Fastening:</span> Clips, bolts, rail pads, expansion joints</li>
                        <li><span class="cap-label">Electrical Systems:</span> Conductor bars, collectors, grounding</li>
                        <li><span class="cap-label">Building Integration:</span> Structural adequacy, load paths</li>
                        <li><span class="cap-label">Surveying:</span> Rail straightness, elevation, span verification</li>
                        <li><span class="cap-label">Foundation Assessment:</span> Settlement, cracking, stability</li>
                        <li><span class="cap-label">Environmental Factors:</span> Weather exposure, corrosion protection</li>
                    </ul>
                </div>

                <!-- Bridge & Trolley -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-bridge"></i>
                        <h3>Bridge & Trolley Mechanisms</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Bridge Structure:</span> Girders, connections, deflection, fatigue</li>
                        <li><span class="cap-label">End Trucks:</span> Wheels, bearings, drives, brake systems</li>
                        <li><span class="cap-label">Trolley Frame:</span> Structure, wheel assemblies, travel mechanisms</li>
                        <li><span class="cap-label">Drive Systems:</span> Motors, gearboxes, couplings, alignment</li>
                        <li><span class="cap-label">Electrical Collection:</span> Festooning, collector systems, cable reels</li>
                        <li><span class="cap-label">Walkways & Platforms:</span> Access, handrails, lighting, safety</li>
                        <li><span class="cap-label">Bumpers & Stops:</span> End stops, shock absorption, travel limits</li>
                        <li><span class="cap-label">Load Testing:</span> Bridge deflection monitoring under load</li>
                    </ul>
                </div>

                <!-- Hoist & Load Block -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-anchor"></i>
                        <h3>Hoist Assemblies & Load Handling</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Hoist Motors:</span> Condition, mounting, ventilation, protection</li>
                        <li><span class="cap-label">Wire Rope Systems:</span> Condition, reeving, drums, terminations</li>
                        <li><span class="cap-label">Load Block:</span> Hook, sheaves, bearings, safety latches</li>
                        <li><span class="cap-label">Brake Systems:</span> Holding brakes, load lowering, emergency stops</li>
                        <li><span class="cap-label">Gearboxes:</span> Condition, lubrication, mounting, alignment</li>
                        <li><span class="cap-label">Drums & Reeving:</span> Drum condition, rope layering, fleet angle</li>
                        <li><span class="cap-label">Overload Protection:</span> Load limiters, mechanical and electronic</li>
                        <li><span class="cap-label">Performance Testing:</span> Load testing, speed verification, brake testing</li>
                    </ul>
                </div>

                <!-- Electrical & Control Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-bolt"></i>
                        <h3>Electrical & Control Systems</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Power Supply:</span> Disconnect switches, panels, protection devices</li>
                        <li><span class="cap-label">Motor Controls:</span> Contactors, overload relays, variable drives</li>
                        <li><span class="cap-label">Control Circuits:</span> Push button stations, pendant controls</li>
                        <li><span class="cap-label">Safety Systems:</span> Limit switches, emergency stops, interlocks</li>
                        <li><span class="cap-label">Radio Controls:</span> Wireless systems, safety features, battery backup</li>
                        <li><span class="cap-label">Warning Systems:</span> Alarms, beacons, audible signals</li>
                        <li><span class="cap-label">Grounding & Bonding:</span> Electrical safety, conductor continuity</li>
                        <li><span class="cap-label">Code Compliance:</span> NEC, NFPA 70E, electrical safety standards</li>
                    </ul>
                </div>

                <!-- Load Testing -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-balance-scale"></i>
                        <h3>Load Testing & Performance Verification</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Capacity Testing:</span> 125% rated load testing per ASME B30.2</li>
                        <li><span class="cap-label">Operational Testing:</span> All motions under test load</li>
                        <li><span class="cap-label">Brake Testing:</span> Holding and lowering brake verification</li>
                        <li><span class="cap-label">Deflection Monitoring:</span> Bridge and runway deflection measurement</li>
                        <li><span class="cap-label">Safety Device Testing:</span> Limit switches, overload protection</li>
                        <li><span class="cap-label">Performance Verification:</span> Speed, positioning, repeatability</li>
                        <li><span class="cap-label">Test Equipment:</span> Calibrated load cells, test weights</li>
                        <li><span class="cap-label">Witnessed Testing:</span> Third-party verification and certification</li>
                    </ul>
                </div>

                <!-- Documentation & Compliance -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-file-certificate"></i>
                        <h3>Documentation & Compliance</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Inspection Reports:</span> Comprehensive findings and recommendations</li>
                        <li><span class="cap-label">Load Test Certificates:</span> Witnessed testing documentation</li>
                        <li><span class="cap-label">Compliance Statements:</span> ASME B30.2, OSHA 1910.179 certification</li>
                        <li><span class="cap-label">Deficiency Reports:</span> Priority ranking and corrective actions</li>
                        <li><span class="cap-label">Maintenance Recommendations:</span> Preventive maintenance planning</li>
                        <li><span class="cap-label">Equipment Records:</span> Inspection history and tracking</li>
                        <li><span class="cap-label">Qualified Inspector Sign-off:</span> Professional certification</li>
                        <li><span class="cap-label">Regulatory Format:</span> OSHA-suitable documentation</li>
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
                    <p class="lead">Our overhead crane inspection programs are structured around internationally recognized standards, regulatory requirements, and industry best practices. We align our procedures, qualified inspector requirements, and certification documentation to applicable codes for your jurisdiction, crane types, and operational environments.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.2 – Overhead and Gantry Cranes (Top Running Bridge, Multiple Girder)</h4>
                                <p>Primary standard covering design, inspection, testing, maintenance, and operation of overhead and gantry cranes. Defines inspection categories, qualified person requirements, load testing procedures (125% rated capacity), and comprehensive documentation standards for industrial crane safety.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1910.179 – Overhead and Gantry Cranes (General Industry)</h4>
                                <p>Federal regulation governing overhead crane operations in manufacturing and general industry including inspection requirements, operator training, maintenance procedures, safety device requirements, and employer responsibilities for crane safety management.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.11 – Monorails and Underhung Cranes</h4>
                                <p>Standard covering monorail systems, underhung cranes, and suspension-type material handling equipment including design requirements, inspection procedures, testing methods, and operational safety requirements for suspended crane systems.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>NFPA 70E – Electrical Safety in the Workplace</h4>
                                <p>Electrical safety standard addressing safe work practices for electrical systems including crane electrical inspection, maintenance, and operation. Defines arc flash hazard assessment, PPE requirements, and lockout/tagout procedures for crane electrical work.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>AISE Technical Report No. 6 – Specifications for Electric Overhead Traveling Cranes</h4>
                                <p>Steel industry technical report providing enhanced specifications for heavy-duty industrial cranes in steel mills and similar severe service applications. Addresses high-duty classifications, special environmental considerations, and enhanced inspection requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>FEM 1.001 – Rules for the Design of Hoisting Appliances (European)</h4>
                                <p>European standard for crane design and classification providing load spectrum analysis, duty classifications, and design principles. Often referenced for European-manufactured cranes and international projects requiring FEM compliance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Reference Standards</h4>
                        <p><strong>Electrical Standards:</strong> NEC (NFPA 70), IEEE 242 (industrial power), ANSI C2 (NESC). <strong>Building Integration:</strong> IBC (International Building Code), AISC (steel construction), ACI (concrete structures). <strong>Quality Systems:</strong> ISO 9001 (QMS), ISO 17020 (inspection body). <strong>Safety Management:</strong> ANSI/AIHA Z10 (occupational safety), SEMI S2 (semiconductor equipment). <strong>Specialized Applications:</strong> ASME NQA-1 (nuclear), DOD-STD-1399 (military), FDA guidelines (pharmaceutical/food).</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/crane-electrical-inspection.jpg" alt="Overhead crane electrical system inspection">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Crane Electrical System Inspection</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>ASME B30.2 compliance</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Runway system assessment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Complete system integration</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Load testing & verification</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Electrical safety assessment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Industrial compliance focus</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Certifications & Accreditations</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                            <img src="/www/assets/images/certifications/osha.png" alt="OSHA Training">
                            <img src="/www/assets/images/certifications/nfpa.png" alt="NFPA">
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
                <h2>Overhead Crane Inspection Procedure</h2>
                <p>Systematic approach ensuring comprehensive assessment per ASME B30.2 requirements</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning & Documentation Review</h3>
                        <p>Review crane specifications, manufacturer data, previous inspection reports, maintenance records, and operational history. Confirm inspection scope (initial, periodic, annual), applicable standards (ASME B30.2, OSHA 1910.179), qualified inspector assignments, and load testing requirements. Coordinate facility access, test loads, and electrical safety controls.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan + Safety Procedures + Inspector Qualifications
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Runway & Structural System Assessment</h3>
                        <p>Examine runway rails (condition, alignment, wear), support structures (columns, beams, connections), foundations (settlement, cracking), and building integration (structural adequacy). Verify electrical runway systems (conductor bars, collectors, grounding). Document dimensional verification and any structural concerns affecting crane operation.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Runway Assessment Report + Structural Condition Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Bridge, Trolley & Mechanical Systems Examination</h3>
                        <p>Inspect bridge structure (girders, connections, deflection), end trucks (wheels, bearings, drives), trolley mechanisms (frame, wheels, travel systems), drive systems (motors, gearboxes, brakes), and mechanical components. Test operation of all motions and verify proper adjustment, lubrication, and wear limits.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Mechanical Systems Report + Operational Testing Results
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Hoist Assembly & Load Handling Equipment</h3>
                        <p>Examine hoist motors, wire rope (condition, reeving, terminations), load block (hook, sheaves, safety features), brake systems (holding, lowering), drums, and load handling attachments. Verify proper reeving, fleet angles, and safety device operation. Document wire rope condition and retirement criteria assessment.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Hoist System Report + Wire Rope Assessment + Safety Device Testing
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Electrical System & Control Evaluation</h3>
                        <p>Assess electrical systems including power supply (disconnects, panels), motor controls (contactors, overloads, drives), control circuits (push buttons, pendants, radio), safety systems (limits, e-stops), warning devices, and grounding/bonding. Verify code compliance (NEC, NFPA 70E) and electrical safety requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Electrical Systems Report + Code Compliance Assessment
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Load Testing & Performance Verification</h3>
                        <p>Conduct witnessed load testing per ASME B30.2: 125% rated capacity testing, operational testing of all motions under load, brake testing (holding and lowering), deflection monitoring (bridge and runway), safety device verification, and performance assessment. Document test results with calibrated equipment and witness statements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Certificate + Performance Data + Deflection Measurements
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">7</div>
                    <div class="timeline-content">
                        <h3>Final Assessment, Certification & Documentation</h3>
                        <p>Evaluate all findings against ASME B30.2 and OSHA requirements, determine crane condition (Pass / Pass with Restrictions / Fail pending corrections), issue inspection certificate, and provide comprehensive report including all system assessments, load test results, deficiency reports, maintenance recommendations, and qualified inspector certification.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Certificate + Final Report + Equipment Documentation
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
                        <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                        <span>ASME B30 Knowledge</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/osha.png" alt="OSHA">
                        <span>OSHA 30-Hour Training</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/nfpa.png" alt="NFPA 70E">
                        <span>NFPA 70E Electrical Safety</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/crane-institute.png" alt="Crane Institute">
                        <span>Crane Institute Certification</span>
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
                <h2>Your Trusted Industrial Crane Inspection Partner</h2>
                <p>Professional expertise, industrial focus, and commitment to workplace safety excellence</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Industrial Crane Specialists & Qualified Inspectors</h3>
                    <p>Our inspectors are qualified per ASME B30.2 and OSHA 1910.179 with specialized expertise in industrial crane systems, electrical safety (NFPA 70E), mechanical systems, and manufacturing environments. Continuing education ensures current technical knowledge and regulatory awareness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Independent Assessment & Workplace Safety Focus</h3>
                    <p>Independent inspection services providing objective assessment free from maintenance or operational bias—supporting workplace safety, OSHA compliance, and informed decision-making for industrial crane safety and reliability programs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Complete Industrial System Assessment</h3>
                    <p>Comprehensive inspection covering runway systems, bridge structures, mechanical components, electrical systems, and building integration—ensuring total system integrity and compliance with industrial facility requirements and operational demands.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Standards Expertise & Regulatory Knowledge</h3>
                    <p>Expert knowledge of ASME B30.2, OSHA 1910.179, NFPA 70E, and industry-specific requirements (AISE, FEM standards). We ensure compliance with current regulations and provide documentation suitable for OSHA inspections and workplace safety audits.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Load Testing & Electrical Safety Expertise</h3>
                    <p>Professional load testing with calibrated equipment, electrical safety assessment per NFPA 70E, and comprehensive performance verification. We provide capacity confirmation, electrical compliance, and safety system validation for industrial operations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Manufacturing & Industrial Experience</h3>
                    <p>Proven experience across manufacturing facilities, steel mills, warehouses, distribution centers, and industrial operations. Understanding of production requirements, maintenance windows, and operational constraints in industrial environments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Overhead & Gantry Crane Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often must overhead cranes be inspected in industrial facilities?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>OSHA 1910.179 and ASME B30.2 require <strong>frequent inspection</strong> (daily/weekly for active cranes), <strong>periodic inspection</strong> (monthly to quarterly based on usage), and <strong>annual complete inspection and test</strong>. High-activity manufacturing cranes typically require monthly periodic inspections with annual comprehensive inspection including load testing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What load testing is required for overhead cranes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.2 requires annual load testing at <strong>125% of rated capacity</strong> for the annual complete inspection and test. New installations and cranes returning to service after major repairs also require load testing. Testing must include all motions, brake testing, and deflection monitoring with witnessed documentation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are qualified person requirements for crane inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.2 defines a <strong>qualified person</strong> as one with knowledge of crane construction, operation, inspection techniques, safety hazards, and ability to determine continued fitness for service. OSHA 1910.179 requires <strong>competent persons</strong> for inspection with similar qualifications plus company designation and authority to take corrective action.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How important is runway and rail inspection for overhead cranes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Runway systems are critical for safe crane operation. <strong>Rail condition, alignment, and support structure integrity</strong> directly affect crane stability, wheel wear, and operational safety. ASME B30.2 requires runway inspection as part of complete inspection. Poor runway conditions can cause premature wear, operational problems, and safety hazards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What electrical safety requirements apply to overhead crane inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Electrical inspection must address <strong>NEC compliance</strong>, <strong>NFPA 70E safety requirements</strong>, proper grounding/bonding, control circuit integrity, and safety device function. Inspectors working on energized equipment must follow NFPA 70E requirements including arc flash assessment, PPE, and qualified person status for electrical work.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can overhead cranes operate with inspection deficiencies?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>No.</strong> OSHA 1910.179 requires that cranes with deficiencies affecting safe operation be <strong>immediately removed from service</strong> until corrected. Examples include brake failures, limit switch malfunctions, wire rope exceeding retirement criteria, electrical faults, or structural damage. The crane must be tagged "Out of Service" until repairs are completed and reinspected.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is required for industrial crane inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required documentation includes: <strong>inspection records</strong> (frequent, periodic, annual), <strong>load test certificates</strong>, <strong>qualified person certifications</strong>, <strong>deficiency reports</strong> and corrective actions, <strong>maintenance records</strong>, <strong>operator training records</strong>, and <strong>modification documentation</strong>. OSHA requires retention of inspection records and availability for review during inspections.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do environmental factors affect overhead crane inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Corrosive environments</strong> (chemical plants, outdoor installations) require enhanced inspection frequency. <strong>High-temperature applications</strong> affect lubrication and wire rope life. <strong>Dusty environments</strong> impact electrical systems and mechanical components. <strong>High-duty cycle operations</strong> (steel mills, foundries) require more frequent inspection and specialized attention to wear components.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Safe Industrial Operations—Request Professional Crane Inspection</h2>
                <p>Schedule comprehensive overhead and gantry crane inspection, load testing, and certification from qualified industrial specialists</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Industrial Crane Inspection</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> ASME B30.2 / OSHA 1910.179 Compliance</span>
                    <span><i class="fas fa-check"></i> Complete System Assessment</span>
                    <span><i class="fas fa-check"></i> Industrial Safety Focus</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Industrial Equipment Services</h2>
                <p>Complete material handling and lifting equipment inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/mobile-crane-crawler-crane-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Mobile & Crawler Cranes</h3>
                    <p>Professional mobile crane inspection, testing, and certification services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/lifting-gear-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Lifting Gear & Rigging</h3>
                    <p>Comprehensive inspection of slings, chains, wire rope, and rigging hardware</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/magnetic-particle-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing (MT)</h3>
                    <p>Crack detection for crane structural components and welds</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/electrical-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Electrical Testing</h3>
                    <p>Electrical system verification and safety assessment for crane systems</p>
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