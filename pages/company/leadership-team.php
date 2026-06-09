<?php
$page_title = "Leadership Team - Alpha Sonix NDT Solutions";
$meta_description = "Meet the experienced leadership team at Alpha Sonix NDT Solutions, driving innovation and excellence in non-destructive testing services.";
include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/top-bar.php';
include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/header.php';
?>
<link rel="stylesheet" href="/www/assets/css/company-pages.css">
<link rel="stylesheet" href="/www/assets/css/style.css">
<!-- Leadership Hero Section -->
<section class="company-hero-section leadership-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title animate-fade-in">Our Leadership</h1>
            <p class="hero-subtitle">Visionaries Driving Excellence in NDT Innovation</p>
        </div>
    </div>
</section>

<!-- Leadership Philosophy -->
<section class="leadership-philosophy-section">
    <div class="container">
        <div class="philosophy-content">
            <div class="philosophy-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                    <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
            </div>
            <h2 class="philosophy-title">Our Leadership Philosophy</h2>
            <div class="title-underline center"></div>
            <p class="philosophy-text">
                At Alpha Sonix, leadership is not about authority—it's about empowerment, accountability, 
                and inspiration. Our leaders believe in leading by example, fostering a culture of continuous 
                learning, and creating an environment where innovation thrives and excellence is the norm. 
                We are committed to servant leadership: putting our team's growth, our clients' success, 
                and our industry's advancement at the forefront of every strategic decision.
            </p>
            <div class="philosophy-principles">
                <div class="principle-item">
                    <span class="principle-icon">🎯</span>
                    <span>Vision-Driven Decision Making</span>
                </div>
                <div class="principle-item">
                    <span class="principle-icon">🤝</span>
                    <span>Collaborative Team Culture</span>
                </div>
                <div class="principle-item">
                    <span class="principle-icon">📈</span>
                    <span>Continuous Innovation & Growth</span>
                </div>
                <div class="principle-item">
                    <span class="principle-icon">💡</span>
                    <span>Empowerment & Accountability</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team Cards -->
