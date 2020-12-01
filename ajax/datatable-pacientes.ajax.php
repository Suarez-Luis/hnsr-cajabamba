<?php 

require_once "../controladores/pacientes.controlador.php";
require_once "../modelos/pacientes.modelo.php";


class TablaPacientes{

	/*=============================================
	=  MOSTRAR LA TABLA ATENCIONES           =
	=============================================*/

	public function mostrarTablaPacientes(){

		$item = null;
        $valor = null;

        $pacientes = ControladorPacientes::ctrMostrarPacientes($item, $valor);

        

        $datosJson = '{
						"data": [';

							for ($i=0; $i < count($pacientes); $i++){

							$botones = "<div class='btn-group'><button class='btn btn-warning btnEditarPaciente' data-toggle='modal' data-target='#modalEditarPacientes' idPaciente='".$pacientes[$i]["id_paciente"]."'><i class='fa fa-pencil'></i><button class='btn btn-danger btnEliminarPaciente' idPaciente='".$pacientes[$i]["id_paciente"]."'><i class='fa fa-times'></i></button></div>";

															
								$datosJson .='[
								 "'.($i+1).'",
								 "'.$pacientes[$i]["documento"].'",
								 "'.$pacientes[$i]["nombre1"].'",
								 "'.$pacientes[$i]["nombre2"].'",
								 "'.$pacientes[$i]["nombre3"].'",
								 "'.$pacientes[$i]["apellido_pat"].'",
								 "'.$pacientes[$i]["apellido_mat"].'",
								 "'.$pacientes[$i]["fecha_nacimiento"].'",
								 "'.$pacientes[$i]["telefono"].'",
								 "'.$pacientes[$i]["atenciones"].'",
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

$activarPacientes = new TablaPacientes();
$activarPacientes -> mostrarTablaPacientes();
























 ?>