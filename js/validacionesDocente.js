
$.validator.setDefaults({
    submitHandler: function () {
        alert("submitted!");
    }
});

$(document).ready(function () {
    $("#Docente_validado").validate({
        rules: {
            nomDo: {
                required: true,
                minlength: 2
            },
            username1: {
                required: true,
                minlength: 2
            },
            password1: {
                required: true,
                minlength: 5
            },
            confirm_password1: {
                required: true,
                minlength: 5,
                equalTo: "#password1"
            },
            email1: {
                required: true,
                email: true
            },
            agree1: {
                required: true
            }
            
        },
        messages: {
            nomDo: {
                required: "Por favor ingrese el nombre del docente",
                minlength: "No existe nombre con 2 caracteres"
            },
            username1: {
                required: "INGRESE UN USUARIO",
                minlength: "INGRESE 2 CARACTERES"
            },
            password1: {
                required: "INGRESE UNA CONTRASE;A",
                minlength: "INGRESE 5 CARACTERES"
            },
            confirm_password1: {
                required: "REPITA LA CONTRASE;A",
                minlength: "INGRESE 5 CARACTERES",
                equalTo: "INGRESE LA MISMA CONTRASE;A"
            },
            email1: {
                required: "INGRESE UN CORREO VALIDO"
            },
            agree1: {required:
                        "acepte las politicas"
            }
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            // Add `has-feedback` class to the parent div.form-group
            // in order to add icons to inputs
            element.parents(".col-sm-5").addClass("has-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }

            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!element.next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
            }
        },
        success: function (label, element) {
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!$(element).next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
            $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
            $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
        }
    });
});
