<?php


$Chat_id=$update["result"][0]["message"]["chat"]["id"];
$Message_text=$update["result"][0]["message"]["text"];
$update_id=$update["result"][0]["update_id"];


//sendMessage($Chat_id,$Message_text."\n".$update_id);

switch ($Message_text) {
    case "/start":
        sendMessage($Chat_id,'Welcome friend');   
        break;
    case "/stop":
       sendMessage($Chat_id,'Thanks for using our bot, it will be disabled for you.'); 
        break;
    case "/help":
      sendMessage($Chat_id,'PHPbot - Structure Polling
Code structure bot polling for Telegram
Github: https://github.com/Jr750ac/PHPbot_polling');  
        break;
}



?>