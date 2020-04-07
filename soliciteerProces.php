<?php
	include "langConfig.php";
	
	//database
	$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
	$email = 0;
	
	

	if (isset($_GET['wijk'])) {
		$wijk = $_GET['wijk'];

		if ($wijk == 'Scharn') {
			$_SESSION['email'] = 'scharn@buurtzorg.work';
		} else if ($wijk == 'Wijck') {
			$_SESSION['email'] = 'wijck@buurtzorg.work';
		} else if ($wijk == 'Kommelkwartier') {
			$_SESSION['email'] = 'kommelkwartier@buurtzorg.work';
		} else if ($wijk == 'Mariaberg') {
			$_SESSION['email'] = 'mariaberg@buurtzorg.work';
		} else if ($wijk == 'Jekerdal') {
			$_SESSION['email'] = 'jekerdal@buurtzorg.work';
		} else if ($wijk == 'Caberg') {
			$_SESSION['email'] = 'caberg@buurtzorg.work';
		} else if ($wijk == 'Malberg') {	
			$_SESSION['email'] = 'malberg@buurtzorg.work';
		} else if ($wijk == 'Limmel') {	
			$_SESSION['email'] = 'limmel@buurtzorg.work';
		} else if ($wijk == 'Amby') {		
			$_SESSION['email'] = 'amby@buurtzorg.work';
		} else if ($wijk == 'Nazareth') {	
			$_SESSION['email'] = 'nazareth@buurtzorg.work';
		} else if ($wijk == 'Belfort') {		
			$_SESSION['email'] = 'belfort@buurtzorg.work';
		} else if ($wijk == 'Daalhof') {
			$_SESSION['email'] = 'daalhof@buurtzorg.work';
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
	header("location: mailForm.php");
		
	}

if ($_GET['afwijzen']) {
	$id = $_GET['afwijzen'];
	$result = $mysqli->query("UPDATE solicitanten SET status = '2' WHERE id=$id") or die("error");
	header("location: solicitanten.php");
		
	}
