<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Rope Access Pipeline & Structural Inspection Services | IRATA Certified Multi-Discipline NDT | Alpha Sonix NDT Solutions";
$meta_description = "IRATA/SPRAT certified rope access inspection for elevated pipelines, pipeline bridges, structural steel, offshore risers and industrial frameworks. Multi-discipline NDT (VT, UT thickness, PAUT, PT, MT) for corrosion assessment, weld integrity and structural condition monitoring without scaffolding. API 570, ASME B31.3, AWS D1.1 compliant with 65% cost savings vs traditional access.";
$meta_keywords = "rope access pipeline inspection, rope access structural inspection, elevated pipeline NDT, pipeline bridge inspection, offshore riser inspection, industrial steel structure inspection, scaffolding-free pipeline testing, rope access corrosion mapping, structural integrity assessment, IRATA pipeline inspection";
$canonical_url = "https://alphasonix.com/pages/rope-access-services/rope-access-pipeline.php";
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
    <meta property="og:image" content="/www/assets/images/services/rope-access-pipeline-structural-og.jpg">

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
            "serviceType": "Rope Access Pipeline & Structural Inspection",
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
            "description": "IRATA/SPRAT certified rope access inspection services for elevated pipelines, pipeline bridges, structural steel and offshore risers. Multi-discipline NDT including visual inspection, UT thickness mapping, PAUT weld testing, PT/MT crack detection without scaffolding costs.",
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Rope Access Pipeline & Structural Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Elevated Pipeline Corrosion Mapping"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Pipeline Bridge Structural Assessment"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Offshore Riser Integrity Inspection"
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
    <div class="page-hero-bg" style="background-image: url('/www/assets/images/rope-access/pipeline-structural-hero.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="/www/index.php">Home</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <a href="#">Rope Access Services</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Pipeline & Structural Inspection</span>
            </div>
            <h1 class="page-title">Rope Access Pipeline & Structural Inspection</h1>
            <p class="page-subtitle">IRATA/SPRAT certified multi-discipline inspection for elevated pipelines, pipeline bridges, offshore risers, structural steel frameworks and industrial support systems—comprehensive corrosion mapping, weld integrity assessment and structural condition monitoring without scaffolding delays or production shutdowns</p>
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-certificate"></i> IRATA Level 3 + Multi-NDT Certified</span>
                <span class="badge"><i class="fas fa-tools"></i> VT + UT + PAUT + PT + MT Integration</span>
                <span class="badge"><i class="fas fa-map-marked-alt"></i> CML & RBI Program Support</span>
                <span class="badge"><i class="fas fa-coins"></i> 65% Cost Reduction vs Scaffolding</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== QUICK OVERVIEW ===================== -->
<section class="quick-overview">
    <div class="container">
        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-route"></i></div>
                <h3>Elevated Pipeline Integrity Assessment</h3>
                <p>Comprehensive inspection of elevated process pipelines, inter-unit transfer lines, pipeline bridges and rack systems 20-100m above grade. UT thickness mapping (CML programs), external corrosion assessment (CUI detection), weld integrity testing and support structure verification—all without pipeline isolation or scaffolding erection.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-ship"></i></div>
                <h3>Offshore Riser & Subsea Pipeline Inspection</h3>
                <p>Platform-to-seafloor pipeline risers, J-tube connections, flexible-to-rigid transitions and exposed subsea pipeline spans. Multi-discipline NDT from platform level using rope access positioning—eliminate marine diving costs, vessel mobilization and weather-sensitive subsea operations for platform-accessible sections.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-building"></i></div>
                <h3>Industrial Structural Steel Assessment</h3>
                <p>Pipe rack support structures, equipment foundations, elevated walkways, cable tray systems, platform frameworks and critical load-bearing connections. Visual inspection (VT Level II), weld integrity testing (PT/MT/PAUT), thickness mapping and structural member condition assessment per AISC, AWS D1.1 and API 570 requirements.</p>
            </div>
            <div class="overview-card">
                <div class="overview-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Risk-Based Inspection (RBI) & Asset Integrity Support</h3>
                <p>API 580/581 RBI program execution with systematic CML monitoring, damage mechanism screening, remaining life assessment and inspection interval optimization. Digital data management, GPS-tagged defect mapping and trending analysis across inspection cycles—supporting predictive maintenance and integrity management systems.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHAT IS ROPE ACCESS PIPELINE & STRUCTURAL INSPECTION ===================== -->
