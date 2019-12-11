<?php
 $destino="k.manzur13@gmail.com";
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $message=$_POST["message"];
 $contenido="Nombre: ".$name."\nCorreo: ".$email."\nTelefono: ".$phone."\nComentario: ".$message;
 mail($destino,"Contacto", $contenido);
 header("Location: index.php");

?>