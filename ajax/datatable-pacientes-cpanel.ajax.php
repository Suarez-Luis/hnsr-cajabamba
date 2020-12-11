<?php 

require_once "../controladores/pacientes.controlador.php";
require_once "../modelos/pacientes.modelo.php";


class TablaPacientes2{

	/*=============================================
	=  MOSTRAR LA TABLA ATENCIONES           =
	=============================================*/

	public function mostrarTablaPacientes2(){

		$item = null;
        $valor = null;

        $pacientes2 = ControladorPacientes::ctrMostrarPacientes($item, $valor);

        

        $datosJson = '{
						"data": [';

							for ($i=0; $i < count($pacientes2); $i++){

							$botones = "<div class='btn-group'><button class='btn btn-warning btnEditarPaciente' data-toggle='modal' data-target='#modalEditarPacientes' idPaciente='".$pacientes2[$i]["id_paciente"]."'><i class='fa fa-pencil'></i><button class='btn btn-danger btnEliminarPacienteCPANEL' idPaciente='".$pacientes2[$i]["id_paciente"]."'><i class='fa fa-times'></i></button></div>";

															
								$datosJson .='[
								 "'.($i+1).'",
								 "'.$pacientes2[$i]["documento"].'",
								 "'.$pacientes2[$i]["nombre1"].'",
								 "'.$pacientes2[$i]["nombre2"].'",
								 "'.$pacientes2[$i]["nombre3"].'",
								 "'.$pacientes2[$i]["apellido_pat"].'",
								 "'.$pacientes2[$i]["apellido_mat"].'",
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

$activarPacientes2 = new TablaPacientes2();
$activarPacientes2 -> mostrarTablaPacientes2();





 ?>