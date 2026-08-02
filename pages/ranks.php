<!-- ============================================
     RANK STORE PAGE - PREMIUM GLASSMORPHISM
     ============================================ -->

<section class="ranks-hero section" style="background: linear-gradient(135deg, rgba(97,225,255,0.15) 0%, rgba(0,153,255,0.08) 100%); padding: 5rem 2rem; position: relative; overflow: hidden;">
  <div style="position: absolute; inset: 0; background: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%2361E1FF\" fill-opacity=\"0.05\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>'); opacity: 0.3;"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <div style="text-align: center;">
      <h1 class="gradient-text" style="font-size: clamp(2rem, 5vw, 3.5rem); margin-bottom: 1rem; letter-spacing: -1px;">Premium Rank Store</h1>
      <p style="color: var(--text-muted); font-size: var(--text-lg); max-width: 600px; margin: 0 auto;">Unlock exclusive perks, support the server, and join the elite Ryzoria SMP community</p>
    </div>
  </div>
</section>

<!-- Rank Cards Grid -->
<section class="section" style="padding: 4rem 2rem;">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
      <?php foreach ($ranks as $rank): ?>
        <?php 
          $rankClass = strtolower(str_replace('+', 'plus', str_replace(' ', '', $rank['name'])));
          $isPremium = isset($rank['premium']) && $rank['premium'];
          $isPopular = isset($rank['popular']) && $rank['popular'];
        ?>
        <div class="rank-card glass-card <?php echo $rankClass; ?> <?php echo $isPremium ? 'premium-rank' : ''; ?>" style="position: relative; backdrop-filter: blur(10px); border: 1px solid rgba(97,225,255,0.2); border-radius: 20px; background: rgba(26,31,58,0.7); padding: 2rem; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); display: flex; flex-direction: column; height: 100%;">
          
          <!-- Badge -->
          <?php if ($isPopular): ?>
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.5rem 1rem; background: linear-gradient(135deg, rgba(97,225,255,0.3) 0%, rgba(0,212,255,0.2) 100%); border: 1px solid rgba(97,225,255,0.5); border-radius: 50px; width: fit-content; margin-bottom: 1rem; font-size: 0.75rem; font-weight: 700; color: var(--primary); text-transform: uppercase; letter-spacing: 1px;">
              ⭐ Most Popular
            </div>
          <?php endif; ?>
          <?php if ($isPremium): ?>
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.5rem 1rem; background: linear-gradient(135deg, rgba(139,92,246,0.3) 0%, rgba(236,72,153,0.2) 100%); border: 1px solid rgba(139,92,246,0.5); border-radius: 50px; width: fit-content; margin-bottom: 1rem; font-size: 0.75rem; font-weight: 700; color: <?php echo $rank['color']; ?>; text-transform: uppercase; letter-spacing: 1px;">
              👑 Premium
            </div>
          <?php endif; ?>

          <!-- Rank Name & Icon -->
          <div style="margin-bottom: 1.5rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
              <div style="font-size: 2rem;">
                <?php 
                  $icons = ['VIP' => '💎', 'VIP+' => '💎', 'MVP' => '👑', 'MVP+' => '👑', 'Elite' => '⚔️', 'Elite+' => '⚔️', 'Legends' => '🏆', 'Ryzoria' => '🌟', 'Ryzoria+' => '✨'];
                  echo $icons[$rank['name']] ?? '⭐';
                ?>
              </div>
              <div>
                <h3 style="margin: 0; font-size: 1.75rem; font-weight: 800; color: <?php echo $rank['color']; ?>;"><?php echo $rank['name']; ?></h3>
              </div>
            </div>
            <div style="font-size: 0.875rem; color: var(--text-muted);">Rank <?php echo $rank['id']; ?> of 9</div>
          </div>

          <!-- Price -->
          <div style="margin-bottom: 2rem;">
            <div style="font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem;">Price</div>
            <div style="font-size: 2rem; font-weight: 800; color: <?php echo $rank['color']; ?>;"><?php echo $rank['price']; ?></div>
          </div>

          <!-- Features -->
          <ul style="list-style: none; padding: 0; margin: 0 0 2rem 0; flex-grow: 1;">
            <?php foreach ($rank['features'] as $feature): ?>
              <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem; color: var(--text-muted); font-size: 0.95rem;">
                <span style="color: <?php echo $rank['color']; ?>; font-weight: 700; margin-top: 2px;">✓</span>
                <span><?php echo $feature; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>

          <!-- Purchase Buttons -->
          <div style="display: flex; flex-direction: column; gap: 0.75rem; margin-top: auto;">
            <a href="https://wa.me/<?php echo WHATSAPP_PHONE; ?>" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; padding: 0.9rem 1.5rem; background: rgba(37,211,102,0.15); border: 1px solid rgba(37,211,102,0.4); border-radius: 12px; color: #25D366; font-weight: 600; font-size: 0.95rem; cursor: pointer; transition: all 0.3s ease; text-decoration: none;">
              <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
            <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; gap: 0.75rem; padding: 0.9rem 1.5rem; background: rgba(88,101,242,0.15); border: 1px solid rgba(88,101,242,0.4); border-radius: 12px; color: #5865F2; font-weight: 600; font-size: 0.95rem; cursor: pointer; transition: all 0.3s ease; text-decoration: none;">
              <i class="fab fa-discord"></i> Discord Ticket
            </a>
          </div>

          <!-- Support Note -->
          <div style="margin-top: 1.5rem; padding: 0.875rem; background: rgba(97,225,255,0.08); border-left: 3px solid var(--primary); border-radius: 8px; font-size: 0.8rem; color: var(--text-muted);">
            Need help? Purchase your rank through WhatsApp or Discord Ticket.
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Rank Comparison Table -->
<section class="section" style="padding: 4rem 2rem; background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, transparent 100%);">
  <div class="container">
    <h2 class="gradient-text" style="text-align: center; margin-bottom: 3rem; font-size: 2rem;">Rank Comparison</h2>
    <div style="overflow-x: auto; border-radius: 16px; border: 1px solid rgba(97,225,255,0.15);">
      <table style="width: 100%; border-collapse: collapse; background: rgba(26,31,58,0.5); backdrop-filter: blur(10px);">
        <thead>
          <tr style="background: rgba(97,225,255,0.1); border-bottom: 1px solid rgba(97,225,255,0.15);">
            <th style="padding: 1.5rem; text-align: left; color: var(--primary); font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Feature</th>
            <?php foreach ($ranks as $rank): ?>
              <th style="padding: 1.5rem; text-align: center; color: <?php echo $rank['color']; ?>; font-weight: 700; font-size: 0.85rem; white-space: nowrap;">
                <?php echo $rank['name']; ?>
              </th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom: 1px solid rgba(97,225,255,0.1);">
            <td style="padding: 1.25rem; color: var(--text-muted); font-weight: 600;">Color Chat</td>
            <?php foreach ($ranks as $rank): ?>
              <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <?php endforeach; ?>
          </tr>
          <tr style="border-bottom: 1px solid rgba(97,225,255,0.1);">
            <td style="padding: 1.25rem; color: var(--text-muted); font-weight: 600;">Homes</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">2</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">4</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">6</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">8</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">10</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">∞</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">∞</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">∞</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">∞</td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(97,225,255,0.1);">
            <td style="padding: 1.25rem; color: var(--text-muted); font-weight: 600;">/fly Command</td>
            <td style="padding: 1.25rem; text-align: center; color: #EF4444;">✗</td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
            <td style="padding: 1.25rem; text-align: center; color: #25D366;"><i class="fas fa-check"></i></td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(97,225,255,0.1);">
            <td style="padding: 1.25rem; color: var(--text-muted); font-weight: 600;">Drop Multiplier</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">1x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">1x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">1x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">2x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">2x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">3x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">5x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">10x</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary);">∞</td>
          </tr>
          <tr>
            <td style="padding: 1.25rem; color: var(--text-muted); font-weight: 600;">Monthly Bonus</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 5K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 8K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 12K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 20K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 30K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 45K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 70K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 120K</td>
            <td style="padding: 1.25rem; text-align: center; color: var(--primary); font-size: 0.9rem;">Rp 200K</td>
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

