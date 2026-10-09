<?php
require_once __DIR__ . '/app/config.php';
require_once __DIR__ . '/app/db.php';
require_once __DIR__ . '/app/theme.php';

$theme = active_theme();
$themeInfo = theme_info($theme);

$home = db()->query("SELECT * FROM homepage_settings WHERE id = 1")->fetch_assoc();

$homeLinks = db()->query("
    SELECT *
    FROM homepage_links
    WHERE is_active = 1
    ORDER BY sort_order ASC, title ASC
")->fetch_all(MYSQLI_ASSOC);

$themeHeader = __DIR__ . '/themes/' . $theme . '/header.php';
$themeHome   = __DIR__ . '/themes/' . $theme . '/home.php';
$themeFooter = __DIR__ . '/themes/' . $theme . '/footer.php';

if (file_exists($themeHeader)) {
    require $themeHeader;
} else {
    require __DIR__ . '/app/templates/header.php';
}

if (file_exists($themeHome)) {
    require $themeHome;
} else {
    echo '<section class="container"><h1>Theme not found.</h1></section>';
}

require __DIR__ . '/app/templates/theme-selector.php';

if (file_exists($themeFooter)) {
    require $themeFooter;
} else {
    require __DIR__ . '/app/templates/footer.php';
}