<style>
    .community-edition {
        --ink: #18231f;
        --forest: #1f4638;
        --cream: #f8f1e4;
        --paper: #fffdf7;
        --line: #1f4638;
        --muted: #5f6c65;
        --accent: #b45f3d;
        background: var(--cream);
        color: var(--ink);
        font-family: Georgia, "Times New Roman", serif;
    }

    .community-edition a {
        color: inherit;
        text-decoration: none;
    }

    .ce-masthead {
        border-top: 8px solid var(--forest);
        border-bottom: 2px solid var(--forest);
        padding: 24px 0;
        background: var(--paper);
    }

    .ce-masthead-inner {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 24px;
        align-items: end;
    }

    .ce-masthead small {
        color: var(--accent);
        font-family: system-ui, sans-serif;
        font-size: 12px;
        font-weight: 900;
        letter-spacing: .18em;
        text-transform: uppercase;
    }

    .ce-masthead h1 {
        margin: 8px 0 0;
        color: var(--forest);
        font-size: clamp(52px, 8vw, 118px);
        line-height: .82;
        letter-spacing: -.08em;
    }

    .ce-masthead-actions {
        display: grid;
        gap: 10px;
        min-width: 220px;
    }

    .ce-btn {
        border: 2px solid var(--forest);
        padding: 13px 16px;
        font-family: system-ui, sans-serif;
        font-size: 13px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .09em;
        text-align: center;
    }

    .ce-btn.primary {
        background: var(--forest);
        color: white;
    }

    .ce-btn.secondary {
        background: transparent;
        color: var(--forest);
    }

    .ce-lead {
        border-bottom: 2px solid var(--forest);
        background: var(--cream);
    }

    .ce-lead-grid {
        display: grid;
        grid-template-columns: 42% 58%;
        min-height: 560px;
    }

    .ce-lead-copy {
        padding: 46px 36px 46px 0;
        border-right: 2px solid var(--forest);
    }

    .ce-lead-copy p {
        margin: 0;
        color: var(--muted);
        font-size: clamp(22px, 3vw, 34px);
        line-height: 1.35;
    }

    .ce-lead-copy .ce-drop {
        float: left;
        color: var(--forest);
        font-size: 92px;
        line-height: .75;
        padding-right: 10px;
        font-weight: 900;
    }

    .ce-lead-image {
        position: relative;
        min-height: 560px;
    }

    .ce-lead-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        filter: saturate(.9) contrast(1.04);
    }

    .ce-image-caption {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(31,70,56,.92);
        color: white;
        padding: 18px 24px;
        font-family: system-ui, sans-serif;
        font-weight: 800;
    }

    .ce-feature-strip {
        border-bottom: 2px solid var(--forest);
        background: var(--paper);
    }

    .ce-feature-strip-grid {
        display: grid;
        grid-template-columns: 240px 1fr;
    }

    .ce-feature-label {
        background: var(--forest);
        color: white;
        padding: 28px;
        font-family: system-ui, sans-serif;
        font-size: 13px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .15em;
    }

    .ce-feature-content {
        padding: 28px;
    }

    .ce-feature-content h2 {
        margin: 0;
        color: var(--forest);
        font-size: clamp(34px, 4vw, 62px);
        line-height: .95;
        letter-spacing: -.055em;
    }

    .ce-feature-content p {
        margin: 16px 0 0;
        color: var(--muted);
        font-size: 19px;
        line-height: 1.55;
    }

    .ce-index {
        padding: 42px 0 72px;
    }

    .ce-index-heading {
        display: grid;
        grid-template-columns: 280px 1fr;
        border-top: 2px solid var(--forest);
        border-bottom: 2px solid var(--forest);
        margin-bottom: 28px;
    }

    .ce-index-heading div {
        padding: 18px 0;
    }

    .ce-index-heading div:first-child {
        border-right: 2px solid var(--forest);
        color: var(--accent);
        font-family: system-ui, sans-serif;
        font-size: 13px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .16em;
    }

    .ce-index-heading h2 {
        margin: 0;
        padding-left: 24px;
        color: var(--forest);
        font-size: clamp(34px, 4vw, 58px);
        line-height: 1;
        letter-spacing: -.055em;
    }

    .ce-directory {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        border-top: 2px solid var(--forest);
        border-left: 2px solid var(--forest);
    }

    .ce-directory-item {
        display: grid;
        grid-template-columns: 140px 1fr;
        min-height: 210px;
        border-right: 2px solid var(--forest);
        border-bottom: 2px solid var(--forest);
        background: var(--paper);
    }

    .ce-directory-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-right: 2px solid var(--forest);
    }

    .ce-directory-copy {
        padding: 24px;
    }

    .ce-directory-copy small {
        color: var(--accent);
        font-family: system-ui, sans-serif;
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .14em;
    }

    .ce-directory-copy h3 {
        margin: 10px 0;
        color: var(--forest);
        font-size: 32px;
        line-height: .95;
        letter-spacing: -.05em;
    }

    .ce-directory-copy p {
        margin: 0;
        color: var(--muted);
        font-size: 16px;
        line-height: 1.55;
    }

    .ce-directory-copy span {
        display: inline-block;
        margin-top: 18px;
        color: var(--forest);
        font-family: system-ui, sans-serif;
        font-size: 12px;
        font-weight: 950;
        text-transform: uppercase;
        letter-spacing: .12em;
    }

    @media (max-width: 950px) {
        .ce-masthead-inner,
        .ce-lead-grid,
        .ce-feature-strip-grid,
        .ce-index-heading,
        .ce-directory {
            grid-template-columns: 1fr;
        }

        .ce-lead-copy {
            border-right: 0;
            padding-right: 0;
        }

        .ce-feature-label,
        .ce-index-heading div:first-child {
            border-right: 0;
        }

        .ce-index-heading h2 {
            padding-left: 0;
        }
    }

    @media (max-width: 650px) {
        .ce-directory-item {
            grid-template-columns: 1fr;
        }

        .ce-directory-item img {
            height: 220px;
            border-right: 0;
            border-bottom: 2px solid var(--forest);
        }

        .ce-lead-image {
            min-height: 320px;
        }
    }
