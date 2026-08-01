/**
 * Ryzoria SMP - Navbar JavaScript
 * Navbar specific functionality
 */

// ============================================
// Navbar Scroll Effect
// ============================================

let lastScrollTop = 0;
let isNavbarVisible = true;

function handleNavbarScroll() {
  const navbar = document.querySelector('.navbar');
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop === 0) {
    // At top
    navbar.style.borderBottomColor = 'rgba(97, 225, 255, 0.1)';
    navbar.style.boxShadow = 'none';
  } else {
    // Scrolled down
    navbar.style.borderBottomColor = 'rgba(97, 225, 255, 0.2)';
    navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.3)';
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
}

// Debounce scroll handler
function debounceScroll(func, wait) {
  let timeout;
  return function (...args) {
    clearTimeout(timeout);
    timeout = setTimeout(() => func(...args), wait);
  };
}

window.addEventListener('scroll', debounceScroll(handleNavbarScroll, 50));

// ============================================
// Sticky Navbar on Mobile
// ============================================

function updateNavbarOnMobile() {
  const navbar = document.querySelector('.navbar');

  if (window.innerWidth <= 768) {
    navbar.style.position = 'sticky';
  }
}

window.addEventListener('resize', updateNavbarOnMobile);
window.addEventListener('load', updateNavbarOnMobile);

// ============================================
// Close Mobile Menu on Link Click
// ============================================

function setupMobileMenuClose() {
  const navLinks = document.querySelectorAll('.nav-link');
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  navLinks.forEach((link) => {
    link.addEventListener('click', function () {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
    });
  });
}

document.addEventListener('DOMContentLoaded', setupMobileMenuClose);

// ============================================
// Active Link Highlighting
// ============================================

function updateActiveLink() {
  const urlParams = new URLSearchParams(window.location.search);
  const currentPage = urlParams.get('page') || 'home';
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach((link) => {
    link.classList.remove('active');

    const href = link.getAttribute('href');

    if (currentPage === 'home' && href === '/') {
      link.classList.add('active');
    } else if (href.includes(`page=${currentPage}`)) {
      link.classList.add('active');
    }
  });
}

document.addEventListener('DOMContentLoaded', updateActiveLink);
window.addEventListener('load', updateActiveLink);

// ============================================
// Logo Click Handler
// ============================================

function setupLogoClick() {
  const logo = document.querySelector('.navbar-logo a');

  if (logo) {
    logo.addEventListener('click', function () {
      window.location.href = '/';
    });
  }
}

document.addEventListener('DOMContentLoaded', setupLogoClick);

// ============================================
// Hover Effects for Nav Links
// ============================================

function setupNavHoverEffects() {
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach((link) => {
    link.addEventListener('mouseenter', function () {
      this.style.transition = 'all 0.3s ease';
    });
  });
}

document.addEventListener('DOMContentLoaded', setupNavHoverEffects);
