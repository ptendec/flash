<?php
	include 'query_server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flash</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Pixture</title>
</head>
<body>
	<?php
		include 'header.php';
	?>
	<section class="dishes">
		<div class="container">
			<div class="row justify-content-between">
				<?php
					$typeOfDish_id = $_GET['typeOfDish_id'];
					$queryToGetDishes = "SELECT * FROM dish WHERE typeOfDish_id = '$typeOfDish_id'";
					$result = $connect->query($queryToGetDishes);
					while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                    }
                    for($i = 0; $i < count($rows); $i++){
                    	echo '<div class="col-lg-3 dishes_a">
					<a style="text-decoration: none;color: #000;" href="">
						<img width="100%" height="200px" src="' . $rows[$i]['picture'] . '" alt="">
						<p style="margin-top: 20px;" class="nameOfDish">' . $rows[$i]['name'] . '</p>
						<p style="margin-top: 20px;" class="nameOfDish">Price: ' . $rows[$i]['price'] . '$</p>
						<a style="" class="btn btn-warning" href="addToBasket.php?dish_id=' . $rows[$i]['dish_id'] . '">Add to Basket</a>
					</a>
				</div>';
                    }
				?>
				
			</div>
		</div>
	</section>
	<script src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>