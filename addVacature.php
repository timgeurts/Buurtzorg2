<?php 
session_start();
if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
}

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
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="adminPage.php">Home - Admin</a>
		<a href="vacature-admin.php">Vacatures - Admin</a>
		<a href="deletedVacature.php">Deleted Vacature</a>
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
		<form method="post" action="vacatureProces.php" style="margin-top:5%;">
			<p><h2>Maak Nieuwe Vacature</h2></p>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			Titel <input required style="width: 30%; margin-bottom: 5px;" type="text" name="titel"><br>
		    Auteur <input required style="width: 30%; margin-bottom: 5px;" type="text" name="name"><br>
		    Wijk <input required style="width: 30%; margin-bottom: 5px;" type="text" name="wijk"><br>
		    Locatie <input required style="width: 30%; margin-bottom: 5px;" type="text" name="locatie"><br>
		    VMBO
		  	<input required type="radio" name="opl-niv" value="VMBO"><br>
		  	HAVO
		  	<input required type="radio" name="opl-niv" value="HAVO"><br>
		  	VWO
		  	<input required type="radio" name="opl-niv" value="VWO"><br>

		  	<br>
            <label>Algemeen</label><br>
            <textarea type="text" placeholder="Wat algemene informatie over de vacature" name="bericht"></textarea><br>
            <label>Wat bieden wij jou? </label><br>
            <textarea  type="text" placeholder="Wat wij de solicitant bieden" name="bieden"></textarea><br>
            <label>Wat wij zoeken!</label><br>
            <textarea  type="text" placeholder="Wat wij zoeken in de solicitant" name="wwzoeken"></textarea><br>
                <label>Werkzaamheden</label><br>
            <textarea  type="text" placeholder="De werkzaamheden die de solicitant zal gaan verrichten" name="werkzaamheden"></textarea><br>

		  	
			<button type="submit" name="submit-vacature">Save</button>


			
			
		</form>
	</div>

	

</body>

</html>