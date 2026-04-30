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
      <img src="assets/images/logo-full.png" alt="Civilanka" class="logo-img logo-img--sticky" />
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
     TOP BAR: Centered Logo
============================================================ -->
  <div id="top-bar" aria-label="Site header">
    <a href="index.php" class="site-logo" aria-label="Civilanka Home">
      <img src="assets/images/logo-transparent.png" alt="Civilanka" class="logo-img logo-img--hero" />
    </a>
  </div>

  <!-- Circle menu button (top right) -->
  <button class="circle-btn" id="circle-menu-btn" aria-label="Open menu" aria-expanded="false"></button>

  <!-- ============================================================
     HERO SECTION
============================================================ -->
  <section id="hero" aria-label="Featured Projects Slider">
    <div class="swiper hero-swiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide hero-slide" data-title="The Concrete Pavilion" data-cat="Residential"
          data-swiper-autoplay="2500">
          <img class="hero-slide-img" src="assets/images/hero_1.png" alt="Minimalist concrete facade architecture" />
          <div class="hero-overlay"></div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide hero-slide" data-title="Alvar Home &amp; Studio" data-cat="Heritage">
          <img class="hero-slide-img" src="assets/images/hero_2.png" alt="Luxury modern villa with infinity pool" />
          <div class="hero-overlay"></div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide hero-slide" data-title="Meridian Commercial Tower" data-cat="Commercial">
          <img class="hero-slide-img" src="assets/images/hero_3.png" alt="Contemporary glass commercial building" />
          <div class="hero-overlay"></div>
        </div>

      </div><!-- /swiper-wrapper -->
    </div><!-- /swiper -->

    <!-- Bottom-right: project caption (updated via JS) -->
    <div class="hero-caption" aria-live="polite">
      <div class="hero-caption-title">The Concrete Pavilion</div>
      <div class="hero-caption-cat">Residential</div>
    </div>

    <!-- Bottom-left: dash pagination -->
    <div class="hero-pagination" aria-label="Slide navigation">
      <div class="dash active" data-index="0"></div>
      <div class="dash" data-index="1"></div>
      <div class="dash" data-index="2"></div>
    </div>

  </section>

  <!-- ============================================================
     ABOUT SECTION
============================================================ -->
  <section id="about" class="section-pad">
    <div class="container">
      <div class="about-grid">

        <!-- Image -->
        <div class="about-image-wrap reveal-left">
          <img src="assets/images/about.png" alt="Architect at work reviewing blueprints" />
          <div class="about-badge">
            <span class="num">25</span>
            <span class="lbl">Years of<br />Excellence</span>
          </div>
        </div>

        <!-- Text -->
        <div class="about-text reveal-right">
          <span class="section-label">Our Philosophy</span>
          <h2>Architecture as a<br />Living Art Form</h2>
          <p>At Civilanka, we believe every structure tells a story. Founded in 1999, our studio merges timeless design
            principles with contemporary innovation to create spaces that breathe, evolve, and endure.</p>
          <p>Our interdisciplinary team of architects, designers, and urban planners collaborate closely with each
            client — translating visions into spaces of quiet strength and remarkable beauty.</p>

          <div class="about-stats stagger">
            <div class="stat-item">
              <div class="num">180<span style="color:var(--accent)">+</span></div>
              <div class="lbl">Projects Built</div>
            </div>
            <div class="stat-item">
              <div class="num">42<span style="color:var(--accent)">+</span></div>
              <div class="lbl">Design Awards</div>
            </div>
            <div class="stat-item">
              <div class="num">18<span style="color:var(--accent)">+</span></div>
              <div class="lbl">Countries</div>
            </div>
          </div>

          <a href="#projects" class="btn btn-dark btn-arrow"><span>View Our Portfolio</span></a>
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
     PROJECTS SECTION
============================================================ -->
  <section id="projects" class="section-pad">
    <div class="container">
      <div class="projects-header reveal">
        <div>
          <span class="section-label">Selected Work</span>
          <h2>Featured<br />Projects</h2>
        </div>
        <a href="projects.php" class="btn btn-dark btn-arrow"><span>All Projects</span></a>
      </div>

      <div class="projects-grid stagger">

        <!-- Card 1 — Featured (tall) -->
        <div class="project-card featured">
          <img src="assets/images/hero_1.png" alt="The Concrete House — Private Residence" />
          <div class="project-card-overlay"></div>
          <div class="project-card-info">
            <h3>The Concrete House</h3>
            <span>Residential &nbsp;·&nbsp; 2024</span>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="project-card">
          <img src="assets/images/project_2.png" alt="Luminary Interiors — Commercial" />
          <div class="project-card-overlay"></div>
          <div class="project-card-info">
            <h3>Luminary Interiors</h3>
            <span>Interior &nbsp;·&nbsp; 2023</span>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="project-card">
          <img src="assets/images/project_3.png" alt="Meridian Tower — Commercial" />
          <div class="project-card-overlay"></div>
          <div class="project-card-info">
            <h3>Meridian Tower</h3>
            <span>Commercial &nbsp;·&nbsp; 2023</span>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="project-card">
          <img src="assets/images/project_1.png" alt="Forest Villa — Residential" />
          <div class="project-card-overlay"></div>
          <div class="project-card-info">
            <h3>Forest Villa</h3>
            <span>Residential &nbsp;·&nbsp; 2022</span>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="project-card">
          <img src="assets/images/hero_2.png" alt="Skyline Residence — Urban" />
          <div class="project-card-overlay"></div>
          <div class="project-card-info">
            <h3>Skyline Residence</h3>
            <span>Urban &nbsp;·&nbsp; 2022</span>
          </div>
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