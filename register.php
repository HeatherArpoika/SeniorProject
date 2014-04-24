<?php
	include("mysql.php");

	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];
	$verify = substr(md5($email), 0, 5);
	if ($_POST['register'] == 'true') { //register
		mysqli_query($con,"INSERT INTO users (`id`, `email`, `password`, `name`, `verify`) VALUES (NULL, '".$email."', '".$password."', '".$name."', '".$verify."');");
		mail($email, 'Welcome!', 'Yay!', 'From: someone@somewhere.com');

	}
	else { //log in
		$result = mysqli_query($con,"SELECT id, password, name FROM users WHERE `email` = '".$email."';");
		$row = mysqli_fetch_array($result);
		if ($password == $row['password']) {
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['logged'] = 1;
			$_SESSION['name'] = $name;
			session_write_close();
		}
	}

	//header( 'Location: profile.php?user='.$_SESSION['id'] );
?>