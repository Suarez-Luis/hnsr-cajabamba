<?php

require_once "../controladores/historias.controlador.php";
require_once "../modelos/historias.modelo.php";


class ajaxHC{

	
	
	/*=============================================
	=          VALIDAR NO REPETIR USUARIO            =
	=============================================*/

	public $validarPacienteHC;

	public function ajaxValidarPacienteHC(){

		$item = "id_paciente";
		$valor = $this->validarPacienteHC;

		$respuesta = ControladorHistoriasClinicas::ctrMostrarHistoriasClinicas($item, $valor);

		echo json_encode($respuesta);




	}

}



/*=============================================
 =          VALIDAR NO REPETIR PACIENTE HISTORIA CLINICA            =
=============================================*/


if(isset($_POST["validarPacienteHC"])){

	$valPacienteHC = new ajaxHC();
	$valPacienteHC -> validarPacienteHC = $_POST["validarPacienteHC"];
	$valPacienteHC -> ajaxValidarPacienteHC();
}




 ?>