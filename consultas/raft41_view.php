<html>
	<head>
<meta charset="utf-8" content="">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<table>

			<tr>
				<td><img src="../img/logo.png" alt="RNEC LOGO" width="250px" height="160px" ></td>
				<td width="1000px"><center><font size="5" face="Arial, Helvetica, sans-serif" color=#535D5B>Registraduría Nacional del Estado Civil - Centro de Acopio
				<br>Registro y Actualización del Sistema</font></center></td>
				</tr>

		</table><br><br>
	<div id="header">

	<ul class="nav">

		<li><a href="dashboard_user.php">Inicio</a>

		<li><a href="">RAS</a>
		<ul>
      <li><a href="raft04_view.php">RAFT 04</a></li>
      <li><a href="view_raft06.php">RAFT 06</a></li>
      <li><a href="raft07_view.php">RAFT 07</a></li>
      <li><a href="raft08_view.php">RAFT 08</a></li>
      <li><a href="raft10_view.php">RAFT 10</a></li>
      <li><a href="raft11_view.php">RAFT 11</a></li>
      <li><a href="raft41_view.php">RAFT 41</a></li>

		</ul>
		</li>

		<li><a href="">Cruces</a></li>

		<li><a href="">Reportes</a></li>

		<li><a href="">Consultas</a>

		<li><a href="">Devoluciones</a>

		<li><a href="">Ayuda</a>
		<ul>
			<li><a href="">Manual de usuario</a></li>
			<li><a href="">Versión</a></li>
		</ul>
		</li>

		<li><a href="../index.php">Salir</a>
	</ul>
	</div>

	<br>
	<br>

	<img class="imgRegisPlus" src="../img/registraduria_plus.jpg" alt="REGIS PLUS">

  <center>

  <table class="tabla" border="1px">
        <thead>
          <tr>

            <th>FECHA</th>
            <th>No DOCUMENTO DE IDENTIDAD</th>
            <th>NUMERO DE PREPARACIÓN</th>
            <th>No DE SCTICKER o REPROCESO</th>
            <th>OBSERVACIONES</th>


          </tr>
        </thead>
          <tbody>
            <?php
            include("../Data Base/config.php");

            $sql = "SELECT * FROM raft41";
            $respuesta = $conexion->query($sql);
            $fila = 0;
            while($contacto= $respuesta->fetch_assoc()){
              $fila++;
              if($fila%2==0){ ?> <tr bgcolor=""> <?php }
              else{ ?> <tr bgcolor=""> <?php }
              ?>

                <td><?php echo $contacto['fecha']; ?></td>
                <td><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto['nro_preparacion']; ?></td>
                <td><?php echo $contacto['nro_sticker']; ?></td>
                <td><?php echo $contacto['observaciones']; ?></td>



              </tr>
            <?php
            }

            ?>

          </tbody>
        </table> <br><br>
        <a href="raft41.php"><button type="submit" class="buttonSubmit" name="button">Registrar Datos</button></a>
</center>

	</body>


</html>
