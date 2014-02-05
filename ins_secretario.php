<div class="contenedor">
	<h2>Formulario Secretario</h2>
	<section>
		<form action="insertar.php?type=<?php echo $type ?>" method="post">

			<fieldset>
				<legend>Datos Personales</legend>

				<label for="dni">DNI: </label>
				<input type="text" name="dni" id="dni" size="20" maxlength="9"><br>

				<label for="nombre">Nombre: </label>
				<input type="text" name="nombre" id="nombre" size="20" maxlength="20"><br>

				<label for="apellidos">Apellidos: </label>
				<input type="text" name="apellidos" id="apellidos" size="30" maxlength="30"><br> 

				<label for="fecha_nacimiento">Fecha de nacimiento: </label>
				<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" size="8">
			</fieldset>

			<fieldset>
				<legend>Contacto</legend>

				<label for="direccion">Dirección: </label>
				<input type="text" name="direccion" id="direccion" size="50" maxlength="50"><br>

				<label for="cp">Código Postal: </label>
				<input type="text" name="cp" id="cp" size="20" maxlength="5"><br>

				<label for="ciudad">Ciudad: </label>
				<input type="text" name="ciudad" id="ciudad" size="20" maxlength="20"><br>

				<label for="provincia">Provincia: </label>
				<input type="text" name="provincia" id="provincia" size="20" maxlength="20"><br>

				<label for="pais">País: </label>
				<input type="text" name="pais" id="pais" size="20" maxlength="20"><br>

				<label for="tlf">Teléfono: </label>
				<input type="text" name="tlf" id="tlf" size="20" maxlength="9">
			</fieldset>

			<fieldset>
				<legend>Abogado</legend>
                    <?php
	                    mysql_connect('localhost', 'root', '04101991');
	                    mysql_select_db('legalia_test2');

	                    $query = "SELECT dni_ab FROM abogados";
	                    $result = mysql_query($query);
	                ?>
	                <label for="dni_ab">DNI Abogado: </label>
	                <?php
	                    echo "<select name='dni_ab' id='dni_ab'>";
	                    while ($row = mysql_fetch_array($result)) {
	                        echo $row['dni_ab'];
	                        echo $result;
	                        echo "<option value='" . $row['dni_ab'] . "'>" . $row['dni_ab'] . "</option>";
	                    }
	                    echo "</select>";
	                    mysql_close();
                    ?>
			</fieldset>
			<input type="submit" name="submit" id="submit" value="Insertar en BD">
		</form>
	</section>
</div>