<?php
$pageTitle = $pageTitle ?? 'Colosse Baptist Church';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="assets/css/site.css?v=2">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?php echo BASE_URL; ?>/">
            <img src="https://www.colossebaptistchurch.com/uploads/2/4/5/7/24574640/logo-2.jpeg" alt="Colosse Baptist Church">
            <span>Colosse Baptist Church</span>
        </a>

        <nav class="main-nav">
            <a href="<?php echo BASE_URL; ?>/">Home</a>
            <a href="<?php echo BASE_URL; ?>/our-church.php">Our Church</a>
            <a href="<?php echo BASE_URL; ?>/sermons.php">Sermons</a>
            <a href="<?php echo BASE_URL; ?>/ministries.php">Ministries</a>
            <a href="<?php echo BASE_URL; ?>/forms.php">Forms</a>
            <a href="<?php echo BASE_URL; ?>/giving.php" class="nav-give">Give</a>
        </nav>
    </div>
</header>

<main>