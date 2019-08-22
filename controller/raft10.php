<?php
  include("../Data Base/config.php");

  $semanaInicial = $_POST['semana_inicial'];
  $item = $_POST['item'];
  $sts = $_POST['sts'];
  $ts = $_POST['ts'];
  $pv_cc = $_POST['pv'];
  $renovacion_cc = $_POST['renov'];
  $rectificacion_cc = $_POST['rect'];
  $duplicado = $_POST['dupli'];
  $pv_ti = $_POST['pv_ti'];
  $duplicado_ti = $_POST['dupli_ti'];
  $rectificacion_ti = $_POST['rect_ti'];
  $renovacion_ti = $_POST['renov_ti'];
  $no_procesado = $_POST['no_procesados'];
  $total = $_POST['total'];



        $consulta = "INSERT INTO `raft10`(`semana_fecha_inicial`, `item`, `sts`, `ts`, `p.v_cc`, `renov_cc`, `rect_cc`, `dupli_cc`, `pv_ti`, `dupli_ti`, `rect_ti`, `renov_ti`, `no_procesado`, `total`)
        VALUES ('$semanaInicial',
                '$item',
                '$sts',
                '$ts',
                '$pv_cc',
                '$renovacion_cc',
                '$rectificacion_cc',
                '$duplicado',
                '$pv_ti',
                '$duplicado_ti',
                '$rectificacion_ti',
                '$renovacion_ti',
                '$no_procesado',
                '$total')";


        $respuesta = $conexion->query($consulta);


        if($respuesta){  header("Location: ../views/dashboard_user.php"); }
        else{   echo "error: " . $consulta . "<br>" . mysqli_error($conexion); }





  ?>
