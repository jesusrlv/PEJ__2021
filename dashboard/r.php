<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>INJUVENTUD | Premio Estatal de la Juventud</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
   <?php
      include("../../conn/conexion.php");
        
        session_start();
        if(isset($_SESSION['usuario'])){
            
            $nombre=$_SESSION['nombre'];
            $codigo=$_SESSION['codigo'];
            $curp=$_SESSION['curp'];

        }
        
      ?>
   
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>NJ</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IN</b>JUVENTUD</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
           
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/trabajemosJuntosJuventud.png" class="user-image" alt="User Image" style="background-color:white;">
              <span class="hidden-xs">Perfil Usuario</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/trabajemosJuntosJuventud.png" class="img-circle" alt="User Image" style="background-color:white;">

                <p>
                  <?php echo $nombre?> 
                  <small><?php echo $curp ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">

                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>

                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="prcd/sort.php" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
<!--
         
-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/trabajemosJuntosJuventud.png" class="img-circle" alt="User Image" style="background-color:white;">
          
        </div>
        <div class="pull-left info">
          <p>NAVEGADOR USUARIO</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En línea</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <!-- <input type="text" name="q" class="form-control" placeholder="Buscar..."> -->
          <span class="input-group-btn">
                <!-- <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button> -->
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVEGACIÓN PRINCIPAL</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-power-off"></i>
            <span>Sistema</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="flot.php"><i class="fa fa-info-circle"></i> Información General</a></li>
            <li><a href="usr_cargar.php" class="active"><i class="fa fa-cloud-upload"></i> Subir Archivos</a></li>
            <li><a href="usr_reload.php" class="active"><i class="fa fa-cloud-upload"></i> Editar Archivos</a></li>
            <li><a href="usr_repositorio.php"><i class="fa fa-folder-open-o"></i> Repositorio</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Tutoriales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-youtube-play"></i> Video tutorial</a></li>

          </ul>
        </li>
        
         
         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Documentación</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-file-pdf-o"></i> Documento #1</a></li>
            <li><a href="#"><i class="fa fa-file-pdf-o"></i> Documento #2</a></li>
            <li><a href="#"><i class="fa fa-file-pdf-o"></i> Documento #3</a></li>

          </ul>
        </li>
        
         <li class="treeview">
          <a href="#">
            <i class="fa fa-warning"></i> <span>Privacidad</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-thin"></i>  Aviso de privacidad</a></li>
            

          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cargar archivos
        <small>sección para subir documentos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th-large"></i> Inicio</a></li>
        <li><a href="#">Sistema</a></li>
        <li class="active">Subir Archivos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <!-- /.box -->

          
          <!-- /.box -->
        
        <!-- /.col -->
        
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de archivos a cargar</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
<!--                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">-->

                  <div class="input-group-btn">
<!--                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>-->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Cargar archivo</th>
<!--                  <th>Acción</th>-->
                  <th>Status</th>
                  <th>Descripción del archivo</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Carta de propuesta por la institución educativa</td>
<!--                  <td><input type="file" id="exampleInputFile"></td>-->
                 
                 <script type="text/javascript">
                
                     function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("file1").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file1", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "prcd/subir_archivo.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Cargado " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0; //wil clear progress bar after successful upload
    _("file1").style.display='none';
    _("progressBar").style.display='none';
}

function errorHandler(event) {
  _("status").innerHTML = "Fallo en la subida";
}

