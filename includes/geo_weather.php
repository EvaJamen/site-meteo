<?php

	// Instantiate curl
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://ip-api.com/json');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	curl_close($curl);

	// Json decode
	$result = json_decode($result);

	// Show result of my API
	echo '<pre>';
	print_r($result);
	echo '</pre>';