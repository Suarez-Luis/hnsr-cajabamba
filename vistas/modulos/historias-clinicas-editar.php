<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDITAR HISTORIA CLINICA
        <small>Panel de contorl</small>
      </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">tablero</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

      <div class="row">

        <!--=====================================
        =     FORMULARIOS ATENCIÓN         =
        ======================================-->
        
        <div class="col-lg-5 col-xs-12">
          <div class="box box-success">
            <div class="box-header with-border"></div>
              
              
              <form role="form" method="post" class="formularioHistoriaClinica">
                <!--====  Body  ====-->
                <div class="box-body">
                  <div class="box">

                    <?php

                    $item = "id_historia_clinica";
                    $valor = $_GET["idHistoriaClinica"];

                    $historiaClinica = ControladorHistoriasClinicas::ctrMostrarHistoriasClinicas($item, $valor);

                    $itemUsuario = "id_usuario";
                    $valorUsuario = $historiaClinica["id_usuario"];

                    $usuarios = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                    $itemPaciente = "id_paciente";
                    $valorPaciente = $historiaClinica["id_paciente"];

                    $pacientes = ControladorPacientes::ctrMostrarPacientes($itemPaciente, $valorPaciente);

                     ?>

                    <!--=====================================
                    =   ENTRADA DEL USUARIO QUE REGISTRA LA ATENCIÓN           =
                    ======================================-->
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" id="idUser" name="idUser" value="<?php echo $usuarios["perfil"]; ?>" readonly>
                        <input type="hidden" name="idUsuario" value="<?php echo $usuarios["id_usuario"]; ?>">
                        <input type="hidden" name="idHistoria" value="<?php echo $historiaClinica["id_historia_clinica"]; ?>">
                      </div>
                    </div>

                    <!--=====================================
                    =   ENTRADA CODIGO HISTORIA CLINICA           =
                    ======================================-->
                    <!-- <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="text" class="form-control" id="nuevoCodigoHistoriaClinica" name="editarCodigoHistoriaClinica" value="<?php echo $historiaClinica["numero_historia"]; ?>" required>
                      </div>
                    </div> -->

                    <!--=====================================
                    =   ENTRADA DEL PACIENTE           =
                    ======================================-->
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                        <select class="form-control input-lg" name="nuevoPaciente" id="buscarPaciente" style="width: 100%" readonly>
                          <option value="<?php echo $pacientes["id_paciente"]; ?>"><?php echo "[".$pacientes["documento"]."] - ".$pacientes["apellido_pat"]." ".$pacientes["apellido_mat"]." ".$pacientes["nombre1"]." ".$pacientes["nombre2"]." ".$pacientes["nombre3"]; ?></option>
                          <?php

                          $item = null;
                          $valor = null;

                          $pacientes = ControladorPacientes::ctrMostrarPacientes($item, $valor);

                          foreach ($pacientes as $key => $value) {
                             echo '<option value="'.$value["id_paciente"].'">'.$value["documento"]." ".$value["apellido_pat"]." ".$value["apellido_mat"]." ".$value["nombre1"]." ".$value["nombre2"]." ".$value["nombre3"].'</option>';
                           } 


                           ?>

                        </select>

                        <span class="input-group-addon"><button class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarPacientes">Agregar Pacientes</button></span>

                      </div>
                    </div>

                    <!--=====================================
                    =   ENTRADA AGREGAR TIPO HISTORIA CLINICA       =
                    ======================================-->

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users"></i></span>

                        <select class="form-control" id="selecionarUps" name="selecionarUps" required>
                          <option value="<?php echo $historiaClinica["tipo"]; ?>"><?php echo $historiaClinica["tipo"]; ?></option>
                          <option value="Activo">ACTIVO</option>
                          <option value="Pasivo">PASIVO</option>
                          <option value="Archivo General">ARCHIVO GENERAL</option>
                        </select>
                        
                      </div>
                    </div>

               
                    <!--=====================================
                    =   ENTRADA AGREGAR ASISTENCIA         =
                    ======================================-->

                    <div class="form-group row nuevaAtencion" style="width: 100%">

                      <?php

                      $listaAtenciones = json_decode($historiaClinica["atenciones"], true);

                      foreach ($listaAtenciones as $key => $value) {
                        
                        echo '<div class="row" style="padding:5px 15px;">


                  <div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">
                      <div class="input-group">
                         <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarAtencion" idAtencion="'.$value["id_atencion"].'"><i class="fa fa-times"></i></button></span>

                         <input type="text" class="form-control agregarPaciente" idAtencion="'.$value["id_atencion"].'" name="agregarPaciente" value="'.$value["id_paciente"].'" readonly required>
                      </div>
                  </div>
                        
                  
                  <div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">
                    <input type="text" class="form-control nuevoPersonalSalud" name="nuevoPersonalSalud" value="'.$value["id_personal_salud"].'" readonly required>
                  </div>

                  
                  <div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">
                    <input type="text" class="form-control nuevoServicio" name="nuevoServicio" value="'.$value["servicio"].'" readonly required>
                  </div>

                  
                  <div class="col-xs-4" style="padding-right: 1px; padding-left: 1px;">
                    <input type="text" class="form-control nuevoDiagnostico" name="nuevoDiagnostico" value="'.$value["diagnostico"].'" readonly required>
                  </div>

                  
                  <div class="col-xs-2" style="padding-right: 1px; padding-left: 1px;">
                      <input type="text" class="form-control nuevaFechaAtencion" name="nuevaFechaAtencion" value="'.$value["fecha_atencion"].'" readonly required>
                  </div>

                  </div>';
                      }

                       ?>


                    </div>

                    <input type="hidden" id="listaAtenciones" name="listaAtenciones">

                    <!--=====================================
                    =   BOTON AGREGAR ATENCION PARA DISPOSITIVOS MOVIL - TABLET       =
                    ======================================-->

                    <button type="button" class="btn btn-default hidden-lg hidden-md hidden-sm hidden-xs btnAgregarAtencion">Agregar Atención</button>

                    <hr>


                   

                  <!--==== FIN Box  ====-->  
                  </div>
                  
                </div>

                <!--====  FOOTER  ====-->
                <div class="box-footer">
                  
                  <button type="submit" class="btn btn-primary pull-right">Guardar Cambios de la Historia Clinica</button>

                </div>

              </form>

             
             <?php 

            $editarHistoriaClinica = new ControladorHistoriasClinicas();
            $editarHistoriaClinica -> ctrEditarHistoriaClinica();

            ?>

          </div>
        </div>


        <!--=====================================
        =   TABLA PACIENTES         =
        ======================================-->

        <div class="col-lg-7 col-xs-12">
          <div class="box box-warning">
            <div class="box-header with-border"></div>

            <div class="box-body">

              <table class="table table-bordered table-striped dt-responsive tablaAtencionesHistorias table-responsive" width="100%">

                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Fecha de Atención</th>
                    <th>Personal de Salud</th>
                    <th>Paciente</th>
                    <th>Servicio</th>
                    <th>Diagnostico</th>
                    <th>IMG DIAG</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

                

              </table>
              
            </div>
            
          </div>
        </div>

      
      <!--==== FIN ROW  ====-->
      </div>

      





    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



 <!--=====================================
  =       MODAL AGREGAR PACIENTES         =
  ======================================-->

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
            <h4 class="modal-title">Agregar Pacientes</h4>
            
          </div>



   <!-- Modal body -->
    <div class="modal-body">
      <div class="box-doby">

              <!-- ENTRADA DEL DOCUMENTO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoDoc" placeholder="Ingresar Nº DNI" required>
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
                  <input type="date" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar Fecha de Nacimiento" >
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

          $crearPacientes = new ControladorPacientes();
          $crearPacientes -> ctrCrearPacientes();

           ?>

    
    </div>
    <!-- /CONTENIDO MODAL -->
  </div>
  <!-- /MODAL DIALOG -->
<!-- fin modal agregar pacientes -->
</div>



 