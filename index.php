<?php 

require_once "controladores/plantilla.controlador.php";

/*=============================================
=            CONTROLADORES            =
=============================================*/
require_once "controladores/usuarios.controlador.php";
require_once "controladores/rx.controlador.php";
require_once "controladores/historias.controlador.php";
require_once "controladores/personal-salud.controlador.php";
require_once "controladores/pacientes.controlador.php";
require_once "controladores/atenciones.controlador.php";


/*=============================================
=            MODELOS           =
=============================================*/
require_once "modelos/usuarios.modelo.php";
require_once "modelos/rx.modelo.php";
require_once "modelos/historias.modelo.php";
require_once "modelos/personal-salud.modelo.php";
require_once "modelos/pacientes.modelo.php";
require_once "modelos/atenciones.modelo.php";


/* Llamando a la Clase Controlador plantilla */
$plantilla = new ControladorPlantilla();
/* Ejecutar los metodos de la clase */
$plantilla -> ctrPlantilla();
