<!-- ============================================
     HOME PAGE
     ============================================ -->

<section class="hero section" id="hero">
  <div class="container">
    <div class="hero-content" style="text-align: center; animation: fadeInUp 0.8s ease-in-out;">
      <h1 class="gradient-text" style="font-size: clamp(2rem, 8vw, 4rem); margin-bottom: 2rem; font-weight: 800; letter-spacing: -1px;">
        BERTAHAN. BANGUN. DOMINASI.
      </h1>

      <div class="hero-actions" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
        <button id="playMinecraftBtn" class="btn btn-primary" style="animation: fadeInUp 0.8s ease-in-out 0.1s both; cursor: pointer; background: linear-gradient(135deg, rgba(97,225,255,0.3) 0%, rgba(0,153,255,0.2) 100%); border: 1px solid rgba(97,225,255,0.4); backdrop-filter: blur(10px);">
          <i class="fas fa-gamepad"></i> Mainkan Minecraft
        </button>
        <a href="/?page=server" class="btn btn-primary" style="animation: fadeInUp 0.8s ease-in-out 0.15s both;">
          <i class="fas fa-server"></i> Informasi Server
        </a>
        <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="animation: fadeInUp 0.8s ease-in-out 0.2s both;">
          <i class="fab fa-discord"></i> Gabung Discord
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
        <div class="stat-label">Pemain Aktif</div>
      </div>
      <div class="stats-card animate-fade-in-up">
        <div class="stat-number">4+</div>
        <div class="stat-label">Tahun Online</div>
      </div>
      <div class="stats-card animate-fade-in-up">
        <div class="stat-number">24/7</div>
        <div class="stat-label">Waktu Aktif Server</div>
      </div>
      <div class="stats-card animate-fade-in-up">
        <div class="stat-number">∞</div>
        <div class="stat-label">Komunitas</div>
      </div>
    </div>
  </div>
</section>

<!-- Informasi Koneksi Server -->
<section class="connection section" id="ip">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Terhubung Sekarang</h2>
      <p style="color: var(--text-muted); font-size: var(--text-lg);">Pilih platform Anda dan mulai bermain di Ryzoria SMP</p>
    </div>

    <div class="grid-2">
      <!-- Java Edition -->
      <div class="info-card animate-fade-in-up hover-lift">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--primary);">
          <i class="fas fa-cube"></i>
        </div>
        <h3 style="color: var(--primary); margin-bottom: 1rem;">Java Edition</h3>
        <div class="info-label">IP Server</div>
        <div class="info-value" style="font-size: 1.5rem; word-break: break-all; margin-bottom: 1.5rem;">
          <?php echo SERVER_JAVA_IP; ?>
        </div>
        <button class="btn btn-primary" data-copy="<?php echo SERVER_JAVA_IP; ?>" data-feedback="✅ IP berhasil disalin!">
          <i class="fas fa-copy"></i> Salin IP
        </button>
      </div>

      <!-- Bedrock Edition -->
      <div class="info-card animate-fade-in-up hover-lift">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--accent-dark);">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 style="color: var(--accent-dark); margin-bottom: 1rem;">Bedrock Edition</h3>
        <div class="info-label">Port Server</div>
        <div class="info-value">
          <?php echo SERVER_BEDROCK_PORT; ?>
        </div>
        <p style="font-size: var(--text-xs); color: var(--text-muted); margin-top: 1rem; margin-bottom: 1.5rem;">
          Host: <?php echo SERVER_JAVA_IP; ?>
        </p>
        <button class="btn btn-primary" data-copy="<?php echo SERVER_BEDROCK_PORT; ?>" data-feedback="✅ Port berhasil disalin!">
          <i class="fas fa-copy"></i> Salin Port
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Bagian Fitur -->
<section class="features section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Mengapa Memilih Ryzoria?</h2>
      <p style="color: var(--text-muted); font-size: var(--text-lg);">Rasakan pengalaman survival Minecraft premium dengan fitur unik kami</p>
    </div>

    <div class="grid-3">
      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
          <i class="fas fa-tachometer-alt"></i>
        </div>
        <h3 style="color: var(--primary);">Performa Tinggi</h3>
        <p>Server super cepat dengan lag minimal dan pengalaman bermain optimal untuk semua pemain.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--accent-dark); margin-bottom: 1rem;">
          <i class="fas fa-users"></i>
        </div>
        <h3 style="color: var(--accent-dark);">Komunitas Aktif</h3>
        <p>Bergabunglah dengan ribuan pemain dan jadilah bagian dari komunitas yang luar biasa dan supportif.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--success); margin-bottom: 1rem;">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 style="color: var(--success);">Aman & Terlindungi</h3>
        <p>Sistem anti-cheat canggih dan backup rutin memastikan dunia Anda selalu aman.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
          <i class="fas fa-crown"></i>
        </div>
        <h3 style="color: var(--primary);">Sistem Rank</h3>
        <p>Buka fitur eksklusif dan keuntungan dengan sistem toko rank komprehensif kami.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--accent-dark); margin-bottom: 1rem;">
          <i class="fas fa-cogs"></i>
        </div>
        <h3 style="color: var(--accent-dark);">Fitur Kustom</h3>
        <p>Nikmati plugin unik dan modifikasi kustom yang meningkatkan pengalaman bermain.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--success); margin-bottom: 1rem;">
          <i class="fas fa-calendar-alt"></i>
        </div>
        <h3 style="color: var(--success);">Acara Rutin</h3>
        <p>Ikuti acara dan kompetisi menarik dengan hadiah-hadiah menakjubkan.</p>
      </div>
    </div>
  </div>
</section>

<!-- Bagian CTA -->
<section class="cta section">
  <div class="container">
    <div class="cta-card" style="text-align: center;">
      <h2 style="color: var(--primary); margin-bottom: 1rem;">Siap untuk Bermain?</h2>
      <p style="color: var(--text-muted); font-size: var(--text-lg); margin-bottom: 2rem;">
        Bergabunglah dengan komunitas kami dan rasakan server SMP Minecraft terbaik
      </p>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="/?page=server" class="btn btn-primary">
          <i class="fas fa-play"></i> Mainkan Sekarang
        </a>
        <a href="/?page=ranks" class="btn btn-secondary">
          <i class="fas fa-star"></i> Lihat Rank
        </a>
        <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
          <i class="fab fa-discord"></i> Discord
        </a>
      </div>
    </div>
  </div>
</section>
