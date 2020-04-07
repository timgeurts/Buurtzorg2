	
<?php 
include "langConfig.php";

	$name = 'Buurtzorg';
	$email_sol = $_SESSION['email-sol'];
	$name_sol = $_SESSION['name-sol'];
	$bericht = $_POST['bericht'];
	$onderwerp = $_POST['onderwerp'];
	
	


	$message = "Solicitatie van: " . $name_sol . ",<br><br>" . 
	$bericht . "<br><br>".
	"Groetjes, " . "<br>" .
	$name;
	



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
<a href="mailForm.php"><--Terug</a>
<div class="voorbeeld-mail">
	<label style="font-size: 200%;">VoorbeeldMail:</label>
	<div class="mail">
		
		<div><?php $mail = "Onderwerp: " . $onderwerp . "<br><br>" . $message; echo $mail; ?></div><br>
		<form action="phpmailer/index.php" method="post">
			<input type="hidden" name="email" value="<?php $email_sol ?>">
			<input type="hidden" name="name" value="<?php $name_sol ?>">
			<input type="hidden" name="message" value="<?php $message ?>">
			<input type="hidden" name="onderwerp" value="<?php $onderwerp ?>">
			<input type="submit" name="submit-mail" value="Verstuur" onclick="">
		</form>
	</div>
	
</div>

	

	

</body>

</html>

