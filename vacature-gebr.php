<?php 
include "langconfig.php";
ini_set('display_errors', 'Off');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang["title"]; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	
	<script src="javascript/functions.js"></script>
</head>
<body style="overflow-y: scroll;">

	<div id="mySidenav" class="sidenav">
		<br><br>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php"><?php echo $lang["home"]; ?></a>
		<a href="vacature-gebr.php"><?php echo $lang["vacancies"]; ?></a>
		<br>
		<a style="float: left;" href="loginForm.php"><?php echo $lang["login"]; ?></a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;"><?php echo $lang["title"]; ?></h1>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <?php echo $lang["nav"]; ?></span>
	

	<div class="flex">
		<div>					
			<div>
				<form action="vacature-gebr.php" method="post" style="text-align: center; ">
					<?php echo $lang["fow"]; ?>:<br>
					<input type="text" name="wijknummer" placeholder="<?php echo $lang["namehood"]; ?>">
					<button type="submit" name="submit-filter"><?php echo $lang["search"]; ?></button>
					<input type="submit" name="clear-filter" value="<?php echo $lang["filter"]; ?>">
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
					    "<b>Locatie:</b> " . $row['locatie'] . "\r" . "|" . "\r" .
					    "<b>Wijk:</b> " . $row['wijk'] . "\r" . "|" . "\r" .
					    "<b>Opleiding:</b> " . $row['opleidingsniveau'] . "<br><br>" . 
					    
					    $row['bericht'] . "<br>";  ?>
					    <a href="soliciteerProces.php?wijk=<?php echo $row['wijk'];?>" id='div3'><?php echo $lang["solhere"]; ?></a>
					     <?php echo"<br>" . "</div>";}   ?>

			</div>
		</div>
	</div>

	

</body>

</html>