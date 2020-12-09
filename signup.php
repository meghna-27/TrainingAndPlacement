<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="header_footer.css">
    <link rel="Stylesheet" href="signup.css">
    <title>Sign Up Page</title>
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong> Training & Placement</strong></div>
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="trainings.php">Training</a></li>
        <li><a href="Our_Recruiters.php">Our Recruiters</a></li>  
        <li><a href="#Apply Now">Apply Now</a></li>
        <li><a class="active" href="Login.php">Login</a></li>
        <li><a href="Contact-Us.php">Contact Us</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>


    <main>
        <div class="background">
            <div class="text">
                <h1>Sign Up</h1>
                <p>Have Account? <a href="Login.php">Login</a></p>
            </div>
            <div class="box">
                <form class="form" method="POST">
                    <input type="text" name="fname" class="fullname" placeholder="Full Name" required>
                    <input type="email" name="email" class="email" placeholder="Email" required>
                    <input type="password" name="password" class="password" placeholder="Password" required>
                    <input type="password" name="cpassword" class="password" placeholder="Confirm Password" required>
                    <input type="submit" class="button" value="Sign Up" name="submit">
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>

<?php
    include 'connect.php'; /* PHP file for connecting database with form */

    if(isset($_POST["submit"])){ /*The below code will work only in 'Contact us' button is pressed*/

        $name = mysqli_real_escape_string($con, $_POST["fname"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $password = mysqli_real_escape_string($con, $_POST["password"]);
        $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]); 

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = " select * from signup where email = '$email' ";
        $query = mysqli_query($con,$emailquery);

        $email_count = mysqli_num_rows($query);

        if($email_count > 0){
            ?>
                    <script>
                        alert("Email already Exists");
                    </script>
                    <?php 
        }else{
            if($password === $cpassword){

                $insertQuery = " insert into signup(Name,Email,Pass,CPass) 
                values ('$name','$email','$pass','$cpass') "; 

                $iquery = mysqli_query($con, $insertQuery);

                if($iquery){
                    ?>
                    <script>
                        alert("Inserted Successfully!"); 
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("Please try again");
                    </script>
                    <?php 
                }
            }else{
                ?>
                    <script>
                        alert("Passwords are not matching");
                    </script>
                    <?php 
            }
        }      
    }
?>