function abortHandler(event) {
  _("status").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form" enctype="multipart/form-data" method="post">
  
  <?php
    include('../../conn/conexion.php');
    // $query="SELECT * FROM archivos WHERE id_usr='$curp'";
    $query="SELECT * FROM archivos WHERE codigo_usr='$codigo'";

    $resultado= $conn->query($query);
    $row=$resultado->fetch_assoc();
     $variable= $row['link1'];             
        
        if(empty($variable)){
            
            echo '<input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable;
        }
    
    ?>
  
<!--
  <input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
-->
  
 
</form></td>
<!--                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                  
                  
                  <?php           
            if(empty($variable)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?>
                  
<!--
                  <td><span class="label label-success">Cargado</span></td>
                  
-->
                  
                  <td>Emitida en el presente año en papel membretado por alguna institución, organismo, dependencia, agrupación, o bien proponerse a sí mismo. En ella se enumerarán los méritos del candidato(a) y deberá ser dirigida a él o la titular del Instituto de la Juventud del Estado de Zacatecas, precisando la modalidad y categoría en la que solicita su registro. Formato libre.</td>
                </tr>
                
                <tr>
                  <td>2</td>
                  <td>Currículum Vitae</td>
                  

                  <script type="text/javascript">
                
                     function _(el2) {
  return document.getElementById(el2);
}

function uploadFile2() {
  var file = _("file2").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file2", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler2, false);
  ajax.addEventListener("load", completeHandler2, false);
  ajax.addEventListener("error", errorHandler2, false);
  ajax.addEventListener("abort", abortHandler2, false);
  ajax.open("POST", "prcd/subir_archivo2.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler2(event) {
  _("loaded_n_total2").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar2").value = Math.round(percent);
  _("status2").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler2(event) {
  _("status2").innerHTML = event.target.responseText;
  _("progressBar2").value = 0; //wil clear progress bar after successful upload
    _("file2").style.display='none';
    _("progressBar2").style.display='none';
}

function errorHandler2(event) {
  _("status2").innerHTML = "Fallo en la subida";
}

function abortHandler2(event) {
  _("status2").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form2" enctype="multipart/form-data" method="post">
                  
                  <?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable2= $row['link2'];             
        
        if(empty($variable2)){
            
            echo '<input type="file" name="file2" id="file2" onchange="uploadFile2()"><br>
  <progress id="progressBar2" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status2"></h3>
  <p id="loaded_n_total2"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable2;
        }
    
    ?>
                  
<!--
  <input type="file" name="file2" id="file2" onchange="uploadFile2()"><br>
  <progress id="progressBar2" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status2"></h3>
  <p id="loaded_n_total2"></p>
-->
</form></td>
<!--                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                 
                  <?php           
            if(empty($variable2)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?> 
    
                  
                                              
<!--                  <td><span class="label label-warning">Pending</span></td>-->
                  
                  <td>Documento actualizado, incluyendo datos generales (nombre completo, dirección, teléfono(s), correo electrónico, ocupación).</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Semblanza de trayectoria</td>
                  <script type="text/javascript">
                
                     function _(el3) {
  return document.getElementById(el3);
}

function uploadFile3() {
  var file = _("file3").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file3", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler3, false);
  ajax.addEventListener("load", completeHandler3, false);
  ajax.addEventListener("error", errorHandler3, false);
  ajax.addEventListener("abort", abortHandler3, false);
  ajax.open("POST", "prcd/subir_archivo3.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler3(event) {
  _("loaded_n_total3").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar3").value = Math.round(percent);
  _("status3").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler3(event) {
  _("status3").innerHTML = event.target.responseText;
  _("progressBar3").value = 0; //wil clear progress bar after successful upload
    _("file3").style.display='none';
    _("progressBar3").style.display='none';
}

function errorHandler3(event) {
  _("status3").innerHTML = "Fallo en la subida";
}

function abortHandler3(event) {
  _("status3").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form3" enctype="multipart/form-data" method="post">
                  
                  
        <?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable3= $row['link3'];             
        
        if(empty($variable3)){
            
            echo '<input type="file" name="file3" id="file3" onchange="uploadFile3()"><br>
  <progress id="progressBar3" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status3"></h3>
  <p id="loaded_n_total3"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable3;
        }
    
    ?>
<!--
  <input type="file" name="file3" id="file3" onchange="uploadFile3()"><br>
  <progress id="progressBar3" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status3"></h3>
  <p id="loaded_n_total3"></p>
-->
</form></td>
<!--
                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                  
-->
                  <?php           
            if(empty($variable3)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?>
                     
                  <td>Documento con un máximo de una cuartilla.</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Material bibliográfico</td>
                  <script type="text/javascript">
                
                     function _(el4) {
  return document.getElementById(el4);
}

function uploadFile4() {
  var file = _("file4").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file4", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler4, false);
  ajax.addEventListener("load", completeHandler4, false);
  ajax.addEventListener("error", errorHandler4, false);
  ajax.addEventListener("abort", abortHandler4, false);
  ajax.open("POST", "prcd/subir_archivo4.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler4(event) {
  _("loaded_n_total4").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar4").value = Math.round(percent);
  _("status4").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler4(event) {
  _("status4").innerHTML = event.target.responseText;
  _("progressBar4").value = 0; //wil clear progress bar after successful upload
   _("file4").style.display='none';
    _("progressBar4").style.display='none';
}

function errorHandler4(event) {
  _("status4").innerHTML = "Fallo en la subida";
}

function abortHandler4(event) {
  _("status4").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form4" enctype="multipart/form-data" method="post">
                  
<?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable4= $row['link4'];             
        
        if(empty($variable4)){
            
            echo '<input type="file" name="file4" id="file4" onchange="uploadFile4()"><br>
  <progress id="progressBar4" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status4"></h3>
  <p id="loaded_n_total4"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable4;
        }
    
    ?>
<!--
  <input type="file" name="file4" id="file4" onchange="uploadFile4()"><br>
  <progress id="progressBar4" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status4"></h3>
  <p id="loaded_n_total4"></p>
-->
</form></td>
<!--                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                  <?php           
            if(empty($variable4)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?> 
                  <td>Copia o duplicado de materiales bibliográficos, audiovisuales, gráficos y otros que demuestren los motivos por los cuales se considera que él o la candidata (a) puede merecer el premio.</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Video-capsula de 30 segundos</td>
                  <script type="text/javascript">
                
                     function _(el5) {
  return document.getElementById(el5);
}

function uploadFile5() {
  var file = _("file5").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file5", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler5, false);
  ajax.addEventListener("load", completeHandler5, false);
  ajax.addEventListener("error", errorHandler5, false);
  ajax.addEventListener("abort", abortHandler5, false);
  ajax.open("POST", "prcd/subir_archivo5.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler5(event) {
  _("loaded_n_total5").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar5").value = Math.round(percent);
  _("status5").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler5(event) {
  _("status5").innerHTML = event.target.responseText;
  _("progressBar5").value = 0; //wil clear progress bar after successful upload
    _("file5").style.display='none';
    _("progressBar5").style.display='none';
}

function errorHandler5(event) {
  _("status5").innerHTML = "Fallo en la subida";
}

function abortHandler5(event) {
  _("status5").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form5" enctype="multipart/form-data" method="post">
<?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable5= $row['link5'];             
        
        if(empty($variable5)){
            
            echo '<input type="file" name="file5" id="file5" onchange="uploadFile5()"><br>
  <progress id="progressBar5" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status5"></h3>
  <p id="loaded_n_total5"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable5;
        }
    
    ?>
 
 <!--
  <input type="file" name="file5" id="file5" onchange="uploadFile5()"><br>
  <progress id="progressBar5" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status5"></h3>
  <p id="loaded_n_total5"></p>
-->
</form></td>
<!--                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                  
                  <?php           
            if(empty($variable5)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?> 
                    
                  <td>Deberán presentar una cápsula de 30 segundos como máximo, en digital, donde se explique brevemente por qué se considera acreedor del Premio Estatal de la Juventud. Se subirá por medio de youtube o un video de no más de 70 MB.</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Acta de nacimiento</td>
                  <script type="text/javascript">
                
                     function _(el6) {
  return document.getElementById(el6);
}

function uploadFile6() {
  var file = _("file6").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file6", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler6, false);
  ajax.addEventListener("load", completeHandler6, false);
  ajax.addEventListener("error", errorHandler6, false);
  ajax.addEventListener("abort", abortHandler6, false);
  ajax.open("POST", "prcd/subir_archivo6.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler6(event) {
  _("loaded_n_total6").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar6").value = Math.round(percent);
  _("status6").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler6(event) {
  _("status6").innerHTML = event.target.responseText;
  _("progressBar6").value = 0; //wil clear progress bar after successful upload
    _("file6").style.display='none';
    _("progressBar6").style.display='none';
}

function errorHandler6(event) {
  _("status6").innerHTML = "Fallo en la subida";
}

function abortHandler6(event) {
  _("status6").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form6" enctype="multipart/form-data" method="post">
<?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable6= $row['link6'];             
        
        if(empty($variable6)){
            
            echo '<input type="file" name="file6" id="file6" onchange="uploadFile6()"><br>
  <progress id="progressBar6" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status6"></h3>
  <p id="loaded_n_total6"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable6;
        }
    
    ?>

 <!--
  <input type="file" name="file6" id="file6" onchange="uploadFile6()"><br>
  <progress id="progressBar6" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status6"></h3>
  <p id="loaded_n_total6"></p>
-->
</form></td>
<!--                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                  
                  <?php           
            if(empty($variable6)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?> 
                    
                  <td>Documento escaneado (PDF) o imagen (JPG).</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Credencial de elector</td>
                  <script type="text/javascript">
                
                     function _(el7) {
  return document.getElementById(el7);
}

function uploadFile7() {
  var file = _("file7").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file7", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler7, false);
  ajax.addEventListener("load", completeHandler7, false);
  ajax.addEventListener("error", errorHandler7, false);
  ajax.addEventListener("abort", abortHandler7, false);
  ajax.open("POST", "prcd/subir_archivo7.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler7(event) {
  _("loaded_n_total7").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar7").value = Math.round(percent);
  _("status7").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler7(event) {
  _("status7").innerHTML = event.target.responseText;
  _("progressBar7").value = 0; //wil clear progress bar after successful upload
    _("file7").style.display='none';
    _("progressBar7").style.display='none';
}

function errorHandler7(event) {
  _("status7").innerHTML = "Fallo en la subida";
}

function abortHandler7(event) {
  _("status7").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form7" enctype="multipart/form-data" method="post">
<?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable7= $row['link7'];             
        
        if(empty($variable7)){
            
            echo '<input type="file" name="file7" id="file7" onchange="uploadFile7()"><br>
  <progress id="progressBar7" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status7"></h3>
  <p id="loaded_n_total7"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable7;
        }
    
    ?>
 
 <!--
  <input type="file" name="file7" id="file7" onchange="uploadFile7()"><br>
  <progress id="progressBar7" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status7"></h3>
  <p id="loaded_n_total7"></p>
-->
</form></td>
<!--                  <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                  <?php           
            if(empty($variable7)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?> 
                  <td>Documento escaneado (PDF) o imagen (JPG).</td>
                </tr>
                
                <tr>
                  <td>8</td>
                  <td>Comprobante de domicilio</td>
                  <script type="text/javascript">
                
                     function _(el8) {
  return document.getElementById(el8);
}

function uploadFile8() {
  var file = _("file8").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file8", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler8, false);
  ajax.addEventListener("load", completeHandler8, false);
  ajax.addEventListener("error", errorHandler8, false);
  ajax.addEventListener("abort", abortHandler8, false);
  ajax.open("POST", "prcd/subir_archivo8.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler8(event) {
  _("loaded_n_total8").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar8").value = Math.round(percent);
  _("status8").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler8(event) {
  _("status8").innerHTML = event.target.responseText;
  _("progressBar8").value = 0; //wil clear progress bar after successful upload
   _("file8").style.display='none';
    _("progressBar8").style.display='none';
}

function errorHandler8(event) {
  _("status8").innerHTML = "Fallo en la subida";
}

function abortHandler8(event) {
  _("status8").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form8" enctype="multipart/form-data" method="post">
<?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable8= $row['link8'];             
        
        if(empty($variable8)){
            
            echo '<input type="file" name="file8" id="file8" onchange="uploadFile8()"><br>
  <progress id="progressBar8" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status8"></h3>
  <p id="loaded_n_total8"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable8;
        }
    
    ?>
 
 <!--
  <input type="file" name="file8" id="file8" onchange="uploadFile8()"><br>
  <progress id="progressBar8" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status8"></h3>
  <p id="loaded_n_total8"></p>
-->
</form></td>
<!--                  <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                  <?php           
            if(empty($variable8)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?> 
                  <td>Documento escaneado (PDF) o imagen (JPG).</td>
                </tr>
                
                <tr>
                  <td>9</td>
                  <td>CURP</td>
                  <script type="text/javascript">
                
                     function _(el9) {
  return document.getElementById(el9);
}

function uploadFile9() {
  var file = _("file9").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file9", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler9, false);
  ajax.addEventListener("load", completeHandler9, false);
  ajax.addEventListener("error", errorHandler9, false);
  ajax.addEventListener("abort", abortHandler9, false);
  ajax.open("POST", "prcd/subir_archivo9.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler9(event) {
  _("loaded_n_total9").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar9").value = Math.round(percent);
  _("status9").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler9(event) {
  _("status9").innerHTML = event.target.responseText;
  _("progressBar9").value = 0; //wil clear progress bar after successful upload
    _("file9").style.display='none';
    _("progressBar9").style.display='none';
}

function errorHandler9(event) {
  _("status9").innerHTML = "Fallo en la subida";
}

function abortHandler9(event) {
  _("status9").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form9" enctype="multipart/form-data" method="post">
<?php
//    include('../../conn/conexion.php');
//    $query="SELECT * FROM archivos WHERE id_usr='$curp'";
//    $resultado= $conn->query($query);
//    $row=$resultado->fetch_assoc();
     $variable9= $row['link9'];             
        
        if(empty($variable9)){
            
            echo '<input type="file" name="file9" id="file9" onchange="uploadFile9()"><br>
  <progress id="progressBar9" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status9"></h3>
  <p id="loaded_n_total9"></p>';
        }
        else{
            echo "<h3>Archivo cargado en tu sistema</h3>".$variable9;
        }
    
    ?>

 <!--
  <input type="file" name="file9" id="file9" onchange="uploadFile9()"><br>
  <progress id="progressBar9" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status9"></h3>
  <p id="loaded_n_total9"></p>
-->
</form></td>
<!--                  <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>-->
                  <?php           
            if(empty($variable9)){
            echo '<td><span class="label label-warning">No Cargado</span></td>';
            }
            else{
            echo '<td><span class="label label-success">Cargado</span></td>';
            }
    
                    ?> 
                  <td>Documento escaneado (PDF) o imagen (JPG).</td>
                </tr>
                
                
              </table>
              
<!-- BOTÓN OCULTO
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Calificar</button>
              </div>
-->
              
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cargar archivo</h4>
              </div>
              <div class="modal-body">
                <p><label for="exampleInputFile">Seleeciona el documento</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">No tiene que exceder los 60Mb</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
            
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>ZACATECAS</b>, ZAC.
    </div>
    <strong>Gobierno del Estado de Zacatecas &copy; 2016-2021 <a href="http://www.zacatecas.gob.mx">GODEZAC</a>.</strong> INJUVENTUD
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
