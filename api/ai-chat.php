<?php
/**
 * Ryzoria AI Chat API Endpoint
 * Handles AI responses with context about Ryzoria SMP
 */

header('Content-Type: application/json');

// Get the OpenAI API key from environment
$api_key = getenv('OPENAI_API_KEY');

if (empty($api_key)) {
    http_response_code(500);
    echo json_encode([
        'error' => 'API key not configured',
        'message' => 'OpenAI API key is not set in environment variables'
    ]);
    exit;
}

// Get the incoming request
$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['message'])) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Missing message',
        'message' => 'Please provide a message parameter'
    ]);
    exit;
}

$user_message = trim($input['message']);

if (empty($user_message)) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Empty message',
        'message' => 'Message cannot be empty'
    ]);
    exit;
}

// Ryzoria SMP Context
$ryzoria_context = "
You are Ryzoria AI, a helpful assistant for the Ryzoria SMP (Minecraft server).

RYZORIA SMP INFORMATION:
- Server Name: Ryzoria SMP
- Java IP: play.ryzoriasmp.my.id
- Bedrock IP: ryzoriasmp.my.id
- Bedrock Port: 25632
- Version: 1.21.8+
- Mode: Survival Economy with Crossplay
- Ranks Available: VIP, VIP+, MVP, MVP+, Elite, Elite+, Legends, Ryzoria, Ryzoria+
- Discord: https://dsc.gg/ryzoria
- WhatsApp: https://chat.whatsapp.com/HNOoQBDjCwpJDSoOh1gfG7
- Players Online: 1000+
- Server Uptime: 24/7
- Anti-Cheat: Enabled

RANK FEATURES SUMMARY:
- VIP: Color Chat, 2x Homes, Custom Prefix, Particles, Rp5k/month
- VIP+: VIP features + Suffix, 4x Homes, /hat, /fly Hub, Pet, Rp8k/month
- MVP: VIP+ features + 6x Homes, /fly Survival, Priority Queue, Titles, Rp12k/month
- MVP+: MVP features + 8x Homes, Unlimited /fly, Admin Chat, Cosmetics, 2x Drop, Rp20k/month
- Elite: MVP+ features + 10x Homes, Emotes, 2x Drop Chance, Badge, Staff Support, Rp30k/month
- Elite+: Elite features + Unlimited Homes, 3x Drop, Cosmetics Pack, VIP Channel, Private Events, Rp45k/month
- Legends: Elite+ features + 5x Drop Multiplier, Legend Badge, Event Creation, Manager, Rp70k/month
- Ryzoria: Legends features + 10x Drop, Admin Status, Custom Balance, Lifetime Perks, Rp120k/month
- Ryzoria+: Ryzoria features + Co-Owner Status, Unlimited Drop Multiplier, Revenue Share 5%, Rp200k/month

SERVER RULES:
1. Be Respectful - No discrimination or harassment
2. No Griefing - Build only in designated areas
3. No Cheating - Use vanilla Minecraft only
4. Keep Chat Clean - No spam or inappropriate language

COMMUNITY GUIDELINES:
- 24/7 Support available
- Regular events and tournaments
- 5000+ Discord members
- 2000+ WhatsApp community members
- Friendly and welcoming atmosphere

When answering:
1. If someone asks about Ryzoria SMP (IP, port, ranks, rules, server info, how to join, etc.) - provide accurate information from the context above
2. If they ask general questions unrelated to Ryzoria - respond helpfully like ChatGPT
3. Always respond in Indonesian (bahasa Indonesia) unless they ask in English, then respond in English
4. Be friendly and helpful
5. Keep responses concise and readable
";

// Build the messages array
$messages = [
    [
        'role' => 'system',
        'content' => $ryzoria_context
    ],
    [
        'role' => 'user',
        'content' => $user_message
    ]
];

// Call OpenAI API
$ch = curl_init('https://api.openai.com/v1/chat/completions');

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ],
    CURLOPT_POSTFIELDS => json_encode([
        'model' => 'gpt-3.5-turbo',
        'messages' => $messages,
        'temperature' => 0.7,
        'max_tokens' => 500
    ])
]);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code !== 200) {
    http_response_code($http_code);
    echo json_encode([
        'error' => 'API Error',
        'message' => 'Failed to get response from OpenAI API',
        'status' => $http_code
    ]);
    exit;
}

$result = json_decode($response, true);

if (!isset($result['choices'][0]['message']['content'])) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Invalid response',
        'message' => 'Received invalid response from OpenAI API'
    ]);
    exit;
}

$ai_response = $result['choices'][0]['message']['content'];

header('HTTP/1.1 200 OK');
echo json_encode([
    'success' => true,
    'message' => $ai_response,
    'timestamp' => date('Y-m-d H:i:s')
]);
