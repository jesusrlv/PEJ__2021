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

include('prcd/conn.php');

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
    <title>Dashboard | PEJ 2021</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="../dashboard/css/bootstrap.css" rel="stylesheet">

    <!-- Gráfico -->


<!-- FLOT CHARTS -->
<script src="/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
    <!-- <script src="prcd/grafico.js"></script> -->

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
      
        
       
        <a class="btn btn-outline-light" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-info sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="https://juventud.zacatecas.gob.mx/wp-content/uploads/2021/04/Instituto-de-la-juventud-blanco.png" width="81%" class="" alt="" loading="lazy">  
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
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span class="text-light">ENLACES</span>
            <a class="d-flex align-items-center text-muted" href="dashboard.php" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> LINK 1
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> LINK 2
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> LINK 3
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> LINK 4
            </a>
          </li>
         
          
        </ul>

    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary bg-gradient" style="background-color:; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <h1 class="h1 text-light">DASHBOARD</h1>
        
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

                  echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h5>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1">BIENVENIDO AL SISTEMA ADMINISTRADOR</h1>
          <p class="lead"><i class="bi bi-award"></i> PREMIO ESTATAL DE LA JUVENTUD 2021 | INJUVENTUD</p>
          <hr class="my-4">

        
        <?php
        include('prcd/qwery_validacion_dashboard.php');
        ?>
        <!-- consulta de validación -->


        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1">
          
        <div class="col mb-12">
        <p class=" h4">CATEGORIA: LOGRO ACADÉMICO</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA: DISCAPACIDAD E INTEGRACIÓN</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA: INGENIO EMPRENDEDOR</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA: RESPONSABILIDAD SOCIAL</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA: MÉRITO MIGRANTE</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA: MÉRITO CAMPESINO</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA: LITERATURA</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA: ARTES PLÁSTICAS, VISUALES Y POPULARES</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA CIENCIA Y TECNOLOGÍA</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA 1</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
            </tbody>
                <hr>
            </table>
        <p class=" h4">CATEGORIA 1</p>

            <table class="table table-hover text-center table-striped table-responsive ">

            <thead class="table-warning">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carta propueta</th>
                <th scope="col">Currículum vitae</th>
                <th scope="col">Semblanza de trayectoria</th>
                <th scope="col">Acta de naciemiento</th>
                <th scope="col">Credencial de elector</th>
                <th scope="col">Comprobante de domicilio</th>
                <th scope="col">CURP</th>
                <th scope="col">Material bibliográfico</th>
                <th scope="col">Video</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>      
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">6</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
                <tr>
                <th scope="row">7</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-danger">Danger</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>
                <td><span class="badge bg-info text-dark">Info</span></td>       </tr>
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

<?php
 $v1 = $row_cnt;
//  echo "Subidos ".$v1;
    $v9 = 9;
    $v2 = $v9 - $v1;
    
    // echo " Penientes ".$v2;
?>
 <script>
  $(function () {
    
     /* LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART -------------------------------------------
     * -----------
     */
      var v1 = '<?php echo $v1; ?>'
      var v2 = '<?php echo $v2; ?>'
      
    var donutData = [
      { label: 'Subido', data: v1, color: '#1A8F5E' },
      { label: 'Pendientes', data: v2, color: '#FFBA59' }
//      { label: 'Series4', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>