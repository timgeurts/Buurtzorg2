<?php
	session_start();
	
	//database
	$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
	$email = 0;
	
	

	if (isset($_GET['wijk'])) {
		$wijk = $_GET['wijk'];

		if ($wijk == 1) {
			$_SESSION['email'] = 'wijk1@gmail.com';
		} else if ($wijk == 2) {
			$_SESSION['email'] = 'wijk2@gmail.com';
		} else if ($wijk == 3) {
			$_SESSION['email'] = 'wijk3@gmail.com';
		} else if ($wijk == 4) {
			$_SESSION['email'] = 'wijk4@gmail.com';
		} else if ($wijk == 5) {
			$_SESSION['email'] = 'wijk5@gmail.com';
		} else if ($wijk == 6) {
			$_SESSION['email'] = 'wijk6@gmail.com';
		} else if ($wijk == 7) {	
			$_SESSION['email'] = 'wijk7@gmail.com';
		} else if ($wijk == 8) {	
			$_SESSION['email'] = 'wijk8@gmail.com';
		} else if ($wijk == 9) {		
			$_SESSION['email'] = 'wijk9@gmail.com';
		} else if ($wijk == 10) {	
			$_SESSION['email'] = 'wijk10@gmail.com';
		} else if ($wijk == 11) {		
			$_SESSION['email'] = 'wijk11@gmail.com';
		} else if ($wijk == 12) {
			$_SESSION['email'] = 'wijk12@gmail.com';
		}
		
		header("location:solicitatieForm.php"); 
	}

	if (isset($_POST['submit-soliciteer'])) {
		
		$name = $_POST['name'];
		$telnummer = $_POST['telnummer'];
		$emailadress = $_POST['email'];
		$leeftijd = $_POST['leeftijd'];
		$motivatie = $_POST['motivatie'];
		
		

		$mysqli->query("INSERT INTO solicitanten (naam, email, telnummer, leeftijd, motivatie, status) VALUES ('$name', '$emailadress', '$telnummer', '$leeftijd', '$motivatie', '0')") or die("error1");
		header("location: vacature-gebr.php");
		
	}
	
if ($_GET['accepteren']) {
	$id = $_GET['accepteren'];
	$result = $mysqli->query("UPDATE solicitanten SET status = '1' WHERE id=$id") or die("error");
	header("location: solicitanten.php");
		
	}

if ($_GET['afwijzen']) {
	$id = $_GET['afwijzen'];
	$result = $mysqli->query("UPDATE solicitanten SET status = '2' WHERE id=$id") or die("error");
	header("location: solicitanten.php");
		
	}