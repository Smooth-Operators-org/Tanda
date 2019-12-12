<?php 
    $db = "dmcFinal"; //Está será el nombre de mi base de datos
    $usuario = "remote"; //Está será el nombre de mi usuario
    $password = "D7AC3D58A7318"; //Está será la contraseña de mi usuario
    $server = "smoothoperators.com.mx"; //Está será la URL de mi servidor

    $conectar = mysqli_connect($server, $usuario, $password, $db);
    if(!$conectar) {
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
?>