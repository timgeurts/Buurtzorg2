
<?php 
session_start();
	if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BuurtZorg | Solicitanten | Meer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

<a href="solicitanten.php"><--Terug</a>
<div class="flex">

	<div class="voorbeeld-mail" style="margin-top: -2%;">

		
			<?php
			$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
				
					if ($_GET['id']) {
						$id = $_GET['id'];
					}
					$sql = "SELECT * FROM solicitanten WHERE id ='$id'";
					$result = mysqli_query($mysqli, $sql);
					$num_results = mysqli_num_rows($result);
					for($i = 0; $i < $num_results; $i++) {
					    $row = mysqli_fetch_assoc($result);
					    ?>
					    <label style="font-size: 150%;">Solicitatie van <?php echo $row['naam'];?></label>
						<div class="mail" style="overflow: auto; overflow-wrap: break-word;"><?php
					    echo "<b>E-mail:</b> " . $row['email'] . "<br>" .
					    "<b>Telnummer:</b> " . $row['telnummer'] . "<br>" .
					    "<b>Leeftijd:</b> " . $row['leeftijd'] . "<br>" .
					    "<b>Motivatie:</b> " . $row['motivatie'] . "<br>"; 		    
					   }
					   
					   ?>

		</div>
		
		<a onclick="<?php $_SESSION['email-sol'] = $row['email'];
		$_SESSION['name-sol'] = $row['naam'];
		 ?>"class="btn btn-danger" href="soliciteerProces.php?afwijzen=<?php echo $row['id'];?>">Afwijzen</a>
		<a class="btn btn-success" href="soliciteerProces.php?accepteren=<?php echo $row['id'];?>">Accepteren</a>
</div>
</body>
</html>