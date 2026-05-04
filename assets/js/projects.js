/**
 * CivilLanka — Projects Page (public)
 * Fetches published projects from the API and renders them
 * in a filterable masonry-style grid.
 */
(function () {
  const API = 'api/projects.php';
  const UPLOAD = 'uploads/projects/';
  const grid = document.getElementById('pj-grid');
  const emptyState = document.getElementById('pj-empty');
  const countText = document.getElementById('pj-count-text');
  const filterBtns = document.querySelectorAll('.pj-filter-btn');

  let allProjects = [];
  let activeFilter = 'all';

  /* ── LOAD ──────────────────────────────── */
  async function loadProjects() {
    try {
      const res = await fetch(API + '?action=list&status=published');
      const data = await res.json();
      allProjects = data.projects || [];
      renderProjects();
    } catch (e) {
      grid.innerHTML = '';
      emptyState.style.display = 'block';
      countText.textContent = 'Unable to load projects';
    }
  }

  /* ── RENDER ────────────────────────────── */
  function renderProjects() {
    const filtered = activeFilter === 'all'
      ? allProjects
      : allProjects.filter(p => p.category === activeFilter);

    if (filtered.length === 0) {
      grid.innerHTML = '';
      grid.parentElement.style.display = 'none';
      emptyState.style.display = 'block';
      countText.textContent = activeFilter === 'all'
        ? 'No projects yet'
        : `No ${activeFilter} projects found`;
      return;
    }

    grid.parentElement.style.display = '';
    emptyState.style.display = 'none';

    // Count text
    const label = activeFilter === 'all' ? 'projects' : activeFilter + ' projects';
    countText.textContent = `Showing ${filtered.length} ${label}`;

    // Build cards
    grid.innerHTML = filtered.map(p => {
      const imgSrc = p.image_main
        ? UPLOAD + p.image_main
        : 'Project%20images/2023-11-07.jpg';

      const badgeClass = p.category === 'international'
        ? 'pj-card-badge--international'
        : 'pj-card-badge--local';

      const starHtml = p.featured == 1
        ? `<span class="pj-card-star visible"><svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></span>`
        : '';

      const metaParts = [];
      if (p.service_type) {
        metaParts.push(`<span class="pj-card-service">${escHtml(p.service_type)}</span>`);
      }
      if (p.location) {
        if (metaParts.length) metaParts.push(`<span class="pj-card-meta-sep">|</span>`);
        metaParts.push(`<span class="pj-card-location">${escHtml(p.location)}</span>`);
      }
      if (p.year) {
        if (metaParts.length) metaParts.push(`<span class="pj-card-meta-sep">|</span>`);
        metaParts.push(`<span class="pj-card-year">${p.year}</span>`);
      }

      return `
        <article class="pj-card">
          <div class="pj-card-img">
            <img src="${imgSrc}" alt="${escAttr(p.title)}" loading="lazy" />
            <span class="pj-card-badge ${badgeClass}">${p.category}</span>
            ${starHtml}
          </div>
          <div class="pj-card-info">
            <h3 class="pj-card-title">${escHtml(p.title)}</h3>
            <div class="pj-card-meta">${metaParts.join('')}</div>
          </div>
        </article>`;
    }).join('');
  }

  /* ── FILTERS ───────────────────────────── */
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeFilter = btn.dataset.filter;
      renderProjects();
    });
  });

  /* ── HELPERS ───────────────────────────── */
  function escHtml(s) {
    const d = document.createElement('div');
    d.textContent = s || '';
    return d.innerHTML;
  }

  function escAttr(s) {
    return (s || '').replace(/"/g, '&quot;').replace(/'/g, '&#39;');
  }

  /* ── INIT ──────────────────────────────── */
  loadProjects();
})();
