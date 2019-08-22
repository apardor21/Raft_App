<?php
  include("../Data Base/config.php");

  $numeroPreparacion = $_POST['num_prepa'];
  $numId=$_POST['num_id'];
  $motivoDevolucion = $_POST['mot_dev'];
  $claseTramite = $_POST['clas_tramite'];
  $nombreOficinaPreparacion = $_POST['municipio'];
  $codigoOficina = $_POST['cod_oficina'];
  $numeroOficio = $_POST['num_oficio'];
  $fechaDevolucion = $_POST['f_devolucion'];
  $numroReemplazo = $_POST['num_remplazo'];


        $consulta = "INSERT INTO `raft06`(`n_preparacion`, `nuip`, `motivo_devolucion`, `calse_tramite`, `nombre_oficina`, `codigo_oficina`, `no_oficio_devolucion`, `fecha_devolucion`, `preparacion_reemplazo`)
        VALUES ('$numeroPreparacion','$numId','$motivoDevolucion','$claseTramite','$nombreOficinaPreparacion','$codigoOficina','$numeroOficio','$fechaDevolucion','$numroReemplazo')";

        $respuesta = $conexion->query($consulta);


        if($respuesta){  header("Location: ../views/dashboard_user.php"); }
        else{   echo "error: " . $consulta . "<br>" . mysqli_error($conexion); }





  ?>
