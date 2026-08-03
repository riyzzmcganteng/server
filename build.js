/**
 * Build Script - Generate static HTML files
 * Compiles PHP-based website to static HTML
 */

const fs = require('fs');
const path = require('path');

// Create public directory
if (!fs.existsSync('public')) {
  fs.mkdirSync('public', { recursive: true });
}

// Configuration
const CONFIG = {
  SERVER_NAME: 'Ryzoria SMP',
  SERVER_JAVA_IP: 'play.ryzoriasmp.my.id',
  SERVER_BEDROCK_PORT: '25632',
  DISCORD_LINK: 'https://dsc.gg/ryzoria',
  WHATSAPP_LINK: 'https://chat.whatsapp.com/HNOoQBDjCwpJDSoOh1gfG7',
  SITE_URL: 'https://store.ryzoriasmp.my.id',
  SITE_TITLE: 'Ryzoria SMP | Premium Minecraft Server',
};

// Rank data
const RANKS = [
  {
    id: 1,
    name: 'VIP',
    color: '#61E1FF',
    price: 'Rp 50.000',
    features: ['Color Chat', '/hat command', '2x Homes', 'Custom Prefix'],
  },
  {
    id: 2,
    name: 'VIPPLUS',
    color: '#00D4FF',
    price: 'Rp 100.000',
    features: ['/hat command', '4x Homes', 'Custom Suffix', '/fly command', 'Particles'],
  },
  {
    id: 3,
    name: 'PREMIUM',
    color: '#0099FF',
    price: 'Rp 150.000',
    features: ['/fly command', '6x Homes', 'Custom Skin', 'Pet Commands', 'Cape', 'Priority Queue'],
  },
  {
    id: 4,
    name: 'ELITE',
    color: '#0066FF',
    price: 'Rp 200.000',
    features: ['Pet Commands', 'Admin Chat', 'All Features', 'Custom Name Color', 'Exclusive Items', 'VIP Events'],
  },
];

console.log('🔨 Building Ryzoria SMP website...\n');

// Read template files
const readFile = (filePath) => fs.readFileSync(filePath, 'utf8');

// Create HTML head
const createHead = (title) => `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Ryzoria SMP - Premium Minecraft survival server with modern features and an amazing community. Join now!" />
  <meta name="theme-color" content="#0a0e27" />
  <title>${title}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/ranks.css" />
  <link rel="stylesheet" href="css/animation.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/ai-chat.css" />
  <style>
    #scrollTopBtn {
      position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px;
      border-radius: 50%; background: linear-gradient(135deg, var(--primary) 0%, var(--accent-dark) 100%);
      color: var(--background); border: none; cursor: pointer; display: flex;
      align-items: center; justify-content: center; font-size: 1.5rem;
      opacity: 0; visibility: hidden; transition: all 0.3s ease; z-index: 999;
      box-shadow: 0 8px 20px rgba(97, 225, 255, 0.3);
    }
    #scrollTopBtn:hover { transform: translateY(-3px); box-shadow: 0 12px 25px rgba(97, 225, 255, 0.4); }
    @media (max-width: 480px) { #scrollTopBtn { width: 45px; height: 45px; bottom: 20px; right: 20px; font-size: 1.25rem; } }
  </style>
</head>
<body>`;

// Create navbar
const createNavbar = (currentPage) => {
  return `<nav class="navbar">
  <div class="navbar-container">
    <div class="navbar-logo">
      <a href="/"><span class="logo-text">RYZORIA</span><span class="logo-subtext">SMP</span></a>
    </div>
    <ul class="nav-menu desktop-menu">
      <li><a href="/" class="nav-link ${currentPage === 'home' ? 'active' : ''}">Home</a></li>
      <li><a href="/server.html" class="nav-link ${currentPage === 'server' ? 'active' : ''}">Server Info</a></li>
      <li><a href="/ranks.html" class="nav-link ${currentPage === 'ranks' ? 'active' : ''}">Rank Store</a></li>
      <li><a href="/community.html" class="nav-link ${currentPage === 'community' ? 'active' : ''}">Community</a></li>
    </ul>
    <div class="social-icons">
      <a class="social-btn discord" href="${CONFIG.DISCORD_LINK}" target="_blank" rel="noopener noreferrer" aria-label="Discord">
        <i class="fab fa-discord"></i><span>Discord</span>
      </a>
      <a class="social-btn whatsapp" href="${CONFIG.WHATSAPP_LINK}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i><span>WhatsApp</span>
      </a>
    </div>
    <div class="hamburger"><span></span><span></span><span></span></div>
  </div>
  <ul class="nav-menu mobile-menu">
    <li><a href="/" class="nav-link ${currentPage === 'home' ? 'active' : ''}">Home</a></li>
    <li><a href="/server.html" class="nav-link ${currentPage === 'server' ? 'active' : ''}">Server Info</a></li>
    <li><a href="/ranks.html" class="nav-link ${currentPage === 'ranks' ? 'active' : ''}">Rank Store</a></li>
    <li><a href="/community.html" class="nav-link ${currentPage === 'community' ? 'active' : ''}">Community</a></li>
    <div class="mobile-social-icons">
      <a class="social-btn discord" href="${CONFIG.DISCORD_LINK}" target="_blank" aria-label="Discord"><i class="fab fa-discord"></i><span>Discord</span></a>
      <a class="social-btn whatsapp" href="${CONFIG.WHATSAPP_LINK}" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i><span>WhatsApp</span></a>
    </div>
  </ul>
</nav>`;
};

