# Ryzoria SMP - PHP Website

A premium Minecraft SMP website built with PHP, CSS, and JavaScript with a modular, reusable component structure.

## 🚀 Live Website

- **Production**: https://store.ryzoriasmp.my.id
- **GitHub**: https://github.com/riyzzmcganteng/server (branch: halo)

## 📁 Project Structure

```
/
├── index.php                 # Main entry point
├── build.js                  # Node.js build script (generates static HTML)
├── vercel.json              # Vercel deployment configuration
├── .htaccess                # Apache rewrite rules
│
├── includes/
│   ├── config.php           # Global configuration & constants
│   ├── navbar.php           # Reusable navbar component
│   └── footer.php           # Reusable footer component
│
├── pages/
│   ├── home.php             # Home page content
│   ├── server.php           # Server Info page
│   ├── ranks.php            # Rank Store page
│   └── community.php        # Community page
│
├── css/
│   ├── style.css            # Main styles & typography
│   ├── navbar.css           # Navbar styling
│   ├── footer.css           # Footer styling
│   ├── ranks.css            # Card & rank styling
│   ├── animation.css        # Animations & transitions
│   └── responsive.css       # Mobile-first responsive design
│
├── js/
│   ├── script.js            # Main JavaScript functionality
│   ├── navbar.js            # Navbar interactions
│   └── smooth-scroll.js     # Smooth scrolling effects
│
└── public/                  # Generated static HTML (build output)
    ├── index.html
    ├── server.html
    ├── ranks.html
    ├── community.html
    ├── css/
    └── js/
```

## 🎨 Features

### Design
- **Premium Blue & Black Theme**: Modern, professional Minecraft server aesthetic
- **Fully Responsive**: Mobile-first design working on all devices (360px - 4K)
- **Smooth Animations**: CSS animations and JavaScript transitions for engaging UX
- **Modern Components**: Reusable navbar, footer, cards, and sections

### Pages
1. **Home** - Hero section, quick stats, server connection info, features, CTA
2. **Server Info** - Connection details (Java & Bedrock), specs, rules, join guide
3. **Rank Store** - Rank cards, comparison table, purchase guide, benefits
4. **Community** - Discord & WhatsApp integration, guidelines, channels, features

### Functionality
- ✅ Hamburger menu for mobile navigation
- ✅ Smooth scrolling between sections
- ✅ Copy-to-clipboard for server IPs
- ✅ Scroll-to-top button
- ✅ Active link highlighting
- ✅ Social media integration (Discord & WhatsApp)
- ✅ Smooth hover animations
- ✅ Accessibility features (ARIA labels, semantic HTML)

## 🛠️ Technology Stack

- **Backend**: PHP (structured as reusable templates)
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla, no frameworks)
- **Build Process**: Node.js (converts PHP to static HTML)
- **Hosting**: Vercel (serverless CDN)
- **Icons**: Font Awesome 6.6.0
- **Version Control**: Git & GitHub

## 📝 Configuration

Edit `includes/config.php` to update:
- Server name, IP, and port
- Discord and WhatsApp links
- Rank data and pricing
- Site metadata

```php
define('SERVER_JAVA_IP', 'play.ryzoriasmp.my.id');
define('SERVER_BEDROCK_PORT', '25632');
define('DISCORD_LINK', 'https://dsc.gg/ryzoria');
define('WHATSAPP_LINK', 'https://chat.whatsapp.com/HNOoQBDjCwpJDSoOh1gfG7');
```

## 🎯 Key Components

### Reusable PHP Includes

- **navbar.php** - Navigation with active link highlighting, mobile menu, social icons
- **footer.php** - Footer with quick links, server info, CTA buttons

### CSS Modular Structure

- `style.css` - Global styles, typography, utilities, color variables
- `navbar.css` - Navbar styling, hamburger menu, mobile responsiveness
- `footer.css` - Footer layout, social links, buttons
- `ranks.css` - Cards, rank cards, statistics, badges
- `animation.css` - Keyframe animations, hover effects, transitions
- `responsive.css` - Mobile breakpoints, media queries for all devices

### JavaScript Files

- `script.js` - Hamburger menu, scroll animations, copy-to-clipboard
- `navbar.js` - Active link updates, navbar scroll effects
- `smooth-scroll.js` - Smooth scrolling, keyboard navigation, scroll-to-top

## 🚀 Deployment

### Build Process

The website uses a **Node.js build script** that:
1. Reads PHP template files
2. Generates static HTML pages
3. Copies CSS and JavaScript assets
4. Outputs to the `public/` folder for Vercel

**Build Command**: `node build.js`
**Output Directory**: `public/`

### Deployment to Vercel

The build runs automatically when pushing to the `halo` branch. Vercel then:
1. Executes the build script
2. Deploys static files to CDN
3. Aliases to custom domain

## 📱 Responsive Breakpoints

- **Desktop**: 1400px+ (Large displays)
- **Desktop**: 1024px+ (Tablets and larger)
- **Tablet**: 768px - 1024px
- **Mobile Large**: 480px - 768px
- **Mobile Small**: 360px - 480px
- **Extra Small**: Below 360px

## 🎨 Color Scheme

```css
--primary: #61E1FF          /* Main cyan blue */
--accent-dark: #0099FF      /* Darker blue */
--background: #0a0e27       /* Dark background */
--text: #ffffff             /* White text */
--text-muted: #a0aec0       /* Muted gray */
--success: #25D366          /* WhatsApp green */
```

## 🔗 Page Navigation

- **Home**: `/` or `/index.html`
- **Server Info**: `/server.html`
- **Rank Store**: `/ranks.html`
- **Community**: `/community.html`

## 🛠️ Customization Guide

### Adding a New Page

1. Create `pages/yourpage.php` with content
2. Add to `build.js` pages array
3. Update navbar/footer navigation links
4. Run build: `node build.js`
5. Deploy to Vercel

### Modifying Styles

1. Edit the appropriate CSS file
2. Use CSS variables for consistency
3. Follow mobile-first approach
4. No rebuild needed (CSS-only changes)

### Updating Content

1. Edit the relevant page file in `pages/`
2. Update `includes/config.php` for global changes
3. Rebuild: `node build.js`
4. Deploy to Vercel

## 🔒 Security Features

Implemented HTTP security headers:
- `X-Content-Type-Options: nosniff`
- `Referrer-Policy: strict-origin-when-cross-origin`
- `Strict-Transport-Security: max-age=63072000`

## 📊 Performance Optimizations

- ✅ Gzip compression enabled
- ✅ Browser caching configured (.htaccess)
- ✅ Static HTML generation (fast loading)
- ✅ CDN-hosted Font Awesome
- ✅ Optimized CSS and JavaScript
- ✅ Lazy animation initialization

## 📞 Support & Links

- **Discord**: https://dsc.gg/ryzoria
- **WhatsApp**: https://chat.whatsapp.com/HNOoQBDjCwpJDSoOh1gfG7
- **Server IP**: play.ryzoriasmp.my.id
- **Bedrock Port**: 25632

---

Built with ❤️ for the Ryzoria SMP community | Powered by PHP, Node.js, and Vercel
