<html>
	<head>
<meta charset="utf-8" content="">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="../dist/jquery-3.4.1.min.js" charset="utf-8"></script>
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
  <form class="" action="../controller/raft06.php" method="post">
    <label>Numero de Preparación
    	<input type="number" name="num_prepa" value="" maxlength="8"><br><br>
		</label>
    <label for="">Numero de Identificación</label>
    <input type="number" name="num_id" value=""><br><br>
    <label for="">Motivo de Devolución</label>
    <input type="text" name="mot_dev" value=""><br><br>
    <label for="">Clase de Tramite</label>
    <input type="text" name="clas_tramite" value=""><br><br>


		<label for="">Nombre de La oficina de Preparación</label><br>
		<div class="" id="toggle">

		<select class="" name="select" id="valor1" onchange="moral()">
		  <option>selecciona...</option>
		  <?php
		  include("../Data Base/config.php");
		  $sql = "SELECT codigo_oficina, nombre_municipio FROM oficina";
		  $resultado = $conexion -> query($sql);
		  $fila = 0;
		  while ($row = $resultado->fetch_assoc()) {
		    $fila++;
		    echo '<option value="'.$row[codigo_oficina].'">'.$row[nombre_municipio].'</option>';
		  }
		  ?>
		  <script type="text/javascript">
		  function moral() {
		    var x = document.getElementById('valor1').value;
		    document.getElementById('name_oficina').value = x;

		    var combo = document.getElementById("valor1");
		    var selected = combo.options[combo.selectedIndex].text;
		    document.getElementById('entrada_municipio').value = selected;
		    }


		</script>

		</select>
		</div>
		<input type="hidden" id="entrada_municipio" name="municipio" value="" readonly ><br><br>



		<label>
	    Codigo de Oficina de Preparación:
	    <input  maxlength="3" id="name_oficina"  name="cod_oficina" tabindex="1" required="moral" readonly>
	  </label<br><br



		<label >Numero de Oficio Devolución</label>
    <input type="number" name="num_oficio" value=""><br><br>
    <label for="">Fecha de Devolución</label>
    <input type="date" name="f_devolucion" value=""><br><br>
    <label for="">Numero de preparación de Reemplazo</label>
    <input type="number" name="num_remplazo" value=""><br><br>
    <button type="submit" class="buttonSubmit" name="button">Guardar Datos</button>

  </form>
	</body>


</html>
