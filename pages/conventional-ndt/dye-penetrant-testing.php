<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Liquid Penetrant Testing (PT) Services | Dye Penetrant Inspection & Surface Crack Detection | Alpha Sonix NDT Solutions";
$meta_description = "Professional Liquid Penetrant Testing (PT) services for surface crack detection in all materials. Fluorescent and visible dye penetrant methods, aerospace quality, and code-compliant procedures per ASME, ASTM, AWS & aerospace standards.";
$meta_keywords = "liquid penetrant testing, dye penetrant inspection, PT testing, penetrant inspection, surface crack detection, fluorescent penetrant, visible penetrant, aerospace PT, ASTM E1417, non-ferromagnetic inspection";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/dye-penetrant-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/pt-og.jpg">

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
            "serviceType": "Liquid Penetrant Testing (PT) & Dye Penetrant Inspection",
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
            "description": "Professional Liquid Penetrant Testing services for surface crack detection in all non-porous materials including aluminum, stainless steel, titanium, and aerospace components."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/pt-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Liquid Penetrant Testing</span>
                </div>
                <h1 class="page-title">Liquid Penetrant Testing (PT)</h1>
                <p class="page-subtitle">Versatile surface crack detection for all non-porous materials—aluminum, stainless steel, titanium, plastics, and ceramics. Fluorescent and visible dye methods with aerospace-grade sensitivity</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-globe"></i> All Non-Porous Materials</span>
                    <span class="badge"><i class="fas fa-star"></i> Aerospace Grade Quality</span>
                    <span class="badge"><i class="fas fa-certificate"></i> ASTM E1417 / ASME Sec V Compliant</span>
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
                        <i class="fas fa-materials"></i>
                    </div>
                    <h3>Universal Material Compatibility</h3>
                    <p>Works on all non-porous materials—metals, ceramics, plastics, and composites. Ideal for non-ferromagnetic materials where magnetic particle testing cannot be used.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Exceptional Crack Sensitivity</h3>
                    <p>Detects extremely tight surface-breaking cracks, micro-fissures, and discontinuities invisible to visual inspection—critical for safety-critical applications.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shapes"></i>
                    </div>
                    <h3>Complex Geometry Inspection</h3>
                    <p>Liquid penetrant flows into cracks regardless of component shape, size, or orientation—excellent for complex castings, machined parts, and intricate assemblies.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Industry Standard Method</h3>
                    <p>Widely accepted and specified across aerospace, power generation, petrochemical, and manufacturing industries with established codes and qualification requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS PT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">VERSATILE NDT METHOD</span>
                    <h2>What is Liquid Penetrant Testing (PT)?</h2>
                    <p class="lead">Liquid Penetrant Testing (PT), also known as Dye Penetrant Inspection (DPI), is a surface inspection method that uses capillary action to draw liquid penetrant into surface-breaking discontinuities, making them visible through contrast enhancement and developer application.</p>

                    <p>The PT process involves cleaning the component surface, applying liquid penetrant, allowing dwell time for penetration, removing excess penetrant, applying developer to draw out trapped penetrant, and inspecting for crack indications. The method works on the principle that liquid will be drawn into clean, dry cracks by capillary action and retained even after surface penetrant removal.</p>

                    <p>PT is the most versatile surface inspection method—applicable to virtually all non-porous engineering materials including aluminum, stainless steel, titanium, magnesium, copper alloys, plastics, ceramics, and glass. It is particularly valuable for aerospace, nuclear, petrochemical, and precision manufacturing applications where magnetic particle testing limitations or high sensitivity requirements drive method selection.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material Versatility</strong>
                                <p>Applicable to all non-porous materials regardless of magnetic properties—filling the critical gap where magnetic particle testing cannot be used.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>High Sensitivity Levels</strong>
                                <p>Multiple sensitivity levels (1/2 through 4) available to match application requirements—from general purpose to ultra-high sensitivity aerospace applications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Fluorescent & Visible Options</strong>
                                <p>Fluorescent penetrants under UV light provide maximum sensitivity; visible dye penetrants offer convenience for field and general inspection applications.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Complex Shape Capability</strong>
                                <p>Liquid penetrant flows into cracks and discontinuities regardless of part geometry—ideal for castings, forgings, and machined components with intricate features.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>When PT is Essential:</strong>
                            <p>PT is the method of choice for non-ferromagnetic materials, aerospace components, high-temperature alloys, precision castings, and any application requiring detection of extremely tight surface cracks where magnetic particle testing is not applicable or sufficient.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request PT Inspection</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/pt-equipment.jpg" alt="Liquid Penetrant Testing Materials">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Professional PT materials including fluorescent penetrants, developers, and UV inspection systems</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">20,000+</span>
                            <span class="stat-label">Components Inspected</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Level 4</span>
                            <span class="stat-label">Max Sensitivity</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">All Materials</span>
                            <span class="stat-label">Non-Porous Coverage</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> PT Process Steps</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Clean surface to remove contaminants and open cracks</li>
                            <li><strong>2.</strong> Apply penetrant and allow dwell time for crack penetration</li>
                            <li><strong>3.</strong> Remove excess penetrant from surface</li>
                            <li><strong>4.</strong> Apply developer to draw out trapped penetrant</li>
                            <li><strong>5.</strong> Inspect under appropriate lighting for crack indications</li>
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
                <span class="section-label">WHY CHOOSE PT</span>
                <h2>Key Advantages of Liquid Penetrant Testing</h2>
                <p>Versatile, sensitive, and reliable surface inspection for the widest range of materials and applications</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3>Universal Material Application</h3>
                    <p>Works on all non-porous materials including aluminum, stainless steel, titanium, ceramics, and plastics—providing surface crack detection where other methods are limited.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Ultra-High Sensitivity</h3>
                    <p>Detects extremely tight cracks and micro-fissures invisible to visual inspection—critical for aerospace, nuclear, and safety-critical component qualification.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h3>Complex Geometry Capability</h3>
                    <p>Liquid penetrant flows into cracks regardless of part shape, size, or orientation—ideal for intricate castings, machined features, and assembled components.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Flexible Inspection Options</h3>
                    <p>Choice of fluorescent (maximum sensitivity) or visible dye (field convenience) penetrants with various removal and developer systems to match application needs.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Permanent Visual Record</h3>
                    <p>Clear, high-contrast crack indications can be photographed and documented for quality records, traceability, and engineering evaluation of defect significance.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective Implementation</h3>
                    <p>Relatively simple equipment and materials enable cost-effective inspection for both high-volume production and specialized one-off component evaluation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PT APPLICATIONS</span>
                <h2>Industries & Materials We Inspect</h2>
                <p>Comprehensive penetrant testing across aerospace, power generation, petrochemical, and precision manufacturing</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="aerospace">Aerospace Components</button>
                    <button class="tab-btn" data-tab="nonferrous">Non-Ferrous Metals</button>
                    <button class="tab-btn" data-tab="welding">Welding Applications</button>
                    <button class="tab-btn" data-tab="castings">Castings & Forgings</button>
                </div>

                <div class="tabs-content">
                    <!-- Aerospace Components Tab -->
                    <div class="tab-panel active" id="aerospace">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pt-aerospace.jpg" alt="Aerospace Component PT Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Aerospace & Safety-Critical Component Inspection</h3>
                                <p>High-sensitivity fluorescent penetrant inspection for aircraft structural components, engine parts, and safety-critical hardware where crack detection requirements demand maximum sensitivity and reliability.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aircraft structural components and frame elements</li>
                                    <li><i class="fas fa-check"></i> Turbine engine blades, vanes, and disks</li>
                                    <li><i class="fas fa-check"></i> Landing gear components and actuators</li>
                                    <li><i class="fas fa-check"></i> Flight control hardware and attachments</li>
                                    <li><i class="fas fa-check"></i> Titanium and aluminum aerospace alloys</li>
                                    <li><i class="fas fa-check"></i> Inconel, Hastelloy, and high-temperature alloys</li>
                                    <li><i class="fas fa-check"></i> Critical bolting and fastener inspection</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Turbine Blade Inspection:</strong> Level 3/4 fluorescent penetrant testing of nickel-based superalloy turbine blades for fatigue cracks, manufacturing defects, and service-induced damage. Ultra-high sensitivity requirements and documentation traceability support airworthiness and continued operation decisions.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AMS 2644</span>
                                    <span class="standard-tag">ASTM E1417</span>
                                    <span class="standard-tag">AMS 2647</span>
                                    <span class="standard-tag">NADCAP AC7114</span>
                                    <span class="standard-tag">SAE AMS-STD-1949</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Non-Ferrous Metals Tab -->
                    <div class="tab-panel" id="nonferrous">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pt-nonferrous.jpg" alt="Non-Ferrous Metal PT Testing">
                            </div>
                            <div class="tab-text">
                                <h3>Non-Ferromagnetic Material Testing</h3>
                                <p>Essential surface crack detection for aluminum, stainless steel, titanium, copper alloys, and other non-ferromagnetic materials where magnetic particle testing cannot be applied.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aluminum alloys (6061, 7075, 2024, casting alloys)</li>
                                    <li><i class="fas fa-check"></i> Austenitic stainless steels (304, 316, 321, 347)</li>
                                    <li><i class="fas fa-check"></i> Titanium alloys (Ti-6Al-4V, commercially pure titanium)</li>
                                    <li><i class="fas fa-check"></i> Copper, brass, bronze, and nickel alloys</li>
                                    <li><i class="fas fa-check"></i> Magnesium alloys and specialty metals</li>
                                    <li><i class="fas fa-check"></i> Duplex and super-duplex stainless steels</li>
                                    <li><i class="fas fa-check"></i> Precipitation-hardened stainless steels</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Stainless Steel Pressure Vessel:</strong> PT inspection of 316L stainless steel weld heat-affected zones for stress corrosion cracking and intergranular attack—providing critical surface examination where magnetic particle testing is ineffective due to non-ferromagnetic material properties.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec V, Art 6</span>
                                    <span class="standard-tag">ASTM E1417</span>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">AWS D1.6</span>
                                    <span class="standard-tag">ISO 3452</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Welding Applications Tab -->
                    <div class="tab-panel" id="welding">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pt-weld.jpg" alt="Weld PT Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Weld Inspection & Heat-Affected Zone Testing</h3>
                                <p>Surface examination of welds in non-ferromagnetic materials, root pass inspection, final weld inspection, and heat-affected zone crack detection where magnetic particle testing is not applicable.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Stainless steel and aluminum weld inspection</li>
                                    <li><i class="fas fa-check"></i> Titanium and specialty alloy welds</li>
                                    <li><i class="fas fa-check"></i> Root pass and inter-pass crack detection</li>
                                    <li><i class="fas fa-check"></i> Final weld surface examination</li>
                                    <li><i class="fas fa-check"></i> Heat-affected zone (HAZ) cracking assessment</li>
                                    <li><i class="fas fa-check"></i> Repair weld qualification and acceptance</li>
                                    <li><i class="fas fa-check"></i> Dissimilar metal weld inspection</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Nuclear Piping Welds:</strong> High-sensitivity PT inspection of 304 stainless steel nuclear piping welds for stress corrosion cracking and fabrication defects—supporting code compliance, regulatory requirements, and operational safety in critical nuclear applications.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec III</span>
                                    <span class="standard-tag">AWS D1.6</span>
                                    <span class="standard-tag">ASME Sec V, Art 6</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ASTM E1417</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Castings & Forgings Tab -->
                    <div class="tab-panel" id="castings">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pt-casting.jpg" alt="Casting PT Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Castings, Forgings & Machined Component Testing</h3>
                                <p>Quality control and acceptance testing for aluminum castings, titanium forgings, machined precision components, and complex geometry parts where surface integrity is critical.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aluminum and magnesium castings (sand, investment, die cast)</li>
                                    <li><i class="fas fa-check"></i> Titanium and aluminum forgings</li>
                                    <li><i class="fas fa-check"></i> Precision machined components and assemblies</li>
                                    <li><i class="fas fa-check"></i> Investment castings and lost-wax components</li>
                                    <li><i class="fas fa-check"></i> Heat treatment crack detection</li>
                                    <li><i class="fas fa-check"></i> Machining and grinding damage assessment</li>
                                    <li><i class="fas fa-check"></i> Final QC before coating or assembly</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Automotive Aluminum Casting:</strong> Production PT inspection of aluminum engine blocks and cylinder heads for porosity, hot tears, and machining damage—ensuring casting integrity and preventing field failures in high-volume automotive manufacturing.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E1417</span>
                                    <span class="standard-tag">ASTM A275</span>
                                    <span class="standard-tag">ISO 3452</span>
                                    <span class="standard-tag">AMS 2644</span>
                                    <span class="standard-tag">Client Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PT METHODS & SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PT METHODS & SERVICES</span>
                <h2>Our Liquid Penetrant Testing Capabilities</h2>
                <p>Complete PT solutions using fluorescent and visible penetrants with multiple sensitivity levels and process options</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Fluorescent Penetrant Testing</h3>
                    <p>Maximum sensitivity inspection using fluorescent penetrants viewed under UV-A black light—ideal for aerospace, nuclear, and critical component applications.</p>
                    <ul>
                        <li>Sensitivity levels 1/2, 1, 2, 3, and 4 (ultra-high sensitivity)</li>
                        <li>Water-washable, post-emulsifiable, and solvent-removable systems</li>
                        <li>UV-A black light inspection (365 nm)</li>
                        <li>Superior contrast and defect visibility</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Visible Dye Penetrant Testing</h3>
                    <p>Convenient red dye penetrant inspection for field applications, general purpose testing, and situations where UV lighting is impractical.</p>
                    <ul>
                        <li>High-contrast red dye against white developer background</li>
                        <li>Visible light inspection (natural or artificial lighting)</li>
                        <li>Excellent for field, outdoor, and general inspection</li>
                        <li>Simple application and no special lighting required</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Water-Washable Systems</h3>
                    <p>Convenient penetrant removal using water spray or immersion—ideal for simple shapes and production line applications.</p>
                    <ul>
                        <li>Type I (fluorescent) and Type II (visible) penetrants</li>
                        <li>Direct water removal without emulsification</li>
                        <li>Fast processing for high-volume applications</li>
                        <li>Good for simple geometries and accessible surfaces</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Post-Emulsifiable Systems</h3>
                    <p>Controlled penetrant removal using lipophilic or hydrophilic emulsifiers—providing precise control over removal process for optimal sensitivity.</p>
                    <ul>
                        <li>Separate penetrant and emulsifier application</li>
                        <li>Controlled emulsification time for optimized results</li>
                        <li>Superior retention in tight cracks</li>
                        <li>Excellent for complex geometries and critical applications</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Solvent-Removable Systems</h3>
                    <p>Penetrant removal using solvent wiping—excellent for field inspection, small parts, and situations where water systems are not practical.</p>
                    <ul>
                        <li>Manual solvent removal with lint-free cloths</li>
                        <li>Portable and field-friendly application</li>
                        <li>No water or emulsifier requirements</li>
                        <li>Ideal for on-site and maintenance inspection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Specialized PT Applications</h3>
                    <p>Custom penetrant testing solutions for unique requirements including high-temperature, contaminated surfaces, and automated processing.</p>
                    <ul>
                        <li>High-temperature penetrants for hot surface inspection</li>
                        <li>Contamination-tolerant systems for service environments</li>
                        <li>Automated dipping and spray systems</li>
                        <li>Custom penetrant system selection and optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & MATERIALS ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">PROFESSIONAL PT MATERIALS</span>
                    <h2>Complete Penetrant Testing Systems</h2>
                    <p>We use qualified penetrant materials, calibrated UV lighting, and controlled processing equipment to ensure consistent, traceable, and specification-compliant penetrant testing results.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Qualified Penetrant Materials</h4>
                                <p>AMS and ASTM qualified penetrant systems from leading manufacturers—including sensitivity level verification, batch certificates, and full traceability documentation.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Calibrated UV-A Black Lights</h4>
                                <p>UV-A lamps (365 nm) with intensity meters and calibration certificates—ensuring proper fluorescent penetrant visibility and standardized inspection conditions.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Process Control Equipment</h4>
                                <p>Temperature monitoring, timing controls, contamination test kits, and environmental monitoring to maintain specification-compliant processing conditions.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-spray-can"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Application & Processing Equipment</h4>
                                <p>Spray booths, immersion tanks, automated processing lines, drying ovens, and developer application systems for consistent, controlled penetrant testing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Quality & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/50/100/50" alt="NADCAP Accredited">
                            <img src="https://picsum.photos/id/51/100/50" alt="AMS Qualified">
                            <img src="https://picsum.photos/id/52/100/50" alt="ASTM Compliant">
                            <img src="https://picsum.photos/id/53/100/50" alt="ISO 9001:2015">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/pt-inspection-work.jpg" alt="PT Inspection Process">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch PT Inspection Workflow</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Sensitivity Level 4 Capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Fluorescent & Visible Systems</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Qualified Materials</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Process Control</span>
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
                <h2>Your Expert PT Inspection Partner</h2>
                <p>Aerospace-grade quality, certified technicians, and proven results for the most demanding surface inspection requirements</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Aerospace-Grade Quality</h3>
                    <p>NADCAP-accredited processes, AMS-qualified materials, and aerospace industry experience supporting the highest quality and sensitivity requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Certified PT Specialists</h3>
                    <p>ASNT Level II and Level III certified technicians with specialized training in high-sensitivity penetrant testing and aerospace/nuclear applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Maximum Sensitivity Capability</h3>
                    <p>Level 3 and Level 4 fluorescent penetrant systems providing ultra-high sensitivity for the most demanding crack detection applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Complete Documentation</h3>
                    <p>Detailed inspection reports with penetrant batch certificates, process parameter records, photographic evidence, and full traceability for audit and certification requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Qualified Materials</h3>
                    <p>Only AMS and ASTM qualified penetrant systems from approved manufacturers with batch qualification records and sensitivity verification testing.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Application Expertise</h3>
                    <p>Deep understanding of material behavior, processing optimization, and specification requirements across aerospace, nuclear, petrochemical, and precision manufacturing industries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>PT Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What materials can be tested with liquid penetrant testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Liquid penetrant testing works on all non-porous materials including all metals (ferromagnetic and non-ferromagnetic), ceramics, plastics, and glass. It is especially valuable for aluminum, stainless steel, titanium, copper alloys, and other non-ferromagnetic materials where magnetic particle testing cannot be used. PT cannot be used on porous materials such as unglazed ceramics or materials with surface coatings that seal surface-breaking cracks.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between fluorescent and visible dye penetrants?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Fluorescent penetrants</strong> glow under UV-A black light, providing superior contrast and higher sensitivity for detecting tight cracks—ideal for critical applications. <strong>Visible dye penetrants</strong> appear as red indications against white developer under normal lighting—convenient for field use and general inspection. Fluorescent systems typically offer higher sensitivity but require UV lighting and controlled environments.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How sensitive is penetrant testing compared to other methods?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>High-sensitivity fluorescent penetrant testing (Level 3/4) can detect extremely tight surface cracks—often tighter than magnetic particle testing or visual inspection can reveal. Sensitivity depends on crack width, depth, and surface condition. PT excels at detecting tight fatigue cracks, stress corrosion cracking, and manufacturing defects. However, it only detects surface-breaking discontinuities—not internal defects like ultrasonic or radiographic methods.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What surface preparation is required for PT?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Surfaces must be clean and free of contaminants that could prevent penetrant entry or mask indications—including oil, grease, paint, scale, weld spatter, and embedded dirt. Cracks must be open to the surface. Chemical cleaning, degreasing, or paint removal may be required. The degree of surface preparation depends on acceptance criteria and sensitivity requirements. Critical aerospace applications often require more extensive cleaning than general industrial inspection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does the penetrant testing process take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Process time depends on penetrant system, part complexity, and specification requirements. Typical dwell times range from 5-60 minutes depending on penetrant type and material. Total process time including cleaning, application, dwell, removal, developing, and inspection varies from 30 minutes for simple parts to several hours for complex components requiring extensive preparation. High-volume production lines can be optimized for faster throughput.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are penetrant sensitivity levels?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Sensitivity levels indicate penetrant capability to detect fine cracks: <strong>Level 1/2</strong> (lowest sensitivity) for general purpose, <strong>Level 1</strong> for standard applications, <strong>Level 2</strong> for higher sensitivity, <strong>Level 3</strong> for high sensitivity, and <strong>Level 4</strong> (ultra-high sensitivity) for aerospace and nuclear applications. Higher sensitivity levels can detect tighter cracks but may require more controlled processing and evaluation. Level selection depends on application criticality and specification requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can PT detect internal defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No—liquid penetrant testing only detects surface-breaking discontinuities. The penetrant must be able to enter the crack from the surface. Internal defects such as porosity, inclusions, or buried cracks cannot be detected unless they reach the surface. For internal defect detection, volumetric methods such as ultrasonic testing, radiography, or computed tomography are required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What quality standards govern penetrant testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary standards include ASTM E1417 (standard practice for PT), ASME Section V Article 6 (code requirements), AMS 2644 (aerospace fluorescent penetrants), AMS 2647 (aerospace visible penetrants), ISO 3452 (international PT standard), and NADCAP AC7114 (aerospace quality requirements). Material qualification follows AMS 2644 and related specifications. We align procedures with applicable codes, standards, and client specifications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need High-Sensitivity Surface Crack Detection?</h2>
                <p>Contact us for penetrant testing consultation, sensitivity level selection, and aerospace-grade inspection services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Aerospace Grade Quality</span>
                    <span><i class="fas fa-check"></i> All Material Types</span>
                    <span><i class="fas fa-check"></i> Maximum Sensitivity</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT & Surface Inspection Services</h2>
                <p>Comprehensive surface and volumetric inspection solutions for complete component evaluation</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/magnetic-particle-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Surface crack detection for ferromagnetic materials with immediate visual results</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>General surface examination and weld quality assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/eddy-current-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    <h3>Eddy Current Testing</h3>
                    <p>Fast electromagnetic inspection for tubes and surface cracks</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Volumetric inspection for internal defect detection and sizing</p>
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