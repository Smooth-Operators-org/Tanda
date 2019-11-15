<?php
 require_once $_SERVER["DOCUMENT_ROOT"].'database.php';
 if ($_POST) {
     switch ($_POST["accion"]) {
        case 'insertarRegistro':
            insertarRegistro();
            break;
        // case 'getRegistro':
        // getRegistro($_POST["salones"]);
        // break;

        default:
            # code...
            break;
     }
 }
    function insertarRegistro(){
        global $db;
        // global $mysqli;
        $UserCreated= strftime("%y-%m-%d %H:%M:%S");
        $UserSerial = Math.floor((Math.random() * 999999) + 1);
        $respuesta = [];
        $UserName = $_POST['UserName'];
        $UserLastname = $_POST['UserLastname'];
        $UserPassword = $_POST['UserPassword'];
        $UserSerial = $_POST['UserSerial'];
        $UserEmail = $_POST['UserEmail'];
        $UserPhone = $_POST['UserPhone'];
        $PlanId = $_POST['PlanId'];


        // global $db;
        // $fecha= strftime("%y-%m-%d %H:%M:%S");

        // $respuesta = [];
        // $nombre = $_POST['nombre'];
        // $id_grados = $_POST['id_grados'];
        // $tiene_canon = $_POST['tiene_canon'];
        // $status = $_POST['status'];

        if (empty($UserName) && empty($UserLastname) && empty($UserPassword) && empty($UserSerial) && empty($UserEmail) && empty($UserPhone) && empty($PlanId)) {
             $respuesta["status"] = 0;

        // if (empty($nombre) && empty($id_grados) && empty($tiene_canon) && empty($status)) {
        //     $respuesta["status"] = 0;
        }else{
            // $db->insert("salones",[
            //     "nombre" => $nombre,
            //     "id_grados" => $id_grados,
            //     "tiene_canon" => $tiene_canon,
            //     "status" => $status
            // ]);
            // $respuesta["status"] = 1;
            $db->insert("User",[
                 "UserName" => $UserName,
                 "UserLastname" => $UserLastname,
                 "UserPassword" => $UserPassword,
                 "UserSerial" => $UserSerial,
                 "UserEmail" => $UserEmail,
                 "UserPhone" => $UserPhone,
                 "UserCreated" => $UserCreated,
                 "UserStatus" => 0,
                 "UserEnable" => 0,
                 "PlanId" => $PlanId,
                 "LevelId" => 0
             ]);
             $respuesta["status"] = 1;

        }
        echo json_encode($respuesta);
    }
    // function getRegistro($id_salones){
    //     global $db;
    //     $fecha= strftime("%y-%m-%d %H:%M:%S");
    //     $obt_salon = $db->get("salones", "*", ["id_salones" => $id_salones]);
    //     $respuesta["nombre"] = $obt_salon["nombre"];
    //     $respuesta["id_grados"] = $obt_salon["id_grados"];
    //     $respuesta["tiene_canon"] = $obt_salon["tiene_canon"];
    //     $respuesta["status"] = $obt_salon["status"];
    //     echo json_encode($respuesta);
    // }    
?>