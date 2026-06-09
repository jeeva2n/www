document.addEventListener('DOMContentLoaded', function () {

    // ===================== MOBILE MENU =====================
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const body = document.body;
    let mobileMenuOpen = false;

    function createMobileNavigation() {
        const existingOverlay = document.getElementById('mobileNavOverlay');
        const existingSidebar = document.getElementById('mobileNavSidebar');
        if (existingOverlay) existingOverlay.remove();
        if (existingSidebar) existingSidebar.remove();

        const overlay = document.createElement('div');
        overlay.className = 'mobile-nav-overlay';
        overlay.id = 'mobileNavOverlay';

        const sidebar = document.createElement('div');
        sidebar.className = 'mobile-nav-sidebar';
        sidebar.id = 'mobileNavSidebar';

        sidebar.innerHTML = `
            <div class="mobile-nav-header">
                <span>Navigation Menu</span>
                <button class="mobile-nav-close" id="mobileNavClose" type="button" aria-label="Close Menu">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <ul class="mobile-nav-menu">
                <li>
                    <a href="/www/index.php"><span>Home</span></a>
                </li>
                <li class="has-dropdown">
                    <a href="#" class="mobile-dropdown-trigger">
                        <span>Company</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="mobile-submenu">
                        <div class="mobile-submenu-header">About Us</div>
                        <ul>
                            <li><a href="/www/pages/company/mission-vision-values.php">Mission, Vision &amp; Values</a></li>
                            <li><a href="/www/pages/company/leadership-team.php">Leadership Team</a></li>
                            <li><a href="/www/pages/company/csr-activity.php">CSR Activity</a></li>
                            <li><a href="/www/pages/company/careers.php">Careers</a></li>
                        </ul>
                        <div class="mobile-submenu-header">Why Alpha Sonix</div>
                        <ul>
                            <li><a href="/www/pages/company/why-choose-us.php">Why Choose Us</a></li>
                            <li><a href="/www/pages/company/credibility-certifications.php">Credibility &amp; Certifications</a></li>
                        </ul>
                    </div>
                </li>
                <li class="has-dropdown">
                    <a href="#" class="mobile-dropdown-trigger">
                        <span>Industrial Inspections</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="mobile-submenu">
                        <div class="mobile-submenu-header">Advanced NDT Services</div>
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
                        <div class="mobile-submenu-header">Specialized NDT &amp; Asset</div>
                        <ul>
                                    <li><a href="/www/pages/specialized-ndt/painting-coating-inspections.php">Painting &amp; Coating Inspections</a></li>
                                        <li><a href="/www/pages/specialized-ndt/cathodic-protection.php">Cathodic Protection</a></li>
                                        <li><a href="/www/pages/specialized-ndt/asset-integrity-inspection.php">Asset Integrity Inspection</a></li>
                                        <li><a href="/www/pages/specialized-ndt/octg-inspection.php">OCTG Inspection</a></li>
                                        <li><a href="/www/pages/specialized-ndt/predictive-maintenance-survey.php">Predictive Maintenance Survey</a></li>
                                        <li><a href="/www/pages/specialized-ndt/helium-leak-testing.php">Helium Leak Testing</a></li>
                        </ul>
                        <div class="mobile-submenu-header">Rope Access Services</div>
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
                        <div class="mobile-submenu-header">Conventional NDT Services</div>
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
                        <div class="mobile-submenu-header">Lifting Inspection Services</div>
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
                         <div class="mobile-submenu-header">Third Party Services</div>
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
                        <div class="mobile-submenu-header">Marine &amp; Boiler</div>
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
                </li>
                <li class="has-dropdown">
                    <a href="#" class="mobile-dropdown-trigger">
                        <span>Industrial Heat Treatment</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="mobile-submenu">
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
                </li>
                <li class="has-dropdown">
                    <a href="#" class="mobile-dropdown-trigger">
                        <span>Business Division</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="mobile-submenu">
                        <ul>
                            <li><a href="/www/pages/business-division/inspection-ndt.php">Inspection &amp; NDT Services</a></li>
                            <li><a href="/www/pages/business-division/ndt-products.php">NDT Products &amp; Accessories</a></li>
                            <li><a href="/www/pages/business-division/reference-standards.php">Reference Standards &amp; Flawed Specimens</a></li>
                            <li><a href="/www/pages/business-division/ndt-automation.php">NDT Automations &amp; Systems</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/www/contact.php"><span>Contact Us</span></a>
                </li>
            </ul>
        `;

        document.body.appendChild(overlay);
        document.body.appendChild(sidebar);
        return { overlay, sidebar };
    }

    const { overlay, sidebar } = createMobileNavigation();

    function openMobileMenu() {
        mobileMenuOpen = true;
        overlay.classList.add('active');
        sidebar.classList.add('active');
        body.style.overflow = 'hidden';
        body.classList.add('mobile-menu-open');
        if (mobileBtn) {
            mobileBtn.classList.add('active');
            mobileBtn.innerHTML = '<i class="fas fa-times"></i>';
            mobileBtn.setAttribute('aria-expanded', 'true');
        }
    }

    function closeMobileMenu() {
        mobileMenuOpen = false;
        overlay.classList.remove('active');
        sidebar.classList.remove('active');
        body.style.overflow = '';
        body.classList.remove('mobile-menu-open');
        if (mobileBtn) {
            mobileBtn.classList.remove('active');
            mobileBtn.innerHTML = '<i class="fas fa-bars"></i>';
            mobileBtn.setAttribute('aria-expanded', 'false');
        }
        sidebar.querySelectorAll('.has-dropdown.mobile-open').forEach(function (item) {
            item.classList.remove('mobile-open');
            const icon = item.querySelector('.mobile-dropdown-trigger i');
            if (icon) icon.style.transform = '';
        });
    }

    function toggleMobileMenu() {
        mobileMenuOpen ? closeMobileMenu() : openMobileMenu();
    }

    if (mobileBtn) {
        mobileBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileMenu();
        });
    }

    // Close button
    sidebar.addEventListener('click', function (e) {
        if (e.target.closest('#mobileNavClose')) {
            e.preventDefault();
            e.stopPropagation();
            closeMobileMenu();
        }
    });

    // Overlay click
    overlay.addEventListener('click', closeMobileMenu);

    // Dropdown triggers
    sidebar.addEventListener('click', function (e) {
        const trigger = e.target.closest('.mobile-dropdown-trigger');
        if (!trigger) return;
        e.preventDefault();
        e.stopPropagation();

        const parentLi = trigger.parentElement;
        const isOpen = parentLi.classList.contains('mobile-open');
        const icon = trigger.querySelector('i');

        sidebar.querySelectorAll('.has-dropdown.mobile-open').forEach(function (item) {
            if (item !== parentLi) {
                item.classList.remove('mobile-open');
                const otherIcon = item.querySelector('.mobile-dropdown-trigger i');
                if (otherIcon) otherIcon.style.transform = '';
            }
        });

        if (isOpen) {
            parentLi.classList.remove('mobile-open');
            if (icon) icon.style.transform = '';
        } else {
            parentLi.classList.add('mobile-open');
            if (icon) icon.style.transform = 'rotate(180deg)';
            setTimeout(function () {
                const submenu = parentLi.querySelector('.mobile-submenu');
                if (submenu) submenu.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 300);
        }
    });

    // Close menu on link click
    sidebar.addEventListener('click', function (e) {
        if (e.target.closest('.mobile-submenu a')) closeMobileMenu();
    });

    sidebar.addEventListener('click', function (e) {
        const link = e.target.closest('.mobile-nav-menu > li > a:not(.mobile-dropdown-trigger)');
        if (link) closeMobileMenu();
    });

    overlay.addEventListener('touchmove', function (e) { e.preventDefault(); }, { passive: false });

    // ===================== HERO SLIDER =====================
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.custom-prev-btn');
    const nextBtn = document.querySelector('.custom-next-btn');

    if (slides.length > 0) {
        let current = 0;
        let timer;

        function goTo(index) {
            slides[current].classList.remove('active');
            if (dots[current]) dots[current].classList.remove('active');
            current = (index + slides.length) % slides.length;
            slides[current].classList.add('active');
            if (dots[current]) dots[current].classList.add('active');
        }

        function startAuto() { timer = setInterval(function () { goTo(current + 1); }, 5000); }
        function stopAuto() { clearInterval(timer); }
        function resetAuto() { stopAuto(); startAuto(); }

        if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1); resetAuto(); });
        if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1); resetAuto(); });
        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () { goTo(i); resetAuto(); });
        });

        let touchStartX = 0;
        const hero = document.querySelector('.hero');
        if (hero) {
            hero.addEventListener('touchstart', function (e) {
                touchStartX = e.touches[0].clientX;
            }, { passive: true });
            hero.addEventListener('touchend', function (e) {
                const diff = touchStartX - e.changedTouches[0].clientX;
                if (Math.abs(diff) > 50) {
                    goTo(diff > 0 ? current + 1 : current - 1);
                    resetAuto();
                }
            }, { passive: true });
        }

        startAuto();
    }

    // ===================== ACTIVE NAV - FIXED FOR HEAT TREATMENT =====================
    // Wait a bit to ensure PHP classes are applied
    setTimeout(function() {
        const currentPath = window.location.pathname;
        
        // Debug: Log current path
        console.log('Current Path:', currentPath);
        
        // Function to check if current page is in any section
        function isInSection(paths) {
            for (let i = 0; i < paths.length; i++) {
                if (currentPath.includes(paths[i])) {
                    return true;
                }
            }
            return false;
        }
        
        // FIRST: Keep PHP-added active classes, don't remove them
        // Only add additional active classes if needed
        
        // HOME PAGE - ensure home has active
        if (currentPath === '/' || currentPath === '/www/index.php' || currentPath.includes('index.php')) {
            const homeLink = document.querySelector('.nav-menu a[href="/www/index.php"]');
            if (homeLink && !homeLink.classList.contains('active')) {
                homeLink.classList.add('active');
            }
        }
        
        // CONTACT PAGE
        if (currentPath.includes('contact.php')) {
            const contactLink = document.querySelector('.nav-menu a[href="/www/contact.php"]');
            if (contactLink && !contactLink.classList.contains('active')) {
                contactLink.classList.add('active');
            }
        }
        
        // INDUSTRIAL HEAT TREATMENT SECTION - Force active class
        if (currentPath.includes('/pages/industrial-heat-treatment/')) {
            const heatMenu = document.querySelector('.nav-menu li.has-dropdown');
            if (heatMenu) {
                // Find the Industrial Heat Treatment link
                const allNavLinks = document.querySelectorAll('.nav-menu > li > a');
                for (let i = 0; i < allNavLinks.length; i++) {
                    const link = allNavLinks[i];
                    if (link.textContent.trim() === 'Industrial Heat Treatment') {
                        link.classList.add('active');
                        console.log('Added active to Industrial Heat Treatment');
                        break;
                    }
                }
            }
        }
        
        // COMPANY SECTION
        if (isInSection(['/pages/company/'])) {
            const companyLinks = document.querySelectorAll('.nav-menu > li > a');
            for (let i = 0; i < companyLinks.length; i++) {
                if (companyLinks[i].textContent.trim() === 'Company') {
                    companyLinks[i].classList.add('active');
                    break;
                }
            }
        }
        
        // INDUSTRIAL INSPECTIONS SECTION
        if (isInSection([
            '/pages/advanced-ndt-services/',
            '/pages/specialized-ndt/',
            '/pages/third-party-inspections/',
            '/pages/lifting-inspection-services/',
            '/pages/conventional-ndt/',
            '/pages/rope-access-services/',
            '/pages/marine-boiler-inspections/'
        ])) {
            const industrialLinks = document.querySelectorAll('.nav-menu > li > a');
            for (let i = 0; i < industrialLinks.length; i++) {
                if (industrialLinks[i].textContent.trim() === 'Industrial Inspections') {
                    industrialLinks[i].classList.add('active');
                    break;
                }
            }
        }
        
        // BUSINESS DIVISION SECTION
        if (isInSection(['/pages/business-division/'])) {
            const businessLinks = document.querySelectorAll('.nav-menu > li > a');
            for (let i = 0; i < businessLinks.length; i++) {
                if (businessLinks[i].textContent.trim() === 'Business Division') {
                    businessLinks[i].classList.add('active');
                    break;
                }
            }
        }
        
        // Debug: Log which links have active class
        document.querySelectorAll('.nav-menu > li > a').forEach(function(link) {
            if (link.classList.contains('active')) {
                console.log('Active link:', link.textContent.trim());
            }
        });
        
    }, 100);

    // ===================== SCROLL ANIMATIONS =====================
    const observerOpts = { threshold: 0.12, rootMargin: '0px 0px -40px 0px' };

    const animObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                animObserver.unobserve(entry.target);
            }
        });
    }, observerOpts);

    setTimeout(function () {
        document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-up').forEach(function (el) {
            animObserver.observe(el);
        });
        document.querySelectorAll(
            '.company-section, .services-section, .industries-section, .case-studies-section, .testimonials-section'
        ).forEach(function (section) {
            section.classList.add('section-reveal');
            animObserver.observe(section);
        });
    }, 100);


    // ===================== VIDEO SECTION =====================
    const videoSection = document.getElementById('videoSection');
    const bgVideo = document.getElementById('bgVideo');
    const videoPlayBtn = document.getElementById('videoPlayBtn');
    const videoModal = document.getElementById('videoModal');
    const videoModalClose = document.getElementById('videoModalClose');
    const videoModalOver = document.getElementById('videoModalOverlay');
    const mainVideo = document.getElementById('mainVideo');

    function closeVideoModal() {
        if (!videoModal) return;
        videoModal.classList.remove('open');
        body.style.overflow = '';
        if (mainVideo) { mainVideo.pause(); mainVideo.currentTime = 0; mainVideo.muted = true; }
    }

    if (videoSection && bgVideo) {
        const vidObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    videoSection.classList.add('in-view');
                    bgVideo.play().then(function () {
                        bgVideo.classList.add('playing');
                        videoSection.classList.add('video-ready');
                    }).catch(function () { });
                } else {
                    bgVideo.pause();
                    bgVideo.classList.remove('playing');
                    videoSection.classList.remove('video-ready', 'in-view');
                }
            });
        }, { threshold: 0.25 });
        vidObs.observe(videoSection);
        bgVideo.muted = true;
        bgVideo.volume = 0;
    }

    if (videoPlayBtn && videoModal && mainVideo) {
        videoPlayBtn.addEventListener('click', function () {
            videoModal.classList.add('open');
            body.style.overflow = 'hidden';
            mainVideo.muted = false;
            mainVideo.volume = 1;
            mainVideo.currentTime = 0;
            mainVideo.play();
        });
    }

    if (videoModalClose) videoModalClose.addEventListener('click', closeVideoModal);
    if (videoModalOver) videoModalOver.addEventListener('click', closeVideoModal);

    // ===================== TESTIMONIALS SLIDER =====================
    const testiTrack = document.getElementById('testiTrack');
    const testiDots = document.querySelectorAll('.testi-dot');

    if (testiTrack && testiDots.length) {
        let testiCurrent = 0;
        const testiTotal = testiDots.length;
        let testiTimer;
        let dragStartX = 0;
        let isDragging = false;

        function testiGoTo(index) {
            testiCurrent = (index + testiTotal) % testiTotal;
            testiTrack.style.transform = 'translateX(-' + (testiCurrent * 100) + '%)';
            testiDots.forEach(function (d) { d.classList.remove('active'); });
            if (testiDots[testiCurrent]) testiDots[testiCurrent].classList.add('active');
        }

        function testiStartAuto() {
            testiTimer = setInterval(function () { testiGoTo(testiCurrent + 1); }, 5000);
        }

        function testiResetAuto() { clearInterval(testiTimer); testiStartAuto(); }

        testiDots.forEach(function (dot, i) {
            dot.addEventListener('click', function () { testiGoTo(i); testiResetAuto(); });
        });

        testiTrack.addEventListener('touchstart', function (e) {
            dragStartX = e.touches[0].clientX;
            isDragging = true;
        }, { passive: true });

        testiTrack.addEventListener('touchend', function (e) {
            if (!isDragging) return;
            const diff = dragStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) { testiGoTo(diff > 0 ? testiCurrent + 1 : testiCurrent - 1); testiResetAuto(); }
            isDragging = false;
        }, { passive: true });

        testiTrack.addEventListener('mousedown', function (e) { dragStartX = e.clientX; isDragging = true; });
        testiTrack.addEventListener('mouseup', function (e) {
            if (!isDragging) return;
            const diff = dragStartX - e.clientX;
            if (Math.abs(diff) > 60) { testiGoTo(diff > 0 ? testiCurrent + 1 : testiCurrent - 1); testiResetAuto(); }
            isDragging = false;
        });

        testiTrack.addEventListener('mouseenter', function () { clearInterval(testiTimer); });
        testiTrack.addEventListener('mouseleave', testiStartAuto);

        testiStartAuto();
    }

    // ===================== HEADER SCROLL =====================
    const header = document.querySelector('.main-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.style.boxShadow = window.scrollY > 50
                ? '0 4px 20px rgba(0,0,0,0.12)'
                : '0 2px 10px rgba(0,0,0,0.08)';
        }, { passive: true });
    }

    // ===================== ESCAPE KEY =====================
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeMobileMenu();
            closeVideoModal();
            closeSearch();
        }
    });

    // ===================== IMAGE LOADED =====================
    document.querySelectorAll('img').forEach(function (img) {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', function () { img.classList.add('loaded'); });
        }
    });

});