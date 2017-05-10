<?php

	// Instantiate curl
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q=Paris&APPID=fd28cca27694800fe8e68a90c96aa39a');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	curl_close($curl);

	// Json decode
	$result = json_decode($result);

	// Show result
	echo '<pre>';
	print_r($result);
	echo '</pre>';