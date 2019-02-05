<?php
	
	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	$speciality = $_POST['sp'];
	$query = mysqli_query($conn,"SELECT * FROM `doctor` WHERE D_speciality='$speciality'");
	
	
?>


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
				<form class="form-horizontal" role="form" method="POST" action="confirm.php">
					<h2>BOOK AN APPOINTMENT</h2><br>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label" >Selected specialist:</label>
						<div class="col-sm-9">
						<select name="sp">
							<option value="<?php echo $speciality; ?>" required ><?php echo $speciality; ?></option>
						</select>	
						</div>
					</div>
					
					<div class="form-group">
						<label for="firstName" class="col-sm-3 control-label" >Select Doctor:</label>
						<div class="col-sm-9">
						<select name="doctor_email">
							<?php
							while($data = mysqli_fetch_array($query))
							{
							echo "<option value='".$data['D_email']."'required >".$data['D_name']."</option>";
							}
						?>
						
						</select>	
						</div>
					</div>	
					
					<div class="form-group">
						<label for="phoneNumber" class="col-sm-3 control-label">Date of appointment:</label>
						<div class="col-sm-9">
							<input type="date" name="Date" placeholder="date of appointment" class="form-control" min="<?php echo $today_date; ?>"  required >
						</div>
					</div>
					
					<br>
					<button type="submit" name="button" class="btn btn-primary btn-block">Book Appointment</button>
					
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
		
		