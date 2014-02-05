<!DOCTYPE html>
<html>
<head>
	<?php include('header.php'); ?>
	<?php include('version.inc'); ?>
	<title>Legalia WebApp <?php echo $version; ?></title>
</head>
<body>
	<div id="main-container">
		<header>
			<h1>Legalia WebApp</h1>
			<p><?php echo $version; ?></p>
		</header>
		<?php
			include('sect/main-menu.php');
		?>
	</div>
	<?php
		include('sect/footer.php');
	?>
</body>
</html>