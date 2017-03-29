<?php 

session_start();


$userInput = $_GET["userData"];
// file_put_contents("../JSON/testing.json", $userInput);
$jUserData = json_decode($userInput);

$sArrayOfUsers = file_get_contents("../JSON/test.json");
$arrayOfUsers = json_decode($sArrayOfUsers);

// file_put_contents("../JSON/testing.json", $jUserData->name);

for ($i=0; $i < count($arrayOfUsers); $i++) { 

	if($arrayOfUsers[$i]->fname == $jUserData->name && $arrayOfUsers[$i]->pass == $jUserData->pass){
		$stringConv = json_encode($arrayOfUsers[$i]);
		file_put_contents("../JSON/testing.json", $stringConv);
		$_SESSION["userData"] = $stringConv;
		echo $stringConv;
		break;
	}else{
		echo '{"status":"error"}';
		session_destroy();
		file_put_contents("../JSON/testing.json", "nope");
	};

	// if ($arrayOfUsers[$i]->fname == $jUserData->name && $arrayOfUsers[$i]->pass == $jUserData->pass){
	// 	file_put_contents("../JSON/testing.json", "yes");
	// 	// $sUser = json_encode($arrayOfUsers[$i]);
	// 	// echo $sUser;
	// 	// $_SESSION["userData"] = $sUser;
	// }else{
	// file_put_contents("../JSON/testing.json", "nope");	
	// // echo '{"status":"error"}';
	// // session_destroy();
	// };
};


?>