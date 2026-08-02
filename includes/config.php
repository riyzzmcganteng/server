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
        'price' => 'Rp 50.000',
        'featured' => false,
        'features' => [
            'Color Chat',
            '/hat command',
            '2x Homes',
            'Custom Prefix',
            'Particle Effects',
            'Monthly Bonus: Rp 10.000'
        ]
    ],
    [
        'id' => 2,
        'name' => 'VIP+',
        'color' => '#00D4FF',
        'price' => 'Rp 100.000',
        'featured' => false,
        'features' => [
            '/hat command',
            '4x Homes',
            'Custom Suffix',
            '/fly command in Hub',
            'Advanced Particles',
            'Pet Companion',
            'Monthly Bonus: Rp 25.000',
            'Custom Title Color'
        ]
    ],
    [
        'id' => 3,
        'name' => 'MVP',
        'color' => '#0099FF',
        'price' => 'Rp 150.000',
        'featured' => false,
        'features' => [
            '/fly command (Survival)',
            '6x Homes',
            'Custom Skin Support',
            'Pet Commands',
            'Custom Cape',
            'Priority Queue',
            'Monthly Bonus: Rp 50.000',
            'VIP Chat Access'
        ]
    ],
    [
        'id' => 4,
        'name' => 'MVP+',
        'color' => '#5B21B6',
        'price' => 'Rp 200.000',
        'featured' => true,
        'features' => [
            'Unlimited /fly command',
            '8x Homes',
            'Custom Emotes',
            'Admin Chat Access',
            'Exclusive Items Pack',
            'VIP Events Access',
            'Monthly Bonus: Rp 100.000',
            'Premium Support',
            'Custom Nickname'
        ]
    ],
    [
        'id' => 5,
        'name' => 'Elite',
        'color' => '#DC2626',
        'price' => 'Rp 250.000',
        'featured' => false,
        'features' => [
            'All MVP+ Features',
            '10x Homes',
            'Custom Prefix & Suffix',
            'Double Drop Chance',
            'Special Title Rank',
            'Monthly Bonus: Rp 150.000',
            'Premium Cosmetics',
            'Direct Staff Support'
        ]
    ],
    [
        'id' => 6,
        'name' => 'Elite+',
        'color' => '#F59E0B',
        'price' => 'Rp 350.000',
        'featured' => false,
        'features' => [
            'All Elite Features',
            'Unlimited Homes',
            'Custom Command Alias',
            'Triple Drop Chance',
            'Exclusive Cosmetics Pack',
            'Monthly Bonus: Rp 250.000',
            'Private Events',
            'VIP Channel Access'
        ]
    ],
    [
        'id' => 7,
        'name' => 'Legends',
        'color' => '#10B981',
        'price' => 'Rp 450.000',
        'featured' => true,
        'features' => [
            'All Elite+ Features',
            'Unlimited Everything',
            'Custom Command Suite',
            '5x Drop Multiplier',
            'Exclusive Legend Badge',
            'Monthly Bonus: Rp 400.000',
            'Legendary Events',
            'Personal Manager'
        ]
    ],
    [
        'id' => 8,
        'name' => 'Ryzoria',
        'color' => '#8B5CF6',
        'price' => 'Rp 600.000',
        'featured' => false,
        'features' => [
            'All Legends Features',
            'Lifetime Perks',
            'Custom Game Balance',
            '10x Drop Multiplier',
            'Server Admin Status',
            'Monthly Bonus: Rp 600.000',
            'Event Creation Power',
            'Exclusive Private Server'
        ]
    ],
    [
        'id' => 9,
        'name' => 'Ryzoria+',
        'color' => '#EC4899',
        'price' => 'Rp 800.000',
        'featured' => false,
        'features' => [
            'All Ryzoria Features',
            'Ultimate Status',
            'Full Server Customization',
            'Unlimited Drop Multiplier',
            'Co-Owner Status',
            'Monthly Bonus: Rp 1.000.000',
            'Revenue Share (5%)',
            'Custom Content Creation'
        ]
    ]
];

// Set page title
if (isset($pages[$current_page]['title'])) {
    $page_title = $pages[$current_page]['title'];
} else {
    $page_title = SITE_TITLE;
}
