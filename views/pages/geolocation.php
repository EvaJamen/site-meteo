<?php
	//API Current weather data (By geolocalisation)
	include 'includes/geo_weather_api.php';
	include 'includes/geolocation_api.php';
?>
		
		
<section class="col-md-12 block1">
	
		<!-- City name / Paris is the default value -->
		
		<!-- Convert Kelvin(K) to Celsius(°C) : apply -273,15 to the data-->
		<!-- Show some data for my API -->
		
		<div class="col-md-4 block1">
        		<p class="name"><?= $city ?></p>
        		<div><img src="src/img/placeholder2.png" alt="city"></div>
		</div>
		
		<div class="col-md-4 block1">
	<ul class="list-group">
   <li class="list-group-item" id="resume">We are the <?= date('Y-m-d', $result->dt) ?>, you are at <?= $city=$result2->city ?>, it is <?= date('H:i:s', $result->dt) ?> and it does <?= $result->main->temp - $c ?>°
  </li>
  <li class="list-group-item">
    <span class="badge">Date</span>
    <?= date('Y-m-d H:i:s', $result->dt) ?>
  </li>
  <li class="list-group-item">
    <span class="badge">Temperature</span>
    <?= $result->main->temp - $c ?>°
  </li>
  <li class="list-group-item">
    <span class="badge">Appearance</span>
    <?= $result->weather[0]->description ?>
  </li>
			</ul>
        		
		</div>
		
		<div class="col-md-4 block2">
        		<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">City</span>
    <?= $result2->city ?>
  </li>
  <li class="list-group-item">
    <span class="badge">Country</span>
    <?= $result2->country ?>
  </li>
  <li class="list-group-item">
    <span class="badge">Region</span>
    <?= $result2->regionName ?>
  </li>
  <li class="list-group-item">
    <span class="badge">ZIP Code</span>
    <?= $result2->zip ?>
  </li>
</ul>
		</div>

</section>
		<!-- City name / Amsterdam is the default value -->