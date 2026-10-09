<?php
require_once __DIR__ . '/require-login.php';
require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (($_POST['action'] ?? '') === 'update_settings') {
        $stmt = db()->prepare("
            UPDATE homepage_settings SET
                hero_eyebrow = ?, hero_title = ?, hero_text = ?,
                hero_primary_text = ?, hero_primary_url = ?,
                hero_secondary_text = ?, hero_secondary_url = ?,
                hero_image_url = ?,
                welcome_eyebrow = ?, welcome_title = ?, welcome_text = ?,
                welcome_link_text = ?, welcome_link_url = ?, welcome_image_url = ?
            WHERE id = 1
        ");

        $stmt->bind_param(
            "ssssssssssssss",
            $_POST['hero_eyebrow'], $_POST['hero_title'], $_POST['hero_text'],
            $_POST['hero_primary_text'], $_POST['hero_primary_url'],
            $_POST['hero_secondary_text'], $_POST['hero_secondary_url'],
            $_POST['hero_image_url'],
            $_POST['welcome_eyebrow'], $_POST['welcome_title'], $_POST['welcome_text'],
            $_POST['welcome_link_text'], $_POST['welcome_link_url'], $_POST['welcome_image_url']
        );

        $stmt->execute();
        $message = 'Homepage content updated.';
    }

    if (($_POST['action'] ?? '') === 'add_link') {
        $sortOrder = (int) $_POST['sort_order'];

        $stmt = db()->prepare("
            INSERT INTO homepage_links (title, description, url, image_url, sort_order, is_active)
            VALUES (?, ?, ?, ?, ?, 1)
        ");

        $stmt->bind_param(
            "ssssi",
            $_POST['title'],
            $_POST['description'],
            $_POST['url'],
            $_POST['image_url'],
            $sortOrder
        );

        $stmt->execute();
        $message = 'Homepage link added.';
    }

    if (($_POST['action'] ?? '') === 'delete_link') {
        $id = (int) $_POST['id'];

        $stmt = db()->prepare("DELETE FROM homepage_links WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $message = 'Homepage link deleted.';
    }
}

$settings = db()->query("SELECT * FROM homepage_settings WHERE id = 1")->fetch_assoc();

$links = db()->query("
    SELECT *
    FROM homepage_links
    ORDER BY sort_order ASC, title ASC
")->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manage Homepage | Colosse Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/admin.css?v=3">
</head>
<body>

<div class="admin-layout">
    <aside class="sidebar">
        <div class="brand-block">
            <span class="brand-mark">C</span>
            <div>
                <strong>Colosse</strong>
                <small>Church Admin</small>
            </div>
        </div>

        <nav class="sidebar-nav">
            <a href="dashboard.php">Dashboard</a>
            <a class="active" href="homepage.php">Homepage</a>
            <a href="#">Pages</a>
            <a href="#">Ministries</a>
            <a href="#">Sermons & Bulletins</a>
            <a href="#">Forms</a>
            <a href="#">Navigation</a>
            <a href="#">Users</a>
        </nav>

        <a class="logout-link" href="logout.php">Logout</a>
    </aside>

    <main class="main">
        <header class="topbar">
            <div>
                <p class="eyebrow">Visual Content Editor</p>
                <h1>Homepage</h1>
            </div>

            <a class="primary-button" href="../index.php" target="_blank">
                View Live Page
            </a>
        </header>

        <?php if ($message): ?>
            <div class="admin-success">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form method="post">
            <input type="hidden" name="action" value="update_settings">

            <section class="visual-editor-section">
                <div class="editor-preview hero-preview" style="background-image: linear-gradient(90deg, rgba(8,25,35,.88), rgba(8,25,35,.35)), url('<?php echo htmlspecialchars($settings['hero_image_url']); ?>');">
                    <div>
                        <span><?php echo htmlspecialchars($settings['hero_eyebrow']); ?></span>
                        <h2><?php echo htmlspecialchars($settings['hero_title']); ?></h2>
                        <p><?php echo htmlspecialchars($settings['hero_text']); ?></p>
                        <div class="preview-buttons">
                            <b><?php echo htmlspecialchars($settings['hero_primary_text']); ?></b>
                            <em><?php echo htmlspecialchars($settings['hero_secondary_text']); ?></em>
                        </div>
                    </div>
                </div>

                <div class="editor-fields">
                    <h2>Hero Section</h2>
                    <p>The large top section visitors see first.</p>

                    <label>Small Heading</label>
                    <input name="hero_eyebrow" value="<?php echo htmlspecialchars($settings['hero_eyebrow']); ?>">

                    <label>Main Headline</label>
                    <textarea name="hero_title"><?php echo htmlspecialchars($settings['hero_title']); ?></textarea>

                    <label>Intro Text</label>
                    <textarea name="hero_text"><?php echo htmlspecialchars($settings['hero_text']); ?></textarea>

                    <div class="two-col-fields">
                        <div>
                            <label>Primary Button Text</label>
                            <input name="hero_primary_text" value="<?php echo htmlspecialchars($settings['hero_primary_text']); ?>">
                        </div>
                        <div>
                            <label>Primary Button Link</label>
                            <input name="hero_primary_url" value="<?php echo htmlspecialchars($settings['hero_primary_url']); ?>">
                        </div>
                    </div>

                    <div class="two-col-fields">
                        <div>
                            <label>Secondary Button Text</label>
                            <input name="hero_secondary_text" value="<?php echo htmlspecialchars($settings['hero_secondary_text']); ?>">
                        </div>
                        <div>
                            <label>Secondary Button Link</label>
                            <input name="hero_secondary_url" value="<?php echo htmlspecialchars($settings['hero_secondary_url']); ?>">
                        </div>
                    </div>

                    <label>Background Image URL</label>
                    <input name="hero_image_url" value="<?php echo htmlspecialchars($settings['hero_image_url']); ?>">
                </div>
            </section>

            <section class="visual-editor-section">
                <div class="editor-preview welcome-preview">
                    <div>
                        <span><?php echo htmlspecialchars($settings['welcome_eyebrow']); ?></span>
                        <h2><?php echo htmlspecialchars($settings['welcome_title']); ?></h2>
                        <p><?php echo htmlspecialchars($settings['welcome_text']); ?></p>
                        <b><?php echo htmlspecialchars($settings['welcome_link_text']); ?></b>
                    </div>

                    <img src="<?php echo htmlspecialchars($settings['welcome_image_url']); ?>" alt="">
                </div>

                <div class="editor-fields">
                    <h2>Welcome Section</h2>
                    <p>The second content block beneath the quick links.</p>

                    <label>Small Heading</label>
                    <input name="welcome_eyebrow" value="<?php echo htmlspecialchars($settings['welcome_eyebrow']); ?>">

                    <label>Headline</label>
                    <textarea name="welcome_title"><?php echo htmlspecialchars($settings['welcome_title']); ?></textarea>

                    <label>Body Text</label>
                    <textarea name="welcome_text"><?php echo htmlspecialchars($settings['welcome_text']); ?></textarea>

                    <div class="two-col-fields">
                        <div>
                            <label>Link Text</label>
                            <input name="welcome_link_text" value="<?php echo htmlspecialchars($settings['welcome_link_text']); ?>">
                        </div>
                        <div>
                            <label>Link URL</label>
                            <input name="welcome_link_url" value="<?php echo htmlspecialchars($settings['welcome_link_url']); ?>">
                        </div>
                    </div>

                    <label>Image URL</label>
                    <input name="welcome_image_url" value="<?php echo htmlspecialchars($settings['welcome_image_url']); ?>">
                </div>
            </section>

            <button class="floating-save-button" type="submit">
                Save Homepage Content
            </button>
        </form>

        <section class="visual-editor-section">
            <div class="editor-preview connected-preview">
                <span>Get Connected</span>
                <h2>Take your next step</h2>

                <div class="mini-card-grid">
                    <?php foreach ($links as $link): ?>
                        <div class="mini-card">
                            <img src="<?php echo htmlspecialchars($link['image_url']); ?>" alt="">
                            <h3><?php echo htmlspecialchars($link['title']); ?></h3>
                            <p><?php echo htmlspecialchars($link['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="editor-fields">
                <h2>Get Connected Cards</h2>
                <p>These cards appear near the bottom of the homepage.</p>

                <?php foreach ($links as $link): ?>
                    <div class="link-management-row">
                        <div>
                            <strong><?php echo htmlspecialchars($link['title']); ?></strong>
                            <small><?php echo htmlspecialchars($link['url']); ?></small>
                        </div>

                        <form method="post" onsubmit="return confirm('Delete this link?');">
                            <input type="hidden" name="action" value="delete_link">
                            <input type="hidden" name="id" value="<?php echo (int) $link['id']; ?>">
                            <button class="danger-button" type="submit">Delete</button>
                        </form>
                    </div>
                <?php endforeach; ?>

                <hr>

                <h3>Add New Card</h3>

                <form method="post" class="admin-form">
                    <input type="hidden" name="action" value="add_link">

                    <label>Card Title</label>
                    <input name="title" required>

                    <label>Description</label>
                    <textarea name="description" required></textarea>

                    <label>Link URL</label>
                    <input name="url" required>

                    <label>Image URL</label>
                    <input name="image_url" required>

                    <label>Sort Order</label>
                    <input name="sort_order" type="number" value="10">

                    <button type="submit">Add Card</button>
                </form>
            </div>
        </section>
    </main>
</div>

</body>
</html>