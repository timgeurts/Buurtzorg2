
<?php 
session_start();

	$name = $_POST['volnaam'];
	$email = $_POST['email'];
	$telnummer = $_POST['telnummer'];
	$leeftijd = $_POST['leeftijd'];
	$waaromwerken = $_POST['waaromwerk'];
	$punten = $_POST['punten'];


	$message = "Solicitatie van: " . $email . ",<br><br>" . 
	"Naam: " . $name . "." . "<br>" .
	"Tel. nummer: " . $telnummer . "." . "<br>" .
	"Leeftijd: " . $leeftijd . " jaar." . "<br>" .
	"Waarom wil ik hier werken: " . $waaromwerken . "." . "<br>" .
	"Wat zijn uw plus- en minpunten: " . $punten . "." . "<br>";

	$subject = "Solicitatie " . $name . "<br>";




	?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg</title>
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
		<br>
		<a style="float: left;" href="loginForm.php">Inloggen</a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;">Buurtzorg</h1>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigatie</span>

<div class="voorbeeld-mail">
	<label style="font-size: 200%;">VoorbeeldMail:</label>
	<div class="mail">
		
		<div><?php $mail = "Onderwerp: " . $subject . "<br><br>" . $message; echo $mail; ?></div><br>
		<form action="phpmailer/index.php" method="post">
			<input type="hidden" name="email" value="<?php $email ?>">
			<input type="hidden" name="name" value="<?php $name ?>">
			<input type="hidden" name="message" value="<?php $message ?>">
			<input type="hidden" name="onderwerp" value="<?php $subject ?>">
			<input type="submit" name="submit-mail" value="Verstuur" onclick="">
		</form>
	</div>
	
</div>

	

	

</body>

</html>

