<?php /* Template Name: Auto Insurance Template */ get_header();
?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
			<a class="btn btn-primary." href="javascript:$zopim.livechat.window.show()">Llama</a>
			<form action="index.html" method="POST" id="auto-quote">

				<fieldset class="form-group">
					<legend>Section One: Zip Code</legend>
					<label for="zip_code">Zip Code</label>
					<input class="form-control has-warning has-error has-success" type="text" name="zip_code">
				</fieldset>

				<fieldset class="form-group">
					<legend>Section Two: How Many Vehicles</legend>
					<label for="vehicle_select">How many vehicles are to be insured?</label>
					<select class="form-control" name="vselect" id="vselect">
						<option disabled selected>Select One</option>
						<option value="one">One Vehicle</option>
						<option value="two">Two Vehicles</option>
						<option value="three">Three Vehicles</option>
						<option value="four">Four Vehicles</option>
					</select>
				</fieldset>

				<!-- Vehicles -->

				<fieldset class="form-group vehicle" id="vehicle-one">
					<legend>Section Two: Sub Section: Vehicle Info</legend>
					<div class="form-group">
						<label for="v_year">First Vehicle Year:</label>
						<input class="form-control" type="text" name="v_year">
					</div>
					<div class="form-group">
						<label for="v_make">First Vehicle Make:</label>
						<select class="form-control" name="v_make">
							<option disabled selected>Select One</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_model">First Vehicle Model:</label>
						<input class="form-control" type="text" name="v_model">
					</div>
					<div class="form-group">
						<label for="v_vin"> First VIN (Optional):</label>
						<input class="form-control" type="text" name="v_vin">
					</div>
					<div class="form-group">
						<label for="v_primary_use">First Vehicle Primary Use:</label>
						<select class="form-control" name="v_primary_use">
							<option disabled selected>Select One</option>
							<option value="work">Commute to and from Work</option>
							<option value="school">Commute to and from School</option>
							<option value="pleasure">Pleasure</option>
							<option value="business individual">Business Individual</option>
							<option value="business corporate">Busines Corporate</option>
							<option value="government">Government</option>
							<option value="farm">Farm</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_yearly_mileage">First Vehicle Yearly Mileage:</label>
						<select class="form-control" name="v_yearly_mileage">
							<option disabled selected>Select One</option>
							<option value="">0 - 5,000</option>
							<option value="">5,001 - 7,500</option>
							<option value="">7,501 - 10,000</option>
							<option value="">10,001 -  12,500</option>
							<option value="">12,501 - 15,000</option>
							<option value="">15,001 - 18,000</option>
							<option value="">18,001 - 25,000</option>
							<option value="">25,001 - 50,000</option>
							<option value="">50,001+</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_comprehensive_deductible">Please select your desired Comprehensive Deductible:</label>
						<select class="form-control" name="v_comprehensive_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_collision_deductible">Please select your desired Collision Deductible:</label>
						<select class="form-control" name="v_collision_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_current_liability">Please select your current Liability Limits:</label>
						<select class="form-control" name="v_current_liability">
							<option disabled selected>Select One</option>
							<option value="">15/30</option>
							<option value="">25/50</option>
							<option value="">30/60</option>
							<option value="">50/100</option>
							<option value="">100/300</option>
							<option value="">250/500</option>
							<option value="">500/500</option>
							<option value="">Umbrella</option>
						</select>
					</div>
				</fieldset>

				<fieldset class="form-group vehicle" id="vehicle-two">
					<legend>Section Two: Sub Section: Vehicle Info</legend>
					<div class="form-group">
						<label for="v_year">Second Vehicle Year:</label>
						<input class="form-control" type="text" name="v_year">
					</div>
					<div class="form-group">
						<label for="v_make">Second Vehicle Make:</label>
						<select class="form-control" name="v_make">
							<option disabled selected>Select One</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_model">Second Vehicle Model:</label>
						<input class="form-control" type="text" name="v_model">
					</div>
					<div class="form-group">
						<label for="v_vin">Second VIN (Optional):</label>
						<input class="form-control" type="text" name="v_vin">
					</div>
					<div class="form-group">
						<label for="v_primary_use">Second Vehicle Primary Use:</label>
						<select class="form-control" name="v_primary_use">
							<option disabled selected>Select One</option>
							<option value="work">Commute to and from Work</option>
							<option value="school">Commute to and from School</option>
							<option value="pleasure">Pleasure</option>
							<option value="business individual">Business Individual</option>
							<option value="business corporate">Busines Corporate</option>
							<option value="government">Government</option>
							<option value="farm">Farm</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_yearly_mileage">Second Vehicle Yearly Mileage:</label>
						<select class="form-control" name="v_yearly_mileage">
							<option disabled selected>Select One</option>
							<option value="">0 - 5,000</option>
							<option value="">5,001 - 7,500</option>
							<option value="">7,501 - 10,000</option>
							<option value="">10,001 -  12,500</option>
							<option value="">12,501 - 15,000</option>
							<option value="">15,001 - 18,000</option>
							<option value="">18,001 - 25,000</option>
							<option value="">25,001 - 50,000</option>
							<option value="">50,001+</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_comprehensive_deductible">Please select your desired Comprehensive Deductible:</label>
						<select class="form-control" name="v_comprehensive_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_collision_deductible">Please select your desired Collision Deductible:</label>
						<select class="form-control" name="v_collision_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_current_liability">Please select your current Liability Limits:</label>
						<select class="form-control" name="v_current_liability">
							<option disabled selected>Select One</option>
							<option value="">15/30</option>
							<option value="">25/50</option>
							<option value="">30/60</option>
							<option value="">50/100</option>
							<option value="">100/300</option>
							<option value="">250/500</option>
							<option value="">500/500</option>
							<option value="">Umbrella</option>
						</select>
					</div>
				</fieldset>

				<fieldset class="form-group vehicle" id="vehicle-three">
					<legend>Section Two: Sub Section: Vehicle Info</legend>
					<div class="form-group">
						<label for="v_year">Vehicle Year:</label>
						<input class="form-control" type="text" name="v_year">
					</div>
					<div class="form-group">
						<label for="v_make">Vehicle Make:</label>
						<select class="form-control" name="v_make">
							<option disabled selected>Select One</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_model">Vehicle Model:</label>
						<input class="form-control" type="text" name="v_model">
					</div>
					<div class="form-group">
						<label for="v_vin">VIN (Optional):</label>
						<input class="form-control" type="text" name="v_vin">
					</div>
					<div class="form-group">
						<label for="v_primary_use">Primary Use:</label>
						<select class="form-control" name="v_primary_use">
							<option disabled selected>Select One</option>
							<option value="work">Commute to and from Work</option>
							<option value="school">Commute to and from School</option>
							<option value="pleasure">Pleasure</option>
							<option value="business individual">Business Individual</option>
							<option value="business corporate">Busines Corporate</option>
							<option value="government">Government</option>
							<option value="farm">Farm</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_yearly_mileage">Yearly Mileage:</label>
						<select class="form-control" name="v_yearly_mileage">
							<option disabled selected>Select One</option>
							<option value="">0 - 5,000</option>
							<option value="">5,001 - 7,500</option>
							<option value="">7,501 - 10,000</option>
							<option value="">10,001 -  12,500</option>
							<option value="">12,501 - 15,000</option>
							<option value="">15,001 - 18,000</option>
							<option value="">18,001 - 25,000</option>
							<option value="">25,001 - 50,000</option>
							<option value="">50,001+</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_comprehensive_deductible">Please select your desired Comprehensive Deductible:</label>
						<select class="form-control" name="v_comprehensive_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_collision_deductible">Please select your desired Collision Deductible:</label>
						<select class="form-control" name="v_collision_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_current_liability">Please select your current Liability Limits:</label>
						<select class="form-control" name="v_current_liability">
							<option disabled selected>Select One</option>
							<option value="">15/30</option>
							<option value="">25/50</option>
							<option value="">30/60</option>
							<option value="">50/100</option>
							<option value="">100/300</option>
							<option value="">250/500</option>
							<option value="">500/500</option>
							<option value="">Umbrella</option>
						</select>
					</div>
				</fieldset>

				<fieldset class="form-group vehicle" id="vehicle-four">
					<legend>Section Two: Sub Section: Vehicle Info</legend>
					<div class="form-group">
						<label for="v_year">Vehicle Year:</label>
						<input class="form-control" type="text" name="v_year">
					</div>
					<div class="form-group">
						<label for="v_make">Vehicle Make:</label>
						<select class="form-control" name="v_make">
							<option disabled selected>Select One</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_model">Vehicle Model:</label>
						<input class="form-control" type="text" name="v_model">
					</div>
					<div class="form-group">
						<label for="v_vin">VIN (Optional):</label>
						<input class="form-control" type="text" name="v_vin">
					</div>
					<div class="form-group">
						<label for="v_primary_use">Primary Use:</label>
						<select class="form-control" name="v_primary_use">
							<option disabled selected>Select One</option>
							<option value="work">Commute to and from Work</option>
							<option value="school">Commute to and from School</option>
							<option value="pleasure">Pleasure</option>
							<option value="business individual">Business Individual</option>
							<option value="business corporate">Busines Corporate</option>
							<option value="government">Government</option>
							<option value="farm">Farm</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_yearly_mileage">Yearly Mileage:</label>
						<select class="form-control" name="v_yearly_mileage">
							<option disabled selected>Select One</option>
							<option value="">0 - 5,000</option>
							<option value="">5,001 - 7,500</option>
							<option value="">7,501 - 10,000</option>
							<option value="">10,001 -  12,500</option>
							<option value="">12,501 - 15,000</option>
							<option value="">15,001 - 18,000</option>
							<option value="">18,001 - 25,000</option>
							<option value="">25,001 - 50,000</option>
							<option value="">50,001+</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_comprehensive_deductible">Please select your desired Comprehensive Deductible:</label>
						<select class="form-control" name="v_comprehensive_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_collision_deductible">Please select your desired Collision Deductible:</label>
						<select class="form-control" name="v_collision_deductible">
							<option disabled selected>Select One</option>
							<option value="">No Coverage</option>
							<option value="">$100</option>
							<option value="">$250</option>
							<option value="">$500 (Most Common)</option>
							<option value="">$1,000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="v_current_liability">Please select your current Liability Limits:</label>
						<select class="form-control" name="v_current_liability">
							<option disabled selected>Select One</option>
							<option value="">15/30</option>
							<option value="">25/50</option>
							<option value="">30/60</option>
							<option value="">50/100</option>
							<option value="">100/300</option>
							<option value="">250/500</option>
							<option value="">500/500</option>
							<option value="">Umbrella</option>
						</select>
					</div>
				</fieldset>

				<!-- End Vehicles -->

				<fieldset class="form-group">
					<legend>Section Three: Previous Insurance/Home Ownership</legend>
					<div class="form-group">
						<label for="insured">Do you currently have auto insurance?</label>
						<select class="form-control" name="insured">
							<option disabled selected>Select One</option>
							<option value="">Yes I Do</option>
							<option value="">No I Do Not</option>
						</select>
					</div>
					<div class="form-group">
						<label for="homeownership">I own my Home: </label>
						<label class="radio-inline"><input type="radio" name="name">Yes</label>
						<label class="radio-inline"><input type="radio" name="name">No</label>
					</div>
				</fieldset>

				<fieldset class="form-group">
					<legend>Section Four: How Many Additional Drivers</legend>
					<div class="form-group">
						<label for="driver_select">Other than the main driver, how many additional drivers will be insured?</label>
						<select class="form-control" name="driver_select">
							<option disabled selected>Select One</option>
							<option value="">None</option>
							<option value="">One Driver</option>
							<option value="">Two Drivers</option>
							<option value="">Three Drivers</option>
							<option value="">Four Drivers</option>
							<option value="">Five Drivers</option>
							<option value="">Six Drivers</option>
						</select>
					</div>
				</fieldset>

				<fieldset class="form-group">
					<legend>Section Four: Sub Section: Additional Driver Info</legend>
					<div class="form-group">
						<label for="driver_name">Driver Name:</label>
						<input class="form-control" type="text" name="driver_name">
					</div>
					<div class="form-group">
						<label for="driver_gender">Driver Gender:</label>
						<label class="radio-inline"><input type="radio" name="name">Male</label>
						<label class="radio-inline"><input type="radio" name="name">Female</label>
					</div>
					<div class="form-group">
						<label for="driver_dob">Driver Date of Birth (MM/DD/YYYY):</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label for="marital_status">Driver Marital Status:</label>
						<select class="form-control" name="marital_status">
							<option disabled selected>Select One</option>
							<option value="">Married</option>
							<option value="">Single</option>
							<option value="">Divorced</option>
						</select>
					</div>
					<div class="form-group">
						<label for="current_work_status">Driver Current Work Status:</label>
						<select class="form-control" name="current_work_status">
							<option disabled selected>Select One</option>
							<option value="Employed">Employed</option>
							<option value="Homemaker">Homemaker</option>
							<option value="Student">Student</option>
							<option value="Government">Government</option>
							<option value="Military">Military</option>
							<option value="Retired">Retired</option>
							<option value="Unemployed">Unemployed</option>
						</select>
					</div>
					<div class="form-group">
						<label for="license_state_of_issue">Driver License State of Issue:</label>
						<select class="form-control" name="license_state_of_issue">
							<option disabled selected>Select One</option>
						</select>
					</div>
					<div class="form-group">
						<label for="tickets">How many TICKETS within the last 5 years:</label>
						<!-- was previously a select -->
						<input class="form-control" type="number" name="tickets" min="0" max="10">
					</div>
					<div class="form-group">
						<label for="at_fault_accidents">How many AT-FAULT ACCIDENTS within the last 5 years:</label>
						<!-- was previously a select -->
						<input class="form-control" type="number" name="at_fault_accidents" min="0" max="10">
					</div>
					<div class="form-group">
						<label for="non_fault_accidents">How many NON-FAULT ACCIDENTS within the last 5 years:</label>
						<!-- was previously a select -->
						<input class="form-control" type="number" name="non_fault_accidents" min="0" max="10">
					</div>
					<div class="form-group">
						<label for="drivers_license">Driver's License # (Optional):</label>
						<input class="form-control" type="text" name="drivers_license">
					</div>
				</fieldset>
				<fieldset class="form-group">
					<legend>Section Five: Main Driver</legend>
					<div class="form-group">
						<label for="first_name">First Name:</label>
						<input class="form-control" type="text" name="first_name">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name:</label>
						<input class="form-control" type="text" name="last_name">
					</div>
					<div class="form-group">
						<label for="church_membership">Church Membership:</label>
						<input class="form-control" type="text" name="first_name">
					</div>
					<div class="form-group">
						<label for="email">Email Address:</label>
						<input class="form-control" type="email" name="email">
					</div>
					<div class="form-group">
						<label for="phone">Phone Number:</label>
						<input class="form-control" type="text" name="phone">
					</div>
					<div class="form-group">
						<label for="street">Street Address:</label>
						<input class="form-control" type="text" name="street">
					</div>
					<div class="form-group">
						<label for="city">City:</label>
						<input class="form-control" type="text" name="city">
					</div>
					<div class="form-group">
						<label for="state">State:</label>
						<select class="form-control" name="state">
							<option disabled selected>Select One</option>
						</select>
					</div>
					<div class="form-group">
						<label for="zipcode">Zip Code:</label>
						<input class="form-control" type="text" name="zipcode">
					</div>
					<div class="form-group">
						<label for="residency">Have you lived at this address for less than 6 months?</label>
						<select class="form-control" name="residency">
							<option disabled selected>Select One</option>
							<option value="">Yes I Have</option>
							<option value="">No I Have Not</option>
						</select>
					</div>
					<div class="form-group">
						<label for="comments">Comments:</label>
						<textarea class="form-control" type="textarea" name="comments" row="10"></textarea>
					</div>
				</fieldset>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>

			</form>

		</section>
		<!-- /section -->
	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
