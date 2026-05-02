/* ============================================================
   ABOUT PAGE — Interactive JS
============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* -------------------------------------------------------
     SCROLL REVEAL (reuse classes from main style.css)
  ------------------------------------------------------- */
  const revealEls = document.querySelectorAll(
    '.reveal, .reveal-left, .reveal-right, .stagger'
  );

  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealEls.forEach(el => revealObserver.observe(el));

  /* -------------------------------------------------------
     QUOTE DOT NAVIGATION
  ------------------------------------------------------- */
  const quotes = [
    {
      text: "Our studio is built on the principle that great architecture emerges from collaboration, diverse perspectives, and a shared commitment to excellence. We bring together architects and craftspeople.",
      author: "JACOB, OWNER"
    },
    {
      text: "Architecture is not just about buildings — it is about the experience of space, light, and material. Every project is an opportunity to create something that endures.",
      author: "MARIA, CO-FOUNDER"
    },
    {
      text: "We believe the best design solutions come from listening deeply to our clients and understanding the way they want to live and work in the spaces we create.",
      author: "ROBERT, SENIOR ARCHITECT"
    }
  ];

  let currentQuote = 0;
  const quoteText = document.querySelector('.hs-quote-text');
  const quoteAuthor = document.querySelector('.hs-quote-author');
  const dots = document.querySelectorAll('.hs-dot');

  function setQuote(index) {
    if (!quoteText || !quoteAuthor) return;
    quoteText.style.opacity = '0';
    quoteAuthor.style.opacity = '0';

    setTimeout(() => {
      quoteText.textContent = quotes[index].text;
      quoteAuthor.textContent = quotes[index].author;
      quoteText.style.opacity = '1';
      quoteAuthor.style.opacity = '1';
    }, 280);

    dots.forEach((d, i) => d.classList.toggle('active', i === index));
    currentQuote = index;
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => setQuote(i));
  });

  if (quoteText) {
    quoteText.style.transition = 'opacity 0.3s ease';
    quoteAuthor.style.transition = 'opacity 0.3s ease';
  }

  // Auto-cycle quotes every 5 seconds
  setInterval(() => {
    const next = (currentQuote + 1) % quotes.length;
    setQuote(next);
  }, 5000);

  /* -------------------------------------------------------
     GALLERY NAV (scroll or fade)
  ------------------------------------------------------- */
  const galleryInner = document.querySelector('.hs-gallery-inner');
  const galPrev = document.getElementById('hs-gal-prev');
  const galNext = document.getElementById('hs-gal-next');

  if (galleryInner && galPrev && galNext) {
    galNext.addEventListener('click', () => {
      galleryInner.scrollBy({ left: 320, behavior: 'smooth' });
    });
    galPrev.addEventListener('click', () => {
      galleryInner.scrollBy({ left: -320, behavior: 'smooth' });
    });
  }

  /* -------------------------------------------------------
     HERO PARALLAX (subtle)
  ------------------------------------------------------- */
  const heroBg = document.querySelector('.hs-hero-bg');
  if (heroBg) {
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      heroBg.style.transform = `scale(1.02) translateY(${scrolled * 0.25}px)`;
    }, { passive: true });
  }

});
