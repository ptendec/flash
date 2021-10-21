<?php
	include 'query_server.php';
	$dish_id = $_GET['dish_id'];
	$user_id = $_SESSION['user_id'];
	$queryToServer = "DELETE FROM basket WHERE dish_id = '$dish_id' and user_id = '$user_id'";
	if ($result = $connect->query($queryToServer)) {
		
	}
	else{
		printf("Сообщение ошибки: %s\n", $mysqli->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: ' .$previousPage);
	exit;
?>