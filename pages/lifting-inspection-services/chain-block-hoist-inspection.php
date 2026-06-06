<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Chain Block & Hoist Inspection Services | Manual, Electric & Lever Hoist Testing | ASME B30.16 Certification | Alpha Sonix";
$meta_description = "Professional chain block and hoist inspection, testing, and certification services for manual chain hoists, lever hoists, electric hoists, and air hoists. Comprehensive examination per ASME B30.16, ASME B30.21, OSHA 1910.179, LOLER including load chain inspection, brake testing, and proof load testing.";
$meta_keywords = "chain block inspection, chain hoist testing, lever hoist inspection, manual hoist certification, electric hoist testing, air hoist inspection, ASME B30.16, ASME B30.21, hoist load testing, LOLER inspection, chain hoist maintenance, come along inspection";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/chain-block-hoist-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/hoist-inspection-og.jpg">

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
            "serviceType": "Chain Block & Hoist Inspection",
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
            "description": "Comprehensive chain block and hoist inspection services including visual examination, load chain assessment, brake testing, load testing, and certification for manual, electric, lever, and air hoists per ASME B30.16, ASME B30.21, OSHA 1910.179, and LOLER."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/hoist-inspection-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Chain Block & Hoist Inspection</span>
                </div>
                <h1 class="page-title">Chain Block & Hoist Inspection</h1>
                <p class="page-subtitle">Professional inspection, testing, and certification of chain blocks, lever hoists, electric hoists, and air hoists—ensuring safe lifting operations through comprehensive examination of load chains, brake systems, hooks, and mechanical components per ASME B30.16, ASME B30.21, and OSHA requirements</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME B30.16 / B30.21 Compliant</span>
                    <span class="badge"><i class="fas fa-link"></i> Load Chain Specialist</span>
                    <span class="badge"><i class="fas fa-balance-scale"></i> Proof Load Testing</span>
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
                    <h3>High-Risk Portable Equipment</h3>
                    <p>Chain blocks and hoists are portable lifting devices used in critical applications—failure often results from worn load chains, brake malfunctions, or hook defects requiring systematic inspection.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Load Chain Critical Assessment</h3>
                    <p>Specialized examination of load chain wear, elongation, link damage, and corrosion using calibrated measurement and 10% discard criteria per ASME B30.16 standards.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <h3>Brake System Performance Testing</h3>
                    <p>Comprehensive brake testing including holding capacity, weston brake function, and load control verification—critical safety systems preventing uncontrolled load descent.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Regulatory Compliance & Certification</h3>
                    <p>Inspection programs aligned to ASME B30.16 (Overhead Hoists), B30.21 (Lever Hoists), OSHA 1910.179, and LOLER with comprehensive documentation for workplace safety compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">PORTABLE LIFTING EQUIPMENT INTEGRITY</span>
                    <h2>What is Chain Block & Hoist Inspection?</h2>
                    <p class="lead">Chain block and hoist inspection is the systematic examination, testing, and certification of portable and fixed lifting devices including manual chain hoists (hand chain blocks), lever hoists (come-alongs), electric chain hoists, air-powered hoists, and wire rope hoists. These versatile lifting tools are used across manufacturing, construction, maintenance, and industrial operations for lifting, pulling, and positioning loads.</p>

                    <p>Hoist inspection addresses critical failure modes unique to these devices: <strong>load chain wear and elongation</strong> (the primary load-bearing component subject to wear, corrosion, and fatigue), <strong>brake system deterioration</strong> (Weston brakes in manual hoists and electromagnetic/mechanical brakes in powered hoists), <strong>hook deformation and throat opening</strong>, <strong>gear and pawl wear</strong> in manual mechanisms, <strong>electrical system faults</strong> in powered hoists, and <strong>load chain reeving errors</strong>. Each requires specialized inspection techniques, measurement tools, and acceptance criteria drawn from ASME B30.16 (Overhead Hoists) and B30.21 (Lever Hoists).</p>

                    <p>Our inspection methodology follows established protocols for <strong>frequent inspection</strong> (daily to monthly visual checks), <strong>periodic inspection</strong> (detailed annual examination), and <strong>special inspections</strong> (after overload, repair, or unusual events). Inspection includes complete disassembly for internal component examination (periodic), load chain measurement and assessment, brake testing under load, hook dimensional verification, and proof load testing at 125% of rated capacity per ASME requirements.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Load Chain Specialist Assessment</strong>
                                <p>Calibrated measurement of chain wear, pitch elongation, and link condition using ASME B30.16 10% wear discard criteria. Visual examination for nicks, gouges, corrosion, and twisted links. Assessment of chain lubrication and end connections.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Weston Brake & Load Control Testing</strong>
                                <p>Critical brake system examination for manual hoists including pawl engagement, spring tension, friction surfaces, and holding capacity verification under test load. Ensures reliable load suspension and controlled lowering.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Mechanical Disassembly</strong>
                                <p>Periodic inspection includes complete disassembly for internal examination of gears, bearings, shafts, and load-bearing components—identifying wear, corrosion, and fatigue invisible from external inspection alone.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Proof Load Testing & Certification</strong>
                                <p>Witnessed load testing at 125% rated capacity per ASME standards with operational testing, brake verification, and formal certification documentation suitable for regulatory compliance and audit requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Critical Safety Fact:</strong>
                            <p>Chain block and hoist failures account for significant workplace incidents, often due to worn load chains below discard limits, brake failures, or improper reeving. A 10% reduction in chain diameter reduces strength by 20%. Professional inspection identifies these conditions before catastrophic failure occurs.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Schedule Hoist Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Hoist Types</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/chain-hoist-inspection.jpg" alt="Chain hoist load chain inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Detailed load chain measurement and wear assessment per ASME B30.16</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">10%</span>
                            <span class="stat-label">Chain Wear Limit</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">125%</span>
                            <span class="stat-label">Proof Load Test</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Annual</span>
                            <span class="stat-label">Periodic Inspection</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> Inspection Scope Elements</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> External visual examination</li>
                            <li><strong>2.</strong> Load chain measurement & assessment</li>
                            <li><strong>3.</strong> Hook dimensional verification</li>
                            <li><strong>4.</strong> Brake system testing</li>
                            <li><strong>5.</strong> Internal mechanical disassembly</li>
                            <li><strong>6.</strong> Load testing (125% rated)</li>
                            <li><strong>7.</strong> Certification & tagging</li>
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
                <span class="section-label">WHY PROFESSIONAL HOIST INSPECTION</span>
                <h2>Key Benefits of Chain Block & Hoist Inspection</h2>
                <p>Prevent dropped loads, ensure compliance, and extend equipment life through expert assessment</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Dropped Load Prevention</h3>
                    <p>Chain failures and brake malfunctions are leading causes of dropped loads. Professional inspection identifies worn chains below 10% discard limits, brake wear, and hook deformation before failure—preventing injuries, equipment damage, and production disruption.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>OSHA & LOLER Compliance</h3>
                    <p>Meet employer obligations under OSHA 1910.179 (overhead hoists), ASME B30.16/B30.21, and LOLER requirements for thorough examination. Competent person inspection with documentation provides defensible compliance evidence for workplace safety audits.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Hidden Defect Detection</h3>
                    <p>Internal gears, bearings, pawls, and brake components cannot be assessed through external visual inspection alone. Complete disassembly during periodic inspection reveals hidden wear, corrosion, and fatigue that would lead to unexpected failure.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective Maintenance</h3>
                    <p>Early detection of wear allows planned maintenance and component replacement during scheduled downtime—avoiding emergency repairs, rental costs, and production losses from unexpected hoist failures during critical operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Equipment Life Extension</h3>
                    <p>Proper inspection, lubrication, and timely component replacement significantly extends hoist service life. Professional assessment identifies repairable conditions versus replacement needs, optimizing total cost of ownership for portable lifting equipment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Traceable Documentation & Liability Protection</h3>
                    <p>Comprehensive inspection records, load test certificates, and competent person sign-off provide audit trail, support insurance coverage, and demonstrate due diligence—protecting organizations from liability in the event of incidents.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== HOIST TYPES ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">HOIST CATEGORIES</span>
                <h2>Types of Chain Blocks & Hoists We Inspect</h2>
                <p>Specialized inspection programs for all manual and powered hoist configurations</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Manual Chain Hoists -->
                    <div class="wave-mode-card">
                        <div class="mode-header torsional">
                            <i class="fas fa-link"></i>
                            <h3>Manual Chain Hoists (Hand Chain Blocks)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Hand-operated hoists using hand chain to drive lifting mechanism through gear reduction. Most common portable lifting device in industry. Capacities typically 0.25 to 50 tons.</p>
                            <p><strong>Inspection Focus:</strong> Load chain wear and condition, hand chain integrity, Weston brake function, gear wear, hook condition, and load testing per ASME B30.16.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Points:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Load chain wear measurement (10% discard limit)</li>
                                    <li><i class="fas fa-check"></i> Weston brake pawl engagement and spring tension</li>
                                    <li><i class="fas fa-check"></i> Gear teeth wear and lubrication condition</li>
                                    <li><i class="fas fa-check"></i> Hook throat opening and latch operation</li>
                                    <li><i class="fas fa-check"></i> Hand chain integrity and end connections</li>
                                    <li><i class="fas fa-check"></i> Load sheave and guide roller condition</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Standards:</strong> ASME B30.16 | <strong>Test Load:</strong> 125% rated capacity
                            </div>
                        </div>
                    </div>

                    <!-- Lever Hoists -->
                    <div class="wave-mode-card">
                        <div class="mode-header longitudinal">
                            <i class="fas fa-hand-rock"></i>
                            <h3>Lever Hoists (Come-Alongs & Pullers)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Lever-operated hoists using ratchet and pawl mechanism for lifting, pulling, and tensioning. Compact design for confined spaces and horizontal pulling applications. Capacities typically 0.25 to 9 tons.</p>
                            <p><strong>Inspection Focus:</strong> Lever mechanism, ratchet and pawl engagement, load chain condition, brake function, and hook integrity per ASME B30.21 requirements.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Points:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Ratchet wheel and pawl engagement</li>
                                    <li><i class="fas fa-check"></i> Lever handle and mechanism integrity</li>
                                    <li><i class="fas fa-check"></i> Load chain wear and free movement</li>
                                    <li><i class="fas fa-check"></i> Brake holding capacity verification</li>
                                    <li><i class="fas fa-check"></i> Hook condition and safety latches</li>
                                    <li><i class="fas fa-check"></i> Free chaining mechanism operation</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Standards:</strong> ASME B30.21 | <strong>Test Load:</strong> 125% rated capacity
                            </div>
                        </div>
                    </div>

                    <!-- Electric Chain Hoists -->
                    <div class="wave-mode-card">
                        <div class="mode-header flexural">
                            <i class="fas fa-bolt"></i>
                            <h3>Electric Chain Hoists</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Motor-driven chain hoists for frequent lifting operations. Available in single-phase and three-phase configurations with various speeds and duty ratings for industrial applications.</p>
                            <p><strong>Inspection Focus:</strong> Electrical systems, motor brake function, load chain condition, limit switches, control systems, and gearbox integrity per ASME B30.16 requirements.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Points:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Electric motor condition and brake function</li>
                                    <li><i class="fas fa-check"></i> Load chain wear and lubrication</li>
                                    <li><i class="fas fa-check"></i> Upper and lower limit switches</li>
                                    <li><i class="fas fa-check"></i> Control pendant and emergency stop</li>
                                    <li><i class="fas fa-check"></i> Gearbox oil condition and leaks</li>
                                    <li><i class="fas fa-check"></i> Electrical safety (grounding, insulation)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Standards:</strong> ASME B30.16, NEC, NFPA 70E | <strong>Test Load:</strong> 125% rated capacity
                            </div>
                        </div>
                    </div>

                    <!-- Air Hoists -->
                    <div class="wave-mode-card">
                        <div class="mode-header torsional">
                            <i class="fas fa-wind"></i>
                            <h3>Air Hoists & Wire Rope Hoists</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Pneumatic-powered hoists for hazardous environments and wire rope hoists for heavy-duty applications. Used in explosion-proof areas, foundries, and high-duty-cycle operations.</p>
                            <p><strong>Inspection Focus:</strong> Air motor condition, wire rope integrity, brake systems, control valves, and specialized components per ASME B30.16 and manufacturer specifications.</p>

                            <div class="mode-advantages">
                                <h4>Critical Inspection Points:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Air motor and vane condition</li>
                                    <li><i class="fas fa-check"></i> Wire rope condition and reeving</li>
                                    <li><i class="fas fa-check"></i> Pneumatic controls and valves</li>
                                    <li><i class="fas fa-check"></i> Spark-resistant features (hazardous locations)</li>
                                    <li><i class="fas fa-check"></i> Drum and brake system integrity</li>
                                    <li><i class="fas fa-check"></i> Air filtration and lubrication systems</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Standards:</strong> ASME B30.16 | <strong>Applications:</strong> Hazardous locations, foundries, high-duty
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Hoist Inspection Requirements by Type</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Hoist Type</th>
                                <th>Frequent Inspection</th>
                                <th>Periodic Inspection</th>
                                <th>Load Test Requirement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Manual Chain Hoists</strong></td>
                                <td>Daily to monthly (visual)</td>
                                <td>Annual (complete disassembly)</td>
                                <td>125% rated load (annual or post-repair)</td>
                            </tr>
                            <tr>
                                <td><strong>Lever Hoists</strong></td>
                                <td>Before each use (visual)</td>
                                <td>Annual (detailed examination)</td>
                                <td>125% rated load (periodic)</td>
                            </tr>
                            <tr>
                                <td><strong>Electric Chain Hoists</strong></td>
                                <td>Daily (visual and operational)</td>
                                <td>Annual (complete including electrical)</td>
                                <td>125% rated load + brake testing</td>
                            </tr>
                            <tr>
                                <td><strong>Air/Wire Rope Hoists</strong></td>
                                <td>Daily to weekly</td>
                                <td>Annual (comprehensive)</td>
                                <td>125% rated load per ASME B30.16</td>
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
                <h2>Industries & Operations We Serve</h2>
                <p>Professional hoist inspection across manufacturing, construction, and maintenance operations</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="manufacturing">Manufacturing</button>
                    <button class="tab-btn" data-tab="construction">Construction</button>
                    <button class="tab-btn" data-tab="maintenance">Maintenance & Repair</button>
                    <button class="tab-btn" data-tab="utilities">Utilities & Energy</button>
                </div>

                <div class="tabs-content">
                    <!-- Manufacturing Tab -->
                    <div class="tab-panel active" id="manufacturing">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/manufacturing-hoist.jpg" alt="Manufacturing facility hoist inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Manufacturing & Production Facilities</h3>
                                <p>Manufacturing operations rely on chain hoists and lever hoists for material handling, assembly operations, die changes, and equipment maintenance. Our inspection services support production efficiency, workplace safety, and OSHA compliance across diverse manufacturing environments.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Assembly line material handling and positioning</li>
                                    <li><i class="fas fa-check"></i> Die changes and tool handling in press operations</li>
                                    <li><i class="fas fa-check"></i> Machine maintenance and equipment servicing</li>
                                    <li><i class="fas fa-check"></i> Raw material and component handling</li>
                                    <li><i class="fas fa-check"></i> Workstation cranes and jib crane hoists</li>
                                    <li><i class="fas fa-check"></i> Quality control and testing operations</li>
                                    <li><i class="fas fa-check"></i> Packaging and shipping departments</li>
                                    <li><i class="fas fa-check"></i> Tool rooms and maintenance shops</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1910.179</span>
                                    <span class="standard-tag">ASME B30.16</span>
                                    <span class="standard-tag">ASME B30.21</span>
                                    <span class="standard-tag">ANSI B30.11</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Tab -->
                    <div class="tab-panel" id="construction">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/construction-hoist.jpg" alt="Construction site hoist inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Construction & Infrastructure Projects</h3>
                                <p>Construction sites use portable hoists for material lifting, equipment positioning, and temporary lifting operations. Our inspection services support site safety, equipment rental compliance, and OSHA construction requirements for temporary lifting equipment.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Material hoisting and positioning on job sites</li>
                                    <li><i class="fas fa-check"></i> Equipment installation and rigging operations</li>
                                    <li><i class="fas fa-check"></i> Structural steel erection support</li>
                                    <li><i class="fas fa-check"></i> HVAC and mechanical equipment installation</li>
                                    <li><i class="fas fa-check"></i> Scaffolding and formwork operations</li>
                                    <li><i class="fas fa-check"></i> Rental equipment inspection and certification</li>
                                    <li><i class="fas fa-check"></i> Temporary lifting and pulling operations</li>
                                    <li><i class="fas fa-check"></i> Bridge and infrastructure construction</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1926</span>
                                    <span class="standard-tag">ASME B30.16</span>
                                    <span class="standard-tag">ASME B30.21</span>
                                    <span class="standard-tag">ANSI A10.4</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Maintenance Tab -->
                    <div class="tab-panel" id="maintenance">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/maintenance-hoist.jpg" alt="Maintenance shop hoist inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Maintenance, Repair & Service Operations</h3>
                                <p>Maintenance shops, service facilities, and repair operations rely on hoists for equipment servicing, component handling, and repair operations. Our inspection services ensure safe, reliable operation of critical maintenance equipment.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Automotive repair and service facilities</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment maintenance shops</li>
                                    <li><i class="fas fa-check"></i> Industrial equipment servicing and repair</li>
                                    <li><i class="fas fa-check"></i> Aviation maintenance and aircraft servicing</li>
                                    <li><i class="fas fa-check"></i> Marine and ship repair facilities</li>
                                    <li><i class="fas fa-check"></i> Power plant and utility maintenance</li>
                                    <li><i class="fas fa-check"></i> Mining equipment repair shops</li>
                                    <li><i class="fas fa-check"></i> Railroad maintenance facilities</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1910.179</span>
                                    <span class="standard-tag">ASME B30.16</span>
                                    <span class="standard-tag">DOT Regulations</span>
                                    <span class="standard-tag">Industry Specific</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Utilities Tab -->
                    <div class="tab-panel" id="utilities">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/utility-hoist.jpg" alt="Utility hoist inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Utilities, Energy & Infrastructure</h3>
                                <p>Utility companies, power plants, and energy facilities use hoists for equipment maintenance, transformer handling, and infrastructure servicing. Our inspection services support critical infrastructure reliability and regulatory compliance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Power plant maintenance and outage support</li>
                                    <li><i class="fas fa-check"></i> Electrical substation equipment handling</li>
                                    <li><i class="fas fa-check"></i> Transformer installation and maintenance</li>
                                    <li><i class="fas fa-check"></i> Water and wastewater treatment facilities</li>
                                    <li><i class="fas fa-check"></i> Telecommunications and tower maintenance</li>
                                    <li><i class="fas fa-check"></i> Oil and gas facility maintenance</li>
                                    <li><i class="fas fa-check"></i> Renewable energy (wind, solar) maintenance</li>
                                    <li><i class="fas fa-check"></i> Emergency response and storm restoration</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1910.269</span>
                                    <span class="standard-tag">ASME B30.16</span>
                                    <span class="standard-tag">IEEE Standards</span>
                                    <span class="standard-tag">NFPA 70E</span>
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
                <h2>Our Chain Block & Hoist Inspection Capabilities</h2>
                <p>Comprehensive assessment covering all critical hoist components and systems</p>
            </div>

            <div class="capabilities-grid">
                <!-- Load Chain Assessment -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-link"></i>
                        <h3>Load Chain & Wire Rope Assessment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wear Measurement:</span> Calibrated measurement per ASME B30.16 (10% limit)</li>
                        <li><span class="cap-label">Pitch Elongation:</span> Chain stretch assessment and evaluation</li>
                        <li><span class="cap-label">Link Condition:</span> Nicks, gouges, corrosion, deformation</li>
                        <li><span class="cap-label">End Connections:</span> Master links, end fittings, attachments</li>
                        <li><span class="cap-label">Lubrication:</span> Chain lubrication condition and adequacy</li>
                        <li><span class="cap-label">Wire Rope:</span> Broken wires, corrosion, kinking (wire rope hoists)</li>
                        <li><span class="cap-label">Reeving:</span> Proper installation and routing verification</li>
                        <li><span class="cap-label">Documentation:</span> Chain measurements and condition records</li>
                    </ul>
                </div>

                <!-- Brake Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-hand-paper"></i>
                        <h3>Brake System Examination & Testing</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Weston Brake:</span> Pawl engagement, spring tension, friction surfaces</li>
                        <li><span class="cap-label">Holding Capacity:</span> Brake holding test under load</li>
                        <li><span class="cap-label">Load Control:</span> Controlled lowering and load holding</li>
                        <li><span class="cap-label">Pawl & Ratchet:</span> Engagement, wear, spring condition</li>
                        <li><span class="cap-label">Friction Surfaces:</span> Wear, contamination, glazing</li>
                        <li><span class="cap-label">Electric Brakes:</span> Electromagnetic brake function (powered hoists)</li>
                        <li><span class="cap-label">Mechanical Brakes:</span> Adjustment, wear, lining condition</li>
                        <li><span class="cap-label">Testing:</span> Static and dynamic brake performance</li>
                    </ul>
                </div>

                <!-- Hooks & Load Handling -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-anchor"></i>
                        <h3>Hooks & Load Handling Components</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Hook Throat Opening:</span> Measurement and 15% discard criteria</li>
                        <li><span class="cap-label">Hook Twist:</span> Deformation assessment and limits</li>
                        <li><span class="cap-label">Safety Latches:</span> Operation, spring tension, integrity</li>
                        <li><span class="cap-label">Hook Bearings:</span> Swivel operation, lubrication</li>
                        <li><span class="cap-label">Load Block:</span> Sheaves, bearings, side plates</li>
                        <li><span class="cap-label">Cracks & Deformation:</span> Visual and NDT examination</li>
                        <li><span class="cap-label">Load Chain Guides:</span> Wear and alignment</li>
                        <li><span class="cap-label">Markings:</span> Capacity, identification verification</li>
                    </ul>
                </div>

                <!-- Mechanical Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cogs"></i>
                        <h3>Mechanical Components & Gearing</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Gears:</span> Tooth wear, pitting, lubrication, alignment</li>
                        <li><span class="cap-label">Bearings:</span> Condition, play, lubrication, seals</li>
                        <li><span class="cap-label">Shafts & Axles:</span> Wear, straightness, keyways</li>
                        <li><span class="cap-label">Housing:</span> Cracks, damage, mounting integrity</li>
                        <li><span class="cap-label">Load Sheave:</span> Pocket wear, alignment, bearings</li>
                        <li><span class="cap-label">Hand Chain Wheel:</span> Pocket wear, chain engagement</li>
                        <li><span class="cap-label">Pawls & Ratchets:</span> Engagement, wear, springs</li>
                        <li><span class="cap-label">Fasteners:</span> Tightness, condition, locking devices</li>
                    </ul>
                </div>

                <!-- Electrical Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-bolt"></i>
                        <h3>Electrical Systems (Powered Hoists)</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Motor:</span> Condition, insulation, bearings, ventilation</li>
                        <li><span class="cap-label">Controls:</span> Pendant, contactors, overload protection</li>
                        <li><span class="cap-label">Wiring:</span> Condition, connections, insulation</li>
                        <li><span class="cap-label">Limit Switches:</span> Upper/lower limits, operation</li>
                        <li><span class="cap-label">Brake System:</span> Electric brake coils, adjustment</li>
                        <li><span class="cap-label">Grounding:</span> Equipment grounding continuity</li>
                        <li><span class="cap-label">Safety Devices:</span> Emergency stop, overload protection</li>
                        <li><span class="cap-label">Code Compliance:</span> NEC, NFPA 70E requirements</li>
                    </ul>
                </div>

                <!-- Load Testing -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-balance-scale"></i>
                        <h3>Load Testing & Performance Verification</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Proof Load Testing:</span> 125% rated capacity per ASME</li>
                        <li><span class="cap-label">Operational Testing:</span> All functions under load</li>
                        <li><span class="cap-label">Brake Testing:</span> Holding and lowering verification</li>
                        <li><span class="cap-label">No-Load Testing:</span> Free operation and function</li>
                        <li><span class="cap-label">Performance Verification:</span> Speed, control, operation</li>
                        <li><span class="cap-label">Test Equipment:</span> Calibrated load cells and weights</li>
                        <li><span class="cap-label">Documentation:</span> Test certificates and records</li>
                        <li><span class="cap-label">Witnessing:</span> Independent verification available</li>
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
                    <span class="section-label">STANDARDS & COMPLIANCE</span>
                    <h2>Applicable Standards & Regulatory Requirements</h2>
                    <p class="lead">Our chain block and hoist inspection programs are structured around recognized standards and regulatory requirements. We align our procedures, acceptance criteria, and certification documentation to applicable codes for your equipment types and operational requirements.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.16 – Overhead Hoists (Underhung)</h4>
                                <p>Primary standard covering underhung hoists including manual, electric, and air-powered chain hoists and wire rope hoists. Defines inspection requirements (frequent and periodic), maintenance procedures, testing requirements (125% proof load), and operator qualifications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hand-rock"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.21 – Lever Hoists</h4>
                                <p>Standard specifically for lever-operated hoists (come-alongs) covering design, inspection, testing, and operation. Defines inspection categories, load testing requirements, and safety requirements for manual lever hoists used in lifting and pulling applications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1910.179 – Overhead and Gantry Cranes</h4>
                                <p>Federal regulation covering overhead hoists in general industry including inspection requirements, maintenance procedures, operator training, and record keeping. Requires frequent and periodic inspections by competent persons with documentation.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>LOLER 1998 – Lifting Operations and Lifting Equipment Regulations (UK)</h4>
                                <p>UK legal requirement mandating thorough examination of lifting equipment including hoists by competent persons at specified intervals (typically every 6-12 months). Defines duty holder responsibilities and certification requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-globe-europe"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>EN 13157 – Hand Powered Cranes (European)</h4>
                                <p>European standard for manually operated hoists and cranes including design requirements, testing procedures, and marking requirements. Harmonized with EU Machinery Directive for CE marking and European market compliance.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ANSI/ASME HST Standards – Hoist Performance</h4>
                                <p>Performance standards defining hoist duty classifications, design requirements, and testing procedures. HST-1 (electric chain), HST-2 (hand chain), HST-3 (lever), HST-4 (wire rope), HST-5 (air) provide detailed specifications for hoist design and performance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Reference Standards</h4>
                        <p><strong>Wire Rope:</strong> ASME B30.9 (slings), ISO 4309 (rope retirement). <strong>Electrical:</strong> NEC (NFPA 70), NFPA 70E (electrical safety). <strong>Quality:</strong> ISO 9001 (QMS), ISO 17020 (inspection body). <strong>Training:</strong> ANSI Z490 (safety training), manufacturer-specific training.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/hoist-brake-testing.jpg" alt="Hoist brake system testing">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Hoist Brake Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>ASME B30.16/B30.21 compliant</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Load chain specialist assessment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Complete disassembly capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Brake performance verification</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>125% proof load testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Comprehensive documentation</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Certifications & Training</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                            <img src="/www/assets/images/certifications/osha.png" alt="OSHA">
                            <img src="/www/assets/images/certifications/manufacturer.png" alt="Manufacturer Trained">
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
                <h2>Chain Block & Hoist Inspection Procedure</h2>
                <p>Systematic approach ensuring comprehensive assessment per ASME B30.16/B30.21</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Assessment & Documentation Review</h3>
                        <p>Review hoist specifications, manufacturer data, previous inspection records, and maintenance history. Confirm hoist type, capacity, and applicable standards (ASME B30.16/B30.21). Establish inspection scope (frequent or periodic) and coordinate equipment availability and work area safety.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan + Equipment History Review
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>External Visual & Operational Examination</h3>
                        <p>Conduct detailed visual inspection of external components: housing condition, hooks, load chain, hand chain, controls, and safety devices. Perform operational test without load verifying all functions, brake operation, and limit switches. Document obvious defects, damage, or abnormalities.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Visual Inspection Report + Operational Test Results
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Load Chain & Wire Rope Detailed Assessment</h3>
                        <p>Measure load chain wear at multiple locations using calibrated gauges. Check for 10% wear limit per ASME B30.16. Assess chain for nicks, gouges, corrosion, twisted links, and proper lubrication. For wire rope hoists, inspect rope condition, broken wires, and end connections. Document measurements and condition.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Chain/Rope Measurement Data + Condition Assessment
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Complete Disassembly & Internal Examination (Periodic)</h3>
                        <p>For periodic inspections, completely disassemble hoist for internal examination. Inspect gears, bearings, shafts, pawls, brake components, and load sheave. Check for wear, corrosion, pitting, and damage. Clean and lubricate all components. Replace worn parts as needed.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Internal Component Assessment + Photographic Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Brake System Testing & Adjustment</h3>
                        <p>Test brake holding capacity and load control function. For manual hoists, verify Weston brake pawl engagement and spring tension. For powered hoists, test electric/mechanical brakes. Adjust brakes to manufacturer specifications. Verify proper operation under no-load and test load conditions.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Brake Performance Test Results + Adjustment Records
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Load Testing & Final Certification</h3>
                        <p>Conduct proof load test at 125% rated capacity per ASME requirements. Perform operational testing at rated load verifying all functions, brake holding, and safety devices. For electric hoists, test limit switches and overload protection. Issue inspection certificate, apply inspection tags, and provide comprehensive report with findings and recommendations.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Certificate + Inspection Report + Equipment Tagging
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-showcase">
                <h3>Our Qualifications & Training</h3>
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
                        <span>OSHA 30-Hour</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/manufacturer.png" alt="Manufacturer">
                        <span>Manufacturer Trained</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/competent-person.png" alt="Competent Person">
                        <span>Competent Person</span>
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
                <h2>Your Trusted Hoist Inspection Partner</h2>
                <p>Specialized expertise, comprehensive assessment, and commitment to lifting safety</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Hoist Specialist Expertise</h3>
                    <p>Our inspectors specialize in chain blocks and hoists with in-depth knowledge of manual, electric, and air hoist mechanisms, brake systems, and failure modes. Manufacturer training and years of hands-on experience ensure thorough, accurate assessments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Complete Disassembly Capability</h3>
                    <p>Full workshop facilities for complete hoist disassembly, internal inspection, component replacement, and reassembly. We don't just inspect externally—we open hoists to examine critical internal components invisible from outside.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Load Chain Specialist Assessment</h3>
                    <p>Specialized expertise in load chain inspection using calibrated measurement tools and ASME B30.16 acceptance criteria. We accurately assess chain wear, identify replacement needs, and prevent chain failures that cause dropped loads.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Load Testing & Certification</h3>
                    <p>On-site and workshop load testing with calibrated test equipment and certified test weights. We provide witnessed proof load testing at 125% rated capacity with formal certification documentation suitable for regulatory compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Repair & Maintenance Support</h3>
                    <p>Beyond inspection, we provide repair services, component replacement, and preventive maintenance. One-stop service for inspection, repair, load testing, and recertification—minimizing downtime and equipment handling.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Multi-Industry Experience</h3>
                    <p>Trusted by manufacturing plants, construction companies, maintenance shops, utilities, and industrial facilities. We understand diverse operational requirements and provide flexible scheduling to minimize production disruption.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Chain Block & Hoist Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should chain hoists be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.16 requires <strong>frequent inspection</strong> (visual, daily to monthly based on usage) and <strong>periodic inspection</strong> (detailed annual inspection with disassembly). OSHA requires inspection before each shift for hoists in regular service. Hoists in severe service or harsh environments may require more frequent periodic inspections.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the 10% rule for load chain wear?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.16 specifies that load chain must be removed from service when wear exceeds <strong>10% of the original material diameter</strong> at any point. This is measured with calibrated calipers at the interlink wear points. A 10% diameter reduction reduces chain strength by approximately 20%, creating unacceptable safety risk.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What's the difference between frequent and periodic hoist inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Frequent inspection</strong> is a visual examination (daily to monthly) checking for obvious damage, proper operation, and safety device function—typically performed by operators. <strong>Periodic inspection</strong> is a detailed annual examination requiring complete disassembly, internal component inspection, measurements, and load testing—performed by qualified inspectors.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can hoists be repaired or must they be replaced?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Many hoist components can be repaired or replaced: <strong>load chains</strong>, <strong>hooks</strong>, <strong>brake components</strong>, <strong>gears</strong>, <strong>bearings</strong>, and <strong>electrical components</strong>. Repairs must use manufacturer-approved parts and procedures. After major repairs, hoists must be load tested at 125% rated capacity before return to service. Economical repair versus replacement depends on hoist age, condition, and repair costs.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What causes hoist brake failures?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Common causes include: <strong>worn friction surfaces</strong>, <strong>contaminated brake linings</strong> (oil, grease), <strong>weak or broken springs</strong>, <strong>improper adjustment</strong>, <strong>worn pawls or ratchets</strong> (manual hoists), and <strong>electrical faults</strong> (powered hoists). Regular inspection and testing identifies brake deterioration before failure. Brake testing under load is essential.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is hoist load testing performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Load testing involves applying <strong>125% of rated capacity</strong> (proof load) and verifying the hoist lifts, holds, and lowers the load safely. Tests include: static holding test, operational test through full lift range, brake holding verification, and limit switch testing (powered hoists). Testing uses calibrated test weights or load cells with witnessed documentation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is required for hoist inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required documentation includes: <strong>inspection reports</strong> (frequent and periodic), <strong>load test certificates</strong>, <strong>maintenance records</strong>, <strong>repair documentation</strong>, and <strong>equipment identification</strong> (capacity tags, serial numbers). OSHA requires records be maintained and available for inspection. Many companies use asset management systems for tracking.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What's the difference between a chain block and a lever hoist?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Chain blocks (hand chain hoists)</strong> use an endless hand chain to lift loads vertically, operated by pulling the hand chain. <strong>Lever hoists (come-alongs)</strong> use a ratcheting lever handle for lifting and pulling, can operate horizontally or vertically, and are more compact. Both use similar load chains and brakes but have different operating mechanisms and applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Safe Lifting Operations—Schedule Hoist Inspection Today</h2>
                <p>Professional chain block and hoist inspection, testing, and certification services with load chain specialists and comprehensive documentation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Hoist Inspection Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> ASME B30.16/B30.21 Compliant</span>
                    <span><i class="fas fa-check"></i> Load Chain Specialists</span>
                    <span><i class="fas fa-check"></i> 125% Proof Load Testing</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Lifting Equipment Services</h2>
                <p>Complete lifting and material handling inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/lifting-gear-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Lifting Gear & Rigging</h3>
                    <p>Comprehensive sling and rigging hardware inspection and testing</p>
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

                <a href="/www/pages/lifting-inspection-services/load-testing-services.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Load Testing Services</h3>
                    <p>Professional load testing and capacity verification services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/magnetic-particle.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Crack detection for hooks, chains, and load-bearing components</p>
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