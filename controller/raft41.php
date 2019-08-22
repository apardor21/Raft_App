<?php
  include("../Data Base/config.php");

  $fecha = $_POST['fecha'];
  $id=$_POST['id'];
  $num_preparacion = $_POST['n_preparacion'];
  $sticker = $_POST['sticker'];
  $observaciones = $_POST['observaciones'];



        $consulta = "INSERT INTO `raft41`(`fecha`, `id`, `nro_preparacion`, `nro_sticker`, `observaciones`)
        VALUES ('$fecha','$id','$num_preparacion','$sticker','$observaciones')";

        $respuesta = $conexion->query($consulta);


        if($respuesta){  header("Location: ../views/dashboard_user.php"); }
        else{   echo "error: " . $consulta . "<br>" . mysqli_error($conexion); }





  ?>
