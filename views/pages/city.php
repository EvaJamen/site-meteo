<?php
	//API to call current weather data by city name
	include 'includes/city_weather_api.php';
?>

<!-- PRINCIPAL BLOCK -->		
<section class="col-md-12 block1">

	<!-- Form to research city -->
	<div class="col-md-12 find">
		<form action="#" method="get">
        	<input type="text" placeholder="City name" required name="city" class="value">
			<button type="submit" class="btn btn-primary btn-lg put" >Find</button>
		</form>
	</div>
	
	<!-- City name / Sort by city name / Paris is the default valur-->
	<div class="col-md-4 block1">
       	<p class="name"><?= $city ?></p>
        <div><img src="src/img/cityscape2.png" alt="city"></div>
	</div>
	
	<!-- Show some data for my API -->
	<div class="col-md-4 block2">
        <ul class="list-group">
  			<li class="list-group-item"><strong>Date : </strong><?= date('Y-m-d H:i:s', $result->dt) ?>
  			</li>
  			<!-- Convert Kelvin(K) to Celsius(°C) : apply -273,15 to the data-->
  			<li class="list-group-item"><strong>Temperature : </strong><?= $result->main->temp - $c ?>°
  			</li>
  			<li class="list-group-item"><strong>Appearance : </strong><?= $result->weather[0]->main ?>
			</li>
 			<li class="list-group-item"><strong>Description : </strong><?= $result->weather[0]->description ?>
			</li>
		</ul>
	</div>
	
	<!-- Hide and show some facultative data -->		
	<div class="col-md-4 block2" id="id1">
		<ul class="list-group">
  			<li class="list-group-item"><strong>Minimum : </strong><?= $result->main->temp_min - $c ?>°
  			</li>
  			<li class="list-group-item"><strong>Maximum : </strong><?= $result->main->temp_max - $c ?>°
  			</li>
  			<li class="list-group-item"><strong>Wind : </strong><?= $result->wind->speed ?> Km/h
  			</li>
			<li class="list-group-item"><strong>Humidity : </strong><?= $result->main->humidity ?>%
			</li>
		</ul>
	</div>
	
	<!-- Button to show and hide the facultative data -->
	<div class="col-md-12 find">
    	<button type="submit" value="clique" class="btn btn-primary btn-lg" onClick="show_hide_div('id1')"/>Show/Hide for more</button>
	</div>

</section>