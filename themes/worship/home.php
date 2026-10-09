<style>
    .worship-stage {
        --ws-black: #050607;
        --ws-charcoal: #0d1117;
        --ws-white: #ffffff;
        --ws-smoke: rgba(255,255,255,.72);
        --ws-line: rgba(255,255,255,.14);
        --ws-gold: #f0b84f;
        --ws-blue: #5bb7ff;
        background: var(--ws-black);
        color: var(--ws-white);
        font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    .worship-stage a {
        color: inherit;
        text-decoration: none;
    }

    .ws-hero {
        min-height: calc(100vh - 82px);
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        background-image:
            linear-gradient(90deg, rgba(5,6,7,.94) 0%, rgba(5,6,7,.76) 42%, rgba(5,6,7,.22) 100%),
            url('<?php echo htmlspecialchars($home['hero_image_url']); ?>');
        background-size: cover;
        background-position: center;
    }

    .ws-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 25% 15%, rgba(91,183,255,.22), transparent 26%),
            radial-gradient(circle at 70% 70%, rgba(240,184,79,.16), transparent 30%);
        pointer-events: none;
    }

    .ws-hero-inner {
        position: relative;
        z-index: 2;
        width: min(1220px, calc(100% - 40px));
        margin: 0 auto;
        padding: 80px 0;
    }

    .ws-kicker {
        color: var(--ws-gold);
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .22em;
    }

    .ws-hero h1 {
        max-width: 940px;
        margin: 20px 0 18px;
        font-size: clamp(48px, 7vw, 96px);
        line-height: .86;
        letter-spacing: -.08em;
        text-transform: uppercase;
        font-weight: 950;
    }

    .ws-hero p {
        max-width: 640px;
        color: var(--ws-smoke);
        font-size: clamp(17px, 1.7vw, 20px);
        line-height: 1.65;
        margin: 0;
    }

    .ws-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 32px;
    }

    .ws-btn {
        min-height: 52px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 13px 20px;
        border-radius: 0;
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .1em;
        border: 1px solid var(--ws-line);
    }

    .ws-btn.primary {
        background: var(--ws-white);
        color: var(--ws-black);
        border-color: var(--ws-white);
    }

    .ws-btn.secondary {
        color: var(--ws-white);
        background: rgba(255,255,255,.06);
    }

    .ws-sunday-strip {
        background: var(--ws-charcoal);
        border-top: 1px solid var(--ws-line);
        border-bottom: 1px solid var(--ws-line);
    }

    .ws-sunday-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        width: min(1220px, calc(100% - 40px));
        margin: 0 auto;
    }

    .ws-sunday-item {
        padding: 30px 24px;
        border-right: 1px solid var(--ws-line);
    }

    .ws-sunday-item:last-child {
        border-right: 0;
    }

    .ws-sunday-item small {
        color: var(--ws-gold);
        font-size: 11px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .16em;
    }

    .ws-sunday-item strong {
        display: block;
        margin-top: 10px;
        font-size: clamp(20px, 2.4vw, 30px);
        line-height: .98;
        letter-spacing: -.05em;
        text-transform: uppercase;
    }

    .ws-feature {
        padding: 92px 0;
        background:
            linear-gradient(rgba(5,6,7,.82), rgba(5,6,7,.82)),
            url('<?php echo htmlspecialchars($home['welcome_image_url']); ?>');
        background-size: cover;
        background-position: center;
    }

    .ws-feature-inner {
        width: min(1220px, calc(100% - 40px));
        margin: 0 auto;
        display: grid;
        grid-template-columns: .62fr 1fr;
        gap: 56px;
        align-items: end;
    }

    .ws-feature-number {
        color: transparent;
        -webkit-text-stroke: 2px rgba(255,255,255,.28);
        font-size: clamp(76px, 14vw, 180px);
        font-weight: 950;
        line-height: .8;
        letter-spacing: -.12em;
    }

    .ws-feature-copy small {
        color: var(--ws-blue);
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .2em;
    }

    .ws-feature-copy h2 {
        margin: 16px 0;
        font-size: clamp(34px, 5vw, 64px);
        line-height: .9;
        letter-spacing: -.075em;
        text-transform: uppercase;
    }

    .ws-feature-copy p {
        color: var(--ws-smoke);
        font-size: 18px;
        line-height: 1.7;
        max-width: 720px;
    }

    .ws-links {
        padding: 82px 0;
        background: var(--ws-black);
    }

    .ws-links-inner {
        width: min(1220px, calc(100% - 40px));
        margin: 0 auto;
    }

    .ws-section-title {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        align-items: end;
        margin-bottom: 30px;
        border-bottom: 1px solid var(--ws-line);
        padding-bottom: 26px;
    }

    .ws-section-title small {
        color: var(--ws-gold);
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .2em;
    }

    .ws-section-title h2 {
        margin: 10px 0 0;
        font-size: clamp(32px, 5vw, 58px);
        line-height: .9;
        letter-spacing: -.075em;
        text-transform: uppercase;
    }

    .ws-section-title p {
        max-width: 420px;
        margin: 0;
        color: var(--ws-smoke);
        line-height: 1.7;
        font-size: 16px;
    }

    .ws-link-stack {
        display: grid;
        border-top: 1px solid var(--ws-line);
    }

    .ws-link-row {
        display: grid;
        grid-template-columns: 150px 1fr 120px;
        gap: 24px;
        align-items: center;
        border-bottom: 1px solid var(--ws-line);
        padding: 22px 0;
    }

    .ws-link-row img {
        width: 150px;
        height: 100px;
        object-fit: cover;
        filter: grayscale(.15) contrast(1.08);
    }

    .ws-link-row h3 {
        margin: 0;
        font-size: clamp(22px, 3vw, 36px);
        line-height: .96;
        letter-spacing: -.06em;
        text-transform: uppercase;
    }

    .ws-link-row p {
        margin: 9px 0 0;
        color: var(--ws-smoke);
        line-height: 1.6;
        max-width: 700px;
        font-size: 16px;
    }

    .ws-link-row span {
        color: var(--ws-gold);
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .12em;
        justify-self: end;
    }

    .ws-final {
        min-height: 500px;
        display: flex;
        align-items: center;
        background:
            linear-gradient(90deg, rgba(5,6,7,.94), rgba(5,6,7,.55)),
            url('<?php echo htmlspecialchars($home['hero_image_url']); ?>');
        background-size: cover;
        background-position: center;
        border-top: 1px solid var(--ws-line);
    }

    .ws-final-inner {
        width: min(1220px, calc(100% - 40px));
        margin: 0 auto;
        padding: 82px 0;
    }

    .ws-final h2 {
        max-width: 720px;
        margin: 12px 0 18px;
        font-size: clamp(40px, 6vw, 76px);
        line-height: .88;
        letter-spacing: -.08em;
        text-transform: uppercase;
    }

    .ws-final p {
        max-width: 620px;
        color: var(--ws-smoke);
        font-size: 18px;
        line-height: 1.7;
    }

    @media (max-width: 900px) {
        .ws-sunday-grid,
        .ws-feature-inner,
        .ws-section-title {
            grid-template-columns: 1fr;
            flex-direction: column;
            align-items: flex-start;
        }

        .ws-sunday-item {
            border-right: 0;
            border-bottom: 1px solid var(--ws-line);
        }

        .ws-link-row {
            grid-template-columns: 1fr;
        }

        .ws-link-row img {
            width: 100%;
            height: 220px;
        }

        .ws-link-row span {
            justify-self: start;
        }
    }
