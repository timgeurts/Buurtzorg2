<?php 


	if (isset($_GET['wijk'])) {
		$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");

		$wijk = $_GET['wijk'];

		$sql = "SELECT * FROM vacature WHERE wijk = '$wijk'"
	}

 ?>