<?php

// Create connection
$con=mysqli_connect("localhost","admin","admin","seniorproject");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ($login) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$result = mysqli_query($con,"SELECT password FROM users WHERE email = ".$email);
	if ($result == password) echo "SUCCESS";
	else echo "FAIL";
}



?>