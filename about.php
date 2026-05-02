<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About — Civilanka Architecture & Design Studio</title>
  <meta name="description"
    content="Learn about Civilanka's philosophy, team, and approach to architecture and design." />

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
     STICKY HEADER (shown on scroll)
============================================================ -->
  <header id="sticky-header" role="banner" aria-label="Sticky Navigation">
    <!-- Logo left -->
    <a href="index.php" class="sticky-logo" aria-label="Civilanka Home">
      <img src="Logos/sharedImage%20-%20Copy.PNG" alt="Civilanka Architects" class="logo-img logo-img--sticky" />
    </a>

    <!-- Nav center -->
    <ul class="sticky-nav" role="list">
      <li><a href="index.php#hero">home</a></li>
      <li class="active"><a href="about.php">about</a></li>
      <li><a href="index.php#services">pages</a></li>
      <li><a href="index.php#projects">portfolio</a></li>
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
    <a href="index.php#about">about</a>
    <a href="index.php#services">pages</a>
    <a href="index.php#projects">portfolio</a>
    <a href="index.php#testimonials">journal</a>
    <a href="#footer">contact</a>
  </nav>

  <!-- ============================================================
     LEFT VERTICAL NAV
============================================================ -->
  <nav id="side-nav" role="navigation" aria-label="Primary Navigation">
    <ul>
      <li><a href="index.php#hero">home</a></li>
      <li class="active"><a href="about.php">about</a></li>
      <li><a href="index.php#services">pages</a></li>
      <li><a href="index.php#projects">portfolio</a></li>
      <li><a href="#footer">contact</a></li>
    </ul>
  </nav>

  <!-- ============================================================
     TOP BAR
============================================================ -->
  <div id="top-bar" aria-label="Site header">
    <a href="index.php" class="site-logo" aria-label="Civilanka Home">
      <img src="Logos/sharedImage%20-%20Copy.PNG" alt="Civilanka Architects" class="logo-img logo-img--hero" />
    </a>
    <!-- Circle menu button (top right) -->
    <button class="circle-btn" id="circle-menu-btn" aria-label="Open menu" aria-expanded="false"></button>
  </div>

  <!-- ============================================================
     HERO SECTION — OUR STUDIO
============================================================ -->
  <section id="about-hero" class="about-hero-section">
    <div class="about-hero-content">
      <h1 class="about-hero-title">Our Studio</h1>
      <p class="about-hero-subtitle">A place of architects</p>
    </div>
  </section>

  <!-- ============================================================
     STUDIO OVERVIEW SECTION
============================================================ -->
  <section id="studio-overview" class="section-pad">
    <div class="container">
      <div class="studio-overview-grid">
        <div class="studio-overview-text reveal-left">
          <h2>Architects and other engineers meeting to improve the learning and collaboration between one another</h2>
          <p>Our studio is built on the principle that great architecture emerges from collaboration, diverse perspectives, and a shared commitment to excellence. We bring together architects, designers, engineers, and craftspeople who are passionate about creating spaces that inspire and endure.</p>
        </div>
        <div class="studio-overview-image reveal-right">
          <img src="Project%20images/2023-11-07.jpg" alt="Architects collaborating" />
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     APPROACH SECTION (THREE COLUMNS)
============================================================ -->
  <section id="approach-section" class="section-pad">
    <div class="container">
      <div class="approach-grid stagger">
        <div class="approach-card">
          <h3>Design Your Perfect Home</h3>
          <p>We believe every home should be a reflection of its inhabitants. Through careful listening and deep understanding, we craft residential spaces that are both beautiful and deeply functional.</p>
          <a href="#" class="read-more">read more</a>
        </div>
        <div class="approach-card">
          <h3>Urban Exteriors</h3>
          <p>From street-facing facades to public plazas, we design exterior spaces that activate communities and create memorable experiences. Our work respects context while pushing boundaries.</p>
          <a href="#" class="read-more">read more</a>
        </div>
        <div class="approach-card">
          <h3>Cityscapes Buildings</h3>
          <p>We create buildings that become landmarks—structures that define skylines and serve as gathering places. Each project is an opportunity to shape how cities evolve.</p>
          <a href="#" class="read-more">read more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     METHODOLOGY SHOWCASE
============================================================ -->
  <section id="methodology" class="section-pad dark-section">
    <div class="container">
      <div class="methodology-grid">
        <div class="methodology-item">
          <img src="Project%20images/1%20(4).png" alt="Team working on plans" />
        </div>
        <div class="methodology-item">
          <img src="Project%20images/WhatsApp%20Image%202023-07-17%20at%2021.07.37%20(1).jpeg" alt="Design process" />
        </div>
        <div class="methodology-item">
          <img src="Project%20images/A%20(10).png" alt="Technical drawings" />
        </div>
      </div>
      <div class="methodology-text">
        <p>Our design process is rigorous, collaborative, and human-centered. We begin with deep research and stakeholder engagement, develop concepts through iterative sketching and modeling, and refine every detail through close collaboration with builders, engineers, and craftspeople. The result is architecture that is both visionary and grounded in practical reality.</p>
      </div>
    </div>
  </section>

  <!-- ============================================================
     QUOTE BANNER
============================================================ -->
  <section id="about-quote-banner" class="about-quote-banner">
    <div class="container">
      <h2>The whimsical feel of Villa Esther begins with the Neo-Modern gateway in the style of Le Corbusier's Villa Savoye.</h2>
    </div>
  </section>

  <!-- ============================================================
     TIMELINE / VALUES SECTION
