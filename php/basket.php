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
					$typeOfDish_id = $_GET['typeOfDish_id'];
					$queryToGetBasketDishes = "SELECT * FROM basket INNER JOIN dish ON basket.dish_id = dish.dish_id WHERE basket.user_id = '$user_id'";
					$result = $connect->query($queryToGetBasketDishes);
					while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                    }
                    for($i = 0; $i < count($rows); $i++){
                    	echo '<div style="margin-bottom: 30px;" class="col-lg-2">
					<img width="100%" src="' . $rows[$i]['picture'] . '" alt="">
				</div>
				<div class="col-lg-4">
					<p>' . $rows[$i]['name'] . '</p>
					<a href="deleteFromBasket.php?dish_id=' . $rows[$i]['dish_id'] . '">Delete</a>

				</div>';
                    }
				?>
				<div class="col-lg-2">
					<a class="btn btn-warning" href="payment.php?amount=2">Order All</a>
				</div>
			</div>

		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>