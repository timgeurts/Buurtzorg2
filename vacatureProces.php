<?php
	
	session_start();
	if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
	}

	
	//database
	$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
	$id = 0;
	
	//post toevoegen
	if (isset($_POST['submit-vacature'])) {

		$message = $_POST['bericht'];
		$name = $_POST['name'];
		$wijk = $_POST['wijk'];
		$location = $_POST['locatie'];
		$opleiding = $_POST['opl-niv'];
		$titel = $_POST['titel'];

		
		

		$mysqli->query("INSERT INTO vacature (titel, naam, wijk, locatie, opleidingsniveau, bericht, status) VALUES ('$titel', '$name', '$wijk', '$location', '$opleiding', '$message', '0')") or die("error1");
		header("location: vacature-admin.php");
		
	}
	else {
		header("Location: loginForm.php");
	}

	//post verwijderen
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$result = $mysqli->query("SELECT * FROM vacature WHERE id=$id") or die($mysqli->error());
		$result = $mysqli->query("UPDATE vacature SET status = '1' WHERE id=$id") or die($mysqli->error());
		header("location:vacature-admin.php"); 
	}

	

		
		
		
		
		
		
		
	