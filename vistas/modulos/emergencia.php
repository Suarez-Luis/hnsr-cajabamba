<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  <kbd>EMERGENCIA</kbd>
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
      =  SECCIÓN PERSONAL DE SALUD           =
      ======================================-->
        <div class="col-lg-6 col-xs-12">
          <div class="box box-solid">
          
            <div class="box-header with-border">
                <i class="fa fa-user-md fa-3x"></i>
                <h3 class="box-title"><kbd>1. Personal Asistencial</kbd></h3>
            </div>

            <div class="box-body">
              <div class="box-group" id="accordion">
      
               <!--==== 1er Acordión  ====-->
              <div class="panel box box-primary active">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Formulario Personal Asistencial
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="box-body">

                    <button class="btn btn btn-primary center-block" data-toggle="modal" data-target="#modalAgregarPersonalSalud">
                      Agregar Personal Asistencial
                    </button>

                  </div>
                </div>
              </div>

              <!--==== 2do Acordión  ====-->
              <div class="panel box box-danger">
                  <div class="box-header with-border" style="color:red;">
                    <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Tabla Personal Asistencial
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                      
                      
                      <table class="table table-bordered table-striped dt-responsive text-uppercase tablaPersonalSalud" width="100%">

                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Nº Documento</th>
                              <th>Profesión</th>
                              <th>Especialidad</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody class="small">
                            
                        <!--==== Tabla dinamica  ====-->

                          </tbody>

                        </table>





                    </div>
                  </div>
                </div>


               </div>
            </div>
          </div>
        </div>

        <!--====  End Sección Personal de Salud  ====-->
  
      
      <!--=====================================
      =  SECCIÓN PACIENTES        =
      ======================================-->
        <div class="col-lg-6 col-xs-12">
          <div class="box box-solid">
          
            <div class="box-header with-border">
                <i class="fa fa-users"></i>
                <h3 class="box-title"><kbd>2. Pacientes</kbd></h3>
            </div>

            
            <div class="box-body">
              <div class="box-group" id="accordion2">
      
               <!--==== 1er Acordión  ====-->
              <div class="panel box box-primary active">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                      Formulario Pacientes
                    </a>
                  </h4>
                </div>
                <div id="collapseOne2" class="panel-collapse collapse in">
                  <div class="box-body">

                    <button class="btn btn btn-primary center-block" data-toggle="modal" data-target="#modalAgregarPacientes">
                    Agregar Paciente
                    </button>

                  </div>
                </div>
              </div>

              <!--==== 2do Acordión  ====-->
              <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
                        Tabla Pacientes
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo2" class="panel-collapse collapse">
                    <div class="box-body">
                      
                        <table class="table table-bordered table-striped dt-responsive text-capitalize tablaPacientes2 table-responsive" style="width: 100%">

                              <thead>
                                <tr>
                                  <th style="width: 10px">#</th>
                                  <th>DNI</th>
                                  <th>1er Nombre</th>
                                  <th>2do Nombre</th>
                                  <th>3er Nombre</th>
                                  <th>Apellido Paterno</th>
                                  <th>Apellido Materno</th>
                                  <th>Acciones</th>
                                </tr>
                              </thead>

                              <tbody class="small">
                                

                              </tbody>

                            </table>




                    </div>
                  </div>
                </div>


               </div>
            </div>
          </div>
        </div>
        <!--====  End of Section comment  ====-->



  </div>
  <!-- End Row -->

  <div class="row">

    <!--=====================================
    =     FORMULARIOS EMERGENCIA       =
    ======================================-->
    
    <div class="col-lg-5 col-xs-12">
      <div class="box box-success">

         <div class="box-header with-border">
                <i class="fa fa-text-width"></i>
                <h3 class="box-title"><kbd> 3. Crear Nuevo Registro Emergencia</kbd></h3>
            </div>

        <div class="box-header with-border"></div>
          
          
          <form role="form" method="post" class="formularioEmergencia">
            <!--====  Body  ====-->
            <div class="box-body">
              <div class="box">

                <!--=====================================
                =   ENTRADA DEL USUARIO QUE REGISTRA LA ATENCIÓN           =
                ======================================-->
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="iddUser" name="iddUser" value="<?php echo $_SESSION["perfil"]; ?>" readonly>
                    <input type="hidden" name="idUsuario" value="<?php echo $_SESSION["id_usuario"]; ?>">
                  </div>
                </div>


                <!--=====================================
                =   ENTRADA DEL PACIENTE           =
                ======================================-->
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select class="form-control input-lg" name="nuevoPaciente" id="buscarPaciente" style="width: 100%" required>
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

                <!--=====================================
                =   ENTRADA TURNO      =
                ======================================-->

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>

                    <select class="form-control" id="selecionarTurno" name="selecionarTurno" required>
                      <option value="">Selecionar Turno</option>
                      <option value="Mañana">Mañana: 7:00 am a 13:00 pm</option>
                      <option value="Tarde">Tarde: 13:00 pm a 19:00 pm</option>
                      <option value="Noche">Noche: 19:00 pm a 7:00 am</option>
                    </select>
                    
                  </div>
                </div>

           
                <!--=====================================
                =   ENTRADA SERVICIO      =
                ======================================-->

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>

                    <select class="form-control" id="selecionarServicio" name="selecionarServicio" required>
                      <option value="">Selecionar Servicio</option>
                      <option value="Cirugia General">CIRUGIA GENERAL</option>
                      <option value="Medicina Adultos">MEDICINA ADULTOS</option>
                      <option value="Pediatria">PEDIATRIA</option>
                      <option value="Obstetricia">OBSTETRICIA</option>
                    </select>
                    
                  </div>
                </div>

                <!-- ENTRADA DEL LIC. ENFERMERIA / OBSTETRA -->
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select class="form-control input-lg" name="nuevaPersonalSalud" id="buscarPersonalSalud" style="width: 100%">
                      <option value="">Seleccionar Enfermero(a) / Obstetra</option>
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

                <!-- ENTRADA DEL TECNICOS -->
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select class="form-control input-lg" name="nuevaPersonalSalud" id="buscarPersonalSalud" style="width: 100%">
                      <option value="">Seleccionar Tecnica(o)</option>
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

                <!-- ENTRADA DE CAMA -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevaCama" placeholder="Ingresar Nùmero de Cama" required>
                </div>
              </div>

              <!-- ENTRADA DE FECHA DE INGRESO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="date" class="form-control input-lg" name="nuevaFechaIngreso" placeholder="Ingresar Fecha de ingreso" >
                </div>
              </div>

              <!-- ENTRADA DEL DIAGNOSTICO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <textarea class="form-control" id="nuevoDiagnostico" name="nuevoDiagnostico" rows="3" placeholder="Describe diagnostico (CIEX), ..."></textarea>
                        
                </div>
              </div>

              <!-- ENTRADA DE FECHA DE EGRESO -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="date" class="form-control input-lg" name="nuevaFechaEgreso" placeholder="Ingresar Fecha de Egreso" >
                </div>
              </div>

              <!--=====================================
                =   ENTRADA DESTINO    =
                ======================================-->

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>

                    <select class="form-control" id="selecionarDestino" name="selecionarDestino" required>
                      <option value="">Selecionar Destino</option>
                      <option value="Alta Medica">ALTA MEDICA</option>
                      <option value="Medicina Adultos">ALTA VOLUNTARIA</option>
                      <option value="Pediatria">PEDIATRIA</option>
                      <option value="Obstetricia">OBSTETRICIA</option>
                    </select>
                    
                  </div>
                </div>

               

              <!--==== FIN Box  ====-->  
              </div>
              
            </div>

            <!--====  FOOTER  ====-->
            <div class="box-footer">
              
              <button type="submit" class="btn btn-primary pull-right">Guardar Historia Clinica</button>

            </div>

          </form>

         
         <?php 

        $guardarHistoriaClinica = new ControladorHistoriasClinicas();
        $guardarHistoriaClinica -> ctrCrearHistoriaClinica();

        ?>

      </div>
    </div>


    <!--=====================================
    =   TABLA ATENCIONES        =

     hidden-md hidden-sm hidden-xs
    ======================================-->

    <div class="col-lg-7 col-xs-12">
      <div class="box box-warning">

         <div class="box-header with-border">
                <i class="fa fa-text-width"></i>
                <h3 class="box-title"><kbd> 3. Atenciones</kbd></h3>
            </div>


        <div class="box-header with-border"></div>
          <div class="box-body">
            
          </div>
        </div>
    </div>

  
  <!--==== FIN ROW  ====-->
  </div>

  





