<?php
	$type = $_GET['type'];
	$dni = $_GET["dni"];
	$sql_connection = mysql_connect("localhost", "root", "04101991");
	mysql_select_db("legalia_test2", $sql_connection);

	if($type == "abogado"){
		$sql = "DELETE FROM abogados
				WHERE dni_ab = '$dni';";
	} elseif ($type == "cliente") {
		$sql = "DELETE FROM clientes
				WHERE dni_c = '$dni';";
	} elseif ($type == "secretario") {
		$sql = "DELETE FROM secretarios
				WHERE dni_s = '$dni';";
	} elseif ($type == "auxiliar") {
		$sql = "DELETE FROM auxiliares
				WHERE dni_aux = '$dni';";
	}
	mysql_query($sql, $sql_connection);
	mysql_close($sql_connection);
	echo '<a href="tabla.php?type=' . $type . '">< Volver atras</a><br>';
	echo '<a href="index.php"><< Volver al menu</a>';
?>