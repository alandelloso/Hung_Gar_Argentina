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
				<h1>Galería</h1>

				<article class="flex-box">
					
					<article class="galery__item" id="seminario-uruguay">
						<div class="darker"></div>
						<img src="img/galery/seminario-interdisciplinario-uruguay/foto-grupal.jpg" alt="Seminario Uruguay">
						<p class="galery__item__description">Seminario Uruguay</p>
						<p class="galery__item__ver">Ver Galería</p>
					</article>

					<article class="galery__item" id="china-2012">
						<div class="darker"></div>
						<img src="img/galery/china-2012/entrenando-en-el-kowloon-park.jpg" alt="Viaje a China 2012">
						<p class="galery__item__description">Viaje a China 2012</p>
						<p class="galery__item__ver">Ver Galería</p>
					</article>

					<article class="galery__item" id="china-2011">
						<div class="darker"></div>
						<img src="img/galery/china-2011/primera-noche-en-hong-kong.jpg" alt="Viaje a China 2011">
						<p class="galery__item__description">Viaje a China 2011</p>
						<p class="galery__item__ver">Ver Galería</p>
					</article>

					<article class="galery__item" id="sede-central">
						<div class="darker"></div>
						<img src="img/galery/sede-central/entrenando-wu-dip-dao.jpg" alt="Sede Central">
						<p class="galery__item__description">Sede Central</p>
						<p class="galery__item__ver">Ver Galería</p>
					</article>

				</article>

			</section>
		</section>
	</main>
	<!-- Content Finish Here -->
	<?php include "templates/footer.html"; ?>
	<!-- Javascript Libraries -->
	<script src="libs/jquery-1.11.2.min.js"></script>
	<script src="libs/animatescroll.min.js"></script>
	<script src="libs/prefixfree.js"></script>
	<script src="js/template.js"></script>
	<script src="js/galeria.js"></script>
</body>
</html>