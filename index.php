<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link href="https://fonts.googleapis.com/css2?family=Gotu&family=Roboto+Mono&display=swap" rel="stylesheet">
	
	<script src="javascript/functions.js"></script>
</head>
<body>
	<div id="mySidenav" class="sidenav">
		<br><br>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php">Home</a>
		<a href="vacature-gebr.php">Vacatures</a>
		<br>
		<a style="float: left;" href="loginForm.php">Inloggen</a>
	</div>

	<div id="bluehead">
		<h1 class="titelTop" style="position: absolute;">Buurtzorg</h1>
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