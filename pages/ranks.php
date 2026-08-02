<!-- ============================================
     RANK STORE PAGE
     ============================================ -->

<section class="ranks-header section" style="background: linear-gradient(135deg, rgba(97,225,255,0.1) 0%, rgba(0,153,255,0.05) 100%); padding: 4rem 0;">
  <div class="container">
    <div style="text-align: center;">
      <h1 class="gradient-text" style="font-size: 3rem; margin-bottom: 1rem;">Premium Rank Store</h1>
      <p style="color: var(--text-muted); font-size: var(--text-lg);">Unlock exclusive perks, support the server, and join the elite community</p>
    </div>
  </div>
</section>

<!-- Rank Cards -->
<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
      <?php foreach ($ranks as $rank): ?>
        <?php 
          $rankClass = strtolower(str_replace('+', 'plus', $rank['name']));
          $isPopular = isset($rank['featured']) && $rank['featured'];
        ?>
        <div class="rank-card animate-fade-in-up <?php echo $rankClass; ?> <?php echo $isPopular ? 'featured' : ''; ?>" style="position: relative;">
          <?php if ($isPopular): ?>
            <div class="popular-badge">⭐ Most Popular</div>
          <?php endif; ?>

          <div class="rank-badge" style="background: rgba(97,225,255,0.1); border: 1px solid <?php echo $rank['color']; ?>40; color: <?php echo $rank['color']; ?>;">
            Rank <?php echo $rank['id']; ?>
          </div>

          <h3 class="rank-title" style="color: <?php echo $rank['color']; ?>;">
            <?php echo $rank['name']; ?>
          </h3>

          <div class="rank-price" style="color: <?php echo $rank['color']; ?>;">
            <?php echo $rank['price']; ?>
          </div>

          <ul class="features-list" style="margin: 1.5rem 0;">
            <?php foreach ($rank['features'] as $feature): ?>
              <li><?php echo $feature; ?></li>
            <?php endforeach; ?>
          </ul>

          <!-- Purchase Buttons -->
          <div class="purchase-buttons">
            <a href="https://wa.me/<?php echo WHATSAPP_PHONE; ?>" target="_blank" rel="noopener noreferrer" class="purchase-btn purchase-btn-whatsapp">
              <i class="fab fa-whatsapp"></i> Buy via WhatsApp
            </a>
            <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="purchase-btn purchase-btn-discord">
              <i class="fab fa-discord"></i> Discord Ticket
            </a>
          </div>

          <div class="support-note" style="margin-top: 1rem;">
            Need help? You can purchase your rank through WhatsApp or by opening a Discord Ticket.
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Rank Comparison -->
<section class="section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Rank Comparison</h2>
      <p style="color: var(--text-muted);">Choose the rank that fits your playstyle</p>
    </div>

    <div style="overflow-x: auto;">
      <table style="
        width: 100%;
        border-collapse: collapse;
        background: rgba(42, 47, 74, 0.6);
        border: 1px solid rgba(97, 225, 255, 0.15);
        border-radius: var(--radius-lg);
        overflow: hidden;
      ">
        <thead>
          <tr style="background: rgba(97, 225, 255, 0.1); border-bottom: 1px solid rgba(97, 225, 255, 0.15);">
            <th style="padding: 1rem; text-align: left; color: var(--primary); font-weight: 700;">Feature</th>
            <th style="padding: 1rem; text-align: center; color: #61E1FF;">VIP</th>
            <th style="padding: 1rem; text-align: center; color: #00D4FF;">VIP+</th>
            <th style="padding: 1rem; text-align: center; color: #0099FF;">Premium</th>
            <th style="padding: 1rem; text-align: center; color: #0066FF;">Elite</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom: 1px solid rgba(97, 225, 255, 0.1);">
            <td style="padding: 1rem; color: var(--text-muted);">Color Chat</td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(97, 225, 255, 0.1);">
            <td style="padding: 1rem; color: var(--text-muted);">/hat Command</td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(97, 225, 255, 0.1);">
            <td style="padding: 1rem; color: var(--text-muted);">Homes</td>
            <td style="padding: 1rem; text-align: center; color: var(--primary);">2</td>
            <td style="padding: 1rem; text-align: center; color: var(--primary);">4</td>
            <td style="padding: 1rem; text-align: center; color: var(--primary);">6</td>
            <td style="padding: 1rem; text-align: center; color: var(--primary);">∞</td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(97, 225, 255, 0.1);">
            <td style="padding: 1rem; color: var(--text-muted);">/fly Command</td>
            <td style="padding: 1rem; text-align: center; color: var(--error);">✗</td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(97, 225, 255, 0.1);">
            <td style="padding: 1rem; color: var(--text-muted);">Pets & Particles</td>
            <td style="padding: 1rem; text-align: center; color: var(--error);">✗</td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
          </tr>
          <tr>
            <td style="padding: 1rem; color: var(--text-muted);">Priority Queue</td>
            <td style="padding: 1rem; text-align: center; color: var(--error);">✗</td>
            <td style="padding: 1rem; text-align: center; color: var(--error);">✗</td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
            <td style="padding: 1rem; text-align: center; color: var(--success);"><i class="fas fa-check"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- How to Purchase -->
