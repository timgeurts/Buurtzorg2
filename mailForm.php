<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg || Mail Formulier</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	
	<script src="javascript/functions.js"></script>
</head>
<body>

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="adminPage.php">Home - Admin</a>
		<a href="vacature-admin.php">Vacatures - Admin</a>
		<a href="deletedVacature.php">Deleted Vacatures</a>
		<a href="solicitanten.php">Solicitanten</a>
		<br>
		<a href="indexview.php">Home - User</a>
		<a href="vacature-gebrview.php">Vacatures - User</a>
		<br>
		<br>
		<a href="registerForm.php">Iemand Registreren</a>
		<a style="float: left;" href="uitloggen.php">Uitloggen</a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;">Buurtzorg</h1><img style="width: 4%; position: fixed; right: 15px; top: 5px;" src="images/EN2.png">
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigatie</span>

<div class="flex">

	<form method="post" action="voorbeeldmail.php">
		<label>Verstuur naar:</label>
		<input type="text" name="email-naar" value="<?php echo $_SESSION['email-sol']; ?>"><br> 
		<label>Verstuurd door:</label>
		<input type="text" name="email-door" placeholder="Verstuurd door..."><br>
		<label>Onderwerp:</label>
		<input type="text" name="onderwerp" placeholder="Onderwerp" value="Solicitatie Buurtzorg"><br>
		<label>Bericht:</label><br>
		<textarea name="bericht" placeholder="Bericht" style="width: 30%;height: auto;"></textarea><br>	
		<input type="submit" name="submit-preview" value="Preview">
	</form>

</div>
</body>
</html>

<?php
if (isset($_POST['submit-mail'])) {
 	// verstuur mail
 }

if (isset($_POST['submit-preview'])) {
 	header('location: voorbeeldmail.php');
 }
?>

