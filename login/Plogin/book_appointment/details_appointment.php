<?php

	session_start();
	$app_id = $_SESSION['app_id'];
	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	$q = "SELECT * FROM appointment WHERE appointment_id ='$app_id' ";
	$query = mysqli_query($conn,$q);
	$data = mysqli_fetch_array($query);

	
	
	
	
?>	

<html>
<head>
	<style>
		table{
		border-collapse: collapse;
	}
	th,td{
		border: 3px solid black;
		padding: 10px;
		font-size: 20px;
		text-align: center;
		
	}
	tr:nth-child(even) {
    background-color:white 
  }
  tr:nth-child(odd) {
    background-color:#cce6ff;;
  }
	</style>	
</head>
<body>
<center>
<h1 style="background-color:#00BFFF",style="text-align:center";>APPOINTMENT DETAIL</h1><br><br>
<center>
<center>
<table width='400', height='450'>
	<tr>
	<th>Appointment Id</th>
	<th><?php echo $data['appointment_id'] ?> </th>
	</tr>
	
	<tr>
	<th>Patient's Email</th>
	<th><?php echo $data['email'] ?> </th>
	</tr>

	<tr>
	<th>Doctor's Email</th>
	<th><?php echo $data['Doctor_email'] ?> </th>
	</tr>
	
	<tr>
	<th>Doctor's Speciality</th>
	<th><?php echo $data['specialist'] ?> </th>
	</tr>
	
	<tr>
	<th>Date of Appointment</th>
	<th><?php echo $data['date_of_appointment'] ?> </th>
	</tr>
	
</table>	
</center>
</body>
</html>