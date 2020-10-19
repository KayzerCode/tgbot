<?php
include('vendor/autoload.php');
include('menu.php');
require_once ('config/config.php');

use Telegram\Bot\Api;

$telegram = new Api($tgtoken);
$res = $telegram->getWebhookUpdates();

$chat_id = $res['message']['chat']['id'];
$userTgId = $res['message']['from']['id'];
$text = $res['message']['text'];
$u_name = $res['message']['from']['username'];
$f_name = $res['message']['from']['first_name'];
$l_name = $res['message']['from']['last_name'];


if($text == "/start") {
    $reply = "Menu: ";
	$reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $menu, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);
	$telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
} 