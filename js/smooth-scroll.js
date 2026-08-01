/**
 * Ryzoria SMP - Smooth Scroll
 * Smooth scrolling functionality
 */

// ============================================
// Smooth Scroll Configuration
// ============================================

const SCROLL_DURATION = 1000; // ms
const SCROLL_OFFSET = 70; // navbar height offset

// ============================================
// Smooth Scroll Function
// ============================================

function smoothScrollTo(target, duration = SCROLL_DURATION) {
  if (typeof target === 'string') {
    target = document.querySelector(target);
  }

  if (!target) return;

  const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - SCROLL_OFFSET;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  let start = null;

  function animation(currentTime) {
    if (start === null) start = currentTime;
    const timeElapsed = currentTime - start;
    const progress = Math.min(timeElapsed / duration, 1);

    // Easing function (ease-in-out-cubic)
    const easeProgress = progress < 0.5 ? 4 * progress * progress * progress : 1 - Math.pow(-2 * progress + 2, 3) / 2;

    window.scrollTo(0, startPosition + distance * easeProgress);

    if (timeElapsed < duration) {
      requestAnimationFrame(animation);
    }
  }

  requestAnimationFrame(animation);
}

// ============================================
// Scroll to Top
// ============================================

function scrollToTop() {
  smoothScrollTo(0, 800);
}

// ============================================
// Page Scroll Events
// ============================================

document.addEventListener('DOMContentLoaded', function () {
  // Smooth scroll for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach((link) => {
    link.addEventListener('click', function (e) {
      const href = this.getAttribute('href');

      if (href === '#' || href === '') {
        e.preventDefault();
        return;
      }

      const target = document.querySelector(href);

      if (target) {
        e.preventDefault();
        smoothScrollTo(target, SCROLL_DURATION);

        // Update URL without page reload
        window.history.pushState({ path: href }, '', href);
      }
    });
  });

  // Scroll to top button
  const scrollTopBtn = document.getElementById('scrollTopBtn');

  if (scrollTopBtn) {
    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 300) {
        scrollTopBtn.style.opacity = '1';
        scrollTopBtn.style.visibility = 'visible';
      } else {
        scrollTopBtn.style.opacity = '0';
        scrollTopBtn.style.visibility = 'hidden';
      }
    });

    scrollTopBtn.addEventListener('click', scrollToTop);
  }
});

// ============================================
// Scroll to Section on Page Load
// ============================================

window.addEventListener('load', function () {
  const hash = window.location.hash;

  if (hash) {
    setTimeout(function () {
      smoothScrollTo(hash, 800);
    }, 100);
  }
});

// ============================================
// Keyboard Navigation
// ============================================

document.addEventListener('keydown', function (e) {
  // Home key - scroll to top
  if (e.key === 'Home') {
    e.preventDefault();
    scrollToTop();
  }

  // End key - scroll to bottom
  if (e.key === 'End') {
    e.preventDefault();
    smoothScrollTo(document.body.scrollHeight, 800);
  }

  // Page Up - scroll up
  if (e.key === 'PageUp') {
    e.preventDefault();
    window.scrollBy({
      top: -window.innerHeight,
      behavior: 'smooth',
    });
  }

  // Page Down - scroll down
  if (e.key === 'PageDown') {
    e.preventDefault();
    window.scrollBy({
      top: window.innerHeight,
      behavior: 'smooth',
    });
  }
});

// ============================================
// Scroll Progress Bar (Optional)
// ============================================

function initScrollProgressBar() {
  const progressBar = document.getElementById('scrollProgressBar');

  if (!progressBar) return;

  window.addEventListener('scroll', function () {
    const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
    progressBar.style.width = scrollPercentage + '%';
  });
}

document.addEventListener('DOMContentLoaded', initScrollProgressBar);

// ============================================
// Parallax Scroll Effect (Optional)
// ============================================

function initParallaxScroll() {
  const parallaxElements = document.querySelectorAll('[data-parallax]');

  if (parallaxElements.length === 0) return;

  window.addEventListener('scroll', function () {
    parallaxElements.forEach((element) => {
      const scrollPosition = window.pageYOffset;
      const elementOffset = element.offsetTop;
      const distance = scrollPosition - elementOffset;
      const parallaxSpeed = element.getAttribute('data-parallax') || 0.5;

      element.style.backgroundPosition = `center ${distance * parallaxSpeed}px`;
    });
  });
}

document.addEventListener('DOMContentLoaded', initParallaxScroll);

// ============================================
// Scroll Snap (for supported browsers)
// ============================================

function initScrollSnap() {
  if (!CSS.supports('scroll-snap-type', 'y mandatory')) {
    console.log('Scroll snap not supported');
    return;
  }

  // Scroll snap is handled via CSS
  console.log('Scroll snap enabled');
}

document.addEventListener('DOMContentLoaded', initScrollSnap);
