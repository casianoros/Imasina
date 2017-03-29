<?php

	session_start();

	if( isset( $_SESSION["userData"] ) ){
		echo $_SESSION["userData"];
	}else{
		$_SESSION["userData"] = '{"status":"error"}';
		echo $_SESSION["userData"];
	}
	
?>