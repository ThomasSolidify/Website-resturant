<style>
.alt_content {padding:20px;
color: magenta;}

.btn btn-info{
	   font-size: 25px;
    color:green;
}
</style>


<?php
session_start();
	//set user_id = session so it can be used as a unique identifier when adding items to cart
$user_id = $_SESSION['user_id'];
include "db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories";
    
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		
            
            <div class='aside'>
							<h3 class='aside-title'>Menu items</h3>
							
							<div class='btn-group-vertical'>
	";
	
	//https://getbootstrap.com/docs/4.0/components/button-group/
	if(mysqli_num_rows($run_query) > 0){
        $i=1;
		while($row = mysqli_fetch_array($run_query)){
            
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
            $sql = "SELECT COUNT(*) AS count_items FROM products WHERE product_cat=$i";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            $i++;
            
            
			echo "
					
                     <div type='button' class='btn navbar-btn category' cid='$cid'>
									
									<a href='#'>
										<span  ></span>
										$cat_name
										<small class='qty'>($count)</small>
									</a>
								</div>
                    
			";
            
		}
        
        
		echo "</div>";
	}
}


//Get details from product table
if(isset($_POST["getProduct"])){

	$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image']; 
            $cat_name = $row["cat_title"];
			echo "
				
                        
                        <div class='col-md-4 col-xs-6' >
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
									
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
							</div>
 
			";
		}
	}
}


if(isset($_POST["get_seleted_Category"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products,categories WHERE product_cat = '$id' AND product_cat=cat_id";
        
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            $cat_name = $row["cat_title"];
			echo "
					
                        <div class='col-xs-9 col-md-8'>
                    
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img  src='product_images/$pro_image'  style='max-height: 170px;' alt=''>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' href='#' tabindex='0' class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
							</div>
			";
		}
	}
	


	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["user_id"])){

		$user_id = $_SESSION["user_id"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Food is already added into cart..!</b>
				</div>
			";
			
			
			
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `user_id`) 
			VALUES ('$p_id','$user_id')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Added to your order!</b>
					</div>
				";
			}
		}
		}

}

//Count User cart item check to see if cart has items.
if (isset($_POST["count_item"])) {
//Your login id is the foreign key to the cart.
if (isset($_SESSION["user_id"])) {
$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[user_id]";
}

$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
echo $row["count_item"];
exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
//Get details from product table and check cart

if (isset($_SESSION["user_id"])) {
$sql = "SELECT product_id,product_title,product_price,product_image,id,qty FROM products ,cart WHERE product_id=p_id AND user_id='$_SESSION[user_id]'";
}
$query = mysqli_query($con,$sql);
if (isset($_POST["getCartItem"])) {
//display cart item in dropdown menu
if (mysqli_num_rows($query) > 0) {
$n=0;
while ($row=mysqli_fetch_array($query)) {
$n++;
$product_id = $row["product_id"];
$product_title = $row["product_title"];
$product_price = $row["product_price"];
$product_image = $row["product_image"];
$cart_item_id = $row["id"];
echo '
<div class="row">
<div class="col-md-3">'.$n.'</div>
<div class="col-md-3"><img class="img-responsive" src="product_images/'.$product_image.'" /></div>
<div class="col-md-3">'.$product_title.'</div>

</div>';

}
?>

<a style="float:right;" href="sendpayment.php" class="btn btn-warning">Checkout&nbsp;&nbsp;<span class="glyphicon glyphicon-euro"></span></a>

<a style="float:right;" href="deletecart.php" class="btn clear">delete items&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
<?php
exit();
}
}




?>