<html>
<head>
	<title>Directrices CA</title>
<meta charset="utf-8" content="">
<meta name="viewport" content="initial-scale=1, width=device-width">
<link rel="stylesheet" href="css/style.css">
<script src="dist/sweetalert2.all.min.js" charset="utf-8"></script>
</head>

<body>
	<div id="titulo">


		<img class="img" src="img/logo.png" alt="RNEC LOGO">
		       

		<h1 class="titleIndex"> Registraduría Nacional del Estado Civil - Centro de Acopio
			<br>Registro y Actualización del Sistema</h1>



	</div>
	<div class="center">
		<h1 class="title">Acceso Gestión CA</h1>


		<form class="formularioLogin" action="index.php" method="post">
			<label for="">Usuario</label>
				<input type="text" name="user" value="" required>
			<label for="password">Contraseña</label>
				<input type="password" name="pass" value="" required>
				<button class="buttonSubmit" type="submit" name="validar">ingresar</button><br><br>
			<a href="#" class="registro">Actualizar contraseña</a>
	<br>	<br>	<a href="" class="registro2"></a
		</form>
<a class="registro2" href="mailto:jlcastilla@registraduria.gov.co?subject=Soporte de software Regis Plus ">Necesitas ayuda? Contactate con el Administrador</a>
		</div>
		<img class="imgRegisPlus" src="img/registraduria_plus.jpg" alt="REGIS PLUS">

	</body>
</html>
<?php
include("Data Base/config.php");
  if (isset($_POST['validar'])) {

		session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];

		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		$id_user = "SELECT id FROM `usuarios` WHERE usuario = '$user'";
		$idUser_res = $conexion->query($id_user);
		$contacto = $idUser_res->fetch_assoc();
			$_SESSION['id'] = $contacto['id'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND pass = '$pass' AND Tipo_usuario = '1'";
    $sql2 = "SELECT * FROM usuarios WHERE usuario = '$user' AND pass = '$pass' AND Tipo_usuario = '2'";
    $resultado = $conexion->query($sql);
    $resultado2 = $conexion->query($sql2);
    $número_filas =mysqli_num_rows($resultado);
    $número_filas2 =mysqli_num_rows($resultado2);
    if ($número_filas == 1) {
      header("Location: view_admin/dashboard_admin.php");
    }elseif ($número_filas2 == 1) {
    header("Location: views/dashboard_user.php");
	}else {
		echo  "<script type=\"text/javascript\">alert(\"Datos incorrectos\");</script>";
		}

  }
 ?>
