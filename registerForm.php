<?php 
include "langConfig.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg | Admin | Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<script src="javascript/functions.js"></script>
</head>
<body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="adminPage.php"><?php echo $lang["nav1"]; ?></a>
		<a href="vacature-admin.php"><?php echo $lang["nav2"]; ?></a>
		<a href="deletedVacature.php"><?php echo $lang["nav3"]; ?></a>
		<a href="solicitanten.php"><?php echo $lang["nav4"]; ?></a>
		<br>
		<br>
		<a href="registerForm.php"><?php echo $lang["register2"]; ?></a>
		<a style="float: left;" href="uitloggen.php"><?php echo $lang["logout"]; ?></a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;"><?php echo $lang["title"]; ?></h1><img style="width: 4%; position: fixed; right: 15px; top: 5px;" src="images/EN2.png">
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <?php echo $lang["nav"]; ?></span>

<div class="login-page">
  <div class="form">
		<form action="registerProces.php" method="post">

			<input placeholder="Gebruikersnaam" type="text" name="name"><br>

			<input placeholder="E-mail" type="email" name="email"><br>

			<input placeholder="Wachtwoord" type="password" name="password1"><br>

			<input placeholder="Wachtwoord bevestingen" type="password" name="password2"><br>
			<button name="submit-register" type="submit">Registreer</button>
			<p class="message">Geen extra account nodig?  <a href="loginForm.php">Login</a></p>
		</form>
	</div>
</div>

	

</body>

</html>