<?php

function active_theme(): string
{
    $allowed = [
        'modern-ministry',
        'community',
        'heritage',
        'worship',
        'ministry-hub'
    ];

    $theme = $_GET['theme'] ?? $_COOKIE['preview_theme'] ?? 'modern-ministry';

    if (!in_array($theme, $allowed, true)) {
        $theme = 'modern-ministry';
    }

    setcookie('preview_theme', $theme, time() + 86400 * 30, '/');

    return $theme;
}

function theme_info(string $theme): array
{
    $info = [
        'modern-ministry' => [
            'name' => 'Modern Ministry',
            'pros' => 'Professional, clean, balanced, broad appeal.',
            'cons' => 'Slightly generic compared to more ministry-heavy layouts.'
        ],
        'community' => [
            'name' => 'Community & Family',
            'pros' => 'Warm, friendly, people-focused, great for families.',
            'cons' => 'Less formal and less corporate.'
        ],
        'heritage' => [
            'name' => 'Heritage & Traditional',
            'pros' => 'Trusted, established, classic Baptist church feel.',
            'cons' => 'Can feel older if not balanced carefully.'
        ],
        'worship' => [
            'name' => 'Modern Worship',
            'pros' => 'Bold, contemporary, visitor-focused, mobile-friendly.',
            'cons' => 'May feel too contemporary for some members.'
        ],
        'ministry-hub' => [
            'name' => 'Ministry Hub',
            'pros' => 'Useful, information-rich, great for active members.',
            'cons' => 'More complex homepage with more content to maintain.'
        ],
    ];

    return $info[$theme];
}