 <!--=====================================
  =       MODAL EDITAR ATENCIONES        =
  ======================================-->

  <!-- The Modal -->
  <div id="modalEditarAtenciones2" class="modal fade" role="dialog">

<!-- MODAL DIALOG -->
<div class="modal-dialog">

  <!-- CONTENIDO MODAL -->
  <div class="modal-content modal-lg">

    <form role="form" method="post" enctype="multipart/form-data">

        <!-- Modal Header -->
        <div class="modal-header" style="background:#3c8dbc; color:#fff;">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Atención</h4>
          
        </div>



 <!-- Modal body -->
  <div class="modal-body">
    <div class="box-doby">

            <table class="col-sm-12">
              <tr>
                <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DEL REGISTRO</td>
              </tr>
            </table>

            <!-- ENTRADA CODIGO DE LA ATENCIÓN -->
            <div class="form-group col-sm-6 col-xs-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control" id="editarCodigo" name="editarCodigo" readonly>
                <input type="hidden" id="idAtencion" name="idAtencion">
              </div>
            </div>

            <!-- ENTRADA DEL USUARIO QUE REGISTRA LA ATENCIÓN -->
            <div class="form-group col-sm-6 col-xs-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="editarUser" name="editarUser" readonly>
              </div>
            </div>

            <table class="col-sm-12">
                <tr>
                  <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DE LAS ATENCIONES</td>
                </tr>
              </table>

              <table class="col-sm-3">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">FECHA DE ATENCIÒN</td>
                </tr>
              </table>

            <!-- ENTRADA DE FECHA DE ATENCION -->
            <div class="form-group col-sm-9">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="date" class="form-control input-lg" name="editarFechaAtencion2" id="editarFechaAtencion2" >
              </div>
            </div>


              <table class="col-sm-12">
                <tr>
                  <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DEL SERVICIO</td>
                </tr>
              </table>

            <!-- ENTRADA DE UPS -->
            <div class="form-group col-sm-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarUps2" id="editarUps" style="width: 100%">
                  <option value="" id="editarUps2"></option>
                  <option value="Consulta Externa">CONSULTA EXTERNA</option>
                  <option value="Hospitalizacion">HOSPITALIZACION</option>
                  <option value="Emergencia">EMERGENCIA</option>
                  <option value="Medicina Preventiva">MEDICINA PREVENTIVA</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA DE SERVICIO -->
            <div class="form-group col-sm-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarServicio2" id="buscarServicio2" style="width: 100%">
                  <option value="" id="editarServicio2"></option>
                  <option value="Medicina">MEDICINA</option>
                  <option value="Pediatria">PEDIATRIA</option>
                  <option value="Ginecologia">GINECOLOGÍA</option>
                  <option value="Cirugia">CIRUGÍA</option>
                  <option value="Odontologia General">ODONTOLOGÍA GENERAL</option>
                  <option value="Psicologia">PSICOLOGÍA</option>
                </select>
              </div>
            </div>

            <!-- ENTRADA DE ESPECIALIDAD -->
            <div class="form-group col-sm-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarEspecialidad2" id="buscarEspecialidad2" style="width: 100%">
                  <option value="" id="editarEspecialidad2"></option>
                  <option value="Medicina Interna">MEDICINA INTERNA</option>
                  <option value="Medicina General">MEDICINA GENERAL</option>
                  <option value="Gastroenterologia">GASTROENTEROLOGIA</option>
                  <option value="Pediatria">PEDIATRIA GENERAL</option>
                  <option value="Ginecologia">GINECOLOGIA</option>
                  <option value="Cirugia General">CIRUGIA GENERAL</option>
                  <option value="Odontologia General">ODONTOLOGIA GENERAL</option>
                  <option value="Psicologia">PSICOLOGIA</option>
                  <option value="Cred">CRECIMIENTO Y DESARROLLO (CRED)</option>
                  <option value="Obstetricia">OBSTETRICIA (MATERNO, PLANIFICACIÓN FAMILIAR, ETS-VIH)</option>
                </select>
              </div>
            </div>

            <table class="col-sm-12">
                <tr>
                  <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DEL ASEGURADO / USUARIO</td>
                </tr>
              </table>

              <table class="col-sm-3 col-xs-3">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">N° DE DNI</td>
                </tr>
              </table>

              <table class="col-sm-9 col-xs-9">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">NOMBRE COMPLETO</td>
                </tr>
              </table>

            <!-- ENTRADA DEL PACIENTE -->
      
            <div class="form-group col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                
                <select class="form-control input-lg" name="editarPaciente2" id="buscarPaciente3" style="width: 100%">
                  <option value="" id="editarPaciente2"></option>
                  <?php

                  $item = null;
                  $valor = null;

                  $pacientes = ControladorPacientes::ctrMostrarPacientes($item, $valor);

                  foreach ($pacientes as $key => $value) {
                     echo '<option value="'.$value["id_paciente"].'">'.$value["documento"]." ".$value["apellido_pat"]." ".$value["apellido_mat"]." ".$value["nombre1"]." ".$value["nombre2"]." ".$value["nombre3"].'</option>';
                   } 


                   ?>
                </select>
              </div>
            </div>

            <table class="col-sm-12">
                <tr>
                  <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">NOMBRE DEL RESPONSABLE DE LA ATENCIÓN</td>
                </tr>
              </table>

              <table class="col-sm-3 col-xs-3">
                <tr>
                  <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">N° DE DNI</td>
                </tr>
              </table>

              <table class="col-sm-9 col-xs-9">
                <tr>
                <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">NOMBRE COMPLETO</td>
                </tr>
              </table>

            <!-- ENTRADA DEL PERSONAL DE SALUD -->
            <div class="form-group col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="editarPersonalSalud2" id="buscarPersonalSalud2" style="width: 100%">
                  <option value="" id="editarPersonalSalud2"></option>
                  <?php

                  $item = null;
                  $valor = null;

                  $personalSalud = ControladorPersonalSalud::ctrMostrarPersonalSalud($item, $valor);

                  foreach ($personalSalud as $key => $value) {
                     echo '<option value="'.$value["id_personal_salud"].'">'.$value["profesion"]." ".$value["apellido"]." ".$value["nombre"].'</option>';
                   } 


                   ?>
                </select>
              </div>
            </div>

            <table class="col-sm-12 col-xs-12">
                <tr>
                <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">SU DIAGNOSTICO EN TEXTO</td>
                </tr>
              </table>

            
            <!-- ENTRADA DEL DIAGNOSTICO -->
            <div class="form-group col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <textarea class="form-control" id="editarDiagnostico2" name="editarDiagnostico2" rows="3" placeholder="Describe diagnostico (CIEX), ..."></textarea>
                      
              </div>
            </div>

            <table class="col-sm-12 col-xs-12">
                <tr>
                <td style="border: 1px solid #666; width:50px; text-align:center;  background-color:#BDBDBD; font-weight: bold;">SU DIAGNOSTICO EN IMAGEN</td>
                </tr>
              </table>

                 
              
              <div class="form-group col-sm-2 col-xs-0">
              </div>

              <!-- ENTRADA PARA SUBIR FOTO -->    
              <div class="form-group col-sm-8 col-xs-12">
                <div class="panel"></div>
                <input type="file" class="fotoDiagnostico" name="editarFotoDiagnostico">
                <p class="help-block">Peso máximo de la foto 50 MB</p>
                <img src="vistas/img/atenciones/doc/doc3.png" class="img-thumbnail previsualizar" width="500px">
                <input type="hidden" name="fotoActual2" id="fotoActual2">
              </div>

              <div class="form-group col-sm-2 col-xs-0">
              </div>

            

   </div> 
</div>



        <!-- Modal footer -->
        <div class="modal-footer">
         <div class="form-group col-sm-12">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Modificar Atención</button>
         </div>   
        </div>

     </form>

     <?php

        $editarAtencion3 = new ControladorAtenciones();
        $editarAtencion3 -> ctrEditarAtencionCPANEL();

    ?>


  </div>
  <!-- /CONTENIDO MODAL -->
</div>
<!-- /MODAL DIALOG -->
<!-- fin modal agregar pacientes -->
</div>