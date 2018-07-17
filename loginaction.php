
<html>
<body>

<?php

$usern="user";
$passn="user123";
$user= $_POST['user'];
$pass= $_POST['pass'];

if(($user==$usern)&&($pass==$passn))
{
	echo"logged in";
	?>
	<a href="home.php">
		<button>go to home</button>
	</a>

	<?php
}
else
{
	echo"errorrrrr";
	?>
	<a href="loginacc.php">
		<button>go to login agai<n/button>
	</a>
	<?php
}
?>

</body>
</html>