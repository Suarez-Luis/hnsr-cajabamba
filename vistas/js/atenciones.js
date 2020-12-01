/*=============================================
=      EDITAR ATENCION         =
=============================================*/

$(document).on("click", ".btnEditarAtencion", function() {

    var idAtencion = $(this).attr("idAtencion");

    var datos = new FormData();
    datos.append("idAtencion", idAtencion);

    $.ajax({

        url: "ajax/atenciones.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            console.log("respuesta", respuesta);

            $("#idAtencion").val(respuesta["id_atencion"]);
            $("#editarCodigo").val(respuesta["codigo_atencion"]);
            $("#editarUser").val(respuesta["id_usuario"]);
            $("#editarPersonalSalud").html(respuesta["id_personal_salud"]);
            $("#editarPersonalSalud").val(respuesta["id_personal_salud"]);
            $("#editarPaciente").html(respuesta["id_paciente"]);
            $("#editarPaciente").val(respuesta["id_paciente"]);
            $("#editarUps").html(respuesta["ups"]);
            $("#editarUps").val(respuesta["ups"]);
            $("#editarServicio").html(respuesta["servicio"]);
            $("#editarServicio").val(respuesta["servicio"]);
            $("#editarEspecialidad").html(respuesta["especialidad"]);
            $("#editarEspecialidad").val(respuesta["especialidad"]);
            $("#editarDiagnostico").val(respuesta["diagnostico"]);
            $("#editarFechaAtencion").val(respuesta["fecha_atencion"]);




        }

    })

})


/*=============================================
=      EDITAR ATENCION CPANEL        =
=============================================*/

$(document).on("click", ".btnEditarAtencion2", function() {

    var idAtencion = $(this).attr("idAtencion");

    var datos = new FormData();
    datos.append("idAtencion", idAtencion);

    $.ajax({

        url: "ajax/atenciones.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            console.log("respuesta", respuesta);

            $("#idAtencion").val(respuesta["id_atencion"]);
            $("#editarCodigo").val(respuesta["codigo_atencion"]);
            $("#editarUser").val(respuesta["id_usuario"]);
            $("#editarPersonalSalud2").html(respuesta["id_personal_salud"]);
            $("#editarPersonalSalud2").val(respuesta["id_personal_salud"]);
            $("#editarPaciente2").html(respuesta["id_paciente"]);
            $("#editarPaciente2").val(respuesta["id_paciente"]);
            $("#editarUps2").html(respuesta["ups"]);
            $("#editarUps2").val(respuesta["ups"]);
            $("#editarServicio2").html(respuesta["servicio"]);
            $("#editarServicio2").val(respuesta["servicio"]);
            $("#editarEspecialidad2").html(respuesta["especialidad"]);
            $("#editarEspecialidad2").val(respuesta["especialidad"]);
            $("#editarDiagnostico2").val(respuesta["diagnostico"]);
            $("#editarFechaAtencion2").val(respuesta["fecha_atencion"]);
            $("#fotoActual2").val(respuesta["imagen_diagnostico"]);

            if(respuesta["imagen_diagnostico"] != ""){
				$(".previsualizar").attr("src", respuesta["imagen_diagnostico"]);
			}




        }

    })

})


/*=============================================
=      ELIMINAR ATENCION         =
=============================================*/

$(document).on("click", ".btnEliminarAtencion", function() {

    var idAtencion = $(this).attr("idAtencion");
    console.log("idAtencion", idAtencion);

    swal({
        title: '¿Está seguro de borrar la Atención?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar usuario!'
    }).then((result) => {

        if (result.value) {

            window.location = "index.php?ruta=atenciones&idAtencion=" + idAtencion;

        }

    });
})


/*=============================================
=      ELIMINAR ATENCION CPANEL         =
=============================================*/

$(document).on("click", ".btnEliminarAtencion1", function() {

    var idAtencion = $(this).attr("idAtencion");
    console.log("idAtencion", idAtencion);

    swal({
        title: '¿Está seguro de borrar la Atención?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar usuario!'
    }).then((result) => {

        if (result.value) {

            window.location = "index.php?ruta=historias-clinicas-crear&idAtencion=" + idAtencion;

        }

    });
})


/*=============================================
=           BUSCAR PERSONAL DE SALUD           =
=============================================*/

$(document).ready(function() {
    $('#buscarPersonalSalud').select2();
});

/*=============================================
=           BUSCAR PACIENTE           =
=============================================*/

$(document).ready(function() {
    $('#buscarPaciente').select2();
});


/*=============================================
=           BUSCAR PACIENTE CPANEL         =
=============================================*/

$(document).ready(function() {
    $('#buscarPaciente2').select2();
});



/*=============================================
=           BUSCAR UPS           =
=============================================*/

$(document).ready(function() {
    $('#buscarUps').select2();
});

/*=============================================
=           BUSCAR SERVICIO           =
=============================================*/

$(document).ready(function() {
    $('#buscarServicio').select2();
});

/*=============================================
=           BUSCAR ESPECIALIDAD           =
=============================================*/

$(document).ready(function() {
    $('#buscarEspecialidad').select2();
});

/*=============================================
=           BUSCAR PERSONAL DE SALUD  2         =
=============================================*/

$(document).ready(function() {
    $('#buscarPersonalSalud2').select2();
});


/*=============================================
=           BUSCAR PACIENTE MODAL ATENCIONES CPANEL   =
=============================================*/

$(document).ready(function() {
    $('#buscarPaciente3').select2();
});



/*=============================================
=   CARGAR TABLA DINAMICA DE ATENCIONES      =
=============================================*/


/*=====  Probar q los datos lleguen correctamente  


$.ajax({

	url: "ajax/datatable-atenciones.ajax.php",
	success:function(respuesta){
		console.log("respuesta", respuesta);

	}

})


$('.tablaAtenciones').DataTable({

	"ajax": "ajax/datatable-atenciones.ajax.php"

}); ======*/


$(".tablaAtenciones").DataTable({
    "ajax": "ajax/datatable-atenciones.ajax.php",
    "deferRender": true,
    "retrieve": true,
    "processing": true,
    "language": {

        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

    },
    "dom": 'Bfrtip',
    "buttons": [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]

});


/*=============================================
=      SUBIENDO LA FOTO DE ATENCIÓN         =
=============================================*/
$(".fotoDiagnostico").change(function() {

    var imagen = this.files[0];

    /*=============================================
    =      SUBIENDO LA FOTO DE LA ATENCION           =
    =============================================*/


    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png" && imagen["type"] != "aplication/pdf") {

        $(".fotoDiagnostico").val("");

        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen o archivo debe estar en formato JPG, PNG o PDF!",
            type: "error",
            confirmButtonText: "¡Cerrar!"
        });

    } else if (imagen["size"] > 5000000) {


        $(".fotoDiagnostico").val("");

        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen no debe de pesar màs de 5MB!",
            type: "error",
            confirmButtonText: "¡Cerrar!"
        });



    } else {

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);


        $(datosImagen).on("load", function(event) {

            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        })




    }

})