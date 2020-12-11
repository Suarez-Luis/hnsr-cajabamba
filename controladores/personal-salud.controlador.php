<?php 

class ControladorPersonalSalud{

		/*=============================================
		=            REGISTRAR PERSONAL DE SALUD          =
		=============================================*/

		static public function ctrCrearPersonalSalud(){
			if (isset($_POST["nuevoNombrePS"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombrePS"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellidoPS"])){


					$tabla = "personal_salud";

						$datos = array("nombre"  => $_POST["nuevoNombrePS"],
									   "apellido"  => $_POST["nuevoApellidoPS"],
									   "documento"  => $_POST["nuevoDocumento"],
									   "profesion"  => $_POST["nuevaProfesion"],
									   "especialidad"  => $_POST["nuevaEspecialidad"]);

						$respuesta = ModeloPersonalSalud::mdlIngresarPersonalSalud($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El personal de Salud ha sido guardado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "personal-salud";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡El usuario no puede ir vacío o llevar caracteres especiales 2!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "personal-salud";

													}
												  });

						 </script>';

			}



				}	
		/*=====  FIN REGISTRO PERSONAL SALUD  ======*/			
		}

		/*=============================================
		=        REGISTRAR PERSONAL DE SALUD CPANEL         =
		=============================================*/

		static public function ctrCrearPersonalSaludCPANEL(){
			if (isset($_POST["nuevoNombrePS"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombrePS"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellidoPS"])){


					$tabla = "personal_salud";

						$datos = array("nombre"  => $_POST["nuevoNombrePS"],
									   "apellido"  => $_POST["nuevoApellidoPS"],
									   "documento"  => $_POST["nuevoDocumento"],
									   "profesion"  => $_POST["nuevaProfesion"],
									   "especialidad"  => $_POST["nuevaEspecialidad"]);

						$respuesta = ModeloPersonalSalud::mdlIngresarPersonalSalud($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El personal de Salud ha sido guardado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "historias-clinicas-crear";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡El usuario no puede ir vacío o llevar caracteres especiales 2!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "historias-clinicas-crear";

													}
												  });

						 </script>';

			}



				}	
		/*=====  FIN REGISTRO PERSONAL SALUD  ======*/			
		}



		/*=============================================
		=            MOSTRAR PERSPONAL DE SALUD        =
		=============================================*/

		static public function ctrMostrarPersonalSalud($item, $valor){

			$tabla = "personal_salud";
			$respuesta = ModeloPersonalSalud::MdlMostrarPersonalSalud($tabla, $item, $valor);

			return $respuesta;
		/*=====  FIN mostrar pacientes  ======*/
		}



		/*=============================================
		=            EDITAR PERSONAL DE SALUD          =
		=============================================*/

		static public function ctrEditarPersonalSalud(){
			if (isset($_POST["editarNombrePS"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombrePS"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellidoPS"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEspecialidad"])){


					$tabla = "personal_salud";

						$datos = array("id_personal_salud"  => $_POST["idPersonalSalud"],
									   "nombre"  => $_POST["editarNombrePS"],
									   "apellido"  => $_POST["editarApellidoPS"],
									   "documento"  => $_POST["editarDocumento"],
									   "profesion"  => $_POST["editarProfesion"],
									   "especialidad"  => $_POST["editarEspecialidad"]);

						$respuesta = ModeloPersonalSalud::mdlEditarPersonalSalud($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El personal de Salud ha sido modificado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "personal-salud";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡El personal de salud no puede ir vacío o llevar caracteres especiales!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "personal-salud";

													}
												  });

						 </script>';

			}



				}	
		/*=====  FIN EDITAR PERSONAL SALUD  ======*/			
		}


		/*=============================================
		=            EDITAR PERSONAL DE SALUD CPANEL         =
		=============================================*/

		static public function ctrEditarPersonalSaludCPANEL(){
			if (isset($_POST["editarNombrePS"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombrePS"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellidoPS"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEspecialidad"])){


					$tabla = "personal_salud";

						$datos = array("id_personal_salud"  => $_POST["idPersonalSalud"],
									   "nombre"  => $_POST["editarNombrePS"],
									   "apellido"  => $_POST["editarApellidoPS"],
									   "documento"  => $_POST["editarDocumento"],
									   "profesion"  => $_POST["editarProfesion"],
									   "especialidad"  => $_POST["editarEspecialidad"]);

						$respuesta = ModeloPersonalSalud::mdlEditarPersonalSalud($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El personal de Salud ha sido modificado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "historias-clinicas-crear";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡El personal de salud no puede ir vacío o llevar caracteres especiales!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "historias-clinicas-crear";

													}
												  });

						 </script>';

			}



				}	
		/*=====  FIN EDITAR PERSONAL SALUD CPANEL  ======*/			
		}


		/*=============================================
		=           BORRAR PERSONAL DE SALUD            =
		=============================================*/


		static public function ctrBorrarPersonalSalud(){
			if(isset($_GET["idPersonalSalud"])){

				$tabla ="personal_salud";
				$datos = $_GET["idPersonalSalud"];

				$respuesta = ModeloPersonalSalud::mdlBorrarPersonalSalud($tabla, $datos);

				if($respuesta == "ok"){
					
					echo '<script>

							swal({
								type: "success",
								title: "¡El Personal de Salud ha sido borrado correctamente!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "personal-salud";

													}
												  });

						 </script>';
				}


			}
		}


		/*=============================================
		=           BORRAR PERSONAL DE SALUD CPANEL    =
		=============================================*/


		static public function ctrBorrarPersonalSaludCPANEL(){
			if(isset($_GET["idPersonalSalud"])){

				$tabla ="personal_salud";
				$datos = $_GET["idPersonalSalud"];

				$respuesta = ModeloPersonalSalud::mdlBorrarPersonalSalud($tabla, $datos);

				if($respuesta == "ok"){
					
					echo '<script>

							swal({
								type: "success",
								title: "¡El Personal de Salud ha sido borrado correctamente!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "historias-clinicas-crear";

													}
												  });

						 </script>';
				}


			}
		}




		














/*=====  FIN DE LA CLASE  ======*/

}




