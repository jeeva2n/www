<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Ferrite Testing Services | Ferrite Number & Delta Ferrite Measurement | Alpha Sonix NDT Solutions";
$meta_description = "Professional Ferrite Testing services for stainless steel welds and components. Accurate ferrite number (FN) and delta ferrite measurement using calibrated instruments per AWS A4.2, ASME, and project specifications.";
$meta_keywords = "ferrite testing, ferrite number, delta ferrite, FN testing, stainless steel weld ferrite, ferrite measurement, AWS A4.2, magnetic ferrite testing, duplex stainless steel testing, weld metal ferrite content";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/ferrite-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/ferrite-og.jpg">

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
            "serviceType": "Ferrite Testing & Delta Ferrite Measurement",
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
            "description": "Professional Ferrite Testing services for stainless steel welds and components, measuring ferrite number (FN) and delta ferrite content for corrosion resistance and weld quality verification."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/ferrite-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Ferrite Testing</span>
                </div>
                <h1 class="page-title">Ferrite Testing</h1>
                <p class="page-subtitle">Precise ferrite number (FN) and delta ferrite measurement for stainless steel welds—ensuring optimal microstructure balance, corrosion resistance, and mechanical properties per AWS and ASME requirements</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-magnet"></i> Magnetic Response Testing</span>
                    <span class="badge"><i class="fas fa-certificate"></i> AWS A4.2 Compliant</span>
                    <span class="badge"><i class="fas fa-microscope"></i> Microstructure Verification</span>
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
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Microstructure Balance</h3>
                    <p>Verify proper austenite/ferrite balance in stainless steel welds ensuring optimal mechanical properties and corrosion resistance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Corrosion Resistance</h3>
                    <p>Ensure adequate ferrite content to prevent solidification cracking while maintaining corrosion resistance in aggressive environments.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Measurement</h3>
                    <p>Non-destructive magnetic measurement providing immediate ferrite number results for production quality control and acceptance testing.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Verification per AWS A4.2, ASME Section IX, and project specifications supporting welding procedure qualification and production control.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS FERRITE TESTING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MICROSTRUCTURE ANALYSIS</span>
                    <h2>What is Ferrite Testing?</h2>
                    <p class="lead">Ferrite Testing is a non-destructive magnetic measurement technique used to determine the ferrite number (FN) or delta ferrite content in stainless steel welds and components—ensuring proper microstructural balance for optimal mechanical properties and corrosion resistance.</p>

                    <p>Ferrite testing measures the magnetic response of the ferritic phase in austenitic and duplex stainless steel welds. The ferrite content significantly affects weld metal properties including resistance to hot cracking during solidification, mechanical properties at service temperature, and corrosion resistance in specific environments. Too little ferrite can cause solidification cracking, while too much ferrite can reduce corrosion resistance and toughness.</p>

                    <p>The test is essential for stainless steel welding quality control, procedure qualification, and service performance verification. It provides immediate feedback on weld metal composition and cooling rate effects, supporting welding parameter optimization and ensuring long-term performance in chemical processing, nuclear, pharmaceutical, and other critical applications.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Weld Metal Quality Control</strong>
                                <p>Verify proper ferrite content in austenitic stainless steel welds to prevent hot cracking and ensure structural integrity.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Corrosion Resistance Optimization</strong>
                                <p>Balance ferrite content to maintain corrosion resistance while providing adequate hot crack resistance for demanding service environments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Welding Procedure Qualification</strong>
                                <p>Support WPS/PQR development and qualification by verifying acceptable ferrite levels per code requirements and project specifications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Production Monitoring</strong>
                                <p>Monitor welding process stability and consumable performance through systematic ferrite measurement and trending analysis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Critical Importance of Ferrite Balance:</strong>
                            <p>Proper ferrite content (typically 2-20 FN for most applications) ensures stainless steel welds resist hot cracking during solidification while maintaining corrosion resistance and mechanical properties required for long-term service performance in aggressive environments.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Ferrite Testing</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/ferrite-equipment.jpg" alt="Ferrite Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Calibrated ferrite scope for accurate ferrite number measurement per AWS standards</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">5,000+</span>
                            <span class="stat-label">Welds Tested</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">±0.5 FN</span>
                            <span class="stat-label">Typical Accuracy</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Instant</span>
                            <span class="stat-label">Results</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> Ferrite Test Process</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Clean and prepare weld metal surface</li>
                            <li><strong>2.</strong> Calibrate ferrite scope with reference standards</li>
                            <li><strong>3.</strong> Place probe perpendicular to test surface</li>
                            <li><strong>4.</strong> Read ferrite number (FN) from digital display</li>
                            <li><strong>5.</strong> Compare results to specification requirements</li>
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
                <span class="section-label">WHY CHOOSE FERRITE TESTING</span>
                <h2>Key Advantages of Ferrite Content Measurement</h2>
                <p>Essential verification for stainless steel weld quality, corrosion resistance, and long-term performance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Immediate Results</h3>
                    <p>Real-time ferrite number measurement enabling instant weld acceptance, immediate process adjustment, and efficient production quality control.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Non-Destructive Testing</h3>
                    <p>Magnetic measurement without damage to welds or components—preserving structural integrity while providing critical microstructure information.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h3>Hot Crack Prevention</h3>
                    <p>Verify adequate ferrite content to prevent solidification cracking in stainless steel welds—critical for structural integrity and leak-tight joints.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Corrosion Performance</h3>
                    <p>Ensure ferrite levels maintain corrosion resistance in aggressive chemical environments while providing adequate mechanical properties.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Meet AWS A4.2, ASME Section IX, and project specification requirements for ferrite content in stainless steel welding applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <h3>Portable Testing</h3>
                    <p>Lightweight, battery-operated instruments enable field testing, shop floor quality control, and on-site weld verification without laboratory requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FERRITE TESTING APPLICATIONS</span>
                <h2>Industries & Components We Test</h2>
                <p>Critical ferrite measurement across chemical processing, nuclear, pharmaceutical, and high-performance stainless steel applications</p>
            </div>
            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="chemical">Chemical & Process</button>
                    <button class="tab-btn" data-tab="nuclear">Nuclear & Power</button>
                    <button class="tab-btn" data-tab="pharmaceutical">Pharmaceutical & Food</button>
                    <button class="tab-btn" data-tab="marine">Marine & Offshore</button>
                </div>

                <div class="tabs-content">
                    <!-- Chemical & Process Tab -->
                    <div class="tab-panel active" id="chemical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ferrite-chemical.jpg" alt="Chemical Process Ferrite Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Chemical & Process Industry Applications</h3>
                                <p>Critical ferrite testing for stainless steel equipment in chemical processing, petrochemical, and refining applications where corrosion resistance and weld integrity are essential for safe operation and environmental protection.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Process vessels and reactors (316L, 321, 347)</li>
                                    <li><i class="fas fa-check"></i> Heat exchangers and condenser tube-to-tubesheet welds</li>
                                    <li><i class="fas fa-check"></i> Piping systems in corrosive service</li>
                                    <li><i class="fas fa-check"></i> Storage tanks for acids and corrosive chemicals</li>
                                    <li><i class="fas fa-check"></i> Distillation columns and tower internals</li>
                                    <li><i class="fas fa-check"></i> Catalyst handling and regeneration equipment</li>
                                    <li><i class="fas fa-check"></i> Waste treatment and environmental systems</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Chemical Reactor Fabrication:</strong> Ferrite testing of 316L stainless steel weld metal in sulfuric acid service reactor—ensuring 4-12 FN range to prevent hot cracking while maintaining corrosion resistance for 20+ year service life in aggressive chemical environment.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS A4.2</span>
                                    <span class="standard-tag">ASME Sec IX</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                    <span class="standard-tag">API 582</span>
                                    <span class="standard-tag">ASTM A262</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nuclear & Power Tab -->
                    <div class="tab-panel" id="nuclear">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ferrite-nuclear.jpg" alt="Nuclear Ferrite Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Nuclear & Power Generation Applications</h3>
                                <p>Stringent ferrite testing for nuclear primary systems, steam generators, and power plant components where material integrity is critical for safe operation and regulatory compliance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Nuclear steam generator tube-to-tubesheet welds</li>
                                    <li><i class="fas fa-check"></i> Primary coolant system piping and components</li>
                                    <li><i class="fas fa-check"></i> Reactor vessel internals and core support structures</li>
                                    <li><i class="fas fa-check"></i> Spent fuel storage and handling equipment</li>
                                    <li><i class="fas fa-check"></i> Power plant steam and feedwater systems</li>
                                    <li><i class="fas fa-check"></i> Turbine and condenser stainless steel components</li>
                                    <li><i class="fas fa-check"></i> Safety-related and seismic Category I systems</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Steam Generator Replacement:</strong> Ferrite testing of Alloy 690 tube-to-tubesheet welds in nuclear steam generator—verifying 2-15 FN range per ASME Section III requirements to ensure stress corrosion cracking resistance in primary water environment.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec III</span>
                                    <span class="standard-tag">AWS A4.2</span>
                                    <span class="standard-tag">EPRI Guidelines</span>
                                    <span class="standard-tag">10 CFR 50</span>
                                    <span class="standard-tag">RG 1.71</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pharmaceutical & Food Tab -->
                    <div class="tab-panel" id="pharmaceutical">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ferrite-pharmaceutical.jpg" alt="Pharmaceutical Ferrite Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Pharmaceutical & Food Processing Applications</h3>
                                <p>Precise ferrite measurement for sanitary stainless steel systems where surface finish, cleanability, and corrosion resistance are critical for product purity and regulatory compliance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pharmaceutical process vessels and reactors</li>
                                    <li><i class="fas fa-check"></i> Bioreactor and fermentation equipment</li>
                                    <li><i class="fas fa-check"></i> Clean-in-place (CIP) and sterilization systems</li>
                                    <li><i class="fas fa-check"></i> Food processing and dairy equipment</li>
                                    <li><i class="fas fa-check"></i> Sanitary piping and fittings (3-A, BPE)</li>
                                    <li><i class="fas fa-check"></i> Storage tanks and mixing vessels</li>
                                    <li><i class="fas fa-check"></i> Heat exchangers for sterile processing</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Pharmaceutical Bioreactor:</strong> Ferrite testing of 316L orbital welds in sanitary bioreactor vessel—ensuring 5-12 FN range for optimal surface finish, corrosion resistance, and cleanability meeting FDA and cGMP requirements for sterile production.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME BPE</span>
                                    <span class="standard-tag">3-A Sanitary</span>
                                    <span class="standard-tag">FDA Guidelines</span>
                                    <span class="standard-tag">EHEDG Standards</span>
                                    <span class="standard-tag">USP Class VI</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marine & Offshore Tab -->
                    <div class="tab-panel" id="marine">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/ferrite-marine.jpg" alt="Marine Ferrite Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Marine & Offshore Applications</h3>
                                <p>Ferrite testing for marine grade stainless steels exposed to seawater, salt spray, and aggressive offshore environments where pitting and crevice corrosion resistance are critical.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Offshore platform piping and process systems</li>
                                    <li><i class="fas fa-check"></i> Seawater cooling and ballast systems</li>
                                    <li><i class="fas fa-check"></i> Marine exhaust systems and scrubbers</li>
                                    <li><i class="fas fa-check"></i> Shipboard piping and pressure vessels</li>
                                    <li><i class="fas fa-check"></i> Desalination and water treatment equipment</li>
                                    <li><i class="fas fa-check"></i> Subsea equipment and pressure housings</li>
                                    <li><i class="fas fa-check"></i> Duplex and super-duplex stainless steel welds</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Offshore Platform Piping:</strong> Ferrite testing of duplex 2205 stainless steel welds in seawater service—verifying 30-70% ferrite content for optimal pitting resistance and mechanical properties in North Sea offshore environment.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NORSOK M-601</span>
                                    <span class="standard-tag">DNV Standards</span>
                                    <span class="standard-tag">ASTM A923</span>
                                    <span class="standard-tag">ISO 15156</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FERRITE TEST METHODS ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FERRITE TESTING CAPABILITIES</span>
                <h2>Our Comprehensive Testing Services</h2>
                <p>Complete ferrite measurement solutions using calibrated instruments and proven methodologies</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Magnetic Ferrite Scope Testing</h3>
                    <p>Primary ferrite measurement method using calibrated magnetic instruments providing immediate ferrite number (FN) readings per AWS A4.2 standard.</p>
                    <ul>
                        <li>Portable magnetic ferrite scopes</li>
                        <li>Digital readout in Ferrite Number (FN)</li>
                        <li>Calibration with certified standards</li>
                        <li>Real-time production quality control</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Delta Ferrite Measurement</h3>
                    <p>Precise determination of delta ferrite percentage in duplex and super-duplex stainless steels for corrosion resistance and mechanical property optimization.</p>
                    <ul>
                        <li>Percentage ferrite measurement</li>
                        <li>Duplex stainless steel phase balance</li>
                        <li>Correlation with mechanical properties</li>
                        <li>Heat treatment verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Welding Procedure Qualification</h3>
                    <p>Ferrite testing support for WPS development, PQR qualification, and welding procedure optimization to meet code and specification requirements.</p>
                    <ul>
                        <li>WPS/PQR ferrite verification</li>
                        <li>Welding parameter optimization</li>
                        <li>Filler metal qualification support</li>
                        <li>Code compliance documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Production Quality Control</h3>
                    <p>Systematic ferrite monitoring during fabrication to ensure consistent weld quality, process control, and specification compliance.</p>
                    <ul>
                        <li>Statistical process control (SPC)</li>
                        <li>Trend analysis and reporting</li>
                        <li>Real-time process adjustment guidance</li>
                        <li>Quality documentation and traceability</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Heat Treatment Verification</h3>
                    <p>Ferrite measurement before and after heat treatment to verify proper solution annealing, sensitization avoidance, and microstructural stability.</p>
                    <ul>
                        <li>Pre and post heat treatment comparison</li>
                        <li>Solution annealing verification</li>
                        <li>Sensitization assessment support</li>
                        <li>Microstructural stability confirmation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Field & Laboratory Services</h3>
                    <p>Flexible testing delivery including on-site measurement, laboratory analysis, and emergency support for critical fabrication and maintenance activities.</p>
                    <ul>
                        <li>On-site ferrite measurement</li>
                        <li>Laboratory precision testing</li>
                        <li>Emergency breakdown support</li>
                        <li>Training and equipment rental</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & STANDARDS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">CALIBRATED INSTRUMENTS</span>
                    <h2>Professional Ferrite Testing Equipment</h2>
                    <p>We use calibrated ferrite scopes and measurement systems with certified reference standards ensuring accurate, repeatable results in compliance with AWS A4.2 and international standards.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-magnet"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Magnetic Ferrite Scopes</h4>
                                <p>Portable digital ferrite measurement instruments with immediate FN readout, memory storage, and data logging capability for production and quality control applications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Certified Reference Standards</h4>
                                <p>AWS-certified ferrite reference standards and calibration blocks ensuring measurement accuracy and traceability per AWS A4.2 requirements.</p>
                            </div>
                        </div>
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Metallographic Verification</h4>
                                <p>Laboratory metallographic analysis capability for ferrite measurement verification, microstructure confirmation, and correlation with magnetic measurements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Management Systems</h4>
                                <p>Digital data collection, statistical analysis, and reporting systems supporting quality control programs and long-term trending analysis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Standards & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/110/100/50" alt="AWS A4.2 Compliant">
                            <img src="https://picsum.photos/id/111/100/50" alt="ASME Qualified">
                            <img src="https://picsum.photos/id/112/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/113/100/50" alt="Calibration Certified">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/ferrite-measurement.jpg" alt="Ferrite Testing in Progress">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch Ferrite Testing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>AWS A4.2 Certified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibrated Instruments</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Data Logging</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Statistical Analysis</span>
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
                <h2>Your Ferrite Testing Specialists</h2>
                <p>Expert metallurgical knowledge, calibrated equipment, and proven results for critical stainless steel applications</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Metallurgical Expertise</h3>
                    <p>Qualified personnel with deep understanding of stainless steel metallurgy, phase relationships, and the correlation between ferrite content and material properties.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Calibrated Equipment</h3>
                    <p>AWS A4.2 compliant ferrite scopes with certified reference standards ensuring accurate, traceable measurements for critical quality control applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industry Experience</h3>
                    <p>Extensive experience across chemical, nuclear, pharmaceutical, and marine applications understanding specific ferrite requirements for each industry and service environment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Rapid Response</h3>
                    <p>Immediate ferrite measurement results enabling real-time production decisions, process adjustments, and efficient quality control without production delays.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Comprehensive Documentation</h3>
                    <p>Detailed test reports with calibration records, measurement locations, statistical analysis, and compliance evaluation supporting quality systems and code requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrated Services</h3>
                    <p>Ferrite testing coordinated with welding procedure development, heat treatment verification, and corrosion testing for complete stainless steel quality assurance programs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Ferrite Testing Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between ferrite number (FN) and delta ferrite percentage?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Ferrite Number (FN)</strong> is a standardized scale developed by AWS for measuring ferrite content in austenitic stainless steel welds using magnetic instruments. <strong>Delta ferrite percentage</strong> refers to the actual volume percentage of ferritic phase, typically measured metallographically or by magnetic methods in duplex stainless steels. FN is primarily used for weld metal, while percentage ferrite is used for duplex grades where ferrite content is much higher (typically 30-70%).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What ferrite content is required for different stainless steel applications?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical requirements vary by application: <strong>General corrosion service:</strong> 4-12 FN provides good balance. <strong>Severe corrosive service:</strong> 2-8 FN minimizes corrosion while preventing hot cracking. <strong>Nuclear applications:</strong> Often specify 2-15 FN per ASME Section III. <strong>Duplex stainless steels:</strong> Target 30-70% ferrite for optimal properties. <strong>High temperature service:</strong> Lower ferrite (2-6 FN) for better high-temperature properties. Specific requirements depend on code, specification, and service conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is magnetic ferrite measurement?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Properly calibrated magnetic ferrite scopes typically provide accuracy of ±0.5 FN for austenitic weld metals when used per AWS A4.2. Accuracy depends on calibration quality, surface preparation, probe technique, and material homogeneity. For duplex stainless steels, magnetic methods can achieve ±2-3% accuracy for ferrite percentage. Metallographic verification is recommended for critical applications or dispute resolution.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What factors affect ferrite content in stainless steel welds?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Key factors include: <strong>Filler metal composition</strong> (Cr/Ni ratio, Cr and Ni equivalents), <strong>Base metal dilution</strong> (joint design, penetration), <strong>Welding parameters</strong> (heat input, travel speed, cooling rate), <strong>Shielding gas composition</strong> (nitrogen content), and <strong>Post-weld cooling rate</strong>. Higher chromium equivalent and lower nickel equivalent increase ferrite. Faster cooling rates generally increase ferrite content. Understanding these relationships enables ferrite optimization through welding procedure development.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can ferrite testing be performed on finished components?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—magnetic ferrite measurement is non-destructive and can be performed on finished welds and components. Surface preparation may be required to remove paint, oxide, or contamination for accurate measurement. Access to the weld metal surface is necessary, so testing through thick coatings or linings may not be possible. The method works on any size component as long as the magnetic probe can contact the test surface.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How does ferrite content affect corrosion resistance?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ferrite content significantly affects corrosion behavior: <strong>General corrosion:</strong> Moderate ferrite (4-12 FN) typically provides good resistance. <strong>Pitting/crevice corrosion:</strong> Lower ferrite generally improves resistance in chloride environments. <strong>Stress corrosion cracking:</strong> Lower ferrite content often improves SCC resistance. <strong>Intergranular corrosion:</strong> Ferrite content affects sensitization behavior. The optimal ferrite range depends on specific corrosive environment, temperature, and stress conditions. We provide guidance based on service conditions and material specifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What calibration standards are used for ferrite testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We use AWS-certified ferrite reference standards traceable to the Institute of Standards and Technology (formerly NBS). These standards cover the range 0-30 FN with known ferrite content established by standardized metallographic techniques. Calibration is performed per AWS A4.2 requirements before each use period. Primary standards are maintained for critical applications, and working standards are used for routine measurements with regular verification against primary standards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How quickly can ferrite testing results be provided?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Magnetic ferrite measurements provide immediate results—readings are available within seconds of probe placement. Multiple measurements for statistical evaluation typically take 2-5 minutes per location. For production quality control, results can be documented and reported in real-time. Comprehensive reports with statistical analysis and compliance evaluation are typically completed within hours of testing. Emergency and breakdown support can provide immediate verbal results with formal documentation following.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Accurate Ferrite Content Verification?</h2>
                <p>Contact us for professional ferrite testing, weld quality verification, and stainless steel consultation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> AWS A4.2 Certified</span>
                    <span><i class="fas fa-check"></i> Immediate Results</span>
                    <span><i class="fas fa-check"></i> Expert Analysis</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Stainless Steel Testing Services</h2>
                <p>Comprehensive stainless steel quality assurance and material verification solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/pmi-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-atom"></i>
                    </div>
                    <h3>Positive Material Identification</h3>
                    <p>Chemical composition verification supporting ferrite testing programs</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/liquid-penetrant-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3>Liquid Penetrant Testing</h3>
                    <p>Surface crack detection for stainless steel welds and components</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing</h3>
                    <p>Weld quality assessment complementing ferrite measurement programs</p>
                    <span class="learn-more">Learn More<i class="fas fa-arrow-right"></i></span>
                </a> <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Volumetric inspection for stainless steel welds and pressure boundaries</p>
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