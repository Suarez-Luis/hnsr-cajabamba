<!--=====================================
 =     REGISTRO PERSONAL DE SALUD       =
 ======================================-->
 
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

            <table class="col-sm-12">
                <tr>
                  <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">PERSONAL DE SALUD</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">N° DE DNI</td>
                </tr>
              </table>

              <table class="col-sm-6 col-xs-6">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">PROFESIÓN</td>
                </tr>
              </table>

              <!-- ENTRADA DEL DNI -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoDocumento" placeholder="Ingresar #DNI" required>
                </div>
              </div>

              <!-- SELECCIONAR PROFESION -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="nuevaProfesion" id="buscarProfesion" style="width: 100%">
                    <option value="">Seleccionar profesion</option>
                    <option value="Doctor">DOCTOR</option>
                    <option value="Enfermera">LIC. ENFERMERIA</option>
                    <option value="Obstetra">OBTETRICIA</option>
                  </select>
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">NOMBRES</td>
                </tr>
              </table>

              <!-- ENTRADA DEL NOMBRE -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombrePS" placeholder="Ingresar nombre" required>
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">APELLIDOS</td>
                </tr>
              </table>

              <!-- ENTRADA DEL APELLIDO -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoApellidoPS" placeholder="Ingresar apellido" required>
                </div>
              </div>

              <table class="col-sm-12 col-xs-12">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">ESPECIALIDAD</td>
                </tr>
              </table>

              <!-- ENTRADA DE ESPECIALIDAD -->
              <div class="form-group col-sm-12 col-xs-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaEspecialidad" placeholder="Ingrese Especialidad">
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
          $crearPersonalSalud -> ctrCrearPersonalSaludCPANEL();

           ?>

    
    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
<!-- /MODAL REGISTRO PERSONAL DE SALUD -->
</div>

