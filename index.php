<?php
$base = dirname(__FILE__);
include $base . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Sonix NDT Solutions - Industrial Inspection Experts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/www/style.css">
</head>

<body>

    <?php include $base . '/includes/top-bar.php'; ?>
    <?php include $base . '/includes/header.php'; ?>

    <!-- ===================== HERO SECTION ===================== -->
    <section class="hero">
        <div class="slides-wrapper">
            <div class="slide active" style="background-image: url('/www/assets/images/hero/12340226673459755598.png');">
                <div class="slide-overlay"></div>
                <div class="hero-content">
                    <p class="hero-sub">Excellence in every inspection</p>
                    <h1>accuracy in every<br>result</h1>
                    <div class="hero-line"></div>
                    <a href="#" class="cta-link">MAKE IT STRESS FREE &nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="slide" style="background-image: url('/www/assets/images/hero/13480284272095742427.png');">
                <div class="slide-overlay"></div>
                <div class="hero-content">
                    <p class="hero-sub">Trusted NDT Solutions</p>
                    <h1>Ensuring integrity,<br>protecting tomorrow</h1>
                    <div class="hero-line"></div>
                    <a href="#" class="cta-link">DISCOVER OUR SERVICES &nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="slide" style="background-image: url('/www/assets/images/hero/10600610254314303543.png');">
                <div class="slide-overlay"></div>
                <div class="hero-content">
                    <p class="hero-sub">Advanced Inspection Technology</p>
                    <h1>Precision in every<br>measurement</h1>
                    <div class="hero-line"></div>
                    <a href="#" class="cta-link">LEARN MORE &nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
        <button class="next-btn"><i class="fas fa-chevron-right"></i></button>

        <div class="slide-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>

    <!-- ===================== COMPANY SECTION ===================== -->
    <section class="company-section">
        <div class="company-top">
            <div class="company-left">
                <span class="section-label">OUR COMPANY</span>
                <h2>Alpha Sonix NDT Solutions Pvt. Ltd. is your trusted source for advanced Non-Destructive Testing (NDT) and inspection services.</h2>
            </div>
            <div class="company-right">
                <p>Alpha Sonix NDT Solutions Pvt. Ltd. is a privately owned inspection and engineering services company established in 2021. Today, we are proud to have a strong team of certified and experienced NDT professionals who excel in delivering precise, reliable, and technology-driven inspection solutions. We work closely with our clients to solve complex inspection challenges and meet critical quality, safety, and compliance requirements across diverse industries.</p>
            </div>
        </div>

        <!-- Three Cards -->
        <div class="company-cards">
            <div class="company-card">
                <div class="card-image">
                    <img src="assets/images/services/15503248698416947460.png" alt="Our Services">
                </div>
                <div class="card-body">
                    <span class="card-label">Our services</span>
                    <h3>How we can help</h3>
                </div>
            </div>

            <div class="company-card">
                <div class="card-image">
                    <img src="assets/images/services/13215095048618825578.png" alt="Our Expertise">
                </div>
                <div class="card-body">
                    <span class="card-label">Our expertise</span>
                    <h3>Why partner with us</h3>
                </div>
            </div>

            <div class="company-card">
                <div class="card-image">
                    <img src="assets/images/services/9688541377108153766.png" alt="Our Customers">
                </div>
                <div class="card-body">
                    <span class="card-label">Our customers</span>
                    <h3>Client success stories</h3>
                </div>
            </div>
        </div>

        <!-- Bottom Text -->
        <div class="company-bottom">
            <p>
                Upgrade to efficient NDT technologies and experience better performance, reliability, and savings.
                <a href="https://dakstools.com" target="_blank" rel="noopener noreferrer">
                    Explore our company
                </a>
            </p>
        </div>
    </section>

    <!-- ===================== SERVICES SECTION ===================== -->
    <section class="services-section">

        <!-- Top Heading -->
        <div class="services-heading">
            <span class="services-label">OUR SERVICES</span>
            <h2>Inspect Smart. Ensure Safety. Deliver Confidence.</h2>
        </div>

        <!-- Three Cards -->
        <div class="services-cards">

            <!-- Card 1 -->
            <div class="service-card">
                <div class="service-card-inner">
                    <h3>Advanced NDT Services</h3>
                    <p>24/7 precision inspection using cutting-edge Non-Destructive Testing technologies to ensure structural integrity, weld quality, and asset reliability across industries.</p>
                    <div class="service-icon">
                        <i class="fas fa-folder-open"></i>
                        <i class="fas fa-exchange-alt service-icon-sub"></i>
                    </div>
                    <a href="#" class="service-link">Accuracy in Every Scan <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="service-card">
                <div class="service-card-inner">
                    <h3>Conventional NDT Services</h3>
                    <p>Reliable defect detection through proven inspection methods that safeguard components, pipelines, pressure vessels, and critical infrastructure from hidden failures.</p>
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <a href="#" class="service-link">Trusted Testing Solutions <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="service-card">
                <div class="service-card-inner">
                    <h3>Tubing Inspection Services</h3>
                    <p>Comprehensive heat exchanger and boiler tube inspection using ECT, RFET, IRIS, and MFL to detect corrosion, cracks, and wall thinning before costly breakdowns occur.</p>
                    <div class="service-icon">
                        <i class="fas fa-folder service-icon-lock"></i>
                        <i class="fas fa-lock service-icon-sub2"></i>
                    </div>
                    <a href="#" class="service-link">Protecting Critical Assets <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>

        <!-- Bottom Text -->
        <div class="services-bottom">
            <p>
                Innovative IT solutions tailored for the NDT-related field.
                <a href="https://dakstools.com" target="_blank" rel="noopener noreferrer" >Find your solution</a>
            </p>
        </div>

    </section>

    <!-- ===================== INDUSTRIES SECTION ===================== -->
    <section class="industries-section">

        <!-- Top Heading -->
        <div class="industries-top">
            <div class="industries-left">
                <span class="industries-label">INDUSTRIES WE SERVE</span>
                <h2>Advanced NDT Solutions Tailored for Your Industry</h2>
            </div>
            <div class="industries-right">
                <p>Our sector-specific expertise enables industries to enhance safety, ensure compliance, and extend asset life through precision inspection services. No matter the project scale, Alpha Sonix delivers industry-certified NDT and QA/QC solutions customized to your operational requirements.</p>
            </div>
        </div>

        <!-- Industry Cards Row -->
        <div class="industry-cards">

            <!-- Card 1 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3>Oil & Gas</h3>
                <p>Enhancing safety and asset integrity through advanced inspection solutions for pipelines, refineries, and offshore facilities.</p>
            </div>

            <!-- Card 2 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Power & Energy</h3>
                <p>Delivering reliable NDT services to power plants and energy projects to ensure operational efficiency and regulatory compliance.</p>
            </div>

            <!-- Card 3 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3>Manufacturing</h3>
                <p>Providing precision inspection and quality assurance services to maintain product strength, weld quality, and structural reliability.</p>
            </div>

            <!-- Card 4 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Marine & Offshore</h3>
                <p>Supporting shipbuilding, offshore platforms, and marine assets with specialized testing and corrosion monitoring services.</p>
            </div>

            <!-- Card 5 -->
            <div class="industry-card">
                <div class="industry-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Infrastructure & Construction</h3>
                <p>Ensuring structural safety and long-term durability through comprehensive inspection and QA/QC solutions.</p>
            </div>

        </div>

    </section>

    <!-- ===================== CASE STUDIES SECTION ===================== -->
    <section class="case-studies-section">

        <!-- Heading -->
        <div class="case-studies-heading">
            <span class="case-label">CASE STUDIES</span>
            <h2>Delivering Excellence Across Major Industrial Projects</h2>
        </div>

        <!-- Case Study Cards -->
        <div class="case-cards">

            <!-- Card 1 - Teal -->
            <div class="case-card case-teal">
                <div class="case-overlay"></div>
                <img src="assets/images/cases/pexels-tima-miroshnichenko-5845933.jpg" alt="Case Study 1">
                <div class="case-content">
                    <h3>NDT inspection saves cost for oil refinery</h3>
                    <div class="case-logo">
                        <i class="fas fa-circle-notch"></i>
                        <span>AlphaNDT</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 - Blue -->
            <div class="case-card case-blue">
                <div class="case-overlay"></div>
                <img src="assets/images/cases/pexels-alex-dominguez-26651677-7018177.jpg" alt="Case Study 2">
                <div class="case-content">
                    <h3>Remote inspection support for offshore platform</h3>
                    <div class="case-logo">
                        <i class="fas fa-anchor"></i>
                        <span>Marine Inspect</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 - Purple -->
            <div class="case-card case-purple">
                <div class="case-overlay"></div>
                <img src="assets/images/cases/pexels-keeganjchecks-36423798.jpg" alt="Case Study 3">
                <div class="case-content">
                    <h3>PWHT services reduce weld failures in pipeline</h3>
                    <div class="case-logo">
                        <i class="fas fa-fire"></i>
                        <span>HeatPro</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Text -->
        <div class="case-bottom">
            <p>Learn how our customized NDT and IT solutions help companies improve efficiency and performance. <a href="https://dakstools.com" target="_blank" rel="noopener noreferrer">Read our case studies</a></p>
        </div>

    </section>

   <!-- ===================== VIDEO SECTION ===================== -->
