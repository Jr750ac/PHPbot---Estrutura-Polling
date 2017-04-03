<?php

function sendMessage ($chatId, $message) {

        $url = $GLOBALS[tlg]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
}

?>