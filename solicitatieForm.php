<?php 
	session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg || Solicitatie</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<script src="javascript/functions.js"></script>
</head>
<body>

	<div id="mySidenav" class="sidenav">
		<br><br>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php">Home</a>
		<a href="vacature-gebr.php">Vacatures</a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;">Buurtzorg</h1>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigatie</span>

<div class="login-page">
  <div class="form">
    <form class="login-form" action="soliciteerProces.php" method="post">
      <input type="text" name="name" placeholder="Volledige Naam"/>
      <input type="email" name="email" placeholder="E-mail"/>
      <input type="int" name="leeftijd" placeholder="Leeftijd"/>
      <input type="text" name="telnummer" placeholder="Telefoonnummer"/>
      <input name="motivatie" placeholder="Waarom wilt u hier werken?" />
      <input name="punten" placeholder="Wat zijn uw plus- en minpunten?" />
      <button name="submit-soliciteer" type="submit">Verstuur</button>
    </form>
  </div>
</div>


	

</body>

</html>