<section class="leadership-team-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Meet Our Leaders</h2>
            <div class="title-underline center"></div>
            <p class="section-subtitle">Experience, Expertise, and Unwavering Commitment</p>
        </div>

        <div class="leaders-grid">
            <!-- Leader 1 - CEO -->
            <div class="leader-card featured-leader">
                <div class="leader-image-container">
                    <div class="leader-image-circle">
                        <!-- Replace 'ceo-photo.jpg' with actual image path -->
                        <!-- If no image, it will show professional gradient background with initials -->
                        <img src="images/leaders/aravind-kumar.jpg" 
                             alt="Mr. Aravind Kumar D - CEO" 
                             class="leader-photo"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="leader-initials" style="display: none;">
                            <span>AK</span>
                        </div>
                    </div>
                    <div class="leader-badge-overlay">
                        <div class="leader-badge">CEO & Founder</div>
                    </div>
                </div>
                
                <div class="leader-info">
                    <h3 class="leader-name">Mr. Aravind Kumar D</h3>
                    <p class="leader-designation">Chief Executive Officer & Founder</p>
                    <div class="leader-specialization">
                        <span class="specialization-tag">NDT Expert</span>
                        <span class="specialization-tag">Industry Veteran</span>
                        <span class="specialization-tag">Visionary Leader</span>
                    </div>
                    
                    <p class="leader-bio">
                        A visionary leader and seasoned NDT expert, Mr. Aravind Kumar D founded Alpha Sonix 
                        in 2021 with a mission to revolutionize non-destructive testing standards in India. 
                        With over 15 years of extensive experience across Oil & Gas, Marine, and Power sectors, 
                        he brings deep technical expertise combined with strategic business acumen. His hands-on 
                        approach to quality assurance and unwavering commitment to safety has positioned Alpha 
                        Sonix as a trusted partner for critical infrastructure inspection.
                    </p>
                    
                    <p class="leader-bio">
                        Under his leadership, Alpha Sonix has grown from a startup to a recognized name in the 
                        NDT industry, serving major clients across India. His vision of combining advanced 
                        technology with highly skilled personnel has been the cornerstone of the company's success.
                    </p>
                    
                    <div class="leader-expertise">
                        <h4>Core Expertise</h4>
                        <ul class="expertise-list">
                            <li>Advanced NDT Methodologies (UT, RT, MT, PT, PAUT, TOFD)</li>
                            <li>Asset Integrity Management & Risk Assessment</li>
                            <li>Quality Assurance & Compliance (ASME, API, AWS)</li>
                            <li>Strategic Business Development & Client Relations</li>
                            <li>Team Leadership & Capability Building</li>
                            <li>Project Management & Operations Excellence</li>
                        </ul>
                    </div>
                    
                    <div class="leader-achievements">
                        <h4>Key Achievements</h4>
                        <ul class="achievements-list">
                            <li>Founded Alpha Sonix NDT Solutions in 2021</li>
                            <li>Built a team of 30+ certified NDT professionals</li>
                            <li>Established partnerships with major Oil & Gas companies</li>
                            <li>Implemented ISO 9001:2015 Quality Management System</li>
                            <li>Achieved zero safety incidents record</li>
                            <li>Expanded service offerings to include Rope Access NDT</li>
                        </ul>
                    </div>
                    
                    <div class="leader-quote">
                        <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                        </svg>
                        <p>"At Alpha Sonix, we don't just inspect equipment—we safeguard lives, protect investments, 
                        and build lasting partnerships. Our commitment to excellence is unwavering because we 
                        understand that precision in NDT is not optional; it's a responsibility we embrace every day. 
                        Success is measured not just in projects completed, but in the trust our clients place in us."</p>
                    </div>
                    
                    <div class="leader-contact">
                        <a href="mailto:aravind@alphasonixndt.com" class="leader-contact-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            Get in Touch
                        </a>
                    </div>
                </div>
            </div>

            <!-- Leader 2 - General Manager -->
            <div class="leader-card">
                <div class="leader-image-container">
                    <div class="leader-image-circle">
                        <!-- Replace 'gm-photo.jpg' with actual image path -->
                        <img src="../../assets/images/TOFD/bharath.jpeg" 
                             alt="Mr. Bharath Kumar D - Operations Manager" 
                             class="leader-photo"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="leader-initials" style="display: none;">
                            <span>BK</span>
                        </div>
                    </div>
                    <div class="leader-badge-overlay">
                        <div class="leader-badge">Operations Manager</div>
                    </div>
                </div>
                
                <div class="leader-info">
                    <h3 class="leader-name">Mr. Bharath Kumar D</h3>
                    <p class="leader-designation">General Manager - Operations</p>
                    <div class="leader-specialization">
                        <span class="specialization-tag">Operations Excellence</span>
                        <span class="specialization-tag">Technical Leadership</span>
                        <span class="specialization-tag">Quality Management</span>
                    </div>
                    
                    <p class="leader-bio">
                        Mr. Bharath Kumar D drives operational excellence at Alpha Sonix, ensuring seamless 
                        project execution, resource optimization, and client satisfaction. With comprehensive 
                        expertise in NDT operations management, he oversees multi-site projects, manages 
                        technical teams, and maintains the highest quality standards across all service 
                        deliveries.
                    </p>
                    
                    <p class="leader-bio">
                        His strategic approach to operations has been instrumental in scaling Alpha Sonix's 
                        capabilities and expanding service offerings. He plays a crucial role in maintaining 
                        the company's reputation for reliability, technical competence, and timely delivery.
                    </p>
                    
                    <div class="leader-expertise">
                        <h4>Core Expertise</h4>
                        <ul class="expertise-list">
                            <li>Operations Management & Process Optimization</li>
                            <li>Multi-Site Project Coordination & Execution</li>
                            <li>Technical Team Development & Training</li>
                            <li>Client Relationship Management</li>
                            <li>Quality Control & Compliance Assurance</li>
                            <li>Resource Planning & Strategic Mobilization</li>
                            <li>Safety Management & HSE Implementation</li>
                        </ul>
                    </div>
                    
                    <div class="leader-achievements">
                        <h4>Key Contributions</h4>
                        <ul class="achievements-list">
                            <li>Streamlined operations for 30% improvement in project delivery timelines</li>
                            <li>Implemented advanced quality management systems and SOPs</li>
                            <li>Successfully expanded service capabilities to include Rope Access NDT</li>
                            <li>Built and managed high-performance technical teams across India</li>
                            <li>Established robust client feedback and continuous improvement systems</li>
                            <li>Maintained 100% compliance with quality and safety standards</li>
                        </ul>
                    </div>
                    
                    <div class="leader-quote">
                        <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                        </svg>
                        <p>"Operational excellence is the backbone of client satisfaction. At Alpha Sonix, we've built 
                        systems that ensure every project is executed with precision, every deadline is met, and every 
                        client receives the quality they deserve. Our success lies in the details and the dedication 
                        of our exceptional team."</p>
                    </div>
                    
                    <div class="leader-contact">
                        <a href="mailto:bharath@alphasonixndt.com" class="leader-contact-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            Get in Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Pillars -->
