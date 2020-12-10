<?php 

class ControladorAtenciones{


		/*=============================================
		=            MOSTRAR ATENCION         =
		=============================================*/

		static public function ctrMostrarAtenciones($item, $valor){

			$tabla = "atencion";
			$respuesta = ModeloAtenciones::MdlMostrarAtenciones($tabla, $item, $valor);

			return $respuesta;
		/*=====  FIN mostrar pacientes  ======*/
		}


		/*=============================================
		=            REGISTRAR ATENCION         =
		=============================================*/

		static public function ctrCrearAtencion(){
			if (isset($_POST["nuevoCodigo"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["idUser"])){


					$tabla = "atencion";

						$datos = array("codigo_atencion"  => $_POST["nuevoCodigo"],
									   "id_usuario"  => $_POST["idUsuario"],
									   "id_personal_salud"  => $_POST["nuevaPersonalSalud"],
									   "id_paciente"  => $_POST["nuevoPaciente"],
									   "ups"  => $_POST["nuevaUps"],
									   "servicio"  => $_POST["nuevoServicio"],
									   "especialidad"  => $_POST["nuevaEspecialidad"],
									   "diagnostico"  => $_POST["nuevoDiagnostico"],
									   "fecha_atencion"  => $_POST["nuevaFechaAtencion"]);

						$respuesta = ModeloAtenciones::mdlIngresarAtenciones($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡La Atención ha sido guardado correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "atenciones";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡La Atención no puede ir vacía o llevar caracteres especiales !",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "atenciones";

													}
												  });

						 </script>';

			}
		  }
		/*=====  FIN registro pacientes  ======*/					
		}
		
		/*=============================================
		=            REGISTRAR ATENCION CPANEL        =
		=============================================*/

		static public function ctrCrearAtencionCPANEL(){
			if (isset($_POST["nuevoCodigo"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["idUser"])){

					
					/*=============================================
					=   VALIDAR IMAGEN ATENCIONL        =
					=============================================*/

					$ruta = "vistas/img/atenciones/doc/doc2.jpg";

					if (isset($_FILES["fotoDiagnostico"]["tmp_name"])){

						list($ancho, $alto) = getimagesize($_FILES["fotoDiagnostico"]["tmp_name"]);

						$nuevoAncho = 791;
						$nuevoAlto = 1024;

						/*=============================================
						=  CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO =
						=============================================*/

						$directorio = "vistas/img/atenciones/".$_POST["nuevoCodigo"];

						mkdir($directorio, 0755);

						/*=============================================
						=  DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP =
						=============================================*/

						if ($_FILES["fotoDiagnostico"]["type"] == "image/jpeg"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";
							$origen = imagecreatefromjpeg($_FILES["fotoDiagnostico"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagejpeg($destino, $ruta);

						}

						if ($_FILES["fotoDiagnostico"]["type"] == "image/png"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";
							$origen = imagecreatefrompng($_FILES["fotoDiagnostico"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagepng($destino, $ruta);

						}
						
					}


					/*=============================================
					=   VALIDAR IMAGEN ATENCION 2        =
					=============================================*/

					$ruta2 = "vistas/img/atenciones/doc/doc2.jpg";

					if (isset($_FILES["fotoDiagnostico2"]["tmp_name"])){

						list($ancho, $alto) = getimagesize($_FILES["fotoDiagnostico2"]["tmp_name"]);

						$nuevoAncho = 791;
						$nuevoAlto = 1024;

						/*=============================================
						=  CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO =
						=============================================*/

						$directorio = "vistas/img/atenciones/i2/".$_POST["nuevoCodigo"];

						mkdir($directorio, 0755);

						/*=============================================
						=  DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP =
						=============================================*/

						if ($_FILES["fotoDiagnostico2"]["type"] == "image/jpeg"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/i2/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";
							$origen = imagecreatefromjpeg($_FILES["fotoDiagnostico2"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagejpeg($destino, $ruta);

						}

						if ($_FILES["fotoDiagnostico2"]["type"] == "image/png"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/i2/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";
							$origen = imagecreatefrompng($_FILES["fotoDiagnostico2"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagepng($destino, $ruta);

						}




						
					}


					/*=============================================
					=   VALIDAR IMAGEN ATENCION 3        =
					=============================================*/

					$ruta3 = "vistas/img/atenciones/doc/doc2.jpg";

					if (isset($_FILES["fotoDiagnostico3"]["tmp_name"])){

						list($ancho, $alto) = getimagesize($_FILES["fotoDiagnostico3"]["tmp_name"]);

						$nuevoAncho = 791;
						$nuevoAlto = 1024;

						/*=============================================
						=  CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO =
						=============================================*/

						$directorio = "vistas/img/atenciones/i3/".$_POST["nuevoCodigo"];

						mkdir($directorio, 0755);

						/*=============================================
						=  DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP =
						=============================================*/

						if ($_FILES["fotoDiagnostico3"]["type"] == "image/jpeg"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/i3/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";
							$origen = imagecreatefromjpeg($_FILES["fotoDiagnostico3"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagejpeg($destino, $ruta);

						}

						if ($_FILES["fotoDiagnostico3"]["type"] == "image/png"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/i3/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";
							$origen = imagecreatefrompng($_FILES["fotoDiagnostico3"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagepng($destino, $ruta);

						}	
					}


					/*=============================================
					=   VALIDAR IMAGEN ATENCION 4        =
					=============================================*/

					$ruta4 = "vistas/img/atenciones/doc/doc2.jpg";

					if (isset($_FILES["fotoDiagnostico4"]["tmp_name"])){

						list($ancho, $alto) = getimagesize($_FILES["fotoDiagnostico4"]["tmp_name"]);

						$nuevoAncho = 791;
						$nuevoAlto = 1024;

						/*=============================================
						=  CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO =
						=============================================*/

						$directorio = "vistas/img/atenciones/i4/".$_POST["nuevoCodigo"];

						mkdir($directorio, 0755);

						/*=============================================
						=  DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP =
						=============================================*/

						if ($_FILES["fotoDiagnostico4"]["type"] == "image/jpeg"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/i4/".$_POST["nuevoCodigo"]."/".$aleatorio.".jpg";
							$origen = imagecreatefromjpeg($_FILES["fotoDiagnostico4"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagejpeg($destino, $ruta);

						}

						if ($_FILES["fotoDiagnostico4"]["type"] == "image/png"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/i4/".$_POST["nuevoCodigo"]."/".$aleatorio.".png";
							$origen = imagecreatefrompng($_FILES["fotoDiagnostico4"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagepng($destino, $ruta);

						}	
					}


					$tabla = "atencion";

						$datos = array("codigo_atencion"  => $_POST["nuevoCodigo"],
									   "id_usuario"  => $_POST["idUsuario"],
									   "id_personal_salud"  => $_POST["nuevaPersonalSalud"],
									   "id_paciente"  => $_POST["nuevoPaciente"],
									   "ups"  => $_POST["nuevaUps"],
									   "servicio"  => $_POST["nuevoServicio"],
									   "especialidad"  => $_POST["nuevaEspecialidad"],
									   "diagnostico"  => $_POST["nuevoDiagnostico"],
									   "imagen_diagnostico"  => $ruta,
									   "imagen_diagnostico2"  => $ruta2,
									   "imagen_diagnostico3"  => $ruta3,
									   "imagen_diagnostico4"  => $ruta4,
									   "fecha_atencion"  => $_POST["nuevaFechaAtencion"]);

						$respuesta = ModeloAtenciones::mdlIngresarAtenciones($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡La Atención ha sido guardado correctamente!",
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
								title: "¡La Atención no puede ir vacía o llevar caracteres especiales !",
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
		/*=====  FIN registro atenciones CPANEL  ======*/					
	    }


	    /*=============================================
		=            EDITAR ATENCION          =
		=============================================*/

		static public function ctrEditarAtencion(){
			if (isset($_POST["editarCodigo"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarUser"])){

					
					$tabla = "atencion";

						$datos = array("id_atencion"  => $_POST["idAtencion"],
									   "codigo_atencion"  => $_POST["editarCodigo"],
									   "id_usuario"  => $_POST["editarUser"],
									   "id_personal_salud"  => $_POST["editarPersonalSalud"],
									   "id_paciente"  => $_POST["editarPaciente"],
									   "ups"  => $_POST["editarUps"],
									   "servicio"  => $_POST["editarServicio"],
									   "especialidad"  => $_POST["editarEspecialidad"],
									   "diagnostico"  => $_POST["editarDiagnostico"],
									   "fecha_atencion"  => $_POST["editarFechaAtencion"]);

						$respuesta = ModeloAtenciones::mdlEditarAtenciones($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡La Atención ha sido modificada correctamente!",
										showConfirmButton: true,
										confirmButtonText: "Cerrar",
										closeOnConfirm: false
										}).then((result)=>{
											if(result.value){

												window.location = "atenciones";

															}
														  });

						 		 </script>';

						}

				}else{

					echo '<script>

							swal({
								type: "error",
								title: "¡La Atención no puede ir vacía o llevar caracteres especiales !",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "atenciones";

													}
												  });

						 </script>';

			}
		  }
		/*=====  FIN registro pacientes  ======*/					
		}
		
		/*=============================================
		=            EDITAR ATENCION CPANEL          =
		=============================================*/

		static public function ctrEditarAtencionCPANEL(){
			if (isset($_POST["editarCodigo"])){
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarUser"])){

					/*=============================================
					=            VALIDAR IMAGEN          =
					=============================================*/

					$ruta = $_POST["fotoActual2"];


					if (isset($_FILES["editarFotoDiagnostico"]["tmp_name"]) && !empty($_FILES["editarFotoDiagnostico"]["tmp_name"])){

						list($ancho, $alto) = getimagesize($_FILES["editarFotoDiagnostico"]["tmp_name"]);

						$nuevoAncho = 791;
						$nuevoAlto = 1024;

						/*=============================================
						=  CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO =
						=============================================*/

						$directorio = "vistas/img/atenciones/".$_POST["editarFotoDiagnostico"];

						/*=============================================
						= PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD =
						=============================================*/

						if (!empty($_POST["fotoActual2"])){
							
							unlink($_POST["fotoActual2"]);

						}else{
							mkdir($directorio, 0755);
						}


						/*=============================================
						=  DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP =
						=============================================*/

						if ($_FILES["editarFotoDiagnostico"]["type"] == "image/jpeg"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/".$_POST["editarCodigo"]."/".$aleatorio.".jpg";
							$origen = imagecreatefromjpeg($_FILES["editarFotoDiagnostico"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagejpeg($destino, $ruta);

						}

						if ($_FILES["editarFotoDiagnostico"]["type"] == "image/png"){

							/*=============================================
							=  GUARDAMOS LA IMAGEN EN EL DIRECTORIO =
							=============================================*/

							$aleatorio = mt_rand(100,999);
							$ruta = "vistas/img/atenciones/".$_POST["editarCodigo"]."/".$aleatorio.".png";
							$origen = imagecreatefrompng($_FILES["editarFotoDiagnostico"]["tmp_name"]);
							$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
							imagepng($destino, $ruta);

						}

					}


					$tabla = "atencion";

						$datos = array("id_atencion"  => $_POST["idAtencion"],
									   "codigo_atencion"  => $_POST["editarCodigo"],
									   "id_usuario"  => $_POST["editarUser"],
									   "id_personal_salud"  => $_POST["editarPersonalSalud2"],
									   "id_paciente"  => $_POST["editarPaciente2"],
									   "ups"  => $_POST["editarUps2"],
									   "servicio"  => $_POST["editarServicio2"],
									   "especialidad"  => $_POST["editarEspecialidad2"],
									   "diagnostico"  => $_POST["editarDiagnostico2"],
									   "imagen_diagnostico"  => $ruta,
									   "fecha_atencion"  => $_POST["editarFechaAtencion2"]);

						$respuesta = ModeloAtenciones::mdlEditarAtenciones($tabla, $datos);

						if ($respuesta == "ok") {
							
							echo '<script>

									swal({
										type: "success",
										title: "¡La Atención ha sido modificada correctamente!",
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
								title: "¡La Atención no puede ir vacía o llevar caracteres especiales !",
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
		/*=====  FIN editar antenciones CPANEL ======*/					
	    }


	    /*=============================================
		=           BORRAR ATENCION            =
		=============================================*/


		static public function ctrBorrarAtencion(){
			if(isset($_GET["idAtencion"])){

				$tabla ="atencion";
				$datos = $_GET["idAtencion"];

				$respuesta = ModeloAtenciones::mdlBorrarAtenciones($tabla, $datos);

				if($respuesta == "ok"){
					
					echo '<script>

							swal({
								type: "success",
								title: "¡La atencion ha sido borrado correctamente!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar",
								closeOnConfirm: false
								}).then((result)=>{
									if(result.value){

										window.location = "atenciones";

													}
												  });

						 </script>';
				}


			}
		}


		 /*=============================================
		=           BORRAR ATENCION CPANEL           =
		=============================================*/


		static public function ctrBorrarAtencionCPANEL(){
			if(isset($_GET["idAtencion"])){

				$tabla ="atencion";
				$datos = $_GET["idAtencion"];

				$respuesta = ModeloAtenciones::mdlBorrarAtenciones($tabla, $datos);

				if($respuesta == "ok"){
					
					echo '<script>

							swal({
								type: "success",
								title: "¡La atencion ha sido borrado correctamente!",
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






/*=====  FIN clase  ======*/	
}



 ?>