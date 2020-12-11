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
	<table style="font-size:11px; padding:5px 10px;">
		<tr>
			<td style="width:640px; text-align:center; font-size:20px;"><b>ANEXO 1</b></td>
		</tr>
		<tr>
			<td style="border: 1px solid #666; width:200px;"><img style="width:200px; height:40px;" src="images/minsa.jpg"></td>

			<td style="border: 1px solid #666; width:200px;"><img style="width:200px; height:40px" src="images/sis.png"></td>

			<td style="border: 1px solid #666; width:60px; text-align:center; font-size:15px; background-color:#BDBDBD;"><b>NRO #HC</b></td>

			<td style="border: 1px solid #666; width:180px; text-align:center; color:#1E82BA; font-size:30px;">$respuestaPaciente[documento]</td>
		</tr>
	</table>

	<table style="font-size:11px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">FORMATO DE ATENCIÓN VIRTUAL</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:200px;"></td>

			<td style="border: 1px solid #666; width:220px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">FECHA CONSULTA</td>

			<td style="border: 1px solid #666; width:220px; text-align:center; background-color:#BDBDBD; font-weight: bold;">CODIGO HISTORIA CLINICA</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:200px;"></td>

			<td style="border: 1px solid #666; width:220px; text-align:center;"></td>

			<td style="border: 1px solid #666; width:220px; text-align:center; color:#1E82BA;">$valorHistoria</td>
		</tr>
	</table>

	<table style="font-size:11px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DE LA PRESTACIÓN PRESTADORA DE SERVICIOS DE SALUD</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:200px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">CÓDIGO IPRESS</td>

			<td style="border: 1px solid #666; width:440px; text-align:center; background-color:#BDBDBD; font-weight: bold;">NOMBRE DE LA IPRESS QUE REALIZA LA ATENCIÓN</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:200px; text-align:center;">0000004511</td>

			<td style="border: 1px solid #666; width:440px; text-align:center; color: red;">HOSPITAL "NUESTRA SEÑORA DEL ROSARIO" CAJABAMBA </td>
		</tr>
	</table>


EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

//--------------------------------------------------------------------------------------

$bloque2 = <<<EOF

	<div></div>
	
	<table style="font-size:11px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DEL ASEGURADO / USUARIO</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">APELLIDO PATERNO</td>

			<td style="border: 1px solid #666; width:320px; text-align:center; background-color:#BDBDBD; font-weight: bold;">APELLIDO MATERNO</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;">$respuestaPaciente[apellido_pat]</td>

			<td style="border: 1px solid #666; width:320px; text-align:center;">$respuestaPaciente[apellido_mat]</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">PRIMER NOMBRE</td>

			<td style="border: 1px solid #666; width:320px; text-align:center; background-color:#BDBDBD; font-weight: bold;">OTROS NOMBRES</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;">$respuestaPaciente[nombre1]</td>

			<td style="border: 1px solid #666; width:320px; text-align:center;">$respuestaPaciente[nombre2] $respuestaPaciente[nombre3]</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">FECHA DE NACIMIENTO</td>

			<td style="border: 1px solid #666; width:320px; text-align:center; background-color:#BDBDBD; font-weight: bold;">NRO DOCUMENTO</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;">$respuestaPaciente[fecha_nacimiento]</td>

			<td style="border: 1px solid #666; width:320px; text-align:center;">$respuestaPaciente[documento]</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">CREACION DE HISTORIA CLINICA</td>

			<td style="border: 1px solid #666; width:320px; text-align:center; background-color:#BDBDBD; font-weight: bold;">ESTADO DE LA HISTORIA CLINICA</td>
		</tr>

		<tr>
			<td style="border: 1px solid #666; width:320px; text-align:center;">$fecha</td>

			<td style="border: 1px solid #666; width:320px; text-align:center;">$tipo</td>
		</tr>
	</table>

	<div></div>


EOF;



$pdf->writeHTML($bloque2, false, false, false, false, '');

//--------------------------------------------------------------------------------------
$pdf->AddPage();

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">
		<tr>
			<td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DE LAS ATENCIONES</td>
		</tr>

	</table>

	<div></div>






EOF;

$pdf->writeHTML($bloque3, false, false, false, false, '');

//--------------------------------------------------------------------------------------

$pdf->setJPEGQuality(75);

foreach ($atenciones as $key => $item) {

	$key2 = $key + 1;
	

$itemAtencion = "id_atencion";
$valorAtencion = $item["id_atencion"];
$orden = null;

$respuestaAtencion = ControladorAtenciones::ctrMostrarAtenciones($itemAtencion, $valorAtencion, $orden);

$img = $respuestaAtencion["imagen_diagnostico"];
$img2 = $respuestaAtencion["imagen_diagnostico2"];
$img3 = $respuestaAtencion["imagen_diagnostico3"];
$img4 = $respuestaAtencion["imagen_diagnostico4"];

$itemPersonalSalud = "id_personal_salud";
$valorPersonalSalud = $respuestaAtencion["id_personal_salud"];
$respuestaPersonalSalud = ControladorPersonalSalud::ctrMostrarPersonalSalud($itemPersonalSalud, $valorPersonalSalud);

$itemPaciente2 = "id_paciente";
$valorPaciente2 = $respuestaAtencion["id_paciente"];
$respuestaPaciente2 = ControladorPacientes::ctrMostrarPacientes($itemPaciente2, $valorPaciente2);



$bloque4 = <<<EOF

	
	<table style="font-size:10px; padding:5px 10px;">

		<tr>
			<td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">N°</td>

			<td style="border: 1px solid #666; width:128px; text-align:center; background-color:#BDBDBD; font-weight: bold;">FECHA DE ATENCION</td>

			<td style="border: 1px solid #666; width:128px; text-align:center; background-color:#BDBDBD; font-weight: bold;">RESPONSABLE DE LA ATENCIÓN</td>

			<td style="border: 1px solid #666; width:128px; text-align:center; background-color:#BDBDBD; font-weight: bold;">SERVICIO</td>

			<td style="border: 1px solid #666; width:206px; text-align:center; background-color:#BDBDBD; font-weight: bold;">DIAGNOSTICO TEXTO</td>

		</tr>

		<tr>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:50px; text-align:center">
				$key2
			</td>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:128px; text-align:center">
				$item[fecha_atencion]
			</td>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:128px; text-align:center">
				$respuestaPersonalSalud[profesion] $respuestaPersonalSalud[apellido] $respuestaPersonalSalud[nombre]
			</td>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:128px; text-align:center">
				$item[servicio]
			</td>

			<td style="border: 1px solid #666; color:#333; background-color:white; width:206px; text-align:center">
				$item[diagnostico]
			</td>


		</tr>

		<tr>
			<td style="border: 1px solid #666; width:640px; text-align:center; background-color:#BDBDBD; font-weight: bold;">DIAGNOSTICO IMG</td>
			
		</tr>

		<tr>
			<td style="border: 1px solid #666; color:#333; background-color:white; width:640px; text-align:center">
			<img style="width:600; height:600px;" src="../../../$img">
			<img style="width:600; height:600px;" src="../../../$img2">
			<img style="width:600; height:600px;" src="../../../$img3">
			<img style="width:600; height:600px;" src="../../../$img4">

			
			</td>
		</tr>


	</table>

	<br>
	<br>

EOF;


$pdf->writeHTML($bloque4, false, false, false, false, '');



$pdf->AddPage();



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