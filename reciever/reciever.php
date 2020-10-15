<?php
require_once __DIR__ . '/config/config.php';


$URL_get = "https://api.telegram.org/bot$token/getUpdates";

$json = Invoke-RestMethod -Uri $URL
    $data = $json.result | Select-Object -Last 1

    #$data.update_id
    $chat_id = $data.message.chat.id
    $text = $data.message.text
    $f_name = $data.message.chat.first_name
    $l_name = $data.message.chat.last_name
    $type = $data.message.chat.type
    $username = $data.message.chat.username

echo $username;