<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mydb2";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
