<?php
include_once("../LIB_http.php");                // include curl library


// if (isset($_GET["target"])) {
// 	$target = $_GET["target"];
// 	$ref = isset($_GET["ref"])? $_GET["ref"] : "https://www.google.com";

// 	$result = http_get($target, $ref);
// 	echo $result['FILE'];
// } else {
// 	echo "沒有目標網址";
// }

if (isset($_GET["target"])) {
	$target = $_GET["target"];
	$ref = isset($_GET["ref"])? $_GET["ref"] : "https://www.google.com";

	$result = http_header($target, $ref);
	if (strpos($result['FILE'], '404 Not Found') !== false) {
	    echo 'false';
	} else {
		echo 'true';
		// $result = http_get($target, $ref);
		// echo $result['FILE'];
	}
	// var_dump($result);
} else {
	echo "沒有目標網址";
}

?>