<!DOCTYPE html>
<html>
<head>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

.btn2 {
  background-color: red;
  color: white;
}
</style>
</head>
<body>

<div style="text-align: center">
  <a href="home.php" ><button class="btn2" > Back to Home</button> </a>

<p><h2 >"Meet The Team" </h2></p>
</div>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="download.png" alt="akshay" style="margin-left: 100px; width:50%">
      <div class="container">
        <h2>Modi Akshay Kumar</h2>
        <p class="title">Team Leader</p>
        <p>email: modhiakshaykumar@gmail.com</p>
        <p>contact no: 9100624278</p>
        </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="tarun.jpg" alt="tarun" style="width:90%">
      <div class="container">
        <h2>Tarun Netha Ambala</h2>
        <p class="title">Team Mate</p>
        <p>tarunnetha001@gmail.com</p>
        </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="omkar.jpg" alt="omkar" style="margin-left: 100px;  width:60%">
      <div class="container">
        <h2>Omkar malvi</h2>
        <p class="title">Team mate</p>
       <p>malvishanu@gmail.com</p>
        </div>
    </div>
  </div>
</div>

</body>
</html>