</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->






<?php 

/*=============================================
=            REGISTRAR            =
=============================================*/

/*=============================================
=    MODAL PACIENTES            =
=============================================*/
include "modal/pacientes-modal.php";


/*=============================================
=    MODAL PERSONAL DE SALUD            =
=============================================*/
include "modal/personal-salud-modal.php";


/*=============================================
=    MODAL PERSONAL DE SALUD            =
=============================================*/
include "modal/atenciones-modal.php";


/*=============================================
=            EDITAR            =
=============================================*/

/*=============================================
=    MODAL EDITAR PACIENTES            =
=============================================*/
include "modal/pacientes-editar-modal.php";

/*=============================================
=    MODAL EDITAR PERSONAL DE SALUD            =
=============================================*/
include "modal/personal-salud-editar-modal.php";

/*=============================================
=    MODAL EDITAR ATENCIONES            =
=============================================*/
include "modal/atenciones-editar-modal.php";


/*=============================================
=            BORRAR            =
=============================================*/

/*=============================================
=    MODAL BORRAR PACIENTES            =
=============================================*/
$eliminarPacientes2 = new ControladorPacientes();
$eliminarPacientes2 -> ctrBorrarPacientesCPANEL();

/*=============================================
=    MODAL BORRAR PERSONAL DE SALUD          =
=============================================*/

$eliminarPersonalSalud2 = new ControladorPersonalSalud();
$eliminarPersonalSalud2 -> ctrBorrarPersonalSaludCPANEL();

/*=============================================
=    MODAL BORRAR ATENCIONES         =
=============================================*/

$eliminarAtencion2 = new ControladorAtenciones();
$eliminarAtencion2 -> ctrBorrarAtencionCPANEL();







?>







