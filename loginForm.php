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
		<br><br>
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php">Home</a>
		<a href="vacature-gebr.php">Vacatures</a>
		<br>
		<a style="float: left;" href="loginForm.php">Inloggen</a>
	</div>

	<div id="bluehead">
		<h1 style="position: absolute;">Buurtzorg</h1>
	</div>

<span id="nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Navigatie</span>

<div class="login-page">
  <div class="form">
    <form class="login-form" action="loginProces.php" method="post">
      <input type="text" name="name" placeholder="Gebruikersnaam"/>
      <input type="password" name="password" placeholder="Wachtwoord"/>
      <button name="submit-login" type="submit">login</button>

    </form>
  </div>
</div>

	

</body>

</html>