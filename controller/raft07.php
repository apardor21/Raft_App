<?php
  include("../Data Base/config.php");

  $numeroPreparacio = $_POST['num_prepa'];
  $numId=$_POST['num_id'];
  $motivoDestruccion = $_POST['mot_destruccion'];
  $formatoDestruir = $_POST['format_destruir'];
  $nombreOficinaPreparacion = $_POST['municipio'];
  $codigoOficina = $_POST['cod_oficina'];
  $numeroOficio = $_POST['num_acta'];
  $fechaDestruccion = $_POST['f_destruccion'];



        $consulta = "INSERT INTO `raft07`(`n_preparacion`, `nuip`, `m_destruccion`, `formato_destruir`, `oficina_preparacion`, `codigo_oficina`, `no_acta_destruccion`, `fecha_destruccion`)
        VALUES ('$numeroPreparacion','$numId','$motivoDestruccion','$formatoDestruir','$nombreOficinaPreparacion','$codigoOficina','$numeroOficio','$fechaDestruccion')";

        $respuesta = $conexion->query($consulta);


        if($respuesta){  header("Location: ../views/dashboard_user.php"); }
        else{   echo "error: " . $consulta . "<br>" . mysqli_error($conexion); }





  ?>
