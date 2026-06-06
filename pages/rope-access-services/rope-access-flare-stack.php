<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access Flare Stack & Chimney Inspection Services | IRATA Certified High-Altitude NDT | Alpha Sonix NDT Solutions";
$meta_description = "IRATA/SPRAT certified rope access inspection for flare stacks, industrial chimneys, exhaust stacks and emission stacks up to 200m height. Multi-discipline NDT (VT, UT thickness, PT, RVI) for shell integrity, refractory condition, weld assessment and structural steel without scaffolding. API 579, ASME compliance. 70% cost savings vs traditional access.";
$meta_keywords = "rope access flare stack inspection, rope access chimney inspection, IRATA stack inspection, high altitude stack NDT, flare stack integrity testing, chimney structural assessment, rope access refractory inspection, scaffolding-free stack inspection, industrial stack testing, offshore flare inspection";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-flare-stack.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-flare-stack-og.jpg">

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
            "serviceType": "Rope Access Flare Stack & Chimney Inspection",
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
            "description": "IRATA/SPRAT certified rope access inspection services for flare stacks, industrial chimneys and emission stacks. Multi-discipline NDT including visual inspection, UT thickness mapping, weld PT/MT testing and internal RVI up to 200m height without scaffolding. API 579, ASME Section V compliant with 60-75% cost savings vs traditional access methods.",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Rope Access Stack & Chimney Inspection Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Offshore Flare Stack Integrity Assessment"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Power Plant Chimney Structural Inspection"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Refinery Process Stack NDT Testing"
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
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/rope-access/flare-stack-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Flare Stack & Chimney Inspection</span>
            </div>
            <h1 class="page-title">Rope Access Flare Stack & Chimney Inspection</h1>
            <p class="page-subtitle">IRATA/SPRAT certified multi-discipline inspection for flare stacks, industrial chimneys and emission stacks up to 200m height—comprehensive structural integrity, corrosion mapping, weld assessment and refractory evaluation without scaffolding costs or production shutdowns</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA Level 3 + Multi-NDT Certified</span>
                <span class="badge"><i class="fas fa-ruler-vertical"></i> Up to 200m Height Capability</span>
                <span class="badge"><i class="fas fa-tools"></i> VT + UT + PT + RVI Integration</span>
                <span class="badge"><i class="fas fa-coins"></i> 70% Cost Reduction vs Scaffolding</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-fire-alt"></i></div>
                <h3>Flare Stack Integrity Assessment</h3>
                <p>Complete inspection from grade to flare tip: shell thickness mapping, weld integrity (PT/MT), guy wire/anchor assessment, pilot burner condition, internal refractory evaluation, and thermal damage zones—ensuring safe operation and environmental compliance.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-industry"></i></div>
                <h3>Industrial Chimney Structural Inspection</h3>
                <p>Power plant, refinery and chemical plant chimney inspection: steel liner thickness (UT grid mapping), refractory condition assessment, internal corrosion survey, structural steel connections, lightning protection verification and guy wire systems (50-200m height range).</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-dollar-sign"></i></div>
                <h3>Eliminate Scaffolding & Crane Costs</h3>
                <p>Traditional scaffolding for 100m+ flare stacks costs $800K-2M with 8-12 week erection/dismantling. Rope access delivers same inspection scope in 3-7 days at $150K-400K total cost—saving 60-75% and removing 10+ weeks from critical path.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-camera"></i></div>
                <h3>Multi-Discipline NDT + Digital Reporting</h3>
                <p>Integrate visual inspection (VT Level II), UT thickness mapping, weld PT/MT testing, internal RVI, thermal imaging, and drone correlation in single mobilization—with GPS-tagged defect mapping, 3D modeling and trending analysis vs previous inspections.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS STACK INSPECTION ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">HIGH-ALTITUDE STRUCTURAL INTEGRITY</span>
                <h2>What is Rope Access Flare Stack & Chimney Inspection?</h2>

                <p class="lead">Rope Access Flare Stack & Chimney Inspection integrates IRATA/SPRAT industrial rope access positioning techniques with multi-discipline NDT methods (visual inspection, ultrasonic thickness testing, dye penetrant testing, magnetic particle testing, remote visual inspection) to deliver comprehensive structural integrity assessment of elevated flare systems, industrial chimneys and emission stacks—without scaffolding infrastructure, crane rental or process shutdowns.</p>

                <p>Flare stacks and industrial chimneys are critical safety and environmental assets operating at extreme heights (typically 40-200 meters) and exposed to thermal cycling, corrosive gases, mechanical stress and weather extremes. Periodic inspection is mandated by API 579, ASME Section VIII, local environmental agencies (EPA, CPCB) and insurance underwriters—but traditional access methods incur massive costs and schedule impacts.</p>

                <p><strong>Rope access revolutionizes stack inspection economics:</strong> IRATA Level 3 certified supervisors with multi-discipline NDT qualifications (VT Level II, UT Level II, PT Level II) position directly at inspection zones using dual-rope systems, engineered anchors and specialized work positioning equipment—delivering code-compliant inspection quality at 60-75% lower cost and 5-10x faster mobilization than scaffolding or platform-based access.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>External Shell Integrity Assessment</strong>
                            <p>UT thickness grid mapping (API 579 RBI compliance), corrosion mapping with remaining life calculations, weld integrity testing (PT/MT per ASME Sec V), thermal damage zones (thermal imaging), coating condition assessment, and structural steel connection verification.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Internal Inspection & Refractory Evaluation</strong>
                            <p>Internal rope access descent with RVI (videoscope/borescope), refractory brick/castable condition survey, anchor attachment integrity, internal corrosion mapping, hot spot identification (thermal imaging), and seal/expansion joint assessment.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Guy Wire & Support System Inspection</strong>
                            <p>Guy wire tension measurement, anchor bolt PT/UT testing, turnbuckle/clevis inspection, corrosion assessment at terminations, vibration dampener condition, and structural load path verification per design drawings.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Flare Tip & Pilot Burner Systems</strong>
                            <p>Flare tip dimensional inspection, pilot burner nozzle condition, igniter electrode assessment, wind shield integrity, thermal cracking detection, and flow distribution verification—critical for combustion efficiency and emissions compliance.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access Stack Inspection Matters:</strong>
                        <p>A 120m refinery flare stack catastrophic failure causes: $5-15M emergency repair costs, 30-90 day shutdown (production loss $50-200M for large refineries), environmental fines ($1-10M+), regulatory scrutiny, and safety/reputation damage. Proactive rope access inspection ($200-400K every 3-5 years) detects critical wall thinning, weld cracks and refractory failure BEFORE catastrophic collapse—delivering 50:1 ROI through risk mitigation alone, plus scaffold cost avoidance and schedule protection.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request Stack Inspection Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/rope-access/flare-stack-inspection.jpg" alt="IRATA technician performing rope access inspection on 150m offshore flare stack">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 technician conducting UT thickness mapping on offshore platform flare stack at 120m elevation</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">200m</span>
                        <span class="stat-label">Maximum Height Capability</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">75%</span>
                        <span class="stat-label">Cost Saving vs Scaffold</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3-7 Days</span>
                        <span class="stat-label">Typical Inspection Duration</span>
                    </div>
                </div>

                <div class="system-types">
                    <h4><i class="fas fa-clipboard-check"></i> Inspection Scope Elements</h4>
                    <div class="system-type-grid">
                        <div class="system-type-item">
                            <i class="fas fa-eye"></i>
                            <span>General Visual Examination (GVE)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-ruler-combined"></i>
                            <span>UT Thickness Grid Mapping</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-tint"></i>
                            <span>Weld PT/MT Testing</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-video"></i>
                            <span>Internal RVI (Videoscope)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-thermometer-half"></i>
                            <span>Thermal Imaging (IR)</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-satellite-dish"></i>
                            <span>Drone Correlation Survey</span>
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
            <span class="section-label">WHY CHOOSE ROPE ACCESS STACK INSPECTION</span>
            <h2>Key Advantages Over Traditional Scaffolding Access</h2>
            <p>Safety, speed, cost-efficiency and minimal operational disruption for critical infrastructure</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-dollar-sign"></i></div>
                <h3>Massive Cost Savings (60-75%)</h3>
                <p>Traditional 120m flare stack scaffolding: $1.2-2.0M cost, 10-14 week duration. Rope access equivalent: $250-400K cost, 3-7 days execution. Savings increase with height—150m+ stacks deliver 75-80% cost reduction. Offshore marine scaffolding savings even more dramatic (80-85%).</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Eliminate Critical Path Impact</h3>
                <p>Scaffold erection/dismantling adds 8-16 weeks to turnaround critical path. Rope access mobilizes in 48-72 hours, completes inspection in 3-7 days, demobilizes same day—removing 10-15 weeks from shutdown schedule. Production restart acceleration worth $2-10M for refineries and chemical plants.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-shield-alt"></i></div>
                <h3>Superior Safety Performance</h3>
                <p>IRATA global accident rate: 0.00 per 100,000 hours. Scaffolding industry average: 6-8 incidents per 100,000 hours. Dual-redundant rope systems, continuous harness attachment, rescue-ready Level 3 supervision, and zero dropped object risk (tool tethering mandatory)—safer for personnel and plant equipment below.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-industry"></i></div>
                <h3>Inspect Operating Stacks (Live Plant)</h3>
                <p>Many rope access stack inspections executed without flare/chimney shutdown—external shell inspection, guy wire assessment, and external weld testing performed on operating units (temperature permitting). Internal inspection requires outage but external work continues during operations—reducing production deferment by 50-70%.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>Access Impossible Locations</h3>
                <p>Offshore flare booms, guyed stacks with complex geometry, stacks with active process equipment nearby, and sites with ground space constraints—all accessible via rope systems where scaffolding is impossible or prohibitively expensive. Enables inspection of assets previously considered "uninspectable."</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-leaf"></i></div>
                <h3>Minimal Environmental Impact</h3>
                <p>No heavy equipment, reduced site footprint (rope access van + small equipment cache), minimal noise/vibration, zero ground disturbance, and no scaffold material transport (200-500 truckloads eliminated for large stacks). Ideal for urban plants, environmentally sensitive sites and facilities with public/neighbor proximity constraints.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== INSPECTION TECHNIQUE COMPARISON ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">NDT TECHNIQUE INTEGRATION</span>
            <h2>Multi-Discipline Inspection Methods for Stacks & Chimneys</h2>
            <p>Select and combine techniques based on asset type, degradation mechanisms and inspection objectives</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>NDT Method</th>
                        <th><i class="fas fa-eye"></i> Visual Inspection (VT)</th>
                        <th><i class="fas fa-ruler-combined"></i> UT Thickness Mapping</th>
                        <th><i class="fas fa-tint"></i> PT/MT Weld Testing</th>
                        <th><i class="fas fa-video"></i> Internal RVI</th>
                        <th><i class="fas fa-thermometer-half"></i> Thermal Imaging</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Primary Purpose</strong></td>
                        <td>Overall condition assessment, defect screening</td>
                        <td>Corrosion quantification, remaining life</td>
                        <td>Weld crack detection, HAZ assessment</td>
                        <td>Internal refractory/corrosion survey</td>
                        <td>Hot spots, thermal damage, insulation voids</td>
                    </tr>
                    <tr>
                        <td><strong>Data Output</strong></td>
                        <td>HD photos, defect location map, condition rating</td>
                        <td>Thickness grid (mm), corrosion rate, RLA</td>
                        <td>Crack indications, accept/reject per code</td>
                        <td>Video footage, still images, defect register</td>
                        <td>Temperature map, thermal anomaly locations</td>
                    </tr>
                    <tr>
                        <td><strong>Inspection Speed (Rope Access)</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Fast (50-100m/day per technician)</td>
                        <td class="good">Moderate (300-500 points/day)</td>
                        <td class="average">Slower (30-60 welds/day)</td>
                        <td class="good">Moderate (internal descent rate)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Fast (remote scanning capable)</td>
                    </tr>
                    <tr>
                        <td><strong>Surface Preparation</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> None (as-found condition)</td>
                        <td class="good">Light (paint removal at test points)</td>
                        <td class="poor">High (bare metal required for PT/MT)</td>
                        <td class="excellent"><i class="fas fa-star"></i> None (internal surfaces)</td>
                        <td class="excellent"><i class="fas fa-star"></i> None (non-contact method)</td>
                    </tr>
                    <tr>
                        <td><strong>API 579 / FFS Support</strong></td>
                        <td class="average">Qualitative (screening only)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Quantitative (RLA calculations)</td>
                        <td class="good">Defect detection for assessment</td>
                        <td class="average">Qualitative (condition grading)</td>
                        <td class="average">Supplemental data (damage zones)</td>
                    </tr>
                    <tr>
                        <td><strong>Typical Stack Application</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> All stacks (mandatory baseline)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Corrosion-prone zones, shell assessment</td>
                        <td>Circumferential/longitudinal weld seams</td>
                        <td>Refractory-lined stacks, internal corrosion</td>
                        <td>Post-fire damage, insulation integrity</td>
                    </tr>
                    <tr>
                        <td><strong>Cost per Linear Meter (Rope Access)</strong></td>
                        <td>$$ (Lowest)</td>
                        <td>$$$ (Moderate)</td>
                        <td>$$$$ (Higher—prep time intensive)</td>
                        <td>$$$ (Moderate—equipment intensive)</td>
                        <td>$$ (Low—rapid coverage)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Best Practice Multi-Discipline Approach:</strong> Execute general visual examination (GVE) 100% of external shell using rope access teams with HD photography and defect mapping. Deploy UT thickness grid at high-risk corrosion zones (typically 20-40% of shell area based on RBI targeting). Apply PT/MT to critical weld seams (circumferential welds, nozzle attachments, guy wire lugs). Internal RVI for refractory-lined stacks or where internal corrosion suspected. Thermal imaging where fire damage or insulation degradation is concern. This integrated approach optimizes cost/benefit—comprehensive coverage where risk is highest, screening methods elsewhere.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">STACK & CHIMNEY INSPECTION APPLICATIONS</span>
            <h2>Industries & Asset Types We Serve</h2>
            <p>From offshore oil & gas to power generation and industrial manufacturing</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="oil-gas-flare">Oil & Gas Flare Stacks</button>
                <button class="tab-btn" data-tab="power-chimney">Power Plant Chimneys</button>
                <button class="tab-btn" data-tab="refinery-process">Refinery Process Stacks</button>
                <button class="tab-btn" data-tab="industrial">Industrial & Waste Incineration</button>
            </div>

            <div class="tabs-content">
                <!-- Oil & Gas Flare Stacks Tab -->
                <div class="tab-panel active" id="oil-gas-flare">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/offshore-flare-inspection.jpg" alt="Rope access inspection of offshore platform elevated flare stack">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore & Onshore Oil & Gas Flare Stack Inspection</h3>
                            <p>Flare stacks are critical safety systems for hydrocarbon disposal during upsets, startups and emergencies. Failure causes immediate shutdown, environmental violations ($1-10M+ fines), and catastrophic fire/explosion risk. Rope access enables comprehensive integrity assessment without marine scaffolding costs or extended platform occupation.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Elevated Flare Stacks (40-150m):</strong> External shell UT thickness mapping (API 579 grid), circumferential/longitudinal weld PT/MT, corrosion mapping, coating condition, structural steel connections, platform attachment integrity</li>
                                <li><i class="fas fa-check"></i> <strong>Flare Tip Assemblies:</strong> Dimensional inspection (tip diameter, pilot burner positioning), thermal damage assessment (IR imaging + VT), igniter electrode condition, windshield integrity, flow distribution verification, mechanical attachment security</li>
                                <li><i class="fas fa-check"></i> <strong>Pilot Burner Systems:</strong> Nozzle condition (erosion, coking), gas line integrity, igniter function verification, flame retention assessment, purge gas system inspection (where accessible)</li>
                                <li><i class="fas fa-check"></i> <strong>Guy Wire & Support Systems:</strong> Guy wire tension measurement, turnbuckle/clevis inspection, anchor bolt PT/UT testing, corrosion at terminations, vibration dampener condition, guy wire-to-stack lug weld integrity</li>
                                <li><i class="fas fa-check"></i> <strong>Internal Flare Stack Inspection:</strong> Internal rope access descent (shutdowns only), refractory condition survey (brick/castable), internal corrosion mapping, expansion joint integrity, internal bracing/stiffeners, hot spot identification (post-shutdown IR)</li>
                                <li><i class="fas fa-check"></i> <strong>Knockout Drums & Liquid Seals:</strong> Knockout drum shell thickness (UT), internal coating condition (RVI), liquid seal level indicators, drain system integrity, structural supports</li>
                                <li><i class="fas fa-check"></i> <strong>Molecular Seals & Purge Systems:</strong> Seal integrity verification, purge gas distribution, pressure instrumentation, seal-to-stack connections (flanges, welds)</li>
                                <li><i class="fas fa-check"></i> <strong>Environmental Compliance Documentation:</strong> Emissions compliance verification (structural integrity for EPA/state air quality permits), inspection records for regulatory audits, insurance certification support</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-oil-can"></i> Case Study: Offshore Platform 145m Elevated Flare Stack</h4>
                                <p><strong>Asset:</strong> North Sea production platform with 145m self-supported flare stack (12mm CS shell, 900mm diameter, 18 guy wires). Asset age: 28 years. Last inspection: 12 years prior (limited visual only due to scaffold cost).</p>
                                <p><strong>Challenge:</strong> Platform operator required comprehensive integrity assessment for insurance renewal and regulatory compliance. Traditional marine scaffolding quote: $2.4M cost, 14-week duration (8-week erection, 4-week inspection, 2-week dismantle), production deferment cost $180K/day during scaffold work.</p>
                                <p><strong>Rope Access Solution:</strong> 4-person IRATA Level 3 team deployed with multi-discipline NDT capability (VT Level II, UT Level II, PT Level II, RVI). Inspection scope: 100% external GVE with HD photography, 800-point UT thickness grid, PT testing of 24 circumferential welds and 36 guy wire attachments, flare tip dimensional survey, internal RVI descent (120m), thermal imaging post-operation.</p>
                                <p><strong>Execution:</strong> Mobilization: 3 days (personnel + equipment). Inspection: 6 days (2 teams working simultaneously—external shell + internal descent). Demobilization: 1 day. Total duration: 10 days. Total cost: $385K.</p>
                                <p><strong>Results:</strong> Cost saving: $2.015M (84%). Schedule saving: 13 weeks removed from critical path. Production deferment avoided: $18.9M (105 days × $180K/day). Technical findings: UT mapping identified critical wall thinning zone (4.2mm remaining vs 6.0mm minimum required) at elevation 85m—repair performed same campaign via rope access grinding + weld buildup. Guy wire PT detected 3 crack indications at turnbuckle welds—replaced during shutdown. Internal RVI identified refractory spalling (40% of circumference, elevation 60-80m)—repair scheduled for next major turnaround. Client now mandates rope access for all offshore stack inspections—5-year interval established based on corrosion rate data.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 537 (Flare Stacks)</span>
                                <span class="standard-tag">API 579 (FFS Assessment)</span>
                                <span class="standard-tag">ASME B31.3</span>
                                <span class="standard-tag">ISO 23251 (Petroleum Sites)</span>
                                <span class="standard-tag">NFPA 30 (Flammable Liquids)</span>
                                <span class="standard-tag">EPA 40 CFR 60 (NSPS)</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Power Plant Chimneys Tab -->
                <div class="tab-panel" id="power-chimney">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/power-plant-chimney.jpg" alt="Rope access inspection of coal-fired power plant chimney steel liner">
                        </div>
                        <div class="tab-text">
                            <h3>Coal, Gas & Biomass Power Plant Chimney Inspection</h3>
                            <p>Power plant chimneys (50-200m height) experience severe corrosion from acid gases (SOx, NOx), thermal cycling, and mechanical stress. Rope access enables comprehensive internal and external inspection without extended outage duration or massive scaffold investment—critical for meeting NERC reliability standards and environmental compliance.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Steel Liner Integrity:</strong> Internal UT thickness grid mapping (typical 500-2000 points depending on height/diameter), corrosion rate calculations, remaining life assessment (RLA), acid dew point corrosion zones, high-velocity erosion areas</li>
                                <li><i class="fas fa-check"></i> <strong>Refractory Systems:</strong> Refractory brick/castable condition assessment (delamination, spalling, cracking), anchor integrity, expansion joint condition, hot face erosion, cold face condensation damage, thermal imaging correlation</li>
                                <li><i class="fas fa-check"></i> <strong>Structural Steel Framework:</strong> External lattice/self-support structure inspection, weld integrity (PT/MT at critical connections), corrosion assessment, lightning protection system verification, aircraft warning light mounting integrity</li>
                                <li><i class="fas fa-check"></i> <strong>Internal Platforms & Access:</strong> Internal platform structural condition, ladder integrity, safety cage condition, fall protection anchor points, lighting system supports</li>
                                <li><i class="fas fa-check"></i> <strong>Insulation Systems:</strong> External insulation condition (mineral wool, calcium silicate), weather jacketing integrity, moisture ingress assessment, thermal imaging to identify missing/damaged insulation zones</li>
                                <li><i class="fas fa-check"></i> <strong>Expansion Joints:</strong> Multi-layer expansion joint bellows condition, tie rods/restraints, insulation fill material, seal plates, corrosion at joint interfaces</li>
                                <li><i class="fas fa-check"></i> <strong>Damper Systems:</strong> Damper blade condition (where installed), actuator mounting integrity, sealing surfaces, linkage corrosion/wear</li>
                                <li><i class="fas fa-check"></i> <strong>CEMS & Instrumentation:</strong> Continuous emissions monitoring system (CEMS) probe access ports, sample line supports, platform attachments, instrumentation conduit integrity</li>
                                <li><i class="fas fa-check"></i> <strong>Environmental Compliance:</strong> Structural integrity verification for air quality permits, opacity monitoring system support structures, stack testing port accessibility, emissions compliance documentation</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-bolt"></i>
                                <div>
                                    <strong>Power Generation Reliability Impact:</strong>
                                    <p>Unplanned chimney/stack outage forces immediate unit shutdown—typical 500-800MW coal plant generates $400-800K revenue per day. Extended outage (6-12 weeks) for emergency chimney repair costs $17-67M in lost generation plus $5-15M repair costs. Proactive rope access inspection ($150-350K per campaign, 3-5 year intervals) detects critical corrosion BEFORE failure—enabling planned repairs during scheduled outages when replacement power is contracted and repair resources pre-positioned. ROI typically 20:1 through reliability protection alone.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">ASME STS-1 (Steel Stacks)</span>
                                <span class="standard-tag">CICIND (Chimney Standard)</span>
                                <span class="standard-tag">NFPA 211 (Chimneys)</span>
                                <span class="standard-tag">EPA 40 CFR 60/75 (CEMS)</span>
                                <span class="standard-tag">ASTM E1469 (VT)</span>
                                <span class="standard-tag">ASME Sec V (NDT)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Refinery Process Stacks Tab -->
                <div class="tab-panel" id="refinery-process">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/refinery-process-stack.jpg" alt="Rope access UT thickness testing on refinery FCC unit regenerator stack">
                        </div>
                        <div class="tab-text">
                            <h3>Refinery & Petrochemical Process Stack Inspection</h3>
                            <p>Refineries and chemical plants operate dozens of elevated process stacks: FCC regenerator stacks, SRU tail gas stacks, sulfuric acid plant stacks, thermal oxidizer stacks, vent stacks—each with unique corrosive environments and integrity challenges. Rope access enables targeted inspection programs without disrupting adjacent process units or incurring scaffold costs that exceed stack replacement value.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>FCC Regenerator Stacks:</strong> High-temperature carbon steel/refractory-lined stacks (200-450°C operating temperature). Inspection: refractory anchor integrity, shell thickness at refractory transition zones, expansion joint bellows, cyclone outlet duct connections, external insulation/lagging, thermal damage zones (IR imaging)</li>
                                <li><i class="fas fa-check"></i> <strong>Sulfur Recovery Unit (SRU) Stacks:</strong> Acid gas corrosion (H2S, SO2, H2SO4 condensation). Inspection: UT thickness mapping (focus on acid dew point zones), weld integrity (PT/MT), internal liner condition (RVI where dual-wall construction), drain systems, expansion joints, guy wire corrosion</li>
                                <li><i class="fas fa-check"></i> <strong>Sulfuric Acid Plant Stacks:</strong> Severe acid corrosion environment. Inspection: acid-resistant liner integrity (brick/tile/alloy), shell thickness behind liner, anchor corrosion, expansion joint bellows (alloy construction), internal platforms/ladders, drainage systems</li>
                                <li><i class="fas fa-check"></i> <strong>Thermal Oxidizer / Incinerator Stacks:</strong> High-temperature operation with chloride/sulfur compounds. Inspection: refractory condition (castable/brick), shell thickness at hot zones, internal corrosion mapping (RVI), burner region integrity, stack damper condition (where installed)</li>
                                <li><i class="fas fa-check"></i> <strong>Relief / Vent Stacks:</strong> Intermittent high-velocity discharge causing erosion. Inspection: shell thickness at nozzle entry zones, weld integrity (high-stress connections), internal baffles/distributors (where installed), tail pipe/discharge nozzle condition, guy wire systems</li>
                                <li><i class="fas fa-check"></i> <strong>Hydrogen Plant Reformer Stacks:</strong> High-temperature flue gas with NOx corrosion. Inspection: refractory/insulation integrity, shell thickness mapping, expansion joint condition, structural supports, breeching connections</li>
                                <li><i class="fas fa-check"></i> <strong>Multi-Unit Common Stacks:</strong> Large diameter stacks serving multiple process units. Inspection: internal baffles/separators, multiple inlet duct connections, complex expansion joint systems, large-diameter shell thickness surveys (1000+ UT points typical)</li>
                                <li><i class="fas fa-check"></i> <strong>Emergency Vent Systems:</strong> Pressure relief stacks for runaway reaction scenarios. Inspection: full-bore integrity verification, no restrictions/blockages (critical for relief capacity), structural mounting adequacy for reaction forces</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-industry"></i> Case Study: Refinery FCC Regenerator Stack Turnaround Inspection</h4>
                                <p><strong>Asset:</strong> 85m FCC regenerator stack (1200mm diameter, refractory-lined carbon steel, 12mm nominal shell thickness, operating temperature 380°C). Asset age: 19 years. Turnaround interval: 4 years.</p>
                                <p><strong>Challenge:</strong> Previous turnaround (4 years prior) scaffolding cost $680K, required 5-week erection + 3-week dismantling (8 weeks total on critical path). Client wanted inspection completed within 10-day turnaround window without scaffold investment.</p>
                                <p><strong>Rope Access Execution:</strong> Pre-turnaround planning (rope anchor design, rescue plan, hot work permits, NDT procedures). Day 1-2: Stack cooldown monitoring, rope installation, calibration. Day 3-7: External shell UT grid (650 points), circumferential weld PT (8 welds), guy wire inspection (6 anchors), external VT + HD photography. Day 8-9: Internal rope descent, refractory condition survey (RVI + VT), anchor bolt inspection, internal corrosion mapping. Day 10: Final reporting, demobilization.</p>
                                <p><strong>Results:</strong> Total cost: $195K (71% savings vs scaffold). Duration: 10 days (within turnaround window). Technical findings: UT identified critical thinning zone (5.8mm vs 7.0mm minimum) at elevation 45m (transition from refractory to insulated section)—corrosion rate 0.15mm/year established for future planning. Internal RVI detected anchor bolt corrosion (15% of anchors) and refractory spalling (localized, 3 zones totaling 8m² area)—repairs completed during same turnaround. Client avoided 8-week critical path extension worth $9.6M in delayed restart revenue. Stack now on 4-year rope access inspection cycle with focused UT trending at identified corrosion zones.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 579 (FFS)</span>
                                <span class="standard-tag">API 571 (Damage Mechanisms)</span>
                                <span class="standard-tag">ASME B31.3</span>
                                <span class="standard-tag">NACE SP0169 (Corrosion Control)</span>
                                <span class="standard-tag">OSHA 1910.119 (PSM)</span>
                                <span class="standard-tag">EPA NSPS/NESHAP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industrial & Waste Incineration Tab -->
                <div class="tab-panel" id="industrial">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/waste-incineration-stack.jpg" alt="Rope access inspection of municipal waste incineration facility stack">
                        </div>
                        <div class="tab-text">
                            <h3>Industrial Manufacturing & Waste Incineration Stack Inspection</h3>
                            <p>Cement kilns, steel mill furnaces, glass melting furnaces, pulp & paper recovery boilers, municipal waste incinerators and hazardous waste treatment facilities operate tall exhaust stacks in aggressive environments. Rope access delivers cost-effective inspection for these diverse industrial applications where traditional access methods are economically prohibitive.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Cement Kiln Stacks:</strong> Extreme temperature/particulate environment. Inspection: refractory erosion mapping, shell thickness (UT) at transition zones, expansion joint integrity, dust buildup assessment (hot gas path), structural supports, emissions monitoring equipment supports</li>
                                <li><i class="fas fa-check"></i> <strong>Steel Mill / EAF Stacks:</strong> High-temperature, particulate-laden exhaust. Inspection: refractory condition (graphite/alumina brick), water-cooled panel integrity (where installed), shell thickness behind refractory, ductwork connections, baghouse/ESP tie-ins</li>
                                <li><i class="fas fa-check"></i> <strong>Glass Furnace Stacks:</strong> Sodium sulfate corrosion, high-temperature operation. Inspection: refractory brick condition (crown, sidewalls), anchor integrity, shell thickness mapping, expansion joint systems, regenerator connections (where applicable)</li>
                                <li><i class="fas fa-check"></i> <strong>Pulp & Paper Recovery Boilers:</strong> Black liquor combustion environment (sodium, sulfur compounds). Inspection: carbon steel shell corrosion (UT mapping), smelt spout area integrity, boiler-to-stack transition ductwork, expansion joints, precipitator tie-ins</li>
                                <li><i class="fas fa-check"></i> <strong>Municipal Waste Incinerators:</strong> Chloride corrosion, variable fuel quality. Inspection: internal liner condition (acid-resistant brick/castable), shell thickness behind liner, heat recovery steam generator (HRSG) connections, scrubber/baghouse ductwork, continuous emissions monitoring (CEMS) ports</li>
                                <li><i class="fas fa-check"></i> <strong>Hazardous Waste Incinerators:</strong> Extreme corrosion environment, regulatory oversight. Inspection: multi-layer liner systems (refractory + alloy + insulation), trial burn port accessibility, RCRA compliance verification, emergency shutdown system integrity</li>
                                <li><i class="fas fa-check"></i> <strong>Biomass / Waste-to-Energy:</strong> Wood waste, agricultural residue, MSW combustion. Inspection: corrosion from chlorides/alkalis, particulate erosion zones, boiler tube bank transitions, economizer outlet ducts, fly ash buildup assessment</li>
                                <li><i class="fas fa-check"></i> <strong>Chemical Process Furnaces:</strong> Ethylene crackers, ammonia reformers, process heaters. Inspection: radiant section outlet ducts, convection section connections, transition zones (high thermal stress), refractory/insulation systems</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-recycle"></i>
                                <div>
                                    <strong>Environmental Permit Compliance:</strong>
                                    <p>EPA Title V operating permits, state air quality permits, and EU Industrial Emissions Directive (IED) require documented structural integrity verification for emission stacks. Rope access inspection provides: (1) Structural adequacy certification for permit renewal, (2) CEMS accessibility verification (40 CFR Part 75), (3) Stack testing port condition assessment, (4) Emissions opacity monitoring system support integrity, (5) Documentation for regulatory audits—all at 60-75% lower cost than scaffolding-based inspection, enabling more frequent inspection cycles and better environmental compliance confidence.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">EPA 40 CFR 60 (NSPS)</span>
                                <span class="standard-tag">EPA 40 CFR 63 (NESHAP)</span>
                                <span class="standard-tag">RCRA (Hazardous Waste)</span>
                                <span class="standard-tag">ASME STS-1</span>
                                <span class="standard-tag">NFPA 82 (Incinerators)</span>
                                <span class="standard-tag">EU IED 2010/75/EU</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ===================== TECHNICAL CAPABILITIES ===================== -->
