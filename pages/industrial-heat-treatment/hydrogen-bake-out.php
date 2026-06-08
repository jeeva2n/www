<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Hydrogen Bake-Out Treatment Services | Hydrogen Cracking Prevention | Alpha Sonix NDT Solutions";
$meta_description = "Professional hydrogen bake-out treatment services for welded components, hardenable steels, and thick sections. Post-heating to remove diffusible hydrogen and prevent hydrogen-induced cracking (HIC).";
$meta_keywords = "hydrogen bake-out, hydrogen removal, post heating, hydrogen cracking prevention, HIC prevention, diffusible hydrogen removal, weld hydrogen bake-out, hardenable steel treatment";
$canonical_url = "https://alphasonix.com/pages/industrial-heat-treatment/hydrogen-bake-out.php";
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
    <meta property="og:image" content="/www/assets/images/heat-treatment/hydrogen-bakeout-og.jpg">
    
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
        "serviceType": "Hydrogen Bake-Out Treatment Services",
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
        "description": "Professional hydrogen bake-out treatment services for welded components, hardenable steels, and thick sections to prevent hydrogen-induced cracking."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/heat-treatment/hydrogen-bakeout-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Industrial Heat Treatment</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Hydrogen Bake-Out Treatment</span>
                </div>
                <h1 class="page-title">Hydrogen Bake-Out Treatment</h1>
                <p class="page-subtitle">Professional post-heating treatment to remove diffusible hydrogen and prevent hydrogen-induced cracking (HIC) in welded components, hardenable steels, and thick sections</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-tint"></i> Hydrogen Removal</span>
                    <span class="badge"><i class="fas fa-shield-alt"></i> Crack Prevention</span>
                    <span class="badge"><i class="fas fa-chart-line"></i> Hardenable Steel Protection</span>
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
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Diffusible Hydrogen Removal</h3>
                    <p>Controlled post-heating to drive out diffusible hydrogen that causes hydrogen-induced cracking (HIC) in hardenable steels.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Hydrogen Cracking Prevention</h3>
                    <p>Eliminates hydrogen from weld zones and heat-affected zones (HAZ) to prevent cold cracking and delayed failure.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Hardenable Steel Protection</h3>
                    <p>Essential for high-strength low-alloy (HSLA) steels, chrome-moly alloys, and thick-section welds.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Preheating Integration</h3>
                    <p>Combined preheat and post-heat strategies for complete hydrogen control in critical welding applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS HYDROGEN BAKE-OUT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">HYDROGEN CRACKING PREVENTION</span>
                    <h2>What is Hydrogen Bake-Out Treatment?</h2>
                    <p class="lead">Hydrogen bake-out treatment is a controlled post-heating process applied to welded components or hardenable steels to remove diffusible hydrogen from the weld metal and heat-affected zone (HAZ), preventing hydrogen-induced cracking (HIC) and delayed failure.</p>
                    
                    <p>Hydrogen is introduced into steel during welding from moisture in flux, coatings, or hydrogen-bearing shielding gases. This diffusible hydrogen can diffuse to regions of high stress in hardenable microstructures, causing cracking hours or days after welding (delayed cracking / cold cracking).</p>

                    <p>Our hydrogen bake-out services use precision heating systems to raise component temperature to 200-400°C (400-750°F) for controlled durations, allowing hydrogen to diffuse out of the steel. This treatment is critical for high-strength steels, thick sections, and critical service applications.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Hydrogen Diffusion Enhancement</strong>
                                <p>Increased temperature accelerates hydrogen diffusion rates by 10-100x, allowing rapid removal from critical zones.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Cold Crack Prevention</strong>
                                <p>Eliminates hydrogen that causes hydrogen-induced cracking (HIC), hydrogen-assisted cracking (HAC), and cold cracking.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Delayed Failure Protection</strong>
                                <p>Prevents cracking that occurs hours to days after welding—often during NDT or pressure testing.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code Compliance</strong>
                                <p>ASME, API, AWS, and NACE codes require or recommend hydrogen bake-out for specific materials and service conditions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>Critical for Hardenable Steels:</strong>
                            <p>Without proper hydrogen bake-out, hardenable steels (carbon equivalent >0.40) have hydrogen cracking rates of 15-30%. Proper post-heating reduces cracking risk to less than 1%, preventing costly weld failures, rework, and safety incidents.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request Hydrogen Bake-Out</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/heat-treatment/hydrogen-bakeout-equipment.jpg" alt="Hydrogen Bake-Out Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Controlled post-heating system for hydrogen removal from welded components</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">400°C</span>
                            <span class="stat-label">Bake-Out Temp</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">>95%</span>
                            <span class="stat-label">Hydrogen Removal</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30%→1%</span>
                            <span class="stat-label">Crack Risk Reduction</span>
                        </div>
                    </div>
                    
                    <div class="bakeout-benefits">
                        <h4><i class="fas fa-star"></i> Bake-Out Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Hydrogen crack prevention</li>
                            <li><i class="fas fa-check"></i> Weld integrity assurance</li>
                            <li><i class="fas fa-check"></i> Code compliance</li>
                            <li><i class="fas fa-check"></i> Delayed failure prevention</li>
                            <li><i class="fas fa-check"></i> Reduced rework costs</li>
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
                <span class="section-label">WHY HYDROGEN BAKE-OUT MATTERS</span>
                <h2>Key Advantages of Professional Hydrogen Bake-Out</h2>
                <p>Ensure weld integrity and prevent costly delayed cracking</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Hydrogen Cracking Prevention</h3>
                    <p>Reduces hydrogen-induced cracking risk from 15-30% to less than 1% for hardenable steels and critical welds.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Delayed Failure Elimination</h3>
                    <p>Prevents cracking that occurs hours or days after welding—eliminating surprises during NDT or pressure testing.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Diffusible Hydrogen Removal</h3>
                    <p>Typical hydrogen reduction from 5-15 ppm to less than 0.5 ppm after proper bake-out treatment.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Code Compliance</h3>
                    <p>Meet ASME Section VIII, ASME B31.3, API 1104, AWS D1.1, and NACE MR0175 hydrogen control requirements.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Rework Cost Reduction</h3>
                    <p>Prevents expensive weld repairs, component replacement, and project delays caused by hydrogen cracking.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Sour Service Protection</h3>
                    <p>Essential for components exposed to H₂S environments where hydrogen embrittlement is a critical concern.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">BAKE-OUT APPLICATIONS</span>
                <h2>Applications Requiring Hydrogen Bake-Out</h2>
                <p>Professional hydrogen removal for critical welding applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="pipe-welding">Pipe & Pressure Vessel Welding</button>
                    <button class="tab-btn" data-tab="hardenable-steels">Hardenable Steels</button>
                    <button class="tab-btn" data-tab="thick-section">Thick Section Welds</button>
                    <button class="tab-btn" data-tab="repair-welding">Repair & Field Welding</button>
                </div>

                <div class="tabs-content">
                    <!-- Pipe & Pressure Vessel Welding Tab -->
                    <div class="tab-panel active" id="pipe-welding">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/pipe-bakeout.jpg" alt="Pipe Weld Bake-Out">
                            </div>
                            <div class="tab-text">
                                <h3>Pipe & Pressure Vessel Welding Bake-Out</h3>
                                <p>Post-heating for pipe butt welds, pressure vessel seams, and nozzle attachments to prevent hydrogen cracking.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Chrome-moly pipe welding (P-No. 3,4,5 materials)</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel circumferential and longitudinal seams</li>
                                    <li><i class="fas fa-check"></i> High-pressure piping systems per ASME B31.3</li>
                                    <li><i class="fas fa-check"></i> Boiler tube and header welds</li>
                                    <li><i class="fas fa-check"></i> Process piping in sour service (H₂S environments)</li>
                                    <li><i class="fas fa-check"></i> Nozzle-to-shell attachment welds</li>
                                    <li><i class="fas fa-check"></i> Pipeline girth welds in high-strength steels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME B31.3</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">API 582</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hardenable Steels Tab -->
                    <div class="tab-panel" id="hardenable-steels">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/hardenable-steel-bakeout.jpg" alt="Hardenable Steel Bake-Out">
                            </div>
                            <div class="tab-text">
                                <h3>Hardenable & High-Strength Steels</h3>
                                <p>Essential hydrogen bake-out for high-strength low-alloy (HSLA), quenched & tempered, and hardenable steel grades.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Chrome-moly alloys (4140, 4130, 8630, etc.)</li>
                                    <li><i class="fas fa-check"></i> High-strength low-alloy (HSLA) steels</li>
                                    <li><i class="fas fa-check"></i> Quenched and tempered (Q&T) steels</li>
                                    <li><i class="fas fa-check"></i> Carbon equivalent >0.40 materials</li>
                                    <li><i class="fas fa-check"></i> NACE MR0175 sour service applications</li>
                                    <li><i class="fas fa-check"></i> Oil and gas industry high-strength components</li>
                                    <li><i class="fas fa-check"></i> Pressure vessel quality (PVQ) steels</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">NACE MR0175</span>
                                    <span class="standard-tag">API 582</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">ISO 15156</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thick Section Welds Tab -->
                    <div class="tab-panel" id="thick-section">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/thick-section-bakeout.jpg" alt="Thick Section Bake-Out">
                            </div>
                            <div class="tab-text">
                                <h3>Thick Section & High-Restraint Welds</h3>
                                <p>Hydrogen bake-out for thick material welds where high restraint increases hydrogen cracking susceptibility.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Thick plate welds (>1" / 25mm thickness)</li>
                                    <li><i class="fas fa-check"></i> High-restraint joint configurations</li>
                                    <li><i class="fas fa-check"></i> Heavy equipment and machinery fabrications</li>
                                    <li><i class="fas fa-check"></i> Thick wall pressure vessel welds</li>
                                    <li><i class="fas fa-check"></i> Offshore platform structural welds</li>
                                    <li><i class="fas fa-check"></i> Heavy casting repair welds</li>
                                    <li><i class="fas fa-check"></i> Multi-pass welds in thick sections</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">ASME Section VIII</span>
                                    <span class="standard-tag">EN 1011</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repair & Field Welding Tab -->
                    <div class="tab-panel" id="repair-welding">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/heat-treatment/field-bakeout.jpg" alt="Field Bake-Out">
                            </div>
                            <div class="tab-text">
                                <h3>Repair Welding & Field Applications</h3>
                                <p>Portable hydrogen bake-out for repair welding, field installations, and in-service equipment.</p>
                                
                                <ul class="checklist-list">
                                    <li><i class="fas fa-check"></i> Equipment repair welding on hardenable steels</li>
                                    <li><i class="fas fa-check"></i> Field pipeline repair welds</li>
                                    <li><i class="fas fa-check"></i> In-service equipment modifications</li>
                                    <li><i class="fas fa-check"></i> Temporary repairs requiring hydrogen control</li>
                                    <li><i class="fas fa-check"></i> Offshore platform repair welding</li>
                                    <li><i class="fas fa-check"></i> Field-erected tank shell repairs</li>
                                    <li><i class="fas fa-check"></i> Portable ceramic pad heating systems</li>
                                </ul>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510/570</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">NBIC</span>
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
                <span class="section-label">COMPREHENSIVE BAKE-OUT SERVICES</span>
                <h2>Our Hydrogen Bake-Out Capabilities</h2>
                <p>Precision post-heating systems for effective hydrogen removal</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Post-Weld Hydrogen Bake-Out</h3>
                    <p>Immediate post-heating after welding to drive out diffusible hydrogen before cooling to room temperature.</p>
                    <ul>
                        <li>Temperature: 200-400°C (400-750°F)</li>
                        <li>Hold time: 1-4 hours (based on thickness)</li>
                        <li>Ceramic pad or induction heating</li>
                        <li>Controlled cooling after bake-out</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Pre-Weld Hydrogen Bake-Out</h3>
                    <p>Preheating treatment to remove hydrogen from base material before welding (especially for thick sections and hydrogen-charged materials).</p>
                    <ul>
                        <li>Temperature: 200-300°C (400-570°F)</li>
                        <li>Extended soak for hydrogen removal</li>
                        <li>Used for hydrogen-charged materials</li>
                        <li>Combined with preheat strategy</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Furnace Hydrogen Bake-Out</h3>
                    <p>Controlled furnace bake-out for smaller components, castings, and forgings requiring hydrogen removal.</p>
                    <ul>
                        <li>Uniform temperature throughout</li>
                        <li>Controlled atmosphere (air or inert)</li>
                        <li>Suitable for batch processing</li>
                        <li>Complete temperature documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Local Ceramic Pad Bake-Out</h3>
                    <p>Portable ceramic pad resistance heating for field applications and localized hydrogen removal.</p>
                    <ul>
                        <li>Multi-zone temperature control</li>
                        <li>Thermocouple monitoring</li>
                        <li>Insulation for thermal efficiency</li>
                        <li>Suitable for any orientation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Induction Hydrogen Bake-Out</h3>
                    <p>Rapid induction heating for localized hydrogen removal in specific areas and high-production applications.</p>
                    <ul>
                        <li>Fast heating rates</li>
                        <li>Precise temperature control</li>
                        <li>Minimal heat affected zone</li>
                        <li>Ideal for localized areas</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Verification & Documentation</h3>
                    <p>Complete documentation and verification of hydrogen bake-out treatment for code compliance.</p>
                    <ul>
                        <li>Time-temperature charts</li>
                        <li>Thermocouple placement records</li>
                        <li>Hardness verification where required</li>
                        <li>Complete certification package</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== BAKE-OUT PROCESS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">BAKE-OUT PROCESS</span>
                    <h2>Our Hydrogen Bake-Out Workflow</h2>
                    <p>Systematic post-heating process ensuring complete hydrogen removal and crack prevention.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Material & Code Assessment</h4>
                                <p>Review of material grade, carbon equivalent, thickness, and code requirements for hydrogen bake-out determination.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Post-Heating Application</h4>
                                <p>Immediate post-heating after welding (or pre-weld bake-out) using ceramic pads, induction, or furnace.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Soak & Hydrogen Diffusion</h4>
                                <p>Controlled soak at target temperature allowing hydrogen to diffuse out of the steel microstructure.</p>
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
                            <img src="/www/assets/images/certs/aws-cert.png" alt="AWS">
                            <img src="/www/assets/images/certs/iso-9001-cert.png" alt="ISO 9001">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/heat-treatment/bakeout-workflow.jpg" alt="Bake-Out Workflow">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>View Bake-Out Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Temp 200-400°C</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Immediate Post-Heating</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Hydrogen Diffusion</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Crack Prevention</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== HYDROGEN CRACKING SUSCEPTIBILITY ===================== -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">CRACKING SUSCEPTIBILITY</span>
                <h2>Hydrogen Cracking Susceptibility Guide</h2>
                <p>Understanding when hydrogen bake-out is required</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Equivalent < 0.35</h3>
                    <p>Low susceptibility. Hydrogen bake-out typically not required except for very thick sections or high restraint joints.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Equivalent 0.35-0.40</h3>
                    <p>Moderate susceptibility. Hydrogen bake-out recommended for thickness >1" (25mm) and high restraint joints.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Equivalent 0.40-0.50</h3>
                    <p>High susceptibility. Hydrogen bake-out required for most thicknesses. Critical for sour service.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Carbon Equivalent > 0.50</h3>
                    <p>Very high susceptibility. Hydrogen bake-out mandatory for all welding. PWHT often required.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>P-No. 3,4,5 (Chrome-Moly)</h3>
                    <p>All chrome-moly alloys require hydrogen bake-out or immediate PWHT per ASME codes.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Sour Service (NACE MR0175)</h3>
                    <p>Hydrogen bake-out required for most materials in H₂S service to meet hardness limits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PREHEAT VS BAKE-OUT ===================== -->
    <section class="advantages-section" style="background: #fff;">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PROCESS COMPARISON</span>
                <h2>Preheat vs Hydrogen Bake-Out vs PWHT</h2>
                <p>Understanding hydrogen control strategies</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Preheat (Before Welding)</h3>
                    <p>Temp: 50-250°C. Purpose: Slow cooling rate, reduce HAZ hardness, allow hydrogen diffusion during welding. Timing: Applied before welding, maintained during welding.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Hydrogen Bake-Out (Post-Heating)</h3>
                    <p>Temp: 200-400°C. Purpose: Rapid hydrogen diffusion after welding before cooling to room temperature. Timing: Immediately after welding, before cool down.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Post Weld Heat Treatment (PWHT)</h3>
                    <p>Temp: 540-705°C. Purpose: Stress relief, hydrogen removal, microstructure tempering. Timing: After welding, may be days or weeks later.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>When to Use Preheat Only</h3>
                    <p>Low carbon steels, CE < 0.35, thin sections, low restraint, non-critical service.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>When to Add Bake-Out</h3>
                    <p>CE > 0.40, thick sections, high restraint, sour service, chrome-moly alloys.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>When PWHT is Required</h3>
                    <p>ASME-mandated thicknesses, chrome-moly alloys, stress corrosion service, hardness limits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Hydrogen Bake-Out Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>When is hydrogen bake-out required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Hydrogen bake-out is required for hardenable steels (carbon equivalent >0.40), chrome-moly alloys (P-No. 3,4,5), thick sections >1" (25mm), high-restraint joints, and sour service applications (NACE MR0175). Many codes also mandate post-heating for specific material and thickness combinations.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What temperature and time are used for hydrogen bake-out?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Typical bake-out temperature is 200-400°C (400-750°F). Hold time is typically 1-4 hours depending on material thickness. Thicker sections require longer soak times for complete hydrogen diffusion. Minimum 1 hour per inch of thickness is common.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How soon after welding must hydrogen bake-out be applied?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Hydrogen bake-out should be applied immediately after welding, before the component cools below 100-150°C. Delays allow hydrogen to diffuse to critical stress concentration areas, potentially causing cracking even if bake-out is performed later.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between hydrogen bake-out and PWHT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Hydrogen bake-out is a lower temperature post-heating (200-400°C) applied immediately after welding solely for hydrogen removal. PWHT is higher temperature (540-705°C) for stress relief and may be applied days or weeks after welding. PWHT also removes hydrogen but may come too late if cracking has already initiated.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can hydrogen bake-out replace preheating?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No, hydrogen bake-out cannot replace preheating. Preheat slows cooling rates and reduces HAZ hardness. Bake-out removes hydrogen after welding. Both are often required for hardenable steels. Preheat + bake-out + PWHT may be required for critical applications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does hydrogen bake-out affect mechanical properties?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Bake-out at 200-300°C (400-570°F) has minimal effect on mechanical properties. Bake-out at 350-400°C (660-750°F) may slightly reduce hardness and strength but also improves toughness. For materials with specific hardness limits (e.g., NACE MR0175), bake-out parameters must be carefully controlled.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do codes require hydrogen bake-out?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>ASME Section VIII and B31.3 require post-heating (hydrogen bake-out) for certain material groups and thicknesses. API 1104 specifies post-heating for high-strength pipeline steels. AWS D1.1 requires post-heating for specific steel categories. NACE MR0175 imposes hardness limits that often require hydrogen bake-out.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you verify hydrogen removal effectiveness?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary verification is compliance with time-temperature parameters (heating rate, temperature, soak time, cooling rate). Hardness testing before/after can indicate effectiveness. For critical applications, hydrogen analysis can measure residual hydrogen levels. NDE after 48-72 hours (delayed inspection) confirms no hydrogen cracking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Prevent Hydrogen Cracking in Your Welds</h2>
                <p>Contact our heat treatment specialists for professional hydrogen bake-out services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:heattreat@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Heat Treatment Team</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Post-Weld Hydrogen Removal</span>
                    <span><i class="fas fa-check"></i> Code Compliant</span>
                    <span><i class="fas fa-check"></i> Crack Prevention</span>
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

                <a href="/www/pages/industrial-heat-treatment/preheating-services.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h3>Preheating Services</h3>
                    <p>Weld preheat and interpass control</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/industrial-heat-treatment/normalizing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Normalizing</h3>
                    <p>Grain refinement and uniform properties</p>
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
            </div>
        </div>
    </section>

    <?php include $base . '/includes/footer.php'; ?>
    
    <script src="/www/assets/js/script.js"></script>
    <script src="/www/assets/js/service-page.js"></script>

</body>
</html>