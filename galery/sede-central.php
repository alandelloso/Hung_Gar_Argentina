<?php 
$pagetitle = "Galería";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="Galería del viaje a china realizado en el año 2011" />
	<!-- Meta Viewport -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- Title -->
	<title>Viaje a China 2011 - Galería</title>
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
	<![endif]-->
	<!-- CSS Links -->
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/template.css">
	<link rel="stylesheet" href="../css/galeria.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../img/favicon.ico">
</head>
<body>
	<?php include "../templates/header_2.html"; ?>
	<?php include "../templates/navigation_2.html"; ?>
	<!-- Content Starts Here -->
<main class="centerme">
	<section class="centralcontainer">
		<div class="screen--black"></div>
		<h1>Viaje a China 2011</h1>

		<section class="galery">

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="../img/galery/sede-central/entrenando-con-sifu-luis-villano.jpg" alt="Entrenando con Sifu Luis Villano" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Entrenando con Sifu Luis Villano
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="../img/galery/sede-central/entrenando-tid-sin-kuen.jpg" alt="Entrenando Tid Sin Kuen" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Entrenando Tid Sin Kuen
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="../img/galery/sede-central/entrenando-wu-dip-dao.jpg" alt="Entrenando Wu Dip Dao" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Entrenando Wu Dip Dao
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="../img/galery/sede-central/grupo-de-profesores.jpg" alt="Grupo de Profesores" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Grupo de Profesores
				</figcaption>
			</figure>
			<!-- Galery Element End-->

		</section>
	</section>
</main>
	<!-- Content Finish Here -->
	<?php include "../templates/footer_2.html"; ?>
	<!-- Javascript Libraries -->
	<script src="../libs/jquery-1.11.2.min.js"></script>
	<script src="../libs/prefixfree.js"></script>
	<script src="../js/template.js"></script>
	<script src="../js/galeria.js"></script>
</body>
</html>