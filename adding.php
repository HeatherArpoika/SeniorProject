<?php
	include("mysql.php");
	//echo "here<br>";

	$name = $_POST['name'];
	//echo $name."<br>";
	mysqli_query($con,"INSERT INTO recipes (`id`, `name`) VALUES (NULL, '".$name."');");

	//echo "bye";
	header( 'Location: recipes.php?name='.$name );
?>