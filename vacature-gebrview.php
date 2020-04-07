<?php 
session_start();
ini_set('display_errors', 'Off');
	if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg | Admin | Vacature</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<script src="javascript/functions.js"></script>
</head>
<body style="overflow-y: scroll;">

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="adminPage.php">Home - Admin</a>
		<a href="indexview.php">Home - User</a>
		<a href="vacature-admin.php">Vacatures - Admin</a>
		<a href="vacature-gebrview.php">Vacatures - User</a>
		<a href="deletedVacature.php">Deleted Vacature</a>
		<a href="solicitanten.php">Solicitanten</a>
		
		<br>
		<br>
		<a href="registerForm.php">Iemand Registreren</a>
		<a style="float: left;" href="uitloggen.php">Uitloggen</a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;">Buurtzorg</h1>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigatie</span>
	

	<div class="flex">
		<div>					
			<div>
				<form action="vacature-gebr.php" method="post" style="margin-top: 1.5%;">
					filter op wijken:<br>
					<input type="text" name="wijknummer" placeholder="Naam wijk">
					<button type="submit" name="submit-filter">Zoek</button>
					<input type="submit" name="clear-filter" value="Leeg filter">
				</form>
				<div class="container-vacature">
				
				<?php 
				
					$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
					$wijknummer = $_POST['wijknummer'];
					if (!isset($_POST['submit-filter'])) {

						$sql = "SELECT * FROM vacature WHERE status = '0'";
					}
					else {
						if ($wijknummer == 'Scharn' || $wijknummer == 'Wijck' || $wijknummer == 'Kommelkwartier' || $wijknummer == 'Mariaberg' || $wijknummer == 'Jekerdal' || $wijknummer == 'Caberg' || $wijknummer == 'Malberg' || $wijknummer == 'Limmel' || $wijknummer == 'Amby' || $wijknummer == 'Nazareth' || $wijknummer == 'Belfort' || $wijknummer == 'Daalhof') {

							$sql = "SELECT * FROM vacature WHERE wijk = '$wijknummer' AND status = '0'";	
						}
						else {
							$sql = "SELECT * FROM vacature WHERE status = '0'";

						}
						
					}
					if (isset($_POST['clear-filter'])) {
						$wijknummer = 0;
						
					}
					



					
					$result = mysqli_query($mysqli, $sql);
					$num_results = mysqli_num_rows($result);
					for($i = 0; $i < $num_results; $i++) {
					    $row = mysqli_fetch_assoc($result);

					    echo "<div class='div1'>" . 
					    "<div id='div2'>" . $row['titel'] . "</div>" .  "<br>" .
					    "<b>Auteur:</b> " . $row['naam'] . "\r" . "|" . "\r" .
					    "<b>Locatie:</b> " . $row['locatie'] . "<br>" .
					    "<b>Wijk:</b> " . $row['wijk'] . "\r" . "|" . "\r" .
					    "<b>Opleiding:</b> " . $row['opleidingsniveau'] . "<br><br>" . 
					    
					    $row['bericht'] . "<br>";  ?>
					    <a href="soliciteerProces.php?wijk=<?php echo $row['wijk'];?>" id='div3'>Soliciteer hier</a>
					     <?php echo"<br>" .
					    "</div>";}   ?>
			</div>
		</div>
	</div>

	

</body>

</html>