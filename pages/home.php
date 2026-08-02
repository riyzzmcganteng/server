<!-- ============================================
     HOME PAGE
     ============================================ -->

<section class="hero section" id="hero">
  <div class="container">
    <div class="hero-content" style="text-align: center; animation: fadeInUp 0.8s ease-in-out;">
      <h1 class="gradient-text" style="font-size: clamp(2rem, 8vw, 4rem); margin-bottom: 2rem; font-weight: 800; letter-spacing: -1px;">
        SURVIVE. BUILD. DOMINATE.
      </h1>

      <div class="hero-actions" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
        <button id="playMinecraftBtn" class="btn btn-primary" style="animation: fadeInUp 0.8s ease-in-out 0.1s both; cursor: pointer; background: linear-gradient(135deg, rgba(97,225,255,0.3) 0%, rgba(0,153,255,0.2) 100%); border: 1px solid rgba(97,225,255,0.4); backdrop-filter: blur(10px);">
          <i class="fas fa-gamepad"></i> Play Minecraft
        </button>
        <a href="/?page=server" class="btn btn-primary" style="animation: fadeInUp 0.8s ease-in-out 0.15s both;">
          <i class="fas fa-server"></i> Server Info
        </a>
        <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="animation: fadeInUp 0.8s ease-in-out 0.2s both;">
          <i class="fab fa-discord"></i> Join Discord
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Quick Stats -->
<section class="stats section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%); padding: 3rem 0;">
  <div class="container">
    <div class="grid-4">
      <div class="stats-card animate-fade-in-up">
        <div class="stat-number">1000+</div>
        <div class="stat-label">Active Players</div>
      </div>
      <div class="stats-card animate-fade-in-up">
        <div class="stat-number">4+</div>
        <div class="stat-label">Years Online</div>
      </div>
      <div class="stats-card animate-fade-in-up">
        <div class="stat-number">24/7</div>
        <div class="stat-label">Server Uptime</div>
      </div>
      <div class="stats-card animate-fade-in-up">
        <div class="stat-number">∞</div>
        <div class="stat-label">Community</div>
      </div>
    </div>
  </div>
</section>

<!-- Server Connection Info -->
<section class="connection section" id="ip">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Connect Now</h2>
      <p style="color: var(--text-muted); font-size: var(--text-lg);">Choose your platform and start playing on Ryzoria SMP</p>
    </div>

    <div class="grid-2">
      <!-- Java Edition -->
      <div class="info-card animate-fade-in-up hover-lift">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--primary);">
          <i class="fas fa-cube"></i>
        </div>
        <h3 style="color: var(--primary); margin-bottom: 1rem;">Java Edition</h3>
        <div class="info-label">Server IP</div>
        <div class="info-value" style="font-size: 1.5rem; word-break: break-all; margin-bottom: 1.5rem;">
          <?php echo SERVER_JAVA_IP; ?>
        </div>
        <button class="btn btn-primary" data-copy="<?php echo SERVER_JAVA_IP; ?>" data-feedback="IP Copied!">
          <i class="fas fa-copy"></i> Copy IP
        </button>
      </div>

      <!-- Bedrock Edition -->
      <div class="info-card animate-fade-in-up hover-lift">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--accent-dark);">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 style="color: var(--accent-dark); margin-bottom: 1rem;">Bedrock Edition</h3>
        <div class="info-label">Server Port</div>
        <div class="info-value">
          <?php echo SERVER_BEDROCK_PORT; ?>
        </div>
        <p style="font-size: var(--text-xs); color: var(--text-muted); margin-top: 1rem; margin-bottom: 1.5rem;">
          Host: <?php echo SERVER_JAVA_IP; ?>
        </p>
        <button class="btn btn-primary" data-copy="<?php echo SERVER_BEDROCK_PORT; ?>" data-feedback="Port Copied!">
          <i class="fas fa-copy"></i> Copy Port
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Why Choose Ryzoria?</h2>
      <p style="color: var(--text-muted); font-size: var(--text-lg);">Experience premium Minecraft survival with our unique features</p>
    </div>

    <div class="grid-3">
      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
          <i class="fas fa-tachometer-alt"></i>
        </div>
        <h3 style="color: var(--primary);">High Performance</h3>
        <p>Ultra-fast servers with minimal lag and optimal gameplay experience for all players.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--accent-dark); margin-bottom: 1rem;">
          <i class="fas fa-users"></i>
        </div>
        <h3 style="color: var(--accent-dark);">Active Community</h3>
        <p>Join thousands of players and be part of an amazing and supportive community.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--success); margin-bottom: 1rem;">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 style="color: var(--success);">Safe & Secure</h3>
        <p>Advanced anti-cheat systems and regular backups ensure your world is always safe.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
          <i class="fas fa-crown"></i>
        </div>
        <h3 style="color: var(--primary);">Rank System</h3>
        <p>Unlock exclusive perks and features with our comprehensive rank store system.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--accent-dark); margin-bottom: 1rem;">
          <i class="fas fa-cogs"></i>
        </div>
        <h3 style="color: var(--accent-dark);">Custom Features</h3>
        <p>Enjoy unique plugins and custom modifications that enhance gameplay.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--success); margin-bottom: 1rem;">
          <i class="fas fa-calendar-alt"></i>
        </div>
        <h3 style="color: var(--success);">Regular Events</h3>
        <p>Participate in exciting events and competitions with great rewards.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="cta section">
  <div class="container">
    <div class="cta-card" style="text-align: center;">
      <h2 style="color: var(--primary); margin-bottom: 1rem;">Ready to Play?</h2>
      <p style="color: var(--text-muted); font-size: var(--text-lg); margin-bottom: 2rem;">
        Join our thriving community and experience the best Minecraft SMP server
      </p>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="/?page=server" class="btn btn-primary">
          <i class="fas fa-play"></i> Play Now
        </a>
        <a href="/?page=ranks" class="btn btn-secondary">
          <i class="fas fa-star"></i> View Ranks
        </a>
        <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
          <i class="fab fa-discord"></i> Discord
        </a>
      </div>
    </div>
  </div>
</section>
