<?php 

session_start();

$userId = "Casian";
$userPass = "Oros";
$userInput = $_GET["userData"];
$jUserData = json_decode($userInput);

if($jUserData->name == $userId && $jUserData->pass == $userPass){
	$_SESSION["userData"] = $userInput;
	echo '{"status":"ok"}';
}else{
	echo '{"status":"error"}';
	session_destroy();
}

?>