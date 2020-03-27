<?php
session_start();

if (isset($_POST['submit-login'])) {
	$username = $_POST['name'];
	$password = $_POST['password'];
	$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");		

	$result = mysqli_query($mysqli, "SELECT * FROM login WHERE Naam = '$username'")
	  	or die("Failed to query database ". mysqli_error($conn));
	$row = mysqli_fetch_array($result);

	$pwdcheck = password_verify($password, $row['Password']);

	if ($pwdcheck == true) {
			$_SESSION["loggedin"] = true;
			header("Location: adminPage.php");
	}
	else {
		$msg = "Uw naam of wachtwoord is incorrect!!!";
	}
}
else {
	header("location:login.php");
}
