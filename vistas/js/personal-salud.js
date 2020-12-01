/*=============================================
=      EDITAR PERSONAL DE SALUD          =
=============================================*/

$(document).on("click", ".btnEditarPersonalSalud", function(){

	var idPersonalSalud = $(this).attr("idPersonalSalud");

	var datos = new FormData();
	datos.append("idPersonalSalud", idPersonalSalud);

	$.ajax({

		url:"ajax/personal-salud.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			console.log("respuesta", respuesta);

			$("#idPersonalSalud").val(respuesta["id_personal_salud"]);
			$("#editarNombrePS").val(respuesta["nombre"]);
			$("#editarApellidoPS").val(respuesta["apellido"]);
			$("#editarDocumento").val(respuesta["documento"]);
			$("#editarProfesion").html(respuesta["profesion"]);
			$("#editarProfesion").val(respuesta["profesion"]);
			$("#editarEspecialidad").val(respuesta["especialidad"]);
	

		}

	});

})


/*=============================================
=      ELIMINAR PERSONAL DE SALUD          =
=============================================*/

$(document).on("click", ".btnEliminarPersonalSalud", function(){

	var idPersonalSalud = $(this).attr("idPersonalSalud");
	console.log("idPersonalSalud", idPersonalSalud);

	swal({
		title: '¿Está seguro de borrar al personal de salud?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar usuario!'
	}).then((result)=>{

		if (result.value) {

			window.location = "index.php?ruta=personal-salud&idPersonalSalud="+idPersonalSalud;	

		}

	});
})



/*=============================================
=      ELIMINAR PERSONAL DE SALUD CPANEL          =
=============================================*/

$(document).on("click", ".btnEliminarPersonalSalud2", function(){

	var idPersonalSalud = $(this).attr("idPersonalSalud");
	console.log("idPersonalSalud", idPersonalSalud);

	swal({
		title: '¿Está seguro de borrar al personal de salud?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar usuario!'
	}).then((result)=>{

		if (result.value) {

			window.location = "index.php?ruta=historias-clinicas-crear&idPersonalSalud="+idPersonalSalud;	

		}

	});
})

/*=============================================
=           BUSCAR PROFESION            =
=============================================*/

$(document).ready(function(){
	$('#buscarProfesion').select2();
	

});




/*=============================================
=   CARGAR TABLA DINAMICA DE PERSONAL DE SALUD     =
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


$(".tablaPersonalSalud").DataTable({
	"ajax": "ajax/datatable-personal-salud-cpanel.ajax.php",
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