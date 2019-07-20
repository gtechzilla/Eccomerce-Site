<?php
$con = mysqli_connect("localhost","root","","jadesigns");

//function to get categories
function getCats(){
    global $con;

    $get_cats = "select * from categories";
    $run_cats = mysqli_query($con,$get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

    echo "<div class='col-sm-6 text-center'>";
    echo "<div class='featured'>";
    echo "<div class='featured-img featured-img-2' style='background-image: url(images/ja/IMG-20190629-WA0053.jpg);'>";
    echo "<h2>$cat_title</h2>";
    echo "<p><a href='#' class='btn btn-primary btn-lg'>Shop now</a></p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    }
}

//function to get categories
/*function getMaterials(){
    global $con;

    $get_material = "select * from materials";
    $run_material = mysqli_query($con,$get_material);

    while ($row_cats = mysqli_fetch_array($run_material)){

        $material_id = $row_cats['material_id'];
        $material_title = $row_cats['material_title'];

    echo "<div class='col-sm-6 text-center'>";
    echo "<div class='featured'>";
    echo "<div class='featured-img featured-img-2' style='background-image: url(images/ja/IMG-20190629-WA0053.jpg);'>";
    echo "<h2>$cat_material</h2>";
    echo "<p><a href='#' class='btn btn-primary btn-lg'>Shop now</a></p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    }
}*/
//function to get products
function getPro(){
    global $con;

    $get_pro = "select * from products";
    $run_pro = mysqli_query($con,$get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)){

        $pro_id = $row_pro['product_id'];
        $pro_title = $row_pro['product_title'];
        $image_pro = $row_pro['product_image'];
        $pro_price = $row_pro['product_price'];
        $pro_keywords = $row_pro['product_keywords'];
        echo "<div class='col-md-3 col-lg-3 mb-4 text-center'>";
        echo "<div class='product-entry border'>
            <a href='#' class='prod-img'>
            <img src='admin/product_images/$image_pro' class='img-fluid' alt='$pro_title'>
            <a/>
            <div class='desc'>
                <h2>$pro_title</h2>
                <span class='price'>$pro_price</span>
                <a href='update-cart.php?action=add&id='$pro_id''><input type='submit' value='Add to Cart'></a></br>
                <input type='button' value='Choose Material'>    
            </div>";

        echo "</div>";
        echo "</div>";
        
    }
}
?>