<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Civilanka — Architecture & Design Studio</title>
  <meta name="description"
    content="Civilanka is a premier architecture and design studio in Sri Lanka, creating spaces that inspire. Residential, commercial, and landscape architecture." />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&family=Inter:wght@300;400;500&display=swap"
    rel="stylesheet" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <!-- ============================================================
     STICKY HEADER (shown on scroll, hidden on hero)
============================================================ -->
  <header id="sticky-header" role="banner" aria-label="Sticky Navigation">
    <!-- Logo left -->
    <a href="index.php" class="sticky-logo" aria-label="Civilanka Home">
      <strong>Civilanka</strong>Architects
    </a>

    <!-- Nav center -->
    <ul class="sticky-nav" role="list">
      <li class="active"><a href="#hero">home</a></li>
      <li><a href="#about">about</a></li>
      <li><a href="#services">services</a></li>
      <li><a href="#projects">portfolio</a></li>
      <li><a href="#footer">contact</a></li>
    </ul>

    <!-- Circle right -->
    <button class="sticky-circle" id="sticky-circle-btn" aria-label="Open menu">
    </button>
  </header>

  <!-- ============================================================
     MOBILE NAV OVERLAY
============================================================ -->
  <nav id="mobile-nav" role="navigation" aria-label="Mobile Navigation">
    <button id="mobile-nav-close" aria-label="Close menu">&#x2715;</button>
    <a href="#about">about</a>
    <a href="#services">services</a>
    <a href="#projects">portfolio</a>
    <a href="#testimonials">journal</a>
    <a href="#footer">contact</a>
  </nav>

  <!-- ============================================================
     LEFT VERTICAL NAV
============================================================ -->
  <nav id="side-nav" role="navigation" aria-label="Primary Navigation">
    <ul>
      <li class="active"><a href="#hero">home</a></li>
      <li><a href="#about">about</a></li>
      <li><a href="#services">services</a></li>
      <li><a href="#projects">portfolio</a></li>
      <li><a href="#footer">contact</a></li>
    </ul>
  </nav>

  <!-- ============================================================
     TOP BAR
============================================================ -->
  <div id="top-bar" aria-label="Site header">
    <a href="index.php" class="site-logo" aria-label="Civilanka Home">
      <strong>Civilanka</strong>Architects
    </a>
    <!-- Circle menu button (top right) -->
    <button class="circle-btn" id="circle-menu-btn" aria-label="Open menu" aria-expanded="false"></button>
  </div>

  <!-- ============================================================
     HERO SECTION (SPLIT SCREEN)
============================================================ -->
  <section id="hero" class="split-view" aria-label="Featured Projects Split View">
    <!-- Left Half -->
    <div class="split-half split-left">
      <img src="Project%20images/2023-11-07.jpg" class="split-bg" alt="Exterior architecture" />
      <div class="split-overlay"></div>
      <div class="vert-text vert-left">exterior</div>
    </div>
    
    <!-- Right Half -->
    <div class="split-half split-right">
      <img src="Project%20images/WhatsApp%20Image%202023-07-17%20at%2021.07.37%20(1).jpeg" class="split-bg filter-dark" alt="Interior design" />
      <div class="split-overlay dark"></div>
      <div class="vert-text vert-right">interior</div>
    </div>

    <!-- Center Logo / Text -->
    <div class="center-brand">
      <div class="brand-letters">CA</div>
      <div class="brand-sub">STUDIO</div>
    </div>
  </section>

  <!-- ============================================================
     ABOUT SECTION
============================================================ -->
  <section id="about" class="section-pad">
    <div class="container">
      <div class="new-about-top">
        <div class="new-about-text reveal-left">
          <span class="new-section-label">&bull; &nbsp;ARCHITECT STUDIO</span>
          <h2 class="new-about-heading">Architects excited about beauty,<br>affordability sustainability materials<br>for every project and person</h2>
          <a href="#" class="new-read-more">read more</a>
        </div>
        <div class="new-about-image reveal-right">
          <img src="Project%20images/2023-11-07.jpg" alt="Architects reviewing blueprints" />
        </div>
      </div>
      
      <div class="new-about-bottom stagger">
        <div class="new-about-links">
          <a href="#">Design a perfect home</a>
          <a href="#">Download our brochure</a>
          <a href="#">Ask us your questions our architects</a>
        </div>
        <div class="new-about-col">
          <h3>Urban Exteriors</h3>
          <p>Purus sit amet vol utpat con sequat mauris nunc congue. Sed id s emper risus in hend rrerit. Facilisi etiam dig nissim diam quis enim. Quis auctor.</p>
        </div>
        <div class="new-about-col">
          <h3>Cityscapes Buildings</h3>
          <p>Purus sit amet vol utpat con sequat mauris nunc congue. Sed id s emper risus in hend rrerit. Facilisi etiam dig nissim diam quis enim. Quis auctor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     SERVICES SECTION (VERTICAL TABS)
