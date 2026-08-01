<?php
/**
 * Ryzoria SMP - Configuration File
 * Global settings and constants
 */

// Server Information
define('SERVER_NAME', 'Ryzoria SMP');
define('SERVER_JAVA_IP', 'play.ryzoriasmp.my.id');
define('SERVER_BEDROCK_PORT', '25632');

// Social Links
define('DISCORD_LINK', 'https://dsc.gg/ryzoria');
define('WHATSAPP_LINK', 'https://chat.whatsapp.com/HNOoQBDjCwpJDSoOh1gfG7');

// Site URLs
define('SITE_URL', 'https://store.ryzoriasmp.my.id');
define('SITE_TITLE', 'Ryzoria SMP | Premium Minecraft Server');

// Page Configuration
$pages = [
    'home' => [
        'title' => 'Home - Ryzoria SMP',
        'url' => '/',
        'label' => 'Home'
    ],
    'server' => [
        'title' => 'Server Info - Ryzoria SMP',
        'url' => '/?page=server',
        'label' => 'Server Info'
    ],
    'ranks' => [
        'title' => 'Rank Store - Ryzoria SMP',
        'url' => '/?page=ranks',
        'label' => 'Rank Store'
    ],
    'community' => [
        'title' => 'Community - Ryzoria SMP',
        'url' => '/?page=community',
        'label' => 'Community'
    ]
];

// Get current page
$current_page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';

// Rank Store Data
$ranks = [
    [
        'id' => 1,
        'name' => 'VIP',
        'color' => '#61E1FF',
        'price' => 'Rp 50.000',
        'features' => ['Color Chat', '/hat command', '2x Homes', 'Custom Prefix']
    ],
    [
        'id' => 2,
        'name' => 'VIPPLUS',
        'color' => '#00D4FF',
        'price' => 'Rp 100.000',
        'features' => ['/hat command', '4x Homes', 'Custom Suffix', '/fly command', 'Particles']
    ],
    [
        'id' => 3,
        'name' => 'PREMIUM',
        'color' => '#0099FF',
        'price' => 'Rp 150.000',
        'features' => ['/fly command', '6x Homes', 'Custom Skin', 'Pet Commands', 'Cape', 'Priority Queue']
    ],
    [
        'id' => 4,
        'name' => 'ELITE',
        'color' => '#0066FF',
        'price' => 'Rp 200.000',
        'features' => ['Pet Commands', 'Admin Chat', 'All Features', 'Custom Name Color', 'Exclusive Items', 'VIP Events']
    ]
];

// Set page title
if (isset($pages[$current_page]['title'])) {
    $page_title = $pages[$current_page]['title'];
} else {
    $page_title = SITE_TITLE;
}