// Create footer
const createFooter = () => {
  return `<footer class="footer">
  <div class="footer-container">
    <div class="footer-content">
      <div class="footer-column">
        <h3>About ${CONFIG.SERVER_NAME}</h3>
        <p>Premium Minecraft SMP server with modern features, smooth gameplay, and an amazing community. Join us today and experience the ultimate survival experience.</p>
        <div class="footer-social">
          <a href="${CONFIG.DISCORD_LINK}" target="_blank"><i class="fab fa-discord"></i></a>
          <a href="${CONFIG.WHATSAPP_LINK}" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/server.html">Server Info</a></li>
          <li><a href="/ranks.html">Rank Store</a></li>
          <li><a href="/community.html">Community</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Server Info</h3>
        <ul>
          <li><strong>Java IP:</strong> ${CONFIG.SERVER_JAVA_IP}</li>
          <li><strong>Bedrock:</strong> Port ${CONFIG.SERVER_BEDROCK_PORT}</li>
          <li><strong>Version:</strong> Latest</li>
          <li><strong>Mode:</strong> Survival SMP</li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Community</h3>
        <p>Join our community for updates, events, and support. Connect with fellow players on Discord and WhatsApp.</p>
        <div class="footer-buttons">
          <a href="${CONFIG.DISCORD_LINK}" target="_blank" class="footer-btn discord-btn">Join Discord</a>
          <a href="${CONFIG.WHATSAPP_LINK}" target="_blank" class="footer-btn whatsapp-btn">Join WhatsApp</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; ${new Date().getFullYear()} ${CONFIG.SERVER_NAME}. All rights reserved. | Powered by PHP & Node.js</p>
    </div>
  </div>
</footer>`;
};

// Read page content
const pageContent = {
  home: readFile('pages/home.php'),
  server: readFile('pages/server.php'),
  ranks: readFile('pages/ranks.php'),
  community: readFile('pages/community.php'),
};

// Generate pages
const generatePage = (name, content) => {
  const html = `${createHead(CONFIG.SITE_TITLE)}
    ${createNavbar(name)}
    <main>${content}</main>
    ${createFooter()}
    <button id="scrollTopBtn"><i class="fas fa-arrow-up"></i></button>
    
    <!-- Ryzoria AI Chat Button -->
    <button id="aiChatBtn" title="Buka Ryzoria AI">
      <i class="fas fa-robot"></i>
    </button>

    <!-- Ryzoria AI Chat Modal -->
    <div id="aiChatModal">
      <div id="aiChatHeader">
        <h3>🤖 Ryzoria AI</h3>
        <button id="aiChatCloseBtn" title="Tutup">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div id="aiChatMessages"></div>
      <div id="aiChatInputArea">
        <textarea id="aiChatInput" placeholder="Tanyakan apa saja..." rows="1"></textarea>
        <button id="aiChatSendBtn" title="Kirim">
          <i class="fas fa-paper-plane"></i> Kirim
        </button>
        <button id="aiChatClearBtn" title="Hapus Chat">
          <i class="fas fa-trash"></i>
        </button>
      </div>
    </div>
    
    <script src="js/smooth-scroll.js"><\/script>
    <script src="js/navbar.js"><\/script>
    <script src="js/script.js"><\/script>
    <script src="js/ai-chat.js"><\/script>
  </body>
</html>`;

  return html;
};

// Write pages
const pages = [
  { name: 'home', content: pageContent.home, file: 'index.html' },
  { name: 'server', content: pageContent.server, file: 'server.html' },
  { name: 'ranks', content: pageContent.ranks, file: 'ranks.html' },
  { name: 'community', content: pageContent.community, file: 'community.html' },
];

pages.forEach((page) => {
  const html = generatePage(page.name, page.content);
  const filePath = path.join('public', page.file);
  fs.writeFileSync(filePath, html);
  console.log(`✓ Created: ${filePath}`);
});

// Copy CSS files
['style', 'navbar', 'footer', 'ranks', 'animation', 'responsive', 'ai-chat'].forEach((file) => {
  const src = `css/${file}.css`;
  const dest = `public/css/${file}.css`;
  fs.mkdirSync('public/css', { recursive: true });
  fs.copyFileSync(src, dest);
  console.log(`✓ Copied CSS: ${file}.css`);
});

// Copy JS files
['script', 'navbar', 'smooth-scroll', 'ai-chat'].forEach((file) => {
  const src = `js/${file}.js`;
  const dest = `public/js/${file}.js`;
  fs.mkdirSync('public/js', { recursive: true });
  fs.copyFileSync(src, dest);
  console.log(`✓ Copied JS: ${file}.js`);
});

console.log('\n✅ Build completed successfully!');
console.log('📁 Output: public/');