============================================================ -->
  <section id="services" class="section-pad">
    <div class="container">
      <div class="services-header reveal">
        <span class="section-label">What We Do</span>
        <h2>Our Areas of<br />Expertise</h2>
      </div>

      <div class="services-grid">

        <!-- Tabs -->
        <div class="services-tabs" role="tablist" aria-label="Services">

          <div class="tab-item active" role="tab" aria-selected="true" tabindex="0">
            <span class="tab-num">01</span>
            <span class="tab-title">Architectural Design</span>
            <span class="tab-arrow">&#8594;</span>
          </div>

          <div class="tab-item" role="tab" aria-selected="false" tabindex="0">
            <span class="tab-num">02</span>
            <span class="tab-title">Interior Architecture</span>
            <span class="tab-arrow">&#8594;</span>
          </div>

          <div class="tab-item" role="tab" aria-selected="false" tabindex="0">
            <span class="tab-num">03</span>
            <span class="tab-title">Urban Planning</span>
            <span class="tab-arrow">&#8594;</span>
          </div>

          <div class="tab-item" role="tab" aria-selected="false" tabindex="0">
            <span class="tab-num">04</span>
            <span class="tab-title">Landscape Design</span>
            <span class="tab-arrow">&#8594;</span>
          </div>

        </div>

        <!-- Panels -->
        <div class="services-panel">

          <div class="panel-content active" role="tabpanel">
            <div class="panel-img">
              <img src="assets/images/project_1.png" alt="Architectural Design — Minimalist residential exterior" />
            </div>
            <h3>Architectural Design</h3>
            <p>From concept sketches to construction documentation, we deliver complete architectural services for
              residential, commercial, and mixed-use developments. Every design is a thoughtful response to its site,
              client, and culture.</p>
            <br />
            <a href="#projects" class="btn btn-dark btn-arrow"><span>See Projects</span></a>
          </div>

          <div class="panel-content" role="tabpanel">
            <div class="panel-img">
              <img src="assets/images/project_2.png" alt="Interior Architecture — Open plan luxury living space" />
            </div>
            <h3>Interior Architecture</h3>
            <p>We design interiors that are a seamless extension of the building itself — where materials, light,
              proportion, and detail come together to create spaces of genuine comfort and lasting elegance.</p>
            <br />
            <a href="#projects" class="btn btn-dark btn-arrow"><span>See Projects</span></a>
          </div>

          <div class="panel-content" role="tabpanel">
            <div class="panel-img">
              <img src="assets/images/hero_3.png" alt="Urban Planning — Contemporary cityscape" />
            </div>
            <h3>Urban Planning</h3>
            <p>We engage with city makers and communities to develop master plans and urban strategies that are
              forward-thinking yet deeply rooted in local context — designing the neighbourhoods of tomorrow.</p>
            <br />
            <a href="#projects" class="btn btn-dark btn-arrow"><span>See Projects</span></a>
          </div>

          <div class="panel-content" role="tabpanel">
            <div class="panel-img">
              <img src="assets/images/hero_1.png" alt="Landscape Design — Exterior environment design" />
            </div>
            <h3>Landscape Design</h3>
            <p>Our landscape team creates outdoor environments that enhance the architecture and enrich the lives of
              those who inhabit them — from private gardens to large-scale public realm projects.</p>
            <br />
            <a href="#projects" class="btn btn-dark btn-arrow"><span>See Projects</span></a>
          </div>

        </div><!-- /services-panel -->
      </div><!-- /services-grid -->
    </div>
  </section>

  <!-- ============================================================
     PROJECTS SECTION (OUR WORK)
============================================================ -->
  <section id="projects" class="section-pad dark-section">
    <div class="our-work-container">
      <div class="our-work-left reveal-left">
        <span class="our-work-label">&bull; &nbsp;OUR WORK</span>
        <div class="our-work-info">
          <h2 class="our-work-title">The feel of Villa Yun</h2>
          <span class="our-work-cat">WELLNESS</span>
        </div>
      </div>
      <div class="our-work-right reveal-right">
        <div class="swiper our-work-swiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide our-work-slide" data-title="The feel of Villa Yun" data-cat="WELLNESS">
              <img src="Project%20images/2023-11-07.jpg" alt="Villa Yun" />
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide our-work-slide" data-title="Modern Office" data-cat="COMMERCIAL">
              <img src="Project%20images/WhatsApp%20Image%202023-07-17%20at%2021.07.37%20(1).jpeg" alt="Modern Office" />
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide our-work-slide" data-title="Minimalist Living" data-cat="RESIDENTIAL">
              <img src="Project%20images/1%20(4).png" alt="Minimalist Living" />
            </div>
          </div>
        </div>
        <div class="our-work-nav">
          <button class="our-work-prev">&larr;</button>
          <button class="our-work-next">&rarr;</button>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     TESTIMONIALS
