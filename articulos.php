<?php 
$pagetitle = "Artículos";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="Sección de Artículos del website de Hung Gar del sifu Hernán Dell' Oso de la escuela Wu Hsing Chuan Argentina" />
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

		<!-- Inicio de Artículo -->
		<article class="new-article">
			<h2 class="new-article__title">Viaje a China 2012</h2>
			<h4 class="new-article__date">29 de Marzo de 2015</h4>
			<div class="new-article__description">
				<p>Artículo completo escrito por Hernán Dell' Oso explicando todo lo realizado en el viaje a Hong Kong y Fatsan en el año 2012 organizado por la escuela de artes marciales tradicionales chinas Wu Hsing Chuan. Toda la información sobre el Bai Shi que el sifu Wong Hon Keung (discipulo directo del Grán Maestro Lam Cho) realizó con Hernán Dell' Oso para convertirlo en su discipulo directo.</p>
				<div role="button" class="button">
					<a href="articulo/viaje-a-china-2012">Leer Artículo</a>
				</div>
				<br>
			</div>
			<img class="new-article__img" src="img/article/benny-wong-hernan-dell-oso-2.jpg" alt="Benny Wong - Hernán Dell' Oso"  oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
			<br>
		</article>
	   <!-- Final de Artículo -->
	   
	</section>
</main>
	<!-- Content Finish Here -->
	<?php include "templates/footer.html"; ?>
	<!-- Javascript Libraries -->
	<script src="libs/jquery-1.11.2.min.js"></script>
	<script src="libs/prefixfree.js"></script>
	<script src="js/template.js"></script>
</body>
</html>