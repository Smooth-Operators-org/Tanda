<?php
// require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$destino="k.manzur13@gmail.com";
$nombre=$_POST["name"];
$email=$_POST["email"];
$telefono=$_POST["phone"];
$where=$_POST["where"];
$ciudad=$_POST["ciudad"];
$estado=$_POST["estado"];
$message=$_POST["message"];

$contenido="Nombre: ".$nombre."\nCorreo: ".$email."\nTelefono: ".$telefono."¿Dondé nos encontraste?: ".$where."Ciudad: ".$ciudad."Estado: ".$estado."\nComentario: ".$message;
mail($destino,"Contacto", $contenido);
header("Location: index.html");

?>