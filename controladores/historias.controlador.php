<?php 

class ControladorHistoriasClinicas{

		/*=============================================
		=            MOSTRAR HISTORIAS CLINICAS         =
		=============================================*/

		static public function ctrMostrarHistoriasClinicas($item, $valor){

			$tabla = "historia_clinica";
			$respuesta = ModeloHistoriasClinicas::MdlMostrarHistoriasClinicas($tabla, $item, $valor);

			return $respuesta;
		/*=====  FIN mostrar pacientes  ======*/
		}





		/*=============================================
		=           CREAR HISTORIA CLINICA            =
		=============================================*/

		static public function ctrCrearHistoriaClinica(){

				if (isset($_POST["nuevoPaciente"])) {


					$tabla = "historia_clinica";

					date_default_timezone_set('America/Bogota');

						$datos = array("id_usuario" => $_POST["idUsuario"],
									   "id_paciente" => $_POST["nuevoPaciente"],
									   "tipo" => $_POST["selecionarUps"],
									   "atenciones" => $_POST["listaAtenciones"]);

						$respuesta = ModeloHistoriasClinicas::mdlIngresarHistoriasClinicas($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡La Historia Clinica ha sido guardado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "historias-clinicas";

															}
														  });

						 		 </script>';

						}

				}
						

		}


		/*=============================================
		=    EDITAR CAMBIOS DE LA HISTORIA CLINICA    =
		=============================================*/

		static public function ctrEditarHistoriaClinica(){

				if (isset($_POST["idHistoria"])) {

					$tabla = "historia_clinica";

					$item = "id_historia_clinica";
					$valor = $_POST["idHistoria"];

					$traerHistoriasClinicas = ModeloHistoriasClinicas::mdlMostrarHistoriasClinicas($tabla, $item, $valor);

					/*=============================================
					=  REVISAR SI VIENE LAS HISTORIAS CLINICAS EDITADAS   =
					=============================================*/

					if ($_POST["listaAtenciones"] == "") {
						
						$listaAtenciones = $traerHistoriasClinicas["atenciones"];
					}else{

						$listaAtenciones = $_POST["listaAtenciones"];

					}

					date_default_timezone_set('America/Bogota');
					
					

						$datos = array("id_historia_clinica" => $_POST["idHistoria"],
									   "id_usuario" => $_POST["idUsuario"],
									//    "numero_historia" => $_POST["editarCodigoHistoriaClinica"],
									   "id_paciente" => $_POST["nuevoPaciente"],
									   "tipo" => $_POST["selecionarUps"],
									   "atenciones" => $listaAtenciones);

						$respuesta = ModeloHistoriasClinicas::mdlEditarHistoriasClinicas($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡La Historia Clinica ha sido modificada correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "historias-clinicas";

															}
														  });

						 		 </script>';

						}

				}
						

		}

		/*=============================================
		=       BORRAR HISTORIA CLINICA       =
		=============================================*/
		
		static public function ctrEliminarHistoriaClinica(){

			if(isset($_GET["idHistoriaClinica"])){

				$tabla ="historia_clinica";
				$datos = $_GET["idHistoriaClinica"];

				$respuesta = ModeloHistoriasClinicas::mdlBorrarHistoriasClinicas($tabla, $datos);

				if($respuesta == "ok"){
					
					echo '<script>

							swal({
								type: "success",
								title: "¡La Historia Clinica ha sido borrado correctamente!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "historias-clinicas";

													}
												  });

						 </script>';
				}


			}

		}














/*=====  Fin clase Historias Clinicas  ======*/
}

 ?>