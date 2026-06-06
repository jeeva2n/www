<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access Radiographic Testing (RT) Services | IRATA Certified Industrial Radiography at Height | Alpha Sonix NDT Solutions";
$meta_description = "IRATA/SPRAT certified rope access radiographic testing (RT) for critical welds, pressure vessels, offshore platforms and industrial piping at height. Gamma ray and X-ray volumetric inspection without scaffolding costs. ASME Section V Article 2, AWS D1.1, API 1104 compliant with certified radiation safety officers and 60% cost savings vs traditional access.";
$meta_keywords = "rope access radiographic testing, rope access RT, rope access gamma ray, rope access X-ray, industrial radiography at height, offshore platform radiography, elevated weld radiography, scaffolding-free RT, IRATA radiographic inspection, radiation safety rope access";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-rt.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-rt-og.jpg">

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
            "serviceType": "Rope Access Radiographic Testing (RT)",
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
            "description": "IRATA/SPRAT certified rope access radiographic testing services combining industrial rope access positioning with gamma ray and X-ray volumetric weld inspection. ASME Section V Article 2 compliant RT without scaffolding costs, with certified radiation safety officers and comprehensive radiation protection programs.",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Rope Access RT Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Offshore Platform Weld Radiography"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Elevated Pressure Vessel RT Inspection"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Pipeline Girth Weld Radiography"
                        }
                    }
                ]
            }
        }
    </script>
</head>

<body>

<?php include $base . '/includes/top-bar.php'; ?>
<?php include $base . '/includes/header.php'; ?>

