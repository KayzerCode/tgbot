<?php
include ('../vendor/autoload.php');
require_once ('config/config.php');

use Telegram\Bot\Api;

$telegram = new Api($token);

$response = $telegram->sendPhoto([
    'chat_id' => '394569644', 
    'photo' => 'photo.jpg', 
    'caption' => 'Some caption'
]);

$messageId = $response->getMessageId();
echo $messageId;

?>