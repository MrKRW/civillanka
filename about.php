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

<body class="about-page">

  <!-- ============================================================
     STICKY HEADER (shown on scroll)
============================================================ -->
  <header id="sticky-header" role="banner" aria-label="Sticky Navigation">
    <!-- Logo left -->
    <a href="index.html" class="sticky-logo" aria-label="Civilanka Home">
      <img src="Logos/sharedImage%20-%20Copy.PNG" alt="Civilanka Architects" class="logo-img logo-img--sticky" />
    </a>

    <!-- Nav center -->
    <ul class="sticky-nav" role="list">
      <li><a href="index.html#hero">home</a></li>
      <li class="active"><a href="about.php">about</a></li>
      <li><a href="index.html#services">pages</a></li>
      <li><a href="index.html#projects">portfolio</a></li>
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
    <a href="about.php">about</a>
    <a href="index.html#services">pages</a>
    <a href="index.html#projects">portfolio</a>
    <a href="index.html#testimonials">journal</a>
    <a href="#footer">contact</a>
  </nav>

  <!-- ============================================================
     LEFT VERTICAL NAV
============================================================ -->
  <nav id="side-nav" role="navigation" aria-label="Primary Navigation">
    <ul>
      <li><a href="index.html#hero">home</a></li>
      <li class="active"><a href="about.php">about</a></li>
      <li><a href="index.html#services">pages</a></li>
      <li><a href="index.html#projects">portfolio</a></li>
      <li><a href="#footer">contact</a></li>
    </ul>
  </nav>

  <!-- ============================================================
     TOP BAR
============================================================ -->
  <div id="top-bar" aria-label="Site header">
    <a href="index.html" class="site-logo" aria-label="Civilanka Home">
      civilanka
    </a>
    <!-- Circle menu button (top right) -->
    <button class="circle-btn" id="circle-menu-btn" aria-label="Open menu" aria-expanded="false"></button>
  </div>

  <!-- ============================================================
     HERO SECTION — OUR STUDIO
============================================================ -->
  <section id="about-hero" class="about-hero-section">
    <div class="hero-overlay"></div>
    <div class="about-hero-content container">
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
          <p>Our studio is built on the principle that great architecture emerges from collaboration, diverse
            perspectives, and a shared commitment to excellence. We bring together architects, designers, engineers, and
            craftspeople who are passionate about creating spaces that inspire and endure.</p>
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
          <p>We believe every home should be a reflection of its inhabitants. Through careful listening and deep
            understanding, we craft residential spaces that are both beautiful and deeply functional.</p>
          <a href="#" class="read-more">read more</a>
        </div>
        <div class="approach-card">
          <h3>Urban Exteriors</h3>
          <p>From street-facing facades to public plazas, we design exterior spaces that activate communities and create
            memorable experiences. Our work respects context while pushing boundaries.</p>
          <a href="#" class="read-more">read more</a>
        </div>
        <div class="approach-card">
          <h3>Cityscapes Buildings</h3>
          <p>We create buildings that become landmarks—structures that define skylines and serve as gathering places.
            Each project is an opportunity to shape how cities evolve.</p>
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
        <p>Our design process is rigorous, collaborative, and human-centered. We begin with deep research and
          stakeholder engagement, develop concepts through iterative sketching and modeling, and refine every detail
          through close collaboration with builders, engineers, and craftspeople. The result is architecture that is
          both visionary and grounded in practical reality.</p>
      </div>
    </div>
  </section>

  <!-- ============================================================
     CENTERED QUOTE SECTION
============================================================ -->
  <section id="centered-quote" class="section-pad">
    <div class="container">
      <div class="centered-quote-inner reveal">
        <p class="main-quote">Our studio is built on the principle that great architecture emerges from collaboration, diverse perspectives, and a shared commitment to excellence. We bring together architects, designers, engineers, and craftspeople.</p>
        <span class="quote-sig">JACOB, OWNER</span>
        <div class="quote-pagination">
          <span class="dash active"></span>
          <span class="dash"></span>
          <span class="dash"></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     QUOTE BANNER
============================================================ -->
  <section id="about-quote-banner" class="about-quote-banner">
    <div class="container">
      <h2>The whimsical feel of Villa Esther begins with the Neo-Modern gateway in the style of Le Corbusier's Villa
        Savoye.</h2>
    </div>
  </section>

  <!-- ============================================================
     AWARDS / LOGOS ROW