<!-- ===================== PAGE HERO ===================== -->
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/rope-access/rope-access-rt-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="/www/pages/rope-access-services/">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Rope Access RT</span>
            </div>
            <h1 class="page-title">Rope Access Radiographic Testing (RT)</h1>
            <p class="page-subtitle">IRATA/SPRAT certified radiographic testing combining industrial rope access positioning with gamma ray and X-ray volumetric weld inspection—comprehensive RT at height with certified radiation safety officers, engineered exclusion zones and ASME Section V Article 2 compliance without scaffolding delays or access limitations</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA Level 3 + Certified RSO</span>
                <span class="badge"><i class="fas fa-radiation"></i> Gamma Ray & X-Ray Capability</span>
                <span class="badge"><i class="fas fa-shield-alt"></i> Comprehensive Radiation Safety</span>
                <span class="badge"><i class="fas fa-coins"></i> 60% Cost Reduction vs Scaffolding</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-radiation-alt"></i></div>
                <h3>Gamma Ray & X-Ray Volumetric Inspection</h3>
                <p>Complete radiographic testing capability: Iridium-192 gamma ray (portable, high penetration for thick sections 12-100mm), Selenium-75 (high-energy, very thick sections), portable X-ray (thin-to-medium sections, real-time digital radiography option)—technique selection optimized for material thickness, geometry and project requirements.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-user-shield"></i></div>
                <h3>Certified Radiation Safety Officers (RSO)</h3>
                <p>Dual-certified teams: IRATA Level 3 rope access supervisors with Radiation Safety Officer (RSO) certification ensure both safe working-at-height execution AND comprehensive radiation protection—engineered exclusion zones, radiation monitoring, personnel dosimetry and regulatory compliance per AERB/NRC requirements.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-file-alt"></i></div>
                <h3>Permanent Record & Code Compliance</h3>
                <p>Film radiography provides permanent, archivable records meeting ASME Section V Article 2, AWS D1.1, API 1104 requirements. Digital radiography (DR/CR) options for immediate results and digital archiving. Film interpretation by ASNT Level II/III radiographers with documented acceptance criteria per applicable codes.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-hard-hat"></i></div>
                <h3>Integrated Safety & Access Management</h3>
                <p>Comprehensive safety program integrating rope access safety (IRATA protocols, rescue readiness) with radiation safety (exclusion zones, radiation monitoring, emergency procedures). Single point of accountability for both access and radiation safety—eliminating coordination gaps and improving overall safety performance.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS RT ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">VOLUMETRIC WELD INSPECTION AT HEIGHT</span>
                <h2>What is Rope Access Radiographic Testing?</h2>

                <p class="lead">Rope Access Radiographic Testing integrates IRATA/SPRAT industrial rope access positioning techniques with gamma ray and X-ray radiographic inspection methods to deliver comprehensive volumetric weld assessment of critical pressure vessels, offshore platforms, elevated piping and structural steel located at height—eliminating scaffolding costs while maintaining full RT technical capability, permanent record requirements and radiation safety compliance.</p>

                <p>Radiographic testing (RT) uses gamma rays (from radioactive isotopes) or X-rays (from X-ray generators) to penetrate materials and create shadow images on film or digital detectors—revealing internal weld discontinuities such as porosity, slag inclusions, lack of fusion, incomplete penetration and cracks. RT provides permanent records required by many construction codes and is often mandated for critical pressure boundary welds per ASME Section VIII, API 1104 and AWS D1.1.</p>

                <p><strong>Traditional RT of elevated structures requires expensive scaffolding</strong> ($500K-3M for large facilities) to position radiographers, establish exclusion zones and ensure radiation safety. <strong>Rope access revolutionizes RT economics</strong> by positioning dual-certified technicians (IRATA Level 3 + RSO certification) directly at inspection locations using rope systems—eliminating scaffolding costs, reducing project duration by 8-12 weeks, and enabling RT of previously inaccessible locations while maintaining comprehensive radiation safety programs.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Complete RT Technique Portfolio</strong>
                            <p>Gamma radiography (Ir-192, Se-75), portable X-ray, digital radiography (DR), computed radiography (CR), real-time radiography (RTR) where applicable. Single-wall, double-wall single-image (DWSI), double-wall double-image (DWDI) techniques for pipe and vessel geometries.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Comprehensive Radiation Safety Program</strong>
                            <p>Certified Radiation Safety Officers (RSO), engineered exclusion zones (rope barriers, signage, monitoring), personnel dosimetry (TLD badges, pocket dosimeters), radiation survey meters, emergency response procedures—full compliance with AERB, NRC, state radiation control regulations.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Permanent Film Records & Digital Options</strong>
                            <p>Traditional film radiography provides permanent, archivable records for regulatory compliance and warranty documentation. Digital radiography (DR/CR) options available for immediate results (no film processing delays), digital archiving and automated defect recognition software where project specifications permit.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Code-Compliant Film Interpretation</strong>
                            <p>ASNT Level II/III radiographic film interpreters with expertise in ASME Section V Article 2, AWS D1.1, API 1104 acceptance criteria. Detailed radiographic reports with weld-by-weld accept/reject decisions, defect characterization and repair recommendations per applicable codes.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access RT Matters:</strong>
                        <p>Critical pressure vessel and structural welds in offshore platforms, refineries and power plants are often located 30-150m above ground. Many codes and client specifications mandate radiographic testing for permanent records and comprehensive volumetric assessment. Traditional approach requires scaffolding ($500K-3M), radiation exclusion zones (production impact), and 12-20 week duration. Rope access RT delivers equivalent inspection quality at 50-70% cost savings, 8-12 weeks faster execution, and enables RT of locations previously considered uninspectable due to access constraints—particularly valuable for aging infrastructure where code-mandated RT is required but scaffold costs are prohibitive.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request Rope Access RT Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/rope-access/rope-access-rt-setup.jpg" alt="IRATA technician performing rope access radiographic testing setup on offshore platform weld">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 + RSO certified technician positioning gamma ray source for rope access RT of offshore platform pressure vessel weld at 55m elevation</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">2%</span>
                        <span class="stat-label">ASME Sec V Sensitivity</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100mm</span>
                        <span class="stat-label">Max Steel Penetration (Se-75)</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">60%</span>
                        <span class="stat-label">Cost Saving vs Scaffolding</span>
                    </div>
                </div>

                <div class="system-types">
                    <h4><i class="fas fa-radiation"></i> RT Techniques Available</h4>
                    <div class="system-type-grid">
                        <div class="system-type-item">
                            <i class="fas fa-atom"></i>
                            <span>Gamma Ray (Ir-192, Se-75)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-bolt"></i>
                            <span>Portable X-Ray (160-300kV)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-laptop"></i>
                            <span>Digital Radiography (DR/CR)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-circle"></i>
                            <span>DWSI/DWDI Pipe Techniques</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-film"></i>
                            <span>Film Radiography (Permanent Records)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-clock"></i>
                            <span>Real-Time RT (Where Applicable)</span>
                        </div>
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
            <span class="section-label">WHY CHOOSE ROPE ACCESS RT</span>
            <h2>Key Advantages Over Traditional Scaffolding-Based Radiography</h2>
            <p>Cost savings, permanent records and comprehensive radiation safety without access limitations</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-dollar-sign"></i></div>
                <h3>Massive Scaffolding Cost Elimination (50-70%)</h3>
                <p>Offshore pressure vessel RT: $2.2M scaffolding + RT quote vs $680K rope access RT (69% savings). Refinery column weld RT: $1.4M vs $420K (70% savings). Power plant vessel RT: $980K vs $340K (65% savings). Savings increase with elevation, structural complexity and radiation exclusion zone requirements.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-file-alt"></i></div>
                <h3>Permanent Record & Regulatory Compliance</h3>
                <p>Film radiography provides permanent, archivable records meeting ASME Section V Article 2, AWS D1.1, API 1104 requirements—essential for pressure vessel certification, warranty documentation, regulatory compliance and forensic analysis. Digital RT options provide immediate results while maintaining code compliance where permitted.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-eye"></i></div>
                <h3>Comprehensive Volumetric Defect Detection</h3>
                <p>RT detects internal weld discontinuities invisible to surface methods: porosity, slag inclusions, incomplete penetration, lack of fusion, cracks (orientation dependent), tungsten inclusions—complete volumetric assessment of critical pressure boundary welds per code requirements.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Eliminate 8-12 Week Critical Path Impact</h3>
                <p>Traditional scaffold-based RT adds 10-16 weeks to project schedules (scaffold erection + RT + film processing + scaffold dismantling). Rope access RT mobilizes in 3-5 days, executes inspection in 1-3 weeks depending on scope, demobilizes immediately—removing 10-14 weeks from critical path worth $3-20M in production deferment for refineries and offshore platforms.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-shield-alt"></i></div>
                <h3>Integrated Radiation Safety Management</h3>
                <p>Dual-certified teams (IRATA + RSO) eliminate coordination gaps between rope access and radiation safety contractors. Single point of accountability for exclusion zones, personnel monitoring, emergency procedures—improving safety performance and reducing radiation safety incidents compared to multi-contractor approaches.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>Access Previously Uninspectable Locations</h3>
                <p>Offshore platform undersides, confined spaces with radiation exclusion zone constraints, complex geometries where scaffolding is impossible, emergency RT during operating campaigns—rope access enables code-mandated RT where traditional methods fail or are economically prohibitive (scaffold cost >$1-3M).</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RT TECHNIQUE COMPARISON ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">RADIOGRAPHIC TECHNIQUE SELECTION</span>
            <h2>Gamma Ray vs X-Ray vs Digital RT Selection Guide</h2>
            <p>Choose optimal RT method based on material thickness, geometry, access constraints and project requirements</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th><i class="fas fa-atom"></i> Gamma Ray (Ir-192)</th>
                        <th><i class="fas fa-atom"></i> Gamma Ray (Se-75)</th>
                        <th><i class="fas fa-bolt"></i> Portable X-Ray</th>
                        <th><i class="fas fa-laptop"></i> Digital RT (DR/CR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Material Thickness Range (Steel)</strong></td>
                        <td>12-70mm (optimal 25-50mm)</td>
                        <td>40-100mm+ (thick sections)</td>
                        <td>6-50mm (thin-to-medium)</td>
                        <td>Similar to film (technique dependent)</td>
                    </tr>
                    <tr>
                        <td><strong>Portability (Rope Access)</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (compact, lightweight)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (compact source)</td>
                        <td class="good">Good (generator weight 20-50kg)</td>
                        <td class="good">Good (detector panels require protection)</td>
                    </tr>
                    <tr>
                        <td><strong>Power Requirements</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> None (radioactive source)</td>
                        <td class="excellent"><i class="fas fa-star"></i> None (radioactive source)</td>
                        <td class="poor">Generator power or battery packs required</td>
                        <td class="poor">Power for X-ray + digital detector system</td>
                    </tr>
                    <tr>
                        <td><strong>Image Quality</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (2% ASME sensitivity typical)</td>
                        <td class="good">Good (slightly lower contrast vs Ir-192)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (superior contrast for thin sections)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Excellent (immediate quality verification)</td>
                    </tr>
                    <tr>
                        <td><strong>Exposure Time</strong></td>
                        <td class="good">Moderate (3-20 min typical)</td>
                        <td class="poor">Longer (higher energy, longer exposure)</td>
                        <td class="good">Moderate to fast (1-10 min typical)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Fast (seconds to minutes)</td>
                    </tr>
                    <tr>
                        <td><strong>Results Availability</strong></td>
                        <td class="average">Film processing delays (2-4 hours)</td>
                        <td class="average">Film processing delays (2-4 hours)</td>
                        <td class="average">Film processing delays (2-4 hours)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Immediate (digital display)</td>
                    </tr>
                    <tr>
                        <td><strong>Permanent Record</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Film archive (decades retention)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Film archive (decades retention)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Film archive (decades retention)</td>
                        <td class="good">Digital archive (requires backup/migration)</td>
                    </tr>
                    <tr>
                        <td><strong>Rope Access Suitability</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Ideal (portable, no power, proven)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Very good (thick sections, offshore)</td>
                        <td class="good">Good (power/weight constraints)</td>
                        <td class="average">Moderate (equipment protection critical)</td>
                    </tr>
                    <tr>
                        <td><strong>Typical Application</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> General pressure vessel/pipe welds</td>
                        <td>Very thick sections, offshore platforms</td>
                        <td>Thin sections, construction RT, immediate results needed</td>
                        <td>When immediate results critical, digital archive required</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Rope Access RT Strategy:</strong> Ir-192 gamma radiography is the preferred technique for 80-90% of rope access RT applications—optimal combination of portability (compact source, no power required), material thickness range (12-70mm covers most pressure vessel/pipe wall thicknesses), image quality (2% ASME sensitivity) and field practicality. Se-75 gamma ray deployed for very thick sections (>70mm wall thickness) common in offshore platforms and thick-wall pressure vessels. Portable X-ray used for thin sections (<12mm), construction RT and projects requiring immediate digital results. Digital RT (DR/CR) gaining adoption where clients accept digital records and immediate results outweigh film processing delays—particularly valuable for offshore/remote locations minimizing helicopter flights for film processing logistics.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">ROPE ACCESS RT APPLICATIONS</span>
            <h2>Critical Weld Radiography Across Industries</h2>
            <p>Permanent volumetric records for pressure vessels, offshore platforms, pipelines and structural steel</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="pressure-vessels">Pressure Vessels & Heat Exchangers</button>
                <button class="tab-btn" data-tab="offshore-platforms">Offshore Platforms & Marine</button>
                <button class="tab-btn" data-tab="pipeline-rt">Pipeline Girth Welds</button>
                <button class="tab-btn" data-tab="construction-rt">Construction & Repair RT</button>
            </div>

            <div class="tabs-content">
                <!-- Pressure Vessels & Heat Exchangers Tab -->
                <div class="tab-panel active" id="pressure-vessels">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/pressure-vessel-rt.jpg" alt="Rope access gamma ray setup for elevated pressure vessel weld radiography">
                        </div>
                        <div class="tab-text">
                            <h3>Elevated Pressure Vessel & Heat Exchanger Weld Radiography</h3>
                            <p>ASME Section VIII Division 1/2 pressure vessels require radiographic examination of critical welds for new construction, repairs and alterations. Traditional scaffolding-based RT costs $800K-3M for elevated vessels. Rope access RT delivers code-compliant permanent records at 50-70% cost savings with minimal schedule impact.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>New Construction RT:</strong> ASME Section VIII Category A weld joints (full RT), Category B/C/D welds (spot RT per code), tubesheet-to-shell welds, nozzle-to-shell connections, manway welds—complete radiographic examination per ASME Section V Article 2 with permanent film records for Authorized Inspector (AI) review and certification</li>
                                <li><i class="fas fa-check"></i> <strong>Repair Weld Verification:</strong> Post-repair RT of pressure vessel weld repairs, temper bead repairs, hot tap connections, nozzle reinforcements—verify repair integrity before return to service per NBIC Part 3 requirements and AI acceptance</li>
                                <li><i class="fas fa-check"></i> <strong>Alteration & Modification RT:</strong> New nozzle installations, reinforcement pad welds, attachment welds to pressure boundary, rating changes requiring weld examination—rope access RT enables modifications without vessel removal or massive scaffolding investment</li>
                                <li><i class="fas fa-check"></i> <strong>Heat Exchanger Shell Welds:</strong> TEMA-type shell & tube exchangers with elevated installation—longitudinal seam welds, tubesheet-to-shell welds, channel head circumferential welds, nozzle connections requiring RT per ASME VIII or client specifications</li>
                                <li><i class="fas fa-check"></i> <strong>Reactor Vessel Welds:</strong> FCC reactors, hydrocracker reactors, catalytic reformer vessels—thick-wall (50-150mm) pressure boundary welds requiring full volumetric RT per ASME VIII Division 2, often mandating Se-75 gamma ray for penetration capability</li>
                                <li><i class="fas fa-check"></i> <strong>Thick-Wall Vessel Applications:</strong> High-pressure vessels (100-500 bar operating pressure), thick-wall construction (40-150mm wall thickness)—Se-75 gamma radiography optimized for thick section penetration with acceptable film quality and sensitivity</li>
                                <li><i class="fas fa-check"></i> <strong>Warranty Documentation:</strong> Permanent radiographic film records supporting equipment warranties, insurance requirements, regulatory compliance and forensic analysis in case of future failures—archival film storage per ASME requirements (typically 5-10 years minimum)</li>
                                <li><i class="fas fa-check"></i> <strong>Third-Party Inspection Support:</strong> AI (Authorized Inspector) witness radiography, insurance surveyor verification, classification society inspections (marine vessels), regulatory inspector witness—rope access RT coordinates witness hold points and provides code-compliant film interpretation reports</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-industry"></i> Case Study: Elevated FCC Reactor Repair Weld RT</h4>
                                <p><strong>Asset:</strong> Fluid Catalytic Cracking (FCC) reactor vessel (4.2m diameter, 42m height, 85mm wall thickness). Repair scope: 18 temper bead weld repairs on shell following routine inspection, ASME Section VIII Division 2 requiring 100% RT of repair welds.</p>
                                <p><strong>Traditional Challenge:</strong> Full scaffold encirclement quote: $1.85M cost, 14-week duration (7-week erection, 4-week RT + film processing, 3-week dismantle). Radiation exclusion zone requiring shutdown of adjacent FCC unit ($450K/day deferment). Total project cost: $1.85M scaffold + $18.9M production deferment (42 days × $450K) = $20.75M.</p>
                                <p><strong>Rope Access RT Solution:</strong> 4-person IRATA team (Level 3 rope access supervisors with RSO certification + ASNT Level II RT technicians). RT technique: Se-75 gamma ray (85mm wall thickness), double-wall single-image (DWSI) exposures. Radiation safety: Engineered exclusion zones using rope barriers + continuous radiation monitoring + personnel dosimetry + 24-hour RSO coverage. Work schedule: Night shift (10 PM - 6 AM) to minimize FCC unit impact—RT exclusion zones established during low-activity periods.</p>
                                <p><strong>Execution & Results:</strong> Duration: 12 days total (2 days mobilization + setup, 8 days RT exposures + film processing, 2 days film interpretation + reporting). Radiation safety: Zero personnel overexposures, zero radiation safety incidents, full AERB compliance. Technical results: 18 repair welds radiographed (54 total exposures, 3 shots per weld × 18 welds), all welds accepted per ASME Section VIII Division 2 acceptance criteria, permanent film records archived per code. Cost: $680K total (rope access + RT crew + film processing + RSO services) = 96% savings vs $20.75M traditional approach. Production impact: Adjacent FCC unit operated continuously with minor throughput reduction during night RT operations—production deferment reduced from $18.9M to $1.2M (managed throughput reduction vs total shutdown). Schedule: Reactor returned to service 13 weeks ahead of scaffold-based approach—$58.5M additional revenue (13 weeks × 7 days × $450K/day margin). Client implemented rope access RT as standard for all elevated pressure vessel work—5-year program savings projection: $12M+ in scaffold cost avoidance across vessel fleet.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME Sec VIII (Pressure Vessels)</span>
                                <span class="standard-tag">ASME Sec V Art 2 (RT)</span>
                                <span class="standard-tag">API 510 (Pressure Vessel Inspection)</span>
                                <span class="standard-tag">NBIC Part 3 (Repairs/Alterations)</span>
                                <span class="standard-tag">TEMA Standards</span>
                                <span class="standard-tag">AERB/NRC (Radiation Safety)</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offshore Platforms & Marine Tab -->
                <div class="tab-panel" id="offshore-platforms">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/offshore-platform-rt.jpg" alt="Rope access radiography setup on offshore platform structural weld">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Platform, FPSO & Marine Structure Radiography</h3>
                            <p>Fixed platforms, FPSOs, jack-up rigs and marine vessels require radiographic examination of critical structural welds, pressure vessel welds and piping connections per classification society rules (ABS, DNV, Lloyd's). Marine scaffolding costs $2-10M depending on platform size and water depth. Rope access RT eliminates scaffolding while maintaining classification compliance and permanent record requirements.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Platform Structural Welds:</strong> Critical node connections, fracture-critical members, jacket brace-to-leg welds, topside module connections—RT per API RP 2A and classification society requirements providing permanent records for regulatory compliance and forensic analysis capability</li>
                                <li><i class="fas fa-check"></i> <strong>Topside Pressure Equipment:</strong> Process vessels, separators, heat exchangers, compressor piping—ASME Section VIII RT requirements apply to offshore installations, rope access enables code-compliant RT without platform shutdown or marine scaffolding mobilization</li>
                                <li><i class="fas fa-check"></i> <strong>Riser Weld Radiography:</strong> Production risers, export risers, import risers—girth weld RT at platform tie-in connections, flexible-to-rigid transitions, critical riser sections per API RP 2RD and client specifications</li>
                                <li><i class="fas fa-check"></i> <strong>FPSO Hull & Mooring Welds:</strong> Hull structural welds requiring classification society RT, turret bearing connections, mooring attachment welds, critical load path connections—rope access RT performed from external hull access or internal compartments without drydocking costs</li>
                                <li><i class="fas fa-check"></i> <strong>Modification & Tie-In RT:</strong> New platform additions (brownfield projects), pipeline tie-ins, equipment additions, structural reinforcements—construction RT delivered without disrupting platform operations or requiring marine scaffold mobilization</li>
                                <li><i class="fas fa-check"></i> <strong>Repair Weld Verification:</strong> Post-repair RT following structural repairs, crack repairs, corrosion repairs—verify repair integrity per classification rules and provide permanent records for AI/surveyor acceptance and continued certification</li>
                                <li><i class="fas fa-check"></i> <strong>Jack-Up Rig Leg Welds:</strong> Jack-up drilling rig leg structural welds, rack-and-pinion connections, leg-to-hull connections—critical welds requiring RT per marine classification and regulatory requirements</li>
                                <li><i class="fas fa-check"></i> <strong>Classification Society Witness:</strong> ABS, DNV-GL, Lloyd's Register, Bureau Veritas surveyor witness radiography—coordinate witness hold points, provide code-compliant RT procedures and film interpretation reports formatted for classification acceptance</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-ship"></i>
                                <div>
                                    <strong>Offshore RT Economics & Safety:</strong>
                                    <p>Marine scaffolding for offshore RT costs $3-12M (supply vessels, marine crew, weather delays, radiation exclusion zone impact to platform operations). Platform production deferment during RT operations: $800K-4M per day depending on oil/gas production rates and commodity prices. Rope access RT eliminates scaffolding costs, reduces inspection duration from 12-20 weeks to 2-4 weeks, and minimizes production impact through engineered exclusion zones that allow continued operations in non-affected platform areas. Radiation safety is enhanced through dual-certified teams (IRATA + RSO) eliminating coordination gaps between rope access and radiation safety contractors—single accountability improves safety performance and regulatory compliance. Typical offshore rope access RT project savings: $5-30M per campaign (scaffold elimination + production deferment reduction + schedule protection).</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API RP 2A-WSD (Fixed Platforms)</span>
                                <span class="standard-tag">API RP 2RD (Risers)</span>
                                <span class="standard-tag">ABS Rules (Classification)</span>
                                <span class="standard-tag">DNV-GL Standards</span>
                                <span class="standard-tag">Lloyd's Register Rules</span>
                                <span class="standard-tag">SOLAS (Marine Safety)</span>
                                <span class="standard-tag">ISO 19901 (Offshore Structures)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pipeline Girth Welds Tab -->
                <div class="tab-panel" id="pipeline-rt">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/pipeline-girth-weld-rt.jpg" alt="Rope access gamma ray inspection on elevated pipeline girth weld">
                        </div>
                        <div class="tab-text">
                            <h3>Elevated Pipeline Girth Weld & Tie-In Radiography</h3>
                            <p>Pipeline girth welds per API 1104 often require radiographic examination for code compliance and permanent records. Elevated pipelines, pipeline bridges, above-ground crossings and platform risers present access challenges making traditional RT expensive and time-consuming. Rope access RT enables API 1104 compliant radiography without excavation, pipe supports removal or scaffolding erection.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Elevated Pipeline Girth Welds:</strong> Inter-unit transfer lines, pipe rack systems, elevated pipeline crossings—double-wall radiography (DWSI or DWDI per API 1104) of production girth welds requiring permanent records for commissioning, regulatory compliance and warranty documentation</li>
                                <li><i class="fas fa-check"></i> <strong>Pipeline Bridge Girth Welds:</strong> River crossings, highway crossings, railway crossings—RT of exposed pipeline girth welds without traffic disruption, bridge closure or excavation; rope access from bridge structure enables RT of welds 20-60m above ground/water</li>
                                <li><i class="fas fa-check"></i> <strong>Tie-In & Hot-Tap RT:</strong> Pipeline tie-in girth welds (new connections to existing systems), hot-tap branch connections, repair sleeve girth welds—immediate RT verification and acceptance enabling rapid system commissioning without delays for scaffold erection</li>
                                <li><i class="fas fa-check"></i> <strong>Offshore Riser Girth Welds:</strong> Platform-to-seafloor pipeline risers, riser joint girth welds, flexible-to-rigid transition welds—RT from platform using rope access positioning eliminates marine diving costs for platform-accessible girth welds above splash zone</li>
                                <li><i class="fas fa-check"></i> <strong>LNG/LPG Transfer Line RT:</strong> Cryogenic pipeline systems, loading arm connections, ship-to-shore transfer lines—specialized RT of critical girth welds in liquefied gas service requiring enhanced quality requirements and permanent records</li>
                                <li><i class="fas fa-check"></i> <strong>Compressor Station Piping RT:</strong> High-pressure gas transmission piping, compressor suction/discharge lines, cooler piping—thick-wall girth welds (12-50mm) requiring gamma RT with Se-75 or Ir-192 isotope selection based on wall thickness</li>
                                <li><i class="fas fa-check"></i> <strong>Repair Girth Weld Verification:</strong> Cut-out and replacement girth welds, sleeve installation welds, clamp repair verification—post-repair RT per API 1104 Section 9 providing permanent records for continued service approval</li>
                                <li><i class="fas fa-check"></i> <strong>100% RT vs Statistical Sampling:</strong> Projects requiring 100% girth weld RT (critical service, high-consequence areas) vs statistical sampling per API 1104—rope access enables cost-effective 100% RT where traditional methods make comprehensive RT economically prohibitive</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-gas-pump"></i> Case Study: Gas Pipeline Bridge Crossing RT Campaign</h4>
                                <p><strong>Asset:</strong> 30-inch natural gas transmission pipeline spanning major river via 320m elevated bridge structure (pipeline height above water: 42m, 18 girth welds requiring RT per DOT/PHMSA construction code compliance).</p>
                                <p><strong>Traditional Challenge:</strong> Marine contractor quoted RT requiring: Barge-mounted scaffolding platforms ($680K mobilization), radiation exclusion zone on river (navigation closure $120K/day × 14 days estimated = $1.68M economic impact), weather-sensitive operations, 5-week duration. Total cost: $680K + $1.68M river closure + film processing/interpretation = $2.5M+.</p>
                                <p><strong>Rope Access RT Approach:</strong> Bridge-accessible girth welds (all 18 welds above water level) inspected via rope access from bridge structure. RT technique: Ir-192 gamma ray, double-wall single-image (DWSI) per API 1104. Radiation safety: Exclusion zones established on bridge deck + river navigation advisory (no closure required—exclusion zone 50m radius, bridge height 42m = zero river surface exposure). Work schedule: Night operations (9 PM - 5 AM) minimizing highway traffic impact on bridge approach roads.</p>
                                <p><strong>Execution & Results:</strong> Duration: 9 days (2 days setup, 6 days RT exposures, 1 day film interpretation/reporting). Radiation safety: Zero personnel overexposures, river navigation continued uninterrupted (calculated dose at water surface <0.1 mrem/hr, well below regulatory limits), highway traffic minimal impact (single lane closure at night). Technical results: 18 girth welds radiographed (36 exposures, 2 shots per weld per API 1104 DWSI requirements), 17 welds accepted, 1 weld repair required (porosity cluster), re-RT after repair—accepted. Cost: $420K total (77% savings vs $2.5M+ marine approach). Environmental/Economic impact: Zero river navigation closure ($1.68M economic impact avoided), zero environmental permitting delays, minimal highway traffic disruption. Regulatory compliance: RT films + interpretation reports submitted to DOT/PHMSA, pipeline certified for operation, permanent records archived per federal requirements. Client outcome: Pipeline commissioned 4 weeks ahead of marine-based RT schedule—$8M revenue protection (gas sales contract penalties avoided for late commissioning).</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 1104 (Pipeline Welding)</span>
                                <span class="standard-tag">ASME B31.4/.8 (Pipeline Systems)</span>
                                <span class="standard-tag">49 CFR 195/192 (DOT Pipeline Safety)</span>
                                <span class="standard-tag">ISO 3183 (Pipeline Steel)</span>
                                <span class="standard-tag">DNV-OS-F101 (Submarine Pipelines)</span>
                                <span class="standard-tag">ASME Sec V Art 2 (RT)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Construction & Repair RT Tab -->
                <div class="tab-panel" id="construction-rt">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/construction-rt.jpg" alt="Rope access X-ray setup for new construction weld radiography">
                        </div>
                        <div class="tab-text">
                            <h3>New Construction, Repair & Modification RT Verification</h3>
                            <p>Construction projects, plant modifications and equipment repairs often require radiographic examination per building codes, ASME standards or client specifications. Rope access RT enables code-compliant radiography during construction without disrupting critical path schedules, during plant modifications without production shutdown, and for elevated repairs without scaffolding investment.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>New Plant Construction RT:</strong> Refinery construction, chemical plant construction, power plant construction—RT of elevated piping welds, vessel welds, structural connections per ASME B31.3, ASME Section VIII, AWS D1.1 during construction phase without scaffold delays impacting project completion schedules</li>
                                <li><i class="fas fa-check"></i> <strong>Structural Steel Construction:</strong> High-rise building critical welds, bridge construction, stadium structures—AWS D1.1 fracture-critical weld RT requirements satisfied using rope access positioning from building/structure framework during construction</li>
                                <li><i class="fas fa-check"></i> <strong>Plant Modification RT:</strong> New equipment installations, process modifications, capacity expansion projects—RT of modification welds (new piping tie-ins, vessel nozzles, structural additions) performed during plant operations using rope access + radiation exclusion zone management</li>
                                <li><i class="fas fa-check"></i> <strong>Repair Weld RT Verification:</strong> Pressure vessel repairs, piping repairs, structural repairs—post-repair RT per NBIC Part 3 (pressure equipment) or AWS D1.1 (structural) verifying repair integrity before equipment return to service</li>
                                <li><i class="fas fa-check"></i> <strong>Emergency Repair RT:</strong> Unplanned shutdown repairs requiring immediate RT verification—rope access RT mobilizes in 24-48 hours vs 2-4 weeks for scaffold-based approach, enabling faster equipment return to service and minimizing production loss</li>
                                <li><i class="fas fa-check"></i> <strong>Portable X-Ray Applications:</strong> Thin-section welds (<25mm), aluminum structures, immediate results requirements—portable X-ray with digital radiography provides same-shift accept/reject decisions supporting construction/repair schedule management</li>
                                <li><i class="fas fa-check"></i> <strong>Third-Party Inspection Coordination:</strong> AI (Authorized Inspector) witness RT, owner's engineer verification, insurance surveyor witness, regulatory inspector witness—rope access RT coordinates witness hold points and provides flexible scheduling accommodating third-party availability</li>
                                <li><i class="fas fa-check"></i> <strong>Warranty & Certification Documentation:</strong> Permanent radiographic records supporting equipment warranties (typically 1-3 years), ASME Code stamping, regulatory certification, and forensic analysis capability for future failure investigations or insurance claims</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-hard-hat"></i>
                                <div>
                                    <strong>Construction Project Schedule Protection:</strong>
                                    <p>New construction projects operate on aggressive schedules where RT delays directly impact project completion and liquidated damages. Traditional scaffold-based RT adds 4-8 weeks to critical path (scaffold erection + RT + dismantle) costing $2-10M in schedule delays. Rope access RT performs radiography concurrent with construction activities—technicians access welds immediately after welding using temporary anchors or building structure, complete RT within 1-3 days vs 4-8 weeks, and eliminate scaffold costs. Construction managers report 15-25% reduction in overall project duration when rope access RT is incorporated from project planning phase—typical savings $5-25M per major project through schedule compression and scaffold elimination. Essential for EPC contractors operating under fixed-price contracts where schedule delays trigger liquidated damages ($50K-500K per day) and profit erosion.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME B31.3 (Process Piping)</span>
                                <span class="standard-tag">ASME Sec VIII (Pressure Vessels)</span>
                                <span class="standard-tag">AWS D1.1 (Structural Welding)</span>
                                <span class="standard-tag">NBIC Part 3 (Repairs/Alterations)</span>
                                <span class="standard-tag">IBC (Building Code)</span>
                                <span class="standard-tag">ASME Sec V Art 2 (RT)</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ===================== RADIATION SAFETY ===================== -->
<section class="capabilities-section" style="background: #1a237e; color: #fff;">
    <div class="container">
        <div class="section-header center" style="color: #fff;">
            <span class="section-label">COMPREHENSIVE RADIATION PROTECTION</span>
            <h2>Our Radiation Safety Program</h2>
            <p>Certified RSO personnel, engineered controls and regulatory compliance for safe RT operations at height</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box" >
                <div class="capability-header">
                    <i class="fas fa-user-shield"></i>
                    <h3>Certified Radiation Safety Personnel</h3>
                </div>
                <ul class="capability-list" >
                    <li><span class="cap-label">Radiation Safety Officer (RSO):</span> AERB/NRC certified RSO on every project (minimum 5 years experience)</li>
                    <li><span class="cap-label">RT Technicians:</span> ASNT Level II Radiography + radiation safety training certification</li>
                    <li><span class="cap-label">IRATA Integration:</span> Dual-certified teams (IRATA Level 3 + RSO) eliminate contractor coordination gaps</li>
                    <li><span class="cap-label">Annual Training:</span> Radiation safety refresher, emergency procedures, ALARA principles, regulatory updates</li>
                    <li><span class="cap-label">Medical Surveillance:</span> Annual physical exams, radiation worker health monitoring per regulations</li>
                    <li><span class="cap-label">Certifications Current:</span> All licenses, certifications and medical surveillance maintained current—no expired credentials</li>
                </ul>
            </div>

            <div class="capability-box"">
                <div class="capability-header">
                    <i class="fas fa-radiation"></i>
                    <h3>Radiation Source Management</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Isotope Inventory:</span> Ir-192 (multiple curie strengths), Se-75 (thick sections), source decay tracking</li>
                    <li><span class="cap-label">Source Licensing:</span> AERB/NRC Type A licenses, transportation permits, interstate movement authorizations</li>
                    <li><span class="cap-label">Security:</strong> Locked source storage, 24-hour security, two-person rule, tamper indicators</li>
                    <li><span class="cap-label">Transport:</span> DOT-approved Type A shipping containers, placarding, shipping papers, emergency response</li>
                    <li><span class="cap-label">Source Tracking:</span> Chain-of-custody documentation, daily source accountability, quarterly leak tests</li>
                    <li><span class="cap-label">Decay Replacement:</span> Proactive source replacement before activity drops below project requirements</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Exclusion Zone Engineering</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Pre-Exposure Surveys:</span> Calculate exclusion zone radii using source activity + exposure geometry + shielding</li>
                    <li><span class="cap-label">Physical Barriers:</span> Rope barriers, barricades, signs, flashers—prevent inadvertent entry during exposures</li>
                    <li><span class="cap-label">Continuous Monitoring:</span> Area radiation monitors (ARMs) with alarms, rope access personnel monitors</li>
                    <li><span class="cap-label">Rope Access Integration:</span> Exclusion zones designed for vertical geometry—rope positioning outside exposure zones</li>
                    <li><span class="cap-label">Multi-Level Facilities:</span> Exclusion zones address above/below deck areas—prevent exposure to personnel on other elevations</li>
                    <li><span class="cap-label">Documentation:</strong> Exclusion zone calculations, radiation surveys, barrier inspections—full regulatory compliance records</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-check"></i>
                    <h3>Personnel Dosimetry & Monitoring</h3>
                </div>
                <ul class="capability-list" style="color: rgba(255,255,255,0.9);">
                    <li><span class="cap-label">Film Badges/TLDs:</span> Whole-body dosimetry for all radiation workers, monthly/quarterly reading cycles</li>
                    <li><span class="cap-label">Pocket Dosimeters:</span> Direct-reading dosimeters (0-200 mrem) checked daily, pre/post exposure readings</li>
                    <li><span class="cap-label">Alarming Dosimeters:</span> Electronic personal dosimeters (EPDs) with preset alarms for dose rate/accumulated dose</li>
                    <li><span class="cap-label">Exposure Records:</span> Individual exposure tracking, cumulative dose monitoring, regulatory reporting (>ALARA investigations)</li>
                    <li><span class="cap-label">Dose Limits:</span> Administrative limits below regulatory limits (ALARA), rotation of personnel to minimize exposure</li>
                    <li><span class="cap-label">Audits:</span> Monthly dosimetry review, quarterly ALARA meetings, annual dose trend analysis</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h3>Emergency Response Procedures</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Source Disconnect:</span> Procedures for stuck source, cable breaks, equipment malfunctions—remote disconnect capability</li>
                    <li><span class="cap-label">Personnel Overexposure:</span> Immediate medical evaluation, dose reconstruction, regulatory notification per AERB/NRC</li>
                    <li><span class="cap-label">Lost/Stolen Source:</span> Immediate regulatory notification, law enforcement coordination, public protection measures</li>
                    <li><span class="cap-label">Rope Access Rescue:</span> Rescue procedures integrating radiation safety—retrieval of injured personnel from exclusion zones</li>
                    <li><span class="cap-label">Equipment Failure:</span> Backup equipment availability, source recovery tools, shielding materials on-site</li>
                    <li><span class="cap-label">Communication:</span> 24-hour RSO availability, regulatory agency contact numbers, hospital notification protocols</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header" >
                    <i class="fas fa-file-contract"></i>
                    <h3>Regulatory Compliance & Documentation</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">AERB Licensing:</span> Current AERB radiation safety licenses for all sources and locations—no violations/citations</li>
                    <li><span class="cap-label">State Permits:</span> State radiation control permits where required (state-specific regulations)</li>
                    <li><span class="cap-label">Regulatory Inspections:</span> AERB/state inspector audits, zero findings history, proactive compliance management</li>
                    <li><span class="cap-label">Documentation:</span> Radiation safety procedures, training records, dosimetry files, source inventories—audit-ready</li>
                    <li><span class="cap-label">Client Coordination:</span> Pre-mobilization radiation safety plan submittal, client HSE integration, regulatory notification support</li>
                    <li><span class="cap-label">Continuous Improvement:</span> Incident investigation (near-misses), lessons learned, procedure updates, technology adoption</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHY CHOOSE US ===================== -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">WHY ALPHA SONIX</span>
            <h2>Your Rope Access Radiographic Testing Specialists</h2>
            <p>Dual-certified expertise, comprehensive radiation safety and proven track record with zero incidents</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Dual-Certified RSO + Rope Access Teams</h3>
                <p>Rare combination: IRATA Level 3 rope access supervisors with Radiation Safety Officer (RSO) certification—ensuring both safe working-at-height execution AND comprehensive radiation protection from same accountable team, eliminating contractor coordination gaps that cause safety incidents.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Zero Radiation Safety Incidents (10-Year Record)</h3>
                <p>Zero personnel overexposures, zero regulatory violations, zero lost/stolen sources across 120,000+ rope access RT hours (2014-2024). AERB/state inspector audit results: zero findings, zero corrective actions—demonstrating exemplary radiation safety management and regulatory compliance culture.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-oil-can"></i></div>
                <h3>Offshore & Heavy Industry Experience</h3>
                <p>Extensive offshore platform, refinery, power plant and petrochemical RT experience. Understand complex exclusion zone challenges (multi-level facilities, simultaneous operations, confined spaces), SIMOPS protocols, production deferment economics—deliver RT without unnecessary production impact.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-film"></i></div>
                <h3>Film Interpretation Excellence</h3>
                <p>ASNT Level II/III radiographers with 15+ years film interpretation experience. Expertise in ASME Section V Article 2, AWS D1.1, API 1104 acceptance criteria—detailed interpretation reports formatted for AI acceptance, classification society approval, regulatory compliance.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-laptop"></i></div>
                <h3>Digital RT & Technology Adoption</h3>
                <p>Digital radiography (DR/CR) capability where immediate results and digital archiving provide project value—automated defect recognition software, immediate quality verification, digital data management. Balanced approach: permanent film records where required, digital efficiency where permitted.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-clock"></i></div>
                <h3>Emergency Response Capability</h3>
                <p>24-48 hour emergency mobilization for critical repair RT, failure investigation, urgent construction RT requirements. Maintain source inventory, equipment and certified personnel for rapid deployment—minimize production loss through fast RT verification and equipment return to service.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Code-Compliant Radiographic Testing—Without Scaffolding Delays or Radiation Safety Compromises</h2>
            <p>IRATA Level 3 + RSO dual-certified teams deliver permanent RT records at 60% cost savings. Zero radiation safety incidents, comprehensive regulatory compliance.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Rope Access RT Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Free Radiation Safety Plan & Exclusion Zone Engineering</span>
                <span><i class="fas fa-check"></i> Certified RSO + Film Interpretation Included</span>
                <span><i class="fas fa-check"></i> Permanent Film Records + Digital Options</span>
                <span><i class="fas fa-check"></i> 24-48 Hour Emergency Response</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Alternative & Complementary Volumetric Inspection Methods</h2>
            <p>Consider advanced UT techniques for radiation-free volumetric assessment or combine with RT for comprehensive weld evaluation</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-paut-tofd.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access PAUT & ToFD</h3>
                <p>Advanced ultrasonic alternative to RT—immediate results, no radiation safety concerns, superior crack detection for many applications</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-pt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-tint"></i></div>
                <h3>Rope Access PT (Dye Penetrant)</h3>
                <p>Surface crack detection for RT follow-up verification, repair confirmation and weld surface examination</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-ruler-combined"></i></div>
                <h3>Rope Access UT Thickness</h3>
                <p>Conventional ultrasonic thickness for weld reinforcement measurement and corrosion assessment complementing RT programs</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-vt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access Visual Inspection</h3>
                <p>General visual examination (GVE) and close visual inspection (CVI) for overall weld quality and condition assessment</p>
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