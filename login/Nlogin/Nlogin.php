<?php



	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$l_successful = "";
	$email = $_POST['N_email'];
	$password = $_POST['N_password'];
	
	$query = mysqli_query($conn,"SELECT * FROM nurse WHERE N_email='$email'");
	$data = mysqli_fetch_array($query);
	if( $data['N_password']==$password )
	{
		echo "Login Successful!";
		session_start();
		$_SESSION['N_email'] = $data['N_email'];
		$_SESSION['N_login_status'] = 1;
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
		window.location.href = 'Nlogin.html';
	}
</script>