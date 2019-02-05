<?php



	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$l_successful = "";
	$email = $_POST['P_email'];
	$password = $_POST['P_password'];
	
	$query = mysqli_query($conn,"SELECT * FROM patient WHERE P_email='$email'");
	$data = mysqli_fetch_array($query);
	if( $data['P_password']==$password )
	{
		echo "Login Successful!";
		session_start();
		$_SESSION['P_email'] = $data['P_email'];
		$_SESSION['P_login_status'] = 1;
		header('Location: show_data.php');
	}
	else
	{
		$l_successful = 0;
		
		
	}
	


?>

<script>
	
	if( "<?php echo $l_successful ?>" === "0" )
	{
		alert('Incorrect email or password!');
		window.location.href = 'Plogin.html';
	}
	
</script>