/* ============================================================
   BLOG PAGE LOGIC — blog.js
   Handles category filtering and "Load More" simulation.
============================================================ */

document.addEventListener('DOMContentLoaded', () => {
  const filterBtns = document.querySelectorAll('.bl-filter-btn');
  const blogCards = document.querySelectorAll('.bl-card');
  const loadMoreBtn = document.getElementById('bl-load-more');
  const backTop = document.getElementById('back-top');

  // ----------------------------------------
  // CATEGORY FILTERING
  // ----------------------------------------
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;

      // Update button active state
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // Filter cards
      blogCards.forEach(card => {
        const categories = card.dataset.category.split(' ');
        
        if (filter === 'all' || categories.includes(filter)) {
          card.classList.remove('bl-hidden');
          card.classList.add('bl-fade-in');
        } else {
          card.classList.add('bl-hidden');
          card.classList.remove('bl-fade-in');
        }
      });
    });
  });

  // ----------------------------------------
  // LOAD MORE SIMULATION
  // ----------------------------------------
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', () => {
      loadMoreBtn.innerHTML = '<span>Loading...</span>';
      loadMoreBtn.disabled = true;

      // Simulate network delay
      setTimeout(() => {
        // In a real app, you would fetch and append new items here.
        // For now, we'll just show a message.
        loadMoreBtn.innerHTML = '<span>All Articles Loaded</span>';
        loadMoreBtn.style.opacity = '0.5';
        loadMoreBtn.style.cursor = 'default';
      }, 1200);
    });
  }

  // ----------------------------------------
  // BACK TO TOP VISIBILITY
  // (Main.js handles the click, but we handle the show class here if not shared)
  // ----------------------------------------
  window.addEventListener('scroll', () => {
    if (backTop) {
      if (window.scrollY > 400) {
        backTop.classList.add('visible');
      } else {
        backTop.classList.remove('visible');
      }
    }
  });
});
