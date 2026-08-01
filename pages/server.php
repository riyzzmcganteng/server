<!-- ============================================
     SERVER INFO PAGE
     ============================================ -->

<section class="server-header section" style="background: linear-gradient(135deg, rgba(97,225,255,0.1) 0%, rgba(0,153,255,0.05) 100%); padding: 4rem 0;">
  <div class="container">
    <div style="text-align: center;">
      <h1 class="gradient-text" style="font-size: 3rem; margin-bottom: 1rem;">Server Information</h1>
      <p style="color: var(--text-muted); font-size: var(--text-lg);">Everything you need to know about Ryzoria SMP</p>
    </div>
  </div>
</section>

<!-- Connection Details -->
<section class="section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Connection Details</h2>
    </div>

    <div class="grid-2">
      <!-- Java Edition -->
      <div class="rank-card featured animate-fade-in-up">
        <div style="font-size: 3rem; margin-bottom: 1.5rem; color: var(--primary);">
          <i class="fas fa-cube"></i>
        </div>
        <h3 style="color: var(--primary); margin-bottom: 0.5rem; font-size: 1.5rem;">Java Edition</h3>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">For Minecraft Java Edition</p>

        <div style="background: rgba(0,0,0,0.3); border-radius: var(--radius-lg); padding: 1.5rem; margin: 1.5rem 0;">
          <div style="font-size: 0.875rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem;">
            Server IP
          </div>
          <div style="font-size: 1.5rem; color: var(--primary); font-family: 'Courier New', monospace; word-break: break-all; margin-bottom: 1rem; font-weight: 700;">
            <?php echo SERVER_JAVA_IP; ?>
          </div>
          <button class="btn btn-primary" data-copy="<?php echo SERVER_JAVA_IP; ?>" data-feedback="IP Copied!" style="width: 100%;">
            <i class="fas fa-copy"></i> Copy IP
          </button>
        </div>

        <ul class="features-list">
          <li>Latest Version Support</li>
          <li>Cross-Play Compatible</li>
          <li>24/7 Uptime</li>
          <li>Anti-Cheat Enabled</li>
        </ul>
      </div>

      <!-- Bedrock Edition -->
      <div class="rank-card featured animate-fade-in-up">
        <div style="font-size: 3rem; margin-bottom: 1.5rem; color: var(--accent-dark);">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 style="color: var(--accent-dark); margin-bottom: 0.5rem; font-size: 1.5rem;">Bedrock Edition</h3>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">For Minecraft Bedrock (Console, Mobile, Windows)</p>

        <div style="background: rgba(0,0,0,0.3); border-radius: var(--radius-lg); padding: 1.5rem; margin: 1.5rem 0;">
          <div style="font-size: 0.875rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 1rem;">
            Connection Details
          </div>
          <div style="margin-bottom: 1rem;">
            <div style="font-size: 0.75rem; color: var(--text-muted); margin-bottom: 0.5rem;">Host</div>
            <div style="font-size: 1.25rem; color: var(--accent-dark); font-family: 'Courier New', monospace; word-break: break-all; font-weight: 700;">
              <?php echo SERVER_JAVA_IP; ?>
            </div>
          </div>
          <div>
            <div style="font-size: 0.75rem; color: var(--text-muted); margin-bottom: 0.5rem;">Port</div>
            <div style="font-size: 1.5rem; color: var(--accent-dark); font-family: 'Courier New', monospace; font-weight: 700;">
              <?php echo SERVER_BEDROCK_PORT; ?>
            </div>
          </div>
          <button class="btn btn-primary" data-copy="<?php echo SERVER_BEDROCK_PORT; ?>" data-feedback="Port Copied!" style="width: 100%; margin-top: 1rem;">
            <i class="fas fa-copy"></i> Copy Port
          </button>
        </div>

        <ul class="features-list">
          <li>Console Support</li>
          <li>Mobile Compatible</li>
          <li>Switch & Xbox</li>
          <li>Real-time Sync</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Server Specifications -->
<section class="section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Server Specifications</h2>
    </div>

    <div class="grid-4">
      <div class="stats-card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
          <i class="fas fa-tachometer-alt"></i>
        </div>
        <div class="stat-number" style="font-size: 1.875rem;">64 GB</div>
        <div class="stat-label">Server RAM</div>
      </div>

      <div class="stats-card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--accent-dark); margin-bottom: 1rem;">
          <i class="fas fa-network-wired"></i>
        </div>
        <div class="stat-number" style="font-size: 1.875rem;">Gigabit</div>
        <div class="stat-label">Connection</div>
      </div>

      <div class="stats-card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--success); margin-bottom: 1rem;">
          <i class="fas fa-clock"></i>
        </div>
        <div class="stat-number" style="font-size: 1.875rem;">99.9%</div>
        <div class="stat-label">Uptime SLA</div>
      </div>

      <div class="stats-card animate-fade-in-up">
        <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
          <i class="fas fa-server"></i>
        </div>
        <div class="stat-number" style="font-size: 1.875rem;">Premium</div>
        <div class="stat-label">Hosting</div>
      </div>
    </div>
  </div>
