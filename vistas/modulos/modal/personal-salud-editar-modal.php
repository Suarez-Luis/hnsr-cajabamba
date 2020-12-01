 <!--=====================================
 =     EDITAR PERSONAL DE SALUD CPANEL      =
 ======================================-->
 
  <!-- The Modal -->
  <div id="modalEditarPersonalSalud" class="modal fade" role="dialog">

<!-- MODAL DIALOG -->
<div class="modal-dialog">

  <!-- CONTENIDO MODAL -->
  <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

        <!-- Modal Header -->
        <div class="modal-header" style="background:#3c8dbc; color:#fff;">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Personal de Salud</h4>
          
        </div>



        <!-- Modal body -->
        <div class="modal-body">
          <div class="box-doby">

            <!-- ENTRADA DEL NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarNombrePS" id="editarNombrePS" required>
                <input type="hidden" id="idPersonalSalud" name="idPersonalSalud">
              </div>
            </div>

            <!-- ENTRADA DEL APELLIDO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarApellidoPS" id="editarApellidoPS" required>
              </div>
            </div>

            <!-- ENTRADA DEL DNI -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" name="editarDocumento" id="editarDocumento" required>
              </div>
            </div>

            <!-- SELECCIONAR PROFESION -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarProfesion">
                  <option value="" id="editarProfesion"></option>
                  <option value="Doctor">DOCTOR</option>
                  <option value="Enfermera">LIC. ENFERMERIA</option>
                  <option value="Obstetra">OBTETRICIA</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA DE ESPECIALIDAD -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control input-lg" name="editarEspecialidad" id="editarEspecialidad" required>
              </div>
            </div>


          </div> 
        </div>



        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Editar Personal de Salud</button>
        </div>

     </form>

     <?php

        $editarPersonalSalud = new ControladorPersonalSalud();
        $editarPersonalSalud -> ctrEditarPersonalSaludCPANEL();

    ?>


  </div>
  <!-- /CONTENIDO MODAL -->
</div>
<!-- /MODAL DIALOG -->
<!-- /MODAL REGISTRO PERSONAL DE SALUD -->
</div>
