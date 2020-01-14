<?php
 if ($_GET['value'] == "true") {
 require "vendor/autoload.php";
 $access_token = '<access token>';
 $channelSecret = '<channel secret>';
 $pushID = '<user ID>'; //Sun   
   
 $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
 $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
 $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_GET['text']."\n--\n".'From: '.$_GET['from']);
 $response = $bot->pushMessage($pushID, $textMessageBuilder);
 echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
 }
 ?>
