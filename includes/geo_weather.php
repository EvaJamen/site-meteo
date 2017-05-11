<?php

	// Instantiate curl
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://ip-api.com/json');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result2 = curl_exec($curl);
	curl_close($curl);

	// Json decode
	$result2 = json_decode($result2);

//	// Show result of my API
//	echo '<pre>';
//	print_r($result2);
//	echo '</pre>';