<!doctype html>
<html>
<head>
<title> signup page </title>
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


	<div class="container">
			<p style="text-align: right;"><h1>Sign up</h1></p>
	<form action="signupaction2.php" method="post">
		
		<p>
			<label> Email id </label>
			<input type="email" name="emailid" id="email">
		</p>

		<p>
			<label> create password </label>
			<input type="password" name="pass" id="pass">
		</p>
		<p>
			<label> confirm password </label>
			<input type="password" name="cpass" id="cpass">
		</p>


		<p>
			<input type="submit" name="submitbtn" value="signup">
		</p>
	</form>
</div>
</body>
</html>
