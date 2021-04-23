<?php


// $id = $_SESSION['id'];
    // include('prcd/conn.php');
    $x = 0;
    $c1 = 0;
    $d1 = 0;
    $c = 0;
    
    $query="SELECT * FROM datos WHERE id_ext='$id'";
    $resultado= $conn->query($query);
    $row=$resultado->fetch_assoc();
        // $datos = $row['id_ext'];
        $a = $row['validacion'];
    
    
    // $query="SELECT * FROM validacion WHERE id_ext='$id'";
    // $resultado= $conn->query($query);
    // $row=$resultado->fetch_assoc();
    //     // $datos = $row['id_ext'];
    //     $a = $row['tipo_validacion'];
     
    
    // $query2="SELECT * FROM direccion WHERE id_ext='$id'";
    // $resultado2= $conn->query($query2);
    // $row2=$resultado2->fetch_assoc();
    //     $b = $row2['validacion'];
     
    // $query3="SELECT * FROM banco WHERE id_ext='$id'";
    // $resultado3= $conn->query($query3);
    // // $row3=$resultado3->fetch_assoc();
    //     // $c = $row3['validacion'];
    //     while($row3 = $resultado3->fetch_assoc()){
    //         $c1 = $c1 + $row3['validacion'];
    //         $d1++;
    //     }

    //     $c = ($c1/$d1);
     
    $query4="SELECT * FROM docs WHERE id_ext='$id'";
    $resultado4= $conn->query($query4);
    // $row4=$resultado4->fetch_assoc();
        
        while($row4 = $resultado4->fetch_assoc()){
            $x = $x + $row4['validacion'];
        }
     
    
        
$query="SELECT * FROM docs WHERE id_ext='$id'";
$resultado= $conn->query($query);
$row=$resultado->fetch_assoc();

$row_cnt = $resultado->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);

if ($row_cnt == 9){
    $query_email="SELECT * FROM email WHERE id_ext='$id'";
    $resultado_email= $conn->query($query_email);
    // $row_email=$resultado_email->fetch_assoc();
    $row_email = $resultado_email->num_rows;
    if($row_email == 0){

        echo "<script type=\"text/javascript\">location.href='prcd/envio_correo_expediente.php'</script>";

    }

    

}// fin if 9 docs 




    ?>
