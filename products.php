<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
include 'functions.php';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>JA DESIGNS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

<!-- menu and search bar-->
  <div class="colorlib-loader"></div>
  <div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.php">JA DESIGNS</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="about.php">About</a>
								<li><a href="products.php">Product</a></li>
                <li><a href="cart.php">My Orders</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php

                  if(isset($_SESSION['username'])){
                    echo '<li><a href="account.php">My Account</a></li>';
                    echo '<li><a href="logout.php">Log Out</a></li>';
                  }
                  else{
                    echo '<li><a href="login.php">Log In</a></li>';
                    echo '<li><a href="register.php">Register</a></li>';
                  }
                  ?>
                  <li class="cart"><a href="cart.php"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                  </ul>
                  </section>

								
							</ul>
						</div>
					</div>
				</div>
			</div>

		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">

				</div>
			</div>
		</div>
<!--section1 -->
		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(images/ja/IMG-20190629-WA0052.jpg);">
						</div>
						<div class="menu text-center">
							<p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Amazing Discounts</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>


<!--section2-->
		
		<div class="colorlib-featured">
			<div class="container">
				<div class="row">
					<?php getCats(); ?>

				</div>
			</div>
		</div>

		<div class="colorlib-product">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
							<h2>View All Products</h2>
						</div>
					</div>
					<div class="row row-pb-md">
						<?php getPro(); ?>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="block-27">
						   <ul>
							   <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
							  <li class="active"><span>1</span></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">5</a></li>
							  <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
						   </ul>
						</div>
						</div>
					</div>
				</div>
			</div>
	


    <footer id="colorlib-footer" role="contentinfo">
			<div class="container">

			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span>Copyright &copy; All rights reserved | JA DESIGNS</span> 
						
						</p>
					</div>
				</div>
			</div>
		</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>