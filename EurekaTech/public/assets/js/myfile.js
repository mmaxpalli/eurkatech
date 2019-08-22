/*
| Autor: Max Palli
| Fecha: 22/08/2019
| Fines: Prueba de aptitud EUREKATECH
*/
$("#btnLogin").click(function () {
    var validacion = true;

    // if ($('.cssCONT_NombreEmpr').val() == "") {
    //   $('#grpCONT_NombreEmpr').addClass("has-error");
    //   validacion = false;
    // } else {
    //   $('#grpCONT_NombreEmpr').removeClass("has-error");
    // };


    // if ($('.cssCONT_EmailEmpr').val() == "") {
    //   $('#grpCONT_EmailEmpr').addClass("has-error");
    //   validacion = false;
    // } else {
    //   $('#grpCONT_EmailEmpr').removeClass("has-error");
    // };

    //SI SE PASAN TODAS LAS VALIDACIONES SE PROCEDE A GUARDAR EL FORMULARIO SERIALIZADO
    if (validacion != false && validacion == true) {

        var dataString = $('#frmLogin').serialize();
        // alert('Datos serializados: '+dataString);
        // alert(window.location.pathname);
        alert(dataString);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: '/loguear',            
            data: dataString,
        }).done(function (resp) {
            //alert(resp);
            if(resp == 1){
                //alert("respuesta igual a 1");
                window.location.href = "inicio";
            }
            else{
                alert("El usuario o la contraseña son incorrectas");
            }
            //console.log(resp.carp_nombre);    
        });

    }

});