<section class="capabilities-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">TECHNICAL SPECIFICATIONS</span>
            <h2>Our Rope Access Stack & Chimney Inspection Capabilities</h2>
            <p>Multi-discipline NDT integration, dual-certified personnel and proven high-altitude execution</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-shield"></i>
                    <h3>Personnel Certifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Access:</span> IRATA Level 3 supervisors, Level 2/1 technicians (current medical fitness, 3-year recert)</li>
                    <li><span class="cap-label">NDT Multi-Discipline:</span> ASNT Level II VT, UT, PT, MT (SNT-TC-1A, CP-189, ISO 9712)</li>
                    <li><span class="cap-label">API 510/570/653:</span> Pressure vessel, piping, tank inspectors (API authorized where applicable)</li>
                    <li><span class="cap-label">RVI/Video Inspection:</span> Internal videoscope operation, defect interpretation training</li>
                    <li><span class="cap-label">Thermography:</span> Level I/II infrared thermographers (ASNT, ITC certified)</li>
                    <li><span class="cap-label">Safety Training:</span> Confined space, LOTO, hot work, H2S, BOSIET (offshore), rescue competence</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-ruler-vertical"></i>
                    <h3>Height & Structure Range</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Height Capability:</span> 10m to 200m+ (tallest executed: 185m power plant chimney)</li>
                    <li><span class="cap-label">Diameter Range:</span> 300mm to 8000mm (small vent stacks to large multi-flue chimneys)</li>
                    <li><span class="cap-label">Structure Types:</span> Self-supported, guy-wire supported, lattice framework, multi-flue</li>
                    <li><span class="cap-label">Construction:</span> Carbon steel, stainless steel, refractory-lined, insulated, multi-wall</li>
                    <li><span class="cap-label">Access Modes:</span> External rope descent, internal rope descent, combination external/internal</li>
                    <li><span class="cap-label">Environment:</span> Onshore, offshore platform, marine (coastal), urban high-rise</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-toolbox"></i>
                    <h3>Inspection Equipment</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">UT Thickness:</span> Olympus 38DL Plus, GE DM5E (pulse-echo, single/dual element, data logging)</li>
                    <li><span class="cap-label">PT/MT Materials:</span> Magnaflux visible dye & fluorescent systems, yoke magnetization</li>
                    <li><span class="cap-label">RVI Systems:</span> Olympus IPLEX videoscopes (6mm-8mm diameter, 3-10m length, articulation)</li>
                    <li><span class="cap-label">Thermal Imaging:</span> FLIR E95/T540 (464×348 resolution, -20°C to +1500°C range)</li>
                    <li><span class="cap-label">Photography:</span> HD cameras (24MP+), macro lenses, calibrated scale references, GPS tagging</li>
                    <li><span class="cap-label">Measurement Tools:</span> Laser distance meters, ultrasonic thickness gauges, pit depth gauges</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-hard-hat"></i>
                    <h3>Rope Access Safety Equipment</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Systems:</span> 11mm static kernmantle (EN 1891), dual-rope redundancy, 23kN MBS minimum</li>
                    <li><span class="cap-label">Descent Devices:</span> Petzl I'D, RIG, ASAP fall arrest (work positioning + backup systems)</li>
                    <li><span class="cap-label">Anchors:</span> Engineered anchor points, load-tested beam clamps, tripods (15kN minimum, 2.5:1 safety factor)</li>
                    <li><span class="cap-label">Harnesses:</span> Full-body EN 361/358 (work positioning + fall arrest), tool carrying capability</li>
                    <li><span class="cap-label">Rescue Equipment:</span> Rope rescue kits, stretcher systems, hauling systems, communication (2-way radio)</li>
                    <li><span class="cap-label">PPE:</span> Hard hats, safety glasses, FR coveralls (hot work), respirators (confined space)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-clipboard-check"></i>
                    <h3>Inspection Deliverables</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Visual Inspection:</span> HD photo documentation, defect location map, condition rating (Good/Fair/Poor/Critical)</li>
                    <li><span class="cap-label">UT Thickness:</span> Thickness grid data (Excel/CSV), color-coded thickness maps, corrosion rate calculations, RLA</li>
                    <li><span class="cap-label">PT/MT Weld Testing:</span> Weld-by-weld results, defect photos with scale, accept/reject per code</li>
                    <li><span class="cap-label">RVI:</span> Full video footage, annotated still images, defect register, internal condition report</li>
                    <li><span class="cap-label">Thermal Imaging:</span> IR images with temperature scales, hot spot locations, thermal anomaly analysis</li>
                    <li><span class="cap-label">Final Report:</span> Executive summary, findings, recommendations, trending (vs previous), action items</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-project-diagram"></i>
                    <h3>Project Execution</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Mobilization:</span> 48-72 hours (metro areas), 5-7 days (remote/offshore with equipment transport)</li>
                    <li><span class="cap-label">Team Size:</span> 2-8 personnel (scaled to stack height, diameter, inspection scope complexity)</li>
                    <li><span class="cap-label">Work Schedule:</span> Day shift, night shift, 24-hour rotation (turnaround/outage support)</li>
                    <li><span class="cap-label">Weather Limits:</span> Wind <10 m/s (offshore) / <12 m/s (onshore), no active precipitation, no lightning</li>
                    <li><span class="cap-label">Reporting:</span> Daily progress updates, preliminary findings (same-day critical items), final report 5-7 days</li>
                    <li><span class="cap-label">Emergency Response:</span> 12-24 hour callout for stack failure investigation / urgent integrity assessment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== PROCEDURE WORKFLOW ===================== -->
