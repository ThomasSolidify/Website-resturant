
	<?php
	session_start();
	include("connection.php");
	include("functions.php");
$cm_user_id = $_SESSION["user_id"];
// Create connection

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
			mysqli_query($con,$sql);

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}
header("location:index.php");

?>
