<?php
	//API Current weather data (By geolocalisation)
	include 'geolocation.php';
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
		
		<h1><?= $city ?></h1>
		
		<!-- Show some data for my API -->
		
		<p>We are the <?= date('Y-m-d', $result->dt) ?>, you are at <?= $city=$result2->city ?>, it is <?= date('H:i:s', $result->dt) ?> and it does <?= $result->main->temp - $c ?>°</p>
			
		<div>
			<br><strong>Date: </strong><?= date('Y-m-d H:i:s', $result->dt) ?>
			<br><strong>Description: </strong><?= $result->weather[0]->description ?>
			<br><strong>Temperature: </strong><?= $result->main->temp - $c ?>°
			<br><strong>City: </strong><?= $result2->city ?>
			<br><strong>Country: </strong><?= $result2->country ?>
			<br><strong>Region: </strong><?= $result2->regionName ?>
			<br><strong>ZIP: </strong><?= $result2->zip ?>
		</div>
		
		
		<!-- FOOTER -->
		<footer>
		</footer>
		
	</body>
</html>
