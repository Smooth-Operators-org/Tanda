$(document).ready(function () {

    var obj = {};

    $("#myBtn").click(function () {
        obj = {
            accion: "insertarRegistro"
        };
        // $("#myBtn").hide();
        // $("#myModal")[0].reset();
        $("#btnRegistrar").text("Unete");
    });

    $("#btnRegistrar").click(function () {

        $("#myForm").find("input").map(function (i, e) {
            obj[$(this).prop("name")] = $(this).val();
        });
        $("#myForm").find("select").map(function (i, e) {
            obj[$(this).prop("name")] = $(this).val();
        });

        console.log(i,e);

        switch (obj.accion) {
            case "insertarRegistro":
                $.post("funciones.php", obj, function (respuesta) {
                    if (respuesta.status == 0) {
                        swal("¡ERROR!", "Campos vacios", "error");
                    } else if (respuesta.status == 1) {
                        swal("Éxito", "Nivel añadido correctamente", "success").then(() => {
                            location.reload();
                        });
                    } else {
                        errorAlert();
                    }
                }, "JSON"
                );
                break;
            default:
                break;
        }
    });

    $("#btn-cancel").click(function () {
        $("#myBtn").show();
    });
});