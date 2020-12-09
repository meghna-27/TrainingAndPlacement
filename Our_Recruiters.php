<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
body{
    padding: 0;
    margin: 0;
}
.container{
    position: relative;
    margin-top: 100px;
}
.container img{
    display : block;
    width : 100%;
}
nav{
    position: fixed;
    z-index: 10;
    left:0;
    right: 0;
    top:0;
    height: 100px;
    background-color: #36486c;
    padding: 0 5%;
}
nav .logo{
    float: left;
    width: 40%;
    height: 100%;
    display: flex;
    align-items: center;
    font-size: 24px;
    color: #ffffff;
}
nav .links{
    float : right;
    padding: 0;
    margin: 0;
    width : 60%;
    height: 100%;
    display: flex;
    justify-content: space-around;
}
nav .links li{
    list-style: none;
}
nav .links a{
    display: block;
    padding: 3px;
    font-size: 80%;
    font-weight: bold;
    color: #ffffff;
    text-decoration: none;
    text-align: center;
    line-height: 90px;
    text-transform: uppercase;
}
nav .links a:hover,
nav .links a.active{
    color: #4eec0f;
}
#nav-toggle{
    position: absolute;
    top : -100px;
}
nav .icon-burger{
    position: absolute;
    right: 5%;
    top: 50%;
    transform: translate(-50%);
    display: none;
}
nav .icon-burger .line{
    width: 30px;
    height: 5px;
    background-color: #ffffff;
    margin: 5px;
    border-radius: 3px;
}

@media screen and (max-width: 879px) {
    nav .logo{
        float: none;
        width: auto;
        justify-content: center;
    }
    nav .links{
        float: none;
        position: fixed;
        z-index: 9;
        left: 0;
        right: 0;
        top: 100px;
        bottom: 100%;
        width: auto;
        height: auto;
        flex-direction: column;
        justify-content: space-evenly;
        background-color: rgba(0,0,0,.8);
        overflow: hidden;
        transition: all .5s ease-in-out;
    }
    nav .links a {
        font-size: 20px;
    }
    nav .icon-burger{
        display: block;
    }
    nav :checked ~ .links {
        bottom: 0;
    }
    nav :checked ~ .icon-burger .line:nth-child(1){
        transform: translateY(10px) rotate(225deg);
    }
    nav :checked ~ .icon-burger .line:nth-child(3){
        transform: translateY(-10px) rotate(-225deg);
    }
    nav :checked ~ .icon-burger .line:nth-child(2){
        opacity: 0;
    }
}

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
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #009999;
  color: white;
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
  background-color: #36486c;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Training and Placement</title>
    <link rel="Stylesheet" href="stylenew.css">
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo"> Training & Placement </div>
    <ul class="links">
        <li><a href="index.html">Home</a></li>
            <li><a href="trainings.php">Training</a></li>
            <li><a class="active"  href="Our_Recruiters.php">Our Recruiters</a></li>
            <li><a href="ApplyNow.php">Apply Now</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="Contact-Us.php">Contact Us</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>
<body>

<div class="about-section">
  
</div>

<h2 style="text-align:center">Our Recruiters</h2>
<div class="row">
  <div class="column">
    <div class="card">
            <img src="infosys.png" alt="Infosys" style="width:100%" height="150">

      <div class="container">
        <h2>Infosys</h2>
        <p class="title"></p>
        <p>Infosys Limited, is an Indian multinational corporation that provides business consulting, information technology and outsourcing services.
        </p>
        <p>investors@infosys.com</p>
        <p>Required Qualification :BE IT,BE Computer,MBA</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
            <img src="merc.jpg" alt="Mercedes-Benz" style="width:100%" height="150">

      <div class="container">
        <h2>Mercedes-Benz</h2>
        <p class="title"></p>
        <p>Mercedes-Benz India currently has the widest network reach for any luxury car maker in India, as well as the smart brand and the EQ product.</p>
        <p>cs.ind@cac.mercedes-benz.com</p>
        <p>Required Qualification :BE Mechanical,MBA</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="siemens.jpg" alt="Siemens" style="width:100%" height="150">
      <div class="container">
        <h2>Siemens</h2>
        <p class="title"></p>
        <p>Siemens Limited is a holding company engaged in manufacturing of electric motors, generators, transformers and electricity distribution.</p>
        <p>info@siemens.com</p>
        <p>Required Qualification :BE Electrical,MBA</p>
      </div>
    </div>
  </div>
</div>

 <div class="column">
    <div class="card">
      <img src="Honeywell.png" alt="Honeywell Automation" style="width:100%" height="150">

      <div class="container">
        <h2>Honeywell</h2>
        <p class="title"></p>
        <p>The company's current name, Honeywell International Inc., is the product of a merger in which Honeywell Inc.</p>
        <p>HPSWeb@Honeywell.com</p>
        <p>Required Qualification :BE E&TC,MBA</p>
      </div>
    </div>
  </div>
</div>

 <div class="column">
    <div class="card">
           <img src="tcs.png" alt="TCS" style="width:100%" height="150">
      <div class="container">
        <h2>TCS</h2>
        <p class="title"></p>
        <p>TCS provides a wide range of information technology-related products and services including application development.</p>
        <p>info@tcssummiteurope.com</p>
        <p>Required Qualification :BE IT,BE Computer,MBA</p>
      </div>
    </div>
  </div>
</div>

 <div class="column">
    <div class="card">
            <img src="Mahindra.jpg" alt="Mahindra" style="width:100%" height="150">

      <div class="container">
        <h2>Mahindra</h2>
        <p class="title"></p>
        <p> is one of the largest vehicle manufacturers by production in India and the largest manufacturer of tractors in the world. </p>
        <p>mfinfd@mahindra.com </p>
        <p>Required Qualification :BE IT,BE Computer,MBA</p>
       
      </div>
    </div>
  </div>
</div>

 <div class="column">
    <div class="card">
                  <img src="bajaj.png" alt="bajaj" style="width:100%" height="150">
      <div class="container">
        <h2>Bajaj Automobiles</h2>
        <p class="title"></p>
        <p>Bajaj Auto Limited is an Indian multinational company, It manufactures motorcycles, scooters and auto rickshaws.</p>
        <p>info@bajaj.com</p>
                <p>Required Qualification :BE Mechanical,BE Eelectronics,MBA</p>

        
      </div>
    </div>
  </div>
</div>

 <div class="column">
    <div class="card">
                  <img src="jio.jpg" alt="jio" style="width:100%" height="150">

      <div class="container">
        <h2>JIO</h2>
        <p class="title"></p>
        <p>Jio is a mobile network operator in the country, it provides 4G LTE services and is the only VoLTE service provider in India</p>
        <p>info@jio.com</p>
        <p>Required Qualification :BE Electrical,BE E&TC,MBA</p>
       
      </div>
    </div>
  </div>
</div>

 <div class="column">
    <div class="card">
      <img src="Bosch.jpg" alt="Bosch" style="width:100%" height="150">
      <div class="container">
        <h2>BOSCH</h2>
        <p class="title"></p>
        <p>Bosch is a leading supplier services in the areas of Mobility Solutions, Industrial Technology, Consumer Goods, and Energy. </p>
        <p>bosch.corporate@in.bosch.com</p>
        <p>Required Qualification :BE Mechanical,BE Computer,MBA</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>



