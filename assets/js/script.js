document.addEventListener('DOMContentLoaded', function () {

    // ===================== MOBILE MENU =====================
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mainNav  = document.getElementById('mainNav');

    if (mobileBtn && mainNav) {

        mobileBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            mainNav.classList.toggle('open');
        });

        // Mobile: toggle sub-dropdowns on click
        document.querySelectorAll('.has-dropdown').forEach(function (item) {
            const link = item.querySelector(':scope > a');
            if (!link) return;

            link.addEventListener('click', function (e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    // Close siblings
                    document.querySelectorAll('.has-dropdown.mobile-open').forEach(function (el) {
                        if (el !== item) el.classList.remove('mobile-open');
                    });
                    item.classList.toggle('mobile-open');
                }
            });
        });

        // Close on outside click
        document.addEventListener('click', function (e) {
            if (!mainNav.contains(e.target) && !mobileBtn.contains(e.target)) {
                mainNav.classList.remove('open');
            }
        });
    }

    // ===================== HERO SLIDER =====================
    const slides = document.querySelectorAll('.slide');
    const dots   = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    if (!slides.length) return;

    let current = 0;
    let timer;

    function goTo(index) {
        slides[current].classList.remove('active');
        if (dots[current]) dots[current].classList.remove('active');

        current = (index + slides.length) % slides.length;

        slides[current].classList.add('active');
        if (dots[current]) dots[current].classList.add('active');
    }

    function startAuto() {
        timer = setInterval(function () { goTo(current + 1); }, 2000);
    }

    function stopAuto() { clearInterval(timer); }

    function resetAuto() { stopAuto(); startAuto(); }

    if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1); resetAuto(); });
    if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1); resetAuto(); });

    dots.forEach(function (dot, i) {
        dot.addEventListener('click', function () { goTo(i); resetAuto(); });
    });

    startAuto(); // Auto-change every 2 seconds

    // ===================== ACTIVE NAV =====================
    const path  = window.location.pathname;
    const links = document.querySelectorAll('.nav-menu > li > a');

    links.forEach(function (link) {
        link.classList.remove('active');
        const href = link.getAttribute('href');
        if (href && href !== '#' && path.endsWith(href.split('/').pop())) {
            link.classList.add('active');
        }
    });

    if (path === '/' || path.includes('index')) {
        const home = document.querySelector('.nav-menu > li:first-child > a');
        if (home) home.classList.add('active');
    }

    // ===================== SCROLL ANIMATIONS =====================
    
    // Add animation classes to elements
    function addAnimationClasses() {
        // Company section elements
        const companyLeft = document.querySelector('.company-left');
        const companyRight = document.querySelector('.company-right');
        if (companyLeft) companyLeft.classList.add('fade-left');
        if (companyRight) companyRight.classList.add('fade-right');
        
        // Company cards
        const companyCards = document.querySelectorAll('.company-card');
        companyCards.forEach((card, index) => {
            card.classList.add('scale-up');
            if (index === 0) card.classList.add('delay-1');
            if (index === 1) card.classList.add('delay-2');
            if (index === 2) card.classList.add('delay-3');
        });
        
        // Services section heading
        const servicesHeading = document.querySelector('.services-heading');
        if (servicesHeading) servicesHeading.classList.add('fade-up');
        
        // Service cards
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach((card, index) => {
            card.classList.add('scale-up');
            if (index === 0) card.classList.add('delay-1');
            if (index === 1) card.classList.add('delay-2');
            if (index === 2) card.classList.add('delay-3');
        });
        
        // Industries section
        const industriesTop = document.querySelector('.industries-top');
        if (industriesTop) industriesTop.classList.add('fade-up');
        
        // Industry cards
        const industryCards = document.querySelectorAll('.industry-card');
        industryCards.forEach((card, index) => {
            card.classList.add('scale-up');
            if (index === 0) card.classList.add('delay-1');
            if (index === 1) card.classList.add('delay-2');
            if (index === 2) card.classList.add('delay-3');
            if (index === 3) card.classList.add('delay-4');
            if (index === 4) card.classList.add('delay-5');
        });
        
        // Case studies section
        const caseHeading = document.querySelector('.case-studies-heading');
        if (caseHeading) caseHeading.classList.add('fade-up');
        
        // Case cards
        const caseCards = document.querySelectorAll('.case-card');
        caseCards.forEach((card, index) => {
            card.classList.add('scale-up');
            if (index === 0) card.classList.add('delay-1');
            if (index === 1) card.classList.add('delay-2');
            if (index === 2) card.classList.add('delay-3');
        });
        
        // Testimonials section
        const testimonialsHeading = document.querySelector('.testimonials-heading');
        if (testimonialsHeading) testimonialsHeading.classList.add('fade-up');
        
        // Testimonial cards
        const testiCards = document.querySelectorAll('.testi-card');
        testiCards.forEach((card, index) => {
            card.classList.add('scale-up');
            if (index === 0) card.classList.add('delay-1');
            if (index === 1) card.classList.add('delay-2');
            if (index === 2) card.classList.add('delay-3');
            if (index === 3) card.classList.add('delay-4');
            if (index === 4) card.classList.add('delay-5');
            if (index === 5) card.classList.add('delay-1');
        });
        
        // Company bottom text
        const companyBottom = document.querySelector('.company-bottom');
        if (companyBottom) companyBottom.classList.add('fade-up');
        
        // Services bottom text
        const servicesBottom = document.querySelector('.services-bottom');
        if (servicesBottom) servicesBottom.classList.add('fade-up');
        
        // Case bottom text
        const caseBottom = document.querySelector('.case-bottom');
        if (caseBottom) caseBottom.classList.add('fade-up');
        
        // Footer sections
        const footerBrand = document.querySelector('.footer-brand');
        const footerCols = document.querySelectorAll('.footer-col');
        if (footerBrand) footerBrand.classList.add('fade-right');
        footerCols.forEach((col, index) => {
            col.classList.add('fade-left');
            if (index === 0) col.classList.add('delay-1');
            if (index === 1) col.classList.add('delay-2');
            if (index === 2) col.classList.add('delay-3');
        });
    }
    
    // Intersection Observer for scroll animations
    const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-up');
    
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const animationObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                // Optionally unobserve after animation
                animationObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Add classes first
    addAnimationClasses();
    
    // Then observe all animated elements
    setTimeout(function() {
        const allAnimated = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-up');
        allAnimated.forEach(function(el) {
            animationObserver.observe(el);
        });
    }, 100);
    
    // Also observe sections for reveal animation
    const sections = document.querySelectorAll('.company-section, .services-section, .industries-section, .case-studies-section, .testimonials-section');
    sections.forEach(function(section) {
        section.classList.add('section-reveal');
        animationObserver.observe(section);
    });
    
    // ===================== BACKGROUND VIDEO AUTOPLAY ON SCROLL =====================
    const videoSection = document.getElementById('videoSection');
    const bgVideo      = document.getElementById('bgVideo');
    const videoPlayBtn = document.getElementById('videoPlayBtn');
    const videoModal   = document.getElementById('videoModal');
    const videoModalClose = document.getElementById('videoModalClose');
    const videoModalOver  = document.getElementById('videoModalOverlay');
    const mainVideo    = document.getElementById('mainVideo');

    if (videoSection && bgVideo) {

        // Intersection Observer - triggers when section scrolls into view
        const videoObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    // Add in-view class - animates text in
                    videoSection.classList.add('in-view');

                    // Play background video
                    bgVideo.play().then(function () {
                        bgVideo.classList.add('playing');
                        videoSection.classList.add('video-ready');
                    }).catch(function (err) {
                        // Autoplay blocked - show fallback image
                        console.log('Autoplay blocked:', err);
                        videoSection.classList.add('in-view');
                    });

                } else {

                    // Pause when scrolled out of view - saves resources
                    bgVideo.pause();
                    bgVideo.classList.remove('playing');
                    videoSection.classList.remove('video-ready');
                    videoSection.classList.remove('in-view');
                }
            });
        }, {
            threshold: 0.25  // Trigger when 25% visible
        });

        videoObserver.observe(videoSection);

        // Make sure video stays muted for autoplay
        bgVideo.muted = true;
        bgVideo.volume = 0;
    }

    // ===== OPEN MODAL - Play with sound =====
    if (videoPlayBtn && videoModal && mainVideo) {
        videoPlayBtn.addEventListener('click', function () {
            videoModal.classList.add('open');
            document.body.style.overflow = 'hidden';

            // Start modal video from beginning with sound
            mainVideo.muted  = false;
            mainVideo.volume = 1;
            mainVideo.currentTime = 0;
            mainVideo.play();
        });
    }

    // ===== CLOSE MODAL =====
    function closeVideoModal() {
        if (videoModal) {
            videoModal.classList.remove('open');
            document.body.style.overflow = '';
            if (mainVideo) {
                mainVideo.pause();
                mainVideo.currentTime = 0;
                mainVideo.muted = true;
            }
        }
    }

    if (videoModalClose) {
        videoModalClose.addEventListener('click', closeVideoModal);
    }

    if (videoModalOver) {
        videoModalOver.addEventListener('click', closeVideoModal);
    }

    // ESC key closes modal
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeVideoModal();
        }
    });

    // ===================== TESTIMONIALS SLIDER =====================
    const testiTrack = document.getElementById('testiTrack');
    const testiDots  = document.querySelectorAll('.testi-dot');

    if (testiTrack && testiDots.length) {

        let testiCurrent  = 0;
        let testiTotal    = testiDots.length;
        let testiTimer;
        let testiStartX   = 0;
        let testiIsDrag   = false;

        // Go to slide
        function testiGoTo(index) {
            testiCurrent = (index + testiTotal) % testiTotal;
            testiTrack.style.transform = 'translateX(-' + (testiCurrent * 100) + '%)';

            testiDots.forEach(function (dot) {
                dot.classList.remove('active');
            });

            if (testiDots[testiCurrent]) {
                testiDots[testiCurrent].classList.add('active');
            }
        }

        // Auto slide every 4 seconds
        function testiStartAuto() {
            testiTimer = setInterval(function () {
                testiGoTo(testiCurrent + 1);
            }, 4000);
        }

        function testiResetAuto() {
            clearInterval(testiTimer);
            testiStartAuto();
        }

        // Dot click
        testiDots.forEach(function (dot, i) {
            dot.addEventListener('click', function () {
                testiGoTo(i);
                testiResetAuto();
            });
        });

        // Touch / swipe support
        testiTrack.addEventListener('touchstart', function (e) {
            testiStartX  = e.touches[0].clientX;
            testiIsDrag  = true;
        }, { passive: true });

        testiTrack.addEventListener('touchend', function (e) {
            if (!testiIsDrag) return;
            var diff = testiStartX - e.changedTouches[0].clientX;

            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    testiGoTo(testiCurrent + 1);
                } else {
                    testiGoTo(testiCurrent - 1);
                }
                testiResetAuto();
            }
            testiIsDrag = false;
        }, { passive: true });

        // Mouse drag support
        testiTrack.addEventListener('mousedown', function (e) {
            testiStartX = e.clientX;
            testiIsDrag = true;
        });

        testiTrack.addEventListener('mouseup', function (e) {
            if (!testiIsDrag) return;
            var diff = testiStartX - e.clientX;

            if (Math.abs(diff) > 60) {
                if (diff > 0) {
                    testiGoTo(testiCurrent + 1);
                } else {
                    testiGoTo(testiCurrent - 1);
                }
                testiResetAuto();
            }
            testiIsDrag = false;
        });

        // Pause on hover
        testiTrack.addEventListener('mouseenter', function () {
            clearInterval(testiTimer);
        });

        testiTrack.addEventListener('mouseleave', function () {
            testiStartAuto();
        });

        // Start
        testiStartAuto();
    }
    
    // ===================== ADDITIONAL POLISH =====================
    // Navbar background change on scroll
    const header = document.querySelector('.main-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.12)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.08)';
            }
        });
    }
    
    // Preload images for smoother animations
    const allImages = document.querySelectorAll('img');
    allImages.forEach(function(img) {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', function() {
                img.classList.add('loaded');
            });
        }
    });
});

// Chat toggle (kept from original)
function toggleChat() {
    alert('Chat coming soon!');
}