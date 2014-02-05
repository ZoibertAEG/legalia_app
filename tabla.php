<!DOCTYPE html>
<html>
	<head>
		<!-- Obtiene la variable $type que se le pasa en la URL utilizando
			 un GET y lo asigna a la variable $type para su uso. -->
		<?php $type = $_GET['type'] ?>

		<?php include('header.php'); ?>

		<!-- Imprime un titulo acorde al tipo de datos con los que se
			 esta trabajando gracias a la variable $type.
			 El condicional IF es por correcion semantica. -->
		<title>Tabla
			<?php 
				if($type == "auxiliar"){
					echo $type;
					echo "es";
				} else {
					echo $type;
					echo "s";
				};
			?>
		</title>
	</head>
	<body>
		<!-- Imprime cabecera, pie de pagina e imprime la tabla del tipo
			 de datos con el que se esta trabajando. -->
		<?php
			include('nav.php'); // Barra de navegacion.
			include('poblar_tabla.php'); // Tabla de datos.
			include('sect/footer.php'); // Pie de pagina.
		?>
	</body>
</html>