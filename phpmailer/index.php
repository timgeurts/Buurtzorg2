<?php

/*
	* Vang eerst de gegevens van het formulier op.
	* Tip 1: kijk naar je <form> tag en bekijk de waarde van het attribuut 'method'
	* Tip 2: Je krijgt een array van PHP cadeau
	* Tip 3: Een array kun je uitlezen met blokhaken [ ... ]

	Haal in de volgende regels de slashes weg en vul de regels aan met de juiste code
	(invuller = invuller van het formulier)
*/

$emailadres_invuller 	= $_POST['email'];
$naam_invuller 		= $_POST['name'];
$bericht 				= $_POST['message'];
$onderwerp 			= $_POST['onderwerp'];


/* **************************************************************
* NIETS AANPASSEN HIERONDER TOT DE LIJN WAAR STAAT: "PAS AAN"
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Import the PHPMailer class into the global namespace
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// SMTP needs accurate times
date_default_timezone_set('Etc/UTC');
//Create a new PHPMailer instance
$mail 					= new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Set the hostname of the mail server
$mail->Host 			= 'mail.buurtzorg.work';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port 			= 587;
//Whether to use SMTP authentication
$mail->SMTPAuth 		= true;
//Username to use for SMTP authentication
$mail->Username 		= 'phpmailer@buurtzorg.work';
//Password to use for SMTP authentication
$mail->Password 		= 'IkBenEenErgSterkWachtwoord@2020';
//Set who the message is to be sent from
$mail->setFrom('mailbot@buurtzorg.be', 'Buurtzorg');
//convert HTML into a basic plain-text alternative body
$mail->SMTPSecure 		= 'tls';
$mail->SMTPAutoTLS 		= false;
$mail->SMTPKeepAlive 	= true;
$mail->SMTPOptions 		= array(
							'ssl' => array(
								'verify_peer' => false,
								'verify_peer_name' => false,
								'allow_self_signed' => true
							)
						);


/************************************************************************
* PAS AAN:
* PAS HIER HET E-MAILADRES AAN WAAR JE DE E-MAIL NAAR TOE WILT STUREN
* Zorg dat er een e-mail naar de invuller van het formulier wordt gestuurd
* en een afschrift naar jezelf (dus waarschijnlijk iets als: groep1s@newapps.be)
*/

$mail->addAddress('timgeurts1304@gmail.com', 'Tim Geurts');
$mail->addAddress($emailadres_invuller, $naam_invuller); //Eventueel meerdere adressen toevoegen


/*
* PAS AAN:
* PAS HIER HET ONDERWERP AAN: zie vars bovenaan
*/
$mail->Subject = $onderwerp;


/*
* PAS AAN:
* PAS HIER DE BODY (BERICHT) VAN DE E-MAIL AAN: zie vars bovenaan
*/
$body = $bericht;

/*
* PAS AAN:
* PAS HIER HET REPLY ADRES AAN, waarschijnlijk iets als: groep1s@newapps.be
*/
$mail->addReplyTo('phpmailer@buurtzorg.work', 'New Apps');


/************************************************************************
* PAS HIERONDER NIETS MEER AAN
*/

$mail->msgHTML($body);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    header( "Refresh:3; /vacature-gebr.php", true, 303);
}