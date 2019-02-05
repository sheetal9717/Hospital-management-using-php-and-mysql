<?php

	session_start();
	$Email = $_SESSION['D_email'] ;
	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$query = mysqli_query($conn,"SELECT * FROM `doctor` WHERE D_email='$Email'");

	
	$data = mysqli_fetch_array($query);
	
	//echo $data['P_name'];
	//echo $data['P_email'];
	//echo $data['P_phone_no'];
	
	
	
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
  .button1 {
    background-color: #00BFFF;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
	</style>	
</head>
<body>
<center>
<h1 style="background-color:#00BFFF",style="text-align:center";>DOCTOR'S DETAIL</h1><br><br>
<center>
<center>
<table width='400', height='450'>
	<tr>
	<th>Name</th>
	<th><?php echo $data['D_name'] ?> </th>
	</tr>
	
	<tr>
	<th>Email</th>
	<th><?php echo $data['D_email'] ?> </th>
	</tr>

	<tr>
	<th>Age</th>
	<th><?php echo $data['Age'] ?> </th>
	</tr>
	
	<tr>
	<th>Gender</th>
	<th><?php echo $data['Gender'] ?> </th>
	</tr>
	
	<tr>
	<th>Phone Number</th>
	<th><?php echo $data['Phone_no'] ?> </th>
	</tr>
	
</table>
<form action='../../index.php' method='POST'>
		<input type='submit' class='button1' value='Back to Home Page'>
</form>		
</center>
</body>
</html>