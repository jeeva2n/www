<?php
$page_title = "Mission, Vision & Values - Alpha Sonix NDT Solutions";
$meta_description = "Discover the mission, vision, and core values that drive Alpha Sonix NDT Solutions to deliver world-class non-destructive testing services across India.";
include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/top-bar.php';
include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/header.php';
?>
<link rel="stylesheet" href="/www/assets/css/contact.css">
<body>

    <!-- Hero Section with main CTA -->
    <section class="hero">
        <div class="hero-grid">
            <div class="hero-content fade-up">
                <div class="hero-badge">NDT Excellence Since 1974</div>
                <h1>Precision Inspection,<br>Uncompromised Integrity</h1>
                <p>Advanced non-destructive testing solutions for critical infrastructure, aerospace, oil & gas, and manufacturing. Reduce downtime, ensure safety.</p>
                <a href="#contact-form-start" class="btn-primary"><i class="fas fa-clipboard-list"></i> Request Inspection</a>
            </div>
        </div>
    </section>


    <!-- Value Proposition -->
    <section class="value-prop">
        <div class="page-container">
            <div class="section-header fade-up">
                <h2>Engineering Confidence Through Science</h2>
                <div class="accent-line"></div>
            </div>
            <div class="value-grid">
                <div class="value-card fade-up">
                    <div class="value-icon"><i class="fas fa-microscope"></i></div>
                    <h3>Advanced Modalities</h3>
                    <p>Ultrasonic, Phased Array, Eddy Current, Radiography, and Thermography — cutting-edge NDT methods.</p>
                </div>
                <div class="value-card fade-up">
                    <div class="value-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Zero Compromise Safety</h3>
                    <p>ISO 9712 certified level III inspectors delivering defect detection with 99.8% accuracy.</p>
                </div>
                <div class="value-card fade-up">
                    <div class="value-icon"><i class="fas fa-industry"></i></div>
                    <h3>Pan-India Rapid Response</h3>
                    <p>Mobilisation within 24 hours to refineries, power plants, bridges, and offshore sites.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form + Methods + Google Map integrated -->
    <section class="contact-section" id="contact-form-start">
        <div class="page-container">
            <div class="section-header fade-up">
                <h2>Let's Discuss Your Inspection Requirements</h2>
                <div class="accent-line"></div>
                <p style="max-width: 600px; margin-top: 16px; color: var(--steel-gray); margin-left: auto; margin-right: auto;">Reach our NDT experts for quotes, technical advisory, or emergency inspection requests.</p>
            </div>
            <div class="two-column-layout">
                <!-- Professional Contact Form -->
                <div class="form-card fade-up">
                    <form id="ndtContactForm" method="POST">
                        <div class="form-group">
                            <label for="fullname">Full name *</label>
                            <input type="text" id="fullname" name="fullname"  required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address *</label>
                            <input type="email" id="email" name="email"  required>
                        </div>
                        <div class="form-group">
                            <label for="company">Company / Organization *</label>
                            <input type="text" id="company" name="company" required>
                        </div>
                        <div class="form-group">
                            <label for="service">Service inquiry</label>
                            <select id="service" name="service">
                                <option value="ultrasonic">Ultrasonic Testing (UT)</option>
                                <option value="magnetic">Magnetic Particle Inspection (MPI)</option>
                                <option value="radiographic">Radiographic Testing (RT)</option>
                                <option value="thermal">Thermal / Infrared Imaging</option>
                                <option value="custom">Custom NDT Solution</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Project details or message *</label>
                            <textarea id="message" name="message" rows="4" placeholder="Describe your component, material, or inspection scope..."></textarea>
                        </div>
                        <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i> Submit Request</button>
                        <p style="font-size: 0.75rem; margin-top: 18px; color: #6C7E94;">* Required fields. Our team will respond within 4 business hours.</p>
                    </form>
                    <div id="form-feedback"></div>
                </div>

                <!-- Contact methods + Google Map inside the same card -->
                <div class="contact-methods-wrapper fade-up">
                    <div class="contact-methods">
                        <div class="contact-method-item">
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-detail">
                                <h4>Emergency Technical Hotline</h4>
                                <p>+91 44 4501 5884<br>+91 877 842 3621</p>
                            </div>
                        </div>
                        <div class="contact-method-item">
                            <div class="contact-icon"><i class="far fa-envelope"></i></div>
                            <div class="contact-detail">
                                <h4>Corporate & Sales</h4>
                                <p>aravind@alphasonix.com<br>sales@alphasonix.com</p>
                            </div>
                        </div>
                        <div class="contact-method-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-detail">
                                <h4>Central Operations Hub</h4>
                                <p>Alpha Sonix NDT Solutions,<br>No.133, Babu Garden, Cikkarayapuram
                                    Chennai - 600069, Tamil Nadu, India</p>
                            </div>
                        </div>
                        <div class="business-hours">
                            <i class="fas fa-clock" style="color: var(--accent-blue); margin-right: 12px;"></i>
                            <strong style="font-size: 1.1rem;">Business hours:</strong>
                            <p style="margin-top: 12px;">Monday - Friday: 08:30 – 18:30 IST<br>Saturday: 09:00 – 15:00 (Emergency support 24/7)<br>On-site inspections available after-hours upon request.</p>
                        </div>
                    </div>
                    <!-- Google Maps Integration -->
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8972.436215416936!2d72.86608!3d19.125143!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52614b63771a23%3A0xac38a71e657c8397!2sALPHA%20SONIX%20NDT%20SOLUTIONS%20PVT%20LTD!5e1!3m2!1sen!2sin!4v1781259360486!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas & Specialties -->
    <section class="services-preview">
        <div class="page-container">
            <div class="section-header fade-up">
                <h2>Core NDT Specialties & Service Areas</h2>
                <div class="accent-line"></div>
            </div>
            <div class="service-grid">
            <div class="service-item fade-up">
    <i class="fas fa-wave-square service-icon"></i>
    <h4>Ultrasonics</h4>
    <p>PAUT, TOFD, Thickness</p>
