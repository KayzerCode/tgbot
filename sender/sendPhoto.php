<?php
include('vendor/autoload.php');
require_once ('config/config.php');

use Telegram\Bot\Api;

$telegram = new Api($tgtoken);

$response = $telegram->sendPhoto([
    'chat_id' => '374918510', 
    'photo' => 'photo.jpg', 
    'caption' => 'Some caption'
]);

$messageId = $response->getMessageId();

?>