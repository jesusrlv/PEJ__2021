<?php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte_ganadores_PEJ21.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
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
            </table>
            <hr>