<?php
include ('vendor/autoload.php');
require_once ('config/config.php'); // $tgtoken goes from config
require_once ('function.php');
require_once ('buttons.php');

use Telegram\Bot\Api;

$telegram = new Api($tgtoken);
$message = $telegram->getWebhookUpdates();

# Message saved to log file
if ($message) { 
    addToLog($message);
    parseMsg($message);
}

if ($auth) {
    // using auth to determine role
    loadButtons(); // load buttons 

}

if ($text) {
if($text == "/start") {
    $reply = $user_role . ", Отчеты или настройки? (" . $u_name . ")";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчеты"){
    $reply = $user_role . ", Какой выбираете отчет? (" . $u_name . ")";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_reports, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчет 1"){
    $reply = $user_role . ", Краткий или полный? (" . $u_name . ")";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_rep1, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Отчет 2"){
    $reply = $user_role . ", Краткий или полный? (" . $u_name . ")";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_rep2, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Назад"){
    $reply = $user_role . ", Отчеты или настройки? (" . $u_name . ")";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
}elseif($text == "Настройки"){
    $reply = $user_role . ", Настройки? (" . $u_name . ")";
    $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $btns_start, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);	
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup]);
} 
}