</style>

<div class="community-edition">

    <section class="ce-masthead">
        <div class="container ce-masthead-inner">
            <div>
                <small><?php echo htmlspecialchars($home['hero_eyebrow']); ?></small>
                <h1><?php echo htmlspecialchars($home['hero_title']); ?></h1>
            </div>

            <div class="ce-masthead-actions">
                <a class="ce-btn primary" href="<?php echo htmlspecialchars($home['hero_primary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_primary_text']); ?>
                </a>

                <a class="ce-btn secondary" href="<?php echo htmlspecialchars($home['hero_secondary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_secondary_text']); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="ce-lead">
        <div class="container ce-lead-grid">
            <div class="ce-lead-copy">
                <p>
                    <span class="ce-drop"><?php echo htmlspecialchars(substr($home['hero_text'], 0, 1)); ?></span>
                    <?php echo htmlspecialchars(substr($home['hero_text'], 1)); ?>
                </p>
            </div>

            <div class="ce-lead-image">
                <img src="<?php echo htmlspecialchars($home['hero_image_url']); ?>" alt="">
                <div class="ce-image-caption">
                    <?php echo htmlspecialchars($home['welcome_eyebrow']); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="ce-feature-strip">
        <div class="container ce-feature-strip-grid">
            <div class="ce-feature-label">
                Featured
            </div>

            <div class="ce-feature-content">
                <h2><?php echo htmlspecialchars($home['welcome_title']); ?></h2>
                <p><?php echo htmlspecialchars($home['welcome_text']); ?></p>
            </div>
        </div>
    </section>

    <section class="ce-index">
        <div class="container">
            <div class="ce-index-heading">
                <div>Get Connected</div>
                <div>
                    <h2>Helpful links</h2>
                </div>
            </div>

            <div class="ce-directory">
                <?php foreach ($homeLinks as $link): ?>
                    <a class="ce-directory-item" href="<?php echo htmlspecialchars($link['url']); ?>">
                        <img src="<?php echo htmlspecialchars($link['image_url']); ?>" alt="">

                        <div class="ce-directory-copy">
                            <small>Resource</small>
                            <h3><?php echo htmlspecialchars($link['title']); ?></h3>
                            <p><?php echo htmlspecialchars($link['description']); ?></p>
                            <span>Open</span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</div>