</style>

<div class="worship-stage">

    <section class="ws-hero">
        <div class="ws-hero-inner">
            <div class="ws-kicker">
                <?php echo htmlspecialchars($home['hero_eyebrow']); ?>
            </div>

            <h1><?php echo htmlspecialchars($home['hero_title']); ?></h1>

            <p><?php echo htmlspecialchars($home['hero_text']); ?></p>

            <div class="ws-actions">
                <a class="ws-btn primary" href="<?php echo htmlspecialchars($home['hero_primary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_primary_text']); ?>
                </a>

                <a class="ws-btn secondary" href="<?php echo htmlspecialchars($home['hero_secondary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_secondary_text']); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="ws-sunday-strip">
        <div class="ws-sunday-grid">
            <?php foreach (array_slice($homeLinks, 0, 3) as $link): ?>
                <a class="ws-sunday-item" href="<?php echo htmlspecialchars($link['url']); ?>">
                    <small><?php echo htmlspecialchars($link['title']); ?></small>
                    <strong><?php echo htmlspecialchars($link['description']); ?></strong>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="ws-feature">
        <div class="ws-feature-inner">
            <div class="ws-feature-number">01</div>

            <div class="ws-feature-copy">
                <small><?php echo htmlspecialchars($home['welcome_eyebrow']); ?></small>

                <h2><?php echo htmlspecialchars($home['welcome_title']); ?></h2>

                <p><?php echo htmlspecialchars($home['welcome_text']); ?></p>

                <div class="ws-actions">
                    <a class="ws-btn primary" href="<?php echo htmlspecialchars($home['welcome_link_url']); ?>">
                        <?php echo htmlspecialchars($home['welcome_link_text']); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ws-links">
        <div class="ws-links-inner">
            <div class="ws-section-title">
                <div>
                    <small>Connect</small>
                    <h2>Next Steps</h2>
                </div>

                <p>
                    The same admin-managed links are presented here as bold, simple pathways.
                </p>
            </div>

            <div class="ws-link-stack">
                <?php foreach ($homeLinks as $link): ?>
                    <a class="ws-link-row" href="<?php echo htmlspecialchars($link['url']); ?>">
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

    <section class="ws-final">
        <div class="ws-final-inner">
            <div class="ws-kicker">
                <?php echo htmlspecialchars($home['hero_eyebrow']); ?>
            </div>

            <h2><?php echo htmlspecialchars($home['hero_primary_text']); ?></h2>

            <p><?php echo htmlspecialchars($home['hero_text']); ?></p>

            <div class="ws-actions">
                <a class="ws-btn primary" href="<?php echo htmlspecialchars($home['hero_primary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_primary_text']); ?>
                </a>

                <a class="ws-btn secondary" href="<?php echo htmlspecialchars($home['hero_secondary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_secondary_text']); ?>
                </a>
            </div>
        </div>
    </section>

</div>