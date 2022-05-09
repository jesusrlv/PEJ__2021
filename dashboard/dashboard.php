<?php
session_start();

if (isset($_SESSION['usr'])) {
  if($_SESSION['perfil']==1){

  }
  else{
    header('Location: prcd/sort.php');
    die();
  }
  
} else {
  // En caso contrario redirigimos el visitante a otra página

  header('Location: prcd/sort.php');
  die();
}

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
    <title>PEJ 2021</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- script para modal -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
   

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
   
  </head>
  <body>
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-light text-dark">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center text-white" href="#">
    <h5 class="text-center text-dark display-7" style="margin-left:3px;"><b>INJUVENTUD</b></h5>
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
        
      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-film"></i> VIDEO TUTORIALES</button>
      <a class="btn btn-outline-secondary btn-sm" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../img/logo.png" width="81%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">

          <span class="text-light">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
<hr>
        <ul class="nav flex-column">
 
           <li class="nav-item">
            <a class="nav-link active text-light" href="dashboard.php">
              <i class="fas fa-laptop-house"></i> 
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-light">
            <span><i class="bi bi-camera-reels-fill"></i> Tutoriales</span>
            <a class="d-flex align-items-center text-muted" href="dashboard.php" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link text-light" href="https://www.youtube.com/watch?v=HLHInBqq3WA" target="_blank">
               
            <i class="bi bi-play-circle-fill"></i> Subir Datos Personales y Documentos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="https://www.youtube.com/watch?v=PAGe953Wvjo" target="_blank">
               
            <i class="bi bi-play-circle-fill"></i> Elaboración de video semblanza
            </a>
          </li>
          
        </ul>

    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#eaeef4; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
           
          </div>
         
        </div>
      </div>

      <h5 class="text-secondary" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  // echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h5>

      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1">BIENVENIDO AL SISTEMA DE POSTULACIÓN</h1>
          <p class="lead"><i class="bi bi-award"></i> PREMIO ESTATAL DE LA JUVENTUD 2021 | <strong>INJUVENTUD</strong></p>
          <hr class="my-4">

          <!-- Donut chart -->
            <h3 class="box-title"><i class="bi bi-pie-chart-fill"></i> Avance de carga de archivos</h3>

               
             
            
              <canvas id="myChart" width="400" height="150"></canvas>
              <hr>
           
          
        
        <?php
        include('prcd/qwery_validacion_dashboard.php');
        ?>
        <!-- consulta de validación -->


        <div class="container-fluid">
        <!-- <div class="row row-cols-1 row-cols-md-2 row-sm-2"> -->
        <div class="row g-1">
          <div class="col-sm-6 mb-3">
            <div class="card text-dark bg-light mb-5" style="max-width: 36rem; height: auto; box-shadow: 4px -1px 0px -1px #005eff;">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-credit-card-2-front-fill"></i> DATOS PERSONALES</h5>
                <p class="card-text">Agregar datos del postulante</p>
                
                <?php
                  if($a == 0){
                    echo '<a href="seccion1.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';

                    echo '<script type="text/javascript">';
                    echo 'cargar()';
                    echo '</script>';

                  }
                  elseif($a > 0){
                    echo '<a href="" ></a>
                    <a href="editar_seccion1.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a>';
                  }
                  
                ?>
                
                <hr>
                <p class="card-text h4 text-center">Estatus</p>

                <?php
                  if($a == 0){
                    echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 2rem; "></i> Sin datos personales</p></div>';
                  }
                  elseif($a==1){
                    echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 2rem;"></i> En revisión</p></div>';
                  }
                  if($a == 2){
                    echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 2rem; color: cornflowerblue;"></i> Datos personales completos</p></div>';
                  }


                ?>

              </div>
            </div>
          </div>

          <div class="col-sm-6 mb-3">
            <div class="card text-dark bg-light mb-5" style="max-width: 36rem; height: auto; box-shadow: 4px -1px 0px -1px #005eff;">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-file-earmark-plus-fill"></i> DOCUMENTOS</h5>
                <p class="card-text">Agregar documentos de postulación <b>(<?php printf("Se cargaron %d documentos\n", $row_cnt);?>)</b></p>
                
                <?php
                  if($x < 9){
                    echo '<a href="seccion4.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  }
                  elseif($x >= 9){
                    echo '<a href="" ></a>
                    <a href="seccion4_editar.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a>
                    <a href="seccion4_visualizar.php" class="card-link"><i class="bi bi-cloud-arrow-down-fill"></i> Visualizar</a>';
                  }
                  
                ?>

                <hr>
                <p class="card-text h4 text-center">Estatus</p>
                
                <?php
                if($x==0){
                echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 2rem; "></i> Sin documentos</p></div>';
                }
                elseif($x > 0 AND $x <= 8){
                echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 2em;"></i> Expediente incompleto</p></div>';
                }
                if($x > 8){
                echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 2rem; color: cornflowerblue;"></i> Expediente completo</p></div>';

                }
                ?>

              </div>
            </div>
          </div>

          
        </div>
      </div> <!-- container -->
      
      
      <hr>
        </div>
      </div>

     
      </div>


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" integrity="sha512-OD9Gn6cAUQezuljS6411uRFr84pkrCtw23Hl5TYzmGyD0YcunJIPSBDzrV8EeCiFxGWWvtJOfVo5pOgB++Jsag==" crossorigin="anonymous"></script>
        <script src="css/dashboard.js"></script></body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-film"></i> Listado de video tutoriales</h5>
              </div>
              <div class="modal-body">
                
                  <p><a href="https://www.youtube.com/watch?v=HLHInBqq3WA" target="_blank"><i class="bi bi-play-circle-fill"></i> Subir datos personales y documentos</a></p>
                  <p><a href="https://www.youtube.com/watch?v=PAGe953Wvjo" target="_blank"><i class="bi bi-play-circle-fill"></i> Elaboración video semblanza</a></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

</html>

<!-- modal img -->

<script>
$(function cargar() {
    $('#myModal').modal('show');
});
    </script>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger"><i class="bi bi-exclamation-triangle-fill"></i> ¡Atención!</h5>
      </div>
      <div class="modal-body">
        <p><img src="img/pej21.jpg" width="100%" alt=""></p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>


<?php
 $v1 = $row_cnt;
//  echo "Subidos ".$v1;
    $v9 = 9;
    $v2 = $v9 - $v1;
    
    // echo " Penientes ".$v2;
?>
 <script>
  var ctx = document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx,{
    type:'doughnut',
    data:{
      labels:['Cargados','No cargados'],
      datasets:[{
        label:'Num datos',
        data:[<?php echo $v1?>,<?php echo $v2?>],
        backgroundColor:[
          '#6C94D9',
          '#DB3536'

        ]
      }]
    },
    options:{
      
    }
  }
  );
</script>
