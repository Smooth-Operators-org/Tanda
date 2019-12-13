$(document).ready(function() {

  $("#myBtn").click(function() {

    // $("#myBtn").hide();
    // $("#myModal")[0].reset();
    $("#btnRegistrar").text("Unete");
  });

  $("#btnRegistrar").click(function() {
    var obj = {};

    obj = {
      accion: "insertarRegistro"
    };
    obj["UserName"] = $("#UserName").val();
    obj["UserLastname"] = $("#UserLastname").val();
    obj["UserPassword"] = $("#UserPassword").val();
    obj["UserEmail"] = $("#UserEmail").val();
    obj["UserPhone"] = $("#UserPhone").val();
    obj["PlanId"] = $("#PlanId").val();

    // obj.push("UserName", UserName);
    // obj.push("UserLastname", UserLastname);
    // obj.push("UserPassword", UserPassword);
    // obj.push("UserEmail", UserEmail);
    // obj.push("UserPhone", UserPhone);
    // obj.push("PlanId", PlanId);

    switch (obj.accion) {
      case "insertarRegistro":
        $.post(
          "funciones.php",
          obj,
          function(respuesta) {
            if (respuesta.status == 0) {
            } else if (respuesta.status == 1) {
              location.reload();
            } else {
              errorAlert();
            }
          },
          "JSON"
        );
        break;
      default:
        break;
    }
  });

  $("#btn-cancel").click(function() {
    $("#myBtn").show();
  });
/****************************************/
//  ------ CONSULTA USUARIO ------ //
  var obj = {};
  $("#myBtnenviar").click(function() {
    obj = {
      accion: "getRegistro"
    };
    $("#btnConsultar").text("Canjea tu Cupón");
  });

  $("#btnConsultar").click(function() {
    obj["UserEmail"] = $("#usuario").val();
    // obj["UserPassword"] = $("#password").val();
    switch (obj.accion) {
      case "getRegistro":
        $.post(
          "funciones.php",
          obj,
          function(respuesta) {
            if (respuesta.status == 0) {
              // swal("Usuario no Registrado", "Presionar Registrar", "error");
              
              
              Swal.fire({
                icon: "error",
                title: "Error",
                text: "Usuario no registrado!",
                showConfirmButton	: false,
                showCancelButton: true,
                cancelButtonText: "Registrate"
                // showConfirmButton: false,	                  
                // footer:
                //   "<a data-dismiss='modal' data-toggle='modal' href='#myModal'>Registrate</a>",
                // timer: 3000
              });
              $('#myModalenviar').modal('hide');
              // $("#myModal").modal('show');
              
              $("#myModal").modal();

            } else if (respuesta.status == 1) {
              // swal("Usuario validado!", "Presionar Continuar", "success")
              Swal.fire({
                icon: "success",
                title: "Validado",
                text: "Tu cupon se ha validado",
                showConfirmButton	: false,
                showCancelButton: true,
                cancelButtonText: "Iniciar Sesion",
              });
                $('#myModalenviar').modal('hide');
                $("#getmyModalPass").modal('show');

                // showConfirmButton: false,	                  
                // footer:
                //   "<a data-dismiss='modal' data-toggle='modal' href='#myModal'>Registrate</a>",
                // timer: 3000
              // });
              // Swal.fire({
              //   title: "Ingresa tu contraseña",
              //   input: "password",
              //   inputPlaceholder: 'Contraseña'
              // }).then((value) => {
              //   swal(`You typed: ${value}`);
              // });
              
              
              // ; 
              // if ({password}) {
                
                // $('#myModalenviar').modal('hide');
                // $contra=password
                
              // }
              // if (password) {
              //   Swal.fire(`Entered password: ${password}`)
              // }
              // const {value: password} = await Swal.fire({
              //   title: 'Ingresar Contraseña',
              //   input: 'password',
              //   inputPlaceholder: 'Contraseña'
              // });
              // if (password){
              //   Swal.fire('Entered password: ${password}');
              // }
              // if (empty) {
                
              // }
              // location.reload();
              
            } 
            else {
              errorAlert();
            }
          },
          "JSON"
        );
        break;
      default:
        break;
    }
  });
  $("#btn-cancel").click(function() {
    $("#myBtnenviar").show();
  });
});

/****************************************/
//  ------ CONSULTA PASSWORD ------ //
 var obj = {};
 $("#btnConsultarPass").click(function() {
   obj = {
     accion: "getPass"
   };
   $("#btnConsultarPass").text("Logeate");
 });

 $("#btnConsultarPass").click(function() {
  // obj["UserLastname"] = $("#UserLastname").val();
   obj["UserPassword"] = $("#password").val();
   switch (obj.accion) {
     case "getPass":
       $.post(
         "funciones.php",
         obj,
         function(respuesta) {
           if (respuesta.status == 0) {
             Swal.fire({
               icon: "error",
               title: "Error",
               text: "Contraseña Incorrecta",
               showConfirmButton	: false,
               showCancelButton: true,
               cancelButtonText: "Necesitas ayuda"
             });
             $('#getmyModalPass').modal('hide');
           } else if (respuesta.status == 1) {
             Swal.fire({
               icon: "success",
               title: "Validado",
               text: "You shuld pass ",
               showConfirmButton	: false,
             });
               $('#getmyModalPass').modal('hide');
           } 
           else {
             errorAlert();
           }
         },
         "JSON"
       );
       break;
     default:
       break;
   }
 });
 $("#btn-cancel").click(function() {
   $("#myBtnenviar").show();
 });