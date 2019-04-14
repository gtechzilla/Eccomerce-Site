<!DOCTYPE>
<?php

 include("functions/functions.php");

 ?>
<html>
	<head>
		<title>Gtechzilla</title>
		<link rel="stylesheet" href="styles/style.css" media="all" type="text/css"/>
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
				<div id = "content_area">
					<div id="shopping_cart">

						<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
						Welcome Guest!
						<b style="color:yellow">shopping Cart -</b> Total Items: Total Price: <a href ="cart.php" style="color:yellow">Go to Cart</a>
						</span>

					</div>

					<div id='product_box'>
                        <?php
                        if (isset($_GET['product_id'])){

                            $product_id = $_GET['product_id'];
                            $get_pro="select * from products where product_id='$product_id'";

                            $run_pro=mysqli_query($con,$get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){

                                    $product_id=$row_pro['product_id'];
                                    $product_title=$row_pro['product_title'];
                                    $product_price=$row_pro['product_price'];
                                    $product_image=$row_pro['product_image'];
                                    $product_description =$row_pro['product_description'];

                                    echo "
                                    <div id='single_product'>

                                        <h3>$product_title<h3>
                                    
                                        <img src='admin_area/product_images/$product_image' width='400' height='300' />
                                    
                                        <p><b> $product_price </b></p>
                                        <p>$product_description</p>
                                    
                                        <a href='index.php?product_id=$product_id' style='float:left;'>Go Back</a>
                                    
                                        <a href='index.php?product_id=$product_id'><button style='float:right'>Add to Cart</button></a>
                                    
                                        </div>";
                                }
                        }

                        ?>
					</div>
				</div>

			</div>

			<div id= "footer">This is the footer</div>
			
	</div>
</body>
</html>
