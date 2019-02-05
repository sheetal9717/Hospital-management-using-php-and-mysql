<?php 

 if (isset($_POST['button'])){

  $conn = mysqli_connect('localhost', 'root', '', 'hospital');
  if($conn===false)
  {
	 die("Error".mysqli_connect_error());
  } 

	$r_successful = -1;
  	$Email = $_POST['Email'];
  	$Password = $_POST['Password'];
	$cppassword = $_POST['Cppassword'];
	//$check1 = mysqli_query($conn, "SELECT * FROM doctor WHERE D_speciality = '$_POST[sp]'");
	//$data1 =  mysqli_fetch_array($check1);

  	$check = mysqli_query($conn,"SELECT * FROM doctor WHERE D_email='$Email'");
	$data = mysqli_fetch_array($check);
	if( $data['D_email'] == $Email )
	{
		$email_error = "Email already registerd!";
	}
	else if( !($Password == $cppassword) )
	{
		$pass_error = "Both passwords do not match";
	}
	else
	{
			$Name = $_POST['Name'];
			$Phone_no = $_POST['Phone_no'];
			$Age = $_POST['Age'];
			$Gender = $_POST['Gender'];
			$speciality = $_POST['sp'];
			$query="INSERT INTO `doctor`(`D_name`, `D_email`, `D_password`, `D_speciality`, `Age`, `Gender`, `Phone_no`) VALUES ('$Name','$Email', '$Password', '$speciality', '$Age','$Gender','$Phone_no')";
			
			if(mysqli_query($conn,$query)){
				$r_successful = 1;
			
			}else{
				$r_successful = 0;
			}
			
			
			
	}

  	
 }	
  
?>

<script>
	
	if( "<?php echo $r_successful ?>" === "1" )
	{
		alert('Registration Successful');
	}else if( "<?php echo $r_successful ?>" === "0" ){
		alert('Registration not successful');
	}
</script>