<?php

//var_dump($_POST);
//var_dump($_FILES);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader

require_once ("vendor/autoload.php");


	$mail = new PHPMailer();								// creando instancia

    //configuracion del servidor
    $mail->SMTPDebug = 1;									// Enable verbose debug output
    $mail->isSMTP();										// Set mailer to use SMTP
	//originalmente el github venia smtp1.gmail.com - se elimino el 1
    $mail->Host = 'smtp.gmail.com';							// el servidor de correo
    $mail->SMTPAuth = true;									// Enable SMTP authentication
    $mail->Username = 'luisabrig0206@gmail.com';			// SMTP username-> el correo gmail
    $mail->Password = 'kike110012';							// SMTP password
    $mail->SMTPSecure = 'tls';								// Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;										// TCP port to connect to

	
	$email = $_POST['email'];
	$nombres = $_POST['nombres'];
	$mensaje = $_POST['mensaje'];
	$adjunto = $_FILES['adjunto'];
	
	
	
    //de donde sale el correo - igual que el $mail->Username 
    $mail->setFrom('luisabrig0206@gmail.com', 'LegionGames'); //desde donde se envia el correo, y el nombre
    
	// a quien va el correo
	$mail->addAddress('luisabrigo@hotmail.com');  //correo principal ->a quien va el correo  
	
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');		//con copia al correo...
	//$mail->addBCC('bcc@example.com'); //con copia oculta al correo...
	
	//mensaje del correo
	$body ="<p>Mensaje enviado por $nombres ($email): </p><p>$mensaje</p>";
    
    $mail->isHTML(true);					//si el formato es html
    $mail->Subject = 'Informacion de juegos';			//titulo del mensaje
    $mail->Body    = "<p>Mensaje enviado por $nombres ($email): </p><img href='http://www.blog.google/static/blog/images/google-200x200.7714256da16f.png'><p>$mensaje</p>";					//cuerpo del mensaje
    //$mail->AltBody = strip_tags($body);
	
	//archivo adjunto
	if($adjunto['error'] == 0){
    $mail->addAttachment($adjunto['tmp_name'], $adjunto['name']);}
	
	//enviando correo
	if ($mail->send()){
		echo 'Su mensaje ha sido enviado';		
	} else {
		echo 'Error en el envío de su mensaje.';
	}  
	
	//redireccionando
	header('location: index.php');