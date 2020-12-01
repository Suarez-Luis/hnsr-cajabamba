<?php

require_once "../controladores/historias.controlador.php";
require_once "../modelos/historias.modelo.php";

require_once "../controladores/pacientes.controlador.php";
require_once "../modelos/pacientes.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class TablaHistoria{

	/*=============================================
	=  MOSTRAR LA TABLA ATENCIONES           =
	=============================================*/

	public function mostrarTablaHistoria(){

		$item = null;
        $valor = null;

        $historia = ControladorHistoriasClinicas::ctrMostrarHistoriasClinicas($item, $valor);

        

        $datosJson = '{
						"data": [';

							for ($i=0; $i < count($historia); $i++){

							$botones = "<div class='btn-group'><button class='btn btn-info btnImprimirHistoriaClinica' iddHistoria='".$historia[$i]["id_historia_clinica"]."'><i class='fa fa-print'></i></button><button class='btn btn-warning btnEditarHistoriaClinica' idHistoriaClinica='".$historia[$i]["id_historia_clinica"]."'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarHistoriaClinica' idHistoriaClinica='".$historia[$i]["id_historia_clinica"]."'><i class='fa fa-times'></i></button></div>";


							/*=============================================
							=  TRAEMOS PACIENTE       =
							=============================================*/

							$item = "id_paciente";
							$valor = $historia[$i]["id_paciente"];
							$paciente = ControladorPacientes::ctrMostrarPacientes($item, $valor);


							/*=============================================
							=  TRAEMOS USUARIOS       =
							=============================================*/

							$item = "id_usuario";
							$valor = $historia[$i]["id_usuario"];
							$usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

								
								$datosJson .='[
								 "'.($i+1).'",
								
								 "'.$usuario["perfil"].'",
								 "'.$paciente["documento"].'",
								 "'.$paciente["apellido_pat"]." ".$paciente["apellido_mat"]." ".$paciente["nombre1"]." ".$paciente["nombre2"]." ".$paciente["nombre3"].'",
								 "'.$historia[$i]["tipo"].'",
								 "'.$historia[$i]["fecha"].'",
								 "'.$botones.'"
								],';

							}

						$datosJson = substr($datosJson, 0, -1);

						$datosJson .= ']			
					 }';

					 echo $datosJson;
		
	
	}	

}

/*=============================================
	=  ACTIVAR LA TABLA ATENCIONES           =
=============================================*/

$mostrarHistoria = new TablaHistoria();
$mostrarHistoria -> mostrarTablaHistoria();







 ?>