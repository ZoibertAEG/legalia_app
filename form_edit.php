<!DOCTYPE html>
<html>
	<head>
		<?php $type = $_GET['type']; ?>
		<title>Introducir nuevo <?php echo $type ?></title>
		<?php include('header.php'); ?>
	</head>
	<body>
		<?php
			include('nav.php');
			include('poblar_edit.php');
			include('sect/footer.php');
		?>
	</body>
</html>