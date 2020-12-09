<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Application Form </title>
    
    <link rel="Stylesheet" href="header_footer.css">
    
    <style>

      html, body {
      background-image: url("i1.jpg");
      background-repeat: no-repeat center; /*no-repeat center;*/
      background-size: cover;
      min-height: 100%;
      }

      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 17px;
      color: white;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      h2 {
      color:white;
      margin: 0 0 0 8px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 70%;
      padding: 20px;
      border-radius: 6px;
      /* */background: rgba(0, 0, 0, 0.7);  
      }
      
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  black;/*#669999*/
      }
      .item input, .item select, .item textarea {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: black;/*#669999*/

      }
      .item {
      position: relative;
      margin: 10px 0;
      
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;

      }
      .colums div {
      width:48%;

      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: black;/*#a3c2c2*/
      padding-left: 300px;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      padding-left: 230px; 
      padding-right: 30px; 
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong> Training & Placement</strong></div>
    <ul class="links">
        <li><a  href="index.php">Home</a></li>
        <li><a href="trainings.php">Training</a></li>
        <li><a href="Our_Recruiters.php">Our Recruiters</a></li>  
        <li><a class="active" href="ApplyNow.php">Apply Now</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="Contact-Us.php">Contact Us</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>

   <div class="testbox">
      <form  method="POST" >
        <br><h2 style="font-size:30px;padding-left:320px;font-family:Charcoal">Application Form</h2><br><br>
        <div class="colums">
          <div class="item">
            <label for="fname"> First Name<span>*</span></label>
            <input id="fname" type="text" name="fname" required/>
          </div>
          <div class="item">
            <label for="lname"> Last Name<span>*</span></label>
            <input id="lname" type="text" name="lname" required/>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" required/>
          </div>
          <div class="item">
            <label for="birthday">Birth Date<span>*</span></label>
            <input id="birthday" type="date"   name="birthday" required/>
          </div>
          <!--
          <div class="question">
            <label>Gender</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_1" name="type"/>
                <label for="radio_1" class="radio"><span>Male</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_2" name="type"/>
                <label for="radio_2" class="radio"><span>Female</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_3" name="type"/>
                <label for="radio_3" class="radio"><span>Other</span></label>
              </div>
            </div>
          </div>-->
        <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input id="eaddress" type="text"   name="eaddress" required/>
          </div>
          <div class="item">
            <label for="address1">Address 1<span>*</span></label>
            <input id="address1" type="text"   name="address1" required/>
          </div>
          <div class="item">
            <label for="address2">Address 2</label>
            <input id="address2" type="text"   name="address2" required/>
          </div>
          <div class="item">
            <label for="state">State<span>*</span></label>
            <input id="state" type="text"   name="state" required/>
          </div>
          <div class="item">
            <label for="zip">Zip/Postal Code<span>*</span></label>
            <input id="zip" type="text" name="zip" required/>
          </div>
          <div class="item">
            <label for="city">City<span>*</span></label>
            <input id="city" type="text"   name="city" required/>
          </div>
          <div class="item">
            <label for="birthday">Available Start Date<span>*</span></label>
            <input id="birthday" type="date"   name="startdate"  required/>
          </div>
          <!--<div class="item">
            <label for="filename">Click on the "Choose File" button to upload a file<span>*</span></label>
            <input type="file" id="myFile" name="filename"  required/>
          </div>-->
          <div class="btn-block">
                <button type="submit" name="submit" value="applied" >Submit</button>
              </div>
         </form>
    </div>

  </body>
</html>

<?php
    include 'connect.php'; /* PHP file for connecting database with form */

    if(isset($_POST["submit"])){ /*The below code will work only in 'Contact us' button is pressed*/

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $birthdate = $_POST['birthday'];
        $eaddress = $_POST['eaddress'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $startdate = $_POST['startdate'];



        $insertQuery = " insert into application(fname,lname,phone,birthday,eaddress,address1,address2,state,zip,city,startdate) values ('$fname','$lname','$phone','$birthdate','$eaddress','$address1','$address2','$state','$zip','$city','$startdate')";
        $result = mysqli_query($con, $insertQuery); /*This will insert the record into our table 'ContactUs' in database 'Registration' */

        if($result){
            ?>
            <script>
                alert("Information Stored Successfully!"); 
                header('location:ApplyNow.php');

            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Please try again");
            </script>
            <?php 
        }
    }
    
?>