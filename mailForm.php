<?php
session_start();

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

<div class="flex">

	<form method="post" action="">
		<label>Verstuur naar:</label>
		<input type="text" name="email-naar" value="<?php echo $_SESSION['email-sol']; ?>"><br> 
		<label>Verstuurd door:</label>
		<input type="text" name="email-door" placeholder="Verstuurd door..."><br>
		<label>Onderwerp:</label>
		<input type="text" name="onderwerp" placeholder="Onderwerp" value="Solicitatie Buurtzorg"><br>
		<label>Bericht:</label><br>
		<textarea name="bericht" placeholder="Bericht" style="width: 30%;height: auto;"></textarea><br>
		<input type="submit" name="submit-mail" value="Verstuur">

	</form>

</div>
</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST)) {
	$mail = new PHPMailer(true);

	$emailadres_solicitant 	= $_POST['email-naar'];
	$naam_solicitant 		= $_SESSION['name-sol'];
	$bericht 				= $_POST['bericht'];
	$onderwerp 				= $_POST['onderwerp'];

	try {
	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
	    $mail->isSMTP();                                           
	    $mail->Host       = 'mail.buurtzorg.work';                    
	    $mail->SMTPAuth   = true;                                 
	    $mail->Username   = 'phpmailer@buurtzorg.work';                   
	    $mail->Password   = 'IkBenEenErgSterkWachtwoord@2020';                           
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
	    $mail->Port       = 587;                                    

	    //Recipients
	    $mail->setFrom('phpmailer@buurtzorg.work', 'Mailer');
	    $mail->addAddress($emailadres_solicitant, $naam_solicitant);     
	    $mail->addReplyTo('phpmailer@buurtzorg.work', 'Buurtzorg');

	   

	    // Content
	    $mail->isHTML(true);                                  
	    $mail->Subject = $onderwerp;
	    $mail->Body    = $bericht;
	   

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
?>