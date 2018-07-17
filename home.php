<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<title>
home page
</title>

<style>


.header {

  background-color: #787878;
  padding: 25px;
  text-align: center;
}

.hp{
	color: white;
	font-size: 50px;

}
#navbar {
  overflow: hidden;
  background-color: black;
}


#navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: red;
  color: black;
}


#navbar a.active {
  background-color: red;
  color: white;
}

.pad{
	padding-top: 50px;
}
.gg{
	float:left;
	border-color:black;
	border-style:solid;
}

.gg:hover{
	border-color: red;
	border-style: dashed;
}

.name1{
	text-align: center;
	font-weight: bold;
	font-family: Times new roma;
}
</style>
</head>

<body>
<?php 
echo 'welcome  '.$_SESSION['username'];
?>
<div class="header">
  <h2 class="hp">HolidayPoP</h2>


</div>


<div id="navbar">
  <a class="active" href="home.php">Home</a>
  <a href="package.php">Packages</a>
  <a href="hottours.php">HOT Tours</a>
  <a href="team.php">Contact</a>
 
</div>

<div class="pad">
	<p style="text-align: center;"><h1>Trending Tours------------------------------------------------------------------------------------------</h1></p>
<a href="goainfo.php">
	<div class="gg" style="width:250px; height:250px;  margin-left:100px;">
		<img src="14.jpg" alt=beach image style="width:100%">
		<div class="name1">
		<p><h1>Goa</h1></p>
	</div>
	</div>
</a>

<a href="goainfo.php">
	<div class="gg" style="width:250px; height:250px;  margin-left:150px;">
		<img src="ladakh.jpg" alt=beach image style="width:100%">
		<div class="name1">
		<p><h1>ladakh</h1></p>
	</div>
	</div>
</a>

<a href="goainfo.php">
	<div class="gg" style="width:250px; height:250px;  margin-left:150px;">
		<img src="21.jpg" alt=beach image style="width:100%">
		<div class="name1">
		<p><h1>Manali</h1></p>
	</div>
	</div>
</a>



<a href="goainfo.php">
	<div class="gg" style="width:250px; height:250px;  margin-left:100px; margin-top: 100px;">
		<img src="20.jpg" alt=beach image style="width:100%">
		<div class="name1">
		<p><h1>bir</h1></p>
	</div>
	</div>
</a>



<a href="goainfo.php">
	<div class="gg" style="width:250px; height:250px;  margin-left:150px; margin-top: 100px;">
		<img src="10.jpg" alt=beach image style="width:100%">
		<div class="name1">
		<p><h1>Jodhpur</h1></p>
	</div>
	</div>
</a>


<a href="goainfo.php">
	<div class="gg" style="width:250px; height:250px;  margin-left:150px; margin-top: 100px;">
		<img src="1.jpg" alt=beach image style="width:100%">
		<div class="name1">
		<p><h1>shimla</h1></p>
	</div>
	</div>
</a>
<form action="loginacc.php" method="post">
<input type="submit" value="Log out" name="logout" style="margin-top: 700px; margin-left:-600px; font-size: 30px; font-weight: bold; background-color: yellow;" />
</form>


<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:loginacc.php');
}
?>


</div>
	


</body>
</html>