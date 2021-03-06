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

					<article class="galery__item" id="seminario-de-sable-2015">
						<div class="darker"></div>
						<img src="img/galery/seminario-de-sable-2015/1-sables-listos-para-el-seminario.jpg" alt="Seminario de Sable 2015">
						<p class="galery__item__description">Seminario de Sable 2015</p>
					</article>

					<article class="galery__item" id="seminario-gung-gee-fook-fu-kuen-2015">
						<div class="darker"></div>
						<img src="img/galery/seminario-gunge-gee-fook-fu-kuen/portada.jpg" alt="Seminario Gung Gee Fook Fu Kuen">
						<p class="galery__item__description">Seminario Gung Gee Fook Fu Kuen</p>
					</article>

					<article class="galery__item" id="seminario-hang-che-pang-2014">
						<div class="darker"></div>
						<img src="img/galery/seminario-hang-che-pang-2014/algunos-movimientos-de-la-forma.jpg" alt="Seminario Hang Che Pang 2014">
						<p class="galery__item__description">Seminario Hang Che Pang</p>
					</article>

					<article class="galery__item" id="seminario-interdisciplinario-uruguay">
						<div class="darker"></div>
						<img src="img/galery/seminario-interdisciplinario-uruguay/foto-grupal.jpg" alt="Seminario Uruguay">
						<p class="galery__item__description">Seminario Uruguay</p>
					</article>

					<article class="galery__item" id="china-2012">
						<div class="darker"></div>
						<img src="img/galery/china-2012/entrenando-en-el-kowloon-park.jpg" alt="Viaje a China 2012">
						<p class="galery__item__description">Viaje a China 2012</p>
					</article>

					<article class="galery__item" id="china-2011">
						<div class="darker"></div>
						<img src="img/galery/china-2011/primera-noche-en-hong-kong.jpg" alt="Viaje a China 2011">
						<p class="galery__item__description">Viaje a China 2011</p>
					</article>

					<article class="galery__item" id="sede-central">
						<div class="darker"></div>
						<img src="img/galery/sede-central/entrenando-wu-dip-dao.jpg" alt="Sede Central">
						<p class="galery__item__description">Sede Central</p>
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