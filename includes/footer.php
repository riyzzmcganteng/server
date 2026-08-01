<footer class="footer">
  <div class="footer-container">
    <!-- Footer Main Content -->
    <div class="footer-content">
      <!-- Column 1: About -->
      <div class="footer-column">
        <h3>About <?php echo SERVER_NAME; ?></h3>
        <p>Premium Minecraft SMP server with modern features, smooth gameplay, and an amazing community. Join us today and experience the ultimate survival experience.</p>
        <div class="footer-social">
          <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="Discord">
            <i class="fab fa-discord"></i>
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/?page=server">Server Info</a></li>
          <li><a href="/?page=ranks">Rank Store</a></li>
          <li><a href="/?page=community">Community</a></li>
        </ul>
      </div>

      <!-- Column 3: Server Info -->
      <div class="footer-column">
        <h3>Server Info</h3>
        <ul>
          <li><strong>Java IP:</strong> <?php echo SERVER_JAVA_IP; ?></li>
          <li><strong>Bedrock:</strong> Port <?php echo SERVER_BEDROCK_PORT; ?></li>
          <li><strong>Version:</strong> Latest</li>
          <li><strong>Mode:</strong> Survival SMP</li>
        </ul>
      </div>

      <!-- Column 4: Community -->
      <div class="footer-column">
        <h3>Community</h3>
        <p>Join our community for updates, events, and support. Connect with fellow players on Discord and WhatsApp.</p>
        <div class="footer-buttons">
          <a href="<?php echo DISCORD_LINK; ?>" target="_blank" class="footer-btn discord-btn">Join Discord</a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="footer-btn whatsapp-btn">Join WhatsApp</a>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php echo SERVER_NAME; ?>. All rights reserved. | Powered by PHP</p>
    </div>
  </div>
</footer>
