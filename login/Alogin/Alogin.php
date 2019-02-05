<?php



	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	
	$l_successful = "";
	$email = $_POST['A_email'];
	$password = $_POST['A_password'];
	
	if( $password=='toor' and $email=='admin@gmail.com')
	{
		echo "Login Successful!";
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
		window.location.href = 'Alogin.html';
	}
</script>