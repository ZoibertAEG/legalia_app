<!DOCTYPE html>
<html>
	<head>
		<?php $type = $_GET['type'] ?>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Introducir nuevo <?php echo $type ?></title>
	</head>
	<body>
		<?php
			include('nav.php');
			if($type == "abogado"){
				// Si es un abogado, imprime el formulario de abogado.
				include('ins_abogado.php');
			} elseif ($type == "") {
				include('.php');
			} elseif ($type == "") {
				include('.php');
			} elseif ($type == "") {
				include('.php');
			} else {
				// Error, type no es valido.
				include('error_type.php');
			}
			include('sect/footer.php');
		?>
	</body>
</html>