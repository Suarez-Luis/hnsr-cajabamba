<?php

require_once "../../../controladores/historias.controlador.php";
require_once "../../../modelos/historias.modelo.php";

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";

require_once "../../../controladores/pacientes.controlador.php";
require_once "../../../modelos/pacientes.modelo.php";

require_once "../../../controladores/atenciones.controlador.php";
require_once "../../../modelos/atenciones.modelo.php";

require_once "../../../controladores/personal-salud.controlador.php";
require_once "../../../modelos/personal-salud.modelo.php";



class imprimirHistoriaClinica{


public $iddHistoria;

public function traerImpresionHistoriaClinica(){

/*=============================================
=    TRAERMOS LA INFORMACION DE LA HISTORIA CLINICA   =
=============================================*/

$itemHistoria = "id_historia_clinica";
$valorHistoria = $this->iddHistoria;

$respuestaHistoria = ControladorHistoriasClinicas::ctrMostrarHistoriasClinicas($itemHistoria, $valorHistoria);

$fecha = substr($respuestaHistoria["fecha"],0,-8);
$atenciones = json_decode($respuestaHistoria["atenciones"], true);
$tipo = substr($respuestaHistoria["tipo"],0);

/*=============================================
=    TRAERMOS PACIENTE   =
=============================================*/

$itemPaciente = "id_paciente";
$valorPaciente = $respuestaHistoria["id_paciente"];

$respuestaPaciente = ControladorPacientes::ctrMostrarPacientes($itemPaciente, $valorPaciente);

/*=============================================
=    TRAERMOS USUARIOS   =
=============================================*/

$itemUsuario = "id_usuario";
$valorUsuario = $respuestaHistoria["id_usuario"];

$respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);




// REQUERIMOS LA CLASE TCPDF

require_once('tcpdf_include.php');


//--------------------------------------------------------------------------------------


// Extend the TCPDF class to create custom Header and Footer



//--------------------------------------------------------------------------------------

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

/*=============================================
=   CABECERA Y PIE DE PAGINA        =
=============================================*/



// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, PDF_HEADER_LOGO2, array(0,64,255), array(0,64,128));



// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

/*=====  Fin cabecera y pie de pagina ======*/



$pdf->startPageGroup();

$pdf->AddPage();


//--------------------------------------------------------------------------------------

$bloque1 = <<<EOF

<br>
<br>
	<table>
		<tr>
			<td style="width:540px"><img src="images/bloque1.jpg"></td>
		</tr>
	</table>


	<table>

	 <tr>
	   <td style="width:150px"></td>

	   <td style="background-color:white; width:240px">
	   	<div style="background-color:white; width:150px; text-align:center; color:#1E82BA;">
	   		<b>HISTORIA CLINICA NÚMERO</b><br>$valorHistoria
	   	</div>
	   </td>

	   <td style="width:150px;"></td>

	 </tr>

	</table>


EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

//--------------------------------------------------------------------------------------

$bloque2 = <<<EOF

	<table>
		<tr>
			<td style="width:540px"><img src="images/back.jpg"></td>
		</tr>
	</table>
	
	<table style="font-size:10px; padding:5px 10px;">
		<tr>

			<td style="border: 1px solid #666; background-color:white; width:350px">
				<b>PACIENTE:</b>&nbsp;&nbsp; $respuestaPaciente[apellido_pat] $respuestaPaciente[apellido_mat] $respuestaPaciente[nombre1] $respuestaPaciente[nombre2] $respuestaPaciente[nombre3]
			</td>

			<td style="border: 1px solid #666; background-color:white; width:190px; text-align:right">
				<b>FECHA CREACIÓN:&nbsp;</b> $fecha
			</td>

		</tr>

		<tr>
			<td style="border: 1px solid #666; background-color:white; width:540px"><b>ESTADO DE LA HISTORIA CLINICA:</b>&nbsp;&nbsp; $tipo</td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #666; background-color:white; width:540px"></td>
		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

//--------------------------------------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">
		<tr>
	
			<td style="border: 1px solid #666; background-color:white; width:70px; text-align:center"><b>Nº DOC.</b></td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center"><b>PERSONAL DE SALUD</b></td>
			<td style="border: 1px solid #666; background-color:white; width:80px; text-align:center"><b>SERVICIO</b></td>
			<td style="border: 1px solid #666; background-color:white; width:190px; text-align:center"><b>DIAGNOSTICO</b></td>
			<td style="border: 1px solid #666; background-color:white; width:100px; text-align:center"><b>FECHA DE ATENCIÓN</b></td>	

		</tr>
	</table>






EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');

//--------------------------------------------------------------------------------------

foreach ($atenciones as $key => $item) {

$itemAtencion = "id_atencion";
$valorAtencion = $item["id_atencion"];
$orden = null;

$respuestaAtencion = ControladorAtenciones::ctrMostrarAtenciones($itemAtencion, $valorAtencion, $orden);

$itemPersonalSalud = "id_personal_salud";
$valorPersonalSalud = $respuestaAtencion["id_personal_salud"];
$respuestaPersonalSalud = ControladorPersonalSalud::ctrMostrarPersonalSalud($itemPersonalSalud, $valorPersonalSalud);

$itemPaciente2 = "id_paciente";
$valorPaciente2 = $respuestaAtencion["id_paciente"];
$respuestaPaciente2 = ControladorPacientes::ctrMostrarPacientes($itemPaciente2, $valorPaciente2);



$bloque4 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">
		<tr>

		<td style="border: 1px solid #666; color:#333; background-color:white; width:70px; text-align:center">
			$respuestaPaciente2[documento]
		</td>

		<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">
			$respuestaPersonalSalud[profesion] $respuestaPersonalSalud[apellido] $respuestaPersonalSalud[nombre]
		</td>

		<td style="border: 1px solid #666; color:#333; background-color:white; width:80px; text-align:center">
			$item[servicio]
		</td>

		<td style="border: 1px solid #666; color:#333; background-color:white; width:190px; text-align:center">
			$item[diagnostico]
		</td>

		<td style="border: 1px solid #666; color:#333; background-color:white; width:100px; text-align:center">
			$item[fecha_atencion]
		</td>

		</tr>
	</table>

EOF;

$pdf->writeHTML($bloque4, false, false, false, false, '');


}

//--------------------------------------------------------------------------------------

/*=============================================
 =     SALIDA DEL ARCHIVO            =
 =============================================*/

$pdf->Output('historia-clinica.pdf');

/*=====  Fin funcion traerImpresionHistoriaClinica  ======*/
}


/*=====  Fin clase imprimirHistoriaClinica  ======*/
}



$historiaClinica = new imprimirHistoriaClinica();
$historiaClinica -> iddHistoria = $_GET["iddHistoria"];
$historiaClinica -> traerImpresionHistoriaClinica();



?>