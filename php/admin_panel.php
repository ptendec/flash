<?php
include 'query_server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Syllab IT</title>
	<link rel="stylesheet" href="../style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color: #76405d;">
	<?php
		include 'header.php';
		$additional_class = array("", "", "", "");
		$typeOfQuery;
		$order_status = $_GET['order_status'];
		if (strcmp($order_status, "Ordered") == 0) {
			$typeOfQuery = "Ordered";
			$additional_class[0] = "makeBright";
			$linkStatus = "Cooking";
		}
		elseif (strcmp($order_status, "Cooking") == 0) {
			$typeOfQuery = "Cooking";
			$additional_class[1] = "makeBright";
			$linkStatus = "Delivering";
		}
		elseif (strcmp($order_status, "Delivering") == 0) {
			$typeOfQuery = "Delivering";
			$additional_class[2] = "makeBright";
			$linkStatus = "Delivered";
		}
		elseif (strcmp($order_status, "Delivered") == 0) {
			$typeOfQuery = "Delivered";
			$additional_class[3] = "makeBright";
			$linkStatus = "Done";
		}
	?>
	<section class="information">
		<div class="container">
			<div class="row">
				<?php 
					echo '<div class="col">
					<button onclick="window.location.href=\'' . "admin_panel.php?order_status=Ordered" . ' \'" id="changePageButton2" class="changePageButton ' . $additional_class[0] . ' ">Ordered</button>				
					</div>
				<div class="col">
					<button onclick="window.location.href=\'' . "admin_panel.php?order_status=Cooking" . ' \'" id="changePageButton2" class="changePageButton ' . $additional_class[1] . ' ">Cooking</button>
				</div>
				<div class="col">
					<button onclick="window.location.href=\'' . "admin_panel.php?order_status=Delivering" . ' \'" id="changePageButton2" class="changePageButton ' . $additional_class[2] . ' ">Delivering</button>
				</div>
				<div class="col">
					<button onclick="window.location.href=\'' . "admin_panel.php?order_status=Delivered" . ' \'" id="changePageButton2" class="changePageButton ' . $additional_class[3] . ' ">Delivered</button>
				</div>';
				?>
				
			</div>
			<div class="row">
				<div class="col-lg-12 p-0">
					<div id="first_page" class="first_page">
						<div class="container-fluid">
							<div class="row">
								<?php
								$queryToGetOrders = "SELECT * FROM orders INNER JOIN dish ON orders.dish_id = dish.dish_id INNER JOIN users ON orders.user_id = users.user_id WHERE status = '$typeOfQuery'";
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
									<p style="width: 200px;">Change status to:</p><a style="background-color: #76405d;color: #fff;display: inline-block;margin-bottom: 40px;" class="btn" 
									href="change_status.php?order_id=' . $rows[$i]['order_id'] . '&changeStatusTo=' . $linkStatus . '&user_id=' . $rows[$i]['user_id'] . '">' . $linkStatus .'</a>
									</div>';
								}
								?>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<script src="../js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<!-- <table>
	<tr>
		<td>Ячейка на две строки</td>
		<td>Ячейка 2х2</td>
		<td>Ячейка 2х3</td>
	</tr>
	<tr>
		<td>Ячейка 3х2</td>
		<td>Ячейка 3х3</td>
	</tr>
	<tr>
		<td>Ячейка на две строки</td>
		<td>Ячейка 4х2</td>
		<td>Ячейка 4х3</td>
	</tr>
	<tr>
		<td>Ячейка 5х2</td>
		<td>Ячейка 5х3</td>
	</tr>
</table> -->