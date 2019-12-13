<?php 
     // Using Medoo namespace
 require $_SERVER["DOCUMENT_ROOT"].'/vendor/autoload.php';
 
 use Medoo\Medoo;
  
 // Initialize
 try {
     $db = new Medoo([
     'database_type' => 'mysql',
     'database_name' => 'dmcFinal',
     'server' => 'smoothoperators.com.mx',
     'username' => 'remote',
     'password' => 'D7AC3D58A7318',
     ]);
 }catch (Exception $e){
     $db = null;
     echo 'ERROR: ',  $e->getMessage();
 }
 ?> 