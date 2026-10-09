<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colosse Baptist Church</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/site.css?v=20">

    <style>
        .community-theme-header .theme-menu-toggle,
        .community-theme-header .theme-mobile-nav {
            display: none;
        }

        @media (max-width: 900px) {
            .community-theme-header .community-header-inner {
                grid-template-columns: 1fr auto !important;
            }

            .community-theme-header .theme-desktop-wrap {
                display: none !important;
            }

            .community-theme-header .theme-menu-toggle {
                display: inline-flex !important;
                align-items: center;
                justify-content: center;
                width: 48px;
                height: 48px;
                border: 0;
                border-radius: 999px;
                background: #24493d;
                color: white;
                font-size: 25px;
                font-weight: 900;
                cursor: pointer;
            }

            .community-theme-header .theme-mobile-nav.is-open {
                display: grid !important;
            }

            .community-theme-header .theme-mobile-nav {
                grid-column: 1 / -1;
                gap: 10px;
                padding-top: 18px;
            }

            .community-theme-header .theme-mobile-nav a {
                background: #eef6ee;
                color: #24493d;
                text-decoration: none;
                padding: 14px 16px;
                border-radius: 18px;
                font-family: Inter, system-ui, sans-serif;
                font-size: 14px;
                font-weight: 850;
            }

            .community-theme-header .theme-mobile-nav a:last-child {
                background: #24493d;
                color: white;
            }

            .community-theme-header .community-brand-title {
                font-size: 22px !important;
            }

            .community-theme-header .community-brand-subtitle {
                font-size: 12px !important;
            }
        }

        @media (max-width: 520px) {
            .community-theme-header .community-brand img {
                width: 52px !important;
                height: 52px !important;
            }

            .community-theme-header .community-brand-title {
                font-size: 19px !important;
            }
        }
    </style>
</head>
<body>

<header class="community-theme-header" style="
    background:#fff8ed;
    border-bottom:1px solid rgba(36,73,61,.16);
    font-family:Georgia,'Times New Roman',serif;
">
    <div class="container community-header-inner" style="
        display:grid;
        grid-template-columns:1fr auto;
        gap:24px;
        align-items:center;
        padding:24px 0;
    ">
        <a class="community-brand" href="index.php?theme=community" style="
            display:flex;
            align-items:center;
            gap:16px;
            text-decoration:none;
            color:#24493d;
        ">
            <img src="https://www.colossebaptistchurch.com/uploads/2/4/5/7/24574640/logo-2.jpeg" alt="Colosse Baptist Church" style="
                width:62px;
                height:62px;
                object-fit:cover;
                border-radius:22px;
                box-shadow:0 12px 28px rgba(36,73,61,.14);
            ">

            <div>
                <strong class="community-brand-title" style="
                    display:block;
                    font-size:28px;
                    line-height:1;
                    letter-spacing:-.04em;
                ">Colosse Baptist Church</strong>

                <span class="community-brand-subtitle" style="
                    display:block;
                    margin-top:7px;
                    color:#68786f;
                    font-family:Inter,system-ui,sans-serif;
                    font-size:13px;
                    font-weight:800;
                ">A church family with room for you.</span>
            </div>
        </a>

        <div class="theme-desktop-wrap" style="
            display:flex;
            flex-direction:column;
            align-items:flex-end;
            gap:12px;
        ">
            <div style="
                color:#b86b4b;
                font-family:Inter,system-ui,sans-serif;
                font-size:12px;
                font-weight:950;
                text-transform:uppercase;
                letter-spacing:.14em;
            ">
                Everyone is welcome here
            </div>

            <nav class="theme-desktop-nav" style="
                display:flex;
                gap:10px;
                flex-wrap:wrap;
                justify-content:flex-end;
                font-family:Inter,system-ui,sans-serif;
                font-size:13px;
                font-weight:850;
            ">
                <a href="our-church.php" style="background:#eef6ee;color:#24493d;text-decoration:none;padding:10px 14px;border-radius:999px;">Our Church</a>
                <a href="sermons.php" style="background:#eef6ee;color:#24493d;text-decoration:none;padding:10px 14px;border-radius:999px;">Sermons</a>
                <a href="ministries.php" style="background:#eef6ee;color:#24493d;text-decoration:none;padding:10px 14px;border-radius:999px;">Ministries</a>
                <a href="forms.php" style="background:#eef6ee;color:#24493d;text-decoration:none;padding:10px 14px;border-radius:999px;">Forms</a>
                <a href="giving.php" style="background:#24493d;color:white;text-decoration:none;padding:10px 15px;border-radius:999px;">Give</a>
            </nav>
        </div>

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