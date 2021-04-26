<?php
session_start();

// if (isset($_SESSION['usr'])) {
//     if($_SESSION['perfil']==1){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==2){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==3){
        // header('Location: javascript: history.go(-1)');
    // }
    // else{
        // header('Location:prcd/sort.php');
    // }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
// } else {
    // En caso contrario redirigimos el visitante a otra página

    // echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    // header('Location: prcd/sort.php');
    // die();
// }

include('../dashboard/prcd/conn.php');
// include('../dashboard/prcd/qwery_admin.php');
include('prcd/qwery_ganadores.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>PEJ 2021</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="../dashboard/css/bootstrap.css" rel="stylesheet">

    <!-- Gráfico -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        body{background-color:gray;}
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-dark text-light">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center" href="#">
    <!-- <img src="../img/logo.png" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">   -->
    <h5 class="text-center display-7 text-light" style="margin-left:3px;"><b>PEJ 2021</b></h5>
    <!-- <h5 class="text-center display-7 text-light" style="margin-left:3px;"><b>INJUVENTUD</b></h5> -->
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a href="" class="text-left">Inicio ></a> -->
  <!-- <input class="form-control form-control-dark w-10" type="text" placeholder="Search" aria-label="Search" style="width:30%"> -->
  
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
        
       
    <a class="btn btn-outline-light btn-sm" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>      
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-info sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../img/png_logo.png" width="81%" class="" alt="" loading="lazy">  
                   <!-- <img src="../img/logo.png" width="35%" class="" alt="" loading="lazy">   -->
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">

          <span class="text-light">
          Bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
<hr>
<ul class="nav flex-column">
 
 <li class="nav-item">
  <a class="nav-link active text-light" href="dashboard.php">
    <!-- <span data-feather="home"></span> -->
    <i class="fas fa-laptop-house"></i> 
    Inicio <span class="sr-only">(current)</span>
  </a>
</li>
<hr style="color: dimgrey;">
  <li class="nav-item">
      <a class="nav-link text-light" href="busqueda.php">
          
      <i class="bi bi-search"></i> Búsqueda de usuario
      </a>
    </li>
  <li class="nav-item">
  <a class="nav-link text-light" href="revision_calificaciones.php">
     
  <i class="bi bi-card-checklist"></i> Calificaciones
  </a>
</li>

</ul>

    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary bg-gradient" style="background-color:; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <!-- <h1 class="h1 text-light">DASHBOARD</h1> -->
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h5 class="text-light" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  // echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h5>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1">BIENVENIDO AL SISTEMA ADMINISTRADOR</h1>
          <p class="lead"><i class="bi bi-award"></i> PREMIO ESTATAL DE LA JUVENTUD 2021 | INJUVENTUD</p>
          <p class="align-items-right text-right"><a href="excel_lista_ganadores.php" type="button" class="btn btn-outline-info "><i class="bi bi-file-earmark-post-fill"></i> Excel</a></p>

          <hr class="my-4">

        
        <?php
        // include('prcd/qwery_validacion_dashboard.php');
        ?>
        <!-- consulta de validación -->


        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1">
          
        <div class="col mb-12">
        <p class=" h4"><i class="bi bi-star-fill"></i> GANADORES DEL PREMIO ESTATAL DE LA JUVENTUD 2021</p>

            <table class="table table-hover text-center table-striped table-sm small">

            <thead class="thead-dark">
                <tr">
                  <th scope="col" class="align-middle">Apellido</th>
                  <th scope="col" class="align-middle">Nombre</th>
                  <th scope="col" class="align-middle">Edad</th>
                  <th scope="col" class="align-middle">Grado escolar</th>
                  <th scope="col" class="align-middle">Teléfono</th>
                  <th scope="col" class="align-middle">Municipio</th>
                  <th scope="col" class="align-middle">CURP</th>
                  <th scope="col" class="align-middle">Correo electrónico</th>
                  <th scope="col" class="align-middle">Categoría</th>
                  <th scope="col" class="align-middle">Calificación final</th>
                </tr>
            </thead>
            <tbody>
           
              <?php

                $id_consulta1=$row_usr1['id_ext1'];
                $consulta1 = "SELECT * FROM datos WHERE id_ext ='$id_consulta1'";
                $resultado_consulta1= $conn->query($consulta1);
                $row_consulta1=$resultado_consulta1->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta1['apellido'].'</td>';
                echo '<td>'.$row_consulta1['nombre'].'</td>';
                echo '<td>'.$row_consulta1['edad'].'</td>';
                echo '<td>'.$row_consulta1['grado'].'</td>';
                echo '<td>'.$row_consulta1['telefono'].'</td>';
                echo '<td>'.$row_consulta1['municipio'].'</td>';
                echo '<td>'.$row_consulta1['curp'].'</td>';
                echo '<td>'.$row_consulta1['email'].'</td>';
                // echo '<td>'.$row_consulta1['tematica'].'</td>';
                echo '<td>LOGRO ACADÉMICO (12 - 19 AÑOS)</td>';
                echo '<td>'.$row_usr1['promedio'].'</td>';
                echo '</tr>';

                $id_consulta2=$row_usr2['id_ext1'];
                $consulta2 = "SELECT * FROM datos WHERE id_ext ='$id_consulta2'";
                $resultado_consulta2= $conn->query($consulta2);
                $row_consulta2=$resultado_consulta2->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta2['apellido'].'</td>';
                echo '<td>'.$row_consulta2['nombre'].'</td>';
                echo '<td>'.$row_consulta2['edad'].'</td>';
                echo '<td>'.$row_consulta2['grado'].'</td>';
                echo '<td>'.$row_consulta2['telefono'].'</td>';
                echo '<td>'.$row_consulta2['municipio'].'</td>';
                echo '<td>'.$row_consulta2['curp'].'</td>';
                echo '<td>'.$row_consulta2['email'].'</td>';
                // echo '<td>'.$row_consulta2['tematica'].'</td>';
                echo '<td>LOGRO ACADÉMICO (20 - 29 AÑOS)</td>';
                echo '<td>'.$row_usr2['promedio'].'</td>';
                echo '</tr>';

                $id_consulta3=$row_usr3['id_ext1'];
                $consulta3 = "SELECT * FROM datos WHERE id_ext ='$id_consulta3'";
                $resultado_consulta3= $conn->query($consulta3);
                $row_consulta3=$resultado_consulta3->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta3['apellido'].'</td>';
                echo '<td>'.$row_consulta3['nombre'].'</td>';
                echo '<td>'.$row_consulta3['edad'].'</td>';
                echo '<td>'.$row_consulta3['grado'].'</td>';
                echo '<td>'.$row_consulta3['telefono'].'</td>';
                echo '<td>'.$row_consulta3['municipio'].'</td>';
                echo '<td>'.$row_consulta3['curp'].'</td>';
                echo '<td>'.$row_consulta3['email'].'</td>';
                // echo '<td>'.$row_consulta3['tematica'].'</td>';
                echo '<td>DISCAPACIDAD E INTEGRACIÓN</td>';
                echo '<td>'.$row_usr3['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta4=$row_usr4['id_ext1'];
                $consulta4 = "SELECT * FROM datos WHERE id_ext ='$id_consulta4'";
                $resultado_consulta4= $conn->query($consulta4);
                $row_consulta4=$resultado_consulta4->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta4['apellido'].'</td>';
                echo '<td>'.$row_consulta4['nombre'].'</td>';
                echo '<td>'.$row_consulta4['edad'].'</td>';
                echo '<td>'.$row_consulta4['grado'].'</td>';
                echo '<td>'.$row_consulta4['telefono'].'</td>';
                echo '<td>'.$row_consulta4['municipio'].'</td>';
                echo '<td>'.$row_consulta4['curp'].'</td>';
                echo '<td>'.$row_consulta4['email'].'</td>';
                // echo '<td>'.$row_consulta4['tematica'].'</td>';
                echo '<td>INGENIO EMPRENDEDOR</td>';
                echo '<td>'.$row_usr4['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta5=$row_usr5['id_ext1'];
                $consulta5 = "SELECT * FROM datos WHERE id_ext ='$id_consulta5'";
                $resultado_consulta5= $conn->query($consulta5);
                $row_consulta5=$resultado_consulta5->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta5['apellido'].'</td>';
                echo '<td>'.$row_consulta5['nombre'].'</td>';
                echo '<td>'.$row_consulta5['edad'].'</td>';
                echo '<td>'.$row_consulta5['grado'].'</td>';
                echo '<td>'.$row_consulta5['telefono'].'</td>';
                echo '<td>'.$row_consulta5['municipio'].'</td>';
                echo '<td>'.$row_consulta5['curp'].'</td>';
                echo '<td>'.$row_consulta5['email'].'</td>';
                // echo '<td>'.$row_consulta5['tematica'].'</td>';
                echo '<td>RESPONSABILIDAD SOCIAL</td>';
                echo '<td>'.$row_usr5['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta6=$row_usr6['id_ext1'];
                $consulta6 = "SELECT * FROM datos WHERE id_ext ='$id_consulta6'";
                $resultado_consulta6= $conn->query($consulta6);
                $row_consulta6=$resultado_consulta6->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta6['apellido'].'</td>';
                echo '<td>'.$row_consulta6['nombre'].'</td>';
                echo '<td>'.$row_consulta6['edad'].'</td>';
                echo '<td>'.$row_consulta6['grado'].'</td>';
                echo '<td>'.$row_consulta6['telefono'].'</td>';
                echo '<td>'.$row_consulta6['municipio'].'</td>';
                echo '<td>'.$row_consulta6['curp'].'</td>';
                echo '<td>'.$row_consulta6['email'].'</td>';
                // echo '<td>'.$row_consulta6['tematica'].'</td>';
                echo '<td>MÉRITO MIGRANTE</td>';
                echo '<td>'.$row_usr6['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta7=$row_usr7['id_ext1'];
                $consulta7 = "SELECT * FROM datos WHERE id_ext ='$id_consulta7'";
                $resultado_consulta7= $conn->query($consulta7);
                $row_consulta7=$resultado_consulta7->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta7['apellido'].'</td>';
                echo '<td>'.$row_consulta7['nombre'].'</td>';
                echo '<td>'.$row_consulta7['edad'].'</td>';
                echo '<td>'.$row_consulta7['grado'].'</td>';
                echo '<td>'.$row_consulta7['telefono'].'</td>';
                echo '<td>'.$row_consulta7['municipio'].'</td>';
                echo '<td>'.$row_consulta7['curp'].'</td>';
                echo '<td>'.$row_consulta7['email'].'</td>';
                // echo '<td>'.$row_consulta7['tematica'].'</td>';
                echo '<td>MÉRITO CAMPESINO</td>';
                echo '<td>'.$row_usr7['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta8=$row_usr8['id_ext1'];
                $consulta8 = "SELECT * FROM datos WHERE id_ext ='$id_consulta8'";
                $resultado_consulta8= $conn->query($consulta8);
                $row_consulta8=$resultado_consulta8->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta8['apellido'].'</td>';
                echo '<td>'.$row_consulta8['nombre'].'</td>';
                echo '<td>'.$row_consulta8['edad'].'</td>';
                echo '<td>'.$row_consulta8['grado'].'</td>';
                echo '<td>'.$row_consulta8['telefono'].'</td>';
                echo '<td>'.$row_consulta8['municipio'].'</td>';
                echo '<td>'.$row_consulta8['curp'].'</td>';
                echo '<td>'.$row_consulta8['email'].'</td>';
                // echo '<td>'.$row_consulta8['tematica'].'</td>';
                echo '<td>PROTECCIÓN AL MEDIO AMBIENTE</td>';
                echo '<td>'.$row_usr8['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta9=$row_usr9['id_ext1'];
                $consulta9 = "SELECT * FROM datos WHERE id_ext ='$id_consulta9'";
                $resultado_consulta9= $conn->query($consulta9);
                $row_consulta9=$resultado_consulta9->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta9['apellido'].'</td>';
                echo '<td>'.$row_consulta9['nombre'].'</td>';
                echo '<td>'.$row_consulta9['edad'].'</td>';
                echo '<td>'.$row_consulta9['grado'].'</td>';
                echo '<td>'.$row_consulta9['telefono'].'</td>';
                echo '<td>'.$row_consulta9['municipio'].'</td>';
                echo '<td>'.$row_consulta9['curp'].'</td>';
                echo '<td>'.$row_consulta9['email'].'</td>';
                // echo '<td>'.$row_consulta9['tematica'].'</td>';
                echo '<td>CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA</td>';
                echo '<td>'.$row_usr9['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta10=$row_usr10['id_ext1'];
                $consulta10 = "SELECT * FROM datos WHERE id_ext ='$id_consulta10'";
                $resultado_consulta10= $conn->query($consulta10);
                $row_consulta10=$resultado_consulta10->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta10['apellido'].'</td>';
                echo '<td>'.$row_consulta10['nombre'].'</td>';
                echo '<td>'.$row_consulta10['edad'].'</td>';
                echo '<td>'.$row_consulta10['grado'].'</td>';
                echo '<td>'.$row_consulta10['telefono'].'</td>';
                echo '<td>'.$row_consulta10['municipio'].'</td>';
                echo '<td>'.$row_consulta10['curp'].'</td>';
                echo '<td>'.$row_consulta10['email'].'</td>';
                // echo '<td>'.$row_consulta10['tematica'].'</td>';
                echo '<td>LITERATURA</td>';
                echo '<td>'.$row_usr10['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta11=$row_usr11['id_ext1'];
                $consulta11 = "SELECT * FROM datos WHERE id_ext ='$id_consulta11'";
                $resultado_consulta11= $conn->query($consulta11);
                $row_consulta11=$resultado_consulta11->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta11['apellido'].'</td>';
                echo '<td>'.$row_consulta11['nombre'].'</td>';
                echo '<td>'.$row_consulta11['edad'].'</td>';
                echo '<td>'.$row_consulta11['grado'].'</td>';
                echo '<td>'.$row_consulta11['telefono'].'</td>';
                echo '<td>'.$row_consulta11['municipio'].'</td>';
                echo '<td>'.$row_consulta11['curp'].'</td>';
                echo '<td>'.$row_consulta11['email'].'</td>';
                // echo '<td>'.$row_consulta11['tematica'].'</td>';
                echo '<td>ARTES ESCÉNICAS (MÚSICA)</td>';
                echo '<td>'.$row_usr11['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta12=$row_usr12['id_ext1'];
                $consulta12 = "SELECT * FROM datos WHERE id_ext ='$id_consulta12'";
                $resultado_consulta12= $conn->query($consulta12);
                $row_consulta12=$resultado_consulta12->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta12['apellido'].'</td>';
                echo '<td>'.$row_consulta12['nombre'].'</td>';
                echo '<td>'.$row_consulta12['edad'].'</td>';
                echo '<td>'.$row_consulta12['grado'].'</td>';
                echo '<td>'.$row_consulta12['telefono'].'</td>';
                echo '<td>'.$row_consulta12['municipio'].'</td>';
                echo '<td>'.$row_consulta12['curp'].'</td>';
                echo '<td>'.$row_consulta12['email'].'</td>';
                // echo '<td>'.$row_consulta12['tematica'].'</td>';
                echo '<td>ARTES ESCÉNICAS (TEATRO)</td>';
                echo '<td>'.$row_usr12['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta13=$row_usr13['id_ext1'];
                $consulta13 = "SELECT * FROM datos WHERE id_ext ='$id_consulta13'";
                $resultado_consulta13= $conn->query($consulta13);
                $row_consulta13=$resultado_consulta13->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta13['apellido'].'</td>';
                echo '<td>'.$row_consulta13['nombre'].'</td>';
                echo '<td>'.$row_consulta13['edad'].'</td>';
                echo '<td>'.$row_consulta13['grado'].'</td>';
                echo '<td>'.$row_consulta13['telefono'].'</td>';
                echo '<td>'.$row_consulta13['municipio'].'</td>';
                echo '<td>'.$row_consulta13['curp'].'</td>';
                echo '<td>'.$row_consulta13['email'].'</td>';
                // echo '<td>'.$row_consulta13['tematica'].'</td>';
                echo '<td>ARTES ESCÉNICAS (DANZA)</td>';
                echo '<td>'.$row_usr13['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta14=$row_usr14['id_ext1'];
                $consulta14 = "SELECT * FROM datos WHERE id_ext ='$id_consulta14'";
                $resultado_consulta14= $conn->query($consulta14);
                $row_consulta14=$resultado_consulta14->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta14['apellido'].'</td>';
                echo '<td>'.$row_consulta14['nombre'].'</td>';
                echo '<td>'.$row_consulta14['edad'].'</td>';
                echo '<td>'.$row_consulta14['grado'].'</td>';
                echo '<td>'.$row_consulta14['telefono'].'</td>';
                echo '<td>'.$row_consulta14['municipio'].'</td>';
                echo '<td>'.$row_consulta14['curp'].'</td>';
                echo '<td>'.$row_consulta14['email'].'</td>';
                // echo '<td>'.$row_consulta14['tematica'].'</td>';
                echo '<td>ARTES PLÁSTICAS, VISUALES Y POPULARES</td>';
                echo '<td>'.$row_usr14['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta15=$row_usr15['id_ext1'];
                $consulta15 = "SELECT * FROM datos WHERE id_ext ='$id_consulta15'";
                $resultado_consulta15= $conn->query($consulta15);
                $row_consulta15=$resultado_consulta15->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta15['apellido'].'</td>';
                echo '<td>'.$row_consulta15['nombre'].'</td>';
                echo '<td>'.$row_consulta15['edad'].'</td>';
                echo '<td>'.$row_consulta15['grado'].'</td>';
                echo '<td>'.$row_consulta15['telefono'].'</td>';
                echo '<td>'.$row_consulta15['municipio'].'</td>';
                echo '<td>'.$row_consulta15['curp'].'</td>';
                echo '<td>'.$row_consulta15['email'].'</td>';
                // echo '<td>'.$row_consulta15['tematica'].'</td>';
                echo '<td>ARTE URBANO</td>';
                echo '<td>'.$row_usr15['promedio'].'</td>';
                echo '</tr>';
        
                $id_consulta16=$row_usr16['id_ext1'];
                $consulta16 = "SELECT * FROM datos WHERE id_ext ='$id_consulta16'";
                $resultado_consulta16= $conn->query($consulta16);
                $row_consulta16=$resultado_consulta16->fetch_assoc();
                echo '</tr>';
                echo '<td>'.$row_consulta16['apellido'].'</td>';
                echo '<td>'.$row_consulta16['nombre'].'</td>';
                echo '<td>'.$row_consulta16['edad'].'</td>';
                echo '<td>'.$row_consulta16['grado'].'</td>';
                echo '<td>'.$row_consulta16['telefono'].'</td>';
                echo '<td>'.$row_consulta16['municipio'].'</td>';
                echo '<td>'.$row_consulta16['curp'].'</td>';
                echo '<td>'.$row_consulta16['email'].'</td>';
                // echo '<td>'.$row_consulta16['tematica'].'</td>';
                echo '<td>CIENCIA Y TECNOLOGÍA</td>';
                echo '<td>'.$row_usr16['promedio'].'</td>';
                echo '</tr>';
        
              ?>
            </tbody>
                <hr>
            </table>
        

        
</div>

      </div> <!-- container -->
      
      <hr>
      

      

      </div>


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>

<!-- 

https://startbootstrap.com/theme/sb-admin-pro-angular

https://startbootstrap.com/themes/admin-dashboard
 -->

