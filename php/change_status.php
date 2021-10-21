<?php
	include 'query_server.php';
	$changeStatusTo = $_GET['changeStatusTo'];
	$order_id = $_GET['order_id'];
	$user_id = $_GET['user_id'];
	//echo $changeStatusTo . "<br>" . $order_id;
	if (strcmp($changeStatusTo, "Done") == 0) {
		$queryToDelete = "DELETE FROM orders WHERE order_id = '$order_id'";
		$result = $connect->query($queryToDelete);
	}
	else{
		$queryToGetOrders = "UPDATE orders SET status = '$changeStatusTo' WHERE order_id = '$order_id' and user_id = '$user_id'";
		$result = $connect->query($queryToGetOrders);
	}
	
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location:' . $previousPage);
	exit;	
?>