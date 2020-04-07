<?php 
include "langConfig.php";

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

<div class="login-page">
  <div class="form">
    <form class="login-form" action="loginProces.php" method="post">
      <input type="text" name="name" placeholder="<?php echo $lang["lname"] ?>"/>
      <input type="password" name="password" placeholder="<?php echo $lang["lpass"] ?>"/>
      <button name="submit-login" type="submit"><?php echo $lang["login"]; ?></button>

    </form>
  </div>
</div>

	

</body>

</html>