</section>

<!-- Server Rules -->
<section class="section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">Server Rules</h2>
      <p style="color: var(--text-muted);">Please follow these rules to maintain a positive community</p>
    </div>

    <div class="grid-2">
      <div class="card animate-fade-in-up">
        <h3 style="color: var(--primary); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-shield-alt"></i> Be Respectful
        </h3>
        <p style="color: var(--text-muted);">Treat all players with respect. No discrimination, harassment, or bullying of any kind.</p>
      </div>

      <div class="card animate-fade-in-up">
        <h3 style="color: var(--accent-dark); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-ban"></i> No Griefing
        </h3>
        <p style="color: var(--text-muted);">Griefing, raiding, and stealing are strictly prohibited. Build in designated areas.</p>
      </div>

      <div class="card animate-fade-in-up">
        <h3 style="color: var(--success); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-check-circle"></i> No Cheating
        </h3>
        <p style="color: var(--text-muted);">Hacking, exploits, and mods are not allowed. Use vanilla Minecraft only.</p>
      </div>

      <div class="card animate-fade-in-up">
        <h3 style="color: var(--primary); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
          <i class="fas fa-comments"></i> Keep Chat Clean
        </h3>
        <p style="color: var(--text-muted);">No spam, advertising, or inappropriate language in chat. Be family-friendly.</p>
      </div>
    </div>
  </div>
</section>

<!-- How to Join -->
<section class="section" style="background: linear-gradient(180deg, rgba(97,225,255,0.05) 0%, rgba(97,225,255,0) 100%);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="gradient-text" style="margin-bottom: 1rem;">How to Join</h2>
    </div>

    <div style="max-width: 800px; margin: 0 auto;">
      <div class="card animate-fade-in-up" style="margin-bottom: 1.5rem;">
        <div style="display: flex; gap: 1.5rem;">
          <div style="
            min-width: 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--accent-dark));
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--background);
          ">
            1
          </div>
          <div>
            <h3 style="color: var(--primary); margin-bottom: 0.5rem;">Get Minecraft</h3>
            <p style="color: var(--text-muted);">Download and install Minecraft Java or Bedrock Edition on your device.</p>
          </div>
        </div>
      </div>

      <div class="card animate-fade-in-up" style="margin-bottom: 1.5rem;">
        <div style="display: flex; gap: 1.5rem;">
          <div style="
            min-width: 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-dark), var(--primary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--background);
          ">
            2
          </div>
          <div>
            <h3 style="color: var(--accent-dark); margin-bottom: 0.5rem;">Copy Connection Details</h3>
            <p style="color: var(--text-muted);">Use the server IP and port information above (click the copy button for easy access).</p>
          </div>
        </div>
      </div>

      <div class="card animate-fade-in-up" style="margin-bottom: 1.5rem;">
        <div style="display: flex; gap: 1.5rem;">
          <div style="
            min-width: 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--accent-dark));
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--background);
          ">
            3
          </div>
          <div>
            <h3 style="color: var(--primary); margin-bottom: 0.5rem;">Add Server</h3>
            <p style="color: var(--text-muted);">Open Minecraft, go to Multiplayer, click "Add Server" and paste the connection details.</p>
          </div>
        </div>
      </div>

      <div class="card animate-fade-in-up">
        <div style="display: flex; gap: 1.5rem;">
          <div style="
            min-width: 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-dark), var(--primary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--background);
          ">
            4
          </div>
          <div>
            <h3 style="color: var(--accent-dark); margin-bottom: 0.5rem;">Join & Play!</h3>
            <p style="color: var(--text-muted);">Click "Join Server" and start your adventure on Ryzoria SMP!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Support CTA -->
<section class="section">
  <div class="container">
    <div class="cta-card" style="text-align: center;">
      <h2 style="color: var(--primary); margin-bottom: 1rem;">Need Help?</h2>
      <p style="color: var(--text-muted); margin-bottom: 2rem;">Join our Discord community for support and questions</p>
      <a href="<?php echo DISCORD_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
        <i class="fab fa-discord"></i> Join Discord
      </a>
    </div>
  </div>
</section>