============================================================ -->
  <section id="testimonials" class="section-pad">
    <div class="container">
      <div class="testimonials-inner reveal">
        <span class="section-label">Client Words</span>
        <span class="quote-mark">"</span>

        <div class="swiper test-swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <p class="testimonial-text">Civilanka transformed our vision into a home that surpasses everything we
                imagined. Their attention to light, material, and proportion is extraordinary. We live in a work of art.
              </p>
              <p class="testimonial-author">JAMES &amp; CLARA WHITFIELD</p>
              <p class="testimonial-role">Private Residence Client, London</p>
            </div>

            <div class="swiper-slide">
              <p class="testimonial-text">Working with the Civilanka team was a revelation. They listened deeply and
                delivered a commercial space that perfectly reflects our brand values while elevating the entire
                neighbourhood.</p>
              <p class="testimonial-author">SEBASTIAN NAKAMURA</p>
              <p class="testimonial-role">CEO, Nakamura Group</p>
            </div>

            <div class="swiper-slide">
              <p class="testimonial-text">The master plan Civilanka created for our mixed-use development is visionary.
                Their urban sensibility and design quality are unmatched in the industry.</p>
              <p class="testimonial-author">AMARA OSEI-BONSU</p>
              <p class="testimonial-role">Director of Development, Cityline Properties</p>
            </div>

          </div>
        </div>

        <div class="test-swiper-nav">
          <button class="test-prev" aria-label="Previous testimonial">&#8592;</button>
          <button class="test-next" aria-label="Next testimonial">&#8594;</button>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
     STATS BANNER
============================================================ -->
  <section id="stats">
    <div class="container">
      <div class="stats-grid stagger">
        <div class="stat-box">
          <div class="big-num"><span data-target="180">0</span><span class="plus">+</span></div>
          <p>Projects Completed</p>
        </div>
        <div class="stat-box">
          <div class="big-num"><span data-target="42">0</span><span class="plus">+</span></div>
          <p>Design Awards</p>
        </div>
        <div class="stat-box">
          <div class="big-num"><span data-target="25">0</span><span class="plus">+</span></div>
          <p>Years of Practice</p>
        </div>
        <div class="stat-box">
          <div class="big-num"><span data-target="18">0</span><span class="plus">+</span></div>
          <p>Countries Reached</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     CTA BANNER
============================================================ -->
  <section id="cta-banner">
    <div class="container">
      <div class="cta-inner reveal">
        <h2>Let's Build Something<br />Remarkable Together.</h2>
        <p>Whether a private home or a city block — bring us your vision. We'll shape it into something that lasts.</p>
        <a href="#footer" class="btn btn-light btn-arrow"><span>Start a Conversation</span></a>
      </div>
    </div>
  </section>

  <!-- ============================================================
     FOOTER
============================================================ -->
  <footer id="footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">

        <div class="footer-brand">
          <a href="index.php" aria-label="Civilanka Home">
            <img src="assets/images/logo-transparent.png" alt="Civilanka" class="logo-img logo-img--footer" />
          </a>
          <p>An architecture and design studio dedicated to creating spaces of enduring beauty and purpose.</p>
        </div>

        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#testimonials">Journal</a></li>
            <li><a href="#footer">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="#services">Architectural Design</a></li>
            <li><a href="#services">Interior Architecture</a></li>
            <li><a href="#services">Urban Planning</a></li>
            <li><a href="#services">Landscape Design</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Contact</h4>
          <address>
            24 Studio Lane<br />
            Colombo 03<br />
            Sri Lanka<br /><br />
            <a href="tel:+94112345678">+94 11 234 5678</a><br />
            <a href="mailto:hello@civillanka.com">hello@civillanka.com</a>
          </address>
        </div>

      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 Civilanka Architecture Studio. All rights reserved.</p>
        <div class="footer-socials">
          <a href="#">Instagram</a>
          <a href="#">Behance</a>
          <a href="#">LinkedIn</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to top -->
  <button id="back-top" aria-label="Back to top">&#8593;</button>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

</body>

</html>