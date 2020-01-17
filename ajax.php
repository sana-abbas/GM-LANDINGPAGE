<?php
date_default_timezone_set('Asia/Karachi');
require __DIR__ .'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['formData'])) {
	$name = $_POST['formData']['name'];
	$lastName = $_POST['formData']['lastName'];
	$street = $_POST['formData']['street'];
	$number = $_POST['formData']['number'];
	$zip = $_POST['formData']['zip'];
	$location = $_POST['formData']['location'];
	$fone = $_POST['formData']['fone'];
	$email = $_POST['formData']['email'];
	$correspondence = $_POST['formData']['correspondence'];
	$services = $_POST['formData']['service'];
 	$message = $_POST['formData']['message'];

	$mail = new PHPMailer;

		$mail->isSMTP(true);
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'gartenmanufactur.ag@gmail.com';
    $mail->Password   = 'msn975$#';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
	$mail->setFrom('gartenmanufactur.ag@gmail.com');
	$mail->addAddress("sana.abbhaid@gmail.com");
	//$mail->addAddress("marion.schleifer@gmail.com");
  //	$mail->addAddress("baldellinadia@gmail.com");
  	//$mail->addAddress("nadia.baldelli@gmail.com");
	$mail->isHTML(true);
    $mail->Subject = "Kontaktieren Sie Uns";
    $mail->Body    = "Vorname: $name <br> <br>
											Nachname: $lastName <br/> <br/>
											Strasse: $street <br /> <br />
											Nr.: $number <br /> <br />
											PLZ: $zip <br /> <br />
											Ort: $location <br /> <br />
											Telefon: $fone <br/> <br />
    				  				Email: $email <br> <br>
											Korrespondence: $correspondence <br /> <br />
    				  				Service Required: $services <br /> <br />
											Nachricht: $message";
    if($mail->send()){
		echo  "Email Sent";
		}else{
			var_dump($mail);
		}
}

?>
