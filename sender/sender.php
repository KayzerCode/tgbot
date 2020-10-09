<?php
require_once __DIR__ . '/config/config.php';

# подсчитываем количество найденных объявления #
$amt = count($forNotif);

# если объявлений больше чем 0 - рассылаем уведомления #
foreach ($subscibers as $chat) {
	$text = 'Hello! Im sender bot!';
	$text = urlencode($text);
	fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$text}&disable_web_page_preview=1", "r");
}
