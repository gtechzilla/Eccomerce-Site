<!DOCTYPE>
<?php
	include("../includes/db.php");
?>
<html>

	<title>Inserting Products</title>
<body bgcolor="skyblue">

	<form action="insert_products.php" method="post" enctype="multipart/form-data">

		<table align="center" width="600" border="2" bgcolor="orange">

			<tr align="center" >
				<td colspan="7"><h2>Insert New Product</h2></td>
			</tr>
			<tr>
				<td align="right">
					<b>Product title</b>
				</td>
				<td >
					<input type="text" name="product_title" size='60' required />
				</td>
			</tr>
			<tr>
				<td align="right">
					<b>Product Category</b>
				</td>
				<td>
					<select name="product_category" id="" required>
						<option>Select a category</option>
						<?php
							$get_cats ="select * from categories";
							$run_cats=mysqli_query($con,$get_cats);
							while ($row_cats=mysqli_fetch_array($run_cats)) {

								$cat_id=$row_cats['category_id'];
								$cat_title=$row_cats['category_title'];

								echo "<option value='$cat_id'>$cat_title</option>";
								
							}
						?>

					</select>
				</td>
			</tr>
			<tr>
				<td align="right">
					<b>Product Brand</b>
				</td>
				<td>
					<select required  name="product_brand">
						<option>Select a Brand</option>
						<?php
							$get_brands="select * from brands";
							$run_brands=mysqli_query($con,$get_brands);
							while ($row_brands=mysqli_fetch_array($run_brands)) {
								$brand_id=$row_brands['brand_id'];
								$brand_title=$row_brands['brand_title'];

								echo "<option value='$brand_id'>$brand_title</option>";
								
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right">
					<b>Product Image</b>
				</td>
				<td>
					<input type="file" name="product_image"  required/>
				</td>
			</tr>
			<tr>
				<td align="right">
					<b>Product Price</b>
				</td>
				<td>
					<input type="text" name="product_price" required/>
				</td>
			</tr>
			<tr>
				<td align="right">
					<b>Product Description</b>
				</td>
				<td>
					<textarea name="product_description" rows='10' cols='50' ></textarea>
				</td>
			</tr>
			<tr>
				<td align="right">
					<b>Product Keywords</b>
				</td>
				<td >
					<input type="text" name="product_keywords"  size='50' required/>
				</td>
			</tr>
			<tr align="center">
				<td colspan="7"> 
					<input type="submit" name="insert_now" align="center" value="Insert Product"/>
				</td>	
			</tr>
		</table>

	</form>

</body>

</html>
<?php

	if(isset($_POST['insert_now'])){

		//getting text data from user
		$product_title=$_POST['product_title'];
		$product_category=$_POST['product_category'];
		$product_brand=$_POST['product_brand'];
		$product_price=$_POST['product_price'];
		$product_description=$_POST['product_description'];
		$product_keywords=$_POST['product_keywords'];

		//getting image data from admin
		$product_image=$_FILES['product_image'] ['name'];
		$product_image_tmp=$_FILES['product_image'] ['tmp_name'];

		//function to upload image file to the  product_images folder
<<<<<<< HEAD
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
=======
		move_uploaded_file('$product_image_tmp','product_images/$product_image');
>>>>>>> bb403c252b33ea296fbee0cbf07aa45c9fb3acf0
		 
		//calling query to add products to select fields
		$insert_product="insert into products(product_category,product_brand,product_title,product_price,product_description,product_image,product_keywords) values('$product_category','$product_brand','$product_title','$product_price','$product_description','$product_image','$product_keywords')";

		//adding data to the database
		$insert_pro=mysqli_query($con,$insert_product);

<<<<<<< HEAD
		if($insert_pro){
=======
>>>>>>> bb403c252b33ea296fbee0cbf07aa45c9fb3acf0
		//javascript pop up and to refresh the window to the insert form page
		echo '<script>alert("Product has been inserted !")</script>';
		echo '<script>window.open("insert_products.php","_self")</script>';

	}
<<<<<<< HEAD

}
=======
>>>>>>> bb403c252b33ea296fbee0cbf07aa45c9fb3acf0
?>