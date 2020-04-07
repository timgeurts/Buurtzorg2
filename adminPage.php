<?php 
include "langConfig.php";
if (!isset($_SESSION["loggedin"])) {
		header("location:loginForm.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang["title"]; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	
	<script src="javascript/functions.js"></script>
</head>
<body>

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="adminPage.php"><?php echo $lang["nav1"]; ?></a>
		<a href="vacature-admin.php"><?php echo $lang["nav2"]; ?></a>
		<a href="deletedVacature.php"><?php echo $lang["nav3"]; ?></a>
		<a href="solicitanten.php"><?php echo $lang["nav4"]; ?></a>
		<br>
		<br>
		<a href="registerForm.php"><?php echo $lang["register2"]; ?></a>
		<a style="float: left;" href="uitloggen.php"><?php echo $lang["logout"]; ?></a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;"><?php echo $lang["title"]; ?></h1><img style="width: 4%; position: fixed; right: 15px; top: 5px;" src="images/EN2.png">
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <?php echo $lang["nav"]; ?></span>
	<div class="flex">
		
		<div style="font-size: 1000%;">ADMIN PAGINA</div>
	</div>

</body>
</html>