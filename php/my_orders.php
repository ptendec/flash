<?php
	include 'query_server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Flash</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php
		include 'header.php';
	?>
	<div class="section basket">
		<div class="container">
			<div class="row">
								<?php
								$user_id = $_SESSION['user_id'];
								$queryToGetOrders = "SELECT * FROM orders INNER JOIN dish ON orders.dish_id = dish.dish_id INNER JOIN users ON orders.user_id = users.user_id WHERE users.user_id = $user_id";
								$result = $connect->query($queryToGetOrders);
								while($row = $result->fetch_assoc()){
									$rows[] = $row;
								}
								for($i = 0; $i < count($rows); $i++){
									echo '<div class="col-lg-6">
									<p>Full Name: ' . $rows[$i]['first_name'] . ' ' . $rows[$i]['last_name'] . '</p>
									<p>Adress: ' . $rows[$i]['adress'] . '</p>
									<p>Ordered:</p>
									<img width="200px" src="' . $rows[$i]['picture'] . '" alt="">
									<p>' . $rows[$i]['name'] . '</p>
									<p style="width: 200px;">Order status: ' . $rows[$i]['status'] . '</p></div>';
								}
								?>
							</div>

		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>