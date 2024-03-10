<?php
$content = '';
foreach ($_POST as $key => $value) {
    if ($value) {
        $content .= "<b>$key</b>: <i>$value</i>\n";
    }
}

if (trim($content)) {
    $content = "<b>Message from Site:</b>\n" . $content;

    // Your bot's token that you got from @BotFather
    $apiToken = "7192610644:AAEanE_2zrDKQ1F_jItjpttAnQrL79QnxyI";

    $data = [
        // The user's (that you want to send a message to) telegram chat id
        'chat_id' => '@moviehubjexx',
        'text' => $content,
        'parse_mode' => 'HTML'
    ];

    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
}
?>