<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Radiography Testing (RT) Services | X-Ray & Gamma Ray Inspection | Alpha Sonix NDT Solutions";
$meta_description = "Professional Radiography Testing (RT) services using X-ray and gamma ray inspection for welds, castings, and assemblies. Film and digital radiography with code-compliant procedures per ASME, ASTM, API & AWS standards.";
$meta_keywords = "radiography testing, RT inspection, X-ray testing, gamma ray inspection, industrial radiography, film radiography, digital radiography, weld radiography, casting inspection, ASME Sec V, ASTM E94";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/radiography-testing.php";
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
    <meta property="og:image" content="/www/assets/images/services/rt-og.jpg">

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
            "serviceType": "Radiography Testing (RT) & X-Ray Inspection",
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
            "description": "Professional Radiography Testing services using X-ray and gamma ray inspection for volumetric examination of welds, castings, and assemblies with permanent image documentation."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/rt-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Radiography Testing</span>
                </div>
                <h1 class="page-title">Radiography Testing (RT)</h1>
                <p class="page-subtitle">Comprehensive volumetric inspection using X-ray and gamma ray imaging—permanent visual records, excellent for porosity and inclusions, code-required for critical pressure vessel and pipeline welds</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-radiation"></i> X-Ray & Gamma Ray Capable</span>
                    <span class="badge"><i class="fas fa-image"></i> Permanent Image Records</span>
                    <span class="badge"><i class="fas fa-certificate"></i> ASME / API / AWS Qualified</span>
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
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3>Complete Volumetric Coverage</h3>
                    <p>Examines the entire thickness of materials to detect internal defects such as porosity, inclusions, cracks, and lack of fusion throughout the weld or component volume.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-file-image"></i>
                    </div>
                    <h3>Permanent Image Documentation</h3>
                    <p>Film or digital radiographs provide permanent visual records for quality assurance, code compliance, client acceptance, and long-term integrity management.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-circle-nodes"></i>
                    </div>
                    <h3>Excellent Porosity Detection</h3>
                    <p>Superior ability to detect and characterize gas porosity, wormholes, inclusions, and other volumetric discontinuities that may not be detected by other NDT methods.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Code-Required Method</h3>
                    <p>Specified by ASME, API, AWS, and international codes for critical pressure vessel, pipeline, and structural applications where volumetric examination is mandatory.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS RT ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">VOLUMETRIC INSPECTION METHOD</span>
                    <h2>What is Radiography Testing (RT)?</h2>
                    <p class="lead">Radiography Testing (RT) is a volumetric non-destructive inspection method that uses ionizing radiation (X-rays or gamma rays) to penetrate materials and create images showing internal structure, defects, and discontinuities.</p>

                    <p>RT works by directing radiation through the component onto image recording media (film or digital detector). Different materials and thicknesses absorb radiation differently—defects such as porosity, cracks, and inclusions appear as density variations on the resulting image. The technique provides a permanent visual record of internal conditions that can be interpreted, measured, archived, and reviewed by multiple parties.</p>

                    <p>Radiography is widely considered the gold standard for detecting volumetric defects such as porosity, slag inclusions, tungsten inclusions, and lack of penetration. It is particularly valuable for welds, castings, and assemblies where internal quality verification is critical for safety, performance, or regulatory compliance.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Internal Defect Visualization</strong>
                                <p>Directly images internal discontinuities including porosity, inclusions, cracks, lack of fusion, and lack of penetration within the component volume.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Permanent Documentation</strong>
                                <p>Film radiographs or digital images provide archival records for quality control, acceptance criteria verification, and future reference or re-evaluation.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code & Standard Recognition</strong>
                                <p>Widely accepted and specified by construction codes, pressure vessel standards, and quality systems as a primary volumetric inspection method.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Independent Review Capability</strong>
                                <p>Images can be independently interpreted by multiple reviewers, supporting third-party verification, expert consultation, and audit requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>RT Safety & Expertise:</strong>
                            <p>Industrial radiography requires specialized radiation safety training, equipment, and procedures. Our certified radiographers ensure safe, compliant operations while delivering high-quality imaging results for critical component evaluation.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request RT Service</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/rt-equipment.jpg" alt="Radiography Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Industrial X-ray equipment with film and digital radiography capabilities</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">5,000+</span>
                            <span class="stat-label">Radiographs Taken</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Volume Coverage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Permanent</span>
                            <span class="stat-label">Image Records</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> RT Imaging Process</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Radiation source positioned to penetrate component</li>
                            <li><strong>2.</strong> X-rays or gamma rays pass through material</li>
                            <li><strong>3.</strong> Internal defects absorb radiation differently</li>
                            <li><strong>4.</strong> Image formed on film or digital detector</li>
                            <li><strong>5.</strong> Processed image interpreted for defect evaluation</li>
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
                <span class="section-label">WHY CHOOSE RT</span>
                <h2>Key Advantages of Radiography Testing</h2>
                <p>Comprehensive volumetric inspection with permanent documentation and proven industry acceptance</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-layers"></i>
                    </div>
                    <h3>Complete Volume Examination</h3>
                    <p>Inspects the entire thickness and volume of the component in a single exposure—detecting internal defects that surface methods cannot reach.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-circle-dot"></i>
                    </div>
                    <h3>Superior Porosity Detection</h3>
                    <p>Excellent sensitivity to gas porosity, wormholes, inclusions, and other rounded discontinuities—particularly important for casting and welding applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-archive"></i>
                    </div>
                    <h3>Permanent Visual Records</h3>
                    <p>Film or digital images provide archival documentation for quality records, acceptance verification, re-evaluation, and independent review by third parties.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Independent Interpretation</h3>
                    <p>Multiple interpreters can review the same image, supporting consensus evaluation, expert consultation, and dispute resolution for acceptance decisions.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Industry Standard Method</h3>
                    <p>Widely accepted by codes, standards, and regulatory bodies as a proven volumetric inspection method with established acceptance criteria and qualification procedures.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Defect Sizing & Characterization</h3>
                    <p>Provides dimensional information about internal discontinuities including length, width, distribution, and relative density—supporting engineering evaluation and repair decisions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">RT APPLICATIONS</span>
                <h2>Industries & Components We Radiograph</h2>
                <p>Professional radiography services across pressure vessels, pipelines, structural welding, and precision castings</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="welding">Weld Radiography</button>
                    <button class="tab-btn" data-tab="castings">Castings & Forgings</button>
                    <button class="tab-btn" data-tab="assemblies">Assemblies & Components</button>
                    <button class="tab-btn" data-tab="special">Specialized Applications</button>
                </div>

                <div class="tabs-content">
                    <!-- Weld Radiography Tab -->
                    <div class="tab-panel active" id="welding">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rt-weld.jpg" alt="Weld Radiography">
                            </div>
                            <div class="tab-text">
                                <h3>Weld Inspection & Quality Verification</h3>
                                <p>Volumetric examination of welds to detect internal discontinuities including porosity, inclusions, lack of fusion, lack of penetration, and cracks—supporting code compliance and quality acceptance.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel and boiler welds (ASME Section I & VIII)</li>
                                    <li><i class="fas fa-check"></i> Pipeline girth and seam welds (API 1104, B31.4, B31.8)</li>
                                    <li><i class="fas fa-check"></i> Structural steel welds (AWS D1.1, D1.5, D1.8)</li>
                                    <li><i class="fas fa-check"></i> Nuclear and high-energy piping (ASME Section III)</li>
                                    <li><i class="fas fa-check"></i> Offshore and subsea welded structures</li>
                                    <li><i class="fas fa-check"></i> Repair welds and overlay cladding</li>
                                    <li><i class="fas fa-check"></i> Root pass and final weld examination</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>ASME Pressure Vessel:</strong> 100% radiographic examination of Category A and B welds per ASME Section VIII Division 1—detecting porosity, inclusions, and lack of fusion to ensure code compliance and safe operation under design pressure and temperature conditions.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec V, Art 2</span>
                                    <span class="standard-tag">API 1104</span>
                                    <span class="standard-tag">AWS D1.1</span>
                                    <span class="standard-tag">ASTM E94</span>
                                    <span class="standard-tag">ISO 17636</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Castings & Forgings Tab -->
                    <div class="tab-panel" id="castings">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rt-casting.jpg" alt="Casting Radiography">
                            </div>
                            <div class="tab-text">
                                <h3>Casting & Forging Internal Quality Assessment</h3>
                                <p>Comprehensive volumetric inspection of steel and iron castings, forgings, and machined components to detect internal porosity, inclusions, shrinkage, and other manufacturing defects.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Steel castings (valve bodies, pump housings, structural nodes)</li>
                                    <li><i class="fas fa-check"></i> Cast iron components (engine blocks, transmission cases)</li>
                                    <li><i class="fas fa-check"></i> Investment castings and precision cast components</li>
                                    <li><i class="fas fa-check"></i> Large forgings (shafts, flanges, pressure vessel heads)</li>
                                    <li><i class="fas fa-check"></i> Porosity, shrinkage, and inclusion detection</li>
                                    <li><i class="fas fa-check"></i> Wall thickness verification and measurement</li>
                                    <li><i class="fas fa-check"></i> Pre-machining quality verification</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Valve Body Casting:</strong> Complete radiographic examination of large steel valve castings for internal porosity and inclusions before final machining—ensuring casting integrity and preventing costly machining of defective components.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E446</span>
                                    <span class="standard-tag">ASTM A609</span>
                                    <span class="standard-tag">ASME Sec V, Art 2</span>
                                    <span class="standard-tag">MSS SP-55</span>
                                    <span class="standard-tag">Client Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Assemblies & Components Tab -->
                    <div class="tab-panel" id="assemblies">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rt-assembly.jpg" alt="Assembly Radiography">
                            </div>
                            <div class="tab-text">
                                <h3>Assembled Components & System Verification</h3>
                                <p>Non-destructive inspection of assembled components, mechanical systems, and complex assemblies to verify internal configuration, detect assembly errors, and ensure proper fit-up.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Mechanical assemblies and gearboxes</li>
                                    <li><i class="fas fa-check"></i> Electronic components and circuit boards</li>
                                    <li><i class="fas fa-check"></i> Aerospace and defense systems</li>
                                    <li><i class="fas fa-check"></i> Assembly verification and configuration checking</li>
                                    <li><i class="fas fa-check"></i> Internal component positioning and alignment</li>
                                    <li><i class="fas fa-check"></i> Foreign object detection (FOD)</li>
                                    <li><i class="fas fa-check"></i> Quality control and incoming inspection</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Aerospace Component Assembly:</strong> Radiographic verification of complex mechanical assembly to ensure proper internal component placement, detect foreign objects, and verify assembly completeness before final acceptance and delivery.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E1742</span>
                                    <span class="standard-tag">MIL-STD-453</span>
                                    <span class="standard-tag">ASME Sec V, Art 2</span>
                                    <span class="standard-tag">Client Procedures</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialized Applications Tab -->
                    <div class="tab-panel" id="special">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rt-special.jpg" alt="Specialized Radiography">
                            </div>
                            <div class="tab-text">
                                <h3>Specialized & Advanced Radiography Applications</h3>
                                <p>Advanced radiographic techniques including computed radiography (CR), digital radiography (DR), and specialized configurations for challenging applications and materials.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Computed Radiography (CR) with phosphor plates</li>
                                    <li><i class="fas fa-check"></i> Digital Radiography (DR) with flat panel detectors</li>
                                    <li><i class="fas fa-check"></i> Real-time radiography (RTR) for dynamic inspection</li>
                                    <li><i class="fas fa-check"></i> Panoramic and elliptical radiography</li>
                                    <li><i class="fas fa-check"></i> High-energy radiography for thick sections</li>
                                    <li><i class="fas fa-check"></i> Neutron radiography (specialized facilities)</li>
                                    <li><i class="fas fa-check"></i> Tomography and 3D imaging applications</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Digital Radiography Pipeline:</strong> High-throughput digital radiography of pipeline girth welds using flat panel detectors—providing immediate image availability, digital archiving, and enhanced productivity for large-scale construction projects.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E2033</span>
                                    <span class="standard-tag">ASTM E2445</span>
                                    <span class="standard-tag">ISO 17636-2</span>
                                    <span class="standard-tag">ASME Sec V, Art 2</span>
                                    <span class="standard-tag">EN 14784</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RT TECHNIQUES & SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">RT METHODS & SERVICES</span>
                <h2>Our Radiography Testing Capabilities</h2>
                <p>Complete radiographic solutions using film, computed radiography, and digital imaging systems</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>Conventional Film Radiography</h3>
                    <p>Traditional film-based radiography providing high-resolution images with proven reliability for critical code applications and archival requirements.</p>
                    <ul>
                        <li>Industrial X-ray film processing and development</li>
                        <li>Fine-grain film for maximum resolution</li>
                        <li>Multiple film speeds and contrast options</li>
                        <li>Permanent archival image records</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Computed Radiography (CR)</h3>
                    <p>Digital imaging using reusable phosphor plates—combining film flexibility with digital convenience and immediate image availability.</p>
                    <ul>
                        <li>Reusable imaging plates reduce film costs</li>
                        <li>Digital image processing and enhancement</li>
                        <li>Immediate image availability and review</li>
                        <li>Digital archiving and easy image sharing</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Digital Radiography (DR)</h3>
                    <p>Advanced flat panel detector systems providing real-time imaging, superior productivity, and enhanced image quality for high-volume applications.</p>
                    <ul>
                        <li>Flat panel detector technology</li>
                        <li>Real-time image acquisition and display</li>
                        <li>Superior dynamic range and contrast sensitivity</li>
                        <li>Highest productivity for large projects</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Gamma Ray Radiography</h3>
                    <p>Isotope-based radiography using Ir-192, Co-60, and other gamma sources—ideal for field applications, confined spaces, and remote locations.</p>
                    <ul>
                        <li>Portable gamma ray cameras and sources</li>
                        <li>Suitable for field and confined space applications</li>
                        <li>No electrical power requirements</li>
                        <li>Excellent for thick section and remote inspection</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Panoramic & Special Techniques</h3>
                    <p>Specialized radiographic setups including panoramic exposure, double-wall techniques, and custom configurations for complex geometries.</p>
                    <ul>
                        <li>Panoramic exposure of circumferential welds</li>
                        <li>Double-wall single-image (DWSI) techniques</li>
                        <li>Elliptical and tangential exposure methods</li>
                        <li>Custom source and detector positioning</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Interpretation & Reporting</h3>
                    <p>Expert radiographic interpretation by certified personnel with comprehensive reporting, acceptance evaluation, and client consultation.</p>
                    <ul>
                        <li>ASNT Level II & III certified interpreters</li>
                        <li>Code-compliant acceptance criteria evaluation</li>
                        <li>Detailed written reports with image references</li>
                        <li>Digital image enhancement and measurement</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT & FACILITIES ===================== -->
    <section class="equipment-section">
        <div class="container">
            <div class="equipment-grid">
                <div class="equipment-content">
                    <span class="section-label">ADVANCED RT SYSTEMS</span>
                    <h2>State-of-the-Art Radiography Equipment & Facilities</h2>
                    <p>We operate licensed radiographic facilities with modern X-ray equipment, digital imaging systems, and complete film processing capabilities—ensuring high-quality results with full radiation safety compliance.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-radiation-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Industrial X-Ray Equipment</h4>
                                <p>High-voltage X-ray generators with portable and fixed installations—providing energy ranges from 50 kV to 450 kV for comprehensive material thickness coverage.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Digital Imaging Systems</h4>
                                <p>Computed radiography (CR) and digital radiography (DR) systems with flat panel detectors, image processing software, and archival storage capabilities.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Radiation Safety & Shielding</h4>
                                <p>Licensed radiation safety officer, area monitoring equipment, personal dosimetry, and complete shielding systems ensuring regulatory compliance and personnel safety.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-film"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Film Processing & Darkroom</h4>
                                <p>Complete film processing facilities with automatic processors, darkroom equipment, chemical management, and quality control densitometers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Licenses & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/60/100/50" alt="Radiation License">
                            <img src="https://picsum.photos/id/61/100/50" alt="ASNT Certified">
                            <img src="https://picsum.photos/id/62/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/63/100/50" alt="Safety Certified">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/rt-facility.jpg" alt="Radiography Facility">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Tour Our RT Facility</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Licensed RT Facility</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital & Film Capability</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Complete Safety Program</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Expert Interpretation</span>
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
                <h2>Your Trusted Radiography Partner</h2>
                <p>Licensed facility, certified radiographers, and proven expertise for critical volumetric inspection requirements</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Licensed & Certified</h3>
                    <p>Government-licensed radiographic facility with ASNT-certified Level II and Level III radiographers ensuring compliance with all safety and quality requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3>Film & Digital Capability</h3>
                    <p>Complete range of imaging options from conventional film to advanced digital radiography—selecting the best method for your application and acceptance criteria.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h3>Comprehensive Safety Program</h3>
                    <p>Radiation Safety Officer oversight, complete safety procedures, area monitoring, and personnel dosimetry ensuring safe operations and regulatory compliance.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Expert Interpretation</h3>
                    <p>Experienced radiographic interpreters skilled in code requirements, acceptance criteria, and defect evaluation across diverse industries and applications.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h3>Quality Documentation</h3>
                    <p>Comprehensive radiographic reports with image identification, interpretation results, acceptance evaluation, and recommendations—supporting code compliance and audit requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Flexible Scheduling</h3>
                    <p>Accommodation of project schedules, shutdown requirements, and urgent inspection needs with efficient workflow and rapid turnaround capabilities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Radiography Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of defects can radiography detect?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Radiography excels at detecting volumetric defects including gas porosity, slag inclusions, tungsten inclusions, lack of penetration, some types of lack of fusion, and internal cracks. It is particularly effective for rounded defects such as porosity and inclusions. However, RT is less sensitive to tight planar defects (such as cracks) oriented parallel to the radiation beam. For comprehensive inspection, RT is often combined with ultrasonic testing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between film and digital radiography?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Film radiography</strong> uses X-ray film for image capture, providing high resolution and permanent archival records but requiring chemical processing. <strong>Digital radiography</strong> uses electronic detectors (CR plates or DR panels) providing immediate image availability, digital processing capabilities, and easier archiving but with higher initial equipment costs. Digital methods offer faster turnaround and enhanced productivity for high-volume applications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is radiography safe? What safety measures are required?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Industrial radiography is safe when performed by trained, certified personnel following proper safety procedures. We maintain government licenses, employ a certified Radiation Safety Officer, use personal dosimetry, establish controlled access areas, and follow all regulatory requirements. Area monitoring and safety protocols ensure radiation exposure remains well below regulatory limits for workers and the public.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does radiographic inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection time varies with material thickness, technique requirements, number of exposures, and imaging method. Simple film exposures may take 15-60 minutes including setup and processing. Digital radiography provides immediate results. Complex setups, thick sections, or multiple angles require additional time. We provide schedule estimates based on specific scope and imaging requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What thickness ranges can be radiographed?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Radiography can inspect a wide thickness range depending on material and radiation energy. Typical steel thickness ranges: 6mm to 200mm+ for X-ray systems, and up to 300mm+ for high-energy gamma sources. Very thin materials (< 3mm) may require specialized techniques. Material type, required sensitivity, and geometric constraints affect practical thickness limits. We assess feasibility based on specific application requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can RT detect cracks as well as ultrasonic testing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RT and UT have complementary capabilities. RT is excellent for volumetric defects (porosity, inclusions) and provides permanent visual records, while UT is generally more sensitive to cracks and planar defects, especially those oriented unfavorably to the radiation beam. Many specifications require both RT and UT for comprehensive inspection—RT for volumetric coverage and UT for crack detection.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What standards govern industrial radiography?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Primary standards include ASME Section V Article 2 (code requirements), ASTM E94 (practice for radiographic testing), API 1104 (pipeline welding), AWS D1.1 (structural welding), ISO 17636 (international RT standards), and ASTM E1742 (RT of castings). Radiation safety is governed by national regulatory agencies. We align procedures with applicable codes, standards, and regulatory requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide on-site radiography services?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—we provide both facility-based and field radiography services. On-site services include portable X-ray equipment, gamma ray systems, and mobile processing capabilities. Field work requires site radiation safety assessment, access control setup, and coordination with site safety procedures. We work with clients to determine the most appropriate approach based on component size, location, and project requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Professional Radiography Services?</h2>
                <p>Contact us for volumetric inspection consultation, imaging method selection, and expert radiographic interpretation</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Licensed RT Facility</span>
                    <span><i class="fas fa-check"></i> Film & Digital Options</span>
                    <span><i class="fas fa-check"></i> Expert Interpretation</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT & Volumetric Inspection Services</h2>
                <p>Comprehensive inspection solutions for internal defect detection and component integrity verification</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing (UT)</h3>
                    <p>Complementary volumetric inspection with superior crack detection capability</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced ultrasonic imaging for complex welds and detailed characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>Surface examination and general condition assessment</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/magnetic-particle-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Magnetic Particle Testing</h3>
                    <p>Surface crack detection for ferromagnetic materials</p>
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