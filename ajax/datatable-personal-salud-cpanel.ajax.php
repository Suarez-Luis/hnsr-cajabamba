<?php 

require_once "../controladores/personal-salud.controlador.php";
require_once "../modelos/personal-salud.modelo.php";


class TablaPersonalSaludCPANEL{

	/*=============================================
	=  MOSTRAR LA TABLA ATENCIONES           =
	=============================================*/

	public function mostrarTablaPersonalSaludCPANEL(){

		$item = null;
        $valor = null;

        $personalSalud2 = ControladorPersonalSalud::ctrMostrarPersonalSalud($item, $valor);

        

        $datosJson = '{
						"data": [';

							for ($i=0; $i < count($personalSalud2); $i++){

							$botones = "<div class='btn-group'><button class='btn btn-warning btnEditarPersonalSalud' data-toggle='modal' data-target='#modalEditarPersonalSalud' idPersonalSalud='".$personalSalud2[$i]["id_personal_salud"]."'><i class='fa fa-pencil'></i><button class='btn btn-danger btnEliminarPersonalSalud2' idPersonalSalud='".$personalSalud2[$i]["id_personal_salud"]."'><i class='fa fa-times'></i></button></div>";

															
								$datosJson .='[
								 "'.($i+1).'",
								 "'.$personalSalud2[$i]["nombre"].'",
								 "'.$personalSalud2[$i]["apellido"].'",
								 "'.$personalSalud2[$i]["documento"].'",
								 "'.$personalSalud2[$i]["profesion"].'",
								 "'.$personalSalud2[$i]["especialidad"].'",
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

$activarPersonalSalud2 = new TablaPersonalSaludCPANEL();
$activarPersonalSalud2 -> mostrarTablaPersonalSaludCPANEL();





 ?>