============================================================ -->
  <section id="values-section" class="section-pad">
    <div class="container">
      <div class="values-content reveal">
        <span class="section-label">OUR VALUES</span>
        <h2>Principles That Guide Our Work</h2>
        
        <div class="values-grid">
          <div class="value-item">
            <span class="value-number">01</span>
            <h3>Beauty Through Proportion</h3>
            <p>We believe in timeless beauty achieved through careful proportion, light, and materiality. Our designs age gracefully.</p>
          </div>
          <div class="value-item">
            <span class="value-number">02</span>
            <h3>Sustainable Practice</h3>
            <p>Environmental responsibility is integral to our design philosophy. We seek solutions that benefit both people and planet.</p>
          </div>
          <div class="value-item">
            <span class="value-number">03</span>
            <h3>Collaborative Process</h3>
            <p>Great architecture requires diverse voices. We actively engage clients, engineers, and communities in shaping solutions.</p>
          </div>
          <div class="value-item">
            <span class="value-number">04</span>
            <h3>Craft Excellence</h3>
            <p>We honor the craft tradition while embracing innovation. Every detail matters and deserves careful consideration.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     MEET OUR ARCHITECTS SECTION
============================================================ -->
  <section id="team-intro" class="section-pad dark-section">
    <div class="container">
      <div class="team-intro-header reveal">
        <span class="section-label">OUR TEAM</span>
        <h2>Meet Our Architects</h2>
      </div>

      <!-- Founding Partners -->
      <div class="team-row team-founders reveal">
        <div class="team-member-card">
          <div class="team-member-image">
            <img src="team%20images/29.png" alt="Jacob, Founding Partner" />
          </div>
          <div class="team-member-info">
            <h3>Jacob</h3>
            <p class="team-member-title">Founding Partner & Principal Architect</p>
            <p class="team-member-bio">Jacob brings over 20 years of international experience in residential and commercial architecture. His design philosophy emphasizes spatial clarity and material honesty.</p>
            <div class="team-member-socials">
              <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L2.25 2.25h6.832l4.258 5.63 5.904-5.63Zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg></a>
              <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg></a>
              <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.07 1.645.07 4.849 0 3.205-.012 3.584-.07 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z" /></svg></a>
            </div>
          </div>
        </div>

        <div class="team-member-card">
          <div class="team-member-image">
            <img src="team%20images/30.png" alt="Maria, Founding Partner" />
          </div>
          <div class="team-member-info">
            <h3>Maria</h3>
            <p class="team-member-title">Founding Partner & Principal Architect</p>
            <p class="team-member-bio">Maria specializes in interior architecture and has led the design of numerous award-winning residential and hospitality projects. She brings a deep sensitivity to color, texture, and user experience.</p>
            <div class="team-member-socials">
              <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L2.25 2.25h6.832l4.258 5.63 5.904-5.63Zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg></a>
              <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg></a>
              <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.07 1.645.07 4.849 0 3.205-.012 3.584-.07 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z" /></svg></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Senior Architects -->
      <div class="team-row team-seniors reveal" style="margin-top: 80px;">
        <div class="team-member-card">
          <div class="team-member-image">
            <img src="team%20images/32.png" alt="Robert Johnson, Senior Architect" />
          </div>
          <div class="team-member-info">
            <h3>Robert Johnson</h3>
            <p class="team-member-title">Senior Architect</p>
            <div class="team-member-socials">
              <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L2.25 2.25h6.832l4.258 5.63 5.904-5.63Zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg></a>
              <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg></a>
            </div>
          </div>
        </div>

        <div class="team-member-card">
          <div class="team-member-image">
            <img src="team%20images/33.png" alt="Aida Belul, Senior Architect" />
          </div>
          <div class="team-member-info">
            <h3>Aida Belul</h3>
            <p class="team-member-title">Senior Architect</p>
            <div class="team-member-socials">
              <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L2.25 2.25h6.832l4.258 5.63 5.904-5.63Zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg></a>
              <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Team Members -->
      <div class="team-row team-members reveal" style="margin-top: 80px;">
        <div class="team-member-card">
          <div class="team-member-image">
            <img src="team%20images/29.png" alt="Rebecca Vates" />
          </div>
          <div class="team-member-info">
            <h3>Rebecca Vates</h3>
            <p class="team-member-title">Architect</p>
            <div class="team-member-socials">
              <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L2.25 2.25h6.832l4.258 5.63 5.904-5.63Zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg></a>
              <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg></a>
            </div>
          </div>
        </div>

        <div class="team-member-card">
          <div class="team-member-image">
            <img src="team%20images/30.png" alt="Jasmin Dorothy" />
          </div>
          <div class="team-member-info">
            <h3>Jasmin Dorothy</h3>
            <p class="team-member-title">Architect</p>
            <div class="team-member-socials">
              <a href="#" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L2.25 2.25h6.832l4.258 5.63 5.904-5.63Zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg></a>
              <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg></a>
            </div>
          </div>
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
        <h2>Join Our Team Or Work With Us</h2>
        <p>We're always looking for talented designers, architects, and engineers. If you share our passion for thoughtful design, we'd love to hear from you.</p>
        <a href="#footer" class="btn btn-light btn-arrow"><span>Get in touch</span></a>
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
            <li><a href="about.php">About</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="index.php#projects">Projects</a></li>
            <li><a href="index.php#testimonials">Journal</a></li>
            <li><a href="#footer">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="index.php#services">Architectural Design</a></li>
            <li><a href="index.php#services">Interior Architecture</a></li>
            <li><a href="index.php#services">Urban Planning</a></li>
            <li><a href="index.php#services">Landscape Design</a></li>
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
