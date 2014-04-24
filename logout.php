<?php
	session_start();
	$_SESSION['logged'] = 0;
	session_write_close();
	session_unset();
	session_destroy();
	header( 'Location: login.php' );
?>