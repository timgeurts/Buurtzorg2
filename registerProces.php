<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");

if (isset($_POST['submit-register'])) {
	$username = ($_POST['name']);
	$email = ($_POST['email']);
	$password = ($_POST['password1']);
	$passwordconfirm = ($_POST['password2']);
	if ($password == $passwordconfirm) {



		$passwordhash = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO login (Naam, Email, Password) VALUES ('$username', '$email', '$passwordhash')";
		mysqli_query($mysqli, $sql);
		header("location:loginForm.php");
	}
}

