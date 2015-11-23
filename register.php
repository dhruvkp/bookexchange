<?php
	include 'header.php';
?>
     <div class="main">
      <div class="shop_top">
	     <div class="container">
						<form action="registration_event.php" id="register_form" method="POST">
								<div class="register-top-grid">
										<h3>PERSONAL INFORMATION</h3>
										<div class="top">
											<span>First Name<label>*</label></span>
											<input name="firstname" type="text">
										</div>
										<div class="top">
											<span>Last Name<label>*</label></span>
											<input name="lastname" type="text">
										</div>
										<div class="top">
											<span>Email Address<label>*</label></span>
											<input name="email" type="text">
										</div>
										<div class="top">
											<span>Choose Username<label>*</label></span>
											<input name="username" type="text">
										</div>
										<div class="top">
											<span>Gender</span>
											<select name="gender">
												<option>Female</option>
												<option>Male</option>
												<option>Other</option>
											</select>
										</div>
										<div class="top">
											<span>Birth date</span>
											<input type="text" id="datepicker" name="dob">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>ADDRESS INFORMATION</h3>
										<div class="top">
											<span>Address line #1<label></label></span>
											<input type="text" name="address1">
										</div>
										<div class="top">
											<span>Address line #2<label></label></span>
											<input type="text" name="address2">
										</div>
										<div class="top">
											<span>Zipcode<label>*</label></span>
											<input type="text" name="zipcode" id="zipcode">
										</div>
										<div class="top">
											<span>City<label>*</label></span>
											<input type="text" id="city">
										</div>
										<div class="top">
											<span>State<label>*</label></span>
											<input type="text" id="state">
										</div>
										<div class="top">
											<span>Country<label>*</label></span>
											<input type="text" id="country">
										</div>
										<div class="top">
											<span>Contact Number<label>*</label></span>
											<input type="text" name="contact">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>LOGIN INFORMATION</h3>
										<div class="top">
											<span>Password<label>*</label></span>
											<input name="password" type="password">
										</div>
										<div class="top">
											<span>Confirm Password<label>*</label></span>
											<input type="password">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit">
						</form>
					</div>
		   </div>
	  </div>
<?php
	include 'footer.php';
?>
