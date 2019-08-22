<?php
  include("../Data Base/config.php");

  $centroAcopio = $_POST['departamento'];
  $sts=$_POST['Sts'];
  $fechaCracion = $_POST['f_creacion'];
  $fecha_transmicion = $_POST['f_transmision'];
  $tramite= $_POST['tramites'];
  $cant_solicitudes = $_POST['cant_solicitudes'];
  $veri_trans = $_POST['veri_trans'];
  $observacioEspecial = $_POST['obs_especial'];



        $consulta = "INSERT INTO `raft08`(`c_acopio`, `nombre_sts`, `fecha_creacion`, `fecha_transmicion`, `clase_tramite`, `cant_solicitudes`, `verificacion_trans`, `observaciones_especiales`)
        VALUES ('$centroAcopio','$sts','$fechaCracion','$fecha_transmicion','$tramite','$cant_solicitudes','$veri_trans','$observacioEspecial')";

        $respuesta = $conexion->query($consulta);


        if($respuesta){  header("Location: ../views/dashboard_user.php"); }
        else{   echo "error: " . $consulta . "<br>" . mysqli_error($conexion); }





  ?>
