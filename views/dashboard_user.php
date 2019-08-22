<?php
include("../Data Base/config.php");
if (isset($user)) {
 ?>
<html>
	<head>
<meta charset="utf-8" content="">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>

    		<img class="img" src="../img/logo.png" alt="RNEC LOGO">
        <img class="imgcolombia" src="../img/colombia.jpg" alt="Escudo de Colombia">

    		<h1 class="titleIndex"> Registraduría Nacional del Estado Civil - Centro de Acopio
    			<br>Registro y Actualización del Sistema</h1>

	<div id="header">

	<ul class="nav">

		<li><a href="dashboard_user.php">Inicio</a>

		<li><a href="dashboard_user.php">RAS</a>
		<ul>
			<li><a href="raft04.php">RAFT 04</a></li>
			<li><a href="raft06.php">RAFT 06</a></li>
			<li><a href="raft07.php">RAFT 07</a></li>
			<li><a href="raft08.php">RAFT 08</a></li>
			<li><a href="raft10.php">RAFT 10</a></li>
			<li><a href="raft11.php">RAFT 11</a></li>
			<li><a href="raft41.php">RAFT 41</a></li>

		</ul>
		</li>

		<li><a href="dashboard_user.php">Cruces</a></li>

		<li><a href="dashboard_user.php">Reportes</a></li>

		<li><a href="consulta_view.php">Consultas</a>

		<li><a href="dashboard_user.php">Devoluciones</a>

		<li><a href="dashboard_user.php">Ayuda</a>
		<ul>
			<li><a href="dashboard_user.php">Manual de usuario</a></li>
			<li><a href="dashboard_user.php">Versión</a></li>
		</ul>
		</li>

		<li><a href="../index.php">Salir	</a>
	</ul>
	</div>

	<br>
	<br>

	<img class="imgRegisPlus" src="../img/registraduria_plus.jpg" alt="REGIS PLUS">


	</body>


</html>
<?php
}else {
	header("Location:../index.php");
}
 ?>
