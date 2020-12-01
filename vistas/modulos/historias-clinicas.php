<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMINISTRAR HISTORIAS CLINICAS
        <small>Panel de contorl</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">tablero</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <a href="historias-clinicas-crear">
            <button class="btn btn btn-primary" data-toggle="modal" data-target="#modalAgregarHistooriaClinica">
              Agregar Historia Clinica
            </button>
          </a>

          
          <!--====  BOTONES MINIMIZAR Y ELIMINAR ====-->
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>


        </div>


        <div class="box-body">

          <table class="table table-bordered table-striped text-uppercase dt-responsive tablasHistoria" width="100%">

            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Usuario</th>
                <th>Nº Historia Clinica</th>
                <th>Paciente</th>
                <th>Tipo</th>
                <th>Fecha</th>
                <th>Acciones</th>
              </tr>
            </thead>


          </table>

          <?php

          $eliminarHistoriaClinica = new ControladorHistoriasClinicas();
          $eliminarHistoriaClinica -> ctrEliminarHistoriaClinica(); 

           ?>
          


        </div>
        <!-- /.box-body -->


        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->


      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




