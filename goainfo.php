<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box}
body {
    margin: 0;
    font-family: Arial;
}
.column {
    float: left;
    width: 25%;
    padding: 10px;
}
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

.container {
    position: relative;
    display: none;
}

#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
.hero-image {
  background-color: #787878;
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.tab {
    float: left;
    border: 3px solid black;
    background-color: white;
    width: 20%;
    height: 500px;
}

.tab button {
    display: block;
    background-color: red;
    color: white;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

.tab button:hover {
    background-color: #ddd;
}
.tab button.active {
    background-color: #ccc;
}

.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 500px;
}

.btn2 {
  background-color: red;
  color: white;
}

.btn3{
  background-color: green;
  color:white;
 
  margin-top: 30px;
  font-weight: bold;
  margin-left: 900px;

}

.btn3 :hover{
  background-color: black;

}
.pagename{
  font-family: times new roman;
  font-weight: bold;
  font-size: 70px;
}



</style>
</head>
<body>
<a href="home.php" ><button class="btn2" > Back to Home</button> </a>
<p style="margin-left: 100px; font-weight: bold; font-size: 60px;"> Goa..</p>
<a href="bookthistour.php">
<button class="btn3">Book This Tour</button>
</a>
<div class="hero-image">
  <div class="hero-text">
    <h1 >GOA</h1>
    
  </div>
</div>

<p> </p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'about')" id="defaultOpen">About</button>
  <button class="tablinks" onclick="openCity(event, 'iternary')">Iternary</button>
  <button class="tablinks" onclick="openCity(event, 'gallery')">gallery</button>
</div>

<div id="about" class="tabcontent">
  <h1 style="text-align:center">GOA</h1>
  <p>Lying on the western coast of Indian Peninsula, Goa is a mix of natural andcultural heritage. Until the year 1961, Goa was under the Portuguese rule that greatly influenced its architecture and lifestyle. Sun-kissed sand, the azure Arabian Sea and clear blue skies, all of it beckons thousands of tourists to this vacation spot. Be it surfing, sightseeing or partying, there are innumerable fun activities to be indulged in with Goa tour packages. Goa can easily be reached by air, train or road. Goa Airport, more commonly known as Dabolim Airport, is approximately 30 kilometres from Panjim – the state capital. It is well connected with other Indian states by railway lines and national highways. With Goa beach holidays thousands of domestic and international tourists come here every year. There is wide range of good hotels & resorts in Goa for visitors where tourist can feel the comfort of home. This lively state offers spectacular landscapes and a number of tangible and intangible attractions to its visitors.<br>

<br>
<br>
The scenic Dudhsagar Waterfall, located on Mandovi River, is one of the most precious gifts of nature to Goa. This four-tiered, 600 metres high waterfall gushes down with astounding force and magnificence, rendering itself a sight to behold. Tourists flock the idyllic beaches of the state, including Morjim, Chapora and Anjuna. The state is also abundantly blessed with splendid cultural heritage. With Goa tour packages, do not forget to visit Se Cathedral, Basilica of Bom Jesus and Shantadurga Temple. The primarily seafood cuisine of Goa is also a highlight among tourists. A family tour and honeymoon holiday in Goa can be made memorable by partaking in every beautiful experience this coastal state has to offer. Enjoy a sunbath on the sandy beaches or witness an inexhaustible party spirit. The magical charm of Goa lies in each one of its aspect, be it the endless sea, incredible landscapes, irresistible food or the enthusiasm with which locals live. This remarkable beach destination is certainly one of the best and most-lovable tourist spots in India.</p>
</div>

<div id="iternary" class="tabcontent">
  <h3>Iternary</h3>

<p> Cost:5000/- per head</p>

  <h3>Day 1:- Arrive Goa</h3>
<p>
<b>Meal<b>: Dinner<br></p>

On arrival on Airport/Thivim Station our representative will greet you and let you in the hotel. Rest in leisure<br>

Overnight stay at hotel

<h3>Day 2:-South Goa</h3>

Meal:Breakfast and dinner<br>

Points To Visit. :- Today proceed for a sightseeing trip to discover the churches of old Goa which reflect the richness of the Greco Roman architectural style,Basilica of Bom Jesus. Colva Beach.Also enjoy shopping in Panjim followed by a boat cruise on the Mandovi River.

Overnight stay at hotel

<h3>Day 3:- North Goa</h3>

Meal:Breakfast and dinner<br>

Points to Visit:- proceed for your visit to Calangute Beach ,Fort Agoda and Vagatore Beach. Enjoy free time on the beach<br>

Cruise Ride<br>

Overnight stay at Hotel<br>


</div>

<div id="gallery" class="tabcontent">
  <h3>gallery</h3>


<div style="text-align:center">
  <h2>Tabbed Image Gallery</h2>
  <p>Click on the images below:</p>
</div>

<div class="row">
  <div class="column">
    <img src="goa.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="goa1.jpeg" alt="Fjords" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="goa2.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="goa3.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>

</div>



<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>
    
</body>
</html> 
