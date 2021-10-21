<?php
	include 'query_server.php';
	

	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));

	$authorizationing = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result = $connect->query($authorizationing);

	if($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$_SESSION['user_id'] = $row["user_id"];
		$_SESSION['first_name'] = $row["first_name"];
		$_SESSION['last_name'] = $row["last_name"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['password'] = $row["password"];
		
	} 
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: ../index.php');
	exit;
?>