<section class="procedure-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">INSPECTION WORKFLOW</span>
            <h2>Rope Access Stack Inspection Procedure</h2>
            <p>Integrated planning, safety, access and multi-discipline NDT execution from mobilization through final reporting</p>
        </div>

        <div class="procedure-timeline">
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <h3>Pre-Mobilization Engineering & Risk Assessment</h3>
                    <p>Review stack drawings (P&ID, structural, refractory), operating history, previous inspection reports and failure modes. Develop inspection plan targeting high-risk zones (RBI approach). Design anchor points and rope access strategy. Prepare Method Statement, Risk Assessment (RAMS), Rescue Plan, NDT procedures (VT/UT/PT/RVI per ASME/API standards), and hot work/confined space procedures. Coordinate permits, isolations and shutdown logistics with client.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Inspection Plan, RAMS, Rope Access Method Statement, NDT Procedures, Rescue Plan, Permit Requirements List
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <h3>Mobilization & Site Safety Induction</h3>
                    <p>Deploy personnel, rope access equipment, NDT instruments and safety systems. Complete site-specific safety induction, medical surveillance, permit-to-work acquisition (hot work, confined space, WAH, LOTO). Install anchor points with load testing and third-party verification (where required). Stage rescue equipment, establish exclusion zones, confirm communication protocols and emergency procedures with site HSE and operations teams.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Equipment Inventory, Anchor Load Test Records, Permit Package, Toolbox Talk Sign-In, Emergency Contact List
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <h3>NDT Equipment Calibration & Verification</h3>
                    <p>Calibrate all NDT instruments using traceable reference standards: UT gauges (step wedges representing stack material/thickness), PT/MT materials (batch testing per ASTM E1417/E1444), RVI focus/resolution verification, thermal camera emissivity settings. Document all calibration data, instrument serial numbers and technician certifications for quality assurance and client audits.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Calibration Records, Reference Standard Verification, Instrument Setup Sheets, Technician Cert Pack
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <h3>External Stack Inspection (VT + UT + PT/MT)</h3>
                    <p>IRATA Level 3 supervisor establishes work zone with fall hazard barriers and drop-zone controls. Technicians descend external stack surface using dual-rope systems. Execute: (1) General Visual Examination (GVE)—100% external surface with HD photography, defect mapping, coating condition assessment; (2) UT Thickness Grid—systematic thickness measurements at pre-defined elevations and quadrants (typical 300-1000 points depending on stack size), data logging with GPS coordinates; (3) Weld PT/MT—surface preparation (grinding/wire brush), penetrant application or magnetic particle testing of circumferential/longitudinal welds, guy wire attachments, nozzle connections per ASME Sec V Article 6/7.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> VT Photo Archive, UT Thickness Grid (Excel/CSV), PT/MT Weld Reports, Defect Location Map (GPS-tagged)
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">5</div>
                <div class="timeline-content">
                    <h3>Internal Stack Inspection (RVI + VT + UT)</h3>
                    <p>For stacks requiring internal inspection (refractory-lined, internal corrosion suspected): Technicians perform internal rope descent from top of stack using specialized confined space entry procedures, continuous atmospheric monitoring (LEL, O2, H2S, CO), forced ventilation (where required), and rescue standby. Execute: (1) Internal Visual Inspection—refractory condition (spalling, cracking, erosion), anchor bolt integrity, expansion joints, internal platforms/ladders; (2) Internal RVI—videoscope inspection of inaccessible zones, narrow annular spaces, internal corrosion mapping; (3) Internal UT—thickness measurements behind refractory at access ports/damaged zones.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Internal Inspection Video (annotated), Refractory Condition Report, Internal VT Photos, Atmospheric Monitoring Logs
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">6</div>
                <div class="timeline-content">
                    <h3>Guy Wire, Support & Auxiliary Systems Inspection</h3>
                    <p>Inspect guy wire systems (where installed): tension measurement using load cells or frequency analysis, turnbuckle/clevis condition, anchor bolt PT/UT testing, guy wire-to-stack lug weld integrity (PT/MT), corrosion assessment at terminations, vibration dampener condition. Inspect auxiliary systems: lightning protection (down-conductor continuity, air terminal condition, ground connection), aircraft warning lights (mounting integrity, obstruction-free operation), platforms/ladders (structural adequacy, fall protection anchor points), CEMS/instrumentation (sample probe ports, mounting integrity).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Guy Wire Tension Data, Anchor PT/UT Reports, Lightning Protection Verification, Auxiliary System Photos
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">7</div>
                <div class="timeline-content">
                    <h3>Thermal Imaging & Drone Correlation (Optional)</h3>
                    <p>Execute thermal imaging survey (post-operation while stack still warm or during startup): identify hot spots (refractory damage, insulation voids), thermal gradients (expansion joint leakage), and anomalous heat patterns. Deploy drone for overall structural survey and correlation with rope access findings—drone provides rapid coverage for preliminary assessment, rope access provides close-proximity detailed inspection and NDT testing where drone identifies suspect areas. Integrate datasets for comprehensive 3D condition model.</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Thermal Image Report with Analysis, Drone Survey Video/Photos, Integrated Defect Map (Rope + Drone correlation)
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-number">8</div>
                <div class="timeline-content">
                    <h3>Data Analysis, FFS Assessment & Final Reporting</h3>
                    <p>Consolidate all inspection data (VT photos, UT thickness grids, PT/MT results, RVI footage, thermal images) into integrated database. Perform engineering analysis: corrosion rate calculations, remaining life assessment (RLA) per API 579, structural integrity evaluation, FFS (Fitness-for-Service) recommendations. Generate comprehensive final report: executive summary, scope/procedure references, personnel certifications, inspection findings by zone/elevation, defect register with severity ranking, trending analysis vs previous inspections (if available), repair/mitigation recommendations, next inspection interval recommendations. Deliver digital data package (raw data files, calibration records, photos/videos, reports in PDF + editable formats).</p>
                    <div class="timeline-deliverable">
                        <strong>Deliverables:</strong> Final Inspection Report (100-300 pages typical), Executive Summary (5-10 pages), Digital Data Archive (USB/cloud), Presentation (PowerPoint for management review)
                    </div>
                </div>
            </div>
        </div>

        <div class="certification-showcase">
            <h3>Our Certifications & Accreditations</h3>
            <div class="cert-grid">
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/irata.png" alt="IRATA">
                    <span>IRATA Member Company</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/sprat.png" alt="SPRAT">
                    <span>SPRAT Member (North America)</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/asnt.png" alt="ASNT">
                    <span>ASNT Level II/III Multi-Discipline</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/api.png" alt="API">
                    <span>API 510/570 Inspectors</span>
                </div>
                <div class="cert-item">
                    <img src="/www/assets/images/certifications/iso-9001.png" alt="ISO 9001">
                    <span>ISO 9001:2015 Quality</span>
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
            <h2>Your Rope Access Stack & Chimney Inspection Specialists</h2>
            <p>Multi-discipline NDT expertise, proven high-altitude execution and unmatched cost-effectiveness</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-user-graduate"></i></div>
                <h3>Multi-Discipline NDT + Rope Access Expertise</h3>
                <p>Our stack inspection teams hold dual certifications: IRATA Level 3 rope access + ASNT Level II in multiple NDT methods (VT, UT, PT, MT, RVI). This integrated capability eliminates coordination delays and subcontractor markups—single team delivers comprehensive inspection with consistent quality and accountability.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-mountain"></i></div>
                <h3>Proven High-Altitude Track Record</h3>
                <p>Completed 200+ stack/chimney inspections (2018-2024) ranging from 35m to 185m height. Offshore platforms, refineries, power plants, chemical plants across India, Middle East and SE Asia. Zero lost-time incidents across 85,000+ rope access hours. Experience with self-supported, guy-wire supported, and lattice-framework stacks in all construction types.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-file-contract"></i></div>
                <h3>API 579 / FFS Engineering Support</h3>
                <p>In-house mechanical engineers provide API 579 Fitness-for-Service assessments, remaining life calculations, corrosion rate trending, and repair/mitigation engineering—not just data collection. Support your RBI program with actionable recommendations and next-inspection interval optimization based on actual degradation rates.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-hard-hat"></i></div>
                <h3>Offshore & Hazardous Area Qualified</h3>
                <p>BOSIET, HUET, H2S, confined space, hot work certifications. Experience with SIMOPS, offshore permit-to-work systems, hydrocarbon area classifications (Zone 1/2), and simultaneous operations protocols. Understand refinery/chemical plant safety culture—seamlessly integrate with client HSE management systems.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-stopwatch"></i></div>
                <h3>Rapid Emergency Response</h3>
                <p>12-24 hour mobilization for stack failure investigations and urgent integrity assessments. Pre-positioned equipment in Mumbai, Chennai, Visakhapatnam, Hazira and Jamnagar—enable same-day deployment for critical assets within 500km radius. Dedicated emergency response team with 24/7 availability.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Digital Trending & Predictive Analytics</h3>
                <p>Proprietary stack inspection database enables trending analysis across inspection intervals—corrosion rate modeling, remaining life projections, and optimized inspection frequency recommendations. GPS-tagged defect locations enable precise re-measurement at same coordinates during subsequent inspections—improving corrosion rate accuracy by 40-60% vs manual location referencing.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== FAQ SECTION ===================== -->
