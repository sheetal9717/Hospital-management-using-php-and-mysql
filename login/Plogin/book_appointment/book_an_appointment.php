


<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="book_an_appointment.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery-3.3.1.slim.js"></script>
<script src="Registration.js"></script>
</head>
<body>
<?php $today_date = date("Y-m-d");   ?>

	<div class="container">
				<form class="form-horizontal" role="form" method="POST" action="details.php">
					<h2>BOOK AN APPOINTMENT</h2><br>
					
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
					
					<br>
					<button type="submit" name="button" class="btn btn-primary btn-block">Get Doctors List</button>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label"></label>
						<div class="col-sm-9">
							<!--<a style = "margin-left: 25px" href="../login/Plogin/Plogin.html" >Already Registerd? Login here</a>-->
						</div>
					</div>
					
					
					
				</form>
	</div>
</body>
</html>
		
		