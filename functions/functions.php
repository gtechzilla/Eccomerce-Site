<?php

//establishing communication with database
$con = mysqli_connect("localhost","root","","site_ecommerce");
//getting categories


//function to fetch categories from the database
function getCats(){

	global $con;

	$get_cats='select * from categories';

	$run_cats=mysqli_query($con, $get_cats);

	while ($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id=$row_cats['category_id'];
		$cat_title=$row_cats['category_title'];
	
	echo "<li><a href='#'>$cat_title</a></li>";

	}
}

//functions to fetch brands from the database
function getBrands(){

	global $con;

	$get_brands='select * from brands';

	$run_brands=mysqli_query($con,$get_brands);

	while ($row_brands=mysqli_fetch_array($run_brands)){
		$brand_id=$row_brands['brand_id'];
		$brand_title=$row_brands['brand_title'];

		echo "<li><a href='#'>$brand_title</a></li>";
	}
}

function get_pro(){
	global $con;

	$get_pro="select * from products order by RAND() LIMIT 0,6 ";

	$run_pro=mysqli_query($con,$get_pro);

	while($row_pro=mysqli_fetch_array($run_pro)){

		$product_id=$row_pro['product_id'];
		$product_category=$row_pro['product_category'];
		$product_brand=$row_pro['product_brand'];
		$product_title=$row_pro['product_title'];
		$product_price=$row_pro['product_price'];
		$product_image=$row_pro['product_image'];

		echo "
		<div id='single_product'>
			<h3>$product_title<h3>
			<img src='admin_area/product_images/$product_image' width='180' height='180' />
			<p><b> $product_price </b></p>
			<a href='details.php' style='float:left;'>Details</a>
			<a href='index.php'><button style='float:right'>Add to Cart</button></a>
		</div>";
	}

}
?>
 