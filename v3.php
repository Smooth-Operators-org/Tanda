<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
        
    $mail->setFrom('k.manzur13@gmail.com', 'Contacto');
    $mail->addAddress('luisfertg_016@hotmail.com', 'Administrador');
    // $mail->addAddress('@gmail.com', 'Administrador');
         // Add a recipient
    
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->CharSet = 'UTF-8';
    
    $mail->Subject = 'Nueva solicitud de contacto Damda';
    
    $mail->Body    = 'Nuevo mensaje de contacto de Damda por parte de: <strong>'
    .$name.'  ('.$email.')</strong><br>El mensaje es el siguiente<br><br><strong>
    Nombre: '.$name.'<br>
    Correo: '.$email.'<br>
    Teléfono: '.$phone.'<br>
    Mensaje: '.$message.'</strong><br><br> 
    Contactar a la brevedad posible';

    $mail->AltBody = $mensaje;
    

?>
