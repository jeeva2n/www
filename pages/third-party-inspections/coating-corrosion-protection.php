<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Coating & Corrosion Protection Inspection Services | NACE Certified | Alpha Sonix NDT Solutions";
$meta_description = "Professional coating and corrosion protection inspection services including surface preparation inspection, coating application verification, adhesion testing, and corrosion monitoring for industrial assets. NACE certified inspectors.";
$meta_keywords = "coating inspection, corrosion protection, NACE inspection, surface preparation inspection, coating adhesion testing, dry film thickness, holiday detection, corrosion monitoring, protective coating inspection";
$canonical_url = "https://alphasonix.com/pages/third-party-inspection/coating-corrosion-protection.php";
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
    <meta property="og:image" content="/www/assets/images/services/coating-corrosion-og.jpg">
    
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
        "serviceType": "Coating & Corrosion Protection Inspection Services",
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
        "description": "Professional coating and corrosion protection inspection services ensuring long-term asset protection and regulatory compliance."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/coating/coating-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Third Party Inspection Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Coating & Corrosion Protection</span>
                </div>
                <h1 class="page-title">Coating & Corrosion Protection Inspection</h1>
                <p class="page-subtitle">NACE certified coating inspection, surface preparation verification, and corrosion monitoring ensuring long-term asset protection against corrosion degradation</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-certificate"></i> NACE Certified Inspectors</span>
                    <span class="badge"><i class="fas fa-paint-brush"></i> Coating Application Verification</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Corrosion Management</span>
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
                        <i class="fas fa-brush"></i>
                    </div>
                    <h3>Surface Preparation Inspection</h3>
                    <p>Verification of surface cleanliness, profile, and preparation quality per SSPC/NACE standards before coating application.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <h3>Coating Application Verification</h3>
                    <p>Dry film thickness measurement, wet film thickness, and coating application quality inspection during and after application.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Corrosion Monitoring</h3>
                    <p>Corrosion rate assessment, thickness measurement, and corrosion under insulation (CUI) detection for existing assets.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-vial"></i>
                    </div>
                    <h3>Adhesion & Holiday Testing</h3>
                    <p>Coating adhesion verification and holiday (pin-hole) detection ensuring complete coating integrity and protection.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS COATING & CORROSION PROTECTION INSPECTION ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">ASSET PROTECTION SERVICES</span>
                    <h2>What is Coating & Corrosion Protection Inspection?</h2>
                    <p class="lead">Coating and corrosion protection inspection is a specialized service ensuring protective coatings are properly applied and maintained to prevent corrosion degradation of industrial assets throughout their service life.</p>
                    
                    <p>Corrosion is the single largest cause of industrial asset degradation, costing industries billions annually in repairs, replacements, and production losses. Protective coatings provide the primary defense against corrosion, but improper application leads to premature coating failure and accelerated corrosion.</p>

                    <p>Our NACE certified coating inspectors provide comprehensive inspection services throughout the coating lifecycle—from surface preparation verification through application inspection to ongoing corrosion monitoring. We ensure coatings perform as designed, protecting your assets for maximum service life.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>NACE Certified Coating Inspectors</strong>
                                <p>NACE Level II and III certified inspectors with extensive coating and corrosion protection expertise across all industry sectors.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Comprehensive Quality Verification</strong>
                                <p>Surface preparation, environmental conditions, coating application, curing, and final acceptance inspection per project specifications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Corrosion Damage Assessment</strong>
                                <p>Quantification of existing corrosion damage, corrosion rate prediction, and remaining life assessment for coated assets.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Coating Failure Analysis</strong>
                                <p>Expert investigation of coating failures including root cause analysis and remedial recommendations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-shield-virus"></i>
                        <div>
                            <strong>Critical for Asset Protection:</strong>
                            <p>Corrosion costs global industries an estimated $2.5 trillion annually (3-4% of GDP). Proper coating inspection reduces corrosion-related failures by 70-90% and extends asset life by 15-25 years compared to uncoated or poorly coated equipment.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/coating/coating-inspection.jpg" alt="Coating Inspection">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>NACE certified coating inspection during application on structural steel</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Coating Inspections</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">NACE</span>
                            <span class="stat-label">Level II/III</span>
                        </div>
                    </div>
                    
                    <div class="coating-benefits">
                        <h4><i class="fas fa-star"></i> Inspection Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Prevent premature coating failure</li>
                            <li><i class="fas fa-check"></i> Extend asset service life</li>
                            <li><i class="fas fa-check"></i> Reduce maintenance costs</li>
                            <li><i class="fas fa-check"></i> Ensure warranty compliance</li>
                            <li><i class="fas fa-check"></i> Corrosion risk management</li>
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
                <span class="section-label">WHY COATING INSPECTION MATTERS</span>
                <h2>Key Advantages of Professional Coating & Corrosion Inspection</h2>
                <p>Ensure coating performance and long-term corrosion protection for your assets</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Extended Asset Life</h3>
                    <p>Properly applied coatings protect assets for 15-25 years versus 3-5 years for poorly applied systems—inspection ensures maximum service life.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Reduction</h3>
                    <p>Prevent premature coating failure and corrosion damage, reducing maintenance and recoating costs by 50-70% over asset life.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Corrosion Risk Management</h3>
                    <p>Systematic corrosion monitoring identifies developing issues before structural damage occurs, preventing costly failures.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Warranty & Specification Compliance</h3>
                    <p>Documented inspection verifies coating system meets manufacturer specifications, maintaining warranty validity and owner requirements.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Regulatory Compliance</h3>
                    <p>Meet environmental, safety, and industry regulatory requirements for corrosion protection and coating application.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Reduced Downtime</h3>
                    <p>Prevent unplanned outages caused by corrosion-related failures through proactive coating condition monitoring and maintenance planning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">INSPECTION APPLICATIONS</span>
                <h2>Assets & Industries We Serve</h2>
                <p>Comprehensive coating and corrosion inspection for all industrial sectors</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="structural-steel">Structural Steel</button>
                    <button class="tab-btn" data-tab="pipelines">Pipelines & Piping</button>
                    <button class="tab-btn" data-tab="storage-tanks">Storage Tanks & Vessels</button>
                    <button class="tab-btn" data-tab="marine-offshore">Marine & Offshore</button>
                </div>

                <div class="tabs-content">
                    <!-- Structural Steel Tab -->
                    <div class="tab-panel active" id="structural-steel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/coating/structural-steel-coating.jpg" alt="Structural Steel Coating">
                            </div>
                            <div class="tab-text">
                                <h3>Structural Steel & Industrial Framework Coating</h3>
                                <p>Comprehensive coating inspection for structural steel, building frames, equipment supports, and industrial platforms.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Surface preparation verification (SSPC-SP5/SP6/SP10)</li>
                                    <li><i class="fas fa-check"></i> Environmental monitoring (temperature, humidity, dew point)</li>
                                    <li><i class="fas fa-check"></i> Dry film thickness measurement per SSPC-PA2</li>
                                    <li><i class="fas fa-check"></i> Coating adhesion testing (pull-off, cross-hatch)</li>
                                    <li><i class="fas fa-check"></i> Holiday detection for pinhole identification</li>
                                    <li><i class="fas fa-check"></i> Curing and hardness verification</li>
                                    <li><i class="fas fa-check"></i> Final acceptance and documentation</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">SSPC/NACE</span>
                                    <span class="standard-tag">ISO 8501-4</span>
                                    <span class="standard-tag">ASTM D4417</span>
                                    <span class="standard-tag">ASTM D4541</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pipelines & Piping Tab -->
                    <div class="tab-panel" id="pipelines">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/coating/pipeline-coating.jpg" alt="Pipeline Coating">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline & Piping System Coating Inspection</h3>
                                <p>Field and shop coating inspection for buried, above-ground, and subsea pipelines and piping systems.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Fusion bonded epoxy (FBE) coating inspection</li>
                                    <li><i class="fas fa-check"></i> Three-layer polyethylene/polypropylene coating</li>
                                    <li><i class="fas fa-check"></i> Liquid epoxy and polyurethane coating</li>
                                    <li><i class="fas fa-check"></i> Field joint coating inspection</li>
                                    <li><i class="fas fa-check"></i> Holiday detection (low and high voltage)</li>
                                    <li><i class="fas fa-check"></i> Coating thickness and adhesion testing</li>
                                    <li><i class="fas fa-check"></i> Cathodic protection system verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NACE SP0169</span>
                                    <span class="standard-tag">ISO 21809</span>
                                    <span class="standard-tag">API 5L</span>
                                    <span class="standard-tag">AWWA C210</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Storage Tanks & Vessels Tab -->
                    <div class="tab-panel" id="storage-tanks">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/coating/tank-coating.jpg" alt="Storage Tank Coating">
                            </div>
                            <div class="tab-text">
                                <h3>Storage Tank & Pressure Vessel Coating</h3>
                                <p>Internal and external coating inspection for storage tanks, pressure vessels, and process equipment.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Surface preparation inspection (blast profile, cleanliness)</li>
                                    <li><i class="fas fa-check"></i> Environmental condition monitoring</li>
                                    <li><i class="fas fa-check"></i> Dry film thickness mapping (100% or spot)</li>
                                    <li><i class="fas fa-check"></i> Holiday detection (internal/external)</li>
                                    <li><i class="fas fa-check"></i> Immersion service coating verification</li>
                                    <li><i class="fas fa-check"></i> High-temperature coating inspection</li>
                                    <li><i class="fas fa-check"></i> Lining condition assessment</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 650/653</span>
                                    <span class="standard-tag">NACE SP0188</span>
                                    <span class="standard-tag">SSPC PA-2</span>
                                    <span class="standard-tag">ASTM D5162</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marine & Offshore Tab -->
                    <div class="tab-panel" id="marine-offshore">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/coating/marine-coating.jpg" alt="Marine Coating">
                            </div>
                            <div class="tab-text">
                                <h3>Marine & Offshore Coating Inspection</h3>
                                <p>Specialized coating inspection for marine vessels, offshore platforms, and coastal infrastructure.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Hull and topside coating inspection</li>
                                    <li><i class="fas fa-check"></i> Ballast tank coating verification (PSPC compliance)</li>
                                    <li><i class="fas fa-check"></i> Offshore platform splash zone coating</li>
                                    <li><i class="fas fa-check"></i> Anti-fouling coating inspection</li>
                                    <li><i class="fas fa-check"></i> Marine growth prevention system verification</li>
                                    <li><i class="fas fa-check"></i> Subsea coating and anode inspection</li>
                                    <li><i class="fas fa-check"></i> Coating repair and touch-up verification</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">IMO PSPC</span>
                                    <span class="standard-tag">NORSOK M-501</span>
                                    <span class="standard-tag">ISO 12944</span>
                                    <span class="standard-tag">SSPC/NACE</span>
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
                <span class="section-label">COMPREHENSIVE INSPECTION SERVICES</span>
                <h2>Our Coating & Corrosion Protection Capabilities</h2>
                <p>NACE certified inspectors and advanced testing equipment for complete coating quality verification</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Surface Preparation Inspection</h3>
                    <p>Verification of surface cleanliness, profile, and preparation quality prior to coating application per SSPC/NACE standards.</p>
                    <ul>
                        <li>Surface cleanliness assessment (SSPC VIS 1)</li>
                        <li>Surface profile measurement (ASTM D4417)</li>
                        <li>Soluble salt testing ( Bresle method)</li>
                        <li>Environmental monitoring (temperature, humidity, dew point)</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Coating Application Inspection</h3>
                    <p>Real-time inspection of coating application processes ensuring correct technique, coverage, and quality.</p>
                    <ul>
                        <li>Wet film thickness measurement</li>
                        <li>Mix ratio and pot life verification</li>
                        <li>Application technique observation</li>
                        <li>Intercoat contamination check</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Dry Film Thickness Measurement</h3>
                    <p>Precision dry film thickness measurement per SSPC-PA2 and ISO 19840 requirements for coating systems.</p>
                    <ul>
                        <li>Magnetic pull-off and electronic gauges</li>
                        <li>Statistical thickness analysis</li>
                        <li>Thickness mapping and reporting</li>
                        <li>SSPC-PA2 compliance verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Holiday & Porosity Detection</h3>
                    <p>Low and high voltage holiday detection identifying pinholes, voids, and coating discontinuities.</p>
                    <ul>
                        <li>Low voltage (wet sponge) testing</li>
                        <li>High voltage spark testing</li>
                        <li>Porosity detection for lining systems</li>
                        <li>Defect marking and repair verification</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Adhesion & Mechanical Testing</h3>
                    <p>Coating adhesion verification and mechanical property testing ensuring coating bond strength and durability.</p>
                    <ul>
                        <li>Pull-off adhesion testing (ASTM D4541)</li>
                        <li>Cross-hatch adhesion testing (ASTM D3359)</li>
                        <li>Impact resistance testing</li>
                        <li>Hardness and abrasion testing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Corrosion Monitoring & Assessment</h3>
                    <p>Existing corrosion assessment, corrosion rate monitoring, and remaining life evaluation for coated assets.</p>
                    <ul>
                        <li>Corrosion under insulation (CUI) detection</li>
                        <li>Ultrasonic thickness measurement</li>
                        <li>Corrosion rate calculation and trending</li>
                        <li>Remaining life assessment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION WORKFLOW ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">INSPECTION PROCESS</span>
                    <h2>Our Coating Inspection Workflow</h2>
                    <p>Systematic quality verification throughout the coating lifecycle from surface preparation to final acceptance.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Pre-Application Inspection</h4>
                                <p>Surface preparation verification, environmental monitoring, coating material verification, and equipment check.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Application Monitoring</h4>
                                <p>Wet film thickness, application technique observation, and environmental condition monitoring during coating.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Curing & Final Inspection</h4>
                                <p>Dry film thickness, holiday detection, adhesion testing, and final acceptance inspection per specification.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Documentation & Reporting</h4>
                                <p>Comprehensive inspection reports, thickness records, test results, and final acceptance documentation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Our Certifications & Standards</h4>
                        <div class="cert-badges">
                            <img src="/www/assets/images/certs/nace-cert.png" alt="NACE">
                            <img src="/www/assets/images/certs/sspc-cert.png" alt="SSPC">
                            <img src="/www/assets/images/certs/iso-cert.png" alt="ISO">
                            <img src="/www/assets/images/certs/asnt-cert.png" alt="ASNT">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/coating/inspection-workflow.jpg" alt="Inspection Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Inspection Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>NACE Level II/III Inspectors</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>SSPC Certified</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>ISO 9001 Compliant</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Calibrated Instruments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CORROSION MECHANISMS ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CORROSION MECHANISMS</span>
                <h2>Common Corrosion Threats We Address</h2>
                <p>Comprehensive assessment of all major corrosion mechanisms affecting industrial assets</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Atmospheric Corrosion</h3>
                    <p>Assessment of corrosion caused by moisture, humidity, and airborne contaminants affecting exposed structural steel and equipment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Corrosion Under Insulation (CUI)</h3>
                    <p>Specialized detection of hidden corrosion beneath pipe and vessel insulation using advanced NDT techniques.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-biohazard"></i>
                    </div>
                    <h3>Microbiologically Influenced Corrosion (MIC)</h3>
                    <p>Detection and assessment of corrosion caused by bacteria and microorganisms in water-handling systems.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Galvanic Corrosion</h3>
                    <p>Assessment of accelerated corrosion at dissimilar metal contacts and inadequate isolation.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>High-Temperature Corrosion</h3>
                    <p>Assessment of oxidation, sulfidation, and other high-temperature degradation mechanisms.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-salt-shaker"></i>
                    </div>
                    <h3>Chloride Stress Corrosion Cracking</h3>
                    <p>Detection and assessment of chloride-induced cracking in stainless steel and other susceptible alloys.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Coating & Corrosion Protection Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is NACE coating inspector certification?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>NACE (now AMPP) coating inspector certification is the industry standard for coating inspection professionals. NACE Level II and III inspectors have demonstrated knowledge of coating materials, surface preparation, application methods, testing, and inspection documentation through rigorous training and examination.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between SSPC-SP5, SP6, and SP10?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>These are surface preparation standards: SP5 (white metal blast) removes 100% of contaminants; SP6 (commercial blast) removes 95-100%; SP10 (near-white blast) removes 98-100%. Our inspectors verify the correct standard for your coating specification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you detect corrosion under insulation?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We use specialized NDT techniques including pulsed eddy current (PEC), real-time radiography, and profile radiography to detect CUI without removing insulation, prioritizing locations for targeted removal and direct inspection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is acceptable dry film thickness variation?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>SSPC-PA2 specifies acceptable thickness ranges typically ±20% of specified nominal thickness. Our inspectors use calibrated DFT gauges and statistical sampling plans to verify compliance with your coating specification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is holiday testing and when is it required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Holiday testing detects pinholes, voids, and discontinuities in applied coatings. It is required for immersion service coatings, lining systems, and critical coatings where complete barrier protection is essential. We use low-voltage (wet sponge) or high-voltage (spark) methods based on coating thickness.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often should coating condition be inspected?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Coating condition should be inspected every 1-5 years depending on service environment, coating type, and asset criticality. Our corrosion engineers can recommend appropriate inspection intervals based on your specific operating conditions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide for coating inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive documentation including surface preparation reports, environmental logs, thickness measurement records (with statistics), holiday detection reports, adhesion test results, and final acceptance certification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you perform coating inspection at remote or offshore locations?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, our NACE certified inspectors are available for coating inspection at remote sites, offshore platforms, and international locations. We provide full mobilization services including travel, accommodation, and site-specific safety training.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Protect Your Assets from Corrosion</h2>
                <p>Contact our NACE certified coating inspectors for comprehensive coating quality verification and corrosion management</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:coating@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Coating Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> NACE Certified Inspectors</span>
                    <span><i class="fas fa-check"></i> Comprehensive Testing</span>
                    <span><i class="fas fa-check"></i> Complete Documentation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related Integrity & Inspection Services</h2>
                <p>Comprehensive asset protection and inspection solutions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/third-party-inspection/mechanical-structural-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Mechanical & Structural</h3>
                    <p>Structural steel and mechanical equipment inspection</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/pipeline-process-equipment-inspection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Pipeline & Process Equipment</h3>
                    <p>Mechanical integrity and corrosion monitoring</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/third-party-inspection/asset-integrity-rbi.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Asset Integrity & RBI</h3>
                    <p>Risk-based inspection and integrity management</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/rope-access-services/rope-access-thermal-imaging.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Rope Access Thermal Imaging</h3>
                    <p>CUI detection and elevated coating inspection</p>
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