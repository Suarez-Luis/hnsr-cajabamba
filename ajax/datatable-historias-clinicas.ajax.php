<?php

require_once "../controladores/atenciones.controlador.php";
require_once "../modelos/atenciones.modelo.php";

require_once "../controladores/personal-salud.controlador.php";
require_once "../modelos/personal-salud.modelo.php";

require_once "../controladores/pacientes.controlador.php";
require_once "../modelos/pacientes.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

require_once "../controladores/historias.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class TablaAtencionesHistorias{

	/*=============================================
	=  MOSTRAR LA TABLA ATENCIONES           =
	=============================================*/

	public function mostrarTablaAtencionesHistorias(){

		$item = null;
        $valor = null;

        $atencion = ControladorAtenciones::ctrMostrarAtenciones($item, $valor);

        

        $datosJson = '{
						"data": [';

							for ($i=0; $i < count($atencion); $i++){

							$imagen = "<img src='".$atencion[$i]["imagen_diagnostico"]."' width='40px'>";

							$botones = "<div class='btn-group'><button class='btn btn-primary agregarAtencion recuperarBoton' idAtencion='".$atencion[$i]["id_atencion"]."'>Agregar</button><button class='btn btn-warning btnEditarAtencion2' idAtencion='".$atencion[$i]["id_atencion"]."' data-toggle='modal' data-target='#modalEditarAtenciones2'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarAtencion1' idAtencion='".$atencion[$i]["id_atencion"]."'><i class='fa fa-times'></i></button></div>";

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
								 "'.$atencion[$i]["servicio"].'",
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

$activarAtencionesHistorias = new TablaAtencionesHistorias();
$activarAtencionesHistorias -> mostrarTablaAtencionesHistorias();





 ?>