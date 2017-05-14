<?php
	//IP Geolocation API

	// Instantiate curl
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://ip-api.com/json');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result2 = curl_exec($curl);
	curl_close($curl);

	// Json decode
	$result2 = json_decode($result2);
	
// 	Show the Json of this API to understand what data I use
//	echo '<pre>';
//	print_r($result2);
//	echo '</pre>';