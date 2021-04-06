<html>
<header>
        <link rel="shortcut icon" href="../../../img/mini_logo_cigo.ico" />  

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php

include('conn.php');

$nombre = $_POST['nombre'];
$usuario = $_POST['username'];
$pwd = $_POST['password'];
$hash_pwd = md5($pwd);
$perfil = 1;

$sql="INSERT INTO usr(nombre,usuario,pwd,perfil) 
VALUES('$nombre','$usuario','$hash_pwd','$perfil')";
$resultado= $conn->query($sql);

if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Usuario agregado',
        'success'
      ).then(function(){location.href='../../index.php';}
    
      
    
    );</script>";
}

else{
    echo "<script type=\"text/javascript\">Swal.fire(
        'Advertencia',
        'Usuario no agregado',
        'warning'
      ).then(function(){window.location=history.go(-1);}
    
      
    
    );</script>";

}

?>


</html>