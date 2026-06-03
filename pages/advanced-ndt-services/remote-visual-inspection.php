<?php
$base = dirname(dirname(dirname(__FILE__)));
include $base . '/includes/config.php';

// SEO Meta Data
$page_title = "Remote Visual Inspection (RVI) & Videoscope Services | Alpha Sonix NDT Solutions";
$meta_description = "Professional RVI and videoscope inspection services for internal examination of pipes, vessels, turbines, and confined spaces. HD visual documentation with borescopes, fiberscopes, and articulating videoscopes.";
$meta_keywords = "RVI inspection, remote visual inspection, videoscope, borescope, endoscope, fiberscope, internal inspection, turbine inspection, pipeline camera, visual testing, NDT camera inspection";
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
        "description": "Professional remote visual inspection services using advanced videoscopes, borescopes, and endoscopes for internal examination of inaccessible areas, equipment, and confined spaces."
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
                <p class="page-subtitle">Advanced videoscope and borescope technology for internal examination of pipes, vessels, turbines, and inaccessible areas</p>
                <div class="hero-badges">
                    <span class="badge"><i class="fas fa-video"></i> HD/4K Video Capture</span>
                    <span class="badge"><i class="fas fa-ruler"></i> 1mm-15mm Probe Diameter</span>
                    <span class="badge"><i class="fas fa-expand-arrows-alt"></i> Up to 30m Working Length</span>
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
                    <h3>Visual Access</h3>
                    <p>Inspect internal surfaces without disassembly—pipes, vessels, turbines, engines</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>HD Documentation</h3>
                    <p>Record high-definition photo and video evidence with measurement capabilities</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Cost Savings</h3>
                    <p>Eliminate expensive teardown and reassembly—80% cost reduction vs disassembly</p>
                </div>
                <div class="overview-card">
                    <div class="overview-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safe Inspection</h3>
                    <p>Examine hazardous, confined, or hard-to-reach areas without human entry</p>
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
                    <p class="lead">Remote Visual Inspection (RVI) uses advanced optical instruments—videoscopes, borescopes, fiberscopes, and industrial endoscopes—to visually examine internal surfaces, confined spaces, and inaccessible areas without requiring disassembly, system shutdown, or human entry.</p>
                    
                    <p>RVI technology employs miniature cameras, illumination sources, and articulating probe tips to navigate complex geometries, capture high-definition images and video, and provide real-time visual feedback to inspectors. Modern digital videoscopes offer features such as 4K ultra-high-definition imaging, 360° articulation, integrated measurement tools, UV fluorescence detection, and wireless streaming to remote experts.</p>

                    <p>The technique is indispensable across industries for detecting surface defects (cracks, corrosion, erosion, foreign object debris), verifying cleanliness and assembly quality, confirming component condition before costly maintenance, and documenting internal equipment status for regulatory compliance and asset management.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Non-Intrusive Access</strong>
                                <p>Inspect through existing ports, openings, or small drilled access holes (1-15mm)</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Real-Time Visualization</strong>
                                <p>Instant assessment with live video feedback and immediate decision-making capability</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Permanent Documentation</strong>
                                <p>Digital photo/video archive with annotations, measurements, and GPS coordinates</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <strong>Versatile Applications</strong>
                                <p>From 1mm diameter medical-grade scopes to 15mm industrial probes for harsh environments</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-highlight-box">
                        <i class="fas fa-industry"></i>
                        <div>
                            <strong>Industry Standard:</strong>
                            <p>RVI is the primary inspection method for turbine engines (aviation, power generation), pressure vessels, pipelines, and confined spaces per ASME, API, ASTM, and aerospace OEM specifications. Over 90% of turbine maintenance decisions rely on borescope findings, preventing billions in unnecessary engine removals annually.</p>
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
                            <span>High-definition articulating videoscope with 4-way steering and integrated LED illumination</span>
                        </div>
                    </div>
                    <div class="stats-box">
                        <div class="stat-item">
                            <span class="stat-number">4K UHD</span>
                            <span class="stat-label">Image Resolution</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30m</span>
                            <span class="stat-label">Max Working Length</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Inspections/Year</span>
                        </div>
                    </div>
                    
                    <div class="rvi-benefits">
                        <h4><i class="fas fa-star"></i> Key Benefits</h4>
                        <ul class="benefit-list">
                            <li><i class="fas fa-check"></i> Immediate results (no lab processing)</li>
                            <li><i class="fas fa-check"></i> Equipment remains operational during inspection</li>
                            <li><i class="fas fa-check"></i> Minimal surface preparation required</li>
                            <li><i class="fas fa-check"></i> Safe for hazardous/confined environments</li>
                            <li><i class="fas fa-check"></i> Shareable data for remote expert consultation</li>
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
                <p>Critical visibility without operational disruption or safety risks</p>
            </div>

            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon blue">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>No Disassembly Required</h3>
                    <p>Inspect internal components through existing access ports (inspection hatches, drain plugs, instrumentation taps) or small drilled holes without removing insulation, piping, or equipment covers. Turbine engines inspected without engine removal from aircraft/genset—saving weeks of downtime and $500,000+ per event. Heat exchangers examined without bundle extraction. Pressure vessels assessed without manway entry permits.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon green">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Rapid Inspection Speed</h3>
                    <p>Complete internal examination in hours versus days/weeks for disassembly-based inspection. Aircraft engine borescope inspection: 2-4 hours vs 200+ hours for engine removal and teardown. Pipeline internal survey: 100m/day vs excavation-based approach requiring months. Immediate findings enable same-day maintenance decisions, optimizing turnaround schedules and reducing lost production revenue.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon purple">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Permanent Visual Record</h3>
                    <p>High-definition photo (up to 12MP) and video (4K UHD) documentation provides irrefutable evidence of equipment condition. Time-stamped digital files archived for regulatory compliance (ASME, API, FAA), warranty claims, insurance purposes, and litigation support. Compare baseline to periodic inspections for damage progression tracking. Share images with OEMs, insurance adjusters, or engineering consultants instantly via cloud upload.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon orange">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Integrated Measurement</h3>
                    <p>On-screen digital measurement tools provide accurate defect sizing without physical access. Stereo measurement systems achieve ±2% accuracy for critical dimensions. Phase measurement for precise depth assessment. Pit depth, crack length, corrosion extent, gap width, and foreign object size quantified in real-time. Measurement data exported to CAD systems or integrated into inspection reports per ASME PCC-2 or API 579-1 fitness-for-service assessments.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon red">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Massive Cost Reduction</h3>
                    <p>Typical cost savings: 70-90% versus disassembly-based inspection. RVI turbine inspection: $5,000-15,000 vs $500,000+ engine removal. Heat exchanger inspection: $3,000-8,000 vs $50,000-150,000 bundle pull. Vessel internal survey: $10,000-25,000 vs $100,000-300,000 for manway entry with scaffolding, confined space permits, and gas freeing. ROI achieved on first inspection; multiplied across fleet.</p>
                </div>

                <div class="advantage-card">
                    <div class="advantage-icon teal">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3>Enhanced Safety</h3>
                    <p>Eliminates human entry into confined spaces, tanks, vessels, and hazardous atmospheres. No scaffolding, hot work, or working at heights for external access. Reduces exposure to toxic gases (H₂S, benzene, CO), high temperatures, radiation, and explosive atmospheres. Complies with OSHA confined space regulations (29 CFR 1910.146) by enabling inspection without permit-required entry. Zero confined space fatalities with RVI approach.</p>
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
                <p>Comprehensive fleet for all inspection requirements</p>
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
                        
                        <h4>Technology</h4>
                        <p>Precision optical lens system (Hopkins rod lens) providing superior image quality and resolution. Straight or angled viewing direction (0°, 30°, 45°, 70°, 90°, 110°).</p>
                        
                        <h4>Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Diameter:</strong> 1mm to 12mm</li>
                            <li><strong>Length:</strong> 50mm to 1000mm</li>
                            <li><strong>Viewing Angle:</strong> Fixed (0° to 110°)</li>
                            <li><strong>Image Quality:</strong> Highest resolution and clarity</li>
                            <li><strong>Illumination:</strong> Fiber optic or LED</li>
                            <li><strong>Durability:</strong> Rugged metal construction</li>
                        </ul>
                        
                        <h4>Best Applications</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Turbine blade inspection (aerospace, power gen)</li>
                            <li><i class="fas fa-check"></i> Engine cylinder bores and combustion chambers</li>
                            <li><i class="fas fa-check"></i> Hydraulic/pneumatic valve bodies</li>
                            <li><i class="fas fa-check"></i> Small diameter tubes and drilled passages</li>
                            <li><i class="fas fa-check"></i> Precision manufacturing QC (aerospace parts)</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Advantages:</strong> Superior optics, robust construction, autoclavable (medical)<br>
                            <strong>Limitations:</strong> Fixed viewing direction, limited length, straight-line access only
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
                        
                        <h4>Technology</h4>
                        <p>Fiber optic imaging bundle (10,000-100,000 individual fibers) transmits image from distal tip. Flexible insertion tube navigates bends and complex paths.</p>
                        
                        <h4>Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Diameter:</strong> 2mm to 10mm</li>
                            <li><strong>Length:</strong> 1m to 30m</li>
                            <li><strong>Articulation:</strong> 2-way or 4-way tip steering (up to 180°)</li>
                            <li><strong>Image Quality:</strong> Good (limited by fiber count)</li>
                            <li><strong>Illumination:</strong> Fiber optic light transmission</li>
                            <li><strong>Bending Radius:</strong> Navigates tight turns</li>
                        </ul>
                        
                        <h4>Best Applications</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Heat exchanger tube bundle internal inspection</li>
                            <li><i class="fas fa-check"></i> Piping systems with bends and elbows</li>
                            <li><i class="fas fa-check"></i> Pressure vessel nozzle and manway inspection</li>
                            <li><i class="fas fa-check"></i> Aircraft engine combustor and turbine sections</li>
                            <li><i class="fas fa-check"></i> HVAC ductwork and industrial ventilation</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Advantages:</strong> Flexible routing, long working length, cost-effective<br>
                            <strong>Limitations:</strong> Lower resolution than rigid/digital, fiber breakage over time
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
                        
                        <h4>Technology</h4>
                        <p>High-definition digital camera sensor (CCD/CMOS) at probe tip with LED illumination. Joystick-controlled articulation for precise tip positioning. Digital image processing and recording.</p>
                        
                        <h4>Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Diameter:</strong> 3mm to 15mm</li>
                            <li><strong>Length:</strong> 1m to 30m (longer custom available)</li>
                            <li><strong>Articulation:</strong> 4-way (360° rotation), some 360° continuous</li>
                            <li><strong>Image Quality:</strong> HD (1080p) to 4K UHD</li>
                            <li><strong>Illumination:</strong> High-intensity LED (adjustable)</li>
                            <li><strong>Features:</strong> Measurement, recording, UV, 3D phase</li>
                        </ul>
                        
                        <h4>Best Applications</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Gas turbine hot section (combustor, turbine blades)</li>
                            <li><i class="fas fa-check"></i> Large bore piping and pipeline internal survey</li>
                            <li><i class="fas fa-check"></i> Pressure vessel weld and corrosion assessment</li>
                            <li><i class="fas fa-check"></i> Storage tank internal floor and shell inspection</li>
                            <li><i class="fas fa-check"></i> Critical component detailed documentation</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Advantages:</strong> Best image quality, integrated measurement, digital recording, versatile<br>
                            <strong>Limitations:</strong> Higher cost, larger diameter than fiberscopes
                        </div>
                    </div>
                </div>

                <div class="equipment-type-card">
                    <div class="equipment-type-header industrial">
                        <i class="fas fa-hard-hat"></i>
                        <h3>Industrial Endoscopes</h3>
                    </div>
                    <div class="equipment-type-body">
                        <div class="equipment-image-placeholder">
                            <img src="/www/assets/images/services/rvi-industrial-endoscope.jpg" alt="Industrial Endoscope">
                        </div>
                        
                        <h4>Technology</h4>
                        <p>Ruggedized videoscope systems designed for harsh industrial environments. Chemical-resistant, high-temperature capable, explosion-proof options. Wireless image transmission for remote/hazardous areas.</p>
                        
                        <h4>Specifications</h4>
                        <ul class="spec-list">
                            <li><strong>Diameter:</strong> 5mm to 15mm (heavy-duty construction)</li>
                            <li><strong>Length:</strong> 2m to 20m</li>
                            <li><strong>Temperature:</strong> -20°C to +150°C (some to 600°C)</li>
                            <li><strong>Protection:</strong> IP67 waterproof, chemical resistant</li>
                            <li><strong>Certifications:</strong> ATEX/IECEx explosion-proof</li>
                            <li><strong>Power:</strong> Battery (8+ hours) or AC powered</li>
                        </ul>
                        
                        <h4>Best Applications</h4>
                        <ul class="app-list">
                            <li><i class="fas fa-check"></i> Petrochemical reactor vessel internals</li>
                            <li><i class="fas fa-check"></i> Power plant boiler tube and waterwall inspection</li>
                            <li><i class="fas fa-check"></i> Offshore platform confined space examination</li>
                            <li><i class="fas fa-check"></i> Nuclear containment and piping (radiation environments)</li>
                            <li><i class="fas fa-check"></i> Mining equipment and underground infrastructure</li>
                        </ul>
                        
                        <div class="equipment-note">
                            <strong>Advantages:</strong> Extreme environment capability, intrinsically safe, ruggedized<br>
                            <strong>Limitations:</strong> Larger/heavier than standard videoscopes, higher rental cost
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
                <p>Visual inspection expertise across critical equipment and infrastructure</p>
            </div>

            <div class="applications-tabs">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="turbine">Turbine Inspection</button>
                    <button class="tab-btn" data-tab="vessel">Pressure Vessels</button>
                    <button class="tab-btn" data-tab="pipeline">Pipelines</button>
                    <button class="tab-btn" data-tab="aerospace">Aerospace</button>
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
                                <p>RVI borescope inspection is mandatory for gas turbine maintenance per OEM specifications (GE, Siemens, Alstom, Rolls-Royce). Enables condition-based maintenance decisions, preventing unnecessary overhauls while detecting critical damage requiring immediate action. Power generation and aviation industries rely entirely on borescope findings for multi-million dollar maintenance decisions.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Hot Section Components:</strong> Combustor liners, transition pieces, flame holders</li>
                                    <li><i class="fas fa-check"></i> <strong>Turbine Blades & Vanes:</strong> Erosion, oxidation, thermal fatigue cracks, coating loss</li>
                                    <li><i class="fas fa-check"></i> <strong>Compressor:</strong> FOD (foreign object damage), blade tip rubs, fouling deposits</li>
                                    <li><i class="fas fa-check"></i> <strong>Rotor & Stator:</strong> Disk cracks, labyrinth seal wear, attachment points</li>
                                    <li><i class="fas fa-check"></i> <strong>Cooling Air Passages:</strong> Blockage detection, internal corrosion</li>
                                    <li><i class="fas fa-check"></i> <strong>Exhaust Section:</strong> Diffuser cracks, strut damage, liner condition</li>
                                    <li><i class="fas fa-check"></i> <strong>Bearing Compartments:</strong> Oil carbon buildup, seal degradation</li>
                                    <li><i class="fas fa-check"></i> <strong>Fuel Nozzles:</strong> Carbon deposits, tip erosion, flow passage obstructions</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-bolt"></i> Case Study: Power Plant GT Avoided Outage</h4>
                                    <p><strong>Situation:</strong> 250 MW combined cycle plant scheduled major inspection (5,000 operating hours)</p>
                                    <p><strong>Borescope Findings:</strong> Stage 1 turbine blades showed acceptable oxidation, no cracking detected</p>
                                    <p><strong>Decision:</strong> Extended operation to 8,000 hours based on visual evidence</p>
                                    <p><strong>Savings:</strong> Deferred $4.2M overhaul + avoided $1.8M revenue loss from extended outage</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">ASTM E2656</span>
                                    <span class="standard-tag">ASME PTC 46</span>
                                    <span class="standard-tag">ISO 15548-1</span>
                                    <span class="standard-tag">OEM Service Bulletins</span>
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
                                <h3>Pressure Vessel & Heat Exchanger Inspection</h3>
                                <p>RVI enables internal condition assessment of pressure-containing equipment without vessel entry, bundle extraction, or extensive scaffolding. Supports API 510 risk-based inspection programs by providing visual evidence of corrosion, cracking, and mechanical damage for remaining life calculations and fitness-for-service evaluations.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Internal Surfaces:</strong> Shell corrosion, pitting, blistering, weld integrity</li>
                                    <li><i class="fas fa-check"></i> <strong>Heat Exchanger Tubes:</strong> Internal fouling, erosion, corrosion, plugging</li>
                                    <li><i class="fas fa-check"></i> <strong>Tube Sheets:</strong> Ligament cracking, tube-to-tubesheet joint condition</li>
                                    <li><i class="fas fa-check"></i> <strong>Nozzles & Penetrations:</strong> Weld toe cracks, erosion at impingement zones</li>
                                    <li><i class="fas fa-check"></i> <strong>Internals:</strong> Tray damage (columns), catalyst bed (reactors), baffle condition</li>
                                    <li><i class="fas fa-check"></i> <strong>Cladding & Linings:</strong> Disbondment, cracking, wear-through to base metal</li>
                                    <li><i class="fas fa-check"></i> <strong>Manways & Flanges:</strong> Gasket seating surfaces, bolt hole damage</li>
                                    <li><i class="fas fa-check"></i> <strong>Support Systems:</strong> Saddle attachment welds, skirt corrosion</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-industry"></i>
                                    <div>
                                        <strong>API 510 Integration:</strong>
                                        <p>RVI satisfies API 510 internal inspection requirements for vessels with inaccessible internals or where full entry is impractical. Visual evidence combined with external UT thickness surveys provides comprehensive integrity assessment, enabling inspection interval optimization and risk category re-classification for extended run lengths.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 510</span>
                                    <span class="standard-tag">API 572</span>
                                    <span class="standard-tag">ASME Sec VIII</span>
                                    <span class="standard-tag">NBIC Part 3</span>
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
                                <p>Videoscope inspection provides direct visual assessment of pipeline internal condition, supplementing or replacing intelligent pig runs for un-piggable lines. Detects internal corrosion, scale buildup, deformation, blockages, and mechanical damage. Critical for pre-commissioning verification, integrity management, and fitness-for-service assessments.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Internal Corrosion:</strong> Pitting, general metal loss, MIC, top-of-line corrosion</li>
                                    <li><i class="fas fa-check"></i> <strong>Weld Quality:</strong> Girth weld internal profiles, lack of penetration, high-low</li>
                                    <li><i class="fas fa-check"></i> <strong>Mechanical Damage:</strong> Dents, gouges, wrinkles from installation or ground movement</li>
                                    <li><i class="fas fa-check"></i> <strong>Scale & Deposits:</strong> Paraffin, asphaltene, sulfur, iron sulfide accumulation</li>
                                    <li><i class="fas fa-check"></i> <strong>Flow Restrictions:</strong> Valve seats, control valve internals, restriction orifices</li>
                                    <li><i class="fas fa-check"></i> <strong>Pipe Condition:</strong> Ovality, collapse, buckling from external loading</li>
                                    <li><i class="fas fa-check"></i> <strong>Foreign Objects:</strong> Construction debris, weld spatter, valve components</li>
                                    <li><i class="fas fa-check"></i> <strong>Pre-Commissioning:</strong> Cleanliness verification, fabrication quality acceptance</li>
                                </ul>

                                <div class="app-highlight">
                                    <i class="fas fa-project-diagram"></i>
                                    <div>
                                        <strong>Un-Piggable Line Solution:</strong>
                                        <p>Many pipelines cannot accommodate intelligent pigs due to: diameter restrictions, tight-radius bends, multi-diameter sections, or lack of launcher/receiver facilities. Videoscope inspection from existing access points (block valves, tees, vents) provides internal visual data for these challenging systems without costly pipeline modifications or excavation campaigns.</p>
                                    </div>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">API 1163</span>
                                    <span class="standard-tag">ASME B31.4/B31.8</span>
                                    <span class="standard-tag">NACE SP0206</span>
                                    <span class="standard-tag">ISO 13623</span>
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
                                <h3>Aerospace & Aviation Engine Inspection</h3>
                                <p>Borescope inspection is the cornerstone of aircraft engine maintenance, enabling on-wing condition assessment without engine removal. FAA, EASA, and OEM maintenance programs mandate borescope inspections at specific intervals. Findings determine whether engine continues service, requires maintenance, or necessitates removal—driving multi-million dollar decisions.</p>
                                
                                <ul class="checkmark-list">
                                    <li><i class="fas fa-check"></i> <strong>Compressor Section:</strong> FOD, blade erosion, tip rubs, airfoil cracks</li>
                                    <li><i class="fas fa-check"></i> <strong>Combustion Chamber:</strong> Liner cracks, cooling hole blockage, hot spots, fuel nozzle deposits</li>
                                    <li><i class="fas fa-check"></i> <strong>High-Pressure Turbine:</strong> Blade coating loss, oxidation, sulfidation, trailing edge cracks</li>
                                    <li><i class="fas fa-check"></i> <strong>Low-Pressure Turbine:</strong> Disk post cracks, blade attachment wear, seal rubs</li>
                                    <li><i class="fas fa-check"></i> <strong>Engine Mounts & Structure:</strong> Attachment lug cracks, support beam damage</li>
                                    <li><i class="fas fa-check"></i> <strong>Auxiliary Systems:</strong> APU (auxiliary power unit) internal condition</li>
                                    <li><i class="fas fa-check"></i> <strong>Landing Gear:</strong> Actuator cylinders, brake assemblies, strut internals</li>
                                    <li><i class="fas fa-check"></i> <strong>Airframe:</strong> Wing spar boxes, control surface hinges, fuel tank internals</li>
                                </ul>

                                <div class="app-case-study">
                                    <h4><i class="fas fa-plane"></i> Case Study: Commercial Fleet Engine Management</h4>
                                    <p><strong>Airline:</strong> Regional carrier with 50-aircraft fleet (CFM56 engines)</p>
                                    <p><strong>Program:</strong> Quarterly borescope inspections per OEM recommendations</p>
                                    <p><strong>Result:</strong> Early detection of HPT blade oxidation enabled planned shop visit vs in-flight shutdown</p>
                                    <p><strong>Impact:</strong> Prevented $12M+ unscheduled engine removal, avoided flight delays/cancellations</p>
                                </div>

                                <div class="standards">
                                    <strong>Applicable Standards:</strong>
                                    <span class="standard-tag">FAA AC 43.13-1B</span>
                                    <span class="standard-tag">EASA Part-M</span>
                                    <span class="standard-tag">SAE ARP 4914</span>
                                    <span class="standard-tag">OEM Manuals (CMM, SRM)</span>
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
                <p>Comprehensive visual inspection solutions for all requirements</p>
            </div>

            <div class="capabilities-grid">
                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-camera"></i>
                        <h3>Imaging Capabilities</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Resolution:</span> HD (1080p) to 4K UHD (3840×2160)</li>
                        <li><span class="cap-label">Still Images:</span> Up to 12 megapixel capture</li>
                        <li><span class="cap-label">Video Recording:</span> MP4/AVI format, 30-60 fps</li>
                        <li><span class="cap-label">Live Streaming:</span> WiFi/Bluetooth to tablet/smartphone</li>
                        <li><span class="cap-label">Image Enhancement:</span> Brightness, contrast, sharpness adjustment</li>
                        <li><span class="cap-label">Special Modes:</span> UV fluorescence, polarization, WLI</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-ruler-combined"></i>
                        <h3>Measurement Features</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">2D Measurement:</span> Length, area, angle on-screen</li>
                        <li><span class="cap-label">Stereo Measurement:</span> ±2% accuracy for depth/width</li>
                        <li><span class="cap-label">Phase Measurement:</span> Precise depth of pits/cracks</li>
                        <li><span class="cap-label">Comparison:</span> Side-by-side before/after images</li>
                        <li><span class="cap-label">Point-to-Point:</span> Distance measurement tools</li>
                        <li><span class="cap-label">Export:</span> CAD-compatible measurement data</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-cog"></i>
                        <h3>Equipment Range</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Probe Diameters:</span> 1mm to 15mm</li>
                        <li><span class="cap-label">Working Lengths:</span> 50mm to 30 meters</li>
                        <li><span class="cap-label">Articulation:</span> 2-way, 4-way, 360° continuous</li>
                        <li><span class="cap-label">Viewing Angles:</span> 0° to 120° (direction of view)</li>
                        <li><span class="cap-label">Temperature Range:</span> -20°C to +600°C</li>
                        <li><span class="cap-label">Protection:</span> IP67 waterproof, ATEX explosion-proof</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-clipboard-list"></i>
                        <h3>Reporting & Documentation</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Digital Reports:</span> PDF with annotated images/video links</li>
                        <li><span class="cap-label">Finding Classification:</span> Severity per OEM/code criteria</li>
                        <li><span class="cap-label">GPS Tagging:</span> Location stamps for field inspections</li>
                        <li><span class="cap-label">Archive:</span> Cloud storage with 10-year retention</li>
                        <li><span class="cap-label">Client Portal:</span> Secure access to all inspection data</li>
                        <li><span class="cap-label">Expert Review:</span> Remote consultation with OEM engineers</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-industry"></i>
                        <h3>Service Options</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Field Services:</span> Onsite inspection with certified technicians</li>
                        <li><span class="cap-label">Equipment Rental:</span> Self-service with training</li>
                        <li><span class="cap-label">24/7 Availability:</span> Emergency/breakdown response</li>
                        <li><span class="cap-label">Turnaround:</span> Same-day mobilization available</li>
                        <li><span class="cap-label">Training:</span> Operator training and certification</li>
                        <li><span class="cap-label">Custom Solutions:</span> Special probe design and fabrication</li>
                    </ul>
                </div>

                <div class="capability-box">
                    <div class="capability-header">
                        <i class="fas fa-check-circle"></i>
                        <h3>Quality & Compliance</h3>
                    </div>
                    <ul class="capability-list">
                        <li><span class="cap-label">Certification:</span> ISO 9001:2015 quality management</li>
                        <li><span class="cap-label">Technicians:</strong> ASNT VT Level II/III certified</li>
                        <li><span class="cap-label">Calibration:</span> Annual traceable to NIST standards</li>
                        <li><span class="cap-label">Procedures:</span> Per ASTM E2389, ISO 15548, ASME PCC-2</li>
                        <li><span class="cap-label">Data Security:</span> GDPR/SOC 2 compliant storage</li>
                        <li><span class="cap-label">Insurance:</strong> $10M liability coverage</li>
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
                <p>Experience, equipment, and expertise for critical visual inspections</p>
            </div>

            <div class="why-choose-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Comprehensive Equipment Fleet</h3>
                    <p>50+ videoscopes, borescopes, and endoscopes from leading manufacturers (Olympus, GE, Waygate, MISTRAS). Probe diameters 1-15mm, lengths to 30m. HD/4K imaging, UV fluorescence, 3D phase measurement, wireless systems.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Certified Technicians</h3>
                    <p>ASNT VT Level II/III certified visual inspection specialists. OEM-trained on major turbine platforms (GE, Siemens, Alstom). Average 10+ years RVI experience. FAA-approved for aircraft engine borescope inspection.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industry Expertise</h3>
                    <p>1000+ turbine inspections (aero-derivative, heavy-duty, industrial). 500+ pressure vessel/heat exchanger surveys. 300+ pipeline internal examinations. Deep knowledge of OEM acceptance criteria and damage mechanisms.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Rapid Response</h3>
                    <p>24/7 emergency mobilization for critical inspections. Same-day deployment within service area. Equipped field vehicles for immediate response. Minimize downtime with efficient inspection execution.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Advanced Reporting</h3>
                    <p>Detailed reports with HD images/video, severity classification, repair recommendations, and trending analysis. Client portal access with cloud storage. Remote expert consultation via live video streaming from inspection site.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Turnkey Solutions</h3>
                    <p>Complete project management including access planning, scaffolding coordination, confined space entry support, and integration with turnaround schedules. Equipment rental with training for client self-operation also available.</p>
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
                        <h3>What is the difference between a borescope and videoscope?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>"Borescope" is a general term for optical inspection instruments. It includes: (1) Rigid borescopes with rod lens optics viewing through eyepiece or camera, (2) Flexible fiberscopes using fiber optic image bundles, (3) Videoscopes with digital camera sensors at the probe tip. "Videoscope" specifically refers to digital instruments with electronic imaging—offering superior image quality (HD/4K), recording capability, measurement tools, and easier documentation compared to traditional optical borescopes. Modern industrial inspection primarily uses videoscopes for their digital advantages.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does RVI inspection cost?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RVI costs vary by application, equipment, and duration: Turbine borescope inspection: $3,000-12,000 (depending on engine size, access complexity); Pressure vessel internal survey: $5,000-20,000 (vessel size, number of nozzles); Pipeline internal inspection: $2,000-8,000 per inspection point + $200-500/meter for extended survey; Equipment rental: $1,500-5,000/week depending on probe specifications. While RVI has upfront costs, savings are massive: turbine inspection eliminates $500,000+ engine removal; vessel inspection avoids $100,000-300,000 entry preparation and bundle extraction. ROI typically 10:1 to 50:1.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What minimum size opening is required for RVI?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Minimum access depends on probe diameter and articulation mechanism: Ultra-miniature scopes: 1-2mm opening (medical-grade); Standard industrial: 4-6mm typical (borescope ports, drain plugs, 1/4" NPT taps); Heavy-duty videoscopes: 8-15mm (inspection hatches, 1/2"-3/4" ports); Articulating probes: Add 1-2mm clearance for articulation housing. If existing access is insufficient, we can drill small inspection ports (typically 6-12mm) which are easily plugged/welded afterward—still far less invasive than equipment disassembly. Many vessels, turbines, and systems have factory-installed borescope ports for this purpose.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How accurate are videoscope measurements?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Measurement accuracy depends on technology used: 2D on-screen measurement (single camera): ±5-10% for length/area when target distance is known; Stereo measurement (dual cameras): ±2-3% for 3D dimensions—suitable for most industrial assessments; Phase measurement (structured light): ±1-2% for depth measurements—approaching conventional UT accuracy; Comparison measurement: <±1mm when comparing to reference standards or previous inspections. For critical measurements requiring ±0.1mm accuracy, videoscope identifies defect location/extent then focused conventional NDT (UT/PAUT) performs precise sizing. This combination optimizes efficiency and accuracy.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can RVI detect cracks and other defects?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>RVI excels at detecting: Surface-breaking cracks: Visible cracks >0.1mm opening width (aided by dye penetrant pre-treatment if needed); Corrosion/erosion: Pitting, general metal loss, coating loss, discoloration from overheating; Mechanical damage: Dents, gouges, impact marks, deformation; Fouling/deposits: Scale, carbon, foreign objects, blockages; Assembly issues: Missing parts, incorrect installation, contact/rubs. RVI limitations: Cannot detect sub-surface defects (requires UT/RT/ET); Crack depth measurement limited (use PAUT/TOFD for through-wall sizing); Small tight cracks in low-contrast conditions challenging (UV fluorescence helps). RVI is often first-line screening directing focused advanced NDT to specific areas requiring detailed characterization.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide equipment rental with training?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, comprehensive rental program available: (1) Equipment + Operator: Turnkey service with our certified technician performing inspection, analysis, and reporting; (2) Equipment Rental Only: Rent videoscope with comprehensive training for your personnel (4-8 hour course covering equipment operation, image interpretation basics, maintenance); (3) Long-term Rental: Extended rental (months) for clients with ongoing inspection needs—we provide training, technical support, and periodic equipment maintenance. Rental includes: complete system with all accessories, carry case, calibration certificate, user manual, 24/7 technical support hotline. This enables clients to perform routine inspections in-house while calling us for complex assessments requiring advanced expertise.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What documentation do you provide after inspection?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Comprehensive RVI reports include: (1) Executive summary with inspection scope, access points, findings summary, recommendations; (2) Annotated images showing each defect/area of interest with measurement overlays and severity classification; (3) Video recordings of complete inspection path for future reference; (4) Comparison images if baseline/previous inspection data available; (5) Defect register table with location, size, type, severity, and recommended action; (6) Technical appendix with equipment specs, calibration data, technician qualifications, applicable standards. Deliverables: PDF report + digital media files (photos/videos) + cloud portal access. Turnaround: Preliminary findings same-day; final report within 48-72 hours. Data retained 10+ years for trending analysis.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does RVI inspection take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Inspection duration varies by application: Turbine borescope (single engine): 2-6 hours depending on sections inspected and findings; Heat exchanger tube bundle (100 tubes): 4-8 hours for systematic examination; Pressure vessel internal survey: 3-12 hours based on vessel size, nozzle count, and areas of interest; Pipeline internal inspection: 50-150 meters/day depending on diameter, surface condition, and defect documentation requirements. Compare to alternatives: Engine removal and teardown: 200+ hours; Heat exchanger bundle extraction: 40-80 hours; Vessel entry with scaffolding: 80-120+ hours. RVI delivers 90-95% time savings while providing visual evidence previously unavailable without disassembly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>See Inside Without Taking Apart</h2>
                <p>High-definition visual inspection with 80% cost savings vs disassembly</p>
                <center>
                    <a href="tel:+914445015884" class="btn btn-white"><i class="fas fa-phone"></i> Call: +91 44 4501 5884</a>
                    <a href="mailto:info@alphasonix.com" class="btn btn-outline"><i class="fas fa-envelope"></i> Request RVI Service</a>
                </center>
                <div class="cta-features">
                    <span><i class="fas fa-check"></i> Same-Day Mobilization</span>
                    <span><i class="fas fa-check"></i> Free Feasibility Assessment</span>
                    <span><i class="fas fa-check"></i> Equipment Rental Available</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== RELATED SERVICES ===================== -->
    <section class="related-services">
        <div class="container">
            <div class="section-header center">
                <h2>Complementary Inspection Services</h2>
                <p>Complete NDT solutions for asset integrity</p>
            </div>

            <div class="related-grid">
                <a href="/www/pages/conventional-ndt/vt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Testing (VT)</h3>
                    <p>Conventional visual inspection and examination services</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/paut.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-grip-horizontal"></i>
                    </div>
                    <h3>PAUT</h3>
                    <p>Phased Array UT for precise defect sizing and characterization</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/conventional-ndt/rt.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Radiography</h3>
                    <p>Internal volumetric examination with X-ray and gamma ray</p>
                    <span class="learn-more">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>

                <a href="/www/pages/advanced-ndt-services/infrared-thermography.php" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                    <h3>Infrared Thermography</h3>
                    <p>Thermal imaging for electrical, mechanical, and building diagnostics</p>
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