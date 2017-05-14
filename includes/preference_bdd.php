<?php
	//INPUT ORDERS IN TABLE PRODUCTS OF MY BDD

	//Array to check errors
	$error = array();
	
	if(!empty($_POST)) {
		// Retrieve data
		$city		= trim($_POST['city']);
		$date	= $_POST['date'];
		$temperature	= (int)$_POST['temperature'];
		$description		= trim($_POST['description']);
		$opinion	= trim($_POST['opinion']);
		$decision 	= $_POST['decision'];
		
		// Check empty data to fill the error array
		if(empty($city))
			$error['city']		= 'should not be empty';
		if(empty($date))
			$error['date']	= 'should not be empty';
		if(empty($temperature))
			$error['temperature']		= 'should not be empty';
		if(empty($description))
			$error['description']		= 'should not be empty';
		if(empty($opinion))
			$error['opinion']	= 'should not be empty';
		if(empty($decision))
			$error['decision']			= 'should not be empty';
		
		// Any error
		if(empty($error)) {
			// Fill the table with currently set date
			if(empty($date)) {
				//Define currently set date
				$_POST['date'] = date("j/n/Y h:i", time());
				
				//Prepare the request
				$prepare = $pdo->prepare('INSERT INTO meteotestbdd (city, date, temperature, description, opinion, decision) VALUES (:city, :date, :temperature, :description, :opinion, :decision)');
				
				$prepare->bindValue('city', $_POST['city']);
				$prepare->bindValue('date', $_POST['date']);
				$prepare->bindValue('temperature', $_POST['temperature']);
				$prepare->bindValue('description', $_POST['description']);
				$prepare->bindValue('opinion', $_POST['opinion']);
				$prepare->bindValue('decision', $_POST['decision']);
			
				//Execute the request and alert to confirm the registering
				$prepare->execute();
				
				echo "<script>alert(\"Your notice of meteo is registered\")</script>"; 
			}
			
			// Handle the date to fill the table
			else {
				//Prepare the request
				$prepare = $pdo->prepare('INSERT INTO meteotestbdd (city, date, temperature, description, opinion, decision) VALUES (:city, :date, :temperature, :description, :opinion, :decision)');
				
				$prepare->bindValue('city', $_POST['city']);
				$prepare->bindValue('date', $_POST['date']);
				$prepare->bindValue('temperature', $_POST['temperature']);
				$prepare->bindValue('description', $_POST['description']);
				$prepare->bindValue('opinion', $_POST['opinion']);
				$prepare->bindValue('decision', $_POST['decision']);
		
				//Execute the request and alert to confirm the registering
				$prepare->execute();
				
				echo "<script>alert(\"Your notice of meteo is registered\")</script>";
			}
		}
		
		//Reset form by filling with default values	
		$_POST['city']		= '';
		$_POST['date']	= '';
		$_POST['temperature']	= '';
		$_POST['description']		= '';
		$_POST['opinion']		= '';
		$_POST['decision']	= '';
	}

	else {
		//Reset form by filling with default values	
		$_POST['city']		= '';
		$_POST['date']	= '';
		$_POST['temperature']	= '';
		$_POST['description']		= '';
		$_POST['opinion']		= '';
		$_POST['decision']	= '';
	}
