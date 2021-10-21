
	<header class="header2">
		<div class="header_wrapper2">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-2">
						<a class="main_link" href="../index.php">
							<img src="../img/logo_transparent.png" width="100%" alt="">
						</a>
					</div>
					<div class="col-lg-4">
						<nav class="header_menu">
							<a style="color: #000;" class="header_link" href="">About Us</a>
							<a style="color: #000;" class="header_link" href="">Kitchen</a>
							<a style="color: #000;" class="header_link" href="">Contact Us</a>
						</nav>
					</div>
					<div class="col-lg-3">
						<?php
							if (!isset($_SESSION['user_id'])) {
								echo '<nav class="header_menu">
									<a style="color: #000;" class="header_link" href="signin.php">Sign In</a>
									<a style="color: #000;" class="header_link" href="registration_form.php">Sign Up</a>
								</nav>';
							}
							else{
								echo '<nav class="header_menu"><a style="color: #000;" class="header_link2">' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . '</a><br>
								' . $admin . '</nav><div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Options
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="basket.php">My basket</a></li>
    <li><a class="dropdown-item" href="my_orders.php">My Orders</a></li>
    <li><a class="dropdown-item" href="quit.php">Log out</a></li>
    <li><a class="dropdown-item" href="admin_panel.php?order_status=Ordered">Admin Panel</a></li>
  </ul>
</div>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</header>