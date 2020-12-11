<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>HOSPITAL NUESTRA SEÑORA DEL ROSARIO - CAJABAMBA</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/icono-blanco172.png">

  <!--=====================================
  PLUGINS CSS           =
  ======================================-->

  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Font Awesome 5.1 PRO -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <link rel="stylesheet" href="vistas/bower_components/datatables.net/js/botones/css/buttons.dataTables.min.css">

  <!-- Select 2 -->
  <link rel="stylesheet" href="vistas/bower_components/select2/dist/css/select2.css">

  <!--=====================================
  PLUGINS JAVASCRIPT           =
  ======================================-->

    <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!-- DataTables Botones -->
  <script src="vistas/bower_components/datatables.net/js/botones/js/dataTables.buttons.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/botones/js/buttons.flash.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/botones/js/jszip.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/botones/js/pdfmake.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/botones/js/vfs_fonts.js"></script>
  <script src="vistas/bower_components/datatables.net/js/botones/js/buttons.html5.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/botones/js/buttons.print.min.js"></script>

  <!-- SWEET ALERT 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- Select 2 -->
  <script src="vistas/bower_components/select2/dist/js/select2.js"></script>

  
  



</head>

  <!--=====================================
  CUERPO DEL DOCUMENTO           =
  ======================================-->


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

  <!-- =============================================== -->

    <?php 

    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    

        echo '<div class="wrapper">';

        /*=============================================
        ENCABEZADO
        =============================================*/

        include "modulos/cabezote.php";

        /*=============================================
        MENU
        =============================================*/

        include "modulos/menu.php";

        /*=============================================
        CONTENIDO
        =============================================*/

        if (isset($_GET["ruta"])) {

          if ($_GET["ruta"] == "inicio" ||
              $_GET["ruta"] == "usuarios" ||
              $_GET["ruta"] == "personal-salud" ||
              $_GET["ruta"] == "pacientes" ||
              $_GET["ruta"] == "atenciones" ||
              $_GET["ruta"] == "historias-clinicas" ||
              $_GET["ruta"] == "historias-clinicas-crear" ||
              $_GET["ruta"] == "historias-clinicas-editar" ||
              $_GET["ruta"] == "rx-admin" ||
              $_GET["ruta"] == "rx-crud" ||
              $_GET["ruta"] == "rx-reportes" ||
              $_GET["ruta"] == "emergencia" ||
              $_GET["ruta"] == "salir") {
            
            include "modulos/".$_GET["ruta"].".php";
          }else{

            include "modulos/404.php";
          }
        }

      

        /*=============================================
        PIE DE PAGINA
        =============================================*/

        include "modulos/footer.php";

        echo '</div>';

    }else{

      include "modulos/login.php";
    }


     ?>
  

  

<script type="text/javascript" src="vistas/js/plantilla.js"></script>
<script type="text/javascript" src="vistas/js/usuarios.js"></script>
<script type="text/javascript" src="vistas/js/pacientes.js"></script>
<script type="text/javascript" src="vistas/js/personal-salud.js"></script>
<script type="text/javascript" src="vistas/js/atenciones.js"></script>
<script type="text/javascript" src="vistas/js/historias-clinicas.js"></script>
</body>
</html>
