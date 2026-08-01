/**
 * Ryzoria SMP - Main JavaScript
 * Global scripts and utilities
 */

// ============================================
// DOM Ready
// ============================================

document.addEventListener('DOMContentLoaded', function () {
  console.log('[Ryzoria SMP] Initializing...');
  initHamburgerMenu();
  initScrollAnimations();
  initCopyToClipboard();
  initSmoothScroll();
});

// ============================================
// Hamburger Menu
// ============================================

function initHamburgerMenu() {
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (!hamburger) return;

  hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
  });

  // Close menu when a link is clicked
  const mobileLinks = document.querySelectorAll('.mobile-menu .nav-link');
  mobileLinks.forEach((link) => {
    link.addEventListener('click', function () {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
    });
  });

  // Close menu when clicking outside
  document.addEventListener('click', function (event) {
    if (!event.target.closest('.navbar')) {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
    }
  });
}

// ============================================
// Scroll Animations
// ============================================

function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px',
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade-in-up');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe all cards and elements with data-animate attribute
  document.querySelectorAll('.card, .rank-card, .info-card, .community-card, [data-animate]').forEach((el) => {
    observer.observe(el);
  });
}

// ============================================
// Copy to Clipboard
// ============================================

function initCopyToClipboard() {
  const copyButtons = document.querySelectorAll('[data-copy]');

  copyButtons.forEach((button) => {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      const text = this.getAttribute('data-copy');
      const feedback = this.getAttribute('data-feedback') || 'Copied!';

      // Copy to clipboard
      navigator.clipboard.writeText(text).then(
        function () {
          // Show feedback
          const originalText = button.textContent;
          button.textContent = feedback;
          button.style.borderColor = 'rgba(37, 211, 102, 0.5)';
          button.style.color = '#25D366';

          setTimeout(function () {
            button.textContent = originalText;
            button.style.borderColor = '';
            button.style.color = '';
          }, 2000);
        },
        function () {
          console.error('Failed to copy to clipboard');
        }
      );
    });
  });
}

// ============================================
// Smooth Scroll
// ============================================

function initSmoothScroll() {
  const links = document.querySelectorAll('a[href^="#"]');

  links.forEach((link) => {
    link.addEventListener('click', function (e) {
      const href = this.getAttribute('href');

      if (href === '#') {
        e.preventDefault();
        return;
      }

      const target = document.querySelector(href);

      if (target) {
        e.preventDefault();

        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start',
        });
      }
    });
  });
}

// ============================================
// Scroll to Top Button
// ============================================

function initScrollToTop() {
  const scrollTopBtn = document.getElementById('scrollTopBtn');

  if (!scrollTopBtn) return;

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 300) {
      scrollTopBtn.classList.add('show');
    } else {
      scrollTopBtn.classList.remove('show');
    }
  });

  scrollTopBtn.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
}

// ============================================
// Utilities
// ============================================

// Debounce function
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Add active class to current nav link
function setActiveNavLink() {
  const currentPage = new URLSearchParams(window.location.search).get('page') || 'home';
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach((link) => {
    link.classList.remove('active');
    if (link.getAttribute('href').includes(currentPage)) {
      link.classList.add('active');
    }
  });
}

// Initialize on page load
window.addEventListener('load', function () {
  setActiveNavLink();
  initScrollToTop();
});
