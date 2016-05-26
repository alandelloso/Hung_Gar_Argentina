<?php 
$pagetitle = "Inicio";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="Hung Gar del linaje directo de la familia Lam en Argentina. Sifu Hernán Dell' Oso, miembro de la Wu Hsing Chuan y la World Hung Gar Association." />
	<!-- Meta Viewport -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- Title -->
	<title>Inicio - Hung Gar Argentina</title>
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
	<![endif]-->
	<!-- CSS Links -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" type="image/png" href="img/favicon.ico">
</head>
<body>
	<?php include "templates/header.html"; ?>
	<?php include "templates/navigation.html"; ?>
	<!-- Content Starts Here -->
	<main class="centerme">
		<section class="centralcontainer">
		<h1>Wu Hsing Chuan</h1>
		<article class="main-text">
			<p>La Asociación <span class="highlight">Wu Hsing Chuan</span>, es una entidad dedicada al estudio, desarrollo y promoción de las auténticas artes marciales tradicionales chinas, preservándolas para las generaciones futuras.</p>
			<p>Pionera en la difusión del arte marcial tradicional, ha ganado su reconocimiento y reputación tanto a nivel nacional como internacional, con una trayectoria de más de cuatro décadas, en una constante búsqueda de la excelencia, trayendo directamente de la cuna del kung fu, los conocimientos transmitidos por los Maestros de los linajes más directos y reconocidos a nivel mundial, en los cinco sistemas que se difunden en la institución.</p>
			<p>En el arte marcial tradicional, se habla de familia marcial, y ese es el ambiente en el que se entrena dentro de nuestra escuela, una gran familia a la que se suman constantemente nuevos integrantes, que van incorporando a través de la enseñanza y el ejemplo, disciplina y valores contenidos en los códigos de la ética, dando como resultado personas más saludables e íntegras.</p>
			<p>Te invitamos a formar parte de esta gran familia y a disfrutar de la práctica de un auténtico arte marcial tradicional y sus invaluables enseñanzas ancestrales.</p>
		</article>
		<section class="contacto">
			<article class="card contacto__la-plata">
				<h2>Sede La Plata</h2>
				<figure class="clock__la-plata"></figure>
				<h3>Sifu Hernán Dell' Oso</h3>
				<p><span class="bold">Sábados:</span> de 10:00 a 13:00</p>
				<br>
				<h3>Sihing Gabriel Moschella</h3>
				<p><span class="bold">Lunes y Miércoles:</span> de 21:00 a 22:30</p>
				<br>
				<h3>Sihing Marcelo Heredia</h3>
				<p><span class="bold">Martes y Viernes:</span> de 10:00 a 11:30</p>
				<div class="pull-down">
					<h3>Calle 6 N° 1210 (Entre 57 y 58)</h3>
					<div id="map-canvas"></div>
				</div>
			</article>
			<article class="card contacto__capital">
				<h2>Sede Capital</h2>
				<figure class="clock__capital"></figure>
				<h3>Sifu Hernán Dell' Oso</h3>
				<p><span class="bold">Martes y Jueves:</span> de 18:00 a 19:00</p>
				<p><span class="bold">Martes y Jueves:</span> de 20:00 a 21:00</p>
				<br>
				<div class="pull-down">
					<h3>Alberti 1541 3er Piso</h3>
					<div id="map-canvas2"></div>
				</div>
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="js/maps.js"></script>
</body>
</html>