============================================================ -->
  <section id="awards-row" class="section-pad-sm">
    <div class="container">
      <div class="awards-grid reveal">
        <div class="award-item"><span>DESIGN<br>AWARD</span></div>
        <div class="award-item"><span>FURNITURE<br>DESIGN</span></div>
        <div class="award-item"><span>PREMIUM<br>LAYOUT</span></div>
        <div class="award-item"><span>DUTCH<br>DESIGN</span></div>
        <div class="award-item"><span>Architecture<br>Award</span></div>
        <div class="award-item"><span>BEST<br>STUDIO</span></div>
      </div>
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
            <p>We believe in timeless beauty achieved through careful proportion, light, and materiality. Our designs
              age gracefully.</p>
          </div>
          <div class="value-item">
            <span class="value-number">02</span>
            <h3>Sustainable Practice</h3>
            <p>Environmental responsibility is integral to our design philosophy. We seek solutions that benefit both
              people and planet.</p>
          </div>
          <div class="value-item">
            <span class="value-number">03</span>
            <h3>Collaborative Process</h3>
            <p>Great architecture requires diverse voices. We actively engage clients, engineers, and communities in
              shaping solutions.</p>
          </div>
          <div class="value-item">
            <span class="value-number">04</span>
            <h3>Craft Excellence</h3>
            <p>We honor the craft tradition while embracing innovation. Every detail matters and deserves careful
              consideration.</p>
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
      <!-- Founding Partners Redesign -->
      <div class="about-founders-section reveal">
        <div class="founders-info">
          <span class="section-label">THE STUDIO</span>
          <h2>Meet our Architects:<br>Jacob and Maria</h2>
          <p>Our founding partners bring together decades of experience and a shared vision for architecture that is both beautiful and functional. They lead every project with passion and a commitment to excellence.</p>
          <a href="#footer" class="read-more">Work with us</a>
        </div>
        <div class="founders-images">
          <div class="founder-img">
            <img src="team%20images/29.png" alt="Jacob" />
          </div>
          <div class="founder-img">
            <img src="team%20images/30.png" alt="Maria" />
          </div>
        </div>
      </div>

      <!-- Other Team Members Redesign -->
      <div class="team-grid-horizontal reveal" style="margin-top: 100px;">
        <!-- Card 1 -->
        <div class="team-card-h">
          <div class="member-img">
            <img src="team%20images/32.png" alt="Robert Johnson" />
          </div>
          <div class="member-info">
            <h3>Robert Johnson</h3>
            <p>Senior Architect</p>
            <div class="member-socials">
              <a href="#">TW</a> / <a href="#">LI</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="team-card-h">
          <div class="member-img">
            <img src="team%20images/33.png" alt="Aida Belul" />
          </div>
          <div class="member-info">
            <h3>Aida Belul</h3>
            <p>Senior Architect</p>
            <div class="member-socials">
              <a href="#">TW</a> / <a href="#">LI</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="team-card-h">
          <div class="member-img">
            <img src="team%20images/29.png" alt="Rebecca Vates" />
          </div>
          <div class="member-info">
            <h3>Rebecca Vates</h3>
            <p>Architect</p>
            <div class="member-socials">
              <a href="#">TW</a> / <a href="#">LI</a>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="team-card-h">
          <div class="member-img">
            <img src="team%20images/30.png" alt="Jasmin Dorothy" />
          </div>
          <div class="member-info">
            <h3>Jasmin Dorothy</h3>
            <p>Architect</p>
            <div class="member-socials">
              <a href="#">TW</a> / <a href="#">LI</a>
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
        <p>We're always looking for talented designers, architects, and engineers. If you share our passion for
          thoughtful design, we'd love to hear from you.</p>
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
          <a href="index.html" aria-label="Civilanka Home">
            <img src="assets/images/logo-transparent.png" alt="Civilanka" class="logo-img logo-img--footer" />
          </a>
          <p>An architecture and design studio dedicated to creating spaces of enduring beauty and purpose.</p>
        </div>

        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="index.html#services">Services</a></li>
            <li><a href="index.html#projects">Projects</a></li>
            <li><a href="index.html#testimonials">Journal</a></li>
            <li><a href="#footer">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="index.html#services">Architectural Design</a></li>
            <li><a href="index.html#services">Interior Architecture</a></li>
            <li><a href="index.html#services">Urban Planning</a></li>
            <li><a href="index.html#services">Landscape Design</a></li>
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