<?php
	//API Current weather data (By city name)
	include 'current_weather.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>City current weather</title>
		<link rel="stylesheet" href="../src/css/style.css" />
	</head>
	<body>
		<!-- HEADER -->
		<header>
			<section id="topBar">
				<nav class="container">
					<ul class="menu">
						<li><a href="../index.php" title="menu">HOME</a></li>
						<li><a href="#" title="menu">CITY CURRENT WEATHER</a></li>
					</ul>
				</nav>
			</section>
		</header>
		
		<!-- Find Weather by city -->
		<form action="#" method="get">
        	<input type="text" value="City name">
			<input type="submit" value="Find">
    	</form>
		
		<!-- City name / Amsterdam is the default value -->
		<h1><?= $city ?></h1>
		
		<!-- Show some data for my API -->
		<div>
			<br><strong>Date: </strong><?= date('Y-m-d H:i:s', $result->dt) ?>
			<br><strong>Description: </strong><?= $result->weather[0]->description ?>
			<br><strong>Temperature: </strong><?= $result->main->temp ?>°
		</div>
		
		<!-- Hide and show some facultative data -->
		<button type="submit" value="clique" onClick="show_hide_div('id1')"/>Show more</button>
	
		<div id="id1">
			<br><strong>Minimum temperature: </strong><?= $result->main->temp_min ?>°
			<br><strong>Maximum temperature: </strong><?= $result->main->temp_max ?>°
			<br><strong>Wind: </strong><?= $result->wind->speed ?> Km/h
			<br><strong>Humidity: </strong><?= $result->main->humidity ?>%
		</div>
		<!-- FOOTER -->
		<footer>
		</footer>
		
		<script src="../src/js/script.js"></script>
	</body>
</html>
