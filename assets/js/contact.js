/* ============================================================
   CONTACT PAGE — contact.js
============================================================ */

(function () {
  'use strict';

  /* ----------------------------------------
     1. Back to Top
  ---------------------------------------- */
  const backTop = document.getElementById('back-top');

  window.addEventListener('scroll', function () {
    if (!backTop) return;
    backTop.classList.toggle('visible', window.scrollY > 300);
  }, { passive: true });

  if (backTop) {
    backTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ----------------------------------------
     2. Contact Form — validation & submit
  ---------------------------------------- */
  const form     = document.getElementById('contact-form');
  const formNote = document.getElementById('ct-form-note');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const name    = document.getElementById('contact-name').value.trim();
      const email   = document.getElementById('contact-email').value.trim();
      const message = document.getElementById('contact-message').value.trim();

      if (!name || !email || !message) {
        showNote('Please fill in all fields.', 'error');
        return;
      }
      if (!isValidEmail(email)) {
        showNote('Please enter a valid email address.', 'error');
        return;
      }

      // Simulate send
      const submitBtn = document.getElementById('ct-submit');
      submitBtn.disabled = true;
      submitBtn.querySelector('span').textContent = 'Sending…';

      setTimeout(() => {
        showNote('Thank you! Your message has been sent.', 'success');
        form.reset();
        submitBtn.disabled = false;
        submitBtn.querySelector('span').textContent = 'Send Message';
      }, 1200);
    });
  }

  function showNote(msg, type) {
    if (!formNote) return;
    formNote.textContent = msg;
    formNote.className = 'ct-form-note ' + type;
    setTimeout(() => {
      formNote.textContent = '';
      formNote.className = 'ct-form-note';
    }, 5000);
  }

  function isValidEmail(e) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e);
  }

})();
