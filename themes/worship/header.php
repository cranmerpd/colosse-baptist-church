<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colosse Baptist Church</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/site.css?v=20">

    <style>
        .worship-theme-header .theme-menu-toggle,
        .worship-theme-header .theme-mobile-nav {
            display: none;
        }

        @media (max-width: 900px) {
            .worship-theme-header .worship-header-inner {
                grid-template-columns: 1fr auto !important;
            }

            .worship-theme-header .theme-desktop-nav {
                display: none !important;
            }

            .worship-theme-header .theme-menu-toggle {
                display: inline-flex !important;
                align-items: center;
                justify-content: center;
                width: 48px;
                height: 48px;
                border: 1px solid rgba(255,255,255,.18);
                background: rgba(255,255,255,.08);
                color: white;
                font-size: 25px;
                font-weight: 900;
                cursor: pointer;
            }

            .worship-theme-header .theme-mobile-nav.is-open {
                display: grid !important;
            }

            .worship-theme-header .theme-mobile-nav {
                grid-column: 1 / -1;
                gap: 10px;
                padding-top: 18px;
            }

            .worship-theme-header .theme-mobile-nav a {
                background: rgba(255,255,255,.08);
                color: white;
                border: 1px solid rgba(255,255,255,.14);
                text-decoration: none;
                padding: 14px 16px;
                font-family: Inter, system-ui, sans-serif;
                font-size: 13px;
                font-weight: 950;
                text-transform: uppercase;
                letter-spacing: .08em;
            }

            .worship-theme-header .theme-mobile-nav a:last-child {
                background: white;
                color: #050607;
            }
        }
    </style>
</head>
<body>

<header class="worship-theme-header" style="
    background:#050607;
    border-bottom:1px solid rgba(255,255,255,.14);
    padding:18px 0;
    font-family:Inter,system-ui,sans-serif;
">
    <div class="container worship-header-inner" style="
        display:grid;
        grid-template-columns:auto 1fr;
        align-items:center;
        gap:24px;
    ">
        <a href="index.php?theme=worship" style="
            display:flex;
            align-items:center;
            gap:12px;
            text-decoration:none;
            color:white;
            font-weight:950;
            text-transform:uppercase;
            letter-spacing:.04em;
        ">
            <img src="https://www.colossebaptistchurch.com/uploads/2/4/5/7/24574640/logo-2.jpeg" alt="Colosse Baptist Church" style="
                width:48px;
                height:48px;
                object-fit:cover;
            ">
            <span>Colosse Baptist Church</span>
        </a>

        <nav class="theme-desktop-nav" style="
            display:flex;
            align-items:center;
            justify-content:flex-end;
            gap:18px;
            font-size:12px;
            font-weight:950;
            text-transform:uppercase;
            letter-spacing:.1em;
        ">
            <a href="our-church.php" style="color:rgba(255,255,255,.78);text-decoration:none;">Our Church</a>
            <a href="sermons.php" style="color:rgba(255,255,255,.78);text-decoration:none;">Sermons</a>
            <a href="ministries.php" style="color:rgba(255,255,255,.78);text-decoration:none;">Ministries</a>
            <a href="forms.php" style="color:rgba(255,255,255,.78);text-decoration:none;">Forms</a>
            <a href="giving.php" style="
                background:white;
                color:#050607;
                text-decoration:none;
                padding:11px 16px;
            ">Give</a>
        </nav>

        <button class="theme-menu-toggle" type="button" aria-label="Open menu">☰</button>

        <nav class="theme-mobile-nav">
            <a href="our-church.php">Our Church</a>
            <a href="sermons.php">Sermons</a>
            <a href="ministries.php">Ministries</a>
            <a href="forms.php">Forms</a>
            <a href="giving.php">Give</a>
        </nav>
    </div>
</header>

<main>

<script>
document.addEventListener('click', function (event) {
    const toggle = event.target.closest('.theme-menu-toggle');

    if (!toggle) {
        return;
    }

    const header = toggle.closest('header');
    const menu = header.querySelector('.theme-mobile-nav');

    if (!menu) {
        return;
    }

    menu.classList.toggle('is-open');
    toggle.textContent = menu.classList.contains('is-open') ? '×' : '☰';
});
</script>