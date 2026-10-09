<style>
    .heritage-bulletin {
        --ink: #191919;
        --brown: #3b2b1f;
        --red: #7b2f2f;
        --gold: #a9803a;
        --paper: #fbf5e8;
        --cream: #efe3cf;
        --muted: #6e6255;
        background: var(--cream);
        color: var(--ink);
        font-family: Georgia, "Times New Roman", serif;
        padding: 40px 0 90px;
    }

    .heritage-bulletin a {
        color: inherit;
        text-decoration: none;
    }

    .hb-sheet {
        width: min(1040px, calc(100% - 36px));
        margin: 0 auto;
        background: var(--paper);
        border: 1px solid var(--brown);
        box-shadow: 0 30px 80px rgba(59, 43, 31, .22);
        padding: clamp(28px, 5vw, 64px);
    }

    .hb-topline {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 18px;
        align-items: center;
        margin-bottom: 26px;
        color: var(--red);
        font-size: 12px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: .18em;
    }

    .hb-topline::before,
    .hb-topline::after {
        content: "";
        height: 1px;
        background: var(--brown);
        opacity: .6;
    }

    .hb-title {
        text-align: center;
        padding-bottom: 34px;
        border-bottom: 4px double var(--brown);
    }

    .hb-logo {
        width: 92px;
        height: 92px;
        object-fit: cover;
        border-radius: 999px;
        margin: 0 auto 18px;
        border: 2px solid var(--brown);
        padding: 4px;
        background: white;
    }

    .hb-title h1 {
        margin: 0;
        color: var(--brown);
        font-size: clamp(44px, 7vw, 96px);
        line-height: .9;
        letter-spacing: -.055em;
        font-weight: normal;
    }

    .hb-title p {
        max-width: 780px;
        margin: 22px auto 0;
        color: var(--muted);
        font-size: 20px;
        line-height: 1.75;
    }

    .hb-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px;
    }

    .hb-button {
        border: 1px solid var(--brown);
        padding: 12px 18px;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: .1em;
    }

    .hb-button.primary {
        background: var(--brown);
        color: var(--paper);
    }

    .hb-button.secondary {
        background: transparent;
        color: var(--brown);
    }

    .hb-feature {
        display: grid;
        grid-template-columns: 240px 1fr;
        gap: 34px;
        padding: 42px 0;
        border-bottom: 1px solid var(--brown);
    }

    .hb-feature img {
        width: 240px;
        height: 240px;
        object-fit: cover;
        border: 1px solid var(--brown);
        padding: 8px;
        background: white;
    }

    .hb-section-label {
        display: inline-block;
        color: var(--red);
        font-family: Arial, sans-serif;
        font-size: 11px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: .16em;
        margin-bottom: 12px;
    }

    .hb-feature h2 {
        margin: 0;
        color: var(--brown);
        font-size: clamp(34px, 5vw, 58px);
        line-height: .95;
        font-weight: normal;
    }

    .hb-feature p {
        color: var(--muted);
        font-size: 18px;
        line-height: 1.75;
    }

    .hb-directory {
        padding: 42px 0;
        border-bottom: 4px double var(--brown);
    }

    .hb-directory-title {
        text-align: center;
        margin-bottom: 28px;
    }

    .hb-directory-title h2 {
        margin: 0;
        color: var(--brown);
        font-size: clamp(34px, 5vw, 60px);
        line-height: 1;
        font-weight: normal;
    }

    .hb-directory-title span {
        display: block;
        margin-bottom: 10px;
        color: var(--red);
        font-family: Arial, sans-serif;
        font-size: 11px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: .16em;
    }

    .hb-link-list {
        columns: 2;
        column-gap: 48px;
    }

    .hb-link-item {
        display: inline-block;
        width: 100%;
        break-inside: avoid;
        padding: 0 0 22px;
        margin-bottom: 22px;
        border-bottom: 1px solid rgba(59,43,31,.28);
    }

    .hb-link-item h3 {
        margin: 0;
        color: var(--brown);
        font-size: 28px;
        line-height: 1.05;
        font-weight: normal;
    }

    .hb-link-item p {
        margin: 10px 0 12px;
        color: var(--muted);
        line-height: 1.65;
        font-size: 16px;
    }

    .hb-link-item span {
        color: var(--red);
        font-family: Arial, sans-serif;
        font-size: 11px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: .12em;
    }

    .hb-visit {
        padding-top: 42px;
        text-align: center;
    }

    .hb-visit h2 {
        margin: 0;
        color: var(--brown);
        font-size: clamp(34px, 5vw, 60px);
        font-weight: normal;
    }

    .hb-visit p {
        max-width: 720px;
        margin: 16px auto 0;
        color: var(--muted);
        font-size: 18px;
        line-height: 1.75;
    }

    .hb-contact-boxes {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        margin-top: 28px;
    }

    .hb-contact-box {
        border: 1px solid var(--brown);
        padding: 20px;
        background: rgba(255,255,255,.38);
    }

    .hb-contact-box strong {
        display: block;
        color: var(--red);
        font-family: Arial, sans-serif;
        font-size: 11px;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: .16em;
        margin-bottom: 8px;
    }

    .hb-contact-box span {
        color: var(--brown);
        line-height: 1.55;
    }

    @media (max-width: 760px) {
        .hb-topline {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .hb-topline::before,
        .hb-topline::after {
            display: none;
        }

        .hb-feature {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .hb-feature img {
            margin: 0 auto;
        }

        .hb-link-list {
            columns: 1;
        }

        .hb-contact-boxes {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="heritage-bulletin">
    <article class="hb-sheet">

        <div class="hb-topline">
            <span><?php echo htmlspecialchars($home['hero_eyebrow']); ?></span>
        </div>

        <header class="hb-title">
            <img
                class="hb-logo"
                src="https://www.colossebaptistchurch.com/uploads/2/4/5/7/24574640/logo-2.jpeg"
                alt="Colosse Baptist Church"
            >

            <h1><?php echo htmlspecialchars($home['hero_title']); ?></h1>

            <p><?php echo htmlspecialchars($home['hero_text']); ?></p>

            <div class="hb-buttons">
                <a class="hb-button primary" href="<?php echo htmlspecialchars($home['hero_primary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_primary_text']); ?>
                </a>

                <a class="hb-button secondary" href="<?php echo htmlspecialchars($home['hero_secondary_url']); ?>">
                    <?php echo htmlspecialchars($home['hero_secondary_text']); ?>
                </a>
            </div>
        </header>

        <section class="hb-feature">
            <img src="<?php echo htmlspecialchars($home['welcome_image_url']); ?>" alt="">

            <div>
                <span class="hb-section-label">
                    <?php echo htmlspecialchars($home['welcome_eyebrow']); ?>
                </span>

                <h2><?php echo htmlspecialchars($home['welcome_title']); ?></h2>

                <p><?php echo htmlspecialchars($home['welcome_text']); ?></p>

                <a class="hb-button secondary" href="<?php echo htmlspecialchars($home['welcome_link_url']); ?>">
                    <?php echo htmlspecialchars($home['welcome_link_text']); ?>
                </a>
            </div>
        </section>

        <section class="hb-directory">
            <div class="hb-directory-title">
                <span>Church Directory</span>
                <h2>Helpful Links</h2>
            </div>

            <div class="hb-link-list">
                <?php foreach ($homeLinks as $link): ?>
                    <a class="hb-link-item" href="<?php echo htmlspecialchars($link['url']); ?>">
                        <h3><?php echo htmlspecialchars($link['title']); ?></h3>
                        <p><?php echo htmlspecialchars($link['description']); ?></p>
                        <span>Open Resource</span>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="hb-visit">
            <span class="hb-section-label">Visit Colosse Baptist Church</span>

            <h2>All are welcome.</h2>

            <p>
                We would love to worship with you and welcome you into the life of Colosse Baptist Church.
            </p>

            <div class="hb-contact-boxes">
                <div class="hb-contact-box">
                    <strong>Address</strong>
                    <span>23891 King William Road<br>West Point, VA 23181</span>
                </div>

                <div class="hb-contact-box">
                    <strong>Church Office</strong>
                    <span>804-769-2729</span>
                </div>
            </div>
        </section>

    </article>
</div>