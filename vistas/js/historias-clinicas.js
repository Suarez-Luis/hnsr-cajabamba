/*=============================================
=   CARGAR TABLA DINAMICA DE ATENCIONES      =
=============================================*/


/*=====  Probar q los datos lleguen correctamente  

$.ajax({

	url: "ajax/datatable-historias-clinicas.ajax.php",
	success:function(respuesta){
		console.log("respuesta", respuesta);

	}

})



$('.tablaAtencionesHistorias').DataTable({

	"ajax": "ajax/datatable-historias-clinicas.ajax.php"

});======*/


$(".tablaAtencionesHistorias").DataTable({
    "ajax": "ajax/datatable-historias-clinicas.ajax.php",
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
=   CARGAR TABLA DINAMICA DE HISTORIA CLINICA      =
=============================================*/


/*=====  Probar q los datos lleguen correctamente   

$.ajax({

	url: "ajax/datatable-historias.ajax.php",
	success:function(respuesta){
		console.log("respuesta", respuesta);

	}

})
 
$('.tablasHistoria').DataTable({

	"ajax": "ajax/datatable-historias.ajax.php"

});======*/

$(".tablasHistoria").DataTable({
    "ajax": "ajax/datatable-historias.ajax.php",
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

    }

});


/*=============================================
= AGREGANDO ATENCIONES A LA HISTORIA DESDE LA TABLA  =
=============================================*/

$(".tablaAtencionesHistorias tbody").on("click", "button.agregarAtencion", function() {

    var idAtencion = $(this).attr("idAtencion");

    $(this).removeClass("btn-primary agregarAtencion");
    $(this).addClass("btn-default");

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

            var paciente = respuesta["id_paciente"];
            var personalSalud = respuesta["id_personal_salud"];
            var servicio = respuesta["servicio"];
            var diagnostico = respuesta["diagnostico"];
            var fechaAtencion = respuesta["fecha_atencion"];

            $(".nuevaAtencion").append(

                '<div class="row" style="padding:5px 15px;">' +

                '<!--==== Agregar Paciente  ====-->' +
                '<div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">' +
                '<div class="input-group">' +
                '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarAtencion" idAtencion="' + idAtencion + '"><i class="fa fa-times"></i></button></span>' +

                '<input type="text" class="form-control agregarPaciente" idAtencion="' + idAtencion + '" name="agregarPaciente" value="' + paciente + '" readonly required>' +
                '</div>' +
                '</div>' +

                '<!--====  Agregar Personal de Salud  ====-->' +
                '<div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control nuevoPersonalSalud" name="nuevoPersonalSalud" value="' + personalSalud + '" readonly required>' +
                '</div>' +

                '<!--====  Agregar Servicio  ====-->' +
                '<div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control nuevoServicio" name="nuevoServicio" value="' + servicio + '" readonly required>' +
                '</div>' +

                '<!--====  Agregar Diagnostico  ====-->' +
                '<div class="col-xs-4" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control nuevoDiagnostico" name="nuevoDiagnostico" value="' + diagnostico + '" readonly required>' +
                '</div>' +

                '<!--====  Agregar Fecha Atención  ====-->' +
                '<div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control nuevaFechaAtencion" name="nuevaFechaAtencion" value="' + fechaAtencion + '" readonly required>' +
                '</div>' +

                '</div>'


            )

            // AGRUPAR PRODUCTOS EN FORMATO JSON

            listarAtenciones()

        }

    })

});

/*=============================================
=  CUANDO CARGUE LA TABLA CADA VEZ QUE NAVEGUE EN ELLA  =
=============================================*/

$(".tablaAtencionesHistorias").on("draw.dt", function() {

    if (localStorage.getItem("quitarAtencion") != null) {

        var listaIdAtenciones = JSON.parse(localStorage.getItem("quitarAtencion"));

        for (var i = 0; i < listaIdAtenciones.length; i++) {

            $("button.recuperarBoton[idAtencion='" + listaIdAtenciones[i]["idAtencion"] + "']").removeClass('btn-default');
            $("button.recuperarBoton[idAtencion='" + listaIdAtenciones[i]["idAtencion"] + "']").addClass('btn-primary agregarAtencion');
        }
    }
})




/*=============================================
=  QUITAR ATENCIONES DE LA HISTORIA CLINICA Y RECUPERAR BOTÓN  =
=============================================*/

var idQuitarAtencion = [];

localStorage.removeItem("quitarAtencion");

