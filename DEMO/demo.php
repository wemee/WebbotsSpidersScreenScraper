<?php
include_once("LIB_http.php");                # include curl library

$result = http_get("http://www.google.com", "http://bu4.google.com");
var_dump($result['FILE']);

?>
