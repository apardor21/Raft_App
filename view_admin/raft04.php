<html>
	<head>
<meta charset="utf-8" content="">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="../dist/jquery-3.4.1.min.js" charset="utf-8"></script>
  <script src="../dist/sweetalert2.all.min.js" charset="utf-8"></script>
  <script src="../dist/moment.min.js" charset="utf-8"></script>

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
			<li><a href="raft06.php">RAFT 06</a></li>
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
	</div>>

	<br>
	<br>
	<h1 class="moral">RAFT04</h1>
  <form class="" action="../controller/raft04.php" method="post">


    <label for="">Seleccione Departamento</label>
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


</label>
<br><br>
<label for="">Seleccione Municipio</label>
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
<input type="hidden" id="entrada_municipio" name="municipio" value="" readonly >
<input type="hidden" id="entrada_departamento" name="departamento" value="" readonly >
<br><br>
<div class="derecha">
  <label>
    Codigo de Municipio:
    <input  maxlength="3" id="name_oficina"  name="cod_oficina" tabindex="1" required="moral" readonly>
  </label>
</div>
<div class="col-2">
  <label>
    Consecutivo de lote:
    <input type="text" id="consecutivo_lote" name="lote_municipio" tabindex="2"  maxlength="5" placeholder="Digite lote del municipio"required onclick="epa()">
  </label>
</div>
  <div class="col-2">
    <label>
      Lote del Municipio:
      <input type="text" id="lote_municipio" name="cons_lote" maxlength="15"   placeholder="Digite consecutivo de lote"required onclick="epa2()" readonly>
    </label>
  </div>
  <div class="col-2">
    <label>
      Fecha de creación
      <input id="fecha_creacion"  type="date" min="2015-01-02" max="<?php date(); ?>" name="f_creacion"required onclick="">

    </label>

  </div>
  <div class="col-2">
    <label>
      Fecha de recolección
      <input id="f_recoleccion" name="f_recoleccion" tabindex="2" type="date"   required min="2015-01-01" max="<?php date(); ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      Fecha de Recibido
      <input id="f_recibido" name="f_recibido" tabindex="2" type="date" required min="2015-01-01" max="<?php date(); ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      Cantidad de Dias:
      <input id="cantdias" name="cant_dias" tabindex="2" type="number"required onclick="calcularFecha()" readonly>
    </label>
  </div>
  <div class="col-2">
    <label>
      Cantidad de Decadactilares
      <input id="company" maxlength="" name="cant_decas" tabindex="3" type="number"  required >
    </label>
  </div>
  <div class="col-2">
    <label>
      Novedades Presentadas
      <input id="company" name="novedades" tabindex="2" type="text"required>
    </label>
  </div>
  <div class="">
<button class="buttonSubmit" type="reset" class="col-2">Limpiar Datos del Formulario</button><br><br>
<button class="buttonSubmit">Guardar Datos</button>
</div>

  </form>
<img class="image" src="../img/registraduria_plus.jpg" alt="REGIS PLUS">
<script type="text/javascript">
  function epa() {
    var cons_lote = document.getElementById('name_oficina').value;
    document.getElementById('consecutivo_lote').value = cons_lote;
  }

	function epa2() {
		var cons_lote = document.getElementById('name_oficina').value;
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
document.getElementById('lote_municipio').value = cons_lote + result.value[0] + result.value[1] + result.value[2] + result.value[3];
}


		})
	}
  function fecha() {

    var f = new Date();
    var s = document.getElementById('validacion').value;
    s =(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
    var fecha_creacion = document.getElementById('fecha_creacion').value;

    if (fecha_creacion > s) {
      alert("la fecha es mayor")
    }
  }
  function calcularFecha() {
    var fecha1 = moment(document.getElementById('fecha_creacion').value);
    var fecha2 = moment(document.getElementById('f_recibido').value);
    if (fecha1 > fecha2) {
      Swal.fire({
        position: 'top-end',
        type: 'error',
        title: 'La fecha de creación no puede ser mayor a la fecha de recibido',
        showConfirmButton: false,
        timer: 2500
      })
    }
else {
document.getElementById('cantdias').value = ( fecha2.diff(fecha1, 'days'));
}


  }

</script>
</body>
</html>
