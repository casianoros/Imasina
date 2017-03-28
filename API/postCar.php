<?php
	
$carData = $_POST["data"];
$jcarData = json_decode($carData);
$sArrayJson = file_get_contents("../JSON/Cars.json");
$aOfJObj = json_decode($sArrayJson);
var_dump($aOfJObj);
array_push($aOfJObj, $jcarData);
$finalData = json_encode($aOfJObj);
file_put_contents("../JSON/Cars.json", $finalData);
	
?>