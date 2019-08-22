<html>
	<head>
<meta charset="utf-8" content="">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<table>

			<tr>
				<td><img src="../img/logo.png" alt="RNEC LOGO" width="290px" height="160px" ></td>
				<td width="1000px"><center><font size="5" face="Arial, Helvetica, sans-serif" color=#535D5B>Registraduría Nacional del Estado Civil - Centro de Acopio
				<br>Registro y Actualización del Sistema</font></center></td>
				</tr>

		</table><br><br>
	<div id="header">

	<ul class="nav">

		<li><a href="da	shboard_admin.php">Inicio</a>

		<li><a href="dashboard_admin.php">RAS</a>
		<ul>
			<li><a href="raft04.php">RAFT 04</a></li>
			<li><a href="aft06.php">RAFT 06</a></li>
			<li><a href="raft07.php">RAFT 07</a></li>
			<li><a href="raft08.php">RAFT 08</a></li>
			<li><a href="raft10.php">RAFT 10</a></li>
			<li><a href="raft11.php">RAFT 11</a></li>
			<li><a href="raft41.php">RAFT 41</a></li>

		</ul>
		</li>
		<li><a href="dashboard_admin.php">Cruces</a></li>

		<li><a href="dashboard_admin.php">Reportes</a></li>

		<li><a href="dashboard_admin.php">Consultas</a>

		<li><a href="dashboard_admin.php">Devoluciones</a>

		<li><a href="dashboard_admin.php">Administrador</a>
		<ul>
			<li><a href="dashboard_admin.php">Parámetros</a></li>
			<li><a href="dashboard_admin.php">Usuarios</a></li>
			<li><a href="dashboard_admin.php">Oficinas</a></li>
			<li><a href="dashboard_admin.php">Registros</a></li>
		</ul>
		</li>

		<li><a href="dashboard_admin.php">Ayuda</a>
		<ul>
			<li><a href="dashboard_admin-php">Manual de usuario</a></li>
			<li><a href="dashboard_admin.php">Versión</a></li>
		</ul>
		</li>

		<li><a href="../index.php">Salir</a>

	</ul>
	</div>

	<br>
	<br>

	<img class="imgRegisPlus" src="../img/registraduria_plus.jpg" alt="REGIS PLUS">
<form class="" action="../controller/raft41.php" method="post">
  <label for="">Fecha</label>
  <input type="date" name="fecha" value=""><br><br>
  <label for="">Numero de Identidad</label>
  <input type="number" name="id" value="" maxlength="11" required><br><br>
  <label for="">Numero de Preparación</label>
  <input type="number" name="n_preparacion" value="" maxlength="9" required><br><br>
  <label for="">Numero de Sticker o Proceso</label>
  <input type="number" name="sticker" value="" maxlength="9" required><br><br>
  <label for="">observaciones</label>
  <input type="text" name="observaciones" value="" required ><br><br>
  <button type="submit" class="buttonSubmit" name="button">Guardar Datos</button>
</form>
	</body>


</html>
