<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMINISTRAR PERSONAL DE SALUD
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
          
          <button class="btn btn btn-primary" data-toggle="modal" data-target="#modalAgregarPersonalSalud">
            Agregar Personal de Salud
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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Último login</th>
                <th>Acciones</th>
              </tr>
            </thead>
              <tr>
                <td>1</td>
                <td>Luis</td>
                <td>Suarez</td>
                <td>admin</td>
                <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
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
<div id="modalAgregarPersonalSalud" class="modal fade" role="dialog">

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

              <!-- ENTRADA DEL NOMBRE -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombrePS" placeholder="Ingresar nombre" required>
                </div>
              </div>

              <!-- ENTRADA DEL APELLIDO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoApellidoPS" placeholder="Ingresar apellido" required>
                </div>
              </div>

              <!-- ENTRADA DEL DNI -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoDocumento" placeholder="Ingresar #DNI" required>
                </div>
              </div>

              <!-- SELECCIONAR PROFESION -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="nuevaProfesion">
                    <option value="">Seleccionar profesion</option>
                    <option value="Administrador">DOCTOR</option>
                    <option value="Especial">LIC. ENFERMERIA</option>
                    <option value="Basico">OBTETRICIA</option>
                  </select>
                </div>
              </div>

              <!-- ENTRADA DE ESPECIALIDAD -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaEspecialidad" placeholder="Ingrese Especialidad" required>
                </div>
              </div>


            </div> 
          </div>



          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Guardar Personal de Salud</button>
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