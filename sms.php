<?php
 if ($_GET['value'] == "true") {
 require "vendor/autoload.php";
 $access_token = 'eqNXHPMyOElV7Ar0f7pxwBcRB4ILssovgEZfrT1uuejkxvEh47R/+ci0fiAqRl1Tls68I/MF9o7ROt+iQlomiD0wKbkzpqrSwn2aN/glJpHfKPtVFBWF4T531B7ObYjCDvQo3LBhu3X0+aq0dPXIxQdB04t89/1O/w1cDnyilFU=';
 $channelSecret = '2091a9a7ccb9488f23a11f4536909ff0';
 //$pushID = '//U9b9cafb01b3e0//5367393c3191475b7b0'; //P Eh
 //$pushID2 = '//U112c68d538600//71f31bb8f7e4c0a5091';  //p'nut
 //$pushID3 = '//Ufb861857cab8//96fe9e3a86f49b5b9156'; //p'mix
 $pushID4 = 'U107673e4bf07ee7f665a5ea761427a2d'; //Sun   
   
 $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
 $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
 $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_GET['text']."\n--\n".'From: '.$_GET['from']);
 $response4 = $bot->pushMessage($pushID4, $textMessageBuilder);
 echo $response4->getHTTPStatus() . ' ' . $response4->getRawBody();
 }
 ?>
