<?php

set_time_limit(0);

include('config.php');
include_once('functions.php');

while (true) {
$offset = file_get_contents("polling.ini");

$update = file_get_contents($tlg.$get.$offset); //
//file_put_contents("update.json",$update);
//$update1=file_get_contents("update.json");
$update = json_decode($update, TRUE);

if ($update <>'{"ok":true,"result":[]}'){
include('bot.php');

$update_id=$update["result"][0]["update_id"];    
file_put_contents('polling.ini',$update_id+1);  
}else{
   
}

}




?>