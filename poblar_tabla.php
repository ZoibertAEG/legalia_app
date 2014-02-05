<?php
	mysql_connect('localhost', 'root', '04101991');
	mysql_select_db('legalia_test2');

	// Rellena la tabla dependiendo del tipo de dato.
	if ($type == "abogado") {
		echo '
			<div class="contenedor">';

		// Si es una busqueda, NO imprime la barra de operaciones.
		if (null == isset($_POST['submit']))
		{
			include('sect/barra_operaciones.php');
		};
		echo '
			<table class="pop_bd">
				<tr class="header">
					<td>Operaciones</td>
					<td>DNI</td>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td>Telefono</td>
					<td>Fecha de Nacimiento</td>
					<td>Fecha de Licencia</td>
					<td>Facultad</td>
					<td>Tarifa</td>
					<td>Direccion</td>
					<td>CP</td>
					<td>Ciudad</td>
					<td>Provincia</td>
					<td>Pais</td>
				</tr>
			';

		// Si es una busqueda, filtra los datos para adecuarse a la misma.
		// Si no lo es, imprime TODA la tabla.
		if (null == isset($_POST['submit']))
		{
			// Envia consulta SQL para obtener toda la tabla ABOGADOS.
			$query = "SELECT * FROM abogados";
		} else{
			if ($tipo_dato == 'dni') {
				// Envia consulta SQL para obtener los abogados con el DNI introducido.
				$query = "SELECT * FROM abogados WHERE dni_ab = '$dato'";
			} elseif ($tipo_dato == 'nombre') {
				// Envia consulta SQL para obtener los abogados con el NOMBRE introducido.
				$query = "SELECT * FROM abogados WHERE nombre = '$dato'";
			};
		};

		// Obtiene el resultado de la sentencia SQL enviada.
		$result = mysql_query($query);

		// Procesa la tabla resultado fila por fila e imprime la tabla en HTML.
		while ($row = mysql_fetch_array($result)) {
			echo '
				<tr>
					<td>
						<form action="borrar.php?type=' . $type . '&dni=' . $row['dni_ab'] . '" method="post">
							<input type="hidden" name="dni" id="dni" value="' . $row['dni_ab'] . '">
							<input type="image" title="Borrar" name="submit" id="submit" src="img/delete.gif" width="16" heigth="16" alt="Borrar">
						</form>
						<form action="form_edit.php?type=' . $type . '&dni=' . $row['dni_ab'] . '" method="post">
							<input type="hidden" name="dni" id="dni" value="' . $row['dni_ab'] . '">
							<input type="image" title="Editar" name="submit" id="submit" src="img/edit.png" width="16" heigth="16" alt="Editar">
						</form>
					</td>
					<td>
						<p><strong>' . $row['dni_ab'] . '</strong></p>
					</td>
					<td>
						<p>' . $row['nombre'] . '</p>
					</td>
					<td>
						<p>' . $row['apellidos'] . '</p>
					</td>
					<td>
						<p>' . $row['tlf'] . '</p>
					</td>
					<td>
						<p>' . $row['fecha_nacimiento'] . '</p>
					</td>
					<td>
						<p>' . $row['fecha_licencia'] . '</p>
					</td>
					<td>
						<p>' . $row['facultad'] . '</p>
					</td>
					<td>
						<p>' . $row['tarifa'] . '€</p>
					</td>
					<td>
						<p>' . $row['direccion'] . '</p>
					</td>
					<td>
						<p>' . $row['cp'] . '</p>
					</td>
					<td>
						<p>' . $row['ciudad'] . '</p>
					</td>
					<td>
						<p>' . $row['provincia'] . '</p>
					</td>
					<td>
						<p>' . $row['pais'] . '</p>
					</td>
				</tr>
			';
		};
	} elseif ($type == "cliente") {
        echo '
                  <div class="contenedor">';
		// Si es una busqueda, NO imprime la barra de operaciones.
		if (null == isset($_POST['submit']))
		{
			include('sect/barra_operaciones.php');
		};
        echo '
                  <table class="pop_bd">
                        <tr class="header">
                              <td>Operaciones</td>
                              <td>DNI</td>
                              <td>Nombre</td>
                              <td>Apellidos</td>
                              <td>Telefono</td>
                              <td>Fecha de Nacimiento</td>
                              <td>Direccion</td>
                              <td>CP</td>
                              <td>Ciudad</td>
                              <td>Provincia</td>
                              <td>Pais</td>
                        </tr>';
        if (null == isset($_POST['submit']))
		{
			// Envia consulta SQL para obtener toda la tabla ABOGADOS.
			$query = "SELECT * FROM clientes";
		} else{
			if ($tipo_dato == 'dni') {
				// Envia consulta SQL para obtener los clientes con el DNI introducido.
				$query = "SELECT * FROM clientes WHERE dni_c = '$dato'";
			} elseif ($tipo_dato == 'nombre') {
				// Envia consulta SQL para obtener los clientes con el NOMBRE introducido.
				$query = "SELECT * FROM clientes WHERE nombre = '$dato'";
			};
		};
        $result = mysql_query($query);

        while ($row = mysql_fetch_array($result)) {
            echo '
                        <tr>
                              <td>
                                    <form action="borrar.php?type=' . $type . '&dni=' . $row['dni_c'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['dni_c'] . '">
                                          <input type="image" title="Borrar" name="submit" id="submit" src="img/delete.gif" width="16" heigth="16" alt="Borrar">
                                    </form>
                                    <form action="form_edit.php?type=' . $type . '&dni=' . $row['dni_c'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['dni_c'] . '">
                                          <input type="image" title="Editar" name="submit" id="submit" src="img/edit.png" width="16" heigth="16" alt="Editar">
                                    </form>
                              </td>
                              <td>
                                    <p><strong>' . $row['dni_c'] . '</strong></p>
                              </td>
                              <td>
                                    <p>' . $row['nombre'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['apellidos'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['tlf'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['fecha_nacimiento'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['direccion'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['cp'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['ciudad'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['provincia'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['pais'] . '</p>
                              </td>
                        </tr>';
        };
    } elseif ($type == "secretario") {
            echo '
                  <div class="contenedor">';
		if (null == isset($_POST['submit']))
		{
			include('sect/barra_operaciones.php');
		};
            echo '
                  <table class="pop_bd">
                        <tr class="header">
                              <td>Operaciones</td>
                              <td>DNI</td>
                              <td>Nombre</td>
                              <td>Apellidos</td>
                              <td>Telefono</td>
                              <td>Fecha de Nacimiento</td>
                              <td>Direccion</td>
                              <td>CP</td>
                              <td>Ciudad</td>
                              <td>Provincia</td>
                              <td>Pais</td>
                              <td>Abogado</td>
                        </tr>';
            if (null == isset($_POST['submit']))
			{
				$query = "SELECT * FROM secretarios";
			} else{
				if ($tipo_dato == 'dni') {
					$query = "SELECT * FROM secretarios WHERE dni_s = '$dato'";
				} elseif ($tipo_dato == 'nombre') {
					$query = "SELECT * FROM secretarios WHERE nombre = '$dato'";
				};
			};
            $result = mysql_query($query);

            while ($row = mysql_fetch_array($result)) {
                  echo '
                        <tr>
                              <td>
                                    <form action="borrar.php?type=' . $type . '&dni=' . $row['dni_s'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['dni_s'] . '">
                                          <input type="image" title="Borrar" name="submit" id="submit" src="img/delete.gif" width="16" heigth="16" alt="Borrar">
                                    </form>
                                    <form action="form_edit.php?type=' . $type . '&dni=' . $row['dni_s'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['dni_s'] . '">
                                          <input type="image" title="Editar" name="submit" id="submit" src="img/edit.png" width="16" heigth="16" alt="Editar">
                                    </form>
                              </td>
                              <td>
                                    <p><strong>' . $row['dni_s'] . '</strong></p>
                              </td>
                              <td>
                                    <p>' . $row['nombre'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['apellidos'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['tlf'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['fecha_nacimiento'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['direccion'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['cp'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['ciudad'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['provincia'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['pais'] . '</p>
                              </td>
                              <td>
                                    <form action="buscar.php?type=abogado&busqueda=dni" method="post">
                                    	<input type="hidden" name="dni" id="dni" value="' . $row['dni_ab'] . '">
                                    	<input type="submit" name="submit" id="submit" value="' . $row['dni_ab'] . '">
                                    </form>
                              </td>
                        </tr>';
           };
    } elseif ($type == "auxiliar") {
            echo '
                  <div class="contenedor">';
		if (null == isset($_POST['submit']))
		{
			include('sect/barra_operaciones.php');
		};
            echo '
                  <table class="pop_bd">
                        <tr class="header">
                              <td>Operaciones</td>
                              <td>DNI</td>
                              <td>Nombre</td>
                              <td>Apellidos</td>
                              <td>Telefono</td>
                              <td>Fecha de Nacimiento</td>
                              <td>Direccion</td>
                              <td>CP</td>
                              <td>Ciudad</td>
                              <td>Provincia</td>
                              <td>Pais</td>
                        </tr>';
            if (null == isset($_POST['submit']))
			{
				$query = "SELECT * FROM auxiliares";
			} else{
				if ($tipo_dato == 'dni') {
					$query = "SELECT * FROM auxiliares WHERE dni_aux = '$dato'";
				} elseif ($tipo_dato == 'nombre') {
					$query = "SELECT * FROM auxiliares WHERE nombre = '$dato'";
				};
			};
            $result = mysql_query($query);

            while ($row = mysql_fetch_array($result)) {
                  echo '
                        <tr>
                              <td>
                                    <form action="borrar.php?type=' . $type . '&dni=' . $row['dni_aux'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['dni_aux'] . '">
                                          <input type="image" title="Borrar" name="submit" id="submit" src="img/delete.gif" width="16" heigth="16" alt="Borrar">
                                    </form>
                                    <form action="form_edit.php?type=' . $type . '&dni=' . $row['dni_aux'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['dni_aux'] . '">
                                          <input type="image" title="Editar" name="submit" id="submit" src="img/edit.png" width="16" heigth="16" alt="Editar">
                                    </form>
                              </td>
                              <td>
                                    <p><strong>' . $row['dni_aux'] . '</strong></p>
                              </td>
                              <td>
                                    <p>' . $row['nombre'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['apellidos'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['tlf'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['fecha_nacimiento'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['direccion'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['cp'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['ciudad'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['provincia'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['pais'] . '</p>
                              </td>
                        </tr>';
           };
    } elseif ($type == "caso") {
            echo '
                  <div class="contenedor">';
		if (null == isset($_POST['submit']))
		{
			include('sect/barra_operaciones.php');
		};
            echo '
                  <table class="pop_bd">
                        <tr class="header">
                              <td>Operaciones</td>
                              <td>ID Expediente</td>
                              <td>Enemigo</td>
                              <td>Descripcion</td>
                              <td>Fecha Apertura</td>
                              <td>Fecha Cierre</td>
                        </tr>';
            if (null == isset($_POST['submit']))
			{
				$query = "SELECT * FROM casos";
			} else{
				if ($tipo_dato == 'dni') {
					$query = "SELECT * FROM casos WHERE id_expediente = '$dato'";
				} elseif ($tipo_dato == 'nombre') {
					$query = "SELECT * FROM casos WHERE nombre = '$dato'";
				};
			};
            $result = mysql_query($query);

            while ($row = mysql_fetch_array($result)) {
                  echo '
                        <tr>
                              <td>
                                    <form action="borrar.php?type=' . $type . '&dni=' . $row['id_expediente'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['id_expediente'] . '">
                                          <input type="image" title="Borrar" name="submit" id="submit" src="img/delete.gif" width="16" heigth="16" alt="Borrar">
                                    </form>
                                    <form action="form_edit.php?type=' . $type . '&dni=' . $row['id_expediente'] . '" method="post">
                                          <input type="hidden" name="dni" id="dni" value="' . $row['id_expediente'] . '">
                                          <input type="image" title="Editar" name="submit" id="submit" src="img/edit.png" width="16" heigth="16" alt="Editar">
                                    </form>
                              </td>
                              <td>
                                    <p><strong>' . $row['id_expediente'] . '</strong></p>
                              </td>
                              <td>
                                    <p>' . $row['enemigo'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['descripcion'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['fecha_apertura'] . '</p>
                              </td>
                              <td>
                                    <p>' . $row['fecha_cierre'] . '</p>
                              </td>
                        </tr>';
           };
    };
	echo '
			</table>
		</div>';
?>