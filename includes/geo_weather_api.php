<?php
	//API to call current weather data by city name

	// Instantiate curl
	$curl = curl_init();

	$city = $result2->city;
	
	curl_setopt($curl, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&APPID=fd28cca27694800fe8e68a90c96aa39a');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	curl_close($curl);

	// Json decode
	$result = json_decode($result);

	// Value to convert Kelvin(K) to Celsius(°C) (cf. geolocation.php file )
	$c=273.15;

// 	Show the Json of this API to understand what data I use
//	echo '<pre>';
//	print_r($result);
//	echo '</pre>';