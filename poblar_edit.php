<?php
	$type = $_GET['type'];
	$dni = $_GET['dni'];
	mysql_connect('localhost', 'root', '04101991');
	mysql_select_db('legalia_test2');
	if ($type == "abogado") {
		$query = 'SELECT * FROM abogados WHERE dni_ab ="' . $dni . '";';
		$dni_type = 'dni_ab';
	} elseif ($type == "cliente") {
		$query = 'SELECT * FROM clientes WHERE dni_c ="' . $dni . '";';
		$dni_type = 'dni_c';
	} elseif ($type == "secretario") {
		$query = 'SELECT * FROM secretarios WHERE dni_s ="' . $dni . '";';
		$dni_type = 'dni_s';
	}
	$result = mysql_query($query);
	while ($row = mysql_fetch_array($result)) {

	echo '
		<div class="contenedor">
			<h2>Editar ' .  $type . '</h2>
			<section>
				<form action="editar.php?type=' . $type . '&dni=' . $row[$dni_type] . '" method="post">

					<fieldset>
						<legend>Datos Personales</legend>

						<label for="dni">DNI: </label>
						<input type="text" name="dni" id="dni" size="20" maxlength="9" value="' . $row[$dni_type] . '"><br>

						<label for="nombre">Nombre: </label>
						<input type="text" name="nombre" id="nombre" size="20" maxlength="20" value="' . $row['nombre'] . '"><br>

						<label for="apellidos">Apellidos: </label>
						<input type="text" name="apellidos" id="apellidos" size="30" maxlength="30" value="' . $row['apellidos'] . '"><br> 

						<label for="fecha_nacimiento">Fecha de nacimiento: </label>
						<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" size="8" value="' . $row['fecha_nacimiento'] . '">
					</fieldset>

					<fieldset>
						<legend>Contacto</legend>

						<label for="direccion">Dirección: </label>
						<input type="text" name="direccion" id="direccion" size="50" maxlength="50" value="' . $row['direccion'] . '"><br>

						<label for="cp">Código Postal: </label>
						<input type="text" name="cp" id="cp" size="20" maxlength="5" value="' . $row['cp'] . '"><br>

						<label for="ciudad">Ciudad: </label>
						<input type="text" name="ciudad" id="ciudad" size="20" maxlength="20" value="' . $row['ciudad'] . '"><br>

						<label for="provincia">Provincia: </label>
						<input type="text" name="provincia" id="provincia" size="20" maxlength="20" value="' . $row['provincia'] . '"><br>

						<label for="pais">País: </label>
						<input type="text" name="pais" id="pais" size="20" maxlength="20" value="' . $row['pais'] . '"><br>

						<label for="tlf">Teléfono: </label>
						<input type="text" name="tlf" id="tlf" size="20" maxlength="9" value="' . $row['tlf'] . '">
					</fieldset>';
	if ($type == 'abogado') {
		echo '
					<fieldset>
						<legend>Datos adicionales</legend>

						<label for="fecha_licencia">Fecha Licencia: </label>
						<input type="date" name="fecha_licencia" id="fecha_licencia" size="8" value="' . $row['fecha_licencia'] . '"><br>

						<label for="facultad">Facultad: </label>
						<input type="text" name="facultad" id="facultad" size="20" maxlength="20" value="' . $row['facultad'] . '"><br>

						<label for="tarifa">Tarifa: </label>
						<input type="text" name="tarifa" id="tarifa" size="10" value="' . $row['tarifa'] . '">
					</fieldset>';
	} elseif ($type == 'secretario') {
		$selected = $row['dni_ab'];
		echo '
			<fieldset>
				<legend>Abogado</legend>';
	    $query = "SELECT dni_ab FROM abogados";
	    $result = mysql_query($query);
	    echo '            
	    		<label for="dni_ab">DNI Abogado: </label>
				<select name="dni_ab" id="dni_ab">';
	    while ($row = mysql_fetch_array($result)) {
			echo $row['dni_ab'];
			echo $result;
			echo "<option ";
			if ($row['dni_ab'] == $selected) {
				echo "selected='selected' ";
			}
			echo "value='" . $row['dni_ab'] . "'>" . $row['dni_ab'] . "</option>";
	    }
	    echo "</select>";
	    mysql_close();
		echo'</fieldset>';
	}
	echo '
					<input type="submit" name="submit" id="submit" value="Actualizar BD">
				</form>
			</section>
		</div>';
	};
?>