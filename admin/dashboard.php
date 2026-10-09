<?php
require_once __DIR__ . '/require-login.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | Colosse Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/admin.css?v=1">
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
            <a class="active" href="dashboard.php">Dashboard</a>
            <a href="#">Pages</a>
            <a href="#">Ministries</a>
            <a href="#">Sermons & Bulletins</a>
            <a href="#">Forms</a>
            <a href="#">Giving</a>
            <a href="#">Users</a>
        </nav>

        <a class="logout-link" href="logout.php">Logout</a>
    </aside>

    <main class="main">
        <header class="topbar">
            <div>
                <p class="eyebrow">Website Management</p>
                <h1>Dashboard</h1>
            </div>
            <div class="user-pill">
                <?php echo htmlspecialchars($_SESSION['admin_name']); ?>
            </div>
        </header>

        <section class="hero-card">
            <div>
                <h2>Welcome back.</h2>
                <p>Manage content, ministries, sermons, bulletins, forms, and protected church resources from one place.</p>
            </div>
            <a class="primary-button" href="../index.php" target="_blank">View Website</a>
        </section>

        <section class="card-grid">
            <div class="module-card">
                <span>01</span>
                <h3>Pages</h3>
                <p>Edit public website pages and section content.</p>
            </div>

            <div class="module-card">
                <span>02</span>
                <h3>Ministries</h3>
                <p>Manage ministry pages, images, and contact details.</p>
            </div>

            <div class="module-card">
                <span>03</span>
                <h3>Sermons & Bulletins</h3>
                <p>Upload bulletins and manage worship service media links.</p>
            </div>

            <div class="module-card">
                <span>04</span>
                <h3>Forms</h3>
                <p>Review prayer requests, announcements, and submissions.</p>
            </div>
        </section>
    </main>
</div>

</body>
</html>