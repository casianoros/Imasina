<?php

	session_start();

	$_SESSION["userData"] = '{"status":"success","fname":"casi","lname":"oros","pass":"123","email":"casianoros1223@gmail.com","adress":"Copenhagen"}';

	if( isset( $_SESSION["userData"] ) ){
		echo $_SESSION["userData"];
	}else{
		echo '{"status":"error"}';
	}
	
?>