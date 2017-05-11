<?php
	//API Current weather data (By geolocalisation)
	include 'geo_weather.php';
	include 'city_weather.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Geo current weather</title>
		<link rel="stylesheet" href="../src/css/style.css" />
	</head>
	<body>
		<!-- HEADER -->
		<header>
			<section id="topBar">
				<nav class="container">
					<ul class="menu">
						<li><a href="../index.php" title="menu">HOME</a></li>
						<li><a href="city_current_weather.php" title="menu">CITY CURRENT WEATHER</a></li>
						<li><a href="#" title="menu">GEO CURRENT WEATHER</a></li>
					</ul>
				</nav>
			</section>
		</header>
		
		
		<!-- Show some data for my API -->
		<div>
		
			<h1><?= $city=$result2->city ?> test</h1>
			
			<p>Nous sommes le <?= date('Y-m-d', $result->dt) ?>, vous êtes à <?= $city=$result2->city ?>, il est <?= date('H:i:s', $result->dt) ?> et il fait <?= $result->main->temp ?>°</p>
			
			<br><strong>Temperature: </strong><?= $result->main->temp ?>°
			<br><strong>Date: </strong><?= date('Y-m-d H:i:s', $result->dt) ?>
			
			
			<br><strong>City: </strong><?= $result2->city ?>
			<br><strong>Country: </strong><?= $result2->country ?>
			<br><strong>Region: </strong><?= $result2->regionName ?>
			<br><strong>ZIP: </strong><?= $result2->zip ?>
		</div>
		
		
		<!-- FOOTER -->
		<footer>
		</footer>
		
		<script src="../src/js/script.js"></script>
	</body>
</html>
