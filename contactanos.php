<?php 
$pagetitle = "Contactanos";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="Contactanos para formar parte de las clases del Hung Gar tradicional del linaje de la Familia Lam" />
	<!-- Meta Viewport -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- Title -->
	<title>Hung Gar Argentina</title>
	<!--[if lt IE 9]>
		<script>
		window.location.href="http://www.hunggarargentina.com.ar/no-soportado";
		</script>
	<![endif]-->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/contacto.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="img/favicon.ico">
</head>
<body>
	<?php include "templates/header.html"; ?>
	<?php include "templates/navigation.html"; ?>
	<!-- Content Starts Here -->
<main class="centerme">
	<section class="centralcontainer">
		<h1>Contactanos</h1>
		<br>
		<br>
		<article class="mail">
			<figure class="mail__picture"></figure>
			<h4>clases@hunggarargentina.com.ar</h4>
		</article>
		<br>
		<br>
		<article class="sedes">
			<div class="centerme">
				<figure class="sedes__picture"></figure>
			</div>
			<div class="flexme">
			<article class="sede__laplata card">
				<h2>Sede La Plata</h2>
				<img src="img/marker.png" alt="marker" class="marker">
				<a href="https://www.google.com.ar/maps/place/Escuela+Kung+Fu+Tradicional+.+Wu+Hsing+Chuan/@-34.917748,-57.943246,17z/data=!3m1!4b1!4m2!3m1!1s0x95bcccb80c1d3a2f:0x985bf32ff1915557" target="_blank">Calle 6 N° 1210</a>
				<h3>Sifu Hernán Dell' Oso</h3>
				<p><span class="bold">Sábados:</span> de 10:00 a 13:00</p>
				<br>
				<h3>Sihing Gabriel Moschella</h3>
				<p><span class="bold">Lunes y Miércoles:</span> de 21:00 a 22:30</p>
				<p><span class="bold">Martes y Viernes:</span> de 10:00 a 11:30</p>
			</article>
			<article class="sede__capital card">
				<h2>Sede Capital</h2>
				<img src="img/marker.png" alt="marker" class="marker">
				<a href="https://www.google.com.ar/maps/place/Esteban+de+Luca+2251,+Buenos+Aires,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires/@-34.6358471,-58.4022663,17z/data=!3m1!4b1!4m2!3m1!1s0x95bccb111d5d6677:0x967a68a3fa942990" target="_blank">Esteban de Luca 2251</a>
				<h3>Sifu Hernán Dell' Oso</h3>
				<p><span class="bold">Martes y Jueves:</span> de 20:30 a 22:00</p>
				<div class="centerme">
				<img src="img/bus-icon.png" alt="Colectivos" class="bus" oncontextmenu='return false' ondragstart='return false' onmousedown='return false' onselectstart='return false'>
				</div>
				<p>6 - 9 - 25 -  28 -  32 -  50 -  65 -  75 - 91 -  95 - 97 - 101 -  118 -  133 -  134 -  143 -  150 -  188</p>
				<p><span class="highlight">Línea H:</span> Estación Caseros</p>
			</article>
			</div>
		</article>
	</section>
</main>
	<br>
	<!-- Content Finish Here -->
	<?php include "templates/footer.html"; ?>
	<!-- Javascript Libraries -->
	<script src="libs/jquery-1.11.2.min.js"></script>
	<script src="libs/animatescroll.min.js"></script>
	<script src="libs/prefixfree.js"></script>
	<script src="js/template.js"></script>
</body>
</html>