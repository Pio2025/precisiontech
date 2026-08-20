document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('.site-header');
  var navToggle = document.querySelector('.nav-toggle');
  var navLinks = document.querySelector('.nav-links');
  var navOverlay = document.querySelector('.nav-overlay');
  var toTop = document.querySelector('.to-top');

  function onScroll() {
    var y = window.scrollY || window.pageYOffset;
    if (header) header.classList.toggle('is-scrolled', y > 12);
    if (toTop) toTop.classList.toggle('is-visible', y > 500);
  }
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  function closeNav() {
    if (navToggle) navToggle.classList.remove('is-open');
    if (navLinks) navLinks.classList.remove('is-open');
    if (navOverlay) navOverlay.classList.remove('is-open');
    document.body.style.overflow = '';
  }

  function openNav() {
    if (navToggle) navToggle.classList.add('is-open');
    if (navLinks) navLinks.classList.add('is-open');
    if (navOverlay) navOverlay.classList.add('is-open');
    document.body.style.overflow = 'hidden';
  }

  if (navToggle) {
    navToggle.addEventListener('click', function () {
      var isOpen = navLinks.classList.contains('is-open');
      isOpen ? closeNav() : openNav();
    });
  }

  if (navOverlay) navOverlay.addEventListener('click', closeNav);

  document.querySelectorAll('.nav-links a').forEach(function (link) {
    link.addEventListener('click', closeNav);
  });

  if (toTop) {
    toTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );
    revealEls.forEach(function (el, i) {
      el.style.transitionDelay = (i % 3) * 90 + 'ms';
      io.observe(el);
    });

    // Safety net: guarantee nothing stays hidden if it slips past
    // the observer (fast programmatic scroll, odd viewport states).
    setTimeout(function () {
      document.querySelectorAll('.reveal:not(.is-visible)').forEach(function (el) {
        el.classList.add('is-visible');
      });
    }, 2500);
  } else {
    revealEls.forEach(function (el) {
      el.classList.add('is-visible');
    });
  }

  var contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      var valid = true;
      contactForm.querySelectorAll('[required]').forEach(function (field) {
        var errorEl = field.closest('.form-group').querySelector('.form-error');
        if (!field.value.trim()) {
          valid = false;
          if (errorEl) errorEl.textContent = 'This field is required.';
        } else if (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
          valid = false;
          if (errorEl) errorEl.textContent = 'Please enter a valid email address.';
        } else if (errorEl) {
          errorEl.textContent = '';
        }
      });
      if (!valid) e.preventDefault();
    });
  }
});
