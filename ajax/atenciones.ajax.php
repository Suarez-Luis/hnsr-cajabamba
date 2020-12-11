<?php

require_once "../controladores/atenciones.controlador.php"; 
require_once "../modelos/atenciones.modelo.php";

require_once "../controladores/personal-salud.controlador.php";
require_once "../modelos/personal-salud.modelo.php";

require_once "../controladores/pacientes.controlador.php";
require_once "../modelos/pacientes.modelo.php";

class AjaxAtencion{

	/*=============================================
	=          METODO EDITAR ATENCION         =
	=============================================*/
	
	public $idAtencion;
	public $traerAtenciones;
	public $movilAtencion;

	public function ajaxEditarAtencion(){

		if ($this->traerAtenciones == "ok") {
			
			$item = null;
			$valor = null;

			$respuesta = ControladorAtenciones::ctrMostrarAtenciones($item, $valor);

			echo json_encode($respuesta);

		}else if($this->movilAtencion != ""){

			$item = "id_atencion";
			$valor = $this->movilAtencion;

			$respuesta = ControladorAtenciones::ctrMostrarAtenciones($item, $valor);

			echo json_encode($respuesta);

		}else{

			$item = "id_atencion";
			$valor = $this->idAtencion;

			$respuesta = ControladorAtenciones::ctrMostrarAtenciones($item, $valor);

			echo json_encode($respuesta);

		}	

	}

}

/*=============================================
=          OBJETO EDITAR ATENCION            =
=============================================*/

if (isset($_POST["idAtencion"])){
	
	$editarAtencion = new AjaxAtencion();
	$editarAtencion -> idAtencion = $_POST["idAtencion"];
	$editarAtencion -> ajaxEditarAtencion();
}

/*=============================================
=          TRAER ATENCIONES          =
=============================================*/

if (isset($_POST["traerAtenciones"])){
	
	$traerAtenciones = new AjaxAtencion();
	$traerAtenciones -> traerAtenciones = $_POST["traerAtenciones"];
	$traerAtenciones -> ajaxEditarAtencion();
}

/*=============================================
=          TRAER ATENCIONES          =
=============================================*/

if (isset($_POST["movilAtencion"])){
	
	$movilAtencion = new AjaxAtencion();
	$movilAtencion -> movilAtencion = $_POST["movilAtencion"];
	$movilAtencion -> ajaxEditarAtencion();
}