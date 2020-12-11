<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">

<?php

if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico") {
 
      echo '<li class="active">
        <a href="inicio">
          <i class="fas fa-hospital-alt"></i>
          <span>Inicio</span>
        </a>
      </li>';
    }

if ($_SESSION["perfil"] =="Administrador") {

    echo '<li>
        <a href="usuarios">
          <i class="fas fa-user-tie"></i>
          <span>Usuarios</span>
        </a>
      </li>';
    }  

//if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial") {
   // echo '<li>
   //     <a href="personal-salud">
  //        <i class="fas fa-user-md"></i>
  //        <span>Personal Salud</span>
  //      </a>
  //    </li>';
  //  }


//if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico") {

  //  echo '<li>
  //      <a href="pacientes">
  //        <i class="fas fa-users"></i>
  //        <span>Pacientes</span>
  //      </a>
  //    </li>';
  //  }


//if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico") {      

  //  echo '<li>
  //     <a href="atenciones">
  //        <i class="fas fa-file-archive"></i>
  //        <span>&nbsp;&nbsp;Atenciones</span>
  //      </a>
  //    </li>';
  //  }


if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico") {      

      echo '<li>
          <a href="historias-clinicas">
            <i class="fas fa-folder-open"></i>
            <span>&nbsp;&nbsp;Historias Clinicas</span>
          </a>
        </li>';
      }


if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico") {      

        echo '<li>
          <a href="historias-clinicas-crear">
            <i class="fa fa-sitemap"></i>
            <span>&nbsp;&nbsp;CPanel</span>
          </a>
          </li>';
        }


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico") {      

          echo '<li>
            <a href="emergencia">
              <i class="fa fa-plus-circle"></i>
              <span>&nbsp;&nbsp;Emergencia</span>
            </a>
            </li>';
          }

      
//if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Basico") { 

  //Menu Desplegable ESTADISTICA

 //   echo '<li class="treeview">
 //       <a href="#">
 //         <i class="fa fa-bar-chart"></i>
 //         <span>Historia Clinica</span>
 //         <span class="pull-right-container">
  //          <i class="fa fa-list-ul pull-right"></i>
  //       </span>
  //      </a>

 //       <ul class="treeview-menu">

//          <li>
//            <a href="historias-clinicas">
//              <i class="fas fa-folder-open"></i>
    //          <span>&nbsp;&nbsp;Historias Clinicas</span>
    //       </a>
   //       </li>

  //        <li>
 //           <a href="historias-clinicas-crear">
 //             <i class="fas fa-folder-open"></i>
 //             <span>&nbsp;&nbsp;Crear Historias Clinicas</span>
//            </a>
//          </li>';

 //     }

//if ($_SESSION["perfil"] =="Administrador") {      

//       echo '<li>
//            <a href="#">
//              <i class="fa fa-bar-chart"></i>
//              <span>&nbsp;&nbsp;Reportes</span>
//            </a>
//          </li>';
//}

//        echo'</ul>
//      </li>';
    



//if ($_SESSION["perfil"] =="Administrador") {         
 //     //Menu Desplegable RX
 //   
 //     echo'<li class="treeview">
 //       <a href="#">
 //         <i class="fa fa-file-prescription"></i>
 //         <span>Laboratorio RX</span>
 //         <span class="pull-right-container">
 //           <i class="fa fa-list-ul pull-right"></i>
            
 //         </span>
 //       </a>

 //       <ul class="treeview-menu">

 //         <li>
 //           <a href="rx-admin">
 //             <i class="fas fa-angle-right"></i>
 //             <span> Administrar RX</span>
 //           </a>
 //         </li>

 //         <li>
 //           <a href="rx-crud">
 //             <i class="fas fa-angle-right"></i>
 //             <span> Consulta RX</span>
 //           </a>
 //         </li>

 //         <li>
 //           <a href="rx-reportes">
 //             <i class="fas fa-angle-right"></i>
 //             <span> Reporte RX</span>
 //           </a>
 //         </li>

  //      </ul>
  //    </li>';
//}

?>  
     
      
    </ul>
  </section>
</aside>