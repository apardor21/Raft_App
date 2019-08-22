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

<form class="" action="../controller/raft11.php" method="post">
  <label for="">Semana Inicial</label>
  <input type="date" name="semana_inicial" value=""><br><br>
  <label for="">Material sin Recepcionar</label>
  <input type="number" name="material_sin_recepcion" value=""><br><br>
  <label for="">Item</label>
  <input type="text" name="item" value=""><br><br>
  <center><hr width="445px" color=#535D5B>
  <label for="">Producción en Espera</label>
  </center>
  <h2>Cedula Ciudadania</h2><br>
  <label for="">Primera Vez</label>
    <input type="number" name="pv" value="" id="pv_cc"><br><br>
  <label for="">Renovación</label>
  <input type="number" name="renov" value="" id="renov_cc"><br><br>
  <label for="">Rectificación</label>
  <input type="number" name="rect" value="" id="rect_cc"><br><br>
  <label for="">Duplicado</label>
    <input type="number" name="dupli" value="" id="dupli_cc"><br><br>
  <h2>Tarjeta de Identidad</h2><br>
  <label for="">Primera Vez</label>
    <input type="number" name="pv_ti" value="" id="pv_ti"><br><br>
  <label for="">Duplicado</label>
    <input type="number" name="dupli_ti" value="" id="dupli_ti"><br><br>
  <label for="">Rectificación</label>
  <input type="number" name="rect_ti" value="" id="rect_ti"><br><br>
  <label for="">Renovación</label>
  <input type="number" name="renov_ti" value="" id="renov_ti"><br><br>
  <center><hr width="445px" color=#535D5B>
    <label for="">Resultados</label>
  </center><br>
  <label for="">No Procesados</label>
  	<input type="number" name="no_procesados" value="" id="no_procesados"><br><br>
  <label for="">Total</label>
  <input type="number" name="total" value="" onclick="calculoFinal()" readonly id="total"><br><br>
  <button type="submit" class="buttonSubmit" name="button">Guardar Datos</button>
</form>
</form>

<script type="text/javascript">
function calculoFinal() {
var pv_cc = document.getElementById('pv_cc').value;
var renov_cc = document.getElementById('renov_cc').value;
var recti_cc = document.getElementById('rect_cc').value;
var dupli_cc = document.getElementById('dupli_cc').value;
var pv_ti = document.getElementById('pv_ti').value;
var dupli_ti = document.getElementById('dupli_ti').value;
var rect_ti = document.getElementById('rect_ti').value;
var renov_ti = document.getElementById('renov_ti').value;
var no_procesados = document.getElementById('no_procesados').value;

var pv = parseInt(pv_cc);
var renov = parseInt(renov_cc);
var recti = parseInt(recti_cc);
var dupli = parseInt(dupli_cc);
var pvTi = parseInt(pv_ti);
var dupliTi = parseInt(dupli_ti);
var rectiTi = parseInt(rect_ti);
var renovTi= parseInt(renov_ti);
var noProcesados = parseInt(no_procesados);

var total = pv + renov + recti + dupli + pvTi + dupliTi + rectiTi + renovTi + noProcesados;

document.getElementById('total').value = total;

}
</script>

	</body>
</html>
