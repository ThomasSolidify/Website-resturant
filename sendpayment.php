<style>

.row{



top:400px;



background-color:#fcc;

}


</style>


<?php

session_start();

	include("connection.php");
	include("functions.php");

	$array_data = check_login($con);
	
	
	
	
			if(isset($_POST["submitpurchase"]))
{
	echo"logged out";
	 header("Location: logout.php");
}


echo'<div class="container">
  <div class="jumbotron">
    <h1></h1>
	 <h2>Basket</h2>
    <p>Are you sure you wish to order these items?</p>
  </div>
</div>';



$sql = $sql = "SELECT product_id,product_title,product_price,product_image,id FROM products ,cart WHERE product_id=p_id";



$result = $con->query($sql);


 // start a table tag in the HTML
//https://stackoverflow.com/questions/23842268/how-to-display-image-from-database-using-php
if ($result->num_rows > 0) {
while ($row=mysqli_fetch_array($result)) {
$product_id = $row["product_id"];
$product_title = $row["product_title"];
$product_price = $row["product_price"];
$product_image = $row["product_image"];
echo '
<div class="row">
<div class="col-md-3"><img class="img-responsive" src="product_images/'.$product_image.'" />'.$product_title.'</div>

</div>';
}
}

echo "</table>";

echo $_SESSION['user_id'];








if(isset($_POST["submitpurchase"]))
{


$id = $_SESSION['user_id'];




$sql = "SELECT p_id FROM cart WHERE user_id = '$id'";
$query = mysqli_query($con,$sql);





$sql = "DELETE FROM cart WHERE user_id = '$id'";

mysqli_query($con,$sql);







 header("Location: index.php");
}




?>

<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 50%; 
}

.left{

    float: centre;
    height: 30px;
    width: 4px;
}




</style>
<!DOCTYPE html>
<html>
	<head>
	
	<body>


	<form method="post">
<input name="submitpurchase" id="submitpurchase" type="submit" value="buy"><br><br>

</form>
	<br>
	Hello, <?php echo htmlspecialchars($array_data['email']);

echo htmlspecialchars($array_data['user_id']);	?>
</body>

	
		

		<meta charset="UTF-8">
		<title>Cafe: Good food kitchen</title>
					  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="scripts.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
		
		
		

	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluser_id">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a href="#" class="navbar-brand">Cafe: Good food kitchen</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
			</ul>
			<form class="navbar-form navbar-left">

		       
			<ul class="nav navbar-nav navbar-right">
			











