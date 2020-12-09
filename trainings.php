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

.training {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
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
  background-color: #000;
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
    <title>Trainings</title>
    <link rel="Stylesheet" href="stylenew.css">
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo">Training &  Placement</strong></div>
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="trainings.php"  class="active">Training</a></li>
        <li><a href="Our_Recruiters.php">Our Recruiters</a></li>
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

<br>
<br>
<br>
<br>
<br>
<br>

<h1 style="text-align:center">Our Trainings</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="ap.jpg" alt="Aptitude" style="width:100%">
      <div class="container">
        <h2>Aptitude</h2>
        <p class="title">Instructor : Mr.Ross Geller<br>pHD</p>
        <p>Our Aptitude course is a more-than-enough pack by which you can practice everything leaving no aptitude topic unturned. Get trained to static, dynamic and adaptive kind of aptitude tests in a single course. Be it a competitive exam or a placement test, this course will upskill you to ‘solve-all’ type of candidate. Practice with us to even things out!<br> If you are preparing for Aptitude Exams, this is a treat!</p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="gd.jpg" alt="gd" style="width:100%">
      <div class="container">
        <h2>Group Discussion</h2>
        <p class="title">Instructor:Mrs Monica Bing</p>
        <p>This module looks at group discussion situations with the focus on video conferencing. By looking at various scenarios, you will learn key language for group discussion as well as gain some business etiquette.This detailed course will help you understand all the important concepts and topics of Group Discussion.Get expert tips on how to prepare for Group Discussion (GD) for MBA entrances and for campus recruitment.This course is good for management learners and students who want to learn about Group Discussion Strategies.</p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="l.jpg" alt="logical reasoning" style="width:100%">
      <div class="container">
        <h2>Logical Reasoning</h2>
        <p class="title">Instructor:Mr.Joey Tribbiani</p>
        <p>The goal of this course is to help candidates to prepare for Logical Reasoning tests that assess reasoning through a set of videos. Many large companies conduct Logical Reasoning tests for new joiners.A logical reasoning test is a form of psychometric testing that is widely used by corporate employers to help assess candidates during their recruitment process.‘Psychometric’ is just a fancy way of saying ‘measuring mental ability’ and logical reasoning tests are designed to measure your non-verbal skills. We’ll cover this in more detail later.</p>
        
        
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="gr.png" alt="gd" style="width:100%">
      <div class="container">
        <h2>Graphic Designing</h2>
        <p class="title">Instructor:Mr Chandler Bing</p>
        <p>The creative and communication industries are seeing a phenomenal growth owing to rise in consumerism, advancement in technology, and increased government investment.In this program, the emphasis is on understanding visual design basics, process of developing graphic products like visual identity, leaflets, brochures, posters, web pages, etc. and execution of the same graphic products.As employed professionals, they will enter into such positions as graphic designer and/or technical support staff, depending on individual abilities etc.</p>
        
        
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      <img src="f.jpg" alt="gd" style="width:100%">
      <div class="container">
        <h2>Learn French</h2>
        <p class="title">Instructor:Phoebe Buffay</p>
        <p>Learn French language and culture through our trainings. Whether you are a complete beginner or almost fluent, you can learn something from one of our top-rated French instructors.You can get an easy introduction to French or just consolidate your basic knowledge with the beginner's course.The many cognitive benefits of learning languages are undeniable. People who speak more than one language have improved memory, problem-solving and critical-thinking skills, enhanced concentration, ability to multitask, and better listening skills.  </p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="w.jpg" alt="gd" style="width:100%">
      <div class="container">
        <h2>Web Development</h2>
        <p class="title">Instructor:Rachel Green</p>
        <p>The Web Development Course goes deeper than most college curriculums. You will programme in several languages and frameworks (including JavaScript, ReactJS and NodeJS).Our projects are based on real world problems.This full stack Web Development Course is developed by our expert team from IIT Delhi together with our faculty from tech companies like Google, Amazon and Microsoft. This enables our students to not only learn the most advanced and in demand technologies in the software ecosystem, but also be fully employable from day 1!</p>
        
        
      </div>
    </div>
  </div>

  

</body>
</html>