<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial}

input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=number], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: red;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: green;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}
.btn2 {
  background-color: red;
  color: white;
}
</style>
</head>
<body>
<a href="home.php" ><button class="btn2" > Back to Home</button> </a>
<h3>Contact Form</h3>

<div class="container">
  <form action="checkbookthis.php" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <br/>
    <label for="mno">Mobile no</label>
    <input type="number" id="mno" name="mno" placeholder="Your mobile no">
<br/>
     <label for="email">Email id</label>
    <input type="text" id="email" name="email" placeholder="Your email id"><br/>
       <label for="email">Age</label>
    <input type="text" id="age" name="age" placeholder="Your Age">
    
<br/>
    <input type="submit" value="Submit">

  </form>

</div>

</body>
</html>
