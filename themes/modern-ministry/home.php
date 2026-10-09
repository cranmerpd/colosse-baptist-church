<section class="home-hero design-modern" style="background-image: linear-gradient(90deg, rgba(12,31,43,.86), rgba(12,31,43,.35)), url('<?php echo htmlspecialchars($home['hero_image_url']); ?>');">
    <div class="container hero-grid">
        <div class="hero-copy">
            <p class="eyebrow"><?php echo htmlspecialchars($home['hero_eyebrow']); ?></p>
            <h1><?php echo htmlspecialchars($home['hero_title']); ?></h1>
            <p class="hero-lead"><?php echo htmlspecialchars($home['hero_text']); ?></p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="<?php echo htmlspecialchars($home['hero_primary_url']); ?>"><?php echo htmlspecialchars($home['hero_primary_text']); ?></a>
                <a class="btn btn-light" href="<?php echo htmlspecialchars($home['hero_secondary_url']); ?>"><?php echo htmlspecialchars($home['hero_secondary_text']); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="feature-strip">
    <div class="container feature-grid">
        <a class="feature-card" href="sermons.php"><span>Sermons & Bulletins</span><strong>Watch, read, and stay connected</strong></a>
        <a class="feature-card" href="ministries.php"><span>Ministries</span><strong>Find a place to grow and serve</strong></a>
        <a class="feature-card" href="giving.php"><span>Online Giving</span><strong>Support the mission of the church</strong></a>
    </div>
</section>

<section class="split-section">
    <div class="container split-grid">
        <div>
            <p class="eyebrow"><?php echo htmlspecialchars($home['welcome_eyebrow']); ?></p>
            <h2><?php echo htmlspecialchars($home['welcome_title']); ?></h2>
            <p><?php echo htmlspecialchars($home['welcome_text']); ?></p>
            <a class="text-link" href="<?php echo htmlspecialchars($home['welcome_link_url']); ?>"><?php echo htmlspecialchars($home['welcome_link_text']); ?></a>
        </div>
        <div class="image-card">
            <img src="<?php echo htmlspecialchars($home['welcome_image_url']); ?>" alt="">
        </div>
    </div>
</section>

<section class="card-section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Get connected</p>
            <h2>Take your next step</h2>
        </div>

        <div class="modern-card-grid">
            <?php foreach ($homeLinks as $link): ?>
                <a class="modern-card" href="<?php echo htmlspecialchars($link['url']); ?>">
                    <img src="<?php echo htmlspecialchars($link['image_url']); ?>" alt="">
                    <h3><?php echo htmlspecialchars($link['title']); ?></h3>
                    <p><?php echo htmlspecialchars($link['description']); ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>