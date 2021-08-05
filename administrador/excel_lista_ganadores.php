<?php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte_ganadores_PEJ21.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-type: text/html; charset=utf8");

echo "
    <html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">
    <html>
    <head><meta http-equiv=\"Content-type\" content=\"text/html;charset=utf-8\" /></head>";

session_start();

include('../dashboard/prcd/conn.php');
// include('../dashboard/prcd/qwery_admin.php');
include('prcd/qwery_ganadores.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>


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
                echo '<td>'.utf8_decode($row_consulta1['apellido']).'</td>';
                echo '<td>'.utf8_decode($row_consulta1['nombre']).'</td>';
                echo '<td>'.$row_consulta1['edad'].'</td>';
                
                // echo '<td>'.$row_consulta1['grado'].'</td>';
                $id_grado1=$row_consulta1['grado'];
                $grado1 = "SELECT * FROM grado WHERE id ='$id_grado1'";
                $resultado_grado1= $conn->query($grado1);
                $row_grado1=$resultado_grado1->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado1['grado']).'</td>';

                echo '<td>'.$row_consulta1['telefono'].'</td>';
                // echo '<td>'.$row_consulta1['municipio'].'</td>';
                $id_municipio1=$row_consulta1['municipio'];
                $municipio1 = "SELECT * FROM municipio WHERE id ='$id_municipio1'";
                $resultado_municipio1= $conn->query($municipio1);
                $row_municipio1=$resultado_municipio1->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio1['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta2['grado'].'</td>';

                $id_grado2=$row_consulta2['grado'];
                $grado2 = "SELECT * FROM grado WHERE id ='$id_grado2'";
                $resultado_grado2= $conn->query($grado2);
                $row_grado2=$resultado_grado2->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado2['grado']).'</td>';

                echo '<td>'.$row_consulta2['telefono'].'</td>';
                // echo '<td>'.$row_consulta2['municipio'].'</td>';
                $id_municipio2=$row_consulta2['municipio'];
                $municipio2 = "SELECT * FROM municipio WHERE id ='$id_municipio2'";
                $resultado_municipio2= $conn->query($municipio2);
                $row_municipio2=$resultado_municipio2->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio2['municipio']).'</td>';

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

                // echo '<td>'.$row_consulta3['grado'].'</td>';
                $id_grado3=$row_consulta3['grado'];
                $grado3 = "SELECT * FROM grado WHERE id ='$id_grado3'";
                $resultado_grado3= $conn->query($grado3);
                $row_grado3=$resultado_grado3->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado3['grado']).'</td>';
                
                echo '<td>'.$row_consulta3['telefono'].'</td>';
                // echo '<td>'.$row_consulta3['municipio'].'</td>';
                $id_municipio3=$row_consulta3['municipio'];
                $municipio3 = "SELECT * FROM municipio WHERE id ='$id_municipio3'";
                $resultado_municipio3= $conn->query($municipio3);
                $row_municipio3=$resultado_municipio3->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio3['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta4['grado'].'</td>';
                $id_grado4=$row_consulta4['grado'];
                $grado4 = "SELECT * FROM grado WHERE id ='$id_grado4'";
                $resultado_grado4= $conn->query($grado4);
                $row_grado4=$resultado_grado4->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado4['grado']).'</td>';

                echo '<td>'.$row_consulta4['telefono'].'</td>';
                // echo '<td>'.$row_consulta4['municipio'].'</td>';
                $id_municipio4=$row_consulta4['municipio'];
                $municipio4 = "SELECT * FROM municipio WHERE id ='$id_municipio4'";
                $resultado_municipio4= $conn->query($municipio4);
                $row_municipio4=$resultado_municipio4->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio4['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta5['grado'].'</td>';
                $id_grado5=$row_consulta5['grado'];
                $grado5 = "SELECT * FROM grado WHERE id ='$id_grado5'";
                $resultado_grado5= $conn->query($grado5);
                $row_grado5=$resultado_grado5->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado5['grado']).'</td>';

                echo '<td>'.$row_consulta5['telefono'].'</td>';
                // echo '<td>'.$row_consulta5['municipio'].'</td>';
                $id_municipio5=$row_consulta5['municipio'];
                $municipio5 = "SELECT * FROM municipio WHERE id ='$id_municipio5'";
                $resultado_municipio5= $conn->query($municipio5);
                $row_municipio5=$resultado_municipio5->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio5['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta6['grado'].'</td>';
                $id_grado6=$row_consulta6['grado'];
                $grado6 = "SELECT * FROM grado WHERE id ='$id_grado6'";
                $resultado_grado6= $conn->query($grado6);
                $row_grado6=$resultado_grado6->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado6['grado']).'</td>';

                echo '<td>'.$row_consulta6['telefono'].'</td>';
                // echo '<td>'.$row_consulta6['municipio'].'</td>';
                $id_municipio6=$row_consulta6['municipio'];
                $municipio6 = "SELECT * FROM municipio WHERE id ='$id_municipio6'";
                $resultado_municipio6= $conn->query($municipio6);
                $row_municipio6=$resultado_municipio6->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio6['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta7['grado'].'</td>';
                $id_grado7=$row_consulta7['grado'];
                $grado7 = "SELECT * FROM grado WHERE id ='$id_grado7'";
                $resultado_grado7= $conn->query($grado7);
                $row_grado7=$resultado_grado7->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado7['grado']).'</td>';

                echo '<td>'.$row_consulta7['telefono'].'</td>';
                // echo '<td>'.$row_consulta7['municipio'].'</td>';
                $id_municipio7=$row_consulta7['municipio'];
                $municipio7 = "SELECT * FROM municipio WHERE id ='$id_municipio7'";
                $resultado_municipio7= $conn->query($municipio7);
                $row_municipio7=$resultado_municipio7->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio7['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta8['grado'].'</td>';
                $id_grado8=$row_consulta8['grado'];
                $grado8 = "SELECT * FROM grado WHERE id ='$id_grado8'";
                $resultado_grado8= $conn->query($grado8);
                $row_grado8=$resultado_grado8->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado8['grado']).'</td>';

                echo '<td>'.$row_consulta8['telefono'].'</td>';
                // echo '<td>'.$row_consulta8['municipio'].'</td>';
                $id_municipio8=$row_consulta8['municipio'];
                $municipio8 = "SELECT * FROM municipio WHERE id ='$id_municipio8'";
                $resultado_municipio8= $conn->query($municipio8);
                $row_municipio8=$resultado_municipio8->fetch_assoc();
                echo '<td>'.utf8_encode($row_municipio8['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta9['grado'].'</td>';
                $id_grado9=$row_consulta9['grado'];
                $grado9 = "SELECT * FROM grado WHERE id ='$id_grado9'";
                $resultado_grado9= $conn->query($grado9);
                $row_grado9=$resultado_grado9->fetch_assoc();
                echo '<td>'.($row_grado9['grado']).'</td>';

                echo '<td>'.$row_consulta9['telefono'].'</td>';
                // echo '<td>'.$row_consulta9['municipio'].'</td>';
                $id_municipio9=$row_consulta9['municipio'];
                $municipio9 = "SELECT * FROM municipio WHERE id ='$id_municipio9'";
                $resultado_municipio9= $conn->query($municipio9);
                $row_municipio9=$resultado_municipio9->fetch_assoc();
                echo '<td>'.($row_municipio9['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta10['grado'].'</td>';
                $id_grado10=$row_consulta10['grado'];
                $grado10 = "SELECT * FROM grado WHERE id ='$id_grado10'";
                $resultado_grado10= $conn->query($grado10);
                $row_grado10=$resultado_grado10->fetch_assoc();
                echo '<td>'.utf8_encode($row_grado10['grado']).'</td>';

                echo '<td>'.$row_consulta10['telefono'].'</td>';
                // echo '<td>'.$row_consulta10['municipio'].'</td>';
                $id_municipio10=$row_consulta10['municipio'];
                $municipio10 = "SELECT * FROM municipio WHERE id ='$id_municipio10'";
                $resultado_municipio10= $conn->query($municipio10);
                $row_municipio10=$resultado_municipio10->fetch_assoc();
                echo '<td>'.($row_municipio10['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta11['grado'].'</td>';
                $id_grado11=$row_consulta11['grado'];
                $grado11 = "SELECT * FROM grado WHERE id ='$id_grado11'";
                $resultado_grado11= $conn->query($grado11);
                $row_grado11=$resultado_grado11->fetch_assoc();
                echo '<td>'.($row_grado11['grado']).'</td>';

                echo '<td>'.$row_consulta11['telefono'].'</td>';
                // echo '<td>'.$row_consulta11['municipio'].'</td>';
                $id_municipio11=$row_consulta11['municipio'];
                $municipio11 = "SELECT * FROM municipio WHERE id ='$id_municipio11'";
                $resultado_municipio11= $conn->query($municipio11);
                $row_municipio11=$resultado_municipio11->fetch_assoc();
                echo '<td>'.($row_municipio11['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta12['grado'].'</td>';
                $id_grado12=$row_consulta12['grado'];
                $grado12 = "SELECT * FROM grado WHERE id ='$id_grado12'";
                $resultado_grado12= $conn->query($grado12);
                $row_grado12=$resultado_grado12->fetch_assoc();
                echo '<td>'.($row_grado12['grado']).'</td>';

                echo '<td>'.$row_consulta12['telefono'].'</td>';
                // echo '<td>'.$row_consulta12['municipio'].'</td>';
                $id_municipio12=$row_consulta12['municipio'];
                $municipio12 = "SELECT * FROM municipio WHERE id ='$id_municipio12'";
                $resultado_municipio12= $conn->query($municipio12);
                $row_municipio12=$resultado_municipio12->fetch_assoc();
                echo '<td>'.($row_municipio12['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta13['grado'].'</td>';
                $id_grado13=$row_consulta13['grado'];
                $grado13 = "SELECT * FROM grado WHERE id ='$id_grado13'";
                $resultado_grado13= $conn->query($grado13);
                $row_grado13=$resultado_grado13->fetch_assoc();
                echo '<td>'.($row_grado13['grado']).'</td>';

                echo '<td>'.$row_consulta13['telefono'].'</td>';
                // echo '<td>'.$row_consulta13['municipio'].'</td>';
                $id_municipio13=$row_consulta13['municipio'];
                $municipio13 = "SELECT * FROM municipio WHERE id ='$id_municipio13'";
                $resultado_municipio13= $conn->query($municipio13);
                $row_municipio13=$resultado_municipio13->fetch_assoc();
                echo '<td>'.($row_municipio13['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta14['grado'].'</td>';
                $id_grado14=$row_consulta14['grado'];
                $grado14 = "SELECT * FROM grado WHERE id ='$id_grado14'";
                $resultado_grado14= $conn->query($grado14);
                $row_grado14=$resultado_grado14->fetch_assoc();
                echo '<td>'.($row_grado14['grado']).'</td>';

                echo '<td>'.$row_consulta14['telefono'].'</td>';
                // echo '<td>'.$row_consulta14['municipio'].'</td>';
                $id_municipio14=$row_consulta14['municipio'];
                $municipio14 = "SELECT * FROM municipio WHERE id ='$id_municipio14'";
                $resultado_municipio14= $conn->query($municipio14);
                $row_municipio14=$resultado_municipio14->fetch_assoc();
                echo '<td>'.($row_municipio14['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta15['grado'].'</td>';
                $id_grado15=$row_consulta15['grado'];
                $grado15 = "SELECT * FROM grado WHERE id ='$id_grado15'";
                $resultado_grado15= $conn->query($grado15);
                $row_grado15=$resultado_grado15->fetch_assoc();
                echo '<td>'.($row_grado15['grado']).'</td>';

                echo '<td>'.$row_consulta15['telefono'].'</td>';
                // echo '<td>'.$row_consulta15['municipio'].'</td>';
                $id_municipio15=$row_consulta15['municipio'];
                $municipio15 = "SELECT * FROM municipio WHERE id ='$id_municipio15'";
                $resultado_municipio15= $conn->query($municipio15);
                $row_municipio15=$resultado_municipio15->fetch_assoc();
                echo '<td>'.($row_municipio15['municipio']).'</td>';

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
                // echo '<td>'.$row_consulta16['grado'].'</td>';
                $id_grado16=$row_consulta16['grado'];
                $grado16 = "SELECT * FROM grado WHERE id ='$id_grado16'";
                $resultado_grado16= $conn->query($grado16);
                $row_grado16=$resultado_grado16->fetch_assoc();
                echo '<td>'.($row_grado16['grado']).'</td>';

                echo '<td>'.$row_consulta16['telefono'].'</td>';
                // echo '<td>'.$row_consulta16['municipio'].'</td>';
                $id_municipio16=$row_consulta16['municipio'];
                $municipio16 = "SELECT * FROM municipio WHERE id ='$id_municipio16'";
                $resultado_municipio16= $conn->query($municipio16);
                $row_municipio16=$resultado_municipio16->fetch_assoc();
                echo '<td>'.($row_municipio16['municipio']).'</td>';

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