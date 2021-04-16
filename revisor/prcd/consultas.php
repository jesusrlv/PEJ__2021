<?php
    // curriculum
    $documento1 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 2";
    $resultado1= $conn->query($documento1);
    $row1=$resultado1->fetch_assoc();

    // semblanza
    $documento2 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 3";
    $resultado2= $conn->query($documento2);
    $row2=$resultado2->fetch_assoc();

    // material bibliográfico
    $documento3 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 8";
    $resultado3= $conn->query($documento3);
    $row3=$resultado3->fetch_assoc();

    // video
    $documento4 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 9";
    $resultado4= $conn->query($documento4);
    $row4=$resultado4->fetch_assoc();

?>