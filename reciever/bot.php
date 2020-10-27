<?php
include('vendor/autoload.php');
require_once ('config/config.php');
include('auth.php');
include('buttons.php');

use Telegram\Bot\Api;

$telegram = new Api($tgtoken);
$message = $telegram->getWebhookUpdates();

# Message saved to log file
if ($message) { 
    addToLog($message);    
}

$chat_id = $message['message']['chat']['id'];
$user_id = $message['message']['from']['id'];
$text = $message['message']['text'];
$u_name = $message['message']['from']['username'];
$f_name = $message['message']['from']['first_name'];
$l_name = $message['message']['from']['last_name'];
# Auth and load buttons
checkUser($user_id);


if ($text) {
if($text == "/start") {
    $reply = $user_role . ", Отчеты или настройки?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчеты"){
    $reply = $user_role . ", Какой выбираете отчет?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_reports, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчет 1"){
    $reply = $user_role . ", Краткий или полный?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_rep1, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчет 2"){
    $reply = $user_role . ", Краткий или полный?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_rep2, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Назад"){
    $reply = $user_role . ", Отчеты или настройки?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Настройки"){
    $reply = $user_role . ", Настройки?";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
} 
}
