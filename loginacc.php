<!doctype html>
<html>
<head>
<title> login page </title>
<style>
.container {
	background-color: gray;
    padding-left: 200px;
    padding-top: 50px;
    border-style: dotted;
    margin-left:350px;
    margin-right:350px;

}

.btn2 {
  background-color: red;
  color: white;
}
</style>
</head>
<body>
	<center><p><h1>Holiday POP</h1></p></center>

	<div class="container">

			<p style="text-align: right;"><h2>Log in</h2></p>
	<form action="loginaction2.php" method="post">
		<p>
			<label> Username </label>
			<input type="text" name="username" id="user" />
		</p>
		<p>
			<label> Password </label>
			<input type="password" name="password" id="pass">
		</p>
		<p>
			<input type="submit" name="loginbtn" style="background-color:green;font-weight: bold;" value="login">
		</p>
		<a href="signup.php">
		<p>
			<input type="button" name="btm" style="background-color:blue;font-weight: bold; font-family: italic; font-size: 20px;" value="create new account">
		</p>
</a>
	</form>


</div>
</body>
</html>
