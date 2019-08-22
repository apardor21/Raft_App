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

			<li><a href="dashboard_user.php">RAS</a>
			<ul>
				<li><a href="raft04.php">RAFT 04</a></li>


			</ul>
			</li>

			<li><a href="dashboard_user.php">Cruces</a></li>

			<li><a href="dashboard_user.php">Reportes</a></li>

			<li><a href="dashboard_user.php">Consultas</a>

			<li><a href="dashboard_user.php">Devoluciones</a>

			<li><a href="dashboard_user.php">Ayuda</a>
			<ul>
				<li><a href="dashboard_user.php">Manual de usuario</a></li>
				<li><a href="dashboard_user.php">Versión</a></li>
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
