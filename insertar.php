<?php
	$dni = $_POST['dni'];
	$type = $_GET['type'];
	$sql_connection = mysql_connect("localhost","root","04101991");
	mysql_select_db("legalia_test2", $sql_connection);

	if ($type == "abogado") {
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$tlf = $_POST['tlf'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$fecha_licencia = $_POST['fecha_licencia'];
		$facultad = $_POST['facultad'];
		$tarifa = $_POST['tarifa'];
		$direccion = $_POST['direccion'];
		$cp = $_POST['cp'];
		$ciudad = $_POST['ciudad'];
		$provincia = $_POST['provincia'];
		$pais = $_POST['pais'];


		// Inserta los datos del ABOGADO obtenidos
		// en el POST en la base de datos.
		$sql = "INSERT INTO abogados(
					dni_ab,
					nombre,
					apellidos,
					tlf,
					fecha_nacimiento,
					fecha_licencia,
					facultad,
					tarifa,
					direccion,
					cp,
					ciudad,
					provincia,
					pais
				) VALUES(
					'$dni',
					'$nombre',
					'$apellidos',
					'$tlf',
					'$fecha_nacimiento',
					'$fecha_licencia',
					'$facultad',
					'$tarifa',
					'$direccion',
					'$cp',
					'$ciudad',
					'$provincia',
					'$pais'
				);";
		include('header.php');
		echo "
			<div class='contenedor'>
				<br><h3>INSERTADO</h3> <br>
				<ul>
					<li>DNI: $dni</li>
					<li>Nombre: $nombre</li>
					<li>Apellidos: $apellidos</li>
					<li>Fecha de Nacimiento: $fecha_nacimiento</li>
					<li>Telefono: $tlf</li>
					<li>Direccion: $direccion</li>
					<li>Codigo Postal: $cp</li>
					<li>Ciudad: $ciudad</li>
				</ul><br>
			</div>";
	} elseif ($type == "cliente") {
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$tlf = $_POST['tlf'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$direccion = $_POST['direccion'];
		$cp = $_POST['cp'];
		$ciudad = $_POST['ciudad'];
		$provincia = $_POST['provincia'];
		$pais = $_POST['pais'];


		// Inserta los datos del CLIENTE obtenidos
		// en el POST en la base de datos.
		$sql = "INSERT INTO clientes(
					dni_c,
					nombre,
					apellidos,
					tlf,
					fecha_nacimiento,
					direccion,
					cp,
					ciudad,
					provincia,
					pais
				) VALUES(
					'$dni',
					'$nombre',
					'$apellidos',
					'$tlf',
					'$fecha_nacimiento',
					'$direccion',
					'$cp',
					'$ciudad',
					'$provincia',
					'$pais'
				);";
		include('header.php');
		echo "
			<div class='contenedor'>
				<br><h3>INSERTADO</h3> <br>
				<ul>
					<li>DNI: $dni</li>
					<li>Nombre: $nombre</li>
					<li>Apellidos: $apellidos</li>
					<li>Fecha de Nacimiento: $fecha_nacimiento</li>
					<li>Telefono: $tlf</li>
					<li>Direccion: $direccion</li>
					<li>Codigo Postal: $cp</li>
					<li>Ciudad: $ciudad</li>
				</ul><br>
			</div>";
	} elseif ($type == "secretario") {
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$tlf = $_POST['tlf'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$direccion = $_POST['direccion'];
		$cp = $_POST['cp'];
		$ciudad = $_POST['ciudad'];
		$provincia = $_POST['provincia'];
		$pais = $_POST['pais'];
		$dni_ab = $_POST['dni_ab'];


		// Inserta los datos del SECRETARIO obtenidos
		// en el POST en la base de datos.
		$sql = "INSERT INTO secretarios(
					dni_s,
					nombre,
					apellidos,
					tlf,
					fecha_nacimiento,
					direccion,
					cp,
					ciudad,
					provincia,
					pais,
					dni_ab
				) VALUES(
					'$dni',
					'$nombre',
					'$apellidos',
					'$tlf',
					'$fecha_nacimiento',
					'$direccion',
					'$cp',
					'$ciudad',
					'$provincia',
					'$pais',
					'$dni_ab'
				);";
		include('header.php');
		echo "
			<div class='contenedor'>
				<br><h3>INSERTADO</h3> <br>
				<ul>
					<li>DNI: $dni</li>
					<li>Nombre: $nombre</li>
					<li>Apellidos: $apellidos</li>
					<li>Fecha de Nacimiento: $fecha_nacimiento</li>
					<li>Telefono: $tlf</li>
					<li>Direccion: $direccion</li>
					<li>Codigo Postal: $cp</li>
					<li>Ciudad: $ciudad</li>
				</ul><br>
			</div>";
	};
	
	mysql_query($sql, $sql_connection);
	mysql_close($sql_connection);
	echo '<a href="tabla.php?type=' . $type . '">< Volver atras</a><br>';
	echo '<a href="index.php"><< Volver al menu</a>';
?>