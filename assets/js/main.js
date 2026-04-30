// ============================
// HEADER SCROLL BEHAVIOR
// ============================
const header = document.getElementById('site-header');
window.addEventListener('scroll', () => {
  header.classList.toggle('scrolled', window.scrollY > 80);
  backTop.classList.toggle('show', window.scrollY > 400);
});

// ============================
// MOBILE MENU
// ============================
const mobileNav = document.getElementById('mobile-nav');
const menuToggle = document.getElementById('menu-toggle');
const mobileClose = document.getElementById('mobile-nav-close');

menuToggle.addEventListener('click', () => mobileNav.classList.add('open'));
mobileClose.addEventListener('click', () => mobileNav.classList.remove('open'));
mobileNav.querySelectorAll('a').forEach(a => {
  a.addEventListener('click', () => mobileNav.classList.remove('open'));
});

// ============================
// BACK TO TOP
// ============================
const backTop = document.getElementById('back-top');
backTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// ============================
// HERO SWIPER
// ============================
const heroSwiper = new Swiper('.hero-swiper', {
  loop: true,
  speed: 1200,
  effect: 'fade',
  fadeEffect: { crossFade: true },
  autoplay: { delay: 5500, disableOnInteraction: false },
  navigation: { prevEl: '.hero-prev', nextEl: '.hero-next' },
  on: {
    slideChange() {
      const idx = (this.realIndex + 1).toString().padStart(2, '0');
      document.querySelector('.hero-counter .current').textContent = idx;
    }
  }
});

// ============================
// TESTIMONIALS SWIPER
// ============================
const testSwiper = new Swiper('.test-swiper', {
  loop: true,
  speed: 900,
  effect: 'fade',
  fadeEffect: { crossFade: true },
  autoplay: { delay: 6000, disableOnInteraction: false },
  navigation: { prevEl: '.test-prev', nextEl: '.test-next' }
});

// ============================
// SERVICES VERTICAL TABS
// ============================
const tabItems = document.querySelectorAll('.tab-item');
const panels   = document.querySelectorAll('.panel-content');

tabItems.forEach((tab, i) => {
  tab.addEventListener('click', () => {
    tabItems.forEach(t => t.classList.remove('active'));
    panels.forEach(p => p.classList.remove('active'));
    tab.classList.add('active');
    panels[i].classList.add('active');
  });
});

// ============================
// SCROLL REVEAL
// ============================
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      observer.unobserve(e.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger').forEach(el => observer.observe(el));

// ============================
// COUNTER ANIMATION
// ============================
function animateCounter(el) {
  const target = +el.getAttribute('data-target');
  const duration = 1800;
  const start = performance.now();
  const frame = (now) => {
    const progress = Math.min((now - start) / duration, 1);
    const ease = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.floor(ease * target);
    if (progress < 1) requestAnimationFrame(frame);
    else el.textContent = target;
  };
  requestAnimationFrame(frame);
}

const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      animateCounter(e.target);
      counterObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('[data-target]').forEach(el => counterObserver.observe(el));
