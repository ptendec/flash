<?php
	include 'query_server.php';
	$file = $_FILES['fileForUpload'];
	$fileTmpName = $_FILES['fileForUpload']['tmp_name'];
	$fileName = $_FILES['fileForUpload']['name'];
	move_uploaded_file($fileTmpName, '../checks/' . $fileName);
	$fromBasket = $_GET['fromBasket'];
	$user_id = $_SESSION['user_id'];
	$typeOfDish_id = $_GET['typeOfDish_id'];
	$queryToGetBasketDishes = "SELECT * FROM basket INNER JOIN dish ON basket.dish_id = dish.dish_id WHERE basket.user_id = '$user_id'";
	$result = $connect->query($queryToGetBasketDishes);
	while($row = $result->fetch_assoc()){
    	$rows[] = $row;
	}
	$queryToOrder = "INSERT INTO orders (dish_id, user_id, status) VALUES ";
	$queryOfValues = "";

	for($i = 0; $i < count($rows); $i++){
		if (count($rows) - 1 == $i) {
			$symbol = ";";
		}
		else{
			$symbol = ",";
		}
		$dish_id = $rows[$i]['dish_id'];
		$queryOfValues = $queryOfValues . "('$dish_id', '$user_id', 'Ordered')" . $symbol;
	}
	$queryToOrder = $queryToOrder . $queryOfValues;
	if ($connect->query($queryToOrder)) {
		$connect->query("DELETE FROM basket WHERE user_id = '$user_id'");
	}
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location:' . $previousPage);
	exit;
?>