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
define('WHATSAPP_PHONE', '6285602052384');
define('TIKTOK_USERNAME', 'ryzoria.smp');

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
        'price' => 'Rp 25.000',
        'popular' => false,
        'premium' => false,
        'features' => [
            'Color Chat',
            '2x Homes',
            'Custom Prefix',
            'Particle Effects',
            'Monthly Bonus: Rp 5.000'
        ]
    ],
    [
        'id' => 2,
        'name' => 'VIP+',
        'color' => '#00D4FF',
        'price' => 'Rp 40.000',
        'popular' => false,
        'premium' => false,
        'features' => [
            'Color Chat & Suffix',
            '4x Homes',
            '/hat Command',
            '/fly in Hub',
            'Pet Companion',
            'Monthly Bonus: Rp 8.000'
        ]
    ],
    [
        'id' => 3,
        'name' => 'MVP',
        'color' => '#0099FF',
        'price' => 'Rp 60.000',
        'popular' => false,
        'premium' => false,
        'features' => [
            'All VIP+ Features',
            '6x Homes',
            '/fly in Survival',
            'Priority Queue',
            'Special Titles',
            'Monthly Bonus: Rp 12.000'
        ]
    ],
    [
        'id' => 4,
        'name' => 'MVP+',
        'color' => '#5B21B6',
        'price' => 'Rp 85.000',
        'popular' => true,
        'premium' => false,
        'features' => [
            'All MVP Features',
            '8x Homes',
            'Unlimited /fly',
            'Admin Chat Access',
            'Exclusive Cosmetics',
            '2x Drop Chance',
            'Monthly Bonus: Rp 20.000'
        ]
    ],
    [
        'id' => 5,
        'name' => 'Elite',
        'color' => '#DC2626',
        'price' => 'Rp 110.000',
        'popular' => false,
        'premium' => false,
        'features' => [
            'All MVP+ Features',
            '10x Homes',
            'Custom Emotes',
            'Double Drop Chance',
            'Special Badge',
            'Staff Support',
            'Monthly Bonus: Rp 30.000'
        ]
    ],
    [
        'id' => 6,
        'name' => 'Elite+',
        'color' => '#F59E0B',
        'price' => 'Rp 140.000',
        'popular' => false,
        'premium' => false,
        'features' => [
            'All Elite Features',
            'Unlimited Homes',
            'Triple Drop Chance',
            'Exclusive Cosmetics Pack',
            'VIP Channel Access',
            'Private Events',
            'Monthly Bonus: Rp 45.000'
        ]
    ],
    [
        'id' => 7,
        'name' => 'Legends',
        'color' => '#10B981',
        'price' => 'Rp 180.000',
        'popular' => true,
        'premium' => false,
        'features' => [
            'All Elite+ Features',
            '5x Drop Multiplier',
            'Legendary Badge',
            'Event Creation',
            'Personal Manager',
            'Legendary Status',
            'Monthly Bonus: Rp 70.000'
        ]
    ],
    [
        'id' => 8,
        'name' => 'Ryzoria',
        'color' => '#8B5CF6',
        'price' => 'Rp 250.000',
        'popular' => false,
        'premium' => true,
        'features' => [
            'All Legends Features',
            '10x Drop Multiplier',
            'Server Admin Status',
            'Custom Balance',
            'Lifetime Perks',
            'Event Creation Power',
            'Monthly Bonus: Rp 120.000'
        ]
    ],
    [
        'id' => 9,
        'name' => 'Ryzoria+',
        'color' => '#EC4899',
        'price' => 'Rp 350.000',
        'popular' => false,
        'premium' => true,
        'features' => [
            'All Ryzoria Features',
            'Co-Owner Status',
            'Unlimited Drop Multiplier',
            'Full Customization',
            'Revenue Share (5%)',
            'Supreme Control',
            'Monthly Bonus: Rp 200.000'
        ]
    ]
];

// Set page title
if (isset($pages[$current_page]['title'])) {
    $page_title = $pages[$current_page]['title'];
} else {
    $page_title = SITE_TITLE;
}