<section class="section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">How to Purchase Ranks</h2>
      <p style="color: var(--text-muted);">Choose your preferred method to get your rank</p>
    </div>

    <div class="grid-3">
      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: #25D366;">
          <i class="fab fa-whatsapp"></i>
        </div>
        <h3 style="color: #25D366; margin-bottom: 1rem;">Via WhatsApp</h3>
        <p style="color: var(--text-muted); margin-bottom: 1.5rem;">Message us on WhatsApp to purchase your rank directly. Quick response time!</p>
        <a href="https://wa.me/<?php echo WHATSAPP_PHONE; ?>" target="_blank" rel="noopener noreferrer" style="color: #25D366; text-decoration: none; font-weight: 600;">Contact Now →</a>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: #5865F2;">
          <i class="fab fa-discord"></i>
        </div>
        <h3 style="color: #5865F2; margin-bottom: 1rem;">Via Discord Ticket</h3>
        <p style="color: var(--text-muted); margin-bottom: 1.5rem;">Open a support ticket in Discord to purchase your rank and get instant support.</p>
        <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" style="color: #5865F2; text-decoration: none; font-weight: 600;">Join Discord →</a>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--primary);">
          <i class="fas fa-check-circle"></i>
        </div>
        <h3 style="color: var(--primary); margin-bottom: 1rem;">Instant Activation</h3>
        <p style="color: var(--text-muted); margin-bottom: 1.5rem;">After payment confirmed, your rank will be activated in-game immediately!</p>
        <span style="color: var(--primary); font-weight: 600;">⚡ No Waiting</span>
      </div>
    </div>
  </div>
</section>

<!-- Support & Report Bugs -->
<section class="section">
  <div class="container">
    <div class="support-section">
      <h2 style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
        <i class="fas fa-tools" style="color: var(--primary);"></i> Support & Report Bugs
      </h2>
      <p>Found a bug or need help? Contact us through one of the following platforms:</p>

      <div class="support-links">
        <!-- TikTok Link -->
        <a href="https://www.tiktok.com/@<?php echo TIKTOK_USERNAME; ?>" target="_blank" rel="noopener noreferrer" class="support-link animate-fade-in-up" style="--animation-delay: 0.1s;">
          <div class="support-link-icon" style="color: #000;">
            <i class="fab fa-tiktok"></i>
          </div>
          <div class="support-link-title">TikTok</div>
          <div class="support-link-username">@<?php echo TIKTOK_USERNAME; ?></div>
        </a>

        <!-- WhatsApp Link -->
        <a href="https://wa.me/<?php echo WHATSAPP_PHONE; ?>" target="_blank" rel="noopener noreferrer" class="support-link animate-fade-in-up" style="--animation-delay: 0.2s;">
          <div class="support-link-icon" style="color: #25D366;">
            <i class="fab fa-whatsapp"></i>
          </div>
          <div class="support-link-title">WhatsApp</div>
          <div class="support-link-username">+62 856 0205 2384</div>
        </a>

        <!-- Discord Link -->
        <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="support-link animate-fade-in-up" style="--animation-delay: 0.3s;">
          <div class="support-link-icon" style="color: #5865F2;">
            <i class="fab fa-discord"></i>
          </div>
          <div class="support-link-title">Discord</div>
          <div class="support-link-username">Join Server</div>
        </a>
      </div>

      <div class="support-note" style="margin-top: 2rem; text-align: center; border: none; border-radius: var(--radius-lg); padding: 1.5rem; background: rgba(97, 225, 255, 0.08); border-left: 3px solid var(--primary);">
        <p style="margin: 0;">If you find any bugs or experience any issues, please contact us via TikTok, WhatsApp, or Discord. We'll respond as soon as possible.</p>
      </div>
    </div>
  </div>
</section>

<!-- Rank Benefits -->
<section class="section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Rank Benefits</h2>
      <p style="color: var(--text-muted);">See what you get with each rank upgrade</p>
    </div>

    <div class="grid-2">
      <div class="cta-card animate-fade-in-up">
        <h3 style="color: var(--primary); display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-coins"></i> Economic Advantages
        </h3>
        <p style="color: var(--text-muted); margin: 1rem 0;">
          Earn more resources, access exclusive trading, and get money bonuses for playing. Invest in the right rank to maximize your in-game economy.
        </p>
      </div>

      <div class="cta-card animate-fade-in-up">
        <h3 style="color: var(--accent-dark); display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-star"></i> Special Abilities
        </h3>
        <p style="color: var(--text-muted); margin: 1rem 0;">
          Unlock unique commands, cosmetic effects, and gameplay enhancements. Stand out with exclusive titles, colors, and particles!
        </p>
      </div>

      <div class="cta-card animate-fade-in-up">
        <h3 style="color: var(--success); display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-shield-alt"></i> Exclusive Protection
        </h3>
        <p style="color: var(--text-muted); margin: 1rem 0;">
          Higher ranks get better claim protection, vault storage, and priority support. Protect your builds and valuables!
        </p>
      </div>

      <div class="cta-card animate-fade-in-up">
        <h3 style="color: var(--primary); display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-users"></i> VIP Community
        </h3>
        <p style="color: var(--text-muted); margin: 1rem 0;">
          Join exclusive VIP channels, events, and get direct access to staff. Be part of an elite gaming community!
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container">
    <div class="cta-card" style="text-align: center;">
      <h2 style="color: var(--primary); margin-bottom: 1rem;">Ready to Upgrade?</h2>
      <p style="color: var(--text-muted); margin-bottom: 2rem;">Support the server and unlock amazing features</p>
      <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
        <i class="fab fa-discord"></i> Browse Rank Store
      </a>
    </div>
  </div>
</section>
