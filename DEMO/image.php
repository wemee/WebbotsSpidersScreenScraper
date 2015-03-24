<?php
include_once("../LIB_download_images.php");                // include curl library


if (isset($_GET["target"])) {
	$target = $_GET["target"];
	$ref = isset($_GET["ref"])? $_GET["ref"] : "https://www.google.com";

	$result = http_get($target, $ref);
	echo $result['FILE'];
} else {
	echo "沒有目標網址";
}

?>