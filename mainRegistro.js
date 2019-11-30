$(document).ready(function() {
  var obj = {};

  $("#myBtn").click(function() {
    obj = {
      accion: "insertarRegistro"
    };
    // $("#myBtn").hide();
    // $("#myModal")[0].reset();
    $("#btnRegistrar").text("Unete");
  });

  $("#btnRegistrar").click(function() {
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
});
///Consulta Usuario
$(document).ready(function() {
  var obj = {};

  $("#btnConsultar").click(function() {
    obj = {
      accion: "getRegistro"
    };
  $("#btnConsultar").click(function() {
    obj["UserEmail"] = $("#UserEmail").val();
    obj["UserPassword"] = $("#UserPassword").val();
    console.log(obj);
    switch (obj.accion) {
      case "getRegistro":
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
    });

});