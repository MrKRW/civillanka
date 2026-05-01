// ============================
// ELEMENT REFS
// ============================
const sideNav      = document.getElementById('side-nav');
const topBar       = document.getElementById('top-bar');
const stickyHeader = document.getElementById('sticky-header');
const hero         = document.getElementById('hero');

// Section→nav-label mapping (for active highlight)
const sectionMap = [
  { id: 'hero',         label: 'home'      },
  { id: 'about',        label: 'about'     },
  { id: 'services',     label: 'pages'     },
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
  const pastHero = window.scrollY > 50;

  // Toggle hero-state elements
  sideNav.classList.toggle('hidden', pastHero);
  topBar.classList.toggle('hidden', pastHero);

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
  autoplay: { delay: 2000, disableOnInteraction: false },
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
  // Use horizontal slide animation (default)
  direction: 'horizontal',
  // Removed fade effect for slide transition
  autoplay: { delay: 6000, disableOnInteraction: false },
  navigation: { prevEl: '.test-prev', nextEl: '.test-next' }
});

// ============================
// HORIZONTAL ACCORDION
// ============================
const accHeaders = document.querySelectorAll('.acc-header');
const accCloses  = document.querySelectorAll('.acc-close');

accHeaders.forEach(header => {
  header.addEventListener('click', () => {
    // Remove active from all items
    document.querySelectorAll('.acc-item').forEach(item => {
      item.classList.remove('active');
      const icon = item.querySelector('.acc-icon');
      if(icon) icon.innerHTML = '+';
    });
    
    // Add active to clicked item
    const parentItem = header.parentElement;
    parentItem.classList.add('active');
    const activeIcon = parentItem.querySelector('.acc-icon');
    if(activeIcon) activeIcon.innerHTML = '&minus;';
  });
});

accCloses.forEach(closeBtn => {
  closeBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    const parentItem = closeBtn.closest('.acc-item');
    if (parentItem) {
      parentItem.classList.remove('active');
      const icon = parentItem.querySelector('.acc-icon');
      if(icon) icon.innerHTML = '+';
    }
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

document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger, .reveal-up')
  .forEach(el => observer.observe(el));

// ============================
// TEAM LEFT-SLIDE ANIMATION
// ============================
const teamSection = document.getElementById('team');
if (teamSection) {
  const teamObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        teamSection.querySelectorAll('.team-cell').forEach(cell => {
          cell.classList.add('slide-in');
        });
        teamObserver.unobserve(teamSection);
      }
    });
  }, { threshold: 0.1 });
  teamObserver.observe(teamSection);
}

