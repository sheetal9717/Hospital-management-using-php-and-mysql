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

  	$check = mysqli_query($conn,"SELECT * FROM patient WHERE P_email='$Email'");
	$data = mysqli_fetch_array($check);
	if( $data['P_email'] == $Email )
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
			$query="INSERT INTO `patient`(`P_name`, `P_email`, `P_password`, `Age`, `Gender`, `Phone_no`) VALUES ('$Name','$Email', '$Password', '$Age','$Gender','$Phone_no')";
			//$query = "INSERT INTO `patient`(`P_name`, `P_email`, `P_age`, `P_gender`, `P_phone_no`) VALUES ('$Name','$Email','$Age','$Gender','$Phone_no')";
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
		window.location.href = '../index.php';
	}else if( "<?php echo $r_successful ?>" === "0" ){
		alert('Registration not successful');
	}
</script>