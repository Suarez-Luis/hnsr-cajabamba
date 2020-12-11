<!--=====================================
  =       MODAL EDITAR PACIENTES         =
  ======================================-->

  <!-- The Modal -->
  <div id="modalEditarPacientes" class="modal fade" role="dialog">

<!-- MODAL DIALOG -->
<div class="modal-dialog">

  <!-- CONTENIDO MODAL -->
  <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

        <!-- Modal Header -->
        <div class="modal-header" style="background:#f39c12; color:#fff;">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Pacientes</h4>
          
        </div>



 <!-- Modal body -->
  <div class="modal-body">
    <div class="box-doby">

            <!-- ENTRADA DEL DOCUMENTO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                <input type="number" class="form-control input-lg" name="editarDoc" id="editarDoc" required>
                <input type="hidden" id="idPaciente" name="idPaciente">
              </div>
            </div>

            <!-- ENTRADA DEL NOMBRE 1 -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarNombre1" id="editarNombre1" >
              </div>
            </div>

            <!-- ENTRADA DEL NOMBRE 2 -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                <input type="text" class="form-control input-lg" name="editarNombre2" id="editarNombre2" >
              </div>
            </div>

            <!-- ENTRADA DEL NOMBRE 3 -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>
                <input type="text" class="form-control input-lg" name="editarNombre3" id="editarNombre3" >
              </div>
            </div>

            <!-- ENTRADA DEL APELLIDO PATERNO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                <input type="text" class="form-control input-lg" name="editarApellido1" id="editarApellido1"  required>
              </div>
            </div>

            <!-- ENTRADA DEL APELLIDO MATERNO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-angle-double-right"></i></span>
                <input type="text" class="form-control input-lg" name="editarApellido2" id="editarApellido2"  required>
              </div>
            </div>

            <!-- ENTRADA DE FECHA DE NACIMIENTO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento"  >
              </div>
            </div>

            <!-- ENTRADA DEL TELEFONO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" required>
              </div>
            </div>

            


   </div> 
</div>



        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-warning">Editar Pasiente</button>
        </div>

     </form>

     <?php

        $editarPacientes = new ControladorPacientes();
        $editarPacientes -> ctrEditarPacientesCPANEL();

    ?>
       
  
  </div>
  <!-- /CONTENIDO MODAL -->
</div>
<!-- /MODAL DIALOG -->
<!-- fin modal editar pacientes -->
</div>