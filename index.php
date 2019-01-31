<!DOCTYPE>
<?php

 include("functions/functions.php");

 ?>
<html>
	<head>
		<title>Gtechzilla</title>
		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
<body>
	<div class="main_wrapper">
			
			<div class="header_wrapper">
				<img id= "logo"src ="images/" />
				<img id = "banner"src ="images/" />
				
			</div>

			<div class = "menu_wrapper">
				
				<ul id="menu_bar">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Products</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Shopping Cart</a></li>
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
				<div id = "content_area">This is content area</div>

			</div>

			<div id= "footer">This is the footer</div>
			
	</div>
</body>
</html>
