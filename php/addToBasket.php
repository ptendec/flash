<?php
	include 'query_server.php';
	$dish_id = $_GET['dish_id'];
	$user_id = $_SESSION['user_id'];
	$queryToAddBasket = "INSERT INTO basket (dish_id, user_id) VALUES ('$dish_id', '$user_id')";
	$result = $connect->query($queryToAddBasket);
	if ($result) {
		$previousPage = $_SERVER["HTTP_REFERER"];
		header('Location: '.$previousPage);
		exit;
	}
	else{
		printf("Сообщение ошибки: %s\n", $result->error);
	}
?>