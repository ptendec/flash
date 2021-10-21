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
	<title>Clothes Shop</title>
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<?php
		include 'header.php';
	?>
	<section class="payment">
		<div class="container">
			<div class="row">
				<?php 
			if($_GET['amount'] = 2){
					$user_id = $_SESSION['user_id'];
					$typeOfDish_id = $_GET['typeOfDish_id'];
					$queryToGetBasketDishesToPayment = "SELECT * FROM basket INNER JOIN dish ON basket.dish_id = dish.dish_id WHERE basket.user_id = '$user_id'";
					$queryToGetSum = "SELECT SUM(dish.price) AS total FROM basket INNER JOIN dish ON basket.dish_id = dish.dish_id WHERE basket.user_id = '$user_id'";
					$result = $connect->query($queryToGetBasketDishesToPayment);
					$total = $connect->query($queryToGetSum);
					$row2 = $total->fetch_assoc();
					while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                    }
                    for($i = 0; $i < count($rows); $i++){
                    	echo '<div style="margin-bottom: 30px;" class="col-lg-2">
					<img width="100%" src="' . $rows[$i]['picture'] . '" alt="">
				</div>
				<div class="col-lg-4">
					<p>' . $rows[$i]['name'] . '</p>
					<p>Price: ' . $rows[$i]['price'] . ' $</p> 
					<a href="deleteFromBasket.php?dish_id=' . $rows[$i]['dish_id'] . '">Delete</a>

				</div>';
                    }
			}
			else{
				
			}
			$paymentAmount = $row2['total'] + 3;
			echo "	<h4>Please send the order amount to this card.<br>
			Card number: 5169 4971 5277 3044<br>
			Shipping amount 3 $<br>
			Payment amount: " . $paymentAmount . " $
			<br>And upload a check</h4>";
		?>
			</div>
			<div class="row justify-content-end">
				<div class="col-lg-3">
					<form action="order.php?fromBasket=1" method="POST" enctype="multipart/form-data">
						<input class="btn btn-light" type="file" name="fileForUpload">
						<button class="btn btn-warning" type="submit">Paid up</button>
					</form>
				</div>
			</div>
		</div>
	</section>	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>