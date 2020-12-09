<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="Contact-Us.css">
    <link rel="Stylesheet" href="header_footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Contact-Us</title>

</head>
<body>

    <nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo">Training & <br><strong> Placement</strong></div>
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="trainings.php">Training</a></li>
        <li><a href="Our_Recruiters.php">Our Recruiters</a></li>  
        <li><a href="ApplyNow.php">Apply Now</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a class="active" href="Contact-Us.php">Contact Us</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>
    
      
    <div class="container-contact">
        <div class="contact-box">
            <div class="leftside"></div>
            <div class="rightside">
                <h2>Contact Us</h2>
                <form method="POST">
                    <input type="text" name="name" class="field" placeholder="Your Name" >
                    <input type="email"  name= "email" class="field" placeholder="Your Email">
                    <input type="phone" name="mobno" class="field" placeholder="Your Mobile Number" >
                    <textarea class="field area" name="msg" placeholder="Drop us a line!" ></textarea>
                    <button type="submit" class="btn" name="submit">Send</button>
                </form>
            </div>
        </div>
    </div>



    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>Pages</h2>
                <div class="footer-content">
                    <ul id="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="trainings.php">Training</a></li>
                        <li><a href="Our_Recruiters.php">Our Recruiters</a></li>  
                        <li><a href="ApplyNow.php">Apply Now</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="Contact-Us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="center box">
                <h2>Contact Information</h2>
                <div class="footer-content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text-footer">Oscar Apt, Floor No. 5, College Road, Nashik<br></span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text-footer">0253-7620192</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text-footer">info@yourcompany.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Social Media</h2>
                <div class="footer-content">
                    <div class="social">
                        <a href="https://facebook.com" target="_new"> <span class="fab fa-facebook-f"></span></a>
                        <a href="https://twitter.com" target="_new"><span class="fab fa-twitter"></span></a>
                        <a href="https://instagram.com" target="_new"><span class="fab fa-instagram"></span></a>
                        <a href="https://youtube.com" target="_new"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>
    </footer>
</body>
</html>

<?php
    include "connect.php";
    if(isset($_POST["submit"])){ /*The below code will work only in 'Contact us' button is pressed*/

        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobno = $_POST["mobno"];
        $msg = $_POST["msg"]; 

        $insertQuery = " insert into contactus(Name,Email,MobNo,Message) values ('$name','$email','$mobno','$msg') "; 

        $result = mysqli_query($con, $insertQuery); /*This will insert the record into our table 'ContactUs' in database 'Registration' */

        if($result){
            ?>
            <script>
                alert("Information Stored Successfully!"); 
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

