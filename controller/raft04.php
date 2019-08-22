<?php

  include("../Data Base/config.php");
  session_start();
  $departamento = $_POST['departamento'];
  $municipio=$_POST['municipio'];
  $codigo_oficina = $_POST['cod_oficina'];
  $con_lote = $_POST['cons_lote'];
  $fechacreacion = $_POST['f_creacion'];
  $fecharecoleccion = $_POST['f_recoleccion'];
  $fecharecibido = $_POST['f_recibido'];
  $cant_dias = $_POST['cant_dias'];
  $cant_decas = $_POST['cant_decas'];
  $novedades = $_POST['novedades'];
  $lote_municipio = $_POST['lote_municipio'];
  $id_user = $_SESSION['id'];


    if (empty($departamento) || $departamento == "selecciona...") {
        echo "no has seleccionado un municipio";
      }else if (empty($municipio) || $municipio == "selecciona...") {
        echo "no has seleccionado un un departamento";
      }else {
        $consulta = "INSERT INTO `raft04`(`lote_municipio`, `fecha_creacion`, `fecha_recoleccion`, `fecha_recibido`, `cant_dias`, `cant_decas`, `cons_lote`, `novedades_presentadas`, `codigo_oficina`, `nombre_municipio`, `nombre_departamento`,`id_user`)
         VALUES ('$lote_municipio','$fechacreacion','$fecharecoleccion','$fecharecibido','$cant_dias','$cant_decas','$con_lote','$novedades','$codigo_oficina','$municipio','$departamento', '$id_user')";

        $respuesta = $conexion->query($consulta);


        if($respuesta){  header("Location: ../index.php"); }
        else{   echo "error: " . $consulta . "<br>" . mysqli_error($conexion); }

      }



  ?>
