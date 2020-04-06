<?php 
session_start();
if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg | Admin</title>
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
		<a href="addVacature.php">XXX</a>
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
		
		<div style="font-size: 1000%;">ADMIN PAGINA</div>
	</div>

</body>
</html>