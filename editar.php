<?php
	$dni = $_GET['dni'];
	$type = $_GET['type'];
	$sql_connection = mysql_connect("localhost","root","04101991");
	mysql_select_db("legalia_test2", $sql_connection);

	if ($type == "abogado") {
		$dni_new = $_POST['dni'];
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
		$sql = "UPDATE abogados SET
					dni_ab = '" . $dni_new . "', 
					nombre = '" . $nombre . "',
					apellidos = '" . $apellidos . "',
					tlf = '" . $tlf . "',
					fecha_nacimiento = '" . $fecha_nacimiento . "',
					fecha_licencia = '" . $fecha_licencia . "',
					facultad = '" . $facultad . "',
					tarifa = '" . $tarifa . "',
					direccion = '" . $direccion . "',
					cp = '" . $cp . "',
					ciudad = '" . $ciudad . "',
					provincia = '" . $provincia . "',
					pais = '" . $pais . "'
				WHERE dni_ab = '" . $dni . "';";
		echo "
			<br><h3>INSERTADO</h3> <br>
			<ul>
				<li>DNI: $dni_new</li>
				<li>Nombre: $nombre</li>
				<li>Apellidos: $apellidos</li>
				<li>Fecha de Nacimiento: $fecha_nacimiento</li>
				<li>Telefono: $tlf</li>
				<li>Direccion: $direccion</li>
				<li>Codigo Postal: $cp</li>
				<li>Ciudad: $ciudad</li>
			</ul><br>";
	} elseif ($type == "cliente") {
		$dni_new = $_POST['dni'];
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
		$sql = "UPDATE clientes SET
					dni_c = '$dni_new', 
					nombre = '$nombre',
					apellidos = '$apellidos',
					tlf = '$tlf',
					fecha_nacimiento = '$fecha_nacimiento',
					direccion = '$direccion',
					cp = '$cp',
					ciudad = '$ciudad',
					provincia = '$provincia',
					pais = '$pais'
				WHERE dni_c = '$dni';";
		echo "
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
			</ul><br>";
	} elseif ($type == "secretario") {
		$dni_new = $_POST['dni'];
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


		// Inserta los datos del CLIENTE obtenidos
		// en el POST en la base de datos.
		$sql = "UPDATE secretarios SET
					dni_s = '$dni_new', 
					nombre = '$nombre',
					apellidos = '$apellidos',
					tlf = '$tlf',
					fecha_nacimiento = '$fecha_nacimiento',
					direccion = '$direccion',
					cp = '$cp',
					ciudad = '$ciudad',
					provincia = '$provincia',
					pais = '$pais',
					dni_ab = '$dni_ab'
				WHERE dni_s = '$dni';";
		echo "
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
			</ul><br>";
	}
	
	mysql_query($sql, $sql_connection);
	mysql_close($sql_connection);
	echo '<a href="tabla.php?type=' . $type . '">< Volver atras</a><br>';
	echo '<a href="index.php"><< Volver al menu</a>';
?>