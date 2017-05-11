<?php
	//API Current weather data (By geolocalisation)
	include 'geo_weather.php';
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
		
		<!-- City name / Amsterdam is the default value -->
		
		<!-- Show some data for my API -->
		<div>
			<p>Vous êtes ici</p>
			<p>Il est</p><?= date('Y-m-d H:i:s', $result->dt) ?>
			
			<br><strong>City: </strong><?= $result->city ?>
			<br><strong>Country: </strong><?= $result->country ?>
			<br><strong>Region: </strong><?= $result->regionName ?>
			<br><strong>ZIP: </strong><?= $result->zip ?>
		</div>
		
		
		<!-- FOOTER -->
		<footer>
		</footer>
		
		<script src="../src/js/script.js"></script>
	</body>
</html>
