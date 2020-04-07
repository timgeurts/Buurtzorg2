<?php 
include "langConfig.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang["title"]; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link href="https://fonts.googleapis.com/css2?family=Gotu&family=Roboto+Mono&display=swap" rel="stylesheet">
	
	<script src="javascript/functions.js"></script>
</head>
<body>
	<div id="mySidenav" class="sidenav">
		<br><br>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php"><?php echo $lang["home"]; ?></a>
		<a href="vacature-gebr.php"><?php echo $lang["vacancies"]; ?></a>
		<br>
		<a style="float: left;" href="loginForm.php"><?php echo $lang["login"]; ?></a>
	</div>

	<div id="bluehead">
		<h1 class="titelTop" style="position: absolute;"><?php echo $lang["title"]; ?></h1>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <?php echo $lang["nav"]; ?></span>

<div class="containerIndex">
	<div id="indexfoto">
		<img src="images/buurtzorg.jpg" class="imagebuurtzorg">	
	</div>
		<div id="textIndex">
			<h1><?php echo $lang["descriptionhead"]; ?></h1>
			<h3><?php echo $lang["description"]; ?></h3>
		</div>
	</div>
	
</body>

</html>