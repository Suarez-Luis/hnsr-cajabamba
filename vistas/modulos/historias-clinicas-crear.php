<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <kbd>CREAR HISTORIA CLINICA</kbd>
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
        =     FORMULARIOS HISTORIA CLINICA        =
        ======================================-->
        
        <div class="col-lg-5 col-xs-12">
          <div class="box box-success">

             <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title"><kbd> 4. Crear Historia Clinica</kbd></h3>
                </div>

            <div class="box-header with-border"></div>
              
              
              <form role="form" method="post" class="formularioHistoriaClinica">
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
                    =   ENTRADA AGREGAR TIPO HISTORIA CLINICA       =
                    ======================================-->

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users"></i></span>

                        <select class="form-control" id="selecionarUps" name="selecionarUps" required>
                          <option value="">Selecionar Tipo Historia Clinica</option>
                          <option value="Activo">ACTIVO</option>
                          <option value="Pasivo">PASIVO</option>
                          <option value="Archivo General">ARCHIVO GENERAL</option>
                        </select>
                        
                      </div>
                    </div>

               
                    <!--=====================================
                    =   ENTRADA AGREGAR ATENCIONES        =
                    ======================================-->

                    <div class="form-group row nuevaAtencion" style="width: 100%">


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


            <br>

             <button class="btn btn btn-primary center-block" data-toggle="modal" data-target="#modalAgregarAtenciones">Agregar Atención
             </button>


            <div class="box-header with-border"></div>

            <div class="box-body">

              <table class="table table-bordered table-striped dt-responsive tablaAtencionesHistorias table-responsive small" width="100%">

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







 