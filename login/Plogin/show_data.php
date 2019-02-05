<?php

	session_start();
	$Email = $_SESSION['P_email'] ;
	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$query = mysqli_query($conn,"SELECT * FROM `patient` WHERE P_email='$Email'");

	
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
	</style>	
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #088AA9;
}
li {
    float: left;
	border-right: 1px solid white;
	font-size: 15px;
	font-style: italic;
	
}
	

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 10px 10px;
    text-decoration: none;
}
li a.active{
	background-colour: white;
	color: white;
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

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #0E5BAD;
}</style>
<style>
<ul>
 <li title="Book appointment" style="float:right"><a href="about.php">book  </a></li>
</ul>
</style>
<body>
<center>
<h1 style="background-color:#00BFFF",style="text-align:center";>PATIENT DETAILS</h1><br><br>
<center>
<center>
<table width='400', height='450'>
	<tr>
	<th>Name</th>
	<th><?php echo $data['P_name'] ?> </th>
	</tr>
	
	<tr>
	<th>Email</th>
	<th><?php echo $data['P_email'] ?> </th>
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
<br>
<form action='book_appointment/book_an_appointment.php' method='POST'>
		<input type='submit' class='button1' value='Book Appointment'>
</form>		
</center>
</body>
</html>