$(".formularioHistoriaClinica").on("click", "button.quitarAtencion", function() {


    $(this).parent().parent().parent().parent().remove();

    var idAtencion = $(this).attr("idAtencion");

    /*=============================================
    = ALMACENAR EN EL LOCALSTORAGE EL ID DEL PRODUCTO A QUITAR  =
    =============================================*/

    if (localStorage.getItem("quitarAtencion") == null) {

        idQuitarAtencion = [];
    } else {

        idQuitarAtencion.concat(localStorage.getItem("quitarAtencion"))
    }

    idQuitarAtencion.push({ "idAtencion": idAtencion });
    localStorage.setItem("quitarAtencion", JSON.stringify(idQuitarAtencion));



    $("button.recuperarBoton[idAtencion='" + idAtencion + "']").removeClass('btn-default');

    $("button.recuperarBoton[idAtencion='" + idAtencion + "']").addClass('btn-primary agregarAtencion');

    // AGRUPAR PRODUCTOS EN FORMATO JSON

    listarAtenciones()


})


/*=============================================
 = AGREGANDO PRODUCTOS DESDE EL BOTÓN PARA DISPOSITIVOS MOVIL - TABLET  =
=============================================*/

var numMovilAtencion = 0;

$(".btnAgregarAtencion").click(function() {

    numMovilAtencion++;

    var datos = new FormData();
    datos.append("traerAtenciones", "ok");

    $.ajax({

        url: "ajax/atenciones.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            $(".nuevaAtencion").append(

                '<div class="row" style="padding:5px 15px">' +

                '<!--==== Agregar Paciente  ====-->' +
                '<div class="col-xs-2" style="padding-right: 0px">' +
                '<div class="input-group">' +
                '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarAtencion" idAtencion><i class="fa fa-times"></i></button></span>' +

                '<select class="form-control nuevaAtencionMovil agregarPaciente" id="movilAtencion' + numMovilAtencion + '" idAtencion name="movilAtencion" required>' +
                '<option>Seleccione Paciente</option>' +
                '</select>' +

                '</div>' +
                '</div>' +

                '<!--====  Agregar Personal Salud  ====-->' +
                '<div class="col-xs-2 ingresarMovilPersonalSalud" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control movilPersonalSalud nuevoPersonalSalud" name="movilPersonalSalud" value="" readonly required>' +
                '</div>' +

                '<!--====  Agregar Servicio  ====-->' +
                '<div class="col-xs-2 ingresarMovilServicio" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control movilServicio nuevoServicio" name="movilServicio" value="" readonly required>' +
                '</div>' +

                '<!--====  Agregar Diagnostico  ====-->' +
                '<div class="col-xs-4 ingresarMovilDiagnostico" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control movilDiagnostico nuevoDiagnostico" name="movilDiagnostico" value="" readonly required>' +
                '</div>' +

                '<!--====  Agregar Fecha Atención  ====-->' +
                '<div class="col-xs-2 ingresarMovilFechaAtencion" style="padding-right: 1px; padding-left: 1px;">' +
                '<input type="text" class="form-control movilFechaAtencion nuevaFechaAtencion" name="movilFechaAtencion" value="" readonly required>' +
                '</div>' +

                '</div>'
            );

            /*=============================================
            =  AGREGAR LOS PRODUCTOS AL SELECT         =
            =============================================*/

            respuesta.forEach(funcionEach);

            function funcionEach(item, index) {

                $("#movilAtencion" + numMovilAtencion).append(

                    '<option idAtencion="' + item.id_atencion + '" value="' + item.id_atencion + '">' + item.id_paciente + '</option>'

                )
            }

        }

    })

})


/*=============================================
=   SELECCIONAR PRODUCTOS MOVIL    =
=============================================*/

$(".formularioHistoriaClinica").on("change", "select.nuevaAtencionMovil", function() {

    var movilAtencion = $(this).val();

    var movilPersonalSalud = $(this).parent().parent().parent().children('.ingresarMovilPersonalSalud').children('.movilPersonalSalud');
    var movilServicio = $(this).parent().parent().parent().children('.ingresarMovilServicio').children('.movilServicio');
    var movilDiagnostico = $(this).parent().parent().parent().children('.ingresarMovilDiagnostico').children('.movilDiagnostico');
    var movilFechaAtencion = $(this).parent().parent().parent().children('.ingresarMovilFechaAtencion').children('.movilFechaAtencion');

    var datos = new FormData();
    datos.append("movilAtencion", movilAtencion);


    $.ajax({

        url: "ajax/atenciones.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            $(movilPersonalSalud).val(respuesta["id_personal_salud"]);
            $(movilServicio).val(respuesta["servicio"]);
            $(movilDiagnostico).val(respuesta["diagnostico"]);
            $(movilFechaAtencion).val(respuesta["fecha_atencion"]);

            // AGRUPAR PRODUCTOS EN FORMATO JSON

            listarAtenciones()

        }

    })

})



