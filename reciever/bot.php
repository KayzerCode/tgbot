<?php
include('vendor/autoload.php');
require_once ('config/config.php');

use Telegram\Bot\Api;

$telegram = new Api($tgtoken);
$res = $telegram->getWebhookUpdates();

$chat_id = $res['message']['chat']['id'];
$userTgId = $res['message']['from']['id'];
$text = $res['message']['text'];
$coord1 = $res['message']['location']['latitude'];
$coord2 = $res['message']['location']['longitude'];

if($text == "/start") {
    $reply = "Hello World!";
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
} 