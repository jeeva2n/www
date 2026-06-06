<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Spreader Beam & Lifting Frame Inspection Services | Load Testing & Certification | Alpha Sonix NDT Solutions";
$meta_description = "Professional spreader beam and lifting frame inspection, load testing, and certification services. Structural integrity assessment, NDT examination, proof load testing, and compliance verification per ASME B30.20, BS 7121, EN 13155, and LOLER requirements. Expert third-party inspection for safe lifting operations.";
$meta_keywords = "spreader beam inspection, lifting frame testing, load testing, proof load test, lifting equipment certification, ASME B30.20, EN 13155, LOLER inspection, below-the-hook lifting devices, lifting beam NDT, structural integrity assessment, load test certification";
$canonical_url = "https://alphasonix.com/pages/lifting-inspection-services/spreader-beam-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/spreader-beam-og.jpg">

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
            "serviceType": "Spreader Beam & Lifting Frame Inspection",
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
            "description": "Comprehensive spreader beam and lifting frame inspection services including structural integrity assessment, NDT examination, proof load testing, and certification per ASME B30.20, EN 13155, BS 7121 and LOLER requirements for safe below-the-hook lifting operations."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/spreader-beam-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/www/pages/lifting-inspection-services/">Lifting Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Spreader Beam & Lifting Frame Inspection</span>
                </div>
                <h1 class="page-title">Spreader Beam & Lifting Frame Inspection</h1>
                <p class="page-subtitle">Comprehensive third-party inspection, load testing, and certification services for below-the-hook lifting devices—ensuring structural integrity, regulatory compliance, and safe lifting operations across critical infrastructure and heavy industry</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> ASME B30.20 / EN 13155 Aligned</span>
                    <span class="badge"><i class="fas fa-weight-hanging"></i> Proof Load Testing</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> Certified Documentation</span>
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
                    <h3>Safety-Critical Equipment</h3>
                    <p>Spreader beams and lifting frames are engineered load-distribution devices used for safe lifting of heavy, oversized, or sensitive loads—requiring rigorous inspection and certification.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3>Multi-Method Examination</h3>
                    <p>Comprehensive inspection combining visual examination, dimensional verification, NDT (MT/PT/UT), weld inspection, and structural integrity assessment to detect cracks, deformation, and degradation.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Load Testing & Proof Testing</h3>
                    <p>Witnessed proof load testing and dynamic load testing to verify rated capacity, structural performance, and compliance with design specifications and applicable codes.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-certificate"></i>
                    </div>
                    <h3>Compliance & Certification</h3>
                    <p>Independent certification aligned to ASME B30.20, EN 13155, BS 7121, LOLER, and client-specific requirements with traceable documentation and test records.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS SECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">LIFTING EQUIPMENT INTEGRITY</span>
                    <h2>What is Spreader Beam & Lifting Frame Inspection?</h2>
                    <p class="lead">Spreader beams and lifting frames are below-the-hook lifting devices (BTH) designed to distribute loads across multiple lifting points, prevent load crushing, maintain stability, and enable safe handling of heavy, wide, or delicate components. These engineered devices are critical to rigging safety and must be inspected, tested, and certified by competent persons per applicable regulatory and industry standards.</p>

                    <p>Our inspection services cover the complete lifecycle: <strong>design verification</strong> (new fabrications), <strong>pre-service commissioning</strong> (proof load testing and initial certification), <strong>periodic in-service inspections</strong> (daily, monthly, annual per risk and usage), <strong>repair/modification assessment</strong>, and <strong>retirement/scrapping decisions</strong> based on documented condition and acceptance criteria.</p>

                    <p>Inspection methodology includes <strong>visual examination</strong> of structural members, welds, connections, and hardware; <strong>dimensional checks</strong> for deflection, twist, and alignment; <strong>NDT methods</strong> (magnetic particle, liquid penetrant, ultrasonic testing) for crack detection and weld quality; <strong>load testing</strong> to verify capacity and structural response; and <strong>documentation review</strong> to confirm design calculations, material certifications, previous inspection records, and modification history.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Regulatory Compliance Assurance</strong>
                                <p>Inspections aligned to ASME B30.20 (Below-the-Hook Lifting Devices), EN 13155 (Cranes—Safety—Non-fixed load lifting attachments), BS 7121, LOLER (UK), and site-specific safety management systems.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Independent Third-Party Verification</strong>
                                <p>Unbiased assessment by qualified inspectors with expertise in structural engineering, rigging, NDT, and load testing—supporting defensible certification and liability management.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Lifecycle Risk Management</strong>
                                <p>From fabrication witness to retirement decisions—our inspection programs help you maintain equipment integrity, optimize inspection intervals, and avoid unsafe conditions or catastrophic failures.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Traceable Documentation & Certification</strong>
                                <p>Detailed inspection reports, test certificates, calibration records, NDT records, photographic evidence, and compliance statements suitable for audits, insurance, and regulatory submissions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>Why Third-Party Inspection Matters:</strong>
                            <p>Spreader beam failures can result in catastrophic load drops, equipment damage, injuries, and fatalities. Independent inspection provides objective evidence of fitness-for-service, supports duty-holder compliance, and reduces organizational liability exposure.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection Quote</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/spreader-beam-inspection.jpg" alt="Spreader beam inspection and load testing">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional spreader beam inspection with NDT examination and dimensional verification</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">125%</span>
                            <span class="stat-label">Typical Proof Load (% WLL)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Critical Weld Examination</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Certified</span>
                            <span class="stat-label">Test Documentation</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-clipboard-list"></i> Inspection Scope Elements</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Design & documentation review</li>
                            <li><strong>2.</strong> Visual structural examination</li>
                            <li><strong>3.</strong> Dimensional & alignment checks</li>
                            <li><strong>4.</strong> NDT of welds and critical areas</li>
                            <li><strong>5.</strong> Hardware & attachment verification</li>
                            <li><strong>6.</strong> Load testing (proof/dynamic)</li>
                            <li><strong>7.</strong> Certification & reporting</li>
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
                <h2>Key Benefits of Spreader Beam & Lifting Frame Inspection</h2>
                <p>Protect personnel, assets, and operations through rigorous verification and compliance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety & Risk Reduction</h3>
                    <p>Professional inspection identifies structural defects, fatigue cracks, deformation, and degradation before they result in failures—protecting personnel, loads, and surrounding equipment from catastrophic incidents.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Regulatory & Legal Compliance</h3>
                    <p>Meet duty-holder obligations under LOLER, OSHA, ASME B30.20, EN 13155, and local lifting equipment regulations. Independent certification provides defensible evidence of compliance for audits and enforcement actions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Independent Expert Assessment</h3>
                    <p>Third-party inspectors bring objectivity, specialized knowledge, and freedom from operational pressures—supporting better decisions on repair-vs-replace, recertification intervals, and safe working loads.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Traceable Documentation</h3>
                    <p>Comprehensive records including inspection reports, NDT data, load test certificates, material certifications, and photographic evidence support audit trails, insurance requirements, and knowledge transfer across asset lifecycle.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Informed Maintenance & Repair Planning</h3>
                    <p>Detailed condition assessment findings help prioritize repairs, plan preventive maintenance, optimize inspection intervals, and make data-driven decisions on equipment retirement or upgrade.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Avoidance & Asset Protection</h3>
                    <p>Early detection of issues prevents expensive emergency repairs, load drops, and damage to lifted equipment. Proper certification and maintenance extend equipment service life and preserve asset value.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION TYPES ===================== -->
    <section class="technology-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION CATEGORIES</span>
                <h2>Types of Spreader Beam & Lifting Frame Inspections</h2>
                <p>Structured inspection programs aligned to equipment lifecycle and regulatory requirements</p>
            </div>

            <div class="technology-content">
                <div class="wave-modes-grid">
                    <!-- Pre-Service Inspection -->
                    <div class="wave-mode-card">
                        <div class="mode-header electrical">
                            <i class="fas fa-certificate"></i>
                            <h3>Pre-Service / Initial Commissioning Inspection</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Verify new or newly fabricated spreader beams and lifting frames meet design specifications, workmanship standards, and regulatory requirements before first use.</p>
                            <p><strong>Scope:</strong> Design documentation review, material certification verification, dimensional checks, fabrication quality assessment, complete NDT examination of all welds, proof load testing (typically 125% of rated capacity), and initial certification.</p>

                            <div class="mode-advantages">
                                <h4>Key Activities:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Review design calculations and drawings</li>
                                    <li><i class="fas fa-check"></i> Verify material certifications and traceability</li>
                                    <li><i class="fas fa-check"></i> Inspect fabrication quality (welds, fit-up, finish)</li>
                                    <li><i class="fas fa-check"></i> Conduct 100% NDT of critical welds (MT/PT/UT as applicable)</li>
                                    <li><i class="fas fa-check"></i> Perform proof load test with witnessed documentation</li>
                                    <li><i class="fas fa-check"></i> Issue test certificate and equipment marking/labeling</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Applicable Standards:</strong> ASME B30.20, EN 13155, BS 7121, Client Specifications
                            </div>
                        </div>
                    </div>

                    <!-- Periodic In-Service Inspection -->
                    <div class="wave-mode-card">
                        <div class="mode-header mechanical">
                            <i class="fas fa-calendar-check"></i>
                            <h3>Periodic In-Service Inspection</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Ongoing assessment to detect degradation, damage, and wear during operational service—maintaining fitness-for-purpose and regulatory compliance.</p>
                            <p><strong>Frequency:</strong> Risk-based intervals (commonly annual thorough examination per LOLER; more frequent for high-duty-cycle or critical applications).</p>

                            <div class="mode-advantages">
                                <h4>Inspection Elements:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Visual examination for cracks, deformation, corrosion, wear</li>
                                    <li><i class="fas fa-check"></i> Dimensional verification (deflection, twist, alignment)</li>
                                    <li><i class="fas fa-check"></i> Targeted NDT of high-stress areas and suspect conditions</li>
                                    <li><i class="fas fa-check"></i> Inspection of lifting points, shackles, pins, and hardware</li>
                                    <li><i class="fas fa-check"></i> Marking and identification verification</li>
                                    <li><i class="fas fa-check"></i> Review of operating records and previous inspection reports</li>
                                    <li><i class="fas fa-check"></i> Re-certification or deficiency reporting as appropriate</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Common Interval:</strong> Annual (LOLER), or per client risk assessment and duty cycle
                            </div>
                        </div>
                    </div>

                    <!-- Post-Repair / Modification Inspection -->
                    <div class="wave-mode-card">
                        <div class="mode-header building">
                            <i class="fas fa-wrench"></i>
                            <h3>Post-Repair / Modification Inspection</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Verify structural integrity and fitness-for-service following repairs, welding, alterations, or upgrades to ensure no degradation of safety margins.</p>
                            <p><strong>Triggers:</strong> Structural repairs (weld repairs, member replacement), modifications (load point changes, capacity upgrades), impact damage repairs, or corrosion mitigation work.</p>

                            <div class="mode-advantages">
                                <h4>Assessment Activities:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Review repair/modification procedures and qualifications</li>
                                    <li><i class="fas fa-check"></i> Inspect repaired areas (visual + NDT of all repair welds)</li>
                                    <li><i class="fas fa-check"></i> Verify dimensional tolerances post-repair</li>
                                    <li><i class="fas fa-check"></i> Engineering assessment if design is affected</li>
                                    <li><i class="fas fa-check"></i> Proof load test if structural capacity may be impacted</li>
                                    <li><i class="fas fa-check"></i> Update certification and equipment documentation</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Requirement:</strong> Mandatory before return to service per ASME B30.20 and EN 13155
                            </div>
                        </div>
                    </div>

                    <!-- Fabrication Witness / Quality Surveillance -->
                    <div class="wave-mode-card">
                        <div class="mode-header process">
                            <i class="fas fa-industry"></i>
                            <h3>Fabrication Witness & Quality Surveillance</h3>
                        </div>
                        <div class="mode-body">
                            <p><strong>Purpose:</strong> Independent oversight during fabrication to ensure compliance with design specifications, welding procedures, material handling, and quality control requirements.</p>
                            <p><strong>Application:</strong> Custom-engineered spreader beams, high-capacity lifting frames, and critical lifting equipment where fabrication quality directly impacts safety and performance.</p>

                            <div class="mode-advantages">
                                <h4>Surveillance Scope:</h4>
                                <ul>
                                    <li><i class="fas fa-check"></i> Material receiving and traceability verification</li>
                                    <li><i class="fas fa-check"></i> Welding procedure and welder qualification review</li>
                                    <li><i class="fas fa-check"></i> Fit-up and assembly inspection at hold points</li>
                                    <li><i class="fas fa-check"></i> In-process NDT witnessing (MT/PT/UT/RT as specified)</li>
                                    <li><i class="fas fa-check"></i> Dimensional inspection during and after fabrication</li>
                                    <li><i class="fas fa-check"></i> Final acceptance inspection and load testing witness</li>
                                    <li><i class="fas fa-check"></i> Compliance documentation and certification support</li>
                                </ul>
                            </div>

                            <div class="mode-applications">
                                <strong>Value:</strong> Reduces rework, ensures code compliance, supports manufacturer certification
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mode-selection-guide">
                    <h3><i class="fas fa-compass"></i> Inspection Frequency & Selection Guide</h3>
                    <table class="selection-table">
                        <thead>
                            <tr>
                                <th>Inspection Type</th>
                                <th>Timing / Frequency</th>
                                <th>Typical Scope</th>
                                <th>Regulatory Basis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Pre-Service Commissioning</strong></td>
                                <td>Before first use (new equipment)</td>
                                <td>Full examination + proof load test + certification</td>
                                <td>ASME B30.20, EN 13155, LOLER</td>
                            </tr>
                            <tr>
                                <td><strong>Annual Thorough Examination</strong></td>
                                <td>At least every 12 months</td>
                                <td>Visual + dimensional + targeted NDT + re-cert</td>
                                <td>LOLER, ASME B30.20 (periodic)</td>
                            </tr>
                            <tr>
                                <td><strong>Post-Repair Inspection</strong></td>
                                <td>After any structural repair/modification</td>
                                <td>Repair area inspection + NDT + load test (if req'd)</td>
                                <td>ASME B30.20, EN 13155</td>
                            </tr>
                            <tr>
                                <td><strong>Pre-Use Checks</strong></td>
                                <td>Before each lift (operator responsibility)</td>
                                <td>Visual check for obvious damage/defects</td>
                                <td>Site safe work procedures</td>
                            </tr>
                            <tr>
                                <td><strong>Fabrication Witness</strong></td>
                                <td>During manufacture (custom equipment)</td>
                                <td>Quality surveillance + hold point inspections</td>
                                <td>Contract specifications / QA plans</td>
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
                <h2>Industries & Lifting Scenarios We Serve</h2>
                <p>From offshore modules to power plant components—supporting safe heavy lifting worldwide</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="oilgas">Oil & Gas / Offshore</button>
                    <button class="tab-btn" data-tab="power">Power Generation</button>
                    <button class="tab-btn" data-tab="heavy">Heavy Industry & Manufacturing</button>
                    <button class="tab-btn" data-tab="construction">Construction & Infrastructure</button>
                </div>

                <div class="tabs-content">
                    <!-- Oil & Gas Tab -->
                    <div class="tab-panel active" id="oilgas">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/spreader-offshore.jpg" alt="Offshore module lifting with spreader beam">
                            </div>
                            <div class="tab-text">
                                <h3>Oil & Gas / Offshore & Marine Applications</h3>
                                <p>Spreader beams and lifting frames are critical to offshore module installation, subsea equipment handling, and platform construction. Our inspection services support safe offshore lifting operations with certification recognized by classification societies and regulatory authorities.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Offshore module and topsides installation spreader beams</li>
                                    <li><i class="fas fa-check"></i> Subsea equipment lifting frames (manifolds, trees, PLETs)</li>
                                    <li><i class="fas fa-check"></i> Heavy lift vessels and crane barge rigging equipment</li>
                                    <li><i class="fas fa-check"></i> Refinery and petrochemical maintenance lifting beams</li>
                                    <li><i class="fas fa-check"></i> Pipeline equipment handling (pipe-laying, spools)</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel and exchanger removal/installation frames</li>
                                    <li><i class="fas fa-check"></i> Marine certification support (DNV, ABS, Lloyd's)</li>
                                    <li><i class="fas fa-check"></i> Fabrication witness for custom engineered beams</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.20</span>
                                    <span class="standard-tag">EN 13155</span>
                                    <span class="standard-tag">DNV 2.22</span>
                                    <span class="standard-tag">API RP 2D</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Power Generation Tab -->
                    <div class="tab-panel" id="power">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/spreader-power.jpg" alt="Power plant component lifting">
                            </div>
                            <div class="tab-text">
                                <h3>Power Generation & Utilities</h3>
                                <p>Power plant construction, maintenance, and outage activities require specialized lifting equipment for turbines, generators, transformers, and boiler components. We provide inspection and certification services that support safe handling of high-value, precision-critical equipment.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Turbine rotor and generator stator lifting beams</li>
                                    <li><i class="fas fa-check"></i> Transformer and reactor spreader beams</li>
                                    <li><i class="fas fa-check"></i> Boiler drum and pressure part lifting frames</li>
                                    <li><i class="fas fa-check"></i> Nuclear component handling equipment (QA programs)</li>
                                    <li><i class="fas fa-check"></i> Wind turbine nacelle and blade lifting tools</li>
                                    <li><i class="fas fa-check"></i> Substation equipment installation beams</li>
                                    <li><i class="fas fa-check"></i> Outage planning and pre-outage equipment verification</li>
                                    <li><i class="fas fa-check"></i> Post-maintenance re-certification programs</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.20</span>
                                    <span class="standard-tag">ASME NQA-1 (nuclear)</span>
                                    <span class="standard-tag">EN 13155</span>
                                    <span class="standard-tag">IEEE / NFPA (electrical)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Heavy Industry Tab -->
                    <div class="tab-panel" id="heavy">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/spreader-manufacturing.jpg" alt="Heavy manufacturing lifting operations">
                            </div>
                            <div class="tab-text">
                                <h3>Heavy Industry & Manufacturing</h3>
                                <p>Steel mills, shipyards, aerospace, automotive, and heavy equipment manufacturing rely on spreader beams for safe handling of large assemblies, castings, forgings, and finished products. Our services support production efficiency and worker safety through reliable equipment certification.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel mill slab and coil handling beams</li>
                                    <li><i class="fas fa-check"></i> Shipyard block erection and vessel section lifting frames</li>
                                    <li><i class="fas fa-check"></i> Aerospace component assembly lifting fixtures</li>
                                    <li><i class="fas fa-check"></i> Automotive press and die handling equipment</li>
                                    <li><i class="fas fa-check"></i> Mining equipment (haul truck bodies, dragline buckets)</li>
                                    <li><i class="fas fa-check"></i> Paper mill roll handling spreader beams</li>
                                    <li><i class="fas fa-check"></i> Manufacturing line equipment positioning devices</li>
                                    <li><i class="fas fa-check"></i> Custom engineered lifting solutions certification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.20</span>
                                    <span class="standard-tag">EN 13155</span>
                                    <span class="standard-tag">BS 7121</span>
                                    <span class="standard-tag">OSHA 1926</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Construction Tab -->
                    <div class="tab-panel" id="construction">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/spreader-construction.jpg" alt="Construction and infrastructure lifting">
                            </div>
                            <div class="tab-text">
                                <h3>Construction & Infrastructure Projects</h3>
                                <p>Bridge construction, tunnel boring, building erection, and infrastructure projects utilize spreader beams and lifting frames for precast concrete elements, structural steel, TBM segments, and heavy civil works. We support project safety through timely inspection and certification.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Bridge segment and girder lifting beams</li>
                                    <li><i class="fas fa-check"></i> Tunnel boring machine (TBM) segment handling frames</li>
                                    <li><i class="fas fa-check"></i> Precast concrete panel and beam spreader systems</li>
                                    <li><i class="fas fa-check"></i> Tower crane attachment and flying frame inspection</li>
                                    <li><i class="fas fa-check"></i> Foundation pile and caisson handling equipment</li>
                                    <li><i class="fas fa-check"></i> Structural steel erection lifting beams</li>
                                    <li><i class="fas fa-check"></i> Modular building and MEP component lifting tools</li>
                                    <li><i class="fas fa-check"></i> Temporary works engineering support and certification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B30.20</span>
                                    <span class="standard-tag">EN 13155</span>
                                    <span class="standard-tag">BS 7121</span>
                                    <span class="standard-tag">OSHA / HSE</span>
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
                <p>Comprehensive multi-discipline assessment covering structural, NDT, and load testing requirements</p>
            </div>

            <div class="capabilities-grid">
                <!-- Visual & Dimensional Inspection -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-eye"></i>
                        <h3>Visual & Dimensional Inspection</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Structural Members:</span> Beam bodies, lifting lugs, end frames, cross-members</li>
                        <li><span class="cap-label">Welds:</span> Visual examination per AWS D1.1 / ISO 17637</li>
                        <li><span class="cap-label">Deformation:</span> Straightness, twist, deflection, permanent set</li>
                        <li><span class="cap-label">Corrosion & Wear:</span> Pitting, general loss, fretting, abrasion</li>
                        <li><span class="cap-label">Hardware:</span> Shackles, pins, bolts, lifting eyes, pad eyes</li>
                        <li><span class="cap-label">Marking & ID:</span> Rated capacity, serial number, inspection tags</li>
                        <li><span class="cap-label">Dimensions:</span> Critical dimensions verification vs drawings</li>
                        <li><span class="cap-label">Documentation:</span> Photographic evidence and condition mapping</li>
                    </ul>
                </div>

                <!-- NDT Methods -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-atom"></i>
                        <h3>Non-Destructive Testing (NDT)</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Magnetic Particle (MT):</span> Ferrous weld and base metal crack detection</li>
                        <li><span class="cap-label">Liquid Penetrant (PT):</span> Non-ferrous surface crack detection</li>
                        <li><span class="cap-label">Ultrasonic Testing (UT):</span> Weld quality, thickness, subsurface defects</li>
                        <li><span class="cap-label">Radiographic (RT):</span> Critical weld examination (project-specific)</li>
                        <li><span class="cap-label">Visual (VT):</span> Detailed weld profile and workmanship assessment</li>
                        <li><span class="cap-label">Coverage:</span> 100% of critical welds per code requirements</li>
                        <li><span class="cap-label">Personnel:</span> ASNT Level II/III certified NDT technicians</li>
                        <li><span class="cap-label">Procedures:</span> Written procedures per ASME Section V</li>
                    </ul>
                </div>

                <!-- Load Testing -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-weight-hanging"></i>
                        <h3>Load Testing & Proof Testing</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Proof Load Test:</span> Typically 125% of rated capacity (per ASME B30.20)</li>
                        <li><span class="cap-label">Dynamic Testing:</span> Load application and release cycles as specified</li>
                        <li><span class="cap-label">Load Monitoring:</span> Calibrated load cells and instrumentation</li>
                        <li><span class="cap-label">Deflection Measurement:</span> Pre/post-test dimensional verification</li>
                        <li><span class="cap-label">Witness & Documentation:</span> Test procedure, equipment, readings, certification</li>
                        <li><span class="cap-label">Pass Criteria:</span> No permanent deformation, cracking, or failure</li>
                        <li><span class="cap-label">Test Loads:</span> Certified weights, water bags, or calibrated test rigs</li>
                        <li><span class="cap-label">Certification:</span> Test certificate with traceable data and signatures</li>
                    </ul>
                </div>

                <!-- Engineering Review -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-calculator"></i>
                        <h3>Design & Engineering Review</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Design Verification:</span> Review calculations, drawings, design basis</li>
                        <li><span class="cap-label">Load Analysis:</span> Load distribution, stress analysis, factor of safety</li>
                        <li><span class="cap-label">Material Compliance:</span> Material certifications, mechanical properties</li>
                        <li><span class="cap-label">Welding Engineering:</span> WPS/PQR review, joint design, acceptance criteria</li>
                        <li><span class="cap-label">Standards Alignment:</span> ASME, EN, BS, DNV, API compliance check</li>
                        <li><span class="cap-label">Modification Assessment:</span> Engineering evaluation of repairs/changes</li>
                        <li><span class="cap-label">Finite Element Analysis:</span> Available for complex or high-consequence equipment</li>
                        <li><span class="cap-label">Competent Person Review:</span> Independent engineering sign-off</li>
                    </ul>
                </div>

                <!-- Documentation & Certification -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-file-certificate"></i>
                        <h3>Documentation & Certification</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Inspection Reports:</span> Comprehensive findings, photos, recommendations</li>
                        <li><span class="cap-label">Test Certificates:</span> Proof load test, NDT, material certs (as applicable)</li>
                        <li><span class="cap-label">Compliance Statements:</span> ASME B30.20, EN 13155, LOLER certification</li>
                        <li><span class="cap-label">Equipment Register:</span> Asset ID, inspection history, next due date</li>
                        <li><span class="cap-label">Defect Reports:</span> Non-conformance documentation and corrective actions</li>
                        <li><span class="cap-label">Traceability:</span> Digital records, QR codes, asset management integration</li>
                        <li><span class="cap-label">Regulatory Submissions:</span> Format suitable for LOLER, HSE, OSHA audits</li>
                        <li><span class="cap-label">Data Retention:</span> Long-term archiving per client requirements</li>
                    </ul>
                </div>

                <!-- Capacity Range -->
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-arrows-alt-h"></i>
                        <h3>Equipment Capacity & Size Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Capacity Range:</span> From light-duty (< 1 ton) to heavy-lift (1000+ tons)</li>
                        <li><span class="cap-label">Beam Length:</span> Up to 30+ meters (project dependent)</li>
                        <li><span class="cap-label">Configuration:</span> Fixed, adjustable, modular, multi-point lift</li>
                        <li><span class="cap-label">Lifting Points:</span> 2-point, 4-point, 6-point, 8-point and custom</li>
                        <li><span class="cap-label">Load Testing Facility:</span> On-site or workshop-based (as required)</li>
                        <li><span class="cap-label">Field Services:</span> Offshore platforms, construction sites, manufacturing plants</li>
                        <li><span class="cap-label">Mobilization:</span> Domestic and international project support</li>
                        <li><span class="cap-label">Emergency Response:</span> Expedited inspection for urgent operational needs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & STANDARDS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">STANDARDS & METHODOLOGIES</span>
                    <h2>Applicable Codes, Standards & Best Practices</h2>
                    <p class="lead">Our inspection programs are structured around internationally recognized standards, regulatory requirements, and industry best practices. We align our procedures, acceptance criteria, and reporting to the applicable codes for your jurisdiction, industry sector, and equipment classification.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>ASME B30.20 – Below-the-Hook Lifting Devices</h4>
                                <p>Primary North American standard covering design, inspection, testing, maintenance, and operation of lifting beams, spreader beams, and other below-the-hook devices. Defines proof testing requirements, inspection categories, and competent person qualifications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-globe-europe"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>EN 13155 – Cranes—Safety—Non-fixed Load Lifting Attachments</h4>
                                <p>European standard specifying safety requirements, design principles, testing, marking, and documentation for lifting attachments including spreader beams and lifting frames. Harmonized with EU Machinery Directive.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>LOLER 1998 – Lifting Operations and Lifting Equipment Regulations (UK)</h4>
                                <p>UK legal requirement mandating thorough examination of lifting equipment by competent persons at specified intervals. Defines duty holder responsibilities, inspection frequency, defect reporting, and certification requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ship"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>DNV 2.22 / Classification Society Rules (Offshore/Marine)</h4>
                                <p>Offshore and marine certification requirements for lifting appliances used in subsea operations, offshore construction, and vessel-based heavy lifting. Additional standards include ABS, Lloyd's Register, and Bureau Veritas rules as applicable.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>BS 7121 – Code of Practice for Safe Use of Cranes</h4>
                                <p>British Standard providing comprehensive guidance on planning, management, and safe use of cranes and lifting accessories. Includes lifting equipment selection, inspection, and risk assessment frameworks.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>OSHA 1926 Subpart CC – Cranes and Derricks (USA)</h4>
                                <p>US federal regulation covering construction lifting operations including requirements for rigging equipment, inspection, operator qualification, and lifting procedure documentation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Additional Reference Standards</h4>
                        <p><strong>NDT Standards:</strong> ASME Section V (NDT methods), AWS D1.1 (structural welding), ISO 17637/23277 (weld visual/MT inspection). <strong>Materials & Testing:</strong> ASTM A36/A572 (structural steel), ASTM E709 (MT), ASTM E1417 (PT). <strong>Quality Management:</strong> ISO 9001 (QMS), ISO 17020 (inspection body accreditation). <strong>Industry Specific:</strong> API RP 2D (offshore), IEEE/NFPA (power), AISC (steel construction).</p>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/load-test-operation.jpg" alt="Spreader beam proof load testing">
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
                            <span>Code-compliant procedures</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Competent person inspections</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Witnessed proof load testing</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Full NDT examination</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Traceable certification</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Regulatory compliance support</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h4>Our Accreditations & Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                            <img src="/www/assets/images/certifications/asnt.png" alt="ASNT NDT">
                            <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                            <img src="/www/assets/images/certifications/iso-17020.png" alt="ISO 17020">
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
                <h2>Spreader Beam Inspection Procedure</h2>
                <p>Systematic approach ensuring thorough assessment and defensible certification</p>
            </div>

            <div class="procedure-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h3>Pre-Inspection Planning & Document Review</h3>
                        <p>Review equipment design data, previous inspection reports, operating history, and applicable standards. Confirm scope (initial, periodic, post-repair), acceptance criteria, NDT requirements, and load testing specifications. Coordinate access, rigging, and test load arrangements.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Plan + Procedure + Safety/Lifting Plan
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h3>Visual & Dimensional Examination</h3>
                        <p>Conduct detailed visual inspection of structural members, welds, connections, lifting points, and hardware. Measure critical dimensions, check for deformation (deflection, twist, bending), identify corrosion, cracks, wear, and damage. Document findings with photographs and condition mapping.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Visual Inspection Report + Photo Documentation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h3>Non-Destructive Testing (NDT)</h3>
                        <p>Perform NDT examination per written procedures—typically MT or PT for surface crack detection, UT for weld quality and thickness verification. Focus on critical welds, high-stress areas, previous repair zones, and suspect conditions identified during visual examination. Document and evaluate all indications.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> NDT Reports (MT/PT/UT) + Indication Evaluation
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h3>Engineering Assessment & Acceptability Review</h3>
                        <p>Evaluate all findings against acceptance criteria from applicable codes, manufacturer specifications, and client requirements. For defects or non-conformances, determine severity, assess structural significance, and recommend repair, monitoring, or rejection. Review material certifications and design compliance.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Engineering Assessment + Disposition Recommendations
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h3>Proof Load Testing (When Required)</h3>
                        <p>Conduct proof load test per ASME B30.20 or EN 13155 (typically 125% rated capacity). Apply load using calibrated test weights or load cells, hold for specified duration, monitor for permanent deformation or failure indications. Measure deflection before/after test. Verify equipment returns to acceptable tolerances post-test.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Load Test Certificate + Test Records + Deflection Data
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-number">6</div>
                    <div class="timeline-content">
                        <h3>Certification, Marking & Final Reporting</h3>
                        <p>Issue formal inspection certificate confirming compliance (or detailing deficiencies). Update equipment identification marking/tags with inspection date, next due date, and certification number. Provide comprehensive final report including scope, procedures, findings, test results, photos, recommendations, and competent person sign-off.</p>
                        <div class="timeline-deliverable">
                            <strong>Deliverable:</strong> Inspection Certificate + Final Report + Equipment Tagging
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
                        <img src="/www/assets/images/certifications/asme.png" alt="ASME">
                        <span>ASME B30 Knowledge</span>
                    </div>
                    <div class="cert-item">
                        <img src="/www/assets/images/certifications/loler.png" alt="LOLER">
                        <span>LOLER Competent Person</span>
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
                <h2>Your Trusted Lifting Equipment Inspection Partner</h2>
                <p>Independent expertise, rigorous methodology, and commitment to safety excellence</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Qualified Competent Persons</h3>
                    <p>Our inspectors are trained and qualified as competent persons per LOLER/ASME B30.20 requirements, with expertise in structural engineering, rigging, NDT, and lifting equipment standards. Regular continuing education maintains technical currency.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Independent Third-Party Verification</h3>
                    <p>As an independent inspection body, we provide objective, unbiased assessment free from commercial pressures or operational conflicts of interest—supporting defensible certification and regulatory compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Multi-Discipline Capability</h3>
                    <p>Complete inspection services under one roof: visual/dimensional inspection, ASNT-certified NDT, proof load testing, engineering assessment, and documentation—eliminating coordination with multiple vendors.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Global Standards Knowledge</h3>
                    <p>Experience with ASME, EN, BS, DNV, API, OSHA, LOLER, and client-specific requirements. We align our procedures to the applicable jurisdiction and provide compliance documentation suitable for international projects.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Field & Workshop Services</h3>
                    <p>Flexible service delivery—onsite inspection at your facility, offshore platform, or construction site; or workshop-based testing and certification at our facility. Expedited service available for urgent project needs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Proven Industry Experience</h3>
                    <p>Trusted by oil & gas operators, power utilities, heavy industry, construction contractors, and marine/offshore sectors across critical infrastructure projects. References and case studies available upon request.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Spreader Beam Inspection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between a spreader beam and a lifting beam?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>A <strong>spreader beam</strong> is loaded in compression and distributes the load across multiple lifting points (wider load base). A <strong>lifting beam</strong> is loaded in bending (like a beam). Both are below-the-hook lifting devices requiring design verification, inspection, and certification per ASME B30.20 or EN 13155.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often must spreader beams be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>LOLER requires thorough examination at least every 12 months (or 6 months for lifting persons). ASME B30.20 requires periodic inspections at intervals determined by activity, environment, and competent person judgment. High-consequence or heavy-duty equipment may require more frequent inspection. Pre-use visual checks are required before each lift.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is a proof load test and when is it required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>A proof load test verifies structural integrity by applying a load exceeding rated capacity (typically 125% per ASME B30.20 or EN 13155) and checking for permanent deformation or failure. Required for new equipment before first use, after major repairs/modifications, or when structural integrity is in question. Test must be witnessed and documented.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can a spreader beam be used if it has minor surface rust or paint damage?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Surface rust and cosmetic paint damage are generally acceptable if structural integrity is not affected. However, pitting corrosion, section loss, or corrosion obscuring critical areas (welds, cracks) may be unacceptable. A competent person must assess the condition against acceptance criteria and determine fitness-for-service.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What NDT methods are used for spreader beam inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Common methods include <strong>Magnetic Particle Testing (MT)</strong> for ferrous materials, <strong>Liquid Penetrant Testing (PT)</strong> for non-ferrous materials, and <strong>Ultrasonic Testing (UT)</strong> for weld quality and thickness verification. Visual Testing (VT) is always performed. Radiographic Testing (RT) may be specified for critical or high-consequence welds.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do spreader beams require design calculations and engineering certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes. ASME B30.20 and EN 13155 require that below-the-hook lifting devices be designed by qualified persons using recognized engineering methods. Design calculations, material specifications, and safety factors must be documented. For custom or high-capacity equipment, independent engineering review is recommended.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can spreader beams be repaired if cracks or defects are found?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Repairs are possible if performed by qualified welders following approved procedures and subject to engineering assessment. After repair, NDT examination (100% of repair welds) and potentially proof load testing are required before return to service. Documentation must be updated and equipment re-certified.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is required for spreader beam certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required documentation typically includes: design calculations and drawings, material certifications, fabrication quality records, NDT reports, proof load test certificate, inspection reports, competent person certification statement, and equipment identification/marking records. Records must be retained per applicable regulations (often equipment lifetime).</p>
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
                <p>Schedule spreader beam and lifting frame inspection, load testing, and certification from independent, qualified experts</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Inspection Quote</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Code-Compliant Inspection</span>
                    <span><i class="fas fa-check"></i> Witnessed Load Testing</span>
                    <span><i class="fas fa-check"></i> Traceable Certification</span>
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
                <a href="/www/pages/lifting-inspection-services/wire-rope-sling-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3>Wire Rope & Sling Inspection</h3>
                    <p>Visual and NDT examination of wire ropes, synthetic slings, and chain slings per ASME B30.9</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/lifting-inspection-services/crane-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <h3>Crane & Hoist Inspection</h3>
                    <p>Comprehensive crane inspection, load testing, and certification per ASME B30.2/B30.5</p>
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
                    <p>Weld quality assessment and thickness verification for structural members</p>
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