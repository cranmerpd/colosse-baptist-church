<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colosse Baptist Church</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/site.css?v=20">

    <style>
        .heritage-theme-header .theme-menu-toggle,
        .heritage-theme-header .theme-mobile-nav {
            display: none;
        }

        @media (max-width: 950px) {

            .heritage-theme-header .heritage-header-inner {
                grid-template-columns: 1fr auto !important;
            }

            .heritage-theme-header .theme-divider,
            .heritage-theme-header .theme-desktop-nav {
                display: none !important;
            }

            .heritage-theme-header .theme-menu-toggle {
                display: inline-flex !important;
                align-items: center;
                justify-content: center;
                width: 52px;
                height: 52px;
                border: 2px solid #3b2b1f;
                background: #fbf5e8;
                color: #3b2b1f;
                font-size: 26px;
                font-weight: 900;
                cursor: pointer;
            }

            .heritage-theme-header .theme-mobile-nav.is-open {
                display: grid !important;
            }

            .heritage-theme-header .theme-mobile-nav {
                grid-column: 1 / -1;
                margin-top: 20px;
                border-top: 2px double #3b2b1f;
                padding-top: 20px;
                gap: 8px;
            }

            .heritage-theme-header .theme-mobile-nav a {
                display: block;
                padding: 14px 0;
                color: #3b2b1f;
                text-decoration: none;
                border-bottom: 1px solid rgba(59,43,31,.18);
                font-family: Arial, sans-serif;
                font-size: 12px;
                font-weight: 900;
                text-transform: uppercase;
                letter-spacing: .14em;
            }

            .heritage-theme-header .theme-mobile-nav a:last-child {
                color: #7b2f2f;
            }

            .heritage-theme-header .heritage-title {
                font-size: 20px !important;
            }
        }
    </style>
</head>
<body>

<header class="heritage-theme-header" style="
    background:#fbf5e8;
    border-top:6px solid #3b2b1f;
    border-bottom:3px double #3b2b1f;
    padding:20px 0;
    font-family:Georgia,'Times New Roman',serif;
">
    <div class="container heritage-header-inner" style="
        display:grid;
        grid-template-columns:auto 1fr auto;
        gap:24px;
        align-items:center;
    ">
        <a href="index.php?theme=heritage" style="
            display:flex;
            align-items:center;
            gap:14px;
            text-decoration:none;
            color:#3b2b1f;
        ">
            <img src="https://www.colossebaptistchurch.com/uploads/2/4/5/7/24574640/logo-2.jpeg"
                 alt="Colosse Baptist Church"
                 style="
                    width:58px;
                    height:58px;
                    object-fit:cover;
                    border-radius:50%;
                    border:2px solid #3b2b1f;
                    padding:3px;
                    background:white;
                 ">

            <div>
                <strong class="heritage-title" style="
                    display:block;
                    font-size:22px;
                    line-height:1;
                ">
                    Colosse Baptist Church
                </strong>

                <small style="
                    display:block;
                    margin-top:5px;
                    color:#7b2f2f;
                    font-family:Arial,sans-serif;
                    font-size:11px;
                    font-weight:900;
                    text-transform:uppercase;
                    letter-spacing:.14em;
                ">
                    West Point, Virginia
                </small>
            </div>
        </a>

        <div class="theme-divider" style="
            height:1px;
            background:#3b2b1f;
            opacity:.45;
        "></div>

        <nav class="theme-desktop-nav" style="
            display:flex;
            align-items:center;
            gap:16px;
            font-family:Arial,sans-serif;
            font-size:11px;
            font-weight:900;
            text-transform:uppercase;
            letter-spacing:.12em;
        ">
            <a href="our-church.php" style="color:#3b2b1f;text-decoration:none;">Our Church</a>
            <a href="sermons.php" style="color:#3b2b1f;text-decoration:none;">Sermons</a>
            <a href="ministries.php" style="color:#3b2b1f;text-decoration:none;">Ministries</a>
            <a href="forms.php" style="color:#3b2b1f;text-decoration:none;">Forms</a>

            <a href="giving.php" style="
                color:#fbf5e8;
                background:#3b2b1f;
                text-decoration:none;
                padding:10px 14px;
                border:1px solid #3b2b1f;
            ">
                Giving
            </a>
        </nav>

        <button class="theme-menu-toggle" type="button" aria-label="Open menu">
            ☰
        </button>

        <nav class="theme-mobile-nav">
            <a href="our-church.php">Our Church</a>
            <a href="sermons.php">Sermons</a>
            <a href="ministries.php">Ministries</a>
            <a href="forms.php">Forms</a>
            <a href="giving.php">Giving</a>
        </nav>
    </div>
</header>

<main>

<script>
document.addEventListener('click', function (event) {
    const toggle = event.target.closest('.theme-menu-toggle');

    if (!toggle) return;

    const header = toggle.closest('header');
    const menu = header.querySelector('.theme-mobile-nav');

    if (!menu) return;

    menu.classList.toggle('is-open');
    toggle.textContent = menu.classList.contains('is-open') ? '×' : '☰';
});
</script>