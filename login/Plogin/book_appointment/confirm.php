<?php 
	 
	$r_successful = 0;
  $conn = mysqli_connect('localhost', 'root', '', 'hospital');

	$r_successful = 0;
	
	session_start();
  	$Email = $_SESSION['P_email'];
	$doctor_email = $_POST['doctor_email'];

  
		//INSERT INTO `appointment`(`email`, `date_of_appointment`, `specialist`, `Doctor_email`) VALUES ('$Email', '$_POST[Date]','$_POST[sp]', '$doctor_email')
		$sql = "INSERT INTO `appointment`(`email`, `date_of_appointment`, `specialist`, `Doctor_email`) VALUES ('$Email', '$_POST[Date]','$_POST[sp]', '$doctor_email')";
		$query = mysqli_query($conn,$sql);
		
			echo "test";
			$sql1 = "SELECT max(appointment_id) FROM `appointment` WHERE Doctor_email='$doctor_email' and email='$Email' ";
			
			$check1 = mysqli_query($conn, $sql1);
			
			$data2 =  mysqli_fetch_array($check1);
			$app_id1 = $data2[0];
			//echo "a_id: ".$app_id1;
			
			//echo $Email." ";
			//echo $doctor_email." ";
			//echo $data2[0]." ";
			
			
			
			$_SESSION['app_id']=$app_id1;
			header('Location: details_appointment.php');
					


		mysqli_close($conn);
	

  	

  
?>

<script>
	
	
	if(<?php echo $r_successful?>===1){
		alert('Apointment Booking Not Successful');
	}
</script>