<?php
	//IP Geolocation API
	include 'includes/geolocation_api.php';
	//API to call current weather data by city name
	include 'includes/geo_weather_api.php';
?>

<!-- PRINCIPAL BLOCK -->
<section class="col-md-12 block1">

	<!-- City name / Sort by geolocation -->
	<div class="col-md-4 block1">
        <p class="name"><?= $city ?></p>
        <div><img src="src/img/placeholder2.png" alt="city"></div>
	</div>
	
	<!-- HALF BLOCK -->
	<!-- Show some data for my API-->
	<div class="col-md-4 block1">
		<ul class="list-group">
  			<!-- Resume -->
   			<li class="list-group-item" id="resume">We are the <?= date('Y-m-d', $result->dt) ?>, you are at <?= $city=$result2->city ?>, it is <?= date('H:i:s', $result->dt) ?> and it does <?= $result->main->temp - $c ?>°
	  		</li>
  			<li class="list-group-item">
    			<strong>Date : </strong><?= date('Y-m-d H:i:s', $result->dt) ?>
  			</li>
  			<!-- Convert Kelvin(K) to Celsius(°C) : apply -273,15 to the data-->
  			<li class="list-group-item">
    			<strong>Temperature : </strong><?= $result->main->temp - $c ?>°
  			</li>
  			<li class="list-group-item">
    			<strong>Appearance : </strong><?= $result->weather[0]->description ?>
  			</li>
		</ul>  		
	</div>
	
	<!-- OTHER HALF BLOCK -->
	<div class="col-md-4 block2">
        <ul class="list-group">
  			<li class="list-group-item"><strong>City : </strong><?= $result2->city ?>
  			</li>
  			<li class="list-group-item"><strong>Country : </strong><?= $result2->country ?>
  			</li>
  			<li class="list-group-item"><strong>Region : </strong><?= $result2->regionName ?>
  			</li>
  			<li class="list-group-item"><strong>ZIP Code : </strong><?= $result2->zip ?>
  			</li>
		</ul>
	</div>

</section>