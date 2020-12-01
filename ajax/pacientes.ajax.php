<?php

require_once "../controladores/pacientes.controlador.php"; 
require_once "../modelos/pacientes.modelo.php"; 

class AjaxPacientes{

	/*=============================================
	=          METODO EDITAR PACIENTE         =
	=============================================*/
	
	public $idPaciente;

	public function ajaxEditarPaciente(){

		$item = "id_paciente";
		$valor = $this->idPaciente;

		$respuesta = ControladorPacientes::ctrMostrarPacientes($item, $valor);

		echo json_encode($respuesta);

	}



}

/*=============================================
=          OBJETO EDITAR PACIENTE            =
=============================================*/

if (isset($_POST["idPaciente"])){
	
	$editarPaciente = new AjaxPacientes();
	$editarPaciente -> idPaciente = $_POST["idPaciente"];
	$editarPaciente -> ajaxEditarPaciente();
}