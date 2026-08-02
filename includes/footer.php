<footer class="footer">
  <div class="footer-container">
    <!-- Konten Utama Footer -->
    <div class="footer-content">
      <!-- Kolom 1: Tentang -->
      <div class="footer-column">
        <h3>Tentang <?php echo SERVER_NAME; ?></h3>
        <p>Server SMP Minecraft premium dengan fitur modern, gameplay yang lancar, dan komunitas yang luar biasa. Bergabunglah dengan kami hari ini dan rasakan pengalaman survival terbaik.</p>
        <div class="footer-social">
          <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="Discord">
            <i class="fab fa-discord"></i>
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>

      <!-- Kolom 2: Tautan Cepat -->
      <div class="footer-column">
        <h3>Tautan Cepat</h3>
        <ul>
          <li><a href="/">Beranda</a></li>
          <li><a href="/?page=server">Informasi Server</a></li>
          <li><a href="/?page=ranks">Toko Rank</a></li>
          <li><a href="/?page=community">Komunitas</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Informasi Server -->
      <div class="footer-column">
        <h3>Informasi Server</h3>
        <ul>
          <li><strong>IP Java:</strong> <?php echo SERVER_JAVA_IP; ?></li>
          <li><strong>Bedrock:</strong> Port <?php echo SERVER_BEDROCK_PORT; ?></li>
          <li><strong>Versi:</strong> Terbaru</li>
          <li><strong>Mode:</strong> Survival SMP</li>
        </ul>
      </div>

      <!-- Kolom 4: Komunitas -->
      <div class="footer-column">
        <h3>Komunitas</h3>
        <p>Bergabunglah dengan komunitas kami untuk update, acara, dan dukungan. Terhubung dengan pemain lain di Discord dan WhatsApp.</p>
        <div class="footer-buttons">
          <a href="<?php echo DISCORD_LINK; ?>" target="_blank" class="footer-btn discord-btn">Gabung Discord</a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="footer-btn whatsapp-btn">Gabung WhatsApp</a>
        </div>
      </div>
    </div>

    <!-- Footer Bawah -->
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php echo SERVER_NAME; ?>. Hak cipta dilindungi. | Didukung oleh PHP</p>
    </div>
  </div>
</footer>
