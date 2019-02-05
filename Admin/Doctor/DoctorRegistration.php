<?php include('Dcheck.php') ?>


<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="DoctorRegistration.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery-3.3.1.slim.js"></script>
<script src="DoctorRegistration.js"></script>
</head>
<body>
	<div class="container">
				<form class="form-horizontal" role="form" method="POST" action="DoctorRegistration.php">
					<h2>Doctor Registration</h2><br>
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label">Name:</label>
						<div class="col-sm-9">
							<input type="text" name="Name"  placeholder="Full Name" class="form-control" autofocus required >
						</div>
					</div>

					<div class="form-group">
						<label for="phoneNumber" class="col-sm-3 control-label">Phone number:</label>
						<div class="col-sm-9">
							<input type="phoneNumber" name="Phone_no" placeholder="Phone number" class="form-control" required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label">Age:</label>
						<div class="col-sm-9">
							<input type="number" name="Age"  placeholder="Your Age in years" min="1" max="100" class="form-control" autofocus required >
						</div>
					</div>
				   
					<div class="form-group">
						<label class="control-label col-sm-3">Gender:</label>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4">
									<label class="radio-inline">
										<input type="radio" name="Gender" value="Female" required >Female
									</label>
								</div>
								<div class="col-sm-4">
									<label class="radio-inline">
										<input type="radio" name="Gender" value="Male" required >Male
									</label>
								</div>
								<div class="col-sm-4">
									<label class="radio-inline">
										<input type="radio" name="Gender" value="Others" required >Others
									</label>
								</div>
							</div>
						</div>
					</div> 
					
					<div  class="form-group"  >
						<label for="firstName" class="col-sm-3 control-label">Email:</label>
						<div class="col-sm-9">
							<input type="email" name="Email"  placeholder="Your Email Address" class="form-control" autofocus required >
						</div>	
					</div>
					
					<div <?php if (isset($email_error)): ?> class="form-group" <?php endif ?>  >
						<?php if (isset($email_error)): ?>
						<label for="firstName" class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<span style="margin: 0 auto; color:red;"><?php echo $email_error; ?> </span>
							</div>	
						<?php endif ?>
					</div>
					
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label">Password:</label>
						<div class="col-sm-9">
							<input type="password" name="Password"  placeholder="Your Password" class="form-control" autofocus required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label">Confirm Password:</label>
						<div class="col-sm-9">
							<input type="password" name="Cppassword"  placeholder="Confirm Your Password" class="form-control" autofocus required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label" >Select specialist:</label>
						<div class="col-sm-9">
						<select name="sp">
							<option value="Dentist" required >Dentist</option>
							<option  value="Cardiologist" required>Cardiologist</option>
							<option value="Neurologist" required>Neurologist</option>
							<option  value="Nephrologist" required>Nephrologist</option>
						
						
						</select>	
						</div>
					</div>	
					
					<div <?php if (isset($pass_error)): ?> class="form-group" <?php endif ?>  >
						<?php if (isset($pass_error)): ?>
						<label for="firstName" class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<span style="margin: 0 auto; color:red;"><?php echo $pass_error; ?> </span>
							</div>	
						<?php endif ?>
					</div>
					
					<br>
					<button type="submit" name="button" class="btn btn-primary btn-block">Register</button>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label"></label>
						<div class="col-sm-9">
							<a style = "margin-left: 50px" href="../../index.php" >Back to Home Page</a>
						</div>
					</div>
					
					
					
				</form>
	</div>
</body>
</html>