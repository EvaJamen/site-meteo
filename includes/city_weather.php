<?php

	// Instantiate curl
	$curl = curl_init();
	$city = !empty($_GET['city']) ? $_GET['city'] : 'Amsterdam';
	curl_setopt($curl, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&APPID=fd28cca27694800fe8e68a90c96aa39a');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	curl_close($curl);

	// Json decode
	$result = json_decode($result);

//	// Show result of my API
//	echo '<pre>';
//	print_r($result);
//	echo '</pre>';