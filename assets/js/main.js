// ============================
// ELEMENT REFS
// ============================
const sideNav      = document.getElementById('side-nav');
const topBar       = document.getElementById('top-bar');
const circleBtn    = document.getElementById('circle-menu-btn');
const stickyHeader = document.getElementById('sticky-header');
const stickyCirBtn = document.getElementById('sticky-circle-btn');
const hero         = document.getElementById('hero');

// Section→nav-label mapping (for active highlight)
const sectionMap = [
  { id: 'hero',         label: 'home'      },
  { id: 'about',        label: 'about'     },
  { id: 'services',     label: 'services'  },
  { id: 'projects',     label: 'portfolio' },
  { id: 'footer',       label: 'contact'   },
];

function getActiveSection() {
  let current = 'home';
  sectionMap.forEach(({ id, label }) => {
    const el = document.getElementById(id);
    if (el && window.scrollY >= el.offsetTop - 120) current = label;
  });
  return current;
}

function updateNavActive(label) {
  // side-nav
  sideNav.querySelectorAll('li').forEach(li => {
    li.classList.toggle('active', li.querySelector('a').textContent.trim() === label);
  });
  // sticky-nav
  stickyHeader.querySelectorAll('.sticky-nav li').forEach(li => {
    li.classList.toggle('active', li.querySelector('a').textContent.trim() === label);
  });
}

window.addEventListener('scroll', () => {
  const pastHero = window.scrollY > hero.offsetHeight * 0.75;

  // Toggle hero-state elements
  sideNav.classList.toggle('hidden', pastHero);
  topBar.classList.toggle('hidden', pastHero);
  circleBtn.classList.toggle('hidden', pastHero);

  // Toggle sticky header
  stickyHeader.classList.toggle('visible', pastHero);

  // Back-to-top
  backTop.classList.toggle('show', window.scrollY > 400);

  // Active nav item
  updateNavActive(getActiveSection());
});

// ============================
// MOBILE NAV (both circle buttons open it)
// ============================
const mobileNav    = document.getElementById('mobile-nav');
const mobileClose  = document.getElementById('mobile-nav-close');

function openMenu()  { mobileNav.classList.add('open'); }
function closeMenu() { mobileNav.classList.remove('open'); }

circleBtn.addEventListener('click', openMenu);
stickyCirBtn.addEventListener('click', openMenu);
mobileClose.addEventListener('click', closeMenu);
mobileNav.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));

// ============================
// BACK TO TOP
// ============================
const backTop = document.getElementById('back-top');
backTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// ============================
// OLD HERO SWIPER REMOVED
// ============================

// ============================
// OUR WORK SWIPER
// ============================
const ourWorkTitle = document.querySelector('.our-work-title');
const ourWorkCat   = document.querySelector('.our-work-cat');

const ourWorkSwiper = new Swiper('.our-work-swiper', {
  loop: true,
  speed: 800,
  slidesPerView: 'auto',
  navigation: {
    prevEl: '.our-work-prev',
    nextEl: '.our-work-next'
  },
  on: {
    slideChange() {
      // Find the active slide
      const activeSlide = this.slides[this.activeIndex];
      if (activeSlide && ourWorkTitle && ourWorkCat) {
        ourWorkTitle.textContent = activeSlide.dataset.title || '';
        ourWorkCat.textContent   = activeSlide.dataset.cat   || '';
      }
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

document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger')
  .forEach(el => observer.observe(el));

// ============================
// COUNTER ANIMATION
// ============================
function animateCounter(el) {
  const target = +el.getAttribute('data-target');
  const start  = performance.now();
  const duration = 1800;
  const frame = (now) => {
    const p = Math.min((now - start) / duration, 1);
    const ease = 1 - Math.pow(1 - p, 3);
    el.textContent = Math.floor(ease * target);
    if (p < 1) requestAnimationFrame(frame);
    else el.textContent = target;
  };
  requestAnimationFrame(frame);
}

const counterObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      animateCounter(e.target);
      counterObs.unobserve(e.target);
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('[data-target]').forEach(el => counterObs.observe(el));
