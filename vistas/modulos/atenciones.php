<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ADMINISTRAR ATENCIONES
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
          
          <button class="btn btn btn-primary" data-toggle="modal" data-target="#modalAgregarAtenciones">
            Agregar Atención
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

          <table class="table table-bordered table-striped dt-responsive text-uppercase tablaAtenciones" width="100%">

            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Fecha de Atención</th>
                <th>Personal de Salud</th>
                <th>Paciente</th>
                <th>UPS</th>
                <th>Servicio</th>
                <th>Especialidad</th>
                <th>Diagnostico</th>
                <th>IMG DIAG</th>
                <th>Acciones</th>
              </tr>
            </thead>

            

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




  <!--=====================================
  =       MODAL AGREGAR ATENCIONES        =
  ======================================-->

  <!-- The Modal -->
<div id="modalAgregarAtenciones" class="modal fade" role="dialog">

  <!-- MODAL DIALOG -->
  <div class="modal-dialog">

    <!-- CONTENIDO MODAL -->
    <div class="modal-content modal-lg">

      <form role="form" method="post" enctype="multipart/form-data">

          <!-- Modal Header -->
          <div class="modal-header" style="background:#3c8dbc; color:#fff;">
            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Atención</h4>
            
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
                  <?php

                  $item = null;
                  $valor = null;

                  $atencion = ControladorAtenciones::ctrMostrarAtenciones($item, $valor);

                  if (!$atencion) {
                    
                     echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="1" readonly>';
                     
                   }else{

                    foreach ($atencion as $key => $value) {
                      # code...
                    }

                    $codigo = $value["codigo_atencion"] +1;

                    echo '<input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" value="'.$codigo.'" readonly>';
                   }

                   ?>
                  
                </div>
              </div>

              <!-- ENTRADA DEL USUARIO QUE REGISTRA LA ATENCIÓN -->
              <div class="form-group col-sm-6 col-xs-6">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" id="idUser" name="idUser" value="<?php echo $_SESSION["perfil"]; ?>" readonly>
                  <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id_usuario"]; ?>">
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
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="date" class="form-control input-lg" name="nuevaFechaAtencion" >
                </div>
              </div>

              <table class="col-sm-6">
                <div style="margin: 50px 50px 50px 50px;"><p></p></div>
              </table>

              <table class="col-sm-12">
                <tr>
                  <td style="border: 1px solid #666; width:640px; text-align:center; background-color:#A4A4A4; font-weight: bold;">DEL SERVICIO</td>
                </tr>
              </table>

              <!-- ENTRADA DE UPS -->
              <div class="form-group col-sm-4">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="nuevaUps" id="buscarUps" style="width: 100%">
                    <option value="">Seleccionar UPS</option>
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
                  <select class="form-control input-lg" name="nuevoServicio" id="buscarServicio" style="width: 100%">
                    <option value="">Seleccionar Servicio</option>
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
                  <select class="form-control input-lg" name="nuevaEspecialidad" id="buscarEspecialidad" style="width: 100%">
                    <option value="">Seleccionar Especialidad</option>
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
                  <select class="form-control input-lg" name="nuevoPaciente" id="buscarPaciente2" style="width: 100%">
                    <option value="">Seleccionar paciente</option>
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
                  <select class="form-control input-lg" name="nuevaPersonalSalud" id="buscarPersonalSalud" style="width: 100%">
                    <option value="">Seleccionar Personal de Salud</option>
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

                  <textarea class="form-control" id="nuevoDiagnostico" name="nuevoDiagnostico" rows="3" placeholder="Describe diagnostico (CIEX), ..."></textarea>
                        
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
                <input type="file" class="fotodiagnostico" name="fotodiagnostico">
                <p class="help-block">Peso máximo de la foto 50 MB</p>
                <img src="vistas/img/atenciones/doc/doc3.png" class="img-thumbnail previsualizar" width="500px">
              </div>

              <div class="form-group col-sm-2 col-xs-0">
              </div>

              

     </div> 
  </div>



          <!-- Modal footer -->
          <div class="modal-footer">
           <div class="form-group col-sm-12">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-primary">Guardar Atención</button>
            </div>
          </div>

       </form>


       <?php

          $atenciones = new ControladorAtenciones();
          $atenciones -> ctrCrearAtencion();

      ?>


    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
<!-- fin modal agregar pacientes -->
</div>




 <!--=====================================
  =       MODAL EDITAR ATENCIONES        =
  ======================================-->

  <!-- The Modal -->
<div id="modalEditarAtenciones" class="modal fade" role="dialog">

  <!-- MODAL DIALOG -->
  <div class="modal-dialog">

    <!-- CONTENIDO MODAL -->
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

          <!-- Modal Header -->
          <div class="modal-header" style="background:#3c8dbc; color:#fff;">
            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Editar Atención</h4>
            
          </div>



   <!-- Modal body -->
    <div class="modal-body">
      <div class="box-doby">

              <!-- ENTRADA CODIGO DE LA ATENCIÓN -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="text" class="form-control" id="editarCodigo" name="editarCodigo" readonly>
                  <input type="hidden" id="idAtencion" name="idAtencion">
                </div>
              </div>

              <!-- ENTRADA DEL USUARIO QUE REGISTRA LA ATENCIÓN -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" id="editarUser" name="editarUser" readonly>
                </div>
              </div>

              <!-- ENTRADA DEL PERSONAL DE SALUD -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="editarPersonalSalud" id="buscarPersonalSalud2" style="width: 100%">
                    <option value="" id="editarPersonalSalud"></option>
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

              <!-- ENTRADA DEL PACIENTE -->

         
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="editarPaciente" id="buscarPaciente2" style="width: 100%">
                    <option value="" id="editarPaciente"></option>
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

              <!-- ENTRADA DE UPS -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="editarUps" id="buscarUps2" style="width: 100%">
                    <option value="" id="editarUps"></option>
                    <option value="Consulta Externa">CONSULTA EXTERNA</option>
                    <option value="Hospitalizacion">HOSPITALIZACION</option>
                    <option value="Emergencia">EMERGENCIA</option>
                    <option value="Medicina Preventiva">MEDICINA PREVENTIVA</option>
                  </select>
                </div>
              </div>

              <!-- ENTRADA DE SERVICIO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="editarServicio" id="buscarServicio2" style="width: 100%">
                    <option value="" id="editarServicio"></option>
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
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg" name="editarEspecialidad" id="buscarEspecialidad2" style="width: 100%">
                    <option value="" id="editarEspecialidad"></option>
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

              <!-- ENTRADA DEL DIAGNOSTICO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <textarea class="form-control" id="editarDiagnostico" name="editarDiagnostico" rows="3" placeholder="Describe diagnostico (CIEX), ..."></textarea>
                        
                </div>
              </div>

              <!-- ENTRADA DE FECHA DE ATENCION -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="date" class="form-control input-lg" name="editarFechaAtencion" id="editarFechaAtencion" >
                </div>
              </div>

     </div> 
  </div>



          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Modificar Atención</button>
          </div>

       </form>

       <?php

          $editarAtencion = new ControladorAtenciones();
          $editarAtencion -> ctrEditarAtencion();

      ?>


    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
<!-- fin modal agregar pacientes -->
</div>


      <?php

          $eliminarAtencion = new ControladorAtenciones();
          $eliminarAtencion -> ctrBorrarAtencion();

      ?>
