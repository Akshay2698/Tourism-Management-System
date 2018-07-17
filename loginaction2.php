<?php

require 'dbconfig/config.php'

?>
<?php
session_start();
?>
<?php

if(isset($_POST['loginbtn']))
{
	$username= $_POST['username'];
	$password= $_POST['password'];

	$query="select * from logindetails WHERE 
	userid='$username' AND
	password='$password'";

	$query_run = mysqli_query($con,$query);

	if(mysqli_num_rows($query_run)>0)
	{
		$_SESSION['username']=$username;
		header('location:home.php');
	}
}