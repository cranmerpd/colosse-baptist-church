<style>
    .hub-control {
        --hc-bg: #eef2f0;
        --hc-panel: #ffffff;
        --hc-ink: #12222d;
        --hc-muted: #667684;
        --hc-navy: #0d2a3a;
        --hc-blue: #1f6f8b;
        --hc-teal: #2f9b8f;
        --hc-gold: #d7a84f;
        --hc-line: rgba(13, 42, 58, .12);
        --hc-shadow: 0 20px 60px rgba(13, 42, 58, .12);
        background: var(--hc-bg);
        color: var(--hc-ink);
        font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        padding: 28px 0 90px;
    }

    .hub-control a {
        color: inherit;
        text-decoration: none;
    }

    .hc-dashboard {
        width: min(1220px, calc(100% - 36px));
        margin: 0 auto;
        display: grid;
        grid-template-columns: minmax(0, 1fr) 360px;
        gap: 20px;
    }

    .hc-hero-panel {
        min-height: 520px;
        border-radius: 34px;
        overflow: hidden;
        position: relative;
        background-image:
            linear-gradient(90deg, rgba(13,42,58,.92), rgba(13,42,58,.52)),
            url('<?php echo htmlspecialchars($home['hero_image_url']); ?>');
        background-size: cover;
        background-position: center;
        box-shadow: var(--hc-shadow);
        display: flex;
        align-items: end;
    }

    .hc-hero-content {
        padding: 42px;
        color: white;
        max-width: 800px;
    }

    .hc-label {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        color: var(--hc-gold);
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .16em;
    }

    .hc-label::before {
        content: "";
        width: 9px;
        height: 9px;
        border-radius: 999px;
        background: var(--hc-gold);
    }

    .hc-hero-content h1 {
        margin: 18px 0;
        font-size: clamp(42px, 6vw, 76px);
        line-height: .96;
        letter-spacing: -.065em;
    }

    .hc-hero-content p {
        max-width: 680px;
        margin: 0;
        color: rgba(255,255,255,.84);
        font-size: 19px;
        line-height: 1.65;
    }

    .hc-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px;
    }

    .hc-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 48px;
        padding: 13px 19px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .08em;
    }

    .hc-btn.gold {
        background: var(--hc-gold);
        color: var(--hc-navy);
    }

    .hc-btn.light {
        background: rgba(255,255,255,.13);
        color: white;
        border: 1px solid rgba(255,255,255,.28);
    }

    .hc-sidebar {
        display: grid;
        gap: 20px;
    }

    .hc-widget {
        background: var(--hc-panel);
        border: 1px solid var(--hc-line);
        border-radius: 28px;
        padding: 24px;
        box-shadow: var(--hc-shadow);
    }

    .hc-widget.dark {
        background: var(--hc-navy);
        color: white;
    }

    .hc-widget h2,
    .hc-widget h3 {
        margin: 0;
        line-height: 1.05;
        letter-spacing: -.045em;
    }

    .hc-widget h2 {
        font-size: 30px;
    }

    .hc-widget h3 {
        font-size: 24px;
    }

    .hc-widget p {
        margin: 12px 0 0;
        color: var(--hc-muted);
        line-height: 1.6;
    }

    .hc-widget.dark p {
        color: rgba(255,255,255,.72);
    }

    .hc-feature-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 22px;
        margin-bottom: 18px;
    }

    .hc-quick-actions {
        display: grid;
        gap: 10px;
        margin-top: 18px;
    }

    .hc-quick-actions a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 14px;
        padding: 13px 14px;
        border-radius: 16px;
        background: rgba(255,255,255,.09);
        border: 1px solid rgba(255,255,255,.13);
        color: white;
        font-weight: 850;
    }

    .hc-quick-actions span {
        color: var(--hc-gold);
        font-weight: 950;
    }

    .hc-status-grid {
        width: min(1220px, calc(100% - 36px));
        margin: 20px auto 0;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .hc-status-card {
        background: var(--hc-panel);
        border: 1px solid var(--hc-line);
        border-radius: 26px;
        padding: 24px;
        box-shadow: var(--hc-shadow);
        min-height: 160px;
    }

    .hc-status-card small {
        display: block;
        color: var(--hc-blue);
        font-size: 11px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .14em;
    }

    .hc-status-card strong {
        display: block;
        margin-top: 14px;
        font-size: 25px;
        line-height: 1.05;
        letter-spacing: -.045em;
    }

    .hc-status-card p {
        margin: 10px 0 0;
        color: var(--hc-muted);
        font-size: 14px;
        line-height: 1.55;
    }

    .hc-main-grid {
        width: min(1220px, calc(100% - 36px));
        margin: 20px auto 0;
        display: grid;
        grid-template-columns: 280px minmax(0, 1fr);
        gap: 20px;
        align-items: start;
    }

    .hc-section-nav {
        background: var(--hc-panel);
        border: 1px solid var(--hc-line);
        border-radius: 28px;
        padding: 18px;
        box-shadow: var(--hc-shadow);
        position: sticky;
        top: 110px;
    }

    .hc-section-nav strong {
        display: block;
        padding: 8px 8px 14px;
        color: var(--hc-navy);
        font-size: 15px;
    }

    .hc-section-nav a {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        padding: 13px 12px;
        border-radius: 14px;
        color: var(--hc-muted);
        font-weight: 800;
    }

    .hc-section-nav a:hover {
        background: #f2f6f5;
        color: var(--hc-navy);
    }

    .hc-section-nav span {
        color: var(--hc-gold);
    }

    .hc-content-panel {
        background: var(--hc-panel);
        border: 1px solid var(--hc-line);
        border-radius: 30px;
        box-shadow: var(--hc-shadow);
        overflow: hidden;
    }

    .hc-panel-header {
        padding: 28px;
        border-bottom: 1px solid var(--hc-line);
        display: flex;
        justify-content: space-between;
        gap: 24px;
        align-items: end;
    }

    .hc-panel-header h2 {
        margin: 10px 0 0;
        font-size: clamp(32px, 4vw, 52px);
        line-height: 1;
        letter-spacing: -.06em;
    }

    .hc-panel-header p {
        margin: 0;
        color: var(--hc-muted);
        max-width: 420px;
        line-height: 1.65;
    }

    .hc-resource-list {
        display: grid;
    }

    .hc-resource-row {
        display: grid;
        grid-template-columns: 120px 1fr 110px;
        gap: 22px;
        align-items: center;
        padding: 22px 28px;
        border-bottom: 1px solid var(--hc-line);
    }

    .hc-resource-row:last-child {
        border-bottom: 0;
    }

    .hc-resource-row img {
        width: 120px;
        height: 82px;
        object-fit: cover;
        border-radius: 18px;
    }

    .hc-resource-row h3 {
        margin: 0;
        font-size: 25px;
        line-height: 1.05;
        letter-spacing: -.045em;
    }

    .hc-resource-row p {
        margin: 7px 0 0;
        color: var(--hc-muted);
        line-height: 1.55;
    }

    .hc-resource-row span {
        justify-self: end;
        background: #eef5f3;
        color: var(--hc-blue);
        padding: 9px 11px;
        border-radius: 999px;
        font-size: 11px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .1em;
    }

    .hc-bottom-grid {
        width: min(1220px, calc(100% - 36px));
        margin: 20px auto 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .hc-visit,
    .hc-message {
        background: var(--hc-panel);
        border: 1px solid var(--hc-line);
        border-radius: 30px;
        padding: 30px;
        box-shadow: var(--hc-shadow);
    }

    .hc-visit {
        background:
            linear-gradient(90deg, rgba(13,42,58,.88), rgba(13,42,58,.54)),
            url('<?php echo htmlspecialchars($home['hero_image_url']); ?>');
        background-size: cover;
        background-position: center;
        color: white;
    }

    .hc-visit h2,
    .hc-message h2 {
        margin: 12px 0;
        font-size: 38px;
        line-height: 1;
        letter-spacing: -.055em;
    }

    .hc-visit p {
        color: rgba(255,255,255,.76);
        line-height: 1.65;
    }

    .hc-message p {
        color: var(--hc-muted);
        line-height: 1.65;
    }

    @media (max-width: 1050px) {
        .hc-dashboard,
        .hc-main-grid,
        .hc-bottom-grid {
            grid-template-columns: 1fr;
        }

        .hc-status-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .hc-section-nav {
            position: static;
        }
    }

    @media (max-width: 720px) {
        .hc-status-grid {
            grid-template-columns: 1fr;
        }

        .hc-resource-row {
            grid-template-columns: 1fr;
        }

        .hc-resource-row img {
            width: 100%;
            height: 200px;
        }

        .hc-resource-row span {
            justify-self: start;
        }

        .hc-panel-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .hc-hero-content {
            padding: 30px;
        }
    }
</style>

<div class="hub-control">

    <section class="hc-dashboard">

        <div class="hc-hero-panel">
            <div class="hc-hero-content">
                <span class="hc-label">
                    <?php echo htmlspecialchars($home['hero_eyebrow']); ?>
                </span>

                <h1><?php echo htmlspecialchars($home['hero_title']); ?></h1>

                <p><?php echo htmlspecialchars($home['hero_text']); ?></p>

                <div class="hc-actions">
                    <a class="hc-btn gold" href="<?php echo htmlspecialchars($home['hero_primary_url']); ?>">
                        <?php echo htmlspecialchars($home['hero_primary_text']); ?>
                    </a>

                    <a class="hc-btn light" href="<?php echo htmlspecialchars($home['hero_secondary_url']); ?>">
                        <?php echo htmlspecialchars($home['hero_secondary_text']); ?>
                    </a>
                </div>
            </div>
        </div>

        <aside class="hc-sidebar">

            <div class="hc-widget">
                <img class="hc-feature-image" src="<?php echo htmlspecialchars($home['welcome_image_url']); ?>" alt="">

                <span class="hc-label">
                    <?php echo htmlspecialchars($home['welcome_eyebrow']); ?>
                </span>

                <h2><?php echo htmlspecialchars($home['welcome_title']); ?></h2>

                <p><?php echo htmlspecialchars($home['welcome_text']); ?></p>
            </div>

            <div class="hc-widget dark">
                <h3>Quick Access</h3>

                <p>Common paths for visitors, members, and families.</p>

                <div class="hc-quick-actions">
                    <?php foreach (array_slice($homeLinks, 0, 4) as $link): ?>
                        <a href="<?php echo htmlspecialchars($link['url']); ?>">
                            <?php echo htmlspecialchars($link['title']); ?>
                            <span>→</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </aside>

    </section>

    <section class="hc-status-grid">
        <?php foreach (array_slice($homeLinks, 0, 4) as $link): ?>
            <a class="hc-status-card" href="<?php echo htmlspecialchars($link['url']); ?>">
                <small><?php echo htmlspecialchars($link['title']); ?></small>
                <strong><?php echo htmlspecialchars($link['description']); ?></strong>
                <p>Open this area for more information.</p>
            </a>
        <?php endforeach; ?>
    </section>

    <section class="hc-main-grid">

        <nav class="hc-section-nav">
            <strong>Homepage Menu</strong>

            <?php foreach ($homeLinks as $link): ?>
                <a href="<?php echo htmlspecialchars($link['url']); ?>">
                    <?php echo htmlspecialchars($link['title']); ?>
                    <span>›</span>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="hc-content-panel">
            <div class="hc-panel-header">
                <div>
                    <span class="hc-label">Church Dashboard</span>
                    <h2>Everything in one place</h2>
                </div>

                <p>
                    This layout keeps the homepage feeling like a website while organizing church life like a simple dashboard.
                </p>
            </div>

            <div class="hc-resource-list">
                <?php foreach ($homeLinks as $link): ?>
                    <a class="hc-resource-row" href="<?php echo htmlspecialchars($link['url']); ?>">
                        <img src="<?php echo htmlspecialchars($link['image_url']); ?>" alt="">

                        <div>
                            <h3><?php echo htmlspecialchars($link['title']); ?></h3>
                            <p><?php echo htmlspecialchars($link['description']); ?></p>
                        </div>

                        <span>Open</span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </section>

    <section class="hc-bottom-grid">

        <div class="hc-visit">
            <span class="hc-label">Visit</span>

            <h2>All are welcome.</h2>

            <p>
                We would love to worship with you and welcome you into the life of Colosse Baptist Church.
            </p>

            <div class="hc-actions">
                <a class="hc-btn gold" href="<?php echo htmlspecialchars($home['hero_primary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_primary_text']); ?>
                </a>
            </div>
        </div>

        <div class="hc-message">
            <span class="hc-label">
                <?php echo htmlspecialchars($home['welcome_eyebrow']); ?>
            </span>

            <h2><?php echo htmlspecialchars($home['welcome_title']); ?></h2>

            <p><?php echo htmlspecialchars($home['welcome_text']); ?></p>

            <div class="hc-actions">
                <a class="hc-btn gold" href="<?php echo htmlspecialchars($home['welcome_link_url']); ?>">
                    <?php echo htmlspecialchars($home['welcome_link_text']); ?>
                </a>
            </div>
        </div>

    </section>

</div>