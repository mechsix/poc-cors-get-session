<?php

session_set_cookie_params(3600, '/; samesite=none', '', true, true);
session_start();


$STATIC_PATH = "./static";
$QKEY = 'f';


error_log("Session: ".session_id());


if(array_key_exists($QKEY, $_GET) && file_exists("$STATIC_PATH/$_GET[$QKEY]")) {
    $file_path = "$STATIC_PATH/$_GET[$QKEY]";

    header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
    header("Cache-Control: public");
    header("Content-Type: image/jpeg");
    header("Content-Length:".filesize($file_path));

    readfile($file_path);
    die();
}


http_response_code(404);
die();

?>
