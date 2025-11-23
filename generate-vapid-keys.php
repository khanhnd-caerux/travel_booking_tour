<?php

require __DIR__ . '/vendor/autoload.php';

use Minishlink\WebPush\VAPID;

try {
    $keys = VAPID::createVapidKeys();
    
    echo "\n";
    echo "=== VAPID KEYS ===\n";
    echo "\n";
    echo "Public Key:\n";
    echo $keys['publicKey'] . "\n";
    echo "\n";
    echo "Private Key:\n";
    echo $keys['privateKey'] . "\n";
    echo "\n";
    echo "=== COPY VÀO .env ===\n";
    echo "\n";
    echo "VAPID_PUBLIC_KEY=" . $keys['publicKey'] . "\n";
    echo "VAPID_PRIVATE_KEY=" . $keys['privateKey'] . "\n";
    echo "VAPID_SUBJECT=mailto:admin@example.com\n";
    echo "\n";
    
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "\n";
    echo "Hãy chạy: composer require minishlink/web-push\n";
}
