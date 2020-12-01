<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMINISTRAR PACIENTES
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
          
          <button class="btn btn btn-primary" data-toggle="modal" data-target="#modalAgregarPacientes">
            Agregar Pacientes
          </button>

          
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

          <table class="table table-bordered table-striped dt-responsive tablas">

            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Documento</th>
                <th>N1</th>
                <th>N2</th>
                <th>N3</th>
                <th>Ap1</th>
                <th>Ap2</th>
                <th>Fecha Nacimiento</th>
                <th>telefono</th>
                <th>atenciones</th>
                <th>Acciones</th>
              </tr>
            </thead>
              <tr>
                <td>1</td>
                <td>Luis</td>
                <td>Andrés</td>
                <td>Andrés1</td>
                <td>Suárez</td>
                <td>Orbegoso</td>
                <td>1990-05-10</td>
                <td>942869551</td>
                <td>2</td>
                <td>27-12-11 12:05:32</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>
            <tbody>
              
            </tbody>

          </table>
          


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




  <!-- MODAL AGREGAR PERSONAL DE SALUD -->

  <!-- The Modal -->
<div id="modalAgregarPacientes" class="modal fade" role="dialog">

  <!-- MODAL DIALOG -->
  <div class="modal-dialog">

    <!-- CONTENIDO MODAL -->
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

          <!-- Modal Header -->
          <div class="modal-header" style="background:#3c8dbc; color:#fff;">
            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Personal de Salud</h4>
            
          </div>



   <!-- Modal body -->
    <div class="modal-body">
      <div class="box-doby">

              <!-- ENTRADA DEL DOCUMENTO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoDoc" placeholder="Ingresar 1er nombre" required>
                </div>
              </div>

              <!-- ENTRADA DEL NOMBRE 1 -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombre1" placeholder="Ingresar 1er nombre" required>
                </div>
              </div>

              <!-- ENTRADA DEL NOMBRE 2 -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombre2" placeholder="Ingresar 2do nombre" >
                </div>
              </div>

              <!-- ENTRADA DEL NOMBRE 3 -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombre3" placeholder="Ingresar 3er nombre" >
                </div>
              </div>

              <!-- ENTRADA DEL APELLIDO PATERNO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoApellido1" placeholder="Ingresar 1er apellido" required>
                </div>
              </div>

              <!-- ENTRADA DEL APELLIDO MATERNO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoApellido2" placeholder="Ingresar 2do apellido" required>
                </div>
              </div>

              <!-- ENTRADA DE FECHA DE NACIMIENTO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="date" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar Fecha de Nacimiento" required>
                </div>
              </div>

              <!-- ENTRADA DEL TELEFONO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar #Telefono" required>
                </div>
              </div>

              


     </div> 
  </div>



          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar Pasiente</button>
          </div>

       </form>

       
          <?php

          $crearPersonalSalud = new ControladorPersonalSalud();
          $crearPersonalSalud -> ctrCrearPersonalSalud();

           ?>

    
    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
</div>
<!-- /MODAL -->