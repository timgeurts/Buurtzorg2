<?php
	session_start();
	
	//database
	$mysqli = new mysqli('localhost', 'root', '', 'buurtzorg') or die("error");
	$email = 0;
	
	

	if (isset($_GET['wijk'])) {
		$wijk = $_GET['wijk'];

		if ($wijk == 1) {
			$_SESSION['email'] = 'wijk1@gmail.com';
		} else if ($wijk == 2) {
			$_SESSION['email'] = 'wijk2@gmail.com';
		} else if ($wijk == 3) {
			$_SESSION['email'] = 'wijk3@gmail.com';
		} else if ($wijk == 4) {
			$_SESSION['email'] = 'wijk4@gmail.com';
		} else if ($wijk == 5) {
			$_SESSION['email'] = 'wijk5@gmail.com';
		} else if ($wijk == 6) {
			$_SESSION['email'] = 'wijk6@gmail.com';
		} else if ($wijk == 7) {	
			$_SESSION['email'] = 'wijk7@gmail.com';
		} else if ($wijk == 8) {	
			$_SESSION['email'] = 'wijk8@gmail.com';
		} else if ($wijk == 9) {		
			$_SESSION['email'] = 'wijk9@gmail.com';
		} else if ($wijk == 10) {	
			$_SESSION['email'] = 'wijk10@gmail.com';
		} else if ($wijk == 11) {		
			$_SESSION['email'] = 'wijk11@gmail.com';
		} else if ($wijk == 12) {
			$_SESSION['email'] = 'wijk12@gmail.com';
		}
		
		header("location:solicitatieForm.php"); 
	}

	
