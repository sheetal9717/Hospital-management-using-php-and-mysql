<?php

$link = mysqli_connect("localhost", "root", "" , "hospital");
if($link===false)
{
	die("Error: could not connect". mysqli_connect_error());
}
$sql="insert into register(Name, Phone_no, Age, Sex, Email, Password) values ('$_POST[Name]' , '$_POST[Phone_no]','$_POST[Age]' ,'$_POST[Sex]' ,'$_POST[Email]' ,'$_POST[Password]')";
if(mysqli_query($link, $sql))
{
	echo"Record inserted successfully!";
}else
{
	echo"Error: could not able to execute $sql".mysqli_error($link);
}
mysqli_close($link);
?>