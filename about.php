<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Studio — Civilanka Architecture & Design</title>
  <meta name="description"
    content="Learn about Civilanka's philosophy, founding architects, and our approach to timeless design." />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&family=Inter:wght@300;400;500&display=swap"
    rel="stylesheet" />

  <!-- Styles -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/about.css" />
</head>

<body class="about-page">

  <!-- ============================================================
     STICKY HEADER (shown on scroll)
============================================================ -->
  <header id="sticky-header" role="banner" aria-label="Sticky Navigation">
    <a href="index.html" class="sticky-logo" aria-label="Civilanka Home">
      <img src="Logos/sharedImage%20-%20Copy.PNG" alt="Civilanka Architects" class="logo-img logo-img--sticky" />
    </a>
    <ul class="sticky-nav" role="list">
      <li><a href="index.html#hero">home</a></li>
      <li class="active"><a href="about.php">about</a></li>
      <li><a href="index.html#services">pages</a></li>
      <li><a href="index.html#projects">portfolio</a></li>
      <li><a href="#footer">contact</a></li>
    </ul>
    <button class="sticky-circle" id="sticky-circle-btn" aria-label="Open menu"></button>
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
    <a href="index.html" class="site-logo" aria-label="Civilanka Home">civilanka</a>
    <button class="circle-btn" id="circle-menu-btn" aria-label="Open menu" aria-expanded="false"></button>
  </div>

  <!-- ============================================================
     SECTION 1 — HERO (full-viewport wood-panelled room)
============================================================ -->
  <section id="about-hero" class="hs-hero">
    <div class="hs-hero-bg"></div>
    <div class="hs-hero-content">
      <h1 class="hs-hero-title">Our Studio</h1>
      <span class="hs-hero-sub">a place of architects</span>
    </div>
  </section>

  <!-- ============================================================
     SECTION 2 — INTRO TEXT + PHOTO (2-col split)
============================================================ -->
  <section class="hs-intro">
    <div class="hs-intro-inner">
      <div class="hs-intro-left reveal-left">
        <h2 class="hs-intro-heading">Architects and other engineers meeting to improve the learning and collaboration between one another</h2>
        <p class="hs-intro-body">Our studio is built on the principle that great architecture emerges from collaboration, diverse perspectives, and a shared commitment to excellence. We bring together architects, designers, engineers, and craftspeople who are passionate about creating spaces that inspire and endure.</p>
      </div>
      <div class="hs-intro-right reveal-right">
        <div class="hs-intro-img-wrap">
          <img src="Project%20images/2023-11-07.jpg" alt="Architects collaborating in studio" />
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     SECTION 3 — THREE APPROACH COLUMNS (below intro)
============================================================ -->
  <section class="hs-approach">
    <div class="hs-approach-inner stagger">
      <div class="hs-approach-col">
        <h3 class="hs-approach-title"><a href="#">Design Your Perfect Home</a></h3>
        <p>We believe every home should be a reflection of its inhabitants. Through careful listening and deep understanding, we craft residential spaces that are both beautiful and deeply functional.</p>
        <a href="#" class="hs-read-more">read more</a>
      </div>
      <div class="hs-approach-col">
        <h3 class="hs-approach-title">Urban Exteriors</h3>
        <p>From street-facing facades to public plazas, we design exterior spaces that activate communities and create memorable experiences. Our work respects context while pushing boundaries of the discipline.</p>
        <a href="#" class="hs-read-more">read more</a>
      </div>
      <div class="hs-approach-col">
        <h3 class="hs-approach-title">Cityscapes Buildings</h3>
        <p>We create buildings that become landmarks — structures that define skylines and serve as gathering places. Each project is an opportunity to shape how cities evolve and communities connect.</p>
        <a href="#" class="hs-read-more">read more</a>
      </div>
    </div>
  </section>

  <!-- ============================================================
     SECTION 4 — THREE-IMAGE GALLERY (dark bg, horizontal)
