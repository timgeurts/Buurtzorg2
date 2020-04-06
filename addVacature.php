<?php 
session_start();
if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg | Admin | Vacatures</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<script src="javascript/functions.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #D3D3D3;">

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
		<h1 style="position: absolute;">Buurtzorg</h1><button data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="right: 0px; top: 60px; "><img style="width: 4%; opacity: 1; position: absolute; right: 15px; top: 5px;" src="images/EN2.png"></button>
		<div class="dropdown-menu">
		    <a class="dropdown-item" href="#NL">Nederlands</a>
		    <a class="dropdown-item" href="#EN">Engels</a>
		</div>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigatie</span>
	
	

	<div class="flex">
		<form method="post" action="vacatureProces.php" style="margin-top:2%;">
			<p><h2>Maak Nieuwe Vacature</h2></p>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			Titel <input required style="width: 30%; margin-bottom: 5px;" type="text" name="titel"><br>
		    Auteur <input required style="width: 30%; margin-bottom: 5px;" type="text" name="name"><br>




		   Wijk
		    <select required style="width: 30%; margin-bottom: 5px;" name="wijk" id="cars">
		    	<option value="Default">-------------</option>
			  	<option value="Scharn">Scharn</option>
			  	<option value="Wijck">Wijck</option>
			  	<option value="Kommelkwartier">Kommelkwartier</option>
			 	<option value="Mariaberg">Mariaberg</option>
			 	<option value="Jekerdal">Jekerdal</option>
			 	<option value="Caberg">Caberg</option>
			 	<option value="Mariaberg">Mariaberg</option>
			 	<option value="Malberg">Malberg</option>
			 	<option value="Limmel">Limmel</option>
			 	<option value="Amby">Amby</option>
			 	<option value="Nazareth">Nazareth</option>
			 	<option value="Belfort">Belfort</option>
			 	<option value="Daalhof">Daalhof</option>
			</select><br>






		    Locatie <input required style="width: 30%; margin-bottom: 5px;" type="text" name="locatie"><br><br>
		    VMBO
		  	<input required type="radio" name="opl-niv" value="VMBO">
		  	HAVO
		  	<input required type="radio" name="opl-niv" value="HAVO">
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>