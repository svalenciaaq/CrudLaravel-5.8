if ($("#form-users").length > 0) {
    $('#form-users').validate({
        rules: {
            name: {
                required: true,
                maxlength: 30
            },


            email: {
                required: true,
                maxlength: 50
            },

            rol_id: {
                required: true,
                maxlength: 20
            },

            password: {
                required: true,
                maxlength: 20

            },
            password_confirmation: {
                required: true,
                maxlength: 20

            },

        },
        messages: {

            name: {
                required: "Ingrese el nombre ",
                maxlength: "El nombre no puede sobrepasar los 30 caracteres",
            },
            dni: {
                required: "Ingrese el numero de cedula",
                maxlength: "La cedula no es valida",
                number: "Ingrese porfavor un numero valido"
            },

            email: {
                required: "Ingrese el email",
                maxlength: "La longitud del email no es valida",


            },

            rol_id: {
                required: "Escoja un rol de usurio",
                maxlength: 20
            },

            password: {
                required: "ingrese la contraseña",
                maxlength: 20

            },
            password_confirmation: {
                required: "confirme la contraseña",
                maxlength: 20

            },



        }
    });


}