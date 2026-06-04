<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "PAUT Inspection Services | Phased Array Ultrasonic Testing | Alpha Sonix NDT Solutions";
$meta_description = "Code-compliant Phased Array Ultrasonic Testing (PAUT) for welds, pipelines, pressure vessels, and critical components. Certified Level II & Level III technicians, accurate flaw detection & sizing, and detailed digital reporting.";
$meta_keywords = "PAUT, phased array ultrasonic testing, phased array UT, weld inspection, pipeline weld PAUT, pressure vessel inspection, ultrasonic flaw detection, corrosion mapping, crack detection, NDT services";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/paut.php";
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
    <meta property="og:image" content="https://picsum.photos/id/20/1200/630">

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
        "serviceType": "Phased Array Ultrasonic Testing (PAUT)",
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
        "description": "Professional Phased Array Ultrasonic Testing (PAUT) services for industrial applications, including weld inspection, flaw sizing, corrosion mapping, and integrity assessment."
    }
    </script>
</head>

<body>

<?php include $base . '/includes/top-bar.php'; ?>
<?php include $base . '/includes/header.php'; ?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
   <div class="page-hero-bg" style="background-image: url('/www/assets/images/Paut/paut1.png');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Advanced NDT Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>PAUT</span>
            </div>
            <h1 class="page-title">Phased Array Ultrasonic Testing (PAUT)</h1>
            <p class="page-subtitle">Advanced ultrasonic imaging for weld quality, accurate flaw sizing, and reliable integrity decisions</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> ISO 9001:2015 Quality System</span>
                <span class="badge"><i class="fas fa-user-check"></i> Certified Level II & Level III Technicians</span>
                <span class="badge"><i class="fas fa-clock"></i> Rapid Mobilization & Support</span>
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
                    <i class="fas fa-search"></i>
                </div>
                <h3>High-Resolution Detection</h3>
                <p>Identify and characterize internal discontinuities with excellent sensitivity and repeatable flaw sizing using phased array technology.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3>Efficient Coverage</h3>
                <p>Electronic scanning and multi-angle inspection help achieve faster coverage and reduced downtime compared with many conventional techniques.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>Digital Traceability</h3>
                <p>Clear, auditable reporting with recorded A-Scan, B-Scan, C-Scan, and S-Scan data to support reviews, re-analysis, and long-term records.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Code & Spec Ready</h3>
                <p>Inspection practices aligned with ASME, API, AWS, ISO, and project-specific requirements.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS PAUT ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">ADVANCED NDT TECHNOLOGY</span>
                <h2>What is Phased Array Ultrasonic Testing (PAUT)?</h2>
                <p class="lead">Phased Array Ultrasonic Testing (PAUT) is an advanced UT technique that uses multiple probe elements and programmed time delays to steer and focus the ultrasonic beam, producing detailed images from inside a component.</p>
                
                <p>Unlike conventional UT (typically one element and one fixed beam), PAUT uses an array probe (linear or matrix) where elements are pulsed in a controlled sequence. This allows electronic beam steering, focusing, and sectorial scanning—often from a single probe position—improving coverage and interpretation, especially in weld inspections and complex geometries.</p>
                
                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Electronic Beam Steering</strong>
                            <p>Inspect multiple angles from one probe location, improving coverage of weld bevels, roots, and fusion faces.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Sectorial & Linear Scanning</strong>
                            <p>Generate planned scan patterns that support consistent inspections and dependable repeatability across technicians and sites.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Clear Imaging for Interpretation</strong>
                            <p>Visualize indications with A-Scan, B-Scan, C-Scan, and Sectorial (S-Scan) views to support accurate characterization.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Recorded Results & Review</strong>
                            <p>Store complete inspection data for traceability, independent review, and future comparison during in-service monitoring.</p>
                        </div>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request a Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>
            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/Paut/paut2.png" alt="PAUT Equipment">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>Modern PAUT instruments and scanners for dependable, recorded inspections</span>
                    </div>
                </div>
                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Jobs Delivered</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Recorded Digital Data</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Years in Advanced UT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== ADVANTAGES ===================== -->
