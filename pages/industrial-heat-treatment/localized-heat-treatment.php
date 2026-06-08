<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Localized Heat Treatment Services | Spot PWHT & Weld Stress Relieving | Alpha Sonix NDT Solutions";
$meta_description = "Professional localized heat treatment services including spot PWHT, weld stress relieving, and localized post-weld heat treatment for repairs, attachments, and field welding applications using ceramic pad and induction heating.";
$meta_keywords = "localized heat treatment, spot PWHT, weld stress relieving, localized post-weld heat treatment, ceramic pad heating, induction stress relief, field PWHT, weld repair heat treatment";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/localized-heat-treatment.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/localized-og.jpg">
    
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
        "serviceType": "Localized Heat Treatment Services",
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
        "description": "Professional localized heat treatment services including spot PWHT, weld stress relieving, and localized post-weld heat treatment using ceramic pad and induction heating."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/localized-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Localized Heat Treatment</span>
                </div>
                <h1 class="page-title">Localized Heat Treatment (Spot PWHT)</h1>
                <p class="page-subtitle">Professional localized post-weld heat treatment, weld stress relieving, and spot PWHT for repairs, attachments, and field welding applications using ceramic pad and induction heating</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-fire"></i> Ceramic Pad Heating</span>
                    <span class="badge"><i class="fas fa-bolt"></i> Induction Heating</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Weld Stress Relief</span>
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
                    <h3>Ceramic Pad PWHT</h3>
                    <p>Resistance heating using ceramic pads for localized stress relief of weld repairs, nozzles, and attachments on vessels and piping.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Induction Stress Relief</h3>
                    <p>Fast, efficient induction heating for localized PWHT on pipe welds, flanges, and small component repairs.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Weld Repair PWHT</h3>
                    <p>Localized heat treatment for weld repairs on pressure vessels, piping, and structural components without full furnace treatment.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Attachment Stress Relief</h3>
                    <p>Stress relief of welded attachments, supports, and clips on pressure equipment per code requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS LOCALIZED HEAT TREATMENT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">TARGETED THERMAL STRESS RELIEF</span>
                    <h2>What is Localized Heat Treatment (Spot PWHT)?</h2>
                    <p class="lead">Localized heat treatment is a targeted post-weld heat treatment (PWHT) process that applies controlled heating and cooling only to the weld zone and adjacent areas, rather than treating the entire component, using ceramic pad resistance heaters or induction heating systems.</p>
                    
                    <p>Full furnace PWHT of large vessels, piping systems, or field-erected equipment is often impractical, expensive, or impossible due to size constraints. Localized heat treatment provides a cost-effective alternative for weld repairs, nozzle attachments, small weldments, and field applications.</p>

                    <p>Our localized heat treatment services use advanced ceramic pad heating systems, induction heating equipment, and multi-zone temperature controllers to deliver precise, code-compliant PWHT for weld repairs, attachments, and localized stress relief applications.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Targeted Weld Stress Relief</strong>
                                <p>Apply PWHT only where needed—weld zones, repairs, and attachments—saving time and energy compared to full furnace treatment.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Field & On-Site Capability</strong>
                                <p>Portable equipment enables PWHT of field welds, in-service repairs, and large equipment that cannot be moved to a furnace.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code-Compliant Performance</strong>
                                <p>ASME Section VIII, ASME B31.3, API 510/570 compliant processes with full temperature documentation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Minimal Thermal Impact</strong>
                                <p>Heating band width and temperature gradients controlled to prevent thermal damage to adjacent materials.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Cost-Effective Alternative to Furnace PWHT:</strong>
                            <p>Localized PWHT costs 50-80% less than full furnace treatment for large vessels and piping systems. For weld repairs on operating equipment, localized treatment enables in-situ stress relief without component removal or extended downtime, saving weeks of production loss.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Localized PWHT</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/localized-pwht.jpg" alt="Localized PWHT">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Ceramic pad localized PWHT on pipe weld with multi-zone temperature control</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">80%</span>
                            <span class="stat-label">Cost vs Furnace</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50kW</span>
                            <span class="stat-label">Power Capacity</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24 Zones</span>
                            <span class="stat-label">Temperature Control</span>
                        </div>
                    </div>
                    
                    <div class="local-benefits">
                        <h4><i class="fas fa-star"></i> Localized PWHT Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Cost-effective for repairs</li>
                            <li><i class="fas fa-check"></i> Field-capable equipment</li>
                            <li><i class="fas fa-check"></i> Code compliant</li>
                            <li><i class="fas fa-check"></i> Minimal thermal impact</li>
                            <li><i class="fas fa-check"></i> Reduced downtime</li>
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
                <span class="section-label">WHY LOCALIZED HEAT TREATMENT</span>
                <h2>Key Advantages of Localized PWHT</h2>
                <p>Cost-effective stress relief for repairs and field applications</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Savings</h3>
                    <p>Localized PWHT costs 50-80% less than full furnace treatment—ideal for weld repairs and small modifications on large equipment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Field Application Capability</h3>
                    <p>Portable equipment enables on-site PWHT for field welds, in-service repairs, and equipment that cannot be moved to a furnace.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Reduced Thermal Impact</h3>
                    <p>Only the weld zone and required band width are heated, protecting adjacent materials, coatings, and sensitive components.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Minimized Downtime</h3>
                    <p>Localized PWHT enables weld repairs on operating equipment without vessel removal or extended plant shutdowns.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>ASME Section VIII, ASME B31.3, API 510/570, and NBIC recognize localized PWHT for specific applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Fast Setup & Execution</h3>
                    <p>Rapid heater installation and multi-zone control enable quick turnaround for critical repairs and scheduled outages.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">LOCALIZED PWHT APPLICATIONS</span>
                <h2>Applications Requiring Localized Heat Treatment</h2>
                <p>Targeted stress relief for repairs, attachments, and field applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="weld-repairs">Weld Repairs</button>
                    <button class="tab-btn" data-tab="attachments">Attachments & Nozzles</button>
                    <button class="tab-btn" data-tab="field-welding">Field Welding</button>
                    <button class="tab-btn" data-tab="piping">Piping Systems</button>
                </div>

                <div class="tabs-content">
                    <!-- Weld Repairs Tab -->
                    <div class="tab-panel active" id="weld-repairs">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/repair-pwht.jpg" alt="Weld Repair PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Weld Repair Localized PWHT</h3>
                                <p>Stress relief for weld repairs on pressure vessels, piping, and structural components per ASME and API requirements.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel shell and head repair welds</li>
                                    <li><i class="fas fa-check"></i> Nozzle repair and replacement welds</li>
                                    <li><i class="fas fa-check"></i> Crack excavation and repair welding</li>
                                    <li><i class="fas fa-check"></i> Corrosion damage repair weld stress relief</li>
                                    <li><i class="fas fa-check"></i> In-service equipment weld repairs</li>
                                    <li><i class="fas fa-check"></i> Lining and cladding repair PWHT</li>
                                    <li><i class="fas fa-check"></i> Structural member repair stress relief</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">NBIC</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Attachments & Nozzles Tab -->
                    <div class="tab-panel" id="attachments">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/nozzle-pwht.jpg" alt="Nozzle PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Attachments, Nozzles & Fittings</h3>
                                <p>Localized PWHT for welded attachments, nozzles, supports, and fittings on pressure equipment.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell weld stress relief</li>
                                    <li><i class="fas fa-check"></i> Support lug and saddle attachment welds</li>
                                    <li><i class="fas fa-check"></i> Manway and handhole attachment PWHT</li>
                                    <li><i class="fas fa-check"></i> Stiffener ring and reinforcement pad welds</li>
                                    <li><i class="fas fa-check"></i> Instrument connection and fitting welds</li>
                                    <li><i class="fas fa-check"></i> Flange-to-pipe attachment stress relief</li>
                                    <li><i class="fas fa-check"></i> Post-weld heat treatment of small fittings</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Field Welding Tab -->
                    <div class="tab-panel" id="field-welding">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/field-pwht.jpg" alt="Field PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Field Welding & Site Fabrication</h3>
                                <p>On-site localized PWHT for field welds, site-fabricated assemblies, and construction projects.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Field-erected pressure vessel seam welds</li>
                                    <li><i class="fas fa-check"></i> Storage tank shell and roof welds</li>
                                    <li><i class="fas fa-check"></i> Field-fabricated piping spool welds</li>
                                    <li><i class="fas fa-check"></i> Site-assembled structural weldments</li>
                                    <li><i class="fas fa-check"></i> Power plant boiler repair welds</li>
                                    <li><i class="fas fa-check"></i> Refinery turnaround weld repairs</li>
                                    <li><i class="fas fa-check"></i> Offshore platform weld stress relief</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 650/653</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Piping Systems Tab -->
                    <div class="tab-panel" id="piping">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/pipe-pwht-local.jpg" alt="Pipe Localized PWHT">
                            </div>
                            <div class="tab-text">
                                <h3>Piping Systems & Pipe Welds</h3>
                                <p>Localized PWHT for pipe butt welds, branch connections, and repair welds on process piping.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Carbon steel pipe weld stress relief per ASME B31.3</li>
                                    <li><i class="fas fa-check"></i> Chrome-moly alloy pipe weld PWHT</li>
                                    <li><i class="fas fa-check"></i> Branch connection reinforcement pad welds</li>
                                    <li><i class="fas fa-check"></i> Socket weld and fillet weld stress relief</li>
                                    <li><i class="fas fa-check"></i> High-pressure and high-temperature piping</li>
                                    <li><i class="fas fa-check"></i> Sour service piping PWHT</li>
                                    <li><i class="fas fa-check"></i> Pipe repair and modification welds</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">ASME B31.1</span>
                                    <span class="standard-tag">API 570</span>
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
                <span class="section-label">COMPREHENSIVE LOCALIZED PWHT</span>
                <h2>Our Localized Heat Treatment Capabilities</h2>
                <p>Advanced ceramic pad and induction systems for precision localized stress relief</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Ceramic Pad Resistance Heating</h3>
                    <p>Multi-zone ceramic pad systems for localized PWHT on vessels, piping, and structural components.</p>
                    <ul>
                        <li>Temperature: up to 1000°C (1832°F)</li>
                        <li>24-zone temperature control</li>
                        <li>Flexible pad configurations</li>
                        <li>Suitable for any orientation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Induction Localized PWHT</h3>
                    <p>Fast, efficient induction heating for pipe welds, small components, and localized stress relief.</p>
                    <ul>
                        <li>Rapid heating rates</li>
                        <li>Precise temperature control</li>
                        <li>Minimal heat affected zone</li>
                        <li>Ideal for pipe and small components</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Temperature Monitoring & Control</h3>
                    <p>Precision temperature monitoring with multi-zone control and full documentation.</p>
                    <ul>
                        <li>Calibrated thermocouples (Type K, J, N, S, R)</li>
                        <li>Digital temperature controllers</li>
                        <li>Real-time temperature recording</li>
                        <li>Printable time-temperature charts</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Repair Weld PWHT</h3>
                    <p>Specialized localized PWHT for in-service repairs and equipment modifications.</p>
                    <ul>
                        <li>In-situ weld repair stress relief</li>
                        <li>Partial disassembly treatment</li>
                        <li>Emergency repair support</li>
                        <li>Turnaround and outage services</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>PWHT Procedure Qualification</h3>
                    <p>Qualification of localized PWHT procedures per ASME Section IX and applicable codes.</p>
                    <ul>
                        <li>Heating rate determination</li>
                        <li>Soak temperature/time validation</li>
                        <li>Cooling rate verification</li>
                        <li>Hardness testing compliance</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Documentation & Certification</h3>
                    <p>Complete documentation for code compliance and quality records.</p>
                    <ul>
                        <li>Time-temperature charts</li>
                        <li>Thermocouple placement records</li>
                        <li>Hardness test reports</li>
                        <li>Compliance certification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== LOCALIZED PWHT PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">LOCALIZED PWHT PROCESS</span>
                    <h2>Our Localized Heat Treatment Workflow</h2>
                    <p>Systematic approach for code-compliant localized PWHT of weld repairs and attachments.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Weld & Specification Review</h4>
                                <p>Review of weld repair requirements, material specifications, and applicable code requirements for PWHT.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Heater & Thermocouple Installation</h4>
                                <p>Ceramic pad or induction coil installation with thermocouple placement per code requirements.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Controlled Heating & Soaking</h4>
                                <p>Controlled heating to specified PWHT temperature with soak time based on thickness.</p>
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
                        <img src="/www/assets/images/heat-treatment/localized-workflow.jpg" alt="Localized PWHT Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Localized PWHT Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Ceramic Pad & Induction</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Multi-Zone Control</span>
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

    <!-- ===================== LOCALIZED VS FURNACE PWHT ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">COMPARISON GUIDE</span>
                <h2>Localized PWHT vs Full Furnace Treatment</h2>
                <p>Selecting the right method for your application</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Localized PWHT (Spot)</h3>
                    <p>Best for: Weld repairs, nozzle attachments, modifications on large vessels, field piping, in-service equipment.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Full Furnace PWHT</h3>
                    <p>Best for: New fabrication, complete vessels, small components, when uniform heating of entire part is required.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Cost Comparison</h3>
                    <p>Localized PWHT: 20-50% of furnace cost for large components. Furnace PWHT: Lower per-part cost for high-volume small parts.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Time Comparison</h3>
                    <p>Localized PWHT: 4-24 hours typical (including setup). Furnace PWHT: 8-48 hours (including loading/cooling).</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Temperature Uniformity</h3>
                    <p>Localized PWHT: Band width control ±25°F typical. Furnace PWHT: ±15°F throughout chamber.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Code Acceptance</h3>
                    <p>ASME Section VIII (UCS-56, UHT-56), ASME B31.3, API 510/570 all permit localized PWHT when properly qualified.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== HEATING BAND WIDTH GUIDE ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">BAND WIDTH GUIDE</span>
                <h2>Localized PWHT Heating Band Requirements</h2>
                <p>Per ASME Section VIII and ASME B31.3</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Minimum Band Width (Each Side)</h3>
                    <p>2x thickness or 6 inches (150mm) minimum, whichever is greater. For weld repairs, band extends beyond repair zone.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Temperature Gradient Control</h3>
                    <p>Maximum temperature difference across band width: 100°F (55°C) during heating/soaking. 250°F (140°C) during cooling.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Thermocouple Placement</h3>
                    <p>Minimum 1 thermocouple per 12 inches (300mm) of band width. Additional T/C at weld centerline and band edges.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Insulation Requirements</h3>
                    <p>Insulation band width: minimum 4x thickness or 12 inches (300mm) beyond heaters to control temperature gradient.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Heating Rate Limits</h3>
                    <p>Maximum 200°F (111°C) per hour divided by thickness in inches (minimum 100°F/hour, maximum 400°F/hour).</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Cooling Rate Limits</h3>
                    <p>Maximum 250°F (140°C) per hour divided by thickness in inches (minimum 100°F/hour, maximum 500°F/hour).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Localized Heat Treatment Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When can localized PWHT be used instead of full furnace treatment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Localized PWHT is permitted for weld repairs, nozzle attachments, modifications, and field welds per ASME Section VIII (UCS-56, UHT-56) and ASME B31.3. It is commonly used when full furnace treatment is impractical due to component size, field location, or partial disassembly constraints.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between ceramic pad and induction localized PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Ceramic pad uses electrical resistance heating elements for multi-zone control—ideal for complex geometries, large areas, and vessel work. Induction uses electromagnetic heating for fast, localized heating—ideal for pipe welds, small components, and rapid turnaround applications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can localized PWHT be performed on in-service equipment?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, localized PWHT is commonly performed on in-service equipment for weld repairs. The process must consider the effects of heat on process fluids, adjacent equipment, and coatings. Proper insulation and temperature monitoring ensure safe execution on operating or idle equipment.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the required heating band width for localized PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Per ASME codes, the minimum heated band width is 2x thickness or 6 inches (150mm) on each side of the weld, whichever is greater. Insulation should extend at least 4x thickness or 12 inches (300mm) beyond heaters to control temperature gradients.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How many thermocouples are required for localized PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Minimum one thermocouple per 12 inches (300mm) of heated band width. Additional thermocouples are required at the weld centerline, band edges, and any areas where temperature gradients may be a concern. A minimum of two thermocouples is typical for most applications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is hardness testing required after localized PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, hardness testing is required to verify PWHT effectiveness for many materials, especially chrome-moly alloys and sour service applications (NACE MR0175). Hardness should be tested on the weld metal, HAZ, and parent material.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can localized PWHT be used for chrome-moly alloys (P-No. 3,4,5)?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, localized PWHT is acceptable for chrome-moly alloys when properly qualified and executed. Temperature control, band width, and cooling rates are critical for these alloys. We follow ASME Section VIII and B31.3 requirements for chrome-moly PWHT.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation is provided for localized PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide complete documentation including time-temperature charts (all thermocouples), thermocouple placement diagrams, PWHT procedure used, hardness test results, and compliance certification per applicable code requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Cost-Effective Stress Relief for Weld Repairs</h2>
                <p>Contact our localized PWHT specialists for field and shop spot heat treatment services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Ceramic Pad & Induction</span>
                    <span><i class="fas fa-check"></i> Field Deployable</span>
                    <span><i class="fas fa-check"></i> Code Compliant PWHT</span>
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
                    <p>Full and localized PWHT services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/induction-heat-treatment.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Induction Heat Treatment</h3>
                    <p>Induction hardening and stress relief</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/hydrogen-bake-out.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Hydrogen Bake-Out</h3>
                    <p>Post-weld hydrogen removal</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/stress-relieving.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Stress Relieving</h3>
                    <p>Residual stress removal services</p>
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