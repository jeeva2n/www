<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Load Testing Services | Proof Load Testing & Capacity Verification | Crane & Lifting Equipment Certification | Alpha Sonix";
$meta_description = "Professional load testing services for cranes, lifting equipment, spreader beams, and rigging gear. Witnessed proof load testing, capacity verification, and certification per ASME B30, OSHA, LOLER standards. Calibrated test equipment and comprehensive documentation for regulatory compliance and safety assurance.";
$meta_keywords = "load testing services, proof load testing, capacity verification, crane load testing, lifting equipment testing, ASME B30 load testing, witnessed load testing, load test certification, rigging equipment testing, spreader beam load testing, overhead crane testing";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/load-testing-services.php";
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
    <meta property="og:image" content="/www/assets/images/services/load-testing-og.jpg">

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
            "serviceType": "Load Testing Services",
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
            "description": "Professional load testing services including proof load testing, capacity verification, and certification for cranes, lifting equipment, spreader beams, and rigging gear per ASME B30, OSHA, LOLER standards with calibrated equipment and witnessed procedures."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/load-testing-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Load Testing Services</span>
                </div>
                <h1 class="page-title">Load Testing Services</h1>
                <p class="page-subtitle">Professional proof load testing, capacity verification, and certification services for cranes, lifting equipment, and material handling systems—validating structural integrity, confirming rated capacity, and ensuring regulatory compliance through witnessed testing with calibrated instrumentation and comprehensive documentation</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME B30 / OSHA / LOLER Aligned</span>
                    <span class="badge"><i class="fas fa-balance-scale"></i> Calibrated Test Equipment</span>
                    <span class="badge"><i class="fas fa-eye"></i> Witnessed & Certified</span>
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
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3>Capacity & Integrity Verification</h3>
                    <p>Load testing provides objective evidence that lifting equipment meets rated capacity specifications and design performance requirements under controlled conditions before operational use.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance Requirement</h3>
                    <p>ASME B30 series, OSHA regulations, LOLER, and industry standards mandate load testing for cranes, lifting equipment, and rigging gear at specified intervals and conditions.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Calibrated Test Instrumentation</h3>
                    <p>Professional load testing utilizes calibrated load cells, hydraulic test systems, certified test weights, and measurement equipment providing traceable, accurate test results.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-certificate"></i>
                    </div>
                    <h3>Witnessed Certification & Documentation</h3>
                    <p>Formal test certificates with witness statements, test data, acceptance criteria, and competent person sign-off supporting regulatory compliance, insurance, and audit requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">CAPACITY VERIFICATION & CERTIFICATION</span>
                    <h2>What is Professional Load Testing?</h2>
                    <p class="lead">Load testing is a systematic verification process that validates the structural integrity, mechanical performance, and rated capacity of lifting equipment and material handling systems by applying controlled test loads, monitoring equipment response, and documenting results against established acceptance criteria defined by applicable standards, manufacturer specifications, and regulatory requirements.</p>

                    <p>Professional load testing encompasses multiple testing methodologies: <strong>proof load testing</strong> (applying loads exceeding rated capacity to verify structural adequacy—typically 125% to 150% depending on equipment type and standard), <strong>operational load testing</strong> (testing at 100% rated capacity with full operational verification of all functions), <strong>capacity verification testing</strong> (confirming load chart accuracy across operating radius for cranes), <strong>dynamic testing</strong> (evaluating performance under motion and load cycles), and <strong>safety system testing</strong> (verifying overload protection, limit switches, and safety devices under loaded conditions).</p>

                    <p>Load testing serves critical safety and compliance functions: <strong>structural validation</strong> (confirming equipment can safely support design loads without failure or permanent deformation), <strong>regulatory compliance</strong> (meeting mandatory testing requirements per ASME B30 series, OSHA 1910/1926, LOLER, DNV standards), <strong>commissioning verification</strong> (validating new installations before operational use), <strong>post-repair certification</strong> (confirming structural repairs and modifications maintain design capacity), <strong>periodic recertification</strong> (demonstrating continued fitness-for-service at required intervals), and <strong>incident investigation support</strong> (verifying equipment condition following overload events or suspected damage).</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Standards-Based Testing Protocols</strong>
                                <p>Testing procedures aligned to ASME B30.2, B30.5, B30.9, B30.20, B30.26, OSHA regulations, EN standards, LOLER requirements, and DNV rules—ensuring defensible compliance and certification appropriate to equipment type and jurisdiction.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Calibrated Test Equipment & Instrumentation</strong>
                                <p>Professional-grade load cells (wireless and wired), hydraulic load testing systems, certified test weights, deflection measurement equipment, and data acquisition systems—all with current calibration certificates traceable to national standards.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Witnessed Testing & Independent Verification</strong>
                                <p>Third-party witnessing by qualified competent persons providing objective verification, independent certification, and liability protection—supporting insurance requirements, regulatory compliance, and duty-holder obligations.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Test Documentation</strong>
                                <p>Formal test certificates including test procedures, equipment calibration records, test results, acceptance criteria assessment, witness statements, photographic evidence, and professional certification—suitable for regulatory submission and audit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Critical Verification Requirement:</strong>
                            <p>Load testing provides the only objective evidence that lifting equipment can safely perform as designed under maximum rated loads. Visual inspection and maintenance alone cannot verify structural capacity—load testing is essential for safety assurance and regulatory compliance.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Load Testing Quote</a>
                        <a href="#applications" class="btn btn-secondary">View Equipment Categories</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/load-testing-process.jpg" alt="Professional load testing with calibrated equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional load testing using calibrated load cells and witnessed procedures</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">±0.5%</span>
                            <span class="stat-label">Typical Load Cell Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">NIST</span>
                            <span class="stat-label">Traceable Calibration</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Witnessed</span>
                            <span class="stat-label">Independent Certification</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> Load Testing Process</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Test planning & procedure development</li>
                            <li><strong>2.</strong> Equipment calibration verification</li>
                            <li><strong>3.</strong> Test setup & safety controls</li>
                            <li><strong>4.</strong> Load application & monitoring</li>
                            <li><strong>5.</strong> Performance assessment & measurements</li>
                            <li><strong>6.</strong> Acceptance criteria evaluation</li>
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
                <span class="section-label">WHY PROFESSIONAL LOAD TESTING</span>
                <h2>Key Benefits of Load Testing Services</h2>
                <p>Ensure safety, achieve compliance, and protect operations through verified capacity testing</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety Assurance & Risk Mitigation</h3>
                    <p>Load testing verifies equipment can safely handle rated loads without structural failure, catastrophic collapse, or dangerous deformation—protecting personnel, loads, and facilities from incidents resulting from unverified equipment capacity.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory Compliance & Legal Protection</h3>
                    <p>Meet mandatory load testing requirements under ASME B30 standards, OSHA 1910/1926 regulations, LOLER, and jurisdictional codes. Independent certification provides defensible evidence of compliance for regulatory audits and enforcement proceedings.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Objective Performance Verification</h3>
                    <p>Quantitative testing provides objective, measurable evidence of equipment performance—eliminating assumptions and confirming structural adequacy, mechanical function, and safety system operation under actual load conditions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Insurance & Contractual Requirements</h3>
                    <p>Professional load testing certificates satisfy insurance underwriting requirements, contractual obligations, client specifications, and project safety plans—supporting coverage, contract compliance, and project acceptance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Post-Repair & Modification Validation</h3>
                    <p>Load testing after structural repairs, welding, modifications, or upgrades confirms that work maintains original design capacity and safety margins—validating repair quality and structural integrity restoration.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Equipment Commissioning & Acceptance</h3>
                    <p>New equipment commissioning requires load testing to verify manufacturer specifications, validate installation quality, confirm rated capacity, and provide baseline documentation—establishing acceptance criteria for future periodic testing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTING METHODS ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TESTING METHODOLOGIES</span>
                <h2>Types of Load Testing Services</h2>
                <p>Specialized testing approaches for different equipment types and verification requirements</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Proof Load Testing -->
                    <div class="wave-mode-card">
                        <div class="mode-header electrical">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h3>Proof Load Testing</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Verify structural integrity and capacity margin by applying loads exceeding normal rated capacity—demonstrating adequate safety factors and freedom from hidden defects or structural weaknesses.</p>
                            <p><strong>Typical Load Levels:</strong> 125% to 150% of rated capacity depending on equipment type and applicable standard (ASME B30.2: 125%, ASME B30.5: 110%, DNV 2.7-1: 150%).</p>

                            <div class="mode-advantages">
                                <h4>Testing Requirements:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Applied before initial use (new equipment)</li>
                                    <li><i class="fas fa-check"></i> After major structural repairs or modifications</li>
                                    <li><i class="fas fa-check"></i> Following suspected overload events</li>
                                    <li><i class="fas fa-check"></i> When equipment returns to service after extended idle periods</li>
                                    <li><i class="fas fa-check"></i> Load held for specified duration (typically 10 minutes)</li>
                                    <li><i class="fas fa-check"></i> Post-test inspection for permanent deformation</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Acceptance Criteria:</strong> No permanent deformation, no cracking, no component failure
                            </div>
                        </div>
                    </div>

                    <!-- Operational Load Testing -->
                    <div class="wave-mode-card">
                        <div class="mode-header mechanical">
                            <i class="fas fa-cogs"></i>
                            <h3>Operational Load Testing</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Verify functional performance, mechanical reliability, and safety system operation under rated working load conditions—confirming equipment operates properly across all motions and functions.</p>
                            <p><strong>Test Load:</strong> 100% of rated capacity with complete operational testing of all crane motions, controls, brakes, and safety devices.</p>

                            <div class="mode-advantages">
                                <h4>Testing Scope:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> All crane motions tested under load (hoist, trolley, bridge, slew)</li>
                                    <li><i class="fas fa-check"></i> Brake holding and lowering capacity verification</li>
                                    <li><i class="fas fa-check"></i> Safety device functional testing (LMI, anti-two-block, limits)</li>
                                    <li><i class="fas fa-check"></i> Control system responsiveness and accuracy</li>
                                    <li><i class="fas fa-check"></i> Speed verification at rated load</li>
                                    <li><i class="fas fa-check"></i> Positioning accuracy and repeatability</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Applications:</strong> Annual crane testing, periodic recertification, post-maintenance verification
                            </div>
                        </div>
                    </div>

                    <!-- Capacity Verification Testing -->
                    <div class="wave-mode-card">
                        <div class="mode-header building">
                            <i class="fas fa-chart-line"></i>
                            <h3>Capacity Verification & Load Chart Testing</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Verify load chart accuracy and rated capacity across operating radius range for mobile cranes and variable-radius equipment—confirming safe working load at all boom lengths and configurations.</p>
                            <p><strong>Testing Approach:</strong> Multiple test points across radius range, verifying capacity at minimum radius, mid-range positions, and maximum radius per load chart.</p>

                            <div class="mode-advantages">
                                <h4>Testing Elements:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Load chart verification at multiple radii and configurations</li>
                                    <li><i class="fas fa-check"></i> Boom deflection measurement and comparison to design values</li>
                                    <li><i class="fas fa-check"></i> Load moment indicator (LMI) calibration verification</li>
                                    <li><i class="fas fa-check"></i> Stability testing and tip-over margin assessment</li>
                                    <li><i class="fas fa-check"></i> Outrigger load distribution verification</li>
                                    <li><i class="fas fa-check"></i> Documentation of actual vs. rated capacity</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Applications:</strong> Mobile cranes, tower cranes, crawler cranes with variable capacity
                            </div>
                        </div>
                    </div>

                    <!-- Dynamic & Fatigue Testing -->
                    <div class="wave-mode-card">
                        <div class="mode-header process">
                            <i class="fas fa-wave-square"></i>
                            <h3>Dynamic & Cycle Testing</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Evaluate equipment performance under dynamic loading conditions including load cycles, impact loading, and operational stress patterns—assessing fatigue resistance and long-term reliability.</p>
                            <p><strong>Testing Conditions:</strong> Repeated load applications, motion cycles, and operational patterns simulating actual service conditions and duty cycles.</p>

                            <div class="mode-advantages">
                                <h4>Testing Protocols:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Repeated load cycles simulating service conditions</li>
                                    <li><i class="fas fa-check"></i> Dynamic load application and release sequences</li>
                                    <li><i class="fas fa-check"></i> Fatigue assessment for high-duty-cycle equipment</li>
                                    <li><i class="fas fa-check"></i> Impact loading evaluation (where applicable)</li>
                                    <li><i class="fas fa-check"></i> Long-term monitoring and trending programs</li>
                                    <li><i class="fas fa-check"></i> Specialized testing for research and development</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Applications:</strong> High-duty equipment, special applications, R&D testing, failure investigation
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Load Testing Requirements by Equipment Type</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Equipment Type</th>
                                <th>Proof Load Test</th>
                                <th>Operational Test Load</th>
                                <th>Testing Frequency</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Overhead Cranes</strong></td>
                                <td>125% rated capacity (ASME B30.2)</td>
                                <td>100% rated capacity all motions</td>
                                <td>Annual (complete inspection & test)</td>
                            </tr>
                            <tr>
                                <td><strong>Mobile Cranes</strong></td>
                                <td>110% rated capacity (ASME B30.5)</td>
                                <td>100% capacity + load chart verification</td>
                                <td>Annual + post-assembly on jobsite</td>
                            </tr>
                            <tr>
                                <td><strong>Spreader Beams</strong></td>
                                <td>125-150% WLL (ASME/DNV)</td>
                                <td>100% capacity functional test</td>
                                <td>Before first use + post-repair + periodic</td>
                            </tr>
                            <tr>
                                <td><strong>Lifting Points/Pad Eyes</strong></td>
                                <td>150% SWL (DNV 2.7-1) / 125% (ASME)</td>
                                <td>100% capacity verification</td>
                                <td>Before first use + post-repair</td>
                            </tr>
                            <tr>
                                <td><strong>Wire Rope Slings</strong></td>
                                <td>Proof test per manufacturer (new)</td>
                                <td>Periodic strength verification (sampling)</td>
                                <td>As required by standards/client specs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT CATEGORIES ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">EQUIPMENT TESTED</span>
                <h2>Equipment Categories We Load Test</h2>
                <p>Comprehensive load testing services for all lifting and material handling equipment</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="cranes">Cranes & Hoists</button>
                    <button class="tab-btn" data-tab="lifting">Lifting Equipment</button>
                    <button class="tab-btn" data-tab="rigging">Rigging & Slings</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Equipment</button>
                </div>

                <div class="tabs-content">
                    <!-- Cranes Tab -->
                    <div class="tab-panel active" id="cranes">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/crane-load-testing.jpg" alt="Crane load testing operation">
                            </div>
                            <div class="tab-text">
                                <h3>Cranes, Hoists & Material Handling Systems</h3>
                                <p>Comprehensive load testing for all crane types including overhead, gantry, mobile, crawler, and specialized lifting systems—verifying capacity, structural integrity, and safety system performance per applicable ASME B30 standards.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Overhead traveling cranes (bridge cranes, single/double girder)</li>
                                    <li><i class="fas fa-check"></i> Gantry and semi-gantry cranes (full-height and portable)</li>
                                    <li><i class="fas fa-check"></i> Mobile cranes (truck-mounted, all-terrain, rough terrain)</li>
                                    <li><i class="fas fa-check"></i> Crawler cranes (lattice boom and telescopic boom)</li>
                                    <li><i class="fas fa-check"></i> Jib cranes (wall-mounted, mast-type, articulating)</li>
                                    <li><i class="fas fa-check"></i> Monorail and underhung crane systems</li>
                                    <li><i class="fas fa-check"></i> Electric chain hoists and wire rope hoists</li>
                                    <li><i class="fas fa-check"></i> Tower cranes and specialty lifting systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.2</span>
                                    <span class="standard-tag">ASME B30.5</span>
                                    <span class="standard-tag">ASME B30.11</span>
                                    <span class="standard-tag">OSHA 1910/1926</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lifting Equipment Tab -->
                    <div class="tab-panel" id="lifting">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/spreader-beam-testing.jpg" alt="Spreader beam load testing">
                            </div>
                            <div class="tab-text">
                                <h3>Below-the-Hook Lifting Equipment</h3>
                                <p>Professional load testing for engineered lifting devices including spreader beams, lifting frames, and permanent lifting attachments—verifying structural capacity, load distribution, and compliance with design specifications.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Spreader beams and lifting beams (all capacities and configurations)</li>
                                    <li><i class="fas fa-check"></i> Multi-point lifting frames and custom rigging devices</li>
                                    <li><i class="fas fa-check"></i> Lifting points, pad eyes, and lug plates (welded and forged)</li>
                                    <li><i class="fas fa-check"></i> Modular lifting systems and adjustable beams</li>
                                    <li><i class="fas fa-check"></i> Container spreaders and cargo handling equipment</li>
                                    <li><i class="fas fa-check"></i> Vacuum lifters and magnetic lifting systems</li>
                                    <li><i class="fas fa-check"></i> C-hooks, coil lifters, and specialty attachments</li>
                                    <li><i class="fas fa-check"></i> Offshore lifting equipment and subsea hardware</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.20</span>
                                    <span class="standard-tag">ASME B30.26</span>
                                    <span class="standard-tag">DNV 2.7-1</span>
                                    <span class="standard-tag">EN 13155</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rigging Tab -->
                    <div class="tab-panel" id="rigging">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/sling-load-testing.jpg" alt="Rigging equipment load testing">
                            </div>
                            <div class="tab-text">
                                <h3>Rigging Equipment, Slings & Hardware</h3>
                                <p>Load testing and capacity verification for rigging accessories and loose lifting equipment—confirming safe working loads, verifying manufacturer ratings, and supporting periodic recertification programs.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Wire rope slings (all configurations and end fittings)</li>
                                    <li><i class="fas fa-check"></i> Chain slings and alloy steel chain assemblies</li>
                                    <li><i class="fas fa-check"></i> Synthetic slings (webbing, round slings, high-performance)</li>
                                    <li><i class="fas fa-check"></i> Shackles, hooks, and rigging hardware</li>
                                    <li><i class="fas fa-check"></i> Wire rope assemblies and cable systems</li>
                                    <li><i class="fas fa-check"></i> Lifting clamps and plate grabs</li>
                                    <li><i class="fas fa-check"></i> Load binders, turnbuckles, and tensioning devices</li>
                                    <li><i class="fas fa-check"></i> Custom rigging assemblies and specialized hardware</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.9</span>
                                    <span class="standard-tag">ASME B30.26</span>
                                    <span class="standard-tag">EN 818</span>
                                    <span class="standard-tag">EN 1492</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/specialty-load-testing.jpg" alt="Specialty equipment load testing">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty & Custom Equipment</h3>
                                <p>Specialized load testing services for unique equipment, custom applications, and non-standard lifting systems—developing project-specific test procedures and acceptance criteria aligned to engineering requirements.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aerial work platforms and personnel lifts (proof testing)</li>
                                    <li><i class="fas fa-check"></i> Fall protection and rescue equipment (ANSI/OSHA requirements)</li>
                                    <li><i class="fas fa-check"></i> Scaffold suspension systems and swing stages</li>
                                    <li><i class="fas fa-check"></i> Davits, winches, and manual lifting devices</li>
                                    <li><i class="fas fa-check"></i> Subsea lifting equipment and marine hardware</li>
                                    <li><i class="fas fa-check"></i> Nuclear facility lifting equipment (NQA-1 compliance)</li>
                                    <li><i class="fas fa-check"></i> Custom-engineered lifting solutions and prototypes</li>
                                    <li><i class="fas fa-check"></i> Research and development load testing programs</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ANSI/ASSE A10.8</span>
                                    <span class="standard-tag">ANSI Z359</span>
                                    <span class="standard-tag">ASME NQA-1</span>
                                    <span class="standard-tag">Custom Specs</span>
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
                <span class="section-label">TEST EQUIPMENT & CAPABILITIES</span>
                <h2>Our Load Testing Equipment & Instrumentation</h2>
                <p>Professional-grade test equipment with calibrated instrumentation and comprehensive testing capabilities</p>
            </div>

            <div class="capabilities-grid">
                <!-- Load Cells & Instrumentation -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-balance-scale"></i>
                        <h3>Load Cells & Force Measurement</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Wireless Load Cells:</span> Multi-channel wireless systems, real-time display</li>
                        <li><span class="cap-label">Capacity Range:</span> 1 ton to 500+ tons (multiple units available)</li>
                        <li><span class="cap-label">Accuracy:</span> ±0.5% to ±1% of rated capacity (certified)</li>
                        <li><span class="cap-label">Calibration:</span> NIST-traceable calibration certificates</li>
                        <li><span class="cap-label">Data Acquisition:</span> Digital recording, graphing, peak hold</li>
                        <li><span class="cap-label">Redundancy:</span> Multiple load cells for verification</li>
                        <li><span class="cap-label">Environmental Rating:</span> Weather-resistant for field testing</li>
                        <li><span class="cap-label">Recalibration:</span> Annual calibration maintenance program</li>
                    </ul>
                </div>

                <!-- Test Weights & Load Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-weight-hanging"></i>
                        <h3>Test Weights & Load Application Systems</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Certified Test Weights:</span> Calibrated weights with current certificates</li>
                        <li><span class="cap-label">Water Bags:</span> Variable capacity water weight systems</li>
                        <li><span class="cap-label">Hydraulic Systems:</span> Hydraulic load testing equipment and jacks</li>
                        <li><span class="cap-label">Dead Weights:</span> Steel blocks, concrete weights, industrial materials</li>
                        <li><span class="cap-label">Load Rigging:</span> Test rigging hardware and fixtures</li>
                        <li><span class="cap-label">Safety Systems:</span> Secondary support, controlled release</li>
                        <li><span class="cap-label">Transport:</span> Equipment transport and setup capability</li>
                        <li><span class="cap-label">Custom Solutions:</span> Project-specific test load arrangements</li>
                    </ul>
                </div>

                <!-- Measurement & Monitoring -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-combined"></i>
                        <h3>Deflection & Strain Measurement</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Deflection Measurement:</span> Precision measurement equipment</li>
                        <li><span class="cap-label">Optical Systems:</span> Laser distance meters, theodolites</li>
                        <li><span class="cap-label">Dial Indicators:</span> High-precision mechanical gauges</li>
                        <li><span class="cap-label">String Potentiometers:</span> Continuous displacement monitoring</li>
                        <li><span class="cap-label">Strain Gauges:</span> Electrical strain measurement (specialized)</li>
                        <li><span class="cap-label">Alignment Tools:</span> Level, straightness verification</li>
                        <li><span class="cap-label">Documentation:</span> Photographic and video recording</li>
                        <li><span class="cap-label">Baseline Recording:</span> Pre/post-test comparison data</li>
                    </ul>
                </div>

                <!-- Safety Equipment -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-hard-hat"></i>
                        <h3>Safety & Control Equipment</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Test Area Control:</span> Barricades, exclusion zones, signage</li>
                        <li><span class="cap-label">Load Monitoring:</span> Real-time load display and alarms</li>
                        <li><span class="cap-label">Emergency Release:</span> Controlled load lowering systems</li>
                        <li><span class="cap-label">Backup Systems:</span> Redundant support and safety rigging</li>
                        <li><span class="cap-label">Communication:</span> Radio systems, coordination protocols</li>
                        <li><span class="cap-label">Personnel Safety:</span> PPE, lockout/tagout, permits</li>
                        <li><span class="cap-label">Environmental Control:</span> Weather monitoring, wind limits</li>
                        <li><span class="cap-label">Incident Preparedness:</span> Emergency response planning</li>
                    </ul>
                </div>

                <!-- Documentation Systems -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-file-certificate"></i>
                        <h3>Documentation & Certification</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Test Certificates:</span> Formal certificates with witness statements</li>
                        <li><span class="cap-label">Test Data:</span> Load readings, deflection measurements, time records</li>
                        <li><span class="cap-label">Calibration Records:</span> Equipment calibration certificates</li>
                        <li><span class="cap-label">Photographic Evidence:</span> Test setup and execution documentation</li>
                        <li><span class="cap-label">Acceptance Criteria:</span> Standards-based evaluation and sign-off</li>
                        <li><span class="cap-label">Witness Statements:</span> Independent observer certification</li>
                        <li><span class="cap-label">Compliance Statements:</span> Regulatory standard compliance</li>
                        <li><span class="cap-label">Digital Records:</strong> Electronic archiving and retrieval</li>
                    </ul>
                </div>

                <!-- Testing Services -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cogs"></i>
                        <h3>Service Delivery & Support</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Field Testing:</span> On-site testing at client facilities</li>
                        <li><span class="cap-label">Workshop Testing:</span> Controlled testing at our facility</li>
                        <li><span class="cap-label">Project Planning:</span> Test procedure development and coordination</li>
                        <li><span class="cap-label">Risk Assessment:</span> Test safety planning and hazard mitigation</li>
                        <li><span class="cap-label">Scheduling:</span> Flexible scheduling and emergency response</li>
                        <li><span class="cap-label">Mobilization:</span> Equipment transport and test setup</li>
                        <li><span class="cap-label">Witnessing Services:</span> Independent third-party verification</li>
                        <li><span class="cap-label">Consulting:</span> Load testing engineering and technical support</li>
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
                    <h2>Applicable Load Testing Standards & Requirements</h2>
                    <p class="lead">Our load testing services are structured around internationally recognized standards, regulatory requirements, and industry best practices. We align testing procedures, acceptance criteria, and certification documentation to applicable codes for your equipment type, jurisdiction, and operational requirements.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30 Series – Safety Standards for Cableways, Cranes, Derricks, Hoists, Hooks, Jacks, and Slings</h4>
                                <p>Comprehensive family of standards covering load testing requirements for all categories of lifting equipment. Key standards: B30.2 (Overhead Cranes, 125% proof load), B30.5 (Mobile Cranes, 110% proof load), B30.9 (Slings), B30.20 (Below-the-Hook), B30.26 (Rigging Hardware). Defines test loads, procedures, acceptance criteria, and documentation requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1910.179 / 1926 Subpart CC – Crane Safety Regulations</h4>
                                <p>Federal regulations requiring load testing for cranes in general industry (1910.179) and construction (1926 Subpart CC). Mandates load testing before initial use, after major repairs, annually, and per ASME B30 standards. Defines employer responsibilities, qualified person requirements, and documentation retention.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>LOLER 1998 – Lifting Operations and Lifting Equipment Regulations (UK)</h4>
                                <p>UK legal requirement mandating thorough examination and load testing of lifting equipment by competent persons. Requires testing before first use, after substantial modification, and at specified intervals. Defines duty holder obligations, competent person qualifications, and certification requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ship"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>DNV 2.7-1 / DNV 2.22 – Offshore Lifting Equipment (Classification Rules)</h4>
                                <p>Det Norske Veritas standards for offshore and marine lifting equipment. DNV 2.7-1 requires 150% SWL proof load testing for offshore containers and lifting equipment with surveyor witnessing. Defines material testing, NDT requirements, load testing procedures, and certification by classification societies.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-globe-europe"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>EN 13155 / EN 1677 / EN 818 – European Standards for Lifting Equipment</h4>
                                <p>European harmonized standards covering load testing for lifting attachments (EN 13155), rigging components (EN 1677), and lifting chain (EN 818). Define design factors, proof load testing requirements (typically 2x WLL for components), testing procedures, and CE marking requirements for European market compliance.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-atom"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME NQA-1 – Quality Assurance Requirements for Nuclear Facility Applications</h4>
                                <p>Enhanced quality and testing requirements for lifting equipment used in nuclear facilities. Requires rigorous load testing protocols, extensive documentation, personnel qualifications, and independent verification. Addresses critical lift programs, single-failure-proof requirements, and special process controls.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Reference Standards</h4>
                        <p><strong>Testing Equipment Calibration:</strong> ISO/IEC 17025 (testing laboratory competence), ASTM E4 (force verification), NIST Handbook 44 (weighing devices). <strong>Quality Management:</strong> ISO 9001 (QMS), ISO 17020 (inspection body accreditation). <strong>Specialty Applications:</strong> ANSI/ASSE A10.8 (scaffolding), ANSI Z359 (fall protection), API standards (petroleum industry). <strong>International:</strong> AS/NZS standards (Australia/New Zealand), CSA standards (Canada), local jurisdictional requirements.</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/load-cell-calibration.jpg" alt="Load cell calibration and testing">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Load Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>NIST-traceable calibration</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Standards-based procedures</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Witnessed testing protocols</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>±0.5% load cell accuracy</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Comprehensive documentation</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Independent certification</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Certifications & Accreditations</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                            <img src="/www/assets/images/certifications/nist.png" alt="NIST Traceable">
                            <img src="/www/assets/images/certifications/iso-17025.png" alt="ISO 17025">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTING PROCEDURE ===================== -->
    <section class="procedure-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TESTING WORKFLOW</span>
                <h2>Load Testing Procedure</h2>
                <p>Systematic approach ensuring safe testing execution and defensible certification</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Test Planning & Procedure Development</h3>
                        <p>Review equipment specifications, manufacturer data, applicable standards, and client requirements. Develop written test procedure including test loads, hold duration, acceptance criteria, safety controls, and witness requirements. Coordinate test schedule, access, test weights/equipment, and personnel assignments.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Test Procedure + Safety Plan + Equipment Mobilization
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Equipment Calibration & Pre-Test Verification</h3>
                        <p>Verify current calibration of all test equipment (load cells, measurement instruments, test weights). Conduct equipment functional checks and zeroing procedures. Review calibration certificates for traceability. Document test equipment setup and configuration with serial numbers and calibration dates.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Calibration Certificate Package + Equipment Setup Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Test Setup & Safety Controls</h3>
                        <p>Install test rigging, load application equipment, and measurement instrumentation. Establish test area barricades and exclusion zones. Implement lockout/tagout and safety controls. Conduct pre-test inspection of equipment under test. Verify witness attendance and communication systems. Perform safety briefing with all personnel.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Test Setup Documentation + Safety Checklist + Pre-Test Inspection
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Baseline Measurements & Initial Positioning</h3>
                        <p>Record pre-test dimensions, deflection baselines, and reference measurements. Document equipment position and configuration. Photograph test setup from multiple angles. Verify load cell readings at zero load. Confirm all measurement systems operational and recording. Review test sequence with all personnel.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Baseline Measurement Data + Pre-Test Photography
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Load Application & Performance Monitoring</h3>
                        <p>Apply test load in controlled increments per procedure (typically 25%, 50%, 75%, 100%, proof load). Monitor load cell readings, deflections, and equipment behavior continuously. Hold proof load for specified duration (typically 10 minutes). Verify safety system operation (if applicable). Conduct operational testing under load (functional testing). Document all readings and observations.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Data + Real-Time Measurements + Operational Test Results
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Load Release & Post-Test Assessment</h3>
                        <p>Remove test load in controlled manner per procedure. Conduct post-test inspection for permanent deformation, cracking, or damage. Measure final dimensions and compare to baseline (verify no permanent set). Document equipment condition with photographs. Verify return to original configuration (acceptance criterion). Remove test equipment and restore normal condition.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Post-Test Inspection Report + Deformation Assessment + Photography
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">7</div>
                    <div class="timeline-content">
                        <h3>Data Analysis, Certification & Final Documentation</h3>
                        <p>Evaluate all test data against acceptance criteria (no permanent deformation, no cracking, load capacity verified). Assess equipment performance and compliance with standards. Issue formal load test certificate including test data, equipment calibration records, witness statements, photographic evidence, acceptance criteria evaluation, and professional certification. Provide comprehensive test report suitable for regulatory submission.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Certificate + Final Report + Complete Documentation Package
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
                        <img src="/www/assets/images/certifications/iso-17025.png" alt="ISO 17025">
                        <span>ISO/IEC 17025 Testing</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/nist.png" alt="NIST">
                        <span>NIST-Traceable Calibration</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                        <span>ASME B30 Knowledge</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/competent-person.png" alt="Competent Person">
                        <span>Qualified Competent Persons</span>
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
                <h2>Your Professional Load Testing Partner</h2>
                <p>Calibrated equipment, qualified personnel, and commitment to testing excellence</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Calibrated Test Equipment & Instrumentation</h3>
                    <p>Professional-grade load cells, test weights, and measurement equipment with NIST-traceable calibration certificates and ±0.5% accuracy. Multiple capacity ranges supporting equipment from 1 ton to 500+ tons with redundant measurement verification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Competent Persons & Technical Expertise</h3>
                    <p>Testing performed by qualified competent persons with knowledge of equipment types, applicable standards (ASME B30, OSHA, LOLER), testing procedures, and acceptance criteria. Continuing education maintains technical currency and regulatory awareness.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Standards Mastery & Regulatory Knowledge</h3>
                    <p>Expert knowledge of ASME B30 series, OSHA requirements, LOLER, DNV standards, EN codes, and industry-specific requirements. We ensure compliance with current regulations and provide documentation suitable for regulatory submission and audits.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Independent Third-Party Witnessing</h3>
                    <p>Independent witnessing services providing objective verification, unbiased certification, and liability protection. Witness statements and professional sign-off support insurance, regulatory, and contractual requirements for critical equipment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-certificate"></i>
                    </div>
                    <h3>Comprehensive Documentation & Certification</h3>
                    <p>Formal test certificates with complete test data, calibration records, photographic evidence, witness statements, and acceptance criteria evaluation. Documentation suitable for OSHA inspections, insurance underwriting, and client specifications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Multi-Industry Experience & Trust</h3>
                    <p>Proven experience across construction, manufacturing, offshore, utilities, and industrial sectors. Trusted by major contractors, crane companies, equipment manufacturers, and facility owners for professional, reliable load testing services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Load Testing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between proof load testing and operational load testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Proof load testing</strong> applies loads exceeding rated capacity (125%-150%) to verify structural integrity and adequate safety factors. <strong>Operational load testing</strong> applies 100% rated load with complete functional testing of all motions and systems to verify operational performance. Proof testing validates structure; operational testing validates function.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often must load testing be performed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Frequency depends on equipment type and applicable standard: <strong>Overhead cranes:</strong> annual (ASME B30.2). <strong>Mobile cranes:</strong> annual + after assembly on each jobsite (ASME B30.5). <strong>New equipment:</strong> before first use. <strong>After repairs:</strong> following major structural work or modifications. <strong>Special circumstances:</strong> after overload events or extended idle periods.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What calibration is required for load testing equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Load cells and test equipment must have <strong>current calibration certificates</strong> traceable to national standards (NIST in USA). Typical calibration interval is <strong>12 months</strong>. Calibration must cover the load range being tested with accuracy typically <strong>±0.5% to ±1%</strong> of rated capacity. Calibration certificates must be available during testing and included in test documentation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the acceptance criteria for proof load testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary acceptance criteria: <strong>No permanent deformation</strong> (equipment returns to original dimensions after load removal), <strong>no cracking</strong> (visual inspection and NDT where appropriate), <strong>no component failure</strong>, <strong>proper operation</strong> of all functions during and after test. Dimensional measurements before and after test verify no permanent set.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can load testing damage equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>When performed properly per standards, load testing should <strong>not damage</strong> equipment—proof loads are within design safety factors. However, testing may reveal <strong>hidden defects</strong> (cracks, weak welds, inadequate design) that would have failed in service. Testing is designed to verify equipment can safely handle rated loads; failure during testing prevents field failures and incidents.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Who is qualified to perform and witness load testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Load testing must be performed by <strong>qualified persons</strong> or <strong>competent persons</strong> as defined by applicable standards—individuals with knowledge of equipment, testing procedures, standards, and ability to evaluate results. Witnessing may require <strong>independent third parties</strong>, <strong>classification society surveyors</strong> (offshore), or <strong>insurance inspectors</strong> depending on equipment type and requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided after load testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Complete documentation package includes: <strong>Load test certificate</strong> (formal certification of test results), <strong>test data</strong> (load readings, deflections, time records), <strong>calibration certificates</strong> for test equipment, <strong>photographic evidence</strong>, <strong>pre/post-test inspection reports</strong>, <strong>witness statements</strong> (if applicable), <strong>acceptance criteria evaluation</strong>, and <strong>qualified person certification</strong>.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does load testing take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Duration varies by equipment type and scope: <strong>Simple proof load test:</strong> 2-4 hours (setup, testing, documentation). <strong>Overhead crane annual test:</strong> 4-8 hours (full operational testing). <strong>Mobile crane capacity verification:</strong> full day or more (multiple configurations). <strong>Complex equipment:</strong> multiple days depending on test matrix. Planning, setup, and safety controls require significant time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Verify Equipment Capacity—Request Professional Load Testing</h2>
                <p>Schedule load testing services with calibrated equipment, qualified personnel, and comprehensive certification documentation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Load Testing Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> NIST-Traceable Calibration</span>
                    <span><i class="fas fa-check"></i> Standards-Based Procedures</span>
                    <span><i class="fas fa-check"></i> Independent Certification</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Inspection & Testing Services</h2>
                <p>Complete lifting equipment verification and certification solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/lifting-inspection-services/overhead-crane-gantry-crane-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Overhead Crane Inspection</h3>
                    <p>Complete crane inspection, annual testing, and certification services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/spreader-beam-lifting-frame-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-arrows-alt-h"></i>
                    </div>
                    <h3>Spreader Beam Inspection</h3>
                    <p>Below-the-hook device inspection and proof load testing</p>
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

                <a href="/www/pages/lifting-inspection-services/lifting-gear-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Lifting Gear & Rigging</h3>
                    <p>Comprehensive inspection and testing of slings and rigging hardware</p>
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