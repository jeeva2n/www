<?php
// /www/includes/header.php
// Complete header with all navigation menus
?>

<!-- Main Header -->
<header class="main-header">
    <div class="header-inner">

        <!-- LOGO -->
        <a href="/www/index.php" class="logo">
            <img src="/www/assets/images/logo/alpha.png" alt="Alpha Sonix NDT Solutions">
            <div class="logo-text">
            </div>
        </a>

        <!-- NAVIGATION -->
        <nav class="main-nav" id="mainNav">
            <ul class="nav-menu">

                <!-- ===================== HOME ===================== -->
                <li><a href="/www/index.php" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Home</a></li>

                <!-- ===================== COMPANY DROPDOWN ===================== -->
                <li class="has-dropdown">
                    <a href="#">Company <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu company-drop">
                        <div class="drop-inner">
                            <div class="drop-col">
                                <h4>About Us</h4>
                                <ul>
                                    <li><a href="/www/pages/company/mission-vision-values.php">Mission, Vision &amp; Values</a></li>
                                    <li><a href="/www/pages/company/leadership-team.php">Leadership Team</a></li>
                                    <li><a href="/www/pages/company/csr-activity.php">CSR Activity</a></li>
                                    <li><a href="/www/pages/company/careers.php">Careers</a></li>
                                </ul>
                            </div>
                            <div class="drop-col">
                                <h4>Why Alpha Sonix</h4>
                                <ul>
                                    <li><a href="/www/pages/company/why-choose-us.php">Why Choose Us</a></li>
                                    <li><a href="/www/pages/company/credibility-certifications.php">Credibility &amp; Certifications</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ===================== INDUSTRIAL INSPECTIONS MEGA MENU ===================== -->
                <li class="has-dropdown mega">
                    <a href="#">Industrial Inspections <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu mega-drop">
                        <div class="drop-inner">
                            
                            <!-- COLUMN 1: Advanced NDT Services -->
                            <div class="drop-col">
                                <h4>Advanced NDT Services</h4>
                                <ul>
                                    <li><a href="/www/pages/advanced-ndt-services/paut.php">Phased Array Ultrasonic Testing (PAUT)</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/tofd.php">Time of Flight Diffraction (ToFD)</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/aut.php">Automated Ultrasonic Testing (AUT)</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/lrut.php">Long Range Ultrasonic Testing (LRUT)</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/srut.php">Short Range Ultrasonic Testing (SRUT)</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/rvi.php">Remote Visual Inspection / Videoscope</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/mfl-tank-floor.php">Magnetic Flux Leakage Tank Floor</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/rfect.php">Remote Field Eddy Current Tube</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/ect.php">Eddy Current Tube Inspection (ECT)</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/iris.php">Internal Rotary Inspection System (IRIS)</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/mfl-tube.php">Magnetic Flux Leakage Tube</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/nft-tube.php">Near-Field Testing Tube</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/infrared-thermography.php">Infrared Thermography</a></li>
                                    <li><a href="/www/pages/advanced-ndt-services/acfm.php">Alternating Current Field Measurement</a></li>
                                </ul>
                            </div>
                            
                            <!-- COLUMN 2: Specialized NDT & Lifting -->
                            <div class="drop-col">
                                <h4>Specialized NDT &amp; Asset</h4>
                                <ul>
                                    <li><a href="/www/pages/specialized-ndt/painting-coating.php">Painting &amp; Coating Inspections</a></li>
                                    <li><a href="/www/pages/specialized-ndt/cathodic-protection.php">Cathodic Protection</a></li>
                                    <li><a href="/www/pages/specialized-ndt/asset-integrity.php">Asset Integrity Inspection</a></li>
                                    <li><a href="/www/pages/specialized-ndt/octg-inspection.php">OCTG Inspection</a></li>
                                    <li><a href="/www/pages/specialized-ndt/predictive-maintenance.php">Predictive Maintenance Survey</a></li>
                                    <li><a href="/www/pages/specialized-ndt/helium-leak-testing.php">Helium Leak Testing</a></li>
                                </ul>
                                
                                <h4 style="margin-top: 15px;">Rope Access Services</h4>
                                <ul>
                                    <li><a href="/www/pages/rope-access-services/rope-access-ndt.php">Rope Access NDT</a></li>
                                    <li><a href="/www/pages/rope-access-services/rope-access-inspection.php">Rope Access Inspection</a></li>
                                    <li><a href="/www/pages/rope-access-services/confined-space.php">Confined Space Entry</a></li>
                                </ul>
                                
                                <h4 style="margin-top: 15px;">Third Party Inspections</h4>
                                <ul>
                                    <li><a href="/www/pages/third-party-inspections/vendor-inspection.php">Vendor Inspection</a></li>
                                    <li><a href="/www/pages/third-party-inspections/expediting.php">Expediting Services</a></li>
                                    <li><a href="/www/pages/third-party-inspections/quality-assurance.php">Quality Assurance</a></li>
                                </ul>
                            </div>
                            
                            <!-- COLUMN 3: Conventional NDT -->
                            <div class="drop-col">
                                <h4>Conventional NDT Services</h4>
                                <ul>
                                    <li><a href="/www/pages/conventional-ndt/ut-flaw-detection.php">Ultrasonic Testing &amp; Flaw Detection</a></li>
                                    <li><a href="/www/pages/conventional-ndt/ut-thickness.php">Ultrasonic Thickness Gauging</a></li>
                                    <li><a href="/www/pages/conventional-ndt/eddy-current.php">Eddy Current Testing &amp; Inspection</a></li>
                                    <li><a href="/www/pages/conventional-ndt/mpt.php">Magnetic Particle Testing</a></li>
                                    <li><a href="/www/pages/conventional-ndt/lpt.php">Dye-Penetrant / Liquid Penetrant</a></li>
                                    <li><a href="/www/pages/conventional-ndt/rt.php">Radiography Testing &amp; Inspection</a></li>
                                    <li><a href="/www/pages/conventional-ndt/vacuum-box.php">Vacuum Box Leak Testing</a></li>
                                    <li><a href="/www/pages/conventional-ndt/pmi.php">Positive Material Identification (PMI)</a></li>
                                    <li><a href="/www/pages/conventional-ndt/vt.php">Visual Testing</a></li>
                                    <li><a href="/www/pages/conventional-ndt/hardness.php">Hardness Testing</a></li>
                                    <li><a href="/www/pages/conventional-ndt/ferrite.php">Ferrite Testing</a></li>
                                    <li><a href="/www/pages/conventional-ndt/holiday.php">Holiday Inspection</a></li>
                                </ul>
                            </div>
                            
                            <!-- COLUMN 4: Lifting & Marine -->
                            <div class="drop-col">
                                <h4>Lifting Inspection Services</h4>
                                <ul>
                                    <li><a href="/www/pages/lifting-inspection/lifting-equipment.php">Lifting Equipment Certification</a></li>
                                    <li><a href="/www/pages/lifting-inspection/spreader-beam.php">Spreader Beam &amp; Lifting Frame</a></li>
                                    <li><a href="/www/pages/lifting-inspection/lifting-points.php">Lifting Points &amp; Pad Eye</a></li>
                                    <li><a href="/www/pages/lifting-inspection/lifting-gear.php">Lifting Gear Inspection</a></li>
                                    <li><a href="/www/pages/lifting-inspection/mobile-crane.php">Mobile Crane &amp; Crawler Crane</a></li>
                                    <li><a href="/www/pages/lifting-inspection/gantry-crane.php">Overhead Crane &amp; Gantry Crane</a></li>
                                    <li><a href="/www/pages/lifting-inspection/load-testing.php">Load Testing Services</a></li>
                                    <li><a href="/www/pages/lifting-inspection/offshore-crane.php">Offshore Crane &amp; Derrick</a></li>
                                    <li><a href="/www/pages/lifting-inspection/chain-block.php">Chain Block &amp; Hoist</a></li>
                                    <li><a href="/www/pages/lifting-inspection/forklift.php">Forklift &amp; Material Handling</a></li>
                                    <li><a href="/www/pages/lifting-inspection/man-riding.php">Man-Riding Equipment</a></li>
                                </ul>
                                
                                <h4 style="margin-top: 15px;">Marine &amp; Boiler</h4>
                                <ul>
                                    <li><a href="/www/pages/marine-boiler/fire-safety.php">Fire &amp; Safety Equipment</a></li>
                                    <li><a href="/www/pages/marine-boiler/pressure-vessel.php">Pressure Vessel &amp; Boiler</a></li>
                                    <li><a href="/www/pages/marine-boiler/ballast-tank.php">Ballast Tank &amp; Cargo Hold</a></li>
                                    <li><a href="/www/pages/marine-boiler/propeller-shaft.php">Propeller &amp; Shaft</a></li>
                                    <li><a href="/www/pages/marine-boiler/lifting-gear.php">Lifting Gear &amp; Davit</a></li>
                                    <li><a href="/www/pages/marine-boiler/load-line.php">Load Line Inspection</a></li>
                                    <li><a href="/www/pages/marine-boiler/machinery-engine.php">Machinery &amp; Engine Room</a></li>
                                    <li><a href="/www/pages/marine-boiler/ae-testing.php">Acoustic Emission Testing (AE)</a></li>
                                    <li><a href="/www/pages/marine-boiler/hull-structural.php">Hull Structural Inspection</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ===================== INDUSTRIAL HEAT TREATMENT ===================== -->
                <li class="has-dropdown">
                    <a href="#">Industrial Heat Treatment <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu heat-drop">
                        <div class="drop-inner">
                            <div class="drop-col">
                                <ul>
                                    <li><a href="/www/pages/industrial-heat-treatment/pwht.php">Post Weld Heat Treatment (PWHT)</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/stress-relieving.php">Stress Relieving Heat Treatment</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/annealing.php">Annealing</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/normalizing.php">Normalizing</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/quenching.php">Quenching &amp; Tempering</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/hardening.php">Hardening &amp; Case Hardening</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/tempering.php">Tempering</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/cryogenic.php">Cryogenic Treatment</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/hydrogen-bakeout.php">Hydrogen Bake-Out Treatment</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/solution-annealing.php">Solution Annealing</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/induction.php">Induction Heat Treatment</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/spot-pwht.php">Localized Heat Treatment (Spot PWHT)</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/external-furnace.php">External Furnace Heat Treatment</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/oil-firing.php">Oil Firing Heat Treatment Services</a></li>
                                    <li><a href="/www/pages/industrial-heat-treatment/pre-heat.php">Pre-Heat Treatment Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ===================== BUSINESS DIVISION ===================== -->
                <li class="has-dropdown">
                    <a href="#">Business Division <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu business-drop">
                        <div class="drop-inner">
                            <div class="drop-col">
                                <ul>
                                    <li><a href="/www/pages/business-division/inspection-ndt.php">Inspection &amp; NDT Services</a></li>
                                    <li><a href="/www/pages/business-division/ndt-products.php">NDT Products &amp; Accessories</a></li>
                                    <li><a href="/www/pages/business-division/reference-standards.php">Reference Standards &amp; Flawed Specimens</a></li>
                                    <li><a href="/www/pages/business-division/ndt-automation.php">NDT Automations &amp; Systems</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ===================== CONTACT ===================== -->
                <li><a href="/www/contact.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'class="active"' : ''; ?>>Contact Us</a></li>

            </ul>
        </nav>

        <!-- RIGHT SIDE -->
        <div class="header-right">
            <div class="header-contact">
                <div class="contact-icon"><i class="far fa-comments"></i></div>
                <div class="contact-text">
                    <small>Have any questions?</small>
                    <strong>Free: +91 44 4501 5884</strong>
                </div>
            </div>
            <div class="search-icon"><i class="fas fa-search"></i></div>
            <button class="mobile-menu-btn" id="mobileMenuBtn"><i class="fas fa-bars"></i></button>
        </div>
    </div>
</header>