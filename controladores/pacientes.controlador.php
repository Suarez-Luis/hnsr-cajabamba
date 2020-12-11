<?php 

class ControladorPacientes{

		/*=============================================
		=            REGISTRAR PCIENTES          =
		=============================================*/

		static public function ctrCrearPacientes(){
			if (isset($_POST["nuevoDoc"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido2"])){


					$tabla = "pacientes";

						$datos = array("documento"  => $_POST["nuevoDoc"],
									   "nombre1"  => $_POST["nuevoNombre1"],
									   "nombre2"  => $_POST["nuevoNombre2"],
									   "nombre3"  => $_POST["nuevoNombre3"],
									   "apellido_pat"  => $_POST["nuevoApellido1"],
									   "apellido_mat"  => $_POST["nuevoApellido2"],
									   "fecha_nacimiento"  => $_POST["nuevaFechaNacimiento"],
									   "telefono"  => $_POST["nuevoTelefono"]);

						$respuesta = ModeloPacientes::mdlIngresarPaciente($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El Paciente ha sido guardado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "pacientes";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡El paciente no puede ir vacío o llevar caracteres especiales !",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "pacientes";

													}
												  });

						 </script>';

			}
		  }
		/*=====  FIN registro pacientes  ======*/					
	    }



		/*=============================================
		=            MOSTRAR PACIENTES         =
		=============================================*/

		static public function ctrMostrarPacientes($item, $valor){

			$tabla = "pacientes";
			$respuesta = ModeloPacientes::MdlMostrarPacientes($tabla, $item, $valor);

			return $respuesta;
		/*=====  FIN mostrar pacientes  ======*/
		}


		/*=============================================
		=            EDITAR PCIENTES          =
		=============================================*/

		static public function ctrEditarPacientes(){
			if (isset($_POST["editarDoc"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellido1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellido2"])){


					$tabla = "pacientes";

						$datos = array("id_paciente"  => $_POST["idPaciente"],
									   "documento"  => $_POST["editarDoc"],
									   "nombre1"  => $_POST["editarNombre1"],
									   "nombre2"  => $_POST["editarNombre2"],
									   "nombre3"  => $_POST["editarNombre3"],
									   "apellido_pat"  => $_POST["editarApellido1"],
									   "apellido_mat"  => $_POST["editarApellido2"],
									   "fecha_nacimiento"  => $_POST["editarFechaNacimiento"],
									   "telefono"  => $_POST["editarTelefono"]);

						$respuesta = ModeloPacientes::mdlEditarPaciente($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El Paciente ha sido modificado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "pacientes";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡El paciente no puede ir vacío o llevar caracteres especiales !",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "pacientes";

													}
												  });

						 </script>';

			}
		  }
		/*=====  FIN editar pacientes  ======*/					
	    }



	    /*=============================================
		=           BORRAR PACIENTE            =
		=============================================*/


		static public function ctrBorrarPacientes(){
			if(isset($_GET["idPaciente"])){

				$tabla ="pacientes";
				$datos = $_GET["idPaciente"];

				$respuesta = ModeloPacientes::mdlBorrarPacientes($tabla, $datos);

				if($respuesta == "ok"){
					
					echo '<script>

							swal({
								type: "success",
								title: "¡El Paciente ha sido borrado correctamente!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "pacientes";

													}
												  });

						 </script>';
				}


			}
		}


		/*=============================================
		=           BORRAR PACIENTE CPANEL            =
		=============================================*/


		static public function ctrBorrarPacientesCPANEL(){
			if(isset($_GET["idPaciente"])){

				$tabla ="pacientes";
				$datos = $_GET["idPaciente"];

				$respuesta = ModeloPacientes::mdlBorrarPacientes($tabla, $datos);

				if($respuesta == "ok"){
					
					echo '<script>

							swal({
								type: "success",
								title: "¡El Paciente ha sido borrado correctamente!",
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



		/*=============================================
		=            REGISTRAR PCIENTES CPANEL         =
		=============================================*/

		static public function ctrCrearPacientesCPANEL(){
			if (isset($_POST["nuevoDoc"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido2"])){


					$tabla = "pacientes";

						$datos = array("documento"  => $_POST["nuevoDoc"],
									   "nombre1"  => $_POST["nuevoNombre1"],
									   "nombre2"  => $_POST["nuevoNombre2"],
									   "nombre3"  => $_POST["nuevoNombre3"],
									   "apellido_pat"  => $_POST["nuevoApellido1"],
									   "apellido_mat"  => $_POST["nuevoApellido2"],
									   "fecha_nacimiento"  => $_POST["nuevaFechaNacimiento"],
									   "telefono"  => $_POST["nuevoTelefono"]);

						$respuesta = ModeloPacientes::mdlIngresarPaciente($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El Paciente ha sido guardado correctamente!",
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
								title: "¡El paciente no puede ir vacío o llevar caracteres especiales !",
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
		/*=====  FIN registro pacientes  ======*/					
		}
		

		/*=============================================
		=            EDITAR PCIENTES CPANEL          =
		=============================================*/

		static public function ctrEditarPacientesCPANEL(){
			if (isset($_POST["editarDoc"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellido1"]) &&
					preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellido2"])){


					$tabla = "pacientes";

						$datos = array("id_paciente"  => $_POST["idPaciente"],
									   "documento"  => $_POST["editarDoc"],
									   "nombre1"  => $_POST["editarNombre1"],
									   "nombre2"  => $_POST["editarNombre2"],
									   "nombre3"  => $_POST["editarNombre3"],
									   "apellido_pat"  => $_POST["editarApellido1"],
									   "apellido_mat"  => $_POST["editarApellido2"],
									   "fecha_nacimiento"  => $_POST["editarFechaNacimiento"],
									   "telefono"  => $_POST["editarTelefono"]);

						$respuesta = ModeloPacientes::mdlEditarPaciente($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡El Paciente ha sido modificado correctamente!",
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
								title: "¡El paciente no puede ir vacío o llevar caracteres especiales !",
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
		/*=====  FIN editar pacientes  ======*/					
	    }















/*=====  FIN DE LA CLASE  ======*/

}




