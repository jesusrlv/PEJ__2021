<?php 
require('prcd/conn2.php');
sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['username'];
 
    $result = $conn->query(
        'SELECT * FROM datos WHERE rfc = "'.strtolower($username).'"'
    );
 
    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Nombre de usuario no disponible.</div>
        
        <style>
            #boton_submit{display:none;}
        </style>
        ';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}