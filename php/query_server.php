<?php
	$server_name = "localhost";
	$database_username = "root";
	$database_password = "root";
	$database_name = "flash";
	
	$connect = new mysqli($server_name, $database_username, $database_password, $database_name);

	if($connect->connect_error){
		echo "ERROR";
	}
	if(session_id() == '') {
    	session_start();
	}
?>