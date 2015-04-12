<?php 
$pagetitle = "Galería";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="Galería de imagenes de Hung Gar del Sifu Hernán Dell' Oso del linaje de la Familia Lam" />
	<!-- Meta Viewport -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- Title -->
	<title>Galería - Hung Gar Argentina</title>
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
	<![endif]-->
	<!-- CSS Links -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/galeria.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="img/favicon.ico">
</head>
<body>
	<?php include "templates/header.html"; ?>
	<?php include "templates/navigation.html"; ?>
	<!-- Content Starts Here -->
<main class="centerme">
	<section class="centralcontainer">
		<div class="screen--black"></div>
		<h1>Galería</h1>
		<section class="galery">

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 1
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 2
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 3
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 4
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 4
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 4
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 4
				</figcaption>
			</figure>
			<!-- Galery Element End-->

			<!-- Galery Element Start-->
			<figure class="galery__pic">
				<img src="img/galery/photo1.jpg" alt="Foto 1" class="galery__pic__img" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'> 
				<figcaption class="galery__pic__caption">
					Esta es la foto Nº 4
				</figcaption>
			</figure>
			<!-- Galery Element End-->

		</section>
	</section>
</main>
	<!-- Content Finish Here -->
	<?php include "templates/footer.html"; ?>
	<!-- Javascript Libraries -->
	<script src="libs/jquery-1.11.2.min.js"></script>
	<script src="libs/prefixfree.js"></script>
	<script src="js/template.js"></script>
	<script src="js/galeria.js"></script>
</body>
</html>