<nav class="navbar">
  <div class="navbar-container">
    <!-- Logo -->
    <div class="navbar-logo">
      <a href="/">
        <span class="logo-text">RYZORIA</span>
        <span class="logo-subtext">SMP</span>
      </a>
    </div>

    <!-- Desktop Menu -->
    <ul class="nav-menu desktop-menu">
      <li><a href="/" class="nav-link <?php echo $current_page === 'home' ? 'active' : ''; ?>">Home</a></li>
      <li><a href="/?page=server" class="nav-link <?php echo $current_page === 'server' ? 'active' : ''; ?>">Server Info</a></li>
      <li><a href="/?page=ranks" class="nav-link <?php echo $current_page === 'ranks' ? 'active' : ''; ?>">Rank Store</a></li>
      <li><a href="/?page=community" class="nav-link <?php echo $current_page === 'community' ? 'active' : ''; ?>">Community</a></li>
    </ul>

    <!-- Social Icons & Play Button -->
    <div class="social-icons">
      <button id="playBtn" class="btn btn-primary" style="display: flex; align-items: center; gap: 0.5rem; padding: 0.7rem 1.2rem; font-size: 0.95rem; border-radius: 8px; cursor: pointer; transition: all 0.3s ease; white-space: nowrap;">
        <i class="fas fa-gamepad"></i> Play
      </button>
      <a class="social-btn discord" href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="Discord" title="Discord">
        <i class="fab fa-discord"></i>
        <span>Discord</span>
      </a>
      <a class="social-btn whatsapp" href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span>WhatsApp</span>
      </a>
    </div>

    <!-- Hamburger Menu Toggle -->
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <!-- Mobile Menu -->
  <ul class="nav-menu mobile-menu">
    <li><button id="playBtnMobile" class="btn btn-primary" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.7rem 1.2rem; font-size: 0.95rem; border-radius: 8px; cursor: pointer; transition: all 0.3s ease; margin: 0 0 1rem 0;"><i class="fas fa-gamepad"></i> Play Minecraft</button></li>
    <li><a href="/" class="nav-link <?php echo $current_page === 'home' ? 'active' : ''; ?>">Home</a></li>
    <li><a href="/?page=server" class="nav-link <?php echo $current_page === 'server' ? 'active' : ''; ?>">Server Info</a></li>
    <li><a href="/?page=ranks" class="nav-link <?php echo $current_page === 'ranks' ? 'active' : ''; ?>">Rank Store</a></li>
    <li><a href="/?page=community" class="nav-link <?php echo $current_page === 'community' ? 'active' : ''; ?>">Community</a></li>
    <div class="mobile-social-icons">
      <a class="social-btn discord" href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="Discord" title="Discord">
        <i class="fab fa-discord"></i>
        <span>Discord</span>
      </a>
      <a class="social-btn whatsapp" href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span>WhatsApp</span>
      </a>
    </div>
  </ul>
</nav>
