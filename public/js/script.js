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
  initPlayMinecraftButton();
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
// Copy to Clipboard with Toast Notifications
// ============================================

function showToast(message, type = 'success') {
  const toast = document.createElement('div');
  toast.className = `toast toast-${type}`;
  toast.innerHTML = message;
  toast.style.cssText = `
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    background: ${type === 'success' ? 'rgba(37, 211, 102, 0.95)' : 'rgba(239, 68, 68, 0.95)'};
    color: white;
    padding: 1rem 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-weight: 600;
    animation: slideInUp 0.3s ease;
    max-width: 300px;
  `;
  
  document.body.appendChild(toast);
  
  setTimeout(() => {
    toast.style.animation = 'slideOutDown 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 2500);
}

function copyToClipboard(text) {
  return new Promise((resolve, reject) => {
    // Try Clipboard API first (modern browsers)
    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(text)
        .then(() => resolve(true))
        .catch(() => reject(false));
    } else {
      // Fallback for older browsers or non-secure context
      const textArea = document.createElement('textarea');
      textArea.value = text;
      textArea.style.cssText = `
        position: fixed;
        left: -9999px;
        top: -9999px;
        opacity: 0;
        pointer-events: none;
      `;
      document.body.appendChild(textArea);
      
      try {
        textArea.select();
        document.execCommand('copy');
        textArea.remove();
        resolve(true);
      } catch (err) {
        textArea.remove();
        reject(false);
      }
    }
  });
}

function initCopyToClipboard() {
  // Handle Java IP copy button
  const javaBtn = document.querySelector('.copy-java-btn');
  if (javaBtn) {
    javaBtn.addEventListener('click', function (e) {
      e.preventDefault();
      const text = 'ryzoriasmp.my.id';
      const originalHTML = this.innerHTML;
      
      copyToClipboard(text)
        .then(() => {
          showToast('✅ Java IP copied!', 'success');
          this.innerHTML = '<i class="fas fa-check"></i> Copied!';
          this.style.borderColor = 'rgba(37, 211, 102, 0.5)';
          this.style.color = '#25D366';
          
          setTimeout(() => {
            this.innerHTML = originalHTML;
            this.style.borderColor = '';
            this.style.color = '';
          }, 2000);
        })
        .catch(() => {
          showToast('❌ Failed to copy. Please copy manually.', 'error');
        });
    });
  }

  // Handle Bedrock IP:Port copy button
  const bedrockBtn = document.querySelector('.copy-bedrock-btn');
  if (bedrockBtn) {
    bedrockBtn.addEventListener('click', function (e) {
      e.preventDefault();
      const text = 'ryzoriasmp.my.id:25632';
      const originalHTML = this.innerHTML;
      
      copyToClipboard(text)
        .then(() => {
          showToast('✅ Bedrock IP copied!', 'success');
          this.innerHTML = '<i class="fas fa-check"></i> Copied!';
          this.style.borderColor = 'rgba(37, 211, 102, 0.5)';
          this.style.color = '#25D366';
          
          setTimeout(() => {
            this.innerHTML = originalHTML;
            this.style.borderColor = '';
            this.style.color = '';
          }, 2000);
        })
        .catch(() => {
          showToast('❌ Failed to copy. Please copy manually.', 'error');
        });
    });
  }

  // Handle generic data-copy buttons
  const copyButtons = document.querySelectorAll('[data-copy]');
  copyButtons.forEach((button) => {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      const text = this.getAttribute('data-copy');
      const feedback = this.getAttribute('data-feedback') || 'Copied!';
      const originalText = button.textContent;

      copyToClipboard(text)
        .then(() => {
          button.textContent = feedback;
          button.style.borderColor = 'rgba(37, 211, 102, 0.5)';
          button.style.color = '#25D366';

          setTimeout(() => {
            button.textContent = originalText;
            button.style.borderColor = '';
            button.style.color = '';
          }, 2000);
        })
        .catch(() => {
          showToast('❌ Failed to copy. Please copy manually.', 'error');
        });
    });
  });
}

// Add slide animations to document if not already present
if (!document.querySelector('style[data-toast-animations]')) {
  const style = document.createElement('style');
  style.setAttribute('data-toast-animations', 'true');
  style.textContent = `
    @keyframes slideInUp {
      from {
        transform: translateY(100px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
    
    @keyframes slideOutDown {
      from {
        transform: translateY(0);
        opacity: 1;
      }
      to {
        transform: translateY(100px);
        opacity: 0;
      }
    }
    
    @media (max-width: 640px) {
      .toast {
        bottom: 1rem !important;
        right: 1rem !important;
        left: 1rem !important;
        max-width: none !important;
      }
    }
  `;
  document.head.appendChild(style);
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
// Play Minecraft Button with Device Detection
// ============================================

function initPlayMinecraftButton() {
  const playButtons = [
    document.getElementById('playMinecraftBtn'),
    document.getElementById('playBtn'),
    document.getElementById('playBtnMobile')
  ];

  playButtons.forEach(btn => {
    if (btn) {
      btn.addEventListener('click', function() {
        detectDeviceAndPlay();
      });
    }
  });
}

function detectDeviceAndPlay() {
  const userAgent = navigator.userAgent.toLowerCase();
  
  // Detect device type
  const isAndroid = /android/i.test(userAgent);
  const isIPhone = /iphone|ipod|ipad/i.test(userAgent);
  const isMobile = isAndroid || isIPhone;
  
  if (isMobile) {
    // Mobile/Tablet device - try to open Minecraft Bedrock
    const minecraftBedrock = 'minecraft://';
    const minecraftDownload = 'https://www.minecraft.net/en-us/download';
    
    try {
      // Try to open Minecraft app using the protocol
      const checkTime = Date.now();
      window.location.href = minecraftBedrock;
      
      // If app doesn't open within 2 seconds, redirect to download page
      setTimeout(() => {
        if (Date.now() - checkTime < 2500) {
          showToast('📱 Opening Minecraft Bedrock...', 'info');
        }
      }, 1000);
      
      // Fallback to download page after 2 seconds
      setTimeout(() => {
        if (Date.now() - checkTime > 2000) {
          window.location.href = minecraftDownload;
        }
      }, 2100);
    } catch (e) {
      window.location.href = minecraftDownload;
    }
  } else {
    // Desktop device - try to open Minecraft Launcher
    const minecraftLauncher = 'minecraft://';
    const minecraftDownload = 'https://launcher.mojang.com/download';
    
    try {
      const checkTime = Date.now();
      window.location.href = minecraftLauncher;
      
      setTimeout(() => {
        if (Date.now() - checkTime < 2500) {
          showToast('🎮 Opening Minecraft Launcher...', 'info');
        }
      }, 1000);
      
      // Fallback to launcher download after 2 seconds
      setTimeout(() => {
        if (Date.now() - checkTime > 2000) {
          window.location.href = minecraftDownload;
        }
      }, 2100);
    } catch (e) {
      window.location.href = minecraftDownload;
    }
  }
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
