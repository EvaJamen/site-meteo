<?php
	include 'includes/city_weather_api.php';
?>

				
<section class="col-md-12 block1">
		  	<div class="col-md-12 find">
	<form action="#" method="get">
        	<input type="text" value="City name" required name="city" class="value">
			<button type="submit" class="btn btn-primary btn-lg put" >Find</button>
				</form></div>
    	
		<!-- City name / Paris is the default value -->
		
		<!-- Convert Kelvin(K) to Celsius(°C) : apply -273,15 to the data-->
		<!-- Show some data for my API -->
		
		<div class="col-md-4 block1">
        		<p class="name"><?= $city ?></p>
        		<div><img src="src/img/cityscape2.png" alt="city"></div>
		</div>
		
		<div class="col-md-4 block2">
        		<ul class="list-group">
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
    <?= $result->weather[0]->main ?>
  </li>
  <li class="list-group-item">
    <span class="badge">Description</span>
    <?= $result->weather[0]->description ?>
  </li>
</ul>
		</div>
<!-- Hide and show some facultative data -->		
		<div class="col-md-4 block2" id="id1">
<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">Minimum</span>
    <?= $result->main->temp_min - $c ?>°
  </li>
  <li class="list-group-item">
    <span class="badge">Maximum</span>
    <?= $result->main->temp_max - $c ?>°
  </li>
  <li class="list-group-item">
    <span class="badge">Wind</span>
    <?= $result->wind->speed ?> Km/h
  </li>
  <li class="list-group-item">
    <span class="badge">Humidity</span>
    <?= $result->main->humidity ?>%
  </li>
</ul>
</div>
	
<div class="col-md-12 find">
    	<button type="submit" value="clique" class="btn btn-primary btn-lg" onClick="show_hide_div('id1')"/>Show/Hide for more</button>
</div>

</section>