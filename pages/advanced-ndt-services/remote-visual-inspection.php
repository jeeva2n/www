<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Remote Visual Inspection (RVI) & Videoscope Services | Alpha Sonix NDT Solutions";
$meta_description = "Remote Visual Inspection (RVI) using videoscopes, borescopes and industrial endoscopes to examine internal surfaces of pipes, vessels, turbines and confined spaces. HD/4K photo & video documentation, measurement tools and clear reporting—without major dismantling.";
$meta_keywords = "RVI inspection, remote visual inspection, videoscope, borescope, industrial endoscope, fiberscope, internal inspection, turbine borescope inspection, pipeline internal camera, visual testing, NDT visual inspection";
$canonical_url = "https://alphasonix.com/pages/advanced-ndt-services/remote-visual-inspection.php";
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
    <meta property="og:image" content="/www/assets/images/services/rvi-og.jpg">
    
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
        "serviceType": "Remote Visual Inspection (RVI) & Videoscope Services",
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
        "description": "Remote Visual Inspection (RVI) services using videoscopes, borescopes and industrial endoscopes for internal inspection of inaccessible areas, with HD/4K documentation and clear reporting."
    }
    </script>
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== PAGE HERO ===================== -->
    <section class="page-hero">
        <div class="page-hero-bg" style="background-image: url('/www/assets/images/services/rvi-hero.jpg');"></div>
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/www/index.php">Home</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="#">Advanced NDT Services</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>RVI / Videoscope</span>
                </div>
                <h1 class="page-title">Remote Visual Inspection (RVI)</h1>
                <p class="page-subtitle">See inside pipes, vessels, turbines and confined spaces using HD/4K videoscopes—capture clear evidence, reduce dismantling, and make faster maintenance decisions</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-video"></i> HD / 4K Image & Video</span>
                    <span class="badge"><i class="fas fa-ruler"></i> Small-Diameter Access Options</span>
                    <span class="badge"><i class="fas fa-expand-arrows-alt"></i> Long Reach Probes (Application Dependent)</span>
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
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Internal Visibility</h3>
                    <p>Access internal surfaces through ports and openings to inspect corrosion, deposits, cracks, wear and foreign objects—without full disassembly where feasible.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Documented Evidence</h3>
                    <p>Capture sharp photos and video with annotations and measurement tools to support engineering review, client acceptance and audit requirements.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Reduced Downtime & Scope</h3>
                    <p>RVI can help avoid unnecessary teardown by confirming condition early and prioritizing repair locations—especially during shutdowns and breakdowns.</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safer Access</h3>
                    <p>Inspect confined or hazardous areas with minimal human entry where possible—supporting safer work planning and reduced exposure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== WHAT IS RVI ===================== -->
    <section class="what-is-section">
        <div class="container">
            <div class="what-is-grid">
                <div class="what-is-content">
                    <span class="section-label">VISUAL INSPECTION TECHNOLOGY</span>
                    <h2>What is Remote Visual Inspection (RVI)?</h2>
                    <p class="lead">Remote Visual Inspection (RVI) is a visual examination method that uses optical instruments—videoscopes, borescopes, fiberscopes and industrial endoscopes—to inspect areas that are inaccessible to direct line-of-sight inspection.</p>
                    
                    <p>Modern RVI systems use high-resolution camera sensors, controlled illumination and articulating probe tips to navigate complex geometry and provide real-time visual feedback. Inspectors can record images/video, annotate findings, and (where equipped) apply measurement tools for length/area/depth estimation.</p>

                    <p>RVI is widely used as a first-line method to confirm internal condition and guide follow-up NDT. Where sizing or subsurface evaluation is required, RVI findings are typically complemented with UT/PAUT/TOFD, PT/MT, or other suitable methods.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Non-Intrusive Access</strong>
                                <p>Inspect through ports, nozzles, manways, drain points, and small access openings (probe diameter dependent).</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Real-Time Decisions</strong>
                                <p>Live video enables immediate assessment, faster troubleshooting and better planning for repairs and follow-up NDT.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Clear Documentation</strong>
                                <p>Recorded media with location references and annotations supports audits, client review and trending over time.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Flexible Coverage</strong>
                                <p>Rigid, flexible and articulating probe options help cover straight runs, bends and restricted geometry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Best Use of RVI:</strong>
                            <p>RVI is ideal for internal condition confirmation, defect screening and evidence capture. For critical acceptance decisions, we help integrate RVI with the right follow-up NDT technique for verification and sizing.</p>
                        </div>
                    </div>

                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary">Request RVI Service</a>
                        <a href="#equipment" class="btn btn-secondary">View Equipment</a>
                    </div>
                </div>
                <div class="what-is-visual">
                    <div class="visual-card">
                        <img src="/www/assets/images/services/rvi-videoscope.jpg" alt="RVI Videoscope">
                        <div class="visual-caption">
                            <i class="fas fa-info-circle"></i>
                            <span>Articulating videoscope for detailed internal inspection and documentation</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">HD / 4K</span>
                            <span class="stat-label">Image Options</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Up to 30m</span>
                            <span class="stat-label">Probe Length (System Dependent)</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Measurement</span>
                            <span class="stat-label">Tools (System Dependent)</span>
                        </div>
                    </div>
                    
                    <div class="rvi-benefits">
                        <h4><i class="fas fa-star"></i> Practical Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Fast verification of internal condition</li>
                            <li><i class="fas fa-check"></i> Reduced dismantling and reassembly scope</li>
                            <li><i class="fas fa-check"></i> Safer approach for confined/hazardous areas</li>
                            <li><i class="fas fa-check"></i> Shareable media for remote expert review</li>
                            <li><i class="fas fa-check"></i> Strong documentation for maintenance records</li>
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
                <span class="section-label">WHY CHOOSE RVI</span>
                <h2>Key Advantages of Remote Visual Inspection</h2>
                <p>Better visibility, faster decisions, and strong documentation—without unnecessary disruption</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Minimize Dismantling</h3>
                    <p>Inspect internal areas through access points where feasible—helping reduce teardown scope, scaffolding, and reassembly time compared with intrusive inspection approaches.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Faster Turnaround</h3>
                    <p>RVI can provide quick internal confirmation during shutdowns or breakdowns, enabling faster maintenance decisions and better repair planning.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Permanent Visual Record</h3>
                    <p>High-quality images and video provide clear evidence of condition—useful for client review, OEM consultation, trending, and maintenance history.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Measurement Support</h3>
                    <p>Where equipped, RVI measurement tools help estimate defect size (length/area/depth). For critical sizing, we recommend follow-up UT/PAUT/TOFD as required.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Cost-Effective Decision Making</h3>
                    <p>RVI helps confirm condition early, prioritize repair locations, and reduce unnecessary work—often improving overall inspection economics on complex assets.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Improved Safety</h3>
                    <p>Supports inspection planning with reduced exposure in confined spaces, at height, or in hazardous environments where full access would increase risk and permits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== EQUIPMENT TYPES ===================== -->
    <section class="equipment-section" id="equipment">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">RVI TECHNOLOGY</span>
                <h2>Videoscope & Borescope Equipment</h2>
                <p>We select the right probe diameter, length, articulation and optics for your access and inspection objective</p>
            </div>

            <div class="equipment-comparison">
                <div class="equipment-type-card">
                    <div class="equipment-type-header rigid">
                        <i class="fas fa-minus"></i>
                        <h3>Rigid Borescopes</h3>
                    </div>
                    <div class="equipment-type-body">
                        <div class="equipment-image-placeholder">
                            <img src="/www/assets/images/services/rvi-rigid-borescope.jpg" alt="Rigid Borescope">
                        </div>
                        
                        <h4>Best For</h4>
                        <p>High-clarity inspection where straight-line access is available and image quality is the top priority.</p>
                        
                        <h4>Typical Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Diameter:</strong> Small to medium (application dependent)</li>
                            <li><strong>Length:</strong> Short to medium</li>
                            <li><strong>Viewing Direction:</strong> Fixed (straight or angled)</li>
                            <li><strong>Image Quality:</strong> Excellent optical clarity</li>
                        </ul>
                        
                        <h4>Common Uses</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Precision component inspection</li>
                            <li><i class="fas fa-check"></i> Small bores and drilled passages</li>
                            <li><i class="fas fa-check"></i> Turbine/engine access ports (straight view)</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Strength:</strong> High optical clarity<br>
                            <strong>Consideration:</strong> Straight access only
                        </div>
                    </div>
                </div>

                <div class="equipment-type-card">
                    <div class="equipment-type-header flexible">
                        <i class="fas fa-wave-square"></i>
                        <h3>Flexible Fiberscopes</h3>
                    </div>
                    <div class="equipment-type-body">
                        <div class="equipment-image-placeholder">
                            <img src="/www/assets/images/services/rvi-fiberscope.jpg" alt="Flexible Fiberscope">
                        </div>
                        
                        <h4>Best For</h4>
                        <p>Routing through bends and longer paths where a flexible insertion tube is required.</p>
                        
                        <h4>Typical Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Diameter:</strong> Small to medium</li>
                            <li><strong>Length:</strong> Long reach options available</li>
                            <li><strong>Articulation:</strong> Tip steering (model dependent)</li>
                            <li><strong>Image Quality:</strong> Good (fiber dependent)</li>
                        </ul>
                        
                        <h4>Common Uses</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Piping with bends and elbows</li>
                            <li><i class="fas fa-check"></i> Heat exchanger access inspection</li>
                            <li><i class="fas fa-check"></i> Nozzles and restricted pathways</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Strength:</strong> Flexible routing<br>
                            <strong>Consideration:</strong> Lower resolution than digital videoscopes
                        </div>
                    </div>
                </div>

                <div class="equipment-type-card">
                    <div class="equipment-type-header articulating">
                        <i class="fas fa-expand-arrows-alt"></i>
                        <h3>Articulating Videoscopes</h3>
                    </div>
                    <div class="equipment-type-body">
                        <div class="equipment-image-placeholder">
                            <img src="/www/assets/images/services/rvi-videoscope.jpg" alt="Articulating Videoscope">
                        </div>
                        
                        <h4>Best For</h4>
                        <p>High-resolution digital inspection with recording, articulation, and measurement—ideal for detailed documentation and engineering review.</p>
                        
                        <h4>Typical Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Diameter:</strong> Multiple probe sizes available</li>
                            <li><strong>Length:</strong> Short to long reach (system dependent)</li>
                            <li><strong>Articulation:</strong> 4-way / enhanced steering (model dependent)</li>
                            <li><strong>Image Quality:</strong> HD to 4K (system dependent)</li>
                            <li><strong>Features:</strong> Recording, measurement options, changeable optics (system dependent)</li>
                        </ul>
                        
                        <h4>Common Uses</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Turbine hot-section checks</li>
                            <li><i class="fas fa-check"></i> Vessel internals and weld areas</li>
                            <li><i class="fas fa-check"></i> Pipeline and piping internal assessments</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Strength:</strong> Best documentation + flexibility<br>
                            <strong>Consideration:</strong> Probe selection must match access constraints
                        </div>
                    </div>
                </div>

                <div class="equipment-type-card">
                    <div class="equipment-type-header industrial">
                        <i class="fas fa-hard-hat"></i>
                        <h3>Industrial Endoscopes (Rugged Options)</h3>
                    </div>
                    <div class="equipment-type-body">
                        <div class="equipment-image-placeholder">
                            <img src="/www/assets/images/services/rvi-industrial-endoscope.jpg" alt="Industrial Endoscope">
                        </div>
                        
                        <h4>Best For</h4>
                        <p>Harsh environments, challenging access, and industrial service conditions where protection rating and robustness are critical.</p>
                        
                        <h4>Typical Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Protection:</strong> Water/chemical resistant options (system dependent)</li>
                            <li><strong>Temperature:</strong> Elevated temperature solutions (application dependent)</li>
                            <li><strong>Length/Diameter:</strong> Selected to match access and objective</li>
                            <li><strong>Options:</strong> Intrinsically safe solutions where required (project dependent)</li>
                        </ul>
                        
                        <h4>Common Uses</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Petrochemical and power plant applications</li>
                            <li><i class="fas fa-check"></i> Boiler and duct inspection support</li>
                            <li><i class="fas fa-check"></i> Confined space and high-risk areas (planning dependent)</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Strength:</strong> Rugged for field conditions<br>
                            <strong>Consideration:</strong> System selection depends on environment and access
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== APPLICATIONS ===================== -->
    <section class="applications-section" id="applications">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">RVI APPLICATIONS</span>
                <h2>Industries & Applications We Serve</h2>
                <p>RVI supports maintenance decisions, troubleshooting, and documentation across a wide range of assets</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="turbine">Turbines</button>
                    <button class="tab-btn" data-tab="vessel">Vessels & Exchangers</button>
                    <button class="tab-btn" data-tab="pipeline">Pipelines & Piping</button>
                    <button class="tab-btn" data-tab="aerospace">Aerospace / Engines</button>
                </div>

                <div class="tabs-content">
                    <!-- Turbine Inspection Tab -->
                    <div class="tab-panel active" id="turbine">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rvi-turbine.jpg" alt="Turbine Borescope Inspection">
                            </div>
                            <div class="tab-text">
                                <h3>Gas & Steam Turbine Inspection</h3>
                                <p>RVI borescope inspections support condition-based maintenance by confirming damage mechanisms and documenting hot-section condition for planning. Findings can be reviewed against OEM acceptance guidance where available.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Combustor liners, transition pieces, flame holders</li>
                                    <li><i class="fas fa-check"></i> Turbine blades/vanes: oxidation, coating loss, erosion, cracking indications</li>
                                    <li><i class="fas fa-check"></i> Compressor: FOD, tip rubs, fouling deposits</li>
                                    <li><i class="fas fa-check"></i> Seals, shrouds, attachment points (access dependent)</li>
                                    <li><i class="fas fa-check"></i> Cooling passages and blockage checks (access dependent)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Typical References:</strong>
                                    <span class="standard-tag">OEM Guidelines</span>
                                    <span class="standard-tag">ASTM / ISO VT Practices (as applicable)</span>
                                    <span class="standard-tag">Site Acceptance Criteria</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pressure Vessels Tab -->
                    <div class="tab-panel" id="vessel">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rvi-vessel.jpg" alt="Pressure Vessel RVI">
                            </div>
                            <div class="tab-text">
                                <h3>Pressure Vessels & Heat Exchangers</h3>
                                <p>RVI supports internal condition assessment to identify corrosion, deposits, wear, and obvious mechanical damage—helping plan cleaning, repair scope, and targeted follow-up NDT.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Internal surface condition and corrosion evidence</li>
                                    <li><i class="fas fa-check"></i> Nozzles, impingement zones, and attachment areas (access dependent)</li>
                                    <li><i class="fas fa-check"></i> Exchanger bundle/tube access screening (where feasible)</li>
                                    <li><i class="fas fa-check"></i> Internals condition checks (trays/baffles) where accessible</li>
                                </ul>

                                <div class="standards">
                                    <strong>Typical References:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 572</span>
                                    <span class="standard-tag">ASME Sec V (VT as applicable)</span>
                                    <span class="standard-tag">Site Specs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pipelines Tab -->
                    <div class="tab-panel" id="pipeline">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rvi-pipeline.jpg" alt="Pipeline Internal RVI">
                            </div>
                            <div class="tab-text">
                                <h3>Pipeline & Piping Internal Inspection</h3>
                                <p>Videoscope inspections provide direct visual confirmation of internal condition—useful for troubleshooting, pre-commissioning checks, and un-piggable lines (access dependent).</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Internal corrosion evidence, pitting, deposits and scale</li>
                                    <li><i class="fas fa-check"></i> Blockage and restriction confirmation</li>
                                    <li><i class="fas fa-check"></i> Debris/foreign objects and construction cleanliness checks</li>
                                    <li><i class="fas fa-check"></i> Internal weld profile observations (access dependent)</li>
                                </ul>

                                <div class="standards">
                                    <strong>Typical References:</strong>
                                    <span class="standard-tag">ASME B31.4/B31.8</span>
                                    <span class="standard-tag">API 1163 (program integration)</span>
                                    <span class="standard-tag">Client Integrity Specs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aerospace Tab -->
                    <div class="tab-panel" id="aerospace">
                        <div class="tab-grid">
                            <div class="tab-image">
                                <img src="/www/assets/images/services/rvi-aerospace.jpg" alt="Aerospace Borescope">
                            </div>
                            <div class="tab-text">
                                <h3>Aerospace & Engine Borescope Support</h3>
                                <p>RVI supports detailed inspection of engine sections and critical components where borescope access is available. Findings are typically reviewed against maintenance manuals and OEM criteria.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> Compressor and turbine sections (access dependent)</li>
                                    <li><i class="fas fa-check"></i> Combustion chamber liner condition (access dependent)</li>
                                    <li><i class="fas fa-check"></i> FOD evidence, rubs, deposits, coating condition</li>
                                    <li><i class="fas fa-check"></i> Documentation for maintenance decision support</li>
                                </ul>

                                <div class="standards">
                                    <strong>Typical References:</strong>
                                    <span class="standard-tag">OEM Manuals</span>
                                    <span class="standard-tag">Maintenance Program Requirements</span>
                                    <span class="standard-tag">Client Acceptance Criteria</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== INSPECTION CAPABILITIES ===================== -->
    <section class="capabilities-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">TECHNICAL CAPABILITIES</span>
                <h2>RVI Service Capabilities</h2>
                <p>Probe selection and deliverables are matched to your access constraints and inspection objective</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-camera"></i>
                        <h3>Imaging</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Resolution:</span> HD to 4K (system dependent)</li>
                        <li><span class="cap-label">Still Images:</span> High-quality captures with annotation</li>
                        <li><span class="cap-label">Video:</span> Recorded inspection clips for review</li>
                        <li><span class="cap-label">Lighting:</span> Adjustable illumination for clarity and contrast</li>
                        <li><span class="cap-label">Enhancement:</span> Image adjustment tools (system dependent)</li>
                        <li><span class="cap-label">Special Options:</span> UV/filters where required (project dependent)</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-combined"></i>
                        <h3>Measurement</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">On-Screen Tools:</span> Length/area/angle (system dependent)</li>
                        <li><span class="cap-label">Stereo/3D:</span> Depth estimation options (system dependent)</li>
                        <li><span class="cap-label">Accuracy:</span> Application dependent (requires correct setup and reference)</li>
                        <li><span class="cap-label">Reporting:</span> Measurement overlays and notes in report</li>
                        <li><span class="cap-label">Recommendation:</span> UT/PAUT/TOFD for critical sizing where required</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cog"></i>
                        <h3>Probe Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Diameters:</span> Multiple probe sizes (application dependent)</li>
                        <li><span class="cap-label">Lengths:</span> Short to long reach options</li>
                        <li><span class="cap-label">Articulation:</span> 2-way / 4-way / enhanced steering (model dependent)</li>
                        <li><span class="cap-label">Viewing:</span> Straight and angled optics options</li>
                        <li><span class="cap-label">Environment:</span> Rugged systems for industrial conditions (project dependent)</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clipboard-list"></i>
                        <h3>Reporting</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Deliverable:</span> PDF report with annotated images</li>
                        <li><span class="cap-label">Media:</span> Photo/video files provided as agreed</li>
                        <li><span class="cap-label">Findings Log:</span> Location reference + description + recommendation</li>
                        <li><span class="cap-label">Turnaround:</span> As agreed (urgent reporting supported)</li>
                        <li><span class="cap-label">Archiving:</span> Digital retention per project/client requirements</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-industry"></i>
                        <h3>Service Options</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Onsite Services:</span> Field inspection with qualified personnel</li>
                        <li><span class="cap-label">Shutdown Support:</span> Integrated with turnaround schedules</li>
                        <li><span class="cap-label">Emergency Response:</span> Breakdown support (as available)</li>
                        <li><span class="cap-label">Rental:</span> Equipment rental options (project dependent)</li>
                        <li><span class="cap-label">Follow-Up NDT:</span> UT/PAUT/TOFD/PT/MT coordination as required</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-check-circle"></i>
                        <h3>Quality & Compliance</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Quality System:</span> ISO 9001:2015 aligned processes (company dependent)</li>
                        <li><span class="cap-label">Personnel:</span> VT-qualified inspectors as per applicable program</li>
                        <li><span class="cap-label">Procedures:</span> Aligned to ASME/API/ISO and project specifications</li>
                        <li><span class="cap-label">Calibration:</span> Equipment checks and verification as required</li>
                        <li><span class="cap-label">Data Handling:</span> Controlled sharing and secure storage options available</li>
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
                <h2>Your RVI Technology Partner</h2>
                <p>Practical field experience, the right equipment selection, and reports written for clear maintenance and engineering decisions</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Application-Matched Equipment</h3>
                    <p>We select probe diameter, length, articulation and optics based on access, environment and the defect mechanism you want to confirm.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Qualified Inspectors</h3>
                    <p>VT-qualified personnel with experience interpreting corrosion, wear, cracking indications and service-related damage mechanisms across industrial assets.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industry-Focused Workflows</h3>
                    <p>Inspection planning and documentation aligned to shutdown realities—access, permits, safety controls and deliverables that your maintenance team can act on.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Responsive Execution</h3>
                    <p>Fast mobilization (where possible), clear communication on access requirements, and efficient inspection execution to support critical-path work.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Clear Reporting</h3>
                    <p>Annotated images/video references, structured findings tables, and practical next steps—repair, clean, monitor, or verify with advanced NDT.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Turnkey Support</h3>
                    <p>We can coordinate complementary NDT methods (PAUT/TOFD/UT, PT/MT) when RVI identifies areas requiring confirmation or sizing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ SECTION ===================== -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header center">
                <span class="section-label">FREQUENTLY ASKED QUESTIONS</span>
                <h2>RVI Questions Answered</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is the difference between a borescope and a videoscope?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p><strong>Borescope</strong> is a general term for inspection scopes (rigid or flexible). A <strong>videoscope</strong> is a borescope with a digital camera sensor at the probe tip—typically offering easier recording, better documentation, and advanced features such as measurement and image enhancement (model dependent).</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does RVI inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Cost depends on access, probe selection, inspection duration, reporting requirements, and whether shutdown support or special environments are involved. Share your component details and access points and we will provide a clear scope-based quotation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What minimum opening is required for RVI?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>The minimum opening depends on the selected probe diameter and articulation mechanism. Many industrial inspections can be performed through small ports, drain points, or access openings. If access is not available, we can advise practical options during feasibility review.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate are videoscope measurements?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Accuracy depends on the measurement method (2D/stereo/3D), target distance, lighting, and setup. Measurement tools are excellent for screening and reporting, but critical sizing decisions typically require confirmation using UT/PAUT/TOFD where applicable.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can RVI detect cracks and other defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RVI is effective for <strong>surface-visible</strong> conditions such as corrosion, wear, deposits, foreign objects, deformation, and many surface-breaking crack indications (visibility depends on lighting, contrast, and access). RVI cannot detect subsurface defects; those require UT/RT/ET or other suitable methods.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide equipment rental with training?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes—rental and training options can be arranged depending on the equipment type and your application. For critical inspections, we recommend service with qualified personnel to ensure correct access strategy, documentation and interpretation.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide a structured report with annotated images, findings log, location references, and recommended next steps. Photo/video files can be delivered in agreed formats along with the report.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does RVI inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Duration depends on access, inspection length, and documentation requirements. Some inspections are completed within hours; larger or more complex equipment may require longer. We confirm expected duration during planning once scope and access points are defined.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>See Inside Without Unnecessary Tear-Down</h2>
                <p>Request an RVI inspection plan with the right probe selection, clear deliverables, and follow-up recommendations where needed</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request RVI Service</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Feasibility & Access Review</span>
                    <span><i class="fas fa-check"></i> HD/4K Documentation</span>
                    <span><i class="fas fa-check"></i> Clear Follow-Up Guidance</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Inspection Services</h2>
                <p>Combine methods for stronger confirmation, sizing, and integrity decisions</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>Visual examination for welds, surfaces, and general condition checks</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Advanced UT imaging for confirmation and characterization of internal indications</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/rt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Radiography</h3>
                    <p>Volumetric inspection where specified by code or client requirement</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/infrared-thermography.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Infrared Thermography</h3>
                    <p>Thermal imaging for electrical and mechanical condition monitoring</p>
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
