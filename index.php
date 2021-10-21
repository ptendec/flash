<?php
	include 'php/query_server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Flash</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">
	
</head>
<body>
	<header class="header">
		<div class="header_wrapper">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-2">
						<a class="main_link" href="index.php">
							<img src="img/logo_transparent.png" width="100%" alt="">
						</a>
					</div>
					<div class="col-lg-5">
						<nav class="header_menu">
							<a class="header_link" href="">About Us</a>
							<a class="header_link" href="">Kitchen</a>
							<a class="header_link" href="">Contact Us</a>
						</nav>
					</div>
					<div class="col-lg-3">
						<?php
							if (!isset($_SESSION['user_id'])) {
								echo '<nav class="header_menu">
									<a style="color: #fff;" class="header_link" href="php/signin.php">Sign In</a>
									<a style="color: #fff;" class="header_link" href="php/registration_form.php">Sign Up</a>
								</nav>';
							}
							else{
								echo '<nav class="header_menu"><a style="color: #fff;" class="header_link2">' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . '</a><br>
								' . $admin . '</nav><div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Options
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="php/basket.php">My basket</a></li>
    <li><a class="dropdown-item" href="php/my_orders.php">My Orders</a></li>
    <li><a class="dropdown-item" href="php/quit.php">Log out</a></li>
    <li><a class="dropdown-item" href="php/admin_panel.php?order_status=Ordered">Admin Panel</a></li>
  </ul>
</div>';
							}
						?>
				</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="wrapper_of_article_header">
							<article class="preview_article">
								<h1 class="text_preview">Flash Food Delivery</h1><br>
								<p class="text_preview">Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Doloremque explicabo rerum, at facilis, odit, libero repellat eum mollitia quaerat illo, magnam fuga dolorem et. Eveniet tempore reiciendis facilis amet numquam veritatis, fugit quaerat facere maiores animi placeat beatae similique delectus pariatur aperiam aut sunt omnis consequuntur illo. Ab, cupiditate, assumenda.</p>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="rooms">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="rooms_h">Menu</p>
				</div>
				<?php
					$queryToGetTypeOfDish = "SELECT * FROM typeOfDish";
					$result = $connect->query($queryToGetTypeOfDish);
					while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                    }
                    for($i = 0; $i < count($rows); $i++){
                    	echo '<div class="col-lg-4">
					<div class="wrapper_room_preview">
						<a href="php/typeOfDish.php?typeOfDish_id=' . $rows[$i]['typeOfDish_id'] . ' " class="img">
							<img src=" ' . $rows[$i]['picture'] . ' " class="room_img" alt="">
						</a>
						<a class="room_description" href="php/typeOfDish.php?typeOfDish_id=' . $rows[$i]['typeOfDish_id'] . ' ">
							<p class="type_of_room"> ' . $rows[$i]['name'] . ' </p>
							<p class="description_p"> ' . $rows[$i]['description'] . ' </p>
						</a>
						<a href="php/typeOfDish.php?typeOfDish_id=' . $rows[$i]['typeOfDish_id'] . ' " class="booking_button">More</a>
					</div>
				</div>';
                    }
				?>
				
			</div>
		</div>
	</section>
	<section class="consulting">
		<div class="dark_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="contact_us_p">Свяжитесь с нами</p>
					</div>
					<div class="col-lg-12">
						<form action="">
							<input class="contact_us_input" type="text" placeholder="Ваше имя">
							<input class="contact_us_input" type="text" placeholder="Ваш номер">
							<input class="contact_us_input" type="text" placeholder="Ваше email">
							<input class="contact_us_input extended" type="text" placeholder="Ваш вопрос">
							<button class="contact_us_submit">Отправить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>