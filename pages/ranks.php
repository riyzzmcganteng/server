<!-- ============================================
     RANK STORE PAGE
     ============================================ -->

<section class="ranks-header section" style="background: linear-gradient(135deg, rgba(97,225,255,0.1) 0%, rgba(0,153,255,0.05) 100%); padding: 4rem 0;">
  <div class="container">
    <div style="text-align: center;">
      <h1 class="gradient-text" style="font-size: 3rem; margin-bottom: 1rem;">Rank Store</h1>
      <p style="color: var(--text-muted); font-size: var(--text-lg);">Unlock exclusive perks and support the server</p>
    </div>
  </div>
</section>

<!-- Rank Cards -->
<section class="section">
  <div class="container">
    <div class="grid-4">
      <?php foreach ($ranks as $rank): ?>
        <div class="rank-card animate-fade-in-up <?php echo $rank['id'] === 4 ? 'featured' : ''; ?>">
          <?php if ($rank['id'] === 4): ?>
            <div class="badge badge-primary" style="margin-bottom: 1rem; display: inline-block;">★ BEST VALUE ★</div>
          <?php endif; ?>

          <div class="rank-badge" style="background: rgba(<?php echo intval(hexdec(substr($rank['color'], 1, 2))); ?>, <?php echo intval(hexdec(substr($rank['color'], 3, 2))); ?>, <?php echo intval(hexdec(substr($rank['color'], 5, 2))); ?>, 0.2); border-color: <?php echo $rank['color']; ?>40; color: <?php echo $rank['color']; ?>;">
            <?php echo $rank['name']; ?>
          </div>

          <h3 class="rank-title" style="color: <?php echo $rank['color']; ?>;">
            <?php echo $rank['name']; ?>
          </h3>

          <div class="rank-price">
            <?php echo $rank['price']; ?>
          </div>

          <ul class="features-list">
            <?php foreach ($rank['features'] as $feature): ?>
              <li><?php echo $feature; ?></li>
            <?php endforeach; ?>
          </ul>

          <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
            <i class="fab fa-discord"></i> Get <?php echo $rank['name']; ?>
          </a>
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
<section class="section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">How to Purchase Ranks</h2>
    </div>

    <div class="grid-3">
      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--primary);">
          <i class="fab fa-discord"></i>
        </div>
        <h3 style="color: var(--primary); margin-bottom: 1rem;">1. Join Discord</h3>
        <p style="color: var(--text-muted);">Join our Discord server to access the rank shop and payment options.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--accent-dark);">
          <i class="fas fa-credit-card"></i>
        </div>
        <h3 style="color: var(--accent-dark); margin-bottom: 1rem;">2. Choose & Pay</h3>
        <p style="color: var(--text-muted);">Select your desired rank and complete the payment process securely.</p>
      </div>

      <div class="card animate-fade-in-up">
        <div style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--success);">
          <i class="fas fa-check-circle"></i>
        </div>
        <h3 style="color: var(--success); margin-bottom: 1rem;">3. Claim Perks</h3>
        <p style="color: var(--text-muted);">After payment, your rank and perks will be instantly activated in-game.</p>
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
