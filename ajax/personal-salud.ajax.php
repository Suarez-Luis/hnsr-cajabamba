<?php

require_once "../controladores/personal-salud.controlador.php"; 
require_once "../modelos/personal-salud.modelo.php"; 

class AjaxPersonalSalud{

	/*=============================================
	=          METODO EDITAR PACIENTE         =
	=============================================*/
	
	public $idPersonalSalud;

	public function ajaxEditarPersonalSalud(){

		$item = "id_personal_salud";
		$valor = $this->idPersonalSalud;

		$respuesta = ControladorPersonalSalud::ctrMostrarPersonalSalud($item, $valor);

		echo json_encode($respuesta);

	}



}

/*=============================================
=          OBJETO EDITAR PACIENTE            =
=============================================*/

if (isset($_POST["idPersonalSalud"])){
	
	$editarPersonalSalud = new AjaxPersonalSalud();
	$editarPersonalSalud -> idPersonalSalud = $_POST["idPersonalSalud"];
	$editarPersonalSalud -> ajaxEditarPersonalSalud();
}