============================================================ -->
  <section class="hs-gallery">
    <div class="hs-gallery-wrapper">
      <div class="hs-gallery-slider" id="hs-gallery-slider">
        <div class="hs-gallery-item active">
          <img src="Project%20images/1%20(4).png" alt="Studio interior" />
        </div>
        <div class="hs-gallery-item">
          <img src="Project%20images/WhatsApp%20Image%202023-07-17%20at%2021.07.37%20(1).jpeg" alt="Team at work" />
        </div>
        <div class="hs-gallery-item">
          <img src="Project%20images/A%20(10).png" alt="Technical drawings" />
        </div>
        <div class="hs-gallery-item">
          <img src="Project%20images/2023-11-07.jpg" alt="Architects collaborating" />
        </div>
        <div class="hs-gallery-item">
          <img src="Project%20images/hero_exterior.png" alt="Hero exterior" />
        </div>
      </div>
    </div>
    <div class="hs-gallery-controls">
      <div class="hs-gallery-counter">
        <span id="hs-gal-current">1</span>/<span id="hs-gal-total">5</span>
      </div>
      <div class="hs-gallery-nav">
        <button id="hs-gal-prev" aria-label="Previous">&#8592;</button>
        <button id="hs-gal-next" aria-label="Next">&#8594;</button>
      </div>
    </div>
  </section>

  <!-- ============================================================
     SECTION 5 — CENTERED QUOTE / TESTIMONIAL
============================================================ -->
  <section class="hs-quote">
    <div class="hs-quote-inner reveal">
      <p class="hs-quote-text">Our studio is built on the principle that great architecture emerges from collaboration, diverse perspectives, and a shared commitment to excellence. We bring together architects and craftspeople.</p>
      <span class="hs-quote-author">JACOB, OWNER</span>
      <div class="hs-quote-dots">
        <span class="hs-dot active"></span>
        <span class="hs-dot"></span>
        <span class="hs-dot"></span>
      </div>
    </div>
  </section>

  <!-- ============================================================
     SECTION 6 — FULL-WIDTH BUILDING IMAGE WITH OVERLAY TEXT
============================================================ -->
  <section class="hs-banner">
    <div class="hs-banner-bg"></div>
    <div class="hs-banner-content">
      <h2 class="hs-banner-quote">The whimsical feel of Villa Esther begins with the Neo-Modern gateway in the style of Le Corbusier's Villa Savoye.</h2>
    </div>
  </section>

  <!-- ============================================================
     SECTION 7 — STATS ROW (below banner)
============================================================ -->
  <section class="hs-stats">
    <div class="hs-stats-inner">
      <div class="hs-stat-item reveal">
        <span class="hs-stat-num">24</span>
        <span class="hs-stat-label">Projects<br>Completed</span>
      </div>
      <div class="hs-stat-divider"></div>
      <div class="hs-stat-item reveal">
        <span class="hs-stat-num">12</span>
        <span class="hs-stat-label">Design<br>Awards</span>
      </div>
      <div class="hs-stat-divider"></div>
      <div class="hs-stat-item reveal">
        <span class="hs-stat-num">8</span>
        <span class="hs-stat-label">Years of<br>Practice</span>
      </div>
      <div class="hs-stat-divider"></div>
      <div class="hs-stat-item reveal">
        <span class="hs-stat-num">40+</span>
        <span class="hs-stat-label">Happy<br>Clients</span>
      </div>
      <div class="hs-stat-nav">
        <button aria-label="Previous stat">&#8592;</button>
        <button aria-label="Next stat">&#8594;</button>
      </div>
    </div>
  </section>

  <!-- ============================================================
     SECTION 8 — MEET OUR ARCHITECTS (text left + 2 portraits right)