</div>
                <div class="service-item fade-up"><i class="fas fa-magnet service-icon"></i>
                    <h4>Magnetic Particle</h4>
                    <p>Weld & cast inspection</p>
                </div>
                <div class="service-item fade-up"><i class="fas fa-camera service-icon"></i>
                    <h4>Thermography</h4>
                    <p>Electrical & refractory</p>
                </div>
                <div class="service-item fade-up"><i class="fas fa-x-ray service-icon"></i>
                    <h4>Digital Radiography</h4>
                    <p>Real-time imaging</p>
                </div>
                <div class="service-item fade-up"><i class="fas fa-water service-icon"></i>
                    <h4>Liquid Penetrant</h4>
                    <p>Surface flaw detection</p>
                </div>
                <div class="service-item fade-up"><i class="fas fa-charging-station service-icon"></i>
                    <h4>Eddy Current</h4>
                    <p>Conductive materials</p>
                </div>
            </div>
            <p class="fade-up" style="text-align: center; margin-top: 48px; color: #1E2F41; font-weight: 500;">Serving Oil & Gas, Aerospace, Power Generation, Infrastructure & Renewables — NABL, ISO 17025 accredited labs</p>
        </div>
    </section>

    <script>
        (function() {
            // Intersection Observer for fade-up animations
            const fadeElements = document.querySelectorAll('.fade-up');
            if (fadeElements.length) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('revealed');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.15,
                    rootMargin: "0px 0px -20px 0px"
                });

                fadeElements.forEach(el => observer.observe(el));

                setTimeout(() => {
                    fadeElements.forEach(el => {
                        const rect = el.getBoundingClientRect();
                        if (rect.top < window.innerHeight - 100) {
                            el.classList.add('revealed');
                        }
                    });
                }, 100);
            }

            // Form handling with validation and simulation
            const form = document.getElementById('ndtContactForm');
            const feedbackDiv = document.getElementById('form-feedback');

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const fullname = document.getElementById('fullname').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const company = document.getElementById('company').value.trim();

                    if (!fullname || !email || !company) {
                        feedbackDiv.innerHTML = '<span style="color:#C73E2D;"><i class="fas fa-exclamation-triangle"></i> Please fill required fields: name, email, and company.</span>';
                        return;
                    }
                    if (!email.includes('@') || !email.includes('.')) {
                        feedbackDiv.innerHTML = '<span style="color:#C73E2D;"><i class="fas fa-envelope"></i> Please enter a valid email address.</span>';
                        return;
                    }

                    feedbackDiv.innerHTML = '<span style="color:#1E6F9F;"><i class="fas fa-spinner fa-pulse"></i> Submitting your NDT request...</span>';

                    setTimeout(() => {
                        feedbackDiv.innerHTML = '<span style="color:#2C7A47;"><i class="fas fa-check-circle"></i> Request received! A senior NDT engineer will contact you within 4 hours.</span>';
                        form.reset();
                        setTimeout(() => {
                            feedbackDiv.innerHTML = '';
                        }, 7000);
                    }, 850);
                });
            }

            // Smooth scroll for CTA button
            const ctaBtn = document.querySelector('.btn-primary');
            if (ctaBtn) {
                ctaBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.getElementById('contact-form-start');
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            }
        })();
    </script>

</body>

</html>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/footer.php'; ?>