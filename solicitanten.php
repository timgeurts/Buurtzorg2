
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
	<title>BuurtZorg</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="javascript/functions.js"></script>
</head>
<body style="overflow-y: scroll; ">

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


	


	</div>
		<table class="table">
			<thead>
				<tr>
				    <th scope="col">Id</th>
				    <th scope="col">Naam</th>
				    <th scope="col">Telnummer</th>
				    <th scope="col">E-mail</th>
				    <th scope="col">Leeftijd</th>
				    <th></th>

				</tr>
			</thead>
			<tbody>
				<?php
					$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
					$sql = "SELECT * FROM solicitanten";			
					$result = mysqli_query($mysqli, $sql);
					$num_results = mysqli_num_rows($result);
					for($i = 0; $i < $num_results; $i++) {
					    $row = mysqli_fetch_assoc($result);

				if ($row['status'] == 1) {
				?>
				<tr style="background-color: lime;">
				    <th scope="row"><?php echo $row['id']; ?></th>
				    <td><?php echo $row['naam']; ?></td>
				    <td><?php echo $row['telnummer']; ?></td>
				    <td><?php echo $row['email']; ?></td>
				    <td><?php echo $row['leeftijd']; ?></td>
				    <td><a href="meer.php?id=<?php echo $row['id'];?>">Meer...</a></td>
			    </tr>
			    <?php }
			    if ($row['status'] == 2) {
				?>
				<tr style="background-color: red;">
				    <th scope="row"><?php echo $row['id']; ?></th>
				    <td><?php echo $row['naam']; ?></td>
				    <td><?php echo $row['telnummer']; ?></td>
				    <td><?php echo $row['email']; ?></td>
				    <td><?php echo $row['leeftijd']; ?></td>
				    <td><a href="meer.php?id=<?php echo $row['id'];?>">Meer...</a></td>
			    </tr>
			    <?php }
			    if ($row['status'] == 0) {
				?>
				<tr style="background-color: white;">
				    <th scope="row"><?php echo $row['id']; ?></th>
				    <td><?php echo $row['naam']; ?></td>
				    <td><?php echo $row['telnummer']; ?></td>
				    <td><?php echo $row['email']; ?></td>
				    <td><?php echo $row['leeftijd']; ?></td>
				    <td><a href="meer.php?id=<?php echo $row['id'];?>">Meer...</a></td>
			    </tr>
			    <?php }} ?>
				
					   
 				





			</tbody>
		</table>
		
	

	

</body>

</html>