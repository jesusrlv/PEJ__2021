<?php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte_calificacaciones_PEJ21.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

session_start();

include('../dashboard/prcd/conn.php');
include('../dashboard/prcd/qwery_admin.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>



        <p class=" h4">CATEGORIA: LOGRO ACADÉMICO (12 - 19 AÑOS)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr = $resultado_usr->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion = $row_usr['id_ext'];
                $query = "SELECT * FROM docs WHERE id_ext='$id_validacion'";
                $resultado= $conn->query($query);
                $row=$resultado->fetch_assoc();
                $row_cnt = $resultado->num_rows;

                if($row_cnt == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion'";
                    $resultado_calificacion= $conn->query($query_calificacion);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion = $resultado_calificacion->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr['apellido'].'</td>';
                echo '<td>'.$row_usr['nombre'].'</td>';
                echo '<td>'.$row_usr['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr['id_ext'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';

                if ($row_usr['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: LOGRO ACADÉMICO (20 - 29 AÑOS)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr2 = $resultado_usr2->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion2 = $row_usr2['id_ext'];
                $query2 = "SELECT * FROM docs WHERE id_ext='$id_validacion2'";
                $resultado2= $conn->query($query2);
                $row2=$resultado2->fetch_assoc();
                $row_cnt2 = $resultado2->num_rows;

                if($row_cnt2 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion2 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion2'";
                    $resultado_calificacion2= $conn->query($query_calificacion);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion2 = $resultado_calificacion2->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion2['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion2['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion2['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion2['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr2['apellido'].'</td>';
                echo '<td>'.$row_usr2['nombre'].'</td>';
                echo '<td>'.$row_usr2['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr2['id_ext'].'&id_cat=2" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr2['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr2['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr2['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: DISCAPACIDAD E INTEGRACIÓN</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr3 = $resultado_usr3->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion3 = $row_usr3['id_ext'];
                $query3 = "SELECT * FROM docs WHERE id_ext='$id_validacion'";
                $resultado3= $conn->query($query3);
                $row3=$resultado3->fetch_assoc();
                $row_cnt3 = $resultado3->num_rows;

                if($row_cnt3 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion3 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion3'";
                    $resultado_calificacion3= $conn->query($query_calificacion3);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion3 = $resultado_calificacion3->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion3['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion3['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion3['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion3['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr3['apellido'].'</td>';
                echo '<td>'.$row_usr3['nombre'].'</td>';
                echo '<td>'.$row_usr3['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr3['id_ext'].'&id_cat=3" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr3['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr3['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr3['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: INGENIO EMPRENDEDOR</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr4 = $resultado_usr4->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion4 = $row_usr4['id_ext'];
                $query4 = "SELECT * FROM docs WHERE id_ext='$id_validacion4'";
                $resultado4= $conn->query($query4);
                $row4=$resultado4->fetch_assoc();
                $row_cnt4 = $resultado4->num_rows;

                if($row_cnt4 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion4 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion4'";
                    $resultado_calificacion4= $conn->query($query_calificacion4);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion4 = $resultado_calificacion4->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion4['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion4['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion4['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion4['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr4['apellido'].'</td>';
                echo '<td>'.$row_usr4['nombre'].'</td>';
                echo '<td>'.$row_usr4['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr4['id_ext'].'&id_cat=4" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr4['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr4['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr4['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: RESPONSABILIDAD SOCIAL</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr5 = $resultado_usr5->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion5 = $row_usr5['id_ext'];
                $query5 = "SELECT * FROM docs WHERE id_ext='$id_validacion5'";
                $resultado5= $conn->query($query5);
                $row5=$resultado5->fetch_assoc();
                $row_cnt5 = $resultado5->num_rows;

                if($row_cnt5 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion5 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion5'";
                    $resultado_calificacion5= $conn->query($query_calificacion5);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion5 = $resultado_calificacion5->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion5['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion5['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion5['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion5['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr5['apellido'].'</td>';
                echo '<td>'.$row_usr5['nombre'].'</td>';
                echo '<td>'.$row_usr5['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr5['id_ext'].'&id_cat=5" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr5['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr5['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr5['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: MÉRITO MIGRANTE</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr6 = $resultado_usr6->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion6 = $row_usr6['id_ext'];
                $query6 = "SELECT * FROM docs WHERE id_ext='$id_validacion6'";
                $resultado6= $conn->query($query6);
                $row6=$resultado6->fetch_assoc();
                $row_cnt6 = $resultado6->num_rows;

                if($row_cnt6 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion6 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion6'";
                    $resultado_calificacion6= $conn->query($query_calificacion6);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion6 = $resultado_calificacion6->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion6['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion6['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion6['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion6['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr6['apellido'].'</td>';
                echo '<td>'.$row_usr6['nombre'].'</td>';
                echo '<td>'.$row_usr6['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr6['id_ext'].'&id_cat=6" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr6['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr6['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr6['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: MÉRITO CAMPESINO</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr7 = $resultado_usr7->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion7 = $row_usr7['id_ext'];
                $query7 = "SELECT * FROM docs WHERE id_ext='$id_validacion7'";
                $resultado7= $conn->query($query7);
                $row7=$resultado7->fetch_assoc();
                $row_cnt7 = $resultado7->num_rows;

                if($row_cnt7 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion7= "SELECT * FROM calificacion WHERE id_ext1='$id_validacion7'";
                    $resultado_calificacion7= $conn->query($query_calificacion7);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion7 = $resultado_calificacion7->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion7['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion7['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion7['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion7['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr7['apellido'].'</td>';
                echo '<td>'.$row_usr7['nombre'].'</td>';
                echo '<td>'.$row_usr7['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr7['id_ext'].'&id_cat=7" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr7['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr7['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr7['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: PROTECCIÓN AL MEDIO AMBIENTE</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr8 = $resultado_usr8->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion8 = $row_usr8['id_ext'];
                $query8 = "SELECT * FROM docs WHERE id_ext='$id_validacion8'";
                $resultado8= $conn->query($query8);
                $row8=$resultado8->fetch_assoc();
                $row_cnt8 = $resultado8->num_rows;

                if($row_cnt8 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion8 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion8'";
                    $resultado_calificacion8= $conn->query($query_calificacion8);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion8 = $resultado_calificacion8->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion8['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion8['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion8['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion8['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr8['apellido'].'</td>';
                echo '<td>'.$row_usr8['nombre'].'</td>';
                echo '<td>'.$row_usr8['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr8['id_ext'].'&id_cat=8" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr8['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr8['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr8['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORÍA: CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr9 = $resultado_usr9->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion9 = $row_usr9['id_ext'];
                $query9 = "SELECT * FROM docs WHERE id_ext='$id_validacion9'";
                $resultado9= $conn->query($query9);
                $row9=$resultado9->fetch_assoc();
                $row_cnt9 = $resultado9->num_rows;

                if($row_cnt9 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion9 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion9'";
                    $resultado_calificacion9= $conn->query($query_calificacion9);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion9 = $resultado_calificacion9->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion9['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion9['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion9['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion9['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr9['apellido'].'</td>';
                echo '<td>'.$row_usr9['nombre'].'</td>';
                echo '<td>'.$row_usr9['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr9['id_ext'].'&id_cat=9" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr9['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr9['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr9['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: LITERATURA</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr10 = $resultado_usr10->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion10 = $row_usr10['id_ext'];
                $query10 = "SELECT * FROM docs WHERE id_ext='$id_validacion10'";
                $resultado10= $conn->query($query10);
                $row10=$resultado10->fetch_assoc();
                $row_cnt10 = $resultado10->num_rows;

                if($row_cnt10 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion10 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion10'";
                    $resultado_calificacion10= $conn->query($query_calificacion10);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion10 = $resultado_calificacion10->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion10['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion10['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion10['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion10['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr10['apellido'].'</td>';
                echo '<td>'.$row_usr10['nombre'].'</td>';
                echo '<td>'.$row_usr10['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr10['id_ext'].'&id_cat=10" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr10['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr10['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr10['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (MÚSICA)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr11 = $resultado_usr11->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion11 = $row_usr11['id_ext'];
                $query11 = "SELECT * FROM docs WHERE id_ext='$id_validacion11'";
                $resultado11= $conn->query($query11);
                $row11=$resultado11->fetch_assoc();
                $row_cnt11 = $resultado11->num_rows;

                if($row_cnt11 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion11 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion11'";
                    $resultado_calificacion11= $conn->query($query_calificacion11);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion11 = $resultado_calificacion11->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion11['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion11['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion11['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion11['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr11['apellido'].'</td>';
                echo '<td>'.$row_usr11['nombre'].'</td>';
                echo '<td>'.$row_usr11['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr11['id_ext'].'&id_cat=11" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr11['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr11['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr11['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (TEATRO)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr12= $resultado_usr12->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion12 = $row_usr12['id_ext'];
                $query12 = "SELECT * FROM docs WHERE id_ext='$id_validacion12'";
                $resultado12= $conn->query($query12);
                $row12=$resultado12->fetch_assoc();
                $row_cnt12 = $resultado12->num_rows;

                if($row_cnt12 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion12 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion12'";
                    $resultado_calificacion12= $conn->query($query_calificacion12);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion12 = $resultado_calificacion12->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion12['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion12['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion12['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion12['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr12['apellido'].'</td>';
                echo '<td>'.$row_usr12['nombre'].'</td>';
                echo '<td>'.$row_usr12['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr12['id_ext'].'&id_cat=12" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr12['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr12['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr12['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (DANZA)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr13 = $resultado_usr13->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion13 = $row_usr13['id_ext'];
                $query13 = "SELECT * FROM docs WHERE id_ext='$id_validacion13'";
                $resultado13= $conn->query($query13);
                $row13=$resultado13->fetch_assoc();
                $row_cnt13 = $resultado13->num_rows;

                if($row_cnt13 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion13 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion13'";
                    $resultado_calificacion13= $conn->query($query_calificacion13);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion13 = $resultado_calificacion13->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion13['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion13['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion13['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion13['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr13['apellido'].'</td>';
                echo '<td>'.$row_usr13['nombre'].'</td>';
                echo '<td>'.$row_usr13['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr13['id_ext'].'&id_cat=13" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr13['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr13['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr13['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES PLÁSTICAS, VISUALES Y POPULARES</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr14 = $resultado_usr14->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion14 = $row_usr14['id_ext'];
                $query14= "SELECT * FROM docs WHERE id_ext='$id_validacion14'";
                $resultado14= $conn->query($query14);
                $row14=$resultado14->fetch_assoc();
                $row_cnt14 = $resultado14->num_rows;

                if($row_cnt14 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion14 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion14'";
                    $resultado_calificacion14= $conn->query($query_calificacion14);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion14 = $resultado_calificacion14->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion14['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion14['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion14['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion14['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr14['apellido'].'</td>';
                echo '<td>'.$row_usr14['nombre'].'</td>';
                echo '<td>'.$row_usr14['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr14['id_ext'].'&id_cat=14" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr14['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr14['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr14['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTE URBANO</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr15 = $resultado_usr15->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion15 = $row_usr15['id_ext'];
                $query15 = "SELECT * FROM docs WHERE id_ext='$id_validacion15'";
                $resultado15= $conn->query($query15);
                $row15=$resultado15->fetch_assoc();
                $row_cnt15 = $resultado15->num_rows;

                if($row_cnt15 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion15 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion15'";
                    $resultado_calificacion15= $conn->query($query_calificacion15);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion15 = $resultado_calificacion15->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion15['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion15['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion15['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion15['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr15['apellido'].'</td>';
                echo '<td>'.$row_usr15['nombre'].'</td>';
                echo '<td>'.$row_usr15['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr15['id_ext'].'&id_cat=15" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr15['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr15['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr15['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: CIENCIA Y TECNOLOGÍA</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr = $resultado_usr->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion16 = $row_usr16['id_ext'];
                $query16 = "SELECT * FROM docs WHERE id_ext='$id_validacion16'";
                $resultado16= $conn->query($query16);
                $row16=$resultado16->fetch_assoc();
                $row_cnt16 = $resultado16->num_rows;

                if($row_cnt16 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion16 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion16'";
                    $resultado_calificacion16= $conn->query($query_calificacion16);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;

                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion16 = $resultado_calificacion16->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion16['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion16['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion16['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion16['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr16['apellido'].'</td>';
                echo '<td>'.$row_usr16['nombre'].'</td>';
                echo '<td>'.$row_usr16['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr16['id_ext'].'&id_cat=16" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                if ($row_usr16['medal']==1){
                  echo '<td class="text-warning"><a href="../dashboard/prcd/no_ganador.php?id='.$row_usr['id_ext'].'" style="text-decoration:none" class="text-warning"><i class="bi bi-star-fill"></i></a></td>';
                }
                else{
                  echo '<td class="text-dark"><a href="../dashboard/prcd/ganador.php?id='.$row_usr17['id_ext'].'" class="text-dark"><i class="bi bi-star"></i></a></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>
       
        

