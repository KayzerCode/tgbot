<?php
include('vendor/autoload.php');
require_once ('config/config.php');
include('auth.php');
include('buttons.php');

use Telegram\Bot\Api;

$telegram = new Api($tgtoken);
$res = $telegram->getWebhookUpdates();

$chat_id = $res['message']['chat']['id'];
$userTgId = $res['message']['from']['id'];
$text = $res['message']['text'];
$u_name = $res['message']['from']['username'];
$f_name = $res['message']['from']['first_name'];
$l_name = $res['message']['from']['last_name'];

if ($text) {
if($text == "/start") {
    $reply = $userTgId . ", Отчеты или настройки?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчеты"){
    $reply = $userTgId . ", Какой выбираете отчет?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_reports, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчет 1"){
    $reply = $userTgId . ", Краткий или полный?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_rep1, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчет 2"){
    $reply = $userTgId . ", Краткий или полный?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_rep2, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Назад"){
    $reply = $userTgId . ", Отчеты или настройки?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Настройки"){
    $reply = $userTgId . ", Настройки?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
} 
}