/*=============================================
=   LISTAR / AGRUPAR TOAS LAS ATENCIONES    =
=============================================*/

function listarAtenciones() {

    var listaAtenciones = [];

    var paciente = $(".agregarPaciente");
    var personalSalud = $(".nuevoPersonalSalud");
    var servicio = $(".nuevoServicio");
    var diagnostico = $(".nuevoDiagnostico");
    var fechaAtencion = $(".nuevaFechaAtencion");

    for (var i = 0; i < paciente.length; i++) {

        listaAtenciones.push({
            "id_atencion": $(paciente[i]).attr("idAtencion"),
            "id_paciente": $(paciente[i]).val(),
            "id_personal_salud": $(personalSalud[i]).val(),
            "servicio": $(servicio[i]).val(),
            "diagnostico": $(diagnostico[i]).val(),
            "fecha_atencion": $(fechaAtencion[i]).val()
        })
    }

    console.log("listaAtenciones", JSON.stringify(listaAtenciones));

    $("#listaAtenciones").val(JSON.stringify(listaAtenciones));

}


/*=============================================
=     BOTON EDITAR HISTORIA CLINICA           =
=============================================*/
$(document).on("click", ".btnEditarHistoriaClinica", function() {

    var idHistoriaClinica = $(this).attr("idHistoriaClinica");

    window.location = "index.php?ruta=historias-clinicas-editar&idHistoriaClinica=" + idHistoriaClinica;

})


/*=============================================
=  FUNCION PARA DESACTIVAR LOS BOTONES AGREGAR CUANDO LA ATENCION YA HABÍA SIDO SELECIONADO EN LA CARPETA  =
=============================================*/

function quitarAgregarAtencion() {

    var idAtencion = $(".quitarAtencion");

    var botonesTabla = $(".tablaAtencionesHistorias tbody button.agregarAtencion");

    for (var i = 0; i < idAtencion.length; i++) {

        var boton = $(idAtencion[i]).attr("idAtencion");

        for (var j = 0; j < botonesTabla.length; j++) {

            if ($(botonesTabla[j]).attr("idAtencion") == boton) {

                $(botonesTabla[j]).removeClass("btn-primary agregarAtencion");
                $(botonesTabla[j]).addClass("btn-default");
            }
        }
    }
}

/*=============================================
=    CADA VEZ QUE CARGUE LA TABLA CUANDO NAVEGAMOS EN ELLA SE EJECUTARA LA FUNCION   =
=============================================*/

$('.tablaAtencionesHistorias').on('draw.dt', function() {
    quitarAgregarAtencion();
})


/*=============================================
=      BORRAR HISTORIA CLINICA            =
$(".btnEliminarHistoriaClinica").click(function() {
=============================================*/

$(document).on("click", ".btnEliminarHistoriaClinica", function() {

    var idHistoriaClinica = $(this).attr("idHistoriaClinica");

    swal({
        title: '¿Está seguro de borrar la Historia Clinica?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar Historia Clinica!'
    }).then((result) => {
        if (result.value) {
            window.location = "index.php?ruta=historias-clinicas&idHistoriaClinica=" + idHistoriaClinica;
        }
    })
})


/*=============================================
REVISAR SI DUPLICIDAD DE PACIENTE
=============================================*/

$("#buscarPaciente").change(function() {

    $(".alert").remove();

    var paciente23 = $(this).val();

    var datos = new FormData();
    datos.append("validarPacienteHC", paciente23);

    console.log("validarPacienteHC", paciente23);

    $.ajax({
        url: "ajax/hc.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

            console.log("respuesta", respuesta);

            if (respuesta) {

                $("#buscarPaciente").parent().after('<div class="alert alert-danger">Este usuario ya cuenta con una Historia Clinica</div>');

                $("#buscarPaciente").val("");
            }
        }


    })

})


/*=============================================
=     IMPRIMIR HISTORIA CLINICA            =
=============================================*/

// $(".tablasHistoria").on("click", ".btnImprimirHistoriaClinica", function(){

// 	var numeroHistoria = $(this).attr("numeroHistoria");

// 	window.open("extensiones/tcpdf/pdf/historia-clinica.php?numeroHistoria="+numeroHistoria, "_blank");
// })

$(".tablasHistoria").on("click", ".btnImprimirHistoriaClinica", function() {

    var iddHistoria = $(this).attr("iddHistoria");

    window.open("extensiones/tcpdf/pdf/historia-clinica.php?iddHistoria=" + iddHistoria, "_blank");
})