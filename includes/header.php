<?php
// /www/includes/header.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Sonix NDT Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/www/assets/css/company-pages.css">
    <link rel="stylesheet" href="/www/assets/css/styles.css">
</head>

<body>

    <header class="main-header" id="mainHeader">
        <div class="header-inner">

            <!-- ===================== LOGO ===================== -->
            <a href="/www/index.php" class="logo">
                <img src="/www/assets/images/logo/alpha.png" alt="Alpha Sonix NDT Solutions">
                <div class="logo-text">
                </div>
            </a>

            <!-- ===================== DESKTOP NAVIGATION ===================== -->
            <nav class="main-nav" id="mainNav">
                <ul class="nav-menu">

                    <!-- HOME -->
                    <li>
                        <a href="/www/index.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : ''; ?>">
                            Home
                        </a>
                    </li>

                    <!-- COMPANY -->
                    <?php $isCompanyActive = (strpos($_SERVER['REQUEST_URI'], '/pages/company/') !== false); ?>
                    <li class="has-dropdown <?php echo $isCompanyActive ? 'active-parent' : ''; ?>">
                        <a href="#" class="<?php echo $isCompanyActive ? 'active' : ''; ?>">
                            Company <i class="fas fa-chevron-down"></i>
                        </a>
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

                    <!-- INDUSTRIAL INSPECTIONS MEGA MENU -->
                    <?php 
                    $isIndustrialActive = (strpos($_SERVER['REQUEST_URI'], '/pages/advanced-ndt-services/') !== false ||
                                          strpos($_SERVER['REQUEST_URI'], '/pages/specialized-ndt/') !== false ||
                                          strpos($_SERVER['REQUEST_URI'], '/pages/third-party-inspections/') !== false ||
                                          strpos($_SERVER['REQUEST_URI'], '/pages/lifting-inspection-services/') !== false ||
                                          strpos($_SERVER['REQUEST_URI'], '/pages/conventional-ndt/') !== false ||
                                          strpos($_SERVER['REQUEST_URI'], '/pages/rope-access-services/') !== false ||
                                          strpos($_SERVER['REQUEST_URI'], '/pages/marine-boiler-inspections/') !== false);
                    ?>
                    <li class="has-dropdown mega <?php echo $isIndustrialActive ? 'active-parent' : ''; ?>">
                        <a href="#" class="<?php echo $isIndustrialActive ? 'active' : ''; ?>">
                            Industrial Inspections <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu mega-drop">
                            <div class="drop-inner">
                                <!-- Column 1 - Advanced NDT Services -->
                                <div class="drop-col">
                                    <h4>Advanced NDT Services</h4>
                                    <ul>
                                        <li><a href="/www/pages/advanced-ndt-services/phased-array-ut.php">Phased Array Ultrasonic Testing (PAUT)</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/time-of-flight-diffraction.php">Time of Flight Diffraction (ToFD)</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/automated-ut.php">Automated Ultrasonic Testing (AUT)</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/long-range-ut.php">Long Range Ultrasonic Testing (LRUT)</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/short-range-ut.php">Short Range Ultrasonic Testing (SRUT)</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/remote-visual-inspection.php">Remote Visual Inspection / Videoscope</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/magnetic-flux-leakage.php">Magnetic Flux Leakage Tank Floor</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/remote-field-eddy-current.php">Remote Field Eddy Current Tube</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/eddy-current-tube.php">Eddy Current Tube Inspection (ECT)</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/iris-tube-inspection.php">Internal Rotary Inspection System (IRIS)</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/magnetic-flux-leakage-tube.php">Magnetic Flux Leakage Tube</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/near-field-testing.php">Near-Field Testing Tube</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/infrared-thermography.php">Infrared Thermography</a></li>
                                        <li><a href="/www/pages/advanced-ndt-services/alternating-current-field-measurement.php">Alternating Current Field Measurement</a></li>
                                    </ul>
                                </div>

                                <!-- Column 2 - Specialized NDT & Rope Access -->
                                <div class="drop-col">
                                    <h4>Specialized NDT &amp; Asset</h4>
                                    <ul>
                                        <li><a href="/www/pages/specialized-ndt/painting-coating-inspections.php">Painting &amp; Coating Inspections</a></li>
                                        <li><a href="/www/pages/specialized-ndt/cathodic-protection.php">Cathodic Protection</a></li>
                                        <li><a href="/www/pages/specialized-ndt/asset-integrity-inspection.php">Asset Integrity Inspection</a></li>
                                        <li><a href="/www/pages/specialized-ndt/octg-inspection.php">OCTG Inspection</a></li>
                                        <li><a href="/www/pages/specialized-ndt/predictive-maintenance-survey.php">Predictive Maintenance Survey</a></li>
                                        <li><a href="/www/pages/specialized-ndt/helium-leak-testing.php">Helium Leak Testing</a></li>
                                    </ul>
                                    <h4 style="margin-top:14px;">Rope Access Services</h4>
                                    <ul>
                                        <li><a href="/www/pages/rope-access-services/rope-access-et.php">Rope Access Eddy Current Testing (ET)</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-flare-stack.php">Rope Access Flare Stack Services</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-mt.php">Rope Access Magnetic Particle Testing (MT)</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-ndt.php">Rope Access NDT</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-paut-tofd.php">Rope Access PAUT &amp; TOFD</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-pipeline.php">Rope Access Pipeline Services</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-pt.php">Rope Access Penetrant Testing (PT)</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-rt.php">Rope Access Radiographic Testing (RT)</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-thermal-imaging.php">Rope Access Thermal Imaging</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-ut.php">Rope Access Ultrasonic Testing (UT)</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-vt.php">Rope Access Visual Testing (VT)</a></li>
                                        <li><a href="/www/pages/rope-access-services/rope-access-wind-turbine.php">Rope Access Wind Turbine Services</a></li>
                                    </ul>
                                </div>

                                <!-- Column 3 - Third Party Inspection Services -->
                                <div class="drop-col">
                                    <h4>Third Party Inspection Services</h4>
                                    <ul>
                                        <li><a href="/www/pages/third-party-inspections/asset-integrity-rbi.php">Asset Integrity Inspection &amp; Risk Based Inspection (RBI)</a></li>
                                        <li><a href="/www/pages/third-party-inspections/shutdown-turnaround.php">Shutdown &amp; Turnaround Inspection Services</a></li>
                                        <li><a href="/www/pages/third-party-inspections/octg-inspection.php">OCTG (Oil Country Tubular Goods) Inspection</a></li>
                                        <li><a href="/www/pages/third-party-inspections/pipeline-equipment.php">Pipeline &amp; Process Equipment Inspection</a></li>
                                        <li><a href="/www/pages/third-party-inspections/electrical-instrumentation.php">Electrical &amp; Instrumentation Services</a></li>
                                        <li><a href="/www/pages/third-party-inspections/mechanical-structural.php">Mechanical &amp; Structural Inspection</a></li>
                                        <li><a href="/www/pages/third-party-inspections/vendor-inspection.php">Vendor Inspection &amp; Expediting Services</a></li>
                                        <li><a href="/www/pages/third-party-inspections/coating-corrosion-protection.php">Coating &amp; Corrosion Protection Inspection</a></li>
                                        <li><a href="/www/pages/third-party-inspections/welding-fabrication-inspection.php">Welding &amp; Fabrication Inspection</a></li>
                                    </ul>
                                    <h4 style="margin-top:14px;">Marine &amp; Boiler</h4>
                                    <ul>
                                        <li><a href="/www/pages/marine-boiler-inspections/fire-safety-equipment.php">Fire &amp; Safety Equipment</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/pressure-vessel-boiler.php">Pressure Vessel &amp; Boiler</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/ballast-tank-cargo-hold.php">Ballast Tank &amp; Cargo Hold</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/propeller-shaft-inspection.php">Propeller &amp; Shaft Inspection</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/lifting-gear-davit.php">Lifting Gear &amp; Davit</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/load-line-inspection.php">Load Line Inspection</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/machinery-engine-room.php">Machinery &amp; Engine Room</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/acoustic-emission-testing.php">Acoustic Emission Testing (AE)</a></li>
                                        <li><a href="/www/pages/marine-boiler-inspections/hull-structural-inspection.php">Hull Structural Inspection</a></li>
                                    </ul>
                                </div>

                                <!-- Column 4 - Lifting Inspection Services -->
                                <div class="drop-col">
                                    <h4>Lifting Inspection Services</h4>
                                    <ul>
                                        <li><a href="/www/pages/lifting-inspection-services/lifting-equipment-certification.php">Lifting Equipment Inspection &amp; Certification</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/spreader-beam-inspection.php">Spreader Beam &amp; Lifting Frame Inspection</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/lifting-points-inspection.php">Lifting Points &amp; Pad Eye Inspection</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/lifting-gear-inspection.php">Lifting Gear Inspection (Accessories &amp; Loose Lifting Equipment)</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/mobile-crane-inspection.php">Mobile Crane &amp; Crawler Crane Inspection</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/overhead-crane-inspection.php">Overhead Crane &amp; Gantry Crane Inspection</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/load-testing-services.php">Load Testing Services</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/offshore-crane-inspection.php">Offshore Crane &amp; Derrick Inspection</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/chain-block-hoist-inspection.php">Chain Block &amp; Hoist Inspection</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/forklift-inspection.php">Forklift &amp; Material Handling Equipment Inspection</a></li>
                                        <li><a href="/www/pages/lifting-inspection-services/man-riding-equipment.php">Man-Riding Equipment Inspection</a></li>
                                    </ul>
                                </div>

                                <!-- Column 5 - Conventional NDT Services -->
                                <div class="drop-col">
                                    <h4>Conventional NDT Services</h4>
                                    <ul>
                                        <li><a href="/www/pages/conventional-ndt/ultrasonic-testing-flaw-detection-inspection.php">Ultrasonic Testing &amp; Flaw Detection</a></li>
                                        <li><a href="/www/pages/conventional-ndt/ultrasonic-thickness-gauging.php">Ultrasonic Thickness Gauging</a></li>
                                        <li><a href="/www/pages/conventional-ndt/eddy-current-testing.php">Eddy Current Testing &amp; Inspection</a></li>
                                        <li><a href="/www/pages/conventional-ndt/magnetic-particle-testing.php">Magnetic Particle Testing</a></li>
                                        <li><a href="/www/pages/conventional-ndt/dye-penetrant-testing.php">Dye-Penetrant / Liquid Penetrant</a></li>
                                        <li><a href="/www/pages/conventional-ndt/radiography-testing.php">Radiography Testing &amp; Inspection</a></li>
                                        <li><a href="/www/pages/conventional-ndt/vacuum-box-leak-testing.php">Vacuum Box Leak Testing</a></li>
                                        <li><a href="/www/pages/conventional-ndt/positive-material-identification.php">Positive Material Identification (PMI)</a></li>
                                        <li><a href="/www/pages/conventional-ndt/visual-testing.php">Visual Testing</a></li>
                                        <li><a href="/www/pages/conventional-ndt/hardness-testing.php">Hardness Testing</a></li>
                                        <li><a href="/www/pages/conventional-ndt/ferrite-testing.php">Ferrite Testing</a></li>
                                        <li><a href="/www/pages/conventional-ndt/holiday-inspection.php">Holiday Inspection</a></li>
                                    </ul>
                                </div>
                            </div> <!-- END drop-inner -->
                        </div> <!-- END mega-drop -->
                    </li> <!-- END Industrial Inspections -->

                    <!-- INDUSTRIAL HEAT TREATMENT -->
                   <?php 
                    $currentUrl = $_SERVER['REQUEST_URI'];
                    $isHeatActive = (strpos($currentUrl, '/pages/industrial-heat-treatment/') !== false);
                    ?>
                    <li class="has-dropdown">
                        <a href="#" <?php echo $isHeatActive ? 'class="active"' : ''; ?>>
                            Industrial Heat Treatment <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu heat-drop">
                            <div class="drop-inner">
                                <div class="drop-col">
                                    <ul>
                                        <li><a href="/www/pages/industrial-heat-treatment/annealing.php">Annealing</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/cryogenic-treatment.php">Cryogenic Treatment</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/external-furnace-treatment.php">External Furnace Heat Treatment</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/hardening-case-hardening.php">Hardening &amp; Case Hardening</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/hydrogen-bake-out.php">Hydrogen Bake-Out</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/induction-heat-treatment.php">Induction Heat Treatment</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/localized-heat-treatment.php">Localized Heat Treatment</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/normalizing.php">Normalizing</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/oil-firing-treatment.php">Oil Firing Treatment</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/post-weld-heat-treatment.php">Post Weld Heat Treatment (PWHT)</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/pre-heat-treatment.php">Pre Heat Treatment</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/quenching-tempering.php">Quenching &amp; Tempering</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/solution-annealing.php">Solution Annealing</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/stress-relieving.php">Stress Relieving</a></li>
                                        <li><a href="/www/pages/industrial-heat-treatment/temparing.php">Tempering</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- BUSINESS DIVISION -->
                    <?php $isBusinessActive = (strpos($_SERVER['REQUEST_URI'], '/pages/business-division/') !== false); ?>
                    <li class="has-dropdown">
                        <a href="#" class="<?php echo $isBusinessActive ? 'active' : ''; ?>">
                            Business Division <i class="fas fa-chevron-down"></i>
                        </a>
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

                    <!-- CONTACT -->
                    <li>
                        <a href="/www/contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : ''; ?>">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- ===================== HEADER RIGHT ===================== -->
            <div class="header-right">
                <div class="header-contact">
                    <div class="contact-icon">
                        <i class="far fa-comments"></i>
                    </div>
                    <div class="contact-text">
                        <small>Have any questions?</small>
                        <strong>Free: +91 44 4501 5884</strong>
                    </div>
                </div>
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Open Navigation Menu" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>


    <!-- Mobile Navigation Overlay & Sidebar -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>
    <div class="mobile-nav-sidebar" id="mobileNavSidebar"></div>

    <script src="/www/assets/js/script.js"></script>
</body>

</html>