<section class="leadership-pillars-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Our Leadership Pillars</h2>
            <div class="title-underline center"></div>
            <p class="section-subtitle">The Foundation of Our Success</p>
        </div>

        <div class="pillars-grid">
            <div class="pillar-card">
                <div class="pillar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="7"/>
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                    </svg>
                </div>
                <h3>Technical Mastery</h3>
                <p>Deep NDT expertise combined with hands-on industry experience ensures informed decision-making at every level.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3>Strategic Vision</h3>
                <p>Forward-thinking leadership that anticipates industry trends and positions Alpha Sonix for sustained growth.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>People First</h3>
                <p>Investing in team development, fostering growth opportunities, and building a culture of empowerment and respect.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3>Agile Execution</h3>
                <p>Responsive, adaptive approach to challenges with swift decision-making and efficient resource mobilization.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3>Integrity & Ethics</h3>
                <p>Uncompromising ethical standards, transparent communication, and accountability in all business practices.</p>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3>Client Partnership</h3>
                <p>Building long-term relationships through consistent delivery, proactive communication, and value creation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Management Team (Optional - Add more leaders here) -->
<section class="management-team-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Our Extended Leadership Team</h2>
            <div class="title-underline center"></div>
            <p class="section-subtitle">Driving excellence across all departments</p>
        </div>

        <div class="management-grid">
            <!-- You can add more team members here -->
            <div class="management-card">
                <div class="management-image">
                    <img src="images/leaders/placeholder-team.jpg" 
                         alt="Team Member" 
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="management-initials">
                        <span>TM</span>
                    </div>
                </div>
                <h4>Technical Manager</h4>
                <p class="management-role">NDT Operations</p>
                <p class="management-desc">Leading technical teams and ensuring quality standards across all NDT services</p>
            </div>

            <div class="management-card">
                <div class="management-image">
                    <img src="images/leaders/placeholder-team.jpg" 
                         alt="Team Member" 
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="management-initials">
                        <span>QM</span>
                    </div>
                </div>
                <h4>Quality Manager</h4>
                <p class="management-role">QA/QC Department</p>
                <p class="management-desc">Maintaining ISO compliance and driving continuous improvement initiatives</p>
            </div>

            <div class="management-card">
                <div class="management-image">
                    <img src="images/leaders/placeholder-team.jpg" 
                         alt="Team Member" 
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="management-initials">
                        <span>SM</span>
                    </div>
                </div>
                <h4>Safety Manager</h4>
                <p class="management-role">HSE Department</p>
                <p class="management-desc">Implementing safety protocols and maintaining our zero-incident record</p>
            </div>

            <div class="management-card">
                <div class="management-image">
                    <img src="images/leaders/placeholder-team.jpg" 
                         alt="Team Member" 
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="management-initials">
                        <span>BM</span>
                    </div>
                </div>
                <h4>Business Manager</h4>
                <p class="management-role">Sales & Marketing</p>
                <p class="management-desc">Building client relationships and expanding Alpha Sonix's market presence</p>
            </div>
        </div>
    </div>
</section>

<!-- Join Our Team CTA -->
<section class="leadership-cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Want to Work with Visionary Leaders?</h2>
            <p>Join a team where your growth is prioritized and your contributions matter</p>
            <div class="cta-buttons">
                <a href="careers.php" class="btn btn-primary btn-lg">Explore Careers</a>
                <a href="../contact.php" class="btn btn-secondary btn-lg">Contact Leadership</a>
            </div>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/www/includes/footer.php'; ?>