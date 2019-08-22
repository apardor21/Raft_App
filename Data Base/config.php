<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "app_regis2";

$conexion = new mysqli($host, $user,$pass , $db);
if ($conexion -> connect_errno){
    die("Error de conexión: " . $conexion->mysqli_connect_errno() . ", " . $conexión->mysqli_connect_error());
}
else{

}

 ?>
