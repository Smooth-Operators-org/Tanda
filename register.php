
<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;
  $correo = $_POST['correo'];
  $mail = new PHPMailer;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
 $mail->setFrom('k.manzur13@gmail.com', 'Nuevo Contacto');
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
 // send email
    $mail = new PHPMailer;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
        
    $mail->setFrom('contacto@segura-astudillo.com', 'Contacto');
    $mail->addAddress('contacto@segura-astudillo.com', 'Administrador');
    $mail->addAddress('angelfcancun@gmail.com', 'Administrador');
         // Add a recipient
    
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->CharSet = 'UTF-8';
    
    $mail->Subject = 'Nueva solicitud de contacto segura&astudillo.com';
    
    $mail->Body    = 'Nuevo mensaje de contacto de Segura & Astudillo por parte de: <strong>'
    .$name.'  ('.$email.')</strong><br>El mensaje es el siguiente<br><br><strong>
    Nombre: '.$name.'<br>
    Correo: '.$email.'<br>
    Teléfono: '.$phone.'<br>
    Mensaje: '.$message.'</strong><br><br> 
    Contactar a la brevedad posible';
    $mail->AltBody = $mensaje;
    
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    echo '<br><p>CAPTCHA was completed successfully!</p><br>';
}
?>