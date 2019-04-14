<!DOCTYPE>
<?php

 include("functions/functions.php");

 ?>
<html>
	<head>
		<title>Gtechzilla</title>
<<<<<<< HEAD
		<link rel="stylesheet" href="styles/style.css" media="all" type="text/css"/>
=======
		<link rel="stylesheet" href="styles/style.css" media="all" />
>>>>>>> bb403c252b33ea296fbee0cbf07aa45c9fb3acf0
	</head>
<body>
	<div class="main_wrapper">
			
			<div class="header_wrapper">
<<<<<<< HEAD
				<a href="index.php"> <img id= "logo"src ="images/" /></a>
=======
				<img id= "logo"src ="images/" />
>>>>>>> bb403c252b33ea296fbee0cbf07aa45c9fb3acf0
				<img id = "banner"src ="images/" />
				
			</div>

			<div class = "menu_wrapper">
				
				<ul id="menu_bar">
<<<<<<< HEAD
					<li><a href="index.php">Home</a></li>
					<li><a href="all_products.php">All Products</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="cart.php">Shopping Cart</a></li>
=======
					<li><a href="#">Home</a></li>
					<li><a href="#">All Products</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Shopping Cart</a></li>
>>>>>>> bb403c252b33ea296fbee0cbf07aa45c9fb3acf0
					<li><a href="#">Contact Us</a></li>
				</ul>
				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search a product"/>
						<input type="submit" name="search" value="Search"/>
                    </form>
				</div>
			</div>
			
			<div class="content_wrapper">

				<div id = "side_bar">
					<div id="sidebar_title">Categories</div>
					<ul id="categories">
						<?php
							getCats();
						?>
					</ul>
					
					<div id="sidebar_title">Brands</div>
					<ul id="categories">
						<?php
							getBrands();
						?>
					</ul>
				</div>
				<div id = "content_area">
<<<<<<< HEAD
					<div id="shopping_cart">

						<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
						Welcome Guest!
						<b style="color:yellow">shopping Cart -</b> Total Items: Total Price: <a href ="cart.php" style="color:yellow">Go to Cart</a>
						</span>

					</div>

					<div id='product_box'>

						<?php get_pro(); ?> 
						<?php getCatpro(); ?> 
						<?php getBrandpro(); ?> 
=======
					<div id='product_box'>

						<?php get_pro(); ?> 
>>>>>>> bb403c252b33ea296fbee0cbf07aa45c9fb3acf0
					</div>
				</div>

			</div>

			<div id= "footer">This is the footer</div>
			
	</div>
</body>
</html>
