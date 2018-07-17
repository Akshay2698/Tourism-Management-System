<?php
require 'dbconfig/config.php'
?>

<?php
if(isset($_POST['submitbtn']))
{
	$username = $_POST['emailid'];
	$password = $_POST['pass'];
	$cpassword = $_POST['cpass'];

	if($password == $cpassword)
	{
		$query = "select * from logindetails WHERE userid = '$username' ";

		$query_run = mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript">
			alert("user already exists, try another username")
			</script>';
		}
		else{
			$query = "insert into logindetails values ('$username','$password')";

			$query_run = mysqli_query($con,$query);

			if($query_run){
				echo '
				<script type="text/javascript"> alert("user registered... go to login page to login")

				</script>
				<a href="loginacc.php">
				<input type="button" value="go to login page">
				</a>';
			}
			else{
				echo '<script type="text/javascript">alert("error")
				</script>';
			}
		}
	}
	else{
		echo '<script type="text/javascript"> alert("password and confirm password doe not match")
</script>
<a href="signup.php">
				<input type="button" value="go to signup page">
				</a>'
		;
	}
}