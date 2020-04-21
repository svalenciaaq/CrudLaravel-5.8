if ($("#form-asesor").length > 0) {
    $('#form-asesor').validate({
        rules: {
            name: {
                required: true,
                maxlength: 30
            },

            dni: {
                required: true,
                maxlength: 10,
                number: true
            },

            tel: {
                required: true,
                maxlength: 10,
                number: true

            },

            date: {
                required: true,
                date: true
            },

            gen: {
                required: true,
                maxlength: 10
            },

            client: {
                required: true,
                maxlength: 50

            },

            sede: {
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

            tel: {
                required: "Ingrese el numero de telefono",
                maxlength: "La longitud del numero no es valida",
                number: "Ingrese porfavor un numero valido"

            },

            date: {
                required: "Ingrese una fecha",
                dateIso: "ingrese una fecha valida"

            },

            gen: {
                required: "Seleccione un genero"
                
            },

            client: {
                required: "Ingrese el cliente",
                maxlength: "El nombre del cliente es demasiado largo"

            },

            sede: {
                required: "Ingrese la sede"
            },

        }
    });

    
}