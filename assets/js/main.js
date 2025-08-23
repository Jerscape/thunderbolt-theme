// assets/js/main.js
(function () {
  const toggle = document.getElementById('navToggle');
  const nav = document.getElementById('navMenu');
  if (!toggle || !nav) return;

  function closeNav() {
    nav.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
  }

  toggle.addEventListener('click', () => {
    const expanded = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', String(!expanded));
    nav.classList.toggle('open', !expanded);
  });

  // Close on ESC
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeNav();
  });

  // Close when a link is clicked
  nav.addEventListener('click', (e) => {
    const a = e.target.closest('a');
    if (a) closeNav();
  });

  // Expose header height for sticky offsets if needed
  const header = document.querySelector('.header');
  const setHeaderH = () => {
    if (header) document.documentElement.style.setProperty('--header-height', `${header.offsetHeight}px`);
  };
  window.addEventListener('load', setHeaderH);
  window.addEventListener('resize', setHeaderH);
})();
