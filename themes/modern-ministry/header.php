<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colosse Baptist Church</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/site.css?v=20">

    <style>
        .modern-theme-header .theme-menu-toggle,
        .modern-theme-header .theme-mobile-nav {
            display: none;
        }

        @media (max-width: 900px) {
            .modern-theme-header .modern-header-inner {
                grid-template-columns: 1fr auto !important;
            }

            .modern-theme-header .theme-desktop-nav {
                display: none !important;
            }

            .modern-theme-header .theme-menu-toggle {
                display: inline-flex !important;
                align-items: center;
                justify-content: center;
                width: 48px;
                height: 48px;
                border: 0;
                border-radius: 16px;
                background: #0c1f2b;
                color: white;
                font-size: 25px;
                font-weight: 900;
                cursor: pointer;
            }

            .modern-theme-header .theme-mobile-nav.is-open {
                display: grid !important;
            }

            .modern-theme-header .theme-mobile-nav {
                grid-column: 1 / -1;
                gap: 10px;
                padding-top: 18px;
            }

            .modern-theme-header .theme-mobile-nav a {
                background: #ffffff;
                color: #0c1f2b;
                border: 1px solid rgba(12,31,43,.1);
                text-decoration: none;
                padding: 14px 16px;
                border-radius: 16px;
                font-family: Inter, system-ui, sans-serif;
                font-size: 14px;
                font-weight: 850;
            }

            .modern-theme-header .theme-mobile-nav a:last-child {
                background: #0c1f2b;
                color: white;
            }
        }
    </style>
</head>
<body>

<header class="modern-theme-header" style="
    background:rgba(255,255,255,.94);
    border-bottom:1px solid rgba(12,31,43,.08);
    padding:18px 0;
    font-family:Inter,system-ui,sans-serif;
    backdrop-filter:blur(18px);
">
    <div class="container modern-header-inner" style="
        display:grid;
        grid-template-columns:auto 1fr;
        align-items:center;
        gap:24px;
    ">
        <a href="index.php?theme=modern-ministry" style="
            display:flex;
            align-items:center;
            gap:13px;
            text-decoration:none;
            color:#0c1f2b;
            font-weight:950;
        ">
            <img src="https://www.colossebaptistchurch.com/uploads/2/4/5/7/24574640/logo-2.jpeg" alt="Colosse Baptist Church" style="
                width:52px;
                height:52px;
                object-fit:cover;
                border-radius:14px;
                box-shadow:0 10px 24px rgba(12,31,43,.12);
            ">
            <span>Colosse Baptist Church</span>
        </a>

        <nav class="theme-desktop-nav" style="
            display:flex;
            align-items:center;
            justify-content:flex-end;
            gap:20px;
            font-size:13px;
            font-weight:850;
        ">
            <a href="our-church.php" style="color:#0c1f2b;text-decoration:none;">Our Church</a>
            <a href="sermons.php" style="color:#0c1f2b;text-decoration:none;">Sermons</a>
            <a href="ministries.php" style="color:#0c1f2b;text-decoration:none;">Ministries</a>
            <a href="forms.php" style="color:#0c1f2b;text-decoration:none;">Forms</a>
            <a href="giving.php" style="
                background:#0c1f2b;
                color:white;
                text-decoration:none;
                padding:11px 17px;
                border-radius:999px;
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

    if (!toggle) return;

    const header = toggle.closest('header');
    const menu = header.querySelector('.theme-mobile-nav');

    if (!menu) return;

    menu.classList.toggle('is-open');
    toggle.textContent = menu.classList.contains('is-open') ? '×' : '☰';
});
</script>