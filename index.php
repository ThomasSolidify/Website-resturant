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

?>
<!DOCTYPE html>
<html>
	<head>
	
	<body>



	<form method="post">
<input name="submitpurchase" id="submitpurchase" type="submit" value="logout"><br><br>

</form>
	<br>
	
	Hello, <?php echo htmlspecialchars($array_data['email']);
 //prventing an XSS cross site scripiting attack.
echo htmlspecialchars($array_data['user_id']);	?>
</body>

	
			<form method="post">
<input name="submitpurchase" id="submitpurchase" type="submit" value="logout"><br><br>

</form>

		<meta charset="UTF-8">
		<title>Cafe</title>
		<!-- w3schools bootstrap link

https://www.w3schools.com/bootstrap/		--> 

	<!--referencing bootstrap
	https://getbootstrap.com/docs/3.4/getting-started/#tools
	-->
						
					
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="scripts.js"></script>
		
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
	
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Item number</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
							
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluser_id">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				
				<div id="get_brand">
				</div>
	
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-7 col-xs-6" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Menu Items</div>
					<div class="panel-body">
						<div id="get_product">
							
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