<section class="what-is-section">
    <div class="container">
        <div class="what-is-grid">
            <div class="what-is-content">
                <span class="section-label">COMPREHENSIVE ASSET INTEGRITY AT HEIGHT</span>
                <h2>What is Rope Access Pipeline & Structural Inspection?</h2>

                <p class="lead">Rope Access Pipeline & Structural Inspection integrates IRATA/SPRAT industrial rope access positioning with multi-discipline NDT methods (visual inspection, ultrasonic thickness testing, phased array ultrasonics, dye penetrant testing, magnetic particle testing) to deliver comprehensive integrity assessment of elevated pipelines, pipeline bridges, offshore risers, structural steel frameworks and industrial support systems—eliminating scaffolding costs, minimizing production impact and enabling access to previously uninspectable locations.</p>

                <p>Refineries, chemical plants, offshore platforms and power stations operate extensive elevated piping systems (20-100m height) and structural steel frameworks supporting critical process equipment. Traditional inspection requires massive scaffolding investments ($500K-3M for large facilities), extended shutdowns (4-12 weeks), and production deferment ($100K-1M per day). Many critical locations remain uninspected due to access impossibility or prohibitive costs.</p>

                <p><strong>Rope access revolutionizes pipeline and structural inspection economics:</strong> IRATA Level 3 certified teams with multi-discipline NDT qualifications (VT Level II, UT Level II, PAUT, PT Level II, MT Level II) access any elevation, geometry or location using dual-rope systems—delivering API 570, ASME B31.3, AWS D1.1 compliant inspection at 60-75% cost savings with minimal operational disruption.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Multi-Discipline NDT Integration</strong>
                            <p>Single rope access campaign delivers: general visual examination (GVE), close visual inspection (CVI), UT thickness mapping (CML programs), weld integrity testing (PAUT/PT/MT), external corrosion assessment, insulation condition survey, support structure verification—comprehensive asset integrity data from one mobilization.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>CML & RBI Program Execution</strong>
                            <p>Systematic Corrosion Monitoring Location (CML) thickness measurement per API 570/510, damage mechanism identification, corrosion rate calculations, remaining life assessment (RLA) and inspection interval recommendations—supporting Risk-Based Inspection (API 580/581) and Mechanical Integrity (OSHA PSM) programs.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Pipeline Bridge & Crossing Inspection</strong>
                            <p>Specialized expertise for pipeline bridges spanning rivers, roads, railways—exposed pipeline sections requiring periodic inspection for external corrosion, support structure integrity, expansion joint condition, coating degradation and environmental damage without traffic disruption or excavation.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Digital Asset Management & Trending</strong>
                            <p>GPS-tagged inspection data, digital photo documentation, 3D modeling integration, automated reporting and trending analysis vs previous inspections. Cloud-based data storage enables comparison across outage cycles, corrosion rate trending and integration with PCMS/SAP asset management systems.</p>
                        </div>
                    </div>
                </div>

                <div class="tech-highlight-box">
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Why Rope Access Pipeline & Structural Inspection Matters:</strong>
                        <p>Large refineries operate 50-150km of elevated piping and 5,000-15,000 tons of structural steel at heights of 20-100m. Traditional scaffold-based inspection of 10% of this infrastructure costs $2-8M annually and requires 8-16 week shutdowns. Rope access enables 100% coverage of critical systems at $500K-2M total cost with 2-4 week execution—delivering 5-10x ROI through comprehensive damage detection, targeted repair planning and deferred capital spending on blanket pipe replacement programs. Essential for aging assets where selective inspection and repair is economically superior to wholesale replacement.</p>
                    </div>
                </div>

                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Request Pipeline Inspection Quote</a>
                    <a href="#applications" class="btn btn-secondary">View Applications</a>
                </div>
            </div>

            <div class="what-is-visual">
                <div class="visual-card">
                    <img src="/www/assets/images/rope-access/pipeline-ut-inspection.jpg" alt="IRATA technician performing rope access UT thickness mapping on elevated process pipeline">
                    <div class="visual-caption">
                        <i class="fas fa-info-circle"></i>
                        <span>IRATA Level 3 technician conducting systematic CML thickness mapping on elevated hydrocarbon transfer pipeline at 45m height</span>
                    </div>
                </div>

                <div class="stats-box">
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Critical Location Coverage</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">±0.1mm</span>
                        <span class="stat-label">UT Thickness Accuracy</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">65%</span>
                        <span class="stat-label">Cost Saving vs Scaffolding</span>
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
                            <span>UT Thickness CML Mapping</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-wave-square"></i>
                            <span>PAUT Weld Integrity Testing</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-tint"></i>
                            <span>PT/MT Crack Detection</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-thermometer-half"></i>
                            <span>External Corrosion & CUI Screening</span>
                        </div>
                        <div class="system-type-item">
                            <i class="fas fa-hard-hat"></i>
                            <span>Support Structure Assessment</span>
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
            <span class="section-label">WHY CHOOSE ROPE ACCESS PIPELINE & STRUCTURAL INSPECTION</span>
            <h2>Key Advantages Over Traditional Scaffolding Access</h2>
            <p>Cost savings, comprehensive coverage and minimal operational disruption for critical infrastructure</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon blue"><i class="fas fa-dollar-sign"></i></div>
                <h3>Massive Scaffolding Cost Elimination (60-75%)</h3>
                <p>Refinery piping inspection: $2.8M scaffolding quote vs $650K rope access (77% savings). Offshore riser inspection: $3.2M marine scaffold vs $485K rope access (85% savings). Pipeline bridge assessment: $1.4M vs $320K (77% savings). Savings increase with elevation, structural complexity and site constraints.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon green"><i class="fas fa-expand-arrows-alt"></i></div>
                <h3>100% Critical Location Coverage</h3>
                <p>Access every elevation, geometry and location—no "uninspectable" zones due to scaffolding impossibility. Inspect pipe undersides, complex geometries, congested areas, offshore splash zones and locations where scaffolding is prohibited or structurally unfeasible. Comprehensive damage detection vs limited sampling.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon purple"><i class="fas fa-tachometer-alt"></i></div>
                <h3>Eliminate Critical Path Impact (6-12 Weeks Saved)</h3>
                <p>Scaffold erection/dismantling adds 8-16 weeks to turnaround schedules. Rope access mobilizes in 48-72 hours, executes inspection in 1-4 weeks, demobilizes same-day—removing 10-15 weeks from critical path. Production restart acceleration worth $3-15M for refineries and chemical plants.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon orange"><i class="fas fa-industry"></i></div>
                <h3>Inspect Operating Systems (No Shutdown Required)</h3>
                <p>External pipeline inspection, support structure assessment, CUI screening and visual condition surveys performed on operating units without process shutdown—provided safe access and SIMOPS protocols are followed. Reduces production deferment by 60-85% vs total unit shutdown for traditional inspection.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon red"><i class="fas fa-tools"></i></div>
                <h3>Multi-Discipline Integration (Single Mobilization)</h3>
                <p>Combine VT, UT thickness, PAUT weld testing, PT/MT crack detection, RVI, thermal imaging in one rope access campaign—eliminate multiple subcontractor mobilizations, coordination delays and redundant access costs. Typical multi-discipline savings: 40-60% vs sequential single-technique campaigns.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon teal"><i class="fas fa-chart-line"></i></div>
                <h3>RBI Program Optimization & Data Management</h3>
                <p>Systematic CML tracking, damage mechanism identification, corrosion rate trending and inspection interval optimization support API 580/581 RBI programs. Digital data archives enable trending across outage cycles, predictive analytics and integration with asset integrity management systems—improving inspection effectiveness while reducing costs.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== INSPECTION TECHNIQUE COMPARISON ===================== -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">NDT TECHNIQUE SELECTION</span>
            <h2>Multi-Discipline Inspection Methods for Pipelines & Structures</h2>
            <p>Integrate complementary techniques for comprehensive asset integrity assessment</p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Inspection Objective</th>
                        <th><i class="fas fa-eye"></i> Visual (VT/RVI)</th>
                        <th><i class="fas fa-ruler-combined"></i> UT Thickness</th>
                        <th><i class="fas fa-wave-square"></i> PAUT Weld</th>
                        <th><i class="fas fa-tint"></i> PT/MT</th>
                        <th><i class="fas fa-thermometer-half"></i> Thermal (IR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>External Corrosion Assessment</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Primary screening method</td>
                        <td class="excellent"><i class="fas fa-star"></i> Quantitative wall loss measurement</td>
                        <td class="average">Not applicable</td>
                        <td class="average">Surface crack detection only</td>
                        <td class="good">CUI detection (insulated piping)</td>
                    </tr>
                    <tr>
                        <td><strong>CML Program Execution</strong></td>
                        <td class="average">Qualitative condition only</td>
                        <td class="excellent"><i class="fas fa-star"></i> Systematic thickness monitoring</td>
                        <td class="average">Not applicable</td>
                        <td class="average">Not applicable</td>
                        <td class="average">Supplemental data</td>
                    </tr>
                    <tr>
                        <td><strong>Weld Integrity Verification</strong></td>
                        <td class="average">Visual defects only</td>
                        <td class="average">Thickness at weld zones</td>
                        <td class="excellent"><i class="fas fa-star"></i> Volumetric weld assessment</td>
                        <td class="excellent"><i class="fas fa-star"></i> Surface crack detection</td>
                        <td class="average">Not applicable</td>
                    </tr>
                    <tr>
                        <td><strong>Support Structure Condition</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Overall condition assessment</td>
                        <td class="good">Critical member thickness</td>
                        <td class="good">Connection weld integrity</td>
                        <td class="good">Crack detection (fatigue)</td>
                        <td class="average">Not typically used</td>
                    </tr>
                    <tr>
                        <td><strong>Coating Degradation Survey</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Visual coating condition</td>
                        <td class="average">Not applicable</td>
                        <td class="average">Not applicable</td>
                        <td class="average">Not applicable</td>
                        <td class="good">Coating delamination detection</td>
                    </tr>
                    <tr>
                        <td><strong>Insulation Condition Assessment</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> External visual survey</td>
                        <td class="average">Through-insulation not practical</td>
                        <td class="average">Not applicable</td>
                        <td class="average">Not applicable</td>
                        <td class="excellent"><i class="fas fa-star"></i> Moisture ingress, voids detection</td>
                    </tr>
                    <tr>
                        <td><strong>Inspection Speed (Rope Access)</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> Fast (50-100m/day)</td>
                        <td class="good">Moderate (300-500 points/day)</td>
                        <td class="average">Slower (15-30 welds/day)</td>
                        <td class="average">Slower (20-40 welds/day)</td>
                        <td class="excellent"><i class="fas fa-star"></i> Fast (remote scanning)</td>
                    </tr>
                    <tr>
                        <td><strong>Best Application</strong></td>
                        <td class="excellent"><i class="fas fa-star"></i> All pipelines/structures (baseline)</td>
                        <td class="excellent"><i class="fas fa-star"></i> CML programs, RLA calculations</td>
                        <td>Critical pressure boundary welds</td>
                        <td>Weld crack detection, repair verification</td>
                        <td>CUI screening, insulation integrity</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="comparison-note">
            <i class="fas fa-info-circle"></i>
            <p><strong>Integrated Inspection Strategy:</strong> Execute general visual examination (GVE) 100% of pipeline/structure using rope access teams with HD photography. Deploy UT thickness at established CML locations plus additional high-risk zones identified during VT. Apply PAUT/PT/MT to critical welds, repair zones and fatigue-prone connections. Use thermal imaging for insulated systems where CUI is suspected. This integrated approach optimizes cost/benefit—comprehensive visual screening identifies priorities for detailed NDT, minimizing expensive volumetric/surface testing while ensuring critical damage mechanisms are addressed.</p>
        </div>
    </div>
</section>

<!-- ===================== APPLICATIONS ===================== -->
<section class="applications-section" id="applications">
    <div class="container">
        <div class="section-header center">
            <span class="section-label">PIPELINE & STRUCTURAL INSPECTION APPLICATIONS</span>
            <h2>Asset Types & Industries We Serve</h2>
            <p>From offshore oil & gas to refining, petrochemicals and power generation</p>
        </div>

        <div class="applications-tabs">
            <div class="tabs-nav">
                <button class="tab-btn active" data-tab="elevated-piping">Elevated Process Piping</button>
                <button class="tab-btn" data-tab="pipeline-bridges">Pipeline Bridges & Crossings</button>
                <button class="tab-btn" data-tab="offshore-risers">Offshore Risers & Platforms</button>
                <button class="tab-btn" data-tab="structural-steel">Industrial Structural Steel</button>
            </div>

            <div class="tabs-content">
                <!-- Elevated Process Piping Tab -->
                <div class="tab-panel active" id="elevated-piping">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/elevated-piping-inspection.jpg" alt="Rope access inspection on elevated refinery process piping">
                        </div>
                        <div class="tab-text">
                            <h3>Refinery & Petrochemical Elevated Piping Inspection</h3>
                            <p>Refineries and chemical plants operate 50-150km of elevated process piping at heights of 20-100m. External corrosion (atmospheric, CUI), mechanical damage, support degradation and weld integrity issues require periodic inspection per API 570 and ASME B31.3. Rope access enables comprehensive inspection without unit shutdown or massive scaffolding investments.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Inter-Unit Transfer Lines:</strong> Crude, product, intermediate stream pipelines connecting process units—elevated rack systems requiring external VT, UT thickness CML monitoring, support structure assessment, expansion joint condition verification</li>
                                <li><i class="fas fa-check"></i> <strong>Pipe Rack Systems:</strong> Multi-level pipe rack structures (20-60m height) supporting dozens of process lines—systematic VT screening for external corrosion, insulation damage, coating degradation, followed by targeted UT thickness at CML locations and high-risk zones</li>
                                <li><i class="fas fa-check"></i> <strong>Corrosion Under Insulation (CUI) Programs:</strong> Hot process piping (200-400°C operating temperature) with external insulation—thermal imaging screening for moisture ingress/hot spots, targeted insulation removal and UT thickness measurement at suspect zones, insulation condition assessment</li>
                                <li><i class="fas fa-check"></i> <strong>Header & Distribution Systems:</strong> Steam headers, fuel gas headers, flare headers, utility headers—large-diameter piping (12"-48") with branch connections, nozzles and complex geometry requiring multi-angle inspection and weld integrity verification</li>
                                <li><i class="fas fa-check"></i> <strong>Dead-Leg & Low-Flow Systems:</strong> Infrequently used lines, bypass systems, spare pump loops—high CUI/external corrosion risk requiring focused inspection attention despite low process criticality</li>
                                <li><i class="fas fa-check"></i> <strong>Expansion Joint & Flexible Connections:</strong> Bellows-type expansion joints, flexible connectors, slip joints—critical for thermal expansion accommodation, requiring detailed VT for cracking, corrosion, mechanical damage plus support structure integrity verification</li>
                                <li><i class="fas fa-check"></i> <strong>Support Structure Integrity:</strong> Pipe shoes, spring hangers, guide supports, anchor points—structural steel supports requiring VT for corrosion/damage, weld integrity testing (PT/MT), and load path verification per original design</li>
                                <li><i class="fas fa-check"></i> <strong>RBI Program Execution:</strong> Risk-based inspection per API 580/581—systematic CML thickness monitoring, damage mechanism identification (FAC, sulfidation, naphthenic acid, amine corrosion), remaining life calculations, inspection interval optimization based on actual degradation rates</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-oil-can"></i> Case Study: Major Refinery Pipe Rack Inspection Campaign</h4>
                                <p><strong>Asset:</strong> Large-scale refinery with 85km elevated process piping distributed across 12 major pipe racks (height range 25-65m). Asset age: 28-42 years. Inspection requirement: API 570 risk-based inspection program covering 2,400 established CML locations plus visual screening of 100% external piping.</p>
                                <p><strong>Traditional Challenge:</strong> Engineering firm quoted scaffold-based inspection: $6.8M cost, 24-week duration (phased across 3 turnarounds to avoid total plant shutdown), significant production impact during scaffold erection around operating units, limited coverage due to access constraints in congested areas.</p>
                                <p><strong>Rope Access Strategy:</strong> Multi-phase campaign prioritizing critical units and highest-risk piping circuits. Deploy 12-person IRATA team (4 crews working simultaneously) with multi-discipline NDT capability: VT Level II, UT Level II, thermal imaging, PT Level II. Inspection scope: 100% external visual examination with HD photography + systematic UT thickness at all CML locations + thermal imaging survey of insulated systems + targeted PT testing at critical welds/repairs.</p>
                                <p><strong>Execution & Results:</strong> Phase 1 (FCC unit piping): 3 weeks, $485K cost, 680 CML points + 18km visual screening. Phase 2 (Crude/Vacuum units): 4 weeks, $625K, 920 CML points + 32km VT. Phase 3 (Utilities/offsites): 2 weeks, $340K, 800 CML points + 35km VT. Total program: 9 weeks execution vs 24 weeks traditional, $1.45M total cost vs $6.8M quote (79% savings). Production impact: Minimal—external inspection conducted while units operating using SIMOPS protocols, no turnaround extensions required. Technical findings: UT identified 142 locations with >20% wall loss requiring repair (targeted grinding/weld buildup via rope access during shutdown windows), thermal imaging detected 67 CUI suspect zones (verified with UT, 23 requiring insulation removal/repair), VT documented 340 coating degradation zones prioritized for recoating. Engineering value: Corrosion rate data enabled remaining life calculations and inspection interval optimization—extended 840 CML locations to 6-year intervals (from 3-year), focused resources on accelerating damage zones, deferred $8M blanket pipe replacement program by demonstrating 80% of infrastructure has 10+ years remaining life.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 570 (Piping Inspection)</span>
                                <span class="standard-tag">API 580/581 (RBI)</span>
                                <span class="standard-tag">ASME B31.3 (Process Piping)</span>
                                <span class="standard-tag">API 571 (Damage Mechanisms)</span>
                                <span class="standard-tag">NACE SP0198 (CUI)</span>
                                <span class="standard-tag">OSHA 1910.119 (PSM)</span>
                                <span class="standard-tag">IRATA ICOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pipeline Bridges & Crossings Tab -->
                <div class="tab-panel" id="pipeline-bridges">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/pipeline-bridge-inspection.jpg" alt="Rope access inspection of pipeline bridge structure">
                        </div>
                        <div class="tab-text">
                            <h3>Pipeline Bridge, River Crossing & Elevated Span Inspection</h3>
                            <p>Pipelines crossing rivers, highways, railways and canyons via elevated bridge structures require periodic integrity assessment for external corrosion (atmospheric exposure, coating degradation), structural steel condition, expansion joint integrity and support system adequacy. Rope access enables comprehensive inspection without traffic disruption, excavation or marine access requirements.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Pipeline Bridge Structures:</strong> Steel truss bridges, beam bridges, suspension bridges supporting transmission pipelines—comprehensive structural steel inspection (VT + UT thickness on critical members), weld integrity testing (PT/MT), coating condition assessment, corrosion mapping per AASHTO/API requirements</li>
                                <li><i class="fas fa-check"></i> <strong>River & Water Crossing Spans:</strong> Exposed pipeline sections spanning rivers, lakes, wetlands—inspect from bridge structure using rope access to avoid marine access costs, assess external coating condition, atmospheric corrosion, mechanical damage from debris impact, support saddle integrity</li>
                                <li><i class="fas fa-check"></i> <strong>Highway & Railway Crossings:</strong> Overhead pipeline crossings of roads/railways requiring inspection without traffic lane closure or rail service interruption—VT + UT thickness assessment, support structure condition, expansion joint verification, coating degradation mapping performed during off-peak hours</li>
                                <li><i class="fas fa-check"></i> <strong>Canyon & Valley Crossings:</strong> Long-span pipeline bridges (50-500m span length) with limited ground access—comprehensive rope access inspection from anchor points at bridge ends, mid-span access for full-length coverage of pipeline and support structure</li>
                                <li><i class="fas fa-check"></i> <strong>Pipe Support Systems:</strong> Saddle supports, roller supports, guide supports, anchor blocks—inspect support-to-pipeline interface for corrosion (crevice corrosion risk), support structure integrity (concrete degradation, anchor bolt condition), alignment/movement verification</li>
                                <li><i class="fas fa-check"></i> <strong>Expansion Joint Assemblies:</strong> Bellows expansion joints, ball joints, slip joints accommodating thermal expansion and bridge movement—detailed VT for cracking/damage, UT thickness at bellows, support structure verification, operability assessment where accessible</li>
                                <li><i class="fas fa-check"></i> <strong>Structural Steel Framework:</strong> Bridge beams, trusses, columns, bracing members—systematic VT for corrosion/damage, UT thickness at critical sections, weld integrity testing (PT/MT) at high-stress connections, fatigue-prone details, coating condition documentation</li>
                                <li><i class="fas fa-check"></i> <strong>Cathodic Protection Systems:</strong> Anode inspection (sacrificial/impressed current), electrical connection integrity, coating holiday detection where CP installed—verify system operation and identify coating defects enabling effective CP</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-bridge"></i> Case Study: Natural Gas Pipeline River Crossing Inspection</h4>
                                <p><strong>Asset:</strong> 36-inch natural gas transmission pipeline spanning major river via 240m steel truss bridge structure (bridge height above water: 35m). Asset age: 32 years. Regulatory requirement: 5-year structural integrity verification per DOT/PHMSA pipeline safety regulations.</p>
                                <p><strong>Traditional Challenge:</strong> Marine contractor quoted bridge inspection requiring: barge/crane access from river ($380K mobilization), dive team for submerged pier inspection ($240K), traffic management for highway approach access ($180K), 6-week duration including weather delays. Total cost: $1.2M. Pipeline operator concern: River traffic disruption, environmental permitting complexity, weather-sensitive marine operations.</p>
                                <p><strong>Rope Access Alternative:</strong> Bridge-accessible components (pipeline, superstructure, above-water piers) inspected via rope access from bridge deck/roadway. Submerged pier inspection deferred to next underwater campaign (cost optimization). Scope: Complete pipeline external VT + UT thickness at 40 established CML locations, structural steel VT + targeted UT on critical truss members, weld PT testing at repair zones, expansion joint detailed assessment, support structure integrity verification.</p>
                                <p><strong>Execution & Results:</strong> Duration: 8 days (mobilization + 5 days inspection + reporting). Access: Rope systems anchored to bridge superstructure, technicians descended to pipeline and structural steel locations. Night work (8 PM - 6 AM) minimized highway traffic impact—single lane closure only, no full bridge closure required. Cost: $285K (76% savings vs $1.2M marine approach). Technical findings: UT thickness measurements within acceptable limits (minimum remaining wall 8.2mm vs 6.5mm MAOP requirement), VT identified coating degradation zones (18 locations totaling 45m² requiring recoating—performed same campaign via rope access surface prep + coating application), structural steel inspection satisfactory (minor corrosion, no critical defects), expansion joint bellows condition acceptable. Regulatory compliance: Inspection report submitted to DOT/PHMSA, met all regulatory requirements, 5-year re-inspection interval approved. Environmental benefit: Zero river impact, no marine permitting required, no disruption to river traffic or aquatic habitat.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API 1104 (Pipeline Welding)</span>
                                <span class="standard-tag">ASME B31.4/.8 (Pipeline Systems)</span>
                                <span class="standard-tag">49 CFR 195/192 (DOT Pipeline Safety)</span>
                                <span class="standard-tag">AASHTO Bridge Standards</span>
                                <span class="standard-tag">AWS D1.1 (Structural Steel)</span>
                                <span class="standard-tag">NACE SP0169 (Cathodic Protection)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offshore Risers & Platforms Tab -->
                <div class="tab-panel" id="offshore-risers">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/offshore-riser-inspection.jpg" alt="Rope access inspection on offshore platform pipeline riser">
                        </div>
                        <div class="tab-text">
                            <h3>Offshore Platform Risers & Topside Piping Inspection</h3>
                            <p>Fixed platforms, FPSOs and semi-submersibles operate vertical pipeline risers connecting seafloor export/import pipelines to topside processing facilities. Platform-accessible riser sections (above splash zone) plus topside process piping require periodic inspection per classification society rules and API RP 2A. Rope access eliminates marine scaffolding/diving costs for above-water components.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Production/Export Risers:</strong> Oil/gas production risers (platform to subsea wells), export risers (platform to pipeline)—VT + UT thickness assessment of riser pipe above splash zone, weld integrity testing at girth welds and platform tie-in connections, external corrosion mapping, coating condition survey</li>
                                <li><i class="fas fa-check"></i> <strong>Import Risers & J-Tubes:</strong> Gas lift risers, water injection risers, J-tube protected risers—inspect accessible sections from platform using rope access, assess external condition, UT thickness at critical elevations, flexible-to-rigid riser transition zones (high-stress areas)</li>
                                <li><i class="fas fa-check"></i> <strong>Splash Zone Components:</strong> Riser sections in wave impact zone (most aggressive corrosion environment)—detailed VT for pitting/wall loss, systematic UT thickness grid, weld integrity verification, sacrificial anode condition (if installed), coating degradation assessment</li>
                                <li><i class="fas fa-check"></i> <strong>Riser Support Systems:</strong> Riser clamps, guide frames, support brackets attached to platform structure—inspect support-to-riser interface for corrosion/wear, structural steel support integrity (welds, connections), alignment/movement verification</li>
                                <li><i class="fas fa-check"></i> <strong>Topside Process Piping:</strong> Platform deck-level process piping, module interconnects, utility systems—elevated piping requiring external VT, CML thickness monitoring, expansion joint condition, support structure assessment without production shutdown</li>
                                <li><i class="fas fa-check"></i> <strong>Platform Structural Piping:</strong> Firewater systems, deluge piping, foam systems, cooling water, ballast piping—safety-critical systems requiring periodic integrity verification per SOLAS/MARPOL/classification rules</li>
                                <li><i class="fas fa-check"></i> <strong>Caisson & Conductor Interfaces:</strong> Wellhead conductor-to-platform connections, production caisson systems—inspect above-deck sections for corrosion, weld integrity, cement seal condition (where visible/accessible)</li>
                                <li><i class="fas fa-check"></i> <strong>Subsea Tie-Back Points:</strong> Umbilical hang-off points, subsea tree connection points, flowline interfaces—platform-accessible components requiring VT + UT thickness + weld testing to ensure subsea system integrity</li>
                            </ul>

                            <div class="app-highlight">
                                <i class="fas fa-ship"></i>
                                <div>
                                    <strong>Offshore Rope Access Economics:</strong>
                                    <p>Marine scaffolding for offshore riser inspection costs $2-8M depending on water depth and riser configuration (supply vessels, marine crew, weather delays). Saturation diving for subsea inspection: $1-3M per campaign. Platform production deferment: $500K-3M per day depending on oil/gas rates. Rope access inspection of platform-accessible riser sections (above splash zone, ~30-60% of total riser length) costs $200-500K and requires no production shutdown—eliminating scaffolding costs while maintaining platform operations. For complete riser assessment: combine rope access (platform-accessible sections) with periodic ROV/diving (subsea sections only)—hybrid approach reduces annual inspection costs by 60-80% vs blanket diving/scaffold programs.</p>
                                </div>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">API RP 2A-WSD (Fixed Platforms)</span>
                                <span class="standard-tag">API RP 2RD (Risers)</span>
                                <span class="standard-tag">API 579 (Fitness-for-Service)</span>
                                <span class="standard-tag">DNV-OS-F101 (Submarine Pipelines)</span>
                                <span class="standard-tag">ISO 13628 (Subsea Equipment)</span>
                                <span class="standard-tag">NACE SP0176 (Corrosion Control)</span>
                                <span class="standard-tag">ABS/DNV Classification Rules</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industrial Structural Steel Tab -->
                <div class="tab-panel" id="structural-steel">
                    <div class="tab-grid">
                        <div class="tab-image">
                            <img src="/www/assets/images/rope-access/structural-steel-inspection.jpg" alt="Rope access inspection of industrial pipe rack structural steel">
                        </div>
                        <div class="tab-text">
                            <h3>Industrial Pipe Rack, Equipment Support & Platform Structures</h3>
                            <p>Refineries, chemical plants and power stations operate extensive structural steel frameworks supporting process piping, equipment, cable trays, platforms and access systems. Corrosion, fatigue, mechanical damage and weld degradation require periodic assessment per AISC specifications and building codes. Rope access enables comprehensive structural integrity verification without production interruption or scaffolding investment.</p>

                            <ul class="checkmark-list">
                                <li><i class="fas fa-check"></i> <strong>Pipe Rack Support Steel:</strong> Multi-level pipe rack structures (20-60m height) with beams, columns, bracing, foundations—systematic VT for corrosion/damage, UT thickness on critical members (reduced sections, high-stress zones), weld integrity testing (PT/MT) at beam-to-column connections</li>
                                <li><i class="fas fa-check"></i> <strong>Equipment Foundation Structures:</strong> Elevated equipment platforms, compressor/pump foundations, reactor supports, column skirts—inspect structural steel for corrosion, weld integrity (base plate connections, anchor bolts), alignment/settlement verification, load path assessment</li>
                                <li><i class="fas fa-check"></i> <strong>Platform & Walkway Systems:</strong> Access platforms, maintenance walkways, stairs, ladders, handrails—VT for corrosion (especially at connections, bolt holes), structural adequacy assessment, grating condition (corrosion, loose/missing fasteners), load-bearing member integrity</li>
                                <li><i class="fas fa-check"></i> <strong>Cable Tray Support Systems:</strong> Cable tray racks, supports, hangers, bracing—typically aluminum or galvanized steel construction requiring VT for corrosion (galvanic at dissimilar metal connections), mechanical damage, support adequacy for cable loading</li>
                                <li><i class="fas fa-check"></i> <strong>Structural Bracing & Lateral Support:</strong> Wind bracing, seismic bracing, cross-bracing systems—inspect for corrosion, connection integrity (bolted/welded), member alignment, damage from operational impacts or modifications</li>
                                <li><i class="fas fa-check"></i> <strong>Heavy Lifting & Material Handling:</strong> Monorail beams, jib cranes, gantry structures, hoist supports—critical for safe lifting operations, requiring detailed VT + weld PT/MT + UT thickness on load-bearing members, certification support for third-party inspection</li>
                                <li><i class="fas fa-check"></i> <strong>Structural Steel Connections:</strong> Bolted connections (inspect for corrosion, loose/missing bolts, bearing surface degradation), welded connections (PT/MT weld integrity, fatigue crack detection), expansion/contraction provisions (sliding plates, rocker bearings)</li>
                                <li><i class="fas fa-check"></i> <strong>Coating & Corrosion Protection:</strong> Coating condition survey (coating type, thickness, degradation extent, priority recoating zones), cathodic protection systems (where installed), corrosion mapping for prioritized member replacement or repair planning</li>
                            </ul>

                            <div class="app-case-study">
                                <h4><i class="fas fa-industry"></i> Case Study: Petrochemical Complex Structural Steel Assessment</h4>
                                <p><strong>Asset:</strong> Large petrochemical complex with 18,000 tons of structural steel distributed across: pipe racks (12km linear length, 25-55m height), equipment platforms (240 elevated platforms supporting process equipment), cable tray systems, access stairs/walkways. Asset age: 32-48 years (original construction + multiple expansions).</p>
                                <p><strong>Challenge:</strong> Insurance carrier required structural integrity verification following minor seismic event (5.8 magnitude earthquake, no visible damage but concern for hidden defects). Structural engineering firm quoted comprehensive assessment: $4.2M cost (full scaffold access to critical connections), 32-week duration, significant production impact during scaffold installation around operating units.</p>
                                <p><strong>Risk-Based Approach:</strong> Client + Alpha Sonix developed prioritized inspection strategy: Identify highest-risk structural elements (seismic design critical, high-stress, fatigue-prone, previously repaired, corrosion-susceptible) using structural analysis + operational history. Deploy rope access teams for priority inspection, visual screening for remaining population. Target: 850 critical structural connections + 2,400 high-stress members + 15km pipe rack VT screening.</p>
                                <p><strong>Execution & Results:</strong> 10-person IRATA team (5 crews working simultaneously across complex) with multi-discipline capability: VT Level II, UT Level II, PT Level II, structural engineering support. Duration: 6 weeks (critical connections) + 4 weeks (VT screening) = 10 weeks vs 32 weeks traditional. Cost: $1.15M (73% savings vs $4.2M quote). Production impact: Minimal—teams worked around operating units using SIMOPS, no unit shutdowns required. Technical findings: VT identified 340 corrosion-affected members (coating degradation, section loss), UT thickness confirmed 28 members with >15% section loss requiring reinforcement/replacement, PT/MT weld testing detected 6 crack indications at beam-to-column connections (earthquake-induced propagation of pre-existing weld defects, all repaired via rope access grinding/rewelding same campaign). Engineering assessment: Post-earthquake structural capacity verified adequate for continued operation, repair program implemented for identified defects, 3-year follow-up inspection interval established for earthquake-affected zones. Insurance carrier accepted findings, coverage maintained, complex returned to full operation without extended shutdown. Economic impact: Avoided production loss worth $18M (120 days deferment eliminated), structural steel replacement cost deferred ($6M blanket replacement program vs $800K targeted repairs), inspection cost optimized through risk-based prioritization.</p>
                            </div>

                            <div class="standards">
                                <strong>Applicable Standards:</strong>
                                <span class="standard-tag">AISC Steel Construction Manual</span>
                                <span class="standard-tag">AWS D1.1 (Structural Welding)</span>
                                <span class="standard-tag">ASCE 7 (Loads on Structures)</span>
                                <span class="standard-tag">OSHA 1910.22 (Walking/Working Surfaces)</span>
                                <span class="standard-tag">API 570 (Piping Support)</span>
                                <span class="standard-tag">ASME B31.3 (Support Requirements)</span>
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
            <h2>Our Rope Access Pipeline & Structural Inspection Capabilities</h2>
            <p>Multi-discipline NDT integration, systematic CML programs and comprehensive asset integrity solutions</p>
        </div>

        <div class="capabilities-grid">
            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-user-shield"></i>
                    <h3>Personnel Certifications</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Access:</span> IRATA Level 3 supervisors, Level 2/1 technicians (current medical, 3-year recert)</li>
                    <li><span class="cap-label">Multi-Discipline NDT:</span> ASNT Level II VT, UT, PAUT, PT, MT (SNT-TC-1A, CP-189, ISO 9712)</li>
                    <li><span class="cap-label">API Certifications:</span> API 510/570 inspectors (pressure vessels/piping), RBI facilitators (580/581)</li>
                    <li><span class="cap-label">Thermal Imaging:</span> Level I/II infrared thermographers (ASNT, ITC certified)</li>
                    <li><span class="cap-label">Safety Training:</span> Confined space, LOTO, hot work, H2S, BOSIET (offshore), rescue</li>
                    <li><span class="cap-label">Engineering Support:</span> Mechanical engineers (FFS assessments, RLA calculations, repair design)</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-toolbox"></i>
                    <h3>Inspection Equipment Fleet</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">UT Thickness:</span> Olympus 38DL Plus, GE DM5E (data logging, GPS integration)</li>
                    <li><span class="cap-label">PAUT Systems:</span> Olympus OmniScan X3, Zetec TOPAZ (weld inspection, flaw detection)</li>
                    <li><span class="cap-label">PT/MT Materials:</span> Magnaflux visible/fluorescent systems, AC/DC yokes</li>
                    <li><span class="cap-label">Thermal Imaging:</span> FLIR E95/T540 (CUI detection, insulation survey)</li>
                    <li><span class="cap-label">Visual/RVI:</span> HD cameras (24MP+), videoscopes, drones (correlation surveys)</li>
                    <li><span class="cap-label">Data Management:</span> Tablets, cloud storage, GPS logging, automated reporting software</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-route"></i>
                    <h3>Pipeline Inspection Scope</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Diameter Range:</span> 2" - 48" (small bore to large transmission pipelines)</li>
                    <li><span class="cap-label">Elevation:</span> Grade level to 150m+ height (unlimited with rope access)</li>
                    <li><span class="cap-label">Material Types:</span> Carbon steel, stainless, alloy steel, duplex, CRA-lined piping</li>
                    <li><span class="cap-label">Temperature:</span> Ambient to 150°C (high-temp probes/techniques for hotter systems)</li>
                    <li><span class="cap-label">Condition:</span> Operating (external inspection) or shutdown (comprehensive scope)</li>
                    <li><span class="cap-label">Special Systems:</span> Insulated piping (CUI programs), coated piping, buried-to-aboveground transitions</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-building"></i>
                    <h3>Structural Steel Capabilities</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Structure Types:</span> Pipe racks, equipment platforms, cable tray, walkways, stairs</li>
                    <li><span class="cap-label">Member Range:</span> Light framing to heavy columns/beams (W36 sections, 150mm+ thick)</li>
                    <li><span class="cap-label">Connection Types:</span> Bolted, welded, hybrid connections—all inspectable</li>
                    <li><span class="cap-label">Height Range:</span> 10m to 200m+ (proven capability, unlimited with rope access)</li>
                    <li><span class="cap-label">Materials:</span> Carbon steel, galvanized steel, stainless, aluminum (cable tray)</li>
                    <li><span class="cap-label">Assessment Types:</span> Condition survey, load rating, fatigue assessment, repair design</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-hard-hat"></i>
                    <h3>Rope Access Safety & Equipment</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">Rope Systems:</span> 11mm static kernmantle (EN 1891), dual-rope redundancy, 23kN MBS</li>
                    <li><span class="cap-label">Work Positioning:</span> Work positioning lanyards, seats, equipment platforms for stable NDT work</li>
                    <li><span class="cap-label">Tool Management:</span> 100% equipment tethering, hoisting systems for heavy NDT equipment</li>
                    <li><span class="cap-label">Anchors:</span> Engineered anchor points, certified beam clamps, tripods (15kN minimum)</li>
                    <li><span class="cap-label">Environmental:</span> Weather protection, temperature monitoring, equipment heating/cooling</li>
                    <li><span class="cap-label">Communication:</span> Two-way radio, emergency communication, data transmission systems</li>
                </ul>
            </div>

            <div class="capability-box">
                <div class="capability-header">
                    <i class="fas fa-database"></i>
                    <h3>Data Management & Deliverables</h3>
                </div>
                <ul class="capability-list">
                    <li><span class="cap-label">CML Tracking:</span> Systematic thickness data with GPS coordinates, trending vs previous</li>
                    <li><span class="cap-label">RBI Integration:</span> Damage mechanism ID, corrosion rates, RLA calculations, interval recommendations</li>
                    <li><span class="cap-label">Digital Photography:</span> HD documentation with scale references, GPS tagging, condition rating</li>
                    <li><span class="cap-label">Reporting:</span> Executive summary, detailed technical report, defect register, recommendations</li>
                    <li><span class="cap-label">Software Integration:</span> PCMS, SAP, Meridium, ACCE compatibility where required</li>
                    <li><span class="cap-label">Archive:</span> Cloud storage, client portal access, 10+ year retention standard</li>
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
            <h2>Your Pipeline & Structural Integrity Partner</h2>
            <p>Multi-discipline expertise, proven refinery/offshore experience and comprehensive asset integrity solutions</p>
        </div>

        <div class="why-choose-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-users-cog"></i></div>
                <h3>Multi-Discipline Integration Specialists</h3>
                <p>Rare combination of rope access + multi-NDT capability in single team: VT, UT, PAUT, PT, MT, thermal imaging, RVI—eliminate multiple subcontractor mobilizations, coordination delays and redundant access costs. Typical multi-discipline campaign savings: 40-60% vs sequential single-technique programs.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-oil-can"></i></div>
                <h3>Refinery & Offshore Pedigree</h3>
                <p>Extensive refinery turnaround, offshore platform and petrochemical experience. Understand API 570/580, RBI programs, CML tracking, PSM requirements, SIMOPS protocols and production deferment economics—deliver inspection data that supports maintenance decisions, not just compliance checkboxes.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-chart-line"></i></div>
                <h3>RBI & Asset Integrity Engineering</h3>
                <p>In-house mechanical engineers support API 580/581 RBI program development, damage mechanism assessment, corrosion rate trending, remaining life calculations, inspection interval optimization—not just data collection but actionable engineering intelligence supporting capital planning and risk management.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-database"></i></div>
                <h3>Advanced Data Management Systems</h3>
                <p>Proprietary CML tracking database with GPS integration, automated trending, corrosion rate modeling and remaining life projections. Cloud-based client portals enable real-time access to inspection data, automated reporting and integration with PCMS/SAP asset management systems.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Zero-Incident Safety Performance</h3>
                <p>Zero lost-time incidents across 100,000+ rope access hours (2018-2024) in refinery, offshore and heavy industrial environments. IRATA-aligned safety management, continuous hazard assessment, rescue-ready Level 3 supervision and proven track record with multi-discipline NDT equipment at height.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fas fa-clock"></i></div>
                <h3>Turnaround-Ready Execution</h3>
                <p>Multi-shift capability (24-hour rotation if required), phased deliverables (daily CML data, priority defect lists), same-day critical findings communication—support turnaround critical path management where inspection, repair and restart decisions must be coordinated within tight shutdown windows.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA SECTION ===================== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Comprehensive Pipeline & Structural Integrity—Without Scaffolding Delays</h2>
            <p>Multi-discipline rope access inspection delivers 100% coverage of elevated assets at 65% lower cost. CML programs, RBI support, engineering assessments included.</p>
            <center>
                <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request Pipeline Inspection Quote</a>
            </center>
            <div class="cta-features">
                <span><i class="fas fa-check"></i> Free RBI Program Consultation</span>
                <span><i class="fas fa-check"></i> Multi-Discipline NDT Integration</span>
                <span><i class="fas fa-check"></i> CML Tracking & Trending Analysis</span>
                <span><i class="fas fa-check"></i> 24-48 Hour Emergency Response</span>
            </div>
        </div>
    </div>
</section>

<!-- ===================== RELATED SERVICES ===================== -->
<section class="related-services">
    <div class="container">
        <div class="section-header center">
            <h2>Related Rope Access NDT Services</h2>
            <p>Complete asset integrity solutions from visual screening through advanced volumetric testing</p>
        </div>

        <div class="related-grid">
            <a href="/www/pages/rope-access-services/rope-access-ut.php" class="related-card">
                <div class="related-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Rope Access UT Thickness</h3>
                <p>Systematic CML monitoring, corrosion mapping and remaining life assessment for pipelines and vessels</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-paut-tofd.php" class="related-card">
                <div class="related-icon"><i class="fas fa-project-diagram"></i></div>
                <h3>Rope Access PAUT & ToFD</h3>
                <p>Advanced ultrasonic weld inspection for critical pressure boundary and structural connections</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-vt.php" class="related-card">
                <div class="related-icon"><i class="fas fa-eye"></i></div>
                <h3>Rope Access Visual Inspection</h3>
                <p>General visual examination (GVE) and close visual inspection (CVI) for overall condition assessment</p>
                <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
            </a>

            <a href="/www/pages/rope-access-services/rope-access-thermal-imaging.php" class="related-card">
                <div class="related-icon"><i class="fas fa-thermometer-half"></i></div>
                <h3>Rope Access Thermal Imaging</h3>
                <p>Infrared thermography for CUI detection, insulation integrity and electrical hotspot identification</p>
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