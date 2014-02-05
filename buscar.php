<?php
	$type = $_GET['type'];

	function busqueda($type, $tipo_dato, $dato)
	{
		$sql_connection = mysql_connect("localhost","root","04101991");
		mysql_select_db("legalia_test2", $sql_connection);

		include('poblar_tabla.php'); // Tabla de datos.
	};
		echo '
<!DOCTYPE html>
<html>
	<head>';
		include('header.php');
		echo '
		<title>Buscar ' . $type . '</title>
	</head>
	<body>';
		include('nav.php'); // Barra de navegacion.
		echo '
		<div class="contenedor">';

	if(isset($_POST['submit']))
	{
		$busqueda = $_GET['busqueda'];
		if ($busqueda == "dni") {
			$dato = $_POST['dni'];
		} elseif ($busqueda == "nombre") {
			$dato = $_POST['nombre'];
		}
		busqueda($type, $busqueda, $dato);
	} else {
		echo '
			<form action="buscar.php?type=' . $type . '&busqueda=dni" method="post">
				<fieldset>
					<legend>Busqueda por DNI</legend>

					<label for="dni">DNI:</label>
					<input type="text" name="dni" id="dni" size="20" maxlength="9">

					<input type="submit" name="submit" id="submit" value="Buscar">
				</fieldset>
			</form>
			<form action="buscar.php?type=' . $type . '&busqueda=nombre" method="post">
				<fieldset>
					<legend>Busqueda por Nombre</legend>

					<label for="nombre">Nombre:</label>
					<input type="text" name="nombre" id="nombre" size="20" maxlength="9">

					<input type="submit" name="submit" id="submit" value="Buscar">
				</fieldset>
			</form>
		</div>';
		include('sect/footer.php'); // Pie de pagina.
		echo '
	</body>
</html>';
	};
?>