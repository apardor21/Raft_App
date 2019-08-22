<html>
	<head>
<meta charset="utf-8" content="">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="../dist/jquery-3.4.1.min.js" charset="utf-8"></script>
	<script src="../dist/sweetalert2.all.min.js" charset="utf-8"></script>
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
  <form class="" action="../controller/raft08.php" method="post">

		<label for="">Seleccione Centro de Acopio</label>
		<select class="" name="select" id="valor2" onchange="moral2()">
			<option>selecciona...</option>
			<?php
			include("../Data Base/config.php");
			$sql = "SELECT id, nombre FROM departamento";
			$resultado = $conexion -> query($sql);
			$fila = 0;
			while ($row = $resultado->fetch_assoc()) {
				$fila++;
				echo '<option value="'.$row[nombre].'">'.$row[nombre].'</option>';
			}
			?>
			<script type="text/javascript">
			function moral2() {
				var x = document.getElementById('valor2').value;
				document.getElementById('entrada_departamento').value = x;
						if ($(x).val("BOLIVAR")) {
							$("#muniatlantico").hide();
								$("#valor1").show();


					}
					else if ($(x).val("ATLANTICO")) {
						$("#valor1").hide();
						$("#muniatlantico").show();
					}
			}




		</script>
	</select>


</label><br><br>
<input type="hidden" id="entrada_departamento" name="departamento" value="" readonly >

<label>

Nombre del SetTranferSet:
<input type="text" id="lote_municipio" name="Sts" maxlength="15"  required onclick="epa2()" readonly>
</label><br><br>




	  <label for="">Fecha de Creación</label>
    <input type="date" name="f_creacion" value=""><br><br>
    <label for="">Fecha de Envio de Transmición</label>
    <input type="date" name="f_transmision" value=""><br><br>
		<label>Clase de Tramite</label>
		<select class="" name="c_tramite" onchange="claseTramite()" id="clase_tramite">
			<option>seleciona...</option>
			<option value="Primera Vez CC">Primera Vez CC</option>
			<option value="Renovación CC">Renovación CC</option>
			<option value="Rectificación CC">Rectificación CC</option>
			<option value="Duplicado CC">Duplicado CC</option>
			<option value="Primera Vez TI">Primera Vez TI</option>
			<option value="Duplicado TI">Duplicado TI</option>
			<option value="Rectificación TI">Rectificación TI</option>
		</select> <br><br>
		<input type="hidden" name="tramites" value="" maxlength="14" id="tramites"><br><br>
		 <label for="">Cantidad de Solicitudes</label>
		 <input type="number" name="cant_solicitudes" value=""><br><br>
    <label for="">Verificación de Transmisión</label>
    <input type="text" name="veri_trans" value=""><br><br>
    <label for="">Observaciones Especiales</label>
    <input type="text" name="obs_especial" value=""><br><br>
    <button type="submit" class="buttonSubmit" name="button">Guardar Datos</button>
  </form>

<script type="text/javascript">

function epa2() {

	Swal.mixin({

		input: 'number',
		confirmButtonText: 'Next &rarr;',
		showCancelButton: true,
		progressSteps: ['1', '2', '3','4']
	}).queue([
		{
			title: 'Digite año' ,
			text: 'Esto con el motivo de reducir errores en la digitación'
		},
		'Digite Mes',
		'Digite Dia',
		'Digite Hora'

	]).then((result) => {
		if (result.value) {
			Swal.fire({
				title: 'Campos Digitados!',
				html:
					'Seguro que estos son los Datos?: <pre><code>' +
						JSON.stringify(result.value) +
					'</code></pre>',
				confirmButtonText: 'Ingresar Datos'
			})
		}
		 if (result.value[1] > 12) {
			Swal.fire({
				type: 'error',
				title: 'Oops...',
				text: 'Mes no existe!',
				footer: '<a href>esto pasa porque el mes que digitaste no existe es decir el valor se pasa de 12</a>'
			})
}
if (result.value[2] > 31) {
Swal.fire({
type: 'error',
title: 'Oops...',
text: 'Dia no exist!',
footer: '<a href>esto pasa porque el dia que digitaste no existe es decir el valor se pasa de 31</a>'
})
}
if (result.value[3] > 2359) {
Swal.fire({
type: 'error',
title: 'Oops...',
text: 'Hora no valida!',
footer: '<a href>esto pasa porque la hora que digitaste no existe es decir el valor se pasa de 2359</a>'
})
}else {
document.getElementById('lote_municipio').value = "C6Y" + result.value[0] + result.value[1] + result.value[2] + result.value[3];
}


	})
}
function claseTramite() {
	var x = document.getElementById('clase_tramite').value;
	document.getElementById('tramites').value = x;
}
</script>

	</body>
</html>
