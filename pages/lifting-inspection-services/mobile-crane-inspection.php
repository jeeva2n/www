<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Mobile Crane & Crawler Crane Inspection Services | ASME B30.5 Load Testing & Certification | Alpha Sonix NDT Solutions";
$meta_description = "Professional mobile crane and crawler crane inspection, load testing, and certification services. Comprehensive examination per ASME B30.5, OSHA 1926 Subpart CC including structural assessment, mechanical systems, safety devices, annual inspection, monthly inspection, and operational testing for safe crane operations.";
$meta_keywords = "mobile crane inspection, crawler crane testing, crane certification, ASME B30.5, OSHA 1926 Subpart CC, crane load testing, annual crane inspection, monthly crane inspection, truck crane inspection, all-terrain crane inspection, rough terrain crane inspection, lattice boom crane inspection";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/mobile-crane-crawler-crane-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/crane-inspection-og.jpg">

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
            "serviceType": "Mobile Crane & Crawler Crane Inspection",
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
            "description": "Comprehensive mobile crane and crawler crane inspection services including structural examination, mechanical systems assessment, safety device testing, load testing, and certification per ASME B30.5, OSHA 1926 Subpart CC for safe crane operations across construction, industrial, and infrastructure projects."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/crane-inspection-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Mobile Crane & Crawler Crane Inspection</span>
                </div>
                <h1 class="page-title">Mobile Crane & Crawler Crane Inspection</h1>
                <p class="page-subtitle">Professional third-party inspection, testing, and certification of mobile cranes, crawler cranes, and lifting equipment—ensuring structural integrity, mechanical reliability, and safety system performance through comprehensive examination per ASME B30.5, OSHA 1926 Subpart CC, and industry best practices</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME B30.5 / OSHA 1926 Aligned</span>
                    <span class="badge"><i class="fas fa-balance-scale"></i> Load Testing & Certification</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Qualified Inspector Program</span>
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
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Safety-Critical Equipment Assessment</h3>
                    <p>Mobile and crawler cranes are complex lifting machines requiring systematic inspection to ensure structural integrity, mechanical reliability, and safety system functionality before operation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Multi-System Comprehensive Examination</h3>
                    <p>Complete assessment covering structural components, mechanical systems, hydraulics, electrical systems, safety devices, wire rope, and operational controls per ASME B30.5 requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                    <h3>Load Testing & Performance Verification</h3>
                    <p>Witnessed load testing, operational testing, and safety system verification to confirm rated capacity, structural performance, and compliance with manufacturer specifications and regulatory requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Regulatory Compliance & Certification</h3>
                    <p>Inspection programs aligned to ASME B30.5, OSHA 1926 Subpart CC, and jurisdictional requirements with comprehensive documentation for regulatory submission, insurance, and duty-holder obligations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">CRANE INSPECTION EXCELLENCE</span>
                    <h2>What is Mobile Crane & Crawler Crane Inspection?</h2>
                    <p class="lead">Mobile crane and crawler crane inspection encompasses the systematic examination, testing, and certification of wheeled mobile cranes (truck-mounted, all-terrain, rough terrain, pick-and-carry) and crawler cranes (lattice boom, telescopic boom) to ensure safe operation, regulatory compliance, and fitness-for-service across all critical systems and components.</p>

                    <p>Crane inspection addresses multiple interconnected systems: <strong>structural components</strong> (boom, jib, counterweights, outriggers, carbody), <strong>mechanical systems</strong> (hoisting, load block, boom lift, swing mechanisms), <strong>hydraulic systems</strong> (pumps, cylinders, valves, filtration), <strong>electrical systems</strong> (controls, lighting, instrumentation), <strong>safety devices</strong> (load moment systems, two-block prevention, swing brakes), <strong>wire rope and reeving</strong> (condition, installation, terminations), <strong>operator cab and controls</strong> (visibility, ergonomics, communication), and <strong>ground-bearing elements</strong> (outriggers, tracks, tires, counterweight removal systems).</p>

                    <p>Our inspection methodology follows ASME B30.5 requirements for <strong>initial inspection</strong> (before first use), <strong>frequent inspection</strong> (daily/weekly per usage), <strong>periodic inspection</strong> (monthly to annual based on activity level), <strong>special inspections</strong> (after incidents, modifications, or extended idle periods), and <strong>complete inspection and testing</strong> (annual comprehensive examination with load testing). Each category has specific scope, qualified inspector requirements, and documentation standards appropriate to the inspection level and regulatory obligations.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>ASME B30.5 & OSHA 1926 Compliance</strong>
                                <p>Inspections structured around ASME B30.5 (Mobile and Locomotive Cranes) and OSHA 1926 Subpart CC requirements including qualified inspector qualifications, inspection categories, testing requirements, and certification documentation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Independent Third-Party Verification</strong>
                                <p>Unbiased assessment by qualified inspectors with expertise in crane technology, mechanical systems, hydraulics, structural engineering, and safety regulations—supporting defensible certification and liability management.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Load Testing & Capacity Verification</strong>
                                <p>Witnessed load testing at 100% and 110% of rated capacity (ASME B30.5 requirements) with structural assessment, deflection monitoring, and safety system verification under loaded conditions.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Multi-System Assessment</strong>
                                <p>Systematic examination covering all crane systems—structural, mechanical, hydraulic, electrical, safety devices, wire rope, and operational controls—with equipment-specific checklists and acceptance criteria.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Critical Safety Imperative:</strong>
                            <p>Crane failures and incidents often result from inadequate inspection, maintenance deficiencies, or operation beyond design limits. Professional inspection provides objective evidence of crane condition, identifies degradation before failure, and supports regulatory compliance and safe operation programs.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Crane Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Crane Types</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/crane-boom-inspection.jpg" alt="Mobile crane boom structural inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Structural inspection of mobile crane boom sections and connections per ASME B30.5</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">110%</span>
                            <span class="stat-label">Load Test (% Rated Capacity)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Annual</span>
                            <span class="stat-label">Complete Inspection Required</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Multi-System</span>
                            <span class="stat-label">Assessment Coverage</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> Inspection Categories (ASME B30.5)</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Initial inspection (before first use)</li>
                            <li><strong>2.</strong> Frequent inspection (daily/weekly)</li>
                            <li><strong>3.</strong> Periodic inspection (monthly/quarterly)</li>
                            <li><strong>4.</strong> Annual complete inspection & test</li>
                            <li><strong>5.</strong> Special inspection (post-incident)</li>
                            <li><strong>6.</strong> Load testing & certification</li>
                            <li><strong>7.</strong> Documentation & record keeping</li>
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
                <h2>Key Benefits of Mobile & Crawler Crane Inspection</h2>
                <p>Protect personnel, assets, and operations through rigorous crane assessment and compliance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Incident Prevention & Personnel Safety</h3>
                    <p>Systematic inspection identifies structural fatigue, mechanical wear, hydraulic degradation, and safety system failures before they result in crane incidents—preventing load drops, tip-overs, structural collapse, and personnel injuries.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance & Legal Protection</h3>
                    <p>Meet duty-holder obligations under OSHA 1926 Subpart CC, ASME B30.5, and jurisdictional crane safety regulations. Independent qualified inspector certification provides defensible evidence of compliance for regulatory audits and enforcement actions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Expert Assessment & Objective Verification</h3>
                    <p>Qualified inspectors with specialized crane technology knowledge provide objective assessment free from operational pressures or maintenance bias—supporting better decisions on repair, refurbishment, retirement, and safe operating limits.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Predictive Maintenance & Reliability Enhancement</h3>
                    <p>Detailed condition assessment identifies developing problems, wear trends, and maintenance needs—supporting planned maintenance programs, parts inventory optimization, and enhanced equipment reliability and availability.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Comprehensive Documentation & Audit Trail</h3>
                    <p>Detailed inspection records, load test certificates, deficiency reports, and qualified inspector certification support audit trails, insurance requirements, liability protection, and knowledge transfer across equipment lifecycle.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Avoidance & Asset Protection</h3>
                    <p>Early detection of issues prevents expensive emergency repairs, catastrophic failures, and project delays. Proper inspection and maintenance extend crane service life, preserve asset value, and optimize total cost of ownership.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CRANE TYPES ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CRANE CATEGORIES</span>
                <h2>Types of Mobile & Crawler Cranes We Inspect</h2>
                <p>lifting inspection programs for all mobile and crawler crane configurations</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Mobile Cranes -->
                    <div class="wave-mode-card">
                        <div class="mode-header electrical">
                            <i class="fas fa-truck"></i>
                            <h3>Mobile Cranes (Truck-Mounted & All-Terrain)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Wheeled mobile cranes including truck-mounted, all-terrain, rough terrain, and pick-and-carry cranes with telescopic booms, hydraulic systems, and outrigger stabilization.</p>
                            <p><strong>Inspection Focus:</strong> Boom extension/retraction systems, outrigger floats and cylinders, load moment indicator systems, hydraulic system integrity, wire rope condition and reeving, and carrier vehicle integration.</p>

                            <div class="mode-advantages">
                                <h4>Common Configurations:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Truck-mounted cranes (highway transportable)</li>
                                    <li><i class="fas fa-check"></i> All-terrain cranes (on/off-road capability)</li>
                                    <li><i class="fas fa-check"></i> Rough terrain cranes (off-road construction)</li>
                                    <li><i class="fas fa-check"></i> Pick-and-carry cranes (industrial handling)</li>
                                    <li><i class="fas fa-check"></i> Telescopic boom configurations (3-8 sections)</li>
                                    <li><i class="fas fa-check"></i> Optional jibs and fly sections</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Key Systems:</strong> Telescopic boom, outriggers, LMI, hydraulics, carrier integration, load charts
                            </div>
                        </div>
                    </div>

                    <!-- Crawler Cranes -->
                    <div class="wave-mode-card">
                        <div class="mode-header mechanical">
                            <i class="fas fa-cogs"></i>
                            <h3>Crawler Cranes (Lattice Boom & Telescopic)</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Track-mounted crawler cranes with lattice boom or telescopic boom configurations, offering high lifting capacity and stability for heavy lifting and specialized construction applications.</p>
                            <p><strong>Inspection Focus:</strong> Lattice boom sections and connections, counterweight systems, crawlers and drive mechanisms, swing bearing and machinery, boom and jib raising systems, and load block assemblies.</p>

                            <div class="mode-advantages">
                                <h4>Common Configurations:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Conventional lattice boom crawlers (fixed/variable)</li>
                                    <li><i class="fas fa-check"></i> Telescopic boom crawlers (compact/versatile)</li>
                                    <li><i class="fas fa-check"></i> Luffing jib configurations (high reach/capacity)</li>
                                    <li><i class="fas fa-check"></i> Ring-turn and rail-mount options</li>
                                    <li><i class="fas fa-check"></i> Modular counterweight systems</li>
                                    <li><i class="fas fa-check"></i> Special attachments (pile drivers, dragline buckets)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Key Systems:</strong> Lattice boom assembly, crawlers, counterweights, swing machinery, load moment systems
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Mobile Equipment -->
                    <div class="wave-mode-card">
                        <div class="mode-header building">
                            <i class="fas fa-tools"></i>
                            <h3>Specialty Mobile Lifting Equipment</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Description:</strong> Specialized mobile lifting equipment including carry deck cranes, boom trucks, knuckle boom cranes, and aerial lifts with lifting capability requiring ASME B30.5 or related standard compliance.</p>
                            <p><strong>Inspection Focus:</strong> Equipment-specific systems, load charts and capacity verification, stability and outrigger systems, boom articulation mechanisms, and specialized attachments or configurations.</p>

                            <div class="mode-advantages">
                                <h4>Common Types:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Carry deck cranes (industrial material handling)</li>
                                    <li><i class="fas fa-check"></i> Boom trucks and digger derricks (utility work)</li>
                                    <li><i class="fas fa-check"></i> Knuckle boom cranes (articulated boom)</li>
                                    <li><i class="fas fa-check"></i> Truck-mounted aerial lifts with boom capacity</li>
                                    <li><i class="fas fa-check"></i> Self-erecting tower cranes (mobile base)</li>
                                    <li><i class="fas fa-check"></i> Locomotive cranes (rail-mounted)</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Key Systems:</strong> Boom articulation, deck capacity, lifting controls, mobility integration
                            </div>
                        </div>
                    </div>

                    <!-- Load Testing & Certification -->
                    <div class="wave-mode-card">
                        <div class="mode-header process">
                            <i class="fas fa-balance-scale"></i>
                            <h3>Load Testing & Performance Verification</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Verify structural integrity, capacity rating, and safety system functionality through witnessed load testing per ASME B30.5 requirements and manufacturer specifications.</p>
                            <p><strong>Testing Scope:</strong> 100% rated capacity verification, 110% proof load testing (where required), operational testing of all systems, safety device verification, and load chart confirmation across operating radius range.</p>

                            <div class="mode-advantages">
                                <h4>Testing Requirements:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Annual load testing per ASME B30.5</li>
                                    <li><i class="fas fa-check"></i> 100% capacity verification across load chart</li>
                                    <li><i class="fas fa-check"></i> 110% proof load testing (initial/major repair)</li>
                                    <li><i class="fas fa-check"></i> Safety system functional testing</li>
                                    <li><i class="fas fa-check"></i> Operational testing (all functions)</li>
                                    <li><i class="fas fa-check"></i> Witnessed testing and certification</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Documentation:</strong> Load test certificate, capacity verification, safety system testing, inspection report
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Crane Inspection Requirements by Type</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Crane Type</th>
                                <th>Key Inspection Systems</th>
                                <th>Load Testing Requirements</th>
                                <th>Frequency (Periodic)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Mobile Cranes</strong></td>
                                <td>Boom, outriggers, LMI, hydraulics, wire rope</td>
                                <td>100% capacity + 110% proof (initial)</td>
                                <td>Monthly (active use) / Annual (comprehensive)</td>
                            </tr>
                            <tr>
                                <td><strong>Crawler Cranes</strong></td>
                                <td>Lattice boom, crawlers, counterweight, swing</td>
                                <td>100% capacity + operational testing</td>
                                <td>Monthly (active use) / Annual (comprehensive)</td>
                            </tr>
                            <tr>
                                <td><strong>Telescopic Crawlers</strong></td>
                                <td>Boom extend/retract, crawlers, LMI systems</td>
                                <td>100% capacity at multiple radii</td>
                                <td>Monthly (active use) / Annual (comprehensive)</td>
                            </tr>
                            <tr>
                                <td><strong>Specialty Equipment</strong></td>
                                <td>Equipment-specific per manufacturer/standard</td>
                                <td>Per applicable standard (B30.5 or related)</td>
                                <td>Per standard requirements and usage</td>
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
                <p>Professional crane inspection across diverse industries and lifting applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="construction">Construction & Infrastructure</button>
                    <button class="tab-btn" data-tab="industrial">Industrial & Manufacturing</button>
                    <button class="tab-btn" data-tab="energy">Energy & Utilities</button>
                    <button class="tab-btn" data-tab="marine">Marine & Offshore</button>
                </div>

                <div class="tabs-content">
                    <!-- Construction Tab -->
                    <div class="tab-panel active" id="construction">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/construction-crane.jpg" alt="Construction crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Construction & Infrastructure Projects</h3>
                                <p>Construction projects rely on mobile and crawler cranes for safe, efficient lifting of structural components, precast elements, equipment, and materials. Our inspection services support project safety plans, regulatory compliance, and equipment management across diverse construction applications.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> High-rise building construction and steel erection</li>
                                    <li><i class="fas fa-check"></i> Bridge construction and infrastructure projects</li>
                                    <li><i class="fas fa-check"></i> Precast concrete panel and beam placement</li>
                                    <li><i class="fas fa-check"></i> Heavy civil works (dams, tunnels, foundations)</li>
                                    <li><i class="fas fa-check"></i> Industrial facility construction and plant builds</li>
                                    <li><i class="fas fa-check"></i> Transportation infrastructure (airports, ports, rail)</li>
                                    <li><i class="fas fa-check"></i> Residential and commercial development projects</li>
                                    <li><i class="fas fa-check"></i> Emergency response and disaster recovery operations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1926 Subpart CC</span>
                                    <span class="standard-tag">ASME B30.5</span>
                                    <span class="standard-tag">ANSI/ASSP A10.4</span>
                                    <span class="standard-tag">NCCCO Certification</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Industrial Tab -->
                    <div class="tab-panel" id="industrial">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/industrial-crane.jpg" alt="Industrial crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Industrial & Manufacturing Operations</h3>
                                <p>Manufacturing facilities, steel mills, foundries, shipyards, and process industries rely on mobile and crawler cranes for production operations, maintenance activities, and equipment installation. Our inspection services support operational efficiency, worker safety, and regulatory compliance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel mills and foundry material handling operations</li>
                                    <li><i class="fas fa-check"></i> Shipyard fabrication and vessel construction</li>
                                    <li><i class="fas fa-check"></i> Automotive and aerospace manufacturing facilities</li>
                                    <li><i class="fas fa-check"></i> Mining operations and heavy equipment handling</li>
                                    <li><i class="fas fa-check"></i> Paper mills and process industry maintenance</li>
                                    <li><i class="fas fa-check"></i> General manufacturing and warehouse operations</li>
                                    <li><i class="fas fa-check"></i> Equipment installation and plant maintenance</li>
                                    <li><i class="fas fa-check"></i> Modular construction and off-site assembly</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">OSHA 1910.179</span>
                                    <span class="standard-tag">ASME B30.5</span>
                                    <span class="standard-tag">ANSI B30.2</span>
                                    <span class="standard-tag">Industry Specs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Energy Tab -->
                    <div class="tab-panel" id="energy">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/energy-crane.jpg" alt="Power plant crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Energy & Utilities Sector</h3>
                                <p>Power generation, transmission, distribution, and renewable energy projects require lifting crane operations for equipment installation, maintenance, and emergency response. Our inspection services support critical infrastructure reliability and safety requirements.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Power plant construction and maintenance operations</li>
                                    <li><i class="fas fa-check"></i> Wind turbine installation and service operations</li>
                                    <li><i class="fas fa-check"></i> Transmission line construction and maintenance</li>
                                    <li><i class="fas fa-check"></i> Substation equipment installation and replacement</li>
                                    <li><i class="fas fa-check"></i> Solar panel installation and utility-scale projects</li>
                                    <li><i class="fas fa-check"></i> Nuclear facility maintenance and outage support</li>
                                    <li><i class="fas fa-check"></i> Oil and gas facility construction and maintenance</li>
                                    <li><i class="fas fa-check"></i> Emergency response and storm restoration</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.5</span>
                                    <span class="standard-tag">IEEE/NESC</span>
                                    <span class="standard-tag">ASME NQA-1 (nuclear)</span>
                                    <span class="standard-tag">API Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marine Tab -->
                    <div class="tab-panel" id="marine">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/marine-crane.jpg" alt="Marine crane inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Marine & Offshore Operations</h3>
                                <p>Ports, terminals, shipyards, and offshore support operations utilize lifting mobile and crawler cranes for cargo handling, vessel construction, and marine infrastructure projects. Our services support maritime safety and efficiency requirements.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Port and terminal cargo handling operations</li>
                                    <li><i class="fas fa-check"></i> Shipyard vessel construction and repair</li>
                                    <li><i class="fas fa-check"></i> Marine infrastructure construction (piers, docks)</li>
                                    <li><i class="fas fa-check"></i> Offshore platform support and logistics</li>
                                    <li><i class="fas fa-check"></i> Dredging operations and marine construction</li>
                                    <li><i class="fas fa-check"></i> Heavy-lift operations and project cargo</li>
                                    <li><i class="fas fa-check"></i> Naval facilities and defense contractors</li>
                                    <li><i class="fas fa-check"></i> Maritime emergency response operations</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.5</span>
                                    <span class="standard-tag">OSHA Maritime</span>
                                    <span class="standard-tag">DNV/ABS Rules</span>
                                    <span class="standard-tag">USCG Requirements</span>
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
                <p>Comprehensive multi-system assessment covering all critical crane components and functions</p>
            </div>

            <div class="capabilities-grid">
                <!-- Structural Assessment -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-building"></i>
                        <h3>Structural Components Assessment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Boom Structure:</span> Telescopic sections, lattice sections, connections</li>
                        <li><span class="cap-label">Jib & Attachments:</span> Fixed jibs, luffing jibs, fly sections</li>
                        <li><span class="cap-label">Counterweights:</span> Installation, condition, removal systems</li>
                        <li><span class="cap-label">Outriggers:</span> Floats, cylinders, extension systems</li>
                        <li><span class="cap-label">Carbody/Upper Frame:</span> Structural integrity, mounting points</li>
                        <li><span class="cap-label">Operator Cab:</span> Mounting, glazing, FOPS/ROPS compliance</li>
                        <li><span class="cap-label">Load Block:</span> Hook, sheaves, safety latches</li>
                        <li><span class="cap-label">NDT Support:</span> Crack detection (MT/PT/UT) where required</li>
                    </ul>
                </div>

                <!-- Mechanical Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cogs"></i>
                        <h3>Mechanical Systems Examination</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Hoisting System:</span> Winch, drum, gearbox, brake systems</li>
                        <li><span class="cap-label">Boom Lift:</span> Cylinders, chains, cables, boom rest</li>
                        <li><span class="cap-label">Swing Mechanism:</span> Bearing, motor, brake, ring gear</li>
                        <li><span class="cap-label">Telescopic System:</span> Extension/retraction cylinders, wear pads</li>
                        <li><span class="cap-label">Crawler Drive:</span> Track chains, drive motors, idlers</li>
                        <li><span class="cap-label">Wire Rope & Reeving:</span> Condition assessment, installation</li>
                        <li><span class="cap-label">Lubrication Systems:</span> Auto-lube, manual lubrication points</li>
                        <li><span class="cap-label">Performance Testing:</span> Function testing all systems</li>
                    </ul>
                </div>

                <!-- Hydraulic Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-tint"></i>
                        <h3>Hydraulic System Evaluation</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Main Pump:</span> Pressure, flow, condition assessment</li>
                        <li><span class="cap-label">Cylinders:</span> Seals, rods, mounting, operation</li>
                        <li><span class="cap-label">Valves & Controls:</span> Main valve, pilot valves, relief valves</li>
                        <li><span class="cap-label">Filtration:</span> Filters, fluid condition, contamination</li>
                        <li><span class="cap-label">Hydraulic Tank:</span> Fluid level, condition, breather</li>
                        <li><span class="cap-label">Hoses & Fittings:</span> Condition, routing, support</li>
                        <li><span class="cap-label">Pressure Testing:</span> System pressure verification</li>
                        <li><span class="cap-label">Fluid Analysis:</span> Oil condition assessment (optional)</li>
                    </ul>
                </div>

                <!-- Electrical & Safety Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-bolt"></i>
                        <h3>Electrical & Safety Systems</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Load Moment Indicator (LMI):</span> Calibration, function testing</li>
                        <li><span class="cap-label">Rated Capacity Indicator (RCI):</span> System verification</li>
                        <li><span class="cap-label">Anti-Two-Block:</span> Function testing, cable condition</li>
                        <li><span class="cap-label">Control Systems:</span> Joysticks, switches, displays</li>
                        <li><span class="cap-label">Lighting:</span> Work lights, warning beacons, signals</li>
                        <li><span class="cap-label">Communication:</span> Intercom, radio systems</li>
                        <li><span class="cap-label">Safety Devices:</span> Swing brakes, load block safety</li>
                        <li><span class="cap-label">Emergency Systems:</span> E-stop, backup controls</li>
                    </ul>
                </div>

                <!-- Load Testing -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-balance-scale"></i>
                        <h3>Load Testing & Performance Verification</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Capacity Verification:</span> 100% rated load testing per ASME B30.5</li>
                        <li><span class="cap-label">Proof Load Testing:</span> 110% testing (initial/post-major repair)</li>
                        <li><span class="cap-label">Load Chart Verification:</span> Multiple radius and configuration testing</li>
                        <li><span class="cap-label">Deflection Monitoring:</span> Boom deflection measurement</li>
                        <li><span class="cap-label">Safety System Testing:</span> LMI/RCI verification under load</li>
                        <li><span class="cap-label">Operational Testing:</span> All functions under load</li>
                        <li><span class="cap-label">Witnessed Testing:</span> Third-party verification and certification</li>
                        <li><span class="cap-label">Test Equipment:</span> Calibrated load cells and test weights</li>
                    </ul>
                </div>

                <!-- Documentation & Certification -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-file-certificate"></i>
                        <h3>Documentation & Certification</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Inspection Reports:</span> Comprehensive findings and recommendations</li>
                        <li><span class="cap-label">Load Test Certificates:</span> Witnessed testing documentation</li>
                        <li><span class="cap-label">Compliance Statements:</span> ASME B30.5, OSHA 1926 certification</li>
                        <li><span class="cap-label">Deficiency Reports:</span> Non-conformance and corrective actions</li>
                        <li><span class="cap-label">Equipment Records:</span> Inspection history and tracking</li>
                        <li><span class="cap-label">Qualified Inspector Sign-off:</span> Professional certification</li>
                        <li><span class="cap-label">Regulatory Format:</span> Suitable for OSHA, insurance submission</li>
                        <li><span class="cap-label">Digital Records:</span> Electronic storage and retrieval systems</li>
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
                    <p class="lead">Our crane inspection programs are structured around internationally recognized standards, regulatory requirements, and industry best practices. We align our procedures, qualified inspector requirements, and certification documentation to the applicable codes for your jurisdiction, crane types, and operational requirements.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.5 – Mobile and Locomotive Cranes</h4>
                                <p>Primary standard covering design, inspection, testing, maintenance, and operation of mobile cranes. Defines inspection categories (initial, frequent, periodic, special), qualified inspector requirements, load testing procedures, and documentation standards for crane safety and compliance.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1926 Subpart CC – Cranes and Derricks in Construction</h4>
                                <p>US federal regulation governing crane operations in construction including inspection requirements, qualified evaluator and inspector qualifications, operator certification, assembly/disassembly procedures, and safety system requirements. Mandatory compliance for construction work.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1910.179 – Overhead and Gantry Cranes (General Industry)</h4>
                                <p>Federal standard for overhead cranes in manufacturing and general industry, with applicable requirements for mobile equipment used in industrial facilities. Covers inspection, maintenance, operator training, and safety device requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>NCCCO – National Commission for the Certification of Crane Operators</h4>
                                <p>Nationally recognized crane operator certification program covering mobile crane operators, signalpersons, and riggers. OSHA-required certification for construction crane operations with written and practical examinations for specific crane types and capacities.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ANSI/ASSP A10.4 – Safety Requirements for Personnel Hoists and Employee Elevators</h4>
                                <p>Safety standard covering construction hoists and material elevators, with applicable requirements for crane-mounted personnel platforms and specialized lifting operations involving personnel safety considerations.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ship"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Marine & Offshore Standards (DNV, ABS, USCG)</h4>
                                <p>Classification society rules and Coast Guard regulations for marine crane operations including vessel-mounted cranes, offshore platform cranes, and port/terminal equipment. Additional requirements for marine environment operations and certification.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Reference Standards</h4>
                        <p><strong>Testing Standards:</strong> ASME B30.2 (overhead cranes), API RP 2D (offshore), AWS D14.1 (welding). <strong>Quality Systems:</strong> ISO 9001 (QMS), ISO 17020 (inspection body accreditation). <strong>Safety Management:</strong> ANSI/AIHA Z10 (occupational health and safety), NFPA 70E (electrical safety). <strong>Training:</strong> NCCER crane training, manufacturer-specific training programs.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/crane-load-testing.jpg" alt="Crane load testing operation">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Crane Load Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>ASME B30.5 compliance</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Qualified inspector program</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Witnessed load testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Multi-system assessment</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Safety system verification</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Comprehensive documentation</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Certifications & Accreditations</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                            <img src="/www/assets/images/certifications/nccco.png" alt="NCCCO">
                            <img src="/www/assets/images/certifications/osha.png" alt="OSHA Training">
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
                <h2>Crane Inspection Procedure</h2>
                <p>Systematic approach ensuring comprehensive assessment per ASME B30.5 requirements</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning & Documentation Review</h3>
                        <p>Review crane specifications, manufacturer data, previous inspection reports, maintenance records, and operating history. Confirm inspection scope (initial, periodic, annual), applicable standards (ASME B30.5, OSHA requirements), qualified inspector assignments, and testing requirements. Coordinate access, test weights, and safety controls.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan + Safety Plan + Inspector Qualifications
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Structural & Visual Examination</h3>
                        <p>Conduct detailed visual inspection of all structural components: boom sections, jib assemblies, counterweights, outriggers, carbody, operator cab, and load block. Check for cracks, deformation, corrosion, wear, and damage. Verify structural connections, pins, bushings, and mounting hardware. Document findings with photographs and condition mapping.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Structural Inspection Report + Photo Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Mechanical Systems Assessment</h3>
                        <p>Examine all mechanical systems: hoisting mechanism (winch, drum, gearbox, brake), boom lift system (cylinders, chains, cables), swing mechanism (bearing, motor, brake), telescopic system, crawler drive (if applicable), and wire rope condition and reeving. Test operation of all systems and verify proper adjustment and function.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Mechanical Systems Report + Function Test Results
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Hydraulic, Electrical & Safety System Evaluation</h3>
                        <p>Assess hydraulic system (pump, cylinders, valves, filters, fluid condition), electrical systems (controls, lighting, instrumentation), and safety systems (LMI/RCI, anti-two-block, swing brakes, emergency controls). Verify proper operation, calibration, and compliance with manufacturer specifications and safety requirements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Systems Assessment Report + Safety Device Testing
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Load Testing & Capacity Verification</h3>
                        <p>Conduct witnessed load testing per ASME B30.5 requirements: 100% rated capacity testing at multiple radii, 110% proof load testing (where required), safety system verification under load, operational testing of all functions, and deflection monitoring. Verify load chart accuracy and capacity rating compliance across operating range.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Certificate + Capacity Verification + Deflection Data
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Final Assessment, Certification & Documentation</h3>
                        <p>Evaluate all inspection findings against ASME B30.5 acceptance criteria and manufacturer specifications. Determine crane condition: Pass / Pass with Restrictions / Fail pending corrective action. Issue formal inspection certificate, update equipment records with inspection date and next due date, and provide comprehensive report including findings, recommendations, load test results, and qualified inspector certification.</p>
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
                        <img src="/www/assets/images/certifications/nccco.png" alt="NCCCO">
                        <span>NCCCO Inspector Training</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/osha.png" alt="OSHA">
                        <span>OSHA 30-Hour Training</span>
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
                <h2>Your Trusted Crane Inspection Partner</h2>
                <p>Professional expertise, regulatory knowledge, and commitment to crane safety excellence</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Inspectors & Technical Expertise</h3>
                    <p>Our crane inspectors are qualified per ASME B30.5 and OSHA requirements with lifting inspection knowledge of mobile crane technology, hydraulic systems, structural engineering, and safety regulations. NCCCO-aligned training and continuing education maintain technical currency.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Independent Third-Party Assessment</h3>
                    <p>As an independent inspection service, we provide objective, unbiased assessment free from maintenance or operational pressures—supporting defensible certification, regulatory compliance, and better decision-making for crane safety and reliability management.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Comprehensive Multi-System Capability</h3>
                    <p>Complete inspection services covering structural, mechanical, hydraulic, electrical, and safety systems plus load testing, capacity verification, and certification—eliminating the need for multiple contractors and ensuring integrated quality assessment.</p>
                </div>

                <div class="why-card">
                    <div class="way-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Standards Mastery & Regulatory Compliance</h3>
                    <p>Expert knowledge of ASME B30.5, OSHA 1926 Subpart CC, NCCCO requirements, manufacturer specifications, and industry best practices. We ensure compliance with current standards and provide documentation suitable for regulatory submission and audits.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Load Testing & Certification Expertise</h3>
                    <p>Professional load testing services with calibrated equipment, witnessed procedures, and formal certification. We provide capacity verification, proof load testing, safety system verification, and documentation suitable for insurance and regulatory requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Proven Industry Experience</h3>
                    <p>Trusted by construction companies, industrial facilities, utilities, marine terminals, and crane rental companies across diverse projects and applications. Proven track record of professional service, technical competence, and reliable delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Mobile & Crawler Crane Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often must mobile and crawler cranes be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.5 requires <strong>frequent inspection</strong> (daily/weekly based on usage), <strong>periodic inspection</strong> (monthly to annual based on activity), and <strong>annual complete inspection and testing</strong>. OSHA 1926 requires comprehensive inspection before assembly on each jobsite. High-activity cranes may require monthly periodic inspections.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What load testing is required for mobile cranes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME B30.5 requires annual load testing at <strong>100% of rated capacity</strong> for at least one configuration, and <strong>110% proof load testing</strong> before initial use and after major repairs/modifications. Load testing must be witnessed and documented with deflection measurements and safety system verification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Who is qualified to inspect mobile and crawler cranes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspections must be performed by <strong>qualified persons</strong> as defined by ASME B30.5—individuals with knowledge of crane operation, safety hazards, inspection techniques, and ability to determine continued fitness for service. OSHA 1926 requires specific qualifications for <strong>competent persons</strong> and <strong>qualified evaluators</strong>.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What safety systems must be tested during crane inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Key safety systems requiring functional testing include: <strong>Load Moment Indicator (LMI)</strong> or Rated Capacity Indicator (RCI), <strong>anti-two-block system</strong>, <strong>swing brakes</strong>, <strong>boom stops and travel limits</strong>, <strong>load block safety latches</strong>, <strong>emergency stop controls</strong>, and <strong>audible backup alarms</strong>. All must function properly under test conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are common crane inspection deficiencies?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Common deficiencies include: <strong>wire rope deterioration</strong> (broken wires, corrosion, kinking), <strong>hydraulic system leaks</strong> and contamination, <strong>LMI/RCI malfunctions</strong>, <strong>structural cracks</strong> in boom or frame, <strong>outrigger float damage</strong>, <strong>brake adjustment issues</strong>, <strong>worn load block components</strong>, and <strong>missing or illegible load charts</strong>.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can cranes be operated with inspection deficiencies?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>No.</strong> ASME B30.5 and OSHA require that cranes with deficiencies affecting safe operation be <strong>immediately removed from service</strong> until corrected. Minor deficiencies may allow continued operation with restrictions, but <strong>safety-critical defects</strong> (brake failures, LMI malfunctions, structural damage) require immediate shutdown and repair.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is required for crane inspections?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required documentation includes: <strong>inspection records</strong> (frequent, periodic, annual), <strong>load test certificates</strong>, <strong>qualified person certifications</strong>, <strong>deficiency reports and corrective actions</strong>, <strong>maintenance records</strong>, <strong>load chart verification</strong>, and <strong>operator qualification records</strong>. Records must be retained per OSHA and company requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does weather affect crane inspection and operation?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Wind speed limits</strong> must be established per manufacturer specifications (typically 20-30 mph for mobile cranes). <strong>Lightning</strong> requires immediate shutdown. <strong>Ice and snow</strong> affect load charts and stability. <strong>Temperature extremes</strong> may affect hydraulics and wire rope. Weather monitoring and restrictions must be documented and enforced.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Safe Crane Operations—Request Professional Inspection</h2>
                <p>Schedule comprehensive mobile and crawler crane inspection, load testing, and certification from qualified inspectors</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Crane Inspection Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> ASME B30.5 Compliance</span>
                    <span><i class="fas fa-check"></i> Qualified Inspector Program</span>
                    <span><i class="fas fa-check"></i> Witnessed Load Testing</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Lifting Equipment Services</h2>
                <p>Complete crane and lifting equipment inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/lifting-gear-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Lifting Gear & Rigging</h3>
                    <p>Comprehensive inspection of slings, chains, wire rope, and rigging hardware</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/lifting-points-pad-eye-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-circle-notch"></i>
                    </div>
                    <h3>Lifting Points & Pad Eyes</h3>
                    <p>NDT examination and load testing of permanent lifting attachments</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/magnetic-particle.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing (MT)</h3>
                    <p>Crack detection for crane structural components and welds</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ultrasonic-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Ultrasonic Testing (UT)</h3>
                    <p>Thickness measurement and weld examination for critical components</p>
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