<section class="advantages-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">WHY CHOOSE PAUT</span>
            <h2>Key Advantages of Phased Array Ultrasonic Testing</h2>
            <p>Higher confidence inspection through multi-angle coverage, imaging, and recorded results</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Improved Productivity</h3>
                <p>Electronic scanning and optimized scan plans often reduce inspection time while maintaining consistent coverage—helping minimize outage and fabrication delays.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green">
                    <i class="fas fa-crosshairs"></i>
                </div>
                <h3>Better Defect Characterization</h3>
                <p>Enhanced ability to detect, locate, and size common weld discontinuities such as lack of fusion, lack of penetration, cracks, slag, and porosity.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple">
                    <i class="fas fa-images"></i>
                </div>
                <h3>Interpretation-Friendly Imaging</h3>
                <p>Multiple scan views support clearer assessment of indication position and orientation—improving decision-making for acceptance, repair, or monitoring.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Recorded & Auditable Results</h3>
                <p>Digital data storage enables traceability, client review, and benchmarking over time for in-service inspection and asset integrity programs.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Excellent for Complex Welds</h3>
                <p>Effective on nozzles, T/Y joints, dissimilar metal welds, and restricted access areas where conventional probes may provide limited coverage.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Consistency & Repeatability</h3>
                <p>Encoded scanning, scan plans, and recorded data support repeatable inspections and facilitate independent technical review when required.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">PAUT APPLICATIONS</span>
            <h2>Industries & Applications We Serve</h2>
            <p>Reliable PAUT inspections for fabrication, commissioning, and in-service integrity management</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="welds">Weld Inspection</button>
                <button class="tab-btn" data-tab="corrosion">Corrosion Mapping</button>
                <button class="tab-btn" data-tab="thickness">Thickness Gauging</button>
                <button class="tab-btn" data-tab="crack">Crack Detection</button>
            </div>

            <div class="tabs-content">
                <!-- Weld Inspection Tab -->
                <div class="tab-panel active" id="welds">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/Paut/paut3.jpg" alt="Weld Inspection">
                        </div>
                        <div class="tab-text">
                            <h3>Weld Inspection & Sizing</h3>
                            <p>PAUT provides volumetric coverage and imaging that supports accurate detection, characterization, and sizing across a wide range of weld types and joint configurations.</p>
                            
                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Pipeline girth welds (onshore & offshore)</li>
                                <li><i class="fas fa-check"></i> Pressure vessel circumferential and longitudinal welds</li>
                                <li><i class="fas fa-check"></i> Structural steel and critical fabrication welds</li>
                                <li><i class="fas fa-check"></i> Nozzle-to-shell welds and attachments</li>
                                <li><i class="fas fa-check"></i> Dissimilar metal welds (DMW)</li>
                                <li><i class="fas fa-check"></i> Root, fill, and cap evaluation as per scan plan</li>
                                <li><i class="fas fa-check"></i> Pre-service and in-service weld integrity assessment</li>
                            </ul>

                            <div class="standards">
                                <strong>Compliant Standards:</strong>
                                <span class="standard-tag">ASME Sec V</span>
                                <span class="standard-tag">API 1104</span>
                                <span class="standard-tag">AWS D1.1</span>
                                <span class="standard-tag">ISO 13588</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corrosion Mapping Tab -->
                <div class="tab-panel" id="corrosion">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/Paut/paut4.jpg" alt="Corrosion Mapping">
                        </div>
                        <div class="tab-text">
                            <h3>Corrosion & Erosion Mapping</h3>
                            <p>High-resolution thickness mapping helps detect wall loss patterns caused by corrosion, erosion, and flow-related mechanisms—supporting integrity and remaining life evaluations.</p>
                            
                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Pipe and tube wall thickness mapping</li>
                                <li><i class="fas fa-check"></i> Tank shell and selected area surveys</li>
                                <li><i class="fas fa-check"></i> Screening for CUI (Corrosion Under Insulation) where applicable</li>
                                <li><i class="fas fa-check"></i> FAC (Flow-Accelerated Corrosion) monitoring programs</li>
                                <li><i class="fas fa-check"></i> Heat exchanger and process line assessments</li>
                                <li><i class="fas fa-check"></i> Repeatable mapping for trend monitoring</li>
                                <li><i class="fas fa-check"></i> Input support for fitness-for-service (FFS) studies</li>
                            </ul>

                            <div class="standards">
                                <strong>Compliant Standards:</strong>
                                <span class="standard-tag">API 510</span>
                                <span class="standard-tag">API 653</span>
                                <span class="standard-tag">ASME B31.3</span>
                                <span class="standard-tag">NACE SP0307</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thickness Gauging Tab -->
                <div class="tab-panel" id="thickness">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/Paut/paut5.jpg" alt="Thickness Gauging">
                        </div>
                        <div class="tab-text">
                            <h3>Precision Thickness Measurement</h3>
                            <p>Accurate thickness verification for QA/QC, manufacturing validation, and asset integrity programs—particularly where repeatability and traceable records are required.</p>
                            
                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Thickness measurements using qualified procedures and suitable equipment (including elevated-temperature applications where feasible)</li>
                                <li><i class="fas fa-check"></i> Measurements on coated surfaces (as applicable)</li>
                                <li><i class="fas fa-check"></i> Multi-layer and laminated materials (subject to suitability)</li>
                                <li><i class="fas fa-check"></i> Composite thickness checks (application dependent)</li>
                                <li><i class="fas fa-check"></i> Flange face and hub thickness verification</li>
                                <li><i class="fas fa-check"></i> Cladding and overlay thickness verification</li>
                                <li><i class="fas fa-check"></i> Manufacturing and incoming inspection support</li>
                            </ul>

                            <div class="standards">
                                <strong>Compliant Standards:</strong>
                                <span class="standard-tag">ASTM E797</span>
                                <span class="standard-tag">ISO 16809</span>
                                <span class="standard-tag">ASME Sec V Art 5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Crack Detection Tab -->
                <div class="tab-panel" id="crack">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/Paut/paut6.jpg" alt="Crack Detection">
                        </div>
                        <div class="tab-text">
                            <h3>Crack Detection & Through-Wall Sizing</h3>
                            <p>PAUT supports detection and sizing of service-induced cracking mechanisms, helping engineers make informed repair, monitor, or run decisions.</p>
                            
                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> Stress corrosion cracking (SCC) assessment (application dependent)</li>
                                <li><i class="fas fa-check"></i> Fatigue crack screening and monitoring</li>
                                <li><i class="fas fa-check"></i> Heat-affected zone (HAZ) inspection</li>
                                <li><i class="fas fa-check"></i> Hydrogen-related cracking assessments (application dependent)</li>
                                <li><i class="fas fa-check"></i> Lamination and delamination evaluation</li>
                                <li><i class="fas fa-check"></i> Depth and length estimation using qualified sizing methods</li>
                                <li><i class="fas fa-check"></i> Periodic in-service inspection (ISI) support</li>
                            </ul>

                            <div class="standards">
                                <strong>Compliant Standards:</strong>
                                <span class="standard-tag">ASME Sec XI</span>
                                <span class="standard-tag">API 579</span>
                                <span class="standard-tag">BS 7706</span>
                                <span class="standard-tag">EN 583</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== OUR PAUT SERVICES ===================== -->
