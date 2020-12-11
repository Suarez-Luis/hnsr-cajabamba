
<header class="main-header">
    
    <!--=====================================
    LOGOTIPO 
    ======================================-->

    <a href="inicio" class="logo">

      <!-- logo mini -->
      <span class="logo-mini">
          <img src="vistas/img/plantilla/icono-blanco172.png" class="img-responsive" style="padding:10px">
      </span>
      <!-- logo normal -->
      <span class="logo-lg">
        <img src="vistas/img/plantilla/logo-blanco-lineal800.png" class="img-responsive hidden-xs" style="padding:5px 0px">

        <img src="vistas/img/plantilla/log_movil.png" class="img-responsive hidden-lg hidden-md hidden-sm" style="padding:5px 0px">
      </span>

    </a>

    <!--=====================================
    BARRA DE NAVEGACION
    ======================================-->

    <nav class="navbar navbar-static-top">

      <!-- Botòn de navegaciòn-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <!-- Perfil de usuario -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <?php if ($_SESSION["foto"] != ""){
                  echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
              }else{
                  echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
              }

                ?>
                
              <span class="hidden-xs"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></span>
            </a>

             <!-- Perfil de usuario -->
            <ul class="dropdown-menu">
              <li class="user-body">
                <div class="pull-right">
                  <a href="salir" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>


          </li>
        </ul>
      </div>

    </nav>
    
    
  </header>