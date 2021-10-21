<?php
	include 'query_server.php';

	$first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
	$last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$adress = filter_var(trim($_POST['adress']), FILTER_SANITIZE_STRING);
	$telephone = filter_var(trim($_POST['telephone']), FILTER_SANITIZE_STRING);
	$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));
	$confirm_password = md5(filter_var(trim($_POST['psw-repeat']), FILTER_SANITIZE_STRING));


	
	$registring = "INSERT INTO users (first_name, last_name, email, password, telephone, adress)
	VALUES ('$first_name', '$last_name', '$email', '$password', '$telephone', '$adress')";
	
	if($connect->query($registring)){
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
	}
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: ../index.php');
	exit;
	
	$connect->close();

?>