<section class="services-offering">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">COMPREHENSIVE SOLUTIONS</span>
            <h2>Our PAUT Service Offerings</h2>
            <p>From procedure qualification to field execution and final reporting—delivered to your code, spec, and schedule</p>
        </div>

        <div class="services-grid">
            <div class="service-box">
                <div class="service-number">01</div>
                <h3>On-Site PAUT Inspection</h3>
                <p>Certified technicians mobilize to your site with calibrated instruments, scanners, and validated procedures to reduce downtime and keep work moving.</p>
                <ul>
                    <li>Portable PAUT systems</li>
                    <li>Planned scan coverage as per procedure</li>
                    <li>Efficient execution with minimal disruption</li>
                    <li>Fast preliminary findings when required</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">02</div>
                <h3>Laboratory Testing</h3>
                <p>Component inspection in a controlled environment for detailed evaluation, repeat scans, and advanced analysis where needed.</p>
                <ul>
                    <li>Controlled inspection conditions</li>
                    <li>Calibration and verification checks</li>
                    <li>Multi-angle evaluation and documentation</li>
                    <li>Comprehensive reporting package</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">03</div>
                <h3>Automated PAUT Scanning</h3>
                <p>Mechanized and encoded scanning for projects requiring high repeatability, consistent speed, and large-area coverage.</p>
                <ul>
                    <li>Encoded scanners for repeatable results</li>
                    <li>Pipe and weld scanning solutions</li>
                    <li>Automated coverage for large programs</li>
                    <li>Structured data for review and audit</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">04</div>
                <h3>Engineering & Analysis</h3>
                <p>Expert interpretation, advanced sizing, and engineering support to translate inspection results into practical integrity actions.</p>
                <ul>
                    <li>Flaw characterization and sizing support</li>
                    <li>Integrity recommendations and prioritization</li>
                    <li>API 579 / ASME FFS input support</li>
                    <li>Repair/replace guidance based on findings</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">05</div>
                <h3>Procedure Development</h3>
                <p>PAUT procedures built around your component, weld prep, thickness, material, and acceptance criteria—aligned to applicable codes and specs.</p>
                <ul>
                    <li>Procedures aligned to ASME Sec V and applicable standards</li>
                    <li>Technique demonstration / validation support</li>
                    <li>Calibration block planning support</li>
                    <li>Site briefing and operator guidance</li>
                </ul>
            </div>

            <div class="service-box">
                <div class="service-number">06</div>
                <h3>Training & Certification Support</h3>
                <p>Structured training support to build PAUT capability—from fundamentals to application-focused interpretation and reporting.</p>
                <ul>
                    <li>Theory and hands-on practice</li>
                    <li>Equipment operation and scan planning basics</li>
                    <li>Data interpretation and reporting guidance</li>
                    <li>Exam preparation support as per program</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== EQUIPMENT & TECHNOLOGY ===================== -->
