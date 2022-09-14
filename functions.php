<?php

function check_login($con)
{
//check if logged in
	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
//fetch data from database
			$array_data = mysqli_fetch_assoc($result);
			return $array_data;
		}
	}

	//redirect to login need to login.php
	header("Location: login.php");
	die;

}

