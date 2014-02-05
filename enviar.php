<?php
if ($_GET['action'] == "do")
{
	$sql = $_POST['sql'];
	$result = mysql_query($sql);
	echo $sql;
	echo $result;
	$sql_connection = mysql_connect("localhost","root","04101991");
	mysql_select_db("legalia_test2", $sql_connection);
	mysql_query($sql, $sql_connection);
	mysql_close($sql_connection);
} else {
	echo '
		<form action="enviar.php?action=do" method="post">
			<textarea name="sql" id="sql"></textarea><br>
			<input type="submit" value="Enviar">
		</form>
	';
};

