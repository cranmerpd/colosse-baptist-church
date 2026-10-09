<?php
$themes = [
    'modern-ministry' => 'Modern Ministry',
    'community' => 'Community & Family',
    'heritage' => 'Heritage',
    'worship' => 'Modern Worship',
    'ministry-hub' => 'Ministry Hub',
];
?>

<style>
    .dev-theme-preview {
        position: fixed !important;
        left: 24px !important;
        right: 24px !important;
        bottom: 24px !important;
        z-index: 999999 !important;
        background: rgba(8, 25, 35, .96) !important;
        color: #fff !important;
        border-radius: 24px !important;
        box-shadow: 0 24px 80px rgba(0, 0, 0, .35) !important;
        padding: 18px !important;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif !important;
        backdrop-filter: blur(18px) !important;
    }

    .dev-theme-preview * {
        box-sizing: border-box !important;
    }

    .dev-theme-preview-inner {
        display: grid !important;
        grid-template-columns: 1fr auto !important;
        gap: 18px !important;
        align-items: center !important;
    }

    .dev-theme-preview strong {
        display: block !important;
        font-size: 15px !important;
        line-height: 1.2 !important;
        margin: 0 0 6px !important;
        color: #fff !important;
    }

    .dev-theme-preview p {
        margin: 0 !important;
        color: rgba(255,255,255,.72) !important;
        font-size: 13px !important;
        line-height: 1.45 !important;
    }

    .dev-theme-buttons {
        display: flex !important;
        flex-wrap: wrap !important;
        gap: 8px !important;
        justify-content: flex-end !important;
    }

    .dev-theme-buttons a {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        background: rgba(255,255,255,.11) !important;
        color: #fff !important;
        text-decoration: none !important;
        padding: 9px 13px !important;
        border-radius: 999px !important;
        font-size: 12px !important;
        font-weight: 800 !important;
        line-height: 1 !important;
        white-space: nowrap !important;
        border: 1px solid rgba(255,255,255,.12) !important;
    }

    .dev-theme-buttons a.active {
        background: #d7a84f !important;
        color: #081923 !important;
    }

    body {
        padding-bottom: 130px !important;
    }

    @media (max-width: 900px) {
        .dev-theme-preview {
            left: 12px !important;
            right: 12px !important;
            bottom: 12px !important;
        }

        .dev-theme-preview-inner {
            grid-template-columns: 1fr !important;
        }

        .dev-theme-buttons {
            justify-content: flex-start !important;
        }
    }
</style>

<div class="dev-theme-preview">
    <div class="dev-theme-preview-inner">
        <div>
            <strong>Design Preview</strong>
            <p>
                Current: <?php echo htmlspecialchars($themeInfo['name']); ?>.
                Pros: <?php echo htmlspecialchars($themeInfo['pros']); ?>
                Cons: <?php echo htmlspecialchars($themeInfo['cons']); ?>
            </p>
        </div>

        <div class="dev-theme-buttons">
            <?php foreach ($themes as $slug => $label): ?>
                <a
                    class="<?php echo $theme === $slug ? 'active' : ''; ?>"
                    href="?theme=<?php echo urlencode($slug); ?>"
                >
                    <?php echo htmlspecialchars($label); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>