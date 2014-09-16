<?php 

$host = "159.253.0.127:3306";
$username = "rickgsh85_admin";
$password = "Es6WrUuX";
$dbname = "rickgsh85_basseleur-optiek";

$con=mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



 ?>