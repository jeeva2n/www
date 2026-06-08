<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Asset Integrity & Risk Based Inspection (RBI) Services | API 580/581 | Alpha Sonix NDT Solutions";
$meta_description = "Professional asset integrity management and risk-based inspection (RBI) services. API 580/581 compliant RBI studies, inspection planning optimization, and comprehensive integrity management for oil & gas and process industries.";
$meta_keywords = "asset integrity management, risk based inspection, RBI, API 580, API 581, inspection planning, integrity management, damage mechanism assessment, remaining life assessment, fitness for service";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/asset-integrity-rbi.php";
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
    <meta property="og:image" content="/www/assets/images/services/asset-integrity-og.jpg">
    
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
        "serviceType": "Asset Integrity & Risk Based Inspection Services",
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
        "description": "Professional asset integrity management and risk-based inspection services ensuring safe, reliable, and cost-effective operation of process industry assets."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/integrity/asset-integrity1.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Asset Integrity & RBI</span>
                </div>
                <h1 class="page-title">Asset Integrity Inspection & Risk Based Inspection (RBI)</h1>
                <p class="page-subtitle">Comprehensive asset integrity management and risk-based inspection services optimizing safety, reliability, and inspection costs</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-shield-alt"></i> API 580/581 Compliant</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Data-Driven Decisions</span>
                    <span class="badge"><i class="fas fa-cogs"></i> Integrity Management</span>
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
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Risk Assessment</h3>
                    <p>Comprehensive risk-based inspection methodology using API 580/581 standards to prioritize inspection activities based on consequence and probability of failure.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Inspection Optimization</h3>
                    <p>Data-driven inspection planning to optimize frequency, methods, and scope while maintaining safety and reducing costs.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Integrity Management</h3>
                    <p>Complete asset integrity management programs ensuring safe and reliable operation throughout equipment lifecycle.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Third Party Verification</h3>
                    <p>Independent third-party inspection and verification services providing unbiased assessment and compliance assurance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS ASSET INTEGRITY & RBI ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">INTEGRITY MANAGEMENT SERVICES</span>
                    <h2>What is Asset Integrity & Risk Based Inspection?</h2>
                    <p class="lead">Asset Integrity Management and Risk-Based Inspection (RBI) is a systematic approach to ensuring the safe, reliable, and cost-effective operation of process industry equipment through optimized inspection planning based on risk assessment.</p>
                    
                    <p>RBI methodology, as defined by API 580 and API 581, uses quantitative or qualitative risk analysis to prioritize inspection activities. By evaluating both the probability of failure (based on damage mechanisms and equipment condition) and the consequence of failure (based on safety, environmental, and economic impacts), RBI enables optimized resource allocation and inspection planning.</p>

                    <p>Asset integrity management encompasses all activities required to ensure equipment continues to perform its intended function safely and reliably. This includes inspection planning, damage mechanism assessment, fitness-for-service evaluation, and continuous monitoring of equipment condition throughout its lifecycle.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Risk Prioritization</strong>
                                <p>Focus inspection resources on highest-risk equipment while maintaining safety and optimizing inspection budgets.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Damage Mechanism Assessment</strong>
                                <p>Comprehensive evaluation of active and potential damage mechanisms affecting equipment integrity and remaining life.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Inspection Strategy Optimization</strong>
                                <p>Data-driven determination of optimal inspection frequency, methods, and extent based on risk and equipment criticality.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Continuous Improvement</strong>
                                <p>Living program that evolves with operating experience, inspection findings, and changing process conditions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Strategic Asset Management:</strong>
                            <p>Our integrity engineers combine API-certified RBI expertise with practical inspection experience to deliver programs that balance safety, reliability, and cost-effectiveness for your critical assets.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request RBI Study</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/integrity/rbi-methodology.jpg" alt="RBI Methodology">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Risk-based inspection methodology optimizing safety and inspection efficiency</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">30-50%</span>
                            <span class="stat-label">Cost Reduction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">RBI Studies</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">API 580</span>
                            <span class="stat-label">Certified</span>
                        </div>
                    </div>
                    
                    <div class="rbi-benefits">
                        <h4><i class="fas fa-star"></i> RBI Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Optimized inspection costs</li>
                            <li><i class="fas fa-check"></i> Enhanced safety assurance</li>
                            <li><i class="fas fa-check"></i> Risk-based decision making</li>
                            <li><i class="fas fa-check"></i> Regulatory compliance</li>
                            <li><i class="fas fa-check"></i> Improved reliability</li>
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
                <span class="section-label">WHY ASSET INTEGRITY & RBI</span>
                <h2>Key Advantages of Risk-Based Inspection</h2>
                <p>Strategic benefits of implementing comprehensive asset integrity and RBI programs</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Optimization</h3>
                    <p>Reduce inspection costs by 30-50% while maintaining or improving safety through risk-based prioritization and optimized inspection planning.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Enhanced Safety</h3>
                    <p>Improve safety by focusing resources on highest-risk equipment and ensuring critical damage mechanisms are properly monitored and managed.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Data-Driven Decisions</h3>
                    <p>Make informed decisions based on quantitative risk assessment rather than prescriptive time-based inspection schedules alone.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Reliability Improvement</h3>
                    <p>Increase equipment reliability and reduce unplanned downtime through proactive identification and management of integrity threats.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Demonstrate compliance with API, OSHA PSM, and other regulatory requirements through documented risk-based inspection programs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Continuous Improvement</h3>
                    <p>Establish living programs that incorporate operating experience, inspection results, and lessons learned to continuously improve integrity management.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">RBI APPLICATIONS & SCOPE</span>
                <h2>Industries & Equipment We Serve</h2>
                <p>Comprehensive asset integrity and RBI services for process industries and critical infrastructure</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="refining">Refining</button>
                    <button class="tab-btn" data-tab="petrochemical">Petrochemical</button>
                    <button class="tab-btn" data-tab="power">Power Generation</button>
                    <button class="tab-btn" data-tab="chemical">Chemical Processing</button>
                </div>

                <div class="tabs-content">
                    <!-- Refining Tab -->
                    <div class="tab-panel active" id="refining">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/integrity/refinery-rbi.jpg" alt="Refinery RBI">
                            </div>
                            <div class="tab-text">
                                <h3>Refining & Downstream Operations</h3>
                                <p>Comprehensive RBI studies for refinery pressure equipment including crude units, hydrotreaters, catalytic crackers, and downstream processing units.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude distillation units and vacuum towers</li>
                                    <li><i class="fas fa-check"></i> Hydrotreating and hydrocracking units</li>
                                    <li><i class="fas fa-check"></i> Catalytic cracking and reforming units</li>
                                    <li><i class="fas fa-check"></i> Coker and visbreaker units</li>
                                    <li><i class="fas fa-check"></i> Hydrogen production and treating units</li>
                                    <li><i class="fas fa-check"></i> Sulfur recovery and tail gas units</li>
                                    <li><i class="fas fa-check"></i> Tank farms and storage facilities</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 580</span>
                                    <span class="standard-tag">API 581</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 570</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Petrochemical Tab -->
                    <div class="tab-panel" id="petrochemical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/integrity/petrochemical-rbi.jpg" alt="Petrochemical RBI">
                            </div>
                            <div class="tab-text">
                                <h3>Petrochemical & Gas Processing</h3>
                                <p>Risk-based inspection programs for petrochemical complexes, gas processing facilities, and NGL extraction units with complex damage mechanisms.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Ethylene and propylene production units</li>
                                    <li><i class="fas fa-check"></i> Aromatics and derivatives plants</li>
                                    <li><i class="fas fa-check"></i> Polymerization and polymer processing</li>
                                    <li><i class="fas fa-check"></i> Gas processing and NGL extraction</li>
                                    <li><i class="fas fa-check"></i> Ammonia and urea production</li>
                                    <li><i class="fas fa-check"></i> Methanol and derivatives facilities</li>
                                    <li><i class="fas fa-check"></i> Cryogenic and low-temperature systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 580</span>
                                    <span class="standard-tag">API 581</span>
                                    <span class="standard-tag">ASME PCC-3</span>
                                    <span class="standard-tag">NACE Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Power Generation Tab -->
                    <div class="tab-panel" id="power">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/integrity/power-plant-rbi.jpg" alt="Power Plant RBI">
                            </div>
                            <div class="tab-text">
                                <h3>Power Generation Facilities</h3>
                                <p>Asset integrity management for power generation equipment including boilers, turbines, and auxiliary systems operating under high temperature and pressure.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Power boilers and steam generators</li>
                                    <li><i class="fas fa-check"></i> High-pressure steam systems</li>
                                    <li><i class="fas fa-check"></i> Heat recovery steam generators (HRSG)</li>
                                    <li><i class="fas fa-check"></i> Turbine casings and components</li>
                                    <li><i class="fas fa-check"></i> Condensate and feedwater systems</li>
                                    <li><i class="fas fa-check"></i> Cooling water systems</li>
                                    <li><i class="fas fa-check"></i> Pressure piping and supports</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section I</span>
                                    <span class="standard-tag">NBIC</span>
                                    <span class="standard-tag">API 579</span>
                                    <span class="standard-tag">EPRI Guidelines</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chemical Processing Tab -->
                    <div class="tab-panel" id="chemical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/integrity/chemical-plant-rbi.jpg" alt="Chemical Plant RBI">
                            </div>
                            <div class="tab-text">
                                <h3>Chemical Processing & Manufacturing</h3>
                                <p>Comprehensive integrity management for chemical processing equipment handling corrosive, high-temperature, and specialty chemical services.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Reactors and pressure vessels</li>
                                    <li><i class="fas fa-check"></i> Heat exchangers and condensers</li>
                                    <li><i class="fas fa-check"></i> Distillation and separation columns</li>
                                    <li><i class="fas fa-check"></i> Storage tanks and containment systems</li>
                                    <li><i class="fas fa-check"></i> Corrosive service piping systems</li>
                                    <li><i class="fas fa-check"></i> Specialty alloy equipment</li>
                                    <li><i class="fas fa-check"></i> Lined and clad vessel systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 580</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 653</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OUR SERVICES ===================== -->
    <section class="services-offering" id="services">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE INTEGRITY SERVICES</span>
                <h2>Our Asset Integrity & RBI Services</h2>
                <p>Complete asset integrity management from initial assessment to ongoing optimization</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>RBI Study Development</h3>
                    <p>Comprehensive risk-based inspection studies per API 580/581 methodology for entire process units or facility-wide programs.</p>
                    <ul>
                        <li>Quantitative or qualitative RBI analysis</li>
                        <li>Probability of failure assessment</li>
                        <li>Consequence of failure evaluation</li>
                        <li>Risk matrix development</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Damage Mechanism Assessment</h3>
                    <p>Detailed evaluation of active and potential damage mechanisms affecting equipment integrity and remaining service life.</p>
                    <ul>
                        <li>Corrosion mechanism identification</li>
                        <li>High-temperature damage assessment</li>
                        <li>Mechanical damage evaluation</li>
                        <li>Environmental cracking analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Inspection Planning Optimization</h3>
                    <p>Data-driven inspection plan development specifying optimal frequency, methods, extent, and timing for each equipment item.</p>
                    <ul>
                        <li>Inspection method selection</li>
                        <li>Frequency optimization</li>
                        <li>Coverage and extent determination</li>
                        <li>Inspection task specifications</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Fitness-for-Service Evaluation</h3>
                    <p>Engineering assessment per API 579-1/ASME FFS-1 to evaluate degraded equipment for continued safe operation.</p>
                    <ul>
                        <li>Remaining strength assessment</li>
                        <li>Crack-like flaw evaluation</li>
                        <li>Local thin area assessment</li>
                        <li>Operating limit determination</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Integrity Operating Windows</h3>
                    <p>Development of process operating limits that control corrosion rates and damage mechanism activity to manage integrity risks.</p>
                    <ul>
                        <li>Process parameter identification</li>
                        <li>Safe operating limit definition</li>
                        <li>Monitoring and alarm setup</li>
                        <li>Excursion management procedures</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Third-Party Inspection Services</h3>
                    <p>Independent third-party inspection and verification services providing unbiased assessment and compliance assurance.</p>
                    <ul>
                        <li>Turnaround inspection oversight</li>
                        <li>Vendor inspection and surveillance</li>
                        <li>Quality assurance verification</li>
                        <li>Regulatory compliance audits</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RBI METHODOLOGY ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">RBI METHODOLOGY</span>
                    <h2>Our Risk-Based Inspection Approach</h2>
                    <p>Systematic methodology combining API standards with practical industry experience to deliver actionable integrity management programs.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Collection & Validation</h4>
                                <p>Comprehensive collection and validation of equipment data, process conditions, materials of construction, inspection history, and operating experience.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Damage Mechanism Identification</h4>
                                <p>Systematic evaluation of all applicable damage mechanisms based on API 571 and operating experience to determine active threats.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Risk Calculation & Ranking</h4>
                                <p>Quantitative or qualitative risk assessment calculating probability and consequence of failure to generate risk rankings and matrices.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Inspection Strategy Development</h4>
                                <p>Risk-based inspection plan development with specific recommendations for inspection methods, frequency, and extent for each equipment item.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our RBI Certifications & Standards</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/api-580-cert.png" alt="API 580 Certified">
                            <img src="/www/assets/images/certs/api-581-cert.png" alt="API 581">
                            <img src="/www/assets/images/certs/api-579-cert.png" alt="API 579">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/integrity/rbi-process.jpg" alt="RBI Process">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View RBI Methodology</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>API 580 Certified Assessors</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>API 581 Methodology</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Fitness-for-Service Capable</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Software Tools & Analytics</span>
                        </div>
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
                <h2>Your Trusted Asset Integrity Partner</h2>
                <p>Expert integrity engineers and proven RBI methodology for sustainable asset management</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>API Certified Assessors</h3>
                    <p>API 580 certified RBI assessors and API 579 fitness-for-service specialists with extensive process industry experience and code knowledge.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industry Expertise</h3>
                    <p>Deep knowledge of refining, petrochemical, chemical processing, and power generation operations with practical understanding of damage mechanisms.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Proven Methodology</h3>
                    <p>Systematic approach combining API standards, industry best practices, and advanced analytics to deliver actionable integrity programs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Living Programs</h3>
                    <p>Ongoing support to maintain and update RBI programs as conditions change, incorporating new inspection data and operating experience.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Comprehensive Documentation</h3>
                    <p>Complete documentation and audit trails demonstrating compliance with API standards and regulatory requirements for PSM and RMP programs.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Collaborative Approach</h3>
                    <p>Work closely with operations, maintenance, and inspection teams to ensure RBI recommendations are practical and aligned with business objectives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Asset Integrity & RBI Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between API 580 and API 581?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>API 580 provides the framework and recommended practice for implementing risk-based inspection programs. API 581 provides the detailed quantitative methodology and calculations for determining probability of failure, consequence of failure, and risk. API 580 is the "what" and API 581 is the "how" of RBI.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much can RBI reduce inspection costs?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Properly implemented RBI programs typically reduce inspection costs by 30-50% while maintaining or improving safety. Savings come from optimized inspection frequency, appropriate method selection, and focused inspection efforts on highest-risk equipment.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What equipment is suitable for RBI?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RBI is applicable to pressure vessels, piping systems, tanks, heat exchangers, and rotating equipment in process industries. It's most effective for facilities with large equipment populations where risk-based prioritization can optimize resource allocation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should RBI studies be updated?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RBI studies should be updated every 3-5 years or when significant changes occur (process modifications, new damage mechanisms identified, major inspection findings, etc.). RBI is a "living program" requiring periodic updates to remain effective.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What data is required for an RBI study?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Required data includes equipment design information, materials of construction, process conditions (temperature, pressure, composition), inspection history, damage mechanisms, and consequence information (inventory, toxicity, flammability). We can help collect and validate required data.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can RBI be applied to aging facilities?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, RBI is particularly valuable for aging facilities where inspection budgets are constrained and equipment degradation is a concern. RBI helps prioritize resources on highest-risk equipment while managing integrity of the entire facility.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does RBI relate to regulatory compliance?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RBI programs support OSHA PSM, EPA RMP, and other regulatory requirements by demonstrating systematic risk management of process safety hazards. Documented RBI programs provide evidence of proactive integrity management for compliance audits.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide training for RBI programs?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide RBI training and knowledge transfer to help internal teams understand and maintain RBI programs. Training can be customized to operations, inspection, and engineering personnel at various technical levels.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Optimize Your Asset Integrity & Inspection Program</h2>
                <p>Contact our integrity engineers for comprehensive RBI studies and asset integrity management services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:rbi@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Integrity Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> API 580 Certified</span>
                    <span><i class="fas fa-check"></i> Cost Optimization</span>
                    <span><i class="fas fa-check"></i> Safety Enhancement</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Integrity Services</h2>
                <p>Comprehensive asset integrity and inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/fire-safety-equipment/pressure-vessel-boiler.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pressure Vessel Inspection</h3>
                    <p>Comprehensive pressure vessel and boiler inspection services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-thickness.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Thickness Measurement</h3>
                    <p>Corrosion monitoring and remaining thickness assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced ultrasonic testing for integrity assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/acoustic-emission-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Acoustic Emission Testing</h3>
                    <p>Real-time structural health monitoring and integrity assessment</p>
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