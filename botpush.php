<?php



require "vendor/autoload.php";

$access_token = 'wcbYASYnOZ9dWKt8Nt2tmnXaD6tJtPnRMGrNBZ7L4J1fJR6fgZsNnGmCu5G7ZISnLXFi16+sWIj8NnyIwgpCXCAIVWnEL0nOtj0sMHPJR9Fc8DM1ceVzrC6r9TEjUrYcThIVU4vvHiwGL15tUE85lAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '';

$pushID = '';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีชาวโลก');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







