<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Positive Material Identification (PMI) Services | Alloy Verification & Chemical Analysis | Alpha Sonix NDT Solutions";
$meta_description = "Professional Positive Material Identification (PMI) services using XRF and OES technology for alloy verification, material sorting, code compliance, and quality control. Accurate chemical composition analysis with immediate results and certified reporting.";
$meta_keywords = "positive material identification, PMI testing, alloy verification, material identification, XRF testing, OES analysis, chemical composition, material sorting, stainless steel verification, PMI services, ASTM E572";
$canonical_url = "https://alphasonix.com/pages/conventional-ndt/positive-material-identification.php";
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
    <meta property="og:image" content="/www/assets/images/services/pmi-og.jpg">

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
            "serviceType": "Positive Material Identification (PMI) & Chemical Analysis",
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
            "description": "Professional Positive Material Identification services for alloy verification, material sorting, and chemical composition analysis using XRF and OES technology across diverse industries."
        }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/pmi-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Conventional NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>PMI Testing</span>
                </div>
                <h1 class="page-title">Positive Material Identification (PMI)</h1>
                <p class="page-subtitle">Accurate alloy verification and chemical composition analysis—prevent material mix-ups, ensure code compliance, and verify material properties using advanced XRF and OES technology</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-atom"></i> Elemental Analysis</span>
                    <span class="badge"><i class="fas fa-tachometer-alt"></i> Immediate Results</span>
                    <span class="badge"><i class="fas fa-certificate"></i> ASTM E572 / API Compliant</span>
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
                    <h3>Precise Alloy Identification</h3>
                    <p>Accurate determination of material grade and chemical composition to prevent costly material mix-ups and ensure specification compliance.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Rapid Analysis</h3>
                    <p>Immediate results in seconds to minutes—enabling real-time material verification, production control, and fast decision-making in fabrication and inspection.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <h3>Non-Destructive Testing</h3>
                    <p>Surface analysis without material damage or sample removal—preserving component integrity while providing reliable chemical composition data.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Code & Quality Compliance</h3>
                    <p>Verify material specifications per ASME, ASTM, API, and project requirements—supporting traceability, certification, and regulatory compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS PMI ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">MATERIAL VERIFICATION TECHNOLOGY</span>
                    <h2>What is Positive Material Identification (PMI)?</h2>
                    <p class="lead">Positive Material Identification (PMI) is a non-destructive analytical technique used to determine the chemical composition and grade of metallic materials, ensuring the correct alloy is used in critical applications and preventing costly material mix-ups.</p>

                    <p>PMI works by exciting the atoms in the material surface using X-rays (XRF) or spark discharge (OES), causing characteristic emission of energy that identifies and quantifies the elemental composition. The analysis provides immediate results showing percentages of elements such as chromium, nickel, molybdenum, titanium, and other alloying elements critical to material properties and performance.</p>

                    <p>PMI is essential across industries where material integrity is critical—from pressure vessel fabrication to aerospace manufacturing. It prevents potentially catastrophic failures that can result from using incorrect materials, ensures code compliance, supports material traceability programs, and provides confidence in material specifications throughout the supply chain.</p>

                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Material Grade Verification</strong>
                                <p>Confirms exact alloy grade and specification compliance for stainless steels, alloy steels, aluminum, titanium, nickel alloys, and specialty materials.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Mix-Up Prevention</strong>
                                <p>Identifies incorrect materials before installation, fabrication, or service—preventing failures due to inadequate corrosion resistance, strength, or temperature capabilities.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Code Compliance Documentation</strong>
                                <p>Provides traceable material verification records supporting ASME, API, ASTM, and project specifications for pressure vessels, piping, and critical components.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Supply Chain Quality Control</strong>
                                <p>Enables incoming inspection, inventory verification, and material sorting to maintain quality standards and prevent counterfeit or substandard materials.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Critical Importance of PMI:</strong>
                            <p>Material mix-ups have caused catastrophic failures in pressure vessels, pipelines, and aerospace applications. PMI provides the verification needed to ensure the right material is used in the right application—protecting lives, environment, and assets.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request PMI Service</a>
                        <a href="#applications" class="btn btn-secondary">View Applications</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/pmi-equipment.jpg" alt="PMI Testing Equipment">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Handheld XRF analyzer for rapid, accurate positive material identification</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">25,000+</span>
                            <span class="stat-label">Materials Analyzed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99.9%+</span>
                            <span class="stat-label">Accuracy Achieved</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30 Sec</span>
                            <span class="stat-label">Typical Analysis Time</span>
                        </div>
                    </div>

                    <div class="principle-diagram">
                        <h4><i class="fas fa-diagram-project"></i> PMI Analysis Process</h4>
                        <ul class="principle-list">
                            <li><strong>1.</strong> Clean material surface to remove coatings/contaminants</li>
                            <li><strong>2.</strong> Position analyzer probe on target material</li>
                            <li><strong>3.</strong> X-rays or spark excite atoms in material</li>
                            <li><strong>4.</strong> Characteristic emissions analyzed by detector</li>
                            <li><strong>5.</strong> Chemical composition and grade determined</li>
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
                <span class="section-label">WHY CHOOSE PMI</span>
                <h2>Key Advantages of Material Identification</h2>
                <p>Prevent costly mistakes, ensure code compliance, and maintain quality with accurate material verification</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <h3>Prevent Catastrophic Failures</h3>
                    <p>Eliminate material mix-ups that could lead to inadequate corrosion resistance, strength, or temperature performance in critical service applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>Immediate Results</h3>
                    <p>Analysis completed in seconds to minutes—enabling real-time material verification during fabrication, installation, and incoming inspection without production delays.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective Prevention</h3>
                    <p>Low-cost analysis prevents expensive rework, replacement, and potential liability from using incorrect materials in critical applications.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Code & Specification Compliance</h3>
                    <p>Verify material requirements per ASME, API, ASTM, aerospace, and project specifications with documented traceability and certification support.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Non-Destructive Analysis</h3>
                    <p>Surface analysis without damaging components or requiring sample removal—preserving material integrity while providing reliable composition data.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-sort"></i>
                    </div>
                    <h3>Material Sorting & Control</h3>
                    <p>Efficiently sort mixed materials, verify inventory, and maintain material control systems supporting quality management and traceability programs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PMI APPLICATIONS</span>
                <h2>Industries & Materials We Analyze</h2>
                <p>Comprehensive material identification across manufacturing, fabrication, maintenance, and quality control applications</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="fabrication">Fabrication & Manufacturing</button>
                    <button class="tab-btn" data-tab="incoming">Incoming Inspection</button>
                    <button class="tab-btn" data-tab="maintenance">Maintenance & Repair</button>
                    <button class="tab-btn" data-tab="specialty">Specialty Alloys</button>
                </div>

                <div class="tabs-content">
                    <!-- Fabrication & Manufacturing Tab -->
                    <div class="tab-panel active" id="fabrication">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pmi-fabrication.jpg" alt="PMI in Fabrication">
                            </div>
                            <div class="tab-text">
                                <h3>Fabrication & Manufacturing Quality Control</h3>
                                <p>Material verification during pressure vessel, piping, and structural fabrication to ensure correct alloy selection, prevent mix-ups, and support code compliance and quality certifications.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Pressure vessel and heat exchanger fabrication</li>
                                    <li><i class="fas fa-check"></i> Process piping and pipeline construction</li>
                                    <li><i class="fas fa-check"></i> Structural steel and architectural applications</li>
                                    <li><i class="fas fa-check"></i> Aerospace and defense component manufacturing</li>
                                    <li><i class="fas fa-check"></i> Pre-weld material verification</li>
                                    <li><i class="fas fa-check"></i> Work order and drawing compliance checking</li>
                                    <li><i class="fas fa-check"></i> Final inspection and certification support</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Pressure Vessel Fabrication:</strong> PMI verification of all stainless steel materials before welding to ensure 316L specification compliance—preventing potential chloride stress corrosion cracking in chemical service and meeting ASME Section VIII requirements.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASME Sec II</span>
                                    <span class="standard-tag">ASTM E572</span>
                                    <span class="standard-tag">AWS A5 Series</span>
                                    <span class="standard-tag">API 5L</span>
                                    <span class="standard-tag">AISC Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Incoming Inspection Tab -->
                    <div class="tab-panel" id="incoming">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pmi-incoming.jpg" alt="PMI Incoming Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Incoming Material Inspection & Verification</h3>
                                <p>Verification of material certifications, detection of counterfeit materials, and quality control of purchased materials before acceptance and inventory storage.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Plate, sheet, bar, and structural material verification</li>
                                    <li><i class="fas fa-check"></i> Pipe, tube, and fitting material confirmation</li>
                                    <li><i class="fas fa-check"></i> Forging and casting alloy verification</li>
                                    <li><i class="fas fa-check"></i> Fastener and hardware material checking</li>
                                    <li><i class="fas fa-check"></i> Mill test certificate (MTC) verification</li>
                                    <li><i class="fas fa-check"></i> Counterfeit material detection</li>
                                    <li><i class="fas fa-check"></i> Supplier quality assurance support</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Stainless Steel Pipe Verification:</strong> PMI analysis of incoming 316L stainless steel piping to verify mill test certificate accuracy and detect potential material substitution—ensuring corrosion resistance specifications for pharmaceutical manufacturing applications.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM A262</span>
                                    <span class="standard-tag">ASTM A240</span>
                                    <span class="standard-tag">ASTM A312</span>
                                    <span class="standard-tag">ASME SA Specifications</span>
                                    <span class="standard-tag">Procurement Specifications</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Maintenance & Repair Tab -->
                    <div class="tab-panel" id="maintenance">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pmi-maintenance.jpg" alt="PMI in Maintenance">
                            </div>
                            <div class="tab-text">
                                <h3>Maintenance, Repair & Retrofit Applications</h3>
                                <p>Material identification for repair planning, replacement part verification, and retrofit project material selection—ensuring compatibility and performance in existing systems.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Existing equipment material identification</li>
                                    <li><i class="fas fa-check"></i> Replacement part specification verification</li>
                                    <li><i class="fas fa-check"></i> Repair welding filler metal selection</li>
                                    <li><i class="fas fa-check"></i> Corrosion damage root cause analysis</li>
                                    <li><i class="fas fa-check"></i> Heat treatment verification and control</li>
                                    <li><i class="fas fa-check"></i> Alteration and modification material planning</li>
                                    <li><i class="fas fa-check"></i> Failure analysis material characterization</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Process Equipment Repair:</strong> PMI analysis of corroded heat exchanger tubes to determine original alloy specification for replacement part procurement—ensuring equivalent corrosion resistance and thermal performance in aggressive chemical service.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 570</span>
                                    <span class="standard-tag">ASME PCC-2</span>
                                    <span class="standard-tag">NACE Standards</span>
                                    <span class="standard-tag">Repair Procedures</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialty Alloys Tab -->
                    <div class="tab-panel" id="specialty">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/pmi-specialty.jpg" alt="Specialty Alloy PMI">
                            </div>
                            <div class="tab-text">
                                <h3>Specialty Alloys & High-Performance Materials</h3>
                                <p>Analysis of aerospace, nuclear, chemical processing, and specialty alloys where material performance is critical and verification requirements are stringent.</p>

                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Aerospace titanium and nickel-based superalloys</li>
                                    <li><i class="fas fa-check"></i> Hastelloy, Inconel, and high-temperature alloys</li>
                                    <li><i class="fas fa-check"></i> Duplex and super-duplex stainless steels</li>
                                    <li><i class="fas fa-check"></i> Aluminum aerospace and marine alloys</li>
                                    <li><i class="fas fa-check"></i> Cobalt-chromium and medical device alloys</li>
                                    <li><i class="fas fa-check"></i> Nuclear-grade materials (Zircaloy, Inconel)</li>
                                    <li><i class="fas fa-check"></i> Exotic alloys and research materials</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-lightbulb"></i> Typical Application</h4>
                                    <p><strong>Aerospace Component Verification:</strong> PMI analysis of Inconel 718 turbine components to verify heat lot specifications and ensure proper nickel, chromium, and niobium content for high-temperature creep resistance and fatigue performance in jet engine service.</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">AMS Specifications</span>
                                    <span class="standard-tag">ASTM B Standards</span>
                                    <span class="standard-tag">SAE AMS</span>
                                    <span class="standard-tag">Military Specifications</span>
                                    <span class="standard-tag">NACE MR0175</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PMI TECHNIQUES & SERVICES ===================== -->
    <section class="services-offering">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">PMI METHODS & SERVICES</span>
                <h2>Our Material Identification Technologies</h2>
                <p>Advanced analytical techniques providing accurate chemical composition analysis and material verification</p>
            </div>

            <div class="services-grid">
                <div class="service-box">
                    <div class="service-number">01</div>
                    <h3>X-Ray Fluorescence (XRF) Analysis</h3>
                    <p>Portable XRF analyzers providing rapid, accurate elemental analysis for most metals and alloys with immediate digital results and data storage.</p>
                    <ul>
                        <li>Handheld XRF analyzers for field and lab use</li>
                        <li>Analysis in seconds with high accuracy</li>
                        <li>Detection of elements from magnesium to uranium</li>
                        <li>Non-destructive surface analysis</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">02</div>
                    <h3>Optical Emission Spectroscopy (OES)</h3>
                    <p>Spark OES analysis providing precise quantitative analysis including light elements (carbon, phosphorus, sulfur) for comprehensive alloy characterization.</p>
                    <ul>
                        <li>Portable and stationary OES systems</li>
                        <li>Analysis of carbon, phosphorus, sulfur, nitrogen</li>
                        <li>High precision for critical alloying elements</li>
                        <li>Minimal surface preparation required</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">03</div>
                    <h3>Material Sorting & Identification</h3>
                    <p>Comprehensive material sorting programs for mixed inventories, scrap processing, and quality control using rapid identification techniques.</p>
                    <ul>
                        <li>High-speed material sorting and grading</li>
                        <li>Mixed alloy separation and identification</li>
                        <li>Quality control and inventory management</li>
                        <li>Traceability and documentation support</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">04</div>
                    <h3>Grade Verification & Certification</h3>
                    <p>Comprehensive alloy grade verification against ASTM, ASME, API, and project specifications with certified reporting and documentation.</p>
                    <ul>
                        <li>Grade library matching and verification</li>
                        <li>Specification compliance checking</li>
                        <li>Certificate of analysis preparation</li>
                        <li>Code compliance documentation</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">05</div>
                    <h3>Field & Laboratory Services</h3>
                    <p>Flexible service delivery including on-site analysis, laboratory testing, and consulting support for material identification programs.</p>
                    <ul>
                        <li>On-site PMI analysis and verification</li>
                        <li>Laboratory testing for complex analyses</li>
                        <li>Emergency material identification</li>
                        <li>Construction and fabrication support</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-number">06</div>
                    <h3>Training & Equipment Support</h3>
                    <p>PMI equipment rental, training programs, and consulting services to establish in-house material identification capabilities.</p>
                    <ul>
                        <li>Equipment rental and lease programs</li>
                        <li>Operator training and certification</li>
                        <li>Procedure development and optimization</li>
                        <li>Quality system integration support</li>
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
                    <span class="section-label">ADVANCED ANALYTICAL EQUIPMENT</span>
                    <h2>State-of-the-Art PMI Technology</h2>
                    <p>We use the latest XRF and OES analyzers with calibrated reference standards, comprehensive alloy libraries, and data management systems to ensure accurate, traceable material identification results.</p>

                    <div class="equipment-list">
                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-radiation"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Handheld XRF Analyzers</h4>
                                <p>Portable X-ray fluorescence analyzers with advanced detectors, comprehensive alloy libraries, GPS tracking, and wireless connectivity for immediate results and data management.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Optical Emission Spectrometers</h4>
                                <p>Portable and benchtop OES systems with spark excitation for precise analysis of carbon, phosphorus, sulfur, and other critical elements not detectable by XRF.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Certified Reference Standards</h4>
                                <p>NIST-traceable reference materials and calibration standards ensuring accuracy and traceability for all analytical measurements and quality compliance.</p>
                            </div>
                        </div>

                        <div class="equipment-item">
                            <div class="equipment-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="equipment-details">
                                <h4>Data Management Systems</h4>
                                <p>Advanced software for alloy identification, grade matching, data storage, report generation, and integration with quality management systems.</p>
                            </div>
                        </div>
                    </div>

                    <div class="certifications">
                        <h4>Quality & Compliance</h4>
                        <div class="cert-badges">
                            <img src="https://picsum.photos/id/80/100/50" alt="ISO 9001:2015">
                            <img src="https://picsum.photos/id/81/100/50" alt="NIST Traceable">
                            <img src="https://picsum.photos/id/82/100/50" alt="ASTM Compliant">
                            <img src="https://picsum.photos/id/83/100/50" alt="Certified Analysis">
                        </div>
                    </div>
                </div>

                <div class="equipment-visual">
                    <div class="video-wrapper">
                        <img src="/www/assets/images/services/pmi-operation.jpg" alt="PMI Analysis in Progress">
                        <div class="play-overlay">
                            <button class="play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <span>Watch PMI Analysis Process</span>
                        </div>
                    </div>

                    <div class="tech-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>XRF & OES Technology</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>NIST-Traceable Standards</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Comprehensive Alloy Libraries</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digital Data Management</span>
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
                <h2>Your Material Identification Experts</h2>
                <p>Accurate analysis, certified results, and proven expertise for critical material verification requirements</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Certified Analysts</h3>
                    <p>Qualified personnel with extensive experience in metallurgy, analytical chemistry, and material science—ensuring reliable interpretation and accurate results.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Advanced Technology</h3>
                    <p>Latest XRF and OES analyzers with comprehensive alloy libraries, GPS tracking, and data management systems for accurate, traceable analysis.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Certified Accuracy</h3>
                    <p>NIST-traceable reference standards, regular calibration verification, and quality control procedures ensuring reliable, defensible analytical results.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Rapid Turnaround</h3>
                    <p>Immediate on-site results or fast laboratory turnaround supporting production schedules, emergency analysis, and critical project timelines.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-file-certificate"></i>
                    </div>
                    <h3>Comprehensive Reporting</h3>
                    <p>Detailed certificates of analysis, grade verification reports, and compliance documentation supporting quality systems and regulatory requirements.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Industry Expertise</h3>
                    <p>Deep understanding of material specifications, industry codes, and application requirements across aerospace, chemical, nuclear, and manufacturing sectors.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>PMI Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between XRF and OES analysis?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>XRF (X-Ray Fluorescence)</strong> uses X-rays to analyze elements and is completely non-destructive, providing rapid analysis without surface damage. <strong>OES (Optical Emission Spectroscopy)</strong> uses a small spark to excite the material surface and can detect light elements (carbon, phosphorus, sulfur, nitrogen) that XRF cannot measure effectively. OES requires minimal surface preparation but creates a tiny mark. Both methods are valuable and often complementary.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate is PMI testing compared to laboratory analysis?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Modern handheld XRF and OES analyzers provide accuracy comparable to laboratory methods for most elements—typically ±0.02-0.05% for major alloying elements when properly calibrated. However, laboratory analysis using ICP-OES or wet chemistry may be required for trace elements, precise carbon content, or when highest accuracy is critical. PMI provides excellent screening and verification capability for most industrial applications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can PMI detect all elements in an alloy?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>XRF detects elements from magnesium (Mg) to uranium (U) but has limitations with very light elements (carbon, nitrogen, oxygen). OES can detect these light elements plus phosphorus and sulfur. Together, XRF and OES cover essentially all elements of interest in metallic alloys. However, for precise carbon analysis in steels or detailed trace element analysis, laboratory methods may be preferred.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What surface preparation is required for PMI?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Surfaces should be clean, dry, and free of paint, oil, dirt, and heavy oxide layers. Light grinding or filing may be needed to expose clean metal. For XRF, a smooth surface improves accuracy. For OES, minimal preparation is needed as the spark burns through thin surface layers. Coatings, platings, and surface treatments can interfere with analysis and should typically be removed from the test area.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does PMI analysis take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Analysis time depends on the method and required accuracy. XRF analysis typically takes 5-30 seconds per measurement. OES analysis takes 10-60 seconds. Including surface preparation and documentation, most PMI analyses are completed in 2-5 minutes per location. High-volume material sorting can achieve much higher throughput rates. Results are available immediately upon completion.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can PMI distinguish between similar stainless steel grades?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—PMI is excellent for distinguishing between stainless steel grades such as 304 vs 316, 316 vs 316L, or 321 vs 347 by analyzing nickel, chromium, molybdenum, titanium, and niobium content. The method can also differentiate between austenitic, ferritic, and duplex grades. However, some grades with very similar chemistry (such as 304 vs 304L) may require carbon analysis by OES or laboratory methods for definitive identification.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Is PMI testing required by codes and standards?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Many codes and standards require or recommend material verification. ASME Section IX requires filler metal verification, API 570 recommends material verification for repairs, and many project specifications require incoming material verification. PMI is widely accepted for these requirements when performed per ASTM E572 or equivalent procedures. Specific requirements vary by code, application, and client specifications.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide with PMI results?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive certificates of analysis including elemental composition, identified grade/specification, instrument calibration data, reference standard traceability, test conditions, analyst certification, and pass/fail determination against specified criteria. Digital data files, photographs, and GPS location data are available when required. Reports meet quality system and regulatory documentation requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need Accurate Material Identification?</h2>
                <p>Contact us for PMI analysis, alloy verification, and material certification services</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Email: info@alphasonix.com</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Immediate Results</span>
                    <span><i class="fas fa-check"></i> Certified Accuracy</span>
                    <span><i class="fas fa-check"></i> Code Compliance</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Related NDT & Quality Services</h2>
                <p>Comprehensive testing and inspection solutions supporting material integrity and quality assurance</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>Surface examination and general condition assessment supporting material verification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/ut-flaw-detection.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <h3>Ultrasonic Testing</h3>
                    <p>Volumetric inspection ensuring material integrity after verification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/thickness-gauging.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-ruler-vertical"></i>
                    </div>
                    <h3>Thickness Gauging</h3>
                    <p>Accurate dimensional verification complementing material identification</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/liquid-penetrant-testing.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3>Liquid Penetrant Testing</h3>
                    <p>Surface crack detection for verified materials and components</p>
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