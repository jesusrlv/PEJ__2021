<?php

// $servername="localhost";
// $database="proveedores"; //solo se quitó para conexión remota
// $username="root";
// $password="";

// $conn= new mysqli ($servername,$username,$password,$database); //solo se quitó para conexión remota

?>

<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'c2cOnf_psic_0307');
define('DB_SERVER_PASSWORD', 'ThmfMTk_G6');
define('DB_DATABASE', 'c2PEJ21');

$conn = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
?>