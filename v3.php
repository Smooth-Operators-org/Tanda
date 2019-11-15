<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $where = $_POST['where'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $message = $_POST['message'];
 $mail->setFrom('contacto@smoothoperators.com.mx', 'Damda');
 $mail->addAddress('k.manzur13@gmail.com', 'Administrador');
 $mail->addAddress('max_8_1994@hotmail.com', 'Administrador');
 $mail->isHTML(true); 
 $mail->CharSet = 'UTF-8';
 
 $mail->Subject = 'Nueva solicitud de contacto Damda:';
 
 $mail->Body    = '<strong> Nuevo contaco de</strong><br>
                Email: ('.$email.')';
 $mail->AltBody = $mensaje;
 $mail->Body    = 'Nuevo mensaje de contacto de Damda por parte de: <strong>'
    .$name.'  ('.$email.')</strong><br>El mensaje es el siguiente<br><br><strong>
    Nombre: '.$name.'<br>
    Correo: '.$email.'<br>
    Teléfono: '.$phone.'<br>
    ¿Dondé nos encontro?: '.$where.' <br>
    Ciudad: '.$ciudad.' <br>
    Estado: '.$estado.' <br>
    Mensaje: '.$message.'</strong><br><br> 
    Contactar a la brevedad posible';
    $mail->AltBody = $mensaje;
 
 
 if(!$mail->send()) {
     $resp = 'ERROR';
 } else {
     $resp = 'OKAY';
 }
 echo json_encode( $resp );
?>