<section class="video-section" id="videoSection">

    <!-- Autoplay Background Video -->
    <video
        class="video-bg-video"
        id="bgVideo"
        autoplay
        muted
        loop
        playsinline
        preload="auto"
        poster="assets/images/video-bg.jpg">
        <source src="assets/videos/alpha-sonix.mp4" type="video/mp4">
    </video>

    <!-- Dark Blue Overlay -->
    <div class="video-overlay"></div>

    <!-- Content -->
    <div class="video-content">
        <p class="video-sub">Engineering Style</p>
        <h2 class="video-title">INSPECTION EXCELLENCE</h2>
        <p class="video-desc">Committed to precision testing, quality assurance, and asset integrity.</p>

        <!-- Play Button - opens fullscreen modal -->
        <button class="video-play-btn" id="videoPlayBtn">
            <i class="fas fa-play"></i>
        </button>
    </div>

    <!-- Fullscreen Modal with sound -->
    <div class="video-modal" id="videoModal">
        <div class="video-modal-overlay" id="videoModalOverlay"></div>
        <div class="video-modal-box">
            <button class="video-modal-close" id="videoModalClose">
                <i class="fas fa-times"></i>
            </button>
            <div class="video-modal-inner">
                <video
                    id="mainVideo"
                    controls
                    width="100%"
                    poster="assets/images/video-bg.jpg">
                    <source src="assets/videos/alpha-sonix.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

