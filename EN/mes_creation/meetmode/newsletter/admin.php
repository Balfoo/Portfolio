<?php
  session_start();
  require('assets/functions.php');
  require('config.php');


  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  // use PHPMailer\PHPMailer\SMTP;

  require 'libraries/PHPMailer/Exception.php';
  require 'libraries/PHPMailer/PHPMailer.php';

  require 'libraries/PHPMailer/SMTP.php';
  if (!isset($_SESSION['user_id'])) {
    header('Location: login');
    
  }
  else{
    require('views/admin.view.php');
  }
  
  $mail = new PHPMailer();  // Cree un nouvel objet PHPMailer
	$mail->IsSMTP(); // active SMTP
	$mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
	$mail->SMTPAuth = true;  // Authentification SMTP active
	$mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = "Hestia.co.contact@gmail.com";
	$mail->Password = "atseH.com";
	$mail->SetFrom("Hestia.co.contact@gmail.com", "Hestia.co");
	$mail->Subject = $_POST['objet'];
	$mail->Body = $_POST['message'];

$address = ["clem" => "soltysiak.clement@outlook.fr", "florent" => "florent.hode@gmail.com"];
	$mail->AddAddress("ocejac@hotmail.fr");
    foreach ($address as $nameaddress => $emailaddress) {
        $mail->addBCC($emailaddress, $nameaddress);
    }
	if(!$mail->Send()) {
		echo  'Mail error: '.$mail->ErrorInfo;
	} else {
		return true;
	}