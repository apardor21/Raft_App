<html>
	<head>
<meta charset="utf-8" content="">
	<title>Principal</title>
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/materialize.min.css">
  <script src="../dist/jquery-3.4.1.min.js" charset="utf-8"></script>
  <script src="../dist/materialize.min.js" charset="utf-8"></script>
  <script src="../dist/sweetalert2.all.min.js" charset="utf-8"></script>
  </head>
	<body>

			<tr>
			<center><td><img src="../img/logo.png" alt="RNEC LOGO" width="250px" height="160px" ></td></center>
				<td class="moral"width="1000px"><center><font size="5" face="Arial, Helvetica, sans-serif" color=#535D5B>Registraduría Nacional del Estado Civil - Centro de Acopio Registro y
                <br>Actualización del Sistema</font></td>


      </tr><br><br>


	<br><br>
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

		<li><a href="dashboard_user.php">Consultas</a>

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
<form class="" action="../controller/consulta.php" method="post">
  <div class="col s12 m2">
    <p class="z-depth-5">
        <div class="row">
          <div class="col s12">
            <h6>CONSULTAR</h6><br>
          </div>
					<div class="radios">
          <div class="col s2">
            <p>
              <label>
                <input type="radio" name="raft"  id="raft04" value="Raft04" class="with-gap"/>
                <span>Raft04</span>
              </label>
            </p>
          </div>
          <div class="col s2">
            <p>
              <label>
                <input type="radio" name="raft"  id="raft06" value="Raft06" class="with-gap"/>
                <span>Raft06</span>
              </label>
            </p>
          </div>
          <div class="col s2">
            <p>
              <label>
                <input type="radio" name="raft"  id="raft07" value="Raft07" class="with-gap"/>
                <span>Raft07</span>
              </label>
            </p>
          </div>
          <div class="col s2">
            <p>
              <label>
                <input type="radio" name="raft"  id="raft08" value="Raft08" class="with-gap"/>
                <span>Raft08</span>
              </label>
            </p>
          </div>
          <div class="col s2">
            <p>
              <label>
                <input type="radio" name="raft"  id="raft10" value="Raft10" class="with-gap"/>
                <span>Raft10</span>
              </label>
            </p>
          </div>
          <div class="col s2">
            <p>
              <label>
                <input type="radio" name="raft"  id="raft11" value="Raft11" class="with-gap"/>
                <span>Raft11</span>
              </label>
            </p>
          </div>
          <div class="col s12">
            <p>
              <label>
                <input type="radio" name="raft"  id="raft41" value="Raft41" class="with-gap"/>
                <span>Raft41</span><br><br>
              </label>
            </p>
          </div>
					</div>
          <div class="col s4">
        <label>Departamento</label>
        <select class="browser-default" id="valor2" onchange="moral2()" name="department">
          <option value="" disabled selected>Seleccione...</option>
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



					if (document.getElementById('raft04').checked ) {
						alert("moral");
					}

        </script>
				<input type="text" name="" value="" id="rafts">
        <input type="hidden" name="" value="" id="entrada_departamento" name="Departamento">
        </select>
      </div>
      <div class="col s4">
        <label>Municipios</label>
        <select class="browser-default" id="valor1" onchange="moral()" name="municipality">
          <option value="" disabled selected>selecciona una opción</option>
            <option value="1">TODOS</option>
          <?php
          include("../Data Base/config.php");
          $sql = "SELECT codigo_oficina, nombre_municipio FROM oficina";
          $resultado = $conexion -> query($sql);
          $fila = 0;
          while ($row = $resultado->fetch_assoc()) {
            $fila++;
            echo '<option value="'.$row[nombre_municipio].'">'.$row[nombre_municipio].'</option>';
          }
          ?>
          <script type="text/javascript">
          function moral() {
            var x = document.getElementById('valor1').value;
            var combo = document.getElementById("valor1");
            var selected = combo.options[combo.selectedIndex].text;
            document.getElementById('entrada_municipio').value = selected;
          }
        </script>

        </select>

        <input type="hidden" name="municipio" value="" id="entrada_municipio">
      </div>
<div class="col s4">
  <button class="btn waves-effect waves-light" type="submit" name="action">Consultar
    <i class="material-icons right"></i>
  </button>
</div>

</div>
</div>
<div class="col s2">
  <p>
    <label>
      <input id="indeterminate-checkbox" type="checkbox" />
      <span>Consultar Por Fecha</span>
    </label>
  </p>

</div>
<div id="toggleFecha">
  <div class="row">
    <div class="col s4">
      <label>
        Fecha de Creación (Lote):<br> <input type="radio" name="busquedaporFecha" value="">
      <label>fecha inicio</label> <input type="date" name="created_init" value="" min="2019-01-01" max="<?php date() ?>">
      <label>fecha fin</label> <input type="date" name="created_end" value="" min="2019-01-01" max="<?php date() ?>">
      </label>
    </div>
    <div class="col s4">

        <label>
          Fecha de Recepción:<br> <input type="radio" name="busquedaporFecha" value="">
        <label>fecha inicio</label>    <input type="date" name="rec_init" value="" min="2019-01-01" max="<?php date() ?>">
        <label>fecha fin</label>    <input type="date" name="rec_end" value="" min="2019-01-01" max="<?php date() ?>">
        </label>



    </div>
    <div class="col s4">
      <label>
        Fecha de recolección:<br> <input type="radio" name="busquedaporFecha" value="">
      <label>fecha inicio</label> <input type="date" name="r_init" value="" min="2019-01-01" max="<?php date() ?>">
      <label>fecha fin</label> <input type="date" name="r_end" value="" min="2019-01-01" max="<?php date() ?>">
      </label>
    </div>
  </div>

  <div class="col s12">
    <button class="btn waves-effect waves-light" type="submit" name="action" onclick="prueba()">Consultar
      <i class="material-icons right"></i>
    </button>
  </div>
</div>
      </form>
      <script type="text/javascript">
        $("#toggleFecha").hide();
      $(document).ready(function(){
        $("#indeterminate-checkbox").click(function(){
          $("#toggleFecha").toggle();
        });
      });
      function prueba() {
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        })
      }


      </script>



	</body>


</html>