<section class="faq-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
            <h2>Rope Access Stack & Chimney Inspection Questions Answered</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How much does rope access stack inspection cost compared to scaffolding?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Typical savings: 60-75% for stacks 60-150m height. Example: 120m refinery flare stack—traditional scaffolding quote $1.6M (erection + inspection + dismantle) completed via rope access for $325K (80% savings). Offshore platforms: 75-85% savings due to marine scaffolding premium costs. Savings increase with height (taller stacks have exponentially higher scaffold costs), structural complexity (guy wires, complex geometry) and site constraints (limited ground space, simultaneous operations). Contact us with stack height/diameter for detailed cost comparison—most clients achieve full payback within first inspection campaign.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you inspect operating stacks without shutdown?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—with limitations. External inspection (visual, UT thickness, external weld PT/MT) can be performed on many operating stacks if: (1) External surface temperature <60°C (safety limit for rope contact; higher temps require insulated rope protectors or standoff techniques), (2) No flammable atmosphere at work location, (3) Stack structural stability confirmed (no excessive vibration), (4) Permit-to-work and SIMOPS protocols followed. Internal inspection requires shutdown and cooldown. Many refineries/power plants execute external stack inspection during partial outages (stack operating at reduced load) or between process units (inspect Stack A while Unit B still operates)—minimizing production impact. Full scope (external + internal) requires outage but external work (60-70% of total effort) can proceed during operations—compressing critical path.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is the maximum height you can inspect via rope access?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Our tallest completed inspection: 185m coal-fired power plant chimney (India, 2022). IRATA training certifies technicians to heights exceeding 200m. Practical limits are rope length (we stock 300m continuous ropes), weather exposure (wind increases with height), and technician fatigue (inspection productivity decreases above 150m—require rotation). For stacks >150m, we typically deploy larger teams (4-6 personnel) working in rotation to maintain quality and safety. There is no technical height limit for rope access—tallest IRATA projects worldwide exceed 400m (Burj Khalifa maintenance, bridge cable inspections). Stack geometry and anchor point availability are more critical factors than absolute height.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure UT thickness accuracy when technicians are hanging on ropes?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Technicians use work positioning lanyards and rope access work seats to achieve stable, hands-free positioning—enabling proper UT probe coupling and perpendicular alignment to measurement surface (critical for accuracy). For critical thickness grids, we use: (1) Dual-verification—two technicians independently measure same locations, compare results (acceptance: <0.1mm difference), (2) Permanent reference markers—stamp/paint grid coordinates on stack surface for repeatability across inspection intervals, (3) GPS tagging—GPS coordinates + elevation recorded with each measurement point for trending analysis, (4) Quality spot-checks—IRATA Level 3 supervisor re-measures random 10% of points as QC verification. API 579 acceptance: ±0.1mm for UT thickness <10mm, ±0.2mm for >10mm—our rope access UT consistently meets this criteria with <2% rejection rate on QC spot-checks.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What weather conditions limit rope access stack inspection?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Work stops when: Sustained winds >10 m/s at working height (offshore) or >12 m/s (onshore)—measured using anemometer at top of stack, not ground level (wind speed increases ~15-25% per 50m elevation). Active precipitation (rain/snow)—rope access continues in light drizzle but PT/UT requires dry surfaces; internal RVI unaffected. Lightning within 10km radius (suspend all work, descend to ground). Temperature <-5°C or >45°C ambient (rope and equipment performance limits). Poor visibility <50m (fog, dust storms). We provide 7-day weather forecasts during planning, monitor real-time conditions during execution, and adjust work schedules proactively (night shifts to avoid daytime winds, early morning starts before afternoon thermal turbulence). Typical weather delays: 5-15% of scheduled days depending on season and geography (monsoon season higher, winter/spring lower).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does a typical stack inspection take?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Duration depends on height, diameter, inspection scope and access complexity. Typical examples: (1) 60m flare stack, external VT + UT grid (300 points) + weld PT (6 welds): 3-4 days with 2-person team. (2) 120m refinery process stack, external VT + UT grid (650 points) + weld PT (12 welds) + guy wire inspection: 5-7 days with 4-person team. (3) 180m power plant chimney, external VT + UT grid (1200 points) + internal RVI descent + refractory survey: 9-12 days with 6-person team working in rotation. Mobilization/demobilization adds 2-3 days (anchor installation, calibration, site clearance). For comparison: equivalent scaffold-based inspection requires 8-14 weeks total (scaffold erect + inspect + dismantle). Rope access removes 90-95% of schedule duration—critical for minimizing turnaround critical path impact.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you perform internal inspection of refractory-lined stacks?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—internal rope descent is core IRATA capability. Requirements: (1) Stack shutdown and cooled to <50°C internal temperature (verified by IR thermometer before entry), (2) Confined space entry procedures (atmospheric monitoring—O2 >19.5%, LEL <10%, H2S <10ppm, CO <35ppm; continuous monitoring during work; forced ventilation if required; rescue standby; communication), (3) Top access (remove stack cap, inspection port, or weather cowl), (4) Internal clearance verification (no obstructions preventing rope descent/ascent). Internal inspection scope: refractory brick/castable condition (spalling, cracking, delamination, erosion), anchor bolt integrity (corrosion, loosening), expansion joint condition, internal shell corrosion mapping (behind refractory at damaged/missing zones), internal platforms/ladders. Typical internal descent rate: 5-10m per hour (slow due to detailed inspection + photography + RVI in confined space). Longest internal inspection: 165m FCC regenerator stack descent (2 days, team rotation every 4 hours due to confined space fatigue).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What certifications/documentation do you provide for regulatory compliance?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Our inspection reports include all documentation required for: (1) EPA/CPCB air quality permits—structural integrity certification, CEMS port accessibility verification, stack testing platform adequacy; (2) Insurance underwriting—comprehensive condition assessment, remaining life calculations (RLA), repair recommendations, risk ranking; (3) API 579 FFS assessment—UT thickness grids, corrosion rate calculations, structural adequacy per ASME codes, next inspection interval recommendations; (4) ASME Section V NDT compliance—procedures, personnel certifications (ASNT Level II/III), calibration records, acceptance criteria; (5) IRATA rope access standards—method statements, risk assessments, rescue plans, anchor load test certificates, personnel training/medical records. We routinely support third-party audits (insurance surveyors, regulatory inspectors, classification societies) and provide witness inspection coordination. Documentation formatted for direct submission to authorities—saving client engineering time and ensuring regulatory acceptance.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you handle guy wire inspection on tall stacks?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Guy wire systems (typically 3-6 guy wires per stack at multiple elevations) require specialized inspection: (1) Tension measurement—use vibration frequency analysis (guy wire plucked, measure vibration frequency, calculate tension via wire properties) or load cells (installed temporarily at turnbuckles). Compare measured vs design tension—detect slack wires (overstress on remaining wires) or over-tensioned wires (excess stack bending moment). (2) Turnbuckle/clevis inspection—visual for corrosion/wear, PT testing of threaded connections and pins (crack-critical components). (3) Guy wire-to-stack lug welds—PT/MT testing of lug-to-shell welds, lug plate inspection for cracks/deformation. (4) Anchor foundations—excavate soil (where accessible), expose anchor bolts, PT/UT testing, concrete condition assessment. (5) Guy wire corrosion—focus on termination zones (trapped moisture), ground proximity (soil contact), and mid-span (corrosion from industrial atmosphere). Technicians access guy wires via: rope descent down guy wire (using specialized rope access techniques for inclined/tensioned cables) or rope access from stack shell out to guy wire attachment lugs. Guy wire inspection typically adds 1-2 days to stack inspection campaign—essential for structural integrity verification (guy wire failure can cause catastrophic stack collapse).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you integrate drone inspection with rope access for cost optimization?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes—hybrid approach delivers optimal cost/benefit: (1) Drone survey (1-2 days)—rapid overall visual assessment, HD photography, thermal imaging (IR-equipped drones), 3D photogrammetry model, preliminary defect screening. Cost: $15-35K depending on stack size/complexity. (2) Rope access detailed inspection (3-7 days)—targeted at zones flagged by drone survey PLUS high-risk areas per RBI analysis (corrosion-prone elevations, critical welds, guy wire attachments). Execute close-proximity VT, UT thickness grids, PT/MT weld testing, measurements—NDT methods drones cannot perform. Cost: $150-350K depending on scope. (3) Data integration—correlate drone findings with rope access detailed inspection; drone provides context (overall condition, access planning), rope access provides quantitative NDT data for engineering decisions. This hybrid approach reduces rope access inspection time by 20-30% (eliminate preliminary survey work) while maintaining comprehensive coverage and NDT quality. Particularly cost-effective for very tall stacks (>120m) and multi-stack facilities where drone can rapidly survey entire fleet, prioritize worst assets for rope access detailed inspection.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Protect Critical Infrastructure—Eliminate Scaffolding Costs & Schedule Delays</h2>
            <p>Get comprehensive multi-discipline stack inspection (VT + UT + PT + RVI) at 60-75% lower cost than scaffolding. Request free feasibility study and cost comparison.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Stack Inspection Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Free Site Survey & Access Engineering</span>
                <span><i class="fas fa-check"></i> Multi-Discipline NDT Integration (VT/UT/PT/RVI)</span>
                <span><i class="fas fa-check"></i> API 579 FFS Assessment Included</span>
                <span><i class="fas fa-check"></i> 48-72 Hour Emergency Response</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Related Rope Access Inspection Services</h2>
            <p>Comprehensive asset integrity solutions delivered at height—same access platform, multiple capabilities</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access UT Thickness</h3>
                <p>Corrosion mapping, CML monitoring and remaining life assessment for tanks, vessels, piping and structures</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-pt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-tint"></i></div>
                <h3>Rope Access PT (Dye Penetrant)</h3>
                <p>Surface crack detection for welds, structural steel and critical connections at height</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-vt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access Visual Inspection</h3>
                <p>General visual examination (GVE), close visual inspection (CVI) and detailed condition assessment</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-thermal-imaging.php" class="related-card">
                <div class="related-icon"><i class="fas fa-thermometer-half"></i></div>
                <h3>Rope Access Thermal Imaging</h3>
                <p>Infrared thermography for refractory damage, insulation voids, electrical hotspots and thermal anomalies</p>
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