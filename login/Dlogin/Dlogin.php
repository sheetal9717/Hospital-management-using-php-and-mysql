
<?php

	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$l_successful = "";
	$email = $_POST['D_email'];
	$password = $_POST['D_password'];
	
	$query = mysqli_query($conn,"SELECT * FROM doctor WHERE D_email='$email'");
	$data = mysqli_fetch_array($query);
	if( $data['D_password']==$password )
	{
		echo "Login Successful!";
		session_start();
		$_SESSION['D_email'] = $data['D_email'];
		$_SESSION['D_login_status'] = 1;
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
		window.location.href = 'Dlogin.html';
	}
</script>