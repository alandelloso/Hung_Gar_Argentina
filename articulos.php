<?php 
$pagetitle = "Artículos";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="Sección de Artículos del website de Hung Gar del Sifu Hernán Dell' Oso de la escuela Wu Hsing Chuan Argentina" />
	<!-- Meta Viewport -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- Title -->
	<title>Artículos - Hung Gar Argentina</title>
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
		<![endif]-->
		<!-- CSS Links -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/template.css">
		<link rel="stylesheet" href="css/articulos.css">
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="img/favicon.ico">
	</head>
	<body>
		<?php include "templates/header.html"; ?>
		<?php include "templates/navigation.html"; ?>
		<!-- Content Starts Here -->
		<main class="centerme">
			<section class="centralcontainer">
				<h1>Artículos</h1>
				<article class="flex-box">

					<!-- Inicio de Artículo -->
					<article class="new-article">
						<img src="img/article/entrega-certificado-benny-wong.jpg" alt="Maestros en Bahía de Hong Kong">
						<div class="interaction-container">
							<h2 class="interaction-container__title">Nota en Revista "MiráBA"</h2>
							<h3 class="interaction-container__subtitle">Enlace</h3>
							<button class="interaction-container__action-button"><a href="http://issuu.com/aqui_la_plata/docs/mir__ba_75/52?e=0" target="_blank">VISITAR ENLACE</a></button>
						</div>
					</article>
					<!-- Final de Artículo -->

					<!-- Inicio de Artículo -->
					<article class="new-article">
						<img src="img/article/maestros-bahia-hong-kong.jpg" alt="Maestros en Bahía de Hong Kong">
						<div class="interaction-container">
							<h2 class="interaction-container__title">Nota en Diario "El Día"</h2>
							<h3 class="interaction-container__subtitle">Enlace</h3>
							<button class="interaction-container__action-button"><a href="http://pasado.eldia.com/edis/20130205/Platenses-China-para-importar-mejores-lecciones-Kung-Fu-informaciongeneral1.htm" target="_blank">VISITAR ENLACE</a></button>
						</div>
					</article>
					<!-- Final de Artículo -->

					<!-- Inicio de Artículo -->
					<article class="new-article">
						<img src="img/article/benny-wong-hernan-dell-oso.jpg" alt="Benny Wong y Hernán Dell'Oso">
						<div class="interaction-container">
							<h2 class="interaction-container__title">Viaje a China 2012</h2>
							<h3 class="interaction-container__subtitle">Artículo</h3>
							<button class="interaction-container__action-button"><a href="articulo/viaje-a-china-2012">LEER ARTÍCULO</a></button>
						</div>
					</article>
					<!-- Final de Artículo -->
				</article>
			</section>
		</main>
		<!-- Content Finish Here -->
		<?php include "templates/footer.html"; ?>
		<!-- Javascript Libraries -->
		<script src="libs/jquery-1.11.2.min.js"></script>
		<script src="libs/animatescroll.min.js"></script>
		<script src="libs/prefixfree.js"></script>
		<script src="js/template.js"></script>
	</body>
	</html>