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
// HERO SWIPER — slide left
// ============================
const slides     = document.querySelectorAll('.hero-slide');
const captionTitle = document.querySelector('.hero-caption-title');
const captionCat   = document.querySelector('.hero-caption-cat');
const dashes       = document.querySelectorAll('.hero-pagination .dash');

function updateCaption(index) {
  const slide = slides[index];
  captionTitle.textContent = slide.dataset.title || '';
  captionCat.textContent   = slide.dataset.cat   || '';
  dashes.forEach((d, i) => d.classList.toggle('active', i === index));
}

const heroSwiper = new Swiper('.hero-swiper', {
  loop: true,
  speed: 900,
  effect: 'slide',            // slide left
  direction: 'horizontal',
  autoplay: { delay: 5500, disableOnInteraction: false },
  on: {
    slideChange() {
      updateCaption(this.realIndex);
    }
  }
});

// Dash clicks navigate slider
dashes.forEach(d => {
  d.addEventListener('click', () => {
    heroSwiper.slideToLoop(+d.dataset.index);
  });
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
