<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Post Weld Heat Treatment (PWHT) Services | Stress Relieving & Hydrogen Bake-out | Alpha Sonix NDT Solutions";
$meta_description = "Professional post weld heat treatment (PWHT) services including stress relieving, hydrogen bake-out, and thermal stress relief for pressure vessels, piping, and fabricated components. ASME compliant PWHT services.";
$meta_keywords = "post weld heat treatment, PWHT, stress relieving, hydrogen bake-out, thermal stress relief, weld heat treatment, ASME PWHT, local PWHT, furnace PWHT, weld stress relief";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/post-weld-heat-treatment.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/pwht-og.jpg">
    
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
        "serviceType": "Post Weld Heat Treatment (PWHT) Services",
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
        "description": "Professional post weld heat treatment (PWHT) services including stress relieving, hydrogen bake-out, and thermal stress relief for pressure vessels, piping systems, and fabricated components."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/pwht-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Post Weld Heat Treatment (PWHT)</span>
                </div>
                <h1 class="page-title">Post Weld Heat Treatment (PWHT)</h1>
                <p class="page-subtitle">Professional stress relieving, hydrogen bake-out, and thermal stress relief services for pressure vessels, piping systems, and fabricated components</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-tachometer-alt"></i> ASME Compliant</span>
                    <span class="badge"><i class="fas fa-thermometer-half"></i> Local & Furnace PWHT</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Temperature Recorders</span>
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
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3>Stress Relieving</h3>
                    <p>Reduction of residual stresses induced by welding to prevent stress corrosion cracking, distortion, and premature failure in service.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3>Hydrogen Bake-out</h3>
                    <p>Removal of diffusible hydrogen from weldments to prevent hydrogen-induced cracking (HIC) in susceptible materials and thick sections.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Local PWHT</h3>
                    <p>Targeted heat treatment of weld zones using ceramic pad heaters for large vessels, field piping, and components where furnace treatment is impractical.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Furnace PWHT</h3>
                    <p>Complete component heat treatment in controlled atmosphere furnaces for small to medium pressure vessels and fabricated assemblies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS POST WELD HEAT TREATMENT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">THERMAL STRESS RELIEF</span>
                    <h2>What is Post Weld Heat Treatment (PWHT)?</h2>
                    <p class="lead">Post Weld Heat Treatment (PWHT) is a controlled heating and cooling process applied to welded components to relieve residual stresses, improve mechanical properties, and prevent service-related failures.</p>
                    
                    <p>Welding induces significant residual stresses due to localized heating, melting, and solidification. These residual stresses can lead to stress corrosion cracking, hydrogen-induced cracking, distortion, and reduced fatigue life. PWHT reduces these stresses by allowing the material to relax at elevated temperatures below the critical transformation range.</p>

                    <p>Our PWHT services combine ASME code-compliant procedures, advanced temperature control systems, and experienced technicians to deliver precise heat treatment cycles for pressure vessels, piping, and fabricated components in shop and field environments.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Residual Stress Reduction</strong>
                                <p>PWHT reduces welding residual stresses by 70-90%, preventing stress corrosion cracking and improving dimensional stability during service.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Hydrogen Removal</strong>
                                <p>Controlled heating drives out diffusible hydrogen, preventing hydrogen-induced cracking in hardenable steels and thick weldments.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material Property Enhancement</strong>
                                <p>PWHT improves ductility, toughness, and tempering effects while relieving residual stresses for optimal service performance.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>ASME Code Compliance</strong>
                                <p>PWHT is mandatory per ASME Section VIII, ASME B31.3, and other codes for specific materials, thicknesses, and service conditions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for Weld Integrity:</strong>
                            <p>Untreated welds in thick sections or hardenable materials have failure rates 10-20x higher than properly PWHT welds. ASME codes mandate PWHT for carbon steel above 1.5" thickness, all chrome-moly alloys, and many other material/service combinations.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request PWHT Services</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/pwht-equipment.jpg" alt="PWHT Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Local PWHT using ceramic pad heaters with temperature control system</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">PWHT Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1200°C</span>
                            <span class="stat-label">Max Temperature</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">ASME</span>
                            <span class="stat-label">Code Compliant</span>
                        </div>
                    </div>
                    
                    <div class="pwht-benefits">
                        <h4><i class="fas fa-star"></i> PWHT Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Reduce residual stresses</li>
                            <li><i class="fas fa-check"></i> Prevent hydrogen cracking</li>
                            <li><i class="fas fa-check"></i> Improve toughness</li>
                            <li><i class="fas fa-check"></i> ASME code compliance</li>
                            <li><i class="fas fa-check"></i> Extend service life</li>
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
                <span class="section-label">WHY POST WELD HEAT TREATMENT MATTERS</span>
                <h2>Key Advantages of Professional PWHT Services</h2>
                <p>Ensure weld integrity, code compliance, and long-term service reliability</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Prevent Stress Corrosion Cracking</h3>
                    <p>PWHT reduces residual tensile stresses that drive stress corrosion cracking (SCC) in susceptible materials and corrosive service environments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Eliminate Hydrogen Cracking Risk</h3>
                    <p>Hydrogen bake-out removes diffusible hydrogen that causes cold cracking in hardenable steels, thick sections, and high-restraint joints.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>ASME & API Code Compliance</h3>
                    <p>Mandatory PWHT per ASME Section VIII Div 1 (UCS-56, UHT-56), ASME B31.3, API 582, and other codes for specific materials and thicknesses.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Improved Toughness & Ductility</h3>
                    <p>PWHT tempers hardened microstructures and improves impact toughness, ductility, and resistance to brittle fracture in service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Dimensional Stability</h3>
                    <p>Stress relief prevents distortion and dimensional changes during machining, fabrication, and service operations.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Extended Component Life</h3>
                    <p>Proper PWHT reduces fatigue crack initiation and propagation, extending service life of pressure vessels, piping, and structural components.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PWHT APPLICATIONS</span>
                <h2>Components Requiring Post Weld Heat Treatment</h2>
                <p>Comprehensive PWHT services for all code-mandated and client-specified applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pressure-vessels">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="piping">Piping Systems</button>
                    <button class="tab-btn" data-tab="structural">Structural Steel</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Alloys</button>
                </div>

                <div class="tabs-content">
                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel active" id="pressure-vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/vessel-pwht.jpg" alt="Pressure Vessel PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessel PWHT</h3>
                                <p>Complete furnace and local PWHT for pressure vessels, columns, reactors, and heat exchangers per ASME Section VIII Division 1 and Division 2 requirements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Carbon steel vessels (P-No. 1) above 1.5" (38mm) thickness</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly (P-No. 3,4,5) all thicknesses per ASME UCS-56</li>
                                    <li><i class="fas fa-check"></i> Stainless steel vessels requiring solution annealing</li>
                                    <li><i class="fas fa-check"></i> Clad and lined vessel PWHT</li>
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell weld PWHT</li>
                                    <li><i class="fas fa-check"></i> Attachment weld stress relief</li>
                                    <li><i class="fas fa-check"></i> Full vessel furnace PWHT and local weld PWHT</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">ASME UCS-56</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">EN 13445</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Piping Systems Tab -->
                    <div class="tab-panel" id="piping">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/pipe-pwht.jpg" alt="Pipe PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Piping System PWHT</h3>
                                <p>Local PWHT for piping butt welds, branch connections, and attachment welds per ASME B31.1, B31.3, and other piping codes.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Carbon steel pipe welds requiring PWHT per ASME B31.3</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly alloy pipe (P-No. 3,4,5) mandatory PWHT</li>
                                    <li><i class="fas fa-check"></i> High-temperature piping systems (creep service)</li>
                                    <li><i class="fas fa-check"></i> Sour service piping requiring hardness control</li>
                                    <li><i class="fas fa-check"></i> Field installed piping welds</li>
                                    <li><i class="fas fa-check"></i> Branch connection reinforcement pad welds</li>
                                    <li><i class="fas fa-check"></i> Socket weld and attachment PWHT</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.1</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ISO 15608</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Structural Steel Tab -->
                    <div class="tab-panel" id="structural">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/structural-pwht.jpg" alt="Structural PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Structural Steel & Heavy Fabrication</h3>
                                <p>Stress relief for heavy structural steel fabrications, crane components, and machinery bases to ensure dimensional stability.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Heavy structural steel weldments</li>
                                    <li><i class="fas fa-check"></i> Crane booms and components</li>
                                    <li><i class="fas fa-check"></i> Machinery bases and frames</li>
                                    <li><i class="fas fa-check"></i> Thick plate fabrications</li>
                                    <li><i class="fas fa-check"></i> Offshore module structures</li>
                                    <li><i class="fas fa-check"></i> Press frames and heavy equipment</li>
                                    <li><i class="fas fa-check"></i> Vibrating equipment supports</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">EN 1090</span>
                                    <span class="standard-tag">ISO 17663</span>
                                    <span class="standard-tag">Client Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Alloys Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/specialty-pwht.jpg" alt="Specialty Alloy PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty Alloy PWHT</h3>
                                <p>Precision heat treatment for high-alloy materials, stainless steels, nickel alloys, and other special materials.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stainless steel stress relief and solution annealing</li>
                                    <li><i class="fas fa-check"></i> Duplex and super duplex stainless steel</li>
                                    <li><i class="fas fa-check"></i> Nickel-based alloys (Inconel, Monel, Hastelloy)</li>
                                    <li><i class="fas fa-check"></i> Titanium and titanium alloys</li>
                                    <li><i class="fas fa-check"></i> Low temperature (cryogenic) service materials</li>
                                    <li><i class="fas fa-check"></i> Precipitation hardening alloys</li>
                                    <li><i class="fas fa-check"></i> Controlled atmosphere heat treatment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section II</span>
                                    <span class="standard-tag">ASTM Standards</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                    <span class="standard-tag">ISO 15156</span>
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
                <span class="section-label">COMPREHENSIVE PWHT SERVICES</span>
                <h2>Our Post Weld Heat Treatment Capabilities</h2>
                <p>Advanced equipment and experienced technicians for precise PWHT execution</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Local PWHT (Ceramic Pad Heating)</h3>
                    <p>Targeted local PWHT for weld zones using ceramic pad heaters with multi-zone temperature control for field and shop applications.</p>
                    <ul>
                        <li>Ceramic pad heaters (various sizes)</li>
                        <li>Multi-zone temperature controllers (up to 24 zones)</li>
                        <li>Thermocouple placement per code requirements</li>
                        <li>Insulation systems for thermal efficiency</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Furnace PWHT</h3>
                    <p>Complete component heat treatment in controlled atmosphere furnaces for pressure vessels and fabricated assemblies.</p>
                    <ul>
                        <li>Furnace capacities up to 6m x 6m x 20m</li>
                        <li>Temperature range ambient to 1200°C</li>
                        <li>Controlled heating and cooling rates</li>
                        <li>Complete temperature recording and certification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Hydrogen Bake-out</h3>
                    <p>Preheating and post-heating cycles to remove diffusible hydrogen and prevent hydrogen-induced cracking.</p>
                    <ul>
                        <li>Preheat and interpass temperature control</li>
                        <li>Post-heating (hydrogen bake-out) cycles</li>
                        <li>Specialized procedures for hardenable steels</li>
                        <li>Thick section and high-restraint applications</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Temperature Monitoring & Recording</h3>
                    <p>Precision temperature control and permanent recording for code compliance and quality documentation.</p>
                    <ul>
                        <li>Digital temperature controllers and recorders</li>
                        <li>Calibrated thermocouples (Type K, J, N, S, R)</li>
                        <li>Real-time temperature monitoring</li>
                        <li>Printable time-temperature charts for certification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>PWHT Procedure Development</h3>
                    <p>Qualification of PWHT procedures per ASME Section IX and applicable codes for specific material and thickness combinations.</p>
                    <ul>
                        <li>PWHT procedure qualification (WPQR)</li>
                        <li>Soaking temperature and time determination</li>
                        <li>Heating and cooling rate calculation</li>
                        <li>Hardness testing verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Post-PWHT Testing & Verification</h3>
                    <p>Verification testing to confirm PWHT effectiveness and code compliance.</p>
                    <ul>
                        <li>Hardness testing (HRC, HB, HV)</li>
                        <li>Residual stress measurement (where required)</li>
                        <li>Microstructure evaluation</li>
                        <li>Documentation and certification packages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PWHT PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">PWHT PROCESS</span>
                    <h2>Our PWHT Execution Workflow</h2>
                    <p>Systematic approach ensuring code compliance and precise heat treatment cycles for all components.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Procedure & Planning</h4>
                                <p>Review of material specifications, code requirements, and PWHT procedure development or verification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Thermocouple Installation</h4>
                                <p>Placement of calibrated thermocouples per code requirements for accurate temperature monitoring.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Heater Installation & PWHT Execution</h4>
                                <p>Ceramic pad or furnace heating system setup and controlled heating/soaking/cooling cycle execution.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation & Certification</h4>
                                <p>Time-temperature charts, hardness test results, and complete certification package for code compliance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Compliance</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                            <img src="/www/assets/images/certs/api-cert.png" alt="API">
                            <img src="/www/assets/images/certs/ndtt-cert.png" alt="NDTT">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/pwht-workflow.jpg" alt="PWHT Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View PWHT Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>ASME Code Compliant</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Multi-Zone Control</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibrated Equipment</span>
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

    <!-- ===================== PWHT CODE REQUIREMENTS ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CODE REQUIREMENTS</span>
                <h2>ASME PWHT Requirements by Material</h2>
                <p>Mandatory PWHT thickness thresholds per ASME Section VIII and B31.3</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Steel (P-No. 1)</h3>
                    <p>PWHT required when nominal thickness exceeds 1.5" (38mm). Exemptions for thinner sections with preheat and specific service conditions per ASME UCS-56.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon-Moly (P-No. 3)</h3>
                    <p>PWHT required for all thicknesses above 0.5" (13mm). Mandatory stress relief for all pressure retaining welds in this material group.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Chrome-Moly (P-No. 4 & 5)</h3>
                    <p>PWHT mandatory for ALL thicknesses including tack welds. Critical for 1.25Cr through 9Cr alloys used in high-temperature service.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stainless Steel (P-No. 7, 8)</h3>
                    <p>PWHT requirements vary by grade: stress relief (480-620°C) for martensitic, solution annealing (1010-1120°C) for austenitic.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Nickel Alloys (P-No. 41-49)</h3>
                    <p>PWHT requirements depend on alloy composition and service conditions. Solution annealing or stress relief per material specification.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sour Service (NACE MR0175)</h3>
                    <p>Hardness limits require PWHT for many materials in H₂S service. Maximum hardness typically 22-26 HRC depending on material and standard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Post Weld Heat Treatment Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When is PWHT required by ASME codes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME Section VIII requires PWHT for carbon steel pressure vessels above 1.5" (38mm) thickness. ASME B31.3 requires PWHT for carbon steel piping above 0.75" (19mm) thickness. Chrome-moly alloys (P-No. 3,4,5) require PWHT for ALL thicknesses including tack welds.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between local and furnace PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Local PWHT uses ceramic pad heaters to heat only the weld zone and surrounding area—used for large vessels, field piping, and components that cannot fit in a furnace. Furnace PWHT heats the entire component in a controlled atmosphere furnace—used for smaller vessels and assemblies requiring uniform heating.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are typical PWHT soaking temperatures?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Carbon steel: 595-650°C (1100-1200°F). Chrome-moly (1.25Cr): 675-705°C (1250-1300°F). Chrome-moly (2.25Cr): 690-705°C (1275-1300°F). Stainless steel stress relief: 480-620°C (900-1150°F). Stainless solution anneal: 1010-1120°C (1850-2050°F).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How is PWHT soaking time determined?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Soaking time is typically 1 hour per inch (25mm) of thickness minimum, with minimum 15-30 minutes for thin sections. ASME codes specify minimum soaking times based on material group and thickness.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What heating and cooling rates are allowed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Heating rate: maximum 200°C (400°F) per hour divided by thickness in inches (220°C/hour max for thin sections). Cooling rate: maximum 260°C (500°F) per hour divided by thickness in inches. Rates are controlled to prevent thermal shock and distortion.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is hydrogen bake-out and when is it needed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Hydrogen bake-out is a post-heating treatment (typically 200-400°C for 2-4 hours) that removes diffusible hydrogen from welds. It is required for hardenable steels, thick sections, high-restraint joints, and when low-hydrogen practices cannot be maintained.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can PWHT be performed more than once?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, multiple PWHT cycles are allowed provided the total time at temperature does not degrade material properties. Repair welds on PWHT components often require additional PWHT cycles. Our engineers evaluate cumulative PWHT effects per code rules.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What verification testing is performed after PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Verification typically includes hardness testing (HRC/HB/HV) to confirm proper stress relief and code compliance. Additional testing may include PMI, ferrite measurement (stainless), or microstructure evaluation depending on requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ensure Code-Compliant Weld Stress Relief</h2>
                <p>Contact our PWHT specialists for professional post weld heat treatment services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:pwht@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email PWHT Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> ASME Code Compliant</span>
                    <span><i class="fas fa-check"></i> Local & Furnace PWHT</span>
                    <span><i class="fas fa-check"></i> Complete Documentation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Heat Treatment & Inspection Services</h2>
                <p>Comprehensive thermal processing and quality assurance solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/industrial-heat-treatment/preheating-services.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Preheating Services</h3>
                    <p>Controlled preheating for weld crack prevention</p>
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