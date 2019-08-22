<?php

include("../Data Base/config.php");
session_start();

$tableName = strtolower($_POST['raft']);
$department = $_POST['department'];
$municipality = $_POST['municipality'];

$created_init = $_POST['created_init'];
$created_end = $_POST['created_end'];
$rec_init = $_POST['rec_init'];
$rec_end = $_POST['rec_end'];
$r_init = $_POST['r_init'];
$r_end = $_POST['r_end'];

$id_user = $_SESSION['id'];

if (empty($tableName)) {
  echo "No has seleccionado un RAFT";
} else if (empty($department) || $department == "selecciona...") {
  echo "No has seleccionado un departamento";
} else if (empty($municipality) || $municipality == "selecciona...") {
  echo "No has seleccionado un municipio";
} else {
  $consulta = "SELECT * 
               FROM $tableName
               WHERE id_user='$id_user' AND 
                     nombre_departamento='$department' AND 
                     nombre_municipio='$municipality' AND 
                     fecha_creacion BETWEEN '$created_init' AND '$created_end' AND
                     fecha_recoleccion BETWEEN '$r_init' AND '$r_end' AND
                     fecha_recibido BETWEEN '$rec_init' AND '$rec_end'";

  $respuesta = $conexion->query($consulta);

  if($respuesta) { 
    $path = "../consultas/".$tableName."_view.php";
    header("Location: $path"); 
  } else { 
    echo "error: " . $consulta . "<br>" . mysqli_error($conexion); 
  }

}