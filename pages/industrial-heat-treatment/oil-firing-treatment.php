<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Oil Firing Heat Treatment Services | Fuel-Fired Stress Relieving | Alpha Sonix NDT Solutions";
$meta_description = "Professional oil firing heat treatment services including fuel-fired stress relieving, localized PWHT, and thermal processing using oil-fired burners for large field fabrications, pressure vessels, and pipeline girth welds.";
$meta_keywords = "oil firing heat treatment, fuel-fired stress relieving, oil-fired PWHT, flame heating stress relief, thermal stress relief, field heat treatment, pipeline stress relieving, large vessel PWHT";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/oil-firing-heat-treatment.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/oil-firing-og.jpg">
    
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
        "serviceType": "Oil Firing Heat Treatment Services",
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
        "description": "Professional oil firing heat treatment services including fuel-fired stress relieving and PWHT for large field fabrications, pressure vessels, and pipeline girth welds."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/oil-firing-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Oil Firing Heat Treatment</span>
                </div>
                <h1 class="page-title">Oil Firing Heat Treatment Services</h1>
                <p class="page-subtitle">Professional fuel-fired stress relieving and localized PWHT using oil-fired burner systems for large field fabrications, pressure vessels, pipeline girth welds, and components requiring high-temperature thermal processing</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-fire"></i> Fuel-Fired Heating</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Field Capable</span>
                    <span class="badge"><i class="fas fa-chart-bar"></i> High Temperature Range</span>
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
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Fuel-Fired Stress Relieving</h3>
                    <p>High-capacity oil-fired burner systems for stress relief of large fabrications, pressure vessels, and field welds.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Field PWHT Capability</h3>
                    <p>Portable oil-fired systems enable on-site post-weld heat treatment for pipeline girth welds and large field assemblies.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>High Temperature Range</h3>
                    <p>Oil-fired systems achieve temperatures up to 1000°C (1832°F) for solution annealing and high-temperature PWHT.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Large Component Capacity</h3>
                    <p>No size limitations—ideal for very large vessels, storage tanks, pipeline sections, and heavy fabrications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS OIL FIRING HEAT TREATMENT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">FUEL-FIRED THERMAL PROCESSING</span>
                    <h2>What is Oil Firing Heat Treatment?</h2>
                    <p class="lead">Oil firing heat treatment is a fuel-based thermal processing method using oil-fired burners to heat large components, field fabrications, and pressure vessels for stress relieving, PWHT, and other heat treatment applications where electric systems are impractical due to size or power availability constraints.</p>
                    
                    <p>Electric resistance heating (ceramic pads) has practical size limitations and requires significant electrical power. For very large vessels, storage tanks, and field pipeline applications, oil-fired heating provides a cost-effective, high-capacity alternative with no practical size limitations.</p>

                    <p>Our oil firing heat treatment services use diesel-fired burner systems with precise temperature control, thermocouple monitoring, and insulation systems to deliver code-compliant stress relief and PWHT for large components and field applications.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>No Size Limitations</strong>
                                <p>Oil-fired systems can heat components of any size—ideal for very large pressure vessels, storage tanks, and pipeline sections where electric systems are impractical.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Independent Power Source</strong>
                                <p>Fuel-fired systems operate independently of electrical power availability—ideal for remote field locations and construction sites with limited electrical infrastructure.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High Heating Capacity</strong>
                                <p>Multiple burner configurations provide rapid heating and uniform temperature distribution across large surface areas.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code-Compliant Control</strong>
                                <p>Precision temperature control with thermocouple feedback and digital recording meets ASME, API, and client specifications.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-fire"></i>
                        <div>
                            <strong>Ideal for Very Large Components:</strong>
                            <p>Oil firing heat treatment eliminates size limitations of electric systems. For field-erected vessels over 5m diameter, storage tanks, and long pipeline sections, oil-fired systems provide the only practical solution for code-compliant stress relief. Up to 80% cost savings compared to electric heating for very large components.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Oil Firing Quote</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/oil-firing-system.jpg" alt="Oil Firing System">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Oil-fired burner system for field PWHT of large pressure vessel</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1000°C</span>
                            <span class="stat-label">Max Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">No Limit</span>
                            <span class="stat-label">Component Size</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">80%</span>
                            <span class="stat-label">Cost Saving vs Electric</span>
                        </div>
                    </div>
                    
                    <div class="oil-firing-benefits">
                        <h4><i class="fas fa-star"></i> Oil Firing Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> No size limitations</li>
                            <li><i class="fas fa-check"></i> Field capable</li>
                            <li><i class="fas fa-check"></i> Independent power source</li>
                            <li><i class="fas fa-check"></i> High heating capacity</li>
                            <li><i class="fas fa-check"></i> Cost-effective for large components</li>
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
                <span class="section-label">WHY OIL FIRING HEAT TREATMENT</span>
                <h2>Key Advantages of Fuel-Fired Thermal Processing</h2>
                <p>Practical, cost-effective heat treatment for very large components</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Unlimited Component Size</h3>
                    <p>Oil-fired systems have no practical size limitations—ideal for very large pressure vessels, storage tanks, and heavy fabrications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Field Capable</h3>
                    <p>Portable systems enable on-site PWHT for field-erected vessels, pipeline girth welds, and remote construction sites.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Independent Power Source</h3>
                    <p>Fuel-fired operation eliminates dependence on electrical power availability—ideal for remote locations and sites with limited electrical capacity.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>High Heating Capacity</h3>
                    <p>Multiple burner configurations provide rapid heating rates and uniform temperature distribution across large surface areas.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective for Large Components</h3>
                    <p>Oil firing costs 40-80% less than electric systems for very large components due to lower equipment and fuel costs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Precision temperature control with thermocouple monitoring meets ASME Section VIII, ASME B31.3, and API requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">OIL FIRING APPLICATIONS</span>
                <h2>Applications Requiring Oil-Fired Heat Treatment</h2>
                <p>Fuel-fired thermal processing for very large components and field applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pressure-vessels">Large Pressure Vessels</button>
                    <button class="tab-btn" data-tab="storage-tanks">Storage Tanks</button>
                    <button class="tab-btn" data-tab="pipeline">Pipeline & Piping</button>
                    <button class="tab-btn" data-tab="field-fab">Field Fabrications</button>
                </div>

                <div class="tabs-content">
                    <!-- Large Pressure Vessels Tab -->
                    <div class="tab-panel active" id="pressure-vessels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/vessel-oil-firing.jpg" alt="Vessel Oil Firing">
                            </div>
                            <div class="tab-text">
                                <h3>Large Pressure Vessel PWHT</h3>
                                <p>Oil-fired stress relief for very large pressure vessels, columns, reactors, and heat exchangers that cannot be furnace treated.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Field-erected pressure vessels (any diameter)</li>
                                    <li><i class="fas fa-check"></i> Heavy-wall reactor and column stress relief</li>
                                    <li><i class="fas fa-check"></i> Large diameter heat exchanger shells</li>
                                    <li><i class="fas fa-check"></i> Thick wall pressure vessel circumferential seams</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly vessel PWHT (P-No. 3,4,5 materials)</li>
                                    <li><i class="fas fa-check"></i> Post-weld heat treatment of vessel attachments</li>
                                    <li><i class="fas fa-check"></i> Sour service vessel PWHT per NACE MR0175</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Tanks Tab -->
                    <div class="tab-panel" id="storage-tanks">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/tank-oil-firing.jpg" alt="Tank Oil Firing">
                            </div>
                            <div class="tab-text">
                                <h3>Storage Tank Stress Relieving</h3>
                                <p>Fuel-fired stress relief for large storage tanks, spheres, and bullet tanks per API 650/653 requirements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Field-erected storage tank shell seams</li>
                                    <li><i class="fas fa-check"></i> Tank bottom and annular plate welds</li>
                                    <li><i class="fas fa-check"></i> Spherical tank (propane, butane) stress relief</li>
                                    <li><i class="fas fa-check"></i> Bullet tank and horizontal pressure vessel</li>
                                    <li><i class="fas fa-check"></i> Tank nozzle and attachment welds</li>
                                    <li><i class="fas fa-check"></i> Repair weld stress relief on existing tanks</li>
                                    <li><i class="fas fa-check"></i> Large diameter piping and headers</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 650/653</span>
                                    <span class="standard-tag">API 620</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">AWWA D100</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pipeline & Piping Tab -->
                    <div class="tab-panel" id="pipeline">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/pipeline-oil-firing.jpg" alt="Pipeline Oil Firing">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline & Large Bore Piping PWHT</h3>
                                <p>Oil-fired PWHT for pipeline girth welds, large diameter piping, and high-pressure pipeline systems.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Onshore and offshore pipeline girth welds</li>
                                    <li><i class="fas fa-check"></i> Large diameter (24"+) pipe butt welds</li>
                                    <li><i class="fas fa-check"></i> High-pressure gas pipeline PWHT</li>
                                    <li><i class="fas fa-check"></i> Sour service pipeline NACE MR0175 compliance</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly alloy pipe PWHT</li>
                                    <li><i class="fas fa-check"></i> Pipeline repair and modification welds</li>
                                    <li><i class="fas fa-check"></i> Subsea pipeline girth weld heat treatment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.3/B31.4/B31.8</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                    <span class="standard-tag">CSA Z662</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Field Fabrications Tab -->
                    <div class="tab-panel" id="field-fab">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/field-oil-firing.jpg" alt="Field Oil Firing">
                            </div>
                            <div class="tab-text">
                                <h3>Heavy Field Fabrications & Structures</h3>
                                <p>Fuel-fired stress relief for large structural fabrications, offshore modules, and heavy equipment assemblies.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Offshore platform module stress relief</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment and machinery base frames</li>
                                    <li><i class="fas fa-check"></i> Large structural weldments and trusses</li>
                                    <li><i class="fas fa-check"></i> Mining equipment fabrications</li>
                                    <li><i class="fas fa-check"></i> Crane booms and heavy lift components</li>
                                    <li><i class="fas fa-check"></i> Power plant equipment supports</li>
                                    <li><i class="fas fa-check"></i> Repair stress relief on in-service equipment</li>
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
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OUR SERVICES ===================== -->
    <section class="services-offering" id="services">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPREHENSIVE OIL FIRING SERVICES</span>
                <h2>Our Oil Firing Heat Treatment Capabilities</h2>
                <p>High-capacity fuel-fired systems for large component thermal processing</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Localized Oil-Fired PWHT</h3>
                    <p>Targeted stress relief using oil-fired burner systems for specific weld zones and localized areas on large components.</p>
                    <ul>
                        <li>Portable burner systems</li>
                        <li>Multi-burner configurations</li>
                        <li>Thermocouple temperature control</li>
                        <li>Insulation for thermal efficiency</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Full Vessel Stress Relieving</h3>
                    <p>Complete stress relief of entire pressure vessels and storage tanks using multiple burner systems and insulation.</p>
                    <ul>
                        <li>Internal or external heating options</li>
                        <li>Uniform temperature distribution</li>
                        <li>Controlled heating and cooling rates</li>
                        <li>Full documentation per code</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Pipeline Girth Weld PWHT</h3>
                    <p>Oil-fired PWHT for pipeline girth welds including field joints and repair welds.</p>
                    <ul>
                        <li>Circumferential burner systems</li>
                        <li>Rapid heating rates</li>
                        <li>Controlled cooling</li>
                        <li>Suitable for remote locations</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Solution Annealing (Fuel-Fired)</h3>
                    <p>High-temperature solution treatment for stainless steel vessels and components up to 1000°C.</p>
                    <ul>
                        <li>Temperature up to 1000°C (1832°F)</li>
                        <li>Controlled atmosphere with insulation</li>
                        <li>Rapid cooling capability</li>
                        <li>For austenitic stainless and nickel alloys</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Preheating & Post-Heating</h3>
                    <p>Oil-fired preheating and post-heating (hydrogen bake-out) for large welds and thick sections.</p>
                    <ul>
                        <li>Preheat temperatures up to 400°C</li>
                        <li>Post-heat for hydrogen removal</li>
                        <li>Interpass temperature control</li>
                        <li>Ideal for heavy wall welding</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Temperature Monitoring & Documentation</h3>
                    <p>Precision temperature control with full documentation for code compliance.</p>
                    <ul>
                        <li>Calibrated thermocouples (Type K, J, N, S, R)</li>
                        <li>Multi-channel recorders</li>
                        <li>Real-time temperature monitoring</li>
                        <li>Complete time-temperature charts</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OIL FIRING PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">OIL FIRING PROCESS</span>
                    <h2>Our Oil Firing Heat Treatment Workflow</h2>
                    <p>Systematic fuel-fired thermal processing for code-compliant stress relief of large components.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Component & Specification Review</h4>
                                <p>Review of component size, material grade, applicable code requirements, and PWHT specifications.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Burner & Thermocouple Installation</h4>
                                <p>Strategic placement of oil-fired burners and thermocouples per code requirements and component geometry.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Heating & Soaking</h4>
                                <p>Controlled heating to specified PWHT temperature with soak time based on material and thickness.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Cooling & Documentation</h4>
                                <p>Controlled cooling to ambient temperature with complete time-temperature documentation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Compliance</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/asme-cert.png" alt="ASME">
                            <img src="/www/assets/images/certs/api-cert.png" alt="API">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                            <img src="/www/assets/images/certs/aws-cert.png" alt="AWS">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/oil-firing-workflow.jpg" alt="Oil Firing Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Oil Firing Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Temp up to 1000°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>No Size Limitations</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Field Deployable</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Code Compliant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== OIL FIRING VS ELECTRIC PWHT ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPARISON GUIDE</span>
                <h2>Oil Firing vs Electric PWHT</h2>
                <p>Selecting the right method for your application</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Component Size</h3>
                    <p>Oil Firing: Unlimited. Electric: Limited by electrical capacity and available power supply (typically <5m diameter).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Field Capability</h3>
                    <p>Oil Firing: Excellent—independent power. Electric: Requires reliable electrical supply (often unavailable at remote sites).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost for Large Components</h3>
                    <p>Oil Firing: 40-80% less than electric for very large components. Electric: Lower cost for small to medium components.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Temperature Uniformity</h3>
                    <p>Oil Firing: Good with proper burner placement and insulation. Electric: Excellent with multi-zone control.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Heating Rate</h3>
                    <p>Oil Firing: High (rapid heating). Electric: Moderate (limited by heater watt density).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Best Application</h3>
                    <p>Oil Firing: Very large vessels, field pipelines, remote locations. Electric: Precise control, moderate size components.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TEMPERATURE & BURNER GUIDE ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL GUIDE</span>
                <h2>Oil Firing PWHT Parameters</h2>
                <p>Typical heating parameters for fuel-fired stress relief</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Steel (P-No. 1)</h3>
                    <p>Temp: 600-650°C (1110-1200°F). Soak: 1 hour per inch (25mm). Heating rate: 100-200°C/hour max.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Chrome-Moly (P-No. 3,4)</h3>
                    <p>Temp: 680-720°C (1250-1330°F). Soak: 1 hour per inch minimum. Heating rate: 100-220°C/hour.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Chrome-Moly (P-No. 5)</h3>
                    <p>Temp: 700-760°C (1290-1400°F). Post-heat required. Cooling rate critical for hardness.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Burner Placement</h3>
                    <p>Multiple burners placed symmetrically. Thermocouples at weld centerline and band edges. Insulation to retain heat.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Temperature Gradient Control</h3>
                    <p>Maximum temperature difference across heated band: 100°F (55°C) during soaking. Monitor all thermocouples.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Post-PWHT Hardness</h3>
                    <p>Hardness testing required per code. Max HB varies by material and application (typically 225-250 HB max for carbon steel).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Oil Firing Heat Treatment Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When is oil firing preferred over electric PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Oil firing is preferred for very large components (vessels >5m diameter, storage tanks, long pipelines), field applications where electrical power is limited or unavailable, and when rapid heating rates are required. Oil firing costs 40-80% less than electric systems for very large components.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the maximum temperature achievable with oil firing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our oil-fired systems can achieve temperatures up to 1000°C (1832°F), sufficient for stress relief of carbon and alloy steels, PWHT of chrome-moly alloys, and solution annealing of austenitic stainless steel.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is oil firing accepted by ASME codes?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, ASME Section VIII (UCS-56, UHT-56) and ASME B31.3 accept oil firing for localized and full vessel PWHT when properly controlled with thermocouples and temperature recording. Our procedures are fully code-compliant.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can oil firing be used for chrome-moly alloys (P-No. 3,4,5)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, oil firing is commonly used for PWHT of chrome-moly alloys. Temperature control, cooling rates, and hardness verification are critical. Our systems provide precise control meeting all code requirements for these hardenable materials.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you ensure temperature uniformity with oil firing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We use multiple strategically placed burners, insulation systems, and multiple thermocouples to monitor temperature distribution. The heating band width, insulation, and burner placement are designed to maintain uniform temperature within code-required limits (±25°F typical).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the typical fuel consumption for oil firing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Fuel consumption varies with component size, thickness, and required temperature. Typical consumption ranges from 50-500 liters per hour. We provide fuel cost estimates as part of project planning based on your specific component requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can oil firing be used for in-service equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, oil firing can be used for localized PWHT of in-service equipment for weld repairs. Safety precautions include ensuring equipment is properly isolated, purged, and free of flammable contents. Our procedures include detailed safety planning for in-service applications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided for oil firing PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide complete documentation including time-temperature charts from all thermocouples, burner placement diagrams, thermocouple location records, hardness test results (where required), and compliance certification per applicable code.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Cost-Effective PWHT for Very Large Components</h2>
                <p>Contact our oil firing specialists for fuel-fired stress relief of large vessels, tanks, and pipelines</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> No Size Limitations</span>
                    <span><i class="fas fa-check"></i> Field Capable</span>
                    <span><i class="fas fa-check"></i> Code Compliant PWHT</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Heat Treatment & Processing Services</h2>
                <p>Comprehensive thermal processing solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/industrial-heat-treatment/post-weld-heat-treatment.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Post Weld Heat Treatment</h3>
                    <p>PWHT for vessels and piping</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/localized-heat-treatment.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Localized Heat Treatment</h3>
                    <p>Spot PWHT and weld stress relief</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/stress-relieving.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stress Relieving</h3>
                    <p>Thermal stress relief services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/hydrogen-bake-out.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Hydrogen Bake-Out</h3>
                    <p>Hydrogen removal post-heating</p>
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