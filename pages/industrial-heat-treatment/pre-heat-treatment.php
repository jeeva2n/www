<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Preheating Services | Weld Preheating & Induction Heating | Alpha Sonix NDT Solutions";
$meta_description = "Professional preheating services for welding applications including induction preheating, resistance preheating, and gas preheating for pipe, vessel, and structural welding. Prevent hydrogen cracking and ensure weld quality.";
$meta_keywords = "preheating services, weld preheating, induction preheating, resistance preheating, pipe preheating, preheat temperature control, hydrogen crack prevention, weld preheat, interpass temperature control";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/preheating-services.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/preheating-og.jpg">
    
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
        "serviceType": "Preheating Services for Welding",
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
        "description": "Professional preheating services for welding applications including induction, resistance, and gas preheating systems preventing hydrogen cracking and ensuring weld quality."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/preheating-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Preheating Services</span>
                </div>
                <h1 class="page-title">Preheating Services for Welding</h1>
                <p class="page-subtitle">Professional induction, resistance, and gas preheating systems preventing hydrogen cracking and ensuring weld quality for pipe, vessel, and structural applications</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-bolt"></i> Induction Preheating</span>
                    <span class="badge"><i class="fas fa-fire"></i> Resistance Preheating</span>
                    <span class="badge"><i class="fas fa-thermometer-half"></i> Interpass Control</span>
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
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Induction Preheating</h3>
                    <p>Fast, efficient, and precise induction heating for pipe welding, vessel nozzles, and critical applications requiring rapid temperature control.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Resistance Preheating</h3>
                    <p>Ceramic pad resistance heating for localized preheat and interpass temperature control on complex geometries and field welding.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Interpass Temperature Control</h3>
                    <p>Precision monitoring and control of interpass temperatures to prevent hydrogen cracking and ensure consistent weld properties.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Temperature Monitoring</h3>
                    <p>Real-time temperature data logging with thermocouples and infrared sensors for complete preheat cycle documentation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS WELD PREHEATING ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">WELD PREHEAT TECHNOLOGY</span>
                    <h2>What is Weld Preheating?</h2>
                    <p class="lead">Weld preheating is the controlled application of heat to base material before and during welding to slow cooling rates, reduce hydrogen cracking risk, and ensure proper weld metal properties.</p>
                    
                    <p>Preheating is essential for welding thick sections, hardenable steels, and materials susceptible to hydrogen-induced cracking. By raising the base material temperature before welding, preheating reduces the temperature differential between the weld and base material, slowing cooling rates and allowing hydrogen to diffuse out of the weld zone.</p>

                    <p>Our preheating services combine multiple heating technologies—induction, resistance, and gas—with precision temperature control systems to deliver consistent, code-compliant preheat for pipe, vessel, and structural welding applications in shop and field environments.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Hydrogen Crack Prevention</strong>
                                <p>Proper preheating slows cooling rates, allowing hydrogen to diffuse out of the weld zone before cracking can occur—reducing HAZ and weld metal cracking risk by 80-95%.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Reduced Thermal Stress</strong>
                                <p>Preheating minimizes temperature differential between weld and base material, reducing residual stresses and distortion in the finished weldment.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Improved Weld Properties</strong>
                                <p>Controlled cooling produces optimal weld microstructure, improving toughness, ductility, and resistance to service-related failures.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code Compliance</strong>
                                <p>ASME, API, and AWS codes mandate minimum preheat temperatures based on material P-Number, thickness, and hydrogen level.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for Weld Integrity:</strong>
                            <p>Welds made without proper preheat in hardenable steels have hydrogen cracking rates of 15-30%. Proper preheat reduces cracking rates to less than 1%. ASME, API, and AWS codes mandate minimum preheat temperatures for specific material and thickness combinations.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Preheating Services</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/induction-preheating.jpg" alt="Induction Preheating">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Induction preheating system for pipe welding with temperature control panel</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500°C</span>
                            <span class="stat-label">Max Preheat Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">95%</span>
                            <span class="stat-label">Crack Reduction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">ASME</span>
                            <span class="stat-label">Code Compliant</span>
                        </div>
                    </div>
                    
                    <div class="preheat-benefits">
                        <h4><i class="fas fa-star"></i> Preheating Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Prevent hydrogen cracking</li>
                            <li><i class="fas fa-check"></i> Reduce residual stresses</li>
                            <li><i class="fas fa-check"></i> Improve weld toughness</li>
                            <li><i class="fas fa-check"></i> Code compliance</li>
                            <li><i class="fas fa-check"></i> Faster welding speeds</li>
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
                <span class="section-label">WHY PROFESSIONAL PREHEATING MATTERS</span>
                <h2>Key Advantages of Controlled Weld Preheating</h2>
                <p>Ensure crack-free welds and code compliance with proper preheat control</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Hydrogen Cracking Prevention</h3>
                    <p>Proper preheat slows cooling rate, allowing hydrogen to diffuse safely from the weld zone before cracking can initiate—reducing failure risk by 95%.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Reduced Residual Stresses</h3>
                    <p>Minimized temperature differential between weld and base material reduces shrinkage stresses, distortion, and service-related stress corrosion cracking.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Improved Weld Toughness</h3>
                    <p>Controlled cooling produces optimal microstructure in the weld metal and HAZ, improving impact toughness and ductility.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>ASME/API Code Compliance</h3>
                    <p>Meet mandatory preheat requirements per ASME Section VIII, ASME B31.3, API 1104, and AWS D1.1 with documented temperature control.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Faster Welding Speeds</h3>
                    <p>Proper preheat allows higher heat input welding without cracking risk, increasing deposition rates and reducing project duration.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Reduced PWHT Requirements</h3>
                    <p>Proper preheat can reduce or eliminate the need for post weld heat treatment in some code applications, saving time and cost.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PREHEATING APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>Professional preheating services for all welding applications requiring temperature control</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="piping">Piping & Pipeline</button>
                    <button class="tab-btn" data-tab="pressure-vessels">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="structural">Structural Steel</button>
                    <button class="tab-btn" data-tab="heavy-fab">Heavy Fabrication</button>
                </div>

                <div class="tabs-content">
                    <!-- Piping & Pipeline Tab -->
                    <div class="tab-panel active" id="piping">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/pipe-preheating.jpg" alt="Pipe Preheating">
                            </div>
                            <div class="tab-text">
                                <h3>Pipe & Pipeline Welding Preheating</h3>
                                <p>Induction and resistance preheating for pipe butt welds, branch connections, and flange attachments in shop and field environments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Induction preheating for rapid, uniform pipe heating</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly alloy pipe preheat (P-No. 3,4,5 materials)</li>
                                    <li><i class="fas fa-check"></i> Thick wall carbon steel pipe (1" and above)</li>
                                    <li><i class="fas fa-check"></i> Subsea and offshore pipeline welding</li>
                                    <li><i class="fas fa-check"></i> Repair welding preheat on in-service piping</li>
                                    <li><i class="fas fa-check"></i> Socket weld and attachment preheating</li>
                                    <li><i class="fas fa-check"></i> Low temperature service material preheat</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ASME B31.1</span>
                                    <span class="standard-tag">ISO 13916</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel" id="pressure-vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/vessel-preheat.jpg" alt="Vessel Preheating">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessel & Tank Preheating</h3>
                                <p>Local and full-section preheating for pressure vessel shell seams, head-to-shell joints, and nozzle attachments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Chrome-moly reactor and column preheat</li>
                                    <li><i class="fas fa-check"></i> Carbon steel vessel preheat for thick sections</li>
                                    <li><i class="fas fa-check"></i> Stainless steel preheat (when required)</li>
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell weld preheating</li>
                                    <li><i class="fas fa-check"></i> Attachment and support weld preheat</li>
                                    <li><i class="fas fa-check"></i> Clad and lined vessel preheat</li>
                                    <li><i class="fas fa-check"></i> Field erected tank preheating</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 650/653</span>
                                    <span class="standard-tag">EN 13445</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Structural Steel Tab -->
                    <div class="tab-panel" id="structural">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/structural-preheat.jpg" alt="Structural Preheating">
                            </div>
                            <div class="tab-text">
                                <h3>Structural Steel & Heavy Section Welding</h3>
                                <p>Preheating for thick structural steel sections, heavy weldments, and code-compliant structural fabrication.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Heavy structural beam and column welding</li>
                                    <li><i class="fas fa-check"></i> Thick plate butt and fillet welds</li>
                                    <li><i class="fas fa-check"></i> Bridge and infrastructure welding</li>
                                    <li><i class="fas fa-check"></i> Offshore module and platform welding</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment fabrication</li>
                                    <li><i class="fas fa-check"></i> Low alloy high strength steel welding</li>
                                    <li><i class="fas fa-check"></i> Weld repair on heavy castings and forgings</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">AWS D1.5</span>
                                    <span class="standard-tag">EN 1090</span>
                                    <span class="standard-tag">ISO 17663</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Heavy Fabrication Tab -->
                    <div class="tab-panel" id="heavy-fab">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/heavy-fab-preheat.jpg" alt="Heavy Fabrication Preheating">
                            </div>
                            <div class="tab-text">
                                <h3>Heavy Fabrication & Specialty Alloys</h3>
                                <p>Precision preheating for heavy fabrications, hardenable steels, and specialty alloy welding applications.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Induction preheat for thick wall nozzles and fittings</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly and low alloy steel preheat</li>
                                    <li><i class="fas fa-check"></i> Quenched and tempered steel welding</li>
                                    <li><i class="fas fa-check"></i> Nickel alloy and stainless steel preheat</li>
                                    <li><i class="fas fa-check"></i> Dissimilar metal welding preheat</li>
                                    <li><i class="fas fa-check"></i> Field repair welding on operating equipment</li>
                                    <li><i class="fas fa-check"></i> Preheat for buttering and cladding applications</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section IX</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                    <span class="standard-tag">API 582</span>
                                    <span class="standard-tag">Client Specifications</span>
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
                <span class="section-label">COMPREHENSIVE PREHEATING SERVICES</span>
                <h2>Our Preheat & Interpass Control Capabilities</h2>
                <p>Advanced heating systems and precision temperature control for all welding applications</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Induction Preheating Systems</h3>
                    <p>High-frequency induction heating for fast, efficient, and precise preheat of pipes, fittings, and localized areas.</p>
                    <ul>
                        <li>Rapid heating (up to 200°C/minute)</li>
                        <li>Uniform circumferential heating</li>
                        <li>No open flame or hot surfaces</li>
                        <li>Ideal for pipe welding and nozzle preheat</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Resistance (Ceramic Pad) Heating</h3>
                    <p>Ceramic pad resistance heating for complex geometries, vessels, and field welding applications requiring localized heat.</p>
                    <ul>
                        <li>Multi-zone temperature control</li>
                        <li>Flexible pad configurations</li>
                        <li>Suitable for all positions</li>
                        <li>Ideal for heavy section and vessel work</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Interpass Temperature Control</h3>
                    <p>Precision monitoring and control of interpass temperatures throughout the welding process to prevent cracking.</p>
                    <ul>
                        <li>Real-time temperature monitoring</li>
                        <li>Digital temperature recording</li>
                        <li>Alarm systems for temperature deviation</li>
                        <li>Documentation for code compliance</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Gas & Torch Preheating</h3>
                    <p>Portable gas preheating systems for field applications, small repairs, and areas with limited power access.</p>
                    <ul>
                        <li>Multiple torch configurations</li>
                        <li>Portable and field-deployable</li>
                        <li>Temperature indicating crayons and meters</li>
                        <li>Suitable for remote locations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Temperature Monitoring & Recording</h3>
                    <p>Complete temperature monitoring and data logging for preheat cycle documentation and code compliance.</p>
                    <ul>
                        <li>Calibrated thermocouples (Type K, J)</li>
                        <li>Infrared temperature measurement</li>
                        <li>Digital temperature recorders</li>
                        <li>Time-temperature charts for documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Preheat Procedure Development</h3>
                    <p>Qualification and development of preheat procedures for specific material and welding applications.</p>
                    <ul>
                        <li>Minimum preheat temperature determination</li>
                        <li>Heat input and cooling rate calculations</li>
                        <li>Hydrogen cracking susceptibility assessment</li>
                        <li>Procedure qualification documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PREHEAT PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">PREHEAT PROCESS</span>
                    <h2>Our Weld Preheating Workflow</h2>
                    <p>Systematic approach ensuring consistent preheat and interpass temperature control for all welding applications.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Procedure & Planning</h4>
                                <p>Review of material specifications, code requirements, and preheat procedure determination based on thickness and material group.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Heater Installation & Thermocouple Placement</h4>
                                <p>Installation of induction coils, ceramic pads, or gas torches with thermocouples per code requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Preheat Application & Interpass Control</h4>
                                <p>Controlled heating to specified preheat temperature with continuous interpass monitoring during welding.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation & Certification</h4>
                                <p>Temperature records, thermocouple placement diagrams, and certification for code compliance documentation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Equipment & Certifications</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                            <img src="/www/assets/images/certs/api-cert.png" alt="API">
                            <img src="/www/assets/images/certs/aws-cert.png" alt="AWS">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/preheat-workflow.jpg" alt="Preheat Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Preheat Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>ASME/API Compliant</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Induction & Resistance Systems</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Real-Time Temperature Control</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Complete Documentation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CODE PREHEAT REQUIREMENTS ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CODE REQUIREMENTS</span>
                <h2>ASME/API Minimum Preheat Temperatures</h2>
                <p>Code-mandated preheat requirements by material group per ASME Section VIII and B31.3</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Steel (P-No. 1)</h3>
                    <p>Minimum preheat: 50-100°C (125-200°F) depending on thickness, carbon equivalent, and hydrogen level. Thicker sections require higher preheat.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon-Moly (P-No. 3)</h3>
                    <p>Minimum preheat: 150-200°C (300-400°F). Required for all thicknesses due to hardenability of these low alloy steels.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Chrome-Moly (P-No. 4 & 5)</h3>
                    <p>Minimum preheat: 150-260°C (300-500°F). P-No. 5B materials (9Cr) require preheat up to 260°C (500°F) minimum.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stainless Steel (P-No. 7,8)</h3>
                    <p>Preheat typically not required for austenitic. Martensitic stainless requires 150-260°C (300-500°F) preheat to prevent cracking.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Quenched & Tempered Steels</h3>
                    <p>Preheat typically 100-150°C (200-300°F). Maximum interpass temperature control critical to avoid tempering and strength loss.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sour Service (NACE)</h3>
                    <p>Minimum preheat 100°C (200°F) typical. Combined with hardness control and PWHT to meet NACE MR0175 requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Weld Preheating Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When is preheating required for welding?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Preheating is required when mandated by applicable codes (ASME, API, AWS) based on material type, thickness, and service conditions. General requirements include carbon steel above 1" thickness, all chrome-moly alloys, and materials with carbon equivalent >0.40.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between preheat and interpass temperature?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Preheat is the temperature of the base material before welding begins. Interpass temperature is the minimum temperature maintained between successive weld passes. Interpass must be at least the preheat temperature and may have a maximum limit to prevent property degradation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the different preheating methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Main methods include: Induction heating (fast, precise, no flame), Resistance heating (ceramic pads for complex geometries), Gas heating (torches for field work), and Ovens (furnace preheat for small components). We select method based on application requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is preheat temperature measured?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Preheat temperature is measured using calibrated thermocouples attached to the base material (preferred method) or temperature indicating crayons/meters. Thermocouples provide continuous monitoring and recording for code compliance.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How wide should the preheat band be?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Preheat band should extend at least 3 inches (75mm) from the weld joint in all directions. Thicker sections or hardenable materials may require wider bands up to 6 inches (150mm) from the weld centerline.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can preheat be applied to in-service equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, preheat can be applied to in-service equipment for repair welding with proper safety precautions. We ensure proper heat control to prevent damage to process fluids, coatings, or adjacent equipment during preheat application.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What happens if preheat is too high?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Excessive preheat can cause grain growth, reduced toughness, oxidation, distortion, and may violate code maximum interpass temperature limits. Some materials (quenched & tempered steels) have strict maximum interpass temperatures to prevent strength loss.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do stainless steels require preheating?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Austenitic stainless steels (304, 316) typically do not require preheat. Martensitic stainless steels (410, 416) require preheat (150-260°C) to prevent cracking. Duplex stainless preheat is generally limited to 100°C maximum to avoid intermetallic phase formation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Crack-Free Welds with Proper Preheat</h2>
                <p>Contact our preheating specialists for professional weld preheat and interpass temperature control services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:preheat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Preheat Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Induction & Resistance Systems</span>
                    <span><i class="fas fa-check"></i> ASME/API Compliant</span>
                    <span><i class="fas fa-check"></i> Real-Time Temperature Control</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Heat Treatment & Welding Services</h2>
                <p>Comprehensive thermal processing and quality assurance solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/industrial-heat-treatment/post-weld-heat-treatment.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Post Weld Heat Treatment</h3>
                    <p>Stress relieving and PWHT services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/solution-annealing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Solution Annealing</h3>
                    <p>Full solution anneal for stainless steel</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/fire-safety-equipment/welding-fabrication-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Welding Inspection</h3>
                    <p>AWS CWI certified weld inspection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/pipeline-process-equipment-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pipeline & Process Equipment</h3>
                    <p>Mechanical integrity inspection</p>
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