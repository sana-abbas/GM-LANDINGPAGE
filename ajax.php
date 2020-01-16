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
    $mail->Username   = 'gartenmanufactur@gmail.com';
    $mail->Password   = 'msn975$#';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
		$mail->setFrom('gartenmanufactur@gmail.com');
		$mail->addAddress("sana.abbhaid@gmail.com");
		//$mail->addAddress("marion.schleifer@gmail.com");
	  //$mail->addAddress("nadia.baldelli@gmx.ch");
		$mail->isHTML(true);
    $mail->Subject = "Kontaktieren Sie";
    $mail->Body    = "Name: $name <br> <br>
    				  				Email: $email <br> <br>
    				  				Service Required: $services";
    if($mail->send()){
		echo  "Email Sent";
		}else{
			var_dump($mail);
		}
}

?>
