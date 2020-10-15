<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/msgproc/msgproc.php';
# текст объявления #

# рассылаем уведомления #
foreach ($subscibers as $chat) {
	fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$text}&disable_web_page_preview=1", "r");
}