============================================================ -->
  <section class="hs-founders">
    <div class="hs-founders-inner">
      <div class="hs-founders-text reveal-left">
        <h2 class="hs-founders-heading">Meet our Architects:<br>Jacob and Maria</h2>
        <p>Our founding partners bring together decades of experience and a shared vision for architecture that is both beautiful and functional. They lead every project with passion and a commitment to timeless excellence.</p>
        <a href="#footer" class="hs-read-more" style="margin-top:2rem;display:inline-block;">Work with us</a>
      </div>
      <div class="hs-founders-photos">
        <div class="hs-founder-photo reveal">
          <img src="team%20images/32.png" alt="Jacob, Founding Architect" />
        </div>
        <div class="hs-founder-photo reveal">
          <img src="team%20images/33.png" alt="Maria, Founding Architect" />
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     SECTION 9 — TEAM GRID (2×2 cards: photo + info alternating)
============================================================ -->
  <section class="hs-team">
    <div class="hs-team-grid">

      <!-- Row 1 -->
      <div class="hs-team-card">
        <div class="hs-tc-photo">
          <img src="team%20images/32.png" alt="Robert Johnson" />
        </div>
        <div class="hs-tc-info">
          <h3 class="hs-tc-name">Robert Johnson</h3>
          <p class="hs-tc-role">Senior Architect</p>
          <div class="hs-tc-socials">
            <span class="hs-stars">&#9733; &#9733; &#9733;</span>
          </div>
        </div>
      </div>

      <div class="hs-team-card">
        <div class="hs-tc-photo">
          <img src="team%20images/33.png" alt="Aida Belul" />
        </div>
        <div class="hs-tc-info">
          <h3 class="hs-tc-name">Aida Belul</h3>
          <p class="hs-tc-role">Senior Architect</p>
          <div class="hs-tc-socials">
            <span class="hs-stars">&#9733; &#9733; &#9733;</span>
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="hs-team-card">
        <div class="hs-tc-photo">
          <img src="team%20images/29.png" alt="Rebecca Vates" />
        </div>
        <div class="hs-tc-info">
          <h3 class="hs-tc-name">Rebecca Vates</h3>
          <p class="hs-tc-role">Architect</p>
          <div class="hs-tc-socials">
            <span class="hs-stars">&#9733; &#9733; &#9733;</span>
          </div>
        </div>
      </div>

      <div class="hs-team-card">
        <div class="hs-tc-photo">
          <img src="team%20images/30.png" alt="Jasmin Dorothy" />
        </div>
        <div class="hs-tc-info">
          <h3 class="hs-tc-name">Jasmin Dorothy</h3>
          <p class="hs-tc-role">Architect</p>
          <div class="hs-tc-socials">
            <span class="hs-stars">&#9733; &#9733; &#9733;</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
     SECTION 10 — CTA STRIP (light background, centered)
============================================================ -->
  <section class="hs-cta">
    <div class="hs-cta-inner reveal">
      <p class="hs-cta-text">Our studio is built on the principle that great architecture emerges from collaboration. If you share our passion for thoughtful design, we'd love to hear from you.</p>
      <a href="#footer" class="hs-cta-btn">Contact Us</a>
    </div>
  </section>

  <!-- ============================================================
     FOOTER
============================================================ -->
  <footer id="footer" role="contentinfo">
    <div class="hs-footer-inner">
      <div class="hs-footer-brand">
        <a href="index.html" class="hs-footer-logo">
          <span class="hs-footer-logo-bold">Civilanka</span>
          <span class="hs-footer-logo-light">Architects</span>
        </a>
      </div>

      <div class="hs-footer-cols">
        <div class="hs-footer-col">
          <span class="hs-footer-col-label">Navigate</span>
          <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="index.html#services">Services</a></li>
            <li><a href="index.html#projects">Projects</a></li>
            <li><a href="index.html#testimonials">Journal</a></li>
            <li><a href="#footer">Contact</a></li>
          </ul>
        </div>

        <div class="hs-footer-col">
          <span class="hs-footer-col-label">Explore</span>
          <ul>
            <li><a href="index.html#services">Architectural Design</a></li>
            <li><a href="index.html#services">Interior Architecture</a></li>
            <li><a href="index.html#services">Urban Planning</a></li>
            <li><a href="index.html#services">Landscape Design</a></li>
          </ul>
        </div>

        <div class="hs-footer-col">
          <span class="hs-footer-col-label">Contact</span>
          <address>
            <span>24 Studio Lane</span>
            <span>Colombo 03, Sri Lanka</span>
            <a href="tel:+94112345678">+94 11 234 5678</a>
            <a href="mailto:hello@civillanka.com">hello@civillanka.com</a>
          </address>
        </div>
      </div>
    </div>

    <div class="hs-footer-bottom">
      <p>&copy; 2025 Civilanka Architecture Studio. All rights reserved.</p>
    </div>
  </footer>

  <!-- Back to top -->
  <button id="back-top" aria-label="Back to top">&#8593;</button>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/about.js"></script>

</body>

</html>