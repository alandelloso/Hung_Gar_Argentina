<?php 
$pagetitle = "Error";
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<!-- Meta Description -->
	<meta name="description" content="No pudimos encontrar lo que buscabas" />
	<!-- Meta Viewport -->
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- Title -->
	<title>No pudimos encontrar lo que buscabas</title>
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/legacy/template.css">
	<script src="libs/html5-for-legacy.js"></script>
	<![endif]-->
	<!-- CSS Links -->
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/template.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../img/favicon.ico">

	<style>
	h2 {
		font-size: 500%
	}
	</style>
</head>
<body>
	<?php include "../templates/header_2.html"; ?>
	<?php include "../templates/navigation_2.html"; ?>
	<!-- Content Starts Here -->
<main class="centerme">
	<section class="centralcontainer">
		<h2>Oops!</h2>
		<h4>Lo sentimos</h4>
		<h4>No pudimos encontrar lo que buscabas en este lugar</h4>
	</section>
</main>
	<!-- Content Finish Here -->
	<?php include "../templates/footer_2.html"; ?>
	<!-- Javascript Libraries -->
	<script src="../libs/jquery-1.11.2.min.js"></script>
	<script src="../libs/prefixfree.js"></script>
	<script src="../js/template.js"></script>
</body>
</html>