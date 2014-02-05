<!DOCTYPE html>
<html>
	<head>
		<?php $type = $_GET['type']; ?>
		<?php include('header.php'); ?>
		<title>Introducir nuevo <?php echo $type ?></title>
	</head>
	<body>
		<?php
			include('nav.php');
			if($type == "abogado"){
				// Si es un abogado, imprime el formulario de abogado.
				include('ins_abogado.php');
			} elseif ($type == "cliente") {
				include('ins_cliente.php');
			} elseif ($type == "secretario") {
				include('ins_secretario.php');
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