<style>
  .rank-card {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
  }

  <?php foreach (array_keys($ranks) as $index): ?>
    .rank-card:nth-child(<?php echo $index + 1; ?>) {
      animation-delay: <?php echo $index * 0.08; ?>s;
    }
  <?php endforeach; ?>

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .rank-card:hover {
    transform: translateY(-8px);
    border-color: rgba(97,225,255,0.4) !important;
    background: rgba(26,31,58,0.85) !important;
    box-shadow: 0 20px 50px rgba(97,225,255,0.15);
  }

  .rank-card.premium-rank {
    border-color: rgba(139,92,246,0.3) !important;
    background: linear-gradient(135deg, rgba(139,92,246,0.08) 0%, rgba(26,31,58,0.7) 100%) !important;
  }

  .rank-card.premium-rank:hover {
    border-color: rgba(139,92,246,0.5) !important;
    background: linear-gradient(135deg, rgba(139,92,246,0.12) 0%, rgba(26,31,58,0.85) 100%) !important;
    box-shadow: 0 0 30px rgba(139,92,246,0.2), 0 20px 50px rgba(139,92,246,0.1);
  }

  a[href*="wa.me"]:hover {
    transform: translateY(-2px) !important;
    border-color: rgba(37,211,102,0.6) !important;
    background: rgba(37,211,102,0.2) !important;
    box-shadow: 0 8px 20px rgba(37,211,102,0.2) !important;
  }

  a[href*="dsc.gg"]:hover {
    transform: translateY(-2px) !important;
    border-color: rgba(88,101,242,0.6) !important;
    background: rgba(88,101,242,0.2) !important;
    box-shadow: 0 8px 20px rgba(88,101,242,0.2) !important;
  }

  @media (max-width: 768px) {
    .rank-card {
      padding: 1.5rem !important;
    }
  }
</style>
