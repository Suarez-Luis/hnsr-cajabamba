/*=============================================
=      EDITAR PACIENTES          =
=============================================*/


$(document).on("click", ".btnEditarPaciente", function(){

	var idPaciente = $(this).attr("idPaciente");

	var datos = new FormData();
	datos.append("idPaciente", idPaciente);

	$.ajax({

		url:"ajax/pacientes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			console.log("respuesta", respuesta);

			$("#idPaciente").val(respuesta["id_paciente"]);
			$("#editarDoc").val(respuesta["documento"]);
			$("#editarNombre1").val(respuesta["nombre1"]);
			$("#editarNombre2").val(respuesta["nombre2"]);
			$("#editarNombre3").val(respuesta["nombre3"]);
			$("#editarApellido1").val(respuesta["apellido_pat"]);
			$("#editarApellido2").val(respuesta["apellido_mat"]);
			$("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
			$("#editarTelefono").val(respuesta["telefono"]);


		}

	});

})


/*=============================================
=      ELIMINAR PACIENTE          =
=============================================*/

$(document).on("click", ".btnEliminarPaciente", function(){

	var idPaciente = $(this).attr("idPaciente");
	console.log("idPaciente", idPaciente);

	swal({
		title: '¿Está seguro de borrar al Paciente?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar usuario!'
	}).then((result)=>{

		if (result.value) {

			window.location = "index.php?ruta=pacientes&idPaciente="+idPaciente;	

		}

	});
})


/*=============================================
=      ELIMINAR PACIENTE CPANEL          =
=============================================*/

$(document).on("click", ".btnEliminarPacienteCPANEL", function(){

	var idPaciente = $(this).attr("idPaciente");
	console.log("idPaciente", idPaciente);

	swal({
		title: '¿Está seguro de borrar al Paciente?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar usuario!'
	}).then((result)=>{

		if (result.value) {

			window.location = "index.php?ruta=historias-clinicas-crear&idPaciente="+idPaciente;	

		}

	});
})



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


$(".tablaPacientes").DataTable({
	"ajax": "ajax/datatable-pacientes.ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	},
	"dom": 'Bfrtip',
	"buttons":[                	
		            'copy', 'csv', 'excel', 'pdf', 'print'
                ]

	
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


$(".tablaPacientes2").DataTable({
	"ajax": "ajax/datatable-pacientes-cpanel.ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Último",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	},
	"dom": 'Bfrtip',
	"buttons":[                	
		            'copy', 'csv', 'excel', 'pdf', 'print'
                ]

	
});