<section class="equipment-section">
    <div class="container">
        <div class="equipment-grid">
            <div class="equipment-content">
                <span class="section-label">CUTTING-EDGE TECHNOLOGY</span>
                <h2>State-of-the-Art PAUT Equipment</h2>
                <p>We use modern phased array instruments, encoded scanners, and advanced analysis tools to deliver dependable results and complete traceability.</p>

                <div class="equipment-list">
                    <div class="equipment-item">
                        <div class="equipment-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="equipment-details">
                            <h4>Advanced PAUT Flaw Detectors</h4>
                            <p>Modern phased array instruments with multi-group capability, reliable calibration functions, and support for encoded scanning and clear imaging.</p>
                        </div>
                    </div>

                    <div class="equipment-item">
                        <div class="equipment-icon">
                            <i class="fas fa-broadcast-tower"></i>
                        </div>
                        <div class="equipment-details">
                            <h4>Application-Specific Probes</h4>
                            <p>Range of linear and matrix array probes selected for material, thickness, weld geometry, and inspection objectives. Custom configurations available based on procedure needs.</p>
                        </div>
                    </div>

                    <div class="equipment-item">
                        <div class="equipment-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="equipment-details">
                            <h4>Encoded & Mechanized Scanners</h4>
                            <p>Magnetic wheel encoders and motorized scanners for consistent scan speed, repeatability, and structured inspection data—ideal for programs and audits.</p>
                        </div>
                    </div>

                    <div class="equipment-item">
                        <div class="equipment-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="equipment-details">
                            <h4>Professional Analysis & Reporting</h4>
                            <p>Dedicated software workflows to support analysis, sizing, presentation of scan views, and preparation of clear client-ready reports.</p>
                        </div>
                    </div>
                </div>

                <div class="certifications">
                    <h4>Our Certifications & Accreditations</h4>
                    <div class="cert-badges">
                        <img src="https://picsum.photos/id/0/100/50" alt="ISO 9001:2015">
                        <img src="https://picsum.photos/id/1/100/50" alt="ASNT">
                        <img src="https://picsum.photos/id/2/100/50" alt="PCI">
                        <img src="https://picsum.photos/id/3/100/50" alt="NADCAP">
                    </div>
                </div>
            </div>

            <div class="equipment-visual">
                <div class="video-wrapper">
                    <img src="https://picsum.photos/id/48/600/400" alt="PAUT Equipment">
                    <div class="play-overlay">
                        <button class="play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                        <span>See PAUT Inspection Workflow</span>
                    </div>
                </div>

                <div class="tech-highlights">
                    <div class="highlight-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Full Matrix Capture (FMC)</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Total Focusing Method (TFM)</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Encoded Scanning & Mapping</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Multi-Angle Scan Plans</span>
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
            <h2>Your Trusted PAUT Partner</h2>
            <p>Technical depth, reliable execution, and documentation you can defend</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Qualified Personnel</h3>
                <p>Experienced Level II and Level III personnel supporting procedure development, execution, interpretation, and technical clarifications.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Responsive Delivery</h3>
                <p>Efficient scheduling, planned mobilization, and prompt reporting aligned with project timelines and shutdown windows.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Inspection Confidence</h3>
                <p>QA-driven execution with traceable, recorded data and clear reporting—supporting acceptance decisions and audit requirements.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Project Support</h3>
                <p>Dedicated coordination and technical support from planning to closeout, including review discussions and recommendations.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-globe-asia"></i>
                </div>
                <h3>Wide Service Reach</h3>
                <p>Capability to support projects across major industrial hubs with practical field experience in varied site conditions.</p>
            </div>

            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>Transparent Pricing</h3>
                <p>Clear scope-based quotations and practical recommendations to match inspection coverage, code requirements, and budget.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>PAUT Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is the difference between PAUT and conventional UT?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Conventional UT typically uses a single-element probe that sends one beam at a fixed angle. PAUT uses multiple elements that can be pulsed with programmed delays to steer and focus the beam. This enables multi-angle inspection from one location, improved coverage, clearer imaging, and recorded data for traceability and review.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much does PAUT inspection cost?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Cost depends on weld type, thickness, access, number of joints/areas, reporting requirements, location, and whether encoded or automated scanning is required. Share your drawings, scope, and acceptance criteria, and we will provide a clear, itemized quotation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is PAUT suitable for all materials?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>PAUT is effective on many engineering materials, including carbon steel and stainless steels. Suitability depends on factors such as grain structure, attenuation, surface condition, geometry, and defect type/orientation. We evaluate feasibility and optimize probe selection and scan plans for your application.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What size defects can PAUT detect?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Detectable defect size varies with material, thickness, surface condition, inspection frequency, scan plan, and defect orientation. When properly qualified, PAUT provides high sensitivity and reliable sizing capability. For critical applications, advanced approaches such as FMC/TFM can further improve resolution and interpretation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does a PAUT inspection take?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Time depends on joint geometry, thickness, access, required coverage, and whether encoded scanning is specified. Many girth weld inspections can be completed efficiently with PAUT, and results are available immediately after scanning, with reporting issued as per the agreed turnaround time.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can PAUT replace radiography (RT)?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>In many cases, yes—subject to applicable code, client specification, and procedure qualification. PAUT eliminates radiation hazards, provides immediate results, and offers strong capability for planar defects (such as lack of fusion and cracks). We support qualification and documentation required for PAUT adoption where permitted.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you provide PAUT training?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>We provide training support covering fundamentals, scanning practice, and interpretation principles tailored to practical industrial applications. Training scope can be aligned to your internal qualification program and applicable guidelines.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What industries use PAUT inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>PAUT is widely used in oil & gas, petrochemical, power generation, pipelines, pressure vessel fabrication, structural steel, shipbuilding, rail, and other industries where weld quality and component integrity are critical.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Need a Code-Compliant PAUT Inspection?</h2>
            <p>Talk to our team for scope review, technique selection, and a detailed quotation</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email Us</a>
            </center>

            <div class="cta-features">
                <span><i class="fas fa-check"></i> Technical Consultation</span>
                <span><i class="fas fa-check"></i> Quick Response</span>
                <span><i class="fas fa-check"></i> Clear Scope-Based Quote</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Related NDT Services</h2>
            <p>Explore additional advanced inspection solutions for fabrication and in-service integrity</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/advanced-ndt-services/tofd.php" class="related-card">
                <div class="related-icon">
                    <i class="fas fa-wave-square"></i>
                </div>
                <h3>TOFD</h3>
                <p>Time of Flight Diffraction for dependable crack detection and sizing</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/advanced-ndt-services/aut.php" class="related-card">
                <div class="related-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3>AUT</h3>
                <p>Automated UT for high-volume, repeatable inspection coverage</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                <div class="related-icon">
                    <i class="fas fa-signal"></i>
                </div>
                <h3>Conventional UT</h3>
                <p>Conventional ultrasonic testing for routine flaw detection and thickness checks</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/advanced-ndt-services/rvi.php" class="related-card">
                <div class="related-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>RVI / Videoscope</h3>
                <p>Remote visual inspection for internal access and confined areas</p>
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
