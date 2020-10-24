<?php
include('vendor/autoload.php');
require_once ('config/config.php');
include('auth.php');
include('buttons.php');

// use Telegram\Bot\Api;

//$telegram = new Api($tgtoken);
//$res = $telegram->getWebhookUpdates();

//$chat_id = $res['message']['chat']['id'];
//$userTgId = $res['message']['from']['id'];
//$text = $res['message']['text'];
//$u_name = $res['message']['from']['username'];
//$f_name = $res['message']['from']['first_name'];
//$l_name = $res['message']['from']['last_name'];

$text = "Some text";

if ($text) {
    addToLog($text);    
}