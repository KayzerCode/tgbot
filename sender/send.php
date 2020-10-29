<?php
require './vendor/autoload.php';
require_once ('config/config.php');

use Telegram\Bot\Api;
$telegram = new Api($tgtoken);

$response = $telegram->sendMessage([
    'chat_id' => '394569644', 
    'text' => 'Hello World'
]);

$messageId = $response->getMessageId();


?>