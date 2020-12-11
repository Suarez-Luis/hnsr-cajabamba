<?php

require_once "../controladores/atenciones.controlador.php";
require_once "../modelos/atenciones.modelo.php";

require_once "../controladores/personal-salud.controlador.php";
require_once "../modelos/personal-salud.modelo.php";

require_once "../controladores/pacientes.controlador.php";
require_once "../modelos/pacientes.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class TablaAtenciones{

	/*=============================================
	=  MOSTRAR LA TABLA ATENCIONES           =
	=============================================*/

	public function mostrarTablaAtenciones(){

		$item = null;
        $valor = null;

        $atencion = ControladorAtenciones::ctrMostrarAtenciones($item, $valor);

        

        $datosJson = '{
						"data": [';

							for ($i=0; $i < count($atencion); $i++){

							$imagen = "<img src='".$atencion[$i]["imagen_diagnostico"]."' width='40px'>";

							$botones = "<div class='btn-group'><button class='btn btn-warning btnEditarAtencion' idAtencion='".$atencion[$i]["id_atencion"]."' data-toggle='modal' data-target='#modalEditarAtenciones'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarAtencion' idAtencion='".$atencion[$i]["id_atencion"]."'><i class='fa fa-times'></i></button></div>";

							/*=============================================
							=  TRAEMOS USUARIOS          =
							=============================================*/

							$item = "id_usuario";
							$valor = $atencion[$i]["id_usuario"];
							$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

							/*=============================================
							=  TRAEMOS PERSONAL DE SALUD          =
							=============================================*/

							$item = "id_personal_salud";
							$valor = $atencion[$i]["id_personal_salud"];
							$personalSalud = ControladorPersonalSalud::ctrMostrarPersonalSalud($item, $valor);

							/*=============================================
							=  TRAEMOS PACIENTE       =
							=============================================*/

							$item = "id_paciente";
							$valor = $atencion[$i]["id_paciente"];
							$paciente = ControladorPacientes::ctrMostrarPacientes($item, $valor);



								
								$datosJson .='[
								 "'.($i+1).'",
								 "'.$atencion[$i]["fecha_atencion"].'",
								 "'.$personalSalud["profesion"]." ".$personalSalud["apellido"].'",
								 "'.$paciente["documento"]." ".$paciente["apellido_pat"]." ".$paciente["apellido_mat"]." ".$paciente["nombre1"].'",
								 "'.$atencion[$i]["ups"].'",
								 "'.$atencion[$i]["servicio"].'",
								 "'.$atencion[$i]["especialidad"].'",
								 "'.$atencion[$i]["diagnostico"].'",
								 "'.$imagen.'",
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

$activarAtenciones = new TablaAtenciones();
$activarAtenciones -> mostrarTablaAtenciones();







 ?>