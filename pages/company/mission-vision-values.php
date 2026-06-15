<?php
$page_title = "Mission, Vision & Values - Alpha Sonix NDT Solutions";
$meta_description = "Discover the mission, vision, and core values that drive Alpha Sonix NDT Solutions to deliver world-class non-destructive testing services across India.";
include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/top-bar.php';
include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/header.php';
?>
<link rel="stylesheet" href="/www/assets/css/company-pages.css">
<link rel="stylesheet" href="/www/assets/css/style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .company-hero-section {
            height: 500px;
            background: linear-gradient(135deg, #003B73 0%, #004d8f 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .company-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.5;
        }

        .hero-content {
            max-width: 900px;
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 64px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 20px;
            opacity: 0.95;
            font-weight: 400;
        }

        /* Mosaic Section Container */
        .mosaic-section {
            display: flex;
            width: 100%;
            min-height: 550px;
        }

        .mosaic-section > * {
            flex: 1;
            min-height: 550px;
        }

        /* Content Block */
        .content-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 5rem 6rem;
        }

        .content-block.yellow {
            background-color: #E5C15B;
            color: #1a1a1a;
        }

        .content-block.blue {
            background-color: #003B73;
            color: #ffffff;
        }

        .mvv-title {
            font-size: 58px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .title-underline {
            width: 80px;
            height: 5px;
            background: #E5C15B;
            margin-bottom: 2rem;
        }

        .blue .title-underline {
            background: #E5C15B;
        }

        .yellow .title-underline {
            background: #003B73;
        }

        .mvv-text {
            font-size: 18px;
            line-height: 1.9;
            margin-bottom: 2.5rem;
            opacity: 0.95;
        }

        /* Mission Highlights */
        .mission-highlights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 16px;
            font-weight: 600;
        }

        .highlight-icon {
            font-size: 28px;
        }

        /* Vision Goals */
        .vision-goals {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .goal-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #003B73;
        }

        .yellow .goal-card {
            background: rgba(0, 59, 115, 0.08);
        }

        .goal-card h4 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: inherit;
        }

        .goal-card p {
            font-size: 14px;
            line-height: 1.5;
            opacity: 0.9;
        }

        /* Image Block */
        .image-block {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .image-block img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
        }

        .image-block:hover img {
            transform: scale(1.05);
        }

        /* Values Section */
        .values-section {
            background: #f8f9fa;
            padding: 6rem 4rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 52px;
            font-weight: 800;
            text-transform: uppercase;
            color: #003B73;
            margin-bottom: 1rem;
        }

        .title-underline.center {
            width: 80px;
            height: 5px;
            background: #E5C15B;
            margin: 1rem auto 1.5rem;
        }

        .section-subtitle {
            font-size: 18px;
            color: #666;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .value-card {
            background: #fff;
            padding: 3rem 2rem;
            text-align: center;
            transition: all 0.3s ease;
            border-bottom: 4px solid transparent;
        }

        .value-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 59, 115, 0.12);
            border-bottom-color: #E5C15B;
        }

        .value-icon-wrapper {
            margin-bottom: 1.5rem;
        }

        .value-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #E5C15B;
            color: #003B73;
        }

        .value-icon svg {
            width: 40px;
            height: 40px;
            stroke-width: 2.5;
        }

        .value-name {
            font-size: 24px;
            font-weight: 700;
            color: #003B73;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }

        .value-description {
            font-size: 16px;
            line-height: 1.7;
            color: #666;
        }

        /* USP Section */
        .usp-section {
            background: #fff;
            padding: 6rem 4rem;
        }

        .usp-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            max-width: 1400px;
            margin: 3rem auto 0;
        }

        .usp-item {
            position: relative;
            padding-left: 4rem;
        }

        .usp-number {
            position: absolute;
            left: 0;
            top: 0;
            font-size: 48px;
            font-weight: 800;
            color: #E5C15B;
            line-height: 1;
        }

        .usp-item h4 {
            font-size: 20px;
            font-weight: 700;
            color: #003B73;
            margin-bottom: 0.8rem;
            text-transform: uppercase;
        }

        .usp-item p {
            font-size: 15px;
            line-height: 1.7;
            color: #666;
        }

        /* CTA Section */
        .mvv-cta-section {
            background: linear-gradient(135deg, #003B73 0%, #004d8f 100%);
            padding: 5rem 4rem;
            text-align: center;
            color: #fff;
        }

        .cta-content h2 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }

        .cta-content p {
            font-size: 20px;
            margin-bottom: 2.5rem;
            opacity: 0.95;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 16px 45px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #E5C15B;
            color: #003B73;
        }

        .btn-primary:hover {
            background: #f0d070;
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(229, 193, 91, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }

        .btn-secondary:hover {
            background: #fff;
            color: #003B73;
            transform: translateY(-3px);
        }

        /* Stats Bar */
        .stats-bar {
            background: #1a1a1a;
            padding: 3rem 4rem;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            max-width: 1400px;
            margin: 0 auto;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 52px;
            font-weight: 800;
            color: #E5C15B;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 14px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .content-block {
                padding: 4rem 3rem;
            }

            .mvv-title {
                font-size: 48px;
            }

            .values-grid,
            .usp-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .mosaic-section {
                flex-direction: column;
            }

            .content-block {
                padding: 3rem 2rem;
                min-height: 400px;
            }

            .hero-title {
                font-size: 42px;
            }

            .mvv-title {
                font-size: 36px;
            }

            .mission-highlights {
                grid-template-columns: 1fr;
            }

            .vision-goals {
                grid-template-columns: 1fr;
            }

            .values-grid,
            .usp-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .section-title {
                font-size: 36px;
            }

            .cta-content h2 {
                font-size: 32px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 32px;
            }

            .mvv-title {
                font-size: 28px;
            }

            .content-block {
                padding: 2.5rem 1.5rem;
            }

            .values-section,
            .usp-section {
                padding: 4rem 1.5rem;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="company-hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Our Purpose, Our Promise</h1>
        <p class="hero-subtitle">Driving Excellence Through Vision, Mission & Unwavering Values</p>
    </div>
</section>

<!-- Section 1: Mission - Content Left (Blue) | Image Right -->
<section class="mosaic-section">
    <div class="content-block blue">
        <h2 class="mvv-title">Our Mission</h2>
        <div class="title-underline"></div>
        <p class="mvv-text">
            To provide world-class Non-Destructive Testing solutions that ensure the safety, reliability, 
            and integrity of critical infrastructure across industries. We are committed to delivering 
            precision-driven inspection services through cutting-edge technology, certified expertise, 
            and unwavering dedication to quality, empowering our clients to operate with confidence and 
            maintain the highest standards of safety and compliance.
        </p>
        <div class="mission-highlights">
            <div class="highlight-item">
                <span class="highlight-icon">🎯</span>
                <span>Precision & Accuracy</span>
            </div>
            <div class="highlight-item">
                <span class="highlight-icon">🛡️</span>
                <span>Safety First</span>
            </div>
            <div class="highlight-item">
                <span class="highlight-icon">⚡</span>
                <span>Rapid Response</span>
            </div>
            <div class="highlight-item">
                <span class="highlight-icon">🔬</span>
                <span>Advanced Technology</span>
            </div>
        </div>
    </div>
    <div class="image-block">
        <img src="../../assets/images/public/p1.png" alt="NDT Material Testing Laboratory">
    </div>
</section>

<!-- Section 2: Vision - Image Left | Content Right (Yellow) -->
<section class="mosaic-section">
    <div class="image-block">
        <img src="../../assets/images/public/p2.png" alt="Future Vision Technology">
    </div>
    <div class="content-block yellow">
        <h2 class="mvv-title">Our Vision</h2>
        <div class="title-underline"></div>
        <p class="mvv-text">
            To be India's most trusted and innovative NDT partner by 2030, setting new benchmarks in 
            inspection excellence and technological advancement. We envision a future where Alpha Sonix 
            is synonymous with reliability, integrity, and cutting-edge solutions—expanding our footprint 
            across Asia while nurturing a culture of continuous learning, safety consciousness, and 
            sustainable growth that benefits our clients, employees, and communities.
        </p>
        <div class="vision-goals">
            <div class="goal-card">
                <h4>2025</h4>
                <p>Pan-India Leadership in Advanced NDT</p>
            </div>
            <div class="goal-card">
                <h4>2028</h4>
                <p>Expansion Across South Asia Markets</p>
            </div>
            <div class="goal-card">
                <h4>2030</h4>
                <p>Global Recognition & Technology Pioneer</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="section-header">
        <h2 class="section-title">Our Core Values</h2>
        <div class="title-underline center"></div>
        <p class="section-subtitle">The principles that guide every decision, every inspection, every relationship</p>
    </div>

    <div class="values-grid">
        <!-- Value 1: Integrity -->
        <div class="value-card">
            <div class="value-icon-wrapper">
                <div class="value-icon integrity-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 6L9 17l-5-5"/>
                    </svg>
                </div>
            </div>
            <h3 class="value-name">Integrity</h3>
            <p class="value-description">
                We uphold the highest ethical standards in every inspection report, client interaction, 
                and business decision. Our commitment to honesty and transparency builds lasting trust.
            </p>
        </div>

        <!-- Value 2: Excellence -->
        <div class="value-card">
            <div class="value-icon-wrapper">
                <div class="value-icon excellence-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
            </div>
            <h3 class="value-name">Excellence</h3>
            <p class="value-description">
                We pursue perfection in every test, every analysis, and every service delivery. Continuous 
                improvement and precision are not goals—they are our standards.
            </p>
        </div>

        <!-- Value 3: Safety -->
        <div class="value-card">
            <div class="value-icon-wrapper">
                <div class="value-icon safety-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
            </div>
            <h3 class="value-name">Safety</h3>
            <p class="value-description">
                Safety is non-negotiable. From our technicians in the field to the critical infrastructure 
                we inspect, we ensure every procedure protects people and assets.
            </p>
        </div>

        <!-- Value 4: Innovation -->
        <div class="value-card">
            <div class="value-icon-wrapper">
                <div class="value-icon innovation-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                </div>
            </div>
            <h3 class="value-name">Innovation</h3>
            <p class="value-description">
                We embrace cutting-edge NDT technologies and methodologies, constantly evolving to provide 
                smarter, faster, and more accurate inspection solutions.
            </p>
        </div>

        <!-- Value 5: Customer Focus -->
        <div class="value-card">
            <div class="value-icon-wrapper">
                <div class="value-icon customer-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
            </div>
            <h3 class="value-name">Customer Focus</h3>
            <p class="value-description">
                Our clients' success is our success. We partner closely to understand unique challenges 
                and deliver customized NDT solutions that exceed expectations.
            </p>
        </div>

        <!-- Value 6: Accountability -->
        <div class="value-card">
            <div class="value-icon-wrapper">
                <div class="value-icon accountability-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
            </div>
            <h3 class="value-name">Accountability</h3>
            <p class="value-description">
                We take full ownership of our commitments. Every deadline, every report, every promise 
                is backed by responsible action and measurable results.
            </p>
        </div>
    </div>
</section>

<!-- Section 3: USP Intro - Content Left (Blue) | Image Right -->
<section class="mosaic-section">
    <div class="content-block blue">
        <h2 class="mvv-title">What Sets Us Apart</h2>
        <div class="title-underline"></div>
        <p class="mvv-text">
            The Alpha Sonix difference lies in our unwavering commitment to excellence, innovation, and 
            client success. With certified expertise, cutting-edge technology, and rapid mobilization 
            capabilities, we deliver comprehensive NDT solutions that exceed industry standards. Our 
            industry-specific knowledge and partnership approach ensure that every inspection provides 
            actionable insights for long-term asset integrity.
        </p>
    </div>
    <div class="image-block">
        <img src="../../assets/images/public/alpha-setus-apart.png" alt="Advanced NDT Testing Equipment">
    </div>
</section>

<!-- USP Details Section -->
<section class="usp-section">
    <div class="usp-grid">
        <div class="usp-item">
            <div class="usp-number">01</div>
            <h4>Certified Excellence</h4>
            <p>Our team comprises ASNT/PCN Level II & III certified technicians with specialized training in advanced NDT methodologies.</p>
        </div>

        <div class="usp-item">
            <div class="usp-number">02</div>
            <h4>Cutting-Edge Technology</h4>
            <p>We invest in the latest NDT equipment—Phased Array UT, TOFD, Digital Radiography, and Rope Access capabilities.</p>
        </div>

        <div class="usp-item">
            <div class="usp-number">03</div>
            <h4>Rapid Mobilization</h4>
            <p>24/7 emergency response capability with pan-India coverage ensures minimal downtime for your critical operations.</p>
        </div>

        <div class="usp-item">
            <div class="usp-number">04</div>
            <h4>Industry-Specific Expertise</h4>
            <p>Deep domain knowledge across Oil & Gas, Power, Marine, and Infrastructure sectors for context-aware inspections.</p>
        </div>

        <div class="usp-item">
            <div class="usp-number">05</div>
            <h4>Comprehensive Solutions</h4>
            <p>From conventional to advanced NDT, heat treatment to lifting inspections—all services under one trusted roof.</p>
        </div>

        <div class="usp-item">
            <div class="usp-number">06</div>
            <h4>Client Partnership Approach</h4>
            <p>We don't just deliver reports; we provide actionable insights and collaborate for long-term asset integrity.</p>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <h3>15+</h3>
            <p>Years of Excellence</p>
        </div>
        <div class="stat-item">
            <h3>300+</h3>
            <p>Clients Served</p>
        </div>
        <div class="stat-item">
            <h3>ISO 9001</h3>
            <p>Certified Quality</p>
        </div>
        <div class="stat-item">
            <h3>24/7</h3>
            <p>Emergency Response</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="mvv-cta-section">
    <div class="cta-content">
        <h2>Ready to Experience the Alpha Sonix Difference?</h2>
        <p>Partner with a team that lives and breathes these values every day</p>
        <div class="cta-buttons">
            <a href="/www/contact.php" class="btn btn-primary">Get in Touch</a>
            <a href="/www/services.php" class="btn btn-secondary">Explore Services</a>
        </div>
    </div>
</section>

</body>
</html>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/footer.php'; ?>