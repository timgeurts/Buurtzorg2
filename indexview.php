<?php 
session_start();
	if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg | Admin | Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<script src="javascript/functions.js"></script>
</head>
<body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="adminPage.php">Home - Admin</a>
		<a href="indexview.php">Home - User</a>
		<a href="vacature-admin.php">Vacatures - Admin</a>
		<a href="vacature-gebrview.php">Vacatures - User</a>
		<a href="deletedVacature.php">Deleted Vacature</a>
		<a href="solicitanten.php">Solicitanten</a>
		<br>
		<br>
		<a href="registerForm.php">Iemand Registreren</a>
		<a style="float: left;" href="uitloggen.php">Uitloggen</a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;">Buurtzorg</h1>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigatie</span>

<div class="containerIndex">
	<div id="indexfoto">
		<img src="images/buurtzorg.jpg" class="imagebuurtzorg">	
	</div>
		<div id="textIndex">
			<h1>Over ons!!!</h1>
			<h3>Contrary to popular belief, Lorem Ipsum is not simply random text. <br>It has roots in a piece of classical Latin literature from 45 BC, making it over <br>2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney <br>College in Virginia, looked up one of the more obscure Latin words, consectetur, <br>from a Lorem Ipsum passage, and going through the cites of the word i<br> classical literature, discovered the undoubtable source.</h3>
		</div>
	</div>

</body>

</html>