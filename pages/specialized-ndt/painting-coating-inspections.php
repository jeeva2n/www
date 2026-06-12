<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Painting & Coating Inspection Services | NACE CIP Certified Inspectors | Alpha Sonix NDT Solutions";
$meta_description = "Professional painting and coating inspection services for corrosion protection systems. NACE/SSPC certified inspectors, complete surface preparation verification, application monitoring, DFT measurement, holiday detection, and coating condition assessment per ISO 12944, NACE, SSPC, and ASTM standards.";
$meta_keywords = "painting inspection, coating inspection, NACE CIP, SSPC coating inspection, DFT measurement, holiday detection, surface preparation inspection, protective coating inspection, corrosion protection, ISO 12944, NACE inspector, coating thickness measurement";
$canonical_url = "https://alphasonix.com/pages/specialized-inspection/painting-coating-inspection.php";
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
    <meta property="og:image" content="https://alphasonix.com/www/assets/images/services/coating-inspection-og.jpg">
    
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
        "serviceType": "Painting & Coating Inspection Services",
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
        "description": "Professional painting and coating inspection services including surface preparation verification, application monitoring, DFT measurement, holiday detection, and protective coating assessment by NACE/SSPC certified inspectors."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('https://picsum.photos/id/1047/1920/1080');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Specialized Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Painting & Coating Inspection</span>
                </div>
                <h1 class="page-title">Painting & Coating Inspection Services</h1>
                <p class="page-subtitle">Protecting your assets through expert coating system verification—from surface preparation to final acceptance and in-service monitoring</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> NACE CIP Certified Inspectors</span>
                    <span class="badge"><i class="fas fa-award"></i> SSPC Qualified Personnel</span>
                    <span class="badge"><i class="fas fa-clipboard-check"></i> ISO 12944 & NACE Compliant</span>
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
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Corrosion Protection Verification</h3>
                    <p>Ensure protective coating systems meet design specifications and provide long-term corrosion resistance for critical industrial assets.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Certified Coating Inspectors</h3>
                    <p>NACE CIP Level 1, 2, 3 and SSPC certified inspectors with extensive field experience across diverse coating applications and environments.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Complete Project Coverage</h3>
                    <p>From pre-blast surface assessment through final acceptance testing—comprehensive inspection support at every coating application stage.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Standards-Based Reporting</h3>
                    <p>Detailed documentation aligned to NACE, SSPC, ISO 12944, ASTM, and project specifications—supporting owner acceptance and warranty requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS COATING INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">PROTECTIVE COATING QA/QC</span>
                    <h2>What is Painting & Coating Inspection?</h2>

                    <p class="lead">Painting and coating inspection is a specialized quality assurance discipline that verifies protective coating systems are applied in accordance with design specifications, industry standards, and best practices—ensuring long-term corrosion protection and asset integrity.</p>
                    
                    <p>Protective coatings represent a critical first line of defense against corrosion, chemical attack, UV degradation, and environmental damage. However, coating performance depends entirely on proper surface preparation, correct material application, appropriate environmental conditions during cure, and verified film build. A single oversight—such as inadequate blast cleaning, moisture contamination, insufficient DFT, or missed holidays—can compromise decades of expected protection.</p>

                    <p>Professional coating inspection provides independent verification and documentation at each critical stage: surface preparation (blast profile, cleanliness, contamination), application conditions (temperature, humidity, dew point), wet film control, dry film thickness measurement, holiday detection, adhesion testing, and final acceptance. This discipline supports owner confidence, contractor accountability, warranty validation, and long-term asset protection strategies.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Surface Preparation Verification</strong>
                                <p>Assessment of blast cleaning degree (NACE/SSPC/ISO 8501), surface profile measurement, contamination testing (salts, oils, dust), and readiness confirmation before coating application.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Environmental Monitoring</strong>
                                <p>Continuous tracking of temperature, relative humidity, dew point, and surface temperature to ensure conditions remain within coating manufacturer and specification requirements throughout application.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Application Quality Control</strong>
                                <p>Wet film thickness (WFT) monitoring, mixing verification, pot life control, application technique observation, and documentation of non-conformances for immediate corrective action.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Final Acceptance Testing</strong>
                                <p>Dry film thickness (DFT) measurement, holiday detection (low/high voltage), adhesion testing, appearance assessment, and comprehensive reporting supporting owner acceptance and warranty activation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div>
                            <strong>The Cost of Poor Coating Performance:</strong>
                            <p>Premature coating failure can result in extensive corrosion damage, unplanned shutdowns, emergency repairs, production loss, and safety incidents—often costing 10-50 times more than the original coating investment. Independent inspection provides risk mitigation and documented assurance.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Coating Inspector</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>

                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="https://picsum.photos/id/201/600/400" alt="Coating Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>NACE certified inspector performing DFT measurement and holiday detection</span>
                        </div>
                    </div>

                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">NACE CIP</span>
                            <span class="stat-label">Certified Team</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support Available</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-layer-group"></i> Inspection Coverage Stages</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Pre-blast substrate assessment</li>
                            <li><strong>2.</strong> Surface preparation verification</li>
                            <li><strong>3.</strong> Environmental condition monitoring</li>
                            <li><strong>4.</strong> Material receipt & storage inspection</li>
                            <li><strong>5.</strong> Application process monitoring</li>
                            <li><strong>6.</strong> Wet film thickness control</li>
                            <li><strong>7.</strong> Inter-coat inspection & timing</li>
                            <li><strong>8.</strong> Dry film thickness measurement</li>
                            <li><strong>9.</strong> Holiday/pinhole detection</li>
                            <li><strong>10.</strong> Adhesion & acceptance testing</li>
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
                <span class="section-label">VALUE OF PROFESSIONAL INSPECTION</span>
                <h2>Key Benefits of Coating Inspection Services</h2>
                <p>Independent verification, risk reduction, and documented assurance for critical protective systems</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3>Maximize Coating Investment ROI</h3>
                    <p>Proper inspection ensures coating systems achieve their full design life (15-25+ years typical for industrial systems), avoiding premature failure and costly early recoating or emergency repairs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h3>Prevent Corrosion & Asset Damage</h3>
                    <p>Early detection of application defects, insufficient DFT, holidays, or surface preparation issues prevents corrosion initiation and protects structural integrity, safety, and operational reliability.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Independent Third-Party Verification</h3>
                    <p>Unbiased assessment and documentation providing owners with confidence, contractors with clear acceptance criteria, and all stakeholders with traceable QA/QC records.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Support Warranty & Guarantees</h3>
                    <p>Comprehensive inspection records and compliance documentation satisfy coating manufacturer warranty requirements and contractor performance guarantees—protecting long-term interests.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Regulatory & Spec Compliance</h3>
                    <p>Verification against NACE, SSPC, ISO 12944, ASTM, project specifications, environmental regulations, and owner standards—supporting audit readiness and acceptance sign-off.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Real-Time Issue Resolution</h3>
                    <p>Immediate identification of non-conformances during application enables fast corrective action (re-blast, additional coat, repair) before defects are locked in—minimizing rework costs and schedule impact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COATING INSPECTION APPLICATIONS</span>
                <h2>Industries & Assets We Serve</h2>
                <p>Comprehensive coating inspection across diverse environments, substrates, and corrosivity categories</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="tanks">Tanks & Vessels</button>
                    <button class="tab-btn" data-tab="pipeline">Pipelines & Piping</button>
                    <button class="tab-btn" data-tab="structural">Structural Steel</button>
                    <button class="tab-btn" data-tab="marine">Marine & Offshore</button>
                </div>

                <div class="tabs-content">
                    <!-- Tanks & Vessels Tab -->
                    <div class="tab-panel active" id="tanks">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/325/600/400" alt="Tank Coating Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Storage Tanks & Pressure Vessels</h3>
                                <p>Internal and external coating inspection for atmospheric storage tanks, process vessels, pressure vessels, and specialty containment systems across petrochemical, refining, chemical, water/wastewater, and food/pharma industries.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Crude oil & refined product storage tanks (API 650/653)</li>
                                    <li><i class="fas fa-check"></i> Chemical storage vessels & process tanks</li>
                                    <li><i class="fas fa-check"></i> Water storage tanks & treatment systems</li>
                                    <li><i class="fas fa-check"></i> Internal tank lining inspection (epoxy, polyurethane, FBE, glass flake)</li>
                                    <li><i class="fas fa-check"></i> External coating systems (alkyd, epoxy, polyurethane, inorganic zinc)</li>
                                    <li><i class="fas fa-check"></i> Tank bottom linings and corrosion barriers</li>
                                    <li><i class="fas fa-check"></i> High-temperature vessel coatings (silicone, ceramic)</li>
                                    <li><i class="fas fa-check"></i> Immersion service and chemical resistance verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 652/653</span>
                                    <span class="standard-tag">NACE SP0178</span>
                                    <span class="standard-tag">SSPC-PA 1/2</span>
                                    <span class="standard-tag">ISO 12944</span>
                                    <span class="standard-tag">AWWA D102</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pipeline & Piping Tab -->
                    <div class="tab-panel" id="pipeline">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/1036/600/400" alt="Pipeline Coating Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline & Piping Systems Coating</h3>
                                <p>Field joint coating inspection, internal pipeline linings, external protective systems, and specialized coatings for oil & gas transmission, water infrastructure, and industrial process piping.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pipeline external coating systems (FBE, 3LPE, 3LPP, coal tar)</li>
                                    <li><i class="fas fa-check"></i> Field joint coating application inspection (heat shrink, liquid epoxy, tape)</li>
                                    <li><i class="fas fa-check"></i> Internal pipeline linings (epoxy, cement mortar, polyurethane)</li>
                                    <li><i class="fas fa-check"></i> Holiday detection (low voltage / DCVG / high voltage)</li>
                                    <li><i class="fas fa-check"></i> Pipe support & saddle coating inspection</li>
                                    <li><i class="fas fa-check"></i> Insulation jacketing and weatherproofing coatings</li>
                                    <li><i class="fas fa-check"></i> Thermal spray metalizing (TSA, aluminum, zinc)</li>
                                    <li><i class="fas fa-check"></i> Cathodic protection system interface verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NACE SP0169</span>
                                    <span class="standard-tag">ISO 21809</span>
                                    <span class="standard-tag">DIN 30670/30678</span>
                                    <span class="standard-tag">CSA Z245</span>
                                    <span class="standard-tag">AWWA C210</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Structural Steel Tab -->
                    <div class="tab-panel" id="structural">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/1031/600/400" alt="Structural Steel Coating">
                            </div>
                            <div class="tab-text">
                                <h3>Structural Steel & Infrastructure</h3>
                                <p>Protective coating inspection for industrial plants, buildings, bridges, transmission towers, and civil infrastructure—ensuring long-term durability in aggressive atmospheric and industrial environments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Industrial plant structural steel (process units, pipe racks, platforms)</li>
                                    <li><i class="fas fa-check"></i> Bridge coating systems (rail, highway, pedestrian)</li>
                                    <li><i class="fas fa-check"></i> Power transmission & distribution towers</li>
                                    <li><i class="fas fa-check"></i> Building facades, curtain walls, and architectural steel</li>
                                    <li><i class="fas fa-check"></i> Fire protection coatings & intumescent systems</li>
                                    <li><i class="fas fa-check"></i> Galvanizing inspection & quality verification</li>
                                    <li><i class="fas fa-check"></i> Shop-applied vs field-applied coating coordination</li>
                                    <li><i class="fas fa-check"></i> Long-term maintenance coating programs</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ISO 12944</span>
                                    <span class="standard-tag">SSPC-PA 2</span>
                                    <span class="standard-tag">ASTM D7108</span>
                                    <span class="standard-tag">BS 5493</span>
                                    <span class="standard-tag">ASTM A123</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marine & Offshore Tab -->
                    <div class="tab-panel" id="marine">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="https://picsum.photos/id/211/600/400" alt="Marine Coating Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Marine & Offshore Structures</h3>
                                <p>Specialized coating inspection for the harshest corrosion environments—offshore platforms, marine vessels, port facilities, and subsea structures requiring maximum protection and reliability.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Offshore oil & gas platforms (jacket, topside, living quarters)</li>
                                    <li><i class="fas fa-check"></i> FPSO, FSO, and floating production systems</li>
                                    <li><i class="fas fa-check"></i> Ship hull, ballast tanks, and cargo hold coatings</li>
                                    <li><i class="fas fa-check"></i> Port infrastructure (piers, jetties, dolphins, fenders)</li>
                                    <li><i class="fas fa-check"></i> Subsea pipeline and riser coating systems</li>
                                    <li><i class="fas fa-check"></i> Splash zone and immersion zone coatings</li>
                                    <li><i class="fas fa-check"></i> Ballast tank coatings per PSPC requirements</li>
                                    <li><i class="fas fa-check"></i> Antifouling and marine growth prevention systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NACE SP0108</span>
                                    <span class="standard-tag">ISO 20340</span>
                                    <span class="standard-tag">IMO PSPC</span>
                                    <span class="standard-tag">NORSOK M-501</span>
                                    <span class="standard-tag">DNV-RP-C301</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OUR COATING INSPECTION SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE COATING QA/QC</span>
                <h2>Our Coating Inspection Services</h2>
                <p>Complete lifecycle support—from specification review through long-term maintenance monitoring</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Surface Preparation Inspection</h3>
                    <p>Independent verification of abrasive blast cleaning, surface profile, contamination levels, and substrate readiness—the foundation of coating system performance.</p>
                    <ul>
                        <li>Blast cleaning degree verification (NACE/SSPC/ISO 8501 visual standards)</li>
                        <li>Surface profile measurement (replica tape / digital profilometer)</li>
                        <li>Salt contamination testing (Bresle patch / conductivity)</li>
                        <li>Oil/grease contamination detection</li>
                        <li>Dust & particulate assessment</li>
                        <li>Flash rust evaluation and timing control</li>
                        <li>Power tool cleaning verification (SSPC-SP 2/3/11)</li>
                        <li>Water jetting inspection (WJ-1/2/3/4)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Environmental Monitoring</h3>
                    <p>Continuous tracking and documentation of ambient conditions ensuring coating application occurs within manufacturer and specification requirements for proper cure and adhesion.</p>
                    <ul>
                        <li>Air temperature monitoring</li>
                        <li>Relative humidity measurement</li>
                        <li>Dew point calculation & verification</li>
                        <li>Surface temperature monitoring (3°C/5°F above dew point minimum)</li>
                        <li>Wind speed assessment for spray application</li>
                        <li>Precipitation monitoring</li>
                        <li>Automated data logging systems</li>
                        <li>Shutdown/restart decision support</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Coating Material Inspection</h3>
                    <p>Receipt verification, storage condition monitoring, and material conformance checks ensuring only approved, properly stored coating materials are used on your project.</p>
                    <ul>
                        <li>Material certification review (batch/lot numbers, TDS, SDS)</li>
                        <li>Storage condition verification (temperature, ventilation, organization)</li>
                        <li>Shelf life and expiration tracking</li>
                        <li>Mix ratio verification (by weight or volume)</li>
                        <li>Pot life monitoring and control</li>
                        <li>Thinner/reducer compatibility verification</li>
                        <li>Color and batch consistency checks</li>
                        <li>Material substitution approval process</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Application Monitoring</h3>
                    <p>Real-time observation and documentation of coating application techniques, equipment operation, and workmanship—enabling immediate corrective action when needed.</p>
                    <ul>
                        <li>Spray equipment inspection (tip size, pressure, pattern)</li>
                        <li>Applicator technique observation</li>
                        <li>Wet film thickness (WFT) measurement</li>
                        <li>Application rate and coverage verification</li>
                        <li>Runs, sags, and overspray detection</li>
                        <li>Edge coverage and stripe coat verification</li>
                        <li>Inter-coat timing control (minimum/maximum recoat windows)</li>
                        <li>Defect identification and NCR documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Dry Film Thickness (DFT) Testing</h3>
                    <p>Comprehensive DFT measurement using calibrated gauges per SSPC-PA 2—ensuring specified coating thickness is achieved for design corrosion protection life.</p>
                    <ul>
                        <li>Magnetic pull-off gauge (Type 1) measurement</li>
                        <li>Electronic thickness gauge (Type 2) measurement</li>
                        <li>Ultrasonic thickness gauge for non-magnetic substrates</li>
                        <li>Statistical sampling per SSPC-PA 2 / ISO 19840</li>
                        <li>Spot measurement and continuous measurement modes</li>
                        <li>Multi-coat system individual layer verification</li>
                        <li>Over-thickness and under-thickness documentation</li>
                        <li>Remediation and re-inspection protocols</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Holiday Detection & Final Testing</h3>
                    <p>Electrical continuity testing to identify pinholes, voids, and coating discontinuities that could allow corrosion initiation—plus adhesion and appearance verification for final acceptance.</p>
                    <ul>
                        <li>Low voltage wet sponge holiday detection (&lt;500V for thin films)</li>
                        <li>High voltage holiday detection (500V-35kV for thick films/linings)</li>
                        <li>Pulse DC holiday detection for challenging geometries</li>
                        <li>Adhesion testing (pull-off, cross-hatch, knife test)</li>
                        <li>Hardness and cure verification (Shore, Barcol, MEK rub)</li>
                        <li>Gloss and color measurement (if specified)</li>
                        <li>Visual appearance and defect assessment</li>
                        <li>Final acceptance documentation and sign-off</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION EQUIPMENT ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">PROFESSIONAL-GRADE INSTRUMENTATION</span>
                    <h2>Coating Inspection Equipment</h2>
                    <p>We deploy calibrated, industry-standard inspection instruments maintained per manufacturer requirements and traceable to national/international standards—ensuring accurate, defensible measurements.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-ruler-vertical"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>DFT Measurement Systems</h4>
                                <p><strong>Magnetic Pull-Off Gauges:</strong> Precision Type 1 gauges (Elcometer, DeFelsko) for ferrous substrates. <strong>Electronic Gauges:</strong> Type 2 digital instruments with statistical modes, data logging, and Bluetooth connectivity. <strong>Ultrasonic Gauges:</strong> For non-ferrous and multi-layer systems. All gauges calibrated per SSPC-PA 2 / ISO 19840.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Holiday Detection Equipment</h4>
                                <p><strong>Low Voltage (67.5V–90V):</strong> Wet sponge detectors for coatings up to 500 microns. <strong>High Voltage (500V–35kV):</strong> Adjustable DC detectors for thick coatings and tank linings. <strong>Pulse DC:</strong> For complex geometries and FBE coatings. All per NACE SP0188 / ASTM G62 / ISO 29601.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Environmental Monitoring</h4>
                                <p><strong>Psychrometers:</strong> Digital sling and electronic psychrometers for RH and dew point. <strong>Infrared Thermometers:</strong> Non-contact surface temperature measurement. <strong>Data Loggers:</strong> Automated recording of temperature, RH, and dew point with time-stamped records. Wind speed meters and precipitation alarms.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Surface Preparation Tools</h4>
                                <p><strong>Replica Tape & Micrometer:</strong> Surface profile measurement per ASTM D4417 Method C. <strong>Digital Profilometer:</strong> Electronic profile measurement. <strong>Bresle Patch & Conductivity Meter:</strong> Salt contamination testing per ISO 8502-6/9. <strong>Comparators:</strong> Visual standards (NACE, SSPC, ISO 8501, Swedish Standards).</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-vial"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material & Adhesion Testing</h4>
                                <p><strong>Wet Film Combs:</strong> WFT measurement during application. <strong>Pull-Off Adhesion Testers:</strong> Hydraulic and mechanical dollies per ASTM D4541 / ISO 4624. <strong>Cross-Hatch Cutters:</strong> ASTM D3359 adhesion classification. <strong>Hardness Testers:</strong> Shore, Barcol, pencil hardness, and MEK rub test kits.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation & Reporting Systems</h4>
                                <p>Mobile reporting tablets with inspection software, photograph documentation systems, digital signature capability, cloud-based data storage, and automated report generation aligned to NACE, SSPC, and ISO standards. Real-time client dashboards and progress tracking available.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Equipment Calibration & Traceability</h4>
                        <p>All critical inspection instruments are calibrated per manufacturer recommendations and traceable to NIST (National Institute of Standards and Technology) or equivalent national standards. Calibration certificates and verification records are maintained and available for client review.</p>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="https://picsum.photos/id/180/600/400" alt="Coating Inspection Equipment">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Coating Inspection Process Overview</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>NIST Traceable Calibration</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Data Logging</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Real-Time Reporting</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Cloud-Based Records</span>
                        </div>
                    </div>

                    <div class="certification-showcase">
                        <h3>Certifications & Standards</h3>
                        <div class="cert-grid">
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/10/100/50" alt="NACE">
                                <span>NACE CIP</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/11/100/50" alt="SSPC">
                                <span>SSPC C-3/QP1</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/12/100/50" alt="ISO 12944">
                                <span>ISO 12944</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/13/100/50" alt="BGAS">
                                <span>BGAS/FROSIO</span>
                            </div>
                            <div class="cert-item">
                                <img src="https://picsum.photos/id/14/100/50" alt="ASTM">
                                <span>ASTM Standards</span>
                            </div>
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
                <h2>Your Trusted Coating Inspection Partner</h2>
                <p>Certified expertise, proven methodology, and independent verification you can defend</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>NACE/SSPC Certified Inspectors</h3>
                    <p>Our team includes NACE CIP Level 1, 2, and 3 certified coating inspectors, SSPC-qualified personnel, and BGAS/FROSIO certified specialists with extensive field experience across all coating types and environments.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Multi-Industry Experience</h3>
                    <p>500+ successful coating projects across oil & gas, petrochemical, power generation, water/wastewater, marine/offshore, infrastructure, and manufacturing industries—we understand your specific challenges and requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>True Independence & Objectivity</h3>
                    <p>As a dedicated inspection services provider (not affiliated with coating contractors or manufacturers), we provide genuinely independent verification, unbiased assessment, and owner-focused recommendations.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>Comprehensive Documentation</h3>
                    <p>Detailed daily reports, photographic evidence, statistical DFT analysis, NCR tracking, environmental records, and final acceptance packages—all aligned to NACE RP0287/SP0105, SSPC-QP standards, and your project specifications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Responsive Project Support</h3>
                    <p>24/7 inspector availability for critical projects, rapid mobilization capability, real-time communication, and dedicated project coordination ensuring your schedule and quality objectives are met.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Quality Management System</h3>
                    <p>ISO 9001:2015 certified quality system governing our inspection processes, personnel qualification, equipment calibration, document control, and continuous improvement—ensuring consistent, reliable service delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== COATING STANDARDS & REFERENCES ===================== -->
    <section class="capabilities-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INDUSTRY STANDARDS</span>
                <h2>Standards & Specifications We Work With</h2>
                <p>Comprehensive knowledge and application of international coating inspection standards</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-globe-americas"></i>
                        <h3>NACE International Standards</h3>
                    </div>
                    <ul class="capability-list">
                        <li>NACE SP0178: Design, Fabrication & Surface Finish for Tanks & Vessels</li>
                        <li>NACE SP0169: Control of External Corrosion on Underground/Submerged Pipelines</li>
                        <li>NACE SP0188: Discontinuity (Holiday) Testing of Protective Coatings</li>
                        <li>NACE SP0108: Maintenance Coating of Offshore Structures</li>
                        <li>NACE RP0287: Field Measurement of Surface Profile of Abrasive Blast Cleaned Steel</li>
                        <li>NACE RP0490: Holiday Detection of Fusion-Bonded Epoxy External Pipeline Coating</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-flag-usa"></i>
                        <h3>SSPC Standards (USA)</h3>
                    </div>
                    <ul class="capability-list">
                        <li>SSPC-PA 1: Shop, Field & Maintenance Painting</li>
                        <li>SSPC-PA 2: Measurement of Dry Coating Thickness with Magnetic Gauges</li>
                        <li>SSPC-QP 1: Standard Procedure for Evaluating Qualifications of Shop Coating Applicators</li>
                        <li>SSPC-SP Series: Surface Preparation Standards (SP 5, SP 6, SP 7, SP 10, etc.)</li>
                        <li>SSPC-VIS 1/2: Visual Standards for Abrasive Blast Cleaned & Power Tool Cleaned Steel</li>
                        <li>SSPC-AB 1: Mineral & Slag Abrasive Specification</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-globe-europe"></i>
                        <h3>ISO Standards (International)</h3>
                    </div>
                    <ul class="capability-list">
                        <li>ISO 12944 (Parts 1-8): Corrosion Protection of Steel Structures by Protective Paint Systems</li>
                        <li>ISO 8501-1/2/3: Visual Assessment of Surface Cleanliness</li>
                        <li>ISO 8502 Series: Tests for Surface Contamination (Dust, Salts, Oil)</li>
                        <li>ISO 8503 Series: Surface Roughness Characteristics of Blast-Cleaned Steel</li>
                        <li>ISO 19840: Paints & Varnishes - DFT Measurement on Rough Surfaces</li>
                        <li>ISO 4624: Pull-Off Test for Adhesion</li>
                    </ul>
                </div>
            </div>

            <div class="comparison-table-wrapper" style="margin-top: 40px;">
                <h3 style="text-align: center; color: #1a237e; margin-bottom: 20px;">
                    <i class="fas fa-layer-group"></i> Common Coating System Specifications by Environment
                </h3>
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Environment / Corrosivity</th>
                            <th>ISO 12944 Category</th>
                            <th>Typical Coating System</th>
                            <th>Expected Life (High Durability)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Mild Indoor (Heated, Dry)</strong></td>
                            <td>C1 - Very Low</td>
                            <td>Alkyd / 1-2 Coats</td>
                            <td>&gt;15 years</td>
                        </tr>
                        <tr>
                            <td><strong>Unheated Indoor / Rural Outdoor</strong></td>
                            <td>C2 - Low</td>
                            <td>Alkyd / Acrylic / 2-3 Coats</td>
                            <td>&gt;15 years</td>
                        </tr>
                        <tr>
                            <td><strong>Urban / Coastal Atmosphere</strong></td>
                            <td>C3 - Medium</td>
                            <td>Epoxy/Polyurethane 3-Coat (200-250 µm)</td>
                            <td>&gt;15 years</td>
                        </tr>
                        <tr>
                            <td><strong>Industrial / Heavy Coastal</strong></td>
                            <td>C4 - High</td>
                            <td>Zinc-Rich Epoxy + Epoxy + PU (300-350 µm)</td>
                            <td>&gt;15 years</td>
                        </tr>
                        <tr>
                            <td><strong>Severe Industrial / Offshore</strong></td>
                            <td>C5-I / C5-M - Very High</td>
                            <td>IOZ/Epoxy/PU or TSA + Sealer (400-500 µm)</td>
                            <td>&gt;15-25 years</td>
                        </tr>
                        <tr>
                            <td><strong>Immersion (Water/Chemical)</strong></td>
                            <td>Im1/Im2/Im3/Im4</td>
                            <td>High-Build Epoxy / Novolac / Glass Flake (500-1000+ µm)</td>
                            <td>&gt;15-25 years</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Coating Inspection FAQs</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Why do I need an independent coating inspector?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Independent coating inspection provides unbiased verification that coating systems meet specifications, standards, and manufacturer requirements. Inspectors act as the owner's eyes, ensuring contractors deliver quality work, identifying defects early (when correction is least expensive), supporting warranty activation, and providing documented evidence of compliance. The cost of inspection (typically 1-5% of coating value) is minimal compared to the cost of premature coating failure (often 10-50x the original investment).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What qualifications should a coating inspector have?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Professional coating inspectors should hold recognized certifications such as <strong>NACE CIP (Coating Inspector Program) Level 1, 2, or 3</strong>, <strong>SSPC Coating Inspection Certification</strong>, <strong>BGAS Coating Inspector</strong>, or <strong>FROSIO Inspector</strong>. Level 1 inspectors can perform routine inspections under supervision; Level 2 inspectors can work independently and write reports; Level 3 inspectors have advanced expertise and can develop specifications and procedures. Additionally, inspectors should have hands-on field experience, knowledge of relevant standards (NACE, SSPC, ISO), and familiarity with coating chemistry and application techniques.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the most important factor for coating system success?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Surface preparation</strong> is universally recognized as the single most critical factor—accounting for approximately 50% of coating system performance. No coating, regardless of quality or cost, will perform adequately on a poorly prepared surface. Proper abrasive blast cleaning to the specified degree (typically NACE 2/SSPC-SP 10 Near-White or NACE 3/SSPC-SP 5 White Metal for critical service), correct surface profile (typically 50-100 microns depending on coating), removal of all contaminants (salts, oils, dust), and coating application within the specified time window are essential. This is why independent inspection of surface preparation is so valuable.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is coating thickness measured and what are acceptable limits?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Dry Film Thickness (DFT) is measured using calibrated gauges—typically <strong>Type 1 (magnetic pull-off)</strong> or <strong>Type 2 (electronic)</strong> per SSPC-PA 2. Measurements are taken using statistical sampling (number of measurements based on surface area inspected). Acceptable DFT ranges are defined in the specification—typically a <strong>minimum DFT</strong> (to ensure corrosion protection), a <strong>maximum DFT</strong> (to prevent cracking, extended cure time, solvent entrapment), and an <strong>average DFT</strong> requirement. Common acceptance: individual readings must be ≥80% of specified DFT, with average ≥100% and no more than 10% of readings below specified minimum. Over-thickness (typically &gt;1.5x specified DFT) can also cause problems and should be evaluated.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is holiday detection and when is it required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Holiday detection (also called discontinuity testing or pinhole detection) uses electrical methods to identify tiny breaks, pinholes, voids, or thin spots in coating films that could allow corrosion to initiate. <strong>Low voltage (67.5-90V) wet sponge</strong> detectors are used for coatings up to ~500 microns. <strong>High voltage DC (500V-35kV)</strong> detectors are used for thick coatings, tank linings, and pipeline coatings—voltage is calculated based on coating thickness per NACE SP0188. Holiday detection is typically required for: immersion service coatings, tank linings, underground pipeline coatings, high corrosivity environments (C4/C5), and as specified in project requirements. It's performed after coating cure and before commissioning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can coating be applied in any weather condition?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>No.</strong> Environmental conditions during coating application critically affect cure, adhesion, and performance. Standard requirements include: <strong>Surface temperature</strong> must be minimum 3°C (5°F) above dew point to prevent moisture condensation; <strong>Air temperature</strong> typically 5-40°C (varies by coating type); <strong>Relative humidity</strong> typically &lt;85%; No rain, fog, or visible moisture; Limited wind speed for spray application. Some specialized coatings have wider or narrower windows. Two-component coatings (epoxies, polyurethanes) are particularly sensitive. Coating inspectors continuously monitor conditions and advise when conditions are outside specification—protecting you from defective application that would void warranties.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What standards should my coating specification reference?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>This depends on project location, industry, and owner preference, but common frameworks include: <strong>ISO 12944</strong> (international standard covering all aspects from design to maintenance), <strong>NACE standards</strong> (widely used in oil & gas, pipelines, offshore—especially North America), <strong>SSPC standards</strong> (USA coating industry standards), and <strong>Regional/National standards</strong> (BS, AS, DIN, etc.). A robust specification should reference: surface preparation standard (SSPC-SP 10, ISO 8501-1 Sa 2½), surface profile requirement, environmental limits, coating system (manufacturer, product, DFT per coat), application method, inspection hold points, acceptance criteria, and testing requirements (DFT, holiday, adhesion). We can review or help develop specifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does a properly applied coating system last?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Coating life depends on: system selection (chemistry, number of coats, total DFT), surface preparation quality, application quality, environmental corrosivity, and maintenance. <strong>ISO 12944</strong> defines three durability ranges: Low (2-5 years), Medium (5-15 years), High (15-25 years), and very high (&gt;25 years). For industrial environments with high-quality systems (zinc-rich primer + epoxy + polyurethane, 300-500µm DFT), <strong>15-25+ year life is typical for C4/C5 environments</strong> when properly specified and applied. Immersion service and marine coatings with specialized high-build systems can also achieve 15-25+ years. Poor surface preparation or application defects can reduce expected life to 2-5 years or less—this is why professional inspection is essential.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What deliverables do you provide?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our comprehensive reporting packages include: <strong>Daily Inspection Reports</strong> (activities, conditions, measurements, NCRs), <strong>Photographic Documentation</strong> (surface condition, application, defects, testing), <strong>Environmental Data Logs</strong> (temperature, RH, dew point time-series), <strong>DFT Statistical Reports</strong> (per SSPC-PA 2 with individual readings, averages, histograms), <strong>Holiday Detection Records</strong> (voltage, areas tested, defects found/repaired), <strong>NCR Register</strong> (non-conformances, corrective actions, re-inspection), <strong>Material Certifications Review</strong>, <strong>Calibration Records</strong> (all instruments), and <strong>Final Acceptance Certificate</strong> with recommendations. All documentation is structured per NACE RP0287/SP0105, SSPC-QP requirements, and your project specifications. Digital and hard copy formats available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Protect Your Coating Investment with Professional Inspection</h2>
                <p>NACE/SSPC certified inspectors ready to support your project—from specification review through final acceptance</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Inspector Quotation</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Rapid Mobilization</span>
                    <span><i class="fas fa-check"></i> 24/7 Project Support</span>
                    <span><i class="fas fa-check"></i> Standards-Based Reporting</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Asset Integrity Services</h2>
                <p>Complete corrosion management and inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/specialized-inspection/cathodic-protection-survey.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Cathodic Protection Survey</h3>
                    <p>CP system testing, pipeline potential surveys, and corrosion control verification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/ut-thickness.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>Ultrasonic Thickness Testing</h3>
                    <p>Substrate thickness verification and corrosion monitoring beneath coatings</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/visual-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Inspection (VT)</h3>
                    <p>Coating condition assessment, defect documentation, and maintenance planning</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/specialized-inspection/tank-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Tank Inspection (API 653)</h3>
                    <p>Internal coating assessment as part of comprehensive tank integrity programs</p>
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