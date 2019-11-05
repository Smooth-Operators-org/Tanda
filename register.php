
<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;
  $correo = $_POST['correo'];
 $mail->setFrom('website@strake.com', 'Subscribe');
//  $mail->addAddress('r.ruvalcaba@dappertechnologies.com', 'Administrador');
 $mail->addAddress('k.manzur13@gmail.com', 'Administrador');
 $mail->addAddress('max_8_1994@hotmail.com', 'Administrador');
 $mail->isHTML(true); 
 $mail->CharSet = 'UTF-8';
 
 $mail->Subject = 'Nuevo contacto:';
 
 $mail->Body    = '<strong> Nuevo contaco de</strong><br>
                Email: ('.$correo.')';
 $mail->AltBody = $mensaje;
 
 
 if(!$mail->send()) {
     $resp = 'ERROR';
 } else {
     $resp = 'OKAY';
 }
 echo json_encode( $resp );
?>