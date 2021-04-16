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

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

    // esta es la temática para filtrar 
    $categoria = $_SESSION['categoria'];

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

        body{background-color:gray;}
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-info text-light">
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
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
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
          <h1 class="h1">BIENVENIDO AL SISTEMA DE JURADO</h1>
          <p class="lead"><i class="bi bi-award"></i> PREMIO ESTATAL DE LA JUVENTUD 2021 | INJUVENTUD</p>
          <hr class="my-4">

          <p class="lead"> CATEGORÍA: <?php
          if($categoria==1){
            echo '<strong>LOGRO ACADÉMICO</strong>';
        }
        elseif($categoria==2){
            echo '<strong>DISCAPACIDAD E INTEGRACIÓN</strong>';
        }
        elseif($categoria==3){
            echo '<strong>INGENIO EMPRENDEDOR</strong>';
        }
        elseif($categoria==4){
            echo '<strong>RESPONSABILIDAD SOCIAL</strong>';
        }
        elseif($categoria==5){
            echo '<strong>MÉRITO MIGRANTE</strong>';
        }
        elseif($categoria==6){
            echo '<strong>MÉRITO CAMPESINO</strong>';
        }
        elseif($categoria==7){
            echo '<strong>LITERATURA</strong>';
        }
        elseif($categoria==8){
            echo '<strong>ARTES PLÁSTICAS, VISUALES Y POPULARES</strong>';
        }
        elseif($categoria==9){
            echo '<strong>ARTE URBANO</strong>';
        }
        elseif($categoria==10){
            echo '<strong>CIENCIA Y TECNOLOGÍA</strong>';
        }
          
          ?>
          </p>


        
        <?php
        // include('../dashboard/prcd/qwery_validacion_dashboard.php');
        ?>
        <!-- consulta de validación -->


        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1">
          
          <div class="col mb-12">
        <form action="prcd/calificar.php" method="POST">
          <table class="table table-hover text-center table-striped">
  
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Documento</th>
                <th scope="col">Archivo</th>
                <th scope="col">Calificación</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <th scope="row">1</th>
                <td>Carta Propuesta</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr> -->
              <tr>
                <th scope="row">1</th>
                <td>Currículum vitae</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Semblanza de trayectoria</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr>
              <!-- <tr>
                <th scope="row">4</th>
                <td>Acta de nacimiento</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr> -->
              <!-- <tr>
                <th scope="row">5</th>
                <td>Credencial de elector</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr> -->
              <!-- <tr>
                <th scope="row">6</th>
                <td>Comprobante de domicilio</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr> -->
              <!-- <tr>
                <th scope="row">7</th>
                <td>CURP</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr> -->
              <tr>
                <th scope="row">3</th>
                <td>Material bibliográfico</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Video</td>
                <td><span class="h4 text-primary"><i class="bi bi-cloud-arrow-down-fill"></i></span></td>
                <td><input type="text" class="form-control text-center" placeholder="Calificar..." aria-label="Calificar..." aria-describedby="basic-addon1" required></td>
              </tr>
              
            </tbody>

          </table>

          <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle-fill"></i> Calificar</button>
          <a href="dashboard.php" type="button" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
          </form>
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

