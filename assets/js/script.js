document.addEventListener('DOMContentLoaded', function () {

    // ===================== MOBILE MENU - COMPLETELY REWRITTEN =====================
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const body = document.body;
    let mobileMenuOpen = false;

    // ---- Build Sidebar HTML ----
    function createMobileNavigation() {
        // Remove existing if any
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
                        <div class="mobile-submenu-header">Specialized NDT &amp; Asset</div>
                        <ul>
                            <li><a href="/www/pages/specialized-ndt/painting-coating.php">Painting &amp; Coating Inspections</a></li>
                            <li><a href="/www/pages/specialized-ndt/cathodic-protection.php">Cathodic Protection</a></li>
                            <li><a href="/www/pages/specialized-ndt/asset-integrity.php">Asset Integrity Inspection</a></li>
                            <li><a href="/www/pages/specialized-ndt/octg-inspection.php">OCTG Inspection</a></li>
                            <li><a href="/www/pages/specialized-ndt/predictive-maintenance.php">Predictive Maintenance Survey</a></li>
                            <li><a href="/www/pages/specialized-ndt/helium-leak-testing.php">Helium Leak Testing</a></li>
                        </ul>
                        <div class="mobile-submenu-header">Rope Access Services</div>
                        <ul>
                            <li><a href="/www/pages/rope-access-services/rope-access-ndt.php">Rope Access NDT</a></li>
                            <li><a href="/www/pages/rope-access-services/rope-access-inspection.php">Rope Access Inspection</a></li>
                            <li><a href="/www/pages/rope-access-services/confined-space.php">Confined Space Entry</a></li>
                        </ul>
                        <div class="mobile-submenu-header">Third Party Inspections</div>
                        <ul>
                            <li><a href="/www/pages/third-party-inspections/vendor-inspection.php">Vendor Inspection</a></li>
                            <li><a href="/www/pages/third-party-inspections/expediting.php">Expediting Services</a></li>
                            <li><a href="/www/pages/third-party-inspections/quality-assurance.php">Quality Assurance</a></li>
                        </ul>
                        <div class="mobile-submenu-header">Conventional NDT Services</div>
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
                        <div class="mobile-submenu-header">Lifting Inspection Services</div>
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
                        <div class="mobile-submenu-header">Marine &amp; Boiler</div>
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
                </li>

                <li class="has-dropdown">
                    <a href="#" class="mobile-dropdown-trigger">
                        <span>Industrial Heat Treatment</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="mobile-submenu">
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

        body.appendChild(overlay);
        body.appendChild(sidebar);

        return { overlay, sidebar };
    }

    // ---- Init ----
    const { overlay, sidebar } = createMobileNavigation();

    // ---- Open / Close helpers ----
    function openMobileMenu() {
        mobileMenuOpen = true;
        overlay.classList.add('active');
        sidebar.classList.add('active');
        body.style.overflow = 'hidden';
        body.classList.add('mobile-menu-open');
        if (mobileBtn) {
            mobileBtn.classList.add('active');
            mobileBtn.innerHTML = '<i class="fas fa-times"></i>';
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
        }
        // Reset all open dropdowns
        sidebar.querySelectorAll('.has-dropdown.mobile-open').forEach(function (item) {
            item.classList.remove('mobile-open');
            const icon = item.querySelector('.mobile-dropdown-trigger i');
            if (icon) icon.style.transform = '';
        });
    }

    function toggleMobileMenu() {
        mobileMenuOpen ? closeMobileMenu() : openMobileMenu();
    }

    // ---- Hamburger button ----
    if (mobileBtn) {
        mobileBtn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileMenu();
        });
    }

    // ---- Close button (inside sidebar) ----
    // Use event delegation on sidebar so it always works
    sidebar.addEventListener('click', function (e) {
        const closeBtn = e.target.closest('#mobileNavClose');
        if (closeBtn) {
            e.preventDefault();
            e.stopPropagation();
            closeMobileMenu();
        }
    });

    // ---- Overlay click ----
    overlay.addEventListener('click', function () {
        closeMobileMenu();
    });

    // ---- Dropdown triggers (event delegation) ----
    sidebar.addEventListener('click', function (e) {
        const trigger = e.target.closest('.mobile-dropdown-trigger');
        if (!trigger) return;

        e.preventDefault();
        e.stopPropagation();

        const parentLi = trigger.parentElement;
        const isOpen   = parentLi.classList.contains('mobile-open');
        const icon     = trigger.querySelector('i');

        // Close all open dropdowns
        sidebar.querySelectorAll('.has-dropdown.mobile-open').forEach(function (item) {
            if (item !== parentLi) {
                item.classList.remove('mobile-open');
                const otherIcon = item.querySelector('.mobile-dropdown-trigger i');
                if (otherIcon) otherIcon.style.transform = '';
            }
        });

        // Toggle this one
        if (isOpen) {
            parentLi.classList.remove('mobile-open');
            if (icon) icon.style.transform = '';
        } else {
            parentLi.classList.add('mobile-open');
            if (icon) icon.style.transform = 'rotate(180deg)';

            // Smooth scroll submenu into view
            setTimeout(function () {
                const submenu = parentLi.querySelector('.mobile-submenu');
                if (submenu) {
                    submenu.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            }, 300);
        }
    });

    // ---- Submenu link clicks → close menu ----
    sidebar.addEventListener('click', function (e) {
        const link = e.target.closest('.mobile-submenu a');
        if (link) {
            closeMobileMenu();
        }
    });

    // ---- Plain (non-dropdown) menu item clicks → close menu ----
    sidebar.addEventListener('click', function (e) {
        const link = e.target.closest('.mobile-nav-menu > li > a:not(.mobile-dropdown-trigger)');
        if (link) {
            closeMobileMenu();
        }
    });

    // ---- Escape key ----
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeMobileMenu();
            closeVideoModal();
        }
    });

    // ---- Prevent touch-scroll bleed through overlay ----
    overlay.addEventListener('touchmove', function (e) {
        e.preventDefault();
    }, { passive: false });


    // ===================== HERO SLIDER =====================
    const slides   = document.querySelectorAll('.slide');
    const dots     = document.querySelectorAll('.dot');
    const prevBtn  = document.querySelector('.custom-prev-btn');
    const nextBtn  = document.querySelector('.custom-next-btn');

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

        function startAuto()  { timer = setInterval(function () { goTo(current + 1); }, 4000); }
        function stopAuto()   { clearInterval(timer); }
        function resetAuto()  { stopAuto(); startAuto(); }

        if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1); resetAuto(); });
        if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1); resetAuto(); });
        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () { goTo(i); resetAuto(); });
        });

        startAuto();
    }


    // ===================== ACTIVE NAV =====================
    const path     = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-menu > li > a');

    navLinks.forEach(function (link) {
        link.classList.remove('active');
        const href = link.getAttribute('href');
        if (href && href !== '#' && path.endsWith(href.split('/').pop())) {
            link.classList.add('active');
        }
    });

    if (path === '/' || path.includes('index')) {
        document.querySelectorAll('a[href*="index.php"]').forEach(function (l) {
            l.classList.add('active');
        });
    }


    // ===================== SCROLL ANIMATIONS =====================
    function addAnimationClasses() {
        const pairs = [
            ['.company-left',         'fade-left'],
            ['.company-right',        'fade-right'],
            ['.services-heading',     'fade-up'],
            ['.industries-top',       'fade-up'],
            ['.case-studies-heading', 'fade-up'],
            ['.testimonials-heading', 'fade-up'],
            ['.company-bottom',       'fade-up'],
            ['.services-bottom',      'fade-up'],
            ['.footer-brand',         'fade-right'],
        ];

        pairs.forEach(function (pair) {
            const el = document.querySelector(pair[0]);
            if (el) el.classList.add(pair[1]);
        });

        const delays = ['delay-1', 'delay-2', 'delay-3', 'delay-4', 'delay-5'];

        ['.company-card', '.service-card', '.industry-card', '.case-card', '.testi-card'].forEach(function (sel) {
            document.querySelectorAll(sel).forEach(function (el, i) {
                el.classList.add('scale-up');
                if (delays[i % delays.length]) el.classList.add(delays[i % delays.length]);
            });
        });

        document.querySelectorAll('.footer-col').forEach(function (col, i) {
            col.classList.add('fade-left');
            if (delays[i]) col.classList.add(delays[i]);
        });
    }

    const observerOpts = { threshold: 0.12, rootMargin: '0px 0px -40px 0px' };

    const animObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                animObserver.unobserve(entry.target);
            }
        });
    }, observerOpts);

    addAnimationClasses();

    setTimeout(function () {
        document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-up').forEach(function (el) {
            animObserver.observe(el);
        });
    }, 100);

    document.querySelectorAll(
        '.company-section, .services-section, .industries-section, .case-studies-section, .testimonials-section'
    ).forEach(function (section) {
        section.classList.add('section-reveal');
        animObserver.observe(section);
    });


    // ===================== VIDEO SECTION =====================
    const videoSection   = document.getElementById('videoSection');
    const bgVideo        = document.getElementById('bgVideo');
    const videoPlayBtn   = document.getElementById('videoPlayBtn');
    const videoModal     = document.getElementById('videoModal');
    const videoModalClose= document.getElementById('videoModalClose');
    const videoModalOver = document.getElementById('videoModalOverlay');
    const mainVideo      = document.getElementById('mainVideo');

    if (videoSection && bgVideo) {
        const vidObs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    videoSection.classList.add('in-view');
                    bgVideo.play().then(function () {
                        bgVideo.classList.add('playing');
                        videoSection.classList.add('video-ready');
                    }).catch(function () {});
                } else {
                    bgVideo.pause();
                    bgVideo.classList.remove('playing');
                    videoSection.classList.remove('video-ready', 'in-view');
                }
            });
        }, { threshold: 0.25 });

        vidObs.observe(videoSection);
        bgVideo.muted  = true;
        bgVideo.volume = 0;
    }

    function closeVideoModal() {
        if (!videoModal) return;
        videoModal.classList.remove('open');
        body.style.overflow = '';
        if (mainVideo) {
            mainVideo.pause();
            mainVideo.currentTime = 0;
            mainVideo.muted = true;
        }
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
    if (videoModalOver)  videoModalOver.addEventListener('click',  closeVideoModal);


    // ===================== TESTIMONIALS SLIDER =====================
    const testiTrack = document.getElementById('testiTrack');
    const testiDots  = document.querySelectorAll('.testi-dot');

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

        function testiResetAuto() {
            clearInterval(testiTimer);
            testiStartAuto();
        }

        testiDots.forEach(function (dot, i) {
            dot.addEventListener('click', function () { testiGoTo(i); testiResetAuto(); });
        });

        // Touch support
        testiTrack.addEventListener('touchstart', function (e) {
            dragStartX = e.touches[0].clientX;
            isDragging = true;
        }, { passive: true });

        testiTrack.addEventListener('touchend', function (e) {
            if (!isDragging) return;
            const diff = dragStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) {
                testiGoTo(diff > 0 ? testiCurrent + 1 : testiCurrent - 1);
                testiResetAuto();
            }
            isDragging = false;
        }, { passive: true });

        // Mouse drag
        testiTrack.addEventListener('mousedown',  function (e) { dragStartX = e.clientX; isDragging = true; });
        testiTrack.addEventListener('mouseup',    function (e) {
            if (!isDragging) return;
            const diff = dragStartX - e.clientX;
            if (Math.abs(diff) > 60) {
                testiGoTo(diff > 0 ? testiCurrent + 1 : testiCurrent - 1);
                testiResetAuto();
            }
            isDragging = false;
        });

        testiTrack.addEventListener('mouseenter', function () { clearInterval(testiTimer); });
        testiTrack.addEventListener('mouseleave', testiStartAuto);

        testiStartAuto();
    }


    // ===================== HEADER SCROLL EFFECT =====================
    const header = document.querySelector('.main-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.style.boxShadow = window.scrollY > 50
                ? '0 4px 20px rgba(0,0,0,0.12)'
                : '0 2px 10px rgba(0,0,0,0.08)';
        }, { passive: true });
    }

    // ===================== IMAGE LAZY LOAD =====================
    document.querySelectorAll('img').forEach(function (img) {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', function () { img.classList.add('loaded'); });
        }
    });

});
// ===================== SEARCH BAR TOGGLE =====================
const searchToggle    = document.getElementById('searchToggle');
const headerSearchBar = document.getElementById('headerSearchBar');
const searchClose     = document.getElementById('headerSearchClose');
const searchInput     = document.getElementById('headerSearchInput');

function openSearch() {
    if (!headerSearchBar) return;
    headerSearchBar.classList.add('open');
    // Focus input after transition
    setTimeout(function () {
        if (searchInput) searchInput.focus();
    }, 200);
}

function closeSearch() {
    if (!headerSearchBar) return;
    headerSearchBar.classList.remove('open');
    if (searchInput) searchInput.value = '';
}

if (searchToggle) {
    searchToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        if (headerSearchBar.classList.contains('open')) {
            closeSearch();
        } else {
            openSearch();
        }
    });
}

if (searchClose) {
    searchClose.addEventListener('click', closeSearch);
}

// Close search on outside click
document.addEventListener('click', function (e) {
    if (
        headerSearchBar &&
        headerSearchBar.classList.contains('open') &&
        !headerSearchBar.contains(e.target) &&
        e.target !== searchToggle &&
        !searchToggle.contains(e.target)
    ) {
        closeSearch();
    }
});

// Close search on Escape
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeSearch();
        closeMobileMenu();
        closeVideoModal();
    }
});