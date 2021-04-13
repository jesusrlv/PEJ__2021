<?php
$id = $_SESSION['categoria'];
    
// logro académico
    $query_usr="SELECT * FROM usr WHERE perfil = 2";
    $resultado_usr= $conn->query($query_usr);


    ?>