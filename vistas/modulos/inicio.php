<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Panel de contorl</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">tablero</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

<!--=====================================
=      LO QUE PUEDE VISUALIZAR EL USUARIO ADMINISTRADOR    =
======================================-->

      <?php

      if($_SESSION["perfil"] =="Administrador"){  

      echo '<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">PERFIL ADMINISTRADOR</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Hello Administrador!!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>';

      }

      ?>
<!--====  FIN VISUALIZAR EL USUARIO ADMINISTRADOR   ====-->

<!--=====================================
= LO QUE PUEDE VISUALIZAR EL USUARIO ESPECIAL Y BASICO =
======================================-->


      <div class="col-lg-12">

        <?php

        if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico"){

          echo '<div class="box box-success">

          <div class="box-header">

          <h1>Bienvenid@ '.$_SESSION["nombre"]." ".$_SESSION["apellido"].'</h1>

          </div>

          </div>';

        } 

         ?>
        
      </div>

<!--====  End of Section comment  ====-->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->