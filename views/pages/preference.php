<?php

	//CONNECT TO MY BDD
	include 'config.php';

	//INPUT DATA IN TABLE METEO OF MY BDD
	include 'includes/preference_bdd.php';

?>
<!-- CREATE FORM TO INPUT DATA-->
<section class="blocks">
		<div class="col-md-12 main">
			<div id="impact"> Store your program !</div>
		</div>
		<div class="col-md-12 main">
			<form class="form_style" action="#" method="post">
				<fieldset>
					<legend>Informations</legend>
					<div class="registration">
						<label for="city">City</label>
						<input type="text" name="city" placeholder="Name of city" id="city">
						<br>
					</div>
					
					<div class="registration">
						<label for="labeling_date">Labeling date*</label>
						<input type="date" name="labeling_date" id="labeling_date">
						<span id="date">*Don't file if you want the currently set date</span>
					</div>
					
					<div class="registration">
						<label for="temperature">Temperature</label>
						<input type="number" name="temperature" placeholder="Null" id="temperature">
					</div>
					
					
				</fieldset>
	
				<fieldset>
					<legend>Decision</legend>
					<div class="registration">
						<label for="description">Description</label>
						<input type="text" name="description" placeholder="Describe the weather" id="description">
						<br>
					</div>
					<div class="registration">
						<label for="opinion">Opinion</label>
						<textarea cols="70" rows="5" name="opinion" placeholder="What is your opinion?" id="opinion"></textarea>
					</div>
					
					
					<div class="registration">
						<label for="decision">Go out
							<input type="radio" name="decision" value="yes"  id="yes" checked>yes
						</label>
						<label for="decision">
							<input type="radio" name="decision" value="no" id="no">no
						</label>
						<br>
					</div>
					
				</fieldset>
			

				<div class="registration">
					<input type="reset" value="Reset">
					<input type="submit" value="Send">
				</div>
			</form>
		</div>
</section>