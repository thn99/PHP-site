<?php 

session_start();
	$action = $_GET['action'];
	
	header("Location: ../products.php");
?>