</section>

<!-- ===================== TESTIMONIALS SECTION ===================== -->
<section class="testimonials-section">

    <!-- Heading -->
    <div class="testimonials-heading">
        <span class="testi-label">TESTIMONIALS</span>
        <h2>What our customers say</h2>
    </div>

    <!-- Slider Wrapper -->
    <div class="testi-slider-wrapper">
        <div class="testi-track" id="testiTrack">

            <!-- Slide 1 - 3 cards -->
            <div class="testi-slide">

                <!-- Card 1 - Blue top border -->
                <div class="testi-card border-blue">
                    <div class="testi-logo">
                        <i class="fas fa-hard-hat testi-logo-icon red"></i>
                        <span class="testi-company-name">AlphaNDT</span>
                    </div>
                    <p class="testi-quote">"Alpha Sonix has been an outstanding inspection partner. Their certified NDT engineers ensure every weld and structure meets the highest safety standards. We trust them completely."</p>
                    <div class="testi-author">
                        <strong>Rajesh Kumar</strong>
                        <span>Plant Manager - Reliance Industries</span>
                    </div>
                </div>

                <!-- Card 2 - Cyan top border -->
                <div class="testi-card border-cyan">
                    <div class="testi-logo">
                        <i class="fas fa-shield-alt testi-logo-icon cyan"></i>
                        <span class="testi-company-name">SafeInspect</span>
                    </div>
                    <p class="testi-quote">"Alpha Sonix are always accommodating our diverse inspection needs and we feel like they are a part of our team rather than an external service provider."</p>
                    <div class="testi-author">
                        <strong>Anil Mehta</strong>
                        <span>CEO - ONGC Petrochemicals</span>
                    </div>
                </div>

                <!-- Card 3 - Red top border -->
                <div class="testi-card border-red">
                    <div class="testi-logo">
                        <i class="fas fa-industry testi-logo-icon blue"></i>
                        <span class="testi-company-name">IndusTech</span>
                    </div>
                    <p class="testi-quote">"Being a managed NDT client has improved our uptime, increased our operational productivity and systematized our inspection and maintenance schedules."</p>
                    <div class="testi-author">
                        <strong>Suresh Patel</strong>
                        <span>Director - Bharat Heavy Electricals</span>
                    </div>
                </div>

            </div>

            <!-- Slide 2 - 3 more cards -->
            <div class="testi-slide">

                <!-- Card 4 -->
                <div class="testi-card border-blue">
                    <div class="testi-logo">
                        <i class="fas fa-anchor testi-logo-icon blue"></i>
                        <span class="testi-company-name">MarineCore</span>
                    </div>
                    <p class="testi-quote">"Their marine inspection team is highly professional and thorough. Alpha Sonix helped us achieve full regulatory compliance across all our offshore vessels."</p>
                    <div class="testi-author">
                        <strong>Vikram Singh</strong>
                        <span>Fleet Manager - Shipping Corp of India</span>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="testi-card border-cyan">
                    <div class="testi-logo">
                        <i class="fas fa-fire testi-logo-icon red"></i>
                        <span class="testi-company-name">HeatPro</span>
                    </div>
                    <p class="testi-quote">"The PWHT services provided by Alpha Sonix reduced our weld failure rate significantly. Their team is responsive, accurate and always on schedule."</p>
                    <div class="testi-author">
                        <strong>Priya Nair</strong>
                        <span>QA Head - Tata Projects</span>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="testi-card border-red">
                    <div class="testi-logo">
                        <i class="fas fa-building testi-logo-icon cyan"></i>
                        <span class="testi-company-name">StructurePro</span>
                    </div>
                    <p class="testi-quote">"Alpha Sonix rope access team completed our flare stack inspection safely and efficiently with zero incidents. Highly recommended for high-risk inspection work."</p>
                    <div class="testi-author">
                        <strong>Mohammed Ali</strong>
                        <span>HSE Manager - L&T Construction</span>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Dots -->
    <div class="testi-dots">
        <span class="testi-dot active"></span>
        <span class="testi-dot"></span>
    </div>

</section>

    <script src="/www/assets/js/script.js"></script>
    <?php include dirname(__FILE__) . '/includes/footer.php'; ?>
</body>

</html>